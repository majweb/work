<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import Pagination from '@/Components/Pagination.vue';
import { Head, router } from '@inertiajs/vue3';
import { ref, onMounted, shallowRef, watch } from 'vue';
import pickBy from 'lodash/pickBy';
import throttle from 'lodash/throttle';
import moment from 'moment';

const props = defineProps({
    statistics: Object,
    totalActiveProjects: Number,
    charts: Object,
    filters: Object,
    availableCategories: Array,
    availablePositions: Array,
});

const isClient = ref(false);
const VueApexChartsLazy = shallowRef(null);
const filters = ref({
    date_from: props.filters?.date_from || '',
    date_to: props.filters?.date_to || '',
    category: props.filters?.category || '',
    position: props.filters?.position || '',
});

onMounted(async () => {
    isClient.value = true;
    const { default: VueApexChartsImport } = await import('vue3-apexcharts');
    VueApexChartsLazy.value = VueApexChartsImport;
});

watch(filters, throttle((newFilters) => {
    router.get(route('admin.search-statistics.index'), pickBy(newFilters), {
        preserveState: true,
        replace: true,
    });
}, 1000), { deep: true });

const resetFilters = () => {
    filters.value = {
        date_from: '',
        date_to: '',
        category: '',
        position: '',
    };
};

const formatDate = (date) => {
    if (!date) return '-';
    return moment(date).format('DD.MM.YYYY HH:mm');
};

const formatChartDate = (date) => {
    if (!date) return '';
    return moment(date).format('DD MMM');
};

const formatValue = (value) => {
    return value || '-';
};

const getChartOptions = (labels, title) => {
    return {
        chart: {
            type: 'donut',
            fontFamily: 'inherit',
            toolbar: {
                show: false
            }
        },
        labels: labels,
        title: {
            text: title,
            align: 'center',
            style: {
                fontSize: '12px',
                fontWeight: '900',
                color: '#0A2C5C',
            }
        },
        legend: {
            position: 'bottom',
        },
        responsive: [{
            breakpoint: 480,
            options: {
                chart: {
                    width: 200
                },
                legend: {
                    position: 'bottom'
                }
            }
        }],
        colors: ['#00AEEF', '#0A2C5C', '#FBBF24', '#10B981', '#EF4444'],
        dataLabels: {
            enabled: true,
            formatter: function (val) {
                return val.toFixed(1) + "%"
            },
        },
        tooltip: {
            y: {
                formatter: function (val) {
                    return val + " wyszukiwań"
                }
            }
        }
    };
};

const getLineChartOptions = (labels, title) => {
    return {
        chart: {
            type: 'area',
            fontFamily: 'inherit',
            zoom: {
                enabled: false
            },
            toolbar: {
                show: false
            }
        },
        dataLabels: {
            enabled: false
        },
        stroke: {
            curve: 'smooth',
            width: 3,
            colors: ['#00AEEF']
        },
        title: {
            text: title,
            align: 'left',
            style: {
                fontSize: '14px',
                fontWeight: '900',
                color: '#0A2C5C',
            }
        },
        grid: {
            borderColor: '#f1f1f1',
        },
        xaxis: {
            categories: labels,
            labels: {
                formatter: function (val) {
                    if (!val) return '';
                    return moment(val).format('DD MMM');
                },
                style: {
                    colors: '#94a3b8',
                    fontSize: '10px'
                }
            }
        },
        yaxis: {
            labels: {
                formatter: function (val) {
                    return Math.floor(val);
                },
                style: {
                    colors: '#94a3b8',
                    fontSize: '10px'
                }
            }
        },
        fill: {
            type: 'gradient',
            gradient: {
                shadeIntensity: 1,
                opacityFrom: 0.45,
                opacityTo: 0.05,
                stops: [20, 100, 100, 100]
            }
        },
        colors: ['#00AEEF'],
        tooltip: {
            x: {
                format: 'dd/MM/yy'
            },
        },
    };
};
</script>

<template>
    <Head title="Statystyki wyszukiwarki" />

    <AppLayout title="Statystyki wyszukiwarki">
        <div class="py-12 bg-[#F8FAFC] min-h-screen">
            <div class="max-w-[1600px] mx-auto sm:px-6 lg:px-8">
                <!-- Header & Filters Section -->
                <div class="bg-white rounded-[2.5rem] shadow-sm border border-gray-100 p-8 mb-8">
                    <div class="flex flex-col lg:flex-row lg:items-center justify-between gap-8">
                        <div class="flex items-center gap-6">
                            <div class="w-16 h-16 bg-blue-50 rounded-2xl flex items-center justify-center">
                                <svg class="w-8 h-8 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-2xl font-black text-[#0A2C5C] uppercase tracking-tight">Statystyki wyszukiwarki</h3>
                                <p class="text-[10px] font-bold text-gray-400 uppercase tracking-widest mt-1">
                                    Analiza trendów i popularności filtrów w czasie rzeczywistym
                                </p>
                            </div>
                        </div>

                        <div class="flex flex-col sm:flex-row items-center gap-4">
                            <!-- Category Filter -->
                            <div class="flex items-center gap-2 bg-gray-50 p-1.5 rounded-2xl border border-gray-100">
                                <div class="flex items-center gap-2 px-3">
                                    <span class="text-[9px] font-black text-gray-400 uppercase tracking-widest whitespace-nowrap">Branża</span>
                                    <select
                                        v-model="filters.category"
                                        class="bg-transparent border-none focus:ring-0 text-sm font-bold text-[#0A2C5C] p-1 w-40 cursor-pointer"
                                    >
                                        <option value="">Wszystkie</option>
                                        <option v-for="cat in availableCategories" :key="cat" :value="cat" class="bg-white">
                                            {{ cat }}
                                        </option>
                                    </select>
                                </div>
                            </div>

                            <!-- Position Filter -->
                            <div class="flex items-center gap-2 bg-gray-50 p-1.5 rounded-2xl border border-gray-100">
                                <div class="flex items-center gap-2 px-3">
                                    <span class="text-[9px] font-black text-gray-400 uppercase tracking-widest whitespace-nowrap">Stanowisko</span>
                                    <select
                                        v-model="filters.position"
                                        class="bg-transparent border-none focus:ring-0 text-sm font-bold text-[#0A2C5C] p-1 w-40 cursor-pointer"
                                    >
                                        <option value="">Wszystkie</option>
                                        <option v-for="pos in availablePositions" :key="pos" :value="pos" class="bg-white">
                                            {{ pos }}
                                        </option>
                                    </select>
                                </div>
                            </div>

                            <!-- Date Filters -->
                            <div class="flex items-center gap-2 bg-gray-50 p-1.5 rounded-2xl border border-gray-100">
                                <div class="flex items-center gap-2 px-3">
                                    <span class="text-[9px] font-black text-gray-400 uppercase tracking-widest">Od</span>
                                    <input
                                        v-model="filters.date_from"
                                        type="date"
                                        class="bg-transparent border-none focus:ring-0 text-sm font-bold text-[#0A2C5C] p-1 w-32"
                                    />
                                </div>
                                <div class="w-px h-6 bg-gray-200"></div>
                                <div class="flex items-center gap-2 px-3">
                                    <span class="text-[9px] font-black text-gray-400 uppercase tracking-widest">Do</span>
                                    <input
                                        v-model="filters.date_to"
                                        type="date"
                                        class="bg-transparent border-none focus:ring-0 text-sm font-bold text-[#0A2C5C] p-1 w-32"
                                    />
                                </div>
                                <button
                                    v-if="filters.date_from || filters.date_to || filters.category || filters.position"
                                    @click="resetFilters"
                                    class="p-2 hover:bg-gray-200 rounded-xl transition-colors text-gray-400 hover:text-red-500"
                                >
                                    <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Summary Cards -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
                    <div class="bg-white p-8 rounded-[2rem] shadow-sm border border-gray-100 group hover:border-blue-200 transition-all">
                        <div class="flex items-center justify-between mb-4">
                            <div class="w-12 h-12 bg-blue-50 rounded-xl flex items-center justify-center group-hover:bg-blue-600 group-hover:text-white transition-colors">
                                <svg class="w-6 h-6 text-blue-600 group-hover:text-inherit" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                                </svg>
                            </div>
                            <span class="text-[10px] font-black text-blue-600 bg-blue-50 px-3 py-1 rounded-full uppercase">Suma</span>
                        </div>
                        <p class="text-[10px] font-black text-gray-400 uppercase tracking-widest mb-1">Wszystkie wyszukiwania</p>
                        <p class="text-3xl font-black text-[#0A2C5C]">{{ statistics.total }}</p>
                    </div>

                    <div class="bg-white p-8 rounded-[2rem] shadow-sm border border-gray-100 group hover:border-green-200 transition-all">
                        <div class="flex items-center justify-between mb-4">
                            <div class="w-12 h-12 bg-green-50 rounded-xl flex items-center justify-center group-hover:bg-green-600 group-hover:text-white transition-colors">
                                <svg class="w-6 h-6 text-green-600 group-hover:text-inherit" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </div>
                            <span class="text-[10px] font-black text-green-600 bg-green-50 px-3 py-1 rounded-full uppercase">Dostępność</span>
                        </div>
                        <p class="text-[10px] font-black text-gray-400 uppercase tracking-widest mb-1">Aktywne projekty ogółem</p>
                        <p class="text-3xl font-black text-[#0A2C5C]">{{ totalActiveProjects }}</p>
                    </div>

                    <div class="bg-white p-8 rounded-[2rem] shadow-sm border border-gray-100 group hover:border-amber-200 transition-all">
                        <div class="flex items-center justify-between mb-4">
                            <div class="w-12 h-12 bg-amber-50 rounded-xl flex items-center justify-center group-hover:bg-amber-600 group-hover:text-white transition-colors">
                                <svg class="w-6 h-6 text-amber-600 group-hover:text-inherit" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 21v-4m18 4v-4M10 5a2 2 0 100-4 2 2 0 000 4zm10 0a2 2 0 100-4 2 2 0 000 4zM10 21V7m10 14V7m-10 14H3m10 0h11" />
                                </svg>
                            </div>
                            <span class="text-[10px] font-black text-amber-600 bg-amber-50 px-3 py-1 rounded-full uppercase">Top Kraj</span>
                        </div>
                        <p class="text-[10px] font-black text-gray-400 uppercase tracking-widest mb-1">Najpopularniejszy kierunek</p>
                        <p class="text-xl font-black text-[#0A2C5C] truncate">{{ charts.countries.labels[0] || '-' }}</p>
                    </div>

                    <div class="bg-white p-8 rounded-[2rem] shadow-sm border border-gray-100 group hover:border-purple-200 transition-all">
                        <div class="flex items-center justify-between mb-4">
                            <div class="w-12 h-12 bg-purple-50 rounded-xl flex items-center justify-center group-hover:bg-purple-600 group-hover:text-white transition-colors">
                                <svg class="w-6 h-6 text-purple-600 group-hover:text-inherit" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z" />
                                </svg>
                            </div>
                            <span class="text-[10px] font-black text-purple-600 bg-purple-50 px-3 py-1 rounded-full uppercase">Top Kat.</span>
                        </div>
                        <p class="text-[10px] font-black text-gray-400 uppercase tracking-widest mb-1">Najczęstsza branża</p>
                        <p class="text-xl font-black text-[#0A2C5C] truncate">{{ charts.categories.labels[0] || '-' }}</p>
                    </div>
                </div>

                <!-- Table -->
                <div class="bg-white rounded-[2.5rem] shadow-sm border border-gray-100 overflow-hidden mb-8">
                    <div class="p-8 border-b border-gray-50 flex items-center justify-between">
                        <h4 class="text-sm font-black text-[#0A2C5C] uppercase tracking-[0.2em]">Najczęstsze konfiguracje wyszukiwania</h4>
                        <span class="text-[10px] font-bold text-gray-400 uppercase tracking-widest">Strona {{ statistics.current_page }} z {{ statistics.last_page }}</span>
                    </div>
                    <div class="overflow-x-auto">
                        <table class="w-full text-left border-collapse">
                            <thead>
                                <tr class="bg-gray-50/50">
                                    <th class="p-6 text-[10px] font-black text-[#0A2C5C] uppercase tracking-[0.2em]">Ostatnio</th>
                                    <th class="p-6 text-[10px] font-black text-[#0A2C5C] uppercase tracking-[0.2em]">Popularność</th>
                                    <th class="p-6 text-[10px] font-black text-[#0A2C5C] uppercase tracking-[0.2em]">Kraj / Miasto</th>
                                    <th class="p-6 text-[10px] font-black text-[#0A2C5C] uppercase tracking-[0.2em]">Branża / Podbra.</th>
                                    <th class="p-6 text-[10px] font-black text-[#0A2C5C] uppercase tracking-[0.2em]">Zawód / Stanowisko</th>
                                    <th class="p-6 text-[10px] font-black text-[#0A2C5C] uppercase tracking-[0.2em] text-center">Wyniki</th>
                                    <th class="p-6 text-[10px] font-black text-[#0A2C5C] uppercase tracking-[0.2em] text-center">Udział</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-50">
                                <tr v-for="(stat, index) in statistics.data" :key="index" class="hover:bg-gray-50/50 transition-colors group">
                                    <td class="p-6">
                                        <div class="flex flex-col">
                                            <span class="text-xs font-bold text-[#0A2C5C]">{{ formatDate(stat.last_searched_at).split(' ')[0] }}</span>
                                            <span class="text-[10px] font-medium text-gray-400">{{ formatDate(stat.last_searched_at).split(' ')[1] }}</span>
                                        </div>
                                    </td>
                                    <td class="p-6">
                                        <div class="flex items-center gap-2">
                                            <div class="flex flex-col">
                                                <span class="text-sm font-black text-blue-600">{{ stat.search_count }}x</span>
                                                <span class="text-[9px] font-bold text-gray-400 uppercase tracking-tighter">wyszukań</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="p-6">
                                        <div class="flex flex-col gap-1">
                                            <span class="text-sm font-black text-gray-700 leading-none">{{ formatValue(stat.country) }}</span>
                                            <span class="text-xs font-bold text-gray-400">{{ formatValue(stat.city) }}</span>
                                        </div>
                                    </td>
                                    <td class="p-6">
                                        <div class="flex flex-col gap-1">
                                            <span class="text-sm font-black text-gray-700 leading-none">{{ formatValue(stat.category) }}</span>
                                            <span class="text-xs font-bold text-gray-400">{{ formatValue(stat.category_sub) }}</span>
                                        </div>
                                    </td>
                                    <td class="p-6">
                                        <div class="flex flex-col gap-1">
                                            <span class="text-sm font-black text-gray-700 leading-none">{{ formatValue(stat.profession) }}</span>
                                            <span class="text-xs font-bold text-gray-400">{{ formatValue(stat.position) }}</span>
                                        </div>
                                    </td>
                                    <td class="p-6 text-center">
                                        <div :class="[
                                            'inline-flex items-center px-4 py-1.5 rounded-lg text-[11px] font-black uppercase tracking-wider',
                                            stat.active_projects_count > 0 ? 'bg-green-50 text-green-700' : 'bg-red-50 text-red-700'
                                        ]">
                                            {{ stat.active_projects_count }}
                                        </div>
                                    </td>
                                    <td class="p-6 text-center">
                                        <div class="flex flex-col items-center gap-1">
                                            <span class="text-xs font-black text-[#0A2C5C]">{{ stat.percentage_of_total }}%</span>
                                            <div class="w-12 h-1 bg-gray-100 rounded-full overflow-hidden">
                                                <div class="h-full bg-blue-500" :style="{ width: stat.percentage_of_total + '%' }"></div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr v-if="statistics.data.length === 0">
                                    <td colspan="9" class="p-20 text-center">
                                        <div class="flex flex-col items-center gap-4">
                                            <div class="w-16 h-16 bg-gray-50 rounded-full flex items-center justify-center">
                                                <svg class="w-8 h-8 text-gray-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
                                                </svg>
                                            </div>
                                            <p class="text-sm font-bold text-gray-400 uppercase tracking-widest">Brak danych do wyświetlenia</p>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <!-- Pagination -->
                    <div v-if="statistics.links" class="p-8 bg-gray-50/50 border-t border-gray-50">
                        <Pagination :links="statistics.links" />
                    </div>
                </div>

                <!-- Trends Section -->
                <div class="bg-white rounded-[2.5rem] shadow-sm border border-gray-100 p-8 mb-8">
                    <div class="flex items-center justify-between mb-8">
                        <div>
                            <h4 class="text-sm font-black text-[#0A2C5C] uppercase tracking-[0.2em]">Trend wyszukiwań</h4>
                            <p class="text-[10px] font-bold text-gray-400 uppercase tracking-widest mt-1">Liczba zapytań w czasie</p>
                        </div>
                    </div>
                    <div v-if="isClient && VueApexChartsLazy" class="h-[300px] w-full">
                        <component
                            :is="VueApexChartsLazy"
                            width="100%"
                            height="100%"
                            :options="getLineChartOptions(charts.trends.labels, '')"
                            :series="charts.trends.series"
                        />
                    </div>
                    <div v-else class="h-[300px] flex items-center justify-center">
                        <div class="animate-spin rounded-full h-8 w-8 border-b-2 border-blue-500"></div>
                    </div>
                </div>

                <!-- Charts Section -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-12">
                    <div class="bg-white rounded-[2.5rem] shadow-sm border border-gray-100 p-8">
                        <div class="mb-6">
                            <h4 class="text-sm font-black text-[#0A2C5C] uppercase tracking-[0.2em]">Top Kraje</h4>
                        </div>
                        <div v-if="isClient && VueApexChartsLazy" class="h-[350px]">
                            <component
                                :is="VueApexChartsLazy"
                                width="100%"
                                height="100%"
                                :options="getChartOptions(charts.countries.labels, '')"
                                :series="charts.countries.series"
                            />
                        </div>
                    </div>

                    <div class="bg-white rounded-[2.5rem] shadow-sm border border-gray-100 p-8">
                        <div class="mb-6">
                            <h4 class="text-sm font-black text-[#0A2C5C] uppercase tracking-[0.2em]">Top Kategorie</h4>
                        </div>
                        <div v-if="isClient && VueApexChartsLazy" class="h-[350px]">
                            <component
                                :is="VueApexChartsLazy"
                                width="100%"
                                height="100%"
                                :options="getChartOptions(charts.categories.labels, '')"
                                :series="charts.categories.series"
                            />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </AppLayout>
</template>
