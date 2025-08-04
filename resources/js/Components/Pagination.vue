<template>
    <div v-show="links.length > 2" class="flex justify-center">
        <div class="flex flex-wrap -mb-1">
            <template v-for="(link, key) in links" :key="key">
                <div v-if="link.url === null" :key="`${key}-disabled`" class="mr-1 mb-1 px-4 py-3 text-sm leading-4 text-gray-600 dark:text-gray-400 border rounded" v-html="link.label"/>
                <Link v-else :key="key" class="mr-1 mb-1 px-4 py-3 transition text-sm leading-4 border rounded hover:dark:bg-gray-50 hover:bg-gray-200 text-gray-600 dark:text-gray-400 focus:border-gray-500 focus:text-gray-500" :class="{ 'border-gray-500 text-gray-500 font-semibold': link.active }" :href="link.url" preserve-scroll>
                    <span v-html="link.label"></span>
                </Link>
            </template>
        </div>
    </div>
</template>
<script setup>
import { Link } from '@inertiajs/vue3';
const props = defineProps({
    links: Array
});

</script>
