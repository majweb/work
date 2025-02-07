<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import Welcome from '@/Components/Welcome.vue';

const props = defineProps({
    chart: Object,
})

</script>

<template>
    <AppLayout :title="__('translate.dashboard')">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{__('translate.dashboard')}}
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    <apexchart :width="chart.width" :height="chart.height" :type="chart.type" :options="chart.options" :series="chart.series"></apexchart>

                    <Welcome />
                </div>
            </div>
        </div>
    </AppLayout>
</template>
