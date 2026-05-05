<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import { Link, router } from '@inertiajs/vue3';
import { ref, watch, onMounted, onUnmounted } from 'vue';
import DialogModal from '@/Components/DialogModal.vue';
import SecondaryButton from '@/Components/SecondaryButton.vue';
import DangerButton from '@/Components/DangerButton.vue';
import pickBy from 'lodash/pickBy';

const props = defineProps({
    languages: Array,
    filters: Object,
});

const filters = ref({
    search: props.filters.search || '',
});

const updateFilters = () => {
    router.get(route('admin.languages.index'), pickBy(filters.value), {
        preserveState: true,
        preserveScroll: true,
        replace: true
    });
};

watch(() => filters.value.search, () => {
    updateFilters();
});

const languageToDelete = ref(null);
const activeMenuId = ref(null);

const toggleMenu = (id) => {
    activeMenuId.value = activeMenuId.value === id ? null : id;
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

const confirmDelete = (language) => {
    languageToDelete.value = language;
    activeMenuId.value = null;
};

const deleteLanguage = () => {
    if (languageToDelete.value) {
        router.delete(route('admin.languages.destroy', languageToDelete.value.value), {
            onSuccess: () => {
                languageToDelete.value = null;
            },
        });
    }
};
</script>

<template>
    <AppLayout title="Języki">
        <div class="py-12 bg-gray-50/50 min-h-screen px-2 sm:px-0">
            <div class="max-w-[1600px] mx-auto sm:px-6 lg:px-8">
                <!-- Header Section -->
                <div class="bg-white rounded-[3rem] shadow-xl shadow-blue-900/5 border border-gray-100 p-10 mb-8">
                    <div class="flex flex-col md:flex-row md:items-center justify-between gap-8">
                        <div>
                            <h3 class="text-2xl font-black text-[#0A2C5C] uppercase tracking-tight">Rynek pracy - języki</h3>
                            <p class="text-[10px] font-bold text-gray-400 uppercase tracking-widest mt-1">
                                Zarządzanie listą języków i ich nazwami. Języki te są wykorzystywane przy generowaniu szablonu CV podczas aplikacji.
                            </p>
                        </div>

                        <Link
                            :href="route('admin.languages.create')"
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
                            placeholder="Szukaj po kodzie lub nazwie..."
                            class="block w-full pl-14 pr-10 py-4 bg-gray-50 border-none rounded-2xl text-sm font-bold text-[#0A2C5C] placeholder-gray-400 focus:ring-2 focus:ring-blue-500/20 transition-all shadow-inner"
                        />
                    </div>
                </div>

                <!-- Languages Table -->
                <div class="bg-white rounded-[3rem] shadow-xl shadow-blue-900/5 border border-gray-100 overflow-visible">
                    <table class="min-w-full divide-y divide-gray-100">
                        <thead class="bg-gray-50/50">
                            <tr>
                                <th class="px-10 py-6 text-left text-[10px] font-black text-gray-400 uppercase tracking-widest">Kod</th>
                                <th class="px-10 py-6 text-left text-[10px] font-black text-gray-400 uppercase tracking-widest">Nazwa (aktualny język)</th>
                                <th class="px-10 py-6 text-right text-[10px] font-black text-gray-400 uppercase tracking-widest">Akcje</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-50">
                            <tr v-for="lang in languages" :key="lang.value" class="hover:bg-blue-50/30 transition-colors group">
                                <td class="px-10 py-6">
                                    <div class="flex items-center gap-4">
                                        <div class="w-10 h-10 rounded-xl bg-blue-50 flex items-center justify-center text-[#0A2C5C] font-black text-xs">
                                            {{ lang.value.toUpperCase() }}
                                        </div>
                                    </div>
                                </td>
                                <td class="px-10 py-6">
                                    <span class="text-sm font-bold text-[#0A2C5C]">{{ lang.label }}</span>
                                </td>
                                <td class="px-10 py-6 text-right relative">
                                    <div
                                        class="context-menu-container inline-block"
                                        :class="{'z-[100]': activeMenuId === lang.value, 'z-1': activeMenuId !== lang.value}"
                                    >
                                        <button
                                            @click.stop="toggleMenu(lang.value)"
                                            class="p-3 text-gray-400 hover:text-[#0A2C5C] hover:bg-white rounded-xl transition-all"
                                            :class="{'text-[#0A2C5C] bg-white': activeMenuId === lang.value}"
                                        >
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-6 h-6">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.75a.75.75 0 110-1.5.75.75 0 010 1.5zM12 12.75a.75.75 0 110-1.5.75.75 0 010 1.5zM12 18.75a.75.75 0 110-1.5.75.75 0 010 1.5z" />
                                            </svg>
                                        </button>

                                        <!-- Context Menu -->
                                        <div
                                            v-if="activeMenuId === lang.value"
                                            class="absolute right-0 mt-2 w-56 bg-white rounded-2xl shadow-2xl border border-gray-100 z-[100] py-3 overflow-hidden animate-in fade-in slide-in-from-top-2 duration-200"
                                        >
                                            <Link
                                                :href="route('admin.languages.edit', lang.value)"
                                                class="flex items-center gap-3 px-6 py-3 text-xs font-black text-gray-600 hover:text-blue-600 hover:bg-blue-50 transition-all uppercase tracking-widest"
                                            >
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-4 h-4">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" />
                                                </svg>
                                                Edytuj
                                            </Link>
                                            <button
                                                @click="confirmDelete(lang)"
                                                class="w-full flex items-center gap-3 px-6 py-3 text-xs font-black text-red-600 hover:bg-red-50 transition-all uppercase tracking-widest"
                                            >
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-4 h-4">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                                                </svg>
                                                Usuń
                                            </button>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr v-if="languages.length === 0">
                                <td colspan="3" class="px-10 py-12 text-center text-gray-400 font-bold uppercase tracking-widest text-xs">
                                    Brak języków do wyświetlenia
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <!-- Delete Confirmation Modal -->
        <DialogModal :show="languageToDelete !== null" @close="languageToDelete = null">
            <template #title>
                Usuń język
            </template>

            <template #content>
                Czy na pewno chcesz usunąć język <strong>{{ languageToDelete?.label }} ({{ languageToDelete?.value.toUpperCase() }})</strong>?
                Ta operacja usunie język z systemu i z konfiguracji. Może to spowodować błędy, jeśli ten język jest używany w innych miejscach.
            </template>

            <template #footer>
                <SecondaryButton @click="languageToDelete = null">
                    Anuluj
                </SecondaryButton>

                <DangerButton
                    class="ml-3"
                    @click="deleteLanguage"
                >
                    Usuń język
                </DangerButton>
            </template>
        </DialogModal>
    </AppLayout>
</template>
