<script setup>
import FrontLayout from "@/Layouts/FrontLayout.vue";
import {Link, usePage} from '@inertiajs/vue3';
import { useProjectHelpers } from "@/Composables/useProjectHelpers.js";
import {computed, onMounted, ref} from "vue";
import {usePermission} from "@/Composables/usePermission.js";
import mapboxgl from "mapbox-gl";
import "mapbox-gl/dist/mapbox-gl.css";
import {Navigation, Pagination, Autoplay} from 'swiper/modules';
import { Swiper, SwiperSlide } from 'swiper/vue';
import 'swiper/css';
import 'swiper/css/navigation';
import 'swiper/css/pagination';
import moment from "moment";

const props = defineProps({
    project: Object,
    image: String,
    agreements: Array,
    page: Object
});
const {hasRole} = usePermission();
const { getPositionTitle } = useProjectHelpers();
const user = computed(()=>usePage().props.auth.user);
const isClient = ref(false);


const jobSchema = computed(() => {
    // Schema.org oczekuje wartości: FULL_TIME, PART_TIME, CONTRACTOR, TEMPORARY, INTERN, VOLUNTEER, PER_DIEM, OTHER
    const mapEmploymentType = (types) => {
        // Schema.org akceptuje: FULL_TIME, PART_TIME, CONTRACTOR, TEMPORARY, INTERN, VOLUNTEER, PER_DIEM, OTHER
        if (!types || !Array.isArray(types) || types.length === 0) {
            return "FULL_TIME";
        }

        // Pobieramy nazwę pierwszego typu umowy i zamieniamy na małe litery dla łatwiejszego porównania
        const typeName = (types[0]?.name || "").toLowerCase();

        if (typeName.includes("o pracę")) {
            return "FULL_TIME";
        }

        if (typeName.includes("zlecenie") || typeName.includes("b2b") || typeName.includes("dzieło")) {
            return "CONTRACTOR";
        }

        if (typeName.includes("staż") || typeName.includes("praktyka")) {
            return "INTERN";
        }

        // Domyślna wartość, jeśli żaden z powyższych nie pasuje
        return "FULL_TIME";
    };

    const currentLang = usePage().props.language || 'pl';
    const title = props.project.title?.[currentLang] || props.project.title?.pl || props.project.title || getPositionTitle(props.project);
    const description = props.project.offer?.[currentLang] || props.project.offer?.pl || props.project.offer || "";

    const datePosted = new Date(props.project.created_at);
    const validThrough = new Date(datePosted.getTime() + 30 * 24 * 60 * 60 * 1000);

    const schema = {
        "@context": "https://schema.org/",
        "@type": "JobPosting",
        "title": title,
        "description": description,
        "identifier": {
            "@type": "PropertyValue",
            "name": "Praca",
            "value": props.project.id
        },
        "datePosted": datePosted.toISOString(),
        "validThrough": validThrough.toISOString(),
        "employmentType": mapEmploymentType(props.project.typeOfContract),
        "hiringOrganization": {
            "@type": "Organization",
            "name": props.project.user?.firm?.name || "Firma",
            "sameAs": props.project.user?.firm?.www || null,
            "logo": props.project.user?.profile_photo_url || null
        },
        "jobLocation": {
            "@type": "Place",
            "address": {
                "@type": "PostalAddress",
                "streetAddress": (props.project.streetWork || '') + ' ' + (props.project.streetWorkNumber || ''),
                "addressLocality": props.project.cityWork,
                "postalCode": props.project.postalWork,
                "addressCountry": props.project.countryWork?.code || props.project.countryWork?.countryCode || "PL"
            }
        }
    };

    if (props.project.basicSalaryFrom) {
        schema.baseSalary = {
            "@type": "MonetaryAmount",
            "currency": props.project.currency?.value || props.project.currency || "PLN",
            "value": {
                "@type": "QuantitativeValue",
                "minValue": props.project.basicSalaryFrom,
                "maxValue": props.project.basicSalaryTo || props.project.basicSalaryFrom,
                "unitText": "MONTH"
            }
        };
    }

    return JSON.stringify(schema);
});

onMounted(() => {
    isClient.value = true;
});

mapboxgl.accessToken = usePage().props.mapboxToken;
const map = ref(null);

onMounted(async () => {
    isClient.value = true;
    if (!isClient.value || !props.project.cityWork || !props.project.streetWork) return;

    // Geocoding - pobierz współrzędne z adresu
    const countryName = props.project.countryWork?.allTranslations?.[usePage().props.language] || props.project.countryWork?.name || props.project.countryWork || '';
    const address = `${props.project.streetWork} ${props.project.streetWorkNumber}, ${props.project.postalWork} ${props.project.cityWork}, ${countryName}`;
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
                zoom: 14,
                attributionControl: false
            });

            // Dodaj marker
            new mapboxgl.Marker({ color: '#0A2C5C' })
                .setLngLat([lng, lat])
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
    <FrontLayout
        :title="project.title[usePage().props.currentCountry] || getPositionTitle(project)"
        :image="image"
        :keywords="props.page.keywords"
        :description="props.page.description"
        :url="route('front.projects.single',project)"
        type="website"
    >
        <template #head>
            <component :is="'script'" type="application/ld+json">
                {{ jobSchema }}
            </component>
        </template>
        <div class="py-12 bg-gray-50/50 min-h-screen">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-8">
                <!-- TOP BAR -->
                <div class="flex items-center justify-between">
                    <Link :href="route('front.projects')" class="inline-flex items-center gap-2 rounded-2xl border border-gray-100 bg-white px-6 py-3 text-xs font-black uppercase tracking-widest text-[#0A2C5C] shadow-sm hover:bg-gray-50 transition-all hover:-translate-y-0.5">
                        <span class="text-lg leading-none">←</span>
                        {{ __('translate.backToList') }}
                    </Link>
                </div>
                <!-- MAIN CARD HEADER -->
                <div class="bg-white rounded-[3rem] shadow-xl shadow-blue-900/5 border transition-all duration-500 overflow-hidden group"
                     :class="project.is_featured ? 'border-[#0A2C5C]/50 ring-2 ring-[#0A2C5C]/20 bg-gradient-to-br from-blue-50/10 to-transparent shadow-xl shadow-[#0A2C5C]/10' : 'border-gray-100'">
                    <!-- Banner -->

                    <div class="bg-[#0A2C5C] p-10 md:p-16 relative overflow-hidden transition-all duration-500">
                        <div v-if="project.is_featured" class="absolute inset-0 bg-blue-500/5 mix-blend-overlay pointer-events-none"></div>

                        <!-- Featured Ribbon -->
                        <div v-if="project.is_featured" class="absolute top-0 right-0 h-32 w-32 overflow-hidden pointer-events-none z-20">
                            <div class="absolute top-0 right-0 w-[150%] h-10 bg-gradient-to-r from-blue-600 via-blue-400 to-blue-600 rotate-45 translate-x-[30%] translate-y-[50%] shadow-lg shadow-blue-900/40 animate-shimmer bg-[length:200%_auto] border-b border-white/10">
                                <div class="absolute inset-0 flex items-center justify-center">
                                    <svg class="w-6 h-6 text-[#0A2C5C] drop-shadow-md animate-pulse" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z" />
                                    </svg>
                                </div>
                            </div>
                        </div>

                        <!-- Left Accent Bar for Featured -->
                        <div v-if="project.is_featured" class="absolute left-0 top-0 bottom-0 w-2 bg-gradient-to-b from-blue-600 via-blue-400 to-blue-600 shadow-[2px_0_15px_rgba(37,99,235,0.3)] z-20"></div>

                        <div class="relative z-10">
                            <p class="text-blue-400 text-[10px] font-black uppercase tracking-[0.2em] mb-4">Oferta pracy #{{ project.id }}</p>
                            <h1 class="text-3xl md:text-5xl font-black text-white uppercase tracking-tight leading-none max-w-3xl">
                                {{ getPositionTitle(project) }}
                            </h1>
                        </div>
                        <!-- Decorative element -->
                        <div class="absolute top-0 right-0 w-64 h-64 bg-blue-400/5 rounded-full -mr-32 -mt-32 blur-3xl"></div>
                    </div>

                    <!-- Company Info Bar -->
                    <div class="p-8 md:px-16 flex flex-col md:flex-row justify-between items-center gap-8 border-b border-gray-50">
                        <div class="flex flex-col md:flex-row items-center gap-6 text-center md:text-left">
                            <div class="relative">
                                <img
                                    :src="project.user?.profile_photo_url"
                                    alt="Logo"
                                    class="w-24 h-24 rounded-[2rem] border-4 border-white shadow-xl object-cover -mt-20 md:-mt-24 relative z-20"
                                    :class="{ 'ring-4 ring-[#0A2C5C]/50 shadow-2xl shadow-[#0A2C5C]/20': project.is_featured }"
                                />
                                <div class="absolute -bottom-1 -right-1 w-6 h-6 bg-green-500 rounded-full border-4 border-white shadow-lg z-30"></div>
                                <div v-if="project.is_featured" class="absolute -top-[100px] md:-top-[120px] -right-20 z-40 transform hover:scale-110 transition-transform duration-300">
                                    <img src="/images/icons/prefer-icon.png" alt="TOP" class="w-20 h-20 drop-shadow-2xl" />
                                </div>
                            </div>
                            <div class="relative">
                                <h2 class="text-xl font-black text-gray-900 uppercase tracking-tight flex items-center gap-2">
                                    {{ project.user?.name }}
                                </h2>
                                <div class="flex items-center justify-center md:justify-start gap-3 mt-1">
                                    <div class="flex items-center gap-1.5">
                                        <svg class="w-3.5 h-3.5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/></svg>
                                        <span class="text-[10px] font-bold text-gray-400 uppercase tracking-widest">{{ project.cityWork }}, {{ project.countryWork?.name }}</span>
                                    </div>
                                    <span class="w-1 h-1 bg-gray-200 rounded-full"></span>
                                    <span class="text-[10px] font-bold text-gray-400 uppercase tracking-widest">{{ moment(project.created_at).format('DD.MM.YYYY') }}</span>
                                </div>
                            </div>
                        </div>

                        <div class="flex flex-wrap justify-center gap-4">
                            <Link v-if="!user"
                                  class="px-8 py-4 bg-white border border-gray-100 text-[#0A2C5C] text-[10px] font-black uppercase tracking-widest rounded-2xl hover:bg-gray-50 shadow-sm transition-all hover:-translate-y-0.5"
                                  :href="route('login',{ projectToRedirect: project.id })">
                                {{ __('translate.login') }}
                            </Link>

                            <Link
                                class="px-10 py-4 bg-red-600 text-white text-[10px] font-black uppercase tracking-widest rounded-2xl hover:bg-red-700 transition-all shadow-lg shadow-red-900/20 hover:-translate-y-0.5 active:translate-y-0 flex items-center gap-3"
                                :href="route('front.projects.applyView', project)"
                                v-if="!user || (user && hasRole('worker'))"
                            >
                                {{ user && (user && hasRole('worker')) ? __('translate.apply') : __('translate.applyWithoutLogin') }}
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                            </Link>
                        </div>
                    </div>

                    <!-- GRID SECTION 1: ICONS -->
                    <div class="p-8 md:p-16">
                        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 mb-16">
                            <!-- Wynagrodzenie -->
                            <div class="group bg-gray-50/50 p-8 rounded-[2.5rem] border border-gray-100/50 flex flex-col items-center text-center transition-all hover:bg-white hover:shadow-xl hover:shadow-blue-900/5 hover:-translate-y-1">
                                <div class="w-16 h-16 bg-white rounded-2xl flex items-center justify-center shadow-sm mb-6 ring-1 ring-blue-100 group-hover:ring-blue-200 transition-all">
                                    <img src="/images/icons/wynagrodzenie.svg" alt="money icon" class="w-10 h-10" />
                                </div>
                                <p class="text-[10px] font-black text-gray-400 uppercase tracking-widest mb-2">{{ __('translate.salary') }}</p>
                                <div class="space-y-1">
                                    <p class="text-xs font-bold text-gray-600 uppercase tracking-tight">
                                        {{ __('premium.history_from') }} <span class="text-lg font-black text-[#0A2C5C] tracking-tight">{{ project.basicSalaryFrom }} {{ project.currency?.name || project.currency }}</span>
                                    </p>
                                    <p class="text-xs font-bold text-gray-600 uppercase tracking-tight">
                                        {{ __('premium.history_to') }} <span class="text-lg font-black text-[#0A2C5C] tracking-tight">{{ project.basicSalaryTo }} {{ project.currency?.name || project.currency }}</span>
                                    </p>
                                </div>
                            </div>

                            <!-- Tryb pracy -->
                            <div class="group bg-gray-50/50 p-8 rounded-[2.5rem] border border-gray-100/50 flex flex-col items-center text-center transition-all hover:bg-white hover:shadow-xl hover:shadow-blue-900/5 hover:-translate-y-1">
                                <div class="w-16 h-16 bg-white rounded-2xl flex items-center justify-center shadow-sm mb-6 ring-1 ring-blue-100 group-hover:ring-blue-200 transition-all">
                                    <img src="/images/icons/praca_hybrydowa.svg" alt="work icon" class="w-10 h-10" />
                                </div>
                                <p class="text-[10px] font-black text-gray-400 uppercase tracking-widest mb-2">{{ __('projects.work') }}</p>
                                <div class="flex flex-wrap justify-center gap-2">
                                    <span v-for="workingMode in project.workingMode" class="text-sm font-black text-[#0A2C5C] uppercase tracking-tight">
                                        {{ workingMode.allTranslations.title[usePage().props.language] }}
                                    </span>
                                </div>
                            </div>

                            <!-- Umowa -->
                            <div class="group bg-gray-50/50 p-8 rounded-[2.5rem] border border-gray-100/50 flex flex-col items-center text-center transition-all hover:bg-white hover:shadow-xl hover:shadow-blue-900/5 hover:-translate-y-1">
                                <div class="w-16 h-16 bg-white rounded-2xl flex items-center justify-center shadow-sm mb-6 ring-1 ring-blue-100 group-hover:ring-blue-200 transition-all">
                                    <img src="/images/icons/5.svg" alt="contract icon" class="w-10 h-10" />
                                </div>
                                <p class="text-[10px] font-black text-gray-400 uppercase tracking-widest mb-2">{{ __('projects.agreement') }}</p>
                                <div class="flex flex-wrap justify-center gap-2">
                                    <span v-for="typeOfContract in project.typeOfContract" class="text-sm font-black text-[#0A2C5C] uppercase tracking-tight text-center">
                                        {{ typeOfContract.allTranslations.name[usePage().props.language] }}
                                    </span>
                                </div>
                            </div>

                            <!-- Wymiar -->
                            <div class="group bg-gray-50/50 p-8 rounded-[2.5rem] border border-gray-100/50 flex flex-col items-center text-center transition-all hover:bg-white hover:shadow-xl hover:shadow-blue-900/5 hover:-translate-y-1">
                                <div class="w-16 h-16 bg-white rounded-2xl flex items-center justify-center shadow-sm mb-6 ring-1 ring-blue-100 group-hover:ring-blue-200 transition-all">
                                    <img src="/images/icons/wymiar_pracy.svg" alt="time icon" class="w-10 h-10" />
                                </div>
                                <p class="text-[10px] font-black text-gray-400 uppercase tracking-widest mb-2">{{ __('projects.time') }}</p>
                                <p class="text-sm font-black text-[#0A2C5C] uppercase tracking-tight">
                                    {{ project.workLoad.allTranslations.name[usePage().props.language] }}
                                </p>
                            </div>
                        </div>

                        <!-- Opis stanowiska -->
                        <div class="max-w-4xl">
                            <div class="flex items-center gap-4 mb-8">
                                <h3 class="text-xs font-black text-[#0A2C5C] uppercase tracking-[0.2em]">{{ __('projects.description') }}</h3>
                                <div class="h-px flex-1 bg-gray-100"></div>
                            </div>
                            <ul class="space-y-4">
                                <li v-for="detailproject in project.detailprojects" class="flex items-start gap-4 group">
                                    <div class="mt-1.5 w-1.5 h-1.5 rounded-full bg-[#00a0e3] group-hover:scale-150 transition-transform"></div>
                                    <p class="text-gray-600 font-medium leading-relaxed">{{ detailproject.name[usePage().props.language] }}</p>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <!-- TIMELINE SECTIONS -->
                    <div class="p-8 md:p-16 bg-gray-50/30 border-t border-gray-50">
                        <div class="relative max-w-5xl">
                            <!-- pionowa linia -->
                            <div class="absolute left-6 md:left-10 inset-y-0 w-px bg-gradient-to-b from-[#0A2C5C] via-blue-200 to-transparent"></div>

                            <!-- Sekcja 1: PŁATNOŚĆ -->
                            <div class="flex items-start mb-16 relative group">
                                <!-- ikona -->
                                <div class="z-10 flex-shrink-0 bg-[#0A2C5C] w-12 h-12 md:w-20 md:h-20 rounded-2xl flex items-center justify-center text-white shadow-xl shadow-blue-900/20 group-hover:scale-110 transition-transform duration-500">
                                    <img src="/images/icons/płatnosc_i_oczekiwania.svg" :alt="__('translate.icon_pay')" class="w-8 h-8 md:w-12 md:h-12" />
                                </div>
                                <!-- treść -->
                                <div class="ml-8 md:ml-12 flex-1">
                                    <h2 class="text-xl font-black text-[#0A2C5C] mb-6 uppercase tracking-tight">{{ __('translate.platnosc') }}</h2>
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 bg-white p-8 rounded-[2.5rem] border border-gray-100 shadow-sm group-hover:shadow-md transition-shadow">
                                        <div class="space-y-1">
                                            <p class="text-[10px] font-black text-gray-400 uppercase tracking-widest">{{ __('translate.tryb_wyplaty') }}</p>
                                            <p class="font-bold text-gray-700">{{ project.payoutMode.allTranslations.name[usePage().props.language] }}</p>
                                        </div>
                                        <div class="space-y-1">
                                            <p class="text-[10px] font-black text-gray-400 uppercase tracking-widest">{{ __('translate.premia') }}</p>
                                            <p class="font-bold text-gray-700">{{ __('translate.od') }} {{ project.bonusSalaryFrom }}{{ project.currency?.name }} {{ __('translate.do') }} {{ project.bonusSalaryTo }}{{ project.currency?.name }}</p>
                                        </div>
                                        <div class="md:col-span-2 pt-4 border-t border-gray-50">
                                            <p class="text-[10px] font-black text-gray-400 uppercase tracking-widest mb-3">{{ __('translate.system_wynagr') }}</p>
                                            <div class="flex flex-wrap gap-2">
                                                <span v-for="paySystem in project.paySystem" class="px-4 py-2 bg-gray-50 rounded-xl text-xs font-black text-[#0A2C5C] uppercase tracking-widest border border-gray-100">
                                                    {{ paySystem.allTranslations.name[usePage().props.language] }}
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Sekcja 2: ORGANIZACJA PRACY -->
                            <div class="flex items-start mb-16 relative group">
                                <div class="z-10 flex-shrink-0 bg-[#0A2C5C] w-12 h-12 md:w-20 md:h-20 rounded-2xl flex items-center justify-center text-white shadow-xl shadow-blue-900/20 group-hover:scale-110 transition-transform duration-500">
                                    <img src="/images/icons/organizacja_pracy_i_oczekiwania.svg" :alt="__('translate.ikona_org')" class="w-8 h-8 md:w-12 md:h-12" />
                                </div>
                                <div class="ml-8 md:ml-12 flex-1">
                                    <h2 class="text-xl font-black text-[#0A2C5C] mb-6 uppercase tracking-tight">{{ __('translate.org_prac') }}</h2>
                                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 bg-white p-8 rounded-[2.5rem] border border-gray-100 shadow-sm group-hover:shadow-md transition-shadow">
                                        <div class="space-y-1">
                                            <p class="text-[10px] font-black text-gray-400 uppercase tracking-widest">{{ __('translate.godziny') || 'Godziny' }}</p>
                                            <p class="font-bold text-gray-700">{{ __('translate.od') }} {{ project.hoursFrom }} {{ __('translate.do') }} {{ project.hoursTo }}</p>
                                        </div>
                                        <div class="space-y-1">
                                            <p class="text-[10px] font-black text-gray-400 uppercase tracking-widest">{{ __('translate.prac_zm') }}</p>
                                            <p class="font-bold uppercase text-xs" :class="project.shiftWork == 1 ? 'text-green-600' : 'text-gray-400'">{{ project.shiftWork == 1 ? __('translate.yes') : __('translate.no') }}</p>
                                        </div>
                                        <div class="space-y-1">
                                            <p class="text-[10px] font-black text-gray-400 uppercase tracking-widest">{{ __('translate.prac_noc') }}</p>
                                            <p class="font-bold uppercase text-xs" :class="project.workNight == 1 ? 'text-green-600' : 'text-gray-400'">{{ project.workNight == 1 ? __('translate.yes') : __('translate.no') }}</p>
                                        </div>
                                        <div class="md:col-span-2 lg:col-span-3 pt-4 border-t border-gray-50">
                                            <p class="text-[10px] font-black text-gray-400 uppercase tracking-widest mb-3">{{ __('translate.dni_tyg') }}</p>
                                            <div class="flex flex-wrap gap-2">
                                                <span v-for="(day, index) in project.days" :key="index" class="px-4 py-2 bg-blue-50 rounded-xl text-xs font-black text-[#0A2C5C] uppercase tracking-widest border border-blue-100 shadow-sm">
                                                    {{ day.allTranslations.name[usePage().props.language] }}
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Sekcja 3: WYMAGANIA I OCZEKIWANIA -->
                            <div class="flex items-start mb-4 relative group">
                                <div class="z-10 flex-shrink-0 bg-[#0A2C5C] w-12 h-12 md:w-20 md:h-20 rounded-2xl flex items-center justify-center text-white shadow-xl shadow-blue-900/20 group-hover:scale-110 transition-transform duration-500">
                                    <img src="/images/icons/wymagania_i_oczekiwania.svg" :alt="__('translate.iko_wym')" class="w-8 h-8 md:w-12 md:h-12" />
                                </div>
                                <div class="ml-8 md:ml-12 flex-1">
                                    <h2 class="text-xl font-black text-[#0A2C5C] mb-6 uppercase tracking-tight">{{ __('translate.wym_i_oczek') }}</h2>
                                    <div class="bg-white p-8 rounded-[3rem] border border-gray-100 shadow-sm group-hover:shadow-md transition-shadow space-y-8">
                                        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                                            <div class="space-y-1">
                                                <p class="text-[10px] font-black text-gray-400 uppercase tracking-widest">{{ __('translate.experience') }}</p>
                                                <p class="font-black text-[#0A2C5C] uppercase tracking-tight">{{ project.experience.allTranslations.name[usePage().props.language] }}</p>
                                            </div>
                                            <div class="space-y-1">
                                                <p class="text-[10px] font-black text-gray-400 uppercase tracking-widest">{{ __('translate.education') }}</p>
                                                <p class="font-black text-[#0A2C5C] uppercase tracking-tight">{{ project.education.name[usePage().props.language] || project.education.name }}</p>
                                            </div>
                                        </div>

                                        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 pt-8 border-t border-gray-50">
                                            <div>
                                                <p class="text-[10px] font-black text-gray-400 uppercase tracking-widest mb-4 flex items-center gap-2">
                                                    <span class="w-1 h-1 bg-red-400 rounded-full"></span>
                                                    {{ __('translate.wait') }}
                                                </p>
                                                <ul class="space-y-2">
                                                    <li v-for="el in project.wait" class="text-xs font-bold text-gray-600 uppercase tracking-widest flex items-center gap-2">
                                                        <svg class="w-3 h-3 text-red-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"/></svg>
                                                        {{ el.allTranslations.name[usePage().props.language] }}
                                                    </li>
                                                </ul>
                                            </div>
                                            <div>
                                                <p class="text-[10px] font-black text-gray-400 uppercase tracking-widest mb-4 flex items-center gap-2">
                                                    <span class="w-1 h-1 bg-green-400 rounded-full"></span>
                                                    {{ __('translate.welcome') }}
                                                </p>
                                                <ul class="space-y-2">
                                                    <li v-for="el in project.welcome" class="text-xs font-bold text-gray-600 uppercase tracking-widest flex items-center gap-2">
                                                        <svg class="w-3 h-3 text-green-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"/></svg>
                                                        {{ el.allTranslations.name[usePage().props.language] }}
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- SWIPER / OFFERS -->
                    <div class="p-8 md:p-16 bg-white border-t border-gray-50" v-if="project.offer && project.offer.length">
                        <div class="flex items-center gap-4 mb-12">
                            <h3 class="text-xs font-black text-[#0A2C5C] uppercase tracking-[0.2em]">{{ __('translate.what_we_offer') }}</h3>
                            <div class="h-px flex-1 bg-gray-100"></div>
                        </div>

                        <swiper
                            :modules="[Navigation, Pagination, Autoplay]"
                            :slides-per-view="4"
                            :space-between="30"
                            :loop="project.offer.length > 4"
                            :autoplay="{ delay: 3000, disableOnInteraction: false }"
                            :allowTouchMove="true"
                            navigation
                            :pagination="{ clickable: true, el: '.swiper-pagination-offers' }"
                            class="mb-8"
                            :breakpoints="{
                                320: { slidesPerView: 1, spaceBetween: 20 },
                                640: { slidesPerView: 2, spaceBetween: 20 },
                                768: { slidesPerView: 3, spaceBetween: 30 },
                                1024: { slidesPerView: 4, spaceBetween: 30 }
                            }"
                        >
                            <swiper-slide v-for="offer in project.offer" :key="offer.id">
                                <div class="group bg-gray-50/50 p-8 rounded-[2.5rem] border border-gray-100/50 flex flex-col items-center text-center h-full transition-all hover:bg-white hover:shadow-xl hover:shadow-blue-900/5">
                                    <div class="w-20 h-20 bg-white rounded-2xl flex items-center justify-center shadow-sm mb-6 ring-1 ring-blue-100 group-hover:scale-110 transition-all">
                                        <img
                                            class="w-12 h-12"
                                            :src="`/images/icons/${offer.id}.svg`"
                                            :alt="offer.allTranslations.name[usePage().props.language]"
                                        />
                                    </div>
                                    <span class="text-xs font-black text-[#0A2C5C] uppercase tracking-widest leading-tight">
                                      {{ offer.allTranslations.name[usePage().props.language] }}
                                    </span>
                                </div>
                            </swiper-slide>
                        </swiper>
                        <div class="swiper-pagination-offers flex justify-center gap-2 mt-4"></div>
                    </div>

                    <!-- BOTTOM ACTIONS -->
                    <div class="p-12 md:p-20 flex flex-col items-center text-center relative overflow-hidden transition-all duration-700"
                         :class="project.is_featured ? 'bg-[#0A2C5C]' : 'bg-[#0A2C5C]'">
                        <!-- Decorative bg -->
                        <div class="absolute top-0 left-0 w-full h-full z-0 transition-opacity duration-700"
                             :class="project.is_featured ? 'bg-[radial-gradient(circle_at_center,_#1e40af_0%,_#0A2C5C_100%)]' : 'bg-[radial-gradient(circle_at_center,_var(--tw-gradient-stops))] from-blue-900/50 to-[#0A2C5C]'"></div>

                        <div v-if="project.is_featured" class="absolute inset-0 z-0 pointer-events-none opacity-30">
                            <div class="absolute top-0 left-0 w-full h-full bg-[url('/images/pattern.svg')] bg-repeat opacity-10"></div>
                        </div>

                        <div class="relative z-10 space-y-8">
                            <h2 class="text-3xl md:text-4xl font-black text-white uppercase tracking-tight">{{ __('translate.readyForChallenges') }}</h2>
                            <p class="text-blue-200 uppercase text-xs font-bold tracking-[0.2em]">{{ __('translate.applyNowJoinTeam') }} {{ project.user?.name }}</p>
                            <Link
                                class="inline-flex items-center gap-4 px-12 py-6 bg-red-600 text-white text-xs font-black uppercase tracking-widest rounded-[2rem] hover:bg-red-700 transition-all shadow-2xl shadow-red-900/40 hover:-translate-y-1 active:translate-y-0"
                                :href="route('front.projects.applyView', project)"
                                v-if="!user || (user && hasRole('worker'))"
                            >
                                {{ user && (user && hasRole('worker')) ? __('translate.apply') : __('translate.applyWithoutLogin') }}
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                            </Link>
                        </div>
                    </div>

                    <!-- MAP SECTION -->
                    <div class="bg-white p-8 md:p-16 border-t border-gray-50" v-if="isClient && props.project.cityWork && props.project.streetWork && props.project.streetWorkNumber">
                        <div class="flex items-center gap-4 mb-8">
                            <h3 class="text-xs font-black text-[#0A2C5C] uppercase tracking-[0.2em]">{{ __('translate.location') }}</h3>
                            <div class="h-px flex-1 bg-gray-100"></div>
                        </div>
                        <div class="rounded-[3rem] overflow-hidden shadow-2xl shadow-blue-900/10 border-8 border-gray-50 ring-1 ring-gray-100">
                            <div id="projectMap" class="w-full h-[450px]"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </FrontLayout>
</template>
<style>
@keyframes shimmer {
    0% { background-position: -200% 0; }
    100% { background-position: 200% 0; }
}

.animate-shimmer {
    animation: shimmer 5s infinite linear;
}

.swiper-pagination-offers .swiper-pagination-bullet {
    width: 10px;
    height: 10px;
    background: #0A2C5C;
    opacity: 0.2;
    transition: all 0.3s ease;
}
.swiper-pagination-offers .swiper-pagination-bullet-active {
    opacity: 1;
    width: 25px;
    border-radius: 5px;
}
</style>
<style scoped>
/* Lekka animacja wejścia sekcji */
section, div[role="listitem"] {
    transition: all 0.4s ease-in-out;
}
</style>
