<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import { useForm, usePage, Link } from '@inertiajs/vue3';
import { computed, ref } from 'vue';
import InputLabel from '@/Components/InputLabel.vue';
import TextInput from '@/Components/TextInput.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import SecondaryButton from '@/Components/SecondaryButton.vue';
import Multiselect from 'vue-multiselect';

const props = defineProps({
    category: Object,
    allCategories: Array,
    languages: Array,
});

const form = useForm({
    name: props.category.name,
    title: props.languages.reduce((acc, lang) => {
        acc[lang] = props.category.title[lang] || '';
        return acc;
    }, {}),
    parent_id: props.allCategories.find(c => c.id === props.category.parent_id) || null,
});

const sortedLanguages = computed(() => {
    const langs = [...props.languages];
    const priority = ['pl', 'en'];
    return langs.sort((a, b) => {
        const aIndex = priority.indexOf(a);
        const bIndex = priority.indexOf(b);
        if (aIndex !== -1 && bIndex !== -1) return aIndex - bIndex;
        if (aIndex !== -1) return -1;
        if (bIndex !== -1) return 1;
        return a.localeCompare(b);
    });
});

const activeTab = ref(props.languages[0] || 'pl');

const goToNextTab = () => {
    const currentIndex = sortedLanguages.value.indexOf(activeTab.value);
    if (currentIndex < sortedLanguages.value.length - 1) {
        activeTab.value = sortedLanguages.value[currentIndex + 1];
    }
};

const goToPrevTab = () => {
    const currentIndex = sortedLanguages.value.indexOf(activeTab.value);
    if (currentIndex > 0) {
        activeTab.value = sortedLanguages.value[currentIndex - 1];
    }
};

const goToNextEmptyTab = () => {
    const currentIndex = sortedLanguages.value.indexOf(activeTab.value);
    for (let i = currentIndex + 1; i < sortedLanguages.value.length; i++) {
        const lang = sortedLanguages.value[i];
        if (!form.title[lang]) {
            activeTab.value = lang;
            return;
        }
    }
    for (let i = 0; i < currentIndex; i++) {
        const lang = sortedLanguages.value[i];
        if (!form.title[lang]) {
            activeTab.value = lang;
            return;
        }
    }
};

const hasErrorInTab = (lang) => {
    return !!form.errors['title.' + lang];
};

const getCategoryLabel = (category) => {
    if (!category) return '';
    const title = getTranslation(category.title);
    const depth = category.depth || 0;
    const prefix = '— '.repeat(depth);
    return `${prefix}${title}`;
};

const getTranslation = (value) => {
    if (!value) return '-';
    if (typeof value === 'object') {
        const locale = usePage().props.locale || 'pl';
        return value[locale] || value['pl'] || Object.values(value)[0];
    }
    return value;
};

const submit = () => {
    const data = {
        name: form.name,
        title: form.title,
        parent_id: form.parent_id?.id || null,
    };
    form.transform(() => data).put(route('admin.categories.update', props.category.id));
};
</script>

<template>
    <AppLayout title="Edytuj kategorię">
        <div class="py-12 bg-gray-50/50 min-h-screen">
            <div class="max-w-[1600px] mx-auto sm:px-6 lg:px-8">
                <!-- Header Section -->
                <div class="bg-white rounded-[3rem] shadow-xl shadow-blue-900/5 border border-gray-100 p-10 mb-8">
                    <div class="flex flex-col md:flex-row md:items-center justify-between gap-8">
                        <div>
                            <h3 class="text-2xl font-black text-[#0A2C5C] uppercase tracking-tight">Edytuj kategorię</h3>
                            <p class="text-[10px] font-bold text-gray-400 uppercase tracking-widest mt-1">
                                #{{ category.id }} - {{ getTranslation(category.title) }}
                            </p>
                        </div>
                        <Link
                            :href="route('admin.categories.index')"
                            class="px-8 py-4 bg-gray-100 hover:bg-gray-200 text-gray-600 rounded-2xl font-black text-xs uppercase tracking-widest transition-all active:scale-95 flex items-center gap-2"
                        >
                            Powrót
                        </Link>
                    </div>
                </div>

                <div class="bg-white rounded-[3rem] shadow-xl shadow-blue-900/5 border border-gray-100 p-10">
                    <form @submit.prevent="submit" class="space-y-8">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                            <!-- Left Column: Basic Info -->
                            <div class="space-y-6">
                                <div class="p-8 bg-blue-50/50 rounded-[2rem] border border-blue-100/50 space-y-6">
                                    <div class="flex items-center gap-2 mb-2">
                                        <div class="w-2 h-2 bg-blue-500 rounded-full animate-pulse"></div>
                                        <p class="text-[10px] font-black text-blue-600 uppercase tracking-widest">Kategoria nadrzędna</p>
                                    </div>

                                    <div class="space-y-4">
                                        <div>
                                            <InputLabel for="name" value="Klucz systemowy" class="text-[10px] font-black uppercase tracking-widest text-gray-400 mb-2" />
                                            <TextInput
                                                id="name"
                                                v-model="form.name"
                                                type="text"
                                                class="block w-full bg-white border-none focus:ring-2 focus:ring-blue-500/20 text-xs font-black uppercase tracking-tight"
                                                placeholder="Wpisz klucz systemowy"
                                            />
                                            <div v-if="form.errors.name" class="text-red-500 text-xs mt-2 font-bold uppercase tracking-widest">{{ form.errors.name }}</div>
                                        </div>

                                        <div>
                                            <InputLabel for="parent_id" value="Rodzic" class="text-[10px] font-black uppercase tracking-widest text-gray-400 mb-2" />
                                            <Multiselect
                                                v-model="form.parent_id"
                                                :options="allCategories"
                                                placeholder="Wybierz kategorię nadrzędną"
                                                track-by="id"
                                                class="custom-multiselect"
                                            >
                                                <template #option="slotProps">
                                                    <div class="font-bold">{{ getCategoryLabel(slotProps.option) }}</div>
                                                </template>
                                                <template #singleLabel="slotProps">
                                                    <div class="font-bold">{{ getCategoryLabel(slotProps.option) }}</div>
                                                </template>
                                                <template #noResult>
                                                    Brak wyników.
                                                </template>
                                            </Multiselect>
                                            <div v-if="form.errors.parent_id" class="text-red-500 text-xs mt-1 font-bold uppercase tracking-widest">{{ form.errors.parent_id }}</div>
                                        </div>
                                    </div>

                                    <p class="text-[9px] text-blue-400 font-bold uppercase leading-relaxed italic">
                                        * Zmiana kategorii nadrzędnej wpłynie na pozycję w drzewie oraz na wszystkie podkategorie.<br>
                                        * Pozostaw puste, aby uczynić tę kategorię branżą (poziom główny).
                                    </p>
                                </div>
                            </div>

                            <!-- Right Column: Translations -->
                            <div class="space-y-6">
                                <div class="flex items-center gap-2 mb-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-4 h-4 text-[#0A2C5C]">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="m10.5 21 5.25-11.25L21 21m-9-3h7.5M3 5.621a48.474 48.474 0 0 1 6-.371m0 0c1.12 0 2.233.038 3.334.114M9 5.25V3m3.334 2.364C13.287 7.89 12.135 10.107 10.5 12.225c-1.138-1.457-1.99-3.044-2.433-4.708m1.433 4.708L3 21m3-3 3.384-3.571" />
                                    </svg>
                                    <p class="text-[10px] font-black text-[#0A2C5C] uppercase tracking-widest">Tłumaczenia tytułu</p>
                                </div>

                                <!-- Tabs -->
                                <div class="flex flex-wrap items-center gap-2 mb-4 bg-gray-50 p-2 rounded-2xl border border-gray-100">
                                    <div class="flex flex-wrap gap-2 flex-grow">
                                        <button
                                            v-for="lang in sortedLanguages"
                                            :key="lang"
                                            type="button"
                                            @click="activeTab = lang"
                                            class="px-4 py-2 rounded-xl text-[10px] font-black uppercase tracking-widest transition-all"
                                            :class="[
                                                activeTab === lang
                                                    ? 'bg-white shadow-sm text-blue-500 border border-gray-100'
                                                    : 'text-gray-400 hover:text-gray-600'
                                            ]"
                                        >
                                            <span class="flex items-center gap-2">
                                                {{ lang }}
                                                <div v-if="hasErrorInTab(lang)" class="w-1.5 h-1.5 bg-red-500 rounded-full animate-pulse"></div>
                                            </span>
                                        </button>
                                    </div>

                                    <div class="flex items-center gap-1 px-2 border-l border-gray-200 ml-2">
                                        <button
                                            type="button"
                                            @click="goToPrevTab"
                                            :disabled="sortedLanguages.indexOf(activeTab) === 0"
                                            class="p-2 text-gray-400 hover:text-blue-500 disabled:opacity-20 transition-colors"
                                            title="Poprzedni język"
                                        >
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="3" stroke="currentColor" class="w-4 h-4">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5" />
                                            </svg>
                                        </button>
                                        <button
                                            type="button"
                                            @click="goToNextTab"
                                            :disabled="sortedLanguages.indexOf(activeTab) === sortedLanguages.length - 1"
                                            class="p-2 text-gray-400 hover:text-blue-500 disabled:opacity-20 transition-colors"
                                            title="Następny język"
                                        >
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="3" stroke="currentColor" class="w-4 h-4">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                                            </svg>
                                        </button>
                                    </div>
                                </div>

                                <!-- Tab Content -->
                                <div v-for="lang in sortedLanguages" :key="lang" v-show="activeTab === lang" class="space-y-6 animate-in fade-in slide-in-from-bottom-2 duration-300">
                                    <div class="p-8 bg-gray-50/50 rounded-[2rem] border border-gray-100 space-y-6">
                                        <div>
                                            <div class="flex items-center justify-between mb-3 ml-1">
                                                <InputLabel :for="'title_' + lang" :value="'Tytuł (' + lang.toUpperCase() + ')'" class="text-[9px] font-bold uppercase text-gray-400 ml-1" />
                                                <div class="flex items-center gap-3">
                                                    <button
                                                        type="button"
                                                        @click="goToNextEmptyTab"
                                                        class="text-[9px] font-black text-blue-500 uppercase tracking-tighter hover:text-blue-600 flex items-center gap-1 bg-blue-50 px-2 py-1 rounded transition-colors"
                                                    >
                                                        Następny pusty
                                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="3" stroke="currentColor" class="w-3 h-3">
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="M11.25 4.5l7.5 7.5-7.5 7.5M4.5 4.5l7.5 7.5-7.5 7.5" />
                                                        </svg>
                                                    </button>
                                                    <span v-if="lang === 'pl'" class="px-2 py-0.5 bg-blue-50 text-blue-500 text-[8px] font-black rounded uppercase tracking-tighter">Główny język</span>
                                                </div>
                                            </div>
                                            <TextInput
                                                :id="'title_' + lang"
                                                v-model="form.title[lang]"
                                                type="text"
                                                class="block w-full bg-white border-none focus:ring-2 focus:ring-blue-500/20 text-xs font-black uppercase tracking-tight px-6 py-4 rounded-2xl"
                                                :placeholder="'Tytuł w języku ' + lang.toUpperCase()"
                                            />
                                            <div v-if="form.errors['title.' + lang]" class="text-red-500 text-[9px] font-bold uppercase tracking-widest mt-2 ml-1">{{ form.errors['title.' + lang] }}</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Submit Section -->
                        <div class="pt-8 border-t border-gray-50 flex justify-end gap-4">
                            <Link :href="route('admin.categories.index')" class="px-10 py-5 bg-gray-100 hover:bg-gray-200 text-gray-500 rounded-3xl font-black text-xs uppercase tracking-widest transition-all">
                                Anuluj
                            </Link>
                            <PrimaryButton
                                class="px-12 py-5 bg-[#00AEEF] hover:bg-[#0096ce] text-white rounded-3xl font-black text-xs uppercase tracking-[0.2em] transition-all shadow-xl shadow-blue-200 active:scale-95"
                                :disabled="form.processing"
                            >
                                <span v-if="form.processing" class="flex items-center gap-2">
                                    <svg class="animate-spin h-4 w-4 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                        <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                                        <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                                    </svg>
                                    Przetwarzanie...
                                </span>
                                <span v-else>Zapisz zmiany</span>
                            </PrimaryButton>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </AppLayout>
</template>

<style src="vue-multiselect/dist/vue-multiselect.css"></style>
<style lang="scss">
.custom-multiselect {
    .multiselect {
        &__tags {
            @apply rounded-2xl border-none bg-white py-3 px-5 min-h-[56px] flex items-center transition-all shadow-sm;
        }
        &__placeholder { @apply text-sm text-gray-400 pt-0 mb-0 font-bold uppercase tracking-widest text-[10px]; }
        &__single { @apply bg-transparent text-sm text-[#0A2C5C] pt-0 mb-0 font-black uppercase tracking-tight text-xs; }
        &__input { @apply bg-transparent text-sm pt-0 mb-0 font-bold; }
        &__content-wrapper { @apply rounded-2xl mt-2 border-none shadow-2xl overflow-hidden bg-white; }
        &__option {
            @apply text-[10px] py-4 px-6 font-black uppercase tracking-widest border-b border-gray-50 last:border-none;
            &--highlight { @apply bg-[#0A2C5C] text-white; }
            &--selected { @apply bg-blue-50 text-[#0A2C5C]; }
        }
    }
}
.animate-in {
    animation-name: animate-in;
    animation-duration: 0.3s;
    animation-timing-function: ease-out;
    animation-fill-mode: both;
}

@keyframes animate-in {
    from {
        opacity: 0;
        transform: translateY(10px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}
</style>
