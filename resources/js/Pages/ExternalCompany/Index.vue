<script setup>
import { Link, router } from '@inertiajs/vue3';
import AppLayout from '@/Layouts/AppLayout.vue';
import DialogModal from '@/Components/DialogModal.vue';
import DangerButton from "@/Components/DangerButton.vue";
import SecondaryButton from "@/Components/SecondaryButton.vue";
import { ref } from 'vue';
import Pagination from "@/Components/Pagination.vue";

defineProps({
    externalCompanies: Array,
});

const showDeleteModal = ref(false);
const companyToDelete = ref(null);

const openDeleteModal = (company) => {
    companyToDelete.value = company;
    showDeleteModal.value = true;
};

const closeDeleteModal = () => {
    showDeleteModal.value = false;
    companyToDelete.value = null;
};

const deleteCompany = () => {
    if (!companyToDelete.value) return;

    router.delete(route('external-companies.destroy', companyToDelete.value.id), {
        preserveScroll: true,
        onSuccess: () => closeDeleteModal(),
    });
};
</script>

<template>
    <AppLayout :title="__('translate.externalCompanies')">
        <div class="py-12 bg-gray-50/50 min-h-screen">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white rounded-[3rem] shadow-xl shadow-blue-900/5 border border-gray-100 p-10 mb-8">
                    <div class="flex items-center justify-between">
                        <div>
                            <h3 class="text-2xl font-black text-[#0A2C5C] uppercase tracking-tight">{{ __('translate.externalCompanies') }}</h3>
                            <p class="text-[10px] font-bold text-gray-400 uppercase tracking-widest mt-1">{{ __('translate.externalCompanyDescription') }}</p>
                        </div>
                        <Link :href="route('external-companies.create')" class="inline-flex items-center px-10 py-4 bg-[#0A2C5C] border border-transparent rounded-2xl font-black text-[10px] text-white uppercase tracking-widest hover:bg-blue-800 transition duration-200 shadow-lg shadow-blue-900/20">
                            {{ __('translate.create') }}
                        </Link>
                    </div>
                </div>

                <div v-if="externalCompanies.length === 0" class="bg-white rounded-[3rem] p-20 text-center shadow-xl shadow-blue-900/5 border border-gray-100">
                    <div class="w-20 h-20 bg-gray-50 rounded-full flex items-center justify-center mx-auto mb-6">
                        <svg class="w-10 h-10 text-gray-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                        </svg>
                    </div>
                    <p class="text-xs font-black text-gray-400 uppercase tracking-widest">{{ __('translate.noExternalCompanies') }}</p>
                </div>

                <div v-else class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                    <div v-for="company in externalCompanies" :key="company.id" class="group bg-white rounded-[2.5rem] p-8 shadow-sm border border-gray-100 flex flex-col transition-all duration-300 hover:shadow-xl hover:shadow-blue-900/5 hover:-translate-y-1">
                        <div class="mb-6">
                            <p class="text-[10px] font-black text-gray-300 uppercase tracking-[0.2em] mb-2">
                                ID {{ company.id }} • {{ company.abbreviation }}
                            </p>
                            <h4 class="text-xl font-black text-gray-900 uppercase tracking-tight leading-tight truncate px-2">
                                {{ company.name }}
                            </h4>
                        </div>

                        <div class="bg-gray-50/50 rounded-2xl p-6 border border-gray-100/50 mb-8 flex-grow">
                            <div class="mb-4">
                                <p class="text-[10px] font-black text-gray-400 uppercase tracking-widest mb-1">{{ __('translate.email') }}</p>
                                <p class="text-xs font-bold text-[#00a0e3] truncate uppercase tracking-widest">{{ company.email }}</p>
                            </div>
                            <div>
                                <p class="text-[10px] font-black text-gray-400 uppercase tracking-widest mb-1">{{ __('translate.note') }}</p>
                                <p class="text-[10px] font-bold text-gray-400 leading-relaxed line-clamp-3" :title="company.note">
                                    {{ company.note }}
                                </p>
                            </div>
                        </div>

                        <div class="w-full space-y-2 mt-auto">
                            <Link :href="route('external-companies.edit', company.id)" class="flex justify-center items-center w-full bg-[#0A2C5C] text-white font-black py-3 rounded-2xl text-[10px] uppercase tracking-widest hover:bg-blue-800 transition shadow-md shadow-blue-900/10">
                                {{ __('translate.edit') }}
                            </Link>
                            <button @click="openDeleteModal(company)" class="block w-full bg-red-50 text-red-600 font-black py-3 rounded-2xl text-[10px] uppercase tracking-widest hover:bg-red-100 transition">
                                {{ __('translate.delete') }}
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <DialogModal :show="showDeleteModal" @close="closeDeleteModal">
            <template #title>
                {{ __('translate.deleteExternalCompany') }}
            </template>

            <template #content>
                <div class="mt-2">
                    <p class="text-sm text-gray-600">{{ __('translate.confirmDeleteExternalCompany') }}</p>
                </div>
            </template>

            <template #footer>
                <SecondaryButton @click="closeDeleteModal">
                    {{ __('translate.cancel') }}
                </SecondaryButton>

                <DangerButton class="ml-2" @click="deleteCompany">
                    {{ __('translate.delete') }}
                </DangerButton>
            </template>
        </DialogModal>
    </AppLayout>
</template>
