<script setup>
import { computed } from 'vue';
import {Link} from '@inertiajs/vue3';
import AppLayout from '@/Layouts/AppLayout.vue';
import Pagination from '@/Components/Pagination.vue';
import { Disclosure, DisclosureButton, DisclosurePanel } from "@headlessui/vue"
import __ from "@/lang.js";
const props = defineProps({
    products: Object,
    filters: Object,
    pointCosts: Object
});


const getProductIcon = (product) => {
    if (product.product_type === 'Points') {
        return '/images/icons/firm/points/favorite.svg';
    }

    const name = product.name?.toLowerCase() || '';

    if (name.includes('baner') || name.includes('banner')) return '/images/icons/firm/points/baner.svg';
    if (name.includes('wyróżn') || name.includes('featured')) return '/images/icons/firm/points/favorite.svg';
    if (name.includes('artykuł') || name.includes('article')) return '/images/icons/firm/points/article.svg';
    if (name.includes('social') || name.includes('media')) return '/images/icons/firm/points/social.svg';
    if (name.includes('certyfikat') || name.includes('cert') || name.includes('50/50')) return '/images/icons/firm/points/certificate.svg';

    return '/images/icons/firm/dodanie_firmy_zewnetrznej.svg';
};

const operations = computed(() => [
    {
        title: __("translate.cv_database_operations"),
        items: [
            {
                name: __("translate.cv_classic"),
                points: props.pointCosts.OpenAppWithPdf,
                icon: '/images/icons/firm/klasyczne_cv.svg',
                details: [
                    `<strong>${__("translate.description")}</strong>: ${__("translate.cv_classic_desc")}`,
                    `<strong>${__("translate.target")}</strong>: ${__("translate.cv_classic_target")}`,
                    `<strong>${__("translate.detail")}</strong>: ${__("translate.cv_classic_detail")}`
                ]
            },
            {
                name: __("translate.cv_audio"),
                points: props.pointCosts.OpenAppWithAudio,
                icon: '/images/icons/firm/audio_cv.svg',
                details: [
                    `<strong>${__("translate.description")}</strong>: ${__("translate.cv_audio_desc")}`,
                    `<strong>${__("translate.target")}</strong>: ${__("translate.cv_audio_target")}`,
                    `<strong>${__("translate.detail")}</strong>: ${__("translate.cv_audio_detail")}`
                ]
            },
            {
                name: __("translate.cv_video"),
                points: props.pointCosts.OpenAppWithVideo,
                icon: '/images/icons/firm/video_cv.svg',
                details: [
                    `<strong>${__("translate.description")}</strong>: ${__("translate.cv_video_desc")}`,
                    `<strong>${__("translate.target")}</strong>: ${__("translate.cv_video_target")}`,
                    `<strong>${__("translate.detail")}</strong>: ${__("translate.cv_video_detail")}`
                ]
            },
            {
                name: __("translate.add_candidate"),
                points: props.pointCosts.CreateCandidate,
                icon: '/images/icons/firm/dodanie_kandydata_do_bazy.svg',
                details: [
                    `<strong>${__("translate.description")}</strong>: ${__("translate.add_candidate_desc")}`,
                    `<strong>${__("translate.target")}</strong>: ${__("translate.add_candidate_target")}`,
                    `<strong>${__("translate.detail")}</strong>: ${__("translate.add_candidate_detail")}`
                ]
            },
            {
                name: __("translate.add_external_company"),
                points: props.pointCosts.CreateExternalFirm,
                icon: '/images/icons/firm/dodanie_firmy_zewnetrznej.svg',
                details: [
                    `<strong>${__("translate.description")}</strong>: ${__("translate.add_external_company_desc")}`,
                    `<strong>${__("translate.target")}</strong>: ${__("translate.add_external_company_target")}`,
                    `<strong>${__("translate.detail")}</strong>: ${__("translate.add_external_company_detail")}`
                ]
            },
            {
                name: __("translate.send_cv_external"),
                points: props.pointCosts.SendToExternalFirm,
                icon: '/images/icons/firm/wysylka_paczki_cv.svg',
                details: [
                    `<strong>${__("translate.description")}</strong>: ${__("translate.send_cv_external_desc")}`,
                    `<strong>${__("translate.target")}</strong>: ${__("translate.send_cv_external_target")}`,
                    `<strong>${__("translate.detail")}</strong>: ${__("translate.send_cv_external_detail")}`
                ]
            },
            {
                name: __("translate.unlock_questions"),
                points: props.pointCosts.UnlockQuestions,
                icon: '/images/icons/firm/pytanie_otwarte.svg',
                details: [
                    `<strong>${__("translate.description")}</strong>: ${__("translate.unlock_questions_desc")}`,
                    `<strong>${__("translate.target")}</strong>: ${__("translate.unlock_questions_target")}`,
                    `<strong>${__("translate.detail")}</strong>: ${__("translate.unlock_questions_detail")}`
                ]
            },
            {
                name: __("translate.export_data"),
                points: props.pointCosts.ExportAplications,
                icon: '/images/icons/firm/eksport_danych.svg',
                details: [
                    `<strong>${__("translate.description")}</strong>: ${__("translate.export_data_desc")}`,
                    `<strong>${__("translate.target")}</strong>: ${__("translate.export_data_target")}`,
                    `<strong>${__("translate.detail")}</strong>: ${__("translate.export_data_detail")}`
                ]
            }
        ]
    },
    {
        title: __("translate.extra_services"),
        items: [
            {
                name: __("translate.add_video_card"),
                points: props.pointCosts.AddVideoToProfile,
                icon: '/images/icons/firm/dodanie_filmu_do_wizytowki.svg',
                details: [
                    `<strong>${__("translate.description")}</strong>: ${__("translate.add_video_card_desc")}`,
                    `<strong>${__("translate.target")}</strong>: ${__("translate.add_video_card_target")}`,
                    `<strong>${__("translate.detail")}</strong>: ${__("translate.add_video_card_detail")}`
                ]
            },
            {
                name: __("translate.banner"),
                points: props.pointCosts.sendReservedProject,
                icon: '/images/icons/firm/baner.svg',
                details: [
                    `<strong>${__("translate.description")}</strong>: ${__("translate.banner_desc")}`,
                    `<strong>${__("translate.target")}</strong>: ${__("translate.banner_target")}`,
                    `<strong>${__("translate.detail")}</strong>: ${__("translate.banner_detail")}`
                ]
            },
            {
                name: __("translate.featured_employer"),
                points: 8000,
                icon: '/images/icons/firm/wyrozniony_pracodawca.svg',
                details: [
                    `<strong>${__("translate.description")}</strong>: ${__("translate.featured_employer_desc")}`,
                    `<strong>${__("translate.target")}</strong>: ${__("translate.featured_employer_target")}`,
                    `<strong>${__("translate.detail")}</strong>: ${__("translate.featured_employer_detail")}`
                ]
            },
            {
                name: __("translate.sponsored_article"),
                points: 6000,
                icon: '/images/icons/firm/artykul.svg',
                details: [
                    `<strong>${__("translate.description")}</strong>: ${__("translate.sponsored_article_desc")}`,
                    `<strong>${__("translate.target")}</strong>: ${__("translate.sponsored_article_target")}`,
                    `<strong>${__("translate.detail")}</strong>: ${__("translate.sponsored_article_detail")}`
                ]
            },
            {
                name: __("translate.social_media_promo"),
                points: 10000,
                icon: '/images/icons/firm/promocja_w_social_mediach.svg',
                details: [
                    `<strong>${__("translate.description")}</strong>: ${__("translate.social_media_promo_desc")}`,
                    `<strong>${__("translate.target")}</strong>: ${__("translate.social_media_promo_target")}`,
                    `<strong>${__("translate.detail")}</strong>: ${__("translate.social_media_promo_detail")}`
                ]
            },
            {
                name: __("translate.cert50_50"),
                points: 2000,
                icon: '/images/icons/firm/certyfikat50_50.svg',
                details: [
                    `<strong>${__("translate.description")}</strong>: ${__("translate.cert50_50_desc")}`,
                    `<strong>${__("translate.target")}</strong>: ${__("translate.cert50_50_target")}`,
                    `<strong>${__("translate.detail")}</strong>: ${__("translate.cert50_50_detail")}`
                ]
            }
        ]
    }
]);
</script>
<template>
    <AppLayout :title="__('translate.points')">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('translate.points') }}
            </h2>
        </template>

        <div class="py-12 bg-gray-50/50 min-h-screen">
            <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                <!-- HEADER CARD -->
                <div class="bg-white rounded-[3rem] shadow-xl shadow-blue-900/5 border border-gray-100 p-10 mb-8">
                    <div class="flex items-center justify-between">
                        <div>
                            <h3 class="text-2xl font-black text-[#0A2C5C] uppercase tracking-tight">{{ __('translate.points') }}</h3>
                            <p class="text-[10px] font-bold text-gray-400 uppercase tracking-widest mt-1">{{ __('translate.points_desc') }}</p>
                        </div>
                    </div>
                </div>

                <div class="mb-20">
                    <div class="flex items-center gap-4 mb-10">
                        <h3 class="text-[10px] font-black text-[#0A2C5C] uppercase tracking-[0.2em]">{{ __('translate.buy') }}</h3>
                        <div class="h-px flex-1 bg-gray-100"></div>
                    </div>

                    <div v-if="props.products.data.length == 0" class="bg-white rounded-[3rem] p-20 text-center shadow-xl shadow-blue-900/5 border border-gray-100">
                        <div class="w-20 h-20 bg-gray-50 rounded-full flex items-center justify-center mx-auto mb-6">
                            <svg class="w-10 h-10 text-gray-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M20 12H4M12 20V4" />
                            </svg>
                        </div>
                        <p class="text-[10px] font-black text-gray-400 uppercase tracking-widest">{{ __('translate.notFoundProducts') }}</p>
                    </div>

                    <div v-else>
                        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 xl:grid-cols-5 gap-6">
                            <div v-for="(product) in props.products.data" :key="product.id"
                                class="group bg-white rounded-[2.5rem] p-8 shadow-sm border border-gray-100 flex flex-col items-center transition-all duration-300 hover:shadow-xl hover:shadow-blue-900/5 hover:-translate-y-1"
                            >
                                <!-- Product Icon/Graphic -->
                                <div class="mb-6 p-5 bg-gray-50 rounded-2xl group-hover:bg-blue-50 transition-colors">
                                    <img :src="getProductIcon(product.product)" class="w-10 h-10 object-contain" :alt="product.product.name" />
                                </div>

                                <h5 class="mb-4 text-sm font-black text-[#0A2C5C] text-center uppercase tracking-widest leading-tight min-h-[2.5rem] flex items-center justify-center">
                                    {{ product.product.name }}
                                </h5>

                                <div class="flex items-baseline gap-1 mb-6">
                                    <span class="text-3xl font-black text-[#0A2C5C] tracking-tighter">{{ product.product.price }}</span>
                                    <span class="text-[10px] font-black text-gray-400 uppercase tracking-widest">{{ __('translate.pkt') }}</span>
                                </div>

                                <!-- Dates under points -->
                                <div class="flex flex-col gap-2 items-center mb-8 w-full">
                                    <div v-if="product.start" class="flex items-center gap-2 px-3 py-1 bg-blue-50 rounded-lg text-[#00a3e0] border border-blue-100 w-full justify-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                        </svg>
                                        <span class="text-[9px] font-black uppercase tracking-widest">{{ product.start }}</span>
                                    </div>
                                    <div v-if="product.end" class="flex items-center gap-2 px-3 py-1 bg-red-50 rounded-lg text-red-600 border border-red-100 w-full justify-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                        </svg>
                                        <span class="text-[9px] font-black uppercase tracking-widest">{{ product.end }}</span>
                                    </div>
                                </div>

                                <div class="mt-auto w-full pt-6 border-t border-gray-50">
                                    <div v-if="product.qty" class="flex flex-col items-center">
                                        <span class="text-[10px] font-black text-gray-400 uppercase tracking-widest mb-4">
                                            {{ __('translate.quantity') }}: <span class="text-[#0A2C5C]">{{ product.qty }}</span>
                                        </span>
                                        <Link
                                            :href="route('articles.create')"
                                            class="w-full inline-flex justify-center items-center px-6 py-4 bg-[#00a3e0] hover:bg-blue-500 text-white rounded-2xl font-black text-[10px] uppercase tracking-widest transition-all shadow-lg shadow-blue-400/20 hover:-translate-y-1 active:translate-y-0"
                                        >
                                            {{ __('translate.create') }}
                                        </Link>
                                    </div>
                                    <div v-else class="text-center">
                                        <span class="text-[10px] font-black text-gray-400 uppercase tracking-widest italic">{{ __('translate.service') }}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <Pagination v-if="products.meta.total > 10" class="mt-12" :links="products.meta.links"/>
                    </div>
                </div>

                <div v-for="(section, sIndex) in operations" :key="sIndex" class="mb-16">
                    <div class="flex items-center gap-4 mb-10">
                        <h3 class="text-[10px] font-black text-[#0A2C5C] uppercase tracking-[0.2em]">{{ section.title }}</h3>
                        <div class="h-px flex-1 bg-gray-100"></div>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                        <div v-for="(op, index) in section.items" :key="index">
                            <Disclosure v-slot="{ open }">
                                <div class="bg-white rounded-[2.5rem] overflow-hidden shadow-sm border border-gray-100 hover:shadow-xl hover:shadow-blue-900/5 transition-all duration-300">
                                    <DisclosureButton
                                        class="w-full flex justify-between items-center p-8 bg-white hover:bg-gray-50 transition-colors"
                                    >
                                        <div class="flex items-center gap-6 text-left">
                                            <div class="w-12 h-12 bg-gray-50 rounded-2xl flex items-center justify-center shrink-0">
                                                <img :src="op.icon" class="w-6 h-6 object-contain" :alt="op.name" />
                                            </div>
                                            <div class="flex flex-col">
                                                <span class="text-xs font-black text-[#0A2C5C] uppercase tracking-widest">{{ op.name }}</span>
                                                <span class="text-[10px] font-bold text-[#00a0e3] uppercase tracking-[0.2em] mt-1">{{ op.points }} pkt</span>
                                            </div>
                                        </div>
                                        <svg
                                            class="w-5 h-5 text-gray-300 shrink-0 transform transition-transform duration-300"
                                            :class="{ 'rotate-180': open }"
                                            xmlns="http://www.w3.org/2000/svg"
                                            fill="none"
                                            viewBox="0 0 24 24"
                                            stroke="currentColor"
                                            stroke-width="3"
                                        >
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                                        </svg>
                                    </DisclosureButton>

                                    <transition
                                        enter-active-class="transition duration-300 ease-out"
                                        enter-from-class="transform -translate-y-4 opacity-0"
                                        enter-to-class="transform translate-y-0 opacity-100"
                                        leave-active-class="transition duration-200 ease-in"
                                        leave-from-class="transform translate-y-0 opacity-100"
                                        leave-to-class="transform -translate-y-4 opacity-0"
                                    >
                                        <DisclosurePanel class="p-8 border-t border-gray-50 bg-gray-50/50">
                                            <div class="space-y-4">
                                                <div v-html="detail" v-for="(detail, dIndex) in op.details" :key="dIndex" class="text-[11px] font-bold text-gray-500 uppercase tracking-widest leading-relaxed">
                                                </div>
                                            </div>
                                        </DisclosurePanel>
                                    </transition>
                                </div>
                            </Disclosure>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </AppLayout>
</template>
<style scoped>
.fade-enter-active,
.fade-leave-active {
    transition: opacity 0.2s ease;
}
.fade-enter-from,
.fade-leave-to {
    opacity: 0;
}
</style>
