<script setup>
import { Head, Link, useForm } from '@inertiajs/vue3'
import Checkbox from '@/Components/Checkbox.vue'
import InputError from '@/Components/InputError.vue'
import InputLabel from '@/Components/InputLabel.vue'
import Socialstream from '@/Components/Socialstream.vue'
import TextInput from '@/Components/TextInput.vue'
import {computed} from "vue";
import __ from "@/lang.js";

defineProps({
    canResetPassword: Boolean,
    status: String,
})

const form = useForm({
    email: '',
    password: '',
    remember: false,
    type: (typeof window !== 'undefined') ? new URLSearchParams(window.location.search).get('type') || 'firm' : 'firm'
})
const headerText = computed(() => {
    if (form.type === 'worker') {
        return {
            line1: __('translate.Found'),
            line2: __('translate.together'),
            line3: __('translate.idealnej'),
            line4: __('translate.pracy'), // np. dla pracownika
        };
    }

    return {
        line1: __('translate.Found'),
        line2: __('translate.together'),
        line3: __('translate.idealnego'),
        line4: __('translate.pracownika'), // dla firmy
    };
});
const submit = () => {
    form.transform(data => ({
        ...data,
        remember: form.remember ? 'on' : '',
    })).post(route('login'), {
        onFinish: () => form.reset('password'),
    })
}
</script>

<template>
    <Head :title="__('translate.login')" />

    <!-- MAIN WRAPPER -->
    <div class="bg-gray-50 flex flex-col justify-center items-center min-h-screen p-6 relative overflow-hidden">
        <!-- Dekoracyjne tła -->
        <div class="absolute top-0 right-0 w-[500px] h-[500px] bg-blue-100/30 rounded-full blur-3xl -mr-64 -mt-64 transition-transform duration-1000 animate-pulse"></div>
        <div class="absolute bottom-0 left-0 w-[500px] h-[500px] bg-red-100/30 rounded-full blur-3xl -ml-64 -mb-64 transition-transform duration-1000 animate-pulse" style="animation-delay: 1s"></div>

        <div class="w-full max-w-xl relative">
            <!-- HEADER TEXT -->
            <div class="text-center mb-10 relative z-10">
                <Link href="/" class="inline-block">
                    <img src="/images/logo-horizontal.svg" class="h-10 w-auto mx-auto" alt="logo">
                </Link>
                <div class="mx-auto w-2/4 flex justify-center items-center gap-2 px-4 py-2 bg-blue-50 rounded-full mb-6">
                    <span class="w-2 h-2 bg-blue-500 rounded-full animate-pulse flex-shrink-0"></span>
                    <span class="text-[10px] font-black text-blue-600 uppercase tracking-[0.3em] leading-loose">{{ __('translate.login') }}</span>
                </div>
                <h2 class="text-3xl md:text-4xl font-black text-[#0A2C5C] leading-loose uppercase tracking-tighter">
                    {{ headerText.line1 }} {{ headerText.line2 }}<br />
                    <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-600 to-cyan-500">
                        {{ headerText.line3 }}
                    </span>
                    <span class="block text-lg md:text-xl mt-2 text-gray-400 font-black tracking-[0.2em]">
                        {{ headerText.line4 }}
                    </span>
                </h2>
            </div>

            <!-- LOGIN CARD -->
            <div class="bg-white rounded-[3rem] shadow-2xl shadow-blue-900/10 border border-white p-8 md:p-12 relative z-10 overflow-hidden">
                <div v-if="status" class="mb-8 p-4 bg-green-50 border border-green-100 rounded-2xl font-bold text-xs text-green-600 uppercase tracking-widest text-center">
                    {{ status }}
                </div>

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

                    <!-- EMAIL -->
                    <div class="space-y-2">
                        <label class="block text-[10px] font-black text-gray-400 uppercase tracking-widest ml-2">{{ __('translate.email') }}</label>
                        <input
                            id="email"
                            v-model="form.email"
                            type="email"
                            :placeholder="__('translate.email')"
                            class="w-full px-6 py-4 text-xs rounded-2xl border-gray-100 bg-gray-50 focus:bg-white focus:ring-0 focus:border-[#00a0e3] transition-all placeholder-gray-400 font-bold tracking-widest"
                        />
                        <InputError :message="form.errors.email" />
                    </div>

                    <!-- PASSWORD -->
                    <div class="space-y-2">
                        <div class="flex justify-between items-center ml-2">
                            <label class="block text-[10px] font-black text-gray-400 uppercase tracking-widest">{{ __('translate.password') }}</label>
                            <Link
                                v-if="canResetPassword"
                                :href="route('password.request')"
                                class="text-[9px] font-black text-blue-500 hover:text-[#0A2C5C] uppercase tracking-widest transition-colors"
                            >
                                {{ __('translate.forgot') }}
                            </Link>
                        </div>
                        <input
                            id="password"
                            v-model="form.password"
                            type="password"
                            :placeholder="__('translate.password')"
                            class="w-full px-6 py-4 text-xs rounded-2xl border-gray-100 bg-gray-50 focus:bg-white focus:ring-0 focus:border-[#00a0e3] transition-all placeholder-gray-400 font-bold tracking-widest"
                            autocomplete="current-password"
                        />
                        <InputError :message="form.errors.password" />
                    </div>

                    <!-- REMEMBER -->
                    <div class="flex items-center ml-2">
                        <label class="flex items-center group cursor-pointer select-none" for="remember">
                            <div class="relative">
                                <Checkbox id="remember" v-model:checked="form.remember" name="remember" class="sr-only" />
                                <div class="w-11 h-6 bg-gray-100 rounded-full transition-all duration-300 border border-gray-200/50 group-hover:bg-gray-200" :class="{'bg-[#00a0e3] border-[#00a0e3]': form.remember}"></div>
                                <div class="absolute left-1 top-1 w-4 h-4 bg-white rounded-full transition-all duration-300 shadow-sm" :class="{'translate-x-5': form.remember, 'shadow-blue-900/20': form.remember}"></div>
                            </div>
                            <span class="ml-4 text-[10px] font-black uppercase tracking-widest transition-colors duration-300" :class="form.remember ? 'text-[#00a0e3]' : 'text-gray-400'">
                                {{ __('translate.remember') }}
                            </span>
                        </label>
                    </div>

                    <!-- SUBMIT -->
                    <div class="pt-4">
                        <button
                            type="submit"
                            :disabled="form.processing"
                            class="w-full py-5 bg-[#0A2C5C] text-white text-xs font-black uppercase tracking-[0.2em] rounded-2xl hover:bg-blue-800 shadow-xl shadow-blue-900/20 transition-all hover:-translate-y-0.5 disabled:opacity-50"
                        >
                            {{ __('translate.logIn') }}
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
                            <span class="px-4 bg-white text-gray-400 font-black uppercase tracking-widest italic">lub zaloguj przez</span>
                        </div>
                    </div>

                    <Socialstream
                        :error="$page.props?.errors?.socialstream || null"
                        :labels="$page.props.socialstream.labels"
                        :providers="$page.props.socialstream.providers"
                    />
                </div>

                <!-- FOOTER -->
                <div class="mt-10 text-center">
                    <p class="text-[10px] font-black text-gray-400 uppercase tracking-widest">
                        Nie masz jeszcze konta?
                        <Link
                            :href="route('register')"
                            class="ml-2 text-red-500 hover:text-red-600 transition-colors underline underline-offset-4 decoration-2"
                        >
                            {{ __('translate.createAccount') }}
                        </Link>
                    </p>
                </div>
            </div>
        </div>
    </div>
</template>


