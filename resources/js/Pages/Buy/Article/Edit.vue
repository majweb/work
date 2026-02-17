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
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ __('translate.editArticle') }}
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg">
                    <div class="p-6 lg:p-8 bg-white dark:bg-gray-800 border-b border-gray-200 dark:border-gray-700">

                        <div class="flex justify-between items-center mb-8">
                            <h1 class="text-2xl font-bold text-[#143d8c] uppercase">{{ __('translate.editArticle') }}</h1>
                            <Link :href="route('articles.index')" class="bg-gray-200 hover:bg-gray-300 text-gray-700 font-bold py-2 px-4 rounded-xl transition flex items-center gap-2">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 10h16M4 14h16M4 18h16"/>
                                </svg>
                                {{ __('translate.back') }}
                            </Link>
                        </div>

                        <form @submit.prevent="updateArticle" class="space-y-8">
                            <!-- Sekcja podstawowa -->
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                                <div class="space-y-6">
                                    <div>
                                        <InputLabel for="lang" :value="__('translate.language')" class="text-[#143d8c] font-bold uppercase mb-2" />
                                        <select v-model="form.lang" name="lang" id="lang" class="w-full border-gray-300 focus:border-[#00a3e0] focus:ring-[#00a3e0] rounded-xl shadow-sm">
                                            <option :value="language.value" v-for="language in usePage().props.languages" :key="language.value">
                                                {{ language.value }}
                                            </option>
                                        </select>
                                        <InputError :message="form.errors.lang" class="mt-2" />
                                    </div>

                                    <div>
                                        <InputLabel :value="__('translate.category')" class="text-[#143d8c] font-bold uppercase mb-2" />
                                        <multiselect
                                            :selectLabel="__('translate.selectLabel')"
                                            :selectGroupLabel="__('translate.selectGroupLabel')"
                                            :selectedLabel="__('translate.selectedLabel')"
                                            :deselectLabel="__('translate.deselectLabel')"
                                            track-by="value"
                                            label="name"
                                            :placeholder="__('translate.placeholder')"
                                            v-model="form.category"
                                            :options="optionsCategory"
                                            class="rounded-xl"
                                        >
                                            <template #noResult><span>{{ __('translate.noOptions') }}</span></template>
                                            <template #noOptions><span>{{ __('translate.noResult') }}</span></template>
                                        </multiselect>
                                        <InputError :message="form.errors.category" class="mt-2" />
                                    </div>

                                    <div>
                                        <InputLabel for="title" :value="__('translate.title')" class="text-[#143d8c] font-bold uppercase mb-2" />
                                        <TextInput id="title" v-model="form.title" autofocus class="w-full border-gray-300 focus:border-[#00a3e0] focus:ring-[#00a3e0] rounded-xl" type="text" />
                                        <InputError :message="form.errors.title" class="mt-2" />
                                    </div>

                                    <div>
                                        <InputLabel for="alt" :value="__('translate.alt')" class="text-[#143d8c] font-bold uppercase mb-2" />
                                        <TextInput id="alt" v-model="form.alt" class="w-full border-gray-300 focus:border-[#00a3e0] focus:ring-[#00a3e0] rounded-xl" type="text" />
                                        <InputError :message="form.errors.alt" class="mt-2" />
                                    </div>
                                </div>

                                <div>
                                    <InputLabel for="photo" :value="__('translate.photo')" class="text-[#143d8c] font-bold uppercase mb-2" />
                                    <div class="border-2 border-dashed border-gray-300 rounded-3xl p-4">
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
                                                headers: { 'X-CSRF-TOKEN': usePage().props.csrf_token },
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
                                                revert: {
                                                    url: '/temporary/delete',
                                                    onload: (response) => {
                                                        if (!response) return;
                                                        const fileIndex = form.photo.findIndex(el => el === response);
                                                        if (fileIndex !== -1) { form.photo.splice(fileIndex, 1); }
                                                    }
                                                },
                                                remove: removeFile
                                            }"
                                        ></file-pond>
                                    </div>
                                    <InputError :message="form.errors.photo" class="mt-1" />
                                </div>
                            </div>

                            <div class="space-y-6">
                                <div>
                                    <InputLabel for="short_description" :value="__('translate.shortDescription')" class="text-[#143d8c] font-bold uppercase mb-2" />
                                    <TextareaLimit id="short_description" v-model="form.short_description" :limit="500" class="w-full border-gray-300 focus:border-[#00a3e0] focus:ring-[#00a3e0] rounded-xl" />
                                    <InputError :message="form.errors.short_description" class="mt-2" />
                                </div>

                                <div>
                                    <InputLabel for="content" :value="__('translate.content')" class="text-[#143d8c] font-bold uppercase mb-2" />
                                    <div class="prose max-w-none">
                                        <Tiptap id="content" v-model="form.content" class="border border-gray-300 rounded-xl overflow-hidden" />
                                    </div>
                                    <InputError :message="form.errors.content" class="mt-2" />
                                </div>
                            </div>

                            <!-- SEO Section -->
                            <div class="bg-gray-50 dark:bg-gray-900/50 p-6 rounded-3xl border border-gray-200 dark:border-gray-700 space-y-6">
                                <h3 class="text-xl font-bold text-[#143d8c] uppercase border-b pb-2">{{ __('translate.seoSection') }}</h3>

                                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                    <div>
                                        <InputLabel for="meta_title" :value="__('translate.metaTitle')" class="text-[#143d8c] font-bold mb-2" />
                                        <TextInput id="meta_title" v-model="form.meta_title" class="w-full border-gray-300 focus:border-[#00a3e0] focus:ring-[#00a3e0] rounded-xl" type="text" />
                                        <InputError :message="form.errors.meta_title" class="mt-2" />
                                    </div>

                                    <div>
                                        <InputLabel for="meta_keywords" :value="__('translate.metaKeywords')" class="text-[#143d8c] font-bold mb-2" />
                                        <TextInput id="meta_keywords" v-model="form.meta_keywords" class="w-full border-gray-300 focus:border-[#00a3e0] focus:ring-[#00a3e0] rounded-xl" />
                                        <p class="mt-1 text-xs text-gray-500">{{ __('translate.keyWordsDesc') }}</p>
                                        <InputError :message="form.errors.meta_keywords" class="mt-2" />
                                    </div>

                                    <div class="md:col-span-2">
                                        <InputLabel for="meta_description" :value="__('translate.metaDescription')" class="text-[#143d8c] font-bold mb-2" />
                                        <TextareaLimit id="meta_description" v-model="form.meta_description" :limit="160" class="w-full border-gray-300 focus:border-[#00a3e0] focus:ring-[#00a3e0] rounded-xl" />
                                        <InputError :message="form.errors.meta_description" class="mt-2" />
                                    </div>
                                </div>
                            </div>

                            <!-- Publish toggle -->
                            <div class="flex items-center gap-4 bg-[#00a3e0]/10 p-4 rounded-xl border border-[#00a3e0]/20">
                                <label class="flex items-center cursor-pointer group" for="active">
                                    <Checkbox id="active" v-model:checked="form.active" name="active" class="text-[#00a3e0] focus:ring-[#00a3e0]" />
                                    <span class="ml-3 font-bold text-[#143d8c] uppercase group-hover:text-[#00a3e0] transition">Publikacja</span>
                                </label>
                                <div class="h-4 w-px bg-gray-300 mx-2"></div>
                                <p class="text-sm text-gray-600 italic">{{ __('comments.publishComment') }}</p>
                            </div>

                            <div class="flex items-center justify-end gap-4 pt-6 border-t">
                                <ActionMessage :on="form.recentlySuccessful" class="text-green-600 font-bold">
                                    {{ __('translate.updateRecruit') }}
                                </ActionMessage>

                                <button
                                    type="submit"
                                    :class="{ 'opacity-25': form.processing }"
                                    :disabled="form.processing"
                                    class="bg-[#143d8c] hover:bg-[#0f2d66] text-white font-bold py-4 px-12 rounded-xl text-xl transition shadow-lg uppercase flex items-center gap-2"
                                >
                                    <spinner-action :process="form.processing">{{ __('translate.update') }}</spinner-action>
                                </button>
                            </div>

                            <!-- Komentarze Section -->
                            <div v-if="props.article.comments?.length" class="mt-12 space-y-6">
                                <h3 class="text-2xl font-bold text-[#143d8c] uppercase border-b-2 border-[#143d8c] pb-2 inline-block">Komentarze</h3>

                                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                    <div v-for="comment in paginatedComments" :key="comment.id" class="bg-white dark:bg-gray-900 p-6 rounded-3xl border border-gray-200 dark:border-gray-700 shadow-sm flex flex-col h-full">
                                        <div class="flex justify-between items-start mb-4">
                                            <div>
                                                <p class="font-bold text-[#143d8c]">{{ comment.user?.name || __('comments.anonim') }}</p>
                                                <p class="text-xs text-gray-500">{{ new Date(comment.created_at).toLocaleString() }}</p>
                                            </div>
                                            <button @click="toggleCommentVisibility(comment)" type="button"
                                                    class="px-4 py-1 text-xs font-bold text-white rounded-full transition uppercase"
                                                    :class="comment.show ? 'bg-green-500 hover:bg-green-600' : 'bg-[#e31e24] hover:bg-[#c1191f]'">
                                                {{ comment.show ? __('comments.see') : __('comments.hide') }}
                                            </button>
                                        </div>

                                        <p class="text-gray-700 dark:text-gray-300 flex-grow italic">"{{ comment.content }}"</p>

                                        <!-- Odpowiedzi -->
                                        <div v-if="comment.replies?.length" class="mt-4 space-y-3 bg-gray-50 dark:bg-gray-800/50 p-4 rounded-2xl border-l-4 border-[#00a3e0]">
                                            <div v-for="reply in comment.replies" :key="reply.id" class="border-b last:border-0 border-gray-200 dark:border-gray-700 pb-3 last:pb-0">
                                                <div class="flex justify-between items-start mb-2">
                                                    <div>
                                                        <p class="font-bold text-sm text-[#00a3e0]">{{ reply.user?.name || __('comments.anonim') }}</p>
                                                        <p class="text-[10px] text-gray-500">{{ new Date(reply.created_at).toLocaleString() }}</p>
                                                    </div>
                                                    <button type="button" @click="toggleCommentVisibility(reply)"
                                                            class="px-2 py-0.5 text-[10px] font-bold text-white rounded-full transition uppercase"
                                                            :class="reply.show ? 'bg-green-500 hover:bg-green-600' : 'bg-[#e31e24] hover:bg-[#c1191f]'">
                                                        {{ reply.show ? __('comments.see') : __('comments.hide') }}
                                                    </button>
                                                </div>
                                                <p class="text-sm text-gray-600 dark:text-gray-400"> {{ reply.content }}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- PAGINACJA KOMENTARZY -->
                                <div class="flex justify-center items-center gap-2 mt-8" v-if="totalPages > 1">
                                    <button type="button" @click="goToPage(currentPage - 1)" :disabled="currentPage === 1"
                                            class="p-2 border rounded-xl bg-white hover:bg-gray-100 disabled:opacity-25 transition">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-[#143d8c]" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd" />
                                        </svg>
                                    </button>

                                    <button type="button" v-for="page in totalPages" :key="page" @click="goToPage(page)"
                                            class="w-10 h-10 border rounded-xl font-bold transition flex items-center justify-center"
                                            :class="page === currentPage ? 'bg-[#143d8c] text-white shadow-md' : 'bg-white text-[#143d8c] hover:bg-gray-100'">
                                        {{ page }}
                                    </button>

                                    <button type="button" @click="goToPage(currentPage + 1)" :disabled="currentPage === totalPages"
                                            class="p-2 border rounded-xl bg-white hover:bg-gray-100 disabled:opacity-25 transition">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-[#143d8c]" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
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
