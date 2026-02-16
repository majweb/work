<script setup>
import { Link, router } from '@inertiajs/vue3';
import AppLayout from '@/Layouts/AppLayout.vue';
import DialogModal from '@/Components/DialogModal.vue';
import { ref } from 'vue';

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
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('translate.externalCompanies') }}
            </h2>
        </template>

        <div class="py-8">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white rounded-3xl shadow-sm border border-gray-100 p-6 sm:p-8">
                    <div class="flex justify-end mb-6">
                        <Link :href="route('external-companies.create')">
                            <button class="bg-[#1a335d] text-white px-10 py-3 rounded-xl font-bold text-sm uppercase tracking-widest hover:bg-[#14284b] transition-all active:scale-95 shadow-md">
                                {{ __('translate.create') }}
                            </button>
                        </Link>
                    </div>

                    <div class="space-y-4">
                        <!-- Header Listy -->
                        <div class="grid grid-cols-12 px-6 mb-2">
                            <div class="col-span-3 text-[#00b0e8] font-black text-sm uppercase tracking-[0.2em] text-center">
                                {{ __('translate.firm') }}
                            </div>
                            <div class="col-span-2 text-[#00b0e8] font-black text-sm uppercase tracking-[0.2em] text-center">
                                {{ __('translate.abbreviation') }}
                            </div>
                            <div class="col-span-2 text-[#00b0e8] font-black text-sm uppercase tracking-[0.2em] text-center">
                                {{ __('translate.email') }}
                            </div>
                            <div class="col-span-3 text-[#00b0e8] font-black text-sm uppercase tracking-[0.2em] text-center">
                                {{ __('translate.note') }}
                            </div>
                            <div class="col-span-2"></div>
                        </div>

                        <!-- Elementy Listy -->
                        <div v-if="externalCompanies.length" class="space-y-3">
                            <div v-for="company in externalCompanies" :key="company.id"
                                 class="border border-gray-100 rounded-2xl hover:bg-gray-50/50 transition-colors">
                                <div class="grid grid-cols-12 items-center py-4 px-6">
                                    <div class="col-span-3 font-bold text-[#1a335d] text-lg text-center">
                                        {{ company.name }}
                                    </div>
                                    <div class="col-span-2 text-gray-500 font-medium text-xs text-center uppercase tracking-widest">
                                        {{ company.abbreviation }}
                                    </div>
                                    <div class="col-span-2 text-gray-400 text-xs text-center truncate px-2">
                                        {{ company.email }}
                                    </div>
                                    <div class="col-span-3 text-gray-400 text-[11px] text-center leading-relaxed px-4" :title="company.note">
                                        {{ company.note && company.note.length > 100 ? company.note.substring(0, 100) + '...' : company.note }}
                                    </div>
                                    <div class="col-span-2 flex justify-center gap-3">
                                        <Link :href="route('external-companies.edit', company.id)">
                                            <button class="bg-[#1a335d] text-white px-8 py-2 rounded-lg font-black text-[10px] uppercase tracking-[0.15em] hover:bg-[#14284b] transition-all shadow-sm">
                                                {{ __('translate.edit') }}
                                            </button>
                                        </Link>
                                        <button @click="openDeleteModal(company)" class="text-red-300 hover:text-red-500 transition-colors p-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div v-else class="py-16 text-center text-gray-400 bg-gray-50/50 rounded-3xl border-2 border-dashed border-gray-100 font-medium">
                            {{ __('translate.noExternalCompanies') }}
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
                <button
                    type="button"
                    class="inline-flex justify-center px-4 py-2 bg-white border border-gray-300 rounded-md font-semibold text-xs text-gray-700 uppercase tracking-widest shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 disabled:opacity-25 transition"
                    @click="closeDeleteModal"
                >
                    {{ __('translate.cancel') }}
                </button>
                <button
                    type="button"
                    class="ml-2 inline-flex justify-center px-4 py-2 bg-red-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2 disabled:opacity-25 transition"
                    @click="deleteCompany"
                >
                    {{ __('translate.delete') }}
                </button>
            </template>
        </DialogModal>
    </AppLayout>
</template>
