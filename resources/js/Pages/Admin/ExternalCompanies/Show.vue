<script setup>
import { Link, router } from '@inertiajs/vue3';
import AppLayout from '@/Layouts/AppLayout.vue';

const props = defineProps({
    externalCompany: Object,
});

const formatDate = (dateString) => {
    return dateString; // Already formatted in controller
};
</script>

<template>
    <AppLayout title="Podgląd firmy zewnętrznej">
        <div class="py-12 bg-gray-50/50 min-h-screen">
            <div class="max-w-[1600px] mx-auto sm:px-6 lg:px-8">

                <!-- Breadcrumbs / Back -->
                <div class="mb-8 flex items-center justify-between px-4">
                    <Link
                        :href="route('admin.external-companies.index')"
                        class="inline-flex items-center gap-2 text-[10px] font-black text-gray-400 uppercase tracking-[0.2em] hover:text-[#0A2C5C] transition-colors"
                    >
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor" class="w-3 h-3">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5L3 12m0 0l7.5-7.5M3 12h18" />
                        </svg>
                        Powrót do listy
                    </Link>

                    <Link
                        :href="route('admin.external-companies.edit', externalCompany.id)"
                        class="px-8 py-3 bg-white border border-gray-100 rounded-2xl font-black text-[10px] text-gray-600 uppercase tracking-widest hover:bg-gray-50 transition shadow-sm"
                    >
                        Edytuj dane
                    </Link>
                </div>

                <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                    <!-- Left Column: Main Info -->
                    <div class="lg:col-span-2 space-y-8">
                        <div class="bg-white rounded-[3rem] shadow-xl shadow-blue-900/5 border border-gray-100 p-10">
                            <div class="flex items-start gap-8 mb-10">
                                <div class="w-24 h-24 bg-gray-100 rounded-[2rem] flex items-center justify-center font-black text-[#0A2C5C] text-3xl shadow-inner">
                                    {{ externalCompany.name.substring(0, 1).toUpperCase() }}
                                </div>
                                <div class="flex-1 pt-2">
                                    <div class="flex items-center gap-3 mb-2">
                                        <h1 class="text-3xl font-black text-[#0A2C5C] uppercase tracking-tight">{{ externalCompany.name }}</h1>
                                        <span class="px-3 py-1 bg-blue-50 text-[10px] font-black text-[#0A2C5C] rounded-lg uppercase tracking-widest">
                                            {{ externalCompany.abbreviation || 'Brak skrótu' }}
                                        </span>
                                    </div>
                                    <p class="text-xs font-bold text-gray-400 uppercase tracking-widest">{{ externalCompany.email }}</p>
                                </div>
                            </div>

                            <div class="grid grid-cols-2 gap-10 py-10 border-y border-gray-50">
                                <div>
                                    <h4 class="text-[10px] font-black text-gray-300 uppercase tracking-widest mb-4">Informacje podstawowe</h4>
                                    <div class="space-y-4">
                                        <div>
                                            <p class="text-[9px] font-black text-gray-400 uppercase tracking-widest mb-1">ID Systemowe</p>
                                            <p class="text-xs font-bold text-gray-600">#{{ externalCompany.id }}</p>
                                        </div>
                                        <div>
                                            <p class="text-[9px] font-black text-gray-400 uppercase tracking-widest mb-1">Data dodania</p>
                                            <p class="text-xs font-bold text-gray-600">{{ externalCompany.created_at }}</p>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <h4 class="text-[10px] font-black text-gray-300 uppercase tracking-widest mb-4">Statystyki</h4>
                                    <div class="space-y-4">
                                        <div>
                                            <p class="text-[9px] font-black text-gray-400 uppercase tracking-widest mb-1">Liczba ofert pracy</p>
                                            <p class="text-xs font-bold text-[#0A2C5C]">{{ externalCompany.projects_count }} projektów</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="mt-10">
                                <h4 class="text-[10px] font-black text-gray-300 uppercase tracking-widest mb-4">Notatka / Opis</h4>
                                <div class="bg-gray-50 rounded-3xl p-8 border border-gray-100 min-h-[150px]">
                                    <p class="text-xs font-bold text-gray-500 leading-relaxed whitespace-pre-wrap">
                                        {{ externalCompany.note || 'Brak dodatkowych notatek dla tej firmy.' }}
                                    </p>
                                </div>
                            </div>
                        </div>

                    </div>

                    <!-- Right Column: Agency Info -->
                    <div class="space-y-8">
                        <div class="bg-[#0A2C5C] rounded-[3rem] shadow-xl shadow-blue-900/20 p-10 text-white">
                            <h3 class="text-sm font-black uppercase tracking-[0.2em] mb-8 text-blue-400">Agencja (Właściciel)</h3>

                            <div v-if="externalCompany.agency" class="space-y-8">
                                <div class="flex items-center gap-4">
                                    <img
                                        :src="externalCompany.agency.profile_photo_url"
                                        :alt="externalCompany.agency.name"
                                        class="w-16 h-16 rounded-2xl object-cover border-2 border-white/10"
                                    >
                                    <div>
                                        <h4 class="text-lg font-black uppercase tracking-tight leading-tight">{{ externalCompany.agency.name }}</h4>
                                        <p class="text-[10px] font-bold text-blue-300 uppercase tracking-widest mt-1">{{ externalCompany.agency.email }}</p>
                                    </div>
                                </div>

                                <div class="space-y-4 pt-8 border-t border-white/10">
                                    <Link
                                        :href="route('admin.firms.show', externalCompany.agency.id)"
                                        class="flex items-center justify-center w-full py-4 bg-white/10 hover:bg-white/20 rounded-2xl text-[10px] font-black uppercase tracking-widest transition-all"
                                    >
                                        Profil agencji
                                    </Link>
                                </div>
                            </div>
                            <div v-else class="text-center py-4">
                                <p class="text-[10px] font-black text-blue-300/50 uppercase tracking-widest">Brak powiązanej agencji</p>
                            </div>
                        </div>

                        <!-- Quick Actions -->
                        <div class="bg-white rounded-[3rem] shadow-xl shadow-blue-900/5 border border-gray-100 p-10">
                            <h3 class="text-sm font-black text-[#0A2C5C] uppercase tracking-tight mb-8">Szybkie akcje</h3>
                            <div class="space-y-3">
                                <a
                                    :href="`mailto:${externalCompany.email}`"
                                    class="flex items-center gap-3 w-full px-6 py-4 bg-gray-50 hover:bg-[#0A2C5C] text-gray-600 hover:text-white rounded-2xl transition-all group"
                                >
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-4 h-4">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 0 1-2.25 2.25h-15a2.25 2.25 0 0 1-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25m19.5 0v.243a2.25 2.25 0 0 1-1.07 1.916l-7.5 4.615a2.25 2.25 0 0 1-2.36 0L3.32 8.91a2.25 2.25 0 0 1-1.07-1.916V6.75" />
                                    </svg>
                                    <span class="text-[10px] font-black uppercase tracking-widest">Wyślij wiadomość</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </AppLayout>
</template>
