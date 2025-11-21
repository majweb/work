<script setup>
import Pagination from '@/Components/Pagination.vue';
import FrontLayout from "@/Layouts/FrontLayout.vue";
import {usePage, Link, router} from '@inertiajs/vue3';
import Multiselect from "vue-multiselect";
import InputError from "@/Components/InputError.vue";
import { useForm } from '@inertiajs/vue3';
import { ref, watch, computed  } from "vue";
import __ from "@/lang.js";

const props = defineProps({
    projects: Object,
    countries: Array,
    workingModes: Array,
    experiences: Array,
    typesOfContract: Array,
    workLoads: Array,
});

const showFilters = ref(false);
const optionsCities = ref([]);
const optionsCategories = ref([]);
const optionsCategorySub = ref([]);
const optionsProfession = ref([]);
const optionsPosition = ref([]);

const form = useForm({
    country: undefined,
    city: undefined,
    category: undefined,
    categorySub: undefined,
    profession: undefined,
    position: undefined,
    workingMode: undefined,
    experience: undefined,
    typeOfContract: undefined,
    workLoad: undefined,
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
    <FrontLayout :title="__('translate.projects')">
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <!-- Formularz wyszukiwania -->
                <div class="mb-6">
                    <form @submit.prevent="submit" class="w-full">
                        <div class="bg-white p-4">
                            <div class="flex gap-3 items-center">
                                <button
                                    type="button"
                                    @click="toggleFilters"
                                    :class="[
                                        'px-4 py-2 border border-2 border-red-500 text-gray-700 rounded-md transition',
                                        showFilters ? 'bg-red-300' : 'hover:bg-red-300'
                                    ]"
                                >
                                    {{ __('translate.filters') }}
                                </button>
                                <button
                                    type="submit"
                                    class="px-6 py-2 bg-red-500 text-white font-semibold rounded-md hover:bg-red-600 transition"
                                >
                                    {{ __('translate.search') }}
                                </button>
                                <Link         v-if="isFilterActive"
                                              :href="route('front.projects')" class="underline">
                                    {{__('translate.resetFilters')}}
                                </Link>
                            </div>

                            <!-- Panel filtrów -->
                            <div v-show="showFilters" class="mt-4 space-y-4">
                                <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                                    <!-- Select Country -->
                                    <div>
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
                                        >
                                            <template #noResult>
                                                <span>{{__('translate.noOptions')}}</span>
                                            </template>
                                        </multiselect>
                                        <InputError :message="form.errors.country" class="mt-2"/>
                                    </div>

                                    <!-- Select City -->
                                    <div>
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
                                        >
                                            <template #noResult>
                                                <span>{{__('translate.noOptions')}}</span>
                                            </template>
                                        </multiselect>
                                        <InputError :message="form.errors.city" class="mt-2"/>
                                    </div>

                                    <!-- Select Category -->
                                    <div>
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
                                        >
                                            <template #noResult>
                                                <span>{{__('translate.noOptions')}}</span>
                                            </template>
                                        </multiselect>
                                        <InputError :message="form.errors.category" class="mt-2"/>
                                    </div>

                                    <!-- Select CategorySub -->
                                    <div>
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
                                        >
                                            <template #noResult>
                                                <span>{{__('translate.noOptions')}}</span>
                                            </template>
                                        </multiselect>
                                        <InputError :message="form.errors.categorySub" class="mt-2"/>
                                    </div>

                                    <!-- Select Profession -->
                                    <div>
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
                                        >
                                            <template #noResult>
                                                <span>{{__('translate.noOptions')}}</span>
                                            </template>
                                        </multiselect>
                                        <InputError :message="form.errors.profession" class="mt-2"/>
                                    </div>

                                    <!-- Select Position -->
                                    <div>
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
                                        >
                                            <template #noResult>
                                                <span>{{__('translate.noOptions')}}</span>
                                            </template>
                                        </multiselect>
                                        <InputError :message="form.errors.position" class="mt-2"/>
                                    </div>

                                    <!-- Select Working Mode -->
                                    <div>
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
                                        >
                                            <template #noResult>
                                                <span>{{__('translate.noOptions')}}</span>
                                            </template>
                                        </multiselect>
                                        <InputError :message="form.errors.workingMode" class="mt-2"/>
                                    </div>

                                    <!-- Select Experience -->
                                    <div>
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
                                        >
                                            <template #noResult>
                                                <span>{{__('translate.noOptions')}}</span>
                                            </template>
                                        </multiselect>
                                        <InputError :message="form.errors.experience" class="mt-2"/>
                                    </div>

                                    <!-- Select Type of Contract -->
                                    <div>
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
                                        >
                                            <template #noResult>
                                                <span>{{__('translate.noOptions')}}</span>
                                            </template>
                                        </multiselect>
                                        <InputError :message="form.errors.typeOfContract" class="mt-2"/>
                                    </div>

                                    <!-- Select Work Load -->
                                    <div>
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
                                        >
                                            <template #noResult>
                                                <span>{{__('translate.noOptions')}}</span>
                                            </template>
                                        </multiselect>
                                        <InputError :message="form.errors.workLoad" class="mt-2"/>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>

                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg">
                    <div v-if="props.projects.total"
                         class="p-6 lg:p-8 bg-white">
                        <div v-for="(project) in props.projects.data" :key="project.id"
                             class="mb-4 p-4 border border-blue-100 rounded-lg hover:shadow-lg transition duration-200 md:hover:bg-blue-50"    :class="{
         'border-blue-600 ring-2 ring-blue-400 ring-offset-2': project.is_featured
     }">
                            <Link :href="route('front.projects.single', project)" class="flex items-start justify-between">
                                <div class="flex items-start space-x-4">
                                    <div
                                        class="w-20 h-20 rounded-lg bg-gray-50"
                                        :style="{
                                            backgroundImage: `url('${project.user?.profile_photo_url || '/default-company-logo.png'}')`,
                                            backgroundPosition: 'center',
                                            backgroundRepeat: 'no-repeat',
                                            backgroundSize: 'cover'
                                        }"
                                    >
                                    </div>
                                    <div>
                                        <h3 class="text-lg font-semibold text-gray-900 hover:text-red-500 transition-colors"
                                        >
                                            {{project.id}}
                                            {{ project.position?.allTranslations.title[usePage().props.language] }}
                                        </h3>
                                        <div class="flex items-center text-sm text-gray-600">
                                            <span class="font-medium">{{ project.user?.name }}</span>
                                        </div>
                                        <div class="flex items-center text-sm text-gray-500">
                                            <span>{{ project.category.allTranslations.title[usePage().props.language] }}</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-right">
                                    <div class="text-xl font-bold text-red-500">
                                        {{ project.basicSalaryFrom }} zł
                                    </div>
                                    <div class="text-sm text-gray-500 mt-1">
                                        {{ project.cityWork }}, {{ project.country[0]?.allTranslations[usePage().props.language] }}
                                    </div>
                                </div>
                            </Link>
                        </div>
                        <Pagination v-if="props.projects.total > 10" class="mt-10 text-center mx-auto"
                                    :links="props.projects.links"/>
                    </div>
                    <div v-else class="text-center text-lg my-3">
                        {{ __('translate.notFoundArticles') }}
                    </div>
                    <Pagination v-if="props.projects.total > 5" class="my-5 text-center mx-auto" :links="props.projects.links" />
                </div>
            </div>
        </div>
    </FrontLayout>
</template>
<style src="vue-multiselect/dist/vue-multiselect.css"></style>
<style lang="scss">
.multiselect__tags{
    border:1px solid #0A2E6D;
}
.multiselect__tag{
    background: #0A2E6D !important;
}
.multiselect__option--highlight {
    background: #0A2E6D !important;
    outline: none;
    color: white;
}

.multiselect__option--highlight:after {
    content: attr(data-select);
    background: #0A2E6D !important;
    color: white;
}

.multiselect__option--selected {
    background: #00A0E3B2 !important;
    color: #35495E;
    font-weight: bold;
}

.multiselect__option--selected.multiselect__option--highlight {
    background: #00A0E3B2 !important;
    color: #fff;
}

.multiselect__option--selected.multiselect__option--highlight:after {
    background: #00A0E3B2 !important;
    content: attr(data-deselect);
    color: white !important;
}

.multiselect__option--selected:after {
    content: attr(data-selected);
    color: #00A0E3B2;
    background: transparent !important;
}
.multiselect__select{
    height: 98%;
    background: rgba(10, 46, 109, 0.14);
}
.multiselect__select::before{
    border-color: #0A2E6D transparent transparent;
}
.multiselect--disabled.multiselect .multiselect__select{
    background: rgba(10, 46, 109, 0.14);
}
</style>
