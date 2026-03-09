<script setup>
import AppLayout from "@/Layouts/AppLayout.vue";
import { Link, router } from "@inertiajs/vue3";
import Pagination from "@/Components/Pagination.vue";
import ConfirmationModal from '@/Components/ConfirmationModal.vue';
import DangerButton from '@/Components/DangerButton.vue';
import SecondaryButton from '@/Components/SecondaryButton.vue';
import { ref } from 'vue';

const props = defineProps({
    partners: Object
});

const confirmingPartnerDeletion = ref(false);
const partnerBeingDeleted = ref(null);

const confirmPartnerDeletion = (partner) => {
    partnerBeingDeleted.value = partner;
    confirmingPartnerDeletion.value = true;
};

const deletePartner = () => {
    router.delete(route('admin.partners.destroy', partnerBeingDeleted.value.id), {
        preserveScroll: true,
        onSuccess: () => closeModal(),
    });
};

const closeModal = () => {
    confirmingPartnerDeletion.value = false;
    partnerBeingDeleted.value = null;
};

const toggleActive = (id) => {
    router.put(route('admin.partners.toggle', id), {}, { preserveScroll: true });
};
</script>

<template>
    <AppLayout :title="__('partners.partners')">
        <div class="py-12 bg-gray-50/50 min-h-screen">
            <div class="max-w-[80vw] mx-auto sm:px-6 lg:px-8">
                <!-- Header Card -->
                <div class="bg-white rounded-[3rem] shadow-xl shadow-blue-900/5 border border-gray-100 p-10 mb-8">
                    <div class="flex items-center justify-between">
                        <div>
                            <h3 class="text-2xl font-black text-[#0A2C5C] uppercase tracking-tight">{{ __('partners.partners') }}</h3>
                            <p class="text-[10px] font-bold text-gray-400 uppercase tracking-widest mt-1">Zarządzaj partnerami wyświetlanymi w aplikacji</p>
                        </div>
                        <Link
                            :href="route('admin.partners.create')"
                            class="inline-flex items-center px-10 py-4 bg-[#0A2C5C] border border-transparent rounded-2xl font-black text-[10px] text-white uppercase tracking-widest hover:bg-blue-800 transition duration-200 shadow-lg shadow-blue-900/20"
                        >
                            Dodaj partnera
                        </Link>
                    </div>
                </div>

                <div class="bg-white rounded-[3rem] shadow-xl shadow-blue-900/5 border border-gray-100 p-8">
                    <div class="flex justify-between mb-8 px-2 border-b border-gray-50 pb-6">
                        <h3 class="text-[10px] font-black text-[#0A2C5C] uppercase tracking-[0.2em]">
                            Lista partnerów
                        </h3>
                    </div>

                    <div class="overflow-x-auto">
                        <table class="min-w-full divide-y divide-gray-100">
                            <thead>
                            <tr>
                                <th class="px-6 py-4 text-left text-[8px] font-black text-gray-300 uppercase tracking-widest">ID</th>
                                <th class="px-6 py-4 text-left text-[8px] font-black text-gray-300 uppercase tracking-widest">Logo</th>
                                <th class="px-6 py-4 text-left text-[8px] font-black text-gray-300 uppercase tracking-widest">Nazwa</th>
                                <th class="px-6 py-4 text-left text-[8px] font-black text-gray-300 uppercase tracking-widest">WWW</th>
                                <th class="px-6 py-4 text-center text-[8px] font-black text-gray-300 uppercase tracking-widest">Aktywny</th>
                                <th class="px-6 py-4 text-center text-[8px] font-black text-gray-300 uppercase tracking-widest">Akcje</th>
                            </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-100">
                            <tr v-for="p in partners.data" :key="p.id" class="hover:bg-gray-50/50 transition-colors group">
                                <td class="px-6 py-4 text-xs font-bold text-gray-400">#{{ p.id }}</td>

                                <td class="px-6 py-4">
                                    <div class="w-12 h-12 rounded-xl bg-gray-50 p-2 border border-gray-100 flex items-center justify-center overflow-hidden">
                                        <img :src="p.photo" alt="" class="max-w-full max-h-full object-contain" />
                                    </div>
                                </td>

                                <td class="px-6 py-4">
                                    <span class="text-xs font-black text-[#0A2C5C] uppercase tracking-tight">{{ p.name }}</span>
                                </td>

                                <td class="px-6 py-4">
                                    <a :href="p.link" target="_blank" v-if="p.link" class="text-[10px] font-bold text-blue-500 hover:text-blue-700 transition-colors uppercase tracking-widest">Link</a>
                                    <span v-else class="text-[10px] font-bold text-gray-300 uppercase tracking-widest">Brak</span>
                                </td>

                                <td class="px-6 py-4 text-center">
                                    <button
                                        @click="toggleActive(p.id)"
                                        class="px-4 py-2 rounded-xl text-[8px] font-black uppercase tracking-widest transition-all shadow-lg"
                                        :class="p.active ? 'bg-green-500 text-white shadow-green-900/10' : 'bg-red-500 text-white shadow-red-900/10'"
                                    >
                                        {{ p.active ? 'TAK' : 'NIE' }}
                                    </button>
                                </td>

                                <td class="px-6 py-4 text-center">
                                    <div class="flex gap-2 justify-center">
                                        <Link
                                            :href="route('admin.partners.edit', p.id)"
                                            class="p-2 bg-gray-50 rounded-xl text-[#0A2C5C] hover:bg-blue-600 hover:text-white transition-all shadow-sm"
                                        >
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-4 h-4">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" />
                                            </svg>
                                        </Link>
                                        <button
                                            @click="confirmPartnerDeletion(p)"
                                            class="p-2 bg-gray-50 rounded-xl text-red-400 hover:bg-red-500 hover:text-white transition-all shadow-sm"
                                        >
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-4 h-4">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                                            </svg>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="mt-6">
                        <Pagination :links="partners.links" />
                    </div>
                </div>
            </div>
        </div>

        <ConfirmationModal :show="confirmingPartnerDeletion" @close="closeModal">
            <template #title>
                Usuń partnera
            </template>

            <template #content>
                Czy na pewno chcesz usunąć partnera {{ partnerBeingDeleted?.name }}? Ta operacja jest nieodwracalna.
            </template>

            <template #footer>
                <SecondaryButton @click="closeModal">
                    Anuluj
                </SecondaryButton>

                <DangerButton
                    class="ml-3"
                    @click="deletePartner"
                >
                    Usuń partnera
                </DangerButton>
            </template>
        </ConfirmationModal>
    </AppLayout>
</template>
s
