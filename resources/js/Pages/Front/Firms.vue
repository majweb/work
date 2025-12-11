<script setup>
import Pagination from '@/Components/Pagination.vue';
import FrontLayout from "@/Layouts/FrontLayout.vue";
import {Link, router, useForm, usePage} from '@inertiajs/vue3';
import __ from "@/lang.js";
import Multiselect from "vue-multiselect";
import InputError from "@/Components/InputError.vue";
import {pickBy} from "lodash";
import {ref} from "vue";
import { Swiper, SwiperSlide } from "swiper/vue";
import { Autoplay } from "swiper/modules";
import 'swiper/css';
import 'swiper/css/scrollbar';

const props = defineProps({
    countries: Array,
    firms: Object,
    features: Object,
});
const loading = ref(false);

const optionsCategories = ref([]);


// Funkcja do formatowania liczby pracowników w bardziej czytelny sposób
const formatEmployeeCount = (count) => {
    if (!count) return __('translate.NoData');
    if (count < 10) return __('translate.lessThanTen');
    if (count < 50) return __('translate.betweenTenAndFifty');
    if (count < 250) return __('translate.moreThanFifty');
    return __('translate.moreThanTwoHundred');
};

const clearFilters = () => {
    form.country = null;

    router.get(route('front.firms'), {}, {
        preserveState: false,
        replace: true,
        preserveScroll: true,
    });
};


// Funkcja do ustalania kolorów tła dla firm w oparciu o ich ID (dla różnorodności wizualnej)
const getGradientClass = (id) => {
    const gradientClasses = [
        'from-blue-100 to-indigo-50',
        'from-green-100 to-emerald-50',
        'from-amber-100 to-yellow-50',
        'from-rose-100 to-pink-50',
        'from-purple-100 to-violet-50',
    ];
    return gradientClasses[id % gradientClasses.length];
};

const submit = () => {
    loading.value = true;

    const transformedData = {
        country: form.country?.value || null,
    }

    const filteredData = pickBy(transformedData);

    router.get(route('front.firms'),filteredData, {
        preserveState: true,
        replace: true,
        preserveScroll: true,
        onFinish: () => {
            loading.value = false;
        }
    });
};

const form = useForm({
    country: undefined,
});

const companies = ref([
    { id: 1, name: "Dropbox", country: "United States", category: "Technology", logo: "/img/dropbox.svg" },
    { id: 2, name: "Santander", country: "Spain", category: "Finance", logo: "/img/santander.svg" },
    { id: 3, name: "Spotify", country: "Sweden", category: "Media", logo: "/img/spotify.svg" },
    { id: 4, name: "Toyota", country: "Japan", category: "Automotive", logo: "/img/toyota.svg" },
]);

const highlighted = ref([1, 2]); // wyróżnione firmy

</script>

<template>
    <FrontLayout :title="__('translate.projects')">
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg p-6">
                    <div class="grid grid-cols-1 md:grid-cols-2 items-center">
                        <!-- Formularz wyszukiwania -->
                        <div class="mb-6">
                            <form @submit.prevent="submit" class="w-full">
                                <div class="bg-white p-4 flex items-center gap-2">
                                    <!-- Panel filtrów -->
                                    <div class="w-full">
                                        <multiselect
                                            v-model="form.country"
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
                           g                     <span>{{__('translate.noOptions')}}</span>
                                            </template>
                                        </multiselect>
                                        <InputError :message="form.errors.country" class="mt-2"/>
                                    </div>
                                    <button
                                        type="submit"
                                        :disabled="loading || !form.country"
                                        class="px-6 py-2 bg-red-500 text-white font-semibold rounded-md hover:bg-red-600 transition flex items-center gap-2 disabled:opacity-50 disabled:cursor-not-allowed"
                                    >
                                        <svg
                                            v-if="loading"
                                            class="animate-spin h-5 w-5 text-white"
                                            xmlns="http://www.w3.org/2000/svg"
                                            fill="none"
                                            viewBox="0 0 24 24"
                                        >
                                            <circle
                                                class="opacity-25"
                                                cx="12"
                                                cy="12"
                                                r="10"
                                                stroke="currentColor"
                                                stroke-width="4"
                                            ></circle>
                                            <path
                                                class="opacity-75"
                                                fill="currentColor"
                                                d="M4 12a8 8 0 018-8v4a4 4 0 00-4 4H4z"
                                            ></path>
                                        </svg>

                                        <span v-if="!loading">
        {{ __('translate.search') }}
    </span>
                                        <span v-else>
        {{ __('translate.searching') ?? 'Szukam…' }}
    </span>
                                    </button>
                                </div>
                            </form>
                            <!-- 🔥 PRZYCISK RESET — widoczny tylko jeśli wybrano kraj -->
                            <button
                                v-if="form.country"
                                type="button"
                                @click="clearFilters"
                                class="ml-4 px-4 py-2 bg-gray-300 text-gray-700 rounded hover:bg-gray-400 transition"
                            >
                                {{ __('translate.clearFiltersOnly') ?? 'Wyczyść' }}
                            </button>
                        </div>

                        <!-- Możesz dodać tutaj jakieś opcje filtrowania -->
                        <div class="flex justify-end space-x-2">
                            <!-- Przykład filtrów/sortowania (można rozbudować później) -->
                            <span class="text-sm text-gray-500 dark:text-gray-400">{{ props.firms.total }} firm</span>
                        </div>
                    </div>
                    <div class="max-w-6xl px-6">
                        <!-- TYTUŁ -->
                        <div class="flex flex-col items-start justify-between mb-10 gap-8">
                            <!-- LEWA KOLUMNA -->
                            <div class="flex items-start md:items-center flex-row gap-4 shrink-0">
                                <h2 class="text-4xl font-bold text-[#0A2E6D] leading-7 order-1">
                                    {{__('translate.check')}}<br />
                                    <span class="text-[#0A2E6D]">{{__('translate.favorite_firms')}}</span>
                                </h2>
                            </div>
                            <!-- PRAWA KOLUMNA (SWIPER) -->
                            <div class="w-full ">
                                <Swiper
                                    :modules="[Autoplay]"
                                    :slides-per-view="3"
                                    :space-between="10"
                                    :loop="true"
                                    :breakpoints="{
        320: {
            slidesPerView: 2
        },
        1024: {
            slidesPerView: 4
        }
    }"
                                    :autoplay="true"
                                >
                                    <SwiperSlide
                                        v-for="c in features"
                                        :key="c.id"
                                        class="border-2 border-blue-400 border-dashed rounded-xl p-5 w-56 bg-white shadow-sm min-h-[180px] sm:min-h-[150px] flex flex-col justify-between transition hover:bg-blue-50 cursor-pointer"
                                    >
                                        <Link :href="route('front.firms.single', c.id)">
                                            <img :src="c.profile_photo_url" alt="" class="h-10" />
                                            <h3 class="font-bold text-lg mt-4">{{ c.name }}</h3>
                                            <div class="text-gray-600 text-sm min-h-[20px]">
                                                {{ c.firm?.countryJson?.allTranslations?.[usePage().props.language] }}
                                            </div>
                                        </Link>
                                    </SwiperSlide>
                                </Swiper>
                            </div>
                        </div>

                        <!-- SIATKA FIRM -->
                        <div v-if="props.firms.total">
                            <div class="grid grid-cols-2 md:grid-cols-4 gap-3">
                                <Link :href="route('front.firms.single',firm.id)"
                                    v-for="firm in props.firms.data"
                                    :key="firm.id"
                                    class="border rounded-xl p-5 bg-white shadow-sm hover:shadow-md transition cursor-pointer hover:bg-gray-50 min-h-[180px] sm:min-h-[150px]"
                                >
                                    <img :src="firm.profile_photo_url" class="h-10 mb-5" />
                                    <h3 class="font-semibold text-lg">{{ firm.name }}</h3>
                                    <p class="text-gray-500 text-sm">
                                        {{ firm.firm.countryJson?.allTranslations[usePage().props.language] }}
                                    </p>
                                </Link>
                            </div>
                        </div>
                        <div v-else class="text-center py-12">
                            <svg xmlns="http://www.w3.org/2000/svg" class="mx-auto h-12 w-12 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.172 16.172a4 4 0 015.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            <h3 class="mt-2 text-sm font-medium text-gray-900 dark:text-white">{{ __('translate.noResult') }}</h3>
                        </div>
                            <Pagination v-if="props.firms.total > 10" class="mt-10 text-center mx-auto" :links="props.firms.links" />
                    </div>
                </div>
            </div>
        </div>
    </FrontLayout>
</template>
<style src="vue-multiselect/dist/vue-multiselect.css"></style>
<style lang="scss">
.multiselect__tags{
    border:1px solid #0A2E6D;
}
.multiselect__tag{
    background: #0A2E6D !important;
}
.multiselect__option--highlight {
    background: #0A2E6D !important;
    outline: none;
    color: white;
}

.multiselect__option--highlight:after {
    content: attr(data-select);
    background: #0A2E6D !important;
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
.multiselect__select{
    height: 98%;
    background: rgba(10, 46, 109, 0.14);
}
.multiselect__select::before{
    border-color: #0A2E6D transparent transparent;
}
.multiselect--disabled.multiselect .multiselect__select{
    background: rgba(10, 46, 109, 0.14);
}
</style>
