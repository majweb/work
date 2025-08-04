<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import {Link, router} from '@inertiajs/vue3';
import moment from "moment";
import DialogModal from '@/Components/DialogModal.vue';
import {ref} from 'vue';

const props = defineProps({
    projectQuestion: Object
});

const showDeleteModal = ref(false);

// Zamyka modal potwierdzenia usunięcia
const closeDeleteModal = () => {
    showDeleteModal.value = false;
};

// Usuwa pytanie
const deleteQuestion = () => {
    router.delete(route('admin.questions-accepts.destroy', props.projectQuestion.id), {
        onSuccess: () => closeDeleteModal()
    });
};

// Akceptuje lub odrzuca pytanie
const toggleAccept = () => {
    router.put(route('admin.questions-accepts.accept', props.projectQuestion.id), {}, {
        preserveScroll: true
    });
};
</script>

<template>
    <AppLayout :title="__('translate.question')">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('translate.question') }}
            </h2>
        </template>

        <!-- Modal potwierdzenia usunięcia pytania -->
        <DialogModal :show="showDeleteModal" @close="closeDeleteModal">
            <template #title>
                {{ __('translate.questionDelete') }}
            </template>

            <template #content>
                <div class="mt-2">
                    <p class="text-sm text-gray-600">{{ __('translate.questionDeleteConfirm') }}</p>
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
                    @click="deleteQuestion"
                >
                    {{ __('translate.delete') }}
                </button>
            </template>
        </DialogModal>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6">
                    <Link :href="route('admin.questions-accepts.index')"
                          class="inline-flex items-center px-4 py-2 bg-gray-200 border border-transparent rounded-md font-semibold text-xs text-gray-800 uppercase tracking-widest hover:bg-gray-300 active:bg-gray-400 focus:outline-none focus:border-gray-500 focus:ring focus:ring-gray-300 disabled:opacity-25 transition mb-6">
                        &larr; {{ __('translate.backToList') }}
                    </Link>

                    <!-- Główny panel pytania -->
                    <div class="bg-white rounded-lg shadow-md p-6 mb-6">
                        <div class="flex flex-col md:flex-row md:justify-between items-start md:items-center mb-4">
                            <h3 class="text-lg font-medium text-gray-900 mb-2 md:mb-0">{{ __('translate.question') }}</h3>
                            <div class="flex flex-col sm:flex-row gap-2">
                                <button
                                    v-if="!projectQuestion.accepted"
                                    @click="toggleAccept"
                                    class="bg-gray-200 hover:bg-gray-300 text-gray-700 px-4 py-2 rounded text-sm font-medium transition"
                                >
                                    {{ __('translate.yes') }}
                                </button>
                                <span
                                    v-else
                                    class="bg-green-600 text-white px-4 py-2 rounded text-sm font-medium inline-block"
                                >
    {{ __('translate.accepted') }}
</span>

                                <button @click="showDeleteModal = true"
                                        class="bg-red-600 text-white px-4 py-2 rounded text-sm font-medium hover:bg-red-700 transition">
                                    {{ __('translate.delete') }}
                                </button>
                            </div>
                        </div>

                        <!-- Status akceptacji -->
                        <div class="mb-6" v-if="projectQuestion.accepted">
                            <div class="flex items-center">
                                <div class="h-2 w-2 bg-green-500 rounded-full mr-2"></div>
                                <p class="text-sm text-gray-600">{{ __('translate.accepted') }} {{ moment(projectQuestion.accepted).format('DD.MM.YYYY HH:mm') }}</p>
                            </div>
                        </div>

                        <!-- Treść pytania -->
                        <div class="bg-gray-50 p-6 rounded-lg mb-6">
                            <h4 class="text-md font-medium text-gray-800 mb-2">{{ __('translate.content') }}:</h4>
                            <div class="prose max-w-none">
                                <p class="text-gray-700 whitespace-pre-wrap">{{ projectQuestion.content }}</p>
                            </div>
                        </div>
                    </div>

                    <!-- Informacje o autorze i projekcie -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div class="bg-white rounded-lg shadow-md p-6">
                            <h3 class="text-lg font-medium text-gray-900 mb-4">{{ __('translate.user') }}</h3>
                            <div class="grid grid-cols-1 gap-2">
                                <div>
                                    <p class="text-sm font-medium text-gray-500">{{ __('translate.name') }}</p>
                                    <p class="text-base">{{ projectQuestion.user?.name || __('translate.noOptions') }}</p>
                                </div>
                                <div>
                                    <p class="text-sm font-medium text-gray-500">{{ __('translate.date') }}</p>
                                    <p class="text-base">{{ moment(projectQuestion.created_at).format('DD.MM.YYYY HH:mm') }}</p>
                                </div>
                            </div>
                        </div>

                        <div class="bg-white rounded-lg shadow-md p-6">
                            <h3 class="text-lg font-medium text-gray-900 mb-4">{{ __('translate.project') }}</h3>
                            <div class="grid grid-cols-1 gap-2">
                                <div v-if="projectQuestion.project">
                                    <p class="text-sm font-medium text-gray-500">{{ __('translate.id_project') }}</p>
                                    <p class="text-base">{{ projectQuestion.project.id }}</p>
                                </div>
                                <div v-else>
                                    <p class="text-sm font-medium text-gray-500">{{ __('translate.project') }}</p>
                                    <p class="text-base text-gray-600">{{ __('translate.noProject') }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </AppLayout>
</template>
