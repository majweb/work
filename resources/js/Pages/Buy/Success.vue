<script setup>
import {Link, usePage} from '@inertiajs/vue3';
import AppLayout from '@/Layouts/AppLayout.vue';
import ConfettiExplosion from "vue-confetti-explosion";
import {computed} from "vue";

let points  = computed(()=>{
    return usePage().props.auth.user?.firm?.points;
});

</script>
<template>
    <AppLayout :title="__('translate.buy')">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{__('translate.congratulations')}}
            </h2>
        </template>
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg">
                    <section class="bg-white py-8 antialiased dark:bg-gray-900 md:py-16">
                        <ConfettiExplosion :particleCount="150" :force="0.3" :colors="['#00a0e3', '#00A0E3B2', '#E31E2499', '#e31e24']" class="text-center flex justify-center" />
                        <div class="mx-auto max-w-screen-xl px-4">
                            <div class="mt-6 sm:mt-8 md:gap-6 lg:flex lg:items-start xl:gap-8">
                                <div class="mx-auto w-full flex-none lg:max-w-2xl xl:max-w-4xl">
                                    <div class="flex flex-col justify-center items-center">
                                        <h2 class="text-xl font-semibold my-2">{{__('translate.orderPay')}}</h2>
                                        <p class="text-md mb-3">{{__('translate.give')}} <span class="font-bold">{{points}}</span> {{__('translate.points')}}</p>
                                        <Link :href="route('invoices.index')" class="mb-2 inline-flex items-center gap-2 text-sm font-medium text-primary-700 underline hover:no-underline dark:text-primary-500">{{__('translate.Invoices')}}</Link>
                                        <Link :href="route('orders.index')" class="inline-flex items-center gap-2 text-sm font-medium text-primary-700 underline hover:no-underline dark:text-primary-500">{{__('translate.Orders')}}</Link>
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
