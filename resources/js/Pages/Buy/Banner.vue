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
    active: props.banner?.active ?? true,
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
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('translate.banner') }}
            </h2>
        </template>
        <div class="py-12 bg-gray-50/50 min-h-screen px-2 sm:px-0">
            <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                <!-- HEADER CARD -->
                <div class="bg-white rounded-[3rem] shadow-xl shadow-blue-900/5 border border-gray-100 p-10 mb-8">
                    <div class="flex items-center justify-between">
                        <div>
                            <h3 class="text-2xl font-black text-[#0A2C5C] uppercase tracking-tight">{{ __('translate.banner') }}</h3>
                            <p class="text-[10px] font-bold text-gray-400 uppercase tracking-widest mt-1">{{ __('translate.forInfo') }}</p>
                        </div>
                    </div>
                </div>

                <!-- NAGŁÓWEK I OPIS -->
                <div class="bg-white rounded-[3rem] shadow-xl shadow-blue-900/5 border border-gray-100 p-10 mb-8">
                    <div class="flex flex-col md:flex-row gap-12 items-center">
                        <div class="md:w-1/2">
                            <h3 class="text-2xl font-black text-[#0A2C5C] uppercase tracking-tight mb-2">{{ __('translate.banner').toUpperCase() }}</h3>
                            <p class="text-[10px] font-black text-gray-400 uppercase tracking-widest mb-6">{{ __('translate.bannerSlogan') }}</p>
                            <div class="h-px w-20 bg-gray-100 mb-6"></div>
                            <p class="text-sm font-bold text-[#0A2C5C] leading-relaxed uppercase">
                                {{ __('translate.bannerDescription') }}
                            </p>
                        </div>
                        <div class="md:w-1/2 flex justify-center">
                            <div class="relative">
                                <div class="absolute inset-0 bg-blue-500/5 blur-3xl rounded-full"></div>
                                <img src="/images/icons/firm/baner.svg" alt="Banner" class="relative max-w-sm h-auto transition-transform hover:scale-105 duration-500">
                            </div>
                        </div>
                    </div>
                </div>

                <!-- KOLUMNY INFORMACYJNE -->
                <div class="bg-white rounded-[3rem] shadow-xl shadow-blue-900/5 border border-gray-100 p-10 mb-8">
                    <div class="flex items-center gap-4 mb-10">
                        <h3 class="text-[10px] font-black text-[#0A2C5C] uppercase tracking-[0.2em]">{{ __('translate.information') }}</h3>
                        <div class="h-px flex-1 bg-gray-100"></div>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-3 gap-12">
                        <div class="group flex flex-col items-center text-center">
                            <div class="w-16 h-16 bg-gray-50 rounded-2xl flex items-center justify-center mb-6 transition-colors group-hover:bg-blue-50">
                                <img src="/images/icons/firm/what.svg" alt="What is" class="h-10">
                            </div>
                            <h3 class="text-xs font-black text-[#0A2C5C] uppercase tracking-widest mb-4">{{ __('translate.whatIsBanner') }}</h3>
                            <p class="text-[10px] font-bold text-gray-400 uppercase tracking-widest leading-loose">
                                {{ __('translate.whatIsBannerDescription') }}
                            </p>
                        </div>
                        <div class="group flex flex-col items-center text-center">
                            <div class="w-16 h-16 bg-gray-50 rounded-2xl flex items-center justify-center mb-6 transition-colors group-hover:bg-blue-50">
                                <img src="/images/icons/firm/have.svg" alt="What have" class="h-10">
                            </div>
                            <h3 class="text-xs font-black text-[#0A2C5C] uppercase tracking-widest mb-4">{{ __('translate.whatIncludeBanner') }}</h3>
                            <ul class="text-[10px] font-bold text-gray-400 uppercase tracking-widest leading-loose text-left space-y-2">
                                <li class="flex items-center gap-2">
                                    <div class="w-1.5 h-1.5 rounded-full bg-[#00a3e0]"></div>
                                    {{ __('translate.bannerInclude1') }}
                                </li>
                                <li class="flex items-center gap-2">
                                    <div class="w-1.5 h-1.5 rounded-full bg-[#00a3e0]"></div>
                                    {{ __('translate.bannerInclude2') }}
                                </li>
                                <li class="flex items-center gap-2">
                                    <div class="w-1.5 h-1.5 rounded-full bg-[#00a3e0]"></div>
                                    {{ __('translate.bannerInclude3') }}
                                </li>
                            </ul>
                        </div>
                        <div class="group flex flex-col items-center text-center">
                            <div class="w-16 h-16 bg-gray-50 rounded-2xl flex items-center justify-center mb-6 transition-colors group-hover:bg-blue-50">
                                <img src="/images/icons/firm/use.svg" alt="use" class="h-10">
                            </div>
                            <h3 class="text-xs font-black text-[#0A2C5C] uppercase tracking-widest mb-4">{{ __('translate.howUseBanner') }}</h3>
                            <ul class="text-[10px] font-bold text-gray-400 uppercase tracking-widest leading-loose text-left space-y-2">
                                <li class="flex items-center gap-2">
                                    <div class="w-1.5 h-1.5 rounded-full bg-[#00a3e0]"></div>
                                    {{ __('translate.bannerUse1') }}
                                </li>
                                <li class="flex items-center gap-2">
                                    <div class="w-1.5 h-1.5 rounded-full bg-[#00a3e0]"></div>
                                    {{ __('translate.bannerUse2') }}
                                </li>
                                <li class="flex items-center gap-2">
                                    <div class="w-1.5 h-1.5 rounded-full bg-[#00a3e0]"></div>
                                    {{ __('translate.bannerUse3') }}
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- AKCJE: WYMIANA PUNKTÓW / DODANIE BANERU -->
                <div class="bg-[#0A2C5C] rounded-[3rem] p-12 text-center text-white mb-8 relative overflow-hidden shadow-2xl shadow-blue-900/20">
                    <div class="absolute top-0 right-0 w-64 h-64 bg-blue-400/10 rounded-full blur-3xl -mr-32 -mt-32"></div>
                    <div class="absolute bottom-0 left-0 w-64 h-64 bg-blue-400/10 rounded-full blur-3xl -ml-32 -mb-32"></div>

                    <h2 class="text-2xl font-black mb-6 uppercase tracking-tight relative z-10">{{ __('translate.bannerCallToAction') }}</h2>

                    <div class="flex flex-wrap justify-center gap-8 mb-10 relative z-10">
                        <div class="bg-white/10 backdrop-blur-sm px-8 py-4 rounded-3xl border border-white/10">
                            <p class="text-[10px] font-black uppercase tracking-widest text-blue-200 mb-1">{{ __('translate.youHave') }}</p>
                            <p class="text-2xl font-black">{{ firmPoints !== null ? firmPoints.toLocaleString() : '—' }} <span class="text-[10px] text-blue-200">{{ __('translate.points').toUpperCase() }}</span></p>
                        </div>
                        <div class="bg-white/10 backdrop-blur-sm px-8 py-4 rounded-3xl border border-white/10">
                            <p class="text-[10px] font-black uppercase tracking-widest text-blue-200 mb-1">{{ __('translate.banner').toUpperCase() }}</p>
                            <p class="text-2xl font-black">{{ props.product?.price ? parseInt(props.product.price).toLocaleString() : '—' }} <span class="text-[10px] text-blue-200">{{ __('translate.points').toUpperCase() }}</span></p>
                        </div>
                    </div>

                    <div v-if="props.check" class="mb-10 flex flex-wrap justify-center items-center gap-4 relative z-10">
                        <div class="text-[10px] font-black uppercase tracking-widest bg-white/5 py-4 px-8 rounded-2xl border border-white/5">
                            {{ __('translate.activeFrom') }} <span class="text-blue-300 mx-2">{{ props.check.start.slice(0, 10) }}</span>
                            {{ __('translate.activeTo') }} <span class="text-blue-300 mx-2">{{ props.check.end.slice(0, 10) }}</span>
                        </div>
                        <div v-if="!props.banner?.active" class="text-[10px] font-black uppercase tracking-widest bg-red-500/10 text-red-400 py-4 px-8 rounded-2xl border border-red-500/20">
                            {{ __('translate.inactiveStatus').toUpperCase() }} (WYŁĄCZONY)
                        </div>
                        <div v-if="props.banner?.active && !props.banner?.active_admin" class="text-[10px] font-black uppercase tracking-widest bg-amber-500/10 text-amber-400 py-4 px-8 rounded-2xl border border-amber-500/20">
                            {{ __('translate.inactiveStatus').toUpperCase() }} (OCZEKUJE NA AKCEPTACJĘ ADMINA)
                        </div>
                    </div>

                    <div class="flex flex-col sm:flex-row justify-center gap-6 relative z-10 max-w-3xl mx-auto">
                        <div class="flex-1">
                            <Link
                                v-if="firmPoints !== null && props.product && firmPoints >= parseInt(props.product.price)"
                                :href="route('buy.change', [props.product.id, props.product.price])"
                                method="post"
                                preserve-scroll
                                as="button"
                                class="w-full bg-[#e31e24] hover:bg-[#c1191f] text-white text-[10px] font-black uppercase tracking-widest py-5 rounded-2xl transition-all shadow-lg shadow-red-900/20 hover:-translate-y-1 active:translate-y-0"
                            >
                                {{ __('translate.exchangePointsBanner') }}
                            </Link>
                            <button
                                v-else
                                disabled
                                class="w-full bg-white/10 text-white/40 text-[10px] font-black uppercase tracking-widest py-5 rounded-2xl cursor-not-allowed border border-white/5"
                            >
                                {{ __('translate.insufficientPoints') }}
                            </button>
                        </div>

                        <div class="flex-1">
                            <button
                                v-if="props.check"
                                @click="showForm = !showForm"
                                class="w-full bg-[#00a3e0] hover:bg-[#008cc2] text-white text-[10px] font-black uppercase tracking-widest py-5 rounded-2xl transition-all shadow-lg shadow-blue-400/20 hover:-translate-y-1 active:translate-y-0"
                            >
                                {{ props.banner ? __('translate.update') : __('translate.addNewBanner') }}
                            </button>
                            <button
                                v-else
                                disabled
                                class="w-full bg-gray-400 text-white text-[10px] font-black uppercase tracking-widest py-5 rounded-2xl cursor-not-allowed border border-gray-300 opacity-50"
                            >
                                {{ __('translate.addNewBanner') }}
                            </button>
                        </div>
                    </div>
                </div>

                <!-- FORMULARZ (UKRYTY DOMYŚLNIE) -->
                <transition
                    enter-active-class="transition duration-500 ease-out"
                    enter-from-class="transform scale-95 opacity-0"
                    enter-to-class="transform scale-100 opacity-100"
                    leave-active-class="transition duration-300 ease-in"
                    leave-from-class="transform scale-100 opacity-100"
                    leave-to-class="transform scale-95 opacity-0"
                >
                    <div v-show="showForm" class="bg-white rounded-[3rem] shadow-xl shadow-blue-900/5 border border-gray-100 p-10 mb-8">
                        <div class="flex items-center gap-4 mb-10">
                            <h3 class="text-[10px] font-black text-[#0A2C5C] uppercase tracking-[0.2em]">
                                {{ props.banner ? __('translate.edit') : __('translate.banners') }}
                            </h3>
                            <div class="h-px flex-1 bg-gray-100"></div>
                        </div>

                        <form @submit.prevent="createBanner" class="space-y-10">
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-10">
                                <div class="space-y-8">
                                    <div>
                                        <InputLabel :value="__('translate.country')" class="block text-[10px] font-black text-gray-400 mb-3 uppercase tracking-widest"/>
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
                                        >
                                            <template #noResult><span>{{__('translate.noOptions')}}</span></template>
                                            <template #noOptions><span>{{__('translate.noResult')}}</span></template>
                                        </multiselect>
                                        <InputError :message="form.errors.lang" class="mt-2 text-[10px] font-bold uppercase tracking-widest"/>
                                    </div>

                                    <div>
                                        <InputLabel for="url" :value="__('translate.url')" class="block text-[10px] font-black text-gray-400 mb-3 uppercase tracking-widest"/>
                                        <TextInput
                                            id="url"
                                            v-model="form.url"
                                            type="text"
                                            :placeholder="__('translate.url')"
                                        />
                                        <InputError :message="form.errors.url" class="mt-2 text-[10px] font-bold uppercase tracking-widest"/>
                                    </div>

                                    <div class="bg-gray-50 rounded-2xl p-6 border border-gray-100 flex items-center justify-between">
                                        <div class="flex items-center gap-4">
                                            <label class="relative inline-flex items-center cursor-pointer">
                                                <input
                                                    id="is_active"
                                                    v-model="form.active"
                                                    type="checkbox"
                                                    class="sr-only peer"
                                                />
                                                <div class="w-11 h-6 bg-gray-200 peer-focus:outline-none rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-[#00a3e0]"></div>
                                                <span class="ml-4 text-[10px] font-black text-[#0A2C5C] uppercase tracking-widest cursor-pointer">
                                                    {{ __('translate.active') }}
                                                </span>
                                            </label>
                                        </div>
                                        <p class="text-[8px] font-bold text-gray-400 uppercase tracking-widest italic max-w-[150px] text-right">{{ __('translate.bannerVisibilityInfo') }}</p>
                                    </div>
                                </div>

                                <div>
                                    <InputLabel for="photo" :value="__('translate.banner')" class="block text-[10px] font-black text-gray-400 mb-3 uppercase tracking-widest" />
                                    <div class="bg-gray-50 rounded-[2rem] p-4 border border-gray-100">
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
                                    <InputError :message="form.errors.photo" class="mt-2 text-[10px] font-bold uppercase tracking-widest"/>
                                </div>
                            </div>

                            <div class="flex items-center justify-end gap-6 pt-10 border-t border-gray-50">
                                <ActionMessage :on="form.recentlySuccessful" class="text-green-500 text-[10px] font-black uppercase tracking-widest">
                                    {{__('translate.updatedBanner')}}
                                </ActionMessage>
                                <button
                                    type="submit"
                                    :class="{ 'opacity-50': form.processing }"
                                    :disabled="form.processing"
                                    class="px-16 py-5 bg-[#0A2C5C] text-white text-[10px] font-black uppercase tracking-widest rounded-2xl hover:bg-blue-800 transition-all shadow-lg shadow-blue-900/20 hover:-translate-y-1 active:translate-y-0 flex items-center justify-center gap-3"
                                >
                                    <spinner-action :process="form.processing">{{ props.banner ? __('translate.update') : __('translate.add') }}</spinner-action>
                                </button>
                            </div>
                        </form>
                    </div>
                </transition>
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
