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
                <div class="text-lg font-black text-gray-900 uppercase tracking-tight">
                    {{ __('translate.deleteTag') }}
                </div>
            </template>

            <template #content>
                <div class="mt-4">
                    <p class="text-sm font-bold text-gray-400 uppercase tracking-widest leading-relaxed">
                        {{ __('translate.confirmDeleteTag') }}
                    </p>
                </div>
            </template>

            <template #footer>
                <div class="flex gap-3">
                    <button
                        type="button"
                        class="px-8 py-3 bg-white border border-gray-100 text-gray-500 text-[10px] font-black uppercase tracking-widest rounded-xl hover:bg-gray-50 transition-all"
                        @click="closeDeleteModal"
                    >
                        {{ __('translate.cancel') }}
                    </button>
                    <button
                        type="button"
                        class="px-8 py-3 bg-red-600 text-white text-[10px] font-black uppercase tracking-widest rounded-xl hover:bg-red-700 shadow-lg shadow-red-600/20 transition-all"
                        @click="deleteTag"
                    >
                        {{ __('translate.delete') }}
                    </button>
                </div>
            </template>
        </DialogModal>

        <div class="py-12 bg-gray-50/50 min-h-screen">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white rounded-[3rem] shadow-xl shadow-blue-900/5 border border-gray-100 p-10">
                    <div class="flex items-center justify-between mb-10">
                        <div>
                            <h3 class="text-2xl font-black text-gray-900 uppercase tracking-tight">{{ __('translate.listTag') }}</h3>
                            <p class="text-[10px] font-bold text-gray-400 uppercase tracking-widest mt-1">Zarządzaj dostępnymi tagami</p>
                        </div>
                        <Link :href="route('tags.create')">
                            <button class="bg-[#0A2C5C] text-white px-10 py-4 rounded-2xl font-black text-[10px] uppercase tracking-widest hover:bg-blue-800 transition-all hover:-translate-y-0.5 shadow-lg shadow-blue-900/20">
                                {{ __('translate.create') }}
                            </button>
                        </Link>
                    </div>

                    <!-- Wyszukiwarka -->
                    <div class="mb-10">
                        <div class="flex items-center gap-4 mb-4">
                            <h3 class="text-[10px] font-black text-[#0A2C5C] uppercase tracking-[0.2em]">{{ __('translate.search') }}</h3>
                            <div class="h-px flex-1 bg-gray-100"></div>
                        </div>
                        <div class="relative">
                            <input
                                type="text"
                                v-model="customTagSearchQuery"
                                class="w-full px-6 py-4 text-xs rounded-2xl border-gray-100 bg-gray-50 focus:bg-white focus:ring-0 focus:border-[#00a0e3] transition-all text-[#0A2C5C] font-bold tracking-widest uppercase placeholder:text-gray-300"
                                :placeholder="__('translate.searchCustomTags')"
                            />
                        </div>
                    </div>

                    <!-- Lista tagów -->
                    <div v-if="filteredCustomTags.length">
                        <div class="flex items-center gap-4 mb-6">
                            <h3 class="text-[10px] font-black text-[#0A2C5C] uppercase tracking-[0.2em]">{{ __('translate.tags') }}</h3>
                            <div class="h-px flex-1 bg-gray-100"></div>
                        </div>
                        <div class="flex flex-wrap gap-4">
                            <div
                                v-for="tag in filteredCustomTags"
                                :key="tag.id"
                                class="pl-6 pr-4 py-3 rounded-full flex items-center gap-6 border border-gray-100 shadow-sm transition-all hover:shadow-md hover:-translate-y-0.5"
                                :style="{ backgroundColor: tag.color || '#ccc', color: getContrastColor(tag.color) }"
                            >
                                <span class="font-black text-[10px] uppercase tracking-widest">{{ tag.name }}</span>

                                <div class="flex items-center gap-1 bg-white/20 rounded-xl p-1">
                                    <!-- Edycja -->
                                    <Link :href="route('tags.edit', tag.id)"
                                          class="p-2 hover:bg-white/30 rounded-lg transition-colors"
                                          :title="__('translate.edit')"
                                    >
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                        </svg>
                                    </Link>

                                    <!-- Usuwanie -->
                                    <button type="button"
                                            @click="openDeleteModal(tag)"
                                            class="p-2 hover:bg-red-500/80 hover:text-white rounded-lg transition-colors"
                                            :title="__('translate.delete')"
                                    >
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div v-else class="py-20 text-center bg-gray-50/50 rounded-[3rem] border border-dashed border-gray-200">
                        <p class="text-[10px] font-black text-gray-400 uppercase tracking-widest">
                            {{ customTagSearchQuery ? __('translate.noMatchingTags') : __('translate.noTagsAvailable') }}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </AppLayout>
</template>
