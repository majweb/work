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

        <div class="py-12 bg-gray-50/50 min-h-screen">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-8">

                <div class="bg-white rounded-[3rem] shadow-xl shadow-blue-900/5 border border-gray-100 p-10">
                    <!-- Header -->
                    <div class="flex items-center gap-4 mb-8">
                        <h3 class="text-[10px] font-black text-[#0A2C5C] uppercase tracking-[0.2em]">
                            {{ __('translate.evidence') }}
                        </h3>
                        <div class="h-px flex-1 bg-gray-100"></div>
                    </div>

                    <div class="flex items-center justify-between mb-10">
                        <div>
                            <h1 class="text-2xl font-black text-gray-900 uppercase tracking-tight">
                                {{ __('translate.evidence') }}
                            </h1>
                            <p class="text-[10px] font-bold text-gray-400 uppercase tracking-widest mt-1">
                                {{ __('translate.candidateDetails') }}
                            </p>
                        </div>
                        <Link
                            :href="route('candidates.show', candidate.id)"
                            class="px-8 py-3 bg-red-50 text-red-600 text-[10px] font-black rounded-xl hover:bg-red-100 transition-all uppercase tracking-widest"
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
                                            <label class="block text-[10px] font-black text-gray-400 mb-2 uppercase tracking-widest">{{ __('translate.salary') }}</label>
                                            <TextInput
                                                id="salary"
                                                v-model="form.salary"
                                                class="w-full px-5 py-4 text-xs rounded-2xl border-gray-100 bg-gray-50 focus:bg-white focus:ring-0 focus:border-[#00a0e3] transition-all placeholder-gray-400 font-bold tracking-widest uppercase"
                                                type="number"
                                                step="0.1"
                                            />
                                            <InputError :message="form.errors.salary" class="mt-2" />
                                        </div>

                                        <div>
                                            <label class="block text-[10px] font-black text-gray-400 mb-2 uppercase tracking-widest">{{ __('translate.currency') }}</label>
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
                                                class="custom-multiselect"
                                            />
                                            <InputError :message="form.errors.currency" class="mt-2" />
                                        </div>

                                        <div>
                                            <label class="block text-[10px] font-black text-gray-400 mb-2 uppercase tracking-widest">{{ __('translate.position') }}</label>
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
                                                class="custom-multiselect"
                                            />
                                            <InputError :message="form.errors.position" class="mt-2" />
                                        </div>

                                        <div>
                                            <label class="block text-[10px] font-black text-gray-400 mb-2 uppercase tracking-widest">{{ __('translate.Country') }}</label>
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
                                                class="custom-multiselect"
                                            />
                                            <InputError :message="form.errors.country" class="mt-2" />
                                        </div>

                                        <div v-if="externalCompanies && externalCompanies.length > 0">
                                            <label class="block text-[10px] font-black text-gray-400 mb-2 uppercase tracking-widest">{{ __('translate.externalCompany') }}</label>
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
                                                class="custom-multiselect"
                                            />
                                            <InputError :message="form.errors.external_company" class="mt-2" />
                                        </div>

                                        <div>
                                            <label class="block text-[10px] font-black text-gray-400 mb-2 uppercase tracking-widest">{{ __('translate.date_of_hire') }}</label>
                                            <VueDatePicker
                                                model-type="dd-MM-yyyy"
                                                format="dd-MM-yyyy"
                                                class="custom-datepicker"
                                                :enable-time-picker="false"
                                                v-model="form.date_of_hire"
                                                :locale="lang"
                                                auto-apply
                                                id="date_of_hire"
                                            />
                                            <InputError :message="form.errors.date_of_hire" class="mt-2" />
                                        </div>

                                        <div class="lg:col-span-2">
                                            <label for="note-content" class="block text-[10px] font-black text-gray-400 mb-2 uppercase tracking-widest">
                                                {{ __('translate.noteContent') }}
                                            </label>

                                            <TextareaLimit
                                                id="note-content"
                                                v-model="form.notes"
                                                :limit="1500"
                                                class="w-full px-5 py-4 text-xs rounded-2xl border-gray-100 bg-gray-50 focus:bg-white focus:ring-0 focus:border-[#00a0e3] transition-all placeholder-gray-400 font-bold tracking-widest uppercase min-h-[120px]"
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
                                <button
                                    v-if="editingEvidenceId"
                                    @click="exitMode"
                                    type="button"
                                    class="mr-4 px-10 py-4 bg-white border border-gray-100 text-gray-500 text-[10px] font-black uppercase tracking-widest rounded-2xl hover:bg-gray-50 shadow-sm transition-all hover:-translate-y-0.5"
                                >
                                    {{ __('translate.cancel') }}
                                </button>

                                <button
                                    :disabled="form.processing"
                                    type="submit"
                                    class="px-10 py-4 bg-[#0A2C5C] text-white text-[10px] font-black uppercase tracking-widest rounded-2xl hover:bg-blue-800 shadow-lg shadow-blue-900/20 transition-all hover:-translate-y-0.5 disabled:opacity-50"
                                >
                                    <SpinnerAction :process="form.processing">
                                        {{ editingEvidenceId ? __('translate.save') : __('translate.add') }}
                                    </SpinnerAction>
                                </button>
                            </template>
                        </FormSectionProject>

                    <!-- LISTA HISTORII -->
                    <div class="mt-16">
                        <div class="flex items-center gap-4 mb-8">
                            <h3 class="text-[10px] font-black text-[#0A2C5C] uppercase tracking-[0.2em]">
                                {{__('translate.historyEvidence')}}
                            </h3>
                            <div class="h-px flex-1 bg-gray-100"></div>
                            <span v-if="candidate.evidences?.length" class="text-[10px] font-black text-gray-400 uppercase tracking-widest">
                                {{ candidate.evidences.length }} wpisów
                            </span>
                        </div>

                        <div v-if="!candidate.evidences?.length" class="bg-gray-50/50 rounded-[2.5rem] p-12 text-center border border-dashed border-gray-200">
                            <p class="text-[10px] font-black text-gray-400 uppercase tracking-widest">{{ __('translate.noHistoryAvailable') || 'Brak historii zatrudnienia' }}</p>
                        </div>

                        <div v-else class="space-y-4">
                            <div
                                v-for="evidence in candidate.evidences"
                                :key="evidence.id"
                                class="group bg-white rounded-[2.5rem] border border-gray-100 shadow-sm hover:shadow-xl hover:shadow-blue-900/5 transition-all duration-300 hover:-translate-y-1 p-8"
                            >
                                <div class="grid grid-cols-1 md:grid-cols-12 gap-6 items-start">
                                    <div class="col-span-1 md:col-span-4">
                                        <div class="text-[10px] font-black text-gray-400 uppercase tracking-widest mb-1">
                                            {{ __('translate.position') }}
                                        </div>
                                        <h3 class="text-base font-black text-gray-900 uppercase tracking-tight">
                                            {{ getPositionName(evidence) }}
                                        </h3>
                                    </div>

                                    <div class="col-span-1 md:col-span-3">
                                        <div class="text-[10px] font-black text-gray-400 uppercase tracking-widest mb-1">
                                            {{ __('translate.salary') }}
                                        </div>
                                        <div class="text-sm font-black text-[#0A2C5C] tracking-widest">
                                            {{ getCurrencySymbol(evidence) }} {{ formatNumber(evidence.salary) }}
                                        </div>
                                    </div>

                                    <div class="col-span-1 md:col-span-3">
                                        <div class="text-[10px] font-black text-gray-400 uppercase tracking-widest mb-1">
                                            {{ __('translate.date_of_hire') }}
                                        </div>
                                        <div class="text-xs font-bold text-gray-700 uppercase tracking-tight">
                                            {{ evidence.date_of_hire ? formatDate(evidence.date_of_hire) : '—' }}
                                        </div>
                                    </div>

                                    <div class="col-span-1 md:col-span-2 flex justify-end gap-3">
                                        <button
                                            type="button"
                                            class="p-3 bg-blue-50 text-blue-600 rounded-xl hover:bg-blue-100 transition-all"
                                            @click="editEvidence(evidence)"
                                            title="Edytuj"
                                        >
                                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" /></svg>
                                        </button>

                                        <button
                                            type="button"
                                            class="p-3 bg-red-50 text-red-600 rounded-xl hover:bg-red-100 transition-all"
                                            @click="openDeleteModal(evidence)"
                                            title="Usuń"
                                        >
                                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" /></svg>
                                        </button>
                                    </div>

                                    <div class="col-span-1 md:col-span-4 border-t border-gray-50 pt-4 mt-2">
                                        <div class="text-[10px] font-black text-gray-400 uppercase tracking-widest mb-1">
                                            {{ __('translate.firm') }}
                                        </div>
                                        <div class="text-xs font-black text-gray-900 uppercase tracking-tight">
                                            {{ evidence.external_company?.name ?? '—' }}
                                            <span v-if="evidence.external_company?.abbreviation" class="text-gray-400 ml-1">
                                                ({{ evidence.external_company.abbreviation }})
                                            </span>
                                        </div>
                                        <div v-if="evidence.external_company?.email" class="text-[10px] font-bold text-gray-400 lowercase mt-1">
                                            {{ evidence.external_company.email }}
                                        </div>
                                    </div>

                                    <div class="col-span-1 md:col-span-3 border-t border-gray-50 pt-4 mt-2" v-if="evidence.country?.length">
                                        <div class="text-[10px] font-black text-gray-400 uppercase tracking-widest mb-1">
                                            {{ __('translate.Country') }}
                                        </div>
                                        <div class="text-xs font-black text-gray-700 uppercase tracking-tight">
                                            {{ evidence.country.map(c => c.name ?? c).join(', ') }}
                                        </div>
                                    </div>

                                    <div class="col-span-1 md:col-span-5 border-t border-gray-50 pt-4 mt-2" v-if="evidence.notes">
                                        <div class="text-[10px] font-black text-gray-400 uppercase tracking-widest mb-1">
                                            {{ __('translate.note') }}
                                        </div>
                                        <div class="text-xs font-medium text-gray-600 leading-relaxed italic">
                                            "{{ evidence.notes }}"
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- MODAL -->
                    <DialogModal :show="showDeleteModal" @close="closeDeleteModal" max-width="lg">
                        <template #title>
                            <div class="text-lg font-black text-gray-900 uppercase tracking-tight">
                                {{ __('translate.deleteNote') }}
                            </div>
                        </template>

                        <template #content>
                            <div class="mt-4">
                                <p class="text-sm font-bold text-gray-400 uppercase tracking-widest leading-relaxed">
                                    {{ __('translate.confirmDeleteNote') }}
                                </p>
                            </div>
                        </template>

                        <template #footer>
                            <div class="flex gap-3">
                                <button
                                    type="button"
                                    class="px-8 py-3 bg-white border border-gray-100 text-gray-500 text-[10px] font-black uppercase tracking-widest rounded-xl hover:bg-gray-50 transition-all"
                                    @click="closeDeleteModal"
                                >
                                    {{ __('translate.cancel') }}
                                </button>
                                <button
                                    type="button"
                                    class="px-8 py-3 bg-red-600 text-white text-[10px] font-black uppercase tracking-widest rounded-xl hover:bg-red-700 shadow-lg shadow-red-600/20 transition-all"
                                    @click="deleteEvidence"
                                >
                                    {{ __('translate.delete') }}
                                </button>
                            </div>
                        </template>
                    </DialogModal>
                </div>

            </div>
        </div>
    </AppLayout>
</template>

<style src="vue-multiselect/dist/vue-multiselect.css"></style>

<style lang="scss">
.custom-multiselect {
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
        font-size: 0.75rem !important;
        font-weight: 700 !important;
        text-transform: uppercase !important;
        letter-spacing: 0.05em !important;

        &:after {
            background: #0A2C5C !important;
            color: white !important;
        }
    }

    .multiselect__option--selected {
        background: #f3f4f6 !important;
        color: #0A2C5C !important;
        font-weight: 900 !important;
        text-transform: uppercase !important;
        font-size: 10px !important;
        letter-spacing: 0.1em !important;

        &:after {
            background: transparent !important;
            color: #9ca3af !important;
        }

        &.multiselect__option--highlight {
            background: #0A2C5C !important;
            color: white !important;

            &:after {
                background: #0A2C5C !important;
                color: white !important;
            }
        }
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

    .multiselect__tag-icon {
        &:after {
            color: white !important;
        }

        &:hover {
            background: #1e3a8a !important;
        }
    }

    .multiselect__content-wrapper {
        border: 1px solid #f3f4f6 !important;
        border-top: none !important;
        border-bottom-left-radius: 1rem !important;
        border-bottom-right-radius: 1rem !important;
        box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1) !important;
    }
}

.custom-datepicker {
    .dp__main {
        border-radius: 1rem !important;
    }
    .dp__input {
        border-radius: 1rem !important;
        border: 1px solid #f3f4f6 !important;
        background: #f9fafb !important;
        padding: 1rem 1.25rem !important;
        font-size: 0.75rem !important;
        font-weight: 700 !important;
        text-transform: uppercase !important;
        letter-spacing: 0.05em !important;
        color: #374151 !important;
        min-height: 58px !important;

        &:focus {
            background: white !important;
            border-color: #00a0e3 !important;
        }
    }
}
</style>
