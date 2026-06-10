<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import { Link, router, usePage } from '@inertiajs/vue3';
import { ref, watch } from 'vue';
import Pagination from '@/Components/Pagination.vue';
import DialogModal from '@/Components/DialogModal.vue';
import SecondaryButton from '@/Components/SecondaryButton.vue';
import DangerButton from '@/Components/DangerButton.vue';
import pickBy from 'lodash/pickBy';

const props = defineProps({
    detailProjects: Object,
    filters: Object,
});

const filters = ref({
    search: props.filters.search || '',
});

const updateFilters = () => {
    router.get(route('admin.detail-projects.index'), pickBy(filters.value), {
        preserveState: true,
        preserveScroll: true,
        replace: true
    });
};

watch(() => filters.value.search, () => {
    updateFilters();
});

const detailProjectToDelete = ref(null);
const confirmDelete = (detailProject) => {
    detailProjectToDelete.value = detailProject;
};

const deleteDetailProject = () => {
    if (detailProjectToDelete.value) {
        router.delete(route('admin.detail-projects.destroy', detailProjectToDelete.value.id), {
            onSuccess: () => {
                detailProjectToDelete.value = null;
            },
        });
    }
};

const getTranslation = (value) => {
    if (!value) return '-';
    if (typeof value === 'object') {
        const locale = usePage().props.locale || 'pl';
        return value[locale] || value['pl'] || Object.values(value)[0] || '-';
    }
    return value || '-';
};
</script>

<template>
    <AppLayout title="Obowiązki projektów">
        <div class="py-12 bg-gray-50/50 min-h-screen">
            <div class="max-w-[1600px] mx-auto sm:px-6 lg:px-8">
                <!-- Header Section -->
                <div class="bg-white rounded-[3rem] shadow-xl shadow-blue-900/5 border border-gray-100 p-10 mb-8">
                    <div class="flex flex-col md:flex-row md:items-center justify-between gap-8">
                        <div>
                            <h3 class="text-2xl font-black text-[#0A2C5C] uppercase tracking-tight">Rynek pracy - Obowiązki projektów</h3>
                            <p class="text-[10px] font-bold text-gray-400 uppercase tracking-widest mt-1">
                                Zarządzanie obowiązkami i ich kategoriami</p>
                        </div>

                        <Link
                            :href="route('admin.detail-projects.create')"
                            class="px-8 py-4 bg-[#00AEEF] hover:bg-[#0096ce] text-white rounded-2xl font-black text-xs uppercase tracking-widest transition-all active:scale-95 shadow-lg shadow-blue-200 flex items-center gap-2"
                        >
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="3" stroke="currentColor" class="w-4 h-4">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                            </svg>
                            Dodaj obowiązek
                        </Link>
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
                            placeholder="Szukaj obowiązku..."
                            class="block w-full pl-14 pr-4 py-4 bg-gray-50 border-none rounded-2xl text-sm focus:ring-2 focus:ring-blue-500/20 focus:bg-white transition-all font-medium"
                        />
                    </div>
                </div>

                <!-- Table -->
                <div class="bg-white rounded-[3rem] shadow-xl shadow-blue-900/5 border border-gray-100 overflow-hidden">
                    <table class="w-full text-left border-collapse">
                        <thead>
                            <tr class="border-b border-gray-50">
                                <th class="p-8 text-[10px] font-black text-[#0A2C5C] uppercase tracking-[0.2em]">ID</th>
                                <th class="p-8 text-[10px] font-black text-[#0A2C5C] uppercase tracking-[0.2em]">Nazwa</th>
                                <th class="p-8 text-[10px] font-black text-[#0A2C5C] uppercase tracking-[0.2em]">Kategorie</th>
                                <th class="p-8 text-[10px] font-black text-[#0A2C5C] uppercase tracking-[0.2em] text-right">Akcje</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr v-for="item in detailProjects.data" :key="item.id" class="border-b border-gray-50 group hover:bg-gray-50/50 transition-colors">
                                <td class="p-8">
                                    <span class="text-xs font-bold text-gray-400">#{{ item.id }}</span>
                                </td>
                                <td class="p-8">
                                    <div class="text-sm font-bold text-[#0A2C5C]">{{ getTranslation(item.name) }}</div>
                                </td>
                                <td class="p-8">
                                    <div class="flex flex-wrap gap-2">
                                        <span v-for="category in item.categories" :key="category.id" class="px-3 py-1 bg-blue-50 text-[#00AEEF] text-[10px] font-black uppercase tracking-widest rounded-lg">
                                            {{ getTranslation(category.title) }}
                                        </span>
                                    </div>
                                </td>
                                <td class="p-8 text-right">
                                    <div class="flex items-center justify-end gap-3">
                                        <Link
                                            :href="route('admin.detail-projects.edit', item.id)"
                                            class="p-3 text-gray-400 hover:text-[#00AEEF] hover:bg-blue-50 rounded-xl transition-all"
                                        >
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-5 h-5">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" />
                                            </svg>
                                        </Link>
                                        <button
                                            @click="confirmDelete(item)"
                                            class="p-3 text-gray-400 hover:text-red-500 hover:bg-red-50 rounded-xl transition-all"
                                        >
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-5 h-5">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-2.25a2.25 2.25 0 0 0-2.25-2.25h-4.5a2.25 2.25 0 0 0-2.25 2.25v2.25m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                                            </svg>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <!-- Pagination -->
                <div class="mt-8">
                    <Pagination :links="detailProjects.links" />
                </div>
            </div>
        </div>

        <!-- Delete Confirmation Modal -->
        <DialogModal :show="detailProjectToDelete !== null" @close="detailProjectToDelete = null">
            <template #title>
                Usuń obowiązek
            </template>

            <template #content>
                Czy na pewno chcesz usunąć ten obowiązek? Ta operacja jest nieodwracalna.
            </template>

            <template #footer>
                <SecondaryButton @click="detailProjectToDelete = null">
                    Anuluj
                </SecondaryButton>

                <DangerButton
                    class="ml-3"
                    @click="deleteDetailProject"
                >
                    Usuń
                </DangerButton>
            </template>
        </DialogModal>
    </AppLayout>
</template>
