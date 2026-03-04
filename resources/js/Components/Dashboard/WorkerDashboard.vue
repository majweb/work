
<script setup>
import {computed} from "vue";
import CircularProgress from "@/Components/CircularProgress.vue";
import {Link, router, usePage} from "@inertiajs/vue3";
import moment from "moment"
import __ from "@/lang.js";
const props = defineProps({
    lastAplications: {
        type: Object,
        required: true,
    },
    otherAplications:{
        type: Array,
        required: true,
    },
    notifications:{
        type: Array,
        required: true,
    }
});

const page = usePage();
const auth = page.props.auth ?? null;


const createdFromNow = computed(() => {
    return moment(props.lastAplications.created_at).format('DD-M-Y')
})

const applicationProgress = computed(() => {
    const status = props.lastAplications?.status

    if (status === "yes") {
        return { value: 100, color: "blue" }
    }

    if (status === "maybe") {
        return { value: 50, color: "cyan" }
    }

    if (status === "no") {
        return { value: 100, color: "red" }
    }

    return { value: 0, color: "gray" }
})
const formatNotification = (notification) => {
    const data = notification.data;
    if (!data) return { title: __('translate.unknownNotification'), message: '' };

    // Jeśli message zawiera wypalone "translate.newAplication123", funkcja __ teraz to obsłuży.
    // Dla nowych powiadomień używamy klucza z parametrami.
    const message = data.message ? __(data.message, { ...data, id: data.aplication || data.id }) : '';

    return {
        title: __(data.title || 'translate.newNotification', data) || __('translate.notification'),
        message: message,
        action: data.action ? __(data.action, data) : null,
        actionUrl: data.actionUrl || null
    };
};

const markAsRead = (id) => {
    router.post(
        route('notifications.markAsRead', id),
        {},
        {
            preserveScroll: true,
            preserveState: true,
            only: ['notifications', 'unreadNotifications'],

        }
    );
};

</script>
<template>
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="py-12 bg-gray-50/50 min-h-screen">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-8">
            <!-- APLIKACJE -->
            <section class="bg-white rounded-[3rem] shadow-xl shadow-blue-900/5 border border-gray-100 overflow-hidden">
                <div class="p-10">
                    <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center gap-4 mb-10">
                        <div>
                            <h2 class="text-2xl font-black text-[#0A2C5C] uppercase tracking-tight">{{ __('translate.aplications') }}</h2>
                            <p class="text-[10px] font-black text-gray-400 uppercase tracking-widest mt-1">{{ __('translate.manageYourApplications') }}</p>
                        </div>
                        <Link :href="route('worker.aplications')"
                              class="inline-flex items-center px-8 py-4 bg-white border border-gray-100 text-gray-500 text-[10px] font-black uppercase tracking-widest rounded-2xl hover:bg-gray-50 shadow-sm transition-all hover:-translate-y-0.5">
                            {{ __('translate.details') }}
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 ml-2" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                            </svg>
                        </Link>
                    </div>

                    <div class="grid grid-cols-1 lg:grid-cols-12 gap-12">
                        <!-- Status aplikacji -->
                        <div class="lg:col-span-5 flex flex-col">
                            <div class="flex items-center gap-4 mb-6">
                                <h3 class="text-[10px] font-black text-[#0A2C5C] uppercase tracking-[0.2em]">{{ __('translate.applicationStatus') }}</h3>
                                <div class="h-px flex-1 bg-gray-100"></div>
                            </div>

                            <div class="flex flex-col sm:flex-row gap-8 items-center bg-gray-50/50 p-8 rounded-[2.5rem] border border-gray-100/50 transition-all hover:shadow-xl hover:shadow-blue-900/5 hover:bg-white group">
                                <CircularProgress
                                    :value="applicationProgress.value"
                                    :color="applicationProgress.color"
                                    class="shrink-0 scale-110"
                                />
                                <div v-if="props.lastAplications" class="min-w-0 text-center sm:text-left">
                                    <div class="flex items-center justify-center sm:justify-start gap-2 mb-2">
                                        <div class="w-2 h-2 rounded-full shadow-sm" :class="{
                                            'bg-[#0A2C5C]': applicationProgress.color === 'blue',
                                            'bg-[#e31e24]': applicationProgress.color === 'red',
                                            'bg-[#00a3e0]': applicationProgress.color === 'cyan',
                                            'bg-gray-300': applicationProgress.color === 'gray'
                                        }"></div>
                                        <p class="text-[10px] font-black text-gray-400 uppercase tracking-widest">{{ createdFromNow }}</p>
                                    </div>
                                    <h4 class="text-lg font-black text-[#0A2C5C] uppercase tracking-tight leading-tight mb-1 truncate">
                                        {{ props.lastAplications.project?.position?.allTranslations['title'][usePage().props.language] }}
                                    </h4>
                                    <p class="text-xs font-bold text-gray-500 uppercase tracking-widest mb-4">{{ props.lastAplications.project?.user?.name }}</p>
                                    <span class="inline-flex items-center px-4 py-1.5 rounded-xl text-[8px] font-black bg-white border border-gray-100 text-[#0A2C5C] uppercase tracking-[0.2em] shadow-sm">
                                        {{ props.lastAplications.project?.category?.allTranslations['title'][usePage().props.language] }}
                                    </span>
                                </div>
                                <div v-else class="text-gray-400 text-[10px] font-black uppercase tracking-widest italic">
                                    {{ __('translate.noRecentApplications') }}
                                </div>
                            </div>
                        </div>

                        <!-- Ostatnie aplikacje -->
                        <div class="lg:col-span-7">
                            <div class="flex items-center gap-4 mb-6">
                                <h3 class="text-[10px] font-black text-[#0A2C5C] uppercase tracking-[0.2em]">{{ __('translate.lastAplications') }}</h3>
                                <div class="h-px flex-1 bg-gray-100"></div>
                            </div>

                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4" v-if="otherAplications.length">
                                <div v-for="other in otherAplications" :key="other.id"
                                     class="flex items-center gap-4 p-4 rounded-[2rem] bg-gray-50/50 hover:bg-white transition-all duration-300 group border border-transparent hover:border-gray-100 hover:shadow-xl hover:shadow-blue-900/5">
                                    <div class="relative shrink-0">
                                        <img :src="other.project?.user?.profile_photo_url"
                                             class="w-14 h-14 rounded-2xl object-cover border-2 border-white shadow-sm group-hover:shadow-md transition-all duration-300"
                                        />
                                        <div class="absolute -bottom-1 -right-1 w-4 h-4 bg-white rounded-full flex items-center justify-center shadow-sm border border-gray-50">
                                            <div class="w-2 h-2 bg-[#00a3e0] rounded-full"></div>
                                        </div>
                                    </div>
                                    <div class="min-w-0 flex-1">
                                        <p class="text-[9px] font-black text-gray-400 uppercase tracking-widest mb-1">
                                            {{ moment(other.created_at).format('DD-MM-YYYY') }}
                                        </p>
                                        <h4 class="text-xs font-black text-[#0A2C5C] uppercase tracking-tight truncate group-hover:text-[#00a3e0] transition-colors leading-tight">
                                            {{ other.project?.position?.allTranslations['title'][usePage().props.language] }}
                                        </h4>
                                        <p class="text-[10px] font-bold text-gray-400 uppercase tracking-widest truncate">{{ other.project?.user?.name }}</p>
                                    </div>
                                </div>
                            </div>
                            <div v-else class="flex flex-col items-center justify-center p-12 bg-gray-50/50 rounded-[2.5rem] border border-dashed border-gray-200">
                                <p class="text-[10px] font-black text-gray-400 uppercase tracking-widest">{{ __('translate.noOtherApplications') }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- DOLNA SEKCJA -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 pb-12">
                <!-- MOJE DANE -->
                <section class="bg-white rounded-[3rem] shadow-xl shadow-blue-900/5 border border-gray-100 p-10 flex flex-col">
                    <div class="flex justify-between items-center mb-10">
                        <div>
                            <h2 class="text-xl font-black text-[#0A2C5C] uppercase tracking-tight">{{ __('translate.myData') }}</h2>
                            <p class="text-[10px] font-black text-gray-400 uppercase tracking-widest mt-1">{{ __('translate.keepYourProfileUpdated') }}</p>
                        </div>
                        <Link :href="route('profile.show')"
                              class="inline-flex items-center px-6 py-3 bg-white border border-gray-100 text-gray-500 text-[10px] font-black uppercase tracking-widest rounded-2xl hover:bg-gray-50 shadow-sm transition-all hover:-translate-y-0.5">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                            </svg>
                            {{ __('translate.edit') }}
                        </Link>
                    </div>

                    <div class="flex flex-col sm:flex-row items-center sm:items-start gap-10 bg-gray-50/50 p-8 rounded-[2.5rem] border border-gray-50">
                        <div class="relative group">
                            <div class="w-32 h-32 rounded-[2rem] overflow-hidden shadow-xl border-4 border-white group-hover:scale-105 transition-transform duration-500">
                                <img :src="auth.user?.profile_photo_url" class="w-full h-full object-cover" />
                            </div>
                            <div class="absolute -bottom-2 -right-2 bg-green-500 w-6 h-6 rounded-full border-4 border-white shadow-lg"></div>
                        </div>

                        <div class="flex-1 space-y-6 w-full">
                            <div class="grid grid-cols-1 gap-4">
                                <div class="flex flex-col">
                                    <span class="text-[10px] font-black text-gray-400 uppercase tracking-widest mb-1">{{ __('translate.nameUser') }} & {{ __('translate.surname') }}</span>
                                    <p class="text-xl font-black text-[#0A2C5C] uppercase tracking-tight">{{ auth.user?.name }} {{ auth.user?.worker_detail?.surname }}</p>
                                </div>
                                <div class="h-px bg-gray-100 w-full"></div>
                                <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                                    <div class="flex flex-col">
                                        <span class="text-[10px] font-black text-gray-400 uppercase tracking-widest mb-1">{{ __('translate.phone') }}</span>
                                        <p class="text-xs font-bold text-gray-600 uppercase tracking-widest">{{ auth.user?.worker_detail?.contact_phone || '—' }}</p>
                                    </div>
                                    <div class="flex flex-col">
                                        <span class="text-[10px] font-black text-gray-400 uppercase tracking-widest mb-1">{{ __('translate.email') }}</span>
                                        <p class="text-xs font-bold text-gray-600 truncate">{{ auth.user?.email }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- POWIADOMIENIA -->
                <section class="bg-white rounded-[3rem] shadow-xl shadow-blue-900/5 border border-gray-100 p-10 flex flex-col">
                    <div class="flex items-center justify-between mb-8">
                        <div>
                            <h2 class="text-xl font-black text-[#0A2C5C] uppercase tracking-tight">{{ __('translate.notifications') }}</h2>
                            <p class="text-[10px] font-black text-gray-400 uppercase tracking-widest mt-1">{{ __('translate.stayInformedAboutYourUpdates') }}</p>
                        </div>
                        <Link preserveScroll v-if="usePage().props.unreadNotifications" :href="route('notifications.markAllAsRead')" method="post" as="button"
                              class="text-[10px] font-black text-[#e31e24] hover:underline uppercase tracking-widest">
                            {{ __('translate.markAllAsRead') }}
                        </Link>
                    </div>

                    <div class="flex-1 overflow-hidden relative">
                        <ul class="space-y-4 max-h-[350px] overflow-y-auto pr-2 custom-scrollbar">
                            <li v-for="notification in notifications" :key="notification.id"
                                class="group relative flex items-start gap-4 p-5 rounded-2xl transition-all duration-300 border border-gray-50 hover:bg-gray-50 hover:border-gray-100"
                            >
                                <div class="mt-1 shrink-0">
                                    <div v-if="!notification.read_at" class="w-2 h-2 bg-[#00a3e0] rounded-full shadow-[0_0_8px_rgba(0,163,224,0.5)]"></div>
                                    <div v-else class="w-2 h-2 bg-gray-200 rounded-full"></div>
                                </div>

                                <div class="flex-1 min-w-0">
                                    <button v-if="!notification.read_at"
                                            class="w-full text-left focus:outline-none"
                                            @click="markAsRead(notification.id)"
                                    >
                                        <p class="text-xs font-black text-[#0A2C5C] uppercase tracking-tight leading-snug group-hover:text-[#00a3e0] transition-colors" v-html="formatNotification(notification).title"></p>
                                        <p class="text-[10px] font-bold text-gray-400 uppercase tracking-widest mt-1 line-clamp-2 leading-relaxed" v-html="formatNotification(notification).message"></p>
                                    </button>
                                    <div v-else>
                                        <p class="text-xs font-bold text-gray-400 uppercase tracking-tight leading-snug" v-html="formatNotification(notification).title"></p>
                                        <p class="text-[10px] font-bold text-gray-300 uppercase tracking-widest mt-1 line-clamp-1" v-html="formatNotification(notification).message"></p>
                                    </div>
                                </div>

                                <div v-if="!notification.read_at" class="absolute right-4 top-1/2 -translate-y-1/2 opacity-0 group-hover:opacity-100 transition-opacity">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-[#00a3e0]" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                    </svg>
                                </div>
                            </li>
                        </ul>

                        <div v-if="!notifications.length" class="flex flex-col items-center justify-center py-16 bg-gray-50/50 rounded-[2.5rem] border border-dashed border-gray-200">
                            <div class="w-12 h-12 bg-white rounded-full flex items-center justify-center mb-4 shadow-sm">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-200" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
                                </svg>
                            </div>
                            <p class="text-[10px] font-black text-gray-400 uppercase tracking-widest">{{ __('translate.noNotifications') }}</p>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
    </div>
</template>

<style scoped>
.custom-scrollbar::-webkit-scrollbar {
    width: 4px;
}
.custom-scrollbar::-webkit-scrollbar-track {
    background: transparent;
}
.custom-scrollbar::-webkit-scrollbar-thumb {
    background: #e5e7eb;
    border-radius: 10px;
}
.custom-scrollbar::-webkit-scrollbar-thumb:hover {
    background: #d1d5db;
}
</style>
