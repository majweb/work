<script setup>
import {Link, useForm} from '@inertiajs/vue3';
import AppLayout from '@/Layouts/AppLayout.vue';
import InputError from '@/Components/InputError.vue';
import InputLabel from '@/Components/InputLabel.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import TextInput from '@/Components/TextInput.vue';
import FormSection from '@/Components/FormSection.vue';
import 'vue-color/style.css';
import { ChromePicker  } from 'vue-color'
import __ from "@/lang.js";
const form = useForm({
    name: '',
    color: '#00a0e3', // Domyślny kolor zgodny z designem aplikacji
});

const createTag = () => {
    form.post(route('tags.store'), {
        preserveScroll: true,
        onSuccess: () => {
            form.reset();
        },
    });
};
</script>

<template>
    <AppLayout :title="__('translate.createTag')">
        <template #header>
            <div class="flex justify-between">
                <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                    {{ __('translate.createTag') }}
                </h2>
                <Link
                    :href="route('tags.index')"
                    class="inline-flex items-center gap-2 rounded-xl border border-gray-200 bg-white px-4 py-2 text-sm font-semibold text-gray-700 shadow-sm hover:bg-gray-50"
                >
                    <span class="text-lg leading-none">←</span>
                    {{ __('translate.backToList') }}
                </Link>
            </div>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

                <div class="max-w-screen-2xl mx-auto sm:px-6 lg:px-8">
                    <div class="bg-white shadow-xl sm:rounded-lg p-6">
                        <!-- Header -->
                        <div class="mb-6">
                            <h1 class="text-2xl font-semibold text-gray-900">
                                {{ __('translate.createTag') }}
                            </h1>
                            <p class="mt-1 text-sm text-gray-500">
                                {{__('translate.createTagInfo')}}
                            </p>
                        </div>
                        <form @submit.prevent="createTag" class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div>
                                <InputLabel for="name" :value="__('translate.name')" />
                                <TextInput
                                    id="name"
                                    v-model="form.name"
                                    type="text"
                                    class="mt-1 block w-full"
                                    autofocus
                                />
                                <InputError :message="form.errors.name" class="mt-2" />
                                <PrimaryButton class="mt-4" :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
                                    {{ __('translate.create') }}
                                </PrimaryButton>
                            </div>
                            <div>
                                <InputLabel for="color" :value="__('translate.color')" />
                                <div class="mt-1">
                                    <ChromePicker v-model="form.color" formats="hex" />
                                    <p class="mt-1 text-sm text-gray-500">{{ __('translate.colorTag') }}</p>
                                    <p class="text-xs text-gray-400 italic">{{ __('translate.colorTagDesc') }}</p>
                                </div>
                                <InputError :message="form.errors.color" class="mt-2"/>
                            </div>
                        </form>
                    </div>
                    </div>
            </div>
        </div>
    </AppLayout>
</template>
