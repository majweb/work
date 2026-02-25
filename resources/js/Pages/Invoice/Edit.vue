<script setup>

import {useForm, Link, usePage} from '@inertiajs/vue3';
import {onMounted} from "vue";

import ActionMessage from '@/Components/ActionMessage.vue';
import FormSection from '@/Components/FormSection.vue';
import InputError from '@/Components/InputError.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import TextInput from '@/Components/TextInput.vue';
import AppLayout from '@/Layouts/AppLayout.vue';
import SpinnerAction from "@/Components/SpinnerAction.vue";
import InputLabel from "@/Components/InputLabel.vue";
import style from "@easepick/bundle/dist/index.css?url";
import customStyle from "../../easepick.css?url";
import moment from 'moment';

const props = defineProps({
    invoice: Object,
});

const user = usePage().props.auth.user;
let picker = null;
let date = moment();

const createPicker = () => {
    picker = new easepick.create({
        element: '#dateinvoice',
        readonly:true,
        zIndex: 50,
        header: "Data na fakturze",
        format: "YYYY-MM-DD",
        locale: {
            cancel: "Anuluj",
            apply: "Zatwierdź"
        },
        css: [
            style,
            customStyle
        ],
        lang: 'pl-PL',
        plugins: [
            "AmpPlugin"
        ],
        AmpPlugin: {
            dropdown: {
                months: true,
                years: true,
                minYear: date.year(),
                maxYear: date.clone().add(3, 'y').year()
            },
            resetButton:true
        }
    });
}

const form = useForm({
    nip_invoice: user.firm.nip_invoice,
    name_invoice: user.firm.name_invoice,
    street_invoice: user.firm.street_invoice,
    city_invoice: user.firm.city_invoice,
    postal_invoice: user.firm.postal_invoice,
    country_invoice: user.firm.country_invoice,
    date_invoice: props.invoice.date_invoice,
    number: props.invoice.number,
    day: props.invoice.day,
    month: props.invoice.month,
    year: props.invoice.year,
});
onMounted(() => {
    createPicker();
    picker.on('select', (e) => {
        form.date_invoice = e.detail.date.format('YYYY-MM-DD');
    });
    picker.on('clear', (e) => {
        form.date_invoice = null;
    })
});

const updateInvoice = () => {
    form.put(route('invoices.update',props.invoice), {
        errorBag: 'updateInvoice',
        preserveScroll: true
    });
};
</script>

<template>
    <AppLayout :title="__('translate.invoices')">
        <template #header>
            <div class="flex justify-between items-center">

                <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                    {{__('translate.invoices')}}
                </h2>
                <Link :href="route('invoices.index')" class="bg-white p-3 rounded-2xl shadow-sm border border-gray-100 hover:bg-gray-50 transition-all text-[#0A2C5C]">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                         stroke="currentColor" stroke-width="2.5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 10h16M4 14h16M4 18h16"/>
                    </svg>
                </Link>
            </div>
        </template>

        <div class="py-12 bg-gray-50/50 min-h-screen">
            <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">

                <div class="bg-white rounded-[3rem] shadow-xl shadow-blue-900/5 border border-gray-100 p-10">
                    <FormSection @submitted="updateInvoice">

                        <template #title>
                            <h3 class="text-2xl font-black text-[#0A2C5C] uppercase tracking-tight">faktura</h3>
                        </template>

                        <template #description>
                            <p class="text-[10px] font-bold text-gray-400 uppercase tracking-widest mt-1">{{__('translate.recruitInfo')}}</p>
                        </template>

                        <template #form>
                                <div class="col-span-6">
                                    <div class="p-6 mb-8 text-xs font-bold text-blue-800 rounded-[2rem] bg-blue-50/50 border border-blue-100 flex items-center gap-4" role="alert">
                                        <svg class="w-6 h-6 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                        </svg>
                                        <div>
                                            <span class="font-black uppercase tracking-widest block mb-1">{{__('translate.correctAlert')}}</span>
                                            <span class="opacity-70">{{__('translate.correctAlertDesc')}}</span>
                                        </div>
                                    </div>
                                </div>
                            <div class="col-span-2">
                                <div class="mt-4">
                                    <InputLabel for="name_invoice" :value="__('translate.name')" class="text-[10px] font-black text-gray-400 uppercase tracking-widest mb-2" />
                                    <TextInput
                                        id="name_invoice"
                                        autofocus
                                        v-model="form.name_invoice"
                                        type="text"
                                    />
                                    <InputError :message="form.errors.name_invoice" class="mt-2"/>
                                </div>
                            </div>
                            <div class="col-span-2">
                                <div class="mt-4">
                                    <InputLabel for="nip_invoice" :value="__('translate.nip')" class="text-[10px] font-black text-gray-400 uppercase tracking-widest mb-2" />
                                    <TextInput
                                        id="nip_invoice"
                                        v-model="form.nip_invoice"
                                        type="text"
                                    />
                                    <InputError :message="form.errors.nip_invoice" class="mt-2"/>
                                </div>
                            </div>
                            <div class="col-span-2">
                                <div class="mt-4">
                                    <InputLabel for="street_invoice" :value="__('translate.Street')" class="text-[10px] font-black text-gray-400 uppercase tracking-widest mb-2" />
                                    <TextInput
                                        id="street_invoice"
                                        v-model="form.street_invoice"
                                        type="text"
                                    />
                                    <InputError :message="form.errors.street_invoice" class="mt-2"/>
                                </div>
                            </div>
                            <div class="col-span-2">
                                <div class="mt-4">
                                    <InputLabel for="city_invoice" :value="__('translate.City')" class="text-[10px] font-black text-gray-400 uppercase tracking-widest mb-2" />
                                    <TextInput
                                        id="city_invoice"
                                        v-model="form.city_invoice"
                                        type="text"
                                    />
                                    <InputError :message="form.errors.city_invoice" class="mt-2"/>
                                </div>
                            </div>
                            <div class="col-span-2">
                                <div class="mt-4">
                                    <InputLabel for="postal_invoice" :value="__('translate.Postal')" class="text-[10px] font-black text-gray-400 uppercase tracking-widest mb-2" />
                                    <TextInput
                                        id="postal_invoice"
                                        v-model="form.postal_invoice"
                                        type="text"
                                    />
                                    <InputError :message="form.errors.postal_invoice" class="mt-2"/>
                                </div>
                            </div>
                            <div class="col-span-2">
                                <div class="mt-4">
                                    <InputLabel for="country_invoice" :value="__('translate.Country')" class="text-[10px] font-black text-gray-400 uppercase tracking-widest mb-2" />
                                    <TextInput
                                        id="country_invoice"
                                        v-model="form.country_invoice"
                                        type="text"
                                    />
                                    <InputError :message="form.errors.country_invoice" class="mt-2"/>
                                </div>
                            </div>
                            <div class="col-span-2">
                                <div class="mt-4">
                                    <InputLabel for="date_invoice" :value="__('translate.dateInvoice')" class="text-[10px] font-black text-gray-400 uppercase tracking-widest mb-2" />
                                    <TextInput
                                        id="dateinvoice"
                                        v-model="form.date_invoice"
                                        type="text"
                                    />
                                    <InputError :message="form.errors.date_invoice" class="mt-2"/>
                                </div>
                            </div>
                            <div class="col-span-6 flex items-center">
                                <div class="mt-4 mr-2">
                                    <InputLabel for="number" :value="__('translate.Number')" class="text-[10px] font-black text-gray-400 uppercase tracking-widest mb-2" />
                                    <TextInput
                                        id="number"
                                        v-model="form.number"
                                        type="text"
                                    />
                                    <InputError :message="form.errors.number" class="mt-2"/>
                                </div>
                                <div class="mt-4 mr-2">
                                    <InputLabel for="day" :value="__('translate.day')" class="text-[10px] font-black text-gray-400 uppercase tracking-widest mb-2" />
                                    <TextInput
                                        id="day"
                                        v-model="form.day"
                                        type="text"
                                    />
                                    <InputError :message="form.errors.day" class="mt-2"/>
                                </div>
                                <div class="mt-4 mr-2">
                                    <InputLabel for="month" :value="__('translate.month')" class="text-[10px] font-black text-gray-400 uppercase tracking-widest mb-2" />
                                    <TextInput
                                        id="month"
                                        v-model="form.month"
                                        type="text"
                                    />
                                    <InputError :message="form.errors.month" class="mt-2"/>
                                </div>
                                <div class="mt-4">
                                    <InputLabel for="year" :value="__('translate.year')" class="text-[10px] font-black text-gray-400 uppercase tracking-widest mb-2" />
                                    <TextInput
                                        id="year"
                                        v-model="form.year"
                                        type="text"
                                    />
                                    <InputError :message="form.errors.year" class="mt-2"/>
                                </div>
                            </div>
                        </template>

                        <template #actions>
                            <div class="flex items-center gap-4">
                                <ActionMessage :on="form.recentlySuccessful" class="text-[10px] font-bold text-green-600 uppercase tracking-widest">
                                    {{__('translate.correctInvoice')}}
                                </ActionMessage>
                                <PrimaryButton :class="{ 'opacity-25': form.processing }" :disabled="form.processing" class="px-10 py-4 bg-[#0A2C5C] text-white text-[10px] font-black uppercase tracking-widest rounded-2xl hover:bg-blue-800 transition-all shadow-lg shadow-blue-900/20">
                                    <spinner-action :process="form.processing">{{__('translate.correcting')}}</spinner-action>
                                </PrimaryButton>
                            </div>
                        </template>
                    </FormSection>
                </div>
            </div>
        </div>
    </AppLayout>
</template>
