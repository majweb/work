<script setup>
import { computed, ref } from 'vue';

// Wybór rynków do tłumaczenia artykułu: pigułki krajów pogrupowane według języka
// (jeden język = jedno tłumaczenie = jedna wersja dla wszystkich jego krajów).
const props = defineProps({
    modelValue: { type: Array, default: () => [] },
    // [{ code, name, locale }]
    markets: { type: Array, required: true },
    languageNames: { type: Object, required: true },
    // Kraj oryginału i kraje już przetłumaczone - zaznaczone na stałe
    sourceCountry: { type: String, default: '' },
    translated: { type: Array, default: () => [] },
    sourceLocale: { type: String, default: 'pl' },
    // Średni koszt tłumaczenia jednego języka (USD)
    costPerLanguage: { type: Number, default: 0.032 },
});

const emit = defineEmits(['update:modelValue']);

const search = ref('');

const selected = computed(() => new Set(props.modelValue));
const locked = computed(() => new Set(props.translated));

// Język oryginału: rynek główny (pole Kraj) zablokowany, pozostałe kraje tego języka do wyboru -
// oryginał trafia do nich bez tłumaczenia
const sourceMarkets = computed(() => props.markets.filter((m) => m.code === props.sourceCountry || m.locale === props.sourceLocale));

// Kraje języka oryginału nie wymagają tłumaczenia - pokazuje się w nich oryginał
const translatable = computed(() => props.markets.filter((m) => m.locale && m.locale !== props.sourceLocale && m.code !== props.sourceCountry));

const groups = computed(() => {
    const phrase = search.value.trim().toLowerCase();
    const byLocale = {};

    for (const market of translatable.value) {
        const languageName = props.languageNames[market.locale] || market.locale;
        if (phrase && !market.name.toLowerCase().includes(phrase) && !languageName.toLowerCase().includes(phrase)) continue;
        (byLocale[market.locale] ??= { locale: market.locale, name: languageName, markets: [] }).markets.push(market);
    }

    return Object.values(byLocale).sort((a, b) => b.markets.length - a.markets.length || a.name.localeCompare(b.name));
});

const isOn = (code) => selected.value.has(code) || locked.value.has(code);

const toggle = (code) => {
    if (locked.value.has(code)) return;
    const next = new Set(props.modelValue);
    next.has(code) ? next.delete(code) : next.add(code);
    emit('update:modelValue', [...next]);
};

const toggleLanguage = (group) => {
    const codes = group.markets.map((m) => m.code).filter((code) => !locked.value.has(code));
    const allOn = codes.every((code) => selected.value.has(code));
    const next = new Set(props.modelValue);
    codes.forEach((code) => (allOn ? next.delete(code) : next.add(code)));
    emit('update:modelValue', [...next]);
};

const selectable = computed(() => props.markets.filter((m) => m.locale && m.code !== props.sourceCountry));
const allSelected = computed(() => selectable.value.every((m) => isOn(m.code)));
const toggleAll = () => emit('update:modelValue', allSelected.value
    ? []
    : selectable.value.map((m) => m.code).filter((code) => !locked.value.has(code)));

// Podsumowanie: nowe rynki i języki, które trzeba przetłumaczyć (języki już przetłumaczone są bez kosztu)
const translatedLocales = computed(() => new Set(props.markets.filter((m) => locked.value.has(m.code)).map((m) => m.locale)));
const newLocales = computed(() => new Set(props.markets
    .filter((m) => selected.value.has(m.code) && m.locale !== props.sourceLocale && !translatedLocales.value.has(m.locale))
    .map((m) => m.locale)));
const estimate = computed(() => (newLocales.value.size * props.costPerLanguage).toFixed(2));
</script>

<template>
    <div class="space-y-4">
        <div class="flex flex-col md:flex-row md:items-center gap-3">
            <button
                type="button"
                class="px-5 py-2.5 rounded-xl text-[10px] font-black uppercase tracking-widest border transition-colors"
                :class="allSelected ? 'bg-[#0A2C5C] border-[#0A2C5C] text-white' : 'bg-white border-gray-200 text-[#0A2C5C] hover:border-[#0A2C5C]'"
                @click="toggleAll"
            >
                {{ allSelected ? 'Odznacz wszystkie rynki' : 'Wszystkie rynki' }}
            </button>
            <input
                v-model="search"
                type="search"
                placeholder="Szukaj kraju lub języka"
                class="w-full md:w-72 px-4 py-2.5 bg-gray-50 border-0 rounded-xl text-sm focus:ring-2 focus:ring-[#329CD1]"
            >
            <p class="md:ml-auto text-xs text-gray-500">
                Wybrane rynki: <strong class="text-[#0A2C5C]">{{ modelValue.length }}</strong>
                · nowe tłumaczenia: <strong class="text-[#0A2C5C]">{{ newLocales.size }}</strong>
                · koszt ok. <strong class="text-[#0A2C5C]">{{ estimate }} USD</strong>
            </p>
        </div>

        <div class="max-h-[420px] overflow-y-auto space-y-3 pr-1">
            <!-- Oryginał: język i rynek artykułu, bez tłumaczenia -->
            <div v-if="sourceMarkets.length" class="p-4 bg-blue-50/60 border border-blue-100 rounded-2xl">
                <p class="mb-2 text-[10px] font-black uppercase tracking-widest text-[#0A2C5C]">
                    {{ languageNames[sourceLocale] || sourceLocale }} <span class="text-blue-500 normal-case tracking-normal">(oryginał – bez tłumaczenia)</span>
                </p>
                <div class="flex flex-wrap gap-1.5">
                    <template v-for="market in sourceMarkets" :key="market.code">
                        <span
                            v-if="market.code === sourceCountry"
                            class="px-3 py-1.5 rounded-lg text-xs font-bold border bg-blue-100 border-blue-200 text-[#0A2C5C] cursor-default"
                            title="Rynek oryginału (pole Kraj)"
                        >
                            {{ market.name }} · oryginał
                        </span>
                        <button
                            v-else
                            type="button"
                            class="px-3 py-1.5 rounded-lg text-xs font-bold border transition-colors"
                            :class="locked.has(market.code)
                                ? 'bg-green-50 border-green-200 text-green-700 cursor-default'
                                : (selected.has(market.code) ? 'bg-[#0A2C5C] border-[#0A2C5C] text-white' : 'bg-white border-gray-200 text-gray-600 hover:border-[#329CD1]')"
                            title="Oryginał bez tłumaczenia"
                            @click="toggle(market.code)"
                        >
                            {{ market.name }}
                        </button>
                    </template>
                </div>
            </div>

            <div v-for="group in groups" :key="group.locale" class="p-4 bg-gray-50/70 rounded-2xl">
                <button type="button" class="mb-2 text-[10px] font-black uppercase tracking-widest text-[#0A2C5C] hover:underline" @click="toggleLanguage(group)">
                    {{ group.name }} <span class="text-gray-400">· {{ group.markets.length }}</span>
                    <span v-if="translatedLocales.has(group.locale)" class="ml-1 text-green-600 normal-case tracking-normal">(przetłumaczone)</span>
                </button>
                <div class="flex flex-wrap gap-1.5">
                    <button
                        v-for="market in group.markets"
                        :key="market.code"
                        type="button"
                        class="px-3 py-1.5 rounded-lg text-xs font-bold border transition-colors"
                        :class="locked.has(market.code)
                            ? 'bg-green-50 border-green-200 text-green-700 cursor-default'
                            : (selected.has(market.code) ? 'bg-[#0A2C5C] border-[#0A2C5C] text-white' : 'bg-white border-gray-200 text-gray-600 hover:border-[#329CD1]')"
                        :title="locked.has(market.code) ? 'Już przetłumaczone' : ''"
                        @click="toggle(market.code)"
                    >
                        {{ market.name }}
                    </button>
                </div>
            </div>
            <p v-if="!groups.length" class="text-sm text-gray-400 px-2">Brak krajów dla tego wyszukiwania.</p>
        </div>

        <p class="text-[10px] font-bold text-gray-400 uppercase tracking-widest leading-relaxed">
            Każdy język tłumaczymy raz – jedna wersja trafia do wszystkich wybranych krajów tego języka. Wersje zapisują się jako szkice do przejrzenia i publikacji.
        </p>
    </div>
</template>
