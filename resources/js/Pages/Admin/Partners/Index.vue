<script setup>
import AppLayout from "@/Layouts/AppLayout.vue";
import { Link, router } from "@inertiajs/vue3";
import Pagination from "@/Components/Pagination.vue";

const props = defineProps({
    partners: Object
});

const toggleActive = (id) => {
    router.put(route('admin.partners.toggle', id), {}, { preserveScroll: true });
};
</script>

<template>
    <AppLayout :title="__('partners.partners')">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('partners.partners') }}
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-screen-2xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white shadow-xl sm:rounded-lg p-6">
                    <div class="flex justify-between mb-6">
                        <h3 class="text-lg font-medium text-gray-900">
                            Lista partnerów
                        </h3>

                        <Link
                            :href="route('admin.partners.create')"
                            class="px-4 py-2 bg-indigo-600 text-white rounded-md hover:bg-indigo-700"
                        >
                            Dodaj partnera
                        </Link>
                    </div>

                    <div class="overflow-x-auto">
                        <table class="min-w-full divide-y divide-gray-200">
                            <thead class="bg-gray-50">
                            <tr>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">
                                    ID
                                </th>
                                <th class="px-6 py-3">Logo</th>
                                <th class="px-6 py-3">Nazwa</th>
                                <th class="px-6 py-3">Link</th>
                                <th class="px-6 py-3 text-center">Aktywny</th>
                                <th class="px-6 py-3 text-center">Akcje</th>
                            </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                            <tr v-for="p in partners.data" :key="p.id">
                                <td class="px-6 py-4">{{ p.id }}</td>

                                <td class="px-6 py-4">
                                    <img :src="p.logo" alt="" class="h-10 object-contain" />
                                </td>

                                <td class="px-6 py-4">{{ p.name }}</td>

                                <td class="px-6 py-4 text-blue-600 underline">
                                    <a :href="p.link" target="_blank" v-if="p.link">{{ p.link }}</a>
                                    <span v-else class="text-gray-400">Brak</span>
                                </td>

                                <td class="px-6 py-4 text-center">
                                    <button
                                        @click="toggleActive(p.id)"
                                        :class="p.active ? 'bg-green-500' : 'bg-red-500'"
                                        class="px-3 py-1 rounded text-white text-xs"
                                    >
                                        {{ p.active ? 'TAK' : 'NIE' }}
                                    </button>
                                </td>

                                <td class="px-6 py-4 text-center">
                                    <div class="flex gap-3 justify-center">
                                        <Link
                                            :href="route('admin.partners.edit', p.id)"
                                            class="text-indigo-600 hover:text-indigo-900"
                                        >
                                            Edytuj
                                        </Link>

                                        <button
                                            @click="router.delete(route('admin.partners.destroy', p.id))"
                                            class="text-red-600 hover:text-red-900"
                                        >
                                            Usuń
                                        </button>
                                    </div>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="mt-6">
                        <Pagination :links="partners.links" />
                    </div>
                </div>
            </div>
        </div>
    </AppLayout>
</template>
s
