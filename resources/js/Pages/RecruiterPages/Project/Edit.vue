<script setup>

import {useForm, Link} from '@inertiajs/vue3';

import ActionMessage from '@/Components/ActionMessage.vue';
import FormSection from '@/Components/FormSection.vue';
import InputError from '@/Components/InputError.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import AppLayout from '@/Layouts/AppLayout.vue';
import SpinnerAction from "@/Components/SpinnerAction.vue";
import InputLabel from "@/Components/InputLabel.vue";
import {ref, watch} from "vue";
import Multiselect from 'vue-multiselect'
import TextInput from "@/Components/TextInput.vue";

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
});


const optionsCategory = ref(props.categories);
const optionsCountry = ref(props.countries);
const optionsWorkingPlace = ref(props.workingPlaces);
const optionsSubCategory = ref([]);
const optionsProfession = ref([]);
const optionsPosition = ref([]);
const titles = ref([]);

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

const updateProject = () => {
    form.put(route('project-recruits.update',props.project), {
        errorBag: 'updateProject',
        preserveScroll: true,
        onSuccess: () => {
            form.reset();
        },

    });
};
</script>

<template>
    <AppLayout :title="__('auth.createRecruit')">
        <template #header>
            <div class="flex justify-between">

                <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                    {{__('auth.updateProject')}}
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
                    <FormSection @submitted="updateProject">
                        <template #title>
                            {{__('auth.project')}}
                        </template>

                        <template #description>
                            {{__('auth.projectInfo')}}
                        </template>

                        <template #form>
                            <div class="col-span-6 grid grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div>
                                    <InputLabel :value="__('auth.category')"/>
                                    <multiselect
                                        :disabled="true"
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
                                        :disabled="true"
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
                                        :disabled="true"
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
                                        :disabled="true"
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
                                    <input type="number"
                                        id="basicSalaryFrom"
                                        v-model="form.basicSalaryFrom"
                                        class="mt-1 block w-full"
                                        step="0.1"
                                    />
                                    <InputError :message="form.errors.basicSalaryFrom" class="mt-2"/>

                                </div>
                                <div class="mt-4">
                                    <InputLabel :value="__('auth.basicSalaryTo')" />
                                    <input type="number"
                                        id="basicSalaryTo"
                                        v-model="form.basicSalaryTo"
                                        class="mt-1 block w-full"
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
                                    <input type="number"
                                        id="bonusSalaryFrom"
                                        v-model="form.bonusSalaryFrom"
                                        class="mt-1 block w-full"
                                        step="0.1"
                                    />
                                    <InputError :message="form.errors.bonusSalaryFrom" class="mt-2"/>

                                </div>
                                <div class="mt-4">
                                    <InputLabel :value="__('auth.bonusSalaryTo')" />
                                    <input type="number"
                                        id="bonusSalaryTo"
                                        v-model="form.bonusSalaryTo"
                                        class="mt-1 block w-full"
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
                                            class="border-gray-300 text-blue-work shadow-sm focus:ring-blue-work mr-2"
                                            type="radio" :id="'education-'+education.id" v-model="form.education"
                                            :value="education.id" />
                                        <label :for="'education-'+education.id">{{education.name}}</label>
                                    </div>
                                    <InputError :message="form.errors.education" class="mt-2"/>
                                </div>
                            </div>
                        </template>

                        <template #actions>
                            <ActionMessage :on="form.recentlySuccessful" class="mr-3">
                                {{__('auth.addedProject')}}
                            </ActionMessage>
                            <PrimaryButton :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
                                <spinner-action :process="form.processing">{{__('auth.update')}}</spinner-action>
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
