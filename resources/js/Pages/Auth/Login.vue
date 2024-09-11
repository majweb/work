<script setup>
import {Head, Link, useForm} from '@inertiajs/vue3';
import AuthenticationCard from '@/Components/AuthenticationCard.vue';
import AuthenticationCardLogo from '@/Components/AuthenticationCardLogo.vue';
import Checkbox from '@/Components/Checkbox.vue';
import InputError from '@/Components/InputError.vue';
import InputLabel from '@/Components/InputLabel.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import Socialstream from '@/Components/Socialstream.vue';
import TextInput from '@/Components/TextInput.vue';

defineProps({
    canResetPassword: Boolean,
    status: String,
});

const form = useForm({
    email: '',
    password: '',
    remember: false,
    type:'firm'
});

const submit = () => {
    form.transform(data => ({
        ...data,
        remember: form.remember ? 'on' : '',
    })).post(route('login'), {
        onFinish: () => form.reset('password'),
    });
};
</script>

<template>
    <Head title="Log in"/>

    <AuthenticationCard>
        <template #logo>
            <AuthenticationCardLogo/>
        </template>

        <div v-if="status" class="mb-4 font-medium text-sm text-green-600">
            {{ status }}
        </div>

        <form @submit.prevent="submit">
            <div>
                <InputLabel for="type" :value="__('auth.type')"/>
                <select v-model="form.type" name="type" class="border-gray-300 focus:blue-work rounded-md shadow-sm mt-1 block w-full mb-2">
                    <option value="firm">{{__('auth.firmrecruit')}}</option>
                    <option value="worker">{{__('auth.worker')}}</option>
                </select>
                <InputError :message="form.errors.type" class="mt-2"/>
            </div>

            <div>
                <InputLabel for="email" :value="__('auth.email')"/>
                <TextInput
                    id="email"
                    v-model="form.email"
                    autofocus
                    class="mt-1 block w-full"
                    required
                    type="email"
                />
                <InputError :message="form.errors.email" class="mt-2"/>
            </div>

            <div class="mt-4">
                <InputLabel for="password" :value="__('auth.password')"/>
                <TextInput
                    id="password"
                    v-model="form.password"
                    autocomplete="current-password"
                    class="mt-1 block w-full"
                    required
                    type="password"
                />
                <InputError :message="form.errors.password" class="mt-2"/>
            </div>

            <div class="block mt-4">
                <label class="flex items-center">
                    <Checkbox v-model:checked="form.remember" name="remember"/>
                    <span class="ml-2 text-sm text-gray-600">{{__('auth.remember')}}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                <Link v-if="canResetPassword" :href="route('password.request')"
                      class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    {{__('auth.forgot')}}
                </Link>
                <Link :href="route('register')" class="ml-2 underline text-sm text-gray-600 hover:text-gray-900">
                  {{__('auth.register')}}
                </Link>
                <PrimaryButton :class="{ 'opacity-25': form.processing }" :disabled="form.processing" class="ml-4">
                    {{__('auth.login')}}
                </PrimaryButton>
            </div>
        </form>

        <Socialstream v-if="form.type == 'worker' && $page.props.socialstream.show && $page.props.socialstream.providers.length"
                      :error="$page.props?.errors?.socialstream || null"
                      :labels="$page.props.socialstream.labels" :providers="$page.props.socialstream.providers"/>
    </AuthenticationCard>
</template>
