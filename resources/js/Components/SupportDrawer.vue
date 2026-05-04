<script setup>
import { ref, onMounted, computed, watch } from 'vue';
import { useForm, usePage } from '@inertiajs/vue3';
import { Dialog, DialogPanel, DialogTitle, TransitionChild, TransitionRoot } from '@headlessui/vue';
import axios from 'axios';
import __ from "@/lang.js";
import InputError from "@/Components/InputError.vue";
import Checkbox from "@/Components/Checkbox.vue";
import Dropdown from "@/Components/Dropdown.vue";
import DialogModal from "@/Components/DialogModal.vue";
import SecondaryButton from "@/Components/SecondaryButton.vue";

const props = defineProps({
    show: Boolean,
});

const emit = defineEmits(['close']);

const page = usePage();
const captchaText = ref('');
const coloredCaptcha = ref([]);
const successMessage = ref('');
const form = useForm({
    type: 'question',
    subject: '',
    content: '',
    captcha: '',
    agreements: [],
});

const supportAgreements = computed(() => page.props.supportAgreements || []);

const agreementsModalVisible = ref(false);

const isAllAgreementsChecked = computed(() => {
    const requiredAgreements = supportAgreements.value.filter(agreement => agreement.is_required);
    if (requiredAgreements.length === 0) return false;

    const requiredIds = requiredAgreements.map(agreement => agreement.id.toString());
    return requiredIds.every(id => form.agreements.includes(id));
});

const toggleAllAgreements = () => {
    if (isAllAgreementsChecked.value) {
        form.agreements = [];
    } else {
        form.agreements = supportAgreements.value
            .filter(agreement => agreement.is_required)
            .map(agreement => agreement.id.toString());
    }
};

const randomColor = () => {
    const colors = ['#00a0e3', '#e31e24', '#0d2a52'];
    return colors[Math.floor(Math.random() * colors.length)];
};

const colorizeCaptcha = (text) => {
    return text.split('').map(letter => ({
        letter,
        color: randomColor()
    }));
};

const loadCaptcha = async () => {
    try {
        const response = await axios.get('/generateCaptcha');
        captchaText.value = response.data.captchaText;
        coloredCaptcha.value = colorizeCaptcha(captchaText.value);
        form.captcha = '';
    } catch (error) {
        console.error("Błąd ładowania CAPTCHA", error);
    }
};

onMounted(() => {
    loadCaptcha();
});

const contentCharsRemaining = computed(() => 500 - form.content.length);

watch(() => form.content, (newValue) => {
    if (newValue.length > 500) {
        form.content = newValue.substring(0, 500);
    }
});

watch(() => props.show, (newValue) => {
    if (newValue) {
        loadCaptcha();
    } else {
        form.clearErrors();
        form.reset();
        successMessage.value = '';
    }
});

const submit = () => {
    form.post(route('support.tickets.store'), {
        preserveScroll: true,
        onSuccess: () => {
            successMessage.value = __('translate.ticket_sent_success');
            form.reset();
            loadCaptcha();
            setTimeout(() => {
                successMessage.value = '';
                emit('close');
            }, 3000);
        },
        onError: (errors) => {
            if (errors.throttle) {
                form.setError('captcha', errors.throttle);
            }
            loadCaptcha();
        }
    });
};
</script>

<template>
    <TransitionRoot as="template" :show="show">
        <Dialog as="div" class="relative z-[60]" @close="emit('close')">
            <!-- Overlay z animacją fade -->
            <TransitionChild
                as="template"
                enter="ease-in-out duration-500"
                enter-from="opacity-0"
                enter-to="opacity-100"
                leave="ease-in-out duration-500"
                leave-from="opacity-100"
                leave-to="opacity-0"
            >
                <div class="fixed inset-0 bg-[#0A2C5C]/20 backdrop-blur-sm transition-opacity" />
            </TransitionChild>

            <div class="fixed inset-0 overflow-hidden">
                <div class="absolute inset-0 overflow-hidden">
                    <div class="pointer-events-none fixed inset-y-0 right-0 flex max-w-full pl-10">
                        <!-- Panel z animacją wysuwania z prawej -->
                        <TransitionChild
                            as="template"
                            enter="transform transition ease-in-out duration-500 sm:duration-700"
                            enter-from="translate-x-full"
                            enter-to="translate-x-0"
                            leave="transform transition ease-in-out duration-500 sm:duration-700"
                            leave-from="translate-x-0"
                            leave-to="translate-x-full"
                        >
                            <DialogPanel class="pointer-events-auto w-screen max-w-md">
                                <div class="flex h-full flex-col bg-white shadow-2xl relative overflow-hidden">
                                    <!-- Background Decoration -->
                                    <div class="absolute top-0 right-0 w-64 h-64 bg-blue-50 rounded-full -mr-32 -mt-32 blur-3xl opacity-50"></div>
                                    <div class="absolute bottom-0 left-0 w-48 h-48 bg-red-50 rounded-full -ml-24 -mb-24 blur-3xl opacity-50"></div>

                                    <!-- Header -->
                                    <div class="relative bg-white px-5 py-6 sm:px-6 border-b border-gray-100">
                                        <div class="flex items-center justify-between mb-4">
                                            <div class="inline-flex items-center gap-3 px-3 py-1.5 bg-blue-50 rounded-2xl">
                                                <div class="w-2 h-2 rounded-full bg-[#00a0e3] animate-pulse"></div>
                                                <span class="text-[10px] font-black text-[#00a0e3] uppercase tracking-widest">{{ __('translate.support_tickets') }}</span>
                                            </div>
                                            <button type="button" class="rounded-2xl p-2 text-gray-400 hover:text-[#0A2C5C] hover:bg-gray-100 transition-colors" @click="emit('close')">
                                                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                                                </svg>
                                            </button>
                                        </div>
                                        <DialogTitle class="text-2xl font-black text-[#0A2C5C] uppercase tracking-tight">
                                            {{ __('translate.how_can_we_help') }}
                                        </DialogTitle>
                                    </div>

                                    <!-- Body -->
                                    <div class="relative flex-1 overflow-y-auto px-5 py-6 sm:px-6">
                                        <!-- Success Message -->
                                        <Transition
                                            enter-active-class="transition duration-500 ease-out"
                                            enter-from-class="transform -translate-y-4 opacity-0"
                                            enter-to-class="transform translate-y-0 opacity-100"
                                            leave-active-class="transition duration-300 ease-in"
                                            leave-from-class="opacity-100"
                                            leave-to-class="opacity-0"
                                        >
                                            <div v-if="successMessage" class="mb-4 p-4 bg-green-50 border border-green-100 rounded-3xl flex flex-col items-center justify-center text-center gap-3">
                                                <div class="w-10 h-10 bg-green-100 rounded-full flex items-center justify-center text-green-600">
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="3" stroke="currentColor" class="w-6 h-6">
                                                        <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                                                    </svg>
                                                </div>
                                                <p class="text-[10px] font-black text-green-900 uppercase tracking-widest">{{ successMessage }}</p>
                                            </div>
                                        </Transition>

                                        <form @submit.prevent="submit" class="space-y-4">
                                            <!-- Type Selection -->
                                            <div class="space-y-4">
                                                <label class="text-[10px] font-black text-gray-400 uppercase tracking-widest ml-2">{{ __('translate.support_type') }}</label>
                                                <div class="grid grid-cols-1 sm:grid-cols-3 gap-3">
                                                    <button
                                                        type="button"
                                                        @click="form.type = 'question'"
                                                        class="flex flex-col items-center justify-center p-2 rounded-3xl border-2 transition-all duration-300 group min-h-[60px]"
                                                        :class="form.type === 'question' ? 'border-[#00a0e3] bg-blue-50/50' : 'border-gray-50 bg-gray-50 hover:border-blue-200'"
                                                    >
                                                        <span class="text-[8px] font-black uppercase tracking-wider transition-colors text-center"
                                                              :class="form.type === 'question' ? 'text-[#0A2C5C]' : 'text-gray-400 group-hover:text-gray-600'">
                                                            {{ __('translate.support_question') }}
                                                        </span>
                                                    </button>

                                                    <button
                                                        type="button"
                                                        @click="form.type = 'tech_problem'"
                                                        class="flex flex-col items-center justify-center p-2 rounded-3xl border-2 transition-all duration-300 group min-h-[60px]"
                                                        :class="form.type === 'tech_problem' ? 'border-[#e31e24] bg-red-50/50' : 'border-gray-50 bg-gray-50 hover:border-red-200'"
                                                    >
                                                        <span class="text-[8px] font-black uppercase tracking-wider transition-colors text-center"
                                                              :class="form.type === 'tech_problem' ? 'text-[#0A2C5C]' : 'text-gray-400 group-hover:text-gray-600'">
                                                            {{ __('translate.support_tech_problem') }}
                                                        </span>
                                                    </button>

                                                    <button
                                                        type="button"
                                                        @click="form.type = 'new_feature'"
                                                        class="flex flex-col items-center justify-center p-2 rounded-3xl border-2 transition-all duration-300 group min-h-[60px]"
                                                        :class="form.type === 'new_feature' ? 'border-[#0A2C5C] bg-gray-100' : 'border-gray-50 bg-gray-50 hover:border-blue-200'"
                                                    >
                                                        <span class="text-[8px] font-black uppercase tracking-wider transition-colors text-center"
                                                              :class="form.type === 'new_feature' ? 'text-[#0A2C5C]' : 'text-gray-400 group-hover:text-gray-600'">
                                                            {{ __('translate.support_new_feature') }}
                                                        </span>
                                                    </button>
                                                </div>
                                                <InputError :message="form.errors.type" />
                                            </div>

                                            <!-- Subject -->
                                            <div class="space-y-2">
                                                <label class="text-[10px] font-black text-gray-400 uppercase tracking-widest ml-2">{{ __('translate.support_subject') }}</label>
                                                <input
                                                    v-model="form.subject"
                                                    type="text"
                                                    class="w-full bg-gray-50 border-0 rounded-[2rem] px-5 py-3 text-xs font-bold text-[#0A2C5C] placeholder:text-gray-300 focus:ring-4 focus:ring-blue-100 transition-all"
                                                    :placeholder="__('translate.support_subject')"
                                                />
                                                <InputError :message="form.errors.subject" />
                                            </div>

                                            <!-- Content -->
                                            <div class="space-y-2">
                                                <label class="text-[10px] font-black text-gray-400 uppercase tracking-widest ml-2">{{ __('translate.support_content') }}</label>
                                                <textarea
                                                    v-model="form.content"
                                                    rows="5"
                                                    maxlength="500"
                                                    class="w-full bg-gray-50 border-0 rounded-[2.5rem] px-5 py-3 text-xs font-bold text-[#0A2C5C] placeholder:text-gray-300 focus:ring-4 focus:ring-blue-100 transition-all resize-none"
                                                    :placeholder="__('translate.support_content')"
                                                ></textarea>
                                                <div class="flex justify-end px-4">
                                                    <span class="text-[9px] font-black uppercase tracking-widest" :class="contentCharsRemaining < 50 ? 'text-red-500' : 'text-gray-400'">
                                                        {{ __('translate.chars_remaining') }}: {{ contentCharsRemaining }}
                                                    </span>
                                                </div>
                                                <InputError :message="form.errors.content" />
                                            </div>

                                            <!-- Agreements -->
                                            <div v-if="supportAgreements && supportAgreements.length > 0" class="space-y-4">
                                                <div class="flex items-center gap-3">
                                                    <div @click="toggleAllAgreements" class="relative mt-1 cursor-pointer">
                                                        <Checkbox :checked="isAllAgreementsChecked" name="agree" class="sr-only" />
                                                        <div class="w-11 h-6 bg-gray-100 rounded-full transition-all duration-300 border border-gray-200/50 group-hover:bg-gray-200" :class="{'bg-[#0A2C5C] border-[#0A2C5C]': isAllAgreementsChecked}"></div>
                                                        <div class="absolute left-1 top-1 w-4 h-4 rounded-full transition-all duration-300 shadow-sm" :class="isAllAgreementsChecked ? 'translate-x-5 bg-work-main' : 'bg-white'"></div>
                                                    </div>
                                                    <div class="text-[10px] font-black uppercase tracking-widest leading-relaxed transition-colors duration-300" :class="isAllAgreementsChecked ? 'text-[#0A2C5C]' : 'text-gray-400'">
                                                        <span @click="toggleAllAgreements" class="cursor-pointer uppercase">
                                                            {{ __('translate.agree_to') }}
                                                        </span>
                                                        <button type="button" @click.stop="agreementsModalVisible = true" class="text-[#0A2C5C] font-black uppercase hover:underline ml-1">
                                                            {{ __('translate.agreements') }}
                                                        </button>
                                                    </div>
                                                </div>
                                                <InputError :message="form.errors.agreements" />
                                            </div>

                                            <!-- DialogModal for Agreements -->
                                            <DialogModal :show="agreementsModalVisible" @close="agreementsModalVisible = false">
                                                <template #title>
                                                    <span class="uppercase font-black text-[#0A2C5C] tracking-widest">{{ __('translate.agreements') }}</span>
                                                </template>

                                                <template #content>
                                                    <div class="space-y-8 max-h-[60vh] overflow-y-auto pr-4 custom-scrollbar">
                                                        <div v-for="(agreement, index) in supportAgreements" :key="agreement.id" class="group/item">
                                                            <div class="flex items-start gap-4 p-4 rounded-3xl transition-all duration-300 hover:bg-gray-50 border border-transparent hover:border-gray-100"
                                                                 :class="{'bg-red-50/50 border-red-100': form.errors.agreements && agreement.is_required && !form.agreements.includes(agreement.id)}"
                                                            >
                                                                <div>
                                                                    <Checkbox
                                                                        v-model:checked="form.agreements"
                                                                        :value="agreement.id.toString()"
                                                                        :id="'agreement-' + agreement.id"
                                                                        class="w-5 h-5 !rounded-lg !text-[#00a0e3] !border-gray-300 focus:!ring-[#00a0e3]/20"
                                                                        :class="{'!border-red-500': form.errors.agreements && agreement.is_required && !form.agreements.includes(agreement.id)}"
                                                                    />
                                                                </div>
                                                                <div class="flex-1 space-y-3">
                                                                    <label :for="'agreement-' + agreement.id" class="text-sm text-gray-600 text-left leading-relaxed normal-case cursor-pointer block [&_a]:underline [&_a]:text-blue-600 hover:[&_a]:text-blue-800 transition-colors"
                                                                           :class="{'text-red-700 font-bold': form.errors.agreements && agreement.is_required && !form.agreements.includes(agreement.id)}"
                                                                    >
                                                                        <span v-html="agreement.description[page.props.language] || agreement.description['pl']"></span>
                                                                    </label>

                                                                    <!-- Help Text (Optional) -->
                                                                    <div v-if="agreement.help_text && agreement.help_text[page.props.language]"
                                                                         class="mt-3 p-4 bg-blue-50/50 rounded-2xl border border-blue-100/50 text-[11px] font-medium text-gray-500 italic leading-relaxed text-left [&_a]:underline [&_a]:text-blue-600 hover:[&_a]:text-blue-800 transition-colors"
                                                                    >
                                                                        <div v-html="agreement.help_text[page.props.language]"></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div v-if="index < supportAgreements.length - 1" class="my-4 mx-8 border-b border-gray-50"></div>
                                                        </div>
                                                    </div>
                                                </template>

                                                <template #footer>
                                                    <SecondaryButton @click="agreementsModalVisible = false">
                                                        {{ __('translate.close') }}
                                                    </SecondaryButton>
                                                </template>
                                            </DialogModal>

                                            <!-- CAPTCHA -->
                                            <div class="bg-gray-50 rounded-3xl p-4 border border-gray-100">
                                                <label class="text-[10px] font-black text-gray-400 uppercase tracking-widest mb-2 block">{{ __('translate.rewrite_code') }}</label>

                                                <div class="flex flex-col sm:flex-row items-center gap-4">
                                                    <div class="flex items-center gap-2 bg-white p-3 rounded-2xl shadow-sm border border-gray-100 min-w-[140px] justify-center relative group/captcha">
                                                        <span v-for="(item, index) in coloredCaptcha"
                                                             :key="index"
                                                             :style="{ color: item.color }"
                                                             class="font-black text-2xl tracking-widest transition-transform group-hover/captcha:scale-110 inline-block"
                                                             :class="{'animate-bounce': index % 2 === 0}"
                                                             style="animation-duration: 2s">
                                                            {{ item.letter }}
                                                        </span>
                                                        <button type="button" @click="loadCaptcha" class="absolute -top-3 -right-3 w-8 h-8 bg-white rounded-full shadow-md flex items-center justify-center text-[#00a0e3] hover:bg-[#00a0e3] hover:text-white transition-all">
                                                            ↻
                                                        </button>
                                                    </div>

                                                    <div class="flex-1 w-full">
                                                        <input
                                                            v-model="form.captcha"
                                                            type="text"
                                                            maxlength="6"
                                                            class="w-full rounded-2xl bg-white border-gray-200 focus:ring-[#00a0e3]/10 focus:border-[#00a0e3] py-3 text-center text-lg font-black tracking-[0.5em] transition-all placeholder:text-gray-300"
                                                            :placeholder="__('translate.support_captcha_placeholder')"
                                                        />
                                                    </div>
                                                </div>
                                                <InputError :message="form.errors.captcha" class="mt-2 text-center sm:text-left" />
                                            </div>

                                            <!-- Submit -->
                                            <div class="pt-2">
                                                <button
                                                    type="submit"
                                                    :disabled="form.processing"
                                                    class="w-full group relative overflow-hidden bg-[#0A2C5C] hover:bg-[#00a0e3] text-white rounded-[2rem] py-4 px-6 transition-all duration-500 disabled:opacity-50"
                                                >
                                                    <div class="relative z-10 flex items-center justify-center gap-3">
                                                        <span class="text-xs font-black uppercase tracking-[0.2em]">{{ __('translate.support_send') }}</span>
                                                        <svg v-if="!form.processing" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-4 h-4 transition-transform duration-500 group-hover:translate-x-1">
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" />
                                                        </svg>
                                                        <div v-else class="w-4 h-4 border-2 border-white/30 border-t-white rounded-full animate-spin"></div>
                                                    </div>
                                                </button>
                                            </div>
                                        </form>
                                    </div>

                                    <!-- Footer Decoration -->
                                    <div class="px-6 py-4 bg-gray-50/50 flex justify-center items-center">
                                        <img src="/images/logo-horizontal.svg" class="h-6 opacity-10 grayscale" alt="logo">
                                    </div>
                                </div>
                            </DialogPanel>
                        </TransitionChild>
                    </div>
                </div>
            </div>
        </Dialog>
    </TransitionRoot>
</template>
