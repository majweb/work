<script setup>
import {onMounted, ref, computed, watch} from "vue";
import mapboxgl from "mapbox-gl";
import {Link, router, usePage} from "@inertiajs/vue3";
import Multiselect from "vue-multiselect";
import __ from "@/lang.js";
import TextInput from "@/Components/TextInput.vue";

mapboxgl.accessToken =
    "pk.eyJ1Ijoid29yazR5b3UiLCJhIjoiY21pc255bnNtMGJkcTNncXhzZDdveWowdCJ9.OWMREe5d718nrvgfNfGIMQ";

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
        offset: 10,
        className: "foundation-popup"
    });

    map.value.on("mouseenter", "foundation-point", e => {
        map.value.getCanvas().style.cursor = "pointer";
        const coords = e.features[0].geometry.coordinates;
        const name = e.features[0].properties.name;

        popup
            .setLngLat(coords)
            .setHTML(`<div class="popup-box">${name}</div>`)
            .addTo(map.value);
    });

    map.value.on("mouseleave", "foundation-point", () => {
        map.value.getCanvas().style.cursor = "";
        popup.remove();
    });

    map.value.on("click", "foundation-point", e => {
        const id = e.features[0].properties.id;
        router.visit(route("front.partner", id));
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
    <div>
        <div class="mb-4 grid grid-cols-1 md:grid-cols-3 gap-2">
            <div>
                <multiselect
                    group-values="elements" group-label="group"
                    :group-select="false"
                    :selectLabel="__('translate.selectLabel')"
                    :selectGroupLabel="__('translate.selectGroupLabel')"
                    :selectedLabel="__('translate.selectedLabel')"
                    :deselectLabel="__('translate.deselectLabel')"
                    track-by="name"
                    :multiple="false"
                    label="name"
                    v-model="selectedCountry"
                    :placeholder="__('translate.Country')"
                    :options="optionsCountry">
                    <template #noResult>
                        <span>{{__('translate.noOptions')}}</span>
                    </template>
                    <template #noOptions>
                        <span>{{__('translate.noResult')}}</span>
                    </template>
                </multiselect>
            </div>
            <div>
                <multiselect
                    v-model="selectedCategory"
                    :options="props.categories"
                    :multiple="false"
                    track-by="id"
                    label="label"
                    :placeholder="__('continents.select_category')"
                    @input="applyAllFilters"
                >
                    <template #noResult>
                        <span>{{ __('continents.no_category') }}</span>
                    </template>
                </multiselect>
            </div>
            <div>
                <TextInput
                    type="text"
                    v-model="searchName"
                    @input="applyAllFilters"
                    class="p-2 w-full"
                    :placeholder="__('continents.search_placeholder')"
                />
            </div>
        </div>

        <div class="w-full grid grid-cols-1 md:grid-cols-4">
            <div class="grid grid-cols-2 sm:grid-cols-1 gap-3 text-lg font-semibold text-[#0d2a52]">
                <button
                    class="p-3 border-2 border-work-main rounded-md transition hover:bg-work-main hover:text-white"
                    @click="zoomToContinent('africa')"
                >
                    {{ __('continents.africa') }}
                </button>
                <button
                    class="p-3 border-2 border-work-main rounded-md transition hover:bg-work-main hover:text-white"
                    @click="zoomToContinent('south_america')"
                >
                    {{ __('continents.south_america') }}
                </button>
                <button
                    class="p-3 border-2 border-work-main rounded-md transition hover:bg-work-main hover:text-white"
                    @click="zoomToContinent('north_america')"
                >
                    {{ __('continents.north_america') }}
                </button>
                <button
                    class="p-3 border-2 border-work-main rounded-md transition hover:bg-work-main hover:text-white"
                    @click="zoomToContinent('asia')"
                >
                    {{ __('continents.asia') }}
                </button>
                <button
                    class="p-3 border-2 border-work-main rounded-md transition hover:bg-work-main hover:text-white"
                    @click="zoomToContinent('europe')"
                >
                    {{ __('continents.europe') }}
                </button>
                <button
                    class="p-3 border-2 border-work-main rounded-md transition hover:bg-work-main hover:text-white"
                    @click="zoomToContinent('oceania')"
                >
                    {{ __('continents.oceania') }}
                </button>
            </div>

            <div class="col-span-3">
                <div id="fundationMap" class="w-full h-full min-h-[400px] overflow-hidden mt-4"></div>
            </div>

            <div class="mt-6 md:col-span-4">
                <div v-if="paginatedFoundations.length"
                     class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">

                    <Link
                        v-for="f in paginatedFoundations"
                        :key="f.id"
                        :href="route('front.partner', f.id)"
                        class="flex flex-col gap-2 border rounded-xl p-4 shadow-sm hover:shadow-md transition cursor-pointer"
                    >
                        <div class="flex items-start gap-3">
                            <!-- Logo -->
                            <img
                                :src="f.logo"
                                alt=""
                                class="h-12 object-contain"
                            />

                            <!-- Nazwa + kraj -->
                            <div>
                                <h3 class="font-semibold text-gray-800 leading-tight">
                                    {{ f.name }}
                                </h3>
                                <p class="text-sm text-gray-500">
                                    {{ f.address_country.allTranslations[usePage().props.language] }}
                                </p>
                            </div>
                        </div>

                        <!-- Kategoria -->
                        <p class="text-sm text-gray-600 mt-auto">
                            {{ f.category }}
                        </p>
                    </Link>

                </div>




                <p v-else class="text-gray-500 text-sm">
                    {{ __('continents.no_foundations') }}
                </p>

                <!-- PAGINACJA -->
                <div
                    v-if="visibleFoundations.length > pageSize"
                    class="flex flex-wrap gap-4 mt-4 items-center"
                >
                    <button
                        class="px-4 py-2 border rounded disabled:opacity-50"
                        :disabled="currentPage === 1"
                        @click="currentPage--"
                    >
                        ← {{__('translate.previous')}}
                    </button>

                    <span class="font-semibold">
                        {{__('translate.page')}} {{ currentPage }} / {{ totalPages }}
                    </span>

                    <button
                        class="px-4 py-2 border rounded disabled:opacity-50"
                        :disabled="currentPage >= totalPages"
                        @click="currentPage++"
                    >
                        {{__('translate.next')}} →
                    </button>
                </div>
            </div>
        </div>
    </div>
</template>
<style src="vue-multiselect/dist/vue-multiselect.css"></style>
<style lang="scss">
.multiselect__tags{
    border:1px solid #0A2E6D;
}
.multiselect__tag{
    background: #0A2E6D !important;
}
.multiselect__option--highlight {
    background: #0A2E6D !important;
    outline: none;
    color: white;
}

.multiselect__option--highlight:after {
    content: attr(data-select);
    background: #0A2E6D !important;
    color: white;
}

.multiselect__option--selected {
    background: #00A0E3B2 !important;
    color: #35495E;
    font-weight: bold;
}

.multiselect__option--selected.multiselect__option--highlight {
    background: #00A0E3B2 !important;
    color: #fff;
}

.multiselect__option--selected.multiselect__option--highlight:after {
    background: #00A0E3B2 !important;
    content: attr(data-deselect);
    color: white !important;
}

.multiselect__option--selected:after {
    content: attr(data-selected);
    color: #00A0E3B2;
    background: transparent !important;
}
.multiselect__select{
    height: 98%;
    background: rgba(10, 46, 109, 0.14);
}
.multiselect__select::before{
    border-color: #0A2E6D transparent transparent;
}
.multiselect--disabled.multiselect .multiselect__select{
    background: rgba(10, 46, 109, 0.14);
}
</style>
