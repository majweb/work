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
        <div class="py-8">
            <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
                <div class="mb-8 flex justify-between items-center">
                    <Link
                        :href="route('candidate-questions.index')"
                        class="text-red-500 font-bold text-sm uppercase tracking-widest hover:underline transition-all"
                    >
                        {{ __('translate.goBack') }}
                    </Link>
                </div>

                <div class="bg-white overflow-hidden shadow-sm sm:rounded-3xl p-8 border border-gray-100">
                    <div class="mb-8">
                        <h2 class="text-3xl font-bold text-[#1a335d] mb-3">
                            {{ __('translate.chooseQuestionType') }}
                        </h2>
                        <p class="text-base text-gray-500 leading-relaxed max-w-2xl">
                            {{ __('translate.questionTypeDescription') }}
                        </p>
                    </div>

                    <form @submit.prevent="submit">
                        <div class="flex flex-col sm:flex-row gap-4 mb-8">
                            <button
                                type="button"
                                @click="form.answer_type = 'boolean'"
                                class="flex-1 flex flex-col items-center justify-center gap-3 py-6 px-5 rounded-2xl border-2 transition-all font-black uppercase tracking-[0.1em] text-sm"
                                :class="form.answer_type === 'boolean'
                                    ? 'border-[#1a335d] bg-[#1a335d] text-white shadow-xl scale-[1.02]'
                                    : 'border-gray-100 bg-gray-50/50 text-[#1a335d] hover:border-[#1a335d]/30 hover:bg-gray-50'"
                            >
                                <div class="w-24 h-24 shrink-0 flex items-center justify-center relative">
                                    <img
                                        src="/images/icons/firm/pytanie_zamkniete.svg"
                                        class="w-full h-full object-contain transition-all"
                                        :class="form.answer_type === 'boolean' ? 'brightness-0 invert opacity-20' : 'opacity-80'"
                                    />
                                    <div v-if="form.answer_type === 'boolean'" class="absolute inset-0 flex items-center justify-center">
                                        <div class="bg-white text-[#1a335d] rounded-full p-2 shadow-lg">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="4" d="M5 13l4 4L19 7" />
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                                {{ __('translate.yesNoQuestion') }}
                            </button>

                            <button
                                type="button"
                                @click="form.answer_type = 'text'"
                                class="flex-1 flex flex-col items-center justify-center gap-3 py-6 px-5 rounded-2xl border-2 transition-all font-black uppercase tracking-[0.1em] text-sm"
                                :class="form.answer_type === 'text'
                                    ? 'border-[#1a335d] bg-[#1a335d] text-white shadow-xl scale-[1.02]'
                                    : 'border-gray-100 bg-gray-50/50 text-[#1a335d] hover:border-[#1a335d]/30 hover:bg-gray-50'"
                            >
                                <div class="w-24 h-24 shrink-0 flex items-center justify-center relative">
                                    <img
                                        src="/images/icons/firm/pytanie_otwarte.svg"
                                        class="w-full h-full object-contain transition-all"
                                        :class="form.answer_type === 'text' ? 'brightness-0 invert opacity-20' : 'opacity-80'"
                                    />
                                    <div v-if="form.answer_type === 'text'" class="absolute inset-0 flex items-center justify-center">
                                        <div class="bg-white text-[#1a335d] rounded-full p-2 shadow-lg">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="4" d="M5 13l4 4L19 7" />
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                                {{ __('translate.textQuestion') }}
                            </button>
                        </div>

                        <div class="mb-8">
                            <div class="relative group">
                                <textarea
                                    id="question"
                                    v-model="form.question"
                                    class="block w-full border-2 border-gray-100 focus:border-[#00b0e8] focus:ring-0 rounded-3xl p-6 text-[#1a335d] text-lg font-bold placeholder:text-gray-200 transition-all min-h-[150px] shadow-sm group-hover:border-gray-200"
                                    :placeholder="__('translate.addQuestionPlaceholder')"
                                ></textarea>
                                <div class="absolute bottom-6 right-8 text-[11px] text-gray-300 font-mono tracking-widest">
                                    {{ form.question.length }} / 2000
                                </div>
                            </div>
                            <InputError :message="form.errors.question" class="mt-2" />
                        </div>

                        <div class="flex items-center justify-end">
                            <button
                                type="submit"
                                class="bg-[#1a335d] hover:bg-[#1a335d]/90 text-white px-12 py-3 rounded-xl text-lg font-black uppercase tracking-[0.2em] shadow-lg transition-all active:scale-95 disabled:opacity-50"
                                :disabled="form.processing"
                            >
                                {{ __('translate.save') }}
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </AppLayout>
</template>
