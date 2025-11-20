<script setup>

import {Link, router, usePage} from '@inertiajs/vue3';

import AppLayout from '@/Layouts/AppLayout.vue';
import DangerButton from "@/Components/DangerButton.vue";
import DialogModal from "@/Components/DialogModal.vue";
import SecondaryButton from "@/Components/SecondaryButton.vue";
import {reactive, ref, watch} from "vue";
import Multiselect from 'vue-multiselect'
import Info from "@/Components/Info.vue";


const props = defineProps({
    project: Object,
    otherRecruits: Array,
    locale: String,
});
let mapChange = reactive({
    'countryWork':props.project.countryWork,
    'cityWork':props.project.cityWork,
    'streetWork':props.project.streetWork,
    'streetWorkNumber':props.project.streetWorkNumber,
    'postalWork':props.project.postalWork,
});

const mapUrl = ref("");
const showChangeRecruit = ref(false);
const selectedProject = ref(null);
const confirmCancelProject = ref(false);


const openModal = (project)=>{
    confirmCancelProject.value = true;
    selectedProject.value = project;
}

const dispatchAction = value => {
    router.post(route('firm.addMoreRecruits',props.project?.id ),{ others: value },{ preserveScroll: true });
}
const dispatchActionSingleRecruit = value => {
    router.post(route('firm.changeRecruit',props.project?.id ),{ recruit: value },{ preserveScroll: true,
        onSuccess: () => {
            router.reload({ only: ['otherRecruits'] });
            showChangeRecruit.value = false;
        }
    });
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

watch(
    () => mapChange,
    (newMapChange) => {
        if (newMapChange) {
            let myUrlWithParams = new URL(`https://www.google.com/maps/embed/v1/place?key=${usePage().props.mapsApi}`);
            myUrlWithParams.searchParams.append("q",
                `${newMapChange.countryWork} ${newMapChange.cityWork} ${newMapChange.streetWork} ${newMapChange.streetWorkNumber} ${newMapChange.postalWork}`
            );
            mapUrl.value = myUrlWithParams.toString();
        }
    },
    { deep: true, immediate: true }
);


</script>

<template>
    <AppLayout :title="__('translate.project')+' id.' + props.project.id">
        <template #header>
            <div class="flex justify-between">
                <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                    {{__('translate.project')}} id. {{props.project.id}}
                </h2>
                <div class="flex items-center">
                    <Link :href="route('projects.index')" class="text-gray-500 mr-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                             stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 10h16M4 14h16M4 18h16"/>
                        </svg>
                    </Link>
                    <DangerButton @click="openModal(props.project)" class="!flex mx-auto text-center justify-center">
                        {{__('translate.delete')}}
                    </DangerButton>
                </div>
            </div>
        </template>
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg">
                    <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
                        <div class="col-span-6 mt-3" v-if="mapChange.cityWork && mapChange.streetWork && mapChange.streetWorkNumber">
                            <iframe
                                width="100%"
                                height="250"
                                frameborder="0" style="border:0"
                                referrerpolicy="no-referrer-when-downgrade"
                                :src="mapUrl"
                                allowfullscreen>
                            </iframe>
                        </div>
                        <div class="flex flex-col py-3" v-if="props.otherRecruits.length">
                            <div class="mb-1 text-gray-500 md:text-md dark:text-gray-400 mr-2">{{__('translate.othersRecruits')}}</div>
                            <Info class="mb-2">{{__('translate.othersRecruitsInfo')}}</Info>
                            <multiselect
                                :selectLabel="__('translate.selectLabel')"
                                :selectedLabel="__('translate.selectedLabel')"
                                :deselectLabel="__('translate.deselectLabel')"
                                track-by="name"
                                :multiple="true"
                                label="name"
                                @update:modelValue="dispatchAction"
                                :placeholder="__('translate.placeholder')"
                                v-model="props.project.other_recruits" :options="props.otherRecruits">
                                <template #noResult>
                                    <span>{{__('translate.noOptions')}}</span>
                                </template>
                                <template #noOptions>
                                    <span>{{__('translate.noResult')}}</span>
                                </template>
                            </multiselect>
                        </div>
                        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-3 gap-3">
                            <ul class="p-4">
                                <li class="text-md mb-1">
                                    <span class="text-gray-500 md:text-md dark:text-gray-400 mr-2">Id:</span>
                                    <span class="text-md font-semibold">{{props.project.id}}</span>
                                </li>
                                <li class="text-md mb-1">
                                    <span class="text-gray-500 md:text-md dark:text-gray-400 mr-2">{{__('translate.category')}}:</span>
                                    <span class="text-md font-semibold">{{props.project.category?.allTranslations.title[usePage().props.language]}}</span>
                                </li>
                                <li class="text-md mb-1">
                                    <span class="text-gray-500 md:text-md dark:text-gray-400 mr-2">{{__('translate.subcategory')}}:</span>
                                    <span class="text-md font-semibold">{{props.project.categorySub?.allTranslations.title[usePage().props.language]}}</span>
                                </li>
                                <li class="text-md mb-1 flex justify-between items-center flex-wrap">
                                    <div>
                                        <span class="text-gray-500 md:text-md dark:text-gray-400 mr-2">{{__('translate.recruit')}}:</span>
                                        <Link class="text-md font-semibold underline" :href="route('recruits.edit',props.project.recruit.id)">{{props.project.recruit?.name}}</Link>
                                    </div>
                                    <button class="underline text-sm" @click="showChangeRecruit = !showChangeRecruit">{{showChangeRecruit ? 'Anuluj' : 'Zmień'}}</button>
                                    <div v-if="showChangeRecruit" class="w-full my-3">
                                        <multiselect
                                            :selectLabel="__('translate.selectLabel')"
                                            :selectedLabel="__('translate.selectedLabel')"
                                            :deselectLabel="__('translate.deselectLabel')"
                                            track-by="name"
                                            :multiple="false"
                                            label="name"
                                            @update:modelValue="dispatchActionSingleRecruit"
                                            :placeholder="__('translate.placeholder')"
                                            :options="props.otherRecruits">
                                            <template #noResult>
                                                <span>{{__('translate.noOptions')}}</span>
                                            </template>
                                            <template #noOptions>
                                                <span>{{__('translate.noResult')}}</span>
                                            </template>
                                        </multiselect>
                                    </div>
                                </li>
                                <li class="text-md mb-1">
                                    <span class="text-gray-500 md:text-md dark:text-gray-400 mr-2">{{__('translate.profession')}}:</span>
                                    <span class="text-md font-semibold">
                                            {{props.project.profession?.allTranslations.title[usePage().props.language]}}
                                        </span>
                                </li>
                                <li class="text-md mb-1">
                                    <span class="text-gray-500 md:text-md dark:text-gray-400 mr-2">{{__('translate.position')}}:</span>
                                    <span class="text-md font-semibold">
                                            {{props.project.position?.allTranslations.title[usePage().props.language]}}
                                        </span>
                                </li>
                                <li class="flex items-center text-md mb-1">
                                    <span class="text-gray-500 md:text-md dark:text-gray-400 mr-2">{{__('translate.workingMode')}}:</span>
                                    <div class="text-md font-semibold">
                                        <span v-for="working in props.project.workingMode">
                                            {{working.allTranslations.title[usePage().props.language]}}
                                        </span>
                                    </div>
                                </li>
                                <li class="text-md mb-1" v-if="props.project.external_company">
                                    <span class="text-gray-500 md:text-md dark:text-gray-400 mr-2">{{__('translate.externalCompany')}}:</span>
                                    <span class="text-md font-semibold">
                                            {{props.project.external_company?.name}} ({{props.project.external_company?.abbreviation}})
                                        </span>
                                </li>
                                <li class="flex items-center text-md mb-1">
                                    <span class="text-gray-500 md:text-md dark:text-gray-400 mr-2">{{__('translate.CountryPublish')}}:</span>
                                    <div class="text-md font-semibold flex justify-center">
                                        <div v-for="(county,index) in props.project.country">
                                            {{county.allTranslations[usePage().props.language]}}<span v-if="index !== props.project.country.length - 1">,</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="text-md mb-1">
                                    <span class="text-gray-500 md:text-md dark:text-gray-400 mr-2">{{__('translate.workingPlace')}}:</span>
                                    <span class="text-md font-semibold">
                                            {{props.project.workingPlace?.allTranslations.name[usePage().props.language]}}
                                        </span>
                                </li>
                                <li class="flex text-md mb-1">
                                    <span class="text-gray-500 md:text-md dark:text-gray-400 mr-2">{{__('translate.typesOfContract')}}:</span>
                                    <div class="flex items-center flex-wrap text-md font-semibold">
                                        <div v-for="(type,index) in props.project.typeOfContract">
                                            {{type.allTranslations.name[usePage().props.language]}}<span v-if="index !== props.project.typeOfContract.length - 1">,</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="text-md mb-1">
                                    <span class="text-gray-500 md:text-md dark:text-gray-400 mr-2">{{__('translate.workLoads')}}:</span>
                                    <span class="text-md font-semibold">
                                            {{props.project.workLoad?.allTranslations.name[usePage().props.language]}}
                                        </span>
                                </li>
                            </ul>
                            <ul class="p-4">

                                <li class="text-md mb-1">
                                    <span class="text-gray-500 md:text-md dark:text-gray-400 mr-2">{{__('translate.basicSalaryFrom')}}:</span>
                                    <span class="text-md font-semibold">
                                            {{props.project.basicSalaryFrom}} {{props.project.currency.name}}
                                        </span>
                                </li>
                                <li class="text-md mb-1">
                                    <span class="text-gray-500 md:text-md dark:text-gray-400 mr-2">{{__('translate.basicSalaryTo')}}:</span>
                                    <span class="text-md font-semibold">
                                            {{props.project.basicSalaryTo}} {{props.project.currency.name}}
                                        </span>
                                </li>
                                <li class="text-md mb-1">
                                    <span class="text-gray-500 md:text-md dark:text-gray-400 mr-2">{{__('translate.payoutModes')}}:</span>
                                    <span class="text-md font-semibold">
                                            {{props.project.payoutMode?.allTranslations.name[usePage().props.language]}}
                                        </span>
                                </li>
                                <li class="text-md mb-1 flex flex-wrap items-center">
                                    <span class="text-gray-500 md:text-md dark:text-gray-400 mr-2">{{__('translate.typesOfContract')}}:</span>
                                    <div class="flex items-center flex-wrap text-md font-semibold">
                                        <div v-for="(pay,index) in props.project.paySystem">
                                            {{pay.allTranslations.name[usePage().props.language]}}<span v-if="index !== props.project.paySystem.length - 1">,</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="text-md mb-1">
                                    <span class="text-gray-500 md:text-md dark:text-gray-400 mr-2">{{__('translate.bonusSalaryFrom')}}:</span>
                                    <span class="text-md font-semibold">
                                            {{props.project.bonusSalaryFrom}} {{props.project.currency.name}}
                                        </span>
                                </li>
                                <li class="text-md mb-1">
                                    <span class="text-gray-500 md:text-md dark:text-gray-400 mr-2">{{__('translate.bonusSalaryTo')}}:</span>
                                    <span class="text-md font-semibold">
                                            {{props.project.bonusSalaryTo}} {{props.project.currency.name}}
                                        </span>
                                </li>
                                <li class="text-md mb-1">
                                    <span class="text-gray-500 md:text-md dark:text-gray-400 mr-2">{{__('translate.shiftWorks')}}:</span>
                                    <span class="text-md font-semibold">
                                            {{props.project.shift_work?.name[usePage().props.language]}}
                                        </span>
                                </li>
                                <li class="text-md mb-1">
                                    <span class="text-gray-500 md:text-md dark:text-gray-400 mr-2">{{__('translate.hoursFrom')}}:</span>
                                    <span class="text-md font-semibold">
                                            {{props.project.hoursFrom}}
                                        </span>
                                </li>
                                <li class="text-md mb-1">
                                    <span class="text-gray-500 md:text-md dark:text-gray-400 mr-2">{{__('translate.hoursTo')}}:</span>
                                    <span class="text-md font-semibold">
                                            {{props.project.hoursTo}}
                                        </span>
                                </li>
                                <li class="text-md mb-1">
                                    <span class="text-gray-500 md:text-md dark:text-gray-400 mr-2">{{__('translate.workNight')}}:</span>
                                    <span class="text-md font-semibold">
                                            {{props.project.workNight == 2 ? __('translate.no') : __('translate.yes')}}
                                        </span>
                                </li>
                                <li class="text-md mb-1 flex flex-wrap items-center">
                                    <span class="text-gray-500 md:text-md dark:text-gray-400 mr-2">{{__('translate.day')}}:</span>
                                    <div class="text-md font-semibold flex flex-wrap">
                                        <div v-for="(day,index) in props.project.days">
                                            {{day.allTranslations.name[usePage().props.language]}}<span v-if="index !== props.project.days.length - 1">,</span>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <ul class="p-4">
                                <li class="text-md mb-1 flex flex-wrap items-center">
                                    <span class="text-gray-500 md:text-md dark:text-gray-400 mr-2">{{__('translate.offer')}}:</span>
                                    <div class="text-md font-semibold flex flex-wrap">
                                        <div v-for="(off,index) in props.project.offer">
                                            {{off.allTranslations.name[usePage().props.language]}}<span v-if="index !== props.project.offer.length - 1">,</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="text-md mb-1 flex flex-wrap items-center">
                                    <span class="text-gray-500 md:text-md dark:text-gray-400 mr-2">{{__('translate.wait')}}:</span>
                                    <div class="text-md font-semibold flex flex-wrap">
                                        <div v-for="(w,index) in props.project.wait">
                                            {{w.allTranslations.name[usePage().props.language]}}<span v-if="index !== props.project.wait.length - 1">,</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="text-md mb-1 flex flex-wrap items-center">
                                    <span class="text-gray-500 md:text-md dark:text-gray-400 mr-2">{{__('translate.experience')}}:</span>
                                    <div class="text-md font-semibold flex flex-wrap">
                                        {{props.project.experience.allTranslations.name[usePage().props.language]}}
                                    </div>
                                </li>
                                <li class="text-md mb-1 flex flex-wrap items-center">
                                    <span class="text-gray-500 md:text-md dark:text-gray-400 mr-2">{{__('translate.welcome')}}:</span>
                                    <div class="text-md font-semibold flex flex-wrap">
                                        <div v-for="(we,index) in props.project.welcome">
                                            {{we.allTranslations.name[usePage().props.language]}}<span v-if="index !== props.project.welcome.length - 1">,</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="text-md mb-1">
                                    <span class="text-gray-500 md:text-md dark:text-gray-400 mr-2">{{__('translate.education')}}:</span>
                                    <span class="text-md font-semibold">
                                            {{props.project.education?.name[usePage().props.language]}}
                                        </span>
                                </li>
                                <li class="text-md mb-1 flex flex-wrap items-center">
                                    <span class="text-gray-500 md:text-md dark:text-gray-400 mr-2">{{__('translate.adress')}}:</span>
                                    <span class="text-md font-semibold flex flex-wrap">
                                            {{props.project.countryWork?.allTranslations[usePage().props.language]}},
                                            {{props.project.streetWork}},
                                            {{props.project.streetWorkNumber}},
                                            {{props.project.postalWork}}
                                            {{props.project.cityWork}}
                                        </span>
                                </li>
                                <li class="text-md mb-1 flex flex-wrap items-center">
                                    <span class="text-gray-500 md:text-md dark:text-gray-400 mr-2">{{__('translate.othersRecruits')}}:</span>
                                    <div class="text-md font-semibold flex flex-wrap">
                                        <div v-for="(other,index) in props.project.other_recruits">
                                            {{other.name}}<span v-if="index !== props.project.other_recruits.length - 1">,</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="text-md mb-1 flex flex-wrap items-center">
                                    <span class="text-gray-500 md:text-md dark:text-gray-400 mr-2">{{__('translate.title')}}:</span>
                                    <span class="text-md font-semibold">{{props.project.title[usePage().props.language]}}</span>
                                </li>
                            </ul>
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
