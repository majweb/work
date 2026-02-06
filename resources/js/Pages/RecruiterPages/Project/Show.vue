<script setup>

import {Link, router, usePage} from '@inertiajs/vue3';
import AppLayout from '@/Layouts/AppLayout.vue';
import DangerButton from "@/Components/DangerButton.vue";
import DialogModal from "@/Components/DialogModal.vue";
import SecondaryButton from "@/Components/SecondaryButton.vue";
import {computed, ref, onMounted, nextTick} from "vue";
import __ from "@/lang.js";
import mapboxgl from "mapbox-gl";
import "mapbox-gl/dist/mapbox-gl.css";

mapboxgl.accessToken = "pk.eyJ1Ijoid29yazR5b3UiLCJhIjoiY21pc255bnNtMGJkcTNncXhzZDdveWowdCJ9.OWMREe5d718nrvgfNfGIMQ";

const props = defineProps({
    project: Object,
    otherRecruits: Array,
    locale: String,
});
const selectedProject = ref(null);
const confirmCancelProject = ref(false);
const map = ref(null);

const openModal = (project)=>{
    confirmCancelProject.value = true;
    selectedProject.value = project;
}

const DeleteProject = () => {
    if(selectedProject){
        router.delete(route('project-recruits.destroy',selectedProject.value), {
            onSuccess: () => {
                confirmCancelProject.value = false;
                selectedProject.value = null;
            }
        });
    }
};

const getPositionTitle = computed(() => {
    const position = props.project.position;
    if (position?.allTranslations?.title?.[usePage().props.language]) {
        return position.allTranslations.title[usePage().props.language];
    }
    if (props.project.title?.[usePage().props.language]) {
        return props.project.title[usePage().props.language];
    }
    return __('translate.projectWithoutTitle');
});

const hasLocation = computed(() => {
    return props.project.cityWork && props.project.streetWork && props.project.streetWorkNumber;
});

onMounted(async () => {
    if (!hasLocation.value) return;

    await nextTick();

    // Geocoding - pobierz współrzędne z adresu
    const address = `${props.project.streetWork} ${props.project.streetWorkNumber}, ${props.project.postalWork} ${props.project.cityWork}, ${props.project.countryWork}`;
    const geocodeUrl = `https://api.mapbox.com/geocoding/v5/mapbox.places/${encodeURIComponent(address)}.json?access_token=${mapboxgl.accessToken}`;

    try {
        const response = await fetch(geocodeUrl);
        const data = await response.json();

        if (data.features && data.features.length > 0) {
            const [lng, lat] = data.features[0].center;

            // Inicjalizacja mapy
            map.value = new mapboxgl.Map({
                container: 'projectMap',
                style: "mapbox://styles/mapbox/light-v11",
                center: [lng, lat],
                zoom: 14
            });

            // Dodaj marker
            new mapboxgl.Marker({ color: '#e31e24' })
                .setLngLat([lng, lat])
                .setPopup(
                    new mapboxgl.Popup({ offset: 25 })
                        .setHTML(`
                            <div class="p-2">
                                <p class="font-semibold">${props.project.cityWork}</p>
                                <p class="text-sm text-gray-600">${props.project.streetWork} ${props.project.streetWorkNumber}</p>
                            </div>
                        `)
                )
                .addTo(map.value);

            // Dodaj kontrolki nawigacji
            map.value.addControl(new mapboxgl.NavigationControl(), 'top-right');
        }
    } catch (error) {
        console.error('Error loading map:', error);
    }
});

</script>

<template>
    <AppLayout :title="__('translate.project')+' #' + props.project.id">
        <div class="py-6 bg-gray-50 min-h-screen">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <!-- Nagłówek z linkiem wstecz -->
                <div class="mb-6">
                    <Link
                        :href="route('project-recruits.index')"
                        class="inline-flex items-center text-[#e31e24] hover:text-red-700 font-semibold text-xs uppercase tracking-wider transition-colors"
                    >
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"/>
                        </svg>
                        {{ __('translate.backButton') }}
                    </Link>
                </div>

                <!-- Tytuł projektu -->
                <div class="mb-6">
                    <h1 class="text-3xl font-bold text-gray-900">
                        {{ getPositionTitle }}
                    </h1>
                </div>

                <!-- Status naboru i statystyki -->
                <div class="bg-white rounded-xl shadow-sm border border-gray-200 p-6 mb-6">
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                        <!-- Status naboru z licznikami -->
                        <div class="bg-gray-50 rounded-lg p-5">
                            <div class="flex items-center mb-3">
                                <div class="w-3 h-3 rounded-full mr-2 animate-pulse"
                                     :class="props.project.is_active ? 'bg-green-500' : 'bg-gray-400'">
                                </div>
                                <p class="text-sm text-gray-600 font-medium">{{ __('translate.recruitmentStatus') }}:</p>
                            </div>
                            <p class="text-lg font-bold mb-4"
                               :class="props.project.is_active ? 'text-green-600' : 'text-gray-600'">
                                {{ props.project.is_active ? __('translate.recruitmentActive') : __('translate.inactive') }}
                            </p>

                            <div class="grid grid-cols-3 gap-3 text-center">
                                <div class="bg-white rounded-lg p-2">
                                    <div class="text-xs text-gray-500 mb-1 font-medium">{{ __('translate.statusYesLabel') }}</div>
                                    <div class="text-2xl font-bold" style="color: #0d2a52;">{{ props.project.yes_count || 0 }}</div>
                                </div>
                                <div class="bg-white rounded-lg p-2">
                                    <div class="text-xs text-gray-500 mb-1 font-medium">{{ __('translate.statusNoLabel') }}</div>
                                    <div class="text-2xl font-bold" style="color: #e31e24;">{{ props.project.no_count || 0 }}</div>
                                </div>
                                <div class="bg-white rounded-lg p-2">
                                    <div class="text-xs text-gray-500 mb-1 font-medium">{{ __('translate.statusMaybeLabel') }}</div>
                                    <div class="text-2xl font-bold" style="color: #00a0e3;">{{ props.project.maybe_count || 0 }}</div>
                                </div>
                            </div>
                        </div>

                        <!-- Aplikacje -->
                        <div class="bg-gray-50 rounded-lg p-5">
                            <p class="text-sm text-gray-600 mb-2 font-medium">{{ __('translate.applications') }}</p>
                            <p class="text-4xl font-bold text-[#0d2a52]">{{ props.project.aplications_count || 0 }}</p>
                        </div>

                        <!-- Wyświetlenia -->
                        <div class="bg-gray-50 rounded-lg p-5">
                            <p class="text-sm text-gray-600 mb-2 font-medium">{{ __('translate.viewsCount') }}</p>
                            <p class="text-4xl font-bold text-[#0d2a52]">{{ props.project.views_count || 0 }}</p>
                        </div>

                        <!-- Nowe aplikacje -->
                        <div class="bg-gray-50 rounded-lg p-5">
                            <p class="text-sm text-gray-600 mb-2 font-medium">{{ __('translate.newApplications') }}</p>
                            <p class="text-4xl font-bold text-[#00a0e3]">{{ props.project.new_count || 0 }}</p>
                        </div>
                    </div>
                </div>

                <!-- Główna zawartość -->
                <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
                    <!-- Lewa kolumna - szczegóły (2/3) -->
                    <div class="lg:col-span-2 space-y-6">

                        <!-- Podstawowe informacje -->
                        <div class="bg-white rounded-xl shadow-sm border border-gray-200 p-6">
                            <div class="flex items-center gap-2 mb-5">
                                <img class="w-10 h-10" src="/images/icons/recruit/informacje_podstawowe.svg" :alt="__('translate.altBasicInfo')">
                                <h2 class="text-lg font-bold text-gray-900">{{ __('translate.basicInfo') }}</h2>
                            </div>

                            <div class="grid grid-cols-2 gap-4">
                                <div class="bg-gray-50 rounded-lg p-4">
                                    <span class="text-xs text-gray-500 block mb-1">Id:</span>
                                    <span class="font-bold text-gray-900 text-lg">{{ props.project.id }}</span>
                                </div>
                                <div class="bg-gray-50 rounded-lg p-4">
                                    <span class="text-xs text-gray-500 block mb-1">{{ __('translate.statusLabel') }}:</span>
                                    <span class="font-semibold text-lg"
                                          :class="props.project.is_active ? 'text-green-600' : 'text-red-600'">
                                        {{ props.project.is_active ? __('translate.activeStatus') : __('translate.inactiveStatus') }}
                                    </span>
                                </div>
                                <div class="bg-gray-50 rounded-lg p-4">
                                    <span class="text-xs text-gray-500 block mb-1">{{ __('translate.recruiterLabel') }}:</span>
                                    <span class="font-semibold text-gray-900 text-sm">{{ props.project.recruit?.name }}</span>
                                </div>
                                <div class="bg-gray-50 rounded-lg p-4 col-span-2" v-if="props.otherRecruits && props.otherRecruits.length">
                                    <span class="text-xs text-gray-500 block mb-1">{{ __('translate.otherRecruitersLabel') }}:</span>
                                    <span class="font-semibold text-gray-900 text-sm">
                                        {{ props.otherRecruits.map(r => r.name).join(', ') }}
                                    </span>
                                </div>
                                <div class="bg-gray-50 rounded-lg p-4 col-span-2" v-if="props.project.title">
                                    <span class="text-xs text-gray-500 block mb-1">{{ __('translate.projectTitleLabel') }}:</span>
                                    <span class="font-semibold text-gray-900 text-sm">{{ props.project.title[usePage().props.language] }}</span>
                                </div>
                            </div>
                        </div>

                        <!-- Kategoria -->
                        <div class="bg-white rounded-xl shadow-sm border border-gray-200 p-6">
                            <div class="flex items-center gap-2 mb-5">
                                <img class="w-10 h-10" src="/images/icons/recruit/kategoria.svg" :alt="__('translate.altCategory')">
                                <h2 class="text-lg font-bold text-gray-900">{{ __('translate.categorySection') }}</h2>
                            </div>

                            <div class="bg-gray-50 rounded-lg p-4">
                                <div class="grid grid-cols-2 gap-4">
                                    <div>
                                        <span class="text-xs text-gray-500 block mb-1">{{ __('translate.industryLabel') }}:</span>
                                        <span class="font-semibold text-gray-900 text-sm">{{ props.project.category?.allTranslations?.title[usePage().props.language] }}</span>
                                    </div>
                                    <div>
                                        <span class="text-xs text-gray-500 block mb-1">{{ __('translate.subIndustryLabel') }}:</span>
                                        <span class="font-semibold text-gray-900 text-sm">{{ props.project.categorySub?.allTranslations?.title[usePage().props.language] }}</span>
                                    </div>
                                    <div>
                                        <span class="text-xs text-gray-500 block mb-1">{{ __('translate.professionLabel') }}:</span>
                                        <span class="font-semibold text-gray-900 text-sm">{{ props.project.profession?.allTranslations?.title[usePage().props.language] }}</span>
                                    </div>
                                    <div>
                                        <span class="text-xs text-gray-500 block mb-1">{{ __('translate.positionLabel') }}:</span>
                                        <span class="font-semibold text-gray-900 text-sm">{{ props.project.position?.allTranslations?.title[usePage().props.language] }}</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Wynagrodzenie -->
                        <div class="bg-white rounded-xl shadow-sm border border-gray-200 p-6">
                            <div class="flex items-center gap-2 mb-5">
                                <img class="w-10 h-10" src="/images/icons/recruit/wynagrodzenie.svg" :alt="__('translate.altSalary')">
                                <h2 class="text-lg font-bold text-gray-900">{{ __('translate.salarySection') }}</h2>
                            </div>

                            <div class="grid grid-cols-2 gap-4">
                                <div class="bg-gray-50 rounded-lg p-4">
                                    <span class="text-xs text-gray-500 block mb-1">{{ __('translate.salaryLabel') }}:</span>
                                    <span class="font-bold text-[#0d2a52] text-xl">
                                        {{ props.project.basicSalaryFrom }} - {{ props.project.basicSalaryTo }}
                                    </span>
                                    <span class="text-gray-600 text-sm ml-2">{{ props.project.currency?.name }}</span>
                                </div>

                                <div class="bg-gray-50 rounded-lg p-4">
                                    <span class="text-xs text-gray-500 block mb-1">{{ __('translate.payoutModeLabel') }}:</span>
                                    <span class="font-semibold text-gray-900 text-sm">{{ props.project.payoutMode?.allTranslations?.name[usePage().props.language] }}</span>
                                </div>

                                <div class="bg-gray-50 rounded-lg p-4" v-if="props.project.bonusSalaryFrom || props.project.bonusSalaryTo">
                                    <span class="text-xs text-gray-500 block mb-1">{{ __('translate.bonusLabel') }}:</span>
                                    <span class="font-semibold text-gray-900 text-sm">
                                        {{ props.project.bonusSalaryFrom }} - {{ props.project.bonusSalaryTo }} {{ props.project.currency?.name }}
                                    </span>
                                </div>

                                <div class="bg-gray-50 rounded-lg p-4" v-if="props.project.paySystem && props.project.paySystem.length">
                                    <span class="text-xs text-gray-500 block mb-1">{{ __('translate.incomeTypeLabel') }}:</span>
                                    <span class="font-semibold text-gray-900 text-sm">
                                        <span v-for="(pay, index) in props.project.paySystem" :key="index">
                                            {{ pay.allTranslations?.name[usePage().props.language] }}<span v-if="index !== props.project.paySystem.length - 1">, </span>
                                        </span>
                                    </span>
                                </div>
                            </div>
                        </div>

                        <!-- Organizacja pracy -->
                        <div class="bg-white rounded-xl shadow-sm border border-gray-200 p-6">
                            <div class="flex items-center gap-2 mb-5">
                                <img class="w-10 h-10" src="/images/icons/recruit/organizacja_pracy.svg" :alt="__('translate.altWorkOrganization')">
                                <h2 class="text-lg font-bold text-gray-900">{{ __('translate.workOrganization') }}</h2>
                            </div>

                            <div class="grid grid-cols-2 gap-4">
                                <div class="bg-gray-50 rounded-lg p-4">
                                    <span class="text-xs text-gray-500 block mb-1">{{ __('translate.workModeLabel') }}:</span>
                                    <span class="font-semibold text-gray-900 text-sm">
                                        <span v-for="(working, index) in props.project.workingMode" :key="index">
                                            {{ working.allTranslations?.title[usePage().props.language] }}<span v-if="index !== props.project.workingMode.length - 1">, </span>
                                        </span>
                                    </span>
                                </div>

                                <div class="bg-gray-50 rounded-lg p-4">
                                    <span class="text-xs text-gray-500 block mb-1">{{ __('translate.contractTypeLabel') }}:</span>
                                    <span class="font-semibold text-gray-900 text-sm">
                                        <span v-for="(type, index) in props.project.typeOfContract" :key="index">
                                            {{ type.allTranslations?.name[usePage().props.language] }}<span v-if="index !== props.project.typeOfContract.length - 1">, </span>
                                        </span>
                                    </span>
                                </div>

                                <div class="bg-gray-50 rounded-lg p-4">
                                    <span class="text-xs text-gray-500 block mb-1">{{ __('translate.workScopeLabel') }}:</span>
                                    <span class="font-semibold text-gray-900 text-sm">{{ props.project.workLoad?.allTranslations?.name[usePage().props.language] }}</span>
                                </div>

                                <div class="bg-gray-50 rounded-lg p-4">
                                    <span class="text-xs text-gray-500 block mb-1">{{ __('translate.workHoursLabel') }}:</span>
                                    <span class="font-semibold text-gray-900 text-sm">{{ props.project.hoursFrom }} - {{ props.project.hoursTo }}</span>
                                </div>

                                <div class="bg-gray-50 rounded-lg p-4">
                                    <span class="text-xs text-gray-500 block mb-1">{{ __('translate.nightWorkLabel') }}:</span>
                                    <span class="font-semibold text-gray-900 text-sm">
                                        {{ props.project.workNight == 2 ? __('translate.no') : __('translate.yes') }}
                                    </span>
                                </div>

                                <div class="bg-gray-50 rounded-lg p-4" v-if="props.project.shift_work">
                                    <span class="text-xs text-gray-500 block mb-1">{{ __('translate.shiftWorkLabel') }}:</span>
                                    <span class="font-semibold text-gray-900 text-sm">
                                        {{ props.project.shift_work?.name?.[usePage().props.language] }}
                                    </span>
                                </div>
                            </div>

                            <div class="grid grid-cols-1 gap-4 mt-4" v-if="props.project.days && props.project.days.length">
                                <div class="bg-gray-50 rounded-lg p-4">
                                    <span class="text-xs text-gray-500 block mb-2">{{ __('translate.workDaysLabel') }}:</span>
                                    <div class="flex flex-wrap gap-2">
                                        <span v-for="(day, index) in props.project.days"
                                              :key="index"
                                              class="inline-block bg-white px-3 py-1 rounded-full text-xs font-medium text-gray-700 border border-gray-200">
                                            {{ day.allTranslations?.name[usePage().props.language] }}
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- mile widziane -->
                        <div class="bg-white rounded-xl shadow-sm border border-gray-200 p-6">
                            <div class="flex items-center gap-2 mb-5">
                                <img class="w-10 h-10" src="/images/icons/recruit/mile_widziane.svg" :alt="__('translate.altWelcomed')">
                                <h2 class="text-lg font-bold text-gray-900">{{ __('translate.welcomed') }}</h2>
                            </div>

                            <div class="space-y-3">
                                <div class="bg-gray-50 rounded-lg p-4" v-if="props.project.experience">
                                    <span class="text-xs text-gray-500 block mb-1">{{ __('translate.experienceInternational') }}:</span>
                                    <span class="font-semibold text-gray-900 text-sm">{{ props.project.experience?.allTranslations?.name[usePage().props.language] }}</span>
                                </div>

                                <div class="bg-gray-50 rounded-lg p-4" v-if="props.project.welcome && props.project.welcome.length">
                                    <span class="text-xs text-gray-500 block mb-1">{{ __('translate.welcomedLabel') }}:</span>
                                    <div class="flex flex-wrap gap-2 mt-2">
                                        <span v-for="(w, index) in props.project.welcome"
                                              :key="index"
                                              class="inline-block bg-white px-3 py-1 rounded-full text-xs font-medium text-gray-700 border border-gray-200">
                                            {{ w.allTranslations?.name[usePage().props.language] }}
                                        </span>
                                    </div>
                                </div>

                                <div class="bg-gray-50 rounded-lg p-4" v-if="props.project.education">
                                    <span class="text-xs text-gray-500 block mb-1">{{ __('translate.educationLabel') }}:</span>
                                    <span class="font-semibold text-gray-900 text-sm">{{ props.project.education?.name?.[usePage().props.language] }}</span>
                                </div>
                            </div>
                        </div>

                        <!-- oferujemy -->
                        <div class="bg-white rounded-xl shadow-sm border border-gray-200 p-6" v-if="props.project.offer && props.project.offer.length">
                            <div class="flex items-center gap-2 mb-5">
                                <img class="w-10 h-10" src="/images/icons/recruit/oferujemy.svg" :alt="__('translate.altWeOffer')">
                                <h2 class="text-lg font-bold text-gray-900">{{ __('translate.weOffer') }}</h2>
                            </div>

                            <div class="flex flex-wrap gap-2">
                                <span v-for="(off, index) in props.project.offer"
                                      :key="index"
                                      class="inline-block bg-[#00a0e3] text-white px-4 py-2 rounded-lg text-sm font-medium">
                                    {{ off.allTranslations?.name[usePage().props.language] }}
                                </span>
                            </div>
                        </div>

                        <!-- oczekujemy -->
                        <div class="bg-white rounded-xl shadow-sm border border-gray-200 p-6" v-if="props.project.wait && props.project.wait.length">
                            <div class="flex items-center gap-2 mb-5">
                                <img class="w-10 h-10" src="/images/icons/recruit/oczekujemy.svg" :alt="__('translate.altWeExpect')">
                                <h2 class="text-lg font-bold text-gray-900">{{ __('translate.weExpect') }}</h2>
                            </div>

                            <div class="flex flex-wrap gap-2">
                                <span v-for="(w, index) in props.project.wait"
                                      :key="index"
                                      class="inline-block bg-gray-100 text-gray-700 px-4 py-2 rounded-lg text-sm font-medium border border-gray-300">
                                    {{ w.allTranslations?.name[usePage().props.language] }}
                                </span>
                            </div>
                        </div>

                    </div>

                    <!-- Prawa kolumna - mapa i akcje (1/3) -->
                    <div class="space-y-6">
                        <!-- Mapa -->
                        <div class="bg-white rounded-xl shadow-sm border border-gray-200 overflow-hidden"
                             v-if="hasLocation">
                            <div id="projectMap" style="width: 100%; height: 250px;"></div>
                        </div>

                        <!-- Lokalizacja -->
                        <div class="bg-white rounded-xl shadow-sm border border-gray-200 p-6">
                            <div class="flex items-center gap-2 mb-4">
                                <img class="w-10 h-10" src="/images/icons/recruit/lokalizacja.svg" :alt="__('translate.altLocation')">
                                <h2 class="text-base font-bold text-gray-900">{{ __('translate.locationLabel') }}</h2>
                            </div>

                            <div class="space-y-2 text-sm">
                                <div class="flex items-start">
                                    <svg class="w-4 h-4 text-gray-400 mt-0.5 mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                    </svg>
                                    <div>
                                        <p class="font-semibold text-gray-900">{{ props.project.cityWork }}</p>
                                        <p class="text-gray-600">{{ props.project.countryWork?.allTranslations?.[usePage().props.language] || props.project.countryWork }}</p>
                                    </div>
                                </div>

                                <div class="flex items-start" v-if="props.project.streetWork">
                                    <svg class="w-4 h-4 text-gray-400 mt-0.5 mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                                    </svg>
                                    <p class="text-gray-700">
                                        {{ props.project.streetWork }} {{ props.project.streetWorkNumber }}
                                    </p>
                                </div>

                                <div class="flex items-start" v-if="props.project.postalWork">
                                    <svg class="w-4 h-4 text-gray-400 mt-0.5 mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                    </svg>
                                    <p class="text-gray-700">{{ props.project.postalWork }}</p>
                                </div>
                            </div>
                        </div>

                        <!-- Kraj publikacji -->
                        <div class="bg-white rounded-xl shadow-sm border border-gray-200 p-6" v-if="props.project.country && props.project.country.length">
                            <div class="flex items-center gap-2 mb-4">
                                <img class="w-10 h-10" src="/images/icons/recruit/kraj_publikacji.svg" :alt="__('translate.altPublicationCountry')">
                                <h2 class="text-base font-bold text-gray-900">{{ __('translate.publicationCountry') }}</h2>
                            </div>
                            <div class="flex flex-wrap gap-2">
                                <span v-for="(country, index) in props.project.country"
                                      :key="index"
                                      class="inline-block bg-gray-100 text-gray-700 px-3 py-1.5 rounded-lg text-xs font-medium">
                                    {{ country.allTranslations?.[usePage().props.language] }}
                                </span>
                            </div>
                        </div>

                        <!-- Miejsce pracy -->
                        <div class="bg-white rounded-xl shadow-sm border border-gray-200 p-6" v-if="props.project.workingPlace">
                            <div class="flex items-center gap-2 mb-4">
                                <img class="w-10 h-10" src="/images/icons/recruit/miejsce_pracy.svg" :alt="__('translate.altWorkplace')">
                                <h2 class="text-base font-bold text-gray-900">{{ __('translate.workplaceLabel') }}</h2>
                            </div>
                            <p class="text-sm font-semibold text-gray-900">
                                {{ props.project.workingPlace?.allTranslations?.name[usePage().props.language] }}
                            </p>
                        </div>

                        <!-- Firma zewnętrzna -->
                        <div class="bg-white rounded-xl shadow-sm border border-gray-200 p-6" v-if="props.project.external_company">
                            <div class="flex items-center gap-2 mb-4">
                                <img class="w-10 h-10" src="/images/icons/recruit/firma_zewnetrzna.svg" :alt="__('translate.altExternalCompany')">
                                <h2 class="text-base font-bold text-gray-900">{{ __('translate.externalCompanyLabel') }}</h2>
                            </div>
                            <p class="text-sm font-semibold text-gray-900">
                                {{ props.project.external_company.name }}
                                <span class="text-gray-500">({{ props.project.external_company.abbreviation }})</span>
                            </p>
                        </div>

                        <!-- Przyciski akcji -->
                        <div class="space-y-3">
                            <Link
                                :href="route('project-recruits.edit', props.project)"
                                class="w-full block text-center px-6 py-3.5 bg-[#0d2a52] text-white font-bold rounded-lg hover:bg-[#1a3d6e] transition-all duration-200 shadow-sm hover:shadow-md uppercase tracking-wider text-sm"
                            >
                                {{ __('translate.editButton') }}
                            </Link>

                            <button
                                @click="openModal(props.project)"
                                class="w-full px-6 py-3.5 bg-[#e31e24] text-white font-bold rounded-lg hover:bg-red-700 transition-all duration-200 shadow-sm hover:shadow-md uppercase tracking-wider text-sm"
                            >
                                {{ __('translate.deleteButton') }}
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Modal usuwania -->
                <DialogModal :show="confirmCancelProject" @close="confirmCancelProject = false">
                    <template #title>
                        {{ __('translate.questionDelete') }} - {{ __('translate.project').toLowerCase() }} #{{ selectedProject && selectedProject.id }}
                    </template>
                    <template #content>
                        {{ __('translate.questionDeleteConfirm') }} - {{ __('translate.project').toLowerCase() }} #{{ selectedProject && selectedProject.id }}
                    </template>
                    <template #footer>
                        <SecondaryButton @click.native="confirmCancelProject = false">
                            {{ __('translate.cancel') }}
                        </SecondaryButton>
                        <DangerButton class="ml-2" @click.native="DeleteProject">
                            {{ __('translate.delete') }}
                        </DangerButton>
                    </template>
                </DialogModal>
            </div>
        </div>
    </AppLayout>
</template>

<style src="vue-multiselect/dist/vue-multiselect.css"></style>
<style lang="scss">

.multiselect__tag{
    background: #00a0e3 !important;
}
.multiselect__option--highlight {
    background: #00a0e3 !important;
    outline: none;
    color: white;
}

.multiselect__option--highlight:after {
    content: attr(data-select);
    background: #00a0e3 !important;
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
</style>
