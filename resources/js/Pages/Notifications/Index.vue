<script setup>
import { ref, computed } from 'vue';
import { Link, useForm, usePage } from '@inertiajs/vue3';
import AppLayout from '@/Layouts/AppLayout.vue';
import __ from '@/lang.js';

const props = defineProps({
    notifications: Object
});

const formatDate = (dateString) => {
    const date = new Date(dateString);
    return date.toLocaleString();
};

// Funkcja formatująca typy notyfikacji
const formatNotificationType = (type) => {
    if (!type) return __('translate.notification');

    // Wyciągnięcie nazwy klasy z pełnej ścieżki
    const className = type.split('\\').pop();

    // Mapowanie typów notyfikacji na przyjazne dla użytkownika komunikaty
    const typeMap = {
        'ApplicationMadeNotification': __('translate.applicationSubmitted'),
        'ProjectCreatedNotification': __('translate.projectCreated'),
        'ApplicationStatusChangedNotification': __('translate.applicationStatusChanged'),
        'NewRecruitAssignedNotification': __('translate.newRecruitAssigned'),
        'OrderCompletedNotification': __('translate.orderCompleted'),
        'InvoiceGeneratedNotification': __('translate.invoiceGenerated'),
        'PaymentReceivedNotification': __('translate.paymentReceived'),
        'QuestionApprovedNotification': __('translate.questionApproved'),
        // Dodaj więcej typów powiadomień według potrzeb
    };

    return typeMap[className] || className.replace('Notification', '');
};

// Konwertuje obiekt danych powiadomienia na czytelny format
const formatNotification = (notification) => {
    const data = notification.data;

    if (!data) return { title: __('translate.unknownNotification'), message: '' };

    return {
        title: data.title || __('translate.notification'),
        message: data.message || '',
        action: data.action || null,
        actionUrl: data.actionUrl || null
    };
};

const markAsRead = (id) => {
    const form = useForm({});
    form.post(route('notifications.markAsRead', id), {
        preserveScroll: true,
        onSuccess: (response) => {
            // Aktualizacja liczby nieprzeczytanych powiadomień w UI
            usePage().props.unreadNotifications = response.unreadCount;
            // Aktualizacja powiadomień na liście
            const notificationIndex = props.notifications.data.findIndex(n => n.id === id);
            if (notificationIndex !== -1) {
                props.notifications.data[notificationIndex].read_at = new Date().toISOString();
            }
        }
    });
};

const markAllAsRead = () => {
    const form = useForm({});
    form.post(route('notifications.markAllAsRead'), {
        preserveScroll: true,
        onSuccess: (response) => {
            // Aktualizacja liczby nieprzeczytanych powiadomień w UI
            usePage().props.unreadNotifications = response.unreadCount;
            // Oznaczenie wszystkich powiadomień jako przeczytanych w UI
            if (props.notifications && props.notifications.data) {
                props.notifications.data.forEach(notification => {
                    if (!notification.read_at) {
                        notification.read_at = new Date().toISOString();
                    }
                });
            }
        }
    });
};
</script>
<!--<template>-->
<!--    <AppLayout :title="__('translate.notifications')">-->
<!--        <template #header>-->
<!--            <h2 class="font-semibold text-xl text-gray-800 leading-tight">-->
<!--                {{ __('translate.notifications') }}-->
<!--            </h2>-->
<!--        </template>-->

<!--        <div class="py-12">-->
<!--            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">-->
<!--                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6">-->
<!--                    <div class="flex justify-between items-center mb-6">-->
<!--                        <h3 class="text-lg font-medium text-gray-900">{{ __('translate.notificationsList') }}</h3>-->
<!--                        <Link :href="route('notifications.markAllAsRead')" method="post" as="button" class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150">-->
<!--                            {{ __('translate.markAllAsRead') }}-->
<!--                        </Link>-->
<!--                    </div>-->

<!--                    <div v-if="notifications.data.length === 0" class="text-center py-8 text-gray-500">-->
<!--                        {{ __('translate.noNotificationsAvailable') }}-->
<!--                    </div>-->
<!--                    <div v-else class="space-y-4">-->
<!--                        <div v-for="notification in notifications.data" :key="notification.id" class="border-l-4 p-4 mb-4" :class="{'border-blue-500 bg-blue-50': !notification.read_at, 'border-gray-200 bg-gray-50': notification.read_at}">-->
<!--                            <div class="flex justify-between">-->
<!--                                <div class="font-medium" v-text="notification.data.title || __('translate.notification')"></div>-->
<!--                                <div class="text-sm text-gray-600">{{ formatDate(notification.created_at) }}</div>-->
<!--                            </div>-->
<!--                            <div class="mt-2" v-text="notification.data.message || notification.data.body || ''"></div>-->
<!--                            <div class="mt-3 flex justify-between items-center">-->
<!--                                <div>-->
<!--                                    <span v-if="!notification.read_at" class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-blue-100 text-blue-800">-->
<!--                                        {{ __('translate.unread') }}-->
<!--                                    </span>-->
<!--                                    <span v-else class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-gray-100 text-gray-800">-->
<!--                                        {{ __('translate.read') }}-->
<!--                                    </span>-->
<!--                                </div>-->
<!--                                <div class="flex space-x-2">-->
<!--                                    <Link v-if="!notification.read_at" :href="route('notifications.markAsRead', notification.id)" method="post" as="button" class="text-xs text-blue-600 hover:text-blue-800">-->
<!--                                        {{ __('translate.markAsRead') }}-->
<!--                                    </Link>-->
<!--                                    <Link v-if="notification.data.action_url" :href="notification.data.action_url" class="text-xs text-indigo-600 hover:text-indigo-800">-->
<!--                                        {{ notification.data.action_text || __('translate.viewDetails') }}-->
<!--                                    </Link>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->

<!--                        &lt;!&ndash; Paginacja &ndash;&gt;-->
<!--                        <div class="mt-6" v-if="notifications.links && notifications.links.length > 3">-->
<!--                            <div class="flex justify-between items-center">-->
<!--                                <Link v-if="notifications.prev_page_url" :href="notifications.prev_page_url" class="px-4 py-2 border border-gray-300 rounded-md text-sm font-medium text-gray-700 bg-white hover:bg-gray-50">-->
<!--                                    {{ __('translate.previous') }}-->
<!--                                </Link>-->
<!--                                <div class="text-sm text-gray-700">-->
<!--                                    {{ __('translate.page') }} {{ notifications.current_page }} {{ __('translate.of') }} {{ notifications.last_page }}-->
<!--                                </div>-->
<!--                                <Link v-if="notifications.next_page_url" :href="notifications.next_page_url" class="px-4 py-2 border border-gray-300 rounded-md text-sm font-medium text-gray-700 bg-white hover:bg-gray-50">-->
<!--                                    {{ __('translate.next') }}-->
<!--                                </Link>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </AppLayout>-->
<!--</template>-->

<template>
    <AppLayout :title="__('translate.notifications')">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('translate.notifications') }}
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6">
                    <div class="flex justify-between items-center mb-6">
                        <h3 class="text-lg font-medium text-gray-900">{{ __('translate.yourNotifications') }}</h3>

                        <button v-if="notifications.data.some(n => !n.read_at)"
                                @click="markAllAsRead"
                                class="inline-flex items-center px-4 py-2 bg-indigo-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-indigo-700 focus:bg-indigo-700 active:bg-indigo-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150">
                            {{ __('translate.markAllAsRead') }}
                        </button>
                    </div>

                    <div v-if="notifications.data.length === 0" class="text-center py-8 text-gray-500">
                        {{ __('translate.noNotificationsYet') }}
                    </div>

                    <div v-else class="space-y-4">
                        <div v-for="notification in notifications.data" :key="notification.id"
                             :class="{'bg-gray-50': !notification.read_at}"
                             class="p-4 border rounded-lg transition-colors">
                            <div class="flex justify-between items-start">
                                <div>
                                    <h4 class="font-medium text-gray-900">{{ formatNotification(notification).title }}</h4>
                                    <p class="mt-1 text-gray-600" v-html="formatNotification(notification).message"></p>

                                    <Link v-if="formatNotification(notification).actionUrl"
                                          :href="formatNotification(notification).actionUrl"
                                          class="mt-2 inline-flex text-sm text-indigo-600 hover:text-indigo-800">
                                        {{ formatNotification(notification).action || __('translate.viewDetails') }}
                                    </Link>
                                </div>

                                <div class="flex flex-col items-end">
                                    <span class="text-xs text-gray-500">{{ formatDate(notification.created_at) }}</span>

                                    <Link v-if="!notification.read_at" :href="route('notifications.markAsRead', notification.id)" method="post" as="button" class="text-xs text-blue-600 hover:text-blue-800">
                                        {{ __('translate.markAsRead') }}
                                    </Link>
                                    <Link v-else-if="notification.data.action_url" :href="notification.data.action_url" class="text-xs text-indigo-600 hover:text-indigo-800">
                                        {{ notification.data.action_text || __('translate.viewDetails') }}
                                    </Link>
                                    <span v-else class="mt-2 text-xs text-green-600">
                                        {{ __('translate.read') }} {{ notification.read_at ? `(${formatDate(notification.read_at)})` : '' }}
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Paginacja -->
                    <div v-if="notifications.links && notifications.links.length > 3" class="mt-6">
                        <div class="flex justify-between">
                            <Link v-if="notifications.prev_page_url"
                                  :href="notifications.prev_page_url"
                                  class="px-4 py-2 text-sm text-gray-700 bg-white border border-gray-300 rounded-md hover:bg-gray-50">
                                {{ __('translate.previous') }}
                            </Link>
                            <span v-else class="px-4 py-2 text-sm text-gray-400 bg-gray-100 border border-gray-300 rounded-md cursor-not-allowed">
                                {{ __('translate.previous') }}
                            </span>

                            <Link v-if="notifications.next_page_url"
                                  :href="notifications.next_page_url"
                                  class="px-4 py-2 text-sm text-gray-700 bg-white border border-gray-300 rounded-md hover:bg-gray-50">
                                {{ __('translate.next') }}
                            </Link>
                            <span v-else class="px-4 py-2 text-sm text-gray-400 bg-gray-100 border border-gray-300 rounded-md cursor-not-allowed">
                                {{ __('translate.next') }}
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </AppLayout>
</template>
<style>
a{
    text-decoration: underline;
}
</style>
