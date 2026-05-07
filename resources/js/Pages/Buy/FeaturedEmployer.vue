<script setup>
import { Link, usePage, router } from '@inertiajs/vue3';
import AppLayout from '@/Layouts/AppLayout.vue';
import { computed, ref, nextTick } from "vue";
import ConfettiExplosion from "vue-confetti-explosion";

const props = defineProps({
    product: { type: Object, required: false },
    check: { type: Object, required: false },
});

const page = usePage();
const firmPoints = computed(() => page?.props?.auth?.user?.firm?.points ?? 0);

const showConfetti = ref(false);
const isConfettiActive = ref(false);

const confettiColors = ['#00a0e3', '#e31e24', '#0d2a52', '#00A0E3B2', '#E31E2499'];

const handleExchange = (productId, price) => {
    router.post(route('buy.change', [productId, price]), {}, {
        preserveScroll: true,
        onStart: () => {
            isConfettiActive.value = true;
        },
        onSuccess: async () => {
            showConfetti.value = false;
            await nextTick();
            showConfetti.value = true;

            setTimeout(() => {
                showConfetti.value = false;
                isConfettiActive.value = false;
            }, 3000);
        },
        onError: () => {
            isConfettiActive.value = false;
        },
    });
};
</script>

<template>
    <AppLayout :title="__('translate.featured_employer_title')">
        <div v-if="showConfetti" class="fixed top-0 left-1/2 -translate-x-1/2 z-[100] pointer-events-none">
            <ConfettiExplosion :particleCount="100" :force="0.6" :colors="confettiColors" />
        </div>
        <div class="py-12 bg-gray-50/50 min-h-screen px-2 sm:px-0">
            <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                <!-- HEADER CARD -->
                <div class="bg-white rounded-[3rem] shadow-xl shadow-blue-900/5 border border-gray-100 p-10 mb-8">
                    <div class="flex items-center justify-between">
                        <div>
                            <h3 class="text-2xl font-black text-[#0A2C5C] uppercase tracking-tight">{{ __('translate.featured_employer_title') }}</h3>
                            <p class="text-[10px] font-bold text-gray-400 uppercase tracking-widest mt-1">{{ __('translate.forInfo') }}</p>
                        </div>
                    </div>
                </div>

                <!-- NAGŁÓWEK I OPIS -->
                <div class="bg-white rounded-[3rem] shadow-xl shadow-blue-900/5 border border-gray-100 p-10 mb-8">
                    <div class="flex flex-col md:flex-row gap-12 items-center">
                        <div class="md:w-1/2">
                            <h3 class="text-2xl font-black text-[#0A2C5C] uppercase tracking-tight mb-2">
                                {{ __('translate.featured_employer_title') }}
                            </h3>
                            <p class="text-[10px] font-black text-gray-400 uppercase tracking-widest mb-6">
                                {{ __('translate.featured_employer_subtitle') }}
                            </p>
                            <div class="h-px w-20 bg-gray-100 mb-6"></div>
                            <p class="text-sm font-bold text-[#0A2C5C] leading-relaxed uppercase">
                                {{ __('translate.featured_employer_description') }}
                            </p>
                        </div>
                        <div class="md:w-1/2 flex justify-center">
                            <div class="relative">
                                <div class="absolute inset-0 bg-blue-500/5 blur-3xl rounded-full"></div>
                                <img src="/images/icons/firm/wyrozniony_pracodawca.svg" alt="Featured Employer" class="relative max-w-sm h-auto transition-transform hover:scale-105 duration-500">
                            </div>
                        </div>
                    </div>
                </div>

                <!-- KOLUMNY INFORMACYJNE -->
                <div class="bg-white rounded-[3rem] shadow-xl shadow-blue-900/5 border border-gray-100 p-10 mb-8">
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-12">
                        <!-- Czym jest wyróżnienie -->
                        <div class="group flex flex-col items-center text-center">
                            <div class="w-16 h-16 bg-gray-50 rounded-2xl flex items-center justify-center mb-6 transition-colors group-hover:bg-blue-50">
                                <img src="/images/icons/firm/what.svg" alt="What is" class="h-10">
                            </div>
                            <h3 class="text-xs font-black text-[#0A2C5C] uppercase tracking-widest mb-4">
                                {{ __('translate.featured_employer_what_title') }}
                            </h3>
                            <p class="text-[10px] font-bold text-gray-400 uppercase tracking-widest leading-loose">
                                {{ __('translate.featured_employer_what_content') }}
                            </p>
                        </div>

                        <!-- Co zawiera usługa -->
                        <div class="group flex flex-col items-center text-center">
                            <div class="w-16 h-16 bg-gray-50 rounded-2xl flex items-center justify-center mb-6 transition-colors group-hover:bg-blue-50">
                                <img src="/images/icons/firm/have.svg" alt="have" class="h-10">
                            </div>
                            <h3 class="text-xs font-black text-[#0A2C5C] uppercase tracking-widest mb-4">
                                {{ __('translate.featured_employer_include_title') }}
                            </h3>
                            <ul class="text-[10px] font-bold text-gray-400 uppercase tracking-widest leading-loose text-left list-none space-y-1">
                                <li v-for="item in __('translate.featured_employer_include_content').split('\n')" :key="item" class="flex items-start gap-2">
                                    <div class="w-1.5 h-1.5 rounded-full bg-[#00a3e0] flex-shrink-0 mt-1.5"></div>
                                    <span>{{ item.replace('• ', '').replace('•', '') }}</span>
                                </li>
                            </ul>
                        </div>

                        <!-- Jak wykorzystać -->
                        <div class="group flex flex-col items-center text-center">
                            <div class="w-16 h-16 bg-gray-50 rounded-2xl flex items-center justify-center mb-6 transition-colors group-hover:bg-blue-50">
                                <img src="/images/icons/firm/use.svg" alt="Use" class="h-10">
                            </div>
                            <h3 class="text-xs font-black text-[#0A2C5C] uppercase tracking-widest mb-4">
                                {{ __('translate.featured_employer_use_title') }}
                            </h3>
                            <ul class="text-[10px] font-bold text-gray-400 uppercase tracking-widest leading-loose text-left list-none space-y-1">
                                <li v-for="item in __('translate.featured_employer_use_content').split('\n')" :key="item" class="flex items-start gap-2">
                                    <div class="w-1.5 h-1.5 rounded-full bg-[#00a3e0] flex-shrink-0 mt-1.5"g></div>
                                    <span>{{ item.replace('• ', '').replace('•', '') }}</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Box akcji (Wymiana punktów) -->
                <div class="bg-[#0A2C5C] rounded-[3rem] p-12 text-center text-white mb-8 relative overflow-hidden shadow-2xl shadow-blue-900/20">
                    <div class="absolute top-0 right-0 w-64 h-64 bg-blue-400/10 rounded-full blur-3xl -mr-32 -mt-32"></div>
                    <div class="absolute bottom-0 left-0 w-64 h-64 bg-blue-400/10 rounded-full blur-3xl -ml-32 -mb-32"></div>

                    <h2 class="text-2xl font-black mb-6 uppercase tracking-tight relative z-10">
                        {{ __('translate.featured_employer_action_title') }}
                    </h2>

                    <div class="flex flex-wrap justify-center gap-8 mb-10 relative z-10">
                        <div class="bg-white/10 backdrop-blur-sm px-8 py-4 rounded-3xl border border-white/10">
                            <p class="text-[10px] font-black uppercase tracking-widest text-blue-200 mb-1">
                                {{ __('translate.featured_employer_own') }}
                            </p>
                            <p class="text-2xl font-black">{{ firmPoints.toLocaleString() }} <span class="text-[10px] text-blue-200">{{ __('translate.points').toUpperCase() }}</span></p>
                        </div>
                        <div class="bg-white/10 backdrop-blur-sm px-8 py-4 rounded-3xl border border-white/10">
                            <p class="text-[10px] font-black uppercase tracking-widest text-blue-200 mb-1">
                                {{ __('translate.featured_employer_price') }}
                            </p>
                            <p class="text-2xl font-black">
                                {{ props.product?.price ? parseInt(props.product.price).toLocaleString() : '8 000' }} <span class="text-[10px] text-blue-200">{{ __('translate.points').toUpperCase() }}</span>
                            </p>
                        </div>
                    </div>

                    <!-- Status aktywności -->
                    <div v-if="props.check" class="mb-10 flex flex-wrap justify-center items-center gap-4 relative z-10">
                        <div class="text-[10px] font-black uppercase tracking-widest bg-white/5 py-4 px-8 rounded-2xl border border-white/5">
                            {{ __('translate.activeFrom') }} <span class="text-blue-300 mx-2">{{ props.check.start.slice(0, 10) }}</span>
                            {{ __('translate.featured_employer_active_to') }} <span class="text-blue-300 mx-2">{{ props.check.end.slice(0, 10) }}</span>
                        </div>
                    </div>

                    <div class="max-w-md mx-auto relative z-10">
                        <button
                            v-if="firmPoints >= (props.product?.price || 8000)"
                            @click="handleExchange(props.product?.id || 9, props.product?.price || 8000)"
                            :disabled="isConfettiActive"
                            class="w-full bg-[#e31e24] hover:bg-[#c1191f] text-white text-[10px] font-black uppercase tracking-widest py-5 rounded-2xl transition-all shadow-lg shadow-red-900/20 hover:-translate-y-1 active:translate-y-0 disabled:opacity-50 disabled:cursor-not-allowed disabled:hover:translate-y-0"
                        >
                            {{ __('translate.featured_employer_button') }}
                        </button>
                        <div v-else class="text-red-400 font-bold uppercase text-xs">
                            {{ __('translate.notEnoughPoints') }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </AppLayout>
</template>
