<script setup>
import InputError from '@/Components/InputError.vue';
import ProviderIcon from '@/Components/SocialstreamIcons/ProviderIcon.vue';

defineProps({
    error: {
        type: String,
        default: null,
    },
    providers: {
        type: Array,
    },
    labels: {
        type: Object,
    }
});
</script>

<template>
    <div  class="mb-2">
        <div class="flex items-center justify-center">
            <span class="text-center text-[#0a2b57]">
                {{ __('translate.orLogin') }}
             </span>
        </div>

        <InputError v-if="error" :message="error" class="text-center"/>

        <div class="flex justify-center gap-1">
            <a v-for="provider in providers" :key="provider.id"
               class="w-auto flex gap-1 items-center justify-center transition duration-200 py-1 text-sm font-normal text-center block"
               :href="route('oauth.redirect', provider.id)">
                <ProviderIcon :provider="provider" classes="h-10 w-10"/>
            </a>
        </div>
    </div>
</template>
