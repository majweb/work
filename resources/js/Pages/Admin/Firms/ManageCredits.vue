<script setup>
import AppLayout from "@/Layouts/AppLayout.vue";
import { Link, useForm } from "@inertiajs/vue3";
import { ref } from 'vue';

const props = defineProps({
    firm: Object,
});

const type = ref('add');

const form = useForm({
    amount: '',
    type: 'add'
});

const submit = () => {
    form.post(route('admin.firms.updateCredits', props.firm.id));
};
</script>

<template>
    <AppLayout :title="'Zarządzaj kredytami: ' + firm.name">
        <div class="py-12 bg-gray-50/50 min-h-screen">
            <div class="max-w-[1600px] mx-auto px-4 sm:px-6 lg:px-8">
                <!-- Header -->
                <div class="flex items-center justify-between mb-12">
                    <div class="flex items-center gap-8">
                        <Link
                            :href="route('admin.firms.show', firm.id)"
                            class="w-14 h-14 bg-white rounded-3xl flex items-center justify-center shadow-xl shadow-blue-900/5 border border-gray-100 text-[#0A2C5C] hover:bg-gray-50 transition-all active:scale-95 group"
                        >
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor" class="w-6 h-6 group-hover:-translate-x-1 transition-transform">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5 3 12m0 0 7.5-7.5M3 12h18" />
                            </svg>
                        </Link>
                        <div>
                            <div class="flex items-center gap-3 mb-1">
                                <span class="px-3 py-1 bg-blue-50 text-blue-500 rounded-lg text-[10px] font-black uppercase tracking-widest">Kredyty i punkty</span>
                            </div>
                            <h1 class="text-4xl font-black text-[#0A2C5C] tracking-tight">Zarządzaj kredytami</h1>
                        </div>
                    </div>
                </div>

                <div class="bg-white rounded-3xl shadow-xl shadow-blue-900/5 border border-gray-100 p-8">
                    <div class="flex items-center gap-6 mb-12 bg-blue-50/50 p-6 rounded-3xl border border-blue-100/50">
                        <div class="w-20 h-20 bg-white rounded-2xl flex items-center justify-center shadow-xl shadow-blue-900/5 border border-blue-100/20 text-blue-500">
                             <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor" class="w-10 h-10">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v12m-3-2.818.879.659c1.171.879 3.07.879 4.242 0 1.172-.879 1.172-2.303 0-3.182C13.536 12.219 12.768 12 12 12c-.725 0-1.45-.22-2.003-.659-1.106-.879-1.106-2.303 0-3.182s2.9-.879 4.006 0l.415.33M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                            </svg>
                        </div>
                        <div>
                            <div class="text-[10px] font-black text-blue-400 uppercase tracking-widest mb-1">Aktualny stan kredytów</div>
                            <div class="text-4xl font-black text-[#0A2C5C] tracking-tight">{{ firm.points }} <span class="text-blue-500 font-bold text-xl ml-1">PKT</span></div>
                        </div>
                    </div>

                    <form @submit.prevent="submit" class="grid gap-8">
                        <div>
                            <label class="block text-[10px] font-black text-gray-400 uppercase tracking-widest mb-4 ml-1">Tryb operacji</label>
                            <div class="grid grid-cols-2 gap-4 p-2 bg-gray-50 rounded-2xl">
                                <button type="button" @click="form.type = 'add'" class="px-6 py-4 rounded-xl font-black text-[10px] uppercase tracking-widest transition-all" :class="form.type === 'add' ? 'bg-[#0A2C5C] text-white shadow-xl shadow-blue-900/20 scale-[1.02]' : 'text-gray-400 hover:text-[#0A2C5C] hover:bg-white/50'">
                                    Dodaj / Odejmij
                                </button>
                                <button type="button" @click="form.type = 'set'" class="px-6 py-4 rounded-xl font-black text-[10px] uppercase tracking-widest transition-all" :class="form.type === 'set' ? 'bg-[#0A2C5C] text-white shadow-xl shadow-blue-900/20 scale-[1.02]' : 'text-gray-400 hover:text-[#0A2C5C] hover:bg-white/50'">
                                    Ustaw wartość
                                </button>
                            </div>
                        </div>

                        <div>
                            <label class="block text-[10px] font-black text-gray-400 uppercase tracking-widest mb-2 ml-1">Liczba punktów (użyj minusa do odjęcia)</label>
                            <input v-model="form.amount" type="number" class="w-full px-8 py-6 bg-gray-50 border-none rounded-2xl focus:ring-2 focus:ring-blue-500 transition-all font-black text-3xl text-[#0A2C5C]" placeholder="0" />
                            <div v-if="form.errors.amount" class="text-red-500 text-xs mt-2 ml-1">{{ form.errors.amount }}</div>
                        </div>

                        <div class="flex justify-end gap-4 mt-4">
                            <Link :href="route('admin.firms.show', firm.id)" class="px-8 py-4 bg-white text-[#0A2C5C] rounded-2xl text-[10px] font-black uppercase tracking-widest hover:bg-gray-50 transition-all border border-gray-100 shadow-sm active:scale-95">
                                Anuluj
                            </Link>
                            <button type="submit" :disabled="form.processing" class="px-8 py-4 bg-[#0A2C5C] text-white rounded-2xl text-[10px] font-black uppercase tracking-widest hover:bg-[#0d3671] transition-all shadow-xl shadow-blue-900/20 disabled:opacity-50 active:scale-95 flex items-center gap-3">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor" class="w-4 h-4 text-blue-400">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                                </svg>
                                Potwierdź operację
                            </button>
                        </div>
                    </form>
                </div>

                <div class="mt-8 bg-blue-50 rounded-3xl p-6 border border-blue-100">
                    <div class="flex gap-4">
                        <div class="w-10 h-10 bg-blue-100 rounded-xl flex items-center justify-center text-blue-500 shrink-0">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m11.25 11.25.041-.02a.75.75 0 0 1 1.063.852l-.708 2.836a.75.75 0 0 0 1.063.853l.041-.021M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Zm-9-3.75h.008v.008H12V8.25Z" />
                            </svg>
                        </div>
                        <div>
                            <h4 class="font-black text-[#0A2C5C] text-sm mb-1">Wskazówka</h4>
                            <p class="text-xs text-blue-700/70 font-bold leading-relaxed">
                                Wybierz "Dodaj / Odejmij", aby zmodyfikować obecny stan punktów (np. wpisz 50 aby dodać 50 pkt, lub -50 aby odjąć). Wybierz "Ustaw wartość", aby nadpisać obecny stan nową wartością.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </AppLayout>
</template>
