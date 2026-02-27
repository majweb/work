<script setup>
import { computed } from 'vue';
import { Link } from '@inertiajs/vue3';

const props = defineProps({
    href: String,
    active: Boolean,
});

const classes = computed(() => {
    return props.active
        ? 'inline-flex items-center px-4 py-2 text-[10px] font-black uppercase tracking-widest text-[#0A2C5C] bg-gray-50 rounded-xl transition duration-150 ease-in-out'
        : 'inline-flex items-center px-4 py-2 text-[10px] font-black uppercase tracking-widest text-gray-400 hover:text-[#0A2C5C] hover:bg-gray-50/50 rounded-xl transition duration-150 ease-in-out';
});
</script>

<template>
    <Link :href="href" :class="classes">
        <slot />
    </Link>
</template>
