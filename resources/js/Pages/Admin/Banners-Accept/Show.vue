<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import { Link, router } from '@inertiajs/vue3';
import moment from "moment";
import DialogModal from '@/Components/DialogModal.vue';
import { ref } from 'vue';

const props = defineProps({
    banner: Object
});

const showDeleteModal = ref(false);

const closeDeleteModal = () => {
    showDeleteModal.value = false;
};

const deleteBanner = () => {
    router.delete(route('admin.banners-accepts.destroy', props.banner.id), {
        onSuccess: () => closeDeleteModal()
    });
};

const toggleAccept = () => {
    router.put(route('admin.banners-accepts.accept', props.banner.id), {}, {
        preserveScroll: true
    });
};

const getMediaUrl = (banner) => {
    return banner.media?.[0]?.original_url || '';
};
</script>

<template>
    <AppLayout title="Szczegóły baneru">
        <div class="p-8 lg:p-12 space-y-12">
            <!-- Header Section -->
            <div class="flex items-center justify-between">
                <div class="flex items-center gap-4">
                    <Link :href="route('admin.banners-accepts.index')"
                          class="w-10 h-10 rounded-xl bg-white shadow-sm border border-gray-100 flex items-center justify-center text-[#0A2C5C] hover:bg-gray-50 transition-all">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="3" stroke="currentColor" class="w-4 h-4">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5 3 12m0 0 7.5-7.5M3 12h18" />
                        </svg>
                    </Link>
                    <div>
                        <h2 class="text-2xl font-black text-[#0A2C5C] uppercase tracking-tight mb-1">
                            Baner <span class="text-blue-400">#{{ banner.id }}</span>
                        </h2>
                        <p class="text-[10px] font-bold text-gray-400 uppercase tracking-widest">
                            Podgląd i akceptacja baneru reklamowego
                        </p>
                    </div>
                </div>

                <div class="flex items-center gap-3">
                    <button
                        v-if="!banner.active_admin"
                        @click="toggleAccept"
                        class="px-6 py-3 rounded-xl bg-blue-500 text-white font-black text-[10px] uppercase tracking-widest shadow-lg shadow-blue-500/10 hover:bg-blue-600 transition-all"
                    >
                        AKCEPTUJ BANER
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
                            <h3 class="text-xl font-black tracking-tight text-[#0A2C5C] uppercase">Podgląd baneru</h3>
                        </div>
                        <div class="p-10">
                            <div class="bg-gray-50/50 rounded-2xl p-4 border border-gray-100 flex justify-center overflow-hidden">
                                <img v-if="getMediaUrl(banner)" :src="getMediaUrl(banner)" class="max-w-full rounded-xl shadow-sm h-auto" alt="Banner Preview">
                                <div v-else class="py-20 text-gray-300 font-black uppercase tracking-widest text-xs">Brak grafiki</div>
                            </div>

                            <div class="mt-8 space-y-4">
                                <div>
                                    <label class="text-[9px] font-black text-gray-400 uppercase tracking-widest">Link docelowy (URL)</label>
                                    <div class="mt-2 p-4 bg-gray-50 rounded-xl border border-gray-100 text-[#0A2C5C] font-bold text-sm truncate">
                                        <a :href="banner.url" target="_blank" class="hover:text-blue-500 transition-colors flex items-center gap-2">
                                            {{ banner.url }}
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-3 h-3">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 6H5.25A2.25 2.25 0 0 0 3 8.25v10.5A2.25 2.25 0 0 0 5.25 21h10.5A2.25 2.25 0 0 0 18 18.75V10.5m-10.5 6L21 3m0 0h-5.25M21 3v5.25" />
                                            </svg>
                                        </a>
                                    </div>
                                </div>
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
                            <img v-if="banner.user?.profile_photo_url" :src="banner.user.profile_photo_url" class="w-16 h-16 rounded-full object-cover shadow-lg shadow-blue-900/10 mb-4 border-2 border-white">
                            <div v-else class="w-16 h-16 rounded-full bg-[#0A2C5C] shadow-lg shadow-blue-900/10 flex items-center justify-center text-2xl font-black text-white mb-4">
                                {{ banner.user?.name?.substring(0, 1).toUpperCase() }}
                            </div>
                            <p class="text-sm font-black text-[#0A2C5C] uppercase tracking-tight">{{ banner.user?.name }}</p>
                            <p class="text-[10px] font-bold text-gray-400 uppercase tracking-widest mt-1">ID Użytkownika: #{{ banner.user_id }}</p>

                            <div class="w-full mt-8 pt-8 border-t border-gray-50 flex flex-col gap-4">
                                <div class="flex justify-between items-center text-[10px] font-black uppercase tracking-widest">
                                    <span class="text-gray-400">Data dodania</span>
                                    <span class="text-[#0A2C5C]">{{ moment(banner.created_at).format('DD.MM.YYYY') }}</span>
                                </div>
                                <div class="flex justify-between items-center text-[10px] font-black uppercase tracking-widest">
                                    <span class="text-gray-400">Status firmy</span>
                                    <span :class="banner.active ? 'text-green-500' : 'text-red-500'">{{ banner.active ? 'AKTYWNY' : 'NIEAKTYWNY' }}</span>
                                </div>
                                <div class="flex justify-between items-center text-[10px] font-black uppercase tracking-widest">
                                    <span class="text-gray-400">Status admin</span>
                                    <span :class="banner.active_admin ? 'text-green-500' : 'text-amber-500'">{{ banner.active_admin ? 'ZAAKCEPTOWANY' : 'DO AKCEPTACJI' }}</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Additional Info Card -->
                    <div class="rounded-[3rem] bg-white shadow-xl shadow-blue-900/5 border border-gray-100 overflow-hidden">
                        <div class="px-10 py-8 border-b border-gray-50 bg-gradient-to-r from-white to-blue-50/20">
                            <h3 class="text-lg font-black tracking-tight text-[#0A2C5C] uppercase">Języki / Kraje</h3>
                        </div>
                        <div class="p-8">
                            <div v-if="banner.lang && banner.lang.length" class="flex flex-wrap gap-2">
                                <span v-for="lang in banner.lang" :key="lang.countryCode" class="px-3 py-1.5 rounded-lg bg-gray-50 border border-gray-100 text-[10px] font-black text-[#0A2C5C] uppercase tracking-widest">
                                    {{ lang.countryName || lang.countryCode }}
                                </span>
                            </div>
                            <div v-else class="text-center py-4 text-gray-300 font-black uppercase tracking-widest text-[10px]">
                                Brak przypisanych języków
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
                        Usuwanie baneru
                    </div>
                </template>

                <template #content>
                    <p class="text-sm font-bold text-[#0A2C5C]/60 uppercase tracking-widest leading-relaxed p-4 bg-gray-50 rounded-2xl border border-gray-100">
                        Czy na pewno chcesz usunąć ten baner? Ta operacja jest nieodwracalna.
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
                            @click="deleteBanner"
                        >
                            USUŃ BANER
                        </button>
                    </div>
                </template>
            </DialogModal>
        </div>
    </AppLayout>
</template>
