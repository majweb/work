<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import { useForm, usePage, Link } from '@inertiajs/vue3';
import { computed } from 'vue';
import InputLabel from '@/Components/InputLabel.vue';
import TextInput from '@/Components/TextInput.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import SecondaryButton from '@/Components/SecondaryButton.vue';

const props = defineProps({
    country: Object,
    languages: Array,
    continents: Object,
});

const form = useForm({
    countryCode: props.country.countryCode || '',
    lang: props.country.lang || '',
    name: props.country.name || {},
    continent: props.country.continent || {},
    selectedContinent: '',
});

// Ensure all languages have at least empty strings
props.languages.forEach(lang => {
    if (!form.name[lang]) form.name[lang] = '';
    if (!form.continent[lang]) form.continent[lang] = '';
});

const handleContinentChange = () => {
    if (form.selectedContinent && props.continents[form.selectedContinent]) {
        const translations = props.continents[form.selectedContinent];
        props.languages.forEach(lang => {
            if (translations[lang]) {
                form.continent[lang] = translations[lang];
            } else if (translations['en']) {
                form.continent[lang] = translations['en'];
            }
        });
    }
};

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

const submit = () => {
    form.put(route('admin.countries.update', props.country.id));
};
</script>

<template>
    <AppLayout title="Edytuj kraj">
        <div class="py-12 bg-gray-50/50 min-h-screen">
            <div class="max-w-[1600px] mx-auto sm:px-6 lg:px-8">
                <!-- Header Section -->
                <div class="bg-white rounded-[3rem] shadow-xl shadow-blue-900/5 border border-gray-100 p-10 mb-8">
                    <div class="flex flex-col md:flex-row md:items-center justify-between gap-8">
                        <div>
                            <h3 class="text-2xl font-black text-[#0A2C5C] uppercase tracking-tight">Edytuj kraj: {{ country.name.pl || country.name.en || country.countryCode }}</h3>
                            <p class="text-[10px] font-bold text-gray-400 uppercase tracking-widest mt-1">
                                Zaktualizuj dane kraju oraz jego tłumaczenia
                            </p>
                        </div>
                        <Link
                            :href="route('admin.countries.index')"
                            class="px-8 py-4 bg-gray-100 hover:bg-gray-200 text-gray-600 rounded-2xl font-black text-xs uppercase tracking-widest transition-all active:scale-95 flex items-center gap-2"
                        >
                            Powrót
                        </Link>
                    </div>
                </div>

                <div class="bg-white rounded-[3rem] shadow-xl shadow-blue-900/5 border border-gray-100 p-10">
                    <form @submit.prevent="submit" class="space-y-8">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                            <!-- Basic Info -->
                            <div class="space-y-6">
                                <div class="p-8 bg-blue-50/50 rounded-[2rem] border border-blue-100/50 space-y-6">
                                    <h4 class="text-sm font-black text-[#0A2C5C] uppercase tracking-widest flex items-center gap-3">
                                        <span class="w-8 h-8 bg-[#00AEEF] text-white rounded-xl flex items-center justify-center text-xs">01</span>
                                        Podstawowe informacje
                                    </h4>

                                    <div class="space-y-4">
                                        <div>
                                            <InputLabel for="countryCode" value="Kod kraju (np. PL, DE, GB)" class="text-[10px] font-black uppercase tracking-widest text-gray-400 mb-2 ml-1" />
                                            <TextInput
                                                id="countryCode"
                                                v-model="form.countryCode"
                                                type="text"
                                                class="block w-full !bg-white !border-none !rounded-2xl !py-4 shadow-sm focus:ring-2 focus:ring-blue-500/20 transition-all font-medium"
                                            />
                                            <div v-if="form.errors.countryCode" class="mt-2 text-xs font-bold text-red-500 uppercase tracking-wider ml-1">{{ form.errors.countryCode }}</div>
                                        </div>

                                        <div>
                                            <InputLabel for="lang" value="Kod języka (np. pl, de, en)" class="text-[10px] font-black uppercase tracking-widest text-gray-400 mb-2 ml-1" />
                                            <TextInput
                                                id="lang"
                                                v-model="form.lang"
                                                type="text"
                                                class="block w-full !bg-white !border-none !rounded-2xl !py-4 shadow-sm focus:ring-2 focus:ring-blue-500/20 transition-all font-medium"
                                            />
                                            <div v-if="form.errors.lang" class="mt-2 text-xs font-bold text-red-500 uppercase tracking-wider ml-1">{{ form.errors.lang }}</div>
                                        </div>

                                        <div>
                                            <InputLabel for="selectedContinent" value="Zmień kontynent (autouzupełnianie)" class="text-[10px] font-black uppercase tracking-widest text-gray-400 mb-2 ml-1" />
                                            <select
                                                id="selectedContinent"
                                                v-model="form.selectedContinent"
                                                @change="handleContinentChange"
                                                class="block w-full border-none rounded-2xl py-4 bg-white shadow-sm focus:ring-2 focus:ring-blue-500/20 transition-all font-medium text-sm"
                                            >
                                                <option value="">-- Wybierz kontynent --</option>
                                                <option v-for="(trans, key) in continents" :key="key" :value="key">
                                                    {{ trans.pl || trans.en || key }}
                                                </option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Translations Info -->
                            <div class="space-y-6">
                                <div class="p-8 bg-gray-50 rounded-[2rem] border border-gray-100 space-y-4">
                                    <h4 class="text-sm font-black text-[#0A2C5C] uppercase tracking-widest flex items-center gap-3">
                                        <span class="w-8 h-8 bg-gray-200 text-gray-500 rounded-xl flex items-center justify-center text-xs">i</span>
                                        Informacja o tłumaczeniach
                                    </h4>
                                    <p class="text-sm text-gray-500 leading-relaxed font-medium">
                                        Pamiętaj o zachowaniu spójności tłumaczeń we wszystkich językach.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- Translations Grid -->
                        <div class="pt-8">
                            <h4 class="text-sm font-black text-[#0A2C5C] uppercase tracking-widest flex items-center gap-3 mb-8">
                                <span class="w-8 h-8 bg-[#00AEEF] text-white rounded-xl flex items-center justify-center text-xs">02</span>
                                Tłumaczenia nazw i kontynentów
                            </h4>

                            <div class="grid grid-cols-1 lg:grid-cols-2 xl:grid-cols-3 gap-6">
                                <div v-for="lang in sortedLanguages" :key="lang"
                                     class="p-6 bg-white border border-gray-100 rounded-[2rem] shadow-sm hover:shadow-md transition-shadow space-y-4"
                                     :class="{'ring-2 ring-blue-500/10 border-blue-100': lang === 'pl' || lang === 'en'}"
                                >
                                    <div class="flex items-center justify-between mb-2">
                                        <span class="text-xs font-black uppercase tracking-[0.2em] text-[#0A2C5C] px-3 py-1 bg-gray-50 rounded-lg border border-gray-100">
                                            Język: {{ lang }}
                                        </span>
                                        <span v-if="lang === 'pl'" class="text-[8px] font-black text-blue-500 uppercase tracking-widest">Domyślny</span>
                                    </div>

                                    <div class="space-y-4">
                                        <div>
                                            <InputLabel :for="'name_' + lang" value="Nazwa kraju" class="text-[9px] font-bold uppercase tracking-widest text-gray-400 mb-1 ml-1" />
                                            <TextInput
                                                :id="'name_' + lang"
                                                v-model="form.name[lang]"
                                                type="text"
                                                class="block w-full !bg-gray-50/50 !border-gray-100 !rounded-xl !py-3 focus:!bg-white focus:ring-2 focus:ring-blue-500/10 transition-all text-sm font-semibold"
                                            />
                                            <div v-if="form.errors['name.' + lang]" class="mt-1 text-[10px] font-bold text-red-500 uppercase tracking-wider ml-1">{{ form.errors['name.' + lang] }}</div>
                                        </div>
                                        <div>
                                            <InputLabel :for="'continent_' + lang" value="Kontynent" class="text-[9px] font-bold uppercase tracking-widest text-gray-400 mb-1 ml-1" />
                                            <TextInput
                                                :id="'continent_' + lang"
                                                v-model="form.continent[lang]"
                                                type="text"
                                                class="block w-full !bg-gray-50/50 !border-gray-100 !rounded-xl !py-3 focus:!bg-white focus:ring-2 focus:ring-blue-500/10 transition-all text-sm font-semibold"
                                            />
                                            <div v-if="form.errors['continent.' + lang]" class="mt-1 text-[10px] font-bold text-red-500 uppercase tracking-wider ml-1">{{ form.errors['continent.' + lang] }}</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Form Actions -->
                        <div class="flex items-center justify-end gap-4 pt-8 border-t border-gray-50">
                            <SecondaryButton @click="$event.preventDefault(); $inertia.visit(route('admin.countries.index'))" class="!rounded-2xl !px-10 !py-4 font-black text-xs uppercase tracking-widest">
                                Anuluj
                            </SecondaryButton>
                            <PrimaryButton
                                class="!rounded-2xl !px-12 !py-4 !bg-[#00AEEF] hover:!bg-[#0096ce] font-black text-xs uppercase tracking-widest shadow-lg shadow-blue-200"
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
