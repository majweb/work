<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import { computed, ref } from 'vue';
import { Link, router, useForm, usePage } from '@inertiajs/vue3';
import DialogModal from '@/Components/DialogModal.vue';
import moment from "moment";
import Multiselect from "vue-multiselect";

const props = defineProps({
    application: Object,
    otherRecruits: Array,
    candidateQuestions: Array,
});

// Formularz dla odpowiedzi kandydata
const answersForm = useForm({
    answers: props.candidateQuestions?.map(q => {
        const existingAnswer = props.application.candidate?.answers?.find(a => a.candidate_question_id === q.id);
        return {
            question_id: q.id,
            text_answer: existingAnswer?.text_answer || '',
            boolean_answer: existingAnswer?.boolean_answer !== undefined ? existingAnswer.boolean_answer : null,
        };
    }) || []
});

const unlockQuestions = () => {
    if (confirm(__('translate.confirmUnlockQuestions'))) {
        router.post(route('candidate.unlock-questions', props.application.candidate.id), {}, {
            preserveScroll: true,
        });
    }
};

const saveAnswers = () => {
    answersForm.post(route('candidate.save-answers', props.application.candidate.id), {
        preserveScroll: true,
        onSuccess: () => {
            // Można dodać powiadomienie
        }
    });
};


// Formularz do tworzenia kandydata
const candidateForm = useForm({});

// Funkcja tworząca kandydata
const createCandidate = () => {
    candidateForm.post(route('firm.applications.create-candidate', props.application.id), {
        preserveScroll: true,
    });
};

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

const dispatchActionSingleRecruit = value => {
    router.post(route('firm.changeRecruitApp', props.application?.id), { recruit: value }, {
        preserveScroll: true,
        onSuccess: () => {
            showChangeRecruit.value = false;
        }
    });
};
</script>

<template>
    <AppLayout :title="__('translate.aplicationDetails')">
        <template #header>
            <div class="flex items-center justify-between">
                <h2 class="text-xl font-semibold text-gray-900">
                    {{ __('translate.aplicationDetails') }}
                </h2>

                <Link
                    :href="route('aplications.index')"
                    class="inline-flex items-center gap-2 rounded-xl border border-gray-200 bg-white px-4 py-2 text-sm font-semibold text-gray-700 shadow-sm hover:bg-gray-50"
                >
                    <span class="text-lg leading-none">←</span>
                    {{ __('translate.backToList') }}
                </Link>
            </div>
        </template>

        <!-- Modal: Add/Edit note -->
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
                        class="mt-2 block w-full rounded-xl border border-gray-200 bg-white px-3 py-2 text-sm shadow-sm outline-none focus:border-indigo-400 focus:ring-4 focus:ring-indigo-100"
                        :placeholder="__('translate.enterNoteContent')"
                    />

                    <div class="mt-2 flex items-center justify-between">
                        <p v-if="form.errors.content" class="text-sm text-red-600">
                            {{ form.errors.content }}
                        </p>
                        <p class="ml-auto text-xs text-gray-500">
                            {{ form.content.length }}/500
                        </p>
                    </div>
                </div>
            </template>

            <template #footer>
                <button
                    type="button"
                    class="inline-flex justify-center rounded-xl border border-gray-200 bg-white px-4 py-2 text-xs font-semibold uppercase tracking-widest text-gray-700 shadow-sm hover:bg-gray-50"
                    @click="closeNoteModal"
                >
                    {{ __('translate.cancel') }}
                </button>

                <button
                    type="button"
                    class="ml-2 inline-flex justify-center rounded-xl bg-work-main px-4 py-2 text-xs font-semibold uppercase tracking-widest text-white shadow-sm hover:bg-work-main/90 transition"
                    @click="saveNote"
                >
                    {{ __('translate.save') }}
                </button>
            </template>
        </DialogModal>

        <!-- Modal: Delete note -->
        <DialogModal :show="showDeleteModal" @close="closeDeleteModal">
            <template #title>
                {{ __('translate.deleteNote') }}
            </template>

            <template #content>
                <div class="mt-2">
                    <p class="text-sm text-gray-600">
                        {{ __('translate.confirmDeleteNote') }}
                    </p>
                </div>
            </template>

            <template #footer>
                <button
                    type="button"
                    class="inline-flex justify-center rounded-xl border border-gray-200 bg-white px-4 py-2 text-xs font-semibold uppercase tracking-widest text-gray-700 shadow-sm hover:bg-gray-50"
                    @click="closeDeleteModal"
                >
                    {{ __('translate.cancel') }}
                </button>

                <button
                    type="button"
                    class="ml-2 inline-flex justify-center rounded-xl bg-red-600 px-4 py-2 text-xs font-semibold uppercase tracking-widest text-white shadow-sm hover:bg-red-700"
                    @click="deleteNote"
                >
                    {{ __('translate.delete') }}
                </button>
            </template>
        </DialogModal>

        <div class="py-10">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <!-- MAIN CARD -->
                <div class="rounded-2xl border border-gray-200 bg-white shadow-sm">
                    <div class="p-6">
                        <!-- Header row -->
                        <div class="flex flex-col gap-4 md:flex-row md:items-start md:justify-between">
                            <!-- Left: Avatar + info -->
                            <div class="flex items-start gap-4">
                                <div class="w-12 h-12 rounded-full bg-[#EBF4FF] flex items-center justify-center text-lg overflow-hidden text-[#7F9CF5]">
                                    <img v-if="application.worker?.profile_photo_url" :src="application.worker?.profile_photo_url" :alt="application.name" class="w-full h-full object-cover"/>
                                    <span v-else>{{ (application.name?.[0]||'') + (application.surname?.[0]||'') }}</span>
                                </div>

                                <div class="min-w-0">
                                    <div class="text-xs font-semibold text-sky-600">
                                        ID {{ application.id }}
                                    </div>

                                    <div class="mt-1 text-xs text-gray-400">
                                        {{ moment(application.created_at).format('DD.MM.YYYY') }}
                                    </div>
                                    <div class="truncate text-lg font-bold text-gray-900">
                                        {{ application.name }} {{ application.surname }}
                                    </div>

                                    <div class="text-sm text-gray-500">
                                        {{ application.project?.position?.allTranslations?.title[usePage().props.language] || __('translate.positionPlaceholder') }}
                                    </div>

                                </div>
                            </div>

                            <!-- Right: status buttons (kolory inline style) -->
                            <div class="flex flex-col items-start gap-2 md:items-end">
                                <div class="text-xs text-gray-400">
                                    {{ __('translate.applicationStatus') }}
                                </div>

                                <div class="flex gap-2">
                                    <button
                                        @click="updateStatus(application.id, 'yes')"
                                        class="rounded-xl px-4 py-2 text-sm font-semibold transition border hover:opacity-90"
                                        :class="[
                                            application.status === 'yes' ? 'text-white border-transparent' : 'bg-white border-gray-200'
                                        ]"
                                        :style="application.status === 'yes'
                                            ? { backgroundColor: '#0d2a52' }
                                            : { color: '#0d2a52' }"
                                    >
                                        {{ __('translate.statusYes') }}
                                    </button>

                                    <button
                                        @click="updateStatus(application.id, 'no')"
                                        class="rounded-xl px-4 py-2 text-sm font-semibold transition border hover:opacity-90"
                                        :class="[
                                            application.status === 'no' ? 'text-white border-transparent' : 'bg-white border-gray-200'
                                        ]"
                                        :style="application.status === 'no'
                                            ? { backgroundColor: '#e31e24' }
                                            : { color: '#e31e24' }"
                                    >
                                        {{ __('translate.statusNo') }}
                                    </button>

                                    <button
                                        @click="updateStatus(application.id, 'maybe')"
                                        class="rounded-xl px-4 py-2 text-sm font-semibold transition border hover:opacity-90"
                                        :class="[
                                            application.status === 'maybe' ? 'text-white border-transparent' : 'bg-white border-gray-200'
                                        ]"
                                        :style="application.status === 'maybe'
                                            ? { backgroundColor: '#00a0e3' }
                                            : { color: '#00a0e3' }"
                                    >
                                        {{ __('translate.statusMaybe') }}
                                    </button>
                                </div>
                                <div class="text-xs float-right text-work-main flex flex-col items-end" v-if="application && application.status_changed_at">
                                    <span>{{__('translate.actualStatus')}}</span>
                                    <span>
                                        {{moment(application.status_changed_at).format('DD.MM.YYYY HH:mm') }}
                                    </span>
                                </div>
                            </div>
                        </div>

                        <!-- NOTE + ACTIONS -->
                        <div class="mt-6 grid grid-cols-1 gap-4 lg:grid-cols-3">
                            <!-- Notes -->
                            <div class="lg:col-span-2">
                                <div class="rounded-2xl border border-gray-200 bg-gray-50 p-4">
                                    <div class="mb-2 flex items-center justify-between">
                                        <div class="text-sm font-semibold text-gray-800">
                                            {{ __('translate.notes') }}
                                        </div>

                                        <button
                                            v-if="application.status === 'yes'"
                                            @click="openAddNoteModal"
                                            class="rounded-xl bg-work-main px-4 py-2 text-xs font-semibold uppercase tracking-widest text-white shadow-sm hover:bg-work-main/90"
                                        >
                                            {{ __('translate.addNote') }}
                                        </button>
                                    </div>

                                    <div v-if="application.status !== 'yes'" class="text-sm text-gray-500">
                                        {{ __('translate.noNotes') }}
                                    </div>

                                    <div v-else>
                                        <div v-if="application.notes && application.notes.length > 0" class="space-y-3">
                                            <div
                                                v-for="note in application.notes"
                                                :key="note.id"
                                                class="rounded-xl border border-gray-200 bg-white p-4"
                                            >
                                                <div class="flex items-start justify-between gap-3">
                                                    <div class="min-w-0">
                                                        <p class="text-sm text-gray-700">
                                                            {{ note.content }}
                                                        </p>
                                                        <p class="mt-1 text-xs text-gray-400">
                                                            {{ moment(note.created_at).format('DD.MM.YYYY HH:mm') }}
                                                        </p>
                                                    </div>

                                                    <div class="flex shrink-0 items-center gap-2">
                                                        <button
                                                            @click="openEditNoteModal(note)"
                                                            class="rounded-lg px-3 py-1 text-xs font-semibold text-work-main hover:bg-work-main/10"
                                                        >
                                                            {{ __('translate.edit') }}
                                                        </button>
                                                        <button
                                                            @click="openDeleteModal(note)"
                                                            class="rounded-lg px-3 py-1 text-xs font-semibold text-red-600 hover:bg-red-50"
                                                        >
                                                            {{ __('translate.delete') }}
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div v-else class="rounded-xl border border-dashed border-gray-300 bg-white p-6 text-center text-sm text-gray-500">
                                            {{ __('translate.noNotes') }}
                                        </div>
                                    </div>
                                </div>
                                <!-- DANE PODSTAWOWE + LICZNIKI -->
                                <div class="mt-6 rounded-2xl border border-gray-200 bg-white p-6">
                                    <div class="grid grid-cols-1 gap-4 md:grid-cols-2">
                                        <div class="rounded-2xl bg-gray-50 p-4">
                                            <div class="text-xs font-medium text-gray-500">
                                                {{ __('translate.nameUser') }} {{ __('translate.and') }} {{ __('translate.surname') }}
                                            </div>
                                            <div class="mt-1 text-sm font-semibold text-gray-900">
                                                {{ application.name }} {{ application.surname }}
                                            </div>
                                        </div>

                                        <div class="rounded-2xl bg-gray-50 p-4">
                                            <div class="text-xs font-medium text-gray-500">{{ __('translate.email') }}</div>
                                            <div class="mt-1 text-sm font-semibold text-gray-900 break-all">
                                                {{ application.email }}
                                            </div>
                                        </div>

                                        <div class="rounded-2xl bg-gray-50 p-4">
                                            <div class="text-xs font-medium text-gray-500">{{ __('translate.phone') }}</div>
                                            <div class="mt-1 text-sm font-semibold text-gray-900">
                                                {{ application.phone }}
                                            </div>
                                        </div>

                                        <div class="rounded-2xl bg-gray-50 p-4">
                                            <div class="text-xs font-medium text-gray-500">{{ __('translate.project') }}</div>
                                            <div class="mt-1 text-sm font-semibold text-gray-900">
                                                {{ application.project?.name || __('translate.noProject') }}
                                            </div>
                                        </div>

                                        <div class="rounded-2xl bg-gray-50 p-4">
                                            <div class="text-xs font-medium text-gray-500">{{ __('translate.aplicationsType') }}</div>
                                            <div class="mt-1 text-sm font-semibold text-gray-900">
                                                {{ application.aplication_user_id ? __('translate.aplicationsWorker') : __('translate.makeAplicationNotRegister') }}
                                            </div>
                                        </div>

                                        <div class="rounded-2xl bg-gray-50 p-4">
                                            <div class="text-xs font-medium text-gray-500">{{ __('translate.whoOpened') }}</div>
                                            <div class="mt-1 text-sm font-semibold text-gray-900">
                                                <template v-if="application.opened_by">
                                                    {{ application.opened_by.name }}
                                                    <span class="text-gray-400 font-normal">
                                                        ({{ moment(application.opened_at).format('DD.MM.YYYY HH:mm') }})
                                                    </span>
                                                    <div class="mt-2">
                                                        <button class="underline text-xs text-work-main" @click="showChangeRecruit = !showChangeRecruit">
                                                            {{ showChangeRecruit ? __('translate.cancel') : __('translate.edit') }}
                                                        </button>
                                                        <div v-if="showChangeRecruit" class="w-full my-2">
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
                                                </template>
                                                <template v-else>
                                                    <span class="text-gray-400 font-normal">{{ __('translate.notViewed') }}</span>
                                                </template>
                                            </div>
                                        </div>

                                        <div v-if="application.status_changed_by_user_id" class="rounded-2xl bg-gray-50 p-4 md:col-span-2">
                                            <div class="text-xs font-medium text-gray-500">{{ __('translate.whoChangedStatus') }}</div>
                                            <div class="mt-1 text-sm font-semibold text-gray-900">
                                                {{ application.status_changed_by?.name }}
                                                <span class="text-gray-400 font-normal">
                                                    ({{ moment(application.status_changed_at).format('DD.MM.YYYY HH:mm') }})
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- DODATKOWE PYTANIA -->
                                <div v-if="application.candidate && candidateQuestions && candidateQuestions.length > 0" class="mt-6 rounded-2xl border border-gray-200 bg-white p-6 relative overflow-hidden">
                                    <div class="absolute top-0 left-0 w-8 h-8 bg-indigo-50 -translate-x-4 -translate-y-4 rotate-45"></div>

                                    <h3 class="text-lg font-bold text-[#0d2a52] mb-4">
                                        {{ __('translate.additionalQuestionsToCandidate') || 'Dodatkowe pytania do kandydata' }}
                                    </h3>

                                    <div v-if="!application.candidate.questions_unlocked_at" class="bg-gray-50 rounded-2xl p-8 border border-dashed border-gray-300 flex flex-col items-center justify-center text-center">
                                        <p class="text-gray-400 text-xs mb-4">
                                            {{ __('translate.unlockQuestionsDate') || 'Odblokowanie pytań:' }} {{ moment().format('DD.MM.YYYY HH:mm') }}
                                        </p>

                                        <p class="text-gray-600 mb-6 max-w-md">
                                            {{ __('translate.unlockQuestionsInfo') }}
                                        </p>

                                        <button
                                            @click="unlockQuestions"
                                            class="rounded-xl bg-work-main px-8 py-3 text-sm font-bold uppercase tracking-widest text-white shadow-lg hover:bg-work-main/90 transition transform hover:scale-105"
                                        >
                                            {{ __('translate.unlockQuestions') }}
                                        </button>
                                        <p class="text-xs text-gray-400 mt-3">
                                            {{ __('translate.unlockQuestionsPointsInfo') }}
                                        </p>
                                    </div>

                                    <div v-else class="space-y-6">
                                        <div v-for="(question, index) in candidateQuestions" :key="question.id" class="rounded-2xl border border-[#0d2a52] p-6 shadow-sm">
                                            <p class="text-base font-bold text-[#0d2a52] mb-4">{{ question.question }}</p>

                                            <div v-if="question.answer_type === 'boolean'" class="flex gap-8">
                                                <label class="flex items-center gap-2 cursor-pointer group">
                                                    <div class="relative flex items-center justify-center w-5 h-5 border-2 border-gray-300 rounded-full group-hover:border-work-main transition-colors"
                                                         :class="{'border-work-main': answersForm.answers[index].boolean_answer === true}">
                                                        <input
                                                            type="radio"
                                                            v-model="answersForm.answers[index].boolean_answer"
                                                            :value="true"
                                                            class="sr-only"
                                                        />
                                                        <div v-if="answersForm.answers[index].boolean_answer === true" class="w-2.5 h-2.5 bg-work-main rounded-full"></div>
                                                    </div>
                                                    <span class="text-sm font-medium text-gray-700">{{ __('translate.yes') || 'tak' }}</span>
                                                </label>

                                                <label class="flex items-center gap-2 cursor-pointer group">
                                                    <div class="relative flex items-center justify-center w-5 h-5 border-2 border-gray-300 rounded-full group-hover:border-work-main transition-colors"
                                                         :class="{'border-work-main': answersForm.answers[index].boolean_answer === false}">
                                                        <input
                                                            type="radio"
                                                            v-model="answersForm.answers[index].boolean_answer"
                                                            :value="false"
                                                            class="sr-only"
                                                        />
                                                        <div v-if="answersForm.answers[index].boolean_answer === false" class="w-2.5 h-2.5 bg-work-main rounded-full"></div>
                                                    </div>
                                                    <span class="text-sm font-medium text-gray-700">{{ __('translate.no') || 'nie' }}</span>
                                                </label>
                                            </div>

                                            <div v-else-if="question.answer_type === 'text'" class="relative">
                                                <textarea
                                                    v-model="answersForm.answers[index].text_answer"
                                                    rows="3"
                                                    class="block w-full rounded-2xl border border-gray-200 bg-gray-50/30 px-4 py-3 text-sm shadow-inner outline-none focus:border-work-main focus:ring-2 focus:ring-work-main/10 transition-all resize-none"
                                                ></textarea>
                                                <div class="absolute bottom-2 right-4 text-[10px] text-gray-300">
                                                    {{ answersForm.answers[index].text_answer?.length || 0 }}/1000
                                                </div>
                                            </div>
                                        </div>

                                        <div class="flex justify-end gap-3 pt-4">
                                            <button
                                                @click="() => { /* Dodaj pytanie - przekierowanie do zarządzania */ router.get(route('candidate-questions.index')) }"
                                                class="rounded-xl bg-[#00a0e3] px-6 py-2.5 text-xs font-bold uppercase tracking-widest text-white shadow-md hover:bg-[#00a0e3]/90 transition"
                                            >
                                                {{ __('translate.addQuestion') || 'DODAJ PYTANIE' }}
                                            </button>

                                            <button
                                                @click="saveAnswers"
                                                :disabled="answersForm.processing"
                                                class="rounded-xl bg-[#0d2a52] px-6 py-2.5 text-xs font-bold uppercase tracking-widest text-white shadow-md hover:bg-[#0d2a52]/90 transition disabled:opacity-50"
                                            >
                                                {{ __('translate.save') || 'ZAPISZ' }}
                                            </button>
                                        </div>

                                        <div v-if="answersForm.errors.answers" class="mt-2 text-sm text-red-600 text-right">
                                            {{ answersForm.errors.answers }}
                                        </div>
                                    </div>
                                </div>

                                <!-- MEDIA -->
                                <div
                                    v-if="application.media && application.media.length > 0"
                                    class="mt-6 rounded-2xl border border-gray-200 bg-white p-4"
                                >
                                    <h3 class="mb-4 text-sm font-semibold text-gray-800">
                                        {{ __('translate.addedFiles') }}
                                    </h3>

                                    <div class="grid grid-cols-1 gap-3 md:grid-cols-2 lg:grid-cols-3">
                                        <div
                                            v-for="media in application.media"
                                            :key="media.id"
                                            class="rounded-xl border border-gray-200 bg-gray-50 p-4"
                                        >
                                            <p class="truncate text-sm font-semibold text-gray-800">
                                                {{ media.file_name }}
                                            </p>
                                            <a
                                                :href="media.original_url"
                                                target="_blank"
                                                class="mt-2 inline-flex text-sm font-semibold text-indigo-600 hover:text-indigo-800"
                                            >
                                                {{ __('translate.getFiles') }}
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Actions -->
                            <div class="rounded-2xl border border-gray-200 bg-white p-4 self-start">
                                <!-- CV ikona -->
                                <div class="flex mb-2">
                                    <div>
                                        <div v-if="application.cv_audio" class="flex items-center justify-center" :title="__('translate.cv_audio')">
                                            <img class="rounded text-gray-600 w-16 h-16" src="/images/icons/recruit/audio_cv.svg" :alt="__('translate.cv_audio')">
                                            <span>{{__('translate.cv_audio')}}</span>
                                        </div>
                                        <div v-else-if="application.cv_video" class="flex items-center justify-center" :title="__('translate.cv_video')">
                                            <img class="rounded text-gray-600 w-16 h-16 " src="/images/icons/recruit/video_cv.svg" :alt="__('translate.cv_video')">
                                            <span>{{__('translate.cv_video')}}</span>

                                        </div>
                                        <div v-else class="flex items-center justify-center" :title="__('translate.cv_classic')">
                                            <img class="rounded text-gray-600 w-16 h-16 " src="/images/icons/recruit/klasyczne_cv.svg" :alt="__('translate.cv_classic')">
                                            <span>{{__('translate.classicCV')}}</span>

                                        </div>
                                    </div>
                                </div>
                                <div class="text-sm font-semibold text-gray-800">
                                    {{ __('translate.actions') || 'Akcje' }}
                                </div>
                                <div class="mt-3 grid grid-cols-2 gap-3">
                                    <a
                                        v-if="application.pathCv"
                                        :href="application.pathCv"
                                        target="_blank"
                                        class="inline-flex items-center justify-center rounded-xl border border-gray-200 bg-white px-3 py-2 text-sm font-semibold text-gray-700 shadow-sm hover:bg-gray-50"
                                    >
                                        {{ __('translate.getCv') }}
                                    </a>

                                    <div
                                        v-else
                                        class="inline-flex items-center justify-center rounded-xl border border-gray-200 bg-gray-50 px-3 py-2 text-sm font-semibold text-gray-400"
                                    >
                                        {{ __('translate.cv') }}
                                    </div>
                                    <button
                                        v-if="!application.candidate"
                                        @click="createCandidate"
                                        class="inline-flex items-center justify-center rounded-xl bg-emerald-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-emerald-700 disabled:opacity-50"
                                        :disabled="candidateForm.processing"
                                    >
                                        {{ __('translate.createCandidate') }}
                                    </button>
                                    <Link
                                        v-else
                                        :href="route('candidates.show', application.candidate.id)"
                                        class="inline-flex items-center justify-center rounded-xl bg-emerald-50 px-3 py-2 text-sm font-semibold text-emerald-700 hover:bg-emerald-100"
                                    >
                                        {{ __('translate.viewCandidateDetails') }} →
                                    </Link>
                                </div>
                                <Link :href="route('front.projects.single', application)"
                                      type="button"
                                      class="bg-white inline-flex items-center justify-center rounded-xl px-1 py-1 my-3 w-full text-sm font-extrabold uppercase text-work-main shadow-sm hover:opacity-90 gap-2 border border-work-main transition hover:bg-work-main hover:text-white"
                                >
                                    <img class="w-12 h-12" src="/images/icons/recruit/zobacz_oferte.svg" alt="zobacz_oferte">
                                    {{ __('translate.goToOffer') || 'Przejdź do oferty' }}
                                </Link>
                                <div class="grid grid-cols-1 gap-3" v-if="application.cv_audio || application.cv_video">
                                    <!-- CV AUDIO -->
                                    <div v-if="application.cv_audio" class="rounded-2xl">
                                        <h3 class="mb-3 text-sm font-semibold text-gray-800">
                                            {{ __('translate.cvAudio') }}
                                        </h3>
                                        <audio
                                            v-if="application.cv_audio?.file_path"
                                            :src="'/storage/' + application.cv_audio?.file_path"
                                            controls
                                            class="w-full"
                                        />
                                    </div>

                                    <!-- CV VIDEO -->
                                    <div v-if="application.cv_video" class="rounded-2xl">
                                        <h3 class="mb-3 text-sm font-semibold text-gray-800">
                                            {{ __('translate.cvVideo') }}
                                        </h3>
                                        <video
                                            v-if="application.cv_video?.file_path"
                                            :src="'/storage/' + application.cv_video?.file_path"
                                            controls
                                            class="w-full rounded-xl"
                                        />
                                    </div>
                                </div>
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
