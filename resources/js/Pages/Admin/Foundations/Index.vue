<script setup>
import AppLayout from "@/Layouts/AppLayout.vue";
import { Link, router } from "@inertiajs/vue3";
import Pagination from "@/Components/Pagination.vue";

const props = defineProps({
    foundations: Object
});

const toggleActive = (id) => {
    router.put(route('admin.foundations.toggle', id), {}, { preserveScroll: true });
};
</script>

<template>
    <AppLayout :title="__('foundations.foundations')">
        <div class="py-12 bg-gray-50/50 min-h-screen">
            <div class="max-w-screen-2xl mx-auto sm:px-6 lg:px-8">
                <!-- Header Card -->
                <div class="bg-white rounded-[3rem] shadow-xl shadow-blue-900/5 border border-gray-100 p-10 mb-8">
                    <div class="flex items-center justify-between">
                        <div>
                            <h3 class="text-2xl font-black text-[#0A2C5C] uppercase tracking-tight">{{ __('foundations.foundations') }}</h3>
                            <p class="text-[10px] font-bold text-gray-400 uppercase tracking-widest mt-1">Zarządzaj fundacjami wspieranymi przez Twoją firmę</p>
                        </div>
                        <Link
                            :href="route('admin.foundations.create')"
                            class="inline-flex items-center px-10 py-4 bg-[#0A2C5C] border border-transparent rounded-2xl font-black text-[10px] text-white uppercase tracking-widest hover:bg-blue-800 transition duration-200 shadow-lg shadow-blue-900/20"
                        >
                            Dodaj fundacje
                        </Link>
                    </div>
                </div>

                <div class="bg-white rounded-[3rem] shadow-xl shadow-blue-900/5 border border-gray-100 p-8">
                    <div class="flex justify-between mb-8 px-2">
                        <h3 class="text-[10px] font-black text-[#0A2C5C] uppercase tracking-[0.2em]">
                            Lista fundacji
                        </h3>
                    </div>

                    <div class="overflow-x-auto">
                        <table class="min-w-full divide-y divide-gray-200">
                            <thead class="bg-gray-50">
                            <tr>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">
                                    ID
                                </th>
                                <th class="px-6 py-3">Logo</th>
                                <th class="px-6 py-3">Nazwa</th>
                                <th class="px-6 py-3">Www</th>
                                <th class="px-6 py-3">Ilość powiązań z zam.</th>
                                <th class="px-6 py-3 text-center">Aktywny</th>
                                <th class="px-6 py-3 text-center">Akcje</th>
                            </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                            <tr v-for="p in foundations.data" :key="p.id">
                                <td class="px-6 py-4">{{ p.id }}</td>

                                <td class="px-6 py-4">
                                    <img :src="p.logo" alt="" class="h-10 object-contain" />
                                </td>

                                <td class="px-6 py-4">{{ p.name }}</td>

                                <td class="px-6 py-4 text-blue-600 underline">
                                    <a :href="p.link" target="_blank" v-if="p.link">{{ p.link }}</a>
                                    <span v-else class="text-gray-400">Brak</span>
                                </td>
                                <td class="px-6 py-4">{{ p.orders_count }}</td>

                                <td class="px-6 py-4 text-center">
                                    <button
                                        @click="toggleActive(p.id)"
                                        :class="p.active ? 'bg-green-500' : 'bg-red-500'"
                                        class="px-3 py-1 rounded text-white text-xs"
                                    >
                                        {{ p.active ? 'TAK' : 'NIE' }}
                                    </button>
                                </td>

                                <td class="px-6 py-4 text-center">
                                    <div class="flex gap-3 justify-center">
                                        <Link
                                            :href="route('admin.foundations.edit', p.id)"
                                            class="text-indigo-600 hover:text-indigo-900"
                                        >
                                            Edytuj
                                        </Link>
                                        <button
                                            :disabled="p.orders_count"
                                            @click="router.delete(route('admin.foundations.destroy', p.id))"
                                            class="text-red-600 hover:text-red-900"
                                            :class="{'opacity-50 cursor-not-allowed' : p.orders_count}"
                                        >
                                            Usuń
                                        </button>
                                    </div>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="mt-6">
                        <Pagination :links="foundations.links" />
                    </div>
                </div>
            </div>
        </div>
    </AppLayout>
</template>
