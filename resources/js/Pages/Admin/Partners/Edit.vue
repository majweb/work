<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import { useForm, usePage, Link } from '@inertiajs/vue3';
import InputLabel from "@/Components/InputLabel.vue";
import InputError from "@/Components/InputError.vue";
import PrimaryButton from "@/Components/PrimaryButton.vue";
import SpinnerAction from "@/Components/SpinnerAction.vue";
import Checkbox from "@/Components/Checkbox.vue";
import { ref } from "vue";
import __ from "@/lang.js";

const props = defineProps({
    partner: Object
});

let serverMessage = ref(null);

const form = useForm({
    _method: 'PUT',
    name: props.partner.name,
    link: props.partner.link,
    active: props.partner.active,
    photo: props.partner.photo
        ? [{
            source: props.partner.photo,
            options: {
                type: 'local',
                metadata: { poster: props.partner.photo }
            }
        }]
        : []
});

const removeFile = async (source, load) => {
    await axios.post(route('temporary.delete.poster'), { source });
    form.photo = []; // usuń stare referencje pliku
    load();
    // form.photo = [];
};

const submit = () => {
    form.post(route('admin.partners.update', props.partner.id), {
        preserveScroll: true
    });
};
</script>

<template>
    <AppLayout :title="'Edytuj Partnera'">
        <template #header>
            <div class="flex justify-between items-center">
                <h2 class="font-semibold text-xl text-gray-800">Edycja Partnera</h2>

                <Link :href="route('admin.partners.index')" class="text-gray-600">
                    Powrót
                </Link>
            </div>
        </template>

        <div class="py-10 max-w-4xl mx-auto">
            <form @submit.prevent="submit" class="bg-white shadow-xl sm:rounded-lg p-6 space-y-6">

                <!-- Name -->
                <div>
                    <InputLabel value="Nazwa partnera"/>
                    <input
                        v-model="form.name"
                        class="w-full rounded border-gray-300"
                        type="text"
                    >
                    <InputError :message="form.errors.name"/>
                </div>

                <!-- Link -->
                <div>
                    <InputLabel value="Adres URL"/>
                    <input
                        v-model="form.link"
                        class="w-full rounded border-gray-300"
                        type="text"
                    >
                    <InputError :message="form.errors.link"/>
                </div>

                <!-- Logo -->
                <div>
                    <InputLabel value="Logo partnera"/>

                    <file-pond
                        name="photo"
                        ref="uploadLogo"
                        :files="form.photo"
                        :allow-multiple="false"
                        :max-file-size="'4MB'"
                        credits="false"
                        :accepted-file-types="'image/png, image/jpeg, image/jpg, image/webp'"
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
                        :server="{
                            url: '',
                            headers: { 'X-CSRF-TOKEN': usePage().props.csrf_token },
                            process: {
                                url: '/temporary/upload',
                                onload: (response) => {
                                    form.photo.push(response);
                                    return response;
                                },
                                onerror: (res) => serverMessage = JSON.parse(res).error.photo[0]
                            },
                            revert: {
                                url: '/temporary/delete',
                                onload: (response) => {
                                    if (!response) return;
                                    form.photo = [];
                                }
                            },
                            remove: removeFile
                        }"
                    ></file-pond>

                    <InputError :message="form.errors.photo"/>
                </div>

                <!-- Active -->
                <div class="mt-4 flex items-center gap-2">
                    <label class="flex items-center" for="active">
                        <Checkbox id="active" v-model:checked="form.active"/>
                        <span class="ml-2 mr-1 text-gray-600 dark:text-gray-400">Aktywny</span>
                    </label>
                </div>

                <!-- Submit -->
                <div class="flex justify-end">
                    <PrimaryButton :disabled="form.processing">
                        <SpinnerAction :process="form.processing">
                            Zapisz zmiany
                        </SpinnerAction>
                    </PrimaryButton>
                </div>
            </form>
        </div>
    </AppLayout>
</template>
