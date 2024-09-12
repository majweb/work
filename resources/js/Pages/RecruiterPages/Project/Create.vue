<script setup>

import {useForm, Link} from '@inertiajs/vue3';

import ActionMessage from '@/Components/ActionMessage.vue';
import FormSection from '@/Components/FormSection.vue';
import InputError from '@/Components/InputError.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import TextInput from '@/Components/TextInput.vue';
import AppLayout from '@/Layouts/AppLayout.vue';
import SpinnerAction from "@/Components/SpinnerAction.vue";
import InputLabel from "@/Components/InputLabel.vue";
import {ref, watch} from "vue";
import Multiselect from 'vue-multiselect'


const props = defineProps({
    categories: Array,
});
const form = useForm({
    category: '',
    title: '',
});
const optionsCategory = ref(props.categories)
const optionsSubCategory = ref([]);

watch(() => form.category, (category) => {
    if (form.category) {

        // optionsSubCategory.value =
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
                            <div class="col-span-6">
                            <multiselect
                                selectLabel="Press enter to select"
                                selectGroupLabel="Press enter to select group"
                                selectedLabel="Selected"
                                deselectLabel="Press enter to remove"
                                track-by="value"
                                label="name"
                                v-model="form.category" :options="optionsCategory"></multiselect>

                                {{optionsSubCategory}}
                                <div class="mt-4">
                                    <InputLabel for="title" :value="__('auth.title')"/>
                                    <TextInput
                                        id="title"
                                        v-model="form.title"
                                        autofocus
                                        class="mt-1 block w-full"
                                        type="text"
                                    />
                                    <InputError :message="form.errors.title" class="mt-2"/>
                                </div>
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
