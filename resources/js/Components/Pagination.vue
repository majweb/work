<script setup>
import { Link } from '@inertiajs/vue3';
const props = defineProps({
    links: Array
});
</script>
<template>
    <div v-if="links && links.length > 3">
        <div class="flex flex-wrap justify-center -mb-1">
            <template v-for="(link, key) in links" :key="key">
                <div
                    v-if="link.url === null"
                    class="px-4 py-3 mb-1 mr-1 text-sm leading-4 text-gray-400 border rounded"
                    v-html="link.label"
                />
                <Link
                    v-else
                    :href="link.url"
                    class="px-4 py-3 mb-1 mr-1 text-sm leading-4 border rounded hover:bg-[#143d8c] focus:border-[#0a2c5c] focus:text-white"
                    :class="{ 'bg-[#0a2c5c] text-white': link.active, 'text-[#0a2c5c] hover:text-white': !link.active }"
                    v-html="link.label"
                />
            </template>
        </div>
    </div>
</template>

