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
    amount: props.filters.amount,
    number: props.filters.number,
    date: props.filters.date,
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
const searching = ref(false);
const search = () => {
    let rest = pickBy(params.value);
    router.get(route('invoices.index'), rest, {
        preserveState: true,
        replace: true,
        onStart: () => searching.value = true,
        onFinish: () => searching.value = false
    });
}


</script>

<template>
    <AppLayout :title="__('translate.invoices')">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('translate.invoices') }}
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <!-- FILTRY -->
                <div class="bg-white rounded-[2.5rem] p-8 shadow-sm border border-slate-100 mb-8">
                    <h2 class="text-[#0b2a55] text-xl font-bold mb-6 uppercase tracking-wider">{{ __('translate.filter') }}</h2>

                    <div class="grid grid-cols-1 md:grid-cols-3 gap-4 items-end">
                        <div>
                            <InputLabel :value="__('translate.invoiceAmount')" class="text-[#00aaff] text-[10px] font-black uppercase mb-1" />
                            <TextInput
                                v-model="params.amount"
                                type="text"
                                class="w-full rounded-xl border-slate-200 text-sm focus:border-[#00aaff] focus:ring-[#00aaff]"
                                :placeholder="__('translate.invoiceAmount')"
                                @keyup.enter="search"
                            />
                        </div>
                        <div>
                            <InputLabel :value="__('translate.invoiceNumber')" class="text-[#00aaff] text-[10px] font-black uppercase mb-1" />
                            <TextInput
                                v-model="params.number"
                                type="text"
                                class="w-full rounded-xl border-slate-200 text-sm focus:border-[#00aaff] focus:ring-[#00aaff]"
                                :placeholder="__('translate.invoiceNumber')"
                                @keyup.enter="search"
                            />
                        </div>
                        <div>
                            <InputLabel :value="__('translate.invoiceDate')" class="text-[#00aaff] text-[10px] font-black uppercase mb-1" />
                            <TextInput
                                v-model="params.date"
                                type="date"
                                class="w-full rounded-xl border-slate-200 text-sm focus:border-[#00aaff] focus:ring-[#00aaff]"
                                @keyup.enter="search"
                            />
                        </div>
                    </div>

                    <div class="flex justify-end gap-3 mt-6">
                        <button
                            @click="resetFilters"
                            class="border-2 border-slate-200 text-slate-500 font-black px-6 py-2 rounded-xl text-xs uppercase tracking-widest hover:bg-slate-50 transition"
                        >
                            {{ __('translate.clearFilters') }}
                        </button>
                        <button
                            @click="search"
                            :disabled="searching"
                            class="bg-[#e31e24] text-white font-black px-8 py-2 rounded-xl text-xs uppercase tracking-widest hover:bg-red-700 transition shadow-lg flex items-center gap-2 disabled:opacity-75 disabled:cursor-not-allowed"
                        >
                            <svg v-if="searching" class="animate-spin h-4 w-4 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                                <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                            </svg>
                            {{ __('translate.search') }}
                        </button>
                    </div>
                </div>

                <!-- TABELA -->
                <div class="bg-white rounded-[2.5rem] p-8 shadow-sm border border-slate-100">
                    <div class="flex justify-between items-center mb-8 px-4">
                        <h2 class="text-4xl font-bold text-[#0b2a55]">
                            {{ __('translate.Invoices') }}
                        </h2>
                    </div>

                    <div class="overflow-x-auto">
                        <table class="w-full border-separate border-spacing-y-3">
                            <thead>
                            <tr class="text-[#00aaff] text-[10px] font-black uppercase tracking-widest text-center">
                                <th class="pb-2 cursor-pointer" @click="sort('id')">
                                    <div class="flex items-center justify-center gap-1">
                                        {{ __('translate.invoiceId') }}
                                        <svg v-if="params.field === 'id'" xmlns="http://www.w3.org/2000/svg" class="h-3 w-3" :class="params.direction === 'asc' ? 'rotate-180' : ''" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                        </svg>
                                    </div>
                                </th>
                                <th class="pb-2">{{ __('translate.invoiceNumber') }}</th>
                                <th class="pb-2 cursor-pointer" @click="sort('date_invoice')">
                                    <div class="flex items-center justify-center gap-1">
                                        {{ __('translate.invoiceDate') }}
                                        <svg v-if="params.field === 'date_invoice'" xmlns="http://www.w3.org/2000/svg" class="h-3 w-3" :class="params.direction === 'asc' ? 'rotate-180' : ''" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                        </svg>
                                    </div>
                                </th>
                                <th class="pb-2">{{ __('translate.invoiceAmount') }}</th>
                                <th class="pb-2">{{ __('translate.invoiceRead') }}</th>
                                <th class="pb-2">{{ __('translate.invoiceAction') }}</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr v-if="props.invoices.data.length == 0">
                                <td colspan="6" class="text-center py-8 text-slate-400 font-semibold bg-white rounded-2xl shadow-sm">
                                    {{ __('translate.notFoundInvoices') }}
                                </td>
                            </tr>
                            <tr
                                v-else
                                v-for="invoice in props.invoices.data"
                                :key="invoice.id"
                                class="bg-white rounded-2xl shadow-sm overflow-hidden"
                            >
                                <td class="py-4 px-2 text-center text-slate-400 text-xs first:rounded-l-2xl">
                                    {{ invoice.id }}
                                </td>
                                <td class="py-4 px-2 text-center text-[#0b2a55] font-black text-sm">
                                    {{ invoice.number }}
                                </td>
                                <td class="py-4 px-2 text-center text-slate-500 text-xs">
                                    {{ invoice.date_invoice }}
                                </td>
                                <td class="py-4 px-2 text-center text-[#0b2a55] font-black text-sm">
                                    ${{ parseFloat(invoice.amount).toLocaleString(undefined, { minimumFractionDigits: 2, maximumFractionDigits: 2 }) }}
                                </td>
                                <td class="py-4 px-2 text-center">
                                    <div class="flex justify-center">
                                        <template v-if="invoice.opened">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-[#00aaff]" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                                            </svg>
                                        </template>
                                        <template v-else>
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-red-500" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                                            </svg>
                                        </template>
                                    </div>
                                </td>
                                <td class="py-4 px-4 last:rounded-r-2xl">
                                    <div class="flex flex-col gap-1 w-24 mx-auto">
                                        <a
                                            :href="route('invoicesDownload', invoice.id)"
                                            class="bg-[#0b2a55] text-white text-[10px] font-black py-1 px-3 rounded-md hover:bg-[#162a44] transition text-center uppercase"
                                            @click="invoice.opened = true"
                                        >
                                            {{ __('translate.invoiceDownload') }}
                                        </a>
                                    </div>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>

                    <Pagination v-if="invoices.total > 5" class="mt-10 text-center mx-auto" :links="invoices.links"/>
                </div>
            </div>
        </div>
    </AppLayout>
</template>
