<script setup>
import {useForm} from '@inertiajs/vue3';
import ActionMessage from '@/Components/ActionMessage.vue';
import FormSection from '@/Components/FormSection.vue';
import InputError from '@/Components/InputError.vue';
import InputLabel from '@/Components/InputLabel.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import TextInput from '@/Components/TextInput.vue';
import Checkbox from "@/Components/Checkbox.vue";
import DangerButton from "@/Components/DangerButton.vue";
import InputHelper from "@/Components/InputHelper.vue";
import TextareaLimit from "@/Components/TextareaLimit.vue";

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
const removeElement = (index, array) => {
    array.splice(index, 1);
}
</script>

<template>
    <FormSection @submitted="updateProfileWorker">
        <template #title>
            {{ __('translate.Firm') }}
        </template>

        <template #description>
            {{ __('translate.FirmDescription') }}
        </template>

        <template #form>
            <!-- SURNAME -->
            <div class="col-span-6 grid grid-cols-2 gap-2">
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
                <div>
                    <!-- NUMBER -->
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
                    <!-- NUMBER -->
                </div>
            </div>
        </template>

        <template #actions>
            <ActionMessage :on="form.recentlySuccessful" class="me-3">
                {{ __('translate.Saved') }}
            </ActionMessage>

            <PrimaryButton :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
                {{ __('translate.Save') }}
            </PrimaryButton>
        </template>
    </FormSection>
</template>
