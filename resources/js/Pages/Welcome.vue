<script setup>
import FrontLayout from "@/Layouts/FrontLayout.vue";
import Multiselect from "vue-multiselect";
import InputError from "@/Components/InputError.vue";
import {router, useForm} from '@inertiajs/vue3';
import { ref, watch } from "vue";

const props = defineProps({
    page: Object,
    imageUrl: String,
    countries: Array,
    distanceOptions: Array,
});

const optionsCities = ref([]); // 👈 tutaj będą miasta
const optionsCategories = ref([]);
const isSearching = ref(false);

const form = useForm({
    country: null, // 👈 wybrany kraj
    city: null,    // 👈 wybrane miasto
    category: null,    // 👈 wybrane miasto
    distance: null,
    lat: null,
    lng: null,
});

// Watcher dla zmiany kraju
watch(() => form.country, async (newCountry) => {
    if (!newCountry || !newCountry.countryCode) {
        optionsCities.value = [];
        form.city = null;
        optionsCategories.value = [];
        form.category = null;
        form.distance = null;
        return;
    }

    try {
        const response = await fetch(route("cities.byCountry", newCountry.countryCode));
        const data = await response.json();

        // teraz przypisujemy prostą tablicę
        optionsCities.value = data;
        form.city = null; // reset wybranego miasta
    } catch (e) {
        console.error("Błąd ładowania miast:", e);
    }
    // --- pobieranie kategorii ---
    try {
        const responseCategories = await fetch(route("categories.byCountry", newCountry.countryCode));
        const categoriesData = await responseCategories.json();
        optionsCategories.value = categoriesData;
        form.category = null;
    } catch (e) {
        console.error("Błąd ładowania kategorii:", e);
    }

});

// Watcher dla zmiany miasta
watch(() => form.city, (newCity) => {
    if (!newCity) {
        form.distance = null;
        form.lat = null;
        form.lng = null;
    } else {
        form.lat = newCity.lat;
        form.lng = newCity.lng;
    }
});

// Funkcja submitu
const submit = () => {
    // Tworzymy query string
    const query = {
        country: form.country?.value ?? '',
        city: form.city?.value ?? '',
        category: form.category?.value ?? '',
        distance: (form.distance?.value !== undefined && form.distance?.value !== null) ? form.distance.value : '',
    };

    router.get(route('front.projects'), query, {
        onStart: () => {
            isSearching.value = true;
        },
        onFinish: () => {
            isSearching.value = false;
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
        :imageUrl="props.imageUrl"
        :url="route('front')"
        type="website"
    >
        <div class="relative min-h-screen pt-10 md:pt-32 pb-24">
            <!-- Background Graphic -->
            <div class="absolute inset-0 bg-no-repeat bg-cover bg-center opacity-[0.03]"></div>

            <div class="max-w-9xl mx-auto px-4 relative z-10">
                <!-- Search Form Card -->
                <div class="max-w-6xl mx-auto">
                    <div class="bg-white rounded-[3rem] shadow-2xl shadow-blue-900/5 border border-gray-100 p-6 md:p-12 relative group">
                        <form @submit.prevent="submit" class="relative z-10">
                            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8" :class="{'md:grid-cols-4': form.city}">
                                <!-- Select Country -->
                                <div class="space-y-3">
                                    <label class="text-[10px] font-black text-gray-400 uppercase tracking-widest ml-1">{{ __('translate.country') }}</label>
                                    <div class="custom-multiselect">
                                        <multiselect
                                            group-values="elements"
                                            group-label="group"
                                            :group-select="false"
                                            :selectLabel="''"
                                            :selectGroupLabel="''"
                                            :selectedLabel="''"
                                            :deselectLabel="''"
                                            track-by="value"
                                            label="name"
                                            :multiple="false"
                                            v-model="form.country"
                                            :options="props.countries"
                                            :placeholder="__('translate.placeholderCountry')"
                                        >
                                            <template #noResult>
                                                <span>{{__('translate.noOptions')}}</span>
                                            </template>
                                            <template #noOptions>
                                                <span>{{__('translate.noResult')}}</span>
                                            </template>
                                        </multiselect>
                                    </div>
                                    <InputError :message="form.errors.country" class="mt-2"/>
                                </div>

                                <!-- Select City -->
                                <div class="space-y-3">
                                    <label class="text-[10px] font-black text-gray-400 uppercase tracking-widest ml-1">{{ __('translate.City') }}</label>
                                    <div class="custom-multiselect">
                                        <multiselect
                                            :selectLabel="''"
                                            :selectGroupLabel="''"
                                            :selectedLabel="''"
                                            :deselectLabel="''"
                                            track-by="value"
                                            label="name"
                                            :disabled="!form.country"
                                            :multiple="false"
                                            v-model="form.city"
                                            :options="optionsCities"
                                            :placeholder="__('translate.placeholderCity')"
                                        >
                                            <template #noResult>
                                                <span>{{__('translate.noOptions')}}</span>
                                            </template>
                                            <template #noOptions>
                                                <span>{{__('translate.noResult')}}</span>
                                            </template>
                                        </multiselect>
                                    </div>
                                    <InputError :message="form.errors.city" class="mt-2"/>
                                </div>

                                <!-- Select Distance -->
                                <transition
                                    enter-active-class="transition-all duration-500 ease-out"
                                    enter-from-class="transform scale-90 opacity-0 -translate-x-4"
                                    enter-to-class="transform scale-100 opacity-100 translate-x-0"
                                    leave-active-class="transition-all duration-300 ease-in"
                                    leave-from-class="transform scale-100 opacity-100 translate-x-0"
                                    leave-to-class="transform scale-90 opacity-0 -translate-x-4"
                                >
                                    <div v-if="form.city" class="space-y-3">
                                        <label class="text-[10px] font-black text-gray-400 uppercase tracking-widest ml-1">{{ __('translate.distance') }}</label>
                                        <div class="custom-multiselect">
                                            <multiselect
                                                :selectLabel="''"
                                                :selectGroupLabel="''"
                                                :selectedLabel="''"
                                                :deselectLabel="''"
                                                track-by="value"
                                                label="name"
                                                :disabled="!form.city"
                                                :multiple="false"
                                                v-model="form.distance"
                                                :options="props.distanceOptions"
                                                :placeholder="__('translate.placeholderDistance')"
                                            >
                                                <template #noResult>
                                                    <span>{{__('translate.noOptions')}}</span>
                                                </template>
                                                <template #noOptions>
                                                    <span>{{__('translate.noResult')}}</span>
                                                </template>
                                            </multiselect>
                                        </div>
                                        <InputError :message="form.errors.distance" class="mt-2"/>
                                    </div>
                                </transition>

                                <!-- Select Category -->
                                <div class="space-y-3">
                                    <label class="text-[10px] font-black text-gray-400 uppercase tracking-widest ml-1">{{ __('translate.category') }}</label>
                                    <div class="custom-multiselect">
                                        <multiselect
                                            :selectLabel="''"
                                            :selectGroupLabel="''"
                                            :selectedLabel="''"
                                            :deselectLabel="''"
                                            track-by="value"
                                            label="name"
                                            :disabled="!form.country"
                                            :multiple="false"
                                            v-model="form.category"
                                            :options="optionsCategories"
                                            :placeholder="__('translate.placeholderCategory')"
                                        >
                                            <template #noResult>
                                                <span>{{__('translate.noOptions')}}</span>
                                            </template>
                                            <template #noOptions>
                                                <span>{{__('translate.noResult')}}</span>
                                            </template>
                                        </multiselect>
                                    </div>
                                    <InputError :message="form.errors.category" class="mt-2"/>
                                </div>
                            </div>

                            <div class="flex justify-center">
                                <button
                                    type="submit"
                                    class="group/btn relative px-12 py-5 bg-[#0A2C5C] text-white font-black rounded-2xl overflow-hidden transition-all hover:scale-105 active:scale-95 shadow-xl shadow-blue-900/20 disabled:opacity-75 disabled:cursor-not-allowed"
                                    :disabled="isSearching"
                                >
                                    <div class="relative z-10 flex items-center gap-3">
                                        <template v-if="isSearching">
                                            <div class="w-5 h-5 border-3 border-white border-t-transparent rounded-full animate-spin"></div>
                                            <span class="uppercase tracking-[0.3em]">{{__('translate.searching')}}</span>
                                        </template>
                                        <template v-else>
                                            <span class="uppercase tracking-[0.3em]">{{__('translate.search')}}</span>
                                            <span class="text-xl transition-transform group-hover/btn:translate-x-1">→</span>
                                        </template>
                                    </div>
                                    <div class="absolute inset-0 bg-gradient-to-r from-red-600 to-red-500 opacity-0 group-hover/btn:opacity-100 transition-opacity"></div>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </FrontLayout>
</template>

<style src="vue-multiselect/dist/vue-multiselect.css"></style>
