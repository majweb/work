<template>
    <AppLayout title="Akceptacja artykułów">
        <div class="p-8 lg:p-12 space-y-12">
            <!-- Header Section -->
            <div class="flex items-center justify-between">
                <div>
                    <h2 class="text-2xl font-black text-[#0A2C5C] uppercase tracking-tight mb-1">
                        Akceptacja artykułów
                    </h2>
                    <p class="text-[10px] font-bold text-gray-400 uppercase tracking-widest">
                        Zarządzanie artykułami i treściami firmowymi
                    </p>
                </div>
                <div class="flex items-center gap-4">
                    <button
                        @click="toggleFilter"
                        class="px-6 py-3 rounded-xl border border-gray-100 bg-white shadow-sm text-[10px] font-black uppercase tracking-widest transition-all"
                        :class="params.all ? 'text-[#0A2C5C] bg-[#0A2C5C] border-[#0A2C5C]' : 'text-[#0A2C5C] hover:bg-gray-50'"
                    >
                        {{ params.all ? 'Pokaż tylko do akceptacji' : 'Pokaż wszystkie' }}
                    </button>
                </div>
            </div>

            <!-- Table Card -->
            <div class="rounded-[3rem] bg-white shadow-xl shadow-blue-900/5 border border-gray-100 overflow-hidden">
                <div class="p-8">
                    <div class="overflow-x-auto">
                        <table class="w-full text-left border-separate border-spacing-y-3">
                            <thead>
                                <tr class="text-[#0A2C5C]/30 text-[9px] font-black uppercase tracking-widest">
                                    <th class="px-6 py-2 cursor-pointer group" @click="sort('id')">
                                        <div class="flex items-center gap-2 group-hover:text-[#0A2C5C] transition-colors">
                                            ID
                                            <svg v-if="params.field === 'id'" class="w-3 h-3 transition-transform" :class="params.direction === 'asc' ? 'rotate-0' : 'rotate-180'" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="3"><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 15.75l7.5-7.5 7.5 7.5"></path></svg>
                                        </div>
                                    </th>
                                    <th class="px-6 py-2 cursor-pointer group" @click="sort('title')">
                                        <div class="flex items-center gap-2 group-hover:text-[#0A2C5C] transition-colors">
                                            Tytuł
                                            <svg v-if="params.field === 'title'" class="w-3 h-3 transition-transform" :class="params.direction === 'asc' ? 'rotate-0' : 'rotate-180'" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="3"><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 15.75l7.5-7.5 7.5 7.5"></path></svg>
                                        </div>
                                    </th>
                                    <th class="px-6 py-2">Użytkownik</th>
                                    <th class="px-6 py-2" @click="sort('created_at')">Data</th>
                                    <th class="px-6 py-2">Status firmy</th>
                                    <th class="px-6 py-2">Status admin</th>
                                    <th class="px-6 py-2 text-right">Akcje</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr v-if="props.articles.data.length === 0">
                                    <td colspan="6" class="text-center py-16">
                                        <p class="text-xs font-black text-gray-300 uppercase tracking-widest">Nie znaleziono żadnych artykułów</p>
                                    </td>
                                </tr>
                                <tr v-else v-for="article in props.articles.data" :key="article.id" class="group">
                                    <td class="px-6 py-4 bg-gray-50/50 rounded-l-2xl border-y border-l border-gray-100 group-hover:bg-white transition-all">
                                        <span class="text-xs font-black text-[#0A2C5C]">#{{ article.id }}</span>
                                    </td>
                                    <td class="px-6 py-4 bg-gray-50/50 border-y border-gray-100 group-hover:bg-white transition-all">
                                        <span class="text-xs font-black text-[#0A2C5C] line-clamp-1 uppercase tracking-tight">{{ article.title }}</span>
                                    </td>
                                    <td class="px-6 py-4 bg-gray-50/50 border-y border-gray-100 group-hover:bg-white transition-all">
                                        <div class="flex items-center gap-2">
                                            <img v-if="article.user?.profile_photo_url" :src="article.user.profile_photo_url" class="w-6 h-6 rounded-full object-cover shadow-sm">
                                            <div v-else class="w-6 h-6 rounded-full bg-[#0A2C5C] flex items-center justify-center text-[8px] font-black text-white">
                                                {{ article.user?.name?.substring(0, 1).toUpperCase() }}
                                            </div>
                                            <span class="text-xs font-black text-[#0A2C5C] uppercase tracking-tight">{{ article.user?.name }}</span>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 bg-gray-50/50 border-y border-gray-100 group-hover:bg-white transition-all">
                                        <span class="text-[10px] font-bold text-gray-500">{{ new Date(article.created_at).toLocaleDateString() }}</span>
                                    </td>
                                    <td class="px-6 py-4 bg-gray-50/50 border-y border-gray-100 group-hover:bg-white transition-all">
                                        <span v-if="article.active" class="inline-flex items-center gap-1.5 px-2 py-1 rounded-lg bg-green-100 text-[8px] font-black text-green-700 uppercase tracking-widest">
                                            AKTYWNY
                                        </span>
                                        <span v-else class="inline-flex items-center gap-1.5 px-2 py-1 rounded-lg bg-red-100 text-[8px] font-black text-red-700 uppercase tracking-widest">
                                            NIEAKTYWNY
                                        </span>
                                    </td>
                                    <td class="px-6 py-4 bg-gray-50/50 border-y border-gray-100 group-hover:bg-white transition-all">
                                        <span v-if="article.active_admin" class="inline-flex items-center gap-1.5 px-2 py-1 rounded-lg bg-blue-100 text-[8px] font-black text-blue-700 uppercase tracking-widest">
                                            ZAAKCEPTOWANY
                                        </span>
                                        <span v-else class="inline-flex items-center gap-1.5 px-2 py-1 rounded-lg bg-amber-100 text-[8px] font-black text-amber-700 uppercase tracking-widest">
                                            DO AKCEPTACJI
                                        </span>
                                    </td>
                                    <td class="px-6 py-4 bg-gray-50/50 rounded-r-2xl border-y border-r border-gray-100 group-hover:bg-white transition-all text-right">
                                        <div class="flex items-center justify-end gap-2">
                                            <Link :href="route('admin.articles-accepts.show', article)" class="p-2 rounded-lg bg-white border border-gray-100 text-[#0A2C5C] hover:bg-[#0A2C5C] hover:text-white transition-all">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor" class="w-4 h-4">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 0 1 0-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178Z" />
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                                </svg>
                                            </Link>
                                            <button @click="openModal(article)" class="p-2 rounded-lg bg-red-50 text-red-500 hover:bg-red-500 hover:text-white transition-all">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor" class="w-4 h-4">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                                                </svg>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <Pagination v-if="articles.total > articles.per_page" class="mt-8" :links="articles.links" />
                </div>
            </div>

            <!-- Modal -->
            <DialogModal :show="confirmDelete" @close="confirmDelete = false">
                <template #title>
                    <div class="flex items-center gap-4 text-red-600 uppercase font-black tracking-widest text-sm">
                        <div class="w-10 h-10 rounded-xl bg-red-50 flex items-center justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor" class="w-5 h-5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126ZM12 15.75h.007v.008H12v-.008Z" />
                            </svg>
                        </div>
                        Usuwanie artykułu
                    </div>
                </template>

                <template #content>
                    <p class="text-sm font-bold text-[#0A2C5C]/60 uppercase tracking-widest leading-relaxed p-4 bg-gray-50 rounded-2xl border border-gray-100">
                        Czy na pewno chcesz usunąć ten artykuł? Ta operacja jest nieodwracalna.
                    </p>
                </template>

                <template #footer>
                    <div class="flex gap-4">
                        <SecondaryButton @click="confirmDelete = false" class="!rounded-xl !py-3 !px-8 !font-black !uppercase !tracking-widest !text-[10px]">
                            Anuluj
                        </SecondaryButton>

                        <DangerButton @click="deleteArticle" class="!rounded-xl !py-3 !px-8 !font-black !uppercase !tracking-widest !text-[10px] !shadow-xl !shadow-red-500/20">
                            Usuń
                        </DangerButton>
                    </div>
                </template>
            </DialogModal>
        </div>
    </AppLayout>
</template>

<script setup>
import AppLayout from "@/Layouts/AppLayout.vue";
import Pagination from '@/Components/Pagination.vue';
import DangerButton from "@/Components/DangerButton.vue";
import { Link, router } from "@inertiajs/vue3";
import { ref, watch } from "vue";
import { debounce, pickBy } from "lodash";
import DialogModal from "@/Components/DialogModal.vue";
import SecondaryButton from "@/Components/SecondaryButton.vue";

const props = defineProps({
    articles: Object,
    filters: Object
});

const selectedArticle = ref(null);
const confirmDelete = ref(false);

const params = ref({
    field: props.filters.field,
    direction: props.filters.direction,
    all: props.filters.all === 'true' || props.filters.all === true,
});

const openModal = (article) => {
    confirmDelete.value = true;
    selectedArticle.value = article;
}

const deleteArticle = () => {
    if (selectedArticle.value) {
        router.delete(route('admin.articles-accepts.destroy', selectedArticle.value), {
            onSuccess: () => {
                confirmDelete.value = false;
                selectedArticle.value = null;
            }
        });
    }
};

const sort = (field) => {
    params.value.field = field;
    params.value.direction = params.value.direction === 'asc' ? 'desc' : 'asc';
}

const toggleFilter = () => {
    params.value.all = !params.value.all;
}

watch(params.value, debounce(function (value) {
    let rest = pickBy(params.value);
    router.get(route('admin.articles-accepts.index'), rest, { preserveState: true, replace: true });
}, 300));
</script>
