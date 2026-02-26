<script setup>
import { router, Link } from '@inertiajs/vue3';
import AppLayout from '@/Layouts/AppLayout.vue';
import __ from "@/lang.js";
import Pagination from "@/Components/Pagination.vue";
import pickBy from 'lodash/pickBy';

const props = defineProps({
    cert50: Object,
    histories: Object,
    filters: Object,
    totalAmount: Number,
    points: Number,
    product: Object,
    levelNames: Object,
});


const updateFilter = () => {
    const filters = pickBy({
        from: props.filters.from,
        to: props.filters.to,
    }, value => value !== null && value !== '' && value !== undefined);

    router.get(route('buy.p50'), filters, {
        preserveState: true,
        replace: true,
    });
};
</script>

<template>
    <AppLayout :title="__('translate.p50')">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ __('translate.p50') }}
            </h2>
        </template>

        <div class="py-12 bg-gray-50/50 min-h-screen">
            <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                <div class="bg-white rounded-[3rem] shadow-xl shadow-blue-900/5 border border-gray-100 p-10 mb-8">
                    <div class="flex items-center justify-between">
                        <div>
                            <h3 class="text-2xl font-black text-[#0A2C5C] uppercase tracking-tight">{{ __('translate.p50') }}</h3>
                            <p class="text-[10px] font-bold text-gray-400 uppercase tracking-widest mt-1">{{ __('translate.forInfo') }}</p>
                        </div>
                    </div>
                </div>

                <div class="bg-white rounded-[3rem] shadow-xl shadow-blue-900/5 border border-gray-100 p-10 mb-16">
                    <!-- Header section with certificate image and description -->
                    <div class="flex flex-col md:flex-row gap-12 items-center">
                        <div class="md:w-1/2">
                            <p class="text-gray-500 font-bold leading-relaxed">
                                {{ __('translate.cert50HeaderDesc') }}
                            </p>
                        </div>
                        <div class="md:w-1/2 flex flex-col items-center">
                            <div class="relative mb-6 group">
                                <div class="absolute inset-0 bg-blue-100 rounded-full blur-3xl opacity-20 group-hover:opacity-40 transition-opacity"></div>
                                <img src="/images/icons/firm/certyfikat50_50.svg" alt="Certyfikat 50/50" class="relative max-w-sm h-auto transform transition-transform duration-500 hover:scale-105">
                            </div>

                            <div v-if="cert50 && cert50.certificate_pdf" class="text-center bg-gray-50/50 rounded-[2rem] p-8 border border-gray-100 w-full">
                                <h3 class="text-xl font-black text-[#0A2C5C] uppercase tracking-tight mb-2">{{ __('translate.congratulations') }}!</h3>
                                <p class="text-[10px] font-black text-[#00a0e3] uppercase tracking-[0.2em] mb-6">{{ __('translate.certGenerated') }}</p>
                                <div class="flex justify-center gap-8 mb-8">
                                    <div class="text-center">
                                        <p class="text-[8px] font-black text-gray-400 uppercase tracking-widest mb-1">{{ __('translate.active') }}</p>
                                        <p class="text-xs font-bold text-gray-600 uppercase">{{ cert50.start }}</p>
                                    </div>
                                    <div class="h-8 w-px bg-gray-200 mt-2"></div>
                                    <div class="text-center">
                                        <p class="text-[8px] font-black text-gray-400 uppercase tracking-widest mb-1">{{ __('translate.activeTo') }}</p>
                                        <p class="text-xs font-bold text-gray-600 uppercase">{{ cert50.end }}</p>
                                    </div>
                                </div>
                                <a :href="route('firm.download50')"
                                   class="inline-flex items-center justify-center w-full bg-[#0A2C5C] hover:bg-blue-800 text-white font-black py-4 px-12 rounded-2xl text-[10px] uppercase tracking-widest transition shadow-lg shadow-blue-900/20 hover:-translate-y-0.5">
                                    {{ __('translate.invoiceDownload') }}
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Info columns -->
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-16">
                    <div class="bg-white rounded-[2.5rem] p-10 shadow-sm border border-gray-100 flex flex-col items-center text-center transition-all duration-300 hover:shadow-xl hover:shadow-blue-900/5 hover:-translate-y-1">
                        <div class="w-20 h-20 bg-gray-50 rounded-[2rem] flex items-center justify-center mb-6">
                            <img src="/images/icons/firm/certyfikat50_50.svg" alt="50/50" class="h-10">
                        </div>
                        <h3 class="text-xs font-black text-[#0A2C5C] uppercase tracking-[0.2em] mb-4">{{ __('translate.whatIsCert50') }}</h3>
                        <p class="text-[10px] font-bold text-gray-400 leading-relaxed uppercase tracking-widest">{{ __('translate.whatIsCert50Desc') }}</p>
                    </div>

                    <div class="bg-white rounded-[2.5rem] p-10 shadow-sm border border-gray-100 flex flex-col items-center transition-all duration-300 hover:shadow-xl hover:shadow-blue-900/5 hover:-translate-y-1">
                        <div class="w-20 h-20 bg-gray-50 rounded-[2rem] flex items-center justify-center mb-6">
                            <img src="/images/icons/firm/certyfikat50_50.svg" alt="Gift" class="h-10">
                        </div>
                        <h3 class="text-xs font-black text-[#0A2C5C] uppercase tracking-[0.2em] mb-6 text-center">{{ __('translate.whatContainsCert50') }}</h3>
                        <ul class="text-[10px] font-bold text-gray-400 space-y-3 uppercase tracking-widest list-none text-left w-full" v-html="__('translate.whatContainsCert50List')"></ul>
                    </div>

                    <div class="bg-white rounded-[2.5rem] p-10 shadow-sm border border-gray-100 flex flex-col items-center transition-all duration-300 hover:shadow-xl hover:shadow-blue-900/5 hover:-translate-y-1">
                        <div class="w-20 h-20 bg-gray-50 rounded-[2rem] flex items-center justify-center mb-6">
                            <img src="/images/icons/firm/certyfikat50_50.svg" alt="Social" class="h-10">
                        </div>
                        <h3 class="text-xs font-black text-[#0A2C5C] uppercase tracking-[0.2em] mb-6 text-center">{{ __('translate.howUseCert50') }}</h3>
                        <ul class="text-[10px] font-bold text-gray-400 space-y-3 uppercase tracking-widest list-none text-left w-full" v-html="__('translate.howUseCert50List')"></ul>
                    </div>
                </div>

                <!-- Action Box -->
                <div class="bg-[#0A2C5C] rounded-[3rem] p-16 text-center text-white mb-16 relative overflow-hidden shadow-2xl shadow-blue-900/40">
                    <div class="absolute top-0 right-0 -mr-20 -mt-20 w-80 h-80 bg-blue-500 rounded-full blur-[120px] opacity-20"></div>
                    <div class="absolute bottom-0 left-0 -ml-20 -mb-20 w-80 h-80 bg-cyan-400 rounded-full blur-[120px] opacity-10"></div>

                    <h2 class="text-3xl font-black mb-10 uppercase tracking-tight relative z-10">{{ __('translate.joinFirms') }}</h2>

                    <div class="flex flex-col md:flex-row justify-center gap-12 mb-12 relative z-10">
                        <div class="text-center">
                            <p class="text-[10px] font-black text-blue-300 uppercase tracking-[0.3em] mb-2">{{ __('translate.give') }}</p>
                            <p class="text-4xl font-black tracking-tighter">{{ points?.toLocaleString() }} <span class="text-sm uppercase">{{ __('translate.pkt') }}</span></p>
                        </div>
                        <div class="hidden md:block w-px h-16 bg-white/10"></div>
                        <div class="text-center">
                            <p class="text-[10px] font-black text-blue-300 uppercase tracking-[0.3em] mb-2">{{ __('translate.p50') }}</p>
                            <p class="text-4xl font-black tracking-tighter">{{ parseInt(product?.price)?.toLocaleString() }} <span class="text-sm uppercase">{{ __('translate.pkt') }}</span></p>
                        </div>
                    </div>

                    <div class="flex flex-col sm:flex-row justify-center gap-6 relative z-10 max-w-4xl mx-auto">
                        <div class="relative group flex-1">
                            <span class="absolute -left-4 top-1/2 -translate-y-1/2 text-7xl font-black text-white/5 select-none transition-all group-hover:text-white/10">1</span>
                            <Link
                                v-if="points && product && points >= parseInt(product.price)"
                                :href="route('buy.change', [product.id, product.price])"
                                method="post"
                                preserve-scroll
                                as="button"
                                class="w-full bg-[#e31e24] hover:bg-[#c1191f] text-white font-black py-5 px-8 rounded-2xl text-[10px] uppercase tracking-widest transition shadow-xl shadow-red-900/20 hover:-translate-y-1 active:translate-y-0"
                            >
                                {{ __('translate.exchangePointsForCert') }}
                            </Link>
                            <button
                                v-else
                                disabled
                                class="w-full bg-white/10 text-white/40 font-black py-5 px-8 rounded-2xl text-[10px] uppercase tracking-widest cursor-not-allowed border border-white/10"
                            >
                                {{ __('translate.notEnoughPoints') }}
                            </button>
                        </div>

                        <div class="relative group flex-1">
                            <span class="absolute -left-4 top-1/2 -translate-y-1/2 text-7xl font-black text-white/5 select-none transition-all group-hover:text-white/10">2</span>
                            <Link
                                :href="route('firm.generate50')"
                                method="post"
                                preserve-scroll
                                as="button"
                                :disabled="!cert50"
                                class="w-full bg-[#00a0e3] hover:bg-[#008cc2] text-white font-black py-5 px-8 rounded-2xl text-[10px] uppercase tracking-widest transition shadow-xl shadow-blue-400/20 hover:-translate-y-1 active:translate-y-0 disabled:opacity-30 disabled:cursor-not-allowed disabled:hover:translate-y-0"
                            >
                                {{ __('translate.generateCertyficate') }}
                            </Link>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </AppLayout>
</template>
