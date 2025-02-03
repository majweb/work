<script setup>
import {useForm} from '@inertiajs/vue3';
import ActionMessage from '@/Components/ActionMessage.vue';
import FormSection from '@/Components/FormSection.vue';
import InputError from '@/Components/InputError.vue';
import InputLabel from '@/Components/InputLabel.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import TextInput from '@/Components/TextInput.vue';
import Checkbox from "@/Components/Checkbox.vue";
import DangerButton from "@/Components/DangerButton.vue";
import InputHelper from "@/Components/InputHelper.vue";
import TextareaLimit from "@/Components/TextareaLimit.vue";

const props = defineProps({
    user: Object,
});

const form = useForm({
    _method: 'PUT',
    nip: props.user.firm?.nip,
    description: props.user.firm?.description,
    regon: props.user.firm?.regon,
    street: props.user.firm?.street,
    number: props.user.firm?.number,
    city: props.user.firm?.city,
    postal: props.user.firm?.postal,
    country: props.user.firm?.country,
    contact_phone: props.user.firm?.contact_phone ?? [],
    name_invoice: props.user.firm?.invoice_same ? props.user.name : props.user.firm?.name_invoice,
    nip_invoice: props.user.firm?.invoice_same ? props.user.firm?.nip : props.user.firm?.nip_invoice,
    regon_invoice: props.user.firm?.invoice_same ? props.user.firm?.regon : props.user.firm?.regon_invoice,
    street_invoice: props.user.firm?.invoice_same ? props.user.firm?.street : props.user.firm?.street_invoice,
    number_invoice: props.user.firm?.invoice_same ? props.user.firm?.number : props.user.firm?.number_invoice,
    city_invoice: props.user.firm?.invoice_same ? props.user.firm?.city : props.user.firm?.city_invoice,
    postal_invoice: props.user.firm?.invoice_same ? props.user.firm?.postal : props.user.firm?.postal_invoice,
    country_invoice: props.user.firm?.invoice_same ? props.user.firm?.country : props.user.firm?.country_invoice,
    invoice_same: props.user.firm?.invoice_same ? true : false
});
const addPhoneList = () => {
    if (form.contact_phone.length < 3) {
        form.contact_phone.push({
            phone: '',
            desc: ''
        });
    } else {
        return;
    }
}
const updateProfileFirm = () => {
    form.post(route('firm.update.form'), {
        errorBag: 'updateProfileFirm',
        preserveScroll: true,
    });
};
const removeElement = (index, array) => {
    array.splice(index, 1);
}
</script>

<template>
    <FormSection @submitted="updateProfileFirm">
        <template #title>
            {{ __('translate.Firm') }}
        </template>

        <template #description>
            {{ __('translate.FirmDescription') }}
        </template>

        <template #form>
            <!-- NIP -->
            <div class="col-span-6 sm:col-span-2">
                <InputLabel for="nip" :value="__('translate.nip')"/>
                <TextInput
                    id="nip"
                    v-model="form.nip"
                    type="text"
                    class="mt-1 block w-full"
                />
                <InputError :message="form.errors.nip" class="mt-2"/>
            </div>

            <!-- REGON -->
            <div class="col-span-6 sm:col-span-2">
                <InputLabel for="regon" :value="__('translate.regon')"/>
                <TextInput
                    id="regon"
                    v-model="form.regon"
                    type="number"
                    class="mt-1 block w-full"
                />
                <InputError :message="form.errors.regon" class="mt-2"/>
            </div>

            <!-- STREET -->
            <div class="col-span-6 sm:col-span-2">
                <InputLabel for="street" :value="__('translate.Street')"/>
                <TextInput
                    id="street"
                    v-model="form.street"
                    type="text"
                    class="mt-1 block w-full"
                />
                <InputError :message="form.errors.street" class="mt-2"/>
            </div>

            <!-- NUMBER -->
            <div class="col-span-6 sm:col-span-2">
                <InputLabel for="number" :value="__('translate.Number')"/>
                <TextInput
                    id="number"
                    v-model="form.number"
                    type="number"
                    class="mt-1 block w-full"
                />
                <InputError :message="form.errors.number" class="mt-2"/>
            </div>

            <!-- CITY -->
            <div class="col-span-6 sm:col-span-2">
                <InputLabel for="city" :value="__('translate.City')"/>
                <TextInput
                    id="city"
                    v-model="form.city"
                    type="text"
                    class="mt-1 block w-full"
                />
                <InputError :message="form.errors.city" class="mt-2"/>
            </div>

            <!-- POSTAL -->
            <div class="col-span-6 sm:col-span-2">
                <InputLabel for="postal" :value="__('translate.Postal')"/>
                <TextInput
                    id="postal"
                    v-model="form.postal"
                    type="text"
                    class="mt-1 block w-full"
                />
                <InputError :message="form.errors.postal" class="mt-2"/>
            </div>

            <!-- COUNTRY -->
            <div class="col-span-6 sm:col-span-2">
                <InputLabel for="country" :value="__('translate.Country')"/>
                <TextInput
                    id="country"
                    v-model="form.country"
                    type="text"
                    class="mt-1 block w-full"
                />
                <InputError :message="form.errors.country" class="mt-2"/>
            </div>

            <div class="col-span-6 sm:col-span-2 flex items-center">
                <Checkbox v-model:checked="form.invoice_same" id="invoice_same" name="invoice_same" class="mr-2"/>
                <InputLabel for="invoice_same" :value="__('translate.invoiceData')"/>
            </div>
            <div class="col-span-6">

                <div class="my-4">
                    <InputLabel for="description" :value="__('translate.description')"/>
                    <TextareaLimit id="description" v-model="form.description" :limit="1000"/>
                    <InputError :message="form.errors.description" class="mt-2"/>
                </div>


                <PrimaryButton :disabled="form.processing || form.contact_phone.length >= 3" @click="addPhoneList"
                               type="button" class="!flex justify-center w-100 mx-auto">
                                    <span class="flex items-center" v-if="form.contact_phone.length >= 3">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none"
                                             viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                          <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"/>
                                        </svg>
                                        Limit osiągnięty</span>
                    <div v-else class="flex">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24"
                             stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6m0 0v6m0-6h6m-6 0H6"/>
                        </svg>
                        {{ __('translate.phone') }}
                    </div>
                </PrimaryButton>
                <InputError :message="form.errors.contact_phone" class="mt-2"/>
            </div>

            <div class="col-span-6">
                <div v-if="form.contact_phone.length" class="text-center text-sm my-1">
                    {{ __('translate.phoneLimit') }} <span
                    class="text-indigo-600 font-semibold">{{ form.contact_phone.length }}</span>
                </div>
                <div v-for="(phone,index) in form.contact_phone" :key="index">
                    <div class="col-span-6 gap-4 grid grid-cols-1 md:grid-cols-2">
                        <!-- NUMBER -->
                        <div>
                            <InputLabel :for="`contact_phone-${index}-phone`" :value="__('translate.phone')"/>
                            <TextInput
                                :id="`contact_phone-${index}-phone`"
                                v-model.number="phone.phone"
                                type="number"
                                class="mt-1 block w-full"
                            />
                            <InputError :message="form.errors[`contact_phone.${index}.phone`]" class="mt-2"/>
                        </div>
                        <!-- NUMBER -->
                        <!-- DESC -->
                        <div>
                            <InputLabel :for="`contact_phone-${index}-desc`" :value="__('translate.phoneDesc')"/>
                            <TextInput
                                :id="`contact_phone-${index}-desc`"
                                v-model.trim="phone.desc"
                                type="text"
                                class="mt-1 block w-full"
                            />
                            <InputHelper id="helper-cost-explanation" class="text-sm">
                                {{ __('translate.phoneDescHelper') }}
                            </InputHelper>
                            <InputError :message="form.errors[`contact_phone.${index}.desc`]" class="mt-2"/>

                        </div>
                        <!-- DESC -->
                    </div>
                    <DangerButton @click="removeElement(index,form.contact_phone)"
                                  class="my-3 !flex justify-center w-100 mx-auto">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2" fill="none" viewBox="0 0 24 24"
                             stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                  d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/>
                        </svg>
                        {{ __('translate.phoneDelete') }}
                    </DangerButton>
                </div>
            </div>
            <div class="col-span-6" v-if="!form.invoice_same">
                <h3 class="text-lg mb-3 font-bold">{{ __('translate.Invoice') }}</h3>
                <div class="grid grid-cols-6 gap-6">
                    <!-- NAME-INVOICE -->
                    <div class="col-span-6 sm:col-span-2">
                        <InputLabel for="name_invoice" :value="__('translate.name')"/>
                        <TextInput
                            id="name_invoice"
                            v-model="form.name_invoice"
                            name="name_invoice"
                            type="text"
                            class="mt-1 block w-full"
                        />
                        <InputError :message="form.errors.name_invoice" class="mt-2"/>
                    </div>
                    <!-- NIP-INVOICE -->
                    <div class="col-span-6 sm:col-span-2">
                        <InputLabel for="nip_invoice" :value="__('translate.nip')"/>
                        <TextInput
                            id="nip_invoice"
                            v-model="form.nip_invoice"
                            type="text"
                            class="mt-1 block w-full"
                        />
                        <InputError :message="form.errors.nip_invoice" class="mt-2"/>
                    </div>

                    <!-- REGON-INVOICE -->
                    <div class="col-span-6 sm:col-span-2">
                        <InputLabel for="regon_invoice" :value="__('translate.regon')"/>
                        <TextInput
                            id="regon_invoice"
                            v-model="form.regon_invoice"
                            type="number"
                            class="mt-1 block w-full"
                        />
                        <InputError :message="form.errors.regon_invoice" class="mt-2"/>
                    </div>

                    <!-- STREET-INVOICE -->
                    <div class="col-span-6 sm:col-span-2">
                        <InputLabel for="street_invoice" :value="__('translate.Street')"/>
                        <TextInput
                            id="street_invoice"
                            v-model="form.street_invoice"
                            type="text"
                            class="mt-1 block w-full"
                        />
                        <InputError :message="form.errors.street_invoice" class="mt-2"/>
                    </div>

                    <!-- NUMBER-INVOICE -->
                    <div class="col-span-6 sm:col-span-2">
                        <InputLabel for="number_invoice" :value="__('translate.Number')"/>
                        <TextInput
                            id="number_invoice"
                            v-model="form.number_invoice"
                            type="number"
                            class="mt-1 block w-full"
                        />
                        <InputError :message="form.errors.number_invoice" class="mt-2"/>
                    </div>

                    <!-- CITY-INVOICE -->
                    <div class="col-span-6 sm:col-span-2">
                        <InputLabel for="city_invoice" :value="__('translate.City')"/>
                        <TextInput
                            id="city_invoice"
                            v-model="form.city_invoice"
                            type="text"
                            class="mt-1 block w-full"
                        />
                        <InputError :message="form.errors.city_invoice" class="mt-2"/>
                    </div>

                    <!-- POSTAL-INVOICE -->
                    <div class="col-span-6 sm:col-span-2">
                        <InputLabel for="postal_invoice" :value="__('translate.Postal')"/>
                        <TextInput
                            id="postal_invoice"
                            v-model="form.postal_invoice"
                            type="text"
                            class="mt-1 block w-full"
                        />
                        <InputError :message="form.errors.postal_invoice" class="mt-2"/>
                    </div>

                    <!-- COUNTRY-INVOICE -->
                    <div class="col-span-6 sm:col-span-2">
                        <InputLabel for="country_invoice" :value="__('translate.Country')"/>
                        <TextInput
                            id="country_invoice"
                            v-model="form.country_invoice"
                            type="text"
                            class="mt-1 block w-full"
                        />
                        <InputError :message="form.errors.country_invoice" class="mt-2"/>
                    </div>
                </div>

            </div>
        </template>

        <template #actions>
            <ActionMessage :on="form.recentlySuccessful" class="me-3">
                {{ __('translate.Saved') }}
            </ActionMessage>

            <PrimaryButton :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
                {{ __('translate.Save') }}
            </PrimaryButton>
        </template>
    </FormSection>
</template>
