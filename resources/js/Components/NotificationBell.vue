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
            <button class="relative inline-flex items-center p-2 text-gray-500 rounded-full hover:text-gray-700 focus:outline-none focus:bg-gray-100 transition duration-150 ease-in-out">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M14.857 17.082a23.848 23.848 0 005.454-1.31A8.967 8.967 0 0118 9.75v-.7V9A6 6 0 006 9v.75a8.967 8.967 0 01-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 01-5.714 0m5.714 0a3 3 0 11-5.714 0" />
                </svg>
                <span v-if="hasNotifications" class="absolute top-0 right-0 inline-flex items-center justify-center px-2 py-1 text-xs font-bold leading-none text-red-100 transform translate-x-1/2 -translate-y-1/2 bg-red-600 rounded-full">
                    {{ notificationCount }}
                </span>
            </button>
        </template>

        <template #content>
            <div class="p-3 border-b border-gray-200">
                <div class="text-sm font-medium text-gray-700">{{ __('translate.notifications') }}</div>
                <div v-if="hasNotifications" class="text-xs text-gray-500">{{ __('translate.youHaveNotifications', { count: notificationCount }) }}</div>
                <div v-else class="text-xs text-gray-500">{{ __('translate.noNewNotifications') }}</div>
            </div>

            <div class="p-2">
                <Link :href="route('notifications.index')" class="block w-full px-4 py-2 text-sm leading-5 text-gray-700 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 transition duration-150 ease-in-out">
                    {{ __('translate.viewAllNotifications') }}
                </Link>
                <Link v-if="hasNotifications" :href="route('notifications.markAllAsRead')" method="post" as="button" class="block w-full px-4 py-2 text-sm leading-5 text-gray-700 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 transition duration-150 ease-in-out">
                    {{ __('translate.markAllAsRead') }}
                </Link>
            </div>
        </template>
    </Dropdown>
</template>
