<script setup>
import {computed, ref, watch} from 'vue';
import {Link, router, usePage} from '@inertiajs/vue3';
import AppLayout from '@/Layouts/AppLayout.vue';
import Multiselect from 'vue-multiselect'
import InputLabel from "@/Components/InputLabel.vue";
import __ from "@/lang.js";
const props = defineProps({
    cert50: Object,
});

const generatePdf = () => {
    router.post(route('firm.generate50'));
}
const download = () => {
    router.get(route('firm.download50'));
}
</script>
<template>
    <AppLayout :title="__('translate.p50')">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ __('translate.p50') }}
            </h2>
        </template>
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg">

                    <section class="bg-white py-8 antialiased dark:bg-gray-900 md:py-16">
                        <div class="mx-auto max-w-screen-xl px-4">
                            <p class="font-semibold text-gray-900 dark:text-white text-center mb-4">{{__('translate.active')}}</p>
                            <!-- Przycisk do pobierania pliku PDF -->
                            <div class="flex items-center flex-col">
                                <p v-if="cert50.start" class="text-gray-700 dark:text-gray-400 text-sm flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="green" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                    <span>{{ cert50.start }}</span>
                                </p>
                                <p v-if="cert50.end" class="text-gray-700 dark:text-gray-400 text-sm flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="red" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                    <span>{{ cert50.end }}</span>
                                </p>
                            </div>
                            <div class="mt-8 flex justify-center">
                                <button
                                    @click="generatePdf"
                                    class="rounded-md border border-transparent bg-indigo-600 px-6 py-3 text-base font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2"
                                >
                                    {{__('translate.generateCertyficate')}}
                                </button>
                            </div>
                            <a v-if="cert50.certificate_pdf" :href="route('firm.download50')"
                               class="mx-auto flex justify-center w-1/6 my-4 px-4 py-2 bg-white border border-gray-300 rounded-md font-semibold text-xs text-gray-700 uppercase tracking-widest shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 disabled:opacity-25 transition ease-in-out duration-150">
                                {{__('translate.getPdf')}}
                            </a>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </AppLayout>
</template>
