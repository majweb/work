<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import { ref, onMounted, shallowRef } from 'vue';
import { router } from '@inertiajs/vue3';
import __ from "@/lang.js";
import axios from 'axios';

const props = defineProps({
    stats: Object,
    period: String,
    charts: Object
});

const isClient = ref(false);
const VueApexChartsLazy = shallowRef(null);
const currentPeriod = ref(props.period || 'all');
const localStats = ref(props.stats);
const cardPeriods = ref({
    applications: props.period || 'all',
    projects: props.period || 'all',
    users: props.period || 'all',
    foundations: props.period || 'all',
});
const isLoadingCard = ref({
    applications: false,
    projects: false,
    users: false,
    foundations: false,
});
const localCharts = ref(props.charts || null);
const isLoadingCharts = ref(false);

const fetchCharts = async (p) => {
    isLoadingCharts.value = true;
    try {
        const response = await axios.get('/logged/statisticsAdmin/charts', {
            params: { period: p }
        });
        localCharts.value = response.data;
    } catch (error) {
        console.error('Failed to fetch charts:', error);
    } finally {
        isLoadingCharts.value = false;
    }
};

onMounted(async () => {
    isClient.value = true;
    const { default: VueApexChartsImport } = await import('vue3-apexcharts');
    VueApexChartsLazy.value = VueApexChartsImport;
    if (!localCharts.value) {
        fetchCharts(currentPeriod.value);
    }
});

const changePeriod = (p) => {
    currentPeriod.value = p;
    // Update all card periods when global period changes
    Object.keys(cardPeriods.value).forEach(key => {
        cardPeriods.value[key] = p;
    });

    router.reload({
        data: { period: p },
        only: ['stats', 'period'],
        preserveScroll: true,
        onSuccess: (page) => {
            localStats.value = page.props.stats;
            fetchCharts(p);
        }
    });
};

const changeCardPeriod = async (category, p) => {
    cardPeriods.value[category] = p;
    isLoadingCard.value[category] = true;

    try {
        const response = await axios.get('/logged/statisticsAdmin/card-stats', {
            params: {
                category: category,
                period: p
            }
        });
        localStats.value[category] = response.data;
    } catch (error) {
        console.error(`Failed to fetch stats for ${category}:`, error);
    } finally {
        isLoadingCard.value[category] = false;
    }
};

const periods = [
    { value: 'all', label: 'Wszystkie' },
    { value: 'week', label: 'Ten tydzień' },
    { value: 'previous_week', label: 'Poprzedni tydzień' },
    { value: 'month', label: 'Ten miesiąc' },
    { value: 'year', label: 'Ten rok' },
];

const cards = [
    {
        key: 'applications',
        name: 'Aplikacje',
        icon: 'applications',
        route: 'admin.aplicationsA.index',
    },
    {
        key: 'projects',
        name: 'Oferty',
        icon: 'offers',
        route: 'admin.partners.index', // Adjust if there's a better route
    },
    {
        key: 'users',
        name: 'Użytkownicy',
        icon: 'users',
        route: 'dashboard',
    },
    {
        key: 'foundations',
        name: 'Fundacje',
        icon: 'foundations',
        route: 'admin.foundations.index',
    }
];

// Fallback icons if images are missing
const getIcon = (key) => {
    // This is just a placeholder logic
    return '';
};

</script>

<template>
    <AppLayout :title="__('translate.statistics')">
        <div class="py-12 bg-gray-50/50 min-h-screen">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <!-- Header -->
                <div class="bg-white rounded-[3rem] shadow-xl shadow-blue-900/5 border border-gray-100 p-10 mb-10">
                    <div class="flex flex-col md:flex-row md:items-center justify-between gap-6">
                        <div>
                            <h3 class="text-2xl font-black text-[#0A2C5C] uppercase tracking-tight">{{ __('translate.statistics') }}</h3>
                            <p class="text-[10px] font-bold text-gray-400 uppercase tracking-widest mt-1">Analityka i zestawienia systemowe</p>
                        </div>

                        <div class="flex items-center gap-4 bg-gray-50 p-2 rounded-2xl border border-gray-100">
                            <button
                                v-for="p in periods"
                                :key="p.value"
                                @click="changePeriod(p.value)"
                                class="px-6 py-2 rounded-xl text-[10px] font-black uppercase tracking-widest transition-all"
                                :class="currentPeriod === p.value ? 'bg-[#0A2C5C] text-white shadow-lg shadow-blue-900/20' : 'text-gray-400 hover:text-[#0A2C5C]'"
                            >
                                {{ p.label }}
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Main Stats Grid -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-10">
                    <div
                        v-for="card in cards"
                        :key="card.key"
                        class="bg-white rounded-[3rem] shadow-xl shadow-blue-900/5 border border-gray-100 p-10 flex flex-col items-center relative overflow-hidden group"
                        :class="{ 'opacity-60 pointer-events-none transition-opacity': isLoadingCard[card.key] }"
                    >
                        <!-- Filter dropdown in card as in screenshot -->
                        <div class="absolute top-8 right-10">
                            <select
                                v-model="cardPeriods[card.key]"
                                @change="changeCardPeriod(card.key, cardPeriods[card.key])"
                                class="text-[10px] font-bold uppercase tracking-widest border-gray-100 rounded-xl focus:ring-[#0A2C5C] focus:border-[#0A2C5C] py-1 pl-3 pr-8 text-[#0A2C5C]"
                            >
                                <option v-for="p in periods" :key="p.value" :value="p.value">Filtruj: {{ p.label }}</option>
                            </select>
                        </div>

                        <div class="flex items-center justify-center gap-8 w-full mt-4">
                            <!-- Icon/Illustration -->
                            <div class="w-32 h-32 flex items-center justify-center">
                                <!-- Try to use image if exists, else icon -->
                                <div class="relative">
                                    <div class="absolute inset-0 bg-blue-100 rounded-full blur-2xl opacity-20 group-hover:opacity-40 transition-all"></div>
                                    <!-- Fallback SVG if image fails -->
                                    <div class="w-20 h-20 bg-blue-50 rounded-3xl flex items-center justify-center text-[#0A2C5C]">
                                        <svg v-if="card.key === 'applications'" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-10 h-10">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 0 0-3.375-3.375h-1.5A1.125 1.125 0 0 1 13.5 7.125v-1.5a3.375 3.375 0 0 0-3.375-3.375H8.25m0 12.75h7.5m-7.5 3H12M10.5 2.25H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 0 0-9-9Z" />
                                        </svg>
                                        <svg v-else-if="card.key === 'projects'" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-10 h-10">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 21h19.5m-18-18v18m10.5-18v18m6-13.5V21M6.75 6.75h.75m-.75 3h.75m-.75 3h.75m3-6h.75m-.75 3h.75m-.75 3h.75M6.75 21v-3.375c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21M3 3h12m-.75 4.5H21m-3.75 3.75h.008v.008h-.008v-.008Zm0 3h.008v.008h-.008v-.008Z" />
                                        </svg>
                                        <svg v-else-if="card.key === 'users'" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-10 h-10">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 19.128a9.38 9.38 0 0 0 2.625.372 9.337 9.337 0 0 0  4.121-.952 4.125 4.125 0 0 0-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 0 1 8.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0 1 11.964-3.07M12 6.375a3.375 3.375 0 1 1-6.75 0 3.375 3.375 0 0 1 6.75 0Zm8.25 2.25a2.625 2.625 0 1 1-5.25 0 2.625 2.625 0 0 1 5.25 0Z" />
                                        </svg>
                                        <svg v-else xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-10 h-10">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12Z" />
                                        </svg>
                                    </div>
                                </div>
                            </div>

                            <div class="flex flex-col">
                                <span class="text-xl font-black text-[#0A2C5C] uppercase tracking-tighter">{{ card.name }}</span>
                                <div class="flex items-baseline gap-2">
                                    <span class="text-6xl font-black text-[#0A2C5C] tracking-tighter">
                                        {{ cardPeriods[card.key] === 'all' ? localStats[card.key].total : localStats[card.key].current_period }}
                                    </span>
                                </div>
                                <div v-if="cardPeriods[card.key] !== 'all'" class="flex items-center gap-1 mt-1">
                                    <div :class="localStats[card.key].trend === 'up' ? 'text-green-500' : 'text-red-500'" class="flex items-center gap-1">
                                        <svg v-if="localStats[card.key].trend === 'up'" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-4 h-4">
                                            <path fill-rule="evenodd" d="M10 17a.75.75 0 0 1-.75-.75V5.612L5.29 9.57a.75.75 0 0 1-1.08-1.04l5.25-5.25a.75.75 0 0 1 1.08 0l5.25 5.25a.75.75 0 1 1-1.08 1.04l-3.96-3.958V16.25A.75.75 0 0 1 10 17Z" clip-rule="evenodd" />
                                        </svg>
                                        <svg v-else xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-4 h-4">
                                            <path fill-rule="evenodd" d="M10 3a.75.75 0 0 1 .75.75v10.638l3.96-3.958a.75.75 0 1 1 1.08 1.04l-5.25 5.25a.75.75 0 0 1-1.08 0l-5.25-5.25a.75.75 0 1 1 1.08-1.04l3.96 3.958V3.75A.75.75 0 0 1 10 3Z" clip-rule="evenodd" />
                                        </svg>
                                        <span class="text-[10px] font-black">{{ localStats[card.key].diff }}</span>
                                    </div>
                                    <span class="text-[8px] font-bold text-gray-400 uppercase tracking-widest">vs poprzedni okres</span>
                                </div>
                            </div>
                        </div>

                        <div class="mt-8 w-full">
                            <button
                                @click="router.visit(route(card.route))"
                                class="w-full py-4 rounded-full border-2 border-[#0A2C5C] text-[#0A2C5C] font-black uppercase tracking-widest text-xs hover:bg-[#0A2C5C] hover:text-white transition-all shadow-lg shadow-blue-900/5"
                            >
                                SPRAWDŹ
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Charts Section -->
                <div class="mt-12 grid grid-cols-1 lg:grid-cols-2 gap-10">
                    <!-- Activity Chart -->
                    <div class="bg-white rounded-[3rem] shadow-xl shadow-blue-900/5 border border-gray-100 p-10">
                        <div class="mb-8">
                            <h4 class="text-lg font-black text-[#0A2C5C] uppercase tracking-tight">Trend aktywności</h4>
                            <p class="text-[8px] font-bold text-gray-400 uppercase tracking-widest mt-1">Liczba nowych treści w czasie</p>
                        </div>
                        <div v-if="isClient && localCharts && VueApexChartsLazy" class="min-h-[300px]" :class="{ 'opacity-50': isLoadingCharts }">
                            <component
                                :is="VueApexChartsLazy"
                                type="line"
                                height="350"
                                :options="localCharts.activityTrend.options"
                                :series="localCharts.activityTrend.series"
                            />
                        </div>
                        <div v-else-if="isLoadingCharts" class="min-h-[300px] flex items-center justify-center">
                            <div class="animate-spin rounded-full h-8 w-8 border-b-2 border-[#0A2C5C]"></div>
                        </div>
                    </div>

                    <!-- Distribution Chart -->
                    <div class="bg-white rounded-[3rem] shadow-xl shadow-blue-900/5 border border-gray-100 p-10">
                        <div class="mb-8">
                            <h4 class="text-lg font-black text-[#0A2C5C] uppercase tracking-tight">Rozkład zasobów</h4>
                            <p class="text-[8px] font-bold text-gray-400 uppercase tracking-widest mt-1">Zestawienie sumaryczne</p>
                        </div>
                        <div v-if="isClient && localCharts && VueApexChartsLazy" class="min-h-[300px]" :class="{ 'opacity-50': isLoadingCharts }">
                            <component
                                :is="VueApexChartsLazy"
                                type="bar"
                                height="350"
                                :options="localCharts.contentDistribution.options"
                                :series="localCharts.contentDistribution.series"
                            />
                        </div>
                        <div v-else-if="isLoadingCharts" class="min-h-[300px] flex items-center justify-center">
                            <div class="animate-spin rounded-full h-8 w-8 border-b-2 border-[#0A2C5C]"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </AppLayout>
</template>

<style scoped>
select {
    appearance: none;
    background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 20 20'%3e%3cpath stroke='%230A2C5C' stroke-linecap='round' stroke-linejoin='round' stroke-width='1.5' d='M6 8l4 4 4-4'/%3e%3c/svg%3e");
    background-repeat: no-repeat;
    background-position: right 0.5rem center;
    background-size: 1.5em 1.5em;
}
</style>
