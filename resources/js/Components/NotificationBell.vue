<script setup>
import { computed } from 'vue';
import { Link, usePage } from '@inertiajs/vue3';
import Dropdown from '@/Components/Dropdown.vue';
import DropdownLink from '@/Components/DropdownLink.vue';

// Pobranie liczby nieprzeczytanych powiadomień bezpośrednio z Inertia props
const notificationCount = computed(() => usePage().props.unreadNotifications || 0);

const hasNotifications = computed(() => notificationCount.value > 0);
</script>

<template>
    <Dropdown align="right" width="80">
        <template #trigger>
            <button class="relative inline-flex items-center p-2.5 text-gray-500 rounded-2xl hover:text-[#0A2C5C] hover:bg-blue-50/50 focus:outline-none focus:bg-blue-50 transition-all duration-200 group">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.8" stroke="currentColor" class="w-6 h-6 group-hover:scale-110 transition-transform">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M14.857 17.082a23.848 23.848 0 005.454-1.31A8.967 8.967 0 0118 9.75v-.7V9A6 6 0 006 9v.75a8.967 8.967 0 01-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 01-5.714 0m5.714 0a3 3 0 11-5.714 0" />
                </svg>
                <span v-if="hasNotifications" class="absolute top-1 right-1 inline-flex items-center justify-center min-w-[18px] h-[18px] px-1 text-[10px] font-black leading-none text-white bg-red-600 rounded-lg shadow-sm border-2 border-white">
                    {{ notificationCount }}
                </span>
            </button>
        </template>

        <template #content>
            <div class="p-5 border-b border-gray-100 bg-gray-50/50">
                <div class="text-xs font-black text-[#0A2C5C] uppercase tracking-widest mb-1">{{ __('translate.notifications') }}</div>
                <div v-if="hasNotifications" class="text-xs font-bold text-gray-500">{{ __('translate.youHaveNotifications', { count: notificationCount }) }}</div>
                <div v-else class="text-xs font-medium text-gray-400">{{ __('translate.noNewNotifications') }}</div>
            </div>

            <div class="p-2 max-h-[400px] overflow-y-auto">
                <div v-if="usePage().props.notifications_mini" class="space-y-1 mb-2">
                    <div v-for="notification in usePage().props.notifications_mini" :key="notification.id"
                         class="p-3 rounded-xl hover:bg-gray-50 transition-colors border border-transparent hover:border-gray-100">
                        <p class="text-xs font-bold text-gray-900 leading-tight">{{ __(notification.data.title || 'translate.newNotification', notification.data) || __('translate.notification') }}</p>
                        <p class="text-[10px] text-gray-500 mt-0.5 line-clamp-2" v-html="__(notification.data.message, { ...notification.data, id: notification.data.aplication || notification.data.id })"></p>
                    </div>
                </div>

                <Link :href="route('notifications.index')" class="block w-full px-4 py-3 text-xs font-black uppercase tracking-widest text-[#0A2C5C] hover:bg-blue-50 rounded-xl transition-colors text-center border border-transparent hover:border-blue-100 mb-1">
                    {{ __('translate.viewAllNotifications') }}
                </Link>
                <Link v-if="hasNotifications" :href="route('notifications.markAllAsRead')" method="post" as="button" class="block w-full px-4 py-3 text-xs font-bold text-red-500 hover:bg-red-50 rounded-xl transition-colors text-center">
                    {{ __('translate.markAllAsRead') }}
                </Link>
            </div>
        </template>
    </Dropdown>
</template>
