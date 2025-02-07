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
import FormSectionProject from "@/Components/FormSectionProject.vue";
import AddressFieldGroup from "@/Components/AddressFieldGroup.vue";

const props = defineProps({
    categories: Array,
    workingModes: Array,
    typesOfContract: Array,
    countries: Array,
    workingPlaces: Array,
    workLoads: Array,
    currencies: Array,
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
    currency: '',
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
    detailProjects: [],
    countryWork: '',
    streetWork: '',
    streetWorkNumber: '',
    postalWork: '',
    cityWork: '',
});


const optionsCategory = ref(props.categories);
const optionsCountry = ref(props.countries);
const optionsWorkingPlace = ref(props.workingPlaces);
const optionsCurrency = ref(props.currencies);
const optionsSubCategory = ref([]);
const optionsProfession = ref([]);
const optionsPosition = ref([]);
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
        optionsPosition.value =(await axios.get(route('getChildsCategory',profession.value))).data
    }
        form.position = '';
    form.detailProjects = [];

});
watch(() => form.position, async (position) => {
    form.title = '';
    form.detailProjects = [];
});

const createProject = () => {
    form.post(route('project-recruits.store'), {
        errorBag: 'createProject',
        preserveScroll: true,
        onSuccess: () => {
            form.reset();
        },
    });
};

const generateUrl = computed(() => {
    if (form.cityWork && form.streetWork && form.streetWorkNumber) {
        let myUrlWithParams = new URL(`https://www.google.com/maps/embed/v1/place?key=${usePage().props.mapsApi}`);
        myUrlWithParams.searchParams.append("q", form.countryWork+' '+form.cityWork+' '+form.streetWork+' '+form.streetWorkNumber +' '+form.postalWork);
        return myUrlWithParams;
    }
});


const addAll = () => {
    if(form.position.detailprojects || form.profession.detailprojects){
        form.detailProjects = (form.position.detailprojects || form.profession.detailprojects).map(el=>el.id)
    }
}
const zeroAll = () => {
        form.detailProjects = []
}

const addToArray = (array,name) =>{
    if(array.includes(name)){
        let found = array.indexOf(name);
        array.splice(found, 1);
    } else {
        array.push(name)
    }
}

const clearCountry = () => {
    form.countryWork = '';
    form.streetWork = '';
    form.streetWorkNumber =  '';
    form.postalWork = '';
    form.cityWork =  '';
}

</script>

<template>
    <AppLayout :title="__('translate.createRecruit')">
        <template #header>
            <div class="flex justify-between">

                <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                    {{__('translate.createProject')}}
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
                    <FormSectionProject @submitted="createProject">
                        <template #form>
                            <div class="col-span-12">
                                <div class="col-span- grid grid grid-cols-1 lg:grid-cols-2 gap-6">
                                    <div>
                                        <InputLabel :value="__('translate.CountryPublish')"/>
                                        <multiselect
                                            group-values="elements" group-label="group"
                                            :group-select="false"
                                            :selectLabel="__('translate.selectLabel')"
                                            :selectGroupLabel="__('translate.selectGroupLabel')"
                                            :selectedLabel="__('translate.selectedLabel')"
                                            :deselectLabel="__('translate.deselectLabel')"
                                            track-by="name"
                                            :multiple="true"
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
                                </div>
                                <div class="col-span-6 grid grid grid-cols-1 md:grid-cols-2 gap-6">
                                    <div>
                                        <InputLabel :value="__('translate.category')"/>
                                        <multiselect
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
                                            :disabled="!form.category"
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
                                            :disabled="!form.categorySub"
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
                                            :disabled="!form.profession"
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
                                <div class="col-span-6 mt-4">
                                    <div class="mt-1">
                                        <InputLabel :value="__('translate.Country')"/>
                                        <multiselect
                                            group-values="elements" group-label="group"
                                            :group-select="false"
                                            :selectLabel="__('translate.selectLabel')"
                                            :selectGroupLabel="__('translate.selectGroupLabel')"
                                            :selectedLabel="__('translate.selectedLabel')"
                                            :deselectLabel="__('translate.deselectLabel')"
                                            track-by="name"
                                            :multiple="false"
                                            label="name"
                                            @remove="clearCountry"
                                            @update:modelValue	="clearCountry"
                                            :placeholder="__('translate.placeholder')"
                                            v-model="form.countryWork" :options="optionsCountry">
                                            <template #noResult>
                                                <span>{{__('translate.noOptions')}}</span>
                                            </template>
                                            <template #noOptions>
                                                <span>{{__('translate.noResult')}}</span>
                                            </template>
                                        </multiselect>
                                        <InputError :message="form.errors.countryWork" class="mt-2"/>
                                    </div>
                                    <AddressFieldGroup class="mt-4" v-if="form.countryWork" :code="form.countryWork?.countryCode"
                                    v-model:street="form.streetWork"
                                    v-model:streetNumber="form.streetWorkNumber"
                                    v-model:postcode="form.postalWork"
                                    v-model:city="form.cityWork"
                                    />
                                    <InputError :message="form.errors.streetWork" class="mt-2"/>
                                    <InputError :message="form.errors.streetWorkNumber" class="mt-2"/>
                                    <InputError :message="form.errors.postalWork" class="mt-2"/>
                                    <InputError :message="form.errors.cityWork" class="mt-2"/>

                                    <!--                                    <div>-->
<!--                                        <InputLabel for="street" :value="__('translate.Street')" />-->
<!--                                        <TextInput-->
<!--                                            id="street"-->
<!--                                            v-model="form.street"-->
<!--                                            class="mt-1 block w-full"-->
<!--                                            type="text"-->
<!--                                        />-->
<!--                                        <InputError :message="form.errors.street" class="mt-2"/>-->
<!--                                    </div>-->
<!--                                    <div>-->
<!--                                        <InputLabel for="city" :value="__('translate.City')" />-->
<!--                                        <TextInput-->
<!--                                            id="city"-->
<!--                                            v-model="form.city"-->
<!--                                            class="mt-1 block w-full"-->
<!--                                            type="text"-->
<!--                                        />-->
<!--                                        <InputError :message="form.errors.city" class="mt-2"/>-->
<!--                                    </div>-->
<!--                                    <div>-->
<!--                                        <InputLabel for="postal" :value="__('translate.Postal')" />-->
<!--                                        <TextInput-->
<!--                                            id="postal"-->
<!--                                            v-model="form.postal"-->
<!--                                            class="mt-1 block w-full"-->
<!--                                            type="text"-->
<!--                                        />-->
<!--                                        <InputError :message="form.errors.postal" class="mt-2"/>-->
<!--                                    </div>-->
<!--                                    <div>-->
<!--                                        <InputLabel for="address" :value="__('translate.address')" />-->
<!--                                        <TextInput-->
<!--                                            id="address"-->
<!--                                            v-model="form.address"-->
<!--                                            class="mt-1 block w-full"-->
<!--                                            type="text"-->
<!--                                        />-->
<!--                                        <InputError :message="form.errors.address" class="mt-2"/>-->
<!--                                    </div>-->
                                </div>
                                <div class="col-span-6 mt-3" v-if="form.cityWork && form.streetWork && form.streetWorkNumber">
                                    <iframe
                                        width="100%"
                                        height="250"
                                        frameborder="0" style="border:0"
                                        referrerpolicy="no-referrer-when-downgrade"
                                        :src="generateUrl"
                                        allowfullscreen>
                                    </iframe>
                                </div>

                                <!-- detailprojects-->
                                <div class="col-span-6 mt-4" v-if="((form.position.detailprojects && Object.keys(form.position.detailprojects).length) || (form.profession.detailprojects && Object.keys(form.profession.detailprojects).length))">
                                    <div class="my-4">
                                        <PrimaryButton class="mr-2" type="button" @click="addAll()">Zaznacz wszystkie</PrimaryButton>
                                        <PrimaryButton v-if="form.detailProjects.length" type="button" @click="zeroAll()">Zeruj wszystkie</PrimaryButton>
                                    </div>
                                    <div class="grid grid grid-cols-1 lg:grid-cols-2">
                                        <InputLabel for="detail" :value="__('translate.detailProjects')" />
                                        <div v-for="detail in (form.position.detailprojects || form.profession.detailprojects)" class="flex items-center">
                                                <input
                                                    class="rounded border-gray-300 text-blue-work shadow-sm focus:ring-blue-work mr-2"
                                                    type="checkbox" :id="'detailProjects-'+detail.id" v-model="form.detailProjects"
                                                    :value="detail.id" />
                                                <label class="text-sm" :for="'detailProjects-'+detail.id">{{detail.name[usePage().props.language]}}</label>
                                        </div>
                                        <InputError :message="form.errors.detailProjects" class="mt-2"/>
                                    </div>
                                </div>
                                <div class="col-span-6 grid grid grid-cols-1 lg:grid-cols-4 gap-6">
                                    <div class="mt-4" v-if="workingModes">
                                        <InputLabel for="workingMode" :value="__('translate.workingMode')" />
                                        <div v-for="workingMode in workingModes" class="flex items-center mt-1">
                                            <input
                                                class="rounded border-gray-300 text-blue-work shadow-sm focus:ring-blue-work mr-2"
                                                type="checkbox" :id="'workingMode-'+workingMode.id" v-model="form.workingMode"
                                                @change="addToArray(workingModeSelect,workingMode)"
                                                :value="workingMode" />
                                            <label :for="'workingMode-'+workingMode.id">{{workingMode.title}}</label>
                                        </div>
                                        <InputError :message="form.errors.workingMode" class="mt-2"/>
                                    </div>
                                    <div class="mt-4" v-if="typesOfContract">
                                        <InputLabel for="workingMode" :value="__('translate.typesOfContract')" />
                                        <div v-for="typeOfContract in typesOfContract" class="flex items-center mt-1">
                                            <input
                                                class="rounded border-gray-300 text-blue-work shadow-sm focus:ring-blue-work mr-2"
                                                @change="addToArray(typesOfContractSelect,typeOfContract.name)"
                                                type="checkbox" :id="'typeOfContract-'+typeOfContract.id" v-model="form.typeOfContract"
                                                :value="typeOfContract" />
                                            <label :for="'typeOfContract-'+typeOfContract.id">{{typeOfContract.name}}</label>
                                        </div>
                                        <InputError :message="form.errors.typeOfContract" class="mt-2"/>
                                    </div>
                                    <div class="mt-4" v-if="workLoads">
                                        <InputLabel :value="__('translate.workLoads')" />
                                        <div v-for="workLoad in workLoads" class="flex items-center mt-1">
                                            <input
                                                class="border-gray-300 text-blue-work shadow-sm focus:ring-blue-work mr-2"
                                                @change="workLoadSelect = workLoad.name"
                                                type="radio" :id="'workLoad-'+workLoad.id" v-model="form.workLoad"
                                                :value="workLoad" />
                                            <label :for="'workLoad-'+workLoad.id">{{workLoad.name}}</label>
                                        </div>
                                        <InputError :message="form.errors.workLoad" class="mt-2"/>
                                    </div>
                                    <div class="mt-4">
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
                                </div>
                                <div class="col-span-6 grid grid-cols-1 md:grid-cols-3 gap-6">
                                    <div class="mt-4">
                                        <InputLabel :value="__('translate.basicSalaryFrom')" />
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
                                        <InputLabel :value="__('translate.basicSalaryTo')" />
                                        <input
                                            id="basicSalaryTo"
                                            v-model="form.basicSalaryTo"
                                            class="border-gray-300 focus:blue-work rounded-md shadow-sm mt-1 block w-full"
                                            type="number"
                                            step="0.1"
                                        />
                                        <InputError :message="form.errors.basicSalaryTo" class="mt-2"/>
                                    </div>
                                    <div class="mt-4">
                                        <div>
                                            <InputLabel :value="__('translate.currency')"/>
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
                                                v-model="form.currency" :options="optionsCurrency">
                                                <template #noResult>
                                                    <span>{{__('translate.noOptions')}}</span>
                                                </template>
                                                <template #noOptions>
                                                    <span>{{__('translate.noResult')}}</span>
                                                </template>
                                            </multiselect>
                                            <InputError :message="form.errors.currency" class="mt-2"/>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-span-6 grid grid-cols-1 md:grid-cols-2 gap-6">
                                    <div class="mt-4" v-if="payoutModes">
                                        <InputLabel :value="__('translate.payoutModes')" />
                                        <div v-for="payoutMode in payoutModes" class="flex items-center mt-1">
                                            <input
                                                class="border-gray-300 text-blue-work shadow-sm focus:ring-blue-work mr-2"
                                                @change="payoutModeSelect = payoutMode.name"
                                                type="radio" :id="'payoutMode-'+payoutMode.id" v-model="form.payoutMode"
                                                :value="payoutMode" />
                                            <label :for="'payoutMode-'+payoutMode.id">{{payoutMode.name}}</label>
                                        </div>
                                        <InputError :message="form.errors.payoutMode" class="mt-2"/>
                                    </div>
                                    <div class="mt-4" v-if="paySystems">
                                        <InputLabel for="paySystem" :value="__('translate.paySystem')" />
                                        <div v-for="paySystem in paySystems" class="flex items-center mt-1">
                                            <input
                                                class="rounded border-gray-300 text-blue-work shadow-sm focus:ring-blue-work mr-2"
                                                @change="addToArray(paySystemSelect,paySystem.name)"
                                                type="checkbox" :id="'paySystem-'+paySystem.id" v-model="form.paySystem"
                                                :value="paySystem" />
                                            <label :for="'paySystem-'+paySystem.id">{{paySystem.name}}</label>
                                        </div>
                                        <InputError :message="form.errors.paySystem" class="mt-2"/>
                                    </div>
                                </div>
                                <div class="col-span-6 grid grid-cols-1 md:grid-cols-2 gap-6">
                                    <div class="mt-4">
                                        <InputLabel :value="__('translate.bonusSalaryFrom')" />
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
                                        <InputLabel :value="__('translate.bonusSalaryTo')" />
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
                                        <InputLabel for="day" :value="__('translate.dayWork')" />
                                        <div v-for="day in days" class="flex items-center mt-1">
                                            <input
                                                @change="addToArray(daySelect,day.name)"
                                                class="rounded border-gray-300 text-blue-work shadow-sm focus:ring-blue-work mr-2"
                                                type="checkbox" :id="'day-'+day.id" v-model="form.days"
                                                :value="day" />
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
                                <div class="col-span-6 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 gap-6">
                                    <div class="mt-4" v-if="offers">
                                        <InputLabel for="day" :value="__('translate.offer')" />
                                        <div v-for="offer in offers" class="flex items-center mt-1">
                                            <input
                                                @change="addToArray(offerSelect,offer.name)"
                                                class="rounded border-gray-300 text-blue-work shadow-sm focus:ring-blue-work mr-2"
                                                type="checkbox" :id="'offer'+offer.id" v-model="form.offer"
                                                :value="offer" />
                                            <label :for="'offer'+offer.id">{{offer.name}}</label>
                                        </div>
                                        <InputError :message="form.errors.offer" class="mt-2"/>
                                    </div>
                                    <div class="mt-4" v-if="waits">
                                        <InputLabel for="day" :value="__('translate.wait')" />
                                        <div v-for="wait in waits" class="flex items-center mt-1">
                                            <input
                                                @change="addToArray(waitSelect,wait.name)"
                                                class="rounded border-gray-300 text-blue-work shadow-sm focus:ring-blue-work mr-2"
                                                type="checkbox" :id="'wait'+wait.id" v-model="form.wait"
                                                :value="wait" />
                                            <label :for="'wait'+wait.id">{{wait.name}}</label>
                                        </div>
                                        <InputError :message="form.errors.wait" class="mt-2"/>
                                    </div>
                                    <div class="mt-4" v-if="experiences">
                                        <InputLabel for="day" :value="__('translate.experience')" />
                                        <div v-for="experience in experiences" class="flex items-center mt-1">
                                            <input
                                                @change="addToArray(experienceSelect,experience.name)"
                                                class="rounded border-gray-300 text-blue-work shadow-sm focus:ring-blue-work mr-2"
                                                type="checkbox" :id="'experience'+experience.id" v-model="form.experience"
                                                :value="experience" />
                                            <label :for="'experience'+experience.id">{{experience.name}}</label>
                                        </div>
                                        <InputError :message="form.errors.experience" class="mt-2"/>
                                    </div>
                                    <div class="mt-4" v-if="welcomes">
                                        <InputLabel for="day" :value="__('translate.welcome')" />
                                        <div v-for="welcome in welcomes" class="flex items-center mt-1">
                                            <input
                                                @change="addToArray(welcomeSelect,welcome.name)"
                                                class="rounded border-gray-300 text-blue-work shadow-sm focus:ring-blue-work mr-2"
                                                type="checkbox" :id="'welcome'+welcome.id" v-model="form.welcome"
                                                :value="welcome" />
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
                        </template>

                        <template #actions>
                            <PrimaryButton :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
                                <spinner-action :process="form.processing">{{__('translate.add')}}</spinner-action>
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
