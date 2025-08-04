<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import { useForm } from '@inertiajs/vue3';
import { router } from '@inertiajs/vue3';
import InputLabel from '@/Components/InputLabel.vue';
import TextInput from '@/Components/TextInput.vue';
import InputError from '@/Components/InputError.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';

const form = useForm({
    question: '',
    answer_type: 'text',
});

const submit = () => {
    form.post(route('candidate-questions.store'), {
        onSuccess: () => form.reset(),
    });
};
</script>

<template>
    <AppLayout :title="__('translate.addQuestion')">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('translate.addQuestion') }}
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6">
                    <form @submit.prevent="submit">
                        <div class="mb-6">
                            <InputLabel for="question" :value="__('translate.question')" />
                            <textarea
                                id="question"
                                v-model="form.question"
                                class="mt-1 block w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm"
                                rows="3"
                                required
                            ></textarea>
                            <InputError :message="form.errors.question" class="mt-2" />
                        </div>

                        <div class="mb-6">
                            <InputLabel for="answer_type" :value="__('translate.answerType')" />
                            <div class="mt-2 space-y-2">
                                <div class="flex items-center">
                                    <input
                                        id="answer_type_text"
                                        v-model="form.answer_type"
                                        type="radio"
                                        value="text"
                                        class="h-4 w-4 text-indigo-600 border-gray-300 focus:ring-indigo-500"
                                    />
                                    <label for="answer_type_text" class="ml-3 block text-sm font-medium text-gray-700">
                                        {{ __('translate.text') }}
                                    </label>
                                </div>
                                <div class="flex items-center">
                                    <input
                                        id="answer_type_boolean"
                                        v-model="form.answer_type"
                                        type="radio"
                                        value="boolean"
                                        class="h-4 w-4 text-indigo-600 border-gray-300 focus:ring-indigo-500"
                                    />
                                    <label for="answer_type_boolean" class="ml-3 block text-sm font-medium text-gray-700">
                                        {{ __('translate.yesNo') }}
                                    </label>
                                </div>
                            </div>
                            <InputError :message="form.errors.answer_type" class="mt-2" />
                        </div>

                        <div class="flex items-center justify-end mt-4">
                            <PrimaryButton
                                class="ml-4"
                                :class="{ 'opacity-25': form.processing }"
                                :disabled="form.processing"
                            >
                                {{ __('translate.save') }}
                            </PrimaryButton>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </AppLayout>
</template>
