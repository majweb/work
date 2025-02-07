<script setup>
import FrontLayout from "@/Layouts/FrontLayout.vue";
import { Link, usePage } from '@inertiajs/vue3';

const props = defineProps({
    project: Object,
});

</script>
<template>
    <FrontLayout :title="__('translate.project')">
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg">
                <Link :href="route('front.projects')" class="font-bold text-xl underline p-4">{{__('translate.backToList')}}</Link>
                    <h2 class="font-bold text-2xl p-4 text-center text-red-500">{{project.category.allTranslations.title[usePage().props.language]}}</h2>
                    <p>{{project.title[usePage().props.language] }}</p>
                </div>
            </div>
        </div>
    </FrontLayout>
</template>
