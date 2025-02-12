<script setup>
import { ref, watch } from 'vue';
import { router } from '@inertiajs/vue3';
import AppLayout from '@/Layouts/AppLayout.vue';
import Pagination from '@/Components/Pagination.vue';

import { pickBy, debounce } from 'lodash';
import InputLabel from "@/Components/InputLabel.vue";

const props = defineProps({
    orders: Object,
    filters: Object
});
const selectedOrder = ref(null);
const confirmCancelOrder = ref(false);

const params = ref({
    field: props.filters.field,
    direction: props.filters.direction,
    payment_type:props.filters.payment_type ?? 'all',
    paid_date:props.filters.paid_date ?? 'paid-all',

});

const resetFilters = ()=>{
    router.get(route('orders.index'));
}

const sort = (field) => {
    params.value.field = field;
    params.value.direction = params.value.direction === 'asc' ? 'desc' : 'asc';
}
const resetSort = (field) => {
    params.value.field = null;
    params.value.direction = null;
}

watch(params.value, debounce(function (value) {
    let rest = pickBy(params.value);
    router.get(route('orders.index'), rest, { preserveState: true, replace: true });
}, 300));

</script>
<template>
    <AppLayout :title="__('translate.orders')">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{__('translate.orders')}}
            </h2>
        </template>
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg">
                    <div class="p-6 lg:p-8 bg-white dark:bg-gray-800 dark:bg-gradient-to-bl dark:from-gray-700/50 dark:via-transparent border-b border-gray-200 dark:border-gray-700">

                        <h2 class="text-sm font-semibold text-indigo-300">{{__('translate.filters')}}</h2>
                        <button class="text-sm font-semibold mb-2 text-indigo-400 underline" @click="resetFilters" v-if="(params.payment_type && params.payment_type != 'all') || (params.paid_date && params.paid_date != 'paid-all')">{{ __('translate.clearFilters') }}</button>
                        <div class="col-span-6 flex mb-3 items-center">
                            <div class="flex mt-1 flex flex-col mr-2">
                                <InputLabel :value="__('translate.payType')" class="text-sm"/>
                                <select v-model="params.payment_type" id="small" class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm"
                                >
                                    <option value="all" id="all">{{__('translate.all')}}</option>
                                    <option value="P24"  id="P24">P24</option>
                                    <option value="Transfer" id="Transfer">{{__('translate.transfer')}}</option>
                                </select>
                            </div>
                            <div class="flex mt-1 flex flex-col">
                                <InputLabel :value="__('translate.payStatus')" class="text-sm"/>
                                <select v-model="params.paid_date" id="small" class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm"
                                >
                                    <option value="paid-all" id="paid-all">{{__('translate.all')}}</option>
                                    <option value="pay"  id="pay">{{__('translate.paid')}}</option>
                                    <option value="unpay" id="unpay">{{__('translate.unpaid')}}</option>
                                </select>
                            </div>
                        </div>

                        <div class="overflow-hidden bg-white shadow-md sm:rounded-lg">
                            <div class="flex flex-col">
                                <div class="overflow-x-auto -my-2 sm:-mx-6 lg:-mx-8">
                                    <div class="inline-block py-2 min-w-full align-middle sm:px-6 lg:px-8">
                                        <div class="overflow-hidden border-b border-gray-200 shadow sm:rounded-lg">
                                            <table class="min-w-full divide-y divide-gray-200 table-fixed">
                                                <thead class="bg-blue-work">
                                                <tr>
                                                    <th scope="col" class="w-3/12 text-xs font-semibold tracking-wider text-left uppercase cursor-pointer">
                                                        <div class="flex items-center">
                                                            <span class="inline-flex w-full py-3 px-6 justify-between" @click="sort('id')">Id
                                                                <svg v-if="params.field === 'id' && params.direction === 'asc'" xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
                                                                <path d="M3 3a1 1 0 000 2h11a1 1 0 100-2H3zM3 7a1 1 0 000 2h5a1 1 0 000-2H3zM3 11a1 1 0 100 2h4a1 1 0 100-2H3zM13 16a1 1 0 102 0v-5.586l1.293 1.293a1 1 0 001.414-1.414l-3-3a1 1 0 00-1.414 0l-3 3a1 1 0 101.414 1.414L13 10.414V16z"/>
                                                                </svg>

                                                                <svg v-if="params.field === 'id' && params.direction === 'desc'" xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
                                                                <path d="M3 3a1 1 0 000 2h11a1 1 0 100-2H3zM3 7a1 1 0 000 2h7a1 1 0 100-2H3zM3 11a1 1 0 100 2h4a1 1 0 100-2H3zM15 8a1 1 0 10-2 0v5.586l-1.293-1.293a1 1 0 00-1.414 1.414l3 3a1 1 0 001.414 0l3-3a1 1 0 00-1.414-1.414L15 13.586V8z"/>
                                                                </svg>
                                                            </span>
                                                            <div v-if="params.field === 'id' && params.direction" @click="resetSort">
                                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                                                                </svg>
                                                            </div>
                                                        </div>
                                                    </th>
                                                    <th scope="col"
                                                        class="py-3 px-6 w-3/12 text-xs font-semibold tracking-wider text-left uppercase">
                                                        {{__('translate.payType')}}
                                                    </th>
                                                    <th scope="col"
                                                        class="py-3 px-6 w-3/12 text-xs font-semibold tracking-wider text-left uppercase">
                                                        {{__('translate.fundations')}}
                                                    </th>
                                                    <th scope="col" class="w-3/12 text-xs font-semibold tracking-wider text-left uppercase cursor-pointer">
                                                        <div class="flex items-center">
                                                            <span class="inline-flex w-full py-3 px-6 justify-between" @click="sort('paid_date')">{{__('translate.paidDate')}}
                                                                <svg v-if="params.field === 'paid_date' && params.direction === 'asc'" xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
                                                                <path d="M3 3a1 1 0 000 2h11a1 1 0 100-2H3zM3 7a1 1 0 000 2h5a1 1 0 000-2H3zM3 11a1 1 0 100 2h4a1 1 0 100-2H3zM13 16a1 1 0 102 0v-5.586l1.293 1.293a1 1 0 001.414-1.414l-3-3a1 1 0 00-1.414 0l-3 3a1 1 0 101.414 1.414L13 10.414V16z"/>
                                                                </svg>

                                                                <svg v-if="params.field === 'paid_date' && params.direction === 'desc'" xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
                                                                <path d="M3 3a1 1 0 000 2h11a1 1 0 100-2H3zM3 7a1 1 0 000 2h7a1 1 0 100-2H3zM3 11a1 1 0 100 2h4a1 1 0 100-2H3zM15 8a1 1 0 10-2 0v5.586l-1.293-1.293a1 1 0 00-1.414 1.414l3 3a1 1 0 001.414 0l3-3a1 1 0 00-1.414-1.414L15 13.586V8z"/>
                                                                </svg>
                                                            </span>
                                                            <div v-if="params.field === 'paid_date' && params.direction" @click="resetSort">
                                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                                                                </svg>
                                                            </div>
                                                        </div>
                                                    </th>
                                                    <th scope="col"
                                                        class="py-3 px-6 w-3/12 text-xs font-semibold tracking-wider text-left uppercase">
                                                        {{__('translate.orderProductCount')}}
                                                    </th>
                                                    <th scope="col"
                                                        class="py-3 px-6 w-3/12 text-xs font-semibold tracking-wider text-left uppercase">
                                                        {{__('translate.actions')}}
                                                    </th>
                                                </tr>
                                                </thead>

                                                <tbody class="bg-white divide-y divide-gray-200">
                                                <tr v-if="props.orders.data.length == 0">
                                                    <td colspan="4" class="text-center py-4 px-6 whitespace-nowrap"><p>{{__('translate.notFoundOrders')}}</p></td>
                                                </tr>
                                                <tr v-else v-for="(order) in props.orders.data" :key="order.id">
                                                    <td class="py-4 px-6 whitespace-nowrap">
                                                        <div class="flex items-center">
                                                            <div class="ml-4">
                                                                <div class="text-sm text-gray-900">
                                                                    {{order.id}}
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="py-4 px-6 whitespace-nowrap">
                                                        <div class="ml-4">
                                                            <div class="text-sm text-gray-900">
                                                                {{order.payment_type}}
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="py-4 px-6 whitespace-nowrap">
                                                        <div class="ml-4">
                                                            <div class="text-sm text-gray-900">
                                                                {{order.foundation?.name?? '-'}}
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="py-4 px-6 whitespace-nowrap">
                                                        <div class="ml-4">
                                                            <div class="text-sm text-gray-900">
                                                                {{order.paid_date}}
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="py-4 px-6 whitespace-nowrap">
                                                        <div class="ml-4">
                                                            <div class="text-sm text-gray-900">
                                                                {{order.order_products_count}}
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="py-4 px-6 whitespace-nowrap">
                                                        <div class="flex items-center">
                                                            <div class="ml-4">
                                                                <a :href="route('ordersDownload',order)"
                                                                   class="flex items-center inline-flex items-center px-4 py-2 bg-white border border-gray-300 rounded-md font-semibold text-xs text-gray-700 uppercase tracking-widest shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 disabled:opacity-25 transition ease-in-out duration-150">
                                                                    {{__('translate.getPdf')}}
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <Pagination v-if="orders.total > 5" class="mt-10 text-center mx-auto" :links="orders.links" />
                    </div>
                </div>
            </div>
        </div>
    </AppLayout>
</template>
