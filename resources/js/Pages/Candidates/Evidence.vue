<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import Multiselect from "vue-multiselect";
import InputError from "@/Components/InputError.vue";
import InputLabel from "@/Components/InputLabel.vue";
import {router, useForm, usePage} from "@inertiajs/vue3";
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

const exitMode = ()=> {
    form.reset();
    editingEvidenceId.value = null;
}


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
        router.delete(route('candidates.evidence.delete', [props.candidate,evidenceToDelete.value.id]), {
            preserveScroll: true,
            onFinish: () => closeDeleteModal()
        });
    }
};

</script>

<template>
    <AppLayout :title="__('translate.candidateDetails')">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('translate.evidence') }}
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

                <!-- 🔹 FORMULARZ -->
                <FormSectionProject @submitted="saveEvidence">
                    <template #form>
                        <div class="col-span-12">
                            <div class="col-span-6 grid grid grid-cols-1 lg:grid-cols-2 gap-6">

                                <div>
                                    <InputLabel :value="__('translate.salary')"/>
                                    <TextInput id="salary" v-model="form.salary" class="mt-1 block w-full" type="number" step="0.1" />
                                    <InputError :message="form.errors.salary" class="mt-2"/>
                                </div>

                                <div>
                                    <InputLabel :value="__('translate.currency')"/>
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
                                        :options="optionsCurrency">
                                    </multiselect>
                                    <InputError :message="form.errors.currency" class="mt-2"/>
                                </div>

                                <div>
                                    <InputLabel :value="__('translate.position')"/>
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
                                        :options="optionsPosition">
                                    </multiselect>
                                    <InputError :message="form.errors.position" class="mt-2"/>
                                </div>

                                <div>
                                    <InputLabel :value="__('translate.Country')"/>
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
                                        :options="optionsCountry">
                                    </multiselect>
                                    <InputError :message="form.errors.country" class="mt-2"/>
                                </div>

                                <div v-if="externalCompanies && externalCompanies.length > 0">
                                    <InputLabel :value="__('translate.externalCompany')"/>
                                    <multiselect
                                        :selectLabel="__('translate.selectLabel')"
                                        :selectGroupLabel="__('translate.selectGroupLabel')"
                                        :selectedLabel="__('translate.selectedLabel')"
                                        :deselectLabel="__('translate.deselectLabel')"
                                        track-by="id"
                                        label="name"
                                        :placeholder="__('translate.placeholder')"
                                        v-model="form.external_company"
                                        :options="externalCompanies">
                                    </multiselect>
                                    <InputError :message="form.errors.external_company" class="mt-2"/>
                                </div>

                                <div>
                                    <InputLabel for="date_of_hire" :value="__('translate.date_of_hire')"/>
                                    <VueDatePicker
                                        model-type="dd-MM-yyyy"
                                        format="dd-MM-yyyy"
                                        class="border-gray-300 focus:blue-work rounded-md shadow-sm mt-1 block w-full"
                                        :enable-time-picker="false"
                                        v-model="form.date_of_hire"
                                        :locale="lang"
                                        auto-apply
                                        id="date_of_hire"/>
                                    <InputError :message="form.errors.date_of_hire" class="mt-2"/>
                                </div>

                                <div>
                                    <div class="mt-2">
                                        <label for="note-content" class="block text-sm font-medium text-gray-700">
                                            {{ __('translate.noteContent') }}
                                        </label>
                                        <TextareaLimit
                                            id="note-content"
                                            v-model="form.notes"
                                            :limit="1500"
                                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                            :placeholder="__('translate.enterNoteContent')"/>
                                        <div class="flex justify-between mt-1">
                                            <p v-if="form.errors.notes" class="text-sm text-red-600">{{ form.errors.notes }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </template>
                    <template #actions>
                        <danger-button class="mr-2" v-if="editingEvidenceId" @click="exitMode">Anuluj</danger-button>
                        <PrimaryButton :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
                            <spinner-action :process="form.processing">
                                {{ editingEvidenceId ? __('translate.save') : __('translate.add') }}
                            </spinner-action>
                        </PrimaryButton>
                    </template>
                </FormSectionProject>

                <!-- 🔹 LISTA HISTORII -->
                <div v-if="candidate.evidences?.length" class="space-y-4 mt-10">
                    <h2 class="text-xl font-bold text-gray-800">Historia zatrudnienia</h2>
                    <ol class="relative border-l border-gray-300">
                        <li v-for="evidence in candidate.evidences" :key="evidence.id" class="mb-10 ml-6">
              <span
                  class="absolute -left-3 flex h-6 w-6 items-center justify-center rounded-full bg-blue-500 ring-8 ring-white">
                <svg class="h-3 w-3 text-white" viewBox="0 0 20 20" fill="currentColor">
                  <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3-8a3 3 0 11-6 0 3 3 0 016 0z"/>
                </svg>
              </span>

                            <div class="p-4 bg-white border rounded-lg shadow-sm">
                                <div class="flex flex-wrap items-center justify-between gap-2">
                                    <h3 class="text-lg font-semibold text-gray-900">
                                        {{ getPositionName(evidence) }}
                                    </h3>
                                    <span class="text-sm text-gray-600 font-medium">
                    {{ getCurrencySymbol(evidence) }} {{ formatNumber(evidence.salary) }}
                  </span>
                                </div>

                                <p class="mt-1 text-gray-700">
                                    {{__('translate.firm')}}:
                                    <span class="font-medium"> {{ evidence.external_company?.name ?? '—' }} </span>
                                    <span v-if="evidence.external_company?.abbreviation" class="text-gray-400">
                    ({{ evidence.external_company.abbreviation }})
                  </span>
                                </p>
                                <p v-if="evidence.external_company?.email" class="text-sm text-gray-500">
                                    Email: {{ evidence.external_company.email }}
                                </p>
                                <p v-if="evidence.date_of_hire" class="mt-2 text-xs text-gray-400">
                                    {{__('translate.date_of_hire')}}: {{ formatDate(evidence.date_of_hire) }}

                                </p>
                                <p v-if="evidence.country?.length" class="mt-1 text-gray-700">
                                    {{__('translate.Country')}}: <span class="font-medium">{{ evidence.country.map(c => c.name ?? c).join(', ') }}</span>
                                </p>
                                <p v-if="evidence.notes" class="mt-1 text-gray-700">
                                    {{__('translate.note')}}:<span class="font-medium">{{ evidence.notes }}</span>
                                </p>
                                <div class="flex items-center mt-3 gap-2">
                                    <!-- 🔹 PRZYCISK EDYCJI -->
                                    <button
                                        type="button"
                                        class="text-sm text-blue-600 hover:underline"
                                        @click="editEvidence(evidence)"
                                    >
                                        ✏️ {{ __('translate.edit') }}
                                    </button>
                                    <button @click="openDeleteModal(evidence)"
                                            class="text-red-600 hover:text-red-800 flex items-center gap-1">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none"
                                             viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                  stroke-width="2"
                                                  d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/>
                                        </svg>
                                        <span>
                                        {{ __('translate.delete') }}
                                        </span>
                                    </button>
                                </div>
                            </div>
                        </li>
                    </ol>
                </div>
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
                            class="inline-flex justify-center px-4 py-2 bg-white border border-gray-300 rounded-md font-semibold text-xs text-gray-700 uppercase tracking-widest shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 disabled:opacity-25 transition"
                            @click="closeDeleteModal"
                        >
                            {{ __('translate.cancel') }}
                        </button>
                        <button
                            type="button"
                            class="ml-2 inline-flex justify-center px-4 py-2 bg-red-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2 disabled:opacity-25 transition"
                            @click="deleteEvidence"
                        >
                            {{ __('translate.delete') }}
                        </button>
                    </template>
                </DialogModal>
            </div>
        </div>
    </AppLayout>
</template>
<style src="vue-multiselect/dist/vue-multiselect.css"></style>
<style lang="scss">

.multiselect__tag {
    background: #00a0e3 !important;
}

.multiselect__option--highlight {
    background: #00a0e3 !important;
    outline: none;
    color: white;
}

.multiselect__option--highlight:after {
    content: attr(data-select);
    background: #00a0e3 !important;
    color: white;
}

.multiselect__option--selected {
    background: #00A0E3B2 !important;
    color: #35495E;
    font-weight: bold;
}

.multiselect__option--selected.multiselect__option--highlight {
    background: #00A0E3B2 !important;
    color: #fff;
}

.multiselect__option--selected.multiselect__option--highlight:after {
    background: #00A0E3B2 !important;
    content: attr(data-deselect);
    color: white !important;
}

.multiselect__option--selected:after {
    content: attr(data-selected);
    color: #00A0E3B2;
    background: transparent !important;
}
</style>
<!--`Wyswietl w tym elemencie tagi klikalne wszystkie zawody z bazy danych (categories) oraz dodatkowe z tabeli tags. Zwróc uwagę na tłumaczenia w tabeli categories żeby po przełaczeniu na jezyk pojawiały sie ztego jezyka.Tagi mają być w różnych pastylowych kolorach Te tagi beda załączane do tabeli aplications chyba ze masz inny pomysł zrób to optymalnie,-->
