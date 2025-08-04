<script setup>
import ApplicationLogo from '@/Components/ApplicationLogo.vue';
</script>

<template>
    <div>
        <div class="p-6 lg:p-8 bg-white items-center justify-center flex">
            <ApplicationLogo class="block h-12 w-auto" />
            <h1 class="text-2xl font-medium text-gray-900">
                {{__('translate.welcomeWork')}}
            </h1>
        </div>
    </div>
</template>
