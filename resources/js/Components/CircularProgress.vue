<template>
    <div class="relative w-20 h-20">
        <svg
            viewBox="0 0 36 36"
            class="w-full h-full -rotate-90 origin-center"
        >
            <!-- Tło -->
            <circle
                cx="18"
                cy="18"
                r="16"
                fill="none"
                stroke="#e5e7eb"
                stroke-width="2"
            />

            <!-- Progress -->
            <circle
                cx="18"
                cy="18"
                r="16"
                fill="none"
                :stroke="strokeColor"
                stroke-width="2"
                stroke-linecap="round"
                :stroke-dasharray="circumference"
                :stroke-dashoffset="dashOffset"
                class="transition-all duration-700 ease-out"
            />
        </svg>

        <!-- Tekst w środku -->
        <div
            class="absolute inset-0 flex items-center justify-center text-sm font-semibold"
        >
            {{ value }}%
        </div>
    </div>
</template>

<script setup lang="ts">
import { computed } from "vue"

const props = defineProps<{
    value: number
    color?: "blue" | "red" | "gray" | "cyan"
}>()

/* ===== SVG ===== */
const radius = 16
const circumference = 2 * Math.PI * radius

/* ===== Progress ===== */
const dashOffset = computed(() => {
    const clamped = Math.min(Math.max(props.value, 0), 100)
    return circumference * (1 - clamped / 100)
})

/* ===== Kolor ===== */
const strokeColor = computed(() => {
    switch (props.color) {
        case "red":
            return "#dc2626" // red-600
        case "gray":
            return "#d1d5db" // gray-300
        case "cyan":
            return "#06b6d4" // cyan-500
        default:
            return "#1e3a8a" // blue-900
    }
})
</script>
