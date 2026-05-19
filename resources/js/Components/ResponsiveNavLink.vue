<script setup>
import { computed, useAttrs } from 'vue';
import { Link } from '@inertiajs/vue3';

const props = defineProps({
    active: Boolean,
    href: String,
    as: String,
});

const classes = computed(() => {
    return (props.active
        ? 'block w-full ps-3 pe-4 py-3 border-l-4 border-[#00a0e3] text-start text-base font-bold text-[#0A2C5C] bg-blue-50/50 rounded-r-xl transition duration-150 ease-in-out uppercase'
        : 'block w-full ps-3 pe-4 py-3 border-l-4 border-transparent text-start text-base font-medium text-gray-600 hover:text-[#0A2C5C] hover:bg-gray-50 hover:border-gray-300 rounded-r-xl transition duration-150 ease-in-out uppercase')
        + ' ' + (useAttrs().class || '');
});
</script>

<template>
    <div>
        <button v-if="as == 'button'" :class="classes">
            <slot />
        </button>

        <Link v-else :href="href" :class="classes">
            <slot />
        </Link>
    </div>
</template>
