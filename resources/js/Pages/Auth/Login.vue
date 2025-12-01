<script setup>
import { Head, Link, useForm } from '@inertiajs/vue3'
import AuthenticationCardLogo from '@/Components/AuthenticationCardLogo.vue'
import Checkbox from '@/Components/Checkbox.vue'
import InputError from '@/Components/InputError.vue'
import InputLabel from '@/Components/InputLabel.vue'
import PrimaryButton from '@/Components/PrimaryButton.vue'
import Socialstream from '@/Components/Socialstream.vue'
import TextInput from '@/Components/TextInput.vue'

defineProps({
    canResetPassword: Boolean,
    status: String,
})

const form = useForm({
    email: '',
    password: '',
    remember: false,
    type: 'firm'
})

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
    <Head title="Log in" />

    <!-- MAIN WRAPPER -->
    <div class="relative min-h-screen bg-[#0d2a52] grid place-items-center px-6 py-10 overflow-hidden">

        <img
            src="/images/auth/LOGOWANIE_FIRMA.svg"
            alt="Rekruter"
            class="
                absolute bottom-0
                left-0
                max-w-[220px]
                sm:max-w-[280px]
                md:max-w-[360px]
                lg:max-w-[460px]

                pointer-events-none select-none z-10
            "
        />

        <!-- CENTERED FORM WRAPPER -->
        <div class="relative z-0 w-full max-w-2xl flex flex-col md:flex-row md:left-10">
            <!-- LOGIN CARD -->
            <div class="bg-white rounded-xl shadow-xl p-6 w-full text-gray-800 order-1 md:order-0">

                <div class="flex justify-center mb-4">
                    <AuthenticationCardLogo />
                </div>

                <div v-if="status" class="mb-4 font-medium text-sm text-green-600 text-center">
                    {{ status }}
                </div>

                <form @submit.prevent="submit">
                    <!-- TYPE -->
                    <div>
                        <InputLabel for="type" :value="__('translate.type')" />
                        <select
                            v-model="form.type"
                            name="type"
                            class="border-[#0d2a52] focus:blue-work rounded-md shadow-sm mt-1 block w-full mb-2 focus:ring-[#0d2a52]"
                        >
                            <option value="firm">{{ __('translate.firmrecruit') }}</option>
                            <option value="worker">{{ __('translate.worker') }}</option>
                        </select>
                        <InputError :message="form.errors.type" class="mt-2" />
                    </div>

                    <!-- EMAIL -->
                    <div>
                        <InputLabel for="email" :value="__('translate.email')" />
                        <TextInput
                            id="email"
                            v-model="form.email"
                            type="email"
                            class="mt-1 block w-full border-[#0d2a52] focus:ring-[#0d2a52]"
                        />
                        <InputError :message="form.errors.email" class="mt-2" />
                    </div>

                    <!-- PASSWORD -->
                    <div class="mt-4">
                        <InputLabel for="password" :value="__('translate.password')" />
                        <TextInput
                            id="password"
                            v-model="form.password"
                            type="password"
                            autocomplete="current-password"
                            class="mt-1 block w-full border-[#0d2a52] focus:ring-[#0d2a52]"
                        />
                        <InputError :message="form.errors.password" class="mt-2" />
                    </div>

                    <!-- REMEMBER -->
                    <div class="block mt-4">
                        <label class="flex items-center">
                            <Checkbox v-model:checked="form.remember" name="remember" />
                            <span class="ml-2 text-sm text-gray-600">{{ __('translate.remember') }}</span>
                        </label>
                    </div>

                    <!-- BUTTONS -->
                    <div class="flex flex-col items-center mt-4 gap-2">

                        <div class="flex gap-2">
                            <Link
                                v-if="canResetPassword"
                                :href="route('password.request')"
                                class="underline text-sm text-gray-600 hover:text-gray-900"
                            >
                                {{ __('translate.forgot') }}
                            </Link>

                            <Link
                                :href="route('register')"
                                class="underline text-sm text-gray-600 hover:text-gray-900"
                            >
                                {{ __('translate.register') }}
                            </Link>
                        </div>

                        <PrimaryButton
                            :class="{ 'opacity-25': form.processing }"
                            :disabled="form.processing"
                            class="w-full md:w-auto mt-2"
                        >
                            {{ __('translate.login') }}
                        </PrimaryButton>
                    </div>
                </form>

                <!-- SOCIALSTREAM -->
                <Socialstream
                    v-if="form.type == 'worker'
                        && $page.props.socialstream.show
                        && $page.props.socialstream.providers.length"
                    :error="$page.props?.errors?.socialstream || null"
                    :labels="$page.props.socialstream.labels"
                    :providers="$page.props.socialstream.providers"
                    class="mt-4"
                />

            </div>
            <!-- HEADER TEXT -->
            <div class="pl-5 text-left order-0 md:order-1">
                <h2 class="text-3xl sm:text-5xl font-bold text-white">
                    Poszukajmy<br />
                    <span class="text-7xl">wspólnie</span><br />
                    <span class="text-7xl leading-[1px]">idealnego</span><br />
                     <span class="font-semibold uppercase">pracownika</span>
                </h2>
            </div>

        </div>
    </div>
</template>


