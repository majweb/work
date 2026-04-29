<script setup>
import { Head, Link, useForm } from '@inertiajs/vue3'
import Checkbox from '@/Components/Checkbox.vue'
import InputError from '@/Components/InputError.vue'
import InputLabel from '@/Components/InputLabel.vue'
import Socialstream from '@/Components/Socialstream.vue'
import TextInput from '@/Components/TextInput.vue'
import Dropdown from '@/Components/Dropdown.vue'
import DialogModal from '@/Components/DialogModal.vue'
import SecondaryButton from '@/Components/SecondaryButton.vue'
import SpinnerAction from '@/Components/SpinnerAction.vue'
import { computed, ref } from "vue"
import { usePage } from "@inertiajs/vue3"
import __ from "@/lang.js";

const form = useForm({
    name: '',
    email: '',
    password: '',
    type: (typeof window !== 'undefined') ? new URLSearchParams(window.location.search).get('type') || 'firm' : 'firm',
    password_confirmation: '',
    terms: false,
    agreements: [],
})

const showAgreementsModal = ref(false);

const agreements = computed(() => {
    return usePage().props.registrationAgreements[form.type] || [];
});

const getAllAgreementIds = (agreementsList) => {
    let ids = [];
    agreementsList.forEach(agreement => {
        ids.push(agreement.id);
        if (agreement.children && agreement.children.length > 0) {
            ids = [...ids, ...getAllAgreementIds(agreement.children)];
        }
    });
    return ids;
};

const isAllAgreementsSelected = computed(() => {
    const requiredAgreements = agreements.value.filter(agreement => agreement.is_required);
    if (requiredAgreements.length === 0) return false;

    const requiredIds = requiredAgreements.map(agreement => agreement.id.toString());
    return requiredIds.every(id => form.agreements.includes(id));
});

const toggleAllAgreements = () => {
    if (isAllAgreementsSelected.value) {
        form.agreements = [];
    } else {
        form.agreements = agreements.value
            .filter(agreement => agreement.is_required)
            .map(agreement => agreement.id.toString());
    }
};

const toggleAgreement = (agreement, checked) => {
    const agreementId = agreement.id.toString();
    if (checked) {
        if (!form.agreements.includes(agreementId)) {
            form.agreements.push(agreementId);
        }
        if (agreement.children) {
            agreement.children.forEach(child => toggleAgreement(child, true));
        }
    } else {
        const index = form.agreements.indexOf(agreementId);
        if (index > -1) {
            form.agreements.splice(index, 1);
        }
        if (agreement.children) {
            agreement.children.forEach(child => toggleAgreement(child, false));
        }
    }
};

const headerText = computed(() => {
    if (form.type === 'worker') {
        return {
            line1: __('translate.Zarejestruj'),
            line2: __('translate.aby_szybko'),
            line3: __('translate.znaleźć'),
            line4: __('translate.zatrudnienie'),
        }
    }

    return {
        line1: __('translate.Zarejestruj'),
        line2:  __('translate.aby_łatwo'),
        line3: __('translate.znaleźć'),
        line4: __('translate.pracownika'),
    }
})

const submit = () => {
    form.post(route('register'), {
        onFinish: () => form.reset('password', 'password_confirmation'),
    })
}
</script>

<template>
    <Head :title="__('translate.register')" />

    <div class="bg-gray-50 flex flex-col justify-center items-center min-h-screen p-6 relative overflow-hidden">
        <!-- Dekoracyjne tła -->
        <div class="absolute top-0 right-0 w-[500px] h-[500px] bg-blue-100/30 rounded-full blur-3xl -mr-64 -mt-64 transition-transform duration-1000 animate-pulse"></div>
        <div class="absolute bottom-0 left-0 w-[500px] h-[500px] bg-red-100/30 rounded-full blur-3xl -ml-64 -mb-64 transition-transform duration-1000 animate-pulse" style="animation-delay: 1s"></div>

        <div class="w-full max-w-xl relative">
            <!-- HEADER TEXT -->
            <div class="text-center mb-10 relative z-10">
                <Link href="/" class="inline-block mb-6">
                    <img src="/images/logo-horizontal.svg" class="h-10 w-auto mx-auto" alt="logo">
                </Link>
                <div class="inline-flex items-center gap-2 px-4 py-2 bg-red-50 rounded-full mb-6 absolute">
                    <span class="w-2 h-2 bg-red-500 rounded-full animate-pulse"></span>
                    <span class="text-[10px] font-black text-red-600 uppercase tracking-widest">{{ __('translate.register') }}</span>
                </div>
                <h2 class="text-3xl md:text-4xl font-black text-[#0A2C5C] leading-tight uppercase tracking-tighter">
                    {{ headerText.line1 }} {{ headerText.line2 }}<br />
                    <span class="text-transparent bg-clip-text bg-gradient-to-r from-red-600 to-orange-500">
                        {{ headerText.line3 }}
                    </span>
                    <span class="block text-lg md:text-xl mt-2 text-gray-400 font-black tracking-[0.2em]">
                        {{ headerText.line4 }}
                    </span>
                </h2>
            </div>

            <!-- REGISTRATION CARD -->
            <div class="bg-white rounded-[3rem] shadow-2xl shadow-blue-900/10 border border-white p-8 md:p-12 relative z-10 overflow-hidden">
                <form @submit.prevent="submit" class="space-y-6 relative z-10">
                    <!-- TYPE -->
                    <div class="space-y-4">
                        <label class="block text-[10px] font-black text-gray-400 uppercase tracking-widest ml-2">{{ __('translate.type') }}</label>
                        <div class="grid grid-cols-2 gap-4">
                            <label class="relative flex flex-col items-center justify-center p-4 border-2 rounded-2xl cursor-pointer transition-all duration-300"
                                   :class="form.type === 'firm' ? 'border-[#00a0e3] bg-blue-50/30' : 'border-gray-100 bg-gray-50 hover:bg-gray-100'">
                                <input type="radio" v-model="form.type" value="firm" class="sr-only" />
                                <span class="text-[10px] font-black uppercase tracking-widest text-center"
                                      :class="form.type === 'firm' ? 'text-[#0A2C5C]' : 'text-gray-400'">
                                    {{ __('translate.firmrecruit') }}
                                </span>
                                <div v-if="form.type === 'firm'" class="absolute -top-2 -right-2 bg-[#00a0e3] text-white rounded-full p-1 shadow-md">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                                    </svg>
                                </div>
                            </label>
                            <label class="relative flex flex-col items-center justify-center p-4 border-2 rounded-2xl cursor-pointer transition-all duration-300"
                                   :class="form.type === 'worker' ? 'border-[#00a0e3] bg-blue-50/30' : 'border-gray-100 bg-gray-50 hover:bg-gray-100'">
                                <input type="radio" v-model="form.type" value="worker" class="sr-only" />
                                <span class="text-[10px] font-black uppercase tracking-widest text-center"
                                      :class="form.type === 'worker' ? 'text-[#0A2C5C]' : 'text-gray-400'">
                                    {{ __('translate.worker') }}
                                </span>
                                <div v-if="form.type === 'worker'" class="absolute -top-2 -right-2 bg-[#00a0e3] text-white rounded-full p-1 shadow-md">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                                    </svg>
                                </div>
                            </label>
                        </div>
                        <InputError :message="form.errors.type" />
                    </div>

                    <!-- NAME -->
                    <div class="space-y-2">
                        <label class="block text-[10px] font-black text-gray-400 uppercase tracking-widest ml-2">{{ __('translate.name') }}</label>
                        <input
                            id="name"
                            v-model="form.name"
                            type="text"
                            :placeholder="__('translate.name')"
                            class="w-full px-6 py-4 text-xs rounded-2xl border-gray-100 bg-gray-50 focus:bg-white focus:ring-0 focus:border-[#00a0e3] transition-all placeholder-gray-400 font-bold tracking-widest"
                            autofocus
                        />
                        <InputError :message="form.errors.name" />
                    </div>

                    <!-- EMAIL -->
                    <div class="space-y-2">
                        <label class="block text-[10px] font-black text-gray-400 uppercase tracking-widest ml-2">{{ __('translate.email') }}</label>
                        <input
                            id="email"
                            v-model="form.email"
                            type="text"
                            :placeholder="__('translate.email')"
                            class="w-full px-6 py-4 text-xs rounded-2xl border-gray-100 bg-gray-50 focus:bg-white focus:ring-0 focus:border-[#00a0e3] transition-all placeholder-gray-400 font-bold tracking-widest"
                        />
                        <InputError :message="form.errors.email" />
                    </div>

                    <!-- PASSWORD -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div class="space-y-2">
                            <label class="block text-[10px] font-black text-gray-400 uppercase tracking-widest ml-2">{{ __('translate.password') }}</label>
                            <input
                                id="password"
                                v-model="form.password"
                                type="password"
                                :placeholder="__('translate.password')"
                                class="w-full px-6 py-4 text-xs rounded-2xl border-gray-100 bg-gray-50 focus:bg-white focus:ring-0 focus:border-[#00a0e3] transition-all placeholder-gray-400 font-bold tracking-widest"
                            />
                            <InputError :message="form.errors.password" />
                        </div>
                        <div class="space-y-2">
                            <label class="block text-[10px] font-black text-gray-400 uppercase tracking-widest ml-2">{{ __('translate.passwordconfirm') }}</label>
                            <input
                                id="password_confirmation"
                                v-model="form.password_confirmation"
                                type="password"
                                :placeholder="__('translate.passwordconfirm')"
                                class="w-full px-6 py-4 text-xs rounded-2xl border-gray-100 bg-gray-50 focus:bg-white focus:ring-0 focus:border-[#00a0e3] transition-all placeholder-gray-400 font-bold tracking-widest"
                            />
                            <InputError :message="form.errors.password_confirmation" />
                        </div>
                    </div>

                    <!-- Agreements -->
                    <div v-if="agreements.length > 0" class="space-y-4 border-t border-gray-100 pt-6 ml-2">
                        <div class="flex items-center gap-3 group">
                            <div @click="toggleAllAgreements" class="relative mt-1 cursor-pointer">
                                <Checkbox :checked="isAllAgreementsSelected" class="sr-only" />
                                <div class="w-11 h-6 bg-gray-100 rounded-full transition-all duration-300 border border-gray-200/50 group-hover:bg-gray-200" :class="{'bg-[#0A2C5C] border-[#0A2C5C]': isAllAgreementsSelected}"></div>
                                <div class="absolute left-1 top-1 w-4 h-4 rounded-full transition-all duration-300 shadow-sm" :class="isAllAgreementsSelected ? 'translate-x-5 bg-work-main' : 'bg-white'"></div>
                            </div>
                            <div class="text-[10px] font-bold uppercase tracking-wider flex items-center gap-1.5 flex-wrap transition-colors duration-300" :class="isAllAgreementsSelected ? 'text-[#00a0e3]' : 'text-gray-500'">
                                <span class="cursor-pointer" @click="toggleAllAgreements">{{ __('translate.agree') }}</span>
                                <button
                                    type="button"
                                    class="text-[#00AEEF] hover:underline cursor-pointer decoration-2 underline-offset-4"
                                    @click.stop="showAgreementsModal = true"
                                >
                                    {{ __('translate.agreements') }}
                                </button>

                                <DialogModal :show="showAgreementsModal" @close="showAgreementsModal = false">
                                    <template #title>
                                        {{ __('translate.agreements') }}
                                    </template>
                                    <template #content>
                                        <div class="space-y-8 max-h-[60vh] overflow-y-auto pr-4 text-left">
                                                <div v-for="agreement in agreements" :key="agreement.id" class="space-y-4">
                                                    <div class="flex items-start gap-3">
                                                        <Checkbox
                                                            :id="'reg-agreement-' + agreement.id"
                                                            :checked="form.agreements.includes(agreement.id.toString())"
                                                            @update:checked="(val) => toggleAgreement(agreement, val)"
                                                            :value="agreement.id.toString()"
                                                            class="w-5 h-5 !rounded-lg !text-[#00a0e3] mt-1"
                                                            :class="[
                                                                form.errors.agreements && agreement.is_required && !form.agreements.includes(agreement.id.toString())
                                                                ? '!border-red-500 !ring-red-500/20'
                                                                : '!border-gray-300 focus:!ring-[#00a0e3]/20'
                                                            ]"
                                                        />
                                                        <div class="flex-grow">
                                                            <label :for="'reg-agreement-' + agreement.id"
                                                                   class="text-gray-700 leading-relaxed font-bold text-sm normal-case cursor-pointer [&_a]:underline [&_a]:text-blue-600 hover:[&_a]:text-blue-800 transition-colors"
                                                                   :class="{'text-red-600': form.errors.agreements && agreement.is_required && !form.agreements.includes(agreement.id.toString())}"
                                                                   v-html="agreement.description[usePage().props.language] || agreement.description['pl']"></label>
                                                            <div v-if="agreement.help_text && (agreement.help_text[usePage().props.language] || agreement.help_text['pl'])"
                                                                 class="mt-2 text-[10px] text-gray-500 font-medium normal-case leading-relaxed bg-blue-50/50 p-3 rounded-xl border border-blue-100/50 italic [&_a]:underline [&_a]:text-blue-600 hover:[&_a]:text-blue-800 transition-colors">
                                                                <div v-html="agreement.help_text[usePage().props.language] || agreement.help_text['pl']"></div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!-- Children -->
                                                    <div v-if="agreement.children && agreement.children.length > 0" class="ml-8 space-y-4 border-l-2 border-blue-50 pl-6">
                                                        <div v-for="child in agreement.children" :key="child.id">
                                                            <div class="flex items-start gap-3">
                                                                <Checkbox
                                                                    :id="'reg-agreement-' + child.id"
                                                                    :checked="form.agreements.includes(child.id.toString())"
                                                                    @update:checked="(val) => toggleAgreement(child, val)"
                                                                    :value="child.id.toString()"
                                                                    class="w-4 h-4 !rounded-md !text-[#00a0e3] mt-1"
                                                                    :class="[
                                                                        form.errors.agreements && child.is_required && !form.agreements.includes(child.id.toString())
                                                                        ? '!border-red-500 !ring-red-500/20'
                                                                        : '!border-gray-300 focus:!ring-[#00a0e3]/20'
                                                                    ]"
                                                                />
                                                                <div class="flex-grow">
                                                                    <label :for="'reg-agreement-' + child.id"
                                                                           class="text-gray-600 leading-relaxed font-medium text-xs normal-case cursor-pointer [&_a]:underline [&_a]:text-blue-600 hover:[&_a]:text-blue-800 transition-colors"
                                                                           :class="{'text-red-600': form.errors.agreements && child.is_required && !form.agreements.includes(child.id.toString())}"
                                                                           v-html="child.description[usePage().props.language] || child.description['pl']"></label>
                                                                    <div v-if="child.help_text && (child.help_text[usePage().props.language] || child.help_text['pl'])"
                                                                         class="mt-1 text-[10px] text-gray-500 italic leading-relaxed [&_a]:underline [&_a]:text-blue-600 hover:[&_a]:text-blue-800 transition-colors">
                                                                        <div v-html="child.help_text[usePage().props.language] || child.help_text['pl']"></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                        </div>
                                    </template>
                                    <template #footer>
                                        <SecondaryButton @click="showAgreementsModal = false">
                                            {{ __('translate.close') }}
                                        </SecondaryButton>
                                    </template>
                                </DialogModal>
                            </div>
                        </div>
                        <InputError :message="form.errors.agreements" />
                    </div>

                    <!-- TERMS -->
                    <div v-if="$page.props.jetstream.hasTermsAndPrivacyPolicyFeature" class="space-y-2 ml-2">
                        <label class="flex items-center group cursor-pointer select-none">
                            <div class="relative mt-1">
                                <Checkbox id="terms" v-model:checked="form.terms" class="sr-only" />
                                <div class="w-11 h-6 bg-gray-100 rounded-full transition-all duration-300 border border-gray-200/50 group-hover:bg-gray-200" :class="{'bg-[#0A2C5C] border-[#0A2C5C]': form.terms}"></div>
                                <div class="absolute left-1 top-1 w-4 h-4 rounded-full transition-all duration-300 shadow-sm" :class="form.terms ? 'translate-x-5 bg-blue-50' : 'bg-white'"></div>
                            </div>
                            <div class="ml-5 text-[10px] font-black uppercase tracking-widest leading-relaxed transition-colors duration-300" :class="form.terms ? 'text-[#00a0e3]' : 'text-gray-400'">
                                {{ __('translate.agree') }}
                                <a :href="route('terms.show')" target="_blank" class="text-red-500 hover:text-red-600 transition-colors underline underline-offset-4 decoration-2 decoration-red-500/30 hover:decoration-red-600">{{ __('translate.terms') }}</a>
                                {{ __('translate.and') }}
                                <a :href="route('policy.show')" target="_blank" class="text-red-500 hover:text-red-600 transition-colors underline underline-offset-4 decoration-2 decoration-red-500/30 hover:decoration-red-600">{{ __('translate.policy') }}</a>
                            </div>
                        </label>
                        <InputError :message="form.errors.terms" />
                    </div>

                    <!-- SUBMIT -->
                    <div class="pt-4">
                        <button
                            type="submit"
                            :disabled="form.processing"
                            class="w-full py-5 bg-[#0A2C5C] text-white text-xs font-black uppercase tracking-[0.2em] rounded-2xl hover:bg-blue-800 shadow-xl shadow-blue-900/20 transition-all hover:-translate-y-0.5 disabled:opacity-50 flex items-center justify-center gap-2"
                        >
                            <SpinnerAction v-if="form.processing" />
                            {{ __('translate.register') }}
                        </button>
                    </div>
                </form>

                <!-- SOCIALSTREAM -->
                <div v-if="form.type == 'worker' && $page.props.socialstream.show && $page.props.socialstream.providers.length" class="mt-10">
                    <div class="relative mb-8">
                        <div class="absolute inset-0 flex items-center">
                            <div class="w-full border-t border-gray-100"></div>
                        </div>
                        <div class="relative flex justify-center text-[10px]">
                            <span class="px-4 bg-white text-gray-400 font-black uppercase tracking-widest italic">lub zarejestruj przez</span>
                        </div>
                    </div>

                    <Socialstream
                        :error="$page.props?.errors?.socialstream || null"
                        :labels="$page.props.socialstream.labels"
                        :providers="$page.props.socialstream.providers"
                    />
                </div>

                <!-- FOOTER -->
                <div class="mt-10 text-center border-t border-gray-50 pt-8">
                    <p class="text-[10px] font-black text-gray-400 uppercase tracking-widest">
                        Masz już konto?
                        <Link
                            :href="route('login')"
                            class="ml-2 text-blue-500 hover:text-blue-600 transition-colors underline underline-offset-4 decoration-2"
                        >
                            {{ __('translate.already') }}
                        </Link>
                    </p>
                </div>
            </div>
        </div>
    </div>
</template>
