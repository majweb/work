<script setup>
import { computed } from 'vue';

const emit = defineEmits(['update:checked', 'change']);

const props = defineProps({
    checked: {
        type: [Array, Boolean],
        default: false,
    },
    value: {
        type: String,
        default: null,
    },
});

const proxyChecked = computed({
    get() {
        return props.checked;
    },

    set(val) {
        emit('update:checked', val);
    },
});

const handleChange = (event) => {
    emit('change', event.target.checked);
};
</script>


<template>
    <input
        v-model="proxyChecked"
        type="checkbox"
        :value="value"
        @change="handleChange"
        class="rounded border-[#0d2a52] text-[#0d2a52] shadow-sm focus:[#0d2a52]"
    >
</template>
