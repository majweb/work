<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import Welcome from '@/Components/Welcome.vue';
import {usePermission} from "@/Composables/usePermission.js";
import {Link} from "@inertiajs/vue3";
const {hasRole} = usePermission();

const props = defineProps({
    chart: Object,
    countQuestions: Number,
});
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
                    <Welcome />
                    <div v-if="hasRole('admin')">
                        <div v-if="hasRole('admin')">
                            <div class="p-6">
                                <h3 class="text-lg font-semibold mb-4">{{ __('translate.panelAdmin') }}</h3>
                                <div class="bg-blue-100 border-l-4 border-blue-500 p-4 rounded-lg">
                                    <div class="flex items-center justify-between">
                                        <div>
                                            <p class="text-blue-700 font-medium">{{ __('translate.panelAdminQuestions') }}</p>
                                            <p class="text-3xl font-bold text-blue-800 mt-1">{{ countQuestions }}</p>
                                        </div>
                                        <Link
                                            v-if="countQuestions > 0"
                                            :href="route('admin.questions-accepts.index')"
                                            class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded-lg transition-colors duration-200"
                                        >
                                            {{ __('translate.panelAdminGoTo') }}
                                        </Link>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div v-else-if="hasRole('worker')">
                        Pracownik
                    </div>
                    <div v-else-if="hasRole('recruit')">
                        Rekruter
                    </div>
                    <div v-else-if="hasRole('firm')">
                        Firma
                        <apexchart :width="chart.width" :height="chart.height" :type="chart.type" :options="chart.options" :series="chart.series"></apexchart>
                    </div>








                </div>
            </div>
        </div>
    </AppLayout>
</template>
