<script setup>
import {Link} from '@inertiajs/vue3';
import AppLayout from '@/Layouts/AppLayout.vue';
import Pagination from '@/Components/Pagination.vue';

const props = defineProps({
    products: Object,
    filters: Object
});


</script>
<template>
    <AppLayout :title="__('translate.points')">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ __('translate.points') }}
            </h2>
        </template>
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg">
                    <div class="p-6 lg:p-8 bg-white dark:bg-gray-800 dark:bg-gradient-to-bl dark:from-gray-700/50 dark:via-transparent border-b border-gray-200 dark:border-gray-700">
                        <div v-if="props.products.data.length == 0">
                            <div class="text-center py-4 px-6 whitespace-nowrap font-semibold">
                                <p>
                                    {{ __('translate.notFoundProducts') }}
                                </p>
                            </div>
                        </div>
                        <div v-else>
                            <div class="grid grid-cols-1 lg:grid-cols-5 gap-2 lg:gap-8">
                                <div v-for="(product) in props.products.data" :key="product.id" class="mb-2 border border-2 border-gray-200 rounded-md p-5 flex flex-col items-center ">
                                    <h5 class="mb-2 text-xl font-bold text-gray-900 dark:text-white text-center">
                                        <span>{{ product.product.name }}</span>
                                    </h5>
                                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">{{ product.product.price }} {{__('translate.points')}}</p>
                                    <div class="flex items-center flex-col">
                                        <p v-if="product.start" class="text-gray-700 dark:text-gray-400 text-sm flex items-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="green" stroke-width="2">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                            </svg>
                                            <span>{{ product.start }}</span>
                                        </p>
                                        <p v-if="product.end" class="text-gray-700 dark:text-gray-400 text-sm flex items-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="red" stroke-width="2">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                            </svg>
                                            <span>{{ product.end }}</span>
                                        </p>
                                    </div>
                                    <div v-if="product.qty">
                                        <div class="mb-3 text-sm text-gray-700 dark:text-gray-400 flex flex-col items-center mt-2">
                                            <span>{{__('translate.points')}}:{{ product.qty }}</span>
                                            <Link :href="route('articles.create')" class="mt-2 inline-flex items-center px-4 py-2 bg-gray-800 dark:bg-gray-200 border border-transparent rounded-md font-semibold text-xs text-white dark:text-gray-800 uppercase tracking-widest hover:bg-gray-700 dark:hover:bg-white focus:bg-gray-700 dark:focus:bg-white active:bg-gray-900 dark:active:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 transition ease-in-out duration-150">
                                                {{__('translate.create')}}
                                            </Link>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <Pagination v-if="products.meta.total > 10" class="mt-10 text-center mx-auto" :links="products.meta.links"/>
                    </div>
                </div>
            </div>
        </div>
    </AppLayout>
</template>
