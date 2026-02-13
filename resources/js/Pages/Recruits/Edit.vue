<script setup>

import {useForm, Link, router} from '@inertiajs/vue3';

import ActionMessage from '@/Components/ActionMessage.vue';
import FormSection from '@/Components/FormSection.vue';
import InputError from '@/Components/InputError.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import SecondaryButton from '@/Components/SecondaryButton.vue';
import TextInput from '@/Components/TextInput.vue';
import AppLayout from '@/Layouts/AppLayout.vue';
import SpinnerAction from "@/Components/SpinnerAction.vue";
import InputLabel from "@/Components/InputLabel.vue";
import 'vue-color/style.css';
import { ChromePicker  } from 'vue-color'
import { ref } from 'vue';

const props = defineProps({
    recruit: Object,
});

// Zakładki
const activeTab = ref('basic')

const form = useForm({
    _method: 'PUT',
    id: props.recruit.id,
    name: props.recruit.name,
    email: props.recruit.email,
    user_blocked: props.recruit.user_blocked,
    password: '',
    password_confirmation: '',
    recruiter_phone: props.recruit.recruiter_phone ?? null,
    color: props.recruit.color || '#00a0e3',
    photo: null,
});

const photoPreview = ref(null);
const photoInput = ref(null);

const updateUser = () => {
    if (photoInput.value) {
        form.photo = photoInput.value.files[0];
    }

    form.post(route('recruits.update', props.recruit.id), {
        errorBag: 'updateUser',
        preserveScroll: true,
        onSuccess: () => {
            photoPreview.value = null;
            clearPhotoFileInput();
        },
    });
};

const selectNewPhoto = () => {
    photoInput.value.click();
};

const updatePhotoPreview = () => {
    const photo = photoInput.value.files[0];

    if (! photo) return;

    const reader = new FileReader();

    reader.onload = (e) => {
        photoPreview.value = e.target.result;
    };

    reader.readAsDataURL(photo);
};

const deletePhoto = () => {
    router.delete(route('recruits.photo.destroy', props.recruit.id), {
        preserveScroll: true,
        onSuccess: () => {
            photoPreview.value = null;
            clearPhotoFileInput();
        },
    });
};

const clearPhotoFileInput = () => {
    if (photoInput.value?.value) {
        photoInput.value.value = null;
    }
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

        <div class="py-8">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white rounded-[2rem] shadow-sm p-6">
                    <div class="flex gap-6 px-4 mb-6">
                        <button type="button" @click="activeTab = 'basic'" :class="[activeTab==='basic' ? 'text-[#0b2a55] font-black border-b-2 border-[#0b2a55]' : 'text-gray-500 font-semibold']" class="pb-2 transition-all duration-200">
                            {{ __('translate.mainData') }}
                        </button>
                        <button type="button" @click="activeTab = 'personal'" :class="[activeTab==='personal' ? 'text-[#0b2a55] font-black border-b-2 border-[#0b2a55]' : 'text-gray-500 font-semibold']" class="pb-2 transition-all duration-200">
                            Personalizacja
                        </button>
                    </div>

                    <form @submit.prevent="updateUser">
                        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 items-start">
                            <!-- Avatar Section -->
                            <div class="flex flex-col items-center">
                                <input
                                    id="photo"
                                    ref="photoInput"
                                    type="file"
                                    class="hidden"
                                    @change="updatePhotoPreview"
                                >

                                <div class="relative w-40 h-40">
                                    <!-- Current Profile Photo -->
                                    <div v-show="! photoPreview" class="w-full h-full rounded-full border-4 bg-gray-100 flex items-center justify-center overflow-hidden" :style="{ borderColor: form.color || '#0b2a55' }">
                                        <img :src="recruit.profile_photo_url" :alt="recruit.name" class="w-full h-full object-cover">
                                    </div>

                                    <!-- New Profile Photo Preview -->
                                    <div v-show="photoPreview" class="w-full h-full rounded-full border-4 bg-gray-100 flex items-center justify-center overflow-hidden" :style="{ borderColor: form.color || '#0b2a55' }">
                                        <span
                                            class="block rounded-full w-full h-full bg-cover bg-no-repeat bg-center"
                                            :style="'background-image: url(\'' + photoPreview + '\');'"
                                        />
                                    </div>

                                    <button
                                        type="button"
                                        class="absolute -bottom-2 left-1/2 -translate-x-1/2 bg-[#0b2a55] text-white text-[10px] font-bold px-3 py-1 rounded-md hover:bg-[#162a44] transition whitespace-nowrap z-10 shadow-md"
                                        @click.prevent="selectNewPhoto"
                                    >
                                        {{ __('translate.ProfileInformationPhoto') }}
                                    </button>
                                </div>

                                <div class="flex flex-wrap justify-center gap-2 mt-4">
                                    <SecondaryButton
                                        v-if="recruit.profile_photo_path"
                                        type="button"
                                        @click.prevent="deletePhoto"
                                    >
                                        {{ __('translate.ProfileInformationPhotoRemove') }}
                                    </SecondaryButton>
                                </div>

                                <InputError :message="form.errors.photo" class="mt-2" />
                            </div>

                            <!-- Form Fields -->
                            <div class="lg:col-span-2">
                                <!-- Dane podstawowe -->
                                <div v-if="activeTab === 'basic'" class="space-y-4">
                                    <div>
                                        <InputLabel for="name" :value="__('translate.name')"/>
                                        <TextInput id="name" v-model="form.name" autocomplete="name" class="mt-1 block w-full" type="text" />
                                        <InputError :message="form.errors.name" class="mt-2"/>
                                    </div>

                                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                                        <div>
                                            <InputLabel for="email" :value="__('translate.email')"/>
                                            <TextInput id="email" v-model="form.email" class="mt-1 block w-full" type="email" />
                                            <InputError :message="form.errors.email" class="mt-2"/>
                                        </div>
                                        <div>
                                            <InputLabel for="recruiter_phone" :value="__('translate.phone')"/>
                                            <TextInput id="recruiter_phone" v-model="form.recruiter_phone" class="mt-1 block w-full" type="number" />
                                            <InputError :message="form.errors.recruiter_phone" class="mt-2"/>
                                        </div>
                                    </div>

                                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                                        <div>
                                            <InputLabel for="password" :value="__('translate.password')"/>
                                            <TextInput id="password" v-model="form.password" class="mt-1 block w-full" type="password" />
                                            <InputError :message="form.errors.password" class="mt-2"/>
                                        </div>
                                        <div>
                                            <InputLabel for="password_confirmation" :value="__('translate.passwordconfirm')"/>
                                            <TextInput id="password_confirmation" v-model="form.password_confirmation" class="mt-1 block w-full" type="password" />
                                            <InputError :message="form.errors.password_confirmation" class="mt-2"/>
                                        </div>
                                    </div>

                                    <div class="flex items-center mt-4">
                                        <input
                                            class="rounded border-gray-300 text-[#0b2a55] shadow-sm focus:ring-[#0b2a55] mr-2"
                                            type="checkbox" id="blocked" v-model="form.user_blocked"
                                            name="user_blocked">
                                        <label for="blocked" class="text-sm font-semibold text-gray-700">{{__('translate.user_blocked')}}</label>
                                        <InputError :message="form.errors.user_blocked" class="mt-2"/>
                                    </div>
                                </div>

                                <!-- Personalizacja -->
                                <div v-else class="space-y-4">
                                    <div>
                                        <InputLabel for="color" :value="__('translate.color')" />
                                        <div class="mt-2">
                                            <ChromePicker v-model="form.color" formats="hex" />
                                            <p class="mt-2 text-sm text-gray-500">{{ __('translate.colorHelper') }}</p>
                                            <p class="text-xs text-gray-400 italic">{{ __('translate.colorOptional') }}</p>
                                        </div>
                                        <InputError :message="form.errors.color" class="mt-2"/>
                                    </div>
                                </div>

                                <!-- Actions -->
                                <div class="mt-8 flex items-center justify-end gap-3">
                                    <ActionMessage :on="form.recentlySuccessful" class="text-green-600 font-bold">
                                        {{__('translate.updateRecruit')}}
                                    </ActionMessage>
                                    <PrimaryButton :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
                                        <spinner-action :process="form.processing">{{__('translate.update')}}</spinner-action>
                                    </PrimaryButton>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </AppLayout>
</template>
