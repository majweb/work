<script setup>
import FrontLayout from "@/Layouts/FrontLayout.vue";

const props = defineProps({
    page: Object
});
</script>
<template>
    <FrontLayout
        :title="props.page.title"
        :image="props.page.image"
        :keywords="props.page.keywords"
        :description="props.page.description"
        :url="route('front.terms')"
        type="website"
    >
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg p-6">
                    Regulamin
                </div>
            </div>
        </div>
    </FrontLayout>
</template>
