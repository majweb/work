<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import { useForm, router } from '@inertiajs/vue3';
import InputError from '@/Components/InputError.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import Checkbox from '@/Components/Checkbox.vue';
import TextInput from '@/Components/TextInput.vue';
import ConfirmationModal from '@/Components/ConfirmationModal.vue';
import DangerButton from '@/Components/DangerButton.vue';
import SecondaryButton from '@/Components/SecondaryButton.vue';
import { ref } from 'vue';

const props = defineProps({
    banners: Array,
});

const isEditing = ref(false);
const editingBanner = ref(null);
const confirmingBannerDeletion = ref(false);
const bannerBeingDeleted = ref(null);

const form = useForm({
    title: '',
    image: null,
    is_active: false,
});

const imagePreview = ref(null);

const handleImageChange = (e) => {
    const file = e.target.files[0];
    if (file) {
        form.image = file;
        const reader = new FileReader();
        reader.onload = (e) => {
            imagePreview.value = e.target.result;
        };
        reader.readAsDataURL(file);
    }
};

const submit = () => {
    if (isEditing.value) {
        // Inertia v1 workaround for multipart PUT: use POST with _method=PUT
        router.post(route('admin.admin-banners.update', editingBanner.value.id), {
            _method: 'put',
            ...form.data(),
        }, {
            onSuccess: () => resetForm(),
        });
    } else {
        form.post(route('admin.admin-banners.store'), {
            onSuccess: () => resetForm(),
        });
    }
};

const editBanner = (banner) => {
    isEditing.value = true;
    editingBanner.value = banner;
    form.title = banner.title;
    form.is_active = !!banner.is_active;
    imagePreview.value = banner.image_url;
};

const resetForm = () => {
    isEditing.value = false;
    editingBanner.value = null;
    form.reset();
    form.clearErrors();
    imagePreview.value = null;
};

const toggleStatus = (banner) => {
    router.post(route('admin.admin-banners.toggle', banner.id), {}, {
        preserveScroll: true,
    });
};

const deleteBanner = (banner) => {
    bannerBeingDeleted.value = banner;
    confirmingBannerDeletion.value = true;
};

const confirmDeleteBanner = () => {
    router.delete(route('admin.admin-banners.destroy', bannerBeingDeleted.value.id), {
        preserveScroll: true,
        onSuccess: () => {
            confirmingBannerDeletion.value = false;
            bannerBeingDeleted.value = null;
        },
    });
};
</script>

<template>
    <AppLayout title="Ustawienia Banerów">
        <div class="py-12 bg-gray-50/50 min-h-screen px-2 sm:px-0">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

                <div class="bg-white rounded-[3rem] shadow-xl shadow-blue-900/5 border border-gray-100 p-10 mb-8">
                    <div class="flex flex-col md:flex-row md:items-center justify-between gap-8">
                        <div>
                            <h3 class="text-2xl font-black text-[#0A2C5C] uppercase tracking-tight">Ustawienia Banerów Dashboardu</h3>
                            <p class="text-[10px] font-bold text-gray-400 uppercase tracking-widest mt-1">
                                Zarządzaj banerem wyświetlanym w panelach firm i rekruterów
                            </p>
                        </div>
                    </div>
                </div>

                <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                    <!-- Formularz -->
                    <div class="lg:col-span-1">
                        <div class="bg-white rounded-[3rem] shadow-xl shadow-blue-900/5 border border-gray-100 p-8 sticky top-8">
                            <h4 class="text-lg font-black text-[#0A2C5C] uppercase tracking-tight mb-6">
                                {{ isEditing ? 'Edytuj baner' : 'Dodaj nowy baner' }}
                            </h4>

                            <form @submit.prevent="submit" class="space-y-6">
                                <div>
                                    <label class="text-[10px] font-black text-[#0A2C5C] uppercase tracking-[0.2em] mb-2 block">Tytuł (opcjonalnie)</label>
                                    <TextInput
                                        v-model="form.title"
                                        type="text"
                                        class="w-full px-4 py-3 bg-gray-50 border-none rounded-xl focus:ring-2 focus:ring-blue-500/20 focus:bg-white transition-all text-sm font-medium"
                                        placeholder="Np. Promocja Majowa"
                                    />
                                    <InputError :message="form.errors.title" class="mt-2" />
                                </div>

                                <div>
                                    <label class="text-[10px] font-black text-[#0A2C5C] uppercase tracking-[0.2em] mb-2 block">Grafika baneru</label>
                                    <div class="mt-2 flex flex-col items-center justify-center border-2 border-dashed border-gray-200 rounded-[2rem] p-6 hover:border-blue-400 transition-colors cursor-pointer relative overflow-hidden group">
                                        <input
                                            type="file"
                                            class="absolute inset-0 opacity-0 cursor-pointer z-10"
                                            @change="handleImageChange"
                                            accept="image/*"
                                        />
                                        <div v-if="!imagePreview" class="text-center">
                                            <svg class="mx-auto h-12 w-12 text-gray-400" stroke="currentColor" fill="none" viewBox="0 0 48 48">
                                                <path d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                            <p class="mt-1 text-[10px] font-black text-gray-400 uppercase tracking-widest">Kliknij aby wybrać plik</p>
                                        </div>
                                        <img v-else :src="imagePreview" class="w-full h-auto rounded-xl object-cover shadow-sm" />
                                        <div v-if="imagePreview" class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center">
                                            <p class="text-white text-[10px] font-black uppercase tracking-widest">Zmień obraz</p>
                                        </div>
                                    </div>
                                    <InputError :message="form.errors.image" class="mt-2" />
                                </div>

                                <div class="flex items-center gap-4">
                                    <div class="relative cursor-pointer" @click="form.is_active = !form.is_active">
                                        <Checkbox v-model:checked="form.is_active" class="sr-only" />
                                        <div :class="form.is_active ? 'bg-blue-500' : 'bg-gray-200'" class="block w-12 h-7 rounded-full transition-colors duration-300"></div>
                                        <div :class="form.is_active ? 'translate-x-5' : 'translate-x-0'" class="absolute left-1 top-1 bg-white w-5 h-5 rounded-full transition-transform duration-300 shadow-sm"></div>
                                    </div>
                                    <label class="text-[10px] font-black text-[#0A2C5C] uppercase tracking-[0.1em] cursor-pointer" @click="form.is_active = !form.is_active">
                                        Aktywny
                                    </label>
                                </div>

                                <div class="flex flex-col gap-3 pt-4">
                                    <PrimaryButton
                                        :class="{ 'opacity-25': form.processing }"
                                        :disabled="form.processing"
                                        class="w-full py-4 bg-[#0A2C5C] hover:bg-[#0D356D] text-white rounded-2xl font-black text-[10px] uppercase tracking-[0.2em] transition-all shadow-lg"
                                    >
                                        {{ isEditing ? 'Zaktualizuj' : 'Zapisz baner' }}
                                    </PrimaryButton>
                                    <button
                                        v-if="isEditing"
                                        type="button"
                                        @click="resetForm"
                                        class="w-full py-4 bg-gray-100 hover:bg-gray-200 text-gray-600 rounded-2xl font-black text-[10px] uppercase tracking-[0.2em] transition-all"
                                    >
                                        Anuluj
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>

                    <!-- Lista banerów -->
                    <div class="lg:col-span-2">
                        <div class="bg-white rounded-[3rem] shadow-xl shadow-blue-900/5 border border-gray-100 p-8">
                            <h4 class="text-lg font-black text-[#0A2C5C] uppercase tracking-tight mb-8">Wszystkie banery</h4>

                            <div v-if="banners.length === 0" class="text-center py-20 bg-gray-50 rounded-[2rem] border border-dashed border-gray-200">
                                <p class="text-[10px] font-black text-gray-400 uppercase tracking-widest">Brak dodanych banerów</p>
                            </div>

                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div v-for="banner in banners" :key="banner.id" class="group relative bg-white rounded-[2rem] border border-gray-100 overflow-hidden shadow-sm hover:shadow-xl transition-all duration-500">
                                    <div class="aspect-video relative overflow-hidden">
                                        <img :src="banner.preview_url || banner.image_url" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105" />
                                        <div class="absolute top-4 right-4">
                                            <div :class="banner.is_active ? 'bg-green-500 text-white' : 'bg-gray-500 text-white'" class="px-3 py-1 rounded-full text-[8px] font-black uppercase tracking-widest shadow-lg">
                                                {{ banner.is_active ? 'Aktywny' : 'Nieaktywny' }}
                                            </div>
                                        </div>
                                    </div>

                                    <div class="p-6">
                                        <h5 class="text-sm font-black text-[#0A2C5C] uppercase truncate mb-4">{{ banner.title || 'Bez tytułu' }}</h5>

                                        <div class="flex items-center justify-between gap-4">
                                            <div class="flex gap-2">
                                                <button
                                                    @click="editBanner(banner)"
                                                    class="p-3 bg-blue-50 text-blue-600 rounded-xl hover:bg-blue-100 transition-colors"
                                                    title="Edytuj"
                                                >
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                                    </svg>
                                                </button>
                                                <button
                                                    @click="toggleStatus(banner)"
                                                    class="p-3 rounded-xl transition-colors"
                                                    :class="banner.is_active ? 'bg-amber-50 text-amber-600 hover:bg-amber-100' : 'bg-emerald-50 text-emerald-600 hover:bg-emerald-100'"
                                                    :title="banner.is_active ? 'Dezaktywuj' : 'Aktywuj'"
                                                >
                                                    <svg v-if="banner.is_active" xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.875 18.825A10.05 10.05 0 0112 19c-4.478 0-8.268-2.943-9.543-7a9.97 9.97 0 011.563-3.029m5.858.908a3 3 0 114.243 4.243M9.878 9.878l4.242 4.242M9.88 9.88l-3.29-3.29m7.532 7.532l3.29 3.29M3 3l3.59 3.59m0 0A9.953 9.953 0 0112 5c4.478 0 8.268 2.943 9.543 7a10.025 10.025 0 01-4.132 5.411m0 0L21 21" />
                                                    </svg>
                                                    <svg v-else xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                                    </svg>
                                                </button>
                                            </div>

                                            <button
                                                @click="deleteBanner(banner)"
                                                class="p-3 bg-red-50 text-red-600 rounded-xl hover:bg-red-100 transition-colors"
                                                title="Usuń"
                                            >
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <ConfirmationModal :show="confirmingBannerDeletion" @close="confirmingBannerDeletion = false">
            <template #title>
                Usuń baner
            </template>

            <template #content>
                Czy na pewno chcesz usunąć ten baner? Ta operacja jest nieodwracalna.
            </template>

            <template #footer>
                <SecondaryButton @click="confirmingBannerDeletion = false">
                    Anuluj
                </SecondaryButton>

                <DangerButton
                    class="ml-3"
                    @click="confirmDeleteBanner"
                >
                    Usuń baner
                </DangerButton>
            </template>
        </ConfirmationModal>
    </AppLayout>
</template>
