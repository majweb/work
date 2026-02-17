<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import { ref, onMounted, computed } from 'vue';
import __ from "@/lang.js";

const props = defineProps({
    kpi: Object,
    statusStats: Object,
    charts: Object,
    recruiters: Array,
    projects: Array,
});

const activeTab = ref('general');

onMounted(() => {
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
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('translate.statistics') }}
            </h2>
        </template>

        <div class="py-12 bg-gray-50 min-h-screen">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

                <!-- Tabs -->
                <div class="flex gap-1 mb-6 bg-gray-200 p-1 rounded-xl w-fit">
                    <button
                        @click="setTab('general')"
                        class="px-6 py-2 rounded-lg font-bold transition-all"
                        :class="activeTab === 'general' ? 'bg-white text-[#0d2a52] shadow-sm' : 'text-gray-500 hover:text-gray-700'"
                    >
                        {{ __('translate.statistics') }} {{ __('translate.general') }}
                    </button>
                    <button
                        @click="setTab('detailed')"
                        class="px-6 py-2 rounded-lg font-bold transition-all"
                        :class="activeTab === 'detailed' ? 'bg-white text-[#0d2a52] shadow-sm' : 'text-gray-500 hover:text-gray-700'"
                    >
                        {{ __('translate.statistics') }} {{ __('translate.detailed') }}
                    </button>
                </div>

                <!-- Tab content: GENERAL -->
                <div v-if="activeTab === 'general'" class="space-y-6">

                    <!-- KPI Tiles -->
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                        <div class="bg-white p-6 rounded-2xl shadow-sm border border-gray-100 flex items-center gap-4">
                            <div class="w-16 h-16 bg-blue-50 rounded-2xl flex items-center justify-center text-[#00a0e3]">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-10 h-10" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                                </svg>
                            </div>
                            <div>
                                <p class="text-3xl font-black text-[#0d2a52]">{{ props.kpi.recruiters }}</p>
                                <p class="text-xs font-bold text-gray-400 uppercase tracking-wider">{{ __('translate.recruiterCount') }}</p>
                            </div>
                        </div>

                        <div class="bg-white p-6 rounded-2xl shadow-sm border border-gray-100 flex items-center gap-4">
                            <div class="w-16 h-16 bg-blue-50 rounded-2xl flex items-center justify-center text-[#00a0e3]">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-10 h-10" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10" />
                                </svg>
                            </div>
                            <div>
                                <p class="text-3xl font-black text-[#0d2a52]">{{ props.kpi.projects }}</p>
                                <p class="text-xs font-bold text-gray-400 uppercase tracking-wider">{{ __('translate.projectCountStat') }}</p>
                            </div>
                        </div>

                        <div class="bg-white p-6 rounded-2xl shadow-sm border border-gray-100 flex items-center gap-4">
                            <div class="w-16 h-16 bg-blue-50 rounded-2xl flex items-center justify-center text-[#00a0e3]">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-10 h-10" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                                </svg>
                            </div>
                            <div>
                                <p class="text-3xl font-black text-[#0d2a52]">{{ props.kpi.applications }}</p>
                                <p class="text-xs font-bold text-gray-400 uppercase tracking-wider">{{ __('translate.applicationCountStat') }}</p>
                            </div>
                        </div>

                        <div class="bg-white p-6 rounded-2xl shadow-sm border border-gray-100 flex items-center gap-4">
                            <div class="w-16 h-16 bg-blue-50 rounded-2xl flex items-center justify-center text-[#00a0e3]">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-10 h-10" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                </svg>
                            </div>
                            <div>
                                <p class="text-3xl font-black text-[#0d2a52]">{{ props.kpi.visits }}</p>
                                <p class="text-xs font-bold text-gray-400 uppercase tracking-wider">{{ __('translate.visitCount') }}</p>
                            </div>
                        </div>
                    </div>

                    <!-- Pie Charts -->
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                        <div class="bg-white p-6 rounded-2xl shadow-sm border border-gray-100">
                            <h3 class="text-center font-black text-[#0d2a52] text-xl mb-6">{{ __('translate.industryInterest') }} <span class="text-gray-400 font-normal block text-sm">{{ __('translate.visits') }}</span></h3>
                            <apexchart v-if="props.charts.visitsByIndustry?.series?.length" type="pie" height="350" :options="props.charts.visitsByIndustry.options" :series="props.charts.visitsByIndustry.series"></apexchart>
                            <div v-else class="h-[350px] flex items-center justify-center text-gray-400 font-bold italic">
                                {{ __('translate.NoData') }}
                            </div>
                        </div>
                        <div class="bg-white p-6 rounded-2xl shadow-sm border border-gray-100">
                            <h3 class="text-center font-black text-[#0d2a52] text-xl mb-6">{{ __('translate.industryInterest') }} <span class="text-gray-400 font-normal block text-sm">{{ __('translate.applications') }}</span></h3>
                            <apexchart v-if="props.charts.appsByIndustry?.series?.length" type="pie" height="350" :options="props.charts.appsByIndustry.options" :series="props.charts.appsByIndustry.series"></apexchart>
                            <div v-else class="h-[350px] flex items-center justify-center text-gray-400 font-bold italic">
                                {{ __('translate.NoData') }}
                            </div>
                        </div>
                    </div>

                    <!-- Status indicators -->
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                        <div class="bg-white p-6 rounded-2xl shadow-sm border border-gray-100 flex items-center gap-6">
                            <div class="relative w-20 h-20">
                                <svg class="w-full h-full transform -rotate-90">
                                    <circle cx="40" cy="40" r="36" stroke="#f3f4f6" stroke-width="8" fill="transparent" />
                                    <circle cx="40" cy="40" r="36" stroke="#0d2a52" stroke-width="8" fill="transparent"
                                        stroke-dasharray="226.19" :stroke-dashoffset="226.19 * (1 - 0.75)" />
                                </svg>
                                <div class="absolute inset-0 flex items-center justify-center text-[#0d2a52]">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7" />
                                    </svg>
                                </div>
                            </div>
                            <div>
                                <p class="text-4xl font-black text-[#0d2a52]">{{ props.statusStats.yes }}</p>
                                <p class="text-xs font-bold text-gray-400 uppercase tracking-wider">STATUS: {{ __('translate.yes').toUpperCase() }}</p>
                            </div>
                        </div>

                        <div class="bg-white p-6 rounded-2xl shadow-sm border border-gray-100 flex items-center gap-6">
                            <div class="relative w-20 h-20">
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
                                <p class="text-4xl font-black text-[#0d2a52]">{{ props.statusStats.maybe }}</p>
                                <p class="text-xs font-bold text-gray-400 uppercase tracking-wider">STATUS: {{ __('translate.maybe').toUpperCase() }}</p>
                            </div>
                        </div>

                        <div class="bg-white p-6 rounded-2xl shadow-sm border border-gray-100 flex items-center gap-6">
                            <div class="relative w-20 h-20">
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
                                <p class="text-4xl font-black text-[#0d2a52]">{{ props.statusStats.no }}</p>
                                <p class="text-xs font-bold text-gray-400 uppercase tracking-wider">STATUS: {{ __('translate.no').toUpperCase() }}</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Tab content: DETAILED -->
                <div v-else class="space-y-8">

                    <!-- Recruiters Table -->
                    <div>
                        <div class="flex items-center justify-between mb-4">
                            <h3 class="text-2xl font-black text-[#0d2a52]">{{ __('translate.recruits') }}</h3>
                            <div class="flex gap-2">
                                <input v-model="recruiterSearch" @input="setRecruiterPage(1)" type="text" :placeholder="__('translate.searchRecruiter')" class="text-sm border-gray-300 rounded-lg focus:ring-[#0d2a52]">
                                <button @click="recruiterSearch = ''; setRecruiterPage(1)" class="px-4 py-2 text-xs font-bold text-gray-500 uppercase">{{ __('translate.resetFilter') }}</button>
                            </div>
                        </div>
                        <div class="bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden">
                            <div class="overflow-x-auto">
                                <table class="w-full text-left">
                                    <thead class="bg-gray-50 text-[#00a0e3] text-xs font-black uppercase tracking-wider">
                                        <tr>
                                            <th class="px-6 py-4">{{ __('translate.recruit') }}</th>
                                            <th class="px-6 py-4 text-center">{{ __('translate.projects') }}</th>
                                            <th class="px-6 py-4 text-center">{{ __('translate.applications') }}</th>
                                            <th class="px-6 py-4 text-center">{{ __('translate.yes') }}</th>
                                            <th class="px-6 py-4 text-center">{{ __('translate.no') }}</th>
                                            <th class="px-6 py-4 text-center">{{ __('translate.maybe') }}</th>
                                            <th class="px-6 py-4 text-center text-[#0d2a52]">{{ __('translate.qualityStatus') }}</th>
                                            <th class="px-6 py-4 text-right text-[#0d2a52]">{{ __('translate.lastActive') }}</th>
                                        </tr>
                                    </thead>
                                    <tbody class="divide-y divide-gray-100">
                                        <tr v-if="paginatedRecruiters.length === 0">
                                            <td colspan="8" class="px-6 py-12 text-center text-gray-400 italic font-bold">
                                                {{ __('translate.noResults') }}
                                            </td>
                                        </tr>
                                        <tr v-for="recruit in paginatedRecruiters" :key="recruit.id" class="hover:bg-gray-50 transition-colors">
                                            <td class="px-6 py-4">
                                                <div class="flex items-center gap-3">
                                                    <img :src="recruit.profile_photo_url" class="w-10 h-10 rounded-full object-cover border-2 border-[#00a0e3]" alt="">
                                                    <span class="font-bold text-[#0d2a52]">{{ recruit.name }}</span>
                                                </div>
                                            </td>
                                            <td class="px-6 py-4 text-center font-bold text-gray-600">{{ recruit.projects_recruits_count }}</td>
                                            <td class="px-6 py-4 text-center font-bold text-gray-600">{{ recruit.applications_recruits_count }}</td>
                                            <td class="px-6 py-4 text-center font-bold text-gray-600">{{ recruit.yes_count }}</td>
                                            <td class="px-6 py-4 text-center font-bold text-gray-600">{{ recruit.no_count }}</td>
                                            <td class="px-6 py-4 text-center font-bold text-gray-600">{{ recruit.maybe_count }}</td>
                                            <td class="px-6 py-4 text-center font-black text-[#0d2a52]">{{ recruit.quality }}%</td>
                                            <td class="px-6 py-4 text-right text-gray-500 text-sm whitespace-nowrap">{{ recruit.last_activity }}</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!-- Pagination: Recruiters -->
                        <div v-if="totalRecruiterPages > 1" class="flex items-center justify-between mt-4">
                            <p class="text-sm text-gray-500">{{ (recruiterPage - 1) * itemsPerPage + 1 }} -
                                {{ Math.min(recruiterPage * itemsPerPage, filteredRecruiters.length) }} / {{ filteredRecruiters.length }}</p>
                            <div class="flex items-center gap-2">
                                <button @click="setRecruiterPage(recruiterPage - 1)" :disabled="recruiterPage === 1"
                                        class="px-3 py-1 text-sm rounded-lg border border-gray-300 disabled:opacity-50 hover:bg-gray-50 transition-colors">«</button>
                                <button v-for="p in recruiterPages" :key="p" @click="setRecruiterPage(p)"
                                        class="px-3 py-1 text-sm rounded-lg border transition-colors"
                                        :class="p === recruiterPage ? 'bg-[#0d2a52] text-white border-[#0d2a52]' : 'border-gray-300 text-gray-700 hover:bg-gray-50'">
                                    {{ p }}
                                </button>
                                <button @click="setRecruiterPage(recruiterPage + 1)" :disabled="recruiterPage === totalRecruiterPages"
                                        class="px-3 py-1 text-sm rounded-lg border border-gray-300 disabled:opacity-50 hover:bg-gray-50 transition-colors">»</button>
                            </div>
                        </div>
                    </div>

                    <!-- Projects Table -->
                    <div>
                        <div class="flex items-center justify-between mb-4">
                            <h3 class="text-2xl font-black text-[#0d2a52]">{{ __('translate.projects') }}</h3>
                            <div class="flex gap-2">
                                <input v-model="projectSearch" @input="setProjectPage(1)" type="text" :placeholder="__('translate.searchProject')" class="text-sm border-gray-300 rounded-lg focus:ring-[#0d2a52]">
                                <button @click="projectSearch = ''; setProjectPage(1)" class="px-4 py-2 text-xs font-bold text-gray-500 uppercase">{{ __('translate.resetFilter') }}</button>
                            </div>
                        </div>
                        <div class="bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden">
                            <div class="overflow-x-auto">
                                <table class="w-full text-left">
                                    <thead class="bg-gray-50 text-[#00a0e3] text-xs font-black uppercase tracking-wider">
                                        <tr>
                                            <th class="px-6 py-4">ID</th>
                                            <th class="px-6 py-4">{{ __('translate.projects') }}</th>
                                            <th class="px-6 py-4 text-center">{{ __('translate.applicationCountStat') }}</th>
                                            <th class="px-6 py-4 text-center">{{ __('translate.yes') }}</th>
                                            <th class="px-6 py-4 text-center">{{ __('translate.no') }}</th>
                                            <th class="px-6 py-4 text-center">{{ __('translate.maybe') }}</th>
                                            <th class="px-6 py-4 text-center text-[#0d2a52]">{{ __('translate.statusDistribution') }}</th>
                                            <th class="px-6 py-4 text-right text-[#0d2a52]">{{ __('translate.recruit') }}</th>
                                        </tr>
                                    </thead>
                                    <tbody class="divide-y divide-gray-100">
                                        <tr v-if="paginatedProjects.length === 0">
                                            <td colspan="8" class="px-6 py-12 text-center text-gray-400 italic font-bold">
                                                {{ __('translate.noResults') }}
                                            </td>
                                        </tr>
                                        <tr v-for="project in paginatedProjects" :key="project.id" class="hover:bg-gray-50 transition-colors">
                                            <td class="px-6 py-4 font-bold text-[#0d2a52]">{{ project.id }}</td>
                                            <td class="px-6 py-4">
                                                <p class="font-bold text-[#0d2a52] leading-tight">{{ project.position_name }}</p>
                                            </td>
                                            <td class="px-6 py-4 text-center font-bold text-gray-600">{{ project.aplications_count }}</td>
                                            <td class="px-6 py-4 text-center font-bold text-gray-600">{{ project.yes_count }}</td>
                                            <td class="px-6 py-4 text-center font-bold text-gray-600">{{ project.no_count }}</td>
                                            <td class="px-6 py-4 text-center font-bold text-gray-600">{{ project.maybe_count }}</td>
                                            <td class="px-6 py-4 min-w-[200px]">
                                                <div class="flex h-6 rounded-full overflow-hidden text-[10px] font-black text-white">
                                                    <div v-if="project.distribution.yes" class="bg-[#0d2a52] flex items-center justify-center transition-all" :style="{ width: project.distribution.yes + '%' }">
                                                        {{ __('translate.yes').toUpperCase() }} {{ project.distribution.yes }}%
                                                    </div>
                                                    <div v-if="project.distribution.maybe" class="bg-[#00a0e3] flex items-center justify-center transition-all" :style="{ width: project.distribution.maybe + '%' }">
                                                        {{ __('translate.maybe').toUpperCase() }} {{ project.distribution.maybe }}%
                                                    </div>
                                                    <div v-if="project.distribution.no" class="bg-[#e31e24] flex items-center justify-center transition-all" :style="{ width: project.distribution.no + '%' }">
                                                        {{ __('translate.no').toUpperCase() }} {{ project.distribution.no }}%
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="px-6 py-4 text-right">
                                                <div class="flex items-center justify-end gap-2">
                                                    <span class="font-bold text-[#0d2a52] whitespace-nowrap">{{ project.recruit?.name }}</span>
                                                    <img :src="project.recruit?.profile_photo_url" class="w-10 h-10 rounded-full object-cover border-2 border-[#00a0e3]" alt="">
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!-- Pagination: Projects -->
                        <div v-if="totalProjectPages > 1" class="flex items-center justify-between mt-4">
                            <p class="text-sm text-gray-500">{{ (projectPage - 1) * itemsPerPage + 1 }} -
                                {{ Math.min(projectPage * itemsPerPage, filteredProjects.length) }} / {{ filteredProjects.length }}</p>
                            <div class="flex items-center gap-2">
                                <button @click="setProjectPage(projectPage - 1)" :disabled="projectPage === 1"
                                        class="px-3 py-1 text-sm rounded-lg border border-gray-300 disabled:opacity-50 hover:bg-gray-50 transition-colors">«</button>
                                <button v-for="p in projectPages" :key="p" @click="setProjectPage(p)"
                                        class="px-3 py-1 text-sm rounded-lg border transition-colors"
                                        :class="p === projectPage ? 'bg-[#0d2a52] text-white border-[#0d2a52]' : 'border-gray-300 text-gray-700 hover:bg-gray-50'">
                                    {{ p }}
                                </button>
                                <button @click="setProjectPage(projectPage + 1)" :disabled="projectPage === totalProjectPages"
                                        class="px-3 py-1 text-sm rounded-lg border border-gray-300 disabled:opacity-50 hover:bg-gray-50 transition-colors">»</button>
                            </div>
                        </div>
                    </div>

                    <!-- Trend Indicators -->
                    <div>
                        <div class="flex items-center justify-between mb-4">
                            <h3 class="text-2xl font-black text-[#0d2a52]">{{ __('translate.industryTrends') }}</h3>
                        </div>
                        <div class="bg-white p-6 rounded-2xl shadow-sm border border-gray-100">
                            <apexchart v-if="props.charts.industryTrends?.series?.length" type="line" height="400" :options="props.charts.industryTrends.options" :series="props.charts.industryTrends.series"></apexchart>
                            <div v-else class="h-[400px] flex items-center justify-center text-gray-400 font-bold italic">
                                {{ __('translate.NoData') }}
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
