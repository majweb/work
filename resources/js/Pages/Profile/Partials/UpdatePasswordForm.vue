<script setup>
import { ref } from 'vue';
import { useForm } from '@inertiajs/vue3';
import ActionMessage from '@/Components/ActionMessage.vue';
import InputError from '@/Components/InputError.vue';
import InputLabel from '@/Components/InputLabel.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import TextInput from '@/Components/TextInput.vue';
import __ from "@/lang.js";

const passwordInput = ref(null);
const currentPasswordInput = ref(null);

const form = useForm({
    current_password: '',
    password: '',
    password_confirmation: '',
});

const updatePassword = () => {
    form.put(route('user-password.update'), {
        errorBag: 'updatePassword',
        preserveScroll: true,
        onSuccess: () => form.reset(),
        onError: () => {
            if (form.errors.password) {
                form.reset('password', 'password_confirmation');
                passwordInput.value.focus();
            }

            if (form.errors.current_password) {
                form.reset('current_password');
                currentPasswordInput.value.focus();
            }
        },
    });
};
</script>

<template>
    <div class="bg-white shadow-lg rounded-3xl overflow-hidden">
        <!-- Header -->
        <h3 class="px-6 py-4 text-xl text-center font-semibold text-work-main">
            {{ __('translate.UpdatePassword') }}
        </h3>


        <!-- Form -->
        <form @submit.prevent="updatePassword">
            <div class="px-6 py-6 space-y-6">
                <!-- Current Password -->
                <div>
                    <InputLabel for="current_password" :value="__('translate.UpdatePasswordCurrent')" />
                    <TextInput
                        id="current_password"
                        ref="currentPasswordInput"
                        v-model="form.current_password"
                        type="password"
                        autocomplete="current_password"
                        class="mt-1 block w-full"
                    />
                    <InputError :message="form.errors.current_password" class="mt-2" />
                </div>

                <!-- New Password -->
                <div>
                    <InputLabel for="password" :value="__('translate.newPassword')" />
                    <TextInput
                        id="password"
                        ref="passwordInput"
                        v-model="form.password"
                        type="password"
                        autocomplete="password"
                        class="mt-1 block w-full"
                    />
                    <InputError :message="form.errors.password" class="mt-2" />
                </div>

                <!-- Confirm Password -->
                <div>
                    <InputLabel for="password_confirmation" :value="__('translate.passwordconfirm')" />
                    <TextInput
                        id="password_confirmation"
                        v-model="form.password_confirmation"
                        type="password"
                        autocomplete="password_confirmation"
                        class="mt-1 block w-full"
                    />
                    <InputError :message="form.errors.password_confirmation" class="mt-2" />
                </div>
            </div>

            <!-- Actions -->
            <div class="px-6 py-4 bg-gray-50 border-t border-gray-200 flex items-center justify-end gap-3">
                <ActionMessage :on="form.recentlySuccessful" class="text-sm text-green-600">
                    {{ __('translate.Saved') }}
                </ActionMessage>

                <PrimaryButton :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
                    {{ __('translate.Save') }}
                </PrimaryButton>
            </div>
        </form>
    </div>
</template>
