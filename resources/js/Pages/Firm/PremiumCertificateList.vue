<script setup>
import { ref } from 'vue';
import AppLayout from '@/Layouts/AppLayout.vue';
import Pagination from "@/Components/Pagination.vue";
import { router } from '@inertiajs/vue3';
import pickBy from 'lodash/pickBy';

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
    <AppLayout title="Historia certyfikatów">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{__('premium.history_certyficate')}}
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

                <!-- FILTRY -->
                <div class="bg-white dark:bg-gray-800 shadow-xl rounded-3xl p-8 mb-8 border border-gray-100 dark:border-gray-700">
                    <div class="flex items-center justify-between mb-6">
                        <h3 class="text-2xl font-bold text-work-main uppercase tracking-wider">{{ __('premium.filter_title') ?? 'Filtruj' }}</h3>
                    </div>

                    <div class="flex flex-col md:flex-row items-end gap-6">
                        <div class="w-full md:w-auto">
                            <label class="block text-xs font-bold uppercase text-work-main mb-2 tracking-tighter">{{__('premium.history_from')}}</label>
                            <input type="date" v-model="filters.from"
                                   class="w-full md:w-48 border-2 border-gray-200 rounded-xl px-4 py-2.5 text-sm focus:outline-none focus:ring-2 focus:ring-blue-work focus:border-transparent bg-white dark:bg-gray-900 dark:text-gray-100 dark:border-gray-700 transition-all duration-200"/>
                        </div>

                        <div class="w-full md:w-auto">
                            <label class="block text-xs font-bold uppercase text-work-main mb-2 tracking-tighter">{{__('premium.history_to')}}</label>
                            <input type="date" v-model="filters.to"
                                   class="w-full md:w-48 border-2 border-gray-200 rounded-xl px-4 py-2.5 text-sm focus:outline-none focus:ring-2 focus:ring-blue-work focus:border-transparent bg-white dark:bg-gray-900 dark:text-gray-100 dark:border-gray-700 transition-all duration-200"/>
                        </div>

                        <div class="flex items-center gap-4 w-full md:w-auto">
                            <button
                                @click="updateFilter"
                                class="flex-1 md:flex-none px-8 py-2.5 bg-blue-work text-white rounded-xl font-bold uppercase text-sm hover:bg-work-main-light transition-all duration-200 shadow-lg shadow-blue-work/20"
                            >
                                {{ __('premium.filter_apply') ?? 'Filtruj' }}
                            </button>
                            <button
                                @click="resetFilters"
                                class="flex-1 md:flex-none px-8 py-2.5 bg-white text-work-main border-2 border-work-main rounded-xl font-bold uppercase text-sm hover:bg-gray-50 transition-all duration-200 dark:bg-gray-900 dark:text-gray-100 dark:border-gray-600 dark:hover:bg-gray-800"
                            >
                                {{__('premium.history_clear_filters') ?? 'Resetuj'}}
                            </button>
                        </div>

                        <div class="md:ml-auto w-full md:w-auto text-right md:text-left">
                            <div class="text-xs uppercase font-bold text-gray-500 mb-1 tracking-widest">{{__('premium.history_sum')}}</div>
                            <div class="text-2xl font-black text-work-main">
                                $ {{ totalAmount ? totalAmount.toLocaleString() : 0 }}
                            </div>
                        </div>
                    </div>
                </div>

                <!-- LISTA -->
                <div class="bg-white dark:bg-gray-800 shadow-xl rounded-3xl p-8 border border-gray-100 dark:border-gray-700">
                    <div class="overflow-x-auto">
                        <table class="w-full text-left border-collapse">
                            <thead>
                            <tr class="border-b-2 border-gray-100 dark:border-gray-700">
                                <th class="pb-4 text-work-main uppercase text-xs font-black tracking-widest">{{__('premium.history_level')}}</th>
                                <th class="pb-4 text-work-main uppercase text-xs font-black tracking-widest">{{__('premium.history_cost')}}</th>
                                <th class="pb-4 text-work-main uppercase text-xs font-black tracking-widest">{{__('premium.history_date')}}</th>
                                <th class="pb-4 text-right text-work-main uppercase text-xs font-black tracking-widest">{{__('translate.actions')}}</th>
                            </tr>
                            </thead>

                            <tbody class="divide-y divide-gray-50 dark:divide-gray-700">
                            <tr v-for="history in histories.data" :key="history.id" class="group hover:bg-gray-50/50 dark:hover:bg-gray-700/30 transition-colors duration-150">
                                <td class="py-5">
                                    <div class="flex items-center gap-3">
                                        <div class="w-2 h-2 rounded-full" :class="{ 'bg-blue-work': !props.levelColors || !props.levelColors[history.level] }" :style="props.levelColors && props.levelColors[history.level] ? { backgroundColor: props.levelColors[history.level] } : {}"></div>
                                        <span class="font-bold uppercase text-gray-900 dark:text-gray-100 tracking-tight">
                                            {{ levelNames[history.level] ?? `Poziom ${history.level}` }}
                                        </span>
                                    </div>
                                </td>
                                <td class="py-5 font-black text-work-main dark:text-blue-work text-lg">
                                    {{ history.amount ? '$ ' + history.amount.toLocaleString() : '-' }}
                                </td>
                                <td class="py-5 text-gray-500 dark:text-gray-400 font-medium">
                                    {{ new Date(history.generated_at).toLocaleDateString() }}
                                </td>
                                <td class="py-5 text-right">
                                    <a :href="route('firm.premium-certificate.downloadFromList', history.id)"
                                       class="inline-flex items-center gap-2 px-6 py-2 bg-work-main text-white text-[10px] font-black rounded-lg hover:bg-blue-work transition-all duration-200 uppercase tracking-[0.2em] shadow-md hover:shadow-lg">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-3.5 w-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4" />
                                        </svg>
                                        {{__('translate.getPdf')}}
                                    </a>
                                </td>
                            </tr>
                            <!-- Jeśli brak wyników -->
                            <tr v-if="!histories.data.length">
                                <td colspan="4" class="py-12 text-center">
                                    <div class="flex flex-col items-center gap-4">
                                        <div class="w-16 h-16 rounded-full bg-gray-50 dark:bg-gray-700 flex items-center justify-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-gray-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                                            </svg>
                                        </div>
                                        <span class="text-gray-500 font-medium tracking-tight">{{__('premium.certificates.no_history')}}</span>
                                    </div>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>

                    <Pagination class="mt-8" :links="histories.links" />
                </div>
            </div>
        </div>
    </AppLayout>
</template>
