<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import { router, useForm } from '@inertiajs/vue3';
import { ref, watch } from 'vue';
import pickBy from 'lodash/pickBy';
import Pagination from '@/Components/Pagination.vue';
import DialogModal from '@/Components/DialogModal.vue';
import SecondaryButton from '@/Components/SecondaryButton.vue';
import DangerButton from '@/Components/DangerButton.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import InputError from '@/Components/InputError.vue';
import TextInput from '@/Components/TextInput.vue';
import InputLabel from '@/Components/InputLabel.vue';

const props = defineProps({
    blocks: Object,
    filters: Object,
});

const filters = ref({
    search: props.filters.search || '',
    type: props.filters.type || '',
});

const confirmingAddition = ref(false);
const confirmingDeletion = ref(null);

const form = useForm({
    value: '',
    type: 'ip',
    reason: '',
});

const openAddModal = () => {
    form.reset();
    confirmingAddition.value = true;
};

const closeAddModal = () => {
    confirmingAddition.value = false;
    form.reset();
};

const submitAdd = () => {
    form.post(route('admin.security.ip-email-blocks.store'), {
        preserveScroll: true,
        onSuccess: () => closeAddModal(),
    });
};

const confirmDeletion = (block) => {
    confirmingDeletion.value = block;
};

const closeDeleteModal = () => {
    confirmingDeletion.value = null;
};

const deleteBlock = () => {
    router.delete(route('admin.security.ip-email-blocks.destroy', confirmingDeletion.value.id), {
        preserveScroll: true,
        onSuccess: () => closeDeleteModal(),
    });
};

const updateFilters = () => {
    router.get(route('admin.security.ip-email-blocks.index'), pickBy(filters.value), {
        preserveState: true,
        preserveScroll: true,
        replace: true
    });
};

watch(() => filters.value, () => {
    updateFilters();
}, { deep: true });

const getTypeLabel = (type) => {
    return type === 'ip' ? 'IP' : 'Email';
};

const getTypeClass = (type) => {
    return type === 'ip' ? 'bg-orange-50 text-orange-600' : 'bg-purple-50 text-purple-600';
};
</script>

<template>
    <AppLayout title="Blokada IP i Email">
        <div class="py-12 bg-gray-50/50 min-h-screen">
            <div class="max-w-[1600px] mx-auto sm:px-6 lg:px-8">
                <!-- Header Section -->
                <div class="bg-white rounded-[3rem] shadow-xl shadow-blue-900/5 border border-gray-100 p-10 mb-8">
                    <div class="flex flex-col md:flex-row md:items-center justify-between gap-8">
                        <div>
                            <h3 class="text-2xl font-black text-[#0A2C5C] uppercase tracking-tight">Bezpieczeństwo - Blokada IP i Email</h3>
                            <p class="text-[10px] font-bold text-gray-400 uppercase tracking-widest mt-1">
                                Zarządzanie listą blokowania wysyłki formularzy (IP oraz Email)
                            </p>
                        </div>

                        <button
                            @click="openAddModal"
                            class="px-8 py-4 bg-[#0A2C5C] hover:bg-[#0d3671] text-white rounded-2xl font-black text-xs uppercase tracking-widest transition-all active:scale-95 shadow-lg shadow-blue-900/20 flex items-center gap-2"
                        >
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor" class="w-4 h-4">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                            </svg>
                            Dodaj blokadę
                        </button>
                    </div>
                </div>

                <!-- Filters -->
                <div class="bg-white rounded-[3rem] shadow-xl shadow-blue-900/5 border border-gray-100 p-8 mb-8">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div class="relative group">
                            <label class="text-[10px] font-black text-gray-400 uppercase tracking-widest mb-2 block ml-4">Szukaj</label>
                            <input
                                v-model="filters.search"
                                type="text"
                                placeholder="Wpisz IP, email lub powód..."
                                class="block w-full px-6 py-4 bg-gray-50 border-none rounded-2xl text-sm focus:ring-2 focus:ring-blue-500/20 focus:bg-white transition-all font-medium"
                            />
                        </div>

                        <div class="relative group">
                            <label class="text-[10px] font-black text-gray-400 uppercase tracking-widest mb-2 block ml-4">Typ</label>
                            <select
                                v-model="filters.type"
                                class="block w-full px-6 py-4 bg-gray-50 border-none rounded-2xl text-sm focus:ring-2 focus:ring-blue-500/20 focus:bg-white transition-all font-medium appearance-none"
                            >
                                <option value="">Wszystkie</option>
                                <option value="ip">IP</option>
                                <option value="email">Email</option>
                            </select>
                        </div>
                    </div>
                </div>

                <!-- Table Section -->
                <div class="bg-white rounded-[3rem] shadow-xl shadow-blue-900/5 border border-gray-100 overflow-hidden">
                    <div class="overflow-x-auto">
                        <table class="w-full">
                            <thead>
                                <tr class="bg-gray-50/50">
                                    <th class="px-10 py-8 text-left text-[10px] font-black text-gray-400 uppercase tracking-widest">Wartość (IP/Email)</th>
                                    <th class="px-10 py-8 text-left text-[10px] font-black text-gray-400 uppercase tracking-widest">Typ</th>
                                    <th class="px-10 py-8 text-left text-[10px] font-black text-gray-400 uppercase tracking-widest">Powód</th>
                                    <th class="px-10 py-8 text-left text-[10px] font-black text-gray-400 uppercase tracking-widest">Data dodania</th>
                                    <th class="px-10 py-8 text-right text-[10px] font-black text-gray-400 uppercase tracking-widest">Akcje</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-50">
                                <tr v-for="block in blocks.data" :key="block.id" class="group hover:bg-blue-50/30 transition-all duration-300">
                                    <td class="px-10 py-8">
                                        <span class="text-sm font-bold text-[#0A2C5C] tracking-tight group-hover:text-blue-600 transition-colors">
                                            {{ block.value }}
                                        </span>
                                    </td>
                                    <td class="px-10 py-8">
                                        <span :class="['px-4 py-1.5 rounded-xl text-[10px] font-black uppercase tracking-widest', getTypeClass(block.type)]">
                                            {{ getTypeLabel(block.type) }}
                                        </span>
                                    </td>
                                    <td class="px-10 py-8">
                                        <span class="text-xs font-medium text-gray-500 italic">
                                            {{ block.reason || '-' }}
                                        </span>
                                    </td>
                                    <td class="px-10 py-8">
                                        <span class="text-xs font-bold text-gray-400">
                                            {{ new Date(block.created_at).toLocaleDateString('pl-PL') }}
                                        </span>
                                    </td>
                                    <td class="px-10 py-8 text-right">
                                        <button
                                            @click="confirmDeletion(block)"
                                            class="p-3 bg-red-50 text-red-400 rounded-xl hover:bg-red-500 hover:text-white transition-all shadow-sm hover:shadow-red-500/20"
                                        >
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-4 h-4">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                                            </svg>
                                        </button>
                                    </td>
                                </tr>
                                <tr v-if="blocks.data.length === 0">
                                    <td colspan="5" class="px-10 py-12 text-center">
                                        <div class="flex flex-col items-center gap-4">
                                            <div class="w-16 h-16 bg-gray-50 rounded-[2rem] flex items-center justify-center text-gray-300">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m9-.75a9 9 0 1 1-18 0 9 9 0 0 1 18 0Zm-9 3.75h.008v.008H12v-.008Z" />
                                                </svg>
                                            </div>
                                            <span class="text-sm font-bold text-gray-400 uppercase tracking-widest">Brak blokad spełniających kryteria</span>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="mt-8">
                    <Pagination :links="blocks.links" />
                </div>
            </div>
        </div>

        <!-- Add Modal -->
        <DialogModal :show="confirmingAddition" @close="closeAddModal">
            <template #title>
                Dodaj nową blokadę
            </template>

            <template #content>
                <div class="grid grid-cols-1 gap-6">
                    <div>
                        <InputLabel for="type" value="Typ blokady" />
                        <select
                            id="type"
                            v-model="form.type"
                            class="mt-1 block w-full border-gray-300 focus:border-blue-500 focus:ring-blue-500 rounded-md shadow-sm"
                        >
                            <option value="ip">IP</option>
                            <option value="email">Email</option>
                        </select>
                        <InputError :message="form.errors.type" class="mt-2" />
                    </div>

                    <div>
                        <InputLabel for="value" :value="form.type === 'ip' ? 'Adres IP' : 'Adres Email'" />
                        <TextInput
                            id="value"
                            v-model="form.value"
                            type="text"
                            class="mt-1 block w-full"
                            placeholder="Wpisz wartość..."
                        />
                        <InputError :message="form.errors.value" class="mt-2" />
                    </div>

                    <div>
                        <InputLabel for="reason" value="Powód blokady (opcjonalnie)" />
                        <TextInput
                            id="reason"
                            v-model="form.reason"
                            type="text"
                            class="mt-1 block w-full"
                            placeholder="Np. Spam, niechciane wiadomości..."
                        />
                        <InputError :message="form.errors.reason" class="mt-2" />
                    </div>
                </div>
            </template>

            <template #footer>
                <SecondaryButton @click="closeAddModal">
                    Anuluj
                </SecondaryButton>

                <PrimaryButton
                    class="ml-3"
                    :class="{ 'opacity-25': form.processing }"
                    :disabled="form.processing"
                    @click="submitAdd"
                >
                    Dodaj blokadę
                </PrimaryButton>
            </template>
        </DialogModal>

        <!-- Delete Modal -->
        <DialogModal :show="confirmingDeletion !== null" @close="closeDeleteModal">
            <template #title>
                Usuń blokadę
            </template>

            <template #content>
                Czy na pewno chcesz usunąć blokadę dla <strong>{{ confirmingDeletion?.value }}</strong>?
                Ta osoba będzie mogła ponownie wysyłać wiadomości i aplikacje.
            </template>

            <template #footer>
                <SecondaryButton @click="closeDeleteModal">
                    Anuluj
                </SecondaryButton>

                <DangerButton
                    class="ml-3"
                    @click="deleteBlock"
                >
                    Usuń blokadę
                </DangerButton>
            </template>
        </DialogModal>
    </AppLayout>
</template>
