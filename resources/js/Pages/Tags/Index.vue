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
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('translate.tags') }}
            </h2>
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

        <div class="py-8">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white rounded-3xl shadow-sm border border-gray-100 p-6 sm:p-8">
                    <div class="flex justify-between items-center mb-6">
                        <h3 class="text-2xl font-bold text-gray-800 tracking-tight">{{ __('translate.listTag') }}</h3>
                        <Link :href="route('tags.create')">
                            <button class="bg-[#1a335d] text-white px-10 py-3 rounded-xl font-bold text-sm uppercase tracking-widest hover:bg-[#14284b] transition-all active:scale-95 shadow-md">
                                {{ __('translate.create') }}
                            </button>
                        </Link>
                    </div>

                    <!-- Wyszukiwarka -->
                    <div class="mb-6">
                        <div class="relative">
                            <input
                                type="text"
                                v-model="customTagSearchQuery"
                                class="w-full px-6 py-3 border-2 border-gray-50 rounded-2xl shadow-sm focus:outline-none focus:ring-0 focus:border-[#00b0e8] transition-all text-[#1a335d] font-medium placeholder:text-gray-300"
                                :placeholder="__('translate.searchCustomTags')"
                            />
                        </div>
                    </div>

                    <!-- Lista tagów -->
                    <div v-if="filteredCustomTags.length" class="flex flex-wrap gap-3">
                        <div
                            v-for="tag in filteredCustomTags"
                            :key="tag.id"
                            class="pl-4 pr-2 py-2 rounded-2xl flex items-center gap-4 border border-gray-50 shadow-sm transition-all hover:shadow-md"
                            :style="{ backgroundColor: tag.color || '#ccc', color: getContrastColor(tag.color) }"
                        >
                            <span class="font-bold text-sm uppercase tracking-wider">{{ tag.name }}</span>

                            <div class="flex items-center gap-1 bg-white/20 rounded-xl p-1">
                                <!-- Edycja -->
                                <Link :href="route('tags.edit', tag.id)"
                                      class="p-1.5 hover:bg-white/30 rounded-lg transition-colors"
                                      :title="__('translate.edit')"
                                >
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                    </svg>
                                </Link>

                                <!-- Usuwanie -->
                                <button type="button"
                                        @click="openDeleteModal(tag)"
                                        class="p-1.5 hover:bg-red-500/80 hover:text-white rounded-lg transition-colors"
                                        :title="__('translate.delete')"
                                >
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>

                    <div v-else class="py-16 text-center text-gray-400 bg-gray-50/50 rounded-3xl border-2 border-dashed border-gray-100 font-medium">
                        {{ customTagSearchQuery ? __('translate.noMatchingTags') : __('translate.noTagsAvailable') }}
                    </div>
                </div>
            </div>
        </div>
    </AppLayout>
</template>
