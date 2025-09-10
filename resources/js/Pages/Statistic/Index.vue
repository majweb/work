<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';

const props = defineProps({
    ProjectsRecruits: Object,
    AppsRecruits: Object,
    recruiters: {
        type: Array,
        default: () => []
    }
});

</script>

<template>
    <AppLayout :title="__('translate.statistics')">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{__('translate.statistics')}}
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6">
                    <h3 class="text-lg font-bold mb-6">
                        {{ __('translate.recruiterStatistics') }}
                    </h3>
                    <div class="flex items-center">
                        <apexchart :width="ProjectsRecruits?.width" :height="ProjectsRecruits?.height" :type="ProjectsRecruits?.type" :options="ProjectsRecruits?.options" :series="ProjectsRecruits?.series"></apexchart>
                        <apexchart :width="AppsRecruits?.width" :height="AppsRecruits?.height" :type="AppsRecruits?.type" :options="AppsRecruits?.options" :series="AppsRecruits?.series"></apexchart>
                    </div>
                    <div class="overflow-x-auto">
                        <table class="min-w-full divide-y divide-gray-200">
                            <thead class="bg-gray-50">
                            <tr>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Rekruter
                                </th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Liczba ogłoszeń
                                </th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Liczba projektów
                                </th>
                            </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                            <tr v-for="recruiter in props.recruiters" :key="recruiter.id">
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                    {{ recruiter.name }}
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-700">
                                    {{ recruiter.projects_recruits_count }}
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-700">
                                    {{ recruiter.applications_recruits_count }}
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </AppLayout>
</template>
