<script setup>

import {useForm, Link, router} from '@inertiajs/vue3';

import AppLayout from '@/Layouts/AppLayout.vue';
import DangerButton from "@/Components/DangerButton.vue";
import DialogModal from "@/Components/DialogModal.vue";
import SecondaryButton from "@/Components/SecondaryButton.vue";
import {ref} from "vue";
const props = defineProps({
    project: Object,
    locale: String,
});
const selectedProject = ref(null);
const confirmCancelProject = ref(false);

const form = useForm({
    id: props.project.id,
    title: props.project.title,
    recruiter: props.project.recruit.name,
});

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

</script>

<template>
    <AppLayout :title="__('auth.project')+' id.' + props.project.id">
        <template #header>
            <div class="flex justify-between">
                <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                    {{__('auth.project')}} id. {{props.project.id}}
                </h2>
                <div class="flex items-center">
                    <Link :href="route('projects.index')" class="text-gray-500 mr-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                             stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 10h16M4 14h16M4 18h16"/>
                        </svg>
                    </Link>
                    <DangerButton @click="openModal(props.project)" class="!flex mx-auto text-center justify-center">
                        {{__('auth.delete')}}
                    </DangerButton>
                </div>
            </div>
        </template>
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg">
                    <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
                        <div>
                            <dl class="max-w-md text-gray-900 divide-y divide-gray-200 dark:text-white dark:divide-gray-700">
                                <div class="flex pb-3">
                                    <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400 mr-2">Id</dt>
                                    <dd class="text-lg font-semibold">{{props.project.id}}</dd>
                                </div>
                                <div class="flex py-3">
                                    <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400 mr-2">rekruter</dt>
                                    <dd class="text-lg font-semibold underline">
                                        <Link :href="route('recruits.edit',props.project.recruit.id)">{{props.project.recruit.name}}</Link>
                                    </dd>
                                </div>
                                <div class="flex pt-3">
                                    <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400 mr-2">Tytuł</dt>
                                    <dd class="text-lg font-semibold">{{props.project.title}}</dd>
                                </div>
                            </dl>
                        </div>
                    </div>
                    <DialogModal :show="confirmCancelProject" @close="confirmCancelProject = false">
                        <template #title>
                            {{__('auth.questionDelete')}} - {{__('auth.project').toLowerCase()}} id. {{selectedProject && selectedProject.id}}
                        </template>

                        <template #content>
                            {{__('auth.questionDeleteConfirm')}} - {{__('auth.project').toLowerCase()}} id.{{selectedProject && selectedProject.id}}
                        </template>

                        <template #footer>
                            <SecondaryButton @click.native="confirmCancelProject = false">
                                {{__('auth.cancel')}}
                            </SecondaryButton>

                            <DangerButton class="ml-2" @click.native="DeleteProject">
                                {{__('auth.delete')}}
                            </DangerButton>
                        </template>
                    </DialogModal>
                </div>
            </div>
        </div>
    </AppLayout>
</template>
