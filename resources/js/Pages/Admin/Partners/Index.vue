<script setup>
import AppLayout from "@/Layouts/AppLayout.vue";
import { Link, router } from "@inertiajs/vue3";
import Pagination from "@/Components/Pagination.vue";
import ConfirmationModal from '@/Components/ConfirmationModal.vue';
import DangerButton from '@/Components/DangerButton.vue';
import SecondaryButton from '@/Components/SecondaryButton.vue';
import { ref, onMounted, onUnmounted } from 'vue';

const props = defineProps({
    partners: Object
});

const confirmingPartnerDeletion = ref(false);
const partnerBeingDeleted = ref(null);
const activeMenuId = ref(null);

const confirmPartnerDeletion = (partner) => {
    partnerBeingDeleted.value = partner;
    confirmingPartnerDeletion.value = true;
    activeMenuId.value = null;
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
    router.put(route('admin.partners.toggle', id), {}, {
        preserveScroll: true,
        onSuccess: () => {
            activeMenuId.value = null;
        }
    });
};

const toggleMenu = (id) => {
    activeMenuId.value = activeMenuId.value === id ? null : id;
};

const handleOutsideClick = (event) => {
    if (activeMenuId.value && !event.target.closest('.context-menu-container')) {
        activeMenuId.value = null;
    }
};

onMounted(() => {
    document.addEventListener('click', handleOutsideClick);
});

onUnmounted(() => {
    document.removeEventListener('click', handleOutsideClick);
});
</script>

<template>
    <AppLayout :title="__('partners.partners')">
        <div class="py-12 bg-gray-50/50 min-h-screen px-2 sm:px-0">
            <div class="max-w-[1600px] mx-auto sm:px-6 lg:px-8">
                <!-- Header Card -->
                <div class="bg-white rounded-[3rem] shadow-xl shadow-blue-900/5 border border-gray-100 p-10 mb-8">
                    <div class="flex flex-col md:flex-row md:items-center justify-between gap-6">
                        <div>
                            <div class="flex items-center gap-4 mb-2">
                                <div>
                                    <h3 class="text-2xl font-black text-[#0A2C5C] uppercase tracking-tight">{{ __('partners.partners') }}</h3>
                                    <p class="text-[10px] font-bold text-gray-400 uppercase tracking-widest mt-1">Zarządzaj partnerami wyświetlanymi w aplikacji</p>
                                </div>
                            </div>
                        </div>
                        <Link
                            :href="route('admin.partners.create')"
                            class="inline-flex items-center px-10 py-4 bg-[#0A2C5C] border border-transparent rounded-2xl font-black text-[10px] text-white uppercase tracking-widest hover:bg-[#00a0e3] transition duration-200 shadow-lg shadow-blue-900/20"
                        >
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor" class="w-4 h-4 mr-2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                            </svg>
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

                    <div class="overflow-visible">
                        <table class="min-w-full divide-y divide-gray-100">
                            <thead>
                                <tr>
                                    <th class="px-6 py-4 text-left text-[8px] font-black text-gray-300 uppercase tracking-widest">ID</th>
                                    <th class="px-6 py-4 text-left text-[8px] font-black text-gray-300 uppercase tracking-widest">Logo</th>
                                    <th class="px-6 py-4 text-left text-[8px] font-black text-gray-300 uppercase tracking-widest">Nazwa</th>
                                    <th class="px-6 py-4 text-left text-[8px] font-black text-gray-300 uppercase tracking-widest">WWW</th>
                                    <th class="px-6 py-4 text-center text-[8px] font-black text-gray-300 uppercase tracking-widest">Status</th>
                                    <th class="px-6 py-4 text-right text-[8px] font-black text-gray-300 uppercase tracking-widest">Akcje</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-100">
                                <tr v-for="p in partners.data" :key="p.id" class="hover:bg-gray-50/50 transition-colors group">
                                    <td class="px-6 py-4 text-xs font-bold text-gray-400">#{{ p.id }}</td>

                                    <td class="px-6 py-4">
                                        <div class="w-12 h-12 rounded-xl bg-gray-50 p-2 border border-gray-100 flex items-center justify-center overflow-hidden group-hover:scale-110 transition-transform duration-300">
                                            <img :src="p.photo" alt="" class="max-w-full max-h-full object-contain" />
                                        </div>
                                    </td>

                                    <td class="px-6 py-4">
                                        <span class="text-xs font-black text-[#0A2C5C] uppercase tracking-tight">{{ p.name }}</span>
                                    </td>

                                    <td class="px-6 py-4">
                                        <a :href="p.link" target="_blank" v-if="p.link" class="text-[10px] font-bold text-blue-500 hover:text-blue-700 transition-colors uppercase tracking-widest flex items-center gap-1">
                                            <span>Link</span>
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-3 h-3">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 6H5.25A2.25 2.25 0 0 0 3 8.25v10.5A2.25 2.25 0 0 0 5.25 21h10.5A2.25 2.25 0 0 0 18 18.75V10.5m-10.5 6L21 3m0 0h-5.25M21 3v5.25" />
                                            </svg>
                                        </a>
                                        <span v-else class="text-[10px] font-bold text-gray-300 uppercase tracking-widest">Brak</span>
                                    </td>

                                    <td class="px-6 py-4 text-center">
                                        <span
                                            class="inline-flex items-center px-4 py-1.5 rounded-xl text-[8px] font-black uppercase tracking-widest border transition-all shadow-sm"
                                            :class="p.active ? 'bg-blue-100 text-blue-600 border-blue-200' : 'bg-red-50 text-red-400 border-red-100'"
                                        >
                                            <span class="w-1.5 h-1.5 rounded-full mr-2" :class="p.active ? 'bg-blue-400' : 'bg-red-400'"></span>
                                            {{ p.active ? 'Aktywny' : 'Nieaktywny' }}
                                        </span>
                                    </td>

                                    <td class="px-6 py-4 text-right">
                                        <div class="relative inline-block text-left context-menu-container">
                                            <button
                                                @click.stop="toggleMenu(p.id)"
                                                class="p-2 hover:bg-gray-100 rounded-xl transition-colors text-gray-400 hover:text-[#0A2C5C]"
                                            >
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-5 h-5">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.75a.75.75 0 1 1 0-1.5.75.75 0 0 1 0 1.5ZM12 12.75a.75.75 0 1 1 0-1.5.75.75 0 0 1 0 1.5ZM12 18.75a.75.75 0 1 1 0-1.5.75.75 0 0 1 0 1.5Z" />
                                                </svg>
                                            </button>

                                            <div
                                                v-if="activeMenuId === p.id"
                                                class="absolute right-0 mt-2 w-56 bg-white rounded-3xl shadow-2xl shadow-blue-900/10 border border-gray-100 py-4 z-[100] transform transition-all duration-200 ease-out"
                                            >
                                                <Link
                                                    :href="route('admin.partners.edit', p.id)"
                                                    class="flex items-center px-6 py-3 text-[10px] font-black text-gray-600 uppercase tracking-widest hover:bg-gray-50 hover:text-[#0A2C5C] transition-colors"
                                                >
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-4 h-4 mr-3 text-blue-400">
                                                        <path stroke-linecap="round" stroke-linejoin="round" d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" />
                                                    </svg>
                                                    Edytuj dane
                                                </Link>

                                                <button
                                                    @click="toggleActive(p.id)"
                                                    class="w-full flex items-center px-6 py-3 text-[10px] font-black text-gray-600 uppercase tracking-widest hover:bg-gray-50 hover:text-[#0A2C5C] transition-colors"
                                                >
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-4 h-4 mr-3" :class="p.active ? 'text-red-400' : 'text-green-400'">
                                                        <path stroke-linecap="round" stroke-linejoin="round" d="M16.023 9.348h4.992v-.001M2.985 19.644v-4.992m0 0h4.992m-4.993 0 3.181 3.183a8.25 8.25 0 0 0 13.803-3.7M4.031 9.865a8.25 8.25 0 0 1 13.803-3.7l3.181 3.182m0-4.991v4.99" />
                                                    </svg>
                                                    {{ p.active ? 'Dezaktywuj' : 'Aktywuj' }}
                                                </button>

                                                <div class="h-px bg-gray-50 my-2 mx-6"></div>

                                                <button
                                                    @click="confirmPartnerDeletion(p)"
                                                    class="w-full flex items-center px-6 py-3 text-[10px] font-black text-red-500 uppercase tracking-widest hover:bg-red-50 transition-colors"
                                                >
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-4 h-4 mr-3">
                                                        <path stroke-linecap="round" stroke-linejoin="round" d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                                                    </svg>
                                                    Usuń partnera
                                                </button>
                                            </div>
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
                <div class="text-[#0A2C5C] font-black uppercase tracking-tight">Usuń partnera</div>
            </template>

            <template #content>
                <div class="text-sm text-gray-500 font-medium">
                    Czy na pewno chcesz usunąć partnera <span class="font-black text-[#0A2C5C]">{{ partnerBeingDeleted?.name }}</span>? Ta operacja jest nieodwracalna.
                </div>
            </template>

            <template #footer>
                <SecondaryButton @click="closeModal" class="rounded-2xl border-gray-100 px-6 py-3 font-black text-[10px] uppercase tracking-widest">
                    Anuluj
                </SecondaryButton>

                <DangerButton
                    class="ml-3 rounded-2xl px-6 py-3 font-black text-[10px] uppercase tracking-widest shadow-lg shadow-red-900/20"
                    @click="deletePartner"
                >
                    Usuń partnera
                </DangerButton>
            </template>
        </ConfirmationModal>
    </AppLayout>
</template>
s
