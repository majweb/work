<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import Multiselect from "vue-multiselect";
import InputError from "@/Components/InputError.vue";
import InputLabel from "@/Components/InputLabel.vue";
import {router, useForm, usePage, Link} from "@inertiajs/vue3";
import { computed, ref } from "vue";
import TextInput from "@/Components/TextInput.vue";
import FormSectionProject from "@/Components/FormSectionProject.vue";
import SpinnerAction from "@/Components/SpinnerAction.vue";
import PrimaryButton from "@/Components/PrimaryButton.vue";
import TextareaLimit from "@/Components/TextareaLimit.vue";
import DangerButton from "@/Components/DangerButton.vue";
import __ from "@/lang.js";
import DialogModal from "@/Components/DialogModal.vue";

const props = defineProps({
    candidate: Object,
    countries: Array,
    externalCompanies: Array,
    optionsPosition: Object,
    currencies: Array,
});

const showDeleteModal = ref(false);
const evidenceToDelete = ref(null);

const lang = computed(() => usePage().props.language);

const optionsCurrency = ref(props.currencies);
const optionsCountry = ref(props.countries);

const editingEvidenceId = ref(null);

const form = useForm({
    external_company: null,
    position: [],
    salary: '',
    currency: null,
    date_of_hire: '',
    country: [],
    notes: '',
});

const clearCountry = () => {
    form.country = [];
};

const closeDeleteModal = () => {
    showDeleteModal.value = false;
    evidenceToDelete.value = null;
};

const openDeleteModal = (evidence) => {
    evidenceToDelete.value = evidence;
    showDeleteModal.value = true;
};

// Wypełnianie formularza przy edycji
const editEvidence = (evidence) => {
    editingEvidenceId.value = evidence.id;
    form.external_company = evidence.external_company ?? null;
    form.position = Array.isArray(evidence.position) ? evidence.position : [];
    form.salary = evidence.salary ?? '';
    form.currency = evidence.currency ?? null;
    form.date_of_hire = evidence.date_of_hire;
    form.country = Array.isArray(evidence.country) ? evidence.country : [];
    form.notes = evidence.notes ?? '';

    window.scrollTo({ top: 0, behavior: 'smooth' });
};

const exitMode = () => {
    form.reset();
    editingEvidenceId.value = null;
};

// Zapis / update
const saveEvidence = () => {
    if (editingEvidenceId.value) {
        form.put(route('candidates.evidence.update', [props.candidate.id, editingEvidenceId.value]), {
            errorBag: 'updateEvidence',
            preserveScroll: true,
            onSuccess: () => {
                form.reset();
                editingEvidenceId.value = null;
            },
        });
    } else {
        form.post(route('candidates.evidence.store', props.candidate), {
            errorBag: 'createEvidence',
            preserveScroll: true,
            onSuccess: () => form.reset(),
        });
    }
};

// Helper do wyświetlania nazw
const getPositionName = (e) => {
    const p = e?.position;
    if (Array.isArray(p)) return p.map(x => x?.name ?? '').filter(Boolean).join(', ') || '—';
    if (p && typeof p === 'object') return p.name ?? '—';
    return typeof p === 'string' ? p : '—';
};

const getCurrencySymbol = (e) => {
    const c = e?.currency;
    if (c && typeof c === 'object') return c.value ?? c.code ?? c.name ?? '';
    return typeof c === 'string' ? c : '';
};

const formatNumber = (n) => {
    const num = Number(n);
    if (Number.isNaN(num)) return n ?? '';
    return new Intl.NumberFormat('pl-PL', { minimumFractionDigits: 2, maximumFractionDigits: 2 }).format(num);
};

const formatDate = (d) => {
    if (typeof d === 'string' && /^\d{2}-\d{2}-\d{4}$/.test(d)) {
        const [dd, mm, yyyy] = d.split('-');
        return new Date(`${yyyy}-${mm}-${dd}T00:00:00Z`).toLocaleDateString('pl-PL');
    }
    const date = new Date(d);
    return isNaN(date.getTime()) ? d : date.toLocaleDateString('pl-PL');
};

const deleteEvidence = () => {
    if (evidenceToDelete.value) {
        router.delete(route('candidates.evidence.delete', [props.candidate, evidenceToDelete.value.id]), {
            preserveScroll: true,
            onFinish: () => closeDeleteModal()
        });
    }
};

const getCandidateInitials = (c) => {
    return `${(c?.name?.[0] || '')}${(c?.surname?.[0] || '')}`.toUpperCase();
};
</script>

<template>
    <AppLayout :title="__('translate.candidateDetails')">
        <template #header>
            <div class="flex justify-between">
                <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                    {{ __('translate.evidence') }}
                </h2>
                <Link
                    :href="route('candidates.index')"
                    class="inline-flex items-center gap-2 rounded-xl border border-gray-200 bg-white px-4 py-2 text-sm font-semibold text-gray-700 shadow-sm hover:bg-gray-50"
                >
                    <span class="text-lg leading-none">←</span>
                    {{ __('translate.backToList') }}
                </Link>
            </div>
        </template>

        <div class="py-10">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

                <div class="bg-white rounded-2xl shadow-sm ring-1 ring-gray-200 p-6">
                    <!-- Header -->
                    <div class="mb-4 flex items-center justify-between">
                        <div>
                            <h1 class="text-2xl font-semibold text-gray-900">
                                {{ __('translate.evidence') }}
                            </h1>
                            <p class="mt-1 text-sm text-gray-500">
                                {{ __('translate.candidateDetails') }}
                            </p>
                        </div>
                        <Link
                            :href="route('candidates.show', candidate.id)"
                            class="justify-end px-4 py-2 bg-blue-900 text-white font-bold text-xs rounded-xl hover:bg-blue-800 transition-all uppercase whitespace-nowrap"
                        >
                            {{ __('translate.candidateDetails') }}
                        </Link>
                    </div>


                    <!-- FORM -->

                        <FormSectionProject @submitted="saveEvidence">
                            <template #form>
                                <div class="col-span-12">
                                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">

                                        <div>
                                            <InputLabel :value="__('translate.salary')" />
                                            <TextInput
                                                id="salary"
                                                v-model="form.salary"
                                                class="mt-1 block w-full"
                                                type="number"
                                                step="0.1"
                                            />
                                            <InputError :message="form.errors.salary" class="mt-2" />
                                        </div>

                                        <div>
                                            <InputLabel :value="__('translate.currency')" />
                                            <multiselect
                                                :selectLabel="__('translate.selectLabel')"
                                                :selectGroupLabel="__('translate.selectGroupLabel')"
                                                :selectedLabel="__('translate.selectedLabel')"
                                                :deselectLabel="__('translate.deselectLabel')"
                                                :noOptions="__('translate.noOptions')"
                                                :noResult="__('translate.noResult')"
                                                track-by="value"
                                                :disabled="!form.salary"
                                                label="name"
                                                :placeholder="__('translate.placeholder')"
                                                v-model="form.currency"
                                                :options="optionsCurrency"
                                            />
                                            <InputError :message="form.errors.currency" class="mt-2" />
                                        </div>

                                        <div>
                                            <InputLabel :value="__('translate.position')" />
                                            <multiselect
                                                :selectLabel="__('translate.selectLabel')"
                                                :selectGroupLabel="__('translate.selectGroupLabel')"
                                                :selectedLabel="__('translate.selectedLabel')"
                                                :deselectLabel="__('translate.deselectLabel')"
                                                :noOptions="__('translate.noOptions')"
                                                :noResult="__('translate.noResult')"
                                                track-by="value"
                                                label="name"
                                                :placeholder="__('translate.placeholder')"
                                                v-model="form.position"
                                                :options="optionsPosition"
                                            />
                                            <InputError :message="form.errors.position" class="mt-2" />
                                        </div>

                                        <div>
                                            <InputLabel :value="__('translate.Country')" />
                                            <multiselect
                                                group-values="elements"
                                                group-label="group"
                                                :group-select="false"
                                                :selectLabel="__('translate.selectLabel')"
                                                :selectGroupLabel="__('translate.selectGroupLabel')"
                                                :selectedLabel="__('translate.selectedLabel')"
                                                :deselectLabel="__('translate.deselectLabel')"
                                                track-by="name"
                                                :multiple="false"
                                                label="name"
                                                @remove="clearCountry"
                                                @update:modelValue="clearCountry"
                                                :placeholder="__('translate.placeholder')"
                                                v-model="form.country"
                                                :options="optionsCountry"
                                            />
                                            <InputError :message="form.errors.country" class="mt-2" />
                                        </div>

                                        <div v-if="externalCompanies && externalCompanies.length > 0">
                                            <InputLabel :value="__('translate.externalCompany')" />
                                            <multiselect
                                                :selectLabel="__('translate.selectLabel')"
                                                :selectGroupLabel="__('translate.selectGroupLabel')"
                                                :selectedLabel="__('translate.selectedLabel')"
                                                :deselectLabel="__('translate.deselectLabel')"
                                                track-by="id"
                                                label="name"
                                                :placeholder="__('translate.placeholder')"
                                                v-model="form.external_company"
                                                :options="externalCompanies"
                                            />
                                            <InputError :message="form.errors.external_company" class="mt-2" />
                                        </div>

                                        <div>
                                            <InputLabel for="date_of_hire" :value="__('translate.date_of_hire')" />
                                            <VueDatePicker
                                                model-type="dd-MM-yyyy"
                                                format="dd-MM-yyyy"
                                                class="border-gray-200 focus:blue-work rounded-xl shadow-sm mt-1 block w-full"
                                                :enable-time-picker="false"
                                                v-model="form.date_of_hire"
                                                :locale="lang"
                                                auto-apply
                                                id="date_of_hire"
                                            />
                                            <InputError :message="form.errors.date_of_hire" class="mt-2" />
                                        </div>

                                        <div class="lg:col-span-2">
                                            <label for="note-content" class="block text-sm font-medium text-gray-700">
                                                {{ __('translate.noteContent') }}
                                            </label>

                                            <TextareaLimit
                                                id="note-content"
                                                v-model="form.notes"
                                                :limit="1500"
                                                class="mt-1 block w-full rounded-xl border-gray-200 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                                :placeholder="__('translate.enterNoteContent')"
                                            />

                                            <div class="flex justify-between mt-1">
                                                <p v-if="form.errors.notes" class="text-sm text-red-600">
                                                    {{ form.errors.notes }}
                                                </p>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </template>

                            <template #actions>
                                <DangerButton class="mr-2" v-if="editingEvidenceId" @click="exitMode">
                                    {{ __('translate.cancel') }}
                                </DangerButton>

                                <PrimaryButton :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
                                    <SpinnerAction :process="form.processing">
                                        {{ editingEvidenceId ? __('translate.save') : __('translate.add') }}
                                    </SpinnerAction>
                                </PrimaryButton>
                            </template>
                        </FormSectionProject>

                    <!-- LISTA HISTORII -->
                    <div class="mt-10">
                        <div class="flex items-center justify-between mb-4">
                            <h2 class="text-lg font-semibold text-gray-900">
                                {{__('translate.historyEvidence')}}
                            </h2>

                            <span v-if="candidate.evidences?.length" class="text-sm text-gray-500">
                                {{ candidate.evidences.length }} wpisów
                            </span>
                        </div>

                        <div v-if="!candidate.evidences?.length" class="text-center py-12 text-gray-500">
                            Brak historii zatrudnienia
                        </div>

                        <div v-else class="space-y-3">
                            <div
                                v-for="evidence in candidate.evidences"
                                :key="evidence.id"
                                class="bg-white border border-gray-200 rounded-2xl p-5 hover:bg-gray-50 transition-all"
                            >
                                <div class="flex flex-wrap items-start justify-between gap-3">
                                    <div>
                                        <div class="text-[11px] font-semibold text-gray-400 uppercase tracking-wide">
                                            {{ __('translate.position') }}
                                        </div>
                                        <h3 class="text-base font-semibold text-gray-900">
                                            {{ getPositionName(evidence) }}
                                        </h3>
                                    </div>

                                    <div class="text-right">
                                        <div class="text-[11px] font-semibold text-gray-400 uppercase tracking-wide">
                                            {{ __('translate.salary') }}
                                        </div>
                                        <div class="text-sm font-semibold text-gray-700">
                                            {{ getCurrencySymbol(evidence) }} {{ formatNumber(evidence.salary) }}
                                        </div>
                                    </div>
                                </div>

                                <div class="mt-3 grid grid-cols-1 md:grid-cols-2 gap-3 text-sm">
                                    <div>
                                        <div class="text-[11px] font-semibold text-gray-400 uppercase tracking-wide">
                                            {{ __('translate.firm') }}
                                        </div>
                                        <div class="text-gray-800 font-medium">
                                            {{ evidence.external_company?.name ?? '—' }}
                                            <span v-if="evidence.external_company?.abbreviation" class="text-gray-400">
                                                ({{ evidence.external_company.abbreviation }})
                                            </span>
                                        </div>

                                        <div v-if="evidence.external_company?.email" class="text-xs text-gray-500">
                                            Email: {{ evidence.external_company.email }}
                                        </div>
                                    </div>

                                    <div>
                                        <div class="text-[11px] font-semibold text-gray-400 uppercase tracking-wide">
                                            {{ __('translate.date_of_hire') }}
                                        </div>
                                        <div class="text-gray-800 font-medium">
                                            {{ evidence.date_of_hire ? formatDate(evidence.date_of_hire) : '—' }}
                                        </div>
                                    </div>

                                    <div v-if="evidence.country?.length">
                                        <div class="text-[11px] font-semibold text-gray-400 uppercase tracking-wide">
                                            {{ __('translate.Country') }}
                                        </div>
                                        <div class="text-gray-800 font-medium">
                                            {{ evidence.country.map(c => c.name ?? c).join(', ') }}
                                        </div>
                                    </div>

                                    <div v-if="evidence.notes">
                                        <div class="text-[11px] font-semibold text-gray-400 uppercase tracking-wide">
                                            {{ __('translate.note') }}
                                        </div>
                                        <div class="text-gray-800">
                                            {{ evidence.notes }}
                                        </div>
                                    </div>
                                </div>

                                <div class="mt-4 flex items-center gap-3">
                                    <button
                                        type="button"
                                        class="px-4 py-2 bg-blue-900 text-white font-bold text-xs rounded-xl hover:bg-blue-800 transition-all uppercase"
                                        @click="editEvidence(evidence)"
                                    >
                                        ✏️ {{ __('translate.edit') }}
                                    </button>

                                    <button
                                        type="button"
                                        class="px-4 py-2 bg-red-600 text-white font-bold text-xs rounded-xl hover:bg-red-700 transition-all uppercase flex items-center gap-2"
                                        @click="openDeleteModal(evidence)"
                                    >
                                        🗑 {{ __('translate.delete') }}
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- MODAL -->
                    <DialogModal :show="showDeleteModal" @close="closeDeleteModal">
                        <template #title>
                            {{ __('translate.deleteNote') }}
                        </template>

                        <template #content>
                            <div class="mt-2">
                                <p class="text-sm text-gray-600">{{ __('translate.confirmDeleteNote') }}</p>
                            </div>
                        </template>

                        <template #footer>
                            <button
                                type="button"
                                class="inline-flex justify-center px-4 py-2 bg-white border border-gray-300 rounded-xl font-semibold text-xs text-gray-700 uppercase tracking-widest shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 disabled:opacity-25 transition"
                                @click="closeDeleteModal"
                            >
                                {{ __('translate.cancel') }}
                            </button>
                            <button
                                type="button"
                                class="ml-2 inline-flex justify-center px-4 py-2 bg-red-600 border border-transparent rounded-xl font-semibold text-xs text-white uppercase tracking-widest hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2 disabled:opacity-25 transition"
                                @click="deleteEvidence"
                            >
                                {{ __('translate.delete') }}
                            </button>
                        </template>
                    </DialogModal>
                </div>

            </div>
        </div>
    </AppLayout>
</template>

<style src="vue-multiselect/dist/vue-multiselect.css"></style>

<style lang="scss">
.multiselect__tag{
    background: #0A2C5C !important;
}
.multiselect__option--highlight {
    background: #0A2C5C !important;
    outline: none;
    color: white;
}

.multiselect__option--highlight:after {
    content: attr(data-select);
    background: #0A2C5C !important;
    color: white;
}

.multiselect__option--selected {
    background: #12315d !important;
    color: white;
    font-weight: bold;
}

.multiselect__option--selected.multiselect__option--highlight {
    background: #12315d !important;
    color: #fff;
}

.multiselect__option--selected.multiselect__option--highlight:after {
    background: #12315d !important;
    content: attr(data-deselect);
    color: white !important;
}

.multiselect__option--selected:after {
    content: attr(data-selected);
    color: #12315d;
    background: transparent !important;
}

/* Dopasowanie multiselect do rounded-2xl look */
.multiselect {
    border-radius: 12px !important;
    min-height: 44px;
}
.multiselect__tags {
    border-radius: 12px !important;
    border: 1px solid #e5e7eb !important;
    min-height: 44px !important;
    padding: 10px 12px !important;
}
.multiselect__content-wrapper {
    border-radius: 12px !important;
    border: 1px solid #e5e7eb !important;
    overflow: hidden;
}
</style>
