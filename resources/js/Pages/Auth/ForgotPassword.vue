<script setup>
import { Head, useForm,Link } from '@inertiajs/vue3';
import InputError from '@/Components/InputError.vue';
import InputLabel from '@/Components/InputLabel.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import TextInput from '@/Components/TextInput.vue';

defineProps({
    status: String,
});

const form = useForm({
    email: '',
});

const submit = () => {
    form.post(route('password.email'));
};
</script>

<template>
    <Head :title="__('translate.forgotPassword')" />

    <!-- MAIN WRAPPER -->
    <div class="bg-[#0d2a52] flex flex-col justify-center items-center h-full min-h-screen overflow-hidden">
        <!-- SHADOW / BACKGROUND DECORATION -->
        <div class="relative bg-[#0d2a52]">
            <img
                src="/images/auth/shadow.svg"
                alt="Shadow"
                class="absolute -bottom-[100px] -right-[150px]"
            />

            <!-- CARD -->
            <div class="bg-white rounded-xl shadow-xl w-full max-w-xl text-gray-800 relative z-0">
                <div class="relative z-50 p-6">

                    <!-- LOGO -->
                    <div class="flex justify-center mb-4">
                        <img src="/images/logo-horizontal.svg" class="w-4/5" alt="logo" />
                    </div>

                    <!-- STATUS MESSAGE -->
                    <div v-if="status" class="mb-4 font-medium text-sm text-green-600 text-center">
                        {{ status }}
                    </div>

                    <!-- DESCRIPTION -->
                    <div class="mb-4 text-center text-gray-700 text-md">
                        {{ __('translate.forgottext') }}
                    </div>

                    <!-- FORM -->
                    <form @submit.prevent="submit">

                        <!-- EMAIL -->
                        <div class="mt-2">
                            <InputLabel for="email" :value="__('translate.email')" class="text-[#0d2a52]" />
                            <TextInput
                                id="email"
                                v-model="form.email"
                                type="email"
                                class="mt-1 block w-full border-[#0d2a52] focus:ring-[#0d2a52]"
                                autofocus
                                autocomplete="username"
                            />
                            <InputError :message="form.errors.email" class="mt-2" />
                        </div>

                        <!-- BUTTONS -->
                        <div class="flex flex-col items-center gap-2 mt-6">

                            <PrimaryButton
                                class="bg-work-main text-white px-6 py-2 rounded-md w-auto transition hover:bg-work-main-light text-xl font-bold uppercase"
                                :class="{ 'opacity-25': form.processing }"
                                :disabled="form.processing"
                            >
                                {{ __('translate.emailresetlink') }}
                            </PrimaryButton>

                            <Link
                                :href="route('login')"
                                class="text-sm text-work-main hover:text-work-main-light"
                            >
                                {{ __('translate.back') }}
                            </Link>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</template>
