<script setup>
import { ref, watch,computed } from 'vue';
import { router, Link, usePage } from '@inertiajs/vue3';
import { useProjectHelpers } from '@/Composables/useProjectHelpers';
import AppLayout from '@/Layouts/AppLayout.vue';
import Multiselect from "vue-multiselect";
import PrimaryButton from "@/Components/PrimaryButton.vue";
import __ from "@/lang.js";

const props = defineProps({
    project: Object,
    availableLangs: Array,
    currentImage: String,
    universalImage: String,
    initialImages: Array,
    initialLang: String,
    backRoute: String,
    translate: Object,
});

const selectedLang = ref(props.initialLang);
const images = ref(props.initialImages || []);
const selectedImage = ref(props.currentImage);
const isSaving = ref(false);
const isLoading = ref(false);
const translations = ref(props.translate || {});

const { getPositionTitle } = useProjectHelpers();

const previewImage = computed(() => {
    return selectedImage.value || props.universalImage;
});

const loadImages = async () => {
    if (!selectedLang.value) return;

    isLoading.value = true;
    try {
        const response = await axios.get(route( 'projects.generator', {
            project: props.project.id,
            lang: selectedLang.value
        }));

        const data = response.data;
        if (data.images) {
            images.value = data.images;
        }
        if (data.translate) {
            translations.value = data.translate;
        }
    } catch (e) {
        console.error(e);
    } finally {
        isLoading.value = false;
    }
};

const saveImage = () => {
    isSaving.value = true;
    router.post(route('projects.generator.save', props.project.id), {
        image: selectedImage.value
    }, {
        onSuccess: () => {
            // Inertia zajmie się przekierowaniem i wyświetleniem banneru
        },
        onFinish: () => {
            isSaving.value = false;
        }
    });
};

watch(selectedLang, () => {
    loadImages();
});

const langOptions = props.availableLangs.map(lang => ({
    value: lang,
    name: lang.toUpperCase()
}));

const selectedLangOption = ref(langOptions.find(o => o.value === selectedLang.value) || null);

watch(selectedLangOption, (newVal) => {
    selectedLang.value = newVal ? newVal.value : null;
});

</script>

<template>
    <AppLayout :title="__('translate.linkGenerator') || 'Generator linku'">
        <div class="py-12 bg-gray-50/50 min-h-screen px-2 sm:px-0">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-8">
                <div class="bg-white rounded-[3rem] shadow-xl shadow-blue-900/5 border border-gray-100 p-10">
                    <div class="flex justify-between items-center">
                        <div>
                            <h3 class="text-2xl font-black text-[#0A2C5C] uppercase tracking-tight">
                                {{ __('translate.linkGenerator') }}
                            </h3>
                            <p class="text-[10px] font-bold text-gray-400 uppercase tracking-widest mt-1">
                                <strong>Id:</strong>{{ project.id }}
                                <strong class="font-semibold">
                                {{ getPositionTitle(project) }}
                                </strong>
                            </p>
                        </div>
                        <Link
                            :href="route(backRoute)"
                            class="inline-flex items-center px-10 py-4 bg-white border border-gray-100 text-gray-500 text-[10px] font-black rounded-2xl uppercase tracking-widest shadow-sm hover:bg-gray-50 transition-all hover:-translate-y-0.5"
                        >
                            {{ __('translate.back') }}
                        </Link>
                    </div>
                </div>

                <div class="bg-white rounded-[3rem] shadow-xl shadow-blue-900/5 border border-gray-100 p-10">
                    <div class="space-y-8">
                        <!-- Wybór języka -->
                        <div class="space-y-4">
                            <label class="block text-[10px] font-black text-gray-400 uppercase tracking-widest">
                                {{ __('translate.selectLanguage') }}
                            </label>
                            <div class="max-w-md">
                                <multiselect
                                    v-model="selectedLangOption"
                                    :options="langOptions"
                                    track-by="value"
                                    label="name"
                                    :placeholder="__('translate.select')"
                                    :selectLabel="__('translate.selectLabel')"
                                    :selectedLabel="__('translate.selectedLabel')"
                                    :deselectLabel="__('translate.deselectLabel')"
                                    class="custom-multiselect"
                                >
                                    <template #noResult>
                                        <span>{{ __('translate.noOptions') }}</span>
                                    </template>
                                </multiselect>
                            </div>
                        </div>

                        <!-- Lista grafik -->
                        <div v-if="selectedLang" class="space-y-6">
                            <div class="flex items-center gap-4">
                                <h3 class="text-[10px] font-black text-[#0A2C5C] uppercase tracking-[0.2em]">
                                    {{ __('translate.selectImage') }}
                                </h3>
                                <div class="h-px flex-1 bg-gray-100"></div>
                            </div>

                            <div v-if="isLoading" class="flex justify-center py-20">
                                <div class="relative">
                                    <div class="w-16 h-16 border-4 border-gray-100 rounded-full"></div>
                                    <div class="w-16 h-16 border-4 border-[#0A2C5C] border-t-transparent rounded-full animate-spin absolute top-0 left-0"></div>
                                </div>
                            </div>

                            <div v-else class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-5 gap-6">
                                <div
                                    v-for="img in images"
                                    :key="img"
                                    @click="selectedImage = img"
                                    class="relative cursor-pointer rounded-3xl overflow-hidden border-4 transition-all duration-300 group"
                                    :class="selectedImage === img ? 'border-[#00a0e3] scale-95 shadow-lg' : 'border-transparent hover:border-gray-200'"
                                >
                                    <img :src="img" class="w-full h-auto object-cover aspect-video" />
                                    <div v-if="selectedImage === img" class="absolute inset-0 bg-[#00a0e3]/20 flex items-center justify-center backdrop-blur-[2px]">
                                        <div class="bg-[#00a0e3] text-white rounded-full p-2 shadow-xl scale-110">
                                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="4" d="M5 13l4 4L19 7" />
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center" v-if="selectedImage !== img">
                                        <span class="text-white text-[10px] font-black uppercase tracking-widest">{{ __('translate.select') }}</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Podgląd i Zapis -->
                        <div v-if="selectedImage || props.currentImage" class="pt-10 border-t border-gray-50 flex flex-col lg:flex-row gap-12 items-start">
                            <div class="flex-1 w-full lg:w-auto">
                                <label class="block text-[10px] font-black text-gray-400 uppercase tracking-widest mb-6">
                                    {{ __('translate.preview') }}
                                </label>
                                <div class="relative rounded-[2.5rem] overflow-hidden shadow-2xl border-8 border-white ring-1 ring-gray-100 max-w-2xl mx-auto lg:mx-0">
                                    <img :src="previewImage" class="w-full h-auto" />
                                </div>
                            </div>

                            <div class="shrink-0 w-full lg:w-72 space-y-4">
                                <div class="bg-blue-50/50 p-6 rounded-3xl border border-blue-100/50 mb-6">
                                    <p class="text-[10px] font-bold text-blue-900/60 uppercase tracking-widest leading-relaxed">
                                        {{ __('translate.generatorDescription') }}
                                    </p>
                                </div>

                                <button
                                    v-if="selectedImage"
                                    @click="selectedImage = null"
                                    class="w-full py-4 px-6 border-2 border-red-100 text-red-500 text-[10px] font-black uppercase tracking-widest rounded-2xl hover:bg-red-50 transition-all mb-2"
                                >
                                    {{ __('translate.revertToDefault') }}
                                </button>

                                <PrimaryButton
                                    @click.native="saveImage"
                                    :disabled="isSaving"
                                    class="w-full !py-5 !rounded-2xl !text-[10px] !font-black !uppercase !tracking-widest !bg-[#0A2C5C] shadow-xl shadow-blue-900/20"
                                >
                                    <svg v-if="isSaving" class="animate-spin h-4 w-4 text-white mr-3" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                        <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                                        <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                                    </svg>
                                    {{ __('translate.save') }}
                                </PrimaryButton>
                            </div>
                        </div>

                        <!-- Dane z tłumaczeń -->
                        <div v-if="translations && translations.name" class="pt-10 border-t border-gray-50 space-y-8">
                            <div class="flex items-center gap-4">
                                <h3 class="text-[10px] font-black text-[#0A2C5C] uppercase tracking-[0.2em]">
                                    {{ __('translate.details') }}
                                </h3>
                                <div class="h-px flex-1 bg-gray-100"></div>
                            </div>

                            <div class="grid grid-cols-1 md:grid-cols-2 gap-12">
                                <div class="space-y-4">
                                    <label class="block text-[10px] font-black text-gray-400 uppercase tracking-widest">
                                        {{ __('translate.position') }}
                                    </label>
                                    <p class="text-xl font-black text-[#0A2C5C] uppercase tracking-tight">
                                        {{ translations.name }}
                                    </p>
                                </div>

                                <div v-if="translations.detailprojects && translations.detailprojects.length" class="space-y-4">
                                    <label class="block text-[10px] font-black text-gray-400 uppercase tracking-widest">
                                        {{ __('translate.detailProjects') }}
                                    </label>
                                    <ul class="space-y-3">
                                        <li v-for="detail in translations.detailprojects" :key="detail.id" class="flex items-start gap-3">
                                            <div class="mt-1.5 w-1.5 h-1.5 rounded-full bg-[#00a0e3] shrink-0"></div>
                                            <p class="text-xs font-bold text-gray-600 uppercase tracking-wide leading-relaxed">
                                                {{ detail.name[selectedLang] || detail.name['pl'] || detail.name['en'] }}
                                            </p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </AppLayout>
</template>

<style src="vue-multiselect/dist/vue-multiselect.css"></style>
<style lang="scss">
.custom-multiselect {
    .multiselect__tags {
        border: 1px solid #e5e7eb; /* border-gray-200 */
        border-radius: 1rem;
        padding: 0.75rem 2.5rem 0.75rem 1.25rem;
        background: #ffffff;
        transition: all 0.3s ease;
        min-height: 48px;
        display: flex;
        align-items: center;
    }

    &:focus-within .multiselect__tags {
        border-color: #00a0e3;
        box-shadow: 0 0 0 4px rgba(0, 160, 227, 0.1);
    }

    .multiselect__placeholder {
        margin-bottom: 0;
        padding-top: 0;
        color: #9ca3af; /* text-gray-400 */
        font-size: 0.75rem; /* text-xs */
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 0.1em;
    }

    .multiselect__single {
        margin-bottom: 0;
        padding-left: 0;
        font-size: 0.75rem;
        background: transparent;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 0.1em;
        color: #0A2C5C;
    }

    .multiselect__input {
        margin-bottom: 0;
        background: transparent;
        font-size: 0.75rem;
        font-weight: 700;
        color: #0A2C5C;

        &::placeholder {
            color: #9ca3af;
        }
    }

    .multiselect__select {
        height: 48px;
        width: 2.5rem;
    }

    .multiselect__option--highlight {
        background: #0A2C5C !important;
        outline: none;
        color: white;
        font-size: 0.75rem;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 0.1em;

        &:after {
            display: none;
        }
    }

    .multiselect__option--selected {
        background: #f3f4f6 !important;
        color: #0A2C5C;
        font-weight: 900;

        &:after {
            display: none;
        }
    }

    .multiselect__content-wrapper {
        border: 1px solid #e5e7eb;
        border-top: none;
        border-bottom-left-radius: 1.25rem;
        border-bottom-right-radius: 1.25rem;
        box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
        overflow-y: auto;
    }

    .multiselect__content {
        padding: 4px;
    }

    .multiselect__option {
        border-radius: 0.75rem;
        margin: 2px 0;
        min-height: 40px;
        display: flex;
        align-items: center;
        padding: 8px 12px;
    }
}
</style>
