<script setup>
import { ref, watch } from 'vue';
import { Link, router, usePage } from '@inertiajs/vue3';
import { pickBy, throttle } from 'lodash';
import AppLayout from '@/Layouts/AppLayout.vue';
import Pagination from '@/Components/Pagination.vue';

const props = defineProps({
    externalCompanies: Object,
    filters: Object,
    agencies: Array,
});

const filters = ref({
    search: props.filters.search || '',
    agency: props.filters.agency || '',
    date_from: props.filters.date_from || '',
    date_to: props.filters.date_to || '',
    sort: props.filters.sort || 'created_at',
    direction: props.filters.direction || 'desc',
});

const activeMenuId = ref(null);
const selectedIds = ref([]);

const toggleSelectAll = (e) => {
    if (e.target.checked) {
        selectedIds.value = props.externalCompanies.data.map(c => c.id);
    } else {
        selectedIds.value = [];
    }
};

const updateFilters = throttle(() => {
    router.get(route('admin.external-companies.index'), pickBy(filters.value), {
        preserveState: true,
        preserveScroll: true,
        replace: true,
    });
}, 300);

watch(filters, () => {
    updateFilters();
}, { deep: true });

const sort = (field) => {
    if (filters.value.sort === field) {
        if (filters.value.direction === 'asc') {
            filters.value.direction = 'desc';
        } else if (filters.value.direction === 'desc') {
            filters.value.sort = 'none';
            filters.value.direction = 'desc';
        } else {
            filters.value.direction = 'asc';
        }
    } else {
        filters.value.sort = field;
        filters.value.direction = 'asc';
    }
};

const resetFilters = () => {
    filters.value = {
        search: '',
        agency: '',
        date_from: '',
        date_to: '',
        sort: 'created_at',
        direction: 'desc',
    };
};

const exportCsv = (format = 'csv') => {
    const params = pickBy({
        ...filters.value,
        ids: selectedIds.value.length > 0 ? selectedIds.value.join(',') : null,
        format: format
    });
    window.location.href = route('admin.external-companies.export', params);
};

const toggleMenu = (id) => {
    activeMenuId.value = activeMenuId.value === id ? null : id;
};

// Close menu on outside click
if (typeof window !== 'undefined') {
    window.addEventListener('click', (e) => {
        if (!e.target.closest('.context-menu-container')) {
            activeMenuId.value = null;
        }
    });
}
</script>

<template>
    <AppLayout title="Firmy zewnętrzne">
        <div class="py-12 bg-gray-50/50 min-h-screen">
            <div class="max-w-[1600px] mx-auto sm:px-6 lg:px-8">

                <!-- Header Section -->
                <div class="bg-white rounded-[3rem] shadow-xl shadow-blue-900/5 border border-gray-100 p-10 mb-8">
                    <div class="flex flex-col md:flex-row md:items-center justify-between gap-6">
                        <div>
                            <div class="flex items-center gap-4 mb-2">
                                <div>
                                    <h3 class="text-2xl font-black text-[#0A2C5C] uppercase tracking-tight">Firmy zewnętrzne</h3>
                                    <p class="text-[10px] font-bold text-gray-400 uppercase tracking-widest mt-1">Zarządzanie bazą firm zewnętrznych powiązanych z agencjami</p>
                                </div>
                            </div>
                        </div>

                        <div class="flex items-center gap-4">
                            <button
                                @click="exportCsv('csv')"
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

                <!-- Filters Section -->
                <div class="bg-white rounded-[2.5rem] shadow-xl shadow-blue-900/5 border border-gray-100 p-8 mb-8">
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                        <!-- Search -->
                        <div class="space-y-2">
                            <label class="text-[10px] font-black text-gray-400 uppercase tracking-widest ml-2">Wyszukaj</label>
                            <div class="relative group">
                                <input
                                    v-model="filters.search"
                                    type="text"
                                    placeholder="Nazwa, email, skrót..."
                                    class="w-full pl-12 pr-4 py-4 bg-gray-50 border-none rounded-2xl text-xs font-bold focus:ring-2 focus:ring-[#0A2C5C]/10 transition-all placeholder:text-gray-300"
                                />
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-5 h-5 text-gray-300 absolute left-4 top-1/2 -translate-y-1/2 group-focus-within:text-[#0A2C5C] transition-colors">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
                                </svg>
                            </div>
                        </div>

                        <!-- Agency -->
                        <div class="space-y-2">
                            <label class="text-[10px] font-black text-gray-400 uppercase tracking-widest ml-2">Agencja</label>
                            <select
                                v-model="filters.agency"
                                class="w-full px-4 py-4 bg-gray-50 border-none rounded-2xl text-xs font-bold focus:ring-2 focus:ring-[#0A2C5C]/10 transition-all"
                            >
                                <option value="">Wszystkie agencje</option>
                                <option v-for="agency in agencies" :key="agency" :value="agency">{{ agency }}</option>
                            </select>
                        </div>

                        <!-- Date Range -->
                        <div class="space-y-2">
                            <label class="text-[10px] font-black text-gray-400 uppercase tracking-widest ml-2">Data od</label>
                            <input
                                v-model="filters.date_from"
                                type="date"
                                class="w-full px-4 py-4 bg-gray-50 border-none rounded-2xl text-xs font-bold focus:ring-2 focus:ring-[#0A2C5C]/10 transition-all"
                            />
                        </div>

                        <div class="space-y-2">
                            <label class="text-[10px] font-black text-gray-400 uppercase tracking-widest ml-2">Data do</label>
                            <div class="flex items-center gap-4">
                                <input
                                    v-model="filters.date_to"
                                    type="date"
                                    class="w-full px-4 py-4 bg-gray-50 border-none rounded-2xl text-xs font-bold focus:ring-2 focus:ring-[#0A2C5C]/10 transition-all"
                                />
                                <button
                                    @click="resetFilters"
                                    class="shrink-0 p-4 bg-red-50 text-red-400 rounded-2xl hover:bg-red-100 transition-colors"
                                    title="Resetuj filtry"
                                >
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-5 h-5">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Table Section -->
                <div class="bg-white rounded-[3rem] shadow-xl shadow-blue-900/5 border border-gray-100">
                    <div class="overflow-visible">
                        <table class="w-full text-left border-collapse">
                            <thead>
                                <tr class="border-b border-gray-50">
                                    <th class="py-8 px-8 w-10">
                                        <input
                                            type="checkbox"
                                            @change="toggleSelectAll"
                                            class="rounded-lg border-gray-200 text-[#0A2C5C] focus:ring-[#0A2C5C]/10 w-5 h-5"
                                        />
                                    </th>
                                    <th @click="sort('name')" class="py-8 px-6 text-[10px] font-black text-gray-400 uppercase tracking-widest cursor-pointer group whitespace-nowrap">
                                        Firma
                                        <span class="inline-block ml-2 transition-all" :class="{ 'rotate-180': filters.sort === 'name' && filters.direction === 'desc', 'opacity-0 group-hover:opacity-100': filters.sort !== 'name' }">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-3 h-3 text-[#0A2C5C]">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 15.75l7.5-7.5 7.5 7.5" />
                                            </svg>
                                        </span>
                                    </th>
                                    <th class="py-8 px-6 text-[10px] font-black text-gray-400 uppercase tracking-widest whitespace-nowrap">Skrót / ID</th>
                                    <th @click="sort('agency_name')" class="py-8 px-6 text-[10px] font-black text-gray-400 uppercase tracking-widest cursor-pointer group whitespace-nowrap">
                                        Agencja
                                        <span class="inline-block ml-2 transition-all" :class="{ 'rotate-180': filters.sort === 'agency_name' && filters.direction === 'desc', 'opacity-0 group-hover:opacity-100': filters.sort !== 'agency_name' }">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-3 h-3 text-[#0A2C5C]">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 15.75l7.5-7.5 7.5 7.5" />
                                            </svg>
                                        </span>
                                    </th>
                                    <th @click="sort('created_at')" class="py-8 px-6 text-[10px] font-black text-gray-400 uppercase tracking-widest cursor-pointer group whitespace-nowrap">
                                        Data dodania
                                        <span class="inline-block ml-2 transition-all" :class="{ 'rotate-180': filters.sort === 'created_at' && filters.direction === 'desc', 'opacity-0 group-hover:opacity-100': filters.sort !== 'created_at' }">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-3 h-3 text-[#0A2C5C]">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 15.75l7.5-7.5 7.5 7.5" />
                                            </svg>
                                        </span>
                                    </th>
                                    <th class="py-8 px-8 text-right w-20"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr
                                    v-for="company in externalCompanies.data"
                                    :key="company.id"
                                    class="border-b border-gray-50 hover:bg-gray-50/50 transition-all group"
                                >
                                    <td class="py-8 px-8">
                                        <input
                                            v-model="selectedIds"
                                            :value="company.id"
                                            type="checkbox"
                                            class="rounded-lg border-gray-200 text-[#0A2C5C] focus:ring-[#0A2C5C]/10 w-5 h-5"
                                        />
                                    </td>
                                    <td class="py-8 px-6">
                                        <div class="flex items-center gap-4">
                                            <div class="w-10 h-10 bg-gray-100 rounded-xl flex items-center justify-center font-black text-[#0A2C5C] text-xs">
                                                {{ company.name.substring(0, 1).toUpperCase() }}
                                            </div>
                                            <div>
                                                <Link :href="route('admin.external-companies.show', company.id)" class="text-sm font-black text-gray-900 uppercase tracking-tight hover:text-[#0A2C5C] transition-colors block">
                                                    {{ company.name }}
                                                </Link>
                                                <span class="text-[10px] font-bold text-gray-400 uppercase tracking-widest">{{ company.email }}</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="py-8 px-6">
                                        <span class="inline-flex px-3 py-1 bg-gray-100 text-[10px] font-black text-gray-500 rounded-lg uppercase tracking-widest">
                                            {{ company.abbreviation || '-' }}
                                        </span>
                                        <p class="text-[8px] font-bold text-gray-300 mt-1 ml-1">ID: #{{ company.id }}</p>
                                    </td>
                                    <td class="py-8 px-6">
                                        <p class="text-xs font-bold text-gray-600 uppercase tracking-widest">{{ company.agency_name }}</p>
                                    </td>
                                    <td class="py-8 px-6">
                                        <p class="text-xs font-bold text-gray-500 tracking-tighter">{{ company.created_at }}</p>
                                    </td>
                                    <td class="py-8 px-8 text-right relative context-menu-container">
                                        <button
                                            @click.stop="toggleMenu(company.id)"
                                            class="p-3 hover:bg-white rounded-xl transition-all border border-transparent hover:border-gray-100 hover:shadow-sm"
                                        >
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-5 h-5 text-gray-400">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.75a.75.75 0 1 1 0-1.5.75.75 0 0 1 0 1.5ZM12 12.75a.75.75 0 1 1 0-1.5.75.75 0 0 1 0 1.5ZM12 18.75a.75.75 0 1 1 0-1.5.75.75 0 0 1 0 1.5Z" />
                                            </svg>
                                        </button>

                                        <!-- Context Menu -->
                                        <div
                                            v-if="activeMenuId === company.id"
                                            class="absolute right-8 top-20 w-64 bg-white rounded-3xl shadow-2xl shadow-blue-900/10 border border-gray-100 p-3 z-[100] text-left"
                                        >
                                            <Link :href="route('admin.external-companies.show', company.id)" class="flex items-center gap-3 w-full px-5 py-4 text-[10px] font-black text-gray-600 hover:text-[#0A2C5C] hover:bg-gray-50 rounded-2xl transition-all uppercase tracking-widest group">
                                                <div class="w-8 h-8 rounded-xl bg-blue-50 flex items-center justify-center group-hover:bg-[#0A2C5C] transition-colors">
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-4 h-4 group-hover:text-white transition-colors">
                                                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 0 1 0-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178Z" />
                                                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 12.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                                    </svg>
                                                </div>
                                                Podgląd szczegółów
                                            </Link>
                                            <Link :href="route('admin.external-companies.edit', company.id)" class="flex items-center gap-3 w-full px-5 py-4 text-[10px] font-black text-gray-600 hover:text-[#0A2C5C] hover:bg-gray-50 rounded-2xl transition-all uppercase tracking-widest group">
                                                <div class="w-8 h-8 rounded-xl bg-blue-50 flex items-center justify-center group-hover:bg-[#0A2C5C] transition-colors">
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-4 h-4 group-hover:text-white transition-colors">
                                                        <path stroke-linecap="round" stroke-linejoin="round" d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L6.832 19.82a4.5 4.5 0 0 1-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 0 1 1.13-1.897L16.863 4.487Zm0 0L19.5 7.125" />
                                                    </svg>
                                                </div>
                                                Edytuj dane
                                            </Link>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <!-- Pagination -->
                    <div class="bg-gray-50/50 p-8 border-t border-gray-100 flex items-center justify-between">
                        <Pagination :links="externalCompanies.links" />
                        <p class="text-[10px] font-black text-gray-400 uppercase tracking-widest">
                            Wyświetlono {{ externalCompanies.from }}-{{ externalCompanies.to }} z {{ externalCompanies.total }} firm
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </AppLayout>
</template>

<style scoped>
.context-menu-container {
    position: relative;
}
</style>
