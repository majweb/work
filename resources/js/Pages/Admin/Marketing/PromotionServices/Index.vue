<script setup>
import AppLayout from "@/Layouts/AppLayout.vue";
import { Link, router } from "@inertiajs/vue3";
import { ref } from "vue";
import SecondaryButton from "@/Components/SecondaryButton.vue";
import DangerButton from "@/Components/DangerButton.vue";

const props = defineProps({
    products: Array,
});

const toggleActive = (id) => {
    router.put(route('admin.promotion-services.toggle', id), {}, { preserveScroll: true });
};
</script>

<template>
    <AppLayout title="Usługi promocyjne">
        <div class="py-12 bg-gray-50/50 min-h-screen">
            <div class="max-w-[1600px] mx-auto sm:px-6 lg:px-8">
                <!-- Header Card -->
                <div class="bg-white rounded-[3rem] shadow-xl shadow-blue-900/5 border border-gray-100 p-10 mb-8">
                    <div class="flex items-center justify-between">
                        <div>
                            <h3 class="text-2xl font-black text-[#0A2C5C] uppercase tracking-tight">Usługi promocyjne</h3>
                        </div>
                    </div>

                    <div class="mt-10 overflow-x-auto">
                        <table class="w-full">
                            <thead>
                                <tr class="text-left border-b border-gray-50">
                                    <th class="pb-6 text-[10px] font-black text-[#00a0e3] uppercase tracking-[0.2em] px-4">Nazwa</th>
                                    <th class="pb-6 text-[10px] font-black text-[#00a0e3] uppercase tracking-[0.2em] px-4">Okres trwania</th>
                                    <th class="pb-6 text-[10px] font-black text-[#00a0e3] uppercase tracking-[0.2em] px-4">Koszt</th>
                                    <th class="pb-6 text-[10px] font-black text-[#00a0e3] uppercase tracking-[0.2em] px-4 text-center">Status</th>
                                    <th class="pb-6 text-[10px] font-black text-[#00a0e3] uppercase tracking-[0.2em] px-4 text-right">Akcje</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-50">
                                <tr v-for="product in products" :key="product.id" class="group hover:bg-gray-50/50 transition-colors">
                                    <td class="py-6 px-4">
                                        <span class="text-sm font-bold text-[#0A2C5C]">{{ product.name }}</span>
                                    </td>
                                    <td class="py-6 px-4">
                                        <span class="text-sm font-medium text-gray-500 uppercase tracking-wide">
                                            {{ product.duration }}
                                        </span>
                                    </td>
                                    <td class="py-6 px-4">
                                        <span class="text-sm font-medium text-gray-500">
                                            {{ product.price ? product.price.toLocaleString() + ' punktów' : '-' }}
                                        </span>
                                    </td>
                                    <td class="py-6 px-4">
                                        <div class="flex justify-center">
                                            <button
                                                @click="toggleActive(product.id)"
                                                class="relative inline-flex h-6 w-11 flex-shrink-0 cursor-pointer rounded-full border-2 border-transparent transition-colors duration-200 ease-in-out focus:outline-none"
                                                :class="product.active ? 'bg-[#00a0e3]' : 'bg-gray-200'"
                                            >
                                                <span
                                                    class="pointer-events-none inline-block h-5 w-5 transform rounded-full bg-white shadow ring-0 transition duration-200 ease-in-out"
                                                    :class="product.active ? 'translate-x-5' : 'translate-x-0'"
                                                ></span>
                                            </button>
                                        </div>
                                    </td>
                                    <td class="py-6 px-4">
                                        <div class="flex justify-end gap-3">
                                            <Link
                                                :href="route('admin.promotion-services.edit', product.id)"
                                                class="px-6 py-2 bg-[#0A2C5C] text-white text-[10px] font-black uppercase tracking-widest rounded-xl hover:bg-blue-900 transition-colors"
                                            >
                                                Edytuj
                                            </Link>
                                        </div>
                                    </td>
                                </tr>
                                <tr v-if="products.length === 0">
                                    <td colspan="5" class="py-12 text-center text-gray-400 text-sm uppercase tracking-widest font-bold">
                                        Brak dostępnych usług promocyjnych
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </AppLayout>
</template>
