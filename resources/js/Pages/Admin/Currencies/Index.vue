<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import { Link, router } from '@inertiajs/vue3';
import { ref, watch, onMounted, onUnmounted } from 'vue';
import DialogModal from '@/Components/DialogModal.vue';
import SecondaryButton from '@/Components/SecondaryButton.vue';
import DangerButton from '@/Components/DangerButton.vue';
import pickBy from 'lodash/pickBy';

const props = defineProps({
    currencies: Array,
    filters: Object,
});

const filters = ref({
    search: props.filters.search || '',
});

const updateFilters = () => {
    router.get(route('admin.currencies.index'), pickBy(filters.value), {
        preserveState: true,
        preserveScroll: true,
        replace: true
    });
};

watch(() => filters.value.search, () => {
    updateFilters();
});

const currencyToDelete = ref(null);
const activeMenuId = ref(null);

const toggleMenu = (name) => {
    activeMenuId.value = activeMenuId.value === name ? null : name;
};

const handleOutsideClick = (event) => {
    if (activeMenuId.value !== null && !event.target.closest('.context-menu-container')) {
        activeMenuId.value = null;
    }
};

onMounted(() => {
    document.addEventListener('click', handleOutsideClick);
});

onUnmounted(() => {
    document.removeEventListener('click', handleOutsideClick);
});

const confirmDelete = (currency) => {
    currencyToDelete.value = currency;
    activeMenuId.value = null;
};

const deleteCurrency = () => {
    if (currencyToDelete.value) {
        router.delete(route('admin.currencies.destroy', currencyToDelete.value.name), {
            onSuccess: () => {
                currencyToDelete.value = null;
            },
        });
    }
};
</script>

<template>
    <AppLayout title="Waluty">
        <div class="py-12 bg-gray-50/50 min-h-screen">
            <div class="max-w-[1600px] mx-auto sm:px-6 lg:px-8">
                <!-- Header Section -->
                <div class="bg-white rounded-[3rem] shadow-xl shadow-blue-900/5 border border-gray-100 p-10 mb-8">
                    <div class="flex flex-col md:flex-row md:items-center justify-between gap-8">
                        <div>
                            <h3 class="text-2xl font-black text-[#0A2C5C] uppercase tracking-tight">Rynek pracy - waluty</h3>
                            <p class="text-[10px] font-bold text-gray-400 uppercase tracking-widest mt-1">
                                Zarządzanie listą walut, ich skrótami i symbolami
                            </p>
                        </div>

                        <Link
                            :href="route('admin.currencies.create')"
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
                            placeholder="Szukaj waluty..."
                            class="block w-full pl-14 pr-4 py-4 bg-gray-50 border-none rounded-2xl text-sm focus:ring-2 focus:ring-blue-500/20 focus:bg-white transition-all font-medium"
                        />
                    </div>
                </div>

                <!-- Table -->
                <div class="bg-white rounded-[3rem] shadow-xl shadow-blue-900/5 border border-gray-100 overflow-visible">
                    <table class="w-full text-left border-collapse">
                        <thead>
                            <tr class="border-b border-gray-50">
                                <th class="p-8 text-[10px] font-black text-[#0A2C5C] uppercase tracking-[0.2em]">Skrót (Name)</th>
                                <th class="p-8 text-[10px] font-black text-[#0A2C5C] uppercase tracking-[0.2em]">Pełna nazwa (Code)</th>
                                <th class="p-8 text-[10px] font-black text-[#0A2C5C] uppercase tracking-[0.2em]">Symbol (Value)</th>
                                <th class="p-8 text-[10px] font-black text-[#0A2C5C] uppercase tracking-[0.2em] text-right">Akcje</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-50">
                            <tr v-for="currency in currencies" :key="currency.name" class="group hover:bg-blue-50/30 transition-colors">
                                <td class="p-8">
                                    <span class="text-sm font-black text-[#0A2C5C] uppercase tracking-wider bg-blue-50 px-3 py-1 rounded-lg">
                                        {{ currency.name }}
                                    </span>
                                </td>
                                <td class="p-8">
                                    <span class="text-sm font-medium text-gray-600">{{ currency.code }}</span>
                                </td>
                                <td class="p-8">
                                    <span class="text-sm font-black text-[#0A2C5C]">{{ currency.value }}</span>
                                </td>
                                <td class="p-8 text-right relative">
                                    <div
                                        class="context-menu-container relative inline-block text-left"
                                        :class="{'z-[100]': activeMenuId === currency.name, 'z-1': activeMenuId !== currency.name}"
                                    >
                                        <button
                                            @click.stop="toggleMenu(currency.name)"
                                            class="p-3 bg-gray-50 hover:bg-[#0A2C5C] text-gray-400 hover:text-white rounded-2xl transition-all active:scale-95 group/btn border border-gray-100 hover:border-[#0A2C5C]"
                                            :class="{'bg-[#0A2C5C] text-white': activeMenuId === currency.name}"
                                        >
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                 stroke-width="2" stroke="currentColor" class="w-5 h-5">
                                               <path stroke-linecap="round" stroke-linejoin="round"
                                                     d="M12 6.75a.75.75 0 1 1 0-1.5.75.75 0 0 1 0 1.5ZM12 12.75a.75.75 0 1 1 0-1.5.75.75 0 0 1 0 1.5ZM12 18.75a.75.75 0 1 1 0-1.5.75.75 0 0 1 0 1.5Z"/>
                                            </svg>
                                        </button>

                                        <!-- Dropdown Menu -->
                                        <div
                                            v-if="activeMenuId === currency.name"
                                            class="absolute right-0 mt-3 w-64 bg-white rounded-3xl shadow-2xl shadow-blue-900/20 border border-gray-100 z-[100] overflow-hidden py-3 animate-in fade-in zoom-in duration-200 origin-top-right"
                                        >
                                            <Link
                                                :href="route('admin.currencies.edit', currency.name)"
                                                class="flex items-center gap-3 px-6 py-4 text-[10px] font-black uppercase tracking-widest text-gray-600 hover:text-[#0A2C5C] hover:bg-blue-50 transition-colors border-b border-gray-50 group"
                                            >
                                                <div
                                                    class="w-8 h-8 rounded-xl bg-blue-50 flex items-center justify-center group-hover:bg-[#0A2C5C] transition-colors text-blue-500 group-hover:text-white">
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-4 h-4">
                                                        <path stroke-linecap="round" stroke-linejoin="round" d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" />
                                                    </svg>
                                                </div>
                                                Edytuj walutę
                                            </Link>

                                            <button
                                                @click="confirmDelete(currency)"
                                                class="w-full flex items-center gap-3 px-6 py-4 text-[10px] font-black uppercase tracking-widest text-red-600 hover:bg-red-50 transition-colors text-left group"
                                            >
                                                <div
                                                    class="w-8 h-8 rounded-xl bg-red-50 flex items-center justify-center group-hover:bg-red-600 transition-colors text-red-500 group-hover:text-white">
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-4 h-4">
                                                        <path stroke-linecap="round" stroke-linejoin="round" d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                                                    </svg>
                                                </div>
                                                Usuń walutę
                                            </button>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>

                    <div v-if="currencies.length === 0" class="p-20 text-center">
                        <div class="inline-flex items-center justify-center w-20 h-20 bg-gray-50 rounded-full mb-6">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-8 h-8 text-gray-300">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.407 2.67 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.407-2.67-1M12 16v1m4-11a4 4 0 11-8 0 4 4 0 018 0z" />
                            </svg>
                        </div>
                        <h3 class="text-lg font-black text-[#0A2C5C] uppercase tracking-tight">Nie znaleziono walut</h3>
                        <p class="text-sm text-gray-400 font-medium mt-1">Spróbuj zmienić frazę wyszukiwania lub dodaj nową walutę.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Delete Confirmation Modal -->
        <DialogModal :show="currencyToDelete !== null" @close="currencyToDelete = null">
            <template #title>
                <div class="flex items-center gap-4 text-red-600">
                    <div class="p-3 bg-red-50 rounded-2xl">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                        </svg>
                    </div>
                    Usuń walutę
                </div>
            </template>

            <template #content>
                <p class="text-sm text-gray-500 leading-relaxed">
                    Czy na pewno chcesz usunąć walutę <span class="font-black text-[#0A2C5C]">{{ currencyToDelete?.name }}</span>?
                    Tej operacji nie można cofnąć.
                </p>
            </template>

            <template #footer>
                <SecondaryButton @click="currencyToDelete = null" class="!rounded-2xl !px-6">
                    Anuluj
                </SecondaryButton>

                <DangerButton
                    class="ml-3 !rounded-2xl !px-6 !bg-red-600 hover:!bg-red-700 shadow-lg shadow-red-100"
                    @click="deleteCurrency"
                >
                    Usuń walutę
                </DangerButton>
            </template>
        </DialogModal>
    </AppLayout>
</template>

<style lang="scss">
.animate-in {
    animation-duration: 0.2s;
    animation-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
    animation-fill-mode: both;
}

.fade-in {
    @keyframes fadeIn {
        from { opacity: 0; }
        to { opacity: 1; }
    }
    animation-name: fadeIn;
}

.zoom-in {
    @keyframes zoomIn {
        from { transform: scale(0.95); }
        to { transform: scale(1); }
    }
    animation-name: zoomIn;
}
</style>
