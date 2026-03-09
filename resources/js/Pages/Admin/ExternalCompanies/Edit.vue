<script setup>
import { useForm, Link } from '@inertiajs/vue3';
import AppLayout from '@/Layouts/AppLayout.vue';
import InputError from '@/Components/InputError.vue';
import InputLabel from '@/Components/InputLabel.vue';
import TextInput from '@/Components/TextInput.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';

const props = defineProps({
    externalCompany: Object,
});

const form = useForm({
    name: props.externalCompany.name,
    email: props.externalCompany.email,
    abbreviation: props.externalCompany.abbreviation,
    note: props.externalCompany.note,
});

const submit = () => {
    form.put(route('admin.external-companies.update', props.externalCompany.id));
};
</script>

<template>
    <AppLayout title="Edytuj firmę zewnętrzną">
        <div class="py-12 bg-gray-50/50 min-h-screen">
            <div class="max-w-[1600px] mx-auto sm:px-6 lg:px-8">

                <div class="mb-8 flex items-center px-4">
                    <Link
                        :href="route('admin.external-companies.show', externalCompany.id)"
                        class="inline-flex items-center gap-2 text-[10px] font-black text-gray-400 uppercase tracking-[0.2em] hover:text-[#0A2C5C] transition-colors"
                    >
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor" class="w-3 h-3">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5L3 12m0 0l7.5-7.5M3 12h18" />
                        </svg>
                        Anuluj i wróć
                    </Link>
                </div>

                <div class="bg-white rounded-[3rem] shadow-xl shadow-blue-900/5 border border-gray-100 p-10">
                    <div class="flex items-center gap-4 mb-10">
                        <div class="w-12 h-12 bg-[#0A2C5C] rounded-2xl flex items-center justify-center shadow-lg shadow-blue-900/20">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-6 h-6 text-white">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L6.832 19.82a4.5 4.5 0 0 1-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 0 1 1.13-1.897L16.863 4.487Zm0 0L19.5 7.125" />
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-xl font-black text-[#0A2C5C] uppercase tracking-tight">Edytuj dane</h3>
                            <p class="text-[10px] font-bold text-gray-400 uppercase tracking-widest mt-1">Aktualizacja informacji o firmie zewnętrznej</p>
                        </div>
                    </div>

                    <form @submit.prevent="submit" class="space-y-8">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                            <!-- Name -->
                            <div class="space-y-2">
                                <InputLabel for="name" value="Nazwa firmy" class="text-[10px] font-black text-gray-400 uppercase tracking-widest ml-2" />
                                <TextInput
                                    id="name"
                                    v-model="form.name"
                                    type="text"
                                    class="w-full px-6 py-4 bg-gray-50 border-none rounded-2xl text-xs font-bold focus:ring-2 focus:ring-[#0A2C5C]/10 transition-all shadow-inner"
                                    required
                                />
                                <InputError :message="form.errors.name" class="mt-2 ml-2" />
                            </div>

                            <!-- Email -->
                            <div class="space-y-2">
                                <InputLabel for="email" value="Adres Email" class="text-[10px] font-black text-gray-400 uppercase tracking-widest ml-2" />
                                <TextInput
                                    id="email"
                                    v-model="form.email"
                                    type="email"
                                    class="w-full px-6 py-4 bg-gray-50 border-none rounded-2xl text-xs font-bold focus:ring-2 focus:ring-[#0A2C5C]/10 transition-all shadow-inner"
                                    required
                                />
                                <InputError :message="form.errors.email" class="mt-2 ml-2" />
                            </div>

                            <!-- Abbreviation -->
                            <div class="space-y-2">
                                <InputLabel for="abbreviation" value="Skrót firmy" class="text-[10px] font-black text-gray-400 uppercase tracking-widest ml-2" />
                                <TextInput
                                    id="abbreviation"
                                    v-model="form.abbreviation"
                                    type="text"
                                    class="w-full px-6 py-4 bg-gray-50 border-none rounded-2xl text-xs font-bold focus:ring-2 focus:ring-[#0A2C5C]/10 transition-all shadow-inner"
                                />
                                <InputError :message="form.errors.abbreviation" class="mt-2 ml-2" />
                            </div>
                        </div>

                        <!-- Note -->
                        <div class="space-y-2">
                            <InputLabel for="note" value="Notatki / Opis" class="text-[10px] font-black text-gray-400 uppercase tracking-widest ml-2" />
                            <textarea
                                id="note"
                                v-model="form.note"
                                rows="5"
                                class="w-full px-6 py-4 bg-gray-50 border-none rounded-[2rem] text-xs font-bold focus:ring-2 focus:ring-[#0A2C5C]/10 transition-all shadow-inner resize-none"
                            ></textarea>
                            <InputError :message="form.errors.note" class="mt-2 ml-2" />
                        </div>

                        <div class="pt-6 flex justify-end">
                            <PrimaryButton
                                :class="{ 'opacity-25': form.processing }"
                                :disabled="form.processing"
                                class="px-12 py-5 bg-[#0A2C5C] hover:bg-blue-800 rounded-2xl font-black text-[10px] uppercase tracking-[0.2em] shadow-xl shadow-blue-900/20"
                            >
                                Zapisz zmiany
                            </PrimaryButton>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </AppLayout>
</template>
