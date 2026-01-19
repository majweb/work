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
    colors: ['#1e3a8a', '#dc2626', '#d1d5db', '#06b6d4'],
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
    reserved: 'bg-blue-600',
    sent: 'bg-gray-400',
    viewed: 'bg-blue-900',
    rejected: 'bg-red-600'
}[status] || 'bg-gray-400');

// Postęp aplikacji
const getApplicationProgress = (status) => {
    if (status === "reserved") return { value: 100, color: "blue" }
    if (status === "viewed") return { value: 50, color: "violet" }
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

        <div class="py-6 lg:py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white rounded-lg shadow-sm">
                    <!-- Header Section -->
                    <div class="p-6 border-b border-gray-200">
                        <h1 class="text-2xl font-bold text-gray-900 mb-6">{{ __('translate.aplications') }}</h1>

                        <!-- Search and Filter -->
                        <div class="flex flex-col sm:flex-row gap-4 items-start sm:items-center justify-between">
                            <!-- Wyszukiwarka -->
                            <div class="relative flex-1 max-w-md">
                                <svg class="absolute left-3 top-1/2 transform -translate-y-1/2 w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                                </svg>
                                <input
                                    v-model="searchQuery"
                                    type="text"
                                    :placeholder="__('translate.search_placeholder')"
                                    class="w-full pl-10 pr-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                                >
                            </div>

                            <!-- Dropdown status -->
                            <div class="relative">
                                <select
                                    v-model="statusFilter"
                                    class="appearance-none bg-white border border-gray-300 rounded-lg px-4 py-2 pr-10 focus:ring-2 focus:ring-blue-500 focus:border-transparent cursor-pointer"
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

                    <!-- Tabs and Content -->
                    <div class="p-6">
                        <!-- Tab Buttons -->
                        <div class="flex gap-2 mb-6">
                            <button
                                @click="activeTab = 'active'"
                                :class="[
                                    'px-6 py-2 rounded-lg font-medium transition-colors flex items-center gap-2',
                                    activeTab === 'active'
                                        ? 'bg-blue-900 text-white'
                                        : 'bg-gray-200 text-gray-700 hover:bg-gray-300'
                                ]"
                            >
                                {{ __('translate.tabs.active') }}
                                <span class="bg-white text-blue-900 text-xs font-semibold px-2 py-0.5 rounded-full">{{ activeCount }}</span>
                            </button>

                            <button
                                @click="activeTab = 'finished'"
                                :class="[
                                    'px-6 py-2 rounded-lg font-medium transition-colors flex items-center gap-2',
                                    activeTab === 'finished'
                                        ? 'bg-blue-900 text-white'
                                        : 'bg-gray-200 text-gray-700 hover:bg-gray-300'
                                ]"
                            >
                                {{ __('translate.tabs.finished') }}
                                <span class="bg-white text-blue-900 text-xs font-semibold px-2 py-0.5 rounded-full">{{ finishedCount }}</span>
                            </button>
                        </div>

                        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
                            <!-- Stats Chart -->
                            <div class="lg:col-span-1">
                                <div class="bg-white border border-gray-200 rounded-lg p-6">
                                    <h3 class="font-bold text-gray-900 mb-4">{{ __('translate.stats.title') }}</h3>

                                    <div class="mb-6">
                                        <VueApexCharts
                                            type="donut"
                                            :options="chartOptions"
                                            :series="chartSeries"
                                            height="200"
                                        />
                                    </div>

                                    <!-- Legend -->
                                    <div class="space-y-3">
                                        <div class="flex items-center justify-between">
                                            <div class="flex items-center gap-2">
                                                <div class="w-3 h-3 rounded-full bg-blue-900"></div>
                                                <span class="text-sm text-gray-600">{{ __('translate.labels.reserved') }}</span>
                                            </div>
                                            <span class="font-semibold text-gray-900">{{ stats.reserved }}</span>
                                        </div>

                                        <div class="flex items-center justify-between">
                                            <div class="flex items-center gap-2">
                                                <div class="w-3 h-3 rounded-full bg-red-600"></div>
                                                <span class="text-sm text-gray-600">{{ __('translate.labels.rejected') }}</span>
                                            </div>
                                            <span class="font-semibold text-gray-900">{{ stats.declined }}</span>
                                        </div>

                                        <div class="flex items-center justify-between">
                                            <div class="flex items-center gap-2">
                                                <div class="w-3 h-3 rounded-full bg-gray-300"></div>
                                                <span class="text-sm text-gray-600">{{ __('translate.labels.sent') }}</span>
                                            </div>
                                            <span class="font-semibold text-gray-900">{{ stats.sent }}</span>
                                        </div>

                                        <div class="flex items-center justify-between">
                                            <div class="flex items-center gap-2">
                                                <div class="w-3 h-3 rounded-full bg-blue-700"></div>
                                                <span class="text-sm text-gray-600">{{ __('translate.labels.viewed') }}</span>
                                            </div>
                                            <span class="font-semibold text-gray-900">{{ stats.viewed }}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Applications List -->
                            <div class="lg:col-span-2">
                                <div class="space-y-3">
                                    <div
                                        v-for="application in filteredApplications"
                                        :key="application.id"
                                        class="bg-white border border-gray-200 rounded-lg p-4 hover:shadow-md transition-shadow cursor-pointer group"
                                    >
                                        <Link :href="route('worker.singleAplication',application)" class="flex items-center justify-between">
                                            <div class="flex items-center gap-4 flex-1">
                                                <!-- Progress -->
                                                <CircularProgress
                                                    :value="getApplicationProgress(application.status).value"
                                                    :color="getApplicationProgress(application.status).color"
                                                />

                                                <div class="flex-1">
                                                    <h4 class="font-bold text-gray-900 mb-1">{{ application.title }}</h4>
                                                    <div class="flex items-center gap-2 text-sm text-gray-600">
                                                        <span>{{ application.company }}</span>
                                                        <span class="text-gray-400">•</span>
                                                        <span>{{ application.department }}</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="flex items-center gap-4">
                                                <div class="text-right">
                                                    <div class="text-sm text-gray-500 mb-1">{{ application.date }}</div>
                                                    <span :class="[
                                                        'inline-flex items-center gap-1 px-3 py-1 rounded-full text-xs font-semibold text-white',
                                                        getStatusColor(application.status)
                                                    ]">
                                                        <div class="w-1.5 h-1.5 rounded-full bg-white"></div>
                                                        {{ application.statusLabel }}
                                                    </span>
                                                </div>

                                                <svg class="w-5 h-5 text-gray-400 group-hover:text-gray-600 transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                                                </svg>
                                            </div>
                                        </Link>
                                    </div>

                                    <!-- Empty State -->
                                    <div v-if="filteredApplications.length === 0" class="text-center py-12">
                                        <svg class="mx-auto h-12 w-12 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                                        </svg>
                                        <h3 class="mt-2 text-sm font-medium text-gray-900">{{ __('translate.empty.title') }}</h3>
                                        <p class="mt-1 text-sm text-gray-500">{{ __('translate.empty.description') }}</p>
                                    </div>
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
