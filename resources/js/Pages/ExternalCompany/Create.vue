<script setup>
import { useForm, Link } from '@inertiajs/vue3';
import AppLayout from '@/Layouts/AppLayout.vue';
import InputError from '@/Components/InputError.vue';
import TextInput from '@/Components/TextInput.vue';

const form = useForm({
    name: '',
    abbreviation: '',
    email: '',
    note: '',
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
        <div class="py-12 bg-gray-50/50 min-h-screen px-2 sm:px-0">
            <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white rounded-[3rem] shadow-xl shadow-blue-900/5 border border-gray-100 p-10 mb-8">
                    <div class="flex items-center justify-between">
                        <div>
                            <h3 class="text-2xl font-black text-[#0A2C5C] uppercase tracking-tight">{{ __('translate.createExternalCompany') }}</h3>
                            <p class="text-[10px] font-bold text-gray-400 uppercase tracking-widest mt-1">{{ __('translate.externalCompanyDescription') }}</p>
                        </div>
                        <Link :href="route('external-companies.index')" class="inline-flex items-center px-10 py-4 bg-red-50 border border-transparent rounded-2xl font-black text-[10px] text-red-600 uppercase tracking-widest hover:bg-red-100 transition duration-200 shadow-lg shadow-red-900/5">
                            {{ __('translate.goBack') }}
                        </Link>
                    </div>
                </div>

                <div class="bg-white rounded-[3rem] shadow-xl shadow-blue-900/5 border border-gray-100 p-10">
                    <form @submit.prevent="createExternalCompany">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-10">
                            <!-- Lewa kolumna: Pola tekstowe -->
                            <div class="space-y-6">
                                <div>
                                    <p class="text-[10px] font-black text-gray-300 uppercase tracking-[0.2em] mb-2">{{ __('translate.name') }}</p>
                                    <TextInput
                                        id="name"
                                        v-model="form.name"
                                        type="text"
                                        class="block w-full border-2 border-gray-50 focus:border-[#00a0e3] focus:ring-0 rounded-2xl p-4 text-gray-900 text-sm font-black placeholder:text-gray-200 transition-all shadow-sm bg-gray-50/30"
                                        :placeholder="__('translate.name')"
                                        autofocus
                                    />
                                    <InputError :message="form.errors.name" class="mt-2" />
                                </div>

                                <div>
                                    <p class="text-[10px] font-black text-gray-300 uppercase tracking-[0.2em] mb-2">{{ __('translate.abbreviation') }}</p>
                                    <TextInput
                                        id="abbreviation"
                                        v-model="form.abbreviation"
                                        type="text"
                                        class="block w-full border-2 border-gray-50 focus:border-[#00a0e3] focus:ring-0 rounded-2xl p-4 text-gray-900 text-sm font-black placeholder:text-gray-200 transition-all shadow-sm bg-gray-50/30"
                                        :placeholder="__('translate.abbreviation')"
                                    />
                                    <InputError :message="form.errors.abbreviation" class="mt-2" />
                                </div>

                                <div>
                                    <p class="text-[10px] font-black text-gray-300 uppercase tracking-[0.2em] mb-2">{{ __('translate.email') }}</p>
                                    <TextInput
                                        id="email"
                                        v-model="form.email"
                                        type="text"
                                        class="block w-full border-2 border-gray-50 focus:border-[#00a0e3] focus:ring-0 rounded-2xl p-4 text-gray-900 text-sm font-black placeholder:text-gray-200 transition-all shadow-sm bg-gray-50/30"
                                        :placeholder="__('translate.email')"
                                    />
                                    <InputError :message="form.errors.email" class="mt-2" />
                                </div>
                            </div>

                            <!-- Prawa kolumna: Notatka -->
                            <div class="flex flex-col h-full">
                                <p class="text-[10px] font-black text-gray-300 uppercase tracking-[0.2em] mb-2">{{ __('translate.note') }}</p>
                                <div class="relative flex-grow">
                                    <textarea
                                        id="note"
                                        v-model="form.note"
                                        class="block w-full h-full min-h-[200px] border-2 border-gray-50 focus:border-[#00a0e3] focus:ring-0 rounded-[2rem] p-6 text-gray-900 text-sm font-black placeholder:text-gray-200 transition-all shadow-sm bg-gray-50/30"
                                        :placeholder="__('translate.note')"
                                    ></textarea>
                                </div>
                                <InputError :message="form.errors.note" class="mt-2" />
                            </div>
                        </div>

                        <div class="flex justify-end">
                            <button
                                type="submit"
                                :class="{ 'opacity-25': form.processing }"
                                :disabled="form.processing"
                                class="bg-[#0A2C5C] hover:bg-[#00a0e3] text-white px-12 py-4 rounded-2xl text-[10px] font-black uppercase tracking-widest shadow-lg shadow-blue-900/20 transition-all active:scale-95 disabled:opacity-50"
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
