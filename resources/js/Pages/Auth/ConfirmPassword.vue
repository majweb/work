<script setup>
import { ref } from 'vue'
import { Head, useForm, Link } from '@inertiajs/vue3'
import InputError from '@/Components/InputError.vue'
import InputLabel from '@/Components/InputLabel.vue'
import PrimaryButton from '@/Components/PrimaryButton.vue'
import TextInput from '@/Components/TextInput.vue'
import __ from "@/lang.js"

const form = useForm({
    password: '',
})

const passwordInput = ref(null)

const submit = () => {
    form.post(route('password.confirm'), {
        onFinish: () => {
            form.reset()
            passwordInput.value.focus()
        },
    })
}
</script>

<template>
    <Head :title="__('translate.passwordconfirm')" />

    <!-- MAIN WRAPPER -->
    <div class="bg-work-main flex flex-col justify-center items-center h-full min-h-screen overflow-hidden">

        <!-- SHADOW BACKGROUND -->
        <div class="relative bg-work-main">
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

                    <!-- TEXT -->
                    <div class="mb-4 text-center text-gray-700 text-md">
                        {{ __('translate.confirm') }}
                    </div>

                    <!-- FORM -->
                    <form @submit.prevent="submit">

                        <!-- PASSWORD -->
                        <div class="mt-2">
                            <InputLabel for="password" :value="__('translate.password')" class="text-work-main" />
                            <TextInput
                                id="password"
                                ref="passwordInput"
                                v-model="form.password"
                                type="password"
                                class="mt-1 block w-full border-work-main focus:ring-work-main"
                                autocomplete="current-password"
                                autofocus
                            />
                            <InputError :message="form.errors.password" class="mt-2" />
                        </div>

                        <!-- BUTTONS -->
                        <div class="flex flex-col items-center gap-2 mt-6">

                            <PrimaryButton
                                class="bg-work-main text-white px-6 py-2 rounded-md w-auto transition hover:bg-work-main-light text-xl font-bold uppercase"
                                :class="{ 'opacity-25': form.processing }"
                                :disabled="form.processing"
                            >
                                {{ __('translate.confirmbtn') }}
                            </PrimaryButton>

                            <Link
                                :href="route('dashboard')"
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
