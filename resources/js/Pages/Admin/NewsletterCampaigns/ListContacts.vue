<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import Pagination from '@/Components/Pagination.vue';
import DeleteSubscriberButton from '@/Components/Newsletter/DeleteSubscriberButton.vue';
import { Link, router } from '@inertiajs/vue3';
import { ref } from 'vue';

const props = defineProps({
    locale: String,
    languageName: String,
    listName: String,
    subscribers: Object,
    pendingCount: Number,
    contactsCount: Number,
    onlyInGetResponse: Array,
    filters: Object,
    getResponseConfigured: Boolean,
    getResponseError: String,
});

const STATUS = {
    on_list: { label: 'Na liście', class: 'bg-green-50 text-green-700' },
    pending: { label: 'Czeka na przeniesienie', class: 'bg-amber-50 text-amber-700' },
    missing: { label: 'Brak w GetResponse', class: 'bg-red-50 text-red-600' },
    synced: { label: 'Przeniesiony', class: 'bg-gray-100 text-gray-500' },
};

const search = ref(props.filters?.search || '');
const syncing = ref(false);

const applySearch = () => {
    router.get(route('admin.newsletter-lists.show', props.locale), search.value ? { search: search.value } : {}, { preserveState: true, replace: true });
};

const refresh = () => {
    router.get(route('admin.newsletter-lists.show', props.locale), { ...(search.value ? { search: search.value } : {}), refresh: 1 }, { preserveState: true, replace: true });
};

const syncPending = () => {
    router.post(route('admin.newsletter-lists.sync', props.locale), {}, {
        preserveScroll: true,
        onStart: () => (syncing.value = true),
        onFinish: () => (syncing.value = false),
    });
};

const formatDate = (value) => (value ? new Date(value).toLocaleString('pl-PL', { dateStyle: 'medium', timeStyle: 'short' }) : '–');
</script>

<template>
    <AppLayout :title="`Newsletter – ${languageName}`">
        <div class="py-12 bg-gray-50/50 min-h-screen px-2 sm:px-0">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-8">
                <div class="bg-white rounded-[3rem] shadow-xl shadow-blue-900/5 border border-gray-100 p-10">
                    <Link :href="route('admin.newsletter-lists.index')" class="text-[10px] font-bold text-gray-400 uppercase tracking-widest hover:text-[#0A2C5C]">← Listy w GetResponse</Link>
                    <div class="mt-3 flex flex-col md:flex-row md:items-end justify-between gap-6">
                        <div>
                            <h3 class="text-2xl font-black text-[#0A2C5C] uppercase tracking-tight">{{ languageName }} <span class="text-gray-300">({{ locale }})</span></h3>
                            <p class="mt-1 text-sm text-gray-500">Lista w GetResponse: <code class="text-[#0A2C5C]">{{ listName }}</code></p>
                        </div>
                        <div class="flex flex-wrap gap-3">
                            <button
                                v-if="pendingCount && getResponseConfigured"
                                type="button"
                                :disabled="syncing"
                                class="px-6 py-3 bg-[#0A2C5C] hover:bg-[#0D356D] text-white rounded-2xl font-black text-[10px] uppercase tracking-[0.2em] transition-all disabled:opacity-50"
                                @click="syncPending"
                            >
                                Przenieś czekających ({{ pendingCount }})
                            </button>
                            <button
                                v-if="getResponseConfigured"
                                type="button"
                                class="px-6 py-3 bg-white border border-gray-200 hover:border-[#0A2C5C] text-[#0A2C5C] rounded-2xl font-black text-[10px] uppercase tracking-[0.2em] transition-all"
                                @click="refresh"
                            >
                                Odśwież z GetResponse
                            </button>
                        </div>
                    </div>

                    <div class="mt-8 grid grid-cols-1 sm:grid-cols-3 gap-4">
                        <div class="p-5 bg-gray-50 rounded-2xl">
                            <p class="text-[10px] font-black text-gray-400 uppercase tracking-[0.2em]">Zapisani w portalu</p>
                            <p class="mt-1 text-2xl font-black text-[#0A2C5C]">{{ subscribers.total }}</p>
                        </div>
                        <div class="p-5 bg-gray-50 rounded-2xl">
                            <p class="text-[10px] font-black text-gray-400 uppercase tracking-[0.2em]">Kontakty w GetResponse</p>
                            <p class="mt-1 text-2xl font-black text-[#0A2C5C]">{{ contactsCount ?? '–' }}</p>
                        </div>
                        <div class="p-5 bg-gray-50 rounded-2xl">
                            <p class="text-[10px] font-black text-gray-400 uppercase tracking-[0.2em]">Czeka na przeniesienie</p>
                            <p class="mt-1 text-2xl font-black" :class="pendingCount ? 'text-amber-600' : 'text-[#0A2C5C]'">{{ pendingCount }}</p>
                        </div>
                    </div>

                    <div v-if="!getResponseConfigured" class="mt-6 p-5 bg-red-50 border border-red-100 rounded-2xl text-sm font-medium text-red-700">
                        Brak połączenia z GetResponse (klucz <code>GETRESPONSE_API_KEY</code>) – nie da się sprawdzić, kto jest na liście.
                    </div>
                    <div v-else-if="getResponseError" class="mt-6 p-5 bg-red-50 border border-red-100 rounded-2xl text-sm font-medium text-red-700 break-words">
                        Nie udało się pobrać kontaktów z GetResponse. {{ getResponseError }}
                    </div>
                </div>

                <!-- Zapisani w portalu -->
                <div class="bg-white rounded-[3rem] shadow-xl shadow-blue-900/5 border border-gray-100 overflow-hidden">
                    <div class="px-10 pt-8 pb-4 flex flex-col md:flex-row md:items-center justify-between gap-4">
                        <p class="text-[10px] font-black text-[#0A2C5C] uppercase tracking-[0.2em]">Zapisani w portalu</p>
                        <form class="flex gap-2" @submit.prevent="applySearch">
                            <input
                                v-model="search"
                                type="search"
                                placeholder="Szukaj adresu e-mail"
                                class="w-64 px-4 py-2.5 bg-gray-50 border-0 rounded-xl text-sm focus:ring-2 focus:ring-[#329CD1]"
                            >
                            <button type="submit" class="px-4 py-2.5 bg-gray-100 hover:bg-gray-200 rounded-xl text-[10px] font-black text-[#0A2C5C] uppercase tracking-widest">Szukaj</button>
                        </form>
                    </div>
                    <div class="overflow-x-auto">
                        <table class="w-full text-left border-collapse">
                            <thead>
                                <tr class="border-b border-gray-50">
                                    <th class="px-10 py-5 text-[10px] font-black text-[#0A2C5C] uppercase tracking-[0.2em]">E-mail</th>
                                    <th class="px-10 py-5 text-[10px] font-black text-[#0A2C5C] uppercase tracking-[0.2em]">Kraj</th>
                                    <th class="px-10 py-5 text-[10px] font-black text-[#0A2C5C] uppercase tracking-[0.2em]">Data zapisu</th>
                                    <th class="px-10 py-5 text-[10px] font-black text-[#0A2C5C] uppercase tracking-[0.2em]">GetResponse</th>
                                    <th class="px-10 py-5"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr v-for="subscriber in subscribers.data" :key="subscriber.id" class="border-b border-gray-50 hover:bg-gray-50/50 transition-colors">
                                    <td class="px-10 py-5 text-sm font-bold text-[#0A2C5C] break-all">{{ subscriber.email }}</td>
                                    <td class="px-10 py-5 text-sm text-gray-500 uppercase">{{ subscriber.country_code || '–' }}</td>
                                    <td class="px-10 py-5 text-sm text-gray-500 whitespace-nowrap">{{ formatDate(subscriber.created_at) }}</td>
                                    <td class="px-10 py-5">
                                        <span class="px-3 py-1.5 rounded-lg text-[10px] font-black uppercase tracking-widest whitespace-nowrap" :class="STATUS[subscriber.status].class">
                                            {{ STATUS[subscriber.status].label }}
                                        </span>
                                    </td>
                                    <td class="px-10 py-5 text-right">
                                        <DeleteSubscriberButton :subscriber="subscriber" />
                                    </td>
                                </tr>
                                <tr v-if="!subscribers.data.length">
                                    <td colspan="5" class="px-10 py-12 text-center text-sm text-gray-400">
                                        {{ filters?.search ? 'Brak adresów pasujących do wyszukiwania.' : 'Nikt nie zapisał się w tym języku.' }}
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <p class="px-10 py-5 text-xs text-gray-400">
                        <b>Brak w GetResponse</b> – adres został przeniesiony, ale nie ma go na liście: GetResponse odrzucił go (nieistniejąca skrzynka lub domena),
                        osoba wypisała się z newslettera albo kontakt usunięto ręcznie. Świeżo przeniesione adresy pojawiają się w GetResponse po kilku minutach.
                    </p>
                </div>

                <Pagination v-if="subscribers.links?.length > 3" :links="subscribers.links" />

                <!-- Tylko w GetResponse -->
                <div v-if="onlyInGetResponse.length" class="bg-white rounded-[3rem] shadow-xl shadow-blue-900/5 border border-gray-100 overflow-hidden">
                    <div class="px-10 pt-8 pb-2">
                        <p class="text-[10px] font-black text-[#0A2C5C] uppercase tracking-[0.2em]">Tylko w GetResponse · {{ onlyInGetResponse.length }}</p>
                        <p class="mt-2 text-xs text-gray-400">Kontakty na liście, których nie ma wśród zapisanych w portalu – np. dodane ręcznie w GetResponse. Też dostaną newsletter.</p>
                    </div>
                    <div class="overflow-x-auto">
                        <table class="w-full text-left border-collapse">
                            <tbody>
                                <tr v-for="contact in onlyInGetResponse" :key="contact.email" class="border-b border-gray-50">
                                    <td class="px-10 py-4 text-sm font-bold text-[#0A2C5C] break-all">{{ contact.email }}</td>
                                    <td class="px-10 py-4 text-sm text-gray-500 whitespace-nowrap">dodany {{ formatDate(contact.created_at) }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </AppLayout>
</template>
