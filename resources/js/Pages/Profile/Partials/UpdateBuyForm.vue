<script setup>
import { useForm } from '@inertiajs/vue3';
import ActionMessage from '@/Components/ActionMessage.vue';
import InputError from '@/Components/InputError.vue';
import InputLabel from '@/Components/InputLabel.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import __ from "@/lang.js";

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
    <div class="bg-white shadow-lg rounded-3xl overflow-hidden">
        <!-- Header -->
        <div class="bg-work-main px-6 py-4">
            <h3 class="text-lg font-semibold text-white">
                {{ __('translate.BuyInformation') }}
            </h3>
        </div>

        <!-- Form -->
        <form @submit.prevent="updateBuyInformation">
            <div class="px-6 py-6 space-y-6">
                <!-- Currency -->
                <div>
                    <InputLabel for="currency" :value="__('translate.currency')" />
                    <select id="currency" v-model="form.currency" class="bg-gray-50 border border-work-main text-gray-900 text-sm rounded-lg focus:ring-work-main focus:border-work-main block w-full p-2.5 mt-1">
                        <option selected value="EUR">EUR</option>
                        <option value="USD">USD</option>
                        <option value="PLN">PLN</option>
                    </select>
                    <InputError :message="form.errors.currency" class="mt-2" />
                </div>
            </div>

            <!-- Actions -->
            <div class="px-6 py-4 bg-gray-50 border-t border-gray-200 flex items-center justify-end gap-3">
                <ActionMessage :on="form.recentlySuccessful" class="text-sm text-green-600">
                    {{ __('translate.Saved') }}
                </ActionMessage>

                <PrimaryButton :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
                    {{ __('translate.Save') }}
                </PrimaryButton>
            </div>
        </form>
    </div>
</template>
