<script setup>
import {onMounted, ref, computed, watch} from "vue";
import mapboxgl from "mapbox-gl";
import {Link, router, usePage} from "@inertiajs/vue3";
import Multiselect from "vue-multiselect";
import __ from "@/lang.js";
import TextInput from "@/Components/TextInput.vue";
import "mapbox-gl/dist/mapbox-gl.css";

mapboxgl.accessToken = usePage().props.mapboxToken;

const visibleFoundations = ref([]);
const currentBox = ref(null);
const searchName = ref("");
const selectedCategory = ref(null); // teraz tablica wybranych kategorii

// 🔢 paginacja
const currentPage = ref(1);
const pageSize = 8;

const props = defineProps({
    categories: {
        type: Array,
        required: true
    },
    foundations: Array,
    countries: Array,
});
const optionsCountry = computed(() => props.countries);
const foundations = computed(() => props.foundations);

const continents = {
    africa: [[-20, -35], [40, 38]],
    south_america: [[-90, -60], [-30, 15]],
    north_america: [[-170, 7], [-50, 80]],
    europe: [[-10, 34], [31, 72]],
    asia: [[40, -5], [150, 60]],
    oceania: [[110, -50], [180, 10]]
};
const selectedCountry = ref(null);

const map = ref(null);

/* ---------------------
   INIT MAP
---------------------- */
onMounted(() => {
    map.value = new mapboxgl.Map({
        container: "fundationMap",
        style: "mapbox://styles/mapbox/light-v11",
        center: [0, 25],
        zoom: 1.4,
        attributionControl: false
    });

    map.value.on("load", () => {
        customizeLightStyle();
        addGlowPoints();
        applyAllFilters();

    });
});

/* ---------------------
   FILTERS
---------------------- */
function filterByCategory(list) {
    if (!selectedCategory.value || selectedCategory.value.id == null) return list;
    return list.filter(f => f.categoryId === selectedCategory.value.id);
}

function filterByName(list) {
    if (!searchName.value) return list;
    return list.filter(f =>
        f.name.toLowerCase().includes(searchName.value.toLowerCase())
    );
}

function getFoundationsInBox(box) {
    return foundations.value.filter(f => {
        const [lng, lat] = f.coords;
        const [[minLng, minLat], [maxLng, maxLat]] = box;
        return lng >= minLng && lng <= maxLng && lat >= minLat && lat <= maxLat;
    });
}
function filterByCountry(list) {
    if (!selectedCountry.value || !selectedCountry.value.name) return list;
    return list.filter(f => f.country === selectedCountry.value?.countryCode);
}


function applyAllFilters() {
    let list = [];

    if (!currentBox.value) {
        list = foundations.value;
    } else {
        list = getFoundationsInBox(currentBox.value);
    }
    list = filterByCountry(list);

    list = filterByCategory(list);
    list = filterByName(list);

    visibleFoundations.value = list;
    currentPage.value = 1; // reset strony przy zmianie filtra
}

/* ---------------------
   PAGINACJA
---------------------- */
const paginatedFoundations = computed(() => {
    const start = (currentPage.value - 1) * pageSize;
    const end = start + pageSize;
    return visibleFoundations.value.slice(start, end);
});

const totalPages = computed(() =>
    Math.max(1, Math.ceil(visibleFoundations.value.length / pageSize))
);

/* ---------------------
   MAP STYLE
---------------------- */
function customizeLightStyle() {
    const style = map.value.getStyle();

    // 🌊 TŁO OCEANU
    const bg = style.layers.find(l => l.type === "background");
    if (bg) {
        map.value.setPaintProperty(bg.id, "background-color", "#0d2a52");
    }

    // 🌊 WODA (oceany / morza)
    style.layers
        .filter(l => l.id.includes("water") && l.type === "fill")
        .forEach(l => {
            map.value.setLayoutProperty(l.id, "visibility", "visible");
            map.value.setPaintProperty(l.id, "fill-color", "#afceef");
        });

    // 🌍 KONTYNENTY / LĄD
    style.layers
        .filter(l => l.type === "fill" && (l.id.includes("land") || l.id.includes("natural")))
        .forEach(l => {
            map.value.setLayoutProperty(l.id, "visibility", "visible");
            map.value.setPaintProperty(l.id, "fill-color", "#1a0b33");
            map.value.setPaintProperty(l.id, "fill-opacity", 1);
        });

    // ❌ WYŁĄCZ MAŁE WODY (rzeki, jeziora)
    style.layers.forEach(layer => {
        const id = layer.id;

        if (
            id.includes("waterway") ||
            id.includes("water-lake") ||
            id.includes("water-river") ||
            id.includes("water-depth") ||
            id.includes("water-body")
        ) {
            map.value.setLayoutProperty(id, "visibility", "none");
        }
    });

    // ❌ WYŁĄCZ NAPISY
    style.layers
        .filter(l => l.type === "symbol")
        .forEach(l => map.value.setLayoutProperty(l.id, "visibility", "none"));

    // ❌ WYŁĄCZ DROGI / BUDYNKI / POI / LANDCOVER
    style.layers.forEach(layer => {
        const id = layer.id;

        if (
            id.includes("road") ||
            id.includes("bridge") ||
            id.includes("building") ||
            id.includes("tunnel") ||
            id.includes("poi") ||
            id.includes("park") ||
            id.includes("landcover") ||
            id.includes("landuse") ||
            id.includes("hillshade")
        ) {
            map.value.setLayoutProperty(id, "visibility", "none");
        }
    });

    // ⭐ GRANICE PAŃSTW (admin-0)
    style.layers.forEach(layer => {
        const id = layer.id;
        if (id.includes("admin-0-boundary")) {
            map.value.setLayoutProperty(id, "visibility", "visible");
            map.value.setPaintProperty(id, "line-color", "#8ab7f6");
            map.value.setPaintProperty(id, "line-width", 0.4);
            map.value.setPaintProperty(id, "line-opacity", 0.9);
        }
    });

    // ⭐ GRANICE ADMINISTRACYJNE (admin-1 — stany, regiony, województwa)
    style.layers.forEach(layer => {
        const id = layer.id;
        if (id.includes("admin-1-boundary")) {
            map.value.setLayoutProperty(id, "visibility", "visible");
            map.value.setPaintProperty(id, "line-color", "#6fa0e6");
            map.value.setPaintProperty(id, "line-width", 0.2);
            map.value.setPaintProperty(id, "line-opacity", 0.8);
        }
    });

    // ❌ UKRYJ admin-2 (miasta itd.)
    style.layers.forEach(layer => {
        const id = layer.id;
        if (id.includes("admin-2")) {
            map.value.setLayoutProperty(id, "visibility", "none");
        }
    });
}

/* ---------------------
   MAP POINTS
---------------------- */
function addGlowPoints() {
    if (map.value.getSource("foundations")) return;

    map.value.addSource("foundations", {
        type: "geojson",
        data: {
            type: "FeatureCollection",
            features: foundations.value.map(f => ({
                type: "Feature",
                geometry: { type: "Point", coordinates: f.coords },
                properties: { id: f.id, name: f.name }
            }))
        }
    });

    map.value.addLayer({
        id: "foundation-glow",
        type: "circle",
        source: "foundations",
        paint: {
            "circle-radius": 14,
            "circle-color": "#00a1e6",
            "circle-blur": 0.8,
            "circle-opacity": 0.6
        }
    });

    map.value.addLayer({
        id: "foundation-point",
        type: "circle",
        source: "foundations",
        paint: {
            "circle-radius": 4,
            "circle-color": "#ffffff",
            "circle-opacity": 1
        }
    });

    const popup = new mapboxgl.Popup({
        closeButton: false,
        closeOnClick: false,
        className: "foundation-popup"
    });

    let currentPopupId = null;

    map.value.on("mouseenter", "foundation-point", e => {
        map.value.getCanvas().style.cursor = "pointer";

        const id = e.features[0].properties.id;
        const coords = e.features[0].geometry.coordinates.slice();
        const name = e.features[0].properties.name;

        // Jeśli popup jest już wyświetlony dla tego samego punktu, nie rób nic
        if (currentPopupId === id && popup.isOpen()) {
            return;
        }

        // Usuń poprzedni popup (jeśli istnieje)
        popup.remove();

        // Zapisz ID aktualnego popupu
        currentPopupId = id;

        // Dodaj nowy popup
        popup
            .setLngLat(coords)
            .setHTML(`<div class="popup-box">${name}</div>`)
            .addTo(map.value);
    });

    map.value.on("mouseleave", "foundation-point", () => {
        map.value.getCanvas().style.cursor = "";
        popup.remove();
        currentPopupId = null;
    });

    map.value.on("click", "foundation-point", e => {
        const id = e.features[0].properties.id;
        router.visit(route("front.foundation.single", id));
    });
}

/* ---------------------
   REGION SELECTORS
---------------------- */
function zoomToContinent(continent) {
    const box = continents[continent];
    if (!box) return;

    currentBox.value = box;
    applyAllFilters();

    map.value.fitBounds(box, { padding: 40, duration: 800 });
}

async function zoomToCountry(country) {
    if (!country || !country.trim()) return;

    const url = `https://api.mapbox.com/geocoding/v5/mapbox.places/${country}.json?types=country&access_token=${mapboxgl.accessToken}`;
    const res = await fetch(url);
    const data = await res.json();
    if (!data.features?.length) return;

    const feature = data.features[0];

    if (feature.bbox) {
        const [minLng, minLat, maxLng, maxLat] = feature.bbox;
        const box = [[minLng, minLat], [maxLng, maxLat]];

        currentBox.value = box;
        applyAllFilters();

        map.value.fitBounds(box, { padding: 40, duration: 900 });
    } else {
        const [lng, lat] = feature.center;
        map.value.flyTo({ center: [lng, lat], zoom: 5, duration: 900 });
    }
}

// Watcher — wykona zoomToCountry dla każdej wybranej pozycji
watch(selectedCountry, (newVal) => {
    if (newVal && newVal.name) {
        zoomToCountry(newVal.name);
    }
});

watch(selectedCategory, () => {
    applyAllFilters();
});
watch(() => props.foundations, () => {
    applyAllFilters(); // zaktualizuje widok
});
</script>

<template>
    <div class="space-y-8">
        <!-- FILTRY -->
        <div class="bg-gray-50/50 rounded-[2.5rem] p-6 md:p-8 border border-gray-100 shadow-sm">
            <div class="flex items-center gap-4 mb-6">
                <h3 class="text-[10px] font-black text-[#0A2C5C] uppercase tracking-[0.2em]">{{ __('translate.filter') || 'Filtruj' }}</h3>
                <div class="h-px flex-1 bg-gray-200/50"></div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <!-- Kraj -->
                <div class="space-y-2">
                    <label class="block text-[10px] font-black text-gray-400 mb-2 uppercase tracking-widest ml-2">{{ __('translate.Country') }}</label>
                    <multiselect
                        group-values="elements"
                        group-label="group"
                        :group-select="false"
                        :selectLabel="''"
                        :selectGroupLabel="''"
                        :selectedLabel="''"
                        :deselectLabel="''"
                        track-by="name"
                        :multiple="false"
                        label="name"
                        v-model="selectedCountry"
                        :placeholder="__('translate.Country')"
                        :options="optionsCountry"
                        class="custom-multiselect"
                    >
                        <template #noResult>
                            <span>{{__('translate.noOptions')}}</span>
                        </template>
                        <template #noOptions>
                            <span>{{__('translate.noResult')}}</span>
                        </template>
                    </multiselect>
                </div>

                <!-- Kategoria -->
                <div class="space-y-2">
                    <label class="block text-[10px] font-black text-gray-400 mb-2 uppercase tracking-widest ml-2">{{ __('continents.select_category') }}</label>
                    <multiselect
                        v-model="selectedCategory"
                        :options="props.categories"
                        :multiple="false"
                        track-by="id"
                        label="label"
                        :selectLabel="''"
                        :selectedLabel="''"
                        :deselectLabel="''"
                        :placeholder="__('continents.select_category')"
                        class="custom-multiselect"
                    >
                        <template #noResult>
                            <span>{{ __('continents.no_category') }}</span>
                        </template>
                    </multiselect>
                </div>

                <!-- Nazwa -->
                <div class="space-y-2">
                    <label class="block text-[10px] font-black text-gray-400 mb-2 uppercase tracking-widest ml-2">{{ __('continents.search_placeholder') }}</label>
                    <TextInput
                        type="text"
                        v-model="searchName"
                        @input="applyAllFilters"
                        class="w-full !rounded-2xl !bg-white !border-gray-200 focus:!ring-[#00a0e3]/10 focus:!border-[#00a0e3] !py-3.5 text-xs font-bold tracking-widest uppercase placeholder-gray-300 transition-all shadow-sm"
                        :placeholder="__('continents.search_placeholder')"
                    />
                </div>
            </div>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-4 gap-8">
            <!-- PRZYCISKI KONTYNENTÓW -->
            <div class="lg:col-span-1">
                <div class="flex items-center gap-4 mb-6">
                    <h3 class="text-[10px] font-black text-gray-400 uppercase tracking-[0.2em]">{{ __('translate.foundations') }}</h3>
                    <div class="h-px flex-1 bg-gray-100"></div>
                </div>

                <div class="grid grid-cols-2 lg:grid-cols-1 gap-3">
                    <button
                        v-for="(coords, key) in continents"
                        :key="key"
                        @click="zoomToContinent(key)"
                        class="group p-4 bg-white border border-gray-100 rounded-2xl shadow-sm hover:shadow-xl hover:shadow-blue-900/5 hover:-translate-y-1 transition-all duration-500 text-left relative overflow-hidden"
                    >
                        <div class="absolute top-0 right-0 w-12 h-12 bg-gray-50 rounded-full -mr-6 -mt-6 group-hover:scale-110 transition-transform duration-700"></div>
                        <div class="relative z-10 flex flex-col gap-1">
                            <span class="text-[9px] font-black text-gray-400 uppercase tracking-widest opacity-60 group-hover:text-[#00a0e3] transition-colors">
                                {{ __('translate.check') }}
                            </span>
                            <span class="text-xs font-black text-[#0A2C5C] uppercase tracking-widest">
                                {{ __('continents.' + key) }}
                            </span>
                        </div>
                    </button>
                </div>
            </div>

            <!-- MAPA -->
            <div class="lg:col-span-3">
                <div id="fundationMap" class="w-full h-full min-h-[500px] rounded-[2.5rem] overflow-hidden relative group/map">
                    <!-- Background placeholder for better look during load -->
                    <div class="absolute inset-0 bg-[#0d2a52] flex items-center justify-center -z-10 animate-pulse">
                        <div class="text-[10px] font-black text-white/20 uppercase tracking-[0.5em] animate-pulse">MAPBOX</div>
                    </div>
                </div>
            </div>
        </div>

        <!-- LISTA FUNDACJI -->
        <div class="space-y-8 pt-8 border-t border-gray-100">
            <div class="flex items-center justify-between gap-4">
                <div class="flex items-center gap-4 flex-1">
                    <h3 class="text-[10px] font-black text-[#0A2C5C] uppercase tracking-[0.2em]">{{ __('translate.foundations') }}</h3>
                    <div class="h-px flex-1 bg-gray-100"></div>
                </div>
                <div class="px-4 py-2 bg-blue-50 rounded-xl">
                    <span class="text-[10px] font-black text-[#00a0e3] uppercase tracking-widest">{{ visibleFoundations.length }} {{ __('translate.fundacji') }}</span>
                </div>
            </div>

            <div v-if="paginatedFoundations.length" class="grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-4 gap-6">
                <Link
                    v-for="f in paginatedFoundations"
                    :key="f.id"
                    :href="route('front.foundation.single', f.id)"
                    class="group bg-white rounded-[2rem] border border-gray-100 shadow-sm hover:shadow-xl hover:shadow-blue-900/5 transition-all duration-500 hover:-translate-y-2 p-6 flex flex-col h-full"
                >
                    <div class="flex items-start gap-4 mb-6">
                        <div class="w-16 h-16 bg-gray-50 rounded-2xl flex items-center justify-center shrink-0 border border-gray-100 group-hover:border-[#00a0e3]/20 transition-colors">
                            <img :src="f.logo" :alt="f.name" class="w-12 h-12 object-contain grayscale opacity-60 group-hover:grayscale-0 group-hover:opacity-100 transition-all duration-500" />
                        </div>
                        <div class="flex-1 min-w-0">
                            <span class="px-2 py-0.5 bg-blue-50 text-blue-500 font-black text-[8px] uppercase tracking-widest rounded-lg border border-blue-100/50 inline-block mb-2">
                                ID {{ f.id }}
                            </span>
                            <h3 class="text-sm font-black text-gray-900 uppercase tracking-tight leading-tight truncate group-hover:text-[#0A2C5C] transition-colors">
                                {{ f.name }}
                            </h3>
                        </div>
                    </div>

                    <div class="mt-auto space-y-3">
                        <div class="flex items-center justify-between">
                            <div class="flex items-center gap-2">
                                <svg class="w-3.5 h-3.5 text-gray-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                                <span class="text-[9px] font-black text-gray-400 uppercase tracking-widest truncate">
                                    {{ f.address_country.allTranslations[usePage().props.language] }}
                                </span>
                            </div>
                            <div>
                                <div class="h-px flex-1 bg-gray-50 mr-4"></div>
                                <div class="w-8 h-8 rounded-xl bg-gray-50 flex items-center justify-center text-gray-400 group-hover:bg-[#0A2C5C] group-hover:text-white transition-all shadow-sm">
                                    <span class="text-lg font-black leading-none">→</span>
                                </div>
                            </div>
                        </div>
                    </div>

                </Link>
            </div>

            <div v-else class="bg-white rounded-[3rem] p-20 text-center shadow-xl shadow-blue-900/5 border border-gray-100">
                <div class="w-20 h-20 bg-gray-50 rounded-full flex items-center justify-center mx-auto mb-6">
                    <svg class="w-10 h-10 text-gray-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path>
                    </svg>
                </div>
                <p class="text-xs font-black text-gray-400 uppercase tracking-widest">{{ __('continents.no_foundations') }}</p>
            </div>

            <!-- PAGINACJA -->
            <div v-if="visibleFoundations.length > pageSize" class="flex flex-wrap gap-4 items-center justify-center">
                <button
                    class="px-8 py-4 bg-white border border-gray-100 text-gray-500 text-[10px] font-black rounded-2xl uppercase tracking-widest hover:bg-gray-50 shadow-sm transition-all hover:-translate-y-0.5 disabled:opacity-50 disabled:cursor-not-allowed"
                    :disabled="currentPage === 1"
                    @click="currentPage--"
                >
                    ← {{__('translate.previous')}}
                </button>

                <div class="bg-[#0A2C5C] px-6 py-4 rounded-2xl shadow-lg shadow-blue-900/20">
                    <span class="text-[10px] font-black text-white uppercase tracking-widest">
                        {{__('translate.page')}} {{ currentPage }} / {{ totalPages }}
                    </span>
                </div>

                <button
                    class="px-8 py-4 bg-white border border-gray-100 text-gray-500 text-[10px] font-black rounded-2xl uppercase tracking-widest hover:bg-gray-50 shadow-sm transition-all hover:-translate-y-0.5 disabled:opacity-50 disabled:cursor-not-allowed"
                    :disabled="currentPage >= totalPages"
                    @click="currentPage++"
                >
                    {{__('translate.next')}} →
                </button>
            </div>
        </div>
    </div>
</template>
<style src="vue-multiselect/dist/vue-multiselect.css"></style>
<style lang="scss">
.custom-multiselect {
    .multiselect {
        &__tags {
            @apply rounded-2xl border-gray-100 bg-gray-50/50 py-3 px-4 min-h-[54px] flex items-center transition-all border-2;
        }

        &__placeholder {
            @apply text-[11px] font-black text-gray-400 uppercase tracking-widest pt-0 mb-0;
        }

        &__single {
            @apply bg-transparent text-[11px] font-black text-[#0A2C5C] uppercase tracking-widest pt-0 mb-0;
        }

        &__input {
            @apply bg-transparent text-[11px] font-black uppercase tracking-widest pt-0 mb-0;
        }

        &__select {
            @apply top-1/2 -translate-y-1/2 h-full flex items-center justify-center right-0;
            &::before {
                @apply border-t-gray-400 border-l-transparent border-r-transparent border-b-transparent border-t-[6px] border-x-[5px] relative top-0;
            }
        }

        &__content-wrapper {
            @apply rounded-2xl mt-2 border-none shadow-xl overflow-hidden;
        }

        &__option {
            @apply text-[10px] font-bold uppercase tracking-wider py-4;

            &--highlight {
                @apply bg-[#0A2C5C] text-white;
                &::after {
                    @apply bg-red-500 text-[10px] font-black uppercase tracking-widest px-4;
                }
            }

            &--selected {
                @apply bg-gray-100 text-[#0A2C5C] font-black;
                &::after {
                    @apply content-['✓'] bg-transparent text-green-500;
                }
            }

            &--group {
                @apply bg-gray-50/50 text-gray-400 text-[9px] font-black uppercase tracking-[0.2em] py-3 px-4;
            }
        }
    }

    .multiselect--active {
        .multiselect__tags {
            @apply border-[#0A2C5C] bg-white ring-4 ring-blue-900/5;
        }
    }

    .multiselect--disabled {
        @apply opacity-50;
        .multiselect__tags {
            @apply bg-gray-100;
        }
    }
}
</style>
