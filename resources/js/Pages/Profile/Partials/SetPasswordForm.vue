<script setup>
import {ref} from 'vue';
import {useForm} from '@inertiajs/vue3';
import ActionMessage from '@/Components/ActionMessage.vue';
import Button from '@/Components/PrimaryButton.vue';
import InputError from '@/Components/InputError.vue';
import InputLabel from '@/Components/InputLabel.vue';
import TextInput from '@/Components/TextInput.vue';
import __ from "@/lang.js";

const passwordInput = ref(null);

const form = useForm({
    current_password: '',
    password: '',
    password_confirmation: '',
});

const setPassword = () => {
    form.post(route('user-password.set'), {
        errorBag: 'setPassword',
        preserveScroll: true,
        onSuccess: () => form.reset(),
        onError: () => {
            if (form.errors.password) {
                form.reset('password', 'password_confirmation');
                passwordInput.value.focus();
            }
        },
    });
};
</script>

<template>
    <div class="bg-white shadow-lg rounded-3xl overflow-hidden">
        <!-- Header -->
        <div class="bg-work-main px-6 py-4">
            <h3 class="text-lg font-semibold text-white">
                {{ __('translate.setPassword') }}
            </h3>
        </div>

        <!-- Form -->
        <form @submit.prevent="setPassword">
            <div class="px-6 py-6 space-y-6">
                <!-- New Password -->
                <div>
                    <InputLabel for="password" :value="__('translate.newPassword')"/>
                    <TextInput
                        id="password"
                        ref="passwordInput"
                        v-model="form.password"
                        autocomplete="new-password"
                        class="mt-1 block w-full"
                        type="password"
                    />
                    <InputError :message="form.errors.password" class="mt-2"/>
                </div>

                <!-- Confirm Password -->
                <div>
                    <InputLabel for="password_confirmation" :value="__('translate.passwordconfirm')"/>
                    <TextInput
                        id="password_confirmation"
                        v-model="form.password_confirmation"
                        autocomplete="new-password"
                        class="mt-1 block w-full"
                        type="password"
                    />
                    <InputError :message="form.errors.password_confirmation" class="mt-2"/>
                </div>
            </div>

            <!-- Actions -->
            <div class="px-6 py-4 bg-gray-50 border-t border-gray-200 flex items-center justify-end gap-3">
                <ActionMessage :on="form.recentlySuccessful" class="text-sm text-green-600">
                    {{ __('translate.Saved') }}
                </ActionMessage>

                <Button :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
                    {{ __('translate.Save') }}
                </Button>
            </div>
        </form>
    </div>
</template>
