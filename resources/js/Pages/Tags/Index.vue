<script setup>
import { Link, router } from '@inertiajs/vue3';
import AppLayout from '@/Layouts/AppLayout.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import DialogModal from '@/Components/DialogModal.vue';
import { ref, computed } from 'vue';
import __ from "@/lang.js";

const props = defineProps({
    tags: Array,
});

// Wyszukiwarka tagów
const customTagSearchQuery = ref('');

// Filtrowanie tagów według wyszukiwarki
const filteredCustomTags = computed(() => {
    if (!customTagSearchQuery.value) return props.tags;
    return props.tags.filter(tag => tag.name.toLowerCase().includes(customTagSearchQuery.value.toLowerCase()));
});

// Stan dla modalu usuwania
const showDeleteModal = ref(false);
const tagToDelete = ref(null);

// Otwiera modal potwierdzenia usunięcia
const openDeleteModal = (tag) => {
    tagToDelete.value = tag;
    showDeleteModal.value = true;
};

// Zamyka modal potwierdzenia usunięcia
const closeDeleteModal = () => {
    showDeleteModal.value = false;
    setTimeout(() => {
        tagToDelete.value = null;
    }, 300);
};

// Usuwa tag
const deleteTag = () => {
    if (tagToDelete.value) {
        router.delete(route('tags.destroy', tagToDelete.value.id), {
            preserveScroll: true,
            onSuccess: () => closeDeleteModal()
        });
    }
};

// Kontrast tekstu w zależności od tła
const getContrastColor = (bgColor) => {
    if (!bgColor) return '#000';
    const color = bgColor.replace('#', '');
    const r = parseInt(color.substr(0,2),16);
    const g = parseInt(color.substr(2,2),16);
    const b = parseInt(color.substr(4,2),16);
    return (r*0.299 + g*0.587 + b*0.114) > 186 ? '#000' : '#fff';
};
</script>

<template>
    <AppLayout :title="__('translate.tags')">
        <template #header>
            <div class="flex justify-between items-center">
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

        <!-- Modal potwierdzenia usunięcia -->
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
                <div class="bg-white shadow-xl sm:rounded-lg p-6">
                    <!-- Header -->
                    <div class="mb-6">
                        <h1 class="text-2xl font-semibold text-gray-900">
                            {{ __('translate.listTag') }}
                        </h1>
                        <p class="mt-1 text-sm text-gray-500">
                            {{__('translate.listTagInfo')}}
                        </p>
                    </div>
                    <!-- Wyszukiwarka -->
                    <div class="mb-3">
                        <input
                            type="text"
                            v-model="customTagSearchQuery"
                            class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500"
                            :placeholder="__('translate.searchCustomTags')"
                        />
                    </div>

                    <!-- Lista tagów -->
                    <div class="flex flex-wrap gap-2">
                        <span
                            v-for="tag in filteredCustomTags"
                            :key="tag.id"
                            class="px-3 py-1 rounded-full text-sm font-medium flex items-center gap-2"
                            :style="{ backgroundColor: tag.color || '#ccc', color: getContrastColor(tag.color) }"
                        >
                            {{ tag.name }}
                            <!-- Edycja -->
                                <Link :href="route('tags.edit', tag.id)" class="ml-1 text-blue-500 hover:underline text-xs">
                                                {{ __('translate.edit') }}
                                            </Link>
                            <!-- Usuwanie -->
                            <button type="button" @click="openDeleteModal(tag)" class="ml-1 text-red-500 hover:underline text-xs">
                                {{ __('translate.delete') }}
                            </button>
                        </span>

                        <span v-if="filteredCustomTags.length === 0" class="text-gray-500 text-sm">
                            {{ customTagSearchQuery ? __('translate.noMatchingTags') : __('translate.noTagsAvailable') }}
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </AppLayout>
</template>
