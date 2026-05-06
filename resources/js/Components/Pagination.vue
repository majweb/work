<script setup>
import { Link } from '@inertiajs/vue3';
import { computed } from 'vue';

const props = defineProps({
    links: Array
});

const isPrevious = (label) => label.includes('Previous') || label.includes('Poprzednia') || label.includes('&laquo;');
const isNext = (label) => label.includes('Next') || label.includes('Następna') || label.includes('&raquo;');

const cleanLabel = (label) => {
    if (isPrevious(label)) return '';
    if (isNext(label)) return '';
    return label;
};
</script>

<template>
    <div v-if="links && links.length > 3">
        <nav class="flex flex-wrap justify-center items-center gap-2" aria-label="Pagination">
            <template v-for="(link, key) in links" :key="key">
                <!-- Disabled or Static (Current page as text if needed, but here we use Link for all) -->
                <div
                    v-if="link.url === null"
                    class="inline-flex items-center justify-center min-w-[40px] h-[40px] px-3 text-sm font-medium text-gray-400 bg-white border border-gray-100 rounded-xl cursor-not-allowed transition-all"
                    :class="{ 'hidden sm:inline-flex': !isPrevious(link.label) && !isNext(link.label) }"
                >
                    <template v-if="isPrevious(link.label)">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd" />
                        </svg>
                    </template>
                    <template v-else-if="isNext(link.label)">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                        </svg>
                    </template>
                    <span v-else v-html="cleanLabel(link.label)"></span>
                </div>

                <!-- Active or Regular Link -->
                <Link
                    v-else
                    preserveScroll
                    :href="link.url"
                    class="inline-flex items-center justify-center min-w-[40px] h-[40px] px-3 text-sm font-bold rounded-xl transition-all duration-200 shadow-sm border"
                    :class="[
                        link.active
                            ? 'bg-[#0A2C5C] text-white border-[#0A2C5C] shadow-blue-900/20'
                            : 'bg-white text-gray-600 border-gray-100 hover:border-[#0A2C5C] hover:text-[#0A2C5C] hover:-translate-y-0.5',
                        { 'hidden sm:inline-flex': !isPrevious(link.label) && !isNext(link.label) }
                    ]"
                >
                    <template v-if="isPrevious(link.label)">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd" />
                        </svg>
                    </template>
                    <template v-else-if="isNext(link.label)">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                        </svg>
                    </template>
                    <span v-else v-html="cleanLabel(link.label)"></span>
                </Link>
            </template>
        </nav>
    </div>
</template>

