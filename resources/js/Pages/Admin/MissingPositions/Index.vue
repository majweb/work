<script setup>
import { Link, useForm, usePage, Head } from '@inertiajs/vue3';
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
import Pagination from "@/Components/Pagination.vue";

const props = defineProps({
    notifications: Object
});

moment.locale(usePage().props.language);

const formatDate = (dateString) => {
    return moment(dateString).format('YYYY-MM-DD HH:mm');
};

const showReplyModal = ref(false);
const currentNotification = ref(null);

const replyForm = useForm({
    subject: 'Odpowiedź na zgłoszenie brakującego stanowiska',
    message: '',
    notification_id: null
});

const openReplyModal = (notification) => {
    currentNotification.value = notification;
    replyForm.notification_id = notification.id;
    replyForm.message = `Dzień dobry,\n\nOtrzymaliśmy zgłoszenie dotyczące braku stanowiska: "${notification.data.content}".\n\n[Twoja wiadomość]`;
    showReplyModal.value = true;
};

const sendReply = () => {
    replyForm.post(route('admin.missing-positions.reply-email'), {
        preserveScroll: true,
        onSuccess: () => {
            showReplyModal.value = false;
            replyForm.reset();
        }
    });
};
</script>

<template>
    <Head title="Zgłoszenia brakujących stanowisk" />

    <AppLayout title="Zgłoszenia brakujących stanowisk">
        <div class="py-12 bg-gray-50/50 min-h-screen px-2 sm:px-0">
            <div class="max-w-[1600px] mx-auto sm:px-6 lg:px-8">
                <!-- Header Section -->
                <div class="bg-white rounded-[3rem] shadow-xl shadow-blue-900/5 border border-gray-100 p-10 mb-8">
                    <div class="flex flex-col md:flex-row md:items-center justify-between gap-8">
                        <div>
                            <h3 class="text-2xl font-black text-[#0A2C5C] uppercase tracking-tight">
                                Zgłoszenia brakujących stanowisk
                            </h3>
                            <p class="text-[10px] font-bold text-gray-400 uppercase tracking-widest mt-1">
                                Lista zgłoszeń dotyczących brakujących stanowisk w systemie
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Table Section -->
                <div class="bg-white rounded-[3rem] shadow-xl shadow-blue-900/5 border border-gray-100 overflow-hidden">
                    <div class="overflow-x-auto p-10">
                        <table class="w-full text-sm text-left text-gray-500">
                            <thead class="text-[10px] font-black text-gray-400 uppercase tracking-widest bg-gray-50/50 rounded-2xl">
                                <tr>
                                    <th scope="col" class="px-6 py-4">Data</th>
                                    <th scope="col" class="px-6 py-4">Stanowisko</th>
                                    <th scope="col" class="px-6 py-4">Firma / Użytkownik</th>
                                    <th scope="col" class="px-6 py-4 text-center">E-mail</th>
                                    <th scope="col" class="px-6 py-4 text-right">Akcje</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-50">
                                <tr v-for="notification in notifications.data" :key="notification.id" class="hover:bg-gray-50/50 transition-colors">
                                    <td class="px-6 py-8 whitespace-nowrap font-bold text-[#0A2C5C]">
                                        {{ formatDate(notification.created_at) }}
                                    </td>
                                    <td class="px-6 py-8">
                                        <div class="font-black text-[#0A2C5C] text-base">{{ notification.data.content }}</div>
                                    </td>
                                    <td class="px-6 py-8">
                                        <div v-if="notification.data.firm_name">
                                            <Link :href="route('admin.firms.show', notification.data.firm_id)" class="text-[#00AEEF] hover:underline font-bold">
                                                {{ notification.data.firm_name }}
                                            </Link>
                                        </div>
                                        <div v-else-if="notification.data.user_name" class="font-bold text-[#0A2C5C]">
                                            {{ notification.data.user_name }}
                                        </div>
                                        <div class="text-[10px] font-bold text-gray-400 uppercase mt-1">{{ notification.data.user_email }}</div>
                                    </td>
                                    <td class="px-6 py-8 text-center">
                                        <div v-if="notification.data.email_sent" class="flex flex-col items-center gap-1">
                                            <span class="px-4 py-1.5 text-[9px] font-black uppercase tracking-widest text-green-600 bg-green-50 rounded-full border border-green-100">
                                                Wysłano ({{ notification.data.email_sent_count }})
                                            </span>
                                            <span class="text-[9px] font-bold text-gray-400" v-if="notification.data.email_sent_at">
                                                {{ formatDate(notification.data.email_sent_at) }}
                                            </span>
                                        </div>
                                        <span v-else class="px-4 py-1.5 text-[9px] font-black uppercase tracking-widest text-gray-400 bg-gray-50 rounded-full border border-gray-100">
                                            Nie wysłano
                                        </span>
                                    </td>
                                    <td class="px-6 py-8 text-right">
                                        <button
                                            @click="openReplyModal(notification)"
                                            class="px-6 py-3 bg-[#0A2C5C] hover:bg-[#082247] text-white rounded-xl font-black text-[10px] uppercase tracking-widest transition-all active:scale-95 shadow-lg shadow-blue-900/10"
                                        >
                                            Odpowiedz
                                        </button>
                                    </td>
                                </tr>
                                <tr v-if="notifications.data.length === 0">
                                    <td colspan="5" class="px-6 py-20 text-center">
                                        <div class="flex flex-col items-center gap-4">
                                            <div class="w-16 h-16 bg-gray-50 rounded-full flex items-center justify-center text-gray-300">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-8 h-8">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 0 1-2.25 2.25h-15a2.25 2.25 0 0 1-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25m19.5 0v.243a2.25 2.25 0 0 1-1.07 1.916l-7.5 4.615a2.25 2.25 0 0 1-2.36 0L3.32 8.91a2.25 2.25 0 0 1-1.07-1.916V6.75" />
                                                </svg>
                                            </div>
                                            <p class="text-sm font-bold text-gray-400 uppercase tracking-widest">Brak zgłoszeń do wyświetlenia</p>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="px-10 pb-10">
                        <Pagination :links="notifications.links" />
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal Odpowiedzi -->
        <DialogModal :show="showReplyModal" @close="showReplyModal = false">
            <template #title>
                <div class="text-xl font-black text-[#0A2C5C] uppercase tracking-tight">
                    Wyślij odpowiedź do użytkownika
                </div>
            </template>

            <template #content>
                <div class="grid grid-cols-1 gap-6 pt-4">
                    <div>
                        <InputLabel for="subject" value="Temat" class="text-[10px] font-black uppercase tracking-widest text-gray-400 mb-2" />
                        <TextInput
                            id="subject"
                            v-model="replyForm.subject"
                            type="text"
                            class="mt-1 block w-full rounded-2xl border-gray-100 shadow-none focus:ring-[#00AEEF] focus:border-[#00AEEF]"
                            required
                        />
                        <InputError :message="replyForm.errors.subject" class="mt-2" />
                    </div>

                    <div>
                        <InputLabel for="message" value="Wiadomość" class="text-[10px] font-black uppercase tracking-widest text-gray-400 mb-2" />
                        <textarea
                            id="message"
                            v-model="replyForm.message"
                            class="mt-1 block w-full border-gray-100 focus:ring-[#00AEEF] focus:border-[#00AEEF] rounded-2xl shadow-none p-4"
                            rows="8"
                            required
                        ></textarea>
                        <InputError :message="replyForm.errors.message" class="mt-2" />
                    </div>
                </div>
            </template>

            <template #footer>
                <div class="flex items-center gap-4">
                    <SecondaryButton @click="showReplyModal = false" class="px-8 py-4 rounded-2xl font-black text-xs uppercase tracking-widest">
                        Anuluj
                    </SecondaryButton>

                    <PrimaryButton
                        class="px-8 py-4 bg-[#00AEEF] hover:bg-[#0096ce] text-white rounded-2xl font-black text-xs uppercase tracking-widest shadow-lg shadow-blue-200"
                        :class="{ 'opacity-25': replyForm.processing }"
                        :disabled="replyForm.processing"
                        @click="sendReply"
                    >
                        Wyślij e-mail
                    </PrimaryButton>
                </div>
            </template>
        </DialogModal>
    </AppLayout>
</template>
