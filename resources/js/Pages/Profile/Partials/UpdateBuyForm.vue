<script setup>
import { useForm } from '@inertiajs/vue3';
import ActionMessage from '@/Components/ActionMessage.vue';
import FormSection from '@/Components/FormSection.vue';
import InputError from '@/Components/InputError.vue';
import InputLabel from '@/Components/InputLabel.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';

const props = defineProps({
    user: Object,
});

const form = useForm({
    _method: 'PUT',
    currency: props.user.firm.currency,
});

const updateBuyInformation = () => {
    form.post(route('firm-buy-information.update'), {
        errorBag: 'updateBuyInformation',
        preserveScroll: true
    });
};
</script>

<template>
    <FormSection @submitted="updateBuyInformation">
        <template #title>
            {{__('translate.BuyInformation')}}
        </template>

        <template #description>
            {{__('translate.BuyInformationDescription')}}
        </template>

        <template #form>
            <!-- Currency -->
            <div class="col-span-6 sm:col-span-4">
                <InputLabel for="currency" :value="__('translate.currency')" />
                <select id="currency" v-model="form.currency" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 mt-1 block w-full">
                    <option selected value="EUR">EUR</option>
                    <option value="USD">USD</option>
                    <option value="PLN">PLN</option>
                </select>
                <InputError :message="form.errors.currency" class="mt-2" />
            </div>
        </template>

        <template #actions>
            <ActionMessage :on="form.recentlySuccessful" class="me-3">
                {{__('translate.Saved')}}
            </ActionMessage>

            <PrimaryButton :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
                {{__('translate.Save')}}
            </PrimaryButton>
        </template>
    </FormSection>
</template>
