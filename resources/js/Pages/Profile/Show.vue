<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import ConnectedAccountsForm from '@/Pages/Profile/Partials/ConnectedAccountsForm.vue';
import DeleteUserForm from '@/Pages/Profile/Partials/DeleteUserForm.vue';
import LogoutOtherBrowserSessionsForm from '@/Pages/Profile/Partials/LogoutOtherBrowserSessionsForm.vue';
import SectionBorder from '@/Components/SectionBorder.vue';
import SetPasswordForm from '@/Pages/Profile/Partials/SetPasswordForm.vue';
import TwoFactorAuthenticationForm from '@/Pages/Profile/Partials/TwoFactorAuthenticationForm.vue';
import UpdatePasswordForm from '@/Pages/Profile/Partials/UpdatePasswordForm.vue';
import UpdateProfileInformationForm from '@/Pages/Profile/Partials/UpdateProfileInformationForm.vue';
import UpdateProfileFirmForm from "@/Pages/Profile/Partials/UpdateProfileFirmForm.vue";
import {usePermission} from "@/Composables/usePermission.js";
import UpdateProfileAboutFirmForm from "@/Pages/Profile/Partials/UpdateProfileAboutFirmForm.vue";
import UpdateBuyForm from "@/Pages/Profile/Partials/UpdateBuyForm.vue";
import UpdateProfileWorkerForm from "@/Pages/Profile/Partials/UpdateProfileWorkerForm.vue";

defineProps({
    confirmsTwoFactorAuthentication: Boolean,
    sessions: Array,
});

const {hasRole} = usePermission();


</script>

<template>
    <AppLayout title="Profile">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Profile
            </h2>
        </template>

        <div>
            <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
                <div v-if="$page.props.jetstream.canUpdateProfileInformation">
                    <UpdateProfileInformationForm :user="$page.props.auth.user"/>
                </div>
                <div v-if="hasRole('worker')">
                    <SectionBorder/>
                    <UpdateProfileWorkerForm :user="$page.props.auth.user" class="mt-10 sm:mt-0"/>
                </div>
                <div v-if="hasRole('firm')">
                    <SectionBorder/>
                    <UpdateProfileFirmForm :user="$page.props.auth.user" class="mt-10 sm:mt-0"/>
                </div>

                <div v-if="hasRole('firm')">
                    <SectionBorder/>
                    <UpdateProfileAboutFirmForm :user="$page.props.auth.user" class="mt-10 sm:mt-0"/>
                </div>

                <div v-if="hasRole('firm')">
                    <SectionBorder/>
                    <UpdateBuyForm :user="$page.props.auth.user" class="mt-10 sm:mt-0"/>
                </div>

                <div v-if="$page.props.jetstream.canUpdatePassword && $page.props.socialstream.hasPassword">
                    <SectionBorder/>

                    <UpdatePasswordForm class="mt-10 sm:mt-0"/>

                    <SectionBorder/>
                </div>

                <div v-else>
                    <SetPasswordForm class="mt-10 sm:mt-0"/>

                    <SectionBorder/>
                </div>

                <div
                    v-if="$page.props.jetstream.canManageTwoFactorAuthentication && $page.props.socialstream.hasPassword">
                    <TwoFactorAuthenticationForm :requires-confirmation="confirmsTwoFactorAuthentication"
                                                 class="mt-10 sm:mt-0"/>

                    <SectionBorder/>
                </div>

                <div v-if="$page.props.socialstream.show">
                    <ConnectedAccountsForm class="mt-10 sm:mt-0"/>
                </div>

                <div v-if="$page.props.socialstream.hasPassword">
                    <SectionBorder/>

                    <LogoutOtherBrowserSessionsForm :sessions="sessions" class="mt-10 sm:mt-0"/>
                </div>

                <template
                    v-if="$page.props.jetstream.hasAccountDeletionFeatures && $page.props.socialstream.hasPassword">
                    <SectionBorder/>

                    <DeleteUserForm class="mt-10 sm:mt-0"/>
                </template>
            </div>
        </div>
    </AppLayout>
</template>
