<script setup>
import AppLayout from "@/Layouts/AppLayout.vue";
import { Link, useForm } from "@inertiajs/vue3";
import Multiselect from "vue-multiselect";
import { ref } from "vue";
import __ from "@/lang.js";

const props = defineProps({
    firm: Object,
    countries: Array,
});

const optionsCountry = ref(props.countries);

const form = useForm({
    name: props.firm.name,
    email: props.firm.email,
    details: {
        description: props.firm.details?.description || '',
        nip: props.firm.details?.nip || '',
        regon: props.firm.details?.regon || '',
        street: props.firm.details?.street || '',
        number: props.firm.details?.number || '',
        city: props.firm.details?.city || '',
        postal: props.firm.details?.postal || '',
        country: props.firm.details?.country || '',
        countryJson: props.firm.details?.countryJson || null,
        countryInvoiceJson: props.firm.details?.countryInvoiceJson || null,
        invoice_same: props.firm.details?.invoice_same || false,
        name_invoice: props.firm.details?.name_invoice || '',
        nip_invoice: props.firm.details?.nip_invoice || '',
        regon_invoice: props.firm.details?.regon_invoice || '',
        street_invoice: props.firm.details?.street_invoice || '',
        number_invoice: props.firm.details?.number_invoice || '',
        city_invoice: props.firm.details?.city_invoice || '',
        postal_invoice: props.firm.details?.postal_invoice || '',
        country_invoice: props.firm.details?.country_invoice || '',
        www: props.firm.details?.www || '',
        count_workers: props.firm.details?.count_workers || '',
        annual_turnover: props.firm.details?.annual_turnover || '',
        extra_description: props.firm.details?.extra_description || '',
    }
});

const submit = () => {
    form.put(route('admin.firms.update', props.firm.id));
};

const getNipPlaceholder = (countryCode) => {
    if (!countryCode) return '---';
    const code = countryCode.toLowerCase();

    const pureDigital9 = ['eg', 'gn', 'gw', 'mz', 'rw', 'lr', 'co', 'jm', 'ge', 'il', 'np', 'lk', 'sy', 'tj', 'uz', 'by', 'rs', 'fj'];
    const pureDigital10 = ['ao', 'bi', 'et', 'ly', 'mg', 'sd', 'tg', 'ug', 'zm', 'ht', 'cr', 'af', 'az', 'iq', 'qa', 'kw', 'tr'];
    if (pureDigital9.includes(code)) return '123456789';
    if (pureDigital10.includes(code)) return '1234567890';

    if (['gm', 'ar', 'pe', 'cu'].includes(code)) return '12345678901';
    if (['bd', 'la', 'mm', 'ua', 'kz'].includes(code)) return '123456789012';
    if (['bj', 'cg', 'md', 'ba'].includes(code)) return '1234567890123';
    if (['sv', 'hn', 'kg'].includes(code)) return '12345678901234';
    if (['dz', 'sa', 'bh', 'ae', 'id'].includes(code)) return '123456789012345';

    if (code === 'bw') return 'C1234567';
    if (code === 'cd') return 'A1234567';
    if (code === 'cm') return 'M123456789012A';
    if (code === 'ke') return 'P123456789L';
    if (code === 've') return 'J123456789';
    if (code === 'my') return 'C12345678';
    if (code === 'al') return 'J12345678A';
    if (code === 'ad') return 'U1234567A';
    if (['bf', 'td', 'ga', 'cf', 'ci'].includes(code)) return '12345678A';
    if (code === 'ne') return '12345/R';
    if (code === 'sn') return '1234567ABC';
    if (code === 'in') return 'ABCDE1234F';

    const euPrefix = ['at', 'be', 'bg', 'hr', 'cz', 'dk', 'ee', 'fi', 'gr', 'de', 'lt', 'lu', 'mt', 'pl', 'pt', 'ro', 'sk', 'si', 'hu', 'gb'];
    if (euPrefix.includes(code)) {
        const prefix = (code === 'gr' ? 'EL' : code).toUpperCase();
        return `${prefix}12345678`;
    }

    if (code === 'fr') return 'FRXX123456789';
    if (code === 'nl') return 'NL123456789B01';
    if (code === 'ch') return 'CHE-123.456.789 MWST';
    if (code === 'se') return 'SE123456789012';
    if (code === 'it') return 'IT12345678901';

    if (['is', 'li', 'sm', 'nr'].includes(code)) return '12345';
    if (['bz', 'gd', 'kn', 'tv'].includes(code)) return '123456';
    if (['er', 'km', 'ls', 'ag', 'bs', 'dm'].includes(code)) return '1234567';
    if (['ma', 'mr', 'mu', 'sr', 'am', 'me'].includes(code)) return '12345678';
    if (code === 'au') return '123456789';

    return '12345678';
};
</script>

<template>
    <AppLayout :title="'Edycja firmy: ' + firm.name">
        <div class="py-12 bg-gray-50/50 min-h-screen">
            <div class="max-w-[1600px] mx-auto px-4 sm:px-6 lg:px-8">
                <!-- Header -->
                <div class="flex items-center justify-between mb-12">
                    <div class="flex items-center gap-8">
                        <Link
                            :href="route('admin.firms.show', firm.id)"
                            class="w-14 h-14 bg-white rounded-3xl flex items-center justify-center shadow-xl shadow-blue-900/5 border border-gray-100 text-[#0A2C5C] hover:bg-gray-50 transition-all active:scale-95 group"
                        >
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor" class="w-6 h-6 group-hover:-translate-x-1 transition-transform">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5 3 12m0 0 7.5-7.5M3 12h18" />
                            </svg>
                        </Link>
                        <div>
                            <div class="flex items-center gap-3 mb-1">
                                <span class="px-3 py-1 bg-blue-50 text-blue-500 rounded-lg text-[10px] font-black uppercase tracking-widest">Zarządzanie kontem</span>
                            </div>
                            <h1 class="text-4xl font-black text-[#0A2C5C] tracking-tight">Edycja firmy</h1>
                        </div>
                    </div>
                </div>

                <form @submit.prevent="submit" class="grid gap-8">
                    <!-- Basic Info -->
                    <div class="bg-white rounded-3xl shadow-xl shadow-blue-900/5 border border-gray-100 p-8">
                        <h2 class="text-xl font-black text-[#0A2C5C] mb-6 flex items-center gap-4">
                            <span class="w-10 h-10 bg-blue-50 rounded-xl flex items-center justify-center text-blue-500 text-xs font-black">01</span>
                            Podstawowe informacje
                        </h2>
                        <div class="grid grid-cols-2 gap-6">
                            <div>
                                <label class="block text-[10px] font-black text-gray-400 uppercase tracking-widest mb-2 ml-1">Nazwa firmy</label>
                                <input v-model="form.name" type="text" class="w-full px-6 py-4 bg-gray-50 border-none rounded-2xl focus:ring-2 focus:ring-blue-500 transition-all font-bold text-[#0A2C5C]" />
                                <div v-if="form.errors.name" class="text-red-500 text-xs mt-1 ml-1">{{ form.errors.name }}</div>
                            </div>
                            <div>
                                <label class="block text-[10px] font-black text-gray-400 uppercase tracking-widest mb-2 ml-1">E-mail</label>
                                <input v-model="form.email" type="email" class="w-full px-6 py-4 bg-gray-50 border-none rounded-2xl focus:ring-2 focus:ring-blue-500 transition-all font-bold text-[#0A2C5C]" />
                                <div v-if="form.errors.email" class="text-red-500 text-xs mt-1 ml-1">{{ form.errors.email }}</div>
                            </div>
                        </div>
                    </div>

                    <!-- Company Details -->
                    <div class="bg-white rounded-3xl shadow-xl shadow-blue-900/5 border border-gray-100 p-8">
                        <h2 class="text-xl font-black text-[#0A2C5C] mb-6 flex items-center gap-4">
                            <span class="w-10 h-10 bg-blue-50 rounded-xl flex items-center justify-center text-blue-500 text-xs font-black">02</span>
                            Dane szczegółowe
                        </h2>
                        <div class="grid grid-cols-3 gap-6 mb-6">
                            <div>
                                <label class="block text-[10px] font-black text-gray-400 uppercase tracking-widest mb-2 ml-1">NIP</label>
                                <input v-model="form.details.nip" type="text" :placeholder="getNipPlaceholder(form.details.countryJson?.countryCode)" class="w-full px-6 py-4 bg-gray-50 border-none rounded-2xl focus:ring-2 focus:ring-blue-500 transition-all font-bold text-[#0A2C5C]" />
                                <div v-if="form.details.countryJson" class="text-[10px] text-gray-400 mt-1 ml-1">
                                    Format: {{ getNipPlaceholder(form.details.countryJson.countryCode) }}
                                </div>
                                <div v-if="form.errors['details.nip']" class="text-red-500 text-xs mt-1 ml-1">{{ form.errors['details.nip'] }}</div>
                            </div>
                            <div>
                                <label class="block text-[10px] font-black text-gray-400 uppercase tracking-widest mb-2 ml-1">REGON</label>
                                <input v-model="form.details.regon" type="text" class="w-full px-6 py-4 bg-gray-50 border-none rounded-2xl focus:ring-2 focus:ring-blue-500 transition-all font-bold text-[#0A2C5C]" />
                                <div v-if="form.errors['details.regon']" class="text-red-500 text-xs mt-1 ml-1">{{ form.errors['details.regon'] }}</div>
                            </div>
                            <div>
                                <label class="block text-[10px] font-black text-gray-400 uppercase tracking-widest mb-2 ml-1">WWW</label>
                                <input v-model="form.details.www" type="text" class="w-full px-6 py-4 bg-gray-50 border-none rounded-2xl focus:ring-2 focus:ring-blue-500 transition-all font-bold text-[#0A2C5C]" />
                                <div v-if="form.errors['details.www']" class="text-red-500 text-xs mt-1 ml-1">{{ form.errors['details.www'] }}</div>
                            </div>
                        </div>

                        <div class="mb-6">
                            <label class="block text-[10px] font-black text-gray-400 uppercase tracking-widest mb-2 ml-1">Opis firmy</label>
                            <textarea v-model="form.details.description" rows="3" class="w-full px-6 py-4 bg-gray-50 border-none rounded-2xl focus:ring-2 focus:ring-blue-500 transition-all font-bold text-[#0A2C5C]"></textarea>
                            <div v-if="form.errors['details.description']" class="text-red-500 text-xs mt-1 ml-1">{{ form.errors['details.description'] }}</div>
                        </div>

                        <div class="grid grid-cols-2 gap-6 mb-6">
                            <div>
                                <label class="block text-[10px] font-black text-gray-400 uppercase tracking-widest mb-2 ml-1">Ulica</label>
                                <input v-model="form.details.street" type="text" class="w-full px-6 py-4 bg-gray-50 border-none rounded-2xl focus:ring-2 focus:ring-blue-500 transition-all font-bold text-[#0A2C5C]" />
                                <div v-if="form.errors['details.street']" class="text-red-500 text-xs mt-1 ml-1">{{ form.errors['details.street'] }}</div>
                            </div>
                            <div class="grid grid-cols-2 gap-4">
                                <div>
                                    <label class="block text-[10px] font-black text-gray-400 uppercase tracking-widest mb-2 ml-1">Numer</label>
                                    <input v-model="form.details.number" type="text" class="w-full px-6 py-4 bg-gray-50 border-none rounded-2xl focus:ring-2 focus:ring-blue-500 transition-all font-bold text-[#0A2C5C]" />
                                    <div v-if="form.errors['details.number']" class="text-red-500 text-xs mt-1 ml-1">{{ form.errors['details.number'] }}</div>
                                </div>
                                <div>
                                    <label class="block text-[10px] font-black text-gray-400 uppercase tracking-widest mb-2 ml-1">Kod pocztowy</label>
                                    <input v-model="form.details.postal" type="text" class="w-full px-6 py-4 bg-gray-50 border-none rounded-2xl focus:ring-2 focus:ring-blue-500 transition-all font-bold text-[#0A2C5C]" />
                                    <div v-if="form.errors['details.postal']" class="text-red-500 text-xs mt-1 ml-1">{{ form.errors['details.postal'] }}</div>
                                </div>
                            </div>
                        </div>

                        <div class="grid grid-cols-2 gap-6">
                            <div>
                                <label class="block text-[10px] font-black text-gray-400 uppercase tracking-widest mb-2 ml-1">Miasto</label>
                                <input v-model="form.details.city" type="text" class="w-full px-6 py-4 bg-gray-50 border-none rounded-2xl focus:ring-2 focus:ring-blue-500 transition-all font-bold text-[#0A2C5C]" />
                                <div v-if="form.errors['details.city']" class="text-red-500 text-xs mt-1 ml-1">{{ form.errors['details.city'] }}</div>
                            </div>
                            <div>
                                <label class="block text-[10px] font-black text-gray-400 uppercase tracking-widest mb-2 ml-1">Kraj (Firmy)</label>
                                <multiselect
                                    group-values="elements" group-label="group"
                                    :group-select="false"
                                    :selectLabel="__('translate.selectLabel')"
                                    :selectGroupLabel="__('translate.selectGroupLabel')"
                                    :selectedLabel="__('translate.selectedLabel')"
                                    :deselectLabel="__('translate.deselectLabel')"
                                    track-by="name"
                                    :multiple="false"
                                    label="name"
                                    :placeholder="__('translate.placeholder')"
                                    v-model="form.details.countryJson" :options="optionsCountry">
                                    <template #noResult>
                                        <span>{{ __('translate.noOptions') }}</span>
                                    </template>
                                    <template #noOptions>
                                        <span>{{ __('translate.noResult') }}</span>
                                    </template>
                                </multiselect>
                                <div v-if="form.errors['details.countryJson']" class="text-red-500 text-xs mt-1 ml-1">{{ form.errors['details.countryJson'] }}</div>
                            </div>
                        </div>

                        <div class="flex items-center mt-6 ml-4">
                            <label class="flex items-center cursor-pointer">
                                <input type="checkbox" v-model="form.details.invoice_same" class="w-5 h-5 border-none bg-gray-50 rounded-lg text-blue-500 focus:ring-2 focus:ring-blue-500 transition-all" />
                                <span class="ml-3 text-[10px] font-black text-[#0A2C5C] uppercase tracking-widest">Dane do faktury takie same</span>
                            </label>
                        </div>
                    </div>

                    <!-- Invoice Details (Optional) -->
                    <div v-if="!form.details.invoice_same" class="bg-white rounded-3xl shadow-xl shadow-blue-900/5 border border-gray-100 p-8">
                        <h3 class="text-lg font-black text-[#0A2C5C] mb-6">Dane do faktury</h3>
                            <div class="grid grid-cols-2 gap-6 mb-6">
                                <div>
                                    <label class="block text-[10px] font-black text-gray-400 uppercase tracking-widest mb-2 ml-1">Nazwa (Faktura)</label>
                                    <input v-model="form.details.name_invoice" type="text" class="w-full px-6 py-4 bg-gray-50 border-none rounded-2xl focus:ring-2 focus:ring-blue-500 transition-all font-bold text-[#0A2C5C]" />
                                    <div v-if="form.errors['details.name_invoice']" class="text-red-500 text-xs mt-1 ml-1">{{ form.errors['details.name_invoice'] }}</div>
                                </div>
                                <div>
                                    <label class="block text-[10px] font-black text-gray-400 uppercase tracking-widest mb-2 ml-1">NIP (Faktura)</label>
                                    <input v-model="form.details.nip_invoice" type="text" :placeholder="getNipPlaceholder(form.details.countryInvoiceJson?.countryCode || form.details.countryJson?.countryCode)" class="w-full px-6 py-4 bg-gray-50 border-none rounded-2xl focus:ring-2 focus:ring-blue-500 transition-all font-bold text-[#0A2C5C]" />
                                    <div v-if="form.details.countryInvoiceJson || form.details.countryJson" class="text-[10px] text-gray-400 mt-1 ml-1">
                                        Format: {{ getNipPlaceholder(form.details.countryInvoiceJson?.countryCode || form.details.countryJson?.countryCode) }}
                                    </div>
                                    <div v-if="form.errors['details.nip_invoice']" class="text-red-500 text-xs mt-1 ml-1">{{ form.errors['details.nip_invoice'] }}</div>
                                </div>
                            </div>
                            <div class="grid grid-cols-3 gap-6 mb-6">
                                <div>
                                    <label class="block text-[10px] font-black text-gray-400 uppercase tracking-widest mb-2 ml-1">REGON (Faktura)</label>
                                    <input v-model="form.details.regon_invoice" type="text" class="w-full px-6 py-4 bg-gray-50 border-none rounded-2xl focus:ring-2 focus:ring-blue-500 transition-all font-bold text-[#0A2C5C]" />
                                    <div v-if="form.errors['details.regon_invoice']" class="text-red-500 text-xs mt-1 ml-1">{{ form.errors['details.regon_invoice'] }}</div>
                                </div>
                                <div class="col-span-2 grid grid-cols-2 gap-4">
                                    <div>
                                        <label class="block text-[10px] font-black text-gray-400 uppercase tracking-widest mb-2 ml-1">Ulica (Faktura)</label>
                                        <input v-model="form.details.street_invoice" type="text" class="w-full px-6 py-4 bg-gray-50 border-none rounded-2xl focus:ring-2 focus:ring-blue-500 transition-all font-bold text-[#0A2C5C]" />
                                        <div v-if="form.errors['details.street_invoice']" class="text-red-500 text-xs mt-1 ml-1">{{ form.errors['details.street_invoice'] }}</div>
                                    </div>
                                    <div>
                                        <label class="block text-[10px] font-black text-gray-400 uppercase tracking-widest mb-2 ml-1">Numer (Faktura)</label>
                                        <input v-model="form.details.number_invoice" type="text" class="w-full px-6 py-4 bg-gray-50 border-none rounded-2xl focus:ring-2 focus:ring-blue-500 transition-all font-bold text-[#0A2C5C]" />
                                        <div v-if="form.errors['details.number_invoice']" class="text-red-500 text-xs mt-1 ml-1">{{ form.errors['details.number_invoice'] }}</div>
                                    </div>
                                </div>
                            </div>
                            <div class="grid grid-cols-3 gap-6">
                                <div>
                                    <label class="block text-[10px] font-black text-gray-400 uppercase tracking-widest mb-2 ml-1">Kod pocztowy (Faktura)</label>
                                    <input v-model="form.details.postal_invoice" type="text" class="w-full px-6 py-4 bg-gray-50 border-none rounded-2xl focus:ring-2 focus:ring-blue-500 transition-all font-bold text-[#0A2C5C]" />
                                    <div v-if="form.errors['details.postal_invoice']" class="text-red-500 text-xs mt-1 ml-1">{{ form.errors['details.postal_invoice'] }}</div>
                                </div>
                                <div>
                                    <label class="block text-[10px] font-black text-gray-400 uppercase tracking-widest mb-2 ml-1">Miasto (Faktura)</label>
                                    <input v-model="form.details.city_invoice" type="text" class="w-full px-6 py-4 bg-gray-50 border-none rounded-2xl focus:ring-2 focus:ring-blue-500 transition-all font-bold text-[#0A2C5C]" />
                                    <div v-if="form.errors['details.city_invoice']" class="text-red-500 text-xs mt-1 ml-1">{{ form.errors['details.city_invoice'] }}</div>
                                </div>
                                <div>
                                    <label class="block text-[10px] font-black text-gray-400 uppercase tracking-widest mb-2 ml-1">Kraj (Faktura)</label>
                                    <multiselect
                                        group-values="elements" group-label="group"
                                        :group-select="false"
                                        :selectLabel="__('translate.selectLabel')"
                                        :selectGroupLabel="__('translate.selectGroupLabel')"
                                        :selectedLabel="__('translate.selectedLabel')"
                                        :deselectLabel="__('translate.deselectLabel')"
                                        track-by="countryCode"
                                        :multiple="false"
                                        label="name"
                                        :placeholder="__('translate.placeholder')"
                                        v-model="form.details.countryInvoiceJson" :options="optionsCountry">
                                        <template #noResult>
                                            <span>{{ __('translate.noOptions') }}</span>
                                        </template>
                                        <template #noOptions>
                                            <span>{{ __('translate.noResult') }}</span>
                                        </template>
                                    </multiselect>
                                    <div v-if="form.errors['details.countryInvoiceJson']" class="text-red-500 text-xs mt-1 ml-1">{{ form.errors['details.countryInvoiceJson'] }}</div>
                                </div>
                            </div>
                        </div>

                        <!-- Additional Info -->
                    <div class="bg-white rounded-3xl shadow-xl shadow-blue-900/5 border border-gray-100 p-8">
                        <h2 class="text-xl font-black text-[#0A2C5C] mb-6 flex items-center gap-4">
                            <span class="w-10 h-10 bg-blue-50 rounded-xl flex items-center justify-center text-blue-500 text-xs font-black">03</span>
                            Informacje dodatkowe
                        </h2>
                        <div class="grid grid-cols-2 gap-6 mb-6">
                            <div>
                                <label class="block text-[10px] font-black text-gray-400 uppercase tracking-widest mb-2 ml-1">Liczba pracowników</label>
                                <input v-model="form.details.count_workers" type="number" class="w-full px-6 py-4 bg-gray-50 border-none rounded-2xl focus:ring-2 focus:ring-blue-500 transition-all font-bold text-[#0A2C5C]" />
                                <div v-if="form.errors['details.count_workers']" class="text-red-500 text-xs mt-1 ml-1">{{ form.errors['details.count_workers'] }}</div>
                            </div>
                            <div>
                                <label class="block text-[10px] font-black text-gray-400 uppercase tracking-widest mb-2 ml-1">Roczny obrót</label>
                                <input v-model="form.details.annual_turnover" type="text" class="w-full px-6 py-4 bg-gray-50 border-none rounded-2xl focus:ring-2 focus:ring-blue-500 transition-all font-bold text-[#0A2C5C]" />
                                <div v-if="form.errors['details.annual_turnover']" class="text-red-500 text-xs mt-1 ml-1">{{ form.errors['details.annual_turnover'] }}</div>
                            </div>
                        </div>
                        <div>
                            <label class="block text-[10px] font-black text-gray-400 uppercase tracking-widest mb-2 ml-1">Dodatkowy opis</label>
                            <textarea v-model="form.details.extra_description" rows="5" class="w-full px-6 py-4 bg-gray-50 border-none rounded-2xl focus:ring-2 focus:ring-blue-500 transition-all font-bold text-[#0A2C5C]"></textarea>
                            <div v-if="form.errors['details.extra_description']" class="text-red-500 text-xs mt-1 ml-1">{{ form.errors['details.extra_description'] }}</div>
                        </div>
                    </div>

                    <!-- Submit -->
                    <div class="flex justify-end gap-4 mt-8">
                        <Link :href="route('admin.firms.show', firm.id)" class="px-8 py-4 bg-white text-[#0A2C5C] rounded-2xl text-[10px] font-black uppercase tracking-widest hover:bg-gray-50 transition-all border border-gray-100 shadow-sm active:scale-95">
                            Anuluj
                        </Link>
                        <button type="submit" :disabled="form.processing" class="px-8 py-4 bg-[#0A2C5C] text-white rounded-2xl text-[10px] font-black uppercase tracking-widest hover:bg-[#0d3671] transition-all shadow-xl shadow-blue-900/20 disabled:opacity-50 active:scale-95 flex items-center gap-2">
                             <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor" class="w-4 h-4 text-blue-400">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                            </svg>
                            Zapisz zmiany
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </AppLayout>
</template>

<style src="vue-multiselect/dist/vue-multiselect.css"></style>
<style lang="scss">
.multiselect__tag {
    background: #00a0e3 !important;
}

.multiselect__option--highlight {
    background: #00a0e3 !important;
    outline: none;
    color: white;
}

.multiselect__option--highlight:after {
    content: attr(data-select);
    background: #00a0e3 !important;
    color: white;
}

.multiselect__option--selected {
    background: #00A0E3B2 !important;
    color: #35495E;
    font-weight: bold;
}

.multiselect__option--selected.multiselect__option--highlight {
    background: #00A0E3B2 !important;
    color: #fff;
}

.multiselect__option--selected.multiselect__option--highlight:after {
    background: #00A0E3B2 !important;
    content: attr(data-deselect);
    color: white !important;
}

.multiselect__option--selected:after {
    content: attr(data-selected);
    color: #00A0E3B2;
    background: transparent !important;
}

.multiselect__content-wrapper {
    border-radius: 0 0 1rem 1rem;
    border: none;
    box-shadow: 0 10px 15px -3px rgb(0 0 0 / 0.1);
}

.multiselect__tags {
    border-radius: 1rem;
    border: none;
    background: #f8fafc;
    padding: 12px 40px 0 20px;
    min-height: 56px;
}

.multiselect__single {
    background: #f8fafc;
    margin-bottom: 0;
    padding-top: 4px;
    font-weight: 700;
    color: #0A2C5C;
}
</style>
