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
});

const optionsCities = ref([]); // 👈 tutaj będą miasta
const optionsCategories = ref([]);

const form = useForm({
    country: null, // 👈 wybrany kraj
    city: null,    // 👈 wybrane miasto
    category: null,    // 👈 wybrane miasto
});

// Watcher dla zmiany kraju
watch(() => form.country, async (newCountry) => {
    if (!newCountry || !newCountry.countryCode) {
        optionsCities.value = [];
        form.city = null;
        optionsCategories.value = [];
        form.category = null;
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

// Funkcja submitu
const submit = () => {
    // Tworzymy query string
    const query = {
        country: form.country?.value || '',
        city: form.city?.value || '',
        category: form.category?.value || ''
    };

    router.get(route('front.projects'), query);
};

</script>

<template>
    <FrontLayout
        :title="page.title"
        :image="page.image"
        :keywords="page.keywords"
        :description="page.description"
        :imageUrl="imageUrl"
    >
        <div class="flex flex-col md:flex-row items-start justify-center pt-[3rem] pb-[14rem] md:pb-0 md:pt-20 px-4">
            <!-- Formularz -->
            <form @submit.prevent="submit" class="flex flex-col md:flex-row gap-3 p-7 bg-gray-50 rounded-lg shadow-md w-full max-w-5xl">
                <!-- Select Country -->
                <div class="flex-1">
                    <multiselect
                        group-values="elements"
                        group-label="group"
                        :group-select="false"
                        :selectLabel="__('translate.selectLabel')"
                        :selectGroupLabel="__('translate.selectGroupLabel')"
                        :selectedLabel="__('translate.selectedLabel')"
                        :deselectLabel="__('translate.deselectLabel')"
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
                    <InputError :message="form.errors.country" class="mt-2"/>
                </div>

                <!-- Select City -->
                <div class="flex-1">
                    <multiselect
                        :selectLabel="__('translate.selectLabel')"
                        :selectGroupLabel="__('translate.selectGroupLabel')"
                        :selectedLabel="__('translate.selectedLabel')"
                        :deselectLabel="__('translate.deselectLabel')"
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
                    <InputError :message="form.errors.city" class="mt-2"/>
                </div>

                <div class="flex-1">
                    <multiselect
                        :selectLabel="__('translate.selectLabel')"
                        :selectGroupLabel="__('translate.selectGroupLabel')"
                        :selectedLabel="__('translate.selectedLabel')"
                        :deselectLabel="__('translate.deselectLabel')"
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
                    <InputError :message="form.errors.country" class="mt-2"/>
                </div>

                <!-- Button -->
                <button
                    type="submit"
                    class="px-6 py-2 bg-red-500 text-white font-semibold rounded-md hover:bg-red-600 transition"
                >
                    {{__('translate.search')}}
                </button>
            </form>
        </div>
    </FrontLayout>
</template>
