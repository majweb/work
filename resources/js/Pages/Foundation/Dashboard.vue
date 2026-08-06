<script setup>
import { Head, Link, router } from '@inertiajs/vue3'
import { ref } from 'vue'
import AppLayout from '@/Layouts/AppLayout.vue'
import __ from "@/lang.js";

const props = defineProps({
    foundation: Object,
    totalSupport: Number,
    supportingFirmsCount: Number,
})

const copied = ref(false)

const copyEmail = () => {
    navigator.clipboard.writeText('partners@work4you.global').then(() => {
        copied.value = true
        setTimeout(() => {
            copied.value = false
        }, 2000)
    })
}

const logout = () => {
    router.post(route('foundation.logout'))
}
</script>

<template>
    <Head title="Dashboard Fundacji" />

    <div class="min-h-screen bg-gray-50 flex flex-col">
        <!-- TOP NAV -->
        <nav class="bg-white border-b border-gray-100 py-4 px-8 flex justify-between items-center sticky top-0 z-50">
            <div class="flex items-center gap-8">
                <Link href="/" class="flex-shrink-0">
                    <img src="/images/logo-horizontal.png" class="h-6 w-auto" alt="logo">
                </Link>
                <div class="hidden md:flex items-center gap-6">
                    <Link :href="route('foundation.dashboard')" class="text-[10px] font-black text-[#0A2C5C] uppercase tracking-widest border-b-2 border-blue-500 pb-1">
                        Dashboard
                    </Link>
                    <Link :href="route('foundation.transactions')" class="text-[10px] font-black text-gray-400 uppercase tracking-widest hover:text-[#0A2C5C] transition-colors">
                        Historia Transakcji
                    </Link>
                </div>
            </div>

            <div class="flex items-center gap-6">
                <div class="text-right hidden sm:block">
                    <p class="text-[10px] font-black text-[#0A2C5C] uppercase tracking-widest">{{ foundation?.name }}</p>
                    <p class="text-[8px] font-bold text-gray-400 uppercase tracking-widest">Partner Fundacji</p>
                </div>
                <button @click="logout" class="bg-red-50 hover:bg-red-100 text-red-500 p-3 rounded-2xl transition-all duration-300 group">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M3 3a1 1 0 00-1 1v12a1 1 0 102 0V4a1 1 0 00-1-1zm10.293 9.293a1 1 0 001.414 1.414l3-3a1 1 0 000-1.414l-3-3a1 1 0 10-1.414 1.414L14.586 9H7a1 1 0 100 2h7.586l-1.293 1.293z" clip-rule="evenodd" />
                    </svg>
                </button>
            </div>
        </nav>

        <!-- CONTENT -->
        <main class="flex-grow p-8">
            <div class="max-w-7xl mx-auto">
                <div class="mb-12">
                    <div class="flex items-center gap-3 mb-4">
                        <span class="w-8 h-1 bg-blue-500 rounded-full"></span>
                        <h1 class="text-2xl font-black text-[#0A2C5C] uppercase tracking-tighter">Witaj, {{ foundation?.name }}!</h1>
                    </div>
                    <p class="text-gray-400 text-sm font-bold max-w-2xl">
                        Dziękujemy za partnerstwo. W tym panelu możesz monitorować wpływ środków finansowych przekazanych przez firmy wspierające Twoją fundację.
                    </p>
                </div>

                <!-- STATS CARDS -->
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-12">
                    <div class="bg-white p-8 rounded-[2.5rem] shadow-xl shadow-blue-900/5 border border-white group hover:border-blue-100 transition-all duration-300">
                        <div class="flex justify-between items-start mb-6">
                            <div class="p-4 bg-blue-50 rounded-2xl text-blue-500">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </div>
                            <span class="text-[8px] font-black text-blue-500 uppercase tracking-widest bg-blue-50 px-3 py-1 rounded-full">Suma wsparcia</span>
                        </div>
                        <h3 class="text-3xl font-black text-[#0A2C5C] mb-2 tracking-tighter">
                            {{ parseFloat(totalSupport || 0).toLocaleString(undefined, { minimumFractionDigits: 2, maximumFractionDigits: 2 }) }} $
                        </h3>
                        <p class="text-gray-400 text-[10px] font-bold uppercase tracking-widest">50% wartości wsparcia z usług</p>
                    </div>

                    <div class="bg-white p-8 rounded-[2.5rem] shadow-xl shadow-blue-900/5 border border-white group hover:border-cyan-100 transition-all duration-300">
                        <div class="flex justify-between items-start mb-6">
                            <div class="p-4 bg-cyan-50 rounded-2xl text-cyan-500">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                                </svg>
                            </div>
                            <span class="text-[8px] font-black text-cyan-500 uppercase tracking-widest bg-cyan-50 px-3 py-1 rounded-full">Partnerzy</span>
                        </div>
                        <h3 class="text-3xl font-black text-[#0A2C5C] mb-2 tracking-tighter">{{ supportingFirmsCount || 0 }}</h3>
                        <p class="text-gray-400 text-[10px] font-bold uppercase tracking-widest">Liczba firm wspierających</p>
                    </div>

                    <div class="bg-gradient-to-br from-[#0A2C5C] to-blue-900 p-8 rounded-[2.5rem] shadow-xl shadow-blue-900/20 text-white relative overflow-hidden group">
                        <div class="absolute top-0 right-0 w-32 h-32 bg-white/10 rounded-full blur-3xl -mr-16 -mt-16 transition-transform group-hover:scale-150 duration-700"></div>
                        <div class="relative z-10">
                            <div class="p-4 bg-white/10 rounded-2xl w-fit mb-6">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                                </svg>
                            </div>
                            <h3 class="text-xl font-black uppercase tracking-tighter mb-4">Zobacz szczegóły transakcji</h3>
                            <Link :href="route('foundation.transactions')" class="inline-flex items-center gap-2 bg-white text-[#0A2C5C] px-6 py-3 rounded-xl font-black text-[10px] uppercase tracking-widest hover:bg-blue-50 transition-colors">
                                Przejdź teraz
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </Link>
                        </div>
                    </div>
                </div>

                <!-- HELP SECTION -->
                <div class="bg-white p-8 rounded-[2.5rem] border border-gray-100 flex flex-col md:flex-row items-center gap-8">
                    <div class="w-16 h-16 bg-blue-50 rounded-full flex items-center justify-center text-blue-500 shrink-0">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                    <div class="text-center md:text-left">
                        <h4 class="text-[#0A2C5C] font-black uppercase tracking-widest text-xs mb-2">Twój kod rejestracyjny</h4>
                        <p class="text-gray-400 text-[10px] font-bold uppercase tracking-[0.2em] bg-gray-50 px-4 py-2 rounded-lg border border-gray-100 inline-block">
                            {{ foundation?.registration_code }}
                        </p>
                    </div>
                    <div class="md:ml-auto text-center md:text-right flex flex-col items-center md:items-end">
                        <p class="text-[10px] font-bold text-gray-400 mb-2">Potrzebujesz pomocy?</p>
                        <div class="flex items-center gap-3">
                            <a href="mailto:partners@work4you.global" class="text-[#0A2C5C] font-black text-xs uppercase tracking-widest hover:underline transition-all">partners@work4you.global</a>
                            <button @click="copyEmail" class="p-2 bg-gray-50 hover:bg-blue-50 text-[#0A2C5C] rounded-lg transition-colors group relative" title="Kopiuj email">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 5H6a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2v-1M8 5a2 2 0 002 2h2a2 2 0 002-2M8 5a2 2 0 012-2h2a2 2 0 012 2m0 0h2a2 2 0 012 2v3m2 4H10m0 0l3-3m-3 3l3 3" />
                                </svg>
                                <span v-if="copied" class="absolute -top-8 left-1/2 -translate-x-1/2 bg-[#0A2C5C] text-white text-[8px] font-black py-1 px-2 rounded uppercase tracking-widest whitespace-nowrap animate-bounce">
                                    Skopiowano!
                                </span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </main>

        <!-- FOOTER -->
        <footer class="py-8 px-8 text-center">
            <p class="text-[8px] font-black text-gray-400 uppercase tracking-[0.4em]">© 2024 work.pl — Wszelkie prawa zastrzeżone</p>
        </footer>
    </div>
</template>
