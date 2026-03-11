<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import { useForm, usePage, Link } from '@inertiajs/vue3';
import { computed } from 'vue';
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
    title: props.category.title,
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
    if (!form.parent_id) {
        form.errors.parent_id = 'Wybór kategorii nadrzędnej jest wymagany.';
        return;
    }
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
                                            <InputLabel for="name" value="Nazwa (slug)" class="text-[10px] font-black uppercase tracking-widest text-gray-400 mb-2" />
                                            <TextInput
                                                id="name"
                                                v-model="form.name"
                                                type="text"
                                                class="block w-full bg-white border-none focus:ring-2 focus:ring-blue-500/20 text-xs font-black uppercase tracking-tight"
                                                placeholder="Wpisz nazwę (slug)"
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

                                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 max-h-[600px] overflow-y-auto p-6 bg-gray-50 rounded-[2rem] border border-gray-100 shadow-inner">
                                    <div v-for="lang in sortedLanguages" :key="lang" class="space-y-1">
                                        <InputLabel :for="'title_' + lang" :value="'Tytuł (' + lang.toUpperCase() + ')'" class="text-[9px] font-bold uppercase text-gray-400 ml-1" />
                                        <TextInput
                                            :id="'title_' + lang"
                                            v-model="form.title[lang]"
                                            type="text"
                                            class="block w-full bg-white border-none focus:ring-2 focus:ring-blue-500/20 text-xs font-black uppercase tracking-tight"
                                            :placeholder="'Tytuł w języku ' + lang.toUpperCase()"
                                        />
                                        <div v-if="form.errors['title.' + lang]" class="text-red-500 text-[9px] font-bold uppercase tracking-widest mt-1">{{ form.errors['title.' + lang] }}</div>
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
</style>
