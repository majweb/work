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
    categories: Object,
    filters: Object,
    languages: Array,
});

const filters = ref({
    search: props.filters.search || '',
});

const updateFilters = () => {
    router.get(route('admin.categories.index'), pickBy(filters.value), {
        preserveState: true,
        preserveScroll: true,
        replace: true
    });
};

watch(() => filters.value.search, () => {
    updateFilters();
});

const categoryToDelete = ref(null);
const confirmDelete = (category) => {
    categoryToDelete.value = category;
};

const deleteCategory = () => {
    if (categoryToDelete.value) {
        router.delete(route('admin.categories.destroy', categoryToDelete.value.id), {
            onSuccess: () => {
                categoryToDelete.value = null;
            },
        });
    }
};

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
    <AppLayout title="Kategorie stanowisk">
        <div class="py-12 bg-gray-50/50 min-h-screen">
            <div class="max-w-[1600px] mx-auto sm:px-6 lg:px-8">
                <!-- Header Section -->
                <div class="bg-white rounded-[3rem] shadow-xl shadow-blue-900/5 border border-gray-100 p-10 mb-8">
                    <div class="flex flex-col md:flex-row md:items-center justify-between gap-8">
                        <div>
                            <h3 class="text-2xl font-black text-[#0A2C5C] uppercase tracking-tight">Rynek pracy - kategorie stanowisk</h3>
                            <p class="text-[10px] font-bold text-gray-400 uppercase tracking-widest mt-1">
                                Zarządzanie branżami, podbranżami, zawodami i stanowiskami</p>
                        </div>

                        <Link
                            :href="route('admin.categories.create')"
                            class="px-8 py-4 bg-[#00AEEF] hover:bg-[#0096ce] text-white rounded-2xl font-black text-xs uppercase tracking-widest transition-all active:scale-95 shadow-lg shadow-blue-200 flex items-center gap-2"
                        >
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="3" stroke="currentColor" class="w-4 h-4">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                            </svg>
                            Dodaj
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
                            placeholder="Szukaj kategorii..."
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
                                <th class="p-8 text-[10px] font-black text-[#0A2C5C] uppercase tracking-[0.2em]">Branża</th>
                                <th class="p-8 text-[10px] font-black text-[#0A2C5C] uppercase tracking-[0.2em]">Podbranża</th>
                                <th class="p-8 text-[10px] font-black text-[#0A2C5C] uppercase tracking-[0.2em]">Zawód</th>
                                <th class="p-8 text-[10px] font-black text-[#0A2C5C] uppercase tracking-[0.2em]">Stanowisko</th>
                                <th class="p-8 text-[10px] font-black text-[#0A2C5C] uppercase tracking-[0.2em] text-right">Akcje</th>
                            </tr>
                        </thead>
                        <tbody>
                            <template v-for="position in categories.data" :key="position.id">
                                <tr class="group hover:bg-blue-50/30 transition-all duration-300 border-b border-gray-50 bg-white">
                                    <td class="p-8 text-xs font-black text-[#0A2C5C]">#{{ position.id }}</td>
                                    <td class="p-8 text-xs font-black text-[#0A2C5C]">{{ position.name }}</td>

                                    <!-- Branża -->
                                    <td class="p-8 text-xs font-bold text-gray-400 uppercase">
                                        <template v-if="position.depth === 3">
                                            {{ position.parent?.parent?.parent?.name || '-' }}
                                        </template>
                                        <template v-else-if="position.depth === 2">
                                            {{ position.parent?.parent?.name || '-' }}
                                        </template>
                                        <template v-else-if="position.depth === 1">
                                            {{ position.parent?.name || '-' }}
                                        </template>
                                        <template v-else>
                                            {{ position.name }}
                                        </template>
                                    </td>

                                    <!-- Podbranża -->
                                    <td class="p-8 text-xs font-bold text-gray-400 uppercase">
                                        <template v-if="position.depth === 3">
                                            {{ position.parent?.parent?.name || '-' }}
                                        </template>
                                        <template v-else-if="position.depth === 2">
                                            {{ position.parent?.name || '-' }}
                                        </template>
                                        <template v-else-if="position.depth === 1">
                                            {{ position.name }}
                                        </template>
                                        <template v-else>-</template>
                                    </td>

                                    <!-- Zawód -->
                                    <td class="p-8 text-xs font-bold text-gray-400 uppercase">
                                        <template v-if="position.depth === 3">
                                            {{ position.parent?.name || '-' }}
                                        </template>
                                        <template v-else-if="position.depth === 2">
                                            {{ position.name }}
                                        </template>
                                        <template v-else>-</template>
                                    </td>

                                    <!-- Stanowisko -->
                                    <td class="p-8 text-xs font-black text-[#0A2C5C] uppercase">
                                        <template v-if="position.depth === 3">
                                            {{ position.name }}
                                        </template>
                                        <template v-else>-</template>
                                    </td>

                                    <td class="p-8 text-right">
                                        <div class="flex justify-end gap-2">
                                            <Link :href="route('admin.categories.edit', position.id)" class="p-3 bg-blue-50 text-blue-500 rounded-xl hover:bg-[#0A2C5C] hover:text-white transition-all">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-4 h-4">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" />
                                                </svg>
                                            </Link>
                                            <button @click="confirmDelete(position)" class="p-3 bg-red-50 text-red-500 rounded-xl hover:bg-red-600 hover:text-white transition-all">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-4 h-4">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="m14.74 9-.34 12m-4.72 0-.34-12M9.25 6l.45-1.45A1.5 1.5 0 0 1 11.15 3.5h1.7a1.5 1.5 0 0 1 1.45 1.05L14.75 6m-5.51 0h5.51m-11 0h16.5m-15.5 0l1.1 13a1.5 1.5 0 0 0 1.5 1.5h9.7a1.5 1.5 0 0 0 1.5-1.5l1.1-13" />
                                                </svg>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                            </template>
                        </tbody>
                    </table>
                </div>

                <div class="mt-8">
                    <Pagination :links="categories.links || categories.meta.links" />
                </div>
            </div>
        </div>

        <!-- Delete Confirmation -->
        <DialogModal :show="categoryToDelete !== null" @close="categoryToDelete = null">
            <template #title>Usuń kategorię</template>
            <template #content>
                Czy na pewno chcesz usunąć tę kategorię?
                Pamiętaj, że jeśli kategoria posiada podkategorie, mogą one zostać osierocone.
            </template>
            <template #footer>
                <SecondaryButton @click="categoryToDelete = null" class="mr-3">Anuluj</SecondaryButton>
                <DangerButton @click="deleteCategory">Usuń</DangerButton>
            </template>
        </DialogModal>
    </AppLayout>
</template>
