<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import {Link, usePage} from '@inertiajs/vue3';
import {computed, ref, watch} from 'vue';
import { router } from '@inertiajs/vue3';
import { debounce, pickBy } from 'lodash';
import __ from '@/lang.js';
import Multiselect from "vue-multiselect";
const locale = computed(()=>usePage().props.language);

const props = defineProps({
    candidates: Object,
    filters: Object,
    categories: Array,
    projects: Array,
    customTags: Array,
    optionsRecruits: Object,
    optionsPosition: Object,
});

const loading = ref(false);


const form = ref({
    name: props.filters.name || '',
    surname: props.filters.surname || '',
    email: props.filters.email || '',
    recruiter: props.filters?.recruiter || '',
    position: props.filters?.position || '',
    phone: props.filters.phone || '',
    project: props.filters.project || '',
    tags: props.filters.tags || [],
});

const getLocalizedTitle = (title) => {
    if (!title) return '';
    return title[locale] || title['pl'] || (Object.values(title).length > 0 ? Object.values(title)[0] : '');
};


const selectedTags = ref([]);
const professionCategories = ref(props.categories || []);
const customTags = ref(props.customTags || []);

const currentCategoryPage = ref(1);
const categoriesPerPage = 60; // Liczba kategorii na stronę
const tagColors = {};
const categorySearchQuery = ref('');
const customTagSearchQuery = ref('');


const getTagColor = (id) => {
    if (!tagColors[id]) {
        // Generowanie pastelowych kolorów
        const hue = (id * 137.5) % 360;
        const saturation = 60 + (id % 20);
        const lightness = 75 + (id % 15);
        tagColors[id] = `hsl(${hue}, ${saturation}%, ${lightness}%)`;
    }
    return tagColors[id];
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

const getContrastColorText = (bgColor) => {
    if (!bgColor) return '#000';
    const color = bgColor.replace('#', '');
    const r = parseInt(color.substr(0,2),16);
    const g = parseInt(color.substr(2,2),16);
    const b = parseInt(color.substr(4,2),16);
    return (r*0.299 + g*0.587 + b*0.114) > 186 ? '#000' : '#fff';
};



const getContrastColor = (backgroundColor) => {
    // Prosty algorytm do określenia ciemności koloru
    const rgb = hexToRgb(backgroundColor) || { r: 200, g: 200, b: 200 };
    const brightness = (rgb.r * 299 + rgb.g * 587 + rgb.b * 114) / 1000;
    return brightness > 128 ? '#000000' : '#FFFFFF';
};

// Konwersja HSL do RGB
const hexToRgb = (hex) => {
    // Jeśli to jest format HSL, zwracamy domyślne wartości
    if (hex.startsWith('hsl')) {
        return { r: 200, g: 200, b: 200 };
    }

    // Konwersja HEX do RGB
    const shorthandRegex = /^#?([a-f\d])([a-f\d])([a-f\d])$/i;
    hex = hex.replace(shorthandRegex, (m, r, g, b) => r + r + g + g + b + b);

    const result = /^#?([a-f\d]{2})([a-f\d]{2})([a-f\d]{2})$/i.exec(hex);
    return result ? {
        r: parseInt(result[1], 16),
        g: parseInt(result[2], 16),
        b: parseInt(result[3], 16)
    } : null;
};
// Obliczanie całkowitej liczby stron dla kategorii
const totalCategoryPages = computed(() => {
    return Math.ceil(filteredCategories.value.length / categoriesPerPage);
});

// Filtrowanie kategorii posiadających tłumaczenie w aktualnym języku i pasujące do wyszukiwania
const filteredCategories = computed(() => {
    const locale = usePage().props.language || 'pl';
    return professionCategories.value.filter(category => {
        if (!category || !category.title) return false;
        const hasValidTitle = category.title[locale] && category.title[locale].trim() !== '';

        // Jeśli jest fraza wyszukiwania, sprawdź czy kategoria ją zawiera
        if (categorySearchQuery.value.trim() !== '') {
            const searchTerm = categorySearchQuery.value.toLowerCase();
            const localizedTitle = (category.title[locale] || '').toLowerCase();
            return hasValidTitle && localizedTitle.includes(searchTerm);
        }

        return hasValidTitle;
    });
});

// Pobranie paginowanych kategorii
const paginatedCategories = computed(() => {
    const startIndex = (currentCategoryPage.value - 1) * categoriesPerPage;
    const endIndex = startIndex + categoriesPerPage;
    return filteredCategories.value.slice(startIndex, endIndex);
});

// Resetowanie strony przy zmianie zapytania wyszukiwania
watch(categorySearchQuery, () => {
    currentCategoryPage.value = 1;
});
const resetFilters = () => {
    console.log('ssss')
    form.value = {
        name: '',
        surname: '',
        recruiter:'',
        position:'',
        email: '',
        phone: '',
        project: '',
        tags: [],
    };
    selectedTags.value = [];

    router.get(route('candidates.index'), {}, {
        preserveState: true,
        replace: true,
        preserveScroll:true,
        onFinish: () => {
            loading.value = false;
        },
    });
};

watch(form, debounce(function () {
    loading.value = true;

    let rest = pickBy({
        ...form.value,
        recruiter: form.value.recruiter?.value || form.value.recruiter,
        position: form.value.position?.value || form.value.position,
        tags: form.value.tags?.map(el => el.id).join(',')
    });

    router.get(route('candidates.index'), rest, {
        preserveState: true,
        preserveScroll: true,
        replace: true,
        onFinish: () => {
            loading.value = false;
        },
    });
}, 300), { deep: true });

const getBackgroundStyle = (candidate) => {
    if (candidate.created_by?.color) {
        return {
            backgroundColor: `${candidate.created_by.color}15` // Dodajemy 15 na końcu dla przezroczystości
        }
    }
    return {}
}

const removeTag = (tag) => {
    const index = selectedTags.value.findIndex(t =>
        t.id === tag.id && t.type === tag.type
    );

    if (index !== -1) {
        selectedTags.value.splice(index, 1);
        // Po usunięciu ostatniego tagu, zapewniamy że będzie pusta tablica
        if (selectedTags.value.length === 0) {
            selectedTags.value = [];
        }
    }
};

// Filtrowanie tagów niestandardowych na podstawie wyszukiwania
const filteredCustomTags = computed(() => {
    // Upewnij się, że customTags.value jest tablicą
    const tags = Array.isArray(customTags.value) ? customTags.value : [];

    if (customTagSearchQuery.value.trim() === '') {
        return tags;
    }

    const searchTerm = customTagSearchQuery.value.toLowerCase();
    return tags.filter(tag => {
        return tag.name.toLowerCase().includes(searchTerm);
    });
});

const toggleCustomTag = (tag) => {
    const index = selectedTags.value.findIndex(t =>
        t.id === tag.id && t.type === 'custom'
    );

    if (index === -1) {
        selectedTags.value.push({
            id: tag.id+'s',
            name: tag.name,
            type: 'custom'
        });
    } else {
        selectedTags.value.splice(index, 1);
    }
};


watch(selectedTags, (newTags) => {
    form.value.tags = [...newTags];
}, { deep: true });

</script>

<template>
    <AppLayout :title="__('translate.candidates')">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('translate.candidates') }}
            </h2>
        </template>

        <div class="py-12 bg-gray-50/50 min-h-screen">
            <div
                v-if="loading"
                class="fixed inset-0 z-[9999] flex items-center justify-center bg-white/90"
            >
                <div class="h-12 w-12 animate-spin rounded-full border-4 border-gray-200 border-t-work-main"></div>
            </div>

            <div class="max-w-screen-2xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white rounded-3xl shadow-sm border border-gray-100 p-8 space-y-8">
                    <!-- Header -->
                    <div class="flex items-center gap-4 mb-8">
                        <h3 class="text-[10px] font-black text-[#0A2C5C] uppercase tracking-[0.2em]">
                            {{ __('translate.candidatesList') }}
                        </h3>
                        <div class="h-px flex-1 bg-gray-100"></div>
                    </div>

                    <!-- Formularz filtrowania -->
                    <div class="bg-white rounded-[3rem] shadow-xl shadow-blue-900/5 border border-gray-100 p-10">
                        <div class="flex items-center gap-4 mb-8">
                            <h3 class="text-[10px] font-black text-[#0A2C5C] uppercase tracking-[0.2em]">{{ __('translate.filter') }}</h3>
                            <div class="h-px flex-1 bg-gray-100"></div>
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                            <div class="space-y-2">
                                <label class="block text-[10px] font-black text-gray-400 mb-2 uppercase tracking-widest">{{ __('translate.name') }}</label>
                                <input
                                    v-model="form.name"
                                    type="text"
                                    class="w-full px-5 py-4 text-xs rounded-2xl border-gray-100 bg-gray-50 focus:bg-white focus:ring-0 focus:border-[#00a0e3] transition-all placeholder-gray-400 font-bold tracking-widest uppercase"
                                    :placeholder="__('translate.enterName')"
                                />
                            </div>
                            <div class="space-y-2">
                                <label class="block text-[10px] font-black text-gray-400 mb-2 uppercase tracking-widest">{{ __('translate.surname') }}</label>
                                <input
                                    v-model="form.surname"
                                    type="text"
                                    class="w-full px-5 py-4 text-xs rounded-2xl border-gray-100 bg-gray-50 focus:bg-white focus:ring-0 focus:border-[#00a0e3] transition-all placeholder-gray-400 font-bold tracking-widest uppercase"
                                    :placeholder="__('translate.enterSurname')"
                                />
                            </div>
                            <div class="space-y-2">
                                <label class="block text-[10px] font-black text-gray-400 mb-2 uppercase tracking-widest">{{ __('translate.email') }}</label>
                                <input
                                    v-model="form.email"
                                    type="text"
                                    class="w-full px-5 py-4 text-xs rounded-2xl border-gray-100 bg-gray-50 focus:bg-white focus:ring-0 focus:border-[#00a0e3] transition-all placeholder-gray-400 font-bold tracking-widest uppercase"
                                    :placeholder="__('translate.enterEmail')"
                                />
                            </div>
                            <div class="space-y-2">
                                <label class="block text-[10px] font-black text-gray-400 mb-2 uppercase tracking-widest">{{ __('translate.recruiter') }}</label>
                                <multiselect
                                    :selectLabel="__('translate.selectLabel')"
                                    :selectGroupLabel="__('translate.selectGroupLabel')"
                                    :selectedLabel="__('translate.selectedLabel')"
                                    :deselectLabel="__('translate.deselectLabel')"
                                    :noOptions="__('translate.noOptions')"
                                    :noResult="__('translate.noResult')"
                                    track-by="value"
                                    label="name"
                                    :placeholder="__('translate.placeholder')"
                                    v-model="form.recruiter" :options="optionsRecruits" class="custom-multiselect">
                                </multiselect>
                            </div>
                            <div class="space-y-2">
                                <label class="block text-[10px] font-black text-gray-400 mb-2 uppercase tracking-widest">{{ __('translate.position') }}</label>
                                <multiselect
                                    :selectLabel="__('translate.selectLabel')"
                                    :selectGroupLabel="__('translate.selectGroupLabel')"
                                    :selectedLabel="__('translate.selectedLabel')"
                                    :deselectLabel="__('translate.deselectLabel')"
                                    :noOptions="__('translate.noOptions')"
                                    :noResult="__('translate.noResult')"
                                    track-by="value"
                                    label="name"
                                    :placeholder="__('translate.placeholder')"
                                    v-model="form.position"
                                    :options="optionsPosition" class="custom-multiselect">
                                </multiselect>
                            </div>
                            <div class="space-y-2">
                                <label class="block text-[10px] font-black text-gray-400 mb-2 uppercase tracking-widest">{{ __('translate.phone') }}</label>
                                <input
                                    v-model="form.phone"
                                    type="text"
                                    class="w-full px-5 py-4 text-xs rounded-2xl border-gray-100 bg-gray-50 focus:bg-white focus:ring-0 focus:border-[#00a0e3] transition-all placeholder-gray-400 font-bold tracking-widest uppercase"
                                    :placeholder="__('translate.enterPhone')"
                                />
                            </div>
                            <div class="col-span-2 space-y-2">
                                <label class="block text-[10px] font-black text-gray-400 mb-2 uppercase tracking-widest">{{ __('translate.project') }}</label>
                                <select
                                    v-model="form.project"
                                    class="w-full px-5 py-4 text-xs rounded-2xl border-gray-100 bg-gray-50 focus:bg-white focus:ring-0 focus:border-[#00a0e3] transition-all font-bold tracking-widest uppercase appearance-none"
                                >
                                    <option value="">{{ __('translate.allProjects') }}</option>
                                    <option v-for="project in projects" :key="project.id" :value="project.id">
                                        {{ project.id }}
                                    </option>
                                </select>
                            </div>
                        </div>

                        <div class="mb-8 pt-6 border-t border-gray-50">
                            <h4 class="text-[10px] font-black text-gray-400 mb-4 uppercase tracking-widest">{{ __('translate.professionCategories') }}</h4>
                            <div class="mb-4">
                                <input
                                    type="text"
                                    v-model="categorySearchQuery"
                                    class="w-full px-5 py-3 text-xs rounded-2xl border-gray-100 bg-gray-50 focus:bg-white focus:ring-0 focus:border-[#00a0e3] transition-all placeholder-gray-400 font-bold tracking-widest uppercase"
                                    :placeholder="__('translate.searchCategories')"
                                />
                            </div>
                            <div>
                                <div class="flex flex-wrap gap-2 mb-4">
                                    <span v-for="category in paginatedCategories" :key="category.id"
                                          class="px-4 py-2 rounded-full text-[10px] font-black uppercase tracking-widest cursor-pointer transition-all hover:scale-[1.02]"
                                          :class="[selectedTags.some(t => t.id === category.id && t.type === 'category') ? 'ring-2 ring-white outline outline-2 outline-offset-2 outline-blue-300 shadow-sm' : '']"
                                          :style="{ backgroundColor: getTagColor(category.id), color: getContrastColor(getTagColor(category.id)) }"
                                          @click="toggleCategoryTag(category)">
                                        {{category.title?.[locale]}}
                                    </span>
                                    <span v-if="filteredCategories.length === 0" class="text-[10px] font-black text-gray-400 uppercase tracking-widest">
                                        {{ categorySearchQuery ? __('translate.noMatchingCategories') : __('translate.noCategoriesAvailable') }}
                                    </span>
                                </div>
                                <div class="flex justify-between items-center mt-6" v-if="filteredCategories.length > categoriesPerPage">
                                    <button
                                        @click="currentCategoryPage = Math.max(currentCategoryPage - 1, 1)"
                                        :disabled="currentCategoryPage === 1"
                                        class="px-6 py-2 bg-white border border-gray-100 text-gray-400 text-[10px] font-black uppercase tracking-widest rounded-xl hover:bg-gray-50 disabled:opacity-50 transition-all"
                                    >
                                        &lt; {{__('translate.previous')}}
                                    </button>
                                    <span class="text-[10px] font-black text-gray-400 uppercase tracking-widest">{{__('translate.page')}} {{ currentCategoryPage }} / {{ totalCategoryPages }}</span>
                                    <button
                                        @click="currentCategoryPage = Math.min(currentCategoryPage + 1, totalCategoryPages)"
                                        :disabled="currentCategoryPage === totalCategoryPages"
                                        class="px-6 py-2 bg-white border border-gray-100 text-gray-400 text-[10px] font-black uppercase tracking-widest rounded-xl hover:bg-gray-50 disabled:opacity-50 transition-all"
                                    >
                                        {{__('translate.next')}} &gt;
                                    </button>
                                </div>
                                <div v-if="categorySearchQuery" class="mt-4 text-right">
                                    <button
                                        @click="categorySearchQuery = ''; currentCategoryPage = 1"
                                        class="text-blue-500 text-[10px] font-black uppercase tracking-widest hover:text-blue-700"
                                    >
                                        {{ __('translate.clearSearch') }}
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="mb-8 pt-6 border-t border-gray-50">
                            <h4 class="text-[10px] font-black text-gray-400 mb-4 uppercase tracking-widest">{{ __('translate.customTags') }}</h4>
                            <div class="mb-4">
                                <input
                                    type="text"
                                    v-model="customTagSearchQuery"
                                    class="w-full px-5 py-3 text-xs rounded-2xl border-gray-100 bg-gray-50 focus:bg-white focus:ring-0 focus:border-[#00a0e3] transition-all placeholder-gray-400 font-bold tracking-widest uppercase"
                                    :placeholder="__('translate.searchCustomTags')"
                                />
                            </div>
                            <div class="flex flex-wrap gap-2">
                                <span v-for="tag in filteredCustomTags" :key="tag.id"
                                      class="px-4 py-2 rounded-full text-[10px] font-black uppercase tracking-widest cursor-pointer transition-all hover:scale-[1.02]"
                                      :class="[selectedTags.some(t => t.id === tag.id && t.type === 'custom') ? 'ring-2 ring-white outline outline-2 outline-offset-2 outline-blue-300 shadow-sm' : '']"
                                      :style="{ backgroundColor: tag.color || '#ccc', color: getContrastColorText(tag.color) }"
                                      @click="toggleCustomTag(tag)">
                                    {{ tag.name }}
                                </span>
                                <span v-if="filteredCustomTags.length === 0" class="text-[10px] font-black text-gray-400 uppercase tracking-widest">
                                    {{ customTagSearchQuery ? __('translate.noMatchingTags') : __('translate.noTagsAvailable') }}
                                </span>
                            </div>
                            <div v-if="customTagSearchQuery" class="mt-4 text-right">
                                <button
                                    @click="customTagSearchQuery = ''"
                                    class="text-blue-500 text-[10px] font-black uppercase tracking-widest hover:text-blue-700"
                                >
                                    {{ __('translate.clearSearch') }}
                                </button>
                            </div>
                        </div>

                        <div class="mt-8 pt-6 border-t border-gray-50">
                            <h4 class="text-[10px] font-black text-gray-400 mb-4 uppercase tracking-widest">{{ __('translate.selectedTags') }}</h4>
                            <div class="flex flex-wrap gap-2">
                                <span v-for="tag in selectedTags" :key="tag.id"
                                      class="px-4 py-2 bg-[#0A2C5C] text-white rounded-full text-[10px] font-black uppercase tracking-widest flex items-center shadow-lg shadow-blue-900/10">
                                    {{ tag.type === 'category' && tag.rawTitle ? tag.rawTitle?.[locale] : (tag.name || tag.title) }}
                                    <button @click="removeTag(tag)" class="ml-2 text-blue-200 hover:text-white transition-colors">
                                        &times;
                                    </button>
                                </span>
                                <span v-if="selectedTags.length === 0" class="text-[10px] font-black text-gray-400 uppercase tracking-widest">{{ __('translate.noTagsSelected') }}</span>
                            </div>
                        </div>

                        <div class="flex justify-end mt-8 pt-6 border-t border-gray-50">
                            <button
                                @click="resetFilters"
                                type="button"
                                class="w-full sm:w-auto px-10 py-4 bg-white border border-gray-100 text-gray-500 text-[10px] font-black uppercase tracking-widest rounded-2xl hover:bg-gray-50 shadow-sm transition-all hover:-translate-y-0.5"
                            >
                                {{ __('translate.resetFilters') }}
                            </button>
                        </div>
                    </div>

                    <div v-if="candidates.data.length === 0" class="bg-white rounded-[3rem] p-20 text-center shadow-xl shadow-blue-900/5 border border-gray-100">
                        <div class="w-20 h-20 bg-gray-50 rounded-full flex items-center justify-center mx-auto mb-6">
                            <svg class="w-10 h-10 text-gray-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                            </svg>
                        </div>
                        <p class="text-xs font-black text-gray-400 uppercase tracking-widest">{{ __('translate.noCandidatesAvailable') }}</p>
                    </div>

                    <div v-else class="space-y-4 pb-12">
                        <div class="flex items-center gap-4 mb-6 px-6">
                            <h3 class="text-[10px] font-black text-[#0A2C5C] uppercase tracking-[0.2em]">{{ __('translate.foundCandidates') }} ({{ candidates?.data?.length || 0 }})</h3>
                            <div class="h-px flex-1 bg-gray-100"></div>
                        </div>

                        <div class="space-y-4">
                            <div
                                v-for="candidate in candidates.data"
                                :key="candidate.id"
                                :style="getBackgroundStyle(candidate)"
                                class="group bg-white rounded-[2.5rem] border border-gray-100 shadow-sm hover:shadow-xl hover:shadow-blue-900/5 transition-all duration-300 hover:-translate-y-1 p-6"
                            >
                                <div class="grid grid-cols-1 md:grid-cols-12 gap-6 items-center">
                                    <!-- ID -->
                                    <div class="col-span-1 flex flex-col items-center md:items-start">
                                        <div class="text-[10px] font-black text-gray-400 uppercase tracking-widest mb-1">
                                            ID
                                        </div>
                                        <div class="text-xs font-black text-[#0A2C5C] uppercase tracking-widest">
                                            {{ candidate.id }}
                                        </div>
                                    </div>

                                    <!-- Candidate -->
                                    <div class="col-span-3 flex items-center gap-4">
                                        <div class="w-14 h-14 rounded-2xl bg-blue-50 flex items-center justify-center overflow-hidden shrink-0 border-2 border-white shadow-sm transition-transform duration-300 group-hover:scale-105">
                                            <img
                                                v-if="candidate.user_by_email?.profile_photo_url"
                                                :src="candidate.user_by_email?.profile_photo_url"
                                                :alt="candidate.name"
                                                class="h-full w-full object-cover"
                                            />
                                            <span v-else class="text-[#0A2C5C] font-black text-sm">
                                                {{ (candidate.name?.[0] || '') + (candidate.surname?.[0] || '') }}
                                            </span>
                                        </div>

                                        <div class="min-w-0">
                                            <div class="font-black text-gray-900 uppercase tracking-tight truncate leading-tight">
                                                {{ candidate.name }} {{ candidate.surname }}
                                            </div>
                                            <div class="text-[10px] font-bold text-gray-400 uppercase tracking-widest mt-1 truncate">
                                                {{ candidate.email || '-' }}
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Phone -->
                                    <div class="col-span-1 flex flex-col items-center md:items-start">
                                        <div class="text-[10px] font-black text-gray-400 uppercase tracking-widest mb-1">
                                            {{ __('translate.phone') }}
                                        </div>
                                        <div class="text-xs font-bold text-gray-700 uppercase tracking-tight">
                                            {{ candidate.phone || '-' }}
                                        </div>
                                    </div>

                                    <!-- Project -->
                                    <div class="col-span-2 flex flex-col items-center md:items-start">
                                        <div class="text-[10px] font-black text-gray-400 uppercase tracking-widest mb-1">
                                            {{ __('translate.project') }}
                                        </div>

                                        <div class="flex flex-wrap gap-2">
                                            <template v-if="candidate.projects && candidate.projects.length > 0">
                                                <Link
                                                    v-for="project in candidate.projects"
                                                    :key="project.id"
                                                    :href="route('project-recruits.show', project.id)"
                                                    class="text-[9px] font-black text-blue-600 bg-blue-50 px-2 py-1 rounded-lg hover:bg-blue-100 transition-colors uppercase tracking-widest"
                                                >
                                                    ID: {{ project.id }}
                                                </Link>
                                            </template>
                                            <span v-else class="text-xs font-bold text-gray-500">-</span>
                                        </div>
                                    </div>

                                    <!-- Tags -->
                                    <div class="col-span-3">
                                        <div class="text-[10px] font-black text-gray-400 uppercase tracking-widest mb-1">
                                            {{ __('translate.tags') }}
                                        </div>

                                        <div class="flex flex-wrap gap-2 w-full">
                                            <template v-if="candidate.tags && candidate.tags.length">
                                                <span
                                                    v-for="tag in candidate.tags"
                                                    :key="tag.id"
                                                    class="px-3 py-1 rounded-full text-[9px] font-black uppercase tracking-widest transition-transform hover:scale-[1.02]"
                                                    :style="{ backgroundColor: getTagColor(tag.id + 1000), color: getContrastColor(getTagColor(tag.id + 1000)) }"
                                                >
                                                    {{ tag.title?.[usePage().props.language] || '-' }}
                                                </span>
                                            </template>
                                            <span v-else class="text-xs font-bold text-gray-500">-</span>
                                        </div>
                                    </div>

                                    <!-- Actions -->
                                    <div class="col-span-2 flex items-center justify-center md:justify-end gap-3">
                                        <Link
                                            :href="route('candidates.show', candidate.id)"
                                            class="w-full md:w-auto px-6 py-3 bg-[#0A2C5C] text-white text-[9px] font-black rounded-xl hover:bg-blue-800 shadow-md shadow-blue-900/10 transition-all uppercase tracking-widest text-center"
                                        >
                                            {{ __('translate.candidateDetails') }}
                                        </Link>

                                        <Link
                                            :href="route('candidates.evidence', candidate.id)"
                                            class="w-full md:w-auto px-6 py-3 bg-blue-500 text-white text-[9px] font-black rounded-xl hover:bg-blue-600 shadow-md shadow-blue-500/10 transition-all uppercase tracking-widest text-center"
                                        >
                                            {{ __('translate.evidence') }}
                                        </Link>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Paginacja -->
                        <div class="mt-8 flex justify-center" v-if="candidates.links.length > 3">
                            <div class="flex flex-wrap gap-2">
                                <template v-for="(link, index) in candidates.links" :key="index">
                                    <div v-if="link.url === null" class="px-6 py-3 bg-white border border-gray-100 text-gray-300 text-[10px] font-black uppercase tracking-widest rounded-xl" v-html="link.label"></div>
                                    <Link preserveScroll v-else class="px-6 py-3 border rounded-xl text-[10px] font-black uppercase tracking-widest transition-all shadow-sm hover:shadow-md" :class="link.active ? 'bg-[#0A2C5C] border-transparent text-white' : 'bg-white border-gray-100 text-[#0A2C5C] hover:bg-gray-50'" :href="link.url" v-html="link.label"></Link>
                                </template>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </AppLayout>
</template>
<style src="vue-multiselect/dist/vue-multiselect.css"></style>
<style lang="scss">
.multiselect__tag{
    background: #0A2C5C !important;
}
.multiselect__option--highlight {
    background: #0A2C5C !important;
    outline: none;
    color: white;
}

.multiselect__option--highlight:after {
    content: attr(data-select);
    background: #0A2C5C !important;
    color: white;
}

.multiselect__option--selected {
    background: #12315d !important;
    color: white;
    font-weight: bold;
}

.multiselect__option--selected.multiselect__option--highlight {
    background: #12315d !important;
    color: #fff;
}

.multiselect__option--selected.multiselect__option--highlight:after {
    background: #12315d !important;
    content: attr(data-deselect);
    color: white !important;
}

.multiselect__option--selected:after {
    content: attr(data-selected);
    color: #12315d;
    background: transparent !important;
}
</style>

<style lang="scss">
.custom-scrollbar::-webkit-scrollbar {
    width: 4px;
}
.custom-scrollbar::-webkit-scrollbar-track {
    background: transparent;
}
.custom-scrollbar::-webkit-scrollbar-thumb {
    background: #e5e7eb;
    border-radius: 10px;
}
.custom-scrollbar::-webkit-scrollbar-thumb:hover {
    background: #d1d5db;
}

.custom-multiselect {
    .multiselect__tags {
        border: 1px solid #f3f4f6 !important; /* gray-100 */
        border-radius: 1rem !important; /* rounded-2xl */
        padding: 1rem 2.5rem 1rem 1.25rem !important;
        background: #f9fafb !important; /* gray-50 */
        min-height: 58px !important;
        display: flex !important;
        align-items: center !important;
        flex-wrap: wrap !important;
    }

    .multiselect__placeholder {
        margin-bottom: 0 !important;
        padding-top: 0 !important;
        color: #9ca3af !important; /* text-gray-400 */
        font-size: 0.75rem !important; /* text-xs */
        font-weight: 700 !important;
        text-transform: uppercase !important;
        letter-spacing: 0.05em !important;
    }

    .multiselect__single {
        margin-bottom: 0 !important;
        padding-left: 0 !important;
        font-size: 0.75rem !important;
        background: transparent !important;
        font-weight: 700 !important;
        text-transform: uppercase !important;
        letter-spacing: 0.05em !important;
        color: #374151 !important;
    }

    .multiselect__input {
        margin-bottom: 0 !important;
        background: transparent !important;
        font-size: 0.75rem !important;
        font-weight: 700 !important;
    }

    .multiselect__select {
        height: 58px !important;
        width: 2.5rem !important;
    }

    .multiselect__option--highlight {
        background: #0A2C5C !important;
        outline: none;
        color: white !important;
        font-size: 0.75rem !important;
        font-weight: 700 !important;
        text-transform: uppercase !important;
        letter-spacing: 0.05em !important;

        &:after {
            background: #0A2C5C !important;
            color: white !important;
        }
    }

    .multiselect__option--selected {
        background: #f3f4f6 !important;
        color: #0A2C5C !important;
        font-weight: 900 !important;
        text-transform: uppercase !important;
        font-size: 10px !important;
        letter-spacing: 0.1em !important;

        &:after {
            background: transparent !important;
            color: #9ca3af !important;
        }

        &.multiselect__option--highlight {
            background: #0A2C5C !important;
            color: white !important;

            &:after {
                background: #0A2C5C !important;
                color: white !important;
            }
        }
    }

    .multiselect__tag {
        background: #0A2C5C !important;
        border-radius: 0.5rem !important;
        padding: 6px 26px 6px 10px !important;
        font-size: 10px !important;
        font-weight: 900 !important;
        text-transform: uppercase !important;
        letter-spacing: 0.1em !important;
    }

    .multiselect__tag-icon {
        &:after {
            color: white !important;
        }

        &:hover {
            background: #1e3a8a !important;
        }
    }

    .multiselect__content-wrapper {
        border: 1px solid #f3f4f6 !important;
        border-top: none !important;
        border-bottom-left-radius: 1rem !important;
        border-bottom-right-radius: 1rem !important;
        box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1) !important;
    }
}
</style>
