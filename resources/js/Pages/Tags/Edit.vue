<script setup>
import {Link, useForm} from '@inertiajs/vue3';
import AppLayout from '@/Layouts/AppLayout.vue';
import InputError from '@/Components/InputError.vue';
import InputLabel from '@/Components/InputLabel.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import TextInput from '@/Components/TextInput.vue';
import 'vue-color/style.css';
import { ChromePicker } from 'vue-color';
import __ from "@/lang.js";

const props = defineProps({
    tag: Object,
});

const form = useForm({
    name: props.tag.name,
    color: props.tag.color || '#00a0e3', // domyślny kolor jeśli brak w bazie
});

const updateTag = () => {
    form.put(route('tags.update', props.tag.id), {
        preserveScroll: true,
    });
};

const getContrastColor = (bgColor) => {
    if (!bgColor) return '#000';
    const color = bgColor.replace('#', '');
    const r = parseInt(color.substr(0,2),16);
    const g = parseInt(color.substr(2,2),16);
    const b = parseInt(color.substr(4,2),16);
    return (r*0.299 + g*0.587 + b*0.114) > 186 ? '#000' : '#fff';
};
</script>

<template>
    <AppLayout :title="__('translate.editTag')">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('translate.tags') }}
            </h2>
        </template>

        <div class="py-12 bg-gray-50/50 min-h-screen">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white rounded-[3rem] shadow-xl shadow-blue-900/5 border border-gray-100 p-10">
                    <div class="mb-10">
                        <Link :href="route('tags.index')" class="inline-flex items-center gap-2 rounded-2xl border border-gray-100 bg-white px-6 py-3 text-[10px] font-black uppercase tracking-widest text-[#0A2C5C] shadow-sm hover:bg-gray-50 transition-all hover:-translate-y-0.5 mb-8">
                            <span class="text-lg leading-none">←</span>
                            {{ __('translate.goBack') }}
                        </Link>

                        <div class="flex items-center gap-4 mb-8">
                            <h3 class="text-[10px] font-black text-[#0A2C5C] uppercase tracking-[0.2em]">{{ __('translate.editTag') }}</h3>
                            <div class="h-px flex-1 bg-gray-100"></div>
                        </div>

                        <h2 class="font-black text-3xl text-gray-900 leading-tight">
                            {{ __('translate.editTag') }}
                        </h2>
                        <p class="mt-4 text-gray-400 max-w-2xl text-[10px] font-bold uppercase tracking-widest leading-relaxed">
                            {{ __('translate.createTagInfo') }}
                        </p>
                    </div>

                    <form @submit.prevent="updateTag">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-12">
                            <!-- Lewa kolumna: Nazwa -->
                            <div class="space-y-8">
                                <div class="space-y-2">
                                    <label class="block text-[10px] font-black text-gray-400 mb-2 uppercase tracking-widest">{{ __('translate.name') }}</label>
                                    <TextInput
                                        id="name"
                                        v-model="form.name"
                                        type="text"
                                        class="w-full px-5 py-4 text-xs rounded-2xl border-gray-100 bg-gray-50 focus:bg-white focus:ring-0 focus:border-[#00a0e3] transition-all placeholder-gray-300 font-bold tracking-widest uppercase"
                                        :placeholder="__('translate.enterName')"
                                        autofocus
                                    />
                                    <InputError :message="form.errors.name" class="mt-2" />
                                </div>

                                <div class="flex justify-start">
                                    <button
                                        type="submit"
                                        :class="{ 'opacity-25': form.processing }"
                                        :disabled="form.processing"
                                        class="bg-[#0A2C5C] text-white px-12 py-4 rounded-2xl font-black text-[10px] uppercase tracking-widest hover:bg-blue-800 transition-all active:scale-95 shadow-lg shadow-blue-900/20"
                                    >
                                        {{ __('translate.update') }}
                                    </button>
                                </div>
                            </div>

                            <!-- Prawa kolumna: Kolor -->
                            <div class="space-y-6">
                                <label class="block text-[10px] font-black text-gray-400 mb-2 uppercase tracking-widest">{{ __('translate.color') }}</label>
                                <div class="mt-1">
                                    <div class="mb-6 flex items-center gap-4">
                                        <p class="text-[10px] text-gray-400 font-black uppercase tracking-widest">{{ __('translate.preview') || 'Podgląd' }}:</p>
                                        <span
                                            class="px-4 py-2 rounded-full text-[10px] font-black uppercase tracking-widest shadow-sm border border-black/5"
                                            :style="{ backgroundColor: form.color.hex || form.color, color: getContrastColor(form.color.hex || form.color) }"
                                        >
                                            {{ form.name || (__('translate.tagName') || 'Nazwa tagu') }}
                                        </span>
                                    </div>

                                    <ChromePicker v-model="form.color" formats="hex" class="!shadow-none !border-gray-50 !rounded-2xl overflow-hidden" />
                                    <div class="mt-6 space-y-2">
                                        <p class="text-[10px] text-gray-400 font-black uppercase tracking-widest">{{ __('translate.colorTag') }}</p>
                                        <p class="text-[10px] text-gray-300 font-bold uppercase tracking-widest italic leading-relaxed">{{ __('translate.colorTagDesc') }}</p>
                                    </div>
                                </div>
                                <InputError :message="form.errors.color" class="mt-2" />
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </AppLayout>
</template>
