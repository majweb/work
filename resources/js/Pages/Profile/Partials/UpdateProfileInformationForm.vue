<script setup>
import { ref } from 'vue';
import { Link, router, useForm } from '@inertiajs/vue3';
import ActionMessage from '@/Components/ActionMessage.vue';
import InputError from '@/Components/InputError.vue';
import InputLabel from '@/Components/InputLabel.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import SecondaryButton from '@/Components/SecondaryButton.vue';
import TextInput from '@/Components/TextInput.vue';
import __ from "@/lang.js";

const props = defineProps({
    user: Object,
});

const form = useForm({
    _method: 'PUT',
    name: props.user.name,
    email: props.user.email,
    photo: null,
});

const verificationLinkSent = ref(null);
const photoPreview = ref(null);
const photoInput = ref(null);

const updateProfileInformation = () => {
    if (photoInput.value) {
        form.photo = photoInput.value.files[0];
    }

    form.post(route('user-profile-information.update'), {
        errorBag: 'updateProfileInformation',
        preserveScroll: true,
        onSuccess: () => clearPhotoFileInput(),
    });
};

const sendEmailVerification = () => {
    verificationLinkSent.value = true;
};

const selectNewPhoto = () => {
    photoInput.value.click();
};

const updatePhotoPreview = () => {
    const photo = photoInput.value.files[0];

    if (! photo) return;

    const reader = new FileReader();

    reader.onload = (e) => {
        photoPreview.value = e.target.result;
    };

    reader.readAsDataURL(photo);
};

const deletePhoto = () => {
    router.delete(route('current-user-photo.destroy'), {
        preserveScroll: true,
        onSuccess: () => {
            photoPreview.value = null;
            clearPhotoFileInput();
        },
    });
};

const clearPhotoFileInput = () => {
    if (photoInput.value?.value) {
        photoInput.value.value = null;
    }
};
</script>

<template>
    <div class="bg-white shadow-lg rounded-3xl overflow-hidden">
        <!-- Header -->
        <h3 class="px-6 py-4 text-xl text-center font-semibold text-work-main">
            {{ __('translate.ProfileInformation') }}
        </h3>
        <!-- Form -->
        <form @submit.prevent="updateProfileInformation">
            <div class="px-6 py-6 space-y-6">
                <!-- Profile Photo -->
                <div v-if="$page.props.jetstream.managesProfilePhotos" class="flex flex-col items-center">
                    <!-- Profile Photo File Input -->
                    <input
                        id="photo"
                        ref="photoInput"
                        type="file"
                        class="hidden"
                        @change="updatePhotoPreview"
                    >

                    <div class="relative w-32 h-32">
                        <!-- Current Profile Photo -->
                        <div v-show="! photoPreview" class="w-full h-full rounded-full border-4 border-work-main overflow-hidden">
                            <img :src="user.profile_photo_url" :alt="user.name" class="w-full h-full object-cover">
                        </div>

                        <!-- New Profile Photo Preview -->
                        <div v-show="photoPreview" class="w-full h-full rounded-full border-4 border-work-main overflow-hidden">
                            <span
                                class="block rounded-full w-full h-full bg-cover bg-no-repeat bg-center"
                                :style="'background-image: url(\'' + photoPreview + '\');'"
                            />
                        </div>

                        <button
                            type="button"
                            class="absolute -bottom-2 left-1/2 -translate-x-1/2 bg-work-main text-white text-[10px] font-bold px-3 py-1 rounded-md hover:bg-work-main-dark transition whitespace-nowrap z-10 shadow-md"
                            @click.prevent="selectNewPhoto"
                        >
                            {{ __('translate.ProfileInformationPhoto') }}
                        </button>
                    </div>

                    <div class="flex gap-2 mt-4">
                        <SecondaryButton
                            v-if="user.profile_photo_path"
                            type="button"
                            @click.prevent="deletePhoto"
                        >
                            {{ __('translate.ProfileInformationPhotoRemove') }}
                        </SecondaryButton>
                    </div>

                    <InputError :message="form.errors.photo" class="mt-2" />
                </div>

                <!-- Name -->
                <div>
                <InputLabel for="name" :value="__('translate.name')" />
                <TextInput
                    id="name"
                    v-model="form.name"
                    type="text"
                    class="mt-1 block w-full"
                />
                <InputError :message="form.errors.name" class="mt-2" />
            </div>

                <!-- Email -->
                <div>
                    <InputLabel for="email" :value="__('translate.email')" />
                    <TextInput
                        id="email"
                        v-model="form.email"
                        type="email"
                        class="mt-1 block w-full"
                    />
                    <InputError :message="form.errors.email" class="mt-2" />

                    <div v-if="$page.props.jetstream.hasEmailVerification && user.email_verified_at === null">
                        <p class="text-sm mt-2 text-gray-600">
                            {{ __('translate.ProfileInformationUnverified') }}
                            <Link
                                :href="route('verification.send')"
                                method="post"
                                as="button"
                                class="underline text-sm text-work-main hover:text-work-main-light rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-work-main"
                                @click.prevent="sendEmailVerification"
                            >
                                {{ __('translate.ProfileInformationVerification') }}
                            </Link>
                        </p>

                        <div v-show="verificationLinkSent" class="mt-2 font-medium text-sm text-green-600">
                            {{ __('translate.ProfileInformationVerificationNew') }}
                        </div>
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
