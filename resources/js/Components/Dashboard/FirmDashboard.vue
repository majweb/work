<template>
    <div class="p-6 bg-white overflow-hidden shadow-xl sm:rounded-lg">
        <h3>Panel Firmy</h3>
        <apexchart :width="chart.width" :height="chart.height" :type="chart.type" :options="chart.options" :series="chart.series"></apexchart>
    </div>
</template>

<script setup>
const props = defineProps({
    chart: Object
});
import ApexCharts from "vue3-apexcharts";
</script>
