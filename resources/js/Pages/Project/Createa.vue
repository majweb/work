<script setup>

import {useForm, Link, usePage} from '@inertiajs/vue3';

import InputError from '@/Components/InputError.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import AppLayout from '@/Layouts/AppLayout.vue';
import SpinnerAction from "@/Components/SpinnerAction.vue";
import InputLabel from "@/Components/InputLabel.vue";
import {computed, ref, watch, onMounted} from "vue";
import Multiselect from 'vue-multiselect'
import TextInput from "@/Components/TextInput.vue";
import mapboxgl from 'mapbox-gl';
import MapboxGeocoder from '@mapbox/mapbox-gl-geocoder';
import '@mapbox/mapbox-gl-geocoder/dist/mapbox-gl-geocoder.css';
import 'mapbox-gl/dist/mapbox-gl.css';
import AddressFieldGroup from "@/Components/AddressFieldGroup.vue";
import QuestionForm from "@/Components/QuestionForm.vue";
import __ from "@/lang.js";

const props = defineProps({
    categories: Array,
    workingModes: Array,
    typesOfContract: Array,
    countries: Array,
    workingPlaces: Array,
    workLoads: Array,
    currencies: Array,
    shiftWorks: Array,
    payoutModes: Array,
    days: Array,
    paySystems: Array,
    offers: Array,
    waits: Array,
    experiences: Array,
    welcomes: Array,
    educations: Array,
    cvs: Array,
    externalCompanies: Array,
});

// Kroki formularza
const currentStep = ref(1);
const totalSteps = 3; // Zmieniono na 3 kroki
const isValidating = ref(false);

const validateStep = async (step) => {
    form.clearErrors();
    isValidating.value = true;
    try {
        const response = await axios.post(route('projects.validate-step'), {
            step: step,
            ...form.data()
        });

        isValidating.value = false;
        return response.data.valid;
    } catch (error) {
        isValidating.value = false;

        if (error.response && error.response.status === 422) {
            // Ustawienie błędów walidacji z backendu
            const errors = error.response.data.errors;
            Object.keys(errors).forEach(key => {
                form.setError(key, errors[key][0]);
            });

            // Scroll do pierwszego błędu
            setTimeout(() => {
                const firstError = document.querySelector('.text-red-600');
                if (firstError) {
                    firstError.scrollIntoView({ behavior: 'smooth', block: 'center' });
                }
            }, 100);

            return false;
        }

        console.error(__('translate.validationError'), error);
        return false;
    }
};

const nextStep = async () => {
    if (currentStep.value < totalSteps) {
        // Walidacja aktualnego kroku
        const isValid = await validateStep(currentStep.value);

        if (isValid) {
            currentStep.value++;
            window.scrollTo({ top: 0, behavior: 'smooth' });
        }
    }
};

const prevStep = () => {
    if (currentStep.value > 1) {
        // Czyszczenie błędów przy cofaniu
        form.clearErrors();
        currentStep.value--;
        window.scrollTo({ top: 0, behavior: 'smooth' });
    }
};

const goToStep = async (step) => {
    if (step >= 1 && step <= totalSteps) {
        // Jeśli idziemy do przodu, walidujemy wszystkie poprzednie kroki
        if (step > currentStep.value) {
            for (let i = currentStep.value; i < step; i++) {
                const isValid = await validateStep(i);
                if (!isValid) {
                    return; // Zatrzymaj jeśli którykolwiek krok nie jest poprawny
                }
            }
        }

        // Czyszczenie błędów przy cofaniu
        if (step < currentStep.value) {
            form.clearErrors();
        }

        currentStep.value = step;
        window.scrollTo({ top: 0, behavior: 'smooth' });
    }
};

const form = useForm({
    category: '',
    categorySub: '',
    profession: '',
    position: '',
    title: '',
    currency: props.currencies?.[0] || '',
    basicSalaryFrom: '',
    basicSalaryTo: '',
    bonusSalaryFrom: '',
    bonusSalaryTo: '',
    hoursFrom: '08:00',
    hoursTo: '16:00',
    workLoad: '',
    education: '',
    shiftWork: '',
    payoutMode: '',
    workNight: 2,
    workingMode: [],
    typeOfContract: [],
    paySystem: [],
    workingPlace: '',
    country: [],
    days: [],
    offer: [],
    wait: [],
    experience: '',
    welcome: [],
    detailProjects:  [],
    countryWork: '',
    streetWork: '',
    streetWorkNumber: '',
    postalWork: '',
    cityWork: '',
    cv: [],
    questions: [],
    external_company_id: '',
    is_active: true,
});

const optionsCategory = ref(props.categories);
const optionsCountry = ref(props.countries);
const optionsWorkingPlace = ref(props.workingPlaces);
const optionsCurrency = ref(props.currencies);
const optionsSubCategory = ref([]);
const optionsProfession = ref([]);
const optionsPosition = ref([]);
let workingModeSelect = ref([]);
let workLoadSelect = ref(null);
let typesOfContractSelect = ref([]);
let paySystemSelect = ref([]);
let payoutModeSelect = ref(null);
let daySelect = ref([]);
let offerSelect = ref([]);
let welcomeSelect = ref([]);
let waitSelect = ref([]);
let cvSelect = ref([]);
let educationSelect = ref(null);

// Filtry dla sekcji Oczekujemy, Mile widziane i Oferujemy
const waitFilter = ref('');
const welcomeFilter = ref('');
const offerFilter = ref('');

// Computed properties dla przefiltrowanych list
const filteredWaits = computed(() => {
    if (!props.waits) return [];
    if (!waitFilter.value.trim()) return props.waits;

    const search = waitFilter.value.toLowerCase().trim();
    return props.waits.filter(wait =>
        wait.name.toLowerCase().includes(search)
    );
});

const filteredWelcomes = computed(() => {
    if (!props.welcomes) return [];
    if (!welcomeFilter.value.trim()) return props.welcomes;

    const search = welcomeFilter.value.toLowerCase().trim();
    return props.welcomes.filter(welcome =>
        welcome.name.toLowerCase().includes(search)
    );
});

const filteredOffers = computed(() => {
    if (!props.offers) return [];
    if (!offerFilter.value.trim()) return props.offers;

    const search = offerFilter.value.toLowerCase().trim();
    return props.offers.filter(offer =>
        offer.name.toLowerCase().includes(search)
    );
});

onMounted(async () => {
    // Inicjalizacja Mapbox
    mapboxgl.accessToken = usePage().props.mapboxToken;

    const map = new mapboxgl.Map({
        container: 'map',
        style: 'mapbox://styles/mapbox/streets-v12',
        center: [19.1451, 51.9194], // Centrum Polski
        zoom: 5
    });

    const geocoder = new MapboxGeocoder({
        accessToken: mapboxgl.accessToken,
        mapboxgl: mapboxgl,
        placeholder: __('translate.searchAddress') || 'Szukaj adresu...',
        countries: 'pl,de,nl,be,fr,at,at,ch,it,es,gb,dk,se,no',
        types: 'address,postcode,place'
    });

    document.getElementById('geocoder').appendChild(geocoder.onAdd(map));

    geocoder.on('result', (e) => {
        const result = e.result;
        const context = result.context;

        form.streetWork = result.text || '';
        form.streetWorkNumber = result.address || '';

        // Parsowanie kontekstu Mapbox dla miasta, kodu pocztowego i kraju
        context.forEach(item => {
            if (item.id.includes('place')) {
                form.cityWork = item.text;
            } else if (item.id.includes('postcode')) {
                form.postalWork = item.text;
            } else if (item.id.includes('country')) {
                const countryName = item.text;
                const countryCode = item.short_code?.toUpperCase();

                // Próba dopasowania do props.countries
                const matchedCountry = props.countries.flatMap(g => g.elements)
                    .find(c => c.countryCode === countryCode || c.name === countryName);

                if (matchedCountry) {
                    form.countryWork = matchedCountry;
                }
            }
        });
    });
});

watch(() => form.category, async (category) => {
    if (form.category) {
        optionsSubCategory.value = (await axios.get(route('category.sub', category.value))).data
    }
    optionsProfession.value = [];
    optionsPosition.value = [];
    form.categorySub = '';
    form.profession = '';
    form.position = '';
});

watch(() => form.categorySub, async (categorySub) => {
    if (form.categorySub) {
        optionsProfession.value = (await axios.get(route('category.professions', categorySub.value))).data
    }
    optionsPosition.value = [];
    form.profession = '';
    form.position = '';
});

watch(() => form.profession, async (profession) => {
    if (form.profession) {
        optionsPosition.value = (await axios.get(route('category.positions', profession.value))).data
    }
    form.position = '';
});

const submit = () => {
    form.post(route('projects.store'), {
        preserveScroll: true,
        onSuccess: () => {
            // form.reset();
        },
    });
};

const addToArray = (array, name) => {
    if (array.includes(name)) {
        let found = array.indexOf(name);
        array.splice(found, 1);
    } else {
        array.push(name)
    }
}

const lang = computed(() => usePage().props.language);

// Obsługa doświadczenia (toggle)
const isExperienceEnabled = ref(false);
const toggleExperience = () => {
    isExperienceEnabled.value = !isExperienceEnabled.value;
    if (!isExperienceEnabled.value) {
        form.experience = '';
    } else if (props.experiences && props.experiences.length > 0) {
        form.experience = props.experiences[0];
    }
};

// Sprawdzenie czy powinny być wyświetlane pytania (form.cv jest 2 lub 3)
const shouldShowQuestions = computed(() => {
    return form.cv.some(item => item.id === 2 || item.id === 3);
});

watch(() => form.cv, (newValue) => {
    if (!newValue.some(item => item.id === 2 || item.id === 3)) {
        form.questions = [];
    }
}, { deep: true });

</script>

<template>
    <AppLayout :title="__('translate.createProject')">
        <template #header>
            <div class="flex justify-between items-center">
                <h2 class="font-bold text-2xl text-gray-800 leading-tight">
                    {{ __('translate.createProject') }}
                </h2>
                <Link :href="route('projects.index')" class="text-gray-500 hover:text-gray-700 transition-colors">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </Link>
            </div>
        </template>

        <div class="py-12 bg-gray-50 min-h-screen">
            <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
                <!-- Stepper Progress -->
                <nav class="mb-12">
                    <ol class="flex items-center justify-between w-full relative">
                        <div class="absolute top-1/2 left-0 w-full h-1 bg-gray-200 -translate-y-1/2 z-0"></div>
                        <div
                            class="absolute top-1/2 left-0 h-1 bg-[#00a0e3] -translate-y-1/2 z-0 transition-all duration-500"
                            :style="{ width: ((currentStep - 1) / (totalSteps - 1) * 100) + '%' }"
                        ></div>

                        <li v-for="step in totalSteps" :key="step" class="relative z-10">
                            <button
                                @click="goToStep(step)"
                                :disabled="isValidating"
                                class="flex flex-col items-center group"
                            >
                                <div
                                    :class="[
                                        'w-12 h-12 rounded-full flex items-center justify-center font-bold text-lg transition-all duration-300 border-4',
                                        currentStep === step ? 'bg-white border-[#00a0e3] text-[#00a0e3] scale-110 shadow-lg' :
                                        currentStep > step ? 'bg-[#00a0e3] border-[#00a0e3] text-white' :
                                        'bg-white border-gray-200 text-gray-400'
                                    ]"
                                >
                                    <svg v-if="currentStep > step" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7" />
                                    </svg>
                                    <span v-else>{{ step }}</span>
                                </div>
                                <span
                                    :class="[
                                        'mt-2 text-xs font-bold uppercase tracking-wider transition-colors',
                                        currentStep === step ? 'text-[#00a0e3]' : 'text-gray-400'
                                    ]"
                                >
                                    {{ step === 1 ? 'Podstawy' : step === 2 ? 'Lokalizacja' : 'Szczegóły' }}
                                </span>
                            </button>
                        </li>
                    </ol>
                </nav>

                <!-- Formularz -->
                <form @submit.prevent="submit">
                    <!-- KROK 1: Podstawowe informacje -->
                    <div v-show="currentStep === 1" class="space-y-6 animate-fadeIn">
                        <div class="bg-white rounded-xl shadow-sm border border-gray-200 p-8">
                            <h3 class="text-xl font-bold text-gray-900 mb-8 border-b pb-4">{{ __('translate.category') }}</h3>

                            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                                <div class="space-y-2">
                                    <InputLabel :value="__('translate.category')" class="font-semibold text-gray-700" />
                                    <multiselect
                                        v-model="form.category"
                                        :options="optionsCategory"
                                        track-by="value"
                                        label="name"
                                        :placeholder="__('translate.placeholder')"
                                    />
                                    <InputError :message="form.errors.category" />
                                </div>

                                <div class="space-y-2">
                                    <InputLabel :value="__('translate.subcategory')" class="font-semibold text-gray-700" />
                                    <multiselect
                                        v-model="form.categorySub"
                                        :options="optionsSubCategory"
                                        track-by="value"
                                        label="name"
                                        :placeholder="__('translate.placeholder')"
                                    />
                                    <InputError :message="form.errors.categorySub" />
                                </div>

                                <div class="space-y-2">
                                    <InputLabel :value="__('translate.profession')" class="font-semibold text-gray-700" />
                                    <multiselect
                                        v-model="form.profession"
                                        :options="optionsProfession"
                                        track-by="value"
                                        label="name"
                                        :placeholder="__('translate.placeholder')"
                                    />
                                    <InputError :message="form.errors.profession" />
                                </div>

                                <div class="space-y-2">
                                    <InputLabel :value="__('translate.position')" class="font-semibold text-gray-700" />
                                    <multiselect
                                        v-model="form.position"
                                        :options="optionsPosition"
                                        track-by="value"
                                        label="name"
                                        :placeholder="__('translate.placeholder')"
                                    />
                                    <InputError :message="form.errors.position" />
                                </div>
                            </div>
                        </div>

                        <div class="bg-white rounded-xl shadow-sm border border-gray-200 p-8">
                            <h3 class="text-xl font-bold text-gray-900 mb-8 border-b pb-4">Tryb i miejsce pracy</h3>

                            <div class="grid grid-cols-1 md:grid-cols-2 gap-12">
                                <div class="space-y-4">
                                    <InputLabel :value="__('translate.workingMode')" class="font-bold text-gray-900" />
                                    <div class="grid grid-cols-1 gap-3">
                                        <label v-for="mode in workingModes" :key="mode.value" class="flex items-center p-4 bg-gray-50 rounded-lg cursor-pointer hover:bg-gray-100 transition-colors border-2 border-transparent has-[:checked]:border-[#00a0e3] has-[:checked]:bg-blue-50">
                                            <input type="checkbox" :value="mode" v-model="form.workingMode" class="w-5 h-5 text-[#00a0e3] border-gray-300 rounded focus:ring-[#00a0e3]" />
                                            <span class="ml-3 font-medium text-gray-700">{{ mode.name }}</span>
                                        </label>
                                    </div>
                                    <InputError :message="form.errors.workingMode" />
                                </div>

                                <div class="space-y-4">
                                    <InputLabel :value="__('translate.workingPlace')" class="font-bold text-gray-900" />
                                    <multiselect
                                        v-model="form.workingPlace"
                                        :options="optionsWorkingPlace"
                                        track-by="value"
                                        label="name"
                                        :placeholder="__('translate.placeholder')"
                                    />
                                    <InputError :message="form.errors.workingPlace" />
                                </div>
                            </div>
                        </div>

                        <div class="flex justify-end mt-8">
                            <button
                                type="button"
                                @click="nextStep"
                                :disabled="isValidating"
                                class="px-10 py-4 bg-[#00a0e3] text-white font-bold rounded-xl shadow-lg hover:bg-blue-600 transition-all transform active:scale-95 disabled:opacity-50 flex items-center gap-2"
                            >
                                <span v-if="isValidating" class="animate-spin h-5 w-5 border-2 border-white border-t-transparent rounded-full"></span>
                                {{ __('translate.next') }} →
                            </button>
                        </div>
                    </div>

                    <!-- KROK 2: Lokalizacja -->
                    <div v-show="currentStep === 2" class="space-y-6 animate-fadeIn">
                        <div class="bg-white rounded-xl shadow-sm border border-gray-200 p-8">
                            <h3 class="text-xl font-bold text-gray-900 mb-8 border-b pb-4">{{ __('translate.location') }}</h3>

                            <div class="mb-8 space-y-4">
                                <InputLabel :value="__('translate.searchAddress') || 'Wyszukaj adres i lokalizację'" class="font-bold text-[#0d2a52]" />
                                <div id="geocoder" class="mapbox-geocoder-container"></div>
                                <div id="map" class="h-[300px] rounded-xl border-2 border-gray-100 shadow-inner mt-4"></div>
                            </div>

                            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                                <div class="space-y-2">
                                    <InputLabel :value="__('translate.Country')" class="font-semibold text-gray-700" />
                                    <multiselect
                                        v-model="form.countryWork"
                                        :options="optionsCountry"
                                        group-values="elements"
                                        group-label="group"
                                        track-by="name"
                                        label="name"
                                        :placeholder="__('translate.placeholder')"
                                    />
                                    <InputError :message="form.errors.countryWork" />
                                </div>

                                <div class="grid grid-cols-2 gap-4">
                                    <div class="space-y-2">
                                        <InputLabel :value="__('translate.City')" class="font-semibold text-gray-700" />
                                        <TextInput v-model="form.cityWork" class="w-full" />
                                        <InputError :message="form.errors.cityWork" />
                                    </div>
                                    <div class="space-y-2">
                                        <InputLabel :value="__('translate.postalCode')" class="font-semibold text-gray-700" />
                                        <TextInput v-model="form.postalWork" class="w-full" />
                                        <InputError :message="form.errors.postalWork" />
                                    </div>
                                </div>

                                <div class="space-y-2">
                                    <InputLabel :value="__('translate.Street')" class="font-semibold text-gray-700" />
                                    <TextInput v-model="form.streetWork" class="w-full" />
                                    <InputError :message="form.errors.streetWork" />
                                </div>

                                <div class="space-y-2">
                                    <InputLabel :value="__('translate.streetNumber')" class="font-semibold text-gray-700" />
                                    <TextInput v-model="form.streetWorkNumber" class="w-full" />
                                    <InputError :message="form.errors.streetWorkNumber" />
                                </div>
                            </div>
                        </div>

                        <div class="flex justify-between mt-8">
                            <button
                                type="button"
                                @click="prevStep"
                                class="px-8 py-4 bg-white border-2 border-gray-200 text-gray-600 font-bold rounded-xl hover:bg-gray-50 transition-all"
                            >
                                ← {{ __('translate.previous') }}
                            </button>
                            <button
                                type="button"
                                @click="nextStep"
                                :disabled="isValidating"
                                class="px-10 py-4 bg-[#00a0e3] text-white font-bold rounded-xl shadow-lg hover:bg-blue-600 transition-all disabled:opacity-50 flex items-center gap-2"
                            >
                                <span v-if="isValidating" class="animate-spin h-5 w-5 border-2 border-white border-t-transparent rounded-full"></span>
                                {{ __('translate.next') }} →
                            </button>
                        </div>
                    </div>

                    <!-- KROK 3: Szczegóły, wynagrodzenie i wymagania -->
                    <div v-show="currentStep === 3" class="space-y-6 animate-fadeIn">
                        <!-- Wynagrodzenie -->
                        <div class="bg-white rounded-xl shadow-sm border border-gray-200 p-8">
                            <h3 class="text-xl font-bold text-gray-900 mb-8 border-b pb-4">{{ __('translate.salary') }}</h3>

                            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-8">
                                <div class="space-y-2">
                                    <InputLabel :value="__('translate.basicSalaryFrom')" class="font-semibold text-gray-700" />
                                    <div class="relative">
                                        <TextInput type="number" v-model="form.basicSalaryFrom" class="w-full pl-10" />
                                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                            <span class="text-gray-500">$</span>
                                        </div>
                                    </div>
                                    <InputError :message="form.errors.basicSalaryFrom" />
                                </div>

                                <div class="space-y-2">
                                    <InputLabel :value="__('translate.basicSalaryTo')" class="font-semibold text-gray-700" />
                                    <div class="relative">
                                        <TextInput type="number" v-model="form.basicSalaryTo" class="w-full pl-10" />
                                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                            <span class="text-gray-500">$</span>
                                        </div>
                                    </div>
                                    <InputError :message="form.errors.basicSalaryTo" />
                                </div>

                                <div class="space-y-2">
                                    <InputLabel :value="__('translate.currency')" class="font-semibold text-gray-700" />
                                    <multiselect v-model="form.currency" :options="optionsCurrency" track-by="value" label="name" />
                                    <InputError :message="form.errors.currency" />
                                </div>
                            </div>

                            <div class="space-y-4">
                                <InputLabel :value="__('translate.payoutModes')" class="font-bold text-gray-900" />
                                <div class="flex flex-wrap gap-4">
                                    <label v-for="mode in payoutModes" :key="mode.id" class="flex items-center px-6 py-3 bg-gray-50 rounded-full cursor-pointer hover:bg-gray-100 transition-colors border-2 border-transparent has-[:checked]:border-[#00a0e3] has-[:checked]:bg-blue-50">
                                        <input type="radio" :value="mode" v-model="form.payoutMode" class="w-4 h-4 text-[#00a0e3] border-gray-300 focus:ring-[#00a0e3]" />
                                        <span class="ml-2 font-medium text-gray-700">{{ mode.name }}</span>
                                    </label>
                                </div>
                                <InputError :message="form.errors.payoutMode" />
                            </div>
                        </div>

                        <!-- Rodzaje umów i systemy wypłat -->
                        <div class="bg-white rounded-xl shadow-sm border border-gray-200 p-8">
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-12">
                                <div class="space-y-4">
                                    <InputLabel :value="__('translate.typesOfContract')" class="font-bold text-gray-900" />
                                    <div class="space-y-2">
                                        <label v-for="type in typesOfContract" :key="type.id" class="flex items-center p-3 bg-gray-50 rounded-lg cursor-pointer hover:bg-gray-100 transition-colors border-2 border-transparent has-[:checked]:border-[#00a0e3] has-[:checked]:bg-blue-50">
                                            <input type="checkbox" :value="type" v-model="form.typeOfContract" class="w-5 h-5 text-[#00a0e3] border-gray-300 rounded focus:ring-[#00a0e3]" />
                                            <span class="ml-3 text-sm font-medium text-gray-700">{{ type.name }}</span>
                                        </label>
                                    </div>
                                    <InputError :message="form.errors.typeOfContract" />
                                </div>

                                <div class="space-y-4">
                                    <InputLabel :value="__('translate.paySystem')" class="font-bold text-gray-900" />
                                    <div class="space-y-2">
                                        <label v-for="system in paySystems" :key="system.id" class="flex items-center p-3 bg-gray-50 rounded-lg cursor-pointer hover:bg-gray-100 transition-colors border-2 border-transparent has-[:checked]:border-[#00a0e3] has-[:checked]:bg-blue-50">
                                            <input type="checkbox" :value="system" v-model="form.paySystem" class="w-5 h-5 text-[#00a0e3] border-gray-300 rounded focus:ring-[#00a0e3]" />
                                            <span class="ml-3 text-sm font-medium text-gray-700">{{ system.name }}</span>
                                        </label>
                                    </div>
                                    <InputError :message="form.errors.paySystem" />
                                </div>
                            </div>
                        </div>

                        <!-- Czas pracy i systemy zmianowe -->
                        <div class="bg-white rounded-xl shadow-sm border border-gray-200 p-8">
                            <h3 class="text-xl font-bold text-gray-900 mb-8 border-b pb-4">Czas pracy i zmiany</h3>

                            <div class="grid grid-cols-1 md:grid-cols-2 gap-12">
                                <div class="space-y-6">
                                    <div class="space-y-4">
                                        <InputLabel :value="__('translate.workLoads')" class="font-bold text-gray-900" />
                                        <div class="grid grid-cols-2 gap-3">
                                            <label v-for="load in workLoads" :key="load.value" class="flex items-center p-3 bg-gray-50 rounded-lg cursor-pointer hover:bg-gray-100 border-2 border-transparent has-[:checked]:border-[#00a0e3] has-[:checked]:bg-blue-50">
                                                <input type="radio" :value="load" v-model="form.workLoad" class="w-4 h-4 text-[#00a0e3] border-gray-300" />
                                                <span class="ml-2 text-sm font-medium text-gray-700">{{ load.name }}</span>
                                            </label>
                                        </div>
                                        <InputError :message="form.errors.workLoad" />
                                    </div>

                                    <div class="space-y-4">
                                        <InputLabel :value="__('translate.workNight')" class="font-bold text-gray-900" />
                                        <div class="flex gap-6">
                                            <label class="flex items-center cursor-pointer group">
                                                <input type="radio" value="1" v-model="form.workNight" class="w-5 h-5 text-[#00a0e3] border-gray-300 focus:ring-[#00a0e3]" />
                                                <span class="ml-2 font-medium text-gray-700 group-hover:text-[#00a0e3]">{{ __('translate.yes') }}</span>
                                            </label>
                                            <label class="flex items-center cursor-pointer group">
                                                <input type="radio" value="2" v-model="form.workNight" class="w-5 h-5 text-[#00a0e3] border-gray-300 focus:ring-[#00a0e3]" />
                                                <span class="ml-2 font-medium text-gray-700 group-hover:text-[#00a0e3]">{{ __('translate.no') }}</span>
                                            </label>
                                        </div>
                                        <InputError :message="form.errors.workNight" />
                                    </div>
                                </div>

                                <div class="space-y-6">
                                    <div class="space-y-4">
                                        <InputLabel :value="__('translate.shiftWorks')" class="font-bold text-gray-900" />
                                        <div class="grid grid-cols-1 gap-2">
                                            <label v-for="shift in shiftWorks" :key="shift.id" class="flex items-center p-3 bg-gray-50 rounded-lg cursor-pointer hover:bg-gray-100 border-2 border-transparent has-[:checked]:border-[#00a0e3] has-[:checked]:bg-blue-50">
                                                <input type="radio" :value="shift.id" v-model="form.shiftWork" class="w-4 h-4 text-[#00a0e3] border-gray-300" />
                                                <span class="ml-2 text-sm font-medium text-gray-700">{{ shift.name }}</span>
                                            </label>
                                        </div>
                                        <InputError :message="form.errors.shiftWork" />
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Oczekujemy / Mile widziane / Oferujemy -->
                        <div class="bg-white rounded-xl shadow-sm border border-gray-200 p-8">
                            <h3 class="text-xl font-bold text-gray-900 mb-8 border-b pb-4">Wymagania i oferta</h3>

                            <!-- Oczekujemy -->
                            <div class="mb-12">
                                <div class="flex items-center justify-between mb-4">
                                    <InputLabel :value="__('translate.wait')" class="text-lg font-bold text-gray-900" />
                                    <div class="relative w-64">
                                        <input type="text" v-model="waitFilter" placeholder="Filtruj..." class="w-full text-xs border-gray-300 rounded-lg focus:ring-[#00a0e3] pl-8" />
                                        <svg class="w-4 h-4 text-gray-400 absolute left-2.5 top-1/2 -translate-y-1/2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                                        </svg>
                                    </div>
                                </div>
                                <div v-if="filteredWaits.length" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-3 max-h-[300px] overflow-y-auto p-2 border rounded-xl bg-gray-50">
                                    <label v-for="wait in filteredWaits" :key="wait.id" class="flex items-center p-3 bg-white rounded-lg cursor-pointer hover:bg-gray-100 shadow-sm border border-transparent has-[:checked]:border-[#00a0e3]">
                                        <input type="checkbox" :value="wait" v-model="form.wait" class="w-4 h-4 text-[#00a0e3] rounded border-gray-300 focus:ring-[#00a0e3]" />
                                        <span class="ml-3 text-sm font-medium text-gray-700">{{ wait.name }}</span>
                                    </label>
                                </div>
                                <InputError :message="form.errors.wait" />
                            </div>

                            <!-- Mile widziane -->
                            <div class="mb-12">
                                <div class="flex items-center justify-between mb-4">
                                    <InputLabel :value="__('translate.welcome')" class="text-lg font-bold text-gray-900" />
                                    <div class="relative w-64">
                                        <input type="text" v-model="welcomeFilter" placeholder="Filtruj..." class="w-full text-xs border-gray-300 rounded-lg focus:ring-[#00a0e3] pl-8" />
                                        <svg class="w-4 h-4 text-gray-400 absolute left-2.5 top-1/2 -translate-y-1/2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                                        </svg>
                                    </div>
                                </div>
                                <div v-if="filteredWelcomes.length" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-3 max-h-[300px] overflow-y-auto p-2 border rounded-xl bg-gray-50">
                                    <label v-for="welcome in filteredWelcomes" :key="welcome.id" class="flex items-center p-3 bg-white rounded-lg cursor-pointer hover:bg-gray-100 shadow-sm border border-transparent has-[:checked]:border-[#00a0e3]">
                                        <input type="checkbox" :value="welcome" v-model="form.welcome" class="w-4 h-4 text-[#00a0e3] rounded border-gray-300 focus:ring-[#00a0e3]" />
                                        <span class="ml-3 text-sm font-medium text-gray-700">{{ welcome.name }}</span>
                                    </label>
                                </div>
                                <InputError :message="form.errors.welcome" />
                            </div>

                            <!-- Oferujemy -->
                            <div class="mb-4">
                                <div class="flex items-center justify-between mb-4">
                                    <InputLabel :value="__('translate.offer')" class="text-lg font-bold text-gray-900" />
                                    <div class="relative w-64">
                                        <input type="text" v-model="offerFilter" placeholder="Filtruj..." class="w-full text-xs border-gray-300 rounded-lg focus:ring-[#00a0e3] pl-8" />
                                        <svg class="w-4 h-4 text-gray-400 absolute left-2.5 top-1/2 -translate-y-1/2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                                        </svg>
                                    </div>
                                </div>
                                <div v-if="filteredOffers.length" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-3 max-h-[300px] overflow-y-auto p-2 border rounded-xl bg-gray-50">
                                    <label v-for="offer in filteredOffers" :key="offer.id" class="flex items-center p-3 bg-white rounded-lg cursor-pointer hover:bg-gray-100 shadow-sm border border-transparent has-[:checked]:border-[#00a0e3]">
                                        <input type="checkbox" :value="offer" v-model="form.offer" class="w-4 h-4 text-[#00a0e3] rounded border-gray-300 focus:ring-[#00a0e3]" />
                                        <span class="ml-3 text-sm font-medium text-gray-700">{{ offer.name }}</span>
                                    </label>
                                </div>
                                <InputError :message="form.errors.offer" />
                            </div>
                        </div>

                        <!-- Inne wymagania -->
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                            <!-- Doświadczenie -->
                            <div class="bg-white rounded-xl shadow-sm border border-gray-200 p-8">
                                <h3 class="text-xl font-bold text-gray-900 mb-6 border-b pb-4">{{ __('translate.experience') }}</h3>
                                <div class="bg-gray-50 rounded-xl p-6 border-2 border-transparent" :class="{ 'border-[#00a0e3] bg-blue-50': isExperienceEnabled }">
                                    <div class="flex items-center justify-between mb-4">
                                        <div>
                                            <p class="font-bold text-gray-900">Wymagane doświadczenie?</p>
                                            <p class="text-sm text-gray-500">Włącz, aby wybrać poziom doświadczenia</p>
                                        </div>
                                        <button type="button" @click="toggleExperience" :class="[isExperienceEnabled ? 'bg-[#00a0e3]' : 'bg-gray-300', 'relative inline-flex h-8 w-14 items-center rounded-full transition-colors focus:outline-none focus:ring-2 focus:ring-[#00a0e3] focus:ring-offset-2']">
                                            <span :class="[isExperienceEnabled ? 'translate-x-7' : 'translate-x-1', 'inline-block h-6 w-6 transform rounded-full bg-white transition-transform']"></span>
                                        </button>
                                    </div>

                                    <div v-if="isExperienceEnabled" class="space-y-3 mt-6 animate-fadeIn">
                                        <label v-for="exp in experiences" :key="exp.value" class="flex items-center p-3 bg-white rounded-lg cursor-pointer border-2 border-transparent has-[:checked]:border-[#00a0e3] shadow-sm">
                                            <input type="radio" :value="exp" v-model="form.experience" class="w-4 h-4 text-[#00a0e3]" />
                                            <span class="ml-3 text-sm font-medium text-gray-700">{{ exp.name }}</span>
                                        </label>
                                    </div>
                                </div>
                                <InputError :message="form.errors.experience" />
                            </div>

                            <!-- Wykształcenie -->
                            <div class="bg-white rounded-xl shadow-sm border border-gray-200 p-8">
                                <h3 class="text-xl font-bold text-gray-900 mb-6 border-b pb-4">{{ __('translate.education') }}</h3>
                                <div class="space-y-3">
                                    <label v-for="edu in educations" :key="edu.id" class="flex items-center p-3 bg-gray-50 rounded-lg cursor-pointer border-2 border-transparent has-[:checked]:border-[#00a0e3] has-[:checked]:bg-blue-50 transition-all">
                                        <input type="radio" :value="edu.id" v-model="form.education" class="w-4 h-4 text-[#00a0e3]" />
                                        <span class="ml-3 text-sm font-medium text-gray-700">{{ edu.name }}</span>
                                    </label>
                                </div>
                                <InputError :message="form.errors.education" />
                            </div>
                        </div>

                        <!-- CV i Pytania -->
                        <div class="bg-white rounded-xl shadow-sm border border-gray-200 p-8">
                            <h3 class="text-xl font-bold text-gray-900 mb-8 border-b pb-4">Wymagania rekrutacyjne (CV)</h3>

                            <div class="space-y-6">
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                    <label v-for="cvType in cvs" :key="cvType.id" class="flex items-center p-4 bg-gray-50 rounded-xl cursor-pointer border-2 border-transparent has-[:checked]:border-[#00a0e3] has-[:checked]:bg-blue-50 transition-all shadow-sm">
                                        <input type="checkbox" :value="cvType" v-model="form.cv" class="w-5 h-5 text-[#00a0e3] rounded border-gray-300" />
                                        <div class="ml-4">
                                            <p class="font-bold text-gray-900 text-sm">{{ cvType.name }}</p>
                                        </div>
                                    </label>
                                </div>
                                <InputError :message="form.errors.cv" />

                                <!-- Sekcja pytań do projektu -->
                                <div v-if="shouldShowQuestions" class="mt-12 animate-fadeIn">
                                    <div class="p-6 bg-blue-50 rounded-2xl border-2 border-blue-100 mb-8">
                                        <h3 class="font-bold text-blue-900 flex items-center gap-2">
                                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                            </svg>
                                            {{ __('translate.questionsInfo') }}
                                        </h3>
                                        <p class="text-sm text-blue-700 mt-2">
                                            {{ __('translate.questionsDescription') }}
                                        </p>
                                    </div>
                                    <QuestionForm v-model="form.questions" :error="form.errors" />
                                </div>
                            </div>
                        </div>

                        <!-- Widoczność projektu -->
                        <div class="bg-white rounded-xl shadow-sm border border-gray-200 p-8">
                            <label class="flex items-center cursor-pointer group">
                                <div class="relative">
                                    <input type="checkbox" v-model="form.is_active" class="sr-only" />
                                    <div :class="[form.is_active ? 'bg-[#00a0e3]' : 'bg-gray-300', 'w-14 h-8 rounded-full transition-colors']"></div>
                                    <div :class="[form.is_active ? 'translate-x-7' : 'translate-x-1', 'absolute top-1 left-0 w-6 h-6 bg-white rounded-full transition-transform shadow']"></div>
                                </div>
                                <div class="ml-4">
                                    <span class="text-lg font-bold text-gray-900 group-hover:text-[#00a0e3] transition-colors">{{ __('translate.projectIsActive') }}</span>
                                    <p class="text-sm text-gray-500">{{ __('translate.projectIsActiveDescription') }}</p>
                                </div>
                            </label>
                        </div>

                        <!-- Przyciski nawigacji i submit -->
                        <div class="flex justify-between mt-12 bg-gray-100 p-6 rounded-2xl shadow-inner border border-gray-200">
                            <button
                                type="button"
                                @click="prevStep"
                                class="px-10 py-4 bg-white border-2 border-gray-200 text-gray-600 font-bold rounded-xl hover:bg-gray-50 transition-all flex items-center gap-2"
                            >
                                ← {{ __('translate.previous') }}
                            </button>
                            <PrimaryButton
                                type="submit"
                                :class="[form.processing ? 'opacity-50 cursor-not-allowed' : 'hover:bg-blue-600 scale-105 shadow-xl', 'px-16 py-4 bg-[#00a0e3] text-white font-bold rounded-xl transition-all transform active:scale-95 text-lg']"
                                :disabled="form.processing"
                            >
                                <spinner-action :process="form.processing">{{__('translate.create')}}</spinner-action>
                            </PrimaryButton>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </AppLayout>
</template>

<style src="vue-multiselect/dist/vue-multiselect.css"></style>
<style lang="scss">
@keyframes fadeIn {
    from { opacity: 0; transform: translateY(10px); }
    to { opacity: 1; transform: translateY(0); }
}
.animate-fadeIn {
    animation: fadeIn 0.4s ease-out forwards;
}

.mapbox-geocoder-container {
    .mapboxgl-ctrl-geocoder {
        width: 100%;
        max-width: none;
        box-shadow: none;
        border: 1px solid #d1d5db;
        border-radius: 0.75rem;
        min-height: 3.5rem;

        .mapboxgl-ctrl-geocoder--input {
            padding: 1rem 3rem 1rem 3rem !important;
            font-size: 1rem;
            height: 3.5rem !important;
        }

        .mapboxgl-ctrl-geocoder--icon {
            top: 50% !important;
            transform: translateY(-50%) !important;
            left: 1rem !important;
        }
    }
}

.multiselect__tags {
    border: 1px solid #d1d5db !important;
    border-radius: 0.75rem !important;
    padding: 0.75rem 2.5rem 0.75rem 1rem !important;
    min-height: 3rem !important;
}
.multiselect__single { margin-bottom: 0 !important; line-height: 1.5rem !important; }
.multiselect__option--highlight { background: #00a0e3 !important; }
.multiselect__tag { background: #00a0e3 !important; }
</style>
