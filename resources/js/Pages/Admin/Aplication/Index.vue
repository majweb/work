<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import {Link, router, usePage} from '@inertiajs/vue3';
import {computed, ref, watch} from 'vue';
import { useProjectHelpers } from "@/Composables/useProjectHelpers.js";
import { pickBy, debounce } from 'lodash';
import Multiselect from "vue-multiselect";
import Pagination from "@/Components/Pagination.vue";
import DialogModal from '@/Components/DialogModal.vue';
import SecondaryButton from '@/Components/SecondaryButton.vue';
import DangerButton from '@/Components/DangerButton.vue';
import __ from '@/lang.js';
import axios from 'axios';

const isExporting = ref(false);
const optionsCities = ref([]);
const optionsCategories = ref([]);
const optionsCategorySub = ref([]);
const optionsProfession = ref([]);
const optionsPositionLocal = ref([]);
const optionsRecruitsLocal = ref([]);

const props = defineProps({
    acceptedCount: Number,
    maybeCount: Number,
    noCount: Number,
    otherCount: Number,
    optionsPosition: Array,
    optionsFirms: Array,
    optionsRecruits: Object,
    optionsExternal: Object,
    applications: Object,
    filters: Object,
    langLevels: Array,
    countries: Array,
});

const { getPositionTitle } = useProjectHelpers();

const formSend = ref({
    apps: []
});

const exportToCSV = async () => {
    isExporting.value = true;

    try {
        const response = await axios.post(route('admin.aplicationsA.export', 'all'), {
            form: form.value,
            apps: formSend.value.apps
        }, {
            responseType: 'blob',
        });

        const blob = new Blob([response.data], {
            type: 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet',
        });

        const link = document.createElement('a');
        link.href = URL.createObjectURL(blob);
        link.download = `aplikacje_admin_${new Date().toISOString().split('T')[0]}.xlsx`;
        document.body.appendChild(link);
        link.click();
        link.remove();

    } catch (error) {
        alert('Wystąpił błąd przy eksporcie.');
    } finally {
        isExporting.value = false;
    }
};

const sortLangs = computed(() => {
    const excludedLangs = ['am', 'ps', 'bn', 'dz', 'zh', 'ka', 'ja', 'km', 'ko', 'dv', 'th'];
    const languages = usePage().props.languages || [];
    return languages
        .filter(lang => lang?.value && !excludedLangs.includes(lang.value))
        .sort((a, b) => a.label.localeCompare(b.label));
});

const confirmingStatusUpdate = ref(false);
const statusUpdateForm = ref({
    id: null,
    status: null
});

const form = ref({
    country: props.filters?.country || '',
    city: props.filters?.city || '',
    category: props.filters?.category || '',
    categorySub: props.filters?.categorySub || '',
    profession: props.filters?.profession || '',
    position: props.filters?.position || '',
    project: props.filters?.project || '',
    status: props.filters?.status || '',
    firm: props.filters?.firm || '',
    recruiter: props.filters?.recruiter || '',
    has_cv: props.filters?.has_cv || 'all',
    lang: props.filters?.lang || '',
    Langlevel: props.filters?.Langlevel || '',
    driveLicense: props.filters?.driveLicense || '',
    has_candidate: props.filters?.has_candidate || '',
    date: props.filters?.date || '',
});

const updateStatus = (id, status) => {
    statusUpdateForm.value = { id, status };
    confirmingStatusUpdate.value = true;
};

const confirmUpdateStatus = () => {
    router.put(route('admin.aplicationsA.update-status', statusUpdateForm.value.id), {
        status: statusUpdateForm.value.status
    }, {
        preserveScroll: true,
        preserveState: true,
        onSuccess: () => {
            confirmingStatusUpdate.value = false;
        }
    });
};

const resetFilters = () => {
    form.value = {
        country: '',
        city: '',
        category: '',
        categorySub: '',
        profession: '',
        position: '',
        project: '',
        status: '',
        firm: '',
        recruiter: '',
        has_cv: 'all',
        lang: '',
        Langlevel: '',
        driveLicense: '',
        has_candidate: '',
        date: '',
    };

    router.get(route('admin.aplicationsA.index'), {}, {
        preserveState: true,
        preserveScroll: true,
        replace: true,
    });
};

watch(form, debounce(function (value) {
    let rest = pickBy({
        country: value.country?.value || value.country,
        city: value.city?.value || value.city,
        category: value.category?.value || value.category,
        categorySub: value.categorySub?.value || value.categorySub,
        profession: value.profession?.value || value.profession,
        position: value.position?.value || value.position,
        project: value.project,
        status: value.status,
        firm: value.firm?.value || value.firm,
        recruiter: value.recruiter?.value || value.recruiter,
        has_cv: value.has_cv === 'all' ? null : value.has_cv,
        lang: value.has_cv === 'yes' ? (value.lang?.value || value.lang) : undefined,
        Langlevel: value.has_cv === 'yes' ? (value.Langlevel?.value || value.Langlevel) : undefined,
        driveLicense: value.has_cv === 'yes' ? value.driveLicense : '',
        has_candidate: value.has_candidate,
        date: value.date,
    });

    router.get(route('admin.aplicationsA.index'), rest, {
        preserveState: true,
        replace: true,
    });
}, 300), { deep: true });

const isAllSelected = computed(() => {
    return props.applications.data.length > 0 && props.applications.data.every(app => formSend.value.apps.includes(app.id));
});

const toggleSelectAll = () => {
    if (isAllSelected.value) {
        formSend.value.apps = formSend.value.apps.filter(id => !props.applications.data.some(app => app.id === id));
    } else {
        const currentIds = props.applications.data.map(app => app.id);
        const newApps = [...new Set([...formSend.value.apps, ...currentIds])];
        formSend.value.apps = newApps;
    }
};

const formatDate = (date) => {
    if (!date) return '-';
    return new Date(date).toLocaleDateString('pl-PL', {
        year: 'numeric',
        month: 'long',
        day: 'numeric'
    });
};

const getTranslation = (value) => {
    if (!value) return '-';
    if (typeof value === 'object') {
        return value[usePage().props.locale] || value['pl'] || Object.values(value)[0];
    }
    return value;
};

// Kaskadowe pobieranie opcji
watch(() => form.value.country, async (newCountry) => {
    if (!newCountry || !newCountry.countryCode) {
        optionsCities.value = [];
        optionsCategorySub.value = [];
        optionsProfession.value = [];
        optionsPositionLocal.value = [];
        form.value.city = null;
        form.value.category = null;
        form.value.categorySub = null;
        form.value.profession = null;
        form.value.position = null;
        return;
    }

    try {
        const response = await fetch(route("cities.byCountry", newCountry.countryCode));
        const data = await response.json();
        optionsCities.value = data;
        form.value.city = null;
    } catch (e) {
        console.error('Error loading cities', e);
    }
});

watch(() => form.value.category, async (newCategory) => {
    if (!newCategory) {
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
    } catch (e) {
        console.error('Error loading subcategories', e);
    }
});

watch(() => form.value.categorySub, async (newCategorySub) => {
    if (!newCategorySub) {
        optionsProfession.value = [];
        optionsPositionLocal.value = [];
        form.value.profession = null;
        form.value.position = null;
        return;
    }

    try {
        const response = await fetch(route("category.professions", newCategorySub.value));
        const data = await response.json();
        optionsProfession.value = data;
        form.value.profession = null;
    } catch (e) {
        console.error('Error loading professions', e);
    }
});

watch(() => form.value.profession, async (newProfession) => {
    if (!newProfession) {
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

watch(() => form.value.firm, async (newFirm) => {
    if (!newFirm) {
        optionsRecruitsLocal.value = props.optionsRecruits;
        form.value.recruiter = null;
        return;
    }

    try {
        const response = await fetch(route("admin.aplicationsA.recruits", newFirm.value || newFirm));
        const data = await response.json();
        optionsRecruitsLocal.value = data;
        form.value.recruiter = null;
    } catch (e) {
        console.error('Error loading recruits', e);
    }
});

import { onMounted } from 'vue';

onMounted(async () => {
    optionsCategories.value = props.optionsPosition;
    optionsRecruitsLocal.value = props.optionsRecruits;

    if (form.value.firm) {
        try {
            const response = await fetch(route("admin.aplicationsA.recruits", form.value.firm.value || form.value.firm));
            const data = await response.json();
            optionsRecruitsLocal.value = data;
        } catch (e) {}
    }

    if (form.value.country) {
         try {
            const responseCities = await fetch(route("cities.byCountry", form.value.country.countryCode || form.value.country));
            const citiesData = await responseCities.json();
            optionsCities.value = citiesData;
        } catch (e) {}
    }

    if (form.value.category) {
        try {
            const response = await fetch(route("category.sub", form.value.category.value || form.value.category));
            const data = await response.json();
            optionsCategorySub.value = data;
        } catch (e) {}
    }

    if (form.value.categorySub) {
        try {
            const response = await fetch(route("category.professions", form.value.categorySub.value || form.value.categorySub));
            const data = await response.json();
            optionsProfession.value = data;
        } catch (e) {}
    }

    if (form.value.profession) {
        try {
            const response = await fetch(route("category.positions", form.value.profession.value || form.value.profession));
            const data = await response.json();
            optionsPositionLocal.value = data;
        } catch (e) {}
    }
});

</script>

<template>
    <AppLayout title="Aplikacje">
        <div class="py-12 bg-gray-50/50 min-h-screen">
            <div class="max-w-[1600px] mx-auto sm:px-6 lg:px-8">
                <!-- Header Section -->
                <div class="bg-white rounded-[3rem] shadow-xl shadow-blue-900/5 border border-gray-100 p-10 mb-8 transition-all hover:shadow-blue-900/10">
                    <div class="flex flex-col md:flex-row md:items-center justify-between gap-8">
                        <div class="flex items-center gap-6">
                            <div class="w-16 h-16 bg-gradient-to-br from-[#0A2C5C] to-blue-900 rounded-3xl flex items-center justify-center text-white shadow-lg">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-8 h-8">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 19.128a9.38 9.38 0 0 0 2.625.372 9.337 9.337 0 0 0 4.121-.952 4.125 4.125 0 0 0-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 0 1 8.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0 1 11.964-3.07M12 6.375a3.375 3.375 0 1 1-6.75 0 3.375 3.375 0 0 1 6.75 0Zm8.25 2.25a2.625 2.625 0 1 1-5.25 0 2.625 2.625 0 0 1 5.25 0Z" />
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-2xl font-black text-[#0A2C5C] uppercase tracking-tight">Aplikacje</h3>
                                <p class="text-[10px] font-bold text-gray-400 uppercase tracking-widest mt-1">Zarządzanie aplikacjami kandydatów (Panel Admina)</p>
                            </div>
                        </div>

                        <div class="flex items-center gap-4">
                            <!-- Tutaj można dodać przyciski akcji globalnych -->
                        </div>
                    </div>

                    <!-- Stats Grid -->
                    <div class="grid grid-cols-1 md:grid-cols-4 gap-6 mt-12">
                        <div class="bg-gray-50/50 rounded-[2rem] p-6 border border-gray-100 transition-all group cursor-pointer"
                             @click="form.status = ''" :class="{'ring-2 ring-gray-400 bg-white': form.status === ''}">
                            <p class="text-[10px] font-black text-gray-400/80 uppercase tracking-widest mb-2">Wszystkie</p>
                            <div class="flex items-end justify-between">
                                <span class="text-3xl font-black text-gray-600">{{ otherCount }}</span>
                            </div>
                        </div>
                        <div class="bg-cyan-50/30 rounded-[2rem] p-6 border border-cyan-100 transition-all group cursor-pointer"
                             @click="form.status = 'yes'" :class="{'ring-2 ring-cyan-500 bg-white': form.status === 'yes'}">
                            <p class="text-[10px] font-black text-cyan-600/60 uppercase tracking-widest mb-2">Zaakceptowane</p>
                            <div class="flex items-end justify-between">
                                <span class="text-3xl font-black text-cyan-700">{{ acceptedCount }}</span>
                            </div>
                        </div>
                        <div class="bg-blue-50/50 rounded-[2rem] p-6 border border-blue-100 transition-all group cursor-pointer"
                             @click="form.status = 'maybe'" :class="{'ring-2 ring-[#0A2C5C] bg-white': form.status === 'maybe'}">
                            <p class="text-[10px] font-black text-[#0A2C5C]/60 uppercase tracking-widest mb-2">Rozpatrywane</p>
                            <div class="flex items-end justify-between">
                                <span class="text-3xl font-black text-[#0A2C5C]">{{ maybeCount }}</span>
                            </div>
                        </div>
                        <div class="bg-red-50/30 rounded-[2rem] p-6 border border-red-100 transition-all group cursor-pointer"
                             @click="form.status = 'no'" :class="{'ring-2 ring-red-500 bg-white': form.status === 'no'}">
                            <p class="text-[10px] font-black text-red-600/60 uppercase tracking-widest mb-2">Odrzucone</p>
                            <div class="flex items-end justify-between">
                                <span class="text-3xl font-black text-red-700">{{ noCount }}</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Filters Section -->
                <div class="bg-white rounded-[3rem] shadow-xl shadow-blue-900/5 border border-gray-100 p-8 mb-8">
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

                    <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
                        <!-- Kraj -->
                        <div>
                            <label class="block text-[10px] font-black text-gray-400 mb-2 uppercase tracking-widest">{{ __('translate.country') }}</label>
                            <Multiselect
                                class="custom-multiselect"
                                v-model="form.country"
                                :options="countries"
                                group-values="elements"
                                group-label="group"
                                :group-select="false"
                                placeholder="Wybierz kraj"
                                :selectLabel="__('translate.selectLabel')"
                                :selectGroupLabel="__('translate.selectGroupLabel')"
                                :selectedLabel="__('translate.selectedLabel')"
                                :deselectLabel="__('translate.deselectLabel')"
                                label="name"
                                track-by="value"
                            >
                                <template #noResult><span>{{ __('translate.noOptions') }}</span></template>
                                <template #noOptions><span>{{ __('translate.noResult') }}</span></template>
                            </Multiselect>
                        </div>

                        <!-- Miasto -->
                        <div>
                            <label class="block text-[10px] font-black text-gray-400 mb-2 uppercase tracking-widest">{{ __('translate.City') }}</label>
                            <Multiselect
                                class="custom-multiselect"
                                v-model="form.city"
                                :options="optionsCities"
                                :disabled="!form.country"
                                placeholder="Wybierz miasto"
                                :selectLabel="__('translate.selectLabel')"
                                :selectGroupLabel="__('translate.selectGroupLabel')"
                                :selectedLabel="__('translate.selectedLabel')"
                                :deselectLabel="__('translate.deselectLabel')"
                                label="name"
                                track-by="value"
                            >
                                <template #noResult><span>{{ __('translate.noOptions') }}</span></template>
                                <template #noOptions><span>{{ __('translate.noResult') }}</span></template>
                            </Multiselect>
                        </div>

                        <!-- Branża -->
                        <div>
                            <label class="block text-[10px] font-black text-gray-400 mb-2 uppercase tracking-widest">Branża</label>
                            <Multiselect
                                class="custom-multiselect"
                                v-model="form.category"
                                :options="optionsCategories"
                                placeholder="Wybierz branżę"
                                :selectLabel="__('translate.selectLabel')"
                                :selectGroupLabel="__('translate.selectGroupLabel')"
                                :selectedLabel="__('translate.selectedLabel')"
                                :deselectLabel="__('translate.deselectLabel')"
                                label="name"
                                track-by="value"
                            >
                                <template #noResult><span>{{ __('translate.noOptions') }}</span></template>
                                <template #noOptions><span>{{ __('translate.noResult') }}</span></template>
                            </Multiselect>
                        </div>

                        <!-- Podbranża -->
                        <div>
                            <label class="block text-[10px] font-black text-gray-400 mb-2 uppercase tracking-widest">Podbranża</label>
                            <Multiselect
                                class="custom-multiselect"
                                v-model="form.categorySub"
                                :options="optionsCategorySub"
                                :disabled="!form.category"
                                placeholder="Wybierz podbranżę"
                                :selectLabel="__('translate.selectLabel')"
                                :selectGroupLabel="__('translate.selectGroupLabel')"
                                :selectedLabel="__('translate.selectedLabel')"
                                :deselectLabel="__('translate.deselectLabel')"
                                label="name"
                                track-by="value"
                            >
                                <template #noResult><span>{{ __('translate.noOptions') }}</span></template>
                                <template #noOptions><span>{{ __('translate.noResult') }}</span></template>
                            </Multiselect>
                        </div>

                        <!-- Zawód -->
                        <div>
                            <label class="block text-[10px] font-black text-gray-400 mb-2 uppercase tracking-widest">Zawód</label>
                            <Multiselect
                                class="custom-multiselect"
                                v-model="form.profession"
                                :options="optionsProfession"
                                :disabled="!form.categorySub"
                                placeholder="Wybierz zawód"
                                :selectLabel="__('translate.selectLabel')"
                                :selectGroupLabel="__('translate.selectGroupLabel')"
                                :selectedLabel="__('translate.selectedLabel')"
                                :deselectLabel="__('translate.deselectLabel')"
                                label="name"
                                track-by="value"
                            >
                                <template #noResult><span>{{ __('translate.noOptions') }}</span></template>
                                <template #noOptions><span>{{ __('translate.noResult') }}</span></template>
                            </Multiselect>
                        </div>

                        <!-- Stanowisko -->
                        <div>
                            <label class="block text-[10px] font-black text-gray-400 mb-2 uppercase tracking-widest">Stanowisko</label>
                            <Multiselect
                                class="custom-multiselect"
                                v-model="form.position"
                                :options="optionsPositionLocal"
                                :disabled="!form.profession"
                                placeholder="Wybierz stanowisko"
                                :selectLabel="__('translate.selectLabel')"
                                :selectGroupLabel="__('translate.selectGroupLabel')"
                                :selectedLabel="__('translate.selectedLabel')"
                                :deselectLabel="__('translate.deselectLabel')"
                                label="name"
                                track-by="value"
                            >
                                <template #noResult><span>{{ __('translate.noOptions') }}</span></template>
                                <template #noOptions><span>{{ __('translate.noResult') }}</span></template>
                            </Multiselect>
                        </div>

                        <!-- Firma -->
                        <div>
                            <label class="block text-[10px] font-black text-gray-400 mb-2 uppercase tracking-widest">Firma</label>
                            <Multiselect
                                class="custom-multiselect"
                                v-model="form.firm"
                                :options="optionsFirms"
                                placeholder="Wybierz firmę"
                                :selectLabel="__('translate.selectLabel')"
                                :selectGroupLabel="__('translate.selectGroupLabel')"
                                :selectedLabel="__('translate.selectedLabel')"
                                :deselectLabel="__('translate.deselectLabel')"
                                label="name"
                                track-by="value"
                            >
                                <template #noResult><span>{{ __('translate.noOptions') }}</span></template>
                                <template #noOptions><span>{{ __('translate.noResult') }}</span></template>
                            </Multiselect>
                        </div>

                        <!-- Rekruter -->
                        <div>
                            <label class="block text-[10px] font-black text-gray-400 mb-2 uppercase tracking-widest">Rekruter</label>
                            <Multiselect
                                class="custom-multiselect"
                                v-model="form.recruiter"
                                :options="optionsRecruitsLocal"
                                :disabled="!form.firm"
                                :close-on-select="true"
                                placeholder="Wybierz rekrutera"
                                :selectLabel="__('translate.selectLabel')"
                                :selectGroupLabel="__('translate.selectGroupLabel')"
                                :selectedLabel="__('translate.selectedLabel')"
                                :deselectLabel="__('translate.deselectLabel')"
                                label="name"
                                track-by="value"
                            >
                                <template #noResult><span>{{ __('translate.noOptions') }}</span></template>
                                <template #noOptions><span>{{ __('translate.noResult') }}</span></template>
                            </Multiselect>
                        </div>

                        <!-- Data -->
                        <div>
                            <label class="block text-[10px] font-black text-gray-400 mb-2 uppercase tracking-widest">{{ __('translate.date') }}</label>
                            <input v-model="form.date" type="date" class="block w-full py-3 bg-gray-50 border-none rounded-2xl text-[11px] font-black uppercase tracking-widest focus:ring-2 focus:ring-blue-500/20 transition-all h-[54px] px-4 font-bold"/>
                        </div>

                        <!-- Kandydat -->
                        <div>
                            <label class="block text-[10px] font-black text-gray-400 mb-2 uppercase tracking-widest">Kandydat utworzony</label>
                            <select v-model="form.has_candidate" class="block w-full py-3 bg-gray-50 border-none rounded-2xl text-[11px] font-black uppercase tracking-widest focus:ring-2 focus:ring-blue-500/20 transition-all h-[54px] px-4 font-bold">
                                <option value="">{{ __('translate.all') }}</option>
                                <option value="yes">{{ __('translate.yes') }}</option>
                                <option value="no">{{ __('translate.no') }}</option>
                            </select>
                        </div>
                    </div>

                    <!-- Additional CV filters -->
                    <div v-if="form.has_cv==='yes'" class="grid grid-cols-1 md:grid-cols-3 gap-6 mt-8 pt-8 border-t border-gray-50">
                        <div class="space-y-2">
                            <label class="block text-[10px] font-black text-gray-400 mb-2 uppercase tracking-widest">{{ __('translate.language') }}</label>
                            <multiselect
                                :selectLabel="__('translate.selectLabel')"
                                :selectGroupLabel="__('translate.selectGroupLabel')"
                                :selectedLabel="__('translate.selectedLabel')"
                                :deselectLabel="__('translate.deselectLabel')"
                                v-model="form.lang" :options="sortLangs" label="label" track-by="value" :placeholder="__('translate.selectLanguage')" class="custom-multiselect"
                            >
                                <template #noResult><span>{{ __('translate.noOptions') }}</span></template>
                                <template #noOptions><span>{{ __('translate.noResult') }}</span></template>
                            </multiselect>
                        </div>
                        <div class="space-y-2" :class="{ 'opacity-50 pointer-events-none': !form.lang }">
                            <label class="block text-[10px] font-black text-gray-400 mb-2 uppercase tracking-widest">{{ __('translate.languageLevel') }}</label>
                            <multiselect
                                :selectLabel="__('translate.selectLabel')"
                                :selectGroupLabel="__('translate.selectGroupLabel')"
                                :selectedLabel="__('translate.selectedLabel')"
                                :deselectLabel="__('translate.deselectLabel')"
                                v-model="form.Langlevel" :options="props.langLevels" label="name" track-by="value" :placeholder="__('translate.selectLevel')" :disabled="!form.lang" class="custom-multiselect"
                            >
                                <template #noResult><span>{{ __('translate.noOptions') }}</span></template>
                                <template #noOptions><span>{{ __('translate.noResult') }}</span></template>
                            </multiselect>
                        </div>
                        <div class="space-y-2">
                            <label class="block text-[10px] font-black text-gray-400 mb-2 uppercase tracking-widest">{{ __('translate.driveLicenseB') }}</label>
                            <select v-model="form.driveLicense" class="block w-full py-3 bg-gray-50 border-none rounded-2xl text-[11px] font-black uppercase tracking-widest focus:ring-2 focus:ring-blue-500/20 transition-all h-[54px] px-4">
                                <option value="">{{ __('translate.all') }}</option>
                                <option value="yes">{{ __('translate.yes') }}</option>
                                <option value="no">{{ __('translate.no') }}</option>
                            </select>
                        </div>
                    </div>

                    <div class="mt-6 flex justify-between items-center gap-4">
                        <div class="flex gap-4">
                            <button
                                @click="exportToCSV"
                                :disabled="isExporting"
                                class="px-10 py-4 bg-[#0A2C5C] text-white text-[10px] font-black uppercase tracking-widest rounded-2xl hover:bg-blue-800 disabled:opacity-50 disabled:cursor-not-allowed transition-all shadow-lg shadow-blue-900/20 hover:-translate-y-0.5 active:translate-y-0"
                            >
                                <span v-if="isExporting">{{ __('translate.exporting') }}</span>
                                <span v-else>{{ __('translate.exportToSpreadsheet') }}</span>
                            </button>
                        </div>
                        <button @click="resetFilters" class="px-8 py-3 bg-gray-100 hover:bg-gray-200 text-gray-600 rounded-2xl font-black text-[10px] uppercase tracking-widest transition-all active:scale-95">
                            Resetuj filtry
                        </button>
                    </div>
                </div>

                <!-- Table Section -->
                <div class="bg-white rounded-[3rem] shadow-xl shadow-blue-900/5 border border-gray-100 overflow-hidden">
                    <table class="w-full text-left border-collapse">
                        <thead>
                            <tr class="border-b border-gray-50 text-[10px] font-black text-[#0A2C5C] uppercase tracking-[0.2em]">
                                <th class="p-8 w-16">
                                    <div class="flex items-center gap-3">
                                        <label class="group/check-all flex items-center cursor-pointer">
                                            <div class="relative flex items-center justify-center">
                                                <input
                                                    type="checkbox"
                                                    :checked="isAllSelected"
                                                    @change="toggleSelectAll"
                                                    class="peer sr-only"
                                                />
                                                <div class="h-6 w-6 rounded-lg border-2 border-gray-200 bg-white transition-all peer-checked:bg-[#0A2C5C] peer-checked:border-transparent group-hover/check-all:border-blue-300 flex items-center justify-center">
                                                    <svg v-if="isAllSelected" class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7" /></svg>
                                                    <div v-else-if="formSend.apps.length > 0" class="w-2 h-0.5 bg-[#0A2C5C] rounded-full"></div>
                                                </div>
                                            </div>
                                        </label>
                                        ID
                                    </div>
                                </th>
                                <th class="p-8">Kandydat / Oferta</th>
                                <th class="p-8">Firma / Rekruter</th>
                                <th class="p-8 text-center">Status</th>
                                <th class="p-8 text-center">Typ CV</th>
                                <th class="p-8 text-center">Data</th>
                                <th class="p-8 text-right">Akcje</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr v-for="app in applications.data" :key="app.id" class="group hover:bg-blue-50/30 transition-all duration-300 border-b border-gray-50 last:border-none">
                                <td class="p-8">
                                    <label class="group/check flex items-center cursor-pointer">
                                        <div class="relative flex items-center justify-center">
                                            <input
                                                type="checkbox"
                                                v-model="formSend.apps"
                                                :value="app.id"
                                                class="peer sr-only"
                                            />
                                            <div class="h-6 w-6 rounded-lg border-2 border-gray-100 bg-white transition-all peer-checked:bg-[#0A2C5C] peer-checked:border-transparent group-hover/check:border-blue-200 flex items-center justify-center">
                                                <svg class="w-4 h-4 text-white opacity-0 peer-checked:opacity-100 transition-opacity" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7" /></svg>
                                            </div>
                                        </div>
                                        <span class="ml-3 text-[10px] font-black text-gray-400 uppercase tracking-widest group-hover/check:text-[#0A2C5C] transition-colors">{{ app.id }}</span>
                                    </label>
                                </td>
                                <td class="p-8">
                                    <div class="flex items-center gap-4">
                                        <div class="w-12 h-12 rounded-2xl bg-blue-50 flex items-center justify-center overflow-hidden shrink-0 border-2 border-white shadow-sm transition-transform duration-300 group-hover:scale-105">
                                            <img v-if="app.worker?.profile_photo_url" :src="app.worker?.profile_photo_url" :alt="app.name" class="w-full h-full object-cover"/>
                                            <div v-else class="text-[#0A2C5C] font-black text-lg">
                                                {{ (app.name?.[0]||'') + (app.surname?.[0]||'') }}
                                            </div>
                                        </div>
                                        <div class="min-w-0">
                                            <div class="text-xs font-black text-[#0A2C5C] group-hover:text-blue-600 transition-colors uppercase tracking-tight leading-tight">
                                                {{ app.name }} {{ app.surname }}
                                            </div>
                                            <div class="text-[10px] font-bold text-gray-400 uppercase tracking-widest mt-1 truncate flex items-center gap-2">

                                                <span>{{ getPositionTitle(app.project) || getPositionTitle(app.project?.categorySub) || 'Brak stanowiska' }}</span>
                                                <span v-if="app.worker?.candidate" class="px-2 py-0.5 bg-green-500 text-white rounded-md text-[9px] font-black leading-none uppercase tracking-tighter" title="Kandydat utworzony">
                                                    Kandydat
                                                </span>
                                                <span v-else class="px-2 py-0.5 bg-gray-200 text-gray-500 rounded-md text-[9px] font-black leading-none uppercase tracking-tighter" title="Brak kandydata">
                                                    Brak profilu
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td class="p-8">
                                    <div class="flex flex-col gap-1">
                                        <span class="text-[10px] font-black text-[#0A2C5C] uppercase tracking-widest">
                                            {{ app.project?.user?.firm?.name || app.project?.user?.name || 'Brak firmy' }}
                                        </span>
                                        <span class="text-[9px] font-bold text-gray-400 uppercase tracking-widest">
                                            Rekruter: {{ app.recruit?.name || 'Nieprzypisany' }}
                                        </span>
                                    </div>
                                </td>
                                <td class="p-8">
                                    <div class="flex justify-center min-w-[140px]">
                                        <button
                                            v-if="app.status === 'maybe'"
                                            @click="updateStatus(app.id, 'yes')"
                                            class="w-full px-4 py-3 bg-cyan-500 text-white text-[10px] font-black rounded-xl hover:bg-cyan-600 shadow-md shadow-cyan-500/10 transition-all uppercase tracking-widest"
                                        >
                                            {{ __('translate.maybe') }}
                                        </button>
                                        <button
                                            v-else-if="app.status === 'yes'"
                                            @click="updateStatus(app.id, 'no')"
                                            class="w-full px-4 py-3 bg-[#0A2C5C] text-white text-[10px] font-black rounded-xl hover:bg-blue-800 shadow-md shadow-blue-900/10 transition-all uppercase tracking-widest"
                                        >
                                            {{ __('translate.statusYes') }}
                                        </button>
                                        <button
                                            v-else-if="app.status === 'no'"
                                            @click="updateStatus(app.id, 'maybe')"
                                            class="w-full px-4 py-3 bg-red-600 text-white text-[10px] font-black rounded-xl hover:bg-red-700 shadow-md shadow-red-600/10 transition-all uppercase tracking-widest"
                                        >
                                            {{ __('translate.statusNo') }}
                                        </button>
                                        <button
                                            v-else
                                            @click="updateStatus(app.id,'maybe')"
                                            class="w-full px-4 py-3 bg-gray-50 text-gray-400 text-[10px] font-black rounded-xl hover:bg-gray-100 border border-gray-100 transition-all uppercase tracking-widest"
                                        >
                                            ---
                                        </button>
                                    </div>
                                </td>
                                <td class="p-8 text-center">
                                    <div class="flex justify-center shrink-0 transition-transform group-hover:scale-110">
                                        <div v-if="app.cv_audio" class="w-10 h-10 flex items-center justify-center" :title="__('translate.cv_audio')">
                                            <img class="w-6 h-6 opacity-60 group-hover:opacity-100 transition-opacity" src="/images/icons/recruit/audio_cv.svg" :alt="__('translate.cv_audio')">
                                        </div>
                                        <div v-else-if="app.cv_video" class="w-10 h-10 flex items-center justify-center" :title="__('translate.cv_video')">
                                            <img class="w-6 h-6 opacity-60 group-hover:opacity-100 transition-opacity" src="/images/icons/recruit/video_cv.svg" :alt="__('translate.cv_video')">
                                        </div>
                                        <div v-else-if="app.cv_classic" class="w-10 h-10 flex items-center justify-center" :title="__('translate.cv_classic')">
                                            <img class="w-6 h-6 opacity-60 group-hover:opacity-100 transition-opacity" src="/images/icons/recruit/klasyczne_cv.svg" :alt="__('translate.cv_classic')">
                                        </div>
                                        <div v-else class="w-10 h-10 flex items-center justify-center">
                                            -
                                        </div>
                                    </div>
                                </td>
                                <td class="p-8 text-center text-xs font-bold text-gray-400 tabular-nums">
                                    {{ formatDate(app.created_at) }}
                                </td>
                                <td class="p-8 text-right">
                                    <Link :href="route('admin.aplicationsA.show', app.id)" class="px-6 py-2 bg-gray-50 hover:bg-[#0A2C5C] text-gray-400 hover:text-white rounded-xl text-[10px] font-black uppercase tracking-widest transition-all active:scale-95 border border-gray-100">
                                        Szczegóły
                                    </Link>
                                </td>
                            </tr>
                            <tr v-if="applications.data.length === 0">
                                <td colspan="5" class="p-20 text-center">
                                    <div class="flex flex-col items-center gap-4 text-gray-300">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1" stroke="currentColor" class="w-20 h-20">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M20.25 14.15v4.25c0 .621-.504 1.125-1.125 1.125H4.875A1.125 1.125 0 0 1 3.75 18.4V14.15m16.5 0a3 3 0 0 0-3-3H6.75a3 3 0 0 0-3 3m16.5 0a3 3 0 0 1-3 3H6.75a3 3 0 0 1-3-3m13.875-11.25h-10.5a1.125 1.125 0 0 0-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125h10.5a1.125 1.125 0 0 0 1.125-1.125v-1.5a1.125 1.125 0 0 0-1.125-1.125Z" />
                                        </svg>
                                        <p class="text-xl font-black uppercase tracking-widest">Brak aplikacji</p>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <!-- Pagination -->
                <div class="mt-8">
                    <Pagination :links="applications.links" />
                </div>
            </div>
        </div>

        <!-- Confirm Status Update Modal -->
        <DialogModal :show="confirmingStatusUpdate" @close="confirmingStatusUpdate = false">
            <template #title>
                <div class="text-lg font-black text-[#0A2C5C] uppercase tracking-tight">
                    Potwierdź zmianę statusu
                </div>
            </template>

            <template #content>
                <div class="text-sm font-medium text-gray-600">
                    Czy na pewno chcesz zmienić status tej aplikacji jako administrator?
                </div>
            </template>

            <template #footer>
                <SecondaryButton @click="confirmingStatusUpdate = false" class="mr-3">
                    Anuluj
                </SecondaryButton>

                <DangerButton
                    @click="confirmUpdateStatus"
                >
                    Zmień status
                </DangerButton>
            </template>
        </DialogModal>
    </AppLayout>
</template>

<style src="vue-multiselect/dist/vue-multiselect.css"></style>
<style lang="scss">
.custom-multiselect {
    .multiselect {
        &__tags {
            @apply rounded-2xl border-gray-100 bg-gray-50/50 py-3 px-4 min-h-[54px] flex items-center transition-all border-2;
        }
        &__placeholder {
            @apply text-[11px] font-black text-gray-400 uppercase tracking-widest pt-0 mb-0;
        }
        &__single {
            @apply bg-transparent text-[11px] font-black text-[#0A2C5C] uppercase tracking-widest pt-0 mb-0;
        }
        &__input {
            @apply bg-transparent text-[11px] font-black uppercase tracking-widest pt-0 mb-0;
        }
        &__select {
            @apply top-1/2 -translate-y-1/2 h-full flex items-center justify-center right-0;
            &::before {
                @apply border-t-gray-400 border-l-transparent border-r-transparent border-b-transparent border-t-[6px] border-x-[5px] relative top-0;
            }
        }
        &__content-wrapper {
            @apply rounded-2xl mt-2 border-none shadow-xl overflow-hidden;
        }
        &__option {
            @apply text-[10px] font-bold uppercase tracking-wider py-4;
            &--highlight {
                @apply bg-[#0A2C5C] text-white;
                &::after {
                    @apply bg-[#0A2C5C] text-white text-[10px] font-black uppercase tracking-widest px-4;
                }
            }
            &--selected {
                @apply bg-gray-100 text-[#0A2C5C] font-black;
            }
        }
    }
}
</style>
