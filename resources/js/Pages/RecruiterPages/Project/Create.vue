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

const props = defineProps({
    categories: Array,
    workingModes: Array,
});

const form = useForm({
    category: '',
    categorySub: '',
    profession: '',
    position: '',
    title: '',
    workingMode: [],
});


const optionsCategory = ref(props.categories)
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

const createProject = () => {
    form.post(route('project-recruits.store'), {
        errorBag: 'createProject',
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
                            <div class="col-span-6 grid grid grid-cols-2 gap-6">
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
                            </div>
                        </template>

                        <template #actions>
                            <ActionMessage :on="form.recentlySuccessful" class="mr-3">
                                {{__('auth.addedProject')}}
                            </ActionMessage>
                            <PrimaryButton :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
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
