<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import {ref} from 'vue';
import {Link, router, useForm} from '@inertiajs/vue3';
import DialogModal from '@/Components/DialogModal.vue';
import moment from "moment";
const props = defineProps({
    application: Object
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
        form.put(route('admin.aplicationsA.update-note', currentNote.value.id), {
            preserveScroll: true,
            onSuccess: () => closeNoteModal()
        });
    } else {
        // Dodawanie nowej notatki
        form.post(route('admin.aplicationsA.store-note', props.application.id), {
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
        router.delete(route('admin.aplicationsA.delete-note', noteToDelete.value.id), {
            preserveScroll: true,
            onSuccess: () => closeDeleteModal()
        });
    }
};

const updateStatus = async (id, status) => {
    router.put(route('admin.aplicationsA.update-status', id), {
        status
    }, {
        preserveScroll: true,
        preserveState: true
    });
};

const resetStatus = (id, status) => {
    router.put(route('admin.aplicationsA.resetStatus', id), {
        status
    }, {
        preserveScroll: true,
        preserveState: true
    });
};
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
                    <Link :href="route('admin.aplicationsA.index')"
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
