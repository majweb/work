<script setup>
import FrontLayout from "@/Layouts/FrontLayout.vue";
import { onMounted, ref } from "vue";
import mapboxgl from "mapbox-gl";
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
        addMarker();
        map.value.setCenter([lng, lat]);
    });
}

function addMarker() {
    const [lng, lat] = props.foundation.coords;

    if (marker.value) marker.value.remove();

    marker.value = new mapboxgl.Marker({ color: "#0d2a52" })
        .setLngLat([lng, lat])
        .addTo(map.value);
}
</script>

<template>
    <FrontLayout :title="props.foundation.name">

        <!-- BANER + LOGO -->
        <section class="bg-white text-[#0d2a52] pt-8 pb-24 px-4">
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
                <div class="flex flex-wrap justify-center gap-4 mt-8">
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

            <div class="max-w-6xl mx-auto mt-10" v-html="props.foundation.description"></div>

            <div class="max-w-6xl mx-auto mt-10 grid grid-cols-1 md:grid-cols-2 gap-10">

                <!-- ADDRESS -->
                <div class="space-y-6 text-[17px] leading-relaxed">
                    <div class="flex items-start gap-3">
                        <img src="/images/partners/lokalizacja.svg" class="h-6 opacity-70" />
                        <p>{{ props.foundation.address_country.allTranslations[usePage().props.language] }}</p>
                    </div>

                    <div class="flex items-start gap-3">
                        <img src="/images/partners/lokalizacja2.svg" class="h-6 opacity-70" />
                        <p>
                            {{ props.foundation.address_street }}<br>
                            {{ props.foundation.address_city }},
                            {{ props.foundation.address_country.allTranslations[usePage().props.language] }}
                        </p>
                    </div>
                </div>

                <!-- MAP -->
                <div>
                    <div class="flex gap-3 mb-3">
                        <button class="px-3 py-1 rounded bg-work-main text-white hover:bg-work-main-dark"
                                @click="switchMode('streets')">
                            Mapa
                        </button>

                        <button class="px-3 py-1 rounded bg-blue-600 text-white hover:bg-blue-700"
                                @click="switchMode('satellite')">
                            Satelita
                        </button>
                    </div>

                    <div id="foundationMap" class="w-full h-64 rounded-xl shadow"></div>

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
