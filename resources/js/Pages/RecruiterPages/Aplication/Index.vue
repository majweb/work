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

const can = computed(() => usePage().props.permissionsCan);
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
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">{{ __('translate.applications') }}</h2>
        </template>

        <div class="py-12 relative">
            <Transition
                enter-active-class="transition-opacity duration-500"
                enter-from-class="opacity-0"
                enter-to-class="opacity-100"
                leave-active-class="transition-opacity duration-500"
                leave-from-class="opacity-100"
                leave-to-class="opacity-0"
            >
                <div v-if="showMessage" class="bg-white bg-opacity-90 fixed inset-0 flex items-center justify-center z-50 min-h-screen min-w-full text-center">
                    <div class="w-3/4 mx-auto">
                        <h2 class="text-2xl font-bold mb-4 text-gray-800">{{ __('translate.sent') }}</h2>
                        <p class="w-2/4 mx-auto text-gray-600 leading-relaxed">{{ __('translate.cvSentMessage') }}</p>
                    </div>
                </div>
            </Transition>

            <div class="max-w-screen-2xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white shadow-xl sm:rounded-lg p-8">
                    <!-- Filters Section -->
                    <div class="mb-8">
                        <h3 class="text-2xl font-bold text-gray-900 mb-6">{{ __('translate.filter') }}</h3>

                        <!-- CV type tabs -->
                        <div class="flex space-x-2 mb-6 border-b border-gray-200 flex-col md:flex-row">
                            <button @click="form.has_cv='all'" :class="form.has_cv==='all' ? 'bg-blue-500 text-white rounded-t-lg px-6 py-3' : 'bg-white text-gray-600 hover:bg-gray-50 px-6 py-3'">{{ __('translate.all') }}</button>
                            <button @click="form.has_cv='yes'" :class="form.has_cv==='yes' ? 'bg-blue-500 text-white rounded-t-lg px-6 py-3' : 'bg-white text-gray-600 hover:bg-gray-50 px-6 py-3'">{{ __('translate.classicCV') }}</button>
                            <button @click="form.has_cv='no'" :class="form.has_cv==='no' ? 'bg-blue-500 text-white rounded-t-lg px-6 py-3' : 'bg-white text-gray-600 hover:bg-gray-50 px-6 py-3'">{{ __('translate.videoAudioCV') }}</button>
                        </div>

                        <!-- Filters grid -->
                        <div class="grid grid-cols-1 md:grid-cols-4 gap-4 mb-4">
                            <div>
                                <label class="block text-xs font-semibold text-gray-600 mb-2 uppercase">{{ __('translate.projectID') }}</label>
                                <input v-model="form.project" type="text" :placeholder="__('translate.enterID')" class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:border-blue-500 focus:ring-2 focus:ring-blue-200 transition-all"/>
                            </div>
                            <div>
                                <label class="block text-xs font-semibold text-gray-600 mb-2 uppercase">{{ __('translate.position') }}</label>
                                <multiselect v-model="form.category" :options="props.optionsPosition" label="name" :placeholder="__('translate.selectPosition')" class="custom-multiselect"/>
                            </div>
                            <div>
                                <label class="block text-xs font-semibold text-gray-600 mb-2 uppercase">{{ __('translate.applicationStatus') }}</label>
                                <select v-model="form.status" class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:border-blue-500 focus:ring-2 focus:ring-blue-200 transition-all">
                                    <option value="">{{ __('translate.all') }}</option>
                                    <option value="yes">{{ __('translate.yes') }}</option>
                                    <option value="no">{{ __('translate.no') }}</option>
                                    <option value="maybe">{{ __('translate.statusMaybe') }}</option>
                                </select>
                            </div>
                            <div>
                                <label class="block text-xs font-semibold text-gray-600 mb-2 uppercase">{{ __('translate.date') }}</label>
                                <input v-model="form.date" type="date" class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:border-blue-500 focus:ring-2 focus:ring-blue-200 transition-all"/>
                            </div>
                        </div>

                        <!-- Additional CV filters -->
                        <div v-if="form.has_cv==='yes'" class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-6">
                            <div>
                                <label class="block text-xs font-semibold text-gray-600 mb-2 uppercase">{{ __('translate.language') }}</label>
                                <multiselect v-model="form.lang" :options="sortLangs" label="label" :placeholder="__('translate.selectLanguage')" class="custom-multiselect"/>
                            </div>
                            <div :class="{ 'opacity-50': !form.lang }">
                                <label class="block text-xs font-semibold text-gray-600 mb-2 uppercase">{{ __('translate.languageLevel') }}</label>
                                <multiselect v-model="form.Langlevel" :options="props.langLevels" label="name" :placeholder="__('translate.selectLevel')" :disabled="!form.lang" class="custom-multiselect"/>
                            </div>
                            <div>
                                <label class="block text-xs font-semibold text-gray-600 mb-2 uppercase">{{ __('translate.driveLicenseB') }}</label>
                                <select v-model="form.driveLicense" class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:border-blue-500 focus:ring-2 focus:ring-blue-200 transition-all">
                                    <option value="">{{ __('translate.all') }}</option>
                                    <option value="yes">{{ __('translate.yes') }}</option>
                                    <option value="no">{{ __('translate.no') }}</option>
                                </select>
                            </div>
                        </div>

                        <!-- Action buttons -->
                        <div class="flex flex-col sm:flex-row sm:justify-between sm:items-center mt-6 space-y-2 sm:space-y-0">
                            <!-- Lewa grupa przycisków -->
                            <div class="flex flex-col sm:flex-row sm:space-x-3 w-full sm:w-auto space-y-2 sm:space-y-0">
                                <button
                                    @click="exportToCSV"
                                    :disabled="isExporting || (firmLoginPoints < exportRequiredPoints)"
                                    class="w-full sm:w-auto px-6 py-3 bg-gray-800 text-white font-semibold text-sm rounded-lg hover:bg-gray-700 disabled:opacity-50 disabled:cursor-not-allowed transition-all uppercase"
                                >
                                    <span v-if="isExporting">{{ __('translate.exporting') }}</span>
                                    <span v-else>{{ __('translate.exportToSpreadsheet') }}</span>
                                </button>

                                <button
                                    @click="resetFilters"
                                    type="button"
                                    class="w-full sm:w-auto px-6 py-3 bg-white border-2 border-gray-300 text-gray-700 font-semibold text-sm rounded-lg hover:bg-gray-50 transition-all uppercase"
                                >
                                    {{ __('translate.resetFilters') }}
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- External firms section -->
                    <div v-if="formSend.apps.length" class="mb-6">
                        <multiselect v-model="formSend.externalFirms" :options="props.optionsExternal" label="name" :placeholder="__('translate.selectExternalFirms')" class="custom-multiselect mb-4" :multiple="true"/>
                        <button @click="submitForm" :disabled="formSend.processing || !formSend.externalFirms.length" class="w-full px-4 py-3 bg-blue-600 text-white font-semibold rounded-lg hover:bg-blue-700 flex items-center justify-center space-x-2 disabled:opacity-50 disabled:cursor-not-allowed transition-all">
                            <svg v-if="formSend.processing" class="animate-spin h-5 w-5 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                                <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8v4l3-3-3-3v4a8 8 0 010 16v-4l-3 3 3 3v-4a8 8 0 01-8-8z"></path>
                            </svg>
                            <span v-if="!formSend.processing">{{ __('translate.submitApplications') }}</span>
                            <span v-else>{{ __('translate.sending') }}</span>
                        </button>
                    </div>

                    <!-- Applications table -->
                    <div class="space-y-1">
                        <div class="hidden md:grid grid-cols-12 gap-4 px-6 py-4 bg-gray-50 rounded-t-lg font-semibold text-sm text-gray-600 uppercase">
                            <div class="col-span-1">ID</div>
                            <div class="col-span-3">{{ __('translate.candidate') }}</div>
                            <div class="col-span-2">{{ __('translate.status') }}</div>
                            <div class="col-span-2">{{ __('translate.date') }}</div>
                            <div class="col-span-2">{{ __('translate.note') }}</div>
                            <div class="col-span-1">CV</div>
                        </div>
                        <div v-if="applications.data.length === 0" class="text-center py-12 text-gray-500">{{ __('translate.noApplicationsAvailable') }}</div>
                        <div v-for="application in applications.data" :key="application.id" :style="getBackgroundStyle(application)" class="grid grid-cols-1 md:grid-cols-12 gap-4 px-6 py-4 bg-white border-b border-gray-200 hover:bg-gray-50 transition-all items-center">
                            <!-- checkbox + ID -->
                            <div class="col-span-1 flex items-center">
                                <input @change="changeIds" class="rounded border-gray-300 text-blue-500 shadow-sm focus:ring-blue-500 mr-2" type="checkbox" :id="'app-'+application.id" v-model="formSend.apps" :value="application.id"/>
                                <label class="text-sm font-medium text-gray-900" :for="'app-'+application.id">{{ application.id }}</label>
                            </div>

                            <!-- Candidate info -->
                            <div class="col-span-2 md:col-span-3 flex items-center space-x-3">
                                <div class="w-12 h-12 rounded-full bg-[#EBF4FF] flex items-center justify-center text-lg overflow-hidden text-[#7F9CF5]">
                                    <img v-if="application.worker?.profile_photo_url" :src="application.worker?.profile_photo_url" :alt="application.name" class="w-full h-full object-cover"/>
                                    <span v-else>{{ (application.name?.[0]||'') + (application.surname?.[0]||'') }}</span>
                                </div>
                                <div>
                                    <div class="font-bold text-gray-900">{{ application.name }} {{ application.surname }}</div>
                                    <div class="text-sm text-gray-500">{{ application.project?.position?.allTranslations?.title[usePage().props.language] || __('translate.positionPlaceholder') }}</div>
                                </div>
                            </div>

                            <!-- Status buttons -->
                            <div class="col-span-2 flex justify-center md:justify-start">
                                <button v-if="application.status==='maybe'" @click="can['application status'] && updateStatus(application.id,'yes')" :disabled="!can['application status']" class="min-w-[90px] px-6 py-2 bg-blue-500 text-white font-bold text-sm rounded-lg hover:bg-blue-600 transition-all disabled:opacity-50 disabled:cursor-not-allowed uppercase">{{ __('translate.maybe') }}</button>
                                <button v-else-if="application.status==='yes'" @click="can['application status'] && updateStatus(application.id,'no')" :disabled="!can['application status']" class="min-w-[90px] px-6 py-2 bg-blue-900 text-white font-bold text-sm rounded-lg hover:bg-blue-800 transition-all disabled:opacity-50 disabled:cursor-not-allowed uppercase">{{ __('translate.yes') }}</button>
                                <button v-else-if="application.status==='no'" @click="can['application status'] && updateStatus(application.id,'maybe')" :disabled="!can['application status']" class="min-w-[90px] px-6 py-2 bg-red-600 text-white font-bold text-sm rounded-lg hover:bg-red-700 transition-all disabled:opacity-50 disabled:cursor-not-allowed uppercase">{{ __('translate.no') }}</button>
                                <button v-else @click="can['application status'] && updateStatus(application.id,'maybe')" :disabled="!can['application status']" class="min-w-[90px] px-6 py-2 bg-gray-300 text-gray-700 font-bold text-sm rounded-lg hover:bg-gray-400 transition-all disabled:opacity-50 disabled:cursor-not-allowed uppercase">---</button>
                            </div>

                            <div class="col-span-2 flex justify-center md:justify-start text-sm text-gray-600">{{ application.created_at ? new Date(application.created_at).toLocaleDateString('pl-PL') : '' }}</div>
                            <div class="col-span-2 flex justify-center md:justify-start text-sm text-gray-600">{{ application.notes[0]?.content || '-' }}</div>

                            <!-- CV ikona -->
                            <div class="col-span-1 flex">
                                <div>
                                    <div v-if="application.cv_audio" class="w-10 h-15 rounded flex items-center justify-center" :title="__('translate.cv_audio')">
                                        <img class="text-gray-600" src="/images/icons/recruit/audio_cv.svg" :alt="__('translate.cv_audio')">
                                    </div>
                                    <div v-else-if="application.cv_video" class="w-10 h-15 rounded flex items-center justify-center" :title="__('translate.cv_video')">
                                        <img class="text-gray-600" src="/images/icons/recruit/video_cv.svg" :alt="__('translate.cv_video')">
                                    </div>
                                    <div v-else class="w-10 h-15 rounded flex items-center justify-center" :title="__('translate.cv_classic')">
                                        <img class="text-gray-600" src="/images/icons/recruit/klasyczne_cv.svg" :alt="__('translate.cv_classic')">
                                    </div>
                                </div>
                            </div>
                            <div class="col-span-1 flex">
                                <Link
                                    :href="route('project-aplications-recruits.show', application.id)"
                                    class="px-6 py-2 bg-blue-900 text-white font-bold text-sm rounded-lg hover:bg-blue-800 transition-all uppercase"
                                >
                                    {{__('translate.check')}}
                                </Link>
                            </div>
                        </div>
                    </div>
                    <!-- Pagination -->
                    <Pagination class="mt-4" :links="applications.links"/>
                </div>
            </div>
        </div>
    </AppLayout>
</template>
<style src="vue-multiselect/dist/vue-multiselect.css"></style>
<style lang="scss">
.custom-multiselect {
    .multiselect__tags {
        border: 1px solid #d1d5db;
        border-radius: 0.5rem;
        padding: 0.75rem 1rem;
        min-height: 48px;
        transition: all 0.2s;

        &:hover {
            border-color: #3b82f6;
        }
    }

    .multiselect__input {
        padding: 0;
        margin: 0;
    }

    .multiselect__single {
        padding: 0;
        margin: 0;
        font-size: 0.875rem;
        color: #374151;
    }

    .multiselect__placeholder {
        color: #9ca3af;
        padding: 0;
        margin: 0;
    }
}

.multiselect__tag{
    background: #3b82f6 !important;
    border-radius: 0.375rem;
    padding: 0.25rem 0.75rem;
}

.multiselect__tag-icon:after {
    color: #fff;
}

.multiselect__tag-icon:hover {
    background: #2563eb !important;
}

.multiselect__option--highlight {
    background: #3b82f6 !important;
    outline: none;
    color: white;
}

.multiselect__option--highlight:after {
    content: attr(data-select);
    background: #3b82f6 !important;
    color: white;
}

.multiselect__option--selected {
    background: #dbeafe !important;
    color: #1e40af;
    font-weight: 600;
}

.multiselect__option--selected.multiselect__option--highlight {
    background: #3b82f6 !important;
    color: #fff;
}

.multiselect__option--selected.multiselect__option--highlight:after {
    background: #3b82f6 !important;
    content: attr(data-deselect);
    color: white !important;
}

.multiselect__option--selected:after {
    content: attr(data-selected);
    color: #3b82f6;
    background: transparent !important;
}

.multiselect__select {
    height: 48px;
}

.multiselect__content-wrapper {
    border-radius: 0.5rem;
    border: 1px solid #d1d5db;
    box-shadow: 0 4px 6px -1px rgb(0 0 0 / 0.1);
}
</style>
