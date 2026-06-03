<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import { Link, router } from '@inertiajs/vue3';
import moment from "moment";
import DialogModal from '@/Components/DialogModal.vue';
import { ref, computed } from 'vue';

const props = defineProps({
    article: Object
});

const showDeleteModal = ref(false);

const closeDeleteModal = () => {
    showDeleteModal.value = false;
};

const deleteArticle = () => {
    router.delete(route('admin.articles-accepts.destroy', props.article.id), {
        onSuccess: () => closeDeleteModal()
    });
};

const toggleAccept = () => {
    router.put(route('admin.articles-accepts.accept', props.article.id), {}, {
        preserveScroll: true
    });
};

const getMediaUrl = (article) => {
    return article.media?.[0]?.original_url || '';
};

const toggleCommentVisibility = async (comment) => {
    try {
        await axios.post(route('comments.toggle-visibility', comment.id));
        comment.show = !comment.show;
    } catch (error) {
        console.error('Błąd podczas zmiany widoczności komentarza:', error);
    }
};

const perPage = 4;
const currentPage = ref(1);
const totalPages = computed(() => {
    return Math.ceil((props.article.comments?.length || 0) / perPage) || 1;
});
const paginatedComments = computed(() => {
    const start = (currentPage.value - 1) * perPage;
    const end = start + perPage;
    return props.article.comments?.slice(start, end) || [];
});
const goToPage = (page) => {
    if (page >= 1 && page <= totalPages.value) {
        currentPage.value = page;
    }
};
</script>

<template>
    <AppLayout title="Szczegóły artykułu">
        <div class="p-8 lg:p-12 space-y-12">
            <!-- Header Section -->
            <div class="flex items-center justify-between">
                <div class="flex items-center gap-4">
                    <Link :href="route('admin.articles-accepts.index')"
                          class="w-10 h-10 rounded-xl bg-white shadow-sm border border-gray-100 flex items-center justify-center text-[#0A2C5C] hover:bg-gray-50 transition-all">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="3" stroke="currentColor" class="w-4 h-4">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5 3 12m0 0 7.5-7.5M3 12h18" />
                        </svg>
                    </Link>
                    <div>
                        <h2 class="text-2xl font-black text-[#0A2C5C] uppercase tracking-tight mb-1">
                            Artykuł <span class="text-blue-400">#{{ article.id }}</span>
                        </h2>
                        <p class="text-[10px] font-bold text-gray-400 uppercase tracking-widest">
                            Podgląd i akceptacja artykułu firmowego
                        </p>
                    </div>
                </div>

                <div class="flex items-center gap-3">
                    <button
                        v-if="!article.active_admin"
                        @click="toggleAccept"
                        class="px-6 py-3 rounded-xl bg-blue-500 text-white font-black text-[10px] uppercase tracking-widest shadow-lg shadow-blue-500/10 hover:bg-blue-600 transition-all"
                    >
                        AKCEPTUJ ARTYKUŁ
                    </button>
                    <button
                        v-else
                        @click="toggleAccept"
                        class="px-6 py-3 rounded-xl bg-green-500 text-white font-black text-[10px] uppercase tracking-widest shadow-lg shadow-green-500/10 flex items-center gap-2"
                    >
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="3" stroke="currentColor" class="w-3 h-3">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                        </svg>
                        AKTYWNY (COFNIJ AKCEPTACJĘ)
                    </button>

                    <button @click="showDeleteModal = true"
                            class="px-6 py-3 rounded-xl bg-red-50 text-red-500 font-black text-[10px] uppercase tracking-widest border border-red-100 hover:bg-red-500 hover:text-white transition-all">
                        USUŃ
                    </button>
                </div>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                <!-- Content Column -->
                <div class="lg:col-span-2 space-y-8">
                    <div class="rounded-[3rem] bg-white shadow-xl shadow-blue-900/5 border border-gray-100 overflow-hidden">
                        <div class="px-10 py-8 border-b border-gray-50 bg-gradient-to-r from-white to-gray-50/30">
                            <h3 class="text-xl font-black tracking-tight text-[#0A2C5C] uppercase">{{ article.title }}</h3>
                        </div>
                        <div class="p-10">
                            <div v-if="getMediaUrl(article)" class="mb-10 bg-gray-50 rounded-2xl p-4 border border-gray-100 flex justify-center">
                                <img :src="getMediaUrl(article)" class="max-w-full rounded-xl shadow-sm h-auto" alt="Article Cover">
                            </div>

                            <div class="prose prose-blue max-w-none text-[#0A2C5C] leading-relaxed font-medium" v-html="article.content"></div>

                            <div v-if="article.short_description" class="mt-10 p-6 bg-blue-50/50 rounded-2xl border border-blue-100">
                                <h4 class="text-[10px] font-black text-[#0A2C5C] uppercase tracking-widest mb-3">Krótki opis (Lead)</h4>
                                <p class="text-xs text-[#0A2C5C] opacity-80">{{ article.short_description }}</p>
                            </div>
                        </div>
                    </div>

                    <!-- SEO Section -->
                    <div class="rounded-[3rem] bg-white shadow-xl shadow-blue-900/5 border border-gray-100 overflow-hidden">
                        <div class="px-10 py-8 border-b border-gray-50 bg-gradient-to-r from-white to-gray-50/30">
                            <h3 class="text-xl font-black tracking-tight text-[#0A2C5C] uppercase">Metadane SEO</h3>
                        </div>
                        <div class="p-10 space-y-6">
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                                <div>
                                    <label class="text-[9px] font-black text-gray-400 uppercase tracking-widest">Meta Title</label>
                                    <p class="mt-2 text-xs font-bold text-[#0A2C5C]">{{ article.meta_title || 'Brak' }}</p>
                                </div>
                                <div>
                                    <label class="text-[9px] font-black text-gray-400 uppercase tracking-widest">Meta Keywords</label>
                                    <p class="mt-2 text-xs font-bold text-[#0A2C5C]">{{ article.meta_keywords || 'Brak' }}</p>
                                </div>
                            </div>
                            <div>
                                <label class="text-[9px] font-black text-gray-400 uppercase tracking-widest">Meta Description</label>
                                <p class="mt-2 text-xs font-bold text-[#0A2C5C] leading-relaxed">{{ article.meta_description || 'Brak' }}</p>
                            </div>
                        </div>
                    </div>

                    <!-- Comments Section for Admin -->
                    <div class="rounded-[3rem] bg-white shadow-xl shadow-blue-900/5 border border-gray-100 overflow-hidden">
                        <div class="px-10 py-8 border-b border-gray-50 bg-gradient-to-r from-white to-gray-50/30 flex items-center justify-between">
                            <h3 class="text-xl font-black tracking-tight text-[#0A2C5C] uppercase">Komentarze</h3>
                            <span class="text-[10px] font-black text-gray-400 uppercase tracking-widest">Razem: {{ article.comments?.length || 0 }}</span>
                        </div>
                        <div class="p-10 space-y-6">
                            <div v-if="(article.comments?.length || 0) > 0" class="space-y-6">
                                <div v-for="comment in paginatedComments" :key="comment.id" class="bg-white p-6 rounded-2xl border border-gray-100">
                                    <div class="flex items-start justify-between gap-4">
                                        <div>
                                            <p class="text-xs font-black text-[#0A2C5C] uppercase tracking-widest mb-1">{{ comment.user?.name || 'Użytkownik' }}</p>
                                            <p class="text-[10px] font-bold text-gray-300 uppercase tracking-widest">{{ new Date(comment.created_at).toLocaleDateString() }}</p>
                                        </div>
                                        <button @click="toggleCommentVisibility(comment)" type="button"
                                                class="px-4 py-2 rounded-xl text-white text-[10px] font-black uppercase tracking-widest transition-all"
                                                :class="comment.show ? 'bg-[#e31e24] hover:bg-red-600 shadow-red-900/10' : 'bg-green-500 hover:bg-green-600 shadow-green-900/10'">
                                            {{ comment.show ? 'Ukryj' : 'Pokaż' }}
                                        </button>
                                    </div>
                                    <p class="mt-4 text-sm font-medium text-[#0A2C5C] leading-relaxed">"{{ comment.content }}"</p>

                                    <div v-if="comment.replies?.length" class="mt-4 space-y-4 bg-blue-50/30 p-6 rounded-2xl border-l-4 border-blue-200">
                                        <div v-for="reply in comment.replies" :key="reply.id" class="border-b last:border-0 border-blue-100/60 pb-3">
                                            <div class="flex items-center justify-between gap-4">
                                                <p class="text-[10px] font-black text-[#00a3e0] uppercase tracking-widest mb-0.5">{{ reply.user?.name || 'Użytkownik' }}</p>
                                                <button type="button" @click="toggleCommentVisibility(reply)"
                                                        class="px-3 py-1.5 rounded-lg text-white text-[9px] font-black uppercase tracking-widest transition-all"
                                                        :class="reply.show ? 'bg-[#e31e24] hover:bg-red-600' : 'bg-green-500 hover:bg-green-600'">
                                                    {{ reply.show ? 'Ukryj' : 'Pokaż' }}
                                                </button>
                                            </div>
                                            <p class="text-xs text-[#0A2C5C]">"{{ reply.content }}"</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="flex items-center justify-center gap-2 mt-6" v-if="totalPages > 1">
                                    <button class="px-3 py-1.5 rounded-lg border border-gray-200 text-[10px] font-black uppercase tracking-widest hover:bg-gray-50"
                                            @click="goToPage(currentPage - 1)" :disabled="currentPage === 1">Prev</button>
                                    <span class="text-[10px] font-black text-gray-400 uppercase tracking-widest">{{ currentPage }} / {{ totalPages }}</span>
                                    <button class="px-3 py-1.5 rounded-lg border border-gray-200 text-[10px] font-black uppercase tracking-widest hover:bg-gray-50"
                                            @click="goToPage(currentPage + 1)" :disabled="currentPage === totalPages">Next</button>
                                </div>
                            </div>
                            <div v-else class="text-center py-6 text-gray-300 font-black uppercase tracking-widest text-[10px]">
                                Brak komentarzy
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Info Column -->
                <div class="space-y-8">
                    <!-- User Card -->
                    <div class="rounded-[3rem] bg-white shadow-xl shadow-blue-900/5 border border-gray-100 overflow-hidden">
                        <div class="px-10 py-8 border-b border-gray-50 bg-gradient-to-r from-white to-blue-50/20">
                            <h3 class="text-lg font-black tracking-tight text-[#0A2C5C] uppercase">Użytkownik</h3>
                        </div>
                        <div class="p-8 text-center flex flex-col items-center">
                            <img v-if="article.user?.name === 'Work4you.global'" src="/images/logo-invoice.png" class="w-16 h-16 rounded-full object-contain shadow-lg shadow-blue-900/10 mb-4 border-2 border-white">
                            <img v-else-if="article.user?.profile_photo_url" :src="article.user.profile_photo_url" class="w-16 h-16 rounded-full object-cover shadow-lg shadow-blue-900/10 mb-4 border-2 border-white">
                            <div v-else class="w-16 h-16 rounded-full bg-[#0A2C5C] shadow-lg shadow-blue-900/10 flex items-center justify-center text-2xl font-black text-white mb-4">
                                {{ article.user?.name?.substring(0, 1).toUpperCase() }}
                            </div>
                            <p class="text-sm font-black text-[#0A2C5C] uppercase tracking-tight">{{ article.user?.name }}</p>
                            <p class="text-[10px] font-bold text-gray-400 uppercase tracking-widest mt-1">ID Użytkownika: #{{ article.user_id }}</p>

                            <div class="w-full mt-8 pt-8 border-t border-gray-50 flex flex-col gap-4">
                                <div class="flex justify-between items-center text-[10px] font-black uppercase tracking-widest">
                                    <span class="text-gray-400">Data dodania</span>
                                    <span class="text-[#0A2C5C]">{{ moment(article.created_at).format('DD.MM.YYYY') }}</span>
                                </div>
                                <div class="flex justify-between items-center text-[10px] font-black uppercase tracking-widest">
                                    <span class="text-gray-400">Język</span>
                                    <span class="text-[#0A2C5C] uppercase">{{ article.lang }}</span>
                                </div>
                                <div class="flex justify-between items-center text-[10px] font-black uppercase tracking-widest">
                                    <span class="text-gray-400">Status firmy</span>
                                    <span :class="article.active ? 'text-green-500' : 'text-red-500'">{{ article.active ? 'AKTYWNY' : 'NIEAKTYWNY' }}</span>
                                </div>
                                <div class="flex justify-between items-center text-[10px] font-black uppercase tracking-widest">
                                    <span class="text-gray-400">Status admin</span>
                                    <span :class="article.active_admin ? 'text-green-500' : 'text-amber-500'">{{ article.active_admin ? 'ZAAKCEPTOWANY' : 'DO AKCEPTACJI' }}</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Category Card -->
                    <div class="rounded-[3rem] bg-white shadow-xl shadow-blue-900/5 border border-gray-100 overflow-hidden">
                        <div class="px-10 py-8 border-b border-gray-50 bg-gradient-to-r from-white to-blue-50/20">
                            <h3 class="text-lg font-black tracking-tight text-[#0A2C5C] uppercase">Kategoria</h3>
                        </div>
                        <div class="p-8">
                            <div v-if="article.category" class="flex flex-wrap gap-2">
                                <span class="px-3 py-1.5 rounded-lg bg-gray-50 border border-gray-100 text-[10px] font-black text-[#0A2C5C] uppercase tracking-widest">
                                    {{ article.category.name || 'Brak nazwy' }}
                                </span>
                            </div>
                            <div v-else class="text-center py-4 text-gray-300 font-black uppercase tracking-widest text-[10px]">
                                Brak przypisanej kategorii
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Delete Modal -->
            <DialogModal :show="showDeleteModal" @close="closeDeleteModal">
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
                        <button
                            type="button"
                            class="px-8 py-3 rounded-xl bg-white border border-gray-200 text-[#0A2C5C] font-black text-[10px] uppercase tracking-widest hover:bg-gray-50 transition-all"
                            @click="closeDeleteModal"
                        >
                            ANULUJ
                        </button>
                        <button
                            type="button"
                            class="px-8 py-3 rounded-xl bg-red-600 text-white font-black text-[10px] uppercase tracking-widest shadow-xl shadow-red-600/20 hover:bg-red-700 transition-all"
                            @click="deleteArticle"
                        >
                            USUŃ ARTYKUŁ
                        </button>
                    </div>
                </template>
            </DialogModal>
        </div>
    </AppLayout>
</template>
