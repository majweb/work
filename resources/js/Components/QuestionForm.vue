<script setup>
import { ref, watch } from 'vue';
import InputLabel from '@/Components/InputLabel.vue';
import InputError from '@/Components/InputError.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import DangerButton from '@/Components/DangerButton.vue';
import TextInput from '@/Components/TextInput.vue';

const props = defineProps({
    modelValue: {
        type: Array,
        default: () => []
    },
    error: {
        type: [String, Object],
        default: null
    },
});

const emit = defineEmits(['update:modelValue']);

const questions = ref(props.modelValue.length ? [...props.modelValue] : []);
const maxQuestions = 10;

// Available answer time options
const answerTimeOptions = ref([
    {value: 15},
    {value: 30},
    {value: 45},
    {value: 60},
]);

const addQuestion = () => {
    if (questions.value.length < maxQuestions) {
        questions.value.push({
            content: '',
            answer_time: 30,
        });
        emitUpdate();
    }
};

const removeQuestion = (index) => {
    questions.value.splice(index, 1);
    emitUpdate();
};

const emitUpdate = () => {
    emit('update:modelValue', questions.value);
};

watch(() => questions.value, () => {
    emitUpdate();
}, { deep: true });

watch(() => props.modelValue, (newValue) => {
    if (JSON.stringify(newValue) !== JSON.stringify(questions.value)) {
        questions.value = [...newValue];
    }
}, { deep: true });
</script>

<template>
    <div class="space-y-6">
        <div class="flex justify-between items-center bg-gray-50/50 p-4 rounded-2xl border border-gray-100">
            <h3 class="text-[10px] font-black text-[#0A2C5C] uppercase tracking-[0.2em]">{{ __('translate.projectQuestions') }}</h3>
            <span class="px-3 py-1 bg-white rounded-lg border border-gray-100 text-[10px] font-black text-gray-400 uppercase tracking-widest shadow-sm">{{ questions.length }} / {{ maxQuestions }}</span>
        </div>

        <div v-if="questions.length === 0" class="text-center py-12 bg-gray-50/30 rounded-[2.5rem] border border-dashed border-gray-200">
            <p class="text-xs font-black text-gray-400 uppercase tracking-widest">{{ __('translate.noQuestionsAdded') }}</p>
        </div>

        <InputError :message="error ? error[`questions`] : ''" class="text-center mt-2 text-[10px] font-black uppercase tracking-widest" />

        <div class="grid grid-cols-1 gap-6">
            <div v-for="(question, index) in questions" :key="index" class="relative bg-white rounded-[2.5rem] p-8 border border-gray-100 shadow-xl shadow-blue-900/5 transition-all hover:-translate-y-1">
                <div class="flex justify-between items-center mb-8">
                    <div class="flex items-center gap-3">
                        <span class="w-8 h-8 rounded-xl bg-blue-50 flex items-center justify-center text-[10px] font-black text-[#0A2C5C] border border-blue-100 shadow-sm">{{ index + 1 }}</span>
                        <span class="text-[10px] font-black text-gray-400 uppercase tracking-[0.2em]">{{ __('translate.question') }}</span>
                    </div>
                    <button
                        type="button"
                        @click="removeQuestion(index)"
                        class="w-10 h-10 rounded-xl bg-red-50 text-red-500 hover:bg-red-500 hover:text-white transition-all shadow-sm flex items-center justify-center border border-red-100"
                    >
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>

                <div class="space-y-8">
                    <div class="bg-gray-50/50 p-6 rounded-[2rem] border border-gray-100/50">
                        <InputLabel :for="`question-${index}`" :value="__('translate.questionContent')" class="text-[10px] font-black text-gray-400 uppercase tracking-widest mb-3" />
                        <input
                            :id="`question-${index}`"
                            v-model="question.content"
                            class="w-full px-5 py-4 text-xs rounded-2xl border-gray-100 bg-white focus:bg-white focus:ring-0 focus:border-[#00a0e3] transition-all font-bold tracking-widest uppercase"
                            type="text"
                            :placeholder="__('translate.questionContent')"
                        />
                        <InputError
                            :message="error ? error[`questions.${index}.content`] : ''"
                            class="mt-2 text-[10px] font-black uppercase tracking-widest"/>
                    </div>

                    <div class="bg-gray-50/50 p-6 rounded-[2rem] border border-gray-100/50">
                        <InputLabel :for="`time-${index}`" :value="__('translate.answerTime')" class="text-[10px] font-black text-gray-400 uppercase tracking-widest mb-4" />
                        <div class="flex flex-wrap gap-4">
                            <div v-for="option in answerTimeOptions" :key="`time-${index}-${option.value}`"
                                 class="flex items-center gap-3 bg-white p-3 rounded-xl border border-gray-100 shadow-sm cursor-pointer hover:bg-blue-50 transition-all"
                                 @click="question.answer_time = option.value"
                            >
                                <div class="relative flex items-center justify-center">
                                    <input
                                        :id="`time-${index}-${option.value}`"
                                        type="radio"
                                        :value="option.value"
                                        v-model="question.answer_time"
                                        class="peer sr-only"
                                    />
                                    <div class="h-5 w-5 rounded-full border-2 border-gray-200 bg-white transition-all peer-checked:border-[#0A2C5C] peer-checked:border-[5px]"></div>
                                </div>
                                <label :for="`time-${index}-${option.value}`" class="text-xs font-black text-gray-500 uppercase tracking-widest cursor-pointer">{{ option.value }}s</label>
                            </div>
                        </div>
                        <InputError
                            :message="error ? error[`questions.${index}.answer_time`] : ''"
                            class="mt-4 text-[10px] font-black uppercase tracking-widest"/>
                    </div>
                </div>
            </div>
        </div>

        <div class="flex flex-col items-center gap-4 mt-8">
            <button
                type="button"
                @click="addQuestion"
                :disabled="questions.length >= maxQuestions"
                class="inline-flex items-center gap-3 px-10 py-4 bg-[#0A2C5C] text-white text-[10px] font-black rounded-2xl uppercase tracking-widest hover:bg-blue-800 shadow-lg shadow-blue-900/20 transition-all hover:-translate-y-0.5 disabled:opacity-50"
            >
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M12 4v16m8-8H4"/></svg>
                {{ __('translate.addQuestion') }}
            </button>

            <div v-if="questions.length >= maxQuestions" class="px-4 py-2 bg-orange-50 rounded-xl border border-orange-100 text-[10px] font-black text-orange-600 uppercase tracking-widest">
                {{ __('translate.limitComplete') }} - {{ __('translate.toMuchElements') }}
            </div>
        </div>
    </div>
</template>
