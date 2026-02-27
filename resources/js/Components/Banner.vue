<script setup>
import { ref, watchEffect } from 'vue';
import { usePage } from '@inertiajs/vue3';

const page = usePage();
const show = ref(true);
const style = ref('success');
const message = ref('');

watchEffect(async () => {
    style.value = page.props.jetstream.flash?.bannerStyle || 'success';
    message.value = page.props.jetstream.flash?.banner || '';
    show.value = true;
    setTimeout(()=>{
        message.value ='';
        show.value = false;
    },3000)
});
</script>

<template>
    <div class="fixed top-6 inset-x-0 flex items-start justify-center pointer-events-none z-[100]">
        <transition
            enter-active-class="transform ease-out duration-500 transition"
            enter-from-class="translate-y-[-100%] opacity-0"
            enter-to-class="translate-y-0 opacity-100"
            leave-active-class="transition ease-in duration-300"
            leave-from-class="opacity-100"
            leave-to-class="opacity-0"
        >
            <div
                v-if="show && message"
                class="pointer-events-auto max-w-xl w-full mx-4"
            >
                <div
                    class="relative rounded-[2rem] p-1 shadow-2xl overflow-hidden border border-white/20"
                    :class="{ 'bg-[#0A2C5C] shadow-blue-900/20': style == 'success', 'bg-red-700 shadow-red-900/20': style == 'danger' }"
                >
                    <!-- Background Decoration -->
                    <div class="absolute top-0 right-0 w-24 h-24 bg-white/10 rounded-full -mr-12 -mt-12 blur-2xl"></div>

                    <div class="flex items-center gap-4 px-6 py-4">
                        <div class="shrink-0">
                            <div
                                class="w-10 h-10 rounded-2xl flex items-center justify-center transition-transform duration-500"
                                :class="{ 'bg-blue-600': style == 'success', 'bg-red-600': style == 'danger' }"
                            >
                                <svg v-if="style == 'success'" class="h-5 w-5 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>

                                <svg v-if="style == 'danger'" class="h-5 w-5 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126zM12 15.75h.007v.008H12v-.008z" />
                                </svg>
                            </div>
                        </div>

                        <div class="flex-1 min-w-0">
                            <p class="text-[10px] font-black text-white uppercase tracking-[0.2em] leading-tight">
                                {{ message }}
                            </p>
                        </div>

                        <div class="shrink-0">
                            <button
                                type="button"
                                class="w-8 h-8 flex items-center justify-center rounded-xl text-white/50 hover:text-white hover:bg-white/10 focus:outline-none transition-all duration-300"
                                aria-label="Dismiss"
                                @click.prevent="show = false"
                            >
                                <svg class="h-4 w-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </transition>
    </div>
</template>
