<script setup>

import {useForm, Link,usePage} from '@inertiajs/vue3';

import ActionMessage from '@/Components/ActionMessage.vue';
import FormSection from '@/Components/FormSection.vue';
import InputError from '@/Components/InputError.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import TextInput from '@/Components/TextInput.vue';
import AppLayout from '@/Layouts/AppLayout.vue';
import SpinnerAction from "@/Components/SpinnerAction.vue";
import DangerButton from "@/Components/DangerButton.vue";
import InputLabel from "@/Components/InputLabel.vue";
import TextareaLimit from "@/Components/TextareaLimit.vue";
import draggable from 'vuedraggable/src/vuedraggable'
import { MediaLibraryAttachment } from '@spatie/media-library-pro-vue3-attachment';
import InputHelper from "@/Components/InputHelper.vue";
import Checkbox from "@/Components/Checkbox.vue";
import SectionBorder from "@/Components/SectionBorder.vue";
import {ref} from "vue";

const props = defineProps({
    article: Object
});
let serverMessage=ref(null);

const form = useForm({
    _method: 'POST',
    title: props.article.title,
    content: props.article.content,
    lang: props.article.lang,
    photo: (props.article && props.article?.photo)
        ?  [{
            source: props.article.photo.original_url,
            options: {
                type: 'local',
                metadata: { poster: props.article.photo.preview_url }
            }
        }]
        : [],
    sections: props.article.sections ?? [],
    active: props.article.active ? true : false


});
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
const updateArticle = () => {
    form.put(route('articles.update',props.article), {
        errorBag: 'updateArticle',
        preserveScroll: true
    });
};

const removeFile =  async (source,load) => {
    await axios.post(route('temporary.delete.poster'),{'source':source});
    load();
    form.photo = [];
}

</script>

<template>
    <AppLayout :title="__('translate.editArticle')">
        <template #header>
            <div class="flex justify-between">

                <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                    {{__('translate.editArticle')}}
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
                    <FormSection @submitted="updateArticle">
                        <template #title>
                            {{props.article.title}}
                        </template>

                        <template #description>
                            {{__('translate.articleInfo')}}
                        </template>

                        <template #form>
                            <div class="col-span-6">
                                <div class="mt-4">
                                    <InputLabel for="title" :value="__('translate.language')"/>
                                    <select v-model=" form.lang" name="lang" id="lang" class="border-gray-300 focus:blue-work rounded-md shadow-sm mt-1 block w-full">
                                        <option :value="language.value" v-for="language in usePage().props.languages" :key="language.value" :selected="language.value === usePage().props.language">
                                            {{ language.value }}
                                        </option>
                                    </select>
                                    <InputError :message="form.errors.lang" class="mt-2"/>
                                </div>
                            </div>
                            <div class="col-span-6">
                                <InputLabel for="title" :value="__('translate.photo')"/>
                                <file-pond
                                    name="photo"
                                    ref="uploadPhoto"
                                    :files="form.photo"
                                    :allow-multiple="false"
                                    :max-file-size="'4MB'"
                                    imagePreviewMaxHeight="300"
                                    filePosterHeight="300"
                                    :label-idle="__('translate.label-idle')"
                                    :labelFileProcessing="__('translate.labelFileProcessing')"
                                    :labelInvalidField="__('translate.labelInvalidField')"
                                    :labelMaxFileSize="__('translate.labelMaxFileSize')"
                                    :labelMaxFileSizeExceeded="__('translate.labelMaxFileSizeExceeded')"
                                    :labelFileWaitingForSize="__('translate.labelFileWaitingForSize')"
                                    :labelFileSizeNotAvailable="__('translate.labelFileSizeNotAvailable')"
                                    :labelFileLoading="__('translate.labelFileLoading')"
                                    :labelFileLoadError="__('translate.labelFileLoadError')"
                                    :labelFileProcessingComplete="__('translate.labelFileProcessingComplete')"
                                    :labelFileProcessingAborted="__('translate.labelFileProcessingAborted')"
                                    :labelFileProcessingError="serverMessage ? serverMessage : __('translate.labelFileProcessingError')"
                                    :labelFileProcessingRevertError="__('translate.labelFileProcessingRevertError')"
                                    :labelFileRemoveError="__('translate.labelFileRemoveError')"
                                    :labelTapToCancel="__('translate.labelTapToCancel')"
                                    :labelTapToRetry="__('translate.labelTapToRetry')"
                                    :labelTapToUndo="__('translate.labelTapToUndo')"
                                    :labelButtonRemoveItem="__('translate.labelButtonRemoveItem')"
                                    :labelButtonAbortItemLoad="__('translate.labelButtonAbortItemLoad')"
                                    :labelButtonRetryItemLoad="__('translate.labelButtonRetryItemLoad')"
                                    :labelButtonAbortItemProcessing="__('translate.labelButtonAbortItemProcessing')"
                                    :labelButtonUndoItemProcessing="__('translate.labelButtonUndoItemProcessing')"
                                    :labelButtonRetryItemProcessing="__('translate.labelButtonRetryItemProcessing')"
                                    :labelButtonProcessItem="__('translate.labelButtonProcessItem')"
                                    :accepted-file-types="'image/png, image/jpeg, image/jpg, image/gif, image/svg, image/webp'"
                                    credits="false"
                                    :server="{
                                                url:'',
                                                   headers: {
                                                'X-CSRF-TOKEN': usePage().props.csrf_token,
                                                    },
                                                process: {
                                                    url: '/temporary/upload',
                                                        onload: (response) => {
                                                        form.photo.push(response);
                                                        return response;
                                                        },
                                                        onerror: (response) => {
                                                            serverMessage = JSON.parse(response).error.photo[0];
                                                        }

                                                },
                                                revert:{
                                                    url: '/temporary/delete',
                                                    onload: (response) => {
                                                            if (!response) return;
                                                            const fileIndex = form.photo.findIndex(el => el === response);
                                                            if (fileIndex !== -1) {
                                                                form.photo.splice(fileIndex, 1);
                                                           }
                                                    }
                                                },
                                                remove:removeFile
                                                }"

                                ></file-pond>
                                <InputError  :message="form.errors.photo" class="mt-1"/>
                                <div v-for="(error, fileKey) in form.errors" :key="fileKey">
                                    <span class="text-sm text-red-600" v-if="fileKey.startsWith('baner.')">{{ error }}</span>
                                </div>
                            </div>
                            <div class="col-span-6">
                                <div class="mt-4">
                                    <InputLabel for="title" :value="__('translate.title')"/>
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
                                    <InputLabel for="content" :value="__('translate.content')"/>
                                    <TextareaLimit id="content" v-model="form.content" :limit="2000"/>
                                    <InputError :message="form.errors.content" class="mt-2"/>
                                </div>
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
                                                    <InputLabel :for="`sections-${index}-value`" value="Tytuł"/>
                                                    <TextInput
                                                        :id="`sections-${index}-title`"
                                                        v-model="section.title"
                                                        type="text"
                                                        class="mt-1 block w-full"
                                                    />
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
                            <!-- PUBLISH -->
                            <div class="col-span-6">
                                <div class="flex mt-4">
                                    <label
                                           class="flex items-center"
                                           for="active">
                                        <Checkbox id="active" v-model:checked="form.active"
                                                  name="active"/>
                                        <div class="flex flex-col">
                                                <span class="ml-2 mr-1 text-gray-600 dark:text-gray-400">
                                                 Publikacja
                                                </span>
                                        </div>
                                    </label>
                                </div>
                                <InputHelper id="helper-publish-explanation">Czy artykuł ma być opublikowany.
                                </InputHelper>
                            </div>
                            <!-- PUBLISH -->
                        </template>

                        <template #actions>
                            <ActionMessage :on="form.recentlySuccessful" class="mr-3">
                                {{__('translate.updateRecruit')}}
                            </ActionMessage>
                            <PrimaryButton :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
                                <spinner-action :process="form.processing">{{__('translate.update')}}</spinner-action>
                            </PrimaryButton>
                        </template>
                    </FormSection>
                </div>
            </div>
        </div>
    </AppLayout>
</template>
