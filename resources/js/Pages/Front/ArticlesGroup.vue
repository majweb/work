<script setup>
import FrontLayout from "@/Layouts/FrontLayout.vue";
import { Link } from "@inertiajs/vue3";
import moment from "moment";
import { Swiper, SwiperSlide } from "swiper/vue";
import { Autoplay, Scrollbar } from "swiper/modules";
import 'swiper/css';
import 'swiper/css/scrollbar';

const props = defineProps({
    sections: Array,
    categoryName: String,
});
</script>

<template>
    <FrontLayout :title="__('translate.articles')">
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <h1 class="text-4xl font-bold text-[#0B2B4C] mb-8">{{ categoryName }}</h1>

                <div v-for="(section, i) in sections" :key="i" class="mb-12">
                    <!-- Sekcja 2-elementowa -->
                    <div v-if="section.length === 2" class="grid grid-cols-2 gap-4">
                        <Link
                            :href="route('front.articles.single', article.id)"
                            v-for="article in section"
                            :key="article.id"
                            class="group flex flex-col items-start overflow-hidden"
                        >
                            <div class="w-full flex items-center justify-center overflow-hidden">
                                <div
                                    class="w-[400px] aspect-[4/3] bg-center bg-cover transform transition-transform duration-300 group-hover:scale-105"
                                    :style="`background-image: url(${article.image});`"
                                ></div>
                            </div>
                            <div class="p-6">
                                <h3 class="text-[#0B2B4C] text-lg font-bold mb-2 relative group">
    <span class="border-b-2 border-transparent group-hover:border-[#0B2B4C] transition-all duration-300">
        {{ article.title }}
    </span>
                                </h3>
                                <p class="text-sm text-gray-500 mb-1">{{ moment(article.created).format('DD.MM.YYYY HH:mm') }}</p>
                                <p class="text-sm font-medium text-[#E41E26] flex items-center gap-2">
                                    <img :src="article.avatar" :alt="article.title" class="h-5 object-contain">
                                    <span>{{ article.author }}</span>
                                </p>
                            </div>
                        </Link>
                    </div>

                    <!-- Sekcja 3-elementowa -->
                    <div v-else class="">
                        <!-- Mobile Swiper -->
                        <div class="md:hidden">
                            <Swiper
                                :modules="[Autoplay, Scrollbar]"
                                :slides-per-view="1.3"
                                :space-between="16"
                                :loop="section.length > 1"
                                :autoplay="section.length > 1 ? { delay: 3000, disableOnInteraction: false } : false"
                                :scrollbar="{ hide: false }"
                            >
                                <SwiperSlide v-for="article in section" :key="article.id">
                                    <Link :href="route('front.articles.single', article.id)" class="flex flex-col items-start overflow-hidden">
                                        <div class="w-full flex items-center justify-center">
                                            <div
                                                class="w-full md:w-[280px] aspect-[4/3] bg-center bg-cover"
                                                :style="`background-image: url(${article.image});`"
                                            ></div>
                                        </div>
                                        <div class="p-6">
                                            <h3 class="text-[#0B2B4C] text-lg font-bold mb-2 hover:underline">
                                                {{ article.title }}
                                            </h3>
                                            <p class="text-sm text-gray-500 mb-1">{{ moment(article.created).format('DD.MM.YYYY HH:mm') }}</p>
                                            <p class="text-sm font-medium text-[#E41E26] flex items-center gap-2">
                                                <img :src="article.avatar" :alt="article.title" class="h-5 object-contain">
                                                <span>{{ article.author }}</span>
                                            </p>
                                        </div>
                                    </Link>
                                </SwiperSlide>
                            </Swiper>
                        </div>
                        <!-- Desktop Grid -->
                        <div class="hidden md:grid md:grid-cols-3 gap-4">
                            <Link
                                :href="route('front.articles.single', article.id)"
                                v-for="article in section"
                                :key="article.id"
                                class="group flex flex-col items-start overflow-hidden"
                            >
                                <div class="w-full flex items-center justify-center overflow-hidden">
                                    <div
                                        class="w-[400px] aspect-[4/3] bg-center bg-cover transform transition-transform duration-300 group-hover:scale-105"
                                        :style="`background-image: url(${article.image});`"
                                    ></div>
                                </div>
                                <div class="p-6">
                                    <h3 class="text-[#0B2B4C] text-lg font-bold mb-2 relative group">
    <span class="border-b-2 border-transparent group-hover:border-[#0B2B4C] transition-all duration-300">
        {{ article.title }}
    </span>
                                    </h3>
                                    <p class="text-sm text-gray-500 mb-1">
                                        {{ moment(article.created).format('DD.MM.YYYY HH:mm') }}
                                    </p>
                                    <p class="text-sm font-medium text-[#E41E26] flex items-center gap-2">
                                        <img :src="article.avatar" :alt="article.title" class="h-5 object-contain">
                                        <span>{{ article.author }}</span>
                                    </p>
                                </div>
                            </Link>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </FrontLayout>
</template>

<style>
.swiper-scrollbar-drag {
    background: #0B2B4C;
}
</style>
