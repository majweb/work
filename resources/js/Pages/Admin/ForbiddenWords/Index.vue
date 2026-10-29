<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import Pagination from '@/Components/Pagination.vue';
import InputError from '@/Components/InputError.vue';
import { router, useForm } from '@inertiajs/vue3';
import { ref, watch } from 'vue';
import axios from 'axios';
import debounce from 'lodash/debounce';

const props = defineProps({
    words: Object,
    filters: Object,
    totals: Object,
});

const search = ref(props.filters?.search || '');
const filter = ref(props.filters?.filter || '');

const reload = () => router.get(route('admin.forbidden-words.index'), {
    ...(search.value ? { search: search.value } : {}),
    ...(filter.value ? { filter: filter.value } : {}),
}, { preserveState: true, preserveScroll: true, replace: true });

watch(search, debounce(reload, 300));
watch(filter, reload);

const addForm = useForm({ words: '', note: '' });
const add = () => addForm.post(route('admin.forbidden-words.store'), {
    preserveScroll: true,
    onSuccess: () => addForm.reset(),
});

const toggle = (word) => router.patch(route('admin.forbidden-words.update', word.id), { is_active: !word.is_active }, { preserveScroll: true });
const remove = (word) => {
    if (confirm(`Usunąć „${word.word}” z listy?`)) {
        router.delete(route('admin.forbidden-words.destroy', word.id), { preserveScroll: true });
    }
};

// Sprawdzenie tekstu: które słowa z listy zablokowałyby wiadomość
const checkText = ref('');
const checkResult = ref(null);
const check = async () => {
    if (!checkText.value.trim()) return;
    const { data } = await axios.post(route('admin.forbidden-words.check'), { text: checkText.value });
    checkResult.value = data.matches;
};

const inputClass = 'w-full px-4 py-3 bg-gray-50 border-0 rounded-xl text-sm focus:ring-2 focus:ring-[#329CD1]';
const labelClass = 'text-[10px] font-black text-[#0A2C5C] uppercase tracking-[0.2em] mb-2 block';
</script>

<template>
    <AppLayout title="Zakazane słowa">
        <div class="py-12 bg-gray-50/50 min-h-screen px-2 sm:px-0">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-8">
                <div class="bg-white rounded-[3rem] shadow-xl shadow-blue-900/5 border border-gray-100 p-10">
                    <h3 class="text-2xl font-black text-[#0A2C5C] uppercase tracking-tight">Zakazane słowa</h3>
                    <p class="mt-2 text-sm text-gray-500 max-w-3xl">
                        Wiadomość pracownika, firmy lub rekrutera z takim słowem nie zostanie wysłana (komunikat nie zdradza, które słowo ją zablokowało).
                        Administracja pisze bez filtra. Gwiazdka na końcu łapie wszystkie odmiany („kurw*” → kurwa, kurwy…); bez gwiazdki – tylko całe słowo.
                        Wielkość liter, polskie znaki, cyfry zamiast liter („k0rwa”) i rozdzielanie kropkami nie mają znaczenia.
                    </p>
                    <p class="mt-3 text-[10px] font-black uppercase tracking-widest text-gray-400">Na liście: {{ totals.all }} · aktywne: {{ totals.active }}</p>
                </div>

                <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                    <form class="bg-white rounded-[2.5rem] shadow-xl shadow-blue-900/5 border border-gray-100 p-8 space-y-4" @submit.prevent="add">
                        <div>
                            <label :class="labelClass">Dodaj słowa</label>
                            <textarea v-model="addForm.words" rows="4" :class="inputClass" placeholder="Każde w nowej linii lub po przecinku, np. idiot*, scam"></textarea>
                            <InputError :message="addForm.errors.words" class="mt-1" />
                        </div>
                        <div>
                            <label :class="labelClass">Notatka (opcjonalnie)</label>
                            <input v-model="addForm.note" type="text" maxlength="255" :class="inputClass" placeholder="np. język ukraiński">
                        </div>
                        <button type="submit" :disabled="addForm.processing || !addForm.words.trim()" class="px-8 py-4 bg-[#0A2C5C] hover:bg-[#0D356D] text-white rounded-2xl font-black text-[10px] uppercase tracking-[0.2em] disabled:opacity-40">Dodaj</button>
                    </form>

                    <div class="bg-white rounded-[2.5rem] shadow-xl shadow-blue-900/5 border border-gray-100 p-8 space-y-4">
                        <label :class="labelClass">Sprawdź tekst</label>
                        <textarea v-model="checkText" rows="4" :class="inputClass" placeholder="Wklej treść wiadomości, aby sprawdzić, czy przejdzie"></textarea>
                        <button type="button" class="px-8 py-4 border-2 border-gray-100 hover:bg-gray-50 text-[#0A2C5C] rounded-2xl font-black text-[10px] uppercase tracking-[0.2em]" @click="check">Sprawdź</button>
                        <p v-if="checkResult !== null" class="text-sm" :class="checkResult.length ? 'text-red-600' : 'text-green-700'">
                            {{ checkResult.length ? 'Zablokowane przez: ' + checkResult.join(', ') : 'Wiadomość przejdzie.' }}
                        </p>
                    </div>
                </div>

                <div class="bg-white rounded-[3rem] shadow-xl shadow-blue-900/5 border border-gray-100 overflow-hidden">
                    <div class="p-8 flex flex-col md:flex-row gap-4">
                        <input v-model="search" type="search" :class="inputClass" class="md:w-80" placeholder="Szukaj słowa">
                        <select v-model="filter" :class="inputClass" class="md:w-56">
                            <option value="">Wszystkie</option>
                            <option value="active">Aktywne</option>
                            <option value="inactive">Wyłączone</option>
                        </select>
                    </div>
                    <table class="w-full text-left border-collapse">
                        <thead>
                            <tr class="border-b border-gray-50">
                                <th class="px-8 py-4 text-[10px] font-black text-[#0A2C5C] uppercase tracking-[0.2em]">Słowo</th>
                                <th class="px-8 py-4 text-[10px] font-black text-[#0A2C5C] uppercase tracking-[0.2em]">Notatka</th>
                                <th class="px-8 py-4 text-[10px] font-black text-[#0A2C5C] uppercase tracking-[0.2em]">Stan</th>
                                <th class="px-8 py-4"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr v-for="word in words.data" :key="word.id" class="border-b border-gray-50 hover:bg-gray-50/50">
                                <td class="px-8 py-4 text-sm font-bold text-[#0A2C5C]">{{ word.word }}</td>
                                <td class="px-8 py-4 text-sm text-gray-500">{{ word.note || '–' }}</td>
                                <td class="px-8 py-4">
                                    <button type="button" class="px-3 py-1.5 rounded-lg text-[10px] font-black uppercase tracking-widest" :class="word.is_active ? 'bg-green-50 text-green-700' : 'bg-gray-100 text-gray-500'" @click="toggle(word)">
                                        {{ word.is_active ? 'Aktywne' : 'Wyłączone' }}
                                    </button>
                                </td>
                                <td class="px-8 py-4 text-right">
                                    <button type="button" class="text-[10px] font-black text-red-500 uppercase tracking-widest hover:underline" @click="remove(word)">Usuń</button>
                                </td>
                            </tr>
                            <tr v-if="!words.data.length">
                                <td colspan="4" class="px-8 py-10 text-center text-sm text-gray-400">Brak słów dla tego wyszukiwania.</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <Pagination v-if="words.links?.length > 3" :links="words.links" />
            </div>
        </div>
    </AppLayout>
</template>
