<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import { useForm, Link } from '@inertiajs/vue3';
import { ref, computed } from 'vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import InputLabel from '@/Components/InputLabel.vue';
import InputError from '@/Components/InputError.vue';
import TextInput from '@/Components/TextInput.vue';

const props = defineProps({
    agreement: Object,
    agreements: Array,
    langs: Array,
    types: Array,
});

const form = useForm({
    type: props.agreement.type,
    parent_id: props.agreement.parent_id,
    description: props.langs.reduce((acc, lang) => {
        acc[lang] = props.agreement.description[lang] || '';
        return acc;
    }, {}),
    help_text: props.langs.reduce((acc, lang) => {
        acc[lang] = (props.agreement.help_text && props.agreement.help_text[lang]) || '';
        return acc;
    }, {}),
    is_active: !!props.agreement.is_active,
    is_required: !!props.agreement.is_required,
});

const activeTab = ref(props.langs[0] || 'pl');

const sortedLanguages = computed(() => {
    const langs = [...props.langs];
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
    // Szukamy od następnego taba do końca
    for (let i = currentIndex + 1; i < sortedLanguages.value.length; i++) {
        const lang = sortedLanguages.value[i];
        if (!form.description[lang]) {
            activeTab.value = lang;
            return;
        }
    }
    // Jeśli nie znaleziono, szukamy od początku do aktualnego taba
    for (let i = 0; i < currentIndex; i++) {
        const lang = sortedLanguages.value[i];
        if (!form.description[lang]) {
            activeTab.value = lang;
            return;
        }
    }
};

const hasErrorInTab = (lang) => {
    return !!(form.errors['description.' + lang] || form.errors['help_text.' + lang]);
};

const isHelpTextStarted = computed(() => {
    return Object.values(form.help_text).some(text => text && text.trim() !== '');
});

const typeLabels = {
    'newsletter': 'Newsletter',
    'contact_form': 'Formularz kontaktowy',
    'app_logged_in': 'Aplikacja (zalogowany)',
    'app_not_logged_in': 'Aplikacja (niezalogowany)',
    'tickets': 'Zgłoszenia',
    'firm_registration': 'Rejestracja firmy',
    'worker_registration': 'Rejestracja pracownika',
    'cookie': 'Ciasteczka'
};

const submit = () => {
    form.put(route('admin.agreements.update', props.agreement.id));
};
</script>

<template>
    <AppLayout title="Edytuj zgodę">
        <div class="py-12 bg-gray-50/50 min-h-screen px-2 sm:px-0">
            <div class="max-w-[1200px] mx-auto sm:px-6 lg:px-8">
                <!-- Header Section -->
                <div class="bg-white rounded-[3rem] shadow-xl shadow-blue-900/5 border border-gray-100 p-10 mb-8">
                    <div class="flex flex-col md:flex-row md:items-center justify-between gap-8">
                        <div>
                            <h3 class="text-2xl font-black text-[#0A2C5C] uppercase tracking-tight">Edytuj zgodę</h3>
                            <p class="text-[10px] font-bold text-gray-400 uppercase tracking-widest mt-1">
                                Edytujesz treść zgody ID: #{{ agreement.id }}
                            </p>
                        </div>

                        <Link
                            :href="route('admin.agreements.index')"
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
                                    <InputLabel for="type" value="Typ formularza" class="text-[10px] font-black text-[#0A2C5C] uppercase tracking-widest mb-3 ml-1" />
                                    <select
                                        id="type"
                                        v-model="form.type"
                                        class="w-full px-6 py-4 bg-gray-50 border-none rounded-2xl text-sm focus:ring-2 focus:ring-blue-500/20 focus:bg-white transition-all font-black uppercase tracking-tight"
                                    >
                                        <option value="" disabled>Wybierz typ...</option>
                                        <option v-for="type in types" :key="type" :value="type">
                                            {{ typeLabels[type] || type }}
                                        </option>
                                    </select>
                                    <div v-if="form.errors.type" class="text-red-500 text-[10px] font-bold uppercase mt-2 ml-1">{{ form.errors.type }}</div>
                                </div>

                                <div>
                                    <InputLabel for="parent_id" value="Zgoda nadrzędna" class="text-[10px] font-black text-[#0A2C5C] uppercase tracking-widest mb-3 ml-1" />
                                    <select
                                        id="parent_id"
                                        v-model="form.parent_id"
                                        class="w-full px-6 py-4 bg-gray-50 border-none rounded-2xl text-sm focus:ring-2 focus:ring-blue-500/20 focus:bg-white transition-all font-black uppercase tracking-tight"
                                    >
                                        <option :value="null">Brak (zgoda główna)</option>
                                        <option v-for="parent in agreements" :key="parent.id" :value="parent.id">
                                            #{{ parent.id }} - {{ parent.description['pl'] || parent.description[langs[0]] }} ({{ typeLabels[parent.type] || parent.type }})
                                        </option>
                                    </select>
                                    <div v-if="form.errors.parent_id" class="text-red-500 text-[10px] font-bold uppercase mt-2 ml-1">{{ form.errors.parent_id }}</div>
                                </div>

                                <div class="pt-4 flex flex-col gap-6">
                                    <label class="flex items-center cursor-pointer group ml-1">
                                        <div class="relative">
                                            <input type="checkbox" v-model="form.is_active" class="sr-only">
                                            <div class="w-14 h-8 bg-gray-100 rounded-full transition-colors group-hover:bg-gray-300" :class="{'!bg-[#00AEEF]': form.is_active}"></div>
                                            <div class="absolute left-1 top-1 bg-white w-6 h-6 rounded-full transition-transform shadow-sm" :class="{'translate-x-6': form.is_active}"></div>
                                        </div>
                                        <div class="ml-4">
                                            <span class="text-[10px] font-black uppercase tracking-widest transition-colors" :class="form.is_active ? 'text-[#00AEEF]' : 'text-[#0A2C5C]'">Status: {{ form.is_active ? 'Aktywna' : 'Nieaktywna' }}</span>
                                            <p class="text-[9px] font-bold text-gray-400 uppercase tracking-tight">Decyduje o widoczności zgody w formularzu</p>
                                        </div>
                                    </label>

                                    <label class="flex items-center cursor-pointer group ml-1">
                                        <div class="relative">
                                            <input type="checkbox" v-model="form.is_required" class="sr-only">
                                            <div class="w-14 h-8 bg-gray-100 rounded-full transition-colors group-hover:bg-gray-300" :class="{'!bg-red-500': form.is_required}"></div>
                                            <div class="absolute left-1 top-1 bg-white w-6 h-6 rounded-full transition-transform shadow-sm" :class="{'translate-x-6': form.is_required}"></div>
                                        </div>
                                        <div class="ml-4">
                                            <span class="text-[10px] font-black uppercase tracking-widest transition-colors" :class="form.is_required ? 'text-red-500' : 'text-[#0A2C5C]'">Wymagana: {{ form.is_required ? 'Tak' : 'Nie' }}</span>
                                            <p class="text-[9px] font-bold text-gray-400 uppercase tracking-tight">Decyduje czy zaznaczenie zgody jest obowiązkowe</p>
                                        </div>
                                    </label>
                                </div>
                            </div>

                            <!-- Right Column: Translations -->
                            <div class="space-y-6">
                                <div class="flex items-center gap-2 mb-2 ml-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-4 h-4 text-[#0A2C5C]">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="m10.5 21 5.25-11.25L21 21m-9-3h7.5M3 5.621a48.474 48.474 0 0 1 6-.371m0 0c1.12 0 2.233.038 3.334.114M9 5.25V3m3.334 2.364C13.287 7.89 12.135 10.107 10.5 12.225c-1.138-1.457-1.99-3.044-2.433-4.708m1.433 4.708L3 21m3-3 3.384-3.571" />
                                    </svg>
                                    <p class="text-[10px] font-black text-[#0A2C5C] uppercase tracking-widest">Tłumaczenia treści zgody</p>
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
                                                <div v-else-if="!form.description[lang] || (isHelpTextStarted && !form.help_text[lang])" class="w-1 h-1 bg-red-400 rounded-full"></div>
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
                                                <InputLabel :for="'description_' + lang" :value="'Treść zgody (' + lang.toUpperCase() + ')'" class="text-[10px] font-black text-[#0A2C5C] uppercase tracking-widest" />
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
                                            <textarea
                                                :id="'description_' + lang"
                                                v-model="form.description[lang]"
                                                rows="4"
                                                class="w-full px-6 py-4 bg-white border-none rounded-2xl text-sm focus:ring-2 focus:ring-blue-500/20 transition-all font-medium leading-relaxed"
                                                :placeholder="'Wpisz treść zgody w języku ' + lang.toUpperCase()"
                                            ></textarea>
                                            <div v-if="form.errors['description.' + lang]" class="text-red-500 text-[10px] font-bold uppercase mt-2 ml-1">{{ form.errors['description.' + lang] }}</div>
                                        </div>

                                        <div v-if="!form.parent_id">
                                            <div class="flex items-center justify-between mb-3 ml-1">
                                                <InputLabel :for="'help_text_' + lang" :value="'Tekst pomocniczy (' + lang.toUpperCase() + ')'" class="text-[10px] font-black text-[#0A2C5C] uppercase tracking-widest" />
                                            </div>
                                            <textarea
                                                :id="'help_text_' + lang"
                                                v-model="form.help_text[lang]"
                                                rows="4"
                                                class="w-full px-6 py-4 bg-white border-none rounded-2xl text-sm focus:ring-2 focus:ring-blue-500/20 transition-all font-medium leading-relaxed"
                                                :placeholder="'Wpisz tekst pomocniczy w języku ' + lang.toUpperCase()"
                                            ></textarea>
                                            <div v-if="form.errors['help_text.' + lang]" class="text-red-500 text-[10px] font-bold uppercase mt-2 ml-1">{{ form.errors['help_text.' + lang] }}</div>
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
                                <span v-if="!form.processing">Zapisz zmiany</span>
                                <span v-else>Przetwarzanie...</span>
                            </PrimaryButton>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </AppLayout>
</template>

<style lang="scss">
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
