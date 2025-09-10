<script setup>
import Pagination from '@/Components/Pagination.vue';
import FrontLayout from "@/Layouts/FrontLayout.vue";
import {usePage, Link} from '@inertiajs/vue3';

const props = defineProps({
    firms: Object
})
</script>
<template>
    <FrontLayout :title="__('translate.projects')">
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg">
                    <h3>
                    Firmy
                    </h3>
                    <div v-if="props.firms.total"
                         class="p-6 lg:p-8 bg-white dark:bg-gray-800 dark:bg-gradient-to-bl dark:from-gray-700/50 dark:via-transparent border-b border-gray-200 dark:border-gray-700">
                        <div v-for="(firm) in props.firms.data" :key="firm.id" class="mb-6 space-y-1">
                            <Link :href="route('front.firms.single',firm)"
                                  class="font-bold mb-2 text-xl text-red-500 underline">
                            {{firm.name}}
                            </Link>
                        </div>
                        <Pagination v-if="props.firms.total > 10" class="mt-10 text-center mx-auto"
                                    :links="props.firms.links" />
                    </div>
                    <div v-else class="text-center text-lg my-3">
                        {{ __('translate.notFoundArticles') }}
                    </div>
                </div>
            </div>
        </div>
    </FrontLayout>
</template>
