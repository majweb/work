<script setup>
import FrontLayout from "@/Layouts/FrontLayout.vue";
import MapBoxFundations from "@/Components/MapBoxFundations.vue";

// SWIPER IMPORTS
import { Swiper, SwiperSlide } from "swiper/vue";
import { Autoplay } from "swiper/modules";
import "swiper/css";
import mapboxgl from "mapbox-gl";
import {computed, ref, watch} from "vue";
import {usePage, useForm} from "@inertiajs/vue3";
import InputLabel from "@/Components/InputLabel.vue";
import InputError from "@/Components/InputError.vue";
import PrimaryButton from "@/Components/PrimaryButton.vue";
import Checkbox from "@/Components/Checkbox.vue";
import SpinnerAction from "@/Components/SpinnerAction.vue";
import multiselect from "vue-multiselect";
import axios from "axios";
import Tiptap from "@/Components/TipTap.vue";

// FILEPOND
import vueFilePond from "vue-filepond";
import "filepond/dist/filepond.min.css";
import "filepond-plugin-image-preview/dist/filepond-plugin-image-preview.min.css";
import FilePondPluginImagePreview from "filepond-plugin-image-preview";
import FilePondPluginFileValidateSize from "filepond-plugin-file-validate-size";
import FilePondPluginFileValidateType from "filepond-plugin-file-validate-type";
import __ from "@/lang.js";

const FilePond = vueFilePond(
    FilePondPluginImagePreview,
    FilePondPluginFileValidateSize,
    FilePondPluginFileValidateType
);

const props = defineProps({
    partners: {
        type: Array,
        required: true
    },
    categoriesToSend: Array,
    foundations:Array,
    countriesToSend:Array,
    categories: Array,
    countries: Array,
    foundationsCount:Number,
    page: Object
});
const foundations = computed(() => props.foundations);
mapboxgl.accessToken = usePage().props.mapboxToken;

// ===============================
// 🔵 STATE & TOGGLE
// ===============================
const showForm = ref(false);

// ===============================
// 🔵 MAPBOX AUTOCOMPLETE
// ===============================
const MAPBOX_TOKEN = usePage().props.mapboxToken;
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
    for (const group of props.countriesToSend) {
        const match = group.elements.find(el => el.countryCode.toLowerCase() === isoCode.toLowerCase());
        if (match) return match;
    }
    return null;
};

const selectSuggestion = (item) => {
    const currentLocale = usePage().props.locale;
    addressQuery.value = item.place_name;
    suggestions.value = [];
    const ctx = item.context || [];
    const countryObj = ctx.find(c => c.id.startsWith("country"));
    const postcodeObj = ctx.find(c => c.id.startsWith("postcode"));

    let streetWithNumber = item.text || "";
    if (item.address) {
        streetWithNumber = `${item.text} ${item.address}`;
    } else {
        const parts = item.place_name.split(',')[0].trim();
        const match = parts.match(/^(\d+[\w\-\/]*)\s+(.+)$/);
        if (match) {
            streetWithNumber = `${match[2]} ${match[1]}`;
        } else {
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
    const iso = countryObj?.short_code?.toUpperCase();
    const found = findCountryInOptions(iso);

    form.address_country = found ? found : {
        name: countryObj?.text || null,
        value: null,
        countryCode: iso,
        allTranslations: { [currentLocale]: countryObj?.text || null }
    };
    form.country = countryObj?.short_code || null;
    form.latitude = item.center[1];
    form.longitude = item.center[0];
};

// ===============================
// 🔵 FORMULARZ
// ===============================
let serverMessage = ref(null);
let serverMessage2 = ref(null);
const optionsCategory = ref(props.categoriesToSend);
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
    address_postcode: "",
    country: "",
    latitude: null,
    longitude: null,
    category_id: "",
    subcategory_id: "",
    active: false, // ⬅️ Domyślnie nieaktywna
    photo: [],
    banner: [],
    iban: "",
    swift: "",
    krs: "",
    year_of_foundation: "",
    worker_count: "",
    benefit_organization: true,
});

watch(() => form.category_id, async (value) => {
    if (value) {
        optionsSubCategory.value = (await axios.get(route("front.getChildsCategory", { parent: value.value }))).data;
    }
});
const removeFile = async (source, load) => {
    await axios.post('/temporary/delete', { source });
    load();
    form.photo = [];
};



const submit = () => {
    form.post(route('front.foundation.store'), {
        preserveScroll: true,
        onSuccess: () => {
            form.reset();
            addressQuery.value = "";
            suggestions.value = [];
            showForm.value = false;
        },
    });
};
</script>
<template>
    <FrontLayout
        :title="props.page.title"
        :image="props.page.image"
        :keywords="props.page.keywords"
        :description="props.page.description"
        :url="route('front.partners')"
        type="website"
    >
        <div class="py-12 bg-gray-50/50 min-h-screen relative overflow-hidden">
            <!-- Background Decoration -->
            <div class="absolute top-0 right-0 w-[500px] h-[500px] bg-blue-100/30 rounded-full -mr-64 -mt-64 blur-3xl transition-transform duration-1000"></div>
            <div class="absolute bottom-0 left-0 w-[400px] h-[400px] bg-red-50/30 rounded-full -ml-48 -mb-48 blur-3xl transition-transform duration-1000"></div>

            <div class="max-w-7xl mx-auto px-4 relative z-10 space-y-12">
                <!-- PARTNERS SECTION -->
                <div class="bg-white rounded-[3rem] shadow-2xl shadow-blue-900/5 border border-white p-8 md:p-16 relative overflow-hidden group">
                    <!-- Logo background decoration -->
                    <img src="/images/logo-horizontal.svg" class="absolute -bottom-20 -right-20 w-96 opacity-[0.03] pointer-events-none grayscale group-hover:scale-110 transition-transform duration-1000" alt="logo">

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
                        <div class="flex justify-center order-2 md:order-1 relative">
                            <div class="absolute inset-0 bg-blue-400/10 blur-3xl rounded-full scale-110 animate-pulse"></div>
                            <img src="/images/partners/partners.svg" class="w-full max-w-sm relative z-10 drop-shadow-2xl transition-transform duration-700 hover:scale-105" alt="partners">
                        </div>
                        <div class="order-1 md:order-2 space-y-6">
                            <div class="inline-flex items-center gap-3 px-4 py-2 bg-blue-50 rounded-2xl">
                                <div class="w-2 h-2 rounded-full bg-[#00a0e3] animate-pulse"></div>
                                <span class="text-[10px] font-black text-[#00a0e3] uppercase tracking-widest">{{ __('translate.partners') || 'PARTNERZY' }}</span>
                            </div>

                            <h2 class="text-3xl md:text-5xl font-black text-[#0A2C5C] uppercase tracking-tight leading-tight">
                                {{ __('partners.partners_title') }}
                            </h2>

                            <div class="text-sm md:text-base font-bold text-gray-500 uppercase tracking-widest leading-relaxed">
                                {{ __('partners.partners_text') }}
                                <span class="text-[#0A2C5C] font-black underline decoration-[#00a0e3] decoration-2 underline-offset-4">{{ __('partners.partners_strong') }}</span>
                                {{ __('partners.partners_text2') }}
                            </div>
                        </div>
                    </div>

                    <!-- SLIDER -->
                    <div v-if="props.partners.length > 1" class="mt-20 pt-12 border-t border-gray-50">
                        <div class="flex items-center gap-4 mb-8">
                            <h3 class="text-[10px] font-black text-gray-400 uppercase tracking-[0.2em]">{{ __('partners.partners_subtitle') }}</h3>
                            <div class="h-px flex-1 bg-gray-50"></div>
                        </div>

                        <Swiper
                            :modules="[Autoplay]"
                            :space-between="32"
                            :loop="props.partners.length > 6"
                            :autoplay="props.partners.length > 6 ? { delay: 3000, disableOnInteraction: false } : false"
                            :breakpoints="{
                                0:   { slidesPerView: 2.3 },
                                640: { slidesPerView: 3.5 },
                                1024:{ slidesPerView: 5 },
                                1280:{ slidesPerView: 6 }
                            }"
                            class="partners-swiper"
                        >
                            <SwiperSlide
                                v-for="partner in props.partners"
                                :key="partner.id"
                            >
                                <div class="flex flex-col items-center justify-center p-6 rounded-[2rem] bg-gray-50/50 border border-transparent hover:bg-white hover:border-gray-100 hover:shadow-xl hover:shadow-blue-900/5 transition-all duration-500 group">
                                    <a
                                        v-if="partner.link"
                                        :href="partner.link"
                                        target="_blank"
                                        rel="noopener"
                                        class="block mb-4 transition-transform duration-500 group-hover:scale-110"
                                    >
                                        <img
                                            :src="partner.logo"
                                            :alt="partner.name"
                                            class="h-16 w-auto object-contain grayscale opacity-60 group-hover:grayscale-0 group-hover:opacity-100 transition-all duration-500"
                                        />
                                    </a>
                                    <div v-else class="mb-4 transition-transform duration-500 group-hover:scale-110">
                                        <img
                                            :src="partner.logo"
                                            :alt="partner.name"
                                            class="h-16 w-auto object-contain grayscale opacity-60 group-hover:grayscale-0 group-hover:opacity-100 transition-all duration-500"
                                        />
                                    </div>

                                    <p class="text-[10px] font-black text-center text-gray-400 uppercase tracking-widest transition-colors group-hover:text-[#0A2C5C]">
                                        <a
                                            v-if="partner.link"
                                            :href="partner.link"
                                            target="_blank"
                                            rel="noopener"
                                        >
                                            {{ partner.name }}
                                        </a>
                                        <span v-else>{{ partner.name }}</span>
                                    </p>
                                </div>
                            </SwiperSlide>
                        </Swiper>
                    </div>
                </div>

                <!-- FOUNDATIONS SECTION -->
                <div class="bg-[#0A2C5C] rounded-[3rem] shadow-2xl shadow-blue-900/20 border border-blue-900/50 p-8 md:p-16 relative overflow-hidden group">
                    <div class="absolute top-0 right-0 w-96 h-96 bg-blue-400/10 rounded-full -mr-48 -mt-48 blur-3xl transition-transform duration-1000 group-hover:scale-125"></div>
                    <div class="absolute bottom-0 left-0 w-64 h-64 bg-red-500/5 rounded-full -ml-32 -mb-32 blur-2xl"></div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center relative z-10">
                        <div class="space-y-8 text-center md:text-left">
                            <div class="inline-flex items-center gap-3 px-4 py-2 bg-white/5 border border-white/10 rounded-2xl">
                                <div class="w-2 h-2 rounded-full bg-red-500 animate-ping"></div>
                                <span class="text-[10px] font-black text-white uppercase tracking-widest">{{ __('translate.foundations') || 'FUNDACJE' }}</span>
                            </div>

                            <h2 class="text-3xl md:text-5xl font-black text-white uppercase tracking-tight leading-tight">
                                {{ __('partners.foundations_title') }}
                            </h2>

                            <div class="text-sm md:text-base font-bold text-blue-100 uppercase tracking-widest leading-relaxed">
                                {{ __('partners.foundations_text') }}
                                <span class="text-[#00a1e6] font-black underline decoration-white/20 underline-offset-4">{{ __('partners.foundations_strong') }}</span>
                                {{ __('partners.foundations_text2') }}
                            </div>
                        </div>

                        <div class="flex justify-center relative">
                            <div class="absolute inset-0 bg-blue-400/10 blur-3xl rounded-full scale-110 animate-pulse"></div>
                            <img src="/images/partners/fundations.svg" class="w-full max-w-sm relative z-10 drop-shadow-2xl transition-transform duration-700 hover:scale-105" alt="fundations">
                        </div>
                    </div>

                    <!-- COUNTER -->
                    <div class="mt-20 pt-12 border-t border-white/10 text-center">
                        <div class="inline-block bg-white/5 backdrop-blur-sm border border-white/10 p-8 md:p-12 rounded-[2.5rem] relative group/counter">
                            <div class="absolute -top-6 left-1/2 -translate-x-1/2 px-4 py-1.5 bg-[#00a1e6] text-white text-[8px] font-black uppercase tracking-widest rounded-full shadow-lg">
                                {{ __('translate.current_count') }}
                            </div>

                            <p class="text-4xl md:text-6xl font-black text-white mb-4">
                                {{ props.foundationsCount }}
                            </p>
                            <p class="text-[10px] font-black text-blue-300 uppercase tracking-[0.3em]">
                                {{ __('translate.fundacji') }}
                            </p>
                        </div>
                    </div>
                </div>

                <!-- SEARCH & MAP (ZNAJDŹ FUNDACJĘ) -->
                <div class="space-y-12">
                    <!-- PRZYCISK ZGŁOSZENIA -->
                    <div class="text-center">
                        <button
                            @click="showForm = !showForm"
                            class="inline-flex items-center px-12 py-6 bg-[#0A2C5C] hover:bg-blue-900 text-white rounded-[2rem] font-black text-sm uppercase tracking-widest transition-all duration-300 shadow-xl shadow-blue-900/20 group"
                        >
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-3 transition-transform duration-300 group-hover:rotate-90" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                            </svg>
                            {{ __('translate.registerFoundation') }}
                        </button>
                    </div>

                    <!-- FORMULARZ DODAWANIA (Zalążek) -->
                    <transition
                        enter-active-class="transition duration-500 ease-out"
                        enter-from-class="transform scale-95 opacity-0"
                        enter-to-class="transform scale-100 opacity-100"
                        leave-active-class="transition duration-300 ease-in"
                        leave-from-class="transform scale-100 opacity-100"
                        leave-to-class="transform scale-95 opacity-0"
                    >
                        <div v-if="showForm" class="bg-white rounded-[3rem] shadow-2xl shadow-blue-900/10 border border-gray-100 p-8 md:p-16 relative overflow-hidden">
                            <div class="absolute top-0 right-0 w-64 h-64 bg-blue-50 rounded-full -mr-32 -mt-32 opacity-50"></div>

                            <div class="relative z-10">
                                <div class="text-center mb-12">
                                    <h2 class="text-3xl md:text-4xl font-black text-[#0A2C5C] uppercase tracking-tight mb-4">
                                        {{ __('translate.addFoundation') }}
                                    </h2>
                                    <p class="text-sm font-bold text-gray-400 uppercase tracking-widest">Wypełnij poniższy formularz, aby zgłosić fundację do weryfikacji</p>
                                </div>

                                <form @submit.prevent="submit" class="space-y-12">
                                    <!-- Informacje ogólne -->
                                    <div class="space-y-8">
                                        <div class="flex items-center gap-4">
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
                                                    :options="props.categoriesToSend"
                                                    :placeholder="__('translate.selectCategory')"
                                                />
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
                                                />
                                                <InputError :message="form.errors.subcategory_id" class="mt-2" />
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Dane rejestrowe -->
                                    <div class="space-y-8">
                                        <div class="flex items-center gap-4">
                                            <h3 class="text-[10px] font-black text-[#0A2C5C] uppercase tracking-[0.2em]">Dane rejestrowe</h3>
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
                                                <input v-model="form.year_of_foundation" type="number" class="w-full rounded-2xl border-gray-100 focus:border-[#00a0e3] focus:ring-[#00a0e3] transition-all bg-gray-50/30 p-4">
                                                <InputError :message="form.errors.year_of_foundation" class="mt-2" />
                                            </div>
                                            <div>
                                                <InputLabel :value="__('translate.count_workers')" class="text-[10px] font-black text-gray-400 mb-2 uppercase tracking-widest" />
                                                <input v-model="form.worker_count" type="number" class="w-full rounded-2xl border-gray-100 focus:border-[#00a0e3] focus:ring-[#00a0e3] transition-all bg-gray-50/30 p-4">
                                                <InputError :message="form.errors.worker_count" class="mt-2" />
                                            </div>
                                            <div class="flex items-center pt-6">
                                                <label class="flex items-center cursor-pointer group" for="benefit_organization_front">
                                                    <Checkbox id="benefit_organization_front" v-model:checked="form.benefit_organization" class="rounded-lg border-gray-200 text-[#00a0e3]" />
                                                    <span class="ml-3 text-[10px] font-black text-gray-500 uppercase tracking-widest">{{ __('translate.publicBenefitOrg') }}</span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Adres -->
                                    <div class="space-y-8">
                                        <div class="flex items-center gap-4">
                                            <h3 class="text-[10px] font-black text-[#0A2C5C] uppercase tracking-[0.2em]">Adres</h3>
                                            <div class="h-px flex-1 bg-gray-100"></div>
                                        </div>

                                        <div class="relative">
                                            <InputLabel :value="__('translate.addressAutocomplete')" class="text-[10px] font-black text-gray-400 mb-2 uppercase tracking-widest" />
                                            <input
                                                class="w-full rounded-2xl border-gray-100 focus:border-[#00a0e3] focus:ring-[#00a0e3] transition-all bg-gray-50/30 p-4"
                                                type="text"
                                                v-model="addressQuery"
                                                @input="fetchSuggestions"
                                            />
                                            <ul v-if="suggestions.length" class="absolute bg-white border border-gray-100 rounded-2xl w-full mt-2 z-50 shadow-2xl max-h-60 overflow-auto">
                                                <li v-for="s in suggestions" :key="s.id" class="px-6 py-4 hover:bg-gray-50 cursor-pointer text-sm" @click="selectSuggestion(s)">
                                                    {{ s.place_name }}
                                                </li>
                                            </ul>
                                        </div>

                                        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                                            <div>
                                                <InputLabel :value="__('translate.Street')" class="text-[10px] font-black text-gray-400 mb-2 uppercase tracking-widest" />
                                                <input v-model="form.address_street" class="w-full rounded-2xl border-gray-100 focus:border-[#00a0e3] focus:ring-[#00a0e3] transition-all bg-gray-50/30 p-4">
                                            </div>
                                            <div>
                                                <InputLabel :value="__('translate.City')" class="text-[10px] font-black text-gray-400 mb-2 uppercase tracking-widest" />
                                                <input v-model="form.address_city" class="w-full rounded-2xl border-gray-100 focus:border-[#00a0e3] focus:ring-[#00a0e3] transition-all bg-gray-50/30 p-4">
                                            </div>
                                            <div>
                                                <InputLabel :value="__('translate.Country')" class="text-[10px] font-black text-gray-400 mb-2 uppercase tracking-widest" />
                                                <multiselect
                                                    class="custom-multiselect"
                                                    v-model="form.address_country"
                                                    :options="props.countriesToSend"
                                                    group-values="elements"
                                                    group-label="group"
                                                    track-by="value"
                                                    label="name"
                                                />
                                            </div>
                                            <div>
                                                <InputLabel :value="__('translate.Postal')" class="text-[10px] font-black text-gray-400 mb-2 uppercase tracking-widest" />
                                                <input v-model="form.address_postcode" class="w-full rounded-2xl border-gray-100 focus:border-[#00a0e3] focus:ring-[#00a0e3] transition-all bg-gray-50/30 p-4">
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Media i opis -->
                                    <div class="space-y-8">
                                        <div class="flex items-center gap-4">
                                            <h3 class="text-[10px] font-black text-[#0A2C5C] uppercase tracking-[0.2em]">Media i Opis</h3>
                                            <div class="h-px flex-1 bg-gray-100"></div>
                                        </div>

                                        <div class="grid grid-cols-1 md:grid-cols-2 gap-12">
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

                                                <InputError :message="form.errors.photo" class="mt-2" />
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
                                                <InputError :message="form.errors.banner" class="mt-2" />
                                            </div>
                                        </div>

                                        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                                            <div>
                                                <InputLabel :value="__('translate.foundationWebsite')" class="text-[10px] font-black text-gray-400 mb-2 uppercase tracking-widest" />
                                                <input v-model="form.www" class="w-full rounded-2xl border-gray-100 focus:border-[#00a0e3] focus:ring-[#00a0e3] bg-gray-50/30 p-4" type="text" placeholder="https://...">
                                                <InputError :message="form.errors.www" class="mt-2" />
                                            </div>
                                            <div>
                                                <InputLabel :value="__('translate.phone')" class="text-[10px] font-black text-gray-400 mb-2 uppercase tracking-widest" />
                                                <input v-model="form.phone" class="w-full rounded-2xl border-gray-100 focus:border-[#00a0e3] focus:ring-[#00a0e3] bg-gray-50/30 p-4" type="text">
                                                <InputError :message="form.errors.phone" class="mt-2" />
                                            </div>
                                            <div>
                                                <InputLabel :value="__('translate.email')" class="text-[10px] font-black text-gray-400 mb-2 uppercase tracking-widest" />
                                                <input v-model="form.email" class="w-full rounded-2xl border-gray-100 focus:border-[#00a0e3] focus:ring-[#00a0e3] bg-gray-50/30 p-4" type="email">
                                                <InputError :message="form.errors.email" class="mt-2" />
                                            </div>
                                        </div>

                                        <div>
                                            <InputLabel :value="__('translate.foundationDescription')" class="text-[10px] font-black text-gray-400 mb-4 uppercase tracking-widest" />
                                            <Tiptap v-model="form.description" />
                                            <InputError :message="form.errors.description" class="mt-2" />
                                        </div>
                                    </div>

                                    <!-- Social Media -->
                                    <div class="space-y-8">
                                        <div class="flex items-center gap-4">
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

                                    <div class="flex justify-center pt-8">
                                        <PrimaryButton :disabled="form.processing" class="px-16 py-6 bg-[#0A2C5C] hover:bg-blue-900 rounded-[2rem] text-sm shadow-2xl shadow-blue-900/20 transition-all duration-300 transform hover:-translate-y-1 cursor-pointer">
                                            <SpinnerAction :process="form.processing">{{ __('translate.save') }}</SpinnerAction>
                                        </PrimaryButton>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </transition>

                    <!-- SEARCH & MAP (ZNAJDŹ FUNDACJĘ) -->
                    <div class="bg-white rounded-[3rem] shadow-xl shadow-blue-900/5 border border-white p-8 md:p-12 relative overflow-hidden group">
                    <div class="absolute top-0 right-0 w-32 h-32 bg-gray-50 rounded-full -mr-16 -mt-16 group-hover:scale-110 transition-transform duration-700"></div>

                    <div class="relative z-10 text-center mb-12">
                        <div class="inline-flex items-center gap-3 px-4 py-2 bg-blue-50 rounded-2xl mb-6">
                            <div class="w-2 h-2 rounded-full bg-[#00a0e3] animate-pulse"></div>
                            <span class="text-[10px] font-black text-[#00a0e3] uppercase tracking-widest">{{ __('translate.foundations') }}</span>
                        </div>

                        <h2 class="text-3xl md:text-5xl font-black text-[#0A2C5C] uppercase tracking-tight leading-tight mb-4">
                            {{ __('translate.search_foundation') }}
                        </h2>
                        <div class="h-1 w-24 bg-gradient-to-r from-transparent via-[#00a0e3] to-transparent mx-auto"></div>
                    </div>

                    <div class="mapa rounded-[2rem] overflow-hidden relative group/map">
                        <MapBoxFundations
                            :categories="props.categories"
                            :foundations="foundations"
                            :countries="props.countries"
                        />
                    </div>
                </div>
            </div>
        </div>
        </div>
    </FrontLayout>
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
.multiselect__tag{ background: #00a0e3 !important; }
.multiselect__option--highlight { background: #00a0e3 !important; outline: none; color: white; }
.multiselect__option--highlight:after { content: attr(data-select); background: #00a0e3 !important; color: white; }
.multiselect__option--selected { background: #00A0E3B2 !important; }

.swiper-scrollbar-drag {
    background: #0a2c5c;
}
</style>
