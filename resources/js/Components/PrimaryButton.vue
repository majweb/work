<script setup>
defineProps({
    type: {
        type: String,
        default: 'submit',
    },
});
</script>

<template>
    <button :type="type" class="inline-flex items-center px-8 py-3 bg-[#0A2C5C] border border-transparent rounded-xl font-black text-[10px] text-white uppercase tracking-widest hover:bg-[#00a0e3] focus:bg-blue-800 active:bg-[#0A2C5C] shadow-lg shadow-blue-900/20 focus:outline-none focus:ring-2 focus:ring-blue-900 focus:ring-offset-2 disabled:opacity-50 transition ease-in-out duration-150">
        <slot />
    </button>
</template>
