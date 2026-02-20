<script setup>
import {computed, ref, watch} from 'vue';
import { router,Link,usePage } from '@inertiajs/vue3';
import AppLayout from '@/Layouts/AppLayout.vue';
import Pagination from '@/Components/Pagination.vue';
import { pickBy, debounce } from 'lodash';
import DangerButton from "@/Components/DangerButton.vue";
import DialogModal from "@/Components/DialogModal.vue";
import SecondaryButton from "@/Components/SecondaryButton.vue";
import Multiselect from "vue-multiselect";
import InputError from "@/Components/InputError.vue";
import __ from "@/lang.js";

const props = defineProps({
    projects: Object,
    recruiters: Object,
    filters: Object,
    categories: Array
});

const optionsCategorySub = ref([]);
const optionsProfession = ref([]);
const optionsPosition = ref([]);

const selectedProject = ref(null);
const confirmCancelProject = ref(false);
const isLoading = ref(false);

const params = ref({
    field: props.filters.field,
    direction: props.filters.direction,
    recruiter: props.filters.recruiter ?? 'all',
    is_active: props.filters.is_active ?? 'all',
    position: props.filters.position ?? '',
    id: props.filters.id ?? '',
    city: props.filters.city ?? '',
    date: props.filters.date ?? '',
    category: null,
    categorySub: null,
    profession: null,
    positionSelect: null
});


// Obsługa zmiany kategorii
watch(() => params.value.category, async (newCategory) => {
    if (!newCategory) {
        optionsCategorySub.value = [];
        optionsProfession.value = [];
        optionsPosition.value = [];
        params.value.categorySub = null;
        params.value.profession = null;
        params.value.positionSelect = null;
        return;
    }

    try {
        const response = await fetch(route("project-recruits.category.sub", newCategory.value));
        const data = await response.json();
        optionsCategorySub.value = data;
        params.value.categorySub = null;
    } catch (e) {
        console.error(__('translate.errorLoadingSubcategories'), e);
    }
});

// Obsługa zmiany podkategorii
watch(() => params.value.categorySub, async (newCategorySub) => {
    if (!newCategorySub) {
        optionsProfession.value = [];
        optionsPosition.value = [];
        params.value.profession = null;
        params.value.positionSelect = null;
        return;
    }

    try {
        const response = await fetch(route("project-recruits.category.professions", newCategorySub.value));
        const data = await response.json();
        optionsProfession.value = data;
        params.value.profession = null;
    } catch (e) {
        console.error(__('translate.errorLoadingProfessions'), e);
    }
});

// Obsługa zmiany zawodu
watch(() => params.value.profession, async (newProfession) => {
    if (!newProfession) {
        optionsPosition.value = [];
        params.value.positionSelect = null;
        return;
    }

    try {
        const response = await fetch(route("project-recruits.category.positions", newProfession.value));
        const data = await response.json();
        optionsPosition.value = data;
        params.value.positionSelect = null;
    } catch (e) {
        console.error(__('translate.errorLoadingPositions'), e);
    }
});

const applyFilters = () => {
    const transformedData = {
        ...pickBy({
            field: params.value.field,
            direction: params.value.direction,
            recruiter: params.value.recruiter !== 'all' ? params.value.recruiter : null,
            is_active: params.value.is_active !== 'all' ? params.value.is_active : null,
            position: params.value.position,
            id: params.value.id,
            city: params.value.city,
            date: params.value.date
        }),
        category: params.value.category?.value || null,
        categorySub: params.value.categorySub?.value || null,
        profession: params.value.profession?.value || null,
        positionSelect: params.value.positionSelect?.value || null
    };

    const filtered = pickBy(transformedData);
    isLoading.value = true;
    router.get(route('project-recruits.index'), filtered, {
        preserveState: true,
        replace: true,
        onFinish: () => {
            isLoading.value = false;
        }
    });
};

const resetFilters = () => {
    params.value = {
        field: null,
        direction: null,
        recruiter: 'all',
        is_active: 'all',
        position: '',
        id: '',
        city: '',
        date: '',
        category: null,
        categorySub: null,
        profession: null,
        positionSelect: null
    };
    optionsCategorySub.value = [];
    optionsProfession.value = [];
    optionsPosition.value = [];
    isLoading.value = true;
    router.get(route('project-recruits.index'), {}, {
        onFinish: () => {
            isLoading.value = false;
        }
    });
};

const openModal = (project) => {
    confirmCancelProject.value = true;
    selectedProject.value = project;
};

const DeleteProject = () => {
    if(selectedProject.value){
        router.delete(route('project-recruits.destroy',selectedProject.value), {
            onSuccess: () => {
                confirmCancelProject.value = false;
                selectedProject.value = null;
            }
        });
    }
};

const duplicateProject = (project) => {
    router.post(route('project-recruits.duplicate', project));
};

</script>

<template>
    <AppLayout :title="__('translate.projects')">
        <template #header>
            <div class="flex justify-between items-center">
                <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                    {{ __('translate.offerts') }}
                </h2>
                <Link
                    :href="route('project-recruits.create')"
                    class="inline-flex items-center px-8 py-3 bg-[#0A2C5C] text-white text-[10px] font-black rounded-2xl uppercase tracking-widest shadow-lg shadow-blue-900/20 hover:bg-blue-800 transition-all hover:-translate-y-0.5"
                >
                    {{ __('translate.create') || 'UTWÓRZ' }}
                </Link>
            </div>
        </template>

        <div class="py-12 bg-gray-50/50 min-h-screen">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-8">
                <!-- FILTRY -->
                <div class="bg-white rounded-[3rem] shadow-xl shadow-blue-900/5 border border-gray-100 p-10">
                    <div class="flex items-center gap-4 mb-8">
                        <h3 class="text-[10px] font-black text-[#0A2C5C] uppercase tracking-[0.2em]">{{ __('translate.filter') || 'Filtruj' }}</h3>
                        <div class="h-px flex-1 bg-gray-100"></div>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                        <!-- ID -->
                        <div class="space-y-2">
                            <label class="block text-[10px] font-black text-gray-400 mb-2 uppercase tracking-widest">ID</label>
                            <input
                                v-model="params.id"
                                type="number"
                                placeholder="ID"
                                class="w-full px-5 py-4 text-xs rounded-2xl border-gray-100 bg-gray-50 focus:bg-white focus:ring-0 focus:border-[#00a0e3] transition-all placeholder-gray-400 font-bold tracking-widest uppercase"
                            />
                        </div>

                        <!-- Miasto -->
                        <div class="space-y-2">
                            <label class="block text-[10px] font-black text-gray-400 mb-2 uppercase tracking-widest">{{ __('translate.City') || 'MIASTO' }}</label>
                            <input
                                v-model="params.city"
                                type="text"
                                :placeholder="__('translate.City') || 'MIASTO'"
                                class="w-full px-5 py-4 text-xs rounded-2xl border-gray-100 bg-gray-50 focus:bg-white focus:ring-0 focus:border-[#00a0e3] transition-all placeholder-gray-400 font-bold tracking-widest uppercase"
                            />
                        </div>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                        <!-- Branża (Category) -->
                        <div class="space-y-2">
                            <label class="block text-[10px] font-black text-gray-400 mb-2 uppercase tracking-widest">{{ __('translate.placeholderCategory') }}</label>
                            <multiselect
                                v-model="params.category"
                                :options="props.categories"
                                track-by="value"
                                label="name"
                                :selectLabel="__('translate.selectLabel')"
                                :selectedLabel="__('translate.selectedLabel')"
                                :deselectLabel="__('translate.deselectLabel')"
                                :placeholder="__('translate.placeholderCategory')"
                                class="custom-multiselect"
                            >
                                <template #noResult>
                                    <span>{{__('translate.noOptions')}}</span>
                                </template>
                            </multiselect>
                        </div>

                        <!-- Podbranża (CategorySub) -->
                        <div class="space-y-2">
                            <label class="block text-[10px] font-black text-gray-400 mb-2 uppercase tracking-widest">{{ __('translate.placeholderCategorySub') }}</label>
                            <multiselect
                                v-model="params.categorySub"
                                :options="optionsCategorySub"
                                :disabled="!params.category"
                                track-by="value"
                                label="name"
                                :selectLabel="__('translate.selectLabel')"
                                :selectedLabel="__('translate.selectedLabel')"
                                :deselectLabel="__('translate.deselectLabel')"
                                :placeholder="__('translate.placeholderCategorySub')"
                                class="custom-multiselect"
                            >
                                <template #noResult>
                                    <span>{{__('translate.noOptions')}}</span>
                                </template>
                            </multiselect>
                        </div>

                        <!-- Zawód (Profession) -->
                        <div class="space-y-2">
                            <label class="block text-[10px] font-black text-gray-400 mb-2 uppercase tracking-widest">{{ __('translate.placeholderProfession') }}</label>
                            <multiselect
                                v-model="params.profession"
                                :options="optionsProfession"
                                :disabled="!params.categorySub"
                                track-by="value"
                                label="name"
                                :selectLabel="__('translate.selectLabel')"
                                :selectedLabel="__('translate.selectedLabel')"
                                :deselectLabel="__('translate.deselectLabel')"
                                :placeholder="__('translate.placeholderProfession')"
                                class="custom-multiselect"
                            >
                                <template #noResult>
                                    <span>{{__('translate.noOptions')}}</span>
                                </template>
                            </multiselect>
                        </div>

                        <!-- Stanowisko (Position) -->
                        <div class="space-y-2">
                            <label class="block text-[10px] font-black text-gray-400 mb-2 uppercase tracking-widest">{{ __('translate.placeholderPosition') }}</label>
                            <multiselect
                                v-model="params.positionSelect"
                                :options="optionsPosition"
                                :disabled="!params.profession"
                                track-by="value"
                                label="name"
                                :selectLabel="__('translate.selectLabel')"
                                :selectedLabel="__('translate.selectedLabel')"
                                :deselectLabel="__('translate.deselectLabel')"
                                :placeholder="__('translate.placeholderPosition')"
                                class="custom-multiselect"
                            >
                                <template #noResult>
                                    <span>{{__('translate.noOptions')}}</span>
                                </template>
                            </multiselect>
                        </div>

                        <!-- Data -->
                        <div class="space-y-2">
                            <label class="block text-[10px] font-black text-gray-400 mb-2 uppercase tracking-widest">{{ __('translate.date') || 'DATA' }}</label>
                            <input
                                v-model="params.date"
                                type="date"
                                :placeholder="__('translate.date') || 'DATA'"
                                class="w-full px-5 py-4 text-xs rounded-2xl border-gray-100 bg-gray-50 focus:bg-white focus:ring-0 focus:border-[#00a0e3] transition-all font-bold tracking-widest uppercase"
                            />
                        </div>
                    </div>
                    <!-- Przyciski filtrów -->
                    <div class="flex flex-wrap gap-4 pt-6 border-t border-gray-50">
                        <button
                            @click="applyFilters"
                            :disabled="isLoading"
                            class="px-10 py-4 bg-[#0A2C5C] text-white text-[10px] font-black rounded-2xl uppercase tracking-widest hover:bg-blue-800 transition-all shadow-lg shadow-blue-900/20 hover:-translate-y-0.5 disabled:opacity-50 disabled:cursor-not-allowed flex items-center gap-3"
                        >
                            <svg v-if="isLoading" class="animate-spin h-4 w-4 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                                <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                            </svg>
                            {{ __('translate.filter') || 'FILTRUJ' }}
                        </button>
                        <button
                            @click="resetFilters"
                            :disabled="isLoading"
                            class="px-10 py-4 bg-white border border-gray-100 text-gray-500 text-[10px] font-black rounded-2xl uppercase tracking-widest hover:bg-gray-50 shadow-sm transition-all hover:-translate-y-0.5 disabled:opacity-50 disabled:cursor-not-allowed"
                        >
                            {{ __('translate.reset') || 'RESETUJ' }}
                        </button>
                    </div>
                </div>

                <!-- LISTA PROJEKTÓW -->
                <div class="relative space-y-4">
                    <!-- Spinner Overlay -->
                    <div v-if="isLoading" class="absolute inset-0 bg-white/80 flex items-center justify-center z-10 rounded-[3rem] backdrop-blur-sm transition-all duration-300">
                        <div class="flex flex-col items-center gap-4">
                            <div class="relative">
                                <div class="w-16 h-16 border-4 border-gray-100 rounded-full"></div>
                                <div class="w-16 h-16 border-4 border-[#0A2C5C] border-t-transparent rounded-full animate-spin absolute top-0 left-0"></div>
                            </div>
                            <p class="text-[#0A2C5C] font-black uppercase tracking-[0.2em] text-xs">{{ __('translate.searching') || 'Wyszukiwanie...' }}</p>
                        </div>
                    </div>

                    <!-- Projekt karta -->
                    <div
                        v-for="project in projects.data"
                        :key="project.id"
                        class="group bg-white rounded-[2.5rem] border border-gray-100 shadow-sm hover:shadow-xl hover:shadow-blue-900/5 transition-all duration-300 hover:-translate-y-1 p-6"
                    >
                        <!-- Górna linia -->
                        <div class="flex flex-col md:flex-row md:items-center justify-between mb-6 gap-4">
                            <div class="flex items-center gap-4">
                                <span class="px-3 py-1 bg-blue-50 text-blue-500 font-black text-[10px] uppercase tracking-widest rounded-lg border border-blue-100/50">
                                    ID {{ project.id }}
                                </span>
                                <div class="h-4 w-px bg-gray-200 hidden md:block"></div>
                                <h4 class="text-lg font-black text-gray-900 uppercase tracking-tight leading-tight truncate group-hover:text-[#0A2C5C] transition-colors">
                                    {{ project.position }}
                                </h4>
                            </div>
                            <div class="flex items-center gap-2">
                                <svg class="w-3.5 h-3.5 text-gray-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                                <span class="text-[10px] font-bold text-gray-400 uppercase tracking-widest">
                                    {{ project.created_at }}
                                </span>
                            </div>
                        </div>

                        <!-- Środkowa sekcja: Lokalizacja i płaca -->
                        <div class="flex flex-wrap items-center gap-6 mb-8">
                            <div class="flex items-center gap-3">
                                <div class="w-8 h-8 rounded-xl bg-gray-50 flex items-center justify-center text-gray-400">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                                </div>
                                <p class="text-xs font-black text-gray-700 uppercase tracking-widest">
                                    <span v-if="project.country">{{ project.country }}</span>
                                    <span v-if="project.country && project.city"> • </span>
                                    <span v-if="project.city">{{ project.city }}</span>
                                    <span v-if="!project.country && !project.city" class="text-gray-400 italic font-medium">{{ __('translate.noLocation') || 'Brak lokalizacji' }}</span>
                                </p>
                            </div>

                            <div v-if="project.basicSalaryFrom" class="flex items-center gap-3">
                                <div class="w-8 h-8 rounded-xl bg-green-50 flex items-center justify-center text-green-500">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                                </div>
                                <p class="text-xs font-black text-green-600 uppercase tracking-widest">
                                    {{ project.basicSalaryFrom }} {{ project.currency }}
                                </p>
                            </div>
                        </div>

                        <!-- Statystyki i przyciski -->
                        <div class="flex flex-col lg:flex-row lg:items-center justify-between gap-8 pt-6 border-t border-gray-100">
                            <!-- Statystyki -->
                            <div class="flex flex-wrap items-center gap-3 flex-1">
                                <!-- Wyświetlenia -->
                                <div class="bg-gray-50/80 px-4 py-3 rounded-2xl border border-gray-100 flex items-center gap-3">
                                    <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" /><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" /></svg>
                                    <div class="flex flex-col">
                                        <span class="text-[8px] font-black text-gray-400 uppercase leading-none mb-1">{{ __('translate.views') || 'Wyświetlenia' }}</span>
                                        <span class="text-xs font-black text-gray-900 leading-none">{{ project.views_count }}</span>
                                    </div>
                                </div>

                                <!-- Aplikacje -->
                                <div class="bg-gray-50/80 px-4 py-3 rounded-2xl border border-gray-100 flex items-center gap-3">
                                    <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" /></svg>
                                    <div class="flex flex-col">
                                        <span class="text-[8px] font-black text-gray-400 uppercase leading-none mb-1">{{ __('translate.applications') || 'Aplikacje' }}</span>
                                        <span class="text-xs font-black text-gray-900 leading-none">{{ project.aplications_count }}</span>
                                    </div>
                                </div>

                                <!-- Tak -->
                                <div class="bg-blue-50/50 px-4 py-3 rounded-2xl border border-blue-100/50 flex items-center gap-3">
                                    <div class="w-1.5 h-1.5 rounded-full bg-[#0A2C5C] shadow-sm shadow-blue-200"></div>
                                    <div class="flex flex-col">
                                        <span class="text-[8px] font-black text-blue-900/50 uppercase leading-none mb-1">{{ __('translate.yes') || 'Tak' }}</span>
                                        <span class="text-xs font-black text-[#0A2C5C] leading-none">{{ project.yes_count }}</span>
                                    </div>
                                </div>

                                <!-- Może -->
                                <div class="bg-cyan-50/50 px-4 py-3 rounded-2xl border border-cyan-100/50 flex items-center gap-3">
                                    <div class="w-1.5 h-1.5 rounded-full bg-[#00a0e3] shadow-sm shadow-cyan-200"></div>
                                    <div class="flex flex-col">
                                        <span class="text-[8px] font-black text-cyan-600/50 uppercase leading-none mb-1">{{ __('translate.maybe') || 'Może' }}</span>
                                        <span class="text-xs font-black text-[#00a0e3] leading-none">{{ project.maybe_count }}</span>
                                    </div>
                                </div>

                                <!-- Nie -->
                                <div class="bg-red-50/50 px-4 py-3 rounded-2xl border border-red-100/50 flex items-center gap-3">
                                    <div class="w-1.5 h-1.5 rounded-full bg-[#e31e24] shadow-sm shadow-red-200"></div>
                                    <div class="flex flex-col">
                                        <span class="text-[8px] font-black text-red-600/50 uppercase leading-none mb-1">{{ __('translate.no') || 'Nie' }}</span>
                                        <span class="text-xs font-black text-[#e31e24] leading-none">{{ project.no_count }}</span>
                                    </div>
                                </div>
                            </div>

                            <!-- Przyciski akcji -->
                            <div class="flex flex-wrap gap-2 shrink-0">
                                <Link
                                    :href="route('project-recruits.show', project)"
                                    class="w-10 h-10 rounded-xl bg-gray-50 flex items-center justify-center text-[#0A2C5C] hover:bg-[#0A2C5C] hover:text-white transition-all shadow-sm"
                                    :title="__('translate.show') || 'POKAŻ'"
                                >
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/></svg>
                                </Link>

                                <Link
                                    :href="route('project-recruits.edit', project)"
                                    class="w-10 h-10 rounded-xl bg-white border border-gray-100 flex items-center justify-center text-gray-500 hover:bg-gray-50 transition-all shadow-sm"
                                    :title="__('translate.edit') || 'EDYTUJ'"
                                >
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" /></svg>
                                </Link>

                                <button
                                    @click="duplicateProject(project)"
                                    class="w-10 h-10 rounded-xl bg-white border border-gray-100 flex items-center justify-center text-gray-500 hover:bg-gray-50 transition-all shadow-sm"
                                    :title="__('translate.duplicate') || 'DUPLIKUJ'"
                                >
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M8 7v8a2 2 0 002 2h6M8 7V5a2 2 0 012-2h4.586a1 1 0 01.707.293l4.414 4.414a1 1 0 01.293.707V7m-12 0h12" /></svg>
                                </button>

                                <button
                                    @click="openModal(project)"
                                    class="w-10 h-10 rounded-xl bg-white border border-gray-100 flex items-center justify-center text-red-500 hover:bg-red-600 hover:text-white hover:border-transparent transition-all shadow-sm"
                                    :title="__('translate.delete') || 'USUŃ'"
                                >
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-4v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" /></svg>
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Brak projektów -->
                    <div v-if="!projects.data.length" class="bg-white rounded-[3rem] p-20 text-center shadow-xl shadow-blue-900/5 border border-gray-100">
                        <div class="w-20 h-20 bg-gray-50 rounded-full flex items-center justify-center mx-auto mb-6">
                            <svg class="w-10 h-10 text-gray-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                            </svg>
                        </div>
                        <p class="text-xs font-black text-gray-400 uppercase tracking-widest">{{ __('translate.notFoundProjects') }}</p>
                    </div>
                </div>

                <!-- PAGINACJA -->
                <Pagination v-if="projects.total > 10" class="mt-12" :links="projects.links" />
            </div>

            <!-- MODAL USUWANIA -->
            <DialogModal :show="confirmCancelProject" @close="confirmCancelProject = false">
                <template #title>
                    <span class="text-sm font-black text-[#0A2C5C] uppercase tracking-[0.2em]">
                        {{ __('translate.questionDelete') }} - {{ __('translate.project').toLowerCase() }} id. {{ selectedProject && selectedProject.id }}
                    </span>
                </template>

                <template #content>
                    <p class="text-xs font-bold text-gray-500 uppercase tracking-widest leading-relaxed">
                        {{ __('translate.questionDeleteConfirm') }} - {{ __('translate.project').toLowerCase() }} id.{{ selectedProject && selectedProject.id }}
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
}
</style>
