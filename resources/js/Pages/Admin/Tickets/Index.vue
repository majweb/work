<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import { Link, router } from '@inertiajs/vue3';
import { ref, watch } from 'vue';
import pickBy from 'lodash/pickBy';
import Pagination from '@/Components/Pagination.vue';
import DialogModal from '@/Components/DialogModal.vue';
import SecondaryButton from '@/Components/SecondaryButton.vue';

const props = defineProps({
    tickets: Object,
    filters: Object,
});

const filters = ref({
    subject: props.filters.subject || '',
    type: props.filters.type || '',
    user: props.filters.user || '',
    is_read: props.filters.is_read || '',
});

const showingTicket = ref(null);
const closeModal = () => {
    showingTicket.value = null;
};

const showTicket = (ticket) => {
    showingTicket.value = ticket;
    if (!ticket.is_read) {
        router.post(route('admin.tickets.markAsRead', ticket.id), {}, {
            preserveScroll: true,
            preserveState: true,
            onSuccess: () => {
                ticket.is_read = true;
            }
        });
    }
};

const updateFilters = () => {
    router.get(route('admin.tickets.index'), pickBy(filters.value), {
        preserveState: true,
        preserveScroll: true,
        replace: true
    });
};

watch(() => filters.value, () => {
    updateFilters();
}, { deep: true });

const exportToCsv = () => {
    window.location.href = route('admin.tickets.export', pickBy(filters.value));
};

const getTypeLabel = (type) => {
    const labels = {
        'question': 'Pytanie',
        'tech_problem': 'Problem techniczny',
        'new_feature': 'Nowa funkcja'
    };
    return labels[type] || type;
};

const getTypeClass = (type) => {
    const classes = {
        'question': 'bg-blue-50 text-blue-600',
        'tech_problem': 'bg-red-50 text-red-600',
        'new_feature': 'bg-green-50 text-green-600'
    };
    return classes[type] || 'bg-gray-50 text-gray-600';
};
</script>

<template>
    <AppLayout title="Zgłoszenia">
        <div class="py-12 bg-gray-50/50 min-h-screen px-2 sm:px-0">
            <div class="max-w-[1600px] mx-auto sm:px-6 lg:px-8">
                <!-- Header Section -->
                <div class="bg-white rounded-[3rem] shadow-xl shadow-blue-900/5 border border-gray-100 p-10 mb-8">
                    <div class="flex flex-col md:flex-row md:items-center justify-between gap-8">
                        <div>
                            <h3 class="text-2xl font-black text-[#0A2C5C] uppercase tracking-tight">Bezpieczeństwo - Zgłoszenia</h3>
                            <p class="text-[10px] font-bold text-gray-400 uppercase tracking-widest mt-1">
                                Zarządzanie zgłoszeniami użytkowników i ich filtrowanie
                            </p>
                        </div>

                        <button
                            @click="exportToCsv"
                            class="px-8 py-4 bg-[#0A2C5C] hover:bg-[#0d3671] text-white rounded-2xl font-black text-xs uppercase tracking-widest transition-all active:scale-95 shadow-lg shadow-blue-900/20 flex items-center gap-2"
                        >
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor" class="w-4 h-4">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M3 16.5v2.25A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75V16.5M7.5 12 12 16.5m0 0L16.5 12M12 16.5V3" />
                            </svg>
                            Eksportuj CSV
                        </button>
                    </div>
                </div>

                <!-- Filters -->
                <div class="bg-white rounded-[3rem] shadow-xl shadow-blue-900/5 border border-gray-100 p-8 mb-8">
                    <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
                        <div class="relative group">
                            <label class="text-[10px] font-black text-gray-400 uppercase tracking-widest mb-2 block ml-4">Temat</label>
                            <input
                                v-model="filters.subject"
                                type="text"
                                placeholder="Szukaj po temacie..."
                                class="block w-full px-6 py-4 bg-gray-50 border-none rounded-2xl text-sm focus:ring-2 focus:ring-blue-500/20 focus:bg-white transition-all font-medium"
                            />
                        </div>
                        <div class="relative group">
                            <label class="text-[10px] font-black text-gray-400 uppercase tracking-widest mb-2 block ml-4">Użytkownik</label>
                            <input
                                v-model="filters.user"
                                type="text"
                                placeholder="Szukaj po użytkowniku..."
                                class="block w-full px-6 py-4 bg-gray-50 border-none rounded-2xl text-sm focus:ring-2 focus:ring-blue-500/20 focus:bg-white transition-all font-medium"
                            />
                        </div>
                        <div class="relative group">
                            <label class="text-[10px] font-black text-gray-400 uppercase tracking-widest mb-2 block ml-4">Typ zgłoszenia</label>
                            <select
                                v-model="filters.type"
                                class="block w-full px-6 py-4 bg-gray-50 border-none rounded-2xl text-sm focus:ring-2 focus:ring-blue-500/20 focus:bg-white transition-all font-medium appearance-none"
                            >
                                <option value="">Wszystkie typy</option>
                                <option value="question">Pytanie</option>
                                <option value="tech_problem">Problem techniczny</option>
                                <option value="new_feature">Nowa funkcja</option>
                            </select>
                        </div>
                        <div class="relative group">
                            <label class="text-[10px] font-black text-gray-400 uppercase tracking-widest mb-2 block ml-4">Status</label>
                            <select
                                v-model="filters.is_read"
                                class="block w-full px-6 py-4 bg-gray-50 border-none rounded-2xl text-sm focus:ring-2 focus:ring-blue-500/20 focus:bg-white transition-all font-medium appearance-none"
                            >
                                <option value="">Wszystkie statusy</option>
                                <option value="no">Nieprzeczytane</option>
                                <option value="yes">Przeczytane</option>
                            </select>
                        </div>
                    </div>
                </div>

                <!-- Table -->
                <div class="bg-white rounded-[3rem] shadow-xl shadow-blue-900/5 border border-gray-100 overflow-hidden">
                    <div class="overflow-x-auto">
                        <table class="w-full text-left border-collapse">
                            <thead>
                                <tr class="border-b border-gray-50">
                                    <th class="p-8 text-[10px] font-black text-[#0A2C5C] uppercase tracking-[0.2em]">ID</th>
                                    <th class="p-8 text-[10px] font-black text-[#0A2C5C] uppercase tracking-[0.2em]">Użytkownik</th>
                                    <th class="p-8 text-[10px] font-black text-[#0A2C5C] uppercase tracking-[0.2em]">Temat</th>
                                    <th class="p-8 text-[10px] font-black text-[#0A2C5C] uppercase tracking-[0.2em]">Typ</th>
                                    <th class="p-8 text-[10px] font-black text-[#0A2C5C] uppercase tracking-[0.2em]">Data utworzenia</th>
                                    <th class="p-8 text-[10px] font-black text-[#0A2C5C] uppercase tracking-[0.2em] text-right">Akcje</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-50">
                                <tr v-for="ticket in tickets.data" :key="ticket.id" class="group hover:bg-blue-50/30 transition-colors cursor-pointer" @click="showTicket(ticket)">
                                    <td class="p-8 relative">
                                        <div v-if="!ticket.is_read" class="absolute left-4 top-1/2 -translate-y-1/2 w-2 h-2 bg-blue-500 rounded-full shadow-lg shadow-blue-500/50"></div>
                                        <span :class="['text-sm font-black transition-colors', !ticket.is_read ? 'text-blue-600' : 'text-[#0A2C5C]']">#{{ ticket.id }}</span>
                                    </td>
                                    <td class="p-8">
                                        <div class="flex flex-col">
                                            <span :class="['text-sm font-black transition-colors', !ticket.is_read ? 'text-blue-600' : 'text-[#0A2C5C]']">{{ ticket.user?.name }}</span>
                                            <span class="text-[10px] font-bold text-gray-400 uppercase tracking-widest">{{ ticket.user?.email }}</span>
                                        </div>
                                    </td>
                                    <td class="p-8">
                                        <span :class="['text-sm transition-colors line-clamp-1', !ticket.is_read ? 'text-blue-600 font-black' : 'text-gray-600 font-medium']">{{ ticket.subject }}</span>
                                    </td>
                                    <td class="p-8">
                                        <span :class="['text-[10px] font-black uppercase tracking-widest px-4 py-2 rounded-xl', getTypeClass(ticket.type)]">
                                            {{ getTypeLabel(ticket.type) }}
                                        </span>
                                    </td>
                                    <td class="p-8">
                                        <span class="text-sm font-medium text-gray-400">{{ new Date(ticket.created_at).toLocaleString() }}</span>
                                    </td>
                                    <td class="p-8 text-right">
                                        <button
                                            @click.stop="showTicket(ticket)"
                                            class="text-[10px] font-black text-blue-600 uppercase tracking-widest hover:text-blue-800 transition-colors"
                                        >
                                            Pokaż treść
                                        </button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <div v-if="tickets.data.length === 0" class="p-20 text-center">
                        <div class="inline-flex items-center justify-center w-20 h-20 bg-gray-50 rounded-full mb-6">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-8 h-8 text-gray-300">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 12h3.75M9 15h3.375m1.875-10.125h-9.75a2.25 2.25 0 0 0-2.25 2.25v12.75a2.25 2.25 0 0 0 2.25 2.25h11.25a2.25 2.25 0 0 0 2.25-2.25V7.5L14.25 3.75Z" />
                            </svg>
                        </div>
                        <h3 class="text-lg font-black text-[#0A2C5C] uppercase tracking-tight">Brak zgłoszeń</h3>
                        <p class="text-sm text-gray-400 font-medium mt-1">Nie znaleziono zgłoszeń pasujących do wybranych filtrów.</p>
                    </div>

                    <div class="p-8 border-t border-gray-50">
                        <Pagination :links="tickets.links" />
                    </div>
                </div>
            </div>
        </div>

        <!-- Ticket Content Modal -->
        <DialogModal :show="!!showingTicket" @close="closeModal" max-width="xl">
            <template #title>
                Szczegóły zgłoszenia #{{ showingTicket?.id }}
            </template>

            <template #content>
                <div class="space-y-6">
                    <div class="flex flex-wrap gap-4 items-center justify-between bg-gray-50 p-6 rounded-[2rem]">
                        <div>
                            <span class="text-[10px] font-black text-gray-400 uppercase tracking-widest block mb-1">Użytkownik</span>
                            <div class="flex flex-col">
                                <span class="text-sm font-black text-[#0A2C5C]">{{ showingTicket?.user?.name }}</span>
                                <span class="text-[10px] font-bold text-gray-400 uppercase tracking-widest">{{ showingTicket?.user?.email }}</span>
                            </div>
                        </div>
                        <div>
                            <span class="text-[10px] font-black text-gray-400 uppercase tracking-widest block mb-1">Typ</span>
                            <span :class="['text-[10px] font-black uppercase tracking-widest px-4 py-2 rounded-xl', getTypeClass(showingTicket?.type)]">
                                {{ getTypeLabel(showingTicket?.type) }}
                            </span>
                        </div>
                        <div>
                            <span class="text-[10px] font-black text-gray-400 uppercase tracking-widest block mb-1">Data</span>
                            <span class="text-sm font-bold text-[#0A2C5C]">{{ showingTicket ? new Date(showingTicket.created_at).toLocaleString() : '' }}</span>
                        </div>
                    </div>

                    <div class="px-6">
                        <span class="text-[10px] font-black text-gray-400 uppercase tracking-widest block mb-2">Temat</span>
                        <h4 class="text-lg font-black text-[#0A2C5C] uppercase tracking-tight">{{ showingTicket?.subject }}</h4>
                    </div>

                    <div class="px-6 pb-6 border-t border-gray-100 pt-6">
                        <span class="text-[10px] font-black text-gray-400 uppercase tracking-widest block mb-4">Treść wiadomości</span>
                        <div class="bg-blue-50/30 p-8 rounded-[2rem] text-sm font-medium text-gray-600 leading-relaxed whitespace-pre-wrap border border-blue-100/50">
                            {{ showingTicket?.content }}
                        </div>
                    </div>
                </div>
            </template>

            <template #footer>
                <SecondaryButton @click="closeModal" class="rounded-xl px-8">
                    Zamknij
                </SecondaryButton>
            </template>
        </DialogModal>
    </AppLayout>
</template>
