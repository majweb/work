<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import Pagination from '@/Components/Pagination.vue';
import {ref} from "vue";
import {pickBy} from "lodash";
import {router} from "@inertiajs/vue3";
import InputLabel from "@/Components/InputLabel.vue";
import TextInput from "@/Components/TextInput.vue";
import PrimaryButton from "@/Components/PrimaryButton.vue";

const props = defineProps({
    invoices: Object,
    filters: Object
});

const params = ref({
    field: props.filters.field,
    direction: props.filters.direction,
    order_id: props.filters.order_id,
    amount: props.filters.amount,
});

const resetFilters = () => {
    router.get(route('invoices.index'));
}

const sort = (field) => {
    params.value.field = field;
    params.value.direction = params.value.direction === 'asc' ? 'desc' : 'asc';
}
const resetSort = (field) => {
    params.value.field = null;
    params.value.direction = null;
}
const search = () => {
    let rest = pickBy(params.value);
    router.get(route('invoices.index'), rest, {preserveState: true, replace: true});
}


</script>

<template>
    <AppLayout :title="__('auth.invoices')">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('auth.invoices') }}
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    <div
                        class="p-6 lg:p-8 bg-white dark:bg-gray-800 dark:bg-gradient-to-bl dark:from-gray-700/50 dark:via-transparent border-b border-gray-200 dark:border-gray-700">
                        <h2 class="text-sm font-semibold text-indigo-300">{{__('auth.filters')}}</h2>
                        <button class="text-sm font-semibold mb-2 text-indigo-400 underline" @click="resetFilters" v-if="params.amount || params.order_id">{{ __('auth.clearFilters') }}</button>
                        <div class="col-span-6 flex mb-3 items-center">
                            <div class="mr-2">
                                <InputLabel :value="__('auth.invoiceAmount')"/>
                                <TextInput
                                    id="amount"
                                    v-model="params.amount"
                                    type="text"
                                    class="mt-1 block"
                                    @keyup.enter="search"
                                />
                            </div>
                            <div class="mr-2">
                                <InputLabel for="ends_at" :value="__('auth.orderNumber')"/>
                                <TextInput
                                    id="order_id"
                                    v-model="params.order_id"
                                    @keyup.enter="search"
                                    type="text"
                                    class="mt-1 block"
                                />
                            </div>
                            <div class="mr-2">
                                <PrimaryButton class="mt-6" @click="search">{{__('auth.search')}}</PrimaryButton>
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
                                                    <th scope="col"
                                                        class="w-3/12 text-xs font-semibold tracking-wider text-left uppercase cursor-pointer">
                                                        <div class="flex items-center">
                                                            <span class="inline-flex w-full py-3 px-6 justify-between"
                                                                  @click="sort('id')">Id
                                                                <svg
                                                                    v-if="params.field === 'id' && params.direction === 'asc'"
                                                                    xmlns="http://www.w3.org/2000/svg" class="h-4 w-4"
                                                                    viewBox="0 0 20 20" fill="currentColor">
                                                                <path
                                                                    d="M3 3a1 1 0 000 2h11a1 1 0 100-2H3zM3 7a1 1 0 000 2h5a1 1 0 000-2H3zM3 11a1 1 0 100 2h4a1 1 0 100-2H3zM13 16a1 1 0 102 0v-5.586l1.293 1.293a1 1 0 001.414-1.414l-3-3a1 1 0 00-1.414 0l-3 3a1 1 0 101.414 1.414L13 10.414V16z"/>
                                                                </svg>

                                                                <svg
                                                                    v-if="params.field === 'id' && params.direction === 'desc'"
                                                                    xmlns="http://www.w3.org/2000/svg" class="h-4 w-4"
                                                                    viewBox="0 0 20 20" fill="currentColor">
                                                                <path
                                                                    d="M3 3a1 1 0 000 2h11a1 1 0 100-2H3zM3 7a1 1 0 000 2h7a1 1 0 100-2H3zM3 11a1 1 0 100 2h4a1 1 0 100-2H3zM15 8a1 1 0 10-2 0v5.586l-1.293-1.293a1 1 0 00-1.414 1.414l3 3a1 1 0 001.414 0l3-3a1 1 0 00-1.414-1.414L15 13.586V8z"/>
                                                                </svg>
                                                            </span>
                                                            <div v-if="params.field === 'id' && params.direction"
                                                                 @click="resetSort">
                                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3"
                                                                     fill="none" viewBox="0 0 24 24"
                                                                     stroke="currentColor" stroke-width="2">
                                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                                          d="M6 18L18 6M6 6l12 12"/>
                                                                </svg>
                                                            </div>
                                                        </div>
                                                    </th>
                                                    <th scope="col"
                                                        class="w-3/12 text-xs font-semibold tracking-wider text-left uppercase cursor-pointer">
                                                        <div class="flex items-center">
                                                            <span class="inline-flex w-full py-3 px-6 justify-between"
                                                                  @click="sort('day')">{{__('auth.day')}}
                                                                <svg
                                                                    v-if="params.field === 'day' && params.direction === 'asc'"
                                                                    xmlns="http://www.w3.org/2000/svg" class="h-4 w-4"
                                                                    viewBox="0 0 20 20" fill="currentColor">
                                                                <path
                                                                    d="M3 3a1 1 0 000 2h11a1 1 0 100-2H3zM3 7a1 1 0 000 2h5a1 1 0 000-2H3zM3 11a1 1 0 100 2h4a1 1 0 100-2H3zM13 16a1 1 0 102 0v-5.586l1.293 1.293a1 1 0 001.414-1.414l-3-3a1 1 0 00-1.414 0l-3 3a1 1 0 101.414 1.414L13 10.414V16z"/>
                                                                </svg>

                                                                <svg
                                                                    v-if="params.field === 'day' && params.direction === 'desc'"
                                                                    xmlns="http://www.w3.org/2000/svg" class="h-4 w-4"
                                                                    viewBox="0 0 20 20" fill="currentColor">
                                                                <path
                                                                    d="M3 3a1 1 0 000 2h11a1 1 0 100-2H3zM3 7a1 1 0 000 2h7a1 1 0 100-2H3zM3 11a1 1 0 100 2h4a1 1 0 100-2H3zM15 8a1 1 0 10-2 0v5.586l-1.293-1.293a1 1 0 00-1.414 1.414l3 3a1 1 0 001.414 0l3-3a1 1 0 00-1.414-1.414L15 13.586V8z"/>
                                                                </svg>
                                                            </span>
                                                            <div v-if="params.field === 'day' && params.direction"
                                                                 @click="resetSort">
                                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3"
                                                                     fill="none" viewBox="0 0 24 24"
                                                                     stroke="currentColor" stroke-width="2">
                                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                                          d="M6 18L18 6M6 6l12 12"/>
                                                                </svg>
                                                            </div>
                                                        </div>
                                                    </th>
                                                    <th scope="col"
                                                        class="py-3 px-6 w-3/12 text-xs font-semibold tracking-wider text-left uppercase">
                                                        {{__('auth.Number')}}
                                                    </th>
                                                    <th scope="col"
                                                        class="py-3 px-6 w-3/12 text-xs font-semibold tracking-wider text-left uppercase">
                                                        {{__('auth.invoiceAmount')}}
                                                    </th>
                                                    <th scope="col"
                                                        class="py-3 px-6 w-3/12 text-xs font-semibold tracking-wider text-left uppercase">
                                                        {{__('auth.opened')}}
                                                    </th>
                                                    <th scope="col"
                                                        class="py-3 px-6 w-3/12 text-xs font-semibold tracking-wider text-left uppercase">
                                                        {{__('auth.orderNumber')}}
                                                    </th>
                                                    <th scope="col"
                                                        class="py-3 px-6 w-3/12 text-xs font-semibold tracking-wider text-left uppercase">
                                                        {{__('auth.actions')}}
                                                    </th>
                                                </tr>
                                                </thead>

                                                <tbody class="bg-white divide-y divide-gray-200">
                                                <tr v-if="props.invoices.data.length == 0">
                                                    <td colspan="7" class="text-center py-4 px-6 whitespace-nowrap font-semibold"><p>
                                                        {{__('auth.notFoundInvoices')}}</p></td>
                                                </tr>
                                                <tr v-else v-for="(invoice) in props.invoices.data" :key="invoice.id">
                                                    <td class="py-4 px-6 whitespace-nowrap">
                                                        <div class="flex items-center">
                                                            <div class="ml-4">
                                                                <div class="text-sm text-gray-900">
                                                                    {{ invoice.id }}
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="py-4 px-6 whitespace-nowrap">
                                                        <div class="ml-4">
                                                            <div class="text-sm text-gray-900">
                                                                {{ invoice.day }}
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="py-4 px-6 whitespace-nowrap">
                                                        <div class="ml-4">
                                                            <div class="text-sm text-gray-900">
                                                                {{ invoice.number }}
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="py-4 px-6 whitespace-nowrap">
                                                        <div class="ml-4">
                                                            <div class="text-sm text-gray-900">
                                                                {{ invoice.amount }}
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="py-4 px-6 whitespace-nowrap">
                                                        <div class="ml-4">
                                                            <div class="text-sm text-gray-900">
                                                                <div v-if="invoice.opened">
                                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                                         class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                                                                         stroke="currentColor" stroke-width="2">
                                                                        <path stroke-linecap="round"
                                                                              stroke-linejoin="round"
                                                                              d="M5 13l4 4L19 7"/>
                                                                    </svg>
                                                                </div>
                                                                <div v-else>
                                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                                         class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                                                                         stroke="currentColor" stroke-width="2">
                                                                        <path stroke-linecap="round"
                                                                              stroke-linejoin="round"
                                                                              d="M6 18L18 6M6 6l12 12"/>
                                                                    </svg>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="py-4 px-6 whitespace-nowrap">
                                                        <div class="ml-4">
                                                            <div class="text-sm text-gray-900">
                                                                {{ invoice.order_id }}
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="py-4 px-6 whitespace-nowrap flex items-center">
                                                        <div class="ml-4">
                                                            <a :href="route('invoicesDownload',invoice)"
                                                                  class="flex items-center inline-flex items-center px-4 py-2 bg-white border border-gray-300 rounded-md font-semibold text-xs text-gray-700 uppercase tracking-widest shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 disabled:opacity-25 transition ease-in-out duration-150">
                                                                {{__('auth.getPdf')}}
                                                            </a>
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
                        <Pagination v-if="invoices.total > 5" class="mt-10 text-center mx-auto"
                                    :links="invoices.links"/>
                    </div>

                </div>
            </div>
        </div>
    </AppLayout>
</template>
