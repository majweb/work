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

const can = computed(()=>usePage().props.permissionsCan);

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
                <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                    {{ __('translate.offerts') }}
                </h2>
                <Link
                    v-if="can['adding projects']"
                    :href="route('project-recruits.create')"
                    class="px-6 py-2 bg-[#0d2a52] text-white text-sm font-semibold rounded-lg hover:bg-[#1a3d6e] transition-colors"
                >
                    {{ __('translate.create') || 'UTWÓRZ' }}
                </Link>
            </div>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <!-- FILTRY -->
                <div class="bg-white rounded-lg shadow p-6 mb-6">
                    <h3 class="text-lg font-semibold mb-4">{{ __('translate.filter') || 'Filtruj' }}</h3>

                    <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-4">
                        <!-- ID -->
                        <div>
                            <input
                                v-model="params.id"
                                type="number"
                                placeholder="ID"
                                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                            />
                        </div>

                        <!-- Miasto -->
                        <div>
                            <input
                                v-model="params.city"
                                type="text"
                                :placeholder="__('translate.City') || 'MIASTO'"
                                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                            />
                        </div>

                        <!-- Data -->
                        <div>
                            <input
                                v-model="params.date"
                                type="date"
                                :placeholder="__('translate.date') || 'DATA'"
                                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                            />
                        </div>

                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-4">
                        <!-- Branża (Category) -->
                        <div>
                            <multiselect
                                v-model="params.category"
                                :options="props.categories"
                                track-by="value"
                                label="name"
                                :selectLabel="__('translate.selectLabel')"
                                :selectedLabel="__('translate.selectedLabel')"
                                :deselectLabel="__('translate.deselectLabel')"
                                :placeholder="__('translate.placeholderCategory')"
                            >
                                <template #noResult>
                                    <span>{{__('translate.noOptions')}}</span>
                                </template>
                            </multiselect>
                        </div>

                        <!-- Podbranża (CategorySub) -->
                        <div>
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
                            >
                                <template #noResult>
                                    <span>{{__('translate.noOptions')}}</span>
                                </template>
                            </multiselect>
                        </div>

                        <!-- Zawód (Profession) -->
                        <div>
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
                            >
                                <template #noResult>
                                    <span>{{__('translate.noOptions')}}</span>
                                </template>
                            </multiselect>
                        </div>

                        <!-- Stanowisko (Position) -->
                        <div>
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
                            >
                                <template #noResult>
                                    <span>{{__('translate.noOptions')}}</span>
                                </template>
                            </multiselect>
                        </div>
                    </div>
                    <!-- Przyciski filtrów -->
                    <div class="flex gap-3">
                        <button
                            @click="applyFilters"
                            :disabled="isLoading"
                            class="px-6 py-2 bg-[#0d2a52] text-white text-sm font-semibold rounded-lg hover:bg-[#1a3d6e] transition-colors disabled:opacity-50 disabled:cursor-not-allowed flex items-center gap-2"
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
                            class="px-6 py-2 bg-white border border-gray-300 text-gray-700 text-sm font-semibold rounded-lg hover:bg-gray-50 transition-colors disabled:opacity-50 disabled:cursor-not-allowed"
                        >
                            {{ __('translate.reset') || 'RESETUJ' }}
                        </button>
                    </div>
                </div>

                <!-- LISTA PROJEKTÓW -->
                <div class="relative space-y-4">
                    <!-- Spinner Overlay -->
                    <div v-if="isLoading" class="absolute inset-0 bg-white bg-opacity-75 flex items-center justify-center z-10 rounded-lg">
                        <div class="flex flex-col items-center gap-3">
                            <svg class="animate-spin h-12 w-12 text-[#0d2a52]" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                                <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                            </svg>
                            <p class="text-[#0d2a52] font-semibold">{{ __('translate.searching') || 'Wyszukiwanie...' }}</p>
                        </div>
                    </div>

                    <!-- Projekt karta -->
                    <div
                        v-for="project in projects.data"
                        :key="project.id"
                        class="bg-white rounded-lg shadow p-4 hover:shadow-lg transition-shadow"
                    >
                        <!-- Górna linia -->
                        <div class="flex items-center justify-between mb-3">
                            <div class="flex items-center gap-3">
                                <span class="text-blue-500 font-semibold text-sm">ID {{ project.id }}</span>
                                <span class="text-gray-400">•</span>
                                <span class="text-sm text-gray-700 font-medium">
                                    {{ project.position }}
                                </span>
                            </div>
                            <span class="text-xs text-gray-500">
                                {{ project.created_at }}
                            </span>
                        </div>

                        <!-- Lokalizacja -->
                        <div class="mb-3">
                            <p class="text-sm text-gray-600">
                                <span v-if="project.country">{{ project.country }}</span>
                                <span v-if="project.country && project.city"> • </span>
                                <span v-if="project.city">{{ project.city }}</span>
                                <span v-if="!project.country && !project.city" class="text-gray-400">{{ __('translate.noLocation') || 'Brak lokalizacji' }}</span>
                            </p>
                            <p v-if="project.basicSalaryFrom" class="text-xs text-gray-500 mt-1 font-semibold">
                                {{ project.basicSalaryFrom }} {{ project.currency }}
                            </p>
                        </div>

                        <!-- Statystyki i przyciski -->
                        <div class="flex items-center justify-between gap-4 pt-3 border-t">
                            <!-- Statystyki -->
                            <div class="flex items-center gap-6 text-xs flex-1">
                                <div class="text-center">
                                    <div class="text-gray-500 uppercase mb-1 font-medium">{{ __('translate.views') || 'Wyświetlenia' }}</div>
                                    <div class="font-bold text-gray-900">{{ project.views_count }}</div>
                                </div>

                                <div class="text-center">
                                    <div class="text-gray-500 uppercase mb-1 font-medium">{{ __('translate.applications') || 'Aplikacje' }}</div>
                                    <div class="font-bold text-gray-900">{{ project.aplications_count }}</div>
                                </div>

                                <div class="text-center">
                                    <div class="text-gray-500 uppercase mb-1 font-medium">{{ __('translate.yes') || 'Tak' }}</div>
                                    <div class="font-bold" style="color: #0d2a52;">{{ project.yes_count }}</div>
                                </div>

                                <div class="text-center">
                                    <div class="text-gray-500 uppercase mb-1 font-medium">{{ __('translate.no') || 'Nie' }}</div>
                                    <div class="font-bold" style="color: #e31e24;">{{ project.no_count }}</div>
                                </div>

                                <div class="text-center">
                                    <div class="text-gray-500 uppercase mb-1 font-medium">{{ __('translate.maybe') || 'Może' }}</div>
                                    <div class="font-bold" style="color: #00a0e3;">{{ project.maybe_count }}</div>
                                </div>
                            </div>

                            <!-- Przyciski akcji -->
                            <div class="flex gap-2">
                                <Link
                                    :href="route('project-recruits.show', project)"
                                    class="px-4 py-2 bg-[#0d2a52] text-white text-sm font-semibold rounded-lg hover:bg-[#1a3d6e] transition-colors"
                                >
                                    {{ __('translate.show') || 'POKAŻ' }}
                                </Link>

                                <Link
                                    v-if="can['editing projects']"
                                    :href="route('project-recruits.edit', project)"
                                    class="px-4 py-2 bg-white border border-gray-300 text-gray-700 text-sm font-semibold rounded-lg hover:bg-gray-50 transition-colors"
                                >
                                    {{ __('translate.edit') || 'EDYTUJ' }}
                                </Link>

                                <button
                                    @click="duplicateProject(project)"
                                    class="px-4 py-2 bg-white border border-gray-300 text-gray-700 text-sm font-semibold rounded-lg hover:bg-gray-50 transition-colors"
                                >
                                    {{ __('translate.duplicate') || 'DUPLIKUJ' }}
                                </button>

                                <button
                                    @click="openModal(project)"
                                    class="px-4 py-2 bg-[#e31e24] text-white text-sm font-semibold rounded-lg hover:bg-red-700 transition-colors"
                                >
                                    {{ __('translate.delete') || 'USUŃ' }}
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Brak projektów -->
                    <div v-if="!projects.data.length" class="bg-white rounded-lg shadow p-12 text-center">
                        <svg class="w-16 h-16 text-gray-300 mx-auto mb-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                        </svg>
                        <p class="text-gray-500 font-medium">{{ __('translate.notFoundProjects') }}</p>
                    </div>
                </div>

                <!-- PAGINACJA -->
                <Pagination v-if="projects.total > 10" class="mt-6" :links="projects.links" />
            </div>

            <!-- MODAL USUWANIA -->
            <DialogModal :show="confirmCancelProject" @close="confirmCancelProject = false">
                <template #title>
                    {{ __('translate.questionDelete') }} - {{ __('translate.project').toLowerCase() }} id. {{ selectedProject && selectedProject.id }}
                </template>

                <template #content>
                    {{ __('translate.questionDeleteConfirm') }} - {{ __('translate.project').toLowerCase() }} id.{{ selectedProject && selectedProject.id }}
                </template>

                <template #footer>
                    <SecondaryButton @click.native="confirmCancelProject = false">
                        {{ __('translate.cancel') }}
                    </SecondaryButton>

                    <DangerButton class="ml-2" @click.native="DeleteProject">
                        {{ __('translate.delete') }}
                    </DangerButton>
                </template>
            </DialogModal>
        </div>
    </AppLayout>
</template>

<style src="vue-multiselect/dist/vue-multiselect.css"></style>
<style lang="scss">
.multiselect__tags {
    border: 1px solid #d1d5db; /* border-gray-300 */
    border-radius: 0.5rem; /* rounded-lg */
    padding: 0.75rem 2.5rem 0.75rem 1rem; /* px-4 py-3, but with space for the arrow */
}

.multiselect__placeholder {
    margin-bottom: 0;
    padding-top: 0;
    color: #9ca3af; /* text-gray-400 */
}

.multiselect__single {
    margin-bottom: 0;
    padding-left: 0;
    font-size: 1rem;
}

.multiselect__input {
    margin-bottom: 0;
}

.multiselect__select {
    height: 100%;
    width: 2.5rem;
}

.multiselect__option--highlight {
    background: #0d2a52 !important; /* work-main */
    outline: none;
    color: white;
}

.multiselect__option--highlight:after {
    background: #0d2a52 !important;
}

.multiselect__option--selected {
    background: #f3f4f6 !important; /* gray-100 */
    color: #0d2a52;
    font-weight: bold;
}

.multiselect__option--selected.multiselect__option--highlight {
    background: #0d2a52 !important;
    color: #fff;
}

.multiselect__tag {
    background: #0d2a52 !important;
}

.multiselect__tag-icon:after {
    color: white !important;
}

.multiselect__tag-icon:hover {
    background: #1e3a8a !important; /* darker blue */
}

.multiselect__content-wrapper {
    border: 1px solid #d1d5db;
    border-top: none;
    border-bottom-left-radius: 0.5rem;
    border-bottom-right-radius: 0.5rem;
}
</style>
