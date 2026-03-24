<script setup>
import { computed } from 'vue';
import { Head, Link, useForm } from '@inertiajs/vue3';
import AuthenticationCard from '@/Components/AuthenticationCard.vue';
import AuthenticationCardLogo from '@/Components/AuthenticationCardLogo.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';

const props = defineProps({
    status: String,
});

const form = useForm({});

const submit = () => {
    form.post(route('verification.send'));
};

const verificationLinkSent = computed(() => props.status === 'verification-link-sent');
</script>

<template>
    <Head :title="__('translate.emailVerification')" />

    <!-- MAIN WRAPPER -->
    <div class="bg-gray-50 flex flex-col justify-center items-center h-full min-h-screen overflow-hidden relative">
        <!-- BACKGROUND DECORATIONS -->
        <div class="absolute top-0 left-0 w-[500px] h-[500px] bg-blue-100/50 rounded-full blur-[120px] -translate-x-1/2 -translate-y-1/2 animate-pulse"></div>
        <div class="absolute bottom-0 right-0 w-[400px] h-[400px] bg-red-50/50 rounded-full blur-[100px] translate-x-1/3 translate-y-1/3 animate-pulse" style="animation-delay: 2s"></div>

        <div class="w-full max-w-xl px-6 relative z-10">
            <!-- HEADER -->
            <div class="text-center mb-10">
                <h2 class="text-3xl md:text-4xl font-black text-[#0A2C5C] uppercase tracking-tighter leading-none mb-4">
                    <span class="block">{{ __('translate.emailVerification') }}</span>
                    <span class="block text-lg md:text-xl mt-2 text-gray-400 font-black tracking-[0.2em]">
                        {{ __('translate.confirmEmail') }}
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
                    {{ __('translate.verify') }}
                </div>

                <!-- STATUS MESSAGE -->
                <div v-if="verificationLinkSent" class="mb-8 p-4 bg-green-50 rounded-2xl border border-green-100 font-bold text-xs text-green-600 text-center tracking-widest uppercase relative z-10">
                    {{ __('translate.verifylink') }}
                </div>

                <!-- FORM -->
                <form @submit.prevent="submit" class="space-y-8 relative z-10">
                    <!-- ACTIONS -->
                    <div class="flex flex-col items-center gap-6">
                        <PrimaryButton
                            class="w-full justify-center bg-[#0A2C5C] text-white px-8 py-5 rounded-2xl transition-all hover:bg-[#0d2a52] hover:scale-[1.02] active:scale-[0.98] text-xs font-black uppercase tracking-[0.2em] shadow-xl shadow-blue-900/20"
                            :class="{ 'opacity-25': form.processing }"
                            :disabled="form.processing"
                        >
                            {{ __('translate.resend') }}
                        </PrimaryButton>

                        <div class="flex flex-wrap justify-center gap-6">
                            <Link
                                :href="route('profile.show')"
                                class="text-[10px] font-black text-gray-400 hover:text-[#0A2C5C] uppercase tracking-widest transition-colors"
                            >
                                {{ __('translate.editProfile') }}
                            </Link>

                            <Link
                                :href="route('logout')"
                                method="post"
                                as="button"
                                class="text-[10px] font-black text-red-400 hover:text-red-600 uppercase tracking-widest transition-colors"
                            >
                                {{ __('translate.logout') }}
                            </Link>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</template>
