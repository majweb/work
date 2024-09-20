<script setup>

import {useForm, Link, usePage} from '@inertiajs/vue3';

import ActionMessage from '@/Components/ActionMessage.vue';
import FormSection from '@/Components/FormSection.vue';
import InputError from '@/Components/InputError.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import TextInput from '@/Components/TextInput.vue';
import AppLayout from '@/Layouts/AppLayout.vue';
import SpinnerAction from "@/Components/SpinnerAction.vue";
import InputLabel from "@/Components/InputLabel.vue";
import TextareaLimit from "@/Components/TextareaLimit.vue";
import draggable from 'vuedraggable'
import InputHelper from "@/Components/InputHelper.vue";
import DangerButton from "@/Components/DangerButton.vue";
import {ref} from 'vue';

const form = useForm({
    title: '',
    content: '',
    lang: usePage().props.language,
    baner:null,
    sections:[]
});

const isReadyToSubmit = ref(true);


const addSection = () => {
    if (form.sections.length < 5) {
        form.sections.push({
            title: '',
            description: ''
        });
    } else {
        return;
    }
}
const removeElement = (index, array) => {
    array.splice(index, 1);
}
const onChange = (baner) => {
    form.baner = baner;
}

const createArticle = () => {
    form.post(route('articles.store'), {
        errorBag: 'createArticle',
        preserveScroll: true,
        onSuccess: () => {
            form.reset();

        },

    });
};
</script>

<template>
    <AppLayout :title="__('auth.createArticle')">
        <template #header>
            <div class="flex justify-between">

                <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                    {{__('auth.createArticle')}}
                </h2>
                <Link :href="route('articles.index')" class="text-gray-500 mr-4">
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
                    <FormSection @submitted="createArticle">
                        <template #title>
                            {{__('auth.article')}}
                        </template>

                        <template #description>
                            {{__('auth.articleInfo')}}
                        </template>

                        <template #form>
                            <div class="col-span-6">
                                <div class="mt-4">
                                    <InputLabel for="title" :value="__('auth.language')"/>
                                    <select v-model=" form.lang" name="lang" id="lang" class="border-gray-300 focus:blue-work rounded-md shadow-sm mt-1 block w-full">
                                        <option :value="language.value" v-for="language in usePage().props.languages" :key="language.value" :selected="language.value === usePage().props.language">
                                            {{ language.value }}
                                        </option>
                                    </select>
                                    <InputError :message="form.errors.lang" class="mt-2"/>
                                </div>
                            </div>
                            <div class="col-span-6">
                                <InputLabel for="title" :value="__('auth.baner')"/>


                            <InputError  :message="form.errors.baner" class="mt-1"/>
                            </div>
                            <div class="col-span-6">
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
                                <div class="mt-4">
                                    <InputLabel for="content" :value="__('auth.content')"/>
                                    <TextareaLimit id="content" v-model="form.content" :limit="2000"/>
                                    <InputError :message="form.errors.content" class="mt-2"/>
                                </div>

                                <!--SECTIONS-->
                                <div class="col-span-6 mb-3">
                                    <PrimaryButton :disabled="form.processing || form.sections.length >= 5"
                                                   @click="addSection" type="button"
                                                   class="!flex justify-center w-100 mx-auto mt-3">
                                                <span class="flex items-center" v-if="form.sections.length >= 5">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none"
                                                         viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                      <path stroke-linecap="round" stroke-linejoin="round"
                                                            d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"/>
                                                    </svg>
                                                    Limit osiągnięty</span>
                                        <div v-else class="flex">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none"
                                                 viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                      d="M12 6v6m0 0v6m0-6h6m-6 0H6"/>
                                            </svg>
                                            Sekcja
                                        </div>
                                    </PrimaryButton>
                                    <InputHelper id="helper-pricelist-explanation"
                                                 class="flex justify-center w-100 mx-auto my-2"
                                                 >
                                        Dodaj sekcje
                                    </InputHelper>
                                    <InputError :message="form.errors.sections" class="text-center"/>
                                    <div v-if="form.sections.length" class="text-center text-sm my-1">
                                        Liczba stworzonych sekcji: <span
                                        class="text-indigo-600 font-semibold">{{ form.sections.length }}</span>
                                    </div>
                                    <draggable ghost-class="ghost" :list="form.sections" item-key="id" handle=".handle">
                                        <template #item="{ element: section,index }">
                                            <div>
                                                <svg xmlns="http://www.w3.org/2000/svg" class="outline-none h-5 w-5 handle stroke-indigo-300 ml-1 mt-1" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 10h16M4 14h16M4 18h16"></path>
                                                </svg>
                                                <div class="col-span-6 gap-4 grid grid-cols-1 md:grid-cols-2">
                                                    <!-- TITLE -->
                                                    <div>
                                                        <InputLabel :for="`sections-${index}-title`" value="Tytuł"/>
                                                        <TextInput
                                                            :id="`sections-${index}-title`"
                                                            v-model="section.title"
                                                            type="text"
                                                            class="mt-1 block w-full"
                                                        />
                                                        <InputHelper id="helper-value-explanation">
                                                            Tytuł
                                                        </InputHelper>
                                                        <InputError :message="form.errors[`sections.${index}.title`]"
                                                                    class="mt-2"/>

                                                    </div>
                                                    <!-- VALUE -->
                                                </div>
                                                <!-- DESCRIPTION -->
                                                <div class="col-span-6 mt-4">
                                                    <InputLabel :for="`sections-${index}-description`"
                                                                value="Treść"/>
                                                    <TextareaLimit v-model="section.description" :limit="2000"
                                                                   :id="`sections-${index}-description`"/>
                                                    <InputHelper id="`helper-sections-${index}-description-explanation`">
                                                        Opis
                                                    </InputHelper>
                                                    <InputError :message="form.errors[`sections.${index}.description`]"/>
                                                </div>
                                                <!-- DESCRIPTION -->
                                                <DangerButton @click="removeElement(index,form.sections)"
                                                              class="mt-3 !flex justify-center w-100 mx-auto">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2" fill="none"
                                                         viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                              d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/>
                                                    </svg>
                                                    usuń sekcje
                                                </DangerButton>
                                            </div>
                                        </template>
                                    </draggable>
                                    <SectionBorder/>
                                </div>
                                <!--SECTIONS-->

                            </div>
                        </template>

                        <template #actions>
                            <ActionMessage :on="form.recentlySuccessful" class="mr-3">
                                {{__('auth.addedRecruit')}}
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
<style lang="scss">
.ghost{
    background: rgba(79, 70, 229, 0.15);
}
.handle {
    cursor:pointer;
}
</style>
