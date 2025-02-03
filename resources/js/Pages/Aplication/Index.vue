<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
</script>

<template>
    <AppLayout :title="__('translate.aplications')">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{__('translate.aplications')}}
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    {{__('translate.aplications')}}
                </div>
            </div>
        </div>
    </AppLayout>
</template>
