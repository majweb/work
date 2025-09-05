<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import {Link, useForm, usePage} from '@inertiajs/vue3';
import {computed, ref, watch} from 'vue';
import {router} from '@inertiajs/vue3';
import {pickBy, debounce} from 'lodash';
import Multiselect from "vue-multiselect";
import InputLabel from "@/Components/InputLabel.vue";
import DialogModal from "@/Components/DialogModal.vue";
import TextareaLimit from "@/Components/TextareaLimit.vue";
import __ from "@/lang.js";

const props = defineProps({
    otherCount: Number,
    maybeCount: Number,
    noCount: Number,
    optionsPosition: Object,
    optionsRecruits: Object,
    optionsExternal: Object,
    applications: Object,
    filters: Object,
    langLevels: Array,
});

const formSend = useForm({
    externalFirms: [],
    apps: []
})



// Stan dla modali
const showNoteModal = ref(false);
const showDeleteModal = ref(false);
const currentApplication = ref(null);
const formNote = useForm({
    content: '',
});
const currentNote = ref(null);
const isEditing = ref(false);
const noteToDelete = ref(null);

const form = ref({
    project: props.filters?.project || '',
    status: props.filters?.status || '',
    category: props.filters?.category?.value || '',
    recruiter: props.filters?.recruiter || '',
    has_cv: props.filters?.has_cv || 'all',
    lang: props.filters?.lang || '',
    Langlevel: props.filters?.Langlevel || '',
    skill: props.filters?.skill || '',
});

const updateStatus = (id, status) => {
    router.put(route('firm.applications.update-status', id), {
        status
    }, {
        preserveScroll: true,
        preserveState: true
    });
};
const resetFilters = () => {
    form.value = {
        project: '',
        category: '',
        recruiter: '',
        has_cv: 'all',
        lang: '',
        Langlevel: '',
        driveLicense: '',
    };

    router.get(route('firm.applications.acceptedApplications'), {}, {
        preserveState: true,
        replace: true,
    });
};

// Otwiera modal do dodania notatki
const openAddNoteModal = (application) => {
    currentApplication.value = application;
    formNote.reset();
    currentNote.value = null;
    isEditing.value = false;
    showNoteModal.value = true;
};

// Otwiera modal do edycji notatki
const openEditNoteModal = (application, note) => {
    currentApplication.value = application;
    formNote.content = note.content;
    currentNote.value = note;
    isEditing.value = true;
    showNoteModal.value = true;
};

// Zamyka modal notatek
const closeNoteModal = () => {
    showNoteModal.value = false;
    currentApplication.value = null;
    currentNote.value = null;
    formNote.reset();
    showNoteModal.value = false;
    formNote.clearErrors();


};

// Zapisuje notatkę
const saveNote = () => {
    if (isEditing.value && currentNote.value) {
        // Aktualizacja istniejącej notatki
        formNote.put(route('firm.applications.update-note', currentNote.value.id), {
            preserveScroll: true,
            onSuccess: () => closeNoteModal(),
        });
    } else {
        // Dodawanie nowej notatki
        formNote.post(route('firm.applications.store-note', currentApplication.value.id), {
            preserveScroll: true,
            onSuccess: () => closeNoteModal(),
        });
    }
};

// Otwiera modal potwierdzenia usunięcia notatki
const openDeleteModal = (note) => {
    noteToDelete.value = note;
    showDeleteModal.value = true;
};

// Zamyka modal potwierdzenia usunięcia
const closeDeleteModal = () => {
    formNote.reset();
    showDeleteModal.value = false;
    noteToDelete.value = null;
    formNote.clearErrors();
};

// Usuwa notatkę
const deleteNote = () => {
    if (noteToDelete.value) {
        router.delete(route('firm.applications.delete-note', noteToDelete.value.id), {
            preserveScroll: true,
            onFinish: () => closeDeleteModal()
        });
    }
};


watch(form, debounce(function (value) {
    let rest = pickBy({
        ...form.value,
        category: form.value.category?.value || form.value.category,
        recruiter: form.value.recruiter?.value || form.value.recruiter,
        lang: form.value.has_cv === 'yes' ? (form.value.lang?.value || form.value.lang) : undefined,
        Langlevel: form.value.has_cv === 'yes' ? (form.value.Langlevel?.name || form.value.Langlevel) : undefined,
        experience:form.value.has_cv === 'yes' ? (form.value.experience?.value || form.value.experience) : undefined,
        driveLicense:form.value.has_cv === 'yes' ? form.value.driveLicense  : '',
    });
    router.get(route('firm.applications.acceptedApplications'), rest, {
        preserveState: true,
        preserveScroll: true,
        replace: true
    });
}, 300), {deep: true});

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


const submitForm = () => {
    formSend.post(route('send.external'), {
        onSuccess: () => {
            // wyczyść pola po udanej wysyłce
            formSend.reset('externalFirms', 'apps')
        }
    })
}


</script>

<template>
    <AppLayout :title="__('translate.aplications')">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('translate.aplications') }}
            </h2>
        </template>

        <!-- Modal do dodawania/edycji notatek -->
        <DialogModal :show="showNoteModal" @close="closeNoteModal">
            <template #title>
                {{ isEditing ? __('translate.editNote') : __('translate.addNote') }}
            </template>

            <template #content>
                <div class="mt-2">
                    <label for="note-content" class="block text-sm font-medium text-gray-700">
                        {{ __('translate.noteContent') }}
                    </label>
                    <TextareaLimit
                        id="note-content"
                        v-model="formNote.content"
                        :limit="500"
                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                        :placeholder="__('translate.enterNoteContent')"
                    ></TextareaLimit>
                    <div class="flex justify-between mt-1">
                        <p v-if="formNote.errors.content" class="text-sm text-red-600">{{ formNote.errors.content }}</p>
                    </div>
                </div>
            </template>

            <template #footer>
                <button
                    type="button"
                    class="inline-flex justify-center px-4 py-2 bg-white border border-gray-300 rounded-md font-semibold text-xs text-gray-700 uppercase tracking-widest shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 disabled:opacity-25 transition"
                    @click="closeNoteModal"
                >
                    {{ __('translate.cancel') }}
                </button>
                <button
                    type="button"
                    class="ml-2 inline-flex justify-center px-4 py-2 bg-green-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-green-500 focus:ring-offset-2 disabled:opacity-25 transition"
                    @click="saveNote"
                >
                    {{ __('translate.save') }}
                </button>
            </template>
        </DialogModal>

        <!-- Modal potwierdzenia usunięcia notatki -->
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
                    @click="deleteNote"
                >
                    {{ __('translate.delete') }}
                </button>
            </template>
        </DialogModal>


        <div class="py-12">
            <div class="max-w-screen-2xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white shadow-xl sm:rounded-lg p-6">
                    <h3 class="text-lg font-medium text-gray-900 mb-6">{{ __('translate.applicationsList') }}</h3>

                    <!-- Formularz filtrowania -->
                    <div class="mb-6 bg-gray-50 p-4 rounded-lg">
                        <h4 class="font-medium text-gray-700 mb-3">{{ __('translate.filterApplications') }}</h4>
                        <div class="mb-4">
                            <label class="block text-sm font-medium text-gray-700 mb-1">{{
                                    __('translate.applicationWithCV')
                                }}</label>
                            <div class="flex space-x-4">
                                <label class="inline-flex items-center">
                                    <input type="radio" class="form-radio text-indigo-600" v-model="form.has_cv"
                                           value="all">
                                    <span class="ml-2">{{ __('translate.all') }}</span>
                                </label>
                                <label class="inline-flex items-center">
                                    <input type="radio" class="form-radio text-indigo-600" v-model="form.has_cv"
                                           value="yes">
                                    <span class="ml-2">{{ __('translate.onlyWithCV') }}</span>
                                </label>
                                <label class="inline-flex items-center">
                                    <input type="radio" class="form-radio text-indigo-600" v-model="form.has_cv"
                                           value="no">
                                    <span class="ml-2">{{ __('translate.onlyWithoutCV') }}</span>
                                </label>
                            </div>
                        </div>
                        <!-- Filtry projektu -->
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-4">
                            <div>
                                <label
                                    class="block text-sm font-medium text-gray-700 mb-1">{{ __('translate.projectID') }}</label>
                                <input
                                    v-model="form.project"
                                    type="text"
                                    class="w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                    :placeholder="__('translate.enterProjectID')"
                                >
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
                                    v-model="form.category" :options="optionsPosition">
                                    <template #noResult>
                                        <span>{{ __('translate.noOptions') }}</span>
                                    </template>
                                    <template #noOptions>
                                        <span>{{ __('translate.noResult') }}</span>
                                    </template>
                                </multiselect>
                            </div>
                            <div>
                                <InputLabel :value="__('translate.recruiter')"/>
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
                                    v-model="form.recruiter" :options="optionsRecruits">
                                    <template #noResult>
                                        <span>{{__('translate.noOptions')}}</span>
                                    </template>
                                    <template #noOptions>
                                        <span>{{__('translate.noResult')}}</span>
                                    </template>
                                </multiselect>
                            </div>
                        </div>

                        <!--FILTRY-->
                        <div v-if="form.has_cv == 'yes'" class="my-3">
                            <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
                                <!-- LANG -->
                                <div>
                                    <InputLabel :value="__('translate.language')"/>
                                    <multiselect
                                        :selectLabel="__('translate.selectLabel')"
                                        :selectedLabel="__('translate.selectedLabel')"
                                        :deselectLabel="__('translate.deselectLabel')"
                                        :noOptions="__('translate.noOptions')"
                                        :noResult="__('translate.noResult')"
                                        track-by="value"
                                        v-model="form.lang"
                                        label="label"
                                        :placeholder="__('translate.placeholder')"
                                        :options="sortLangs">
                                        <template #noResult>
                                            <span>{{__('translate.noOptions')}}</span>
                                        </template>
                                        <template #noOptions>
                                            <span>{{__('translate.noResult')}}</span>
                                        </template>
                                    </multiselect>
                                </div>
                                <!-- NAME -->
                                <!--                                                    LEVEL-->
                                <div v-if="props.langLevels" :class="{'opacity-50': !form.lang}">
                                    <InputLabel :value="__('translate.levelLang')"/>
                                    <multiselect
                                        :selectLabel="__('translate.selectLabel')"
                                        :selectGroupLabel="__('translate.selectGroupLabel')"
                                        :selectedLabel="__('translate.selectedLabel')"
                                        :deselectLabel="__('translate.deselectLabel')"
                                        :noOptions="__('translate.noOptions')"
                                        :noResult="__('translate.noResult')"
                                        track-by="value"
                                        label="name"
                                        :disabled="!form.lang"
                                        :placeholder="__('translate.placeholder')"
                                        v-model="form.Langlevel" :options="props.langLevels">
                                        <template #noResult>
                                            <span>{{__('translate.noOptions')}}</span>
                                        </template>
                                        <template #noOptions>
                                            <span>{{__('translate.noResult')}}</span>
                                        </template>
                                    </multiselect>
                                </div>
                                <!--                                                    LEVEL-->
                                <!--JEZYKI-->

                                <!--                            EXPERIENCES-->
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
                                        v-model="form.experience" :options="optionsPosition">
                                        <template #noResult>
                                            <span>{{__('translate.noOptions')}}</span>
                                        </template>
                                        <template #noOptions>
                                            <span>{{__('translate.noResult')}}</span>
                                        </template>
                                    </multiselect>
                                </div>
                                <!--                            EXPERIENCES-->
                                <!--                            DRIVE-->
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-1">{{__('translate.driveLicense')}}</label>
                                    <div class="flex space-x-4">
                                        <label class="inline-flex items-center">
                                            <input type="radio" class="form-radio text-indigo-600" v-model="form.driveLicense" value="yes">
                                            <span class="ml-2">{{ __('translate.yes') }}</span>
                                        </label>
                                        <label class="inline-flex items-center">
                                            <input type="radio" class="form-radio text-indigo-600" v-model="form.driveLicense" value="no">
                                            <span class="ml-2">{{ __('translate.no') }}</span>
                                        </label>
                                    </div>
                                </div>
                                <!--                            DRIVE-->
                            </div>
                        </div>
                        <!--FILTRY-->

                        <div class="flex justify-end space-x-3 my-3">
                            <button
                                @click="resetFilters"
                                type="button"
                                class="px-4 py-2 bg-gray-200 text-gray-700 rounded-md hover:bg-gray-300 transition"
                            >
                                {{ __('translate.resetFilters') }}
                            </button>
                        </div>
                        <div class="flex space-x-2">
                            <Link v-if="otherCount > 0" :href="route('aplications.index')"
                                  class="inline-flex items-center px-4 py-2 bg-indigo-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-indigo-700 focus:bg-indigo-700 active:bg-indigo-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150">
                                {{ __('translate.applications') }}
                            </Link>
                            <Link v-if="maybeCount > 0" :href="route('firm.applications.maybeApplications')"
                                  class="inline-flex items-center px-4 py-2 bg-yellow-500 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-yellow-600 focus:bg-yellow-600 active:bg-yellow-700 focus:outline-none focus:ring-2 focus:ring-yellow-400 focus:ring-offset-2 transition ease-in-out duration-150">
                                {{ __('translate.New') }}
                            </Link>
                            <Link v-if="noCount > 0" :href="route('firm.applications.noApplications')"
                                  class="inline-flex items-center px-4 py-2 bg-red-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-red-700 focus:bg-red-700 active:bg-red-800 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2 transition ease-in-out duration-150">
                                {{ __('translate.No') }}
                            </Link>
                        </div>
                    </div>
                    <div v-if="formSend.apps.length">
                        <multiselect
                            :multiple="true"
                            :selectLabel="__('translate.selectLabel')"
                            :selectGroupLabel="__('translate.selectGroupLabel')"
                            :selectedLabel="__('translate.selectedLabel')"
                            :deselectLabel="__('translate.deselectLabel')"
                            :noOptions="__('translate.noOptions')"
                            :noResult="__('translate.noResult')"
                            track-by="value"
                            class="mb-4"
                            label="name"
                            :placeholder="__('translate.placeholder')"
                            v-model="formSend.externalFirms" :options="optionsExternal">
                            <template #noResult>
                                <span>{{__('translate.noOptions')}}</span>
                            </template>
                            <template #noOptions>
                                <span>{{__('translate.noResult')}}</span>
                            </template>
                        </multiselect>
                        <button
                            v-if="formSend.externalFirms.length"
                            @click="submitForm"
                            class="flex justify-center items-center w-full text-center px-4 py-2 my-4 bg-blue-600 border border-transparent rounded-lg font-semibold text-sm text-white tracking-wide hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 shadow-md transition ease-in-out duration-150"
                        >
                            Prześlij aplikacje
                        </button>
                    </div>

                    <div v-if="applications.data.length === 0" class="text-center py-8 text-gray-500">
                        {{ __('translate.noApplicationsAvailable') }}
                    </div>
                    <div v-else class="overflow-x-auto">
                        <table class="min-w-full divide-y divide-gray-200">
                            <thead class="bg-gray-50">
                            <tr>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Id
                                </th>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    {{ __('translate.nameUser') }} {{ __('translate.surname') }}
                                </th>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    {{ __('translate.email') }}
                                </th>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    {{ __('translate.phone') }}
                                </th>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    {{ __('translate.project') }}
                                </th>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    {{ __('translate.cv') }}
                                </th>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    {{ __('translate.applicationStatus') }}
                                </th>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    {{ __('translate.notes') }}
                                </th>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    {{ __('translate.actions') }}
                                </th>
                            </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                            <tr v-for="application in applications.data" :key="application.id" :style="getBackgroundStyle(application)">
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <input
                                        @change="changeIds"
                                        class="rounded border-gray-300 text-blue-work shadow-sm focus:ring-blue-work mr-2"
                                        type="checkbox" :id="'app-'+application.id" v-model="formSend.apps" :value="application.id"/>
                                    <label class="text-sm font-medium text-gray-900" :for="'app-'+application.id">{{application.id}}</label>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm font-medium text-gray-900">{{ application.name }}
                                        {{ application.surname }}
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm text-gray-500">{{ application.email }}</div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm text-gray-500">{{ application.phone }}</div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm text-gray-500">{{ application.project?.id }}</div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div v-if="application.cv_classic"
                                         class="px-2 py-1 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                        {{ __('translate.hasCv') }}
                                    </div>
                                    <div v-else
                                         class="px-2 py-1 inline-flex text-xs leading-5 font-semibold rounded-full bg-red-100 text-red-800">
                                        {{ __('translate.noCv') }}
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="flex gap-2">
                                        <span
                                            :class="[application.status === 'yes' ? 'bg-green-600 text-white' : 'bg-gray-200 text-gray-700', 'px-3 py-1 rounded text-xs font-medium']">
                                            {{ __('translate.statusYes') }}
                                        </span>
                                        <button @click="updateStatus(application.id, 'no')"
                                                :class="[application.status === 'no' ? 'bg-red-600 text-white' : 'bg-gray-200 text-gray-700', 'px-3 py-1 rounded text-xs font-medium']">
                                            {{ __('translate.statusNo') }}
                                        </button>
                                        <button @click="updateStatus(application.id, 'maybe')"
                                                :class="[application.status === 'maybe' ? 'bg-yellow-500 text-white' : 'bg-gray-200 text-gray-700', 'px-3 py-1 rounded text-xs font-medium']">
                                            {{ __('translate.statusMaybe') }}
                                        </button>
                                    </div>
                                </td>
                                <td class="px-6 py-4 text-sm">
                                    <div v-if="application.notes" class="space-y-2">
                                        <div v-for="note in application.notes" :key="note.id"
                                             class="flex items-start group">
                                            <div class="flex-1 truncate" :title="note.content">
                                                {{
                                                    note.content.length > 40 ? note.content.substring(0, 40) + '...' : note.content
                                                }}
                                            </div>
                                            <div
                                                class="ml-2 flex items-center opacity-0 group-hover:opacity-100 transition-opacity">
                                                <button @click="openEditNoteModal(application, note)"
                                                        class="text-blue-600 hover:text-blue-800 mr-1">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none"
                                                         viewBox="0 0 24 24" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                              stroke-width="2"
                                                              d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/>
                                                    </svg>
                                                </button>
                                                <button @click="openDeleteModal(note)"
                                                        class="text-red-600 hover:text-red-800">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none"
                                                         viewBox="0 0 24 24" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                              stroke-width="2"
                                                              d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/>
                                                    </svg>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <button
                                        @click="openAddNoteModal(application)"
                                        class="text-green-600 hover:text-green-800 flex items-center"
                                    >
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none"
                                             viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                  d="M12 6v6m0 0v6m0-6h6m-6 0H6"/>
                                        </svg>
                                        {{
                                            application.notes && application.notes.length ? __('translate.addAnotherNote') : __('translate.addNote')
                                        }}
                                    </button>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                    <Link :href="route('aplications.show', application.id)"
                                          class="text-indigo-600 hover:text-indigo-900 mr-4">
                                        {{ __('translate.applicationDetails') }}
                                    </Link>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
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
