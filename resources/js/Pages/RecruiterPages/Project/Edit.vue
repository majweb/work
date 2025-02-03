<script setup>

import {useForm, Link, usePage} from '@inertiajs/vue3';

import ActionMessage from '@/Components/ActionMessage.vue';
import FormSection from '@/Components/FormSection.vue';
import InputError from '@/Components/InputError.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import AppLayout from '@/Layouts/AppLayout.vue';
import SpinnerAction from "@/Components/SpinnerAction.vue";
import InputLabel from "@/Components/InputLabel.vue";
import {computed, ref, watch} from "vue";
import Multiselect from 'vue-multiselect'
import TextInput from "@/Components/TextInput.vue";
import SecondaryButton from "@/Components/SecondaryButton.vue";
import DangerButton from "@/Components/DangerButton.vue";
import FormSectionProject from "@/Components/FormSectionProject.vue";

const props = defineProps({
    categories: Array,
    workingModes: Array,
    typesOfContract: Array,
    countries: Array,
    workingPlaces: Array,
    workLoads: Array,
    shiftWorks: Array,
    payoutModes: Array,
    days: Array,
    paySystems: Array,
    offers: Array,
    waits: Array,
    experiences: Array,
    welcomes: Array,
    educations: Array,
    project: Object,
});

const form = useForm({
    category: props.project.category,
    categorySub: props.project.categorySub,
    profession: props.project.profession,
    position: props.project.position,
    title: props.project.title,
    basicSalaryFrom: props.project.basicSalaryFrom,
    basicSalaryTo: props.project.basicSalaryTo,
    bonusSalaryFrom: props.project.bonusSalaryFrom,
    bonusSalaryTo: props.project.bonusSalaryTo,
    hoursFrom: props.project.hoursFrom,
    hoursTo: props.project.hoursTo,
    workLoad: props.project.workLoad,
    education: props.project.education,
    shiftWork: props.project.shiftWork,
    payoutMode: props.project.payoutMode,
    workNight: props.project.workNight,
    workingMode: props.project.workingMode ?? [],
    typeOfContract: props.project.typeOfContract ?? [],
    paySystem: props.project.paySystem ?? [],
    workingPlace: props.project.workingPlace ?? [],
    country: props.project.country ?? [],
    days: props.project.days ?? [],
    offer: props.project.offer ?? [],
    wait: props.project.wait ?? [],
    experience: props.project.experience ?? [],
    welcome: props.project.welcome ?? [],
    detailProjects:  props.project.detailprojects.map(el=>el.id) ?? [],
    address: props.project.address,
    postal: props.project.postal,
    city: props.project.city,
});


const optionsCategory = ref(props.categories);
const optionsCountry = ref(props.countries);
const optionsWorkingPlace = ref(props.workingPlaces);
const optionsSubCategory = ref([]);
const optionsProfession = ref([]);
const optionsPosition = ref([]);
const titles = ref([]);
let formStep = ref(1);
let workingModeSelect = ref([]);
let workLoadSelect = ref(null);
let typesOfContractSelect = ref([]);
let paySystemSelect = ref([]);
let payoutModeSelect = ref(null);
let daySelect = ref([]);
let offerSelect = ref([]);
let welcomeSelect = ref([]);
let waitSelect = ref([]);
let experienceSelect = ref([]);
let educationSelect = ref(null);
let toTitleArray = ref([]);
let listOfTitle = ref([]);



watch(() => form.category, async (category) => {
    if (form.category) {
        optionsSubCategory.value =(await axios.get(route('getChildsCategory',category.value))).data
    }
    optionsProfession.value = [];
    optionsPosition.value = [];
    form.categorySub = '';
    form.profession = '';
    form.position = '';
    form.detailProjects = [];

});
watch(() => form.categorySub, async (categorySub) => {
    if (form.categorySub) {
        optionsProfession.value =(await axios.get(route('getChildsCategory',categorySub.value))).data
    }
    optionsPosition.value = [];
    form.profession = '';
    form.position = '';
    form.detailProjects = [];

});
watch(() => form.profession, async (profession) => {
    if (form.profession) {
        titles.value = (await axios.get(route('getTitlesCategory',profession.value))).data
        optionsPosition.value =(await axios.get(route('getChildsCategory',profession.value))).data
    }
    form.position = '';
    form.detailProjects = [];

});
watch(() => form.position, async (position) => {
    if (form.position) {
        titles.value = (await axios.get(route('getTitlesCategory',position.value))).data
    } else {
        titles.value = [];
        form.title = '';
    }
    form.detailProjects = [];

});

const nextStep = () =>{
    form.put(route('project-recruits.updateFirsStep',props.project), {
        errorBag: 'updateProject',
        preserveScroll: true,
        onSuccess: () => {
            formStep.value++;
        },

    });
}
const prevStep = () =>{
    formStep.value--;
    toTitleArray.value = [];
}

const updateProject = () => {
    form.put(route('project-recruits.update',props.project), {
        errorBag: 'updateProject',
        preserveScroll: true,
        onSuccess: () => {
            form.reset();
            formStep.value = 1;
        },

    });
};

const addToArray = (array,name) =>{
    if(array.includes(name)){
        let found = array.indexOf(name);
        array.splice(found, 1);
    } else {
        array.push(name)
    }
}

const addToTitleArray = (e) => {
    let name = e.target.textContent;
    if(name){
        if(toTitleArray.value.includes(name)){
            let found = toTitleArray.value.indexOf(name);
            toTitleArray.value.splice(found, 1);
        } else {
            if(toTitleArray.value.length  < 4){
                toTitleArray.value.push(name)
            }
        }
    }
}

const addToTitleArrayKey = (key,el) => {
    let str  = key+':'+el;
    if(toTitleArray.value.includes(str)){
        let found = toTitleArray.value.indexOf(str);
        toTitleArray.value.splice(found, 1);
    } else {
        if(toTitleArray.value.length  < 4){
            toTitleArray.value.push(str)
        }
    }

}

const lessThan4 = computed(()=>{
    return toTitleArray.value.length < 4;
})
const titleEqual4 = computed(()=>{
    return toTitleArray.value.length == 4;
})
const titlesFromLang = computed(()=>{
    return listOfTitle.value.map((el)=>el[usePage().props.language]);
});
</script>

<template>
    <AppLayout :title="__('translate.createRecruit')">
        <template #header>
            <div class="flex justify-between">

                <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                    {{__('translate.updateProject')}}
                </h2>
                <Link :href="route('project-recruits.index')" class="text-gray-500 mr-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                         stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 10h16M4 14h16M4 18h16"/>
                    </svg>
                </Link>
            </div>
        </template>

        <div>
            <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
                <div>
                    <FormSectionProject @submitted="updateProject">
                        <template #form>
                            <div v-if="formStep == 1" class="col-span-12">
                                <div class="col-span-6 grid grid grid-cols-1 md:grid-cols-2 gap-6">
                                    <div>
                                        <InputLabel :value="__('translate.category')"/>
                                        <multiselect
                                            :disabled="true"
                                            :selectLabel="__('translate.selectLabel')"
                                            :selectGroupLabel="__('translate.selectGroupLabel')"
                                            :selectedLabel="__('translate.selectedLabel')"
                                            :deselectLabel="__('translate.deselectLabel')"
                                            track-by="value"
                                            label="name"
                                            :placeholder="__('translate.placeholder')"
                                            v-model="form.category" :options="optionsCategory">
                                            <template #noResult>
                                                <span>{{__('translate.noOptions')}}</span>
                                            </template>
                                            <template #noOptions>
                                                <span>{{__('translate.noResult')}}</span>
                                            </template>
                                        </multiselect>
                                        <InputError :message="form.errors.category" class="mt-2"/>

                                    </div>
                                    <div>
                                        <InputLabel :value="__('translate.subcategory')"/>
                                        <multiselect
                                            :disabled="true"
                                            :selectLabel="__('translate.selectLabel')"
                                            :selectGroupLabel="__('translate.selectGroupLabel')"
                                            :selectedLabel="__('translate.selectedLabel')"
                                            :deselectLabel="__('translate.deselectLabel')"
                                            :noOptions="__('translate.noOptions')"
                                            :noResult="__('translate.noResult')"
                                            track-by="value"
                                            label="name"
                                            :placeholder="__('translate.placeholder')"
                                            v-model="form.categorySub" :options="optionsSubCategory">
                                            <template #noResult>
                                                <span>{{__('translate.noOptions')}}</span>
                                            </template>
                                            <template #noOptions>
                                                <span>{{__('translate.noResult')}}</span>
                                            </template>
                                        </multiselect>
                                        <InputError :message="form.errors.categorySub" class="mt-2"/>

                                    </div>
                                    <div>
                                        <InputLabel :value="__('translate.profession')"/>
                                        <multiselect
                                            :disabled="true"
                                            :selectLabel="__('translate.selectLabel')"
                                            :selectGroupLabel="__('translate.selectGroupLabel')"
                                            :selectedLabel="__('translate.selectedLabel')"
                                            :deselectLabel="__('translate.deselectLabel')"
                                            :noOptions="__('translate.noOptions')"
                                            :noResult="__('translate.noResult')"
                                            track-by="value"
                                            label="name"
                                            :placeholder="__('translate.placeholder')"
                                            v-model="form.profession" :options="optionsProfession">
                                            <template #noResult>
                                                <span>{{__('translate.noOptions')}}</span>
                                            </template>
                                            <template #noOptions>
                                                <span>{{__('translate.noResult')}}</span>
                                            </template>
                                        </multiselect>
                                        <InputError :message="form.errors.profession" class="mt-2"/>

                                    </div>
                                    <div>
                                        <InputLabel :value="__('translate.position')"/>
                                        <multiselect
                                            :disabled="true"
                                            :selectLabel="__('translate.selectLabel')"
                                            :selectGroupLabel="__('translate.selectGroupLabel')"
                                            :selectedLabel="__('translate.selectedLabel')"
                                            :deselectLabel="__('translate.deselectLabel')"
                                            :noOptions="__('translate.noOptions')"
                                            :noResult="__('translate.noResult')"
                                            track-by="value"
                                            label="name"
                                            :placeholder="__('translate.placeholder')"
                                            v-model="form.position" :options="optionsPosition">
                                            <template #noResult>
                                                <span>{{__('translate.noOptions')}}</span>
                                            </template>
                                            <template #noOptions>
                                                <span>{{__('translate.noResult')}}</span>
                                            </template>
                                        </multiselect>
                                        <InputError :message="form.errors.position" class="mt-2"/>

                                    </div>
                                </div>
                                <div class="col-span-6 grid grid-cols-1 md:grid-cols-3 gap-6">
                                    <div v-if="titles.length">
                                        <InputLabel :value="__('translate.title')"/>
                                        <div v-for="title in titles" class="flex items-center mt-1">
                                                <input
                                                    class=" border-gray-300 text-blue-work shadow-sm focus:ring-blue-work mr-2"
                                                    type="radio" :id="'title-'+title.id" :value="title.id" v-model="form.title" />
                                            <label :for="'title-'+title.id">{{title.title}}</label>
                                        </div>
                                        <InputError :message="form.errors.title" class="mt-2"/>
                                    </div>

                                    <div class="mt-4" v-if="workingModes">
                                        <InputLabel for="workingMode" :value="__('translate.workingMode')" />
                                        <div v-for="workingMode in workingModes" class="flex items-center mt-1">
                                            <input
                                                class="rounded border-gray-300 text-blue-work shadow-sm focus:ring-blue-work mr-2"
                                                type="checkbox" :id="'workingMode-'+workingMode.id" v-model="form.workingMode"
                                                :value="workingMode.id" />
                                            <label :for="'workingMode-'+workingMode.id">{{workingMode.title}}</label>
                                        </div>
                                        <InputError :message="form.errors.workingMode" class="mt-2"/>
                                    </div>
                                </div>
                                <!-- detailprojects-->
                                <div class="col-span-6 mt-4" v-if="((form.position.detailprojects && Object.keys(form.position.detailprojects).length) || (form.profession.detailprojects && Object.keys(form.profession.detailprojects).length))">
                                    <div class="grid grid grid-cols-1 lg:grid-cols-2">
                                        <InputLabel for="detail" :value="__('translate.detailProjects')" />
                                        <div v-for="detail in (form.position.detailprojects || form.profession.detailprojects)" class="flex items-center">
                                            <input
                                                class="rounded border-gray-300 text-blue-work shadow-sm focus:ring-blue-work mr-2"
                                                type="checkbox" :id="'detailProjects-'+detail.id" v-model="form.detailProjects"
                                                :value="detail.id"
                                            />
                                            <label class="text-sm" :for="'detailProjects-'+detail.id">{{detail.name[usePage().props.language]}}</label>
                                            <InputError :message="form.errors.detailprojects" class="mt-2"/>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-span-6 grid grid grid-cols-1 lg:grid-cols-2 gap-6">
                                    <div v-if="titles.length">
                                        <InputLabel :value="__('translate.title')"/>
                                        <div v-for="title in titles" class="flex items-center mt-1">
                                            <input
                                                class=" border-gray-300 text-blue-work shadow-sm focus:ring-blue-work mr-2"
                                                type="radio" :id="'title-'+title.id" :value="title.id" v-model="form.title" />
                                            <label :for="'title-'+title.id">{{title.title}}</label>
                                        </div>
                                        <InputError :message="form.errors.title" class="mt-2"/>
                                    </div>
                                    <div class="mt-4" v-if="workingModes">
                                        <InputLabel for="workingMode" :value="__('translate.workingMode')" />
                                        <div v-for="workingMode in workingModes" class="flex items-center mt-1">
                                            <input
                                                class="rounded border-gray-300 text-blue-work shadow-sm focus:ring-blue-work mr-2"
                                                type="checkbox" :id="'workingMode-'+workingMode.id" v-model="form.workingMode"
                                                @change="addToArray(workingModeSelect,workingMode.title)"
                                                :value="workingMode.id" />
                                            <label :for="'workingMode-'+workingMode.id">{{workingMode.title}}</label>
                                        </div>
                                        <InputError :message="form.errors.workingMode" class="mt-2"/>
                                    </div>
                                </div>
                                <div class="col-span-6 grid grid grid-cols-1 lg:grid-cols-2 gap-6">
                                    <div>
                                        <InputLabel :value="__('translate.Country')"/>
                                        <multiselect
                                            group-values="elements" group-label="group"
                                            :group-select="false"
                                            :selectLabel="__('translate.selectLabel')"
                                            :selectGroupLabel="__('translate.selectGroupLabel')"
                                            :selectedLabel="__('translate.selectedLabel')"
                                            :deselectLabel="__('translate.deselectLabel')"
                                            track-by="name"
                                            label="name"
                                            :placeholder="__('translate.placeholder')"
                                            v-model="form.country" :options="optionsCountry">
                                            <template #noResult>
                                                <span>{{__('translate.noOptions')}}</span>
                                            </template>
                                            <template #noOptions>
                                                <span>{{__('translate.noResult')}}</span>
                                            </template>
                                        </multiselect>
                                        <InputError :message="form.errors.country" class="mt-2"/>

                                    </div>
                                    <div>
                                        <InputLabel :value="__('translate.workingPlace')"/>
                                        <multiselect
                                            :selectLabel="__('translate.selectLabel')"
                                            :selectGroupLabel="__('translate.selectGroupLabel')"
                                            :selectedLabel="__('translate.selectedLabel')"
                                            :deselectLabel="__('translate.deselectLabel')"
                                            :noOptions="__('translate.noOptions')"
                                            :noResult="__('translate.noResult')"
                                            track-by="value"
                                            label="name"
                                            :placeholder="__('translate.placeholder')"
                                            v-model="form.workingPlace" :options="optionsWorkingPlace">
                                            <template #noResult>
                                                <span>{{__('translate.noOptions')}}</span>
                                            </template>
                                            <template #noOptions>
                                                <span>{{__('translate.noResult')}}</span>
                                            </template>
                                        </multiselect>
                                        <InputError :message="form.errors.workingPlace" class="mt-2"/>

                                    </div>
                                </div>
                                <div class="col-span-6 grid grid-cols-1 md:grid-cols-2 gap-6">
                                    <div class="mt-4" v-if="typesOfContract">
                                        <InputLabel for="workingMode" :value="__('translate.typesOfContract')" />
                                        <div v-for="typeOfContract in typesOfContract" class="flex items-center mt-1">
                                            <input
                                                class="rounded border-gray-300 text-blue-work shadow-sm focus:ring-blue-work mr-2"
                                                type="checkbox" :id="'typeOfContract-'+typeOfContract.id" v-model="form.typeOfContract"
                                                :value="typeOfContract.id" />
                                            <label :for="'typeOfContract-'+typeOfContract.id">{{typeOfContract.name}}</label>
                                        </div>
                                        <InputError :message="form.errors.typeOfContract" class="mt-2"/>
                                    </div>
                                    <div class="mt-4" v-if="workLoads">
                                        <InputLabel :value="__('translate.workLoads')" />
                                        <div v-for="workLoad in workLoads" class="flex items-center mt-1">
                                            <input
                                                class="border-gray-300 text-blue-work shadow-sm focus:ring-blue-work mr-2"
                                                type="radio" :id="'workLoad-'+workLoad.id" v-model="form.workLoad"
                                                :value="workLoad.id" />
                                            <label :for="'workLoad-'+workLoad.id">{{workLoad.name}}</label>
                                        </div>
                                        <InputError :message="form.errors.workLoad" class="mt-2"/>
                                    </div>
                                </div>
                                <div class="col-span-6 grid grid-cols-1 md:grid-cols-2 gap-6">
                                    <div class="mt-4">
                                        <InputLabel :value="__('translate.basicSalaryFrom')" />
                                        <input type="number"
                                            id="basicSalaryFrom"
                                            v-model="form.basicSalaryFrom"
                                            class="border-gray-300 focus:blue-work rounded-md shadow-sm mt-1 block w-full"
                                            step="0.1"
                                        />
                                        <InputError :message="form.errors.basicSalaryFrom" class="mt-2"/>

                                    </div>
                                    <div class="mt-4">
                                        <InputLabel :value="__('translate.basicSalaryTo')" />
                                        <input type="number"
                                            id="basicSalaryTo"
                                            v-model="form.basicSalaryTo"
                                            class="border-gray-300 focus:blue-work rounded-md shadow-sm mt-1 block w-full"
                                            step="0.1"
                                        />
                                        <InputError :message="form.errors.basicSalaryTo" class="mt-2"/>

                                    </div>
                                </div>
                                <div class="col-span-6 grid grid-cols-1 md:grid-cols-2 gap-6">
                                    <div class="mt-4" v-if="payoutModes">
                                        <InputLabel :value="__('translate.payoutModes')" />
                                        <div v-for="payoutMode in payoutModes" class="flex items-center mt-1">
                                            <input
                                                class="border-gray-300 text-blue-work shadow-sm focus:ring-blue-work mr-2"
                                                type="radio" :id="'payoutMode-'+payoutMode.id" v-model="form.payoutMode"
                                                :value="payoutMode.id" />
                                            <label :for="'payoutMode-'+payoutMode.id">{{payoutMode.name}}</label>
                                        </div>
                                        <InputError :message="form.errors.payoutMode" class="mt-2"/>
                                    </div>
                                    <div class="mt-4" v-if="paySystems">
                                        <InputLabel for="paySystem" :value="__('translate.paySystem')" />
                                        <div v-for="paySystem in paySystems" class="flex items-center mt-1">
                                            <input
                                                class="rounded border-gray-300 text-blue-work shadow-sm focus:ring-blue-work mr-2"
                                                type="checkbox" :id="'paySystem-'+paySystem.id" v-model="form.paySystem"
                                                :value="paySystem.id" />
                                            <label :for="'paySystem-'+paySystem.id">{{paySystem.name}}</label>
                                        </div>
                                        <InputError :message="form.errors.paySystem" class="mt-2"/>
                                    </div>
                                </div>
                                <div class="col-span-6 grid grid-cols-1 md:grid-cols-2 gap-6">
                                    <div class="mt-4">
                                        <InputLabel :value="__('translate.bonusSalaryFrom')" />
                                        <input type="number"
                                            id="bonusSalaryFrom"
                                            v-model="form.bonusSalaryFrom"
                                            class="border-gray-300 focus:blue-work rounded-md shadow-sm mt-1 block w-full"
                                            step="0.1"
                                        />
                                        <InputError :message="form.errors.bonusSalaryFrom" class="mt-2"/>

                                    </div>
                                    <div class="mt-4">
                                        <InputLabel :value="__('translate.bonusSalaryTo')" />
                                        <input type="number"
                                            id="bonusSalaryTo"
                                            v-model="form.bonusSalaryTo"
                                            class="border-gray-300 focus:blue-work rounded-md shadow-sm mt-1 block w-full"
                                            step="0.1"
                                        />
                                        <InputError :message="form.errors.bonusSalaryTo" class="mt-2"/>

                                    </div>
                                </div>
                                <div class="col-span-6 grid grid-cols-1 md:grid-cols-2 gap-6">
                                    <div class="mt-4" v-if="days">
                                        <InputLabel for="day" :value="__('translate.dayWork')" />
                                        <div v-for="day in days" class="flex items-center mt-1">
                                            <input
                                                class="rounded border-gray-300 text-blue-work shadow-sm focus:ring-blue-work mr-2"
                                                type="checkbox" :id="'day-'+day.id" v-model="form.days"
                                                :value="day.id" />
                                            <label :for="'day-'+day.id">{{day.name}}</label>
                                        </div>
                                        <InputError :message="form.errors.days" class="mt-2"/>
                                    </div>
                                    <div class="mt-4" v-if="shiftWorks">
                                        <InputLabel :value="__('translate.shiftWorks')" />
                                        <div v-for="shiftWork in shiftWorks" class="flex items-center mt-1">
                                            <input
                                                class="border-gray-300 text-blue-work shadow-sm focus:ring-blue-work mr-2"
                                                type="radio" :id="'shiftWork-'+shiftWork.id" v-model="form.shiftWork"
                                                :value="shiftWork.id" />
                                            <label :for="'shiftWork-'+shiftWork.id">{{shiftWork.name}}</label>
                                        </div>
                                        <InputError :message="form.errors.shiftWork" class="mt-2"/>
                                    </div>
                                </div>
                                <div class="col-span-6 grid grid-cols-1 md:grid-cols-2 gap-6">
                                    <div class="mt-4">
                                        <InputLabel :value="__('translate.hoursFrom')" />
                                        <TextInput
                                            type="time"
                                            id="hoursFrom"
                                            v-model="form.hoursFrom"
                                            class="mt-1 block w-full"
                                        />
                                        <InputError :message="form.errors.hoursFrom" class="mt-2"/>
                                    </div>
                                    <div class="mt-4">
                                        <InputLabel :value="__('translate.hoursTo')" />
                                        <TextInput
                                            type="time"
                                            id="hoursTo"
                                            v-model="form.hoursTo"
                                            class="mt-1 block w-full"
                                        />
                                        <InputError :message="form.errors.hoursTo" class="mt-2"/>
                                    </div>
                                </div>
                                <div class="col-span-6">
                                    <div class="mt-4">
                                        <InputLabel :value="__('translate.workNight')" />
                                        <div class="flex mt-1 flex-col">
                                            <div class="flex items-center">
                                                <input
                                                    class="border-gray-300 text-blue-work shadow-sm focus:ring-blue-work mr-2"
                                                    type="radio" id="workNight-1" v-model="form.workNight"
                                                    value="1" />
                                                    <label for="workNight-1">{{__('translate.yes')}}</label>
                                            </div>
                                            <div class="flex items-center">
                                                <input
                                                    class="border-gray-300 text-blue-work shadow-sm focus:ring-blue-work mr-2"
                                                    type="radio" id="workNight-2" v-model="form.workNight"
                                                    value="2" />
                                                <label for="workNight-2">{{__('translate.no')}}</label>
                                            </div>
                                                <InputError :message="form.errors.workNight" class="mt-2"/>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-span-6 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                                    <div class="mt-4" v-if="offers">
                                        <InputLabel for="day" :value="__('translate.offer')" />
                                        <div v-for="offer in offers" class="flex items-center mt-1">
                                            <input
                                                class="rounded border-gray-300 text-blue-work shadow-sm focus:ring-blue-work mr-2"
                                                type="checkbox" :id="'offer'+offer.id" v-model="form.offer"
                                                :value="offer.id" />
                                            <label :for="'offer'+offer.id">{{offer.name}}</label>
                                        </div>
                                        <InputError :message="form.errors.offer" class="mt-2"/>
                                    </div>
                                    <div class="mt-4" v-if="waits">
                                        <InputLabel for="day" :value="__('translate.wait')" />
                                        <div v-for="wait in waits" class="flex items-center mt-1">
                                            <input
                                                class="rounded border-gray-300 text-blue-work shadow-sm focus:ring-blue-work mr-2"
                                                type="checkbox" :id="'wait'+wait.id" v-model="form.wait"
                                                :value="wait.id" />
                                            <label :for="'wait'+wait.id">{{wait.name}}</label>
                                        </div>
                                        <InputError :message="form.errors.wait" class="mt-2"/>
                                    </div>
                                    <div class="mt-4" v-if="experiences">
                                        <InputLabel for="day" :value="__('translate.experience')" />
                                        <div v-for="experience in experiences" class="flex items-center mt-1">
                                            <input
                                                class="rounded border-gray-300 text-blue-work shadow-sm focus:ring-blue-work mr-2"
                                                type="checkbox" :id="'experience'+experience.id" v-model="form.experience"
                                                :value="experience.id" />
                                            <label :for="'experience'+experience.id">{{experience.name}}</label>
                                        </div>
                                        <InputError :message="form.errors.experience" class="mt-2"/>
                                    </div>
                                    <div class="mt-4" v-if="welcomes">
                                        <InputLabel for="day" :value="__('translate.welcome')" />
                                        <div v-for="welcome in welcomes" class="flex items-center mt-1">
                                            <input
                                                class="rounded border-gray-300 text-blue-work shadow-sm focus:ring-blue-work mr-2"
                                                type="checkbox" :id="'welcome'+welcome.id" v-model="form.welcome"
                                                :value="welcome.id" />
                                            <label :for="'welcome'+welcome.id">{{welcome.name}}</label>
                                        </div>
                                        <InputError :message="form.errors.welcome" class="mt-2"/>
                                    </div>
                                </div>
                                <div class="col-span-6">
                                    <div class="mt-4" v-if="educations">
                                        <InputLabel :value="__('translate.education')" />
                                        <div v-for="education in educations" class="flex items-center mt-1">
                                            <input
                                                class="border-gray-300 text-blue-work shadow-sm focus:ring-blue-work mr-2"
                                                type="radio" :id="'education-'+education.id" v-model="form.education"
                                                :value="education.id" />
                                            <label :for="'education-'+education.id">{{education.name}}</label>
                                        </div>
                                        <InputError :message="form.errors.education" class="mt-2"/>
                                    </div>
                                </div>
                            </div>
                            <div v-if="formStep == 2" class="col-span-12">
                                <div v-if="toTitleArray.length" class="flex flex-col">
                                    <span>Wybrano : {{toTitleArray.length}}</span>
                                    <danger-button class="w-1/4 mt-2 text-sm" type="button" @click="toTitleArray = []">Zeruj wszytskie</danger-button>
                                </div>
                                <div v-if="titleEqual4" class="bg-blue-work-100 text-white rounded-md p-2 w-2/5 text-center mt-2">
                                    Limit osiągniety
                                </div>

                                <div>
                                    <div class="mt-6 border-t border-gray-100">
                                        <dl class="divide-y divide-gray-100 grid grid-cols-1 grid-cols-2">
                                            <div class="flex items-center mb-1">
                                                <span @click="addToTitleArray" class="text-sm leading-6 text-gray-900" :class="{'bg-blue-work-100 p-1 rounded-md' : toTitleArray.includes(__('translate.category')+':'+form.category.name),'cursor-pointer' : (lessThan4 || toTitleArray.includes(__('translate.category')+':'+form.category.name))}">{{__('translate.category')}}:{{form.category.name}}</span>
                                            </div>
                                            <div class="flex items-center mb-1">
                                                <span @click="addToTitleArray" class="text-sm leading-6 text-gray-900" :class="{'bg-blue-work-100 p-1 rounded-md' : toTitleArray.includes(__('translate.subcategory')+':'+form.categorySub.name),'cursor-pointer' : (lessThan4 || toTitleArray.includes(__('translate.subcategory')+':'+form.categorySub.name))}">{{__('translate.subcategory')}}:{{form.categorySub.name}}</span>
                                            </div>
                                            <div class="flex items-center mb-1">
                                                <span @click="addToTitleArray" class="text-sm leading-6 text-gray-900" :class="{'bg-blue-work-100 p-1 rounded-md' : toTitleArray.includes(__('translate.profession')+':'+form.profession.name),'cursor-pointer' : (lessThan4 || toTitleArray.includes(__('translate.profession')+':'+form.profession.name))}">{{__('translate.profession')}}:{{form.profession.name}}</span>
                                            </div>
                                            <div class="flex items-center mb-1" v-if="form.position">
                                                <span @click="addToTitleArray" class="text-sm leading-6 text-gray-900" :class="{'bg-blue-work-100 p-1 rounded-md' : toTitleArray.includes(__('translate.position')+':'+form.position.name),'cursor-pointer' : (lessThan4 || toTitleArray.includes(__('translate.position')+':'+form.position.name))}">{{__('translate.position')}}:{{form.position.name}}</span>
                                            </div>
                                            <div class="flex items-center mb-1">
                                                <div class="text-sm leading-6 text-gray-900">{{__('translate.workingMode')}}:
                                                    <span class="mr-2 underline font-semibold" @click="addToTitleArrayKey(__('translate.workingMode'),el)" v-for="el in workingModeSelect" :class="{'bg-blue-work-100 p-1 rounded-md' : toTitleArray.includes(__('translate.workingMode')+':'+el),'cursor-pointer' : (lessThan4 || toTitleArray.includes(__('translate.workingMode')+':'+el))}">
                                                    {{el}}
                                                </span>
                                                </div>
                                            </div>
                                            <div class="flex items-center mb-1">
                                                <span @click="addToTitleArray" class="text-sm leading-6 text-gray-900" :class="{'bg-blue-work-100 p-1 rounded-md' : toTitleArray.includes(__('translate.Country')+':'+form.country.name),'cursor-pointer' : (lessThan4 || toTitleArray.includes(__('translate.Country')+':'+form.country.name))}">{{__('translate.Country')}}:{{form.country.name}}</span>
                                            </div>
                                            <div class="flex items-center mb-1">
                                                <span @click="addToTitleArray" class="text-sm leading-6 text-gray-900" :class="{'bg-blue-work-100 p-1 rounded-md' : toTitleArray.includes(__('translate.workingPlace')+':'+form.workingPlace.name),'cursor-pointer' : (lessThan4 || toTitleArray.includes(__('translate.workingPlace')+':'+form.workingPlace.name))}">{{__('translate.workingPlace')}}:{{form.workingPlace.name}}</span>
                                            </div>
                                            <div class="flex items-center mb-1">
                                                <div class="text-sm leading-6 text-gray-900">{{__('translate.typesOfContract')}}:
                                                    <span class="mr-2 underline font-semibold" @click="addToTitleArrayKey(__('translate.typesOfContract'),el)" v-for="el in typesOfContractSelect" :class="{'bg-blue-work-100 p-1 rounded-md' : toTitleArray.includes(__('translate.typesOfContract')+':'+el),'cursor-pointer' : (lessThan4 || toTitleArray.includes(__('translate.typesOfContract')+':'+el))}">
                                                    {{el}}
                                                </span>
                                                </div>
                                            </div>
                                            <div class="flex items-center mb-1">
                                                <span @click="addToTitleArray" class="text-sm leading-6 text-gray-900" :class="{'bg-blue-work-100 p-1 rounded-md' : toTitleArray.includes(__('translate.workLoads')+':'+workLoadSelect),'cursor-pointer' : (lessThan4 || toTitleArray.includes(__('translate.workLoads')+':'+workLoadSelect))}">{{__('translate.workLoads')}}:{{workLoadSelect}}</span>
                                            </div>
                                            <div class="flex items-center mb-1">
                                                <div class="text-sm leading-6 text-gray-900">
                                                    <span @click="addToTitleArray" class="text-sm leading-6 text-gray-900" :class="{'bg-blue-work-100 p-1 rounded-md' : toTitleArray.includes(__('translate.payoutModes')+':'+payoutModeSelect),'cursor-pointer' : (lessThan4 || toTitleArray.includes(__('translate.payoutModes')+':'+payoutModeSelect))}">{{__('translate.payoutModes')}}:{{payoutModeSelect}}</span>
                                                </div>
                                            </div>
                                            <div class="flex items-center mb-1">
                                                <div class="text-sm leading-6 text-gray-900">{{__('translate.paySystem')}}:
                                                    <span class="mr-2 underline font-semibold" @click="addToTitleArrayKey(__('translate.paySystem'),el)" v-for="el in paySystemSelect" :class="{'bg-blue-work-100 p-1 rounded-md' : toTitleArray.includes(__('translate.paySystem')+':'+el),'cursor-pointer' : (lessThan4 || toTitleArray.includes(__('translate.paySystem')+':'+el))}">
                                                    {{el}}
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="flex items-center mb-1">
                                                <span @click="addToTitleArray" class="text-sm leading-6 text-gray-900" :class="{'bg-blue-work-100 p-1 rounded-md' : toTitleArray.includes(__('translate.bonusSalaryTo')+':'+form.bonusSalaryTo + ' ' + usePage().props.currencyFromClient),'cursor-pointer' : (lessThan4 || toTitleArray.includes(__('translate.bonusSalaryTo')+':'+form.bonusSalaryTo + ' ' + usePage().props.currencyFromClient))}">{{__('translate.bonusSalaryTo')}}:{{form.bonusSalaryTo + ' ' + usePage().props.currencyFromClient}}</span>
                                            </div>
                                            <div class="flex items-center mb-1">
                                                <span @click="addToTitleArray" class="text-sm leading-6 text-gray-900" :class="{'bg-blue-work-100 p-1 rounded-md' : toTitleArray.includes(__('translate.basicSalaryTo')+':'+form.basicSalaryTo + ' ' + usePage().props.currencyFromClient),'cursor-pointer' : (lessThan4 || toTitleArray.includes(__('translate.basicSalaryTo')+':'+form.basicSalaryTo + ' ' + usePage().props.currencyFromClient))}">{{__('translate.basicSalaryTo')}}:{{form.basicSalaryTo + ' ' + usePage().props.currencyFromClient}}</span>
                                            </div>
                                            <div class="flex items-center mb-1">
                                                <div class="text-sm leading-6 text-gray-900">{{__('translate.dayWork')}}:
                                                    <span class="mr-2 underline font-semibold" @click="addToTitleArrayKey(__('translate.dayWork'),el)" v-for="el in daySelect" :class="{'bg-blue-work-100 p-1 rounded-md' : toTitleArray.includes(__('translate.dayWork')+':'+el),'cursor-pointer' : (lessThan4 || toTitleArray.includes(__('translate.dayWork')+':'+el))}">
                                                    {{el}}
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="flex items-center mb-1" v-if="form.shiftWork == 1">
                                                <span @click="addToTitleArray" class="text-sm leading-6 text-gray-900" :class="{'bg-blue-work-100 p-1 rounded-md' : toTitleArray.includes(__('translate.shiftWorks')),'cursor-pointer' : (lessThan4 || toTitleArray.includes(__('translate.shiftWorks')))}">{{__('translate.shiftWorks')}}</span>
                                            </div>
                                            <div class="flex items-center mb-1" v-if="form.workNight == 1">
                                                <span @click="addToTitleArray" class="text-sm leading-6 text-gray-900" :class="{'bg-blue-work-100 p-1 rounded-md' : toTitleArray.includes(__('translate.workNight')),'cursor-pointer' : (lessThan4 || toTitleArray.includes(__('translate.workNight')))}">{{__('translate.workNight')}}</span>
                                            </div>
                                            <div class="flex items-center mb-1">
                                                <div class="text-sm leading-6 text-gray-900">{{__('translate.offer')}}:
                                                    <span class="mr-2 underline font-semibold" @click="addToTitleArrayKey(__('translate.offer'),el)" v-for="el in offerSelect" :class="{'bg-blue-work-100 p-1 rounded-md' : toTitleArray.includes(__('translate.offer')+':'+el),'cursor-pointer' : (lessThan4 || toTitleArray.includes(__('translate.offer')+':'+el))}">
                                                    {{el}}
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="flex items-center mb-1">
                                                <div class="text-sm leading-6 text-gray-900">{{__('translate.wait')}}:
                                                    <span class="mr-2 underline font-semibold" @click="addToTitleArrayKey(__('translate.wait'),el)" v-for="el in waitSelect" :class="{'bg-blue-work-100 p-1 rounded-md' : toTitleArray.includes(__('translate.wait')+':'+el),'cursor-pointer' : (lessThan4 || toTitleArray.includes(__('translate.wait')+':'+el))}">
                                                    {{el}}
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="flex items-center mb-1">
                                                <div class="text-sm leading-6 text-gray-900">{{__('translate.experience')}}:
                                                    <span class="mr-2 underline font-semibold" @click="addToTitleArrayKey(__('translate.experience'),el)" v-for="el in experienceSelect" :class="{'bg-blue-work-100 p-1 rounded-md' : toTitleArray.includes(__('translate.experience')+':'+el),'cursor-pointer' : (lessThan4 || toTitleArray.includes(__('translate.experience')+':'+el))}">
                                                    {{el}}
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="flex items-center mb-1">
                                                <div class="text-sm leading-6 text-gray-900">{{__('translate.welcome')}}:
                                                    <span class="mr-2 underline font-semibold" @click="addToTitleArrayKey(__('translate.welcome'),el)" v-for="el in welcomeSelect" :class="{'bg-blue-work-100 p-1 rounded-md' : toTitleArray.includes(__('translate.welcome')+':'+el),'cursor-pointer' : (lessThan4 || toTitleArray.includes(__('translate.welcome')+':'+el))}">
                                                    {{el}}
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="flex items-center mb-1" v-if="educationSelect">
                                                <div class="text-sm leading-6 text-gray-900">
                                                    <span @click="addToTitleArray" class="text-sm leading-6 text-gray-900" :class="{'bg-blue-work-100 p-1 rounded-md' : toTitleArray.includes(__('translate.education')+':'+educationSelect),'cursor-pointer' : (lessThan4 || toTitleArray.includes(__('translate.education')+':'+educationSelect))}">{{__('translate.education')}}:{{educationSelect}}</span>
                                                </div>
                                            </div>
                                        </dl>
                                    </div>
                                    <div v-if="titleEqual4" class="flex justify-center mt-2">
                                        <primary-button class="w-1/5 text-center mx-auto flex justify-center items-center" type="button" @click="generateTitle">Generuj</primary-button>
                                    </div>
                                    <div class="mt-4">
                                        <div v-for="(title,index) in titlesFromLang">
                                            <span @click="(form.title && form.title[usePage().props.language] == title ? form.title = null : form.title = listOfTitle[index])" class="cursor-pointer" :class="{'bg-blue-work-100 p-1 rounded-md' : form.title && form.title[usePage().props.language] == title}">{{title}}</span>
                                        </div>
                                    </div>
                                    {{form}}
                                </div>
                            </div>
                        </template>

                        <template #actions>
                            <secondary-button type="button" v-if="formStep  == 1" @click="nextStep">Następny</secondary-button>
                            <secondary-button type="button" v-if="formStep  == 2" @click="prevStep" class="mr-2">Poprzedni</secondary-button>
                            <PrimaryButton v-if="formStep  == 2" :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
                                <spinner-action :process="form.processing">{{__('translate.update')}}</spinner-action>
                            </PrimaryButton>
                        </template>
                    </FormSectionProject>
                </div>
            </div>
        </div>
    </AppLayout>
</template>
<style src="vue-multiselect/dist/vue-multiselect.css"></style>
<style lang="scss">


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
