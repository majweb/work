<script setup>
import FrontLayout from "@/Layouts/FrontLayout.vue";
import {Link, usePage} from '@inertiajs/vue3';
import {computed, onMounted, ref} from "vue";
import {usePermission} from "@/Composables/usePermission.js";
import {Navigation, Pagination, Autoplay, Scrollbar} from 'swiper/modules';
import { Swiper, SwiperSlide } from 'swiper/vue';
import 'swiper/css';
import 'swiper/css/navigation';
import 'swiper/css/pagination';
import 'swiper/css/scrollbar';
const props = defineProps({
    project: Object,
    image: String,
    agreements: Array,
});
const {hasRole} = usePermission();
const user = computed(()=>usePage().props.auth.user);
const isClient = ref(false);

onMounted(() => {
    isClient.value = true;
});
const generateUrl = computed(() => {
    if (props.project.cityWork && props.project.streetWork && props.project.streetWorkNumber) {
        console.log('ssss')
        let myUrlWithParams = new URL(`https://www.google.com/maps/embed/v1/place?key=${usePage().props.mapsApi}`);
        myUrlWithParams.searchParams.append("q", props.project.countryWork?.allTranslations[usePage().props.language]+' '+props.project.cityWork+' '+props.project.streetWork+' '+props.project.streetWorkNumber +' '+props.project.postalWork);
        return myUrlWithParams.toString(); // <-- TO ROZWIĄZUJE HYDRATION MISMATCH
    }
});


</script>
<template>
    <FrontLayout :title="__('translate.project')" :image="image" keywords="asdsadas" description="asdsadasdsasas">
        <div>
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white dark:bg-gray-800 shadow-xl sm:rounded-lg">
                    <Link :href="route('front.projects')" class="font-bold text-md underline">
                        {{ __('translate.backToList') }}
                    </Link>
                    <div class="overflow-hidden shadow-md w-full mx-auto mt-3">
                        <!-- Top section -->
                        <div class="bg-[#0b2b59] text-white p-8 md:pl-[100px] relative overflow-hidden z-0">
                            <h1 class="text-2xl md:text-4xl font-bold w-3/5 md:w-full">{{ project.position.allTranslations.title[usePage().props.language] }}</h1>
                            <div v-if="project.is_featured" class="absolute top-0 right-0">
                                <div
                                    class="z-0 absolute -top-10 -right-2 h-[120px] w-[120px] bg-red-500 text-white text-xs font-semibold px-3 py-1 rounded-full flex items-center space-x-1"
                                ></div>
                                    <img class="relative z-1 h-[100px]" src="/images/hand.svg" alt="hand">
                            </div>
                        </div>
                        <!-- Bottom section -->
                        <div class="bg-white flex flex-col md:flex-row justify-between md:items-center px-2 md:px-8 py-5">
                            <!-- Left: company info -->
                            <div class="flex items-center space-x-4">
                                <img
                                    :src=" project.user?.profile_photo_url"
                                    alt="Logo"
                                    class="-top-10 relative z-[99] w-[100px] h-[100px] rounded-full border border-2 border-[#0b2b59] object-cover"
                                />
                                <div class="-top-8 relative">
                                    <h2 class="text-lg font-semibold text-gray-900">{{ project.user?.name }}</h2>
                                    <p class="text-gray-600 text-sm">{{ project.cityWork }}, {{ project.countryWork?.name }}</p>
                                </div>
                            </div>
                            <!-- Right: badge + button -->
                            <div class="flex flex-col md:flex-row items-center -top-8 relative gap-2">
                                <Link v-if="!user"
                                      class="bg-[#0b2b59] hover:bg-[#566d8e] text-white font-semibold px-6 py-2 rounded transition-all"
                                      :href="route('login',{ projectToRedirect: project.id })">{{ __('translate.login') }}
                                </Link>

                                <Link class="bg-red-600 hover:bg-red-700 text-white font-semibold px-6 py-2 rounded transition-all" :href="route('front.projects.applyView',project)" v-if="!user || (user && hasRole('worker'))">{{ user && (user && hasRole('worker')) ? __('translate.apply') :  __('translate.applyWithoutLogin') }}</Link>
                            </div>

                        </div>
                    </div>

                    <div class="space-y-10 mx-auto relative -top-5">

                        <!-- SEK CJA 1 -->
                        <section class="bg-white p-6 pt-0">
                            <!-- Pasek z ikonami -->
                            <div class="grid grid-cols-2 md:grid-cols-4 gap-4 justify-between pb-4 mb-6">
                                <!-- Widełki -->
                                <div class="flex-1 md:min-w-[150px] text-center flex flex-col items-center border border-2 border-[#009FE4] p-2">
                                    <img src="/images/icons/wynagrodzenie.svg" alt="money icon" class="w-20 h-20" />
                                    <p class="text-sm text-gray-600">{{__('premium.history_from')}} <span class="font-bold text-black">{{project.basicSalaryFrom}} {{project.currency?.value}}</span> {{__('translate.msc')}}</p>
                                    <p class="text-sm text-gray-600">{{__('premium.history_to')}} <span class="font-bold text-black">{{project.basicSalaryTo}} {{project.currency?.value}}</span> {{__('translate.msc')}}</p>
                                </div>

                                <!-- Tryb pracy -->
                                <div class="flex-1 md:min-w-[150px] text-center flex flex-col items-center border border-2 border-[#009FE4] p-2">
                                    <img src="/images/icons/praca_hybrydowa.svg" alt="hybrid icon" class="w-20 h-20" />
                                    <p class="text-sm text-gray-600">{{__('projects.work')}}</p>
                                    <p class="font-bold" v-for="workingMode in project.workingMode">
                                        {{workingMode.allTranslations.title[usePage().props.language]}}
                                    </p>
                                </div>

                                <!-- Umowa -->
                                <div class="flex-1 md:min-w-[150px] text-center flex flex-col items-center border border-2 border-[#009FE4] p-2">
                                    <img src="/images/icons/5.svg" alt="contract icon" class="w-20 h-20" />
                                    <p class="text-sm text-gray-600">{{__('projects.agreement')}}</p>
                                    <p class="font-bold" v-for="typeOfContract in project.typeOfContract">
                                        {{typeOfContract.allTranslations.name[usePage().props.language]}}
                                    </p>
                                </div>
                                <!-- Wymiar pracy -->
                                <div class="flex-1 md:min-w-[150px] text-center flex flex-col items-center border border-2 border-[#009FE4] p-2">
                                    <img src="/images/icons/wymiar_pracy.svg" alt="time icon" class="w-20 h-20" />
                                    <p class="text-sm text-gray-600">{{__('projects.time')}}</p>
                                    <p class="font-bold">
                                        {{project.workLoad.allTranslations.name[usePage().props.language]}}
                                    </p>
                                </div>
                            </div>

                            <!-- Opis stanowiska -->
                            <h2 class="text-xl font-extrabold text-[#0b2b59] mb-3">{{__('projects.description')}}</h2>
                            <ul class="list-disc list-inside text-gray-700 space-y-2">
                                <li v-for="detailproject in project.detailprojects">{{detailproject.name[usePage().props.language]}}</li>
                            </ul>
                        </section>
                    </div>
                     <div class="mx-auto relative max-w-6xl">
                            <!-- pionowa linia w osobnym wrapperze -->
                            <div class="absolute left-6 md:left-9 inset-y-0 w-[3px] bg-[#0b2b59]"></div>

                            <!-- Sekcja 1: PŁATNOŚĆ -->
                            <div class="flex items-start mb-12 relative">
                                <!-- ikona -->
                                <div class="z-10 flex-shrink-0 bg-[#0b2b59] w-12 h-12 md:w-20 md:h-20 rounded-full flex items-center justify-center text-white">
                                    <img src="/images/icons/płatnosc_i_oczekiwania.svg" :alt="__('translate.icon_pay')" class="w-12 h-12 md:w-20 md:h-20" />
                                </div>

                                <!-- treść -->
                                <div class="p-6 w-full">
                                    <h2 class="text-xl font-extrabold text-[#0b2b59] mb-4">{{__('translate.platnosc')}}</h2>
                                    <p><strong>{{__('translate.tryb_wyplaty')}}</strong> {{project.payoutMode.allTranslations.name[usePage().props.language]}}</p>
                                    <p><strong>{{__('translate.premia')}}</strong> {{__('translate.od')}} {{project.bonusSalaryFrom}}{{project.currency?.name}} {{__('translate.do')}} {{project.bonusSalaryTo}}{{project.currency?.name}}</p>
                                    <p><strong>{{__('translate.system_wynagr')}}</strong></p>
                                    <ul class="list-disc list-inside text-gray-700 ml-4">
                                        <li v-for="paySystem in project.paySystem">{{paySystem.allTranslations.name[usePage().props.language]}}</li>
                                    </ul>
                                </div>
                            </div>

                            <!-- Sekcja 2: ORGANIZACJA PRACY -->
                            <div class="flex items-start mb-12 relative">
                                <div class="z-10 flex-shrink-0 bg-[#0b2b59]  w-12 h-12 md:w-20 md:h-20 rounded-full flex items-center justify-center text-white">
                                    <img src="/images/icons/organizacja_pracy_i_oczekiwania.svg" :alt="__('translate.ikona_org')" class=" w-12 h-12 md:w-20 md:h-20" />
                                </div>

                                <div class="p-6 w-full">
                                    <h2 class="text-xl font-extrabold text-[#0b2b59] mb-4 uppercase">{{__('translate.org_prac')}}</h2>
                                    <p><strong>{{__('translate.org_prac')}}</strong> {{__('translate.od')}} {{project.hoursFrom}} {{__('translate.do')}} {{project.hoursTo}}</p>
                                    <p><strong>{{__('translate.prac_zm')}}</strong>  {{ project.shiftWork == 1 ? __('translate.yes') : __('translate.no') }}</p>
                                    <p><strong>{{__('translate.prac_noc')}}</strong> {{ project.workNight == 1 ? __('translate.yes') : __('translate.no') }}</p>
                                    <p><strong>{{__('translate.dni_tyg')}}</strong>
                                        <span v-for="(day, index) in project.days" :key="index">
                        {{ day.allTranslations.name[usePage().props.language]}}<span v-if="index !== project.days.length - 1">, </span>
                    </span>
                                    </p>
                                </div>
                            </div>

                            <!-- Sekcja 3: WYMAGANIA I OCZEKIWANIA -->
                            <div class="flex items-start mb-4 relative">
                                <div class="z-10 flex-shrink-0 bg-[#0b2b59]  w-12 h-12 md:w-20 md:h-20 rounded-full flex items-center justify-center text-white">
                                    <img src="/images/icons/wymagania_i_oczekiwania.svg" :alt="__('translate.iko_wym')" class=" w-12 h-12 md:w-20 md:h-20" />
                                </div>

                                <div class="p-6 w-full">
                                    <h2 class="text-xl font-extrabold text-[#0b2b59] mb-4 uppercase">{{__('translate.wym_i_oczek')}}</h2>
                                    <p><strong>{{__('translate.experience')}}:</strong> {{ project.experience.allTranslations.name[usePage().props.language]}}</p>
                                    <p><strong>{{__('translate.education')}}:</strong> {{ project.education.name[usePage().props.language] }}</p>
                                    <p><strong>{{__('translate.wait')}}:</strong></p>
                                    <ul class="list-disc list-inside text-gray-700 ml-4 mb-3">
                                        <li v-for="el in project.wait">{{el.allTranslations.name[usePage().props.language]}}</li>
                                    </ul>

                                    <p><strong>{{__('translate.welcome')}}:</strong></p>
                                    <ul class="list-disc list-inside text-gray-700 ml-4">
                                        <li v-for="el in project.welcome">{{el.allTranslations.name[usePage().props.language]}}</li>
                                    </ul>
                                </div>
                            </div>

                        </div>
                     <swiper
                            v-if="project.offer"
                            :modules="[Navigation, Pagination, Autoplay]"
                            :slides-per-view="4"
                            :space-between="30"
                            :loop="true"
                            :autoplay="{
        delay: 3000,
        disableOnInteraction: false
      }"
                            :allowTouchMove="false"
                            navigation
                            :pagination="{ clickable: true }"
                            class="h-[300px] md:h-[350px] w-full"
                            :breakpoints="{
                            320: { // mobile
                                slidesPerView: 2,
                                spaceBetween: 10
                            },
                            640: { // sm
                                slidesPerView: 2,
                                spaceBetween: 15
                            },
                            768: { // md
                                slidesPerView: 3,
                                spaceBetween: 20
                            },
                            1024: { // lg
                                slidesPerView: 4,
                                spaceBetween: 30
                            }
                        }"
                        >
                            <swiper-slide v-for="offer in project.offer" :key="offer.id">
                                <div class="flex justify-center flex-col items-center">
                                    <img
                                        :src="`/images/icons/${offer.id}.svg`"
                                        :alt="offer.allTranslations.name[usePage().props.language]"
                                    />
                                    <span class="block text-center">
                                      {{offer.allTranslations.name[usePage().props.language]}}
                                    </span>
                                </div>
                            </swiper-slide>
                        </swiper>
                        <div class="py-4 flex justify-center">
                        <Link class="bg-red-600 hover:bg-red-700 text-white font-semibold px-6 py-2 rounded transition-all" :href="route('front.projects.applyView',project)" v-if="!user || (user && hasRole('worker'))">{{ user && (user && hasRole('worker')) ? __('translate.apply') :  __('translate.applyWithoutLogin') }}</Link>
                    </div>
                    <div class="map" v-if="isClient">
                        <div class="col-span-6 mt-3" v-if="props.project.cityWork && props.project.streetWork && props.project.streetWorkNumber">
                            <iframe
                                width="100%"
                                height="250"
                                frameborder="0" style="border:0"
                                referrerpolicy="no-referrer-when-downgrade"
                                :src="generateUrl"
                                allowfullscreen>
                            </iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </FrontLayout>
</template>
<style scoped>
/* Lekka animacja wejścia sekcji */
section, div[role="listitem"] {
    transition: all 0.4s ease-in-out;
}
</style>
