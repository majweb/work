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
    email: props.externalCompany.email,
    note: props.externalCompany.note,
});

const updateExternalCompany = () => {
    form.put(route('external-companies.update', props.externalCompany.id), {
        preserveScroll: true,
    });
};
</script>

<template>
    <AppLayout :title="__('translate.editExternalCompany')">
        <div class="py-8">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white p-8 sm:p-12 rounded-[2rem] shadow-sm border border-gray-100">
                    <div class="mb-8">
                        <Link :href="route('external-companies.index')" class="text-red-500 font-bold text-xs uppercase tracking-[0.2em] hover:underline transition-all">
                            {{ __('translate.goBack') }}
                        </Link>

                        <h2 class="font-bold text-3xl text-[#1a335d] leading-tight mt-6">
                            {{ __('translate.editExternalCompany') }}
                        </h2>
                        <p class="mt-4 text-gray-500 max-w-2xl text-base font-medium leading-relaxed">
                            {{ __('translate.externalCompanyEditDescription') }}
                        </p>
                    </div>

                    <form @submit.prevent="updateExternalCompany">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                            <!-- Lewa kolumna: Pola tekstowe -->
                            <div class="space-y-6">
                                <div class="relative group">
                                    <TextInput
                                        id="name"
                                        v-model="form.name"
                                        type="text"
                                        class="mt-1 block w-full rounded-2xl border-gray-100 py-3 px-6 text-lg font-bold text-[#1a335d] focus:border-[#00b0e8] focus:ring-0 transition-all placeholder:text-gray-200"
                                        :placeholder="__('translate.name')"
                                        required
                                        autofocus
                                    />
                                    <InputError :message="form.errors.name" class="mt-2" />
                                </div>

                                <div class="relative group">
                                    <TextInput
                                        id="abbreviation"
                                        v-model="form.abbreviation"
                                        type="text"
                                        class="mt-1 block w-full rounded-2xl border-gray-100 py-3 px-6 text-lg font-bold text-[#1a335d] focus:border-[#00b0e8] focus:ring-0 transition-all placeholder:text-gray-200"
                                        :placeholder="__('translate.abbreviation')"
                                    />
                                    <InputError :message="form.errors.abbreviation" class="mt-2" />
                                </div>

                                <div class="relative group">
                                    <TextInput
                                        id="email"
                                        v-model="form.email"
                                        type="text"
                                        class="mt-1 block w-full rounded-2xl border-gray-100 py-3 px-6 text-lg font-bold text-[#1a335d] focus:border-[#00b0e8] focus:ring-0 transition-all placeholder:text-gray-200"
                                        :placeholder="__('translate.email')"
                                    />
                                    <InputError :message="form.errors.email" class="mt-2" />
                                </div>
                            </div>

                            <!-- Prawa kolumna: Notatka -->
                            <div class="h-full">
                                <div class="relative h-full group">
                                    <textarea
                                        id="note"
                                        v-model="form.note"
                                        class="block w-full h-full min-h-[250px] border-2 border-gray-100 focus:border-[#00b0e8] focus:ring-0 rounded-3xl p-6 text-[#1a335d] text-lg font-bold placeholder:text-gray-200 transition-all shadow-sm"
                                        :placeholder="__('translate.note')"
                                    ></textarea>
                                    <InputError :message="form.errors.note" class="mt-2" />
                                </div>
                            </div>
                        </div>

                        <div class="flex justify-end mt-8">
                            <button
                                type="submit"
                                :class="{ 'opacity-25': form.processing }"
                                :disabled="form.processing"
                                class="bg-[#1a335d] text-white px-12 py-3 rounded-xl font-black text-lg uppercase tracking-[0.2em] hover:bg-[#14284b] transition-all active:scale-95 shadow-lg"
                            >
                                {{ __('translate.save') }}
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </AppLayout>
</template>
