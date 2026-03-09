<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import { Link, router, usePage } from '@inertiajs/vue3';
import { ref, watch, onMounted, onUnmounted } from 'vue';
import Pagination from '@/Components/Pagination.vue';
import pickBy from 'lodash/pickBy';
import DialogModal from '@/Components/DialogModal.vue';
import SecondaryButton from '@/Components/SecondaryButton.vue';
import DangerButton from '@/Components/DangerButton.vue';

const props = defineProps({
    users: Object,
    filters: Object,
    stats: Object,
});

const filters = ref({
    search: props.filters.search || '',
    status: props.filters.status || '',
    sort: props.filters.sort || 'created_at',
    direction: props.filters.direction || 'desc',
});

const userToBlock = ref(null);
const userToVerify = ref(null);
const activeMenuId = ref(null);
const selectedIds = ref([]);

const toggleSelectAll = (event) => {
    if (event.target.checked) {
        selectedIds.value = props.users.data.map(user => user.id);
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
        ids: selectedIds.value.length > 0 ? selectedIds.value : null,
    };

    const queryString = new URLSearchParams(pickBy(params)).toString();
    window.location.href = route('admin.workers.export') + '?' + queryString;
};

const toggleMenu = (id) => {
    activeMenuId.value = activeMenuId.value === id ? null : id;
};

const handleOutsideClick = (event) => {
    if (activeMenuId.value !== null && !event.target.closest('.context-menu-container')) {
        activeMenuId.value = null;
    }
};

onMounted(() => {
    document.addEventListener('click', handleOutsideClick);
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
    };
    updateFilters();
};

const handleSort = (field) => {
    if (filters.value.sort === field) {
        if (filters.value.direction === 'desc') {
            filters.value.direction = 'asc';
        } else if (filters.value.direction === 'asc') {
            filters.value.sort = null;
            filters.value.direction = null;
        } else {
            filters.value.direction = 'desc';
        }
    } else {
        filters.value.sort = field;
        filters.value.direction = 'desc';
    }
    updateFilters();
};

const updateFilters = () => {
    router.get(route('admin.workers.index'), pickBy(filters.value), {
        preserveState: true,
        preserveScroll: true,
        replace: true
    });
};

watch(() => filters.value.search, () => {
    updateFilters();
});

watch(() => filters.value.status, () => {
    updateFilters();
});

const confirmBlock = (user) => {
    userToBlock.value = user;
    activeMenuId.value = null;
};

const confirmVerify = (user) => {
    userToVerify.value = user;
    activeMenuId.value = null;
};

const toggleBlock = () => {
    if (userToBlock.value) {
        router.post(route('admin.workers.block', userToBlock.value.id), {}, {
            preserveScroll: true,
            onSuccess: () => {
                userToBlock.value = null;
            }
        });
    }
};

const verifyEmail = () => {
    if (userToVerify.value) {
        router.post(route('admin.workers.verifyEmail', userToVerify.value.id), {}, {
            preserveScroll: true,
            onSuccess: () => {
                userToVerify.value = null;
            }
        });
    }
};

const getStatusLabel = (user) => {
    if (user.user_blocked) return 'Zawieszony';
    return 'Aktywny';
};

const getStatusClass = (user) => {
    if (user.user_blocked) return 'bg-red-50 text-red-400 border-red-100';
    return 'bg-green-50 text-green-600 border-green-100';
};

const getStatusDotClass = (user) => {
    if (user.user_blocked) return 'bg-red-400';
    return 'bg-green-600';
};

const getEmailStatusLabel = (user) => {
    if (user.email_verified_at) return 'Zweryfikowany';
    return 'Niezweryfikowany';
};

const getEmailStatusClass = (user) => {
    if (user.email_verified_at) return 'bg-blue-100 text-blue-600 border-blue-200';
    return 'bg-[#2D3E50] text-white border-[#2D3E50]';
};

const getEmailStatusDotClass = (user) => {
    if (user.email_verified_at) return 'bg-blue-400';
    return 'bg-slate-400';
};

const formatDate = (date) => {
    if (!date) return '-';
    return new Date(date).toLocaleDateString('pl-PL', {
        year: 'numeric',
        month: 'long',
        day: 'numeric'
    });
};
</script>

<template>
    <AppLayout title="Pracownicy">
        <div class="py-12 bg-gray-50/50 min-h-screen">
            <div class="max-w-[1600px] mx-auto sm:px-6 lg:px-8">
                <!-- Header Section -->
                <div class="bg-white rounded-[3rem] shadow-xl shadow-blue-900/5 border border-gray-100 p-10 mb-8 transition-all hover:shadow-blue-900/10">
                    <div class="flex flex-col md:flex-row md:items-center justify-between gap-8">
                        <div class="flex items-center gap-6">
                            <div>
                                    <h3 class="text-2xl font-black text-[#0A2C5C] uppercase tracking-tight">Pracownicy</h3>
                                    <p class="text-[10px] font-bold text-gray-400 uppercase tracking-widest mt-1">Zarządzanie kontami pracowników (worker)</p>
                            </div>
                        </div>

                        <div class="flex items-center gap-4">
                            <button
                                @click="exportCsv"
                                class="flex items-center gap-3 px-8 py-4 bg-white hover:bg-gray-50 text-[#0A2C5C] border-2 border-gray-100 rounded-2xl font-black text-xs uppercase tracking-widest transition-all active:scale-95 shadow-sm"
                            >
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-5 h-5">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M3 16.5v2.25A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75V16.5M16.5 12 12 16.5m0 0L7.5 12m4.5 4.5V3" />
                                </svg>
                                Eksportuj CSV
                            </button>
                        </div>
                    </div>

                    <!-- Stats Grid -->
                    <div class="grid grid-cols-1 md:grid-cols-4 gap-6 mt-12">
                        <div class="bg-gray-50/50 rounded-[2rem] p-6 border border-gray-100 hover:border-blue-200 transition-all group">
                            <p class="text-[10px] font-black text-gray-400 uppercase tracking-widest mb-2">Suma pracowników</p>
                            <div class="flex items-end justify-between">
                                <span class="text-3xl font-black text-[#0A2C5C]">{{ stats.total }}</span>
                                <div class="w-10 h-10 bg-white rounded-xl flex items-center justify-center shadow-sm group-hover:scale-110 transition-transform">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-5 h-5 text-blue-500">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 19.128a9.38 9.38 0 0 0 2.625.372 9.337 9.337 0 0 0 4.121-.952 4.125 4.125 0 0 0-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 0 1 8.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0 1 11.964-3.07M12 6.375a3.375 3.375 0 1 1-6.75 0 3.375 3.375 0 0 1 6.75 0Zm8.25 2.25a2.625 2.625 0 1 1-5.25 0 2.625 2.625 0 0 1 5.25 0Z" />
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <div class="bg-green-50/30 rounded-[2rem] p-6 border border-green-100 hover:border-green-200 transition-all group">
                            <p class="text-[10px] font-black text-green-600/60 uppercase tracking-widest mb-2">Aktywni</p>
                            <div class="flex items-end justify-between">
                                <span class="text-3xl font-black text-green-700">{{ stats.active }}</span>
                                <div class="w-10 h-10 bg-white rounded-xl flex items-center justify-center shadow-sm group-hover:scale-110 transition-transform text-green-500">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-5 h-5">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <div class="bg-red-50/30 rounded-[2rem] p-6 border border-red-100 hover:border-red-200 transition-all group">
                            <p class="text-[10px] font-black text-red-600/60 uppercase tracking-widest mb-2">Zablokowani</p>
                            <div class="flex items-end justify-between">
                                <span class="text-3xl font-black text-red-700">{{ stats.blocked }}</span>
                                <div class="w-10 h-10 bg-white rounded-xl flex items-center justify-center shadow-sm group-hover:scale-110 transition-transform text-red-500">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-5 h-5">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M18.364 18.364A9 9 0 0 0 5.636 5.636m12.728 12.728A9 9 0 0 1 5.636 5.636m12.728 12.728L5.636 5.636" />
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <div class="bg-blue-50/30 rounded-[2rem] p-6 border border-blue-100 hover:border-blue-200 transition-all group">
                            <p class="text-[10px] font-black text-blue-600/60 uppercase tracking-widest mb-2">Niezweryfikowany email</p>
                            <div class="flex items-end justify-between">
                                <span class="text-3xl font-black text-blue-700">{{ stats.unverified }}</span>
                                <div class="w-10 h-10 bg-white rounded-xl flex items-center justify-center shadow-sm group-hover:scale-110 transition-transform text-blue-500">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-5 h-5">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 0 1-2.25 2.25h-15a2.25 2.25 0 0 1-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25m19.5 0v.243a2.25 2.25 0 0 1-1.07 1.916l-7.5 4.615a2.25 2.25 0 0 1-2.36 0L3.32 8.91a2.25 2.25 0 0 1-1.07-1.916V6.75" />
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Filters Section -->
                <div class="bg-white rounded-[3rem] shadow-xl shadow-blue-900/5 border border-gray-100 p-8 mb-8">
                    <div class="grid grid-cols-1 md:grid-cols-12 gap-6 items-center">
                        <!-- Search -->
                        <div class="md:col-span-5 relative group">
                            <div class="absolute inset-y-0 left-0 pl-5 flex items-center pointer-events-none">
                                <svg class="h-5 w-5 text-gray-400 group-focus-within:text-blue-500 transition-colors" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                                </svg>
                            </div>
                            <input
                                v-model="filters.search"
                                type="text"
                                placeholder="Szukaj po nazwie lub emailu..."
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
                                <option value="active">Aktywni</option>
                                <option value="blocked">Zablokowani</option>
                                <option value="verified">Zweryfikowany email</option>
                                <option value="unverified">Niezweryfikowany email</option>
                            </select>
                        </div>

                        <!-- Reset -->
                        <div class="md:col-span-2">
                            <button
                                @click="resetFilters"
                                class="w-full py-4 px-6 bg-gray-100 hover:bg-gray-200 text-gray-600 rounded-2xl text-sm font-black uppercase tracking-widest transition-all active:scale-95 flex items-center justify-center gap-2"
                            >
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-4 h-4">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M16.023 9.348h4.992v-.001M2.985 19.644v-4.992m0 0h4.992m-4.993 0 3.181 3.183a8.25 8.25 0 0 0 13.803-3.7M4.031 9.865a8.25 8.25 0 0 1 13.803-3.7l3.181 3.182m0-4.991v4.99" />
                                </svg>
                                Reset
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Table Section -->
                <div class="bg-white rounded-[3rem] shadow-xl shadow-blue-900/5 border border-gray-100 overflow-visible relative">
                    <div class="overflow-visible">
                        <table class="w-full text-left border-collapse">
                            <thead>
                                <tr class="border-b border-gray-50">
                                    <th class="p-8 first:rounded-tl-[3rem] w-10">
                                        <div class="flex items-center justify-center">
                                            <input
                                                type="checkbox"
                                                :checked="selectedIds.length === users.data.length && users.data.length > 0"
                                                @change="toggleSelectAll"
                                                class="w-5 h-5 rounded-lg border-gray-200 text-[#0A2C5C] focus:ring-[#0A2C5C]/20 transition-all cursor-pointer"
                                            />
                                        </div>
                                    </th>
                                    <th class="p-8">
                                        <button @click="handleSort('name')" class="flex items-center gap-2 text-[10px] font-black text-[#0A2C5C] uppercase tracking-[0.2em] group">
                                            Użytkownik
                                            <svg v-if="filters.sort === 'name'" class="w-4 h-4 transition-transform duration-300" :class="filters.direction === 'asc' ? 'rotate-180' : ''" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                            </svg>
                                        </button>
                                    </th>
                                    <th class="p-8">
                                        <span class="text-[10px] font-black text-[#0A2C5C] uppercase tracking-[0.2em]">Status</span>
                                    </th>
                                    <th class="p-8 text-center">
                                        <button @click="handleSort('created_at')" class="inline-flex items-center gap-2 text-[10px] font-black text-[#0A2C5C] uppercase tracking-[0.2em] group">
                                            Data rejestracji
                                            <svg v-if="filters.sort === 'created_at'" class="w-4 h-4 transition-transform duration-300" :class="filters.direction === 'asc' ? 'rotate-180' : ''" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                            </svg>
                                        </button>
                                    </th>
                                    <th class="p-8 text-right last:rounded-tr-[3rem]">
                                        <span class="text-[10px] font-black text-[#0A2C5C] uppercase tracking-[0.2em]">Akcje</span>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr v-for="user in users.data" :key="user.id" class="group hover:bg-blue-50/30 transition-all duration-300 border-b border-gray-50 last:border-none" :class="{'bg-blue-50/50': selectedIds.includes(user.id)}">
                                    <td class="p-8">
                                        <div class="flex items-center justify-center">
                                            <input
                                                type="checkbox"
                                                :checked="selectedIds.includes(user.id)"
                                                @change="toggleSelect(user.id)"
                                                class="w-5 h-5 rounded-lg border-gray-200 text-[#0A2C5C] focus:ring-[#0A2C5C]/20 transition-all cursor-pointer"
                                            />
                                        </div>
                                    </td>
                                    <td class="p-8">
                        <div class="flex items-center gap-4">
                            <div class="w-12 h-12 rounded-2xl bg-gradient-to-br from-[#0A2C5C] to-blue-900 flex items-center justify-center text-white font-black text-sm border-2 border-white shadow-sm group-hover:scale-110 transition-transform uppercase">
                                {{ user.worker_detail?.surname?.substring(0, 1) || user.name.substring(0, 1) }}{{ user.name.substring(0, 1) }}
                            </div>
                            <div>
                                <Link :href="route('admin.workers.edit', user.id)" class="text-xs font-black text-[#0A2C5C] group-hover:text-blue-600 transition-colors uppercase tracking-tight">
                                    {{ user.worker_detail?.surname }} {{ user.name }}
                                </Link>
                                <div class="text-[10px] font-bold text-gray-400 uppercase tracking-widest mt-0.5">
                                    {{ user.email }}
                                    <span v-if="user.worker_detail?.contact_phone" class="ml-2 px-2 py-0.5 bg-gray-50 rounded text-gray-500 border border-gray-100 italic font-medium">
                                        {{ user.worker_detail.contact_phone }}
                                    </span>
                                </div>
                            </div>
                        </div>
                                    </td>
                                    <td class="p-8 text-xs font-bold uppercase tracking-widest">
                                        <div class="flex flex-col gap-2">
                                            <span :class="['px-3 py-1 rounded-lg border w-fit flex items-center gap-2', getStatusClass(user)]">
                                                <span :class="['w-1.5 h-1.5 rounded-full', getStatusDotClass(user), user.user_blocked ? 'animate-pulse' : '']"></span>
                                                {{ getStatusLabel(user) }}
                                            </span>
                                            <span :class="['px-3 py-1 rounded-lg border w-fit flex items-center gap-2', getEmailStatusClass(user)]">
                                                <span :class="['w-1.5 h-1.5 rounded-full', getEmailStatusDotClass(user)]"></span>
                                                {{ getEmailStatusLabel(user) }}
                                            </span>
                                        </div>
                                    </td>
                                    <td class="p-8 text-center text-xs font-bold text-gray-400">
                                        {{ formatDate(user.created_at) }}
                                    </td>
                                    <td class="p-8 text-right relative overflow-visible">
                                        <div
                                            class="context-menu-container relative inline-block text-left"
                                            :class="{'z-[100]': activeMenuId === user.id, 'z-1': activeMenuId !== user.id}"
                                        >
                                            <button
                                                @click.stop="toggleMenu(user.id)"
                                                class="p-3 bg-gray-50 hover:bg-[#0A2C5C] text-gray-400 hover:text-white rounded-2xl transition-all active:scale-95 group/btn border border-gray-100 hover:border-[#0A2C5C]"
                                                :class="{'bg-[#0A2C5C] text-white': activeMenuId === user.id}"
                                            >
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-5 h-5">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.75a.75.75 0 1 1 0-1.5.75.75 0 0 1 0 1.5ZM12 12.75a.75.75 0 1 1 0-1.5.75.75 0 0 1 0 1.5ZM12 18.75a.75.75 0 1 1 0-1.5.75.75 0 0 1 0 1.5Z" />
                                                </svg>
                                            </button>

                                            <!-- Dropdown Menu -->
                                            <div
                                                v-if="activeMenuId === user.id"
                                                class="absolute right-0 mt-3 w-64 bg-white rounded-3xl shadow-2xl shadow-blue-900/20 border border-gray-100 z-[100] overflow-hidden py-3 animate-in fade-in zoom-in duration-200 origin-top-right"
                                            >
                                                <Link
                                                    @click="activeMenuId = null"
                                                    :href="route('admin.workers.edit', user.id)"
                                                    class="flex items-center gap-3 px-6 py-4 text-[10px] font-black uppercase tracking-widest text-gray-600 hover:text-[#0A2C5C] hover:bg-blue-50 transition-colors border-b border-gray-50 group"
                                                >
                                                    <div class="w-8 h-8 rounded-xl bg-blue-50 flex items-center justify-center group-hover:bg-[#0A2C5C] transition-colors text-blue-500 group-hover:text-white">
                                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-4 h-4 transition-colors">
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" />
                                                        </svg>
                                                    </div>
                                                    Edytuj dane
                                                </Link>

                                                <button
                                                    @click="confirmBlock(user)"
                                                    class="w-full flex items-center gap-3 px-6 py-4 text-[10px] font-black uppercase tracking-widest hover:bg-blue-50 transition-colors border-b border-gray-50 text-left group"
                                                    :class="user.user_blocked ? 'text-green-600' : 'text-red-600'"
                                                >
                                                    <div class="w-8 h-8 rounded-xl bg-blue-50 flex items-center justify-center group-hover:bg-[#0A2C5C] transition-colors text-blue-500 group-hover:text-white">
                                                        <svg v-if="!user.user_blocked" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-4 h-4 transition-colors">
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="M18.364 18.364A9 9 0 0 0 5.636 5.636m12.728 12.728A9 9 0 0 1 5.636 5.636m12.728 12.728L5.636 5.636" />
                                                        </svg>
                                                        <svg v-else xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-4 h-4 transition-colors text-green-500 group-hover:text-white">
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                                        </svg>
                                                    </div>
                                                    {{ user.user_blocked ? 'Odblokuj konto' : 'Zablokuj konto' }}
                                                </button>

                                                <button
                                                    v-if="!user.email_verified_at"
                                                    @click="confirmVerify(user)"
                                                    class="w-full flex items-center gap-3 px-6 py-4 text-[10px] font-black uppercase tracking-widest text-blue-600 hover:bg-blue-50 transition-colors text-left group"
                                                >
                                                    <div class="w-8 h-8 rounded-xl bg-blue-50 flex items-center justify-center group-hover:bg-[#0A2C5C] transition-colors text-blue-500 group-hover:text-white">
                                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-4 h-4 transition-colors">
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                                        </svg>
                                                    </div>
                                                    Zatwierdź email
                                                </button>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr v-if="users.data.length === 0">
                                    <td colspan="4" class="p-20 text-center">
                                        <div class="flex flex-col items-center gap-4 text-gray-300">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1" stroke="currentColor" class="w-20 h-20">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 19.128a9.38 9.38 0 0 0 2.625.372 9.337 9.337 0 0 0 4.121-.952 4.125 4.125 0 0 0-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v-.106A12.318 12.318 0 0 1 8.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0 1 11.964-3.07M12 6.375a3.375 3.375 0 1 1-6.75 0 3.375 3.375 0 0 1 6.75 0Zm8.25 2.25a2.625 2.625 0 1 1-5.25 0 2.625 2.625 0 0 1 5.25 0Z" />
                                            </svg>
                                            <p class="text-xl font-black uppercase tracking-widest">Brak pracowników</p>
                                            <p class="text-sm font-bold">Nie znaleziono pracowników spełniających podane kryteria.</p>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <!-- Pagination -->
                <div class="mt-8">
                    <Pagination :links="users.links" />
                </div>
            </div>
        </div>

        <!-- Block Confirmation Modal -->
        <DialogModal :show="userToBlock !== null" @close="userToBlock = null">
            <template #title>
                <div class="flex items-center gap-3 text-red-600">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126ZM12 15.75h.007v.008H12v-.008Z" />
                    </svg>
                    Potwierdź akcję
                </div>
            </template>

            <template #content>
                <p class="text-sm text-gray-600 font-bold">
                    Czy na pewno chcesz {{ userToBlock.user_blocked ? 'odblokować' : 'zablokować' }} konto użytkownika
                    <span class="text-[#0A2C5C]">{{ userToBlock.name }} {{ userToBlock.worker_detail?.surname }}</span> ({{ userToBlock.email }})?
                </p>
                <p v-if="!userToBlock.user_blocked" class="mt-2 text-xs text-red-500 font-medium">
                    Zablokowany użytkownik nie będzie mógł zalogować się do systemu.
                </p>
            </template>

            <template #footer>
                <div class="flex gap-3">
                    <SecondaryButton @click="userToBlock = null">
                        Anuluj
                    </SecondaryButton>
                    <DangerButton
                        v-if="!userToBlock.user_blocked"
                        @click="toggleBlock"
                    >
                        Zablokuj konto
                    </DangerButton>
                    <button
                        v-else
                        @click="toggleBlock"
                        class="px-6 py-2 bg-green-600 hover:bg-green-700 text-white text-xs font-black uppercase tracking-widest rounded-xl transition-all active:scale-95"
                    >
                        Odblokuj konto
                    </button>
                </div>
            </template>
        </DialogModal>

        <!-- Verify Email Confirmation Modal -->
        <DialogModal :show="userToVerify !== null" @close="userToVerify = null">
            <template #title>
                <div class="flex items-center gap-3 text-blue-600">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                    </svg>
                    Weryfikacja adresu email
                </div>
            </template>

            <template #content>
                <p class="text-sm text-gray-600 font-bold">
                    Czy na pewno chcesz ręcznie zweryfikować adres email użytkownika
                    <span class="text-[#0A2C5C]">{{ userToVerify.name }} {{ userToVerify.worker_detail?.surname }}</span> ({{ userToVerify.email }})?
                </p>
            </template>

            <template #footer>
                <div class="flex gap-3">
                    <SecondaryButton @click="userToVerify = null">
                        Anuluj
                    </SecondaryButton>
                    <button
                        @click="verifyEmail"
                        class="px-6 py-2 bg-blue-600 hover:bg-blue-700 text-white text-xs font-black uppercase tracking-widest rounded-xl transition-all active:scale-95"
                    >
                        Zatwierdź email
                    </button>
                </div>
            </template>
        </DialogModal>
    </AppLayout>
</template>

<style scoped>
.context-menu-container {
    isolation: isolate;
}
</style>
