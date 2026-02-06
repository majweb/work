<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import {Link, usePage} from '@inertiajs/vue3';
import {computed, ref, watch} from 'vue';
import { router } from '@inertiajs/vue3';
import { debounce, pickBy } from 'lodash';
import InputLabel from '@/Components/InputLabel.vue';
import TextInput from '@/Components/TextInput.vue';
import __ from '@/lang.js';
import Multiselect from "vue-multiselect";
const locale = computed(()=>usePage().props.language);

const props = defineProps({
    candidates: Object,
    filters: Object,
    categories: Array,
    projects: Array,
    customTags: Array,
    optionsRecruits: Object,
    optionsPosition: Object,
});

const loading = ref(false);


const form = ref({
    name: props.filters.name || '',
    surname: props.filters.surname || '',
    email: props.filters.email || '',
    recruiter: props.filters?.recruiter || '',
    position: props.filters?.position || '',
    phone: props.filters.phone || '',
    project: props.filters.project || '',
    tags: props.filters.tags || [],
});

const getLocalizedTitle = (title) => {
    if (!title) return '';
    return title[locale] || title['pl'] || (Object.values(title).length > 0 ? Object.values(title)[0] : '');
};


const selectedTags = ref([]);
const professionCategories = ref(props.categories || []);
const customTags = ref(props.customTags || []);

const currentCategoryPage = ref(1);
const categoriesPerPage = 60; // Liczba kategorii na stronę
const tagColors = {};
const categorySearchQuery = ref('');
const customTagSearchQuery = ref('');


const getTagColor = (id) => {
    if (!tagColors[id]) {
        // Generowanie pastelowych kolorów
        const hue = (id * 137.5) % 360;
        const saturation = 60 + (id % 20);
        const lightness = 75 + (id % 15);
        tagColors[id] = `hsl(${hue}, ${saturation}%, ${lightness}%)`;
    }
    return tagColors[id];
};

const toggleCategoryTag = (category) => {
    const index = selectedTags.value.findIndex(tag =>
        tag.id === category.id && tag.type === 'category'
    );

    if (index === -1) {
        selectedTags.value.push({
            id: category.id,
            title: getLocalizedTitle(category.title),
            rawTitle: category.title,
            type: 'category'
        });
    } else {
        selectedTags.value.splice(index, 1);
    }
};

const getContrastColorText = (bgColor) => {
    if (!bgColor) return '#000';
    const color = bgColor.replace('#', '');
    const r = parseInt(color.substr(0,2),16);
    const g = parseInt(color.substr(2,2),16);
    const b = parseInt(color.substr(4,2),16);
    return (r*0.299 + g*0.587 + b*0.114) > 186 ? '#000' : '#fff';
};



const getContrastColor = (backgroundColor) => {
    // Prosty algorytm do określenia ciemności koloru
    const rgb = hexToRgb(backgroundColor) || { r: 200, g: 200, b: 200 };
    const brightness = (rgb.r * 299 + rgb.g * 587 + rgb.b * 114) / 1000;
    return brightness > 128 ? '#000000' : '#FFFFFF';
};

// Konwersja HSL do RGB
const hexToRgb = (hex) => {
    // Jeśli to jest format HSL, zwracamy domyślne wartości
    if (hex.startsWith('hsl')) {
        return { r: 200, g: 200, b: 200 };
    }

    // Konwersja HEX do RGB
    const shorthandRegex = /^#?([a-f\d])([a-f\d])([a-f\d])$/i;
    hex = hex.replace(shorthandRegex, (m, r, g, b) => r + r + g + g + b + b);

    const result = /^#?([a-f\d]{2})([a-f\d]{2})([a-f\d]{2})$/i.exec(hex);
    return result ? {
        r: parseInt(result[1], 16),
        g: parseInt(result[2], 16),
        b: parseInt(result[3], 16)
    } : null;
};
// Obliczanie całkowitej liczby stron dla kategorii
const totalCategoryPages = computed(() => {
    return Math.ceil(filteredCategories.value.length / categoriesPerPage);
});

// Filtrowanie kategorii posiadających tłumaczenie w aktualnym języku i pasujące do wyszukiwania
const filteredCategories = computed(() => {
    const locale = usePage().props.language || 'pl';
    return professionCategories.value.filter(category => {
        if (!category || !category.title) return false;
        const hasValidTitle = category.title[locale] && category.title[locale].trim() !== '';

        // Jeśli jest fraza wyszukiwania, sprawdź czy kategoria ją zawiera
        if (categorySearchQuery.value.trim() !== '') {
            const searchTerm = categorySearchQuery.value.toLowerCase();
            const localizedTitle = (category.title[locale] || '').toLowerCase();
            return hasValidTitle && localizedTitle.includes(searchTerm);
        }

        return hasValidTitle;
    });
});

// Pobranie paginowanych kategorii
const paginatedCategories = computed(() => {
    const startIndex = (currentCategoryPage.value - 1) * categoriesPerPage;
    const endIndex = startIndex + categoriesPerPage;
    return filteredCategories.value.slice(startIndex, endIndex);
});

// Resetowanie strony przy zmianie zapytania wyszukiwania
watch(categorySearchQuery, () => {
    currentCategoryPage.value = 1;
});
const resetFilters = () => {
    console.log('ssss')
    form.value = {
        name: '',
        surname: '',
        recruiter:'',
        position:'',
        email: '',
        phone: '',
        project: '',
        tags: [],
    };
    selectedTags.value = [];

    router.get(route('candidates.index'), {}, {
        preserveState: true,
        replace: true,
        preserveScroll:true,
        onFinish: () => {
            loading.value = false;
        },
    });
};

watch(form, debounce(function () {
    loading.value = true;

    let rest = pickBy({
        ...form.value,
        recruiter: form.value.recruiter?.value || form.value.recruiter,
        position: form.value.position?.value || form.value.position,
        tags: form.value.tags?.map(el => el.id).join(',')
    });

    router.get(route('candidates.index'), rest, {
        preserveState: true,
        preserveScroll: true,
        replace: true,
        onFinish: () => {
            loading.value = false;
        },
    });
}, 300), { deep: true });

const getBackgroundStyle = (candidate) => {
    if (candidate.created_by?.color) {
        return {
            backgroundColor: `${candidate.created_by.color}15` // Dodajemy 15 na końcu dla przezroczystości
        }
    }
    return {}
}

const removeTag = (tag) => {
    const index = selectedTags.value.findIndex(t =>
        t.id === tag.id && t.type === tag.type
    );

    if (index !== -1) {
        selectedTags.value.splice(index, 1);
        // Po usunięciu ostatniego tagu, zapewniamy że będzie pusta tablica
        if (selectedTags.value.length === 0) {
            selectedTags.value = [];
        }
    }
};

// Filtrowanie tagów niestandardowych na podstawie wyszukiwania
const filteredCustomTags = computed(() => {
    // Upewnij się, że customTags.value jest tablicą
    const tags = Array.isArray(customTags.value) ? customTags.value : [];

    if (customTagSearchQuery.value.trim() === '') {
        return tags;
    }

    const searchTerm = customTagSearchQuery.value.toLowerCase();
    return tags.filter(tag => {
        return tag.name.toLowerCase().includes(searchTerm);
    });
});

const toggleCustomTag = (tag) => {
    const index = selectedTags.value.findIndex(t =>
        t.id === tag.id && t.type === 'custom'
    );

    if (index === -1) {
        selectedTags.value.push({
            id: tag.id+'s',
            name: tag.name,
            type: 'custom'
        });
    } else {
        selectedTags.value.splice(index, 1);
    }
};


watch(selectedTags, (newTags) => {
    form.value.tags = [...newTags];
}, { deep: true });

</script>

<template>
    <AppLayout :title="__('translate.candidates')">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('translate.candidates') }}
            </h2>
        </template>

        <div class="py-12">
            <div
                v-if="loading"
                class="fixed inset-0 z-[9999] flex items-center justify-center bg-white/90"
            >
                <div class="h-12 w-12 animate-spin rounded-full border-4 border-gray-200 border-t-work-main"></div>
            </div>

            <div class="max-w-screen-2xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white shadow-xl sm:rounded-lg p-6">
                    <!-- Header -->
                    <div class="mb-6">
                        <h1 class="text-2xl font-semibold text-gray-900">
                            {{ __('translate.candidatesList') }}
                        </h1>
                        <p class="mt-1 text-sm text-gray-500">
                            {{__('translate.candidatesListP')}}
                        </p>
                    </div>

                    <!-- Formularz filtrowania -->
                    <div class="mb-6 bg-gray-50 p-4 rounded-lg">
                        <h4 class="font-medium text-gray-700 mb-3">{{ __('translate.filterCandidates') }}</h4>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                            <div>
                                <InputLabel :value="__('translate.name')" />
                                <TextInput
                                    v-model="form.name"
                                    type="text"
                                    class="w-full"
                                    :placeholder="__('translate.enterName')"
                                />
                            </div>
                            <div>
                                <InputLabel :value="__('translate.surname')" />
                                <TextInput
                                    v-model="form.surname"
                                    type="text"
                                    class="w-full"
                                    :placeholder="__('translate.enterSurname')"
                                />
                            </div>
                            <div>
                                <InputLabel :value="__('translate.email')" />
                                <TextInput
                                    v-model="form.email"
                                    type="text"
                                    class="w-full"
                                    :placeholder="__('translate.enterEmail')"
                                />
                            </div>
                            <div>
                                <InputLabel :value="__('translate.recruiter')"/>
                                <multiselect
                                    :selectLabel="__('translate.selectLabel')"
                                    :selectGroupLabel="__('translate.selectGroupLabel')"
                                    :selectedLabel="__('translate.selectedLabel')"
                                    :deselectLabel="__('translate.deselectLabel')"
                                    :noOptions="__('translate.noOptions')"
                                    :noResult="__('translate.noResult')"
                                    track-by="value"
                                    label="name"
                                    :placeholder="__('translate.placeholder')"
                                    v-model="form.recruiter" :options="optionsRecruits">
                                    <template #noResult>
                                        <span>{{__('translate.noOptions')}}</span>
                                    </template>
                                    <template #noOptions>
                                        <span>{{__('translate.noResult')}}</span>
                                    </template>
                                </multiselect>
                            </div>
                            <div>
                                <InputLabel :value="__('translate.position')"/>
                                <multiselect
                                    :selectLabel="__('translate.selectLabel')"
                                    :selectGroupLabel="__('translate.selectGroupLabel')"
                                    :selectedLabel="__('translate.selectedLabel')"
                                    :deselectLabel="__('translate.deselectLabel')"
                                    :noOptions="__('translate.noOptions')"
                                    :noResult="__('translate.noResult')"
                                    track-by="value"
                                    label="name"
                                    :placeholder="__('translate.placeholder')"
                                    v-model="form.position"
                                    :options="optionsPosition">
                                </multiselect>
                            </div>
                            <div>
                                <InputLabel :value="__('translate.phone')" />
                                <TextInput
                                    v-model="form.phone"
                                    type="text"
                                    class="w-full"
                                    :placeholder="__('translate.enterPhone')"
                                />
                            </div>
                            <div class="col-span-2">
                                <InputLabel :value="__('translate.project')" />
                                <select
                                    v-model="form.project"
                                    class="w-full border-work-main focus:border-work-main rounded-md shadow-sm"
                                >
                                    <option value="">{{ __('translate.allProjects') }}</option>
                                    <option v-for="project in projects" :key="project.id" :value="project.id">
                                        {{ project.id }}
                                    </option>
                                </select>
                            </div>
                        </div>
                        <div class="mb-4">
                            <h4 class="text-md font-medium text-gray-700 mb-2">{{ __('translate.professionCategories') }}</h4>
                            <!-- Pole wyszukiwania kategorii -->
                            <div class="mb-3">
                                <input
                                    type="text"
                                    v-model="categorySearchQuery"
                                    class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500"
                                    :placeholder="__('translate.searchCategories')"
                                />
                            </div>
                            <div>
                                <div class="flex flex-wrap gap-2 mb-3">
                                    <span v-for="category in paginatedCategories" :key="category.id"
                                          class="px-3 py-1 rounded-full text-sm font-medium cursor-pointer transition-colors"
                                          :style="{ backgroundColor: getTagColor(category.id), color: getContrastColor(getTagColor(category.id)) }"
                                          @click="toggleCategoryTag(category)">
                                        {{category.title?.[locale]}}
                                    </span>
                                    <span v-if="filteredCategories.length === 0" class="text-gray-500 text-sm">
                                        {{ categorySearchQuery ? __('translate.noMatchingCategories') : __('translate.noCategoriesAvailable') }}
                                    </span>
                                </div>
                                <div class="flex justify-between items-center mt-4" v-if="filteredCategories.length > categoriesPerPage">
                                    <button
                                        @click="currentCategoryPage = Math.max(currentCategoryPage - 1, 1)"
                                        :disabled="currentCategoryPage === 1"
                                        class="px-3 py-1 bg-gray-200 rounded text-sm disabled:opacity-50"
                                    >
                                        &lt; {{__('translate.previous')}}
                                    </button>
                                    <span class="text-sm">{{__('translate.page')}} {{ currentCategoryPage }} / {{ totalCategoryPages }}</span>
                                    <button
                                        @click="currentCategoryPage = Math.min(currentCategoryPage + 1, totalCategoryPages)"
                                        :disabled="currentCategoryPage === totalCategoryPages"
                                        class="px-3 py-1 bg-gray-200 rounded text-sm disabled:opacity-50"
                                    >
                                        {{__('translate.next')}} &gt;
                                    </button>
                                </div>
                                <!-- Przycisk do czyszczenia wyszukiwania -->
                                <div v-if="categorySearchQuery" class="mt-2 text-right">
                                    <button
                                        @click="categorySearchQuery = ''; currentCategoryPage = 1"
                                        class="text-indigo-600 text-sm hover:text-indigo-800"
                                    >
                                        {{ __('translate.clearSearch') }}
                                    </button>
                                </div>
                            </div>
                        </div>
                        <!-- Sekcja tagów firmowych -->
                        <div>
                            <h4 class="text-md font-medium text-gray-700 mb-2">{{ __('translate.customTags') }}</h4>
                            <!-- Pole wyszukiwania tagów niestandardowych -->
                            <div class="mb-3">
                                <input
                                    type="text"
                                    v-model="customTagSearchQuery"
                                    class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500"
                                    :placeholder="__('translate.searchCustomTags')"
                                />
                            </div>
                            <div class="flex flex-wrap gap-2">
                                <span v-for="tag in filteredCustomTags" :key="tag.id"
                                      class="px-3 py-1 rounded-full text-sm font-medium cursor-pointer transition-colors"
                                      :style="{ backgroundColor: tag.color || '#ccc', color: getContrastColorText(tag.color) }"
                                      @click="toggleCustomTag(tag)">
                                    {{ tag.name }}
                                </span>
                                <span v-if="filteredCustomTags.length === 0" class="text-gray-500 text-sm">
                                    {{ customTagSearchQuery ? __('translate.noMatchingTags') : __('translate.noTagsAvailable') }}
                                </span>
                            </div>
                            <!-- Przycisk do czyszczenia wyszukiwania tagów niestandardowych -->
                            <div v-if="customTagSearchQuery" class="mt-2 text-right">
                                <button
                                    @click="customTagSearchQuery = ''"
                                    class="text-indigo-600 text-sm hover:text-indigo-800"
                                >
                                    {{ __('translate.clearSearch') }}
                                </button>
                            </div>
                        </div>
                        <!-- Sekcja wybranych tagów -->
                        <div class="mt-4 pt-4 border-t border-gray-200">
                            <h4 class="text-md font-medium text-gray-700 mb-2">{{ __('translate.selectedTags') }}</h4>
                            <div class="flex flex-wrap gap-2">
                                <span v-for="tag in selectedTags" :key="tag.id"
                                      class="px-3 py-1 bg-indigo-100 text-indigo-800 rounded-full text-sm font-medium flex items-center">
                                    {{ tag.type === 'category' && tag.rawTitle ? tag.rawTitle?.[locale] : (tag.name || tag.title) }}
                                    <button @click="removeTag(tag)" class="ml-1 text-indigo-600 hover:text-indigo-800">
                                        &times;
                                    </button>
                                </span>
                                <span v-if="selectedTags.length === 0" class="text-gray-500 text-sm">{{ __('translate.noTagsSelected') }}</span>
                            </div>
                        </div>




                        <div class="flex justify-end space-x-3">
                            <button
                                @click="resetFilters"
                                type="button"
                                class="px-4 py-2 bg-gray-200 text-gray-700 rounded-md hover:bg-gray-300 transition"
                            >
                                {{ __('translate.resetFilters') }}
                            </button>
                        </div>
                    </div>

                    <div v-if="candidates.data.length === 0" class="text-center py-8 text-gray-500">
                        {{ __('translate.noCandidatesAvailable') }}
                    </div>
                    <div v-else class="overflow-x-auto">
                        <div class="flex items-center justify-between mb-3">
                            <h2 class="text-sm font-semibold text-gray-900">
                                {{ __('translate.foundCandidates') }} ({{ candidates?.data?.length || 0 }})
                            </h2>
                        </div>

                        <div v-if="candidates.data.length === 0" class="text-center py-12 text-gray-500">
                            {{ __('translate.noCandidatesAvailable') }}
                        </div>

                        <div v-else class="space-y-3">
                            <div
                                v-for="candidate in candidates.data"
                                :key="candidate.id"
                                :style="getBackgroundStyle(candidate)"
                                class="grid grid-cols-1 md:grid-cols-12 gap-4 px-6 py-4 bg-white border border-gray-200 hover:bg-gray-50 transition-all items-center rounded-lg"
                            >
                                <!-- ID -->
                                <div class="col-span-1">
                                    <div class="text-[11px] font-semibold text-gray-400 uppercase tracking-wide">
                                        ID
                                    </div>
                                    <div class="text-sm font-bold text-gray-900">
                                        {{ candidate.id }}
                                    </div>
                                </div>

                                <!-- Candidate -->
                                <div class="col-span-3">
                                    <div class="text-[11px] font-semibold text-gray-400 uppercase tracking-wide mb-1">
                                        {{ __('translate.candidate') ?? 'Kandydat' }}
                                    </div>

                                    <div class="flex items-center space-x-3">
                                        <div class="w-12 h-12 rounded-full bg-work-main flex items-center justify-center text-white font-bold text-lg overflow-hidden">
                                            <img
                                                v-if="candidate.user_by_email?.profile_photo_url"
                                                :src="candidate.user_by_email?.profile_photo_url"
                                                :alt="candidate.name"
                                                class="w-full h-full object-cover"
                                            />
                                            <span v-else>
                        {{ (candidate.name?.[0] || '') + (candidate.surname?.[0] || '') }}
                    </span>
                                        </div>

                                        <div>
                                            <div class="font-bold text-gray-900">
                                                {{ candidate.name }} {{ candidate.surname }}
                                            </div>
                                            <div class="text-sm text-gray-500">
                                                {{ candidate.email || '-' }}
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Phone -->
                                <div class="col-span-1">
                                    <div class="text-[11px] font-semibold text-gray-400 uppercase tracking-wide">
                                        {{ __('translate.phone') }}
                                    </div>
                                    <div class="text-sm text-gray-700">
                                        {{ candidate.phone || '-' }}
                                    </div>
                                </div>

                                <!-- Project -->
                                <div class="col-span-1">
                                    <div class="text-[11px] font-semibold text-gray-400 uppercase tracking-wide mb-1">
                                        {{ __('translate.project') }}
                                    </div>

                                    <div class="flex flex-wrap gap-2">
                                        <template v-if="candidate.projects && candidate.projects.length > 0">
                                            <Link
                                                v-for="project in candidate.projects"
                                                :key="project.id"
                                                :href="route('project-recruits.show', project.id)"
                                                class="text-xs font-semibold text-blue-700 bg-blue-50 border border-blue-200 px-3 py-1 rounded-full hover:bg-blue-100 transition"
                                            >
                                                ID: {{ project.id }}
                                            </Link>
                                        </template>

                                        <span v-else class="text-sm text-gray-500">
                    {{ candidate.project?.id ? `ID: ${candidate.project.id}` : '-' }}
                </span>
                                    </div>
                                </div>

                                <!-- Tags -->
                                <div class="col-span-4">
                                    <div class="text-[11px] font-semibold text-gray-400 uppercase tracking-wide mb-1">
                                        {{ __('translate.tags') }}
                                    </div>

                                    <div class="flex flex-wrap gap-2 w-full">
                                        <template v-if="candidate.tags && candidate.tags.length">
                    <span
                        v-for="tag in candidate.tags"
                        :key="tag.id"
                        class="px-3 py-1 rounded-full text-xs font-medium transition-colors"
                        :style="{ backgroundColor: getTagColor(tag.id + 1000), color: getContrastColor(getTagColor(tag.id + 1000)) }"
                    >
                        {{ tag.title?.[usePage().props.language] || '-' }}
                    </span>
                                        </template>

                                        <span v-else class="text-xs text-gray-500">-</span>
                                    </div>
                                </div>

                                <!-- Actions -->
                                <div class="col-span-2">
                                    <div class="text-[11px] font-semibold text-gray-400 uppercase tracking-wide mb-1 text-right">
                                        {{ __('translate.actions') }}
                                    </div>

                                    <div class="flex flex-wrap md:justify-end gap-3">
                                        <Link
                                            :href="route('candidates.show', candidate.id)"
                                            class="px-4 py-2 bg-blue-900 text-white font-bold text-xs rounded-lg hover:bg-blue-800 transition-all uppercase whitespace-nowrap"
                                        >
                                            {{ __('translate.candidateDetails') }}
                                        </Link>

                                        <Link
                                            :href="route('candidates.evidence', candidate.id)"
                                            class="px-4 py-2 bg-blue-500 text-white font-bold text-xs rounded-lg hover:bg-blue-600 transition-all uppercase whitespace-nowrap"
                                        >
                                            {{ __('translate.evidence') }}
                                        </Link>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <!-- Paginacja -->
                        <div class="mt-6" v-if="candidates.links.length > 3">
                            <div class="flex flex-wrap -mb-1">
                                <template v-for="(link, index) in candidates.links" :key="index">
                                    <div v-if="link.url === null" class="mb-1 mr-1 px-4 py-3 text-sm leading-4 text-gray-400 border rounded" v-html="link.label"></div>
                                    <Link preserveScroll v-else class="mb-1 mr-1 px-4 py-3 text-sm leading-4 border rounded hover:bg-indigo-50 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2" :class="{'bg-indigo-600 text-white': link.active}" :href="link.url" v-html="link.label"></Link>
                                </template>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </AppLayout>
</template>
<style src="vue-multiselect/dist/vue-multiselect.css"></style>
<style lang="scss">
.multiselect__tag{
    background: #0A2C5C !important;
}
.multiselect__option--highlight {
    background: #0A2C5C !important;
    outline: none;
    color: white;
}

.multiselect__option--highlight:after {
    content: attr(data-select);
    background: #0A2C5C !important;
    color: white;
}

.multiselect__option--selected {
    background: #12315d !important;
    color: white;
    font-weight: bold;
}

.multiselect__option--selected.multiselect__option--highlight {
    background: #12315d !important;
    color: #fff;
}

.multiselect__option--selected.multiselect__option--highlight:after {
    background: #12315d !important;
    content: attr(data-deselect);
    color: white !important;
}

.multiselect__option--selected:after {
    content: attr(data-selected);
    color: #12315d;
    background: transparent !important;
}
</style>
