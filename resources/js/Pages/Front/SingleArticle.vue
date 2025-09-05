<script setup>
import FrontLayout from "@/Layouts/FrontLayout.vue";
import { Link } from '@inertiajs/vue3';

const props = defineProps({
    article: Object,
});

</script>
<template>
    <FrontLayout :title="__('translate.article')">
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg">
                    <div class="h-[200px]">
                    <img class="media-library-thumb-img" :src="article.photo.original_url" :alt="article.title">
                    </div>
                <Link :href="route('front.articles')" class="font-bold text-xl underline p-4">{{__('translate.backToList')}}</Link>
                    <h2 class="font-bold text-2xl p-4 text-center text-red-500">{{article.title}}</h2>
                    <div class="p-6 lg:p-8 bg-white dark:bg-gray-800 dark:bg-gradient-to-bl dark:from-gray-700/50 dark:via-transparent border-b border-gray-200 dark:border-gray-700">
                        <div class="mb-5">
                            <p class="mb-4">{{article.content}}</p>
                            <div v-for="section in article.sections">
                                <h5 class="font-bold mb-2 text-lg">{{section.title}}</h5>
                                <p>{{section.description}}</p>
                            </div>
                        </div>
                    <div class="flex items-center gap-6" v-if="article.user">
                    <img :src="article.user?.logo" :alt="article.user?.name">
                        <div class="flex flex-col">
                            <h2 class="font-bold">{{article.user?.name}}</h2>
                            <p>{{article.user?.description}}</p>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </FrontLayout>
</template>
