<script setup>
import { Link } from '@inertiajs/vue3';

defineProps({
    href: String,
    as: String,
});
</script>

<template>
    <button v-if="as == 'button'" type="submit" v-bind="$attrs" class="block w-full px-5 py-3 text-start text-[10px] font-black uppercase tracking-widest text-gray-500 hover:text-[#0A2C5C] hover:bg-gray-50 transition duration-150 ease-in-out">
        <slot />
    </button>

    <a v-else-if="as =='a'" :href="href" v-bind="$attrs" class="block px-5 py-3 text-[10px] font-black uppercase tracking-widest text-gray-500 hover:text-[#0A2C5C] hover:bg-gray-50 transition duration-150 ease-in-out">
        <slot />
    </a>

    <Link v-else :href="href" v-bind="$attrs" class="block px-5 py-3 text-[10px] font-black uppercase tracking-widest text-gray-500 hover:text-[#0A2C5C] hover:bg-gray-50 transition duration-150 ease-in-out">
        <slot />
    </Link>
</template>
