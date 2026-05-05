<script setup>
import {useForm} from '@inertiajs/vue3';
import ActionMessage from '@/Components/ActionMessage.vue';
import InputError from '@/Components/InputError.vue';
import InputLabel from '@/Components/InputLabel.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import TextInput from '@/Components/TextInput.vue';
import Checkbox from "@/Components/Checkbox.vue";
import DangerButton from "@/Components/DangerButton.vue";
import InputHelper from "@/Components/InputHelper.vue";
import TextareaLimit from "@/Components/TextareaLimit.vue";
import Multiselect from "vue-multiselect";
import SpinnerAction from "@/Components/SpinnerAction.vue";
import {ref} from "vue";
import __ from "@/lang.js";

const props = defineProps({
    user: Object,
    countries: Array,

});
const optionsCountry = ref(props.countries);


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
    countryJson: props.user.firm?.countryJson,
    countryInvoiceJson: props.user.firm?.countryInvoiceJson,
    contact_phone: (props.user.firm?.contact_phone || []).map(p => ({
        phone: p.phone?.toString() || '',
        desc: p.desc || ''
    })),
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
}
</script>

<template>
    <div class="bg-white shadow-lg rounded-3xl">
        <!-- Header -->
        <h3 class="px-6 py-4 text-xl text-center font-semibold text-work-main uppercase">
            {{ __('translate.Firm') }}
        </h3>

        <!-- Form -->
        <form @submit.prevent="updateProfileFirm">
            <div class="px-6 py-6">
                <div class="grid grid-cols-6 gap-6 mb-2">
                    <!-- NIP -->
                    <div class="col-span-6 sm:col-span-2">
                        <InputLabel for="nip" :value="__('translate.nip')"/>
                        <TextInput
                            id="nip"
                            v-model="form.nip"
                            type="text"
                            class="mt-1 block w-full"
                        />
                        <p v-if="form.countryJson" class="text-[10px] text-gray-400 mt-1 uppercase">
                            {{ __('translate.suggested_format') }}: {{ getNipPlaceholder(form.countryJson.countryCode) }}
                        </p>
                        <InputError :message="form.errors.nip" class="mt-2"/>
                    </div>
                    <!-- REGON -->
                    <div class="col-span-6 sm:col-span-2">
                        <InputLabel for="regon" :value="__('translate.regon')"/>
                        <TextInput
                            id="regon"
                            v-model="form.regon"
                            type="text"
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
                            type="text"
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
                    <div class="col-span-6 sm:col-span-3">
                        <InputLabel :value="__('translate.Country')"/>
                        <multiselect
                            group-values="elements" group-label="group"
                            :group-select="false"
                            :selectLabel="''"
                            :selectGroupLabel="''"
                            :selectedLabel="''"
                            :deselectLabel="''"
                            track-by="name"
                            :multiple="false"
                            label="name"
                            :placeholder="__('translate.placeholder')"
                            v-model="form.countryJson" :options="optionsCountry"
                            class="custom-multiselect">
                            <template #noResult>
                                <span>{{ __('translate.noOptions') }}</span>
                            </template>
                            <template #noOptions>
                                <span>{{ __('translate.noResult') }}</span>
                            </template>
                        </multiselect>
                        <InputError :message="form.errors.countryJson" class="mt-2"/>
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
                                        v-model="phone.phone"
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
                                <p v-if="form.countryInvoiceJson || form.countryJson" class="text-[10px] text-gray-400 mt-1 uppercase">
                                    {{ __('translate.suggested_format') }}: {{ getNipPlaceholder(form.countryInvoiceJson?.countryCode || form.countryJson?.countryCode) }}
                                </p>
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
                            <div class="col-span-6 sm:col-span-3">
                                <InputLabel class="mb-1" :value="__('translate.Country')"/>
                                <multiselect
                                    group-values="elements" group-label="group"
                                    :group-select="false"
                                    :selectLabel="''"
                                    :selectGroupLabel="''"
                                    :selectedLabel="''"
                                    :deselectLabel="''"
                                    track-by="name"
                                    :multiple="false"
                                    label="name"
                                    :placeholder="__('translate.placeholder')"
                                    v-model="form.countryInvoiceJson" :options="optionsCountry"
                                    class="custom-multiselect">
                                    <template #noResult>
                                        <span>{{ __('translate.noOptions') }}</span>
                                    </template>
                                    <template #noOptions>
                                        <span>{{ __('translate.noResult') }}</span>
                                    </template>
                                </multiselect>
                                <InputError :message="form.errors.countryInvoiceJson" class="mt-2"/>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- Actions -->
                <div class="px-6 py-4 bg-gray-50 border-t border-gray-200 flex items-center justify-end gap-3">
                    <ActionMessage :on="form.recentlySuccessful" class="text-sm text-green-600">
                        {{ __('translate.Saved') }}
                    </ActionMessage>

                    <PrimaryButton :disabled="form.processing" class="rounded-xl px-8 shadow-md hover:shadow-lg transition-all" :class="{ 'opacity-25': form.processing }">
                        <spinner-action :process="form.processing">{{ __('translate.Save') }}</spinner-action>
                    </PrimaryButton>
                </div>
            </div>
        </form>
    </div>
</template>
<style src="vue-multiselect/dist/vue-multiselect.css"></style>
<style lang="scss">
.custom-multiselect {
    .multiselect__tags {
        border: 1px solid #f3f4f6; /* border-gray-100 */
        border-radius: 1rem; /* rounded-2xl approximation for multiselect */
        padding: 0.75rem 2.5rem 0.75rem 1.25rem;
        background: #f9fafb; /* bg-gray-50 */
        transition: all 0.3s ease;
    }

    &.multiselect--active {
        .multiselect__tags {
            border-color: transparent;
        }
    }

    .multiselect__placeholder {
        margin-bottom: 0;
        padding-top: 0;
        color: #9ca3af; /* text-gray-400 */
        font-size: 0.75rem; /* text-xs */
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 0.1em;
    }

    .multiselect__single {
        margin-bottom: 0;
        padding-left: 0;
        font-size: 0.75rem;
        background: transparent;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 0.1em;
    }

    .multiselect__input {
        margin-bottom: 0;
        background: transparent;
        font-size: 0.75rem;
        font-weight: 700;
    }

    .multiselect__select {
        height: 100%;
        width: 2.5rem;
    }

    .multiselect__option--highlight {
        background: #0A2C5C !important;
        outline: none;
        color: white;
        font-size: 0.75rem;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 0.1em;

        &:after {
            background: #0A2C5C !important;
            color: white !important;
        }
    }

    .multiselect__option--selected {
        background: #f3f4f6 !important;
        color: #0A2C5C;
        font-weight: 900;

        &:after {
            background: transparent !important;
            color: #9ca3af !important;
        }

        &.multiselect__option--highlight {
            background: #0A2C5C !important;
            color: white !important;

            &:after {
                background: #0A2C5C !important;
                color: white !important;
            }
        }
    }

    .multiselect__tag {
        background: #00a0e3 !important;
        font-size: 0.75rem;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 0.1em;
        padding: 4px 26px 4px 10px;
        border-radius: 8px;
    }

    .multiselect__tag-icon {
        background: #00a0e3 !important;
        border-radius: 8px;
        top: -3px !important;

        &:after {
            color: white !important;
        }

        &:hover {
            background: #0088c1 !important;
        }
    }

    .multiselect__content-wrapper {
        border: 1px solid #f3f4f6;
        border-top: none;
        border-bottom-left-radius: 1rem;
        border-bottom-right-radius: 1rem;
        box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1);
        z-index: 50 !important;
    }

}
.custom-multiselect .multiselect__content-wrapper {
    max-height: 300px !important; /* Musi być zgodne z :max-height */
    overflow-y: auto !important;
    border: 1px solid #f3f4f6;
    border-top: none;
    border-bottom-left-radius: 1rem;
    border-bottom-right-radius: 1rem;
    box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1);
    z-index: 50 !important;
}
</style>
