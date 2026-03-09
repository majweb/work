<script setup>
import AppLayout from "@/Layouts/AppLayout.vue";
import { Link, router, useForm } from "@inertiajs/vue3";
import Pagination from "@/Components/Pagination.vue";
import { ref, watch, onMounted, onUnmounted } from 'vue';
import debounce from "lodash/debounce";
import pickBy from "lodash/pickBy";

const props = defineProps({
    firms: Object,
    stats: Object,
    filters: Object,
    countries: Array,
});

const search = ref(props.filters.search);
const status = ref(props.filters.status);
const country = ref(props.filters.country);
const creditsMin = ref(props.filters.credits_min);
const creditsMax = ref(props.filters.credits_max);
const offersMin = ref(props.filters.offers_min);
const offersMax = ref(props.filters.offers_max);
const dateFrom = ref(props.filters.date_from);
const dateTo = ref(props.filters.date_to);
const selectedIds = ref([]);
const activeMenuId = ref(null);

const updateFilters = debounce(() => {
    const filters = pickBy({
        search: search.value,
        status: status.value,
        country: country.value,
        credits_min: creditsMin.value,
        credits_max: creditsMax.value,
        offers_min: offersMin.value,
        offers_max: offersMax.value,
        date_from: dateFrom.value,
        date_to: dateTo.value,
        sort: props.filters.sort,
        direction: props.filters.direction,
    });

    router.get(route('admin.firms.index'), filters, {
        preserveState: true,
        replace: true,
    });
}, 300);

watch([search, status, country, creditsMin, creditsMax, offersMin, offersMax, dateFrom, dateTo], () => {
    updateFilters();
});

const sort = (field) => {
    let direction = 'asc';
    let newField = field;

    if (props.filters.sort === field) {
        if (props.filters.direction === 'asc') {
            direction = 'desc';
        } else {
            newField = null;
            direction = null;
        }
    }

    router.get(route('admin.firms.index'), pickBy({
        ...props.filters,
        sort: newField,
        direction: direction,
    }), {
        preserveState: true,
        replace: true,
    });
};

const toggleMenu = (id) => {
    activeMenuId.value = activeMenuId.value === id ? null : id;
};

const toggleSelectAll = (e) => {
    if (e.target.checked) {
        selectedIds.value = props.firms.data.map(f => f.id);
    } else {
        selectedIds.value = [];
    }
};

const exportCsv = () => {
    const params = pickBy({
        ...props.filters,
        ids: selectedIds.value.join(','),
    });
    window.location.href = route('admin.firms.export', params);
};

const changeStatus = (id) => {
    const firm = props.firms.data.find(f => f.id === id);
    if (!firm) return;

    // Przełączanie statusu w kółko dla prostoty w menu kontekstowym,
    // lub można by tu otworzyć modal. Dla spójności z Show.vue
    // zrobimy prostą logikę przełączania: unverified -> verified -> blocked -> unverified
    let newStatus = 'verified';
    if (firm.status === 'verified') newStatus = 'blocked';
    else if (firm.status === 'blocked') newStatus = 'unverified';

    router.post(route('admin.firms.changeStatus', id), {
        status: newStatus
    }, {
        preserveScroll: true,
        onSuccess: () => {
            activeMenuId.value = null;
        }
    });
};

const verifyEmail = (id) => {
    router.post(route('admin.firms.verifyEmail', id), {}, {
        preserveScroll: true,
        onSuccess: () => {
            activeMenuId.value = null;
        }
    });
};

const resetFilters = () => {
    search.value = '';
    status.value = null;
    country.value = null;
    creditsMin.value = null;
    creditsMax.value = null;
    offersMin.value = null;
    offersMax.value = null;
    dateFrom.value = null;
    dateTo.value = null;
};

const getStatusLabel = (status) => {
    switch (status) {
        case 'verified': return 'Zweryfikowany';
        case 'unverified': return 'Niezweryfikowany';
        case 'blocked': return 'Zawieszony';
        default: return status;
    }
};

const getStatusClass = (status) => {
    switch (status) {
        case 'verified': return 'bg-blue-100 text-blue-600 border-blue-200';
        case 'unverified': return 'bg-slate-700 text-white border-slate-600';
        case 'blocked': return 'bg-red-50 text-red-400 border-red-100';
        default: return 'bg-gray-100 text-gray-600 border-gray-200';
    }
};

const getStatusDotClass = (status) => {
    switch (status) {
        case 'verified': return 'bg-blue-400';
        case 'unverified': return 'bg-slate-400';
        case 'blocked': return 'bg-red-400';
        default: return 'bg-gray-400';
    }
};

const handleOutsideClick = (event) => {
    if (activeMenuId.value && !event.target.closest('.context-menu-container')) {
        activeMenuId.value = null;
    }
};

onMounted(() => {
    document.addEventListener('click', handleOutsideClick);
});

onUnmounted(() => {
    document.removeEventListener('click', handleOutsideClick);
});

</script>

<template>
    <AppLayout title="Lista firm">
        <div class="py-12 bg-gray-50/50 min-h-screen">
            <div class="max-w-[1600px] mx-auto sm:px-6 lg:px-8">

                <!-- Header Section -->
                <div class="bg-white rounded-[3rem] shadow-xl shadow-blue-900/5 border border-gray-100 p-10 mb-8">
                    <div class="flex flex-col md:flex-row md:items-center justify-between gap-6">
                        <div>
                            <div class="flex items-center gap-4 mb-2">
                                <div>
                                    <h3 class="text-2xl font-black text-[#0A2C5C] uppercase tracking-tight">Lista firm</h3>
                                    <p class="text-[10px] font-bold text-gray-400 uppercase tracking-widest mt-1">Zarządzanie kontami firm, weryfikacja i kredyty</p>
                                </div>
                            </div>
                        </div>

                        <div class="flex items-center gap-4">
                            <button
                                @click="exportCsv"
                                class="inline-flex items-center px-8 py-4 bg-white border-2 border-gray-100 rounded-2xl font-black text-[10px] text-gray-600 uppercase tracking-widest hover:bg-gray-50 hover:border-gray-200 transition duration-200 shadow-sm"
                            >
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-4 h-4 mr-2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M3 16.5v2.25A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75V16.5M16.5 12 12 16.5m0 0L7.5 12m4.5 4.5V3" />
                                </svg>
                                Eksportuj CSV
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Stats Cards -->
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
                    <div class="bg-white rounded-[2.5rem] shadow-xl shadow-blue-900/5 border border-gray-100 p-8 flex items-center gap-6">
                        <div class="w-16 h-16 bg-blue-50 rounded-2xl flex items-center justify-center">
                             <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor" class="w-8 h-8 text-blue-500">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12c0 1.268-.63 2.39-1.593 3.068a3.745 3.745 0 0 1-1.043 3.296 3.745 3.745 0 0 1-3.296 1.043A3.745 3.745 0 0 1 12 21c-1.268 0-2.39-.63-3.068-1.593a3.746 3.746 0 0 1-3.296-1.043 3.745 3.745 0 0 1-1.043-3.296A3.745 3.745 0 0 1 3 12c0-1.268.63-2.39 1.593-3.068a3.745 3.745 0 0 1 1.043-3.296 3.746 3.746 0 0 1 3.296-1.043A3.746 3.746 0 0 1 12 3c1.268 0 2.39.63 3.068 1.593a3.746 3.746 0 0 1 3.296 1.043 3.746 3.746 0 0 1 1.043 3.296A3.745 3.745 0 0 1 21 12Z" />
                            </svg>
                        </div>
                        <div>
                            <div class="text-3xl font-black text-[#0A2C5C]">{{ stats.verified }}</div>
                            <div class="text-[10px] font-bold text-gray-400 uppercase tracking-widest mt-1">Zweryfikowanych</div>
                        </div>
                    </div>

                    <div class="bg-white rounded-[2.5rem] shadow-xl shadow-blue-900/5 border border-gray-100 p-8 flex items-center gap-6">
                        <div class="w-16 h-16 bg-slate-100 rounded-2xl flex items-center justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor" class="w-8 h-8 text-slate-500">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m9.75 9.75 4.5 4.5m0-4.5-4.5 4.5M21 12c0 1.268-.63 2.39-1.593 3.068a3.745 3.745 0 0 1-1.043 3.296 3.745 3.745 0 0 1-3.296 1.043A3.745 3.745 0 0 1 12 21c-1.268 0-2.39-.63-3.068-1.593a3.746 3.746 0 0 1-3.296-1.043 3.745 3.745 0 0 1-1.043-3.296A3.745 3.745 0 0 1 3 12c0-1.268.63-2.39 1.593-3.068a3.745 3.745 0 0 1 1.043-3.296 3.746 3.746 0 0 1 3.296-1.043A3.746 3.746 0 0 1 12 3c1.268 0 2.39.63 3.068 1.593a3.746 3.746 0 0 1 3.296 1.043 3.746 3.746 0 0 1 1.043 3.296A3.745 3.745 0 0 1 21 12Z" />
                            </svg>
                        </div>
                        <div>
                            <div class="text-3xl font-black text-[#0A2C5C]">{{ stats.unverified }}</div>
                            <div class="text-[10px] font-bold text-gray-400 uppercase tracking-widest mt-1">Niezweryfikowanych</div>
                        </div>
                    </div>

                    <div class="bg-white rounded-[2.5rem] shadow-xl shadow-blue-900/5 border border-gray-100 p-8 flex items-center gap-6 relative">
                        <div class="w-16 h-16 bg-red-50 rounded-2xl flex items-center justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor" class="w-8 h-8 text-red-400">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 5.25v13.5m-7.5-13.5v13.5" />
                            </svg>
                        </div>
                        <div>
                            <div class="text-3xl font-black text-[#0A2C5C]">{{ stats.blocked }}</div>
                            <div class="text-[10px] font-bold text-gray-400 uppercase tracking-widest mt-1">Zawieszonych</div>
                        </div>
                    </div>
                </div>

                <!-- Filters Section -->
                <div class="bg-white rounded-[2.5rem] shadow-xl shadow-blue-900/5 border border-gray-100 p-8 mb-8">
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                        <!-- Search -->
                        <div class="space-y-2">
                            <label class="text-[10px] font-black text-gray-400 uppercase tracking-widest ml-2">Wyszukaj</label>
                            <div class="relative group">
                                <input
                                    v-model="search"
                                    type="text"
                                    placeholder="Nazwa, miasto, email..."
                                    class="w-full pl-12 pr-4 py-4 bg-gray-50 border-none rounded-2xl text-xs font-bold focus:ring-2 focus:ring-[#0A2C5C]/10 transition-all placeholder:text-gray-300"
                                />
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-5 h-5 text-gray-300 absolute left-4 top-1/2 -translate-y-1/2 group-focus-within:text-[#0A2C5C] transition-colors">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
                                </svg>
                            </div>
                        </div>

                        <!-- Country -->
                        <div class="space-y-2">
                            <label class="text-[10px] font-black text-gray-400 uppercase tracking-widest ml-2">Kraj</label>
                            <select
                                v-model="country"
                                class="w-full px-4 py-4 bg-gray-50 border-none rounded-2xl text-xs font-bold focus:ring-2 focus:ring-[#0A2C5C]/10 transition-all"
                            >
                                <option :value="null">Wszystkie kraje</option>
                                <option v-for="c in countries" :key="c" :value="c">{{ c }}</option>
                            </select>
                        </div>

                        <!-- Status -->
                        <div class="space-y-2">
                            <label class="text-[10px] font-black text-gray-400 uppercase tracking-widest ml-2">Status</label>
                            <select
                                v-model="status"
                                class="w-full px-4 py-4 bg-gray-50 border-none rounded-2xl text-xs font-bold focus:ring-2 focus:ring-[#0A2C5C]/10 transition-all"
                            >
                                <option :value="null">Wszystkie statusy</option>
                                <option value="verified">Zweryfikowane</option>
                                <option value="unverified">Niezweryfikowane</option>
                                <option value="blocked">Zawieszone</option>
                            </select>
                        </div>

                        <!-- Registration Date From -->
                        <div class="space-y-2">
                            <label class="text-[10px] font-black text-gray-400 uppercase tracking-widest ml-2">Data rejestracji od</label>
                            <input
                                v-model="dateFrom"
                                type="date"
                                class="w-full px-4 py-4 bg-gray-50 border-none rounded-2xl text-xs font-bold focus:ring-2 focus:ring-[#0A2C5C]/10 transition-all"
                            />
                        </div>

                        <!-- Registration Date To -->
                        <div class="space-y-2">
                            <label class="text-[10px] font-black text-gray-400 uppercase tracking-widest ml-2">Data rejestracji do</label>
                            <input
                                v-model="dateTo"
                                type="date"
                                class="w-full px-4 py-4 bg-gray-50 border-none rounded-2xl text-xs font-bold focus:ring-2 focus:ring-[#0A2C5C]/10 transition-all"
                            />
                        </div>

                        <!-- Credits Range -->
                        <div class="space-y-2">
                            <label class="text-[10px] font-black text-gray-400 uppercase tracking-widest ml-2">Kredyty (min - max)</label>
                            <div class="flex items-center gap-2">
                                <input
                                    v-model="creditsMin"
                                    type="number"
                                    placeholder="Od"
                                    class="w-full px-4 py-4 bg-gray-50 border-none rounded-2xl text-xs font-bold focus:ring-2 focus:ring-[#0A2C5C]/10 transition-all"
                                />
                                <input
                                    v-model="creditsMax"
                                    type="number"
                                    placeholder="Do"
                                    class="w-full px-4 py-4 bg-gray-50 border-none rounded-2xl text-xs font-bold focus:ring-2 focus:ring-[#0A2C5C]/10 transition-all"
                                />
                            </div>
                        </div>

                        <!-- Offers Range -->
                        <div class="space-y-2">
                            <label class="text-[10px] font-black text-gray-400 uppercase tracking-widest ml-2">Oferty (min - max)</label>
                            <div class="flex items-center gap-2">
                                <input
                                    v-model="offersMin"
                                    type="number"
                                    placeholder="Od"
                                    class="w-full px-4 py-4 bg-gray-50 border-none rounded-2xl text-xs font-bold focus:ring-2 focus:ring-[#0A2C5C]/10 transition-all"
                                />
                                <input
                                    v-model="offersMax"
                                    type="number"
                                    placeholder="Do"
                                    class="w-full px-4 py-4 bg-gray-50 border-none rounded-2xl text-xs font-bold focus:ring-2 focus:ring-[#0A2C5C]/10 transition-all"
                                />
                            </div>
                        </div>

                        <!-- Actions Reset -->
                        <div class="flex items-end pb-1">
                            <button
                                @click="resetFilters"
                                class="w-full flex items-center justify-center gap-3 px-8 py-4 bg-red-50 text-red-400 rounded-2xl font-black text-[10px] uppercase tracking-widest hover:bg-red-100 transition-all duration-200 shadow-sm"
                            >
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-4 h-4">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                                </svg>
                                Resetuj filtry
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Table Section -->
                <div class="bg-white rounded-[3rem] shadow-xl shadow-blue-900/5 border border-gray-100">
                    <div class="overflow-visible">
                        <table class="w-full text-left border-collapse">
                            <thead>
                                <tr class="border-b border-gray-50">
                                    <th class="py-8 px-8 w-10 text-center">
                                        <input
                                            type="checkbox"
                                            @change="toggleSelectAll"
                                            class="rounded-lg border-gray-200 text-[#0A2C5C] focus:ring-[#0A2C5C]/10 w-5 h-5"
                                        />
                                    </th>
                                    <th @click="sort('name')" class="py-8 px-6 text-[10px] font-black text-gray-400 uppercase tracking-widest cursor-pointer group whitespace-nowrap">
                                        Firma
                                        <span class="inline-block ml-2 transition-all" :class="{ 'rotate-180': props.filters.sort === 'name' && props.filters.direction === 'desc', 'opacity-0 group-hover:opacity-100': props.filters.sort !== 'name' }">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-3 h-3 text-[#0A2C5C]">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 15.75l7.5-7.5 7.5 7.5" />
                                            </svg>
                                        </span>
                                    </th>
                                    <th class="py-8 px-6 text-[10px] font-black text-gray-400 uppercase tracking-widest whitespace-nowrap">Lokalizacja</th>
                                    <th @click="sort('recruiters_count')" class="py-8 px-6 text-[10px] font-black text-gray-400 uppercase tracking-widest cursor-pointer group whitespace-nowrap text-center">
                                        Rekruterzy
                                        <span class="inline-block ml-2 transition-all" :class="{ 'rotate-180': props.filters.sort === 'recruiters_count' && props.filters.direction === 'desc', 'opacity-0 group-hover:opacity-100': props.filters.sort !== 'recruiters_count' }">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-3 h-3 text-[#0A2C5C]">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 15.75l7.5-7.5 7.5 7.5" />
                                            </svg>
                                        </span>
                                    </th>
                                    <th @click="sort('offers_count')" class="py-8 px-6 text-[10px] font-black text-gray-400 uppercase tracking-widest cursor-pointer group whitespace-nowrap text-center">
                                        Oferty
                                        <span class="inline-block ml-2 transition-all" :class="{ 'rotate-180': props.filters.sort === 'offers_count' && props.filters.direction === 'desc', 'opacity-0 group-hover:opacity-100': props.filters.sort !== 'offers_count' }">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-3 h-3 text-[#0A2C5C]">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 15.75l7.5-7.5 7.5 7.5" />
                                            </svg>
                                        </span>
                                    </th>
                                    <th class="py-8 px-6 text-[10px] font-black text-gray-400 uppercase tracking-widest whitespace-nowrap">Status</th>
                                    <th @click="sort('kredyty')" class="py-8 px-6 text-[10px] font-black text-gray-400 uppercase tracking-widest cursor-pointer group whitespace-nowrap text-center">
                                        Kredyty
                                        <span class="inline-block ml-2 transition-all" :class="{ 'rotate-180': props.filters.sort === 'kredyty' && props.filters.direction === 'desc', 'opacity-0 group-hover:opacity-100': props.filters.sort !== 'kredyty' }">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-3 h-3 text-[#0A2C5C]">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 15.75l7.5-7.5 7.5 7.5" />
                                            </svg>
                                        </span>
                                    </th>
                                    <th class="py-8 px-8 text-right w-20"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr v-for="firm in firms.data" :key="firm.id" class="border-b border-gray-50 hover:bg-gray-50/50 transition-all group">
                                    <td class="py-8 px-8">
                                        <input
                                            v-model="selectedIds"
                                            :value="firm.id"
                                            type="checkbox"
                                            class="rounded-lg border-gray-200 text-[#0A2C5C] focus:ring-[#0A2C5C]/10 w-5 h-5 mx-auto block"
                                        />
                                    </td>
                                    <td class="py-8 px-6">
                                        <div class="flex items-center gap-4">
                                            <div class="w-10 h-10 bg-white shadow-sm border border-gray-100 rounded-xl flex items-center justify-center p-1 overflow-hidden">
                                                <img v-if="firm.logo" :src="firm.logo" class="max-w-full max-h-full object-contain" />
                                                <div v-else class="text-[10px] font-black text-gray-300 uppercase">Logo</div>
                                            </div>
                                            <div>
                                                <Link :href="route('admin.firms.show', firm.id)" class="text-xs font-black text-[#0A2C5C] uppercase tracking-tight hover:text-blue-600 transition-colors block">
                                                    {{ firm.name }}
                                                </Link>
                                                <span class="text-[10px] font-bold text-gray-400 uppercase tracking-widest block">{{ firm.email }}</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="py-8 px-6">
                                        <p class="text-xs font-black text-blue-700 uppercase tracking-tight">{{ firm.country }}</p>
                                        <p class="text-[9px] font-bold text-gray-400 uppercase tracking-widest mt-1">{{ firm.city || '-' }}</p>
                                    </td>
                                    <td class="py-8 px-6 text-center">
                                        <span class="inline-flex items-center justify-center w-8 h-8 rounded-xl bg-gray-50 border border-gray-100 text-[10px] font-black text-[#0A2C5C]">
                                            {{ firm.recruiters_count }}
                                        </span>
                                    </td>
                                    <td class="py-8 px-6 text-center">
                                        <span class="inline-flex items-center justify-center w-8 h-8 rounded-xl bg-blue-50 text-[10px] font-black text-[#0A2C5C]">
                                            {{ firm.projects_count }}
                                        </span>
                                    </td>
                                    <td class="py-8 px-6">
                                        <div
                                            class="inline-flex items-center gap-2 px-4 py-2 rounded-full border text-[9px] font-black uppercase tracking-widest shadow-sm"
                                            :class="getStatusClass(firm.status)"
                                        >
                                            <div class="w-2 h-2 rounded-full" :class="getStatusDotClass(firm.status)"></div>
                                            {{ getStatusLabel(firm.status) }}
                                        </div>
                                    </td>
                                    <td class="py-8 px-6 text-center">
                                        <span class="text-xs font-black text-[#0A2C5C] tracking-tight">{{ firm.points }}</span>
                                    </td>
                                    <td class="py-8 px-8 text-right relative context-menu-container">
                                        <button
                                            @click.stop="toggleMenu(firm.id)"
                                            class="p-3 hover:bg-white rounded-xl transition-all border border-transparent hover:border-gray-100 hover:shadow-sm"
                                        >
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-5 h-5 text-gray-400">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.75a.75.75 0 1 1 0-1.5.75.75 0 0 1 0 1.5ZM12 12.75a.75.75 0 1 1 0-1.5.75.75 0 0 1 0 1.5ZM12 18.75a.75.75 0 1 1 0-1.5.75.75 0 0 1 0 1.5Z" />
                                            </svg>
                                        </button>

                                        <!-- Context Menu -->
                                        <div
                                            v-if="activeMenuId === firm.id"
                                            class="absolute right-8 top-20 w-64 bg-white rounded-3xl shadow-2xl shadow-blue-900/10 border border-gray-100 p-3 z-[100] text-left animate-in fade-in zoom-in duration-200"
                                        >
                                            <Link :href="route('admin.firms.show', firm.id)" class="flex items-center gap-3 w-full px-5 py-4 text-[10px] font-black text-gray-600 hover:text-[#0A2C5C] hover:bg-gray-50 rounded-2xl transition-all uppercase tracking-widest group">
                                                <div class="w-8 h-8 rounded-xl bg-blue-50 flex items-center justify-center group-hover:bg-[#0A2C5C] transition-colors">
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-4 h-4 group-hover:text-white transition-colors">
                                                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 0 1 0-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178Z" />
                                                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 12.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                                    </svg>
                                                </div>
                                                Podgląd firmy
                                            </Link>
                                            <Link :href="route('admin.firms.edit', firm.id)" class="flex items-center gap-3 w-full px-5 py-4 text-[10px] font-black text-gray-600 hover:text-[#0A2C5C] hover:bg-gray-50 rounded-2xl transition-all uppercase tracking-widest group">
                                                <div class="w-8 h-8 rounded-xl bg-blue-50 flex items-center justify-center group-hover:bg-[#0A2C5C] transition-colors">
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-4 h-4 group-hover:text-white transition-colors">
                                                        <path stroke-linecap="round" stroke-linejoin="round" d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" />
                                                    </svg>
                                                </div>
                                                Edytuj dane
                                            </Link>
                                            <button @click="changeStatus(firm.id)" class="flex items-center gap-3 w-full px-5 py-4 text-[10px] font-black text-gray-600 hover:text-[#0A2C5C] hover:bg-gray-50 rounded-2xl transition-all uppercase tracking-widest group">
                                                <div class="w-8 h-8 rounded-xl bg-blue-50 flex items-center justify-center group-hover:bg-[#0A2C5C] transition-colors">
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-4 h-4 group-hover:text-white transition-colors">
                                                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12c0 1.268-.63 2.39-1.593 3.068a3.745 3.745 0 0 1-1.043 3.296 3.745 3.745 0 0 1-3.296 1.043A3.745 3.745 0 0 1 12 21c-1.268 0-2.39-.63-3.068-1.593a3.746 3.746 0 0 1-3.296-1.043 3.745 3.745 0 0 1-1.043-3.296A3.745 3.745 0 0 1 3 12c0-1.268.63-2.39 1.593-3.068a3.745 3.745 0 0 1 1.043-3.296 3.746 3.746 0 0 1 3.296-1.043A3.746 3.746 0 0 1 12 3c1.268 0 2.39.63 3.068 1.593a3.746 3.746 0 0 1 3.296 1.043 3.746 3.746 0 0 1 1.043 3.296A3.745 3.745 0 0 1 21 12Z" />
                                                    </svg>
                                                </div>
                                                Zmień status
                                            </button>
                                            <button v-if="!firm.email_verified_at" @click="verifyEmail(firm.id)" class="flex items-center gap-3 w-full px-5 py-4 text-[10px] font-black text-gray-600 hover:text-[#0A2C5C] hover:bg-gray-50 rounded-2xl transition-all uppercase tracking-widest group">
                                                <div class="w-8 h-8 rounded-xl bg-blue-50 flex items-center justify-center group-hover:bg-[#0A2C5C] transition-colors">
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-4 h-4 group-hover:text-white transition-colors">
                                                        <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 0 1-2.25 2.25h-15a2.25 2.25 0 0 1-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25m19.5 0v.243a2.25 2.25 0 0 1-1.07 1.916l-7.5 4.615a2.25 2.25 0 0 1-2.36 0L3.32 8.91a2.25 2.25 0 0 1-1.07-1.916V6.75" />
                                                    </svg>
                                                </div>
                                                Zatwierdź email
                                            </button>
                                            <Link :href="route('admin.firms.manageCredits', firm.id)" class="flex items-center gap-3 w-full px-5 py-4 text-[10px] font-black text-gray-600 hover:text-[#0A2C5C] hover:bg-gray-50 rounded-2xl transition-all uppercase tracking-widest group">
                                                <div class="w-8 h-8 rounded-xl bg-blue-50 flex items-center justify-center group-hover:bg-[#0A2C5C] transition-colors">
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-4 h-4 group-hover:text-white transition-colors">
                                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v12m-3-2.818.879.659c1.171.879 3.07.879 4.242 0 1.172-.879 1.172-2.303 0-3.182C13.536 12.219 12.768 12 12 12c-.725 0-1.45-.22-2.003-.659-1.106-.879-1.106-2.303 0-3.182s2.9-.879 4.006 0l.415.33M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                                    </svg>
                                                </div>
                                                Zarządzaj kredytami
                                            </Link>
                                            <div class="h-px bg-gray-50 my-2"></div>
                                            <Link :href="route('admin.firms.offers', firm.id)" class="flex items-center gap-3 w-full px-5 py-4 text-[10px] font-black text-gray-600 hover:text-[#0A2C5C] hover:bg-gray-50 rounded-2xl transition-all uppercase tracking-widest group">
                                                <div class="w-8 h-8 rounded-xl bg-blue-50 flex items-center justify-center group-hover:bg-[#0A2C5C] transition-colors">
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-4 h-4 group-hover:text-white transition-colors">
                                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 7.5h1.5m-1.5 3h1.5m-7.5 3h7.5m-7.5 3h7.5m3-9h3.375c.621 0 1.125.504 1.125 1.125V18a2.25 2.25 0 0 1-2.25 2.25M16.5 7.5V18a2.25 2.25 0 0 0 2.25 2.25M16.5 7.5V4.875c0-.621-.504-1.125-1.125-1.125H4.125C3.504 3.75 3 4.254 3 4.875V18a2.25 2.25 0 0 0 2.25 2.25h13.5M6 7.5h3v3H6v-3Z" />
                                                    </svg>
                                                </div>
                                                Przejdź do ofert
                                            </Link>
                                            <Link :href="route('admin.firms.recruiters', firm.id)" class="flex items-center gap-3 w-full px-5 py-4 text-[10px] font-black text-gray-600 hover:text-[#0A2C5C] hover:bg-gray-50 rounded-2xl transition-all uppercase tracking-widest group">
                                                <div class="w-8 h-8 rounded-xl bg-blue-50 flex items-center justify-center group-hover:bg-[#0A2C5C] transition-colors">
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-4 h-4 group-hover:text-white transition-colors">
                                                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" />
                                                    </svg>
                                                </div>
                                                Zobacz rekruterów
                                            </Link>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <!-- Pagination -->
                    <div class="bg-gray-50/50 p-8 border-t border-gray-100 flex items-center justify-between">
                        <Pagination :links="firms.links" />
                        <p class="text-[10px] font-black text-gray-400 uppercase tracking-widest">
                            Wyświetlono {{ firms.from }}-{{ firms.to }} z {{ firms.total }} firm
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </AppLayout>
</template>

<style scoped>
select {
    background-image: none;
}
</style>
