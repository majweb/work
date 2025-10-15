<script setup>

import {useForm, Link,usePage} from '@inertiajs/vue3';

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
import Checkbox from "@/Components/Checkbox.vue";
import {ref,computed} from "vue";
import Tiptap from "@/Components/TipTap.vue"
import Multiselect from "vue-multiselect";
import __ from "@/lang.js";

const props = defineProps({
    article: Object,
    categories: Array,
});
let serverMessage=ref(null);
const optionsCategory = ref(props.categories);

const form = useForm({
    _method: 'POST',
    title: props.article.title,
    content: props.article.content,
    lang: props.article.lang,
    show: props.article.show || false,
    photo: (props.article && props.article?.photo)
        ?  [{
            source: props.article.photo.original_url,
            options: {
                type: 'local',
                metadata: { poster: props.article.photo.preview_url }
            }
        }]
        : [],
    active: props.article.active ? true : false,
    meta_title: props.article.meta_title,
    meta_description: props.article.meta_description,
    short_description: props.article.short_description,
    alt: props.article.alt,
    meta_keywords:props.article.meta_keywords,
    category:props.article.category,
});
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

const toggleCommentVisibility = async (comment) => {
    try {
        await axios.post(route('comments.toggle-visibility', comment.id));
        comment.show = !comment.show;
    } catch (error) {
        console.error('Błąd podczas zmiany widoczności komentarza:', error);
    }
}
const perPage = 4; // liczba komentarzy na stronę
const currentPage = ref(1);
const totalPages = computed(() => {
    return Math.ceil(props.article.comments?.length / perPage);
});

const paginatedComments = computed(() => {
    const start = (currentPage.value - 1) * perPage;
    const end = start + perPage;
    return props.article.comments?.slice(start, end) || [];
});

const goToPage = (page) => {
    if(page >= 1 && page <= totalPages.value) {
        currentPage.value = page;
    }
};
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
                                    <InputLabel for="short_description" :value="__('translate.shortDescription')" />
                                    <TextareaLimit
                                        id="short_description"
                                        v-model="form.short_description"
                                        :limit="500"
                                        class="mt-1 block w-full"
                                    />
                                    <InputError :message="form.errors.short_description" class="mt-2"/>
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
                            </div>

                            <!-- PUBLISH -->
                            <div class="col-span-6">
                                <div class="flex mt-4 space-x-4">
                                    <label class="flex items-center" for="active">
                                        <Checkbox id="active" v-model:checked="form.active"
                                                  name="active"/>
                                        <div class="flex flex-col">
                                            <span class="ml-2 mr-1 text-gray-600 dark:text-gray-400">
                                                Publikacja
                                            </span>
                                        </div>
                                    </label>
                                </div>
                                <InputHelper id="helper-publish-explanation">
                                    Zarządzaj publikacją i widocznością artykułu
                                </InputHelper>
                            </div>
                            <!-- PUBLISH -->
                            <div class="col-span-6">

                                <!-- KOMENTARZE -->
                                <div class="flex gap-2">
                                    <div v-for="comment in paginatedComments" :key="comment.id" class="bg-white p-4 rounded-lg shadow">
                                        <div class="flex justify-between items-start flex-wrap gap-2">
                                            <div>
                                                <p class="font-medium text-gray-800">{{ comment.user?.name || 'Anonim' }}</p>
                                                <p class="text-sm text-gray-500">
                                                    {{ new Date(comment.created_at).toLocaleString('pl-PL') }}
                                                </p>
                                            </div>
                                            <div class="flex-shrink-0">
                                                <button @click="toggleCommentVisibility(comment)" type="button"
                                                        class="px-3 py-1 text-sm text-white rounded transition-colors duration-150"
                                                        :class="comment.show ? 'bg-green-500 hover:bg-green-600' : 'bg-red-500 hover:bg-red-600'">
                                                    {{ comment.show ? 'Widoczny' : 'Ukryty' }}
                                                </button>
                                            </div>
                                        </div>
                                        <p class="mt-2 text-gray-700">{{ comment.content }}</p>

                                        <!-- Odpowiedzi do komentarza -->
                                        <div v-if="comment.replies?.length" class="ml-6 mt-4 space-y-3">
                                            <div v-for="reply in comment.replies" :key="reply.id" class="bg-gray-50 p-3 rounded border-l-2 border-gray-200">
                                                <div class="flex justify-between items-start flex-wrap gap-2">
                                                    <div>
                                                        <p class="font-medium text-gray-800">{{ reply.user?.name || 'Anonim' }}</p>
                                                        <p class="text-sm text-gray-500">
                                                            {{ new Date(reply.created_at).toLocaleString('pl-PL') }}
                                                        </p>
                                                    </div>
                                                    <div class="flex-shrink-0">
                                                        <button type="button" @click="toggleCommentVisibility(reply)"
                                                                class="px-3 py-1 text-sm text-white rounded transition-colors duration-150"
                                                                :class="reply.show ? 'bg-green-500 hover:bg-green-600' : 'bg-red-500 hover:bg-red-600'">
                                                            {{ reply.show ? 'Widoczny' : 'Ukryty' }}
                                                        </button>
                                                    </div>
                                                </div>
                                                <p class="mt-2 text-gray-700">{{ reply.content }}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- PAGINACJA -->
                                <div class="flex justify-center mt-4 space-x-2" v-if="totalPages > 1">
                                    <button type="button" @click="goToPage(currentPage - 1)" :disabled="currentPage === 1"
                                            class="px-3 py-1 border rounded bg-gray-100 disabled:opacity-50 hover:bg-gray-200">
                                        Poprzednia
                                    </button>

                                    <button type="button" v-for="page in totalPages" :key="page" @click="goToPage(page)"
                                            class="px-3 py-1 border rounded"
                                            :class="page === currentPage ? 'bg-blue-500 text-white' : 'bg-gray-100 hover:bg-gray-200'">
                                        {{ page }}
                                    </button>

                                    <button type="button" @click="goToPage(currentPage + 1)" :disabled="currentPage === totalPages"
                                            class="px-3 py-1 border rounded bg-gray-100 disabled:opacity-50 hover:bg-gray-200">
                                        Następna
                                    </button>
                                </div>
                                <!-- KOMENTARZE -->

                            </div>

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
