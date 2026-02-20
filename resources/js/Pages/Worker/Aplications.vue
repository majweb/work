<script setup>
import AppLayout from "@/Layouts/AppLayout.vue";
import { ref, computed } from 'vue';
import VueApexCharts from 'vue3-apexcharts';
import __ from "@/lang.js";
import CircularProgress from "@/Components/CircularProgress.vue";
import {Link} from "@inertiajs/vue3";

const props = defineProps({
    applications: {
        type: Array,
        default: () => []
    }
});

const statusFilter = ref('all'); // all, sent, viewed, rejected, reserved
const searchQuery = ref('');
const activeTab = ref('active'); // 'active' or 'finished'

// Dodajemy statusLabel do każdej aplikacji
const applications = computed(() =>
    props.applications.map(app => ({
        ...app,
        statusLabel: __('translate.' + app.status)
    }))
);

// Statystyki
const stats = computed(() => {
    const total = applications.value.length;
    const reserved = applications.value.filter(a => a.status === 'reserved').length;
    const declined = applications.value.filter(a => a.status === 'rejected').length;
    const sent = applications.value.filter(a => a.status === 'sent').length;
    const viewed = applications.value.filter(a => a.status === 'viewed').length;
    return { reserved, declined, sent, viewed, total };
});

// Wykres
const chartOptions = ref({
    chart: { type: 'donut', fontFamily: 'Inter, sans-serif' },
    labels: [
        __('translate.labels.reserved'),
        __('translate.labels.rejected'),
        __('translate.labels.sent'),
        __('translate.labels.viewed')
    ],
    colors: ['#1e3a8a', '#dc2626', '#d1d5db', '#06b6d4'], // blue-900, red-600, gray-300, cyan-500
    legend: { show: false },
    dataLabels: { enabled: false },
    plotOptions: {
        pie: {
            donut: {
                size: '75%',
                labels: {
                    show: true,
                    total: {
                        show: true,
                        label: __('translate.total'),
                        fontSize: '14px',
                        fontWeight: 600,
                        color: '#1f2937',
                        formatter: () => stats.value.total || 0
                    }
                }
            }
        }
    },
    stroke: { width: 0 }
});

const chartSeries = computed(() => [
    stats.value.reserved,
    stats.value.declined,
    stats.value.sent,
    stats.value.viewed
]);

// Filtrowanie aplikacji
const filteredApplications = computed(() => {
    let filtered = applications.value;

    if (activeTab.value === 'active') {
        filtered = filtered.filter(app => ['sent', 'viewed'].includes(app.status));
    } else {
        filtered = filtered.filter(app => ['rejected', 'reserved'].includes(app.status));
    }

    if (searchQuery.value) {
        const query = searchQuery.value.toLowerCase();
        filtered = filtered.filter(app =>
            (app.title?.toLowerCase().includes(query)) ||
            (app.department?.toLowerCase().includes(query)) ||
            (app.company?.toLowerCase().includes(query))
        );
    }

    if (statusFilter.value !== 'all') {
        filtered = filtered.filter(app => app.status === statusFilter.value);
    }

    return filtered;
});

// Liczby aktywnych i zakończonych
const activeCount = computed(() =>
    applications.value.filter(app => ['sent', 'viewed'].includes(app.status)).length
);
const finishedCount = computed(() =>
    applications.value.filter(app => ['rejected', 'reserved'].includes(app.status)).length
);

// Kolory statusów
const getStatusColor = (status) => ({
    reserved: 'bg-blue-900',
    sent: 'bg-gray-300',
    viewed: 'bg-cyan-500',
    rejected: 'bg-red-600'
}[status] || 'bg-gray-300');

// Postęp aplikacji
const getApplicationProgress = (status) => {
    if (status === "reserved") return { value: 100, color: "blue" }
    if (status === "viewed") return { value: 50, color: "cyan" }
    if (status === "rejected") return { value: 100, color: "red" }
    return { value: 0, color: "gray" }
}
</script>

<template>
    <AppLayout :title="__('translate.dashboard')">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('translate.aplications') }}
            </h2>
        </template>

        <div class="py-12 bg-gray-50/50 min-h-screen">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-8">
                <!-- HEADER CARD -->
                <section class="bg-white rounded-3xl shadow-sm border border-gray-100 overflow-hidden">
                    <div class="p-8">
                        <div class="flex flex-col md:flex-row md:items-center justify-between gap-6">
                            <div>
                                <h2 class="text-2xl font-bold text-gray-900">{{ __('translate.aplications') }}</h2>
                                <p class="text-sm text-gray-500 mt-1">{{ __('translate.manageYourApplications') }}</p>
                            </div>

                            <div class="flex flex-col sm:flex-row gap-4 items-center">
                                <!-- Wyszukiwarka -->
                                <div class="relative flex-1 min-w-[300px]">
                                    <svg class="absolute left-4 top-1/2 transform -translate-y-1/2 w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                                    </svg>
                                    <input
                                        v-model="searchQuery"
                                        type="text"
                                        :placeholder="__('translate.search_placeholder')"
                                        class="w-full pl-11 pr-4 py-2.5 bg-gray-50 border-gray-100 focus:bg-white focus:ring-0 focus:border-blue-200 rounded-2xl transition-all text-sm"
                                    >
                                </div>

                                <!-- Dropdown status -->
                                <div class="relative">
                                    <select
                                        v-model="statusFilter"
                                        class="appearance-none bg-gray-50 border border-gray-100 rounded-xl px-4 py-2.5 pr-10 focus:ring-0 focus:border-blue-200 cursor-pointer text-sm font-bold text-gray-700 transition-all"
                                    >
                                        <option value="all">{{ __('translate.all_statuses') }}</option>
                                        <option value="sent">{{ __('translate.labels.sent') }}</option>
                                        <option value="viewed">{{ __('translate.labels.viewed') }}</option>
                                        <option value="rejected">{{ __('translate.labels.rejected') }}</option>
                                        <option value="reserved">{{ __('translate.labels.reserved') }}</option>
                                    </select>
                                    <svg class="absolute right-3 top-1/2 transform -translate-y-1/2 w-4 h-4 text-gray-400 pointer-events-none" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- MAIN CONTENT CARD -->
                <div class="bg-white rounded-[3rem] shadow-sm border border-gray-100 p-8">
                    <!-- Tab Buttons -->
                    <div class="flex flex-wrap gap-2 mb-10">
                        <button
                            @click="activeTab = 'active'"
                            :class="[
                                'px-6 py-3 rounded-2xl font-black text-xs uppercase tracking-widest transition-all flex items-center gap-3',
                                activeTab === 'active'
                                    ? 'bg-[#0A2C5C] text-white shadow-lg shadow-blue-900/20'
                                    : 'bg-gray-50 text-gray-400 hover:bg-gray-100 hover:text-gray-600'
                            ]"
                        >
                            {{ __('translate.tabs.active') }}
                            <span :class="[
                                'px-2 py-0.5 rounded-lg text-[10px] font-black',
                                activeTab === 'active' ? 'bg-blue-400/20 text-blue-100' : 'bg-gray-200 text-gray-500'
                            ]">{{ activeCount }}</span>
                        </button>

                        <button
                            @click="activeTab = 'finished'"
                            :class="[
                                'px-6 py-3 rounded-2xl font-black text-xs uppercase tracking-widest transition-all flex items-center gap-3',
                                activeTab === 'finished'
                                    ? 'bg-[#0A2C5C] text-white shadow-lg shadow-blue-900/20'
                                    : 'bg-gray-50 text-gray-400 hover:bg-gray-100 hover:text-gray-600'
                            ]"
                        >
                            {{ __('translate.tabs.finished') }}
                            <span :class="[
                                'px-2 py-0.5 rounded-lg text-[10px] font-black',
                                activeTab === 'finished' ? 'bg-blue-400/20 text-blue-100' : 'bg-gray-200 text-gray-500'
                            ]">{{ finishedCount }}</span>
                        </button>
                    </div>

                    <div class="grid grid-cols-1 lg:grid-cols-12 gap-10">
                        <!-- Stats Chart -->
                        <div class="lg:col-span-4">
                            <div class="bg-gray-50/50 border border-gray-100 rounded-[2.5rem] p-8 shadow-inner">
                                <h3 class="text-xs font-black text-[#0A2C5C] uppercase tracking-[0.2em] mb-8 text-center">{{ __('translate.stats.title') }}</h3>

                                <div class="mb-10 flex justify-center">
                                    <VueApexCharts
                                        type="donut"
                                        :options="chartOptions"
                                        :series="chartSeries"
                                        height="240"
                                    />
                                </div>

                                <!-- Legend -->
                                <div class="space-y-4">
                                    <div class="flex items-center justify-between p-3 bg-white rounded-2xl shadow-sm border border-gray-50">
                                        <div class="flex items-center gap-3">
                                            <div class="w-2.5 h-2.5 rounded-full bg-blue-900 shadow-sm shadow-blue-200"></div>
                                            <span class="text-xs font-bold text-gray-500 uppercase tracking-tight">{{ __('translate.labels.reserved') }}</span>
                                        </div>
                                        <span class="text-sm font-black text-gray-900">{{ stats.reserved }}</span>
                                    </div>

                                    <div class="flex items-center justify-between p-3 bg-white rounded-2xl shadow-sm border border-gray-50">
                                        <div class="flex items-center gap-3">
                                            <div class="w-2.5 h-2.5 rounded-full bg-red-600 shadow-sm shadow-red-200"></div>
                                            <span class="text-xs font-bold text-gray-500 uppercase tracking-tight">{{ __('translate.labels.rejected') }}</span>
                                        </div>
                                        <span class="text-sm font-black text-gray-900">{{ stats.declined }}</span>
                                    </div>

                                    <div class="flex items-center justify-between p-3 bg-white rounded-2xl shadow-sm border border-gray-50">
                                        <div class="flex items-center gap-3">
                                            <div class="w-2.5 h-2.5 rounded-full bg-gray-300 shadow-sm shadow-gray-200"></div>
                                            <span class="text-xs font-bold text-gray-500 uppercase tracking-tight">{{ __('translate.labels.sent') }}</span>
                                        </div>
                                        <span class="text-sm font-black text-gray-900">{{ stats.sent }}</span>
                                    </div>

                                    <div class="flex items-center justify-between p-3 bg-white rounded-2xl shadow-sm border border-gray-50">
                                        <div class="flex items-center gap-3">
                                            <div class="w-2.5 h-2.5 rounded-full bg-cyan-500 shadow-sm shadow-cyan-200"></div>
                                            <span class="text-xs font-bold text-gray-500 uppercase tracking-tight">{{ __('translate.labels.viewed') }}</span>
                                        </div>
                                        <span class="text-sm font-black text-gray-900">{{ stats.viewed }}</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Applications List -->
                        <div class="lg:col-span-8">
                            <div class="flex items-center gap-4 mb-8">
                                <h3 class="text-xs font-black text-[#0A2C5C] uppercase tracking-[0.2em]">{{ __('translate.yourNotifications') }}</h3>
                                <div class="h-px flex-1 bg-gray-100"></div>
                            </div>

                            <div class="space-y-4">
                                <div
                                    v-for="application in filteredApplications"
                                    :key="application.id"
                                    class="group relative bg-white border border-gray-100 rounded-3xl p-5 hover:shadow-xl hover:shadow-blue-900/5 transition-all duration-300 hover:-translate-y-1"
                                >
                                    <Link :href="route('worker.singleAplication',application)" class="flex items-center justify-between gap-6">
                                        <div class="flex items-center gap-6 flex-1 min-w-0">
                                            <!-- Progress -->
                                            <div class="shrink-0 scale-90 md:scale-100">
                                                <CircularProgress
                                                    :value="getApplicationProgress(application.status).value"
                                                    :color="getApplicationProgress(application.status).color"
                                                />
                                            </div>

                                            <div class="flex-1 min-w-0">
                                                <div class="flex items-center gap-2 mb-1">
                                                    <span class="text-[10px] font-black text-gray-400 uppercase tracking-widest">{{ application.date }}</span>
                                                    <span class="w-1 h-1 bg-gray-200 rounded-full"></span>
                                                    <span class="text-[10px] font-black text-blue-400 uppercase tracking-widest">{{ application.company }}</span>
                                                </div>
                                                <h4 class="text-lg font-black text-gray-900 truncate leading-tight group-hover:text-[#0A2C5C] transition-colors">{{ application.title }}</h4>
                                                <p class="text-sm font-bold text-gray-400 mt-1 uppercase tracking-tight">{{ application.department }}</p>
                                            </div>
                                        </div>

                                        <div class="flex items-center gap-6 shrink-0">
                                            <div class="hidden sm:flex flex-col items-end">
                                                <span :class="[
                                                    'inline-flex items-center gap-2 px-4 py-1.5 rounded-xl text-[10px] font-black uppercase tracking-widest text-white shadow-sm',
                                                    getStatusColor(application.status)
                                                ]">
                                                    <div class="w-1.5 h-1.5 rounded-full bg-white animate-pulse"></div>
                                                    {{ application.statusLabel }}
                                                </span>
                                            </div>

                                            <div class="w-10 h-10 rounded-2xl bg-gray-50 flex items-center justify-center group-hover:bg-blue-50 transition-colors">
                                                <svg class="w-5 h-5 text-gray-300 group-hover:text-[#0A2C5C] transition-all transform group-hover:translate-x-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 5l7 7-7 7" />
                                                </svg>
                                            </div>
                                        </div>
                                    </Link>
                                </div>

                                <!-- Empty State -->
                                <div v-if="filteredApplications.length === 0" class="flex flex-col items-center justify-center py-20 text-center">
                                    <div class="w-20 h-20 bg-gray-50 rounded-full flex items-center justify-center mb-6">
                                        <svg class="h-10 w-10 text-gray-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                                        </svg>
                                    </div>
                                    <h3 class="text-xl font-bold text-gray-900 mb-2">{{ __('translate.empty.title') }}</h3>
                                    <p class="text-sm text-gray-400 max-w-xs mx-auto">{{ __('translate.empty.description') }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </AppLayout>
</template>

<style scoped>
/* Dodatkowe style jeśli potrzebne */
</style>
