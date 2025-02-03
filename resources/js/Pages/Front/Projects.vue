<script setup>
import Pagination from '@/Components/Pagination.vue';
import FrontLayout from "@/Layouts/FrontLayout.vue";
import { usePage } from '@inertiajs/vue3';
import {console} from "vuedraggable/src/util/console.js";

const props = defineProps({
    projects: Object,
    data: Object,
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
                            tutaj po jakiemu jest ogłoszenie {{props.data.title[usePage().props.language] }}
<!--                            <Link :href="route('front.projects.single',article)" class="font-bold mb-2 text-xl text-red-500 underline">{{project.title}}</Link>-->
                            <p class="mb-4">{{project.title}}</p>
                            <p class="mb-4">{{ __('translate.category')}}:{{project.category.allTranslations.title[usePage().props.language]}}</p>
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
