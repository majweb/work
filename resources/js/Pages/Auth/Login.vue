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
    type: 'firm'
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
    <div class="bg-work-main flex flex-col justify-center items-center h-full min-h-screen overflow-hidden">
        <!-- HEADER TEXT -->
        <div class="pl-5 text-center">
            <h2 class="text-5xl font-bold text-white pb-4">
                {{ headerText.line1 }}<br />
                <span class="text-5xl">{{ headerText.line2 }}</span><br />
                <span class="text-5xl">{{ headerText.line3 }}</span><br />
                <span class="font-semibold uppercase text-work-main-light">
            {{ headerText.line4 }}
        </span>
            </h2>
        </div>
        <div class="relative bg-work-main">
            <img
                src="/images/auth/shadow.svg"
                alt="Shadow"
                class="absolute -bottom-[100px] -right-[150px]"
            />
            <!-- LOGIN CARD -->
            <div class="bg-white rounded-xl shadow-xl  w-full max-w-xl text-gray-800 relative z-0">
                <img
                    :src="form.type === 'worker'
        ? '/images/auth/log_work.svg'
        : '/images/auth/log_firm.svg'"
                    alt="Login Graphic"
                    class="absolute bottom-0 right-2 w-[150px] transform -scale-x-100"
                />
                <div class="relative z-999 p-6">
                    <div class="flex justify-center mb-4">
                        <img src="/images/logo-horizontal.svg" class="w-4/5" alt="logo">
                    </div>

                    <div v-if="status" class="mb-4 font-medium text-sm text-green-600 text-center">
                        {{ status }}
                    </div>

                    <form @submit.prevent="submit" class="min-h-[400px]">
                        <!-- TYPE -->
                        <div>
                            <InputLabel for="type" :value="__('translate.type')" />
                            <select
                                v-model="form.type"
                                name="type"
                                class="border-work-main focus:blue-work rounded-md shadow-sm mt-1 block w-full mb-2 focus:ring-work-main font-semibold ext-[#0a2b57] uppercase"
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
                                class="mt-1 block w-full border-work-main focus:ring-work-main"
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
                                class="mt-1 block w-full border-work-main focus:ring-work-main"
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
                        <div class="flex flex-col items-center justify-center mt-4 gap-1">
                            <div class="flex gap-2">
                                <Link
                                    :href="route('register')"
                                    class="text-md uppercase text-[#0a2b57] hover:text-work-main-light"
                                >
                                    {{ __('translate.createAccount') }}
                                </Link>
                            </div>

                            <Button
                                :class="{ 'opacity-25': form.processing }"
                                :disabled="form.processing"
                                class="text-2xl uppercase bg-[#0a2b57] text-white font-bold px-6 py-2 rounded-md w-auto transition hover:bg-work-main-light"
                            >
                                {{ __('translate.logIn') }}
                            </Button>

                            <Link
                                v-if="canResetPassword"
                                :href="route('password.request')"
                                class="text-sm text-[#0a2b57] hover:text-work-main-light mt-2"
                            >
                                {{ __('translate.forgot') }}
                            </Link>


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

            </div>
        </div>
    </div>
</template>


