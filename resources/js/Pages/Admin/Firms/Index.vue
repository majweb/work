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
            <div class="max-w-[80vw] mx-auto sm:px-6 lg:px-8">
                <!-- Title -->
                <h1 class="text-4xl font-black text-[#0A2C5C] mb-8">Lista firm</h1>

                <!-- Stats Cards -->
                <div class="flex gap-6 mb-12">
                    <div class="bg-white rounded-3xl shadow-xl shadow-blue-900/5 border border-gray-100 p-6 flex items-center gap-6 flex-1 max-w-xs">
                        <div class="w-16 h-16 bg-blue-50 rounded-2xl flex items-center justify-center">
                             <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor" class="w-8 h-8 text-blue-500">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12c0 1.268-.63 2.39-1.593 3.068a3.745 3.745 0 0 1-1.043 3.296 3.745 3.745 0 0 1-3.296 1.043A3.745 3.745 0 0 1 12 21c-1.268 0-2.39-.63-3.068-1.593a3.746 3.746 0 0 1-3.296-1.043 3.745 3.745 0 0 1-1.043-3.296A3.745 3.745 0 0 1 3 12c0-1.268.63-2.39 1.593-3.068a3.745 3.745 0 0 1 1.043-3.296 3.746 3.746 0 0 1 3.296-1.043A3.746 3.746 0 0 1 12 3c1.268 0 2.39.63 3.068 1.593a3.746 3.746 0 0 1 3.296 1.043 3.746 3.746 0 0 1 1.043 3.296A3.745 3.745 0 0 1 21 12Z" />
                            </svg>
                        </div>
                        <div>
                            <div class="text-3xl font-black text-[#0A2C5C]">{{ stats.verified }}</div>
                            <div class="text-[10px] font-bold text-gray-400 uppercase tracking-widest">Zweryfikowanych</div>
                        </div>
                    </div>

                    <div class="bg-white rounded-3xl shadow-xl shadow-blue-900/5 border border-gray-100 p-6 flex items-center gap-6 flex-1 max-w-xs">
                        <div class="w-16 h-16 bg-red-50 rounded-2xl flex items-center justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor" class="w-8 h-8 text-red-400">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m9.75 9.75 4.5 4.5m0-4.5-4.5 4.5M21 12c0 1.268-.63 2.39-1.593 3.068a3.745 3.745 0 0 1-1.043 3.296 3.745 3.745 0 0 1-3.296 1.043A3.745 3.745 0 0 1 12 21c-1.268 0-2.39-.63-3.068-1.593a3.746 3.746 0 0 1-3.296-1.043 3.745 3.745 0 0 1-1.043-3.296A3.745 3.745 0 0 1 3 12c0-1.268.63-2.39 1.593-3.068a3.745 3.745 0 0 1 1.043-3.296 3.746 3.746 0 0 1 3.296-1.043A3.746 3.746 0 0 1 12 3c1.268 0 2.39.63 3.068 1.593a3.746 3.746 0 0 1 3.296 1.043 3.746 3.746 0 0 1 1.043 3.296A3.745 3.745 0 0 1 21 12Z" />
                            </svg>
                        </div>
                        <div>
                            <div class="text-3xl font-black text-[#0A2C5C]">{{ stats.unverified }}</div>
                            <div class="text-[10px] font-bold text-gray-400 uppercase tracking-widest">Niezweryfikowanych</div>
                        </div>
                    </div>

                    <div class="bg-white rounded-3xl shadow-xl shadow-blue-900/5 border border-gray-100 p-6 flex items-center gap-6 flex-1 max-w-xs relative">
                        <div class="w-16 h-16 bg-blue-50 rounded-2xl flex items-center justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor" class="w-8 h-8 text-blue-500">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 5.25v13.5m-7.5-13.5v13.5" />
                            </svg>
                        </div>
                        <div>
                            <div class="text-3xl font-black text-[#0A2C5C]">{{ stats.blocked }}</div>
                            <div class="text-[10px] font-bold text-gray-400 uppercase tracking-widest">Zawieszonych</div>
                        </div>
                        <div class="absolute -top-2 -right-2 w-6 h-6 bg-red-500 rounded-full flex items-center justify-center text-white text-[10px] font-bold border-4 border-white shadow-lg">!</div>
                    </div>

                    <div class="flex-1 flex flex-wrap justify-end items-end gap-4 pb-2">
                        <!-- Country Filter -->
                        <div class="relative w-40">
                            <select v-model="country" class="w-full bg-white border border-gray-200 rounded-xl px-4 py-3 text-[10px] font-bold text-[#0A2C5C] appearance-none focus:ring-blue-500 focus:border-blue-500">
                                <option :value="null">Kraj: Wszystkie</option>
                                <option v-for="c in countries" :key="c" :value="c">{{ c }}</option>
                            </select>
                            <div class="absolute inset-y-0 right-3 flex items-center pointer-events-none">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-3 h-3 text-[#0A2C5C]">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5" />
                                </svg>
                            </div>
                        </div>

                        <!-- Status Filter -->
                        <div class="relative w-48">
                            <select v-model="status" class="w-full bg-white border border-gray-200 rounded-xl px-4 py-3 text-[10px] font-bold text-[#0A2C5C] appearance-none focus:ring-blue-500 focus:border-blue-500">
                                <option :value="null">Status: Wszystkie</option>
                                <option value="verified">Zweryfikowane</option>
                                <option value="unverified">Niezweryfikowane</option>
                                <option value="blocked">Zawieszone</option>
                            </select>
                            <div class="absolute inset-y-0 right-4 flex items-center pointer-events-none">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-4 h-4 text-[#0A2C5C]">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5" />
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Main Card -->
                <div class="bg-white rounded-[3rem] shadow-xl shadow-blue-900/5 border border-gray-100 p-10 relative">
                    <!-- Actions Bar -->
                    <div class="flex flex-wrap items-center justify-between gap-6 mb-10">
                        <div class="flex flex-wrap gap-4 items-center">
                            <!-- Credits Filter -->
                            <div class="flex items-center gap-2">
                                <span class="text-[9px] font-black text-gray-400 uppercase tracking-widest">Kredyty:</span>
                                <input v-model="creditsMin" type="number" placeholder="Od" class="w-20 bg-gray-50 border-none rounded-xl px-3 py-2 text-[10px] font-bold text-[#0A2C5C] focus:ring-1 focus:ring-blue-500/20" />
                                <input v-model="creditsMax" type="number" placeholder="Do" class="w-20 bg-gray-50 border-none rounded-xl px-3 py-2 text-[10px] font-bold text-[#0A2C5C] focus:ring-1 focus:ring-blue-500/20" />
                            </div>
                            <!-- Offers Filter -->
                            <div class="flex items-center gap-2 ml-4">
                                <span class="text-[9px] font-black text-gray-400 uppercase tracking-widest">Oferty:</span>
                                <input v-model="offersMin" type="number" placeholder="Od" class="w-20 bg-gray-50 border-none rounded-xl px-3 py-2 text-[10px] font-bold text-[#0A2C5C] focus:ring-1 focus:ring-blue-500/20" />
                                <input v-model="offersMax" type="number" placeholder="Do" class="w-20 bg-gray-50 border-none rounded-xl px-3 py-2 text-[10px] font-bold text-[#0A2C5C] focus:ring-1 focus:ring-blue-500/20" />
                            </div>
                            <!-- Registration Date Filter -->
                            <div class="flex items-center gap-2 ml-4">
                                <span class="text-[9px] font-black text-gray-400 uppercase tracking-widest">Rejestracja:</span>
                                <input v-model="dateFrom" type="date" class="w-32 bg-gray-50 border-none rounded-xl px-3 py-2 text-[10px] font-bold text-[#0A2C5C] focus:ring-1 focus:ring-blue-500/20" />
                                <input v-model="dateTo" type="date" class="w-32 bg-gray-50 border-none rounded-xl px-3 py-2 text-[10px] font-bold text-[#0A2C5C] focus:ring-1 focus:ring-blue-500/20" />
                            </div>
                        </div>

                        <div class="flex gap-8">
                            <button @click="exportCsv" class="text-blue-500 text-[11px] font-black uppercase tracking-widest hover:text-blue-700 transition-colors">Eksportuj</button>
                            <div class="relative group/sort">
                                <button class="text-blue-500 text-[11px] font-black uppercase tracking-widest hover:text-blue-700 transition-colors flex items-center gap-2">
                                    Sortuj
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor" class="w-3 h-3 transition-transform duration-200" :class="{'rotate-180': props.filters.direction === 'desc'}">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5" />
                                    </svg>
                                </button>
                                <div class="absolute right-0 mt-2 w-48 bg-white rounded-2xl shadow-2xl border border-gray-100 py-4 z-50 invisible group-hover/sort:visible opacity-0 group-hover/sort:opacity-100 transition-all duration-200">
                                    <button @click="sort(null)" class="w-full text-left px-6 py-2 text-[10px] font-bold text-[#0A2C5C] hover:bg-gray-50 uppercase tracking-widest flex items-center justify-between">
                                        Brak sortowania
                                        <span v-if="!props.filters.sort">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor" class="w-3 h-3 text-blue-500">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                                            </svg>
                                        </span>
                                    </button>
                                    <div class="h-px bg-gray-100 my-2"></div>
                                    <button @click="sort('name')" class="w-full text-left px-6 py-2 text-[10px] font-bold text-[#0A2C5C] hover:bg-gray-50 uppercase tracking-widest flex items-center justify-between">
                                        Nazwa
                                        <span v-if="props.filters.sort === 'name'">
                                            <svg v-if="props.filters.direction === 'asc'" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor" class="w-3 h-3">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 15.75 7.5-7.5 7.5 7.5" />
                                            </svg>
                                            <svg v-else xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor" class="w-3 h-3">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5" />
                                            </svg>
                                        </span>
                                    </button>
                                    <button @click="sort('offers_count')" class="w-full text-left px-6 py-2 text-[10px] font-bold text-[#0A2C5C] hover:bg-gray-50 uppercase tracking-widest flex items-center justify-between">
                                        Liczba ofert
                                        <span v-if="props.filters.sort === 'offers_count'">
                                            <svg v-if="props.filters.direction === 'asc'" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor" class="w-3 h-3">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 15.75 7.5-7.5 7.5 7.5" />
                                            </svg>
                                            <svg v-else xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor" class="w-3 h-3">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5" />
                                            </svg>
                                        </span>
                                    </button>
                                    <button @click="sort('recruiters_count')" class="w-full text-left px-6 py-2 text-[10px] font-bold text-[#0A2C5C] hover:bg-gray-50 uppercase tracking-widest flex items-center justify-between">
                                        Liczba rekruterów
                                        <span v-if="props.filters.sort === 'recruiters_count'">
                                            <svg v-if="props.filters.direction === 'asc'" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor" class="w-3 h-3">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 15.75 7.5-7.5 7.5 7.5" />
                                            </svg>
                                            <svg v-else xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor" class="w-3 h-3">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5" />
                                            </svg>
                                        </span>
                                    </button>
                                    <button @click="sort('kredyty')" class="w-full text-left px-6 py-2 text-[10px] font-bold text-[#0A2C5C] hover:bg-gray-50 uppercase tracking-widest flex items-center justify-between">
                                        Kredyty
                                        <span v-if="props.filters.sort === 'kredyty'">
                                            <svg v-if="props.filters.direction === 'asc'" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor" class="w-3 h-3">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 15.75 7.5-7.5 7.5 7.5" />
                                            </svg>
                                            <svg v-else xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor" class="w-3 h-3">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5" />
                                            </svg>
                                        </span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Search Input (Added for better UX) -->
                    <div class="mb-6">
                        <input
                            v-model="search"
                            type="text"
                            placeholder="Szukaj firmy po nazwie, mieście lub kraju..."
                            class="w-full bg-gray-50 border-none rounded-2xl px-6 py-4 text-xs font-bold text-[#0A2C5C] focus:ring-2 focus:ring-blue-500/20"
                        />
                    </div>

                    <!-- Table -->
                    <div class="min-h-[600px]">
                        <table class="min-w-full">
                            <thead>
                                <tr class="bg-gray-50/80 rounded-2xl">
                                    <th class="pl-6 py-5 text-left rounded-l-2xl">
                                        <input
                                            type="checkbox"
                                            @change="toggleSelectAll"
                                            class="w-4 h-4 rounded border-gray-300 text-blue-600 focus:ring-blue-500"
                                        />
                                    </th>
                                    <th @click="sort('name')" class="px-4 py-5 text-left text-[11px] font-black text-[#0A2C5C] uppercase tracking-widest cursor-pointer group/th">
                                        <div class="flex items-center gap-1">
                                            Nazwa
                                            <span class="transition-opacity" :class="props.filters.sort === 'name' ? 'opacity-100' : 'opacity-0 group-hover/th:opacity-50'">
                                                <svg v-if="props.filters.sort === 'name' && props.filters.direction === 'desc'" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="3" stroke="currentColor" class="w-3 h-3">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5" />
                                                </svg>
                                                <svg v-else xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="3" stroke="currentColor" class="w-3 h-3">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 15.75 7.5-7.5 7.5 7.5" />
                                                </svg>
                                            </span>
                                        </div>
                                    </th>
                                    <th class="px-4 py-5 text-left text-[11px] font-black text-[#0A2C5C] uppercase tracking-widest">Kraj</th>
                                    <th @click="sort('recruiters_count')" class="px-4 py-5 text-left text-[11px] font-black text-[#0A2C5C] uppercase tracking-widest cursor-pointer group/th">
                                        <div class="flex items-center gap-1">
                                            Rekruterzy
                                            <span class="transition-opacity" :class="props.filters.sort === 'recruiters_count' ? 'opacity-100' : 'opacity-0 group-hover/th:opacity-50'">
                                                <svg v-if="props.filters.sort === 'recruiters_count' && props.filters.direction === 'desc'" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="3" stroke="currentColor" class="w-3 h-3">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5" />
                                                </svg>
                                                <svg v-else xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="3" stroke="currentColor" class="w-3 h-3">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 15.75 7.5-7.5 7.5 7.5" />
                                                </svg>
                                            </span>
                                        </div>
                                    </th>
                                    <th @click="sort('offers_count')" class="px-4 py-5 text-left text-[11px] font-black text-[#0A2C5C] uppercase tracking-widest cursor-pointer group/th">
                                        <div class="flex items-center gap-1">
                                            Oferty pracy
                                            <span class="transition-opacity" :class="props.filters.sort === 'offers_count' ? 'opacity-100' : 'opacity-0 group-hover/th:opacity-50'">
                                                <svg v-if="props.filters.sort === 'offers_count' && props.filters.direction === 'desc'" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="3" stroke="currentColor" class="w-3 h-3">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5" />
                                                </svg>
                                                <svg v-else xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="3" stroke="currentColor" class="w-3 h-3">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 15.75 7.5-7.5 7.5 7.5" />
                                                </svg>
                                            </span>
                                        </div>
                                    </th>
                                    <th class="px-4 py-5 text-left text-[11px] font-black text-[#0A2C5C] uppercase tracking-widest">Status</th>
                                    <th @click="sort('kredyty')" class="px-4 py-5 text-left text-[11px] font-black text-[#0A2C5C] uppercase tracking-widest cursor-pointer group/th">
                                        <div class="flex items-center gap-1">
                                            Kredyty
                                            <span class="transition-opacity" :class="props.filters.sort === 'kredyty' ? 'opacity-100' : 'opacity-0 group-hover/th:opacity-50'">
                                                <svg v-if="props.filters.sort === 'kredyty' && props.filters.direction === 'desc'" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="3" stroke="currentColor" class="w-3 h-3">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5" />
                                                </svg>
                                                <svg v-else xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="3" stroke="currentColor" class="w-3 h-3">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 15.75 7.5-7.5 7.5 7.5" />
                                                </svg>
                                            </span>
                                        </div>
                                    </th>
                                    <th class="px-4 py-5 text-right pr-10 text-[11px] font-black text-[#0A2C5C] uppercase tracking-widest rounded-r-2xl">Akcje</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-50">
                                <tr v-for="firm in firms.data" :key="firm.id" class="group hover:bg-gray-50/30 transition-colors">
                                    <td class="pl-6 py-6">
                                        <input
                                            v-model="selectedIds"
                                            :value="firm.id"
                                            type="checkbox"
                                            class="w-4 h-4 rounded border-gray-300 text-blue-600 focus:ring-blue-500"
                                        />
                                    </td>
                                    <td class="px-4 py-6">
                                        <div class="flex items-center gap-3">
                                            <div class="w-10 h-10 rounded-xl bg-white shadow-sm border border-gray-100 flex items-center justify-center p-1 overflow-hidden">
                                                <img v-if="firm.logo" :src="firm.logo" class="max-w-full max-h-full object-contain" />
                                                <div v-else class="text-[10px] font-black text-gray-300 uppercase">Logo</div>
                                            </div>
                                            <div class="flex flex-col">
                                                <span class="text-xs font-black text-[#0A2C5C] uppercase tracking-tight">{{ firm.name }}</span>
                                                <span class="text-[8px] font-bold text-gray-400 uppercase tracking-widest">{{ firm.email }}</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-4 py-6">
                                        <span class="text-xs font-black text-blue-700 uppercase tracking-tight">{{ firm.country }}</span>
                                    </td>
                                    <td class="px-4 py-6">
                                        <div class="flex items-center gap-2">
                                            <div class="w-8 h-8 rounded-lg bg-gray-50 border border-gray-100 flex items-center justify-center">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-4 h-4 text-gray-400">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" />
                                                </svg>
                                            </div>
                                            <span class="text-xs font-black text-[#0A2C5C]">{{ firm.recruiters_count }}</span>
                                        </div>
                                    </td>
                                    <td class="px-4 py-6">
                                        <div class="flex items-center gap-2">
                                            <div class="w-8 h-8 rounded-lg bg-gray-50 border border-gray-100 flex items-center justify-center">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-4 h-4 text-gray-400">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 7.5h1.5m-1.5 3h1.5m-7.5 3h7.5m-7.5 3h7.5m3-9h3.375c.621 0 1.125.504 1.125 1.125V18a2.25 2.25 0 0 1-2.25 2.25M16.5 7.5V18a2.25 2.25 0 0 0 2.25 2.25M16.5 7.5V4.875c0-.621-.504-1.125-1.125-1.125H4.125C3.504 3.75 3 4.254 3 4.875V18a2.25 2.25 0 0 0 2.25 2.25h13.5M6 7.5h3v3H6v-3Z" />
                                                </svg>
                                            </div>
                                            <span class="text-xs font-black text-[#0A2C5C]">{{ firm.projects_count }}</span>
                                        </div>
                                    </td>
                                    <td class="px-4 py-6">
                                        <div
                                            class="inline-flex items-center gap-2 px-4 py-2 rounded-full border text-[9px] font-black uppercase tracking-widest shadow-sm"
                                            :class="getStatusClass(firm.status)"
                                        >
                                            <div class="w-2 h-2 rounded-full" :class="getStatusDotClass(firm.status)"></div>
                                            {{ getStatusLabel(firm.status) }}
                                        </div>
                                    </td>
                                    <td class="px-4 py-6">
                                        <span class="text-xs font-black text-[#0A2C5C] uppercase tracking-tight">{{ firm.points }}</span>
                                    </td>
                                    <td class="px-4 py-6 text-right pr-10">
                                        <div class="relative inline-block text-left ml-auto context-menu-container">
                                            <button @click.stop="toggleMenu(firm.id)" class="w-10 h-10 rounded-xl bg-[#0A2C5C] flex items-center justify-center text-white hover:bg-blue-800 transition-colors shadow-lg shadow-blue-900/10 ml-auto">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor" class="w-4 h-4">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 12a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0ZM12.75 12a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0ZM18.75 12a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Z" />
                                                </svg>
                                            </button>

                                            <!-- Context Menu -->
                                            <div v-if="activeMenuId === firm.id" class="absolute right-0 mt-2 w-56 bg-white rounded-2xl shadow-2xl border border-gray-100 py-4 z-[100] animate-in fade-in zoom-in duration-200">
                                            <Link :href="route('admin.firms.show', firm.id)" class="flex items-center gap-3 px-6 py-3 text-[10px] font-bold text-[#0A2C5C] hover:bg-gray-50 uppercase tracking-widest transition-colors">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-4 h-4 text-blue-500">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 0 1 0-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178Z" />
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                                </svg>
                                                Podgląd firmy
                                            </Link>
                                            <Link :href="route('admin.firms.edit', firm.id)" class="flex items-center gap-3 px-6 py-3 text-[10px] font-bold text-[#0A2C5C] hover:bg-gray-50 uppercase tracking-widest transition-colors">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-4 h-4 text-orange-400">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" />
                                                </svg>
                                                Edytuj dane
                                            </Link>
                                            <button @click="changeStatus(firm.id)" class="w-full flex items-center gap-3 px-6 py-3 text-[10px] font-bold text-[#0A2C5C] hover:bg-gray-50 uppercase tracking-widest transition-colors">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-4 h-4 text-green-500">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12c0 1.268-.63 2.39-1.593 3.068a3.745 3.745 0 0 1-1.043 3.296 3.745 3.745 0 0 1-3.296 1.043A3.745 3.745 0 0 1 12 21c-1.268 0-2.39-.63-3.068-1.593a3.746 3.746 0 0 1-3.296-1.043 3.745 3.745 0 0 1-1.043-3.296A3.745 3.745 0 0 1 3 12c0-1.268.63-2.39 1.593-3.068a3.745 3.745 0 0 1 1.043-3.296 3.746 3.746 0 0 1 3.296-1.043A3.746 3.746 0 0 1 12 3c1.268 0 2.39.63 3.068 1.593a3.746 3.746 0 0 1 3.296 1.043 3.746 3.746 0 0 1 1.043 3.296A3.745 3.745 0 0 1 21 12Z" />
                                                </svg>
                                                Zmień status
                                            </button>
                                            <button v-if="!firm.email_verified_at" @click="verifyEmail(firm.id)" class="w-full flex items-center gap-3 px-6 py-3 text-[10px] font-bold text-[#0A2C5C] hover:bg-gray-50 uppercase tracking-widest transition-colors">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-4 h-4 text-blue-400">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 0 1-2.25 2.25h-15a2.25 2.25 0 0 1-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25m19.5 0v.243a2.25 2.25 0 0 1-1.07 1.916l-7.5 4.615a2.25 2.25 0 0 1-2.36 0L3.32 8.91a2.25 2.25 0 0 1-1.07-1.916V6.75" />
                                                </svg>
                                                Zatwierdź email
                                            </button>
                                            <Link :href="route('admin.firms.manageCredits', firm.id)" class="w-full flex items-center gap-3 px-6 py-3 text-[10px] font-bold text-[#0A2C5C] hover:bg-gray-50 uppercase tracking-widest transition-colors">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-4 h-4 text-yellow-500">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v12m-3-2.818.879.659c1.171.879 3.07.879 4.242 0 1.172-.879 1.172-2.303 0-3.182C13.536 12.219 12.768 12 12 12c-.725 0-1.45-.22-2.003-.659-1.106-.879-1.106-2.303 0-3.182s2.9-.879 4.006 0l.415.33M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                                </svg>
                                                Zarządzaj kredytami
                                            </Link>
                                            <div class="h-px bg-gray-50 my-2 mx-6"></div>
                                            <Link :href="route('admin.firms.offers', firm.id)" class="flex items-center gap-3 px-6 py-3 text-[10px] font-bold text-[#0A2C5C] hover:bg-gray-50 uppercase tracking-widest transition-colors">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-4 h-4 text-purple-500">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 7.5h1.5m-1.5 3h1.5m-7.5 3h7.5m-7.5 3h7.5m3-9h3.375c.621 0 1.125.504 1.125 1.125V18a2.25 2.25 0 0 1-2.25 2.25M16.5 7.5V18a2.25 2.25 0 0 0 2.25 2.25M16.5 7.5V4.875c0-.621-.504-1.125-1.125-1.125H4.125C3.504 3.75 3 4.254 3 4.875V18a2.25 2.25 0 0 0 2.25 2.25h13.5M6 7.5h3v3H6v-3Z" />
                                                </svg>
                                                Przejdź do ofert
                                            </Link>
                                            <Link :href="route('admin.firms.recruiters', firm.id)" class="flex items-center gap-3 px-6 py-3 text-[10px] font-bold text-[#0A2C5C] hover:bg-gray-50 uppercase tracking-widest transition-colors">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-4 h-4 text-teal-500">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" />
                                                </svg>
                                                Zobacz rekruterów
                                            </Link>
                                        </div>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <!-- Footer / Pagination -->
                    <div class="mt-12 flex items-center justify-between px-2">
                        <div class="text-[10px] font-bold text-gray-400 uppercase tracking-widest">
                            {{ firms.from }} - {{ firms.to }} z {{ firms.total }}
                        </div>
                        <Pagination :links="firms.links" />
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
