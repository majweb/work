<script setup>
import {computed, onBeforeUnmount, onMounted, ref} from "vue";
import autosize from "autosize/dist/autosize";

const el = ref();

let props = defineProps({
    limit: Number,
    modelValue:String,
    name:String
});
const emit = defineEmits(['update:modelValue'])
const instruction = computed(() => {
    return remaining.value+'/'+props.limit;
})
const remaining = computed(() => {
    return props.limit - (props.modelValue ? props.modelValue.length : 0);
})

onMounted(()=>{
    autosize(el.value);
});
onBeforeUnmount(()=>autosize.destroy(el.value));

const check = (event) => {
    if(event.target.value.length <= props.limit){
        emit('update:modelValue', event.target.value);
    }
}
</script>
<template>
    <div class="flex flex-col">
    <textarea ref="el" :maxlength="props.limit" @input="check($event)" :value="modelValue" class="block w-full text-sm rounded-md border-gray-300 shadow-sm">
    </textarea>
        <p :class="{'text-sm mt-1 text-right': true, 'text-red-400 font-bold': remaining==0}" class="relative">
        <span class="absolute right-0 -bottom-5">
            {{instruction}}
        </span>
        </p>
    </div>
</template>
