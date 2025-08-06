<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import {ref} from 'vue';
import {Link, router, useForm} from '@inertiajs/vue3';
import DialogModal from '@/Components/DialogModal.vue';
import moment from "moment";
import Multiselect from "vue-multiselect";
const props = defineProps({
    application: Object,
    otherRecruits: Array,
    candidateQuestions: Array,
});

// Stan dla modalu notatek
const showNoteModal = ref(false);
const showDeleteModal = ref(false);
const currentNote = ref(null);
const isEditing = ref(false);
const noteToDelete = ref(null);
const showChangeRecruit = ref(false);
const form = useForm({
    content: ''
});

// Formularz odpowiedzi na pytania
const answersForm = useForm({
    answers: []
});

// Inicjalizacja formularza odpowiedzi
const initAnswersForm = () => {
    const formattedAnswers = props.candidateQuestions.map(question => {
        // Znajdź odpowiedź na to pytanie jeśli istnieje
        const existingAnswer = props.application.candidate_answers?.find(
            answer => answer.candidate_question_id === question.id
        );

        return {
            question_id: question.id,
            text_answer: existingAnswer?.text_answer || '',
            boolean_answer: existingAnswer?.boolean_answer === null ? null : existingAnswer?.boolean_answer,
        };
    });

    answersForm.answers = formattedAnswers;
};

// Inicjalizacja przy załadowaniu strony
initAnswersForm();

// Formularz do odblokowywania pytań
const questionsForm = useForm({});

// Odblokowuje pytania dla tej aplikacji pobierając punkty
const unlockQuestions = () => {
    questionsForm.post(route('applications.unlock-questions', props.application.id), {
        preserveScroll: true,
    });
};

// Zapisanie odpowiedzi
const saveAnswers = () => {
    answersForm.post(route('applications.save-answers', props.application.id), {
        preserveScroll: true,
        onSuccess: () => {
            // Odświeżenie danych
            initAnswersForm();
        }
    });
};

// Otwiera modal do dodania notatki
const openAddNoteModal = () => {
    form.reset();
    currentNote.value = null;
    isEditing.value = false;
    showNoteModal.value = true;
};

// Otwiera modal do edycji notatki
const openEditNoteModal = (note) => {
    form.content = note.content;
    currentNote.value = note;
    isEditing.value = true;
    showNoteModal.value = true;
};

// Zamyka modal notatek
const closeNoteModal = () => {
    form.reset();
    currentNote.value = null;
    form.clearErrors();
    showNoteModal.value = false;
};

// Zapisuje notatkę
const saveNote = () => {
    if (isEditing.value && currentNote.value) {
        // Aktualizacja istniejącej notatki
        form.put(route('firm.applications.update-note', currentNote.value.id), {
            preserveScroll: true,
            onSuccess: () => closeNoteModal()
        });
    } else {
        // Dodawanie nowej notatki
        form.post(route('firm.applications.store-note', props.application.id), {
            preserveScroll: true,
            onSuccess: () => closeNoteModal()
        });
    }
};

// Otwiera modal potwierdzenia usunięcia notatki
const openDeleteModal = (note) => {
    noteToDelete.value = note;
    showDeleteModal.value = true;
};

// Zamyka modal potwierdzenia usunięcia
const closeDeleteModal = () => {
    showDeleteModal.value = false;
    setTimeout(() => {
        noteToDelete.value = null;
    }, 300);
};

// Usuwa notatkę
const deleteNote = () => {
    if (noteToDelete.value) {
        router.delete(route('firm.applications.delete-note', noteToDelete.value.id), {
            preserveScroll: true,
            onSuccess: () => closeDeleteModal()
        });
    }
};

const updateStatus = async (id, status) => {
    router.put(route('firm.applications.update-status', id), {
        status
    }, {
        preserveScroll: true,
        preserveState: true
    });
};

const resetStatus = (id, status) => {
    router.put(route('firm.applications.resetStatus', id), {
        status
    }, {
        preserveScroll: true,
        preserveState: true
    });
};


const dispatchActionSingleRecruit = value => {
    router.post(route('firm.changeRecruitApp',props.application?.id ),{ recruit: value },{ preserveScroll: true,
        onSuccess: () => {
            showChangeRecruit.value = false;
        }
    });
}

</script>

<template>
    <AppLayout :title="__('translate.aplicationDetails')">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('translate.aplicationDetails') }}
            </h2>
        </template>

        <!-- Modal do dodawania/edycji notatek -->
        <DialogModal :show="showNoteModal" @close="closeNoteModal">
            <template #title>
                {{ isEditing ? __('translate.editNote') : __('translate.addNote') }}
            </template>

            <template #content>
                <div class="mt-2">
                    <label for="note-content" class="block text-sm font-medium text-gray-700">
                        {{ __('translate.noteContent') }}
                    </label>
                    <textarea
                        id="note-content"
                        v-model="form.content"
                        rows="4"
                        maxlength="500"
                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                        :placeholder="__('translate.enterNoteContent')"
                    ></textarea>
                    <div class="flex justify-between mt-1">
                        <p v-if="form.errors.content" class="text-sm text-red-600">{{ form.errors.content }}</p>
                        <p class="text-sm text-gray-500 ml-auto">{{ form.content.length }}/500</p>
                    </div>
                </div>
            </template>

            <template #footer>
                <button
                    type="button"
                    class="inline-flex justify-center px-4 py-2 bg-white border border-gray-300 rounded-md font-semibold text-xs text-gray-700 uppercase tracking-widest shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 disabled:opacity-25 transition"
                    @click="closeNoteModal"
                >
                    {{ __('translate.cancel') }}
                </button>
                <button
                    type="button"
                    class="ml-2 inline-flex justify-center px-4 py-2 bg-green-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-green-500 focus:ring-offset-2 disabled:opacity-25 transition"
                    @click="saveNote"
                >
                    {{ __('translate.save') }}
                </button>
            </template>
        </DialogModal>

        <!-- Modal potwierdzenia usunięcia notatki -->
        <DialogModal :show="showDeleteModal" @close="closeDeleteModal">
            <template #title>
                {{ __('translate.deleteNote') }}
            </template>

            <template #content>
                <div class="mt-2">
                    <p class="text-sm text-gray-600">{{ __('translate.confirmDeleteNote') }}</p>
                </div>
            </template>

            <template #footer>
                <button
                    type="button"
                    class="inline-flex justify-center px-4 py-2 bg-white border border-gray-300 rounded-md font-semibold text-xs text-gray-700 uppercase tracking-widest shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 disabled:opacity-25 transition"
                    @click="closeDeleteModal"
                >
                    {{ __('translate.cancel') }}
                </button>
                <button
                    type="button"
                    class="ml-2 inline-flex justify-center px-4 py-2 bg-red-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2 disabled:opacity-25 transition"
                    @click="deleteNote"
                >
                    {{ __('translate.delete') }}
                </button>
            </template>
        </DialogModal>


        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6">
                    <Link :href="route('aplications.index')"
                          class="inline-flex items-center px-4 py-2 bg-gray-200 border border-transparent rounded-md font-semibold text-xs text-gray-800 uppercase tracking-widest hover:bg-gray-300 active:bg-gray-400 focus:outline-none focus:border-gray-500 focus:ring focus:ring-gray-300 disabled:opacity-25 transition mb-6">
                        &larr;{{ __('translate.backToList') }}
                    </Link>

                    <div class="bg-white rounded-lg shadow-md p-6 mb-6" v-if="application.status === 'yes' ">
                        <div class="flex justify-between items-center mb-4">
                            <h3 class="text-lg font-medium text-gray-900">{{ __('translate.notes') }}</h3>
                            <button
                                @click="openAddNoteModal"
                                class="inline-flex items-center px-4 py-2 bg-indigo-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-indigo-700 active:bg-indigo-800 focus:outline-none focus:border-indigo-900 focus:ring focus:ring-indigo-300 disabled:opacity-25 transition"
                            >
                                {{ __('translate.addNote') }}
                            </button>
                        </div>
                        <div v-if="application.notes && application.notes.length > 0" class="space-y-4">
                            <div v-for="note in application.notes" :key="note.id" class="bg-gray-50 p-4 rounded-lg">
                                <div class="flex justify-between items-start">
                                    <div class="flex-grow">
                                        <p class="text-sm text-gray-600">{{ note.content }}</p>
                                        <p class="text-xs text-gray-400 mt-1">
                                            {{ moment(note.created_at).format('DD.MM.YYYY HH:mm') }}</p>
                                    </div>
                                    <div class="flex space-x-2">
                                        <button
                                            @click="openEditNoteModal(note)"
                                            class="text-indigo-600 hover:text-indigo-800"
                                        >
                                            {{ __('translate.edit') }}
                                        </button>
                                        <button
                                            @click="openDeleteModal(note)"
                                            class="text-red-600 hover:text-red-800"
                                        >
                                            {{ __('translate.delete') }}
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div v-else class="text-center text-gray-500 py-4">
                            {{ __('translate.noNotes') }}
                        </div>
                    </div>

                    <div class="bg-white rounded-lg shadow-md p-6 mb-6">
                        <h3 class="text-lg font-medium text-gray-900 mb-4">{{ __('translate.mainData') }}</h3>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div>
                                <p class="text-sm font-medium text-gray-500">{{ __('translate.mainData') }}
                                    {{ __('translate.nameUser') }} {{ __('translate.and') }} {{
                                        __('translate.surname')
                                    }}</p>
                                <p class="text-base">{{ application.name }} {{ application.surname }}</p>
                            </div>
                            <div>
                                <p class="text-sm font-medium text-gray-500">{{ __('translate.email') }}</p>
                                <p class="text-base">{{ application.email }}</p>
                            </div>
                            <div>
                                <p class="text-sm font-medium text-gray-500">{{ __('translate.phone') }}</p>
                                <p class="text-base">{{ application.phone }}</p>
                            </div>
                            <div>
                                <p class="text-sm font-medium text-gray-500">{{ __('translate.project') }}</p>
                                <p class="text-base">{{ application.project?.name || __('translate.noProject') }}</p>
                            </div>
                            <div v-if="application.opened_by">
                                <p class="text-sm font-medium text-gray-500">{{ __('translate.whoOpened') }}</p>
                                <p class="text-base">{{ application.opened_by.name }} ({{ moment(application.opened_at).format('DD.MM.YYYY HH:mm') }})</p>
                                <button class="underline text-sm" @click="showChangeRecruit = !showChangeRecruit">{{showChangeRecruit ? 'Anuluj' : 'Zmień'}}</button>
                                <div v-if="showChangeRecruit" class="w-full my-3">
                                    <multiselect
                                        :selectLabel="__('translate.selectLabel')"
                                        :selectedLabel="__('translate.selectedLabel')"
                                        :deselectLabel="__('translate.deselectLabel')"
                                        track-by="name"
                                        :multiple="false"
                                        label="name"
                                        @update:modelValue="dispatchActionSingleRecruit"
                                        :placeholder="__('translate.placeholder')"
                                        :options="props.otherRecruits">
                                        <template #noResult>
                                            <span>{{__('translate.noOptions')}}</span>
                                        </template>
                                        <template #noOptions>
                                            <span>{{__('translate.noResult')}}</span>
                                        </template>
                                    </multiselect>
                                </div>
                            </div>
                            <div v-else>
                                <p class="text-sm font-medium text-gray-500">{{ __('translate.whoOpened') }}</p>
                                <p class="text-base">{{ __('translate.notViewed') }}</p>
                            </div>
                            <div v-if="application.status_changed_by_user_id">
                                <p class="text-sm font-medium text-gray-500">{{ __('translate.whoChangedStatus') }}</p>
                                <p class="text-base">{{ application.status_changed_by?.name }} ({{ moment(application.status_changed_at).format('DD.MM.YYYY HH:mm') }})</p>
                            </div>
                        </div>
                    </div>

                    <div class="bg-white rounded-lg shadow-md p-6 mb-6">
                        <h3 class="text-lg font-medium text-gray-900 mb-4">{{ __('translate.applicationStatus') }}</h3>
                        <div class="flex gap-2 mb-4">
                            <button @click="updateStatus(application.id, 'yes')"
                                    :class="[application.status === 'yes' ? 'bg-green-600 text-white' : 'bg-gray-200 text-gray-700', 'px-4 py-2 rounded text-sm font-medium']">
                                {{ __('translate.statusYes') }}
                            </button>
                            <button @click="updateStatus(application.id, 'no')"
                                    :class="[application.status === 'no' ? 'bg-red-600 text-white' : 'bg-gray-200 text-gray-700', 'px-4 py-2 rounded text-sm font-medium']">
                                {{ __('translate.statusNo') }}
                            </button>
                            <button @click="updateStatus(application.id, 'maybe')"
                                    :class="[application.status === 'maybe' ? 'bg-yellow-500 text-white' : 'bg-gray-200 text-gray-700', 'px-4 py-2 rounded text-sm font-medium']">
                                {{ __('translate.statusMaybe') }}
                            </button>
                        </div>
                    </div>

                    <div v-if="application.pathCv" class="bg-white rounded-lg shadow-md p-6 mb-6">
                        <h3 class="text-lg font-medium text-gray-900 mb-4">{{ __('translate.cv') }}</h3>
                        <a :href="application.pathCv" target="_blank"
                           class="inline-flex items-center px-4 py-2 bg-indigo-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-indigo-700 active:bg-indigo-800 focus:outline-none focus:border-indigo-900 focus:ring focus:ring-indigo-300 disabled:opacity-25 transition">
                            {{ __('translate.getCv') }}
                        </a>
                    </div>

                    <div v-if="candidateQuestions && candidateQuestions.length > 0" class="bg-white rounded-lg shadow-md p-6 mb-6">
                        <h3 class="text-lg font-medium text-gray-900 mb-4">{{ __('translate.candidateQuestions') }}</h3>
                        <div v-if="application.questions_unlocked_at" class="space-y-4">
                            <p class="text-sm text-gray-600 mb-3">{{ __('translate.candidateQuestionsUnlockedDate') }} <strong>{{ moment(application.questions_unlocked_at).format('DD.MM.YYYY HH:mm') }}</strong></p>
                        <p>{{ __('translate.candidateQuestionsUnlockedDate') }} <strong>{{ moment(application.questions_unlocked_at).format('DD.MM.YYYY HH:mm') }}</strong></p>
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

                    <div v-if="application.media && application.media.length > 0"
                         class="bg-white rounded-lg shadow-md p-6">
                        <h3 class="text-lg font-medium text-gray-900 mb-4">{{ __('translate.addedFiles') }}</h3>
                        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                            <div v-for="media in application.media" :key="media.id" class="border rounded p-3">
                                <p class="text-sm font-medium truncate mb-2">{{ media.file_name }}</p>
                                <a :href="media.original_url" target="_blank"
                                   class="text-indigo-600 hover:text-indigo-800 text-sm">
                                    {{ __('translate.getFiles') }}
                                </a>
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
    background: #00a0e3 !important;
}
.multiselect__option--highlight {
    background: #00a0e3 !important;
    outline: none;
    color: white;
}

.multiselect__option--highlight:after {
    content: attr(data-select);
    background: #00a0e3 !important;
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
</style>
