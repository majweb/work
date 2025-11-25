<script setup>
import Pagination from '@/Components/Pagination.vue';
import FrontLayout from "@/Layouts/FrontLayout.vue";
import {Link, router, useForm, usePage} from '@inertiajs/vue3';
import __ from "@/lang.js";
import Multiselect from "vue-multiselect";
import InputError from "@/Components/InputError.vue";
import {pickBy} from "lodash";
import {ref} from "vue";
import { Swiper, SwiperSlide } from "swiper/vue";
import { Autoplay, Scrollbar } from "swiper/modules";
import 'swiper/css';
import 'swiper/css/scrollbar';
import moment from "moment/moment.js";

const props = defineProps({
    countries: Array,
    firms: Object,
    features: Object,
});

const optionsCategories = ref([]);


// Funkcja do formatowania liczby pracowników w bardziej czytelny sposób
const formatEmployeeCount = (count) => {
    if (!count) return __('translate.NoData');
    if (count < 10) return __('translate.lessThanTen');
    if (count < 50) return __('translate.betweenTenAndFifty');
    if (count < 250) return __('translate.moreThanFifty');
    return __('translate.moreThanTwoHundred');
};

// Funkcja do ustalania kolorów tła dla firm w oparciu o ich ID (dla różnorodności wizualnej)
const getGradientClass = (id) => {
    const gradientClasses = [
        'from-blue-100 to-indigo-50',
        'from-green-100 to-emerald-50',
        'from-amber-100 to-yellow-50',
        'from-rose-100 to-pink-50',
        'from-purple-100 to-violet-50',
    ];
    return gradientClasses[id % gradientClasses.length];
};

const submit = () => {
    const transformedData = {
        country: form.country?.value || null,
    }

    const filteredData = pickBy(transformedData);

    router.get(route('front.firms'),filteredData, {
        preserveState: true,
        replace: true,
        preserveScroll: true,
    });
};

const form = useForm({
    country: undefined,
});

const companies = ref([
    { id: 1, name: "Dropbox", country: "United States", category: "Technology", logo: "/img/dropbox.svg" },
    { id: 2, name: "Santander", country: "Spain", category: "Finance", logo: "/img/santander.svg" },
    { id: 3, name: "Spotify", country: "Sweden", category: "Media", logo: "/img/spotify.svg" },
    { id: 4, name: "Toyota", country: "Japan", category: "Automotive", logo: "/img/toyota.svg" },
]);

const highlighted = ref([1, 2]); // wyróżnione firmy

</script>

<template>
    <FrontLayout :title="__('translate.projects')">
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg p-6">
                    <div class="grid grid-cols-1 md:grid-cols-2 items-center mb-4">
                        <!-- Formularz wyszukiwania -->
                        <div class="mb-6">
                            <form @submit.prevent="submit" class="w-full">
                                <div class="bg-white p-4 flex items-center gap-2">
                                    <!-- Panel filtrów -->
                                    <div class="w-full">
                                        <multiselect
                                            v-model="form.country"
                                            :options="props.countries"
                                            group-values="elements"
                                            group-label="group"
                                            :group-select="false"
                                            track-by="value"
                                            label="name"
                                            :selectLabel="__('translate.selectLabel')"
                                            :selectGroupLabel="__('translate.selectGroupLabel')"
                                            :selectedLabel="__('translate.selectedLabel')"
                                            :deselectLabel="__('translate.deselectLabel')"
                                            :placeholder="__('translate.placeholderCountry')"
                                        >
                                            <template #noResult>
                           g                     <span>{{__('translate.noOptions')}}</span>
                                            </template>
                                        </multiselect>
                                        <InputError :message="form.errors.country" class="mt-2"/>
                                    </div>
                                    <button
                                        type="submit"
                                        class="px-6 py-2 bg-red-500 text-white font-semibold rounded-md hover:bg-red-600 transition"
                                    >
                                        {{ __('translate.search') }}
                                    </button>
                                </div>
                            </form>
                        </div>

                        <!-- Możesz dodać tutaj jakieś opcje filtrowania -->
                        <div class="flex justify-end space-x-2">
                            <!-- Przykład filtrów/sortowania (można rozbudować później) -->
                            <span class="text-sm text-gray-500 dark:text-gray-400">{{ props.firms.total }} firm</span>
                        </div>
                    </div>
                    <div class="max-w-6xl mx-auto px-6">
                        <!-- TYTUŁ -->
                        <div class="flex flex-col md:flex-row items-start md:items-center justify-between mb-10 gap-8">

                            <!-- LEWA KOLUMNA -->
                            <div class="flex items-start md:items-center flex-row gap-4 shrink-0">
                                <h2 class="text-4xl font-bold text-[#0A2E6D] leading-7 order-1  md:order-0">
                                    SPRAWDŹ<br />
                                    <span class="text-[#0A2E6D]">polecane firmy</span>
                                </h2>

                                <svg height="20" viewBox="0 0 90 20" class="w-1/5 md:w-32 order-0 md:order-1 rotate-90 md:rotate-0">
                                    <path d="M0 10 H90" stroke="#1e3a8a" stroke-width="3" stroke-linecap="round"/>
                                    <path d="M75 5 L90 10 L75 15" fill="#1e3a8a"/>
                                </svg>
                            </div>


                            <!-- PRAWA KOLUMNA (SWIPER) -->
                            <div class="w-full md:max-w-[60%]">
                                <Swiper
                                    :modules="[Autoplay]"
                                    :slides-per-view="3"
                                    :space-between="10"
                                    :loop="true"
                                    :breakpoints="{
        320: {
            slidesPerView: 2
        },
        1024: {
            slidesPerView: 3
        }
    }"
                                    :autoplay="true"
                                >
                                    <SwiperSlide
                                        v-for="c in features"
                                        :key="c.id"
                                        class="border-2 border-blue-400 border-dashed rounded-xl p-5 w-56 bg-white shadow-sm min-h-[180px] sm:min-h-[150px] flex flex-col justify-between transition hover:bg-blue-50 cursor-pointer"
                                    >
                                        <Link :href="route('front.firms.single', c.id)">
                                            <img :src="c.profile_photo_url" alt="" class="h-10" />
                                            <h3 class="font-bold text-lg mt-4">{{ c.name }}</h3>
                                            <div class="text-gray-600 text-sm min-h-[20px]">
                                                {{ c.firm?.countryJson?.allTranslations[usePage().props.language] }}
                                            </div>
                                        </Link>
                                    </SwiperSlide>
                                </Swiper>
                            </div>

                        </div>

                        <!-- SIATKA FIRM -->
                        <div v-if="props.firms.total">
                            <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                                <Link :href="route('front.firms.single',firm.id)"
                                    v-for="firm in props.firms.data"
                                    :key="firm.id"
                                    class="border rounded-xl p-5 bg-white shadow-sm hover:shadow-md transition cursor-pointer hover:bg-gray-50"
                                >
                                    <img :src="firm.profile_photo_url" class="h-10 mb-5" />
                                    <h3 class="font-semibold text-lg">{{ firm.name }}</h3>
                                    <p class="text-gray-500 text-sm">
                                        {{ firm.firm.country }}
                                    </p>
                                </Link>
                            </div>
                        </div>
                        <div v-else class="text-center py-12">
                            <svg xmlns="http://www.w3.org/2000/svg" class="mx-auto h-12 w-12 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.172 16.172a4 4 0 015.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            <h3 class="mt-2 text-sm font-medium text-gray-900 dark:text-white">{{ __('translate.notFoundArticles') }}</h3>
                        </div>
                            <Pagination v-if="props.firms.total > 10" class="mt-10 text-center mx-auto" :links="props.firms.links" />
                    </div>



<!--                    <div v-if="props.firms.total" class="space-y-6">-->
<!--                        &lt;!&ndash; Lista firm &ndash;&gt;-->
<!--                        <div v-for="firm in props.firms.data" :key="firm.id"-->
<!--                             class="group relative bg-gradient-to-r rounded-xl shadow-sm hover:shadow-md transition-all duration-300 overflow-hidden"-->
<!--                             :class="getGradientClass(firm.id)">-->

<!--                            <div class="flex flex-col md:flex-row p-5 gap-6">-->
<!--                                &lt;!&ndash; Logo firmy &ndash;&gt;-->
<!--                                <div class="md:w-36 lg:w-48 h-36 flex items-center justify-center bg-white rounded-lg overflow-hidden shadow p-4">-->
<!--                                    <img v-if="firm.profilePhotoUrl" :src="firm.profilePhotoUrl" :alt="firm.name" class="max-h-full max-w-full object-contain">-->
<!--                                    <div v-else class="flex items-center justify-center h-full w-full bg-gray-100 text-gray-500">-->
<!--                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-16 w-16" viewBox="0 0 20 20" fill="currentColor">-->
<!--                                            <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd" />-->
<!--                                        </svg>-->
<!--                                    </div>-->
<!--                                </div>-->

<!--                                &lt;!&ndash; Informacje o firmie &ndash;&gt;-->
<!--                                <div class="flex-1">-->
<!--                                    <Link :href="route('front.firms.single', firm)" class="block">-->
<!--                                        <h2 class="text-xl font-bold text-gray-900 dark:text-white hover:text-blue-600 transition-colors duration-200 mb-2">{{ firm.name }}</h2>-->
<!--                                    </Link>-->

<!--                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-3 mb-4">-->
<!--                                        <div v-if="firm.firm && firm.firm.count_workers" class="flex items-center text-gray-600 dark:text-gray-300">-->
<!--                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20" fill="currentColor">-->
<!--                                                <path d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z" />-->
<!--                                            </svg>-->
<!--                                            <span>{{ formatEmployeeCount(firm.firm.count_workers) }}</span>-->
<!--                                        </div>-->

<!--                                        <div v-if="firm.firm && (firm.firm.city || firm.firm.country)" class="flex items-center text-gray-600 dark:text-gray-300">-->
<!--                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20" fill="currentColor">-->
<!--                                                <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd" />-->
<!--                                            </svg>-->
<!--                                            <span>{{ [firm.firm.city, firm.firm.country].filter(Boolean).join(', ') }}</span>-->
<!--                                        </div>-->
<!--                                    </div>-->

<!--                                    <div v-if="firm.firm && firm.firm.description" class="text-gray-600 dark:text-gray-300 text-sm line-clamp-2 mb-3">-->
<!--                                        {{ firm.firm.description }}-->
<!--                                    </div>-->

<!--                                    <div class="flex flex-wrap gap-2 mt-auto">-->
<!--                                        <Link :href="route('front.firms.single', firm)" class="inline-flex items-center px-3 py-1 text-sm font-medium text-white bg-blue-600 rounded hover:bg-blue-700 transition">-->
<!--                                            <span>{{ __('translate.details') }}</span>-->
<!--                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1" viewBox="0 0 20 20" fill="currentColor">-->
<!--                                                <path fill-rule="evenodd" d="M10.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L12.586 11H5a1 1 0 110-2h7.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />-->
<!--                                            </svg>-->
<!--                                        </Link>-->

<!--                                        &lt;!&ndash; Odznaki/tagi &ndash;&gt;-->
<!--                                        <span v-if="firm.firm && firm.firm.opinion_google" class="inline-flex items-center px-2 py-1 text-xs font-medium text-green-700 bg-green-100 rounded">-->
<!--                                            <svg class="w-3 h-3 mr-1 text-yellow-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">-->
<!--                                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />-->
<!--                                            </svg>-->
<!--                                            Google-->
<!--                                        </span>-->
<!--                                        <span v-if="firm.firm && firm.firm.opinion_facebook" class="inline-flex items-center px-2 py-1 text-xs font-medium text-blue-700 bg-blue-100 rounded">-->
<!--                                            <svg class="w-3 h-3 mr-1 text-blue-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">-->
<!--                                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />-->
<!--                                            </svg>-->
<!--                                            Facebook-->
<!--                                        </span>-->
<!--                                        <span v-if="firm.firm && firm.firm.video" class="inline-flex items-center px-2 py-1 text-xs font-medium text-red-700 bg-red-100 rounded">-->
<!--                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 mr-1" viewBox="0 0 20 20" fill="currentColor">-->
<!--                                                <path d="M2 6a2 2 0 012-2h6a2 2 0 012 2v8a2 2 0 01-2 2H4a2 2 0 01-2-2V6zM14.553 7.106A1 1 0 0014 8v4a1 1 0 00.553.894l2 1A1 1 0 0018 13V7a1 1 0 00-1.447-.894l-2 1z" />-->
<!--                                            </svg>-->
<!--                                            Wideo-->
<!--                                        </span>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->

<!--                        &lt;!&ndash; Paginacja &ndash;&gt;-->
<!--                    </div>-->
<!--                    <div v-else class="text-center py-12">-->
<!--                        <svg xmlns="http://www.w3.org/2000/svg" class="mx-auto h-12 w-12 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">-->
<!--                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.172 16.172a4 4 0 015.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />-->
<!--                        </svg>-->
<!--                        <h3 class="mt-2 text-sm font-medium text-gray-900 dark:text-white">{{ __('translate.notFoundArticles') }}</h3>-->
<!--                    </div>-->
                </div>
            </div>
        </div>
    </FrontLayout>
</template>
<style src="vue-multiselect/dist/vue-multiselect.css"></style>
<style lang="scss">
.multiselect__tags{
    border:1px solid #0A2E6D;
}
.multiselect__tag{
    background: #0A2E6D !important;
}
.multiselect__option--highlight {
    background: #0A2E6D !important;
    outline: none;
    color: white;
}

.multiselect__option--highlight:after {
    content: attr(data-select);
    background: #0A2E6D !important;
    color: white;
}

.multiselect__option--selected {
    background: #00A0E3B2 !important;
    color: #35495E;
    font-weight: bold;
}

.multiselect__option--selected.multiselect__option--highlight {
    background: #00A0E3B2 !important;
    color: #fff;
}

.multiselect__option--selected.multiselect__option--highlight:after {
    background: #00A0E3B2 !important;
    content: attr(data-deselect);
    color: white !important;
}

.multiselect__option--selected:after {
    content: attr(data-selected);
    color: #00A0E3B2;
    background: transparent !important;
}
.multiselect__select{
    height: 98%;
    background: rgba(10, 46, 109, 0.14);
}
.multiselect__select::before{
    border-color: #0A2E6D transparent transparent;
}
.multiselect--disabled.multiselect .multiselect__select{
    background: rgba(10, 46, 109, 0.14);
}
</style>
