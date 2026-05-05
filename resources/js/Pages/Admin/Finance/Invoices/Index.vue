<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import { Link, router } from '@inertiajs/vue3';
import { ref, watch } from 'vue';
import { debounce, pickBy } from 'lodash';
import Pagination from "@/Components/Pagination.vue";
import ConfirmationModal from '@/Components/ConfirmationModal.vue';
import DangerButton from '@/Components/DangerButton.vue';
import SecondaryButton from '@/Components/SecondaryButton.vue';

const props = defineProps({
    invoices: Object,
    filters: Object,
});

const form = ref({
    number: props.filters.number || '',
    firm: props.filters.firm || '',
});

const confirmingCorrectionDeletion = ref(false);
const correctionToDelete = ref(null);

const confirmCorrectionDeletion = (correction) => {
    correctionToDelete.value = correction;
    confirmingCorrectionDeletion.value = true;
};

const deleteCorrection = () => {
    router.delete(route('admin.finance.corrections.destroy', correctionToDelete.value.id), {
        onSuccess: () => {
            confirmingCorrectionDeletion.value = false;
            correctionToDelete.value = null;
        },
    });
};

const isCurrentMonth = (date) => {
    if (!date) return false;
    const d = new Date(date);
    const now = new Date();
    return d.getMonth() === now.getMonth() && d.getFullYear() === now.getFullYear();
};

watch(form, debounce(function (value) {
    router.get(route('admin.finance.invoices.index'), pickBy(value), {
        preserveState: true,
        replace: true,
    });
}, 300), { deep: true });

const resetFilters = () => {
    form.value = {
        number: '',
        firm: '',
    };
};

const formatDate = (date) => {
    if (!date) return '-';
    return new Date(date).toLocaleDateString('pl-PL');
};
</script>

<template>
    <AppLayout title="Finanse - Faktury">
        <div class="py-12 bg-gray-50/50 min-h-screen px-2 sm:px-0">
            <div class="max-w-[1600px] mx-auto sm:px-6 lg:px-8">
                <!-- Header -->
                <div class="mb-8 flex justify-between items-center">
                    <div class="flex items-center gap-6">
                        <div class="w-16 h-16 bg-gradient-to-br from-[#0A2C5C] to-blue-900 rounded-3xl flex items-center justify-center text-white shadow-lg">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-8 h-8">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 0 0-3.375-3.375h-1.5A1.125 1.125 0 0 1 13.5 7.125v-1.5a3.375 3.375 0 0 0-3.375-3.375H8.25m0 12.75h7.5m-7.5 3H12M10.5 2.25H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 0 0-9-9Z" />
                            </svg>
                        </div>
                        <div>
                            <h2 class="text-2xl font-black text-[#0A2C5C] uppercase tracking-tight">Finanse - Faktury</h2>
                            <p class="text-[10px] font-bold text-gray-400 uppercase tracking-widest mt-1">Zarządzanie fakturami i wystawianie korekt</p>
                        </div>
                    </div>
                </div>

                <!-- Filters -->
                <div class="bg-white rounded-[3rem] shadow-xl shadow-blue-900/5 border border-gray-100 p-8 mb-8">
                    <h3 class="text-xl font-black text-[#0A2C5C] uppercase tracking-tight mb-6">Filtrowanie</h3>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label class="block text-[10px] font-black text-gray-400 mb-2 uppercase tracking-widest">Numer faktury</label>
                            <input v-model="form.number" type="text" placeholder="Szukaj numeru..." class="block w-full py-4 bg-gray-50 border-none rounded-2xl text-[11px] font-black uppercase tracking-widest focus:ring-2 focus:ring-blue-500/20 transition-all px-6"/>
                        </div>
                        <div>
                            <label class="block text-[10px] font-black text-gray-400 mb-2 uppercase tracking-widest">Firma</label>
                            <input v-model="form.firm" type="text" placeholder="Szukaj firmy..." class="block w-full py-4 bg-gray-50 border-none rounded-2xl text-[11px] font-black uppercase tracking-widest focus:ring-2 focus:ring-blue-500/20 transition-all px-6"/>
                        </div>
                    </div>
                    <div class="mt-6 flex justify-end">
                        <button @click="resetFilters" class="px-8 py-3 bg-gray-100 hover:bg-gray-200 text-gray-600 rounded-2xl font-black text-[10px] uppercase tracking-widest transition-all">
                            RESETUJ FILTRY
                        </button>
                    </div>
                </div>

                <!-- Table -->
                <div class="bg-white rounded-[3rem] shadow-xl shadow-blue-900/5 border border-gray-100 overflow-hidden">
                    <table class="w-full text-left border-collapse">
                        <thead>
                            <tr class="border-b border-gray-50 text-[10px] font-black text-[#0A2C5C] uppercase tracking-[0.2em]">
                                <th class="p-8">NR FAKTURY</th>
                                <th class="p-8">DATA</th>
                                <th class="p-8">FIRMA</th>
                                <th class="p-8">KWOTA</th>
                                <th class="p-8 text-right">AKCJE</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr v-for="invoice in invoices.data" :key="invoice.id" class="group hover:bg-blue-50/30 transition-all duration-300 border-b border-gray-50 last:border-none">
                                <td class="p-8">
                                    <div class="text-xs font-black text-[#0A2C5C] uppercase tracking-tight">
                                        {{ invoice.number }}/{{ invoice.month }}/{{ invoice.year }}
                                        <div v-if="invoice.corrections?.length" class="mt-1">
                                            <span v-for="corr in invoice.corrections" :key="corr.id" class="inline-block bg-amber-100 text-amber-700 text-[8px] px-2 py-0.5 rounded-full mr-1">
                                                KOREKTA: {{ corr.number }}
                                            </span>
                                        </div>
                                    </div>
                                </td>
                                <td class="p-8">
                                    <div class="text-[10px] font-bold text-gray-400 uppercase tracking-widest">
                                        {{ formatDate(invoice.date_invoice) }}
                                    </div>
                                </td>
                                <td class="p-8">
                                    <div class="flex flex-col">
                                        <span class="text-xs font-black text-[#0A2C5C] uppercase tracking-tight">{{ invoice.user?.firm?.name_invoice || invoice.user?.name }}</span>
                                        <span class="text-[9px] text-gray-400 font-bold uppercase tracking-widest">NIP: {{ invoice.user?.firm?.nip_invoice }}</span>
                                    </div>
                                </td>
                                <td class="p-8">
                                    <div class="text-[10px] font-black text-[#0A2C5C] uppercase tracking-widest">
                                        ${{ invoice.amount }}
                                    </div>
                                </td>
                                <td class="p-8 text-right">
                                    <div class="flex justify-end gap-2">
                                        <template v-if="isCurrentMonth(invoice.date_invoice)">
                                            <Link :href="route('admin.finance.invoices.correction.create', invoice.id)" class="px-4 py-2 bg-amber-500 hover:bg-amber-600 text-white rounded-xl font-black text-[9px] uppercase tracking-widest transition-all">
                                                WYSTAW KOREKTĘ
                                            </Link>
                                        </template>
                                        <template v-else>
                                            <button type="button" disabled aria-disabled="true" class="px-4 py-2 bg-gray-200 text-gray-400 rounded-xl font-black text-[9px] uppercase tracking-widest cursor-not-allowed" title="Korektę można wystawić tylko dla faktur z bieżącego miesiąca">
                                                WYSTAW KOREKTĘ
                                            </button>
                                        </template>
                                        <div class="flex flex-col gap-1">
                                             <a v-if="invoice.pdf" :href="route('invoicesDownload', invoice.id)" class="px-4 py-2 bg-blue-50 hover:bg-blue-100 text-blue-600 rounded-xl font-black text-[9px] uppercase tracking-widest transition-all text-center">
                                                POBIERZ FV
                                            </a>
                                            <div v-for="corr in invoice.corrections" :key="corr.id" class="flex gap-1 items-center">
                                                <a :href="route('admin.finance.corrections.download', corr.id)" class="flex-1 px-4 py-2 bg-amber-50 hover:bg-amber-100 text-amber-600 rounded-xl font-black text-[9px] uppercase tracking-widest transition-all text-center leading-none flex items-center justify-center min-h-[34px]">
                                                    POBIERZ KOREKTĘ {{ corr.number }}
                                                </a>
                                                <button v-if="isCurrentMonth(corr.date_correction)" @click="confirmCorrectionDeletion(corr)" class="px-3 py-2 bg-red-50 hover:bg-red-100 text-red-600 rounded-xl transition-all h-[34px] flex items-center justify-center" title="Usuń korektę">
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-4 h-4">
                                                        <path stroke-linecap="round" stroke-linejoin="round" d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                                                    </svg>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr v-if="invoices.data.length === 0">
                                <td colspan="5" class="p-20 text-center">
                                    <div class="flex flex-col items-center gap-4 text-gray-300">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1" stroke="currentColor" class="w-20 h-20">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 0 0-3.375-3.375h-1.5A1.125 1.125 0 0 1 13.5 7.125v-1.5a3.375 3.375 0 0 0-3.375-3.375H8.25m0 12.75h7.5m-7.5 3H12M10.5 2.25H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 0 0-9-9Z" />
                                        </svg>
                                        <p class="text-xl font-black uppercase tracking-widest">Brak faktur</p>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="mt-8">
                    <Pagination :links="invoices.links" />
                </div>

                <!-- Confirmation Modal -->
                <ConfirmationModal :show="confirmingCorrectionDeletion" @close="confirmingCorrectionDeletion = false">
                    <template #title>
                        Usuń korektę
                    </template>

                    <template #content>
                        Czy na pewno chcesz usunąć tę korektę? Ta operacja jest nieodwracalna.
                    </template>

                    <template #footer>
                        <SecondaryButton @click="confirmingCorrectionDeletion = false">
                            Anuluj
                        </SecondaryButton>

                        <DangerButton
                            class="ml-3"
                            @click="deleteCorrection"
                        >
                            Usuń korektę
                        </DangerButton>
                    </template>
                </ConfirmationModal>
            </div>
        </div>
    </AppLayout>
</template>
