<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import { useForm, usePage, Link } from '@inertiajs/vue3';
import InputLabel from "@/Components/InputLabel.vue";
import InputError from "@/Components/InputError.vue";
import PrimaryButton from "@/Components/PrimaryButton.vue";
import Checkbox from "@/Components/Checkbox.vue";
import SpinnerAction from "@/Components/SpinnerAction.vue";
import { ref } from "vue";
import __ from "@/lang.js";

let serverMessage = ref(null);

const form = useForm({
    name: "",
    link: "",
    active: true,
    photo: []
});

const removeFile = async (source, load) => {
    await axios.post('/temporary/delete', { source });
    load();
    form.photo = [];
};

const submit = () => {
    form.post(route('admin.partners.store'), {
        preserveScroll: true,
        onSuccess: () => {
            form.reset();
        }
    });
};
</script>

<template>
    <AppLayout :title="'Dodaj Partnera'">
        <div class="py-12 bg-gray-50/50 min-h-screen">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <!-- Header Card -->
                <div class="bg-white rounded-[3rem] shadow-xl shadow-blue-900/5 border border-gray-100 p-10 mb-8">
                    <div class="flex items-center justify-between">
                        <div>
                            <h3 class="text-2xl font-black text-[#0A2C5C] uppercase tracking-tight">Dodaj Partnera</h3>
                            <p class="text-[10px] font-bold text-gray-400 uppercase tracking-widest mt-1">Stwórz nową pozycję partnera w systemie</p>
                        </div>
                        <Link :href="route('admin.partners.index')" class="text-[10px] font-black text-gray-400 uppercase tracking-widest hover:text-[#0A2C5C] transition-colors">
                            Powrót do listy
                        </Link>
                    </div>
                </div>

                <!-- Form Card -->
                <div class="bg-white rounded-[3rem] shadow-xl shadow-blue-900/5 border border-gray-100 p-10">
                    <form @submit.prevent="submit" class="space-y-8">
                        <!-- Name -->
                        <div class="space-y-2">
                            <InputLabel value="Nazwa partnera" class="text-[10px] font-black text-[#0A2C5C] uppercase tracking-widest ml-1"/>
                            <input
                                v-model="form.name"
                                class="w-full rounded-2xl border-gray-100 bg-gray-50/50 focus:border-blue-400 focus:ring-blue-400/20 transition-all p-4 text-sm"
                                type="text"
                                placeholder="Wprowadź nazwę partnera..."
                            >
                            <InputError :message="form.errors.name" class="ml-1"/>
                        </div>

                        <!-- Link -->
                        <div class="space-y-2">
                            <InputLabel value="Adres URL (opcjonalnie)" class="text-[10px] font-black text-[#0A2C5C] uppercase tracking-widest ml-1"/>
                            <input
                                v-model="form.link"
                                class="w-full rounded-2xl border-gray-100 bg-gray-50/50 focus:border-blue-400 focus:ring-blue-400/20 transition-all p-4 text-sm"
                                type="text"
                                placeholder="https://..."
                            >
                            <InputError :message="form.errors.link" class="ml-1"/>
                        </div>

                        <!-- Logo -->
                        <div class="space-y-2">
                            <InputLabel value="Logo partnera" class="text-[10px] font-black text-[#0A2C5C] uppercase tracking-widest ml-1"/>
                            <div class="rounded-2xl border-2 border-dashed border-gray-100 p-2 hover:border-blue-400/50 transition-colors bg-gray-50/20">
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
                                                console.log(response)
                                                form.photo.push(response);
                                                return response;
                                            },
                                            onerror: (res) => serverMessage = JSON.parse(res).error.photo
                                        },
                                        revert: {
                                            url: '/temporary/delete',
                                            onload: (response) => {
                                                if (!response) return;
                                                const idx = form.photo.findIndex(el => el === response);
                                                if (idx !== -1) form.photo.splice(idx, 1);
                                            }
                                        },
                                        remove: removeFile
                                    }"
                                ></file-pond>
                            </div>
                            <InputError :message="form.errors.photo" class="ml-1"/>
                        </div>

                        <!-- Active -->
                        <div class="flex items-center p-4 bg-gray-50/50 rounded-2xl border border-gray-100 group hover:border-blue-400/30 transition-colors">
                            <label class="flex items-center cursor-pointer w-full" for="active">
                                <Checkbox id="active" v-model:checked="form.active" class="rounded-lg border-gray-300 text-[#0A2C5C] focus:ring-[#0A2C5C]/20"/>
                                <span class="ml-3 text-[10px] font-black text-[#0A2C5C] uppercase tracking-widest">Partner Aktywny</span>
                            </label>
                        </div>

                        <!-- Submit -->
                        <div class="flex justify-end pt-4">
                            <PrimaryButton
                                :disabled="form.processing"
                                class="inline-flex items-center px-12 py-5 bg-[#0A2C5C] border border-transparent rounded-2xl font-black text-[10px] text-white uppercase tracking-widest hover:bg-blue-800 transition duration-200 shadow-lg shadow-blue-900/20"
                            >
                                <SpinnerAction :process="form.processing">
                                    Zapisz Partnera
                                </SpinnerAction>
                            </PrimaryButton>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </AppLayout>
</template>
