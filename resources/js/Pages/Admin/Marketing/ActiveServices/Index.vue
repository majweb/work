<script setup>
import AppLayout from "@/Layouts/AppLayout.vue";
import { Link, router } from "@inertiajs/vue3";
import Pagination from "@/Components/Pagination.vue";
import { ref, watch } from "vue";
import { debounce } from "lodash";

const props = defineProps({
    activeServices: Object,
    filters: Object,
    products: Array,
});

const filters = ref({
    service: props.filters.service ?? "",
    date_from: props.filters.date_from ?? "",
    date_to: props.filters.date_to ?? "",
    status: props.filters.status ?? "",
});

const applyFilters = debounce(() => {
    router.get(route('admin.active-services.index'), filters.value, {
        preserveState: true,
        preserveScroll: true,
        replace: true,
    });
}, 300);

watch(filters, () => {
    applyFilters();
}, { deep: true });

const resetFilters = () => {
    filters.value = {
        service: "",
        date_from: "",
        date_to: "",
        status: "",
    };
};

const getDownloadUrl = (id) => {
    return route('admin.active-services.download', id);
};
</script>

<template>
    <AppLayout title="Aktywne usługi">
        <div class="py-12 bg-gray-50/50 min-h-screen">
            <div class="max-w-[1600px] mx-auto sm:px-6 lg:px-8">
                <!-- Header Card -->
                <div class="bg-white rounded-[3rem] shadow-xl shadow-blue-900/5 border border-gray-100 p-10 mb-8">
                    <div class="flex items-center justify-between">
                        <div>
                            <h3 class="text-2xl font-black text-[#0A2C5C] uppercase tracking-tight">Aktywne usługi</h3>
                            <p class="text-gray-400 text-[10px] font-bold uppercase tracking-widest mt-2">Lista zakupionych i aktywnych usług przez firmy</p>
                        </div>
                    </div>

                    <!-- Filters -->
                    <div class="mt-8 grid grid-cols-1 md:grid-cols-4 gap-6 bg-gray-50/50 p-6 rounded-2xl border border-gray-100">
                        <div>
                            <label class="block text-[10px] font-black text-[#00a0e3] uppercase tracking-widest mb-2">Usługa</label>
                            <select v-model="filters.service" class="w-full border-gray-200 rounded-xl text-sm focus:ring-[#00a0e3] focus:border-[#00a0e3] transition-all">
                                <option value="">Wszystkie usługi</option>
                                <option v-for="product in products" :key="product.id" :value="product.id">
                                    {{ product.name }}
                                </option>
                            </select>
                        </div>
                        <div>
                            <label class="block text-[10px] font-black text-[#00a0e3] uppercase tracking-widest mb-2">Status</label>
                            <select v-model="filters.status" class="w-full border-gray-200 rounded-xl text-sm focus:ring-[#00a0e3] focus:border-[#00a0e3] transition-all">
                                <option value="">Wszystkie statusy</option>
                                <option value="active">Aktywne</option>
                                <option value="expired">Zakończone</option>
                                <option value="future">Zaplanowane</option>
                            </select>
                        </div>
                        <div>
                            <label class="block text-[10px] font-black text-[#00a0e3] uppercase tracking-widest mb-2">Data od</label>
                            <input type="date" v-model="filters.date_from" class="w-full border-gray-200 rounded-xl text-sm focus:ring-[#00a0e3] focus:border-[#00a0e3] transition-all" />
                        </div>
                        <div>
                            <div class="flex items-center justify-between mb-2">
                                <label class="block text-[10px] font-black text-[#00a0e3] uppercase tracking-widest">Data do</label>
                                <button
                                    v-if="filters.service || filters.status || filters.date_from || filters.date_to"
                                    @click="resetFilters"
                                    class="text-[10px] font-black text-red-400 hover:text-red-600 uppercase tracking-widest transition-colors"
                                >
                                    Resetuj
                                </button>
                            </div>
                            <input type="date" v-model="filters.date_to" class="w-full border-gray-200 rounded-xl text-sm focus:ring-[#00a0e3] focus:border-[#00a0e3] transition-all" />
                        </div>
                    </div>

                    <div class="mt-10 overflow-x-auto">
                        <table class="w-full">
                            <thead>
                                <tr class="text-left border-b border-gray-50">
                                    <th class="pb-6 text-[10px] font-black text-[#00a0e3] uppercase tracking-[0.2em] px-4">Firma</th>
                                    <th class="pb-6 text-[10px] font-black text-[#00a0e3] uppercase tracking-[0.2em] px-4">Usługa</th>
                                    <th class="pb-6 text-[10px] font-black text-[#00a0e3] uppercase tracking-[0.2em] px-4">Start</th>
                                    <th class="pb-6 text-[10px] font-black text-[#00a0e3] uppercase tracking-[0.2em] px-4">Koniec</th>
                                    <th class="pb-6 text-[10px] font-black text-[#00a0e3] uppercase tracking-[0.2em] px-4">Ilość</th>
                                    <th class="pb-6 text-[10px] font-black text-[#00a0e3] uppercase tracking-[0.2em] px-4 text-center">Status</th>
                                    <th class="pb-6 text-[10px] font-black text-[#00a0e3] uppercase tracking-[0.2em] px-4 text-right">Akcje</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-50">
                                <tr v-for="service in activeServices.data" :key="service.id" class="group hover:bg-gray-50/50 transition-colors">
                                    <td class="py-6 px-4">
                                        <span class="text-sm font-bold text-[#0A2C5C] uppercase tracking-tight">{{ service.user_name }}</span>
                                    </td>
                                    <td class="py-6 px-4">
                                        <span class="text-sm font-medium text-gray-600">{{ service.product_name }}</span>
                                    </td>
                                    <td class="py-6 px-4">
                                        <span class="text-sm font-medium text-gray-500 uppercase tracking-wide">
                                            {{ service.start }}
                                        </span>
                                    </td>
                                    <td class="py-6 px-4">
                                        <span class="text-sm font-medium text-gray-500 uppercase tracking-wide">
                                            {{ service.end }}
                                        </span>
                                    </td>
                                    <td class="py-6 px-4">
                                        <span class="text-sm font-bold text-[#00a0e3]">
                                            {{ service.qty || '-' }}
                                        </span>
                                    </td>
                                    <td class="py-6 px-4">
                                        <div class="flex items-center justify-center gap-2">
                                            <span v-if="service.is_active" class="flex items-center gap-1.5 px-2.5 py-1 bg-green-50 text-green-600 text-[10px] font-black uppercase tracking-widest rounded-lg border border-green-100">
                                                <span class="w-1.5 h-1.5 rounded-full bg-green-500 animate-pulse"></span>
                                                Aktywna
                                            </span>
                                            <span v-else class="px-2.5 py-1 bg-gray-50 text-gray-400 text-[10px] font-black uppercase tracking-widest rounded-lg border border-gray-100">
                                                Nieaktywna
                                            </span>
                                        </div>
                                    </td>
                                    <td class="py-6 px-4 text-right">
                                        <div class="flex justify-end gap-3">
                                            <Link
                                                :href="route('admin.active-services.edit', service.id)"
                                                class="flex items-center gap-2 px-4 py-2 bg-white border-2 border-gray-200 text-gray-400 text-[10px] font-black uppercase tracking-widest rounded-xl hover:border-[#0A2C5C] hover:text-[#0A2C5C] transition-all"
                                            >
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor" class="w-4 h-4">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" />
                                                </svg>
                                                Edytuj
                                            </Link>
                                            <a
                                                v-if="service.certificate_pdf"
                                                :href="getDownloadUrl(service.id)"
                                                class="flex items-center gap-2 px-4 py-2 bg-white border-2 border-[#00a0e3] text-[#00a0e3] text-[10px] font-black uppercase tracking-widest rounded-xl hover:bg-[#00a0e3] hover:text-white transition-all group"
                                            >
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor" class="w-4 h-4">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M3 16.5v2.25A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75V16.5M7.5 12 12 16.5m0 0L16.5 12M12 16.5V3" />
                                                </svg>
                                                Pobierz PDF
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                <tr v-if="activeServices.data.length === 0">
                                    <td colspan="7" class="py-12 text-center text-gray-400 text-sm uppercase tracking-widest font-bold">
                                        Brak aktywnych usług
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="mt-8">
                        <Pagination :links="activeServices.links" />
                    </div>
                </div>
            </div>
        </div>
    </AppLayout>
</template>
