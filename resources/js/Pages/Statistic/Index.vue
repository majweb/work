<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import { ref, onMounted, computed } from 'vue';
import { router } from '@inertiajs/vue3';
import __ from "@/lang.js";

const props = defineProps({
    kpi: Object,
    statusStats: Object,
    charts: Object,
    recruiters: Array,
    projects: Array,
    trendPeriod: String,
});

const activeTab = ref('general');
const isClient = ref(false);
const currentTrendPeriod = ref(props.trendPeriod || 'month');

const changeTrendPeriod = (period) => {
    currentTrendPeriod.value = period;
    router.get(route('statistics.index'), {
        trend_period: period,
    }, {
        preserveState: true,
        preserveScroll: true,
        only: ['charts', 'trendPeriod']
    });
};

onMounted(() => {
    isClient.value = true;
    const savedTab = localStorage.getItem('statistic_active_tab');
    if (savedTab) {
        activeTab.value = savedTab;
    }
});

const setTab = (tab) => {
    activeTab.value = tab;
    localStorage.setItem('statistic_active_tab', tab);
};

// Recruiter filters and pagination
const recruiterSearch = ref('');
const recruiterPage = ref(1);
const itemsPerPage = 10;

const filteredRecruiters = computed(() => {
    let filtered = props.recruiters;
    if (recruiterSearch.value) {
        filtered = filtered.filter(r => r.name.toLowerCase().includes(recruiterSearch.value.toLowerCase()));
    }
    return filtered;
});

const paginatedRecruiters = computed(() => {
    const start = (recruiterPage.value - 1) * itemsPerPage;
    return filteredRecruiters.value.slice(start, start + itemsPerPage);
});

const totalRecruiterPages = computed(() => Math.ceil(filteredRecruiters.value.length / itemsPerPage));
const recruiterPages = computed(() => Array.from({ length: totalRecruiterPages.value || 1 }, (_, i) => i + 1));
const setRecruiterPage = (p) => {
    const max = totalRecruiterPages.value || 1;
    if (p < 1) { p = 1; }
    if (p > max) { p = max; }
    recruiterPage.value = p;
};

// Project filters and pagination
const projectSearch = ref('');
const projectPage = ref(1);

const filteredProjects = computed(() => {
    let filtered = props.projects;
    if (projectSearch.value) {
        filtered = filtered.filter(p =>
            p.position_name?.toLowerCase().includes(projectSearch.value.toLowerCase()) ||
            p.id.toString().includes(projectSearch.value)
        );
    }
    return filtered;
});

const paginatedProjects = computed(() => {
    const start = (projectPage.value - 1) * itemsPerPage;
    return filteredProjects.value.slice(start, start + itemsPerPage);
});

const totalProjectPages = computed(() => Math.ceil(filteredProjects.value.length / itemsPerPage));
const projectPages = computed(() => Array.from({ length: totalProjectPages.value || 1 }, (_, i) => i + 1));
const setProjectPage = (p) => {
    const max = totalProjectPages.value || 1;
    if (p < 1) { p = 1; }
    if (p > max) { p = max; }
    projectPage.value = p;
};

</script>

<template>
    <AppLayout :title="__('translate.statistics')">
        <div class="py-12 bg-gray-50/50 min-h-screen">
            <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                <!-- HEADER CARD -->
                <div class="bg-white rounded-[3rem] shadow-xl shadow-blue-900/5 border border-gray-100 p-10 mb-8">
                    <div class="flex items-center justify-between">
                        <div>
                            <h3 class="text-2xl font-black text-[#0A2C5C] uppercase tracking-tight">{{ __('translate.statistics') }}</h3>
                            <p class="text-[10px] font-bold text-gray-400 uppercase tracking-widest mt-1">{{ __('translate.statisticsDescription') ?? 'Przegląd statystyk i analiz aktywności' }}</p>
                        </div>
                    </div>
                </div>

                <!-- Tabs -->
                <div class="flex gap-2 mb-8 bg-gray-100/50 p-2 rounded-[2rem] w-fit border border-gray-100 shadow-sm">
                    <button
                        @click="setTab('general')"
                        class="px-8 py-3 rounded-2xl font-black text-[10px] uppercase tracking-widest transition-all"
                        :class="activeTab === 'general' ? 'bg-[#0A2C5C] text-white shadow-lg shadow-blue-900/20' : 'text-gray-400 hover:text-gray-600'"
                    >
                        {{ __('translate.statistics') }} {{ __('translate.general') }}
                    </button>
                    <button
                        @click="setTab('detailed')"
                        class="px-8 py-3 rounded-2xl font-black text-[10px] uppercase tracking-widest transition-all"
                        :class="activeTab === 'detailed' ? 'bg-[#0A2C5C] text-white shadow-lg shadow-blue-900/20' : 'text-gray-400 hover:text-gray-600'"
                    >
                        {{ __('translate.statistics') }} {{ __('translate.detailed') }}
                    </button>
                </div>

                <!-- Tab content: GENERAL -->
                <div v-show="activeTab === 'general'" class="space-y-8">

                    <!-- KPI Tiles -->
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                        <div class="bg-white p-8 rounded-[2.5rem] shadow-sm border border-gray-100 flex items-center gap-6 transition-all duration-300 hover:shadow-xl hover:shadow-blue-900/5 hover:-translate-y-1">
                            <div class="w-16 h-16 bg-blue-50 rounded-2xl flex items-center justify-center text-[#00a0e3] shrink-0">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                                </svg>
                            </div>
                            <div>
                                <p class="text-3xl font-black text-[#0A2C5C] tracking-tighter">{{ props.kpi.recruiters }}</p>
                                <p class="text-[10px] font-black text-gray-400 uppercase tracking-widest mt-1">{{ __('translate.recruiterCount') }}</p>
                            </div>
                        </div>

                        <div class="bg-white p-8 rounded-[2.5rem] shadow-sm border border-gray-100 flex items-center gap-6 transition-all duration-300 hover:shadow-xl hover:shadow-blue-900/5 hover:-translate-y-1">
                            <div class="w-16 h-16 bg-blue-50 rounded-2xl flex items-center justify-center text-[#00a0e3] shrink-0">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10" />
                                </svg>
                            </div>
                            <div>
                                <p class="text-3xl font-black text-[#0A2C5C] tracking-tighter">{{ props.kpi.projects }}</p>
                                <p class="text-[10px] font-black text-gray-400 uppercase tracking-widest mt-1">{{ __('translate.projectCountStat') }}</p>
                            </div>
                        </div>

                        <div class="bg-white p-8 rounded-[2.5rem] shadow-sm border border-gray-100 flex items-center gap-6 transition-all duration-300 hover:shadow-xl hover:shadow-blue-900/5 hover:-translate-y-1">
                            <div class="w-16 h-16 bg-blue-50 rounded-2xl flex items-center justify-center text-[#00a0e3] shrink-0">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                                </svg>
                            </div>
                            <div>
                                <p class="text-3xl font-black text-[#0A2C5C] tracking-tighter">{{ props.kpi.applications }}</p>
                                <p class="text-[10px] font-black text-gray-400 uppercase tracking-widest mt-1">{{ __('translate.applicationCountStat') }}</p>
                            </div>
                        </div>

                        <div class="bg-white p-8 rounded-[2.5rem] shadow-sm border border-gray-100 flex items-center gap-6 transition-all duration-300 hover:shadow-xl hover:shadow-blue-900/5 hover:-translate-y-1">
                            <div class="w-16 h-16 bg-blue-50 rounded-2xl flex items-center justify-center text-[#00a0e3] shrink-0">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                </svg>
                            </div>
                            <div>
                                <p class="text-3xl font-black text-[#0A2C5C] tracking-tighter">{{ props.kpi.visits }}</p>
                                <p class="text-[10px] font-black text-gray-400 uppercase tracking-widest mt-1">{{ __('translate.visitCount') }}</p>
                            </div>
                        </div>
                    </div>

                    <!-- Pie Charts -->
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                        <div class="bg-white p-10 rounded-[3rem] shadow-xl shadow-blue-900/5 border border-gray-100">
                            <h3 class="text-center font-black text-[#0A2C5C] text-xl mb-2 uppercase tracking-tight">{{ __('translate.industryInterest') }}</h3>
                            <p class="text-center text-[10px] font-black text-gray-400 uppercase tracking-widest mb-8">{{ __('translate.visits') }}</p>
                            <apexchart v-if="isClient && props.charts.visitsByIndustry?.series?.length" type="pie" height="350" :options="props.charts.visitsByIndustry.options" :series="props.charts.visitsByIndustry.series"></apexchart>
                            <div v-else class="h-[350px] flex flex-col items-center justify-center">
                                <div class="w-16 h-16 bg-gray-50 rounded-full flex items-center justify-center mb-4">
                                    <svg class="w-8 h-8 text-gray-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
                                    </svg>
                                </div>
                                <p class="text-[10px] font-black text-gray-400 uppercase tracking-widest">{{ __('translate.NoData') }}</p>
                            </div>
                        </div>
                        <div class="bg-white p-10 rounded-[3rem] shadow-xl shadow-blue-900/5 border border-gray-100">
                            <h3 class="text-center font-black text-[#0A2C5C] text-xl mb-2 uppercase tracking-tight">{{ __('translate.industryInterest') }}</h3>
                            <p class="text-center text-[10px] font-black text-gray-400 uppercase tracking-widest mb-8">{{ __('translate.applications') }}</p>
                            <apexchart v-if="isClient && props.charts.appsByIndustry?.series?.length" type="pie" height="350" :options="props.charts.appsByIndustry.options" :series="props.charts.appsByIndustry.series"></apexchart>
                            <div v-else class="h-[350px] flex flex-col items-center justify-center">
                                <div class="w-16 h-16 bg-gray-50 rounded-full flex items-center justify-center mb-4">
                                    <svg class="w-8 h-8 text-gray-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
                                    </svg>
                                </div>
                                <p class="text-[10px] font-black text-gray-400 uppercase tracking-widest">{{ __('translate.NoData') }}</p>
                            </div>
                        </div>
                    </div>

                    <!-- Status indicators -->
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                        <div class="bg-white p-8 rounded-[2.5rem] shadow-sm border border-gray-100 flex items-center gap-8 transition-all duration-300 hover:shadow-xl hover:shadow-blue-900/5 hover:-translate-y-1">
                            <div class="relative w-20 h-20 shrink-0">
                                <svg class="w-full h-full transform -rotate-90">
                                    <circle cx="40" cy="40" r="36" stroke="#f3f4f6" stroke-width="8" fill="transparent" />
                                    <circle cx="40" cy="40" r="36" stroke="#0A2C5C" stroke-width="8" fill="transparent"
                                        stroke-dasharray="226.19" :stroke-dashoffset="226.19 * (1 - 0.75)" />
                                </svg>
                                <div class="absolute inset-0 flex items-center justify-center text-[#0A2C5C]">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7" />
                                    </svg>
                                </div>
                            </div>
                            <div>
                                <p class="text-4xl font-black text-[#0A2C5C] tracking-tighter">{{ props.statusStats.yes }}</p>
                                <p class="text-[10px] font-black text-gray-400 uppercase tracking-widest mt-1">STATUS: {{ __('translate.yes') }}</p>
                            </div>
                        </div>

                        <div class="bg-white p-8 rounded-[2.5rem] shadow-sm border border-gray-100 flex items-center gap-8 transition-all duration-300 hover:shadow-xl hover:shadow-blue-900/5 hover:-translate-y-1">
                            <div class="relative w-20 h-20 shrink-0">
                                <svg class="w-full h-full transform -rotate-90">
                                    <circle cx="40" cy="40" r="36" stroke="#f3f4f6" stroke-width="8" fill="transparent" />
                                    <circle cx="40" cy="40" r="36" stroke="#00a0e3" stroke-width="8" fill="transparent"
                                        stroke-dasharray="226.19" :stroke-dashoffset="226.19 * (1 - 0.45)" />
                                </svg>
                                <div class="absolute inset-0 flex items-center justify-center text-[#00a0e3]">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                </div>
                            </div>
                            <div>
                                <p class="text-4xl font-black text-[#0A2C5C] tracking-tighter">{{ props.statusStats.maybe }}</p>
                                <p class="text-[10px] font-black text-gray-400 uppercase tracking-widest mt-1">STATUS: {{ __('translate.maybe') }}</p>
                            </div>
                        </div>

                        <div class="bg-white p-8 rounded-[2.5rem] shadow-sm border border-gray-100 flex items-center gap-8 transition-all duration-300 hover:shadow-xl hover:shadow-blue-900/5 hover:-translate-y-1">
                            <div class="relative w-20 h-20 shrink-0">
                                <svg class="w-full h-full transform -rotate-90">
                                    <circle cx="40" cy="40" r="36" stroke="#f3f4f6" stroke-width="8" fill="transparent" />
                                    <circle cx="40" cy="40" r="36" stroke="#e31e24" stroke-width="8" fill="transparent"
                                        stroke-dasharray="226.19" :stroke-dashoffset="226.19 * (1 - 0.25)" />
                                </svg>
                                <div class="absolute inset-0 flex items-center justify-center text-[#e31e24]">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M6 18L18 6M6 6l12 12" />
                                    </svg>
                                </div>
                            </div>
                            <div>
                                <p class="text-4xl font-black text-[#0A2C5C] tracking-tighter">{{ props.statusStats.no }}</p>
                                <p class="text-[10px] font-black text-gray-400 uppercase tracking-widest mt-1">STATUS: {{ __('translate.no') }}</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Tab content: DETAILED -->
                <div v-show="activeTab === 'detailed'" class="space-y-12">

                    <!-- Recruiters Table -->
                    <div>
                        <div class="flex items-center justify-between mb-6">
                            <h3 class="text-2xl font-black text-[#0A2C5C] uppercase tracking-tight">{{ __('translate.recruits') }}</h3>
                            <div class="flex gap-4">
                                <input v-model="recruiterSearch" @input="setRecruiterPage(1)" type="text" :placeholder="__('translate.searchRecruiter')" class="px-5 py-3 text-[10px] font-bold uppercase tracking-widest rounded-2xl border-gray-100 bg-white focus:bg-white focus:ring-0 focus:border-[#00a0e3] transition-all placeholder-gray-300">
                                <button @click="recruiterSearch = ''; setRecruiterPage(1)" class="px-6 py-3 text-[10px] font-black text-gray-400 uppercase tracking-widest hover:text-gray-600 transition-colors bg-white rounded-2xl border border-gray-100 shadow-sm">{{ __('translate.resetFilter') }}</button>
                            </div>
                        </div>
                        <div class="bg-white rounded-[3rem] shadow-xl shadow-blue-900/5 border border-gray-100 overflow-hidden p-1">
                            <div class="overflow-x-auto rounded-[2.8rem]">
                                <table class="w-full text-left border-collapse">
                                    <thead>
                                        <tr class="bg-gray-50/50">
                                            <th class="px-8 py-6 text-[10px] font-black text-[#00a0e3] uppercase tracking-[0.2em] border-b border-gray-50">{{ __('translate.recruit') }}</th>
                                            <th class="px-8 py-6 text-[10px] font-black text-[#00a0e3] uppercase tracking-[0.2em] text-center border-b border-gray-50">{{ __('translate.projects') }}</th>
                                            <th class="px-8 py-6 text-[10px] font-black text-[#00a0e3] uppercase tracking-[0.2em] text-center border-b border-gray-50">{{ __('translate.applications') }}</th>
                                            <th class="px-8 py-6 text-[10px] font-black text-[#00a0e3] uppercase tracking-[0.2em] text-center border-b border-gray-50">{{ __('translate.yes') }}</th>
                                            <th class="px-8 py-6 text-[10px] font-black text-[#00a0e3] uppercase tracking-[0.2em] text-center border-b border-gray-50">{{ __('translate.no') }}</th>
                                            <th class="px-8 py-6 text-[10px] font-black text-[#00a0e3] uppercase tracking-[0.2em] text-center border-b border-gray-50">{{ __('translate.maybe') }}</th>
                                            <th class="px-8 py-6 text-[10px] font-black text-[#0A2C5C] uppercase tracking-[0.2em] text-center border-b border-gray-50">{{ __('translate.qualityStatus') }}</th>
                                            <th class="px-8 py-6 text-[10px] font-black text-[#0A2C5C] uppercase tracking-[0.2em] text-right border-b border-gray-50">{{ __('translate.lastActive') }}</th>
                                        </tr>
                                    </thead>
                                    <tbody class="divide-y divide-gray-50">
                                        <tr v-if="paginatedRecruiters.length === 0">
                                            <td colspan="8" class="px-8 py-16 text-center">
                                                <div class="flex flex-col items-center">
                                                    <div class="w-16 h-16 bg-gray-50 rounded-full flex items-center justify-center mb-4">
                                                        <svg class="w-8 h-8 text-gray-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                                                        </svg>
                                                    </div>
                                                    <p class="text-[10px] font-black text-gray-300 uppercase tracking-widest">{{ __('translate.noResults') }}</p>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr v-for="recruit in paginatedRecruiters" :key="recruit.id" class="hover:bg-gray-50/50 transition-colors">
                                            <td class="px-8 py-6">
                                                <div class="flex items-center gap-4">
                                                    <img :src="recruit.profile_photo_url" class="w-10 h-10 rounded-full object-cover border-2 border-[#00a0e3]/20 shadow-sm" alt="">
                                                    <span class="font-black text-[#0A2C5C] uppercase text-[11px] tracking-widest leading-tight">{{ recruit.name }}</span>
                                                </div>
                                            </td>
                                            <td class="px-8 py-6 text-center font-bold text-gray-500 text-xs">{{ recruit.projects_recruits_count }}</td>
                                            <td class="px-8 py-6 text-center font-bold text-gray-500 text-xs">{{ recruit.applications_recruits_count }}</td>
                                            <td class="px-8 py-6 text-center font-bold text-gray-500 text-xs">{{ recruit.yes_count }}</td>
                                            <td class="px-8 py-6 text-center font-bold text-gray-500 text-xs">{{ recruit.no_count }}</td>
                                            <td class="px-8 py-6 text-center font-bold text-gray-500 text-xs">{{ recruit.maybe_count }}</td>
                                            <td class="px-8 py-6 text-center">
                                                <span class="font-black text-[#0A2C5C] text-sm tracking-tighter">{{ recruit.quality }}%</span>
                                            </td>
                                            <td class="px-8 py-6 text-right">
                                                <span class="text-[9px] font-black text-gray-400 uppercase tracking-widest">{{ recruit.last_activity }}</span>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <!-- Pagination: Recruiters -->
                        <div v-if="totalRecruiterPages > 1" class="flex items-center justify-between mt-8">
                            <p class="text-[10px] font-black text-gray-400 uppercase tracking-widest">{{ (recruiterPage - 1) * itemsPerPage + 1 }} -
                                {{ Math.min(recruiterPage * itemsPerPage, filteredRecruiters.length) }} / {{ filteredRecruiters.length }}</p>
                            <div class="flex items-center gap-2">
                                <button @click="setRecruiterPage(recruiterPage - 1)" :disabled="recruiterPage === 1"
                                        class="w-10 h-10 flex items-center justify-center rounded-xl border border-gray-100 bg-white text-gray-400 hover:bg-gray-50 disabled:opacity-30 transition-all shadow-sm">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3"><path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" /></svg>
                                </button>
                                <button v-for="p in recruiterPages" :key="p" @click="setRecruiterPage(p)"
                                        class="w-10 h-10 text-[10px] font-black rounded-xl border transition-all shadow-sm flex items-center justify-center"
                                        :class="p === recruiterPage ? 'bg-[#0A2C5C] text-white border-[#0A2C5C] shadow-lg shadow-blue-900/20' : 'border-gray-100 bg-white text-gray-400 hover:bg-gray-50'">
                                    {{ p }}
                                </button>
                                <button @click="setRecruiterPage(recruiterPage + 1)" :disabled="recruiterPage === totalRecruiterPages"
                                        class="w-10 h-10 flex items-center justify-center rounded-xl border border-gray-100 bg-white text-gray-400 hover:bg-gray-50 disabled:opacity-30 transition-all shadow-sm">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3"><path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" /></svg>
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Projects Table -->
                    <div>
                        <div class="flex items-center justify-between mb-6">
                            <h3 class="text-2xl font-black text-[#0A2C5C] uppercase tracking-tight">{{ __('translate.projects') }}</h3>
                            <div class="flex gap-4">
                                <input v-model="projectSearch" @input="setProjectPage(1)" type="text" :placeholder="__('translate.searchProject')" class="px-5 py-3 text-[10px] font-bold uppercase tracking-widest rounded-2xl border-gray-100 bg-white focus:bg-white focus:ring-0 focus:border-[#00a0e3] transition-all placeholder-gray-300">
                                <button @click="projectSearch = ''; setProjectPage(1)" class="px-6 py-3 text-[10px] font-black text-gray-400 uppercase tracking-widest hover:text-gray-600 transition-colors bg-white rounded-2xl border border-gray-100 shadow-sm">{{ __('translate.resetFilter') }}</button>
                            </div>
                        </div>
                        <div class="bg-white rounded-[3rem] shadow-xl shadow-blue-900/5 border border-gray-100 overflow-hidden p-1">
                            <div class="overflow-x-auto rounded-[2.8rem]">
                                <table class="w-full text-left border-collapse">
                                    <thead>
                                        <tr class="bg-gray-50/50">
                                            <th class="px-8 py-6 text-[10px] font-black text-[#00a0e3] uppercase tracking-[0.2em] border-b border-gray-50">ID</th>
                                            <th class="px-8 py-6 text-[10px] font-black text-[#00a0e3] uppercase tracking-[0.2em] border-b border-gray-50">{{ __('translate.projects') }}</th>
                                            <th class="px-8 py-6 text-[10px] font-black text-[#00a0e3] uppercase tracking-[0.2em] text-center border-b border-gray-50">{{ __('translate.applicationCountStat') }}</th>
                                            <th class="px-8 py-6 text-[10px] font-black text-[#00a0e3] uppercase tracking-[0.2em] text-center border-b border-gray-50">{{ __('translate.yes') }}</th>
                                            <th class="px-8 py-6 text-[10px] font-black text-[#00a0e3] uppercase tracking-[0.2em] text-center border-b border-gray-50">{{ __('translate.no') }}</th>
                                            <th class="px-8 py-6 text-[10px] font-black text-[#00a0e3] uppercase tracking-[0.2em] text-center border-b border-gray-50">{{ __('translate.maybe') }}</th>
                                            <th class="px-8 py-6 text-[10px] font-black text-[#0A2C5C] uppercase tracking-[0.2em] text-center border-b border-gray-50">{{ __('translate.statusDistribution') }}</th>
                                            <th class="px-8 py-6 text-[10px] font-black text-[#0A2C5C] uppercase tracking-[0.2em] text-right border-b border-gray-50">{{ __('translate.recruit') }}</th>
                                        </tr>
                                    </thead>
                                    <tbody class="divide-y divide-gray-50">
                                        <tr v-if="paginatedProjects.length === 0">
                                            <td colspan="8" class="px-8 py-16 text-center">
                                                <div class="flex flex-col items-center">
                                                    <div class="w-16 h-16 bg-gray-50 rounded-full flex items-center justify-center mb-4">
                                                        <svg class="w-8 h-8 text-gray-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19 21V5a2 2 0 012-2h2a2 2 0 012 2v16M3 21V10a2 2 0 012-2h2a2 2 0 012 2v11m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v16m-6 0a2 2 0 002 2h2a2 2 0 002-2" />
                                                        </svg>
                                                    </div>
                                                    <p class="text-[10px] font-black text-gray-300 uppercase tracking-widest">{{ __('translate.noResults') }}</p>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr v-for="project in paginatedProjects" :key="project.id" class="hover:bg-gray-50/50 transition-colors">
                                            <td class="px-8 py-6">
                                                <span class="text-[10px] font-black text-gray-300 uppercase tracking-widest">#{{ project.id }}</span>
                                            </td>
                                            <td class="px-8 py-6">
                                                <p class="font-black text-[#0A2C5C] uppercase text-[11px] tracking-tight leading-tight line-clamp-1 max-w-[200px]">{{ project.position_name }}</p>
                                            </td>
                                            <td class="px-8 py-6 text-center font-bold text-gray-500 text-xs">{{ project.aplications_count }}</td>
                                            <td class="px-8 py-6 text-center font-bold text-gray-500 text-xs">{{ project.yes_count }}</td>
                                            <td class="px-8 py-6 text-center font-bold text-gray-500 text-xs">{{ project.no_count }}</td>
                                            <td class="px-8 py-6 text-center font-bold text-gray-500 text-xs">{{ project.maybe_count }}</td>
                                            <td class="px-8 py-6 min-w-[240px]">
                                                <div class="flex h-5 rounded-full overflow-hidden text-[8px] font-black text-white shadow-inner bg-gray-50">
                                                    <div v-if="project.distribution.yes" class="bg-[#0A2C5C] flex items-center justify-center transition-all duration-500" :style="{ width: project.distribution.yes + '%' }">
                                                        {{ project.distribution.yes }}%
                                                    </div>
                                                    <div v-if="project.distribution.maybe" class="bg-[#00a0e3] flex items-center justify-center transition-all duration-500" :style="{ width: project.distribution.maybe + '%' }">
                                                        {{ project.distribution.maybe }}%
                                                    </div>
                                                    <div v-if="project.distribution.no" class="bg-[#e31e24] flex items-center justify-center transition-all duration-500" :style="{ width: project.distribution.no + '%' }">
                                                        {{ project.distribution.no }}%
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="px-8 py-6 text-right">
                                                <div class="flex items-center justify-end gap-3">
                                                    <span class="font-black text-[#0A2C5C] uppercase text-[10px] tracking-widest whitespace-nowrap">{{ project.recruit?.name }}</span>
                                                    <img :src="project.recruit?.profile_photo_url" class="w-10 h-10 rounded-full object-cover border-2 border-[#00a0e3]/20 shadow-sm" alt="">
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <!-- Pagination: Projects -->
                        <div v-if="totalProjectPages > 1" class="flex items-center justify-between mt-8">
                            <p class="text-[10px] font-black text-gray-400 uppercase tracking-widest">{{ (projectPage - 1) * itemsPerPage + 1 }} -
                                {{ Math.min(projectPage * itemsPerPage, filteredProjects.length) }} / {{ filteredProjects.length }}</p>
                            <div class="flex items-center gap-2">
                                <button @click="setProjectPage(projectPage - 1)" :disabled="projectPage === 1"
                                        class="w-10 h-10 flex items-center justify-center rounded-xl border border-gray-100 bg-white text-gray-400 hover:bg-gray-50 disabled:opacity-30 transition-all shadow-sm">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3"><path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" /></svg>
                                </button>
                                <button v-for="p in projectPages" :key="p" @click="setProjectPage(p)"
                                        class="w-10 h-10 text-[10px] font-black rounded-xl border transition-all shadow-sm flex items-center justify-center"
                                        :class="p === projectPage ? 'bg-[#0A2C5C] text-white border-[#0A2C5C] shadow-lg shadow-blue-900/20' : 'border-gray-100 bg-white text-gray-400 hover:bg-gray-50'">
                                    {{ p }}
                                </button>
                                <button @click="setProjectPage(projectPage + 1)" :disabled="projectPage === totalProjectPages"
                                        class="w-10 h-10 flex items-center justify-center rounded-xl border border-gray-100 bg-white text-gray-400 hover:bg-gray-50 disabled:opacity-30 transition-all shadow-sm">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3"><path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" /></svg>
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Trend Indicators -->
                    <div>
                        <div class="flex items-center justify-between mb-6">
                            <h3 class="text-2xl font-black text-[#0A2C5C] uppercase tracking-tight">{{ __('translate.industryTrends') }}</h3>
                            <div class="flex gap-2 bg-gray-100/50 p-1.5 rounded-2xl border border-gray-100 shadow-sm">
                                <button
                                    @click="changeTrendPeriod('day')"
                                    class="px-6 py-2.5 rounded-xl text-[10px] font-black uppercase tracking-widest transition-all"
                                    :class="currentTrendPeriod === 'day' ? 'bg-[#0A2C5C] text-white shadow-lg shadow-blue-900/20' : 'text-gray-400 hover:text-gray-600'"
                                >
                                    {{ __('translate.days') }}
                                </button>
                                <button
                                    @click="changeTrendPeriod('month')"
                                    class="px-6 py-2.5 rounded-xl text-[10px] font-black uppercase tracking-widest transition-all"
                                    :class="currentTrendPeriod === 'month' ? 'bg-[#0A2C5C] text-white shadow-lg shadow-blue-900/20' : 'text-gray-400 hover:text-gray-600'"
                                >
                                    {{ __('translate.months') }}
                                </button>
                            </div>
                        </div>
                        <div class="bg-white p-10 rounded-[3rem] shadow-xl shadow-blue-900/5 border border-gray-100">
                            <apexchart v-if="isClient && props.charts.industryTrends?.series?.length" :key="`trends-${currentTrendPeriod}-${JSON.stringify(props.charts.industryTrends.options.xaxis.categories)}`" type="line" height="400" :options="props.charts.industryTrends.options" :series="props.charts.industryTrends.series"></apexchart>
                            <div v-else class="h-[400px] flex flex-col items-center justify-center">
                                <div class="w-16 h-16 bg-gray-50 rounded-full flex items-center justify-center mb-4">
                                    <svg class="w-8 h-8 text-gray-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M7 12l3-3 3 3 4-4M8 21l4-4 4 4M3 4h18M4 4h16" />
                                    </svg>
                                </div>
                                <p class="text-[10px] font-black text-gray-400 uppercase tracking-widest">{{ __('translate.NoData') }}</p>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </AppLayout>
</template>

<style scoped>
/* Custom tab shadow */
.shadow-sm {
    box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.05);
}
</style>
