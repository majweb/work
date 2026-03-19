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

const toggleFilters = () => {
    showFilters.value = !showFilters.value;
};

const isFilterActive = computed(() => {
    return Object.values(form).some(value => value !== undefined && value !== null);
});


import { pickBy } from 'lodash';

const submit = () => {
    const transformedData = {
        country: form.country?.value || null,
        city: form.city?.value || null,
        category: form.category?.value || null,
        categorySub: form.categorySub?.value || null,
        profession: form.profession?.value || null,
        position: form.position?.value || null,
        workingMode: form.workingMode?.value || null,
        experience: form.experience?.value || null,
        typeOfContract: form.typeOfContract?.value || null,
        workLoad: form.workLoad?.value || null
    };

    const filteredData = pickBy(transformedData);

    router.get(route('front.projects'),filteredData, {
        preserveState: true,
        replace: true,
        preserveScroll: true,
    });
};

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
                            <div class="flex gap-3 items-center ml-4">
                                <button
                                    type="button"
                                    @click="toggleFilters"
                                    class="px-6 py-3 bg-white border border-gray-100 text-gray-500 text-[10px] font-black uppercase tracking-widest rounded-2xl hover:bg-gray-50 shadow-sm transition-all hover:-translate-y-0.5"
                                >
                                    {{ __('translate.filters') }}
                                </button>
                                <button
                                    type="submit"
                                    class="px-8 py-3 bg-[#0A2C5C] text-white text-[10px] font-black rounded-2xl uppercase tracking-widest shadow-lg shadow-blue-900/20 hover:bg-blue-800 transition-all hover:-translate-y-0.5"
                                >
                                    {{ __('translate.search') }}
                                </button>
                                <Link v-if="isFilterActive"
                                      :href="route('front.projects')"
                                      class="text-[10px] font-black text-red-500 hover:underline uppercase tracking-widest ml-2">
                                    {{__('translate.resetFilters')}}
                                </Link>
                            </div>
                        </div>

                        <!-- Panel filtrów -->
                        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mb-6">
                            <!-- Select Country -->
                            <div class="space-y-2">
                                <label class="block text-[10px] font-black text-gray-400 mb-2 uppercase tracking-widest">{{ __('translate.placeholderCountry') }}</label>
                                <multiselect
                                    v-model="form.country"
                                    :options="props.countries"
                                    group-values="elements"
                                    group-label="group"
                                    :group-select="false"
                                    track-by="value"
                                    label="name"
                                    :selectLabel="__('translate.selectLabel')"
                                    :selectGroupLabel="__('translate.selectGroupLabel')"
                                    :selectedLabel="__('translate.selectedLabel')"
                                    :deselectLabel="__('translate.deselectLabel')"
                                    :placeholder="__('translate.placeholderCountry')"
                                    class="custom-multiselect"
                                >
                                    <template #noResult>
                                        <span>{{__('translate.noOptions')}}</span>
                                    </template>
                                </multiselect>
                                <InputError :message="form.errors.country" class="mt-2"/>
                            </div>

                            <!-- Select City -->
                            <div class="space-y-2">
                                <label class="block text-[10px] font-black text-gray-400 mb-2 uppercase tracking-widest">{{ __('translate.placeholderCity') }}</label>
                                <multiselect
                                    v-model="form.city"
                                    :options="optionsCities"
                                    :disabled="!form.country"
                                    track-by="value"
                                    label="name"
                                    :selectLabel="__('translate.selectLabel')"
                                    :selectGroupLabel="__('translate.selectGroupLabel')"
                                    :selectedLabel="__('translate.selectedLabel')"
                                    :deselectLabel="__('translate.deselectLabel')"
                                    :placeholder="__('translate.placeholderCity')"
                                    class="custom-multiselect"
                                >
                                    <template #noResult>
                                        <span>{{__('translate.noOptions')}}</span>
                                    </template>
                                </multiselect>
                                <InputError :message="form.errors.city" class="mt-2"/>
                            </div>

                            <!-- Select Category -->
                            <div class="space-y-2">
                                <label class="block text-[10px] font-black text-gray-400 mb-2 uppercase tracking-widest">{{ __('translate.placeholderCategory') }}</label>
                                <multiselect
                                    v-model="form.category"
                                    :options="optionsCategories"
                                    :disabled="!form.country"
                                    track-by="value"
                                    label="name"
                                    :selectLabel="__('translate.selectLabel')"
                                    :selectGroupLabel="__('translate.selectGroupLabel')"
                                    :selectedLabel="__('translate.selectedLabel')"
                                    :deselectLabel="__('translate.deselectLabel')"
                                    :placeholder="__('translate.placeholderCategory')"
                                    class="custom-multiselect"
                                >
                                    <template #noResult>
                                        <span>{{__('translate.noOptions')}}</span>
                                    </template>
                                </multiselect>
                                <InputError :message="form.errors.category" class="mt-2"/>
                            </div>
                        </div>

                        <div v-show="showFilters" class="space-y-6 pt-6 border-t border-gray-50 mb-6">
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <!-- Select CategorySub -->
                                <div class="space-y-2">
                                    <label class="block text-[10px] font-black text-gray-400 mb-2 uppercase tracking-widest">{{ __('translate.placeholderCategorySub') }}</label>
                                    <multiselect
                                        v-model="form.categorySub"
                                        :options="optionsCategorySub"
                                        :disabled="!form.category"
                                        track-by="value"
                                        label="name"
                                        :selectLabel="__('translate.selectLabel')"
                                        :selectGroupLabel="__('translate.selectGroupLabel')"
                                        :selectedLabel="__('translate.selectedLabel')"
                                        :deselectLabel="__('translate.deselectLabel')"
                                        :placeholder="__('translate.placeholderCategorySub')"
                                        class="custom-multiselect"
                                    >
                                        <template #noResult>
                                            <span>{{__('translate.noOptions')}}</span>
                                        </template>
                                    </multiselect>
                                    <InputError :message="form.errors.categorySub" class="mt-2"/>
                                </div>

                                <!-- Select Profession -->
                                <div class="space-y-2">
                                    <label class="block text-[10px] font-black text-gray-400 mb-2 uppercase tracking-widest">{{ __('translate.placeholderProfession') }}</label>
                                    <multiselect
                                        v-model="form.profession"
                                        :options="optionsProfession"
                                        :disabled="!form.categorySub"
                                        track-by="value"
                                        label="name"
                                        :selectLabel="__('translate.selectLabel')"
                                        :selectGroupLabel="__('translate.selectGroupLabel')"
                                        :selectedLabel="__('translate.selectedLabel')"
                                        :deselectLabel="__('translate.deselectLabel')"
                                        :placeholder="__('translate.placeholderProfession')"
                                        class="custom-multiselect"
                                    >
                                        <template #noResult>
                                            <span>{{__('translate.noOptions')}}</span>
                                        </template>
                                    </multiselect>
                                    <InputError :message="form.errors.profession" class="mt-2"/>
                                </div>

                                <!-- Select Position -->
                                <div class="space-y-2">
                                    <label class="block text-[10px] font-black text-gray-400 mb-2 uppercase tracking-widest">{{ __('translate.placeholderPosition') }}</label>
                                    <multiselect
                                        v-model="form.position"
                                        :options="optionsPosition"
                                        :disabled="!form.profession"
                                        track-by="value"
                                        label="name"
                                        :selectLabel="__('translate.selectLabel')"
                                        :selectGroupLabel="__('translate.selectGroupLabel')"
                                        :selectedLabel="__('translate.selectedLabel')"
                                        :deselectLabel="__('translate.deselectLabel')"
                                        :placeholder="__('translate.placeholderPosition')"
                                        class="custom-multiselect"
                                    >
                                        <template #noResult>
                                            <span>{{__('translate.noOptions')}}</span>
                                        </template>
                                    </multiselect>
                                    <InputError :message="form.errors.position" class="mt-2"/>
                                </div>

                                <!-- Select Working Mode -->
                                <div class="space-y-2">
                                    <label class="block text-[10px] font-black text-gray-400 mb-2 uppercase tracking-widest">{{ __('translate.placeholderWorkingMode') }}</label>
                                    <multiselect
                                        v-model="form.workingMode"
                                        :options="props.workingModes"
                                        track-by="value"
                                        label="name"
                                        :selectLabel="__('translate.selectLabel')"
                                        :selectGroupLabel="__('translate.selectGroupLabel')"
                                        :selectedLabel="__('translate.selectedLabel')"
                                        :deselectLabel="__('translate.deselectLabel')"
                                        :placeholder="__('translate.placeholderWorkingMode')"
                                        class="custom-multiselect"
                                    >
                                        <template #noResult>
                                            <span>{{__('translate.noOptions')}}</span>
                                        </template>
                                    </multiselect>
                                    <InputError :message="form.errors.workingMode" class="mt-2"/>
                                </div>
                            </div>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <!-- Select Experience -->
                                <div class="space-y-2">
                                    <label class="block text-[10px] font-black text-gray-400 mb-2 uppercase tracking-widest">{{ __('translate.placeholderExperience') }}</label>
                                    <multiselect
                                        v-model="form.experience"
                                        :options="props.experiences"
                                        track-by="value"
                                        label="name"
                                        :selectLabel="__('translate.selectLabel')"
                                        :selectGroupLabel="__('translate.selectGroupLabel')"
                                        :selectedLabel="__('translate.selectedLabel')"
                                        :deselectLabel="__('translate.deselectLabel')"
                                        :placeholder="__('translate.placeholderExperience')"
                                        class="custom-multiselect"
                                    >
                                        <template #noResult>
                                            <span>{{__('translate.noOptions')}}</span>
                                        </template>
                                    </multiselect>
                                    <InputError :message="form.errors.experience" class="mt-2"/>
                                </div>

                                <!-- Select Type of Contract -->
                                <div class="space-y-2">
                                    <label class="block text-[10px] font-black text-gray-400 mb-2 uppercase tracking-widest">{{ __('translate.placeholderTypeOfContract') }}</label>
                                    <multiselect
                                        v-model="form.typeOfContract"
                                        :options="props.typesOfContract"
                                        track-by="value"
                                        label="name"
                                        :selectLabel="__('translate.selectLabel')"
                                        :selectGroupLabel="__('translate.selectGroupLabel')"
                                        :selectedLabel="__('translate.selectedLabel')"
                                        :deselectLabel="__('translate.deselectLabel')"
                                        :placeholder="__('translate.placeholderTypeOfContract')"
                                        class="custom-multiselect"
                                    >
                                        <template #noResult>
                                            <span>{{__('translate.noOptions')}}</span>
                                        </template>
                                    </multiselect>
                                    <InputError :message="form.errors.typeOfContract" class="mt-2"/>
                                </div>

                                <!-- Select Work Load -->
                                <div class="space-y-2 lg:col-span-3">
                                    <label class="block text-[10px] font-black text-gray-400 mb-2 uppercase tracking-widest">{{ __('translate.placeholderWorkLoad') }}</label>
                                    <multiselect
                                        v-model="form.workLoad"
                                        :options="props.workLoads"
                                        track-by="value"
                                        label="name"
                                        :selectLabel="__('translate.selectLabel')"
                                        :selectGroupLabel="__('translate.selectGroupLabel')"
                                        :selectedLabel="__('translate.selectedLabel')"
                                        :deselectLabel="__('translate.deselectLabel')"
                                        :placeholder="__('translate.placeholderWorkLoad')"
                                        class="custom-multiselect"
                                    >
                                        <template #noResult>
                                            <span>{{__('translate.noOptions')}}</span>
                                        </template>
                                    </multiselect>
                                    <InputError :message="form.errors.workLoad" class="mt-2"/>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>

                <div class="space-y-4">
                    <div v-if="props.projects.total" class="space-y-4">
                        <div v-for="(project) in props.projects.data" :key="project.id"
                             class="group bg-white rounded-[2.5rem] border border-gray-100 shadow-sm hover:shadow-xl hover:shadow-blue-900/5 transition-all duration-300 hover:-translate-y-1 p-6 relative overflow-hidden"
                             :class="{ 'ring-2 ring-blue-500 ring-offset-4 bg-blue-50/10 shadow-blue-500/5': project.is_featured }"
                        >
                            <!-- Featured Badge for List -->
                            <div v-if="project.is_featured" class="absolute top-0 right-0 overflow-hidden rounded-tr-[2.5rem] group/premium">
                                <!-- Background with shimmer -->
                                <div class="absolute inset-0 bg-gradient-to-r from-blue-600 via-blue-400 to-blue-600 animate-shimmer bg-[length:200%_auto]"></div>

                                <div class="relative flex items-center gap-1.5 px-4 py-1.5 rounded-bl-2xl border-l border-b border-white/20 shadow-lg shadow-blue-900/20">
                                    <div class="relative flex items-center justify-center">
                                        <div class="absolute inset-0 bg-white/40 blur-sm rounded-full animate-ping"></div>
                                        <img class="relative h-3 w-3 object-contain brightness-0 invert" src="/images/hand.svg" alt="featured">
                                    </div>
                                    <span class="text-[8px] font-black text-white uppercase tracking-[0.15em] drop-shadow-sm">{{ __('translate.featured') }}</span>
                                </div>
                            </div>
                            <Link :href="route('front.projects.single', project)" class="block">
                                <div class="flex flex-col md:flex-row md:items-center justify-between mb-6 gap-4">
                                    <div class="flex items-center gap-4">
                                        <span class="px-3 py-1 bg-blue-50 text-blue-500 font-black text-[10px] uppercase tracking-widest rounded-lg border border-blue-100/50">
                                            ID {{ project.id }}
                                        </span>
                                        <div class="h-4 w-px bg-gray-200 hidden md:block"></div>
                                        <h4 class="text-lg font-black text-gray-900 uppercase tracking-tight leading-tight truncate group-hover:text-[#0A2C5C] transition-colors">
                                            {{ getPositionTitle(project) }}
                                        </h4>
                                    </div>
                                    <div class="flex items-center gap-2">
                                        <svg class="w-3.5 h-3.5 text-gray-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                                        <span class="text-[10px] font-bold text-gray-400 uppercase tracking-widest">
                                            {{ moment(project.created_at).format('DD.MM.YYYY') }}
                                        </span>
                                    </div>
                                </div>

                                <div class="flex flex-col md:flex-row md:items-center justify-between gap-6">
                                    <div class="flex items-start gap-4">
                                        <div
                                            class="w-20 h-20 rounded-[1.5rem] bg-gray-50 shrink-0 shadow-inner border border-gray-100"
                                            :style="{
                                                backgroundImage: `url('${project.user?.profile_photo_url || '/default-company-logo.png'}')`,
                                                backgroundPosition: 'center',
                                                backgroundRepeat: 'no-repeat',
                                                backgroundSize: 'cover'
                                            }"
                                        ></div>
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
                                        <div class="w-10 h-10 rounded-2xl bg-gray-50 flex items-center justify-center group-hover:bg-[#0A2C5C] group-hover:text-white transition-all duration-300 border border-gray-100 group-hover:border-transparent group-hover:shadow-lg group-hover:shadow-blue-900/20">
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
<style lang="scss">
@keyframes shimmer {
    0% { background-position: -200% 0; }
    100% { background-position: 200% 0; }
}

.animate-shimmer {
    animation: shimmer 5s infinite linear;
}

.custom-multiselect {
    .multiselect__tags {
        border: 1px solid #e5e7eb; /* border-gray-200 */
        border-radius: 1rem;
        padding: 0.75rem 2.5rem 0.75rem 1.25rem;
        background: #ffffff;
        transition: all 0.3s ease;
        min-height: 48px;
        display: flex;
        align-items: center;
    }

    &:focus-within .multiselect__tags {
        border-color: #00a0e3;
        box-shadow: 0 0 0 4px rgba(0, 160, 227, 0.1);
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
        color: #0A2C5C;
    }

    .multiselect__input {
        margin-bottom: 0;
        background: transparent;
        font-size: 0.75rem;
        font-weight: 700;
        color: #0A2C5C;

        &::placeholder {
            color: #9ca3af;
        }
    }

    .multiselect__select {
        height: 48px;
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

        &:after {
            display: none;
        }
    }

    .multiselect__option--selected {
        background: #f3f4f6 !important;
        color: #0A2C5C;
        font-weight: 900;

        &:after {
            display: none;
        }
    }

    .multiselect__option--group {
        background: #f9fafb !important;
        color: #9ca3af !important;
        font-size: 9px !important;
        font-weight: 900 !important;
        text-transform: uppercase;
        letter-spacing: 0.2em;
        padding: 12px 15px !important;
    }

    .multiselect__content-wrapper {
        border: 1px solid #e5e7eb;
        border-top: none;
        border-bottom-left-radius: 1.25rem;
        border-bottom-right-radius: 1.25rem;
        box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
        overflow: hidden;
    }

    .multiselect__content {
        padding: 4px;
    }

    .multiselect__option {
        border-radius: 0.75rem;
        margin: 2px 0;
        min-height: 40px;
        display: flex;
        align-items: center;
        padding: 8px 12px;
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

    .multiselect__tag-icon {
        top: -3px !important;
    }
}
</style>
