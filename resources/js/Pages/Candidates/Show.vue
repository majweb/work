<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import {Link, router, useForm, usePage} from '@inertiajs/vue3';
import __ from '@/lang.js';
import {ref, onMounted, computed, watch} from 'vue';
import axios from 'axios';
import moment from "moment/moment.js";
import TextInput from "@/Components/TextInput.vue";
import {usePermission} from "@/Composables/usePermission.js";

const {noRole} = usePermission();

// Importy FilePond
const props = defineProps({
    candidate: Object,
    candidateProjects: Array,
    categories: Array,
    customTags: Array,
    selectedCandidateTags: Array,
    candidateQuestions: Array,
});
const locale = computed(() => usePage().props.language);

// Dane
const professionCategories = ref(props.categories || []);
const customTags = ref(props.customTags || []);
const selectedTags = ref(props.selectedCandidateTags || []);
const currentCategoryPage = ref(1);
const categoriesPerPage = 60; // Liczba kategorii na stronę
const tagColors = {};
const categorySearchQuery = ref('');
const customTagSearchQuery = ref('');
const isSavingTags = ref(false);
const isSavingCv = ref(false);

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
    const rgb = hexToRgb(backgroundColor) || {r: 200, g: 200, b: 200};
    const brightness = (rgb.r * 299 + rgb.g * 587 + rgb.b * 114) / 1000;
    return brightness > 128 ? '#000000' : '#FFFFFF';
};

const getContrastColorText = (bgColor) => {
    if (!bgColor) return '#000';
    const color = bgColor.replace('#', '');
    const r = parseInt(color.substr(0,2),16);
    const g = parseInt(color.substr(2,2),16);
    const b = parseInt(color.substr(4,2),16);
    return (r*0.299 + g*0.587 + b*0.114) > 186 ? '#000' : '#fff';
};

// Konwersja HSL do RGB
const hexToRgb = (hex) => {
    // Jeśli to jest format HSL, zwracamy domyślne wartości
    if (hex.startsWith('hsl')) {
        return {r: 200, g: 200, b: 200};
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

const removeFile = async (source, load) => {
    console.log(source)
    await router.delete(route('candidate-cv.delete', props.candidate.id), {'source': source});
    load();
}

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

const answersForm = useForm({
    answers: []
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


const saveTags = () => {
    if (isSavingTags.value) return;

    isSavingTags.value = true;

    const tagsToSave = Array.isArray(selectedTags.value)
        ? selectedTags.value.map(tag => ({
            id: tag.id,
            type: tag.type
        }))
        : [];

    form.tags = tagsToSave;

    form.post(route('candidates.saveTags', props.candidate.id), {
        preserveScroll: true,
        onFinish: () => {
            isSavingTags.value = false;
        }
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

// Inicjalizacja formularza odpowiedzi
const initAnswersForm = () => {
    const formattedAnswers = props.candidateQuestions.map(question => {
        // Znajdź odpowiedź na to pytanie jeśli istnieje
        const existingAnswer = question.candidate_answers?.find(
            answer => answer.candidate_question_id === question.id && answer.candidate_id === props.candidate.id
        );

        return {
            question_id: question.id,
            text_answer: existingAnswer?.text_answer || '',
            boolean_answer: existingAnswer?.boolean_answer === null ? null : existingAnswer?.boolean_answer,
        };
    });

    answersForm.answers = formattedAnswers;
};

// Formularz do odblokowywania pytań
const questionsForm = useForm({});


const existingFile = [{
    source: props.candidate?.cv_file?.name,
    options: {
        type: 'local',
        file: {
            name: props.candidate?.cv_file?.name,
            size: props.candidate?.cv_file?.size,
        },
        metadata: {
            poster: props.candidate?.cv_file?.url
        }
    }
}];

// Formularz do CV
const cvForm = useForm({
    cvFile: (props.candidate?.cv_file && existingFile) ? existingFile : []
});

// Konfiguracja FilePond
const filepondOptions = {
    labelIdle: __('translate.label-idle'),
    labelFileProcessing: __('translate.labelFileProcessing'),
    labelInvalidField: __('translate.labelInvalidField'),
    labelFileWaitingForSize: __('translate.labelFileWaitingForSize'),
    labelFileSizeNotAvailable: __('translate.labelFileSizeNotAvailable'),
    labelFileLoading: __('translate.labelFileLoading'),
    labelMaxFileSize: __('translate.labelMaxFileSize'),
    labelMaxFileSizeExceeded: __('translate.labelMaxFileSizeExceeded'),
    labelFileLoadError: __('translate.labelFileLoadError'),
    labelFileProcessingComplete: __('translate.labelFileProcessingComplete'),
    labelFileProcessingAborted: __('translate.labelFileProcessingAborted'),
    labelFileProcessingError: __('translate.labelFileProcessingError'),
    labelFileProcessingRevertError: __('translate.labelFileProcessingRevertError'),
    labelFileRemoveError: __('translate.labelFileRemoveError'),
    labelTapToCancel: __('translate.labelTapToCancel'),
    labelTapToRetry: __('translate.labelTapToRetry'),
    labelTapToUndo: __('translate.labelTapToUndo'),
    labelButtonRemoveItem: __('translate.labelButtonRemoveItem'),
    labelButtonAbortItemLoad: __('translate.labelButtonAbortItemLoad'),
    labelButtonRetryItemLoad: __('translate.labelButtonRetryItemLoad'),
    labelButtonAbortItemProcessing: __('translate.labelButtonAbortItemProcessing'),
    labelButtonUndoItemProcessing: __('translate.labelButtonUndoItemProcessing'),
    labelButtonRetryItemProcessing: __('translate.labelButtonRetryItemProcessing'),
    labelButtonProcessItem: __('translate.labelButtonProcessItem'),
    acceptedFileTypes: ['application/pdf', 'application/msword', 'application/vnd.openxmlformats-officedocument.wordprocessingml.document'],
    maxFileSize: '10MB',
    credits: 'false',
};

// Obsługa przesyłania CV
const handleCvUpload = () => {
    if (isSavingCv.value) return;

    isSavingCv.value = true;

    cvForm.post(route('candidate-cv.save', props.candidate.id), {
        preserveScroll: true,
        onFinish: () => {
            isSavingCv.value = false;
        }
    });
};
// Odblokowuje pytania dla tej aplikacji pobierając punkty
const unlockQuestions = () => {
    questionsForm.post(route('candidate.unlock-questions', props.candidate.id), {
        preserveScroll: true,
    });
};
// Zapisanie odpowiedzi
const saveAnswers = () => {
    answersForm.post(route('candidate.save-answers', props.candidate.id), {
        preserveScroll: true,
        onSuccess: () => {
            // Odświeżenie danych
            initAnswersForm();
        }
    });
};

// Usuwanie pliku CV
const deleteFile = (fileId) => {
    if (confirm(__('translate.confirmDeleteFile'))) {
        axios.delete(route('candidate-cv.delete', {candidate: props.candidate.id, file: fileId}))
            .then(response => {
                // Odśwież stronę aby zaktualizować listę plików
                window.location.reload();
            })
            .catch(error => {
                console.error('Błąd podczas usuwania pliku', error);
            });
    }
};

// Inicjalizacja przy załadowaniu strony
initAnswersForm();
</script>

<template>
    <AppLayout :title="__('translate.candidateDetails')">
        <template #header>
            <div class="flex items-center justify-between">
                <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                    {{ __('translate.candidateDetails') }}
                </h2>

                <Link
                    :href="route('candidates.index')"
                    class="inline-flex items-center gap-2 rounded-2xl border border-gray-100 bg-white px-6 py-3 text-xs font-black uppercase tracking-widest text-[#0A2C5C] shadow-sm hover:bg-gray-50 transition-all hover:-translate-y-0.5"
                >
                    <span class="text-lg leading-none">←</span>
                    {{ __('translate.backToList') }}
                </Link>
            </div>
        </template>
        <div class="py-12 bg-gray-50/50 min-h-screen">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-8">
                <!-- HEADER CARD -->
                <section class="bg-white rounded-3xl shadow-sm border border-gray-100 overflow-hidden">
                    <div class="p-8">
                        <div class="flex flex-col md:flex-row md:items-center justify-between gap-6">
                            <div>
                                <h2 class="text-2xl font-bold text-gray-900">{{ __('translate.candidateDetails') }}</h2>
                                <p class="text-sm text-gray-500 mt-1">Zarządzaj danymi kandydata i jego procesem
                                    rekrutacyjnym</p>
                            </div>
                        </div>
                    </div>
                </section>
                <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-start">
                    <!-- LEFT COLUMN: Candidate info -->
                    <div class="lg:col-span-4 space-y-8">
                        <div
                            class="bg-white rounded-[3rem] border border-gray-100 shadow-xl shadow-blue-900/5 p-8 flex flex-col items-center text-center">
                            <div class="text-[10px] font-black text-[#0A2C5C] uppercase tracking-[0.2em] mb-8 w-full">
                                {{ __('translate.candidateInfo') }}
                            </div>

                            <div class="relative group">
                                <div
                                    class="h-32 w-32 rounded-[2.5rem] bg-blue-50 ring-4 ring-white shadow-lg flex items-center justify-center overflow-hidden transition-transform duration-300 group-hover:scale-105">
                                    <img
                                        v-if="candidate?.worker_image"
                                        :src="candidate?.worker_image"
                                        alt="avatar"
                                        class="h-full w-full object-cover"
                                    />
                                    <div v-else class="text-[#0A2C5C] font-black text-4xl">
                                        {{ (candidate?.name?.[0] ?? 'A') + (candidate?.surname?.[0] ?? 'N') }}
                                    </div>
                                </div>
                                <div
                                    class="absolute -bottom-2 -right-2 bg-green-500 w-6 h-6 rounded-full border-4 border-white shadow-sm"></div>
                            </div>

                            <div class="mt-6">
                                <h3 class="text-2xl font-black text-gray-900 uppercase tracking-tight leading-tight">
                                    {{ candidate.name }} {{ candidate.surname }}
                                </h3>
                            </div>

                            <div class="mt-6 w-full space-y-4">
                                <div class="bg-gray-50/50 p-4 rounded-2xl border border-gray-100/50">
                                    <p class="text-[10px] font-black text-gray-400 uppercase tracking-widest mb-1">
                                        {{ __('translate.phone') }}</p>
                                    <p class="text-sm font-black text-gray-700 tracking-widest">
                                        {{ candidate.phone ?? '—' }}</p>
                                </div>
                                <div class="bg-gray-50/50 p-4 rounded-2xl border border-gray-100/50">
                                    <p class="text-[10px] font-black text-gray-400 uppercase tracking-widest mb-1">
                                        {{ __('translate.email') }}</p>
                                    <p class="text-sm font-black text-gray-700 truncate lowercase">
                                        {{ candidate.email ?? '—' }}</p>
                                </div>
                            </div>

                            <!-- CV buttons -->
                            <div class="mt-8 w-full">
                                <a
                                    v-if="candidate?.cv_file?.url"
                                    :href="candidate.cv_file.url"
                                    target="_blank"
                                    class="w-full inline-flex items-center justify-center gap-3 rounded-2xl bg-[#0A2C5C] px-6 py-4 text-xs font-black uppercase tracking-widest text-white shadow-lg shadow-blue-900/20 hover:bg-blue-800 transition-all hover:-translate-y-0.5"
                                >
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"
                                              d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"/>
                                    </svg>
                                    {{ __('translate.classicCV') ?? 'klasyczne CV' }}
                                </a>
                            </div>

                            <!-- Recruiter -->
                            <div v-if="candidate.created_by" class="mt-8 w-full pt-8 border-t border-gray-100">
                                <div
                                    class="flex items-center gap-4 bg-gray-50/50 p-4 rounded-2xl border border-gray-100/50">
                                    <div
                                        class="h-12 w-12 rounded-xl overflow-hidden shadow-sm border-2 border-white shrink-0">
                                        <img
                                            v-if="candidate?.created_by?.avatar"
                                            :src="candidate?.created_by?.avatar"
                                            alt="avatar"
                                            class="h-full w-full object-cover"
                                        />
                                        <div v-else
                                             class="w-full h-full bg-blue-100 flex items-center justify-center text-[#0A2C5C] font-black">
                                            {{
                                                (candidate?.created_by?.name?.[0] ?? 'A') + (candidate?.created_by?.surname?.[0] ?? 'N')
                                            }}
                                        </div>
                                    </div>
                                    <div class="text-left min-w-0">
                                        <p class="text-[10px] font-black text-gray-400 uppercase tracking-widest leading-none mb-1">
                                            {{ __('translate.createdBy') }}</p>
                                        <p class="text-sm font-black text-gray-900 truncate uppercase tracking-tight">
                                            {{ candidate.created_by?.name }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- RIGHT COLUMN: Projects -->
                    <div class="lg:col-span-8 space-y-8">
                        <!-- Candidate projects -->
                        <div class="bg-white rounded-[3rem] border border-gray-100 shadow-xl shadow-blue-900/5 p-8">
                            <div class="flex items-center gap-4 mb-8">
                                <h3 class="text-[10px] font-black text-[#0A2C5C] uppercase tracking-[0.2em]">
                                    {{ __('translate.allCandidateProjects') }}</h3>
                                <div class="h-px flex-1 bg-gray-100"></div>
                            </div>

                            <div v-if="candidateProjects && candidateProjects.length"
                                 class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                <div
                                    v-for="project in candidateProjects"
                                    :key="project.project_id"
                                    class="group relative bg-gray-50/50 border border-gray-100/50 rounded-3xl p-6 hover:shadow-xl hover:shadow-blue-900/5 transition-all duration-300 hover:-translate-y-1 hover:bg-white"
                                >
                                    <div class="flex flex-col h-full">
                                        <div class="flex items-center justify-between mb-4">
                                            <span
                                                class="text-[10px] font-black text-blue-500 uppercase tracking-widest bg-white px-2.5 py-1 rounded-lg border border-blue-100/50 shadow-sm">
                                                ID {{ project.project_id }}
                                            </span>
                                            <span
                                                class="text-[10px] font-black text-gray-400 uppercase tracking-widest">
                                                {{ new Date(project.created_at).toLocaleDateString() }}
                                            </span>
                                        </div>

                                        <Link
                                            :href="route('projects.show', project.project_id) "
                                            class="text-lg font-black text-gray-900 truncate group-hover:text-[#0A2C5C] transition-colors uppercase tracking-tight leading-tight mb-2"
                                        >
                                            {{ project.project_name }}
                                        </Link>

                                        <div class="flex flex-wrap gap-2 mb-6">
                                            <span
                                                class="text-[10px] font-bold text-gray-400 uppercase tracking-tight bg-white px-2 py-0.5 rounded border border-gray-100">
                                                {{ project.city }}, {{ project.country }}
                                            </span>
                                            <span
                                                class="text-[10px] font-bold text-blue-900 uppercase tracking-tight bg-blue-50 px-2 py-0.5 rounded border border-blue-100">
                                                {{ project.price }} {{ project.currency }}
                                            </span>
                                        </div>

                                        <div class="mt-auto flex items-center justify-between gap-4">
                                            <div class="flex gap-2">
                                                <Link
                                                    v-if="noRole('firm')"
                                                    :href="route('project-recruits.show', project.project_id)"
                                                    class="w-10 h-10 rounded-xl bg-white border border-gray-100 flex items-center justify-center text-[#0A2C5C] hover:bg-[#0A2C5C] hover:text-white transition-all shadow-sm"
                                                >
                                                    <svg class="w-5 h-5" fill="none" stroke="currentColor"
                                                         viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                              stroke-width="2.5" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                              stroke-width="2.5"
                                                              d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                                                    </svg>
                                                </Link>

                                                <Link
                                                    v-else
                                                    :href="route('projects.show', project.project_id)"
                                                    class="w-10 h-10 rounded-xl bg-white border border-gray-100 flex items-center justify-center text-[#0A2C5C] hover:bg-[#0A2C5C] hover:text-white transition-all shadow-sm"
                                                >
                                                    <svg class="w-5 h-5" fill="none" stroke="currentColor"
                                                         viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                              stroke-width="2.5" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                              stroke-width="2.5"
                                                              d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                                                    </svg>
                                                </Link>
                                            </div>

                                            <span
                                                class="rounded-xl px-4 py-2 text-[10px] font-black uppercase tracking-widest text-white shadow-sm"
                                                :class="{
                                                    'bg-[#0A2C5C]': project.status === 'yes',
                                                    'bg-red-600': project.status === 'no',
                                                    'bg-cyan-500': project.status === 'maybe',
                                                    'bg-gray-300': !project.status
                                                }"
                                            >
                                                {{
                                                    project.status
                                                        ? __(`translate.status${project.status.charAt(0).toUpperCase() + project.status.slice(1)}`)
                                                        : __('translate.statusPending')
                                                }}
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div v-else
                                 class="py-12 text-center bg-gray-50/50 rounded-[2rem] border border-dashed border-gray-200">
                                <p class="text-xs font-bold text-gray-400 uppercase tracking-widest">
                                    {{ __('translate.noProjectsAvailable') }}</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- BOTTOM SECTION: Questions, CV Upload, Notes, Tags -->
                <div class="space-y-8">
                    <!-- Pytania -->
                    <div v-if="candidateQuestions && candidateQuestions.length > 0">
                        <div class="flex items-center gap-4 mb-8">
                            <h3 class="text-[10px] font-black text-[#0A2C5C] uppercase tracking-[0.2em]">
                                {{ __('translate.candidateQuestions') || 'Dodatkowe pytania do kandydata' }}
                            </h3>
                            <div class="h-px flex-1 bg-gray-100"></div>
                        </div>

                        <div v-if="candidate.questions_unlocked_at"
                             class="bg-white rounded-[3rem] border border-gray-100 p-10 shadow-xl shadow-blue-900/5">
                            <p class="text-[10px] font-black text-blue-500 uppercase tracking-widest mb-10">
                                {{ __('translate.candidateQuestionsUnlockedDate') }}
                                {{ moment(candidate.questions_unlocked_at).format('DD.MM.YYYY HH:mm') }}
                            </p>

                            <div class="space-y-10">
                                <div v-for="(question, index) in candidateQuestions" :key="question.id"
                                     class="relative group">
                                    <div
                                        class="rounded-[2.5rem] border border-gray-100 bg-gray-50/30 p-8 transition-all hover:bg-white hover:shadow-xl hover:shadow-blue-900/5">
                                        <h4 class="text-sm font-black text-[#0A2C5C] uppercase tracking-tight mb-6">{{
                                                question.question
                                            }}</h4>

                                        <div v-if="question.answer_type === 'text'">
                                            <textarea
                                                v-model="answersForm.answers[index].text_answer"
                                                class="w-full text-xs rounded-2xl border-gray-100 bg-white/50 focus:bg-white focus:border-[#00a0e3] focus:ring-0 transition-all resize-none text-gray-700 placeholder-gray-400"
                                                :class="{'border-red-500': answersForm.errors[`answers.${index}.text_answer`]}"
                                                rows="4"
                                            ></textarea>
                                            <p v-if="answersForm.errors[`answers.${index}.text_answer`]"
                                               class="text-[10px] font-bold text-red-500 mt-2 uppercase tracking-tight">
                                                {{ answersForm.errors[`answers.${index}.text_answer`] }}
                                            </p>
                                        </div>

                                        <div v-else-if="question.answer_type === 'boolean'" class="flex flex-col">
                                            <div class="flex items-center gap-10">
                                                <label class="group/label flex items-center cursor-pointer">
                                                    <div class="relative flex items-center justify-center">
                                                        <input
                                                            type="radio"
                                                            :name="`question-${question.id}`"
                                                            :value="true"
                                                            v-model="answersForm.answers[index].boolean_answer"
                                                            class="peer sr-only"
                                                        >
                                                        <div
                                                            class="h-6 w-6 rounded-full border-2 border-gray-200 bg-white transition-all peer-checked:border-[#0A2C5C] peer-checked:border-[6px] group-hover/label:border-blue-200"></div>
                                                    </div>
                                                    <span
                                                        class="ml-4 text-xs font-black text-gray-500 uppercase tracking-widest group-hover/label:text-[#0A2C5C] transition-colors">
                                                       {{ __('translate.yes') || 'tak' }}
                                                    </span>
                                                </label>

                                                <label class="group/label flex items-center cursor-pointer">
                                                    <div class="relative flex items-center justify-center">
                                                        <input
                                                            type="radio"
                                                            :name="`question-${question.id}`"
                                                            :value="false"
                                                            v-model="answersForm.answers[index].boolean_answer"
                                                            class="peer sr-only"
                                                        >
                                                        <div
                                                            class="h-6 w-6 rounded-full border-2 border-gray-200 bg-white transition-all peer-checked:border-[#0A2C5C] peer-checked:border-[6px] group-hover/label:border-blue-200"></div>
                                                    </div>
                                                    <span
                                                        class="ml-4 text-xs font-black text-gray-500 uppercase tracking-widest group-hover/label:text-[#0A2C5C] transition-colors">
                                                       {{ __('translate.no') || 'nie' }}
                                                    </span>
                                                </label>
                                            </div>
                                            <p v-if="answersForm.errors[`answers.${index}.boolean_answer`]"
                                               class="text-[10px] font-bold text-red-500 mt-2 uppercase tracking-tight">
                                                {{ answersForm.errors[`answers.${index}.boolean_answer`] }}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="mt-10 flex items-center justify-end gap-4 border-t border-gray-100 pt-8">
                                <div v-if="answersForm.errors.answers"
                                     class="mr-auto flex items-center gap-2 text-[10px] font-black text-red-600 bg-red-50 px-4 py-2 rounded-xl border border-red-100 uppercase tracking-widest">
                                    {{ answersForm.errors.answers }}
                                </div>

                                <Link :href="route('candidate-questions.create')"
                                      class="inline-flex items-center px-6 py-4 bg-white text-[#0A2C5C] text-[10px] font-black rounded-2xl border border-gray-100 shadow-sm hover:shadow-md hover:bg-gray-50 transition-all uppercase tracking-widest"
                                >
                                    {{ __('translate.addQuestion') || 'DODAJ PYTANIE' }}
                                </Link>

                                <button
                                    @click="saveAnswers"
                                    class="inline-flex items-center px-10 py-4 bg-[#0A2C5C] text-white text-[10px] font-black rounded-2xl uppercase tracking-widest hover:bg-blue-800 shadow-lg shadow-blue-900/20 transition-all hover:-translate-y-0.5 disabled:opacity-50"
                                    :disabled="answersForm.processing"
                                >
                                    {{ __('translate.save') || 'ZAPISZ' }}
                                </button>
                            </div>
                        </div>

                        <div v-else
                             class="bg-white rounded-[3rem] border border-gray-100 p-16 text-center shadow-xl shadow-blue-900/5">
                            <div
                                class="mx-auto w-24 h-24 bg-gray-50 rounded-full flex items-center justify-center mb-8 border border-gray-100 shadow-sm">
                                <span class="text-4xl text-gray-200">🔒</span>
                            </div>
                            <h4 class="text-lg font-black text-gray-900 uppercase tracking-widest mb-4">{{
                                    __('translate.unlockQuestions')
                                }}</h4>
                            <p class="text-xs font-bold text-gray-400 uppercase tracking-tight mb-10 max-w-sm mx-auto">{{
                                    __('translate.unlockQuestionsInfo')
                                }}</p>

                            <button
                                @click="unlockQuestions"
                                class="inline-flex items-center px-10 py-4 bg-[#0A2C5C] text-white text-[10px] font-black rounded-2xl uppercase tracking-widest hover:bg-blue-800 shadow-lg shadow-blue-900/20 transition-all hover:-translate-y-0.5 disabled:opacity-50"
                                :disabled="questionsForm.processing"
                            >
                                {{ __('translate.unlockQuestions') }}
                            </button>
                            <p class="text-[10px] font-bold text-gray-400 mt-6 uppercase tracking-widest">{{
                                    __('translate.unlockQuestionsPointsInfo')
                                }}</p>
                        </div>
                    </div>

                    <!-- CV Upload -->
                    <div class="bg-white rounded-[3rem] border border-gray-100 shadow-xl shadow-blue-900/5 p-10 mt-8">
                        <div class="flex items-center gap-4 mb-8">
                            <h3 class="text-[10px] font-black text-[#0A2C5C] uppercase tracking-[0.2em]">
                                {{ __('translate.candidateCV') }}</h3>
                            <div class="h-px flex-1 bg-gray-100"></div>
                        </div>

                        <!-- Wyświetlanie aktualnych plików CV -->
                        <div v-if="candidate.cv_files && candidate.cv_files.length > 0" class="mb-10">
                            <h4 class="text-[10px] font-black text-gray-400 uppercase tracking-widest mb-4">{{
                                    __('translate.currentCVFiles')
                                }}</h4>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                <div v-for="file in candidate.cv_files" :key="file.id"
                                     class="flex items-center justify-between bg-gray-50/50 p-4 rounded-2xl border border-gray-100">
                                    <div class="flex items-center min-w-0">
                                        <svg class="h-6 w-6 text-[#0A2C5C] shrink-0 mr-3" fill="none"
                                             stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                  d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                                        </svg>
                                        <span class="text-xs font-black text-gray-900 truncate uppercase tracking-tight">{{ file.name }}</span>
                                    </div>
                                    <div class="flex items-center gap-3 shrink-0 ml-4">
                                        <a :href="file.url" target="_blank"
                                           class="text-[10px] font-black text-blue-500 hover:text-blue-700 uppercase tracking-widest transition-colors">{{
                                                __('translate.view')
                                            }}</a>
                                        <button @click="deleteFile(file.id)"
                                                class="text-[10px] font-black text-red-500 hover:text-red-700 uppercase tracking-widest transition-colors">{{
                                                __('translate.delete')
                                            }}
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Dodawanie nowego pliku CV -->
                        <div class="bg-gray-50/30 rounded-[2.5rem] p-8 border border-gray-100">
                            <h4 class="text-[10px] font-black text-gray-400 uppercase tracking-widest mb-6">{{
                                    __('translate.uploadNewCV')
                                }}</h4>
                            <div class="mb-6">
                                <file-pond
                                    ref="pond"
                                    name="cvFile"
                                    class="custom-filepond"
                                    :files="cvForm.cvFile"
                                    :allow-multiple="false"
                                    v-bind="filepondOptions"
                                    :server="{
                                        url:'',
                                        headers: {
                                            'X-CSRF-TOKEN': usePage().props.csrf_token,
                                        },
                                        process: {
                                            url: '/temporary/upload',
                                            onload: (response) => {
                                                cvForm.cvFile.push(response);
                                                return response;
                                            },
                                            onerror: (response) => {
                                                serverMessage = JSON.parse(response).error.cv_file[0];
                                            }
                                        },
                                        revert:{
                                            url: '/temporary/delete',
                                            onload: (response) => {
                                                if (!response) return;
                                                const fileIndex = cvForm.cvFile.findIndex(el => el === response);
                                                if (fileIndex !== -1) {
                                                    cvForm.cvFile.splice(fileIndex, 1);
                                                }
                                            }
                                        },
                                        remove:removeFile
                                    }"
                                />
                                <p class="text-[10px] font-bold text-gray-400 mt-4 uppercase tracking-tight">{{ __('translate.allowedFileTypes') }}: PDF,
                                    DOC, DOCX ({{ __('translate.maxFileSize') }}: 10MB)</p>
                            </div>
                            <div class="flex justify-end">
                                <button
                                    @click="handleCvUpload"
                                    class="inline-flex items-center px-10 py-4 bg-[#0A2C5C] text-white text-[10px] font-black rounded-2xl uppercase tracking-widest hover:bg-blue-800 shadow-lg shadow-blue-900/20 transition-all hover:-translate-y-0.5 disabled:opacity-50"
                                    :disabled="cvForm.processing || isSavingCv"
                                >
                                    <span>
                                        {{ (cvForm.processing || isSavingCv) ? __('translate.saving') : __('translate.saveCv') }}
                                    </span>
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Notatki -->
                    <div class="bg-white rounded-[3rem] border border-gray-100 shadow-xl shadow-blue-900/5 p-10 mt-8">
                        <div class="flex items-center gap-4 mb-8">
                            <h3 class="text-[10px] font-black text-[#0A2C5C] uppercase tracking-[0.2em]">
                                {{ __('translate.notes') }}</h3>
                            <div class="h-px flex-1 bg-gray-100"></div>
                        </div>

                        <div v-if="candidate.notes && candidate.notes.length > 0" class="space-y-4 mb-8">
                            <div v-for="note in candidate.notes" :key="note.id"
                                 class="bg-gray-50/50 p-6 rounded-3xl border border-gray-100">
                                <div class="text-[10px] font-black text-blue-500 uppercase tracking-widest mb-3">
                                    {{ new Date(note.created_at).toLocaleString() }}
                                </div>
                                <div class="text-sm font-bold text-gray-700 leading-relaxed">{{ note.content }}</div>
                            </div>
                        </div>
                        <div v-else class="flex flex-col items-center justify-center py-12 text-center bg-gray-50/30 rounded-[2.5rem] border border-dashed border-gray-200 mb-8">
                            <p class="text-[10px] font-black text-gray-400 uppercase tracking-widest">
                                {{ __('translate.noNotesAvailable') }}
                            </p>
                        </div>
                    </div>

                    <!-- Tagi -->
                    <div class="bg-white rounded-[3rem] border border-gray-100 shadow-xl shadow-blue-900/5 p-10 mt-8">
                        <div class="flex items-center gap-4 mb-8">
                            <h3 class="text-[10px] font-black text-[#0A2C5C] uppercase tracking-[0.2em]">
                                {{ __('translate.tags') }}</h3>
                            <div class="h-px flex-1 bg-gray-100"></div>
                        </div>

                        <div class="grid grid-cols-1 gap-10">
                            <!-- Sekcja tagów kategorii zawodowych -->
                            <div class="space-y-6">
                                <h4 class="text-[10px] font-black text-gray-400 uppercase tracking-widest">
                                    {{ __('translate.professionCategories') }}</h4>

                                <div class="relative">
                                    <TextInput
                                        type="text"
                                        v-model="categorySearchQuery"
                                        class="w-full text-xs rounded-2xl border-gray-100 bg-gray-50 focus:bg-white focus:ring-0 transition-all placeholder-gray-400 p-4 pl-12"
                                        :placeholder="__('translate.searchCategories')"
                                    />
                                    <svg class="w-5 h-5 text-gray-400 absolute left-4 top-1/2 -translate-y-1/2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                                    </svg>
                                </div>

                                <div class="flex flex-wrap gap-2">
                                    <span v-for="category in paginatedCategories" :key="category.id"
                                          class="px-4 py-2 rounded-xl text-[10px] font-black uppercase tracking-widest cursor-pointer transition-all hover:scale-105 active:scale-95 shadow-sm"
                                          :style="{ backgroundColor: getTagColor(category.id), color: getContrastColor(getTagColor(category.id)) }"
                                          @click="toggleCategoryTag(category)">
                                        {{ category.title?.[locale] }}
                                    </span>
                                    <div v-if="filteredCategories.length === 0" class="w-full text-center py-8 bg-gray-50 rounded-2xl border border-dashed border-gray-200">
                                        <p class="text-[10px] font-black text-gray-400 uppercase tracking-widest">
                                            {{ categorySearchQuery ? __('translate.noMatchingCategories') : __('translate.noCategoriesAvailable') }}
                                        </p>
                                    </div>
                                </div>

                                <div class="flex justify-between items-center bg-gray-50/50 p-4 rounded-2xl border border-gray-100" v-if="filteredCategories.length > categoriesPerPage">
                                    <button
                                        @click="currentCategoryPage = Math.max(currentCategoryPage - 1, 1)"
                                        :disabled="currentCategoryPage === 1"
                                        class="px-4 py-2 bg-white text-[10px] font-black text-[#0A2C5C] uppercase tracking-widest rounded-xl border border-gray-100 shadow-sm disabled:opacity-50 transition-all"
                                    >
                                        {{ __('translate.previous') }}
                                    </button>
                                    <span class="text-[10px] font-black text-gray-500 uppercase tracking-widest">{{ __('translate.page') }} {{ currentCategoryPage }} / {{ totalCategoryPages }}</span>
                                    <button
                                        @click="currentCategoryPage = Math.min(currentCategoryPage + 1, totalCategoryPages)"
                                        :disabled="currentCategoryPage === totalCategoryPages"
                                        class="px-4 py-2 bg-white text-[10px] font-black text-[#0A2C5C] uppercase tracking-widest rounded-xl border border-gray-100 shadow-sm disabled:opacity-50 transition-all"
                                    >
                                        {{ __('translate.next') }}
                                    </button>
                                </div>
                            </div>

                            <!-- Sekcja tagów firmowych -->
                            <div class="space-y-6">
                                <h4 class="text-[10px] font-black text-gray-400 uppercase tracking-widest">{{ __('translate.customTags') }}</h4>

                                <div class="relative">
                                    <TextInput
                                        type="text"
                                        v-model="customTagSearchQuery"
                                        class="w-full text-xs rounded-2xl border-gray-100 bg-gray-50 focus:bg-white focus:ring-0 transition-all placeholder-gray-400 p-4 pl-12"
                                        :placeholder="__('translate.searchCustomTags')"
                                    />
                                    <svg class="w-5 h-5 text-gray-400 absolute left-4 top-1/2 -translate-y-1/2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                                    </svg>
                                </div>

                                <div class="flex flex-wrap gap-2">
                                    <span v-for="tag in filteredCustomTags" :key="tag.id"
                                          class="px-4 py-2 rounded-xl text-[10px] font-black uppercase tracking-widest cursor-pointer transition-all hover:scale-105 active:scale-95 shadow-sm"
                                          :style="{ backgroundColor: tag.color || '#ccc', color: getContrastColorText(tag.color) }"
                                          @click="toggleCustomTag(tag)">
                                        {{ tag.name }}
                                    </span>
                                    <div v-if="filteredCustomTags.length === 0" class="w-full text-center py-8 bg-gray-50 rounded-2xl border border-dashed border-gray-200">
                                        <p class="text-[10px] font-black text-gray-400 uppercase tracking-widest">
                                            {{ customTagSearchQuery ? __('translate.noMatchingTags') : __('translate.noTagsAvailable') }}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Sekcja wybranych tagów -->
                        <div class="mt-12 pt-10 border-t border-gray-100">
                            <h4 class="text-[10px] font-black text-gray-400 uppercase tracking-widest mb-6">{{ __('translate.selectedTags') }}</h4>
                            <div class="bg-gray-50/30 p-8 rounded-[2.5rem] border border-gray-100">
                                <div class="flex flex-wrap gap-3">
                                    <span v-for="tag in selectedTags" :key="tag.id"
                                          class="px-5 py-3 bg-[#0A2C5C] text-white rounded-2xl text-[10px] font-black uppercase tracking-widest flex items-center shadow-lg shadow-blue-900/10">
                                        {{ tag.type === 'category' && tag.rawTitle ? tag.rawTitle?.[locale] : (tag.name || tag.title) }}
                                        <button @click="removeTag(tag)" class="ml-4 hover:text-red-400 transition-colors">
                                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M6 18L18 6M6 6l12 12" /></svg>
                                        </button>
                                    </span>
                                    <div v-if="selectedTags.length === 0" class="text-[10px] font-black text-gray-400 uppercase tracking-widest italic">
                                        {{ __('translate.noTagsSelected') }}
                                    </div>
                                </div>

                                <div class="mt-10 flex justify-end">
                                    <button
                                        @click="saveTags"
                                        class="inline-flex items-center px-10 py-4 bg-[#0A2C5C] text-white text-[10px] font-black rounded-2xl uppercase tracking-widest hover:bg-blue-800 shadow-lg shadow-blue-900/20 transition-all hover:-translate-y-0.5 disabled:opacity-50"
                                        :disabled="form.processing || isSavingTags"
                                    >
                                        <span>
                                            {{ (form.processing || isSavingTags) ? __('translate.saving') : __('translate.saveTags') }}
                                        </span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
        </div>
    </AppLayout>
</template>

<style>
.custom-filepond .filepond--panel-root {
    background-color: #f9fafb;
    border: 2px dashed #e5e7eb;
    border-radius: 2rem;
}

.custom-filepond .filepond--drop-label {
    color: #6b7280;
}

.custom-filepond .filepond--label-action {
    color: #0A2C5C;
    font-weight: 900;
    text-transform: uppercase;
    text-decoration: none;
}
</style>
