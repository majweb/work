<script setup>
import { Head, Link, useForm } from '@inertiajs/vue3'
import Checkbox from '@/Components/Checkbox.vue'
import InputError from '@/Components/InputError.vue'
import InputLabel from '@/Components/InputLabel.vue'
import Socialstream from '@/Components/Socialstream.vue'
import TextInput from '@/Components/TextInput.vue'
import { computed } from "vue"
import __ from "@/lang.js";

const form = useForm({
    name: '',
    email: '',
    password: '',
    type: 'firm',
    password_confirmation: '',
    terms: false,
})

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

    <div class="bg-[#0d2a52] flex flex-col justify-center items-center h-full min-h-screen overflow-hidden">

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

        <div class="relative bg-[#0d2a52]">
            <img
                src="/images/auth/shadow.svg"
                alt="Shadow"
                class="absolute -bottom-[100px] -right-[150px]"
            />

            <!-- REGISTRATION CARD -->
            <div class="bg-white rounded-xl shadow-xl w-full max-w-xl text-gray-800 relative z-0">
                <!-- DYNAMIC IMAGE -->
                <img
                    :src="form.type === 'worker'
                        ? '/images/auth/register_work.svg'
                        : '/images/auth/register_firm.svg'"
                    alt="Registration Graphic"
                    class="absolute bottom-0 right-2 w-[150px] transform -scale-x-100"
                />

                <div class="relative z-50 p-6">
                    <div class="flex justify-center mb-4">
                        <img src="/images/logo-horizontal.svg" class="w-4/5" alt="logo">
                    </div>
                    <form @submit.prevent="submit" class="min-h-[600px]">

                        <!-- TYPE -->
                        <div>
                            <InputLabel for="type" :value="__('translate.type')" />
                            <select
                                v-model="form.type"
                                name="type"
                                class="border-[#0d2a52] focus:ring-[#0d2a52] rounded-md shadow-sm mt-1 block w-full mb-2 font-semibold uppercase"
                            >
                                <option value="firm">{{ __('translate.firmrecruit') }}</option>
                                <option value="worker">{{ __('translate.worker') }}</option>
                            </select>
                            <InputError :message="form.errors.type" class="mt-2" />
                        </div>

                        <!-- NAME -->
                        <div class="mt-2">
                            <InputLabel for="name" :value="__('translate.name')" />
                            <TextInput
                                id="name"
                                v-model="form.name"
                                type="text"
                                class="mt-1 block w-full border-[#0d2a52] focus:ring-[#0d2a52]"
                                autofocus
                            />
                            <InputError :message="form.errors.name" class="mt-2" />
                        </div>

                        <!-- EMAIL -->
                        <div class="mt-4">
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
                                class="mt-1 block w-full border-[#0d2a52] focus:ring-[#0d2a52]"
                            />
                            <InputError :message="form.errors.password" class="mt-2" />
                        </div>

                        <!-- CONFIRM PASSWORD -->
                        <div class="mt-4">
                            <InputLabel for="password_confirmation" :value="__('translate.passwordconfirm')" />
                            <TextInput
                                id="password_confirmation"
                                v-model="form.password_confirmation"
                                type="password"
                                class="mt-1 block w-full border-[#0d2a52] focus:ring-[#0d2a52]"
                            />
                            <InputError :message="form.errors.password_confirmation" class="mt-2" />
                        </div>

                        <!-- TERMS -->
                        <div
                            v-if="$page.props.jetstream.hasTermsAndPrivacyPolicyFeature"
                            class="mt-4"
                        >
                            <InputLabel for="terms">
                                <div class="flex items-center">
                                    <Checkbox id="terms" v-model:checked="form.terms" />

                                    <div class="ml-2 text-sm text-gray-600">
                                        {{ __('translate.agree') }}
                                        <a
                                            :href="route('terms.show')"
                                            target="_blank"
                                            class="underline hover:text-work-main-light"
                                        >
                                            {{ __('translate.terms') }}
                                        </a>
                                        {{ __('translate.and') }}
                                        <a
                                            :href="route('policy.show')"
                                            target="_blank"
                                            class="underline hover:text-work-main-light"
                                        >
                                            {{ __('translate.policy') }}
                                        </a>
                                    </div>
                                </div>
                            </InputLabel>
                            <InputError :message="form.errors.terms" class="mt-2" />
                        </div>

                        <!-- BUTTONS -->
                        <div class="flex flex-col gap-2 items-center justify-end mt-6">
                            <Link
                                :href="route('login')"
                                class="text-sm text-work-main hover:text-work-main-light"
                            >
                                {{ __('translate.already') }}
                            </Link>

                            <Button
                                class="text-xl uppercase bg-work-main text-white font-bold px-6 py-2 rounded-md w-auto transition hover:bg-work-main-light"
                                :class="{ 'opacity-25': form.processing }"
                                :disabled="form.processing"
                            >
                                {{ __('translate.register') }}
                            </Button>
                        </div>
                    </form>

                    <!-- SOCIALSTREAM (only worker) -->
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
