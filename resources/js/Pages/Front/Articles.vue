<script setup>
import Pagination from '@/Components/Pagination.vue';
import FrontLayout from "@/Layouts/FrontLayout.vue";
import { Link } from '@inertiajs/vue3';

const props = defineProps({
    articles: Object,
});

</script>
<template>
    <FrontLayout :title="__('auth.articles')">
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg">
                        <h2 class="font-bold text-2xl p-4 text-center">{{__('auth.articles')}}</h2>
                    <div v-if="props.articles.total" class="p-6 lg:p-8 bg-white dark:bg-gray-800 dark:bg-gradient-to-bl dark:from-gray-700/50 dark:via-transparent border-b border-gray-200 dark:border-gray-700">
                        <div v-for="(article) in props.articles.data" :key="article.id" class="mb-6 space-y-1">
                            <Link :href="route('front.articles.single',article)" class="font-bold mb-2 text-xl text-red-500 underline">{{article.title}}</Link>
                            <p class="mb-4">{{article.content}}</p>
                            <div v-for="section in article.sections">
                                <h5 class="font-bold mb-2 text-lg">{{section.title}}</h5>
                                <p>{{section.description}}</p>
                            </div>

                        </div>
                        <Pagination v-if="props.articles.total > 10" class="mt-10 text-center mx-auto"
                                    :links="props.articles.links"/>
                    </div>
                    <div v-else class="text-center text-lg my-3">
                        {{__('auth.notFoundArticles')}}
                    </div>
                </div>
            </div>
        </div>
    </FrontLayout>
</template>
