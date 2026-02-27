<script setup>
import FrontLayout from "@/Layouts/FrontLayout.vue";
import MapBoxFundations from "@/Components/MapBoxFundations.vue";

// SWIPER IMPORTS
import { Swiper, SwiperSlide } from "swiper/vue";
import { Autoplay } from "swiper/modules";
import "swiper/css";
import mapboxgl from "mapbox-gl";
import {computed} from "vue";
import {usePage} from "@inertiajs/vue3";
const props = defineProps({
    partners: {
        type: Array,
        required: true
    },
    categories: Array,
    foundations:Array,
    countries:Array,
    foundationsCount:Number,
});
const foundations = computed(() => props.foundations);
mapboxgl.accessToken = usePage().props.mapboxToken;
</script>
<template>
    <FrontLayout :title="__('partners.about_title')">
        <div class="py-12 bg-gray-50/50 min-h-screen relative overflow-hidden">
            <!-- Background Decoration -->
            <div class="absolute top-0 right-0 w-[500px] h-[500px] bg-blue-100/30 rounded-full -mr-64 -mt-64 blur-3xl transition-transform duration-1000"></div>
            <div class="absolute bottom-0 left-0 w-[400px] h-[400px] bg-red-50/30 rounded-full -ml-48 -mb-48 blur-3xl transition-transform duration-1000"></div>

            <div class="max-w-7xl mx-auto px-4 relative z-10 space-y-12">
                <!-- PARTNERS SECTION -->
                <div class="bg-white rounded-[3rem] shadow-2xl shadow-blue-900/5 border border-white p-8 md:p-16 relative overflow-hidden group">
                    <!-- Logo background decoration -->
                    <img src="/images/logo-horizontal.svg" class="absolute -bottom-20 -right-20 w-96 opacity-[0.03] pointer-events-none grayscale group-hover:scale-110 transition-transform duration-1000" alt="logo">

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
                        <div class="flex justify-center order-2 md:order-1 relative">
                            <div class="absolute inset-0 bg-blue-400/10 blur-3xl rounded-full scale-110 animate-pulse"></div>
                            <img src="/images/partners/partners.svg" class="w-full max-w-sm relative z-10 drop-shadow-2xl transition-transform duration-700 hover:scale-105" alt="partners">
                        </div>
                        <div class="order-1 md:order-2 space-y-6">
                            <div class="inline-flex items-center gap-3 px-4 py-2 bg-blue-50 rounded-2xl">
                                <div class="w-2 h-2 rounded-full bg-[#00a0e3] animate-pulse"></div>
                                <span class="text-[10px] font-black text-[#00a0e3] uppercase tracking-widest">{{ __('translate.partners') || 'PARTNERZY' }}</span>
                            </div>

                            <h2 class="text-3xl md:text-5xl font-black text-[#0A2C5C] uppercase tracking-tight leading-tight">
                                {{ __('partners.partners_title') }}
                            </h2>

                            <div class="text-sm md:text-base font-bold text-gray-500 uppercase tracking-widest leading-relaxed">
                                {{ __('partners.partners_text') }}
                                <span class="text-[#0A2C5C] font-black underline decoration-[#00a0e3] decoration-2 underline-offset-4">{{ __('partners.partners_strong') }}</span>
                                {{ __('partners.partners_text2') }}
                            </div>
                        </div>
                    </div>

                    <!-- SLIDER -->
                    <div v-if="props.partners.length > 1" class="mt-20 pt-12 border-t border-gray-50">
                        <div class="flex items-center gap-4 mb-8">
                            <h3 class="text-[10px] font-black text-gray-400 uppercase tracking-[0.2em]">{{ __('partners.partners_subtitle') }}</h3>
                            <div class="h-px flex-1 bg-gray-50"></div>
                        </div>

                        <Swiper
                            :modules="[Autoplay]"
                            :space-between="32"
                            :loop="props.partners.length > 6"
                            :autoplay="props.partners.length > 6 ? { delay: 3000, disableOnInteraction: false } : false"
                            :breakpoints="{
                                0:   { slidesPerView: 2.3 },
                                640: { slidesPerView: 3.5 },
                                1024:{ slidesPerView: 5 },
                                1280:{ slidesPerView: 6 }
                            }"
                            class="partners-swiper"
                        >
                            <SwiperSlide
                                v-for="partner in props.partners"
                                :key="partner.id"
                            >
                                <div class="flex flex-col items-center justify-center p-6 rounded-[2rem] bg-gray-50/50 border border-transparent hover:bg-white hover:border-gray-100 hover:shadow-xl hover:shadow-blue-900/5 transition-all duration-500 group">
                                    <a
                                        v-if="partner.link"
                                        :href="partner.link"
                                        target="_blank"
                                        rel="noopener"
                                        class="block mb-4 transition-transform duration-500 group-hover:scale-110"
                                    >
                                        <img
                                            :src="partner.logo"
                                            :alt="partner.name"
                                            class="h-16 w-auto object-contain grayscale opacity-60 group-hover:grayscale-0 group-hover:opacity-100 transition-all duration-500"
                                        />
                                    </a>
                                    <div v-else class="mb-4 transition-transform duration-500 group-hover:scale-110">
                                        <img
                                            :src="partner.logo"
                                            :alt="partner.name"
                                            class="h-16 w-auto object-contain grayscale opacity-60 group-hover:grayscale-0 group-hover:opacity-100 transition-all duration-500"
                                        />
                                    </div>

                                    <p class="text-[10px] font-black text-center text-gray-400 uppercase tracking-widest transition-colors group-hover:text-[#0A2C5C]">
                                        <a
                                            v-if="partner.link"
                                            :href="partner.link"
                                            target="_blank"
                                            rel="noopener"
                                        >
                                            {{ partner.name }}
                                        </a>
                                        <span v-else>{{ partner.name }}</span>
                                    </p>
                                </div>
                            </SwiperSlide>
                        </Swiper>
                    </div>
                </div>

                <!-- FOUNDATIONS SECTION -->
                <div class="bg-[#0A2C5C] rounded-[3rem] shadow-2xl shadow-blue-900/20 border border-blue-900/50 p-8 md:p-16 relative overflow-hidden group">
                    <div class="absolute top-0 right-0 w-96 h-96 bg-blue-400/10 rounded-full -mr-48 -mt-48 blur-3xl transition-transform duration-1000 group-hover:scale-125"></div>
                    <div class="absolute bottom-0 left-0 w-64 h-64 bg-red-500/5 rounded-full -ml-32 -mb-32 blur-2xl"></div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center relative z-10">
                        <div class="space-y-8 text-center md:text-left">
                            <div class="inline-flex items-center gap-3 px-4 py-2 bg-white/5 border border-white/10 rounded-2xl">
                                <div class="w-2 h-2 rounded-full bg-red-500 animate-ping"></div>
                                <span class="text-[10px] font-black text-white uppercase tracking-widest">{{ __('translate.foundations') || 'FUNDACJE' }}</span>
                            </div>

                            <h2 class="text-3xl md:text-5xl font-black text-white uppercase tracking-tight leading-tight">
                                {{ __('partners.foundations_title') }}
                            </h2>

                            <div class="text-sm md:text-base font-bold text-blue-100 uppercase tracking-widest leading-relaxed">
                                {{ __('partners.foundations_text') }}
                                <span class="text-[#00a1e6] font-black underline decoration-white/20 underline-offset-4">{{ __('partners.foundations_strong') }}</span>
                                {{ __('partners.foundations_text2') }}
                            </div>
                        </div>

                        <div class="flex justify-center relative">
                            <div class="absolute inset-0 bg-blue-400/10 blur-3xl rounded-full scale-110 animate-pulse"></div>
                            <img src="/images/partners/fundations.svg" class="w-full max-w-sm relative z-10 drop-shadow-2xl transition-transform duration-700 hover:scale-105" alt="fundations">
                        </div>
                    </div>

                    <!-- COUNTER -->
                    <div class="mt-20 pt-12 border-t border-white/10 text-center">
                        <div class="inline-block bg-white/5 backdrop-blur-sm border border-white/10 p-8 md:p-12 rounded-[2.5rem] relative group/counter">
                            <div class="absolute -top-6 left-1/2 -translate-x-1/2 px-4 py-1.5 bg-[#00a1e6] text-white text-[8px] font-black uppercase tracking-widest rounded-full shadow-lg">
                                {{ __('translate.current_count') }}
                            </div>

                            <p class="text-4xl md:text-6xl font-black text-white mb-4">
                                {{ props.foundationsCount }}
                            </p>
                            <p class="text-[10px] font-black text-blue-300 uppercase tracking-[0.3em]">
                                {{ __('translate.fundacji') }}
                            </p>
                        </div>
                    </div>
                </div>

                <!-- SEARCH & MAP (ZNAJDŹ FUNDACJĘ) -->
                <div class="bg-white rounded-[3rem] shadow-xl shadow-blue-900/5 border border-white p-8 md:p-12 relative overflow-hidden group">
                    <div class="absolute top-0 right-0 w-32 h-32 bg-gray-50 rounded-full -mr-16 -mt-16 group-hover:scale-110 transition-transform duration-700"></div>

                    <div class="relative z-10 text-center mb-12">
                        <div class="inline-flex items-center gap-3 px-4 py-2 bg-blue-50 rounded-2xl mb-6">
                            <div class="w-2 h-2 rounded-full bg-[#00a0e3] animate-pulse"></div>
                            <span class="text-[10px] font-black text-[#00a0e3] uppercase tracking-widest">{{ __('translate.foundations') }}</span>
                        </div>

                        <h2 class="text-3xl md:text-5xl font-black text-[#0A2C5C] uppercase tracking-tight leading-tight mb-4">
                            {{ __('translate.search_foundation') }}
                        </h2>
                        <div class="h-1 w-24 bg-gradient-to-r from-transparent via-[#00a0e3] to-transparent mx-auto"></div>
                    </div>

                    <div class="mapa rounded-[2rem] overflow-hidden relative group/map">
                        <MapBoxFundations
                            :categories="props.categories"
                            :foundations="foundations"
                            :countries="props.countries"
                        />
                    </div>
                </div>
            </div>
        </div>
    </FrontLayout>
</template>
<style>
.swiper-scrollbar-drag {
    background: #0a2c5c; /* dopasowane do Twojej palety */
}
</style>
