<script setup>
import { ref } from 'vue';
import { useForm } from '@inertiajs/vue3';
import DangerButton from '@/Components/DangerButton.vue';
import DialogModal from '@/Components/DialogModal.vue';
import InputError from '@/Components/InputError.vue';
import SecondaryButton from '@/Components/SecondaryButton.vue';
import TextInput from '@/Components/TextInput.vue';
import __ from "@/lang.js";

const confirmingUserDeletion = ref(false);
const passwordInput = ref(null);

const form = useForm({
    password: '',
});

const confirmUserDeletion = () => {
    confirmingUserDeletion.value = true;

    setTimeout(() => passwordInput.value.focus(), 250);
};

const deleteUser = () => {
    form.delete(route('current-user.destroy'), {
        preserveScroll: true,
        onSuccess: () => closeModal(),
        onError: () => passwordInput.value.focus(),
        onFinish: () => form.reset(),
    });
};

const closeModal = () => {
    confirmingUserDeletion.value = false;

    form.reset();
};
</script>

<template>
    <div class="bg-white shadow-lg rounded-3xl overflow-hidden my-6 mx-auto text-center">
        <!-- Header -->
        <h3 class="px-6 py-4 text-xl text-center font-semibold text-work-main">
            {{ __('translate.removeAccount') }}
        </h3>

        <!-- Content -->
        <div class="px-6 py-6 space-y-6">
            <div class="max-w-xl mx-auto text-sm text-gray-600">
                {{ __('translate.removeAccountPermanentlyText') }}
            </div>

            <div>
                <DangerButton @click="confirmUserDeletion" class="rounded-xl px-8 shadow-md hover:shadow-lg transition-all">
                    {{ __('translate.delete') }}
                </DangerButton>
            </div>

            <!-- Delete Account Confirmation Modal -->
            <DialogModal :show="confirmingUserDeletion" @close="closeModal">
                <template #title>
                    {{__('translate.delete')}}
                </template>

                <template #content>
                    {{__('translate.deleteAccountConfirm')}}
                    <div class="mt-4">
                        <TextInput
                            ref="passwordInput"
                            v-model="form.password"
                            type="password"
                            class="mt-1 block w-3/4"
                            :placeholder="__('translate.password')"
                            @keyup.enter="deleteUser"
                        />
                        <InputError :message="form.errors.password" class="mt-2" />
                    </div>
                </template>

                <template #footer>
                    <SecondaryButton @click="closeModal" class="rounded-xl px-8 transition-all">
                        {{__('translate.cancel')}}
                    </SecondaryButton>

                    <DangerButton
                        class="ms-3 rounded-xl px-8 shadow-md hover:shadow-lg transition-all"
                        :class="{ 'opacity-25': form.processing }"
                        :disabled="form.processing"
                        @click="deleteUser"
                    >
                        {{__('translate.removeAccount')}}
                    </DangerButton>
                </template>
            </DialogModal>
        </div>
    </div>
</template>
