<script setup>
import Pagination from '@/Components/Pagination.vue';
import FrontLayout from "@/Layouts/FrontLayout.vue";
import { usePage, Link } from '@inertiajs/vue3';

const props = defineProps({
    projects: Object
});

</script>
<template>
    <FrontLayout :title="__('translate.projects')">
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg">
                        <h2 class="font-bold text-2xl p-4 text-center">{{__('translate.projects')}}</h2>
                    <div v-if="props.projects.total" class="p-6 lg:p-8 bg-white dark:bg-gray-800 dark:bg-gradient-to-bl dark:from-gray-700/50 dark:via-transparent border-b border-gray-200 dark:border-gray-700">
                        <div v-for="(project) in props.projects.data" :key="project.id" class="mb-6 space-y-1">
                            <Link :href="route('front.projects.single',project)" class="font-bold mb-2 text-xl text-red-500 underline">{{project.title[usePage().props.language] }}</Link>
                            <p class="mb-4">{{ __('translate.category')}}:{{project.category.allTranslations.title[usePage().props.language]}}</p>
                            <div v-for="country in project.country">
                                {{country.allTranslations[usePage().props.language]}}
                            </div>
                        </div>
                        <Pagination v-if="props.projects.total > 10" class="mt-10 text-center mx-auto"
                                    :links="props.projects.links"/>
                    </div>
                    <div v-else class="text-center text-lg my-3">
                        {{__('translate.notFoundArticles')}}
                    </div>
                </div>
            </div>
        </div>
    </FrontLayout>
</template>
