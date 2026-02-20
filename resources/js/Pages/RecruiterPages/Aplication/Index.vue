<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import {Link, useForm, usePage} from '@inertiajs/vue3';
import {computed, nextTick, ref, watch} from 'vue';
import {router} from '@inertiajs/vue3';
import { pickBy, debounce } from 'lodash';
import Multiselect from "vue-multiselect";
import Pagination from "@/Components/Pagination.vue";

const isExporting = ref(false);

const props = defineProps({
    acceptedCount: Number,
    maybeCount: Number,
    noCount: Number,
    optionsPosition: Object,
    applications: Object,
    optionsExternal: Object,
    filters: Object,
    langLevels: Array,
});

const firmLoginPoints = computed(() => usePage().props.firmLoginPoints);
const exportRequiredPoints = computed(() => usePage().props.exportRequiredPoints);

const form = ref({
    project: props.filters?.project || '',
    status: props.filters?.status || '',
    recruiter: props.filters?.recruiter || '',
    category: props.filters?.category?.value || '',
    has_cv: props.filters?.has_cv || 'all',
    lang: props.filters?.lang || '',
    Langlevel: props.filters?.Langlevel || '',
    skill: props.filters?.skill || '',
    date: props.filters?.date || '',
    driveLicense: props.filters?.driveLicense || '',
});

const formSend = useForm({
    externalFirms: [],
    apps: []
});

const updateStatus = (id, status) => {
    router.put(route('project-aplications-recruits.update', id), { status }, {
        preserveScroll: true,
        preserveState: true
    });
};

const resetFilters = () => {
    form.value = {
        project: '',
        status: '',
        category: '',
        recruiter: '',
        has_cv: 'all',
        lang: '',
        Langlevel: '',
        driveLicense: '',
        date: '',
    };
    router.get(route('project-aplications-recruits.index'), {}, {
        preserveState: true,
        replace: true,
    });
};

const getBackgroundStyle = (application) => {
    if (application.opened_by?.color) {
        return { backgroundColor: `${application.opened_by.color}15` };
    }
    return {};
};

const sortLangs = computed(() => {
    const excludedLangs = ['am', 'ps', 'bn', 'dz', 'zh', 'ka', 'ja', 'km', 'ko', 'dv', 'th'];
    return usePage().props.languages
        .filter(lang => lang?.value && !excludedLangs.includes(lang.value))
        .sort((a, b) => a.label.localeCompare(b.label));
});

const exportToCSV = async () => {
    isExporting.value = true;
    try {
        const response = await axios.post(route('recruit.project-aplications-recruits.export'), { form: form.value }, { responseType: 'blob' });
        const blob = new Blob([response.data], { type: 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet' });
        const link = document.createElement('a');
        link.href = URL.createObjectURL(blob);
        link.download = `applications_${new Date().toISOString().split('T')[0]}.xlsx`;
        document.body.appendChild(link);
        link.click();
        link.remove();
        router.reload({ only: ['firmLoginPoints'] });
    } catch (error) {
        if (error.response?.status === 403) {
            alert(error.response.data.message || __('translate.noPoints'));
        }
    } finally {
        isExporting.value = false;
    }
};

watch(form, debounce(() => {
    let rest = pickBy({
        ...form.value,
        category: form.value.category?.value || form.value.category,
        recruiter: form.value.recruiter?.value || form.value.recruiter,
        lang: form.value.has_cv === 'yes' ? (form.value.lang?.value || form.value.lang) : undefined,
        Langlevel: form.value.has_cv === 'yes' ? (form.value.Langlevel?.value || form.value.Langlevel) : undefined,
        experience: form.value.has_cv === 'yes' ? (form.value.experience?.value || form.value.experience) : undefined,
        driveLicense: form.value.has_cv === 'yes' ? form.value.driveLicense : '',
        date: form.value.date || undefined,
    });
    router.get(route('project-aplications-recruits.index'), rest, { preserveState: true, preserveScroll: true, replace: true });
}, 300), { deep: true });

const showMessage = ref(false);
watch(() => usePage().props.sender, (newVal) => {
    if (newVal) {
        showMessage.value = false;
        nextTick(() => {
            showMessage.value = true;
            setTimeout(() => { showMessage.value = false; }, 3000);
        });
    }
}, { immediate: true });

const changeIds = () => {
    if (formSend.apps.length === 0) {
        formSend.externalFirms = [];
    }
};

const submitForm = () => {
    formSend.post(route('send.external.recruit'), { onSuccess: () => formSend.reset('externalFirms', 'apps') });
};
</script>

<template>
    <AppLayout :title="__('translate.applications')">
        <template #header>
            <div class="flex items-center justify-between">
                <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                    {{ __('translate.applications') }}
                </h2>
            </div>
        </template>

        <div class="py-12 bg-gray-50/50 min-h-screen">
            <Transition
                enter-active-class="transition-opacity duration-500"
                enter-from-class="opacity-0"
                enter-to-class="opacity-100"
                leave-active-class="transition-opacity duration-500"
                leave-from-class="opacity-100"
                leave-to-class="opacity-0"
            >
                <div v-if="showMessage" class="bg-white/90 fixed inset-0 flex items-center justify-center z-50 min-h-screen min-w-full text-center backdrop-blur-sm">
                    <div class="w-3/4 mx-auto">
                        <h2 class="text-4xl font-black mb-4 text-[#0A2C5C] uppercase tracking-[0.2em]">{{ __('translate.sent') }}</h2>
                        <p class="w-2/4 mx-auto text-gray-500 font-bold uppercase tracking-widest leading-relaxed">{{ __('translate.cvSentMessage') }}</p>
                    </div>
                </div>
            </Transition>

            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-8">
                <!-- Filters Section -->
                <div class="bg-white rounded-[3rem] shadow-xl shadow-blue-900/5 border border-gray-100 p-10">
                    <div class="flex items-center gap-4 mb-8">
                        <h3 class="text-[10px] font-black text-[#0A2C5C] uppercase tracking-[0.2em]">{{ __('translate.filter') }}</h3>
                        <div class="h-px flex-1 bg-gray-100"></div>
                    </div>

                    <!-- CV type tabs -->
                    <div class="flex flex-wrap gap-3 mb-10">
                        <button
                            @click="form.has_cv='all'"
                            :class="form.has_cv==='all'
                                ? 'bg-[#0A2C5C] text-white shadow-lg shadow-blue-900/20'
                                : 'bg-white text-gray-500 border border-gray-100 hover:bg-gray-50'"
                            class="px-8 py-3 text-[10px] font-black uppercase tracking-widest rounded-2xl transition-all"
                        >
                            {{ __('translate.all') }}
                        </button>
                        <button
                            @click="form.has_cv='yes'"
                            :class="form.has_cv==='yes'
                                ? 'bg-[#0A2C5C] text-white shadow-lg shadow-blue-900/20'
                                : 'bg-white text-gray-500 border border-gray-100 hover:bg-gray-50'"
                            class="px-8 py-3 text-[10px] font-black uppercase tracking-widest rounded-2xl transition-all"
                        >
                            {{ __('translate.classicCV') }}
                        </button>
                        <button
                            @click="form.has_cv='no'"
                            :class="form.has_cv==='no'
                                ? 'bg-[#0A2C5C] text-white shadow-lg shadow-blue-900/20'
                                : 'bg-white text-gray-500 border border-gray-100 hover:bg-gray-50'"
                            class="px-8 py-3 text-[10px] font-black uppercase tracking-widest rounded-2xl transition-all"
                        >
                            {{ __('translate.videoAudioCV') }}
                        </button>
                    </div>

                    <!-- Filters grid -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                        <div class="space-y-2">
                            <label class="block text-[10px] font-black text-gray-400 mb-2 uppercase tracking-widest">{{ __('translate.projectID') }}</label>
                            <input v-model="form.project" type="text" :placeholder="__('translate.enterID')" class="w-full px-5 py-4 text-xs rounded-2xl border-gray-100 bg-gray-50 focus:bg-white focus:ring-0 focus:border-[#00a0e3] transition-all placeholder-gray-400 font-bold tracking-widest uppercase"/>
                        </div>
                        <div class="space-y-2">
                            <label class="block text-[10px] font-black text-gray-400 mb-2 uppercase tracking-widest">{{ __('translate.position') }}</label>
                            <multiselect v-model="form.category" :options="props.optionsPosition" label="name"
                                         :selectLabel="__('translate.selectLabel')"
                                         :selectGroupLabel="__('translate.selectGroupLabel')"
                                         :selectedLabel="__('translate.selectedLabel')"
                                         :deselectLabel="__('translate.deselectLabel')"

                                         :placeholder="__('translate.selectPosition')" class="custom-multiselect"/>
                        </div>
                        <div class="space-y-2">
                            <label class="block text-[10px] font-black text-gray-400 mb-2 uppercase tracking-widest">{{ __('translate.applicationStatus') }}</label>
                            <select v-model="form.status" class="w-full px-5 py-4 text-xs rounded-2xl border-gray-100 bg-gray-50 focus:bg-white focus:ring-0 focus:border-[#00a0e3] transition-all font-bold tracking-widest uppercase appearance-none">
                                <option value="">{{ __('translate.all') }}</option>
                                <option value="yes">{{ __('translate.yes') }}</option>
                                <option value="no">{{ __('translate.no') }}</option>
                                <option value="maybe">{{ __('translate.statusMaybe') }}</option>
                            </select>
                        </div>
                        <div class="space-y-2">
                            <label class="block text-[10px] font-black text-gray-400 mb-2 uppercase tracking-widest">{{ __('translate.date') }}</label>
                            <input v-model="form.date" type="date" class="w-full px-5 py-4 text-xs rounded-2xl border-gray-100 bg-gray-50 focus:bg-white focus:ring-0 focus:border-[#00a0e3] transition-all font-bold tracking-widest uppercase"/>
                        </div>
                    </div>

                    <!-- Additional CV filters -->
                    <div v-if="form.has_cv==='yes'" class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-10 pt-6 border-t border-gray-50">
                        <div class="space-y-2">
                            <label class="block text-[10px] font-black text-gray-400 mb-2 uppercase tracking-widest">{{ __('translate.language') }}</label>
                            <multiselect
                                :selectLabel="__('translate.selectLabel')"
                                :selectGroupLabel="__('translate.selectGroupLabel')"
                                :selectedLabel="__('translate.selectedLabel')"
                                :deselectLabel="__('translate.deselectLabel')"
                                v-model="form.lang" :options="sortLangs" label="label" :placeholder="__('translate.selectLanguage')" class="custom-multiselect"/>
                        </div>
                        <div class="space-y-2" :class="{ 'opacity-50 pointer-events-none': !form.lang }">
                            <label class="block text-[10px] font-black text-gray-400 mb-2 uppercase tracking-widest">{{ __('translate.languageLevel') }}</label>
                            <multiselect
                                :selectLabel="__('translate.selectLabel')"
                                :selectGroupLabel="__('translate.selectGroupLabel')"
                                :selectedLabel="__('translate.selectedLabel')"
                                :deselectLabel="__('translate.deselectLabel')"
                                v-model="form.Langlevel" :options="props.langLevels" label="name" :placeholder="__('translate.selectLevel')" :disabled="!form.lang" class="custom-multiselect"/>
                        </div>
                        <div class="space-y-2">
                            <label class="block text-[10px] font-black text-gray-400 mb-2 uppercase tracking-widest">{{ __('translate.driveLicenseB') }}</label>
                            <select v-model="form.driveLicense" class="w-full px-5 py-4 text-xs rounded-2xl border-gray-100 bg-gray-50 focus:bg-white focus:ring-0 focus:border-[#00a0e3] transition-all font-bold tracking-widest uppercase appearance-none">
                                <option value="">{{ __('translate.all') }}</option>
                                <option value="yes">{{ __('translate.yes') }}</option>
                                <option value="no">{{ __('translate.no') }}</option>
                            </select>
                        </div>
                    </div>

                    <!-- Action buttons -->
                    <div class="flex flex-col sm:flex-row sm:justify-between sm:items-center mt-6 gap-4 pt-6 border-t border-gray-50">
                        <div class="flex flex-wrap gap-4">
                            <button
                                @click="exportToCSV"
                                :disabled="isExporting || (firmLoginPoints < exportRequiredPoints)"
                                class="w-full sm:w-auto px-10 py-4 bg-[#0A2C5C] text-white text-[10px] font-black uppercase tracking-widest rounded-2xl hover:bg-blue-800 disabled:opacity-50 disabled:cursor-not-allowed transition-all shadow-lg shadow-blue-900/20 hover:-translate-y-0.5 active:translate-y-0"
                            >
                                <span v-if="isExporting">{{ __('translate.exporting') }}</span>
                                <span v-else>{{ __('translate.exportToSpreadsheet') }}</span>
                            </button>

                            <button
                                @click="resetFilters"
                                type="button"
                                class="w-full sm:w-auto px-10 py-4 bg-white border border-gray-100 text-gray-500 text-[10px] font-black uppercase tracking-widest rounded-2xl hover:bg-gray-50 shadow-sm transition-all hover:-translate-y-0.5"
                            >
                                {{ __('translate.resetFilters') }}
                            </button>
                        </div>
                    </div>
                </div>

                <!-- External firms section -->
                <div v-if="formSend.apps.length" class="bg-white rounded-[2rem] border border-blue-100 p-8 shadow-xl shadow-blue-900/5">
                    <div class="flex items-center gap-4 mb-6">
                        <h3 class="text-[10px] font-black text-blue-500 uppercase tracking-widest">{{ __('translate.submitApplications') }}</h3>
                        <div class="h-px flex-1 bg-blue-50"></div>
                    </div>
                    <div class="flex flex-col md:flex-row gap-4 items-end">
                        <div class="flex-1 w-full">
                            <label class="block text-[10px] font-black text-gray-400 mb-2 uppercase tracking-widest">{{ __('translate.selectExternalFirms') }}</label>
                            <multiselect
                                :selectLabel="__('translate.selectLabel')"
                                :selectGroupLabel="__('translate.selectGroupLabel')"
                                :selectedLabel="__('translate.selectedLabel')"
                                :deselectLabel="__('translate.deselectLabel')"
                                v-model="formSend.externalFirms" :options="props.optionsExternal" label="name" :placeholder="__('translate.selectExternalFirms')" class="custom-multiselect" :multiple="true"/>
                        </div>
                        <button @click="submitForm" :disabled="formSend.processing || !formSend.externalFirms.length" class="w-full md:w-auto px-10 py-4 bg-blue-600 text-white text-[10px] font-black uppercase tracking-widest rounded-2xl hover:bg-blue-700 flex items-center justify-center gap-3 disabled:opacity-50 disabled:cursor-not-allowed transition-all shadow-lg shadow-blue-600/20">
                            <svg v-if="formSend.processing" class="animate-spin h-4 w-4 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                                <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8v4l3-3-3-3v4a8 8 0 010 16v-4l-3 3 3 3v-4a8 8 0 01-8-8z"></path>
                            </svg>
                            <span>{{ formSend.processing ? __('translate.sending') : __('translate.submitApplications') }}</span>
                        </button>
                    </div>
                </div>

                <!-- Applications List -->
                <div class="space-y-4 pb-12">
                    <div class="flex items-center gap-4 mb-6 px-6">
                        <h3 class="text-[10px] font-black text-[#0A2C5C] uppercase tracking-[0.2em]">{{ __('translate.applications') }}</h3>
                        <div class="h-px flex-1 bg-gray-100"></div>
                    </div>

                    <div v-if="applications.data.length === 0" class="bg-white rounded-[3rem] p-20 text-center shadow-xl shadow-blue-900/5 border border-gray-100">
                        <div class="w-20 h-20 bg-gray-50 rounded-full flex items-center justify-center mx-auto mb-6">
                            <svg class="w-10 h-10 text-gray-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                            </svg>
                        </div>
                        <p class="text-xs font-black text-gray-400 uppercase tracking-widest">{{ __('translate.noApplicationsAvailable') }}</p>
                    </div>

                    <div v-for="application in applications.data" :key="application.id"
                         :style="getBackgroundStyle(application)"
                         class="group bg-white rounded-[2.5rem] border border-gray-100 shadow-sm hover:shadow-xl hover:shadow-blue-900/5 transition-all duration-300 hover:-translate-y-1 p-6"
                    >
                        <div class="grid grid-cols-1 md:grid-cols-12 gap-6 items-center">
                            <!-- checkbox + ID -->
                            <div class="col-span-1 md:col-span-1 flex items-center justify-center md:justify-start">
                                <label class="group/check flex items-center cursor-pointer">
                                    <div class="relative flex items-center justify-center">
                                        <input
                                            @change="changeIds"
                                            type="checkbox"
                                            :id="'app-'+application.id"
                                            v-model="formSend.apps"
                                            :value="application.id"
                                            class="peer sr-only"
                                        />
                                        <div class="h-6 w-6 rounded-lg border-2 border-gray-100 bg-white transition-all peer-checked:bg-[#0A2C5C] peer-checked:border-transparent group-hover/check:border-blue-200 flex items-center justify-center">
                                            <svg class="w-4 h-4 text-white opacity-0 peer-checked:opacity-100 transition-opacity" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7" /></svg>
                                        </div>
                                    </div>
                                    <span class="ml-3 text-[10px] font-black text-gray-400 uppercase tracking-widest group-hover/check:text-[#0A2C5C] transition-colors">ID {{ application.id }}</span>
                                </label>
                            </div>

                            <!-- Candidate info -->
                            <div class="col-span-1 md:col-span-3 flex items-center gap-4">
                                <div class="w-14 h-14 rounded-2xl bg-blue-50 flex items-center justify-center overflow-hidden shrink-0 border-2 border-white shadow-sm transition-transform duration-300 group-hover:scale-105">
                                    <img v-if="application.worker?.profile_photo_url" :src="application.worker?.profile_photo_url" :alt="application.name" class="w-full h-full object-cover"/>
                                    <div v-else class="text-[#0A2C5C] font-black text-lg">
                                        {{ (application.name?.[0]||'') + (application.surname?.[0]||'') }}
                                    </div>
                                </div>
                                <div class="min-w-0">
                                    <div class="font-black text-gray-900 uppercase tracking-tight truncate leading-tight">{{ application.name }} {{ application.surname }}</div>
                                    <div class="text-[10px] font-bold text-gray-400 uppercase tracking-widest mt-1 truncate">
                                        {{ application.project?.position?.allTranslations?.title[usePage().props.language] || __('translate.positionPlaceholder') }}
                                    </div>
                                </div>
                            </div>

                            <!-- Status buttons -->
                            <div class="col-span-1 md:col-span-2 flex justify-center">
                                <button
                                    v-if="application.status==='maybe'"
                                    @click="updateStatus(application.id,'yes')"
                                    class="w-full px-4 py-3 bg-cyan-500 text-white text-[10px] font-black rounded-xl hover:bg-cyan-600 shadow-md shadow-cyan-500/10 transition-all uppercase tracking-widest"
                                >
                                    {{ __('translate.maybe') }}
                                </button>
                                <button
                                    v-else-if="application.status==='yes'"
                                    @click="updateStatus(application.id,'no')"
                                    class="w-full px-4 py-3 bg-[#0A2C5C] text-white text-[10px] font-black rounded-xl hover:bg-blue-800 shadow-md shadow-blue-900/10 transition-all uppercase tracking-widest"
                                >
                                    {{ __('translate.yes') }}
                                </button>
                                <button
                                    v-else-if="application.status==='no'"
                                    @click="updateStatus(application.id,'maybe')"
                                    class="w-full px-4 py-3 bg-red-600 text-white text-[10px] font-black rounded-xl hover:bg-red-700 shadow-md shadow-red-600/10 transition-all uppercase tracking-widest"
                                >
                                    {{ __('translate.no') }}
                                </button>
                                <button
                                    v-else
                                    @click="updateStatus(application.id,'maybe')"
                                    class="w-full px-4 py-3 bg-gray-50 text-gray-400 text-[10px] font-black rounded-xl hover:bg-gray-100 border border-gray-100 transition-all uppercase tracking-widest"
                                >
                                    ---
                                </button>
                            </div>

                            <!-- Date & Note -->
                            <div class="col-span-1 md:col-span-2 flex flex-col items-center md:items-start">
                                <div class="text-[10px] font-black text-gray-400 uppercase tracking-widest mb-1">{{ __('translate.date') }}</div>
                                <div class="text-xs font-bold text-gray-700 uppercase tracking-tight">{{ application.created_at ? new Date(application.created_at).toLocaleDateString('pl-PL') : '' }}</div>
                            </div>

                            <div class="col-span-1 md:col-span-2 flex flex-col items-center md:items-start">
                                <div class="text-[10px] font-black text-gray-400 uppercase tracking-widest mb-1">{{ __('translate.note') }}</div>
                                <div class="text-xs font-bold text-gray-700 uppercase tracking-tight truncate w-full max-w-[200px]" :title="application.notes?.[0]?.content">
                                    {{ application.notes?.[0]?.content || '—' }}
                                </div>
                            </div>

                            <!-- CV Icon & Action -->
                            <div class="col-span-1 md:col-span-2 flex items-center justify-center md:justify-end gap-6">
                                <div class="shrink-0 transition-transform group-hover:scale-110">
                                    <div v-if="application.cv_audio" class="w-20 h-20 flex items-center justify-center" :title="__('translate.cv_audio')">
                                        <img class="w-full h-full object-contain opacity-60 group-hover:opacity-100 transition-opacity" src="/images/icons/recruit/audio_cv.svg" :alt="__('translate.cv_audio')">
                                    </div>
                                    <div v-else-if="application.cv_video" class="w-10 h-10 flex items-center justify-center" :title="__('translate.cv_video')">
                                        <img class="w-full h-full object-contain opacity-60 group-hover:opacity-100 transition-opacity" src="/images/icons/recruit/video_cv.svg" :alt="__('translate.cv_video')">
                                    </div>
                                    <div v-else class="w-10 h-10 flex items-center justify-center" :title="__('translate.cv_classic')">
                                        <img class="w-full h-full object-contain opacity-60 group-hover:opacity-100 transition-opacity" src="/images/icons/recruit/klasyczne_cv.svg" :alt="__('translate.cv_classic')">
                                    </div>
                                </div>

                                <Link
                                    :href="route('project-aplications-recruits.show', application.id)"
                                    class="px-8 py-3 bg-white text-[#0A2C5C] text-[10px] font-black rounded-xl border border-gray-100 shadow-sm hover:shadow-md hover:bg-gray-50 transition-all uppercase tracking-widest"
                                >
                                    {{__('translate.check')}}
                                </Link>
                            </div>
                        </div>
                    </div>

                    <!-- Pagination -->
                    <div class="mt-8">
                        <Pagination :links="applications.links"/>
                    </div>
                </div>
            </div>
        </div>
    </AppLayout>
</template>
<style src="vue-multiselect/dist/vue-multiselect.css"></style>
<style lang="scss">
.multiselect__tags {
    border: 1px solid #f3f4f6 !important; /* gray-100 */
    border-radius: 1rem !important; /* rounded-2xl */
    padding: 1rem 2.5rem 1rem 1.25rem !important;
    background: #f9fafb !important; /* gray-50 */
    min-height: 58px !important;
    display: flex !important;
    align-items: center !important;
    flex-wrap: wrap !important;
}

.multiselect__placeholder {
    margin-bottom: 0 !important;
    padding-top: 0 !important;
    color: #9ca3af !important; /* text-gray-400 */
    font-size: 0.75rem !important; /* text-xs */
    font-weight: 700 !important;
    text-transform: uppercase !important;
    letter-spacing: 0.05em !important;
}

.multiselect__single {
    margin-bottom: 0 !important;
    padding-left: 0 !important;
    font-size: 0.75rem !important;
    background: transparent !important;
    font-weight: 700 !important;
    text-transform: uppercase !important;
    letter-spacing: 0.05em !important;
    color: #374151 !important;
}

.multiselect__input {
    margin-bottom: 0 !important;
    background: transparent !important;
    font-size: 0.75rem !important;
    font-weight: 700 !important;
}

.multiselect__select {
    height: 58px !important;
    width: 2.5rem !important;
}

.multiselect__option--highlight {
    background: #0A2C5C !important;
    outline: none;
    color: white !important;
}

.multiselect__option--highlight:after {
    background: #0A2C5C !important;
}

.multiselect__option--selected {
    background: #f3f4f6 !important;
    color: #0A2C5C !important;
    font-weight: 900 !important;
    text-transform: uppercase !important;
    font-size: 10px !important;
    letter-spacing: 0.1em !important;
}

.multiselect__tag {
    background: #0A2C5C !important;
    border-radius: 0.5rem !important;
    padding: 6px 26px 6px 10px !important;
    font-size: 10px !important;
    font-weight: 900 !important;
    text-transform: uppercase !important;
    letter-spacing: 0.1em !important;
}

.multiselect__tag-icon:after {
    color: white !important;
}

.multiselect__tag-icon:hover {
    background: #1e3a8a !important;
}

.multiselect__content-wrapper {
    border: 1px solid #f3f4f6 !important;
    border-top: none !important;
    border-bottom-left-radius: 1rem !important;
    border-bottom-right-radius: 1rem !important;
    box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1) !important;
}

.custom-scrollbar::-webkit-scrollbar {
    width: 4px;
}
.custom-scrollbar::-webkit-scrollbar-track {
    background: transparent;
}
.custom-scrollbar::-webkit-scrollbar-thumb {
    background: #e5e7eb;
    border-radius: 10px;
}
.custom-scrollbar::-webkit-scrollbar-thumb:hover {
    background: #d1d5db;
}
</style>
