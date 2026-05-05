<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import { useForm, Link } from '@inertiajs/vue3';
import InputLabel from '@/Components/InputLabel.vue';
import TextInput from '@/Components/TextInput.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import SecondaryButton from '@/Components/SecondaryButton.vue';

const props = defineProps({
    currency: Object,
});

const form = useForm({
    name: props.currency.name,
    code: props.currency.code,
    value: props.currency.value,
});

const submit = () => {
    form.put(route('admin.currencies.update', props.currency.name));
};
</script>

<template>
    <AppLayout title="Edytuj walutę">
        <div class="py-12 bg-gray-50/50 min-h-screen px-2 sm:px-0">
            <div class="max-w-[1600px] mx-auto sm:px-6 lg:px-8">
                <!-- Header Section -->
                <div class="bg-white rounded-[3rem] shadow-xl shadow-blue-900/5 border border-gray-100 p-10 mb-8">
                    <div class="flex flex-col md:flex-row md:items-center justify-between gap-8">
                        <div>
                            <h3 class="text-2xl font-black text-[#0A2C5C] uppercase tracking-tight">Edytuj walutę: {{ currency.name }}</h3>
                            <p class="text-[10px] font-bold text-gray-400 uppercase tracking-widest mt-1">
                                Zaktualizuj skrót, pełną nazwę oraz symbol waluty
                            </p>
                        </div>
                        <Link
                            :href="route('admin.currencies.index')"
                            class="px-8 py-4 bg-gray-100 hover:bg-gray-200 text-gray-600 rounded-2xl font-black text-xs uppercase tracking-widest transition-all active:scale-95 flex items-center gap-2"
                        >
                            Powrót
                        </Link>
                    </div>
                </div>

                <div class="bg-white rounded-[3rem] shadow-xl shadow-blue-900/5 border border-gray-100 p-10 max-w-2xl">
                    <form @submit.prevent="submit" class="space-y-8">
                        <div class="space-y-6">
                            <div class="p-8 bg-blue-50/50 rounded-[2rem] border border-blue-100/50 space-y-6">
                                <h4 class="text-sm font-black text-[#0A2C5C] uppercase tracking-widest flex items-center gap-3">
                                    <span class="w-8 h-8 bg-[#00AEEF] text-white rounded-xl flex items-center justify-center text-xs">01</span>
                                    Informacje o walucie
                                </h4>

                                <div class="space-y-4">
                                    <div>
                                        <InputLabel for="name" value="Skrót (np. PLN, USD)" class="text-[10px] font-black uppercase tracking-widest text-gray-400 mb-2 ml-1" />
                                        <TextInput
                                            id="name"
                                            v-model="form.name"
                                            type="text"
                                            class="block w-full !bg-white !border-none !rounded-2xl !py-4 shadow-sm focus:ring-2 focus:ring-blue-500/20 transition-all font-medium"
                                            placeholder="np. PLN"
                                        />
                                        <div v-if="form.errors.name" class="mt-2 text-xs font-bold text-red-500 uppercase tracking-wider ml-1">{{ form.errors.name }}</div>
                                    </div>

                                    <div>
                                        <InputLabel for="code" value="Pełna nazwa (np. Złoty polski)" class="text-[10px] font-black uppercase tracking-widest text-gray-400 mb-2 ml-1" />
                                        <TextInput
                                            id="code"
                                            v-model="form.code"
                                            type="text"
                                            class="block w-full !bg-white !border-none !rounded-2xl !py-4 shadow-sm focus:ring-2 focus:ring-blue-500/20 transition-all font-medium"
                                            placeholder="np. Złoty polski"
                                        />
                                        <div v-if="form.errors.code" class="mt-2 text-xs font-bold text-red-500 uppercase tracking-wider ml-1">{{ form.errors.code }}</div>
                                    </div>

                                    <div>
                                        <InputLabel for="value" value="Symbol (np. zł, $, €)" class="text-[10px] font-black uppercase tracking-widest text-gray-400 mb-2 ml-1" />
                                        <TextInput
                                            id="value"
                                            v-model="form.value"
                                            type="text"
                                            class="block w-full !bg-white !border-none !rounded-2xl !py-4 shadow-sm focus:ring-2 focus:ring-blue-500/20 transition-all font-medium"
                                            placeholder="np. zł"
                                        />
                                        <div v-if="form.errors.value" class="mt-2 text-xs font-bold text-red-500 uppercase tracking-wider ml-1">{{ form.errors.value }}</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Form Actions -->
                        <div class="flex items-center justify-end gap-4 pt-8 border-t border-gray-50">
                            <SecondaryButton @click="$event.preventDefault(); $inertia.visit(route('admin.currencies.index'))" class="!rounded-2xl !px-10 !py-4 font-black text-xs uppercase tracking-widest">
                                Anuluj
                            </SecondaryButton>
                            <PrimaryButton
                                class="!rounded-2xl !px-12 !py-4 !bg-[#00AEEF] hover:!bg-[#0096ce] font-black text-xs uppercase tracking-widest shadow-lg shadow-blue-200"
                                :class="{ 'opacity-25': form.processing }"
                                :disabled="form.processing"
                            >
                                Aktualizuj walutę
                            </PrimaryButton>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </AppLayout>
</template>
