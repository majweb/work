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
        :title="props.page.title"
        :image="props.page.image"
        :keywords="props.page.keywords"
        :description="props.page.description"
        :imageUrl="props.imageUrl"
        :url="route('front')"
        type="website"
    >
        <div class="relative min-h-screen pt-32 pb-24 overflow-hidden">
            <!-- Background Graphic -->
            <div class="absolute inset-0 bg-no-repeat bg-cover bg-center opacity-[0.03]"></div>

            <div class="max-w-9xl mx-auto px-4 relative z-10">
                <!-- Search Form Card -->
                <div class="max-w-6xl mx-auto">
                    <div class="bg-white rounded-[3rem] shadow-2xl shadow-blue-900/5 border border-gray-100 p-8 md:p-12 relative overflow-hidden group">
                        <form @submit.prevent="submit" class="relative z-10">
                            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
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
                                    class="group/btn relative px-12 py-5 bg-[#0A2C5C] text-white font-black rounded-2xl overflow-hidden transition-all hover:scale-105 active:scale-95 shadow-xl shadow-blue-900/20"
                                >
                                    <div class="relative z-10 flex items-center gap-3">
                                        <span class="uppercase tracking-[0.3em]">{{__('translate.search')}}</span>
                                        <span class="text-xl transition-transform group-hover/btn:translate-x-1">→</span>
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
                    @apply bg-red-500 text-[10px] font-black uppercase tracking-widest px-4;
                }
            }

            &--selected {
                @apply bg-gray-100 text-[#0A2C5C] font-black;
                &::after {
                    @apply content-['✓'] bg-transparent text-green-500;
                }
            }

            &--group {
                @apply bg-gray-50/50 text-gray-400 text-[9px] font-black uppercase tracking-[0.2em] py-3 px-4;
            }
        }
    }

    .multiselect--active {
        .multiselect__tags {
            @apply border-[#0A2C5C] bg-white ring-4 ring-blue-900/5;
        }
    }

    .multiselect--disabled {
        @apply opacity-50;
        .multiselect__tags {
            @apply bg-gray-100;
        }
    }
}
</style>
