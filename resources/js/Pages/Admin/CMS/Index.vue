<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import { Link, router, usePage } from '@inertiajs/vue3';
import { ref, watch } from 'vue';
import Pagination from '@/Components/Pagination.vue';
import pickBy from 'lodash/pickBy';

const props = defineProps({
    pages: Object,
    filters: Object,
});

const filters = ref({
    search: props.filters.search || '',
});

const updateFilters = () => {
    router.get(route('admin.cms.index'), pickBy(filters.value), {
        preserveState: true,
        preserveScroll: true,
        replace: true
    });
};

watch(() => filters.value.search, () => {
    updateFilters();
});

const getTranslation = (value) => {
    if (!value) return '-';
    if (typeof value === 'object') {
        const locale = usePage().props.locale || 'pl';
        return value[locale] || value['pl'] || Object.values(value)[0];
    }
    return value;
};
</script>

<template>
    <AppLayout title="CMS - Strony publiczne">
        <div class="py-12 bg-gray-50/50 min-h-screen px-2 sm:px-0">
            <div class="max-w-[1600px] mx-auto sm:px-6 lg:px-8">
                <!-- Header Section -->
                <div class="bg-white rounded-[3rem] shadow-xl shadow-blue-900/5 border border-gray-100 p-10 mb-8">
                    <div class="flex flex-col md:flex-row md:items-center justify-between gap-8">
                        <div>
                            <h3 class="text-2xl font-black text-[#0A2C5C] uppercase tracking-tight">CMS - Strony publiczne</h3>
                            <p class="text-[10px] font-bold text-gray-400 uppercase tracking-widest mt-1">
                                Zarządzanie treścią SEO i tagami dla stron publicznych
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Filters -->
                <div class="bg-white rounded-[3rem] shadow-xl shadow-blue-900/5 border border-gray-100 p-8 mb-8">
                    <div class="relative group max-w-2xl">
                        <div class="absolute inset-y-0 left-0 pl-5 flex items-center pointer-events-none">
                            <svg class="h-5 w-5 text-gray-400 group-focus-within:text-blue-500 transition-colors" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                            </svg>
                        </div>
                        <input
                            v-model="filters.search"
                            type="text"
                            placeholder="Szukaj strony po nazwie lub tytule..."
                            class="block w-full pl-14 pr-12 py-4 border-none bg-gray-50 rounded-2xl focus:ring-2 focus:ring-blue-500/20 focus:bg-white transition-all text-sm font-medium placeholder:text-gray-400 shadow-inner"
                        >
                    </div>
                </div>

                <!-- Table Section -->
                <div class="bg-white rounded-[3rem] shadow-xl shadow-blue-900/5 border border-gray-100 overflow-hidden">
                    <div class="overflow-x-auto">
                        <table class="w-full text-left border-collapse">
                            <thead>
                                <tr class="border-b border-gray-50">
                                    <th class="px-8 py-6 text-[10px] font-black text-gray-400 uppercase tracking-[0.2em]">ID</th>
                                    <th class="px-8 py-6 text-[10px] font-black text-gray-400 uppercase tracking-[0.2em]">Nazwa strony</th>
                                    <th class="px-8 py-6 text-[10px] font-black text-gray-400 uppercase tracking-[0.2em]">Tytuł (SEO)</th>
                                    <th class="px-8 py-6 text-[10px] font-black text-gray-400 uppercase tracking-[0.2em]">Opis (SEO)</th>
                                    <th class="px-8 py-6 text-[10px] font-black text-gray-400 uppercase tracking-[0.2em] text-right">Akcje</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-50">
                                <tr v-for="page in pages.data" :key="page.id" class="group hover:bg-blue-50/30 transition-colors">
                                    <td class="px-8 py-6">
                                        <span class="text-xs font-black text-gray-300 group-hover:text-blue-400 transition-colors">#{{ page.id }}</span>
                                    </td>
                                    <td class="px-8 py-6">
                                        <div class="flex flex-col">
                                            <span class="text-sm font-black text-[#0A2C5C] uppercase tracking-tight">{{ page.name || '-' }}</span>
                                        </div>
                                    </td>
                                    <td class="px-8 py-6">
                                        <div class="flex flex-col">
                                            <span class="text-sm font-black text-gray-400 uppercase tracking-tight">{{ getTranslation(page.title) }}</span>
                                        </div>
                                    </td>
                                    <td class="px-8 py-6">
                                        <p class="text-xs text-gray-500 line-clamp-2 max-w-md">
                                            {{ getTranslation(page.description) }}
                                        </p>
                                    </td>
                                    <td class="px-8 py-6">
                                        <div class="flex justify-end gap-2">
                                            <Link
                                                :href="route('admin.cms.edit', page.id)"
                                                class="p-3 bg-blue-50 text-blue-600 rounded-xl hover:bg-blue-600 hover:text-white transition-all shadow-sm"
                                            >
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-4 h-4">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" />
                                                </svg>
                                            </Link>
                                        </div>
                                    </td>
                                </tr>
                                <tr v-if="pages.data.length === 0">
                                    <td colspan="5" class="px-8 py-20 text-center">
                                        <div class="flex flex-col items-center">
                                            <div class="p-6 bg-gray-50 rounded-[2rem] mb-4">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-12 h-12 text-gray-300">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 0 0-3.375-3.375h-1.5A1.125 1.125 0 0 1 13.5 7.125v-1.5a3.375 3.375 0 0 0-3.375-3.375H8.25m0 12.75h7.5m-7.5 3H12M10.5 2.25H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 0 0-9-9Z" />
                                                </svg>
                                            </div>
                                            <p class="text-sm font-bold text-gray-400 uppercase tracking-widest">Nie znaleziono żadnych stron</p>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <!-- Pagination -->
                    <div v-if="pages.links.length > 3" class="px-8 py-8 bg-gray-50/50 border-t border-gray-50">
                        <Pagination :links="pages.links" />
                    </div>
                </div>
            </div>
        </div>
    </AppLayout>
</template>
