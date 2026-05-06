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
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('translate.editArticle') }}
            </h2>
        </template>

        <div class="py-12 bg-gray-50/50 min-h-screen px-2 sm:px-0">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <!-- HEADER CARD -->
                <div class="bg-white rounded-[3rem] shadow-xl shadow-blue-900/5 border border-gray-100 p-10 mb-8">
                    <div class="flex items-center justify-between">
                        <div>
                            <h3 class="text-2xl font-black text-[#0A2C5C] uppercase tracking-tight">{{ __('translate.editArticle') }}</h3>
                            <p class="text-[10px] font-bold text-gray-400 uppercase tracking-widest mt-1">{{ __('translate.editArticleDescription') }}</p>
                        </div>
                        <Link :href="route('articles.index')" class="bg-white border border-gray-100 text-[#0A2C5C] text-[10px] font-black uppercase tracking-widest px-8 py-4 rounded-2xl hover:bg-gray-50 shadow-sm transition-all hover:-translate-y-0.5 flex items-center gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 10h16M4 14h16M4 18h16"/>
                            </svg>
                            {{ __('translate.back') }}
                        </Link>
                    </div>
                </div>

                <div class="bg-white rounded-[3rem] shadow-xl shadow-blue-900/5 border border-gray-100 p-10">
                    <form @submit.prevent="updateArticle" class="space-y-12">
                        <!-- Komentarze Section -->
                        <div v-if="props.article.comments?.length" class="mb-16 space-y-10">
                            <div class="flex items-center gap-4">
                                <h3 class="text-[10px] font-black text-[#0A2C5C] uppercase tracking-[0.2em]">Komentarze</h3>
                                <div class="h-px flex-1 bg-gray-100"></div>
                            </div>

                            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                                <div v-for="comment in paginatedComments" :key="comment.id" class="bg-white p-8 rounded-[2.5rem] border border-gray-100 shadow-sm flex flex-col h-full hover:shadow-xl hover:shadow-blue-900/5 transition-all duration-300">
                                    <div class="flex justify-between items-start mb-6">
                                        <div>
                                            <p class="text-xs font-black text-[#0A2C5C] uppercase tracking-widest mb-1">{{ comment.user?.name || __('comments.anonim') }}</p>
                                            <p class="text-[10px] font-bold text-gray-300 uppercase tracking-widest">{{ new Date(comment.created_at).toLocaleString() }}</p>
                                        </div>
                                        <button @click="toggleCommentVisibility(comment)" type="button"
                                                class="px-4 py-2 text-[8px] font-black text-white rounded-full transition uppercase tracking-widest shadow-sm"
                                                :class="comment.show ? 'bg-green-500 hover:bg-green-600 shadow-green-900/10' : 'bg-[#e31e24] hover:bg-[#c1191f] shadow-red-900/10'">
                                            {{ comment.show ? __('comments.see') : __('comments.hide') }}
                                        </button>
                                    </div>

                                    <div class="bg-gray-50/50 rounded-2xl p-6 border border-gray-100/50 flex-grow mb-6 italic text-[#0A2C5C] text-sm">
                                        "{{ comment.content }}"
                                    </div>

                                    <!-- Odpowiedzi -->
                                    <div v-if="comment.replies?.length" class="mt-4 space-y-4 bg-blue-50/30 p-6 rounded-2xl border-l-4 border-[#00a3e0]">
                                        <div v-for="reply in comment.replies" :key="reply.id" class="border-b last:border-0 border-blue-100/50 pb-4 last:pb-0">
                                            <div class="flex justify-between items-start mb-2">
                                                <div>
                                                    <p class="text-[10px] font-black text-[#00a3e0] uppercase tracking-widest mb-0.5">{{ reply.user?.name || __('comments.anonim') }}</p>
                                                    <p class="text-[8px] font-bold text-gray-300 uppercase tracking-widest">{{ new Date(reply.created_at).toLocaleString() }}</p>
                                                </div>
                                                <button type="button" @click="toggleCommentVisibility(reply)"
                                                        class="px-3 py-1 text-[7px] font-black text-white rounded-full transition uppercase tracking-widest"
                                                        :class="reply.show ? 'bg-green-500 hover:bg-green-600' : 'bg-[#e31e24] hover:bg-[#c1191f]'">
                                                    {{ reply.show ? __('comments.see') : __('comments.hide') }}
                                                </button>
                                            </div>
                                            <p class="text-xs text-gray-600 italic"> {{ reply.content }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- PAGINACJA KOMENTARZY -->
                            <div class="flex justify-center items-center gap-3 mt-12" v-if="totalPages > 1">
                                <button type="button" @click="goToPage(currentPage - 1)" :disabled="currentPage === 1"
                                        class="p-4 border border-gray-100 rounded-2xl bg-white hover:bg-gray-50 disabled:opacity-25 transition shadow-sm">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-[#0A2C5C]" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd" />
                                    </svg>
                                </button>

                                <button type="button" v-for="page in totalPages" :key="page" @click="goToPage(page)"
                                        class="w-12 h-12 border border-gray-100 rounded-2xl text-[10px] font-black uppercase tracking-widest transition flex items-center justify-center shadow-sm"
                                        :class="page === currentPage ? 'bg-[#0A2C5C] text-white shadow-blue-900/20 shadow-lg' : 'bg-white text-[#0A2C5C] hover:bg-gray-50'">
                                    {{ page }}
                                </button>

                                <button type="button" @click="goToPage(currentPage + 1)" :disabled="currentPage === totalPages"
                                        class="p-4 border border-gray-100 rounded-2xl bg-white hover:bg-gray-50 disabled:opacity-25 transition shadow-sm">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-[#0A2C5C]" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                                    </svg>
                                </button>
                            </div>
                        </div>

                        <!-- Sekcja podstawowa -->
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-10">
                            <div class="space-y-8">
                                <div>
                                    <InputLabel for="lang" :value="__('translate.language')" class="block text-[10px] font-black text-gray-400 mb-3 uppercase tracking-widest" />
                                    <select v-model="form.lang" name="lang" id="lang" class="w-full px-5 py-4 text-xs rounded-2xl border-gray-100 bg-gray-50 focus:bg-white focus:ring-0 focus:border-[#00a0e3] transition-all font-bold tracking-widest">
                                        <option :value="language.value" v-for="language in usePage().props.languages" :key="language.value">
                                            {{ language.value.toUpperCase() }}
                                        </option>
                                    </select>
                                    <InputError :message="form.errors.lang" class="mt-2 text-[10px] font-bold uppercase tracking-widest" />
                                </div>

                                <div>
                                    <InputLabel :value="__('translate.category')" class="block text-[10px] font-black text-gray-400 mb-3 uppercase tracking-widest" />
                                    <multiselect
                                        :selectLabel="__('translate.selectLabel')"
                                        :selectGroupLabel="__('translate.selectGroupLabel')"
                                        :selectedLabel="__('translate.selectedLabel')"
                                        :deselectLabel="__('translate.deselectLabel')"
                                        :placeholder="__('translate.placeholder')"
                                        track-by="value"
                                        label="name"
                                        v-model="form.category"
                                        :options="optionsCategory"
                                    >
                                        <template #noResult><span>{{ __('translate.noOptions') }}</span></template>
                                        <template #noOptions><span>{{ __('translate.noResult') }}</span></template>
                                    </multiselect>
                                    <InputError :message="form.errors.category" class="mt-2 text-[10px] font-bold uppercase tracking-widest" />
                                </div>

                                <div>
                                    <InputLabel for="title" :value="__('translate.title')" class="block text-[10px] font-black text-gray-400 mb-3 uppercase tracking-widest" />
                                    <TextInput id="title" v-model="form.title" autofocus type="text" :placeholder="__('translate.title')" />
                                    <InputError :message="form.errors.title" class="mt-2 text-[10px] font-bold uppercase tracking-widest" />
                                </div>

                                <div>
                                    <InputLabel for="alt" :value="__('translate.alt')" class="block text-[10px] font-black text-gray-400 mb-3 uppercase tracking-widest" />
                                    <TextInput id="alt" v-model="form.alt" type="text" :placeholder="__('translate.alt')" />
                                    <InputError :message="form.errors.alt" class="mt-2 text-[10px] font-bold uppercase tracking-widest" />
                                </div>
                            </div>

                            <div>
                                <InputLabel for="photo" :value="__('translate.photo')" class="block text-[10px] font-black text-gray-400 mb-3 uppercase tracking-widest" />
                                <div class="bg-gray-50 rounded-[2rem] p-4 border border-gray-100">
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

                        <div class="space-y-10">
                            <div>
                                <InputLabel for="short_description" :value="__('translate.shortDescription')" class="block text-[10px] font-black text-gray-400 mb-3 uppercase tracking-widest" />
                                <TextareaLimit id="short_description" v-model="form.short_description" :limit="500" class="w-full px-5 py-4 text-xs rounded-2xl border-gray-100 bg-gray-50 focus:bg-white focus:ring-0 focus:border-[#00a0e3] transition-all font-bold tracking-widest" />
                                <InputError :message="form.errors.short_description" class="mt-2 text-[10px] font-bold uppercase tracking-widest" />
                            </div>

                            <div>
                                <InputLabel for="content" :value="__('translate.content')" class="block text-[10px] font-black text-gray-400 mb-3 uppercase tracking-widest" />
                                <div class="prose max-w-none">
                                    <Tiptap id="content" v-model="form.content" class="border border-gray-100 rounded-2xl overflow-hidden shadow-sm bg-gray-50" />
                                </div>
                                <InputError :message="form.errors.content" class="mt-2 text-[10px] font-bold uppercase tracking-widest" />
                            </div>
                        </div>

                        <!-- SEO Section -->
                        <div class="bg-gray-50/50 rounded-[2rem] p-8 border border-gray-100 space-y-8">
                            <div class="flex items-center gap-4 mb-4">
                                <h3 class="text-[10px] font-black text-[#0A2C5C] uppercase tracking-[0.2em]">{{ __('translate.seoSection') }}</h3>
                                <div class="h-px flex-1 bg-gray-100"></div>
                            </div>

                            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                                <div>
                                    <InputLabel for="meta_title" :value="__('translate.metaTitle')" class="block text-[10px] font-black text-gray-400 mb-3 uppercase tracking-widest" />
                                    <TextInput id="meta_title" v-model="form.meta_title" type="text" :placeholder="__('translate.metaTitle')" />
                                    <InputError :message="form.errors.meta_title" class="mt-2 text-[10px] font-bold uppercase tracking-widest" />
                                </div>

                                <div>
                                    <InputLabel for="meta_keywords" :value="__('translate.metaKeywords')" class="block text-[10px] font-black text-gray-400 mb-3 uppercase tracking-widest" />
                                    <TextInput id="meta_keywords" v-model="form.meta_keywords" :placeholder="__('translate.metaKeywords')" />
                                    <p class="mt-2 text-[8px] font-bold text-gray-400 uppercase tracking-widest italic">{{ __('translate.keyWordsDesc') }}</p>
                                    <InputError :message="form.errors.meta_keywords" class="mt-2 text-[10px] font-bold uppercase tracking-widest" />
                                </div>

                                <div class="md:col-span-2">
                                    <InputLabel for="meta_description" :value="__('translate.metaDescription')" class="block text-[10px] font-black text-gray-400 mb-3 uppercase tracking-widest" />
                                    <TextareaLimit id="meta_description" v-model="form.meta_description" :limit="160" class="w-full px-5 py-4 text-xs rounded-2xl border-gray-100 bg-gray-50 focus:bg-white focus:ring-0 focus:border-[#00a0e3] transition-all font-bold tracking-widest" />
                                    <InputError :message="form.errors.meta_description" class="mt-2 text-[10px] font-bold uppercase tracking-widest" />
                                </div>
                            </div>
                        </div>

                        <!-- Publish toggle -->
                        <div class="bg-gray-50 rounded-2xl p-6 border border-gray-100 flex items-center justify-between">
                            <div class="flex items-center gap-4">
                                <label class="relative inline-flex items-center cursor-pointer">
                                    <input
                                        id="active"
                                        v-model="form.active"
                                        type="checkbox"
                                        class="sr-only peer"
                                    />
                                    <div class="w-11 h-6 bg-gray-200 peer-focus:outline-none rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-[#00a3e0]"></div>
                                </label>
                                <label for="active" class="text-[10px] font-black text-[#0A2C5C] uppercase tracking-widest cursor-pointer">
                                    {{ __('translate.active') }}
                                </label>
                            </div>
                            <p class="text-[8px] font-bold text-gray-400 uppercase tracking-widest italic text-right">{{ __('comments.publishComment') }}</p>
                        </div>

                        <div class="flex items-center justify-end gap-6 pt-10 border-t border-gray-50">
                            <ActionMessage :on="form.recentlySuccessful" class="text-green-500 text-[10px] font-black uppercase tracking-widest">
                                {{ __('translate.updateRecruit') }}
                            </ActionMessage>

                            <button
                                type="submit"
                                :class="{ 'opacity-50': form.processing }"
                                :disabled="form.processing"
                                class="px-16 py-5 bg-[#0A2C5C] text-white text-[10px] font-black uppercase tracking-widest rounded-2xl hover:bg-blue-800 transition-all shadow-lg shadow-blue-900/20 hover:-translate-y-1 active:translate-y-0 flex items-center justify-center gap-3"
                            >
                                <spinner-action :process="form.processing">{{ __('translate.update') }}</spinner-action>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </AppLayout>
</template>
<style src="vue-multiselect/dist/vue-multiselect.css"></style>
<style lang="scss">

.multiselect__tags {
    border: 1px solid #f3f4f6; /* border-gray-100 */
    border-radius: 1rem; /* rounded-2xl */
    padding: 0.75rem 2.5rem 0.75rem 1rem;
    background: #f9fafb; /* bg-gray-50 */
}

.multiselect__placeholder {
    margin-bottom: 0;
    padding-top: 0;
    color: #9ca3af; /* text-gray-400 */
    font-size: 0.75rem;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 0.1em;
}

.multiselect__single {
    margin-bottom: 0;
    padding-left: 0;
    font-size: 0.75rem;
    font-weight: 700;
    background: transparent;
}

.multiselect__input {
    margin-bottom: 0;
    background: transparent;
    font-size: 0.75rem;
}

.multiselect__select {
    height: 100%;
    width: 2.5rem;
}

.multiselect__option--highlight {
    background: #0d2a52 !important; /* work-main */
    outline: none;
    color: white;
}

.multiselect__option--highlight:after {
    background: #0d2a52 !important;
}

.multiselect__option--selected {
    background: #f3f4f6 !important; /* gray-100 */
    color: #0d2a52;
    font-weight: bold;
}

.multiselect__option--selected.multiselect__option--highlight {
    background: #0d2a52 !important;
    color: #fff;
}

.multiselect__tag {
    background: #0d2a52 !important;
    border-radius: 0.5rem;
}

.multiselect__tag-icon:after {
    color: white !important;
}

.multiselect__tag-icon:hover {
    background: #1e3a8a !important; /* darker blue */
}

.multiselect__content-wrapper {
    border: 1px solid #f3f4f6;
    border-top: none;
    border-bottom-left-radius: 1rem;
    border-bottom-right-radius: 1rem;
}
</style>
