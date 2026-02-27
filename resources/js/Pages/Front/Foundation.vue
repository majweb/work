<script setup>
import FrontLayout from "@/Layouts/FrontLayout.vue";
import { onMounted, ref } from "vue";
import mapboxgl from "mapbox-gl";
import "mapbox-gl/dist/mapbox-gl.css";
import { usePage } from "@inertiajs/vue3";

const props = defineProps({
    foundation: Object
});

mapboxgl.accessToken = usePage().props.mapboxToken;

const map = ref(null);
const marker = ref(null);
const isClient = ref(false);

const mapStyles = {
    streets: "mapbox://styles/mapbox/light-v11",
    satellite: "mapbox://styles/mapbox/satellite-streets-v12"
};

onMounted(() => {
    isClient.value = true;
    initMap();
});


function initMap() {
    if (!isClient.value || !props.foundation.coords) return;
    const [lng, lat] = props.foundation.coords;
    map.value = new mapboxgl.Map({
        container: "foundationMap",
        style: mapStyles.streets,
        center: [lng, lat],
        zoom: 15,
        attributionControl: false

    });

    map.value.on("load", () => {
        map.value.resize();
        addMarker();
    });
}
function switchMode(mode) {
    if (!isClient.value) return;
    const [lng, lat] = props.foundation.coords;
    map.value.setStyle(mapStyles[mode]);
    map.value.once("style.load", () => {
        map.value.resize(); // <- wymagane po zmianie stylu
        map.value.setCenter([lng, lat]);
        addMarker();
    });
}

function addMarker() {
    if (!isClient.value || !props.foundation.coords) return;
    const [lng, lat] = props.foundation.coords;
    if (marker.value) {
        marker.value.remove();
    }

    marker.value = new mapboxgl.Marker({ color: "red" })
        .setLngLat([lng, lat])
        .addTo(map.value);
}
</script>

<template>
    <FrontLayout :title="props.foundation.name">
        <!-- BANER + LOGO -->
        <section class="bg-gray-50/50 py-12 px-4 min-h-[40vh]">
            <div class="max-w-6xl mx-auto">
                <!-- HEADER CARD -->
                <div class="bg-white rounded-[3rem] shadow-xl shadow-blue-900/5 border border-gray-100 p-10 mb-8 overflow-hidden relative">
                    <!-- BANER -->
                    <div class="w-full h-64 md:h-80 -m-10 mb-0 overflow-hidden relative">
                        <img
                            :src="props.foundation.banner ?? '/img/default-banner.jpg'"
                            class="w-full h-full object-cover"
                            alt="baner"
                        >
                        <div class="absolute inset-0 bg-gradient-to-t from-black/20 to-transparent"></div>
                    </div>

                    <div class="relative flex flex-col md:flex-row items-center md:items-end gap-8 -mt-16 md:-mt-20 px-4 md:px-0">
                        <!-- LOGO -->
                        <div class="bg-white rounded-[2.5rem] p-4 shadow-2xl shadow-blue-900/10 border border-gray-100 relative z-10 group transition-transform duration-500 hover:scale-105">
                            <img
                                :src="props.foundation.logo"
                                class="h-32 w-32 md:h-40 md:w-40 object-contain"
                            >
                        </div>

                        <!-- NAME + CATEGORY -->
                        <div class="text-center md:text-left pb-4 flex-1">
                            <p class="text-[10px] font-black text-gray-400 uppercase tracking-[0.3em] mb-2">{{ props.foundation.category }}</p>
                            <h1 class="text-3xl md:text-5xl font-black text-[#0A2C5C] uppercase tracking-tight leading-none">{{ props.foundation.name }}</h1>
                        </div>
                    </div>
                </div>

                <!-- BUTTONS -->
                <div class="bg-white rounded-[3rem] shadow-xl shadow-blue-900/5 border border-gray-100 p-8 mb-8">
                    <div class="flex items-center gap-4 mb-8">
                        <h3 class="text-[10px] font-black text-[#0A2C5C] uppercase tracking-[0.2em]">{{ __('translate.contact') ?? 'KONTAKT' }}</h3>
                        <div class="h-px flex-1 bg-gray-100"></div>
                    </div>

                    <div class="flex flex-wrap justify-center md:justify-start gap-4 uppercase">
                        <a v-if="props.foundation.phone"
                           :href="`tel:${props.foundation.phone}`"
                           class="btn-invoice">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                            </svg>
                            {{ __('translate.phone') ?? 'TELEFON' }}
                        </a>
                        <a v-if="props.foundation.email"
                           :href="`mailto:${props.foundation.email}`"
                           class="btn-invoice">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                            </svg>
                            {{ __('translate.email') ?? 'E-MAIL' }}
                        </a>
                        <a v-if="props.foundation.www"
                           :href="props.foundation.www"
                           target="_blank"
                           class="btn-invoice">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9" />
                            </svg>
                            WWW
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <!-- DESCRIPTION + MAP -->
        <section class="bg-gray-50/50 px-4 pb-24">
            <div class="max-w-6xl mx-auto grid grid-cols-1 lg:grid-cols-3 gap-8">
                <!-- DESCRIPTION CARD -->
                <div class="lg:col-span-2 bg-white rounded-[3rem] shadow-xl shadow-blue-900/5 border border-gray-100 p-10">
                    <div class="flex items-center gap-4 mb-8">
                        <h3 class="text-[10px] font-black text-[#0A2C5C] uppercase tracking-[0.2em]">{{ __('translate.description') ?? 'OPIS' }}</h3>
                        <div class="h-px flex-1 bg-gray-100"></div>
                    </div>
                    <div class="prose prose-blue max-w-none text-gray-600 font-medium leading-relaxed" v-html="props.foundation.description"></div>
                </div>

                <!-- INFO / MAP CARD -->
                <div class="space-y-8">
                    <!-- ADDRESS CARD -->
                    <div class="bg-white rounded-[3rem] shadow-xl shadow-blue-900/5 border border-gray-100 p-10">
                        <div class="flex items-center gap-4 mb-8">
                            <h3 class="text-[10px] font-black text-[#0A2C5C] uppercase tracking-[0.2em]">{{ __('translate.location') ?? 'LOKALIZACJA' }}</h3>
                            <div class="h-px flex-1 bg-gray-100"></div>
                        </div>

                        <div class="space-y-6">
                            <div class="flex items-start gap-4">
                                <div class="w-10 h-10 bg-gray-50 rounded-2xl flex items-center justify-center shrink-0 border border-gray-100">
                                    <img src="/images/partners/lokalizacja.svg" class="h-5 opacity-70" />
                                </div>
                                <p class="text-sm font-bold text-gray-500 uppercase tracking-widest leading-relaxed">
                                    {{ props.foundation.address_street }}<br>
                                    {{ props.foundation.address_postcode }} {{ props.foundation.address_city }}<br>
                                    {{ props.foundation.address_country.allTranslations[usePage().props.language] }}
                                </p>
                            </div>

                            <!-- MAP -->
                            <div class="relative group" v-if="isClient">
                                <div id="foundationMap" class="w-full h-64 rounded-[2rem] shadow-inner border border-gray-100 overflow-hidden"></div>
                                <div class="absolute bottom-4 right-4 flex gap-2">
                                    <button :title="__('translate.map')" class="p-3 rounded-2xl bg-white border border-gray-100 text-[#0A2C5C] hover:bg-gray-50 shadow-lg transition-all hover:-translate-y-1"
                                            @click="switchMode('streets')">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-map"><path d="M14.106 5.553a2 2 0 0 0 1.788 0l3.659-1.83A1 1 0 0 1 21 4.619v12.764a1 1 0 0 1-.553.894l-4.553 2.277a2 2 0 0 1-1.788 0l-4.212-2.106a2 2 0 0 0-1.788 0l-3.659 1.83A1 1 0 0 1 3 19.381V6.618a1 1 0 0 1 .553-.894l4.553-2.277a2 2 0 0 1 1.788 0z"/><path d="M15 5.764v15"/><path d="M9 3.236v15"/></svg>
                                    </button>

                                    <button :title="__('translate.satelite')" class="p-3 rounded-2xl bg-[#0A2C5C] text-white hover:bg-blue-800 shadow-lg shadow-blue-900/20 transition-all hover:-translate-y-1"
                                            @click="switchMode('satellite')">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-satellite"><path d="m13.5 6.5-3.148-3.148a1.205 1.205 0 0 0-1.704 0L6.352 5.648a1.205 1.205 0 0 0 0 1.704L9.5 10.5"/><path d="M16.5 7.5 19 5"/><path d="m17.5 10.5 3.148 3.148a1.205 1.205 0 0 1 0 1.704l-2.296 2.296a1.205 1.205 0 0 1-1.704 0L13.5 14.5"/><path d="M9 21a6 6 0 0 0-6-6"/><path d="M9.352 10.648a1.205 1.205 0 0 0 0 1.704l2.296 2.296a1.205 1.205 0 0 0 1.704 0l4.296-4.296a1.205 1.205 0 0 0 0-1.704l-2.296-2.296a1.205 1.205 0 0 0-1.704 0z"/></svg>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- STATS CARD -->
                    <div class="bg-white rounded-[3rem] shadow-xl shadow-blue-900/5 border border-gray-100 p-10">
                        <div class="flex items-center gap-4 mb-8">
                            <h3 class="text-[10px] font-black text-[#0A2C5C] uppercase tracking-[0.2em]">{{ __('translate.details') ?? 'SZCZEGÓŁY' }}</h3>
                            <div class="h-px flex-1 bg-gray-100"></div>
                        </div>

                        <div class="space-y-6">
                            <!-- Rok założenia -->
                            <div v-if="props.foundation.year_of_foundation" class="group flex items-center gap-4 bg-gray-50/50 p-4 rounded-2xl border border-gray-100/50 transition-all hover:bg-white hover:shadow-lg hover:shadow-blue-900/5">
                                <div class="w-12 h-12 bg-white rounded-xl flex items-center justify-center border border-gray-100 shadow-sm group-hover:scale-110 transition-transform">
                                    <img src="/images/partners/lokalizacja.svg" class="h-6 opacity-70" />
                                </div>
                                <div>
                                    <p class="text-[8px] font-black text-gray-400 uppercase tracking-widest mb-0.5">{{__('translate.year_of_foundation')}}</p>
                                    <p class="text-lg font-black text-[#0A2C5C] tracking-tight">{{ props.foundation.year_of_foundation }}</p>
                                </div>
                            </div>

                            <!-- Benefit -->
                            <div class="group flex items-center gap-4 bg-gray-50/50 p-4 rounded-2xl border border-gray-100/50 transition-all hover:bg-white hover:shadow-lg hover:shadow-blue-900/5">
                                <div class="w-12 h-12 bg-white rounded-xl flex items-center justify-center border border-gray-100 shadow-sm group-hover:scale-110 transition-transform">
                                    <img src="/images/partners/lokalizacja.svg" class="h-6 opacity-70" />
                                </div>
                                <div>
                                    <p class="text-[8px] font-black text-gray-400 uppercase tracking-widest mb-0.5">{{__('translate.benefit_organization')}}</p>
                                    <p class="text-lg font-black text-[#0A2C5C] tracking-tight">{{ props.foundation.benefit_organization ? __('translate.yes') :__('translate.no') }}</p>
                                </div>
                            </div>

                            <!-- Workers -->
                            <div v-if="props.foundation.worker_count" class="group flex items-center gap-4 bg-gray-50/50 p-4 rounded-2xl border border-gray-100/50 transition-all hover:bg-white hover:shadow-lg hover:shadow-blue-900/5">
                                <div class="w-12 h-12 bg-white rounded-xl flex items-center justify-center border border-gray-100 shadow-sm group-hover:scale-110 transition-transform">
                                    <img src="/images/partners/lokalizacja.svg" class="h-6 opacity-70" />
                                </div>
                                <div>
                                    <p class="text-[8px] font-black text-gray-400 uppercase tracking-widest mb-0.5">{{__('translate.worker_count')}}</p>
                                    <p class="text-lg font-black text-[#0A2C5C] tracking-tight">{{ props.foundation.worker_count }}</p>
                                </div>
                            </div>
                        </div>

                        <!-- Social Media -->
                        <div v-if="props.foundation?.facebook_url || props.foundation?.x_url || props.foundation?.instagram_url || props.foundation?.linkedin_url || props.foundation?.tiktok_url" class="mt-8 pt-8 border-t border-gray-50">
                            <div class="flex flex-wrap gap-2 justify-center">
                                <a v-if="props.foundation.facebook_url" :href="props.foundation.facebook_url" target="_blank"
                                   class="w-10 h-10 bg-white rounded-xl border border-gray-100 shadow-sm flex items-center justify-center transition hover:scale-110 hover:shadow-md">
                                    <img src="/images/icons/facebook.svg" class="h-5 w-5" alt="facebook">
                                </a>
                                <a v-if="props.foundation.x_url" :href="props.foundation.x_url" target="_blank"
                                   class="w-10 h-10 bg-white rounded-xl border border-gray-100 shadow-sm flex items-center justify-center transition hover:scale-110 hover:shadow-md">
                                    <img src="/images/icons/x.svg" class="h-5 w-5" alt="x">
                                </a>
                                <a v-if="props.foundation.instagram_url" :href="props.foundation.instagram_url"
                                   target="_blank" class="w-10 h-10 bg-white rounded-xl border border-gray-100 shadow-sm flex items-center justify-center transition hover:scale-110 hover:shadow-md">
                                    <img src="/images/icons/instagram.svg" class="h-5 w-5" alt="instagram">
                                </a>
                                <a v-if="props.foundation.linkedin_url" :href="props.foundation.linkedin_url" target="_blank"
                                   class="w-10 h-10 bg-white rounded-xl border border-gray-100 shadow-sm flex items-center justify-center transition hover:scale-110 hover:shadow-md">
                                    <img src="/images/icons/linkedin.svg" class="h-5 w-5" alt="linkedin">
                                </a>
                                <a v-if="props.foundation.tiktok_url" :href="props.foundation.tiktok_url" target="_blank"
                                   class="w-10 h-10 bg-white rounded-xl border border-gray-100 shadow-sm flex items-center justify-center transition hover:scale-110 hover:shadow-md">
                                    <img src="/images/icons/tik_tok.svg" class="h-5 w-5" alt="tik_tok">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </FrontLayout>
</template>

<style>
.btn-invoice {
    @apply px-10 py-4 bg-[#0A2C5C] text-white text-[10px] font-black uppercase tracking-widest rounded-2xl hover:bg-blue-800 transition-all shadow-lg shadow-blue-900/20 hover:-translate-y-0.5 active:translate-y-0 flex items-center justify-center gap-2;
}

</style>
