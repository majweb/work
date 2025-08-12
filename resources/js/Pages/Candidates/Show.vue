<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import {Link, useForm, usePage} from '@inertiajs/vue3';
import __ from '@/lang.js';
import { ref, onMounted, computed, watch } from 'vue';
import axios from 'axios';

const props = defineProps({
    candidate: Object,
    candidateProjects: Array,
    candidateFullProjects: Array,
    categories: Array,
    customTags: Array,
    selectedCandidateTags: Array
});
const locale = computed(()=>usePage().props.language);

// Dane
const professionCategories = ref(props.categories || []);
const customTags = ref(props.customTags || []);
const selectedTags = ref(props.selectedCandidateTags || []);
const currentCategoryPage = ref(1);
const categoriesPerPage = 60; // Liczba kategorii na stronę
const tagColors = {};
const categorySearchQuery = ref('');
const customTagSearchQuery = ref('');

// Upewniamy się, że selectedTags jest zawsze tablicą
if (!Array.isArray(selectedTags.value)) {
    selectedTags.value = [];
}

// Funkcje pomocnicze
const getLocalizedTitle = (title) => {
    if (!title) return '';
    return title[locale] || title['pl'] || (Object.values(title).length > 0 ? Object.values(title)[0] : '');
};

// Funkcje pomocnicze do projektów
const getLocalizedProjectTitle = (project) => {
    if (!project.title) return __('translate.projectWithoutTitle');
    return getLocalizedProjectAttribute(project, 'title');
};

const getLocalizedProjectAttribute = (project, attributeName) => {
    if (!project[attributeName]) return '';
    const attribute = project[attributeName];

    if (!attribute) return '';

    // Jeśli to nie jest obiekt/tablica, zwróć wartość bezpośrednio
    if (typeof attribute !== 'object') return attribute;

    // Pobierz aktualny język z usePage

    // Jeśli to jest tablica obiektów (np. country) spróbuj pobrać nazwę
    if (Array.isArray(attribute)) {
        return attribute;
    }

    // Jeśli to jest obiekt tłumaczeń
    if (attribute[locale]) return attribute[locale];
    if (attribute['pl']) return attribute['pl'];

    // Jeśli nie znaleziono tłumaczenia, zwróć pierwszą dostępną wartość
    const firstKey = Object.keys(attribute)[0];
    return firstKey ? attribute[firstKey] : '';
};

// Generowanie kolorów dla tagów
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

// Określanie koloru tekstu na podstawie tła
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

// Obsługa tagów
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

const toggleCustomTag = (tag) => {
    const index = selectedTags.value.findIndex(t =>
        t.id === tag.id && t.type === 'custom'
    );

    if (index === -1) {
        selectedTags.value.push({
            id: tag.id,
            name: tag.name,
            type: 'custom'
        });
    } else {
        selectedTags.value.splice(index, 1);
    }
};

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

const form = useForm({
    tags: []
});

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

// Filtrowanie tagów niestandardowych na podstawie wyszukiwania
const filteredCustomTags = computed(() => {
    if (customTagSearchQuery.value.trim() === '') {
        return customTags.value;
    }

    const searchTerm = customTagSearchQuery.value.toLowerCase();
    return customTags.value.filter(tag => {
        return tag.name.toLowerCase().includes(searchTerm);
    });
});


const saveTags = () => {
    console.log(selectedTags.value)
    // Przygotowanie tagów do zapisu - musimy mieć tylko id i type
    const tagsToSave = Array.isArray(selectedTags.value) ? selectedTags.value.map(tag => ({
        id: tag.id,
        type: tag.type
    })) : [];

    form.tags = tagsToSave;
    form.post(route('candidates.saveTags', props.candidate.id), {
        preserveScroll: true
    });
};

// Resetowanie strony przy zmianie zapytania wyszukiwania
watch(categorySearchQuery, () => {
    currentCategoryPage.value = 1;
});

// Pobieranie danych
onMounted(async () => {
    if (!professionCategories.value || professionCategories.value.length === 0) {
        try {
            const response = await axios.get(route('categories.index'));
            professionCategories.value = response.data;
            console.log('Pobrane kategorie:', professionCategories.value);
        } catch (error) {
            console.error('Błąd podczas pobierania kategorii:', error);
        }
    }

    if (!customTags.value || customTags.value.length === 0) {
        try {
            const response = await axios.get(route('tags.index'));
            customTags.value = response.data;
        } catch (error) {
            console.error('Błąd podczas pobierania tagów:', error);
        }
    }

    if (!selectedTags.value || selectedTags.value.length === 0) {
        try {
            const response = await axios.get(route('candidates.getTags', props.candidate.id));
            // Przetwarzanie otrzymanych tagów, aby poprawnie obsługiwać dane
            selectedTags.value = response.data.map(tag => {
                if (tag.type === 'category' && tag.rawTitle) {
                    return {
                        ...tag,
                        // Zapewniamy, że title jest wyświetlane zgodnie z aktualnym językiem
                        title: getLocalizedTitle(tag.rawTitle)
                    };
                }
                return tag;
            });
        } catch (error) {
            console.error('Błąd podczas pobierania tagów kandydata:', error);
        }
    }
});
</script>

<template>
    <AppLayout :title="__('translate.candidateDetails')">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('translate.candidateDetails') }}
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white shadow-xl sm:rounded-lg p-6">
                    <div class="mb-4">
                        <Link :href="route('candidates.index')" class="text-indigo-600 hover:text-indigo-900">
                            &larr; {{ __('translate.backToCandidates') }}
                        </Link>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <!-- Informacje o kandydacie -->
                        <div class="bg-gray-50 p-4 rounded-lg">
                            <h3 class="text-lg font-medium text-gray-900 mb-4">{{ __('translate.candidateInfo') }}</h3>

                            <div class="space-y-3">
                                <div>
                                    <span class="font-medium">{{ __('translate.name') }}:</span> {{ candidate.name }}
                                </div>
                                <div>
                                    <span class="font-medium">{{ __('translate.surname') }}:</span> {{ candidate.surname }}
                                </div>
                                <div>
                                    <span class="font-medium">{{ __('translate.email') }}:</span> {{ candidate.email }}
                                </div>
                                <div>
                                    <span class="font-medium">{{ __('translate.phone') }}:</span> {{ candidate.phone }}
                                </div>
                                <div>
                                    <span class="font-medium">{{ __('translate.status') }}:</span>
                                    <span :class="{
                                        'text-green-600': candidate.status === 'yes',
                                        'text-red-600': candidate.status === 'no',
                                        'text-yellow-600': candidate.status === 'maybe'
                                    }">
                                        {{ candidate.status ? __(`translate.status${candidate.status.charAt(0).toUpperCase() + candidate.status.slice(1)}`) : __('translate.statusPending') }}
                                    </span>
                                </div>
                                <div>
                                    <span class="font-medium">{{ __('translate.createdAt') }}:</span> {{ new Date(candidate.created_at).toLocaleDateString() }}
                                </div>
                            </div>
                        </div>

                        <!-- Informacje o projekcie -->
                        <div class="bg-gray-50 p-4 rounded-lg">
                            <!-- Lista wszystkich projektów -->
                            <h4 class="font-medium text-gray-800 mb-3">{{ __('translate.allCandidateProjects') }}</h4>

                            <!-- Sformatowane projekty z aplikacjami kandydata -->
                            <div v-if="candidateProjects && candidateProjects.length > 0" class="space-y-3 mb-6">
                                <div v-for="project in candidateProjects" :key="project.project_id" class="bg-white p-3 rounded border border-gray-200">
                                    <div class="flex justify-between items-center">
                                        <div class="font-medium flex items-center">
                                            <Link :href="route('projects.show', project.project_id)" class="text-blue-600 hover:text-blue-800">
                                                {{ project.project_name }}
                                            </Link>
                                            <span class="text-gray-500 text-sm ml-2">(ID: {{ project.project_id }})</span>
                                        </div>
                                        <div>
                                            <span class="px-2 py-1 text-xs rounded-full"
                                                  :class="{
                                                    'bg-green-100 text-green-800': project.status === 'yes',
                                                    'bg-red-100 text-red-800': project.status === 'no',
                                                    'bg-yellow-100 text-yellow-800': project.status === 'maybe',
                                                    'bg-gray-100 text-gray-800': !project.status
                                                  }">
                                                {{ project.status ? __(`translate.status${project.status.charAt(0).toUpperCase() + project.status.slice(1)}`) : __('translate.statusPending') }}
                                            </span>
                                        </div>
                                    </div>
                                    <div class="text-sm text-gray-600 mt-1">
                                        {{ __('translate.applicationDate') }}: {{ new Date(project.created_at).toLocaleDateString() }}
                                    </div>
                                    <div class="text-sm text-gray-600">
                                        <Link :href="route('aplications.show', project.application_id)" class="text-indigo-600 hover:text-indigo-800 text-sm">
                                            {{ __('translate.viewApplication') }}
                                        </Link>
                                    </div>
                                </div>
                            </div>

                            <!-- Pełne projekty kandydata -->
                            <h4 v-if="candidateFullProjects && candidateFullProjects.length > 0" class="font-medium text-gray-800 mb-3">{{ __('translate.projectDetails') }}</h4>
                            <div v-if="candidateFullProjects && candidateFullProjects.length > 0" class="space-y-3">
                                <div v-for="project in candidateFullProjects" :key="project.id" class="bg-white p-3 rounded border border-gray-200">
                                    <div class="font-medium">
                                        <Link :href="route('projects.show', project.id)" class="text-blue-600 hover:text-blue-800">
                                            {{project?.title?.[locale]}}
                                        </Link>
                                        <span class="text-gray-500 text-sm ml-2">(ID: {{ project.id }})</span>
                                    </div>
                                    <div class="text-sm text-gray-600 mt-1" v-if="project.position">
                                        <strong>{{ __('translate.position') }}:</strong> {{project.position?.allTranslations?.title?.[locale]}}

                                    </div>
                                    <div class="text-sm text-gray-600" v-if="project.workingMode">
                                        <strong>{{ __('translate.workingMode') }}:</strong>{{ getLocalizedProjectAttribute(project, 'workingMode')[0]?.allTranslations?.title?.[locale] ?? 'Brak tłumaczenia' }}
                                    </div>
                                    <div class="text-sm text-gray-600" v-if="project.country && project.country.length">
                                        <strong>{{ __('translate.country') }}:</strong>
                                        <span v-for="(country, index) in project.country" :key="index">
                                            {{ country.allTranslations?.[locale] }}{{ index < project.country.length - 1 ? ', ' : '' }}
                                        </span>
                                    </div>
                                </div>
                            </div>

                            <!-- Komunikat o braku projektów -->
                            <div v-if="(!candidateProjects || candidateProjects.length === 0) && (!candidateFullProjects || candidateFullProjects.length === 0)" class="text-gray-500">
                                {{ __('translate.noProjectsAvailable') }}
                            </div>
                        </div>
                    </div>
                    <!-- Notatki -->
                    <div class="mt-6 bg-gray-50 p-4 rounded-lg">
                        <h3 class="text-lg font-medium text-gray-900 mb-4">{{ __('translate.notes') }}</h3>

                        <div v-if="candidate.notes && candidate.notes.length > 0" class="space-y-4">
                            <div v-for="note in candidate.notes" :key="note.id" class="border-l-4 border-indigo-500 pl-4 py-2">
                                <div class="text-sm text-gray-600">{{ new Date(note.created_at).toLocaleString() }}</div>
                                <div class="mt-1">{{ note.content }}</div>
                            </div>
                        </div>
                        <div v-else class="text-gray-500">
                            {{ __('translate.noNotesAvailable') }}
                        </div>
                    </div>
                    <!-- Tagi -->
                    <div class="mt-6 bg-gray-50 p-4 rounded-lg">
                        <h3 class="text-lg font-medium text-gray-900 mb-4">{{ __('translate.tags') }}</h3>

                        <!-- Sekcja tagów kategorii zawodowych -->
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
                                      :style="{ backgroundColor: getTagColor(tag.id + 1000), color: getContrastColor(getTagColor(tag.id + 1000)) }"
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
                                    {{}}
                                    {{ tag.type === 'category' && tag.rawTitle ? tag.rawTitle?.[locale] : (tag.name || tag.title) }}
                                    <button @click="removeTag(tag)" class="ml-1 text-indigo-600 hover:text-indigo-800">
                                        &times;
                                    </button>
                                </span>
                                <span v-if="selectedTags.length === 0" class="text-gray-500 text-sm">{{ __('translate.noTagsSelected') }}</span>
                            </div>

                            <div class="mt-4">
                                <button
                                    @click="saveTags"
                                    class="px-4 py-2 bg-indigo-600 text-white rounded-md hover:bg-indigo-700 transition-colors">
                                    {{ __('translate.saveTags') }}
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </AppLayout>
</template>
<!--`Wyswietl w tym elemencie tagi klikalne wszystkie zawody z bazy danych (categories) oraz dodatkowe z tabeli tags. Zwróc uwagę na tłumaczenia w tabeli categories żeby po przełaczeniu na jezyk pojawiały sie ztego jezyka.Tagi mają być w różnych pastylowych kolorach Te tagi beda załączane do tabeli aplications chyba ze masz inny pomysł zrób to optymalnie,-->
