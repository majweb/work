<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import InputError from '@/Components/InputError.vue';
import TipTap from '@/Components/TipTap.vue';
import { Link, useForm } from '@inertiajs/vue3';
import { computed, ref, watch } from 'vue';
import axios from 'axios';

const props = defineProps({
    audience: Array,
    categories: Array,
    languageNames: Object,
    getResponseConfigured: Boolean,
});

const MAX_OFFERS = 6;
const MAX_CATEGORIES = 6;

const form = useForm({
    subject: '',
    preheader: '',
    title: '',
    intro: '',
    content: '',
    cta_text: 'Zobacz wszystkie oferty',
    cta_url: 'https://work4you.global/projects',
    offer_ids: [],
    category_ids: [],
    // Języki, dla których powstaną szkice - domyślnie wszystkie języki subskrybentów
    locales: props.audience.map(row => row.locale),
});

const toggleCategory = (id) => {
    const index = form.category_ids.indexOf(id);
    if (index !== -1) {
        form.category_ids.splice(index, 1);
    } else if (form.category_ids.length < MAX_CATEGORIES) {
        form.category_ids.push(id);
    }
};

const toggleLocale = (locale) => {
    const index = form.locales.indexOf(locale);
    index !== -1 ? form.locales.splice(index, 1) : form.locales.push(locale);
};

const selectedAudience = computed(() => props.audience.filter(row => form.locales.includes(row.locale)));

// Wybrane oferty (pełne dane do wyświetlenia); do wysyłki idą tylko id
const selectedOffers = ref([]);
watch(selectedOffers, (offers) => { form.offer_ids = offers.map(o => o.id); }, { deep: true });

const offerSearch = ref('');
const offerResults = ref([]);
const searchingOffers = ref(false);
let searchTimer = null;

const searchOffers = () => {
    clearTimeout(searchTimer);
    searchTimer = setTimeout(async () => {
        searchingOffers.value = true;
        try {
            const { data } = await axios.get(route('admin.newsletter-campaigns.offers'), { params: { q: offerSearch.value } });
            offerResults.value = data;
        } finally {
            searchingOffers.value = false;
        }
    }, 300);
};
searchOffers();
watch(offerSearch, searchOffers);

const addOffer = (offer) => {
    if (selectedOffers.value.length >= MAX_OFFERS || selectedOffers.value.some(o => o.id === offer.id)) return;
    selectedOffers.value.push(offer);
};
const removeOffer = (id) => {
    selectedOffers.value = selectedOffers.value.filter(o => o.id !== id);
};

// Podgląd wersji polskiej w szablonie
const previewHtml = ref('');
const previewLoading = ref(false);
const previewError = ref('');
const refreshPreview = async () => {
    previewLoading.value = true;
    previewError.value = '';
    try {
        const { data } = await axios.post(route('admin.newsletter-campaigns.preview'), form.data());
        previewHtml.value = data;
    } catch (error) {
        previewError.value = 'Nie udało się przygotować podglądu. Sprawdź pola formularza.';
    } finally {
        previewLoading.value = false;
    }
};

const totalRecipients = computed(() => selectedAudience.value.reduce((sum, row) => sum + row.count, 0));

const submit = () => {
    form.post(route('admin.newsletter-campaigns.store'), { preserveScroll: true });
};

const inputClass = 'w-full px-6 py-4 bg-gray-50 border-none rounded-2xl focus:ring-2 focus:ring-blue-500/20 focus:bg-white transition-all text-sm font-medium shadow-inner';
const labelClass = 'text-[10px] font-black text-[#0A2C5C] uppercase tracking-[0.2em] mb-2 block';
const hintClass = 'text-[10px] text-gray-400 font-bold uppercase tracking-widest leading-relaxed';
</script>

<template>
    <AppLayout title="Nowa wysyłka newslettera">
        <div class="py-12 bg-gray-50/50 min-h-screen px-2 sm:px-0">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-8">
                <div class="bg-white rounded-[3rem] shadow-xl shadow-blue-900/5 border border-gray-100 p-10">
                    <Link :href="route('admin.newsletter-campaigns.index')" class="text-[10px] font-black text-gray-400 uppercase tracking-widest hover:text-[#0A2C5C]">← Wysyłki</Link>
                    <h3 class="text-2xl font-black text-[#0A2C5C] uppercase tracking-tight mt-4">Nowa wysyłka</h3>
                    <p class="text-sm text-gray-500 mt-2 max-w-3xl">
                        Napisz newsletter po polsku. Po zapisaniu zostanie przetłumaczony na języki subskrybentów,
                        a w GetResponse powstanie szkic dla każdego języka. Nic nie zostanie wysłane, dopóki nie klikniesz „Wyślij” w GetResponse.
                    </p>
                    <div v-if="!getResponseConfigured" class="mt-6 p-5 bg-red-50 border border-red-100 rounded-2xl text-sm font-medium text-red-700">
                        Brak połączenia z GetResponse (klucz <code>GETRESPONSE_API_KEY</code>). Możesz przygotować treść i podgląd, ale zapis wysyłki będzie możliwy po ustawieniu klucza.
                    </div>
                </div>

                <div class="grid grid-cols-1 xl:grid-cols-5 gap-8 items-start">
                    <!-- Formularz -->
                    <form @submit.prevent="submit" class="xl:col-span-3 bg-white rounded-[3rem] shadow-xl shadow-blue-900/5 border border-gray-100 p-10 space-y-8">
                        <div>
                            <label for="subject" :class="labelClass">Temat *</label>
                            <input id="subject" v-model="form.subject" type="text" maxlength="150" :class="inputClass" placeholder="np. Nowe oferty pracy w Niemczech">
                            <p :class="hintClass" class="mt-2">Widoczny w skrzynce odbiorcy.</p>
                            <InputError :message="form.errors.subject" class="mt-2" />
                        </div>

                        <div>
                            <label for="preheader" :class="labelClass">Zapowiedź</label>
                            <input id="preheader" v-model="form.preheader" type="text" maxlength="200" :class="inputClass" placeholder="Krótki tekst widoczny obok tematu">
                            <InputError :message="form.errors.preheader" class="mt-2" />
                        </div>

                        <div>
                            <label for="title" :class="labelClass">Nagłówek *</label>
                            <input id="title" v-model="form.title" type="text" maxlength="150" :class="inputClass" placeholder="Duży tytuł w granatowym pasie">
                            <InputError :message="form.errors.title" class="mt-2" />
                        </div>

                        <div>
                            <label for="intro" :class="labelClass">Wstęp</label>
                            <textarea id="intro" v-model="form.intro" rows="2" maxlength="500" :class="inputClass" placeholder="Jedno-dwa zdania pod nagłówkiem"></textarea>
                            <InputError :message="form.errors.intro" class="mt-2" />
                        </div>

                        <div>
                            <label :class="labelClass">Treść *</label>
                            <TipTap v-model="form.content" />
                            <InputError :message="form.errors.content" class="mt-2" />
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label for="cta_text" :class="labelClass">Tekst przycisku</label>
                                <input id="cta_text" v-model="form.cta_text" type="text" maxlength="60" :class="inputClass">
                                <InputError :message="form.errors.cta_text" class="mt-2" />
                            </div>
                            <div>
                                <label for="cta_url" :class="labelClass">Adres przycisku</label>
                                <input id="cta_url" v-model="form.cta_url" type="url" :class="inputClass" placeholder="https://work4you.global/...">
                                <InputError :message="form.errors.cta_url" class="mt-2" />
                            </div>
                        </div>
                        <p :class="hintClass" class="-mt-4">Zostaw oba pola puste, jeśli mail ma być bez przycisku.</p>

                        <!-- Polecane oferty -->
                        <div>
                            <label for="offer-search" :class="labelClass">Polecane oferty (opcjonalnie, max {{ MAX_OFFERS }})</label>
                            <div v-if="selectedOffers.length" class="space-y-2 mb-4">
                                <div v-for="offer in selectedOffers" :key="offer.id" class="flex items-center justify-between gap-4 p-4 bg-blue-50/60 border border-blue-100 rounded-2xl">
                                    <div class="min-w-0">
                                        <p class="text-sm font-bold text-[#0A2C5C] truncate">#{{ offer.id }} {{ offer.title }}</p>
                                        <p class="text-xs text-gray-500 truncate">{{ offer.location }} · {{ offer.salary }}</p>
                                    </div>
                                    <button type="button" @click="removeOffer(offer.id)" class="text-[10px] font-black uppercase tracking-widest text-red-500 hover:text-red-700">Usuń</button>
                                </div>
                            </div>
                            <input id="offer-search" v-model="offerSearch" type="search" :class="inputClass" placeholder="Szukaj po numerze, stanowisku lub mieście">
                            <div class="mt-3 max-h-64 overflow-y-auto space-y-1">
                                <p v-if="searchingOffers" class="text-xs text-gray-400 px-2">Szukam…</p>
                                <button
                                    v-for="offer in offerResults"
                                    :key="offer.id"
                                    type="button"
                                    @click="addOffer(offer)"
                                    :disabled="selectedOffers.length >= MAX_OFFERS || selectedOffers.some(o => o.id === offer.id)"
                                    class="w-full text-left p-3 rounded-xl hover:bg-gray-50 disabled:opacity-40 disabled:cursor-not-allowed"
                                >
                                    <span class="text-sm font-bold text-[#0A2C5C]">#{{ offer.id }} {{ offer.title }}</span>
                                    <span class="block text-xs text-gray-500">{{ offer.location }} · {{ offer.salary }}</span>
                                </button>
                                <p v-if="!searchingOffers && !offerResults.length" class="text-xs text-gray-400 px-2">Brak aktywnych ofert dla tego wyszukiwania.</p>
                            </div>
                            <InputError :message="form.errors.offer_ids" class="mt-2" />
                        </div>

                        <!-- Polecane branże -->
                        <div>
                            <p :class="labelClass">Polecane branże (opcjonalnie, max {{ MAX_CATEGORIES }})</p>
                            <p :class="hintClass" class="mb-3">W mailu jako przyciski z nazwą branży w języku odbiorcy, prowadzące do ofert z tej branży.</p>
                            <div class="flex flex-wrap gap-2">
                                <button
                                    v-for="category in categories"
                                    :key="category.id"
                                    type="button"
                                    @click="toggleCategory(category.id)"
                                    :disabled="!form.category_ids.includes(category.id) && form.category_ids.length >= MAX_CATEGORIES"
                                    class="px-4 py-2 rounded-xl text-xs font-bold transition-colors border disabled:opacity-40 disabled:cursor-not-allowed"
                                    :class="form.category_ids.includes(category.id)
                                        ? 'bg-[#0A2C5C] border-[#0A2C5C] text-white'
                                        : 'bg-gray-50 border-gray-100 text-[#0A2C5C] hover:border-[#329CD1]'"
                                >
                                    {{ category.name }}
                                </button>
                            </div>
                            <InputError :message="form.errors.category_ids" class="mt-2" />
                        </div>

                        <!-- Podsumowanie i zapis -->
                        <div class="border-t border-gray-50 pt-8 space-y-4">
                            <p :class="labelClass" class="!mb-0">Szkice dla języków</p>
                            <p class="text-sm text-gray-600">
                                Powstanie <strong>{{ selectedAudience.length }}</strong> {{ selectedAudience.length === 1 ? 'szkic' : 'szkiców' }} dla <strong>{{ totalRecipients }}</strong> subskrybentów.
                                Kliknij język, aby go pominąć lub dodać.
                            </p>
                            <div class="flex flex-wrap gap-2">
                                <button
                                    v-for="row in audience"
                                    :key="row.locale"
                                    type="button"
                                    @click="toggleLocale(row.locale)"
                                    class="px-3 py-1.5 rounded-xl text-xs font-bold border transition-colors"
                                    :class="form.locales.includes(row.locale)
                                        ? 'bg-[#0A2C5C] border-[#0A2C5C] text-white'
                                        : 'bg-white border-gray-200 text-gray-400 line-through'"
                                >
                                    {{ languageNames[row.locale] || row.locale }} · {{ row.count }}
                                </button>
                            </div>
                            <div class="flex gap-4 text-[10px] font-black uppercase tracking-widest">
                                <button type="button" class="text-[#0A2C5C] hover:underline" @click="form.locales = audience.map(row => row.locale)">Zaznacz wszystkie</button>
                                <button type="button" class="text-gray-400 hover:underline" @click="form.locales = []">Odznacz wszystkie</button>
                            </div>
                            <InputError :message="form.errors.locales" class="mt-2" />
                            <div class="flex flex-wrap gap-4 pt-2">
                                <button type="button" @click="refreshPreview" class="px-8 py-4 border-2 border-gray-100 hover:bg-gray-50 text-[#0A2C5C] rounded-2xl font-black text-[10px] uppercase tracking-[0.2em] transition-all active:scale-95">
                                    Odśwież podgląd
                                </button>
                                <button
                                    type="submit"
                                    :disabled="form.processing || !getResponseConfigured || !selectedAudience.length"
                                    class="px-8 py-4 bg-[#0A2C5C] hover:bg-[#0D356D] text-white rounded-2xl font-black text-[10px] uppercase tracking-[0.2em] transition-all shadow-lg active:scale-95 disabled:opacity-50 disabled:cursor-not-allowed"
                                >
                                    Przygotuj tłumaczenia i szkice
                                </button>
                            </div>
                        </div>
                    </form>

                    <!-- Podgląd -->
                    <div class="xl:col-span-2 bg-white rounded-[3rem] shadow-xl shadow-blue-900/5 border border-gray-100 p-6 xl:sticky xl:top-6">
                        <div class="flex items-center justify-between px-4 pb-4">
                            <p :class="labelClass" class="!mb-0">Podgląd (polski)</p>
                            <span v-if="previewLoading" class="text-xs text-gray-400">Ładuję…</span>
                        </div>
                        <p v-if="previewError" class="px-4 pb-4 text-sm text-red-600">{{ previewError }}</p>
                        <iframe
                            v-if="previewHtml"
                            :srcdoc="previewHtml"
                            title="Podgląd newslettera"
                            class="w-full h-[760px] rounded-2xl border border-gray-100 bg-[#f2f5f9]"
                        ></iframe>
                        <div v-else class="h-[300px] flex items-center justify-center text-center text-sm text-gray-400 px-8 bg-gray-50 rounded-2xl">
                            Kliknij „Odśwież podgląd”, aby zobaczyć newsletter w szablonie.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </AppLayout>
</template>
