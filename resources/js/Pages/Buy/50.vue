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

        <div class="py-12">
            <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                <!-- Header section with certificate image and description -->
                <div class="flex flex-col md:flex-row gap-8 items-center mb-16">
                    <div class="md:w-1/2">
                        <div class="flex items-center gap-4 mb-4">
                            <h1 class="text-3xl font-bold text-[#143d8c] uppercase">{{ __('translate.p50') }}</h1>
                        </div>
                        <p class="text-xl font-semibold text-[#143d8c] mb-6">{{ __('translate.forInfo') }}</p>
                        <p class="text-gray-700 dark:text-gray-300 leading-relaxed">
                            {{ __('translate.cert50HeaderDesc') }}
                        </p>
                    </div>
                    <div class="md:w-1/2 flex flex-col items-center">
                        <img src="/images/icons/firm/certyfikat50_50.svg" alt="Certyfikat 50/50" class="max-w-sm h-auto mb-4">
                        <div v-if="cert50 && cert50.certificate_pdf" class="text-center">
                            <h3 class="text-2xl font-bold text-[#143d8c] uppercase mb-2">{{ __('translate.congratulations') }}!</h3>
                            <p class="text-lg font-bold text-[#143d8c] mb-4">{{ __('translate.certGenerated') }}</p>
                            <div class="mb-4">
                                <p class="text-sm font-bold text-[#143d8c] uppercase tracking-wider">{{ __('translate.active') }}</p>
                                <p class="text-gray-600 font-semibold">{{ cert50.start }}</p>
                                <p class="text-gray-600 font-semibold">{{ cert50.end }}</p>
                            </div>
                            <a :href="route('firm.download50')"
                                  class="inline-block bg-[#143d8c] hover:bg-[#0f2d66] text-white font-bold py-2 px-12 transition shadow-lg uppercase">
                                {{ __('translate.invoiceDownload') }}
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Info columns -->
                <div class="grid grid-cols-1 md:grid-cols-3 gap-12 mb-16">
                    <div class="flex flex-col items-center text-center">
                        <img src="/images/icons/firm/certyfikat50_50.svg" alt="50/50" class="h-16 mb-4">
                        <h3 class="text-xl font-bold text-[#00a3e0] mb-4">{{ __('translate.whatIsCert50') }}</h3>
                        <p class="text-gray-600 dark:text-gray-400">{{ __('translate.whatIsCert50Desc') }}</p>
                    </div>
                    <div class="flex flex-col items-center text-center">
                        <img src="/images/icons/firm/certyfikat50_50.svg" alt="Gift" class="h-16 mb-4">
                        <h3 class="text-xl font-bold text-[#00a3e0] mb-4">{{ __('translate.whatContainsCert50') }}</h3>
                        <ul class="text-gray-600 dark:text-gray-400 list-disc list-inside text-left" v-html="__('translate.whatContainsCert50List')"></ul>
                    </div>
                    <div class="flex flex-col items-center text-center">
                        <img src="/images/icons/firm/certyfikat50_50.svg" alt="Social" class="h-16 mb-4">
                        <h3 class="text-xl font-bold text-[#00a3e0] mb-4">{{ __('translate.howUseCert50') }}</h3>
                        <ul class="text-gray-600 dark:text-gray-400 list-disc list-inside text-left" v-html="__('translate.howUseCert50List')"></ul>
                    </div>
                </div>

                <!-- Action Box -->
                <div class="bg-[#143d8c] rounded-3xl p-8 text-center text-white mb-16 relative overflow-hidden">
                    <h2 class="text-4xl font-bold mb-4">{{ __('translate.joinFirms') }}</h2>
                    <p class="text-2xl font-semibold mb-2">
                        {{ __('translate.give').toUpperCase() }}: {{ points?.toLocaleString() }} {{ __('translate.pkt').toUpperCase() }}
                    </p>
                    <p class="text-2xl font-bold mb-8">
                        {{ __('translate.p50').toUpperCase() }}: {{ parseInt(product?.price)?.toLocaleString() }} {{ __('translate.pkt').toUpperCase() }}
                    </p>

                    <div class="flex flex-col sm:flex-row justify-center gap-4 relative z-10">
                        <div class="relative group">
                            <span class="absolute -left-8 top-1/2 -translate-y-1/2 text-5xl font-bold text-white/20 group-hover:text-white/40 transition">1</span>
                            <Link
                                v-if="points && product && points >= parseInt(product.price)"
                                :href="route('buy.change', [product.id, product.price])"
                                method="post"
                                preserve-scroll
                                as="button"
                                class="bg-[#e31e24] hover:bg-[#c1191f] text-white font-bold py-4 px-8 rounded-xl text-xl transition shadow-lg uppercase"
                            >
                                {{ __('translate.exchangePointsForCert') }}
                            </Link>
                            <button
                                v-else
                                disabled
                                class="bg-gray-400 text-white font-bold py-4 px-8 rounded-xl text-xl uppercase cursor-not-allowed shadow-lg"
                            >
                                {{ __('translate.notEnoughPoints') }}
                            </button>
                        </div>

                        <div class="relative group">
                            <span class="absolute -left-8 top-1/2 -translate-y-1/2 text-5xl font-bold text-white/20 group-hover:text-white/40 transition">2</span>
                            <Link
                                :href="route('firm.generate50')"
                                method="post"
                                preserve-scroll
                                as="button"
                                :disabled="!cert50"
                                class="bg-[#00a3e0] hover:bg-[#008cc2] text-white font-bold py-4 px-8 rounded-xl text-xl transition shadow-lg uppercase disabled:bg-gray-400 disabled:cursor-not-allowed"
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
