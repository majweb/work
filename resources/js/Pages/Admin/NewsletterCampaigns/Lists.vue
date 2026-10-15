<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import { Link } from '@inertiajs/vue3';
import { computed } from 'vue';

const props = defineProps({
    lists: Array,
    languageNames: Object,
    getResponseConfigured: Boolean,
    getResponseError: String,
});

const totals = computed(() => ({
    subscribers: props.lists.reduce((sum, row) => sum + row.subscribers, 0),
    pending: props.lists.reduce((sum, row) => sum + row.pending, 0),
    contacts: props.lists.reduce((sum, row) => sum + (row.contacts || 0), 0),
}));
</script>

<template>
    <AppLayout title="Newsletter – listy w GetResponse">
        <div class="py-12 bg-gray-50/50 min-h-screen px-2 sm:px-0">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-8">
                <div class="bg-white rounded-[3rem] shadow-xl shadow-blue-900/5 border border-gray-100 p-10">
                    <Link :href="route('admin.newsletter-campaigns.index')" class="text-[10px] font-bold text-gray-400 uppercase tracking-widest hover:text-[#0A2C5C]">← Wysyłki</Link>
                    <div class="mt-3 flex flex-col md:flex-row md:items-center justify-between gap-6">
                        <h3 class="text-2xl font-black text-[#0A2C5C] uppercase tracking-tight">Listy w GetResponse</h3>
                        <Link
                            :href="route('admin.newsletter.index')"
                            class="px-6 py-3 bg-white border border-gray-200 hover:border-[#0A2C5C] text-[#0A2C5C] rounded-2xl font-black text-[10px] uppercase tracking-[0.2em] transition-all text-center"
                        >
                            Wszyscy subskrybenci · eksport CSV
                        </Link>
                    </div>
                    <p class="mt-2 text-sm text-gray-500 max-w-3xl">
                        Każdy język ma w GetResponse własną listę kontaktów. Nowi subskrybenci trafiają na listę swojego języka od razu po zapisie na stronie.
                        Kliknij język, aby zobaczyć zapisane adresy.
                    </p>

                    <div v-if="!getResponseConfigured" class="mt-6 p-5 bg-red-50 border border-red-100 rounded-2xl text-sm font-medium text-red-700">
                        Brak połączenia z GetResponse (klucz <code>GETRESPONSE_API_KEY</code>) – widać tylko subskrybentów zapisanych w portalu.
                    </div>
                    <div v-else-if="getResponseError" class="mt-6 p-5 bg-red-50 border border-red-100 rounded-2xl text-sm font-medium text-red-700 break-words">
                        Nie udało się pobrać danych z GetResponse – widać tylko subskrybentów zapisanych w portalu. {{ getResponseError }}
                    </div>
                </div>

                <div class="bg-white rounded-[3rem] shadow-xl shadow-blue-900/5 border border-gray-100 overflow-hidden">
                    <div class="overflow-x-auto">
                        <table class="w-full text-left border-collapse">
                            <thead>
                                <tr class="border-b border-gray-50">
                                    <th class="px-10 py-6 text-[10px] font-black text-[#0A2C5C] uppercase tracking-[0.2em]">Język</th>
                                    <th class="px-10 py-6 text-[10px] font-black text-[#0A2C5C] uppercase tracking-[0.2em]">Lista w GetResponse</th>
                                    <th class="px-10 py-6 text-[10px] font-black text-[#0A2C5C] uppercase tracking-[0.2em]">Zapisani w portalu</th>
                                    <th class="px-10 py-6 text-[10px] font-black text-[#0A2C5C] uppercase tracking-[0.2em]">Czeka na przeniesienie</th>
                                    <th class="px-10 py-6 text-[10px] font-black text-[#0A2C5C] uppercase tracking-[0.2em]">Kontakty w GetResponse</th>
                                    <th class="px-10 py-6"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr v-for="row in lists" :key="row.locale" class="border-b border-gray-50 hover:bg-gray-50/50 transition-colors">
                                    <td class="px-10 py-6 whitespace-nowrap">
                                        <Link :href="route('admin.newsletter-lists.show', row.locale)" class="text-sm font-bold text-[#0A2C5C] hover:underline">
                                            {{ languageNames[row.locale] || row.locale }}
                                        </Link>
                                        <span class="text-sm text-gray-400"> ({{ row.locale }})</span>
                                    </td>
                                    <td class="px-10 py-6 text-sm">
                                        <code v-if="row.list_name" class="text-[#0A2C5C]">{{ row.list_name }}</code>
                                        <span v-else class="text-gray-400">{{ getResponseConfigured && !getResponseError ? 'jeszcze nie utworzona' : '–' }}</span>
                                    </td>
                                    <td class="px-10 py-6 text-sm font-bold text-[#0A2C5C]">{{ row.subscribers }}</td>
                                    <td class="px-10 py-6 text-sm">
                                        <span v-if="row.pending" class="px-3 py-1.5 bg-amber-50 text-amber-700 rounded-lg text-xs font-bold">{{ row.pending }}</span>
                                        <span v-else class="text-gray-400">0</span>
                                    </td>
                                    <td class="px-10 py-6 text-sm font-bold text-[#0A2C5C]">{{ row.contacts ?? '–' }}</td>
                                    <td class="px-10 py-6 text-right">
                                        <Link :href="route('admin.newsletter-lists.show', row.locale)" class="text-[10px] font-black text-[#0A2C5C] uppercase tracking-widest hover:underline">
                                            Kontakty
                                        </Link>
                                    </td>
                                </tr>
                                <tr v-if="lists.length" class="bg-gray-50/50">
                                    <td class="px-10 py-5 text-[10px] font-black text-[#0A2C5C] uppercase tracking-[0.2em]" colspan="2">Razem</td>
                                    <td class="px-10 py-5 text-sm font-black text-[#0A2C5C]">{{ totals.subscribers }}</td>
                                    <td class="px-10 py-5 text-sm font-black text-[#0A2C5C]">{{ totals.pending }}</td>
                                    <td class="px-10 py-5 text-sm font-black text-[#0A2C5C]">{{ getResponseConfigured && !getResponseError ? totals.contacts : '–' }}</td>
                                    <td></td>
                                </tr>
                                <tr v-else>
                                    <td colspan="6" class="px-10 py-12 text-center text-sm text-gray-400">Nikt jeszcze nie zapisał się na newsletter.</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <p class="text-xs text-gray-400 px-4 max-w-4xl">
                    Liczby w portalu i w GetResponse mogą się różnić: GetResponse odrzuca nieistniejące adresy, osoby wypisane z newslettera znikają z listy,
                    a kontakty dodane ręcznie w GetResponse nie są zapisane w portalu. Szczegóły widać po kliknięciu języka.
                </p>
            </div>
        </div>
    </AppLayout>
</template>
