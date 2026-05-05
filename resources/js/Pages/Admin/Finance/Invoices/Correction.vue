<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import { useForm, Link } from '@inertiajs/vue3';
import { onMounted } from 'vue';
import InputError from '@/Components/InputError.vue';

const props = defineProps({
    invoice: Object,
});

const form = useForm({
    number: `COR/001/${String(new Date().getMonth() + 1).padStart(2, '0')}/${new Date().getFullYear()}`,
    date_correction: new Date().toISOString().split('T')[0],
    date_invoice: props.invoice.date_invoice,
    amount: props.invoice.amount,
    reason: '',
    name_invoice: props.invoice.user?.firm?.name_invoice || '',
    nip_invoice: props.invoice.user?.firm?.nip_invoice || '',
    street_invoice: props.invoice.user?.firm?.street_invoice || '',
    postal_invoice: props.invoice.user?.firm?.postal_invoice || '',
    city_invoice: props.invoice.user?.firm?.city_invoice || '',
    country_invoice: props.invoice.user?.firm?.country_invoice || '',
});

const submit = () => {
    form.post(route('admin.finance.invoices.correction.store', props.invoice.id));
};
</script>

<template>
    <AppLayout title="Wystaw korektę">
        <div class="py-12 bg-gray-50/50 min-h-screen px-2 sm:px-0">
            <div class="max-w-[1200px] mx-auto sm:px-6 lg:px-8">
                <!-- Header -->
                <div class="mb-8 flex items-center gap-6">
                    <Link :href="route('admin.finance.invoices.index')" class="w-12 h-12 bg-white rounded-2xl flex items-center justify-center text-[#0A2C5C] shadow-lg hover:bg-gray-50 transition-all border border-gray-100 group">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor" class="w-5 h-5 transition-transform group-hover:-translate-x-1">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5" />
                        </svg>
                    </Link>
                    <div>
                        <h2 class="text-2xl font-black text-[#0A2C5C] uppercase tracking-tight">Wystaw korektę</h2>
                        <p class="text-[10px] font-bold text-gray-400 uppercase tracking-widest mt-1">Korekta do faktury nr: {{ invoice.number }}/{{ invoice.month }}/{{ invoice.year }}</p>
                    </div>
                </div>

                <form @submit.prevent="submit" class="space-y-8">
                    <!-- Dane korekty -->
                    <div class="bg-white rounded-[3rem] shadow-xl shadow-blue-900/5 border border-gray-100 p-10">
                        <h3 class="text-xl font-black text-[#0A2C5C] uppercase tracking-tight mb-8 flex items-center gap-3">
                            <span class="w-8 h-8 bg-amber-100 text-amber-600 rounded-lg flex items-center justify-center text-xs">01</span>
                            Dane podstawowe korekty
                        </h3>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                            <div class="space-y-2">
                                <label class="text-[10px] font-black text-gray-400 uppercase tracking-widest px-1">Numer korekty</label>
                                <input v-model="form.number" type="text" class="block w-full py-4 bg-gray-50 border-none rounded-2xl text-[11px] font-black uppercase tracking-widest focus:ring-2 focus:ring-blue-500/20 transition-all px-6"/>
                                <InputError :message="form.errors.number" />
                            </div>
                            <div class="space-y-2">
                                <label class="text-[10px] font-black text-gray-400 uppercase tracking-widest px-1">Data wystawienia korekty</label>
                                <input v-model="form.date_correction" type="date" class="block w-full py-4 bg-gray-50 border-none rounded-2xl text-[11px] font-black uppercase tracking-widest focus:ring-2 focus:ring-blue-500/20 transition-all px-6"/>
                                <InputError :message="form.errors.date_correction" />
                            </div>
                            <div class="space-y-2">
                                <label class="text-[10px] font-black text-gray-400 uppercase tracking-widest px-1">Nowa kwota całkowita ($)</label>
                                <input v-model="form.amount" type="text" class="block w-full py-4 bg-gray-50 border-none rounded-2xl text-[11px] font-black uppercase tracking-widest focus:ring-2 focus:ring-blue-500/20 transition-all px-6"/>
                                <InputError :message="form.errors.amount" />
                                <p class="text-[9px] text-gray-400 italic">Oryginalna kwota: ${{ invoice.amount }}</p>
                            </div>
                            <div class="space-y-2">
                                <label class="text-[10px] font-black text-gray-400 uppercase tracking-widest px-1">Przyczyna korekty</label>
                                <input v-model="form.reason" type="text" placeholder="Np. błąd w danych adresowych, zwrot..." class="block w-full py-4 bg-gray-50 border-none rounded-2xl text-[11px] font-black uppercase tracking-widest focus:ring-2 focus:ring-blue-500/20 transition-all px-6"/>
                                <InputError :message="form.errors.reason" />
                            </div>
                        </div>
                    </div>

                    <!-- Dane Nabywcy -->
                    <div class="bg-white rounded-[3rem] shadow-xl shadow-blue-900/5 border border-gray-100 p-10">
                        <h3 class="text-xl font-black text-[#0A2C5C] uppercase tracking-tight mb-8 flex items-center gap-3">
                            <span class="w-8 h-8 bg-blue-100 text-blue-600 rounded-lg flex items-center justify-center text-xs">02</span>
                            Dane Nabywcy na korekcie
                        </h3>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                            <div class="md:col-span-2 space-y-2">
                                <label class="text-[10px] font-black text-gray-400 uppercase tracking-widest px-1">Nazwa firmy / Imię i Nazwisko</label>
                                <input v-model="form.name_invoice" type="text" class="block w-full py-4 bg-gray-50 border-none rounded-2xl text-[11px] font-black uppercase tracking-widest focus:ring-2 focus:ring-blue-500/20 transition-all px-6"/>
                                <InputError :message="form.errors.name_invoice" />
                            </div>
                            <div class="space-y-2">
                                <label class="text-[10px] font-black text-gray-400 uppercase tracking-widest px-1">NIP</label>
                                <input v-model="form.nip_invoice" type="text" class="block w-full py-4 bg-gray-50 border-none rounded-2xl text-[11px] font-black uppercase tracking-widest focus:ring-2 focus:ring-blue-500/20 transition-all px-6"/>
                                <InputError :message="form.errors.nip_invoice" />
                            </div>
                            <div class="space-y-2">
                                <label class="text-[10px] font-black text-gray-400 uppercase tracking-widest px-1">Ulica i numer</label>
                                <input v-model="form.street_invoice" type="text" class="block w-full py-4 bg-gray-50 border-none rounded-2xl text-[11px] font-black uppercase tracking-widest focus:ring-2 focus:ring-blue-500/20 transition-all px-6"/>
                                <InputError :message="form.errors.street_invoice" />
                            </div>
                            <div class="grid grid-cols-3 gap-4 md:col-span-2">
                                <div class="space-y-2">
                                    <label class="text-[10px] font-black text-gray-400 uppercase tracking-widest px-1">Kod pocztowy</label>
                                    <input v-model="form.postal_invoice" type="text" class="block w-full py-4 bg-gray-50 border-none rounded-2xl text-[11px] font-black uppercase tracking-widest focus:ring-2 focus:ring-blue-500/20 transition-all px-6"/>
                                    <InputError :message="form.errors.postal_invoice" />
                                </div>
                                <div class="space-y-2">
                                    <label class="text-[10px] font-black text-gray-400 uppercase tracking-widest px-1">Miasto</label>
                                    <input v-model="form.city_invoice" type="text" class="block w-full py-4 bg-gray-50 border-none rounded-2xl text-[11px] font-black uppercase tracking-widest focus:ring-2 focus:ring-blue-500/20 transition-all px-6"/>
                                    <InputError :message="form.errors.city_invoice" />
                                </div>
                                <div class="space-y-2">
                                    <label class="text-[10px] font-black text-gray-400 uppercase tracking-widest px-1">Kraj</label>
                                    <input v-model="form.country_invoice" type="text" class="block w-full py-4 bg-gray-50 border-none rounded-2xl text-[11px] font-black uppercase tracking-widest focus:ring-2 focus:ring-blue-500/20 transition-all px-6"/>
                                    <InputError :message="form.errors.country_invoice" />
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="flex justify-end gap-4 pb-12">
                        <Link :href="route('admin.finance.invoices.index')" class="px-10 py-4 bg-white text-[#0A2C5C] text-[10px] font-black uppercase tracking-widest rounded-2xl hover:bg-gray-50 transition-all border border-gray-100">
                            Anuluj
                        </Link>
                        <button
                            type="submit"
                            :disabled="form.processing"
                            class="px-10 py-4 bg-[#0A2C5C] text-white text-[10px] font-black uppercase tracking-widest rounded-2xl hover:bg-blue-800 disabled:opacity-50 transition-all shadow-lg shadow-blue-900/20"
                        >
                            {{ form.processing ? 'PRZETWARZANIE...' : 'WYSTAW KOREKTĘ I WYŚLIJ E-MAIL' }}
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </AppLayout>
</template>
