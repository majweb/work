<script setup>
import {useForm, usePage} from '@inertiajs/vue3';
import ActionMessage from '@/Components/ActionMessage.vue';
import InputError from '@/Components/InputError.vue';
import InputLabel from '@/Components/InputLabel.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import TextInput from '@/Components/TextInput.vue';
import {ref} from "vue";
import TextareaLimit from "@/Components/TextareaLimit.vue";

const props = defineProps({
    user: Object,
});
const uploaderVideoKey = ref(0)
const serverMessage = ref('');

const form = useForm({
    _method: 'PUT',
    www: props.user.firm?.www,
    opinion_google: props.user.firm?.opinion_google,
    opinion_trust: props.user.firm?.opinion_trust,
    opinion_facebook: props.user.firm?.opinion_facebook,
    social_facebook: props.user.firm?.social_facebook,
    social_google: props.user.firm?.social_google,
    social_x: props.user.firm?.social_x,
    social_instagram: props.user.firm?.social_instagram,
    social_linkedin: props.user.firm?.social_linkedin,
    social_tiktok: props.user.firm?.social_tiktok,
    count_workers: props.user.firm?.count_workers?.toString() || '',
    annual_turnover: props.user.firm?.annual_turnover?.toString() || '',
    extra_description: props.user.firm?.extra_description,
    video: null,
    photo: (props.user && props.user?.firm?.media)
        ? props.user?.firm.media.map(el => ({
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
}
const updateProfileFirm = () => {
    form.post(route('firm.update.about.form'), {
        errorBag: 'updateProfileFirm',
        preserveScroll: true,
        onSuccess: () => {
            if(form.video){
            uploaderVideoKey.value++
            }
        }

    });
};

</script>

<template>
    <div class="bg-white shadow-lg rounded-3xl overflow-hidden">
        <!-- Header -->
        <h3 class="px-6 py-4 text-xl text-center font-semibold text-work-main">
            {{ __('translate.rest') }}
        </h3>

        <!-- Form -->
        <form @submit.prevent="updateProfileFirm">
            <div class="px-6 py-6">
                <div class="grid grid-cols-6 gap-6">
            <!-- WWW -->
            <div class="col-span-6 sm:col-span-4">
                <InputLabel for="www" :value="__('translate.www')"/>
                <TextInput
                    id="www"
                    v-model="form.www"
                    type="text"
                    class="mt-1 block w-full"
                />
                <small class="text-gray-500">https://example.com</small>
                <InputError :message="form.errors.www" class="mt-2"/>
            </div>
            <div class="col-span-6">
                <h3 class="text-lg mb-3 font-bold">{{ __('translate.opinions') }}</h3>
                <div class="grid grid-cols-6 gap-6">
                    <!-- opinion_google -->
                    <div class="col-span-6 sm:col-span-2">
                        <InputLabel for="opinion_google" :value="__('translate.opinion_google')"/>
                        <TextInput
                            id="opinion_google"
                            v-model="form.opinion_google"
                            type="text"
                            class="mt-1 block w-full"
                        />
                        <small class="text-gray-500">https://example.com</small>
                        <InputError :message="form.errors.opinion_google" class="mt-2"/>
                    </div>

                    <!-- opinion_trust -->
                    <div class="col-span-6 sm:col-span-2">
                        <InputLabel for="opinion_trust" :value="__('translate.opinion_trust')"/>
                        <TextInput
                            id="opinion_trust"
                            v-model="form.opinion_trust"
                            type="text"
                            class="mt-1 block w-full"
                        />
                        <small class="text-gray-500">https://example.com</small>
                        <InputError :message="form.errors.opinion_trust" class="mt-2"/>
                    </div>

                    <!-- opinion_facebook -->
                    <div class="col-span-6 sm:col-span-2">
                        <InputLabel for="opinion_facebook" :value="__('translate.opinion_facebook')"/>
                        <TextInput
                            id="opinion_facebook"
                            v-model="form.opinion_facebook"
                            type="text"
                            class="mt-1 block w-full"
                        />
                        <small class="text-gray-500">https://example.com</small>
                        <InputError :message="form.errors.opinion_facebook" class="mt-2"/>
                    </div>
                </div>

            </div>
            <div class="col-span-6">
                <h3 class="text-lg mb-3 font-bold">{{ __('translate.socials') }}</h3>
                <div class="grid grid-cols-6 gap-6">
                    <!-- social_facebook -->
                    <div class="col-span-6 sm:col-span-2">
                        <InputLabel for="social_facebook" :value="__('translate.social_facebook')"/>
                        <TextInput
                            id="social_facebook"
                            v-model="form.social_facebook"
                            type="text"
                            class="mt-1 block w-full"
                        />
                        <small class="text-gray-500">https://example.com</small>
                        <InputError :message="form.errors.social_facebook" class="mt-2"/>
                    </div>

                    <!-- social_google -->
                    <div class="col-span-6 sm:col-span-2">
                        <InputLabel for="social_google" :value="__('translate.social_google')"/>
                        <TextInput
                            id="social_google"
                            v-model="form.social_google"
                            type="text"
                            class="mt-1 block w-full"
                        />
                        <small class="text-gray-500">https://example.com</small>
                        <InputError :message="form.errors.social_google" class="mt-2"/>
                    </div>

                    <!-- social_x -->
                    <div class="col-span-6 sm:col-span-2">
                        <InputLabel for="social_x" :value="__('translate.social_x')"/>
                        <TextInput
                            id="social_x"
                            v-model="form.social_x"
                            type="text"
                            class="mt-1 block w-full"
                        />
                        <small class="text-gray-500">https://example.com</small>
                        <InputError :message="form.errors.social_x" class="mt-2"/>
                    </div>

                    <!-- social_instagram -->
                    <div class="col-span-6 sm:col-span-2">
                        <InputLabel for="social_instagram" :value="__('translate.social_instagram')"/>
                        <TextInput
                            id="social_instagram"
                            v-model="form.social_instagram"
                            type="text"
                            class="mt-1 block w-full"
                        />
                        <small class="text-gray-500">https://example.com</small>
                        <InputError :message="form.errors.social_instagram" class="mt-2"/>
                    </div>

                    <!-- social_linkedin -->
                    <div class="col-span-6 sm:col-span-2">
                        <InputLabel for="social_linkedin" :value="__('translate.social_linkedin')"/>
                        <TextInput
                            id="social_linkedin"
                            v-model="form.social_linkedin"
                            type="text"
                            class="mt-1 block w-full"
                        />
                        <small class="text-gray-500">https://example.com</small>
                        <InputError :message="form.errors.social_linkedin" class="mt-2"/>
                    </div>

                    <!-- social_tiktok -->
                    <div class="col-span-6 sm:col-span-2">
                        <InputLabel for="social_tiktok" :value="__('translate.social_tiktok')"/>
                        <TextInput
                            id="social_tiktok"
                            v-model="form.social_tiktok"
                            type="text"
                            class="mt-1 block w-full"
                        />
                        <small class="text-gray-500">https://example.com</small>
                        <InputError :message="form.errors.social_tiktok" class="mt-2"/>
                    </div>
                </div>

            </div>

            <div class="col-span-6">
                <h3 class="text-lg mb-3 font-bold">{{ __('translate.rest') }}</h3>
                <div class="grid grid-cols-6 gap-6">
                    <!-- count_workers -->
                    <div class="col-span-6 sm:col-span-2">
                        <InputLabel for="count_workers" :value="__('translate.count_workers')"/>
                        <TextInput
                            id="count_workers"
                            v-model="form.count_workers"
                            type="number"
                            class="mt-1 block w-full"
                        />
                        <InputError :message="form.errors.count_workers" class="mt-2"/>
                    </div>

                    <!-- annual_turnover -->
                    <div class="col-span-6 sm:col-span-2">
                        <InputLabel for="annual_turnover" :value="__('translate.annual_turnover')"/>
                        <TextInput
                            id="annual_turnover"
                            v-model="form.annual_turnover"
                            type="text"
                            class="mt-1 block w-full"
                        />
                        <InputError :message="form.errors.annual_turnover" class="mt-2"/>
                    </div>


<!--                    photos-->
                    <div class="col-span-6">
                        <div class="mt-4">
                            <InputLabel for="photo" :value="__('translate.extra_image')" class="mb-1"/>
                            <file-pond
                                name="photo"
                                ref="uploadPhoto"
                                :files="form.photo"
                                :allow-multiple="true"
                                :max-file-size="'4MB'"
                                :max-files="4"
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
                                :labelFileProcessingError="serverMessage.value || __('translate.labelFileProcessingError')"
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
                                                            serverMessage.value = JSON.parse(response).error.photo[0];
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
                                <span class="text-sm text-red-600" v-if="fileKey.startsWith('photos.')">{{ error }}</span>
                            </div>

                        </div>
                    </div>

                    <!--                    photos-->



                    <!-- video -->
                    <div class="col-span-6 sm:col-span-2">
                        <InputLabel for="video" :value="__('translate.video')"/>
                        <input
                            @input="form.video = $event.target.files[0]"
                            id="video"
                            type="file"
                            class="mt-1 block w-full"
                        />
                        <div v-if="form.progress && form.progress.percentage != 100" class="text-sm mt-2">
                        {{__('translate.loadingMovie')}} {{form.progress.percentage}}%
                        <progress v-if="form.progress" :value="form.progress.percentage" max="100" class="mt-2">
                            {{ form.progress.percentage }}%
                        </progress>
                        </div>
                        <InputError :message="form.errors.video" class="mt-2"/>
                    </div>
                </div>
                <div class="my-4">
                    <InputLabel for="extra_description" :value="__('translate.extra_description')"/>
                    <TextareaLimit id="extra_description" v-model="form.extra_description" :limit="2000"/>
                    <InputError :message="form.errors.extra_description" class="mt-2"/>
                </div>
                    <video :key="uploaderVideoKey" v-if="props.user.firm?.video" height="640" controls class="mt-6">
                        <source :src="'/storage/'+props.user.firm?.video" type="video/mp4">
                        <source :src="'/storage/'+props.user.firm?.video" type="video/ogg">
                        <source :src="'/storage/'+props.user.firm?.video" type="video/avi">
                    </video>
            </div>


                </div>
            </div>

            <!-- Actions -->
            <div class="px-6 py-4 bg-gray-50 border-t border-gray-200 flex items-center justify-end gap-3">
                <ActionMessage :on="form.recentlySuccessful" class="text-sm text-green-600">
                    {{ __('translate.Saved') }}
                </ActionMessage>

                <PrimaryButton :disabled="form.processing" class="rounded-xl px-8 shadow-md hover:shadow-lg transition-all" :class="{ 'opacity-25': form.processing }">
                    {{ __('translate.Save') }}
                </PrimaryButton>
            </div>
        </form>
    </div>
</template>
