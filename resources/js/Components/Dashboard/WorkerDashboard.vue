
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

    if (status === "reserved") {
        return { value: 100, color: "blue" }
    }

    if (status === "viewed") {
        return { value: 50, color: "cyan" }
    }

    if (status === "rejected") {
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
    <div class="min-h-screen">
        <div class="max-w-7xl mx-auto space-y-8">
            <!-- APLIKACJE -->
            <section class="bg-white rounded-3xl shadow-sm border border-gray-100 overflow-hidden">
                <div class="p-8">
                    <div class="flex justify-between items-center mb-8">
                        <div>
                            <h2 class="text-2xl font-bold text-gray-900">{{ __('translate.aplications') }}</h2>
                            <p class="text-sm text-gray-500 mt-1">{{ __('translate.manageYourApplications') }}</p>
                        </div>
                        <Link :href="route('worker.aplications')"
                              class="inline-flex items-center px-4 py-2 bg-red-50 text-red-600 text-sm font-semibold rounded-xl hover:bg-red-100 transition-colors duration-200">
                            {{ __('translate.details') }}
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-2" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                            </svg>
                        </Link>
                    </div>

                    <div class="grid grid-cols-1 lg:grid-cols-12 gap-12">
                        <!-- Status aplikacji -->
                        <div class="lg:col-span-5 flex flex-col">
                            <h3 class="text-xs font-bold text-gray-400 uppercase tracking-wider mb-6">{{ __('translate.applicationStatus') }}</h3>
                            <div class="flex gap-8 items-center bg-gray-50 p-6 rounded-2xl border border-gray-100/50 transition-all hover:shadow-md hover:bg-white">
                                <CircularProgress
                                    :value="applicationProgress.value"
                                    :color="applicationProgress.color"
                                    class="shrink-0 scale-110"
                                />
                                <div v-if="props.lastAplications" class="min-w-0">
                                    <div class="flex items-center gap-2 mb-1">
                                        <span class="w-2 h-2 rounded-full shadow-sm" :class="{
                                            'bg-blue-900': applicationProgress.color === 'blue',
                                            'bg-red-600': applicationProgress.color === 'red',
                                            'bg-cyan-500': applicationProgress.color === 'cyan',
                                            'bg-gray-300': applicationProgress.color === 'gray'
                                        }"></span>
                                        <p class="text-[10px] font-bold text-gray-400 uppercase tracking-tighter">{{ createdFromNow }}</p>
                                    </div>
                                    <h4 class="font-bold text-gray-900 truncate leading-tight mb-0.5">
                                        {{ props.lastAplications.project?.position?.allTranslations['title'][usePage().props.language] }}
                                    </h4>
                                    <p class="text-sm font-medium text-gray-600 mb-1">{{ props.lastAplications.project?.user?.name }}</p>
                                    <span class="inline-flex items-center px-2 py-0.5 rounded text-[10px] font-bold bg-gray-200 text-gray-700 uppercase tracking-wider">
                                        {{ props.lastAplications.project?.category?.allTranslations['title'][usePage().props.language] }}
                                    </span>
                                </div>
                                <div v-else class="text-gray-400 font-medium italic text-sm">
                                    {{ __('translate.noRecentApplications') }}
                                </div>
                            </div>
                        </div>

                        <!-- Ostatnie aplikacje -->
                        <div class="lg:col-span-7">
                            <h3 class="text-xs font-bold text-gray-400 uppercase tracking-wider mb-6">{{ __('translate.lastAplications') }}</h3>
                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4" v-if="otherAplications.length">
                                <div v-for="other in otherAplications" :key="other.id"
                                     class="flex items-center gap-4 p-3 rounded-xl hover:bg-gray-50 transition-all duration-200 group border border-transparent hover:border-gray-100">
                                    <div class="relative shrink-0">
                                        <img :src="other.project?.user?.profile_photo_url"
                                             class="w-12 h-12 rounded-2xl object-cover shadow-sm group-hover:shadow-md transition-shadow duration-200"
                                        />
                                        <div class="absolute -bottom-1 -right-1 w-4 h-4 bg-white rounded-full flex items-center justify-center shadow-sm border border-gray-50">
                                            <div class="w-2 h-2 bg-blue-500 rounded-full"></div>
                                        </div>
                                    </div>
                                    <div class="min-w-0 flex-1">
                                        <div class="flex justify-between items-start mb-0.5">
                                            <p class="text-[10px] font-bold text-gray-400 uppercase tracking-tight">
                                                {{ moment(other.project?.created_at).format('DD-MM-YYYY') }}
                                            </p>
                                        </div>
                                        <h4 class="text-sm font-bold text-gray-900 truncate group-hover:text-red-600 transition-colors">
                                            {{ other.project?.position?.allTranslations['title'][usePage().props.language] }}
                                        </h4>
                                        <p class="text-xs font-semibold text-gray-500 truncate">{{ other.project?.user?.name }}</p>
                                    </div>
                                </div>
                            </div>
                            <div v-else class="flex flex-col items-center justify-center p-8 bg-gray-50 rounded-2xl border border-dashed border-gray-200">
                                <p class="text-sm text-gray-400 font-medium">{{ __('translate.noOtherApplications') }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- DOLNA SEKCJA -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                <!-- MOJE DANE -->
                <section class="bg-white rounded-3xl shadow-sm border border-gray-100 p-8 flex flex-col">
                    <div class="flex justify-between items-center mb-8">
                        <div>
                            <h2 class="text-xl font-bold text-gray-900">{{ __('translate.myData') }}</h2>
                            <p class="text-xs text-gray-500 mt-1">{{ __('translate.keepYourProfileUpdated') }}</p>
                        </div>
                        <Link :href="route('profile.show')"
                              class="inline-flex items-center px-4 py-2 bg-gray-50 text-gray-700 text-xs font-bold rounded-xl hover:bg-gray-100 transition-all">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                            </svg>
                            {{ __('translate.edit') }}
                        </Link>
                    </div>

                    <div class="flex flex-col sm:flex-row items-center sm:items-start gap-8 bg-gray-50/50 p-6 rounded-2xl border border-gray-50">
                        <div class="relative group">
                            <div class="w-32 h-32 rounded-3xl overflow-hidden shadow-lg border-4 border-white group-hover:scale-105 transition-transform duration-300">
                                <img :src="auth.user?.profile_photo_url" class="w-full h-full object-cover" />
                            </div>
                            <div class="absolute -bottom-2 -right-2 bg-green-500 w-6 h-6 rounded-full border-4 border-white shadow-sm"></div>
                        </div>

                        <div class="flex-1 space-y-4 w-full">
                            <div class="grid grid-cols-1 gap-3">
                                <div class="flex flex-col">
                                    <span class="text-[10px] font-bold text-gray-400 uppercase tracking-widest">{{ __('translate.nameUser') }} & {{ __('translate.surname') }}</span>
                                    <p class="text-lg font-bold text-gray-900">{{ auth.user?.name }} {{ auth.user?.worker_detail?.surname }}</p>
                                </div>
                                <div class="h-px bg-gray-100 w-full"></div>
                                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                                    <div class="flex flex-col">
                                        <span class="text-[10px] font-bold text-gray-400 uppercase tracking-widest">{{ __('translate.phone') }}</span>
                                        <p class="text-sm font-semibold text-gray-700">{{ auth.user?.worker_detail?.contact_phone || '—' }}</p>
                                    </div>
                                    <div class="flex flex-col">
                                        <span class="text-[10px] font-bold text-gray-400 uppercase tracking-widest">{{ __('translate.email') }}</span>
                                        <p class="text-sm font-semibold text-gray-700 truncate">{{ auth.user?.email }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- POWIADOMIENIA -->
                <section class="bg-white rounded-3xl shadow-sm border border-gray-100 p-8 flex flex-col">
                    <div class="flex justify-between items-center mb-8">
                        <div>
                            <h2 class="text-xl font-bold text-gray-900">{{ __('translate.notifications') }}</h2>
                            <p class="text-xs text-gray-500 mt-1">{{ __('translate.stayInformedAboutYourUpdates') }}</p>
                        </div>
                        <Link preserveScroll v-if="usePage().props.unreadNotifications" :href="route('notifications.markAllAsRead')" method="post" as="button"
                              class="text-xs font-bold text-red-500 hover:text-red-700 transition-colors px-2 py-1">
                            {{ __('translate.markAllAsRead') }}
                        </Link>
                    </div>

                    <div class="flex-1 overflow-hidden relative">
                        <ul class="space-y-3 max-h-[280px] overflow-y-auto pr-2 custom-scrollbar">
                            <li v-for="notification in notifications" :key="notification.id"
                                class="group relative flex items-start gap-4 p-4 rounded-2xl transition-all duration-200 border border-transparent"
                                :class="[
                                    !notification.read_at ? 'bg-blue-50/40 border-blue-50/50 hover:bg-blue-50' : 'hover:bg-gray-50'
                                ]"
                            >
                                <div class="mt-1 shrink-0">
                                    <div v-if="!notification.read_at" class="w-2.5 h-2.5 bg-blue-500 rounded-full animate-pulse shadow-sm shadow-blue-200"></div>
                                    <div v-else class="w-2.5 h-2.5 bg-gray-300 rounded-full opacity-50"></div>
                                </div>

                                <div class="flex-1 min-w-0">
                                    <button v-if="!notification.read_at"
                                            class="w-full text-left focus:outline-none"
                                            @click="markAsRead(notification.id)"
                                    >
                                        <p class="text-sm font-bold text-gray-900 leading-snug" v-html="formatNotification(notification).title"></p>
                                        <p class="text-xs font-medium text-gray-600 mt-1 line-clamp-2" v-html="formatNotification(notification).message"></p>
                                    </button>
                                    <div v-else>
                                        <p class="text-sm font-semibold text-gray-500 leading-snug" v-html="formatNotification(notification).title"></p>
                                        <p class="text-xs font-medium text-gray-400 mt-1 line-clamp-1" v-html="formatNotification(notification).message"></p>
                                    </div>
                                </div>

                                <div v-if="!notification.read_at" class="absolute right-4 top-1/2 -translate-y-1/2 opacity-0 group-hover:opacity-100 transition-opacity">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-blue-400" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                    </svg>
                                </div>
                            </li>
                        </ul>

                        <div v-if="!notifications.length" class="flex flex-col items-center justify-center h-40 bg-gray-50 rounded-2xl border border-dashed border-gray-200">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-gray-300 mb-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
                            </svg>
                            <p class="text-sm text-gray-400 font-medium">{{ __('translate.noNotifications') }}</p>
                        </div>
                    </div>
                </section>
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
