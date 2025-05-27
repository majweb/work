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
    <div class="space-y-4">
        <div class="flex justify-between items-center">
            <h3 class="text-lg font-medium text-gray-900">{{ __('translate.projectQuestions') }}</h3>
            <span class="text-sm text-gray-500">{{ questions.length }}/{{ maxQuestions }}</span>
        </div>
        <div v-if="questions.length === 0" class="text-gray-500 text-center py-4">
            {{ __('translate.noQuestionsAdded') }}
        </div>
        <InputError :message="error ? error[`questions`] : ''" class="text-center mt-2" />

        <div v-for="(question, index) in questions" :key="index" class="p-4 bg-gray-50 rounded-lg shadow-sm">
            <div class="flex justify-between items-start mb-2">
                <span class="font-medium">{{ __('translate.question') }} {{ index + 1 }}</span>
                <DangerButton type="button" class="h-8 px-2 py-1" @click="removeQuestion(index)">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </DangerButton>
            </div>

            <div class="space-y-3">
                <div>
                    <InputLabel :for="`question-${index}`" :value="__('translate.questionContent')" />
                    <TextInput
                        :id="`question-${index}`"
                        v-model="question.content"
                        class="mt-1 block w-full"
                        type="text"
                    />
                    <InputError
                        :message="error ? error[`questions.${index}.content`] : ''"
                        class="mt-2"/>
                </div>

                                    <div>
                    <InputLabel :for="`time-${index}`" :value="__('translate.answerTime')" />
                    <div class="mt-1 flex flex-wrap gap-3">
                        <div v-for="option in answerTimeOptions" :key="`time-${index}-${option.value}`" class="flex items-center">
                            <input
                                :id="`time-${index}-${option.value}`"
                                type="radio"
                                :value="option.value"
                                v-model="question.answer_time"
                                class="border-gray-300 text-blue-work shadow-sm focus:ring-blue-work mr-2"
                            />
                            <label :for="`time-${index}-${option.value}`">{{ option.value }}</label>
                        </div>
                    </div>
                    <InputError
                        :message="error ? error[`questions.${index}.answer_time`] : ''"
                        class="mt-2"/>
                </div>
            </div>
        </div>

        <div class="flex justify-center">
            <PrimaryButton
                type="button"
                @click="addQuestion"
                :disabled="questions.length >= maxQuestions"
                :class="{ 'opacity-50 cursor-not-allowed': questions.length >= maxQuestions }"
            >
                {{ __('translate.addQuestion') }}
            </PrimaryButton>
        </div>

        <div v-if="questions.length >= maxQuestions" class="mt-3 text-center text-sm text-orange-500 font-medium">
            {{ __('translate.limitComplete') }} - {{ __('translate.toMuchElements') }}
        </div>
    </div>
</template>
