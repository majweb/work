<script setup>
import FrontLayout from "@/Layouts/FrontLayout.vue";
const props = defineProps({
    page: Object
});
</script>
<template>
    <FrontLayout
        :title="props.page.title"
        :image="props.page.image"
        :keywords="props.page.keywords"
        :description="props.page.description"
        :url="route('front.readMore')"
        type="website"
    >
        <div class="py-24 bg-gray-50/50 min-h-screen relative overflow-hidden">
            <!-- Background Decorations -->
            <div class="absolute top-0 right-0 w-[500px] h-[500px] bg-blue-100/30 rounded-full -mr-64 -mt-64 blur-3xl animate-pulse"></div>
            <div class="absolute bottom-0 left-0 w-[400px] h-[400px] bg-red-50/20 rounded-full -ml-48 -mb-48 blur-3xl"></div>

            <div class="max-w-5xl mx-auto px-6 relative z-10">
                <!-- NAGŁÓWEK -->
                <div class="text-center mb-20">
                    <div class="inline-flex items-center gap-3 px-4 py-2 bg-white rounded-full shadow-sm border border-gray-100 mb-8 animate-bounce">
                        <div class="w-2 h-2 rounded-full bg-[#00a0e3] animate-pulse"></div>
                        <span class="text-[10px] font-black text-[#0A2C5C] uppercase tracking-[0.2em]">{{ __('translate.bestOffers') }}</span>
                    </div>

                    <h1 class="text-4xl md:text-5xl font-black text-[#0A2C5C] leading-tight uppercase tracking-tighter mb-6">
                        {{ __('info.points_title') }}
                    </h1>
                    <p class="text-sm font-bold text-gray-400 uppercase tracking-widest max-w-2xl mx-auto leading-relaxed">
                        {{ __('info.points_intro') }}
                    </p>
                </div>

                <!-- SEKCJE Z KARTAMI -->
                <div class="space-y-12">
                    <!-- Sekcja 1 -->
                    <div class="group bg-white rounded-[3rem] p-10 md:p-16 shadow-xl shadow-blue-900/5 border border-gray-100 transition-all duration-500 hover:shadow-blue-900/10 relative overflow-hidden">
                        <div class="absolute top-0 right-0 w-64 h-64 bg-blue-50/30 rounded-full -mr-32 -mt-32 blur-3xl group-hover:bg-blue-100/30 transition-colors"></div>

                        <div class="grid grid-cols-1 md:grid-cols-12 gap-12 items-center relative z-10">
                            <div class="md:col-span-4 flex justify-center">
                                <div class="w-48 h-48 bg-gray-50 rounded-[3rem] flex items-center justify-center group-hover:scale-110 transition-transform duration-500">
                                    <img src="/images/info/start.svg" class="w-32 h-32 object-contain" alt="start">
                                </div>
                            </div>
                            <div class="md:col-span-8">
                                <p class="text-lg font-bold text-[#0A2C5C] leading-relaxed uppercase tracking-wide text-[13px]">
                                    {{ __('info.points_section1') }}
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Sekcja 2 -->
                    <div class="group bg-white rounded-[3rem] p-10 md:p-16 shadow-xl shadow-blue-900/5 border border-gray-100 transition-all duration-500 hover:shadow-blue-900/10 relative overflow-hidden">
                        <div class="absolute bottom-0 left-0 w-64 h-64 bg-red-50/20 rounded-full -ml-32 -mb-32 blur-3xl group-hover:bg-red-100/20 transition-colors"></div>

                        <div class="grid grid-cols-1 md:grid-cols-12 gap-12 items-center relative z-10">
                            <div class="md:col-span-8 order-2 md:order-1">
                                <p class="text-lg font-bold text-[#0A2C5C] leading-relaxed uppercase tracking-wide text-[13px]">
                                    {{ __('info.points_section2') }}
                                </p>
                            </div>
                            <div class="md:col-span-4 order-1 md:order-2 flex justify-center">
                                <div class="w-48 h-48 bg-gray-50 rounded-[3rem] flex items-center justify-center group-hover:scale-110 transition-transform duration-500">
                                    <img src="/images/info/heart.svg" class="w-32 h-32 object-contain" alt="heart">
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Sekcja 3 -->
                    <div class="group bg-white rounded-[3rem] p-10 md:p-16 shadow-xl shadow-blue-900/5 border border-gray-100 transition-all duration-500 hover:shadow-blue-900/10 relative overflow-hidden">
                        <div class="absolute top-0 right-0 w-64 h-64 bg-blue-50/30 rounded-full -mr-32 -mt-32 blur-3xl group-hover:bg-blue-100/30 transition-colors"></div>

                        <div class="grid grid-cols-1 md:grid-cols-12 gap-12 items-center relative z-10">
                            <div class="md:col-span-4 flex justify-center">
                                <div class="w-48 h-48 bg-gray-50 rounded-[3rem] flex items-center justify-center group-hover:scale-110 transition-transform duration-500">
                                    <img src="/images/info/secure.svg" class="w-32 h-32 object-contain" alt="secure">
                                </div>
                            </div>
                            <div class="md:col-span-8">
                                <p class="text-lg font-bold text-[#0A2C5C] leading-relaxed uppercase tracking-wide text-[13px]">
                                    {{ __('info.points_section3') }}
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Sekcja 4 (Lista) -->
                    <div class="group bg-white rounded-[3rem] p-10 md:p-16 shadow-xl shadow-blue-900/5 border border-gray-100 transition-all duration-500 hover:shadow-blue-900/10 relative overflow-hidden">
                        <div class="absolute bottom-0 right-0 w-64 h-64 bg-blue-50/30 rounded-full -mr-32 -mb-32 blur-3xl"></div>

                        <div class="grid grid-cols-1 md:grid-cols-12 gap-12 items-center relative z-10">
                            <div class="md:col-span-8 order-2 md:order-1">
                                <div class="space-y-6">
                                    <p class="text-lg font-black text-[#0A2C5C] leading-relaxed uppercase tracking-tight">
                                        {{ __('info.points_section4') }}
                                    </p>

                                    <ul class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                                        <li v-for="item in ['list_cv', 'list_candidate', 'list_article', 'list_social', 'list_highlight']"
                                            :key="item"
                                            class="flex items-center gap-3 p-4 bg-gray-50 rounded-2xl border border-gray-100 group-hover:bg-white group-hover:shadow-lg transition-all duration-300">
                                            <div class="w-8 h-8 rounded-xl bg-[#00a0e3] flex items-center justify-center shrink-0">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-white" viewBox="0 0 20 20" fill="currentColor">
                                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                                                </svg>
                                            </div>
                                            <span class="text-[10px] font-black text-[#0A2C5C] uppercase tracking-widest">{{ __('info.' + item) }}</span>
                                        </li>
                                    </ul>

                                    <p class="text-sm font-bold text-gray-400 leading-relaxed uppercase tracking-widest pt-4">
                                        {{ __('info.points_section5') }}
                                    </p>
                                </div>
                            </div>
                            <div class="md:col-span-4 order-1 md:order-2 flex justify-center">
                                <div class="w-48 h-48 bg-gray-50 rounded-[3rem] flex items-center justify-center group-hover:scale-110 transition-transform duration-500">
                                    <img src="/images/info/wallet.svg" class="w-32 h-32 object-contain" alt="wallet">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </FrontLayout>
</template>
