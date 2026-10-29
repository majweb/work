<script setup>
import { computed } from 'vue';

// Treść wiadomości z klikalnymi linkami. Tekst renderujemy jako węzły (bez v-html),
// więc treść od użytkownika pozostaje bezpieczna.
const props = defineProps({
    body: { type: String, required: true },
    isMine: { type: Boolean, default: false },
});

const URL_PATTERN = /(https?:\/\/[^\s<>"]+)/g;

const parts = computed(() => props.body.split(URL_PATTERN).map((text, index) => ({ text, isLink: index % 2 === 1 })));
</script>

<template>
    <p class="break-words whitespace-pre-wrap">
        <template v-for="(part, index) in parts" :key="index">
            <a
                v-if="part.isLink"
                :href="part.text"
                target="_blank"
                rel="noopener noreferrer nofollow"
                class="break-all underline"
                :class="isMine ? 'text-white' : 'text-[#0A2C5C]'"
            >{{ part.text }}</a>
            <template v-else>{{ part.text }}</template>
        </template>
    </p>
</template>
