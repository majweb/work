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
        return 'points';
    }

    const name = product.name?.toLowerCase() || '';

    if (name.includes('video') || name.includes('film')) return 'clapperboard';
    if (name.includes('baner') || name.includes('banner')) return 'ads';
    if (name.includes('wyróżn') || name.includes('featured')) return 'star';
    if (name.includes('artykuł') || name.includes('article')) return 'newspaper';
    if (name.includes('social') || name.includes('media')) return 'share-2';
    if (name.includes('certyfikat') || name.includes('cert') || name.includes('50/50')) return 'award';

    return 'briefcase';
};

const operations = computed(() => [
    {
        title: __("translate.cv_database_operations"),
        items: [
            {
                name: __("translate.cv_classic"),
                points: props.pointCosts.OpenAppWithPdf,
                icon: 'file-text',
                details: [
                    `<strong>${__("translate.description")}</strong>: ${__("translate.cv_classic_desc")}`,
                    `<strong>${__("translate.target")}</strong>: ${__("translate.cv_classic_target")}`,
                    `<strong>${__("translate.detail")}</strong>: ${__("translate.cv_classic_detail")}`
                ]
            },
            {
                name: __("translate.cv_audio"),
                points: props.pointCosts.OpenAppWithAudio,
                icon: 'mic',
                details: [
                    `<strong>${__("translate.description")}</strong>: ${__("translate.cv_audio_desc")}`,
                    `<strong>${__("translate.target")}</strong>: ${__("translate.cv_audio_target")}`,
                    `<strong>${__("translate.detail")}</strong>: ${__("translate.cv_audio_detail")}`
                ]
            },
            {
                name: __("translate.cv_video"),
                points: props.pointCosts.OpenAppWithVideo,
                icon: 'video',
                details: [
                    `<strong>${__("translate.description")}</strong>: ${__("translate.cv_video_desc")}`,
                    `<strong>${__("translate.target")}</strong>: ${__("translate.cv_video_target")}`,
                    `<strong>${__("translate.detail")}</strong>: ${__("translate.cv_video_detail")}`
                ]
            },
            {
                name: __("translate.add_candidate"),
                points: props.pointCosts.CreateCandidate,
                icon: 'users',
                details: [
                    `<strong>${__("translate.description")}</strong>: ${__("translate.add_candidate_desc")}`,
                    `<strong>${__("translate.target")}</strong>: ${__("translate.add_candidate_target")}`,
                    `<strong>${__("translate.detail")}</strong>: ${__("translate.add_candidate_detail")}`
                ]
            },
            {
                name: __("translate.add_external_company"),
                points: props.pointCosts.CreateExternalFirm,
                icon: 'briefcase',
                details: [
                    `<strong>${__("translate.description")}</strong>: ${__("translate.add_external_company_desc")}`,
                    `<strong>${__("translate.target")}</strong>: ${__("translate.add_external_company_target")}`,
                    `<strong>${__("translate.detail")}</strong>: ${__("translate.add_external_company_detail")}`
                ]
            },
            {
                name: __("translate.send_cv_external"),
                points: props.pointCosts.SendToExternalFirm,
                icon: 'handshake',
                details: [
                    `<strong>${__("translate.description")}</strong>: ${__("translate.send_cv_external_desc")}`,
                    `<strong>${__("translate.target")}</strong>: ${__("translate.send_cv_external_target")}`,
                    `<strong>${__("translate.detail")}</strong>: ${__("translate.send_cv_external_detail")}`
                ]
            },
            {
                name: __("translate.unlock_questions"),
                points: props.pointCosts.UnlockQuestions,
                icon: 'help-circle',
                details: [
                    `<strong>${__("translate.description")}</strong>: ${__("translate.unlock_questions_desc")}`,
                    `<strong>${__("translate.target")}</strong>: ${__("translate.unlock_questions_target")}`,
                    `<strong>${__("translate.detail")}</strong>: ${__("translate.unlock_questions_detail")}`
                ]
            },
            {
                name: __("translate.export_data"),
                points: props.pointCosts.ExportAplications,
                icon: 'file-spreadsheet',
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
                icon: 'clapperboard',
                details: [
                    `<strong>${__("translate.description")}</strong>: ${__("translate.add_video_card_desc")}`,
                    `<strong>${__("translate.target")}</strong>: ${__("translate.add_video_card_target")}`,
                    `<strong>${__("translate.detail")}</strong>: ${__("translate.add_video_card_detail")}`
                ]
            },
            {
                name: __("translate.banner"),
                points: props.pointCosts.sendReservedProject,
                icon: 'ads',
                details: [
                    `<strong>${__("translate.description")}</strong>: ${__("translate.banner_desc")}`,
                    `<strong>${__("translate.target")}</strong>: ${__("translate.banner_target")}`,
                    `<strong>${__("translate.detail")}</strong>: ${__("translate.banner_detail")}`
                ]
            },
            {
                name: __("translate.featured_employer"),
                points: 8000,
                icon: 'star',
                details: [
                    `<strong>${__("translate.description")}</strong>: ${__("translate.featured_employer_desc")}`,
                    `<strong>${__("translate.target")}</strong>: ${__("translate.featured_employer_target")}`,
                    `<strong>${__("translate.detail")}</strong>: ${__("translate.featured_employer_detail")}`
                ]
            },
            {
                name: __("translate.sponsored_article"),
                points: 6000,
                icon: 'newspaper',
                details: [
                    `<strong>${__("translate.description")}</strong>: ${__("translate.sponsored_article_desc")}`,
                    `<strong>${__("translate.target")}</strong>: ${__("translate.sponsored_article_target")}`,
                    `<strong>${__("translate.detail")}</strong>: ${__("translate.sponsored_article_detail")}`
                ]
            },
            {
                name: __("translate.social_media_promo"),
                points: 10000,
                icon: 'share-2',
                details: [
                    `<strong>${__("translate.description")}</strong>: ${__("translate.social_media_promo_desc")}`,
                    `<strong>${__("translate.target")}</strong>: ${__("translate.social_media_promo_target")}`,
                    `<strong>${__("translate.detail")}</strong>: ${__("translate.social_media_promo_detail")}`
                ]
            },
            {
                name: __("translate.cert50_50"),
                points: 2000,
                icon: 'award',
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
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ __('translate.points') }}
            </h2>
        </template>
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg">
                    <div class="p-6 lg:p-12 bg-white dark:bg-gray-800 border-b border-gray-200 dark:border-gray-700">
                        <div class="text-center mb-12">
                            <h1 class="text-4xl font-extrabold text-blue-900 dark:text-blue-400 mb-6 uppercase tracking-wider">{{ __('translate.points') }}</h1>
                            <p class="max-w-4xl mx-auto text-gray-600 dark:text-gray-400 leading-relaxed">
                                {{ __('translate.points_desc') }}
                            </p>
                        </div>

                        <div class="mt-8 mb-20">
                            <h2 class="text-3xl font-extrabold text-center text-blue-900 dark:text-blue-400 mb-12 uppercase tracking-tight">{{ __('translate.buy') }}</h2>

                            <div v-if="props.products.data.length == 0">
                                <div class="text-center py-12 bg-gray-50 dark:bg-gray-800/50 rounded-2xl border-2 border-dashed border-gray-200 dark:border-gray-700">
                                    <p class="text-gray-500 dark:text-gray-400 font-medium italic">
                                        {{ __('translate.notFoundProducts') }}
                                    </p>
                                </div>
                            </div>

                            <div v-else>
                                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 xl:grid-cols-5 gap-6">
                                    <div v-for="(product) in props.products.data" :key="product.id"
                                        class="group relative bg-white dark:bg-gray-800 border border-gray-200 dark:border-gray-700 rounded-3xl p-6 flex flex-col items-center shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all duration-300"
                                    >
                                        <!-- Product Icon/Graphic -->
                                        <div class="mb-6 p-4 bg-blue-50 dark:bg-blue-900/20 rounded-2xl group-hover:bg-blue-100 dark:group-hover:bg-blue-900/40 transition-colors">
                                            <svg v-if="getProductIcon(product.product) === 'points'" class="w-10 h-10 text-blue-600 dark:text-blue-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                            </svg>
                                            <svg v-else-if="getProductIcon(product.product) === 'clapperboard'" class="w-10 h-10 text-blue-600 dark:text-blue-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 4V2M17 4V2M3 8h18M3 12h18M3 16h18M4 4h16a2 2 0 012 2v12a2 2 0 01-2 2H4a2 2 0 01-2-2V6a2 2 0 012-2z" />
                                            </svg>
                                            <svg v-else-if="getProductIcon(product.product) === 'ads'" class="w-10 h-10 text-blue-600 dark:text-blue-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z" />
                                            </svg>
                                            <svg v-else-if="getProductIcon(product.product) === 'star'" class="w-10 h-10 text-blue-600 dark:text-blue-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976-2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.382-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" />
                                            </svg>
                                            <svg v-else-if="getProductIcon(product.product) === 'newspaper'" class="w-10 h-10 text-blue-600 dark:text-blue-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z" />
                                            </svg>
                                            <svg v-else-if="getProductIcon(product.product) === 'share-2'" class="w-10 h-10 text-blue-600 dark:text-blue-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.684 13.342C8.886 12.938 9 12.482 9 12c0-.482-.114-.938-.316-1.342m0 2.684a3 3 0 110-2.684m0 2.684l6.632 3.316m-6.632-6l6.632-3.316m0 0a3 3 0 105.367-2.684 3 3 0 00-5.367 2.684zm0 9.316a3 3 0 105.368 2.684 3 3 0 00-5.368-2.684z" />
                                            </svg>
                                            <svg v-else-if="getProductIcon(product.product) === 'award'" class="w-10 h-10 text-blue-600 dark:text-blue-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138z" />
                                            </svg>
                                            <svg v-else class="w-10 h-10 text-blue-600 dark:text-blue-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                            </svg>
                                        </div>

                                        <h5 class="mb-1 text-lg font-bold text-gray-900 dark:text-white text-center leading-tight">
                                            {{ product.product.name }}
                                        </h5>

                                        <div class="flex items-baseline gap-1 mb-2">
                                            <span class="text-2xl font-black text-blue-600 dark:text-blue-400">{{ product.product.price }}</span>
                                            <span class="text-xs font-bold text-gray-500 uppercase tracking-wider">{{ __('translate.pkt') }}</span>
                                        </div>

                                        <!-- Dates under points -->
                                        <div class="flex flex-col gap-1.5 items-center mb-4">
                                            <div v-if="product.start" class="flex items-center gap-1.5 px-2 py-0.5 bg-green-50 dark:bg-green-900/30 rounded-lg text-green-600 dark:text-green-400 border border-green-100 dark:border-green-800/30">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                                </svg>
                                                <span class="text-[9px] font-bold uppercase tracking-tighter">{{ product.start }}</span>
                                            </div>
                                            <div v-if="product.end" class="flex items-center gap-1.5 px-2 py-0.5 bg-red-50 dark:bg-red-900/30 rounded-lg text-red-600 dark:text-red-400 border border-red-100 dark:border-red-800/30">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                                </svg>
                                                <span class="text-[9px] font-bold uppercase tracking-tighter">{{ product.end }}</span>
                                            </div>
                                        </div>

                                        <div class="mt-auto w-full pt-4 border-t border-gray-100 dark:border-gray-700/50">
                                            <div v-if="product.qty" class="flex flex-col items-center">
                                                <span class="text-xs font-semibold text-gray-500 dark:text-gray-400 mb-3">
                                                    {{ __('translate.quantity') }}: <span class="text-gray-900 dark:text-white">{{ product.qty }}</span>
                                                </span>
                                                <Link
                                                    :href="route('articles.create')"
                                                    class="w-full inline-flex justify-center items-center px-4 py-2.5 bg-blue-600 hover:bg-blue-700 text-white rounded-xl font-bold text-xs uppercase tracking-widest transition-all shadow-md shadow-blue-200 dark:shadow-none"
                                                >
                                                    {{ __('translate.create') }}
                                                </Link>
                                            </div>
                                            <div v-else class="text-center">
                                                <span class="text-xs text-gray-400 italic">{{ __('translate.service') }}</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <Pagination v-if="products.meta.total > 10" class="mt-12" :links="products.meta.links"/>
                            </div>
                        </div>

                        <div v-for="(section, sIndex) in operations" :key="sIndex" class="mb-16">
                            <h2 class="text-2xl font-bold text-center text-blue-900 dark:text-blue-400 mb-10">{{ section.title }}</h2>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div v-for="(op, index) in section.items" :key="index">
                                    <Disclosure v-slot="{ open }">
                                        <div class="border border-gray-200 dark:border-gray-700 rounded-xl overflow-hidden shadow-sm hover:shadow-md transition-shadow">
                                            <DisclosureButton
                                                class="w-full flex justify-between items-center p-5 bg-white dark:bg-gray-800 hover:bg-gray-50 dark:hover:bg-gray-700/50 transition-colors"
                                            >
                                                <div class="flex items-center gap-4 text-left">
                                                    <div class="p-2 bg-blue-50 dark:bg-blue-900/30 rounded-lg shrink-0">
                                                        <svg v-if="op.icon === 'file-text'" class="w-6 h-6 text-blue-600 dark:text-blue-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" /></svg>
                                                        <svg v-else-if="op.icon === 'mic'" class="w-6 h-6 text-blue-600 dark:text-blue-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11a7 7 0 01-7 7m0 0a7 7 0 01-7-7m7 7v4m0 0H8m4 0h4m-4-8a3 3 0 01-3-3V5a3 3 0 116 0v6a3 3 0 01-3 3z" /></svg>
                                                        <svg v-else-if="op.icon === 'video'" class="w-6 h-6 text-blue-600 dark:text-blue-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z" /></svg>
                                                        <svg v-else-if="op.icon === 'users'" class="w-6 h-6 text-blue-600 dark:text-blue-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" /></svg>
                                                        <svg v-else-if="op.icon === 'briefcase'" class="w-6 h-6 text-blue-600 dark:text-blue-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" /></svg>
                                                        <svg v-else-if="op.icon === 'handshake'" class="w-6 h-6 text-blue-600 dark:text-blue-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" /></svg>
                                                        <svg v-else-if="op.icon === 'help-circle'" class="w-6 h-6 text-blue-600 dark:text-blue-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                                                        <svg v-else-if="op.icon === 'file-spreadsheet'" class="w-6 h-6 text-blue-600 dark:text-blue-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 17v-2m3 2v-4m3 4v-6m2 10H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" /></svg>
                                                        <svg v-else-if="op.icon === 'clapperboard'" class="w-6 h-6 text-blue-600 dark:text-blue-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 4V2M17 4V2M3 8h18M3 12h18M3 16h18M4 4h16a2 2 0 012 2v12a2 2 0 01-2 2H4a2 2 0 01-2-2V6a2 2 0 012-2z" /></svg>
                                                        <svg v-else-if="op.icon === 'ads'" class="w-6 h-6 text-blue-600 dark:text-blue-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z" /></svg>
                                                        <svg v-else-if="op.icon === 'star'" class="w-6 h-6 text-blue-600 dark:text-blue-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976-2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.382-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" /></svg>
                                                        <svg v-else-if="op.icon === 'newspaper'" class="w-6 h-6 text-blue-600 dark:text-blue-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z" /></svg>
                                                        <svg v-else-if="op.icon === 'share-2'" class="w-6 h-6 text-blue-600 dark:text-blue-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.684 13.342C8.886 12.938 9 12.482 9 12c0-.482-.114-.938-.316-1.342m0 2.684a3 3 0 110-2.684m0 2.684l6.632 3.316m-6.632-6l6.632-3.316m0 0a3 3 0 105.367-2.684 3 3 0 00-5.367 2.684zm0 9.316a3 3 0 105.368 2.684 3 3 0 00-5.368-2.684z" /></svg>
                                                        <svg v-else-if="op.icon === 'award'" class="w-6 h-6 text-blue-600 dark:text-blue-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z" /></svg>
                                                    </div>
                                                    <span class="font-semibold text-blue-900 dark:text-blue-400 text-lg">
                                                        {{ op.name }}
                                                        <span class="text-blue-600 dark:text-blue-500 whitespace-nowrap">({{ op.points }} pkt)</span>
                                                    </span>
                                                </div>
                                                <svg
                                                    class="w-6 h-6 text-blue-400 shrink-0 transform transition-transform duration-300"
                                                    :class="{ 'rotate-180': open }"
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    fill="none"
                                                    viewBox="0 0 24 24"
                                                    stroke="currentColor"
                                                >
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                                                </svg>
                                            </DisclosureButton>

                                            <transition
                                                enter-active-class="transition duration-100 ease-out"
                                                enter-from-class="transform scale-95 opacity-0"
                                                enter-to-class="transform scale-100 opacity-100"
                                                leave-active-class="transition duration-75 ease-out"
                                                leave-from-class="transform scale-100 opacity-100"
                                                leave-to-class="transform scale-95 opacity-0"
                                            >
                                                <DisclosurePanel class="p-6 border-t border-gray-100 dark:border-gray-700 bg-gray-50/50 dark:bg-gray-800/50 text-gray-700 dark:text-gray-300 space-y-4">
                                                    <div v-html="detail" v-for="(detail, dIndex) in op.details" :key="dIndex" class="leading-relaxed">
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
