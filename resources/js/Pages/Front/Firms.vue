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
    page: Object
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
    <FrontLayout
        :title="props.page.title"
        :image="props.page.image"
        :keywords="props.page.keywords"
        :description="props.page.description"
        :url="route('front.projects')"
        type="website"
    >
        <div class="py-12 bg-gray-50/50 min-h-screen">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-8">
                <!-- Formularz wyszukiwania -->
                <div class="bg-white rounded-[3rem] shadow-xl shadow-blue-900/5 border border-gray-100 p-10">
                    <form @submit.prevent="submit" class="w-full">
                        <div class="flex items-center justify-between mb-8">
                            <div class="flex items-center gap-4 flex-1">
                                <h3 class="text-[10px] font-black text-[#0A2C5C] uppercase tracking-[0.2em]">{{ __('translate.filter') }}</h3>
                                <div class="h-px flex-1 bg-gray-100"></div>
                            </div>
                            <div class="flex gap-3 items-center ml-4">
                                <button
                                    type="submit"
                                    :disabled="loading"
                                    class="px-8 py-3 bg-[#0A2C5C] text-white text-[10px] font-black rounded-2xl uppercase tracking-widest shadow-lg shadow-blue-900/20 hover:bg-blue-800 transition-all hover:-translate-y-0.5 flex items-center gap-2"
                                >
                                    <svg
                                        v-if="loading"
                                        class="animate-spin h-4 w-4 text-white"
                                        xmlns="http://www.w3.org/2000/svg"
                                        fill="none"
                                        viewBox="0 0 24 24"
                                    >
                                        <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                                        <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8v4a4 4 0 00-4 4H4z"></path>
                                    </svg>
                                    {{ loading ? __('translate.searching') : __('translate.search') }}
                                </button>
                                <button
                                    v-if="form.country"
                                    type="button"
                                    @click="clearFilters"
                                    class="px-6 py-3 bg-white border border-gray-100 text-gray-500 text-[10px] font-black uppercase tracking-widest rounded-2xl hover:bg-gray-50 shadow-sm transition-all hover:-translate-y-0.5"
                                >
                                    {{ __('translate.clearFiltersOnly') }}
                                </button>
                            </div>
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                            <div class="space-y-2">
                                <label class="block text-[10px] font-black text-gray-400 mb-2 uppercase tracking-widest">{{ __('translate.placeholderCountry') }}</label>
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
                                    class="custom-multiselect"
                                >
                                    <template #noResult>
                                        <span>{{__('translate.noOptions')}}</span>
                                    </template>
                                </multiselect>
                                <InputError :message="form.errors.country" class="mt-2"/>
                            </div>
                            <div class="flex items-end pb-4">
                                <span class="text-sm font-black text-[#0A2C5C] uppercase tracking-widest">{{ props.firms.total }} {{ __('translate.firms_count') }}</span>
                            </div>
                        </div>
                    </form>
                </div>

                <div class="bg-white rounded-[3rem] shadow-xl shadow-blue-900/5 border border-gray-100 p-10">
                    <!-- FAVORITE FIRMS (SWIPER) -->
                    <div class="mb-16" v-if="features && features.length">
                        <div class="flex flex-col md:flex-row items-center justify-between mb-10 gap-8">
                            <h2 class="text-2xl font-black text-[#0A2C5C] uppercase tracking-tight leading-none order-1">
                                {{__('translate.check')}} <span class="text-blue-500">{{__('translate.favorite_firms')}}</span>
                            </h2>
                            <div class="w-full lg:max-w-4xl">
                                <Swiper
                                    :modules="[Autoplay]"
                                    :slides-per-view="3"
                                    :space-between="20"
                                    :loop="features.length > 4"
                                    :breakpoints="{
                                        320: { slidesPerView: 1.5, spaceBetween: 15 },
                                        640: { slidesPerView: 2.5, spaceBetween: 20 },
                                        1024: { slidesPerView: 3.5, spaceBetween: 20 }
                                    }"
                                    :autoplay="{ delay: 3000, disableOnInteraction: false }"
                                >
                                    <SwiperSlide v-for="c in features" :key="c.id">
                                        <Link :href="route('front.firms.single', c.id)" class="block group">
                                            <div class="bg-gray-50/50 border-2 border-dashed border-blue-200 rounded-[2.5rem] p-6 h-48 flex flex-col justify-between transition-all hover:bg-white hover:border-blue-400 hover:shadow-xl hover:shadow-blue-900/5">
                                                <div class="w-16 h-16 bg-white rounded-2xl flex items-center justify-center shadow-sm overflow-hidden border border-gray-50">
                                                    <img :src="c.profile_photo_url" alt="logo" class="w-12 h-12 object-contain" />
                                                </div>
                                                <div>
                                                    <h3 class="font-black text-[#0A2C5C] uppercase tracking-tight truncate">{{ c.name }}</h3>
                                                    <p class="text-[10px] font-bold text-gray-400 uppercase tracking-widest mt-1">
                                                        {{ c.firm?.countryJson?.allTranslations?.[usePage().props.language] }}
                                                    </p>
                                                </div>
                                            </div>
                                        </Link>
                                    </SwiperSlide>
                                </Swiper>
                            </div>
                        </div>
                    </div>

                    <!-- SIATKA FIRM -->
                    <div class="space-y-8">
                        <div class="flex items-center gap-4">
                            <h3 class="text-[10px] font-black text-[#0A2C5C] uppercase tracking-[0.2em]">{{ __('translate.all_firms') }}</h3>
                            <div class="h-px flex-1 bg-gray-100"></div>
                        </div>

                        <div v-if="props.firms.total">
                            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
                                <Link :href="route('front.firms.single',firm.id)"
                                    v-for="firm in props.firms.data"
                                    :key="firm.id"
                                    class="group bg-white rounded-[2.5rem] border border-gray-100 shadow-sm hover:shadow-xl hover:shadow-blue-900/5 transition-all duration-300 hover:-translate-y-1 p-8 flex flex-col items-center text-center"
                                >
                                    <div class="w-20 h-20 bg-gray-50 rounded-[1.5rem] flex items-center justify-center shadow-inner mb-6 group-hover:bg-white transition-colors border border-transparent group-hover:border-gray-100">
                                        <img :src="firm.profile_photo_url" class="w-14 h-14 object-contain" />
                                    </div>
                                    <h3 class="font-black text-[#0A2C5C] uppercase tracking-tight text-lg mb-2 group-hover:text-blue-500 transition-colors">{{ firm.name }}</h3>
                                    <p class="text-[10px] font-bold text-gray-400 uppercase tracking-widest">
                                        {{ firm.firm.countryJson?.allTranslations[usePage().props.language] }}
                                    </p>
                                </Link>
                            </div>
                        </div>
                        <div v-else class="text-center py-20 bg-gray-50/50 rounded-[3rem] border border-dashed border-gray-200">
                            <svg xmlns="http://www.w3.org/2000/svg" class="mx-auto h-16 w-16 text-gray-300 mb-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9.172 16.172a4 4 0 015.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            <h3 class="text-xl font-black text-gray-900 uppercase tracking-tight">{{ __('translate.noResult') }}</h3>
                            <p class="text-xs font-bold text-gray-400 uppercase tracking-widest mt-2">Spróbuj zmienić parametry wyszukiwania</p>
                        </div>

                        <Pagination v-if="props.firms.total > props.firms.per_page" class="mt-12 flex justify-center" :links="props.firms.links" />
                    </div>
                </div>
            </div>
        </div>
    </FrontLayout>
</template>
<style src="vue-multiselect/dist/vue-multiselect.css"></style>
<style lang="scss">
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
    }

    .multiselect__option--selected {
        background: #f3f4f6 !important;
        color: #0A2C5C;
        font-weight: 900;
    }

    .multiselect__content-wrapper {
        border: 1px solid #f3f4f6;
        border-top: none;
        border-bottom-left-radius: 1rem;
        border-bottom-right-radius: 1rem;
        box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1);
    }

    .multiselect__tag {
        background: #00a0e3 !important;
        border-radius: 0.75rem;
        font-size: 10px;
        font-weight: 900;
        text-transform: uppercase;
        letter-spacing: 0.1em;
    }

    .multiselect__tag-icon:after {
        color: white !important;
    }

    .multiselect__tag-icon:hover {
        background: #0088c2 !important;
    }
    .multiselect__tag-icon{
        top:-3px !important
    }
}
</style>
