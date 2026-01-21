<script setup>
import {ref} from 'vue';
import {useForm, usePage} from '@inertiajs/vue3';
import ActionLink from '@/Components/ActionLink.vue';
import ConnectedAccount from '@/Components/ConnectedAccount.vue';
import DangerButton from '@/Components/DangerButton.vue';
import DialogModal from '@/Components/DialogModal.vue';
import InputError from '@/Components/InputError.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import SecondaryButton from '@/Components/SecondaryButton.vue';
import TextInput from '@/Components/TextInput.vue';
import __ from "@/lang.js";

const accountId = ref(null);
const confirmingRemoveAccount = ref(false);
const passwordInput = ref(null);

const page= usePage();

const form = useForm({
    password: '',
});

const getAccountForProvider = (provider) => page.props.socialstream.connectedAccounts
    .filter(account => account.provider === provider.id)
    .shift();


const setProfilePhoto = (id) => {
    form.put(route('user-profile-photo.set', { id }), {
        preserveScroll: true
    });
};

const confirmRemoveAccount = (id) => {
    accountId.value = id;

    confirmingRemoveAccount.value = true;

    setTimeout(() => passwordInput.value.focus(), 250);
};

const removeAccount = () => {
    form.delete(route('connected-accounts.destroy', { id: accountId.value }), {
        preserveScroll: true,
        onSuccess: () => closeModal(),
        onError: () => passwordInput.value.focus(),
        onFinish: () => form.reset(),
    });
};

const closeModal = () => {
    confirmingRemoveAccount.value = false;

    form.reset();
};

</script>

<template>
    <div class="bg-white shadow-lg rounded-3xl overflow-hidden">
        <!-- Header -->
        <h3 class="px-6 py-4 text-xl text-center font-semibold text-work-main">
            {{ __('translate.connectedAccounts') }}
        </h3>

        <!-- Content -->
        <div class="px-6 py-6 space-y-6">
            <div class="p-4 bg-red-500/10 text-red-500 border-l-4 border-red-600 rounded font-medium text-sm">
                {{ __('translate.connectedAccountsTextLong') }}
            </div>

            <div class="space-y-6">
                <div v-for="(provider) in $page.props.socialstream.providers" :key="provider">
                    <ConnectedAccount :provider="provider"
                                      :created-at="getAccountForProvider(provider)?.created_at">
                        <template #action>
                            <template v-if="getAccountForProvider(provider)">
                                <div class="flex items-center space-x-6">
                                    <button
                                        v-if="$page.props.jetstream.managesProfilePhotos && getAccountForProvider(provider).avatar_path"
                                        @click="setProfilePhoto(getAccountForProvider(provider).id)"
                                        class="cursor-pointer ms-6 text-sm text-gray-500 hover:text-gray-700 focus:outline-none">
                                        {{ __('translate.connectedAccountsAvatar') }}
                                    </button>

                                    <DangerButton @click="confirmRemoveAccount(getAccountForProvider(provider).id)"
                                                  v-if="$page.props.socialstream.connectedAccounts.length > 1 || $page.props.socialstream.hasPassword">
                                        {{ __('translate.remove') }}
                                    </DangerButton>
                                </div>
                            </template>

                            <template v-else>
                                <ActionLink :href="route('oauth.redirect', { provider })">
                                    {{ __('translate.connect') }}
                                </ActionLink>
                            </template>
                        </template>
                    </ConnectedAccount>
                </div>
            </div>
        </div>

        <!-- Confirmation Modal -->
        <DialogModal :show="confirmingRemoveAccount" @close="closeModal">
            <template #title>
                {{ __('translate.connectedAccountsRemove') }}
            </template>

            <template #content>
                {{ __('translate.connectedAccountsRemoveConfirm') }}
                <div class="mt-4">
                    <TextInput
                        ref="passwordInput"
                        v-model="form.password"
                        type="password"
                        class="mt-1 block w-3/4"
                        :placeholder="__('translate.password')"
                        autocomplete="current-password"
                        @keyup.enter="removeAccount"
                    />

                    <InputError :message="form.errors.password" class="mt-2" />
                </div>
            </template>

            <template #footer>
                <SecondaryButton @click="closeModal">
                    {{ __('translate.cancel') }}
                </SecondaryButton>

                <PrimaryButton class="ml-2" @click="removeAccount"
                               :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
                    {{ __('translate.removeAccount') }}
                </PrimaryButton>
            </template>
        </DialogModal>
    </div>
</template>
