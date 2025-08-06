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
import 'vue-color/style.css';
import { ChromePicker  } from 'vue-color'


const props = defineProps({
    recruit: Object,
    permissions: Array,
    locale: String,
});

const form = useForm({
    id: props.recruit.id,
    name: props.recruit.name,
    email: props.recruit.email,
    user_blocked: props.recruit.user_blocked,
    password: '',
    password_confirmation: '',
    recruiter_phone: props.recruit.recruiter_phone ?? null,
    color: props.recruit.color || '#00a0e3',
    permissions: props.recruit.permissions.map(el=>{
        return {
            'id':el.id,
            'name':el.name,
            'trans':JSON.parse(el.trans)[props.locale],
        }
    })
});

const updateUser = () => {
    form.put(route('recruits.update',props.recruit), {
        errorBag: 'updateUser',
        preserveScroll: true
    });
};
</script>

<template>
    <AppLayout :title="__('translate.editRecruit')">
        <template #header>
            <div class="flex justify-between">

                <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                    {{__('translate.editRecruit')}}
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
                    <FormSection @submitted="updateUser">
                        <template #title>
                            {{props.recruit.name}}
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
                                        autocomplete="name"
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
                                    <InputLabel for="color" :value="__('translate.color')" />
                                    <div class="mt-1">
                                        <ChromePicker v-model="form.color" formats="hex" />
                                        <p class="mt-1 text-sm text-gray-500">{{ __('translate.colorHelper') }}</p>
                                        <p class="text-xs text-gray-400 italic">{{ __('translate.colorOptional') }}</p>
                                    </div>
                                    <InputError :message="form.errors.color" class="mt-2"/>
                                </div>
                                <div class="mt-4">
                                    <InputLabel for="permissions" value="Uprawnienia"/>
                                    <div v-for="permission in permissions">
                                        <input
                                            class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500 mr-2"
                                            type="checkbox" :id="permission.id" v-model="form.permissions"
                                            :value="permission" name="permissions">
                                        <label :for="permission.id">{{permission.trans}}</label>
                                    </div>
                                    <InputError :message="form.errors.permissions" class="mt-2"/>
                                </div>
                                <div class="mt-4">
                                    <input
                                        class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500 mr-2"
                                        type="checkbox" id="blocked" v-model="form.user_blocked"
                                        name="user_blocked">
                                    <label for="blocked">{{__('translate.user_blocked')}}</label>
                                    <InputError :message="form.errors.user_blocked" class="mt-2"/>
                                </div>
                            </div>
                        </template>

                        <template #actions>
                            <ActionMessage :on="form.recentlySuccessful" class="mr-3">
                                {{__('translate.updateRecruit')}}
                            </ActionMessage>
                            <PrimaryButton :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
                                <spinner-action :process="form.processing">{{__('translate.update')}}</spinner-action>
                            </PrimaryButton>
                        </template>
                    </FormSection>
                </div>
            </div>
        </div>
    </AppLayout>
</template>
