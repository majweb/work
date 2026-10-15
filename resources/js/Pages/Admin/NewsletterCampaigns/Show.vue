<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import { Link, router } from '@inertiajs/vue3';
import { computed, onBeforeUnmount, onMounted } from 'vue';

const props = defineProps({
    campaign: Object,
    languageNames: Object,
});

const STATUS = {
    pending: { label: 'W kolejce', class: 'bg-gray-100 text-gray-500' },
    translating: { label: 'Tłumaczenie…', class: 'bg-blue-50 text-blue-600' },
    draft_created: { label: 'Szkic gotowy', class: 'bg-green-50 text-green-700' },
    failed: { label: 'Błąd', class: 'bg-red-50 text-red-600' },
};

const inProgress = computed(() => props.campaign.locales.some(l => ['pending', 'translating'].includes(l.status)));
const readyCount = computed(() => props.campaign.locales.filter(l => l.status === 'draft_created').length);

// Odświeżanie stanu, dopóki tłumaczenia trwają
let timer = null;
onMounted(() => {
    timer = setInterval(() => {
        if (inProgress.value) {
            router.reload({ only: ['campaign'], preserveScroll: true });
        }
    }, 4000);
});
onBeforeUnmount(() => clearInterval(timer));

const retry = (locale) => {
    router.post(route('admin.newsletter-campaigns.retry', [props.campaign.id, locale.id]), {}, { preserveScroll: true });
};
</script>

<template>
    <AppLayout :title="`Newsletter: ${campaign.subject}`">
        <div class="py-12 bg-gray-50/50 min-h-screen px-2 sm:px-0">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-8">
                <div class="bg-white rounded-[3rem] shadow-xl shadow-blue-900/5 border border-gray-100 p-10">
                    <Link :href="route('admin.newsletter-campaigns.index')" class="text-[10px] font-black text-gray-400 uppercase tracking-widest hover:text-[#0A2C5C]">← Wysyłki</Link>
                    <h3 class="text-2xl font-black text-[#0A2C5C] tracking-tight mt-4">{{ campaign.subject }}</h3>
                    <p class="text-sm text-gray-500 mt-2">
                        Szkice gotowe: <strong class="text-[#0A2C5C]">{{ readyCount }} z {{ campaign.locales.length }}</strong>
                        <span v-if="inProgress"> · trwa przygotowanie, strona odświeża się sama</span>
                    </p>
                    <div class="mt-6 p-5 bg-blue-50 border border-blue-100 rounded-2xl text-sm text-[#0A2C5C]">
                        Szkice znajdziesz w GetResponse na liście newsletterów, wśród <strong>szkiców</strong> (nazwa zaczyna się od <strong>#{{ campaign.id }}</strong> i kodu języka).
                        Sprawdź je i kliknij „Wyślij” albo zaplanuj godzinę wysyłki. Nic nie wychodzi automatycznie.
                    </div>
                </div>

                <div class="bg-white rounded-[3rem] shadow-xl shadow-blue-900/5 border border-gray-100 overflow-hidden">
                    <div class="overflow-x-auto">
                        <table class="w-full text-left border-collapse">
                            <thead>
                                <tr class="border-b border-gray-50">
                                    <th class="px-10 py-6 text-[10px] font-black text-[#0A2C5C] uppercase tracking-[0.2em]">Język</th>
                                    <th class="px-10 py-6 text-[10px] font-black text-[#0A2C5C] uppercase tracking-[0.2em]">Odbiorców</th>
                                    <th class="px-10 py-6 text-[10px] font-black text-[#0A2C5C] uppercase tracking-[0.2em]">Stan</th>
                                    <th class="px-10 py-6 text-[10px] font-black text-[#0A2C5C] uppercase tracking-[0.2em]"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr v-for="locale in campaign.locales" :key="locale.id" class="border-b border-gray-50 align-top">
                                    <td class="px-10 py-6 text-sm font-bold text-[#0A2C5C]">
                                        {{ languageNames[locale.locale] || locale.locale }}
                                        <span class="text-gray-400 font-medium">({{ locale.locale }})</span>
                                    </td>
                                    <td class="px-10 py-6 text-sm text-gray-500">{{ locale.recipients_count }}</td>
                                    <td class="px-10 py-6">
                                        <span class="px-3 py-1.5 rounded-lg text-[10px] font-black uppercase tracking-widest" :class="STATUS[locale.status]?.class">
                                            {{ STATUS[locale.status]?.label || locale.status }}
                                        </span>
                                        <p v-if="locale.error" class="mt-2 text-xs text-red-600 max-w-md break-words">{{ locale.error }}</p>
                                    </td>
                                    <td class="px-10 py-6 text-right whitespace-nowrap space-x-4">
                                        <a
                                            v-if="locale.translated"
                                            :href="route('admin.newsletter-campaigns.locale-preview', [campaign.id, locale.id])"
                                            target="_blank"
                                            class="text-[10px] font-black uppercase tracking-widest text-[#0A2C5C] hover:underline"
                                        >Podgląd</a>
                                        <button
                                            v-if="locale.status === 'failed'"
                                            type="button"
                                            @click="retry(locale)"
                                            class="text-[10px] font-black uppercase tracking-widest text-red-600 hover:underline"
                                        >Ponów</button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </AppLayout>
</template>
