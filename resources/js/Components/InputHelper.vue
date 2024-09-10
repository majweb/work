<script setup>
defineProps({
    id: String,
});
</script>

<template>
    <p :id="id" class="mt-1 text-sm text-gray-400 dark:text-gray-400"><slot /></p>
</template>
