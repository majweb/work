<script setup>
import AppLayout from "@/Layouts/AppLayout.vue"
import {Link, usePage} from "@inertiajs/vue3";
import {computed, onMounted, ref} from "vue";
import mapboxgl from "mapbox-gl";
import "mapbox-gl/dist/mapbox-gl.css";
import __ from "@/lang.js";

const props = defineProps({
    application: Object,
    statusMessages: Array
})
const application = computed(() => props.application);

const isClient = ref(false);
onMounted(() => { isClient.value = true; })
const map = ref(null);
const marker = ref(null);
mapboxgl.accessToken = "pk.eyJ1Ijoid29yazR5b3UiLCJhIjoiY21pc255bnNtMGJkcTNncXhzZDdveWowdCJ9.OWMREe5d718nrvgfNfGIMQ";

onMounted(async () => {
    isClient.value = true;
    if (!application.value.location) return;

    const result = await geocode(application.value.location);
    if (!result) return;

    application.value.locationFull = result.fullAddress;
    initMap(result.coords);
});

async function geocode(address) {
    try {
        const res = await fetch(
            `https://api.mapbox.com/geocoding/v5/mapbox.places/${encodeURIComponent(
                address
            )}.json?access_token=${mapboxgl.accessToken}`
        );
        const data = await res.json();
        const feature = data.features?.[0];
        if (!feature) return null;

        const coords = feature.center;

        let street = "";
        let house = "";
        let postal = "";
        let city = "";

        // numer domu w Mapbox bywa w 'address'
        if (feature.address) house = feature.address;

        if (feature.context) {
            feature.context.forEach((c) => {
                if (c.id.startsWith("postcode.")) postal = c.text;
                if (c.id.startsWith("place.")) city = c.text;
                if (c.id.startsWith("street.")) street = c.text;
            });
        }

        // jeśli feature.text nie jest pusty i street nie został ustawiony
        if (feature.text && !street) street = feature.text;

        const fullAddress = `${__('translate.streetShort')} ${street}${house ? " " + house : ""}, ${postal} ${city}`;

        return { coords, fullAddress };
    } catch (e) {
        console.error("Mapbox geocode error", e);
        return null;
    }
}
function initMap([lng, lat]) {
    map.value = new mapboxgl.Map({
        container: "applicationMap",
        style: "mapbox://styles/mapbox/light-v11",
        center: [lng, lat],
        zoom: 14,
        attributionControl: false,
    });
    map.value.on("load", () => { map.value.resize(); addMarker([lng, lat]); });
}

function addMarker([lng, lat]) {
    if (marker.value) marker.value.remove();
    marker.value = new mapboxgl.Marker({ color: "#0A2C5C" })
        .setLngLat([lng, lat])
        .addTo(map.value);
}

// Tłumaczenia label + ikona
const applicationTypeLabel = computed(() => {
    switch (application.value.type) {
        case 'video': return __('translate.cv_video');
        case 'audio': return __('translate.cv_audio');
        default: return __('translate.cv_classic');
    }
});
const applicationTypeIcon = computed(() => {
    switch (application.value.type) {
        case 'video': return '/images/icons/cv-video.svg';
        case 'audio': return '/images/icons/cv-audio.svg';
        default: return '/images/icons/cv-classic.svg';
    }
});

const generateUrl = computed(() => {
    if (application.value.project.cityWork && application.value.project.streetWork && application.value.project.streetWorkNumber) {
        let myUrlWithParams = new URL(`https://www.google.com/maps/embed/v1/place?key=${usePage().props.mapsApi}`);
        myUrlWithParams.searchParams.append("q", application.value.project.countryWork?.allTranslations[usePage().props.language] + ' ' + application.value.project.cityWork + ' ' + application.value.project.streetWork + ' ' + application.value.project.streetWorkNumber + ' ' + application.value.project.postalWork);
        return myUrlWithParams.toString();
    }
});

const statusSteps = computed(() => {
    const steps = [ { key: 'sent', label: __('translate.application_sent') } ];
    if (application.value.status === 'review') steps.push({ key: 'review', label: __('translate.application_reviewing') });
    if (application.value.status === 'accepted') steps.push({ key: 'accepted', label: __('translate.application_accepted') });
    if (application.value.status === 'rejected') steps.push({ key: 'rejected', label: __('translate.application_rejected') });
    return steps;
});

const currentIndex = computed(() => statusSteps.value.findIndex(step => step.key === application.value.status));
const filteredStatusSteps = computed(() => statusSteps.value.filter(step => {
    if (application.value.status === 'accepted') return step.key !== 'rejected';
    if (application.value.status === 'rejected') return step.key !== 'accepted';
    return true;
}));
const isActiveStep = (stepKey) => {
    const stepIndex = statusSteps.value.findIndex(step => step.key === stepKey);
    if (stepIndex === -1 || currentIndex.value === -1) return false;
    return stepIndex <= currentIndex.value;
};
</script>

<template>
    <AppLayout :title="__('translate.dashboard')">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('translate.application') }}
            </h2>
        </template>

        <div class="py-12 max-w-7xl mx-auto sm:px-6 lg:px-8">

            <!-- BACK -->
            <div class="px-3 md:px-0 mb-6">
                <Link :href="route('worker.aplications')" class="text-sm font-medium text-[#0A2C5C] hover:underline flex items-center gap-2">
                    ← {{ __('translate.back') }}
                </Link>
            </div>

            <!-- TITLE -->
            <div class="px-3 md:px-0 mb-4">
                <h3 class="text-3xl font-bold text-[#0A2C5C]">{{ application.title }}</h3>
                <p class="text-lg text-gray-700 font-medium">{{ application.company }}</p>
                <p class="text-sm text-gray-400">{{ application.category }}</p>
            </div>

            <!-- META -->
            <p class="text-sm text-gray-500 mb-8 flex items-center">
                <img :src="applicationTypeIcon" alt="Type" class="w-10 h-10"/>
                <span class="ml-1">{{ __('translate.applied_from') }}</span>
                <span class="font-semibold text-[#0A2C5C] ml-1">{{ applicationTypeLabel }}</span>
            </p>

            <!-- CARD -->
            <div class="bg-white rounded-xl shadow p-8 space-y-10">

                <!-- INFO ICONS -->
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-4">
                    <div class="grid grid-cols-2 gap-4">

                        <div class="flex-1 text-center flex flex-col items-center border border-2 border-[#009FE4] p-2">
                            <img src="/images/icons/wynagrodzenie.svg" alt="money icon" class="w-20 h-20" />
                            <p class="text-sm text-gray-600">{{ __('translate.salary_from') }} <span class="font-bold text-black">{{ application.basicSalaryFrom }} {{ application.currency?.value }}</span> {{ __('translate.per_month') }}</p>
                            <p class="text-sm text-gray-600">{{ __('translate.salary_to') }} <span class="font-bold text-black">{{ application.basicSalaryTo }} {{ application.currency?.value }}</span> {{ __('translate.per_month') }}</p>
                        </div>

                        <div class="flex-1 text-center flex flex-col items-center border border-2 border-[#009FE4] p-2">
                            <img src="/images/icons/praca_hybrydowa.svg" alt="hybrid icon" class="w-20 h-20" />
                            <p class="text-sm text-gray-600">{{ __('translate.work_mode') }}</p>
                            <p class="font-bold" v-for="mode in application.workingMode">{{ mode.allTranslations.title[usePage().props.language] }}</p>
                        </div>

                        <div class="flex-1 text-center flex flex-col items-center border border-2 border-[#009FE4] p-2">
                            <img src="/images/icons/5.svg" alt="contract icon" class="w-20 h-20" />
                            <p class="text-sm text-gray-600">{{ __('translate.contract') }}</p>
                            <p class="font-bold" v-for="type in application.typeOfContract">{{ type.allTranslations.name[usePage().props.language] }}</p>
                        </div>

                        <div class="flex-1 text-center flex flex-col items-center border border-2 border-[#009FE4] p-2">
                            <img src="/images/icons/wymiar_pracy.svg" alt="time icon" class="w-20 h-20" />
                            <p class="text-sm text-gray-600">{{ __('translate.work_time') }}</p>
                            <p class="font-bold">{{ application?.workLoad.allTranslations.name[usePage().props.language] }}</p>
                        </div>

                    </div>

                    <!-- TIMELINE -->
                    <div class="flex justify-center">
                        <div class="relative pl-4">
                            <ul class="flex flex-col gap-18 mt-10 md:mt-0">
                                <li v-for="(step,index) in filteredStatusSteps" :key="step.key" class="relative flex items-start gap-4">
                                    <span v-if="index !== statusSteps.length-1" class="absolute left-[11px] top-4 w-[2px] h-[calc(100%+4.5rem)] bg-gray-300"></span>
                                    <div class="flex items-center justify-center">
                                        <span class="block w-6 h-6 rounded-full border-2 z-10" :class="isActiveStep(step.key) ? 'bg-work-main border-work-main' : 'bg-gray-300 border-gray-300'"></span>
                                    </div>
                                    <p class="font-medium leading-tight relative w-full" :class="isActiveStep(step.key) ? 'text-[#0A2C5C]' : 'text-gray-400'">
                                        <span v-if="application.statusDates?.[step.key]" class="w-full absolute -top-4 left-0 text-xs text-work-main-light">{{ application.statusDates[step.key] }}</span>
                                        {{ step.label }}
                                    </p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- MAP -->
                <div v-if="isClient && application.location" class="my-4">
                    <div id="applicationMap" class="w-full h-64 rounded-xl shadow border border-gray-200"></div>
                    <p class="text-sm text-gray-500 mt-2 text-right">{{ application.locationFull }}
                    </p>
                </div>

                <!-- STATUS MESSAGES & BUTTON -->
                <div class="flex flex-col gap-4">
                    <div class="flex flex-col gap-4 mb-4">
                        <div v-for="item,index in application.statusMessages" :key="index" class="relative p-4 border rounded-lg bg-gray-50 flex items-center gap-2 my-1">
                            <img class="h-10" src="/images/icons/oferty.svg" alt="offers" />
                            <span
                                v-if="application.statusDates?.[item.key]"
                                class="absolute -top-4 left-0 text-xs text-work-main-light"
                            >
                                {{ application.statusDates[item.key] }}
                            </span>
                            <p>{{ item.message }}</p>
                        </div>
                    </div>
                    <Link :href="route('front.projects.single', application.project)" class="w-2/4 md:w-1/4 mx-auto bg-[#0A2C5C] text-white py-3 rounded-lg font-semibold hover:bg-[#12315d] transition text-center">{{ __('translate.check_offer') }}</Link>
                </div>

            </div>
        </div>
    </AppLayout>
</template>
