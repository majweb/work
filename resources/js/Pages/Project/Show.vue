<script setup>
import { Link, router, usePage } from '@inertiajs/vue3';
import AppLayout from '@/Layouts/AppLayout.vue';
import DangerButton from "@/Components/DangerButton.vue";
import DialogModal from "@/Components/DialogModal.vue";
import SecondaryButton from "@/Components/SecondaryButton.vue";
import { ref, computed, onMounted, nextTick } from "vue";
import Multiselect from 'vue-multiselect'
import Info from "@/Components/Info.vue";
import __ from "@/lang.js";
import mapboxgl from "mapbox-gl";
import "mapbox-gl/dist/mapbox-gl.css";

// Używamy tokena z propsów jeśli jest dostępny, w przeciwnym razie fallback na ten z designu
mapboxgl.accessToken = usePage().props.mapboxToken;

const props = defineProps({
    project: Object,
    otherRecruits: Array,
    locale: String,
});
const selectedProject = ref(null);
const confirmCancelProject = ref(false);
const showChangeRecruit = ref(false);
const map = ref(null);

const filteredOtherRecruits = computed(() => {
    return props.otherRecruits.filter(r => r.value !== props.project.recruit?.id);
});

const otherRecruitsList = computed(() => {
    if (!props.project.other_recruits || !Array.isArray(props.project.other_recruits)) return [];

    // In RecruiterPages/Project/Show.vue it was mapped from ID to User model,
    // here we use the data already in the JSON if possible or props.otherRecruits to match.
    return props.project.other_recruits.map(item => {
        const recruit = props.otherRecruits.find(r => r.value === item.value);
        return recruit || item;
    });
});

const openModal = (project) => {
    confirmCancelProject.value = true;
    selectedProject.value = project;
}

const dispatchAction = value => {
    router.post(route('firm.addMoreRecruits', props.project?.id), { others: value }, {
        preserveScroll: true,
        onSuccess: () => {
            router.reload({ only: ['project'] });
        }
    });
}

const dispatchActionSingleRecruit = value => {
    router.post(route('firm.changeRecruit', props.project?.id), { recruit: value }, {
        preserveScroll: true,
        onSuccess: () => {
            router.reload({ only: ['project', 'otherRecruits'] });
            showChangeRecruit.value = false;
        }
    });
}

const DeleteProject = () => {
    if (selectedProject.value) {
        router.delete(route('projects.destroy', selectedProject.value), {
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

const lang = computed(() => usePage().props.language);

onMounted(async () => {
    if (!hasLocation.value) return;

    await nextTick();

    // Geocoding - pobierz współrzędne z adresu
    const countryName = props.project.countryWork?.allTranslations?.[lang.value] || props.project.countryWork?.name || props.project.countryWork || '';
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
    <AppLayout :title="__('translate.project') + ' #' + props.project.id">
        <div class="py-12 bg-gray-50/50 min-h-screen">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-8">
                <!-- Nagłówek z linkiem wstecz -->
                <div class="flex items-center justify-between">
                    <div>
                        <h2 class="text-2xl font-black text-gray-900 uppercase tracking-tight leading-tight">
                            {{ getPositionTitle }}
                        </h2>
                        <p class="text-[10px] font-black text-blue-500 uppercase tracking-widest mt-1">
                            {{ __('translate.project') }} #{{ props.project.id }}
                        </p>
                    </div>

                    <Link
                        :href="route('projects.index')"
                        class="inline-flex items-center gap-2 rounded-2xl border border-gray-100 bg-white px-6 py-3 text-xs font-black uppercase tracking-widest text-[#0A2C5C] shadow-sm hover:bg-gray-50 transition-all hover:-translate-y-0.5"
                    >
                        <span class="text-lg leading-none">←</span>
                        {{ __('translate.backButton') }}
                    </Link>
                </div>

                <!-- Status naboru i statystyki -->
                <div class="bg-white rounded-[3rem] shadow-xl shadow-blue-900/5 border border-gray-100 p-10">
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                        <!-- Status naboru z licznikami -->
                        <div class="bg-gray-50/50 rounded-[2rem] p-6 border border-gray-100/50">
                            <div class="flex items-center gap-2 mb-4">
                                <div class="w-2.5 h-2.5 rounded-full animate-pulse"
                                     :class="props.project.is_active ? 'bg-green-500 shadow-sm shadow-green-200' : 'bg-gray-300'">
                                </div>
                                <h3 class="text-[10px] font-black text-gray-400 uppercase tracking-widest">{{ __('translate.recruitmentStatus') }}</h3>
                            </div>
                            <p class="text-sm font-black mb-6 uppercase tracking-tight"
                               :class="props.project.is_active ? 'text-green-600' : 'text-gray-400'">
                                {{ props.project.is_active ? __('translate.recruitmentActive') : __('translate.inactive') }}
                            </p>

                            <div class="grid grid-cols-3 gap-3 text-center">
                                <div class="bg-white rounded-xl p-3 shadow-sm border border-gray-100">
                                    <div class="text-[8px] font-black text-gray-400 uppercase tracking-widest mb-1">{{ __('translate.statusYesLabel') }}</div>
                                    <div class="text-xl font-black text-[#0A2C5C]">{{ props.project.yes_count || 0 }}</div>
                                </div>
                                <div class="bg-white rounded-xl p-3 shadow-sm border border-gray-100">
                                    <div class="text-[8px] font-black text-gray-400 uppercase tracking-widest mb-1">{{ __('translate.statusNoLabel') }}</div>
                                    <div class="text-xl font-black text-red-600">{{ props.project.no_count || 0 }}</div>
                                </div>
                                <div class="bg-white rounded-xl p-3 shadow-sm border border-gray-100">
                                    <div class="text-[8px] font-black text-gray-400 uppercase tracking-widest mb-1">{{ __('translate.statusMaybeLabel') }}</div>
                                    <div class="text-xl font-black text-cyan-500">{{ props.project.maybe_count || 0 }}</div>
                                </div>
                            </div>
                        </div>

                        <!-- Aplikacje -->
                        <div class="bg-gray-50/50 rounded-[2rem] p-6 border border-gray-100/50 flex flex-col justify-center">
                            <p class="text-[10px] font-black text-gray-400 uppercase tracking-widest mb-2">{{ __('translate.applications') }}</p>
                            <p class="text-5xl font-black text-[#0A2C5C] tracking-tight">{{ props.project.aplications_count || 0 }}</p>
                        </div>

                        <!-- Wyświetlenia -->
                        <div class="bg-gray-50/50 rounded-[2rem] p-6 border border-gray-100/50 flex flex-col justify-center">
                            <p class="text-[10px] font-black text-gray-400 uppercase tracking-widest mb-2">{{ __('translate.viewsCount') }}</p>
                            <p class="text-5xl font-black text-[#0A2C5C] tracking-tight">{{ props.project.views_count || 0 }}</p>
                        </div>

                        <!-- Nowe aplikacje -->
                        <div class="bg-gray-50/50 rounded-[2rem] p-6 border border-gray-100/50 flex flex-col justify-center">
                            <p class="text-[10px] font-black text-gray-400 uppercase tracking-widest mb-2">{{ __('translate.newApplications') }}</p>
                            <p class="text-5xl font-black text-[#00a0e3] tracking-tight">{{ props.project.new_count || 0 }}</p>
                        </div>
                    </div>
                </div>

                <!-- Główna zawartość -->
                <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                    <!-- Lewa kolumna - szczegóły (2/3) -->
                    <div class="lg:col-span-2 space-y-8">

                        <!-- Podstawowe informacje -->
                        <div class="bg-white rounded-[3rem] shadow-xl shadow-blue-900/5 border border-gray-100 p-10">
                            <div class="flex items-center gap-4 mb-8">
                                <div class="w-12 h-12 rounded-2xl bg-blue-50 flex items-center justify-center border border-blue-100/50 shadow-sm">
                                    <img class="w-10 h-10" src="/images/icons/recruit/informacje_podstawowe.svg" :alt="__('translate.altBasicInfo')">
                                </div>
                                <h2 class="text-[10px] font-black text-[#0A2C5C] uppercase tracking-[0.2em]">{{ __('translate.basicInfo') }}</h2>
                                <div class="h-px flex-1 bg-gray-100"></div>
                            </div>

                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div class="bg-gray-50/50 p-6 rounded-[2rem] border border-gray-100/50">
                                    <p class="text-[10px] font-black text-gray-400 uppercase tracking-widest mb-2">ID</p>
                                    <p class="text-xl font-black text-gray-900 tracking-widest">{{ props.project.id }}</p>
                                </div>
                                <div class="bg-gray-50/50 p-6 rounded-[2rem] border border-gray-100/50">
                                    <p class="text-[10px] font-black text-gray-400 uppercase tracking-widest mb-2">{{ __('translate.statusLabel') }}</p>
                                    <p class="text-xl font-black uppercase tracking-tight"
                                          :class="props.project.is_active ? 'text-green-600' : 'text-red-600'">
                                        {{ props.project.is_active ? __('translate.activeStatus') : __('translate.inactiveStatus') }}
                                    </p>
                                </div>
                                <div class="bg-gray-50/50 p-6 rounded-[2rem] border border-gray-100/50 col-span-1 md:col-span-2 flex items-center gap-4" v-if="props.project.title">
                                    <div>
                                        <p class="text-[10px] font-black text-gray-400 uppercase tracking-widest mb-2">{{ __('translate.projectTitleLabel') }}</p>
                                        <p class="text-sm font-black text-[#0A2C5C] uppercase tracking-tight">{{ props.project.title[lang] }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Rekruterzy (ZACHOWANA FUNKCJONALNOŚĆ W NOWYM STYLU) -->
                        <div class="bg-white rounded-[3rem] shadow-xl shadow-blue-900/5 border border-gray-100 p-10">
                            <div class="flex items-center gap-4 mb-8">
                                <div class="w-12 h-12 rounded-2xl bg-blue-50 flex items-center justify-center border border-blue-100/50 shadow-sm">
                                    <div class="w-10 h-10 bg-[#0A2C5C] rounded-xl flex items-center justify-center text-white font-black text-xs">
                                        {{ props.project.recruit?.name?.charAt(0) }}
                                    </div>
                                </div>
                                <h2 class="text-[10px] font-black text-[#0A2C5C] uppercase tracking-[0.2em]">{{ __('translate.recruiter') }}</h2>
                                <div class="h-px flex-1 bg-gray-100"></div>
                            </div>

                            <div class="space-y-8">
                                <!-- Główny rekruter -->
                                <div class="bg-gray-50/50 p-6 rounded-[2rem] border border-gray-100/50">
                                    <div class="flex items-center justify-between mb-4">
                                        <h3 class="text-[10px] font-black text-gray-400 uppercase tracking-widest">{{ __('translate.mainRecruiter') || 'Główny rekruter' }}</h3>
                                        <button
                                            @click="showChangeRecruit = !showChangeRecruit"
                                            class="text-[10px] font-black text-[#0A2C5C] hover:underline uppercase tracking-widest"
                                        >
                                            {{ showChangeRecruit ? __('translate.cancel') : __('translate.change') }}
                                        </button>
                                    </div>

                                    <div v-if="!showChangeRecruit" class="flex items-center gap-4">
                                        <div class="w-12 h-12 rounded-2xl bg-white border border-gray-100 shadow-sm flex items-center justify-center overflow-hidden">
                                             <div class="text-[#0A2C5C] font-black text-sm uppercase">
                                                 {{ props.project.recruit?.name?.charAt(0) }}
                                             </div>
                                        </div>
                                        <p class="text-sm font-black text-[#0A2C5C] uppercase tracking-tight">{{ props.project.recruit?.name }}</p>
                                    </div>

                                    <div v-else class="mt-4 custom-multiselect">
                                        <multiselect
                                            :model-value="props.otherRecruits.find(r => r.value === props.project.recruiter_id)"
                                            :options="props.otherRecruits"
                                            :multiple="false"
                                            track-by="value"
                                            label="name"
                                            @update:modelValue="dispatchActionSingleRecruit"
                                            :placeholder="__('translate.placeholder')"
                                            :selectLabel="__('translate.selectLabel')"
                                            :selectGroupLabel="__('translate.selectGroupLabel')"
                                            :selectedLabel="__('translate.selectedLabel')"
                                            :deselectLabel="__('translate.deselectLabel')"
                                            :noOptions="__('translate.noOptions')"
                                            :noResult="__('translate.noResult')"
                                        >
                                            <template #noResult><span>{{ __('translate.noOptions') }}</span></template>
                                            <template #singleLabel="{ option }">
                                                <div class="flex items-center gap-2">
                                                    <div class="w-6 h-6 bg-gray-200 rounded-lg flex items-center justify-center text-[10px] text-gray-600 font-black">
                                                        {{ option.name?.charAt(0) }}
                                                    </div>
                                                    <span class="text-[10px] font-black uppercase tracking-widest text-[#0A2C5C]">{{ option.name }}</span>
                                                </div>
                                            </template>
                                        </multiselect>
                                    </div>
                                </div>

                                <!-- Pozostali rekruterzy -->
                                <div class="bg-gray-50/50 p-6 rounded-[2rem] border border-gray-100/50">
                                    <h3 class="text-[10px] font-black text-gray-400 uppercase tracking-widest mb-4">{{ __('translate.othersRecruits') }}</h3>
                                    <Info v-if="props.otherRecruits.length" class="mb-4 !bg-blue-50 !border-blue-100 !text-[#0A2C5C] !rounded-xl !text-[10px] !font-bold !uppercase !tracking-widest">
                                        {{ __('translate.othersRecruitsInfo') }}
                                    </Info>
                                    <div class="custom-multiselect">
                                        <multiselect
                                            :modelValue="otherRecruitsList"
                                            :options="filteredOtherRecruits"
                                            :multiple="true"
                                            track-by="value"
                                            label="name"
                                            @update:modelValue="dispatchAction"
                                            :selectLabel="__('translate.selectLabel')"
                                            :selectGroupLabel="__('translate.selectGroupLabel')"
                                            :selectedLabel="__('translate.selectedLabel')"
                                            :deselectLabel="__('translate.deselectLabel')"
                                            :noOptions="__('translate.noOptions')"
                                            :noResult="__('translate.noResult')"
                                            :placeholder="__('translate.placeholder')"
                                        >
                                            <template #noResult><span>{{ __('translate.noOptions') }}</span></template>
                                        </multiselect>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Kategoria -->
                        <div class="bg-white rounded-[3rem] shadow-xl shadow-blue-900/5 border border-gray-100 p-10">
                            <div class="flex items-center gap-4 mb-8">
                                <div class="w-12 h-12 rounded-2xl bg-blue-50 flex items-center justify-center border border-blue-100/50 shadow-sm">
                                    <img class="w-10 h-10" src="/images/icons/recruit/kategoria.svg" :alt="__('translate.altCategory')">
                                </div>
                                <h2 class="text-[10px] font-black text-[#0A2C5C] uppercase tracking-[0.2em]">{{ __('translate.categorySection') }}</h2>
                                <div class="h-px flex-1 bg-gray-100"></div>
                            </div>

                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div class="bg-gray-50/50 p-6 rounded-[2rem] border border-gray-100/50">
                                    <p class="text-[10px] font-black text-gray-400 uppercase tracking-widest mb-2">{{ __('translate.industryLabel') }}</p>
                                    <p class="text-sm font-black text-[#0A2C5C] uppercase tracking-tight">{{ props.project.category?.allTranslations?.title[lang] }}</p>
                                </div>
                                <div class="bg-gray-50/50 p-6 rounded-[2rem] border border-gray-100/50">
                                    <p class="text-[10px] font-black text-gray-400 uppercase tracking-widest mb-2">{{ __('translate.subIndustryLabel') }}</p>
                                    <p class="text-sm font-black text-[#0A2C5C] uppercase tracking-tight">{{ props.project.categorySub?.allTranslations?.title[lang] }}</p>
                                </div>
                                <div class="bg-gray-50/50 p-6 rounded-[2rem] border border-gray-100/50">
                                    <p class="text-[10px] font-black text-gray-400 uppercase tracking-widest mb-2">{{ __('translate.professionLabel') }}</p>
                                    <p class="text-sm font-black text-[#0A2C5C] uppercase tracking-tight">{{ props.project.profession?.allTranslations?.title[lang] }}</p>
                                </div>
                                <div class="bg-gray-50/50 p-6 rounded-[2rem] border border-gray-100/50">
                                    <p class="text-[10px] font-black text-gray-400 uppercase tracking-widest mb-2">{{ __('translate.positionLabel') }}</p>
                                    <p class="text-sm font-black text-[#0A2C5C] uppercase tracking-tight">{{ props.project.position?.allTranslations?.title[lang] }}</p>
                                </div>
                            </div>
                        </div>

                        <!-- Wynagrodzenie -->
                        <div class="bg-white rounded-[3rem] shadow-xl shadow-blue-900/5 border border-gray-100 p-10">
                            <div class="flex items-center gap-4 mb-8">
                                <div class="w-12 h-12 rounded-2xl bg-blue-50 flex items-center justify-center border border-blue-100/50 shadow-sm">
                                    <img class="w-10 h-10" src="/images/icons/recruit/wynagrodzenie.svg" :alt="__('translate.altSalary')">
                                </div>
                                <h2 class="text-[10px] font-black text-[#0A2C5C] uppercase tracking-[0.2em]">{{ __('translate.salarySection') }}</h2>
                                <div class="h-px flex-1 bg-gray-100"></div>
                            </div>

                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div class="bg-gray-50/50 p-6 rounded-[2rem] border border-gray-100/50">
                                    <p class="text-[10px] font-black text-gray-400 uppercase tracking-widest mb-2">{{ __('translate.salaryLabel') }}</p>
                                    <div class="flex items-baseline gap-2">
                                        <span class="text-2xl font-black text-[#0A2C5C] tracking-tight">
                                            {{ props.project.basicSalaryFrom }} - {{ props.project.basicSalaryTo }}
                                        </span>
                                        <span class="text-[10px] font-black text-gray-400 uppercase tracking-widest">{{ props.project.currency?.name }}</span>
                                    </div>
                                </div>

                                <div class="bg-gray-50/50 p-6 rounded-[2rem] border border-gray-100/50">
                                    <p class="text-[10px] font-black text-gray-400 uppercase tracking-widest mb-2">{{ __('translate.payoutModeLabel') }}</p>
                                    <p class="text-sm font-black text-[#0A2C5C] uppercase tracking-tight">{{ props.project.payoutMode?.allTranslations?.name[lang] }}</p>
                                </div>

                                <div class="bg-gray-50/50 p-6 rounded-[2rem] border border-gray-100/50" v-if="props.project.bonusSalaryFrom || props.project.bonusSalaryTo">
                                    <p class="text-[10px] font-black text-gray-400 uppercase tracking-widest mb-2">{{ __('translate.bonusLabel') }}</p>
                                    <p class="text-sm font-black text-[#0A2C5C] uppercase tracking-tight">
                                        {{ props.project.bonusSalaryFrom }} - {{ props.project.bonusSalaryTo }} {{ props.project.currency?.name }}
                                    </p>
                                </div>

                                <div class="bg-gray-50/50 p-6 rounded-[2rem] border border-gray-100/50" v-if="props.project.paySystem && props.project.paySystem.length">
                                    <p class="text-[10px] font-black text-gray-400 uppercase tracking-widest mb-2">{{ __('translate.incomeTypeLabel') }}</p>
                                    <div class="flex flex-wrap gap-2">
                                        <span v-for="(pay, index) in props.project.paySystem" :key="index"
                                              class="px-3 py-1 bg-white rounded-lg text-[10px] font-black text-gray-700 uppercase tracking-widest border border-gray-100">
                                           {{ pay.allTranslations?.name[lang] }}
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Organizacja pracy -->
                        <div class="bg-white rounded-[3rem] shadow-xl shadow-blue-900/5 border border-gray-100 p-10">
                            <div class="flex items-center gap-4 mb-8">
                                <div class="w-12 h-12 rounded-2xl bg-blue-50 flex items-center justify-center border border-blue-100/50 shadow-sm">
                                    <img class="w-10 h-10" src="/images/icons/recruit/organizacja_pracy.svg" :alt="__('translate.altWorkOrganization')">
                                </div>
                                <h2 class="text-[10px] font-black text-[#0A2C5C] uppercase tracking-[0.2em]">{{ __('translate.workOrganization') }}</h2>
                                <div class="h-px flex-1 bg-gray-100"></div>
                            </div>

                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div class="bg-gray-50/50 p-6 rounded-[2rem] border border-gray-100/50">
                                    <p class="text-[10px] font-black text-gray-400 uppercase tracking-widest mb-3">{{ __('translate.workModeLabel') }}</p>
                                    <div class="flex flex-wrap gap-2">
                                        <span v-for="(working, index) in props.project.workingMode" :key="index"
                                              class="px-3 py-1 bg-white rounded-lg text-[10px] font-black text-gray-700 uppercase tracking-widest border border-gray-100">
                                           {{ working.allTranslations?.title[lang] }}
                                        </span>
                                    </div>
                                </div>

                                <div class="bg-gray-50/50 p-6 rounded-[2rem] border border-gray-100/50">
                                    <p class="text-[10px] font-black text-gray-400 uppercase tracking-widest mb-3">{{ __('translate.contractTypeLabel') }}</p>
                                    <div class="flex flex-wrap gap-2">
                                        <span v-for="(type, index) in props.project.typeOfContract" :key="index"
                                              class="px-3 py-1 bg-white rounded-lg text-[10px] font-black text-gray-700 uppercase tracking-widest border border-gray-100">
                                           {{ type.allTranslations?.name[lang] }}
                                        </span>
                                    </div>
                                </div>

                                <div class="bg-gray-50/50 p-6 rounded-[2rem] border border-gray-100/50">
                                    <p class="text-[10px] font-black text-gray-400 uppercase tracking-widest mb-2">{{ __('translate.workScopeLabel') }}</p>
                                    <p class="text-sm font-black text-[#0A2C5C] uppercase tracking-tight">{{ props.project.workLoad?.allTranslations?.name[lang] }}</p>
                                </div>

                                <div class="bg-gray-50/50 p-6 rounded-[2rem] border border-gray-100/50">
                                    <p class="text-[10px] font-black text-gray-400 uppercase tracking-widest mb-2">{{ __('translate.workHoursLabel') }}</p>
                                    <p class="text-sm font-black text-[#0A2C5C] tracking-widest">{{ props.project.hoursFrom }} - {{ props.project.hoursTo }}</p>
                                </div>

                                <div class="bg-gray-50/50 p-6 rounded-[2rem] border border-gray-100/50">
                                    <p class="text-[10px] font-black text-gray-400 uppercase tracking-widest mb-2">{{ __('translate.nightWorkLabel') }}</p>
                                    <p class="text-sm font-black uppercase tracking-tight" :class="props.project.workNight == 2 ? 'text-gray-400' : 'text-[#0A2C5C]'">
                                        {{ props.project.workNight == 2 ? __('translate.no') : __('translate.yes') }}
                                    </p>
                                </div>

                                <div class="bg-gray-50/50 p-6 rounded-[2rem] border border-gray-100/50" v-if="props.project.shift_work">
                                    <p class="text-[10px] font-black text-gray-400 uppercase tracking-widest mb-2">{{ __('translate.shiftWorkLabel') }}</p>
                                    <p class="text-sm font-black text-[#0A2C5C] uppercase tracking-tight">
                                        {{ props.project.shift_work?.name?.[usePage().props.language] }}
                                    </p>
                                </div>
                            </div>

                            <div class="mt-8" v-if="props.project.days && props.project.days.length">
                                <p class="text-[10px] font-black text-gray-400 uppercase tracking-widest mb-4">{{ __('translate.workDaysLabel') }}</p>
                                <div class="flex flex-wrap gap-3">
                                    <span v-for="(day, index) in props.project.days"
                                          :key="index"
                                          class="px-5 py-2.5 bg-gray-50 rounded-2xl text-[10px] font-black text-[#0A2C5C] uppercase tracking-widest border border-gray-100 shadow-sm">
                                        {{ day.allTranslations?.name[lang] }}
                                    </span>
                                </div>
                            </div>
                        </div>

                        <!-- mile widziane -->
                        <div class="bg-white rounded-[3rem] shadow-xl shadow-blue-900/5 border border-gray-100 p-10">
                            <div class="flex items-center gap-4 mb-8">
                                <div class="w-12 h-12 rounded-2xl bg-blue-50 flex items-center justify-center border border-blue-100/50 shadow-sm">
                                    <img class="w-10 h-10" src="/images/icons/recruit/mile_widziane.svg" :alt="__('translate.altWelcomed')">
                                </div>
                                <h2 class="text-[10px] font-black text-[#0A2C5C] uppercase tracking-[0.2em]">{{ __('translate.welcomed') }}</h2>
                                <div class="h-px flex-1 bg-gray-100"></div>
                            </div>

                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div class="bg-gray-50/50 p-6 rounded-[2rem] border border-gray-100/50" v-if="props.project.experience">
                                    <p class="text-[10px] font-black text-gray-400 uppercase tracking-widest mb-2">{{ __('translate.experienceInternational') }}</p>
                                    <p class="text-sm font-black text-[#0A2C5C] uppercase tracking-tight">{{ props.project.experience?.allTranslations?.name[lang] }}</p>
                                </div>

                                <div class="bg-gray-50/50 p-6 rounded-[2rem] border border-gray-100/50" v-if="props.project.education">
                                    <p class="text-[10px] font-black text-gray-400 uppercase tracking-widest mb-2">{{ __('translate.educationLabel') }}</p>
                                    <p class="text-sm font-black text-[#0A2C5C] uppercase tracking-tight">{{ props.project.education?.name?.[lang] || props.project.education?.name }}</p>
                                </div>

                                <div class="bg-gray-50/50 p-6 rounded-[2rem] border border-gray-100/50 col-span-1 md:col-span-2" v-if="props.project.welcome && props.project.welcome.length">
                                    <p class="text-[10px] font-black text-gray-400 uppercase tracking-widest mb-4">{{ __('translate.welcomedLabel') }}</p>
                                    <div class="flex flex-wrap gap-3">
                                        <span v-for="(w, index) in props.project.welcome" :key="index"
                                              class="px-5 py-2.5 bg-white rounded-2xl text-[10px] font-black text-gray-700 uppercase tracking-widest border border-gray-100 shadow-sm">
                                           {{ w.allTranslations?.name[lang] }}
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- oferujemy -->
                        <div class="bg-white rounded-[3rem] shadow-xl shadow-blue-900/5 border border-gray-100 p-10" v-if="props.project.offer && props.project.offer.length">
                            <div class="flex items-center gap-4 mb-8">
                                <div class="w-12 h-12 rounded-2xl bg-blue-50 flex items-center justify-center border border-blue-100/50 shadow-sm">
                                    <img class="w-10 h-10" src="/images/icons/recruit/oferujemy.svg" :alt="__('translate.altWeOffer')">
                                </div>
                                <h2 class="text-[10px] font-black text-[#0A2C5C] uppercase tracking-[0.2em]">{{ __('translate.weOffer') }}</h2>
                                <div class="h-px flex-1 bg-gray-100"></div>
                            </div>

                            <div class="flex flex-wrap gap-3">
                                <span v-for="(off, index) in props.project.offer" :key="index"
                                      class="px-6 py-3 bg-[#00a0e3] text-white rounded-2xl text-[10px] font-black uppercase tracking-widest shadow-lg shadow-blue-400/20 transition-all hover:-translate-y-0.5">
                                    {{ off.allTranslations?.name[lang] }}
                                </span>
                            </div>
                        </div>

                        <!-- oczekujemy -->
                        <div class="bg-white rounded-[3rem] shadow-xl shadow-blue-900/5 border border-gray-100 p-10" v-if="props.project.wait && props.project.wait.length">
                            <div class="flex items-center gap-4 mb-8">
                                <div class="w-12 h-12 rounded-2xl bg-blue-50 flex items-center justify-center border border-blue-100/50 shadow-sm">
                                    <img class="w-10 h-10" src="/images/icons/recruit/oczekujemy.svg" :alt="__('translate.altWeExpect')">
                                </div>
                                <h2 class="text-[10px] font-black text-[#0A2C5C] uppercase tracking-[0.2em]">{{ __('translate.weExpect') }}</h2>
                                <div class="h-px flex-1 bg-gray-100"></div>
                            </div>

                            <div class="flex flex-wrap gap-3">
                                <span v-for="(w, index) in props.project.wait" :key="index"
                                      class="px-6 py-3 bg-white text-gray-700 rounded-2xl text-[10px] font-black uppercase tracking-widest border border-gray-100 shadow-sm transition-all hover:bg-gray-50">
                                    {{ w.allTranslations?.name[lang] }}
                                </span>
                            </div>
                        </div>

                    </div>

                    <!-- Prawa kolumna - mapa i akcje (1/3) -->
                    <div class="space-y-8">
                        <!-- Mapa -->
                        <div class="bg-white rounded-[3rem] shadow-xl shadow-blue-900/5 border border-gray-100 overflow-hidden h-[300px] relative"
                             v-if="hasLocation">
                            <div id="projectMap" class="w-full h-full"></div>
                        </div>

                        <!-- Lokalizacja -->
                        <div class="bg-white rounded-[3rem] shadow-xl shadow-blue-900/5 border border-gray-100 p-8">
                            <div class="flex items-center gap-4 mb-6">
                                <div class="w-12 h-12 rounded-2xl bg-blue-50 flex items-center justify-center border border-blue-100/50 shadow-sm">
                                    <img class="w-10 h-10" src="/images/icons/recruit/lokalizacja.svg" :alt="__('translate.altLocation')">
                                </div>
                                <h2 class="text-[10px] font-black text-[#0A2C5C] uppercase tracking-[0.2em]">{{ __('translate.locationLabel') }}</h2>
                            </div>

                            <div class="space-y-6">
                                <div class="flex items-start gap-4">
                                    <div class="w-8 h-8 rounded-xl bg-gray-50 flex items-center justify-center shrink-0">
                                        <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/></svg>
                                    </div>
                                    <div>
                                        <p class="text-sm font-black text-gray-900 uppercase tracking-tight">{{ props.project.cityWork }}</p>
                                        <p class="text-[10px] font-bold text-gray-400 uppercase tracking-widest mt-1">
                                            {{ props.project.countryWork?.allTranslations?.[lang] || props.project.countryWork?.name || props.project.countryWork }}
                                        </p>
                                    </div>
                                </div>

                                <div class="flex items-start gap-4" v-if="props.project.streetWork">
                                    <div class="w-8 h-8 rounded-xl bg-gray-50 flex items-center justify-center shrink-0">
                                        <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/></svg>
                                    </div>
                                    <div>
                                        <p class="text-sm font-black text-gray-900 uppercase tracking-tight">
                                            {{ props.project.streetWork }} {{ props.project.streetWorkNumber }}
                                        </p>
                                        <p class="text-[10px] font-bold text-gray-400 uppercase tracking-widest mt-1" v-if="props.project.postalWork">{{ props.project.postalWork }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Kraje publikacji -->
                        <div class="bg-white rounded-[3rem] shadow-xl shadow-blue-900/5 border border-gray-100 p-8" v-if="props.project.country && props.project.country.length">
                            <div class="flex items-center gap-4 mb-6">
                                <div class="w-12 h-12 rounded-2xl bg-blue-50 flex items-center justify-center border border-blue-100/50 shadow-sm">
                                    <img class="w-10 h-10" src="/images/icons/recruit/kraj_publikacji.svg" :alt="__('translate.altPublicationCountry')">
                                </div>
                                <h2 class="text-[10px] font-black text-[#0A2C5C] uppercase tracking-[0.2em]">{{ __('translate.publicationCountry') }}</h2>
                            </div>
                            <div class="flex flex-wrap gap-3">
                                <span v-for="(country, index) in props.project.country" :key="index"
                                      class="px-4 py-2 bg-gray-50 rounded-xl text-[10px] font-black text-gray-700 uppercase tracking-widest border border-gray-100 shadow-sm">
                                    {{ country.allTranslations?.[lang] || country.name }}
                                </span>
                            </div>
                        </div>

                        <!-- Miejsce pracy -->
                        <div class="bg-white rounded-[3rem] shadow-xl shadow-blue-900/5 border border-gray-100 p-8" v-if="props.project.workingPlace">
                            <div class="flex items-center gap-4 mb-6">
                                <div class="w-12 h-12 rounded-2xl bg-blue-50 flex items-center justify-center border border-blue-100/50 shadow-sm">
                                    <img class="w-10 h-10" src="/images/icons/recruit/miejsce_pracy.svg" :alt="__('translate.altWorkplace')">
                                </div>
                                <h2 class="text-[10px] font-black text-[#0A2C5C] uppercase tracking-[0.2em]">{{ __('translate.workplaceLabel') }}</h2>
                            </div>
                            <p class="text-sm font-black text-[#0A2C5C] uppercase tracking-tight">
                                {{ props.project.workingPlace?.allTranslations?.name[lang] }}
                            </p>
                        </div>

                        <!-- Firma zewnętrzna -->
                        <div class="bg-white rounded-[3rem] shadow-xl shadow-blue-900/5 border border-gray-100 p-8" v-if="props.project.externalCompany">
                            <div class="flex items-center gap-4 mb-6">
                                <div class="w-12 h-12 rounded-2xl bg-blue-50 flex items-center justify-center border border-blue-100/50 shadow-sm">
                                    <img class="w-10 h-10" src="/images/icons/recruit/firma_zewnetrzna.svg" :alt="__('translate.altExternalCompany')">
                                </div>
                                <h2 class="text-[10px] font-black text-[#0A2C5C] uppercase tracking-[0.2em]">{{ __('translate.externalCompanyLabel') }}</h2>
                            </div>
                            <div class="flex items-center gap-4">
                                <div class="w-12 h-12 rounded-2xl bg-gray-50 border border-gray-100 flex items-center justify-center text-[#0A2C5C] font-black uppercase text-xs">
                                    {{ props.project.externalCompany.abbreviation }}
                                </div>
                                <p class="text-sm font-black text-gray-900 uppercase tracking-tight">
                                    {{ props.project.externalCompany.name }}
                                </p>
                            </div>
                        </div>

                        <!-- Przyciski akcji -->
                        <div class="flex flex-col gap-4">
                            <Link
                                :href="route('projects.edit', props.project)"
                                class="w-full inline-flex items-center justify-center gap-3 rounded-2xl bg-[#0A2C5C] px-8 py-5 text-xs font-black uppercase tracking-widest text-white shadow-lg shadow-blue-900/20 hover:bg-blue-800 transition-all hover:-translate-y-0.5"
                            >
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" /></svg>
                                {{ __('translate.editButton') }}
                            </Link>

                            <button
                                @click="openModal(props.project)"
                                class="w-full inline-flex items-center justify-center gap-3 rounded-2xl bg-red-600 px-8 py-5 text-xs font-black uppercase tracking-widest text-white shadow-lg shadow-red-900/20 hover:bg-red-700 transition-all hover:-translate-y-0.5"
                            >
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-4v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" /></svg>
                                {{ __('translate.deleteButton') }}
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Modal usuwania -->
                <DialogModal :show="confirmCancelProject" @close="confirmCancelProject = false">
                    <template #title>
                        <span class="text-sm font-black text-[#0A2C5C] uppercase tracking-[0.2em]">
                            {{ __('translate.questionDelete') }} - {{ __('translate.project').toLowerCase() }} #{{ selectedProject && selectedProject.id }}
                        </span>
                    </template>
                    <template #content>
                        <p class="text-xs font-bold text-gray-500 uppercase tracking-widest leading-relaxed">
                            {{ __('translate.questionDeleteConfirm') }} - {{ __('translate.project').toLowerCase() }} #{{ selectedProject && selectedProject.id }}
                        </p>
                    </template>
                    <template #footer>
                        <div class="flex gap-3">
                            <SecondaryButton @click.native="confirmCancelProject = false" class="!rounded-xl !text-[10px] !font-black !uppercase !tracking-widest">
                                {{ __('translate.cancel') }}
                            </SecondaryButton>
                            <DangerButton @click.native="DeleteProject" class="!rounded-xl !text-[10px] !font-black !uppercase !tracking-widest">
                                {{ __('translate.delete') }}
                            </DangerButton>
                        </div>
                    </template>
                </DialogModal>
            </div>
        </div>
    </AppLayout>
</template>

<style src="vue-multiselect/dist/vue-multiselect.css"></style>
<style lang="scss">
.custom-multiselect {
    .multiselect__tags {
        border: 1px solid #f3f4f6; /* border-gray-100 */
        border-radius: 1rem; /* rounded-2xl approximation for multiselect */
        padding: 0.75rem 2.5rem 0.75rem 1.25rem;
        background: #f9fafb; /* bg-gray-50 */
        transition: all 0.3s ease;
    }

    .multiselect__placeholder {
        margin-bottom: 0;
        padding-top: 0;
        color: #9ca3af; /* text-gray-400 */
        font-size: 0.75rem; /* text-xs */
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 0.1em;
    }

    .multiselect__single {
        margin-bottom: 0;
        padding-left: 0;
        font-size: 0.75rem;
        background: transparent;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 0.1em;
    }

    .multiselect__input {
        margin-bottom: 0;
        background: transparent;
        font-size: 0.75rem;
        font-weight: 700;
    }

    .multiselect__select {
        height: 100%;
        width: 2.5rem;
    }

    .multiselect__option--highlight {
        background: #0A2C5C !important;
        outline: none;
        color: white;
        font-size: 0.75rem;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 0.1em;
    }

    .multiselect__option--selected {
        background: #f3f4f6 !important;
        color: #0A2C5C;
        font-weight: 900;
    }

    .multiselect__content-wrapper {
        border: 1px solid #f3f4f6;
        border-top: none;
        border-bottom-left-radius: 1rem;
        border-bottom-right-radius: 1rem;
        box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1);
    }

    .multiselect__tag {
        background: #00a0e3 !important;
        border-radius: 0.75rem;
        font-size: 10px;
        font-weight: 900;
        text-transform: uppercase;
        letter-spacing: 0.1em;
    }

    .multiselect__tag-icon:after {
        color: white !important;
    }

    .multiselect__tag-icon:hover {
        background: #0088c2 !important;
    }
    .multiselect__tag-icon{
        top:-3px !important
    }
}
</style>
