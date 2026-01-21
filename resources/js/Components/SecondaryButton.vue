<script setup>
defineProps({
    type: {
        type: String,
        default: 'button',
    },
});
</script>

<template>
    <button :type="type" class="inline-flex items-center px-4 py-2 bg-white border border-work-main rounded-md font-semibold text-xs text-work-main uppercase tracking-widest shadow-sm hover:bg-work-main hover:text-white focus:outline-none focus:ring-2 focus:ring-work-main focus:ring-offset-2 disabled:opacity-25 transition ease-in-out duration-150">
        <slot />
    </button>
</template>
