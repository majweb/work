<script setup>
import { Head, useForm } from '@inertiajs/vue3'
import InputError from '@/Components/InputError.vue'
import InputLabel from '@/Components/InputLabel.vue'
import PrimaryButton from '@/Components/PrimaryButton.vue'
import TextInput from '@/Components/TextInput.vue'
import { Link } from '@inertiajs/vue3'
import __ from "@/lang.js"

const props = defineProps({
    email: String,
    token: String,
})

const form = useForm({
    token: props.token,
    email: props.email,
    password: '',
    password_confirmation: '',
})

const submit = () => {
    form.post(route('password.update'), {
        onFinish: () => form.reset('password', 'password_confirmation'),
    })
}
</script>

<template>
    <Head :title="__('translate.resetPassword')" />

    <!-- MAIN WRAPPER -->
    <div class="bg-gray-50 flex flex-col justify-center items-center h-full min-h-screen overflow-hidden relative">
        <!-- BACKGROUND DECORATIONS -->
        <div class="absolute top-0 left-0 w-[500px] h-[500px] bg-blue-100/50 rounded-full blur-[120px] -translate-x-1/2 -translate-y-1/2 animate-pulse"></div>
        <div class="absolute bottom-0 right-0 w-[400px] h-[400px] bg-red-50/50 rounded-full blur-[100px] translate-x-1/3 translate-y-1/3 animate-pulse" style="animation-delay: 2s"></div>

        <div class="w-full max-w-xl px-6 relative z-10">
            <!-- HEADER -->
            <div class="text-center mb-10">
                <h2 class="text-3xl md:text-4xl font-black text-[#0A2C5C] uppercase tracking-tighter leading-none mb-4">
                    <span class="block">{{ __('translate.resetPassword') }}</span>
                    <span class="block text-lg md:text-xl mt-2 text-gray-400 font-black tracking-[0.2em]">
                        {{ __('translate.newSecurity') }}
                    </span>
                </h2>
            </div>

            <!-- CARD -->
            <div class="bg-white rounded-[3rem] shadow-2xl shadow-blue-900/10 border border-white p-8 md:p-12 relative overflow-hidden">
                <!-- LOGO -->
                <div class="flex justify-center mb-8 relative z-10">
                    <img src="/images/logo-horizontal.svg" class="w-48" alt="logo" />
                </div>

                <!-- DESCRIPTION -->
                <div class="mb-8 text-center text-gray-500 text-xs font-bold tracking-widest uppercase leading-loose relative z-10">
                    {{ __('translate.resetText') }}
                </div>

                <!-- FORM -->
                <form @submit.prevent="submit" class="space-y-6 relative z-10">
                    <!-- EMAIL -->
                    <div class="space-y-2">
                        <label class="block text-[10px] font-black text-gray-400 uppercase tracking-widest ml-2">{{ __('translate.email') }}</label>
                        <input
                            id="email"
                            v-model="form.email"
                            type="email"
                            :placeholder="__('translate.email')"
                            class="w-full px-6 py-4 text-xs rounded-2xl border-gray-100 bg-gray-50 focus:bg-white focus:ring-0 focus:border-[#00a0e3] transition-all placeholder-gray-400 font-bold tracking-widest"
                            required
                            autofocus
                            autocomplete="username"
                        />
                        <InputError :message="form.errors.email" />
                    </div>

                    <!-- PASSWORD -->
                    <div class="space-y-2">
                        <label class="block text-[10px] font-black text-gray-400 uppercase tracking-widest ml-2">{{ __('translate.password') }}</label>
                        <input
                            id="password"
                            v-model="form.password"
                            type="password"
                            :placeholder="__('translate.password')"
                            class="w-full px-6 py-4 text-xs rounded-2xl border-gray-100 bg-gray-50 focus:bg-white focus:ring-0 focus:border-[#00a0e3] transition-all placeholder-gray-400 font-bold tracking-widest"
                            required
                            autocomplete="new-password"
                        />
                        <InputError :message="form.errors.password" />
                    </div>

                    <!-- PASSWORD CONFIRM -->
                    <div class="space-y-2">
                        <label class="block text-[10px] font-black text-gray-400 uppercase tracking-widest ml-2">{{ __('translate.passwordconfirm') }}</label>
                        <input
                            id="password_confirmation"
                            v-model="form.password_confirmation"
                            type="password"
                            :placeholder="__('translate.passwordconfirm')"
                            class="w-full px-6 py-4 text-xs rounded-2xl border-gray-100 bg-gray-50 focus:bg-white focus:ring-0 focus:border-[#00a0e3] transition-all placeholder-gray-400 font-bold tracking-widest"
                            required
                            autocomplete="new-password"
                        />
                        <InputError :message="form.errors.password_confirmation" />
                    </div>

                    <!-- ACTIONS -->
                    <div class="flex flex-col items-center gap-6 pt-4">
                        <PrimaryButton
                            class="w-full justify-center bg-[#0A2C5C] text-white px-8 py-5 rounded-2xl transition-all hover:bg-[#0d2a52] hover:scale-[1.02] active:scale-[0.98] text-xs font-black uppercase tracking-[0.2em] shadow-xl shadow-blue-900/20"
                            :class="{ 'opacity-25': form.processing }"
                            :disabled="form.processing"
                        >
                            {{ __('translate.resetBtn') }}
                        </PrimaryButton>

                        <Link
                            :href="route('login')"
                            class="text-[10px] font-black text-gray-400 hover:text-[#0A2C5C] uppercase tracking-widest transition-colors"
                        >
                            {{ __('translate.backToLogin') }}
                        </Link>
                    </div>
                </form>
            </div>
        </div>
    </div>
</template>
