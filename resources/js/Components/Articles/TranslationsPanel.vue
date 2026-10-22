<script setup>
import { Link, router } from '@inertiajs/vue3';
import { computed, onMounted, onUnmounted, ref, watch } from 'vue';
import axios from 'axios';

// Wersje językowe artykułu admina: stan tłumaczeń, rynki, publikacja szkiców.
// Gdy tłumaczenia trwają, stan odświeża się co 5 s.
const props = defineProps({
    articleId: { type: Number, required: true },
    translations: { type: Object, required: true },
});

const data = ref(props.translations);
watch(() => props.translations, (value) => (data.value = value));

const STATUS = {
    pending: { label: 'W kolejce', class: 'bg-gray-100 text-gray-500' },
    translating: { label: 'Tłumaczenie…', class: 'bg-blue-50 text-blue-600' },
    done: { label: 'Gotowe', class: 'bg-green-50 text-green-700' },
    failed: { label: 'Błąd', class: 'bg-red-50 text-red-600' },
};

const items = computed(() => data.value.items || []);
const doneCount = computed(() => items.value.filter((t) => t.status === 'done').length);
const draftCount = computed(() => items.value.filter((t) => t.article && !t.article.active).length);
const editedCount = computed(() => items.value.filter((t) => t.edited_manually).length);

let timer = null;
const refresh = async () => {
    try {
        const { data: fresh } = await axios.get(route('admin.articles-accepts.translations.status', props.articleId));
        data.value = fresh;
    } catch {
        // spróbujemy przy następnym odświeżeniu
    }
};
const schedule = () => {
    clearTimeout(timer);
    if (data.value.in_progress) {
        timer = setTimeout(async () => { await refresh(); schedule(); }, 5000);
    }
};
watch(() => data.value.in_progress, schedule);
onMounted(schedule);
onUnmounted(() => clearTimeout(timer));

const opts = { preserveScroll: true, onSuccess: () => refresh().then(schedule) };
const publishAll = () => router.post(route('admin.articles-accepts.translations.publish-all', props.articleId), {}, opts);
const togglePublish = (t) => router.put(route('admin.articles-accepts.translations.publish', [props.articleId, t.id]), {}, opts);
const retry = (t) => {
    if (t.edited_manually && !confirm('Ta wersja była poprawiana ręcznie. Ponowne tłumaczenie nadpisze poprawki. Kontynuować?')) return;
    router.post(route('admin.articles-accepts.translations.retry', [props.articleId, t.id]), {}, opts);
};
const retranslateAll = () => {
    const includeEdited = editedCount.value > 0
        && confirm(`Poprawione ręcznie wersje (${editedCount.value}) też przetłumaczyć od nowa? OK – tak, Anuluj – pomiń je.`);
    if (!confirm('Przetłumaczyć ponownie wersje językowe na podstawie aktualnego oryginału?')) return;
    router.post(route('admin.articles-accepts.translations.retranslate', props.articleId), { include_edited: includeEdited }, opts);
};
const removeMarket = (t, country) => {
    const last = t.countries.length === 1;
    if (!confirm(last
        ? `To ostatni rynek wersji „${t.language}” – wersja zostanie usunięta. Kontynuować?`
        : `Usunąć rynek ${country.name} z wersji „${t.language}”?`)) return;
    router.delete(route('admin.articles-accepts.translations.remove-market', [props.articleId, t.id, country.code]), opts);
};
</script>

<template>
    <div class="bg-white rounded-[2.5rem] shadow-xl shadow-blue-900/5 border border-gray-100 p-8 space-y-6">
        <div class="flex flex-col md:flex-row md:items-center justify-between gap-4">
            <div>
                <h3 class="text-lg font-black text-[#0A2C5C] uppercase tracking-tight">Wersje językowe</h3>
                <p class="text-xs text-gray-500 mt-1">
                    Gotowe: <strong>{{ doneCount }}/{{ items.length }}</strong> języków · rynki: <strong>{{ data.markets }}</strong>
                    · szkice: <strong>{{ draftCount }}</strong> · koszt tłumaczeń: <strong>{{ data.cost_usd }} USD</strong>
                    <span v-if="data.in_progress" class="ml-2 text-blue-600">· tłumaczenia trwają, stan odświeża się sam</span>
                </p>
            </div>
            <div class="flex flex-wrap gap-2">
                <button type="button" :disabled="!draftCount" class="px-5 py-3 bg-[#0A2C5C] hover:bg-[#0D356D] text-white rounded-xl font-black text-[10px] uppercase tracking-widest disabled:opacity-40" @click="publishAll">
                    Opublikuj wszystkie szkice
                </button>
                <button type="button" :disabled="data.in_progress" class="px-5 py-3 bg-white border border-gray-200 hover:border-[#0A2C5C] text-[#0A2C5C] rounded-xl font-black text-[10px] uppercase tracking-widest disabled:opacity-40" @click="retranslateAll">
                    Przetłumacz ponownie
                </button>
            </div>
        </div>

        <div class="overflow-x-auto">
            <table class="w-full text-left border-collapse">
                <thead>
                    <tr class="border-b border-gray-50 text-[10px] font-black text-[#0A2C5C] uppercase tracking-widest">
                        <th class="py-3 pr-4">Język</th>
                        <th class="py-3 pr-4">Stan</th>
                        <th class="py-3 pr-4">Rynki</th>
                        <th class="py-3 pr-4">Publikacja</th>
                        <th class="py-3"></th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Oryginał -->
                    <tr v-if="data.source" class="border-b border-gray-50 align-top bg-blue-50/40">
                        <td class="py-4 pr-4 pl-2">
                            <p class="text-sm font-bold text-[#0A2C5C]">{{ data.source.language }} <span class="text-gray-400 font-normal">({{ data.source.locale }})</span></p>
                            <p class="text-xs text-gray-500 max-w-xs truncate" :title="data.source.title">{{ data.source.title }}</p>
                        </td>
                        <td class="py-4 pr-4">
                            <span class="px-3 py-1.5 rounded-lg text-[10px] font-black uppercase tracking-widest bg-blue-100 text-[#0A2C5C]">Oryginał</span>
                        </td>
                        <td class="py-4 pr-4">
                            <div class="flex flex-wrap gap-1">
                                <span v-for="country in data.source.countries" :key="country.code" class="px-2.5 py-1 bg-white border border-blue-100 rounded-lg text-xs text-gray-600">{{ country.name }}</span>
                            </div>
                        </td>
                        <td class="py-4 pr-4">
                            <span class="px-3 py-1.5 rounded-lg text-[10px] font-black uppercase tracking-widest border" :class="data.source.active ? 'bg-green-50 border-green-100 text-green-700' : 'bg-white border-gray-200 text-gray-500'">
                                {{ data.source.active ? 'Opublikowany' : 'Nieaktywny' }}
                            </span>
                        </td>
                        <td class="py-4 text-right whitespace-nowrap">
                            <a :href="data.source.url" target="_blank" class="text-[10px] font-black uppercase tracking-widest text-[#329CD1] hover:underline">Podgląd</a>
                        </td>
                    </tr>
                    <tr v-for="t in items" :key="t.id" class="border-b border-gray-50 align-top">
                        <td class="py-4 pr-4">
                            <p class="text-sm font-bold text-[#0A2C5C]">{{ t.language }} <span class="text-gray-400 font-normal">({{ t.locale }})</span></p>
                            <p v-if="t.article" class="text-xs text-gray-500 max-w-xs truncate" :title="t.article.title">{{ t.article.title }}</p>
                            <p v-if="t.edited_manually" class="text-[10px] font-bold text-amber-600 uppercase tracking-widest">Poprawiona ręcznie</p>
                            <p v-if="t.cost_usd" class="text-[10px] text-gray-400">{{ t.cost_usd.toFixed(3) }} USD</p>
                        </td>
                        <td class="py-4 pr-4">
                            <span class="px-3 py-1.5 rounded-lg text-[10px] font-black uppercase tracking-widest whitespace-nowrap" :class="STATUS[t.status]?.class">{{ STATUS[t.status]?.label || t.status }}</span>
                            <p v-if="t.error" class="mt-2 text-xs text-red-600 max-w-xs break-words">{{ t.error }}</p>
                        </td>
                        <td class="py-4 pr-4">
                            <div class="flex flex-wrap gap-1 max-w-md">
                                <span v-for="country in t.countries" :key="country.code" class="inline-flex items-center gap-1 pl-2.5 pr-1 py-1 bg-gray-50 border border-gray-100 rounded-lg text-xs text-gray-600">
                                    {{ country.name }}
                                    <button type="button" class="px-1 text-gray-300 hover:text-red-500" :title="`Usuń rynek ${country.name}`" @click="removeMarket(t, country)">×</button>
                                </span>
                            </div>
                        </td>
                        <td class="py-4 pr-4">
                            <button
                                v-if="t.article"
                                type="button"
                                class="px-3 py-1.5 rounded-lg text-[10px] font-black uppercase tracking-widest border"
                                :class="t.article.active ? 'bg-green-50 border-green-100 text-green-700' : 'bg-white border-gray-200 text-gray-500 hover:border-[#0A2C5C]'"
                                :title="t.article.active ? 'Kliknij, aby wycofać do szkicu' : 'Kliknij, aby opublikować'"
                                @click="togglePublish(t)"
                            >
                                {{ t.article.active ? 'Opublikowana' : 'Szkic' }}
                            </button>
                            <span v-else class="text-xs text-gray-400">–</span>
                        </td>
                        <td class="py-4 text-right whitespace-nowrap space-x-3">
                            <a v-if="t.article" :href="t.article.url" target="_blank" class="text-[10px] font-black uppercase tracking-widest text-[#329CD1] hover:underline">Podgląd</a>
                            <Link v-if="t.article" :href="route('admin.articles-accepts.edit', t.article.id)" class="text-[10px] font-black uppercase tracking-widest text-[#0A2C5C] hover:underline">Edytuj</Link>
                            <button v-if="t.status === 'failed' || t.status === 'done'" type="button" class="text-[10px] font-black uppercase tracking-widest text-gray-500 hover:underline" @click="retry(t)">
                                {{ t.status === 'failed' ? 'Ponów' : 'Tłumacz ponownie' }}
                            </button>
                        </td>
                    </tr>
                    <tr v-if="!items.length">
                        <td colspan="5" class="py-8 text-center text-sm text-gray-400">
                            Artykuł nie ma jeszcze wersji językowych. Wybierz rynki w edycji artykułu („Przetłumacz na kolejne rynki”).
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</template>
