<script setup>
import Pagination from '@/Components/Pagination.vue';
import FrontLayout from "@/Layouts/FrontLayout.vue";
import {usePage, Link, router} from '@inertiajs/vue3';
import { useProjectHelpers } from "@/Composables/useProjectHelpers.js";
import Multiselect from "vue-multiselect";
import InputError from "@/Components/InputError.vue";
import { useForm } from '@inertiajs/vue3';
import {ref, watch, computed, onMounted} from "vue";
import moment from "moment";
import __ from "@/lang.js";

const props = defineProps({
    projects: Object,
    countries: Array,
    workingModes: Array,
    experiences: Array,
    typesOfContract: Array,
    workLoads: Array,
    countryFront: Object,
    categoryFront: Object,
    cityFront: Object,
    page: Object,
    distanceOptions: Array,
    distanceFront: Object,
});

const page = usePage();
const { getPositionTitle } = useProjectHelpers();


const showFilters = ref(false);
const optionsCities = ref([]);
const optionsCategories = ref([]);
const optionsCategorySub = ref([]);
const optionsProfession = ref([]);
const optionsPosition = ref([]);

const form = useForm({
    country: props.countryFront ?? undefined,
    city: props.cityFront ?? undefined,
    category: props.categoryFront ?? undefined,
    categorySub: undefined,
    profession: undefined,
    position: undefined,
    workingMode: undefined,
    experience: undefined,
    typeOfContract: undefined,
    workLoad: undefined,
    distance: props.distanceFront ?? undefined,
    lat: props.cityFront?.lat ?? undefined,
    lng: props.cityFront?.lng ?? undefined,
});

watch(() => props.cityFront, (newCity) => {
    if (newCity) {
        form.city = newCity;
        form.lat = newCity.lat;
        form.lng = newCity.lng;
    }
}, { deep: true });

watch(() => props.distanceFront, (newDistance) => {
    if (newDistance) {
        form.distance = newDistance;
    }
});

onMounted(async () => {
    if (props.countryFront) {
        try {
            // --- miasta ---
            const responseCities = await fetch(route("cities.byCountry", props.countryFront.countryCode));
            const citiesData = await responseCities.json();
            optionsCities.value = citiesData;

            if (props.cityFront) {
                form.city = props.cityFront;
            }
        } catch (e) {
            console.error(__('translate.errorLoadingCities'), e);
        }

        try {
            // --- kategorie ---
            const responseCategories = await fetch(route("categories.byCountry", props.countryFront.countryCode));
            const categoriesData = await responseCategories.json();
            optionsCategories.value = categoriesData;

            if (props.categoryFront) {
                form.category = props.categoryFront;
            }
        } catch (e) {
            console.error(__('translate.errorLoadingCategories'), e);
        }
    }
});


// Obsługa zmiany kraju
watch(() => form.country, async (newCountry) => {
    if (!newCountry || !newCountry.countryCode) {
        optionsCities.value = [];
        optionsCategories.value = [];
        optionsCategorySub.value = [];
        optionsProfession.value = [];
        optionsPosition.value = [];
        form.city = null;
        form.category = null;
        form.categorySub = null;
        form.profession = null;
        form.position = null;
        form.distance = null;
        return;
    }

    try {
        const response = await fetch(route("cities.byCountry", newCountry.countryCode));
        const data = await response.json();
        optionsCities.value = data;
        form.city = null;
    } catch (e) {
        console.error(__('translate.errorLoadingCities'), e);
    }

    try {
        const responseCategories = await fetch(route("categories.byCountry", newCountry.countryCode));
        const categoriesData = await responseCategories.json();
        optionsCategories.value = categoriesData;
        form.category = null;
    } catch (e) {
        console.error(__('translate.errorLoadingCategories'), e);
    }
});

// Obsługa zmiany kategorii
watch(() => form.category, async (newCategory) => {
    if (!newCategory) {
        optionsCategorySub.value = [];
        optionsProfession.value = [];
        optionsPosition.value = [];
        form.categorySub = null;
        form.profession = null;
        form.position = null;
        return;
    }

    try {
        const response = await fetch(route("category.sub", newCategory.value));
        const data = await response.json();
        optionsCategorySub.value = data;
        form.categorySub = null;
    } catch (e) {
        console.error(__('translate.errorLoadingSubcategories'), e);
    }
});

// Obsługa zmiany podkategorii
watch(() => form.categorySub, async (newCategorySub) => {
    if (!newCategorySub) {
        optionsProfession.value = [];
        optionsPosition.value = [];
        form.profession = null;
        form.position = null;
        return;
    }

    try {
        const response = await fetch(route("category.professions", newCategorySub.value));
        const data = await response.json();
        optionsProfession.value = data;
        form.profession = null;
    } catch (e) {
        console.error(__('translate.errorLoadingProfessions'), e);
    }
});

// Obsługa zmiany zawodu
watch(() => form.profession, async (newProfession) => {
    if (!newProfession) {
        optionsPosition.value = [];
        form.position = null;
        return;
    }

    try {
        const response = await fetch(route("category.positions", newProfession.value));
        const data = await response.json();
        optionsPosition.value = data;
        form.position = null;
    } catch (e) {
        console.error(__('translate.errorLoadingPositions'), e);
    }
});

// Obsługa zmiany miasta
watch(() => form.city, (newCity) => {
    if (!newCity) {
        form.distance = null;
        form.lat = null;
        form.lng = null;
    } else {
        form.lat = newCity.lat;
        form.lng = newCity.lng;
    }
});

const toggleFilters = () => {
    showFilters.value = !showFilters.value;
};

const isFilterActive = computed(() => {
    return !!(form.country || form.city || form.category || form.categorySub || form.profession || form.position || form.workingMode || form.experience || form.typeOfContract || form.workLoad || (form.distance && form.distance.value));
});


import { pickBy } from 'lodash';

const submit = () => {
    const transformedData = {
        country: form.country?.value ?? null,
        city: form.city?.value ?? null,
        category: form.category?.value ?? null,
        categorySub: form.categorySub?.value ?? null,
        profession: form.profession?.value ?? null,
        position: form.position?.value ?? null,
        workingMode: form.workingMode?.value ?? null,
        experience: form.experience?.value ?? null,
        typeOfContract: form.typeOfContract?.value ?? null,
        workLoad: form.workLoad?.value ?? null,
        distance: (form.distance?.value !== undefined && form.distance?.value !== null) ? form.distance.value : null,
    };

    const filteredData = pickBy(transformedData, (value) => value !== null && value !== undefined && value !== '');

    router.get(route('front.projects'),filteredData, {
        preserveState: true,
        replace: true,
        preserveScroll: true,
        onStart: () => {
            isSearching.value = true;
        },
        onFinish: () => {
            isSearching.value = false;
        },
    });
};

const isSearching = ref(false);

</script>
<template>
    <FrontLayout
        :title="props.page.title"
        :image="props.page.image"
        :keywords="props.page.keywords"
        :description="props.page.description"
        :url="route('front.projects')"
        type="website"
    >
        <div class="py-12 bg-gray-50/50 min-h-screen">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-8">
                <!-- Formularz wyszukiwania -->
                <div class="bg-white rounded-[3rem] shadow-xl shadow-blue-900/5 border border-gray-100 p-10">
                    <form @submit.prevent="submit" class="w-full">
                        <div class="flex items-center justify-between mb-8">
                            <div class="flex items-center gap-4 flex-1">
                                <h3 class="text-[10px] font-black text-[#0A2C5C] uppercase tracking-[0.2em]">{{ __('translate.filter') }}</h3>
                                <div class="h-px flex-1 bg-gray-100"></div>
                            </div>
                            <div class="flex flex-col sm:flex-row gap-3 items-end md:items-center ml-4">
                                <div class="flex gap-3 items-center">
                                    <button
                                        type="button"
                                        @click="toggleFilters"
                                        class="px-6 py-3 bg-white border border-gray-100 text-gray-500 text-[10px] font-black uppercase tracking-widest rounded-2xl hover:bg-gray-50 shadow-sm transition-all hover:-translate-y-0.5"
                                    >
                                        {{ __('translate.filters') }}
                                    </button>
                                    <button
                                        type="submit"
                                        class="px-8 py-3 bg-[#0A2C5C] text-white text-[10px] font-black rounded-2xl uppercase tracking-widest shadow-lg shadow-blue-900/20 hover:bg-blue-800 transition-all hover:-translate-y-0.5 flex items-center gap-2"
                                        :disabled="isSearching"
                                    >
                                        <template v-if="isSearching">
                                            <div class="w-3 h-3 border-2 border-white border-t-transparent rounded-full animate-spin"></div>
                                            {{ __('translate.searching') }}
                                        </template>
                                        <template v-else>
                                            {{ __('translate.search') }}
                                        </template>
                                    </button>
                                </div>
                                <Link v-if="isFilterActive"
                                      :href="route('front.projects')"
                                      class="text-[10px] font-black text-red-500 hover:underline uppercase tracking-widest sm:ml-2">
                                    {{__('translate.resetFilters')}}
                                </Link>
                            </div>
                        </div>

                        <!-- Panel filtrów -->
                        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mb-6" :class="{'lg:grid-cols-4': form.city}">
                            <!-- Select Country -->
                            <div class="space-y-2">
                                <label class="block text-[10px] font-black text-gray-400 mb-2 uppercase tracking-widest">{{ __('translate.placeholderCountry') }}</label>
                                <Multiselect
                                    v-model="form.country"
                                    :options="props.countries"
                                    group-values="elements"
                                    group-label="group"
                                    :group-select="false"
                                    track-by="value"
                                    label="name"
                                    :selectLabel="''"
                                    :selectGroupLabel="''"
                                    :selectedLabel="''"
                                    :deselectLabel="''"
                                    :noOptions="__('translate.noOptions')"
                                    :noResult="__('translate.noResult')"
                                    :placeholder="__('translate.placeholderCountry')"
                                    class="custom-multiselect"
                                >
                                    <template #noResult>
                                        <span>{{__('translate.noResult')}}</span>
                                    </template>
                                    <template #noOptions>
                                        <span>{{__('translate.noOptions')}}</span>
                                    </template>
                                </Multiselect>
                                <InputError :message="form.errors.country" class="mt-2"/>
                            </div>

                            <!-- Select City -->
                            <div class="space-y-2">
                                <label class="block text-[10px] font-black text-gray-400 mb-2 uppercase tracking-widest">{{ __('translate.placeholderCity') }}</label>
                                <Multiselect
                                    v-model="form.city"
                                    :options="optionsCities"
                                    :disabled="!form.country"
                                    track-by="value"
                                    label="name"
                                    :selectLabel="''"
                                    :deselectLabel="''"
                                    :selectedLabel="''"
                                    :noOptions="__('translate.noOptions')"
                                    :noResult="__('translate.noResult')"
                                    :placeholder="__('translate.placeholderCity')"
                                    class="custom-multiselect"
                                >
                                    <template #noResult>
                                        <span>{{__('translate.noResult')}}</span>
                                    </template>
                                    <template #noOptions>
                                        <span>{{__('translate.noOptions')}}</span>
                                    </template>
                                </Multiselect>
                                <InputError :message="form.errors.city" class="mt-2"/>
                            </div>

                            <!-- Select Distance -->
                            <transition
                                enter-active-class="transition-all duration-500 ease-out"
                                enter-from-class="transform scale-90 opacity-0 -translate-x-4"
                                enter-to-class="transform scale-100 opacity-100 translate-x-0"
                                leave-active-class="transition-all duration-300 ease-in"
                                leave-from-class="transform scale-100 opacity-100 translate-x-0"
                                leave-to-class="transform scale-90 opacity-0 -translate-x-4"
                            >
                                <div v-if="form.city" class="space-y-2">
                                    <label class="block text-[10px] font-black text-gray-400 mb-2 uppercase tracking-widest">{{ __('translate.distance') }}</label>
                                    <Multiselect
                                        v-model="form.distance"
                                        :options="props.distanceOptions"
                                        :disabled="!form.city"
                                        track-by="value"
                                        label="name"
                                        :selectLabel="''"
                                        :deselectLabel="''"
                                        :selectedLabel="''"
                                        :noOptions="__('translate.noOptions')"
                                        :noResult="__('translate.noResult')"
                                        :placeholder="__('translate.placeholderDistance')"
                                        class="custom-multiselect"
                                    >
                                        <template #noResult>
                                            <span>{{__('translate.noResult')}}</span>
                                        </template>
                                        <template #noOptions>
                                            <span>{{__('translate.noOptions')}}</span>
                                        </template>
                                    </Multiselect>
                                    <InputError :message="form.errors.distance" class="mt-2"/>
                                </div>
                            </transition>

                            <!-- Select Category -->
                            <div class="space-y-2">
                                <label class="block text-[10px] font-black text-gray-400 mb-2 uppercase tracking-widest">{{ __('translate.placeholderCategory') }}</label>
                                <Multiselect
                                    v-model="form.category"
                                    :options="optionsCategories"
                                    :disabled="!form.country"
                                    track-by="value"
                                    label="name"
                                    :selectLabel="''"
                                    :deselectLabel="''"
                                    :selectedLabel="''"
                                    :placeholder="__('translate.placeholderCategory')"
                                    class="custom-multiselect"
                                >
                                    <template #noResult>
                                        <span>{{__('translate.noResult')}}</span>
                                    </template>
                                    <template #noOptions>
                                        <span>{{__('translate.noOptions')}}</span>
                                    </template>
                                </Multiselect>
                                <InputError :message="form.errors.category" class="mt-2"/>
                            </div>
                        </div>

                        <div v-show="showFilters" class="space-y-6 pt-6 border-t border-gray-50 mb-6">
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <!-- Select CategorySub -->
                                <div class="space-y-2">
                                    <label class="block text-[10px] font-black text-gray-400 mb-2 uppercase tracking-widest">{{ __('translate.placeholderCategorySub') }}</label>
                                    <Multiselect
                                        v-model="form.categorySub"
                                        :options="optionsCategorySub"
                                        :disabled="!form.category"
                                        track-by="value"
                                        label="name"
                                        :selectLabel="''"
                                        :deselectLabel="''"
                                        :selectedLabel="''"
                                        :placeholder="__('translate.placeholderCategorySub')"
                                        class="custom-multiselect"
                                    >
                                        <template #noResult>
                                            <span>{{__('translate.noResult')}}</span>
                                        </template>
                                        <template #noOptions>
                                            <span>{{__('translate.noOptions')}}</span>
                                        </template>
                                    </Multiselect>
                                    <InputError :message="form.errors.categorySub" class="mt-2"/>
                                </div>

                                <!-- Select Profession -->
                                <div class="space-y-2">
                                    <label class="block text-[10px] font-black text-gray-400 mb-2 uppercase tracking-widest">{{ __('translate.placeholderProfession') }}</label>
                                    <Multiselect
                                        v-model="form.profession"
                                        :options="optionsProfession"
                                        :disabled="!form.categorySub"
                                        track-by="value"
                                        label="name"
                                        :selectLabel="''"
                                        :deselectLabel="''"
                                        :selectedLabel="''"
                                        :placeholder="__('translate.placeholderProfession')"
                                        class="custom-multiselect"
                                    >
                                        <template #noResult>
                                            <span>{{__('translate.noResult')}}</span>
                                        </template>
                                        <template #noOptions>
                                            <span>{{__('translate.noOptions')}}</span>
                                        </template>
                                    </Multiselect>
                                    <InputError :message="form.errors.profession" class="mt-2"/>
                                </div>

                                <!-- Select Position -->
                                <div class="space-y-2">
                                    <label class="block text-[10px] font-black text-gray-400 mb-2 uppercase tracking-widest">{{ __('translate.placeholderPosition') }}</label>
                                    <Multiselect
                                        v-model="form.position"
                                        :options="optionsPosition"
                                        :disabled="!form.profession"
                                        track-by="value"
                                        label="name"
                                        :selectLabel="''"
                                        :deselectLabel="''"
                                        :selectedLabel="''"
                                        :placeholder="__('translate.placeholderPosition')"
                                        class="custom-multiselect"
                                    >
                                        <template #noResult>
                                            <span>{{__('translate.noResult')}}</span>
                                        </template>
                                        <template #noOptions>
                                            <span>{{__('translate.noOptions')}}</span>
                                        </template>
                                    </Multiselect>
                                    <InputError :message="form.errors.position" class="mt-2"/>
                                </div>

                                <!-- Select Working Mode -->
                                <div class="space-y-2">
                                    <label class="block text-[10px] font-black text-gray-400 mb-2 uppercase tracking-widest">{{ __('translate.placeholderWorkingMode') }}</label>
                                    <Multiselect
                                        v-model="form.workingMode"
                                        :options="props.workingModes"
                                        track-by="value"
                                        label="name"
                                        :selectLabel="''"
                                        :deselectLabel="''"
                                        :selectedLabel="''"
                                        :placeholder="__('translate.placeholderWorkingMode')"
                                        class="custom-multiselect"
                                    >
                                        <template #noResult>
                                            <span>{{__('translate.noResult')}}</span>
                                        </template>
                                        <template #noOptions>
                                            <span>{{__('translate.noOptions')}}</span>
                                        </template>
                                    </Multiselect>
                                    <InputError :message="form.errors.workingMode" class="mt-2"/>
                                </div>
                            </div>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <!-- Select Experience -->
                                <div class="space-y-2">
                                    <label class="block text-[10px] font-black text-gray-400 mb-2 uppercase tracking-widest">{{ __('translate.placeholderExperience') }}</label>
                                    <Multiselect
                                        v-model="form.experience"
                                        :options="props.experiences"
                                        track-by="value"
                                        label="name"
                                        :selectLabel="''"
                                        :deselectLabel="''"
                                        :selectedLabel="''"
                                        :placeholder="__('translate.placeholderExperience')"
                                        class="custom-multiselect"
                                    >
                                        <template #noResult>
                                            <span>{{__('translate.noResult')}}</span>
                                        </template>
                                        <template #noOptions>
                                            <span>{{__('translate.noOptions')}}</span>
                                        </template>
                                    </Multiselect>
                                    <InputError :message="form.errors.experience" class="mt-2"/>
                                </div>

                                <!-- Select Type of Contract -->
                                <div class="space-y-2">
                                    <label class="block text-[10px] font-black text-gray-400 mb-2 uppercase tracking-widest">{{ __('translate.placeholderTypeOfContract') }}</label>
                                    <Multiselect
                                        v-model="form.typeOfContract"
                                        :options="props.typesOfContract"
                                        track-by="value"
                                        label="name"
                                        :selectLabel="''"
                                        :deselectLabel="''"
                                        :selectedLabel="''"
                                        :placeholder="__('translate.placeholderTypeOfContract')"
                                        class="custom-multiselect"
                                    >
                                        <template #noResult>
                                            <span>{{__('translate.noResult')}}</span>
                                        </template>
                                        <template #noOptions>
                                            <span>{{__('translate.noOptions')}}</span>
                                        </template>
                                    </Multiselect>
                                    <InputError :message="form.errors.typeOfContract" class="mt-2"/>
                                </div>

                                <!-- Select Work Load -->
                                <div class="space-y-2 lg:col-span-3">
                                    <label class="block text-[10px] font-black text-gray-400 mb-2 uppercase tracking-widest">{{ __('translate.placeholderWorkLoad') }}</label>
                                    <Multiselect
                                        v-model="form.workLoad"
                                        :options="props.workLoads"
                                        track-by="value"
                                        label="name"
                                        :selectLabel="''"
                                        :deselectLabel="''"
                                        :selectedLabel="''"
                                        :placeholder="__('translate.placeholderWorkLoad')"
                                        class="custom-multiselect"
                                    >
                                        <template #noResult>
                                            <span>{{__('translate.noResult')}}</span>
                                        </template>
                                        <template #noOptions>
                                            <span>{{__('translate.noOptions')}}</span>
                                        </template>
                                    </Multiselect>
                                    <InputError :message="form.errors.workLoad" class="mt-2"/>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>

                <div class="space-y-4 relative">
                    <!-- Overlay loading spinner -->
                    <div v-if="isSearching" class="absolute inset-0 z-50 flex items-center justify-center bg-white/50 backdrop-blur-[2px] rounded-[3rem]">
                        <div class="flex flex-col items-center gap-4">
                            <div class="w-12 h-12 border-4 border-[#0A2C5C] border-t-transparent rounded-full animate-spin"></div>
                            <span class="text-[10px] font-black text-[#0A2C5C] uppercase tracking-widest animate-pulse">{{ __('translate.searching') }}</span>
                        </div>
                    </div>

                    <div v-if="props.projects.total" class="space-y-4">
                        <div v-for="(project) in props.projects.data" :key="project.id"
                             class="group bg-white rounded-[2.5rem] border transition-all duration-300 hover:-translate-y-1 p-6 relative overflow-hidden"
                             :class="{
                                 'border-[#329CD1]/50 ring-2 ring-[#329CD1]/20 bg-gradient-to-br from-blue-50/10 to-transparent shadow-xl shadow-[#329CD1]/10': project.is_featured,
                                 'border-gray-200 shadow-sm hover:shadow-xl hover:shadow-blue-900/5': !project.is_featured
                             }"
                        >
                            <!-- Featured Indicator (Blue) -->
                            <div v-if="project.is_featured" class="absolute top-0 right-0 h-24 w-24 overflow-hidden pointer-events-none z-0">
                                <div class="absolute top-0 right-0 w-[150%] h-8 bg-[#329CD1] border-b border-[#329CD1]/50 rotate-45 translate-x-[30%] translate-y-[50%] shadow-lg shadow-blue-400/20 animate-shimmer bg-gradient-to-r from-transparent via-white/20 to-transparent bg-[length:200%_auto] flex items-center justify-center">
                                    <svg class="w-4 h-4 text-white drop-shadow-sm animate-pulse" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z" />
                                    </svg>
                                </div>
                            </div>

                            <!-- Left Accent Bar for Featured -->
                            <div v-if="project.is_featured" class="absolute left-0 top-0 bottom-0 w-1.5 bg-[#329CD1] rounded-r-full shadow-[2px_0_10px_rgba(50,156,209,0.3)]"></div>
                            <Link :href="route('front.projects.single', project)" class="block">
                                <div class="flex flex-col md:flex-row md:items-center justify-between mb-6 gap-4">
                                    <div class="flex flex-col md:flex-row md:items-center gap-2 md:gap-4">
                                        <div class="flex items-center gap-4">
                                            <span class="px-3 py-1 bg-blue-50 text-blue-500 font-black text-[10px] uppercase tracking-widest rounded-lg border border-blue-100/50">
                                                ID {{ project.id }}
                                            </span>
                                            <div class="h-4 w-px bg-gray-200 hidden md:block"></div>
                                        </div>
                                        <h4 class="text-lg font-black text-gray-900 uppercase tracking-tight leading-tight group-hover:text-[#0A2C5C] transition-colors">
                                            {{ getPositionTitle(project) }}
                                        </h4>
                                    </div>
                                        <div class="flex flex-col items-end gap-1 relative z-1" :class="{'-left-10' : project.is_featured}">
                                            <div class="flex items-center gap-2">
                                                <svg class="w-3.5 h-3.5 text-gray-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                                                <span class="text-[10px] font-bold text-gray-400 uppercase tracking-widest">
                                                    {{ moment(project.created_at).format('DD.MM.YYYY') }}
                                                </span>
                                            </div>
                                        </div>
                                </div>

                                <div class="flex flex-col md:flex-row md:items-center justify-between gap-6">
                                    <div class="flex items-start gap-4">
                                        <div class="relative shrink-0">
                                            <div
                                                class="w-20 h-20 rounded-[1.5rem] bg-gray-50 shadow-inner border border-gray-100 relative z-10"
                                                :class="{ 'ring-2 ring-[#329CD1]/50 shadow-lg shadow-[#329CD1]/10': project.is_featured }"
                                                :style="{
                                                    backgroundImage: `url('${project.user?.profile_photo_url || '/default-company-logo.png'}')`,
                                                    backgroundPosition: 'center',
                                                    backgroundRepeat: 'no-repeat',
                                                    backgroundSize: 'cover'
                                                }"
                                            ></div>
                                            <div v-if="project.is_featured" class="absolute -bottom-6 -left-5 z-20 transform hover:scale-110 transition-transform duration-300">
                                                <img src="/images/icons/prefer-icon.png" alt="TOP" class="w-12 h-12 drop-shadow-lg" />
                                            </div>
                                        </div>
                                        <div>
                                            <p class="text-xs font-black text-gray-700 uppercase tracking-widest mb-1">{{ project.user?.name }}</p>
                                            <p class="text-[10px] font-bold text-gray-400 uppercase tracking-widest mb-3">
                                                {{ project.category.allTranslations.title[usePage().props.language] }}
                                            </p>
                                            <div class="flex items-center gap-3">
                                                <div class="w-6 h-6 rounded-lg bg-gray-50 flex items-center justify-center text-gray-400">
                                                    <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                                                </div>
                                                <p class="text-[10px] font-black text-gray-500 uppercase tracking-widest">
                                                    {{ project.cityWork }}, {{ project.country[0]?.allTranslations[usePage().props.language] }}
                                                </p>
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
                                        <div class="w-10 h-10 rounded-2xl bg-gray-50 flex items-center justify-center group-hover:text-white transition-all duration-300 border border-gray-100 group-hover:border-transparent group-hover:shadow-lg group-hover:shadow-blue-900/20"
                                             :class="project.is_featured ? 'group-hover:bg-[#329CD1]' : 'group-hover:bg-[#0A2C5C]'">
                                            <svg class="w-5 h-5 transition-transform duration-300 group-hover:translate-x-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M14 5l7 7m0 0l-7 7m7-7H3" /></svg>
                                        </div>
                                    </div>
                                </div>
                            </Link>
                        </div>
                    </div>
                    <div v-else class="bg-white rounded-[3rem] p-20 text-center shadow-xl shadow-blue-900/5 border border-gray-100">
                        <div class="w-20 h-20 bg-gray-50 rounded-full flex items-center justify-center mx-auto mb-6">
                            <svg class="w-10 h-10 text-gray-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                            </svg>
                        </div>
                        <p class="text-xs font-black text-gray-400 uppercase tracking-widest">{{ __('translate.noResults') }}</p>
                    </div>
                    <Pagination v-if="props.projects.total > 5" class="mt-12" :links="props.projects.links" />
                </div>
            </div>
        </div>
    </FrontLayout>
</template>
<style src="vue-multiselect/dist/vue-multiselect.css"></style>
<style>
@keyframes shimmer {
    0% { background-position: -200% 0; }
    100% { background-position: 200% 0; }
}
.animate-shimmer {
    animation: shimmer 3s infinite linear;
}
</style>
