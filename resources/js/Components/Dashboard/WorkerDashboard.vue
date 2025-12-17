
<script setup>
import {computed} from "vue";
import CircularProgress from "@/Components/CircularProgress.vue";
import {Link, usePage} from "@inertiajs/vue3";
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
        return { value: 50, color: "blue" }
    }

    if (status === "no") {
        return { value: 100, color: "red" }
    }

    return { value: 0, color: "gray" }
})
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

const noneRead = computed(() => {
    console.log(props.notifications.length,'sssss');
    return props.notifications.length > 0 &&
        props.notifications.every(notification => !notification.read_at)
})

</script>
<template>
    <div class="p-6 bg-gray-100 min-h-screen">
        <!-- APLIKACJE -->
        <div class="bg-white rounded-2xl shadow p-6 mb-6">
            <div class="flex justify-between items-center mb-4">
                <h2 class="text-xl font-semibold">Aplikacje</h2>
                <Link :href="route('worker.aplications')" class="text-sm text-red-500 hover:underline">
                    Szczegóły
                </Link>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <!-- Status aplikacji -->
                <div class="flex flex-col">
                    <h3 class="text-sm font-semibold mb-2 uppercase">{{__('translate.applicationStatus')}}</h3>
                    <div class="flex gap-4 items-center">
                        <CircularProgress
                            :value="applicationProgress.value"
                            :color="applicationProgress.color"
                        />
                        <div v-if="props.lastAplications">
                            <p class="text-xs text-gray-500">{{ createdFromNow }}</p>
                            <p class="font-semibold">{{props.lastAplications.project?.position?.allTranslations['title'][usePage().props.language]}}</p>
                            <p class="text-md text-gray-500">{{props.lastAplications.project?.user?.name}}</p>
                            <p class="text-xs text-gray-500">{{props.lastAplications.project?.category?.allTranslations['title'][usePage().props.language]}}</p>
                        </div>
                        <div v-else>-</div>
                    </div>
                </div>
                <!-- Ostatnie aplikacje -->
                <div>
                    <h3 class="text-sm font-semibold mb-2 uppercase">{{__('translate.lastAplications')}}</h3>
                    <div class="grid grid-cols-2 gap-3" v-if="otherAplications.length">
                        <div
                            v-for="other in otherAplications"
                            :key="other.id"
                            class="flex items-center gap-2"
                        >
                            <img :src="other.project?.user?.profile_photo_url"
                                class="w-8 h-8 rounded-full bg-blue-500 text-white flex items-center justify-center text-xs font-bold"
                            />
                            <div class="text-sm">
                                <p class="text-xs text-gray-500">  {{ moment(other.project?.created_at).format('DD-M-Y') }}</p>
                                <p class="font-semibold">{{other.project?.position?.allTranslations['title'][usePage().props.language]}}</p>
                                <p class="text-md text-gray-500">{{other.project?.user?.name}}</p>
                                <p class="text-xs text-gray-500">{{other.project?.category?.allTranslations['title'][usePage().props.language]}}</p>
                            </div>
                        </div>
                    </div>
                    <div v-else>-</div>
                </div>
            </div>
        </div>

        <!-- DOLNA SEKCJA -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <!-- MOJE DANE -->
            <div class="bg-white rounded-2xl shadow p-6">
                <div class="flex justify-between items-center mb-4">
                    <h2 class="text-lg font-semibold">Moje dane</h2>
                    <Link :href="route('profile.show')" class="text-sm text-red-500 hover:underline">
                        {{__('translate.edit')}}
                    </Link>
                </div>

                <div class="flex items-center gap-4">
                    <div
                        class="w-20 h-20 rounded-full bg-contain bg-center bg-no-repeat"
                        :style="`background-image: url(${auth.user?.profile_photo_url})`"
                    ></div>
                    <div class="text-sm">
                        <p><strong>Imię:</strong> {{auth.user?.name}}</p>
                        <p><strong>Nazwisko:</strong>  {{auth.user?.worker_detail?.surname}}</p>
                        <p><strong>Telefon:</strong>{{auth.user?.worker_detail?.contact_phone}}</p>
                        <p><strong>E-mail:</strong> {{auth.user?.email}}</p>
                    </div>
                </div>
            </div>

            <!-- POWIADOMIENIA -->
            <div class="bg-white rounded-2xl shadow p-6">
                <div class="flex justify-between items-center mb-4">
                    <h2 class="text-lg font-semibold">Powiadomienia</h2>
                    <Link v-if="noneRead" :href="route('notifications.markAllAsRead')" method="post" as="button" class="text-sm text-red-500 hover:underline">
                        {{ __('translate.markAllAsRead') }}
                    </Link>
                </div>

                <ul class="space-y-2 text-sm text-gray-700 max-h-40 overflow-y-auto">
                    <li v-for="notification in notifications" :key="notification.id"
                        :class="{
    'font-semibold': !notification.read_at,
    'front-semioldP': notification.read_at
}"                    >
                        <div class="flex justify-between items-start">
                            <div>
                                <Link v-html="formatNotification(notification).message" v-if="!notification.read_at" :href="route('notifications.markAsRead', notification.id)" method="post" as="button" class="mt-1 text-gray-600"></Link>
                                <span v-else class="mt-1 text-gray-600" v-html="formatNotification(notification).message"></span>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</template>
