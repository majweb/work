<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import { useForm, Link } from '@inertiajs/vue3';
import { ref } from 'vue';
import InputError from '@/Components/InputError.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import TipTap from '@/Components/TipTap.vue';

const props = defineProps({
    page: Object,
    seoLanguages: Array,
    contentLanguages: Array,
});

const seoLanguages = props.seoLanguages || [];
const contentLanguages = props.contentLanguages || [];

const form = useForm({
    _method: 'PUT',
    title: props.page.title || {},
    description: props.page.description || {},
    keywords: props.page.keywords || {},
    content: props.page.content || {},
    image_file: {},
});

const activeSeoLang = ref('pl');
if (seoLanguages.length > 0 && !seoLanguages.includes('pl')) {
    activeSeoLang.value = seoLanguages[0];
}
const activeContentLang = ref('pl');

const hasSeoError = (lang) => {
    return Object.keys(form.errors).some(key =>
        (key.startsWith('title.' + lang) ||
         key.startsWith('description.' + lang) ||
         key.startsWith('keywords.' + lang) ||
         key.startsWith('image_file.' + lang))
    );
};

const hasContentError = (lang) => {
    return !!form.errors['content.' + lang];
};

const goToNextError = () => {
    // Check SEO errors first
    for (const lang of seoLanguages) {
        if (hasSeoError(lang)) {
            activeSeoLang.value = lang;
            // Scroll to the first SEO field if needed
            return;
        }
    }

    // Then check Content errors
    if (props.page.id == 2 || props.page.id == 3) {
        for (const lang of contentLanguages) {
            if (hasContentError(lang)) {
                activeContentLang.value = lang;
                // Scroll to content section
                const contentSection = document.querySelector('.content-section');
                if (contentSection) {
                    contentSection.scrollIntoView({ behavior: 'smooth' });
                }
                return;
            }
        }
    }
};

const previewUrls = ref({});

const onFileChange = (lang, event) => {
    const file = event.target.files[0];
    if (file) {
        form.image_file[lang] = file;
        previewUrls.value[lang] = URL.createObjectURL(file);
    }
};

const removeFile = (lang) => {
    form.image_file[lang] = null;
    if (previewUrls.value[lang]) {
        URL.revokeObjectURL(previewUrls.value[lang]);
        delete previewUrls.value[lang];
    }
    const input = document.getElementById(`file-input-${lang}`);
    if (input) {
        input.value = '';
    }
};

const submit = () => {
    form.post(route('admin.cms.update', props.page.id), {
        forceFormData: true,
        onError: () => {
            goToNextError();
        }
    });
};
</script>

<template>
    <AppLayout title="Edytuj SEO strony">
        <div class="py-12 bg-gray-50/50 min-h-screen">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <!-- Header Section -->
                <div class="bg-white rounded-[3rem] shadow-xl shadow-blue-900/5 border border-gray-100 p-10 mb-8">
                    <div class="flex flex-col md:flex-row md:items-center justify-between gap-8">
                        <div>
                            <div class="flex items-center gap-4 mb-2">
                                <Link
                                    :href="route('admin.cms.index')"
                                    class="p-3 bg-gray-50 text-gray-400 rounded-2xl hover:bg-[#0A2C5C] hover:text-white transition-all shadow-sm group"
                                >
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="3" stroke="currentColor" class="w-4 h-4 transition-transform group-hover:-translate-x-1">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5 3 12m0 0 7.5-7.5M3 12h18" />
                                    </svg>
                                </Link>
                                <div class="flex flex-col">
                                    <h3 class="text-2xl font-black text-[#0A2C5C] uppercase tracking-tight">
                                        <span v-if="page.name" class="text-blue-600">{{ page.name }}</span>
                                        <span v-else>Edytuj SEO strony</span>
                                    </h3>
                                </div>
                            </div>
                            <p class="text-[10px] font-bold text-gray-400 uppercase tracking-widest mt-1 ml-16">
                                Zarządzanie informacjami meta i tagami dla wybranej strony
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Language Tabs -->
                <div class="flex flex-wrap gap-2 mb-8 ml-4">
                    <button
                        v-for="lang in seoLanguages"
                        :key="lang"
                        type="button"
                        @click="activeSeoLang = lang"
                        class="px-6 py-3 rounded-2xl font-black text-[10px] uppercase tracking-widest transition-all shadow-sm relative"
                        :class="[
                            activeSeoLang === lang ? 'bg-[#0A2C5C] text-white shadow-blue-200' : 'bg-white text-gray-400 hover:bg-gray-50',
                            hasSeoError(lang) ? 'border-2 border-red-500' : ''
                        ]"
                    >
                        {{ lang }}
                        <span v-if="hasSeoError(lang)" class="absolute -top-1 -right-1 flex h-3 w-3">
                            <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-red-400 opacity-75"></span>
                            <span class="relative inline-flex rounded-full h-3 w-3 bg-red-500"></span>
                        </span>
                    </button>
                </div>

                <div class="bg-white rounded-[3rem] shadow-xl shadow-blue-900/5 border border-gray-100 p-10">
                    <form @submit.prevent="submit" class="space-y-8">
                        <div v-for="lang in seoLanguages" :key="lang" v-show="activeSeoLang === lang" class="space-y-8">
                            <!-- Image Upload & URL (SEO & Tło) -->
                            <div v-if="page.id !== 9 && page.id !== 8 && page.id !== 16" class="grid grid-cols-1 lg:grid-cols-3 gap-8 items-start border-b border-gray-50 pb-8">
                                <div>
                                    <label class="text-[10px] font-black text-[#0A2C5C] uppercase tracking-[0.2em] mb-2 block">Obrazek (SEO & Tło) ({{ lang }})</label>
                                    <p class="text-[10px] text-gray-400 font-bold uppercase tracking-widest leading-relaxed">Wgraj plik obrazka.</p>
                                </div>
                                <div class="lg:col-span-2 space-y-4">
                                    <div>
                                        <input
                                            :id="`file-input-${lang}`"
                                            type="file"
                                            @change="onFileChange(lang, $event)"
                                            class="w-full px-6 py-4 bg-gray-50 border-none rounded-2xl focus:ring-2 focus:ring-blue-500/20 focus:bg-white transition-all text-sm font-medium shadow-inner"
                                            accept="image/*"
                                        >
                                        <InputError :message="form.errors['image_file.' + lang]" class="mt-2" />
                                    </div>

                                    <div v-if="previewUrls[lang]" class="mt-4 p-4 bg-blue-50/50 rounded-2xl border border-blue-100 inline-block relative group">
                                        <p class="text-[8px] font-black uppercase tracking-widest text-blue-400 mb-2">Nowy podgląd:</p>
                                        <div class="relative">
                                            <img :src="previewUrls[lang]" class="h-32 rounded-xl shadow-sm border border-white" alt="New preview" />
                                            <button
                                                type="button"
                                                @click="removeFile(lang)"
                                                class="absolute -top-2 -right-2 p-1 bg-red-500 text-white rounded-full shadow-lg hover:bg-red-600 transition-all active:scale-95"
                                                title="Usuń plik"
                                            >
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="3" stroke="currentColor" class="w-3 h-3">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                                                </svg>
                                            </button>
                                        </div>
                                    </div>

                                    <div v-else-if="page.imageUrl[lang]" class="mt-4 p-4 bg-gray-50 rounded-2xl border border-gray-100 inline-block">
                                        <p class="text-[8px] font-black uppercase tracking-widest text-gray-400 mb-2">Aktualny podgląd:</p>
                                        <img :src="page.imageUrl[lang]" class="h-32 rounded-xl shadow-sm border border-white" alt="SEO preview" />
                                    </div>
                                </div>
                            </div>
                            <div v-else-if="page.id === 8" class="grid grid-cols-1 lg:grid-cols-3 gap-8 items-start border-b border-gray-50 pb-8">
                                <div>
                                    <label class="text-[10px] font-black text-[#0A2C5C] uppercase tracking-[0.2em] mb-2 block">Obrazek (SEO & Tło) ({{ lang }})</label>
                                </div>
                                <div class="lg:col-span-2">
                                    <div class="p-4 bg-blue-50 border border-blue-100 rounded-2xl">
                                        <p class="text-sm font-medium text-blue-700">Grafika dla tej strony będzie ładowana z generatora poprzez firmę.</p>
                                    </div>
                                </div>
                            </div>
                            <div v-else-if="page.id === 16" class="grid grid-cols-1 lg:grid-cols-3 gap-8 items-start border-b border-gray-50 pb-8">
                                <div>
                                    <label class="text-[10px] font-black text-[#0A2C5C] uppercase tracking-[0.2em] mb-2 block">Obrazek (SEO & Tło) ({{ lang }})</label>
                                </div>
                                <div class="lg:col-span-2">
                                    <div class="p-4 bg-blue-50 border border-blue-100 rounded-2xl">
                                        <p class="text-sm font-medium text-blue-700">Dane dla tej strony (obrazek) będą pobierane ze strony artykuły.</p>
                                    </div>
                                </div>
                            </div>
                            <div v-else-if="page.id === 9" class="grid grid-cols-1 lg:grid-cols-3 gap-8 items-start border-b border-gray-50 pb-8">
                                <div>
                                    <label class="text-[10px] font-black text-[#0A2C5C] uppercase tracking-[0.2em] mb-2 block">Obrazek (SEO & Tło) ({{ lang }})</label>
                                </div>
                                <div class="lg:col-span-2">
                                    <div class="p-4 bg-blue-50 border border-blue-100 rounded-2xl">
                                        <p class="text-sm font-medium text-blue-700">Grafika dla tej strony jest losowa.</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Title -->
                            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 items-start">
                                <div>
                                    <label class="text-[10px] font-black text-[#0A2C5C] uppercase tracking-[0.2em] mb-2 block">Tytuł strony ({{ lang }})</label>
                                    <p class="text-[10px] text-gray-400 font-bold uppercase tracking-widest leading-relaxed">Pojawia się w pasku przeglądarki i wynikach wyszukiwania.</p>
                                </div>
                                <div class="lg:col-span-2">
                                    <div v-if="page.id === 8" class="p-4 bg-blue-50 border border-blue-100 rounded-2xl">
                                        <p class="text-sm font-medium text-blue-700">Tytuł dla tej strony będzie generowany podczas tworzenia oferty.</p>
                                    </div>
                                    <div v-else-if="page.id === 9" class="p-4 bg-blue-50 border border-blue-100 rounded-2xl">
                                        <p class="text-sm font-medium text-blue-700">Tytuł dla tej strony będzie generowany podczas tworzenia artykułu.</p>
                                    </div>
                                    <div v-else-if="page.id === 16" class="p-4 bg-blue-50 border border-blue-100 rounded-2xl">
                                        <p class="text-sm font-medium text-blue-700">Dane dla tej strony (tytuł) będą pobierane ze strony artykuły.</p>
                                    </div>
                                    <template v-else>
                                        <input
                                            v-model="form.title[lang]"
                                            type="text"
                                            class="w-full px-6 py-4 bg-gray-50 border-none rounded-2xl focus:ring-2 focus:ring-blue-500/20 focus:bg-white transition-all text-sm font-medium shadow-inner"
                                            :placeholder="'Wprowadź tytuł strony w języku ' + lang"
                                        >
                                        <InputError :message="form.errors['title.' + lang]" class="mt-2" />
                                    </template>
                                </div>
                            </div>

                            <!-- Description -->
                            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 items-start border-t border-gray-50 pt-8">
                                <div>
                                    <label class="text-[10px] font-black text-[#0A2C5C] uppercase tracking-[0.2em] mb-2 block">Opis (Meta Description) ({{ lang }})</label>
                                    <p class="text-[10px] text-gray-400 font-bold uppercase tracking-widest leading-relaxed">Krótki opis strony widoczny w wyszukiwarkach i przy udostępnianiu.</p>
                                </div>
                                <div class="lg:col-span-2">
                                    <div v-if="page.id === 9" class="p-4 bg-blue-50 border border-blue-100 rounded-2xl">
                                        <p class="text-sm font-medium text-blue-700">Opis dla tej strony będzie generowany podczas tworzenia artykułu.</p>
                                    </div>
                                    <div v-else-if="page.id === 16" class="p-4 bg-blue-50 border border-blue-100 rounded-2xl">
                                        <p class="text-sm font-medium text-blue-700">Dane dla tej strony (opis) będą pobierane ze strony artykuły.</p>
                                    </div>
                                    <template v-else>
                                        <textarea
                                            v-model="form.description[lang]"
                                            rows="4"
                                            class="w-full px-6 py-4 bg-gray-50 border-none rounded-2xl focus:ring-2 focus:ring-blue-500/20 focus:bg-white transition-all text-sm font-medium shadow-inner resize-none"
                                            :placeholder="'Wprowadź opis strony w języku ' + lang"
                                        ></textarea>
                                        <InputError :message="form.errors['description.' + lang]" class="mt-2" />
                                    </template>
                                </div>
                            </div>

                            <!-- Keywords -->
                            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 items-start border-t border-gray-50 pt-8">
                                <div>
                                    <label class="text-[10px] font-black text-[#0A2C5C] uppercase tracking-[0.2em] mb-2 block">Słowa kluczowe ({{ lang }})</label>
                                    <p class="text-[10px] text-gray-400 font-bold uppercase tracking-widest leading-relaxed">Słowa kluczowe oddzielone przecinkami.</p>
                                </div>
                                <div class="lg:col-span-2">
                                    <div v-if="page.id === 9" class="p-4 bg-blue-50 border border-blue-100 rounded-2xl">
                                        <p class="text-sm font-medium text-blue-700">Słowa kluczowe dla tej strony będą generowane podczas tworzenia artykułu.</p>
                                    </div>
                                    <div v-else-if="page.id === 16" class="p-4 bg-blue-50 border border-blue-100 rounded-2xl">
                                        <p class="text-sm font-medium text-blue-700">Dane dla tej strony (słowa kluczowe) będą pobierane ze strony artykuły.</p>
                                    </div>
                                    <template v-else>
                                        <input
                                            v-model="form.keywords[lang]"
                                            type="text"
                                            class="w-full px-6 py-4 bg-gray-50 border-none rounded-2xl focus:ring-2 focus:ring-blue-500/20 focus:bg-white transition-all text-sm font-medium shadow-inner"
                                            :placeholder="'Słowa kluczowe (np. praca, rekrutacja) - ' + lang"
                                        >
                                        <InputError :message="form.errors['keywords.' + lang]" class="mt-2" />
                                    </template>
                                </div>
                            </div>
                        </div>

                        <!-- SEKCJA CONTENT (Tylko dla Regulaminu i Polityki) -->
                        <div v-if="page.id == 2 || page.id == 3" class="mt-16 pt-16 border-t border-gray-100 content-section">
                            <h4 class="text-xl font-black text-[#0A2C5C] uppercase tracking-tight mb-6">Treść strony (langsShorts)</h4>

                            <InputError :message="form.errors.content" class="mb-4" />

                            <!-- Przyciski języków dla pola Treść -->
                            <div class="flex flex-wrap gap-2 mb-8">
                                <button
                                    v-for="lang in contentLanguages"
                                    :key="lang"
                                    type="button"
                                    @click="activeContentLang = lang"
                                    class="px-4 py-2 rounded-xl font-bold text-[10px] uppercase transition-all shadow-sm relative"
                                    :class="[
                                        activeContentLang === lang ? 'bg-blue-500 text-white shadow-blue-200' : 'bg-gray-100 text-gray-400 hover:bg-gray-200',
                                        hasContentError(lang) ? 'border-2 border-red-500' : ''
                                    ]"
                                >
                                    {{ lang }}
                                    <span v-if="hasContentError(lang)" class="absolute -top-1 -right-1 flex h-3 w-3">
                                        <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-red-400 opacity-75"></span>
                                        <span class="relative inline-flex rounded-full h-3 w-3 bg-red-500"></span>
                                    </span>
                                </button>
                            </div>

                            <!-- Edytor TipTap dla aktywnego języka treści -->
                            <div v-for="lang in contentLanguages" :key="lang" v-show="activeContentLang === lang">
                                <label class="text-[10px] font-black text-[#0A2C5C] uppercase tracking-widest mb-4 block">
                                    Treść strony ({{ lang }})
                                </label>
                                <TipTap v-model="form.content[lang]" />
                                <InputError :message="form.errors['content.' + lang]" class="mt-2" />
                            </div>
                        </div>

                        <!-- Footer -->
                        <div class="flex items-center justify-end gap-4 pt-10 border-t border-gray-50">
                            <button
                                v-if="Object.keys(form.errors).length > 0"
                                type="button"
                                @click="goToNextError"
                                class="mr-auto px-6 py-4 bg-red-50 text-red-500 hover:bg-red-100 rounded-2xl font-black text-[10px] uppercase tracking-widest transition-all flex items-center gap-2 shadow-sm border border-red-100"
                            >
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="3" stroke="currentColor" class="w-4 h-4">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m9-.75a9 9 0 1 1-18 0 9 9 0 0 1 18 0Zm-9 3.75h.008v.008H12v-.008Z" />
                                </svg>
                                Napraw błędy
                            </button>
                            <Link
                                :href="route('admin.cms.index')"
                                class="px-8 py-4 bg-gray-50 text-gray-400 hover:text-gray-600 rounded-2xl font-black text-[10px] uppercase tracking-widest transition-all"
                            >
                                Anuluj
                            </Link>
                            <PrimaryButton
                                class="!px-12 !py-5 !bg-[#00AEEF] hover:!bg-[#0096ce] !rounded-2xl !font-black !text-[10px] !uppercase !tracking-[0.2em] !transition-all !shadow-lg !shadow-blue-200 active:!scale-95"
                                :class="{ 'opacity-25': form.processing }"
                                :disabled="form.processing"
                            >
                                Zapisz zmiany
                            </PrimaryButton>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </AppLayout>
</template>
