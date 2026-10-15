<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import Pagination from '@/Components/Pagination.vue';
import { Link } from '@inertiajs/vue3';
import { computed } from 'vue';

const props = defineProps({
    campaigns: Object,
    audience: Array,
    languageNames: Object,
    getResponseConfigured: Boolean,
});

const totalSubscribers = computed(() => props.audience.reduce((sum, row) => sum + row.count, 0));

const summary = (campaign) => {
    const locales = campaign.locales || [];
    return {
        ready: locales.filter(l => l.status === 'draft_created').length,
        failed: locales.filter(l => l.status === 'failed').length,
        total: locales.length,
    };
};

const formatDate = (value) => new Date(value).toLocaleString('pl-PL', { dateStyle: 'medium', timeStyle: 'short' });
</script>

<template>
    <AppLayout title="Newsletter – wysyłki">
        <div class="py-12 bg-gray-50/50 min-h-screen px-2 sm:px-0">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-8">
                <!-- Nagłówek -->
                <div class="bg-white rounded-[3rem] shadow-xl shadow-blue-900/5 border border-gray-100 p-10">
                    <div class="flex flex-col md:flex-row md:items-center justify-between gap-8">
                        <div>
                            <h3 class="text-2xl font-black text-[#0A2C5C] uppercase tracking-tight">Newsletter – wysyłki</h3>
                            <p class="text-[10px] font-bold text-gray-400 uppercase tracking-widest mt-1">
                                Piszesz po polsku, tłumaczenia i szkice w GetResponse przygotowują się same
                            </p>
                        </div>
                        <div class="flex flex-col sm:flex-row gap-3">
                            <a
                                :href="route('admin.newsletter-campaigns.guide')"
                                class="px-8 py-4 bg-white border border-gray-200 hover:border-[#0A2C5C] text-[#0A2C5C] rounded-2xl font-black text-[10px] uppercase tracking-[0.2em] transition-all active:scale-95 text-center"
                            >
                                Instrukcja (PDF)
                            </a>
                            <Link
                                :href="route('admin.newsletter-campaigns.create')"
                                class="px-8 py-4 bg-[#0A2C5C] hover:bg-[#0D356D] text-white rounded-2xl font-black text-[10px] uppercase tracking-[0.2em] transition-all shadow-lg active:scale-95 text-center"
                            >
                                Nowa wysyłka
                            </Link>
                        </div>
                    </div>

                    <div v-if="!getResponseConfigured" class="mt-8 p-5 bg-red-50 border border-red-100 rounded-2xl text-sm font-medium text-red-700">
                        Brak połączenia z GetResponse (klucz <code>GETRESPONSE_API_KEY</code>). Wysyłki można przygotować dopiero po jego ustawieniu.
                    </div>

                    <div class="mt-8">
                        <p class="text-[10px] font-black text-[#0A2C5C] uppercase tracking-[0.2em] mb-3">
                            Subskrybenci według języka · razem {{ totalSubscribers }}
                        </p>
                        <div v-if="audience.length" class="flex flex-wrap gap-2">
                            <span v-for="row in audience" :key="row.locale" class="px-4 py-2 bg-gray-50 rounded-xl text-xs font-bold text-[#0A2C5C]">
                                {{ languageNames[row.locale] || row.locale }} <span class="text-gray-400">· {{ row.count }}</span>
                            </span>
                        </div>
                        <p v-else class="text-sm text-gray-400">Nikt jeszcze nie zapisał się na newsletter.</p>
                    </div>
                </div>

                <!-- Lista wysyłek -->
                <div class="bg-white rounded-[3rem] shadow-xl shadow-blue-900/5 border border-gray-100 overflow-hidden">
                    <div class="overflow-x-auto">
                        <table class="w-full text-left border-collapse">
                            <thead>
                                <tr class="border-b border-gray-50">
                                    <th class="px-10 py-6 text-[10px] font-black text-[#0A2C5C] uppercase tracking-[0.2em]">Data</th>
                                    <th class="px-10 py-6 text-[10px] font-black text-[#0A2C5C] uppercase tracking-[0.2em]">Temat</th>
                                    <th class="px-10 py-6 text-[10px] font-black text-[#0A2C5C] uppercase tracking-[0.2em]">Autor</th>
                                    <th class="px-10 py-6 text-[10px] font-black text-[#0A2C5C] uppercase tracking-[0.2em]">Szkice w GetResponse</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr v-for="campaign in campaigns.data" :key="campaign.id" class="border-b border-gray-50 hover:bg-gray-50/50 transition-colors">
                                    <td class="px-10 py-6 text-sm text-gray-500 whitespace-nowrap">{{ formatDate(campaign.created_at) }}</td>
                                    <td class="px-10 py-6">
                                        <Link :href="route('admin.newsletter-campaigns.show', campaign.id)" class="text-sm font-bold text-[#0A2C5C] hover:underline">
                                            {{ campaign.subject }}
                                        </Link>
                                    </td>
                                    <td class="px-10 py-6 text-sm text-gray-500">{{ campaign.author?.name || '–' }}</td>
                                    <td class="px-10 py-6">
                                        <span class="text-sm font-bold text-[#0A2C5C]">{{ summary(campaign).ready }} / {{ summary(campaign).total }}</span>
                                        <span v-if="summary(campaign).failed" class="ml-2 px-2 py-1 bg-red-50 text-red-600 rounded-lg text-[10px] font-black uppercase tracking-widest">
                                            błędy: {{ summary(campaign).failed }}
                                        </span>
                                    </td>
                                </tr>
                                <tr v-if="!campaigns.data.length">
                                    <td colspan="4" class="px-10 py-12 text-center text-sm text-gray-400">Nie ma jeszcze żadnej wysyłki.</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <Pagination v-if="campaigns.links?.length > 3" :links="campaigns.links" />
            </div>
        </div>
    </AppLayout>
</template>
