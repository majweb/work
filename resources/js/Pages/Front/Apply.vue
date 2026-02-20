<script setup>
import FrontLayout from "@/Layouts/FrontLayout.vue";
import {Link, useForm, usePage} from '@inertiajs/vue3';
import {computed, onMounted, ref, watch} from "vue";
import PrimaryButton from "@/Components/PrimaryButton.vue";
import InputError from "@/Components/InputError.vue";
import TextInput from "@/Components/TextInput.vue";
import InputLabel from "@/Components/InputLabel.vue";
import {usePermission} from "@/Composables/usePermission.js";
import draggable from 'vuedraggable/src/vuedraggable'
import Multiselect from 'vue-multiselect'
import Checkbox from "@/Components/Checkbox.vue";
import moment from "moment";
import VideoRecorder from "@/Pages/Front/VideoRecorder.vue";
import AudioRecorderNew from "@/Pages/Front/AudioRecorderNew.vue";

const props = defineProps({
    project: Object,
    professionCv: Object,
    agreements: Array,
    levelEducations: Array,
    langLevels: Array,
});
const optionsPositions = ref([]);
const formStep = ref(1);
const isReadyToSubmit = ref(true);
const generateCvLoading = ref(false);
const captchaText = ref('');
const coloredCaptcha = ref([]);
const skillsOptions = ref([]);
const uploaderKey = ref(0);
const uploadPhoto = ref(null);
const uploadCv = ref(null);
const uploadFiles = ref(null);
const {hasRole} = usePermission();

const templatesCvsList = [
    {id: 1, img: '/images/cv/1.jpg'},
    {id: 2, img: '/images/cv/2.jpg'},
    {id: 3, img: '/images/cv/3.jpg'},
    {id: 8, img: '/images/cv/8.jpg'},
    {id: 13, img: '/images/cv/13.jpg'},
    {id: 15, img: '/images/cv/15.jpg'},
    {id: 18, img: '/images/cv/18.jpg'},
    {id: 19, img: '/images/cv/19.jpg'},
    {id: 22, img: '/images/cv/22.jpg'},
    {id: 23, img: '/images/cv/23.jpg'}
];
const sortLangs = computed(() => {
    const excludedLangs = ['am', 'ps', 'bn', 'dz', 'zh', 'ka', 'ja', 'km', 'ko', 'dv', 'th'];
    return usePage().props.languages
        .filter(lang => lang?.value && !excludedLangs.includes(lang.value))
        .sort((a, b) => a.label.localeCompare(b.label));
})

const user = computed(() => usePage().props.auth.user);
const lang = computed(() => usePage().props.language);
const monthYearFormat = (date) => {
    const month = String(date.getMonth() + 1).padStart(2, "0");
    const year = date.getFullYear();
    return `${month}.${year}`;
};

const flow = ref(['month', 'year']);
const isUploadDisabled = ref(false);

onMounted(() => {
    loadCaptcha();
});
const dateFormatter = (date) => {
    if (!date) return '';
    return date.toISOString().split('T')[0]; // Format: yyyy-mm-dd
}

// Funkcja formatująca pozostały czas w formacie mm:ss
const formatTime = (seconds) => {
    const minutes = Math.floor(seconds / 60);
    const remainingSeconds = seconds % 60;
    return `${minutes.toString().padStart(2, '0')}:${remainingSeconds.toString().padStart(2, '0')}`;
};
const adjustMonth = (date) => {
    if (!date) return null;

    // Zmniejszamy miesiąc o 1 (miesiące w JavaScript są 0-indexowane)
    const adjustedDate = new Date(date.year, date.month - 1); // Odczytujemy jako 0-indexowane
    adjustedDate.setMonth(adjustedDate.getMonth() - 1); // Cofamy o miesiąc

    return {
        year: adjustedDate.getFullYear(),
        month: adjustedDate.getMonth() + 1, // Przekształcamy do 1-indexowanego
    };
};

const form = useForm({
    name: (user.value && hasRole('worker')) ? user.value.name : '',
    surname: (user.value && user.value.worker_detail && hasRole('worker')) ? user.value.worker_detail?.surname : '',
    phone: (user.value && user.value.worker_detail && hasRole('worker')) ? user.value.worker_detail?.contact_phone : '',
    email: (user.value && hasRole('worker')) ? user.value.email : '',
    files: [],
    captcha: '',
    templateCv: 1,
    cv: '',
    agreements: [],
    step: formStep.value,
    birthday: (user.value && hasRole('worker')) ? (props.project.cv_classics?.length ? props.project.cv_classics[0]?.birthday : '') : '',
    city: (user.value && hasRole('worker')) ? (props.project.cv_classics?.length ? props.project.cv_classics[0]?.city : '') : '',
    postal: (user.value && hasRole('worker')) ? (props.project.cv_classics?.length ? props.project.cv_classics[0]?.postal : '') : '',
    photo: (user.value && hasRole('worker'))
        ? (props.project.cv_classics?.length && props.project.cv_classics[0]?.media)
            ? props.project.cv_classics[0].media.map(el => ({
                source: el.original_url,
                options: {
                    type: 'local',
                    metadata: {
                        poster: el.preview_url
                    }
                }
            }))
            : []
        : [],
    cvFile: [],
    cvLang: usePage().props.languages && usePage().props.languages.filter(el => el.value == usePage().props.language),
    cvStandardType: (user.value && hasRole('worker')) ? (props.project.cv_classics?.length ? props.project.cv_classics[0]?.cvStandardType : 1) : 1,
    experiences: (user.value && hasRole('worker')) ? (props.project.cv_classics?.length ? props.project.cv_classics[0]?.experiences.map(exp => ({
        ...exp,
        start: adjustMonth(exp.start),
        end: adjustMonth(exp.end),
    })) : []) : [],
    educations: (user.value && hasRole('worker')) ? (props.project.cv_classics?.length ? props.project.cv_classics[0]?.educations : []) : [],
    courses: (user.value && hasRole('worker')) ? (props.project.cv_classics?.length ? props.project.cv_classics[0]?.courses.map(course => ({
        ...course,
        date: adjustMonth(course.date),
    })) : []) : [],
    langs: (user.value && hasRole('worker')) ? (props.project.cv_classics?.length ? props.project.cv_classics[0]?.langs : []) : [],
    skills: (user.value && hasRole('worker')) ? (props.project.cv_classics?.length ? props.project.cv_classics[0]?.skills : []) : [],
    position: (user.value && hasRole('worker')) ? (props.project.cv_classics?.length ? props.project.cv_classics[0]?.position : '') : '',
    cv_upload_id: '',
    isSelected: false
});

const pond = ref(null);

let serverMessage = ref(null);

const addExperience = () => {
    form.experiences.push({
        position: '',
        employer: '',
        start: '',
        end: '',
        isCurrent: false,
        city: '',
    });
}

const addEducation = () => {
    form.educations.push({
        school: '',
        level: '',
        specialization: '',
        finish: '',
        city: '',
    });
}

const addCourse = () => {
    form.courses.push({
        name: '',
        organizator: '',
        date: '',
    });
}

const addLang = () => {
    form.langs.push({
        name: '',
        level: '',
    });
}
const removeElement = (index, array) => {
    array.splice(index, 1);
}
const submit = () => {
    form.transform((data) => ({
        ...data,
        experiences: (data.experiences || []).map(exp => ({
            ...exp,
            start: normalizeDate(exp.start),
            end: normalizeDate(exp.end)
        })),
        courses: (data.courses || []).map(course => ({
            ...course,
            date: normalizeDate(course.date)
        })),
    })).post(route('front.aplicationNoLogin.store', props.project), {
        errorBag: 'AplicationNonLogin',
        preserveScroll: true,
        onSuccess: () => {
            form.reset();
        },
    });
}

const loadCaptcha = async () => {
    axios.get('/generateCaptcha')
        .then(response => {
            captchaText.value = response.data.captchaText;
            coloredCaptcha.value = colorizeCaptcha(captchaText.value);
        })
        .catch(error => {
            console.error('Błąd przy ładowaniu CAPTCHA', error);
        });
};

const addSkill = (newTag) => {
    const tag = {
        name: newTag,
        code: newTag.substring(0, 2) + Math.floor((Math.random() * 10000000))
    }
    skillsOptions.value.push(tag)
    form.skills.push(tag)
}
const reloadCaptcha = () => {
    loadCaptcha();
};

const copyCaptcha = () => {
    if (!captchaText.value) return;
    navigator.clipboard.writeText(captchaText.value).then(() => {
        alert(__('translate.copied'));
    }).catch(err => {
        console.error('Błąd podczas kopiowania: ', err);
    });
};
const randomColor = () => {
    const letters = '0123456789ABCDEF';
    let color = '#';
    for (let i = 0; i < 6; i++) {
        color += letters[Math.floor(Math.random() * 16)];
    }
    return color;
};

const colorizeCaptcha = (captcha) => {
    return captcha.split('').map(letter => {
        return {
            letter: letter,
            color: randomColor(),
        };
    });
};


const nextStep = () => {
    form.post(route('front.projects.next.step', props.project), {
        errorBag: 'AplicationNonLogin',
        preserveScroll: true,
        onSuccess: async () => {
            formStep.value++;
            form.clearErrors();
            if (user.value && hasRole('worker') && (form.cv == 1 && form.cvStandardType == 2) && formStep.value == 2) {
                const response = await axios.get(route('front.getChildsCategoryWitoutDetail'));
                optionsPositions.value = response.data;
            }
        },
    });
}

const normalizeDate = (dateObj) => {
    if (!dateObj) return null;
    const m = moment({year: dateObj.year, month: dateObj.month});
    return {
        year: m.year(),
        month: m.month() + 1
    };
};

const generatePdf = (templateId) => {
    generateCvLoading.value = true;
    const transformedForm = {
        ...form,
        experiences: (form.experiences || []).map(exp => ({
            ...exp,
            start: normalizeDate(exp.start),
            end: normalizeDate(exp.end)
        })),

        courses: (form.courses || []).map(course => ({
            ...course,
            date: normalizeDate(course.date)
        }))
    };


    axios.post(route("front.projects.generate.pdf", templateId), transformedForm)
        .then(response => {
            generateCvLoading.value = false;
            if (response.data.url) {
                const pdfWindow = window.open(response.data.url, '_blank');
                if (response.data.deleteUrl) {
                    setTimeout(() => {
                        axios.post(route('front.projects.deletePdf'), {file: response.data.deleteUrl})
                            .catch(error => {
                                console.error('Błąd przy usuwaniu pliku', error);
                            });
                    }, 3000);
                }
            } else {
                console.error('Nie otrzymano poprawnego URL PDF');
            }
        })
        .catch(error => {
            console.error('Błąd przy ładowaniu PDF', error);
            generateCvLoading.value = false;
        });
};

const prevStep = () => {
    formStep.value--;
    form.files = [];
    form.clearErrors();
    // router.reload({ only: ["langLevels"] });
    // form.experiences = [];
    // form.educations = [];
    // form.courses = [];
    // form.langs = [];
}


watch(formStep, (newStep) => {
    form.step = newStep;
});

watch(() => form.cvStandardType, async (type) => {
    form.clearErrors();
    if (type == 2) {
        try {
            const response = await axios.get(route('front.getChildsCategoryWitoutDetail'));
            optionsPositions.value = response.data; // Zapisz dane do optionsPositions
        } catch (error) {
            console.error('Błąd podczas ładowania danych:', error.response ? error.response.data : error.message);
            form.errors = error.response ? error.response.data : 'Wystąpił problem z zapytaniem';
        }
    }
});
const handleIsCurrentChange = (index) => {
    if (form.experiences[index].isCurrent) {
        form.experiences[index].end = '';
    }
}

const removeFile = async (source, load) => {
    await axios.post(route('temporary.delete.poster'), {'source': source});
    load();
}

// Funkcje do obsługi nagrywania wideo
</script>
<template>
    <FrontLayout :title="__('translate.project')">
        <div class="py-12 bg-gray-50/50 dark:bg-gray-900/50 min-h-screen">

            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white dark:bg-gray-800 shadow-xl sm:rounded-lg p-4">
                    <!-- Project Info Summary -->
                    <div
                        class="mb-8 p-6 bg-gradient-to-br from-gray-50 to-white dark:from-gray-800/50 dark:to-gray-800 border border-gray-100 dark:border-gray-700 rounded-3xl shadow-sm">
                        <div
                            class="flex flex-wrap items-center justify-between mb-6 gap-4 border-b border-gray-100 dark:border-gray-700 pb-4">
                            <div class="flex items-center gap-3">
                                <div class="p-2.5 bg-blue-50 dark:bg-blue-900/30 rounded-2xl">
                                    <svg class="w-6 h-6 text-blue-600 dark:text-blue-400"
                                         xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                         stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                              d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                                    </svg>
                                </div>
                                <div>
                                    <h1 class="text-xl font-black text-gray-900 dark:text-white uppercase tracking-tight">
                                        {{ project.title[usePage().props.language] }}
                                    </h1>
                                    <p class="text-sm text-gray-500 dark:text-gray-400 font-medium">
                                        {{ project.category.allTranslations.title[usePage().props.language] }}
                                    </p>
                                </div>
                            </div>
                            <div class="flex gap-2">
                                <Link :href="route('front.projects')"
                                      class="inline-flex items-center px-4 py-2 bg-white dark:bg-gray-800 border border-gray-200 dark:border-gray-700 rounded-xl text-xs font-bold text-gray-600 dark:text-gray-400 uppercase tracking-widest hover:bg-gray-50 dark:hover:bg-gray-700 transition shadow-sm">
                                    {{ __('translate.backToList') }}
                                </Link>
                                <Link :href="route('front.projects.single',project)"
                                      class="inline-flex items-center px-4 py-2 bg-white dark:bg-gray-800 border border-gray-200 dark:border-gray-700 rounded-xl text-xs font-bold text-gray-600 dark:text-gray-400 uppercase tracking-widest hover:bg-gray-50 dark:hover:bg-gray-700 transition shadow-sm">
                                    {{ __('translate.backToProject') }}
                                </Link>
                            </div>
                        </div>

                        <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
                            <div class="space-y-1">
                                <dt class="text-[10px] font-black text-blue-600 dark:text-blue-400 uppercase tracking-[0.15em] opacity-80">
                                    ID Projektu
                                </dt>
                                <dd class="text-sm font-bold text-gray-900 dark:text-white flex items-center gap-2">
                                    <span class="p-1 bg-gray-100 dark:bg-gray-700 rounded-md px-2 leading-none text-xs">{{
                                            project.id
                                        }}</span>
                                </dd>
                            </div>
                            <div class="space-y-1">
                                <dt class="text-[10px] font-black text-blue-600 dark:text-blue-400 uppercase tracking-[0.15em] opacity-80">
                                    {{ __('translate.aplicationsType') }}
                                </dt>
                                <dd class="text-sm font-bold text-gray-900 dark:text-white truncate">
                                    {{
                                        user && hasRole('worker') ? __('translate.aplicationsWorker') : __('translate.applyWithoutLogin')
                                    }}
                                </dd>
                            </div>
                            <div class="space-y-1">
                                <dt class="text-[10px] font-black text-blue-600 dark:text-blue-400 uppercase tracking-[0.15em] opacity-80">
                                    Wymagane CV
                                </dt>
                                <dd class="text-sm font-bold text-gray-900 dark:text-white capitalize">
                                    {{
                                        form.cv == 1 ? __('translate.cv_classic') : (form.cv == 2 ? __('translate.cv_video') : (form.cv == 3 ? __('translate.cv_audio') : __('translate.cv')))
                                    }}
                                </dd>
                            </div>
                            <div class="space-y-1" v-if="project.category.parent">
                                <dt class="text-[10px] font-black text-blue-600 dark:text-blue-400 uppercase tracking-[0.15em] opacity-80">
                                    Główna kategoria
                                </dt>
                                <dd class="text-sm font-bold text-gray-900 dark:text-white truncate">
                                    {{ project.category.parent.title }}
                                </dd>
                            </div>
                        </div>
                    </div>
                    <form @submit.prevent="submit">
                        <div v-if="formStep == 1" class="space-y-8 animate-fade-in">
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                                <div class="group">
                                    <InputLabel for="name" :value="__('translate.nameUser')"
                                                class="mb-2 font-bold text-gray-700 dark:text-gray-300 group-focus-within:text-blue-600 transition-colors"/>
                                    <TextInput
                                        id="name"
                                        v-model="form.name"
                                        autofocus
                                        class="mt-1 block w-full !rounded-xl !border-gray-200 dark:!border-gray-700 focus:!ring-blue-500/20 focus:!border-blue-500 transition-all bg-gray-50 dark:bg-gray-800/30"
                                        type="text"
                                        placeholder="Wpisz imię..."
                                    />
                                    <InputError :message="form.errors.name" class="mt-2 text-xs"/>
                                </div>
                                <div class="group">
                                    <InputLabel for="surname" :value="__('translate.surname')"
                                                class="mb-2 font-bold text-gray-700 dark:text-gray-300 group-focus-within:text-blue-600 transition-colors"/>
                                    <TextInput
                                        id="surname"
                                        v-model="form.surname"
                                        class="mt-1 block w-full !rounded-xl !border-gray-200 dark:!border-gray-700 focus:!ring-blue-500/20 focus:!border-blue-500 transition-all bg-gray-50 dark:bg-gray-800/30"
                                        type="text"
                                        placeholder="Wpisz nazwisko..."
                                    />
                                    <InputError :message="form.errors.surname" class="mt-2 text-xs"/>
                                </div>
                                <div class="group">
                                    <InputLabel for="phone" :value="__('translate.phone')"
                                                class="mb-2 font-bold text-gray-700 dark:text-gray-300 group-focus-within:text-blue-600 transition-colors"/>
                                    <TextInput
                                        id="phone"
                                        v-model="form.phone"
                                        class="mt-1 block w-full !rounded-xl !border-gray-200 dark:!border-gray-700 focus:!ring-blue-500/20 focus:!border-blue-500 transition-all bg-gray-50 dark:bg-gray-800/30"
                                        type="text"
                                        placeholder="+48..."
                                    />
                                    <InputError :message="form.errors.phone" class="mt-2 text-xs"/>
                                </div>
                                <div class="group">
                                    <InputLabel for="email" :value="__('translate.email')"
                                                class="mb-2 font-bold text-gray-700 dark:text-gray-300 group-focus-within:text-blue-600 transition-colors"/>
                                    <TextInput
                                        id="email"
                                        v-model="form.email"
                                        class="mt-1 block w-full !rounded-xl !border-gray-200 dark:!border-gray-700 focus:!ring-blue-500/20 focus:!border-blue-500 transition-all bg-gray-50 dark:bg-gray-800/30"
                                        type="email"
                                        placeholder="twoj@email.pl..."
                                    />
                                    <InputError :message="form.errors.email" class="mt-2 text-xs"/>
                                </div>
                            </div>
                            <div class="col-span-2 pt-4">
                                <InputLabel for="title" :value="__('translate.files')"
                                            class="mb-4 font-bold text-gray-700 dark:text-gray-300 uppercase tracking-widest text-xs"/>
                                <div
                                    class="rounded-3xl border-2 border-dashed border-gray-100 dark:border-gray-700 p-2 overflow-hidden hover:border-blue-300 dark:hover:border-blue-900 transition-colors">
                                    <file-pond
                                        name="files"
                                        ref="uploadFiles"
                                        :files="form.files"
                                        :allow-multiple="true"
                                        :max-file-size="'3MB'"
                                        imagePreviewMaxHeight="300"
                                        :max-files="5"
                                        :label-idle="__('translate.label-idle')"
                                        :labelFileProcessing="__('translate.labelFileProcessing')"
                                        :labelInvalidField="__('translate.labelInvalidField')"
                                        :labelFileWaitingForSize="__('translate.labelFileWaitingForSize')"
                                        :labelFileSizeNotAvailable="__('translate.labelFileSizeNotAvailable')"
                                        :labelFileLoading="__('translate.labelFileLoading')"
                                        :labelMaxFileSize="__('translate.labelMaxFileSize')"
                                        :labelMaxFileSizeExceeded="__('translate.labelMaxFileSizeExceeded')"
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
                                        :labelMaxTotalFileSizeExceeded="__('translate.labelMaxTotalFileSizeExceeded')"
                                        :labelMaxTotalFileSize="__('translate.labelMaxTotalFileSize')"
                                        :labelFileTypeNotAllowed="__('translate.labelFileTypeNotAllowed')"
                                        :fileValidateTypeLabelExpectedTypes="__('translate.fileValidateTypeLabelExpectedTypes')"
                                        :accepted-file-types="'application/pdf, application/msword, application/vnd.openxmlformats-officedocument.wordprocessingml.document'"
                                        credits=""
                                        :server="{
                                            url:'',
                                               headers: {
                                            'X-CSRF-TOKEN': usePage().props.csrf_token,
                                                },
                                            process: {
                                                url: '/temporary/upload',
                                                    onload: (response) => {
                                                    form.files.push(response);
                                                    return response;
                                                    },
                                                    onerror: (response) => {
                                                        serverMessage = JSON.parse(response).error.files[0];
                                                    }

                                            },
                                            revert:{
                                                url: '/temporary/delete',
                                                onload: (response) => {
                                                        if (!response) return;
                                                        const fileIndex = form.files.findIndex(el => el === response);
                                                        if (fileIndex !== -1) {
                                                            form.files.splice(fileIndex, 1);
                                                       }
                                                }
                                            }
                                            }"
                                    ></file-pond>
                                    <InputError :message="form.errors.files" class="mt-1"/>
                                </div>
                                <div class="col-span-6">
                                    <div class="mt-4" v-if="user && project.cv">
                                        <InputLabel :value="__('translate.cv')"/>
                                        <div v-for="cv in project.cv" class="flex items-center mt-1">
                                            <input
                                                class="border-gray-300 text-blue-work shadow-sm focus:ring-blue-work mr-2"
                                                type="radio" :id="'cv-'+cv.id" v-model="form.cv"
                                                :value="cv.id"/>
                                            <label
                                                :for="'cv-'+cv.id">{{ cv.allTranslations.name[usePage().props.language] }}</label>
                                        </div>
                                        <InputError :message="form.errors.cv" class="mt-2"/>
                                        <button class="text-xs underline mt-1" v-if="form.cv" @click="form.cv=''">
                                            {{ __('translate.cvTypeReset') }}
                                        </button>
                                    </div>
                                </div>
                                <div class="col-span-6 space-y-4 pt-6">
                                    <div class="flex items-center gap-3 mb-2">
                                        <div class="p-1.5 bg-blue-50 dark:bg-blue-900/30 rounded-lg">
                                            <svg class="w-4 h-4 text-blue-600 dark:text-blue-400"
                                                 xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                 stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                      d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                                            </svg>
                                        </div>
                                        <InputLabel for="captcha" :value="__('translate.verification')"
                                                    class="font-bold text-gray-700 dark:text-gray-300 uppercase tracking-widest text-xs"/>
                                    </div>

                                    <div
                                        class="p-6 bg-gray-50 dark:bg-gray-800/50 rounded-3xl border border-gray-100 dark:border-gray-700">
                                        <div class="flex flex-col sm:flex-row items-center gap-6">
                                            <div class="relative group">
                                                <div
                                                    class="absolute -inset-1 bg-gradient-to-r from-blue-500 to-indigo-500 rounded-2xl blur opacity-20 group-hover:opacity-40 transition"></div>
                                                <p class="relative bg-white dark:bg-gray-800 rounded-xl p-3 px-6 text-center shadow-sm border border-gray-100 dark:border-gray-700 flex items-center justify-center min-w-[120px]">
                                                <span
                                                    v-for="(item, index) in coloredCaptcha"
                                                    :key="index"
                                                    :style="{ color: item.color }"
                                                    class="text-xl font-black italic tracking-widest drop-shadow-sm"
                                                >
                                                    {{ item.letter }}
                                                </span>
                                                    <button
                                                        type="button"
                                                        @click="copyCaptcha"
                                                        class="ml-4 p-1.5 text-gray-400 hover:text-blue-500 transition-colors bg-gray-50 dark:bg-gray-700 rounded-lg shadow-sm"
                                                        :title="__('translate.copy')"
                                                    >
                                                        <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 5H6a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2v-1M8 5a2 2 0 002 2h2a2 2 0 002-2M8 5a2 2 0 012-2h2a2 2 0 012 2m0 0h2a2 2 0 012 2v3m2 4H10m0 0l3-3m-3 3l3 3" />
                                                        </svg>
                                                    </button>
                                                </p>
                                            </div>

                                            <div class="flex-1 w-full space-y-2">
                                                <div class="relative">
                                                    <TextInput
                                                        v-model="form.captcha"
                                                        id="captcha"
                                                        maxlength="6"
                                                        class="block w-full !rounded-2xl !pl-4 focus:!ring-blue-500/20 focus:!border-blue-500"
                                                        placeholder="Przepisz kod..."
                                                    />
                                                    <button
                                                        type="button"
                                                        @click="reloadCaptcha"
                                                        class="absolute right-3 top-1/2 -translate-y-1/2 p-2 text-gray-400 hover:text-blue-500 transition-colors"
                                                        :title="__('translate.refreshCapcha')"
                                                    >
                                                        <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg"
                                                             fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                  stroke-width="2"
                                                                  d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"/>
                                                        </svg>
                                                    </button>
                                                </div>
                                                <p class="text-[10px] text-gray-500 dark:text-gray-400 uppercase tracking-tight font-medium pl-1">
                                                    Wprowadź kod z obrazka obok
                                                </p>
                                            </div>
                                        </div>
                                        <InputError :message="form.errors.captcha" class="mt-3 text-xs ml-1"/>
                                    </div>
                                </div>
                                <div class="col-span-6 pt-8">
                                    <div
                                        class="p-6 bg-gradient-to-r from-gray-50/80 to-blue-50/30 dark:from-gray-800/50 dark:to-blue-900/10 rounded-[2rem] border border-gray-100 dark:border-gray-700/50">
                                        <InputLabel for="agreements" :value="__('translate.agreements')"
                                                    class="mb-6 font-black text-gray-800 dark:text-gray-200 uppercase tracking-[0.2em] text-[10px] flex items-center gap-2">
                                            <span class="w-1.5 h-1.5 bg-blue-500 rounded-full animate-pulse"></span>
                                            {{ __('translate.agreements') }}
                                        </InputLabel>

                                        <div class="grid gap-3">
                                            <div v-for="agreement in agreements" :key="agreement.id"
                                                 class="group relative flex items-start gap-4 p-4 bg-white dark:bg-gray-800 rounded-2xl border border-gray-100 dark:border-gray-700 hover:border-blue-200 dark:hover:border-blue-900/50 transition-all shadow-sm">
                                                <div class="flex items-center h-6">
                                                    <input
                                                        class="w-5 h-5 rounded-md border-gray-200 text-blue-600 shadow-sm focus:ring-blue-500 focus:ring-offset-0 transition-all"
                                                        type="checkbox" :id="agreement.id" v-model="form.agreements"
                                                        :value="agreement.id" name="agreement">
                                                </div>
                                                <label :for="agreement.id"
                                                       class="text-sm font-medium text-gray-600 dark:text-gray-400 cursor-pointer group-hover:text-gray-900 dark:group-hover:text-gray-200 transition-colors pt-0.5 leading-relaxed">
                                                    {{ agreement.description[usePage().props.language] }}
                                                </label>
                                            </div>
                                        </div>
                                        <InputError :message="form.errors.agreements" class="mt-4 text-xs font-bold"/>
                                    </div>
                                </div>

                                <div
                                    class="flex flex-col items-center justify-center pt-10 pb-6 border-t border-gray-100 dark:border-gray-700 mt-8">
                                    <InputError :message="form.errors.application"
                                                class="mb-6 text-center text-sm font-bold bg-red-50 dark:bg-red-900/20 text-red-600 dark:text-red-400 px-6 py-2 rounded-full"/>

                                    <!-- Przycisk Aplikuj widoczny gdy NIE wybrano żadnego typu CV specjalnego (Klasyczne/Video/Audio) -->
                                    <PrimaryButton v-if="!form.cv && formStep == 1"
                                                   class="w-full sm:w-[250px] !py-4 !rounded-2xl !bg-blue-600 hover:!bg-blue-700 !text-sm font-black !uppercase !tracking-[0.1em] shadow-lg shadow-blue-500/20 flex justify-center items-center gap-3 transition-all transform active:scale-[0.98]"
                                                   :class="{ 'opacity-25 scale-95': (form.processing || isUploadDisabled) }"
                                                   :disabled="form.processing || !isReadyToSubmit || isUploadDisabled"
                                    >
                                        <span>{{ __('translate.apply') }}</span>
                                        <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" fill="none"
                                             viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                  d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                                        </svg>
                                    </PrimaryButton>

                                    <!-- Przycisk Dalej widoczny gdy WYBRANO typ CV specjalny w kroku 1 -->
                                    <PrimaryButton
                                        type="button"
                                        @click="nextStep"
                                        v-if="form.cv && formStep == 1"
                                        class="w-full sm:w-[300px] !py-4 !rounded-2xl !bg-blue-600 hover:!bg-blue-700 !text-sm font-black !uppercase !tracking-widest shadow-lg shadow-blue-500/20 flex justify-center items-center gap-3 transition-all transform active:scale-95"
                                        :disabled="form.processing"
                                    >
                                        <span v-if="form.cv == 1">{{ __('translate.generateCv') }}</span>
                                        <span v-else-if="form.cv == 2">{{ __('translate.generateCvVideo') }}</span>
                                        <span v-else-if="form.cv == 3">{{ __('translate.generateCvAudio') }}</span>
                                        <span v-else-if="form.cv == 4">{{ __('translate.testRecruitment') }}</span>
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                  d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                                        </svg>
                                    </PrimaryButton>
                                </div>
                            </div>
                        </div>
                            <div v-if="formStep == 2 && form.cv == 1" class="animate-fade-in space-y-8">
                                <div
                                    class="p-6 bg-gray-50/50 dark:bg-gray-800/30 rounded-3xl border border-gray-100 dark:border-gray-700">
                                    <InputLabel value="Jak chcesz dostarczyć CV?"
                                                class="mb-6 font-black text-gray-800 dark:text-gray-200 uppercase tracking-[0.2em] text-[10px] flex items-center gap-2">
                                        <span class="w-1.5 h-1.5 bg-blue-500 rounded-full animate-pulse"></span>
                                        Wybierz metodę
                                    </InputLabel>

                                    <ul class="grid w-full gap-6 md:grid-cols-2">
                                        <li>
                                            <input checked name="type" v-model="form.cvStandardType" type="radio"
                                                   id="firm" value="1" class="hidden peer"/>
                                            <label for="firm"
                                                   class="inline-flex items-center justify-between w-full p-6 text-gray-500 bg-white border-2 border-gray-100 rounded-2xl cursor-pointer dark:hover:text-gray-300 dark:border-gray-700 dark:peer-checked:text-blue-400 peer-checked:border-blue-500 peer-checked:bg-blue-50/30 dark:peer-checked:bg-blue-900/10 peer-checked:text-blue-600 hover:bg-gray-50 dark:text-gray-400 dark:bg-gray-800 dark:hover:bg-gray-700 transition-all duration-300 shadow-sm hover:shadow-md group">
                                                <div class="flex items-center gap-4">
                                                    <div
                                                        class="p-3 bg-gray-50 dark:bg-gray-700 rounded-xl group-peer-checked:bg-blue-100 dark:group-peer-checked:bg-blue-900/50 transition-colors">
                                                        <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg"
                                                             fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                  stroke-width="2"
                                                                  d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                                                        </svg>
                                                    </div>
                                                    <div>
                                                        <div class="w-full text-lg font-black uppercase tracking-tight">
                                                            Wgraj plik
                                                        </div>
                                                        <div
                                                            class="w-full text-xs font-medium opacity-60 uppercase tracking-widest">
                                                            PDF, DOC, DOCX
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="opacity-0 peer-checked:opacity-100 transition-opacity">
                                                    <div
                                                        class="w-6 h-6 bg-blue-600 rounded-full flex items-center justify-center shadow-lg shadow-blue-500/40">
                                                        <svg class="w-4 h-4 text-white" fill="none"
                                                             stroke="currentColor" viewBox="0 0 24 24">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                  stroke-width="3" d="M5 13l4 4L19 7"/>
                                                        </svg>
                                                    </div>
                                                </div>
                                            </label>
                                        </li>
                                        <li>
                                            <input name="type" v-model="form.cvStandardType" type="radio" id="client"
                                                   value="2" class="hidden peer"/>
                                            <label for="client"
                                                   class="inline-flex items-center justify-between w-full p-6 text-gray-500 bg-white border-2 border-gray-100 rounded-2xl cursor-pointer dark:hover:text-gray-300 dark:border-gray-700 dark:peer-checked:text-blue-400 peer-checked:border-blue-500 peer-checked:bg-blue-50/30 dark:peer-checked:bg-blue-900/10 peer-checked:text-blue-600 hover:bg-gray-50 dark:text-gray-400 dark:bg-gray-800 dark:hover:bg-gray-700 transition-all duration-300 shadow-sm hover:shadow-md group">
                                                <div class="flex items-center gap-4">
                                                    <div
                                                        class="p-3 bg-gray-50 dark:bg-gray-700 rounded-xl group-peer-checked:bg-blue-100 dark:group-peer-checked:bg-blue-900/50 transition-colors">
                                                        <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg"
                                                             fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                  stroke-width="2"
                                                                  d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/>
                                                        </svg>
                                                    </div>
                                                    <div>
                                                        <div class="w-full text-lg font-black uppercase tracking-tight">
                                                            Kreator CV
                                                        </div>
                                                        <div
                                                            class="w-full text-xs font-medium opacity-60 uppercase tracking-widest">
                                                            Wypełnij formularz
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="opacity-0 peer-checked:opacity-100 transition-opacity">
                                                    <div
                                                        class="w-6 h-6 bg-blue-600 rounded-full flex items-center justify-center shadow-lg shadow-blue-500/40">
                                                        <svg class="w-4 h-4 text-white" fill="none"
                                                             stroke="currentColor" viewBox="0 0 24 24">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                  stroke-width="3" d="M5 13l4 4L19 7"/>
                                                        </svg>
                                                    </div>
                                                </div>
                                            </label>
                                        </li>
                                    </ul>
                                    <InputError :message="form.errors.cvStandardType"
                                                class="mt-4 text-xs font-bold text-center"/>
                                </div>

                                <div v-if="professionCv"
                                     class="p-6 bg-blue-50/30 dark:bg-blue-900/10 rounded-3xl border border-blue-100/50 dark:border-blue-800/30">
                                    <InputLabel for="cvcvFile" :value="__('translate.fileCv')"
                                                class="mb-4 font-black text-blue-900 dark:text-blue-400 uppercase tracking-widest text-[10px]"/>
                                    <div class="relative group">
                                        <div
                                            class="absolute -inset-0.5 bg-gradient-to-r from-blue-500 to-indigo-500 rounded-[1.5rem] blur opacity-10 group-hover:opacity-20 transition duration-500"></div>
                                        <label
                                            :class="[
                                                'relative flex items-center gap-6 cursor-pointer bg-white dark:bg-gray-800 border-2 rounded-[1.5rem] p-5 transition-all duration-300 select-none shadow-sm',
                                                form.isSelected ? 'border-blue-500 shadow-blue-100 dark:shadow-none' : 'border-white dark:border-gray-700 hover:border-blue-200 dark:hover:border-blue-900'
                                            ]"
                                        >
                                            <input
                                                type="checkbox"
                                                v-model="form.isSelected"
                                                class="hidden"
                                                :true-value="professionCv.id"
                                                :false-value="null"
                                            />

                                            <div
                                                class="flex items-center justify-center w-16 h-16 bg-red-50 dark:bg-red-900/20 text-red-600 dark:text-red-400 rounded-2xl group-hover:scale-110 transition-transform duration-500">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none"
                                                     viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                          stroke-width="2"
                                                          d="M7 21h10a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                                                </svg>
                                            </div>

                                            <div class="flex-1">
                                                <span
                                                    class="block text-lg font-black text-gray-900 dark:text-white uppercase tracking-tight">{{
                                                        __('translate.yourCv')
                                                    }}</span>
                                                <div class="flex items-center gap-3 mt-1">
                                                    <span
                                                        class="text-xs font-bold text-gray-400 uppercase tracking-tighter">{{
                                                            moment(professionCv.created_at).format('DD.MM.YYYY HH:mm')
                                                        }}</span>
                                                    <span class="w-1 h-1 bg-gray-300 rounded-full"></span>
                                                    <a
                                                        :href="professionCv.pathCv"
                                                        target="_blank"
                                                        download
                                                        class="text-xs font-black text-blue-600 dark:text-blue-400 uppercase tracking-widest hover:underline decoration-2 underline-offset-4"
                                                        @click.stop
                                                    >
                                                        {{ __('translate.getPdf') }}
                                                    </a>
                                                </div>
                                            </div>

                                            <div
                                                class="w-8 h-8 rounded-full border-2 transition-all flex items-center justify-center"
                                                :class="form.isSelected ? 'bg-blue-600 border-blue-600 scale-110 shadow-lg shadow-blue-500/40' : 'bg-gray-50 border-gray-100 dark:bg-gray-700 dark:border-gray-600'">
                                                <svg v-if="form.isSelected" class="w-5 h-5 text-white" fill="none"
                                                     stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                          stroke-width="3" d="M5 13l4 4L19 7"/>
                                                </svg>
                                            </div>
                                        </label>
                                    </div>
                                </div>

                                <div v-if="form.cvStandardType == 1 && !form.isSelected" class="animate-slide-up">
                                    <div
                                        class="p-6 bg-gray-50/50 dark:bg-gray-800/30 rounded-3xl border border-gray-100 dark:border-gray-700">
                                        <InputLabel for="cvcvFile" :value="__('translate.fileCv')"
                                                    class="mb-4 font-black text-gray-800 dark:text-gray-200 uppercase tracking-widest text-[10px]"/>
                                        <div
                                            class="rounded-2xl overflow-hidden border-2 border-dashed border-gray-200 dark:border-gray-700 p-1">
                                            <file-pond
                                                name="cvFile"
                                                ref="uploadCv"
                                                :files="form.cvFile"
                                                :allow-multiple="false"
                                                :max-file-size="'5MB'"
                                                imagePreviewMaxHeight="300"
                                                :label-idle="__('translate.label-idle')"
                                                :labelMaxFileSize="__('translate.labelMaxFileSize')"
                                                :labelMaxFileSizeExceeded="__('translate.labelMaxFileSizeExceeded')"
                                                :labelFileProcessing="__('translate.labelFileProcessing')"
                                                :labelInvalidField="__('translate.labelInvalidField')"
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
                                                :accepted-file-types="'application/pdf, application/msword, application/vnd.openxmlformats-officedocument.wordprocessingml.document'"
                                                credits=""
                                                :server="{
                                                url:'',
                                                   headers: {
                                                'X-CSRF-TOKEN': usePage().props.csrf_token,
                                                    },
                                                process: {
                                                    url: '/temporary/upload',
                                                        onload: (response) => {
                                                        form.cvFile.push(response);
                                                        return response;
                                                        },
                                                        onerror: (response) => {
                                                            serverMessage = JSON.parse(response).error.cvFile[0];
                                                        }

                                                },
                                                revert:{
                                                    url: '/temporary/delete',
                                                    onload: (response) => {
                                                            if (!response) return;
                                                            const fileIndex = form.files.findIndex(el => el === response);
                                                            if (fileIndex !== -1) {
                                                                form.files.splice(fileIndex, 1);
                                                           }
                                                    }
                                                }
                                                }"
                                            ></file-pond>
                                        </div>
                                        <InputError :message="form.errors.cvFile" class="mt-4 text-xs font-bold"/>
                                        <div v-for="(error, cvFile) in form.errors" :key="cvFile">
                                            <span class="text-sm text-red-600 font-bold"
                                                  v-if="cvFile.startsWith('cvFile.')">{{ error }}</span>
                                        </div>
                                    </div>
                                </div>
                                <div v-else-if="form.cvStandardType == 2 && !form.isSelected"
                                     class="animate-slide-up space-y-8">
                                    <div
                                        class="grid grid-cols-1 md:grid-cols-4 gap-6 p-6 bg-gray-50/50 dark:bg-gray-800/30 rounded-3xl border border-gray-100 dark:border-gray-700">
                                        <div class="col-span-full mb-2">
                                            <h3 class="text-lg font-black text-gray-900 dark:text-white uppercase tracking-tight flex items-center gap-2">
                                                <span class="w-1.5 h-1.5 bg-blue-500 rounded-full"></span>
                                                Informacje o Tobie
                                            </h3>
                                        </div>
                                        <div class="md:col-span-1 space-y-2">
                                            <InputLabel for="birthday" :value="__('translate.birthdayDate')"
                                                        class="font-bold text-xs text-gray-500 uppercase tracking-widest ml-1"/>
                                            <VueDatePicker model-type="dd-MM-yyyy" format="dd-MM-yyyy"
                                                           class="!rounded-xl shadow-sm overflow-hidden"
                                                           :enable-time-picker="false" v-model="form.birthday"
                                                           :locale="lang" auto-apply id="birthday"/>
                                            <InputError :message="form.errors.birthday"
                                                        class="mt-1 text-[10px] font-bold"/>
                                        </div>
                                        <div class="md:col-span-1 space-y-2">
                                            <InputLabel for="city" :value="__('translate.City')"
                                                        class="font-bold text-xs text-gray-500 uppercase tracking-widest ml-1"/>
                                            <TextInput
                                                id="city"
                                                v-model="form.city"
                                                class="mt-1 block w-full !rounded-xl !border-gray-200 dark:!border-gray-700 bg-white dark:bg-gray-800"
                                                type="text"
                                                placeholder="np. Warszawa"
                                            />
                                            <InputError :message="form.errors.city" class="mt-1 text-[10px] font-bold"/>
                                        </div>
                                        <div class="md:col-span-1 space-y-2">
                                            <InputLabel for="postal" :value="__('translate.Postal')"
                                                        class="font-bold text-xs text-gray-500 uppercase tracking-widest ml-1"/>
                                            <TextInput
                                                id="postal"
                                                v-model="form.postal"
                                                class="mt-1 block w-full !rounded-xl !border-gray-200 dark:!border-gray-700 bg-white dark:bg-gray-800"
                                                type="text"
                                                placeholder="00-000"
                                            />
                                            <InputError :message="form.errors.postal"
                                                        class="mt-1 text-[10px] font-bold"/>
                                        </div>
                                        <div class="md:col-span-1 space-y-2">
                                            <InputLabel for="photo" :value="__('translate.Photo')"
                                                        class="font-bold text-xs text-gray-500 uppercase tracking-widest ml-1"/>
                                            <div
                                                class="rounded-xl overflow-hidden border border-gray-200 dark:border-gray-700 p-1 bg-white dark:bg-gray-800">
                                                <file-pond
                                                    name="photo"
                                                    ref="uploadPhoto"
                                                    :files="form.photo"
                                                    :allow-multiple="false"
                                                    :max-file-size="'2MB'"
                                                    imagePreviewMaxHeight="100"
                                                    filePosterHeight="100"
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
                                                    :accepted-file-types="'image/png, image/jpeg, image/jpg'"
                                                    credits=""
                                                    :server="{
                                                url:'',
                                                   headers: {
                                                'X-CSRF-TOKEN': usePage().props.csrf_token,
                                                    },
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
                                            <InputError :message="form.errors.photo"
                                                        class="mt-1 text-[10px] font-bold"/>
                                        </div>
                                    </div>

                                    <!-- SEKCJA DOŚWIADCZENIA -->
                                    <div class="space-y-6">
                                        <div class="flex items-center justify-between">
                                            <h3 class="text-xl font-black text-gray-900 dark:text-white uppercase tracking-tight flex items-center gap-3">
                                                <div class="p-2 bg-blue-50 dark:bg-blue-900/30 rounded-xl">
                                                    <svg class="w-5 h-5 text-blue-600 dark:text-blue-400" fill="none"
                                                         stroke="currentColor" viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                              stroke-width="2"
                                                              d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                                                    </svg>
                                                </div>
                                                {{ __('translate.experience') }}
                                            </h3>
                                            <div class="flex items-center gap-4">
                                                <span
                                                    class="text-[10px] font-black text-gray-400 uppercase tracking-widest">{{
                                                        __('translate.quantity')
                                                    }}: {{ form.experiences.length }}/5</span>
                                                <button
                                                    type="button"
                                                    @click="addExperience"
                                                    v-if="form.experiences.length < 5"
                                                    class="inline-flex items-center gap-2 px-4 py-2 bg-blue-600 hover:bg-blue-700 text-white rounded-xl font-black text-[10px] uppercase tracking-widest transition-all shadow-md shadow-blue-500/20 active:scale-95"
                                                >
                                                    <svg class="w-3 h-3" fill="none" stroke="currentColor"
                                                         viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                              stroke-width="3" d="M12 4v16m8-8H4"/>
                                                    </svg>
                                                    {{ __('translate.addExperience') }}
                                                </button>
                                            </div>
                                        </div>

                                        <div v-if="form.experiences.length == 5"
                                             class="p-4 bg-red-50 dark:bg-red-900/20 text-red-600 dark:text-red-400 rounded-2xl text-xs font-bold text-center uppercase tracking-widest border border-red-100 dark:border-red-800/30">
                                            {{ __('translate.limitComplete') }}
                                        </div>

                                        <InputError :message="form.errors.experiences" class="text-center font-bold"/>

                                        <draggable :list="form.experiences" ghost-class="opacity-50" handle=".handle"
                                                   item-key="id" class="space-y-4">
                                            <template #item="{ element: experience, index }">
                                                <div
                                                    class="group bg-white dark:bg-gray-800/50 rounded-3xl border border-gray-100 dark:border-gray-700 shadow-sm hover:shadow-md transition-all">
                                                    <div
                                                        class="flex items-center justify-between p-2 border-b border-gray-50 dark:border-gray-700/50">
                                                        <div
                                                            class="handle p-2 cursor-grab active:cursor-grabbing text-gray-300 hover:text-blue-500 transition-colors">
                                                            <svg class="w-5 h-5" fill="none" stroke="currentColor"
                                                                 viewBox="0 0 24 24">
                                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                                      stroke-width="2" d="M4 8h16M4 16h16"/>
                                                            </svg>
                                                        </div>
                                                        <button @click="removeElement(index, form.experiences)"
                                                                class="p-2 text-gray-300 hover:text-red-500 transition-colors">
                                                            <svg class="w-5 h-5" fill="none" stroke="currentColor"
                                                                 viewBox="0 0 24 24">
                                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                                      stroke-width="2"
                                                                      d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/>
                                                            </svg>
                                                        </button>
                                                    </div>

                                                    <div
                                                        class="p-6 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                                                        <div v-if="optionsPositions" class="space-y-2">
                                                            <InputLabel :value="__('translate.position')"
                                                                        class="font-bold text-[10px] text-gray-400 uppercase tracking-widest ml-1"/>
                                                            <multiselect
                                                                v-model="experience.position"
                                                                :options="optionsPositions"
                                                                track-by="value"
                                                                label="name"
                                                                :placeholder="__('translate.placeholder')"
                                                                class="custom-multiselect"
                                                            />
                                                            <InputError
                                                                :message="form.errors[`experiences.${index}.position`]"
                                                                class="text-[10px] font-bold"/>
                                                        </div>

                                                        <div class="space-y-2">
                                                            <InputLabel :value="__('translate.employer')"
                                                                        class="font-bold text-[10px] text-gray-400 uppercase tracking-widest ml-1"/>
                                                            <TextInput
                                                                v-model="experience.employer"
                                                                class="w-full !rounded-xl !border-gray-100 dark:!border-gray-700 bg-gray-50/50 dark:bg-gray-800"
                                                                type="text"
                                                                :placeholder="__('translate.employer')"
                                                            />
                                                            <InputError
                                                                :message="form.errors[`experiences.${index}.employer`]"
                                                                class="text-[10px] font-bold"/>
                                                        </div>

                                                        <div class="space-y-2">
                                                            <InputLabel :value="__('translate.experienceStart')"
                                                                        class="font-bold text-[10px] text-gray-400 uppercase tracking-widest ml-1"/>
                                                            <VueDatePicker v-model="experience.start" month-picker
                                                                           :format="monthYearFormat" auto-apply
                                                                           class="!rounded-xl"/>
                                                            <InputError
                                                                :message="form.errors[`experiences.${index}.start`]"
                                                                class="text-[10px] font-bold"/>
                                                        </div>

                                                        <div class="space-y-2">
                                                            <div class="flex items-center justify-between pr-1">
                                                                <InputLabel :value="__('translate.experienceEnd')"
                                                                            class="font-bold text-[10px] text-gray-400 uppercase tracking-widest ml-1"/>
                                                                <label class="flex items-center gap-1.5 cursor-pointer">
                                                                    <Checkbox v-model:checked="experience.isCurrent"
                                                                              @change="handleIsCurrentChange(index)"
                                                                              class="w-3 h-3 rounded text-blue-600"/>
                                                                    <span
                                                                        class="text-[10px] font-black uppercase text-gray-400">{{
                                                                            __('translate.currently')
                                                                        }}</span>
                                                                </label>
                                                            </div>
                                                            <VueDatePicker v-model="experience.end" month-picker
                                                                           :format="monthYearFormat" auto-apply
                                                                           :disabled="experience.isCurrent"
                                                                           :class="{'opacity-30': experience.isCurrent}"/>
                                                            <InputError
                                                                :message="form.errors[`experiences.${index}.end`]"
                                                                class="text-[10px] font-bold"/>
                                                        </div>

                                                        <div class="md:col-span-full space-y-2">
                                                            <InputLabel :value="__('translate.City')"
                                                                        class="font-bold text-[10px] text-gray-400 uppercase tracking-widest ml-1"/>
                                                            <TextInput
                                                                v-model="experience.city"
                                                                class="w-full !rounded-xl !border-gray-100 dark:!border-gray-700 bg-gray-50/50 dark:bg-gray-800"
                                                                type="text"
                                                                :placeholder="__('translate.City')"
                                                            />
                                                            <InputError
                                                                :message="form.errors[`experiences.${index}.city`]"
                                                                class="text-[10px] font-bold"/>
                                                        </div>
                                                    </div>
                                                </div>
                                            </template>
                                        </draggable>
                                    </div>

                                    <!-- SEKCJA WYKSZTAŁCENIA -->
                                    <div class="space-y-6 pt-8 border-t border-gray-100 dark:border-gray-700">
                                        <div class="flex items-center justify-between">
                                            <h3 class="text-xl font-black text-gray-900 dark:text-white uppercase tracking-tight flex items-center gap-3">
                                                <div class="p-2 bg-indigo-50 dark:bg-indigo-900/30 rounded-xl">
                                                    <svg class="w-5 h-5 text-indigo-600 dark:text-indigo-400"
                                                         fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                              stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5z"/>
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                              stroke-width="2"
                                                              d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.083 0 01.665-6.479L12 14z"/>
                                                    </svg>
                                                </div>
                                                {{ __('translate.education') }}
                                            </h3>
                                            <div class="flex items-center gap-4">
                                                <span
                                                    class="text-[10px] font-black text-gray-400 uppercase tracking-widest">{{
                                                        __('translate.quantity')
                                                    }}: {{ form.educations.length }}/5</span>
                                                <button
                                                    type="button"
                                                    @click="addEducation"
                                                    v-if="form.educations.length < 5"
                                                    class="inline-flex items-center gap-2 px-4 py-2 bg-indigo-600 hover:bg-indigo-700 text-white rounded-xl font-black text-[10px] uppercase tracking-widest transition-all shadow-md shadow-indigo-500/20 active:scale-95"
                                                >
                                                    <svg class="w-3 h-3" fill="none" stroke="currentColor"
                                                         viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                              stroke-width="3" d="M12 4v16m8-8H4"/>
                                                    </svg>
                                                    {{ __('translate.addEducation') }}
                                                </button>
                                            </div>
                                        </div>

                                        <div v-if="form.educations.length == 5"
                                             class="p-4 bg-red-50 dark:bg-red-900/20 text-red-600 dark:text-red-400 rounded-2xl text-xs font-bold text-center uppercase tracking-widest border border-red-100 dark:border-red-800/30">
                                            {{ __('translate.limitComplete') }}
                                        </div>

                                        <InputError :message="form.errors.educations" class="text-center font-bold"/>

                                        <draggable :list="form.educations" ghost-class="opacity-50" handle=".handle"
                                                   item-key="id" class="space-y-4">
                                            <template #item="{ element: education, index }">
                                                <div
                                                    class="group bg-white dark:bg-gray-800/50 rounded-3xl border border-gray-100 dark:border-gray-700 shadow-sm hover:shadow-md transition-all">
                                                    <div
                                                        class="flex items-center justify-between p-2 border-b border-gray-50 dark:border-gray-700/50">
                                                        <div
                                                            class="handle p-2 cursor-grab active:cursor-grabbing text-gray-300 hover:text-indigo-500 transition-colors">
                                                            <svg class="w-5 h-5" fill="none" stroke="currentColor"
                                                                 viewBox="0 0 24 24">
                                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                                      stroke-width="2" d="M4 8h16M4 16h16"/>
                                                            </svg>
                                                        </div>
                                                        <button @click="removeElement(index, form.educations)"
                                                                class="p-2 text-gray-300 hover:text-red-500 transition-colors">
                                                            <svg class="w-5 h-5" fill="none" stroke="currentColor"
                                                                 viewBox="0 0 24 24">
                                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                                      stroke-width="2"
                                                                      d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/>
                                                            </svg>
                                                        </button>
                                                    </div>

                                                    <div
                                                        class="p-6 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                                                        <div class="space-y-2">
                                                            <InputLabel :value="__('translate.school')"
                                                                        class="font-bold text-[10px] text-gray-400 uppercase tracking-widest ml-1"/>
                                                            <TextInput v-model="education.school"
                                                                       class="w-full !rounded-xl !border-gray-100 dark:!border-gray-700 bg-gray-50/50 dark:bg-gray-800"
                                                                       type="text"/>
                                                            <InputError
                                                                :message="form.errors[`educations.${index}.school`]"
                                                                class="text-[10px] font-bold"/>
                                                        </div>

                                                        <div v-if="props.levelEducations" class="space-y-2">
                                                            <InputLabel :value="__('translate.levelEducation')"
                                                                        class="font-bold text-[10px] text-gray-400 uppercase tracking-widest ml-1"/>
                                                            <multiselect v-model="education.level"
                                                                         :options="props.levelEducations"
                                                                         track-by="value" label="name"
                                                                         :placeholder="__('translate.placeholder')"
                                                                         class="custom-multiselect"/>
                                                            <InputError
                                                                :message="form.errors[`educations.${index}.level`]"
                                                                class="text-[10px] font-bold"/>
                                                        </div>

                                                        <div class="space-y-2">
                                                            <InputLabel :value="__('translate.specialization')"
                                                                        class="font-bold text-[10px] text-gray-400 uppercase tracking-widest ml-1"/>
                                                            <TextInput v-model="education.specialization"
                                                                       class="w-full !rounded-xl !border-gray-100 dark:!border-gray-700 bg-gray-50/50 dark:bg-gray-800"
                                                                       type="text"/>
                                                            <InputError
                                                                :message="form.errors[`educations.${index}.specialization`]"
                                                                class="text-[10px] font-bold"/>
                                                        </div>

                                                        <div class="space-y-2">
                                                            <InputLabel :value="__('translate.experienceSchoolEnd')"
                                                                        class="font-bold text-[10px] text-gray-400 uppercase tracking-widest ml-1"/>
                                                            <VueDatePicker v-model="education.finish" model-type="yyyy"
                                                                           year-picker auto-apply/>
                                                            <InputError
                                                                :message="form.errors[`educations.${index}.finish`]"
                                                                class="text-[10px] font-bold"/>
                                                        </div>

                                                        <div class="space-y-2 lg:col-span-2">
                                                            <InputLabel :value="__('translate.City')"
                                                                        class="font-bold text-[10px] text-gray-400 uppercase tracking-widest ml-1"/>
                                                            <TextInput v-model="education.city"
                                                                       class="w-full !rounded-xl !border-gray-100 dark:!border-gray-700 bg-gray-50/50 dark:bg-gray-800"
                                                                       type="text"/>
                                                            <InputError
                                                                :message="form.errors[`educations.${index}.city`]"
                                                                class="text-[10px] font-bold"/>
                                                        </div>
                                                    </div>
                                                </div>
                                            </template>
                                        </draggable>
                                    </div>

                                    <!-- SEKCJA KURSÓW -->
                                    <div class="space-y-6 pt-8 border-t border-gray-100 dark:border-gray-700">
                                        <div class="flex items-center justify-between">
                                            <h3 class="text-xl font-black text-gray-900 dark:text-white uppercase tracking-tight flex items-center gap-3">
                                                <div class="p-2 bg-emerald-50 dark:bg-emerald-900/30 rounded-xl">
                                                    <svg class="w-5 h-5 text-emerald-600 dark:text-emerald-400"
                                                         fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                              stroke-width="2"
                                                              d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                                    </svg>
                                                </div>
                                                {{ __('translate.courses') }}
                                            </h3>
                                            <div class="flex items-center gap-4">
                                                <span
                                                    class="text-[10px] font-black text-gray-400 uppercase tracking-widest">{{
                                                        __('translate.quantity')
                                                    }}: {{ form.courses.length }}/5</span>
                                                <button type="button" @click="addCourse" v-if="form.courses.length < 5"
                                                        class="inline-flex items-center gap-2 px-4 py-2 bg-emerald-600 hover:bg-emerald-700 text-white rounded-xl font-black text-[10px] uppercase tracking-widest transition-all shadow-md shadow-emerald-500/20 active:scale-95">
                                                    <svg class="w-3 h-3" fill="none" stroke="currentColor"
                                                         viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                              stroke-width="3" d="M12 4v16m8-8H4"/>
                                                    </svg>
                                                    {{ __('translate.addCourse') }}
                                                </button>
                                            </div>
                                        </div>
                                        <draggable :list="form.courses" ghost-class="opacity-50" handle=".handle"
                                                   item-key="id" class="space-y-4">
                                            <template #item="{ element: course, index }">
                                                <div
                                                    class="bg-white dark:bg-gray-800/50 rounded-3xl border border-gray-100 dark:border-gray-700 p-6 grid grid-cols-1 md:grid-cols-3 gap-6 relative group">
                                                    <div
                                                        class="handle absolute left-2 top-1/2 -translate-y-1/2 p-2 cursor-grab text-gray-200 group-hover:text-emerald-400 transition-colors">
                                                        <svg class="w-4 h-4" fill="none" stroke="currentColor"
                                                             viewBox="0 0 24 24">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                  stroke-width="2" d="M4 8h16M4 16h16"/>
                                                        </svg>
                                                    </div>
                                                    <button @click="removeElement(index, form.courses)"
                                                            class="absolute right-2 top-2 p-2 text-gray-200 hover:text-red-500 transition-colors">
                                                        <svg class="w-4 h-4" fill="none" stroke="currentColor"
                                                             viewBox="0 0 24 24">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                  stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                                                        </svg>
                                                    </button>
                                                    <div class="space-y-2 pl-4">
                                                        <InputLabel :value="__('translate.name')"
                                                                    class="font-bold text-[10px] text-gray-400 uppercase tracking-widest ml-1"/>
                                                        <TextInput v-model="course.name"
                                                                   class="w-full !rounded-xl !border-gray-100 dark:!border-gray-700 bg-gray-50/50 dark:bg-gray-800"
                                                                   type="text"/>
                                                        <InputError :message="form.errors[`courses.${index}.name`]"
                                                                    class="text-[10px] font-bold"/>
                                                    </div>
                                                    <div class="space-y-2">
                                                        <InputLabel :value="__('translate.organizator')"
                                                                    class="font-bold text-[10px] text-gray-400 uppercase tracking-widest ml-1"/>
                                                        <TextInput v-model="course.organizator"
                                                                   class="w-full !rounded-xl !border-gray-100 dark:!border-gray-700 bg-gray-50/50 dark:bg-gray-800"
                                                                   type="text"/>
                                                        <InputError
                                                            :message="form.errors[`courses.${index}.organizator`]"
                                                            class="text-[10px] font-bold"/>
                                                    </div>
                                                    <div class="space-y-2">
                                                        <InputLabel :value="__('translate.date')"
                                                                    class="font-bold text-[10px] text-gray-400 uppercase tracking-widest ml-1"/>
                                                        <VueDatePicker v-model="course.date" month-picker
                                                                       :format="monthYearFormat" auto-apply/>
                                                        <InputError :message="form.errors[`courses.${index}.date`]"
                                                                    class="text-[10px] font-bold"/>
                                                    </div>
                                                </div>
                                            </template>
                                        </draggable>
                                    </div>

                                    <!-- SEKCJA JĘZYKÓW -->
                                    <div class="space-y-6 pt-8 border-t border-gray-100 dark:border-gray-700">
                                        <div class="flex items-center justify-between">
                                            <h3 class="text-xl font-black text-gray-900 dark:text-white uppercase tracking-tight flex items-center gap-3">
                                                <div class="p-2 bg-amber-50 dark:bg-amber-900/30 rounded-xl">
                                                    <svg class="w-5 h-5 text-amber-600 dark:text-amber-400" fill="none"
                                                         stroke="currentColor" viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                              stroke-width="2"
                                                              d="M3 5h12M9 3v2m1.048 9.5A18.022 18.022 0 016.412 9m6.088 9h7M11 21l5-10 5 10M12.751 5C11.783 10.77 8.07 15.61 3 18.129"/>
                                                    </svg>
                                                </div>
                                                {{ __('translate.language') }}
                                            </h3>
                                            <div class="flex items-center gap-4">
                                                <span
                                                    class="text-[10px] font-black text-gray-400 uppercase tracking-widest">{{
                                                        __('translate.quantity')
                                                    }}: {{ form.langs.length }}/5</span>
                                                <button type="button" @click="addLang" v-if="form.langs.length < 5"
                                                        class="inline-flex items-center gap-2 px-4 py-2 bg-amber-600 hover:bg-amber-700 text-white rounded-xl font-black text-[10px] uppercase tracking-widest transition-all shadow-md shadow-amber-500/20 active:scale-95">
                                                    <svg class="w-3 h-3" fill="none" stroke="currentColor"
                                                         viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                              stroke-width="3" d="M12 4v16m8-8H4"/>
                                                    </svg>
                                                    {{ __('translate.addLang') }}
                                                </button>
                                            </div>
                                        </div>
                                        <draggable :list="form.langs" ghost-class="opacity-50" handle=".handle"
                                                   item-key="id" class="space-y-4">
                                            <template #item="{ element: lang, index }">
                                                <div
                                                    class="bg-white dark:bg-gray-800/50 rounded-3xl border border-gray-100 dark:border-gray-700 p-6 grid grid-cols-1 md:grid-cols-2 gap-6 relative group">
                                                    <div
                                                        class="handle absolute left-2 top-1/2 -translate-y-1/2 p-2 cursor-grab text-gray-200 group-hover:text-amber-400 transition-colors">
                                                        <svg class="w-4 h-4" fill="none" stroke="currentColor"
                                                             viewBox="0 0 24 24">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                  stroke-width="2" d="M4 8h16M4 16h16"/>
                                                        </svg>
                                                    </div>
                                                    <button @click="removeElement(index, form.langs)"
                                                            class="absolute right-2 top-2 p-2 text-gray-200 hover:text-red-500 transition-colors">
                                                        <svg class="w-4 h-4" fill="none" stroke="currentColor"
                                                             viewBox="0 0 24 24">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                  stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                                                        </svg>
                                                    </button>
                                                    <div class="space-y-2 pl-4">
                                                        <InputLabel :value="__('translate.name')"
                                                                    class="font-bold text-[10px] text-gray-400 uppercase tracking-widest ml-1"/>
                                                        <multiselect v-model="lang.name" :options="sortLangs"
                                                                     track-by="value" label="label"
                                                                     :placeholder="__('translate.placeholder')"
                                                                     class="custom-multiselect"/>
                                                        <InputError :message="form.errors[`langs.${index}.name`]"
                                                                    class="text-[10px] font-bold"/>
                                                    </div>
                                                    <div v-if="props.langLevels" class="space-y-2">
                                                        <InputLabel :value="__('translate.levelLang')"
                                                                    class="font-bold text-[10px] text-gray-400 uppercase tracking-widest ml-1"/>
                                                        <multiselect v-model="lang.level" :options="props.langLevels"
                                                                     track-by="value" label="name"
                                                                     :placeholder="__('translate.placeholder')"
                                                                     class="custom-multiselect"/>
                                                        <InputError :message="form.errors[`langs.${index}.level`]"
                                                                    class="text-[10px] font-bold"/>
                                                    </div>
                                                </div>
                                            </template>
                                        </draggable>
                                    </div>

                                    <!-- SEKCJA UMIEJĘTNOŚCI -->
                                    <div class="space-y-6 pt-8 border-t border-gray-100 dark:border-gray-700">
                                        <h3 class="text-xl font-black text-gray-900 dark:text-white uppercase tracking-tight flex items-center gap-3">
                                            <div class="p-2 bg-pink-50 dark:bg-pink-900/30 rounded-xl">
                                                <svg class="w-5 h-5 text-pink-600 dark:text-pink-400" fill="none"
                                                     stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                          stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                                                </svg>
                                            </div>
                                            {{ __('translate.skills') }}
                                        </h3>
                                        <div
                                            class="p-6 bg-white dark:bg-gray-800/50 rounded-3xl border border-gray-100 dark:border-gray-700">
                                            <multiselect id="tagging" v-model="form.skills" label="name" track-by="code"
                                                         :options="skillsOptions" :max="10" :multiple="true"
                                                         :taggable="true" @tag="addSkill"
                                                         :placeholder="__('translate.tagplaceholder')"
                                                         class="custom-multiselect">
                                                <template v-slot:maxElements>
                                                    {{ __('translate.tagmaxElements', {max: 10}) }}
                                                </template>
                                            </multiselect>
                                            <InputError :message="form.errors.skills"
                                                        class="mt-4 text-xs font-bold text-center"/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div v-if="formStep == 3 && form.cv == 1" class="animate-fade-in space-y-10">
                                <div
                                    class="p-8 bg-gray-50/50 dark:bg-gray-800/30 rounded-[2.5rem] border border-gray-100 dark:border-gray-700">
                                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-10">
                                        <div class="space-y-4">
                                            <div class="flex items-center gap-3">
                                                <div
                                                    class="p-2 bg-blue-50 dark:bg-blue-900/30 rounded-xl text-blue-600">
                                                    <svg class="w-5 h-5" fill="none" stroke="currentColor"
                                                         viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                              stroke-width="2"
                                                              d="M3 5h12M9 3v2m1.048 9.5A18.022 18.022 0 016.412 9m6.088 9h7M11 21l5-10 5 10M12.751 5C11.783 10.77 8.07 15.61 3 18.129"/>
                                                    </svg>
                                                </div>
                                                <InputLabel :value="__('translate.language') + ' CV'"
                                                            class="font-black text-gray-900 dark:text-white uppercase tracking-tight"/>
                                            </div>
                                            <p class="text-xs text-gray-500 font-medium">Wybierz język, w którym ma
                                                zostać wygenerowane Twoje CV.</p>
                                            <multiselect
                                                v-model="form.cvLang"
                                                :options="sortLangs"
                                                track-by="value"
                                                label="label"
                                                :placeholder="__('translate.placeholder')"
                                                class="custom-multiselect"
                                            />
                                        </div>

                                        <div class="space-y-4">
                                            <div class="flex items-center gap-3">
                                                <div
                                                    class="p-2 bg-indigo-50 dark:bg-indigo-900/30 rounded-xl text-indigo-600">
                                                    <svg class="w-5 h-5" fill="none" stroke="currentColor"
                                                         viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                              stroke-width="2"
                                                              d="M4 5a1 1 0 011-1h14a1 1 0 011 1v2a1 1 0 01-1 1H5a1 1 0 01-1-1V5zM4 13a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H5a1 1 0 01-1-1v-6zM16 13a1 1 0 011-1h2a1 1 0 011 1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-6z"/>
                                                    </svg>
                                                </div>
                                                <InputLabel :value="__('translate.cv')"
                                                            class="font-black text-gray-900 dark:text-white uppercase tracking-tight"/>
                                            </div>
                                            <p class="text-xs text-gray-500 font-medium">Wybierz jeden z dostępnych
                                                szablonów graficznych.</p>
                                            <div class="grid grid-cols-2 sm:grid-cols-3 gap-4 pt-2">
                                                <div v-for="template in templatesCvsList" :key="template.id"
                                                     @click="form.templateCv = template.id"
                                                     class="relative group cursor-pointer aspect-[3/4] rounded-2xl overflow-hidden border-4 transition-all duration-300"
                                                     :class="template.id == form.templateCv ? 'border-blue-500 ring-4 ring-blue-500/20 shadow-xl' : 'border-white dark:border-gray-800 hover:border-blue-200 dark:hover:border-blue-900 shadow-sm'"
                                                >
                                                    <img :src="template.img" alt="cv template"
                                                         class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
                                                    <div
                                                        class="absolute inset-0 bg-gradient-to-t from-blue-900/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity flex items-end justify-center p-4">
                                                        <span
                                                            class="text-[10px] font-black text-white uppercase tracking-widest bg-blue-600 px-3 py-1 rounded-full shadow-lg">Wybierz</span>
                                                    </div>
                                                    <div v-if="template.id == form.templateCv"
                                                         class="absolute top-2 right-2 w-6 h-6 bg-blue-600 rounded-full flex items-center justify-center shadow-lg">
                                                        <svg class="w-4 h-4 text-white" fill="none"
                                                             stroke="currentColor" viewBox="0 0 24 24">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                  stroke-width="3" d="M5 13l4 4L19 7"/>
                                                        </svg>
                                                    </div>
                                                </div>
                                            </div>
                                            <InputError :message="form.errors.templateCv"
                                                        class="mt-2 text-xs font-bold"/>
                                        </div>
                                    </div>
                                </div>

                                <div class="flex flex-col items-center gap-6 pt-6">
                                    <button
                                        type="button"
                                        @click.prevent="generatePdf(form.templateCv)"
                                        v-if="form.cv && formStep == 3 && form.templateCv && form.cvLang"
                                        class="inline-flex items-center gap-3 px-8 py-3 bg-white dark:bg-gray-800 border-2 border-blue-600 text-blue-600 dark:text-blue-400 rounded-2xl font-black text-xs uppercase tracking-[0.2em] hover:bg-blue-50 dark:hover:bg-blue-900/20 transition-all shadow-lg shadow-blue-500/10 active:scale-95 disabled:opacity-50"
                                        :disabled="generateCvLoading"
                                    >
                                        <svg v-if="generateCvLoading" class="animate-spin h-4 w-4"
                                             xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                            <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor"
                                                    stroke-width="4"></circle>
                                            <path class="opacity-75" fill="currentColor"
                                                  d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                                        </svg>
                                        <svg v-else class="w-4 h-4" fill="none" stroke="currentColor"
                                             viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                  d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                  d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                                        </svg>
                                        {{ __('translate.viewCv') }}
                                    </button>

                                    <InputError :message="form.errors.application"
                                                class="text-sm font-bold bg-red-50 dark:bg-red-900/20 text-red-600 dark:text-red-400 px-6 py-2 rounded-full"/>

                                    <PrimaryButton v-if="form.cv && formStep == 3 && form.cvLang"
                                                   class="w-full sm:w-[300px] !py-5 !rounded-[2rem] !bg-gradient-to-r !from-blue-600 !to-indigo-600 hover:!from-blue-700 hover:!to-indigo-700 !text-sm font-black !uppercase !tracking-[0.2em] shadow-xl shadow-blue-500/30 flex justify-center items-center gap-4 transition-all transform active:scale-[0.98]"
                                                   :class="{ 'opacity-25 scale-95': form.processing }"
                                                   :disabled="form.processing || !isReadyToSubmit"
                                    >
                                        <template v-if="form.processing">
                                            <svg class="animate-spin h-5 w-5 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                                <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                                                <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8v4a4 4 0 00-4 4H4z"></path>
                                            </svg>
                                            <span>{{ __('translate.sending') || 'Wysyłanie...' }}</span>
                                        </template>
                                        <template v-else>
                                            <span>{{ __('translate.apply') }}</span>
                                            <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none"
                                                 viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                      d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                            </svg>
                                        </template>
                                    </PrimaryButton>
                                </div>
                            </div>
                            <div v-if="formStep == 2 && form.cv == 2" class="animate-fade-in space-y-8">
                                <div v-if="props.project.questions.length"
                                     class="p-6 bg-gray-50/50 dark:bg-gray-800/30 rounded-3xl border border-gray-100 dark:border-gray-700">
                                    <VideoRecorder :questions="props.project.questions" :projectId="props.project.id"
                                                   :form="form" @submit="submit" @uploadStateChange="(state) => isReadyToSubmit = !state"/>
                                </div>
                                <div v-else
                                     class="p-12 text-center bg-gray-50/50 dark:bg-gray-800/30 rounded-3xl border border-gray-100 dark:border-gray-700">
                                    <div
                                        class="inline-flex items-center justify-center w-20 h-20 rounded-2xl bg-blue-50 dark:bg-blue-900/20 text-blue-600 dark:text-blue-400 mb-6 shadow-sm">
                                        <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                  d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                        </svg>
                                    </div>
                                    <h3 class="text-2xl font-black text-gray-900 dark:text-white mb-2 uppercase tracking-tight">
                                        {{ __('translate.noQuestionsFound') }}
                                    </h3>
                                    <p class="text-sm text-gray-500 dark:text-gray-400 max-w-sm mx-auto leading-relaxed">
                                        {{ __('translate.noQuestionsDescription') }}
                                    </p>
                                </div>
                            </div>
                            <div v-else-if="formStep == 2 && form.cv == 3" class="animate-fade-in space-y-8">
                                <div v-if="props.project.questions.length"
                                     class="p-6 bg-gray-50/50 dark:bg-gray-800/30 rounded-3xl border border-gray-100 dark:border-gray-700">
                                    <AudioRecorderNew :questions="props.project.questions" :projectId="props.project.id"
                                                      :form="form" @submit="submit"/>
                                </div>
                                <div v-else
                                     class="p-12 text-center bg-gray-50/50 dark:bg-gray-800/30 rounded-3xl border border-gray-100 dark:border-gray-700">
                                    <div
                                        class="inline-flex items-center justify-center w-20 h-20 rounded-2xl bg-blue-50 dark:bg-blue-900/20 text-blue-600 dark:text-blue-400 mb-6 shadow-sm">
                                        <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                  d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                        </svg>
                                    </div>
                                    <h3 class="text-2xl font-black text-gray-900 dark:text-white mb-2 uppercase tracking-tight">
                                        {{ __('translate.noQuestionsFound') }}
                                    </h3>
                                    <p class="text-sm text-gray-500 dark:text-gray-400 max-w-sm mx-auto leading-relaxed">
                                        {{ __('translate.noQuestionsDescription') }}
                                    </p>
                                </div>
                            </div>
                            <div
                                class="flex items-center justify-center pt-8 border-t border-gray-100 dark:border-gray-700 mt-10 gap-6">
                                <button
                                    type="button"
                                    @click="prevStep"
                                    v-if="formStep > 1"
                                    class="group inline-flex items-center gap-2 px-6 py-3 bg-white dark:bg-gray-800 border-2 border-gray-200 dark:border-gray-700 text-gray-600 dark:text-gray-400 rounded-2xl font-black text-xs uppercase tracking-widest hover:border-blue-500 hover:text-blue-600 transition-all active:scale-95"
                                >
                                    <svg class="w-4 h-4 transition-transform group-hover:-translate-x-1" fill="none"
                                         stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                              d="M10 19l-7-7m0 0l7-7m-7 7h18"/>
                                    </svg>
                                    {{ __('translate.previousStep') }}
                                </button>

                                <!-- Przycisk Aplikuj widoczny w kroku 2 dla CV Klasycznego (Wgraj plik) lub istniejącego CV -->
                                <PrimaryButton
                                    v-if="form.cv == 1 && formStep == 2 && (form.cvStandardType == 1 || form.isSelected)"
                                    class="w-full sm:w-[300px] !py-4 !rounded-2xl !bg-blue-600 hover:!bg-blue-700 !text-sm font-black !uppercase !tracking-widest shadow-lg shadow-blue-500/20 flex justify-center items-center gap-3 transition-all transform active:scale-95"
                                    :class="{ 'opacity-25': form.processing }"
                                    :disabled="form.processing || !isReadyToSubmit"
                                >
                                    <template v-if="form.processing">
                                        <svg class="animate-spin h-4 w-4 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                            <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                                            <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8v4a4 4 0 00-4 4H4z"></path>
                                        </svg>
                                        <span>{{ __('translate.sending') || 'Wysyłanie...' }}</span>
                                    </template>
                                    <template v-else>
                                        <span>{{ __('translate.apply') }}</span>
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                  d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                        </svg>
                                    </template>
                                </PrimaryButton>

                                <!-- Przycisk Wybierz szablon widoczny w kroku 2 dla CV Klasycznego (Kreator) -->
                                <PrimaryButton
                                    type="button"
                                    @click="nextStep"
                                    v-if="form.cv == 1 && formStep == 2 && form.cvStandardType == 2 && !form.isSelected"
                                    class="w-full sm:w-[300px] !py-4 !rounded-2xl !bg-blue-600 hover:!bg-blue-700 !text-sm font-black !uppercase !tracking-widest shadow-lg shadow-blue-500/20 flex justify-center items-center gap-3 transition-all transform active:scale-95"
                                >
                                    <span>{{ __('translate.chosetemplate') }}</span>
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                              d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                                    </svg>
                                </PrimaryButton>

                                <!-- Przycisk Aplikuj widoczny dla Video/Audio w kroku 2 -->
                                <PrimaryButton
                                    v-if="(form.cv == 2 || form.cv == 3) && formStep == 2"
                                    class="w-full sm:w-[300px] !py-4 !rounded-2xl !bg-blue-600 hover:!bg-blue-700 !text-sm font-black !uppercase !tracking-widest shadow-lg shadow-blue-500/20 flex justify-center items-center gap-3 transition-all transform active:scale-95"
                                    :class="{ 'opacity-25': form.processing }"
                                    :disabled="form.processing || !isReadyToSubmit"
                                >
                                    <template v-if="form.processing">
                                        <svg class="animate-spin h-4 w-4 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                            <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                                            <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8v4a4 4 0 00-4 4H4z"></path>
                                        </svg>
                                        <span>{{ __('translate.sending') || 'Wysyłanie...' }}</span>
                                    </template>
                                    <template v-else>
                                        <span>{{ __('translate.apply') }}</span>
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                  d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                        </svg>
                                    </template>
                                </PrimaryButton>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </FrontLayout>
</template>
<style lang="scss">

.animate-fade-in {
    animation: fadeIn 0.5s ease-out forwards;
}

.animate-slide-up {
    animation: slideUp 0.5s ease-out forwards;
}

@keyframes fadeIn {
    from {
        opacity: 0;
    }
    to {
        opacity: 1;
    }
}

@keyframes slideUp {
    from {
        opacity: 0;
        transform: translateY(20px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}


.ghost {
    background: #e5e7ebb3;
}

.handle {
    cursor: pointer;
}
</style>
