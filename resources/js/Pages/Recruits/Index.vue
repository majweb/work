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

        <div class="py-12 bg-gray-50/50 min-h-screen">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white rounded-[3rem] shadow-xl shadow-blue-900/5 border border-gray-100 p-10 mb-8">
                    <div class="flex items-center justify-between">
                        <div>
                            <h3 class="text-2xl font-black text-[#0A2C5C] uppercase tracking-tight">{{ __('translate.recruits') }}</h3>
                            <p class="text-[10px] font-bold text-gray-400 uppercase tracking-widest mt-1">Zarządzaj zespołem rekruterów w Twojej firmie</p>
                        </div>
                        <Link :href="route('recruits.create')" class="inline-flex items-center px-10 py-4 bg-[#0A2C5C] border border-transparent rounded-2xl font-black text-[10px] text-white uppercase tracking-widest hover:bg-blue-800 transition duration-200 shadow-lg shadow-blue-900/20">
                            {{ __('translate.createRecruit') }}
                        </Link>
                    </div>
                </div>

                <div v-if="props.users.data.length === 0" class="bg-white rounded-[3rem] p-20 text-center shadow-xl shadow-blue-900/5 border border-gray-100">
                    <div class="w-20 h-20 bg-gray-50 rounded-full flex items-center justify-center mx-auto mb-6">
                        <svg class="w-10 h-10 text-gray-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                        </svg>
                    </div>
                    <p class="text-xs font-black text-gray-400 uppercase tracking-widest">{{ __('translate.notFoundRecruit') }}</p>
                </div>

                <div v-else class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
                    <div v-for="user in props.users.data" :key="user.id" class="group bg-white rounded-[2.5rem] p-8 shadow-sm border border-gray-100 flex flex-col items-center text-center transition-all duration-300 hover:shadow-xl hover:shadow-blue-900/5 hover:-translate-y-1">
                        <!-- Awatar -->
                        <div class="relative mb-6">
                            <div class="w-24 h-24 rounded-[2rem] border-4 flex items-center justify-center overflow-hidden bg-gray-50 shadow-sm transition-transform duration-300 group-hover:scale-105" :style="{ borderColor: user.color || '#0A2C5C' }">
                                <img v-if="user.profile_photo_url" :src="user.profile_photo_url" :alt="user.name" class="w-full h-full object-cover">
                                <span v-else class="text-2xl font-black text-[#0A2C5C]">{{ getInitials(user.name) }}</span>
                            </div>
                        </div>

                        <!-- Dane podstawowe -->
                        <h3 class="text-xl font-black text-gray-900 uppercase tracking-tight leading-tight mb-1 truncate w-full px-2">
                            {{ user.name }}
                        </h3>
                        <p class="text-[10px] font-bold text-[#00a0e3] mb-1 truncate w-full px-2 uppercase tracking-widest">
                            {{ user.email }}
                        </p>
                        <p class="text-xs font-bold text-gray-400 mb-1 tracking-widest">
                            {{ user.recruiter_phone || '---' }}
                        </p>
                        <p class="text-[10px] font-black text-gray-300 uppercase tracking-[0.2em] mb-8">
                            ID {{ user.id }}
                        </p>

                        <!-- Statystyki -->
                        <div class="w-full grid grid-cols-1 gap-2 mb-8">
                            <div class="bg-gray-50/50 p-3 rounded-2xl border border-gray-100/50">
                                <p class="text-[10px] font-black text-gray-400 uppercase tracking-widest mb-0.5">{{ __('translate.projects') }}</p>
                                <p class="text-lg font-black text-[#0A2C5C]">{{ user.projects_count }}</p>
                            </div>
                            <div class="bg-gray-50/50 p-3 rounded-2xl border border-gray-100/50">
                                <p class="text-[10px] font-black text-gray-400 uppercase tracking-widest mb-0.5">{{ __('translate.applications') }}</p>
                                <p class="text-lg font-black text-[#0A2C5C]">{{ user.applications_count }}</p>
                            </div>
                            <div class="bg-gray-50/50 p-3 rounded-2xl border border-gray-100/50">
                                <p class="text-[10px] font-black text-gray-400 uppercase tracking-widest mb-0.5">{{ __('translate.quality') }}</p>
                                <p class="text-lg font-black text-[#0A2C5C]">{{ user.quality }}%</p>
                            </div>
                        </div>

                        <!-- Aktywność -->
                        <div class="mb-8">
                            <p class="text-[10px] font-black text-gray-300 uppercase tracking-widest mb-1">
                                {{ __('translate.lastActivity') }}
                            </p>
                            <p class="text-[10px] font-black text-[#00a0e3] uppercase tracking-widest">
                                {{ formatActivity(user.updated_at) }}
                            </p>
                        </div>

                        <!-- Przyciski akcji -->
                        <div class="w-full space-y-2 mt-auto">
                            <Link :href="route('recruits.edit', user)" class="block w-full bg-[#0A2C5C] text-white font-black py-3 rounded-2xl text-[10px] uppercase tracking-widest hover:bg-blue-800 transition shadow-md shadow-blue-900/10">
                                {{ __('translate.edit') }}
                            </Link>
                            <button @click="openModal(user)" class="block w-full bg-red-50 text-red-600 font-black py-3 rounded-2xl text-[10px] uppercase tracking-widest hover:bg-red-100 transition">
                                {{ __('translate.delete') }}
                            </button>
                        </div>
                    </div>
                </div>

                <div class="mt-12 flex justify-center" v-if="users.total > 5">
                    <Pagination :links="users.links" />
                </div>
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
