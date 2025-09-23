<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';

const props = defineProps({
    ProjectsRecruits: Object,
    AppsRecruits: Object,
    AppsStatus: Object,
    AppsStatusPercentYes: Object,
    recruiters: {
        type: Array,
        default: () => []
    },
    projects:Object
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
                        {{ __('translate.statistics') }}
                    </h3>
                    <div class="flex items-center flex-wrap">
                        <apexchart class="flex-1" :type="ProjectsRecruits?.type" :options="ProjectsRecruits?.options" :series="ProjectsRecruits?.series"></apexchart>
                        <apexchart class="flex-1" :type="AppsRecruits?.type" :options="AppsRecruits?.options" :series="AppsRecruits?.series"></apexchart>
                        <apexchart class="flex-1" :type="AppsStatus?.type" :options="AppsStatus?.options" :series="AppsStatus?.series"></apexchart>
                        <apexchart class="flex-1" :type="AppsStatusPercentYes?.type" :options="AppsStatusPercentYes?.options" :series="AppsStatusPercentYes?.series"></apexchart>
                        <div class="flex-1"></div>
                        <div class="flex-1"></div>
                    </div>
                    <div class="flex flex-col md:flex-row gap-2">
                        <div class="overflow-x-auto">
                            <p class="text-sm mb-2"> {{ __('translate.recruiterStatistics') }}</p>
                            <table class="min-w-full divide-y divide-gray-200">
                                <thead class="bg-gray-50">
                                <tr>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        {{ __('translate.recruit') }}
                                    </th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        {{ __('translate.projectCount') }}
                                    </th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        {{ __('translate.appCount') }}
                                    </th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        {{ __('translate.lastActive') }}
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
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-700">
                                        {{ recruiter.applications_recruits_max_status_changed_at ?? '-'  }}
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>

                        <div class="overflow-x-auto">
                            <p class="text-sm mb-2">{{__('translate.appCountPerProject')}}</p>

                            <table class="min-w-full divide-y divide-gray-200">
                                <thead class="bg-gray-50">
                                <tr>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        {{__('translate.project')}}
                                    </th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        {{__('translate.appCount')}}
                                    </th>
                                </tr>
                                </thead>
                                <tbody class="bg-white divide-y divide-gray-200">
                                <tr v-for="project in props.projects" :key="project.id">
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                        {{__('translate.project')}} - {{ project.id }} - {{project.recruit.name}}
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-700">
                                        {{ project.aplications_count }}
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </AppLayout>
</template>
