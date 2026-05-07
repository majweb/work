<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import {Link, router, usePage} from '@inertiajs/vue3';
import {ref, watch, onMounted, onUnmounted} from 'vue';
import Pagination from '@/Components/Pagination.vue';
import pickBy from 'lodash/pickBy';
import DialogModal from '@/Components/DialogModal.vue';
import SecondaryButton from '@/Components/SecondaryButton.vue';
import DangerButton from '@/Components/DangerButton.vue';
import Multiselect from 'vue-multiselect';
import __ from '@/lang.js';

const props = defineProps({
    offers: Object,
    filters: Object,
    stats: Object,
    recruiters: Array,
    companies: Array,
    categories: Array,
    countries: Array,
});

const filters = ref({
    search: props.filters.search || '',
    status: props.filters.status || null,
    sort: props.filters.sort || 'created_at',
    direction: props.filters.direction || 'desc',
    id: props.filters.id || '',
    city: props.filters.city || '',
    date: props.filters.date || '',
    company: props.filters.company || null,
    recruiter: props.filters.recruiter || null,
    category: props.filters.category || null,
    categorySub: props.filters.categorySub || null,
    profession: props.filters.profession || null,
    positionSelect: props.filters.positionSelect || null,
    country: props.filters.country || null,
});

const statusOptions = [
    {value: 'active', name: 'Aktywne'},
    {value: 'inactive', name: 'Nieaktywne'}
];

const optionsRecruiters = ref(props.recruiters || []);
const optionsCategorySub = ref([]);
const optionsProfession = ref([]);
const optionsPosition = ref([]);
const optionsCities = ref([]);
const showAdvancedFilters = ref(false);

watch(() => filters.value.company, async (newCompany) => {
    if (!newCompany) {
        optionsRecruiters.value = [];
        filters.value.recruiter = null;
        return;
    }

    try {
        const companyId = typeof newCompany === 'object' ? newCompany.id : newCompany;

        const response = await fetch(route("admin.job-offers.getRecruiters"), {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': usePage().props.csrf_token
            },
            body: JSON.stringify({company_id: companyId})
        });
        const data = await response.json();
        optionsRecruiters.value = data;

        // Jeśli wybrany rekruter nie należy do nowej firmy, zresetuj go
        if (filters.value.recruiter) {
            const availableIds = data.map(r => r.id);
            const recruiterId = typeof filters.value.recruiter === 'object' ? filters.value.recruiter.id : filters.value.recruiter;
            if (!availableIds.includes(Number(recruiterId))) {
                filters.value.recruiter = null;
            }
        }
    } catch (e) {
        console.error('Error loading recruiters', e);
    }
});

watch(() => filters.value.category, async (newCategory) => {
    if (!newCategory) {
        optionsCategorySub.value = [];
        optionsProfession.value = [];
        optionsPosition.value = [];
        filters.value.categorySub = null;
        filters.value.profession = null;
        filters.value.positionSelect = null;
        return;
    }

    try {
        const catId = typeof newCategory === 'object' ? newCategory.value : newCategory;
        const response = await fetch(route("admin.job-offers.getChildsCategory", catId));
        const data = await response.json();
        optionsCategorySub.value = data;
        filters.value.categorySub = null;
    } catch (e) {
        console.error('Error loading subcategories', e);
    }
});

watch(() => filters.value.categorySub, async (newCategorySub) => {
    if (!newCategorySub) {
        optionsProfession.value = [];
        optionsPosition.value = [];
        filters.value.profession = null;
        filters.value.positionSelect = null;
        return;
    }

    try {
        const catId = typeof newCategorySub === 'object' ? newCategorySub.value : newCategorySub;
        const response = await fetch(route("admin.job-offers.getChildsCategory", catId));
        const data = await response.json();
        optionsProfession.value = data;
        filters.value.profession = null;
    } catch (e) {
        console.error('Error loading professions', e);
    }
});

watch(() => filters.value.profession, async (newProfession) => {
    if (!newProfession) {
        optionsPosition.value = [];
        filters.value.positionSelect = null;
        return;
    }

    try {
        const catId = typeof newProfession === 'object' ? newProfession.value : newProfession;
        const response = await fetch(route("admin.job-offers.getChildsCategory", catId));
        const data = await response.json();
        optionsPosition.value = data;
        filters.value.positionSelect = null;
    } catch (e) {
        console.error('Error loading positions', e);
    }
});

watch(() => filters.value.country, async (newCountry) => {
    if (!newCountry) {
        optionsCities.value = [];
        filters.value.city = '';
        return;
    }

    try {
        const countryId = typeof newCountry === 'object' ? newCountry.value : newCountry;
        const response = await fetch(route("admin.job-offers.cities", countryId));
        const data = await response.json();
        optionsCities.value = data;
        filters.value.city = '';
    } catch (e) {
        console.error('Error loading cities', e);
    }
});

const offerToToggle = ref(null);
const activeMenuId = ref(null);
const selectedIds = ref([]);

const toggleSelectAll = (event) => {
    if (event.target.checked) {
        selectedIds.value = props.offers.data.map(offer => offer.id);
    } else {
        selectedIds.value = [];
    }
};

const toggleSelect = (id) => {
    if (selectedIds.value.includes(id)) {
        selectedIds.value = selectedIds.value.filter(itemId => itemId !== id);
    } else {
        selectedIds.value.push(id);
    }
};

const exportCsv = () => {
    const params = {
        ...filters.value,
        ids: selectedIds.value.length > 0 ? selectedIds.value.join(',') : null,
        status: filters.value.status?.value !== undefined ? filters.value.status.value : filters.value.status,
        company: typeof filters.value.company === 'object' && filters.value.company !== null ? (filters.value.company.id || filters.value.company.value || filters.value.company) : filters.value.company,
        recruiter: typeof filters.value.recruiter === 'object' && filters.value.recruiter !== null ? (filters.value.recruiter.id || filters.value.recruiter.value || filters.value.recruiter) : filters.value.recruiter,
        category: filters.value.category?.value !== undefined ? filters.value.category.value : filters.value.category,
        categorySub: filters.value.categorySub?.value !== undefined ? filters.value.categorySub.value : filters.value.categorySub,
        profession: filters.value.profession?.value !== undefined ? filters.value.profession.value : filters.value.profession,
        positionSelect: filters.value.positionSelect?.value !== undefined ? filters.value.positionSelect.value : filters.value.positionSelect,
        country: filters.value.country?.value !== undefined ? filters.value.country.value : filters.value.country,
        city: filters.value.city?.value !== undefined ? filters.value.city.value : (filters.value.city?.name || filters.value.city),
    };

    const cleanParams = pickBy(params, (value) => {
        return value !== null && value !== '' && value !== undefined;
    });

    const queryString = new URLSearchParams(cleanParams).toString();
    window.location.href = route('admin.job-offers.export') + '?' + queryString;
};

const toggleMenu = (id) => {
    activeMenuId.value = activeMenuId.value === id ? null : id;
};

const handleOutsideClick = (event) => {
    if (activeMenuId.value !== null && !event.target.closest('.context-menu-container')) {
        activeMenuId.value = null;
    }
};

onMounted(async () => {
    document.addEventListener('click', handleOutsideClick);

    // Inicjalizacja podkategorii jeśli jest wybrana kategoria
    if (filters.value.category) {
        try {
            const catId = typeof filters.value.category === 'object' ? filters.value.category.value : filters.value.category;
            const response = await fetch(route("admin.job-offers.getChildsCategory", catId));
            optionsCategorySub.value = await response.json();
        } catch (e) {
            console.error('Error loading subcategories on mount', e);
        }
    }

    // Inicjalizacja zawodów jeśli jest wybrana podkategoria
    if (filters.value.categorySub) {
        try {
            const catId = typeof filters.value.categorySub === 'object' ? filters.value.categorySub.value : filters.value.categorySub;
            const response = await fetch(route("admin.job-offers.getChildsCategory", catId));
            optionsProfession.value = await response.json();
        } catch (e) {
            console.error('Error loading professions on mount', e);
        }
    }

    // Inicjalizacja stanowisk jeśli jest wybrany zawód
    if (filters.value.profession) {
        try {
            const catId = typeof filters.value.profession === 'object' ? filters.value.profession.value : filters.value.profession;
            const response = await fetch(route("admin.job-offers.getChildsCategory", catId));
            optionsPosition.value = await response.json();
        } catch (e) {
            console.error('Error loading positions on mount', e);
        }
    }

    // Inicjalizacja miast jeśli jest wybrany kraj
    if (filters.value.country) {
        try {
            const countryId = typeof filters.value.country === 'object' ? filters.value.country.value : filters.value.country;
            const response = await fetch(route("admin.job-offers.cities", countryId));
            optionsCities.value = await response.json();
        } catch (e) {
            console.error('Error loading cities on mount', e);
        }
    }
});

onUnmounted(() => {
    document.removeEventListener('click', handleOutsideClick);
});

const resetFilters = () => {
    filters.value = {
        search: '',
        status: '',
        sort: 'created_at',
        direction: 'desc',
        id: '',
        city: '',
        date: '',
        company: null,
        recruiter: null,
        category: null,
        categorySub: null,
        profession: null,
        positionSelect: null,
        country: null,
    };
    optionsCategorySub.value = [];
    optionsProfession.value = [];
    optionsPosition.value = [];
    optionsCities.value = [];
    selectedIds.value = []; // Reset zaznaczeń
    updateFilters();
};

const handleSort = (field) => {
    if (filters.value.sort === field) {
        filters.value.direction = filters.value.direction === 'desc' ? 'asc' : 'desc';
    } else {
        filters.value.sort = field;
        filters.value.direction = 'desc';
    }
    updateFilters();
};

const updateFilters = () => {
    const params = {
        ...filters.value,
        status: filters.value.status?.value !== undefined ? filters.value.status.value : filters.value.status,
        company: typeof filters.value.company === 'object' && filters.value.company !== null ? (filters.value.company.id || filters.value.company.value || filters.value.company) : filters.value.company,
        recruiter: typeof filters.value.recruiter === 'object' && filters.value.recruiter !== null ? (filters.value.recruiter.id || filters.value.recruiter.value || filters.value.recruiter) : filters.value.recruiter,
        category: filters.value.category?.value !== undefined ? filters.value.category.value : filters.value.category,
        categorySub: filters.value.categorySub?.value !== undefined ? filters.value.categorySub.value : filters.value.categorySub,
        profession: filters.value.profession?.value !== undefined ? filters.value.profession.value : filters.value.profession,
        positionSelect: filters.value.positionSelect?.value !== undefined ? filters.value.positionSelect.value : filters.value.positionSelect,
        country: filters.value.country?.value !== undefined ? filters.value.country.value : filters.value.country,
        city: filters.value.city?.value !== undefined ? filters.value.city.value : (filters.value.city?.name || filters.value.city),
    };

    // Usuwamy puste tablice i nulle, aby URL był czystszy
    const cleanParams = pickBy(params, (value) => {
        return value !== null && value !== '' && value !== undefined;
    });

    router.get(route('admin.job-offers.index'), cleanParams, {
        preserveState: true,
        preserveScroll: true,
        replace: true
    });
};

watch(() => filters.value.id, () => {
    updateFilters();
});

watch(() => filters.value.search, () => {
    updateFilters();
});

watch(() => filters.value.date, () => {
    updateFilters();
});

watch(() => filters.value.city, () => {
    updateFilters();
});

watch(() => filters.value.positionSelect, () => {
    updateFilters();
});

watch(() => filters.value.status, () => {
    updateFilters();
});

watch(() => filters.value.recruiter, () => {
    updateFilters();
});

watch(() => filters.value.country, () => {
    updateFilters();
});

watch(() => filters.value.categorySub, () => {
    updateFilters();
});

watch(() => filters.value.profession, () => {
    updateFilters();
});

watch(() => filters.value.company, () => {
    updateFilters();
});

watch(() => filters.value.category, () => {
    updateFilters();
});

const confirmToggleStatus = (offer) => {
    offerToToggle.value = offer;
    activeMenuId.value = null;
};

const toggleStatus = () => {
    if (offerToToggle.value) {
        router.post(route('admin.job-offers.toggle-status', offerToToggle.value.id), {}, {
            preserveScroll: true,
            onSuccess: () => {
                offerToToggle.value = null;
            }
        });
    }
};

const getStatusLabel = (offer) => {
    return offer.is_active ? 'Aktywna' : 'Nieaktywna';
};

const getStatusClass = (offer) => {
    if (!offer.is_active) return 'bg-red-50 text-red-400 border-red-100';
    return 'bg-green-50 text-green-600 border-green-100';
};

const getStatusDotClass = (offer) => {
    if (!offer.is_active) return 'bg-red-400';
    return 'bg-green-600';
};

const formatDate = (date) => {
    if (!date) return '-';
    return new Date(date).toLocaleDateString('pl-PL', {
        year: 'numeric',
        month: 'long',
        day: 'numeric'
    });
};

const getTranslation = (value) => {
    if (!value) return '-';
    if (typeof value === 'object') {
        return value[usePage().props.locale] || value['pl'] || Object.values(value)[0];
    }
    return value;
};
</script>

<template>
    <AppLayout title="Oferty pracy">
        <div class="py-12 bg-gray-50/50 min-h-screen px-2 sm:px-0">
            <div class="max-w-[1600px] mx-auto sm:px-6 lg:px-8">
                <!-- Header Section -->
                <div
                    class="bg-white rounded-[3rem] shadow-xl shadow-blue-900/5 border border-gray-100 p-10 mb-8 transition-all hover:shadow-blue-900/10">
                    <div class="flex flex-col md:flex-row md:items-center justify-between gap-8">
                        <div class="flex items-center gap-6">
                            <div>
                                <h3 class="text-2xl font-black text-[#0A2C5C] uppercase tracking-tight">Rynek pracy</h3>
                                <p class="text-[10px] font-bold text-gray-400 uppercase tracking-widest mt-1">
                                    Zarządzanie ofertami pracy</p>
                            </div>
                        </div>

                        <div class="flex items-center gap-4">
                            <button
                                @click="exportCsv"
                                class="flex items-center gap-3 px-8 py-4 bg-white hover:bg-gray-50 text-[#0A2C5C] border-2 border-gray-100 rounded-2xl font-black text-xs uppercase tracking-widest transition-all active:scale-95 shadow-sm"
                            >
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                                     stroke="currentColor" class="w-5 h-5">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                          d="M3 16.5v2.25A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75V16.5M16.5 12 12 16.5m0 0L7.5 12m4.5 4.5V3"/>
                                </svg>
                                Eksportuj CSV
                            </button>
                        </div>
                    </div>

                    <!-- Stats Grid -->
                    <div class="grid grid-cols-1 md:grid-cols-4 gap-6 mt-12">
                        <div
                            class="bg-gray-50/50 rounded-[2rem] p-6 border border-gray-100 hover:border-blue-200 transition-all group">
                            <p class="text-[10px] font-black text-gray-400 uppercase tracking-widest mb-2">Suma
                                ofert</p>
                            <div class="flex items-end justify-between">
                                <span class="text-3xl font-black text-[#0A2C5C]">{{ stats.total }}</span>
                                <div
                                    class="w-10 h-10 bg-white rounded-xl flex items-center justify-center shadow-sm group-hover:scale-110 transition-transform">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                         stroke-width="2" stroke="currentColor" class="w-5 h-5 text-blue-500">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                              d="M20.25 14.15v4.25c0 .621-.504 1.125-1.125 1.125H4.875A1.125 1.125 0 0 1 3.75 18.4V14.15m16.5 0a3 3 0 0 0-3-3H6.75a3 3 0 0 0-3 3m16.5 0a3 3 0 0 1-3 3H6.75a3 3 0 0 1-3-3m13.875-11.25h-10.5a1.125 1.125 0 0 0-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125h10.5a1.125 1.125 0 0 0 1.125-1.125v-1.5a1.125 1.125 0 0 0-1.125-1.125Z"/>
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <div
                            class="bg-green-50/30 rounded-[2rem] p-6 border border-green-100 hover:border-green-200 transition-all group">
                            <p class="text-[10px] font-black text-green-600/60 uppercase tracking-widest mb-2">
                                Aktywne</p>
                            <div class="flex items-end justify-between">
                                <span class="text-3xl font-black text-green-700">{{ stats.active }}</span>
                                <div
                                    class="w-10 h-10 bg-white rounded-xl flex items-center justify-center shadow-sm group-hover:scale-110 transition-transform text-green-500">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                         stroke-width="2" stroke="currentColor" class="w-5 h-5">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                              d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <div
                            class="bg-red-50/30 rounded-[2rem] p-6 border border-red-100 hover:border-red-200 transition-all group">
                            <p class="text-[10px] font-black text-red-600/60 uppercase tracking-widest mb-2">
                                Nieaktywne</p>
                            <div class="flex items-end justify-between">
                                <span class="text-3xl font-black text-red-700">{{ stats.inactive }}</span>
                                <div
                                    class="w-10 h-10 bg-white rounded-xl flex items-center justify-center shadow-sm group-hover:scale-110 transition-transform text-red-500">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                         stroke-width="2" stroke="currentColor" class="w-5 h-5">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                              d="M18.364 18.364A9 9 0 0 0 5.636 5.636m12.728 12.728A9 9 0 0 1 5.636 5.636m12.728 12.728L5.636 5.636"/>
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <div
                            class="bg-blue-50/30 rounded-[2rem] p-6 border border-blue-100 hover:border-blue-200 transition-all group">
                            <p class="text-[10px] font-black text-blue-600/60 uppercase tracking-widest mb-2">
                                Aplikacje</p>
                            <div class="flex items-end justify-between">
                                <span class="text-3xl font-black text-blue-700">{{ stats.applications }}</span>
                                <div
                                    class="w-10 h-10 bg-white rounded-xl flex items-center justify-center shadow-sm group-hover:scale-110 transition-transform text-blue-500">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                         stroke-width="2" stroke="currentColor" class="w-5 h-5">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                              d="M18 18.72a9.094 9.094 0 0 0 3.741-.479 3 3 0 0 0-4.682-2.72m.94 3.198.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0 1 12 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 0 1 6 18.719m12 0a5.971 5.971 0 0 0-.941-3.197m0 0A5.995 5.995 0 0 0 12 12.75a5.995 5.995 0 0 0-5.058 2.772m0 0a3 3 0 0 0-4.681 2.72 8.986 8.986 0 0 0 3.74.477m.94-3.197a5.971 5.971 0 0 0-.94 3.197M15 6.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Zm6 3a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0Zm-13.5 0a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0Z"/>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Filters Section -->
                <div class="bg-white rounded-[3rem] shadow-xl shadow-blue-900/5 border border-gray-100 p-8 mb-8">
                    <div class="space-y-6">
                        <!-- Main Row: Search, Status, Company -->
                        <div class="grid grid-cols-1 md:grid-cols-12 gap-6 items-center">
                            <!-- Search -->
                            <div class="md:col-span-5 relative group">
                                <div class="absolute inset-y-0 left-0 pl-5 flex items-center pointer-events-none">
                                    <svg
                                        class="h-5 w-5 text-gray-400 group-focus-within:text-blue-500 transition-colors"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                              d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                                    </svg>
                                </div>
                                <input
                                    v-model="filters.search"
                                    type="text"
                                    placeholder="Szukaj po nazwie oferty lub firmie..."
                                    class="block w-full pl-14 pr-4 py-4 bg-gray-50 border-none rounded-2xl text-sm focus:ring-2 focus:ring-blue-500/20 focus:bg-white transition-all font-medium"
                                />
                            </div>

                            <!-- Status Filter -->
                            <div class="md:col-span-3">
                                <select
                                    v-model="filters.status"
                                    class="block w-full py-4 bg-gray-50 border-none rounded-2xl text-sm focus:ring-2 focus:ring-blue-500/20 focus:bg-white transition-all font-medium"
                                >
                                    <option value="">Wszystkie statusy</option>
                                    <option v-for="option in statusOptions" :key="option.value" :value="option.value">
                                        {{ option.name }}
                                    </option>
                                </select>
                            </div>

                            <!-- Firma -->
                            <div class="md:col-span-4 flex gap-4">
                                <div class="flex-grow">
                                    <Multiselect
                                        class="custom-multiselect"
                                        v-model="filters.company"
                                        :options="companies"
                                        :close-on-select="true"
                                        :selectLabel="__('translate.selectLabel')"
                                        :selectGroupLabel="__('translate.selectGroupLabel')"
                                        :selectedLabel="__('translate.selectedLabel')"
                                        :deselectLabel="__('translate.deselectLabel')"
                                        :noOptions="__('translate.noOptions')"
                                        :noResult="__('translate.noResult')"
                                        placeholder="Firmy"
                                        label="name"
                                        track-by="id"
                                    >
                                        <template #noResult>
                                            <span>{{ __('translate.noResult') }}</span>
                                        </template>
                                        <template #noOptions>
                                            <span>{{ __('translate.noOptions') }}</span>
                                        </template>
                                    </Multiselect>
                                </div>
                                <button
                                    @click="showAdvancedFilters = !showAdvancedFilters"
                                    class="px-4 bg-blue-50 text-blue-600 rounded-2xl hover:bg-blue-100 transition-colors flex items-center justify-center min-w-[50px]"
                                    :title="showAdvancedFilters ? 'Ukryj filtry' : 'Pokaż więcej filtrów'"
                                >
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                         stroke-width="2" stroke="currentColor"
                                         :class="['w-5 h-5 transition-transform duration-300', showAdvancedFilters ? 'rotate-180' : '']">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                              d="M19.5 8.25l-7.5 7.5-7.5-7.5"/>
                                    </svg>
                                </button>
                            </div>
                        </div>

                        <!-- Advanced Filters -->
                        <div v-show="showAdvancedFilters"
                             class="space-y-6 pt-6 border-t border-gray-50 transition-all duration-300">
                            <!-- Advanced Row 1: ID, Country, City -->
                            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                                <div>
                                    <label
                                        class="block text-[10px] font-black text-gray-400 mb-2 uppercase tracking-widest">ID</label>
                                    <input
                                        v-model="filters.id"
                                        type="number"
                                        placeholder="ID"
                                        class="block w-full py-4 bg-gray-50 border-none rounded-2xl text-sm focus:ring-2 focus:ring-blue-500/20 focus:bg-white transition-all font-medium"
                                    />
                                </div>
                                <div>
                                    <label
                                        class="block text-[10px] font-black text-gray-400 mb-2 uppercase tracking-widest">Kraj</label>
                                    <Multiselect
                                        class="custom-multiselect"
                                        v-model="filters.country"
                                        :options="countries"
                                        group-values="elements"
                                        group-label="group"
                                        :group-select="false"
                                        :selectLabel="__('translate.selectLabel')"
                                        :selectGroupLabel="__('translate.selectGroupLabel')"
                                        :selectedLabel="__('translate.selectedLabel')"
                                        :deselectLabel="__('translate.deselectLabel')"
                                        :noOptions="__('translate.noOptions')"
                                        :noResult="__('translate.noResult')"
                                        placeholder="Kraj"
                                        label="name"
                                        track-by="value"
                                    >
                                        <template #noResult>
                                            <span>{{ __('translate.noResult') }}</span>
                                        </template>
                                        <template #noOptions>
                                            <span>{{ __('translate.noOptions') }}</span>
                                        </template>
                                    </Multiselect>
                                </div>
                                <div>
                                    <label
                                        class="block text-[10px] font-black text-gray-400 mb-2 uppercase tracking-widest">Miasto</label>
                                    <Multiselect
                                        class="custom-multiselect"
                                        v-model="filters.city"
                                        :options="optionsCities"
                                        :disabled="!filters.country"
                                        :selectLabel="__('translate.selectLabel')"
                                        :selectGroupLabel="__('translate.selectGroupLabel')"
                                        :selectedLabel="__('translate.selectedLabel')"
                                        :deselectLabel="__('translate.deselectLabel')"
                                        :noOptions="__('translate.noOptions')"
                                        :noResult="__('translate.noResult')"
                                        placeholder="Miasto"
                                        label="name"
                                        track-by="value"
                                    >
                                        <template #noResult>
                                            <span>{{ __('translate.noResult') }}</span>
                                        </template>
                                        <template #noOptions>
                                            <span>{{ __('translate.noOptions') }}</span>
                                        </template>
                                    </Multiselect>
                                </div>
                            </div>

                            <!-- Advanced Row 2: Date, Rekruter, Branża -->
                            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                                <div>
                                    <label
                                        class="block text-[10px] font-black text-gray-400 mb-2 uppercase tracking-widest">Data</label>
                                    <input
                                        v-model="filters.date"
                                        type="date"
                                        class="block w-full py-4 bg-gray-50 border-none rounded-2xl text-sm focus:ring-2 focus:ring-blue-500/20 focus:bg-white transition-all font-medium"
                                    />
                                </div>
                                <div>
                                    <label
                                        class="block text-[10px] font-black text-gray-400 mb-2 uppercase tracking-widest">Rekruter</label>
                                    <Multiselect
                                        class="custom-multiselect"
                                        v-model="filters.recruiter"
                                        :options="optionsRecruiters"
                                        :close-on-select="true"
                                        :selectLabel="__('translate.selectLabel')"
                                        :selectGroupLabel="__('translate.selectGroupLabel')"
                                        :selectedLabel="__('translate.selectedLabel')"
                                        :deselectLabel="__('translate.deselectLabel')"
                                        :noOptions="__('translate.noOptions')"
                                        :noResult="__('translate.noResult')"
                                        placeholder="Rekruterzy"
                                        label="name"
                                        track-by="id"
                                    >
                                        <template #noResult>
                                            <span>{{ __('translate.noResult') }}</span>
                                        </template>
                                        <template #noOptions>
                                            <span>{{ __('translate.noOptions') }}</span>
                                        </template>
                                    </Multiselect>
                                </div>
                                <div>
                                    <label
                                        class="block text-[10px] font-black text-gray-400 mb-2 uppercase tracking-widest">Branża</label>
                                    <Multiselect
                                        class="custom-multiselect"
                                        :selectLabel="__('translate.selectLabel')"
                                        :selectGroupLabel="__('translate.selectGroupLabel')"
                                        :selectedLabel="__('translate.selectedLabel')"
                                        :deselectLabel="__('translate.deselectLabel')"
                                        :noOptions="__('translate.noOptions')"
                                        :noResult="__('translate.noResult')"
                                        v-model="filters.category"
                                        :options="categories"
                                        placeholder="Wybierz branżę"
                                        label="name"
                                        track-by="value"
                                        @update:modelValue="updateFilters"
                                    >
                                        <template #noResult>
                                            <span>{{ __('translate.noResult') }}</span>
                                        </template>
                                        <template #noOptions>
                                            <span>{{ __('translate.noOptions') }}</span>
                                        </template>
                                    </Multiselect>
                                </div>
                            </div>

                            <!-- Advanced Row 3: Podbranża, Zawód, Stanowisko -->
                            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 items-end">
                                <div>
                                    <label
                                        class="block text-[10px] font-black text-gray-400 mb-2 uppercase tracking-widest">Podbranża</label>
                                    <Multiselect
                                        class="custom-multiselect"
                                        :selectLabel="__('translate.selectLabel')"
                                        :selectGroupLabel="__('translate.selectGroupLabel')"
                                        :selectedLabel="__('translate.selectedLabel')"
                                        :deselectLabel="__('translate.deselectLabel')"
                                        :noOptions="__('translate.noOptions')"
                                        :noResult="__('translate.noResult')"
                                        v-model="filters.categorySub"
                                        :options="optionsCategorySub"
                                        placeholder="Wybierz podbranżę"
                                        label="name"
                                        track-by="value"
                                        @update:modelValue="updateFilters"
                                    >
                                        <template #noResult>
                                            <span>{{ __('translate.noResult') }}</span>
                                        </template>
                                        <template #noOptions>
                                            <span>{{ __('translate.noOptions') }}</span>
                                        </template>
                                    </Multiselect>
                                </div>
                                <div>
                                    <label
                                        class="block text-[10px] font-black text-gray-400 mb-2 uppercase tracking-widest">Zawód</label>
                                    <Multiselect
                                        class="custom-multiselect"
                                        v-model="filters.profession"
                                        :options="optionsProfession"
                                        :selectLabel="__('translate.selectLabel')"
                                        :selectGroupLabel="__('translate.selectGroupLabel')"
                                        :selectedLabel="__('translate.selectedLabel')"
                                        :deselectLabel="__('translate.deselectLabel')"
                                        :noOptions="__('translate.noOptions')"
                                        :noResult="__('translate.noResult')"
                                        placeholder="Wybierz zawód"
                                        label="name"
                                        track-by="value"
                                        @update:modelValue="updateFilters"
                                    >
                                        <template #noResult>
                                            <span>{{ __('translate.noResult') }}</span>
                                        </template>
                                        <template #noOptions>
                                            <span>{{ __('translate.noOptions') }}</span>
                                        </template>
                                    </Multiselect>
                                </div>
                                <div class="flex gap-4 items-end">
                                    <div class="flex-grow text-left">
                                        <label
                                            class="block text-[10px] font-black text-gray-400 mb-2 uppercase tracking-widest">Stanowisko</label>
                                        <Multiselect
                                            class="custom-multiselect"
                                            v-model="filters.positionSelect"
                                            :options="optionsPosition"
                                            :selectLabel="__('translate.selectLabel')"
                                            :selectGroupLabel="__('translate.selectGroupLabel')"
                                            :selectedLabel="__('translate.selectedLabel')"
                                            :deselectLabel="__('translate.deselectLabel')"
                                            :noOptions="__('translate.noOptions')"
                                            :noResult="__('translate.noResult')"
                                            placeholder="Wybierz stanowisko"
                                            label="name"
                                            track-by="value"
                                            @update:modelValue="updateFilters"
                                        >
                                            <template #noResult>
                                                <span>{{ __('translate.noResult') }}</span>
                                            </template>
                                            <template #noOptions>
                                                <span>{{ __('translate.noOptions') }}</span>
                                            </template>
                                        </Multiselect>
                                    </div>
                                    <button
                                        @click="resetFilters"
                                        class="py-4 px-6 bg-gray-100 hover:bg-gray-200 text-gray-600 rounded-2xl text-sm font-black uppercase tracking-widest transition-all active:scale-95 flex items-center justify-center gap-2"
                                    >
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                             stroke-width="2" stroke="currentColor" class="w-4 h-4">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                  d="M16.023 9.348h4.992v-.001M2.985 19.644v-4.992m0 0h4.992m-4.993 0 3.181 3.183a8.25 8.25 0 0 0 13.803-3.7M4.031 9.865a8.25 8.25 0 0 1 13.803-3.7l3.181 3.182m0-4.991v4.99"/>
                                        </svg>
                                        Reset
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Table Section -->
                <div
                    class="bg-white rounded-[3rem] shadow-xl shadow-blue-900/5 border border-gray-100 overflow-visible relative">
                    <div class="overflow-visible">
                        <table class="w-full text-left border-collapse">
                            <thead>
                            <tr class="border-b border-gray-50">
                                <th class="p-8 first:rounded-tl-[3rem] w-10">
                                    <div class="flex items-center justify-center">
                                        <input
                                            type="checkbox"
                                            :checked="selectedIds.length === offers.data.length && offers.data.length > 0"
                                            @change="toggleSelectAll"
                                            class="w-5 h-5 rounded-lg border-gray-200 text-[#0A2C5C] focus:ring-[#0A2C5C]/20 transition-all cursor-pointer"
                                        />
                                    </div>
                                </th>
                                <th class="p-8 w-20">
                                    <button @click="handleSort('id')"
                                            class="flex items-center gap-2 text-[10px] font-black text-[#0A2C5C] uppercase tracking-[0.2em] group">
                                        ID
                                        <svg v-if="filters.sort === 'id'"
                                             class="w-4 h-4 transition-transform duration-300"
                                             :class="filters.direction === 'asc' ? 'rotate-180' : ''"
                                             xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd"
                                                  d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                                  clip-rule="evenodd"/>
                                        </svg>
                                    </button>
                                </th>
                                <th class="p-8">
                                    <button @click="handleSort('title')"
                                            class="flex items-center gap-2 text-[10px] font-black text-[#0A2C5C] uppercase tracking-[0.2em] group">
                                        Oferta / Firma
                                        <svg v-if="filters.sort === 'title'"
                                             class="w-4 h-4 transition-transform duration-300"
                                             :class="filters.direction === 'asc' ? 'rotate-180' : ''"
                                             xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd"
                                                  d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                                  clip-rule="evenodd"/>
                                        </svg>
                                    </button>
                                </th>
                                <th class="p-8">
                                    <span class="text-[10px] font-black text-[#0A2C5C] uppercase tracking-[0.2em]">Branża / Lok.</span>
                                </th>
                                <th class="p-8">
                                    <span class="text-[10px] font-black text-[#0A2C5C] uppercase tracking-[0.2em]">CV</span>
                                </th>
                                <th class="p-8">
                                    <span class="text-[10px] font-black text-[#0A2C5C] uppercase tracking-[0.2em]">Status / Aplikacje</span>
                                </th>
                                <th class="p-8 text-center">
                                    <button @click="handleSort('created_at')"
                                            class="inline-flex items-center gap-2 text-[10px] font-black text-[#0A2C5C] uppercase tracking-[0.2em] group">
                                        Data publikacji
                                        <svg v-if="filters.sort === 'created_at'"
                                             class="w-4 h-4 transition-transform duration-300"
                                             :class="filters.direction === 'asc' ? 'rotate-180' : ''"
                                             xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd"
                                                  d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                                  clip-rule="evenodd"/>
                                        </svg>
                                    </button>
                                </th>
                                <th class="p-8 text-right last:rounded-tr-[3rem]">
                                    <span
                                        class="text-[10px] font-black text-[#0A2C5C] uppercase tracking-[0.2em]">Akcje</span>
                                </th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr v-for="offer in offers.data" :key="offer.id"
                                class="group hover:bg-blue-50/30 transition-all duration-300 border-b border-gray-50 last:border-none"
                                :class="{'bg-blue-50/50': selectedIds.includes(offer.id)}">
                                <td class="p-8">
                                    <div class="flex items-center justify-center">
                                        <input
                                            type="checkbox"
                                            :checked="selectedIds.includes(offer.id)"
                                            @change="toggleSelect(offer.id)"
                                            class="w-5 h-5 rounded-lg border-gray-200 text-[#0A2C5C] focus:ring-[#0A2C5C]/20 transition-all cursor-pointer"
                                        />
                                    </div>
                                </td>
                                <td class="p-8">
                                    <span class="text-xs font-black text-[#0A2C5C] tabular-nums">#{{ offer.id }}</span>
                                </td>
                                <td class="p-8">
                                    <div class="flex items-center gap-4">
                                        <div
                                            class="w-12 h-12 rounded-2xl bg-gradient-to-br from-[#0A2C5C] to-blue-900 flex items-center justify-center text-white font-black text-sm border-2 border-white shadow-sm group-hover:scale-110 transition-transform uppercase">
                                            {{ getTranslation(offer.title).substring(0, 2).toUpperCase() }}
                                        </div>
                                        <div>
                                            <div
                                                class="text-xs font-black text-[#0A2C5C] group-hover:text-blue-600 transition-colors uppercase tracking-tight">
                                                {{ getTranslation(offer.title) }}
                                            </div>
                                            <div
                                                class="text-[10px] font-bold text-gray-400 uppercase tracking-widest mt-0.5">
                                                {{ offer.user?.name || offer.external_company?.name || 'Brak firmy' }}
                                                <span v-if="offer.recruit?.name"
                                                      class="text-blue-500/60 lowercase italic ml-1">
                                                        ({{ offer.recruit.name }})
                                                    </span>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td class="p-8">
                                    <div class="flex flex-col gap-1">
                                            <span
                                                class="text-[10px] font-black text-[#0A2C5C] uppercase tracking-widest">
                                                {{ offer.category?.name || offer.category?.allTranslations?.title?.[$page.props.locale] || getTranslation(offer.category) }}
                                            </span>
                                        <div class="flex items-center gap-1.5">
                                            <span class="text-[9px] font-bold text-gray-400 uppercase tracking-widest">
                                                {{ offer.countryWork?.name || offer.countryWork?.allTranslations?.[$page.props.locale] || getTranslation(offer.countryWork) }}, {{ offer.cityWork }}
                                            </span>
                                            <span v-if="offer.salary_type"
                                                  class="text-[9px] font-black px-1.5 py-0.5 rounded bg-blue-50 text-blue-600 uppercase tracking-widest border border-blue-100">
                                                {{ offer.salary_type }}
                                            </span>
                                        </div>
                                    </div>
                                </td>
                                <td class="p-8">
                                    <div class="flex items-center gap-2">
                                        <template v-for="cv in offer.cv" :key="cv.id">
                                            <img
                                                v-if="cv.id === 1"
                                                src="/images/icons/cv-classic.svg"
                                                class="w-6 h-6 opacity-80 hover:opacity-100 transition-opacity"
                                                :title="getTranslation(cv.name)"
                                            />
                                            <img
                                                v-if="cv.id === 2"
                                                src="/images/icons/cv-video.svg"
                                                class="w-6 h-6 opacity-80 hover:opacity-100 transition-opacity"
                                                :title="getTranslation(cv.name)"
                                            />
                                            <img
                                                v-if="cv.id === 3"
                                                src="/images/icons/cv-audio.svg"
                                                class="w-6 h-6 opacity-80 hover:opacity-100 transition-opacity"
                                                :title="getTranslation(cv.name)"
                                            />
                                        </template>
                                        <span v-if="!offer.cv || offer.cv.length === 0" class="text-xs text-gray-300">-</span>
                                    </div>
                                </td>
                                <td class="p-8 text-xs font-bold uppercase tracking-widest">
                                    <div class="flex flex-col gap-2">
                                            <span
                                                :class="['px-3 py-1 rounded-lg border w-fit flex items-center gap-2', getStatusClass(offer)]">
                                                <span
                                                    :class="['w-1.5 h-1.5 rounded-full', getStatusDotClass(offer)]"></span>
                                                {{ getStatusLabel(offer) }}
                                            </span>
                                        <span
                                            class="px-3 py-1 bg-blue-50 text-blue-600 border border-blue-100 rounded-lg w-fit flex items-center gap-2">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                     stroke-width="2" stroke="currentColor" class="w-3 h-3">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                          d="M15 19.128a9.38 9.38 0 0 0 2.625.372 9.337 9.337 0 0 0 4.121-.952 4.125 4.125 0 0 0-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 0 1 8.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0 1 11.964-3.07M12 6.375a3.375 3.375 0 1 1-6.75 0 3.375 3.375 0 0 1 6.75 0Zm8.25 2.25a2.625 2.625 0 1 1-5.25 0 2.625 2.625 0 0 1 5.25 0Z"/>
                                                </svg>
                                                {{ offer.aplications?.length || 0 }} aplikacji
                                            </span>
                                    </div>
                                </td>
                                <td class="p-8 text-center text-xs font-bold text-gray-400">
                                    {{ formatDate(offer.created_at) }}
                                </td>
                                <td class="p-8 text-right relative overflow-visible">
                                    <div
                                        class="context-menu-container relative inline-block text-left"
                                        :class="{'z-[100]': activeMenuId === offer.id, 'z-1': activeMenuId !== offer.id}"
                                    >
                                        <button
                                            @click.stop="toggleMenu(offer.id)"
                                            class="p-3 bg-gray-50 hover:bg-[#0A2C5C] text-gray-400 hover:text-white rounded-2xl transition-all active:scale-95 group/btn border border-gray-100 hover:border-[#0A2C5C]"
                                            :class="{'bg-[#0A2C5C] text-white': activeMenuId === offer.id}"
                                        >
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                 stroke-width="2" stroke="currentColor" class="w-5 h-5">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                      d="M12 6.75a.75.75 0 1 1 0-1.5.75.75 0 0 1 0 1.5ZM12 12.75a.75.75 0 1 1 0-1.5.75.75 0 0 1 0 1.5ZM12 18.75a.75.75 0 1 1 0-1.5.75.75 0 0 1 0 1.5Z"/>
                                            </svg>
                                        </button>

                                        <!-- Dropdown Menu -->
                                        <div
                                            v-if="activeMenuId === offer.id"
                                            class="absolute right-0 mt-3 w-64 bg-white rounded-3xl shadow-2xl shadow-blue-900/20 border border-gray-100 z-[100] overflow-hidden py-3 animate-in fade-in zoom-in duration-200 origin-top-right"
                                        >
                                            <Link
                                                :href="route('admin.job-offers.show', offer.id)"
                                                class="flex items-center gap-3 px-6 py-4 text-[10px] font-black uppercase tracking-widest text-gray-600 hover:text-[#0A2C5C] hover:bg-blue-50 transition-colors border-b border-gray-50 group"
                                            >
                                                <div
                                                    class="w-8 h-8 rounded-xl bg-blue-50 flex items-center justify-center group-hover:bg-[#0A2C5C] transition-colors text-blue-500 group-hover:text-white">
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                         viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                                         class="w-4 h-4">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                              d="M2.036 12.322a1.012 1.012 0 0 1 0-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178Z"/>
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                              d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z"/>
                                                    </svg>
                                                </div>
                                                Szczegóły oferty
                                            </Link>

                                            <Link
                                                :href="route('admin.job-offers.edit', offer.id)"
                                                class="flex items-center gap-3 px-6 py-4 text-[10px] font-black uppercase tracking-widest text-gray-600 hover:text-[#0A2C5C] hover:bg-blue-50 transition-colors border-b border-gray-50 group"
                                            >
                                                <div
                                                    class="w-8 h-8 rounded-xl bg-blue-50 flex items-center justify-center group-hover:bg-[#0A2C5C] transition-colors text-blue-500 group-hover:text-white">
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-4 h-4">
                                                        <path stroke-linecap="round" stroke-linejoin="round" d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" />
                                                    </svg>
                                                </div>
                                                Edytuj ofertę
                                            </Link>

                                            <button
                                                @click="confirmToggleStatus(offer)"
                                                class="w-full flex items-center gap-3 px-6 py-4 text-[10px] font-black uppercase tracking-widest hover:bg-blue-50 transition-colors text-left group"
                                                :class="offer.is_active ? 'text-red-600' : 'text-green-600'"
                                            >
                                                <div
                                                    class="w-8 h-8 rounded-xl bg-blue-50 flex items-center justify-center group-hover:bg-[#0A2C5C] transition-colors text-blue-500 group-hover:text-white">
                                                    <svg v-if="offer.is_active" xmlns="http://www.w3.org/2000/svg"
                                                         fill="none" viewBox="0 0 24 24" stroke-width="2"
                                                         stroke="currentColor" class="w-4 h-4 transition-colors">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                              d="M18.364 18.364A9 9 0 0 0 5.636 5.636m12.728 12.728A9 9 0 0 1 5.636 5.636m12.728 12.728L5.636 5.636"/>
                                                    </svg>
                                                    <svg v-else xmlns="http://www.w3.org/2000/svg" fill="none"
                                                         viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                                         class="w-4 h-4 transition-colors text-green-500 group-hover:text-white">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                              d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
                                                    </svg>
                                                </div>
                                                {{ offer.is_active ? 'Dezaktywuj' : 'Aktywuj' }}
                                            </button>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr v-if="offers.data.length === 0">
                                <td colspan="6" class="p-20 text-center">
                                    <div class="flex flex-col items-center gap-4 text-gray-300">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                             stroke-width="1" stroke="currentColor" class="w-20 h-20">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                  d="M20.25 14.15v4.25c0 .621-.504 1.125-1.125 1.125H4.875A1.125 1.125 0 0 1 3.75 18.4V14.15m16.5 0a3 3 0 0 0-3-3H6.75a3 3 0 0 0-3 3m16.5 0a3 3 0 0 1-3 3H6.75a3 3 0 0 1-3-3m13.875-11.25h-10.5a1.125 1.125 0 0 0-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125h10.5a1.125 1.125 0 0 0 1.125-1.125v-1.5a1.125 1.125 0 0 0-1.125-1.125Z"/>
                                        </svg>
                                        <p class="text-xl font-black uppercase tracking-widest">Brak ofert</p>
                                        <p class="text-sm font-bold">Nie znaleziono ofert spełniających podane
                                            kryteria.</p>
                                    </div>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <!-- Pagination -->
                <div class="mt-8">
                    <Pagination :links="offers.links"/>
                </div>
            </div>
        </div>

        <!-- Toggle Status Confirmation Modal -->
        <DialogModal :show="offerToToggle !== null" @close="offerToToggle = null">
            <template #title>
                <div class="flex items-center gap-3"
                     :class="offerToToggle.is_active ? 'text-red-600' : 'text-green-600'">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                         stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                              d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126ZM12 15.75h.007v.008H12v-.008Z"/>
                    </svg>
                    Potwierdź akcję
                </div>
            </template>

            <template #content>
                <p class="text-sm text-gray-600 font-bold">
                    Czy na pewno chcesz {{ offerToToggle.is_active ? 'dezaktywować' : 'aktywować' }} ofertę
                    <span class="text-[#0A2C5C]">{{ getTranslation(offerToToggle.title) }}</span>?
                </p>
            </template>

            <template #footer>
                <div class="flex gap-3">
                    <SecondaryButton @click="offerToToggle = null">
                        Anuluj
                    </SecondaryButton>
                    <DangerButton
                        v-if="offerToToggle.is_active"
                        @click="toggleStatus"
                    >
                        Dezaktywuj
                    </DangerButton>
                    <button
                        v-else
                        @click="toggleStatus"
                        class="px-6 py-2 bg-green-600 hover:bg-green-700 text-white text-xs font-black uppercase tracking-widest rounded-xl transition-all active:scale-95"
                    >
                        Aktywuj
                    </button>
                </div>
            </template>
        </DialogModal>
    </AppLayout>
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
                &--highlight {
                    @apply bg-[#0A2C5C] text-white;
                    &::after {
                        @apply bg-[#0A2C5C] text-white content-[attr(data-deselect)];
                    }
                }
                &::after {
                    @apply content-[attr(data-selected)] bg-transparent text-[#0A2C5C];
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
