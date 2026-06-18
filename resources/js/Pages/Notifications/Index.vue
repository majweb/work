<script setup>
import { Link, useForm, usePage } from '@inertiajs/vue3';
import { ref } from 'vue';
import AppLayout from '@/Layouts/AppLayout.vue';
import __ from '@/lang.js';
import moment from "moment";
import DialogModal from '@/Components/DialogModal.vue';
import TextInput from '@/Components/TextInput.vue';
import InputLabel from '@/Components/InputLabel.vue';
import InputError from '@/Components/InputError.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import SecondaryButton from '@/Components/SecondaryButton.vue';

const props = defineProps({
    notifications: Object
});

// Ustawienie locale dla moment.js
moment.locale(usePage().props.language);

const formatDate = (dateString) => {
    const date = new Date(dateString);
    return date.toLocaleString();
};

// Konwertuje obiekt danych powiadomienia na czytelny format
const formatNotification = (notification) => {
    const data = notification.data;
    const page = usePage();
    const roles = page.props.roles || [];

    if (!data) return { title: __('translate.unknownNotification'), message: '' };

    // Jeśli dane zawierają gotowy tytuł (nie klucz tłumaczenia), używamy go bezpośrednio
    if (data.type === 'user_registered' || data.type === 'recruit_created' || data.type === 'missing_position') {
        let title = '';
        let message = '';

        if (data.type === 'user_registered') {
            const roleName = data.role === 'worker' ? 'pracownik' : 'firma';
            title = `Zarejestrowano nowego użytkownika (${roleName}): ${data.user_name}`;
        } else if (data.type === 'recruit_created') {
            title = `Firma ${data.creator_name} dodała rekrutera: ${data.user_name}`;
        } else if (data.type === 'missing_position') {
            title = data.title || 'Zgłoszono brakujące stanowisko';
            message = `${data.content || ''}<br><small class="text-gray-500">Zgłoszone przez: ${data.user_name}</small>`;
            return {
                title: title,
                message: message,
                action: null,
                actionUrl: null,
                type: 'missing_position',
                user_name: data.user_name,
                position_name: data.content,
                email_sent: data.email_sent || false,
                email_sent_at: data.email_sent_at || null,
                email_sent_count: data.email_sent_count || 0
            };
        }

        return {
            title: title,
            message: message,
            action: null,
            actionUrl: data.url || null
        };
    }

    const message = data.message ? __(data.message, { ...data, id: data.aplication || data.id, project_title: data.project_title || '' }) : '';
    let actionUrl = data.actionUrl || null;

    // Obsługa linku dla powiadomienia o nowej aplikacji
    if (data.message === 'translate.applicationNotificationMessage' || data.message === 'translate.applicationCandidateNotificationMessage') {
        const applicationId = data.aplication || data.id;
        if (roles.includes('firm')) {
            actionUrl = `/logged/aplications/${applicationId}`;
        } else if (roles.includes('recruit')) {
            actionUrl = `/logged/project-aplications-recruits/${applicationId}`;
        } else if (roles.includes('worker') || roles.includes('client')) {
            actionUrl = `/logged/worker/aplication/${applicationId}`;
        }
    }

    return {
        title: __(data.title || 'translate.newNotification', data) || __('translate.notification'),
        message: message,
        action: data.action ? __(data.action, data) : null,
        actionUrl: actionUrl
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

const showMailDialog = ref(false);
const selectedNotification = ref(null);

const mailForm = useForm({
    subject: '',
    message: '',
    notification_id: null,
});

const openMailDialog = (notification) => {
    const formatted = formatNotification(notification);
    selectedNotification.value = notification;
    mailForm.notification_id = notification.id;
    mailForm.subject = `Re: ${formatted.title} - ${formatted.position_name}`;
    mailForm.message = '';
    showMailDialog.value = true;
};

const sendEmail = () => {
    mailForm.post(route('notifications.reply-email'), {
        preserveScroll: true,
        onSuccess: () => {
            showMailDialog.value = false;
            mailForm.reset();
        },
    });
};
</script>
<template>
    <AppLayout :title="__('translate.notifications')">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('translate.notifications') }}
            </h2>
        </template>
        <div class="py-12 bg-gray-50/50 min-h-screen px-2 sm:px-0">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-8">
                <!-- HEADER CARD -->
                <section class="bg-white rounded-3xl shadow-sm border border-gray-100 overflow-hidden">
                    <div class="p-8">
                        <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center gap-6 sm:gap-4">
                            <div class="uppercase">
                                <h2 class="text-xl sm:text-2xl font-black text-[#0A2C5C] uppercase tracking-tight">{{ __('translate.notifications') }}</h2>
                                <p class="text-[9px] sm:text-[10px] font-bold text-gray-400 uppercase tracking-widest mt-1">{{ __('translate.stayInformedAboutYourUpdates') }}</p>
                            </div>

                            <button v-if="notifications.data.some(n => !n.read_at)"
                                    @click="markAllAsRead"
                                    class="w-full sm:w-auto inline-flex justify-center items-center px-6 py-2 bg-red-50 text-red-600 text-xs font-bold rounded-xl hover:bg-red-100 transition-all uppercase tracking-widest">
                                {{ __('translate.markAllAsRead') }}
                            </button>
                        </div>
                    </div>
                </section>

                <!-- NOTIFICATIONS LIST CARD -->
                <div class="bg-white rounded-[3rem] shadow-sm border border-gray-100 p-8">
                    <div class="flex items-center gap-4 mb-8">
                        <h3 class="text-xs font-black text-[#0A2C5C] uppercase tracking-[0.2em]">{{ __('translate.yourNotifications') }}</h3>
                        <div class="h-px flex-1 bg-gray-100"></div>
                    </div>

                    <div v-if="notifications.data.length === 0" class="flex flex-col items-center justify-center py-16 text-center">
                        <div class="w-20 h-20 bg-gray-50 rounded-full flex items-center justify-center mb-6">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-gray-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-[#0A2C5C] mb-2 uppercase">{{ __('translate.noNotificationsYet') }}</h3>
                    </div>

                    <div v-else class="space-y-4">
                        <div v-for="notification in notifications.data" :key="notification.id"
                             class="group relative flex items-start gap-4 p-6 rounded-2xl transition-all duration-200 border border-transparent"
                             :class="[!notification.read_at ? 'bg-blue-50/40 border-blue-50/50 hover:bg-blue-50' : 'hover:bg-gray-50 border-gray-50 hover:border-gray-100 shadow-sm']">

                            <div class="mt-1 shrink-0">
                                <div v-if="!notification.read_at" class="w-2.5 h-2.5 bg-blue-500 rounded-full animate-pulse shadow-sm shadow-blue-200"></div>
                                <div v-else class="w-2.5 h-2.5 bg-gray-300 rounded-full opacity-50"></div>
                            </div>

                            <div class="flex-1 min-w-0">
                                <div class="flex flex-col md:flex-row md:items-start justify-between gap-4">
                                    <div class="flex-1 uppercase">
                                        <h4 class="text-lg font-bold leading-snug transition-colors"
                                            :class="[!notification.read_at ? 'text-[#0A2C5C]' : 'text-gray-500']">
                                            {{ formatNotification(notification).title }}
                                        </h4>
                                        <div class="mt-2 text-sm leading-relaxed"
                                           :class="[!notification.read_at ? 'text-gray-700 font-medium' : 'text-gray-400']"
                                           v-if="formatNotification(notification).message"
                                           v-html="formatNotification(notification).message"></div>

                                        <div v-if="formatNotification(notification).actionUrl" class="mt-4">
                                            <Link :href="formatNotification(notification).actionUrl"
                                                  class="inline-flex items-center text-xs font-black uppercase tracking-widest text-[#0A2C5C] hover:underline gap-2 group-hover:gap-3 transition-all">
                                               {{ formatNotification(notification).action || __('translate.viewDetails') }}
                                               <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" /></svg>
                                            </Link>
                                        </div>

                                        <div v-if="formatNotification(notification).type === 'missing_position'" class="mt-4 flex flex-wrap items-center gap-4">
                                            <button @click="openMailDialog(notification)"
                                                    class="inline-flex items-center text-xs font-black uppercase tracking-widest gap-2 transition-all"
                                                    :class="formatNotification(notification).email_sent ? 'text-gray-400 hover:text-gray-600' : 'text-blue-600 hover:text-blue-800'">
                                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                                </svg>
                                                {{ formatNotification(notification).email_sent ? 'Wyślij ponownie' : 'Wyślij email' }}
                                            </button>

                                            <div v-if="formatNotification(notification).email_sent"
                                                 class="flex items-center gap-1.5 px-2 py-1 bg-green-50 text-green-600 rounded-md text-[9px] font-bold uppercase tracking-widest border border-green-100">
                                                <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7" />
                                                </svg>
                                                {{ __('translate.labelFileProcessingComplete') || 'Email wysłany' }}
                                                <span v-if="formatNotification(notification).email_sent_count > 0" class="ml-1 opacity-75">
                                                    ({{ formatNotification(notification).email_sent_count }})
                                                </span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="flex flex-col items-end gap-3 shrink-0">
                                        <span class="text-[10px] font-bold text-gray-400 uppercase tracking-widest bg-gray-100 px-2 py-1 rounded-md">
                                            {{ moment(notification.created_at).format('DD.MM.YYYY HH:mm') }}
                                        </span>

                                        <div v-if="!notification.read_at" class="flex gap-2">
                                            <button @click="markAsRead(notification.id)"
                                                    class="text-[10px] font-black uppercase tracking-widest text-blue-600 hover:text-blue-800 bg-blue-50 px-3 py-1.5 rounded-lg transition-colors shadow-sm">
                                                {{ __('translate.markAsRead') }}
                                            </button>
                                        </div>
                                        <span v-else class="text-[10px] font-bold uppercase tracking-widest text-gray-400 py-1.5 flex items-center gap-1.5">
                                            <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7" /></svg>
                                            {{ __('translate.read') }}
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Paginacja -->
                    <div v-if="notifications.links && notifications.links.length > 3" class="mt-12 pt-8 border-t border-gray-100">
                        <div class="flex justify-center gap-4">
                            <Link v-if="notifications.prev_page_url"
                                  :href="notifications.prev_page_url"
                                  class="inline-flex items-center px-6 py-3 text-xs font-black uppercase tracking-widest text-gray-700 bg-white border border-gray-100 rounded-xl hover:bg-gray-50 shadow-sm transition-all">
                                ← {{ __('translate.previous') }}
                            </Link>
                            <span v-else class="inline-flex items-center px-6 py-3 text-xs font-black uppercase tracking-widest text-gray-300 bg-gray-50 border border-gray-100 rounded-xl cursor-not-allowed">
                                ← {{ __('translate.previous') }}
                            </span>

                            <Link v-if="notifications.next_page_url"
                                  :href="notifications.next_page_url"
                                  class="inline-flex items-center px-6 py-3 text-xs font-black uppercase tracking-widest text-gray-700 bg-white border border-gray-100 rounded-xl hover:bg-gray-50 shadow-sm transition-all">
                                {{ __('translate.next') }} →
                            </Link>
                            <span v-else class="inline-flex items-center px-6 py-3 text-xs font-black uppercase tracking-widest text-gray-300 bg-gray-50 border border-gray-100 rounded-xl cursor-not-allowed">
                                {{ __('translate.next') }} →
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </AppLayout>

    <DialogModal :show="showMailDialog" @close="showMailDialog = false">
        <template #title>
            {{ __('translate.send_message') || 'Odpowiedz na zgłoszenie' }}
        </template>

        <template #content>
            <div class="space-y-4">
                <div>
                    <InputLabel for="subject" :value="__('translate.support_subject') || 'Temat'" />
                    <TextInput id="subject" v-model="mailForm.subject" type="text" class="mt-1 block w-full" />
                    <InputError :message="mailForm.errors.subject" class="mt-2" />
                </div>

                <div>
                    <InputLabel for="message" :value="__('translate.content') || 'Wiadomość'" />
                    <textarea
                        id="message"
                        v-model="mailForm.message"
                        class="mt-1 block w-full border-gray-300 focus:border-[#0A2C5C] focus:ring-[#0A2C5C] rounded-2xl shadow-sm min-h-[150px] p-4 text-gray-700 font-medium"
                    ></textarea>
                    <InputError :message="mailForm.errors.message" class="mt-2" />
                </div>
            </div>
        </template>

        <template #footer>
            <SecondaryButton @click="showMailDialog = false">
                {{ __('translate.cancel') || 'Anuluj' }}
            </SecondaryButton>

            <PrimaryButton class="ml-3" :class="{ 'opacity-25': mailForm.processing }" :disabled="mailForm.processing" @click="sendEmail">
                <svg v-if="mailForm.processing" class="animate-spin -ml-1 mr-2 h-4 w-4 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                    <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                    <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                </svg>
                {{ __('translate.labelButtonProcessItem') || 'Wyślij odpowiedź' }}
            </PrimaryButton>
        </template>
    </DialogModal>
</template>
