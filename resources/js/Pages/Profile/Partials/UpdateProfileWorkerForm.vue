<script setup>
import {useForm} from '@inertiajs/vue3';
import ActionMessage from '@/Components/ActionMessage.vue';
import InputError from '@/Components/InputError.vue';
import InputLabel from '@/Components/InputLabel.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import TextInput from '@/Components/TextInput.vue';
import __ from "@/lang.js";

const props = defineProps({
    user: Object,
});

const form = useForm({
    _method: 'PUT',
    contact_phone: props.user.worker_detail?.contact_phone ?? '',
    surname: props.user.worker_detail?.surname ?? '',
});

const updateProfileWorker = () => {
    form.post(route('worker.update.form'), {
        errorBag: 'updateProfileWorker',
        preserveScroll: true,
    });
};
</script>

<template>
    <div class="bg-white shadow-lg rounded-3xl overflow-hidden">
        <!-- Header -->
        <h3 class="px-6 py-4 text-xl text-center font-semibold text-work-main">
            {{ __('translate.myData') }}
        </h3>

        <!-- Form -->
        <form @submit.prevent="updateProfileWorker">
            <div class="px-6 py-6 space-y-6">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <!-- SURNAME -->
                    <div>
                        <InputLabel for="surname" :value="__('translate.surname')"/>
                        <TextInput
                            id="surname"
                            v-model="form.surname"
                            type="text"
                            class="mt-1 block w-full"
                        />
                        <InputError :message="form.errors.surname" class="mt-2"/>
                    </div>

                    <!-- PHONE -->
                    <div>
                        <InputLabel for="contact_phone" :value="__('translate.phone')"/>
                        <TextInput
                            id="contact_phone"
                            v-model.number="form.contact_phone"
                            type="number"
                            class="mt-1 block w-full"
                        />
                        <InputError :message="form.errors.contact_phone" class="mt-2"/>
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
