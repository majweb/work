<script setup>
import {Link, router, useForm, usePage} from '@inertiajs/vue3';
import AppLayout from '@/Layouts/AppLayout.vue';
import InputLabel from "@/Components/InputLabel.vue";
import InputError from "@/Components/InputError.vue";
import PrimaryButton from "@/Components/PrimaryButton.vue";
import FormSection from "@/Components/FormSection.vue";
import ActionMessage from "@/Components/ActionMessage.vue";
import TextInput from "@/Components/TextInput.vue";
import SpinnerAction from "@/Components/SpinnerAction.vue";
import {computed, ref} from "vue";
import Multiselect from "vue-multiselect";
const props = defineProps({
    banner: Object,
    countries: Array,
    product: { type: Object, required: false },
    check: { type: Object, required: false },
});
let serverMessage=ref(null);
const optionsCountry = ref(props.countries);
const showForm = ref(false);

const page = usePage();
const firmPoints = computed(() => page?.props?.auth?.user?.firm?.points ?? null);

const form = useForm({
    active: props.banner?.active,
    lang: props.banner?.lang ? props.banner?.lang : [],
    url: props.banner?.url ? props.banner?.url : '',
    photo: (props.banner && props.banner?.media)
            ? props.banner?.media.map(el => ({
                source: el.original_url,
                options: {
                    type: 'local',
                    metadata:{
                        poster:el.preview_url
                    }
                }
            }))
            : []
});

const removeFile =  async (source,load) => {
    await axios.post(route('temporary.delete.poster'),{'source':source});
    load();
    form.photo = [];
}

const createBanner = () => {
    form.post(route('firm.banners.store'), {
        errorBag: 'createBanner',
        preserveScroll: true,
        onSuccess: () => {
            router.reload({ only: ['banner'] });
            showForm.value = false;
        }

    });
}
const sortLangs = computed(() => {
    return usePage().props.languages
        .sort((a, b) => a.label.localeCompare(b.label));
})

</script>
<template>
    <AppLayout :title="__('translate.banner')">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ __('translate.banner') }}
            </h2>
        </template>
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg">
                    <div class="p-6 lg:p-8 bg-white dark:bg-gray-800 border-b border-gray-200 dark:border-gray-700">

                        <!-- Sekcja nagłówka i opisu -->
                        <div class="flex flex-col md:flex-row gap-8 items-center mb-16">
                            <div class="md:w-1/2">
                                <h1 class="text-3xl font-bold text-[#143d8c] uppercase mb-4">BANER</h1>
                                <p class="text-xl font-semibold text-[#143d8c] mb-6">Twoja marka widoczna od pierwszego kliknięcia.</p>
                                <p class="text-gray-700 dark:text-gray-300 leading-relaxed">
                                    Baner reklamowy to szybka i skuteczna forma promocji Twojej firmy na WORK4YOU.GLOBAL. Po zakupie dodajesz gotowy baner z linkiem przekierowującym i natychmiast zwiększasz widoczność swojej marki wśród użytkowników portalu.
                                </p>
                            </div>
                            <div class="md:w-1/2 flex justify-center">
                                <img src="/images/icons/firm/certyfikat.svg" alt="Banner" class="max-w-sm h-auto">
                            </div>
                        </div>

                        <!-- Kolumny informacyjne -->
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-12 mb-16">
                            <div class="flex flex-col items-center text-center">
                                <div class="h-16 mb-4 flex items-center justify-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-[#00a3e0]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                </div>
                                <h3 class="text-xl font-bold text-[#00a3e0] mb-4">Czym jest baner reklamowy?</h3>
                                <p class="text-gray-600 dark:text-gray-400">
                                    Baner reklamowy to graficzna forma promocji firmy wyświetlana na stronie WORK4YOU.GLOBAL. Po wykupieniu usługi baner jest od razu publikowany, dlatego musi być wcześniej przygotowany przez firmę.
                                </p>
                            </div>
                            <div class="flex flex-col items-center text-center">
                                <div class="h-16 mb-4 flex items-center justify-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-[#00a3e0]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4" />
                                    </svg>
                                </div>
                                <h3 class="text-xl font-bold text-[#00a3e0] mb-4">Co zawiera usługa baner?</h3>
                                <ul class="text-gray-600 dark:text-gray-400 list-disc list-inside text-left">
                                    <li>baner graficzny dostarczony przez firmę (gotowy do publikacji),</li>
                                    <li>samodzielne dodanie baneru przez firmę po zakupie usługi,</li>
                                    <li>możliwość ustawienia linku przekierowującego do wybranej strony.</li>
                                </ul>
                            </div>
                            <div class="flex flex-col items-center text-center">
                                <div class="h-16 mb-4 flex items-center justify-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-[#00a3e0]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                                    </svg>
                                </div>
                                <h3 class="text-xl font-bold text-[#00a3e0] mb-4">Jak możesz go wykorzystać?</h3>
                                <ul class="text-gray-600 dark:text-gray-400 list-disc list-inside text-left">
                                    <li>do promocji oferty pracy, usług lub marki,</li>
                                    <li>do kierowania ruchu na stronę firmową lub landing page,</li>
                                    <li>jako szybkie i widoczne wsparcie działań rekrutacyjnych i marketingowych.</li>
                                </ul>
                            </div>
                        </div>

                        <!-- Akcje: Wymiana punktów / Dodanie baneru -->
                        <div class="bg-[#143d8c] rounded-3xl p-8 text-center text-white mb-16 relative overflow-hidden">
                            <h2 class="text-3xl font-bold mb-4 uppercase">Zwiększ rozpoznawalność. Postaw na baner, który działa.</h2>
                            <p class="text-xl font-semibold mb-2">
                                POSIADASZ: <span>{{ firmPoints !== null ? firmPoints.toLocaleString() : '—' }}</span> PKT
                            </p>
                            <p class="text-xl font-bold mb-4">
                                BANER: <span>{{ props.product?.price ? parseInt(props.product.price).toLocaleString() : '—' }}</span> PKT
                            </p>

                            <div v-if="props.check" class="mb-8 text-sm bg-white/10 py-2 px-4 rounded-lg inline-block">
                                <p class="font-semibold">
                                    AKTYWNY OD: <span class="text-yellow-400">{{ props.check.start.slice(0, 10) }}</span>
                                    DO: <span class="text-yellow-400">{{ props.check.end.slice(0, 10) }}</span>
                                </p>
                            </div>

                            <div class="flex flex-col sm:flex-row justify-center gap-8 relative z-10 max-w-2xl mx-auto">
                                <div class="relative group flex-1">
                                    <span class="absolute -left-8 top-1/2 -translate-y-1/2 text-5xl font-bold text-white/20 group-hover:text-white/40 transition">1</span>
                                    <Link
                                        v-if="firmPoints !== null && props.product && firmPoints >= parseInt(props.product.price)"
                                        :href="route('buy.change', [props.product.id, props.product.price])"
                                        method="post"
                                        preserve-scroll
                                        as="button"
                                        class="w-full bg-[#e31e24] hover:bg-[#c1191f] text-white font-bold py-4 px-4 rounded-xl text-lg transition shadow-lg uppercase"
                                    >
                                        WYMIeŃ PUNKTY NA BANER
                                    </Link>
                                    <button
                                        v-else
                                        disabled
                                        class="w-full bg-gray-400 text-white font-bold py-4 px-4 rounded-xl text-lg uppercase cursor-not-allowed shadow-lg"
                                    >
                                        Niewystarczająca liczba punktów
                                    </button>
                                </div>

                                <div class="relative group flex-1">
                                    <span class="absolute -left-8 top-1/2 -translate-y-1/2 text-5xl font-bold text-white/20 group-hover:text-white/40 transition">2</span>
                                    <button
                                        @click="showForm = !showForm"
                                        class="w-full bg-[#00a3e0] hover:bg-[#008cc2] text-white font-bold py-4 px-4 rounded-xl text-lg transition shadow-lg uppercase"
                                    >
                                        {{ props.banner ? __('translate.update') : 'DODAJ NOWY BANER' }}
                                    </button>
                                </div>
                            </div>
                        </div>

                        <!-- Formularz (ukryty domyślnie) -->
                        <div v-show="showForm" class="mt-8 border-t pt-12 animate-fade-in-down">
                            <h2 class="text-2xl font-bold text-[#143d8c] uppercase mb-8">
                                {{ props.banner ? __('translate.edit') : __('translate.banners') }}
                            </h2>

                            <form @submit.prevent="createBanner" class="space-y-8">
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                                    <div class="space-y-6">
                                        <div>
                                            <InputLabel :value="__('translate.country')" class="text-[#143d8c] font-bold uppercase mb-2"/>
                                            <multiselect
                                                group-values="elements" group-label="group"
                                                :group-select="false"
                                                :selectLabel="__('translate.selectLabel')"
                                                :selectGroupLabel="__('translate.selectGroupLabel')"
                                                :selectedLabel="__('translate.selectedLabel')"
                                                :deselectLabel="__('translate.deselectLabel')"
                                                track-by="name"
                                                :multiple="true"
                                                label="name"
                                                :placeholder="__('translate.placeholder')"
                                                v-model="form.lang"
                                                :options="optionsCountry"
                                                class="rounded-xl"
                                            >
                                                <template #noResult><span>{{__('translate.noOptions')}}</span></template>
                                                <template #noOptions><span>{{__('translate.noResult')}}</span></template>
                                            </multiselect>
                                            <InputError :message="form.errors.lang" class="mt-2"/>
                                        </div>

                                        <div>
                                            <InputLabel for="url" :value="__('translate.url')" class="text-[#143d8c] font-bold uppercase mb-2"/>
                                            <TextInput
                                                id="url"
                                                v-model="form.url"
                                                class="w-full border-gray-300 focus:border-[#00a3e0] focus:ring-[#00a3e0] rounded-xl"
                                                type="text"
                                            />
                                            <InputError :message="form.errors.url" class="mt-2"/>
                                        </div>

                                        <div class="bg-[#00a3e0]/10 p-4 rounded-xl border border-[#00a3e0]/20">
                                            <div class="flex items-center">
                                                <input
                                                    id="is_active"
                                                    v-model="form.active"
                                                    type="checkbox"
                                                    class="h-5 w-5 text-[#00a3e0] border-gray-300 rounded focus:ring-[#00a3e0]"
                                                />
                                                <label for="is_active" class="ml-3 block font-bold text-[#143d8c] uppercase cursor-pointer">
                                                    {{ __('translate.active') }}
                                                </label>
                                            </div>
                                            <p class="mt-2 text-xs text-gray-600 italic">Określ, czy baner ma być widoczny w serwisie.</p>
                                        </div>
                                    </div>

                                    <div>
                                        <InputLabel for="photo" :value="__('translate.banner')" class="text-[#143d8c] font-bold uppercase mb-2" />
                                        <div class="border-2 border-dashed border-gray-300 rounded-3xl p-4">
                                            <file-pond
                                                name="photo"
                                                ref="uploadPhoto"
                                                :files="form.photo"
                                                :allow-multiple="false"
                                                :max-file-size="'4MB'"
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
                                                :labelFileProcessingError="serverMessage ? serverMessage : __('translate.labelFileProcessingError')"
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
                                                :accepted-file-types="'image/png, image/jpeg, image/jpg, image/gif, image/svg, image/webp'"
                                                credits="false"
                                                :server="{
                                                    url:'',
                                                    headers: { 'X-CSRF-TOKEN': usePage().props.csrf_token },
                                                    process: {
                                                        url: '/temporary/upload',
                                                        onload: (response) => {
                                                            form.photo.push(response);
                                                            return response;
                                                        },
                                                        onerror: (response) => {
                                                            serverMessage = JSON.parse(response).error.photo[0];
                                                        }
                                                    },
                                                    revert:{
                                                        url: '/temporary/delete',
                                                        onload: (response) => {
                                                                if (!response) return;
                                                                const fileIndex = form.photo.findIndex(el => el === response);
                                                                if (fileIndex !== -1) {
                                                                    form.photo.splice(fileIndex, 1);
                                                               }
                                                        }
                                                    },
                                                    remove:removeFile
                                                }"
                                            ></file-pond>
                                        </div>
                                        <InputError  :message="form.errors.photo" class="mt-1"/>
                                    </div>
                                </div>

                                <div class="flex items-center justify-end gap-4 pt-6 border-t">
                                    <ActionMessage :on="form.recentlySuccessful" class="text-green-600 font-bold">
                                        {{__('translate.updatedBanner')}}
                                    </ActionMessage>
                                    <button
                                        type="submit"
                                        :class="{ 'opacity-25': form.processing }"
                                        :disabled="form.processing"
                                        class="bg-[#143d8c] hover:bg-[#0f2d66] text-white font-bold py-4 px-12 rounded-xl text-xl transition shadow-lg uppercase flex items-center gap-2"
                                    >
                                        <spinner-action :process="form.processing">{{ props.banner ? __('translate.update') : __('translate.add') }}</spinner-action>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
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
