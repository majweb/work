<script setup>
import { Head, Link, router } from '@inertiajs/vue3';
import AppLayout from '@/Layouts/AppLayout.vue';
import Pagination from '@/Components/Pagination.vue';
import { ref } from 'vue';

const props = defineProps({
    promotions: Object,
    filters: Object,
});

const expandedRows = ref([]);

const toggleRow = (id) => {
    if (expandedRows.value.includes(id)) {
        expandedRows.value = expandedRows.value.filter(rowId => rowId !== id);
    } else {
        expandedRows.value.push(id);
    }
};

const handleDecrement = (id) => {
    router.post(route('admin.social-media.decrement', id), {}, {
        onSuccess: () => {
            router.reload();
        }
    });
};
</script>

<template>
    <AppLayout title="Promocje Social Media">
        <template #header>
            <div class="flex items-center justify-between">
                <div>
                    <h2 class="text-3xl font-black text-[#0A2C5C] uppercase tracking-tight">
                        Promocje Social Media
                    </h2>
                    <p class="text-[10px] font-bold text-gray-400 uppercase tracking-widest mt-1">
                        Zarządzaj kampaniami promocyjnymi w mediach społecznościowych
                    </p>
                </div>
            </div>
        </template>

        <div class="py-12 px-4 sm:px-6 lg:px-8">
            <div class="max-w-7xl mx-auto">
                <div class="bg-white rounded-[3rem] shadow-xl shadow-blue-900/5 border border-gray-100 overflow-hidden">
                    <div class="overflow-x-auto">
                        <table class="w-full text-left border-collapse">
                            <thead>
                                <tr class="bg-gray-50/50 border-b border-gray-100">
                                    <th class="px-8 py-6 text-[10px] font-black text-[#0A2C5C] uppercase tracking-widest">Firma</th>
                                    <th class="px-8 py-6 text-[10px] font-black text-[#0A2C5C] uppercase tracking-widest">Email kontaktowy</th>
                                    <th class="px-8 py-6 text-[10px] font-black text-[#0A2C5C] uppercase tracking-widest text-center">Wykorzystano / Łącznie</th>
                                    <th class="px-8 py-6 text-[10px] font-black text-[#0A2C5C] uppercase tracking-widest">Data zamówienia</th>
                                    <th class="px-8 py-6 text-[10px] font-black text-[#0A2C5C] uppercase tracking-widest text-center">Zrealizowano</th>
                                    <th class="px-8 py-6 text-[10px] font-black text-[#0A2C5C] uppercase tracking-widest text-right">Akcje</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-50">
                                <template v-for="promotion in promotions.data" :key="promotion.id">
                                    <tr class="hover:bg-gray-50/30 transition-colors cursor-pointer" @click="toggleRow(promotion.id)">
                                        <td class="px-8 py-6">
                                            <div class="flex items-center gap-4">
                                                <div v-if="promotion.user?.firm?.logo_url" class="h-10 w-10 rounded-xl overflow-hidden shadow-lg shadow-blue-900/10 border border-gray-100 bg-white">
                                                    <img :src="promotion.user.firm.logo_url" :alt="promotion.user.firm.name" class="w-full h-full object-contain">
                                                </div>
                                                <div v-else class="h-10 w-10 rounded-xl bg-[#0A2C5C] flex items-center justify-center text-white font-black text-xs shadow-lg shadow-blue-900/10">
                                                    {{ promotion.user?.firm?.name?.substring(0, 1).toUpperCase() || 'F' }}
                                                </div>
                                                <div>
                                                    <p class="font-black text-[#0A2C5C] uppercase text-xs tracking-tight">
                                                        {{ promotion.user?.firm?.name || 'Brak nazwy firmy' }}
                                                    </p>
                                                    <p class="text-[9px] font-bold text-gray-400 uppercase tracking-widest mt-0.5">
                                                        ID Firmy: {{ promotion.user?.firm?.id || '—' }}
                                                    </p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="px-8 py-6">
                                            <p class="text-xs font-bold text-gray-600">{{ promotion.user?.email }}</p>
                                        </td>
                                        <td class="px-8 py-6 text-center">
                                            <p class="font-black text-[#0A2C5C] text-lg">
                                                {{ promotion.total_qty - promotion.qty }} / {{ promotion.total_qty }}
                                            </p>
                                        </td>
                                        <td class="px-8 py-6">
                                            <p class="text-xs font-bold text-gray-600">
                                                {{ new Date(promotion.created_at).toLocaleDateString() }}
                                            </p>
                                        </td>
                                        <td class="px-8 py-6 text-center">
                                            <div class="flex justify-center items-center gap-2">
                                                <span class="text-[10px] font-bold text-blue-600 uppercase tracking-widest">
                                                    Szczegóły ({{ promotion.qty }})
                                                </span>
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor" :class="['w-4 h-4 transition-transform duration-200', expandedRows.includes(promotion.id) ? 'rotate-180' : '']">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5" />
                                                </svg>
                                            </div>
                                        </td>
                                        <td class="px-8 py-6 text-right">
                                            <a
                                                :href="'mailto:' + promotion.user?.email"
                                                @click.stop
                                                class="inline-flex items-center gap-2 px-6 py-3 rounded-xl bg-blue-50 text-blue-600 hover:bg-blue-600 hover:text-white transition-all text-[9px] font-black uppercase tracking-widest border border-blue-100 shadow-sm"
                                            >
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor" class="w-3 h-3">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 0 1-2.25 2.25h-15a2.25 2.25 0 0 1-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25m19.5 0v.243a2.25 2.25 0 0 1-1.07 1.916l-7.5 4.615a2.25 2.25 0 0 1-2.36 0L3.32 8.91a2.25 2.25 0 0 1-1.07-1.916V6.75" />
                                                </svg>
                                                Kontakt
                                            </a>
                                        </td>
                                    </tr>
                                    <tr v-if="expandedRows.includes(promotion.id)">
                                        <td colspan="6" class="px-8 py-0 bg-gray-50/50">
                                            <div class="py-4 border-t border-gray-100">
                                                <div class="flex flex-col gap-2">
                                                    <p class="text-[9px] font-black text-[#0A2C5C] uppercase tracking-[0.2em] mb-2 px-4">
                                                        Wybierz pozycje do zrealizowania:
                                                    </p>
                                                    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4 px-4 pb-4">
                                                        <div v-for="n in promotion.qty" :key="n" class="flex items-center gap-3 bg-white p-3 rounded-xl border border-gray-200 shadow-sm hover:border-blue-200 transition-colors">
                                                            <input
                                                                type="checkbox"
                                                                @click.stop
                                                                @change="handleDecrement(promotion.id)"
                                                                class="rounded border-gray-300 text-blue-600 shadow-sm focus:ring-blue-500 h-5 w-5 cursor-pointer"
                                                            >
                                                            <span class="text-[10px] font-bold text-gray-500 uppercase tracking-widest">
                                                                Pozycja #{{ n }}
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                </template>
                                <tr v-if="promotions.data.length === 0">
                                    <td colspan="6" class="px-8 py-12 text-center">
                                        <p class="text-[10px] font-black text-gray-300 uppercase tracking-widest">
                                            Brak aktywnych promocji w social media
                                        </p>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="mt-8">
                    <Pagination :links="promotions.links" />
                </div>
            </div>
        </div>
    </AppLayout>
</template>
