<script setup>
import { onMounted, onUnmounted, ref, watch } from 'vue';
import { Link, usePage } from '@inertiajs/vue3';
import axios from 'axios';
import { playNewMessageSound, primeMessengerSound } from '@/Composables/useMessengerSound';

// Ikona wiadomości z licznikiem nieprzeczytanych. Licznik odświeżamy odpytywaniem
// (co 15 s, w karcie w tle co 60 s) - bez WebSocketów. Przy okazji odświeża licznik dzwonka.
defineProps({
    dark: { type: Boolean, default: false },
});

const page = usePage();
const count = ref(page.props.messengerUnread ?? 0);
let timer = null;

watch(() => page.props.messengerUnread, (value) => {
    if (value !== undefined && value !== null) count.value = value;
});

watch(count, (value, previous) => {
    if (value > previous) playNewMessageSound();
});

const refresh = async () => {
    try {
        const { data } = await axios.get(route('messages.unread-count'));
        count.value = data.unread_count;
        page.props.unreadNotifications = data.notifications_count;
    } catch {
        // Sesja wygasła albo brak sieci - spróbujemy przy następnym odpytaniu
    }
};

const schedule = () => {
    clearTimeout(timer);
    timer = setTimeout(async () => {
        await refresh();
        schedule();
    }, document.hidden ? 60000 : 15000);
};

const onVisibility = () => {
    if (!document.hidden) refresh();
    schedule();
};

onMounted(() => {
    primeMessengerSound();
    schedule();
    document.addEventListener('visibilitychange', onVisibility);
});

onUnmounted(() => {
    clearTimeout(timer);
    document.removeEventListener('visibilitychange', onVisibility);
});
</script>

<template>
    <Link
        :href="route('messages.index')"
        :title="__('messenger.title')"
        class="relative inline-flex items-center p-2.5 rounded-2xl transition-all duration-200"
        :class="dark ? 'text-white/70 hover:text-white hover:bg-white/10' : 'text-gray-500 hover:text-[#0A2C5C] hover:bg-blue-50/50'"
    >
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.8" stroke="currentColor" class="w-6 h-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="M8.625 12a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm0 0H8.25m4.125 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm0 0H12m4.125 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm0 0h-.375M21 12c0 4.556-4.03 8.25-9 8.25a9.764 9.764 0 0 1-2.555-.337A5.972 5.972 0 0 1 5.41 20.97a5.969 5.969 0 0 1-.474-.065 4.48 4.48 0 0 0 .978-2.025c.09-.457-.133-.901-.467-1.226C3.93 16.178 3 14.189 3 12c0-4.556 4.03-8.25 9-8.25s9 3.694 9 8.25Z" />
        </svg>
        <span v-if="count > 0" class="absolute top-1 right-1 inline-flex items-center justify-center min-w-[18px] h-[18px] px-1 text-[10px] font-black leading-none text-white bg-red-600 rounded-lg shadow-sm border-2 border-white">
            {{ count > 99 ? '99+' : count }}
        </span>
    </Link>
</template>
