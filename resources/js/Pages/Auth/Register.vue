<script setup>
import { Head, Link, useForm } from '@inertiajs/vue3'
import Checkbox from '@/Components/Checkbox.vue'
import InputError from '@/Components/InputError.vue'
import InputLabel from '@/Components/InputLabel.vue'
import Socialstream from '@/Components/Socialstream.vue'
import TextInput from '@/Components/TextInput.vue'
import SpinnerAction from '@/Components/SpinnerAction.vue'
import { computed, ref } from "vue"
import { usePage } from "@inertiajs/vue3"
import __ from "@/lang.js";

const form = useForm({
    name: '',
    email: '',
    password: '',
    type: (typeof window !== 'undefined') ? new URLSearchParams(window.location.search).get('type') || 'worker' : 'worker',
    password_confirmation: '',
    terms: false,
    agreements: [],
})

const showAgreementsModal = ref(false);
const expandedAgreements = ref([]);

const lang = computed(() => usePage().props.language);

const toggleAgreementExpansion = (id) => {
    const index = expandedAgreements.value.indexOf(id);
    if (index > -1) {
        expandedAgreements.value.splice(index, 1);
    } else {
        expandedAgreements.value.push(id);
    }
};

const agreements = computed(() => {
    return usePage().props.registrationAgreements[form.type] || [];
});

const isAllAgreementsSelected = computed(() => {
    if (agreements.value.length === 0) return false;

    const allIds = [];
    agreements.value.forEach(agreement => {
        allIds.push(agreement.id.toString());
        if (agreement.children) {
            agreement.children.forEach(child => {
                allIds.push(child.id.toString());
            });
        }
    });

    return allIds.every(id => form.agreements.includes(id));
});

const toggleAllAgreements = () => {
    if (isAllAgreementsSelected.value) {
        form.agreements = [];
    } else {
        const allIds = [];
        agreements.value.forEach(agreement => {
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
        onSuccess: () => {
            if (typeof window !== 'undefined') {
                window.dataLayer = window.dataLayer || [];
                if (form.type === 'worker') {
                    window.dataLayer.push({
                        event: 'candidate_registered'
                    });
                }
            }
        },
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
                <Link href="/" class="inline-block mb-8">
                    <img src="/images/logo-horizontal.png" class="h-10 w-auto mx-auto" alt="logo">
                </Link>
                <div class="mx-auto w-2/4 flex justify-center items-center gap-2 px-4 py-2 bg-red-50 rounded-full mb-6">
                    <span class="w-2 h-2 bg-red-500 rounded-full animate-pulse flex-shrink-0"></span>
                    <span class="text-[10px] font-black text-red-600 uppercase tracking-[0.3em] leading-loose">{{ __('translate.register') }}</span>
                </div>
                <h2 class="text-3xl md:text-4xl font-black text-[#0A2C5C] leading-loose uppercase tracking-tighter">
                    {{ headerText.line1 }} {{ headerText.line2 }}<br />
                    <span class="text-transparent bg-clip-text bg-gradient-to-r from-red-600 to-orange-500 mt-2 block">
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
                            class="w-full px-6 py-4 text-xs rounded-2xl border-gray-100 bg-gray-50 focus:bg-white focus:ring-0 focus:border-[#00a0e3] transition-all placeholder-gray-400 font-bold tracking-widest text-[#0A2C5C] uppercase"
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
                            class="w-full px-6 py-4 text-xs rounded-2xl border-gray-100 bg-gray-50 focus:bg-white focus:ring-0 focus:border-[#00a0e3] transition-all placeholder-gray-400 font-bold tracking-widest text-[#0A2C5C] uppercase"
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
                                class="w-full px-6 py-4 text-xs rounded-2xl border-gray-100 bg-gray-50 focus:bg-white focus:ring-0 focus:border-[#00a0e3] transition-all placeholder-gray-400 font-bold tracking-widest uppercase"
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
                                class="w-full px-6 py-4 text-xs rounded-2xl border-gray-100 bg-gray-50 focus:bg-white focus:ring-0 focus:border-[#00a0e3] transition-all placeholder-gray-400 font-bold tracking-widest uppercase"
                            />
                            <InputError :message="form.errors.password_confirmation" />
                        </div>
                    </div>

                    <!-- Agreements -->
                    <div v-if="agreements.length > 0" class="space-y-4 pt-6">
                        <InputLabel :value="__('translate.agreements')"
                                    class="mb-6 font-black text-[#0A2C5C] uppercase tracking-[0.2em] text-[10px] flex items-center gap-2">
                            <span class="w-1.5 h-1.5 bg-[#00a0e3] rounded-full animate-pulse"></span>
                            {{ __('translate.agreements') }}
                        </InputLabel>

                        <div v-if="agreements.length > 1"
                             class="flex items-center gap-4 p-5 bg-white rounded-2xl border border-gray-100 hover:border-[#00a0e3] transition-all shadow-sm group">
                            <div class="flex items-center h-4">
                                <Checkbox :checked="isAllAgreementsSelected" @change="toggleAllAgreements"
                                          class="w-4 h-4 !rounded-md !text-[#00a0e3] !border-gray-300 focus:!ring-[#00a0e3]/20" />
                            </div>
                            <span class="text-xs font-black text-[#0A2C5C] uppercase tracking-widest cursor-pointer"
                                  @click="toggleAllAgreements">
                                {{ __('translate.selectAll') }}
                            </span>
                        </div>

                        <div class="space-y-3">
                            <div v-for="agreement in agreements" :key="agreement.id"
                                 class="p-4 bg-white rounded-2xl border border-gray-100 transition-all">
                                <div class="flex items-start gap-4">
                                    <div class="flex items-center h-5">
                                        <Checkbox
                                            v-model:checked="form.agreements"
                                            :value="agreement.id.toString()"
                                            :id="'agreement-' + agreement.id"
                                            @change="(checked) => toggleAgreement(agreement, checked)"
                                            class="w-4 h-4 !rounded-md !text-[#00a0e3] !border-gray-300 focus:!ring-[#00a0e3]/20"
                                            :class="{'!border-red-500 !ring-red-500': form.errors.agreements && agreement.is_required && !form.agreements.includes(agreement.id.toString())}"
                                        />
                                    </div>
                                    <div class="flex-1 min-w-0">
                                        <div class="flex items-start justify-between gap-4">
                                            <label :for="'agreement-' + agreement.id"
                                                   class="text-xs font-bold uppercase tracking-wider cursor-pointer transition-colors"
                                                   :class="form.errors.agreements && agreement.is_required && !form.agreements.includes(agreement.id.toString()) ? 'text-red-600' : 'text-[#0A2C5C]'">
                                                <span v-html="(agreement.title && agreement.title[lang]) || (agreement.title && agreement.title['pl']) || agreement.title"></span>
                                                <span v-if="agreement.is_required" class="text-red-500 ml-1">*</span>
                                            </label>
                                            <button type="button"
                                                    @click="toggleAgreementExpansion(agreement.id)"
                                                    class="text-[10px] font-black uppercase tracking-widest text-[#00a0e3] hover:text-[#0A2C5C] transition-colors whitespace-nowrap">
                                                {{ expandedAgreements.includes(agreement.id) ? __('translate.showLess') : __('translate.showMore') }}
                                            </button>
                                        </div>

                                        <transition
                                            enter-active-class="transition duration-200 ease-out"
                                            enter-from-class="transform scale-95 opacity-0"
                                            enter-to-class="transform scale-100 opacity-100"
                                            leave-active-class="transition duration-150 ease-in"
                                            leave-from-class="transform scale-100 opacity-100"
                                            leave-to-class="transform scale-95 opacity-0"
                                        >
                                            <div v-if="expandedAgreements.includes(agreement.id)" class="mt-4 space-y-4">
                                                <div class="text-[11px] leading-relaxed normal-case [&_a]:underline [&_a]:text-blue-600 transition-colors"
                                                     :class="form.errors.agreements && agreement.is_required && !form.agreements.includes(agreement.id.toString()) ? 'text-red-500' : 'text-gray-500'"
                                                     v-html="(agreement.description && agreement.description[lang]) || (agreement.description && agreement.description['pl'])">
                                                </div>

                                                <div v-if="agreement.children && agreement.children.length > 0"
                                                     class="ml-2 space-y-3 border-l-2 border-gray-100 pl-4">
                                                    <div v-for="child in agreement.children" :key="child.id" class="flex items-start gap-3">
                                                        <div class="flex items-center h-4">
                                                            <Checkbox
                                                                v-model:checked="form.agreements"
                                                                :value="child.id.toString()"
                                                                :id="'agreement-' + child.id"
                                                                @change="toggleChildAgreement(agreement)"
                                                                class="w-3.5 h-3.5 !rounded-md !text-[#00a0e3] !border-gray-300 focus:!ring-[#00a0e3]/20"
                                                                :class="{'!border-red-500 !ring-red-500': form.errors.agreements && child.is_required && !form.agreements.includes(child.id.toString())}"
                                                            />
                                                        </div>
                                                        <label :for="'agreement-' + child.id"
                                                               class="text-[11px] leading-relaxed font-medium normal-case cursor-pointer [&_a]:underline [&_a]:text-blue-600 transition-colors"
                                                               :class="form.errors.agreements && child.is_required && !form.agreements.includes(child.id.toString()) ? 'text-red-600 font-bold' : 'text-gray-500'">
                                                            <span v-html="(child.description && child.description[lang]) || (child.description && child.description['pl'])"></span>
                                                            <span v-if="child.is_required" class="text-red-500 ml-1">*</span>
                                                        </label>
                                                    </div>
                                                </div>

                                                <div v-if="agreement.help_text && (agreement.help_text[lang] || agreement.help_text['pl'])"
                                                     class="p-3 bg-blue-50/50 rounded-xl border border-blue-100/50 text-[10px] text-gray-500 italic leading-relaxed"
                                                     v-html="(agreement.help_text && agreement.help_text[lang]) || (agreement.help_text && agreement.help_text['pl'])">
                                                </div>
                                            </div>
                                        </transition>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <InputError :message="form.errors.agreements" />
                    </div>

                    <!-- TERMS -->
                    <div v-if="$page.props.jetstream.hasTermsAndPrivacyPolicyFeature" class="space-y-2 ml-2">
                        <label class="flex items-center group cursor-pointer select-none">
                            <div class="relative mt-1">
                                <Checkbox id="terms" v-model:checked="form.terms" class="sr-only" />
                                <div class="w-11 h-6 rounded-full transition-all duration-300 border border-gray-200/50 group-hover:bg-gray-200" :class="form.terms ? 'bg-[#0A2C5C] border-[#0A2C5C]' : 'bg-gray-100'"></div>
                                <div class="absolute left-1 top-1 w-4 h-4 rounded-full transition-all duration-300 shadow-sm" :class="form.terms ? 'translate-x-5 bg-blue-50' : 'bg-white'"></div>
                            </div>
                            <div class="ml-5 text-[10px] font-black uppercase tracking-widest leading-relaxed transition-colors duration-300" :class="form.terms ? 'text-[#0A2C5C]' : 'text-gray-400'">
                                <span class="uppercase">{{ __('translate.agree') }}</span>
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
                            class="w-full py-5 bg-[#0A2C5C] text-white text-xs font-black uppercase tracking-[0.2em] rounded-2xl hover:bg-[#00a0e3] shadow-xl shadow-blue-900/20 transition-all hover:-translate-y-0.5 disabled:opacity-50 flex items-center justify-center gap-2"
                        >
                            <SpinnerAction v-if="form.processing" />
                            {{ __('translate.register') }}
                        </button>
                    </div>
                </form>

                <!-- SOCIALSTREAM -->
                <div v-if="form.type == 'worker' && $page.props.socialstream.show && $page.props.socialstream.providers.length" class="mt-10">
                    <Socialstream
                        :error="$page.props?.errors?.socialstream || null"
                        :labels="$page.props.socialstream.labels"
                        :providers="$page.props.socialstream.providers"
                    />
                </div>
                <!-- FOOTER -->
                <div class="mt-10 flex-wrap flex flex-col md:flex-row items-center justify-center gap-2">
                    <p class="text-[10px] font-black text-gray-400 uppercase tracking-widest">
                        {{ __('translate.alreadyhaveanaccount') }}
                    </p>
                    <Link
                        :href="route('login', { type: form.type })"
                        class="text-[10px] uppercase tracking-widest ml-2 text-red-500 hover:text-red-600 transition-colors underline underline-offset-4 decoration-2"
                    >
                        {{ __('translate.already') }}
                    </Link>
                </div>


            </div>
        </div>
    </div>
</template>
