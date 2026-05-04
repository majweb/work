<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import { Link } from '@inertiajs/vue3';
import { ref } from 'vue';
import { router } from '@inertiajs/vue3';
import DialogModal from '@/Components/DialogModal.vue';
import DangerButton from "@/Components/DangerButton.vue";
import SecondaryButton from "@/Components/SecondaryButton.vue";
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
        <div class="py-12 bg-gray-50/50 min-h-screen">
            <!-- Modal potwierdzenia usunięcia pytania -->
            <DialogModal :show="showDeleteModal" @close="closeDeleteModal">
                <template #title>
                    {{ __('translate.questionDelete') }}
                </template>

                <template #content>
                    {{ __('translate.confirmDeleteQuestion') }}
                </template>

                <template #footer>
                    <SecondaryButton @click="closeDeleteModal">
                        {{ __('translate.cancel') }}
                    </SecondaryButton>

                    <DangerButton class="ml-2" @click="deleteQuestion">
                        {{ __('translate.delete') }}
                    </DangerButton>
                </template>
            </DialogModal>

            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white rounded-[3rem] shadow-xl shadow-blue-900/5 border border-gray-100 p-10 mb-8">
                    <div class="flex items-center justify-between">
                        <div>
                            <h3 class="text-2xl font-black text-[#0A2C5C] uppercase tracking-tight">{{ __('translate.candidateQuestions') }}</h3>
                            <p class="text-[10px] font-bold text-gray-400 uppercase tracking-widest mt-1">{{ __('translate.questionsList') }}</p>
                        </div>
                        <Link :href="route('candidate-questions.create')" class="inline-flex items-center px-10 py-4 bg-[#0A2C5C] border border-transparent rounded-2xl font-black text-[10px] text-white uppercase tracking-widest hover:bg-blue-800 transition duration-200 shadow-lg shadow-blue-900/20">
                            {{ __('translate.addQuestion') }}
                        </Link>
                    </div>
                </div>

                <div v-if="questions.data.length === 0" class="bg-white rounded-[3rem] p-20 text-center shadow-xl shadow-blue-900/5 border border-gray-100">
                    <div class="w-20 h-20 bg-gray-50 rounded-full flex items-center justify-center mx-auto mb-6">
                        <svg class="w-10 h-10 text-gray-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                    <p class="text-xs font-black text-gray-400 uppercase tracking-widest">{{ __('translate.noQuestionsAvailable') }}</p>
                </div>

                <div v-else class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    <div v-for="question in questions.data" :key="question.id"
                        class="group bg-white rounded-[2.5rem] p-8 shadow-sm border border-gray-100 flex flex-col transition-all duration-300 hover:shadow-xl hover:shadow-blue-900/5 hover:-translate-y-1"
                        :class="{ 'opacity-80 grayscale-[0.3]': !question.is_active }"
                    >
                        <div class="flex justify-between items-start gap-4 mb-6">
                            <div class="flex-grow">
                                <p class="text-[10px] font-black text-gray-300 uppercase tracking-[0.2em] mb-2">
                                    ID {{ question.id }} • {{ question.answer_type === 'text' ? __('translate.text') : __('translate.yesNo') }}
                                </p>
                                <h4 class="text-xl font-black text-gray-900 uppercase tracking-tight leading-tight">
                                    {{ question.question }}
                                </h4>
                            </div>
                            <button @click="toggleActive(question.id)"
                                class="px-4 py-2 rounded-full text-[9px] font-black uppercase tracking-widest transition-all duration-200 shadow-sm shrink-0"
                                :class="question.is_active
                                    ? 'bg-blue-50 text-[#0A2C5C] hover:bg-blue-100'
                                    : 'bg-red-50 text-red-500 hover:bg-red-100'"
                            >
                                {{ question.is_active ? __('translate.active') : __('translate.inactive') }}
                            </button>
                        </div>

                        <div class="bg-gray-50/50 rounded-2xl p-6 border border-gray-100/50 mb-8 flex-grow">
                            <div v-if="question.answer_type === 'boolean'" class="flex gap-10">
                                <div class="flex items-center gap-3">
                                    <div class="w-6 h-6 rounded-full border-2 border-gray-200 bg-white"></div>
                                    <span class="text-[10px] font-black text-gray-400 uppercase tracking-widest">{{ __('translate.yes') }}</span>
                                </div>
                                <div class="flex items-center gap-3">
                                    <div class="w-6 h-6 rounded-full border-2 border-gray-200 bg-white"></div>
                                    <span class="text-[10px] font-black text-gray-400 uppercase tracking-widest">{{ __('translate.no') }}</span>
                                </div>
                            </div>
                            <div v-else class="h-24 w-full rounded-2xl border-2 border-gray-100 bg-white relative">
                                <span class="absolute bottom-4 right-6 text-[9px] text-gray-200 font-mono tracking-widest uppercase">2000 chars max</span>
                            </div>
                        </div>

                        <div class="w-full space-y-2 mt-auto">
                            <Link :href="route('candidate-questions.edit', question.id)" class="flex justify-center items-center w-full bg-[#0A2C5C] text-white font-black py-3 rounded-2xl text-[10px] uppercase tracking-widest hover:bg-blue-800 transition shadow-md shadow-blue-900/10">
                                {{ __('translate.edit') }}
                            </Link>
                            <button @click="openDeleteModal(question)" class="block w-full bg-red-50 text-red-600 font-black py-3 rounded-2xl text-[10px] uppercase tracking-widest hover:bg-red-100 transition">
                                {{ __('translate.delete') }}
                            </button>
                        </div>
                    </div>
                </div>

                <div class="mt-12 flex justify-center" v-if="props.questions.total > 10">
                    <Pagination :links="props.questions.links" />
                </div>
            </div>
        </div>
    </AppLayout>
</template>
