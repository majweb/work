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

const form = useForm({
    name: '',
    email: '',
    password: '',
    type: 'firm',
    password_confirmation: '',
    terms: false,
});

const submit = () => {
    form.post(route('register'), {
        onFinish: () => form.reset('password', 'password_confirmation'),
    });
};
</script>
<template>
    <Head title="Rejestracja"/>
    <AuthenticationCard>
        <template #logo>
            <AuthenticationCardLogo/>
        </template>

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
                <InputLabel for="name"  :value="__('auth.name')"/>
                <TextInput
                    id="name"
                    v-model="form.name"
                    type="text"
                    class="mt-1 block w-full"
                    autofocus
                    autocomplete="name"
                />
                <InputError class="mt-2" :message="form.errors.name"/>
            </div>
            <div class="mt-4">
                <InputLabel for="email" :value="__('auth.email')"/>
                <TextInput
                    id="email"
                    v-model="form.email"
                    type="email"
                    class="mt-1 block w-full"
                />
                <InputError class="mt-2" :message="form.errors.email"/>
            </div>
            <div class="mt-4">
                <InputLabel for="password" :value="__('auth.password')"/>
                <TextInput
                    id="password"
                    v-model="form.password"
                    type="password"
                    class="mt-1 block w-full"
                    autocomplete="new-password"
                />
                <InputError class="mt-2" :message="form.errors.password"/>
            </div>
            <div class="mt-4">
                <InputLabel for="password_confirmation" :value="__('auth.passwordconfirm')"/>
                <TextInput
                    id="password_confirmation"
                    v-model="form.password_confirmation"
                    type="password"
                    class="mt-1 block w-full"
                    autocomplete="new-password"
                />
                <InputError class="mt-2" :message="form.errors.password_confirmation"/>
            </div>
            <div v-if="$page.props.jetstream.hasTermsAndPrivacyPolicyFeature" class="mt-4">
                <InputLabel for="terms">
                    <div class="flex items-center">
                        <Checkbox id="terms" v-model:checked="form.terms" name="terms"/>

                        <div class="ml-2">
                            {{__('auth.agree')}} <a target="_blank" :href="route('terms.show')"
                                             class="underline text-sm text-gray-600 hover:text-gray-900">{{__('auth.terms')}}
                        </a> {{__('auth.and')}} <a target="_blank" :href="route('policy.show')"
                                  class="underline text-sm text-gray-600 hover:text-gray-900">{{__('auth.policy')}}</a>
                        </div>
                    </div>
                </InputLabel>
                <InputError class="mt-2" :message="form.errors.terms"/>

            </div>
            <div class="flex items-center justify-end mt-4">
                <Link :href="route('login')" class="underline text-sm text-gray-600 hover:text-gray-900">
                    {{__('auth.already')}}
                </Link>

                <PrimaryButton class="ml-4" :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
                    {{__('auth.register')}}
                </PrimaryButton>
            </div>
        </form>
        <Socialstream v-if="form.type == 'worker' && $page.props.socialstream.show && $page.props.socialstream.providers.length"
                      :error="$page.props?.errors?.socialstream || null"
                      :labels="$page.props.socialstream.labels" :providers="$page.props.socialstream.providers"/>
    </AuthenticationCard>
</template>
