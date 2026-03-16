<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import Pagination from '@/Components/Pagination.vue';
import {ref} from "vue";
import {pickBy} from "lodash";
import {router} from "@inertiajs/vue3";
import moment from "moment";
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
        <div class="py-12 bg-gray-50/50 min-h-screen">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <!-- Header Card -->
                <div class="bg-white rounded-[3rem] shadow-xl shadow-blue-900/5 border border-gray-100 p-10 mb-8">
                    <div>
                        <h3 class="text-2xl font-black text-[#0A2C5C] uppercase tracking-tight">{{ __('translate.invoices') }}</h3>
                        <p class="text-[10px] font-bold text-gray-400 uppercase tracking-widest mt-1">{{ __('translate.invoicesDescription') }}</p>
                    </div>
                </div>

                <!-- FILTRY -->
                <div class="bg-white rounded-[3rem] shadow-xl shadow-blue-900/5 border border-gray-100 p-10 mb-8">
                    <div class="flex items-center gap-4 mb-8">
                        <h3 class="text-[10px] font-black text-[#0A2C5C] uppercase tracking-[0.2em]">{{ __('translate.filter') }}</h3>
                        <div class="h-px flex-1 bg-gray-100"></div>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-6">
                        <div class="space-y-2">
                            <InputLabel :value="__('translate.invoiceAmount')" class="block text-[10px] font-black text-gray-400 mb-2 uppercase tracking-widest" />
                            <TextInput
                                v-model="params.amount"
                                type="text"
                                :placeholder="__('translate.invoiceAmount')"
                                @keyup.enter="search"
                            />
                        </div>
                        <div class="space-y-2">
                            <InputLabel :value="__('translate.invoiceNumber')" class="block text-[10px] font-black text-gray-400 mb-2 uppercase tracking-widest" />
                            <TextInput
                                v-model="params.number"
                                type="text"
                                :placeholder="__('translate.invoiceNumber')"
                                @keyup.enter="search"
                            />
                        </div>
                        <div class="space-y-2">
                            <InputLabel :value="__('translate.invoiceDate')" class="block text-[10px] font-black text-gray-400 mb-2 uppercase tracking-widest" />
                            <TextInput
                                v-model="params.date"
                                type="date"
                                @keyup.enter="search"
                                class="appearance-none"
                            />
                        </div>
                    </div>

                    <div class="flex flex-col sm:flex-row sm:justify-end sm:items-center mt-6 gap-4 pt-6 border-t border-gray-50">
                        <button
                            @click="resetFilters"
                            type="button"
                            class="w-full sm:w-auto px-10 py-4 bg-white border border-gray-100 text-gray-500 text-[10px] font-black uppercase tracking-widest rounded-2xl hover:bg-gray-50 shadow-sm transition-all hover:-translate-y-0.5"
                        >
                            {{ __('translate.clearFilters') }}
                        </button>
                        <button
                            @click="search"
                            :disabled="searching"
                            class="w-full sm:w-auto px-10 py-4 bg-[#0A2C5C] text-white text-[10px] font-black uppercase tracking-widest rounded-2xl hover:bg-blue-800 disabled:opacity-50 disabled:cursor-not-allowed transition-all shadow-lg shadow-blue-900/20 hover:-translate-y-0.5 active:translate-y-0 flex items-center justify-center gap-2"
                        >
                            <svg v-if="searching" class="animate-spin h-3 w-3 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                                <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                            </svg>
                            {{ __('translate.search') }}
                        </button>
                    </div>
                </div>

                <!-- LISTA / TABELA -->
                <div v-if="props.invoices.data.length === 0" class="bg-white rounded-[3rem] p-20 text-center shadow-xl shadow-blue-900/5 border border-gray-100">
                    <div class="w-20 h-20 bg-gray-50 rounded-full flex items-center justify-center mx-auto mb-6">
                        <svg class="w-10 h-10 text-gray-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                        </svg>
                    </div>
                    <p class="text-xs font-black text-gray-400 uppercase tracking-widest">{{ __('translate.notFoundInvoices') }}</p>
                </div>

                <div v-else class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                    <div v-for="invoice in props.invoices.data" :key="invoice.id" class="group bg-white rounded-[2.5rem] p-8 shadow-sm border border-gray-100 flex flex-col transition-all duration-300 hover:shadow-xl hover:shadow-blue-900/5 hover:-translate-y-1">
                        <div class="mb-6">
                            <div class="flex justify-between items-start mb-2">
                                <p class="text-[10px] font-black text-gray-300 uppercase tracking-[0.2em]">
                                    ID {{ invoice.id }}
                                </p>
                                <div v-if="invoice.opened" class="flex items-center gap-1 text-[#00a0e3]">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="4">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                                    </svg>
                                    <span class="text-[8px] font-black uppercase tracking-widest">{{ __('translate.opened') }}</span>
                                </div>
                                <div v-else class="flex items-center gap-1 text-red-400">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="4">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                                    </svg>
                                    <span class="text-[8px] font-black uppercase tracking-widest">{{ __('translate.notOpened') }}</span>
                                </div>
                            </div>
                            <h4 class="text-xl font-black text-gray-900 uppercase tracking-tight leading-tight truncate">
                                {{ invoice.number }}
                            </h4>
                        </div>

                        <div class="bg-gray-50/50 rounded-2xl p-6 border border-gray-100/50 mb-8 flex-grow">
                            <div class="mb-4">
                                <p class="text-[10px] font-black text-gray-400 uppercase tracking-widest mb-1">{{ __('translate.invoiceAmount') }}</p>
                                <p class="text-xl font-black text-[#0A2C5C] tracking-tight">
                                    ${{ parseFloat(invoice.amount).toLocaleString(undefined, { minimumFractionDigits: 2, maximumFractionDigits: 2 }) }}
                                </p>
                            </div>
                            <div>
                                <p class="text-[10px] font-black text-gray-400 uppercase tracking-widest mb-1">{{ __('translate.invoiceDate') }}</p>
                                <p class="text-xs font-bold text-gray-500 uppercase tracking-widest">
                                    {{ moment(invoice.date_invoice).format('DD.MM.YYYY') }}
                                </p>
                            </div>
                        </div>

                        <div class="w-full mt-auto space-y-2">
                            <a
                                :href="route('invoicesDownload', invoice.id)"
                                class="flex justify-center items-center w-full bg-[#0A2C5C] text-white font-black py-4 rounded-2xl text-[10px] uppercase tracking-widest hover:bg-blue-800 transition shadow-lg shadow-blue-900/10"
                                @click="invoice.opened = true"
                            >
                                {{ __('translate.invoiceDownload') }}
                            </a>
                            <a
                                v-for="correction in invoice.corrections"
                                :key="correction.id"
                                :href="route('invoicesCorrectionDownload', correction.id)"
                                class="flex justify-center items-center w-full bg-amber-500 text-white font-black py-4 rounded-2xl text-[10px] uppercase tracking-widest hover:bg-amber-600 transition shadow-lg shadow-amber-900/10"
                            >
                                {{ __('translate.correctionDownload') }} {{ correction.number }}
                            </a>
                        </div>
                    </div>
                </div>

                <div v-if="invoices.total > props.invoices.per_page" class="mt-12 flex justify-center">
                    <Pagination :links="invoices.links"/>
                </div>
            </div>
        </div>
    </AppLayout>
</template>
