<script setup>
import { ref, watch } from 'vue';
import { Link, router } from '@inertiajs/vue3';
import AppLayout from '@/Layouts/AppLayout.vue';
import Pagination from '@/Components/Pagination.vue';
import { pickBy, debounce } from 'lodash';
import DialogModal from "@/Components/DialogModal.vue";
import DangerButton from "@/Components/DangerButton.vue";
import SecondaryButton from "@/Components/SecondaryButton.vue";
import __ from "@/lang.js";
import moment from "moment";

const props = defineProps({
    users: Object,
    filters: Object
});

const selectedUser = ref(null);
const confirmCancelUser = ref(false);

const params = ref({
    field: props.filters.field,
    direction: props.filters.direction,
});

const openModal = (user) => {
    confirmCancelUser.value = true;
    selectedUser.value = user;
}

const DeleteUser = () => {
    if (selectedUser.value) {
        router.delete(route('recruits.destroy', selectedUser.value), {
            onSuccess: () => {
                confirmCancelUser.value = false;
                selectedUser.value = null;
            }
        });
    }
};

watch(params.value, debounce(function (value) {
    let rest = pickBy(params.value);
    router.get(route('recruits.index'), rest, { preserveState: true, replace: true });
}, 300));

const formatActivity = (date) => {
    if (!date) return __('translate.noData');
    const now = moment();
    const activityDate = moment(date);
    const diffDays = now.diff(activityDate, 'days');

    if (diffDays === 0) return __('translate.active');
    if (diffDays === 1) return __('translate.yesterday');
    if (diffDays < 7) return __('translate.daysAgo', { count: diffDays });
    if (diffDays < 14) return __('translate.weekAgo');

    return activityDate.format('DD.MM.YYYY');
};

const getInitials = (name) => {
    return name.split(' ').map(n => n[0]).join('').toUpperCase();
};
</script>

<template>
    <AppLayout :title="__('translate.recruits')">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ __('translate.recruits') }}
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="flex justify-end mb-8">
                    <Link :href="route('recruits.create')" class="inline-flex items-center px-6 py-3 bg-[#00aaff] border border-transparent rounded-xl font-black text-sm text-white uppercase tracking-widest hover:bg-[#0088cc] transition duration-200 shadow-lg">
                        {{ __('translate.createRecruit') }}
                    </Link>
                </div>

                <div v-if="props.users.data.length === 0" class="bg-white dark:bg-gray-800 p-12 text-center rounded-[2rem] shadow-xl">
                    <p class="text-gray-500 dark:text-gray-400 text-lg">{{ __('translate.notFoundRecruit') }}</p>
                </div>

                <div v-else class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
                    <div v-for="user in props.users.data" :key="user.id" class="bg-white dark:bg-gray-800 rounded-[2rem] p-8 shadow-sm border border-slate-100 dark:border-gray-700 flex flex-col items-center text-center transition-all duration-300 hover:shadow-xl hover:scale-[1.02]">
                        <!-- Awatar -->
                        <div class="relative mb-6">
                            <div class="w-24 h-24 rounded-full border-4 flex items-center justify-center overflow-hidden bg-slate-100 dark:bg-gray-700" :style="{ borderColor: user.color || '#00aaff' }">
                                <img v-if="user.profile_photo_url" :src="user.profile_photo_url" :alt="user.name" class="w-full h-full object-cover">
                                <span v-else class="text-2xl font-black text-slate-400">{{ getInitials(user.name) }}</span>
                            </div>
                        </div>

                        <!-- Dane podstawowe -->
                        <h3 class="text-2xl font-black text-[#0b2a55] dark:text-white leading-tight mb-1 truncate w-full px-2">
                            {{ user.name }}
                        </h3>
                        <p class="text-sm font-bold text-[#00aaff] mb-1 truncate w-full px-2">
                            {{ user.email }}
                        </p>
                        <p class="text-sm font-bold text-slate-400 mb-1">
                            {{ user.recruiter_phone || '---' }}
                        </p>
                        <p class="text-xs font-black text-slate-500 uppercase tracking-widest mb-8">
                            ID {{ user.id }}
                        </p>

                        <!-- Statystyki -->
                        <div class="space-y-1 mb-8">
                            <p class="text-lg font-bold text-[#0b2a55] dark:text-gray-300">
                                {{ __('translate.projects') }}: <span class="font-black">{{ user.projects_count }}</span>
                            </p>
                            <p class="text-lg font-bold text-[#0b2a55] dark:text-gray-300">
                                {{ __('translate.applications') }}: <span class="font-black">{{ user.applications_count }}</span>
                            </p>
                            <p class="text-lg font-bold text-[#0b2a55] dark:text-gray-300">
                                {{ __('translate.quality') }}: <span class="font-black">{{ user.quality }}%</span>
                            </p>
                        </div>

                        <!-- Aktywność -->
                        <div class="mb-8">
                            <p class="text-[10px] font-bold text-slate-400 uppercase tracking-widest mb-1">
                                {{ __('translate.lastActivity') }}:
                            </p>
                            <p class="text-sm font-black text-[#00aaff] lowercase">
                                {{ formatActivity(user.updated_at) }}
                            </p>
                        </div>

                        <!-- Przyciski akcji -->
                        <div class="w-full space-y-2 mt-auto">
                            <Link :href="route('recruits.edit', user)" class="block w-full bg-[#0b2a55] text-white font-black py-3 rounded-xl text-sm uppercase tracking-widest hover:bg-[#162a44] transition shadow-md">
                                {{ __('translate.edit') }}
                            </Link>
                            <button @click="openModal(user)" class="block w-full bg-red-600 text-white font-black py-3 rounded-xl text-sm uppercase tracking-widest hover:bg-red-700 transition shadow-md">
                                {{ __('translate.delete') }}
                            </button>
                        </div>
                    </div>
                </div>

                <Pagination v-if="users.total > 5" class="mt-12 text-center mx-auto" :links="users.links" />
            </div>

            <DialogModal :show="confirmCancelUser" @close="confirmCancelUser = false">
                <template #title>
                    {{ __('translate.questionDelete') }} - {{ __('translate.recruit').toLowerCase() }} id. {{ selectedUser && selectedUser.id }}
                </template>

                <template #content>
                    {{ __('translate.questionDeleteConfirm') }} - {{ __('translate.recruit').toLowerCase() }} id. {{ selectedUser && selectedUser.id }}
                </template>

                <template #footer>
                    <SecondaryButton @click.native="confirmCancelUser = false">
                        {{ __('translate.cancel') }}
                    </SecondaryButton>

                    <DangerButton class="ml-2" @click.native="DeleteUser">
                        {{ __('translate.delete') }}
                    </DangerButton>
                </template>
            </DialogModal>
        </div>
    </AppLayout>
</template>
