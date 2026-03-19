<script setup>
import FrontLayout from "@/Layouts/FrontLayout.vue";
import { Link } from "@inertiajs/vue3";
import moment from "moment";
import { ref, onMounted } from 'vue';

const isClient = ref(false);
onMounted(() => {
    isClient.value = true;
});

const props = defineProps({
    sections: Array,
    categoryName: String,
    page: Object
});
</script>

<template>
        <FrontLayout
            :title="categoryName"
            :image="props.page.image"
            :keywords="props.page.keywords"
            :description="props.page.description"
            :url="route('front.articles.group', categoryName)"
            type="website"
        >
        <div class="py-12 bg-gray-50/50 min-h-screen">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <!-- Header -->
                <div class="bg-[#0A2C5C] rounded-[3rem] p-8 md:p-12 mb-12 shadow-2xl shadow-blue-900/20 relative overflow-hidden">
                    <div class="absolute top-0 right-0 w-64 h-64 bg-blue-400/10 rounded-full -mr-32 -mt-32 blur-3xl"></div>
                    <div class="absolute bottom-0 left-0 w-48 h-48 bg-indigo-500/10 rounded-full -ml-24 -mb-24 blur-2xl"></div>

                    <div class="relative z-10">
                        <div class="flex items-center gap-4 mb-4">
                            <span class="px-4 py-1.5 bg-white/10 backdrop-blur-md border border-white/20 rounded-full text-[10px] font-black text-white uppercase tracking-[0.2em]">
                                {{ __('translate.categories') }}
                            </span>
                            <div class="h-px w-12 bg-white/20"></div>
                        </div>
                        <h1 class="text-4xl md:text-5xl font-black text-white uppercase tracking-tight mb-4">
                            {{ categoryName }}
                        </h1>
                    </div>
                </div>

                <div v-if="isClient">
                    <div v-for="(section, i) in sections" :key="i" class="mb-16">
                    <!-- Sekcja 2-elementowa -->
                    <div v-if="section.length === 2" class="grid grid-cols-1 md:grid-cols-2 gap-8">
                        <Link
                            v-for="article in section"
                            :key="article.id"
                            :href="route('front.articles.single', article.id)"
                            class="group bg-white rounded-[2.5rem] overflow-hidden shadow-sm hover:shadow-2xl transition-all duration-500 hover:-translate-y-2 border border-gray-100 flex flex-col"
                        >
                            <div class="relative overflow-hidden aspect-[16/9]">
                                <div
                                    class="absolute inset-0 bg-center bg-cover transform transition-transform duration-700 group-hover:scale-110"
                                    :style="`background-image: url(${article.image});`"
                                ></div>
                                <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>

                                <div class="absolute top-6 left-6 flex flex-col gap-2">
                                    <span class="px-4 py-1.5 bg-white/90 backdrop-blur-sm rounded-xl text-[10px] font-black text-[#0A2C5C] uppercase tracking-widest shadow-sm">
                                        ID: #{{ article.id }}
                                    </span>
                                </div>
                            </div>

                            <div class="p-8 flex flex-col flex-grow">
                                <div class="flex items-center gap-4 mb-4">
                                    <p class="text-[10px] font-black text-gray-400 uppercase tracking-widest">
                                        {{ moment(article.created_at || article.created).format('DD.MM.YYYY') }}
                                    </p>
                                    <div class="w-1 h-1 rounded-full bg-gray-300"></div>
                                    <p class="text-[10px] font-black text-blue-500 uppercase tracking-widest">
                                        {{ article.author || article.user?.name }}
                                    </p>
                                </div>

                                <h3 class="text-xl md:text-2xl font-black text-[#0A2C5C] uppercase tracking-tight leading-tight group-hover:text-blue-600 transition-colors mb-4 line-clamp-2">
                                    {{ article.title }}
                                </h3>

                                <div class="mt-auto pt-6 border-t border-gray-50 flex items-center justify-between">
                                    <div class="flex items-center gap-3">
                                        <div class="w-8 h-8 rounded-xl bg-gray-100 bg-center bg-cover border-2 border-white shadow-sm"
                                             :style="`background-image: url(${article.avatar || article.user?.profile_photo_url});`"></div >
                                        <span class="text-[10px] font-black text-[#0A2C5C] uppercase tracking-widest">{{ article.author || article.user?.name }}</span>
                                    </div>
                                    <div class="w-10 h-10 rounded-2xl bg-gray-50 flex items-center justify-center group-hover:bg-[#0A2C5C] transition-all duration-300">
                                        <svg class="w-5 h-5 text-[#0A2C5C] group-hover:text-white transform transition-transform group-hover:translate-x-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </Link>
                    </div>

                    <!-- Sekcja 3-elementowa -->
                    <div v-else class="">
                        <!-- Mobile Swiper -->
                        <div class="md:hidden">
                            <Swiper
                                :modules="[Autoplay, Scrollbar]"
                                :slides-per-view="1.1"
                                :space-between="20"
                                :loop="section.length > 2"
                                :autoplay="section.length > 2 ? { delay: 3000, disableOnInteraction: false } : false"
                                :scrollbar="{ hide: false }"
                            >
                                <SwiperSlide v-for="article in section" :key="article.id">
                                    <Link
                                        :href="route('front.articles.single', article.id)"
                                        class="bg-white rounded-[2.5rem] overflow-hidden shadow-sm border border-gray-100 flex flex-col h-full mb-8"
                                    >
                                        <div class="relative aspect-[16/9]">
                                            <div
                                                class="absolute inset-0 bg-center bg-cover"
                                                :style="`background-image: url(${article.image});`"
                                            ></div>
                                        </div>
                                        <div class="p-6 flex flex-col flex-grow">
                                            <div class="flex items-center gap-3 mb-4">
                                                <p class="text-[9px] font-black text-gray-400 uppercase tracking-widest">
                                                    {{ moment(article.created_at || article.created).format('DD.MM.YYYY') }}
                                                </p>
                                            </div>
                                            <h3 class="text-lg font-black text-[#0A2C5C] uppercase tracking-tight leading-tight mb-4 line-clamp-2">
                                                {{ article.title }}
                                            </h3>
                                            <div class="mt-auto pt-4 border-t border-gray-50 flex items-center justify-between">
                                                <div class="flex items-center gap-2">
                                                    <div class="w-6 h-6 rounded-lg bg-gray-100 bg-center bg-cover"
                                                         :style="`background-image: url(${article.avatar || article.user?.profile_photo_url});`"></div >
                                                    <span class="text-[9px] font-black text-[#0A2C5C] uppercase tracking-widest">{{ article.author || article.user?.name }}</span>
                                                </div>
                                            </div>
                                        </div>
                                    </Link>
                                </SwiperSlide>
                            </Swiper>
                        </div>

                        <!-- Desktop Grid -->
                        <div class="hidden md:grid md:grid-cols-3 gap-8">
                            <Link
                                v-for="article in section"
                                :key="article.id"
                                :href="route('front.articles.single', article.id)"
                                class="group bg-white rounded-[2.5rem] overflow-hidden shadow-sm hover:shadow-2xl transition-all duration-500 hover:-translate-y-2 border border-gray-100 flex flex-col"
                            >
                                <div class="relative aspect-[4/3] overflow-hidden">
                                    <div
                                        class="absolute inset-0 bg-center bg-cover transform transition-transform duration-700 group-hover:scale-110"
                                        :style="`background-image: url(${article.image});`"
                                    ></div>
                                    <div class="absolute inset-0 bg-gradient-to-t from-black/50 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>

                                    <div class="absolute top-5 left-5">
                                        <span class="px-3 py-1 bg-white/90 backdrop-blur-sm rounded-lg text-[9px] font-black text-[#0A2C5C] uppercase tracking-widest shadow-sm">
                                            #{{ article.id }}
                                        </span>
                                    </div>
                                </div>

                                <div class="p-6 flex flex-col flex-grow">
                                    <div class="flex items-center gap-3 mb-3">
                                        <p class="text-[9px] font-black text-gray-400 uppercase tracking-widest">
                                            {{ moment(article.created_at || article.created).format('DD.MM.YYYY') }}
                                        </p>
                                    </div>

                                    <h3 class="text-base font-black text-[#0A2C5C] uppercase tracking-tight leading-tight group-hover:text-blue-600 transition-colors mb-4 line-clamp-2">
                                        {{ article.title }}
                                    </h3>

                                    <div class="mt-auto pt-4 border-t border-gray-50 flex items-center justify-between">
                                        <div class="flex items-center gap-2">
                                            <div class="w-7 h-7 rounded-lg bg-gray-100 bg-center bg-cover border border-white shadow-sm"
                                                 :style="`background-image: url(${article.avatar || article.user?.profile_photo_url});`"></div >
                                            <span class="text-[9px] font-black text-[#0A2C5C] uppercase tracking-widest">{{ article.author || article.user?.name }}</span>
                                        </div>
                                        <div class="w-8 h-8 rounded-xl bg-gray-50 flex items-center justify-center group-hover:bg-[#0A2C5C] transition-all duration-300">
                                            <svg class="w-4 h-4 text-[#0A2C5C] group-hover:text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                            </Link>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </FrontLayout>
</template>

<style>
.swiper-scrollbar-drag {
    background: #0a2c5c;
}
</style>
