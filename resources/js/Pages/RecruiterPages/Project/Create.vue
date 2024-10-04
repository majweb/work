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
import DangerButton from "@/Components/DangerButton.vue";
import SecondaryButton from "@/Components/SecondaryButton.vue";

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
});

const form = useForm({
    category: '',
    categorySub: '',
    profession: '',
    position: '',
    title: '',
    basicSalaryFrom: '',
    basicSalaryTo: '',
    bonusSalaryFrom: '',
    bonusSalaryTo: '',
    hoursFrom: '',
    hoursTo: '',
    workLoad: '',
    education: '',
    shiftWork: '',
    payoutMode: '',
    workNight: '',
    workingMode: [],
    typeOfContract: [],
    paySystem: [],
    workingPlace: [],
    country: [],
    days: [],
    offer: [],
    wait: [],
    experience: [],
    welcome: [],
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
});
watch(() => form.categorySub, async (categorySub) => {
    if (form.categorySub) {
        optionsProfession.value =(await axios.get(route('getChildsCategory',categorySub.value))).data
    }
        optionsPosition.value = [];
        form.profession = '';
        form.position = '';
});

watch(() => form.profession, async (profession) => {
    if (form.profession) {
        titles.value = (await axios.get(route('getTitlesCategory',profession.value))).data
        optionsPosition.value =(await axios.get(route('getChildsCategory',profession.value))).data
    }
        form.position = '';
});
watch(() => form.position, async (position) => {
    if (form.position) {
        titles.value = (await axios.get(route('getTitlesCategory',position.value))).data
    } else {
        titles.value = [];
        form.title = '';
    }
});

const nextStep = () =>{
    form.post(route('project-recruits.storeFirsStep'), {
        errorBag: 'createProject',
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

const createProject = () => {
    form.post(route('project-recruits.store'), {
        errorBag: 'createProject',
        preserveScroll: true,
        onSuccess: () => {
            form.reset();
            formStep.value = 1;
        },

    });
};

const lessThan4 = computed(()=>{
    return toTitleArray.value.length < 4;
})
const titleEqual4 = computed(()=>{
    return toTitleArray.value.length == 4;
})
const titlesFromLang = computed(()=>{
    return listOfTitle.value.map((el)=>el[usePage().props.language]);


})

const generateTitle = async () => {
    let result = await axios.post(route('generateTitle'), toTitleArray.value);
    console.log(result)
    listOfTitle.value = result.data;
}
</script>

<template>
    <AppLayout :title="__('auth.createRecruit')">
        <template #header>
            <div class="flex justify-between">

                <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                    {{__('auth.createProject')}}
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
                    <FormSection @submitted="createProject">
                        <template #title>
                            {{__('auth.project')}}
                        </template>

                        <template #description>
                            {{__('auth.projectInfo')}}
                        </template>

                        <template #form>
                            <div v-if="formStep == 1" class="col-span-12">
                                <div class="col-span-6 grid grid grid-cols-1 md:grid-cols-2 gap-6">
                                    <div>
                                        <InputLabel :value="__('auth.category')"/>
                                        <multiselect
                                            :selectLabel="__('auth.selectLabel')"
                                            :selectGroupLabel="__('auth.selectGroupLabel')"
                                            :selectedLabel="__('auth.selectedLabel')"
                                            :deselectLabel="__('auth.deselectLabel')"
                                            track-by="value"
                                            label="name"
                                            :placeholder="__('auth.placeholder')"
                                            v-model="form.category" :options="optionsCategory">
                                            <template #noResult>
                                                <span>{{__('auth.noOptions')}}</span>
                                            </template>
                                            <template #noOptions>
                                                <span>{{__('auth.noResult')}}</span>
                                            </template>
                                        </multiselect>
                                        <InputError :message="form.errors.category" class="mt-2"/>

                                    </div>
                                    <div>
                                        <InputLabel :value="__('auth.subcategory')"/>
                                        <multiselect
                                            :disabled="!form.category"
                                            :selectLabel="__('auth.selectLabel')"
                                            :selectGroupLabel="__('auth.selectGroupLabel')"
                                            :selectedLabel="__('auth.selectedLabel')"
                                            :deselectLabel="__('auth.deselectLabel')"
                                            :noOptions="__('auth.noOptions')"
                                            :noResult="__('auth.noResult')"
                                            track-by="value"
                                            label="name"
                                            :placeholder="__('auth.placeholder')"
                                            v-model="form.categorySub" :options="optionsSubCategory">
                                            <template #noResult>
                                                <span>{{__('auth.noOptions')}}</span>
                                            </template>
                                            <template #noOptions>
                                                <span>{{__('auth.noResult')}}</span>
                                            </template>
                                        </multiselect>
                                        <InputError :message="form.errors.categorySub" class="mt-2"/>

                                    </div>
                                    <div>
                                        <InputLabel :value="__('auth.profession')"/>
                                        <multiselect
                                            :disabled="!form.categorySub"
                                            :selectLabel="__('auth.selectLabel')"
                                            :selectGroupLabel="__('auth.selectGroupLabel')"
                                            :selectedLabel="__('auth.selectedLabel')"
                                            :deselectLabel="__('auth.deselectLabel')"
                                            :noOptions="__('auth.noOptions')"
                                            :noResult="__('auth.noResult')"
                                            track-by="value"
                                            label="name"
                                            :placeholder="__('auth.placeholder')"
                                            v-model="form.profession" :options="optionsProfession">
                                            <template #noResult>
                                                <span>{{__('auth.noOptions')}}</span>
                                            </template>
                                            <template #noOptions>
                                                <span>{{__('auth.noResult')}}</span>
                                            </template>
                                        </multiselect>
                                        <InputError :message="form.errors.profession" class="mt-2"/>

                                    </div>
                                    <div>
                                        <InputLabel :value="__('auth.position')"/>
                                        <multiselect
                                            :disabled="!form.profession"
                                            :selectLabel="__('auth.selectLabel')"
                                            :selectGroupLabel="__('auth.selectGroupLabel')"
                                            :selectedLabel="__('auth.selectedLabel')"
                                            :deselectLabel="__('auth.deselectLabel')"
                                            :noOptions="__('auth.noOptions')"
                                            :noResult="__('auth.noResult')"
                                            track-by="value"
                                            label="name"
                                            :placeholder="__('auth.placeholder')"
                                            v-model="form.position" :options="optionsPosition">
                                            <template #noResult>
                                                <span>{{__('auth.noOptions')}}</span>
                                            </template>
                                            <template #noOptions>
                                                <span>{{__('auth.noResult')}}</span>
                                            </template>
                                        </multiselect>
                                        <InputError :message="form.errors.position" class="mt-2"/>

                                    </div>
                                </div>
                                <div class="col-span-6 grid grid-cols-2">
                                    <div v-if="titles.length">
                                        <InputLabel :value="__('auth.title')"/>
                                        <div v-for="title in titles" class="flex items-center mt-1">
                                                <input
                                                    class=" border-gray-300 text-blue-work shadow-sm focus:ring-blue-work mr-2"
                                                    type="radio" :id="'title-'+title.id" :value="title.id" v-model="form.title" />
                                            <label :for="'title-'+title.id">{{title.title}}</label>
                                        </div>
                                        <InputError :message="form.errors.title" class="mt-2"/>
                                    </div>

                                    <div class="mt-4" v-if="workingModes">
                                        <InputLabel for="workingMode" :value="__('auth.workingMode')" />
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
                                <div class="col-span-6">
                                    <div>
                                        <InputLabel :value="__('auth.Country')"/>
                                        <multiselect
                                            group-values="elements" group-label="group"
                                            :group-select="false"
                                            :selectLabel="__('auth.selectLabel')"
                                            :selectGroupLabel="__('auth.selectGroupLabel')"
                                            :selectedLabel="__('auth.selectedLabel')"
                                            :deselectLabel="__('auth.deselectLabel')"
                                            track-by="name"
                                            label="name"
                                            :placeholder="__('auth.placeholder')"
                                            v-model="form.country" :options="optionsCountry">
                                            <template #noResult>
                                                <span>{{__('auth.noOptions')}}</span>
                                            </template>
                                            <template #noOptions>
                                                <span>{{__('auth.noResult')}}</span>
                                            </template>
                                        </multiselect>
                                        <InputError :message="form.errors.country" class="mt-2"/>

                                    </div>
                                </div>
                                <div class="col-span-6">
                                    <div>
                                        <InputLabel :value="__('auth.workingPlace')"/>
                                        <multiselect
                                            :selectLabel="__('auth.selectLabel')"
                                            :selectGroupLabel="__('auth.selectGroupLabel')"
                                            :selectedLabel="__('auth.selectedLabel')"
                                            :deselectLabel="__('auth.deselectLabel')"
                                            :noOptions="__('auth.noOptions')"
                                            :noResult="__('auth.noResult')"
                                            track-by="value"
                                            label="name"
                                            :placeholder="__('auth.placeholder')"
                                            v-model="form.workingPlace" :options="optionsWorkingPlace">
                                            <template #noResult>
                                                <span>{{__('auth.noOptions')}}</span>
                                            </template>
                                            <template #noOptions>
                                                <span>{{__('auth.noResult')}}</span>
                                            </template>
                                        </multiselect>
                                        <InputError :message="form.errors.workingPlace" class="mt-2"/>

                                    </div>
                                </div>
                                <div class="col-span-6 grid grid-cols-1 md:grid-cols-2 gap-6">
                                    <div class="mt-4" v-if="typesOfContract">
                                        <InputLabel for="workingMode" :value="__('auth.typesOfContract')" />
                                        <div v-for="typeOfContract in typesOfContract" class="flex items-center mt-1">
                                            <input
                                                class="rounded border-gray-300 text-blue-work shadow-sm focus:ring-blue-work mr-2"
                                                @change="addToArray(typesOfContractSelect,typeOfContract.name)"
                                                type="checkbox" :id="'typeOfContract-'+typeOfContract.id" v-model="form.typeOfContract"
                                                :value="typeOfContract.id" />
                                            <label :for="'typeOfContract-'+typeOfContract.id">{{typeOfContract.name}}</label>
                                        </div>
                                        <InputError :message="form.errors.typeOfContract" class="mt-2"/>
                                    </div>
                                    <div class="mt-4" v-if="workLoads">
                                        <InputLabel :value="__('auth.workLoads')" />
                                        <div v-for="workLoad in workLoads" class="flex items-center mt-1">
                                            <input
                                                class="border-gray-300 text-blue-work shadow-sm focus:ring-blue-work mr-2"
                                                @change="workLoadSelect = workLoad.name"
                                                type="radio" :id="'workLoad-'+workLoad.id" v-model="form.workLoad"
                                                :value="workLoad.id" />
                                            <label :for="'workLoad-'+workLoad.id">{{workLoad.name}}</label>
                                        </div>
                                        <InputError :message="form.errors.workLoad" class="mt-2"/>
                                    </div>
                                </div>
                                <div class="col-span-6 grid grid-cols-1 md:grid-cols-2 gap-6">
                                    <div class="mt-4">
                                        <InputLabel :value="__('auth.basicSalaryFrom')" />
                                        <TextInput
                                            id="basicSalaryFrom"
                                            v-model="form.basicSalaryFrom"
                                            class="mt-1 block w-full"
                                            type="number"
                                            step="0.1"
                                        />
                                        <InputError :message="form.errors.basicSalaryFrom" class="mt-2"/>

                                    </div>
                                    <div class="mt-4">
                                        <InputLabel :value="__('auth.basicSalaryTo')" />
                                        <TextInput
                                            id="basicSalaryTo"
                                            v-model="form.basicSalaryTo"
                                            class="mt-1 block w-full"
                                            type="number"
                                            step="0.1"
                                        />
                                        <InputError :message="form.errors.basicSalaryTo" class="mt-2"/>

                                    </div>
                                </div>
                                <div class="col-span-6 grid grid-cols-1 md:grid-cols-2 gap-6">
                                    <div class="mt-4" v-if="payoutModes">
                                        <InputLabel :value="__('auth.payoutModes')" />
                                        <div v-for="payoutMode in payoutModes" class="flex items-center mt-1">
                                            <input
                                                class="border-gray-300 text-blue-work shadow-sm focus:ring-blue-work mr-2"
                                                @change="payoutModeSelect = payoutMode.name"
                                                type="radio" :id="'payoutMode-'+payoutMode.id" v-model="form.payoutMode"
                                                :value="payoutMode.id" />
                                            <label :for="'payoutMode-'+payoutMode.id">{{payoutMode.name}}</label>
                                        </div>
                                        <InputError :message="form.errors.payoutMode" class="mt-2"/>
                                    </div>
                                    <div class="mt-4" v-if="paySystems">
                                        <InputLabel for="paySystem" :value="__('auth.paySystem')" />
                                        <div v-for="paySystem in paySystems" class="flex items-center mt-1">
                                            <input
                                                class="rounded border-gray-300 text-blue-work shadow-sm focus:ring-blue-work mr-2"
                                                @change="addToArray(paySystemSelect,paySystem.name)"
                                                type="checkbox" :id="'paySystem-'+paySystem.id" v-model="form.paySystem"
                                                :value="paySystem.id" />
                                            <label :for="'paySystem-'+paySystem.id">{{paySystem.name}}</label>
                                        </div>
                                        <InputError :message="form.errors.paySystem" class="mt-2"/>
                                    </div>
                                </div>
                                <div class="col-span-6 grid grid-cols-1 md:grid-cols-2 gap-6">
                                    <div class="mt-4">
                                        <InputLabel :value="__('auth.bonusSalaryFrom')" />
                                        <TextInput
                                            id="bonusSalaryFrom"
                                            v-model="form.bonusSalaryFrom"
                                            class="mt-1 block w-full"
                                            type="number"
                                            step="0.1"
                                        />
                                        <InputError :message="form.errors.bonusSalaryFrom" class="mt-2"/>

                                    </div>
                                    <div class="mt-4">
                                        <InputLabel :value="__('auth.bonusSalaryTo')" />
                                        <TextInput
                                            id="bonusSalaryTo"
                                            v-model="form.bonusSalaryTo"
                                            class="mt-1 block w-full"
                                            type="number"
                                            step="0.1"
                                        />
                                        <InputError :message="form.errors.bonusSalaryTo" class="mt-2"/>

                                    </div>
                                </div>
                                <div class="col-span-6 grid grid-cols-1 md:grid-cols-2 gap-6">
                                    <div class="mt-4" v-if="days">
                                        <InputLabel for="day" :value="__('auth.dayWork')" />
                                        <div v-for="day in days" class="flex items-center mt-1">
                                            <input
                                                @change="addToArray(daySelect,day.name)"
                                                class="rounded border-gray-300 text-blue-work shadow-sm focus:ring-blue-work mr-2"
                                                type="checkbox" :id="'day-'+day.id" v-model="form.days"
                                                :value="day.id" />
                                            <label :for="'day-'+day.id">{{day.name}}</label>
                                        </div>
                                        <InputError :message="form.errors.days" class="mt-2"/>
                                    </div>
                                    <div class="mt-4" v-if="shiftWorks">
                                        <InputLabel :value="__('auth.shiftWorks')" />
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
                                        <InputLabel :value="__('auth.hoursFrom')" />
                                        <TextInput
                                            type="time"
                                            id="hoursFrom"
                                            v-model="form.hoursFrom"
                                            class="mt-1 block w-full"
                                        />
                                        <InputError :message="form.errors.hoursFrom" class="mt-2"/>
                                    </div>
                                    <div class="mt-4">
                                        <InputLabel :value="__('auth.hoursTo')" />
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
                                        <InputLabel :value="__('auth.workNight')" />
                                        <div class="flex mt-1 flex-col">
                                            <div class="flex items-center">
                                                <input
                                                    class="border-gray-300 text-blue-work shadow-sm focus:ring-blue-work mr-2"
                                                    type="radio" id="workNight-1" v-model="form.workNight"
                                                    value="1" />
                                                    <label for="workNight-1">{{__('auth.yes')}}</label>
                                            </div>
                                            <div class="flex items-center">
                                                <input
                                                    class="border-gray-300 text-blue-work shadow-sm focus:ring-blue-work mr-2"
                                                    type="radio" id="workNight-2" v-model="form.workNight"
                                                    value="2" />
                                                <label for="workNight-2">{{__('auth.no')}}</label>
                                            </div>
                                                <InputError :message="form.errors.workNight" class="mt-2"/>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-span-6 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                                    <div class="mt-4" v-if="offers">
                                        <InputLabel for="day" :value="__('auth.offer')" />
                                        <div v-for="offer in offers" class="flex items-center mt-1">
                                            <input
                                                @change="addToArray(offerSelect,offer.name)"
                                                class="rounded border-gray-300 text-blue-work shadow-sm focus:ring-blue-work mr-2"
                                                type="checkbox" :id="'offer'+offer.id" v-model="form.offer"
                                                :value="offer.id" />
                                            <label :for="'offer'+offer.id">{{offer.name}}</label>
                                        </div>
                                        <InputError :message="form.errors.offer" class="mt-2"/>
                                    </div>
                                    <div class="mt-4" v-if="waits">
                                        <InputLabel for="day" :value="__('auth.wait')" />
                                        <div v-for="wait in waits" class="flex items-center mt-1">
                                            <input
                                                @change="addToArray(waitSelect,wait.name)"
                                                class="rounded border-gray-300 text-blue-work shadow-sm focus:ring-blue-work mr-2"
                                                type="checkbox" :id="'wait'+wait.id" v-model="form.wait"
                                                :value="wait.id" />
                                            <label :for="'wait'+wait.id">{{wait.name}}</label>
                                        </div>
                                        <InputError :message="form.errors.wait" class="mt-2"/>
                                    </div>
                                    <div class="mt-4" v-if="experiences">
                                        <InputLabel for="day" :value="__('auth.experience')" />
                                        <div v-for="experience in experiences" class="flex items-center mt-1">
                                            <input
                                                @change="addToArray(experienceSelect,experience.name)"
                                                class="rounded border-gray-300 text-blue-work shadow-sm focus:ring-blue-work mr-2"
                                                type="checkbox" :id="'experience'+experience.id" v-model="form.experience"
                                                :value="experience.id" />
                                            <label :for="'experience'+experience.id">{{experience.name}}</label>
                                        </div>
                                        <InputError :message="form.errors.experience" class="mt-2"/>
                                    </div>
                                    <div class="mt-4" v-if="welcomes">
                                        <InputLabel for="day" :value="__('auth.welcome')" />
                                        <div v-for="welcome in welcomes" class="flex items-center mt-1">
                                            <input
                                                @change="addToArray(welcomeSelect,welcome.name)"
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
                                    <InputLabel :value="__('auth.education')" />
                                    <div v-for="education in educations" class="flex items-center mt-1">
                                        <input
                                            @change="educationSelect = education.name"
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
                                                <span @click="addToTitleArray" class="text-sm leading-6 text-gray-900" :class="{'bg-blue-work-100 p-1 rounded-md' : toTitleArray.includes(__('auth.category')+':'+form.category.name),'cursor-pointer' : (lessThan4 || toTitleArray.includes(__('auth.category')+':'+form.category.name))}">{{__('auth.category')}}:{{form.category.name}}</span>
                                            </div>
                                            <div class="flex items-center mb-1">
                                                <span @click="addToTitleArray" class="text-sm leading-6 text-gray-900" :class="{'bg-blue-work-100 p-1 rounded-md' : toTitleArray.includes(__('auth.subcategory')+':'+form.categorySub.name),'cursor-pointer' : (lessThan4 || toTitleArray.includes(__('auth.subcategory')+':'+form.categorySub.name))}">{{__('auth.subcategory')}}:{{form.categorySub.name}}</span>
                                            </div>
                                            <div class="flex items-center mb-1">
                                                <span @click="addToTitleArray" class="text-sm leading-6 text-gray-900" :class="{'bg-blue-work-100 p-1 rounded-md' : toTitleArray.includes(__('auth.profession')+':'+form.profession.name),'cursor-pointer' : (lessThan4 || toTitleArray.includes(__('auth.profession')+':'+form.profession.name))}">{{__('auth.profession')}}:{{form.profession.name}}</span>
                                            </div>
                                            <div class="flex items-center mb-1" v-if="form.position">
                                                <span @click="addToTitleArray" class="text-sm leading-6 text-gray-900" :class="{'bg-blue-work-100 p-1 rounded-md' : toTitleArray.includes(__('auth.position')+':'+form.position.name),'cursor-pointer' : (lessThan4 || toTitleArray.includes(__('auth.position')+':'+form.position.name))}">{{__('auth.position')}}:{{form.position.name}}</span>
                                            </div>
                                            <div class="flex items-center mb-1">
                                                <div class="text-sm leading-6 text-gray-900">{{__('auth.workingMode')}}:
                                                <span class="mr-2 underline font-semibold" @click="addToTitleArrayKey(__('auth.workingMode'),el)" v-for="el in workingModeSelect" :class="{'bg-blue-work-100 p-1 rounded-md' : toTitleArray.includes(__('auth.workingMode')+':'+el),'cursor-pointer' : (lessThan4 || toTitleArray.includes(__('auth.workingMode')+':'+el))}">
                                                    {{el}}
                                                </span>
                                                </div>
                                            </div>
                                            <div class="flex items-center mb-1">
                                                <span @click="addToTitleArray" class="text-sm leading-6 text-gray-900" :class="{'bg-blue-work-100 p-1 rounded-md' : toTitleArray.includes(__('auth.Country')+':'+form.country.name),'cursor-pointer' : (lessThan4 || toTitleArray.includes(__('auth.Country')+':'+form.country.name))}">{{__('auth.Country')}}:{{form.country.name}}</span>
                                            </div>
                                            <div class="flex items-center mb-1">
                                                <span @click="addToTitleArray" class="text-sm leading-6 text-gray-900" :class="{'bg-blue-work-100 p-1 rounded-md' : toTitleArray.includes(__('auth.workingPlace')+':'+form.workingPlace.name),'cursor-pointer' : (lessThan4 || toTitleArray.includes(__('auth.workingPlace')+':'+form.workingPlace.name))}">{{__('auth.workingPlace')}}:{{form.workingPlace.name}}</span>
                                            </div>
                                            <div class="flex items-center mb-1">
                                                <div class="text-sm leading-6 text-gray-900">{{__('auth.typesOfContract')}}:
                                                     <span class="mr-2 underline font-semibold" @click="addToTitleArrayKey(__('auth.typesOfContract'),el)" v-for="el in typesOfContractSelect" :class="{'bg-blue-work-100 p-1 rounded-md' : toTitleArray.includes(__('auth.typesOfContract')+':'+el),'cursor-pointer' : (lessThan4 || toTitleArray.includes(__('auth.typesOfContract')+':'+el))}">
                                                    {{el}}
                                                </span>
                                                </div>
                                            </div>
                                            <div class="flex items-center mb-1">
                                                <span @click="addToTitleArray" class="text-sm leading-6 text-gray-900" :class="{'bg-blue-work-100 p-1 rounded-md' : toTitleArray.includes(__('auth.workLoads')+':'+workLoadSelect),'cursor-pointer' : (lessThan4 || toTitleArray.includes(__('auth.workLoads')+':'+workLoadSelect))}">{{__('auth.workLoads')}}:{{workLoadSelect}}</span>
                                            </div>
                                            <div class="flex items-center mb-1">
                                                <div class="text-sm leading-6 text-gray-900">
                                                    <span @click="addToTitleArray" class="text-sm leading-6 text-gray-900" :class="{'bg-blue-work-100 p-1 rounded-md' : toTitleArray.includes(__('auth.payoutModes')+':'+payoutModeSelect),'cursor-pointer' : (lessThan4 || toTitleArray.includes(__('auth.payoutModes')+':'+payoutModeSelect))}">{{__('auth.payoutModes')}}:{{payoutModeSelect}}</span>
                                                </div>
                                            </div>
                                            <div class="flex items-center mb-1">
                                                <div class="text-sm leading-6 text-gray-900">{{__('auth.paySystem')}}:
                                                    <span class="mr-2 underline font-semibold" @click="addToTitleArrayKey(__('auth.paySystem'),el)" v-for="el in paySystemSelect" :class="{'bg-blue-work-100 p-1 rounded-md' : toTitleArray.includes(__('auth.paySystem')+':'+el),'cursor-pointer' : (lessThan4 || toTitleArray.includes(__('auth.paySystem')+':'+el))}">
                                                    {{el}}
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="flex items-center mb-1">
                                                <span @click="addToTitleArray" class="text-sm leading-6 text-gray-900" :class="{'bg-blue-work-100 p-1 rounded-md' : toTitleArray.includes(__('auth.bonusSalaryTo')+':'+form.bonusSalaryTo + ' ' + usePage().props.currencyFromClient),'cursor-pointer' : (lessThan4 || toTitleArray.includes(__('auth.bonusSalaryTo')+':'+form.bonusSalaryTo + ' ' + usePage().props.currencyFromClient))}">{{__('auth.bonusSalaryTo')}}:{{form.bonusSalaryTo + ' ' + usePage().props.currencyFromClient}}</span>
                                            </div>
                                            <div class="flex items-center mb-1">
                                                <span @click="addToTitleArray" class="text-sm leading-6 text-gray-900" :class="{'bg-blue-work-100 p-1 rounded-md' : toTitleArray.includes(__('auth.basicSalaryTo')+':'+form.basicSalaryTo + ' ' + usePage().props.currencyFromClient),'cursor-pointer' : (lessThan4 || toTitleArray.includes(__('auth.basicSalaryTo')+':'+form.basicSalaryTo + ' ' + usePage().props.currencyFromClient))}">{{__('auth.basicSalaryTo')}}:{{form.basicSalaryTo + ' ' + usePage().props.currencyFromClient}}</span>
                                            </div>
                                            <div class="flex items-center mb-1">
                                                <div class="text-sm leading-6 text-gray-900">{{__('auth.dayWork')}}:
                                                    <span class="mr-2 underline font-semibold" @click="addToTitleArrayKey(__('auth.dayWork'),el)" v-for="el in daySelect" :class="{'bg-blue-work-100 p-1 rounded-md' : toTitleArray.includes(__('auth.dayWork')+':'+el),'cursor-pointer' : (lessThan4 || toTitleArray.includes(__('auth.dayWork')+':'+el))}">
                                                    {{el}}
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="flex items-center mb-1" v-if="form.shiftWork == 1">
                                                <span @click="addToTitleArray" class="text-sm leading-6 text-gray-900" :class="{'bg-blue-work-100 p-1 rounded-md' : toTitleArray.includes(__('auth.shiftWorks')),'cursor-pointer' : (lessThan4 || toTitleArray.includes(__('auth.shiftWorks')))}">{{__('auth.shiftWorks')}}</span>
                                            </div>
                                            <div class="flex items-center mb-1" v-if="form.workNight == 1">
                                                <span @click="addToTitleArray" class="text-sm leading-6 text-gray-900" :class="{'bg-blue-work-100 p-1 rounded-md' : toTitleArray.includes(__('auth.workNight')),'cursor-pointer' : (lessThan4 || toTitleArray.includes(__('auth.workNight')))}">{{__('auth.workNight')}}</span>
                                            </div>
                                            <div class="flex items-center mb-1">
                                                <div class="text-sm leading-6 text-gray-900">{{__('auth.offer')}}:
                                                    <span class="mr-2 underline font-semibold" @click="addToTitleArrayKey(__('auth.offer'),el)" v-for="el in offerSelect" :class="{'bg-blue-work-100 p-1 rounded-md' : toTitleArray.includes(__('auth.offer')+':'+el),'cursor-pointer' : (lessThan4 || toTitleArray.includes(__('auth.offer')+':'+el))}">
                                                    {{el}}
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="flex items-center mb-1">
                                                <div class="text-sm leading-6 text-gray-900">{{__('auth.wait')}}:
                                                    <span class="mr-2 underline font-semibold" @click="addToTitleArrayKey(__('auth.wait'),el)" v-for="el in waitSelect" :class="{'bg-blue-work-100 p-1 rounded-md' : toTitleArray.includes(__('auth.wait')+':'+el),'cursor-pointer' : (lessThan4 || toTitleArray.includes(__('auth.wait')+':'+el))}">
                                                    {{el}}
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="flex items-center mb-1">
                                                <div class="text-sm leading-6 text-gray-900">{{__('auth.experience')}}:
                                                    <span class="mr-2 underline font-semibold" @click="addToTitleArrayKey(__('auth.experience'),el)" v-for="el in experienceSelect" :class="{'bg-blue-work-100 p-1 rounded-md' : toTitleArray.includes(__('auth.experience')+':'+el),'cursor-pointer' : (lessThan4 || toTitleArray.includes(__('auth.experience')+':'+el))}">
                                                    {{el}}
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="flex items-center mb-1">
                                                <div class="text-sm leading-6 text-gray-900">{{__('auth.welcome')}}:
                                                    <span class="mr-2 underline font-semibold" @click="addToTitleArrayKey(__('auth.welcome'),el)" v-for="el in welcomeSelect" :class="{'bg-blue-work-100 p-1 rounded-md' : toTitleArray.includes(__('auth.welcome')+':'+el),'cursor-pointer' : (lessThan4 || toTitleArray.includes(__('auth.welcome')+':'+el))}">
                                                    {{el}}
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="flex items-center mb-1" v-if="educationSelect">
                                                <div class="text-sm leading-6 text-gray-900">
                                                    <span @click="addToTitleArray" class="text-sm leading-6 text-gray-900" :class="{'bg-blue-work-100 p-1 rounded-md' : toTitleArray.includes(__('auth.education')+':'+educationSelect),'cursor-pointer' : (lessThan4 || toTitleArray.includes(__('auth.education')+':'+educationSelect))}">{{__('auth.education')}}:{{educationSelect}}</span>
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
                                <spinner-action :process="form.processing">{{__('auth.add')}}</spinner-action>
                            </PrimaryButton>
                        </template>
                    </FormSection>
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
