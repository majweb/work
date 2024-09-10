<script setup>
import ApplicationLogo from "@/Components/ApplicationLogo.vue";
import FrontLayout from "@/Layouts/FrontLayout.vue";
</script>

<template>
    <FrontLayout title="Welcome">
    <main class="mt-6 min-h-screen flex items-center justify-center">
        <div class="flex items-center justify-center">
            <ApplicationLogo class="block h-auto w-auto" />
        </div>
        {{__('test.mama',{test:'aaaaa',oko:'asdasds'})}}
    </main>
    </FrontLayout>
</template>
