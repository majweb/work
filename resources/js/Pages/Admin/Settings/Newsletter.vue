<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import { ref, watch } from 'vue';
import { router } from '@inertiajs/vue3';
import Pagination from '@/Components/Pagination.vue';
import TextInput from '@/Components/TextInput.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import SecondaryButton from '@/Components/SecondaryButton.vue';
import debounce from 'lodash/debounce';
import pickBy from 'lodash/pickBy';

const props = defineProps({
    newsletters: Object,
    filters: Object,
});

const search = ref(props.filters.search);
const country_code = ref(props.filters.country_code);
const date_from = ref(props.filters.date_from);
const date_to = ref(props.filters.date_to);

const updateFilters = debounce(() => {
    router.get(route('admin.newsletter.index'), pickBy({
        search: search.value,
        country_code: country_code.value,
        date_from: date_from.value,
        date_to: date_to.value,
    }), {
        preserveState: true,
        replace: true,
    });
}, 300);

watch([search, country_code, date_from, date_to], () => {
    updateFilters();
});

const exportCsv = () => {
    window.location.href = route('admin.newsletter.export', pickBy({
        search: search.value,
        country_code: country_code.value,
        date_from: date_from.value,
        date_to: date_to.value,
    }));
};

const clearFilters = () => {
    search.value = '';
    country_code.value = '';
    date_from.value = '';
    date_to.value = '';
};
</script>

<template>
    <AppLayout title="Newsletter">
        <div class="py-12 bg-gray-50/50 min-h-screen px-2 sm:px-0">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <!-- Header Section -->
                <div class="bg-white rounded-[3rem] shadow-xl shadow-blue-900/5 border border-gray-100 p-10 mb-8">
                    <div class="flex flex-col md:flex-row md:items-center justify-between gap-8">
                        <div>
                            <div class="flex items-center gap-4 mb-2">
                                <h3 class="text-2xl font-black text-[#0A2C5C] uppercase tracking-tight">Newsletter</h3>
                            </div>
                            <p class="text-[10px] font-bold text-gray-400 uppercase tracking-widest mt-1">
                                Zarządzanie listą subskrybentów newslettera
                            </p>
                        </div>
                        <div class="flex items-center gap-4">
                            <PrimaryButton
                                @click="exportCsv"
                                class="px-8 py-4 bg-[#0A2C5C] hover:bg-[#0D356D] text-white rounded-2xl font-black text-[10px] uppercase tracking-[0.2em] transition-all shadow-lg active:scale-95 flex items-center gap-2"
                            >
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4" />
                                </svg>
                                Eksportuj CSV
                            </PrimaryButton>
                        </div>
                    </div>
                </div>

                <!-- Filters Section -->
                <div class="bg-white rounded-[3rem] shadow-xl shadow-blue-900/5 border border-gray-100 p-10 mb-8">
                    <div class="grid grid-cols-1 md:grid-cols-5 gap-6 items-end">
                        <div class="space-y-2">
                            <label class="text-[10px] font-black text-[#0A2C5C] uppercase tracking-[0.2em] block ml-1">Szukaj (Email)</label>
                            <TextInput
                                v-model="search"
                                type="text"
                                class="w-full px-6 py-4 bg-gray-50 border-none rounded-2xl focus:ring-2 focus:ring-blue-500/20 focus:bg-white transition-all text-sm font-medium shadow-inner"
                                placeholder="Email..."
                            />
                        </div>
                        <div class="space-y-2">
                            <label class="text-[10px] font-black text-[#0A2C5C] uppercase tracking-[0.2em] block ml-1">Kod Kraju</label>
                            <TextInput
                                v-model="country_code"
                                type="text"
                                class="w-full px-6 py-4 bg-gray-50 border-none rounded-2xl focus:ring-2 focus:ring-blue-500/20 focus:bg-white transition-all text-sm font-medium shadow-inner"
                                placeholder="np. PL, EN..."
                                maxlength="2"
                            />
                        </div>
                        <div class="space-y-2">
                            <label class="text-[10px] font-black text-[#0A2C5C] uppercase tracking-[0.2em] block ml-1">Data od</label>
                            <TextInput
                                v-model="date_from"
                                type="date"
                                class="w-full px-6 py-4 bg-gray-50 border-none rounded-2xl focus:ring-2 focus:ring-blue-500/20 focus:bg-white transition-all text-sm font-medium shadow-inner"
                            />
                        </div>
                        <div class="space-y-2">
                            <label class="text-[10px] font-black text-[#0A2C5C] uppercase tracking-[0.2em] block ml-1">Data do</label>
                            <TextInput
                                v-model="date_to"
                                type="date"
                                class="w-full px-6 py-4 bg-gray-50 border-none rounded-2xl focus:ring-2 focus:ring-blue-500/20 focus:bg-white transition-all text-sm font-medium shadow-inner"
                            />
                        </div>
                        <div class="flex gap-4">
                            <SecondaryButton
                                @click="clearFilters"
                                class="px-8 py-4 border-2 border-gray-100 hover:bg-gray-50 text-gray-400 rounded-2xl font-black text-[10px] uppercase tracking-[0.2em] transition-all active:scale-95 flex-1 justify-center"
                            >
                                Wyczyść
                            </SecondaryButton>
                        </div>
                    </div>
                </div>

                <!-- Table Section -->
                <div class="bg-white rounded-[3rem] shadow-xl shadow-blue-900/5 border border-gray-100 overflow-hidden">
                    <div class="overflow-x-auto">
                        <table class="w-full text-left border-collapse">
                            <thead>
                                <tr class="border-b border-gray-50">
                                    <th class="px-10 py-6 text-[10px] font-black text-[#0A2C5C] uppercase tracking-[0.2em]">ID</th>
                                    <th class="px-10 py-6 text-[10px] font-black text-[#0A2C5C] uppercase tracking-[0.2em]">Email</th>
                                    <th class="px-10 py-6 text-[10px] font-black text-[#0A2C5C] uppercase tracking-[0.2em]">Kraj</th>
                                    <th class="px-10 py-6 text-[10px] font-black text-[#0A2C5C] uppercase tracking-[0.2em]">Data Zapisu</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-50">
                                <tr v-for="item in newsletters.data" :key="item.id" class="hover:bg-gray-50/50 transition-colors group">
                                    <td class="px-10 py-6">
                                        <span class="text-xs font-bold text-gray-400">#{{ item.id }}</span>
                                    </td>
                                    <td class="px-10 py-6">
                                        <span class="text-sm font-black text-[#0A2C5C] uppercase tracking-tight">{{ item.email }}</span>
                                    </td>
                                    <td class="px-10 py-6">
                                        <div class="flex items-center gap-2">
                                            <span class="px-3 py-1 bg-blue-50 text-blue-600 rounded-lg text-[10px] font-black uppercase tracking-widest">
                                                {{ item.country_code }}
                                            </span>
                                        </div>
                                    </td>
                                    <td class="px-10 py-6">
                                        <span class="text-xs font-bold text-gray-400 uppercase tracking-widest">
                                            {{ new Date(item.created_at).toLocaleDateString('pl-PL') }}
                                        </span>
                                    </td>
                                </tr>
                                <tr v-if="newsletters.data.length === 0">
                                    <td colspan="4" class="px-10 py-12 text-center">
                                        <p class="text-[10px] font-bold text-gray-400 uppercase tracking-widest">Brak subskrybentów do wyświetlenia.</p>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <div v-if="newsletters.links.length > 3" class="p-10 border-t border-gray-50 bg-gray-50/30">
                        <Pagination :links="newsletters.links" />
                    </div>
                </div>
            </div>
        </div>
    </AppLayout>
</template>
