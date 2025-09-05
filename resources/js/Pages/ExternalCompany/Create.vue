<script setup>
import { useForm } from '@inertiajs/vue3';
import AppLayout from '@/Layouts/AppLayout.vue';
import InputError from '@/Components/InputError.vue';
import InputLabel from '@/Components/InputLabel.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import TextInput from '@/Components/TextInput.vue';
import FormSection from '@/Components/FormSection.vue';

const form = useForm({
    name: '',
    abbreviation: '',
    email: '',
});

const createExternalCompany = () => {
    form.post(route('external-companies.store'), {
        preserveScroll: true,
        onSuccess: () => {
            form.reset();
        },
    });
};
</script>

<template>
    <AppLayout :title="__('translate.createExternalCompany')">
        <template #header>
            <div class="flex justify-between">
                <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                    {{ __('translate.createExternalCompany') }}
                </h2>
            </div>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <FormSection @submitted="createExternalCompany">
                    <template #title>
                        {{ __('translate.externalCompanyInfo') }}
                    </template>

                    <template #description>
                        {{ __('translate.externalCompanyDescription') }}
                    </template>

                    <template #form>
                        <div class="col-span-6 sm:col-span-4">
                            <InputLabel for="name" :value="__('translate.name')" />
                            <TextInput
                                id="name"
                                v-model="form.name"
                                type="text"
                                class="mt-1 block w-full"
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
                        <div class="col-span-6 sm:col-span-4">
                            <InputLabel for="email" :value="__('translate.email')" />
                            <TextInput
                                id="email"
                                v-model="form.email"
                                type="text"
                                class="mt-1 block w-full"
                            />
                            <InputError :message="form.errors.email" class="mt-2" />
                        </div>
                    </template>

                    <template #actions>
                        <PrimaryButton :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
                            {{ __('translate.create') }}
                        </PrimaryButton>
                    </template>
                </FormSection>
            </div>
        </div>
    </AppLayout>
</template>
