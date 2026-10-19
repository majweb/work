<script setup>
import DialogModal from '@/Components/DialogModal.vue';
import SecondaryButton from '@/Components/SecondaryButton.vue';
import InputError from '@/Components/InputError.vue';
import { router, useForm } from '@inertiajs/vue3';
import { ref, watch } from 'vue';
import debounce from 'lodash/debounce';

// Admin: nowa rozmowa administracji z firmą albo rekruterem (bez akceptacji kontaktu).
// Lista kont ładuje się dopiero po otwarciu okna (lazy prop "employers").
const props = defineProps({
    employers: { type: Array, default: null },
});

const open = ref(false);
const search = ref('');
const loading = ref(false);
const selected = ref(null);
const form = useForm({ employer_id: null, body: '' });

const load = () => router.reload({
    only: ['employers'],
    data: { employer_search: search.value },
    preserveScroll: true,
    preserveState: true,
    onStart: () => (loading.value = true),
    onFinish: () => (loading.value = false),
});

const searchLater = debounce(load, 300);
watch(search, searchLater);

const show = () => {
    open.value = true;
    selected.value = null;
    form.reset();
    load();
};

const choose = (employer) => {
    // Rozmowa już istnieje - przechodzimy do niej
    if (employer.conversation_id) {
        router.visit(route('messages.show', employer.conversation_id));
        return;
    }
    selected.value = employer;
    form.employer_id = employer.id;
};

const send = () => form.post(route('messages.store-admin'), {
    onSuccess: () => (open.value = false),
});
</script>

<template>
    <button type="button" class="px-6 py-3 bg-[#0A2C5C] hover:bg-[#0D356D] text-white rounded-xl font-black text-[10px] uppercase tracking-[0.2em] transition-all" @click="show">
        {{ __('messenger.adminNewConversation') }}
    </button>

    <DialogModal :show="open" @close="open = false">
        <template #title>
            <div class="text-[#0A2C5C] font-black uppercase tracking-tight">{{ __('messenger.adminNewConversation') }}</div>
        </template>
        <template #content>
            <template v-if="!selected">
                <input
                    v-model="search"
                    type="search"
                    :placeholder="__('messenger.searchEmployer')"
                    class="w-full px-4 py-3 bg-gray-50 border-0 rounded-xl text-sm focus:ring-2 focus:ring-[#329CD1]"
                >
                <p v-if="loading" class="mt-3 text-xs text-gray-400">…</p>
                <ul class="mt-3 max-h-80 overflow-y-auto divide-y divide-gray-50">
                    <li v-for="employer in employers || []" :key="employer.id">
                        <button type="button" class="w-full flex items-center gap-3 p-3 text-left hover:bg-gray-50 rounded-xl" @click="choose(employer)">
                            <img :src="employer.avatar" :alt="employer.name" class="h-9 w-9 rounded-full object-cover bg-gray-100">
                            <span class="min-w-0 flex-1">
                                <span class="block text-sm font-bold text-[#0A2C5C] truncate">{{ employer.name }}</span>
                                <span class="block text-xs text-gray-400 truncate">
                                    {{ employer.role === 'recruiter' ? __('messenger.roleRecruiter') : __('messenger.roleFirm') }} · {{ employer.email }}
                                </span>
                            </span>
                            <span v-if="employer.conversation_id" class="text-[10px] font-black uppercase tracking-widest text-[#329CD1]">{{ __('messenger.openExisting') }}</span>
                        </button>
                    </li>
                    <li v-if="!loading && employers && !employers.length" class="p-3 text-sm text-gray-400">{{ __('messenger.noResults') }}</li>
                </ul>
            </template>
            <form v-else @submit.prevent="send">
                <p class="text-sm text-gray-600 mb-3">
                    {{ __('messenger.messageTo', { name: selected.name }) }}
                    <button type="button" class="ml-2 text-[10px] font-black uppercase tracking-widest text-[#329CD1] hover:underline" @click="selected = null">{{ __('messenger.change') }}</button>
                </p>
                <textarea
                    v-model="form.body"
                    rows="5"
                    maxlength="5000"
                    :placeholder="__('messenger.placeholder')"
                    class="w-full px-4 py-3 bg-gray-50 border-0 rounded-xl text-sm normal-case tracking-normal focus:ring-2 focus:ring-[#329CD1]"
                ></textarea>
                <InputError :message="form.errors.body || form.errors.employer_id" class="mt-2" />
            </form>
        </template>
        <template #footer>
            <SecondaryButton class="rounded-xl" @click="open = false">{{ __('messenger.cancel') }}</SecondaryButton>
            <button
                v-if="selected"
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
