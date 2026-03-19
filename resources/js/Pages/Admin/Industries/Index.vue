<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import { Link, router, usePage } from '@inertiajs/vue3';
import { ref, watch } from 'vue';
import Pagination from '@/Components/Pagination.vue';
import DialogModal from '@/Components/DialogModal.vue';
import SecondaryButton from '@/Components/SecondaryButton.vue';
import DangerButton from '@/Components/DangerButton.vue';
import pickBy from 'lodash/pickBy';
import IndustryRow from './Partials/IndustryRow.vue';

const props = defineProps({
    industries: Object,
    filters: Object,
    languages: Array,
});

const filters = ref({
    search: props.filters.search || '',
});

const updateFilters = () => {
    router.get(route('admin.industries.index'), pickBy(filters.value), {
        preserveState: true,
        preserveScroll: true,
        replace: true
    });
};

watch(() => filters.value.search, () => {
    updateFilters();
});

const industryToDelete = ref(null);
const confirmDelete = (industry) => {
    industryToDelete.value = industry;
};

const deleteIndustry = () => {
    if (industryToDelete.value) {
        router.delete(route('admin.industries.destroy', industryToDelete.value.id), {
            onSuccess: () => {
                industryToDelete.value = null;
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
    <AppLayout title="Branże i podbranże">
        <div class="py-12 bg-gray-50/50 min-h-screen">
            <div class="max-w-[1600px] mx-auto sm:px-6 lg:px-8">
                <!-- Header Section -->
                <div class="bg-white rounded-[3rem] shadow-xl shadow-blue-900/5 border border-gray-100 p-10 mb-8">
                    <div class="flex flex-col md:flex-row md:items-center justify-between gap-8">
                        <div>
                            <h3 class="text-2xl font-black text-[#0A2C5C] uppercase tracking-tight">Rynek pracy - Branże i podbranże</h3>
                            <p class="text-[10px] font-bold text-gray-400 uppercase tracking-widest mt-1">
                                Zarządzanie głównymi branżami oraz ich podbranżami</p>
                        </div>

                        <Link
                            :href="route('admin.industries.create')"
                            class="px-8 py-4 bg-[#00AEEF] hover:bg-[#0096ce] text-white rounded-2xl font-black text-xs uppercase tracking-widest transition-all active:scale-95 shadow-lg shadow-blue-200 flex items-center gap-2"
                        >
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="3" stroke="currentColor" class="w-4 h-4">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                            </svg>
                            Dodaj branżę / podbranżę
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
                            placeholder="Szukaj branży lub podbranży..."
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
                                <th class="p-8 text-[10px] font-black text-[#0A2C5C] uppercase tracking-[0.2em]">Branża / Podbranża</th>
                                <th class="p-8 text-[10px] font-black text-[#0A2C5C] uppercase tracking-[0.2em]">Typ</th>
                                <th class="p-8 text-[10px] font-black text-[#0A2C5C] uppercase tracking-[0.2em]">Slug (name)</th>
                                <th class="p-8 text-[10px] font-black text-[#0A2C5C] uppercase tracking-[0.2em] text-right">Akcje</th>
                            </tr>
                        </thead>
                        <tbody>
                            <template v-for="industry in industries.data" :key="industry.id">
                                <IndustryRow :item="industry" :level="0" @delete="confirmDelete" />
                            </template>
                        </tbody>
                    </table>
                </div>

                <!-- Pagination -->
                <div class="mt-8">
                    <Pagination :links="industries.links" />
                </div>
            </div>
        </div>

        <!-- Delete Confirmation Modal -->
        <DialogModal :show="industryToDelete !== null" @close="industryToDelete = null">
            <template #title>
                Usuń branżę / podbranżę
            </template>

            <template #content>
                Czy na pewno chcesz usunąć tę branżę? Wszystkie podkategorie również zostaną usunięte.
            </template>

            <template #footer>
                <SecondaryButton @click="industryToDelete = null">
                    Anuluj
                </SecondaryButton>

                <DangerButton
                    class="ml-3"
                    @click="deleteIndustry"
                >
                    Usuń
                </DangerButton>
            </template>
        </DialogModal>
    </AppLayout>
</template>
