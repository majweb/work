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
    detailProject: Object,
    categories: Array,
    languages: Array,
});

const form = useForm({
    name: props.detailProject.name,
    categories: props.detailProject.category_ids,
});

const activeTab = ref('pl');

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
        if (!form.name[lang]) {
            activeTab.value = lang;
            return;
        }
    }
    for (let i = 0; i < currentIndex; i++) {
        const lang = sortedLanguages.value[i];
        if (!form.name[lang]) {
            activeTab.value = lang;
            return;
        }
    }
};

const hasErrorInTab = (lang) => {
    return !!form.errors['name.' + lang];
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
    form.put(route('admin.detail-projects.update', props.detailProject.id));
};
</script>

<template>
    <AppLayout title="Edytuj obowiązek">
        <div class="py-12 bg-gray-50/50 min-h-screen">
            <div class="w-full mx-auto sm:px-6 lg:px-8">
                <!-- Header Section -->
                <div class="bg-white rounded-[3rem] shadow-xl shadow-blue-900/5 border border-gray-100 p-10 mb-8">
                    <div class="flex flex-col md:flex-row md:items-center justify-between gap-8">
                        <div>
                            <h3 class="text-2xl font-black text-[#0A2C5C] uppercase tracking-tight">Edytuj obowiązek</h3>
                            <p class="text-[10px] font-bold text-gray-400 uppercase tracking-widest mt-1">
                                Zaktualizuj obowiązek i jego kategorie</p>
                        </div>

                        <Link
                            :href="route('admin.detail-projects.index')"
                            class="px-8 py-4 bg-white border-2 border-gray-100 hover:border-blue-500 hover:text-blue-500 text-gray-400 rounded-2xl font-black text-xs uppercase tracking-widest transition-all active:scale-95 flex items-center gap-2"
                        >
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="3" stroke="currentColor" class="w-4 h-4">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5L3 12m0 0l7.5-7.5M3 12h18" />
                            </svg>
                            Powrót
                        </Link>
                    </div>
                </div>

                <div class="bg-white rounded-[3rem] shadow-xl shadow-blue-900/5 border border-gray-100 overflow-hidden">
                    <form @submit.prevent="submit" class="p-10">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-10">
                            <!-- Left Column: Basic Info -->
                            <div class="space-y-8">
                                <div>
                                    <InputLabel for="categories" value="Kategorie" class="text-[10px] font-black text-[#0A2C5C] uppercase tracking-widest mb-3 ml-1" />
                                    <Multiselect
                                        v-model="form.categories"
                                        :options="categories.map(c => c.id)"
                                        :multiple="true"
                                        :close-on-select="false"
                                        :clear-on-select="false"
                                        :preserve-search="true"
                                        placeholder="Wybierz kategorie"
                                        :custom-label="(id) => getTranslation(categories.find(c => c.id === id)?.title)"
                                        :taggable="false"
                                        select-label=""
                                        deselect-label=""
                                        selected-label=""
                                        class="custom-multiselect"
                                    />
                                    <div v-if="form.errors.categories" class="text-red-500 text-[10px] font-bold uppercase mt-2 ml-1 italic">{{ form.errors.categories }}</div>
                                </div>
                            </div>

                            <!-- Right Column: Translations -->
                            <div class="space-y-6">
                                <div class="flex items-center gap-2 mb-2 ml-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-4 h-4 text-[#0A2C5C]">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="m10.5 21 5.25-11.25L21 21m-9-3h7.5M3 5.621a48.474 48.474 0 0 1 6-.371m0 0c1.12 0 2.233.038 3.334.114M9 5.25V3m3.334 2.364C13.287 7.89 12.135 10.107 10.5 12.225c-1.138-1.457-1.99-3.044-2.433-4.708m1.433 4.708L3 21m3-3 3.384-3.571" />
                                    </svg>
                                    <p class="text-[10px] font-black text-[#0A2C5C] uppercase tracking-widest">Tłumaczenia nazwy</p>
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
                                                <InputLabel :for="'name_' + lang" :value="'Nazwa wyświetlana (' + lang.toUpperCase() + ')'" class="text-[10px] font-black text-[#0A2C5C] uppercase tracking-widest" />
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
                                                :id="'name_' + lang"
                                                v-model="form.name[lang]"
                                                type="text"
                                                class="w-full px-6 py-4 bg-white border-none rounded-2xl text-sm focus:ring-2 focus:ring-blue-500/20 transition-all font-medium"
                                                :placeholder="'Wpisz nazwę w języku ' + lang.toUpperCase()"
                                            />
                                            <div v-if="form.errors['name.' + lang]" class="text-red-500 text-[10px] font-bold uppercase mt-2 ml-1">{{ form.errors['name.' + lang] }}</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="mt-12 pt-10 border-t border-gray-50 flex justify-end">
                            <PrimaryButton
                                class="px-12 py-5 bg-[#00AEEF] hover:bg-[#0096ce] text-white rounded-2xl font-black text-xs uppercase tracking-widest transition-all active:scale-95 shadow-lg shadow-blue-200 disabled:opacity-50"
                                :class="{ 'opacity-25': form.processing }"
                                :disabled="form.processing"
                            >
                                <span v-if="!form.processing">Zaktualizuj obowiązek</span>
                                <span v-else>Przetwarzanie...</span>
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
            @apply rounded-2xl border-none bg-gray-50 py-3 px-6 min-h-[56px] flex items-center transition-all shadow-sm;
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
        &__tag {
            @apply bg-[#00AEEF] text-white rounded-lg text-[10px] font-black uppercase tracking-widest px-3 py-1 mr-2 mb-1 flex items-center gap-1;
            &-icon {
                @apply relative top-0 right-0 ml-1 p-0 bg-transparent text-white hover:bg-white/20 rounded-md transition-all;
                &:after { @apply text-white text-[10px]; }
            }
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
