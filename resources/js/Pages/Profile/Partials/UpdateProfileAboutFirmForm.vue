<script setup>
import {useForm} from '@inertiajs/vue3';
import ActionMessage from '@/Components/ActionMessage.vue';
import FormSection from '@/Components/FormSection.vue';
import InputError from '@/Components/InputError.vue';
import InputLabel from '@/Components/InputLabel.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import TextInput from '@/Components/TextInput.vue';
import {ref} from "vue";

const props = defineProps({
    user: Object,
});
const uploaderVideoKey = ref(0)

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
    count_workers: props.user.firm?.count_workers,
    annual_turnover: props.user.firm?.annual_turnover,
    video: null,
});

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
    <FormSection @submitted="updateProfileFirm">
        <template #title>
            {{ __('auth.rest') }}
        </template>

        <template #description>
            {{ __('auth.restDescription') }}
        </template>

        <template #form>
            <!-- WWW -->
            <div class="col-span-6 sm:col-span-4">
                <InputLabel for="www" :value="__('auth.www')"/>
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
                <h3 class="text-lg mb-3 font-bold">{{ __('auth.opinions') }}</h3>
                <div class="grid grid-cols-6 gap-6">
                    <!-- opinion_google -->
                    <div class="col-span-6 sm:col-span-2">
                        <InputLabel for="opinion_google" :value="__('auth.opinion_google')"/>
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
                        <InputLabel for="opinion_trust" :value="__('auth.opinion_trust')"/>
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
                        <InputLabel for="opinion_facebook" :value="__('auth.opinion_facebook')"/>
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
                <h3 class="text-lg mb-3 font-bold">{{ __('auth.socials') }}</h3>
                <div class="grid grid-cols-6 gap-6">
                    <!-- social_facebook -->
                    <div class="col-span-6 sm:col-span-2">
                        <InputLabel for="social_facebook" :value="__('auth.social_facebook')"/>
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
                        <InputLabel for="social_google" :value="__('auth.social_google')"/>
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
                        <InputLabel for="social_x" :value="__('auth.social_x')"/>
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
                        <InputLabel for="social_instagram" :value="__('auth.social_instagram')"/>
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
                        <InputLabel for="social_linkedin" :value="__('auth.social_linkedin')"/>
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
                        <InputLabel for="social_tiktok" :value="__('auth.social_tiktok')"/>
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
                <h3 class="text-lg mb-3 font-bold">{{ __('auth.rest') }}</h3>
                <div class="grid grid-cols-6 gap-6">
                    <!-- count_workers -->
                    <div class="col-span-6 sm:col-span-2">
                        <InputLabel for="count_workers" :value="__('auth.count_workers')"/>
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
                        <InputLabel for="annual_turnover" :value="__('auth.annual_turnover')"/>
                        <TextInput
                            id="annual_turnover"
                            v-model="form.annual_turnover"
                            type="text"
                            class="mt-1 block w-full"
                        />
                        <InputError :message="form.errors.annual_turnover" class="mt-2"/>
                    </div>

                    <!-- video -->
                    <div class="col-span-6 sm:col-span-2">
                        <InputLabel for="video" :value="__('auth.video')"/>
                        <input
                            @input="form.video = $event.target.files[0]"
                            id="video"
                            type="file"
                            class="mt-1 block w-full"
                        />
                        <div v-if="form.progress && form.progress.percentage != 100" class="text-sm mt-2">
                        {{__('auth.loadingMovie')}} {{form.progress.percentage}}%
                        <progress v-if="form.progress" :value="form.progress.percentage" max="100" class="mt-2">
                            {{ form.progress.percentage }}%
                        </progress>
                        </div>
                        <InputError :message="form.errors.video" class="mt-2"/>
                    </div>
                </div>
                    <video :key="uploaderVideoKey" v-if="props.user.firm?.video" height="640" controls class="mt-4">
                        <source :src="'/storage/'+props.user.firm?.video" type="video/mp4">
                        <source :src="'/storage/'+props.user.firm?.video" type="video/ogg">
                        <source :src="'/storage/'+props.user.firm?.video" type="video/avi">
                    </video>
            </div>


        </template>

        <template #actions>
            <ActionMessage :on="form.recentlySuccessful" class="me-3">
                {{ __('auth.Saved') }}
            </ActionMessage>

            <PrimaryButton :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
                {{ __('auth.Save') }}
            </PrimaryButton>
        </template>
    </FormSection>
</template>
