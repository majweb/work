<script setup>
import { ref, onMounted, onBeforeUnmount } from "vue";
import { usePage } from "@inertiajs/vue3";
import mapboxgl from "mapbox-gl";
import "mapbox-gl/dist/mapbox-gl.css";

const props = defineProps({
    project: {
        type: Object,
        required: true,
    },
    markerColor: {
        type: String,
        default: '#e31e24',
    },
    popup: {
        type: Boolean,
        default: false,
    },
    zoom: {
        type: Number,
        default: 14,
    },
});

const mapContainer = ref(null);
let map = null;

// Wartości wstawiane przez formularz, gdy geocoder nie zwrócił danej części adresu
const isFilled = (value) => value && value !== '-';

// Stare projekty mogą nie mieć zapisanych współrzędnych - wtedy geokodujemy adres tekstowy
const geocodeAddress = async () => {
    const { streetWork, streetWorkNumber, postalWork, cityWork, countryWork } = props.project;

    const street = isFilled(streetWork) && streetWork !== cityWork
        ? [streetWork, isFilled(streetWorkNumber) ? streetWorkNumber : ''].join(' ').trim()
        : '';
    const city = [postalWork, cityWork].filter(isFilled).join(' ');
    const query = [street, city].filter(Boolean).join(', ');

    if (!query) return null;

    const params = new URLSearchParams({
        access_token: usePage().props.mapboxToken,
        limit: '1',
    });
    if (countryWork?.countryCode) {
        params.set('country', countryWork.countryCode.toLowerCase());
    }

    const response = await fetch(`https://api.mapbox.com/geocoding/v5/mapbox.places/${encodeURIComponent(query)}.json?${params}`);
    const data = await response.json();

    return data.features?.[0]?.center ?? null;
};

const resolveCoords = async () => {
    const lat = parseFloat(props.project.lat);
    const lng = parseFloat(props.project.lng);

    if (Number.isFinite(lat) && Number.isFinite(lng)) {
        return [lng, lat];
    }

    return geocodeAddress();
};

const buildPopup = () => {
    const { cityWork, streetWork, streetWorkNumber } = props.project;
    const content = document.createElement('div');
    content.className = 'p-2';

    const cityEl = document.createElement('p');
    cityEl.className = 'font-semibold';
    cityEl.textContent = cityWork || '';
    content.appendChild(cityEl);

    if (isFilled(streetWork) && streetWork !== cityWork) {
        const streetEl = document.createElement('p');
        streetEl.className = 'text-sm text-gray-600';
        streetEl.textContent = [streetWork, isFilled(streetWorkNumber) ? streetWorkNumber : ''].join(' ').trim();
        content.appendChild(streetEl);
    }

    return new mapboxgl.Popup({ offset: 25 }).setDOMContent(content);
};

onMounted(async () => {
    try {
        const coords = await resolveCoords();
        if (!coords || !mapContainer.value) return;

        mapboxgl.accessToken = usePage().props.mapboxToken;

        map = new mapboxgl.Map({
            container: mapContainer.value,
            style: "mapbox://styles/mapbox/light-v11",
            center: coords,
            zoom: props.zoom,
            attributionControl: false
        });

        const marker = new mapboxgl.Marker({ color: props.markerColor }).setLngLat(coords);
        if (props.popup) {
            marker.setPopup(buildPopup());
        }
        marker.addTo(map);

        map.addControl(new mapboxgl.NavigationControl(), 'top-right');
    } catch (error) {
        console.error('Error loading map:', error);
    }
});

onBeforeUnmount(() => {
    map?.remove();
    map = null;
});
</script>

<template>
    <div ref="mapContainer" class="w-full h-full"></div>
</template>
