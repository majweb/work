<script setup>
import ConfirmationModal from '@/Components/ConfirmationModal.vue';
import DangerButton from '@/Components/DangerButton.vue';
import SecondaryButton from '@/Components/SecondaryButton.vue';
import { router } from '@inertiajs/vue3';
import { ref } from 'vue';

// Usuwa subskrybenta newslettera z portalu i z list w GetResponse (po potwierdzeniu)
const props = defineProps({
    subscriber: Object,
});

const confirming = ref(false);
const deleting = ref(false);

const destroy = () => {
    router.delete(route('admin.newsletter-subscribers.destroy', props.subscriber.id), {
        preserveScroll: true,
        onStart: () => (deleting.value = true),
        onFinish: () => {
            deleting.value = false;
            confirming.value = false;
        },
    });
};
</script>

<template>
    <button
        type="button"
        class="text-[10px] font-black text-red-500 uppercase tracking-widest hover:underline"
        @click="confirming = true"
    >
        Usuń
    </button>

    <ConfirmationModal :show="confirming" @close="!deleting && (confirming = false)">
        <template #title>
            <div class="text-[#0A2C5C] font-black uppercase tracking-tight">Usuń subskrybenta</div>
        </template>

        <template #content>
            <div class="text-sm text-gray-500 font-medium">
                Adres <span class="font-black text-[#0A2C5C] break-all">{{ subscriber.email }}</span> zostanie usunięty z portalu
                i z list newslettera w GetResponse. Nie dostanie kolejnych wysyłek. Tej operacji nie można cofnąć.
            </div>
        </template>

        <template #footer>
            <SecondaryButton class="rounded-2xl border-gray-100 px-6 py-3 font-black text-[10px] uppercase tracking-widest" :disabled="deleting" @click="confirming = false">
                Anuluj
            </SecondaryButton>

            <DangerButton
                class="ml-3 rounded-2xl px-6 py-3 font-black text-[10px] uppercase tracking-widest shadow-lg shadow-red-900/20 disabled:opacity-60 disabled:cursor-wait"
                :disabled="deleting"
                @click="destroy"
            >
                <svg v-if="deleting" class="animate-spin h-3.5 w-3.5 text-white mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                    <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                    <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                </svg>
                {{ deleting ? 'Usuwanie…' : 'Usuń subskrybenta' }}
            </DangerButton>
        </template>
    </ConfirmationModal>
</template>
