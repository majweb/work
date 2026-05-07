<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import { Link, router } from '@inertiajs/vue3';
import { ref, watch } from 'vue';
import { debounce, pickBy } from 'lodash';
import Pagination from "@/Components/Pagination.vue";
import DialogModal from '@/Components/DialogModal.vue';
import SecondaryButton from '@/Components/SecondaryButton.vue';
import DangerButton from '@/Components/DangerButton.vue';
import __ from '@/lang.js';
import axios from 'axios';

const props = defineProps({
    histories: Object,
    filters: Object,
    stats: Object,
    availableActions: Array,
    selectedUser: Object,
});

const isExporting = ref(false);
const confirmingHistoryDeletion = ref(false);

const form = ref({
    firm: props.filters.firm || '',
    type: props.filters.type || '',
    action_name: props.filters.action_name || '',
    user_id: props.filters.user_id || '',
});

const resetFilters = () => {
    form.value = {
        firm: '',
        type: '',
        action_name: '',
        user_id: '',
    };
};

watch(form, debounce(function (value) {
    router.get(route('admin.finance.points.index'), pickBy(value), {
        preserveState: true,
        replace: true,
    });
}, 300), { deep: true });

const exportToExcel = async () => {
    isExporting.value = true;
    try {
        const response = await axios.get(route('admin.finance.points.export'), {
            params: form.value,
            responseType: 'blob',
        });

        const url = window.URL.createObjectURL(new Blob([response.data]));
        const link = document.createElement('a');
        link.href = url;
        link.setAttribute('download', `kredyty_${new Date().toISOString().split('T')[0]}.xlsx`);
        document.body.appendChild(link);
        link.click();
        link.remove();
    } catch (error) {
        alert('Wystąpił błąd przy eksporcie.');
    } finally {
        isExporting.value = false;
    }
};

const formatDate = (date) => {
    if (!date) return '-';
    return new Date(date).toLocaleString('pl-PL', {
        year: 'numeric',
        month: '2-digit',
        day: '2-digit',
        hour: '2-digit',
        minute: '2-digit'
    });
};

const formatPoints = (points, type) => {
    const prefix = type === 'purchase' ? '+' : '';
    return `${prefix}${points.toLocaleString()} pkt`;
};

const actionTranslations = {
    'UnlockQuestions': 'Odblokowanie pytań',
    'CreateCandidate': 'Utworzenie kandydata',
    'ExportAplications': 'Eksport aplikacji',
    'CreateExternalFirm': 'Utworzenie firmy zewnętrznej',
    'AddVideoToProfile': 'Dodanie wideo do profilu',
    'OpenAppWithVideo': 'Otwarcie aplikacji z wideo',
    'OpenAppWithPdf': 'Otwarcie aplikacji z PDF',
    'OpenAppWithAudio': 'Otwarcie aplikacji z audio',
    'OpenAppWithNoAuth': 'Odczytanie CV bez autoryzacji',
    'sendReservedProject': 'Wysłanie zarezerwowanego projektu',
    'BuyProduct': 'Zakup produktu',
    'Purchase': 'Zakup',
    'Purchase: Points': 'Zakup punktów',
    'Purchase: Points (webhook)': 'Zakup punktów (webhook)',
    'Admin: Manually added credits': 'Admin: Ręcznie dodane kredyty',
    'Admin: Manually set credits': 'Admin: Ręcznie ustawione kredyty',
    'SendToExternalFirm': 'Wysłanie do firmy zewnętrznej',
};

const translateAction = (action) => {
    if (!action) return '-';

    if (actionTranslations[action]) {
        return actionTranslations[action];
    }

    const parts = action.split(':');
    const baseAction = parts[0].trim();

    // Dynamiczne tłumaczenie dla "BuyProduct: Nazwa produktu"
    if (baseAction === 'BuyProduct' && parts.length > 1) {
        const productName = parts.slice(1).join(':').trim();
        return `Zakup produktu: ${productName}`;
    }

    if (parts.length > 1) {
        const prefix = actionTranslations[baseAction] || baseAction;
        return `${prefix}: ${parts.slice(1).join(':').trim()}`;
    }

    return actionTranslations[baseAction] || action;
};

const clearHistory = () => {
    if (!props.selectedUser) return;

    router.delete(route('admin.finance.points.clear', props.selectedUser.id), {
        preserveScroll: true,
        onSuccess: () => {
            confirmingHistoryDeletion.value = false;
        },
    });
};
</script>

<template>
    <AppLayout title="Finanse - Kredyty">
        <div class="py-12 bg-gray-50/50 min-h-screen px-2 sm:px-0">
            <div class="max-w-[1600px] mx-auto sm:px-6 lg:px-8">
                <!-- Header & Stats -->
                <div class="mb-8">
                    <div class="flex justify-between items-center mb-8">
                        <div class="flex items-center gap-6">
                            <div class="w-16 h-16 bg-gradient-to-br from-[#0A2C5C] to-blue-900 rounded-3xl flex items-center justify-center text-white shadow-lg">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-8 h-8">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v12m-3-2.818.879.659c1.171.879 3.07.879 4.242 0 1.172-.879 1.172-2.303 0-3.182C13.536 12.219 12.768 12 12 12c-.725 0-1.45-.22-2.003-.659-1.106-.879-1.106-2.303 0-3.182s2.9-.879 4.006 0l.415.33M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                </svg>
                            </div>
                            <div>
                                <h2 class="text-2xl font-black text-[#0A2C5C] uppercase tracking-tight">
                                    Finanse - Kredyty
                                    <span v-if="selectedUser" class="text-blue-500 inline-flex items-center gap-2">
                                        | {{ selectedUser.name }}
                                        <button @click="form.user_id = ''" class="p-1 hover:bg-blue-100 rounded-full transition-colors text-blue-400 hover:text-blue-600" title="Usuń filtr firmy">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor" class="w-4 h-4">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                                            </svg>
                                        </button>
                                    </span>
                                </h2>
                                <p class="text-[10px] font-bold text-gray-400 uppercase tracking-widest mt-1">Zarządzanie historią punktów kredytowych</p>
                            </div>
                        </div>
                        <button
                            @click="exportToExcel"
                            :disabled="isExporting"
                            class="px-10 py-4 bg-[#0A2C5C] text-white text-[10px] font-black uppercase tracking-widest rounded-2xl hover:bg-[#00a0e3] disabled:opacity-50 disabled:cursor-not-allowed transition-all shadow-lg shadow-blue-900/20 hover:-translate-y-0.5 active:translate-y-0"
                        >
                            {{ isExporting ? 'EKSPORTOWANIE...' : 'EKSPORTUJ DO ARKUSZA' }}
                        </button>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                        <div class="bg-white rounded-[2.5rem] p-8 shadow-xl shadow-blue-900/5 border border-gray-100 flex items-center gap-6 transition-all hover:shadow-blue-900/10">
                            <div class="w-16 h-16 bg-green-50 rounded-2xl flex items-center justify-center">
                                <img src="/images/icons/statistics/views.svg" alt="" class="w-10 h-10">
                            </div>
                            <div>
                                <p class="text-[10px] font-black text-gray-400 uppercase tracking-widest mb-1">Łączna liczba zakupionych kredytów</p>
                                <p class="text-3xl font-black text-[#0A2C5C]">{{ stats.total_purchased.toLocaleString() }}</p>
                            </div>
                        </div>

                        <div class="bg-white rounded-[2.5rem] p-8 shadow-xl shadow-blue-900/5 border border-gray-100 flex items-center gap-6 transition-all hover:shadow-blue-900/10">
                            <div class="w-16 h-16 bg-red-50 rounded-2xl flex items-center justify-center">
                                <img src="/images/icons/statistics/apps.svg" alt="" class="w-10 h-10">
                            </div>
                            <div>
                                <p class="text-[10px] font-black text-gray-400 uppercase tracking-widest mb-1">Łączna liczba wykorzystanych kredytów</p>
                                <p class="text-3xl font-black text-[#0A2C5C]">{{ stats.total_used.toLocaleString() }}</p>
                            </div>
                        </div>

                        <div class="bg-white rounded-[2.5rem] p-8 shadow-xl shadow-blue-900/5 border border-gray-100 flex items-center gap-6 transition-all hover:shadow-blue-900/10">
                            <div class="w-16 h-16 bg-blue-50 rounded-2xl flex items-center justify-center">
                                <img src="/images/icons/statistics/recruits.svg" alt="" class="w-10 h-10">
                            </div>
                            <div>
                                <p class="text-[10px] font-black text-gray-400 uppercase tracking-widest mb-1">Firmy z aktywnymi kredytami</p>
                                <p class="text-3xl font-black text-[#0A2C5C]">{{ stats.active_firms_count }}</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Filters -->
                <div class="bg-white rounded-[3rem] shadow-xl shadow-blue-900/5 border border-gray-100 p-8 mb-8">
                    <h3 class="text-xl font-black text-[#0A2C5C] uppercase tracking-tight mb-6">Filtrowanie</h3>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                        <div>
                            <label class="block text-[10px] font-black text-gray-400 mb-2 uppercase tracking-widest">Firma</label>
                            <input v-model="form.firm" type="text" placeholder="Szukaj firmy..." class="block w-full py-4 bg-gray-50 border-none rounded-2xl text-[11px] font-black uppercase tracking-widest focus:ring-2 focus:ring-blue-500/20 transition-all px-6"/>
                        </div>
                        <div>
                            <label class="block text-[10px] font-black text-gray-400 mb-2 uppercase tracking-widest">Operacja</label>
                            <select v-model="form.type" class="block w-full py-4 bg-gray-50 border-none rounded-2xl text-[11px] font-black uppercase tracking-widest focus:ring-2 focus:ring-blue-500/20 transition-all px-6 h-[54px]">
                                <option value="">Wszystkie operacje</option>
                                <option value="purchase">ZAKUP</option>
                                <option value="usage">ZUŻYCIE</option>
                            </select>
                        </div>
                        <div>
                            <label class="block text-[10px] font-black text-gray-400 mb-2 uppercase tracking-widest">Szczegóły</label>
                            <select v-model="form.action_name" class="block w-full py-4 bg-gray-50 border-none rounded-2xl text-[11px] font-black uppercase tracking-widest focus:ring-2 focus:ring-blue-500/20 transition-all px-6 h-[54px]">
                                <option value="">Wszystkie akcje</option>
                                <option v-for="action in availableActions" :key="action.id" :value="action.id">
                                    {{ action.name }}
                                </option>
                            </select>
                        </div>
                    </div>
                    <div class="mt-6 flex justify-end gap-4">
                        <button v-if="selectedUser && selectedUser.has_history" @click="confirmingHistoryDeletion = true" class="px-8 py-3 bg-red-600 hover:bg-red-700 text-white rounded-2xl font-black text-[10px] uppercase tracking-widest transition-all active:scale-95 flex items-center gap-2 shadow-lg shadow-red-900/20">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor" class="w-4 h-4">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                            </svg>
                            USUŃ HISTORIĘ
                        </button>
                        <button v-if="selectedUser" @click="form.user_id = ''" class="px-8 py-3 bg-red-50 hover:bg-red-100 text-red-600 rounded-2xl font-black text-[10px] uppercase tracking-widest transition-all active:scale-95 flex items-center gap-2 border border-red-100">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor" class="w-4 h-4">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                            WYŁĄCZ UŻYTKOWNIKA
                        </button>
                        <Link v-if="selectedUser" :href="`/logged/firms/${selectedUser.id}/credits`" class="px-8 py-3 bg-blue-500 hover:bg-blue-600 text-white rounded-2xl font-black text-[10px] uppercase tracking-widest transition-all active:scale-95 flex items-center gap-2 shadow-lg shadow-blue-900/10 border border-blue-400/20">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor" class="w-4 h-4">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v12m-3-2.818.879.659c1.171.879 3.07.879 4.242 0 1.172-.879 1.172-2.303 0-3.182C13.536 12.219 12.768 12 12 12c-.725 0-1.45-.22-2.003-.659-1.106-.879-1.106-2.303 0-3.182s2.9-.879 4.006 0l.415.33M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                            </svg>
                            ZARZĄDZAJ KREDYTAMI
                        </Link>
                        <button @click="resetFilters" class="px-8 py-3 bg-gray-100 hover:bg-gray-200 text-gray-600 rounded-2xl font-black text-[10px] uppercase tracking-widest transition-all active:scale-95">
                            RESETUJ FILTRY
                        </button>
                    </div>
                </div>

                <!-- Table -->
                <div class="bg-white rounded-[3rem] shadow-xl shadow-blue-900/5 border border-gray-100 overflow-hidden">
                    <table class="w-full text-left border-collapse">
                        <thead>
                            <tr class="border-b border-gray-50 text-[10px] font-black text-[#0A2C5C] uppercase tracking-[0.2em]">
                                <th class="p-8">FIRMA</th>
                                <th class="p-8">OPERACJA</th>
                                <th class="p-8">SZCZEGÓŁY</th>
                                <th class="p-8">WARTOŚĆ</th>
                                <th class="p-8">AKTUALNE SALDO</th>
                                <th class="p-8 text-right">AKCJE</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr v-for="history in histories.data" :key="history.id" class="group hover:bg-blue-50/30 transition-all duration-300 border-b border-gray-50 last:border-none">
                                <td class="p-8">
                                    <div class="flex flex-col gap-1">
                                        <div class="text-xs font-black text-[#0A2C5C] uppercase tracking-tight">
                                            {{ history.user?.firm?.name || history.user?.name }}
                                        </div>
                                    </div>
                                </td>
                                <td class="p-8">
                                    <div class="text-[10px] font-black uppercase tracking-widest" :class="history.type === 'purchase' ? 'text-green-500' : 'text-gray-400'">
                                        {{ history.type === 'purchase' ? 'ZAKUP' : 'ZUŻYCIE' }}
                                    </div>
                                </td>
                                <td class="p-8">
                                    <div class="text-[10px] font-bold text-gray-400 uppercase tracking-widest">
                                        {{ translateAction(history.action_name) }}
                                    </div>
                                </td>
                                <td class="p-8">
                                    <div class="text-[10px] font-black uppercase tracking-widest" :class="history.type === 'purchase' ? 'text-green-500' : 'text-red-500'">
                                        {{ formatPoints(history.points, history.type) }}
                                    </div>
                                </td>
                                <td class="p-8">
                                    <div class="text-[10px] font-black text-[#0A2C5C] uppercase tracking-widest">
                                        {{ history.balance_after.toLocaleString() }} pkt
                                    </div>
                                </td>
                                <td class="p-8 text-right">
                                    <button @click="form.user_id = history.user_id" class="px-3 py-1.5 bg-gray-50 hover:bg-gray-100 text-gray-600 rounded-lg font-black text-[9px] uppercase tracking-widest transition-all whitespace-nowrap border border-gray-100">
                                        HISTORIA
                                    </button>
                                </td>
                            </tr>
                            <tr v-if="histories.data.length === 0">
                                <td colspan="6" class="p-20 text-center">
                                    <div class="flex flex-col items-center gap-4 text-gray-300">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1" stroke="currentColor" class="w-20 h-20">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v12m-3-2.818.879.659c1.171.879 3.07.879 4.242 0 1.172-.879 1.172-2.303 0-3.182C13.536 12.219 12.768 12 12 12c-.725 0-1.45-.22-2.003-.659-1.106-.879-1.106-2.303 0-3.182s2.9-.879 4.006 0l.415.33M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                        </svg>
                                        <p class="text-xl font-black uppercase tracking-widest">Brak danych</p>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="mt-8">
                    <Pagination :links="histories.links" />
                </div>
            </div>
        </div>

        <!-- Deletion Confirmation Modal -->
        <DialogModal :show="confirmingHistoryDeletion" @close="confirmingHistoryDeletion = false">
            <template #title>
                Usuń historię kredytową
            </template>

            <template #content>
                Czy na pewno chcesz usunąć całą historię punktów kredytowych dla firmy <span class="font-bold">{{ selectedUser?.name }}</span>? tej operacji nie można cofnąć.
            </template>

            <template #footer>
                <SecondaryButton @click="confirmingHistoryDeletion = false">
                    Anuluj
                </SecondaryButton>

                <DangerButton class="ml-3" @click="clearHistory">
                    Usuń historię
                </DangerButton>
            </template>
        </DialogModal>
    </AppLayout>
</template>
