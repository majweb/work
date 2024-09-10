<script setup>
defineProps({
    message: String,
});
</script>
<template>
    <div v-show="message">
        <div class="col-span-6">
            <div class="py-2 rounded-lg bg-indigo-50 my-2" role="alert">
                <p class="text-sm text-gray-600 flex items-center font-semibold justify-center">
                    {{ message }}
                </p>
            </div>
        </div>
    </div>
</template>
