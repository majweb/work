<script setup>
import {computed, ref, watch} from 'vue';
import {router, Link, usePage} from '@inertiajs/vue3';
import AppLayout from '@/Layouts/AppLayout.vue';
import Pagination from '@/Components/Pagination.vue';
import {pickBy, debounce} from 'lodash';
import InputLabel from "@/Components/InputLabel.vue";

const props = defineProps({
    products: Object,
    filters: Object,
    countCart:Number
});

const params = ref({
    product_type: props.filters.product_type ?? 'all',
});

const resetFilters = () => {
    router.get(route('buy.index'));
}

let points  = computed(()=>{
    return usePage().props.auth.user?.firm?.points;
});
let currency  = computed(()=>{
    return usePage().props.auth.user?.firm?.currency;
});

watch(params.value, debounce(function (value) {
    let rest = pickBy(params.value);
    router.get(route('buy.index'), rest, {preserveState: true, replace: true});
}, 300));

</script>
<template>
    <AppLayout :title="__('auth.buy')">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ __('auth.buy') }}
            </h2>
        </template>
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg">
                        <h2 class="text-blue-work text-right p-4">{{ __('auth.give') }}: <strong>{{points ? points : '0'}}</strong> {{ __('auth.points') }}</h2>
                    <div
                        class="p-6 lg:p-8 bg-white dark:bg-gray-800 dark:bg-gradient-to-bl dark:from-gray-700/50 dark:via-transparent border-b border-gray-200 dark:border-gray-700">
                        <h2 class="text-sm font-semibold text-blue-work">{{ __('auth.filters') }}</h2>
                        <button class="text-sm font-semibold mb-2 text-blue-work underline" @click="resetFilters"
                                v-if="(params.product_type && params.product_type != 'all')">
                            {{ __('auth.clearFilters') }}
                        </button>
                        <div class="col-span-6 flex mb-3 items-center">
                            <div class="flex mt-1 flex flex-col mr-2">
                                <InputLabel :value="__('auth.typeProduct')" class="text-sm"/>
                                <select v-model="params.product_type" id="small"
                                        class="border-gray-300 focus:border-blue-work dark:focus:border-blue-work focus:ring-blue-work rounded-md shadow-sm"
                                >
                                    <option value="all" id="all">{{ __('auth.all') }}</option>
                                    <option value="points" id="points">{{ __('auth.points') }}</option>
                                    <option value="extra" id="extra">{{ __('auth.extra') }}</option>
                                </select>
                            </div>
                        </div>
                        <div v-if="props.products.data.length == 0">
                            <div class="text-center py-4 px-6 whitespace-nowrap font-semibold">
                                <p>
                                    {{ __('auth.notFoundProducts') }}
                                </p>
                            </div>
                        </div>
                        <div v-else>
                            <div class="grid grid-cols-1 lg:grid-cols-5 gap-2 lg:gap-8">
                                <div v-for="(product) in props.products.data" :key="product.id" class="mb-2 border border-2 border-gray-200 rounded-md p-5 flex flex-col items-center ">

                                    <h5 class="mb-2 text-xl font-bold text-gray-900 dark:text-white">
                                        <span>{{ product.trans_name }}</span>
                                    </h5>
                                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                                        {{product.trans}}
                                    </p>
                                    <p v-if="product.product_type == 'Points'" class="mb-3 font-normal text-gray-700 dark:text-gray-400">{{ product.price }} {{currency}}</p>
                                    <p v-else class="mb-3 font-normal text-gray-700 dark:text-gray-400">{{ parseInt(product.price) }} {{__('auth.points')}}</p>

                                    <Link :href="route('buy.store',product)" as="button" v-if="product.product_type == 'Points'" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-work rounded-lg hover:bg-blue-work-100 focus:ring-4 focus:outline-none focus:ring-blue-work transition">
                                        {{__('auth.addToCart')}}
                                        <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true"
                                             xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                  stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                                        </svg>
                                    </Link>
                                    <Link preserve-scroll method="post" as="button" v-else-if="points && points >= parseInt(product.price)" :href="route('buy.change',[product,product.price])" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-red-work rounded-lg hover:bg-red-work-100 focus:ring-4 focus:outline-none focus:ring-blue-work transition">
                                        {{__('auth.changePoints')}}
                                    </Link>
                                </div>
                            </div>
                                <Link v-if="countCart > 0" as="button" :href="route('buy.detail')" :active="route().current('buy.index')" class="flex w-[100px] text-center justify-center items-center mx-auto px-2 py-2 mx-auto bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 disabled:opacity-50 transition ease-in-out duration-150 mt-2">
                                    {{__('auth.cart')}}
                                </Link>
                        </div>
                        <Pagination v-if="products.meta.total > 10" class="mt-10 text-center mx-auto"
                                    :links="products.meta.links"/>
                    </div>
                </div>
            </div>
        </div>
    </AppLayout>
</template>
