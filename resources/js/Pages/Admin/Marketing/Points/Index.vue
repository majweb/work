<script setup>
import AppLayout from "@/Layouts/AppLayout.vue";
import { Link, router, useForm } from "@inertiajs/vue3";
import { ref, reactive } from "vue";

const props = defineProps({
    operations: Array,
    products: Array,
});

const editingOperation = ref(null);
const operationForm = useForm({
    points: 0
});

const editOperation = (operation) => {
    editingOperation.value = operation.id;
    operationForm.points = operation.points;
};

const cancelOperationEdit = () => {
    editingOperation.value = null;
    operationForm.reset();
};

const saveOperation = (id) => {
    operationForm.put(route('admin.points.update-operation', id), {
        preserveScroll: true,
        onSuccess: () => {
            editingOperation.value = null;
        }
    });
};

const restoreOperation = (id) => {
    router.put(route('admin.points.restore-operation', id), {}, {
        preserveScroll: true,
    });
};

const editingProduct = ref(null);
const productForm = useForm({
    points: 0,
    price: 0
});

const editProduct = (product) => {
    editingProduct.value = product.id;
    productForm.points = product.points;
    productForm.price = product.price;
};

const cancelProductEdit = () => {
    editingProduct.value = null;
    productForm.reset();
};

const saveProduct = (id) => {
    productForm.put(route('admin.admin-points.update', id), {
        preserveScroll: true,
        onSuccess: () => {
            editingProduct.value = null;
            router.reload({ only: ['products'] });
        }
    });
};

const toggleActive = (id) => {
    router.put(route('admin.points.toggle', id), {}, {
        preserveScroll: true,
        onSuccess: () => {
            router.reload({ only: ['products'] });
        }
    });
};
</script>

<template>
    <AppLayout title="Punkty">
        <div class="py-12 bg-gray-50/50 min-h-screen">
            <div class="max-w-[1600px] mx-auto sm:px-6 lg:px-8">
                <!-- Punkty za operacje -->
                <div class="bg-white rounded-[3rem] shadow-xl shadow-blue-900/5 border border-gray-100 p-10 mb-8">
                    <div class="flex items-center justify-between">
                        <div>
                            <h3 class="text-2xl font-black text-[#0A2C5C] uppercase tracking-tight">Punkty</h3>
                        </div>
                    </div>

                    <div class="mt-10 overflow-x-auto">
                        <table class="w-full">
                            <thead>
                                <tr class="text-left border-b border-gray-50">
                                    <th class="pb-6 text-[10px] font-black text-[#00a0e3] uppercase tracking-[0.2em] px-4">Nazwa</th>
                                    <th class="pb-6 text-[10px] font-black text-[#00a0e3] uppercase tracking-[0.2em] px-4 text-center">Liczba punktów</th>
                                    <th class="pb-6 text-[10px] font-black text-[#00a0e3] uppercase tracking-[0.2em] px-4">Kategoria</th>
                                    <th class="pb-6 text-[10px] font-black text-[#00a0e3] uppercase tracking-[0.2em] px-4 text-right">Akcje</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-50">
                                <tr v-for="operation in operations" :key="operation.id" class="group hover:bg-gray-50/50 transition-colors">
                                    <td class="py-6 px-4">
                                        <span class="text-sm font-bold text-[#0A2C5C]">{{ operation.name }}</span>
                                    </td>
                                    <td class="py-6 px-4 text-center">
                                        <div v-if="editingOperation === operation.id" class="flex items-center justify-center gap-2">
                                            <input
                                                v-model="operationForm.points"
                                                type="number"
                                                class="w-24 px-3 py-1 text-sm border-gray-200 rounded-lg focus:ring-[#00a0e3] focus:border-[#00a0e3]"
                                            />
                                        </div>
                                        <span v-else class="text-sm font-medium text-gray-500">
                                            {{ operation.points.toLocaleString() }}
                                        </span>
                                    </td>
                                    <td class="py-6 px-4">
                                        <span class="text-sm font-medium text-gray-500">
                                            {{ operation.category }}
                                        </span>
                                    </td>
                                    <td class="py-6 px-4">
                                        <div class="flex justify-end gap-2">
                                            <template v-if="editingOperation === operation.id">
                                                <button
                                                    @click="saveOperation(operation.id)"
                                                    class="px-4 py-1.5 bg-[#00a0e3] text-white text-[10px] font-black uppercase tracking-widest rounded-xl hover:bg-blue-500 transition-colors"
                                                >
                                                    Zapisz
                                                </button>
                                                <button
                                                    @click="cancelOperationEdit"
                                                    class="px-4 py-1.5 bg-gray-100 text-gray-500 text-[10px] font-black uppercase tracking-widest rounded-xl hover:bg-gray-200 transition-colors"
                                                >
                                                    Anuluj
                                                </button>
                                            </template>
                                            <button
                                                v-else
                                                @click="editOperation(operation)"
                                                class="px-6 py-2 bg-[#0A2C5C] text-white text-[10px] font-black uppercase tracking-widest rounded-xl hover:bg-blue-900 transition-colors"
                                            >
                                                Edytuj
                                            </button>
                                            <button
                                                v-if="!editingOperation && operation.points !== operation.default_points"
                                                @click="restoreOperation(operation.id)"
                                                class="px-6 py-2 bg-orange-500 text-white text-[10px] font-black uppercase tracking-widest rounded-xl hover:bg-orange-600 transition-colors"
                                            >
                                                Przywróć ilość
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <!-- Produkty Punkty -->
                <div class="bg-white rounded-[3rem] shadow-xl shadow-blue-900/5 border border-gray-100 p-10 mb-8">
                    <div class="flex items-center justify-between">
                        <div>
                            <h3 class="text-2xl font-black text-[#0A2C5C] uppercase tracking-tight">Kupno kredytów</h3>
                        </div>
                    </div>

                    <div class="mt-10 overflow-x-auto">
                        <table class="w-full">
                            <thead>
                                <tr class="text-left border-b border-gray-50">
                                    <th class="pb-6 text-[10px] font-black text-[#00a0e3] uppercase tracking-[0.2em] px-4">Nazwa</th>
                                    <th class="pb-6 text-[10px] font-black text-[#00a0e3] uppercase tracking-[0.2em] px-4 text-center">Liczba punktów</th>
                                    <th class="pb-6 text-[10px] font-black text-[#00a0e3] uppercase tracking-[0.2em] px-4">Cena</th>
                                    <th class="pb-6 text-[10px] font-black text-[#00a0e3] uppercase tracking-[0.2em] px-4 text-center">Status</th>
                                    <th class="pb-6 text-[10px] font-black text-[#00a0e3] uppercase tracking-[0.2em] px-4 text-right">Akcje</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-50">
                                <tr v-for="product in products" :key="product.id" class="group hover:bg-gray-50/50 transition-colors">
                                    <td class="py-6 px-4">
                                        <span class="text-sm font-bold text-[#0A2C5C]">{{ product.name }}</span>
                                    </td>
                                    <td class="py-6 px-4 text-center">
                                        <div v-if="editingProduct === product.id" class="flex items-center justify-center gap-2">
                                            <input
                                                v-model="productForm.points"
                                                type="number"
                                                class="w-24 px-3 py-1 text-sm border-gray-200 rounded-lg focus:ring-[#00a0e3] focus:border-[#00a0e3]"
                                            />
                                        </div>
                                        <span v-else class="text-sm font-medium text-gray-500">
                                            {{ product.points.toLocaleString() }}
                                        </span>
                                    </td>
                                    <td class="py-6 px-4">
                                        <div v-if="editingProduct === product.id" class="flex items-center justify-center gap-2">
                                            <input
                                                v-model="productForm.price"
                                                type="number"
                                                step="0.01"
                                                class="w-24 px-3 py-1 text-sm border-gray-200 rounded-lg focus:ring-[#00a0e3] focus:border-[#00a0e3]"
                                            />
                                            <span class="text-sm text-gray-500">$</span>
                                        </div>
                                        <span v-else class="text-sm font-medium text-gray-500">
                                            {{ product.price ? product.price.toLocaleString() + ' $' : '-' }}
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
                                        <div class="flex justify-end gap-2">
                                            <template v-if="editingProduct === product.id">
                                                <button
                                                    @click="saveProduct(product.id)"
                                                    class="px-4 py-1.5 bg-[#00a0e3] text-white text-[10px] font-black uppercase tracking-widest rounded-xl hover:bg-blue-500 transition-colors"
                                                >
                                                    Zapisz
                                                </button>
                                                <button
                                                    @click="cancelProductEdit"
                                                    class="px-4 py-1.5 bg-gray-100 text-gray-500 text-[10px] font-black uppercase tracking-widest rounded-xl hover:bg-gray-200 transition-colors"
                                                >
                                                    Anuluj
                                                </button>
                                            </template>
                                            <button
                                                v-else
                                                @click="editProduct(product)"
                                                class="px-6 py-2 bg-[#0A2C5C] text-white text-[10px] font-black uppercase tracking-widest rounded-xl hover:bg-blue-900 transition-colors"
                                            >
                                                Edytuj
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                                <tr v-if="products.length === 0">
                                    <td colspan="5" class="py-12 text-center text-gray-400 text-sm uppercase tracking-widest font-bold">
                                        Brak dostępnych produktów typu Punkty
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
