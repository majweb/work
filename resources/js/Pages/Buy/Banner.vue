<script setup>
import {router, useForm, usePage} from '@inertiajs/vue3';
import AppLayout from '@/Layouts/AppLayout.vue';
import InputLabel from "@/Components/InputLabel.vue";
import InputError from "@/Components/InputError.vue";
import PrimaryButton from "@/Components/PrimaryButton.vue";
import FormSection from "@/Components/FormSection.vue";
import ActionMessage from "@/Components/ActionMessage.vue";
import TextInput from "@/Components/TextInput.vue";
import SpinnerAction from "@/Components/SpinnerAction.vue";
import {computed, ref} from "vue";
import Multiselect from "vue-multiselect";
const props = defineProps({
    banner: Object,
    countries: Array,
});
let serverMessage=ref(null);
const optionsCountry = ref(props.countries);

const form = useForm({
    active: props.banner.active,
    lang: props.banner?.lang ? props.banner?.lang : [],
    url: props.banner?.url ? props.banner?.url : '',
    photo: (props.banner && props.banner?.media)
            ? props.banner?.media.map(el => ({
                source: el.original_url,
                options: {
                    type: 'local',
                    metadata:{
                        poster:el.preview_url
                    }
                }
            }))
            : []
});

const removeFile =  async (source,load) => {
    await axios.post(route('temporary.delete.poster'),{'source':source});
    load();
    form.photo = [];
}

const createBanner = () => {
    form.post(route('firm.banners.store'), {
        errorBag: 'createBanner',
        preserveScroll: true,
        onSuccess: () => {
            router.reload({ only: ['banner'] });

        }

    });
}
const sortLangs = computed(() => {
    return usePage().props.languages
        .sort((a, b) => a.label.localeCompare(b.label));
})

</script>
<template>
    <AppLayout :title="__('translate.banner')">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ __('translate.banner') }}
            </h2>
        </template>
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <FormSection @submitted="createBanner">
                        <template #title>
                            {{__('translate.banners')}}
                        </template>

                        <template #description>
                            {{__('translate.bannersInfo')}}
                        </template>

                        <template #form>
                            <div class="col-span-6">
<!--                                <div class="mt-4">-->
<!--                                    <InputLabel for="title" :value="__('translate.language')"/>-->
<!--                                    <select v-model=" form.lang" name="lang" id="lang" class="border-gray-300 focus:blue-work rounded-md shadow-sm mt-1 block w-full">-->
<!--                                        <option :value="language.value" v-for="language in usePage().props.languages" :key="language.value" :selected="language.value === usePage().props.language">-->
<!--                                            {{ language.value }}-->
<!--                                        </option>-->
<!--                                    </select>-->
<!--                                    <InputError :message="form.errors.lang" class="mt-2"/>-->
<!--                                </div>-->

                                <div>
                                    <InputLabel :value="__('translate.country')"/>
                                    <multiselect
                                        group-values="elements" group-label="group"
                                        :group-select="false"
                                        :selectLabel="__('translate.selectLabel')"
                                        :selectGroupLabel="__('translate.selectGroupLabel')"
                                        :selectedLabel="__('translate.selectedLabel')"
                                        :deselectLabel="__('translate.deselectLabel')"
                                        track-by="name"
                                        :multiple="true"
                                        label="name"
                                        :placeholder="__('translate.placeholder')"
                                        v-model="form.lang" :options="optionsCountry">
                                        <template #noResult>
                                            <span>{{__('translate.noOptions')}}</span>
                                        </template>
                                        <template #noOptions>
                                            <span>{{__('translate.noResult')}}</span>
                                        </template>
                                    </multiselect>
                                    <InputError :message="form.errors.lang" class="mt-2"/>
                                </div>




                            </div>
                            <div class="col-span-6">
                                <div class="mt-4">
                                    <InputLabel for="url" :value="__('translate.url')"/>
                                    <TextInput
                                        id="url"
                                        v-model="form.url"
                                        class="mt-1 block w-full"
                                        type="text"
                                    />
                                    <InputError :message="form.errors.url" class="mt-2"/>
                                </div>
                            </div>
                            <div class="col-span-6">
                                <div class="mt-4">
                                    <InputLabel for="photo" :value="__('translate.baner')" class="mb-1"/>
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
                                        credits=""
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
                                        <span class="text-sm text-red-600" v-if="fileKey.startsWith('photo.')">{{ error }}</span>
                                    </div>

                                </div>
                            </div>
                            <div class="mb-6">
                                <InputLabel for="is_active" :value="__('translate.status')" />
                                <div class="mt-2">
                                    <div class="flex items-center">
                                        <input
                                            id="is_active"
                                            v-model="form.active"
                                            type="checkbox"
                                            class="h-4 w-4 text-indigo-600 border-gray-300 rounded focus:ring-indigo-500"
                                        />
                                        <label for="is_active" class="ml-3 block text-sm font-medium text-gray-700">
                                            {{ __('translate.active') }}
                                        </label>
                                    </div>
                                </div>
                            </div>

                        </template>

                        <template #actions>
                            <ActionMessage :on="form.recentlySuccessful" class="mr-3">
                                {{__('translate.updatedBanner')}}
                            </ActionMessage>
                            <PrimaryButton :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
                                <spinner-action :process="form.processing">{{__('translate.update')}}</spinner-action>
                            </PrimaryButton>
                        </template>
                    </FormSection>
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
