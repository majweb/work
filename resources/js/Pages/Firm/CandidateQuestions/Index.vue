<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import { Link } from '@inertiajs/vue3';
import { ref } from 'vue';
import { router } from '@inertiajs/vue3';
import DialogModal from '@/Components/DialogModal.vue';
import Success from "@/Pages/Buy/Success.vue";
import Pagination from "@/Components/Pagination.vue";

const props = defineProps({
    questions: Object,
});

const showDeleteModal = ref(false);
const questionToDelete = ref(null);

const toggleActive = (id) => {
    router.put(route('candidate-questions.toggle-active', id), {}, {
        preserveScroll: true,
    });
};

const openDeleteModal = (question) => {
    questionToDelete.value = question;
    showDeleteModal.value = true;
};

const closeDeleteModal = () => {
    showDeleteModal.value = false;
    setTimeout(() => {
        questionToDelete.value = null;
    }, 300);
};

const deleteQuestion = () => {
    if (questionToDelete.value) {
        router.delete(route('candidate-questions.destroy', questionToDelete.value.id), {
            preserveScroll: true,
            onSuccess: () => closeDeleteModal()
        });
    }
};
</script>

<template>
    <AppLayout :title="__('translate.candidateQuestions')">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('translate.candidateQuestions') }}
            </h2>
        </template>

        <div class="py-8">
            <!-- Modal potwierdzenia usunięcia pytania -->
            <DialogModal :show="showDeleteModal" @close="closeDeleteModal">
                <template #title>
                    {{ __('translate.deleteQuestion') }}
                </template>

                <template #content>
                    <div class="mt-2">
                        <p class="text-sm text-gray-600">{{ __('translate.confirmDeleteQuestion') }}</p>
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

            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-3xl p-6">
                    <div class="flex justify-between items-center mb-8">
                        <h3 class="text-2xl font-bold text-gray-800 tracking-tight">{{ __('translate.questionsList') }}</h3>
                        <Link :href="route('candidate-questions.create')" class="bg-[#00b0e8] hover:bg-[#00b0e8]/90 text-white px-10 py-3 rounded-2xl text-sm font-bold uppercase tracking-wider shadow-md transition-all active:scale-95">
                            {{ __('translate.addQuestion') }}
                        </Link>
                    </div>

                    <div v-if="questions.data.length === 0" class="text-center py-16 bg-gray-50/50 rounded-3xl border-2 border-dashed border-gray-200 text-gray-400">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-16 w-16 mx-auto mb-4 opacity-20" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        <p class="text-lg font-medium">{{ __('translate.noQuestionsAvailable') }}</p>
                    </div>

                    <div v-else class="space-y-8">
                        <div v-for="question in questions.data" :key="question.id"
                            class="rounded-3xl border border-gray-100 bg-white shadow-sm hover:shadow-xl transition-all duration-300 overflow-hidden group"
                            :class="{ 'opacity-80 grayscale-[0.3]': !question.is_active }"
                        >
                            <div class="p-6 sm:p-8">
                                <div class="flex flex-col sm:flex-row justify-between items-start gap-4 mb-6">
                                    <h4 class="text-xl font-bold text-[#1a335d] leading-tight flex-grow pt-1">
                                        {{ question.question }}
                                    </h4>

                                    <div class="flex items-center gap-4 shrink-0 w-full sm:w-auto justify-between sm:justify-end">
                                        <button @click="toggleActive(question.id)"
                                            class="px-5 py-2 rounded-full text-[11px] font-black uppercase tracking-[0.1em] transition-all duration-200 shadow-sm"
                                            :class="question.is_active
                                                ? 'bg-[#e7f9f3] text-[#24c18f] hover:bg-[#d4f4e9]'
                                                : 'bg-red-50 text-red-500 hover:bg-red-100'"
                                        >
                                            {{ question.is_active ? __('translate.active') : __('translate.inactive') }}
                                        </button>

                                        <div class="flex gap-2">
                                            <Link :href="route('candidate-questions.edit', question.id)"
                                                class="p-2.5 bg-gray-50 text-gray-400 rounded-xl hover:bg-[#1a335d] hover:text-white transition-all duration-200 shadow-sm"
                                                :title="__('translate.edit')"
                                            >
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                                </svg>
                                            </Link>
                                            <button @click="openDeleteModal(question)"
                                                class="p-2.5 bg-gray-50 text-gray-400 rounded-xl hover:bg-red-500 hover:text-white transition-all duration-200 shadow-sm"
                                                :title="__('translate.delete')"
                                            >
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                </div>

                                <div class="bg-gray-50/50 rounded-2xl p-6 border border-gray-100/50">
                                    <div v-if="question.answer_type === 'boolean'" class="flex gap-10">
                                        <div class="flex items-center gap-3">
                                            <div class="w-6 h-6 rounded-full border-2 border-gray-300 bg-white"></div>
                                            <span class="text-base font-medium text-gray-500">{{ __('translate.yes') }}</span>
                                        </div>
                                        <div class="flex items-center gap-3">
                                            <div class="w-6 h-6 rounded-full border-2 border-gray-300 bg-white"></div>
                                            <span class="text-base font-medium text-gray-500">{{ __('translate.no') }}</span>
                                        </div>
                                    </div>
                                    <div v-else class="h-28 w-full rounded-2xl border-2 border-gray-100 bg-white relative">
                                        <span class="absolute bottom-4 right-6 text-[11px] text-gray-300 font-mono tracking-widest">0 / 2000</span>
                                    </div>
                                </div>

                                <div class="mt-6 flex items-center text-[11px] font-black uppercase tracking-[0.2em] text-gray-300">
                                    <span class="bg-gray-100 h-[2px] flex-grow mr-6"></span>
                                    {{ question.answer_type === 'text' ? __('translate.text') : __('translate.yesNo') }}
                                    <span class="bg-gray-100 h-[2px] flex-grow ml-6"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <Pagination v-if="props.questions.total > 10" class="mt-8 text-center mx-auto" :links="props.questions.links" />
                </div>
            </div>
        </div>
    </AppLayout>
</template>
