<script setup>
import ApplicationLogo from "@/Components/ApplicationLogo.vue";
import FrontLayout from "@/Layouts/FrontLayout.vue";

defineProps({
    page: Object
});
</script>




<template>
    <FrontLayout
        :title="page.title"
        :image="page.image"
        :keywords="page.keywords"
        :description="page.description"
    >
        <main class="mt-6 min-h-screen flex items-center justify-center">
            <div class="flex items-center justify-center">
                <ApplicationLogo class="block h-auto w-auto"/>
            </div>
            <h2>Moja mama</h2>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati, quidem!
            </p>
            {{ __('test.mama', {test: 'aaaaa', oko: 'asdasds'}) }}
        </main>
    </FrontLayout>
</template>
