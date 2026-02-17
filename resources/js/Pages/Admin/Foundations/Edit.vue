<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import { useForm, usePage, Link } from '@inertiajs/vue3';
import InputLabel from "@/Components/InputLabel.vue";
import InputError from "@/Components/InputError.vue";
import PrimaryButton from "@/Components/PrimaryButton.vue";
import Checkbox from "@/Components/Checkbox.vue";
import SpinnerAction from "@/Components/SpinnerAction.vue";
import {ref, watch, onMounted, computed} from "vue";
import Multiselect from "vue-multiselect";
import axios from "axios";
import __ from "@/lang.js";
import Tiptap from "@/Components/TipTap.vue";

const props = defineProps({
    categories: Array,
    foundation: Object,
    countries: Array,
});

// ===============================
// 🔵 MAPBOX AUTOCOMPLETE
// ===============================
const MAPBOX_TOKEN = usePage().props.mapboxToken;
const copied = ref(false);

const registrationLink = computed(() =>
    `${usePage().props.pageUrl}/register?foundation=${props.foundation.registration_code}`
);
const copyLink = async () => {
    try {
        await navigator.clipboard.writeText(registrationLink.value);
        copied.value = true;

        setTimeout(() => {
            copied.value = false;
        }, 2000);
    } catch (e) {
        console.error('Nie udało się skopiować linku', e);
    }
};
const addressQuery = ref(
    [
        props.foundation.address_street,
        props.foundation.address_postcode,
        props.foundation.address_city
    ]
        .filter(Boolean)
        .join(", ")
);
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
        const match = group.elements.find(
            el => el.countryCode?.toLowerCase() === isoCode?.toLowerCase()
        );
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

    const iso = countryObj?.short_code?.toUpperCase();

    const found = findCountryInOptions(iso);

    form.address_country = found
        ? found
        : {
            name: countryObj?.text || null,
            value: null,
            countryCode: iso,
            allTranslations: {
                [currentLocale]: countryObj?.text || null
            }
        };

    form.country = iso?.toLowerCase() ?? null;
    form.address_postcode = postcodeObj ? postcodeObj.text : "";

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

    form.latitude = item.center[1];
    form.longitude = item.center[0];
};
// ===============================
// 🔵 FORMULARZ
// ===============================
let serverMessage = ref(null);

const optionsCategory = ref(props.categories);
const optionsSubCategory = ref([]);

const form = useForm({
    _method: 'PUT',
    name: props.foundation.name ?? "",
    www: props.foundation.www ?? "",
    facebook_url: props.foundation.facebook_url ?? "",
    instagram_url: props.foundation.instagram_url ?? "",
    linkedin_url: props.foundation.linkedin_url ?? "",
    x_url: props.foundation.x_url ?? "",
    tiktok_url: props.foundation.tiktok_url ?? "",
    phone: props.foundation.phone ?? "",
    email: props.foundation.email ?? "",
    description: props.foundation.description ?? "",
    registration_code: props.foundation.registration_code ?? "",

    address_street: props.foundation.address_street ?? "",
    address_city: props.foundation.address_city ?? "",
    address_postcode: props.foundation.address_postcode ?? "", // ⬅️ nowe pole

    address_country: null,
    country: props.foundation.country ?? "",

    latitude: props.foundation.latitude ?? null,
    longitude: props.foundation.longitude ?? null,

    category_id: props.foundation.category_id ?? null,
    subcategory_id: props.foundation.subcategory_id ?? null,

    active: !!props.foundation.active,

    photo: props.foundation.photo
        ? [{
            source: props.foundation.photo,
            options: {
                type: 'local',
                metadata: { poster: props.foundation.photo }
            }
        }]
        : [],

    banner: props.foundation.banner
        ? [{
            source: props.foundation.banner,
            options: {
                type: 'local',
                metadata: { poster: props.foundation.banner }
            }
        }]
        : [],

    iban: props.foundation.iban ?? "",
    swift: props.foundation.swift ?? "",
    krs: props.foundation.krs ?? "",

    year_of_foundation: props.foundation.year_of_foundation ?? "",
    worker_count: props.foundation.worker_count ?? "",
    benefit_organization: props.foundation.benefit_organization ?? false,
});

// ===============================
// Preselect danych z bazy
// ===============================
onMounted(async () => {
    // adres w polu mapbox
    addressQuery.value = [
        props.foundation.address_street,
        props.foundation.address_city,
        props.foundation.address_country
    ].filter(Boolean).join(", ");


    // 🔥 Spróbuj dopasować kraj do multiselecta
    const iso = props.foundation.country?.toUpperCase();

    const foundCountry = findCountryInOptions(iso);

    form.address_country = foundCountry
        ? foundCountry
        : {
            name: props.foundation.address_country,
            value: null,
            countryCode: iso,
            allTranslations: { [usePage().props.locale]: props.foundation.address_country }
        };


    // ustawienie kategorii

    // Ładowanie podkategorii dla wybranej kategorii
    if (form.category_id) {
        const res = await axios.get(route("admin.getChildsCategory", form.category_id.value));
        optionsSubCategory.value = res.data;
        // Preselekcja podkategorii
        form.subcategory_id = props.foundation.subcategory_id ?? null;
    }

});

// ===============================
// Watcher podkategorii
// ===============================
watch(() => form.category_id, async (value) => {
    if (value?.value) {
        const res = await axios.get(route("admin.getChildsCategory", value.value));
        optionsSubCategory.value = res.data;
        form.subcategory_id = null;
    }
});

// ===============================
// File remove
// ===============================
const removeFile = async (source, load) => {
    await axios.post(route('temporary.delete.poster'), { source });
    form.photo = []; // usuń stare referencje pliku
    load();
    // form.photo = [];
};
const removeFileBaner = async (source, load) => {
    await axios.post(route('temporary.delete.poster'), { source });
    form.banner = []; // usuń stare referencje pliku
    load();
    // form.photo = [];
};

// ===============================
// Submit
// ===============================
const submit = () => {
    form.post(route("admin.foundations.update", props.foundation.id), {
        preserveScroll: true,
    });
};
</script>

<template>
    <AppLayout :title="__('translate.editFoundation')">
        <template #header>
            <div class="flex justify-between items-center">
                <h2 class="font-semibold text-xl text-gray-800">{{ __('translate.editFoundation') }}</h2>
                <Link :href="route('admin.foundations.index')" class="text-gray-600">{{ __('translate.back') }}</Link>
            </div>
        </template>

        <div class="py-10 max-w-4xl mx-auto">
            <form @submit.prevent="submit" class="bg-white shadow-xl sm:rounded-lg p-6 space-y-6">

                <!-- NAZWA -->
                <div>
                    <InputLabel :value="__('translate.foundationName')" />
                    <input v-model="form.name" class="w-full rounded border-gray-300" type="text">
                    <InputError :message="form.errors.name" />
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <!-- KATEGORIA + PODKATEGORIA -->
                    <div>
                        <InputLabel :value="__('translate.categoryI')" />
                        <multiselect
                            track-by="value"
                            label="name"
                            v-model="form.category_id"
                            :options="optionsCategory"
                            :placeholder="__('translate.selectCategory')"
                        />
                        <InputError :message="form.errors.category_id" />
                    </div>
                    <div>
                        <InputLabel :value="__('translate.subcategoryI')" />
                        <multiselect
                            :disabled="!form.category_id"
                            track-by="value"
                            label="name"
                            v-model="form.subcategory_id"
                            :options="optionsSubCategory"
                            :placeholder="__('translate.selectSubcategory')"
                        />
                        <InputError :message="form.errors.subcategory_id" />
                    </div>
                </div>

                <!-- IBAN, SWIFT, KRS w jednej linii -->
                <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                    <!-- IBAN -->
                    <div>
                        <InputLabel value="IBAN" />
                        <input v-model="form.iban" class="w-full rounded border-gray-300" type="text">
                        <InputError :message="form.errors.iban" />
                    </div>
                    <!-- SWIFT -->
                    <div>
                        <InputLabel value="SWIFT" />
                        <input v-model="form.swift" class="w-full rounded border-gray-300" type="text">
                        <InputError :message="form.errors.swift" />
                    </div>

                    <!-- KRS -->
                    <div>
                        <InputLabel value="KRS" />
                        <input v-model="form.krs" class="w-full rounded border-gray-300" type="text">
                        <InputError :message="form.errors.krs" />
                    </div>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                    <div>
                        <InputLabel :value="__('translate.year_of_foundation')" />
                        <input v-model="form.year_of_foundation" type="number" class="w-full rounded border-gray-300" placeholder="np. 1999">
                        <InputError :message="form.errors.year_of_foundation" />
                    </div>
                    <div>
                        <InputLabel :value="__('translate.count_workers')" />
                        <input v-model="form.worker_count" type="number" class="w-full rounded border-gray-300" placeholder="np. 25">
                        <InputError :message="form.errors.worker_count" />
                    </div>
                    <div class="flex items-end">
                        <label class="flex items-center" for="benefit_organization">
                            <Checkbox id="benefit_organization" v-model:checked="form.benefit_organization" class="border-gray-300 text-blue-work shadow-sm focus:ring-blue-work mr-2" />
                            <span class="ml-2 text-gray-700">{{ __('translate.publicBenefitOrg') }}</span>
                        </label>
                        <InputError :message="form.errors.benefit_organization" />
                    </div>
                </div>

                <!-- ADRES Z MAPBOX AUTOCOMPLETE -->
                <div class="relative">
                    <InputLabel :value="__('translate.addressAutocomplete')" />

                    <input
                        class="w-full rounded border-gray-300"
                        type="text"
                        v-model="addressQuery"
                        @input="fetchSuggestions"
                        :placeholder="__('translate.addressExample')"
                    />

                    <ul
                        v-if="suggestions.length"
                        class="absolute bg-white border rounded w-full mt-1 z-50 shadow max-h-60 overflow-auto"
                    >
                        <li
                            v-for="s in suggestions"
                            :key="s.id"
                            class="px-3 py-2 hover:bg-gray-100 cursor-pointer"
                            @click="selectSuggestion(s)"
                        >
                            {{ s.place_name }}
                        </li>
                    </ul>

                    <InputError :message="form.errors.address_street" />
                </div>

                <!-- POZOSTAŁE POLA ADRESOWE -->
                <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                    <div>
                        <InputLabel :value="__('translate.Street')" />
                        <input v-model="form.address_street" class="w-full rounded border-gray-300">
                        <InputError :message="form.errors.address_street" />
                    </div>
                    <div>
                        <InputLabel :value="__('translate.City')" />
                        <input v-model="form.address_city" class="w-full rounded border-gray-300">
                        <InputError :message="form.errors.address_city" />
                    </div>
                    <div>
                        <InputLabel :value="__('translate.Country')" />

                        <multiselect
                            v-model="form.address_country"
                            :options="props.countries"
                            group-values="elements"
                            group-label="group"
                            :group-select="false"
                            track-by="value"
                            label="name"
                            :selectLabel="__('translate.selectLabel')"
                            :selectGroupLabel="__('translate.selectGroupLabel')"
                            :selectedLabel="__('translate.selectedLabel')"
                            :deselectLabel="__('translate.deselectLabel')"
                            :placeholder="__('translate.placeholderCountry')"
                        >
                            <template #noResult>
                                <span>{{ __('translate.noOptions') }}</span>
                            </template>
                        </multiselect>
                        <InputError :message="form.errors.address_country" class="mt-2"/>
                    </div>
                    <div>
                        <InputLabel :value="__('translate.Postal')" />
                        <input v-model="form.address_postcode" class="w-full rounded border-gray-300">
                        <InputError :message="form.errors.address_postcode" />
                    </div>
                </div>

                <!-- WWW -->
                <div>
                    <InputLabel :value="__('translate.adressOptional')" />
                    <input v-model="form.www" class="w-full rounded border-gray-300" type="text">
                    <InputError :message="form.errors.www" />
                </div>

                <!-- SOCIAL MEDIA -->
                <div class="border-t pt-4">
                    <h3 class="text-lg font-semibold mb-4 text-gray-700">{{ __('translate.socialMedia') }}</h3>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <!-- Facebook -->
                        <div>
                            <InputLabel :value="__('translate.facebookOptional')" />
                            <input v-model="form.facebook_url" class="w-full rounded border-gray-300" type="text" placeholder="https://facebook.com/...">
                            <InputError :message="form.errors.facebook_url" />
                        </div>

                        <!-- Instagram -->
                        <div>
                            <InputLabel :value="__('translate.instagramOptional')" />
                            <input v-model="form.instagram_url" class="w-full rounded border-gray-300" type="text" placeholder="https://instagram.com/...">
                            <InputError :message="form.errors.instagram_url" />
                        </div>

                        <!-- LinkedIn -->
                        <div>
                            <InputLabel :value="__('translate.linkedinOptional')" />
                            <input v-model="form.linkedin_url" class="w-full rounded border-gray-300" type="text" placeholder="https://linkedin.com/...">
                            <InputError :message="form.errors.linkedin_url" />
                        </div>

                        <!-- X (Twitter) -->
                        <div>
                            <InputLabel :value="__('translate.xOptional')" />
                            <input v-model="form.x_url" class="w-full rounded border-gray-300" type="text" placeholder="https://x.com/...">
                            <InputError :message="form.errors.x_url" />
                        </div>

                        <!-- TikTok -->
                        <div>
                            <InputLabel :value="__('translate.tiktokOptional')" />
                            <input v-model="form.tiktok_url" class="w-full rounded border-gray-300" type="text" placeholder="https://tiktok.com/@...">
                            <InputError :message="form.errors.tiktok_url" />
                        </div>
                    </div>
                </div>

                <!-- REFERAL -->

                <div class="bg-blue-50 border border-blue-200 rounded p-4 mb-6">
                    <p class="text-sm font-semibold mb-2">{{__('translate.linkRegisterFoundation')}}</p>

                    <div class="flex gap-2">
                        <input
                            readonly
                            class="flex-1 rounded border-gray-300 bg-white text-sm"
                            :value="registrationLink"
                        />

                        <button
                            type="button"
                            @click="copyLink"
                            class="px-4 py-2 rounded bg-blue-work text-white text-sm hover:bg-blue-600 transition"
                        >
                            {{ copied ? __('translate.copied') : __('translate.copy') }}
                        </button>
                    </div>
                </div>

                <!-- DANE KONTAKTOWE -->
                <div>
                    <InputLabel :value="__('translate.phone')" />
                    <input v-model="form.phone" class="w-full rounded border-gray-300">
                    <InputError :message="form.errors.phone" />
                </div>

                <div>
                    <InputLabel :value="__('translate.email')" />
                    <input v-model="form.email" class="w-full rounded border-gray-300" type="email">
                    <InputError :message="form.errors.email" />
                </div>

                <!-- OPIS -->
                <div>
                    <InputLabel :value="__('translate.foundationDescription')" />
                    <Tiptap id="content" v-model="form.description" />
                    <InputError :message="form.errors.description" />
                </div>
                <!-- LOGO -->
                <div>
                    <InputLabel :value="__('translate.foundationLogo')" />
                    <file-pond
                        name="photo"
                        ref="uploadLogo"
                        :files="form.photo"
                        :allow-multiple="false"
                        :max-file-size="'4MB'"
                        credits="false"
                        :accepted-file-types="'image/png, image/jpeg, image/jpg, image/webp'"
                        imagePreviewMaxHeight="300"
                        filePosterHeight="300"
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
                                onerror: (res) => serverMessage = JSON.parse(res).error.photo[0]
                            },
                            revert: {
                                url: '/temporary/delete',
                                onload: (response) => {
                                    if (!response) return;
                                    form.photo = [];
                                }
                            },
                            remove: removeFile
                        }"
                    ></file-pond>


                    <InputError :message="form.errors.photo"/>
                </div>
                <!-- BANER -->
                <div>
                    <InputLabel :value="__('translate.foundationBanner')" />
                    <file-pond
                        name="banner"
                        ref="uploadBaner"
                        :files="form.banner"
                        :allow-multiple="false"
                        :max-file-size="'4MB'"
                        credits="false"
                        :accepted-file-types="'image/png, image/jpeg, image/jpg, image/webp'"
                        imagePreviewMaxHeight="150"
                        filePosterHeight="150"
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
                        :labelFileProcessingError="serverMessage2 ? serverMessage2 : __('translate.labelFileProcessingError')"
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
                                    console.log(response)
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
                            remove: removeFileBaner
                        }"
                    ></file-pond>

                    <InputError :message="form.errors.banner"/>
                </div>
                <!-- AKTYWNOŚĆ -->
                <div class="flex items-center">
                    <Checkbox v-model:checked="form.active" />
                    <span class="ml-2 text-gray-700">{{ __('translate.active') }}</span>
                </div>

                <!-- SUBMIT -->
                <div class="flex justify-end">
                    <PrimaryButton :disabled="form.processing">
                        <SpinnerAction :process="form.processing">{{ __('translate.update') }}</SpinnerAction>
                    </PrimaryButton>
                </div>

            </form>
        </div>
    </AppLayout>
</template>

<style src="vue-multiselect/dist/vue-multiselect.css"></style>
<style lang="scss">

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

