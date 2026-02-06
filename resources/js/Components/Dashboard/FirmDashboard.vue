<template>
    <div class="p-6 bg-white overflow-hidden shadow-xl sm:rounded-lg">
        <h3 class="mb-6 text-lg font-semibold text-slate-700">
            Panel Firmy
        </h3>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
            <!-- KAFEL 1 -->
            <Link :href="route('recruits.index')" class="rounded-xl border border-work-main bg-white hover:bg-work-main hover:text-white transition p-5 text-center group cursor-pointer">
                <div class="text-4xl font-extrabold text-work-main group-hover:text-white">
                    {{recruitsCount}}
                </div>
                <div class="mt-1 text-xs font-semibold uppercase tracking-wide text-slate-500">
                    Liczba rekruterów
                </div>
            </Link>

            <!-- KAFEL 2 (aktywny) -->
            <Link :href="route('projects.index')" class="rounded-xl border border-work-main bg-white hover:bg-work-main hover:text-white transition p-5 text-center group cursor-pointer">
                <div class="text-4xl font-extrabold text-work-main group-hover:text-white">
                    {{projectsCount}}
                </div>
                <div class="mt-1 text-xs font-semibold uppercase tracking-wide text-slate-500">
                    Liczba projektów
                </div>
            </Link>

            <!-- KAFEL 3 -->
            <Link :href="route('aplications.index')" class="rounded-xl border border-work-main bg-white hover:bg-work-main hover:text-white transition p-5 text-center group cursor-pointer">
                <div class="text-4xl font-extrabold text-work-main group-hover:text-white">
                    {{aplicationCount}}
                </div>
                <div class="mt-1 text-xs font-semibold uppercase tracking-wide text-slate-500">
                    Liczba aplikacji
                </div>
            </Link>

            <!-- KAFEL 4 -->
            <div class="rounded-xl border border-work-main bg-white hover:bg-work-main hover:text-white transition p-5 text-center group cursor-pointer">
                <div class="text-4xl font-extrabold text-work-main group-hover:text-white">
                    24 957
                </div>
                <div class="mt-1 text-xs font-semibold uppercase tracking-wide text-slate-500">
                    Liczba wejść
                </div>
            </div>
        </div>



            <div class="py-16 bg-[#0b2a55] text-white col-span-3 my-4 rounded-xl relative">
                <h1 class="text-white text-2xl w-2/5 px-4 pb-2 font-semibold relative -top-4">
                    KUPUJ PUNKTY I PUBLIKUJ<br>
                    OGŁOSZENIA BEZ OGRANICZEŃ
                </h1>
                <h2 class="text-blue-work text-right p-4 absolute top-0 right-0 uppercase">{{ __('translate.give') }}: <strong>{{points ? points : '0'}}</strong> {{ __('translate.points') }}</h2>
                <div class="mx-auto px-6">
                    <!-- ===================== LISTA PAKIETÓW ===================== -->
                    <div class="grid grid-cols-2 sm:grid-cols-2 lg:grid-cols-7 gap-6 mb-12">
                        <div
                        v-for="(pack, index) in packages"
                        :key="pack.id"
                        @click="selected = pack"
                        class="cursor-pointer rounded-xl p-6 text-center transition relative border duration-200"
                        :class="[
                                selected.id === pack.id
                                    ? 'bg-[linear-gradient(45deg,#0B2A55_0%,#0D3874_50%,#0B2A55_100%)] border-[#00aaff] shadow-2xl lg:scale-[1.15] scale-100 z-10'
                                    : 'bg-[#0d3874] border-[#00aaff]',

                                index === 6 ? 'col-span-2 sm:col-span-2 lg:col-span-1' : '',
                                'hover:scale-[1.04]'
                            ]"
                    >

                        <div class="mb-3">
                            <img
                                :src="`/images/price/${pack.points}.svg`"
                                class="w-[48px] h-[48px] mx-auto"
                                :alt="pack.points"
                            />
                        </div>

                        <div
                            class="text-2xl font-bold"
                            :class="selected.id === pack.id ? 'glow-white-soft' : ''"
                        >
                            {{ pack.points.toLocaleString() }}
                        </div>
                        <div class="text-sm opacity-80 mb-4">
                            {{ __('info.points') }}
                        </div>
                        <Link :href="route('buy.store',pack)" as="button" v-if="pack.product_type == 'Points'" class="bg-[#00aaff] px-4 py-2 rounded-lg font-semibold text-white text-xs">
                            {{__('translate.addToCart')}}
                        </Link>

                        <div class="mt-4">
                            {{ __('info.price') }}: ${{ pack.price }}
                        </div>
                    </div>
                    </div>
                </div>
                <div class="relative">
                    <h1 class="text-white text-2xl w-2/5 px-4 pb-2 font-semibold ">
                        WYMIENIAJ PUNKTY<br>
                        NA USŁUGI DODATKOWE
                    </h1>
                </div>
            </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 my-4">
            <!-- STATYSTYKI -->
            <div>
                <h2 class="text-xl font-semibold mb-6">{{ __('translate.recruiterStatistics') }}</h2>
                <div class="flex justify-center">
                    <apexchart
                        v-if="chartData"
                        width="300"
                        height="300"
                        type="donut"
                        :options="chartOptions"
                        :series="chartSeries"
                    />
                    <div v-else class="text-center text-gray-500">
                        {{ __('translate.NoData') }}
                    </div>
                </div>
            </div>
            <div>
                <h2 class="text-xl font-semibold mb-6">{{ __('translate.recruiterStatistics') }}</h2>
                <div class="flex justify-center">
                    <apexchart
                        v-if="chartDataApp"
                        width="300"
                        height="300"
                        type="donut"
                        :options="chartOptionsApp"
                        :series="chartSeriesApp"
                    />
                    <div v-else class="text-center text-gray-500">
                        {{ __('translate.NoData') }}
                    </div>
                </div>
            </div>
        </div>


        <!-- POWIADOMIENIA -->
        <div class="bg-white rounded-2xl shadow p-6">
            <div class="flex justify-between items-center mb-4">
                <h2 class="text-lg font-semibold">{{__('translate.notifications')}}</h2>
                <Link  preserveScroll v-if="usePage().props.unreadNotifications" :href="route('notifications.markAllAsRead')" method="post" as="button" class="text-sm text-red-500 hover:underline">
                    {{ __('translate.markAllAsRead') }}
                </Link>
            </div>
            <ul class="text-sm text-gray-700 max-h-40 overflow-y-auto">
                <li
                    v-if="notifications.length"
                    v-for="notification in notifications"
                    :key="notification.id"
                    class="relative flex items-start gap-1
                   before:content-['•']
                   before:ml-1
                   before:mt-1
                   before:text-gray-600"
                    :class="{
                'font-semibold': !notification.read_at,
                'font-normal': notification.read_at
            }"
                >
                    <button
                        v-if="!notification.read_at"
                        class="mt-1 text-gray-600 text-left"
                        v-html="formatNotification(notification).message"
                        @click="markAsRead(notification.id)"
                    ></button>
                    <span v-else class="mt-1 text-gray-600" v-html="formatNotification(notification).message"></span>
                </li>
                <li v-else>Brak powiadomień</li>
            </ul>
        </div>


    </div>
</template>

<script setup>
import {Link, router, usePage} from "@inertiajs/vue3";
import __ from "@/lang.js";
import {computed, ref} from "vue";

const props = defineProps({
    notifications: {
        type: Array,
        default: () => []
    },
    chartData: {
        type: Object,
        default: null
    },
    chartDataApp: {
        type: Object,
        default: null
    },
    products: {
        type: Array,
        required: true
    },
    recruitsCount:Number,
    projectsCount:Number,
    aplicationCount:Number,
});

const packages = ref(
    props.products.map((p) => ({
        id: p.id,
        points: p.points,
        price: p.price,
        product_type: p.product_type,
    }))
);
const selected = ref(packages.value[Math.floor(packages.value.length / 2)]);
let points  = computed(()=>{
    return usePage().props.auth.user?.firm?.points;
});

const formatNotification = (notification) => {
    const data = notification.data;
    if (!data) return { title: __('translate.unknownNotification'), message: '' };
    return {
        title: data.title || __('translate.notification'),
        message: data.message || '',
        action: data.action || null,
        actionUrl: data.actionUrl || null
    };
};
const markAsRead = (id) => {
    router.post(
        route('notifications.markAsRead', id),
        {},
        {
            preserveScroll: true,
            preserveState: true,
            only: ['notifications', 'unreadNotifications'],

        }
    );
};
// Obliczenia dla wykresu
const chartSeries = computed(() => {
    if (!props.chartData) return [0, 0, 0, 0];
    return [
        props.chartData.active || 0,      // Zaakceptowane
        props.chartData.no || 0,       // Odrzucone
    ];
});
const chartSeriesApp = computed(() => {
    if (!props.chartDataApp) return [0, 0, 0, 0];
    return [
        props.chartDataApp.yes || 0,      // Zaakceptowane
        props.chartDataApp.no || 0,       // Odrzucone
        props.chartDataApp.maybe || 0,    // Rozpatrywane
        props.chartDataApp.new || 0       // Wysłane
    ];
});

const chartOptions = computed(() => ({
    chart: {
        type: 'donut',
    },
    labels: [
        __('translate.activeRecruits'),      // Aktywni - rekruterzy
        __('translate.notActiveRecruits'),       // Nieaktywni - rekruterzy
    ],
    colors: ['#0d2a52', '#e31e24'],
    legend: {
        position: 'bottom'
    },
    dataLabels: {
        enabled: true,
        formatter: function (val, opts) {
            return opts.w.config.series[opts.seriesIndex];
        }
    },
    plotOptions: {
        pie: {
            donut: {
                size: '65%',
                labels: {
                    show: true,
                    total: {
                        show: true,
                        label: __('translate.total'),
                        fontSize: '16px',
                        fontWeight: 600
                    }
                }
            }
        }
    }
}));
const chartOptionsApp = computed(() => ({
    chart: {
        type: 'donut',
    },
    labels: [
        __('translate.reserved'),      // Zaakceptowane - status yes
        __('translate.rejected'),       // Odrzucone - status no
        __('translate.viewed'),         // Rozpatrywane - status maybe
        __('translate.sent')            // Wysłane - status NULL
    ],
    colors: ['#0d2a52', '#e31e24', '#00a0e3', '#9ca3af'],
    legend: {
        position: 'bottom'
    },
    dataLabels: {
        enabled: true,
        formatter: function (val, opts) {
            return opts.w.config.series[opts.seriesIndex];
        }
    },
    plotOptions: {
        pie: {
            donut: {
                size: '65%',
                labels: {
                    show: true,
                    total: {
                        show: true,
                        label: __('translate.total'),
                        fontSize: '16px',
                        fontWeight: 600
                    }
                }
            }
        }
    }
}));
</script>
