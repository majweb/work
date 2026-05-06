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

    <div class="py-8 bg-gray-50/50 min-h-screen">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white rounded-[3rem] shadow-xl shadow-blue-900/5 border border-gray-100 p-10">
                <div class="flex items-center gap-4 mb-10">
                    <h3 class="text-[10px] font-black text-[#0A2C5C] uppercase tracking-[0.2em]">{{ __('translate.editRecruit') }}</h3>
                    <div class="h-px flex-1 bg-gray-100"></div>
                    <Link :href="route('recruits.index')" class="inline-flex items-center gap-2 rounded-2xl border border-gray-100 bg-white px-6 py-3 text-[10px] font-black uppercase tracking-widest text-[#0A2C5C] shadow-sm hover:bg-gray-50 transition-all hover:-translate-y-0.5">
                        <span class="text-lg leading-none">←</span>
                        {{ __('translate.goBack') }}
                    </Link>
                </div>

                <div class="flex gap-6 mb-10">
                    <button type="button" @click="activeTab = 'basic'" :class="[activeTab==='basic' ? 'bg-[#0A2C5C] text-white shadow-lg shadow-blue-900/20' : 'bg-white text-gray-500 border border-gray-100 hover:bg-gray-50']" class="px-8 py-3 text-[10px] font-black uppercase tracking-widest rounded-2xl transition-all">
                        {{ __('translate.mainData') }}
                    </button>
                    <button type="button" @click="activeTab = 'personal'" :class="[activeTab==='personal' ? 'bg-[#0A2C5C] text-white shadow-lg shadow-blue-900/20' : 'bg-white text-gray-500 border border-gray-100 hover:bg-gray-50']" class="px-8 py-3 text-[10px] font-black uppercase tracking-widest rounded-2xl transition-all">
                        {{ __('translate.personalization') }}
                    </button>
                </div>

                <form @submit.prevent="updateUser">
                    <div class="grid grid-cols-1 lg:grid-cols-3 gap-12 items-start">
                        <!-- Avatar Section -->
                        <div class="flex flex-col items-center bg-gray-50/50 rounded-[2.5rem] p-8 border border-gray-100/50">
                            <input
                                id="photo"
                                ref="photoInput"
                                type="file"
                                class="hidden"
                                @change="updatePhotoPreview"
                            >

                            <div class="relative w-40 h-40">
                                <!-- Current Profile Photo -->
                                <div v-show="! photoPreview" class="w-full h-full rounded-[2.5rem] border-4 bg-white flex items-center justify-center overflow-hidden shadow-md transition-all" :style="{ borderColor: form.color || '#0A2C5C' }">
                                    <img :src="recruit.profile_photo_url" :alt="recruit.name" class="w-full h-full object-cover">
                                </div>

                                <!-- New Profile Photo Preview -->
                                <div v-show="photoPreview" class="w-full h-full rounded-[2.5rem] border-4 bg-white flex items-center justify-center overflow-hidden shadow-md transition-all" :style="{ borderColor: form.color || '#0A2C5C' }">
                                    <span
                                        class="block w-full h-full bg-cover bg-no-repeat bg-center"
                                        :style="'background-image: url(\'' + photoPreview + '\');'"
                                    />
                                </div>

                                <button
                                    type="button"
                                    class="absolute -bottom-2 left-1/2 -translate-x-1/2 bg-[#0A2C5C] text-white text-[10px] font-black px-6 py-2 rounded-xl hover:bg-[#00a0e3] transition uppercase tracking-widest z-10 shadow-lg"
                                    @click.prevent="selectNewPhoto"
                                >
                                    {{ __('translate.ProfileInformationPhoto') }}
                                </button>
                            </div>

                            <div class="flex flex-wrap justify-center gap-2 mt-8">
                                <button
                                    v-if="recruit.profile_photo_path"
                                    type="button"
                                    @click.prevent="deletePhoto"
                                    class="bg-red-50 text-red-600 px-6 py-2 rounded-xl font-black text-[10px] uppercase tracking-widest hover:bg-red-100 transition"
                                >
                                    {{ __('translate.ProfileInformationPhotoRemove') }}
                                </button>
                            </div>

                            <InputError :message="form.errors.photo" class="mt-4" />
                        </div>

                        <!-- Form Fields -->
                        <div class="lg:col-span-2">
                            <!-- Dane podstawowe -->
                            <div v-if="activeTab === 'basic'" class="space-y-6">
                                <div class="space-y-2">
                                    <label class="block text-[10px] font-black text-gray-400 uppercase tracking-widest">{{ __('translate.name') }}</label>
                                    <TextInput id="name" v-model="form.name" autocomplete="name" class="w-full px-5 py-4 text-xs rounded-2xl border-gray-100 bg-gray-50 focus:bg-white focus:ring-0 focus:border-[#00a0e3] transition-all font-bold tracking-widest uppercase" type="text" />
                                    <InputError :message="form.errors.name" class="mt-2"/>
                                </div>

                                <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                                    <div class="space-y-2">
                                        <label class="block text-[10px] font-black text-gray-400 uppercase tracking-widest">{{ __('translate.email') }}</label>
                                        <TextInput id="email" v-model="form.email" class="w-full px-5 py-4 text-xs rounded-2xl border-gray-100 bg-gray-50 focus:bg-white focus:ring-0 focus:border-[#00a0e3] transition-all font-bold tracking-widest uppercase" type="email" />
                                        <InputError :message="form.errors.email" class="mt-2"/>
                                    </div>
                                    <div class="space-y-2">
                                        <label class="block text-[10px] font-black text-gray-400 uppercase tracking-widest">{{ __('translate.phone') }}</label>
                                        <TextInput id="recruiter_phone" v-model="form.recruiter_phone" class="w-full px-5 py-4 text-xs rounded-2xl border-gray-100 bg-gray-50 focus:bg-white focus:ring-0 focus:border-[#00a0e3] transition-all font-bold tracking-widest uppercase" type="number" />
                                        <InputError :message="form.errors.recruiter_phone" class="mt-2"/>
                                    </div>
                                </div>

                                <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                                    <div class="space-y-2">
                                        <label class="block text-[10px] font-black text-gray-400 uppercase tracking-widest">{{ __('translate.password') }}</label>
                                        <TextInput id="password" v-model="form.password" class="w-full px-5 py-4 text-xs rounded-2xl border-gray-100 bg-gray-50 focus:bg-white focus:ring-0 focus:border-[#00a0e3] transition-all font-bold tracking-widest uppercase" type="password" />
                                        <InputError :message="form.errors.password" class="mt-2"/>
                                    </div>
                                    <div class="space-y-2">
                                        <label class="block text-[10px] font-black text-gray-400 uppercase tracking-widest">{{ __('translate.passwordconfirm') }}</label>
                                        <TextInput id="password_confirmation" v-model="form.password_confirmation" class="w-full px-5 py-4 text-xs rounded-2xl border-gray-100 bg-gray-50 focus:bg-white focus:ring-0 focus:border-[#00a0e3] transition-all font-bold tracking-widest uppercase" type="password" />
                                        <InputError :message="form.errors.password_confirmation" class="mt-2"/>
                                    </div>
                                </div>

                                <div class="flex items-center pt-4">
                                    <input
                                        class="w-5 h-5 rounded-lg border-gray-200 text-[#0A2C5C] focus:ring-0 transition-all cursor-pointer"
                                        type="checkbox" id="blocked" v-model="form.user_blocked"
                                        name="user_blocked">
                                    <label for="blocked" class="ml-3 text-[10px] font-black text-gray-400 uppercase tracking-widest cursor-pointer">{{__('translate.user_blocked')}}</label>
                                    <InputError :message="form.errors.user_blocked" class="ml-4"/>
                                </div>
                            </div>

                            <!-- Personalizacja -->
                            <div v-else class="space-y-6">
                                <div>
                                    <p class="text-[10px] font-black text-gray-400 uppercase tracking-widest mb-4">{{ __('translate.personalizationInfo') }}</p>
                                    <ChromePicker v-model="form.color" formats="hex" class="!shadow-none !border-gray-50 !rounded-2xl overflow-hidden" />
                                    <div class="mt-6 space-y-2">
                                        <p class="text-[10px] text-gray-400 font-black uppercase tracking-widest">{{ __('translate.colorHelper') }}</p>
                                        <p class="text-[10px] text-gray-300 font-bold uppercase tracking-widest italic leading-relaxed">{{ __('translate.colorOptional') }}</p>
                                    </div>
                                    <InputError :message="form.errors.color" class="mt-2"/>
                                </div>
                            </div>

                            <!-- Actions -->
                            <div class="mt-10 flex items-center justify-end gap-4">
                                <ActionMessage :on="form.recentlySuccessful" class="text-green-600 font-black text-[10px] uppercase tracking-widest">
                                    {{__('translate.updateRecruit')}}
                                </ActionMessage>
                                <button
                                    type="submit"
                                    :disabled="form.processing"
                                    class="bg-[#0A2C5C] text-white px-12 py-4 rounded-2xl font-black text-[10px] uppercase tracking-widest hover:bg-[#00a0e3] transition shadow-lg shadow-blue-900/20 disabled:opacity-50"
                                >
                                    <spinner-action :process="form.processing">{{__('translate.update')}}</spinner-action>
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    </AppLayout>
</template>
