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
        const response = await axios.post(route('project-recruits.validate-step'), {
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
    currency: '',
    basicSalaryFrom: '',
    basicSalaryTo: '',
    bonusSalaryFrom: '',
    bonusSalaryTo: '',
    hoursFrom: '',
    hoursTo: '',
    workLoad: '',
    education: '',
    shiftWork: 2, // 2 = NIE, 1 = TAK
    payoutMode: '',
    workNight: 2, // 2 = NIE, 1 = TAK
    workingMode: [],
    typeOfContract: [],
    paySystem: [],
    workingPlace: [],
    country: [],
    days: [],
    offer: [],
    wait: [],
    experience: '',
    welcome: [],
    detailProjects: [],
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

const toggleCvType = (cv) => {
    const index = form.cv.findIndex(item => item.id === cv.id);
    if (index === -1) {
        form.cv.push(cv);
        cvSelect.value.push(cv.name);
    } else {
        form.cv.splice(index, 1);
        cvSelect.value = cvSelect.value.filter(name => name !== cv.name);
    }
};

const toggleArrayItem = (item, formArray, selectRef) => {
    const index = formArray.findIndex(i => (i.id || i.value) === (item.id || item.value));
    if (index === -1) {
        formArray.push(item);
        selectRef.value.push(item.name || item.title);
    } else {
        formArray.splice(index, 1);
        selectRef.value = selectRef.value.filter(name => name !== (item.name || item.title));
    }
};

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

watch(() => form.category, async (category) => {
    if (form.category) {
        optionsSubCategory.value =(await axios.get(route('getChildsCategory',category.value))).data
    }
        optionsProfession.value = [];
        optionsPosition.value = [];
        form.categorySub = '';
        form.profession = '';
        form.position = '';
        form.detailProjects = [];
});
watch(() => form.categorySub, async (categorySub) => {
    if (form.categorySub) {
        optionsProfession.value =(await axios.get(route('getChildsCategory',categorySub.value))).data
    }
        optionsPosition.value = [];
        form.profession = '';
        form.position = '';
    form.detailProjects = [];

});

watch(() => form.profession, async (profession) => {
    if (form.profession) {
        optionsPosition.value =(await axios.get(route('getChildsCategory',profession.value))).data
    }
        form.position = '';
    form.detailProjects = [];

});
watch(() => form.position, async (position) => {
    form.title = '';
    form.detailProjects = [];
});

const createProject = () => {
    form.post(route('project-recruits.store'), {
        errorBag: 'createProject',
        preserveScroll: true,
        onSuccess: () => {
            form.reset();
        },
    });
};

const generateUrl = computed(() => {
    if (form.cityWork && form.streetWork && form.streetWorkNumber) {
        let myUrlWithParams = new URL(`https://www.google.com/maps/embed/v1/place?key=${usePage().props.mapsApi}`);
        myUrlWithParams.searchParams.append("q", form.countryWork+' '+form.cityWork+' '+form.streetWork+' '+form.streetWorkNumber +' '+form.postalWork);
        return myUrlWithParams;
    }
});


const addAll = () => {
    if(form.position.detailprojects || form.profession.detailprojects){
        form.detailProjects = (form.position.detailprojects || form.profession.detailprojects).map(el=>el.id)
    }
}
const zeroAll = () => {
        form.detailProjects = []
}

const addToArray = (array,name) =>{
    if(array.includes(name)){
        let found = array.indexOf(name);
        array.splice(found, 1);
    } else {
        array.push(name)
    }
}

const clearCountry = () => {
    form.countryWork = '';
    form.streetWork = '';
    form.streetWorkNumber =  '';
    form.postalWork = '';
    form.cityWork =  '';

    // Wyczyść mapę i marker
    if (marker.value) {
        marker.value.remove();
        marker.value = null;
    }
}

// Mapbox
const mapContainer = ref(null);
const map = ref(null);
const marker = ref(null);
const geocoder = ref(null);
const geocoderContainer = ref(null);

const initializeMap = () => {
    if (!form.countryWork || map.value) return;

    mapboxgl.accessToken = usePage().props.mapboxToken;

    // Domyślne współrzędne (centrum Polski)
    const defaultCoords = [19.1451, 51.9194];

    map.value = new mapboxgl.Map({
        container: mapContainer.value,
        style: "mapbox://styles/mapbox/light-v11",
        center: defaultCoords,
        zoom: 6
    });

    map.value.addControl(new mapboxgl.NavigationControl());

    // Dodaj Geocoder (autocomplete)
    geocoder.value = new MapboxGeocoder({
        accessToken: mapboxgl.accessToken,
        mapboxgl: mapboxgl,
        marker: false,
        placeholder: __('translate.enterAddress'),
        countries: form.countryWork?.countryCode?.toLowerCase() || 'pl',
        language: usePage().props.language, // Fix: usePage().props.language instead of locale
    });

    geocoderContainer.value.appendChild(geocoder.value.onAdd(map.value));

    // Obsługa wyboru miejsca z autocomplete
    geocoder.value.on('result', (e) => {
        const place = e.result;

        // Usuń stary marker
        if (marker.value) {
            marker.value.remove();
        }

        // Dodaj nowy marker
        marker.value = new mapboxgl.Marker({ color: '#0A2C5C' })
            .setLngLat(place.center)
            .addTo(map.value);

        // Wypełnij pola formularza
        fillAddressFromGeocoder(place);
    });
};

const fillAddressFromGeocoder = (place) => {
    // Wyciągnij komponenty adresu z Mapbox
    const context = place.context || [];

    // Ulica i numer
    if (place.place_type.includes('address')) {
        form.streetWork = place.text || '';
        form.streetWorkNumber = place.address || '';
    } else {
        form.streetWork = place.place_name.split(',')[0] || '';
    }

    // Miasto
    const cityContext = context.find(c => c.id.startsWith('place.'));
    if (cityContext) {
        form.cityWork = cityContext.text;
    } else if (place.place_type.includes('place')) {
        form.cityWork = place.text;
    }

    // Kod pocztowy
    const postcodeContext = context.find(c => c.id.startsWith('postcode.'));
    if (postcodeContext) {
        form.postalWork = postcodeContext.text;
    }

    // Jeśli nie ma kodu pocztowego w context, spróbuj wyciągnąć z place_name
    if (!form.postalWork && place.place_name) {
        const postcodeMatch = place.place_name.match(/\d{2}-\d{3}/);
        if (postcodeMatch) {
            form.postalWork = postcodeMatch[0];
        }
    }
};

// Nasłuchuj na zmiany countryWork, aby zainicjalizować mapę
watch(() => form.countryWork, (newVal) => {
    if (newVal) {
        if (!map.value) {
            setTimeout(() => {
                initializeMap();
            }, 100);
        } else if (geocoder.value) {
            // Aktualizuj restrykcje kraju w istniejącym geocoderze
            geocoder.value.setCountries(newVal.countryCode?.toLowerCase() || 'pl');
        }
    } else if (!newVal && map.value) {
        // Usuń mapę gdy kraj został wyczyszczony
        map.value.remove();
        map.value = null;
        geocoder.value = null;
        if (marker.value) {
            marker.value.remove();
            marker.value = null;
        }
        if (geocoderContainer.value) {
            geocoderContainer.value.innerHTML = '';
        }
    }
});

// Sprawdzenie czy powinny być wyświetlane pytania (form.cv jest 2 lub 3)
const shouldShowQuestions = computed(() => {
    return form.cv.some(item => item.id === 2 || item.id === 3);
});

// Obserwuje zmiany w form.cv, aby usunąć pytania gdy nie ma CV typu 2 lub 3
watch(() => form.cv, (newValue) => {
    if (!newValue.some(item => item.id === 2 || item.id === 3)) {
        form.questions = [];
    }
}, { deep: true });

// Funkcja do przełączania doświadczenia
// Logika: NIE (wyłączony) = experiences[1] (drugi element), TAK (włączony) = experiences[0] (pierwszy element)
const toggleExperience = () => {
    if (isExperienceEnabled.value) {
        // Gdy jest włączony (pierwszy element), ustaw na wyłączony (drugi element)
        form.experience = props.experiences && props.experiences.length > 1 ? props.experiences[1] : '';
    } else {
        // Gdy jest wyłączony (drugi element lub pusty), ustaw na włączony (pierwszy element)
        form.experience = props.experiences && props.experiences.length > 0 ? props.experiences[0] : '';
    }
};

// Computed do sprawdzania czy doświadczenie jest włączone (wymagane)
// Włączone = pierwszy element z tablicy experiences
const isExperienceEnabled = computed(() => {
    return form.experience &&
           form.experience.value &&
           props.experiences &&
           props.experiences.length > 0 &&
           form.experience.value === props.experiences[0].value;
});

// Inicjalizacja wartości domyślnej dla experience przy montowaniu komponentu
onMounted(() => {
    // Ustaw drugi element jako domyślny (Niewymagane/Bez doświadczenia)
    if (!form.experience && props.experiences && props.experiences.length > 1) {
        form.experience = props.experiences[1];
    }
});

</script>

<template>
    <AppLayout :title="__('translate.createProject')">
        <div class="py-6 bg-gray-50 min-h-screen">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <!-- Nagłówek z linkiem wstecz -->
                <div class="mb-6">
                    <Link
                        :href="route('project-recruits.index')"
                        class="inline-flex items-center text-[#e31e24] hover:text-red-700 font-semibold text-xs uppercase tracking-wider transition-colors"
                    >
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"/>
                        </svg>
                        {{ __('translate.backButton') }}
                    </Link>
                </div>

                <!-- Tytuł -->
                <div class="mb-6">
                    <h1 class="text-3xl font-bold text-gray-900">
                        {{ __('translate.createProject') }}
                    </h1>
                </div>

                <!-- Wskaźnik kroków -->
                <div class="bg-white rounded-xl shadow-sm border border-gray-200 p-6 mb-6">
                    <div class="flex items-start justify-between w-full">
                        <div
                            v-for="step in totalSteps"
                            :key="step"
                            @click="goToStep(step)"
                            class="flex-1 cursor-pointer relative"
                        >
                            <div class="flex items-center w-full">
                                <div class="flex flex-col items-center w-full">
                                    <div
                                        class="w-12 h-12 rounded-full flex items-center justify-center font-black transition-all z-10 relative"
                                        :class="currentStep >= step ? 'bg-[#0A2C5C] text-white shadow-lg shadow-blue-900/20' : 'bg-gray-100 text-gray-400'"
                                    >
                                        {{ step }}
                                    </div>
                                    <div class="mt-4 text-[10px] text-center font-black px-2 leading-tight uppercase tracking-widest">
                                        <span v-if="step === 1" v-html="__('translate.stepBasicInfo')"></span>
                                        <span v-else-if="step === 2" v-html="__('translate.stepEmploymentConditions')"></span>
                                        <span v-else-if="step === 3" v-html="__('translate.stepRequirementsBenefits')"></span>
                                    </div>
                                </div>

                                <!-- Linia łącząca -->
                                <div
                                    v-if="step < totalSteps"
                                    class="absolute top-6 left-1/2 w-full h-px transition-all -z-0"
                                    :class="currentStep > step ? 'bg-[#00a0e3]' : 'bg-gray-200'"
                                    style="transform: translateY(-50%);"
                                ></div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Formularz -->
                <form @submit.prevent="createProject">

                    <!-- KROK 1: Podstawowe informacje -->
                    <div v-show="currentStep === 1" class="space-y-8">
                        <!-- Wybór typu CV -->
                        <div class="bg-white rounded-[3rem] shadow-xl shadow-blue-900/5 border border-gray-100 p-10">
                            <div class="flex items-center gap-4 mb-8">
                                <h2 class="text-[10px] font-black text-[#0A2C5C] uppercase tracking-[0.2em]">{{ __('translate.cv') }}</h2>
                                <div class="h-px flex-1 bg-gray-100"></div>
                            </div>

                            <div class="text-center mb-10">
                                <p class="text-xs font-bold text-gray-400 uppercase tracking-widest">{{ __('translate.cvTypeDescription') }}</p>
                            </div>

                            <!-- Karty wyboru typu CV -->
                            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-10" v-if="cvs">
                            <div
                                v-for="cv in cvs"
                                :key="cv.id"
                                @click="toggleCvType(cv)"
                                class="border border-gray-100 rounded-[2.5rem] p-8 cursor-pointer transition-all duration-300 hover:shadow-xl hover:shadow-blue-900/5 hover:-translate-y-1"
                                :class="form.cv.some(item => item.id === cv.id) ? 'bg-[#0A2C5C] border-transparent shadow-lg shadow-blue-900/20' : 'bg-gray-50/50'"
                            >
                                <div class="flex flex-col items-center text-center">
                                    <div
                                        class="w-20 h-20 rounded-3xl flex items-center justify-center mb-6 transition-all border-2"
                                        :class="form.cv.some(item => item.id === cv.id) ? 'bg-white/10 border-white/20' : 'bg-white border-white shadow-sm'"
                                    >
                                        <img v-if="cv.id === 1" class="w-10 h-10" src="/images/icons/recruit/klasyczne_cv.svg" alt="cv">
                                        <img v-else-if="cv.id === 2" class="w-10 h-10" src="/images/icons/recruit/video_cv.svg" alt="video_cv">
                                        <img v-else-if="cv.id === 3" class="w-10 h-10" src="/images/icons/recruit/audio_cv.svg" alt="audio_cv">
                                    </div>
                                    <h3 class="font-black text-sm uppercase tracking-widest mb-4" :class="form.cv.some(item => item.id === cv.id) ? 'text-white' : 'text-gray-900'">{{ cv.name }}</h3>

                                    <div class="relative flex items-center justify-center">
                                        <div class="h-6 w-6 rounded-lg border-2 transition-all flex items-center justify-center"
                                             :class="form.cv.some(item => item.id === cv.id) ? 'bg-white border-transparent' : 'bg-white border-gray-200'">
                                            <svg v-if="form.cv.some(item => item.id === cv.id)" class="w-4 h-4 text-[#0A2C5C]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="4" d="M5 13l4 4L19 7" /></svg>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                            <InputError :message="form.errors.cv" class="mt-2 text-center text-[10px] font-black uppercase tracking-widest"/>

                            <!-- Pole is_active -->
                            <div class="mt-10 p-8 bg-blue-50/50 rounded-[2.5rem] border border-blue-100/50">
                                <div class="flex items-start gap-6">
                                    <label class="group/check flex items-center cursor-pointer mt-1">
                                        <div class="relative flex items-center justify-center">
                                            <input
                                                type="checkbox"
                                                id="is_active"
                                                v-model="form.is_active"
                                                class="peer sr-only"
                                            />
                                            <div class="h-8 w-8 rounded-xl border-2 border-white bg-white shadow-sm transition-all peer-checked:bg-[#0A2C5C] peer-checked:border-transparent flex items-center justify-center group-hover/check:scale-105">
                                                <svg class="w-5 h-5 text-white opacity-0 peer-checked:opacity-100 transition-opacity" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7" /></svg>
                                            </div>
                                        </div>
                                    </label>
                                    <div>
                                        <label for="is_active" class="block text-sm font-black text-[#0A2C5C] uppercase tracking-tight cursor-pointer">{{ __('translate.projectIsActive') }}</label>
                                        <p class="text-xs font-bold text-gray-400 uppercase tracking-tight mt-1">
                                            {{ __('translate.projectIsActiveDescription') }}
                                        </p>
                                    </div>
                                </div>
                                <InputError :message="form.errors.is_active" class="mt-4 text-[10px] font-black uppercase tracking-widest"/>
                            </div>

                            <!-- Pytania do CV video/audio -->
                            <div class="mt-10" v-if="shouldShowQuestions">
                                <div class="p-8 bg-blue-50/50 rounded-[2.5rem] border border-blue-100/50 mb-8">
                                    <h3 class="text-sm font-black text-[#0A2C5C] uppercase tracking-tight">{{ __('translate.questionsInfo') }}</h3>
                                    <p class="text-xs font-bold text-gray-400 uppercase tracking-tight mt-1">
                                        {{ __('translate.questionsDescription') }}
                                    </p>
                                </div>
                                <QuestionForm v-model="form.questions" :error="form.errors" />
                            </div>
                        </div>

                        <!-- Kategoria z obowiązkami w 2 kolumnach -->
                        <div class="bg-white rounded-[3rem] shadow-xl shadow-blue-900/5 border border-gray-100 p-10">
                            <div class="flex items-center gap-4 mb-8">
                                <div class="w-12 h-12 rounded-2xl bg-blue-50 flex items-center justify-center border border-blue-100/50 shadow-sm">
                                    <img class="w-6 h-6" src="/images/icons/recruit/kategoria.svg" :alt="__('translate.altCategory')">
                                </div>
                                <h2 class="text-[10px] font-black text-[#0A2C5C] uppercase tracking-[0.2em]">{{ __('translate.categorySection') }}</h2>
                                <div class="h-px flex-1 bg-gray-100"></div>
                            </div>

                            <!-- Grid z 2 kolumnami: Kategorie | Obowiązki -->
                            <div class="grid grid-cols-1 lg:grid-cols-2 gap-10">
                                <!-- Lewa kolumna - kategorie -->
                                <div class="space-y-6">
                                    <div>
                                        <InputLabel :value="__('translate.category')" class="text-[10px] font-black text-gray-400 uppercase tracking-widest mb-2" />
                                        <multiselect
                                            :selectLabel="__('translate.selectLabel')"
                                            :selectGroupLabel="__('translate.selectGroupLabel')"
                                            :selectedLabel="__('translate.selectedLabel')"
                                            :deselectLabel="__('translate.deselectLabel')"
                                            track-by="value"
                                            label="name"
                                            :placeholder="__('translate.placeholder')"
                                            v-model="form.category" :options="optionsCategory"
                                            class="custom-multiselect">
                                            <template #noResult>
                                                <span>{{__('translate.noOptions')}}</span>
                                            </template>
                                            <template #noOptions>
                                                <span>{{__('translate.noResult')}}</span>
                                            </template>
                                        </multiselect>
                                        <InputError :message="form.errors.category" class="mt-2 text-[10px] font-black uppercase tracking-widest"/>
                                    </div>

                                    <div>
                                        <InputLabel :value="__('translate.subcategory')" class="text-[10px] font-black text-gray-400 uppercase tracking-widest mb-2" />
                                        <multiselect
                                            :disabled="!form.category"
                                            :selectLabel="__('translate.selectLabel')"
                                            :selectGroupLabel="__('translate.selectGroupLabel')"
                                            :selectedLabel="__('translate.selectedLabel')"
                                            :deselectLabel="__('translate.deselectLabel')"
                                            :noOptions="__('translate.noOptions')"
                                            :noResult="__('translate.noResult')"
                                            track-by="value"
                                            label="name"
                                            :placeholder="__('translate.placeholder')"
                                            v-model="form.categorySub" :options="optionsSubCategory"
                                            class="custom-multiselect">
                                            <template #noResult>
                                                <span>{{__('translate.noOptions')}}</span>
                                            </template>
                                            <template #noOptions>
                                                <span>{{__('translate.noResult')}}</span>
                                            </template>
                                        </multiselect>
                                        <InputError :message="form.errors.categorySub" class="mt-2 text-[10px] font-black uppercase tracking-widest"/>
                                    </div>

                                    <div>
                                        <InputLabel :value="__('translate.profession')" class="text-[10px] font-black text-gray-400 uppercase tracking-widest mb-2" />
                                        <multiselect
                                            :disabled="!form.categorySub"
                                            :selectLabel="__('translate.selectLabel')"
                                            :selectGroupLabel="__('translate.selectGroupLabel')"
                                            :selectedLabel="__('translate.selectedLabel')"
                                            :deselectLabel="__('translate.deselectLabel')"
                                            :noOptions="__('translate.noOptions')"
                                            :noResult="__('translate.noResult')"
                                            track-by="value"
                                            label="name"
                                            :placeholder="__('translate.placeholder')"
                                            v-model="form.profession" :options="optionsProfession"
                                            class="custom-multiselect">
                                            <template #noResult>
                                                <span>{{__('translate.noOptions')}}</span>
                                            </template>
                                            <template #noOptions>
                                                <span>{{__('translate.noResult')}}</span>
                                            </template>
                                        </multiselect>
                                        <InputError :message="form.errors.profession" class="mt-2 text-[10px] font-black uppercase tracking-widest"/>
                                    </div>

                                    <div>
                                        <InputLabel :value="__('translate.position')" class="text-[10px] font-black text-gray-400 uppercase tracking-widest mb-2" />
                                        <multiselect
                                            :disabled="!form.profession"
                                            :selectLabel="__('translate.selectLabel')"
                                            :selectGroupLabel="__('translate.selectGroupLabel')"
                                            :selectedLabel="__('translate.selectedLabel')"
                                            :deselectLabel="__('translate.deselectLabel')"
                                            :noOptions="__('translate.noOptions')"
                                            :noResult="__('translate.noResult')"
                                            track-by="value"
                                            label="name"
                                            :placeholder="__('translate.placeholder')"
                                            v-model="form.position" :options="optionsPosition"
                                            class="custom-multiselect">
                                            <template #noResult>
                                                <span>{{__('translate.noOptions')}}</span>
                                            </template>
                                            <template #noOptions>
                                                <span>{{__('translate.noResult')}}</span>
                                            </template>
                                        </multiselect>
                                        <InputError :message="form.errors.position" class="mt-2 text-[10px] font-black uppercase tracking-widest"/>
                                    </div>
                                </div>

                                <!-- Prawa kolumna - obowiązki (pokazuje się gdy są dostępne) -->
                                <div v-if="form.position || form.profession">
                                    <div v-if="((form.position?.detailprojects && Object.keys(form.position.detailprojects).length) || (form.profession?.detailprojects && Object.keys(form.profession.detailprojects).length))" class="sticky top-4">
                                        <div class="bg-blue-50/50 rounded-[2.5rem] p-8 border border-blue-100/50">
                                            <div class="flex items-center justify-between mb-6">
                                                <h3 class="text-[10px] font-black text-[#0A2C5C] uppercase tracking-widest">{{ __('translate.detailProjects') }}</h3>
                                                <div class="flex gap-4">
                                                    <button type="button" @click="addAll()" class="text-[10px] font-black text-[#00a0e3] hover:text-blue-700 uppercase tracking-widest transition-colors">
                                                        {{ __('translate.selectAll') }}
                                                    </button>
                                                    <button v-if="form.detailProjects.length" type="button" @click="zeroAll()" class="text-[10px] font-black text-gray-400 hover:text-gray-600 uppercase tracking-widest transition-colors">
                                                        {{ __('translate.clear') }}
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="space-y-3 max-h-[400px] overflow-y-auto pr-2 custom-scrollbar">
                                                <div v-for="detail in (form.position?.detailprojects || form.profession?.detailprojects)" :key="detail.id"
                                                     class="group/item flex items-start gap-4 bg-white/50 rounded-2xl p-4 border border-white hover:bg-white hover:shadow-md transition-all cursor-pointer"
                                                     @click="toggleArrayItem(detail.id, form.detailProjects, { push: () => {}, splice: () => {} })">
                                                    <label class="group/check flex items-start cursor-pointer flex-1" @click.stop>
                                                        <div class="relative flex items-center justify-center mt-0.5">
                                                            <input
                                                                type="checkbox" :id="'detailProjects-'+detail.id" v-model="form.detailProjects"
                                                                :value="detail.id"
                                                                class="peer sr-only"
                                                            />
                                                            <div class="h-5 w-5 rounded-lg border-2 border-gray-100 bg-white transition-all peer-checked:bg-[#0A2C5C] peer-checked:border-transparent flex items-center justify-center">
                                                                <svg class="w-3.5 h-3.5 text-white opacity-0 peer-checked:opacity-100 transition-opacity" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="4" d="M5 13l4 4L19 7" /></svg>
                                                            </div>
                                                        </div>
                                                        <span class="ml-3 text-xs font-bold text-gray-600 uppercase tracking-tight leading-snug group-hover/check:text-[#0A2C5C] transition-colors">{{detail.name[usePage().props.language]}}</span>
                                                    </label>
                                                </div>
                                            </div>
                                            <InputError :message="form.errors.detailProjects" class="mt-4 text-[10px] font-black uppercase tracking-widest"/>
                                        </div>
                                    </div>
                                    <div v-else class="flex flex-col items-center justify-center bg-gray-50/50 rounded-[2.5rem] border-2 border-dashed border-gray-200 p-12 text-center h-full">
                                        <div class="w-16 h-16 bg-white rounded-2xl flex items-center justify-center mb-4 shadow-sm border border-gray-100">
                                            <svg class="w-8 h-8 text-gray-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4"></path>
                                            </svg>
                                        </div>
                                        <p class="text-xs font-black text-gray-400 uppercase tracking-widest leading-relaxed max-w-[200px]">{{ __('translate.noDetailProjects') || 'Brak zdefiniowanych obowiązków' }}</p>
                                    </div>
                                </div>

                                <!-- Placeholder gdy nic nie wybrano -->
                                <div v-else class="flex flex-col items-center justify-center bg-gray-50/50 rounded-[2.5rem] border-2 border-dashed border-gray-200 p-12 text-center h-full">
                                    <div class="w-16 h-16 bg-white rounded-2xl flex items-center justify-center mb-4 shadow-sm border border-gray-100">
                                        <svg class="w-8 h-8 text-gray-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" /><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" /></svg>
                                    </div>
                                    <p class="text-xs font-black text-gray-400 uppercase tracking-widest leading-relaxed max-w-[200px]">{{ __('translate.selectPositionToSeeDetails') }}</p>
                                </div>
                            </div>
                        </div>

                        <!-- Kraj publikacji i firma zewnętrzna -->
                        <div class="bg-white rounded-[3rem] shadow-xl shadow-blue-900/5 border border-gray-100 p-10 mb-8">
                            <div class="flex items-center gap-4 mb-8">
                                <div class="w-12 h-12 rounded-2xl bg-blue-50 flex items-center justify-center border border-blue-100/50 shadow-sm">
                                    <img class="w-6 h-6" src="/images/icons/recruit/kraj_publikacji.svg" :alt="__('translate.CountryPublish')">
                                </div>
                                <h2 class="text-[10px] font-black text-[#0A2C5C] uppercase tracking-[0.2em]">{{ __('translate.CountryPublish') }}</h2>
                                <div class="h-px flex-1 bg-gray-100"></div>
                            </div>

                            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                                <div>
                                    <InputLabel :value="__('translate.CountryPublish')" class="text-[10px] font-black text-gray-400 uppercase tracking-widest mb-2" />
                                    <multiselect
                                        group-values="elements" group-label="group"
                                        :group-select="false"
                                        :selectLabel="__('translate.selectLabel')"
                                        :selectGroupLabel="__('translate.selectGroupLabel')"
                                        :selectedLabel="__('translate.selectedLabel')"
                                        :deselectLabel="__('translate.deselectLabel')"
                                        track-by="name"
                                        :multiple="true"
                                        label="name"
                                        :placeholder="__('translate.placeholder')"
                                        v-model="form.country" :options="optionsCountry"
                                        class="custom-multiselect">
                                        <template #noResult>
                                            <span>{{__('translate.noOptions')}}</span>
                                        </template>
                                        <template #noOptions>
                                            <span>{{__('translate.noResult')}}</span>
                                        </template>
                                    </multiselect>
                                    <InputError :message="form.errors.country" class="mt-2 text-[10px] font-black uppercase tracking-widest"/>
                                </div>
                                <div v-if="externalCompanies && externalCompanies.length > 0">
                                    <InputLabel :value="__('translate.externalCompany')" class="text-[10px] font-black text-gray-400 uppercase tracking-widest mb-2" />
                                    <multiselect
                                        :selectLabel="__('translate.selectLabel')"
                                        :selectGroupLabel="__('translate.selectGroupLabel')"
                                        :selectedLabel="__('translate.selectedLabel')"
                                        :deselectLabel="__('translate.deselectLabel')"
                                        track-by="id"
                                        label="name"
                                        :placeholder="__('translate.placeholder')"
                                        v-model="form.external_company_id"
                                        :options="externalCompanies"
                                        class="custom-multiselect">
                                        <template #noResult>
                                            <span>{{__('translate.noOptions')}}</span>
                                        </template>
                                        <template #noOptions>
                                            <span>{{__('translate.noResult')}}</span>
                                        </template>
                                    </multiselect>
                                    <InputError :message="form.errors.external_company_id" class="mt-2 text-[10px] font-black uppercase tracking-widest"/>
                                </div>
                            </div>
                        </div>

                        <!-- Lokalizacja -->
                        <div class="bg-white rounded-[3rem] shadow-xl shadow-blue-900/5 border border-gray-100 p-10 mb-8">
                            <div class="flex items-center gap-4 mb-8">
                                <div class="w-12 h-12 rounded-2xl bg-blue-50 flex items-center justify-center border border-blue-100/50 shadow-sm">
                                    <img class="w-6 h-6" src="/images/icons/recruit/lokalizacja.svg" :alt="__('translate.altLocation')">
                                </div>
                                <h2 class="text-[10px] font-black text-[#0A2C5C] uppercase tracking-[0.2em]">{{ __('translate.locationLabel') }}</h2>
                                <div class="h-px flex-1 bg-gray-100"></div>
                            </div>

                            <div>
                                <InputLabel :value="__('translate.Country')" class="text-[10px] font-black text-gray-400 uppercase tracking-widest mb-2" />
                                <multiselect
                                    group-values="elements" group-label="group"
                                    :group-select="false"
                                    :selectLabel="__('translate.selectLabel')"
                                    :selectGroupLabel="__('translate.selectGroupLabel')"
                                    :selectedLabel="__('translate.selectedLabel')"
                                    :deselectLabel="__('translate.deselectLabel')"
                                    track-by="name"
                                    :multiple="false"
                                    label="name"
                                    @remove="clearCountry"
                                    @update:modelValue="clearCountry"
                                    :placeholder="__('translate.placeholder')"
                                    v-model="form.countryWork" :options="optionsCountry"
                                    class="custom-multiselect">
                                    <template #noResult>
                                        <span>{{__('translate.noOptions')}}</span>
                                    </template>
                                    <template #noOptions>
                                        <span>{{__('translate.noResult')}}</span>
                                    </template>
                                </multiselect>
                                <InputError :message="form.errors.countryWork" class="mt-2 text-[10px] font-black uppercase tracking-widest"/>
                            </div>

                            <!-- Mapbox Geocoder (Autocomplete) -->
                            <div v-if="form.countryWork" class="mt-10">
                                <div class="mb-8">
                                    <InputLabel :value="__('translate.searchAddress')" class="text-[10px] font-black text-gray-400 uppercase tracking-widest mb-4" />
                                    <div
                                        ref="geocoderContainer"
                                        class="mapbox-geocoder-container rounded-2xl border border-gray-100 bg-gray-50 shadow-sm focus-within:shadow-md transition-all"
                                    ></div>
                                    <p class="text-[10px] font-bold text-gray-400 uppercase tracking-tight mt-3">
                                        {{ __('translate.searchAddressDescription') }}
                                    </p>
                                </div>

                                <!-- Mapa Mapbox -->
                                <div class="rounded-[2.5rem] overflow-hidden border border-gray-100 mb-8 shadow-xl shadow-blue-900/5" style="height: 400px;">
                                    <div ref="mapContainer" class="w-full h-full"></div>
                                </div>
                            </div>

                            <AddressFieldGroup class="mt-8" v-if="form.countryWork" :code="form.countryWork?.countryCode"
                                v-model:street="form.streetWork"
                                v-model:streetNumber="form.streetWorkNumber"
                                v-model:postcode="form.postalWork"
                                v-model:city="form.cityWork"
                            />
                            <div class="grid grid-cols-1 gap-4" v-if="form.countryWork">
                                <InputError v-if="form.errors.streetWork" :message="form.errors.streetWork" class="mt-2 text-[10px] font-black uppercase tracking-widest"/>
                                <InputError v-if="form.errors.streetWorkNumber" :message="form.errors.streetWorkNumber" class="mt-2 text-[10px] font-black uppercase tracking-widest"/>
                                <InputError v-if="form.errors.postalWork" :message="form.errors.postalWork" class="mt-2 text-[10px] font-black uppercase tracking-widest"/>
                                <InputError v-if="form.errors.cityWork" :message="form.errors.cityWork" class="mt-2 text-[10px] font-black uppercase tracking-widest"/>
                            </div>
                        </div>

                        <!-- Wykształcenie -->
                        <div class="bg-white rounded-[3rem] shadow-xl shadow-blue-900/5 border border-gray-100 p-10 mb-8">
                            <div class="flex items-center gap-4 mb-8">
                                <h2 class="text-[10px] font-black text-[#0A2C5C] uppercase tracking-[0.2em]">{{ __('translate.education') }}</h2>
                                <div class="h-px flex-1 bg-gray-100"></div>
                            </div>
                            <div v-if="educations" class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                <div v-for="education in educations" :key="education.id"
                                     class="flex items-center gap-4 bg-gray-50/50 p-4 rounded-2xl border border-gray-100/50 cursor-pointer transition-all hover:bg-white hover:shadow-md"
                                     @click="educationSelect = education.name; form.education = education.id">
                                    <div class="relative flex items-center justify-center">
                                        <input
                                            type="radio" :id="'education-'+education.id" v-model="form.education"
                                            :value="education.id"
                                            class="peer sr-only"
                                        />
                                        <div class="h-6 w-6 rounded-full border-2 border-white bg-white shadow-sm transition-all peer-checked:border-[#0A2C5C] peer-checked:border-[6px]"></div>
                                    </div>
                                    <span class="text-xs font-black text-gray-500 uppercase tracking-widest leading-tight">{{education.name}}</span>
                                </div>
                            </div>
                            <InputError :message="form.errors.education" class="mt-4 text-[10px] font-black uppercase tracking-widest"/>
                        </div>

                        <!-- Przyciski nawigacji -->
                        <div class="flex justify-end mt-12 pt-8 border-t border-gray-100">
                            <button
                                type="button"
                                @click="nextStep"
                                :disabled="isValidating"
                                class="inline-flex items-center gap-3 px-10 py-4 bg-[#0A2C5C] text-white text-[10px] font-black rounded-2xl uppercase tracking-widest hover:bg-blue-800 shadow-lg shadow-blue-900/20 transition-all hover:-translate-y-0.5 disabled:opacity-50"
                            >
                                <svg v-if="isValidating" class="animate-spin h-4 w-4 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                    <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                                    <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                                </svg>
                                <span>{{ isValidating ? 'Sprawdzanie...' : __('translate.next') }}</span>
                                <span v-if="!isValidating" class="text-lg leading-none">→</span>
                            </button>
                        </div>
                    </div>

                    <!-- KROK 2: Organizacja pracy i wynagrodzenie -->
                    <div v-show="currentStep === 2">
                        <!-- Rodzaj umowy -->
                        <div class="bg-white rounded-[3rem] shadow-xl shadow-blue-900/5 border border-gray-100 p-10 mb-8">
                            <div class="flex items-center gap-4 mb-8">
                                <h2 class="text-[10px] font-black text-[#0A2C5C] uppercase tracking-[0.2em]">{{ __('translate.contractType') }}</h2>
                                <div class="h-px flex-1 bg-gray-100"></div>
                            </div>
                            <div v-if="typesOfContract" class="grid grid-cols-1 md:grid-cols-3 gap-4">
                                <div v-for="typeOfContract in typesOfContract" :key="typeOfContract.id"
                                     class="flex items-center gap-4 bg-gray-50/50 p-4 rounded-2xl border border-gray-100/50 cursor-pointer transition-all hover:bg-white hover:shadow-md"
                                     @click="toggleArrayItem(typeOfContract, form.typeOfContract, typesOfContractSelect)">
                                    <label class="group/check flex items-center cursor-pointer flex-1" @click.stop>
                                        <div class="relative flex items-center justify-center">
                                            <input
                                                type="checkbox"
                                                :id="'typeOfContract-'+typeOfContract.id"
                                                v-model="form.typeOfContract"
                                                :value="typeOfContract"
                                                class="peer sr-only"
                                            />
                                            <div class="h-6 w-6 rounded-lg border-2 border-white bg-white shadow-sm transition-all peer-checked:bg-[#0A2C5C] peer-checked:border-transparent flex items-center justify-center">
                                                <svg class="w-4 h-4 text-white opacity-0 peer-checked:opacity-100 transition-opacity" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="4" d="M5 13l4 4L19 7" /></svg>
                                            </div>
                                        </div>
                                        <span class="ml-4 text-xs font-black text-gray-500 uppercase tracking-widest group-hover/check:text-[#0A2C5C] transition-colors">{{typeOfContract.name}}</span>
                                    </label>
                                </div>
                            </div>
                            <InputError :message="form.errors.typeOfContract" class="mt-4 text-[10px] font-black uppercase tracking-widest"/>
                        </div>

                        <!-- Wynagrodzenie -->
                        <div class="bg-white rounded-[3rem] shadow-xl shadow-blue-900/5 border border-gray-100 p-10 mb-8">
                            <div class="flex items-center gap-4 mb-8">
                                <div class="w-12 h-12 rounded-2xl bg-blue-50 flex items-center justify-center border border-blue-100/50 shadow-sm">
                                    <img class="w-6 h-6" src="/images/icons/recruit/wynagrodzenie.svg" :alt="__('translate.salary')">
                                </div>
                                <h2 class="text-[10px] font-black text-[#0A2C5C] uppercase tracking-[0.2em]">{{ __('translate.salary') }}</h2>
                                <div class="h-px flex-1 bg-gray-100"></div>
                            </div>

                            <!-- Wynagrodzenie podstawowe -->
                            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-6">
                                <div class="bg-gray-50/50 p-6 rounded-[2rem] border border-gray-100/50">
                                    <InputLabel :value="__('translate.basicSalaryFrom')" class="text-[10px] font-black text-gray-400 uppercase tracking-widest mb-2" />
                                    <input
                                        id="basicSalaryFrom"
                                        v-model="form.basicSalaryFrom"
                                        class="w-full px-5 py-4 text-xs rounded-2xl border-gray-100 bg-white focus:bg-white focus:ring-0 focus:border-[#00a0e3] transition-all font-bold tracking-widest uppercase"
                                        type="number"
                                        step="0.1"
                                        :placeholder="__('translate.salaryFromPlaceholder')"
                                    />
                                    <InputError :message="form.errors.basicSalaryFrom" class="mt-2 text-[10px] font-black uppercase tracking-widest"/>
                                </div>
                                <div class="bg-gray-50/50 p-6 rounded-[2rem] border border-gray-100/50">
                                    <InputLabel :value="__('translate.basicSalaryTo')" class="text-[10px] font-black text-gray-400 uppercase tracking-widest mb-2" />
                                    <input
                                        id="basicSalaryTo"
                                        v-model="form.basicSalaryTo"
                                        class="w-full px-5 py-4 text-xs rounded-2xl border-gray-100 bg-white focus:bg-white focus:ring-0 focus:border-[#00a0e3] transition-all font-bold tracking-widest uppercase"
                                        type="number"
                                        step="0.1"
                                        :placeholder="__('translate.salaryToPlaceholder')"
                                    />
                                    <InputError :message="form.errors.basicSalaryTo" class="mt-2 text-[10px] font-black uppercase tracking-widest"/>
                                </div>
                                <div class="bg-gray-50/50 p-6 rounded-[2rem] border border-gray-100/50">
                                    <InputLabel :value="__('translate.currency')" class="text-[10px] font-black text-gray-400 uppercase tracking-widest mb-2" />
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
                                        v-model="form.currency" :options="optionsCurrency"
                                        class="custom-multiselect">
                                        <template #noResult>
                                            <span>{{__('translate.noOptions')}}</span>
                                        </template>
                                        <template #noOptions>
                                            <span>{{__('translate.noResult')}}</span>
                                        </template>
                                    </multiselect>
                                    <InputError :message="form.errors.currency" class="mt-2 text-[10px] font-black uppercase tracking-widest"/>
                                </div>
                            </div>

                            <!-- Tryb wypłaty -->
                            <div class="mb-10" v-if="payoutModes">
                                <InputLabel :value="__('translate.payoutModes')" class="text-[10px] font-black text-gray-400 uppercase tracking-widest mb-4" />
                                <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                                    <div v-for="payoutMode in payoutModes" :key="payoutMode.id"
                                         class="flex items-center gap-4 bg-gray-50/50 p-4 rounded-2xl border border-gray-100/50 cursor-pointer transition-all hover:bg-white hover:shadow-md"
                                         @click="payoutModeSelect = payoutMode.name; form.payoutMode = payoutMode">
                                        <div class="relative flex items-center justify-center">
                                            <input
                                                type="radio" :id="'payoutMode-'+payoutMode.id" v-model="form.payoutMode"
                                                :value="payoutMode"
                                                class="peer sr-only"
                                            />
                                            <div class="h-6 w-6 rounded-full border-2 border-white bg-white shadow-sm transition-all peer-checked:border-[#0A2C5C] peer-checked:border-[6px]"></div>
                                        </div>
                                        <span class="text-xs font-black text-gray-500 uppercase tracking-widest leading-tight">{{payoutMode.name}}</span>
                                    </div>
                                </div>
                                <InputError :message="form.errors.payoutMode" class="mt-4 text-[10px] font-black uppercase tracking-widest"/>
                            </div>

                            <!-- Premia -->
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div class="bg-gray-50/50 p-6 rounded-[2rem] border border-gray-100/50">
                                    <InputLabel :value="__('translate.bonusSalaryFrom')" class="text-[10px] font-black text-gray-400 uppercase tracking-widest mb-2" />
                                    <input
                                        id="bonusSalaryFrom"
                                        v-model="form.bonusSalaryFrom"
                                        class="w-full px-5 py-4 text-xs rounded-2xl border-gray-100 bg-white focus:bg-white focus:ring-0 focus:border-[#00a0e3] transition-all font-bold tracking-widest uppercase"
                                        type="number"
                                        step="0.1"
                                        :placeholder="__('translate.bonusFromPlaceholder')"
                                    />
                                    <InputError :message="form.errors.bonusSalaryFrom" class="mt-2 text-[10px] font-black uppercase tracking-widest"/>
                                </div>
                                <div class="bg-gray-50/50 p-6 rounded-[2rem] border border-gray-100/50">
                                    <InputLabel :value="__('translate.bonusSalaryTo')" class="text-[10px] font-black text-gray-400 uppercase tracking-widest mb-2" />
                                    <input
                                        id="bonusSalaryTo"
                                        v-model="form.bonusSalaryTo"
                                        class="w-full px-5 py-4 text-xs rounded-2xl border-gray-100 bg-white focus:bg-white focus:ring-0 focus:border-[#00a0e3] transition-all font-bold tracking-widest uppercase"
                                        type="number"
                                        step="0.1"
                                        :placeholder="__('translate.bonusToPlaceholder')"
                                    />
                                    <InputError :message="form.errors.bonusSalaryTo" class="mt-2 text-[10px] font-black uppercase tracking-widest"/>
                                </div>
                            </div>
                        </div>

                        <!-- Dni pracy -->
                        <div class="bg-white rounded-xl shadow-sm border border-gray-200 p-6 mb-6" v-if="days">
                            <div class="flex items-center gap-2 mb-6">
                                <h2 class="text-xl font-bold text-gray-900">{{ __('translate.workDays') }}</h2>
                            </div>
                                <div v-if="days" class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-7 gap-3">
                                    <div v-for="day in days" :key="day.id"
                                         class="flex items-center gap-3 bg-gray-50/50 p-4 rounded-2xl border border-gray-100/50 cursor-pointer transition-all hover:bg-white hover:shadow-md"
                                         @click="toggleArrayItem(day, form.days, daySelect)">
                                        <label class="group/check flex items-center cursor-pointer flex-1" @click.stop>
                                            <div class="relative flex items-center justify-center">
                                                <input
                                                    type="checkbox"
                                                    :id="'day-'+day.id"
                                                    v-model="form.days"
                                                    :value="day"
                                                    class="peer sr-only"
                                                />
                                                <div class="h-5 w-5 rounded-lg border-2 border-white bg-white shadow-sm transition-all peer-checked:bg-[#0A2C5C] peer-checked:border-transparent flex items-center justify-center">
                                                    <svg class="w-3 h-3 text-white opacity-0 peer-checked:opacity-100 transition-opacity" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="4" d="M5 13l4 4L19 7" /></svg>
                                                </div>
                                            </div>
                                            <span class="ml-3 text-[10px] font-black text-gray-500 uppercase tracking-widest group-hover/check:text-[#0A2C5C] transition-colors leading-tight">{{day.name}}</span>
                                        </label>
                                    </div>
                                </div>
                            <InputError :message="form.errors.days" class="mt-2"/>
                        </div>

                        <!-- Godziny pracy -->
                        <div class="bg-white rounded-[3rem] shadow-xl shadow-blue-900/5 border border-gray-100 p-10 mb-8">
                            <div class="flex items-center gap-4 mb-8">
                                <h2 class="text-[10px] font-black text-[#0A2C5C] uppercase tracking-[0.2em]">{{ __('translate.workHours') }}</h2>
                                <div class="h-px flex-1 bg-gray-100"></div>
                            </div>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div class="bg-gray-50/50 p-6 rounded-[2rem] border border-gray-100/50">
                                    <InputLabel for="hoursFrom" :value="__('translate.hoursFrom')" class="text-[10px] font-black text-gray-400 uppercase tracking-widest mb-2" />
                                    <input
                                        type="time"
                                        id="hoursFrom"
                                        v-model="form.hoursFrom"
                                        class="w-full px-5 py-4 text-xs rounded-2xl border-gray-100 bg-white focus:bg-white focus:ring-0 focus:border-[#00a0e3] transition-all font-bold tracking-widest uppercase"
                                    />
                                    <InputError :message="form.errors.hoursFrom" class="mt-2 text-[10px] font-black uppercase tracking-widest"/>
                                </div>
                                <div class="bg-gray-50/50 p-6 rounded-[2rem] border border-gray-100/50">
                                    <InputLabel for="hoursTo" :value="__('translate.hoursTo')" class="text-[10px] font-black text-gray-400 uppercase tracking-widest mb-2" />
                                    <input
                                        type="time"
                                        id="hoursTo"
                                        v-model="form.hoursTo"
                                        class="w-full px-5 py-4 text-xs rounded-2xl border-gray-100 bg-white focus:bg-white focus:ring-0 focus:border-[#00a0e3] transition-all font-bold tracking-widest uppercase"
                                    />
                                    <InputError :message="form.errors.hoursTo" class="mt-2 text-[10px] font-black uppercase tracking-widest"/>
                                </div>
                            </div>
                        </div>

                        <!-- System wynagrodzeń -->
                        <div class="bg-white rounded-[3rem] shadow-xl shadow-blue-900/5 border border-gray-100 p-10 mb-8" v-if="paySystems">
                            <div class="flex items-center gap-4 mb-8">
                                <h2 class="text-[10px] font-black text-[#0A2C5C] uppercase tracking-[0.2em]">{{ __('translate.paySystem') }}</h2>
                                <div class="h-px flex-1 bg-gray-100"></div>
                            </div>
                            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                                <div v-for="paySystem in paySystems" :key="paySystem.id"
                                     class="flex items-center gap-4 bg-gray-50/50 p-4 rounded-2xl border border-gray-100/50 cursor-pointer transition-all hover:bg-white hover:shadow-md"
                                     @click="toggleArrayItem(paySystem, form.paySystem, paySystemSelect)">
                                    <label class="group/check flex items-center cursor-pointer flex-1" @click.stop>
                                        <div class="relative flex items-center justify-center">
                                            <input
                                                type="checkbox"
                                                :id="'paySystem-'+paySystem.id"
                                                v-model="form.paySystem"
                                                :value="paySystem"
                                                class="peer sr-only"
                                            />
                                            <div class="h-6 w-6 rounded-lg border-2 border-white bg-white shadow-sm transition-all peer-checked:bg-[#0A2C5C] peer-checked:border-transparent flex items-center justify-center">
                                                <svg class="w-4 h-4 text-white opacity-0 peer-checked:opacity-100 transition-opacity" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="4" d="M5 13l4 4L19 7" /></svg>
                                            </div>
                                        </div>
                                        <span class="ml-4 text-xs font-black text-gray-500 uppercase tracking-widest group-hover/check:text-[#0A2C5C] transition-colors leading-tight">{{paySystem.name}}</span>
                                    </label>
                                </div>
                            </div>
                            <InputError :message="form.errors.paySystem" class="mt-4 text-[10px] font-black uppercase tracking-widest"/>
                        </div>

                        <!-- Praca nocna i praca zmianowa -->
                        <div class="bg-white rounded-[3rem] shadow-xl shadow-blue-900/5 border border-gray-100 p-10 mb-8">
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                                <!-- Praca nocna -->
                                <div class="bg-gray-50/50 rounded-[2.5rem] p-8 border border-gray-100/50">
                                    <div class="flex items-center justify-between gap-6">
                                        <div>
                                            <label class="block text-sm font-black text-[#0A2C5C] uppercase tracking-tight">{{ __('translate.workNight') }}</label>
                                            <p class="text-xs font-bold text-gray-400 uppercase tracking-tight mt-1">{{ __('translate.workNightDescription') }}</p>
                                        </div>
                                        <button
                                            type="button"
                                            @click="form.workNight = form.workNight === 1 ? 2 : 1"
                                            :class="[
                                                'relative inline-flex h-8 w-14 shrink-0 items-center rounded-full transition-all duration-300 focus:outline-none shadow-sm',
                                                form.workNight === 1 ? 'bg-[#0A2C5C]' : 'bg-gray-200'
                                            ]"
                                        >
                                            <span
                                                :class="[
                                                    'inline-block h-6 w-6 transform rounded-full bg-white shadow-md transition-transform duration-300',
                                                    form.workNight === 1 ? 'translate-x-7' : 'translate-x-1'
                                                ]"
                                            />
                                        </button>
                                    </div>
                                    <InputError :message="form.errors.workNight" class="mt-4 text-[10px] font-black uppercase tracking-widest"/>
                                </div>

                                <!-- Praca zmianowa -->
                                <div class="bg-gray-50/50 rounded-[2.5rem] p-8 border border-gray-100/50">
                                    <div class="flex items-center justify-between gap-6">
                                        <div>
                                            <label class="block text-sm font-black text-[#0A2C5C] uppercase tracking-tight">{{ __('translate.shiftWorks') }}</label>
                                            <p class="text-xs font-bold text-gray-400 uppercase tracking-tight mt-1">{{ __('translate.shiftWorksDescription') }}</p>
                                        </div>
                                        <button
                                            type="button"
                                            @click="form.shiftWork = form.shiftWork === 1 ? 2 : 1"
                                            :class="[
                                                'relative inline-flex h-8 w-14 shrink-0 items-center rounded-full transition-all duration-300 focus:outline-none shadow-sm',
                                                form.shiftWork === 1 ? 'bg-[#0A2C5C]' : 'bg-gray-200'
                                            ]"
                                        >
                                            <span
                                                :class="[
                                                    'inline-block h-6 w-6 transform rounded-full bg-white shadow-md transition-transform duration-300',
                                                    form.shiftWork === 1 ? 'translate-x-7' : 'translate-x-1'
                                                ]"
                                            />
                                        </button>
                                    </div>
                                    <InputError :message="form.errors.shiftWork" class="mt-4 text-[10px] font-black uppercase tracking-widest"/>
                                </div>
                            </div>
                        </div>

                        <!-- Przyciski nawigacji -->
                        <div class="flex justify-between items-center mt-12 pt-8 border-t border-gray-100">
                            <button
                                type="button"
                                @click="prevStep"
                                class="inline-flex items-center gap-2 rounded-2xl border border-gray-100 bg-white px-8 py-4 text-xs font-black uppercase tracking-widest text-gray-400 shadow-sm hover:bg-gray-50 transition-all hover:-translate-y-0.5"
                            >
                                <span class="text-lg leading-none">←</span>
                                {{ __('translate.previous') }}
                            </button>
                            <button
                                type="button"
                                @click="nextStep"
                                :disabled="isValidating"
                                class="inline-flex items-center gap-3 px-10 py-4 bg-[#0A2C5C] text-white text-[10px] font-black rounded-2xl uppercase tracking-widest hover:bg-blue-800 shadow-lg shadow-blue-900/20 transition-all hover:-translate-y-0.5 disabled:opacity-50"
                            >
                                <svg v-if="isValidating" class="animate-spin h-4 w-4 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                    <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                                    <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                                </svg>
                                <span>{{ isValidating ? 'Sprawdzanie...' : __('translate.next') }}</span>
                                <span v-if="!isValidating" class="text-lg leading-none">→</span>
                            </button>
                        </div>
                    </div>

                    <!-- KROK 3: Szczegóły i podsumowanie -->
                    <div v-show="currentStep === 3">
                        <!-- Tryb pracy i wymiar -->
                        <div class="bg-white rounded-[3rem] shadow-xl shadow-blue-900/5 border border-gray-100 p-10 mb-8">
                            <div class="flex items-center gap-4 mb-8">
                                <div class="w-12 h-12 rounded-2xl bg-blue-50 flex items-center justify-center border border-blue-100/50 shadow-sm">
                                    <img class="w-6 h-6" src="/images/icons/recruit/organizacja_pracy.svg" :alt="__('translate.altWorkOrganization')">
                                </div>
                                <h2 class="text-[10px] font-black text-[#0A2C5C] uppercase tracking-[0.2em]">{{ __('translate.workOrganization') }}</h2>
                                <div class="h-px flex-1 bg-gray-100"></div>
                            </div>

                            <div class="grid grid-cols-1 md:grid-cols-2 gap-10">
                                <div v-if="workingModes">
                                    <InputLabel for="workingMode" :value="__('translate.workingMode')" class="text-[10px] font-black text-gray-400 uppercase tracking-widest mb-4" />
                                    <div class="space-y-3">
                                        <div v-for="workingMode in workingModes" :key="workingMode.value"
                                             class="flex items-center gap-4 bg-gray-50/50 p-4 rounded-2xl border border-gray-100/50 cursor-pointer transition-all hover:bg-white hover:shadow-md"
                                             @click="toggleArrayItem(workingMode, form.workingMode, workingModeSelect)">
                                            <label class="group/check flex items-center cursor-pointer flex-1" @click.stop>
                                                <div class="relative flex items-center justify-center">
                                                    <input
                                                        type="checkbox"
                                                        :id="'workingMode-'+workingMode.value"
                                                        v-model="form.workingMode"
                                                        :value="workingMode"
                                                        class="peer sr-only"
                                                    />
                                                    <div class="h-6 w-6 rounded-lg border-2 border-white bg-white shadow-sm transition-all peer-checked:bg-[#0A2C5C] peer-checked:border-transparent flex items-center justify-center">
                                                        <svg class="w-4 h-4 text-white opacity-0 peer-checked:opacity-100 transition-opacity" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="4" d="M5 13l4 4L19 7" /></svg>
                                                    </div>
                                                </div>
                                                <span class="ml-4 text-xs font-black text-gray-500 uppercase tracking-widest group-hover/check:text-[#0A2C5C] transition-colors leading-tight">{{workingMode.name}}</span>
                                            </label>
                                        </div>
                                    </div>
                                    <InputError :message="form.errors.workingMode" class="mt-4 text-[10px] font-black uppercase tracking-widest"/>
                                </div>
                                <div v-if="workLoads">
                                    <InputLabel :value="__('translate.workLoads')" class="text-[10px] font-black text-gray-400 uppercase tracking-widest mb-4" />
                                    <div class="grid grid-cols-1 gap-3">
                                        <div v-for="workLoad in workLoads" :key="workLoad.value"
                                             class="flex items-center gap-4 bg-gray-50/50 p-4 rounded-2xl border border-gray-100/50 cursor-pointer transition-all hover:bg-white hover:shadow-md"
                                             @click="workLoadSelect = workLoad.name; form.workLoad = workLoad">
                                            <div class="relative flex items-center justify-center">
                                                <input
                                                    type="radio" :id="'workLoad-'+workLoad.value" v-model="form.workLoad"
                                                    :value="workLoad"
                                                    class="peer sr-only"
                                                />
                                                <div class="h-6 w-6 rounded-full border-2 border-white bg-white shadow-sm transition-all peer-checked:border-[#0A2C5C] peer-checked:border-[6px]"></div>
                                            </div>
                                            <span class="text-xs font-black text-gray-500 uppercase tracking-widest leading-tight">{{workLoad.name}}</span>
                                        </div>
                                    </div>
                                    <InputError :message="form.errors.workLoad" class="mt-4 text-[10px] font-black uppercase tracking-widest"/>
                                </div>
                            </div>

                            <div class="mt-10">
                                <InputLabel :value="__('translate.workingPlace')" class="text-[10px] font-black text-gray-400 uppercase tracking-widest mb-2" />
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
                                    v-model="form.workingPlace" :options="optionsWorkingPlace"
                                    class="custom-multiselect">
                                    <template #noResult>
                                        <span>{{__('translate.noOptions')}}</span>
                                    </template>
                                    <template #noOptions>
                                        <span>{{__('translate.noResult')}}</span>
                                    </template>
                                </multiselect>
                                <InputError :message="form.errors.workingPlace" class="mt-2 text-[10px] font-black uppercase tracking-widest"/>
                            </div>
                        </div>

                        <!-- Oferujemy - graficzne karty z filtrowaniem -->
                        <div class="bg-white rounded-[3rem] shadow-xl shadow-blue-900/5 border border-gray-100 p-10 mb-8" v-if="offers">
                            <div class="flex items-center gap-4 mb-8">
                                <div class="w-12 h-12 rounded-2xl bg-blue-50 flex items-center justify-center border border-blue-100/50 shadow-sm">
                                    <img class="w-6 h-6" src="/images/icons/recruit/oferujemy.svg" :alt="__('translate.altWeOffer')">
                                </div>
                                <h2 class="text-[10px] font-black text-[#0A2C5C] uppercase tracking-[0.2em]">{{ __('translate.offer') }}</h2>
                                <div class="h-px flex-1 bg-gray-100"></div>
                            </div>

                            <!-- Pole wyszukiwania -->
                            <div class="relative mb-8">
                                <TextInput
                                    v-model="offerFilter"
                                    type="text"
                                    class="w-full text-xs rounded-2xl border-gray-100 bg-gray-50 focus:bg-white focus:ring-0 transition-all placeholder-gray-400 p-4 pl-12"
                                    :placeholder="__('translate.searchInBenefits')"
                                />
                                <svg class="w-5 h-5 text-gray-400 absolute left-4 top-1/2 -translate-y-1/2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                                </svg>
                                <button
                                    v-if="offerFilter"
                                    @click="offerFilter = ''"
                                    type="button"
                                    class="absolute inset-y-0 right-4 flex items-center"
                                >
                                    <svg class="h-5 w-5 text-gray-400 hover:text-red-500 transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                                    </svg>
                                </button>
                            </div>

                            <!-- Grid benefitów -->
                            <div v-if="filteredOffers.length > 0" class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
                                <div
                                    v-for="offer in filteredOffers"
                                    :key="offer.id"
                                    @click="toggleArrayItem(offer, form.offer, offerSelect)"
                                    class="border border-gray-100 rounded-[2.5rem] p-6 cursor-pointer transition-all duration-300 hover:shadow-xl hover:shadow-blue-900/5 hover:-translate-y-1"
                                    :class="form.offer.some(item => item.id === offer.id) ? 'bg-[#0A2C5C] border-transparent shadow-lg shadow-blue-900/20' : 'bg-gray-50/50'"
                                >
                                    <div class="flex flex-col items-center text-center">
                                        <div
                                            class="w-16 h-16 rounded-2xl flex items-center justify-center mb-4 transition-all border-2"
                                            :class="form.offer.some(item => item.id === offer.id) ? 'bg-white/10 border-white/20' : 'bg-white border-white shadow-sm'"
                                        >
                                            <!-- Ikony dla różnych ofert -->
                                            <img v-if="offer.id == 2" class="w-8 h-8" src="/images/icons/offers/długoterminowa_wspolpraca.svg" alt="długoterminowa_wspolpraca">
                                            <img v-else-if="offer.id == 1" class="w-8 h-8" src="/images/icons/offers/umowa_o_prace.svg" alt="umowa_o_prace">
                                            <img v-else-if="offer.id == 3" class="w-8 h-8" src="/images/icons/offers/brak_okresu_probnego.svg" alt="brak_okresu_probnego">
                                            <img v-else-if="offer.id == 4" class="w-8 h-8" src="/images/icons/offers/system_premiowy.svg" alt="system_premiowy">
                                            <img v-else-if="offer.id == 5" class="w-8 h-8" src="/images/icons/offers/szkolenia.svg" alt="szkolenia">
                                            <img v-else-if="offer.id == 6" class="w-8 h-8" src="/images/icons/offers/możliwosc_awansu_zawodowego.svg" alt="możliwosc_awansu_zawodowego">
                                            <img v-else-if="offer.id == 7" class="w-8 h-8" src="/images/icons/offers/wynagrodzenie.svg" alt="wynagrodzenie">
                                            <img v-else-if="offer.id == 8" class="w-8 h-8" src="/images/icons/offers/praca_zdalna.svg" alt="praca_zdalna">
                                            <img v-else-if="offer.id == 9" class="w-8 h-8" src="/images/icons/offers/prywatna_opieka_medyczna.svg" alt="prywatna_opieka_medyczna">
                                            <img v-else-if="offer.id == 10" class="w-8 h-8" src="/images/icons/offers/karta_sportowa.svg" alt="karta_sportowa">
                                            <img v-else-if="offer.id == 11" class="w-8 h-8" src="/images/icons/offers/dofinansowanie_do_posilkow.svg" alt="dofinansowanie_do_posilkow">
                                            <img v-else-if="offer.id == 12" class="w-8 h-8" src="/images/icons/offers/biuro_w_centrum_miasta.svg" alt="biuro_w_centrum_miasta">
                                            <img v-else-if="offer.id == 13" class="w-8 h-8" src="/images/icons/offers/parking_dla_pracownikow.svg" alt="parking_dla_pracownikow">
                                            <img v-else-if="offer.id == 14" class="w-8 h-8" src="/images/icons/offers/samochod_sluzbowy.svg" alt="samochod_sluzbowy">
                                            <img v-else-if="offer.id == 15" class="w-8 h-8" src="/images/icons/offers/dodatkowe_ubezpieczenie.svg" alt="dodatkowe_ubezpieczenie">
                                            <img v-else-if="offer.id == 16" class="w-8 h-8" src="/images/icons/offers/znizka_na_zakupy.svg" alt="znizka_na_zakupy">
                                            <img v-else-if="offer.id == 17" class="w-8 h-8" src="/images/icons/offers/wydarzenia_integracyjne.svg" alt="wydarzenia_integracyjne">
                                            <img v-else-if="offer.id == 18" class="w-8 h-8" src="/images/icons/offers/kawa_herbata.svg" alt="kawa_herbata">
                                            <img v-else-if="offer.id == 19" class="w-8 h-8" src="/images/icons/offers/owoce.svg" alt="owoce">
                                            <img v-else-if="offer.id == 20" class="w-8 h-8" src="/images/icons/offers/brak_dres_codeu.svg" alt="brak_dres_codeu">
                                            <img v-else-if="offer.id == 21" class="w-8 h-8" src="/images/icons/offers/nagrody_pracownicze.svg" alt="nagrody_pracownicze">
                                            <img v-else-if="offer.id == 22" class="w-8 h-8" src="/images/icons/offers/dofinansowanie_do_transportu.svg" alt="dofinansowanie_do_transportu">
                                        </div>
                                        <h3 class="font-black text-[10px] uppercase tracking-widest mb-3 leading-tight" :class="form.offer.some(item => item.id === offer.id) ? 'text-white' : 'text-gray-900'">{{ offer.name }}</h3>

                                        <div class="h-5 w-5 rounded border-2 transition-all flex items-center justify-center"
                                             :class="form.offer.some(item => item.id === offer.id) ? 'bg-white border-transparent' : 'bg-white border-gray-200'">
                                            <svg v-if="form.offer.some(item => item.id === offer.id)" class="w-3.5 h-3.5 text-[#0A2C5C]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="4" d="M5 13l4 4L19 7" /></svg>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div v-else class="text-center py-16 bg-gray-50/50 rounded-[2.5rem] border border-dashed border-gray-200">
                                <svg class="mx-auto h-16 w-16 text-gray-200 mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                                </svg>
                                <p class="text-xs font-black text-gray-400 uppercase tracking-widest">{{ __('translate.noBenefitsFound') }}</p>
                            </div>
                            <InputError :message="form.errors.offer" class="mt-4 text-[10px] font-black uppercase tracking-widest"/>
                        </div>

                        <!-- Oczekujemy i Mile widziane - 2 wiersze, 4 kolumny z filtrowaniem -->
                        <div class="bg-white rounded-[3rem] shadow-xl shadow-blue-900/5 border border-gray-100 p-10 mb-8">
                            <!-- Oczekujemy -->
                            <div v-if="waits" class="mb-12">
                                <div class="flex items-center gap-4 mb-8">
                                    <div class="w-12 h-12 rounded-2xl bg-blue-50 flex items-center justify-center border border-blue-100/50 shadow-sm">
                                        <img class="w-6 h-6" src="/images/icons/recruit/oczekujemy.svg" :alt="__('translate.altWeExpect')">
                                    </div>
                                    <h2 class="text-[10px] font-black text-[#0A2C5C] uppercase tracking-[0.2em]">{{ __('translate.wait') }}</h2>
                                    <div class="h-px flex-1 bg-gray-100"></div>
                                </div>

                                <!-- Pole wyszukiwania -->
                                <div class="relative mb-8">
                                    <TextInput
                                        v-model="waitFilter"
                                        type="text"
                                        class="w-full text-xs rounded-2xl border-gray-100 bg-gray-50 focus:bg-white focus:ring-0 transition-all placeholder-gray-400 p-4 pl-12"
                                        :placeholder="__('translate.searchInRequirements')"
                                    />
                                    <svg class="w-5 h-5 text-gray-400 absolute left-4 top-1/2 -translate-y-1/2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                                    </svg>
                                    <button
                                        v-if="waitFilter"
                                        @click="waitFilter = ''"
                                        type="button"
                                        class="absolute inset-y-0 right-4 flex items-center"
                                    >
                                        <svg class="h-5 w-5 text-gray-400 hover:text-red-500 transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                                        </svg>
                                    </button>
                                </div>

                                <!-- Grid 4 kolumny -->
                                <div v-if="filteredWaits.length > 0" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
                                    <div v-for="wait in filteredWaits" :key="wait.id"
                                         class="flex items-center gap-3 bg-gray-50/50 p-4 rounded-2xl border border-gray-100/50 cursor-pointer transition-all hover:bg-white hover:shadow-md"
                                         @click="toggleArrayItem(wait, form.wait, waitSelect)">
                                        <label class="group/check flex items-center cursor-pointer flex-1" @click.stop>
                                            <div class="relative flex items-center justify-center">
                                                <input
                                                    type="checkbox"
                                                    :id="'wait'+wait.id"
                                                    v-model="form.wait"
                                                    :value="wait"
                                                    class="peer sr-only"
                                                />
                                                <div class="h-5 w-5 rounded-lg border-2 border-white bg-white shadow-sm transition-all peer-checked:bg-[#0A2C5C] peer-checked:border-transparent flex items-center justify-center">
                                                    <svg class="w-3 h-3 text-white opacity-0 peer-checked:opacity-100 transition-opacity" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="4" d="M5 13l4 4L19 7" /></svg>
                                                </div>
                                            </div>
                                            <span class="ml-3 text-[10px] font-black text-gray-500 uppercase tracking-widest group-hover/check:text-[#0A2C5C] transition-colors leading-tight">{{wait.name}}</span>
                                        </label>
                                    </div>
                                </div>
                                <div v-else class="text-center py-16 bg-gray-50/50 rounded-[2.5rem] border border-dashed border-gray-200">
                                    <svg class="mx-auto h-16 w-16 text-gray-200 mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9.172 16.172a4 4 0 015.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                    <p class="text-xs font-black text-gray-400 uppercase tracking-widest">{{ __('translate.noRequirementsFound') }}</p>
                                </div>
                                <InputError :message="form.errors.wait" class="mt-4 text-[10px] font-black uppercase tracking-widest"/>
                            </div>

                            <!-- Mile widziane -->
                            <div v-if="welcomes">
                                <div class="flex items-center gap-4 mb-8">
                                    <div class="w-12 h-12 rounded-2xl bg-blue-50 flex items-center justify-center border border-blue-100/50 shadow-sm">
                                        <img class="w-6 h-6" src="/images/icons/recruit/mile_widziane.svg" :alt="__('translate.altWelcomed')">
                                    </div>
                                    <h2 class="text-[10px] font-black text-[#0A2C5C] uppercase tracking-[0.2em]">{{ __('translate.welcome') }}</h2>
                                    <div class="h-px flex-1 bg-gray-100"></div>
                                </div>

                                <!-- Pole wyszukiwania -->
                                <div class="relative mb-8">
                                    <TextInput
                                        v-model="welcomeFilter"
                                        type="text"
                                        class="w-full text-xs rounded-2xl border-gray-100 bg-gray-50 focus:bg-white focus:ring-0 transition-all placeholder-gray-400 p-4 pl-12"
                                        :placeholder="__('translate.searchInPreferences')"
                                    />
                                    <svg class="w-5 h-5 text-gray-400 absolute left-4 top-1/2 -translate-y-1/2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                                    </svg>
                                    <button
                                        v-if="welcomeFilter"
                                        @click="welcomeFilter = ''"
                                        type="button"
                                        class="absolute inset-y-0 right-4 flex items-center"
                                    >
                                        <svg class="h-5 w-5 text-gray-400 hover:text-red-500 transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                                        </svg>
                                    </button>
                                </div>

                                <!-- Grid 4 kolumny -->
                                <div v-if="filteredWelcomes.length > 0" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
                                    <div v-for="welcome in filteredWelcomes" :key="welcome.id"
                                         class="flex items-center gap-3 bg-gray-50/50 p-4 rounded-2xl border border-gray-100/50 cursor-pointer transition-all hover:bg-white hover:shadow-md"
                                         @click="toggleArrayItem(welcome, form.welcome, welcomeSelect)">
                                        <label class="group/check flex items-center cursor-pointer flex-1" @click.stop>
                                            <div class="relative flex items-center justify-center">
                                                <input
                                                    type="checkbox"
                                                    :id="'welcome'+welcome.id"
                                                    v-model="form.welcome"
                                                    :value="welcome"
                                                    class="peer sr-only"
                                                />
                                                <div class="h-5 w-5 rounded-lg border-2 border-white bg-white shadow-sm transition-all peer-checked:bg-[#0A2C5C] peer-checked:border-transparent flex items-center justify-center">
                                                    <svg class="w-3 h-3 text-white opacity-0 peer-checked:opacity-100 transition-opacity" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="4" d="M5 13l4 4L19 7" /></svg>
                                                </div>
                                            </div>
                                            <span class="ml-3 text-[10px] font-black text-gray-500 uppercase tracking-widest group-hover/check:text-[#0A2C5C] transition-colors leading-tight">{{welcome.name}}</span>
                                        </label>
                                    </div>
                                </div>
                                <div v-else class="text-center py-16 bg-gray-50/50 rounded-[2.5rem] border border-dashed border-gray-200">
                                    <svg class="mx-auto h-16 w-16 text-gray-200 mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9.172 16.172a4 4 0 015.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                    <p class="text-xs font-black text-gray-400 uppercase tracking-widest">{{ __('translate.noPreferencesFound') }}</p>
                                </div>
                                <InputError :message="form.errors.welcome" class="mt-4 text-[10px] font-black uppercase tracking-widest"/>
                            </div>
                        </div>

                        <!-- Doświadczenie -->
                        <div class="bg-white rounded-[3rem] shadow-xl shadow-blue-900/5 border border-gray-100 p-10 mb-8" v-if="experiences && experiences.length > 0">
                            <div class="flex items-center gap-4 mb-8">
                                <div class="w-12 h-12 rounded-2xl bg-blue-50 flex items-center justify-center border border-blue-100/50 shadow-sm">
                                    <img class="w-6 h-6" src="/images/icons/recruit/mile_widziane.svg" :alt="__('translate.experience')">
                                </div>
                                <h2 class="text-[10px] font-black text-[#0A2C5C] uppercase tracking-[0.2em]">{{ __('translate.experience') }}</h2>
                                <div class="h-px flex-1 bg-gray-100"></div>
                            </div>
                            <div class="bg-gray-50/50 rounded-[2.5rem] p-8 border border-gray-100/50">
                                <div class="flex items-center justify-between gap-6">
                                    <div class="flex-1">
                                        <label class="block text-sm font-black text-[#0A2C5C] uppercase tracking-tight">{{ __('translate.experience') }}</label>
                                        <p class="text-xs font-bold text-gray-400 uppercase tracking-tight mt-1">{{ __('translate.isExperienceRequired') }}</p>
                                        <div v-if="isExperienceEnabled" class="mt-4 inline-flex px-4 py-2 bg-white rounded-xl border border-blue-100 text-[10px] font-black text-[#00a0e3] uppercase tracking-widest shadow-sm">
                                            {{ form.experience.name }}
                                        </div>
                                    </div>
                                    <button
                                        type="button"
                                        @click="toggleExperience"
                                        :class="[
                                            'relative inline-flex h-8 w-14 shrink-0 items-center rounded-full transition-all duration-300 focus:outline-none shadow-sm',
                                            isExperienceEnabled ? 'bg-[#0A2C5C]' : 'bg-gray-200'
                                        ]"
                                    >
                                        <span
                                            :class="[
                                                'inline-block h-6 w-6 transform rounded-full bg-white shadow-md transition-transform duration-300',
                                                isExperienceEnabled ? 'translate-x-7' : 'translate-x-1'
                                            ]"
                                        />
                                    </button>
                                </div>
                                <InputError :message="form.errors.experience" class="mt-4 text-[10px] font-black uppercase tracking-widest"/>
                            </div>
                        </div>

                        <!-- Wykształcenie -->
                        <div class="bg-white rounded-[3rem] shadow-xl shadow-blue-900/5 border border-gray-100 p-10 mb-8">
                            <div class="flex items-center gap-4 mb-8">
                                <h2 class="text-[10px] font-black text-[#0A2C5C] uppercase tracking-[0.2em]">{{ __('translate.education') }}</h2>
                                <div class="h-px flex-1 bg-gray-100"></div>
                            </div>
                            <div v-if="educations" class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                <div v-for="education in educations" :key="education.id"
                                     class="flex items-center gap-4 bg-gray-50/50 p-4 rounded-2xl border border-gray-100/50 cursor-pointer transition-all hover:bg-white hover:shadow-md"
                                     @click="educationSelect = education.name; form.education = education.id">
                                    <div class="relative flex items-center justify-center">
                                        <input
                                            type="radio" :id="'education-'+education.id" v-model="form.education"
                                            :value="education.id"
                                            class="peer sr-only"
                                        />
                                        <div class="h-6 w-6 rounded-full border-2 border-white bg-white shadow-sm transition-all peer-checked:border-[#0A2C5C] peer-checked:border-[6px]"></div>
                                    </div>
                                    <span class="text-xs font-black text-gray-500 uppercase tracking-widest leading-tight">{{education.name}}</span>
                                </div>
                            </div>
                            <InputError :message="form.errors.education" class="mt-4 text-[10px] font-black uppercase tracking-widest"/>
                        </div>

                        <!-- Przyciski nawigacji i submit -->
                        <div class="flex justify-between items-center mt-12 pt-8 border-t border-gray-100">
                            <button
                                type="button"
                                @click="prevStep"
                                class="inline-flex items-center gap-2 rounded-2xl border border-gray-100 bg-white px-8 py-4 text-xs font-black uppercase tracking-widest text-gray-400 shadow-sm hover:bg-gray-50 transition-all hover:-translate-y-0.5"
                            >
                                <span class="text-lg leading-none">←</span>
                                {{ __('translate.previous') }}
                            </button>
                            <PrimaryButton
                                type="submit"
                                :class="{ 'opacity-25': form.processing }"
                                :disabled="form.processing"
                                class="!inline-flex !items-center !px-10 !py-4 !bg-[#0A2C5C] !text-white !text-[10px] !font-black !rounded-2xl !uppercase !tracking-widest !hover:bg-blue-800 !shadow-lg !shadow-blue-900/20 !transition-all !hover:-translate-y-0.5"
                            >
                                <spinner-action :process="form.processing">{{__('translate.add')}}</spinner-action>
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
.mapbox-geocoder-container {
    .mapboxgl-ctrl-geocoder {
        width: 100% !important;
        max-width: none !important;
        box-shadow: none !important;
        border: none !important;
        background-color: transparent !important;
        min-height: 3rem !important;
        position: relative !important;

        .mapboxgl-ctrl-geocoder--input {
            padding: 0.75rem 3rem 0.75rem 2.75rem !important;
            font-size: 0.875rem;
            height: 3rem !important;
            line-height: 1.5rem !important;
            border: none !important;
            background-color: transparent !important;
            width: 100% !important;

            &:focus {
                outline: none !important;
                box-shadow: none !important;
            }
        }

        .mapboxgl-ctrl-geocoder--icon {
            top: 50% !important;
            transform: translateY(-50%) !important;
            left: 0.75rem !important;
            width: 1.25rem;
            height: 1.25rem;
        }

        .mapboxgl-ctrl-geocoder--button {
            top: 50% !important;
            transform: translateY(-50%) !important;
            right: 0.5rem !important;
            width: 1.5rem;
            height: 1.5rem;
            background: transparent;

            &:hover {
                background-color: #f3f4f6;
                border-radius: 0.25rem;
            }
        }

        .mapboxgl-ctrl-geocoder--icon-close {
            margin-top: 0 !important;
            width: 1rem;
            height: 1rem;
        }
    }

    .mapboxgl-ctrl-geocoder--input:focus {
        outline: none !important;
    }

    .mapboxgl-ctrl-geocoder--suggestion {
        padding: 0.75rem 1rem;

        &:hover {
            background-color: #f3f4f6;
        }
    }

    .mapboxgl-ctrl-geocoder--powered-by {
        display: none !important;
    }

    .suggestions-wrapper {
        position: relative;
        z-index: 9999 !important;
    }

    .suggestions {
        position: absolute !important;
        top: 100% !important;
        left: 0 !important;
        right: 0 !important;
        background-color: white !important;
        border-radius: 0.5rem;
        box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05) !important;
        margin-top: 0.25rem;
        border: none !important;
        z-index: 9999 !important;
        display: block !important;
        visibility: visible !important;
    }
}

.custom-multiselect {
    .multiselect__tags {
        border: 1px solid #f3f4f6; /* border-gray-100 */
        border-radius: 1rem; /* rounded-2xl approximation for multiselect */
        padding: 0.75rem 2.5rem 0.75rem 1.25rem;
        background: #f9fafb; /* bg-gray-50 */
        transition: all 0.3s ease;
    }

    .multiselect__placeholder {
        margin-bottom: 0;
        padding-top: 0;
        color: #9ca3af; /* text-gray-400 */
        font-size: 0.75rem; /* text-xs */
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 0.1em;
    }

    .multiselect__single {
        margin-bottom: 0;
        padding-left: 0;
        font-size: 0.75rem;
        background: transparent;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 0.1em;
    }

    .multiselect__input {
        margin-bottom: 0;
        background: transparent;
        font-size: 0.75rem;
        font-weight: 700;
    }

    .multiselect__select {
        height: 100%;
        width: 2.5rem;
    }

    .multiselect__option--highlight {
        background: #0A2C5C !important;
        outline: none;
        color: white;
        font-size: 0.75rem;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 0.1em;

        &:after {
            background: #0A2C5C !important;
            color: white !important;
        }
    }

    .multiselect__option--selected {
        background: #f3f4f6 !important;
        color: #0A2C5C;
        font-weight: 900;

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
        background: #00a0e3 !important;
        font-size: 0.75rem;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 0.1em;
        padding: 4px 26px 4px 10px;
        border-radius: 8px;
    }

    .multiselect__tag-icon {
        background: #00a0e3 !important;
        border-radius: 8px;

        &:after {
            color: white !important;
        }

        &:hover {
            background: #0088c1 !important;
        }
    }

    .multiselect__content-wrapper {
        border: 1px solid #f3f4f6;
        border-top: none;
        border-bottom-left-radius: 1rem;
        border-bottom-right-radius: 1rem;
        box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1);
    }
}
</style>
