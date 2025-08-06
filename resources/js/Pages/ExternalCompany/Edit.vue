<script setup>
import { useForm } from '@inertiajs/vue3';
import AppLayout from '@/Layouts/AppLayout.vue';
import InputError from '@/Components/InputError.vue';
import InputLabel from '@/Components/InputLabel.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import TextInput from '@/Components/TextInput.vue';
import FormSection from '@/Components/FormSection.vue';

const props = defineProps({
    externalCompany: Object,
});

const form = useForm({
    name: props.externalCompany.name,
    abbreviation: props.externalCompany.abbreviation,
});

const updateExternalCompany = () => {
    form.put(route('external-companies.update', props.externalCompany.id), {
        preserveScroll: true,
    });
};
</script>

<template>
    <AppLayout :title="__('translate.editExternalCompany')">
        <template #header>
            <div class="flex justify-between">
                <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                    {{ __('translate.editExternalCompany') }}
                </h2>
            </div>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <FormSection @submitted="updateExternalCompany">
                    <template #title>
                        {{ __('translate.externalCompanyInfo') }}
                    </template>

                    <template #description>
                        {{ __('translate.externalCompanyEditDescription') }}
                    </template>

                    <template #form>
                        <div class="col-span-6 sm:col-span-4">
                            <InputLabel for="name" :value="__('translate.name')" />
                            <TextInput
                                id="name"
                                v-model="form.name"
                                type="text"
                                class="mt-1 block w-full"
                                required
                                autofocus
                            />
                            <InputError :message="form.errors.name" class="mt-2" />
                        </div>

                        <div class="col-span-6 sm:col-span-4">
                            <InputLabel for="abbreviation" :value="__('translate.abbreviation')" />
                            <TextInput
                                id="abbreviation"
                                v-model="form.abbreviation"
                                type="text"
                                class="mt-1 block w-full"
                            />
                            <p class="mt-1 text-sm text-gray-500">{{ __('translate.abbreviationHelper') }}</p>
                            <InputError :message="form.errors.abbreviation" class="mt-2" />
                        </div>
                    </template>

                    <template #actions>
                        <PrimaryButton :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
                            {{ __('translate.update') }}
                        </PrimaryButton>
                    </template>
                </FormSection>
            </div>
        </div>
    </AppLayout>
</template>
