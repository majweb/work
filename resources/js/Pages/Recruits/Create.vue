<script setup>

import {useForm, Link} from '@inertiajs/vue3';

import ActionMessage from '@/Components/ActionMessage.vue';
import FormSection from '@/Components/FormSection.vue';
import InputError from '@/Components/InputError.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import TextInput from '@/Components/TextInput.vue';
import AppLayout from '@/Layouts/AppLayout.vue';
import SpinnerAction from "@/Components/SpinnerAction.vue";
import InputLabel from "@/Components/InputLabel.vue";

const props = defineProps({
    permissions: Array,
});

const form = useForm({
    name: '',
    email: '',
    password: '',
    password_confirmation: '',
    recruiter_phone: '',
    permissions: props.permissions
});

const createUser = () => {
    form.post(route('recruits.store'), {
        errorBag: 'createUser',
        preserveScroll: true,
        onSuccess: () => {
            form.reset();
        },

    });
};
</script>

<template>
    <AppLayout :title="__('translate.createRecruit')">
        <template #header>
            <div class="flex justify-between">

                <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                    {{__('translate.createRecruit')}}
                </h2>
                <Link :href="route('recruits.index')" class="text-gray-500 mr-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                         stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 10h16M4 14h16M4 18h16"/>
                    </svg>
                </Link>
            </div>
        </template>

        <div>
            <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
                <div>
                    <FormSection @submitted="createUser">
                        <template #title>
                            {{__('translate.recruit')}}
                        </template>

                        <template #description>
                            {{__('translate.recruitInfo')}}
                        </template>

                        <template #form>

                            <div class="col-span-6">
                                <div class="mt-4">
                                    <InputLabel for="name" :value="__('translate.name')"/>
                                    <TextInput
                                        id="name"
                                        v-model="form.name"
                                        autofocus
                                        class="mt-1 block w-full"
                                        type="text"
                                    />
                                    <InputError :message="form.errors.name" class="mt-2"/>
                                </div>
                                <div class="mt-4">
                                    <InputLabel for="recruiter_phone" :value="__('translate.phone')"/>
                                    <TextInput
                                        id="recruiter_phone"
                                        v-model="form.recruiter_phone"
                                        class="mt-1 block w-full"
                                        type="number"
                                    />
                                    <InputError :message="form.errors.recruiter_phone" class="mt-2"/>
                                </div>

                                <div class="mt-4">
                                    <InputLabel for="email" :value="__('translate.email')"/>
                                    <TextInput
                                        id="email"
                                        v-model="form.email"
                                        class="mt-1 block w-full"
                                        type="email"
                                    />
                                    <InputError :message="form.errors.email" class="mt-2"/>
                                </div>

                                <div class="mt-4">
                                    <InputLabel for="password" :value="__('translate.password')"/>
                                    <TextInput
                                        id="password"
                                        v-model="form.password"
                                        class="mt-1 block w-full"
                                        type="password"
                                    />
                                    <InputError :message="form.errors.password" class="mt-2"/>
                                </div>

                                <div class="mt-4">
                                    <InputLabel for="password_confirmation" :value="__('translate.passwordconfirm')"/>
                                    <TextInput
                                        id="password_confirmation"
                                        v-model="form.password_confirmation"
                                        class="mt-1 block w-full"
                                        type="password"
                                    />
                                    <InputError :message="form.errors.password_confirmation" class="mt-2"/>
                                </div>
                                <div class="mt-4">
                                    <InputLabel for="permissions" :value="__('translate.right')" />
                                    <div v-for="permission in permissions">
                                        <input
                                            class="rounded border-gray-300 text-blue-work shadow-sm focus:ring-blue-work mr-2"
                                            type="checkbox" :id="permission.id" v-model="form.permissions"
                                            :value="permission" name="permissions">
                                        <label :for="permission.id">{{permission.trans}}</label>
                                    </div>
                                    <InputError :message="form.errors.permissions" class="mt-2"/>
                                </div>
                            </div>
                        </template>

                        <template #actions>
                            <ActionMessage :on="form.recentlySuccessful" class="mr-3">
                                {{__('translate.addedRecruit')}}
                            </ActionMessage>
                            <PrimaryButton :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
                                <spinner-action :process="form.processing">{{__('translate.add')}}</spinner-action>
                            </PrimaryButton>
                        </template>
                    </FormSection>
                </div>
            </div>
        </div>
    </AppLayout>
</template>
