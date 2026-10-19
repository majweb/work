<script setup>
import DialogModal from '@/Components/DialogModal.vue';
import SecondaryButton from '@/Components/SecondaryButton.vue';
import InputError from '@/Components/InputError.vue';
import { Link, useForm } from '@inertiajs/vue3';
import { computed, onMounted, ref } from 'vue';
import __ from '@/lang';

// "Napisz wiadomość" na stronie oferty i firmy. Stan liczy MessengerService::contactStateFor:
// gość, pracownik bez weryfikacji, blokada, rozmowa czeka na akceptację / istnieje, pracodawca
// nie przyjmuje wiadomości albo można pisać.
const props = defineProps({
    contact: { type: Object, required: true },
});

const open = ref(false);
const form = useForm({
    employer_id: props.contact.employer_id,
    project_id: props.contact.project_id,
    body: '',
});

const buttonLabel = computed(() => props.contact.is_recruiter ? __('messenger.writeToRecruiter') : __('messenger.writeToFirm'));

const contactUrl = (register = false) => route('messages.contact', {
    employer: props.contact.employer_id,
    ...(props.contact.project_id ? { project: props.contact.project_id } : {}),
    ...(register ? { register: 1 } : {}),
});

const conversationUrl = computed(() => props.contact.conversation_id
    ? route('messages.show', { conversation: props.contact.conversation_id, ...(props.contact.project_id ? { project: props.contact.project_id } : {}) })
    : null);

const show = () => {
    if (!form.body && props.contact.project_title) {
        form.body = __('messenger.prefill', { title: props.contact.project_title }) + ' ';
    }
    open.value = true;
};

const send = () => form.post(route('messages.store'), {
    onSuccess: () => (open.value = false),
});

onMounted(() => {
    // Po zalogowaniu z "Napisz wiadomość" (?contact=1) okno otwiera się od razu
    if (props.contact.state === 'available' && new URLSearchParams(window.location.search).get('contact') === '1') {
        show();
    }
});

// Przycisk drugorzędny obok "Aplikuj": ta sama wysokość, biały z granatową ramką
const buttonClass = 'inline-flex items-center justify-center gap-3 px-8 py-[14px] bg-white border-2 border-[#0A2C5C] text-[#0A2C5C] hover:bg-[#0A2C5C] hover:text-white text-[10px] font-black uppercase tracking-widest rounded-2xl transition-all hover:-translate-y-0.5';

// Kropka obecności pracodawcy: zielona - online, szara - offline
const dotClass = computed(() => ['h-2.5 w-2.5 rounded-full shrink-0 ring-2 ring-white', props.contact.is_online ? 'bg-green-500' : 'bg-gray-300']);

const presenceTitle = computed(() => [
    props.contact.is_online ? __('messenger.online') : __('messenger.offline'),
    props.contact.reply_hours ? `${__('messenger.repliesUsually')} ${props.contact.reply_hours}` : null,
].filter(Boolean).join(' · '));

const unavailableReason = computed(() => ({
    blocked: __('messenger.denied.blocked'),
    employer_offline: __('messenger.denied.employerOffline'),
    employer_unavailable: __('messenger.denied.employerUnavailable'),
}[props.contact.state] ?? ''));
</script>

<template>
    <template v-if="contact.state !== 'not_worker'">
        <!-- Gość: logowanie/rejestracja i powrót na tę stronę -->
        <a v-if="contact.state === 'guest'" :href="contactUrl()" :class="buttonClass" :title="__('messenger.guestHint')">
            <span :class="dotClass"></span>{{ buttonLabel }}
        </a>

        <!-- Rozmowa już jest (także czekająca na akceptację) -->
        <Link
            v-else-if="contact.state === 'pending' || contact.state === 'conversation_exists'"
            :href="conversationUrl"
            :class="buttonClass"
            :title="contact.state === 'pending' ? __('messenger.denied.waitingForAcceptance') : presenceTitle"
        >
            <span :class="dotClass"></span>{{ __('messenger.goToConversation') }}
        </Link>

        <!-- Nie można teraz napisać - przycisk przygaszony, powód w podpowiedzi -->
        <Link
            v-else-if="contact.state === 'unverified'"
            :href="route('verification.notice')"
            :class="buttonClass"
            :title="__('messenger.denied.verifyEmail')"
        >
            <span :class="dotClass"></span>{{ buttonLabel }}
        </Link>
        <span v-else-if="contact.state !== 'available'" :class="[buttonClass, 'opacity-40 cursor-not-allowed']" :title="unavailableReason">
            <span :class="dotClass"></span>{{ buttonLabel }}
        </span>

        <button v-else type="button" :class="buttonClass" :title="presenceTitle" @click="show">
            <span :class="dotClass"></span>{{ buttonLabel }}
        </button>

        <DialogModal :show="open" @close="!form.processing && (open = false)">
            <template #title>
                <div class="text-[#0A2C5C] font-black uppercase tracking-tight">{{ __('messenger.messageTo', { name: contact.employer_name }) }}</div>
            </template>
            <template #content>
                <p v-if="contact.project_title" class="text-xs text-gray-500 mb-3">{{ __('messenger.regarding') }} <strong class="text-[#0A2C5C]">{{ contact.project_title }}</strong></p>
                <textarea
                    v-model="form.body"
                    rows="6"
                    maxlength="5000"
                    :placeholder="__('messenger.placeholder')"
                    class="w-full px-4 py-3 bg-gray-50 border-0 rounded-xl text-sm normal-case tracking-normal focus:ring-2 focus:ring-[#329CD1]"
                ></textarea>
                <InputError :message="form.errors.body || form.errors.employer_id" class="mt-2" />
                <p class="mt-3 text-xs text-gray-400 normal-case tracking-normal">{{ __('messenger.firstMessageHint', { name: contact.employer_name }) }}</p>
            </template>
            <template #footer>
                <SecondaryButton class="rounded-xl" :disabled="form.processing" @click="open = false">{{ __('messenger.cancel') }}</SecondaryButton>
                <button
                    type="button"
                    :disabled="form.processing || !form.body.trim()"
                    class="ml-3 px-6 py-3 bg-[#E31E24] hover:bg-red-700 text-white rounded-xl font-black text-[10px] uppercase tracking-[0.2em] disabled:opacity-40"
                    @click="send"
                >
                    {{ __('messenger.send') }}
                </button>
            </template>
        </DialogModal>
    </template>
</template>
