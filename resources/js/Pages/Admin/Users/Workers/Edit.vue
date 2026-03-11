<script setup>
import AppLayout from "@/Layouts/AppLayout.vue";
import {Link, router, useForm, usePage} from "@inertiajs/vue3";
import __ from '@/lang.js';
import {ref, onMounted, computed, watch} from 'vue';
import axios from 'axios';
import moment from "moment/moment.js";
import TextInput from "@/Components/TextInput.vue";

const props = defineProps({
    user: Object,
    candidate: Object,
    categories: Array,
    customTags: Array,
    selectedCandidateTags: Array,
    candidateQuestions: Array,
});

const form = useForm({
    name: props.user.name,
    surname: props.user.worker_detail?.surname || '',
    email: props.user.email,
    contact_phone: props.user.worker_detail?.contact_phone || '',
});

const submit = () => {
    form.put(route('admin.workers.update', props.user.id));
};

const locale = computed(() => usePage().props.language);

// Dane kandydata
const professionCategories = ref(props.categories || []);
const customTags = ref(props.customTags || []);
const selectedTags = ref([]);
const currentCategoryPage = ref(1);
const categoriesPerPage = 60;
const tagColors = {};
const categorySearchQuery = ref('');
const customTagSearchQuery = ref('');
const isSavingTags = ref(false);

const getLocalizedTitle = (title) => {
    if (!title) return '';
    return title[locale.value] || title['pl'] || (Object.values(title).length > 0 ? Object.values(title)[0] : '');
};

const getTagColor = (id) => {
    if (!tagColors[id]) {
        const hue = (id * 137.5) % 360;
        const saturation = 60 + (id % 20);
        const lightness = 75 + (id % 15);
        tagColors[id] = `hsl(${hue}, ${saturation}%, ${lightness}%)`;
    }
    return tagColors[id];
};

const getContrastColor = (backgroundColor) => {
    const rgb = hexToRgb(backgroundColor) || {r: 200, g: 200, b: 200};
    const brightness = (rgb.r * 299 + rgb.g * 587 + rgb.b * 114) / 1000;
    return brightness > 128 ? '#000000' : '#FFFFFF';
};

const getContrastColorText = (bgColor) => {
    if (!bgColor) return '#000';
    const color = bgColor.replace('#', '');
    const r = parseInt(color.substr(0,2),16);
    const g = parseInt(color.substr(2,2),16);
    const b = parseInt(color.substr(4,2),16);
    return (r*0.299 + g*0.587 + b*0.114) > 186 ? '#000' : '#fff';
};

const hexToRgb = (hex) => {
    if (hex.startsWith('hsl')) return {r: 200, g: 200, b: 200};
    const shorthandRegex = /^#?([a-f\d])([a-f\d])([a-f\d])$/i;
    hex = hex.replace(shorthandRegex, (m, r, g, b) => r + r + g + g + b + b);
    const result = /^#?([a-f\d]{2})([a-f\d]{2})([a-f\d]{2})$/i.exec(hex);
    return result ? {
        r: parseInt(result[1], 16),
        g: parseInt(result[2], 16),
        b: parseInt(result[3], 16)
    } : null;
};

const toggleCategoryTag = (category) => {
    const index = selectedTags.value.findIndex(tag =>
        tag.id === category.id && tag.type === 'category'
    );
    if (index === -1) {
        selectedTags.value.push({
            id: category.id,
            title: getLocalizedTitle(category.title),
            rawTitle: category.title,
            type: 'category'
        });
    } else {
        selectedTags.value.splice(index, 1);
    }
};

const toggleCustomTag = (tag) => {
    const index = selectedTags.value.findIndex(t =>
        t.id === tag.id && t.type === 'custom'
    );
    if (index === -1) {
        selectedTags.value.push({
            id: tag.id,
            name: tag.name,
            type: 'custom'
        });
    } else {
        selectedTags.value.splice(index, 1);
    }
};

const removeTag = (tag) => {
    const index = selectedTags.value.findIndex(t =>
        t.id === tag.id && t.type === tag.type
    );
    if (index !== -1) {
        selectedTags.value.splice(index, 1);
    }
};

const tagsForm = useForm({
    tags: []
});

const saveTags = () => {
    if (isSavingTags.value || !props.candidate) return;
    isSavingTags.value = true;
    tagsForm.tags = selectedTags.value.map(tag => ({
        id: tag.id,
        type: tag.type
    }));
    tagsForm.post(route('candidates.saveTags', props.candidate.id), {
        preserveScroll: true,
        onFinish: () => {
            isSavingTags.value = false;
        }
    });
};

const filteredCategories = computed(() => {
    const l = locale.value || 'pl';
    return professionCategories.value.filter(category => {
        if (!category || !category.title) return false;
        const hasValidTitle = category.title[l] && category.title[l].trim() !== '';
        if (categorySearchQuery.value.trim() !== '') {
            const searchTerm = categorySearchQuery.value.toLowerCase();
            const localizedTitle = (category.title[l] || '').toLowerCase();
            return hasValidTitle && localizedTitle.includes(searchTerm);
        }
        return hasValidTitle;
    });
});

const totalCategoryPages = computed(() => Math.ceil(filteredCategories.value.length / categoriesPerPage));

const paginatedCategories = computed(() => {
    const startIndex = (currentCategoryPage.value - 1) * categoriesPerPage;
    return filteredCategories.value.slice(startIndex, startIndex + categoriesPerPage);
});

const filteredCustomTags = computed(() => {
    const tags = Array.isArray(customTags.value) ? customTags.value : [];
    if (customTagSearchQuery.value.trim() === '') return tags;
    const searchTerm = customTagSearchQuery.value.toLowerCase();
    return tags.filter(tag => tag.name.toLowerCase().includes(searchTerm));
});

const answersForm = useForm({
    answers: props.candidateQuestions ? props.candidateQuestions.map(question => {
        const existingAnswer = question.candidate_answers?.find(
            answer => answer.candidate_question_id === question.id && answer.candidate_id === props.candidate?.id
        );
        return {
            question_id: question.id,
            text_answer: existingAnswer?.text_answer || '',
            boolean_answer: existingAnswer?.boolean_answer === null ? null : (existingAnswer?.boolean_answer === 1 || existingAnswer?.boolean_answer === true),
        };
    }) : []
});

const initAnswersForm = () => {
    // Funkcja pozostawiona dla kompatybilności, ale inicjalizacja odbywa się teraz wyżej
};

const saveAnswers = () => {
    if (!props.candidate) return;
    answersForm.post(route('candidate.save-answers', props.candidate.id), {
        preserveScroll: true,
    });
};

watch(categorySearchQuery, () => {
    currentCategoryPage.value = 1;
});

onMounted(async () => {
    if (props.candidate) {
        try {
            const response = await axios.get(route('candidates.getTags', props.candidate.id));
            selectedTags.value = response.data.map(tag => {
                if (tag.type === 'category' && tag.rawTitle) {
                    return {
                        ...tag,
                        title: getLocalizedTitle(tag.rawTitle)
                    };
                }
                return tag;
            });
        } catch (error) {
            console.error('Błąd podczas pobierania tagów kandydata:', error);
        }
    }
});
</script>

<template>
    <AppLayout :title="'Edycja pracownika: ' + user.name">
        <div class="py-12 bg-gray-50/50 min-h-screen">
            <div class="max-w-[1600px] mx-auto px-4 sm:px-6 lg:px-8">
                <!-- Header -->
                <div class="flex items-center justify-between mb-12 border-b border-gray-100 pb-8">
                    <div class="flex items-center gap-8">
                        <Link
                            :href="route('admin.workers.index')"
                            class="w-14 h-14 bg-white rounded-3xl flex items-center justify-center shadow-xl shadow-blue-900/5 border border-gray-100 text-[#0A2C5C] hover:bg-gray-50 transition-all active:scale-95 group"
                        >
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor" class="w-6 h-6 group-hover:-translate-x-1 transition-transform">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5 3 12m0 0 7.5-7.5M3 12h18" />
                            </svg>
                        </Link>
                        <div>
                            <div class="flex items-center gap-3 mb-1">
                                <span class="px-3 py-1 bg-blue-50 text-blue-500 rounded-lg text-[10px] font-black uppercase tracking-widest">Zarządzanie kontem pracownika</span>
                            </div>
                            <h1 class="text-4xl font-black text-[#0A2C5C] tracking-tight">{{ user.name }}</h1>
                        </div>
                    </div>
                </div>

                <!-- Main Grid Layout -->
                <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-start">
                    <!-- Left Column: Basic Info & Questions -->
                    <div class="lg:col-span-5 space-y-12">
                        <form @submit.prevent="submit" class="space-y-8">
                            <!-- Basic Info Card -->
                            <div class="bg-white rounded-3xl shadow-xl shadow-blue-900/5 border border-gray-100 p-8 transition-all hover:shadow-blue-900/10">
                                <div class="flex items-center gap-4 mb-8 border-b border-gray-50 pb-6">
                                    <div class="w-10 h-10 bg-blue-50 rounded-xl flex items-center justify-center text-blue-500 shadow-sm border border-blue-100">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-4 h-4">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" />
                                        </svg>
                                    </div>
                                    <div>
                                        <h2 class="text-lg font-black text-[#0A2C5C] uppercase tracking-tight">Dane podstawowe</h2>
                                        <p class="text-[9px] font-bold text-gray-400 uppercase tracking-widest mt-0.5">Informacje o koncie</p>
                                    </div>
                                </div>

                                <div class="space-y-6">
                                    <!-- Name & Surname -->
                                    <div class="grid grid-cols-1 gap-6">
                                        <div class="space-y-2">
                                            <label class="block text-[10px] font-black text-[#0A2C5C] uppercase tracking-widest ml-1">Imię</label>
                                            <input
                                                v-model="form.name"
                                                type="text"
                                                class="w-full px-5 py-3.5 bg-gray-50/50 border border-gray-100 rounded-xl focus:ring-4 focus:ring-blue-500/10 focus:border-blue-500 focus:bg-white transition-all font-bold text-[#0A2C5C] text-sm"
                                                placeholder="Imię..."
                                            />
                                            <div v-if="form.errors.name" class="text-red-500 text-[10px] font-black uppercase tracking-widest mt-1 ml-1 animate-pulse">{{ form.errors.name }}</div>
                                        </div>

                                        <div class="space-y-2">
                                            <label class="block text-[10px] font-black text-[#0A2C5C] uppercase tracking-widest ml-1">Nazwisko</label>
                                            <input
                                                v-model="form.surname"
                                                type="text"
                                                class="w-full px-5 py-3.5 bg-gray-50/50 border border-gray-100 rounded-xl focus:ring-4 focus:ring-blue-500/10 focus:border-blue-500 focus:bg-white transition-all font-bold text-[#0A2C5C] text-sm"
                                                placeholder="Nazwisko..."
                                            />
                                            <div v-if="form.errors.surname" class="text-red-500 text-[10px] font-black uppercase tracking-widest mt-1 ml-1 animate-pulse">{{ form.errors.surname }}</div>
                                        </div>
                                    </div>

                                    <!-- Email & Phone -->
                                    <div class="grid grid-cols-1 gap-6">
                                        <div class="space-y-2">
                                            <label class="block text-[10px] font-black text-[#0A2C5C] uppercase tracking-widest ml-1">Email</label>
                                            <input
                                                v-model="form.email"
                                                type="email"
                                                class="w-full px-5 py-3.5 bg-gray-50/50 border border-gray-100 rounded-xl focus:ring-4 focus:ring-blue-500/10 focus:border-blue-500 focus:bg-white transition-all font-bold text-[#0A2C5C] text-sm"
                                                placeholder="Email..."
                                            />
                                            <div v-if="form.errors.email" class="text-red-500 text-[10px] font-black uppercase tracking-widest mt-1 ml-1 animate-pulse">{{ form.errors.email }}</div>
                                        </div>

                                        <div class="space-y-2">
                                            <label class="block text-[10px] font-black text-[#0A2C5C] uppercase tracking-widest ml-1">Telefon</label>
                                            <input
                                                v-model="form.contact_phone"
                                                type="text"
                                                class="w-full px-5 py-3.5 bg-gray-50/50 border border-gray-100 rounded-xl focus:ring-4 focus:ring-blue-500/10 focus:border-blue-500 focus:bg-white transition-all font-bold text-[#0A2C5C] text-sm"
                                                placeholder="Telefon..."
                                            />
                                            <div v-if="form.errors.contact_phone" class="text-red-500 text-[10px] font-black uppercase tracking-widest mt-1 ml-1 animate-pulse">{{ form.errors.contact_phone }}</div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Save Button -->
                                <div class="mt-10 pt-8 border-t border-gray-50 flex justify-end">
                                    <button
                                        type="submit"
                                        :disabled="form.processing"
                                        class="px-8 py-4 bg-[#0A2C5C] hover:bg-blue-900 text-white rounded-xl font-black uppercase tracking-widest text-[10px] shadow-lg shadow-blue-900/10 transition-all active:scale-95 disabled:opacity-50 flex items-center gap-3"
                                    >
                                        <svg v-if="form.processing" class="animate-spin h-3.5 w-3.5 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                            <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                                            <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                                        </svg>
                                        <span>Zapisz dane</span>
                                    </button>
                                </div>
                            </div>
                        </form>

                        <!-- Pytania -->
                        <div v-if="candidate && candidateQuestions && candidateQuestions.length > 0">
                            <div class="flex items-center gap-4 mb-6">
                                <h3 class="text-[10px] font-black text-[#0A2C5C] uppercase tracking-[0.2em]">
                                    Pytania rekrutacyjne
                                </h3>
                                <div class="h-px flex-1 bg-gray-100"></div>
                            </div>

                            <div v-if="candidate.questions_unlocked_at"
                                 class="bg-white rounded-[2.5rem] border border-gray-100 p-8 shadow-xl shadow-blue-900/5">
                                <p class="text-[9px] font-black text-blue-500 uppercase tracking-widest mb-8 flex items-center gap-2">
                                    <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" /></svg>
                                    {{ __('translate.candidateQuestionsUnlockedDate') || 'Odblokowano dnia:' }}
                                    {{ moment(candidate.questions_unlocked_at).format('DD.MM.YYYY HH:mm') }}
                                </p>

                                <div class="space-y-6">
                                    <div v-for="(question, index) in candidateQuestions" :key="question.id"
                                         class="relative">
                                        <div class="rounded-2xl border border-gray-50 bg-gray-50/30 p-6">
                                            <h4 class="text-xs font-black text-[#0A2C5C] uppercase tracking-tight mb-4">{{ question.question }}</h4>

                                            <div v-if="question.answer_type === 'text' && answersForm.answers[index]">
                                                <textarea
                                                    v-model="answersForm.answers[index].text_answer"
                                                    class="w-full text-xs rounded-xl border-gray-100 bg-white focus:bg-white focus:border-[#00a0e3] focus:ring-0 transition-all resize-none text-gray-700 font-bold p-4"
                                                    rows="3"
                                                ></textarea>
                                            </div>

                                            <div v-else-if="question.answer_type === 'boolean' && answersForm.answers[index]" class="flex flex-col">
                                                <div class="flex items-center gap-8">
                                                    <label class="group/label flex items-center cursor-pointer">
                                                        <div class="relative flex items-center justify-center">
                                                            <input
                                                                type="radio"
                                                                :name="`question-${question.id}`"
                                                                :value="true"
                                                                v-model="answersForm.answers[index].boolean_answer"
                                                                class="peer sr-only"
                                                            >
                                                            <div class="h-5 w-5 rounded-full border-2 border-gray-200 bg-white transition-all peer-checked:border-[#0A2C5C] peer-checked:border-[5px]"></div>
                                                        </div>
                                                        <span class="ml-3 text-[10px] font-black text-gray-500 uppercase tracking-widest group-hover/label:text-[#0A2C5C] transition-colors">Tak</span>
                                                    </label>

                                                    <label class="group/label flex items-center cursor-pointer">
                                                        <div class="relative flex items-center justify-center">
                                                            <input
                                                                type="radio"
                                                                :name="`question-${question.id}`"
                                                                :value="false"
                                                                v-model="answersForm.answers[index].boolean_answer"
                                                                class="peer sr-only"
                                                            >
                                                            <div class="h-5 w-5 rounded-full border-2 border-gray-200 bg-white transition-all peer-checked:border-[#0A2C5C] peer-checked:border-[5px]"></div>
                                                        </div>
                                                        <span class="ml-3 text-[10px] font-black text-gray-500 uppercase tracking-widest group-hover/label:text-[#0A2C5C] transition-colors">Nie</span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="mt-8 flex justify-end">
                                    <button
                                        type="button"
                                        @click="saveAnswers"
                                        class="px-8 py-4 bg-[#0A2C5C] text-white text-[10px] font-black rounded-xl uppercase tracking-widest hover:bg-blue-800 shadow-lg shadow-blue-900/10 transition-all active:scale-95 disabled:opacity-50"
                                        :disabled="answersForm.processing"
                                    >
                                        {{ __('translate.save') || 'Zapisz odpowiedzi' }}
                                    </button>
                                </div>
                            </div>

                            <div v-else
                                 class="bg-white rounded-[2.5rem] border border-gray-100 p-12 text-center shadow-xl shadow-blue-900/5">
                                <div class="mx-auto w-16 h-16 bg-gray-50 rounded-2xl flex items-center justify-center mb-6 border border-gray-100 shadow-sm">
                                    <span class="text-3xl text-gray-200">🔒</span>
                                </div>
                                <h4 class="text-sm font-black text-gray-900 uppercase tracking-widest mb-2">Pytania zablokowane</h4>
                                <p class="text-[10px] font-bold text-gray-400 uppercase tracking-tight">Profil kandydata nie został jeszcze odblokowany.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Right Column: Tags Management -->
                    <div v-if="candidate" class="lg:col-span-7">
                        <div class="bg-white rounded-[3rem] border border-gray-100 shadow-xl shadow-blue-900/5 p-10 flex flex-col h-full min-h-[800px]">
                            <div class="flex items-center gap-4 mb-8">
                                <h3 class="text-[10px] font-black text-[#0A2C5C] uppercase tracking-[0.2em]">
                                    Zarządzanie tagami kandydata
                                </h3>
                                <div class="h-px flex-1 bg-gray-100"></div>
                            </div>

                            <div class="grid grid-cols-1 md:grid-cols-2 gap-10 mb-10">
                                <!-- Categories -->
                                <div class="space-y-6">
                                    <h4 class="text-[10px] font-black text-gray-400 uppercase tracking-widest flex items-center gap-2">
                                        <div class="w-1.5 h-1.5 rounded-full bg-blue-500"></div>
                                        Kategorie zawodowe
                                    </h4>

                                    <div class="relative">
                                        <TextInput
                                            type="text"
                                            v-model="categorySearchQuery"
                                            class="w-full text-xs rounded-xl border-gray-100 bg-gray-50 focus:bg-white focus:ring-0 transition-all placeholder-gray-400 p-3.5 pl-10"
                                            :placeholder="__('translate.searchCategories') || 'Szukaj...'"
                                        />
                                        <svg class="w-4 h-4 text-gray-400 absolute left-3.5 top-1/2 -translate-y-1/2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                                        </svg>
                                    </div>

                                    <div class="flex flex-wrap gap-2 max-h-[300px] overflow-y-auto pr-2 custom-scrollbar">
                                        <span v-for="category in paginatedCategories" :key="category.id"
                                              class="px-3 py-2 rounded-lg text-[9px] font-black uppercase tracking-widest cursor-pointer transition-all hover:scale-105 active:scale-95 shadow-sm border border-transparent"
                                              :style="{ backgroundColor: getTagColor(category.id), color: getContrastColor(getTagColor(category.id)) }"
                                              @click="toggleCategoryTag(category)">
                                            {{ category.title?.[locale] || category.title }}
                                        </span>
                                    </div>

                                    <div class="flex justify-between items-center bg-gray-50/50 p-3 rounded-xl border border-gray-100" v-if="filteredCategories.length > categoriesPerPage">
                                        <button
                                            type="button"
                                            @click="currentCategoryPage = Math.max(currentCategoryPage - 1, 1)"
                                            :disabled="currentCategoryPage === 1"
                                            class="p-2 bg-white rounded-lg border border-gray-100 shadow-sm disabled:opacity-50"
                                        >
                                            <svg class="w-3 h-3 text-[#0A2C5C]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M15 19l-7-7 7-7" /></svg>
                                        </button>
                                        <span class="text-[9px] font-black text-gray-500 uppercase tracking-widest">{{ currentCategoryPage }} / {{ totalCategoryPages }}</span>
                                        <button
                                            type="button"
                                            @click="currentCategoryPage = Math.min(currentCategoryPage + 1, totalCategoryPages)"
                                            :disabled="currentCategoryPage === totalCategoryPages"
                                            class="p-2 bg-white rounded-lg border border-gray-100 shadow-sm disabled:opacity-50"
                                        >
                                            <svg class="w-3 h-3 text-[#0A2C5C]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M9 5l7 7-7 7" /></svg>
                                        </button>
                                    </div>
                                </div>

                                <!-- Custom Tags -->
                                <div class="space-y-6">
                                    <h4 class="text-[10px] font-black text-gray-400 uppercase tracking-widest flex items-center gap-2">
                                        <div class="w-1.5 h-1.5 rounded-full bg-indigo-500"></div>
                                        Tagi własne
                                    </h4>

                                    <div class="relative">
                                        <TextInput
                                            type="text"
                                            v-model="customTagSearchQuery"
                                            class="w-full text-xs rounded-xl border-gray-100 bg-gray-50 focus:bg-white focus:ring-0 transition-all placeholder-gray-400 p-3.5 pl-10"
                                            :placeholder="__('translate.searchCustomTags') || 'Szukaj...'"
                                        />
                                        <svg class="w-4 h-4 text-gray-400 absolute left-3.5 top-1/2 -translate-y-1/2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                                        </svg>
                                    </div>

                                    <div class="flex flex-wrap gap-2 max-h-[300px] overflow-y-auto pr-2 custom-scrollbar">
                                        <span v-for="tag in filteredCustomTags" :key="tag.id"
                                              class="px-3 py-2 rounded-lg text-[9px] font-black uppercase tracking-widest cursor-pointer transition-all hover:scale-105 active:scale-95 shadow-sm border border-transparent"
                                              :style="{ backgroundColor: tag.color || '#ccc', color: getContrastColorText(tag.color) }"
                                              @click="toggleCustomTag(tag)">
                                            {{ tag.name }}
                                        </span>
                                    </div>
                                </div>
                            </div>

                            <!-- Selected Tags -->
                            <div class="mt-auto pt-10 border-t border-gray-100">
                                <h4 class="text-[10px] font-black text-gray-400 uppercase tracking-widest mb-6 flex items-center justify-between">
                                    <span>Wybrane tagi kandydata</span>
                                    <span class="bg-[#0A2C5C] text-white px-2 py-0.5 rounded text-[8px]">{{ selectedTags.length }}</span>
                                </h4>
                                <div class="bg-gray-50/50 p-6 rounded-[2rem] border border-gray-100">
                                    <div class="flex flex-wrap gap-2">
                                        <span v-for="tag in selectedTags" :key="tag.id"
                                              class="px-4 py-2.5 bg-[#0A2C5C] text-white rounded-xl text-[9px] font-black uppercase tracking-widest flex items-center shadow-md shadow-blue-900/10 border border-blue-900 group">
                                            {{ tag.type === 'category' && tag.rawTitle ? (tag.rawTitle?.[locale] || tag.rawTitle?.['pl'] || tag.title) : (tag.name || tag.title) }}
                                            <button type="button" @click="removeTag(tag)" class="ml-3 text-white/50 hover:text-red-400 transition-colors">
                                                <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M6 18L18 6M6 6l12 12" /></svg>
                                            </button>
                                        </span>
                                        <div v-if="selectedTags.length === 0" class="w-full text-center py-4 text-[10px] font-black text-gray-400 uppercase tracking-widest italic">
                                            Nie wybrano żadnych tagów
                                        </div>
                                    </div>

                                    <div class="mt-8 flex justify-end">
                                        <button
                                            type="button"
                                            @click="saveTags"
                                            class="inline-flex items-center px-8 py-4 bg-[#0A2C5C] text-white text-[10px] font-black rounded-xl uppercase tracking-widest hover:bg-blue-800 shadow-lg shadow-blue-900/20 transition-all active:scale-95 disabled:opacity-50"
                                            :disabled="tagsForm.processing || isSavingTags"
                                        >
                                            <svg v-if="tagsForm.processing || isSavingTags" class="animate-spin h-3.5 w-3.5 text-white mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                                <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                                                <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                                            </svg>
                                            <span>
                                                {{ (tagsForm.processing || isSavingTags) ? 'Zapisywanie...' : 'Zapisz tagi' }}
                                            </span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </AppLayout>
</template>
