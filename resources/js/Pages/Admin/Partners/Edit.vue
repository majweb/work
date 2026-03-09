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
        <div class="py-12 bg-gray-50/50 min-h-screen">
            <div class="max-w-[1600px] mx-auto sm:px-6 lg:px-8">
                <!-- Header Card -->
                <div class="bg-white rounded-[3rem] shadow-xl shadow-blue-900/5 border border-gray-100 p-10 mb-8">
                    <div class="flex flex-col md:flex-row md:items-center justify-between gap-6">
                        <div class="flex items-center gap-4">
                            <Link :href="route('admin.partners.index')" class="w-12 h-12 bg-gray-50 rounded-2xl flex items-center justify-center text-gray-400 hover:text-[#0A2C5C] hover:bg-blue-50 transition-all active:scale-95 group">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="3" stroke="currentColor" class="w-5 h-5 group-hover:-translate-x-1 transition-transform">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5 8.25 12l7.5-7.5" />
                                </svg>
                            </Link>
                            <div>
                                <h3 class="text-2xl font-black text-[#0A2C5C] uppercase tracking-tight">Edycja Partnera</h3>
                                <div class="flex items-center gap-2 mt-1">
                                    <span class="px-3 py-1 bg-blue-50 text-[#0A2C5C] text-[8px] font-black uppercase tracking-widest rounded-lg border border-blue-100">ID: #{{ partner.id }}</span>
                                    <p class="text-[10px] font-bold text-gray-400 uppercase tracking-widest">Aktualizuj dane partnera: {{ partner.name }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Form Card -->
                <div class="bg-white rounded-[3rem] shadow-xl shadow-blue-900/5 border border-gray-100 p-10">
                    <form @submit.prevent="submit" class="max-w-4xl mx-auto space-y-10">
                        <!-- Sekcja: Podstawowe informacje -->
                        <div class="space-y-8">
                            <div class="flex items-center gap-4 px-2">
                                <div class="w-8 h-8 bg-[#0A2C5C] rounded-xl flex items-center justify-center text-white">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-4 h-4">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 9h3.75M15 12h3.75M15 15h3.75M4.5 19.5h15a2.25 2.25 0 0 0 2.25-2.25V6.75A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25v10.5A2.25 2.25 0 0 0 4.5 19.5Zm6-10.125a1.875 1.875 0 1 1-3.75 0 1.875 1.875 0 0 1 3.75 0Zm1.294 6.336a6.721 6.721 0 0 1-3.17.789 6.721 6.721 0 0 1-3.168-.789 3.376 3.376 0 0 1 6.338 0Z" />
                                    </svg>
                                </div>
                                <h4 class="text-[10px] font-black text-[#0A2C5C] uppercase tracking-[0.2em]">Dane podstawowe</h4>
                            </div>

                            <div class="grid md:grid-cols-2 gap-8 px-2">
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
                                    <InputLabel value="Adres URL" class="text-[10px] font-black text-[#0A2C5C] uppercase tracking-widest ml-1"/>
                                    <input
                                        v-model="form.link"
                                        class="w-full rounded-2xl border-gray-100 bg-gray-50/50 focus:border-blue-400 focus:ring-blue-400/20 transition-all p-4 text-sm"
                                        type="text"
                                        placeholder="https://..."
                                    >
                                    <InputError :message="form.errors.link" class="ml-1"/>
                                </div>
                            </div>
                        </div>

                        <!-- Sekcja: Wizualizacja -->
                        <div class="space-y-8 pt-8 border-t border-gray-50">
                            <div class="flex items-center gap-4 px-2">
                                <div class="w-8 h-8 bg-[#0A2C5C] rounded-xl flex items-center justify-center text-white">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-4 h-4">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="m2.25 15.75 5.159-5.159a2.25 2.25 0 0 1 3.182 0l5.159 5.159m-1.5-1.5 1.409-1.409a2.25 2.25 0 0 1 3.182 0l2.909 2.909m-18 3.75h16.5a1.5 1.5 0 0 0 1.5-1.5V6.75a1.5 1.5 0 0 0-1.5-1.5H3.75a1.5 1.5 0 0 0-1.5 1.5v12.75a1.5 1.5 0 0 0 1.5 1.5Zm10.5-11.25h.008v.008h-.008V8.25Zm.375 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Z" />
                                    </svg>
                                </div>
                                <h4 class="text-[10px] font-black text-[#0A2C5C] uppercase tracking-[0.2em]">Logo i status</h4>
                            </div>

                            <div class="grid md:grid-cols-3 gap-8 px-2">
                                <!-- Logo -->
                                <div class="md:col-span-2 space-y-2">
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
                                    </div>
                                    <InputError :message="form.errors.photo" class="ml-1"/>
                                </div>

                                <!-- Active -->
                                <div class="space-y-2">
                                    <InputLabel value="Widoczność" class="text-[10px] font-black text-[#0A2C5C] uppercase tracking-widest ml-1"/>
                                    <div class="h-[calc(100%-1.5rem)] flex items-center p-6 bg-gray-50/50 rounded-2xl border border-gray-100 group hover:border-blue-400/30 transition-colors cursor-pointer" @click="form.active = !form.active">
                                        <div class="flex items-center cursor-pointer w-full">
                                            <Checkbox id="active" v-model:checked="form.active" class="rounded-lg border-gray-300 text-[#0A2C5C] focus:ring-[#0A2C5C]/20 w-5 h-5"/>
                                            <div class="ml-4">
                                                <span class="block text-[10px] font-black text-[#0A2C5C] uppercase tracking-widest">Partner Aktywny</span>
                                                <span class="block text-[8px] font-bold text-gray-400 uppercase tracking-widest mt-0.5">Widoczny na stronie głównej</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Submit -->
                        <div class="flex justify-end pt-10 border-t border-gray-50">
                            <PrimaryButton
                                :disabled="form.processing"
                                class="inline-flex items-center px-16 py-6 bg-[#0A2C5C] border border-transparent rounded-2xl font-black text-[10px] text-white uppercase tracking-widest hover:bg-blue-800 transition duration-300 shadow-xl shadow-blue-900/20 active:scale-95"
                            >
                                <SpinnerAction :process="form.processing">
                                    Zatwierdź i zapisz zmiany
                                </SpinnerAction>
                            </PrimaryButton>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </AppLayout>
</template>
