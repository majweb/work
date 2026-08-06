<script setup>
import { Head, Link, router } from '@inertiajs/vue3'
import Pagination from '@/Components/Pagination.vue'

const props = defineProps({
    foundation: Object,
    transactions: Object
})

const logout = () => {
    router.post(route('foundation.logout'))
}

const formatDate = (dateString) => {
    return new Date(dateString).toLocaleDateString('pl-PL', {
        year: 'numeric',
        month: 'long',
        day: 'numeric',
        hour: '2-digit',
        minute: '2-digit'
    })
}
</script>

<template>
    <Head title="Transakcje Fundacji" />

    <div class="min-h-screen bg-gray-50 flex flex-col">
        <!-- TOP NAV -->
        <nav class="bg-white border-b border-gray-100 py-4 px-8 flex justify-between items-center sticky top-0 z-50">
            <div class="flex items-center gap-8">
                <Link href="/" class="flex-shrink-0">
                    <img src="/images/logo-horizontal.png" class="h-6 w-auto" alt="logo">
                </Link>
                <div class="hidden md:flex items-center gap-6">
                    <Link :href="route('foundation.dashboard')" class="text-[10px] font-black text-gray-400 uppercase tracking-widest hover:text-[#0A2C5C] transition-colors">
                        Dashboard
                    </Link>
                    <Link :href="route('foundation.transactions')" class="text-[10px] font-black text-[#0A2C5C] uppercase tracking-widest border-b-2 border-blue-500 pb-1">
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
                <div class="mb-12 flex flex-col md:flex-row md:items-end justify-between gap-6">
                    <div>
                        <div class="flex items-center gap-3 mb-4">
                            <span class="w-8 h-1 bg-blue-500 rounded-full"></span>
                            <h1 class="text-2xl font-black text-[#0A2C5C] uppercase tracking-tighter">Historia Transakcji</h1>
                        </div>
                        <p class="text-gray-400 text-sm font-bold max-w-2xl">
                            Poniżej znajduje się lista wszystkich wpłat przekazanych na rzecz Twojej fundacji przez partnerów biznesowych.
                        </p>
                    </div>
                </div>

                <!-- TABLE CARD -->
                <div class="bg-white rounded-[2.5rem] shadow-xl shadow-blue-900/5 border border-white overflow-hidden">
                    <div class="overflow-x-auto">
                        <table class="w-full text-left border-collapse">
                            <thead>
                                <tr class="bg-gray-50/50">
                                    <th class="px-8 py-6 text-[10px] font-black text-gray-400 uppercase tracking-widest">Data</th>
                                    <th class="px-8 py-6 text-[10px] font-black text-gray-400 uppercase tracking-widest">Firma / Użytkownik</th>
                                    <th class="px-8 py-6 text-[10px] font-black text-gray-400 uppercase tracking-widest">Typ</th>
                                    <th class="px-8 py-6 text-[10px] font-black text-gray-400 uppercase tracking-widest text-right">Kwota wsparcia</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-50">
                                <tr v-for="transaction in transactions.data" :key="transaction.id" class="hover:bg-blue-50/30 transition-colors group">
                                    <td class="px-8 py-6">
                                        <div class="text-[#0A2C5C] font-bold text-xs">{{ formatDate(transaction.created_at) }}</div>
                                        <div class="text-[8px] text-gray-400 font-black uppercase tracking-widest mt-1">ID: #{{ transaction.id }}</div>
                                    </td>
                                    <td class="px-8 py-6">
                                        <div class="flex items-center gap-3">
                                            <div class="w-8 h-8 bg-blue-100 rounded-full flex items-center justify-center text-blue-600 font-black text-[10px]">
                                                {{ transaction.user?.name?.charAt(0) || 'U' }}
                                            </div>
                                            <div>
                                                <div class="text-[#0A2C5C] font-bold text-xs">{{ transaction.user?.name || 'Użytkownik anonimowy' }}</div>
                                                <div class="text-[8px] text-gray-400 font-black uppercase tracking-widest mt-1">{{ transaction.user?.email }}</div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-8 py-6">
                                        <span class="px-3 py-1 bg-green-50 text-green-600 text-[8px] font-black uppercase tracking-widest rounded-full border border-green-100">
                                            {{ transaction.type || 'Darowizna' }}
                                        </span>
                                    </td>
                                    <td class="px-8 py-6 text-right">
                                        <div class="text-[#0A2C5C] font-black text-sm">
                                            {{ parseFloat(transaction.support_amount || 0).toLocaleString(undefined, { minimumFractionDigits: 2, maximumFractionDigits: 2 }) }} {{ transaction.currency || 'PLN' }}
                                        </div>
                                    </td>
                                </tr>
                                <tr v-if="transactions.data.length === 0">
                                    <td colspan="4" class="px-8 py-20 text-center">
                                        <div class="inline-flex flex-col items-center">
                                            <div class="w-16 h-16 bg-gray-50 rounded-full flex items-center justify-center text-gray-300 mb-4">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                                                </svg>
                                            </div>
                                            <p class="text-gray-400 font-bold text-sm">Brak zarejestrowanych transakcji.</p>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <!-- PAGINATION -->
                    <div v-if="transactions.links.length > 3" class="px-8 py-6 bg-gray-50/50 border-t border-gray-50">
                        <Pagination :links="transactions.links" />
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
