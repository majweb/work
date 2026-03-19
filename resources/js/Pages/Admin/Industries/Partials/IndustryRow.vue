<script setup>
import { Link, usePage } from '@inertiajs/vue3';

const props = defineProps({
    item: Object,
    level: {
        type: Number,
        default: 0
    }
});

const emit = defineEmits(['delete']);

const getTranslation = (value) => {
    if (!value) return '-';
    if (typeof value === 'object') {
        const locale = usePage().props.locale || 'pl';
        return value[locale] || value['pl'] || Object.values(value)[0] || '-';
    }
    return value || '-';
};
</script>

<template>
    <!-- Row for current item -->
    <tr class="group hover:bg-blue-50/30 transition-colors border-b border-gray-50/50">
        <td class="p-8">
            <span class="text-xs font-bold text-gray-400 group-hover:text-blue-500 transition-colors">{{ item.id }}</span>
        </td>
        <td class="p-8" :style="{ paddingLeft: (level * 2 + 2) + 'rem' }">
            <div class="flex items-center gap-4">
                <div v-if="level > 0" class="text-gray-300">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="3" stroke="currentColor" class="w-4 h-4">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 19.5 15-15m0 0H8.25m11.25 0v11.25" />
                    </svg>
                </div>
                <div v-else class="w-10 h-10 rounded-xl bg-blue-100 flex items-center justify-center text-blue-600 font-black text-xs">
                    {{ (getTranslation(item.title) || '').charAt(0) }}
                </div>
                <div>
                    <div class="text-sm font-black text-[#0A2C5C] group-hover:text-blue-600 transition-colors">
                        {{ getTranslation(item.title) }}
                    </div>
                    <div class="text-[10px] font-bold text-gray-400 uppercase tracking-tighter mt-0.5">
                        {{ level === 0 ? 'Główna branża' : 'Podbranża' }}
                    </div>
                </div>
            </div>
        </td>
        <td class="p-8">
            <span
                class="px-4 py-1.5 rounded-lg text-[10px] font-black uppercase tracking-widest"
                :class="level === 0 ? 'bg-blue-50 text-blue-600' : 'bg-gray-50 text-gray-500'"
            >
                {{ level === 0 ? 'BRANŻA' : 'PODBRANŻA' }}
            </span>
        </td>
        <td class="p-8">
            <span class="text-xs font-medium text-gray-500">{{ item.name }}</span>
        </td>
        <td class="p-8">
            <div class="flex items-center justify-end gap-3 opacity-0 group-hover:opacity-100 transition-all transform translate-x-4 group-hover:translate-x-0">
                <Link
                    :href="route('admin.industries.edit', item.id)"
                    class="p-3 bg-white shadow-sm border border-gray-100 rounded-xl text-blue-500 hover:bg-blue-500 hover:text-white transition-all active:scale-95"
                >
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-4 h-4">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" />
                    </svg>
                </Link>
                <button
                    @click="emit('delete', item)"
                    class="p-3 bg-white shadow-sm border border-gray-100 rounded-xl text-red-500 hover:bg-red-500 hover:text-white transition-all active:scale-95"
                >
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-4 h-4">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-1.808c0-1.175-.867-2.145-2.045-2.145h-2.912c-1.178 0-2.045.97-2.045 2.145V5.79m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                    </svg>
                </button>
            </div>
        </td>
    </tr>
    <!-- Children -->
    <template v-if="item.children && item.children.length > 0">
        <IndustryRow
            v-for="child in item.children"
            :key="child.id"
            :item="child"
            :level="level + 1"
            @delete="emit('delete', $event)"
        />
    </template>
    <template v-else-if="item.descendants && item.descendants.length > 0">
        <!-- If using descendants flat list from HasRecursiveRelationships tree() or similar,
             this might need logic to filter only immediate children,
             but tree() usually nests them in 'children'.
             However, descendants is usually flat unless scoped.
        -->
    </template>
</template>
