<template>
    <div class="max-w-[70vw] mx-auto sm:px-6 lg:px-8">
    <div class="space-y-8">
        <!-- Pasek kart statystyk -->
        <div v-if="statsAvailable" class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-5 gap-8">
            <div
                v-for="card in statCards"
                :key="card.key"
                class="relative overflow-hidden rounded-[3rem] bg-[#0A2C5C] text-white shadow-xl shadow-blue-950/20 flex flex-col group transition-all border border-white/5"
            >
                <div class="p-8 flex-1 text-center">
                    <p class="text-[10px] font-black uppercase tracking-widest text-white/30 mb-4">{{ card.label }}</p>
                    <p class="text-4xl font-black tracking-tight">{{ card.key === 'sales' ? '$' : '' }}{{ card.value }}</p>
                </div>

                <!-- Trend -->
                <div class="px-8 pb-8">
                    <div class="flex items-center justify-center">
                        <div class="flex flex-col items-center">
                            <div class="flex items-center gap-2 font-black text-xl" :class="card.trend === 'up' ? 'text-blue-400' : 'text-red-400'">
                                <svg v-if="card.trend === 'up'" class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="4"><path stroke-linecap="round" stroke-linejoin="round" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path></svg>
                                <svg v-else class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="4"><path stroke-linecap="round" stroke-linejoin="round" d="M13 17h8m0 0v-8m0 8l-8-8-4 4-6-6"></path></svg>
                                {{ card.diff > 0 ? '+' : '' }}{{ card.diff }}
                            </div>
                            <p class="text-[8px] uppercase font-black text-white/20 tracking-widest mt-2 text-center">
                                W STOSUNKU DO POPRZEDNIEGO TYGODNIA
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
            <!-- Lewa kolumna: Kolejka / Pytania oczekujące -->
            <div class="lg:col-span-2 space-y-8">
                <!-- Sekcja: Kolejka -->
                <div class="rounded-[3rem] bg-white shadow-xl shadow-blue-900/5 border border-gray-100 overflow-hidden">
                    <div class="px-10 py-8 border-b border-gray-50 flex items-center justify-between bg-gradient-to-r from-white to-gray-50/30">
                        <div>
                            <h3 class="text-2xl font-black text-[#0A2C5C] uppercase tracking-tight mb-1">Kolejka oczekująca</h3>
                            <p class="text-[10px] font-bold text-gray-400 uppercase tracking-widest">Zarządzaj oczekującymi treściami</p>
                        </div>
                    </div>
                    <div class="p-10">
                        <div v-if="!isQueueEmpty">
                            <!-- Główne elementy kolejki: Pytania, Banery, Artykuły -->
                            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-10">
                                <!-- Pytania oczekujące na akceptację -->
                                <div class="flex flex-col justify-between p-8 rounded-[2.5rem] border border-gray-100 bg-gray-50/50 hover:bg-white hover:shadow-xl hover:shadow-blue-900/5 transition-all group relative overflow-hidden">
                                    <div class="flex items-start justify-between mb-6 relative">
                                        <div class="h-12 w-12 rounded-xl bg-[#0A2C5C] flex items-center justify-center shadow-lg shadow-blue-900/10 transition-all">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor" class="w-6 h-6 text-white">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M9.879 7.519c1.171-1.025 3.071-1.025 4.242 0 1.172 1.025 1.172 2.687 0 3.712-.203.179-.43.326-.67.442-.745.361-1.45.999-1.45 1.827v.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Zm-9 5.25h.008v.008H12v-.008Z" />
                                            </svg>
                                        </div>
                                        <span class="text-4xl font-black text-[#0A2C5C] tracking-tight transition-transform">{{ countQuestions }}</span>
                                    </div>
                                    <p class="text-[10px] font-black text-[#0A2C5C]/60 mb-8 uppercase tracking-widest leading-relaxed relative">
                                        Pytania<br/><span class="text-[#0A2C5C]">Rekrutacyjne</span>
                                    </p>
                                    <Link
                                        :href="route('admin.questions-accepts.index')"
                                        class="w-full text-center rounded-xl bg-[#0A2C5C] py-4 text-[10px] font-black text-white shadow-lg shadow-blue-900/10 hover:bg-blue-800 transition-all uppercase tracking-widest relative overflow-hidden group/btn"
                                    >
                                        <span class="relative z-10">SPRAWDŹ</span>
                                    </Link>
                                </div>

                                <!-- Banery do zaakceptowania -->
                                <div class="flex flex-col justify-between p-8 rounded-[2.5rem] border border-gray-100 bg-gray-50/50 hover:bg-white hover:shadow-xl hover:shadow-blue-900/5 transition-all group relative overflow-hidden">
                                    <div class="flex items-start justify-between mb-6 relative">
                                        <div class="h-12 w-12 rounded-xl bg-blue-500 flex items-center justify-center shadow-lg shadow-blue-500/10 transition-all">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor" class="w-6 h-6 text-white">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="m2.25 15.75 5.159-5.159a2.25 2.25 0 0 1 3.182 0l5.159 5.159m-1.5-1.5 1.409-1.409a2.25 2.25 0 0 1 3.182 0l2.909 2.909m-18 3.75h16.5a1.5 1.5 0 0 0 1.5-1.5V6a1.5 1.5 0 0 0-1.5-1.5H3.75A1.5 1.5 0 0 0 2.25 6v12a1.5 1.5 0 0 0 1.5 1.5Zm10.5-11.25h.008v.008h-.008V8.25Zm.375 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Z" />
                                            </svg>
                                        </div>
                                        <span class="text-4xl font-black text-[#0A2C5C] tracking-tight transition-transform">{{ countBanners }}</span>
                                    </div>
                                    <p class="text-[10px] font-black text-[#0A2C5C]/60 mb-8 uppercase tracking-widest leading-relaxed relative">
                                        Banery<br/><span class="text-blue-500">Firmowe</span>
                                    </p>
                                    <Link
                                        :href="route('admin.banners-accepts.index')"
                                        class="w-full text-center rounded-xl bg-[#0A2C5C] py-4 text-[10px] font-black text-white shadow-lg shadow-blue-900/10 hover:bg-blue-800 transition-all uppercase tracking-widest relative overflow-hidden group/btn"
                                    >
                                        <span class="relative z-10">SPRAWDŹ</span>
                                    </Link>
                                </div>

                                <!-- Artykuły do zaakceptowania -->
                                <div class="flex flex-col justify-between p-8 rounded-[2.5rem] border border-gray-100 bg-gray-50/50 hover:bg-white hover:shadow-xl hover:shadow-blue-900/5 transition-all group relative overflow-hidden">
                                    <div class="flex items-start justify-between mb-6 relative">
                                        <div class="h-12 w-12 rounded-xl bg-cyan-500 flex items-center justify-center shadow-lg shadow-cyan-500/10 transition-all">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor" class="w-6 h-6 text-white">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 7.5h1.5m-1.5 3h1.5m-7.5 3h7.5m-7.5 3h7.5m3-9h3.375c.621 0 1.125.504 1.125 1.125V18a2.25 2.25 0 0 1-2.25 2.25M16.5 7.5V18a2.25 2.25 0 0 0 2.25 2.25M16.5 7.5V4.875c0-.621-.504-1.125-1.125-1.125H4.125C3.504 3.75 3 4.254 3 4.875V18a2.25 2.25 0 0 0 2.25 2.25h13.5M6 7.5h3v3H6v-3Z" />
                                            </svg>
                                        </div>
                                        <span class="text-4xl font-black text-[#0A2C5C] tracking-tight transition-transform">{{ countArticles }}</span>
                                    </div>
                                    <p class="text-[10px] font-black text-[#0A2C5C]/60 mb-8 uppercase tracking-widest leading-relaxed relative">
                                        Artykuły<br/><span class="text-cyan-500">i Treści</span>
                                    </p>
                                    <Link
                                        :href="route('admin.articles-accepts.index')"
                                        class="w-full text-center rounded-xl bg-[#0A2C5C] py-4 text-[10px] font-black text-white shadow-lg shadow-blue-900/10 hover:bg-blue-800 transition-all uppercase tracking-widest relative overflow-hidden group/btn"
                                    >
                                        <span class="relative z-10">SPRAWDŹ</span>
                                    </Link>
                                </div>
                            </div>

                            <!-- Pozostałe elementy kolejki (opcjonalne) -->
                            <div v-if="queue && queue.length" class="space-y-4">
                                <div v-for="(item, idx) in queue" :key="idx" class="flex items-center justify-between p-6 rounded-2xl bg-gray-50/50 border border-gray-100 hover:bg-white hover:shadow-lg transition-all group">
                                    <div class="flex items-center gap-6">
                                        <div class="h-10 w-10 shrink-0 rounded-xl bg-white shadow-sm text-[#0A2C5C] grid place-items-center font-black text-lg group-hover:bg-[#0A2C5C] group-hover:text-white transition-all">{{ (idx+1) }}</div>
                                        <div>
                                            <p class="font-black text-[#0A2C5C] uppercase text-xs tracking-widest mb-1" v-html="item.title"></p>
                                            <p class="text-gray-400 text-[9px] font-bold uppercase tracking-widest" v-if="item.subtitle" v-html="item.subtitle"></p>
                                        </div>
                                    </div>
                                    <Link v-if="item.href" :href="item.href" class="rounded-xl bg-white border border-gray-100 px-6 py-3 text-[9px] font-black text-[#0A2C5C] hover:bg-[#0A2C5C] hover:text-white transition-all uppercase tracking-widest">DETALE</Link>
                                </div>
                            </div>
                        </div>
                        <div v-else class="flex flex-col items-center justify-center py-12 text-center">
                            <div class="w-16 h-16 bg-blue-50 rounded-full flex items-center justify-center mb-4">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8 text-blue-300">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                </svg>
                            </div>
                            <p class="text-[10px] font-black text-gray-400 uppercase tracking-widest">Wszystko sprawdzone!</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Prawa kolumna: Alerty i Zdarzenia -->
            <div class="space-y-8">
                <!-- Alerty -->
                <div class="rounded-[3rem] bg-white shadow-xl shadow-blue-900/5 border border-gray-100 overflow-hidden">
                    <div class="px-10 py-8 border-b border-gray-50 flex items-center justify-between bg-gradient-to-r from-white to-red-50/20">
                        <h3 class="text-xl font-black tracking-tight text-[#0A2C5C] uppercase leading-none">Ważne Alerty</h3>
                        <div class="h-8 w-8 rounded-xl bg-red-50 flex items-center justify-center shadow-inner">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor" class="w-4 h-4 text-red-500">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126ZM12 15.75h.007v.008H12v-.008Z" />
                            </svg>
                        </div>
                    </div>
                    <div class="p-8">
                        <div v-if="alerts && alerts.length" class="space-y-4">
                            <div v-for="(alert, i) in alerts" :key="i" class="flex items-start gap-4 p-4 rounded-xl transition-all" :class="alert.level === 'danger' ? 'bg-red-50' : 'bg-gray-50'">
                                <span class="mt-1.5 inline-flex h-2 w-2 shrink-0 rounded-full" :class="alert.level === 'danger' ? 'bg-red-500' : (alert.level === 'warning' ? 'bg-yellow-400' : 'bg-blue-400')"></span>
                                <p class="text-[10px] font-bold text-[#0A2C5C]/80 leading-relaxed uppercase tracking-widest" v-html="alert.text"></p>
                            </div>
                        </div>
                        <div v-else class="text-center py-8">
                            <p class="text-[9px] font-black text-gray-300 uppercase tracking-widest">Brak pilnych alertów</p>
                        </div>
                    </div>
                </div>

                <!-- Zdarzenia -->
                <div class="rounded-[3rem] bg-white shadow-xl shadow-blue-900/5 border border-gray-100 overflow-hidden">
                    <div class="px-10 py-8 border-b border-gray-50 flex items-center justify-between bg-gradient-to-r from-white to-blue-50/20">
                        <h3 class="text-xl font-black tracking-tight text-[#0A2C5C] uppercase leading-none">Ostatnie Aktywności</h3>
                        <div class="h-8 w-8 rounded-xl bg-blue-50 flex items-center justify-center shadow-inner">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor" class="w-4 h-4 text-blue-500">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                            </svg>
                        </div>
                    </div>
                    <div class="p-8">
                        <div v-if="events && events.length" class="space-y-6">
                            <div v-for="(event, i) in events" :key="i" class="flex items-center gap-4 group cursor-default">
                                <div class="h-10 w-10 shrink-0 rounded-xl bg-gray-50 group-hover:bg-[#0A2C5C] transition-all duration-300 grid place-items-center text-[#0A2C5C] group-hover:text-white font-black text-xs shadow-sm border border-gray-100 group-hover:border-[#0A2C5C]">
                                    {{ event.icon || '✓' }}
                                </div>
                                <div class="overflow-hidden">
                                    <p class="font-black text-[#0A2C5C] uppercase text-[10px] tracking-widest truncate transition-transform" v-html="event.title"></p>
                                    <p class="text-gray-400 text-[8px] font-bold uppercase tracking-widest truncate mt-1" v-if="event.subtitle" v-html="event.subtitle"></p>
                                </div>
                            </div>
                        </div>
                        <div v-else class="text-center py-8">
                            <p class="text-[9px] font-black text-gray-300 uppercase tracking-widest">Brak nowych zdarzeń</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</template>

<script setup>
import { Link } from '@inertiajs/vue3'
import {computed} from "vue";

const props = defineProps({
    countQuestions: { type: Number, default: 0 },
    countBanners: { type: Number, default: 0 },
    countArticles: { type: Number, default: 0 },
    stats: {
        type: Object,
        default: () => ({})
    },
    alerts: {
        type: Array,
        default: () => []
    },
    queue: {
        type: Array,
        default: () => []
    },
    events: {
        type: Array,
        default: () => []
    }
});

const statsAvailable = computed(() => Object.keys(props.stats || {}).length > 0);

const isQueueEmpty = computed(() => {
    return props.countQuestions === 0 &&
        props.countBanners === 0 &&
        props.countArticles === 0 &&
        (!props.queue || props.queue.length === 0);
});

const statCards = computed(() => [
    { key: 'newCompanies', label: 'Nowe firmy', value: props.stats?.newCompanies?.value ?? '—', diff: props.stats?.newCompanies?.diff ?? 0, trend: props.stats?.newCompanies?.trend ?? 'up' },
    { key: 'newOffers', label: 'Nowe oferty', value: props.stats?.newOffers?.value ?? '—', diff: props.stats?.newOffers?.diff ?? 0, trend: props.stats?.newOffers?.trend ?? 'up' },
    { key: 'newApplications', label: 'Nowe aplikacje', value: props.stats?.newApplications?.value ?? '—', diff: props.stats?.newApplications?.diff ?? 0, trend: props.stats?.newApplications?.trend ?? 'up' },
    { key: 'newFoundations', label: 'Nowe fundacje', value: props.stats?.newFoundations?.value ?? '—', diff: props.stats?.newFoundations?.diff ?? 0, trend: props.stats?.newFoundations?.trend ?? 'up' },
    { key: 'sales', label: 'Sprzedaż kredytów', value: props.stats?.sales?.value ?? '—', diff: props.stats?.sales?.diff ?? 0, trend: props.stats?.sales?.trend ?? 'up' },
]);
</script>

<style scoped>
/* Subtelne wygładzenie cienia jak w makiecie */
:deep(.shadow-xl){
    filter: drop-shadow(0 10px 20px rgba(2, 6, 23, 0.08));
}
</style>
