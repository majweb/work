<script setup>
import { onMounted, ref } from "vue";
import mapboxgl from "mapbox-gl";
import { Link, router } from "@inertiajs/vue3";

mapboxgl.accessToken =
    "pk.eyJ1Ijoid29yazR5b3UiLCJhIjoiY21pc255bnNtMGJkcTNncXhzZDdveWowdCJ9.OWMREe5d718nrvgfNfGIMQ";

const visibleFoundations = ref([]);
const selectedCategory = ref("all");
const currentBox = ref(null);
const searchName = ref("");

const foundations = [
    { id: 1, name: "Sahara Aid", coords: [-6.5, 32], category: "Food" },
    { id: 2, name: "Kenya Support", coords: [37.5, 0.2], category: "Health" },
    { id: 3, name: "Brasil Kids", coords: [-50, -12], category: "Children" },
    { id: 4, name: "Peru Aid", coords: [-74, -9], category: "Food" },
    { id: 5, name: "Euro Hope", coords: [19, 52], category: "Education" },
    { id: 6, name: "Germany Support", coords: [10, 51], category: "Health" },
    { id: 7, name: "Asia Help", coords: [78, 20], category: "Children" }
];

const continents = {
    africa: [[-20, -35], [40, 38]],
    south_america: [[-90, -60], [-30, 15]],
    north_america: [[-170, 7], [-50, 80]],
    europe: [[-10, 34], [31, 72]],
    asia: [[40, -5], [150, 60]],
    oceania: [[110, -50], [180, 10]]
};

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
    });
});

/* ---------------------
   FILTERS
---------------------- */
function filterByCategory(list) {
    if (selectedCategory.value === "all") return list;
    return list.filter(f => f.category === selectedCategory.value);
}

function filterByName(list) {
    if (!searchName.value) return list;
    return list.filter(f =>
        f.name.toLowerCase().includes(searchName.value.toLowerCase())
    );
}

function getFoundationsInBox(box) {
    const result = foundations.filter(f => {
        const [lng, lat] = f.coords;
        const [[minLng, minLat], [maxLng, maxLat]] = box;
        return lng >= minLng && lng <= maxLng && lat >= minLat && lat <= maxLat;
    });

    return result;
}

function applyAllFilters() {
    let list = [];

    if (!currentBox.value) {
        list = foundations;
    } else {
        list = getFoundationsInBox(currentBox.value);
    }

    list = filterByCategory(list);
    list = filterByName(list);

    visibleFoundations.value = list;
}

/* ---------------------
   MAP STYLE
---------------------- */
function customizeLightStyle() {
    const style = map.value.getStyle();
    const bg = style.layers.find(l => l.type === "background");

    if (bg) {
        map.value.setPaintProperty(bg.id, "background-color", "#0d2a52");
    }

    style.layers
        .filter(l => l.id.includes("water") && l.type === "fill")
        .forEach(l => map.value.setPaintProperty(l.id, "fill-color", "#afceef"));

    style.layers.forEach(layer => {
        const id = layer.id;
        if (id.includes("waterway")) {
            map.value.setLayoutProperty(id, "visibility", "none");
        }

        if (
            id.includes("water-body") ||
            id.includes("natural-water") ||
            id.includes("water-lake") ||
            id.includes("water-river") ||
            id.includes("water-depth")
        ) {
            map.value.setLayoutProperty(id, "visibility", "none");
        }
    });

    style.layers
        .filter(l => l.type === "symbol")
        .forEach(l => map.value.setLayoutProperty(l.id, "visibility", "none"));

    style.layers.forEach(layer => {
        const id = layer.id;
        if (id.includes("road") || id.includes("building") || id.includes("poi")) {
            map.value.setLayoutProperty(id, "visibility", "none");
        }
    });

    style.layers.forEach(layer => {
        const id = layer.id;
        if (id.includes("admin-0-boundary")) {
            map.value.setLayoutProperty(id, "visibility", "visible");
            map.value.setPaintProperty(id, "line-color", "#8ab7f6");
            map.value.setPaintProperty(id, "line-opacity", 0.7);
            map.value.setPaintProperty(id, "line-width", 0.2);
        }
    });

    style.layers
        .filter(l => l.type === "fill" && (l.id.includes("land") || l.id.includes("natural")))
        .forEach(l => {
            map.value.setPaintProperty(l.id, "fill-color", "#1a0b33");
            map.value.setPaintProperty(l.id, "fill-opacity", 1);
        });
}

/* ---------------------
   MAP POINTS
---------------------- */
function addGlowPoints() {
    map.value.addSource("foundations", {
        type: "geojson",
        data: {
            type: "FeatureCollection",
            features: foundations.map(f => ({
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

        popup.setLngLat(coords).setHTML(`<div class="popup-box">${name}</div>`).addTo(map.value);
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
    currentBox.value = box;
    visibleFoundations.value = getFoundationsInBox(box);
    applyAllFilters();
    map.value.fitBounds(box, { padding: 40, duration: 800 });
}

async function zoomToCountry(country) {
    const url = `https://api.mapbox.com/geocoding/v5/mapbox.places/${country}.json?types=country&access_token=${mapboxgl.accessToken}`;
    const res = await fetch(url);
    const data = await res.json();
    if (!data.features?.length) return;

    const feature = data.features[0];

    if (feature.bbox) {
        const [minLng, minLat, maxLng, maxLat] = feature.bbox;
        const box = [[minLng, minLat], [maxLng, maxLat]];
        currentBox.value = box;
        visibleFoundations.value = getFoundationsInBox(box);
        applyAllFilters();
        map.value.fitBounds(box, { padding: 40, duration: 900 });
    }
}
</script>

<template>
    <div>
        <div class="mb-4">
            <input
                type="text"
                placeholder="Wpisz kraj..."
                class="border p-2 mt-4"
                @keyup.enter="zoomToCountry($event.target.value)"
            />

            <div class="mt-2">
                <select class="border p-2" v-model="selectedCategory" @change="applyAllFilters">
                    <option value="all">Wszystkie kategorie</option>
                    <option value="Food">Food</option>
                    <option value="Health">Health</option>
                    <option value="Children">Children</option>
                    <option value="Education">Education</option>
                </select>
            </div>

            <div class="mt-2">
                <input
                    type="text"
                    v-model="searchName"
                    @input="applyAllFilters"
                    class="border p-2 w-full"
                    placeholder="Szukaj fundacji..."
                />
            </div>
        </div>

        <div class="w-full grid grid-cols-1 md:grid-cols-4 gap-4">
            <div class="flex flex-col gap-3 text-lg font-semibold text-[#0d2a52]">
                <button class="p-3 border-2 border-work-main rounded-md" @click="zoomToContinent('africa')">Afryka</button>
                <button class="p-3 border-2 border-work-main rounded-md" @click="zoomToContinent('south_america')">Ameryka Pd. i Śr.</button>
                <button class="p-3 border-2 border-work-main rounded-md" @click="zoomToContinent('north_america')">Ameryka Płn.</button>
                <button class="p-3 border-2 border-work-main rounded-md" @click="zoomToContinent('asia')">Azja</button>
                <button class="p-3 border-2 border-work-main rounded-md" @click="zoomToContinent('europe')">Europa</button>
                <button class="p-3 border-2 border-work-main rounded-md" @click="zoomToContinent('oceania')">Australia i Oceania</button>
            </div>

            <div class="col-span-3">
                <div id="fundationMap" class="w-full h-full overflow-hidden"></div>
            </div>

            <div class="mt-6">
                <h3 class="font-bold mb-2 text-work-main">Fundacje w tym obszarze:</h3>

                <ul v-if="visibleFoundations.length">
                    <Link
                        :href="route('front.partner', f.id)"
                        v-for="f in visibleFoundations"
                        :key="f.id"
                        class="p-2 border-b block"
                    >
                        {{ f.name }}
                    </Link>
                </ul>

                <p v-else class="text-gray-500 text-sm">Brak fundacji w wybranym regionie.</p>
            </div>
        </div>
    </div>
</template>

<style>
</style>
