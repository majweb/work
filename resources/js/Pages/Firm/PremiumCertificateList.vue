<script setup>
import { ref } from 'vue';
import AppLayout from '@/Layouts/AppLayout.vue';
import Pagination from "@/Components/Pagination.vue";
import { router } from '@inertiajs/vue3';
import pickBy from 'lodash/pickBy';
import InputLabel from "@/Components/InputLabel.vue";
import TextInput from "@/Components/TextInput.vue";

const props = defineProps({
    histories: Object,
    levelNames: Object,
    levelColors: { type: Object, required: false },
    filters: Object,
    totalAmount: String,
});

const filters = ref({
    from: props.filters?.from ?? null,
    to: props.filters?.to ?? null,
});

// Odświeża listę po zmianie dat
const updateFilter = () => {
    const params = pickBy({
        from: filters.value.from,
        to: filters.value.to,
    }, value => value !== null && value !== '' && value !== undefined);

    router.get(route('firm.premium-certificate.list'), params, {
        preserveState: true,
        replace: true,
    });
};

const resetFilters = () => {
    filters.value.from = null;
    filters.value.to = null;
    router.get(route('firm.premium-certificate.list'), {}, {
        preserveState: false,
        replace: true,
    });
};
</script>

<template>
    <AppLayout :title="__('premium.history_certyficate')">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{__('premium.history_certyficate')}}
            </h2>
        </template>

        <div class="py-12 bg-gray-50/50 min-h-screen px-2 sm:px-0">
            <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                <!-- HEADER CARD -->
                <div class="bg-white rounded-[3rem] shadow-xl shadow-blue-900/5 border border-gray-100 p-10 mb-8">
                    <div class="flex items-center justify-between">
                        <div>
                            <h3 class="text-2xl font-black text-[#0A2C5C] uppercase tracking-tight">{{ __('premium.history_certyficate') }}</h3>
                            <p class="text-[10px] font-bold text-gray-400 uppercase tracking-widest mt-1">{{ __('premium.certificates_description') ?? 'Lista wygenerowanych certyfikatów premium' }}</p>
                        </div>
                    </div>
                </div>

                <!-- FILTRY -->
                <div class="bg-white rounded-[3rem] shadow-xl shadow-blue-900/5 border border-gray-100 p-10 mb-8">
                    <div class="flex items-center gap-4 mb-8">
                        <h3 class="text-[10px] font-black text-[#0A2C5C] uppercase tracking-[0.2em]">{{ __('premium.filter_title') ?? 'Filtruj' }}</h3>
                        <div class="h-px flex-1 bg-gray-100"></div>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-6">
                        <div class="space-y-2">
                            <InputLabel :value="__('premium.history_from')" class="block text-[10px] font-black text-gray-400 mb-2 uppercase tracking-widest" />
                            <TextInput
                                v-model="filters.from"
                                type="date"
                                @keyup.enter="updateFilter"
                            />
                        </div>
                        <div class="space-y-2">
                            <InputLabel :value="__('premium.history_to')" class="block text-[10px] font-black text-gray-400 mb-2 uppercase tracking-widest" />
                            <TextInput
                                v-model="filters.to"
                                type="date"
                                @keyup.enter="updateFilter"
                            />
                        </div>
                        <div class="flex flex-col justify-end">
                            <div class="text-[10px] uppercase font-black text-gray-400 mb-2 tracking-widest">{{__('premium.history_sum')}}</div>
                            <div class="text-2xl font-black text-[#0A2C5C]">
                                $ {{ totalAmount ? parseFloat(totalAmount).toLocaleString(undefined, { minimumFractionDigits: 2, maximumFractionDigits: 2 }) : '0.00' }}
                            </div>
                        </div>
                    </div>

                    <div class="flex flex-col sm:flex-row sm:justify-end sm:items-center mt-6 gap-4 pt-6 border-t border-gray-50">
                        <button
                            @click="resetFilters"
                            type="button"
                            class="w-full sm:w-auto px-10 py-4 bg-white border border-gray-100 text-gray-500 text-[10px] font-black uppercase tracking-widest rounded-2xl hover:bg-gray-50 shadow-sm transition-all hover:-translate-y-0.5"
                        >
                            {{__('premium.history_clear_filters') ?? 'Resetuj'}}
                        </button>
                        <button
                            @click="updateFilter"
                            class="w-full sm:w-auto px-10 py-4 bg-[#0A2C5C] text-white text-[10px] font-black uppercase tracking-widest rounded-2xl hover:bg-[#00a0e3] transition-all shadow-lg shadow-blue-900/20 hover:-translate-y-0.5 active:translate-y-0 flex items-center justify-center gap-2"
                        >
                            {{ __('premium.filter_apply') ?? 'Filtruj' }}
                        </button>
                    </div>
                </div>

                <!-- LISTA -->
                <div v-if="histories.data.length === 0" class="bg-white rounded-[3rem] p-20 text-center shadow-xl shadow-blue-900/5 border border-gray-100">
                    <div class="w-20 h-20 bg-gray-50 rounded-full flex items-center justify-center mx-auto mb-6">
                        <svg class="w-10 h-10 text-gray-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                        </svg>
                    </div>
                    <p class="text-xs font-black text-gray-400 uppercase tracking-widest">{{__('premium.certificates.no_history')}}</p>
                </div>

                <div v-else class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                    <div v-for="history in histories.data" :key="history.id" class="group bg-white rounded-[2.5rem] p-8 shadow-sm border border-gray-100 flex flex-col transition-all duration-300 hover:shadow-xl hover:shadow-blue-900/5 hover:-translate-y-1">
                        <div class="mb-6">
                            <div class="flex justify-between items-start mb-2">
                                <p class="text-[10px] font-black text-gray-300 uppercase tracking-[0.2em]">
                                    ID {{ history.id }}
                                </p>
                                <div class="flex items-center gap-2">
                                    <div class="w-2 h-2 rounded-full" :class="{ 'bg-[#00a3e0]': !props.levelColors || !props.levelColors[history.level] }" :style="props.levelColors && props.levelColors[history.level] ? { backgroundColor: props.levelColors[history.level] } : {}"></div>
                                    <span class="text-[8px] font-black uppercase tracking-widest text-gray-400">
                                        {{ levelNames[history.level] ?? `Poziom ${history.level}` }}
                                    </span>
                                </div>
                            </div>
                            <h4 class="text-xl font-black text-gray-900 uppercase tracking-tight leading-tight truncate">
                                {{ levelNames[history.level] ?? `Certyfikat Premium` }}
                            </h4>
                        </div>

                        <div class="bg-gray-50/50 rounded-2xl p-6 border border-gray-100/50 mb-8 flex-grow">
                            <div class="mb-4">
                                <p class="text-[10px] font-black text-gray-400 uppercase tracking-widest mb-1">{{__('premium.history_cost')}}</p>
                                <p class="text-xl font-black text-[#0A2C5C] tracking-tight">
                                    {{ history.amount ? '$ ' + history.amount.toLocaleString(undefined, { minimumFractionDigits: 2, maximumFractionDigits: 2 }) : '-' }}
                                </p>
                            </div>
                            <div>
                                <p class="text-[10px] font-black text-gray-400 uppercase tracking-widest mb-1">{{__('premium.history_date')}}</p>
                                <p class="text-xs font-bold text-gray-500 uppercase tracking-widest">
                                    {{ new Date(history.generated_at).toLocaleDateString() }}
                                </p>
                            </div>
                        </div>

                        <div class="w-full mt-auto">
                            <a :href="route('firm.premium-certificate.downloadFromList', history.id)"
                               class="flex justify-center items-center w-full bg-[#0A2C5C] text-white font-black py-4 rounded-2xl text-[10px] uppercase tracking-widest hover:bg-[#00a0e3] transition shadow-lg shadow-blue-900/10"
                            >
                                {{__('translate.getPdf')}}
                            </a>
                        </div>
                    </div>
                </div>

                <div v-if="histories.total > histories.per_page" class="mt-12 flex justify-center">
                    <Pagination :links="histories.links" />
                </div>
            </div>
        </div>
    </AppLayout>
</template>
