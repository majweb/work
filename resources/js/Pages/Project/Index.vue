<script setup>
import { ref, watch } from 'vue';
import { router,Link, usePage } from '@inertiajs/vue3';
import AppLayout from '@/Layouts/AppLayout.vue';
import Pagination from '@/Components/Pagination.vue';

import { pickBy, debounce } from 'lodash';
import InputLabel from "@/Components/InputLabel.vue";
import DangerButton from "@/Components/DangerButton.vue";
import DialogModal from "@/Components/DialogModal.vue";
import SecondaryButton from "@/Components/SecondaryButton.vue";

const props = defineProps({
    projects: Object,
    recruiters: Object,
    filters: Object
});
const selectedProject = ref(null);
const confirmCancelProject = ref(false);

const params = ref({
    field: props.filters.field,
    direction: props.filters.direction,
    recruiter:props.filters.recruiter ?? 'all',

});

const resetFilters = ()=>{
    router.get(route('projects.index'));
}
const openModal = (project)=>{
    confirmCancelProject.value = true;
    selectedProject.value = project;
}
const DeleteProject = () => {
    if(selectedProject){
        router.delete(route('projects.destroy',selectedProject.value), {
            onSuccess: () => {
                confirmCancelProject.value = false;
                selectedProject.value = null;
            }
        });
    }
};


const sort = (field) => {
    params.value.field = field;
    params.value.direction = params.value.direction === 'asc' ? 'desc' : 'asc';
}
const resetSort = (field) => {
    params.value.field = null;
    params.value.direction = null;
}

watch(params.value, debounce(function (value) {
    let rest = pickBy(params.value);
    router.get(route('projects.index'), rest, { preserveState: true, replace: true });
}, 300));

</script>
<template>
    <AppLayout :title="__('translate.projects')">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{__('translate.projects')}}
            </h2>
        </template>
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg">
                    <div class="p-6 lg:p-8 bg-white dark:bg-gray-800 dark:bg-gradient-to-bl dark:from-gray-700/50 dark:via-transparent border-b border-gray-200 dark:border-gray-700">
                        <div class="flex items-center justify-end px-4 py-3 text-right sm:px-6 sm:rounded-bl-md sm:rounded-br-md">
                            <Link class="inline-flex items-center px-4 py-2 bg-gray-800 dark:bg-gray-200 border border-transparent rounded-md font-semibold text-xs text-white dark:text-gray-800 uppercase tracking-widest hover:bg-gray-700 dark:hover:bg-white focus:bg-gray-700 dark:focus:bg-white active:bg-gray-900 dark:active:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 transition ease-in-out duration-150" :href="route('project-recruits.create')">
                                {{__('translate.createProject')}}
                            </Link>
                        </div>
                        <h2 class="text-sm font-semibold text-indigo-300">{{__('translate.filters')}}</h2>
                        <button class="text-sm font-semibold mb-2 text-indigo-400 underline" @click="resetFilters" v-if="(params.recruiter && params.recruiter != 'all')">{{ __('translate.clearFilters') }}</button>
                        <div class="col-span-6 flex mb-3 items-center">
                            <div class="flex mt-1 flex flex-col mr-2">
                                <InputLabel :value="__('translate.recruiter')" class="text-sm"/>
                                <select v-model="params.recruiter" id="small" class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm"
                                >
                                    <option value="all" id="all">{{__('translate.all')}}</option>
                                    <option :key="recruit.id" v-for="recruit in recruiters" :value="recruit.id" :id="recruit.id">{{recruit.name}}</option>
                                </select>
                            </div>
                        </div>

                        <div class="overflow-hidden bg-white shadow-md sm:rounded-lg">
                            <div class="flex flex-col">
                                <div class="overflow-x-auto -my-2 sm:-mx-6 lg:-mx-8">
                                    <div class="inline-block py-2 min-w-full align-middle sm:px-6 lg:px-8">
                                        <div class="overflow-hidden border-b border-gray-200 shadow sm:rounded-lg">
                                            <table class="min-w-full divide-y divide-gray-200 table-fixed">
                                                <thead class="bg-blue-work">
                                                <tr>
                                                    <th scope="col" class="w-3/12 text-xs font-semibold tracking-wider text-left uppercase cursor-pointer">
                                                        <div class="flex items-center">
                                                            <span class="inline-flex w-full py-3 px-6 justify-between" @click="sort('id')">Id
                                                                <svg v-if="params.field === 'id' && params.direction === 'asc'" xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
                                                                <path d="M3 3a1 1 0 000 2h11a1 1 0 100-2H3zM3 7a1 1 0 000 2h5a1 1 0 000-2H3zM3 11a1 1 0 100 2h4a1 1 0 100-2H3zM13 16a1 1 0 102 0v-5.586l1.293 1.293a1 1 0 001.414-1.414l-3-3a1 1 0 00-1.414 0l-3 3a1 1 0 101.414 1.414L13 10.414V16z"/>
                                                                </svg>

                                                                <svg v-if="params.field === 'id' && params.direction === 'desc'" xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
                                                                <path d="M3 3a1 1 0 000 2h11a1 1 0 100-2H3zM3 7a1 1 0 000 2h7a1 1 0 100-2H3zM3 11a1 1 0 100 2h4a1 1 0 100-2H3zM15 8a1 1 0 10-2 0v5.586l-1.293-1.293a1 1 0 00-1.414 1.414l3 3a1 1 0 001.414 0l3-3a1 1 0 00-1.414-1.414L15 13.586V8z"/>
                                                                </svg>
                                                            </span>
                                                            <div v-if="params.field === 'id' && params.direction" @click="resetSort">
                                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                                                                </svg>
                                                            </div>
                                                        </div>
                                                    </th>
                                                    <th scope="col"
                                                        class="py-3 px-6 w-3/12 text-xs font-semibold tracking-wider text-left uppercase">
                                                        {{__('translate.recruit')}}
                                                    </th>
                                                    <th scope="col"
                                                        class="py-3 px-6 w-3/12 text-xs font-semibold tracking-wider text-left uppercase">
                                                        {{__('translate.othersRecruits')}}
                                                    </th>
                                                    <th scope="col"
                                                        class="py-3 px-6 w-3/12 text-xs font-semibold tracking-wider text-left uppercase">
                                                        {{__('translate.title')}}
                                                    </th>
                                                    <th scope="col"
                                                        class="py-3 px-6 w-3/12 text-xs font-semibold tracking-wider text-left uppercase">
                                                        {{__('translate.actions')}}
                                                    </th>
                                                </tr>
                                                </thead>

                                                <tbody class="bg-white divide-y divide-gray-200">
                                                <tr v-if="props.projects.data.length == 0">
                                                    <td colspan="4" class="text-center py-4 px-6 whitespace-nowrap"><p>{{__('translate.notFoundProjects')}}</p></td>
                                                </tr>
                                                <tr v-else v-for="(project) in props.projects.data" :key="project.id" :class="{'bg-blue-100': project.other_recruits?.length}">
                                                    <td class="py-4 px-6 whitespace-nowrap">
                                                        <div class="flex items-center">
                                                            <div class="ml-4">
                                                                <div class="text-sm text-gray-900">
                                                                    {{project.id}}
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="py-4 px-6 whitespace-nowrap">
                                                        <div class="ml-4">
                                                            <div class="text-sm text-gray-900">
                                                                {{project.recruit.name}}
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="py-4 px-6 whitespace-nowrap">
                                                        <div class="ml-4">
                                                            <div class="text-sm text-gray-900">
                                                                {{project.other_recruits?.length}}
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="py-4 px-6 whitespace-nowrap">
                                                        <div class="ml-4">
                                                            <div class="text-sm text-gray-900">
                                                                {{project.title[usePage().props.language]}}
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="py-4 px-6 whitespace-nowrap">
                                                        <div class="flex items-center">
                                                            <div class="ml-4">
                                                                <DangerButton @click="openModal(project)" class="!flex mx-auto text-center justify-center">
                                                                    {{__('translate.delete')}}
                                                                </DangerButton>
                                                            </div>
                                                            <div class="ml-4">
                                                                <Link :href="route('projects.edit',project)" class="mr-2 flex items-center inline-flex items-center px-4 py-2 bg-white border border-gray-300 rounded-md font-semibold text-xs text-gray-700 uppercase tracking-widest shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 disabled:opacity-25 transition ease-in-out duration-150">
                                                                    {{__('translate.edit')}}
                                                                </Link>
                                                                <Link :href="route('projects.show',project)" class="flex items-center inline-flex items-center px-4 py-2 bg-white border border-gray-300 rounded-md font-semibold text-xs text-gray-700 uppercase tracking-widest shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 disabled:opacity-25 transition ease-in-out duration-150">
                                                                    {{__('translate.show')}}
                                                                </Link>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <Pagination v-if="projects.total > 5" class="mt-10 text-center mx-auto" :links="projects.links" />
                    </div>
                </div>
            </div>
            <DialogModal :show="confirmCancelProject" @close="confirmCancelProject = false">
                <template #title>
                    {{__('translate.questionDelete')}} - {{__('translate.project').toLowerCase()}} id. {{selectedProject && selectedProject.id}}
                </template>

                <template #content>
                    {{__('translate.questionDeleteConfirm')}} - {{__('translate.project').toLowerCase()}} id.{{selectedProject && selectedProject.id}}
                </template>

                <template #footer>
                    <SecondaryButton @click.native="confirmCancelProject = false">
                        {{__('translate.cancel')}}
                    </SecondaryButton>

                    <DangerButton class="ml-2" @click.native="DeleteProject">
                        {{__('translate.delete')}}
                    </DangerButton>
                </template>
            </DialogModal>

        </div>
    </AppLayout>
</template>
