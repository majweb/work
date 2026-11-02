<script setup>
// Baner Work4you - dodawany przez admina, losowany na równi z banerami firm na wybranych rynkach
import AppLayout from '@/Layouts/AppLayout.vue';
import InputError from '@/Components/InputError.vue';
import SpinnerAction from '@/Components/SpinnerAction.vue';
import { Link, useForm, usePage } from '@inertiajs/vue3';
import { ref } from 'vue';
import Multiselect from 'vue-multiselect';
import __ from '@/lang.js';

const props = defineProps({
    banner: { type: Object, default: null },
    countries: Array,
});

const serverMessage = ref(null);

// Pliki startowe FilePonda osobno od form.photo - podmiana tablicy w :files kazałaby
// FilePondowi wczytać folder uploadu jako adres pliku (404, "Size not available")
const initialFiles = (props.banner?.media ?? []).map(el => ({
    source: el.original_url,
    options: { type: 'local', metadata: { poster: el.preview_url } },
}));

const form = useForm({
    active: props.banner?.active ?? true,
    lang: props.banner?.lang ?? [],
    url: props.banner?.url ?? '',
    photo: [...initialFiles],
});

// Stara grafika zostaje na serwerze do zapisu nowej - usunięcie z formularza tylko czyści pole
const removeFile = (source, load) => {
    form.photo = [];
    load();
};

const submit = () => {
    if (props.banner) {
        form.put(route('admin.banners-accepts.update', props.banner.id), { preserveScroll: true });
    } else {
        form.post(route('admin.banners-accepts.store'), { preserveScroll: true });
    }
};
</script>

<template>
    <AppLayout :title="banner ? 'Edycja baneru Work4you' : 'Nowy baner Work4you'">
        <div class="p-8 lg:p-12 space-y-12">
            <div class="flex items-center gap-4">
                <Link :href="route('admin.banners-accepts.index')"
                      class="w-10 h-10 rounded-xl bg-white shadow-sm border border-gray-100 flex items-center justify-center text-[#0A2C5C] hover:bg-gray-50 transition-all">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="3" stroke="currentColor" class="w-4 h-4">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5 3 12m0 0 7.5-7.5M3 12h18" />
                    </svg>
                </Link>
                <div>
                    <h2 class="text-2xl font-black text-[#0A2C5C] uppercase tracking-tight mb-1">
                        {{ banner ? 'Edycja baneru Work4you' : 'Nowy baner Work4you' }}
                    </h2>
                    <p class="text-[10px] font-bold text-gray-400 uppercase tracking-widest">
                        Baner losowany na równi z banerami firm na wybranych rynkach - bez pakietu i akceptacji
                    </p>
                </div>
            </div>

            <form @submit.prevent="submit" class="rounded-[3rem] bg-white shadow-xl shadow-blue-900/5 border border-gray-100 p-10 space-y-10">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-10">
                    <div class="space-y-8">
                        <div>
                            <label class="block text-[10px] font-black text-gray-400 mb-3 uppercase tracking-widest">Rynki</label>
                            <multiselect
                                group-values="elements" group-label="group"
                                :group-select="false"
                                selectLabel=""
                                selectGroupLabel=""
                                selectedLabel=""
                                deselectLabel=""
                                track-by="name"
                                :multiple="true"
                                label="name"
                                placeholder="Wybierz rynki"
                                v-model="form.lang"
                                :options="countries"
                            >
                                <template #noResult><span>Brak wyników</span></template>
                                <template #noOptions><span>Brak opcji</span></template>
                            </multiselect>
                            <InputError :message="form.errors.lang" class="mt-2 text-[10px] font-bold uppercase tracking-widest"/>
                        </div>

                        <div>
                            <label for="url" class="block text-[10px] font-black text-gray-400 mb-3 uppercase tracking-widest">Link docelowy (URL)</label>
                            <input
                                id="url"
                                v-model="form.url"
                                type="text"
                                placeholder="https://"
                                class="w-full px-5 py-4 text-sm rounded-2xl border-gray-200 focus:ring-0 focus:border-[#00a0e3] font-bold text-[#0A2C5C]"
                            />
                            <InputError :message="form.errors.url" class="mt-2 text-[10px] font-bold uppercase tracking-widest"/>
                        </div>

                        <div class="bg-gray-50 rounded-2xl p-6 border border-gray-100">
                            <label class="relative inline-flex items-center cursor-pointer">
                                <input v-model="form.active" type="checkbox" class="sr-only peer" />
                                <div class="w-11 h-6 bg-gray-200 rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-[#00a3e0]"></div>
                                <span class="ml-4 text-[10px] font-black text-[#0A2C5C] uppercase tracking-widest">Aktywny (wyświetlany na stronie)</span>
                            </label>
                        </div>
                    </div>

                    <div>
                        <label class="block text-[10px] font-black text-gray-400 mb-3 uppercase tracking-widest">Grafika baneru</label>
                        <div class="bg-gray-50 rounded-[2rem] p-4 border border-gray-100">
                            <file-pond
                                name="photo"
                                :files="initialFiles"
                                :allow-multiple="false"
                                :max-file-size="'2MB'"
                                imagePreviewMaxHeight="300"
                                filePosterHeight="300"
                                :label-idle="__('translate.label-idle')"
                                :labelFileProcessing="__('translate.labelFileProcessing')"
                                :labelInvalidField="__('translate.labelInvalidField')"
                                :labelMaxFileSize="__('translate.labelMaxFileSize')"
                                :labelMaxFileSizeExceeded="__('translate.labelMaxFileSizeExceeded')"
                                :labelFileWaitingForSize="__('translate.labelFileWaitingForSize')"
                                :labelFileSizeNotAvailable="__('translate.labelFileSizeNotAvailable')"
                                :labelFileLoading="__('translate.labelFileLoading')"
                                :labelFileLoadError="__('translate.labelFileLoadError')"
                                :labelFileProcessingComplete="__('translate.labelFileProcessingComplete')"
                                :labelFileProcessingAborted="__('translate.labelFileProcessingAborted')"
                                :labelFileProcessingError="serverMessage || __('translate.labelFileProcessingError')"
                                :labelFileProcessingRevertError="__('translate.labelFileProcessingRevertError')"
                                :labelFileRemoveError="__('translate.labelFileRemoveError')"
                                :labelTapToCancel="__('translate.labelTapToCancel')"
                                :labelTapToRetry="__('translate.labelTapToRetry')"
                                :labelTapToUndo="__('translate.labelTapToUndo')"
                                :labelButtonRemoveItem="__('translate.labelButtonRemoveItem')"
                                :labelButtonAbortItemLoad="__('translate.labelButtonAbortItemLoad')"
                                :labelButtonRetryItemLoad="__('translate.labelButtonRetryItemLoad')"
                                :labelButtonAbortItemProcessing="__('translate.labelButtonAbortItemProcessing')"
                                :labelButtonUndoItemProcessing="__('translate.labelButtonUndoItemProcessing')"
                                :labelButtonRetryItemProcessing="__('translate.labelButtonRetryItemProcessing')"
                                :labelButtonProcessItem="__('translate.labelButtonProcessItem')"
                                :accepted-file-types="'image/png, image/jpeg, image/jpg, image/gif'"
                                credits="false"
                                :server="{
                                    url: '',
                                    headers: { 'X-CSRF-TOKEN': usePage().props.csrf_token },
                                    process: {
                                        url: '/temporary/upload',
                                        onload: (response) => {
                                            form.photo = [response];
                                            return response;
                                        },
                                        onerror: (response) => {
                                            serverMessage = JSON.parse(response).error.photo[0];
                                        }
                                    },
                                    revert: {
                                        url: '/temporary/delete',
                                        onload: () => {
                                            form.photo = [];
                                        }
                                    },
                                    remove: removeFile
                                }"
                            ></file-pond>
                        </div>
                        <!-- Te same zasady co przy banerze firmy (walidacja uploadu /temporary/upload) -->
                        <p class="mt-3 text-[9px] font-bold text-gray-400 uppercase tracking-widest">
                            Zalecany rozmiar: 1000 × 200 px · format: JPG, PNG lub animowany GIF · maks. 2 MB
                        </p>
                        <InputError :message="form.errors.photo" class="mt-2 text-[10px] font-bold uppercase tracking-widest"/>
                    </div>
                </div>

                <div class="flex justify-end pt-10 border-t border-gray-50">
                    <button
                        type="submit"
                        :disabled="form.processing"
                        class="px-16 py-5 bg-[#0A2C5C] text-white text-[10px] font-black uppercase tracking-widest rounded-2xl hover:bg-[#00a0e3] transition-all shadow-lg shadow-blue-900/20 disabled:opacity-50 flex items-center justify-center gap-3"
                    >
                        <spinner-action :process="form.processing">{{ banner ? 'Zapisz baner' : 'Dodaj baner' }}</spinner-action>
                    </button>
                </div>
            </form>
        </div>
    </AppLayout>
</template>

<style src="vue-multiselect/dist/vue-multiselect.css"></style>

<style lang="scss">
.multiselect__tags {
    border: 1px solid #d1d5db; /* border-gray-300 */
    border-radius: 0.5rem; /* rounded-lg */
    padding: 0.75rem 2.5rem 0.75rem 1rem; /* px-4 py-3, but with space for the arrow */
}

.multiselect__placeholder {
    margin-bottom: 0;
    padding-top: 0;
    color: #9ca3af; /* text-gray-400 */
}

.multiselect__single {
    margin-bottom: 0;
    padding-left: 0;
    font-size: 1rem;
}

.multiselect__input {
    margin-bottom: 0;
}

.multiselect__select {
    height: 100%;
    width: 2.5rem;
}

.multiselect__option--highlight {
    background: #0d2a52 !important; /* work-main */
    outline: none;
    color: white;
}

.multiselect__option--highlight:after {
    background: #0d2a52 !important;
}

.multiselect__option--selected {
    background: #f3f4f6 !important; /* gray-100 */
    color: #0d2a52;
    font-weight: bold;
}

.multiselect__option--selected.multiselect__option--highlight {
    background: #0d2a52 !important;
    color: #fff;
}

.multiselect__tag {
    background: #0d2a52 !important;
}

.multiselect__tag-icon:after {
    color: white !important;
}

.multiselect__tag-icon:hover {
    background: #1e3a8a !important; /* darker blue */
}

.multiselect__content-wrapper {
    border: 1px solid #d1d5db;
    border-top: none;
    border-bottom-left-radius: 0.5rem;
    border-bottom-right-radius: 0.5rem;
}
</style>
