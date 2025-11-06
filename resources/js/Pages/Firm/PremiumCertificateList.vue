<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import Pagination from "@/Components/Pagination.vue";
import { router } from '@inertiajs/vue3';
import pickBy from 'lodash/pickBy';

const props = defineProps({
    histories: Object,
    levelNames: Object,
    filters: Object,
    totalAmount: String,
});

// Odświeża listę po zmianie dat
const updateFilter = () => {
    const filters = pickBy({
        from: props.filters.from,
        to: props.filters.to,
    }, value => value !== null && value !== '' && value !== undefined);

    router.get(route('firm.premium-certificate.list'), filters, {
        preserveState: true,
        replace: true,
    });
};

const resetFilters = () => {
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
                <div class="bg-white dark:bg-gray-800 shadow sm:rounded-lg p-6 mb-6">
                    <div class="flex flex-col md:flex-row items-center gap-4">
                        <div>
                            <label class="text-sm">{{__('premium.history_from')}}</label>
                            <input type="date" v-model="props.filters.from" @change="updateFilter"
                                   class="border rounded px-2 py-1">
                        </div>

                        <div>
                            <label class="text-sm">{{__('premium.history_to')}}</label>
                            <input type="date" v-model="props.filters.to" @change="updateFilter"
                                   class="border rounded px-2 py-1">
                        </div>

                        <button
                            @click="resetFilters"
                            class="px-4 py-2 text-sm bg-gray-200 hover:bg-gray-300 dark:bg-gray-700 dark:hover:bg-gray-600 rounded transition"
                        >
                            {{__('premium.history_clear_filters')}}
                        </button>

                        <div class="ml-auto text-lg font-semibold text-[#143d8c]">
                            {{__('premium.history_sum')}} $ {{ totalAmount ? totalAmount.toLocaleString() : 0 }}
                        </div>
                    </div>
                </div>

                <!-- LISTA -->
                <div class="bg-white dark:bg-gray-800 shadow sm:rounded-lg p-6">
                    <table class="w-full text-left border-collapse">
                        <thead>
                        <tr class="border-b text-gray-700 dark:text-gray-300">
                            <th class="py-3">{{__('premium.history_level')}}</th>
                            <th class="py-3">{{__('premium.history_cost')}}</th>
                            <th class="py-3">{{__('premium.history_date')}}</th>
                            <th class="py-3 text-right">{{__('translate.actions')}}</th>
                        </tr>
                        </thead>

                        <tbody>
                        <tr v-for="history in histories.data" :key="history.id" class="border-b">
                            <td class="py-3">
                                {{ levelNames[history.level] ?? `Poziom ${history.level}` }}
                            </td>
                            <td class="py-3">
                                {{ history.amount ? '$ ' + history.amount.toLocaleString() : '-' }}
                            </td>
                            <td class="py-3">
                                {{ new Date(history.generated_at).toLocaleDateString() }}
                            </td>
                            <td class="py-3 text-right">
                                <a :href="route('firm.premium-certificate.downloadFromList', history.id)"
                                   class="px-4 py-1.5 bg-[#143d8c] text-white text-sm rounded hover:bg-[#0f2d66] transition">
                                    {{__('translate.getPdf')}}
                                </a>
                            </td>
                        </tr>
                        </tbody>
                    </table>

                    <Pagination class="mt-8" :links="histories.links" />
                </div>
            </div>
        </div>
    </AppLayout>
</template>
