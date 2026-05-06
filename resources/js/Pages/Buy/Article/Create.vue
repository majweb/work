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
import Multiselect from "vue-multiselect";

let serverMessage=ref(null);


const props = defineProps({
    categories: Array,
});


const form = useForm({
    title: '',
    content: '',
    active: true,
    lang: usePage().props.language,
    photo:[],
    meta_title: '',
    meta_description: '',
    short_description: '',
    alt: '',
    meta_keywords:'',
    category: '',

});
const optionsCategory = ref(props.categories);
const isReadyToSubmit = ref(true);


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
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('translate.createArticle') }}
            </h2>
        </template>

        <div class="py-12 bg-gray-50/50 min-h-screen px-2 sm:px-0">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <!-- HEADER CARD -->
                <div class="bg-white rounded-[3rem] shadow-xl shadow-blue-900/5 border border-gray-100 p-10 mb-8">
                    <div class="flex items-center justify-between">
                        <div>
                            <h3 class="text-2xl font-black text-[#0A2C5C] uppercase tracking-tight">{{ __('translate.createArticle') }}</h3>
                            <p class="text-[10px] font-bold text-gray-400 uppercase tracking-widest mt-1">{{ __('translate.createArticleDescription') }}</p>
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
                    <form @submit.prevent="createArticle" class="space-y-12">
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
                                <InputLabel for="photo" :value="__('translate.Photo')" class="block text-[10px] font-black text-gray-400 mb-3 uppercase tracking-widest" />
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
                            <p class="text-[8px] font-bold text-gray-400 uppercase tracking-widest italic text-right">Czy artykuł ma być opublikowany.</p>
                        </div>

                        <div class="flex items-center justify-end gap-6 pt-10 border-t border-gray-50">
                            <ActionMessage :on="form.recentlySuccessful" class="text-green-500 text-[10px] font-black uppercase tracking-widest">
                                {{ __('translate.addedRecruit') }}
                            </ActionMessage>

                            <button
                                type="submit"
                                :class="{ 'opacity-50': form.processing }"
                                :disabled="form.processing"
                                class="px-16 py-5 bg-[#0A2C5C] text-white text-[10px] font-black uppercase tracking-widest rounded-2xl hover:bg-blue-800 transition-all shadow-lg shadow-blue-900/20 hover:-translate-y-1 active:translate-y-0 flex items-center justify-center gap-3"
                            >
                                <spinner-action :process="form.processing">{{ __('translate.add') }}</spinner-action>
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
