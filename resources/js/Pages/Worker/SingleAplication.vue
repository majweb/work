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
mapboxgl.accessToken = usePage().props.mapboxToken;

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
const getStatusColor = (status) => ({
    accepted: 'bg-blue-900',
    reserved: 'bg-blue-900',
    sent: 'bg-gray-300',
    review: 'bg-cyan-500',
    viewed: 'bg-cyan-500',
    rejected: 'bg-red-600'
}[status] || 'bg-gray-300');

const getStatusTextColor = (status) => ({
    accepted: 'text-blue-900',
    reserved: 'text-blue-900',
    sent: 'text-gray-400',
    review: 'text-cyan-500',
    viewed: 'text-cyan-500',
    rejected: 'text-red-600'
}[status] || 'text-gray-400');

const getStatusBorderColor = (status) => ({
    accepted: 'border-blue-100',
    reserved: 'border-blue-100',
    sent: 'border-gray-100',
    review: 'border-cyan-100',
    viewed: 'border-cyan-100',
    rejected: 'border-red-100'
}[status] || 'border-gray-100');

const getStatusPingColor = (status) => ({
    accepted: 'bg-blue-400',
    reserved: 'bg-blue-400',
    sent: 'bg-gray-200',
    review: 'bg-cyan-400',
    viewed: 'bg-cyan-400',
    rejected: 'bg-red-400'
}[status] || 'bg-gray-200');

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

        <div class="py-12 bg-gray-50/50 min-h-screen">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-8 font-sans">

                <!-- HEADER CARD -->
                <section class="bg-white rounded-3xl shadow-sm border border-gray-100 overflow-hidden">
                    <div class="p-8">
                        <div class="flex flex-col md:flex-row md:items-center justify-between gap-6">
                            <div>
                                <!-- BACK -->
                                <div class="mb-4">
                                    <Link :href="route('worker.aplications')" class="text-[10px] font-black uppercase tracking-widest text-[#0A2C5C] hover:underline flex items-center gap-2">
                                        ← {{ __('translate.back') }}
                                    </Link>
                                </div>
                                <div class="flex items-center gap-4 mb-4">
                                    <div class="p-2.5 bg-blue-50/50 rounded-2xl shadow-sm ring-1 ring-blue-100">
                                        <img :src="applicationTypeIcon" alt="Type" class="w-8 h-8 md:w-10 md:h-10"/>
                                    </div>
                                    <div>
                                        <p class="text-[10px] font-black text-slate-400 uppercase tracking-widest mb-0.5">{{ __('translate.applied_from') }}</p>
                                        <p class="text-xs font-bold text-[#0A2C5C] uppercase">{{ applicationTypeLabel }}</p>
                                    </div>
                                </div>
                                <h3 class="text-2xl md:text-3xl font-black text-slate-800 uppercase tracking-tight leading-none mb-3">{{ application.title }}</h3>
                                <div class="flex flex-wrap items-center gap-x-4 gap-y-2">
                                    <p class="text-sm text-slate-600 font-bold flex items-center gap-2">
                                        <svg class="w-4 h-4 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-7h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" /></svg>
                                        {{ application.company }}
                                    </p>
                                    <span class="w-1.5 h-1.5 bg-slate-200 rounded-full hidden md:block"></span>
                                    <p class="text-[10px] font-black text-slate-400 uppercase tracking-widest bg-slate-100 px-3 py-1 rounded-lg">{{ application.category }}</p>
                                </div>
                            </div>

                            <Link :href="route('front.projects.single', application.project)" class="inline-flex items-center justify-center px-8 py-4 rounded-2xl bg-[#0A2C5C] text-white text-xs font-black uppercase tracking-widest hover:bg-[#12315d] shadow-lg shadow-blue-900/20 transition-all hover:-translate-y-0.5 active:translate-y-0">
                                {{ __('translate.check_offer') }}
                                <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" /></svg>
                            </Link>
                        </div>
                    </div>
                </section>

                <!-- CARD -->
                <div class="bg-white rounded-[3rem] border border-gray-100 shadow-xl shadow-slate-200/50 p-6 md:p-10 space-y-12 overflow-hidden">

                <!-- INFO ICONS -->
                <div class="grid grid-cols-1 xl:grid-cols-12 gap-10">
                    <div class="xl:col-span-7 grid grid-cols-1 sm:grid-cols-2 gap-4">

                        <div class="group flex items-center gap-5 rounded-[2rem] border border-slate-100 p-5 bg-gradient-to-br from-slate-50/50 to-white shadow-sm hover:shadow-md transition-all hover:border-blue-100">
                            <div class="p-4 bg-white rounded-2xl shadow-sm ring-1 ring-blue-100 group-hover:ring-blue-200 transition-all">
                                <img src="/images/icons/wynagrodzenie.svg" alt="money icon" class="w-12 h-12" />
                            </div>
                            <div>
                                <p class="text-[10px] font-black text-slate-400 uppercase tracking-widest mb-1">{{ __('translate.salary') }}</p>
                                <div class="flex flex-col">
                                    <span class="text-sm font-black text-blue-900">{{ application.basicSalaryFrom }} - {{ application.basicSalaryTo }} {{ application.currency?.value }}</span>
                                    <span class="text-[10px] font-bold text-slate-500 uppercase">{{ __('translate.monthly') }}</span>
                                </div>
                            </div>
                        </div>

                        <div class="group flex items-center gap-5 rounded-[2rem] border border-slate-100 p-5 bg-gradient-to-br from-slate-50/50 to-white shadow-sm hover:shadow-md transition-all hover:border-blue-100">
                            <div class="p-4 bg-white rounded-2xl shadow-sm ring-1 ring-blue-100 group-hover:ring-blue-200 transition-all">
                                <img src="/images/icons/praca_hybrydowa.svg" alt="hybrid icon" class="w-12 h-12" />
                            </div>
                            <div>
                                <p class="text-[10px] font-black text-slate-400 uppercase tracking-widest mb-1">{{ __('translate.work_mode') }}</p>
                                <div class="flex flex-wrap gap-1">
                                    <span class="text-sm font-black text-blue-900 uppercase tracking-tight" v-for="mode in application.workingMode">{{ mode.allTranslations.title[usePage().props.language] }}</span>
                                </div>
                            </div>
                        </div>

                        <div class="group flex items-center gap-5 rounded-[2rem] border border-slate-100 p-5 bg-gradient-to-br from-slate-50/50 to-white shadow-sm hover:shadow-md transition-all hover:border-blue-100">
                            <div class="p-4 bg-white rounded-2xl shadow-sm ring-1 ring-blue-100 group-hover:ring-blue-200 transition-all">
                                <img src="/images/icons/5.svg" alt="contract icon" class="w-12 h-12" />
                            </div>
                            <div>
                                <p class="text-[10px] font-black text-slate-400 uppercase tracking-widest mb-1">{{ __('translate.contract') }}</p>
                                <div class="flex flex-wrap gap-1">
                                    <span class="text-sm font-black text-blue-900 uppercase tracking-tight" v-for="type in application.typeOfContract">{{ type.allTranslations.name[usePage().props.language] }}</span>
                                </div>
                            </div>
                        </div>

                        <div class="group flex items-center gap-5 rounded-[2rem] border border-slate-100 p-5 bg-gradient-to-br from-slate-50/50 to-white shadow-sm hover:shadow-md transition-all hover:border-blue-100">
                            <div class="p-4 bg-white rounded-2xl shadow-sm ring-1 ring-blue-100 group-hover:ring-blue-200 transition-all">
                                <img src="/images/icons/wymiar_pracy.svg" alt="time icon" class="w-12 h-12" />
                            </div>
                            <div>
                                <p class="text-[10px] font-black text-slate-400 uppercase tracking-widest mb-1">{{ __('translate.work_time') }}</p>
                                <span class="text-sm font-black text-blue-900 uppercase tracking-tight">{{ application?.workLoad.allTranslations.name[usePage().props.language] }}</span>
                            </div>
                        </div>

                    </div>

                    <!-- TIMELINE -->
                    <div class="xl:col-span-5 bg-slate-50/50 rounded-[2.5rem] p-8 border border-slate-100 shadow-inner">
                        <div class="relative h-full flex flex-col justify-center">
                            <h4 class="text-[10px] font-black text-slate-400 uppercase tracking-[0.2em] mb-8 text-center">{{ __('translate.application_status') }}</h4>
                            <div class="relative px-4">
                                <ul class="flex flex-col gap-10">
                                    <li v-for="(step,index) in filteredStatusSteps" :key="step.key" class="relative flex items-start gap-6 group">
                                        <span v-if="index !== filteredStatusSteps.length-1"
                                              class="absolute left-[15px] top-8 w-[2px] h-[calc(100%+2.5rem)] transition-colors duration-500"
                                              :class="isActiveStep(filteredStatusSteps[index+1]?.key) ? getStatusColor(filteredStatusSteps[index+1]?.key) : 'bg-slate-200'"></span>

                                        <div class="relative flex items-center justify-center mt-1">
                                            <div class="absolute w-8 h-8 rounded-full animate-ping opacity-20"
                                                 :class="isActiveStep(step.key) && step.key === application.status ? getStatusPingColor(step.key) : 'hidden'"></div>
                                            <span class="block w-8 h-8 rounded-full border-4 z-10 transition-all duration-500 shadow-sm"
                                                  :class="isActiveStep(step.key) ? [getStatusColor(step.key), getStatusBorderColor(step.key), 'scale-110'] : 'bg-white border-slate-200'"></span>
                                        </div>

                                        <div class="flex flex-col pb-2">
                                            <span v-if="application.statusDates?.[step.key]"
                                                  class="text-[10px] font-black uppercase tracking-widest mb-1 transition-colors"
                                                  :class="isActiveStep(step.key) ? getStatusTextColor(step.key) : 'opacity-40'">
                                                {{ application.statusDates[step.key] }}
                                            </span>
                                            <p class="font-black uppercase tracking-tight transition-all duration-500"
                                               :class="isActiveStep(step.key) ? [getStatusTextColor(step.key), 'text-lg'] : 'text-slate-400 text-base'">
                                                {{ step.label }}
                                            </p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- MAP -->
                <div v-if="isClient && application.location" class="relative group">
                    <div class="absolute -top-4 left-8 px-4 py-1 bg-white border border-slate-200 rounded-full shadow-sm z-10">
                        <p class="text-[10px] font-black text-slate-400 uppercase tracking-widest">{{ __('translate.location') }}</p>
                    </div>
                    <div id="applicationMap" class="w-full h-80 rounded-[2.5rem] shadow-sm border border-slate-200/60 group-hover:shadow-md transition-shadow"></div>
                    <div class="absolute bottom-4 right-4 bg-white/90 backdrop-blur px-4 py-2 rounded-2xl border border-slate-100 shadow-sm">
                        <p class="text-xs font-bold text-slate-700">{{ application.locationFull }}</p>
                    </div>
                </div>

                <!-- STATUS MESSAGES -->
                <div v-if="application.statusMessages && application.statusMessages.length > 0" class="space-y-6">
                    <div class="flex items-center gap-4">
                        <div class="h-px flex-1 bg-slate-100"></div>
                        <h4 class="text-[10px] font-black text-slate-400 uppercase tracking-[0.2em]">{{ __('translate.messages') }}</h4>
                        <div class="h-px flex-1 bg-slate-100"></div>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div v-for="(item, index) in application.statusMessages" :key="index" class="relative p-6 border border-slate-100 rounded-[2rem] bg-slate-50/30 flex items-start gap-4 transition-all hover:bg-white hover:shadow-md hover:border-blue-50">
                            <div class="p-3 bg-white rounded-xl shadow-sm ring-1 ring-slate-100">
                                <img class="w-8 h-8" src="/images/icons/oferty.svg" alt="offers" />
                            </div>
                            <div class="flex-1">
                                <span v-if="application.statusDates?.[item.key]" class="text-[10px] font-black uppercase tracking-widest block mb-1"
                                      :class="getStatusTextColor(item.key)">
                                    {{ application.statusDates[item.key] }}
                                </span>
                                <p class="text-sm text-slate-700 leading-relaxed font-medium">{{ item.message }}</p>
                            </div>
                        </div>
                    </div>
                </div>

                </div>
            </div>
        </div>
    </AppLayout>
</template>
