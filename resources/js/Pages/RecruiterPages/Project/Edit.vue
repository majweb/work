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
import FormSectionProject from "@/Components/FormSectionProject.vue";
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
    shiftWorks: Array,
    payoutModes: Array,
    days: Array,
    paySystems: Array,
    offers: Array,
    waits: Array,
    experiences: Array,
    welcomes: Array,
    educations: Array,
    project: Object,
    currencies: Array,
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

    category: props.project.category,
    categorySub: props.project.categorySub,
    profession: props.project.profession,
    position: props.project.position,
    title: props.project.title,
    currency: props.project.currency,
    basicSalaryFrom: props.project.basicSalaryFrom,
    basicSalaryTo: props.project.basicSalaryTo,
    bonusSalaryFrom: props.project.bonusSalaryFrom,
    bonusSalaryTo: props.project.bonusSalaryTo,
    hoursFrom: props.project.hoursFrom,
    hoursTo: props.project.hoursTo,
    workLoad: props.project.workLoad,
    education: props.project.education,
    shiftWork: props.project.shiftWork,
    payoutMode: props.project.payoutMode,
    workNight: props.project.workNight,
    workingMode: props.project.workingMode ?? [],
    typeOfContract: props.project.typeOfContract ?? [],
    paySystem: props.project.paySystem ?? [],
    workingPlace: props.project.workingPlace ?? [],
    country: props.project.country ?? [],
    days: props.project.days ?? [],
    offer: props.project.offer ?? [],
    wait: props.project.wait ?? [],
    experience: props.project.experience ?? [],
    welcome: props.project.welcome ?? [],
    detailProjects:  props.project.detailprojects.map(el=>el.id) ?? [],
    countryWork: props.project.countryWork,
    streetWork: props.project.streetWork,
    streetWorkNumber: props.project.streetWorkNumber,
    postalWork: props.project.postalWork,
    cityWork: props.project.cityWork,
    cv: props.project.cv ?? [],
    questions: props.project.questions ?? [],
    external_company_id: props.externalCompanies.find(
        company => company.id === props.project.external_company_id
    ) || '',
    is_active: props.project.is_active ?? true,






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

const updateProject = () => {
    form.put(route('project-recruits.update',props.project), {
        errorBag: 'updateProject',
        preserveScroll: true,
        onSuccess: () => {
            // form.reset();
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
    const geocoder = new MapboxGeocoder({
        accessToken: mapboxgl.accessToken,
        mapboxgl: mapboxgl,
        marker: false,
        placeholder: __('translate.enterAddress'),
        countries: form.countryWork?.countryCode?.toLowerCase() || 'pl',
        language: usePage().props.locale || 'pl',
    });

    geocoderContainer.value.appendChild(geocoder.onAdd(map.value));

    // Obsługa wyboru miejsca z autocomplete
    geocoder.on('result', (e) => {
        const place = e.result;

        // Usuń stary marker
        if (marker.value) {
            marker.value.remove();
        }

        // Dodaj nowy marker
        marker.value = new mapboxgl.Marker()
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
    if (newVal && !map.value) {
        setTimeout(() => {
            initializeMap();
        }, 100);
    } else if (!newVal && map.value) {
        // Usuń mapę gdy kraj został wyczyszczony
        map.value.remove();
        map.value = null;
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

// Inicjalizacja przy montowaniu komponentu
onMounted(async () => {
    // Ustaw drugi element jako domyślny dla experience (Niewymagane/Bez doświadczenia)
    if (!form.experience && props.experiences && props.experiences.length > 1) {
        form.experience = props.experiences[1];
    }

    // Załaduj podkategorie, zawody i stanowiska jeśli projekt ma je wypełnione
    if (form.category && form.category.value) {
        try {
            optionsSubCategory.value = (await axios.get(route('getChildsCategory', form.category.value))).data;
        } catch (error) {
            console.error(__('translate.errorLoadingSubcategories'), error);
        }
    }

    if (form.categorySub && form.categorySub.value) {
        try {
            optionsProfession.value = (await axios.get(route('getChildsCategory', form.categorySub.value))).data;
        } catch (error) {
            console.error(__('translate.errorLoadingProfessions'), error);
        }
    }

    if (form.profession && form.profession.value) {
        try {
            optionsPosition.value = (await axios.get(route('getChildsCategory', form.profession.value))).data;
        } catch (error) {
            console.error(__('translate.errorLoadingPositions'), error);
        }
    }

    // Inicjalizacja mapy jeśli jest wybrany kraj pracy
    if (form.countryWork && form.countryWork.name) {
        setTimeout(() => {
            initializeMap();

            // Jeśli mamy wszystkie dane adresowe, dodaj marker na mapie
            if (form.cityWork && form.streetWork && form.streetWorkNumber) {
                // Użyj geocodera do znalezienia współrzędnych
                const fullAddress = `${form.streetWork} ${form.streetWorkNumber}, ${form.postalWork} ${form.cityWork}, ${form.countryWork.name}`;

                // Spróbuj pobrać współrzędne dla istniejącego adresu
                fetch(`https://api.mapbox.com/geocoding/v5/mapbox.places/${encodeURIComponent(fullAddress)}.json?access_token=${usePage().props.mapboxToken}&limit=1`)
                    .then(response => response.json())
                    .then(data => {
                        if (data.features && data.features.length > 0) {
                            const coords = data.features[0].center;

                            // Wycentruj mapę na adresie
                            if (map.value) {
                                map.value.setCenter(coords);
                                map.value.setZoom(15);

                                // Dodaj marker
                                if (marker.value) {
                                    marker.value.remove();
                                }
                                marker.value = new mapboxgl.Marker()
                                    .setLngLat(coords)
                                    .addTo(map.value);
                            }
                        }
                    })
                    .catch(error => {
                        console.error(__('translate.errorGeocodingAddress'), error);
                    });
            }
        }, 300); // Zwiększony timeout dla pewności że DOM jest gotowy
    }
});

</script>

<template>
    <AppLayout :title="__('translate.updateProject')">
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
                        {{ __('translate.updateProject') }}
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
                                        class="w-10 h-10 rounded-full flex items-center justify-center font-bold transition-all z-10 relative"
                                        :class="currentStep >= step ? 'bg-work-main text-white' : 'bg-gray-200 text-gray-500'"
                                    >
                                        {{ step }}
                                    </div>
                                    <div class="mt-3 text-xs text-center font-medium px-2 leading-tight">
                                        <span v-if="step === 1" v-html="__('translate.stepBasicInfo')"></span>
                                        <span v-else-if="step === 2" v-html="__('translate.stepEmploymentConditions')"></span>
                                        <span v-else-if="step === 3" v-html="__('translate.stepRequirementsBenefits')"></span>
                                    </div>
                                </div>

                                <!-- Linia łącząca -->
                                <div
                                    v-if="step < totalSteps"
                                    class="absolute top-5 left-1/2 w-full h-0.5 transition-all -z-0"
                                    :class="currentStep > step ? 'bg-[#00a0e3]' : 'bg-gray-300'"
                                    style="transform: translateY(-50%);"
                                ></div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Formularz -->
                <form @submit.prevent="updateProject">

                    <!-- KROK 1: Podstawowe informacje -->
                    <div v-show="currentStep === 1">
                        <!-- Wybór typu CV -->
                        <div class="bg-white rounded-xl shadow-sm border border-gray-200 p-6 mb-6">
                            <div class="flex items-center gap-2 mb-6">
                                <h2 class="text-2xl font-bold text-gray-900">{{ __('translate.cv') }}</h2>
                            </div>

                            <div class="text-center mb-8">
                                <p class="text-gray-600">{{ __('translate.cvTypeDescription') }}</p>
                            </div>

                            <!-- Karty wyboru typu CV -->
                            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8" v-if="cvs">
                                <div
                                    v-for="cv in cvs"
                                    :key="cv.id"
                                    @click="addToArray(cvSelect,cv.name); if(!form.cv.some(item => item.id === cv.id)) { form.cv.push(cv) } else { form.cv = form.cv.filter(item => item.id !== cv.id) }"
                                    class="border-2 rounded-xl p-6 cursor-pointer transition-all hover:shadow-lg"
                                    :class="form.cv.some(item => item.id === cv.id) ? 'border-[#00a0e3] bg-blue-50' : 'border-gray-200 hover:border-[#00a0e3]'"
                                >
                                    <div class="flex flex-col items-center text-center">
                                        <div
                                            class="w-16 h-16 rounded-full flex items-center justify-center mb-4 transition-all"
                                            :class="form.cv.some(item => item.id === cv.id) ? 'bg-[#00a0e3] text-white' : 'bg-gray-100 text-gray-600'"
                                        >
                                            <img v-if="cv.id === 1" class="w-16 h-16" src="/images/icons/recruit/klasyczne_cv.svg" alt="cv">
                                            <img v-else-if="cv.id === 2" class="w-16 h-16" src="/images/icons/recruit/video_cv.svg" alt="video_cv">
                                            <img v-else-if="cv.id === 3" class="w-16 h-16" src="/images/icons/recruit/audio_cv.svg" alt="audio_cv">
                                        </div>
                                        <h3 class="font-bold text-lg mb-2">{{ cv.name }}</h3>
                                        <input
                                            class="mt-4"
                                            type="checkbox"
                                            :checked="form.cv.some(item => item.id === cv.id)"
                                            readonly
                                        />
                                    </div>
                                </div>
                            </div>
                            <InputError :message="form.errors.cv" class="mt-2 text-center"/>

                            <!-- Pole is_active -->
                            <div class="mt-6 p-4 bg-blue-50 rounded-lg border border-blue-100">
                                <div class="flex items-center">
                                    <input
                                        class="rounded border-gray-300 text-[#00a0e3] shadow-sm focus:ring-[#00a0e3] mr-3"
                                        type="checkbox"
                                        id="is_active"
                                        v-model="form.is_active"
                                        :true-value="true"
                                        :false-value="false"
                                    />
                                    <div>
                                        <InputLabel for="is_active" :value="__('translate.projectIsActive')" class="mb-0 font-semibold" />
                                        <p class="text-sm text-gray-600 mt-1">
                                            {{ __('translate.projectIsActiveDescription') }}
                                        </p>
                                    </div>
                                </div>
                                <InputError :message="form.errors.is_active" class="mt-2"/>
                            </div>

                            <!-- Pytania do CV video/audio -->
                            <div class="mt-6" v-if="shouldShowQuestions">
                                <div class="p-4 bg-blue-50 rounded-lg border border-blue-100 mb-6">
                                    <h3 class="font-medium text-blue-900">{{ __('translate.questionsInfo') }}</h3>
                                    <p class="text-sm text-blue-700 mt-1">
                                        {{ __('translate.questionsDescription') }}
                                    </p>
                                </div>
                                <QuestionForm v-model="form.questions" :error="form.errors" />
                            </div>
                        </div>

                        <!-- Kategoria z obowiązkami w 2 kolumnach -->
                        <div class="bg-white rounded-xl shadow-sm border border-gray-200 p-6 mb-6">
                            <div class="flex items-center gap-2 mb-6">
                                <img class="w-8 h-8" src="/images/icons/recruit/kategoria.svg" :alt="__('translate.altCategory')">
                                <h2 class="text-xl font-bold text-gray-900">{{ __('translate.categorySection') }}</h2>
                            </div>

                            <!-- Grid z 2 kolumnami: Kategorie | Obowiązki -->
                            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                                <!-- Lewa kolumna - kategorie -->
                                <div class="space-y-4">
                                    <div>
                                        <InputLabel :value="__('translate.category')"/>
                                        <multiselect
                                            :selectLabel="__('translate.selectLabel')"
                                            :selectGroupLabel="__('translate.selectGroupLabel')"
                                            :selectedLabel="__('translate.selectedLabel')"
                                            :deselectLabel="__('translate.deselectLabel')"
                                            track-by="value"
                                            label="name"
                                            :placeholder="__('translate.placeholder')"
                                            v-model="form.category" :options="optionsCategory">
                                            <template #noResult>
                                                <span>{{__('translate.noOptions')}}</span>
                                            </template>
                                            <template #noOptions>
                                                <span>{{__('translate.noResult')}}</span>
                                            </template>
                                        </multiselect>
                                        <InputError :message="form.errors.category" class="mt-2"/>
                                    </div>

                                    <div>
                                        <InputLabel :value="__('translate.subcategory')"/>
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
                                            v-model="form.categorySub" :options="optionsSubCategory">
                                            <template #noResult>
                                                <span>{{__('translate.noOptions')}}</span>
                                            </template>
                                            <template #noOptions>
                                                <span>{{__('translate.noResult')}}</span>
                                            </template>
                                        </multiselect>
                                        <InputError :message="form.errors.categorySub" class="mt-2"/>
                                    </div>

                                    <div>
                                        <InputLabel :value="__('translate.profession')"/>
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
                                            v-model="form.profession" :options="optionsProfession">
                                            <template #noResult>
                                                <span>{{__('translate.noOptions')}}</span>
                                            </template>
                                            <template #noOptions>
                                                <span>{{__('translate.noResult')}}</span>
                                            </template>
                                        </multiselect>
                                        <InputError :message="form.errors.profession" class="mt-2"/>
                                    </div>

                                    <div>
                                        <InputLabel :value="__('translate.position')"/>
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
                                            v-model="form.position" :options="optionsPosition">
                                            <template #noResult>
                                                <span>{{__('translate.noOptions')}}</span>
                                            </template>
                                            <template #noOptions>
                                                <span>{{__('translate.noResult')}}</span>
                                            </template>
                                        </multiselect>
                                        <InputError :message="form.errors.position" class="mt-2"/>
                                    </div>
                                </div>

                                <!-- Prawa kolumna - obowiązki (pokazuje się gdy są dostępne) -->
                                <div v-if="((form.position.detailprojects && Object.keys(form.position.detailprojects).length) || (form.profession.detailprojects && Object.keys(form.profession.detailprojects).length))">
                                    <div class="sticky top-4">
                                        <div class="bg-blue-50 rounded-lg p-4 border border-blue-200">
                                            <div class="flex items-center justify-between mb-4">
                                                <h3 class="text-lg font-semibold text-gray-900">{{ __('translate.detailProjects') }}</h3>
                                                <div class="flex gap-2">
                                                    <button type="button" @click="addAll()" class="text-xs text-[#00a0e3] hover:text-blue-700 font-medium">
                                                        {{ __('translate.selectAll') }}
                                                    </button>
                                                    <button v-if="form.detailProjects.length" type="button" @click="zeroAll()" class="text-xs text-gray-600 hover:text-gray-800 font-medium">
                                                        {{ __('translate.clear') }}
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="space-y-2 max-h-96 overflow-y-auto">
                                                <div v-for="detail in (form.position.detailprojects || form.profession.detailprojects)" :key="detail.id" class="flex items-start bg-white rounded-lg p-3 hover:shadow-sm transition-shadow">
                                                    <input
                                                        class="rounded border-gray-300 text-[#00a0e3] shadow-sm focus:ring-[#00a0e3] mr-3 mt-1"
                                                        type="checkbox" :id="'detailProjects-'+detail.id" v-model="form.detailProjects"
                                                        :value="detail.id" />
                                                    <label class="text-sm cursor-pointer flex-1" :for="'detailProjects-'+detail.id">{{detail.name[usePage().props.language]}}</label>
                                                </div>
                                            </div>
                                            <InputError :message="form.errors.detailProjects" class="mt-2"/>
                                        </div>
                                    </div>
                                </div>

                                <!-- Placeholder gdy nie ma obowiązków -->
                                <div v-else class="flex items-center justify-center bg-gray-50 rounded-lg border-2 border-dashed border-gray-300 p-8">
                                    <div class="text-center text-gray-500">
                                        <svg class="w-16 h-16 mx-auto mb-3 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4"></path>
                                        </svg>
                                        <p class="text-sm">{{ __('translate.selectPositionToSeeDetails') }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Kraj publikacji i firma zewnętrzna -->
                        <div class="bg-white rounded-xl shadow-sm border border-gray-200 p-6 mb-6">
                            <div class="flex items-center gap-2 mb-6">
                                <h2 class="text-xl font-bold text-gray-900">{{ __('translate.CountryPublish') }}</h2>
                            </div>

                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div>
                                    <InputLabel :value="__('translate.CountryPublish')"/>
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
                                        v-model="form.country" :options="optionsCountry">
                                        <template #noResult>
                                            <span>{{__('translate.noOptions')}}</span>
                                        </template>
                                        <template #noOptions>
                                            <span>{{__('translate.noResult')}}</span>
                                        </template>
                                    </multiselect>
                                    <InputError :message="form.errors.country" class="mt-2"/>
                                </div>
                                <div v-if="externalCompanies && externalCompanies.length > 0">
                                    <InputLabel :value="__('translate.externalCompany')"/>
                                    <multiselect
                                        :selectLabel="__('translate.selectLabel')"
                                        :selectGroupLabel="__('translate.selectGroupLabel')"
                                        :selectedLabel="__('translate.selectedLabel')"
                                        :deselectLabel="__('translate.deselectLabel')"
                                        track-by="id"
                                        label="name"
                                        :placeholder="__('translate.placeholder')"
                                        v-model="form.external_company_id"
                                        :options="externalCompanies">
                                        <template #noResult>
                                            <span>{{__('translate.noOptions')}}</span>
                                        </template>
                                        <template #noOptions>
                                            <span>{{__('translate.noResult')}}</span>
                                        </template>
                                    </multiselect>
                                    <InputError :message="form.errors.external_company_id" class="mt-2"/>
                                </div>
                            </div>
                        </div>

                        <!-- Lokalizacja -->
                        <div class="bg-white rounded-xl shadow-sm border border-gray-200 p-6 mb-6">
                            <div class="flex items-center gap-2 mb-6">
                                <img class="w-8 h-8" src="/images/icons/recruit/lokalizacja.svg" :alt="__('translate.altLocation')">
                                <h2 class="text-xl font-bold text-gray-900">{{ __('translate.locationLabel') }}</h2>
                            </div>

                            <div>
                                <InputLabel :value="__('translate.Country')"/>
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
                                    v-model="form.countryWork" :options="optionsCountry">
                                    <template #noResult>
                                        <span>{{__('translate.noOptions')}}</span>
                                    </template>
                                    <template #noOptions>
                                        <span>{{__('translate.noResult')}}</span>
                                    </template>
                                </multiselect>
                                <InputError :message="form.errors.countryWork" class="mt-2"/>
                            </div>

                            <!-- Mapbox Geocoder (Autocomplete) -->
                            <div v-if="form.countryWork" class="mt-6">
                                <div class="mb-4">
                                    <InputLabel :value="__('translate.searchAddress')" class="mb-2" />
                                    <div
                                        ref="geocoderContainer"
                                        class="mapbox-geocoder-container"
                                    ></div>
                                    <p class="text-xs text-gray-500 mt-2">
                                        {{ __('translate.searchAddressDescription') }}
                                    </p>
                                </div>

                                <!-- Mapa Mapbox -->
                                <div class="rounded-xl overflow-hidden border border-gray-200 mb-4" style="height: 400px;">
                                    <div ref="mapContainer" class="w-full h-full"></div>
                                </div>
                            </div>

                            <AddressFieldGroup class="mt-4" v-if="form.countryWork" :code="form.countryWork?.countryCode"
                                               v-model:street="form.streetWork"
                                               v-model:streetNumber="form.streetWorkNumber"
                                               v-model:postcode="form.postalWork"
                                               v-model:city="form.cityWork"
                            />
                            <InputError :message="form.errors.streetWork" class="mt-2"/>
                            <InputError :message="form.errors.streetWorkNumber" class="mt-2"/>
                            <InputError :message="form.errors.postalWork" class="mt-2"/>
                            <InputError :message="form.errors.cityWork" class="mt-2"/>
                        </div>

                        <!-- Wykształcenie -->
                        <div class="bg-white rounded-xl shadow-sm border border-gray-200 p-6 mb-6">
                            <div class="flex items-center gap-2 mb-6">
                                <h2 class="text-xl font-bold text-gray-900">{{ __('translate.education') }}</h2>
                            </div>
                            <div v-if="educations" class="grid grid-cols-1 md:grid-cols-2 gap-3">
                                <div v-for="education in educations" :key="education.id" class="flex items-center bg-gray-50 rounded-lg p-3">
                                    <input
                                        @change="educationSelect = education.name"
                                        class="border-gray-300 text-[#00a0e3] shadow-sm focus:ring-[#00a0e3] mr-3"
                                        type="radio" :id="'education-'+education.id" v-model="form.education"
                                        :value="education.id" />
                                    <label class="cursor-pointer flex-1 text-sm" :for="'education-'+education.id">{{education.name}}</label>
                                </div>
                            </div>
                            <InputError :message="form.errors.education" class="mt-2"/>
                        </div>

                        <!-- Przyciski nawigacji -->
                        <div class="flex justify-end mt-8">
                            <button
                                type="button"
                                @click="nextStep"
                                :disabled="isValidating"
                                class="px-8 py-3 bg-[#00a0e3] text-white font-bold rounded-lg hover:bg-blue-600 transition-all disabled:opacity-50 disabled:cursor-not-allowed flex items-center gap-2"
                            >
                                <svg v-if="isValidating" class="animate-spin h-5 w-5 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                    <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                                    <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                                </svg>
                                <span>{{ isValidating ? 'Sprawdzanie...' : __('translate.next') + ' →' }}</span>
                            </button>
                        </div>
                    </div>

                    <!-- KROK 2: Organizacja pracy i wynagrodzenie -->
                    <div v-show="currentStep === 2">
                        <!-- Rodzaj umowy -->
                        <div class="bg-white rounded-xl shadow-sm border border-gray-200 p-6 mb-6">
                            <div class="flex items-center gap-2 mb-6">
                                <h2 class="text-xl font-bold text-gray-900">{{ __('translate.contractType') }}</h2>
                            </div>
                            <div v-if="typesOfContract" class="grid grid-cols-1 md:grid-cols-3 gap-3">
                                <div v-for="typeOfContract in typesOfContract" :key="typeOfContract.id" class="flex items-center bg-gray-50 rounded-lg p-3">
                                    <input
                                        class="rounded border-gray-300 text-[#00a0e3] shadow-sm focus:ring-[#00a0e3] mr-3"
                                        @change="addToArray(typesOfContractSelect,typeOfContract.name)"
                                        type="checkbox" :id="'typeOfContract-'+typeOfContract.id" v-model="form.typeOfContract"
                                        :value="typeOfContract" />
                                    <label class="cursor-pointer flex-1 text-sm" :for="'typeOfContract-'+typeOfContract.id">{{typeOfContract.name}}</label>
                                </div>
                            </div>
                            <InputError :message="form.errors.typeOfContract" class="mt-2"/>
                        </div>

                        <!-- Wynagrodzenie -->
                        <div class="bg-white rounded-xl shadow-sm border border-gray-200 p-6 mb-6">
                            <div class="flex items-center gap-2 mb-6">
                                <h2 class="text-xl font-bold text-gray-900">{{ __('translate.salary') }}</h2>
                            </div>

                            <!-- Wynagrodzenie podstawowe -->
                            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-6">
                                <div>
                                    <InputLabel :value="__('translate.basicSalaryFrom')" />
                                    <TextInput
                                        id="basicSalaryFrom"
                                        v-model="form.basicSalaryFrom"
                                        class="mt-1 block w-full"
                                        type="number"
                                        step="0.1"
                                        :placeholder="__('translate.salaryFromPlaceholder')"
                                    />
                                    <InputError :message="form.errors.basicSalaryFrom" class="mt-2"/>
                                </div>
                                <div>
                                    <InputLabel :value="__('translate.basicSalaryTo')" />
                                    <TextInput
                                        id="basicSalaryTo"
                                        v-model="form.basicSalaryTo"
                                        class="mt-1 block w-full"
                                        type="number"
                                        step="0.1"
                                        :placeholder="__('translate.salaryToPlaceholder')"
                                    />
                                    <InputError :message="form.errors.basicSalaryTo" class="mt-2"/>
                                </div>
                                <div>
                                    <InputLabel :value="__('translate.currency')"/>
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
                                        v-model="form.currency" :options="optionsCurrency">
                                        <template #noResult>
                                            <span>{{__('translate.noOptions')}}</span>
                                        </template>
                                        <template #noOptions>
                                            <span>{{__('translate.noResult')}}</span>
                                        </template>
                                    </multiselect>
                                    <InputError :message="form.errors.currency" class="mt-2"/>
                                </div>
                            </div>

                            <!-- Tryb wypłaty -->
                            <div class="mb-6" v-if="payoutModes">
                                <InputLabel :value="__('translate.payoutModes')" class="mb-3" />
                                <div class="grid grid-cols-1 md:grid-cols-3 gap-3">
                                    <div v-for="payoutMode in payoutModes" :key="payoutMode.id" class="flex items-center bg-gray-50 rounded-lg p-3">
                                        <input
                                            class="border-gray-300 text-[#00a0e3] shadow-sm focus:ring-[#00a0e3] mr-3"
                                            @change="payoutModeSelect = payoutMode.name"
                                            type="radio" :id="'payoutMode-'+payoutMode.id" v-model="form.payoutMode"
                                            :value="payoutMode" />
                                        <label class="cursor-pointer flex-1 text-sm" :for="'payoutMode-'+payoutMode.id">{{payoutMode.name}}</label>
                                    </div>
                                </div>
                                <InputError :message="form.errors.payoutMode" class="mt-2"/>
                            </div>

                            <!-- Premia -->
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div>
                                    <InputLabel :value="__('translate.bonusSalaryFrom')" />
                                    <TextInput
                                        id="bonusSalaryFrom"
                                        v-model="form.bonusSalaryFrom"
                                        class="mt-1 block w-full"
                                        type="number"
                                        step="0.1"
                                        :placeholder="__('translate.bonusFromPlaceholder')"
                                    />
                                    <InputError :message="form.errors.bonusSalaryFrom" class="mt-2"/>
                                </div>
                                <div>
                                    <InputLabel :value="__('translate.bonusSalaryTo')" />
                                    <TextInput
                                        id="bonusSalaryTo"
                                        v-model="form.bonusSalaryTo"
                                        class="mt-1 block w-full"
                                        type="number"
                                        step="0.1"
                                        :placeholder="__('translate.bonusToPlaceholder')"
                                    />
                                    <InputError :message="form.errors.bonusSalaryTo" class="mt-2"/>
                                </div>
                            </div>
                        </div>

                        <!-- Dni pracy -->
                        <div class="bg-white rounded-xl shadow-sm border border-gray-200 p-6 mb-6" v-if="days">
                            <div class="flex items-center gap-2 mb-6">
                                <h2 class="text-xl font-bold text-gray-900">{{ __('translate.workDays') }}</h2>
                            </div>
                            <div class="grid grid-cols-2 md:grid-cols-7 gap-3">
                                <div v-for="day in days" :key="day.id" class="flex items-center bg-gray-50 rounded-lg p-3">
                                    <input
                                        @change="addToArray(daySelect,day.name)"
                                        class="rounded border-gray-300 text-[#00a0e3] shadow-sm focus:ring-[#00a0e3] mr-3"
                                        type="checkbox" :id="'day-'+day.id" v-model="form.days"
                                        :value="day" />
                                    <label class="cursor-pointer flex-1 text-sm" :for="'day-'+day.id">{{day.name}}</label>
                                </div>
                            </div>
                            <InputError :message="form.errors.days" class="mt-2"/>
                        </div>

                        <!-- Godziny pracy -->
                        <div class="bg-white rounded-xl shadow-sm border border-gray-200 p-6 mb-6">
                            <div class="flex items-center gap-2 mb-6">
                                <h2 class="text-xl font-bold text-gray-900">{{ __('translate.workHours') }}</h2>
                            </div>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div>
                                    <InputLabel :value="__('translate.hoursFrom')" />
                                    <TextInput
                                        type="time"
                                        id="hoursFrom"
                                        v-model="form.hoursFrom"
                                        class="mt-1 block w-full"
                                    />
                                    <InputError :message="form.errors.hoursFrom" class="mt-2"/>
                                </div>
                                <div>
                                    <InputLabel :value="__('translate.hoursTo')" />
                                    <TextInput
                                        type="time"
                                        id="hoursTo"
                                        v-model="form.hoursTo"
                                        class="mt-1 block w-full"
                                    />
                                    <InputError :message="form.errors.hoursTo" class="mt-2"/>
                                </div>
                            </div>
                        </div>

                        <!-- System wynagrodzeń -->
                        <div class="bg-white rounded-xl shadow-sm border border-gray-200 p-6 mb-6" v-if="paySystems">
                            <div class="flex items-center gap-2 mb-6">
                                <h2 class="text-xl font-bold text-gray-900">{{ __('translate.paySystem') }}</h2>
                            </div>
                            <div class="grid grid-cols-1 md:grid-cols-3 gap-3">
                                <div v-for="paySystem in paySystems" :key="paySystem.id" class="flex items-center bg-gray-50 rounded-lg p-3">
                                    <input
                                        class="rounded border-gray-300 text-[#00a0e3] shadow-sm focus:ring-[#00a0e3] mr-3"
                                        @change="addToArray(paySystemSelect,paySystem.name)"
                                        type="checkbox" :id="'paySystem-'+paySystem.id" v-model="form.paySystem"
                                        :value="paySystem" />
                                    <label class="cursor-pointer flex-1 text-sm" :for="'paySystem-'+paySystem.id">{{paySystem.name}}</label>
                                </div>
                            </div>
                            <InputError :message="form.errors.paySystem" class="mt-2"/>
                        </div>

                        <!-- Praca nocna i praca zmianowa -->
                        <div class="bg-white rounded-xl shadow-sm border border-gray-200 p-6 mb-6">
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <!-- Praca nocna -->
                                <div class="bg-gray-50 rounded-lg p-4">
                                    <div class="flex items-center justify-between">
                                        <div>
                                            <InputLabel :value="__('translate.workNight')" class="mb-1 font-semibold" />
                                            <p class="text-xs text-gray-500">{{ __('translate.workNightDescription') }}</p>
                                        </div>
                                        <button
                                            type="button"
                                            @click="form.workNight = form.workNight === 1 ? 2 : 1"
                                            :class="[
                                                'relative inline-flex h-7 w-12 items-center rounded-full transition-colors focus:outline-none focus:ring-2 focus:ring-[#00a0e3] focus:ring-offset-2',
                                                form.workNight === 1 ? 'bg-[#00a0e3]' : 'bg-gray-300'
                                            ]"
                                            :title="form.workNight === 1 ? __('translate.yes') : __('translate.no')"
                                        >
                                            <span
                                                :class="[
                                                    'inline-block h-5 w-5 transform rounded-full bg-white transition-transform',
                                                    form.workNight === 1 ? 'translate-x-6' : 'translate-x-1'
                                                ]"
                                            />
                                        </button>
                                    </div>
                                    <InputError :message="form.errors.workNight" class="mt-2"/>
                                </div>

                                <!-- Praca zmianowa -->
                                <div class="bg-gray-50 rounded-lg p-4">
                                    <div class="flex items-center justify-between">
                                        <div>
                                            <InputLabel :value="__('translate.shiftWorks')" class="mb-1 font-semibold" />
                                            <p class="text-xs text-gray-500">{{ __('translate.shiftWorksDescription') }}</p>
                                        </div>
                                        <button
                                            type="button"
                                            @click="form.shiftWork = form.shiftWork === 1 ? 2 : 1"
                                            :class="[
                                                'relative inline-flex h-7 w-12 items-center rounded-full transition-colors focus:outline-none focus:ring-2 focus:ring-[#00a0e3] focus:ring-offset-2',
                                                form.shiftWork === 1 ? 'bg-[#00a0e3]' : 'bg-gray-300'
                                            ]"
                                            :title="form.shiftWork === 1 ? __('translate.yes') : __('translate.no')"
                                        >
                                            <span
                                                :class="[
                                                    'inline-block h-5 w-5 transform rounded-full bg-white transition-transform',
                                                    form.shiftWork === 1 ? 'translate-x-6' : 'translate-x-1'
                                                ]"
                                            />
                                        </button>
                                    </div>
                                    <InputError :message="form.errors.shiftWork" class="mt-2"/>
                                </div>
                            </div>
                        </div>

                        <!-- Przyciski nawigacji -->
                        <div class="flex justify-between mt-8">
                            <button
                                type="button"
                                @click="prevStep"
                                :disabled="isValidating"
                                class="px-8 py-3 bg-gray-300 text-gray-700 font-bold rounded-lg hover:bg-gray-400 transition-all disabled:opacity-50 disabled:cursor-not-allowed"
                            >
                                ← {{ __('translate.previous') }}
                            </button>
                            <button
                                type="button"
                                @click="nextStep"
                                :disabled="isValidating"
                                class="px-8 py-3 bg-[#00a0e3] text-white font-bold rounded-lg hover:bg-blue-600 transition-all disabled:opacity-50 disabled:cursor-not-allowed flex items-center gap-2"
                            >
                                <svg v-if="isValidating" class="animate-spin h-5 w-5 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                    <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                                    <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                                </svg>
                                <span>{{ isValidating ? __('translate.validating') : __('translate.next') + ' →' }}</span>
                            </button>
                        </div>
                    </div>

                    <!-- KROK 3: Szczegóły i podsumowanie -->
                    <div v-show="currentStep === 3">
                        <!-- Tryb pracy i wymiar -->
                        <div class="bg-white rounded-xl shadow-sm border border-gray-200 p-6 mb-6">
                            <div class="flex items-center gap-2 mb-6">
                                <img class="w-8 h-8" src="/images/icons/recruit/organizacja_pracy.svg" :alt="__('translate.altWorkOrganization')">
                                <h2 class="text-xl font-bold text-gray-900">{{ __('translate.workOrganization') }}</h2>
                            </div>

                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div v-if="workingModes">
                                    <InputLabel for="workingMode" :value="__('translate.workingMode')" class="mb-3" />
                                    <div class="space-y-2">
                                        <div v-for="workingMode in workingModes" :key="workingMode.value" class="flex items-center bg-gray-50 rounded-lg p-3">
                                            <input
                                                class="rounded border-gray-300 text-[#00a0e3] shadow-sm focus:ring-[#00a0e3] mr-3"
                                                type="checkbox" :id="'workingMode-'+workingMode.value" v-model="form.workingMode"
                                                @change="addToArray(workingModeSelect,workingMode)"
                                                :value="workingMode" />
                                            <label class="cursor-pointer flex-1 text-sm" :for="'workingMode-'+workingMode.value">{{workingMode.name}}</label>
                                        </div>
                                    </div>
                                    <InputError :message="form.errors.workingMode" class="mt-2"/>
                                </div>
                                <div v-if="workLoads">
                                    <InputLabel :value="__('translate.workLoads')" class="mb-3" />
                                    <div class="space-y-2">
                                        <div v-for="workLoad in workLoads" :key="workLoad.value" class="flex items-center bg-gray-50 rounded-lg p-3">
                                            <input
                                                class="border-gray-300 text-[#00a0e3] shadow-sm focus:ring-[#00a0e3] mr-3"
                                                @change="workLoadSelect = workLoad.name"
                                                type="radio" :id="'workLoad-'+workLoad.value" v-model="form.workLoad"
                                                :value="workLoad" />
                                            <label class="cursor-pointer flex-1 text-sm" :for="'workLoad-'+workLoad.value">{{workLoad.name}}</label>
                                        </div>
                                    </div>
                                    <InputError :message="form.errors.workLoad" class="mt-2"/>
                                </div>
                            </div>

                            <div class="mt-6">
                                <InputLabel :value="__('translate.workingPlace')"/>
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
                                    v-model="form.workingPlace" :options="optionsWorkingPlace">
                                    <template #noResult>
                                        <span>{{__('translate.noOptions')}}</span>
                                    </template>
                                    <template #noOptions>
                                        <span>{{__('translate.noResult')}}</span>
                                    </template>
                                </multiselect>
                                <InputError :message="form.errors.workingPlace" class="mt-2"/>
                            </div>
                        </div>

                        <!-- Oferujemy - graficzne karty z filtrowaniem -->
                        <div class="bg-white rounded-xl shadow-sm border border-gray-200 p-6 mb-6" v-if="offers">
                            <div class="flex items-center gap-2 mb-6">
                                <img class="w-8 h-8" src="/images/icons/recruit/oferujemy.svg" :alt="__('translate.altWeOffer')">
                                <h2 class="text-xl font-bold text-gray-900">{{ __('translate.offer') }}</h2>
                            </div>

                            <!-- Pole wyszukiwania -->
                            <div class="relative mb-6">
                                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                    <svg class="h-5 w-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                                    </svg>
                                </div>
                                <input
                                    v-model="offerFilter"
                                    type="text"
                                    class="block w-full pl-10 pr-3 py-2 border border-gray-300 rounded-lg focus:ring-[#00a0e3] focus:border-[#00a0e3] sm:text-sm"
                                    :placeholder="__('translate.searchInBenefits')"
                                />
                                <button
                                    v-if="offerFilter"
                                    @click="offerFilter = ''"
                                    type="button"
                                    class="absolute inset-y-0 right-0 pr-3 flex items-center"
                                >
                                    <svg class="h-5 w-5 text-gray-400 hover:text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                                    </svg>
                                </button>
                            </div>

                            <!-- Grid benefitów -->
                            <div v-if="filteredOffers.length > 0" class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
                                <div
                                    v-for="offer in filteredOffers"
                                    :key="offer.id"
                                    @click="addToArray(offerSelect,offer.name); if(!form.offer.some(item => item.id === offer.id)) { form.offer.push(offer) } else { form.offer = form.offer.filter(item => item.id !== offer.id) }"
                                    class="border-2 rounded-xl p-4 cursor-pointer transition-all hover:shadow-lg"
                                    :class="form.offer.some(item => item.id === offer.id) ? 'border-[#00a0e3] bg-blue-50' : 'border-gray-200 hover:border-[#00a0e3]'"
                                >
                                    <div class="flex flex-col items-center text-center">
                                        <div
                                            class="w-16 h-16 rounded-full flex items-center justify-center mb-3 transition-all"
                                            :class="form.offer.some(item => item.id === offer.id) ? 'bg-[#00a0e3] text-white' : 'bg-gray-100 text-gray-600'"
                                        >
                                            <!-- Ikony dla różnych ofert -->
                                            <img v-if="offer.id == 2" src="/images/icons/offers/długoterminowa_wspolpraca.svg" alt="długoterminowa_wspolpraca">
                                            <img v-else-if="offer.id == 1" src="/images/icons/offers/umowa_o_prace.svg" alt="umowa_o_prace">
                                            <img v-else-if="offer.id == 3" src="/images/icons/offers/brak_okresu_probnego.svg" alt="brak_okresu_probnego">
                                            <img v-else-if="offer.id == 4" src="/images/icons/offers/system_premiowy.svg" alt="system_premiowy">
                                            <img v-else-if="offer.id == 5" src="/images/icons/offers/szkolenia.svg" alt="szkolenia">
                                            <img v-else-if="offer.id == 6" src="/images/icons/offers/możliwosc_awansu_zawodowego.svg" alt="możliwosc_awansu_zawodowego">
                                            <img v-else-if="offer.id == 7" src="/images/icons/offers/wynagrodzenie.svg" alt="wynagrodzenie">
                                            <img v-else-if="offer.id == 8" src="/images/icons/offers/praca_zdalna.svg" alt="praca_zdalna">
                                            <img v-else-if="offer.id == 9" src="/images/icons/offers/prywatna_opieka_medyczna.svg" alt="prywatna_opieka_medyczna">
                                            <img v-else-if="offer.id == 10" src="/images/icons/offers/karta_sportowa.svg" alt="karta_sportowa">
                                            <img v-else-if="offer.id == 11" src="/images/icons/offers/dofinansowanie_do_posilkow.svg" alt="dofinansowanie_do_posilkow">
                                            <img v-else-if="offer.id == 12" src="/images/icons/offers/biuro_w_centrum_miasta.svg" alt="biuro_w_centrum_miasta">
                                            <img v-else-if="offer.id == 13" src="/images/icons/offers/parking_dla_pracownikow.svg" alt="parking_dla_pracownikow">
                                            <img v-else-if="offer.id == 14" src="/images/icons/offers/samochod_sluzbowy.svg" alt="samochod_sluzbowy">
                                            <img v-else-if="offer.id == 15" src="/images/icons/offers/dodatkowe_ubezpieczenie.svg" alt="dodatkowe_ubezpieczenie">
                                            <img v-else-if="offer.id == 16" src="/images/icons/offers/znizka_na_zakupy.svg" alt="znizka_na_zakupy">
                                            <img v-else-if="offer.id == 17" src="/images/icons/offers/wydarzenia_integracyjne.svg" alt="wydarzenia_integracyjne">
                                            <img v-else-if="offer.id == 18" src="/images/icons/offers/kawa_herbata.svg" alt="kawa_herbata">
                                            <img v-else-if="offer.id == 19" src="/images/icons/offers/owoce.svg" alt="owoce">
                                            <img v-else-if="offer.id == 20" src="/images/icons/offers/brak_dres_codeu.svg" alt="brak_dres_codeu">
                                            <img v-else-if="offer.id == 21" src="/images/icons/offers/nagrody_pracownicze.svg" alt="nagrody_pracownicze">
                                            <img v-else-if="offer.id == 22" src="/images/icons/offers/dofinansowanie_do_transportu.svg" alt="dofinansowanie_do_transportu">
                                        </div>
                                        <h3 class="font-semibold text-sm mb-1">{{ offer.name }}</h3>
                                        <div
                                            class="w-5 h-5 rounded border-2 mt-2 flex items-center justify-center transition-all"
                                            :class="form.offer.some(item => item.id === offer.id) ? 'border-[#00a0e3] bg-[#00a0e3]' : 'border-gray-300'"
                                        >
                                            <svg v-if="form.offer.some(item => item.id === offer.id)" class="w-3 h-3 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div v-else class="text-center py-12 text-gray-500">
                                <svg class="mx-auto h-16 w-16 text-gray-400 mb-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                                </svg>
                                <p class="text-sm font-medium">{{ __('translate.noBenefitsFound') }}</p>
                                <p class="text-xs text-gray-400 mt-1">{{ __('translate.tryOtherKeywords') }}</p>
                            </div>
                            <InputError :message="form.errors.offer" class="mt-2"/>
                        </div>

                        <!-- Oczekujemy i Mile widziane - 2 wiersze, 4 kolumny z filtrowaniem -->
                        <div class="bg-white rounded-xl shadow-sm border border-gray-200 p-6 mb-6">
                            <!-- Oczekujemy -->
                            <div v-if="waits" class="mb-8">
                                <div class="flex items-center gap-2 mb-4">
                                    <img class="w-6 h-6" src="/images/icons/recruit/oczekujemy.svg" :alt="__('translate.altWeExpect')">
                                    <h3 class="text-lg font-bold text-gray-900">{{ __('translate.wait') }}</h3>
                                </div>

                                <!-- Pole wyszukiwania -->
                                <div class="relative mb-4">
                                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                        <svg class="h-5 w-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                                        </svg>
                                    </div>
                                    <input
                                        v-model="waitFilter"
                                        type="text"
                                        class="block w-full pl-10 pr-3 py-2 border border-gray-300 rounded-lg focus:ring-[#00a0e3] focus:border-[#00a0e3] sm:text-sm"
                                        :placeholder="'Szukaj w wymaganiach...'"
                                    />
                                    <button
                                        v-if="waitFilter"
                                        @click="waitFilter = ''"
                                        type="button"
                                        class="absolute inset-y-0 right-0 pr-3 flex items-center"
                                    >
                                        <svg class="h-5 w-5 text-gray-400 hover:text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                                        </svg>
                                    </button>
                                </div>

                                <!-- Grid 4 kolumny -->
                                <div v-if="filteredWaits.length > 0" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-3">
                                    <div v-for="wait in filteredWaits" :key="wait.id" class="flex items-center bg-gray-50 rounded-lg p-3 hover:bg-gray-100 transition-colors">
                                        <input
                                            @change="addToArray(waitSelect,wait.name)"
                                            class="rounded border-gray-300 text-[#00a0e3] shadow-sm focus:ring-[#00a0e3] mr-3 flex-shrink-0"
                                            type="checkbox" :id="'wait'+wait.id" v-model="form.wait"
                                            :value="wait" />
                                        <label class="cursor-pointer flex-1 text-sm" :for="'wait'+wait.id">{{wait.name}}</label>
                                    </div>
                                </div>
                                <div v-else class="text-center py-8 text-gray-500">
                                    <svg class="mx-auto h-12 w-12 text-gray-400 mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.172 16.172a4 4 0 015.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                    <p class="text-sm">Nie znaleziono wymagań pasujących do wyszukiwania</p>
                                </div>
                                <InputError :message="form.errors.wait" class="mt-2"/>
                            </div>

                            <!-- Mile widziane -->
                            <div v-if="welcomes">
                                <div class="flex items-center gap-2 mb-4">
                                    <img class="w-6 h-6" src="/images/icons/recruit/mile_widziane.svg" :alt="__('translate.altWelcomed')">
                                    <h3 class="text-lg font-bold text-gray-900">{{ __('translate.welcome') }}</h3>
                                </div>

                                <!-- Pole wyszukiwania -->
                                <div class="relative mb-4">
                                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                        <svg class="h-5 w-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                                        </svg>
                                    </div>
                                    <input
                                        v-model="welcomeFilter"
                                        type="text"
                                        class="block w-full pl-10 pr-3 py-2 border border-gray-300 rounded-lg focus:ring-[#00a0e3] focus:border-[#00a0e3] sm:text-sm"
                                        :placeholder="'Szukaj w preferencjach...'"
                                    />
                                    <button
                                        v-if="welcomeFilter"
                                        @click="welcomeFilter = ''"
                                        type="button"
                                        class="absolute inset-y-0 right-0 pr-3 flex items-center"
                                    >
                                        <svg class="h-5 w-5 text-gray-400 hover:text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                                        </svg>
                                    </button>
                                </div>

                                <!-- Grid 4 kolumny -->
                                <div v-if="filteredWelcomes.length > 0" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-3">
                                    <div v-for="welcome in filteredWelcomes" :key="welcome.id" class="flex items-center bg-gray-50 rounded-lg p-3 hover:bg-gray-100 transition-colors">
                                        <input
                                            @change="addToArray(welcomeSelect,welcome.name)"
                                            class="rounded border-gray-300 text-[#00a0e3] shadow-sm focus:ring-[#00a0e3] mr-3 flex-shrink-0"
                                            type="checkbox" :id="'welcome'+welcome.id" v-model="form.welcome"
                                            :value="welcome" />
                                        <label class="cursor-pointer flex-1 text-sm" :for="'welcome'+welcome.id">{{welcome.name}}</label>
                                    </div>
                                </div>
                                <div v-else class="text-center py-8 text-gray-500">
                                    <svg class="mx-auto h-12 w-12 text-gray-400 mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.172 16.172a4 4 0 015.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                    <p class="text-sm">Nie znaleziono preferencji pasujących do wyszukiwania</p>
                                </div>
                                <InputError :message="form.errors.welcome" class="mt-2"/>
                            </div>
                        </div>

                        <!-- Doświadczenie -->
                        <div class="bg-white rounded-xl shadow-sm border border-gray-200 p-6 mb-6" v-if="experiences && experiences.length > 0">
                            <div class="flex items-center gap-2 mb-4">
                                <h3 class="text-lg font-bold text-gray-900">{{ __('translate.experience') }}</h3>
                            </div>
                            <div class="bg-gray-50 rounded-lg p-4">
                                <div class="flex items-center justify-between">
                                    <div class="flex-1">
                                        <InputLabel :value="__('translate.experience')" class="mb-1 font-semibold" />
                                        <p class="text-xs text-gray-500">Czy doświadczenie jest wymagane?</p>
                                        <p v-if="isExperienceEnabled" class="text-sm text-[#00a0e3] font-medium mt-2">
                                            {{ form.experience.name }}
                                        </p>
                                    </div>
                                    <button
                                        type="button"
                                        @click="toggleExperience"
                                        :class="[
                                            'relative inline-flex h-7 w-12 items-center rounded-full transition-colors focus:outline-none focus:ring-2 focus:ring-[#00a0e3] focus:ring-offset-2',
                                            isExperienceEnabled ? 'bg-[#00a0e3]' : 'bg-gray-300'
                                        ]"
                                    >
                                        <span
                                            :class="[
                                                'inline-block h-5 w-5 transform rounded-full bg-white transition-transform',
                                                isExperienceEnabled ? 'translate-x-6' : 'translate-x-1'
                                            ]"
                                        />
                                    </button>
                                </div>
                                <InputError :message="form.errors.experience" class="mt-2"/>
                            </div>
                        </div>

                        <!-- Wykształcenie -->
                        <div class="bg-white rounded-xl shadow-sm border border-gray-200 p-6 mb-6">
                            <div class="flex items-center gap-2 mb-6">
                                <h2 class="text-xl font-bold text-gray-900">{{ __('translate.education') }}</h2>
                            </div>
                            <div v-if="educations">
                                <div class="space-y-2">
                                    <div v-for="education in educations" :key="education.id" class="flex items-center bg-gray-50 rounded-lg p-3">
                                        <input
                                            @change="educationSelect = education.name"
                                            class="border-gray-300 text-[#00a0e3] shadow-sm focus:ring-[#00a0e3] mr-3"
                                            type="radio" :id="'education-'+education.id" v-model="form.education"
                                            :value="education.id" />
                                        <label class="cursor-pointer flex-1 text-sm" :for="'education-'+education.id">{{education.name}}</label>
                                    </div>
                                </div>
                                <InputError :message="form.errors.education" class="mt-2"/>
                            </div>
                        </div>

                        <!-- Przyciski nawigacji i submit -->
                        <div class="flex justify-between mt-8">
                            <button
                                type="button"
                                @click="prevStep"
                                class="px-8 py-3 bg-gray-300 text-gray-700 font-bold rounded-lg hover:bg-gray-400 transition-all"
                            >
                                ← {{ __('translate.previous') }}
                            </button>
                            <PrimaryButton
                                type="submit"
                                :class="{ 'opacity-25': form.processing }"
                                :disabled="form.processing"
                                class="px-8 py-3 bg-[#00a0e3] hover:bg-blue-600"
                            >
                                <spinner-action :process="form.processing">{{__('translate.update')}}</spinner-action>
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
        width: 100%;
        max-width: none;
        box-shadow: none;
        border: 1px solid #d1d5db;
        border-radius: 0.5rem;
        min-height: 3rem;

        .mapboxgl-ctrl-geocoder--input {
            padding: 0.75rem 3rem 0.75rem 2.75rem !important;
            font-size: 0.875rem;
            height: 3rem !important;
            line-height: 1.5rem !important;
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
        border-color: #00a0e3 !important;
        box-shadow: 0 0 0 3px rgba(0, 160, 227, 0.1) !important;
    }

    .mapboxgl-ctrl-geocoder--suggestion {
        padding: 0.75rem 1rem;

        &:hover {
            background-color: #f3f4f6;
        }
    }

    .suggestions {
        border-radius: 0.5rem;
        box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
        margin-top: 0.25rem;
        border: 1px solid #e5e7eb;
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
