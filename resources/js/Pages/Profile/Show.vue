<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import ConnectedAccountsForm from '@/Pages/Profile/Partials/ConnectedAccountsForm.vue';
import DeleteUserForm from '@/Pages/Profile/Partials/DeleteUserForm.vue';
import LogoutOtherBrowserSessionsForm from '@/Pages/Profile/Partials/LogoutOtherBrowserSessionsForm.vue';
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
                {{ __('translate.Profile') }}
            </h2>
        </template>

        <div class="py-10">
            <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
                <!-- Grid 2-kolumnowy -->
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                    <!-- Lewa kolumna -->
                    <div class="space-y-6">
                        <!-- Profile Information -->
                        <div v-if="$page.props.jetstream.canUpdateProfileInformation">
                            <UpdateProfileInformationForm :user="$page.props.auth.user"/>
                        </div>

                        <!-- About Firm -->
                        <div v-if="hasRole('firm')">
                            <UpdateProfileAboutFirmForm :user="$page.props.auth.user"/>
                        </div>

                        <!-- Password Form -->
                        <div v-if="$page.props.jetstream.canUpdatePassword && $page.props.socialstream.hasPassword">
                            <UpdatePasswordForm/>
                        </div>

                        <!-- Set Password -->
                        <div v-else>
                            <SetPasswordForm/>
                        </div>

                        <!-- Two Factor Authentication -->
                        <div v-if="$page.props.jetstream.canManageTwoFactorAuthentication && $page.props.socialstream.hasPassword">
                            <TwoFactorAuthenticationForm :requires-confirmation="confirmsTwoFactorAuthentication"/>
                        </div>
                    </div>
                    <!-- Prawa kolumna -->
                    <div class="space-y-6">
                        <!-- Buy Form -->
                        <div v-if="hasRole('firm')">
                            <UpdateBuyForm :user="$page.props.auth.user"/>
                        </div>

                        <!-- Worker Form -->
                        <div v-if="hasRole('worker')">
                            <UpdateProfileWorkerForm :user="$page.props.auth.user"/>
                        </div>

                        <!-- Firm Form -->
                        <div v-if="hasRole('firm')">
                            <UpdateProfileFirmForm :user="$page.props.auth.user" :countries="$page.props.countries"/>
                        </div>


                        <!-- Connected Accounts -->
                        <div v-if="$page.props.socialstream.show">
                            <ConnectedAccountsForm/>
                        </div>

                        <!-- Browser Sessions -->
                        <div v-if="$page.props.socialstream.hasPassword">
                            <LogoutOtherBrowserSessionsForm :sessions="sessions"/>
                        </div>



                    </div>
                </div>
                <!-- Delete User -->
                <div v-if="$page.props.jetstream.hasAccountDeletionFeatures && $page.props.socialstream.hasPassword">
                    <DeleteUserForm/>
                </div>
            </div>
        </div>
    </AppLayout>
</template>
