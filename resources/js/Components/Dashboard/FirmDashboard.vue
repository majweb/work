<template>
    <div class="p-6 bg-white overflow-hidden shadow-xl sm:rounded-lg">
        <h3 class="mb-6 text-lg font-semibold text-slate-700">
            {{ __('translate.firmDashboard') }}
        </h3>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
            <!-- KAFEL 1 -->
            <Link :href="route('recruits.index')" class="rounded-xl border border-work-main bg-white hover:bg-work-main hover:text-white transition p-5 text-center group cursor-pointer">
                <div class="text-4xl font-extrabold text-work-main group-hover:text-white">
                    {{recruitsCount}}
                </div>
                <div class="mt-1 text-xs font-semibold uppercase tracking-wide text-slate-500">
                    {{ __('translate.recruiterCount') }}
                </div>
            </Link>

            <!-- KAFEL 2 (aktywny) -->
            <Link :href="route('projects.index')" class="rounded-xl border border-work-main bg-white hover:bg-work-main hover:text-white transition p-5 text-center group cursor-pointer">
                <div class="text-4xl font-extrabold text-work-main group-hover:text-white">
                    {{projectsCount}}
                </div>
                <div class="mt-1 text-xs font-semibold uppercase tracking-wide text-slate-500">
                    {{ __('translate.projectCountStat') }}
                </div>
            </Link>

            <!-- KAFEL 3 -->
            <Link :href="route('aplications.index')" class="rounded-xl border border-work-main bg-white hover:bg-work-main hover:text-white transition p-5 text-center group cursor-pointer">
                <div class="text-4xl font-extrabold text-work-main group-hover:text-white">
                    {{aplicationCount}}
                </div>
                <div class="mt-1 text-xs font-semibold uppercase tracking-wide text-slate-500">
                    {{ __('translate.applicationCountStat') }}
                </div>
            </Link>

            <!-- KAFEL 4 -->
            <div class="rounded-xl border border-work-main bg-white hover:bg-work-main hover:text-white transition p-5 text-center group cursor-pointer">
                <div class="text-4xl font-extrabold text-work-main group-hover:text-white">
                    {{viewCount}}
                </div>
                <div class="mt-1 text-xs font-semibold uppercase tracking-wide text-slate-500">
                    {{ __('translate.visitCount') }}
                </div>
            </div>
        </div>



        <div class="py-16 bg-[#0b2a55] text-white col-span-3 my-4 rounded-xl relative">
            <h1 class="text-white text-2xl md:text-4xl px-4 pb-2 font-semibold relative -top-4">
                {{__('translate.buyFirst')}}<br>
                {{__('translate.buySecond')}}
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
                <h1 class="text-white text-2xl md:text-4xl px-4 pb-2 font-semibold text-right" v-html="__('translate.exchangePointsForServices')">
                </h1>

                <!-- ===================== USŁUGI DODATKOWE ===================== -->
                <div class="mx-auto px-6 mt-8">
                    <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-5 gap-6">
                        <div
                            v-for="(service,index) in additionalServices"
                            :key="service.id"
                            class="rounded-[2rem] p-6 text-center transition duration-300 hover:scale-[1.04] hover:shadow-2xl flex flex-col justify-between min-h-[320px] text-white border border-[#ffffff33] relative overflow-hidden"
                            :class="[
                                service.id === 8 ? 'bg-[#00aaff]' : 'bg-gradient-to-b from-[#00aaff] to-[#0088cc]',
                                index === 4 ? 'col-span-2 sm:col-span-2 lg:col-span-1' : ''
                            ]"
                        >

                            <div class="relative z-10" :class="{ 'flex items-center h-full': service.id === 8 && bannerOptionsVisible[service.id] }">
                                <div class="mb-4" v-if="service.id !== 8 || !bannerOptionsVisible[service.id]">
                                    <img
                                        :src="service.icon"
                                        class="w-20 h-20 mx-auto"
                                        :alt="service.price"
                                    />
                                </div>

                                <div v-if="service.id === 8 && bannerOptionsVisible[service.id]" class="text-sm font-black px-2 leading-tight relative">

                                    <!-- Dekoracje dla Banera -->
                                    <template v-if="service.id === 8">
                                        <div class="absolute -top-5 -left-6 md:-top-8 md:-left-4 w-12 h-12">
                                            <img src="/images/price/linesUp.svg" alt="up">
                                        </div>
                                        <div class="absolute -bottom-5 -right-5 md:-bottom-7 md:-right-4 w-12 h-12">
                                            <img src="/images/price/linesDown.svg" alt="down">
                                        </div>
                                    </template>

                                {{__('translate.exchangeBanner')}}
                                </div>
                                <template v-else>
                                    <div class="text-xl font-black mb-0 uppercase leading-tight tracking-tight">
                                        {{ service.name }}
                                    </div>

                                    <div class="text-xs font-bold opacity-90 uppercase mb-4 tracking-wider">
                                        {{ service.description || getServiceDescription(service.service_type || '') }}
                                    </div>
                                </template>
                            </div>

                            <div class="relative z-10">
                                <template v-if="service.id === 8">
                                    <template v-if="bannerOptionsVisible[service.id]">
                                        <Link
                                            preserve-scroll
                                            v-if="points && points >= parseInt(service.price)"
                                            :href="route('buy.change', { product: service.id, points: service.price })"
                                            method="post"
                                            as="button"
                                            class="w-full bg-[#0b2a55] px-4 py-2 rounded-2xl font-black text-white text-xs hover:bg-[#162a44] transition-all duration-200 uppercase mb-2 shadow-lg"
                                        >
                                            {{ __('translate.exchangePoints') }}
                                        </Link>
                                        <Link preserve-scroll method="post" as="button" :href="route('buy.reservedProject',[service,service.price])" class="w-full bg-red-600 px-4 py-2 rounded-2xl font-black text-white text-xs hover:bg-red-700 transition-all duration-200 uppercase shadow-lg mb-2">
                                            {{__('translate.makeProject')}}
                                        </Link>
                                        <button
                                            @click="toggleBannerOptions(service.id)"
                                            class="w-full bg-gray-600/50 px-4 py-2 rounded-2xl font-black text-white text-xs hover:bg-gray-700 transition-all duration-200 uppercase shadow-lg mb-2"
                                        >
                                            {{ __('translate.cancel') }}
                                        </button>
                                        <div class="mt-1 text-sm font-black text-white">
                                            4 000 {{ __('translate.pointsUnit') }}
                                        </div>
                                    </template>
                                    <template v-else>
                                        <button
                                            @click="toggleBannerOptions(service.id)"
                                            class="w-full bg-[#0b2a55] border-2 border-[#00aaff] px-4 py-2.5 rounded-xl font-extrabold text-white text-sm hover:bg-[#0d3874] transition-all duration-200 uppercase tracking-widest mb-3 shadow-lg"
                                        >
                                            {{ __('translate.exchangePoints') }}
                                        </button>
                                        <div class="text-lg font-black tracking-tighter">
                                            {{ parseInt(service.price).toLocaleString() }} {{ __('translate.pointsUnit') }}
                                        </div>
                                    </template>
                                </template>
                                <template v-else>
                                    <Link
                                        preserve-scroll
                                        v-if="points && points >= parseInt(service.price)"
                                        :href="route('buy.change', { product: service.id, points: service.price })"
                                        method="post"
                                        as="button"
                                        class="w-full bg-[#0b2a55] border-2 border-[#00aaff] px-4 py-2.5 rounded-xl font-extrabold text-white text-sm hover:bg-[#0d3874] transition-all duration-200 uppercase tracking-widest mb-3 shadow-lg"
                                    >
                                        {{ __('translate.exchangePoints') }}
                                    </Link>
                                    <div v-else class="w-full bg-gray-500/50 backdrop-blur-sm px-4 py-2.5 rounded-xl font-extrabold text-white text-sm cursor-not-allowed uppercase tracking-widest mb-3 border border-white/20">
                                        {{ __('translate.notEnoughPoints') }}
                                    </div>

                                    <div class="text-lg font-black tracking-tighter">
                                        {{ parseInt(service.price).toLocaleString() }} {{ __('translate.pointsUnit') }}
                                    </div>
                                </template>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <!-- ===================== CERTYFIKATY ===================== -->
        <div v-if="certificate" class="mt-8 bg-white rounded-[2.5rem] p-8 shadow-sm border border-slate-100">
            <h2 class="text-4xl font-bold text-[#0b2a55] mb-8 text-center">
                {{ __('premium.certificates.premium_certificate') || 'Certyfikat Premium' }}
            </h2>

            <!-- Kafelki certyfikatów -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 mb-12 max-w-5xl mx-auto">
                <div
                    v-for="level in [1, 2, 3, 4]"
                    :key="level"
                    @click="selectCertificateLevel(level)"
                    class="relative rounded-[2rem] p-6 text-center transition-all duration-300 border-4 flex flex-col justify-between min-h-[300px] cursor-pointer"
                    :class="[
                        form.selectedLevel === level
                            ? 'border-[#00aaff] shadow-[0_0_20px_rgba(0,170,255,0.5)] scale-105 z-10'
                            : 'border-transparent bg-[#0b2a55]',
                        certificate.collectedPoints < certificate.levelPoints[level] ? 'opacity-50 grayscale cursor-not-allowed' : 'hover:scale-[1.02]'
                    ]"
                >
                    <div class="flex flex-col items-center">
                        <!-- Ikona (placeholder - na screenie są różne ikony) -->
                        <div class="w-12 h-12 mb-4 bg-[#00aaff] rounded-xl flex items-center justify-center shadow-[0_0_15px_rgba(0,170,255,0.6)]">
                            <svg v-if="level === 1" xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z" />
                            </svg>
                            <svg v-else-if="level === 2" xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364-6.364l-.707.707M6.343 17.657l-.707.707M16.243 17.657l.707.707M7.757 6.343l.707.707M8 12a4 4 0 118 0 4 4 0 01-8 0z" />
                            </svg>
                            <svg v-else-if="level === 3" xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                            </svg>
                            <svg v-else xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5.882V19.24a1.76 1.76 0 01-3.417.592l-2.147-6.167a2.405 2.405 0 011.411-2.923l2.147-1.107a1.775 1.775 0 011.412 0l2.147 1.107a2.405 2.405 0 011.411 2.923l-2.147 6.167a1.76 1.76 0 01-3.417-.592V5.882z" />
                            </svg>
                        </div>
                        <div class="text-3xl font-black text-white leading-none">
                            {{ certificate.levelPoints[level].toLocaleString() }}
                        </div>
                        <div class="text-[10px] font-bold text-white uppercase tracking-widest mt-1 mb-4">
                            {{ __('translate.points') }}
                        </div>
                        <div class="text-sm font-black text-[#00aaff] uppercase tracking-tighter leading-tight">
                            {{ certificate.levelNames[level] }}
                        </div>
                    </div>

                    <button
                        v-if="certificate.collectedPoints >= certificate.levelPoints[level]"
                        @click.stop="generateCertificate(level)"
                        class="mt-6 w-full bg-[#00aaff] text-white font-black py-2 rounded-xl text-xs uppercase tracking-widest hover:bg-[#0088cc] transition shadow-[0_5px_15px_rgba(0,170,255,0.4)]"
                    >
                        {{ __('translate.choose') || 'Wybieram' }}
                    </button>
                    <div v-else class="mt-6 w-full bg-gray-600/50 text-white/50 font-black py-2 rounded-xl text-xs uppercase tracking-widest cursor-not-allowed">
                        {{ __('translate.notEnoughPoints') }}
                    </div>
                </div>
            </div>

            <!-- Pasek postępu -->
            <div class="max-w-4xl mx-auto mt-12 mb-16 px-4">
                <h3 class="text-[#0b2a55] font-black text-lg mb-8">{{ __('premium.certificates.progress') || 'Postęp certyfikacji' }}</h3>
                <div class="relative h-4 bg-[#0b2a55] rounded-full overflow-visible">
                    <div
                        class="absolute top-0 left-0 h-full bg-[#00aaff] rounded-full transition-all duration-1000"
                        :style="{ width: progressPercentage + '%' }"
                    ></div>

                    <!-- Znaczniki i etykiety -->
                    <div
                        v-for="level in [1, 2, 3, 4]"
                        :key="'marker-' + level"
                        class="absolute top-0 w-0.5 h-6 bg-[#0b2a55] -mt-1"
                        :style="{ left: getLevelPosition(level) + '%' }"
                    >
                        <div class="absolute top-8 left-1/2 -translate-x-1/2 flex flex-col items-center whitespace-nowrap">
                            <span class="text-[10px] font-black text-slate-400">{{ certificate.levelPoints[level].toLocaleString() }} pkt</span>
                            <span class="text-[9px] font-bold text-slate-500 uppercase">{{ certificate.levelNames[level].replace('CERTYFIKAT ', '') }}</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="text-center">
                <h4 class="text-2xl font-black text-[#00aaff] uppercase tracking-wider">
                    {{ __('translate.youHave') || 'POSIADASZ' }}: {{ certificate.collectedPoints.toLocaleString() }} PKT
                </h4>
            </div>
        </div>
        <!-- ===================== FAKTURY ===================== -->
        <div class="mt-8 bg-white rounded-[2.5rem] p-8 shadow-sm border border-slate-100">
            <div class="flex justify-between items-center mb-8 px-4">
                <h2 class="text-4xl font-bold text-[#0b2a55]">
                    {{ __('translate.Invoices') }}
                </h2>
                <Link
                    :href="route('invoices.index')"
                    class="text-red-500 font-bold hover:underline text-sm uppercase tracking-wider"
                >
                    {{ __('translate.fullInvoiceList') }}
                </Link>
            </div>

            <div class="overflow-x-auto">
                <table class="w-full border-separate border-spacing-y-3">
                    <thead>
                        <tr class="text-[#00aaff] text-[10px] font-black uppercase tracking-widest text-center">
                            <th class="pb-2">{{ __('translate.invoiceId') }}</th>
                            <th class="pb-2">{{ __('translate.invoiceNumber') }}</th>
                            <th class="pb-2">{{ __('translate.invoiceDate') }}</th>
                            <th class="pb-2">{{ __('translate.invoiceAmount') }}</th>
                            <th class="pb-2">{{ __('translate.invoiceRead') }}</th>
                            <th class="pb-2">{{ __('translate.invoiceAction') }}</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr
                            v-for="invoice in lastInvoices"
                            :key="invoice.id"
                            class="bg-white rounded-2xl shadow-sm overflow-hidden"
                        >
                            <td class="py-4 px-2 text-center text-slate-400 text-xs first:rounded-l-2xl">
                                {{ invoice.id }}
                            </td>
                            <td class="py-4 px-2 text-center text-[#0b2a55] font-black text-sm">
                                {{ invoice.number }}/{{ invoice.month }}/{{ invoice.year }}
                            </td>
                            <td class="py-4 px-2 text-center text-slate-500 text-xs">
                                {{ invoice.date_invoice }}
                            </td>
                            <td class="py-4 px-2 text-center text-[#0b2a55] font-black text-sm">
                                ${{ parseFloat(invoice.amount).toLocaleString(undefined, { minimumFractionDigits: 2, maximumFractionDigits: 2 }) }}
                            </td>
                            <td class="py-4 px-2 text-center">
                                <div class="flex justify-center">
                                    <template v-if="invoice.opened">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-[#00aaff]" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                                        </svg>
                                    </template>
                                    <template v-else>
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-red-500" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                                        </svg>
                                    </template>
                                </div>
                            </td>
                            <td class="py-4 px-4 last:rounded-r-2xl">
                                <div class="flex flex-col gap-1 w-24 mx-auto">
                                    <a
                                        :href="route('invoicesDownload', invoice.id)"
                                        class="bg-[#0b2a55] text-white text-[10px] font-black py-1 px-3 rounded-md hover:bg-[#162a44] transition text-center uppercase"
                                        @click="invoice.opened = true"
                                    >
                                        {{ __('translate.invoiceDownload') }}
                                    </a>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 mt-8">
            <!-- STATYSTYKI -->
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 p-6 bg-white bg-[#f8fafc] rounded-[2.5rem] shadow-sm border border-slate-100">
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
                    <li v-else>{{ __('translate.noNotifications') }}</li>
                </ul>
            </div>
        </div>

    </div>
</template>

<script setup>
import {Link, router, usePage, useForm} from "@inertiajs/vue3";
import __ from "@/lang.js";
import {computed, ref, reactive} from "vue";

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
    chartDataInvoices: {
        type: Object,
        default: null
    },
    packages: {
        type: Array,
        default: () => []
    },
    additionalServices: {
        type: Array,
        default: () => []
    },
    chartFirm: {
        type: Object,
        default: null
    },
    certificate: {
        type: Object,
        default: null
    },
    recruitsCount: Number,
    projectsCount: Number,
    aplicationCount: Number,
    viewCount: Number,
});

const packagesRef = ref(props.packages);
const selected = ref(packagesRef.value[Math.floor(packagesRef.value.length / 2)] || {});
const bannerOptionsVisible = reactive({});
const lastInvoices = computed(() => {
    return props.chartDataInvoices || [];
});
let points = computed(() => {
    return usePage().props.auth.user?.firm?.points;
});

// Certyfikat Premium logic
const form = useForm({
    selectedLevel: null,
});

const selectCertificateLevel = (level) => {
    if (props.certificate && props.certificate.collectedPoints >= props.certificate.levelPoints[level]) {
        form.selectedLevel = level;
    }
};

const generateCertificate = (level) => {
    if (level) {
        form.selectedLevel = level;
    }

    if (!form.selectedLevel) return;

    form.post(route('firm.premium-certificate.generate'), {
        preserveScroll: true,
        onSuccess: () => {
            form.reset();
        },
    });
};

const progressPercentage = computed(() => {
    if (!props.certificate) return 0;
    const maxPoints = props.certificate.levelPoints[4];
    return Math.min((props.certificate.collectedPoints / maxPoints) * 100, 100);
});

const getLevelPosition = (level) => {
    if (!props.certificate) return 0;
    const maxPoints = props.certificate.levelPoints[4];
    return (props.certificate.levelPoints[level] / maxPoints) * 100;
};

const toggleBannerOptions = (serviceId) => {
    bannerOptionsVisible[serviceId] = !bannerOptionsVisible[serviceId];
};

const getServiceIcon = (type) => {
    const iconMap = {
        'certificate': '10000',
        'banner': '8000',
        'promotional': '6000',
        'distinguished': '3000',
    };
    return iconMap[type.toLowerCase()] || '3000';
};

const getServiceName = (type) => {
    const nameMap = {
        'certificate': __('info.certyfikat'),
        'banner': __('info.baner'),
        'promotional': __('info.promocja'),
        'distinguished': __('info.wyroznienie'),
    };
    return nameMap[type.toLowerCase()] || type;
};

const getServiceDescription = (type) => {
    const descMap = {
        'certificate': __('info.certyfikat_desc'),
        'banner': __('info.baner_desc'),
        'promotional': __('info.promocja_desc'),
        'distinguished': __('info.wyroznienie_desc'),
    };
    return descMap[type.toLowerCase()] || '';
};

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
