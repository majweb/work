<script setup>
import { Link, router } from '@inertiajs/vue3';
import AppLayout from '@/Layouts/AppLayout.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import DialogModal from '@/Components/DialogModal.vue';
import { ref } from 'vue';

defineProps({
    tags: Array,
});

// Stan dla modalu usuwania
const showDeleteModal = ref(false);
const tagToDelete = ref(null);

// Otwiera modal potwierdzenia usunięcia
const openDeleteModal = (company) => {
    tagToDelete.value = company;
    showDeleteModal.value = true;
};

// Zamyka modal potwierdzenia usunięcia
const closeDeleteModal = () => {
    showDeleteModal.value = false;
    setTimeout(() => {
        tagToDelete.value = null;
    }, 300);
};

// Usuwa firmę zewnętrzną
const deleteTag = () => {
    if (tagToDelete.value) {
        router.delete(route('tags.destroy', tagToDelete.value.id), {
            preserveScroll: true,
            onSuccess: () => closeDeleteModal()
        });
    }
};
</script>

<template>
    <AppLayout :title="__('translate.tags')">
        <template #header>
            <div class="flex justify-between">
                <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                    {{ __('translate.tags') }}
                </h2>
                <Link :href="route('tags.create')">
                    <PrimaryButton>
                        {{ __('translate.create') }}
                    </PrimaryButton>
                </Link>
            </div>
        </template>

        <!-- Modal potwierdzenia usunięcia firmy zewnętrznej -->
        <DialogModal :show="showDeleteModal" @close="closeDeleteModal">
            <template #title>
                {{ __('translate.deleteTag') }}
            </template>

            <template #content>
                <div class="mt-2">
                    <p class="text-sm text-gray-600">{{ __('translate.confirmDeleteTag') }}</p>
                </div>
            </template>

            <template #footer>
                <button
                    type="button"
                    class="inline-flex justify-center px-4 py-2 bg-white border border-gray-300 rounded-md font-semibold text-xs text-gray-700 uppercase tracking-widest shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 disabled:opacity-25 transition"
                    @click="closeDeleteModal"
                >
                    {{ __('translate.cancel') }}
                </button>
                <button
                    type="button"
                    class="ml-2 inline-flex justify-center px-4 py-2 bg-red-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2 disabled:opacity-25 transition"
                    @click="deleteTag"
                >
                    {{ __('translate.delete') }}
                </button>
            </template>
        </DialogModal>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6">
                    <div class="overflow-x-auto">

                        <table class="min-w-full divide-y divide-gray-200" v-if="tags.length">
                            <thead class="bg-gray-50">
                            <tr>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    {{ __('translate.name') }}
                                </th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    {{ __('translate.actions') }}
                                </th>
                            </tr>
                            </thead>

                            <tbody>
                                <tr class="h-16 border-gray-300 border-b" v-for="company in tags" :key="company.id">
                                    <td class="pl-8 pr-6 text-left whitespace-no-wrap text-sm text-gray-800 tracking-normal leading-4">{{ company.name }}</td>
                                    <td class="pr-6 text-left whitespace-no-wrap text-sm text-gray-800 tracking-normal leading-4">
                                        <div class="flex items-center">
                                            <Link :href="route('external-companies.edit', company.id)" class="text-blue-500 mr-4">
                                                {{ __('translate.edit') }}
                                            </Link>
                                            <button type="button" class="text-red-500" @click="openDeleteModal(company)">
                                                {{ __('translate.delete') }}
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <div v-else class="flex items-center justify-center h-24 text-gray-500">
                            {{ __('translate.noTags') }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </AppLayout>
</template>
