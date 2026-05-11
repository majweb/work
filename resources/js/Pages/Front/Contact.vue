<script setup>
import { useForm } from '@inertiajs/vue3'
import FrontLayout from '@/Layouts/FrontLayout.vue'
import { ref, onMounted, computed, watch } from 'vue'
import axios from 'axios'
import __ from "@/lang.js";
import Checkbox from "@/Components/Checkbox.vue";
import InputError from "@/Components/InputError.vue";
import TextInput from "@/Components/TextInput.vue";
import DialogModal from "@/Components/DialogModal.vue";
import SecondaryButton from "@/Components/SecondaryButton.vue";
import SpinnerAction from "@/Components/SpinnerAction.vue";

/* ---------------------------
   FORMULARZ
---------------------------- */
const form = useForm({
    email: '',
    subject: '',
    message: '',
    captcha: '',
    agreements: [],
})

const props = defineProps({
    page: Object,
    supportAgreements:Array
});

const expandedAgreements = ref([]);

const toggleAgreementExpansion = (id) => {
    if (expandedAgreements.value.includes(id)) {
        expandedAgreements.value = expandedAgreements.value.filter(itemId => itemId !== id);
    } else {
        expandedAgreements.value.push(id);
    }
};

const isAgreementExpanded = (id) => expandedAgreements.value.includes(id);

const isAllAgreementsChecked = computed(() => {
    const allIds = [];
    props.supportAgreements.forEach(agreement => {
        allIds.push(agreement.id.toString());
        if (agreement.children) {
            agreement.children.forEach(child => {
                allIds.push(child.id.toString());
            });
        }
    });

    if (allIds.length === 0) return false;
    return allIds.every(id => form.agreements.includes(id));
});

const toggleAllAgreements = () => {
    if (isAllAgreementsChecked.value) {
        form.agreements = [];
    } else {
        const allIds = [];
        props.supportAgreements.forEach(agreement => {
            allIds.push(agreement.id.toString());
            if (agreement.children) {
                agreement.children.forEach(child => {
                    allIds.push(child.id.toString());
                });
            }
        });
        form.agreements = allIds;
    }
};

const toggleAgreement = (agreement, checked) => {
    if (!agreement.children) return;

    agreement.children.forEach(child => {
        const childId = child.id.toString();
        const index = form.agreements.indexOf(childId);
        if (checked && index === -1) {
            form.agreements.push(childId);
        } else if (!checked && index !== -1) {
            form.agreements.splice(index, 1);
        }
    });
};

const toggleChildAgreement = (agreement) => {
    if (!agreement) return;
    const parentId = agreement.id.toString();
    const childrenIds = agreement.children ? agreement.children.map(c => c.id.toString()) : [];
    if (childrenIds.length === 0) return;

    const allChildrenSelected = childrenIds.every(id => form.agreements.includes(id));
    const parentIndex = form.agreements.indexOf(parentId);

    if (allChildrenSelected && parentIndex === -1) {
        form.agreements.push(parentId);
    } else if (!allChildrenSelected && parentIndex !== -1) {
        form.agreements.splice(parentIndex, 1);
    }
};

const isAgreementRequired = (id) => {
    const findAgreement = (list, targetId) => {
        for (const item of list) {
            if (item.id === targetId) return item;
            if (item.children) {
                const found = findAgreement(item.children, targetId);
                if (found) return found;
            }
        }
        return null;
    };
    const agreement = findAgreement(props.supportAgreements, id);
    return agreement ? !!agreement.is_required : false;
};

const successMessage = ref('') // komunikat sukcesu

const messageCharsRemaining = computed(() => 500 - form.message.length);

watch(() => form.message, (newValue) => {
    if (newValue.length > 500) {
        form.message = newValue.substring(0, 500);
    }
});

const submit = () => {
    form.post('/contact', {
        preserveScroll: true,
        onSuccess: () => {
            form.reset()
            successMessage.value = __('translate.contact_success')

            // Wywołujemy nową CAPTCHA od razu
            loadCaptcha()

            setTimeout(() => {
                successMessage.value = ''
            }, 5000)
        }
    })
}

/* ---------------------------
   CAPTCHA
---------------------------- */
const captchaText = ref('')
const coloredCaptcha = ref([])

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

const loadCaptcha = () => {
    axios.get('/generateCaptcha')
        .then(res => {
            captchaText.value = res.data.captchaText
            coloredCaptcha.value = colorizeCaptcha(captchaText.value)
        })
        .catch(() => console.error("Błąd CAPTCHA"))
}

const reloadCaptcha = () => loadCaptcha()

onMounted(() => loadCaptcha())


</script>

<template>
    <FrontLayout
        :title="props.page.title"
        :image="props.page.image"
        :keywords="props.page.keywords"
        :description="props.page.description"
        :url="route('front.contact')"
        type="website"
    >
        <div class="py-12 bg-gray-50/50 min-h-screen relative overflow-hidden px-2 sm:px-0">
            <!-- Background Decoration -->
            <div class="absolute top-0 right-0 w-[500px] h-[500px] bg-blue-100/30 rounded-full -mr-64 -mt-64 blur-3xl"></div>
            <div class="absolute bottom-0 left-0 w-[400px] h-[400px] bg-red-50/30 rounded-full -ml-48 -mb-48 blur-3xl"></div>

            <div class="max-w-7xl mx-auto px-4 relative z-10">
                <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-start">

                    <!-- FORMULARZ -->
                    <div class="lg:col-span-7">
                        <div class="bg-white rounded-[3rem] shadow-2xl shadow-blue-900/5 border border-white p-8 md:p-12 relative overflow-hidden group">
                            <!-- Logo background decoration -->
                            <img src="/images/logo-horizontal.svg" class="absolute -bottom-20 -right-20 w-96 opacity-[0.03] pointer-events-none grayscale group-hover:scale-110 transition-transform duration-1000" alt="logo">

                            <div class="relative z-10">
                                <div class="inline-flex items-center gap-3 px-4 py-2 bg-blue-50 rounded-2xl mb-8">
                                    <div class="w-2 h-2 rounded-full bg-[#00a0e3] animate-pulse"></div>
                                    <span class="text-[10px] font-black text-[#00a0e3] uppercase tracking-widest">{{ __('translate.write_to_us') }}</span>
                                </div>

                                <h2 class="text-3xl md:text-5xl font-black text-[#0A2C5C] uppercase tracking-tight leading-tight mb-8">
                                    {{ __('translate.contact_us') }}
                                </h2>

                                <!-- KOMUNIKAT SUKCESU -->
                                <Transition
                                    enter-active-class="transition duration-500 ease-out"
                                    enter-from-class="transform -translate-y-4 opacity-0"
                                    enter-to-class="transform translate-y-0 opacity-100"
                                    leave-active-class="transition duration-300 ease-in"
                                    leave-from-class="opacity-100"
                                    leave-to-class="opacity-0"
                                >
                                    <div v-if="successMessage" class="mb-8 p-6 bg-green-50 border border-green-100 rounded-3xl flex items-center gap-4">
                                        <div class="w-10 h-10 bg-green-500 rounded-2xl flex items-center justify-center text-white shadow-lg shadow-green-200">
                                            <span class="text-xl">✓</span>
                                        </div>
                                        <div>
                                            <p class="text-sm font-black text-green-900 uppercase tracking-widest">{{ successMessage }}</p>
                                        </div>
                                    </div>
                                </Transition>

                                <form @submit.prevent="submit" class="space-y-6">
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                        <div class="space-y-2">
                                            <label class="text-[10px] font-black text-gray-400 uppercase tracking-widest ml-2">{{ __('translate.email') }}</label>
                                            <TextInput
                                                :placeholder="__('translate.email')"
                                                id="email"
                                                v-model="form.email"
                                                type="text"
                                                class="w-full !rounded-2xl !bg-gray-50 !border-transparent focus:!bg-white focus:!ring-[#00a0e3]/10 focus:!border-[#00a0e3] !py-4 transition-all"
                                            />
                                            <InputError :message="form.errors.email" class="ml-2" />
                                        </div>

                                        <div class="space-y-2">
                                            <label class="text-[10px] font-black text-gray-400 uppercase tracking-widest ml-2">{{ __('info.subject') }}</label>
                                            <TextInput
                                                :placeholder="__('info.subject').toUpperCase()"
                                                id="subject"
                                                v-model="form.subject"
                                                type="text"
                                                class="w-full !rounded-2xl !bg-gray-50 !border-transparent focus:!bg-white focus:!ring-[#00a0e3]/10 focus:!border-[#00a0e3] !py-4 transition-all !text-[#0A2C5C]"
                                            />
                                            <InputError :message="form.errors.subject" class="ml-2" />
                                        </div>
                                    </div>

                                    <div class="space-y-2">
                                        <label class="text-[10px] font-black text-gray-400 uppercase tracking-widest ml-2">{{ __('info.message') }}</label>
                                        <textarea
                                            v-model="form.message"
                                            :placeholder="__('info.message')"
                                            rows="5"
                                            maxlength="500"
                                            class="w-full rounded-2xl bg-gray-50 border-transparent focus:bg-white focus:ring-4 focus:ring-[#00a0e3]/10 focus:border-[#00a0e3] py-4 px-4 transition-all text-sm font-bold text-[#0A2C5C] placeholder:text-gray-300 shadow-sm placeholder:uppercase"
                                        ></textarea>
                                        <div class="flex justify-end px-4">
                                            <span class="text-[9px] font-black uppercase tracking-widest" :class="messageCharsRemaining < 50 ? 'text-red-500' : 'text-gray-400'">
                                                {{ __('translate.chars_remaining') }}: {{ messageCharsRemaining }}
                                            </span>
                                        </div>
                                        <InputError :message="form.errors.message" class="ml-2" />
                                    </div>

                                    <!-- CAPTCHA -->
                                    <div class="bg-gray-50 rounded-3xl p-6 border border-gray-100">
                                        <label class="text-[10px] font-black text-gray-400 uppercase tracking-widest mb-4 block">{{ __('translate.rewrite_code') }}</label>

                                        <div class="flex flex-col sm:flex-row items-center gap-6">
                                            <div class="flex items-center gap-2 bg-white p-4 rounded-2xl shadow-sm border border-gray-100 min-w-[140px] justify-center relative group/captcha">
                                                <span v-for="(item, index) in coloredCaptcha"
                                                      :key="index"
                                                      :style="{ color: item.color }"
                                                      class="font-black text-2xl tracking-widest transition-transform group-hover/captcha:scale-110"
                                                      :class="{'animate-bounce': index % 2 === 0}"
                                                      style="animation-duration: 2s">
                                                    {{ item.letter }}
                                                </span>
                                                <button type="button" @click="reloadCaptcha" class="absolute -top-3 -right-3 w-8 h-8 bg-white rounded-full shadow-md flex items-center justify-center text-[#00a0e3] hover:bg-[#00a0e3] hover:text-white transition-all">
                                                    ↻
                                                </button>
                                            </div>

                                            <div class="flex-1 w-full">
                                                <TextInput
                                                    :placeholder="__('info.code').toUpperCase()"
                                                    id="captcha"
                                                    maxlength="6"
                                                    v-model="form.captcha"
                                                    type="text"
                                                    class="w-full !rounded-2xl !bg-white !border-gray-200 focus:!ring-[#00a0e3]/10 focus:!border-[#00a0e3] !py-4 text-center text-lg font-black tracking-[0.5em] transition-all"
                                                />
                                            </div>
                                        </div>
                                        <InputError :message="form.errors.captcha" class="mt-2 text-center sm:text-left" />
                                    </div>

                                    <!-- AGREE -->
                                    <div v-if="props.supportAgreements && props.supportAgreements.length > 0" class="space-y-4 !mt-12">
                                        <!-- Zaznacz wszystkie -->
                                        <div v-if="props.supportAgreements.length > 1" class="flex items-center gap-3 px-1 mb-4">
                                            <div class="flex items-center h-4">
                                                <Checkbox
                                                    id="contact-select-all"
                                                    :checked="isAllAgreementsChecked"
                                                    @change="toggleAllAgreements"
                                                    class="w-4 h-4 !rounded !text-[#00a0e3] !border-gray-300 focus:!ring-[#00a0e3]/20"
                                                />
                                            </div>
                                            <label for="contact-select-all" class="text-[10px] font-black uppercase tracking-widest text-gray-400 cursor-pointer">
                                                {{ __('translate.selectAll') || 'Zaznacz wszystkie' }}
                                            </label>
                                        </div>

                                        <InputError :message="form.errors.agreements" class="ml-2" />

                                        <!-- Lista zgód -->
                                        <div class="space-y-4">
                                            <div v-for="agreement in props.supportAgreements" :key="agreement.id" class="px-1 transition-all">
                                                <div class="flex items-start gap-3">
                                                    <Checkbox
                                                        :id="'contact-agreement-' + agreement.id"
                                                        v-model:checked="form.agreements"
                                                        :value="agreement.id.toString()"
                                                        @change="(checked) => toggleAgreement(agreement, checked)"
                                                        class="w-4 h-4 !rounded !text-[#00a0e3] mt-0.5"
                                                        :class="[
                                                            form.errors.agreements && isAgreementRequired(agreement.id) && !form.agreements.includes(agreement.id.toString())
                                                            ? '!border-red-500 !ring-red-500/20'
                                                            : '!border-gray-300 focus:!ring-[#00a0e3]/20'
                                                        ]"
                                                    />
                                                    <div class="flex-grow min-w-0">
                                                        <div class="flex items-center justify-between gap-4">
                                                            <label
                                                                :for="'contact-agreement-' + agreement.id"
                                                                class="mt-1 text-[10px] font-bold uppercase tracking-wide cursor-pointer transition-colors"
                                                                :class="form.errors.agreements && isAgreementRequired(agreement.id) && !form.agreements.includes(agreement.id.toString()) ? 'text-red-600' : 'text-[#0A2C5C]'"
                                                                v-html="agreement.title[$page.props.language] || agreement.title['pl'] || agreement.title"
                                                            ></label>
                                                            <button
                                                                type="button"
                                                                @click="toggleAgreementExpansion(agreement.id)"
                                                                class="text-[9px] font-bold uppercase tracking-wider text-[#00a0e3] hover:text-[#0A2C5C] transition-colors whitespace-nowrap"
                                                            >
                                                                {{ isAgreementExpanded(agreement.id) ? (__('translate.showLess') || 'Mniej') : (__('translate.showMore') || 'Więcej') }}
                                                            </button>
                                                        </div>

                                                        <transition
                                                            enter-active-class="transition duration-200 ease-out"
                                                            enter-from-class="opacity-0 -translate-y-1"
                                                            enter-to-class="opacity-100 translate-y-0"
                                                            leave-active-class="transition duration-150 ease-in"
                                                            leave-from-class="opacity-100 translate-y-0"
                                                            leave-to-class="opacity-0 -translate-y-1"
                                                        >
                                                            <div v-if="isAgreementExpanded(agreement.id)" class="mt-2 space-y-3">
                                                                <div
                                                                    class="text-gray-500 leading-relaxed font-medium text-[11px] normal-case [&_a]:underline [&_a]:text-blue-600 hover:[&_a]:text-blue-800 transition-colors"
                                                                    :class="form.errors.agreements && isAgreementRequired(agreement.id) && !form.agreements.includes(agreement.id.toString()) ? 'text-red-600' : 'text-gray-500'"
                                                                    v-html="agreement.description[$page.props.language] || agreement.description['pl']"
                                                                ></div>

                                                                <!-- Podzgody -->
                                                                <div v-if="agreement.children && agreement.children.length > 0" class="pl-4 space-y-2 border-l border-gray-100 mt-2">
                                                                    <div v-for="child in agreement.children" :key="child.id" class="flex items-start gap-2">
                                                                        <Checkbox
                                                                            :id="'contact-agreement-' + child.id"
                                                                            v-model:checked="form.agreements"
                                                                            :value="child.id.toString()"
                                                                            @change="toggleChildAgreement(agreement)"
                                                                            class="w-3.5 h-3.5 !rounded-sm !text-[#00a0e3] mt-0.5 !border-gray-200 focus:!ring-[#00a0e3]/10"
                                                                        />
                                                                        <label
                                                                            :for="'contact-agreement-' + child.id"
                                                                            class="text-[10px] font-medium normal-case cursor-pointer [&_a]:underline [&_a]:text-blue-500 hover:[&_a]:text-blue-700 transition-colors"
                                                                            :class="form.errors.agreements && child.is_required && !form.agreements.includes(child.id.toString()) ? 'text-red-600 font-bold' : 'text-gray-400'"
                                                                            v-html="child.description[$page.props.language] || child.description['pl']"
                                                                        ></label>
                                                                    </div>
                                                                </div>

                                                                <div v-if="agreement.help_text && (agreement.help_text[$page.props.language] || agreement.help_text['pl'])"
                                                                    class="text-[9px] text-[#0A2C5C]/70 font-medium normal-case leading-relaxed bg-blue-50/30 p-2 rounded-lg border border-blue-100/30 italic [&_a]:underline">
                                                                    <div v-html="agreement.help_text[$page.props.language] || agreement.help_text['pl']"></div>
                                                                </div>
                                                            </div>
                                                        </transition>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                    <!-- SUBMIT -->
                                    <button type="submit"
                                            :disabled="form.processing"
                                            class="inline-flex items-center justify-center gap-4 bg-[#0A2C5C] hover:bg-[#1a4a8e] text-white font-black px-12 py-5 rounded-2xl transition-all hover:gap-6 uppercase tracking-widest text-xs shadow-xl shadow-blue-900/20 w-full md:w-auto disabled:opacity-50 group/btn">
                                        <SpinnerAction :process="form.processing">
                                            {{ __('translate.send_message') }}
                                        </SpinnerAction>
                                        <span v-if="!form.processing" class="text-xl leading-none group-hover/btn:translate-x-2 transition-transform">→</span>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>

                    <!-- INFORMACJE KONTAKTOWE -->
                    <div class="lg:col-span-5 space-y-8">
                        <!-- ADRES -->
                        <div class="bg-white rounded-[3rem] p-10 shadow-xl shadow-blue-900/5 border border-white relative overflow-hidden group">
                            <div class="absolute top-0 right-0 w-32 h-32 bg-gray-50 rounded-full -mr-16 -mt-16 group-hover:scale-110 transition-transform duration-700"></div>

                            <div class="relative z-10 flex flex-col items-center text-center">
                                <div class="w-20 h-20 bg-blue-50 rounded-3xl flex items-center justify-center mb-6">
                                    <img src="/images/icons/recruit/lokalizacja.svg" alt="local" class="w-10">
                                </div>
                                <h3 class="text-[10px] font-black text-gray-400 uppercase tracking-[0.2em] mb-4">{{ __('translate.our_office') }}</h3>
                                <h4 class="text-xl font-black text-[#0A2C5C] uppercase tracking-tight mb-4">WORK4YOU.GLOBAL LTD</h4>
                                <p class="text-sm font-bold text-gray-500 uppercase tracking-widest leading-relaxed">
                                    Office 180B,<br />182-184 High Street North<br />London E6 2JA
                                </p>
                            </div>
                        </div>

                        <!-- EMAIL -->
                        <div class="bg-[#0A2C5C] rounded-[3rem] p-10 shadow-2xl shadow-blue-900/20 border border-blue-900/50 relative overflow-hidden group">
                            <div class="absolute top-0 right-0 w-32 h-32 bg-blue-400/10 rounded-full -mr-16 -mt-16 group-hover:scale-110 transition-transform duration-700"></div>

                            <div class="relative z-10 flex flex-col items-center text-center">
                                <div class="w-20 h-20 bg-white/5 rounded-3xl flex items-center justify-center mb-6">
                                    <img src="/images/contact/mail1.svg" alt="contact" class="w-10">
                                </div>
                                <h3 class="text-[10px] font-black text-blue-300/50 uppercase tracking-[0.2em] mb-4">{{ __('translate.contact_us') }}</h3>

                                <div class="space-y-4">
                                    <a href="mailto:contact@work4you.global" class="block text-sm font-black text-white hover:text-[#00a0e3] transition-colors uppercase tracking-widest">
                                        contact@work4you.global
                                    </a>
                                    <a href="mailto:kontakt@work4you.global" class="block text-sm font-black text-white hover:text-[#00a0e3] transition-colors uppercase tracking-widest">
                                        kontakt@work4you.global
                                    </a>
                                </div>
                            </div>
                        </div>

                        <!-- ADVERTISING -->
                        <div class="bg-white rounded-[3rem] p-10 shadow-xl shadow-blue-900/5 border border-white relative overflow-hidden group">
                            <div class="absolute top-0 right-0 w-32 h-32 bg-gray-50 rounded-full -mr-16 -mt-16 group-hover:scale-110 transition-transform duration-700"></div>

                            <div class="relative z-10 flex flex-col items-center text-center">
                                <div class="w-20 h-20 bg-red-50 rounded-3xl flex items-center justify-center mb-6">
                                    <img src="/images/contact/mail2.svg" alt="marketing" class="w-10 grayscale opacity-50">
                                </div>
                                <h3 class="text-[10px] font-black text-gray-400 uppercase tracking-[0.2em] mb-4">{{ __('translate.advertising') }}</h3>
                                <a href="mailto:marketing@work4you.global" class="text-sm font-black text-[#0A2C5C] hover:text-[#00a0e3] transition-colors uppercase tracking-widest">
                                    marketing@work4you.global
                                </a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </FrontLayout>
</template>
