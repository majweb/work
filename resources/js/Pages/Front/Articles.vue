<script setup>
import FrontLayout from "@/Layouts/FrontLayout.vue";
import { Link } from '@inertiajs/vue3';
import {Navigation, Pagination, Autoplay, Scrollbar} from 'swiper/modules';
import { Swiper, SwiperSlide } from 'swiper/vue';
import 'swiper/css';
import 'swiper/css/navigation';
import 'swiper/css/pagination';
import 'swiper/css/scrollbar';
import moment from "moment";
import { ref, onMounted } from 'vue';

const isClient = ref(false);
onMounted(() => {
    isClient.value = true;
});

const props = defineProps({
    articles: Object,
    banners: Object,
    newest: Object,
    categories: Object,
    most3Articles: Array,
    grouped: Array,
    page: Object,
});

</script>
<template>
    <FrontLayout
        :title="props.page.title"
        :image="props.page.image"
        :keywords="props.page.keywords"
        :description="props.page.description"
        :url="route('front.articles')"
        type="website"
    >
        <div class="py-12 bg-gray-50/50 min-h-screen">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-12">

                <!-- BANNERS SWIPER -->
                <div v-if="isClient && props.banners?.length" class="bg-white rounded-[3rem] shadow-xl shadow-blue-900/5 border border-gray-100 overflow-hidden p-4">
                    <swiper
                        :modules="[Navigation, Pagination, Autoplay]"
                        :slides-per-view="1"
                        :space-between="30"
                        :loop="props.banners?.length > 1"
                        :autoplay="{ delay: 3000, disableOnInteraction: false }"
                        :allowTouchMove="false"
                        navigation
                        :pagination="{ clickable: true }"
                        class="h-[300px] w-full rounded-[2.5rem] overflow-hidden"
                    >
                        <swiper-slide v-for="slide in props.banners" :key="slide.id">
                            <a :href="slide.url" class="block w-full h-full">
                                <img
                                    class="object-cover w-full h-full"
                                    :alt="slide.id"
                                    :src="slide.image"
                                />
                            </a>
                        </swiper-slide>
                    </swiper>
                </div>

                <!-- LATEST ARTICLE -->
                <div v-if="newest" class="bg-white rounded-[3rem] shadow-xl shadow-blue-900/5 border border-gray-100 overflow-hidden">
                    <Link :href="route('front.articles.single', newest.id)" class="group block">
                        <div class="flex flex-col lg:flex-row">
                            <div class="lg:w-1/2 p-10 md:p-16 flex flex-col justify-center space-y-6">
                                <div class="flex items-center gap-3">
                                    <span class="px-4 py-1.5 bg-blue-50 text-[#0A2C5C] text-[10px] font-black uppercase tracking-widest rounded-xl border border-blue-100">
                                        {{ __('translate.latest_article') }}
                                    </span>
                                </div>
                                <h2 class="text-3xl md:text-5xl font-black text-[#0A2C5C] uppercase tracking-tight leading-none group-hover:text-blue-600 transition-colors">
                                    {{ newest.title }}
                                </h2>
                                <p class="text-sm font-bold text-gray-400 uppercase tracking-widest leading-relaxed">
                                    {{ __('translate.company_article') }} <br>
                                    <span class="text-[#0A2C5C] font-black">{{ newest.author }}</span>
                                </p>
                                <div class="pt-4">
                                    <span class="inline-flex items-center gap-2 text-[10px] font-black text-[#0A2C5C] uppercase tracking-widest group-hover:translate-x-2 transition-transform">
                                        {{ __('translate.check') }}
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="3"><path stroke-linecap="round" stroke-linejoin="round" d="M14 5l7 7m0 0l-7 7m7-7H3" /></svg>
                                    </span>
                                </div>
                            </div>
                            <div class="lg:w-1/2 relative overflow-hidden bg-gray-50 h-[400px] lg:h-auto">
                                <div
                                    class="absolute inset-0 bg-center bg-contain bg-no-repeat transition-transform duration-700 group-hover:scale-110"
                                    :style="`background-image: url(${newest.image});`"
                                ></div>
                            </div>
                        </div>
                    </Link>
                </div>

                <!-- CATEGORIES -->
                <div v-if="isClient && categories" class="bg-white rounded-[3rem] shadow-xl shadow-blue-900/5 border border-gray-100 p-8">
                    <div class="flex items-center gap-4 mb-8">
                        <h3 class="text-[10px] font-black text-[#0A2C5C] uppercase tracking-[0.2em]">{{ __('translate.categories') }}</h3>
                        <div class="h-px flex-1 bg-gray-100"></div>
                    </div>
                    <Swiper
                        :modules="[Pagination, Autoplay]"
                        :slides-per-view="'auto'"
                        :centered-slides="false"
                        :space-between="12"
                        :loop="false"
                        class="categories-swiper"
                    >
                        <SwiperSlide v-for="category in categories" :key="category.value" class="!w-auto">
                            <Link
                                :href="route('front.groupArticles', { category: category.value })"
                                class="inline-block px-8 py-3 bg-gray-50 border border-gray-100 text-[#0A2C5C] text-[10px] font-black uppercase tracking-widest rounded-2xl hover:bg-[#0A2C5C] hover:text-white transition-all shadow-sm whitespace-nowrap"
                            >
                                {{ category.name }}
                            </Link>
                        </SwiperSlide>
                    </Swiper>
                </div>

                <!-- MOST RECENT GRID -->
                <div v-if="most3Articles.length" class="space-y-8">
                    <div class="flex items-center gap-4">
                        <h3 class="text-[10px] font-black text-[#0A2C5C] uppercase tracking-[0.2em]">{{ __('translate.all_articles') }}</h3>
                        <div class="h-px flex-1 bg-gray-100"></div>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                        <Link
                            v-for="article in most3Articles"
                            :key="article.id"
                            :href="route('front.articles.single', article.id)"
                            class="group bg-white rounded-[2.5rem] border border-gray-100 shadow-sm hover:shadow-xl hover:shadow-blue-900/5 transition-all duration-300 hover:-translate-y-1 overflow-hidden flex flex-col"
                        >
                            <div class="relative h-64 overflow-hidden bg-gray-50">
                                <div
                                    class="absolute inset-0 bg-center bg-cover bg-no-repeat transition-transform scale-125 md:scale-110 duration-700 group-hover:scale-125"
                                    :style="`background-image: url(${article.image});`"
                                ></div>
                            </div>
                            <div class="p-8 flex-1 flex flex-col">
                                <p class="text-[10px] font-bold text-gray-400 uppercase tracking-widest mb-3">
                                    {{ moment(article.created).format('DD.MM.YYYY') }}
                                </p>
                                <h4 class="text-xl font-black text-[#0A2C5C] uppercase tracking-tight leading-tight mb-6 group-hover:text-blue-600 transition-colors line-clamp-2">
                                    {{ article.title }}
                                </h4>
                                <div class="mt-auto pt-6 border-t border-gray-50 flex items-center gap-3">
                                    <div class="w-8 h-8 rounded-xl bg-gray-50 flex items-center justify-center overflow-hidden border border-gray-100 shrink-0">
                                        <img :src="article.avatar" :alt="article.author" class="w-full h-full object-contain">
                                    </div>
                                    <span class="text-[10px] font-black text-gray-500 uppercase tracking-widest truncate">{{ article.author }}</span>
                                </div>
                            </div>
                        </Link>
                    </div>
                </div>

                <!-- GROUPED BY CATEGORY -->
                <div v-if="grouped.length" v-for="group in grouped" :key="group.name" class="space-y-8">
                    <div class="flex items-center gap-4">
                        <h3 class="text-[10px] font-black text-[#0A2C5C] uppercase tracking-[0.2em]">{{ group.name }}</h3>
                        <div class="h-px flex-1 bg-gray-100"></div>
                        <Link :href="route('front.groupArticles', { category: group.value })" class="text-[10px] font-black text-blue-500 hover:underline uppercase tracking-widest shrink-0">
                            {{ __('translate.check_all') }}
                        </Link>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                        <Link
                            v-for="article in group.articles"
                            :key="article.id"
                            :href="route('front.articles.single', article.id)"
                            class="group bg-white rounded-[2.5rem] border border-gray-100 shadow-sm hover:shadow-xl hover:shadow-blue-900/5 transition-all duration-300 hover:-translate-y-1 overflow-hidden flex flex-col"
                        >
                            <div class="relative h-64 overflow-hidden bg-gray-50">
                                <div
                                    class="absolute inset-0 bg-center bg-cover bg-no-repeat transition-transform scale-125 md:scale-110 duration-700 group-hover:scale-125"
                                    :style="`background-image: url(${article.image});`"
                                ></div>
                            </div>
                            <div class="p-8 flex-1 flex flex-col">
                                <p class="text-[10px] font-bold text-gray-400 uppercase tracking-widest mb-3">
                                    {{ moment(article.created).format('DD.MM.YYYY') }}
                                </p>
                                <h4 class="text-xl font-black text-[#0A2C5C] uppercase tracking-tight leading-tight mb-6 group-hover:text-blue-600 transition-colors line-clamp-2">
                                    {{ article.title }}
                                </h4>
                                <div class="mt-auto pt-6 border-t border-gray-50 flex items-center gap-3">
                                    <div class="w-8 h-8 rounded-xl bg-gray-50 flex items-center justify-center overflow-hidden border border-gray-100 shrink-0">
                                        <img :src="article.avatar" :alt="article.author" class="w-full h-full object-contain">
                                    </div>
                                    <span class="text-[10px] font-black text-gray-500 uppercase tracking-widest truncate">{{ article.author }}</span>
                                </div>
                            </div>
                        </Link>
                    </div>
                </div>

                <div v-if="!most3Articles.length && !grouped.length" class="bg-white rounded-[3rem] p-20 text-center shadow-xl shadow-blue-900/5 border border-gray-100">
                    <div class="w-20 h-20 bg-gray-50 rounded-full flex items-center justify-center mx-auto mb-6">
                        <svg class="w-10 h-10 text-gray-200" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z"/></svg>
                    </div>
                    <p class="text-xs font-black text-gray-400 uppercase tracking-widest">{{ __('translate.notFoundArticles') }}</p>
                </div>
            </div>
        </div>
    </FrontLayout>
</template>
<style>
.swiper-scrollbar-drag{
    background: #0a2c5c;
}
</style>
