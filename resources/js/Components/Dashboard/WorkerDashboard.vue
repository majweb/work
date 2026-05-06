
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
    return moment(props.lastAplications.created_at).format('DD.MM.YYYY HH:mm')
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
        <div class="p-4 sm:p-6 bg-white overflow-hidden shadow-xl sm:rounded-lg">
            <div class="flex flex-col sm:flex-row items-start sm:items-center justify-between mb-6 sm:mb-8 px-2 sm:px-4 gap-4">
                <div>
                    <h3 class="text-xl sm:text-2xl font-black text-[#0A2C5C] uppercase tracking-tight">
                        {{ __('translate.workerDashboard') || 'Pulpit Pracownika' }}
                    </h3>
                    <p class="text-[9px] sm:text-[10px] font-bold text-gray-400 uppercase tracking-widest mt-1">
                        {{ __('translate.manageYourApplications') }}
                    </p>
                </div>
            </div>

            <div class="space-y-8 sm:space-y-12">
                <!-- APLIKACJE -->
                <section class="bg-white rounded-[2rem] sm:rounded-[3rem] shadow-xl shadow-blue-900/5 border border-gray-100 overflow-hidden relative">
                    <div class="absolute top-0 right-0 w-64 h-64 bg-blue-50/30 rounded-full -mr-32 -mt-32 blur-3xl opacity-50"></div>
                    <div class="p-6 sm:p-10 relative z-10">
                        <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center gap-4 mb-8 sm:mb-12">
                            <div>
                                <h2 class="text-lg sm:text-xl font-black text-[#0A2C5C] uppercase tracking-tight">{{ __('translate.aplications') }}</h2>
                            </div>
                            <Link :href="route('worker.aplications')"
                                  class="w-full sm:w-auto group flex items-center justify-center gap-2 px-6 py-3 bg-gray-50 text-[#0A2C5C] text-[10px] font-black rounded-2xl hover:bg-blue-50 transition-all uppercase tracking-widest border border-gray-100">
                                {{ __('translate.details') }}
                                <span class="text-lg group-hover:translate-x-1 transition-transform">→</span>
                            </Link>
                        </div>

                        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-12">
                            <!-- Status aplikacji -->
                            <div class="lg:col-span-5 flex flex-col">
                                <div class="flex items-center gap-4 mb-6 sm:mb-8">
                                    <h3 class="text-[10px] font-black text-gray-400 uppercase tracking-[0.2em]">{{ __('translate.applicationStatus') }}</h3>
                                    <div class="h-px flex-1 bg-gray-100"></div>
                                </div>

                                <div class="flex flex-col sm:flex-row gap-6 sm:gap-10 items-center bg-gray-50/50 p-6 sm:p-10 rounded-[2rem] sm:rounded-[2.5rem] border border-gray-100/50 transition-all duration-500 hover:shadow-2xl hover:shadow-blue-900/10 hover:bg-white group relative overflow-hidden">
                                    <div class="absolute top-0 right-0 w-32 h-32 bg-blue-50/20 rounded-full -mr-16 -mt-16 blur-2xl group-hover:bg-blue-100/30 transition-colors"></div>
                                    <CircularProgress
                                        :value="applicationProgress.value"
                                        :color="applicationProgress.color"
                                        class="shrink-0 scale-125 relative z-10"
                                    />
                                    <div v-if="props.lastAplications" class="min-w-0 text-center sm:text-left relative z-10">
                                        <div class="flex items-center justify-center sm:justify-start gap-2 mb-3">
                                            <div class="w-2 h-2 rounded-full shadow-sm animate-pulse" :class="{
                                                'bg-[#0A2C5C]': applicationProgress.color === 'blue',
                                                'bg-[#e31e24]': applicationProgress.color === 'red',
                                                'bg-[#00a0e3]': applicationProgress.color === 'cyan',
                                                'bg-gray-300': applicationProgress.color === 'gray'
                                            }"></div>
                                            <p class="text-[9px] font-black text-gray-400 uppercase tracking-widest">{{ createdFromNow }}</p>
                                        </div>
                                        <h4 class="text-sm sm:text-lg md:text-xl font-black text-[#0A2C5C] uppercase tracking-tight leading-tight mb-2 group-hover:text-[#00a0e3] transition-colors">
                                            {{ props.lastAplications.project?.position?.allTranslations['title'][usePage().props.language] }}
                                        </h4>
                                        <p class="text-[10px] font-black text-gray-400 uppercase tracking-widest mb-6">{{ props.lastAplications.project?.user?.name }}</p>
                                        <span class="inline-flex items-center px-4 py-2 rounded-xl text-[8px] font-black bg-white border border-gray-100 text-[#0A2C5C] uppercase tracking-[0.2em] shadow-sm">
                                            {{ props.lastAplications.project?.category?.allTranslations['title'][usePage().props.language] }}
                                        </span>
                                    </div>
                                    <div v-else class="text-gray-300 text-[10px] font-black uppercase tracking-widest italic relative z-10">
                                        {{ __('translate.noRecentApplications') }}
                                    </div>
                                </div>
                            </div>

                            <!-- Ostatnie aplikacje -->
                            <div class="lg:col-span-7">
                                <div class="flex items-center gap-4 mb-6 sm:mb-8">
                                    <h3 class="text-[10px] font-black text-gray-400 uppercase tracking-[0.2em]">{{ __('translate.lastAplications') }}</h3>
                                    <div class="h-px flex-1 bg-gray-100"></div>
                                </div>

                                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 sm:gap-6" v-if="otherAplications.length">
                                    <div v-for="other in otherAplications" :key="other.id"
                                         class="flex items-center gap-4 sm:gap-5 p-4 sm:p-5 rounded-[2rem] sm:rounded-[2.5rem] bg-gray-50/50 hover:bg-white transition-all duration-500 group border border-transparent hover:border-gray-100 hover:shadow-2xl hover:shadow-blue-900/10">
                                        <div class="relative shrink-0">
                                            <img :src="other.project?.user?.profile_photo_url"
                                                 class="w-12 h-12 sm:w-16 sm:h-16 rounded-[1.2rem] sm:rounded-[1.5rem] object-cover border-2 sm:border-4 border-white shadow-lg group-hover:scale-110 transition-all duration-500"
                                            />
                                            <div class="absolute -bottom-1 -right-1 w-4 h-4 sm:w-5 sm:h-5 bg-white rounded-full flex items-center justify-center shadow-md border border-gray-50">
                                                <div class="w-2 h-2 sm:w-2.5 sm:h-2.5 bg-[#00a0e3] rounded-full animate-pulse"></div>
                                            </div>
                                        </div>
                                        <div class="min-w-0 flex-1">
                                            <p class="text-[8px] font-black text-gray-300 uppercase tracking-widest mb-1.5">
                                                {{ moment(other.created_at).format('DD.MM.YYYY HH:mm') }}
                                            </p>
                                            <h4 class="text-xs sm:text-sm font-black text-[#0A2C5C] uppercase tracking-tight group-hover:text-[#00a0e3] transition-colors leading-tight mb-1">
                                                {{ other.project?.position?.allTranslations['title'][usePage().props.language] }}
                                            </h4>
                                            <p class="text-[9px] font-black text-gray-400 uppercase tracking-widest">{{ other.project?.user?.name }}</p>
                                        </div>
                                    </div>
                                </div>
                                <div v-else class="flex flex-col items-center justify-center py-20 bg-gray-50/50 rounded-[3rem] border border-dashed border-gray-200">
                                    <div class="w-20 h-20 bg-white rounded-[2rem] flex items-center justify-center mb-6 shadow-xl shadow-blue-900/5">
                                        <svg class="w-10 h-10 text-gray-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                                        </svg>
                                    </div>
                                    <p class="text-[10px] font-black text-gray-400 uppercase tracking-widest">{{ __('translate.noOtherApplications') }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- DOLNA SEKCJA -->
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 lg:gap-12 pb-12">
                    <!-- MOJE DANE -->
                    <section class="bg-white rounded-[2rem] sm:rounded-[3rem] shadow-xl shadow-blue-900/5 border border-gray-100 p-6 sm:p-10 flex flex-col relative overflow-hidden group">
                        <div class="absolute bottom-0 right-0 w-48 h-48 bg-gray-50 rounded-full -mr-24 -mb-24 blur-3xl group-hover:bg-blue-50/50 transition-colors"></div>
                        <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center gap-6 mb-8 sm:mb-12 relative z-10">
                            <div>
                                <h2 class="text-lg sm:text-xl font-black text-[#0A2C5C] uppercase tracking-tight">{{ __('translate.myData') }}</h2>
                                <p class="text-[10px] font-bold text-gray-400 uppercase tracking-widest mt-1">{{ __('translate.keepYourProfileUpdated') }}</p>
                            </div>
                            <Link :href="route('profile.show')"
                                  class="w-full sm:w-auto group/edit flex items-center justify-center gap-2 px-6 py-3 bg-gray-50 text-[#0A2C5C] text-[10px] font-black rounded-2xl hover:bg-blue-50 transition-all uppercase tracking-widest border border-gray-100">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 transition-transform group-hover/edit:rotate-12" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                </svg>
                                {{ __('translate.edit') }}
                            </Link>
                        </div>

                        <div class="flex flex-col sm:flex-row items-center sm:items-start gap-8 sm:gap-12 bg-gray-50/50 p-6 sm:p-10 rounded-[2rem] sm:rounded-[2.5rem] border border-gray-50/50 relative z-10 hover:bg-white transition-all duration-500 hover:shadow-xl hover:shadow-blue-900/5">
                            <div class="relative group/avatar">
                                <div class="w-32 h-32 sm:w-40 sm:h-40 rounded-[2rem] sm:rounded-[2.5rem] overflow-hidden shadow-2xl border-4 border-white group-hover/avatar:scale-105 transition-transform duration-500">
                                    <img :src="auth.user?.profile_photo_url" class="w-full h-full object-cover" />
                                </div>
                                <div class="absolute -bottom-1 -right-1 sm:-bottom-2 sm:-right-2 bg-green-500 w-6 h-6 sm:w-8 sm:h-8 rounded-full border-2 sm:border-4 border-white shadow-lg shadow-green-200"></div>
                            </div>

                            <div class="flex-1 space-y-6 sm:space-y-8 w-full">
                                <div class="grid grid-cols-1 gap-4 sm:gap-6">
                                    <div class="flex flex-col text-center sm:text-left">
                                        <span class="text-[9px] font-black text-gray-400 uppercase tracking-[0.2em] mb-2">{{ __('translate.nameUser') }} & {{ __('translate.surname') }}</span>
                                        <p class="text-xl sm:text-2xl font-black text-[#0A2C5C] uppercase tracking-tight">{{ auth.user?.name }} {{ auth.user?.worker_detail?.surname }}</p>
                                    </div>
                                    <div class="h-px bg-gradient-to-r from-gray-100 to-transparent w-full"></div>
                                    <div class="grid grid-cols-1 gap-4 sm:gap-8 text-center sm:text-left">
                                        <div class="flex flex-col">
                                            <span class="text-[9px] font-black text-gray-400 uppercase tracking-[0.2em] mb-2">{{ __('translate.phone') }}</span>
                                            <p class="text-xs font-black text-[#0A2C5C] uppercase tracking-widest">{{ auth.user?.worker_detail?.contact_phone || '—' }}</p>
                                        </div>
                                        <div class="flex flex-col">
                                            <span class="text-[9px] font-black text-gray-400 uppercase tracking-[0.2em] mb-2">{{ __('translate.email') }}</span>
                                            <p class="text-xs font-black text-[#0A2C5C] truncate">{{ auth.user?.email }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>

                    <!-- POWIADOMIENIA -->
                    <section class="bg-white rounded-[2rem] sm:rounded-[3rem] shadow-xl shadow-blue-900/5 border border-gray-100 p-6 sm:p-10 flex flex-col relative overflow-hidden">
                        <div class="absolute top-0 right-0 w-32 h-32 bg-blue-50/30 rounded-full -mr-16 -mt-16 blur-2xl"></div>
                        <div class="flex items-center justify-between mb-8 sm:mb-12 relative z-10">
                            <div>
                                <h2 class="text-lg sm:text-xl font-black text-[#0A2C5C] uppercase tracking-tight">{{ __('translate.notifications') }}</h2>
                                <p class="text-[10px] font-bold text-gray-400 uppercase tracking-widest mt-1">{{ __('translate.stayInformedAboutYourUpdates') }}</p>
                            </div>
                            <Link preserveScroll v-if="usePage().props.unreadNotifications" :href="route('notifications.markAllAsRead')" method="post" as="button"
                                  class="text-[10px] font-black text-[#e31e24] hover:text-red-700 transition-colors uppercase tracking-widest">
                                {{ __('translate.markAllAsRead') }}
                            </Link>
                        </div>

                        <div class="flex-1 overflow-hidden relative z-10">
                            <ul class="space-y-4 max-h-[400px] sm:max-h-[450px] overflow-y-auto pr-2 custom-scrollbar">
                                <li v-for="notification in notifications" :key="notification.id"
                                    class="group relative flex items-start gap-3 sm:gap-4 p-4 sm:p-5 rounded-[1.5rem] sm:rounded-[2rem] transition-all duration-300 border border-transparent"
                                    :class="[!notification.read_at ? 'bg-blue-50/50 border-blue-100 shadow-lg shadow-blue-900/5 hover:bg-white' : 'hover:bg-gray-50 hover:border-gray-100']"
                                >
                                    <div class="mt-1.5 shrink-0">
                                        <div v-if="!notification.read_at" class="w-2.5 h-2.5 bg-[#00a0e3] rounded-full shadow-[0_0_12px_rgba(0,163,224,0.5)] group-hover:scale-125 transition-transform"></div>
                                        <div v-else class="w-2.5 h-2.5 bg-gray-200 rounded-full opacity-50"></div>
                                    </div>

                                    <div class="flex-1 min-w-0">
                                        <button v-if="!notification.read_at"
                                                class="w-full text-left focus:outline-none"
                                                @click="markAsRead(notification.id)"
                                        >
                                            <p class="text-xs font-black text-[#0A2C5C] uppercase tracking-tight leading-snug group-hover:text-[#00a0e3] transition-colors" v-html="formatNotification(notification).title"></p>
                                            <p class="text-[10px] font-bold text-gray-500 mt-2 line-clamp-2 uppercase tracking-widest leading-relaxed" v-html="formatNotification(notification).message"></p>
                                        </button>
                                        <div v-else>
                                            <p class="text-xs font-bold text-gray-400 uppercase tracking-tight leading-snug" v-html="formatNotification(notification).title"></p>
                                            <p class="text-[10px] font-bold text-gray-300 uppercase tracking-widest mt-1 line-clamp-1" v-html="formatNotification(notification).message"></p>
                                        </div>
                                    </div>

                                    <div v-if="!notification.read_at" class="absolute right-5 top-1/2 -translate-y-1/2 opacity-0 group-hover:opacity-100 transition-opacity">
                                        <span class="text-lg text-[#00a0e3]">→</span>
                                    </div>
                                </li>
                            </ul>

                            <div v-if="!notifications.length" class="flex flex-col items-center justify-center py-20 bg-gray-50/50 rounded-[2.5rem] border border-dashed border-gray-200">
                                <div class="w-20 h-20 bg-white rounded-[2rem] flex items-center justify-center mb-6 shadow-xl shadow-blue-900/5">
                                    <svg class="w-10 h-10 text-gray-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
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
