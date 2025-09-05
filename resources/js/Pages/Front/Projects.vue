<script setup>
import Pagination from '@/Components/Pagination.vue';
import FrontLayout from "@/Layouts/FrontLayout.vue";
import {usePage, Link} from '@inertiajs/vue3';

const props = defineProps({
    projects: Object
});

</script>
<template>
    <FrontLayout :title="__('translate.projects')">
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg">
                    <h2 class="font-bold text-2xl p-4 text-center">{{ __('translate.projects') }}</h2>
                    <div v-if="props.projects.total"
                         class="p-6 lg:p-8 bg-white dark:bg-gray-800 dark:bg-gradient-to-bl dark:from-gray-700/50 dark:via-transparent border-b border-gray-200 dark:border-gray-700">
                        <div v-for="(project) in props.projects.data" :key="project.id" class="mb-6 space-y-1">
                            <div v-if="project.is_featured">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-yellow-400"
                                     fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.538 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.783.57-1.838-.197-1.538-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.293z"/>
                                </svg>
                            </div>
                            <Link :href="route('front.projects.single',project)"
                                  class="font-bold mb-2 text-xl text-red-500 underline">
                                {{ project.title[usePage().props.language] }}
                            </Link>
                            <p class="mb-4">
                                {{ __('translate.category') }}:{{ project.category.allTranslations.title[usePage().props.language] }}</p>
                            <div v-for="country in project.country">
                                {{ country.allTranslations[usePage().props.language] }}
                            </div>
                        </div>
                        <Pagination v-if="props.projects.total > 10" class="mt-10 text-center mx-auto"
                                    :links="props.projects.links"/>
                    </div>
                    <div v-else class="text-center text-lg my-3">
                        {{ __('translate.notFoundArticles') }}
                    </div>
                </div>
            </div>
        </div>
    </FrontLayout>
</template>
