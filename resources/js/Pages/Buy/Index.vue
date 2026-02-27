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
            <div class="flex items-center justify-between">
                <div>
                    <h3 class="text-2xl font-black text-[#0A2C5C] uppercase tracking-tight">{{ __('translate.buy') }}</h3>
                    <p class="text-[10px] font-bold text-gray-400 uppercase tracking-widest mt-1">{{ __('info.header_big') }}</p>
                </div>
            </div>
        </template>
        <div class="py-12 bg-gray-50/50 min-h-screen relative overflow-hidden">
            <!-- Background Decorations -->
            <div class="absolute top-0 right-0 w-[500px] h-[500px] bg-blue-100/30 rounded-full -mr-64 -mt-64 blur-3xl animate-pulse"></div>
            <div class="absolute bottom-0 left-0 w-[400px] h-[400px] bg-red-50/20 rounded-full -ml-48 -mb-48 blur-3xl"></div>

            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
                <!-- Sekcja pakietów punktów + 'Zobacz, jak Twoja firma pomaga' (z /price) -->
                <div class="bg-white rounded-[3rem] shadow-xl shadow-blue-900/5 border border-gray-100 p-8 md:p-16 mb-12">
                    <div>
                        <!-- NAGŁÓWEK (jak na /price) -->
                        <div class="text-center mb-24">
                            <div class="inline-flex items-center gap-2 px-4 py-2 bg-white rounded-full shadow-sm border border-gray-100 mb-8 animate-bounce">
                                <span class="relative flex h-2 w-2">
                                    <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-red-400 opacity-75"></span>
                                    <span class="relative inline-flex rounded-full h-2 w-2 bg-red-500"></span>
                                </span>
                                <span class="text-[10px] font-black text-[#0A2C5C] uppercase tracking-[0.2em]">{{ __('translate.bestOffers') }}</span>
                            </div>

                            <h1 class="text-4xl md:text-5xl font-black text-[#0A2C5C] leading-tight uppercase tracking-tighter mb-8">
                                {{ __('info.header_big') }}
                            </h1>

                            <p class="text-lg text-gray-500 font-medium max-w-3xl mx-auto leading-relaxed mb-12 uppercase tracking-widest text-[11px]">
                                {{ __('info.header_desc_1') }}<br>
                                {{ __('info.header_desc_2') }}
                                <span class="text-red-500 font-black">
                                    {{ __('info.header_desc_bold') }}
                                </span>
                                {{ __('info.header_desc_3') }}<br>
                                {{ __('info.header_desc_4') }}
                            </p>

                            <div class="flex justify-center">
                                <Link :href="route('front.readMore')" class="group relative inline-flex items-center gap-4 px-12 py-5 bg-[#0A2C5C] text-white text-xs font-black rounded-3xl uppercase tracking-[0.3em] shadow-2xl shadow-blue-900/20 hover:bg-blue-800 transition-all hover:-translate-y-1">
                                    {{ __('info.read_more') }}
                                    <span class="text-xl group-hover:translate-x-2 transition-transform">→</span>
                                </Link>
                            </div>
                        </div>

                        <!-- LISTA PAKIETÓW -->
                        <div v-if="packages.length" class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 xl:grid-cols-7 gap-8 mb-24">
                            <div
                                v-for="(pack, index) in packages"
                                :key="pack.id"
                                @click="selected = pack"
                                class="group cursor-pointer rounded-[2.5rem] p-8 text-center transition-all duration-500 relative border flex flex-col items-center justify-between min-h-[320px]"
                                :class="[
                                    selected?.id === pack.id
                                        ? 'bg-[#0A2C5C] border-transparent shadow-2xl shadow-blue-900/40 scale-105 lg:scale-110 z-10'
                                        : 'bg-white border-gray-100 shadow-xl shadow-blue-900/5 hover:shadow-blue-900/10 hover:-translate-y-2',
                                ]"
                            >
                                <!-- Active Badge -->
                                <div v-if="selected?.id === pack.id" class="absolute -top-4 left-1/2 -translate-x-1/2 px-4 py-1.5 bg-[#00a0e3] text-white text-[8px] font-black uppercase tracking-widest rounded-full shadow-lg">
                                    {{ __('translate.selected') }}
                                </div>

                                <div class="w-20 h-20 rounded-3xl flex items-center justify-center mb-6 transition-transform duration-500 group-hover:scale-110"
                                     :class="selected?.id === pack.id ? 'bg-white/10' : 'bg-gray-50'">
                                    <img
                                        :src="`/images/price/${pack.points}.svg`"
                                        class="w-12 h-12 object-contain"
                                        :class="selected?.id === pack.id ? 'brightness-0 invert' : ''"
                                        :alt="pack.points"
                                    />
                                </div>

                                <div class="space-y-1 mb-6">
                                    <div class="text-3xl font-black transition-colors duration-300"
                                         :class="selected?.id === pack.id ? 'text-white' : 'text-[#0A2C5C]'">
                                        {{ pack.points.toLocaleString() }}
                                    </div>
                                    <div class="text-[10px] font-black uppercase tracking-[0.2em]"
                                         :class="selected?.id === pack.id ? 'text-blue-200' : 'text-gray-400'">
                                        {{ __('info.points') }}
                                    </div>
                                </div>

                                <div class="w-full space-y-4">
                                    <div class="text-xl font-black"
                                         :class="selected?.id === pack.id ? 'text-white' : 'text-[#0A2C5C]'">
                                        ${{ pack.price }}
                                    </div>

                                    <Link :href="route('buy.store', pack.id)" as="button" preserveScroll
                                          class="block w-full py-4 rounded-2xl font-black text-[10px] uppercase tracking-widest transition-all shadow-lg"
                                          :class="selected?.id === pack.id
                                              ? 'bg-white text-[#0A2C5C] hover:bg-gray-100'
                                              : 'bg-[#00a0e3] text-white hover:bg-[#008cc6] shadow-blue-400/20'">
                                        {{ __('translate.addToCart') }}
                                    </Link>
                                </div>
                            </div>
                        </div>

                        <!-- PROGRESS + IKONY + TEKST: Zobacz, jak Twoja firma pomaga -->
                        <div v-if="selected" class="grid lg:grid-cols-2 gap-16 items-center">
                            <div class="space-y-6">
                                <div class="inline-flex items-center gap-3 px-4 py-2 bg-blue-50 rounded-2xl">
                                    <div class="w-2 h-2 rounded-full bg-[#00a0e3] animate-pulse"></div>
                                    <span class="text-[10px] font-black text-[#00a0e3] uppercase tracking-widest">{{ __('translate.impact') }}</span>
                                </div>

                                <h3 class="text-3xl md:text-4xl font-black text-[#0A2C5C] uppercase tracking-tight leading-tight">
                                    {{ __('info.help_title') }}
                                </h3>

                                <p class="text-sm font-bold text-gray-500 uppercase tracking-widest leading-relaxed">
                                    {{ __('info.help_text_1') }}
                                    <span class="text-[#00a0e3] font-black">{{ selected.points.toLocaleString() }} {{ __('info.points2') }}</span>
                                    {{ __('info.help_text_2') }}
                                    <span class="text-[#00a0e3] font-black">${{ selected.price }}</span>,
                                    {{ __('info.help_text_3') }}
                                    <span class="text-red-500 font-black underline decoration-4 decoration-red-100 underline-offset-8">${{ donated }}</span>
                                </p>
                            </div>

                            <div class="space-y-12">
                                <!-- PROGRESS BAR -->
                                <div class="relative pt-8 px-[20px]">
                                    <div class="relative h-4 bg-gray-100 rounded-full border border-gray-100 shadow-inner">
                                        <div class="h-full bg-gradient-to-r from-[#0A2C5C] to-[#00a0e3] rounded-full absolute top-0 left-0 transition-all duration-700 ease-out shadow-lg"
                                             :style="{ width: progressWidth + '%' }">
                                            <div class="absolute inset-0 bg-white/20 animate-pulse"></div>
                                        </div>

                                        <!-- Handle -->
                                        <div class="w-10 h-10 bg-white border-4 border-[#00a0e3] rounded-2xl shadow-xl
                                                    absolute -top-3 transition-all duration-700 ease-out -ml-5 flex items-center justify-center"
                                             :style="{ left: progressWidth + '%' }">
                                            <div class="w-2 h-2 bg-[#00a0e3] rounded-full animate-ping"></div>
                                        </div>
                                    </div>

                                    <!-- IKONY POD PROGRESEM -->
                                    <div class="flex justify-between items-start mt-12">
                                        <div v-for="(pack, index) in packages" :key="'ico'+index"
                                             class="flex flex-col items-center transition-all duration-500"
                                             :style="{
                                                 opacity: index <= currentIndex ? 1 : 0.2,
                                             }">
                                            <div class="p-2 rounded-xl border-2 transition-all duration-500"
                                                 :class="index === currentIndex
                                                     ? 'bg-white border-[#00a0e3] shadow-lg scale-125 z-10'
                                                     : 'bg-gray-50 border-transparent scale-100'">
                                                <img
                                                    :src="`/images/price/${pack.points}.svg`"
                                                    :alt="pack.points"
                                                    class="w-8 h-8 object-contain"
                                                />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Sekcja usług dodatkowych -->
                <div class="bg-white rounded-[3rem] shadow-xl shadow-blue-900/5 border border-gray-100 p-8 md:p-16">
                    <!-- NAGŁÓWEK SEKCJI (z obrazka) -->
                    <div class="text-center mb-16">
                        <h2 class="text-3xl md:text-5xl font-black text-[#0A2C5C] uppercase tracking-tighter mb-4" v-html="__('translate.exchangePointsForServices')"></h2>
                        <p class="text-[11px] font-bold text-gray-400 uppercase tracking-[0.2em] max-w-2xl mx-auto leading-relaxed">
                            {{ __('translate.pointsServicesDesc') }}
                        </p>
                        <div class="flex items-center justify-center gap-2 mt-12">
                            <span class="text-sm font-bold text-gray-400 uppercase tracking-widest">{{ __('translate.youHave') }}:</span>
                            <span class="text-xl font-black text-[#00a0e3]">{{ points ? points.toLocaleString() : '0' }}</span>
                            <span class="text-sm font-black text-[#0A2C5C] uppercase tracking-widest">PKT</span>
                        </div>
                    </div>

                    <!-- ===================== USŁUGI DODATKOWE ===================== -->
                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-5 gap-8">
                        <div
                            v-for="(service, index) in additionalServices"
                            :key="service.id"
                            class="group rounded-[2.5rem] p-8 text-center transition-all duration-500 relative border flex flex-col justify-between min-h-[350px] bg-white border-gray-100 shadow-xl shadow-blue-900/5 hover:shadow-blue-900/10 hover:-translate-y-2 overflow-hidden"
                        >
                            <!-- Decoration -->
                            <div class="absolute top-0 right-0 w-32 h-32 bg-gray-50 rounded-full -mr-16 -mt-16 group-hover:bg-blue-50 transition-colors"></div>

                            <div class="relative z-10">
                                <div class="w-20 h-20 bg-gray-50 rounded-[2rem] flex items-center justify-center mx-auto mb-6 group-hover:scale-110 transition-transform duration-500">
                                    <img
                                        :src="service.icon"
                                        class="w-12 h-12 object-contain"
                                        :alt="service.name"
                                    />
                                </div>

                                <div v-if="service.id === 8 && bannerOptionsVisible[service.id]" class="text-xs font-black text-[#0A2C5C] uppercase leading-tight tracking-widest mb-4">
                                    {{__('translate.exchangeBanner')}}
                                </div>
                                <template v-else>
                                    <h4 class="text-lg font-black text-[#0A2C5C] uppercase tracking-tight mb-2">
                                        {{ service.name }}
                                    </h4>
                                    <p class="text-[10px] font-bold text-gray-400 uppercase tracking-widest leading-relaxed">
                                        {{ service.description || getServiceDescription(service.service_type || '') }}
                                    </p>
                                </template>
                            </div>

                            <div class="relative z-10 w-full mt-6">
                                <template v-if="service.id === 8">
                                    <template v-if="bannerOptionsVisible[service.id]">
                                        <div class="space-y-3">
                                            <Link
                                                preserve-scroll
                                                v-if="points && points >= parseInt(service.price)"
                                                :href="route('buy.change', { product: service.id, points: service.price })"
                                                method="post"
                                                as="button"
                                                class="w-full bg-[#0A2C5C] text-white py-4 rounded-2xl font-black text-[10px] uppercase tracking-widest hover:bg-blue-800 transition shadow-lg"
                                            >
                                                {{ __('translate.exchangePoints') }}
                                            </Link>
                                            <Link preserve-scroll method="post" as="button" :href="route('buy.reservedProject',[service,service.price])" class="w-full bg-red-600 text-white py-4 rounded-2xl font-black text-[10px] uppercase tracking-widest hover:bg-red-700 transition shadow-lg">
                                                {{__('translate.makeProject')}}
                                            </Link>
                                            <button
                                                @click="toggleBannerOptions(service.id)"
                                                class="w-full bg-gray-100 text-gray-400 py-4 rounded-2xl font-black text-[10px] uppercase tracking-widest hover:bg-gray-200 transition"
                                            >
                                                {{ __('translate.cancel') }}
                                            </button>
                                        </div>
                                    </template>
                                    <template v-else>
                                        <button
                                            @click="toggleBannerOptions(service.id)"
                                            class="w-full bg-[#00a0e3] text-white py-4 rounded-2xl font-black text-[10px] uppercase tracking-widest hover:bg-[#008cc6] transition shadow-lg shadow-blue-400/20 mb-4"
                                        >
                                            {{ __('translate.exchangePoints') }}
                                        </button>
                                        <div class="text-xl font-black text-[#0A2C5C] tracking-tighter">
                                            {{ parseInt(service.price).toLocaleString() }} <span class="text-[10px] uppercase tracking-widest text-gray-400">{{ __('translate.pointsUnit') }}</span>
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
                                        class="w-full bg-[#00a0e3] text-white py-4 rounded-2xl font-black text-[10px] uppercase tracking-widest hover:bg-[#008cc6] transition shadow-lg shadow-blue-400/20 mb-4"
                                    >
                                        {{ __('translate.exchangePoints') }}
                                    </Link>
                                    <div v-else class="w-full bg-gray-50 text-gray-300 py-4 rounded-2xl font-black text-[10px] uppercase tracking-widest cursor-not-allowed mb-4">
                                        {{ __('translate.notEnoughPoints') }}
                                    </div>

                                    <div class="text-xl font-black text-[#0A2C5C] tracking-tighter">
                                        {{ parseInt(service.price).toLocaleString() }} <span class="text-[10px] uppercase tracking-widest text-gray-400">{{ __('translate.pointsUnit') }}</span>
                                    </div>
                                </template>
                            </div>
                        </div>
                    </div>

                    <!-- Przycisk przejścia do koszyka -->
                    <div class="flex justify-center mt-16">
                        <Link v-if="countCart > 0" as="button" :href="route('buy.detail')"
                              class="group relative inline-flex items-center gap-4 px-12 py-5 bg-red-600 text-white text-xs font-black rounded-3xl uppercase tracking-[0.3em] shadow-2xl shadow-red-900/20 hover:bg-red-700 transition-all hover:-translate-y-1">
                            {{ __('translate.cart') }}
                            <span class="text-xl group-hover:translate-x-2 transition-transform">→</span>
                        </Link>
                    </div>
                </div>
            </div>
        </div>
    </AppLayout>
</template>
