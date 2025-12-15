<script setup>
import FrontLayout from "@/Layouts/FrontLayout.vue";
import { onMounted, ref } from "vue";
import mapboxgl from "mapbox-gl";
import "mapbox-gl/dist/mapbox-gl.css";
import { usePage } from "@inertiajs/vue3";

const props = defineProps({
    foundation: Object
});

mapboxgl.accessToken = "pk.eyJ1Ijoid29yazR5b3UiLCJhIjoiY21pc255bnNtMGJkcTNncXhzZDdveWowdCJ9.OWMREe5d718nrvgfNfGIMQ";

const map = ref(null);
const marker = ref(null);

const mapStyles = {
    streets: "mapbox://styles/mapbox/streets-v12",
    satellite: "mapbox://styles/mapbox/satellite-streets-v12"
};


onMounted(() => {
        initMap();
});


function initMap() {
    if (!props.foundation.coords) return;
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
    const [lng, lat] = props.foundation.coords;
    map.value.setStyle(mapStyles[mode]);
    map.value.once("style.load", () => {
        map.value.resize(); // <- wymagane po zmianie stylu
        map.value.setCenter([lng, lat]);
        addMarker();
    });
}

function addMarker() {
    if (!props.foundation.coords) return;
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
        <section class="bg-white text-[#0d2a52] py-8 px-4">
            <div class="max-w-6xl mx-auto">

                <!-- BANER -->
                <div class="w-full h-56 md:h-72 rounded-2xl overflow-hidden relative">
                    <img
                        :src="props.foundation.banner ?? '/img/default-banner.jpg'"
                        class="w-full h-full object-cover"
                        alt="baner"
                    >
                </div>

                <!-- LOGO -->
                <div class="flex justify-center -mt-16 md:-mt-20 relative z-10">
                    <div class="bg-white rounded-full p-3 shadow-lg border-2 border-work-main">
                        <img
                            :src="props.foundation.logo"
                            class="h-24 w-24 md:h-32 md:w-32 object-contain"
                        >
                    </div>
                </div>

                <!-- NAME + CATEGORY -->
                <div class="text-center mt-6">
                    <h1 class="text-2xl md:text-3xl font-bold">{{ props.foundation.name }}</h1>
                    <p class="text-lg text-gray-600 mt-1">{{ props.foundation.category }}</p>
                </div>

                <!-- BUTTONS -->
                <div class="flex flex-wrap justify-center gap-4 mt-8 uppercase">
                    <a v-if="props.foundation.phone"
                       :href="`tel:${props.foundation.phone}`"
                       class="btn-primary">
                        {{ __('translate.phone') ?? 'TELEFON' }}
                    </a>
                    <a v-if="props.foundation.email"
                       :href="`mailto:${props.foundation.email}`"
                       class="btn-primary">
                        {{ __('translate.email') ?? 'E-MAIL' }}
                    </a>
                    <a v-if="props.foundation.www"
                       :href="props.foundation.www"
                       target="_blank"
                       class="btn-primary">
                        WWW
                    </a>
                </div>

            </div>
        </section>

        <!-- DESCRIPTION + MAP -->
        <section class="bg-white text-work-main px-4 pb-24">

            <div class="max-w-6xl mx-auto" v-html="props.foundation.description"></div>

            <div class="max-w-6xl mx-auto items-center mt-10 grid grid-cols-1 md:grid-cols-2 gap-10">

                <!-- ADDRESS -->
                <div class="space-y-6 text-[17px] leading-relaxed">
                    <div class="flex items-start gap-3">
                        <img src="/images/partners/lokalizacja.svg" class="h-20 opacity-70" />
                        <p class="text-3xl">
                            {{ props.foundation.address_street }}<br>
                            {{ props.foundation.address_postcode }}<br>
                            {{ props.foundation.address_city }},
                            {{ props.foundation.address_country.allTranslations[usePage().props.language] }}
                        </p>
                    </div>
                </div>

                <!-- MAP -->
                <div>
                    <div id="foundationMap" class="w-full h-64 rounded-xl shadow border-2 border-work-main-light"></div>
                    <div class="flex gap-3 my-3 justify-end">
                        <button :title="__('translate.map')" class="px-3 py-1 rounded bg-work-main text-white hover:bg-work-main-dark"
                                @click="switchMode('streets')">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-map-icon lucide-map"><path d="M14.106 5.553a2 2 0 0 0 1.788 0l3.659-1.83A1 1 0 0 1 21 4.619v12.764a1 1 0 0 1-.553.894l-4.553 2.277a2 2 0 0 1-1.788 0l-4.212-2.106a2 2 0 0 0-1.788 0l-3.659 1.83A1 1 0 0 1 3 19.381V6.618a1 1 0 0 1 .553-.894l4.553-2.277a2 2 0 0 1 1.788 0z"/><path d="M15 5.764v15"/><path d="M9 3.236v15"/></svg>
                        </button>

                        <button :title="__('translate.satelite')" class="px-3 py-1 rounded bg-blue-600 text-white hover:bg-blue-700"
                                @click="switchMode('satellite')">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-satellite-icon lucide-satellite"><path d="m13.5 6.5-3.148-3.148a1.205 1.205 0 0 0-1.704 0L6.352 5.648a1.205 1.205 0 0 0 0 1.704L9.5 10.5"/><path d="M16.5 7.5 19 5"/><path d="m17.5 10.5 3.148 3.148a1.205 1.205 0 0 1 0 1.704l-2.296 2.296a1.205 1.205 0 0 1-1.704 0L13.5 14.5"/><path d="M9 21a6 6 0 0 0-6-6"/><path d="M9.352 10.648a1.205 1.205 0 0 0 0 1.704l2.296 2.296a1.205 1.205 0 0 0 1.704 0l4.296-4.296a1.205 1.205 0 0 0 0-1.704l-2.296-2.296a1.205 1.205 0 0 0-1.704 0z"/></svg>
                        </button>
                    </div>
                </div>
            </div>


            <!-- STATYSTYKI -->
            <div class="max-w-6xl mx-auto mt-12">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    <!-- Rok założenia -->
                    <div v-if="props.foundation.year_of_foundation" class="bg-white border-2 border-work-main-light rounded-xl p-6 text-center hover:shadow-lg transition-shadow">
                        <div class="flex justify-center mb-4">
                            <div class="w-14 h-14 flex items-center justify-center">
                                <img src="/images/partners/lokalizacja.svg" :alt="__('translate.year_of_foundation')">
                            </div>
                        </div>
                        <h3 class="text-gray-600 text-sm font-medium mb-2">{{__('translate.year_of_foundation')}}</h3>
                        <p class="text-[#0d2a52] text-3xl font-bold">{{ props.foundation.year_of_foundation }}</p>
                    </div>

                    <!-- Roczny obrót -->
                    <div class="bg-white border-2 border-work-main-light rounded-xl p-6 text-center hover:shadow-lg transition-shadow">
                        <div class="flex justify-center mb-4">
                            <div class="w-14 h-14 flex items-center justify-center">
                                <img src="/images/partners/lokalizacja.svg" alt="tik_tok">
                            </div>
                        </div>
                        <h3 class="text-gray-600 text-sm font-medium mb-2">{{__('translate.benefit_organization')}}</h3>
                        <p class="text-[#0d2a52] text-3xl font-bold">{{ props.foundation.benefit_organization ? __('translate.yes') :__('translate.no') }}</p>
                    </div>

                    <!-- Liczba pracowników -->
                    <div v-if="props.foundation.worker_count" class="bg-white border-2 border-work-main-light rounded-xl p-6 text-center hover:shadow-lg transition-shadow">
                        <div class="flex justify-center mb-4">
                            <div class="w-14 h-14 flex items-center justify-center">
                                <img src="/images/partners/lokalizacja.svg" alt="tik_tok">
                            </div>
                        </div>
                        <h3 class="text-gray-600 text-sm font-medium mb-2">{{__('translate.worker_count')}}</h3>
                        <p class="text-[#0d2a52] text-3xl font-bold">{{ props.foundation.worker_count }}</p>
                    </div>
                </div>
            </div>



            <div class="flex justify-center gap-2 p-2 mt-6">
                <!-- Social Media -->
                <div
                    v-if="props.foundation?.facebook_url || props.foundation?.x_url || props.foundation?.instagram_url || props.foundation?.linkedin_url || props.foundation?.tiktok_url">
                    <div class="flex flex-wrap gap-1">
                        <a v-if="props.foundation.facebook_url" :href="props.foundation.facebook_url" target="_blank"
                           class="w-10 h-10 transition hover:scale-95">
                            <img src="/images/icons/facebook.svg" alt="facebook">
                        </a>
                        <a v-if="props.foundation.x_url" :href="props.foundation.x_url" target="_blank"
                           class="w-10 h-10 transition hover:scale-95">
                            <img src="/images/icons/x.svg" alt="x">
                        </a>
                        <a v-if="props.foundation.instagram_url" :href="props.foundation.instagram_url"
                           target="_blank" class="w-10 h-10 transition hover:scale-95">
                            <img src="/images/icons/instagram.svg" alt="instagram">
                        </a>
                        <a v-if="props.foundation.linkedin_url" :href="props.foundation.linkedin_url" target="_blank"
                           class="w-10 h-10 transition hover:scale-95">
                            <img src="/images/icons/linkedin.svg" alt="linkedin">
                        </a>
                        <a v-if="props.foundation.tiktok_url" :href="props.foundation.tiktok_url" target="_blank"
                           class="w-10 h-10 transition hover:scale-95">
                            <img src="/images/icons/tik_tok.svg" alt="tik_tok">
                        </a>
                    </div>
                </div>
            </div>
        </section>

    </FrontLayout>
</template>

<style>
.btn-primary {
    @apply px-8 py-2 rounded-md bg-[#0d2a52] text-white font-semibold shadow hover:bg-[#11376a] transition;
}

</style>
