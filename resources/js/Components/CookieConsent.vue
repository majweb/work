<script setup>
import { ref, onMounted, computed } from 'vue';
import { usePage } from '@inertiajs/vue3';
import __ from "@/lang.js";

const page = usePage();
const showBanner = ref(false);
const showSettings = ref(false);
const consents = ref({});

const cookieAgreements = computed(() => page.props.cookieAgreements || []);
const language = computed(() => page.props.language || 'pl');

const getLocalizedValue = (value) => {
    if (!value) return '';
    if (typeof value === 'string') return value;
    return value[language.value] || value['pl'] || value['en'] || Object.values(value)[0] || '';
};

onMounted(() => {
    const saved = localStorage.getItem('cookie_consent');
    if (!saved && cookieAgreements.value.length > 0) {
        showBanner.value = true;
        // Inicjalizacja domyślnych wartości
        cookieAgreements.value.forEach(agreement => {
            consents.value[agreement.id] = !!agreement.is_required;
        });
    }

    // DEBUG: Log points if needed (uncomment to debug in browser console)
    // console.log('Cookie Agreements:', page.props.cookieAgreements);
});

const acceptAll = () => {
    cookieAgreements.value.forEach(agreement => {
        consents.value[agreement.id] = true;
    });
    save();
};

const save = () => {
    localStorage.setItem('cookie_consent', JSON.stringify(consents.value));
    showBanner.value = false;
};

const handleConsentChange = (agreementId) => {
    const isLastAgreement = cookieAgreements.value.length > 0 &&
                           cookieAgreements.value[cookieAgreements.value.length - 1].id === agreementId;

    if (isLastAgreement && consents.value[agreementId]) {
        cookieAgreements.value.forEach(agreement => {
            if (agreement.id !== agreementId) {
                consents.value[agreement.id] = !!agreement.is_required;
            }
        });
    }
};
</script>

<template>
    <div v-if="showBanner" class="fixed inset-0 bg-black/50 backdrop-blur-sm z-[100] flex items-center justify-center p-4">
        <div class="bg-white dark:bg-gray-900 w-full max-w-2xl rounded-[2.5rem] shadow-2xl overflow-hidden border dark:border-gray-800">
            <div class="p-8">
                <div v-if="!showSettings">
                    <div class="flex items-center gap-4 mb-6">
                        <div class="p-4 bg-[#0A2C5C]/5 dark:bg-[#0A2C5C]/10 rounded-[2rem]">
                            <svg class="w-8 h-8 text-[#0A2C5C]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                            </svg>
                        </div>
                        <h3 class="text-xs font-black uppercase tracking-[0.2em] text-[#0A2C5C] dark:text-white">Ustawienia prywatności</h3>
                    </div>

                    <div class="text-[13px] font-medium text-gray-500 dark:text-gray-400 leading-relaxed mb-8" v-html="__('translate.agreeCookie')">
                    </div>

                    <div class="flex flex-col sm:flex-row justify-end gap-4">
                        <button @click="showSettings = true" class="px-8 py-4 text-[10px] font-black uppercase tracking-widest text-gray-400 hover:text-[#0A2C5C] transition-colors bg-gray-50 dark:bg-gray-800 rounded-2xl">
                            {{ __('translate.customize') }}
                        </button>
                        <button @click="acceptAll" class="px-10 py-4 text-[10px] font-black uppercase tracking-widest bg-[#0A2C5C] text-white rounded-2xl hover:bg-blue-800 transition-all shadow-xl shadow-blue-900/10 hover:-translate-y-0.5">
                            {{ __('translate.select_all') }}
                        </button>
                    </div>
                </div>

                <div v-else>
                    <div class="flex items-center justify-between mb-10">
                        <div class="flex items-center gap-4">
                             <div class="p-3 bg-gray-50 dark:bg-gray-800 rounded-2xl">
                                <svg class="w-6 h-6 text-[#0A2C5C]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4" />
                                </svg>
                            </div>
                            <h3 class="text-xs font-black uppercase tracking-[0.2em] text-[#0A2C5C] dark:text-white">{{ __('translate.customize') }}</h3>
                        </div>
                        <button @click="showSettings = false" class="text-gray-300 hover:text-[#0A2C5C] transition-colors">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </div>

                    <div class="space-y-3 max-h-[45vh] overflow-y-auto mb-10 pr-4 custom-scrollbar">
                        <label v-for="agreement in cookieAgreements" :key="agreement.id"
                             :class="[
                                 'flex items-center justify-between gap-6 p-5 border border-gray-100 dark:border-gray-800 rounded-[2rem] bg-gray-50/50 dark:bg-gray-800/30 transition-all hover:border-blue-100 dark:hover:border-blue-900/30',
                                 agreement.is_required ? 'opacity-60 cursor-not-allowed' : 'cursor-pointer'
                             ]">
                            <div class="flex-1">
                                <p class="text-[11px] font-black uppercase tracking-wider text-[#0A2C5C] dark:text-white mb-1" v-html="getLocalizedValue(agreement.description)"></p>
                                <p class="text-[10px] font-medium text-gray-400 dark:text-gray-500 uppercase tracking-wide" v-if="agreement.help_text">{{ getLocalizedValue(agreement.help_text) }}</p>
                            </div>
                            <div class="shrink-0">
                                <div class="relative inline-flex items-center">
                                    <input
                                        type="checkbox"
                                        v-model="consents[agreement.id]"
                                        @change="handleConsentChange(agreement.id)"
                                        :disabled="!!agreement.is_required"
                                        class="sr-only peer"
                                    />
                                    <div class="w-10 h-5 bg-gray-200 peer-focus:outline-none rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-4 after:w-4 after:transition-all dark:border-gray-600 peer-checked:bg-[#0A2C5C]"></div>
                                </div>
                            </div>
                        </label>
                    </div>

                    <div class="flex justify-between items-center">
                        <button @click="showSettings = false" class="text-[10px] font-black uppercase tracking-[0.2em] text-gray-400 hover:text-[#0A2C5C] transition-colors">
                            {{ __('translate.back') }}
                        </button>
                        <button @click="save" class="px-10 py-4 bg-[#0A2C5C] text-white text-[10px] font-black uppercase tracking-widest rounded-2xl hover:bg-blue-800 transition-all shadow-xl shadow-blue-900/10 hover:-translate-y-0.5">
                            {{ __('translate.save') }}
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<style scoped>
.custom-scrollbar::-webkit-scrollbar { width: 6px; }
.custom-scrollbar::-webkit-scrollbar-track { background: transparent; }
.custom-scrollbar::-webkit-scrollbar-thumb { background: #e5e7eb; border-radius: 10px; }
.dark .custom-scrollbar::-webkit-scrollbar-thumb { background: #374151; }
</style>
