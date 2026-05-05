<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import {Link, useForm, usePage} from '@inertiajs/vue3';
import DialogModal from '@/Components/DialogModal.vue';
import Dropdown from '@/Components/Dropdown.vue';
import DropdownLink from '@/Components/DropdownLink.vue';
import {computed, nextTick, ref, watch} from 'vue';
import { useProjectHelpers } from "@/Composables/useProjectHelpers.js";
import {router} from '@inertiajs/vue3';
import { pickBy, debounce } from 'lodash';
import Multiselect from "vue-multiselect";
import Pagination from "@/Components/Pagination.vue";
import __ from "@/lang.js";

const props = defineProps({
    acceptedCount: Number,
    maybeCount: Number,
    noCount: Number,
    optionsPosition: Object,
    optionsRecruits: Object,
    optionsExternal: Object,
    applications: Object,
    filters: Object,
    langLevels: Array,
    countries: Array,
});

const isExporting = ref(false);
const showNoPointsModal = ref(false);
const noPointsMessage = ref('');
const showAdditionalFilters = ref(false);
const optionsCities = ref([]);
const optionsCategoriesFiltered = ref(props.optionsPosition || []);
const optionsCategorySub = ref([]);
const optionsProfession = ref([]);
const optionsPositionLocal = ref([]);

const { getPositionTitle } = useProjectHelpers();

const lang = computed(()=>usePage().props.language);
const firmLoginPoints = computed(()=>usePage().props.firmLoginPoints);
const exportRequiredPoints = computed(()=>usePage().props.exportRequiredPoints);

const form = ref({
    project: props.filters?.project || '',
    status: props.filters?.status || '',
    recruiter: props.filters?.recruiter || '',
    country: props.filters?.country || '',
    city: props.filters?.city || '',
    category: props.filters?.category || '',
    categorySub: props.filters?.categorySub || '',
    profession: props.filters?.profession || '',
    position: props.filters?.position || '',
    has_cv: props.filters?.has_cv || 'all',
    lang: props.filters?.lang || '',
    Langlevel: props.filters?.Langlevel || '',
    driveLicense: props.filters?.driveLicense || '',
    has_candidate: props.filters?.has_candidate || '',
    date: props.filters?.date || '',
});

const formSend = useForm({
    externalFirms: [],
    apps: []
})

const updateStatus = (id, status) => {
    router.put(route('firm.applications.update-status', id), {
        status
    }, {
        preserveScroll: true,
        preserveState: true,
        only: ['applications', 'maybeCount', 'acceptedCount', 'noCount']
    });
};

const resetFilters = () => {
    form.value = {
        project: '',
        status: '',
        category: '',
        categorySub: '',
        profession: '',
        position: '',
        recruiter: '',
        country: '',
        city: '',
        has_cv: 'all',
        lang: '',
        Langlevel: '',
        driveLicense: '',
        has_candidate: '',
        date: '',
    };

    router.get(route('aplications.index'), {}, {
        preserveState: true,
        replace: true,
    });
};


const exportToCSV = async () => {
    isExporting.value = true;

    try {
        const response = await axios.post(route('firm.applications.export'), {
            form: form.value,
            apps: formSend.apps,
        }, {
            responseType: 'blob',
        });

        const blob = new Blob([response.data], {
            type: 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet',
        });

        const link = document.createElement('a');
        link.href = URL.createObjectURL(blob);
        link.download = `aplikacje_${new Date().toISOString().split('T')[0]}.xlsx`;
        document.body.appendChild(link);
        link.click();
        link.remove();

        router.reload({ only: ['firmLoginPoints'] });
    } catch (error) {
        if (error.response?.status === 403) {
            noPointsMessage.value = error.response.data.message || __('translate.noPoints');
            showNoPointsModal.value = true;
        } else {
            noPointsMessage.value = __('translate.exportError');
            showNoPointsModal.value = true;
        }
    } finally {
        isExporting.value = false;
    }
};

watch(form, debounce(function (value) {
    let rest = pickBy({
        project: value.project,
        status: value.status,
        country: value.country?.value || value.country,
        city: value.city?.value || value.city,
        category: value.category?.value || value.category,
        categorySub: value.categorySub?.value || value.categorySub,
        profession: value.profession?.value || value.profession,
        position: value.position?.value || value.position,
        recruiter: value.recruiter?.value || value.recruiter,
        has_cv: value.has_cv === 'all' ? null : value.has_cv,
        lang: value.has_cv === 'yes' ? (value.lang?.value || value.lang) : undefined,
        Langlevel: value.has_cv === 'yes' ? (value.Langlevel?.value || value.Langlevel) : undefined,
        driveLicense: value.has_cv === 'yes' ? value.driveLicense : '',
        has_candidate: value.has_candidate,
        date: value.date,
    });

    router.get(route('aplications.index'), rest, {
        preserveState: true,
        preserveScroll: true,
        replace: true,
    });
}, 300), { deep: true });

// Kaskadowe pobieranie opcji
const optionsCategoriesProp = computed(() => props.optionsPosition);

watch(() => form.value.country, async (newCountry) => {
    if (!newCountry || (!newCountry.countryCode && !newCountry.value)) {
        optionsCities.value = [];
        optionsCategoriesFiltered.value = props.optionsPosition || [];
        form.value.city = null;
        return;
    }

    const countryCode = newCountry.countryCode || newCountry.value;

    try {
        const response = await fetch(route("cities.byCountry", countryCode));
        const data = await response.json();
        optionsCities.value = data;
        form.value.city = null;

        const responseCat = await fetch(route("categories.byCountry", countryCode));
        const dataCat = await responseCat.json();
        optionsCategoriesFiltered.value = dataCat;
    } catch (e) {
        console.error('Error loading cities or categories', e);
    }
});

watch(() => form.value.category, async (newCategory) => {
    if (!newCategory || !newCategory.value) {
        optionsCategorySub.value = [];
        optionsProfession.value = [];
        optionsPositionLocal.value = [];
        form.value.categorySub = null;
        form.value.profession = null;
        form.value.position = null;
        return;
    }

    try {
        const response = await fetch(route("category.sub", newCategory.value));
        const data = await response.json();
        optionsCategorySub.value = data;
        form.value.categorySub = null;
        form.value.profession = null;
        form.value.position = null;
    } catch (e) {
        console.error('Error loading subcategories', e);
    }
});

watch(() => form.value.categorySub, async (newSub) => {
    if (!newSub || !newSub.value) {
        optionsProfession.value = [];
        optionsPositionLocal.value = [];
        form.value.profession = null;
        form.value.position = null;
        return;
    }

    try {
        const response = await fetch(route("category.professions", newSub.value));
        const data = await response.json();
        optionsProfession.value = data;
        form.value.profession = null;
        form.value.position = null;
    } catch (e) {
        console.error('Error loading professions', e);
    }
});

watch(() => form.value.profession, async (newProfession) => {
    if (!newProfession || !newProfession.value) {
        optionsPositionLocal.value = [];
        form.value.position = null;
        return;
    }

    try {
        const response = await fetch(route("category.positions", newProfession.value));
        const data = await response.json();
        optionsPositionLocal.value = data;
        form.value.position = null;
    } catch (e) {
        console.error('Error loading positions', e);
    }
});

const formatDate = (date) => {
    if (!date) return '-';
    return new Date(date).toLocaleDateString('pl-PL', {
        year: 'numeric',
        month: 'long',
        day: 'numeric'
    });
};

const optionsCountry = computed(() => props.countries);

const sortLangs = computed(() => {
    const excludedLangs = ['am', 'ps', 'bn', 'dz', 'zh', 'ka', 'ja', 'km', 'ko', 'dv', 'th'];
    return usePage().props.languages
        .filter(lang => lang?.value && !excludedLangs.includes(lang.value))
        .sort((a, b) => a.label.localeCompare(b.label));
});

const getBackgroundStyle = (application) => {
    if (application.opened_by?.color) {
        return {
            backgroundColor: `${application.opened_by.color}15` // Dodajemy 15 na końcu dla przezroczystości
        }
    }
    return {}
}

const changeIds = (e) => {
    if (formSend.apps.length === 0) {
        formSend.externalFirms = []
    }
}

const isAllSelected = computed(() => {
    const appsWithCandidate = props.applications.data.filter(app => app.worker?.candidate);
    return appsWithCandidate.length > 0 && appsWithCandidate.every(app => formSend.apps.includes(app.id));
});

const toggleSelectAll = () => {
    const currentIdsWithCandidate = props.applications.data
        .filter(app => app.worker?.candidate)
        .map(app => app.id);

    if (isAllSelected.value) {
        formSend.apps = formSend.apps.filter(id => !currentIdsWithCandidate.includes(id));
    } else {
        const newApps = [...new Set([...formSend.apps, ...currentIdsWithCandidate])];
        formSend.apps = newApps;
    }
};


const submitForm = () => {
    formSend.post(route('send.external'), {
        onSuccess: () => {
            // wyczyść pola po udanej wysyłce
            formSend.reset('externalFirms', 'apps')
        }
    })
}

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

</script>

<template>
    <AppLayout :title="__('translate.aplications')">
        <template #header>
            <div class="flex items-center justify-between">
                <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                    {{ __('translate.aplications') }}
                </h2>
            </div>
        </template>

        <div class="py-12 bg-gray-50/50 min-h-screen px-2 sm:px-0">
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

            <div class="max-w-[1600px] mx-auto sm:px-6 lg:px-8 space-y-8">
                <!-- Filters Section -->
                <div class="bg-white rounded-[2rem] sm:rounded-[3rem] shadow-xl shadow-blue-900/5 border border-gray-100 p-6 sm:p-10">
                    <div class="flex items-center gap-4 mb-6 sm:mb-8">
                        <h3 class="text-[10px] font-black text-[#0A2C5C] uppercase tracking-[0.2em]">{{ __('translate.filter') }}</h3>
                        <div class="h-px flex-1 bg-gray-100"></div>
                    </div>

                    <!-- CV type tabs -->
                    <div class="flex flex-wrap gap-2 sm:gap-3 mb-8 sm:mb-10">
                        <button
                            @click="form.has_cv='all'"
                            :class="form.has_cv==='all'
                                ? 'bg-[#0A2C5C] text-white shadow-lg shadow-blue-900/20'
                                : 'bg-white text-gray-500 border border-gray-100 hover:bg-gray-50'"
                            class="flex-1 sm:flex-none px-4 sm:px-8 py-3 text-[10px] font-black uppercase tracking-widest rounded-xl sm:rounded-2xl transition-all"
                        >
                            {{ __('translate.all') }}
                        </button>
                        <button
                            @click="form.has_cv='yes'"
                            :class="form.has_cv==='yes'
                                ? 'bg-[#0A2C5C] text-white shadow-lg shadow-blue-900/20'
                                : 'bg-white text-gray-500 border border-gray-100 hover:bg-gray-50'"
                            class="flex-1 sm:flex-none px-4 sm:px-8 py-3 text-[10px] font-black uppercase tracking-widest rounded-xl sm:rounded-2xl transition-all"
                        >
                            {{ __('translate.classicCV') }}
                        </button>
                        <button
                            @click="form.has_cv='no'"
                            :class="form.has_cv==='no'
                                ? 'bg-[#0A2C5C] text-white shadow-lg shadow-blue-900/20'
                                : 'bg-white text-gray-500 border border-gray-100 hover:bg-gray-50'"
                            class="flex-1 sm:flex-none px-4 sm:px-8 py-3 text-[10px] font-black uppercase tracking-widest rounded-xl sm:rounded-2xl transition-all"
                        >
                            {{ __('translate.videoAudioCV') }}
                        </button>

                        <button
                            @click="showAdditionalFilters = !showAdditionalFilters"
                            class="w-full sm:w-auto sm:ml-auto px-6 py-3 text-[10px] font-black uppercase tracking-widest rounded-xl sm:rounded-2xl transition-all border border-gray-100 hover:bg-gray-50 text-gray-500 flex items-center justify-center gap-2"
                        >
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 transition-transform duration-200" :class="{ 'rotate-180': showAdditionalFilters }" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                            </svg>
                            {{ showAdditionalFilters ? __('translate.lessFilters') : __('translate.moreFilters') }}
                        </button>
                    </div>

                    <!-- Filters grid -->
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-6">
                        <div class="space-y-2">
                            <label class="block text-[10px] font-black text-gray-400 mb-2 uppercase tracking-widest">{{ __('translate.projectID') }}</label>
                            <input v-model="form.project" type="text" :placeholder="__('translate.enterID')" class="w-full px-5 py-4 text-xs rounded-2xl border-gray-100 bg-gray-50 focus:bg-white focus:ring-0 focus:border-[#00a0e3] transition-all placeholder-gray-400 font-bold tracking-widest uppercase"/>
                        </div>
                        <div class="space-y-2">
                            <label class="block text-[10px] font-black text-gray-400 mb-2 uppercase tracking-widest">{{ __('translate.country') }}</label>
                            <multiselect
                                v-model="form.country"
                                :options="optionsCountry"
                                group-values="elements"
                                group-label="group"
                                :group-select="false"
                                label="name"
                                track-by="value"
                                :selectLabel="''"
                                :selectGroupLabel="''"
                                :selectedLabel="''"
                                :deselectLabel="''"
                                :placeholder="__('translate.selectCountry')"
                                class="custom-multiselect"
                            >
                                <template #noResult><span>{{ __('translate.noResults') }}</span></template>
                                <template #noOptions><span>{{ __('translate.noOptions') }}</span></template>
                            </multiselect>
                        </div>
                        <div class="space-y-2">
                            <label class="block text-[10px] font-black text-gray-400 mb-2 uppercase tracking-widest">{{ __('translate.City') }}</label>
                            <multiselect v-model="form.city" :options="optionsCities" label="name"
                                         track-by="value"
                                         :selectLabel="''"
                                         :selectGroupLabel="''"
                                         :selectedLabel="''"
                                         :deselectLabel="''"
                                         :placeholder="__('translate.selectCity')" class="custom-multiselect">
                                <template #noResult><span>{{ __('translate.noResults') }}</span></template>
                                <template #noOptions><span>{{ __('translate.noOptions') }}</span></template>
                            </multiselect>
                        </div>
                        <div class="space-y-2">
                            <label class="block text-[10px] font-black text-gray-400 mb-2 uppercase tracking-widest">{{ __('translate.applicationStatus') }}</label>
                            <select v-model="form.status" class="w-full px-5 py-4 text-xs rounded-2xl border-gray-100 bg-gray-50 focus:bg-white focus:ring-0 focus:border-[#00a0e3] transition-all font-bold tracking-widest uppercase appearance-none">
                                <option value="">{{ __('translate.all') }}</option>
                                <option value="yes">{{ __('translate.statusYes') }}</option>
                                <option value="no">{{ __('translate.statusNo') }}</option>
                                <option value="maybe">{{ __('translate.statusMaybe') }}</option>
                            </select>
                        </div>
                    </div>

                    <div v-if="showAdditionalFilters">
                        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-6">
                            <div class="space-y-2">
                                <label class="block text-[10px] font-black text-gray-400 mb-2 uppercase tracking-widest">{{ __('translate.category') }}</label>
                                <multiselect v-model="form.category" :options="optionsCategoriesFiltered" label="name"
                                             track-by="value"
                                             :selectLabel="''"
                                             :selectGroupLabel="''"
                                             :selectedLabel="''"
                                             :deselectLabel="''"
                                             :placeholder="__('translate.selectCategory')" class="custom-multiselect">
                                    <template #noResult><span>{{ __('translate.noResults') }}</span></template>
                                    <template #noOptions><span>{{ __('translate.noOptions') }}</span></template>
                                </multiselect>
                            </div>
                            <div class="space-y-2">
                                <label class="block text-[10px] font-black text-gray-400 mb-2 uppercase tracking-widest">{{ __('translate.subcategory') }}</label>
                                <multiselect v-model="form.categorySub" :options="optionsCategorySub" label="name"
                                             track-by="value"
                                             :selectLabel="''"
                                             :selectGroupLabel="''"
                                             :selectedLabel="''"
                                             :deselectLabel="''"
                                             :placeholder="__('translate.selectSubcategory')" class="custom-multiselect">
                                    <template #noResult><span>{{ __('translate.noResults') }}</span></template>
                                    <template #noOptions><span>{{ __('translate.noOptions') }}</span></template>
                                </multiselect>
                            </div>
                            <div class="space-y-2">
                                <label class="block text-[10px] font-black text-gray-400 mb-2 uppercase tracking-widest">{{ __('translate.profession') }}</label>
                                <multiselect v-model="form.profession" :options="optionsProfession" label="name"
                                             track-by="value"
                                             :selectLabel="''"
                                             :selectGroupLabel="''"
                                             :selectedLabel="''"
                                             :deselectLabel="''"
                                             :placeholder="__('translate.selectProfession')" class="custom-multiselect">
                                    <template #noResult><span>{{ __('translate.noResults') }}</span></template>
                                    <template #noOptions><span>{{ __('translate.noOptions') }}</span></template>
                                </multiselect>
                            </div>
                            <div class="space-y-2">
                                <label class="block text-[10px] font-black text-gray-400 mb-2 uppercase tracking-widest">{{ __('translate.position') }}</label>
                                <multiselect v-model="form.position" :options="optionsPositionLocal" label="name"
                                             track-by="value"
                                             :selectLabel="''"
                                             :selectGroupLabel="''"
                                             :selectedLabel="''"
                                             :deselectLabel="''"
                                             :placeholder="__('translate.selectPosition')" class="custom-multiselect">
                                    <template #noResult><span>{{ __('translate.noResults') }}</span></template>
                                    <template #noOptions><span>{{ __('translate.noOptions') }}</span></template>
                                </multiselect>
                            </div>
                        </div>

                        <!-- Additional filters -->
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-6">
                            <div class="space-y-2">
                                <label class="block text-[10px] font-black text-gray-400 mb-2 uppercase tracking-widest">{{ __('translate.recruiter') }}</label>
                                <multiselect v-model="form.recruiter" :options="props.optionsRecruits" label="name"
                                             track-by="value"
                                             :selectLabel="''"
                                             :selectGroupLabel="''"
                                             :selectedLabel="''"
                                             :deselectLabel="''"
                                             :placeholder="__('translate.searchRecruiter')" class="custom-multiselect">
                                    <template #noResult><span>{{ __('translate.noResults') }}</span></template>
                                    <template #noOptions><span>{{ __('translate.noOptions') }}</span></template>
                                </multiselect>
                            </div>
                            <div class="space-y-2">
                                <label class="block text-[10px] font-black text-gray-400 mb-2 uppercase tracking-widest">{{ __('translate.date') }}</label>
                                <input v-model="form.date" type="date" class="w-full px-5 py-4 text-xs rounded-2xl border-gray-100 bg-gray-50 focus:bg-white focus:ring-0 focus:border-[#00a0e3] transition-all font-bold tracking-widest uppercase"/>
                            </div>
                            <div class="space-y-2">
                                <label class="block text-[10px] font-black text-gray-400 mb-2 uppercase tracking-widest">{{ __('translate.candidateCreated') }}</label>
                                <select v-model="form.has_candidate" class="w-full px-5 py-4 text-xs rounded-2xl border-gray-100 bg-gray-50 focus:bg-white focus:ring-0 focus:border-[#00a0e3] transition-all font-bold tracking-widest uppercase appearance-none">
                                    <option value="">{{ __('translate.all') }}</option>
                                    <option value="yes">{{ __('translate.yes') }}</option>
                                    <option value="no">{{ __('translate.no') }}</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <!-- Additional CV filters -->
                    <div v-if="form.has_cv==='yes'" class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-10 pt-6 border-t border-gray-50">
                        <div class="space-y-2">
                            <label class="block text-[10px] font-black text-gray-400 mb-2 uppercase tracking-widest">{{ __('translate.language') }}</label>
                            <multiselect
                                :selectLabel="''"
                                :selectGroupLabel="''"
                                :selectedLabel="''"
                                :deselectLabel="''"
                                v-model="form.lang" :options="sortLangs" label="label" track-by="value" :placeholder="__('translate.selectLanguage')" class="custom-multiselect"/>
                        </div>
                        <div class="space-y-2" :class="{ 'opacity-50 pointer-events-none': !form.lang }">
                            <label class="block text-[10px] font-black text-gray-400 mb-2 uppercase tracking-widest">{{ __('translate.languageLevel') }}</label>
                            <multiselect
                                :selectLabel="''"
                                :selectGroupLabel="''"
                                :selectedLabel="''"
                                :deselectLabel="''"
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
                <div v-if="formSend.apps.length" class="bg-white rounded-[2rem] border border-blue-100 p-6 sm:p-8 shadow-xl shadow-blue-900/5">
                    <div class="flex items-center gap-4 mb-6">
                        <h3 class="text-[10px] font-black text-blue-500 uppercase tracking-widest">{{ __('translate.submitApplications') }}</h3>
                        <div class="h-px flex-1 bg-blue-50"></div>
                    </div>
                    <div class="flex flex-col lg:flex-row gap-4 lg:items-end">
                        <div class="flex-1 w-full">
                            <label class="block text-[10px] font-black text-gray-400 mb-2 uppercase tracking-widest">{{ __('translate.selectExternalFirms') }}</label>
                            <multiselect
                                :selectLabel="''"
                                :selectGroupLabel="''"
                                :selectedLabel="''"
                                :deselectLabel="''"
                                v-model="formSend.externalFirms" :options="props.optionsExternal" label="name" :placeholder="__('translate.selectExternalFirms')" class="custom-multiselect" :multiple="true"/>
                        </div>
                        <button @click="submitForm" :disabled="formSend.processing || !formSend.externalFirms.length" class="w-full lg:w-auto px-10 py-4 bg-blue-600 text-white text-[10px] font-black uppercase tracking-widest rounded-2xl hover:bg-blue-700 flex items-center justify-center gap-3 disabled:opacity-50 disabled:cursor-not-allowed transition-all shadow-lg shadow-blue-600/20">
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
                    <div class="flex items-center justify-between mb-6 px-6">
                        <div class="flex items-center gap-4">
                            <h3 class="text-[10px] font-black text-[#0A2C5C] uppercase tracking-[0.2em]">{{ __('translate.aplications') }}</h3>
                            <div class="h-px w-24 bg-gray-100"></div>
                        </div>

                        <div class="flex items-center gap-3 bg-white px-6 py-3 rounded-2xl border border-gray-100 shadow-sm">
                            <label class="group/check-all flex items-center cursor-pointer">
                                <div class="relative flex items-center justify-center">
                                    <input
                                        type="checkbox"
                                        :checked="isAllSelected"
                                        @change="toggleSelectAll"
                                        class="peer sr-only"
                                    />
                                    <div class="h-6 w-6 rounded-lg border-2 border-gray-100 bg-white transition-all peer-checked:bg-[#0A2C5C] peer-checked:border-transparent group-hover/check-all:border-blue-200 flex items-center justify-center">
                                        <svg v-if="isAllSelected" class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7" /></svg>
                                        <div v-else-if="formSend.apps.length > 0" class="w-2 h-0.5 bg-[#0A2C5C] rounded-full"></div>
                                    </div>
                                </div>
                                <span class="ml-3 text-[10px] font-black text-gray-400 uppercase tracking-widest group-hover/check-all:text-[#0A2C5C] transition-colors">
                                    {{ __('translate.selectAll') }}
                                </span>
                            </label>
                        </div>
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
                         class="group bg-white rounded-[2rem] sm:rounded-[2.5rem] border border-gray-100 shadow-sm hover:shadow-xl hover:shadow-blue-900/5 transition-all duration-300 sm:hover:-translate-y-1 p-5 sm:p-6 hover:relative hover:z-[10]"
                    >
                        <div class="flex flex-col lg:grid lg:grid-cols-2 gap-6 lg:gap-8">
                            <!-- Lewa kolumna: Dane podstawowe i status -->
                            <div class="flex flex-col sm:flex-row sm:items-center gap-4 sm:gap-6">
                                <div class="flex items-center gap-4 flex-1">
                                    <!-- checkbox + ID -->
                                    <div v-if="application.worker?.candidate" class="shrink-0">
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
                                    <div v-else class="shrink-0 w-6 h-6"></div>

                                    <!-- Candidate info -->
                                    <div class="flex items-center gap-3 sm:gap-4 flex-1 min-w-0">
                                        <div class="w-12 h-12 sm:w-14 sm:h-14 rounded-xl sm:rounded-2xl bg-blue-50 flex items-center justify-center overflow-hidden shrink-0 border-2 border-white shadow-sm transition-transform duration-300 sm:group-hover:scale-105">
                                            <img v-if="application.worker?.profile_photo_url" :src="application.worker?.profile_photo_url" :alt="application.name" class="w-full h-full object-cover"/>
                                            <div v-else class="text-[#0A2C5C] font-black text-base sm:text-lg">
                                                {{ (application.name?.[0]||'') + (application.surname?.[0]||'') }}
                                            </div>
                                        </div>
                                        <div class="min-w-0">
                                            <div class="font-black text-gray-900 uppercase tracking-tight truncate leading-tight flex flex-wrap items-center gap-x-2 gap-y-1">
                                                <span class="text-sm sm:text-base">{{ application.name }} {{ application.surname }}</span>
                                                <span v-if="application.worker?.candidate" class="px-2 py-0.5 bg-green-500 text-white rounded-md text-[9px] font-black leading-none uppercase tracking-tighter" :title="__('translate.candidateCreated')">
                                                    {{ __('translate.candidate') }}
                                                </span>
                                                <span v-else class="px-2 py-0.5 bg-gray-200 text-gray-500 rounded-md text-[9px] font-black leading-none uppercase tracking-tighter" :title="__('translate.noCandidate')">
                                                    {{ __('translate.noProfile') }}
                                                </span>
                                            </div>
                                            <div class="text-[9px] sm:text-[10px] font-bold text-gray-400 uppercase tracking-widest mt-0.5 sm:mt-1 truncate">
                                                {{ getPositionTitle(application.project) || getPositionTitle(application.project?.categorySub) || 'Brak stanowiska' }}
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Status selector -->
                                <div class="w-full sm:w-44 lg:w-48 shrink-0">
                                    <Dropdown align="right" width="48" :contentClasses="['py-2', 'bg-white']">
                                        <template #trigger>
                                            <button
                                                type="button"
                                                :class="{
                                                    'bg-cyan-500 text-white shadow-cyan-900/10': application.status === 'maybe',
                                                    'bg-[#0A2C5C] text-white shadow-blue-900/10': application.status === 'yes',
                                                    'bg-red-600 text-white shadow-red-900/10': application.status === 'no',
                                                    'bg-gray-50 text-gray-400 border border-gray-100': !application.status
                                                }"
                                                class="w-full px-4 py-2.5 sm:py-3 text-[10px] font-black rounded-xl shadow-lg transition-all uppercase tracking-widest flex items-center justify-between group/status"
                                            >
                                                <span class="flex-1 text-center">
                                                    {{
                                                        application.status === 'yes' ? __('translate.statusYes') :
                                                        application.status === 'no' ? __('translate.statusNo') :
                                                        application.status === 'maybe' ? (__('translate.statusMaybe') || __('translate.maybe')) :
                                                        '---'
                                                    }}
                                                </span>
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 opacity-50 group-hover/status:scale-110 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M19 9l-7 7-7-7" />
                                                </svg>
                                            </button>
                                        </template>

                                        <template #content>
                                            <button
                                                @click="updateStatus(application.id, '')"
                                                class="block w-full px-5 py-3 text-start text-[10px] font-black uppercase tracking-widest text-gray-400 hover:bg-gray-50 transition-colors"
                                            >
                                                ---
                                            </button>
                                            <button
                                                @click="updateStatus(application.id, 'yes')"
                                                class="block w-full px-5 py-3 text-start text-[10px] font-black uppercase tracking-widest text-[#0A2C5C] hover:bg-blue-50 transition-colors flex items-center justify-between"
                                            >
                                                <span>{{ __('translate.statusYes') }}</span>
                                                <div v-if="application.status === 'yes'" class="w-1.5 h-1.5 rounded-full bg-[#0A2C5C]"></div>
                                            </button>
                                            <button
                                                @click="updateStatus(application.id, 'maybe')"
                                                class="block w-full px-5 py-3 text-start text-[10px] font-black uppercase tracking-widest text-cyan-600 hover:bg-cyan-50 transition-colors flex items-center justify-between"
                                            >
                                                <span>{{ __('translate.statusMaybe') || __('translate.maybe') }}</span>
                                                <div v-if="application.status === 'maybe'" class="w-1.5 h-1.5 rounded-full bg-cyan-600"></div>
                                            </button>
                                            <button
                                                @click="updateStatus(application.id, 'no')"
                                                class="block w-full px-5 py-3 text-start text-[10px] font-black uppercase tracking-widest text-red-600 hover:bg-red-50 transition-colors flex items-center justify-between"
                                            >
                                                <span>{{ __('translate.statusNo') }}</span>
                                                <div v-if="application.status === 'no'" class="w-1.5 h-1.5 rounded-full bg-red-600"></div>
                                            </button>
                                        </template>
                                    </Dropdown>
                                </div>
                            </div>

                            <!-- Prawa kolumna: Szczegóły, notatka i akcja -->
                            <div class="flex flex-col sm:flex-row items-start sm:items-center justify-between gap-6 lg:pl-8 lg:border-l lg:border-gray-50 pt-4 lg:pt-0 border-t lg:border-t-0 border-gray-50">
                                <!-- Date & Recruiter -->
                                <div class="grid grid-cols-2 sm:flex sm:flex-col gap-3 min-w-full sm:min-w-[120px]">
                                    <div class="flex flex-col">
                                        <div class="text-[10px] font-black text-gray-400 uppercase tracking-widest mb-1">{{ __('translate.date') }}</div>
                                        <div class="text-xs font-bold text-gray-700 uppercase tracking-tight">{{ application.created_at ? new Date(application.created_at).toLocaleDateString('pl-PL') : '' }}</div>
                                    </div>
                                    <div class="flex flex-col" v-if="application.recruit || application.project?.user?.firm">
                                        <div class="text-[10px] font-black text-gray-400 uppercase tracking-widest mb-1">{{ __('translate.recruiter') }}</div>
                                        <div class="text-[10px] font-black text-[#0A2C5C] uppercase tracking-tight leading-none mb-1 truncate max-w-[150px]">
                                            {{ application.project?.user?.firm?.name || application.project?.user?.name || 'Brak firmy' }}
                                        </div>
                                        <div class="text-[9px] font-bold text-gray-400 uppercase tracking-widest truncate max-w-[150px]">
                                            {{ application.recruit?.name || 'Nieprzypisany' }}
                                        </div>
                                    </div>
                                </div>

                                <!-- Note -->
                                <div class="w-full sm:flex-1 min-w-0 lg:max-w-[150px]">
                                    <div class="text-[10px] font-black text-gray-400 uppercase tracking-widest mb-1">{{ __('translate.note') }}</div>
                                    <div class="text-[10px] font-bold text-gray-700 uppercase tracking-tight line-clamp-2" :title="application.notes?.[0]?.content">
                                        {{ application.notes?.[0]?.content || '—' }}
                                    </div>
                                </div>

                                <!-- CV Icon & Action -->
                                <div class="flex items-center justify-between sm:justify-end gap-4 sm:gap-6 shrink-0 w-full sm:w-auto mt-2 sm:mt-0">
                                    <div class="shrink-0 transition-transform sm:group-hover:scale-110 flex items-center">
                                        <div v-if="application.cv_audio" class="w-8 h-8 sm:w-10 sm:h-10 flex items-center justify-center" :title="__('translate.cv_audio')">
                                            <img class="w-5 h-5 sm:w-6 sm:h-6 opacity-60 sm:group-hover:opacity-100 transition-opacity" src="/images/icons/recruit/audio_cv.svg" :alt="__('translate.cv_audio')">
                                        </div>
                                        <div v-else-if="application.cv_video" class="w-8 h-8 sm:w-10 sm:h-10 flex items-center justify-center" :title="__('translate.cv_video')">
                                            <img class="w-5 h-5 sm:w-6 sm:h-6 opacity-60 sm:group-hover:opacity-100 transition-opacity" src="/images/icons/recruit/video_cv.svg" :alt="__('translate.cv_video')">
                                        </div>
                                        <div v-else-if="application.cv_classic" class="w-8 h-8 sm:w-10 sm:h-10 flex items-center justify-center" :title="__('translate.cv_classic')">
                                            <img class="w-5 h-5 sm:w-6 sm:h-6 opacity-60 sm:group-hover:opacity-100 transition-opacity" src="/images/icons/recruit/klasyczne_cv.svg" :alt="__('translate.cv_classic')">
                                        </div>
                                        <div v-else class="w-8 h-8 sm:w-10 sm:h-10 flex items-center justify-center text-gray-300 font-bold" :title="__('translate.cv_classic')">
                                            -
                                        </div>
                                    </div>

                                    <Link
                                        :href="route('aplications.show', application.id)"
                                        class="flex-1 sm:flex-none text-center px-6 sm:px-8 py-3 bg-white text-[#0A2C5C] text-[10px] font-black rounded-xl border border-gray-100 shadow-sm hover:shadow-md hover:bg-gray-50 transition-all uppercase tracking-widest"
                                    >
                                        {{__('translate.check')}}
                                    </Link>
                                </div>
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

    <DialogModal :show="showNoPointsModal" @close="showNoPointsModal = false">
        <template #title>
            <div class="text-xl font-black text-red-600 uppercase tracking-widest text-center w-full">
                {{ __('translate.noPointsTitle') || __('translate.error') }}
            </div>
        </template>

        <template #content>
            <div class="mt-4 text-center">
                <p class="text-sm font-bold text-gray-500 uppercase tracking-tight">
                    {{ noPointsMessage }}
                </p>
            </div>
        </template>

        <template #footer>
            <div class="flex justify-center w-full">
                <button
                    type="button"
                    class="inline-flex justify-center rounded-2xl bg-[#0A2C5C] px-8 py-3 text-[10px] font-black uppercase tracking-widest text-white shadow-lg shadow-blue-900/20 hover:bg-blue-800 transition-all hover:-translate-y-0.5"
                    @click="showNoPointsModal = false"
                >
                    {{ __('translate.ok') || 'OK' }}
                </button>
            </div>
        </template>
    </DialogModal>
</template>
<style src="vue-multiselect/dist/vue-multiselect.css"></style>
<style lang="scss">
.custom-multiselect {
    .multiselect__tags {
        border: 1px solid #f3f4f6; /* border-gray-100 */
        border-radius: 1rem; /* rounded-2xl approximation for multiselect */
        padding: 0.75rem 2.5rem 0.75rem 1.25rem;
        background: #f9fafb; /* bg-gray-50 */
        transition: all 0.3s ease;
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
    }

    .multiselect__input {
        margin-bottom: 0;
        background: transparent;
        font-size: 0.75rem;
        font-weight: 700;
    }

    .multiselect__select {
        height: 100%;
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
    }

    .multiselect__option--selected {
        background: #f3f4f6 !important;
        color: #0A2C5C;
        font-weight: 900;
    }

    .multiselect__content-wrapper {
        border: 1px solid #f3f4f6;
        border-top: none;
        border-bottom-left-radius: 1rem;
        border-bottom-right-radius: 1rem;
        box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1);
    }
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
