<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import { computed, ref } from 'vue';
import { Link, router, useForm, usePage } from '@inertiajs/vue3';
import DialogModal from '@/Components/DialogModal.vue';
import moment from "moment";
import __ from "@/lang.js";

const props = defineProps({
    application: Object,
    otherRecruits: Array,
    project: Object,
});

// Stan dla modalu notatek
const showNoteModal = ref(false);
const showDeleteModal = ref(false);
const currentNote = ref(null);
const isEditing = ref(false);
const noteToDelete = ref(null);


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
        form.put(route('project-aplications-recruits.update-note', currentNote.value.id), {
            preserveScroll: true,
            onSuccess: () => closeNoteModal()
        });
    } else {
        // Dodawanie nowej notatki
        form.post(route('project-aplications-recruits.store-note', props.application.id), {
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
        router.delete(route('project-aplications-recruits.delete-note', noteToDelete.value.id), {
            preserveScroll: true,
            onSuccess: () => closeDeleteModal()
        });
    }
};

const updateStatus = async (id, status) => {
    router.put(route('project-aplications-recruits.update', id), {
        status
    }, {
        preserveScroll: true,
        preserveState: true
    });
};

const resetStatus = (id, status) => {
    router.put(route('project-aplications-recruits.resetStatus', id), {
        status
    }, {
        preserveScroll: true,
        preserveState: true
    });
};

const candidateForm = useForm({});
const createCandidate = () => {
    candidateForm.post(route('recruit.applications.create-candidate', props.application.id), {
        preserveScroll: true,
    });
};
</script>

<template>
    <AppLayout :title="__('translate.aplicationDetails')">
        <template #header>
            <div class="flex items-center justify-between">
                <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                    {{ __('translate.aplicationDetails') }}
                </h2>

                <Link
                    :href="route('project-aplications-recruits.index')"
                    class="inline-flex items-center gap-2 rounded-2xl border border-gray-100 bg-white px-6 py-3 text-xs font-black uppercase tracking-widest text-[#0A2C5C] shadow-sm hover:bg-gray-50 transition-all hover:-translate-y-0.5"
                >
                    <span class="text-lg leading-none">←</span>
                    {{ __('translate.backToList') }}
                </Link>
            </div>
        </template>

        <!-- Modal: Add/Edit note -->
        <DialogModal :show="showNoteModal" @close="closeNoteModal">
            <template #title>
                <div class="text-xl font-black text-[#0A2C5C] uppercase tracking-widest text-center w-full">
                    {{ isEditing ? __('translate.editNote') : __('translate.addNote') }}
                </div>
            </template>

            <template #content>
                <div class="mt-4">
                    <label for="note-content" class="text-[10px] font-black text-gray-400 uppercase tracking-widest ml-1">
                        {{ __('translate.noteContent') }}
                    </label>

                    <textarea
                        id="note-content"
                        v-model="form.content"
                        rows="6"
                        maxlength="500"
                        class="mt-2 block w-full rounded-2xl border border-gray-100 bg-gray-50/50 p-4 text-sm shadow-inner outline-none focus:border-blue-200 focus:bg-white focus:ring-0 transition-all resize-none"
                        :placeholder="__('translate.enterNoteContent')"
                    />

                    <div class="mt-3 flex items-center justify-between">
                        <p v-if="form.errors.content" class="text-[10px] font-bold text-red-600 uppercase tracking-tight">
                            {{ form.errors.content }}
                        </p>
                        <p class="ml-auto text-[10px] font-black text-gray-400 uppercase tracking-widest">
                            {{ form.content.length }}/500
                        </p>
                    </div>
                </div>
            </template>

            <template #footer>
                <div class="flex justify-center gap-3 w-full">
                    <button
                        type="button"
                        class="inline-flex justify-center rounded-2xl border border-gray-100 bg-white px-8 py-3 text-[10px] font-black uppercase tracking-widest text-gray-400 shadow-sm hover:bg-gray-50 transition-all"
                        @click="closeNoteModal"
                    >
                        {{ __('translate.cancel') }}
                    </button>

                    <button
                        type="button"
                        class="inline-flex justify-center rounded-2xl bg-[#0A2C5C] px-8 py-3 text-[10px] font-black uppercase tracking-widest text-white shadow-lg shadow-blue-900/20 hover:bg-blue-800 transition-all hover:-translate-y-0.5"
                        @click="saveNote"
                    >
                        {{ __('translate.save') }}
                    </button>
                </div>
            </template>
        </DialogModal>

        <!-- Modal: Delete note -->
        <DialogModal :show="showDeleteModal" @close="closeDeleteModal">
            <template #title>
                <div class="text-xl font-black text-red-600 uppercase tracking-widest text-center w-full">
                    {{ __('translate.deleteNote') }}
                </div>
            </template>

            <template #content>
                <div class="mt-4 text-center">
                    <p class="text-sm font-bold text-gray-500 uppercase tracking-tight">
                        {{ __('translate.confirmDeleteNote') }}
                    </p>
                </div>
            </template>

            <template #footer>
                <div class="flex justify-center gap-3 w-full">
                    <button
                        type="button"
                        class="inline-flex justify-center rounded-2xl border border-gray-100 bg-white px-8 py-3 text-[10px] font-black uppercase tracking-widest text-gray-400 shadow-sm hover:bg-gray-50 transition-all"
                        @click="closeDeleteModal"
                    >
                        {{ __('translate.cancel') }}
                    </button>

                    <button
                        type="button"
                        class="inline-flex justify-center rounded-2xl bg-red-600 px-8 py-3 text-[10px] font-black uppercase tracking-widest text-white shadow-lg shadow-red-600/20 hover:bg-red-700 transition-all hover:-translate-y-0.5"
                        @click="deleteNote"
                    >
                        {{ __('translate.delete') }}
                    </button>
                </div>
            </template>
        </DialogModal>

        <div class="py-12 bg-gray-50/50 min-h-screen">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 space-y-8">
                <!-- HEADER CARD -->
                <section class="bg-white rounded-3xl shadow-sm border border-gray-100 overflow-hidden">
                    <div class="p-8">
                        <div class="flex flex-col md:flex-row md:items-center justify-between gap-6">
                            <div>
                                <h2 class="text-2xl font-bold text-gray-900">{{ __('translate.aplicationDetails') }}</h2>
                                <p class="text-sm text-gray-500 mt-1">{{ __('translate.aplicationDetailsInfo') }}</p>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- MAIN CARD -->
                <div class="rounded-[3rem] border border-gray-100 bg-white shadow-xl shadow-blue-900/5 overflow-hidden">
                    <div class="p-8 md:p-10">
                        <!-- Header row -->
                        <div class="flex flex-col gap-6 md:flex-row md:items-start md:justify-between">
                            <!-- Left: Avatar + info -->
                            <div class="flex items-start gap-6">
                                <div class="w-20 h-20 rounded-[2rem] bg-blue-50 flex items-center justify-center text-2xl overflow-hidden text-[#0A2C5C] font-black border-2 border-white shadow-md">
                                        <img v-if="application.worker?.profile_photo_url" :src="application.worker?.profile_photo_url" :alt="application.name" class="w-full h-full object-cover"/>
                                        <span v-else>{{ (application.name?.[0]||'') + (application.surname?.[0]||'') }}</span>
                                    </div>

                                <div class="min-w-0">
                                    <div class="flex items-center gap-3 mb-2">
                                        <span class="text-[10px] font-black text-blue-500 uppercase tracking-widest bg-blue-50 px-2.5 py-1 rounded-lg border border-blue-100/50 shadow-sm">
                                            ID {{ application.id }}
                                        </span>
                                        <span class="text-[10px] font-black text-gray-400 uppercase tracking-widest">
                                            {{ moment(application.created_at).format('DD.MM.YYYY') }}
                                        </span>
                                    </div>

                                    <h3 class="truncate text-3xl font-black text-gray-900 uppercase tracking-tight leading-none mb-2">
                                        {{ application.name }} {{ application.surname }}
                                    </h3>

                                    <div class="text-sm font-bold text-gray-400 uppercase tracking-widest">
                                        {{ application.project?.position?.allTranslations?.title[usePage().props.language] || __('translate.positionPlaceholder') }}
                                    </div>

                                </div>
                            </div>

                            <!-- Right: status buttons -->
                            <div class="flex flex-col items-start gap-3 md:items-end">
                                <div class="text-[10px] font-black text-gray-400 uppercase tracking-[0.2em]">
                                    {{ __('translate.applicationStatus') }}
                                </div>

                                <div class="flex gap-2 p-1.5 bg-gray-50 rounded-2xl border border-gray-100">
                                    <button
                                        @click="updateStatus(application.id, 'yes')"
                                        class="rounded-xl px-6 py-2.5 text-[10px] font-black uppercase tracking-widest transition-all shadow-sm"
                                        :class="[
                                            application.status === 'yes' ? 'bg-[#0A2C5C] text-white shadow-blue-900/20' : 'bg-white text-gray-400 hover:text-gray-600'
                                        ]"
                                    >
                                        {{ __('translate.statusYes') }}
                                    </button>

                                    <button
                                        @click="updateStatus(application.id, 'maybe')"
                                        class="rounded-xl px-6 py-2.5 text-[10px] font-black uppercase tracking-widest transition-all shadow-sm"
                                        :class="[
                                            application.status === 'maybe' ? 'bg-[#06b6d4] text-white shadow-cyan-500/20' : 'bg-white text-gray-400 hover:text-gray-600'
                                        ]"
                                    >
                                        {{ __('translate.statusMaybe') }}
                                    </button>

                                    <button
                                        @click="updateStatus(application.id, 'no')"
                                        class="rounded-xl px-6 py-2.5 text-[10px] font-black uppercase tracking-widest transition-all shadow-sm"
                                        :class="[
                                            application.status === 'no' ? 'bg-red-600 text-white shadow-red-600/20' : 'bg-white text-gray-400 hover:text-gray-600'
                                        ]"
                                    >
                                        {{ __('translate.statusNo') }}
                                    </button>
                                </div>
                                <div class="text-[10px] font-bold text-gray-400 uppercase tracking-tight flex flex-col items-end" v-if="application && application.status_changed_at">
                                    <div class="flex items-center gap-2">
                                        <span>{{__('translate.actualStatus')}}</span>
                                        <span class="text-[#0A2C5C]">
                                            {{moment(application.status_changed_at).format('DD.MM.YYYY HH:mm') }}
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- NOTE + ACTIONS -->
                        <div class="mt-12 grid grid-cols-1 gap-10 lg:grid-cols-3">
                            <!-- Notes -->
                            <div class="lg:col-span-2 space-y-8">
                                <div class="rounded-[2rem] border border-gray-100 bg-gray-50/50 p-8 shadow-inner">
                                        <div class="mb-6 flex items-center justify-between">
                                            <div class="text-[10px] font-black text-[#0A2C5C] uppercase tracking-[0.2em]">
                                                {{ __('translate.notes') }}
                                            </div>

                                            <button
                                                v-if="application.status === 'yes'"
                                                @click="openAddNoteModal"
                                                class="rounded-xl bg-[#0A2C5C] px-6 py-2 text-[10px] font-black uppercase tracking-widest text-white shadow-md shadow-blue-900/10 hover:bg-blue-800 transition-all hover:-translate-y-0.5"
                                            >
                                                {{ __('translate.addNote') }}
                                            </button>
                                        </div>

                                        <div v-if="application.status !== 'yes'" class="py-10 text-center">
                                            <p class="text-xs font-bold text-gray-400 uppercase tracking-widest">{{ __('translate.noNotes') }}</p>
                                        </div>

                                        <div v-else>
                                            <div v-if="application.notes && application.notes.length > 0" class="space-y-4">
                                                <div
                                                    v-for="note in application.notes"
                                                    :key="note.id"
                                                    class="rounded-2xl border border-gray-100 bg-white p-6 shadow-sm hover:shadow-md transition-all group/note"
                                                >
                                                    <div class="flex items-start justify-between gap-4">
                                                        <div class="min-w-0">
                                                            <p class="text-sm font-medium text-gray-700 leading-relaxed">
                                                                {{ note.content }}
                                                            </p>
                                                            <p class="mt-2 text-[10px] font-black text-gray-400 uppercase tracking-widest">
                                                                {{ moment(note.created_at).format('DD.MM.YYYY HH:mm') }}
                                                            </p>
                                                        </div>

                                                        <div class="flex shrink-0 items-center gap-2 opacity-0 group-hover/note:opacity-100 transition-opacity">
                                                            <button
                                                                @click="openEditNoteModal(note)"
                                                                class="rounded-lg px-3 py-1.5 text-[10px] font-black uppercase tracking-widest text-blue-600 hover:bg-blue-50 transition-colors"
                                                            >
                                                                {{ __('translate.edit') }}
                                                            </button>
                                                            <button
                                                                @click="openDeleteModal(note)"
                                                                class="rounded-lg px-3 py-1.5 text-[10px] font-black uppercase tracking-widest text-red-600 hover:bg-red-50 transition-colors"
                                                            >
                                                                {{ __('translate.delete') }}
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div v-else class="rounded-[2rem] border border-dashed border-gray-300 bg-white p-12 text-center">
                                                <p class="text-xs font-bold text-gray-400 uppercase tracking-widest">{{ __('translate.noNotes') }}</p>
                                            </div>
                                        </div>
                                    </div>
                                <!-- DANE PODSTAWOWE -->
                                <div class="rounded-[2.5rem] border border-gray-100 bg-white p-8 shadow-sm">
                                    <div class="flex items-center gap-4 mb-8">
                                        <h3 class="text-[10px] font-black text-[#0A2C5C] uppercase tracking-[0.2em]">{{ __('translate.mainData') }}</h3>
                                        <div class="h-px flex-1 bg-gray-100"></div>
                                    </div>

                                    <div class="grid grid-cols-1 gap-4 md:grid-cols-2">
                                        <div class="rounded-2xl bg-gray-50/50 p-5 border border-gray-100/50 transition-all hover:bg-white hover:shadow-md group/item">
                                            <div class="text-[10px] font-black text-gray-400 uppercase tracking-widest mb-1 group-hover/item:text-blue-500 transition-colors">
                                                {{ __('translate.nameUser') }} {{ __('translate.and') }} {{ __('translate.surname') }}
                                            </div>
                                            <div class="text-sm font-black text-gray-900 uppercase tracking-tight">
                                                {{ application.name }} {{ application.surname }}
                                            </div>
                                        </div>

                                        <div class="rounded-2xl bg-gray-50/50 p-5 border border-gray-100/50 transition-all hover:bg-white hover:shadow-md group/item">
                                            <div class="text-[10px] font-black text-gray-400 uppercase tracking-widest mb-1 group-hover/item:text-blue-500 transition-colors">{{ __('translate.email') }}</div>
                                            <div class="text-sm font-black text-gray-900 break-all lowercase">
                                                {{ application.email }}
                                            </div>
                                        </div>

                                        <div class="rounded-2xl bg-gray-50/50 p-5 border border-gray-100/50 transition-all hover:bg-white hover:shadow-md group/item">
                                            <div class="text-[10px] font-black text-gray-400 uppercase tracking-widest mb-1 group-hover/item:text-blue-500 transition-colors">{{ __('translate.phone') }}</div>
                                            <div class="text-sm font-black text-gray-900 tracking-widest">
                                                {{ application.phone }}
                                            </div>
                                        </div>
                                        <div class="rounded-2xl bg-gray-50/50 p-5 border border-gray-100/50 transition-all hover:bg-white hover:shadow-md group/item">
                                            <div class="text-[10px] font-black text-gray-400 uppercase tracking-widest mb-1 group-hover/item:text-blue-500 transition-colors">{{ __('translate.project') }}</div>
                                            <div class="text-sm font-black text-[#0A2C5C] uppercase tracking-tight">
                                                {{ application.project?.title[usePage().props.language] || __('translate.noProject') }}
                                            </div>
                                        </div>

                                        <div class="rounded-2xl bg-gray-50/50 p-5 border border-gray-100/50 transition-all hover:bg-white hover:shadow-md group/item">
                                            <div class="text-[10px] font-black text-gray-400 uppercase tracking-widest mb-1 group-hover/item:text-blue-500 transition-colors">{{ __('translate.aplicationsType') }}</div>
                                            <div class="text-sm font-black text-gray-900 uppercase tracking-tight">
                                                {{ application.aplication_user_id ? __('translate.aplicationsWorker') : __('translate.makeAplicationNotRegister') }}
                                            </div>
                                        </div>

                                        <div class="rounded-2xl bg-gray-50/50 p-5 border border-gray-100/50 transition-all hover:bg-white hover:shadow-md group/item">
                                            <div class="text-[10px] font-black text-gray-400 uppercase tracking-widest mb-1 group-hover/item:text-blue-500 transition-colors">{{ __('translate.whoOpened') }}</div>
                                            <div class="text-sm font-black text-gray-900 uppercase tracking-tight">
                                                <template v-if="application.opened_by">
                                                    {{ application.opened_by.name }}
                                                    <span class="text-gray-400 font-bold ml-2">
                                                ({{ moment(application.opened_at).format('DD.MM.YYYY HH:mm') }})
                                            </span>
                                                </template>
                                                <template v-else>
                                                    <span class="text-gray-300">{{ __('translate.notViewed') }}</span>
                                                </template>
                                            </div>
                                        </div>

                                        <div v-if="application.status_changed_by_user_id" class="rounded-2xl bg-gray-50/50 p-5 border border-gray-100/50 transition-all hover:bg-white hover:shadow-md group/item md:col-span-2">
                                            <div class="text-[10px] font-black text-gray-400 uppercase tracking-widest mb-1 group-hover/item:text-blue-500 transition-colors">{{ __('translate.whoChangedStatus') }}</div>
                                            <div class="text-sm font-black text-gray-900 uppercase tracking-tight">
                                                {{ application.status_changed_by?.name }}
                                                <span class="text-gray-400 font-bold ml-2">
                                            ({{ moment(application.status_changed_at).format('DD.MM.YYYY HH:mm') }})
                                        </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- MEDIA -->
                                <div
                                    v-if="application.media && application.media.length > 0"
                                    class="rounded-[2.5rem] border border-gray-100 bg-white p-8 shadow-sm"
                                >
                                    <div class="flex items-center gap-4 mb-8">
                                        <h3 class="text-[10px] font-black text-[#0A2C5C] uppercase tracking-[0.2em]">{{ __('translate.addedFiles') }}</h3>
                                        <div class="h-px flex-1 bg-gray-100"></div>
                                    </div>

                                    <div class="grid grid-cols-1 gap-4 md:grid-cols-2 lg:grid-cols-3">
                                        <div
                                            v-for="media in application.media"
                                            :key="media.id"
                                            class="rounded-2xl border border-gray-100 bg-gray-50/50 p-5 hover:bg-white hover:shadow-md transition-all group/file"
                                        >
                                            <p class="truncate text-xs font-black text-gray-900 uppercase tracking-tight mb-3">
                                                {{ media.file_name }}
                                            </p>
                                            <a
                                                :href="media.original_url"
                                                target="_blank"
                                                class="inline-flex items-center gap-2 text-[10px] font-black uppercase tracking-widest text-blue-600 hover:text-blue-800 transition-colors"
                                            >
                                                {{ __('translate.getFiles') }}
                                                <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"/></svg>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Actions -->
                            <div class="rounded-[2.5rem] border border-gray-100 bg-white p-8 self-start space-y-8 shadow-sm">
                                <!-- CV ikona -->
                                <div class="flex items-center justify-center p-6 bg-gray-50 rounded-[2rem] border border-gray-100 shadow-inner">
                                    <div v-if="application.cv_audio" class="flex flex-col items-center gap-3" :title="__('translate.cv_audio')">
                                        <div class="p-4 bg-white rounded-2xl shadow-sm ring-1 ring-blue-100">
                                            <img class="w-12 h-12" src="/images/icons/recruit/audio_cv.svg" :alt="__('translate.cv_audio')">
                                        </div>
                                        <span class="text-[10px] font-black text-[#0A2C5C] uppercase tracking-widest">{{__('translate.cv_audio')}}</span>
                                    </div>
                                    <div v-else-if="application.cv_video" class="flex flex-col items-center gap-3" :title="__('translate.cv_video')">
                                        <div class="p-4 bg-white rounded-2xl shadow-sm ring-1 ring-blue-100">
                                            <img class="w-12 h-12" src="/images/icons/recruit/video_cv.svg" :alt="__('translate.cv_video')">
                                        </div>
                                        <span class="text-[10px] font-black text-[#0A2C5C] uppercase tracking-widest">{{__('translate.cv_video')}}</span>
                                    </div>
                                    <div v-else class="flex flex-col items-center gap-3" :title="__('translate.cv_classic')">
                                        <div class="p-4 bg-white rounded-2xl shadow-sm ring-1 ring-blue-100">
                                            <img class="w-12 h-12" src="/images/icons/recruit/klasyczne_cv.svg" :alt="__('translate.cv_classic')">
                                        </div>
                                        <span class="text-[10px] font-black text-[#0A2C5C] uppercase tracking-widest">{{__('translate.classicCV')}}</span>
                                    </div>
                                </div>

                                <div>
                                    <h3 class="text-[10px] font-black text-[#0A2C5C] uppercase tracking-[0.2em] mb-4 text-center">{{ __('translate.actions') }}</h3>
                                    <div class="flex flex-col gap-3">
                                        <a
                                            v-if="application.pathCv"
                                            :href="application.pathCv"
                                            target="_blank"
                                            class="inline-flex items-center justify-center gap-2 rounded-2xl border border-gray-100 bg-white px-6 py-4 text-[10px] font-black uppercase tracking-widest text-[#0A2C5C] shadow-sm hover:shadow-md hover:bg-gray-50 transition-all"
                                        >
                                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"/></svg>
                                            {{ __('translate.getCv') }}
                                        </a>

                                        <div
                                            v-else
                                            class="inline-flex items-center justify-center rounded-2xl border border-gray-100 bg-gray-50 px-6 py-4 text-[10px] font-black uppercase tracking-widest text-gray-300"
                                        >
                                            {{ __('translate.cv') }}
                                        </div>

                                        <button
                                            v-if="!application.candidate"
                                            @click="createCandidate"
                                            class="inline-flex items-center justify-center rounded-2xl bg-emerald-600 px-6 py-4 text-[10px] font-black uppercase tracking-widest text-white shadow-lg shadow-emerald-600/20 hover:bg-emerald-700 transition-all hover:-translate-y-0.5 disabled:opacity-50"
                                            :disabled="candidateForm.processing"
                                        >
                                            {{ __('translate.createCandidate') }}
                                        </button>
                                        <Link
                                            v-else
                                            :href="route('candidates.show', application.candidate.id)"
                                            class="inline-flex items-center justify-center rounded-2xl bg-emerald-50 px-6 py-4 text-[10px] font-black uppercase tracking-widest text-emerald-700 border border-emerald-100 hover:bg-emerald-100 transition-all text-center"
                                        >
                                            {{ __('translate.viewCandidateDetails') }} →
                                        </Link>

                                        <Link :href="route('front.projects.single',application.project)"
                                            type="button"
                                            class="inline-flex items-center justify-center rounded-2xl bg-white px-6 py-4 text-[10px] font-black uppercase tracking-widest text-blue-600 border-2 border-blue-600 shadow-sm hover:bg-blue-600 hover:text-white transition-all gap-3"
                                        >
                                            <img class="w-8 h-8" src="/images/icons/recruit/zobacz_oferte.svg" alt="zobacz_oferte">
                                            {{ __('translate.goToOffer') || 'Przejdź do oferty' }}
                                        </Link>
                                    </div>
                                </div>

                                <div class="space-y-6 pt-6 border-t border-gray-100" v-if="application.cv_audio || application.cv_video">
                                    <!-- CV AUDIO -->
                                    <div v-if="application.cv_audio" class="space-y-3">
                                        <h3 class="text-[10px] font-black text-[#0A2C5C] uppercase tracking-[0.2em] text-center">
                                            {{ __('translate.cvAudio') }}
                                        </h3>
                                        <div class="p-4 bg-gray-50 rounded-2xl border border-gray-100">
                                            <audio
                                                v-if="application.cv_audio?.file_path"
                                                :src="'/storage/' + application.cv_audio?.file_path"
                                                controls
                                                class="w-full"
                                            />
                                        </div>
                                    </div>

                                    <!-- CV VIDEO -->
                                    <div v-if="application.cv_video" class="space-y-3">
                                        <h3 class="text-[10px] font-black text-[#0A2C5C] uppercase tracking-[0.2em] text-center">
                                            {{ __('translate.cvVideo') }}
                                        </h3>
                                        <div class="bg-gray-50 rounded-2xl border border-gray-100 overflow-hidden shadow-inner">
                                            <video
                                                v-if="application.cv_video?.file_path"
                                                :src="'/storage/' + application.cv_video?.file_path"
                                                controls
                                                class="w-full"
                                            />
                                        </div>
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
