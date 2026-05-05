<script setup>
import AppLayout from "@/Layouts/AppLayout.vue";
import { Link, router } from "@inertiajs/vue3";
import { ref } from 'vue';
import { useProjectHelpers } from "@/Composables/useProjectHelpers.js";
import moment from "moment";

const props = defineProps({
    firm: Object,
});

const { getPositionTitle } = useProjectHelpers();
const showStatusModal = ref(false);

const changeStatus = (newStatus) => {
    router.post(route('admin.firms.changeStatus', props.firm.id), {
        status: newStatus
    }, {
        onSuccess: () => {
            showStatusModal.value = false;
        }
    });
};

const verifyEmail = () => {
    router.post(route('admin.firms.verifyEmail', props.firm.id), {}, {
        preserveScroll: true,
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
</script>

<template>
    <AppLayout :title="'Podgląd firmy: ' + firm.name">
        <div class="py-12 bg-gray-50/50 min-h-screen px-2 sm:px-0">
            <div class="max-w-[1600px] mx-auto px-4 sm:px-6 lg:px-8">
                <!-- Header -->
                <div class="flex items-center justify-between mb-12">
                    <div class="flex items-center gap-8">
                        <Link
                            :href="route('admin.firms.index')"
                            class="w-14 h-14 bg-white rounded-3xl flex items-center justify-center shadow-xl shadow-blue-900/5 border border-gray-100 text-[#0A2C5C] hover:bg-gray-50 transition-all active:scale-95 group"
                        >
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor" class="w-6 h-6 group-hover:-translate-x-1 transition-transform">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5 3 12m0 0 7.5-7.5M3 12h18" />
                            </svg>
                        </Link>
                        <div>
                            <div class="flex items-center gap-3 mb-1">
                                <span class="px-3 py-1 bg-blue-50 text-blue-500 rounded-lg text-[10px] font-black uppercase tracking-widest">Szczegóły firmy</span>
                            </div>
                            <h1 class="text-4xl font-black text-[#0A2C5C] tracking-tight">{{ firm.name }}</h1>
                        </div>
                    </div>
                    <div class="flex gap-4">
                        <Link
                            :href="route('admin.firms.edit', firm.id)"
                            class="px-8 py-4 bg-[#0A2C5C] text-white rounded-2xl text-[10px] font-black uppercase tracking-widest hover:bg-[#0d3671] transition-all shadow-xl shadow-blue-900/20 flex items-center gap-3 active:scale-95"
                        >
                             <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-4 h-4 text-blue-400">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L6.832 19.82a4.5 4.5 0 0 1-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 0 1 1.13-1.897L16.863 4.487Zm0 0L19.5 7.125" />
                            </svg>
                            Edytuj dane
                        </Link>
                    </div>
                </div>

                <!-- Status Modal -->
                <div v-if="showStatusModal" class="fixed inset-0 z-[100] overflow-y-auto" aria-labelledby="modal-title" role="dialog" aria-modal="true">
                    <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
                        <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity" aria-hidden="true" @click="showStatusModal = false"></div>
                        <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>
                        <div class="inline-block align-middle bg-white rounded-3xl text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full">
                            <div class="bg-white px-8 pt-8 pb-8">
                                <h3 class="text-2xl font-black text-[#0A2C5C] mb-6">Zmień status firmy</h3>
                                <div class="grid gap-4">
                                    <button @click="changeStatus('verified')" class="flex items-center justify-between p-4 rounded-2xl border-2 transition-all hover:border-blue-500 group" :class="firm.status === 'verified' ? 'border-blue-500 bg-blue-50' : 'border-gray-100'">
                                        <div class="flex items-center gap-4">
                                            <div class="w-12 h-12 bg-blue-100 rounded-xl flex items-center justify-center text-blue-600">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor" class="w-6 h-6">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12c0 1.268-.63 2.39-1.593 3.068a3.745 3.745 0 0 1-1.043 3.296 3.745 3.745 0 0 1-3.296 1.043A3.745 3.745 0 0 1 12 21c-1.268 0-2.39-.63-3.068-1.593a3.746 3.746 0 0 1-3.296-1.043 3.745 3.745 0 0 1-1.043-3.296A3.745 3.745 0 0 1 3 12c0-1.268.63-2.39 1.593-3.068a3.745 3.745 0 0 1 1.043-3.296 3.746 3.746 0 0 1 3.296-1.043A3.746 3.746 0 0 1 12 3c1.268 0 2.39.63 3.068 1.593a3.746 3.746 0 0 1 3.296 1.043 3.746 3.746 0 0 1 1.043 3.296A3.745 3.745 0 0 1 21 12Z" />
                                                </svg>
                                            </div>
                                            <div class="text-left">
                                                <div class="font-bold text-[#0A2C5C]">Zweryfikowany</div>
                                                <div class="text-xs text-gray-400">Aktywne konto firmy</div>
                                            </div>
                                        </div>
                                        <div v-if="firm.status === 'verified'" class="w-6 h-6 bg-blue-500 rounded-full flex items-center justify-center text-white">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="3" stroke="currentColor" class="w-4 h-4">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                                            </svg>
                                        </div>
                                    </button>

                                    <button @click="changeStatus('unverified')" class="flex items-center justify-between p-4 rounded-2xl border-2 transition-all hover:border-slate-500 group" :class="firm.status === 'unverified' ? 'border-slate-500 bg-slate-50' : 'border-gray-100'">
                                        <div class="flex items-center gap-4">
                                            <div class="w-12 h-12 bg-slate-100 rounded-xl flex items-center justify-center text-slate-600">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor" class="w-6 h-6">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="m9.75 9.75 4.5 4.5m0-4.5-4.5 4.5M21 12c0 1.268-.63 2.39-1.593 3.068a3.745 3.745 0 0 1-1.043 3.296 3.745 3.745 0 0 1-3.296 1.043A3.745 3.745 0 0 1 12 21c-1.268 0-2.39-.63-3.068-1.593a3.746 3.746 0 0 1-3.296-1.043 3.745 3.745 0 0 1-1.043-3.296A3.745 3.745 0 0 1 3 12c0-1.268.63-2.39 1.593-3.068a3.745 3.745 0 0 1 1.043-3.296 3.746 3.746 0 0 1 3.296-1.043A3.746 3.746 0 0 1 12 3c1.268 0 2.39.63 3.068 1.593a3.746 3.746 0 0 1 3.296 1.043 3.746 3.746 0 0 1 1.043 3.296A3.745 3.745 0 0 1 21 12Z" />
                                                </svg>
                                            </div>
                                            <div class="text-left">
                                                <div class="font-bold text-[#0A2C5C]">Niezweryfikowany</div>
                                                <div class="text-xs text-gray-400">Oczekuje na weryfikację e-mail</div>
                                            </div>
                                        </div>
                                        <div v-if="firm.status === 'unverified'" class="w-6 h-6 bg-slate-500 rounded-full flex items-center justify-center text-white">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="3" stroke="currentColor" class="w-4 h-4">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                                            </svg>
                                        </div>
                                    </button>

                                    <button @click="changeStatus('blocked')" class="flex items-center justify-between p-4 rounded-2xl border-2 transition-all hover:border-red-500 group" :class="firm.status === 'blocked' ? 'border-red-500 bg-red-50' : 'border-gray-100'">
                                        <div class="flex items-center gap-4">
                                            <div class="w-12 h-12 bg-red-100 rounded-xl flex items-center justify-center text-red-600">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor" class="w-6 h-6">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 5.25v13.5m-7.5-13.5v13.5" />
                                                </svg>
                                            </div>
                                            <div class="text-left">
                                                <div class="font-bold text-[#0A2C5C]">Zawieszony</div>
                                                <div class="text-xs text-gray-400">Konto zablokowane przez administratora</div>
                                            </div>
                                        </div>
                                        <div v-if="firm.status === 'blocked'" class="w-6 h-6 bg-red-500 rounded-full flex items-center justify-center text-white">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="3" stroke="currentColor" class="w-4 h-4">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                                            </svg>
                                        </div>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Stats Cards -->
                <div class="flex gap-6 mb-12">
                    <div class="bg-white rounded-3xl shadow-xl shadow-blue-900/5 border border-gray-100 p-6 flex items-center gap-6 flex-1 max-w-xs">
                        <div class="w-16 h-16 bg-blue-50 rounded-2xl flex items-center justify-center">
                             <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor" class="w-8 h-8 text-blue-500">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 21h19.5m-18-18v18m10.5-18v18m6-13.5V21M6.75 6.75h.75m-.75 3h.75m-.75 3h.75m3-6h.75m-.75 3h.75m-.75 3h.75M6.75 21v-3.375c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21M3 3h12m-.75 4.5H21m-3.75 3.75h.008v.008h-.008v-.008Zm0 3h.008v.008h-.008v-.008Zm0 3h.008v.008h-.008v-.008Z" />
                            </svg>
                        </div>
                        <div>
                            <div class="text-3xl font-black text-[#0A2C5C]">{{ firm.projects_count }}</div>
                            <div class="text-[10px] font-bold text-gray-400 uppercase tracking-widest">Ofert pracy</div>
                        </div>
                    </div>

                    <div class="bg-white rounded-3xl shadow-xl shadow-blue-900/5 border border-gray-100 p-6 flex items-center gap-6 flex-1 max-w-xs">
                        <div class="w-16 h-16 bg-blue-50 rounded-2xl flex items-center justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor" class="w-8 h-8 text-blue-500">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 19.128a9.38 9.38 0 0 0 2.625.372 9.337 9.337 0 0 0 4.121-.952 4.125 4.125 0 0 0-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 0 1 8.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0 1 11.964-3.07M12 6.375a3.375 3.375 0 1 1-6.75 0 3.375 3.375 0 0 1 6.75 0Zm8.25 2.25a2.625 2.625 0 1 1-5.25 0 2.625 2.625 0 0 1 5.25 0Z" />
                            </svg>
                        </div>
                        <div>
                            <div class="text-3xl font-black text-[#0A2C5C]">{{ firm.recruiters_count }}</div>
                            <div class="text-[10px] font-bold text-gray-400 uppercase tracking-widest">Rekruterów</div>
                        </div>
                    </div>

                    <div class="bg-white rounded-3xl shadow-xl shadow-blue-900/5 border border-gray-100 p-6 flex items-center gap-6 flex-1 max-w-xs">
                        <Link
                            :href="route('admin.firms.manageCredits', firm.id)"
                            class="w-16 h-16 bg-blue-50 rounded-2xl flex items-center justify-center transition-all hover:scale-105 hover:bg-blue-100 group shadow-sm active:scale-95"
                        >
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor" class="w-8 h-8 text-blue-500 group-hover:rotate-12 transition-transform">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v12m-3-2.818.879.659c1.171.879 3.07.879 4.242 0 1.172-.879 1.172-2.303 0-3.182C13.536 12.219 12.768 12 12 12c-.725 0-1.45-.22-2.003-.659-1.106-.879-1.106-2.303 0-3.182s2.9-.879 4.006 0l.415.33M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                            </svg>
                        </Link>
                        <div>
                            <div class="text-3xl font-black text-[#0A2C5C]">{{ firm.details?.points || 0 }}</div>
                            <div class="text-[10px] font-bold text-gray-400 uppercase tracking-widest">Kredytów</div>
                        </div>
                    </div>

                    <div class="bg-white rounded-3xl shadow-xl shadow-blue-900/5 border border-gray-100 p-6 flex items-center gap-6 flex-1 max-w-xs">
                        <div
                            class="w-16 h-16 rounded-2xl flex items-center justify-center cursor-pointer transition-all hover:scale-105 group shadow-sm active:scale-95"
                            :class="getStatusClass(firm.status)"
                            @click="showStatusModal = true"
                        >
                             <svg v-if="firm.status === 'verified'" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor" class="w-8 h-8 group-hover:rotate-12 transition-transform">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12c0 1.268-.63 2.39-1.593 3.068a3.745 3.745 0 0 1-1.043 3.296 3.745 3.745 0 0 1-3.296 1.043A3.745 3.745 0 0 1 12 21c-1.268 0-2.39-.63-3.068-1.593a3.746 3.746 0 0 1-3.296-1.043 3.745 3.745 0 0 1-1.043-3.296A3.745 3.745 0 0 1 3 12c0-1.268.63-2.39 1.593-3.068a3.745 3.745 0 0 1 1.043-3.296 3.746 3.746 0 0 1 3.296-1.043A3.746 3.746 0 0 1 12 3c1.268 0 2.39.63 3.068 1.593a3.746 3.746 0 0 1 3.296 1.043 3.746 3.746 0 0 1 1.043 3.296A3.745 3.745 0 0 1 21 12Z" />
                            </svg>
                            <svg v-else-if="firm.status === 'blocked'" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor" class="w-8 h-8 group-hover:scale-110 transition-transform">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 5.25v13.5m-7.5-13.5v13.5" />
                            </svg>
                            <svg v-else xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor" class="w-8 h-8 group-hover:rotate-12 transition-transform">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m9.75 9.75 4.5 4.5m0-4.5-4.5 4.5M21 12c0 1.268-.63 2.39-1.593 3.068a3.745 3.745 0 0 1-1.043 3.296 3.745 3.745 0 0 1-3.296 1.043A3.745 3.745 0 0 1 12 21c-1.268 0-2.39-.63-3.068-1.593a3.746 3.746 0 0 1-3.296-1.043 3.745 3.745 0 0 1-1.043-3.296A3.745 3.745 0 0 1 3 12c0-1.268.63-2.39 1.593-3.068a3.745 3.745 0 0 1 1.043-3.296 3.746 3.746 0 0 1 3.296-1.043A3.746 3.746 0 0 1 12 3c1.268 0 2.39.63 3.068 1.593a3.746 3.746 0 0 1 3.296 1.043 3.746 3.746 0 0 1 1.043 3.296A3.745 3.745 0 0 1 21 12Z" />
                            </svg>
                        </div>
                        <div>
                            <div class="text-3xl font-black text-[#0A2C5C] leading-none mb-1">{{ getStatusLabel(firm.status) }}</div>
                            <div class="text-[10px] font-bold text-gray-400 uppercase tracking-widest">Status konta</div>
                        </div>
                    </div>
                </div>

                <!-- Main Grid -->
                <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                    <!-- Left Column: Details -->
                    <div class="lg:col-span-2 space-y-8">
                        <!-- Company Info -->
                        <div class="bg-white rounded-[3rem] shadow-xl shadow-blue-900/5 border border-gray-100 p-10">
                            <div class="flex items-start gap-8 mb-10">
                                <div class="w-32 h-32 bg-gray-50 rounded-3xl overflow-hidden flex items-center justify-center border border-gray-100 p-4">
                                    <img v-if="firm.logo" :src="firm.logo" :alt="firm.name" class="max-w-full max-h-full object-contain" />
                                    <span v-else class="text-4xl font-black text-[#0A2C5C]/20">{{ firm.name.substring(0, 2).toUpperCase() }}</span>
                                </div>
                                <div class="flex-1">
                                    <div class="flex items-center gap-4 mb-2">
                                        <h2 class="text-3xl font-black text-[#0A2C5C]">{{ firm.name }}</h2>
                                        <div v-if="firm.status === 'verified'" class="w-6 h-6 bg-blue-500 rounded-full flex items-center justify-center text-white">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="3" stroke="currentColor" class="w-3.5 h-3.5">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                                            </svg>
                                        </div>
                                    </div>
                                    <p class="text-gray-400 font-bold text-sm mb-6">{{ firm.email }}</p>
                                    <div class="flex flex-wrap gap-4">
                                        <div v-if="firm.email_verified_at" class="bg-blue-50 px-4 py-2 rounded-xl flex items-center gap-2 border border-blue-100 shadow-sm">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor" class="w-4 h-4 text-blue-500">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12c0 1.268-.63 2.39-1.593 3.068a3.745 3.745 0 0 1-1.043 3.296 3.745 3.745 0 0 1-3.296 1.043A3.745 3.745 0 0 1 12 21c-1.268 0-2.39-.63-3.068-1.593a3.746 3.746 0 0 1-3.296-1.043 3.745 3.745 0 0 1-1.043-3.296A3.745 3.745 0 0 1 3 12c0-1.268.63-2.39 1.593-3.068a3.745 3.745 0 0 1 1.043-3.296 3.746 3.746 0 0 1 3.296-1.043A3.746 3.746 0 0 1 12 3c1.268 0 2.39.63 3.068 1.593a3.746 3.746 0 0 1 3.296 1.043 3.746 3.746 0 0 1 1.043 3.296A3.745 3.745 0 0 1 21 12Z" />
                                            </svg>
                                            <span class="text-[10px] font-black text-blue-600 uppercase tracking-[0.3em] leading-loose">Email zatwierdzony</span>
                                        </div>
                                        <button v-else @click="verifyEmail" class="bg-red-50 px-4 py-2 rounded-xl flex items-center gap-2 border border-red-100 shadow-sm hover:bg-red-100 transition-colors">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor" class="w-4 h-4 text-red-500">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m9-.75a9 9 0 1 1-18 0 9 9 0 0 1 18 0Zm-9 3.75h.008v.008H12v-.008Z" />
                                            </svg>
                                            <span class="text-[10px] font-black text-red-600 uppercase tracking-[0.3em] leading-loose">Zatwierdź email</span>
                                        </button>
                                        <div v-if="firm.details?.www" class="bg-gray-50 px-4 py-2 rounded-xl flex items-center gap-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-4 h-4 text-blue-500">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 21a9.004 9.004 0 0 0 8.716-6.747M12 21a9.004 9.004 0 0 1-8.716-6.747M12 21c2.485 0 4.5-4.03 4.5-9S14.485 3 12 3m0 18c-2.485 0-4.5-4.03-4.5-9s2.015-9 4.5-9m0 18c-1.178 0-2.122-1.311-2.122-3.111C9.878 13.089 10.822 12 12 12m0 0c1.178 0 2.122 1.311 2.122 3.111 0 1.8-0.944 3.111-2.122 3.111m0-18c1.178 0 2.122 1.311 2.122 3.111 0 1.8-0.944 3.111-2.122 3.111m-4.244 0c1.178 0 2.122 1.311 2.122 3.111 0 1.8-0.944 3.111-2.122 3.111m4.244-6.222c1.178 0 2.122 1.311 2.122 3.111 0 1.8-0.944 3.111-2.122 3.111M9.878 8.889c0-1.8 0.944-3.111 2.122-3.111s2.122 1.311 2.122 3.111" />
                                            </svg>
                                            <a :href="firm.details.www" target="_blank" class="text-[10px] font-black text-[#0A2C5C] uppercase tracking-widest hover:text-blue-600">{{ firm.details.www }}</a>
                                        </div>
                                        <div class="bg-gray-50 px-4 py-2 rounded-xl flex items-center gap-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-4 h-4 text-blue-500">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 0 1 2.25-2.25h13.5A2.25 2.25 0 0 1 21 7.5v11.25m-18 0A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75m-18 0v-7.5A2.25 2.25 0 0 1 5.25 9h13.5A2.25 2.25 0 0 1 21 11.25v7.5" />
                                            </svg>
                                            <span class="text-[10px] font-black text-[#0A2C5C] uppercase tracking-widest">W systemie od: {{ firm.created_at }}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="grid grid-cols-2 gap-12 border-t border-gray-100 pt-10">
                                <div>
                                    <h3 class="text-[10px] font-black text-gray-400 uppercase tracking-widest mb-6">Dane rejestrowe</h3>
                                    <div class="space-y-4">
                                        <div class="flex justify-between">
                                            <span class="text-xs font-bold text-gray-400">NIP:</span>
                                            <span class="text-xs font-black text-[#0A2C5C]">{{ firm.details?.nip || '-' }}</span>
                                        </div>
                                        <div class="flex justify-between">
                                            <span class="text-xs font-bold text-gray-400">REGON:</span>
                                            <span class="text-xs font-black text-[#0A2C5C]">{{ firm.details?.regon || '-' }}</span>
                                        </div>
                                        <div class="flex justify-between">
                                            <span class="text-xs font-bold text-gray-400">Wielkość firmy:</span>
                                            <span class="text-xs font-black text-[#0A2C5C]">{{ firm.details?.count_workers || '-' }} pracowników</span>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <h3 class="text-[10px] font-black text-gray-400 uppercase tracking-widest mb-6">Lokalizacja</h3>
                                    <div class="space-y-4">
                                        <div class="flex justify-between">
                                            <span class="text-xs font-bold text-gray-400">Adres:</span>
                                            <span class="text-xs font-black text-[#0A2C5C]">{{ firm.details?.street }} {{ firm.details?.number }}</span>
                                        </div>
                                        <div class="flex justify-between">
                                            <span class="text-xs font-bold text-gray-400">Miasto:</span>
                                            <span class="text-xs font-black text-[#0A2C5C]">{{ firm.details?.postal }} {{ firm.details?.city }}</span>
                                        </div>
                                        <div class="flex justify-between">
                                            <span class="text-xs font-bold text-gray-400">Kraj:</span>
                                            <span class="text-xs font-black text-[#0A2C5C]">{{ firm.details?.country || '-' }}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Extra Description -->
                        <div v-if="firm.details?.extra_description" class="bg-white rounded-[3rem] shadow-xl shadow-blue-900/5 border border-gray-100 p-10">
                            <h3 class="text-[10px] font-black text-gray-400 uppercase tracking-widest mb-6">O firmie</h3>
                            <div class="text-sm text-[#0A2C5C] font-bold leading-relaxed" v-html="firm.details.extra_description"></div>
                        </div>

                        <!-- Recent Projects -->
                        <div class="bg-white rounded-[3rem] shadow-xl shadow-blue-900/5 border border-gray-100 p-10">
                            <div class="flex items-center justify-between mb-8">
                                <h3 class="text-[10px] font-black text-gray-400 uppercase tracking-widest">Ostatnie oferty pracy</h3>
                                <Link :href="route('admin.job-offers.index', { search: firm.name })" class="text-[10px] font-black text-blue-500 uppercase tracking-widest hover:underline">Zobacz wszystkie</Link>
                            </div>
                            <div class="space-y-4">
                                <div v-for="project in firm.recent_projects" :key="project.id" class="flex items-center justify-between p-4 bg-gray-50 rounded-2xl">
                                    <div class="flex items-center gap-4">
                                        <div class="w-10 h-10 bg-white rounded-xl flex items-center justify-center border border-gray-200 text-[#0A2C5C] font-black text-xs">
                                            {{ project.id }}
                                        </div>
                                        <div>
                                            <div class="text-sm font-black text-[#0A2C5C]">{{ getPositionTitle(project) }}</div>
                                            <div class="text-[10px] font-bold text-gray-400 uppercase tracking-widest">{{ moment(project.created_at).format('DD.MM.YYYY') }}</div>
                                        </div>
                                    </div>
                                    <Link :href="route('admin.job-offers.show', project.id)" class="w-8 h-8 bg-white rounded-lg flex items-center justify-center text-[#0A2C5C] hover:bg-blue-500 hover:text-white transition-all shadow-sm">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor" class="w-4 h-4">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                                        </svg>
                                    </Link>
                                </div>
                                <div v-if="!firm.recent_projects?.length" class="text-center py-8 text-gray-400 font-bold text-sm">Brak aktywnych ofert</div>
                            </div>
                        </div>
                    </div>

                    <!-- Right Column: Sidebar -->
                    <div class="space-y-8">
                        <!-- Recruiters -->
                        <div class="bg-white rounded-[3rem] shadow-xl shadow-blue-900/5 border border-gray-100 p-10">
                            <div class="flex items-center justify-between mb-8">
                                <h3 class="text-[10px] font-black text-gray-400 uppercase tracking-widest">Rekruterzy</h3>
                                <Link :href="route('admin.firms.recruiters', firm.id)" class="text-[10px] font-black text-blue-500 uppercase tracking-widest hover:underline">Zarządzaj</Link>
                            </div>
                            <div class="space-y-6">
                                <div v-for="recruit in firm.recruits" :key="recruit.id" class="flex items-center gap-4">
                                    <div class="w-12 h-12 bg-gray-50 rounded-2xl overflow-hidden flex items-center justify-center border border-gray-100">
                                        <img v-if="recruit.photo" :src="recruit.photo" :alt="recruit.name" class="w-full h-full object-cover" />
                                        <span v-else class="text-xs font-black text-[#0A2C5C]/20">{{ recruit.name.substring(0, 2).toUpperCase() }}</span>
                                    </div>
                                    <div>
                                        <div class="text-sm font-black text-[#0A2C5C] leading-none mb-1">{{ recruit.name }}</div>
                                        <div class="text-[10px] font-bold text-gray-400">{{ recruit.email }}</div>
                                    </div>
                                </div>
                                <div v-if="!firm.recruits?.length" class="text-center py-4 text-gray-400 font-bold text-sm italic">Brak przypisanych rekruterów</div>
                            </div>
                        </div>

                        <!-- Quick Actions -->
                        <div class="bg-white rounded-[3rem] shadow-xl shadow-blue-900/5 border border-gray-100 p-10">
                            <h3 class="text-[10px] font-black text-gray-400 uppercase tracking-widest mb-8">Szybkie akcje</h3>
                            <div class="space-y-3">
                                <button @click="showStatusModal = true" class="w-full px-6 py-4 bg-gray-50 rounded-2xl text-[10px] font-black text-[#0A2C5C] uppercase tracking-widest hover:bg-blue-50 transition-all flex items-center gap-3">
                                    <div class="w-2 h-2 rounded-full" :class="getStatusDotClass(firm.status)"></div>
                                    Zmień status konta
                                </button>
                                <Link :href="route('admin.firms.manageCredits', firm.id)" class="w-full px-6 py-4 bg-gray-50 rounded-2xl text-[10px] font-black text-[#0A2C5C] uppercase tracking-widest hover:bg-blue-50 transition-all flex items-center gap-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor" class="w-4 h-4 text-blue-500">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v12m-3-2.818.879.659c1.171.879 3.07.879 4.242 0 1.172-.879 1.172-2.303 0-3.182C13.536 12.219 12.768 12 12 12c-.725 0-1.45-.22-2.003-.659-1.106-.879-1.106-2.303 0-3.182s2.9-.879 4.006 0l.415.33M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                    </svg>
                                    Zarządzaj kredytami
                                </Link>
                                <button v-if="!firm.email_verified_at" @click="verifyEmail" class="w-full px-6 py-4 bg-gray-50 rounded-2xl text-[10px] font-black text-red-600 uppercase tracking-[0.3em] leading-loose hover:bg-red-50 transition-all flex items-center gap-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor" class="w-4 h-4 text-red-500">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12c0 1.268-.63 2.39-1.593 3.068a3.745 3.745 0 0 1-1.043 3.296 3.745 3.745 0 0 1-3.296 1.043A3.745 3.745 0 0 1 12 21c-1.268 0-2.39-.63-3.068-1.593a3.746 3.746 0 0 1-3.296-1.043 3.745 3.745 0 0 1-1.043-3.296A3.745 3.745 0 0 1 3 12c0-1.268.63-2.39 1.593-3.068a3.745 3.745 0 0 1 1.043-3.296 3.746 3.746 0 0 1 3.296-1.043A3.746 3.746 0 0 1 12 3c1.268 0 2.39.63 3.068 1.593a3.746 3.746 0 0 1 3.296 1.043 3.746 3.746 0 0 1 1.043 3.296A3.745 3.745 0 0 1 21 12Z" />
                                    </svg>
                                    Zatwierdź email
                                </button>
                                <a :href="'mailto:' + firm.email" class="w-full px-6 py-4 bg-gray-50 rounded-2xl text-[10px] font-black text-[#0A2C5C] uppercase tracking-widest hover:bg-blue-50 transition-all flex items-center gap-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor" class="w-4 h-4 text-blue-500">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 0 1-2.25 2.25h-15a2.25 2.25 0 0 1-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25m19.5 0v.243a2.25 2.25 0 0 1-1.07 1.916l-7.5 4.615a2.25 2.25 0 0 1-2.36 0L3.32 8.91a2.25 2.25 0 0 1-1.07-1.916V6.75" />
                                    </svg>
                                    Wyślij wiadomość
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </AppLayout>
</template>
