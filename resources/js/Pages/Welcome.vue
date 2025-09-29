<script setup>
import ApplicationLogo from "@/Components/ApplicationLogo.vue";
import FrontLayout from "@/Layouts/FrontLayout.vue";

defineProps({
    page: Object,
    imageUrl:String
});
</script>
<template>
    <FrontLayout
        :title="page.title"
        :image="page.image"
        :keywords="page.keywords"
        :description="page.description"
        :imageUrl="imageUrl"
    >
<!--        <div class="flex items-center justify-center">-->
<!--            {{ __('test.mama', {test: 'aaaaa', oko: 'asdasds'}) }}-->
<!--        </div>-->
    </FrontLayout>
</template>
