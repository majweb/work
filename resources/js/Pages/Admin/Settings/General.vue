<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import { useForm } from '@inertiajs/vue3';
import InputError from '@/Components/InputError.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import Checkbox from '@/Components/Checkbox.vue';
import TextInput from '@/Components/TextInput.vue';

const props = defineProps({
    settings: Object,
});

const form = useForm({
    app_name: props.settings.app_name,
    app_url: props.settings.app_url,
    app_debug: props.settings.app_debug,
    is_maintenance: props.settings.is_maintenance,
});

const submit = () => {
    form.put(route('admin.general.update'), {
        preserveScroll: true,
    });
};
</script>

<template>
    <AppLayout title="Ustawienia Główne">
        <div class="py-12 bg-gray-50/50 min-h-screen px-2 sm:px-0">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <!-- Header Section -->
                <div v-if="form.is_maintenance" class="mb-8 bg-red-50 border border-red-200 rounded-2xl p-6 flex items-center gap-4">
                    <div class="w-12 h-12 bg-red-100 rounded-xl flex items-center justify-center text-red-600">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
                        </svg>
                    </div>
                    <div>
                        <h4 class="text-sm font-black text-red-900 uppercase tracking-tight">Tryb Przerwy Technicznej Aktywny</h4>
                        <p class="text-[10px] font-bold text-red-600 uppercase tracking-widest mt-1">Aplikacja jest obecnie niedostępna dla użytkowników zewnętrznych.</p>
                    </div>
                </div>

                <div class="bg-white rounded-[3rem] shadow-xl shadow-blue-900/5 border border-gray-100 p-10 mb-8">
                    <div class="flex flex-col md:flex-row md:items-center justify-between gap-8">
                        <div>
                            <div class="flex items-center gap-4 mb-2">
                                <h3 class="text-2xl font-black text-[#0A2C5C] uppercase tracking-tight">Ustawienia Główne</h3>
                            </div>
                            <p class="text-[10px] font-bold text-gray-400 uppercase tracking-widest mt-1">
                                Zarządzanie podstawowymi parametrami aplikacji i trybem konserwacji
                            </p>
                        </div>
                    </div>
                </div>

                <div class="bg-white rounded-[3rem] shadow-xl shadow-blue-900/5 border border-gray-100 p-10">
                    <form @submit.prevent="submit" class="space-y-8">
                        <!-- Application Name -->
                        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 items-start border-b border-gray-50 pb-8">
                            <div>
                                <label class="text-[10px] font-black text-[#0A2C5C] uppercase tracking-[0.2em] mb-2 block">Nazwa Aplikacji (APP_NAME)</label>
                                <p class="text-[10px] text-gray-400 font-bold uppercase tracking-widest leading-relaxed mb-4">Nazwa wyświetlana w powiadomieniach i elementach interfejsu.</p>
                            </div>
                            <div class="lg:col-span-2">
                                <TextInput
                                    v-model="form.app_name"
                                    type="text"
                                    class="w-full px-6 py-4 bg-gray-50 border-none rounded-2xl focus:ring-2 focus:ring-blue-500/20 focus:bg-white transition-all text-sm font-medium shadow-inner"
                                    placeholder="Wpisz nazwę aplikacji"
                                />
                                <InputError :message="form.errors.app_name" class="mt-2" />
                            </div>
                        </div>

                        <!-- Application URL -->
                        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 items-start border-b border-gray-50 pb-8">
                            <div>
                                <label class="text-[10px] font-black text-[#0A2C5C] uppercase tracking-[0.2em] mb-2 block">Adres URL Aplikacji (APP_URL)</label>
                                <p class="text-[10px] text-gray-400 font-bold uppercase tracking-widest leading-relaxed mb-4">Podstawowy adres URL aplikacji, używany do generowania linków.</p>
                            </div>
                            <div class="lg:col-span-2">
                                <TextInput
                                    v-model="form.app_url"
                                    type="url"
                                    class="w-full px-6 py-4 bg-gray-50 border-none rounded-2xl focus:ring-2 focus:ring-blue-500/20 focus:bg-white transition-all text-sm font-medium shadow-inner"
                                    placeholder="https://twojadomena.pl"
                                />
                                <InputError :message="form.errors.app_url" class="mt-2" />
                            </div>
                        </div>

                        <!-- Debug Mode -->
                        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 items-start border-b border-gray-50 pb-8">
                            <div>
                                <label class="text-[10px] font-black text-[#0A2C5C] uppercase tracking-[0.2em] mb-2 block">Tryb Debugowania (APP_DEBUG)</label>
                                <p class="text-[10px] text-gray-400 font-bold uppercase tracking-widest leading-relaxed mb-4">Włączenie szczegółowych komunikatów o błędach. Wyłącz na produkcji!</p>
                            </div>
                            <div class="lg:col-span-2">
                                <label class="flex items-center cursor-pointer group w-fit">
                                    <div class="relative">
                                        <Checkbox v-model:checked="form.app_debug" class="sr-only" />
                                        <div :class="form.app_debug ? 'bg-orange-500' : 'bg-gray-200'" class="block w-14 h-8 rounded-full transition-colors duration-300"></div>
                                        <div :class="form.app_debug ? 'translate-x-6' : 'translate-x-0'" class="absolute left-1 top-1 bg-white w-6 h-6 rounded-full transition-transform duration-300 shadow-sm"></div>
                                    </div>
                                    <span class="ml-4 text-[10px] font-black text-[#0A2C5C] uppercase tracking-[0.1em]">{{ form.app_debug ? 'Włączony' : 'Wyłączony' }}</span>
                                </label>
                                <InputError :message="form.errors.app_debug" class="mt-2" />
                            </div>
                        </div>

                        <!-- Maintenance Mode -->
                        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 items-start border-b border-gray-50 pb-8">
                            <div>
                                <label class="text-[10px] font-black text-[#0A2C5C] uppercase tracking-[0.2em] mb-2 block">Tryb Przerwy Technicznej</label>
                                <p class="text-[10px] text-gray-400 font-bold uppercase tracking-widest leading-relaxed mb-4">Gdy aktywny, użytkownicy zobaczą stronę informacyjną o przerwie technicznej.</p>
                            </div>
                            <div class="lg:col-span-2">
                                <label class="flex items-center cursor-pointer group w-fit">
                                    <div class="relative">
                                        <Checkbox v-model:checked="form.is_maintenance" class="sr-only" />
                                        <div :class="form.is_maintenance ? 'bg-red-500' : 'bg-gray-200'" class="block w-14 h-8 rounded-full transition-colors duration-300"></div>
                                        <div :class="form.is_maintenance ? 'translate-x-6' : 'translate-x-0'" class="absolute left-1 top-1 bg-white w-6 h-6 rounded-full transition-transform duration-300 shadow-sm"></div>
                                    </div>
                                    <span class="ml-4 text-[10px] font-black text-[#0A2C5C] uppercase tracking-[0.1em]">{{ form.is_maintenance ? 'Aktywny' : 'Nieaktywny' }}</span>
                                </label>
                                <InputError :message="form.errors.is_maintenance" class="mt-2" />
                            </div>
                        </div>

                        <div class="flex justify-end pt-4">
                            <PrimaryButton
                                :class="{ 'opacity-25': form.processing }"
                                :disabled="form.processing"
                                class="px-12 py-5 bg-[#0A2C5C] hover:bg-[#0D356D] text-white rounded-[2rem] font-black text-[10px] uppercase tracking-[0.2em] transition-all shadow-xl shadow-blue-900/10 active:scale-95"
                            >
                                Zapisz ustawienia
                            </PrimaryButton>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </AppLayout>
</template>
