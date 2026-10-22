<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import ConfirmationModal from '@/Components/ConfirmationModal.vue';
import DangerButton from '@/Components/DangerButton.vue';
import SecondaryButton from '@/Components/SecondaryButton.vue';
import InputError from '@/Components/InputError.vue';
import Dropdown from '@/Components/Dropdown.vue';
import MessageBody from '@/Components/Messenger/MessageBody.vue';
import AdminNewConversation from '@/Components/Messenger/AdminNewConversation.vue';
import { Link, router, useForm, usePage } from '@inertiajs/vue3';
import { computed, nextTick, onMounted, onUnmounted, ref, watch } from 'vue';
import axios from 'axios';
import __ from '@/lang';
import { playNewMessageSound, primeMessengerSound } from '@/Composables/useMessengerSound';
import { useMessengerDates } from '@/Composables/useMessengerDates';

const props = defineProps({
    conversations: Array,
    activeConversation: Object,
    typing: Boolean,
    employers: Array,
    isAdmin: Boolean,
    isEmployer: Boolean,
    settings: Object,
    prefillProject: Object,
    // Firma: zakładki "Moje rozmowy" / "Rozmowy rekruterów" (podgląd, tylko odczyt)
    canOversee: Boolean,
    view: { type: String, default: 'mine' },
});

const { formatDateTime, formatShort, formatRelative } = useMessengerDates();

// Odpytywanie bez WebSocketów: lista i rozmowa co 5 s, "pisze..." co 2 s (karta w tle - rzadziej)
const POLL_MS = 5000;
const TYPING_POLL_MS = 2000;
const TYPING_SIGNAL_INTERVAL_MS = 2500;

// Stan odświeżany odpytywaniem (axios - nie przerywa wysyłania formularzy jak wizyta Inertii);
// po każdej wizycie Inertii (wysłanie, akceptacja, blokada) bierzemy świeże propsy
const conversationList = ref(props.conversations);
const active = ref(props.activeConversation);
const otherTyping = ref(props.typing);

watch(() => props.conversations, (value) => (conversationList.value = value));
watch(() => props.activeConversation, (value) => (active.value = value));
watch(() => props.typing, (value) => (otherTyping.value = value));

// --- Wysyłanie ---
const form = useForm({ body: '', project_id: null });

const applyPrefill = () => {
    if (props.prefillProject && !form.body) {
        form.body = __('messenger.prefill', { title: props.prefillProject.title }) + ' ';
        form.project_id = props.prefillProject.id;
    }
};

const send = () => {
    if (!active.value || !form.body.trim() || form.processing) return;

    form.post(route('messages.reply', active.value.id), {
        preserveScroll: true,
        onSuccess: () => form.reset(),
    });
};

const onKeydown = (event) => {
    if (event.key === 'Enter' && !event.shiftKey) {
        event.preventDefault();
        send();
    }
};

// Sygnał "pisze..." najczęściej co 2,5 s, bez przeładowania strony
let lastTypingSignal = 0;
const onInput = () => {
    const now = Date.now();
    if (!active.value?.can_reply || now - lastTypingSignal < TYPING_SIGNAL_INTERVAL_MS) return;
    lastTypingSignal = now;
    axios.post(route('messages.typing', active.value.id)).catch(() => {});
};

// --- Przewijanie i dźwięk przy nowej wiadomości ---
const thread = ref(null);
const scrollToBottom = () => nextTick(() => {
    if (thread.value) thread.value.scrollTop = thread.value.scrollHeight;
});

const lastMessage = computed(() => active.value?.messages?.at(-1) ?? null);

watch(() => [active.value?.id, lastMessage.value?.id], ([conversationId, messageId], previous) => {
    scrollToBottom();
    // Nowa wiadomość od drugiej strony w otwartej rozmowie
    if (previous && conversationId === previous[0] && messageId !== previous[1] && lastMessage.value && !lastMessage.value.is_mine) {
        playNewMessageSound();
    }
});

watch(otherTyping, (isTyping) => {
    if (isTyping) scrollToBottom();
});

// Ostatnia własna wiadomość pokazuje "Przeczytano" / "Wysłano"
const lastMineId = computed(() => [...(active.value?.messages ?? [])].reverse().find((m) => m.is_mine)?.id);

// --- Odpytywanie ---
let pollTimer = null;
let typingTimer = null;
let wasTyping = false;

const page = usePage();

const refresh = async () => {
    try {
        const { data } = await axios.get(route('messages.poll'), { params: { conversation: active.value?.id, view: props.view } });
        conversationList.value = data.conversations;
        if (active.value && data.activeConversation?.id === active.value.id) {
            active.value = data.activeConversation;
        }
        page.props.messengerUnread = data.unread_count;
    } catch {
        // Brak sieci albo wygasła sesja - spróbujemy przy następnym odpytaniu
    }
};

const poll = () => {
    clearTimeout(pollTimer);
    pollTimer = setTimeout(async () => {
        await refresh();
        poll();
    }, document.hidden ? POLL_MS * 6 : POLL_MS);
};

const pollTyping = () => {
    clearTimeout(typingTimer);
    typingTimer = setTimeout(async () => {
        if (active.value && !document.hidden) {
            try {
                const { data } = await axios.get(route('messages.typing-state', active.value.id));
                otherTyping.value = data.typing;
            } catch {
                otherTyping.value = false;
            }
        }
        pollTyping();
    }, document.hidden ? TYPING_POLL_MS * 5 : TYPING_POLL_MS);
};

// Gdy druga strona przestała pisać, wiadomość zwykle już jest - pobieramy ją od razu
watch(otherTyping, (isTyping) => {
    if (wasTyping && !isTyping) refresh();
    wasTyping = isTyping;
});

onMounted(() => {
    primeMessengerSound();
    applyPrefill();
    scrollToBottom();
    poll();
    pollTyping();
});

onUnmounted(() => {
    clearTimeout(pollTimer);
    clearTimeout(typingTimer);
});

// --- Akcje w rozmowie ---
const accepting = ref(false);
const accept = () => router.post(route('messages.accept', active.value.id), {}, {
    preserveScroll: true,
    onStart: () => (accepting.value = true),
    onFinish: () => (accepting.value = false),
});

// Odczytanie wiadomości od kandydata za punkty (raz za rozmowę)
const unlocking = ref(false);
const unlock = () => router.post(route('messages.unlock', active.value.id), {}, {
    preserveScroll: true,
    onStart: () => (unlocking.value = true),
    onFinish: () => (unlocking.value = false),
});
const hasEnoughPoints = computed(() => (active.value?.unlock?.points ?? 0) >= (active.value?.unlock?.price ?? 0));
const block = (duration) => router.post(route('messages.block', active.value.id), { duration }, { preserveScroll: true });
const unblock = () => router.delete(route('messages.unblock', active.value.id), { preserveScroll: true });

const confirmingDelete = ref(false);
const deleting = ref(false);
const destroy = () => router.delete(route('messages.destroy', active.value.id), {
    onStart: () => (deleting.value = true),
    onFinish: () => {
        deleting.value = false;
        confirmingDelete.value = false;
    },
});

// --- Ustawienia firmy/rekrutera ---
const settingsForm = useForm({
    messenger_online: props.settings?.messenger_online ?? true,
    messenger_reply_hours: props.settings?.messenger_reply_hours ?? '',
});
const saveSettings = () => settingsForm.patch(route('messages.settings'), { preserveScroll: true });

// --- Wygląd ---
const statusLine = (participant) => {
    if (!participant) return '';
    if (participant.is_online) return __('messenger.online');
    return participant.last_seen_at ? __('messenger.lastSeen', { time: formatRelative(participant.last_seen_at) }) : __('messenger.offline');
};

const roleLabel = (participant) => ({
    firm: __('messenger.roleFirm'),
    recruiter: __('messenger.roleRecruiter'),
    worker: __('messenger.roleWorker'),
    admin: '',
}[participant?.role] ?? '');

const pendingLabel = (conversation) => conversation.is_employer
    ? __('messenger.pendingRequest')
    : __('messenger.awaitingAcceptance');
</script>

<template>
    <AppLayout :title="__('messenger.title')">
        <div class="py-8 sm:py-12 bg-gray-50/50 min-h-screen px-2 sm:px-0">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
                <!-- Nagłówek -->
                <div class="bg-white rounded-[2rem] shadow-xl shadow-blue-900/5 border border-gray-100 p-6 sm:p-8">
                    <div class="flex flex-col lg:flex-row lg:items-center justify-between gap-6">
                        <div>
                            <h3 class="text-2xl font-black text-[#0A2C5C] uppercase tracking-tight">{{ __('messenger.title') }}</h3>
                            <p class="text-[10px] font-bold text-gray-400 uppercase tracking-widest mt-1">{{ __('messenger.subtitle') }}</p>
                        </div>

                        <div v-if="isAdmin" class="flex flex-col sm:flex-row gap-3">
                            <a
                                :href="route('admin.messages.guide')"
                                class="px-6 py-3 bg-white border border-gray-200 hover:border-[#0A2C5C] text-[#0A2C5C] rounded-2xl font-black text-[10px] uppercase tracking-[0.2em] transition-all text-center"
                            >
                                Instrukcja (PDF)
                            </a>
                            <AdminNewConversation :employers="employers" />
                        </div>

                        <!-- Firma/rekruter: przyjmowanie wiadomości i godziny odpowiedzi -->
                        <form v-if="isEmployer && settings" class="flex flex-col sm:flex-row sm:items-end gap-4" @submit.prevent="saveSettings">
                            <label class="flex items-center gap-3 cursor-pointer select-none">
                                <button
                                    type="button"
                                    role="switch"
                                    :aria-checked="settingsForm.messenger_online"
                                    class="relative inline-flex h-6 w-11 shrink-0 rounded-full transition-colors"
                                    :class="settingsForm.messenger_online ? 'bg-green-500' : 'bg-gray-300'"
                                    @click="settingsForm.messenger_online = !settingsForm.messenger_online"
                                >
                                    <span class="inline-block h-5 w-5 mt-0.5 rounded-full bg-white shadow transition-transform" :class="settingsForm.messenger_online ? 'translate-x-5' : 'translate-x-0.5'"></span>
                                </button>
                                <span class="text-xs font-bold text-[#0A2C5C]">{{ __('messenger.acceptingMessages') }}</span>
                            </label>
                            <div>
                                <label class="text-[10px] font-black text-gray-400 uppercase tracking-widest block mb-1">{{ __('messenger.replyHours') }}</label>
                                <input
                                    v-model="settingsForm.messenger_reply_hours"
                                    type="text"
                                    maxlength="255"
                                    :placeholder="__('messenger.replyHoursPlaceholder')"
                                    class="w-full sm:w-56 px-4 py-2.5 bg-gray-50 border-0 rounded-xl text-sm focus:ring-2 focus:ring-[#329CD1]"
                                >
                                <InputError :message="settingsForm.errors.messenger_reply_hours" class="mt-1" />
                            </div>
                            <button
                                type="submit"
                                :disabled="settingsForm.processing || !settingsForm.isDirty"
                                class="px-6 py-3 bg-[#0A2C5C] hover:bg-[#0D356D] text-white rounded-xl font-black text-[10px] uppercase tracking-[0.2em] transition-all disabled:opacity-40"
                            >
                                {{ __('messenger.save') }}
                            </button>
                        </form>
                    </div>
                    <p v-if="isEmployer && settings && !settingsForm.messenger_online" class="mt-4 text-xs text-amber-700 bg-amber-50 rounded-xl px-4 py-3">
                        {{ __('messenger.acceptingHint') }}
                    </p>
                </div>

                <!-- Lista rozmów + rozmowa -->
                <div class="grid grid-cols-1 md:grid-cols-[320px_1fr] gap-4 sm:gap-6">
                    <!-- Lista -->
                    <div class="bg-white rounded-[2rem] shadow-xl shadow-blue-900/5 border border-gray-100 overflow-hidden" :class="{ 'hidden md:block': active }">
                        <div v-if="canOversee" class="flex p-2 gap-1 border-b border-gray-50">
                            <Link
                                :href="route('messages.index')"
                                class="flex-1 px-3 py-2.5 rounded-xl text-center text-[10px] font-black uppercase tracking-widest transition-colors"
                                :class="view === 'mine' ? 'bg-[#0A2C5C] text-white' : 'text-gray-400 hover:bg-gray-50'"
                            >{{ __('messenger.tabMine') }}</Link>
                            <Link
                                :href="route('messages.index', { view: 'recruiters' })"
                                class="flex-1 px-3 py-2.5 rounded-xl text-center text-[10px] font-black uppercase tracking-widest transition-colors"
                                :class="view === 'recruiters' ? 'bg-[#0A2C5C] text-white' : 'text-gray-400 hover:bg-gray-50'"
                            >{{ __('messenger.tabRecruiters') }}</Link>
                        </div>
                        <div v-if="!conversationList.length" class="p-8 text-center text-sm text-gray-400">
                            <p>{{ view === 'recruiters' ? __('messenger.emptyRecruiters') : __('messenger.emptyList') }}</p>
                            <p v-if="!isAdmin && !isEmployer" class="mt-2 text-xs">{{ __('messenger.emptyListWorker') }}</p>
                        </div>
                        <ul v-else class="divide-y divide-gray-50 max-h-[70vh] overflow-y-auto">
                            <li v-for="conversation in conversationList" :key="conversation.id">
                                <Link
                                    :href="route('messages.show', conversation.id)"
                                    preserve-scroll
                                    class="flex gap-3 p-4 transition-colors"
                                    :class="active?.id === conversation.id ? 'bg-blue-50/70' : 'hover:bg-gray-50'"
                                >
                                    <div class="relative shrink-0">
                                        <img :src="conversation.participant.avatar" :alt="conversation.participant.name" class="h-11 w-11 rounded-full object-cover bg-gray-100">
                                        <span v-if="conversation.participant.is_online" class="absolute bottom-0 right-0 h-3 w-3 rounded-full bg-green-500 border-2 border-white"></span>
                                    </div>
                                    <div class="min-w-0 flex-1">
                                        <div class="flex items-baseline justify-between gap-2">
                                            <p class="text-sm truncate text-[#0A2C5C]" :class="conversation.unread_count ? 'font-black' : 'font-bold'">{{ conversation.participant.name }}</p>
                                            <span class="text-[10px] text-gray-400 shrink-0">{{ formatShort(conversation.last_message?.created_at) }}</span>
                                        </div>
                                        <p v-if="conversation.recruiter_name" class="text-[10px] font-bold text-[#329CD1] truncate">{{ __('messenger.recruiterLabel', { name: conversation.recruiter_name }) }}</p>
                                        <p v-if="conversation.status === 'pending' && conversation.type === 'worker'" class="mt-0.5 text-[10px] font-black uppercase tracking-widest text-amber-600">{{ pendingLabel(conversation) }}</p>
                                        <div class="flex items-center justify-between gap-2 mt-0.5">
                                            <p class="text-xs truncate" :class="conversation.unread_count ? 'text-gray-800 font-semibold' : 'text-gray-500'">
                                                <template v-if="conversation.locked">🔒 {{ __('messenger.lockedPreview') }}</template>
                                                <template v-else><span v-if="conversation.last_message?.is_mine">{{ __('messenger.you') }}&nbsp;</span>{{ conversation.last_message?.body }}</template>
                                            </p>
                                            <span v-if="conversation.unread_count" class="shrink-0 inline-flex items-center justify-center min-w-[20px] h-5 px-1.5 text-[10px] font-black text-white bg-red-600 rounded-lg">{{ conversation.unread_count }}</span>
                                        </div>
                                    </div>
                                </Link>
                            </li>
                        </ul>
                    </div>

                    <!-- Rozmowa -->
                    <div class="bg-white rounded-[2rem] shadow-xl shadow-blue-900/5 border border-gray-100 flex flex-col min-h-[60vh] max-h-[80vh]" :class="{ 'hidden md:flex': !active }">
                        <div v-if="!active" class="flex-1 flex items-center justify-center text-sm text-gray-400 p-8 text-center">
                            {{ __('messenger.selectConversation') }}
                        </div>

                        <template v-else>
                            <!-- Nagłówek rozmowy -->
                            <div class="flex items-center gap-3 p-4 sm:p-5 border-b border-gray-50">
                                <Link :href="route('messages.index')" class="md:hidden p-2 -ml-2 text-gray-400 hover:text-[#0A2C5C]" :aria-label="__('messenger.back')">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-5 h-5"><path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5 8.25 12l7.5-7.5" /></svg>
                                </Link>
                                <img :src="active.participant.avatar" :alt="active.participant.name" class="h-11 w-11 rounded-full object-cover bg-gray-100 shrink-0">
                                <div class="min-w-0 flex-1">
                                    <p class="text-sm font-black text-[#0A2C5C] truncate">
                                        <a v-if="active.participant.profile_url" :href="active.participant.profile_url" target="_blank" class="hover:underline">{{ active.participant.name }}</a>
                                        <template v-else>{{ active.participant.name }}</template>
                                        <span v-if="roleLabel(active.participant)" class="ml-1 text-[10px] font-bold text-gray-400 uppercase tracking-widest">{{ roleLabel(active.participant) }}</span>
                                    </p>
                                    <p class="text-xs" :class="active.participant.is_online ? 'text-green-600' : 'text-gray-400'">
                                        {{ statusLine(active.participant) }}
                                        <template v-if="active.participant.reply_hours"> · {{ __('messenger.repliesUsually') }} {{ active.participant.reply_hours }}</template>
                                    </p>
                                    <p v-if="active.recruiter" class="text-xs text-[#329CD1] font-bold truncate">{{ __('messenger.recruiterLabel', { name: active.recruiter.name }) }}</p>
                                    <p v-if="active.project" class="text-xs text-gray-500 truncate">
                                        {{ __('messenger.regarding') }} <a :href="active.project.url" target="_blank" class="font-semibold text-[#0A2C5C] hover:underline">{{ active.project.title }}</a>
                                    </p>
                                </div>

                                <Dropdown v-if="active.can_block || active.can_delete" align="right" width="56">
                                    <template #trigger>
                                        <button type="button" class="p-2 rounded-xl text-gray-400 hover:text-[#0A2C5C] hover:bg-gray-50" :aria-label="__('messenger.options')">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-5 h-5"><path stroke-linecap="round" stroke-linejoin="round" d="M12 6.75a.75.75 0 1 1 0-1.5.75.75 0 0 1 0 1.5ZM12 12.75a.75.75 0 1 1 0-1.5.75.75 0 0 1 0 1.5ZM12 18.75a.75.75 0 1 1 0-1.5.75.75 0 0 1 0 1.5Z" /></svg>
                                        </button>
                                    </template>
                                    <template #content>
                                        <template v-if="active.can_block">
                                            <button v-if="active.blocked_by_me" type="button" class="block w-full px-4 py-2.5 text-left text-xs font-bold text-[#0A2C5C] hover:bg-gray-50" @click="unblock">{{ __('messenger.unblock') }}</button>
                                            <template v-else>
                                                <button type="button" class="block w-full px-4 py-2.5 text-left text-xs font-bold text-[#0A2C5C] hover:bg-gray-50" @click="block('24h')">{{ __('messenger.block24h') }}</button>
                                                <button type="button" class="block w-full px-4 py-2.5 text-left text-xs font-bold text-[#0A2C5C] hover:bg-gray-50" @click="block('permanent')">{{ __('messenger.blockPermanent') }}</button>
                                            </template>
                                        </template>
                                        <button v-if="active.can_delete" type="button" class="block w-full px-4 py-2.5 text-left text-xs font-bold text-red-600 hover:bg-red-50" @click="confirmingDelete = true">{{ __('messenger.delete') }}</button>
                                    </template>
                                </Dropdown>
                            </div>

                            <!-- Paski stanu -->
                            <div v-if="active.blocked_by_me" class="px-5 py-3 bg-red-50 text-xs text-red-700 flex items-center justify-between gap-4">
                                <span>{{ active.blocked_by_me.until ? __('messenger.blockedUntil', { date: formatDateTime(active.blocked_by_me.until) }) : __('messenger.blockedForever') }}</span>
                                <button type="button" class="font-black uppercase tracking-widest text-[10px] hover:underline" @click="unblock">{{ __('messenger.unblock') }}</button>
                            </div>
                            <div v-if="active.can_accept" class="px-5 py-3 bg-amber-50 text-xs text-amber-800 flex flex-col sm:flex-row sm:items-center justify-between gap-3">
                                <span>{{ __('messenger.acceptBar') }}</span>
                                <button
                                    type="button"
                                    :disabled="accepting"
                                    class="self-start sm:self-auto inline-flex items-center gap-2 px-5 py-2.5 bg-[#0A2C5C] hover:bg-[#0D356D] text-white rounded-xl font-black text-[10px] uppercase tracking-[0.2em]"
                                    :class="{ 'cursor-wait opacity-80': accepting }"
                                    @click="accept"
                                >
                                    <span v-if="accepting" class="w-3.5 h-3.5 border-2 border-white/30 border-t-white rounded-full animate-spin"></span>
                                    {{ __('messenger.acceptButton') }}
                                </button>
                            </div>

                            <!-- Wiadomości -->
                            <div ref="thread" class="flex-1 overflow-y-auto p-4 sm:p-6 space-y-3 bg-gray-50/40">
                                <!-- Wiadomość od kandydata przed odczytaniem za punkty -->
                                <div v-if="active.locked" class="max-w-md mx-auto my-6 p-6 bg-white border border-gray-100 rounded-3xl shadow-sm text-center space-y-3">
                                    <div class="mx-auto w-12 h-12 rounded-2xl bg-blue-50 flex items-center justify-center text-2xl">🔒</div>
                                    <p class="text-sm font-black text-[#0A2C5C] uppercase tracking-tight">{{ __('messenger.lockedTitle', { name: active.participant.name }) }}</p>
                                    <p class="text-xs text-gray-500">
                                        {{ active.oversight ? __('messenger.oversightLocked') : __('messenger.lockedText') }}
                                    </p>
                                    <template v-if="active.unlock?.can_unlock">
                                        <button
                                            type="button"
                                            :disabled="unlocking || !hasEnoughPoints"
                                            class="inline-flex items-center gap-2 px-6 py-3 bg-[#0A2C5C] hover:bg-[#0D356D] text-white rounded-2xl font-black text-[10px] uppercase tracking-[0.2em] transition-all"
                                            :class="unlocking ? 'cursor-wait opacity-80' : 'disabled:opacity-40'"
                                            @click="unlock"
                                        >
                                            <span v-if="unlocking" class="w-3.5 h-3.5 border-2 border-white/30 border-t-white rounded-full animate-spin"></span>
                                            {{ __('messenger.unlockButton', { points: active.unlock.price }) }}
                                        </button>
                                        <p class="text-[10px] font-bold text-gray-400 uppercase tracking-widest">{{ __('messenger.yourPoints', { points: active.unlock.points }) }}</p>
                                        <p v-if="!hasEnoughPoints" class="text-xs text-red-600">
                                            {{ __('messenger.noPoints') }}
                                            <Link v-if="$page.props.roles?.includes('firm')" :href="route('buy.index')" class="font-bold underline">{{ __('messenger.buyPoints') }}</Link>
                                        </p>
                                    </template>
                                </div>
                                <div v-for="message in (active.locked ? [] : active.messages)" :key="message.id" class="flex" :class="message.is_mine ? 'justify-end' : 'justify-start'">
                                    <div class="max-w-[85%] sm:max-w-[70%]">
                                        <p v-if="message.author" class="text-[10px] font-bold text-gray-400 mb-1" :class="message.is_mine ? 'text-right' : ''">{{ message.author }}</p>
                                        <div class="px-4 py-3 rounded-2xl text-sm leading-relaxed shadow-sm" :class="message.is_mine ? 'bg-[#0A2C5C] text-white rounded-br-md' : 'bg-white text-gray-800 border border-gray-100 rounded-bl-md'">
                                            <p v-if="message.project && message.project.id !== active.project?.id" class="text-[10px] font-bold mb-1" :class="message.is_mine ? 'text-blue-200' : 'text-gray-400'">
                                                {{ __('messenger.regarding') }} <a :href="message.project.url" target="_blank" class="underline">{{ message.project.title }}</a>
                                            </p>
                                            <MessageBody :body="message.body" :is-mine="message.is_mine" />
                                        </div>
                                        <p class="text-[10px] text-gray-400 mt-1" :class="message.is_mine ? 'text-right' : ''">
                                            {{ formatDateTime(message.created_at) }}
                                            <template v-if="message.id === lastMineId"> · {{ message.read_at ? __('messenger.read') : __('messenger.sentStatus') }}</template>
                                        </p>
                                    </div>
                                </div>
                                <div v-if="otherTyping" class="flex justify-start">
                                    <div class="px-4 py-2.5 rounded-2xl rounded-bl-md bg-white border border-gray-100 text-xs text-gray-400 italic shadow-sm">{{ __('messenger.typing') }}</div>
                                </div>
                            </div>

                            <!-- Odpowiedź -->
                            <div class="p-4 sm:p-5 border-t border-gray-50">
                                <form v-if="active.can_reply" @submit.prevent="send">
                                    <div class="flex items-end gap-3">
                                        <textarea
                                            v-model="form.body"
                                            rows="2"
                                            maxlength="5000"
                                            :placeholder="__('messenger.placeholder')"
                                            class="flex-1 resize-none px-4 py-3 bg-gray-50 border-0 rounded-2xl text-sm focus:ring-2 focus:ring-[#329CD1]"
                                            @keydown="onKeydown"
                                            @input="onInput"
                                        ></textarea>
                                        <button
                                            type="submit"
                                            :disabled="form.processing || !form.body.trim()"
                                            class="px-5 py-3 bg-[#E31E24] hover:bg-red-700 text-white rounded-2xl font-black text-[10px] uppercase tracking-[0.2em] transition-all disabled:opacity-40"
                                        >
                                            {{ __('messenger.send') }}
                                        </button>
                                    </div>
                                    <InputError :message="form.errors.body" class="mt-2" />
                                    <p class="hidden sm:block mt-2 text-[10px] text-gray-400">{{ __('messenger.sendHint') }}</p>
                                </form>
                                <p v-else class="text-sm text-gray-500 bg-gray-50 rounded-2xl px-4 py-3">{{ active.reply_denied_reason }}</p>
                            </div>
                        </template>
                    </div>
                </div>
            </div>
        </div>

        <ConfirmationModal :show="confirmingDelete" @close="!deleting && (confirmingDelete = false)">
            <template #title>
                <div class="text-[#0A2C5C] font-black uppercase tracking-tight">{{ __('messenger.deleteConfirmTitle') }}</div>
            </template>
            <template #content>
                <div class="text-sm text-gray-500 font-medium">{{ __('messenger.deleteConfirmText') }}</div>
            </template>
            <template #footer>
                <SecondaryButton class="rounded-2xl border-gray-100 px-6 py-3 font-black text-[10px] uppercase tracking-widest" :disabled="deleting" @click="confirmingDelete = false">
                    {{ __('messenger.cancel') }}
                </SecondaryButton>
                <DangerButton class="ml-3 rounded-2xl px-6 py-3 font-black text-[10px] uppercase tracking-widest disabled:opacity-60" :disabled="deleting" @click="destroy">
                    {{ __('messenger.delete') }}
                </DangerButton>
            </template>
        </ConfirmationModal>
    </AppLayout>
</template>
