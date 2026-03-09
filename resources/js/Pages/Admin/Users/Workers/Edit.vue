<script setup>
import AppLayout from "@/Layouts/AppLayout.vue";
import { Link, useForm } from "@inertiajs/vue3";

const props = defineProps({
    user: Object,
});

const form = useForm({
    name: props.user.name,
    surname: props.user.worker_detail?.surname || '',
    email: props.user.email,
    contact_phone: props.user.worker_detail?.contact_phone || '',
});

const submit = () => {
    form.put(route('admin.workers.update', props.user.id));
};
</script>

<template>
    <AppLayout :title="'Edycja pracownika: ' + user.name">
        <div class="py-12 bg-gray-50/50 min-h-screen">
            <div class="max-w-[1600px] mx-auto px-4 sm:px-6 lg:px-8">
                <!-- Header -->
                <div class="flex items-center justify-between mb-12 border-b border-gray-100 pb-8">
                    <div class="flex items-center gap-8">
                        <Link
                            :href="route('admin.workers.index')"
                            class="w-14 h-14 bg-white rounded-3xl flex items-center justify-center shadow-xl shadow-blue-900/5 border border-gray-100 text-[#0A2C5C] hover:bg-gray-50 transition-all active:scale-95 group"
                        >
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor" class="w-6 h-6 group-hover:-translate-x-1 transition-transform">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5 3 12m0 0 7.5-7.5M3 12h18" />
                            </svg>
                        </Link>
                        <div>
                            <div class="flex items-center gap-3 mb-1">
                                <span class="px-3 py-1 bg-blue-50 text-blue-500 rounded-lg text-[10px] font-black uppercase tracking-widest">Zarządzanie kontem pracownika</span>
                            </div>
                            <h1 class="text-4xl font-black text-[#0A2C5C] tracking-tight">{{ user.name }}</h1>
                        </div>
                    </div>
                </div>

                <div class="max-w-3xl">
                    <form @submit.prevent="submit" class="space-y-8">
                        <!-- Basic Info Card -->
                        <div class="bg-white rounded-3xl shadow-xl shadow-blue-900/5 border border-gray-100 p-10 transition-all hover:shadow-blue-900/10">
                            <div class="flex items-center gap-4 mb-10 border-b border-gray-50 pb-6">
                                <div class="w-12 h-12 bg-blue-50 rounded-2xl flex items-center justify-center text-blue-500 shadow-sm border border-blue-100">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-5 h-5">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" />
                                    </svg>
                                </div>
                                <div>
                                    <h2 class="text-xl font-black text-[#0A2C5C] uppercase tracking-tight">Dane podstawowe</h2>
                                    <p class="text-[10px] font-bold text-gray-400 uppercase tracking-widest mt-1">Podstawowe informacje o koncie</p>
                                </div>
                            </div>

                            <div class="grid gap-8">
                                <!-- Name & Surname -->
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                                    <div class="space-y-3">
                                        <label class="block text-[10px] font-black text-[#0A2C5C] uppercase tracking-widest ml-1">Imię</label>
                                        <input
                                            v-model="form.name"
                                            type="text"
                                            class="w-full px-6 py-4 bg-gray-50/50 border border-gray-100 rounded-2xl focus:ring-4 focus:ring-blue-500/10 focus:border-blue-500 focus:bg-white transition-all font-bold text-[#0A2C5C]"
                                            placeholder="Wprowadź imię..."
                                        />
                                        <div v-if="form.errors.name" class="text-red-500 text-[10px] font-black uppercase tracking-widest mt-1 ml-1 animate-pulse">{{ form.errors.name }}</div>
                                    </div>

                                    <div class="space-y-3">
                                        <label class="block text-[10px] font-black text-[#0A2C5C] uppercase tracking-widest ml-1">Nazwisko</label>
                                        <input
                                            v-model="form.surname"
                                            type="text"
                                            class="w-full px-6 py-4 bg-gray-50/50 border border-gray-100 rounded-2xl focus:ring-4 focus:ring-blue-500/10 focus:border-blue-500 focus:bg-white transition-all font-bold text-[#0A2C5C]"
                                            placeholder="Wprowadź nazwisko..."
                                        />
                                        <div v-if="form.errors.surname" class="text-red-500 text-[10px] font-black uppercase tracking-widest mt-1 ml-1 animate-pulse">{{ form.errors.surname }}</div>
                                    </div>
                                </div>

                                <!-- Email & Phone -->
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                                    <div class="space-y-3">
                                        <label class="block text-[10px] font-black text-[#0A2C5C] uppercase tracking-widest ml-1">Adres e-mail</label>
                                        <input
                                            v-model="form.email"
                                            type="email"
                                            class="w-full px-6 py-4 bg-gray-50/50 border border-gray-100 rounded-2xl focus:ring-4 focus:ring-blue-500/10 focus:border-blue-500 focus:bg-white transition-all font-bold text-[#0A2C5C]"
                                            placeholder="Wprowadź adres e-mail..."
                                        />
                                        <div v-if="form.errors.email" class="text-red-500 text-[10px] font-black uppercase tracking-widest mt-1 ml-1 animate-pulse">{{ form.errors.email }}</div>
                                    </div>

                                    <div class="space-y-3">
                                        <label class="block text-[10px] font-black text-[#0A2C5C] uppercase tracking-widest ml-1">Telefon kontaktowy</label>
                                        <input
                                            v-model="form.contact_phone"
                                            type="text"
                                            class="w-full px-6 py-4 bg-gray-50/50 border border-gray-100 rounded-2xl focus:ring-4 focus:ring-blue-500/10 focus:border-blue-500 focus:bg-white transition-all font-bold text-[#0A2C5C]"
                                            placeholder="Wprowadź numer telefonu..."
                                        />
                                        <div v-if="form.errors.contact_phone" class="text-red-500 text-[10px] font-black uppercase tracking-widest mt-1 ml-1 animate-pulse">{{ form.errors.contact_phone }}</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Footer Actions -->
                        <div class="flex items-center justify-between pt-6 border-t border-gray-100">
                            <div class="flex items-center gap-2 text-gray-400">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-4 h-4">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m9-.75a9 9 0 1 1-18 0 9 9 0 0 1 18 0Zm-9 3.75h.008v.008H12v-.008Z" />
                                </svg>
                                <span class="text-[10px] font-black uppercase tracking-widest">Wymagane pola oznaczone automatycznie</span>
                            </div>
                            <button
                                type="submit"
                                :disabled="form.processing"
                                class="px-12 py-5 bg-[#0A2C5C] hover:bg-blue-900 text-white rounded-2xl font-black uppercase tracking-[0.2em] text-xs shadow-xl shadow-blue-900/20 transition-all active:scale-95 disabled:opacity-50 flex items-center gap-3"
                            >
                                <svg v-if="form.processing" class="animate-spin h-4 w-4 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                    <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                                    <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                                </svg>
                                <span v-if="!form.processing">Zapisz zmiany</span>
                                <span v-else>Przetwarzanie...</span>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </AppLayout>
</template>
