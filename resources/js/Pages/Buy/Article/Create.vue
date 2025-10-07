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
import InputHelper from "@/Components/InputHelper.vue";
import {ref} from 'vue';
import Checkbox from "@/Components/Checkbox.vue";
import Tiptap from "@/Components/TipTap.vue"

let serverMessage=ref(null);
const form = useForm({
    title: '',
    content: '',
    active: true,
    lang: usePage().props.language,
    photo:[],
    meta_title: '',
    meta_description: '',
    shortDescription: '',
    alt: '',
    meta_keywords:''
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
    <AppLayout :title="__('translate.createArticle')">
        <template #header>
            <div class="flex justify-between">

                <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                    {{__('translate.createArticle')}}
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
                            {{__('translate.article')}}
                        </template>

                        <template #description>
                            {{__('translate.articleInfo')}}
                        </template>

                        <template #form>
                            <div class="col-span-6">
                                <div class="mt-4">
                                    <InputLabel for="lang" :value="__('translate.language')"/>
                                    <select v-model=" form.lang" name="lang" id="lang" class="border-gray-300 focus:blue-work rounded-md shadow-sm mt-1 block w-full">
                                        <option :value="language.value" v-for="language in usePage().props.languages" :key="language.value" :selected="language.value === usePage().props.language">
                                            {{ language.value }}
                                        </option>
                                    </select>
                                    <InputError :message="form.errors.lang" class="mt-2"/>
                                </div>
                            </div>
                            <div class="col-span-6">
                                <InputLabel for="title" :value="__('translate.Photo')"/>
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
                                                }"
                                ></file-pond>
                                <InputError  :message="form.errors.photo" class="mt-1"/>
                                <div v-for="(error, fileKey) in form.errors" :key="fileKey">
                                    <span class="text-sm text-red-600" v-if="fileKey.startsWith('baner.')">{{ error }}</span>
                                </div>

                                <div class="mt-4">
                                    <InputLabel for="alt" :value="__('translate.alt')"/>
                                    <TextInput
                                        id="alt"
                                        v-model="form.alt"
                                        class="mt-1 block w-full"
                                        type="text"
                                    />
                                    <InputError :message="form.errors.alt" class="mt-2"/>
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
                                <!-- SHORT DESCRIPTION -->
                                <div class="col-span-6 mt-4">
                                    <InputLabel for="shortDescription" :value="__('translate.shortDescription')" />
                                    <TextareaLimit
                                        id="shortDescription"
                                        v-model="form.shortDescription"
                                        :limit="500"
                                        class="mt-1 block w-full"
                                    />
                                    <InputError :message="form.errors.shortDescription" class="mt-2"/>
                                </div>
                                <div class="pt-4">

                                <InputLabel for="content" :value="__('translate.content')"/>
                                    <Tiptap id="content" v-model="form.content" />
                                    <InputError :message="form.errors.content" class="mt-2"/>
                                </div>
                                <div class="mt-8 border-t border-gray-300 pt-4">
                                    <h3 class="font-semibold text-lg text-gray-700 mb-4">{{ __('translate.seoSection') }}</h3>

                                    <!-- META TITLE -->
                                    <div class="col-span-6 mt-2">
                                        <InputLabel for="meta_title" :value="__('translate.metaTitle')" />
                                        <TextInput
                                            id="meta_title"
                                            v-model="form.meta_title"
                                            class="mt-1 block w-full"
                                            type="text"
                                        />
                                        <InputError :message="form.errors.meta_title" class="mt-2"/>
                                    </div>

                                    <!-- META DESCRIPTION -->
                                    <div class="col-span-6 mt-4">
                                        <InputLabel for="meta_description" :value="__('translate.metaDescription')" />
                                        <TextareaLimit
                                            id="meta_description"
                                            v-model="form.meta_description"
                                            :limit="160"
                                            class="mt-1 block w-full"
                                        />
                                        <InputError :message="form.errors.meta_description" class="mt-2"/>
                                    </div>

                                    <!-- META KEYWORDS -->
                                    <div class="col-span-6 mt-4">
                                        <InputLabel for="meta_keywords" :value="__('translate.metaKeywords')" />
                                        <TextInput
                                            id="meta_keywords"
                                            v-model="form.meta_keywords"
                                            class="mt-1 block w-full"
                                        />
                                        <p class="mt-1 text-sm text-gray-500">{{ __('translate.keyWordsDesc') }}</p>
                                        <InputError :message="form.errors.meta_keywords" class="mt-2"/>
                                    </div>
                                </div>
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

                            </div>

                        </template>

                        <template #actions>
                            <ActionMessage :on="form.recentlySuccessful" class="mr-3">
                                {{__('translate.addedRecruit')}}
                            </ActionMessage>
                            <PrimaryButton :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
                                <spinner-action :process="form.processing">{{__('translate.add')}}</spinner-action>
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
