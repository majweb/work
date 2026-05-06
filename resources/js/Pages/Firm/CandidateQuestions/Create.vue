<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import { useForm, Link } from '@inertiajs/vue3';
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
        <div class="py-12 bg-gray-50/50 min-h-screen px-2 sm:px-0">
            <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white rounded-[3rem] shadow-xl shadow-blue-900/5 border border-gray-100 p-10 mb-8">
                    <div class="flex items-center justify-between">
                        <div>
                            <h3 class="text-2xl font-black text-[#0A2C5C] uppercase tracking-tight">{{ __('translate.addQuestion') }}</h3>
                            <p class="text-[10px] font-bold text-gray-400 uppercase tracking-widest mt-1">{{ __('translate.chooseQuestionType') }}</p>
                        </div>
                        <Link :href="route('candidate-questions.index')" class="inline-flex items-center px-10 py-4 bg-red-50 border border-transparent rounded-2xl font-black text-[10px] text-red-600 uppercase tracking-widest hover:bg-red-100 transition duration-200 shadow-lg shadow-red-900/5">
                            {{ __('translate.goBack') }}
                        </Link>
                    </div>
                </div>

                <div class="bg-white rounded-[3rem] shadow-xl shadow-blue-900/5 border border-gray-100 p-10">
                    <div class="mb-10">
                        <p class="text-[10px] font-black text-gray-300 uppercase tracking-[0.2em] mb-2">{{ __('translate.description') }}</p>
                        <p class="text-xs font-bold text-gray-500 uppercase tracking-widest leading-relaxed">
                            {{ __('translate.questionTypeDescription') }}
                        </p>
                    </div>

                    <form @submit.prevent="submit">
                        <div class="flex flex-col sm:flex-row gap-6 mb-10">
                            <button
                                type="button"
                                @click="form.answer_type = 'boolean'"
                                class="flex-1 flex flex-col items-center justify-center gap-4 py-8 px-6 rounded-[2rem] border-2 transition-all font-black uppercase tracking-widest text-[10px]"
                                :class="form.answer_type === 'boolean'
                                    ? 'border-[#0A2C5C] bg-[#0A2C5C] text-white shadow-xl scale-[1.02]'
                                    : 'border-gray-50 bg-gray-50/50 text-gray-400 hover:border-[#0A2C5C]/30 hover:bg-gray-50'"
                            >
                                <div class="w-20 h-20 shrink-0 flex items-center justify-center relative">
                                    <img
                                        src="/images/icons/firm/pytanie_zamkniete.svg"
                                        class="w-full h-full object-contain transition-all"
                                        :class="form.answer_type === 'boolean' ? 'brightness-0 invert opacity-20' : 'opacity-40'"
                                    />
                                    <div v-if="form.answer_type === 'boolean'" class="absolute inset-0 flex items-center justify-center">
                                        <div class="bg-white text-[#0A2C5C] rounded-2xl p-2 shadow-lg">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
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
                                class="flex-1 flex flex-col items-center justify-center gap-4 py-8 px-6 rounded-[2rem] border-2 transition-all font-black uppercase tracking-widest text-[10px]"
                                :class="form.answer_type === 'text'
                                    ? 'border-[#0A2C5C] bg-[#0A2C5C] text-white shadow-xl scale-[1.02]'
                                    : 'border-gray-50 bg-gray-50/50 text-gray-400 hover:border-[#0A2C5C]/30 hover:bg-gray-50'"
                            >
                                <div class="w-20 h-20 shrink-0 flex items-center justify-center relative">
                                    <img
                                        src="/images/icons/firm/pytanie_otwarte.svg"
                                        class="w-full h-full object-contain transition-all"
                                        :class="form.answer_type === 'text' ? 'brightness-0 invert opacity-20' : 'opacity-40'"
                                    />
                                    <div v-if="form.answer_type === 'text'" class="absolute inset-0 flex items-center justify-center">
                                        <div class="bg-white text-[#0A2C5C] rounded-2xl p-2 shadow-lg">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="4" d="M5 13l4 4L19 7" />
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                                {{ __('translate.textQuestion') }}
                            </button>
                        </div>

                        <div class="mb-10">
                            <p class="text-[10px] font-black text-gray-300 uppercase tracking-[0.2em] mb-4">{{ __('translate.questionContent') }}</p>
                            <div class="relative group">
                                <textarea
                                    id="question"
                                    v-model="form.question"
                                    class="block w-full border-2 border-gray-50 focus:border-[#00a0e3] focus:ring-0 rounded-[2rem] p-8 text-gray-900 text-lg font-black placeholder:text-gray-200 transition-all min-h-[180px] shadow-sm group-hover:border-gray-100 bg-gray-50/30"
                                    :placeholder="__('translate.addQuestionPlaceholder')"
                                ></textarea>
                                <div class="absolute bottom-8 right-8 text-[9px] text-gray-300 font-mono tracking-widest uppercase font-black">
                                    {{ form.question.length }} / 2000
                                </div>
                            </div>
                            <InputError :message="form.errors.question" class="mt-4" />
                        </div>

                        <div class="flex items-center justify-end">
                            <button
                                type="submit"
                                class="bg-[#0A2C5C] hover:bg-[#00a0e3] text-white px-12 py-4 rounded-2xl text-[10px] font-black uppercase tracking-widest shadow-lg shadow-blue-900/20 transition-all active:scale-95 disabled:opacity-50"
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
