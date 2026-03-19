<script setup>
import FrontLayout from "@/Layouts/FrontLayout.vue";
import { Link } from "@inertiajs/vue3";

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
        :url="route('front.projects')"
        type="website"
    >
        <div class="py-12 bg-gray-50/50 min-h-screen relative overflow-hidden">
            <!-- Background Decoration -->
            <div class="absolute top-0 right-0 w-[500px] h-[500px] bg-blue-100/30 rounded-full -mr-64 -mt-64 blur-3xl"></div>
            <div class="absolute bottom-0 left-0 w-[400px] h-[400px] bg-red-50/30 rounded-full -ml-48 -mb-48 blur-3xl"></div>

            <div class="max-w-7xl mx-auto px-4 relative z-10">
                <!-- HERO SECTION -->
                <div class="bg-white rounded-[3rem] shadow-2xl shadow-blue-900/5 border border-white p-8 md:p-16 mb-12">
                    <div class="max-w-4xl mx-auto text-center">
                        <div class="inline-flex items-center gap-3 px-4 py-2 bg-blue-50 rounded-2xl mb-8">
                            <div class="w-2 h-2 rounded-full bg-[#00a0e3] animate-pulse"></div>
                            <span class="text-[10px] font-black text-[#00a0e3] uppercase tracking-widest">{{ __('info.about_us') }}</span>
                        </div>

                        <h2 class="text-4xl md:text-6xl font-black text-[#0A2C5C] uppercase tracking-tight leading-tight mb-8">
                            {{ __('info.bridge') }}
                            <span class="text-[#00a0e3] block mt-2">{{ __('info.talent') }}</span>
                        </h2>

                        <div class="flex justify-center items-center gap-8 mb-12">
                            <img src="/images/icons/about/o_nas_2.svg" :alt="__('info.first_img')" class="w-12 md:w-16 animate-bounce" />
                            <div class="h-px w-24 bg-gradient-to-r from-transparent via-gray-200 to-transparent"></div>
                            <img src="/images/icons/about/o_nas_1.svg" :alt="__('info.second_img')" class="w-12 md:w-16 animate-bounce" style="animation-delay: 0.5s" />
                        </div>

                        <p class="text-lg md:text-xl font-bold text-gray-500 uppercase tracking-widest leading-relaxed">
                            <span class="text-[#0A2C5C] font-black">WORK4YOU.GLOBAL</span> {{ __('info.about') }}
                        </p>
                    </div>
                </div>

                <!-- VALUES GRID -->
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-12">
                    <!-- MISJA -->
                    <div class="group bg-white rounded-[2.5rem] p-10 shadow-xl shadow-blue-900/5 border border-white hover:-translate-y-2 transition-all duration-500">
                        <div class="w-20 h-20 bg-blue-50 rounded-3xl flex items-center justify-center mb-8 group-hover:scale-110 transition-transform duration-500">
                            <img src="/images/icons/about/o_nas_misja.svg" :alt="__('info.missionT')" class="w-12" />
                        </div>
                        <h4 class="text-xl font-black text-[#0A2C5C] mb-4 uppercase tracking-widest">{{ __('info.missionT') }}</h4>
                        <p class="text-sm font-bold text-gray-400 leading-relaxed uppercase tracking-wider">
                            {{ __('info.mission') }}
                        </p>
                    </div>

                    <!-- WIZJA -->
                    <div class="group bg-white rounded-[2.5rem] p-10 shadow-xl shadow-blue-900/5 border border-white hover:-translate-y-2 transition-all duration-500">
                        <div class="w-20 h-20 bg-blue-50 rounded-3xl flex items-center justify-center mb-8 group-hover:scale-110 transition-transform duration-500">
                            <img src="/images/icons/about/o_nas_wizja.svg" :alt="__('info.vision')" class="w-12" />
                        </div>
                        <h4 class="text-xl font-black text-[#0A2C5C] mb-4 uppercase tracking-widest">{{ __('info.visionT') }}</h4>
                        <p class="text-sm font-bold text-gray-400 leading-relaxed uppercase tracking-wider">
                            {{ __('info.vision') }}
                        </p>
                    </div>

                    <!-- CELE -->
                    <div class="group bg-white rounded-[2.5rem] p-10 shadow-xl shadow-blue-900/5 border border-white hover:-translate-y-2 transition-all duration-500">
                        <div class="w-20 h-20 bg-blue-50 rounded-3xl flex items-center justify-center mb-8 group-hover:scale-110 transition-transform duration-500">
                            <img src="/images/icons/about/o_nas_cele.svg" :alt="__('info.targetT')" class="w-12" />
                        </div>
                        <h4 class="text-xl font-black text-[#0A2C5C] mb-4 uppercase tracking-widest">{{ __('info.targetT') }}</h4>
                        <p class="text-sm font-bold text-gray-400 leading-relaxed uppercase tracking-wider">
                            {{ __('info.target') }}
                        </p>
                    </div>
                </div>

                <!-- CHARITY SECTION -->
                <div class="bg-[#0A2C5C] rounded-[3rem] shadow-2xl shadow-blue-900/20 border border-blue-900/50 p-8 md:p-16 relative overflow-hidden group">
                    <!-- Background decoration -->
                    <div class="absolute top-0 right-0 w-96 h-96 bg-blue-400/10 rounded-full -mr-48 -mt-48 blur-3xl transition-transform duration-700 group-hover:scale-125"></div>
                    <div class="absolute bottom-0 left-0 w-64 h-64 bg-red-500/5 rounded-full -ml-32 -mb-32 blur-2xl"></div>

                    <div class="relative z-10 flex flex-col lg:flex-row items-center gap-16">
                        <!-- Image with 50% -->
                        <div class="relative">
                            <div class="absolute inset-0 bg-blue-400/20 blur-3xl rounded-full animate-pulse"></div>
                            <img
                                src="/images/icons/about/50.svg"
                                alt="50%"
                                class="w-64 md:w-80 relative z-10 drop-shadow-2xl animate-float"
                            />
                        </div>

                        <!-- Content -->
                        <div class="flex-1 text-center lg:text-left space-y-8">
                            <div class="inline-flex items-center gap-3 px-4 py-2 bg-white/5 border border-white/10 rounded-2xl">
                                <div class="w-2 h-2 rounded-full bg-red-500 animate-ping"></div>
                                <span class="text-[10px] font-black text-white uppercase tracking-widest">{{ __('translate.charitySupport') }}</span>
                            </div>

                            <h3 class="text-3xl md:text-5xl font-black text-white uppercase tracking-tight leading-tight">
                                {{ __('info.values') }}
                                <span class="text-[#00a0e3] block mt-2">{{ __('info.onTarget') }}</span>
                            </h3>

                            <p class="text-sm md:text-base font-bold text-blue-200 uppercase tracking-widest leading-relaxed max-w-2xl">
                                {{ __('translate.charityImpact') }}
                            </p>

                            <Link
                                :href="route('front.price')"
                                class="inline-flex items-center gap-4 bg-[#00a0e3] hover:bg-[#008cc7] text-white font-black px-10 py-5 rounded-2xl transition-all hover:gap-6 uppercase tracking-widest text-xs shadow-xl shadow-blue-500/20 group/btn"
                            >
                                {{ __('translate.joinMission') }}
                                <span class="text-xl leading-none group-hover/btn:translate-x-2 transition-transform">→</span>
                            </Link>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </FrontLayout>
</template>
