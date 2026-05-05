<script setup>
import AppLayout from "@/Layouts/AppLayout.vue";
import { Link, useForm } from "@inertiajs/vue3";

const props = defineProps({
    user: Object,
});

const form = useForm({
    name: props.user.name,
    email: props.user.email,
});

const submit = () => {
    form.put(route('admin.users.recruits.update', props.user.id));
};
</script>

<template>
    <AppLayout :title="'Edycja rekrutera: ' + user.name">
        <div class="py-12 bg-gray-50/50 min-h-screen px-2 sm:px-0">
            <div class="max-w-[1600px] mx-auto px-4 sm:px-6 lg:px-8">
                <!-- Header -->
                <div class="flex items-center justify-between mb-12 border-b border-gray-100 pb-8">
                    <div class="flex items-center gap-8">
                        <Link
                            :href="route('admin.users.recruits.index')"
                            class="w-14 h-14 bg-white rounded-3xl flex items-center justify-center shadow-xl shadow-blue-900/5 border border-gray-100 text-[#0A2C5C] hover:bg-gray-50 transition-all active:scale-95 group"
                        >
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor" class="w-6 h-6 group-hover:-translate-x-1 transition-transform">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5 3 12m0 0 7.5-7.5M3 12h18" />
                            </svg>
                        </Link>
                        <div>
                            <div class="flex items-center gap-3 mb-1">
                                <span class="px-3 py-1 bg-blue-50 text-blue-500 rounded-lg text-[10px] font-black uppercase tracking-widest">Zarządzanie kontem rekrutera</span>
                            </div>
                            <h1 class="text-4xl font-black text-[#0A2C5C] tracking-tight">{{ user.name }}</h1>
                        </div>
                    </div>
                </div>

                <div class="mt-8">
                    <form @submit.prevent="submit" class="space-y-8">
                        <div class="grid lg:grid-cols-2 gap-8 items-start">
                            <!-- Basic Info Card -->
                            <div class="bg-white rounded-3xl shadow-xl shadow-blue-900/5 border border-gray-100 p-10 transition-all hover:shadow-blue-900/10 h-full">
                                <div class="flex items-center gap-4 mb-10 border-b border-gray-50 pb-6">
                                    <div class="w-12 h-12 bg-blue-50 rounded-2xl flex items-center justify-center text-blue-500 shadow-sm border border-blue-100">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-5 h-5">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 19.128a9.38 9.38 0 0 0 2.625.372 9.337 9.337 0 0 0 4.121-.952 4.125 4.125 0 0 0-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 0 1 8.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0 1 11.964-3.07M12 6.375a3.375 3.375 0 1 1-6.75 0 3.375 3.375 0 0 1 6.75 0Zm8.25 2.25a2.625 2.625 0 1 1-5.25 0 2.625 2.625 0 0 1 5.25 0Z" />
                                        </svg>
                                    </div>
                                    <div>
                                        <h2 class="text-xl font-black text-[#0A2C5C] uppercase tracking-tight">Dane podstawowe</h2>
                                        <p class="text-[10px] font-bold text-gray-400 uppercase tracking-widest mt-1">Podstawowe informacje o koncie</p>
                                    </div>
                                </div>

                                <div class="grid gap-8">
                                    <!-- Name -->
                                    <div class="space-y-3">
                                        <label class="block text-[10px] font-black text-[#0A2C5C] uppercase tracking-widest ml-1">Nazwisko i imię</label>
                                        <input
                                            v-model="form.name"
                                            type="text"
                                            class="w-full px-6 py-4 bg-gray-50/50 border border-gray-100 rounded-2xl focus:ring-4 focus:ring-blue-500/10 focus:border-blue-500 focus:bg-white transition-all font-bold text-[#0A2C5C]"
                                            placeholder="Wprowadź imię i nazwisko..."
                                        />
                                        <div v-if="form.errors.name" class="text-red-500 text-[10px] font-black uppercase tracking-widest mt-1 ml-1 animate-pulse">{{ form.errors.name }}</div>
                                    </div>

                                    <!-- Email -->
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

                                </div>
                            </div>

                            <!-- Statistics & Affiliation Card -->
                            <div class="bg-white rounded-3xl shadow-xl shadow-blue-900/5 border border-gray-100 p-10 transition-all hover:shadow-blue-900/10 h-full">
                                <div class="flex items-center gap-4 mb-10 border-b border-gray-50 pb-6">
                                    <div class="w-12 h-12 bg-purple-50 rounded-2xl flex items-center justify-center text-purple-500 shadow-sm border border-purple-100">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-5 h-5">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 3v11.25A2.25 2.25 0 0 0 6 16.5h2.25M3.75 3h-1.5m1.5 0h16.5m0 0h1.5m-1.5 0v11.25A2.25 2.25 0 0 1 18 16.5h-2.25m-7.5 0h7.5m-7.5 0-1 3m8.5-3 1 3m0 0h.5m-.5 0h-10.5m0 0h-.5" />
                                        </svg>
                                    </div>
                                    <div>
                                        <h2 class="text-xl font-black text-[#0A2C5C] uppercase tracking-tight">Aktywność i Przynależność</h2>
                                        <p class="text-[10px] font-bold text-gray-400 uppercase tracking-widest mt-1">Dodatkowe informacje o koncie (tylko do odczytu)</p>
                                    </div>
                                </div>

                                <div class="grid md:grid-cols-2 gap-8">
                                    <!-- Firm -->
                                    <div class="space-y-3">
                                        <label class="block text-[10px] font-black text-[#0A2C5C] uppercase tracking-widest ml-1">Firma / Agencja</label>
                                        <div class="w-full px-6 py-4 bg-gray-50/30 border border-gray-100 rounded-2xl font-bold text-[#0A2C5C] flex items-center gap-3">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-4 h-4 text-blue-500">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 21h19.5m-18-18v18m10.5-18v18m6-13.5V21M6.75 6.75h.75m-.75 3h.75m-.75 3h.75m3-6h.75m-.75 3h.75m-.75 3h.75M6.75 21v-3.375c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21M3 3h12m-.75 4.5H21m-3.75 3.75h.008v.008h-.008v-.008Zm0 3h.008v.008h-.008v-.008Z" />
                                            </svg>
                                            {{ user.user?.firm?.name || user.user?.name || '-' }}
                                        </div>
                                    </div>

                                    <!-- Is Main Recruiter -->
                                    <div class="space-y-3">
                                        <label class="block text-[10px] font-black text-[#0A2C5C] uppercase tracking-widest ml-1">Typ rekrutera</label>
                                        <div class="w-full px-6 py-4 bg-gray-50/30 border border-gray-100 rounded-2xl font-bold text-[#0A2C5C] flex items-center gap-3">
                                            <div v-if="user.roles?.some(r => r.name === 'firm') && user.roles?.some(r => r.name === 'recruit')" class="flex items-center gap-2">
                                                <div class="w-2 h-2 rounded-full bg-orange-500 shadow-[0_0_8_rgba(249,115,22,0.5)]"></div>
                                                <span class="text-orange-600">Główny rekruter (Właściciel)</span>
                                            </div>
                                            <div v-else class="flex items-center gap-2">
                                                <div class="w-2 h-2 rounded-full bg-blue-500"></div>
                                                <span>Standardowy rekruter</span>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Projects Count -->
                                    <div class="space-y-3">
                                        <label class="block text-[10px] font-black text-[#0A2C5C] uppercase tracking-widest ml-1">Liczba projektów</label>
                                        <div class="w-full px-6 py-4 bg-gray-50/30 border border-gray-100 rounded-2xl font-bold text-[#0A2C5C] flex items-center gap-3">
                                            <div class="w-2 h-2 rounded-full bg-green-500 shadow-[0_0_8_rgba(34,197,94,0.5)]"></div>
                                            {{ user.projects_recruits_count || 0 }}
                                        </div>
                                    </div>

                                    <!-- Applications Count -->
                                    <div class="space-y-3">
                                        <label class="block text-[10px] font-black text-[#0A2C5C] uppercase tracking-widest ml-1">Liczba aplikacji</label>
                                        <div class="w-full px-6 py-4 bg-gray-50/30 border border-gray-100 rounded-2xl font-bold text-[#0A2C5C] flex items-center gap-3">
                                            <div class="w-2 h-2 rounded-full bg-blue-500 shadow-[0_0_8_rgba(59,130,246,0.5)]"></div>
                                            {{ user.applications_recruits_count || 0 }}
                                        </div>
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
