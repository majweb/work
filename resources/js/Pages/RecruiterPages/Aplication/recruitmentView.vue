<script setup>

import {Link, router, usePage} from '@inertiajs/vue3';

import AppLayout from '@/Layouts/AppLayout.vue';
import DangerButton from "@/Components/DangerButton.vue";
import DialogModal from "@/Components/DialogModal.vue";
import SecondaryButton from "@/Components/SecondaryButton.vue";
import {computed, ref} from "vue";

const props = defineProps({
    aplication: Object
});
const selectedAplication = ref(null);
const confirmCancelAplication = ref(false);


const openModal = (project)=>{
    confirmCancelAplication.value = true;
    selectedAplication.value = project;
}

const DeleteAplication = () => {
    if(selectedAplication){
        router.delete(route('project-aplications-recruits.destroy',selectedAplication.value), {
            onSuccess: () => {
                confirmCancelAplication.value = false;
                selectedAplication.value = null;
            }
        });
    }
};

</script>

<template>
    <AppLayout :title="__('translate.aplication')+' id.' + props.aplication.id">
        <template #header>
            <div class="flex justify-between">
                <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                    {{__('translate.aplication')}} id. {{props.aplication.id}}
                </h2>
                <div class="flex items-center">
                    <Link :href="route('project-aplications-recruits.index')" class="text-gray-500 mr-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                             stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 10h16M4 14h16M4 18h16"/>
                        </svg>
                    </Link>
                    <DangerButton @click="openModal(props.aplication)" class="!flex mx-auto text-center justify-center">
                        {{__('translate.delete')}}
                    </DangerButton>
                </div>
            </div>
        </template>
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg">
                    <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
                        {{__('translate.recruitment')}}:
                        <ul class="p-4">
                            <li class="text-md mb-1">
                                <span class="text-gray-500 md:text-md dark:text-gray-400 mr-2">{{__('translate.aplication')}}:</span>
                                <span class="text-md font-semibold">{{props.aplication.id}}</span>
                            </li>
                        </ul>

                        <div class="flex justify-center items-center gap-5">
                            <Link :href="route('project-aplications-recruits.recruitmentView',aplication)" class="w-1/5 p-6 bg-white border border-gray-200 rounded-lg shadow-sm dark:bg-gray-800 dark:border-gray-700">
                                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">CV</h5>
                                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Podstawowe</p>
                            </Link>
                            <Link :href="route('project-aplications-recruits.recruitmentView',aplication)" class="w-1/5 p-6 bg-white border border-gray-200 rounded-lg shadow-sm dark:bg-gray-800 dark:border-gray-700">
                                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">CV</h5>
                                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Podstawowe</p>
                            </Link>
                            <Link :href="route('project-aplications-recruits.recruitmentView',aplication)" class="w-1/5 p-6 bg-white border border-gray-200 rounded-lg shadow-sm dark:bg-gray-800 dark:border-gray-700">
                                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">CV</h5>
                                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Podstawowe</p>
                            </Link>
                        </div>
                    </div>
                    <DialogModal :show="confirmCancelAplication" @close="confirmCancelAplication = false">
                        <template #title>
                            {{__('translate.questionDelete')}} - {{__('translate.aplication').toLowerCase()}} id. {{selectedAplication && selectedAplication.id}}
                        </template>

                        <template #content>
                            {{__('translate.questionDeleteConfirm')}} - {{__('translate.aplication').toLowerCase()}} id.{{selectedAplication && selectedAplication.id}}
                        </template>

                        <template #footer>
                            <SecondaryButton @click.native="confirmCancelAplication = false">
                                {{__('translate.cancel')}}
                            </SecondaryButton>

                            <DangerButton class="ml-2" @click.native="DeleteAplication">
                                {{__('translate.delete')}}
                            </DangerButton>
                        </template>
                    </DialogModal>
                </div>
            </div>
        </div>
    </AppLayout>
</template>
<style src="vue-multiselect/dist/vue-multiselect.css"></style>
<style lang="scss">

.multiselect__tag{
    background: #00a0e3 !important;
}
.multiselect__option--highlight {
    background: #00a0e3 !important;
    outline: none;
    color: white;
}

.multiselect__option--highlight:after {
    content: attr(data-select);
    background: #00a0e3 !important;
    color: white;
}

.multiselect__option--selected {
    background: #00A0E3B2 !important;
    color: #35495E;
    font-weight: bold;
}

.multiselect__option--selected.multiselect__option--highlight {
    background: #00A0E3B2 !important;
    color: #fff;
}

.multiselect__option--selected.multiselect__option--highlight:after {
    background: #00A0E3B2 !important;
    content: attr(data-deselect);
    color: white !important;
}

.multiselect__option--selected:after {
    content: attr(data-selected);
    color: #00A0E3B2;
    background: transparent !important;
}
</style>
