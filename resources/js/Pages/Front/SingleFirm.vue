<script setup>
import FrontLayout from "@/Layouts/FrontLayout.vue";
import {Link, usePage} from "@inertiajs/vue3";
import __ from "@/lang";
import {computed, onMounted, ref, nextTick} from "vue";
import moment from "moment";
import mapboxgl from "mapbox-gl";
import "mapbox-gl/dist/mapbox-gl.css";

const props = defineProps({
    firm: Object
});

const isClient = ref(false);
const map = ref(null);
mapboxgl.accessToken = usePage().props.mapboxToken;

onMounted(async () => {
    isClient.value = true;
    if (!props.firm.city || !props.firm.street) return;

    await nextTick();

    // Geocoding - pobierz współrzędne z adresu
    const countryName = props.firm.countryJson?.allTranslations?.[usePage().props.language] || props.firm.countryJson?.name || '';
    const address = `${props.firm.street} ${props.firm.number}, ${props.firm.postal} ${props.firm.city}, ${countryName}`;
    const geocodeUrl = `https://api.mapbox.com/geocoding/v5/mapbox.places/${encodeURIComponent(address)}.json?access_token=${mapboxgl.accessToken}`;

    try {
        const response = await fetch(geocodeUrl);
        const data = await response.json();

        if (data.features && data.features.length > 0) {
            const [lng, lat] = data.features[0].center;

            // Inicjalizacja mapy
            map.value = new mapboxgl.Map({
                container: 'firmMap',
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

// Lightbox
const showLightbox = ref(false);
const currentImage = ref('');

function openLightbox(url) {
    currentImage.value = url;
    showLightbox.value = true;
}

function closeLightbox() {
    showLightbox.value = false;
}
</script>

<template>
    <FrontLayout :title="__('translate.firm')">
        <div class="py-12 bg-gray-50/50 min-h-screen">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-8">
                <!-- TOP BAR -->
                <div class="flex items-center justify-between">
                    <Link :href="route('front.firms')" class="inline-flex items-center gap-2 rounded-2xl border border-gray-100 bg-white px-6 py-3 text-xs font-black uppercase tracking-widest text-[#0A2C5C] shadow-sm hover:bg-gray-50 transition-all hover:-translate-y-0.5">
                        <span class="text-lg leading-none">←</span>
                        {{ __('translate.backToList') }}
                    </Link>
                </div>

                <!-- HEADER CARD -->
                <div class="bg-white rounded-[3rem] shadow-xl shadow-blue-900/5 border border-gray-100 overflow-hidden">
                    <!-- Banner / Hero -->
                    <div class="bg-[#0A2C5C] h-48 relative overflow-hidden flex items-center justify-center">
                        <div class="absolute inset-0 opacity-10">
                            <div class="absolute top-0 right-0 w-64 h-64 bg-blue-400 rounded-full -mr-32 -mt-32 blur-3xl"></div>
                            <div class="absolute bottom-0 left-0 w-64 h-64 bg-blue-400 rounded-full -ml-32 -mb-32 blur-3xl"></div>
                        </div>
                        <h1 class="text-3xl md:text-5xl font-black text-white uppercase tracking-tight leading-none z-10 text-center px-4">
                            {{ firm.name }}
                        </h1>
                    </div>

                    <!-- Profile Info Bar -->
                    <div class="p-8 md:px-16 flex flex-col md:flex-row justify-between items-center gap-8 border-b border-gray-50 relative">
                        <div class="flex flex-col md:flex-row items-center gap-6 text-center md:text-left">
                            <div class="relative">
                                <div class="w-32 h-32 rounded-[2.5rem] bg-white p-2 border-4 border-white shadow-2xl -mt-20 md:-mt-24 relative z-20 overflow-hidden">
                                    <img
                                        :src="firm.logo"
                                        :alt="firm.name"
                                        class="w-full h-full object-contain rounded-[2rem]"
                                    />
                                </div>
                                <div class="absolute -bottom-1 -right-1 w-6 h-6 bg-green-500 rounded-full border-4 border-white shadow-lg z-30"></div>
                            </div>
                            <div>
                                <h2 class="text-2xl font-black text-gray-900 uppercase tracking-tight">{{ firm.name }}</h2>
                                <div class="flex items-center justify-center md:justify-start gap-3 mt-1">
                                    <div class="flex items-center gap-1.5 text-gray-400">
                                        <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/></svg>
                                        <span class="text-[10px] font-bold uppercase tracking-widest">{{ firm.city }}, {{ firm.countryJson?.allTranslations[usePage().props.language] }}</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Social Media -->
                        <div class="flex flex-wrap justify-center gap-2" v-if="props.firm?.website || props.firm?.social_facebook || props.firm?.social_google || props.firm?.social_x || props.firm?.social_instagram || props.firm?.social_linkedin || props.firm?.social_tiktok">
                            <a v-if="props.firm.website" :href="props.firm.website" target="_blank" class="w-10 h-10 bg-gray-50 rounded-xl flex items-center justify-center transition-all hover:bg-blue-50 hover:scale-110 shadow-sm">
                                <img src="/images/icons/link.svg" alt="website" class="w-5 h-5">
                            </a>
                            <a v-if="props.firm.social_facebook" :href="props.firm.social_facebook" target="_blank" class="w-10 h-10 bg-gray-50 rounded-xl flex items-center justify-center transition-all hover:bg-blue-50 hover:scale-110 shadow-sm">
                                <img src="/images/icons/facebook.svg" alt="facebook" class="w-5 h-5">
                            </a>
                            <a v-if="props.firm.social_google" :href="props.firm.social_google" target="_blank" class="w-10 h-10 bg-gray-50 rounded-xl flex items-center justify-center transition-all hover:bg-blue-50 hover:scale-110 shadow-sm">
                                <img src="/images/icons/google.svg" alt="google" class="w-5 h-5">
                            </a>
                            <a v-if="props.firm.social_x" :href="props.firm.social_x" target="_blank" class="w-10 h-10 bg-gray-50 rounded-xl flex items-center justify-center transition-all hover:bg-blue-50 hover:scale-110 shadow-sm">
                                <img src="/images/icons/x.svg" alt="x" class="w-5 h-5">
                            </a>
                            <a v-if="props.firm.social_instagram" :href="props.firm.social_instagram" target="_blank" class="w-10 h-10 bg-gray-50 rounded-xl flex items-center justify-center transition-all hover:bg-blue-50 hover:scale-110 shadow-sm">
                                <img src="/images/icons/instagram.svg" alt="instagram" class="w-5 h-5">
                            </a>
                            <a v-if="props.firm.social_linkedin" :href="props.firm.social_linkedin" target="_blank" class="w-10 h-10 bg-gray-50 rounded-xl flex items-center justify-center transition-all hover:bg-blue-50 hover:scale-110 shadow-sm">
                                <img src="/images/icons/linkedin.svg" alt="linkedin" class="w-5 h-5">
                            </a>
                            <a v-if="props.firm.social_tiktok" :href="props.firm.social_tiktok" target="_blank" class="w-10 h-10 bg-gray-50 rounded-xl flex items-center justify-center transition-all hover:bg-blue-50 hover:scale-110 shadow-sm">
                                <img src="/images/icons/tik_tok.svg" alt="tik_tok" class="w-5 h-5">
                            </a>
                        </div>
                    </div>

                    <!-- GRID CONTENT -->
                    <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 p-8 md:p-16">
                        <!-- Left Column: Info & Description -->
                        <div class="lg:col-span-2 space-y-12">
                            <!-- Kontakt bar -->
                            <div class="flex flex-wrap gap-4">
                                <a
                                    v-for="(p, i) in firm.phone"
                                    :key="i"
                                    :href="`tel:${p.phone}`"
                                    class="flex items-center gap-3 px-8 py-4 bg-[#0A2C5C] text-white text-[10px] font-black uppercase tracking-widest rounded-2xl hover:bg-blue-800 transition-all shadow-lg shadow-blue-900/20"
                                >
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
                                    {{ p.phone }}
                                </a>
                                <a
                                    :href="`mailto:${firm.email}`"
                                    class="flex items-center gap-3 px-8 py-4 bg-white border border-gray-100 text-[#0A2C5C] text-[10px] font-black uppercase tracking-widest rounded-2xl hover:bg-gray-50 shadow-sm transition-all"
                                >
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                                    {{ firm.email }}
                                </a>
                            </div>

                            <!-- O nas -->
                            <div>
                                <div class="flex items-center gap-4 mb-8">
                                    <h3 class="text-xs font-black text-[#0A2C5C] uppercase tracking-[0.2em]">{{ __('translate.aboutCompany') }}</h3>
                                    <div class="h-px flex-1 bg-gray-100"></div>
                                </div>
                                <div class="prose max-w-none text-gray-600 font-medium leading-relaxed text-justify" v-html="firm.description"></div>
                            </div>

                            <!-- Poznajmy się -->
                            <div v-if="firm.extra_description">
                                <div class="flex items-center gap-4 mb-8">
                                    <h3 class="text-xs font-black text-[#0A2C5C] uppercase tracking-[0.2em]">{{ __('translate.poznajmy_sie') }}</h3>
                                    <div class="h-px flex-1 bg-gray-100"></div>
                                </div>
                                <div class="prose max-w-none text-gray-600 font-medium leading-relaxed text-justify mb-8" v-html="firm.extra_description"></div>

                                <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                                    <div v-if="firm.count_workers" class="bg-gray-50/50 p-6 rounded-[2rem] border border-gray-100/50 flex flex-col items-center text-center">
                                        <p class="text-[10px] font-black text-gray-400 uppercase tracking-widest mb-2">{{ __('translate.employeesCount') }}</p>
                                        <p class="text-xl font-black text-[#0A2C5C]">{{ firm.count_workers }}</p>
                                    </div>
                                    <div v-if="firm.annual_turnover" class="bg-gray-50/50 p-6 rounded-[2rem] border border-gray-100/50 flex flex-col items-center text-center">
                                        <p class="text-[10px] font-black text-gray-400 uppercase tracking-widest mb-2">{{ __('translate.annualTurnover') }}</p>
                                        <p class="text-xl font-black text-[#0A2C5C]">{{ firm.annual_turnover }}</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Galeria Zdjęć -->
                            <div v-if="firm.media && firm.media.length">
                                <div class="flex items-center gap-4 mb-8">
                                    <h3 class="text-xs font-black text-[#0A2C5C] uppercase tracking-[0.2em]">{{ __('translate.gallery') }}</h3>
                                    <div class="h-px flex-1 bg-gray-100"></div>
                                </div>
                                <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                                    <div
                                        v-for="img in firm.media"
                                        :key="img.url"
                                        @click="openLightbox(img.url)"
                                        class="aspect-square rounded-[2rem] overflow-hidden cursor-pointer group relative shadow-sm hover:shadow-xl transition-all duration-500"
                                    >
                                        <img :src="img.url" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110" />
                                        <div class="absolute inset-0 bg-[#0A2C5C]/20 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center">
                                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0zM10 7v3m0 0v3m0-3h3m-3 0H7"/></svg>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Wideo -->
                            <div>
                                <div class="flex items-center gap-4 mb-8">
                                    <h3 class="text-xs font-black text-[#0A2C5C] uppercase tracking-[0.2em]">{{ __('translate.companyVideo') }}</h3>
                                    <div class="h-px flex-1 bg-gray-100"></div>
                                </div>
                                <div v-if="firm.video" class="rounded-[3rem] overflow-hidden shadow-2xl shadow-blue-900/10 bg-black aspect-video">
                                    <video controls preload="metadata" class="w-full h-full">
                                        <source :src="firm.video" type="video/mp4"/>
                                        {{ __('translate.videoError') }}
                                    </video>
                                </div>
                                <div v-else class="rounded-[3rem] overflow-hidden border-4 border-dashed border-gray-100 bg-gray-50/50 aspect-video flex flex-col items-center justify-center p-8 text-center group hover:border-blue-200 transition-all">
                                    <div class="w-20 h-20 bg-white rounded-[2rem] flex items-center justify-center shadow-sm mb-6 group-hover:scale-110 transition-transform duration-500">
                                        <svg class="w-10 h-10 text-gray-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                        </svg>
                                    </div>
                                    <p class="text-xs font-black text-gray-400 uppercase tracking-widest">{{ __('translate.noVideoAvailable') }}</p>
                                </div>
                            </div>
                        </div>

                        <!-- Right Column: Stats & Map -->
                        <div class="space-y-8">
                            <!-- Mapa -->
                            <div class="bg-white rounded-[3rem] shadow-xl shadow-blue-900/5 border border-gray-100 overflow-hidden h-[300px] relative">
                                <div id="firmMap" class="w-full h-full"></div>
                            </div>

                            <!-- Adres -->
                            <div class="bg-white rounded-[3rem] shadow-xl shadow-blue-900/5 border border-gray-100 p-8">
                                <div class="flex items-center gap-4 mb-6">
                                    <div class="w-12 h-12 rounded-2xl bg-blue-50 flex items-center justify-center border border-blue-100/50 shadow-sm">
                                        <img class="w-10 h-10" src="/images/icons/recruit/lokalizacja.svg" alt="icon">
                                    </div>
                                    <h2 class="text-[10px] font-black text-[#0A2C5C] uppercase tracking-[0.2em]">{{ __('translate.address') }}</h2>
                                </div>
                                <div class="space-y-6">
                                    <div class="flex items-start gap-4">
                                        <div class="w-8 h-8 rounded-xl bg-gray-50 flex items-center justify-center shrink-0">
                                            <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/></svg>
                                        </div>
                                        <div>
                                            <p class="text-sm font-black text-gray-900 uppercase tracking-tight">{{ firm.city }}</p>
                                            <p class="text-[10px] font-bold text-gray-400 uppercase tracking-widest mt-1">
                                                {{ firm.countryJson?.allTranslations[usePage().props.language] }}
                                            </p>
                                        </div>
                                    </div>
                                    <div class="flex items-start gap-4">
                                        <div class="w-8 h-8 rounded-xl bg-gray-50 flex items-center justify-center shrink-0">
                                            <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/></svg>
                                        </div>
                                        <div>
                                            <p class="text-sm font-black text-gray-900 uppercase tracking-tight">{{ firm.street }} {{ firm.number }}</p>
                                            <p class="text-[10px] font-bold text-gray-400 uppercase tracking-widest mt-1">{{ firm.postal }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Opinie -->
                            <div v-if="props.firm?.opinion_google || props.firm?.opinion_trust || props.firm?.opinion_facebook" class="bg-white rounded-[3rem] shadow-xl shadow-blue-900/5 border border-gray-100 p-8">
                                <div class="flex items-center gap-4 mb-8">
                                    <h2 class="text-[10px] font-black text-[#0A2C5C] uppercase tracking-[0.2em]">{{ __('translate.reviews') }}</h2>
                                    <div class="h-px flex-1 bg-gray-100"></div>
                                </div>
                                <div class="space-y-4">
                                    <a v-if="props.firm.opinion_google" :href="props.firm.opinion_google" target="_blank" class="flex items-center justify-between p-4 bg-gray-50 rounded-2xl hover:bg-red-50 transition-colors group">
                                        <div class="flex items-center gap-3">
                                            <span class="text-xs font-black text-gray-700 group-hover:text-red-600 transition-colors">Google</span>
                                            <span class="text-red-500">★</span>
                                        </div>
                                        <svg class="w-4 h-4 text-gray-300 group-hover:text-red-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/></svg>
                                    </a>
                                    <a v-if="props.firm.opinion_trust" :href="props.firm.opinion_trust" target="_blank" class="flex items-center justify-between p-4 bg-gray-50 rounded-2xl hover:bg-green-50 transition-colors group">
                                        <div class="flex items-center gap-3">
                                            <span class="text-xs font-black text-gray-700 group-hover:text-green-600 transition-colors">Trustpilot</span>
                                            <span class="text-green-500">★</span>
                                        </div>
                                        <svg class="w-4 h-4 text-gray-300 group-hover:text-green-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/></svg>
                                    </a>
                                    <a v-if="props.firm.opinion_facebook" :href="props.firm.opinion_facebook" target="_blank" class="flex items-center justify-between p-4 bg-gray-50 rounded-2xl hover:bg-blue-50 transition-colors group">
                                        <div class="flex items-center gap-3">
                                            <span class="text-xs font-black text-gray-700 group-hover:text-blue-600 transition-colors">Facebook</span>
                                            <span class="text-blue-500">★</span>
                                        </div>
                                        <svg class="w-4 h-4 text-gray-300 group-hover:text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/></svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Oferty Pracy -->
                    <div class="p-8 md:p-16 border-t border-gray-50 bg-gray-50/20" v-if="firm.projects && firm.projects.length">
                        <div class="flex items-center gap-4 mb-12">
                            <h3 class="text-xs font-black text-[#0A2C5C] uppercase tracking-[0.2em]">{{ __('translate.offerts') }}</h3>
                            <div class="h-px flex-1 bg-gray-100"></div>
                        </div>

                        <div class="space-y-4">
                            <div v-for="project in firm.projects" :key="project.id"
                                 class="group bg-white rounded-[2.5rem] border border-gray-100 shadow-sm hover:shadow-xl hover:shadow-blue-900/5 transition-all duration-300 hover:-translate-y-1 p-6"
                                 :class="{ 'ring-2 ring-blue-400 ring-offset-2': project.is_featured }"
                            >
                                <Link :href="route('front.projects.single', project)" class="block">
                                    <div class="flex flex-col md:flex-row md:items-center justify-between mb-6 gap-4">
                                        <div class="flex items-center gap-4">
                                            <span class="px-3 py-1 bg-blue-50 text-blue-500 font-black text-[10px] uppercase tracking-widest rounded-lg border border-blue-100/50">
                                                ID {{ project.id }}
                                            </span>
                                            <div class="h-4 w-px bg-gray-200 hidden md:block"></div>
                                            <h4 class="text-lg font-black text-gray-900 uppercase tracking-tight leading-tight truncate group-hover:text-[#0A2C5C] transition-colors">
                                                {{ project.position?.allTranslations.title[usePage().props.language] }}
                                            </h4>
                                        </div>
                                        <div class="flex items-center gap-2 text-gray-400">
                                            <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                                            <span class="text-[10px] font-bold uppercase tracking-widest">
                                                {{ moment(project.created_at).format('DD.MM.YYYY') }}
                                            </span>
                                        </div>
                                    </div>

                                    <div class="flex flex-col md:flex-row md:items-center justify-between gap-6">
                                        <div class="flex items-center gap-4">
                                            <div class="w-16 h-16 rounded-2xl bg-blue-50 flex items-center justify-center shrink-0 border border-blue-100/50 shadow-sm group-hover:bg-white transition-colors">
                                                <img class="w-10 h-10" :src="`/images/icons/${project.category?.id || 'oferty'}.svg`" :alt="project.category?.name" />
                                            </div>
                                            <div>
                                                <p class="text-[10px] font-black text-blue-400 uppercase tracking-widest mb-1">{{ project.category?.allTranslations.title[usePage().props.language] }}</p>
                                                <div class="flex items-center gap-2">
                                                    <svg class="w-3 h-3 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/></svg>
                                                    <p class="text-[10px] font-black text-gray-500 uppercase tracking-widest">{{ project.cityWork }}, {{ project.country[0]?.allTranslations[usePage().props.language] }}</p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="text-right flex flex-col items-end gap-2">
                                            <div class="px-6 py-3 bg-green-50 rounded-2xl border border-green-100/50">
                                                <p class="text-[8px] font-black text-green-600/50 uppercase tracking-widest leading-none mb-1 text-center">{{ __('translate.salary') }}</p>
                                                <p class="text-xl font-black text-green-600 tracking-tight leading-none">
                                                    {{ project.basicSalaryFrom }} {{ project.currency?.name || project.currency || 'zł' }}
                                                </p>
                                            </div>
                                            <div class="w-10 h-10 rounded-2xl bg-gray-50 flex items-center justify-center group-hover:bg-[#0A2C5C] group-hover:text-white transition-all duration-300 border border-gray-100 group-hover:border-transparent group-hover:shadow-lg group-hover:shadow-blue-900/20">
                                                <svg class="w-5 h-5 transition-transform duration-300 group-hover:translate-x-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M14 5l7 7m0 0l-7 7m7-7H3" /></svg>
                                            </div>
                                        </div>
                                    </div>
                                </Link>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Lightbox -->
        <div
            v-if="showLightbox"
            class="fixed inset-0 bg-black/90 flex items-center justify-center p-4 z-50 backdrop-blur-sm"
            @click.self="closeLightbox"
        >
            <button
                @click="closeLightbox"
                class="absolute top-8 right-8 text-white bg-white/10 w-12 h-12 rounded-full flex items-center justify-center hover:bg-white/20 transition-all group shadow-2xl"
            >
                <svg class="w-6 h-6 transform group-hover:rotate-90 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M6 18L18 6M6 6l12 12"/></svg>
            </button>
            <img
                :src="currentImage"
                class="max-h-[85vh] max-w-[90vw] rounded-[2rem] shadow-2xl border-4 border-white/10"
                @click.stop
            />
        </div>
    </FrontLayout>
</template>
