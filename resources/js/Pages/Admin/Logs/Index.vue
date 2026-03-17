<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import { router } from '@inertiajs/vue3';
import { ref, computed } from 'vue';
import ConfirmationModal from '@/Components/ConfirmationModal.vue';
import DangerButton from '@/Components/DangerButton.vue';
import SecondaryButton from '@/Components/SecondaryButton.vue';

const props = defineProps({
    content: String,
});

const confirmingClear = ref(false);

const search = ref('');

const logLines = computed(() => {
    if (!props.content) return [];
    return props.content.split('\n');
});

const filteredLogLines = computed(() => {
    if (!search.value) return logLines.value;
    return logLines.value.filter(line =>
        line.toLowerCase().includes(search.value.toLowerCase())
    );
});

const getLineColor = (line) => {
    if (line.includes('.ERROR')) return 'text-red-400';
    if (line.includes('.WARNING')) return 'text-yellow-400';
    if (line.includes('.INFO')) return 'text-green-400';
    return 'text-blue-100';
};

const clearLogs = () => {
    router.delete(route('admin.logs.clear'), {
        preserveScroll: true,
        onSuccess: () => {
            confirmingClear.value = false;
        },
    });
};
</script>

<template>
    <AppLayout title="Logi systemowe">
        <div class="py-12 bg-gray-50/50 min-h-screen">
            <div class="max-w-[1600px] mx-auto sm:px-6 lg:px-8">
                <!-- Header Section -->
                <div class="bg-white rounded-[3rem] shadow-xl shadow-blue-900/5 border border-gray-100 p-10 mb-8">
                    <div class="flex flex-col md:flex-row md:items-center justify-between gap-8">
                        <div>
                            <h3 class="text-2xl font-black text-[#0A2C5C] uppercase tracking-tight">Bezpieczeństwo - Logi</h3>
                            <p class="text-[10px] font-bold text-gray-400 uppercase tracking-widest mt-1">
                                Podgląd pliku laravel.log i zarządzanie jego treścią
                            </p>
                        </div>

                        <div class="flex flex-wrap items-center gap-4">
                            <a
                                :href="route('admin.logs.download')"
                                class="px-8 py-4 bg-[#0A2C5C] hover:bg-[#0d3671] text-white rounded-2xl font-black text-xs uppercase tracking-widest transition-all active:scale-95 shadow-lg shadow-blue-900/20 flex items-center gap-2"
                            >
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor" class="w-4 h-4">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M3 16.5v2.25A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75V16.5M7.5 12 12 16.5m0 0L16.5 12M12 16.5V3" />
                                </svg>
                                Pobierz
                            </a>

                            <button
                                @click="confirmingClear = true"
                                class="px-8 py-4 bg-red-600 hover:bg-red-700 text-white rounded-2xl font-black text-xs uppercase tracking-widest transition-all active:scale-95 shadow-lg shadow-red-900/20 flex items-center gap-2"
                            >
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor" class="w-4 h-4">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                                </svg>
                                Wyczyść logi
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Filters -->
                <div class="bg-white rounded-[3rem] shadow-xl shadow-blue-900/5 border border-gray-100 p-8 mb-8">
                    <div class="relative group">
                        <label class="text-[10px] font-black text-gray-400 uppercase tracking-widest mb-2 block ml-4">Szukaj w logach</label>
                        <div class="relative">
                            <input
                                v-model="search"
                                type="text"
                                placeholder="Filtruj treść logów..."
                                class="block w-full px-6 py-4 bg-gray-50 border-none rounded-2xl text-sm focus:ring-2 focus:ring-blue-500/20 focus:bg-white transition-all font-medium pr-12"
                            />
                            <div class="absolute right-4 top-1/2 -translate-y-1/2 text-gray-300">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor" class="w-5 h-5">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Log Content -->
                <div class="bg-white rounded-[3rem] shadow-xl shadow-blue-900/5 border border-gray-100 overflow-hidden">
                    <div class="p-8">
                        <div v-if="logLines.length > 0" class="bg-[#0A2C5C] rounded-[2rem] p-8 overflow-x-auto overflow-y-auto max-h-[600px]">
                            <pre class="text-blue-100 font-mono text-xs leading-relaxed"><div v-for="(line, index) in filteredLogLines" :key="index" class="py-1 border-b border-white/5 last:border-0 min-h-[1.5rem]" :class="getLineColor(line)">{{ line || ' ' }}</div></pre>
                        </div>

                        <div v-else class="p-20 text-center">
                            <div class="inline-flex items-center justify-center w-20 h-20 bg-gray-50 rounded-full mb-6">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-8 h-8 text-gray-300">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 12h3.75M9 15h3.375m1.875-10.125h-9.75a2.25 2.25 0 0 0-2.25 2.25v12.75a2.25 2.25 0 0 0 2.25 2.25h11.25a2.25 2.25 0 0 0 2.25-2.25V7.5L14.25 3.75Z" />
                                </svg>
                            </div>
                            <h3 class="text-lg font-black text-[#0A2C5C] uppercase tracking-tight">Brak logów</h3>
                            <p class="text-sm text-gray-400 font-medium mt-1">Plik logów jest pusty.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Clear Logs Confirmation Modal -->
        <ConfirmationModal :show="confirmingClear" @close="confirmingClear = false">
            <template #title>
                Wyczyść logi
            </template>

            <template #content>
                Czy na pewno chcesz usunąć całą treść pliku logów? Tej operacji nie można cofnąć.
            </template>

            <template #footer>
                <SecondaryButton @click="confirmingClear = false">
                    Anuluj
                </SecondaryButton>

                <DangerButton
                    class="ml-3"
                    @click="clearLogs"
                >
                    Wyczyść
                </DangerButton>
            </template>
        </ConfirmationModal>
    </AppLayout>
</template>

<style scoped>
pre::-webkit-scrollbar {
    height: 8px;
    width: 8px;
}
pre::-webkit-scrollbar-track {
    background: rgba(255, 255, 255, 0.05);
    border-radius: 10px;
}
pre::-webkit-scrollbar-thumb {
    background: rgba(255, 255, 255, 0.2);
    border-radius: 10px;
}
pre::-webkit-scrollbar-thumb:hover {
    background: rgba(255, 255, 255, 0.3);
}
</style>
