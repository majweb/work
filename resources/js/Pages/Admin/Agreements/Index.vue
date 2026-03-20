<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import { Link, usePage, router } from '@inertiajs/vue3';
import { ref, computed } from 'vue';
import DialogModal from '@/Components/DialogModal.vue';
import SecondaryButton from '@/Components/SecondaryButton.vue';
import DangerButton from '@/Components/DangerButton.vue';

const props = defineProps({
    agreements: Array,
    langs: Array,
    types: Array,
});

const getTranslation = (value) => {
    if (!value) return '-';
    const locale = usePage().props.locale || 'pl';
    return value[locale] || value['pl'] || Object.values(value)[0] || '-';
};

const selectedTab = ref(props.langs[0]);

const agreementToDelete = ref(null);
const confirmDelete = (agreement) => {
    agreementToDelete.value = agreement;
};

const deleteAgreement = () => {
    if (agreementToDelete.value) {
        router.delete(route('admin.agreements.destroy', agreementToDelete.value.id), {
            onSuccess: () => {
                agreementToDelete.value = null;
            },
        });
    }
};

const typeLabels = {
    'newsletter': 'Newsletter',
    'contact_form': 'Formularz kontaktowy',
    'app_logged_in': 'Aplikacja (zalogowany)',
    'app_not_logged_in': 'Aplikacja (niezalogowany)',
    'tickets': 'Zgłoszenia',
    'firm_registration': 'Rejestracja firmy',
    'worker_registration': 'Rejestracja pracownika'
};

const groupedAgreements = computed(() => {
    const groups = {};
    props.types.forEach(type => {
        groups[type] = props.agreements.filter(a => a.type === type);
    });
    return groups;
});
</script>

<template>
    <AppLayout title="Zarządzanie zgodami">
        <div class="py-12 bg-gray-50/50 min-h-screen">
            <div class="max-w-[1600px] mx-auto sm:px-6 lg:px-8">
                <!-- Header Section -->
                <div class="bg-white rounded-[3rem] shadow-xl shadow-blue-900/5 border border-gray-100 p-10 mb-8">
                    <div class="flex flex-col md:flex-row md:items-center justify-between gap-8">
                        <div>
                            <h3 class="text-2xl font-black text-[#0A2C5C] uppercase tracking-tight">Zarządzanie zgodami</h3>
                            <p class="text-[10px] font-bold text-gray-400 uppercase tracking-widest mt-1">
                                Konfiguracja treści zgód dla formularzy w wielu językach
                            </p>
                        </div>

                        <Link
                            :href="route('admin.agreements.create')"
                            class="px-8 py-4 bg-[#00AEEF] hover:bg-[#0096ce] text-white rounded-2xl font-black text-xs uppercase tracking-widest transition-all active:scale-95 shadow-lg shadow-blue-200 flex items-center gap-2"
                        >
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="3" stroke="currentColor" class="w-4 h-4">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                            </svg>
                            Dodaj zgodę
                        </Link>
                    </div>
                </div>

                <div v-for="type in types" :key="type" class="mb-12">
                    <h4 class="text-lg font-black text-[#0A2C5C] uppercase tracking-widest mb-6 px-4 flex items-center gap-4">
                        {{ typeLabels[type] || type }}
                        <span class="h-px bg-gray-200 flex-grow"></span>
                        <span class="text-xs font-bold text-gray-400 bg-white px-3 py-1 rounded-full border border-gray-100">
                            {{ groupedAgreements[type].length }}
                        </span>
                    </h4>

                    <div v-if="groupedAgreements[type].length > 0" class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-6">
                        <div v-for="agreement in groupedAgreements[type]" :key="agreement.id"
                            class="bg-white rounded-[2.5rem] shadow-lg shadow-blue-900/5 border border-gray-100 p-8 flex flex-col justify-between transition-all hover:shadow-xl hover:-translate-y-1"
                            :class="{'opacity-60 grayscale-[0.5]': !agreement.is_active}"
                        >
                            <div>
                                <div class="flex items-center justify-between mb-4">
                                    <span class="px-3 py-1 rounded-full text-[9px] font-black uppercase tracking-widest"
                                        :class="agreement.is_active ? 'bg-green-100 text-green-600' : 'bg-red-100 text-red-600'">
                                        {{ agreement.is_active ? 'Aktywna' : 'Nieaktywna' }}
                                    </span>
                                    <span class="text-[10px] font-bold text-gray-300 uppercase tracking-widest">ID: #{{ agreement.id }}</span>
                                </div>
                                <div class="text-sm text-gray-600 mb-6 line-clamp-4 font-medium leading-relaxed">
                                    {{ getTranslation(agreement.description) }}
                                </div>
                            </div>

                            <div class="flex items-center justify-end gap-3 pt-6 border-t border-gray-50">
                                <Link :href="route('admin.agreements.edit', agreement.id)" class="p-3 text-blue-500 hover:bg-blue-50 rounded-xl transition-colors">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-5 h-5">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H4.5A2.25 2.25 0 0 1 2.25 18.75V7.5A2.25 2.25 0 0 1 4.5 5.25H12" />
                                    </svg>
                                </Link>
                                <button @click="confirmDelete(agreement)" class="p-3 text-red-500 hover:bg-red-50 rounded-xl transition-colors">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-5 h-5">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>

                    <div v-else class="bg-white rounded-[2.5rem] p-12 text-center border border-dashed border-gray-200">
                        <p class="text-gray-400 font-bold text-sm uppercase tracking-widest">Brak zgód dla tego typu</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Delete Confirmation -->
        <DialogModal :show="agreementToDelete !== null" @close="agreementToDelete = null">
            <template #title>Usuń zgodę</template>
            <template #content>
                Czy na pewno chcesz usunąć tę zgodę? Ta operacja jest nieodwracalna.
            </template>
            <template #footer>
                <SecondaryButton @click="agreementToDelete = null" class="mr-3">Anuluj</SecondaryButton>
                <DangerButton @click="deleteAgreement">Usuń</DangerButton>
            </template>
        </DialogModal>
    </AppLayout>
</template>

<style scoped>
.line-clamp-4 {
    display: -webkit-box;
    -webkit-line-clamp: 4;
    -webkit-box-orient: vertical;
    overflow: hidden;
}
</style>
