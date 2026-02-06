<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import {Link, router, useForm, usePage} from '@inertiajs/vue3';
import __ from '@/lang.js';
import { ref, onMounted, computed, watch } from 'vue';
import axios from 'axios';
import moment from "moment/moment.js";
import TextInput from "@/Components/TextInput.vue";
// Importy FilePond
const props = defineProps({
    candidate: Object,
    candidateProjects: Array,
    categories: Array,
    customTags: Array,
    selectedCandidateTags: Array,
    candidateQuestions: Array,
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

const removeFile =  async (source,load) => {
    console.log(source)
    await router.delete(route('candidate-cv.delete',props.candidate.id),{'source':source});
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
    labelMaxFileSize:__('translate.labelMaxFileSize'),
    labelMaxFileSizeExceeded:__('translate.labelMaxFileSizeExceeded'),
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
    credits:'false',
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
        axios.delete(route('candidate-cv.delete', { candidate: props.candidate.id, file: fileId }))
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
            <div class="flex justify-between">
                <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                    {{ __('translate.candidateDetails') }}
                </h2>
                <Link
                    :href="route('candidates.index')"
                    class="inline-flex items-center gap-2 rounded-xl border border-gray-200 bg-white px-4 py-2 text-sm font-semibold text-gray-700 shadow-sm hover:bg-gray-50"
                >
                    <span class="text-lg leading-none">←</span>
                    {{ __('translate.backToList') }}
                </Link>
            </div>

        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white shadow-xl sm:rounded-lg p-6">
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                        <!-- LEFT: Candidate info -->
                        <div class="rounded-2xl shadow-sm p-5 bg-gray-50 p-4 rounded-lg">
                            <div class="flex items-start justify-between">
                                <h3 class="text-sm font-semibold text-slate-700">
                                    {{ __('translate.candidateInfo') }}
                                </h3>
                            </div>
                            <!-- Avatar + name -->
                            <div class="mt-5 flex flex-col items-center text-center">
                                <div class="h-28 w-28 rounded-full bg-orange-500/10 ring-4 ring-orange-100 flex items-center justify-center overflow-hidden">
                                    <img
                                        v-if="candidate?.worker_image"
                                        :src="candidate?.worker_image"
                                        alt="avatar"
                                        class="h-full w-full object-cover"
                                    />
                                    <div v-else class="text-orange-600 font-bold text-3xl">
                                        {{ (candidate?.name?.[0] ?? 'A') + (candidate?.surname?.[0] ?? 'N') }}
                                    </div>
                                </div>

                                <div class="mt-4">
                                    <div class="text-2xl font-extrabold text-slate-800 leading-tight">
                                        {{ candidate.name }} {{ candidate.surname }}
                                    </div>
                                </div>

                                <div class="mt-4 space-y-1 text-sm text-slate-600">
                                    <div class="font-semibold text-slate-700">
                                        {{ candidate.phone ?? '—' }}
                                    </div>
                                    <div class="text-slate-500">
                                        {{ candidate.email ?? '—' }}
                                    </div>
                                </div>
                                <!-- CV buttons -->
                                <div class="mt-5 w-full">
                                    <div class="flex items-center justify-center gap-3">
                                        <a
                                            v-if="candidate?.cv_file?.url"
                                            :href="candidate.cv_file.url"
                                            target="_blank"
                                            class="inline-flex items-center gap-2 rounded-xl bg-white px-4 py-2 text-sm font-semibold text-slate-700 shadow-sm hover:bg-slate-50"
                                        >
                                            <span class="text-slate-500">📄</span>
                                            {{ __('translate.classicCV') ?? 'klasyczne CV' }}
                                        </a>
                                    </div>
                                </div>

                                <!-- Recruiter -->
                                <div v-if="candidate.created_by" class="mt-6 flex items-center gap-3 rounded-xl bg-slate-50 px-4 py-3">
                                    <img
                                        v-if="candidate?.created_by?.avatar"
                                        :src="candidate?.created_by?.avatar"
                                        alt="avatar"
                                        class="h-10 w-10 rounded-full flex items-center justify-center text-white font-bold border border-2 border-work-main"
                                    />
                                    <div v-else class="text-orange-600 font-bold text-3xl">
                                        {{ (candidate?.created_by?.name?.[0] ?? 'A') + (candidate?.created_by?.surname?.[0] ?? 'N') }}
                                    </div>
                                    <div class="text-left">
                                        <div class="text-xs text-slate-500">{{ __('translate.createdBy') }}</div>
                                        <div class="text-sm font-semibold text-slate-700">
                                            {{ candidate.created_by?.name }}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- RIGHT: Candidate projects -->
                        <div class="rounded-2xl shadow-sm p-5 bg-gray-50 p-4 rounded-lg">
                            <div class="flex items-center justify-between">
                                <h3 class="text-sm font-semibold text-slate-700">
                                    {{ __('translate.allCandidateProjects') }}
                                </h3>
                            </div>

                            <div v-if="candidateProjects && candidateProjects.length" class="mt-4 space-y-3">
                                <div
                                    v-for="project in candidateProjects"
                                    :key="project.project_id"
                                    class="rounded-2xl bg-white px-4 py-3 shadow-sm hover:shadow-md transition"
                                >
                                    <div class="flex items-start justify-between gap-3">
                                        <div class="min-w-0">
                                            <div class="text-[11px] text-slate-400 font-semibold uppercase tracking-wide">
                                                ID: {{ project.project_id }}
                                            </div>

                                            <Link
                                                :href="route('projects.show', project.project_id)"
                                                class="block truncate text-sm font-bold text-slate-800 hover:text-indigo-600"
                                            >
                                                {{ project.project_name }}
                                            </Link>
                                            <div class="text-[11px] text-slate-400 font-semibold uppercase tracking-wide">
                                                {{ project.country }}
                                                {{ project.city }}
                                            </div>
                                            <div class="text-[11px] text-slate-400 font-semibold uppercase tracking-wide">
                                                {{ project.price }}
                                                {{ project.currency }}
                                            </div>
                                            <div class="mt-1 text-xs text-slate-500">
                                                {{ __('translate.applicationDate') }}:
                                                <span class="font-semibold text-slate-600">
                                {{ new Date(project.created_at).toLocaleDateString() }}
                            </span>
                                            </div>
                                        </div>

                                        <div class="flex items-center gap-2 shrink-0">
                                            <!-- preview button -->
                                            <Link
                                                :href="route('project-recruits.show', project.project_id)"
                                                class="rounded-lg bg-slate-800 px-3 py-2 text-[11px] font-bold text-white hover:bg-slate-700 uppercase"
                                            >
                                                {{__('translate.view')}}
                                            </Link>

                                            <!-- status button -->
                                            <span
                                                class="rounded-lg px-3 py-2 text-[11px] font-extrabold uppercase"
                                                :class="{
                                'bg-blue-900 text-white': project.status === 'yes',
                                'bg-red-600 text-white': project.status === 'no',
                                'bg-blue-600 text-white': project.status === 'maybe',
                                'bg-bg-[#9ca3af] text-white': !project.status
                            }"
                                            >
                            {{ project.status
                                                ? __(`translate.status${project.status.charAt(0).toUpperCase() + project.status.slice(1)}`)
                                                : __('translate.statusPending')
                                                }}
                        </span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div v-else class="mt-6 text-sm text-slate-500">
                                {{ __('translate.noProjectsAvailable') }}
                            </div>
                        </div>
                    </div>
                    <!-- Pytania -->
                    <div v-if="candidateQuestions && candidateQuestions.length > 0" class="bg-white rounded-lg shadow-md p-6 mb-6">
                        <h3 class="text-lg font-medium text-gray-900 mb-4">{{ __('translate.candidateQuestions') }}</h3>
                        <div v-if="candidate.questions_unlocked_at" class="space-y-4">
                            <p class="text-sm text-gray-600 mb-3">{{ __('translate.candidateQuestionsUnlockedDate') }} <strong>{{ moment(candidate.questions_unlocked_at).format('DD.MM.YYYY HH:mm') }}</strong></p>
                            <p>{{ __('translate.candidateQuestionsUnlockedDate') }} <strong>{{ moment(candidate.questions_unlocked_at).format('DD.MM.YYYY HH:mm') }}</strong></p>
                            <div v-for="(question, index) in candidateQuestions" :key="question.id" class="border p-4 rounded-lg">
                                <h4 class="font-medium mb-2">{{ question.question }}</h4>

                                <div v-if="question.answer_type === 'text'">
                                    <textarea
                                        v-model="answersForm.answers[index].text_answer"
                                        class="w-full border-gray-300 rounded-md shadow-sm"
                                        :class="{'border-red-500': answersForm.errors[`answers.${index}.text_answer`]}"
                                        rows="3"
                                    ></textarea>
                                    <p v-if="answersForm.errors[`answers.${index}.text_answer`]" class="text-sm text-red-600 mt-1">
                                        {{ answersForm.errors[`answers.${index}.text_answer`] }}
                                    </p>
                                </div>

                                <div v-else-if="question.answer_type === 'boolean'" class="flex flex-col">
                                    <div class="flex space-x-4 mb-1">
                                        <label class="inline-flex items-center">
                                            <input
                                                type="radio"
                                                :name="`question-${question.id}`"
                                                :value="true"
                                                v-model="answersForm.answers[index].boolean_answer"
                                                :class="{'border-red-500': answersForm.errors[`answers.${index}.boolean_answer`]}"
                                                class="border-gray-300 text-indigo-600"
                                            >
                                            <span class="ml-2">{{ __('translate.yes') }}</span>
                                        </label>

                                        <label class="inline-flex items-center">
                                            <input
                                                type="radio"
                                                :name="`question-${question.id}`"
                                                :value="false"
                                                v-model="answersForm.answers[index].boolean_answer"
                                                :class="{'border-red-500': answersForm.errors[`answers.${index}.boolean_answer`]}"
                                                class="border-gray-300 text-indigo-600"
                                            >
                                            <span class="ml-2">{{ __('translate.no') }}</span>
                                        </label>
                                    </div>
                                    <p v-if="answersForm.errors[`answers.${index}.boolean_answer`]" class="text-sm text-red-600">
                                        {{ answersForm.errors[`answers.${index}.boolean_answer`] }}
                                    </p>
                                </div>
                            </div>

                            <div class="mt-4">
                                <div v-if="answersForm.errors.answers" class="p-4 mb-4 bg-red-50 border border-red-500 rounded-md">
                                    <div class="flex">
                                        <div class="flex-shrink-0">
                                            <svg class="h-5 w-5 text-red-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd" />
                                            </svg>
                                        </div>
                                        <div class="ml-3">
                                            <h3 class="text-sm font-medium text-red-800">{{ __('translate.validationError') }}</h3>
                                            <p class="text-sm text-red-700 mt-1">
                                                {{ answersForm.errors.answers }}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex justify-end">
                                    <button
                                        @click="saveAnswers"
                                        class="inline-flex items-center px-4 py-2 bg-indigo-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-indigo-700 active:bg-indigo-800 focus:outline-none focus:border-indigo-900 focus:ring focus:ring-indigo-300 disabled:opacity-25 transition"
                                        :disabled="answersForm.processing"
                                    >
                                        {{ __('translate.save') }}
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div v-else class="text-center py-6">
                            <p class="text-gray-600 mb-4">{{ __('translate.unlockQuestionsInfo') }}</p>
                            <button
                                @click="unlockQuestions"
                                class="inline-flex items-center px-4 py-2 bg-green-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-green-700 active:bg-green-800 focus:outline-none focus:border-green-900 focus:ring focus:ring-green-300 disabled:opacity-25 transition"
                                :disabled="questionsForm.processing"
                            >
                                {{ __('translate.unlockQuestions') }}
                            </button>
                            <p class="text-sm text-gray-500 mt-2">{{ __('translate.unlockQuestionsPointsInfo') }}</p>
                        </div>
                    </div>

                    <!-- CV Upload -->
                    <div class="mt-6 bg-gray-50 p-4 rounded-lg">
                        <h3 class="text-lg font-medium text-gray-900 mb-4">{{ __('translate.candidateCV') }}</h3>
                        <!-- Wyświetlanie aktualnych plików CV -->
                        <div v-if="candidate.cv_files && candidate.cv_files.length > 0" class="mb-4">
                            <h4 class="text-md font-medium text-gray-700 mb-2">{{ __('translate.currentCVFiles') }}</h4>
                            <div class="space-y-2">
                                <div v-for="file in candidate.cv_files" :key="file.id" class="flex items-center justify-between bg-white p-2 rounded border">
                                    <div class="flex items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-500 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                                        </svg>
                                        <span>{{ file.name }}</span>
                                    </div>
                                    <div>
                                        <a :href="file.url" target="_blank" class="text-blue-600 hover:text-blue-800 mr-2">{{ __('translate.view') }}</a>
                                        <button @click="deleteFile(file.id)" class="text-red-600 hover:text-red-800">{{ __('translate.delete') }}</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Dodawanie nowego pliku CV -->
                        <div>
                            <h4 class="text-md font-medium text-gray-700 mb-2">{{ __('translate.uploadNewCV') }}</h4>
                            <div class="mb-3">
                                <file-pond
                                    ref="pond"
                                    name="cvFile"
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
                                <p class="text-sm text-gray-500 mt-1">{{ __('translate.allowedFileTypes') }}: PDF, DOC, DOCX ({{ __('translate.maxFileSize') }}: 10MB)</p>
                            </div>
                            <div class="flex justify-end">
                                <button
                                    @click="handleCvUpload"
                                    class="inline-flex items-center gap-2 rounded-lg bg-slate-800 px-3 py-2 text-[11px] font-bold text-white hover:bg-slate-700 uppercase transition
           disabled:opacity-50 disabled:cursor-not-allowed"
                                    :disabled="cvForm.processing || isSavingCv"
                                >
                                    <svg
                                        v-if="cvForm.processing || isSavingCv"
                                        class="h-4 w-4 animate-spin"
                                        xmlns="http://www.w3.org/2000/svg"
                                        fill="none"
                                        viewBox="0 0 24 24"
                                    >
                                        <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                                        <path class="opacity-75" fill="currentColor"
                                              d="M4 12a8 8 0 018-8v3a5 5 0 00-5 5H4z">
                                        </path>
                                    </svg>

                                    <span>
        {{ (cvForm.processing || isSavingCv) ? __('translate.saving') : __('translate.saveCv') }}
    </span>
                                </button>
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

                                <TextInput
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
                                <TextInput
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
                                    class="inline-flex items-center gap-2 rounded-lg bg-slate-800 px-3 py-2 text-[11px] font-bold text-white hover:bg-slate-700 uppercase transition
           disabled:opacity-50 disabled:cursor-not-allowed"
                                    :disabled="form.processing || isSavingTags"
                                >
                                    <svg
                                        v-if="form.processing || isSavingTags"
                                        class="h-4 w-4 animate-spin"
                                        xmlns="http://www.w3.org/2000/svg"
                                        fill="none"
                                        viewBox="0 0 24 24"
                                    >
                                        <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                                        <path class="opacity-75" fill="currentColor"
                                              d="M4 12a8 8 0 018-8v3a5 5 0 00-5 5H4z">
                                        </path>
                                    </svg>

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
    </AppLayout>
</template>
