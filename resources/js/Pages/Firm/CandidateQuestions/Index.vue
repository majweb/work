<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import { Link } from '@inertiajs/vue3';
import { ref } from 'vue';
import { router } from '@inertiajs/vue3';
import DialogModal from '@/Components/DialogModal.vue';

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

        <div class="py-12">
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
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6">
                    <div class="flex justify-between items-center mb-6">
                        <h3 class="text-lg font-medium text-gray-900">{{ __('translate.questionsList') }}</h3>
                        <Link :href="route('candidate-questions.create')" class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded">
                            {{ __('translate.addQuestion') }}
                        </Link>
                    </div>

                    <div v-if="questions.data.length === 0" class="text-center py-8 text-gray-500">
                        {{ __('translate.noQuestionsAvailable') }}
                    </div>

                    <div v-else class="overflow-x-auto">
                        <table class="min-w-full divide-y divide-gray-200">
                            <thead class="bg-gray-50">
                                <tr>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        {{ __('translate.question') }}
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        {{ __('translate.answerType') }}
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        {{ __('translate.status') }}
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        {{ __('translate.actions') }}
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                                <tr v-for="question in questions.data" :key="question.id">
                                    <td class="px-6 py-4 whitespace-normal">
                                        <div class="text-sm font-medium text-gray-900">{{ question.question }}</div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="text-sm text-gray-500">
                                            <span v-if="question.answer_type === 'text'" class="px-2 py-1 inline-flex text-xs leading-5 font-semibold rounded-full bg-blue-100 text-blue-800">
                                                {{ __('translate.text') }}
                                            </span>
                                            <span v-else class="px-2 py-1 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                                {{ __('translate.yesNo') }}
                                            </span>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <button @click="toggleActive(question.id)" class="text-sm font-medium">
                                            <span v-if="question.is_active" class="px-2 py-1 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                                {{ __('translate.active') }}
                                            </span>
                                            <span v-else class="px-2 py-1 inline-flex text-xs leading-5 font-semibold rounded-full bg-red-100 text-red-800">
                                                {{ __('translate.inactive') }}
                                            </span>
                                        </button>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                        <Link :href="route('candidate-questions.edit', question.id)" class="text-indigo-600 hover:text-indigo-900 mr-3">
                                            {{ __('translate.edit') }}
                                        </Link>
                                        <button @click="openDeleteModal(question)" class="text-red-600 hover:text-red-900">
                                            {{ __('translate.delete') }}
                                        </button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </AppLayout>
</template>
