<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import { useForm, usePage, Link } from '@inertiajs/vue3';
import InputLabel from "@/Components/InputLabel.vue";
import InputError from "@/Components/InputError.vue";
import PrimaryButton from "@/Components/PrimaryButton.vue";
import Checkbox from "@/Components/Checkbox.vue";
import SpinnerAction from "@/Components/SpinnerAction.vue";
import { ref, watch } from "vue";
import __ from "@/lang.js";
import multiselect from "vue-multiselect";
import axios from "axios";
import Tiptap from "@/Components/TipTap.vue";

const props = defineProps({
    categories: Array,
    countries: Array
});

// ===============================
// 🔵 MAPBOX AUTOCOMPLETE
// ===============================
const MAPBOX_TOKEN = usePage().props.mapboxToken;

// tekst wpisywany w pole adresu
const addressQuery = ref("");
const suggestions = ref([]);
let searchTimeout = null;

const fetchSuggestions = async () => {
    if (!addressQuery.value) {
        suggestions.value = [];
        return;
    }

    clearTimeout(searchTimeout);

    searchTimeout = setTimeout(async () => {
        const url =
            `https://api.mapbox.com/geocoding/v5/mapbox.places/${encodeURIComponent(addressQuery.value)}.json?` +
            new URLSearchParams({
                access_token: MAPBOX_TOKEN,
                autocomplete: true,
                limit: 5,
                types: "address,place",
                language: "pl"

            });

        const res = await fetch(url);
        const data = await res.json();
        suggestions.value = data.features || [];
    }, 300);
};

const findCountryInOptions = (isoCode) => {
    for (const group of props.countries) {
        const match = group.elements.find(el => el.countryCode.toLowerCase() === isoCode.toLowerCase());
        if (match) return match;
    }
    return null;
};

// po kliknięciu adresu
const selectSuggestion = (item) => {
    const currentLocale = usePage().props.locale;
    addressQuery.value = item.place_name;
    suggestions.value = [];


    const ctx = item.context || [];

    // obiekt kraju (ma text + short_code)
    const countryObj = ctx.find(c => c.id.startsWith("country"));
    const postcodeObj = ctx.find(c => c.id.startsWith("postcode"));

    // ⭐ POPRAWKA: Wyciąganie numeru domu
    // Mapbox może zwrócić numer w polu "address" lub na początku place_name
    let streetWithNumber = item.text || "";

    if (item.address) {
        // Jeśli Mapbox zwraca numer w osobnym polu "address"
        streetWithNumber = `${item.text} ${item.address}`;
    } else {
        // Próba wyciągnięcia numeru z place_name (np. "4 Furgola, Warszawa")
        const parts = item.place_name.split(',')[0].trim();
        const match = parts.match(/^(\d+[\w\-\/]*)\s+(.+)$/);

        if (match) {
            // Jeśli zaczyna się od numeru (np. "4 Furgola")
            streetWithNumber = `${match[2]} ${match[1]}`;
        } else {
            // Sprawdź czy numer jest na końcu (np. "Furgola 4")
            const endMatch = parts.match(/^(.+)\s+(\d+[\w\-\/]*)$/);
            if (endMatch) {
                streetWithNumber = parts;
            }
        }
    }

    form.address_street = streetWithNumber || null;

    form.address_city =
        ctx.find(c => c.id.startsWith("place"))?.text ||
        ctx.find(c => c.id.startsWith("locality"))?.text ||
        null;
    form.address_postcode = postcodeObj ? postcodeObj.text : "";

    // pełna nazwa kraju (np. "Polska")
    const iso = countryObj?.short_code?.toUpperCase();

// znajdź odpowiadający kraj w Multiselect
    const found = findCountryInOptions(iso);

    form.address_country = found ? found : {
        name: countryObj?.text || null,
        value: null,
        countryCode: iso,
        allTranslations: { [currentLocale]: countryObj?.text || null }
    };
    // kod ISO kraju (np. "pl", "gb", "de")
    form.country = countryObj?.short_code || null;

    // współrzędne
    form.latitude = item.center[1];
    form.longitude = item.center[0];
};
// ===============================
// 🔵 FORMULARZ
// ===============================
let serverMessage = ref(null);
let serverMessage2 = ref(null);
const optionsCategory = ref(props.categories);
const optionsSubCategory = ref([]);

const form = useForm({
    name: "",
    www: "",
    facebook_url: "",
    instagram_url: "",
    linkedin_url: "",
    x_url: "",
    tiktok_url: "",
    phone: "",
    email: "",
    description: "",
    address_street: "",
    address_city: "",
    address_country: "",
    address_postcode: "", // ⬅️ nowe pole
    country: "",          // ⬅️ NOWE – kod ISO kraju (pl, gb, it...)
    latitude: null,
    longitude: null,
    category_id: "",
    subcategory_id: "",
    active: true,
    photo: [],
    banner: [],
    iban: "",    // ⬅️ nowo dodane
    swift: "",   // ⬅️ nowo dodane
    krs: "",
    year_of_foundation: "",
    worker_count: "",
    benefit_organization: true,
});

// Ładowanie podkategorii
watch(() => form.category_id, async (value) => {
    if (value) {
        optionsSubCategory.value = (await axios.get(route("admin.getChildsCategory", value.value))).data;
    }
});

// usuwanie pliku
const removeFile = async (source, load) => {
    await axios.post('/temporary/delete', { source });
    load();
    form.photo = [];
};

const submit = () => {
    form.post(route('admin.foundations.store'), {
        preserveScroll: true,
        onSuccess: () => {
            form.reset();
            addressQuery.value = ""; // ⬅️ czyści input Mapbox
            suggestions.value = [];  // ⬅️ czyści listę podpowiedzi
        },
    });
};
</script>

<template>
    <AppLayout :title="__('translate.addFoundation')">
        <div class="py-12 bg-gray-50/50 min-h-screen">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <!-- Header Card -->
                <div class="bg-white rounded-[3rem] shadow-xl shadow-blue-900/5 border border-gray-100 p-10 mb-8">
                    <div class="flex items-center justify-between">
                        <div>
                            <h2 class="text-2xl font-black text-[#0A2C5C] uppercase tracking-tight">{{ __('translate.addFoundation') }}</h2>
                            <p class="text-[10px] font-bold text-gray-400 uppercase tracking-widest mt-1">Dodaj nową fundację do bazy danych</p>
                        </div>
                        <Link
                            :href="route('admin.foundations.index')"
                            class="inline-flex items-center px-8 py-4 bg-white border border-gray-200 rounded-2xl font-black text-[10px] text-[#0A2C5C] uppercase tracking-widest hover:bg-gray-50 transition duration-200 shadow-sm"
                        >
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18" />
                            </svg>
                            {{ __('translate.back') }}
                        </Link>
                    </div>
                </div>

                <form @submit.prevent="submit" class="space-y-8">
                <!-- Podstawowe informacje -->
                <div class="bg-white rounded-[2.5rem] shadow-xl shadow-blue-900/5 border border-gray-100 p-8 md:p-12">
                    <div class="flex items-center gap-4 mb-10">
                        <h3 class="text-[10px] font-black text-[#0A2C5C] uppercase tracking-[0.2em]">Informacje ogólne</h3>
                        <div class="h-px flex-1 bg-gray-100"></div>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                        <div class="md:col-span-2">
                            <InputLabel :value="__('translate.foundationName')" class="text-[10px] font-black text-gray-400 mb-2 uppercase tracking-widest" />
                            <input v-model="form.name" class="w-full rounded-2xl border-gray-100 focus:border-[#00a0e3] focus:ring-[#00a0e3] transition-all bg-gray-50/30 p-4" type="text">
                            <InputError :message="form.errors.name" class="mt-2" />
                        </div>

                        <div>
                            <InputLabel :value="__('translate.categoryI')" class="text-[10px] font-black text-gray-400 mb-2 uppercase tracking-widest" />
                            <multiselect
                                class="custom-multiselect"
                                track-by="value"
                                label="name"
                                v-model="form.category_id"
                                :options="optionsCategory"
                                :placeholder="__('translate.selectCategory')"
                                :selectLabel="__('translate.selectLabel')"
                                :selectGroupLabel="__('translate.selectGroupLabel')"
                                :selectedLabel="__('translate.selectedLabel')"
                                :deselectLabel="__('translate.deselectLabel')"
                            >
                                <template #noResult><span>{{ __('translate.noOptions') }}</span></template>
                                <template #noOptions><span>{{ __('translate.noResult') }}</span></template>
                            </multiselect>
                            <InputError :message="form.errors.category_id" class="mt-2" />
                        </div>

                        <div>
                            <InputLabel :value="__('translate.subcategoryI')" class="text-[10px] font-black text-gray-400 mb-2 uppercase tracking-widest" />
                            <multiselect
                                class="custom-multiselect"
                                :disabled="!form.category_id"
                                track-by="value"
                                label="name"
                                v-model="form.subcategory_id"
                                :options="optionsSubCategory"
                                :placeholder="__('translate.selectSubcategory')"
                                :selectLabel="__('translate.selectLabel')"
                                :selectGroupLabel="__('translate.selectGroupLabel')"
                                :selectedLabel="__('translate.selectedLabel')"
                                :deselectLabel="__('translate.deselectLabel')"
                            >
                                <template #noResult><span>{{ __('translate.noOptions') }}</span></template>
                                <template #noOptions><span>{{ __('translate.noResult') }}</span></template>
                            </multiselect>
                            <InputError :message="form.errors.subcategory_id" class="mt-2" />
                        </div>
                    </div>
                </div>

                <!-- Dane identyfikacyjne -->
                <div class="bg-white rounded-[2.5rem] shadow-xl shadow-blue-900/5 border border-gray-100 p-8 md:p-12">
                    <div class="flex items-center gap-4 mb-10">
                        <h3 class="text-[10px] font-black text-[#0A2C5C] uppercase tracking-[0.2em]">Dane rejestrowe i bankowe</h3>
                        <div class="h-px flex-1 bg-gray-100"></div>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                        <div>
                            <InputLabel value="IBAN" class="text-[10px] font-black text-gray-400 mb-2 uppercase tracking-widest" />
                            <input v-model="form.iban" class="w-full rounded-2xl border-gray-100 focus:border-[#00a0e3] focus:ring-[#00a0e3] transition-all bg-gray-50/30 p-4" type="text">
                            <InputError :message="form.errors.iban" class="mt-2" />
                        </div>

                        <div>
                            <InputLabel value="SWIFT" class="text-[10px] font-black text-gray-400 mb-2 uppercase tracking-widest" />
                            <input v-model="form.swift" class="w-full rounded-2xl border-gray-100 focus:border-[#00a0e3] focus:ring-[#00a0e3] transition-all bg-gray-50/30 p-4" type="text">
                            <InputError :message="form.errors.swift" class="mt-2" />
                        </div>

                        <div>
                            <InputLabel value="KRS" class="text-[10px] font-black text-gray-400 mb-2 uppercase tracking-widest" />
                            <input v-model="form.krs" class="w-full rounded-2xl border-gray-100 focus:border-[#00a0e3] focus:ring-[#00a0e3] transition-all bg-gray-50/30 p-4" type="text">
                            <InputError :message="form.errors.krs" class="mt-2" />
                        </div>

                        <div>
                            <InputLabel :value="__('translate.year_of_foundation')" class="text-[10px] font-black text-gray-400 mb-2 uppercase tracking-widest" />
                            <input v-model="form.year_of_foundation" type="number" class="w-full rounded-2xl border-gray-100 focus:border-[#00a0e3] focus:ring-[#00a0e3] transition-all bg-gray-50/30 p-4" placeholder="np. 1999">
                            <InputError :message="form.errors.year_of_foundation" class="mt-2" />
                        </div>

                        <div>
                            <InputLabel :value="__('translate.count_workers')" class="text-[10px] font-black text-gray-400 mb-2 uppercase tracking-widest" />
                            <input v-model="form.worker_count" type="number" class="w-full rounded-2xl border-gray-100 focus:border-[#00a0e3] focus:ring-[#00a0e3] transition-all bg-gray-50/30 p-4" placeholder="np. 25">
                            <InputError :message="form.errors.worker_count" class="mt-2" />
                        </div>

                        <div class="flex items-center pt-6">
                            <label class="flex items-center cursor-pointer group" for="benefit_organization">
                                <Checkbox id="benefit_organization" v-model:checked="form.benefit_organization" class="rounded-lg border-gray-200 text-[#00a0e3] shadow-sm focus:ring-[#00a0e3]" />
                                <span class="ml-3 text-[10px] font-black text-gray-500 uppercase tracking-widest group-hover:text-[#0A2C5C] transition-colors">{{ __('translate.publicBenefitOrg') }}</span>
                            </label>
                            <InputError :message="form.errors.benefit_organization" class="mt-2" />
                        </div>
                    </div>
                </div>

                <!-- Adres i lokalizacja -->
                <div class="bg-white rounded-[2.5rem] shadow-xl shadow-blue-900/5 border border-gray-100 p-8 md:p-12">
                    <div class="flex items-center gap-4 mb-10">
                        <h3 class="text-[10px] font-black text-[#0A2C5C] uppercase tracking-[0.2em]">Adres i lokalizacja</h3>
                        <div class="h-px flex-1 bg-gray-100"></div>
                    </div>

                    <div class="space-y-8">
                        <div class="relative">
                            <InputLabel :value="__('translate.addressAutocomplete')" class="text-[10px] font-black text-gray-400 mb-2 uppercase tracking-widest" />
                            <input
                                class="w-full rounded-2xl border-gray-100 focus:border-[#00a0e3] focus:ring-[#00a0e3] transition-all bg-gray-50/30 p-4 shadow-inner"
                                type="text"
                                v-model="addressQuery"
                                @input="fetchSuggestions"
                                :placeholder="__('translate.addressExample')"
                            />

                            <ul
                                v-if="suggestions.length"
                                class="absolute bg-white border border-gray-100 rounded-2xl w-full mt-2 z-50 shadow-2xl max-h-60 overflow-auto divide-y divide-gray-50"
                            >
                                <li
                                    v-for="s in suggestions"
                                    :key="s.id"
                                    class="px-6 py-4 hover:bg-gray-50 cursor-pointer transition text-sm text-gray-600"
                                    @click="selectSuggestion(s)"
                                >
                                    {{ s.place_name }}
                                </li>
                            </ul>
                            <InputError :message="form.errors.address_street" class="mt-2" />
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                            <div>
                                <InputLabel :value="__('translate.Street')" class="text-[10px] font-black text-gray-400 mb-2 uppercase tracking-widest" />
                                <input v-model="form.address_street" class="w-full rounded-2xl border-gray-100 focus:border-[#00a0e3] focus:ring-[#00a0e3] transition-all bg-gray-50/30 p-4">
                                <InputError :message="form.errors.address_street" class="mt-2" />
                            </div>
                            <div>
                                <InputLabel :value="__('translate.City')" class="text-[10px] font-black text-gray-400 mb-2 uppercase tracking-widest" />
                                <input v-model="form.address_city" class="w-full rounded-2xl border-gray-100 focus:border-[#00a0e3] focus:ring-[#00a0e3] transition-all bg-gray-50/30 p-4">
                                <InputError :message="form.errors.address_city" class="mt-2" />
                            </div>
                            <div>
                                <InputLabel :value="__('translate.Country')" class="text-[10px] font-black text-gray-400 mb-2 uppercase tracking-widest" />
                                <multiselect
                                    class="custom-multiselect"
                                    v-model="form.address_country"
                                    :options="props.countries"
                                    group-values="elements"
                                    group-label="group"
                                    :group-select="false"
                                    track-by="value"
                                    label="name"
                                    :placeholder="__('translate.placeholderCountry')"
                                    :selectLabel="__('translate.selectLabel')"
                                    :selectGroupLabel="__('translate.selectGroupLabel')"
                                    :selectedLabel="__('translate.selectedLabel')"
                                    :deselectLabel="__('translate.deselectLabel')"
                                >
                                    <template #noResult><span>{{ __('translate.noOptions') }}</span></template>
                                    <template #noOptions><span>{{ __('translate.noResult') }}</span></template>
                                </multiselect>
                                <InputError :message="form.errors.address_country" class="mt-2"/>
                            </div>
                            <div>
                                <InputLabel :value="__('translate.Postal')" class="text-[10px] font-black text-gray-400 mb-2 uppercase tracking-widest" />
                                <input v-model="form.address_postcode" class="w-full rounded-2xl border-gray-100 focus:border-[#00a0e3] focus:ring-[#00a0e3] transition-all bg-gray-50/30 p-4">
                                <InputError :message="form.errors.address_postcode" class="mt-2" />
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Media i opis -->
                <div class="bg-white rounded-[2.5rem] shadow-xl shadow-blue-900/5 border border-gray-100 p-8 md:p-12">
                    <div class="flex items-center gap-4 mb-10">
                        <h3 class="text-[10px] font-black text-[#0A2C5C] uppercase tracking-[0.2em]">Media i Opis</h3>
                        <div class="h-px flex-1 bg-gray-100"></div>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-12 mb-12">
                        <div>
                            <InputLabel :value="__('translate.foundationLogo')" class="text-[10px] font-black text-gray-400 mb-4 uppercase tracking-widest" />
                            <file-pond
                                name="photo"
                                ref="uploadLogo"
                                :files="form.photo"
                                :allow-multiple="false"
                                :max-file-size="'4MB'"
                                credits="false"
                                :accepted-file-types="'image/png, image/jpeg, image/jpg, image/webp'"
                                :label-idle="__('translate.label-idle')"
                                :labelFileProcessing="__('translate.labelFileProcessing')"
                                :labelInvalidField="__('translate.labelInvalidField')"
                                :labelMaxFileSize="__('translate.labelMaxFileSize')"
                                :labelMaxFileSizeExceeded="__('translate.labelMaxFileSizeExceeded')"
                                :labelFileWaitingForSize="__('translate.labelFileWaitingForSize')"
                                :labelFileSizeNotAvailable="__('translate.labelFileSizeNotAvailable')"
                                :labelFileLoading="__('translate.labelFileLoading')"
                                :labelFileLoadError="__('translate.labelFileLoadError')"
                                :labelFileProcessingComplete="__('translate.labelFileProcessingComplete')"
                                :labelFileProcessingAborted="__('translate.labelFileProcessingAborted')"
                                :labelFileProcessingError="serverMessage ? serverMessage : __('translate.labelFileProcessingError')"
                                :labelFileProcessingRevertError="__('translate.labelFileProcessingRevertError')"
                                :labelFileRemoveError="__('translate.labelFileRemoveError')"
                                :labelTapToCancel="__('translate.labelTapToCancel')"
                                :labelTapToRetry="__('translate.labelTapToRetry')"
                                :labelTapToUndo="__('translate.labelTapToUndo')"
                                :labelButtonRemoveItem="__('translate.labelButtonRemoveItem')"
                                :labelButtonAbortItemLoad="__('translate.labelButtonAbortItemLoad')"
                                :labelButtonRetryItemLoad="__('translate.labelButtonRetryItemLoad')"
                                :labelButtonAbortItemProcessing="__('translate.labelButtonAbortItemProcessing')"
                                :labelButtonUndoItemProcessing="__('translate.labelButtonUndoItemProcessing')"
                                :labelButtonRetryItemProcessing="__('translate.labelButtonRetryItemProcessing')"
                                :labelButtonProcessItem="__('translate.labelButtonProcessItem')"
                                :server="{
                                    url: '',
                                    headers: { 'X-CSRF-TOKEN': usePage().props.csrf_token },
                                    process: {
                                        url: '/temporary/upload',
                                        onload: (response) => {
                                            form.photo.push(response);
                                            return response;
                                        },
                                        onerror: (res) => serverMessage = JSON.parse(res).error.photo
                                    },
                                    revert: {
                                        url: '/temporary/delete',
                                        onload: (response) => {
                                            if (!response) return;
                                            const idx = form.photo.findIndex(el => el === response);
                                            if (idx !== -1) form.photo.splice(idx, 1);
                                        }
                                    },
                                    remove: removeFile
                                }"
                            ></file-pond>
                            <InputError :message="form.errors.photo" class="mt-2"/>
                        </div>
                        <div>
                            <InputLabel :value="__('translate.foundationBanner')" class="text-[10px] font-black text-gray-400 mb-4 uppercase tracking-widest" />
                            <file-pond
                                name="banner"
                                ref="uploadBaner"
                                :files="form.banner"
                                :allow-multiple="false"
                                :max-file-size="'4MB'"
                                credits="false"
                                :accepted-file-types="'image/png, image/jpeg, image/jpg, image/webp'"
                                :label-idle="__('translate.label-idle')"
                                :labelFileProcessing="__('translate.labelFileProcessing')"
                                :labelInvalidField="__('translate.labelInvalidField')"
                                :labelMaxFileSize="__('translate.labelMaxFileSize')"
                                :labelMaxFileSizeExceeded="__('translate.labelMaxFileSizeExceeded')"
                                :labelFileWaitingForSize="__('translate.labelFileWaitingForSize')"
                                :labelFileSizeNotAvailable="__('translate.labelFileSizeNotAvailable')"
                                :labelFileLoading="__('translate.labelFileLoading')"
                                :labelFileLoadError="__('translate.labelFileLoadError')"
                                :labelFileProcessingComplete="__('translate.labelFileProcessingComplete')"
                                :labelFileProcessingAborted="__('translate.labelFileProcessingAborted')"
                                :labelFileProcessingError="serverMessage ? serverMessage : __('translate.labelFileProcessingError')"
                                :labelFileProcessingRevertError="__('translate.labelFileProcessingRevertError')"
                                :labelFileRemoveError="__('translate.labelFileRemoveError')"
                                :labelTapToCancel="__('translate.labelTapToCancel')"
                                :labelTapToRetry="__('translate.labelTapToRetry')"
                                :labelTapToUndo="__('translate.labelTapToUndo')"
                                :labelButtonRemoveItem="__('translate.labelButtonRemoveItem')"
                                :labelButtonAbortItemLoad="__('translate.labelButtonAbortItemLoad')"
                                :labelButtonRetryItemLoad="__('translate.labelButtonRetryItemLoad')"
                                :labelButtonAbortItemProcessing="__('translate.labelButtonAbortItemProcessing')"
                                :labelButtonUndoItemProcessing="__('translate.labelButtonUndoItemProcessing')"
                                :labelButtonRetryItemProcessing="__('translate.labelButtonRetryItemProcessing')"
                                :labelButtonProcessItem="__('translate.labelButtonProcessItem')"
                                :server="{
                                    url: '',
                                    headers: { 'X-CSRF-TOKEN': usePage().props.csrf_token },
                                    process: {
                                        url: '/temporary/upload/banner',
                                        onload: (response) => {
                                            form.banner.push(response);
                                            return response;
                                        },
                                        onerror: (res) => serverMessage2 = JSON.parse(res).error.banner
                                    },
                                    revert: {
                                        url: '/temporary/delete',
                                        onload: (response) => {
                                            if (!response) return;
                                            const idx = form.banner.findIndex(el => el === response);
                                            if (idx !== -1) form.banner.splice(idx, 1);
                                        }
                                    },
                                    remove: removeFile
                                }"
                            ></file-pond>
                            <InputError :message="form.errors.banner" class="mt-2"/>
                        </div>
                    </div>

                    <div class="space-y-6">
                        <div>
                            <InputLabel :value="__('translate.phone')" class="text-[10px] font-black text-gray-400 mb-2 uppercase tracking-widest" />
                            <input v-model="form.phone" class="w-full rounded-2xl border-gray-100 focus:border-[#00a0e3] focus:ring-[#00a0e3] transition-all bg-gray-50/30 p-4">
                            <InputError :message="form.errors.phone" class="mt-2" />
                        </div>

                        <div>
                            <InputLabel :value="__('translate.email')" class="text-[10px] font-black text-gray-400 mb-2 uppercase tracking-widest" />
                            <input v-model="form.email" class="w-full rounded-2xl border-gray-100 focus:border-[#00a0e3] focus:ring-[#00a0e3] transition-all bg-gray-50/30 p-4" type="email">
                            <InputError :message="form.errors.email" class="mt-2" />
                        </div>

                        <div>
                            <InputLabel :value="__('translate.adressOptional')" class="text-[10px] font-black text-gray-400 mb-2 uppercase tracking-widest" />
                            <input v-model="form.www" class="w-full rounded-2xl border-gray-100 focus:border-[#00a0e3] focus:ring-[#00a0e3] transition-all bg-gray-50/30 p-4" type="text">
                            <InputError :message="form.errors.www" class="mt-2" />
                        </div>

                        <div>
                            <InputLabel :value="__('translate.foundationDescription')" class="text-[10px] font-black text-gray-400 mb-4 uppercase tracking-widest" />
                            <div class="prose prose-sm max-w-none">
                                <Tiptap id="content" v-model="form.description" />
                            </div>
                            <InputError :message="form.errors.description" class="mt-2" />
                        </div>
                    </div>
                </div>

                <!-- Social Media -->
                <div class="bg-white rounded-[2.5rem] shadow-xl shadow-blue-900/5 border border-gray-100 p-8 md:p-12">
                    <div class="flex items-center gap-4 mb-10">
                        <h3 class="text-[10px] font-black text-[#0A2C5C] uppercase tracking-[0.2em]">{{ __('translate.socialMedia') }}</h3>
                        <div class="h-px flex-1 bg-gray-100"></div>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                        <div>
                            <InputLabel :value="__('translate.facebookOptional')" class="text-[10px] font-black text-gray-400 mb-2 uppercase tracking-widest" />
                            <input v-model="form.facebook_url" class="w-full rounded-2xl border-gray-100 focus:border-[#00a0e3] focus:ring-[#00a0e3] transition-all bg-gray-50/30 p-4" type="text" placeholder="https://facebook.com/...">
                            <InputError :message="form.errors.facebook_url" class="mt-2" />
                        </div>
                        <div>
                            <InputLabel :value="__('translate.instagramOptional')" class="text-[10px] font-black text-gray-400 mb-2 uppercase tracking-widest" />
                            <input v-model="form.instagram_url" class="w-full rounded-2xl border-gray-100 focus:border-[#00a0e3] focus:ring-[#00a0e3] transition-all bg-gray-50/30 p-4" type="text" placeholder="https://instagram.com/...">
                            <InputError :message="form.errors.instagram_url" class="mt-2" />
                        </div>
                        <div>
                            <InputLabel :value="__('translate.linkedinOptional')" class="text-[10px] font-black text-gray-400 mb-2 uppercase tracking-widest" />
                            <input v-model="form.linkedin_url" class="w-full rounded-2xl border-gray-100 focus:border-[#00a0e3] focus:ring-[#00a0e3] transition-all bg-gray-50/30 p-4" type="text" placeholder="https://linkedin.com/...">
                            <InputError :message="form.errors.linkedin_url" class="mt-2" />
                        </div>
                        <div>
                            <InputLabel :value="__('translate.xOptional')" class="text-[10px] font-black text-gray-400 mb-2 uppercase tracking-widest" />
                            <input v-model="form.x_url" class="w-full rounded-2xl border-gray-100 focus:border-[#00a0e3] focus:ring-[#00a0e3] transition-all bg-gray-50/30 p-4" type="text" placeholder="https://x.com/...">
                            <InputError :message="form.errors.x_url" class="mt-2" />
                        </div>
                        <div>
                            <InputLabel :value="__('translate.tiktokOptional')" class="text-[10px] font-black text-gray-400 mb-2 uppercase tracking-widest" />
                            <input v-model="form.tiktok_url" class="w-full rounded-2xl border-gray-100 focus:border-[#00a0e3] focus:ring-[#00a0e3] transition-all bg-gray-50/30 p-4" type="text" placeholder="https://tiktok.com/@...">
                            <InputError :message="form.errors.tiktok_url" class="mt-2" />
                        </div>
                    </div>
                </div>

                <div class="flex items-center justify-between bg-white rounded-[2rem] shadow-xl shadow-blue-900/5 border border-gray-100 p-8">
                    <label class="flex items-center cursor-pointer group" for="active">
                        <Checkbox v-model:checked="form.active" id="active" class="rounded-lg border-gray-200 text-[#00a0e3] shadow-sm focus:ring-[#00a0e3]" />
                        <span class="ml-3 text-[10px] font-black text-gray-500 uppercase tracking-widest group-hover:text-[#0A2C5C] transition-colors">{{ __('translate.active') }}</span>
                    </label>

                    <PrimaryButton :disabled="form.processing" class="px-12 py-4 bg-[#0A2C5C] hover:bg-blue-900 rounded-2xl shadow-lg shadow-blue-900/20">
                        <SpinnerAction :process="form.processing">{{ __('translate.save') }}</SpinnerAction>
                    </PrimaryButton>
                </div>
            </form>
            </div>
        </div>
    </AppLayout>
</template>
<style src="vue-multiselect/dist/vue-multiselect.css"></style>
<style lang="scss">
.custom-multiselect {
    .multiselect {
        &__tags {
            @apply rounded-2xl border-gray-100 bg-gray-50/50 py-3 px-4 min-h-[54px] flex items-center transition-all border-2;
        }
        &__placeholder {
            @apply text-[11px] font-black text-gray-400 uppercase tracking-widest pt-0 mb-0;
        }
        &__single {
            @apply bg-transparent text-[11px] font-black text-[#0A2C5C] uppercase tracking-widest pt-0 mb-0;
        }
        &__input {
            @apply bg-transparent text-[11px] font-black uppercase tracking-widest pt-0 mb-0;
        }
        &__select {
            @apply top-1/2 -translate-y-1/2 h-full flex items-center justify-center right-0;
            &::before {
                @apply border-t-gray-400 border-l-transparent border-r-transparent border-b-transparent border-t-[6px] border-x-[5px] relative top-0;
            }
        }
        &__content-wrapper {
            @apply rounded-2xl mt-2 border-none shadow-xl overflow-hidden;
        }
        &__option {
            @apply text-[10px] font-bold uppercase tracking-wider py-4;
            &--highlight {
                @apply bg-[#0A2C5C] text-white;
                &::after {
                    @apply bg-[#0A2C5C] text-white text-[10px] font-black uppercase tracking-widest px-4;
                }
            }
            &--selected {
                @apply bg-gray-100 text-[#0A2C5C] font-black;
            }
        }
    }
}

.multiselect__tag{
    background: #00a0e3 !important;
}
.multiselect__option--highlight {
    background: #00a0e3 !important;
    outline: none;
    color: white;
}

.multiselect__option--highlight:after {
    content: attr(data-select);
    background: #00a0e3 !important;
    color: white;
}

.multiselect__option--selected {
    background: #00A0E3B2 !important;
    color: #35495E;
    font-weight: bold;
}

.multiselect__option--selected.multiselect__option--highlight {
    background: #00A0E3B2 !important;
    color: #fff;
}

.multiselect__option--selected.multiselect__option--highlight:after {
    background: #00A0E3B2 !important;
    content: attr(data-deselect);
    color: white !important;
}

.multiselect__option--selected:after {
    content: attr(data-selected);
    color: #00A0E3B2;
    background: transparent !important;
}
</style>
