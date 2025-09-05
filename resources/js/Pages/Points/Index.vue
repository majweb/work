<script setup>
import {Link} from '@inertiajs/vue3';
import AppLayout from '@/Layouts/AppLayout.vue';
import Pagination from '@/Components/Pagination.vue';
import { Disclosure, DisclosureButton, DisclosurePanel } from "@headlessui/vue"
import __ from "@/lang.js";
const props = defineProps({
    products: Object,
    filters: Object
});


const operations = [
    {
        name: __("translate.cv_classic"),
        points: 50,
        details: [
            `<strong>${__("translate.description")}</strong>: ${__("translate.cv_classic_desc")}`,
            `<strong>${__("translate.target")}</strong>: ${__("translate.cv_classic_target")}`,
            `<strong>${__("translate.detail")}</strong>: ${__("translate.cv_classic_detail")}`
        ]
    },
    {
        name: __("translate.cv_audio"),
        points: 70,
        details: [
            `<strong>${__("translate.description")}</strong>: ${__("translate.cv_audio_desc")}`,
            `<strong>${__("translate.target")}</strong>: ${__("translate.cv_audio_target")}`,
            `<strong>${__("translate.detail")}</strong>: ${__("translate.cv_audio_detail")}`
        ]
    },
    {
        name: __("translate.cv_video"),
        points: 100,
        details: [
            `<strong>${__("translate.description")}</strong>: ${__("translate.cv_video_desc")}`,
            `<strong>${__("translate.target")}</strong>: ${__("translate.cv_video_target")}`,
            `<strong>${__("translate.detail")}</strong>: ${__("translate.cv_video_detail")}`
        ]
    },
    {
        name: __("translate.add_candidate"),
        points: 150,
        details: [
            `<strong>${__("translate.description")}</strong>: ${__("translate.add_candidate_desc")}`,
            `<strong>${__("translate.target")}</strong>: ${__("translate.add_candidate_target")}`,
            `<strong>${__("translate.detail")}</strong>: ${__("translate.add_candidate_detail")}`
        ]
    },
    {
        name: __("translate.add_external_company"),
        points: 300,
        details: [
            `<strong>${__("translate.description")}</strong>: ${__("translate.add_external_company_desc")}`,
            `<strong>${__("translate.target")}</strong>: ${__("translate.add_external_company_target")}`,
            `<strong>${__("translate.detail")}</strong>: ${__("translate.add_external_company_detail")}`
        ]
    },
    {
        name: __("translate.send_cv_external"),
        points: 500,
        details: [
            `<strong>${__("translate.description")}</strong>: ${__("translate.send_cv_external_desc")}`,
            `<strong>${__("translate.target")}</strong>: ${__("translate.send_cv_external_target")}`,
            `<strong>${__("translate.detail")}</strong>: ${__("translate.send_cv_external_detail")}`
        ]
    },
    {
        name: __("translate.unlock_questions"),
        points: 200,
        details: [
            `<strong>${__("translate.description")}</strong>: ${__("translate.unlock_questions_desc")}`,
            `<strong>${__("translate.target")}</strong>: ${__("translate.unlock_questions_target")}`,
            `<strong>${__("translate.detail")}</strong>: ${__("translate.unlock_questions_detail")}`
        ]
    },
    {
        name: __("translate.export_data"),
        points: 100,
        details: [
            `<strong>${__("translate.description")}</strong>: ${__("translate.export_data_desc")}`,
            `<strong>${__("translate.target")}</strong>: ${__("translate.export_data_target")}`,
            `<strong>${__("translate.detail")}</strong>: ${__("translate.export_data_detail")}`
        ]
    },
    {
        name: __("translate.add_video_card"),
        points: 1000,
        details: [
            `<strong>${__("translate.description")}</strong>: ${__("translate.add_video_card_desc")}`,
            `<strong>${__("translate.target")}</strong>: ${__("translate.add_video_card_target")}`,
            `<strong>${__("translate.detail")}</strong>: ${__("translate.add_video_card_detail")}`
        ]
    },
    {
        name: __("translate.banner"),
        points: 3000,
        details: [
            `<strong>${__("translate.description")}</strong>: ${__("translate.banner_desc")}`,
            `<strong>${__("translate.target")}</strong>: ${__("translate.banner_target")}`,
            `<strong>${__("translate.detail")}</strong>: ${__("translate.banner_detail")}`
        ]
    },
    {
        name: __("translate.featured_employer"),
        points: 5000,
        details: [
            `<strong>${__("translate.description")}</strong>: ${__("translate.featured_employer_desc")}`,
            `<strong>${__("translate.target")}</strong>: ${__("translate.featured_employer_target")}`,
            `<strong>${__("translate.detail")}</strong>: ${__("translate.featured_employer_detail")}`
        ]
    },
    {
        name: __("translate.sponsored_article"),
        points: 3000,
        details: [
            `<strong>${__("translate.description")}</strong>: ${__("translate.sponsored_article_desc")}`,
            `<strong>${__("translate.target")}</strong>: ${__("translate.sponsored_article_target")}`,
            `<strong>${__("translate.detail")}</strong>: ${__("translate.sponsored_article_detail")}`
        ]
    },
    {
        name: __("translate.social_media_promo"),
        points: 7000,
        details: [
            `<strong>${__("translate.description")}</strong>: ${__("translate.social_media_promo_desc")}`,
            `<strong>${__("translate.target")}</strong>: ${__("translate.social_media_promo_target")}`,
            `<strong>${__("translate.detail")}</strong>: ${__("translate.social_media_promo_detail")}`
        ]
    },
    {
        name: __("translate.cert50_50"),
        points: 1000,
        details: [
            `<strong>${__("translate.description")}</strong>: ${__("translate.cert50_50_desc")}`,
            `<strong>${__("translate.target")}</strong>: ${__("translate.cert50_50_target")}`,
            `<strong>${__("translate.detail")}</strong>: ${__("translate.cert50_50_detail")}`
        ]
    }
];
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
                    <div class="p-6 lg:p-8 bg-white dark:bg-gray-800 dark:bg-gradient-to-bl dark:from-gray-700/50 dark:via-transparent border-b border-gray-200 dark:border-gray-700">
                        <div v-if="props.products.data.length == 0">
                            <div class="text-center py-4 px-6 whitespace-nowrap font-semibold">
                                <p>
                                    {{ __('translate.notFoundProducts') }}
                                </p>
                            </div>
                        </div>
                        <div v-else>
                            <div class="grid grid-cols-1 lg:grid-cols-5 gap-2 lg:gap-8">
                                <div v-for="(product) in props.products.data" :key="product.id" class="mb-2 border border-2 border-gray-200 rounded-md p-5 flex flex-col items-center ">
                                    <h5 class="mb-2 text-xl font-bold text-gray-900 dark:text-white text-center">
                                        <span>{{ product.product.name }}</span>
                                    </h5>
                                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">{{ product.product.price }} {{__('translate.points')}}</p>
                                    <div class="flex items-center flex-col">
                                        <p v-if="product.start" class="text-gray-700 dark:text-gray-400 text-sm flex items-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="green" stroke-width="2">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                            </svg>
                                            <span>{{ product.start }}</span>
                                        </p>
                                        <p v-if="product.end" class="text-gray-700 dark:text-gray-400 text-sm flex items-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="red" stroke-width="2">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                            </svg>
                                            <span>{{ product.end }}</span>
                                        </p>
                                    </div>
                                    <div v-if="product.qty">
                                        <div class="mb-3 text-sm text-gray-700 dark:text-gray-400 flex flex-col items-center mt-2">
                                            <span>{{__('translate.points')}}:{{ product.qty }}</span>
                                            <Link :href="route('articles.create')" class="mt-2 inline-flex items-center px-4 py-2 bg-gray-800 dark:bg-gray-200 border border-transparent rounded-md font-semibold text-xs text-white dark:text-gray-800 uppercase tracking-widest hover:bg-gray-700 dark:hover:bg-white focus:bg-gray-700 dark:focus:bg-white active:bg-gray-900 dark:active:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 transition ease-in-out duration-150">
                                                {{__('translate.create')}}
                                            </Link>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <Pagination v-if="products.meta.total > 10" class="mt-10 text-center mx-auto" :links="products.meta.links"/>
                    </div>
                </div>
                <h1 class="text-2xl font-bold my-6 text-center">{{__('translate.pointsList')}}</h1>
                <div class="grid grid-cols-2">
                    <div v-for="(op, index) in operations" :key="index" class="mb-4">
                        <Disclosure v-slot="{ open }">
                            <div class="border rounded-lg shadow-sm">
                                <DisclosureButton
                                    class="w-full flex justify-between items-center p-4 bg-gray-100 hover:bg-gray-200 transition"
                                >
        <span class="font-medium">
          {{ op.name }}
          <span class="text-sm text-gray-500">({{ op.points }} pkt)</span>
        </span>
                                    <!-- ikona strzałki -->
                                    <svg
                                        class="w-5 h-5 transform transition-transform duration-300"
                                        :class="{ 'rotate-180': open }"
                                        xmlns="http://www.w3.org/2000/svg"
                                        fill="none"
                                        viewBox="0 0 24 24"
                                        stroke="currentColor"
                                    >
                                        <path
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            stroke-width="2"
                                            d="M19 9l-7 7-7-7"
                                        />
                                    </svg>
                                </DisclosureButton>

                                <!-- animowany panel -->
                                <transition
                                    enter-active-class="transition duration-100 ease-out"
                                    enter-from-class="transform scale-95 opacity-0"
                                    enter-to-class="transform scale-100 opacity-100"
                                    leave-active-class="transition duration-75 ease-out"
                                    leave-from-class="transform scale-100 opacity-100"
                                    leave-to-class="transform scale-95 opacity-0"
                                >
                                    <DisclosurePanel
                                        class="p-4 border-t text-sm text-gray-700 space-y-2"
                                        enter="transition duration-300 ease-out"
                                        enter-from="transform scale-y-95 opacity-0"
                                        enter-to="transform scale-y-100 opacity-100"
                                        leave="transition duration-200 ease-in"
                                        leave-from="transform scale-y-100 opacity-100"
                                        leave-to="transform scale-y-95 opacity-0"
                                    >
                                        <div v-html="detail" v-for="(detail, dIndex) in op.details" :key="dIndex">
                                        </div>
                                    </DisclosurePanel>
                                </transition>

                            </div>
                        </Disclosure>
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
