<script setup>
import {computed, onMounted} from "vue";
import {Link, usePage, router} from '@inertiajs/vue3';
import AppLayout from '@/Layouts/AppLayout.vue';
import ConfettiExplosion from "vue-confetti-explosion";

let points  = computed(()=>{
    return usePage().props.auth.user?.firm?.points;
});
onMounted(() => {
    router.reload({ only: ['auth'] });
});

</script>
<template>
    <AppLayout :title="__('translate.buy')">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ __('translate.congratulations') }}
            </h2>
        </template>

        <div class="py-12 min-h-[80vh] flex items-center justify-center bg-gray-50/50">
            <div class="max-w-3xl w-full mx-auto px-4 sm:px-6 lg:px-8">
                <div class="relative bg-white dark:bg-gray-800 overflow-hidden shadow-2xl rounded-[3rem] border border-gray-100">
                    <!-- Confetti Layer -->
                    <div class="absolute inset-0 pointer-events-none flex justify-center">
                        <ConfettiExplosion
                            v-if="points !== undefined"
                            :particleCount="200"
                            :force="0.5"
                            :stageHeight="800"
                            :stageWidth="1200"
                            :colors="['#00aaff', '#0b2a55', '#e31e24', '#ffffff']"
                        />
                    </div>

                    <section class="relative z-10 py-12 px-6 text-center">
                        <!-- Ikona sukcesu -->
                        <div class="mb-8 flex justify-center">
                            <div class="relative">
                                <div class="absolute inset-0 bg-[#00aaff] blur-3xl opacity-20 rounded-full"></div>
                                <div class="relative bg-gradient-to-br from-[#00aaff] to-[#0b2a55] p-6 rounded-full shadow-xl">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-16 w-16 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7" />
                                    </svg>
                                </div>
                            </div>
                        </div>

                        <!-- Treść główna -->
                        <div class="space-y-4 max-w-lg mx-auto">
                            <h1 class="text-4xl font-black text-[#0b2a55] dark:text-white uppercase tracking-tight">
                                {{ __('translate.orderPay') }}
                            </h1>
                            <p class="text-lg text-gray-500 dark:text-gray-400 font-medium">
                                {{ __('translate.congratulations') }}! {{ __('translate.transactionSuccess') }}
                            </p>
                        </div>

                        <!-- Box z punktami -->
                        <div class="mt-10 mb-12">
                            <div class="inline-flex flex-col items-center bg-gray-50 dark:bg-gray-900/50 px-12 py-8 rounded-[2rem] border border-gray-100 dark:border-gray-700 shadow-inner">
                                <span class="text-xs font-black text-gray-400 uppercase tracking-[0.2em] mb-2">{{ __('translate.give') }}</span>
                                <div class="flex items-baseline gap-2">
                                    <span class="text-6xl font-black text-[#00aaff] tracking-tighter">{{ points?.toLocaleString() || '0' }}</span>
                                    <span class="text-xl font-black text-[#0b2a55] dark:text-white uppercase">{{ __('translate.pkt') }}</span>
                                </div>
                            </div>
                        </div>

                        <!-- Przyciski akcji -->
                        <div class="flex flex-col sm:flex-row items-center justify-center gap-4 px-6">
                            <Link :href="route('dashboard')"
                                  class="group relative flex w-full sm:w-auto items-center justify-center gap-3 overflow-hidden rounded-2xl bg-[#0b2a55] px-8 py-4 text-center text-sm font-black uppercase tracking-widest text-white shadow-xl transition-all hover:bg-[#0d3874] active:scale-[0.98]">
                                <span class="relative z-10">{{ __('translate.dashboard') }}</span>
                                <svg xmlns="http://www.w3.org/2000/svg" class="relative z-10 h-5 w-5 transition-transform group-hover:translate-x-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                                </svg>
                                <div class="absolute inset-0 -translate-x-full bg-gradient-to-r from-transparent via-white/10 to-transparent transition-transform duration-500 group-hover:translate-x-full"></div>
                            </Link>

                            <Link :href="route('invoices.index')"
                                  class="flex w-full sm:w-auto items-center justify-center gap-2 rounded-2xl border-2 border-gray-100 bg-white px-8 py-4 text-center text-sm font-black uppercase tracking-widest text-gray-500 transition-all hover:border-[#00aaff] hover:text-[#00aaff] dark:bg-gray-800 dark:border-gray-700">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                                </svg>
                                {{ __('translate.Invoices') }}
                            </Link>
                        </div>

                        <!-- Stopka informacyjna -->
                        <p class="mt-12 text-[10px] font-bold text-gray-400 uppercase tracking-widest">
                            {{ __('translate.thanksForTrust') }} • WORK4YOU.GLOBAL
                        </p>
                    </section>
                </div>
            </div>
        </div>
    </AppLayout>
</template>
