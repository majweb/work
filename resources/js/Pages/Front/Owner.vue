<script setup>
import { ref, computed } from 'vue';
import FrontLayout from "@/Layouts/FrontLayout.vue";

const props = defineProps({
    page: Object,
    langs: Array
});



</script>

<template>
    <FrontLayout
        :title="props.page.title"
        :image="props.page.image"
        :keywords="props.page.keywords"
        :description="props.page.description"
        :url="route('front.owner')"
        type="website"
    >
        <div class="py-24 bg-gray-50/50 dark:bg-gray-900/50 min-h-screen relative overflow-hidden">
            <!-- Background Decorations -->
            <div class="absolute top-0 right-0 w-[500px] h-[500px] bg-blue-100/30 dark:bg-blue-900/10 rounded-full -mr-64 -mt-64 blur-3xl"></div>
            <div class="absolute bottom-0 left-0 w-[400px] h-[400px] bg-red-50/20 dark:bg-red-900/10 rounded-full -ml-48 -mb-48 blur-3xl"></div>

            ssss
        </div>
    </FrontLayout>
</template>

