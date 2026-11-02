<script setup>
// Potwierdzenie publikacji ogłoszenia - po publikacji firma/rekruter edytuje je tylko przez 24h
import DialogModal from '@/Components/DialogModal.vue';
import SecondaryButton from '@/Components/SecondaryButton.vue';
import __ from '@/lang.js';

defineProps({
    show: { type: Boolean, default: false },
    processing: { type: Boolean, default: false },
});

const emit = defineEmits(['close', 'confirm']);
</script>

<template>
    <DialogModal :show="show" max-width="lg" @close="emit('close')">
        <template #title>
            <span class="text-sm font-black text-[#0A2C5C] uppercase tracking-[0.15em] normal-case">
                {{ __('projectLock.publishTitle') }}
            </span>
        </template>

        <template #content>
            <p class="text-sm font-medium text-gray-600 normal-case tracking-normal leading-relaxed">
                {{ __('projectLock.publishText') }}
            </p>
        </template>

        <template #footer>
            <div class="flex flex-col-reverse sm:flex-row gap-3 w-full sm:w-auto">
                <SecondaryButton
                    class="!justify-center !rounded-xl !text-[10px] !font-black !uppercase !tracking-widest"
                    :disabled="processing"
                    @click="emit('close')"
                >
                    {{ __('projectLock.publishBack') }}
                </SecondaryButton>
                <button
                    type="button"
                    class="inline-flex items-center justify-center gap-2 px-6 py-3 bg-[#0A2C5C] hover:bg-[#0D356D] text-white rounded-xl text-[10px] font-black uppercase tracking-widest transition-all disabled:opacity-60"
                    :disabled="processing"
                    @click="emit('confirm')"
                >
                    <span v-if="processing" class="w-3.5 h-3.5 border-2 border-white/30 border-t-white rounded-full animate-spin"></span>
                    {{ __('projectLock.publishConfirm') }}
                </button>
            </div>
        </template>
    </DialogModal>
</template>
