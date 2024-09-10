<script setup>
import {computed} from 'vue';
import {Link, router, usePage} from '@inertiajs/vue3';
import AppLayout from '@/Layouts/AppLayout.vue';

const props = defineProps({
    withTax: String,
    cartItems: Object,
    countCart: Number,


});


</script>
<template>
    <AppLayout :title="__('auth.buy')">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                Płatnosc
            </h2>
        </template>
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg">

                    <section class="bg-white py-8 antialiased dark:bg-gray-900 md:py-16">
                        <div class="mx-auto max-w-screen-xl px-4">
                            <div class="mt-6 sm:mt-8 md:gap-6 lg:flex lg:items-start xl:gap-8">
                                <div class="mx-auto w-full flex-none lg:max-w-2xl xl:max-w-4xl">
                                    <div class="space-y-6">
                                        <Link v-if="countCart > 0" :href="route('buy.order')" method="post" class="flex w-full items-center justify-center rounded-lg bg-blue-work px-5 py-2.5 text-sm font-medium text-white hover:bg-blue-work-100 focus:outline-none focus:ring-4 focus:ring-primary-300 dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">Przelew</Link>

                                        <Link :href="route('buy.detail')" class="flex justify-center text-sm text-center font-medium text-primary-700 underline hover:no-underline dark:text-primary-500">Wróć</Link>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </AppLayout>
</template>
