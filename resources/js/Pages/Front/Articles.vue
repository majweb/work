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

const props = defineProps({
    articles: Object,
    banners: Object,
    newest: Object,
    categories: Object,
    most3Articles: Array,
    grouped: Array,
});

</script>
<template>
    <FrontLayout :title="__('translate.articles')">
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg">
                    <swiper
                        v-if="props.banners?.length"
                        :modules="[Navigation, Pagination, Autoplay]"
                        :slides-per-view="1"
                        :space-between="30"
                        :loop="true"
                        :autoplay="{
    delay: 3000,
    disableOnInteraction: false
  }"
                        :allowTouchMove="false"
                    navigation
                    :pagination="{ clickable: true }"
                    class="h-[300px] w-full"
                    >
                    <swiper-slide v-for="slide in props.banners" :key="slide.id">
                        <a :href="slide.url" class="block w-full h-full">
                            <img
                                class="object-contain w-full h-full"
                                :alt="slide.id"
                                :src="slide.image"
                            />
                        </a>
                    </swiper-slide>
                    </swiper>
                    <Link
                        :href="route('front.articles.single', newest.id)"
                        v-if="newest"
                        class="bg-[#0A2E6D] text-white rounded-xl overflow-hidden flex flex-col md:flex-row items-center justify-between p-6 md:p-10 shadow-md group hover:cursor-pointer"
                    >
                        <!-- Tekst -->
                        <div class="md:w-1/2 space-y-3 text-center md:text-left">
                            <h3 class="text-white text-2xl md:text-3xl font-bold mb-2 relative group">
            <span class="border-b-2 border-transparent group-hover:border-white transition-all duration-300">
                {{ newest.title }}
            </span>
                            </h3>
                            <p class="text-sm uppercase tracking-wider text-gray-200">
                                Artykuł firmy<br> <span class="font-semibold">{{ newest.author }}</span>
                            </p>
                        </div>

                        <!-- Obraz -->
                        <div class="md:w-1/2 mt-6 md:mt-0 flex justify-center md:justify-end overflow-hidden">
                            <div class="bg-white p-2 rounded-md">
                                <div
                                    class="w-[280px] md:w-[400px] aspect-[4/3] bg-center bg-cover rounded-sm transform transition-transform duration-300"
                                    :style="`background-image: url(${newest.image});`"
                                ></div>
                            </div>
                        </div>
                    </Link>

                    <section v-if="categories" class="pt-12 bg-white">
                        <!-- Sekcja kategorii (Swiper) -->
                        <div class="max-w-6xl mx-auto px-4">
                            <Swiper
                                :modules="[Pagination, Autoplay]"
                                :slides-per-view="'auto'"
                                :centered-slides="true"
                            :space-between="12"
                                :loop="true"
                                :autoplay="{
    delay: 3000,
    disableOnInteraction: false
  }"
                                :pagination="{ clickable: true }"
                                class="categories-swiper h-20 flex justify-center"
                            >
                                <SwiperSlide
                                    v-for="category in categories"
                                    :key="category.value"
                                    class="!w-auto"
                                >
                                    <Link
                                        :href="route('front.groupArticles', { category: category.value })"
                                        class="hover:scale-95 uppercase bg-[#0a2c5c] text-white font-semibold px-6 py-2 rounded-md hover:bg-[#133C69] transition block whitespace-nowrap"
                                    >
                                        {{ category.name }}
                                    </Link>
                                </SwiperSlide>
                            </Swiper>
                        </div>
                    </section>
                        <!-- Sekcja najnowszych artykułów -->
                    <section v-if="most3Articles.length" class="pt-12 max-w-6xl mx-auto px-6">
                        <!-- Mobile Swiper -->
                        <div class="md:hidden" v-if="most3Articles.length">
                            <Swiper
                                :modules="[Autoplay, Scrollbar]"
                                :slidesPerView="'auto'"
                                :slides-per-view="1.4"
                                :spaceBetween="30"
                                :loop="most3Articles.length > 1"
                                :autoplay="most3Articles.length > 1 ? { delay: 3000, disableOnInteraction: false } : false"
                                :scrollbar="{
      hide: false,
    }"
                            >
                                <SwiperSlide v-for="article in most3Articles" :key="article.id">
                                    <article class="flex flex-col items-start overflow-hidden">
                                        <div class="w-full flex items-center justify-center">
                                            <div
                                                class="w-full md:w-[280px] aspect-[4/3] bg-center bg-cover"
                                                :style="`background-image: url(${article.image});`"
                                            ></div>
                                        </div>
                                        <div class="p-6">
                                            <h3 class="text-[#0a2c5c] text-lg font-bold mb-2 hover:underline">
                                                <Link :href="route('front.articles.single', article.id)">{{ article.title }}</Link>
                                            </h3>
                                            <p class="text-sm text-gray-500 mb-1">
                                                {{ moment(article.created).format('DD.MM.YYYY HH:mm') }}
                                            </p>
                                            <p class="text-sm font-medium text-[#E41E26] flex items-center gap-2">
                                                <img :src="article.avatar" :alt="article.title" class="h-5 object-contain">
                                                <span>{{ article.author }}</span>
                                            </p>
                                        </div>
                                    </article>
                                </SwiperSlide>
                            </Swiper>
                        </div>
                        <!-- Desktop Grid -->
                        <div class="hidden md:grid md:grid-cols-3 gap-10">
                            <Link
                                :href="route('front.articles.single', article.id)"
                                v-for="article in most3Articles"
                                :key="article.id"
                                class="flex flex-col items-start overflow-hidden group"
                            >
                                <div class="w-full flex items-center justify-center overflow-hidden">
                                    <div
                                        class="w-[400px] aspect-[4/3] bg-center bg-cover rounded-sm transform transition-transform duration-300 group-hover:scale-105"
                                        :style="`background-image: url(${article.image});`"
                                    ></div>
                                </div>
                                <div class="p-6">
                                    <h3 class="text-[#0a2c5c] text-lg font-bold mb-2 relative">
            <span class="border-b-2 border-transparent group-hover:border-[#0a2c5c] transition-all duration-300">
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
                    </section>

                    <div v-if="grouped.length" v-for="category in grouped" :key="category.name" class="mb-12">
                        <!-- Nazwa grupy -->
                        <Link :href="route('front.groupArticles', { category: category.value })"
                              class="mx-5 text-center hover:scale-95 uppercase bg-[#0a2c5c] text-white font-semibold py-2 rounded-md hover:bg-[#133C69] transition block whitespace-nowrap mb-6">
                            {{ category.name }}
                        </Link>

                        <!-- Mobile Swiper -->
                        <div class="md:hidden" v-if="category.articles.length">
                            <Swiper
                                :modules="[Autoplay, Scrollbar]"
                                :slidesPerView="'auto'"
                                :slides-per-view="1.4"
                                :spaceBetween="30"
                                :loop="category.articles.length > 1"
                                :autoplay="category.articles.length > 1 ? { delay: 3000, disableOnInteraction: false } : false"
                                :scrollbar="{
      hide: false,
    }"
                            >
                                <SwiperSlide v-for="article in category.articles" :key="article.id">
                                    <article class="flex flex-col items-start overflow-hidden">
                                        <div class="w-full flex items-center justify-center">
                                            <div class="w-full md:w-[280px] aspect-[4/3] bg-center bg-cover"
                                                 :style="`background-image: url(${article.image});`"></div>
                                        </div>
                                        <div class="p-6">
                                            <h3 class="text-[#0a2c5c] text-lg font-bold mb-2 hover:underline">
                                                <Link :href="route('front.articles.single', article.id)">{{ article.title }}</Link>
                                            </h3>
                                            <p class="text-sm text-gray-500 mb-1">
                                                {{ moment(article.created).format('DD.MM.YYYY HH:mm') }}
                                            </p>
                                            <p class="text-sm font-medium text-[#E41E26] flex items-center gap-2">
                                                <img :src="article.avatar" :alt="article.title" class="h-5 object-contain">
                                                <span>{{ article.author }}</span>
                                            </p>
                                        </div>
                                    </article>
                                </SwiperSlide>
                            </Swiper>
                        </div>

                        <!-- Desktop Grid -->
                        <div class="hidden md:grid md:grid-cols-3 gap-10 max-w-6xl mx-auto px-6">
                            <Link
                                :href="route('front.articles.single', article.id)"
                                v-for="article in category.articles"
                                :key="article.id"
                                class="flex flex-col items-start overflow-hidden group"
                            >
                                <div class="w-full flex items-center justify-center overflow-hidden">
                                    <div
                                        class="w-[400px] aspect-[4/3] bg-center bg-cover rounded-sm transform transition-transform duration-300 group-hover:scale-105"
                                        :style="`background-image: url(${article.image});`"
                                    ></div>
                                </div>
                                <div class="p-6">
                                    <h3 class="text-[#0a2c5c] text-lg font-bold mb-2 relative">
            <span class="border-b-2 border-transparent group-hover:border-[#0a2c5c] transition-all duration-300">
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

                    <div v-else class="text-center text-lg my-3">
                        {{__('translate.notFoundArticles')}}
                    </div>
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
