<script setup>
import { computed, ref, reactive } from 'vue';
import { router, Link, usePage } from '@inertiajs/vue3';
import AppLayout from '@/Layouts/AppLayout.vue';
import Pagination from '@/Components/Pagination.vue';
import __ from "@/lang.js";

const props = defineProps({
    products: Object,
    filters: Object,
    countCart: Number,
});

// Dane o firmie
const points = computed(() => usePage().props.auth.user?.firm?.points);
// Zestawy punktowe (jak na /price)
const all = computed(() => {
    if (Array.isArray(props.products)) {
        return props.products;
    }
    return props.products?.data ?? [];
});
const packages = computed(() => all.value
    .filter(p => p.product_type === 'Points')
    .map(p => ({ id: p.id, name: p.name, points: p.points, price: p.price }))
);

const selected = ref(packages.value[Math.floor((packages.value.length || 1) / 2)] ?? null);
const currentIndex = computed(() => selected.value ? packages.value.findIndex(p => p.id === selected.value.id) : 0);
const totalSlots = computed(() => Math.max(packages.value.length - 1, 1));
const progressWidth = computed(() => (currentIndex.value / totalSlots.value) * 100);
const donated = computed(() => selected.value ? (selected.value.price * 0.5).toFixed(2) : '0.00');

// Usługi dodatkowe
const additionalServices = computed(() => all.value
    .filter(p => p.product_type !== 'Points')
    .map(p => ({
        ...p,
        service_type: p.type || '',
        icon: `/images/price/${p.id}-points.svg`,
        description: p.description || null
    }))
    .sort((a, b) => a.price - b.price)
);

const bannerOptionsVisible = reactive({});
const toggleBannerOptions = (serviceId) => {
    bannerOptionsVisible[serviceId] = !bannerOptionsVisible[serviceId];
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
</script>

<template>
    <AppLayout :title="__('translate.buy')">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ __('translate.buy') }}
            </h2>
        </template>
                <div class="py-12">
                    <div class="bg-[#0b2a55] text-white p-6 lg:p-8 md:max-w-[70vw] mx-auto dark:bg-gray-800 rounded-3xl shadow-2xl text-white">
                        <!-- Sekcja pakietów punktów + 'Zobacz, jak Twoja firma pomaga' (z /price) -->
                        <div>
                            <!-- NAGŁÓWEK (jak na /price) -->
                            <div class="text-center mb-16">
                                <h1 class="text-4xl font-extrabold leading-tight">
                                    {{ __('info.header_big') }}
                                </h1>

                                <p class="my-4 text-lg opacity-90 max-w-2xl mx-auto">
                                    {{ __('info.header_desc_1') }}<br>
                                    {{ __('info.header_desc_2') }}
                                    <strong class="text-white font-semibold">
                                        {{ __('info.header_desc_bold') }}
                                    </strong>
                                    {{ __('info.header_desc_3') }}<br>
                                    {{ __('info.header_desc_4') }}
                                </p>

                                <Link :href="route('front.readMore')" class="mt-6 inline-block bg-red-600 hover:bg-red-700 px-6 py-2 rounded-full text-white font-bold">
                                    {{ __('info.read_more') }}
                                </Link>
                            </div>

                            <!-- LISTA PAKIETÓW -->
                            <div v-if="packages.length" class="grid grid-cols-2 sm:grid-cols-2 lg:grid-cols-7 gap-6 mb-12">
                                <div
                                    v-for="(pack, index) in packages"
                                    :key="pack.id"
                                    @click="selected = pack"
                                    class="cursor-pointer rounded-xl p-6 text-center transition relative border duration-200"
                                    :class="[
                                        selected?.id === pack.id
                                            ? 'bg-[linear-gradient(45deg,#0B2A55_0%,#0D3874_50%,#0B2A55_100%)] border-[#00aaff] shadow-2xl lg:scale-[1.15] scale-100 z-1'
                                            : 'bg-[#0d3874] border-[#00aaff]',
                                        index === 6 ? 'col-span-2 sm:col-span-2 lg:col-span-1' : '',
                                        'hover:scale-[1.04]'
                                    ]"
                                >
                                    <div class="mb-3">
                                        <img :src="`/images/price/${pack.points}.svg`" :alt="pack.points" class="w-[48px] h-[48px] mx-auto" />
                                    </div>

                                    <div class="text-3xl font-bold" :class="selected?.id === pack.id ? 'glow-white-soft' : ''">
                                        {{ pack.points.toLocaleString() }}
                                    </div>
                                    <div class="text-sm opacity-80 mb-4">{{ __('info.points') }}</div>

                                    <!-- Zachowana funkcjonalność dodawania do koszyka -->
                                    <Link :href="route('buy.store', pack.id)" as="button" preserveScroll
                                          class="bg-[#00aaff] px-4 py-2 rounded-lg font-semibold text-white hover:bg-[#00bfff]">
                                        {{ __('translate.addToCart') }}
                                    </Link>

                                    <div class="mt-4">
                                        {{ __('info.price') }}: ${{ pack.price }}
                                    </div>
                                </div>
                            </div>

                            <!-- PROGRESS + IKONY + TEKST: Zobacz, jak Twoja firma pomaga -->
                            <div v-if="selected" class="flex justify-center sm:justify-end w-full">
                                <div class="text-center sm:text-right w-full">
                                    <div class="mb-6">
                                        <h3 class="text-2xl md:text-3xl font-bold mb-2">{{ __('info.help_title') }}</h3>
                                        <p class="text-base md:text-lg">
                                            {{ __('info.help_text_1') }}
                                            <span class="text-[#00aaff] font-bold">{{ selected.points.toLocaleString() }} {{ __('info.points2') }}</span>
                                            {{ __('info.help_text_2') }}
                                            <span class="text-[#00aaff] font-bold">${{ selected.price }}</span>,
                                            {{ __('info.help_text_3') }}
                                            <span class="text-[#00aaff] font-bold">${{ donated }}</span>
                                        </p>
                                    </div>

                                    <!-- Pasek postępu -->
                                    <div class="relative w-full max-w-[400px] mx-auto sm:ml-auto sm:mr-0">
                                        <div class="h-3 w-full border-[#00aaff] border-2 rounded-full"></div>
                                        <div class="h-3 bg-[#00aaff] rounded-full absolute top-0 left-0 transition-all duration-500"
                                             :style="{ width: progressWidth + '%' }"></div>
                                        <div class="w-6 h-6 bg-[#00aaff] border-4 border-[#00aaff] rounded-full absolute -top-1.5 transition-all duration-500"
                                             :style="{ left: `calc(${progressWidth}% - 12px)` }"></div>
                                    </div>

                                    <!-- Ikony pod paskiem -->
                                    <div class="relative mt-6 mx-auto sm:ml-auto sm:mr-0 w-full max-w-[400px] h-10">
                                        <div v-for="(pack, i) in packages" :key="'ico'+i" class="absolute transition"
                                             :style="{
                                                 left: `${(i / totalSlots) * 100}%`,
                                                 transform: i <= currentIndex ? 'translateX(-50%) scale(1.2)' : 'translateX(-50%) scale(1)',
                                                 opacity: i <= currentIndex ? 1 : 0.25,
                                                 transition: '0.3s'
                                             }">
                                            <img :src="`/images/price/${pack.points}.svg`" :alt="pack.points" class="w-[40px] h-[40px] min-w-[40px]" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Sekcja usług dodatkowych -->
                        <div>
                            <!-- NAGŁÓWEK SEKCJI (z obrazka) -->
                            <div class="text-center mb-12 mt-8">
                                <h1 class="text-3xl md:text-5xl font-extrabold leading-tight mb-4 uppercase tracking-tight" v-html="__('translate.exchangePointsForServices')">
                                </h1>
                                <p class="my-4 text-lg opacity-90 max-w-2xl mx-auto leading-relaxed">
                                    {{ __('translate.pointsServicesDesc') }}
                                </p>
                                <div class="text-[#00aaff] text-2xl md:text-4xl font-black uppercase mt-8">
                                    {{ __('translate.youHave') }}: {{ points ? points.toLocaleString() : '0' }} PKT
                                </div>
                            </div>

                            <!-- ===================== USŁUGI DODATKOWE ===================== -->
                            <div class="mx-auto px-6 mt-8">
                                <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-5 gap-6">
                                    <div
                                        v-for="(service,index) in additionalServices"
                                        :key="service.id"
                                        class="rounded-[2rem] p-6 text-center transition duration-300 hover:scale-[1.04] hover:shadow-2xl flex flex-col justify-between min-h-[320px] text-white border border-[#ffffff33] relative overflow-hidden"
                                        :class="[
                                            'bg-[#00aaff]',
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
                                                        {{ parseInt(service.price).toLocaleString() }} {{ __('translate.pointsUnit') }}
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

                            <!-- Przycisk przejścia do koszyka -->
                            <Link v-if="countCart > 0" as="button" :href="route('buy.detail')" :active="route().current('buy.index')"
                                  class="flex w-[180px] text-center justify-center items-center mx-auto px-6 py-3 bg-red-600 hover:bg-red-700 border-none rounded-full font-bold text-sm text-white uppercase tracking-widest shadow-xl transition-all hover:scale-105 mt-12">
                                {{ __('translate.cart') }}
                            </Link>
                        </div>
                    </div>
                </div>
    </AppLayout>
</template>
