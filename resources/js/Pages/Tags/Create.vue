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
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('translate.tags') }}
            </h2>
        </template>

        <div class="py-8">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white p-8 sm:p-12 rounded-[2rem] shadow-sm border border-gray-100">
                    <div class="mb-8">
                        <Link :href="route('tags.index')" class="text-red-500 font-bold text-xs uppercase tracking-[0.2em] hover:underline transition-all">
                            {{ __('translate.goBack') }}
                        </Link>

                        <h2 class="font-bold text-3xl text-[#1a335d] leading-tight mt-6">
                            {{ __('translate.createTag') }}
                        </h2>
                        <p class="mt-4 text-gray-500 max-w-2xl text-base font-medium leading-relaxed">
                            {{ __('translate.createTagInfo') }}
                        </p>
                    </div>

                    <form @submit.prevent="createTag">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                            <!-- Lewa kolumna: Nazwa -->
                            <div class="space-y-6">
                                <div class="relative group">
                                    <TextInput
                                        id="name"
                                        v-model="form.name"
                                        type="text"
                                        class="mt-1 block w-full rounded-2xl border-gray-100 py-3 px-6 text-lg font-bold text-[#1a335d] focus:border-[#00b0e8] focus:ring-0 transition-all placeholder:text-gray-200"
                                        :placeholder="__('translate.name')"
                                        autofocus
                                    />
                                    <InputError :message="form.errors.name" class="mt-2" />
                                </div>

                                <div class="flex justify-start mt-8">
                                    <button
                                        type="submit"
                                        :class="{ 'opacity-25': form.processing }"
                                        :disabled="form.processing"
                                        class="bg-[#1a335d] text-white px-12 py-3 rounded-xl font-black text-lg uppercase tracking-[0.2em] hover:bg-[#14284b] transition-all active:scale-95 shadow-lg"
                                    >
                                        {{ __('translate.create') }}
                                    </button>
                                </div>
                            </div>

                            <!-- Prawa kolumna: Kolor -->
                            <div>
                                <InputLabel for="color" :value="__('translate.color')" class="mb-2 text-[#1a335d] font-bold uppercase tracking-widest text-xs" />
                                <div class="mt-1">
                                    <ChromePicker v-model="form.color" formats="hex" class="!shadow-none !border-gray-50 !rounded-2xl overflow-hidden" />
                                    <p class="mt-4 text-sm text-gray-500 font-medium">{{ __('translate.colorTag') }}</p>
                                    <p class="text-xs text-gray-400 italic">{{ __('translate.colorTagDesc') }}</p>
                                </div>
                                <InputError :message="form.errors.color" class="mt-2"/>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </AppLayout>
</template>
