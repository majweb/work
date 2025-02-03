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
import customStyle from "../../../easepick.css?url";
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
    <AppLayout :title="__('translate.editRecruit')">
        <template #header>
            <div class="flex justify-between">

                <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                    {{__('translate.editRecruit')}}
                </h2>
                <Link :href="route('invoices.index')" class="text-gray-500 mr-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                         stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 10h16M4 14h16M4 18h16"/>
                    </svg>
                </Link>
            </div>
        </template>

        <div>
            <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">

                <div>
                    <FormSection @submitted="updateInvoice">

                        <template #title>
                            faktura
                        </template>

                        <template #description>
                            {{__('translate.recruitInfo')}}
                        </template>

                        <template #form>
                            <div class="col-span-6">
                                <div class="p-4 mb-4 text-sm text-yellow-800 rounded-lg bg-yellow-50 dark:bg-gray-800 dark:text-yellow-300" role="alert">
                                    <span class="font-medium mr-1">{{__('translate.correctAlert')}}</span>{{__('translate.correctAlertDesc')}}
                                </div>
                            </div>
                            <div class="col-span-2">
                                <div class="mt-4">
                                    <InputLabel for="name_invoice" :value="__('translate.name')"/>
                                    <TextInput
                                        id="name_invoice"
                                        autofocus
                                        v-model="form.name_invoice"
                                        class="mt-1 block w-full"
                                        type="text"
                                    />
                                    <InputError :message="form.errors.name_invoice" class="mt-2"/>
                                </div>
                            </div>
                            <div class="col-span-2">
                                <div class="mt-4">
                                    <InputLabel for="nip_invoice" :value="__('translate.nip')"/>
                                    <TextInput
                                        id="nip_invoice"
                                        v-model="form.nip_invoice"
                                        class="mt-1 block w-full"
                                        type="text"
                                    />
                                    <InputError :message="form.errors.nip_invoice" class="mt-2"/>
                                </div>
                            </div>
                            <div class="col-span-2">
                                <div class="mt-4">
                                    <InputLabel for="street_invoice" :value="__('translate.Street')"/>
                                    <TextInput
                                        id="street_invoice"
                                        v-model="form.street_invoice"
                                        class="mt-1 block w-full"
                                        type="text"
                                    />
                                    <InputError :message="form.errors.street_invoice" class="mt-2"/>
                                </div>
                            </div>
                            <div class="col-span-2">
                                <div class="mt-4">
                                    <InputLabel for="city_invoice" :value="__('translate.City')"/>
                                    <TextInput
                                        id="city_invoice"
                                        v-model="form.city_invoice"
                                        class="mt-1 block w-full"
                                        type="text"
                                    />
                                    <InputError :message="form.errors.city_invoice" class="mt-2"/>
                                </div>
                            </div>
                            <div class="col-span-2">
                                <div class="mt-4">
                                    <InputLabel for="postal_invoice" :value="__('translate.Postal')"/>
                                    <TextInput
                                        id="postal_invoice"
                                        v-model="form.postal_invoice"
                                        class="mt-1 block w-full"
                                        type="text"
                                    />
                                    <InputError :message="form.errors.postal_invoice" class="mt-2"/>
                                </div>
                            </div>
                            <div class="col-span-2">
                                <div class="mt-4">
                                    <InputLabel for="country_invoice" :value="__('translate.Country')"/>
                                    <TextInput
                                        id="country_invoice"
                                        v-model="form.country_invoice"
                                        class="mt-1 block w-full"
                                        type="text"
                                    />
                                    <InputError :message="form.errors.country_invoice" class="mt-2"/>
                                </div>
                            </div>
                            <div class="col-span-2">
                                <div class="mt-4">
                                    <InputLabel for="date_invoice" :value="__('translate.dateInvoice')"/>
                                    <TextInput
                                        id="dateinvoice"
                                        v-model="form.date_invoice"
                                        class="mt-1 block w-full"
                                        type="text"
                                    />
                                    <InputError :message="form.errors.date_invoice" class="mt-2"/>
                                </div>
                            </div>
                            <div class="col-span-6 flex items-center">
                                <div class="mt-4 mr-2">
                                    <InputLabel for="number" :value="__('translate.Number')"/>
                                    <TextInput
                                        id="dateinvoice"
                                        v-model="form.number"
                                        class="mt-1 block w-full"
                                        type="text"
                                    />
                                    <InputError :message="form.errors.number" class="mt-2"/>
                                </div>
                                <div class="mt-4 mr-2">
                                    <InputLabel for="day" :value="__('translate.day')"/>
                                    <TextInput
                                        id="day"
                                        v-model="form.day"
                                        class="mt-1 block w-full"
                                        type="text"
                                    />
                                    <InputError :message="form.errors.day" class="mt-2"/>
                                </div>
                                <div class="mt-4 mr-2">
                                    <InputLabel for="month" :value="__('translate.month')"/>
                                    <TextInput
                                        id="month"
                                        v-model="form.month"
                                        class="mt-1 block w-full"
                                        type="text"
                                    />
                                    <InputError :message="form.errors.month" class="mt-2"/>
                                </div>
                                <div class="mt-4">
                                    <InputLabel for="year" :value="__('translate.year')"/>
                                    <TextInput
                                        id="year"
                                        v-model="form.year"
                                        class="mt-1 block w-full"
                                        type="text"
                                    />
                                    <InputError :message="form.errors.year" class="mt-2"/>
                                </div>
                            </div>
                        </template>

                        <template #actions>
                            <ActionMessage :on="form.recentlySuccessful" class="mr-3">
                                {{__('translate.correctInvoice')}}
                            </ActionMessage>
                            <PrimaryButton :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
                                <spinner-action :process="form.processing">{{__('translate.correcting')}}</spinner-action>
                            </PrimaryButton>
                        </template>
                    </FormSection>
                </div>
            </div>
        </div>
    </AppLayout>
</template>
