<script setup>
import FrontLayout from "@/Layouts/FrontLayout.vue";
import {Link, useForm, usePage, router} from '@inertiajs/vue3';
import {computed, onMounted, ref,watch } from "vue";
import PrimaryButton from "@/Components/PrimaryButton.vue";
import InputError from "@/Components/InputError.vue";
import TextInput from "@/Components/TextInput.vue";
import InputLabel from "@/Components/InputLabel.vue";
import {usePermission} from "@/Composables/usePermission.js";
import draggable from 'vuedraggable/src/vuedraggable'
import DangerButton from "@/Components/DangerButton.vue";
import Multiselect from 'vue-multiselect'
import Checkbox from "@/Components/Checkbox.vue";

const props = defineProps({
    project: Object,
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
    {id:1,img:'/images/cv/1.jpg'},
    {id:2,img:'/images/cv/2.jpg'},
    {id:3,img:'/images/cv/3.jpg'},
    {id:8,img:'/images/cv/8.jpg'},
    {id:13,img:'/images/cv/13.jpg'},
    {id:15,img:'/images/cv/15.jpg'},
    {id:18,img:'/images/cv/18.jpg'},
    {id:19,img:'/images/cv/19.jpg'},
    {id:22,img:'/images/cv/22.jpg'},
    {id:23,img:'/images/cv/23.jpg'}
];
const sortLangs = computed(() => {
    const excludedLangs = ['am', 'ps', 'bn', 'dz', 'zh', 'ka', 'ja', 'km', 'ko', 'dv', 'th'];
    return usePage().props.languages
        .filter(lang => lang?.value && !excludedLangs.includes(lang.value))
        .sort((a, b) => a.label.localeCompare(b.label));
})

const user = computed(()=>usePage().props.auth.user);
const lang = computed(()=>usePage().props.language);

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
                    metadata:{
                        poster:el.preview_url
                    }
                }
            }))
            : []
        : [],
    cvFile: [],
    cvLang: usePage().props.languages && usePage().props.languages.filter(el=>el.value == usePage().props.language),
    cvStandardType:(user.value && hasRole('worker')) ? (props.project.cv_classics?.length ? props.project.cv_classics[0]?.cvStandardType : 1) : 1,
    experiences: (user.value && hasRole('worker')) ? (props.project.cv_classics?.length ? props.project.cv_classics[0]?.experiences : []) : [],
    educations: (user.value && hasRole('worker')) ? (props.project.cv_classics?.length ? props.project.cv_classics[0]?.educations : []) : [],
    courses: (user.value && hasRole('worker')) ? (props.project.cv_classics?.length ? props.project.cv_classics[0]?.courses : []) : [],
    langs: (user.value && hasRole('worker')) ? (props.project.cv_classics?.length ? props.project.cv_classics[0]?.langs : []) : [],
    skills: (user.value && hasRole('worker')) ? (props.project.cv_classics?.length ? props.project.cv_classics[0]?.skills : []) : [],
    position: (user.value && hasRole('worker')) ? (props.project.cv_classics?.length ? props.project.cv_classics[0]?.position : '') : '',
});

const pond = ref(null);

let serverMessage=ref(null);

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
    console.log('jestttttttttttt')
    form.post(route('front.aplicationNoLogin.store',props.project), {
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

const addSkill  = (newTag) => {
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
    form.post(route('front.projects.next.step',props.project), {
        errorBag: 'AplicationNonLogin',
        preserveScroll: true,
        onSuccess: async () => {
            formStep.value++;
            form.clearErrors();
            if(user.value && hasRole('worker') && (props.project.cv_classics?.length && props.project.cv_classics[0]?.cvStandardType == 2) && formStep.value == 2 ){
                const response = await  axios.get(route('front.getChildsCategoryWitoutDetail'));
                optionsPositions.value = response.data;
            }
        },
    });
}
// const generatePdf = (templateId) => {
//     generateCvLoading.value = true;
//     axios.post(route("front.projects.generate.pdf", templateId),form)
//         .then(response => {
//             generateCvLoading.value = false;
//             console.log(response)
//         })
//         .catch(error => {
//             console.error('Błąd przy ładowaniu CAPTCHA', error);
//             generateCvLoading.value = false;
//         });
// };
const generatePdf = (templateId) => {
    generateCvLoading.value = true;
    axios.post(route("front.projects.generate.pdf", templateId), form)
        .then(response => {
            generateCvLoading.value = false;
            if (response.data.url) {
                const pdfWindow = window.open(response.data.url, '_blank');
                if (response.data.deleteUrl) {
                    setTimeout(() => {
                        axios.post(route('front.projects.deletePdf'),{file:response.data.deleteUrl})
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
        // form.experiences = [];
        // form.educations = [];
        // form.courses = [];
        // form.langs = [];
    }


watch(formStep, (newStep) => {
    form.step = newStep;
});

watch(()=>form.cvStandardType, async (type) => {
    form.clearErrors();
    if(type == 2){
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

const removeFile =  async (source,load) => {
     await axios.post(route('temporary.delete.poster'),{'source':source});
    load();
}
</script>
<template>
    <FrontLayout :title="__('translate.project')">
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white dark:bg-gray-800 shadow-xl sm:rounded-lg p-4">
                    <Link :href="route('front.projects')" class="font-bold text-md underline p-4 pt-4">
                        {{ __('translate.backToList') }}
                    </Link>
                    <Link :href="route('front.projects.single',project)" class="font-bold text-md underline p-4">
                        {{ __('translate.backToProject') }}
                    </Link>
                    <dl class="text-gray-900 dark:text-white grid grid-cols-4 my-4">
                        <div class="flex flex-col pb-3">
                            <dt class="mb-1 text-gray-500 md:text-sm dark:text-gray-400">Id:</dt>
                            <dd class="text-sm font-semibold">{{project.id}}
                            </dd>
                        </div>
                        <div class="flex flex-col pb-3">
                            <dt class="mb-1 text-gray-500 md:text-sm dark:text-gray-400">{{__('translate.aplicationsType')}}:</dt>
                            <dd class="text-sm font-semibold">{{(user && hasRole('worker') ? __('translate.aplicationsWorker') : __('translate.applyWithoutLogin'))}}
                            </dd>
                        </div>
                        <div class="flex flex-col py-3">
                            <dt class="mb-1 text-gray-500 md:text-sm dark:text-gray-400">{{__('translate.category')}}:</dt>
                            <dd class="text-sm font-semibold">{{ project.category.allTranslations.title[usePage().props.language] }}</dd>
                        </div>
                        <div class="flex flex-col pt-3">
                            <dt class="mb-1 text-gray-500 md:text-sm dark:text-gray-400">{{__('translate.title')}}:</dt>
                            <dd class="text-sm font-semibold">{{ project.title[usePage().props.language] }}</dd>
                        </div>
                    </dl>
                    <form @submit.prevent="submit">
                        <div v-if="formStep == 1">
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                <div>
                                    <InputLabel for="name" :value="__('translate.nameUser')"/>
                                    <TextInput
                                        id="name"
                                        v-model="form.name"
                                        autofocus
                                        class="mt-1 block w-full"
                                        type="text"
                                    />
                                    <InputError :message="form.errors.name" class="mt-2"/>
                                </div>
                                <div>
                                    <InputLabel for="surname" :value="__('translate.surname')"/>
                                    <TextInput
                                        id="surname"
                                        v-model="form.surname"
                                        autofocus
                                        class="mt-1 block w-full"
                                        type="text"
                                    />
                                    <InputError :message="form.errors.surname" class="mt-2"/>
                                </div>
                                <div>
                                    <InputLabel for="phone" :value="__('translate.phone')"/>
                                    <TextInput
                                        id="phone"
                                        v-model="form.phone"
                                        class="mt-1 block w-full"
                                        type="text"
                                    />
                                    <InputError :message="form.errors.phone" class="mt-2"/>
                                </div>
                                <div>
                                    <InputLabel for="email" :value="__('translate.email')"/>
                                    <TextInput
                                        id="email"
                                        v-model="form.email"
                                        autofocus
                                        class="mt-1 block w-full"
                                        type="email"
                                    />
                                    <InputError :message="form.errors.email" class="mt-2"/>
                                </div>
                            </div>
                            <div class="col-span-2">
                                <InputLabel for="title" :value="__('translate.files')"/>
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
                                    :labelMaxFileSizeExceeded="__('translate.labelMaxFileSizeExceeded')"
                                    :labelMaxFileSize="__('translate.labelMaxFileSize')"
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
                                    <InputLabel :value="__('translate.cv')" />
                                    <div v-for="cv in project.cv" class="flex items-center mt-1">
                                        <input
                                            class="border-gray-300 text-blue-work shadow-sm focus:ring-blue-work mr-2"
                                            type="radio" :id="'cv-'+cv.id" v-model="form.cv"
                                            :value="cv.id" />
                                        <label :for="'cv-'+cv.id">{{cv.allTranslations.name[usePage().props.language]}}</label>
                                    </div>
                                    <InputError :message="form.errors.cv" class="mt-2"/>
                                    <button class="text-xs underline mt-1" v-if="form.cv" @click="form.cv=''">{{__('translate.cvTypeReset')}}</button>
                                </div>
                            </div>
                            <div class="col-span-6 mt-3">
                                <InputLabel for="captcha" :value="__('translate.verification')"/>
                                <div>
                                    <div class="flex items-center space-x-2">
                                        <p class="bg-blue-100 rounded-md p-2 text-center">
                                        <span
                                            v-for="(item, index) in coloredCaptcha"
                                            :key="index"
                                            :style="{ color: item.color }"
                                            class="mr-1 font-semibold"
                                        >
                                        {{ item.letter }}
                                    </span>

                                        </p>
                                        <TextInput
                                            v-model="form.captcha"
                                            id="captcha"
                                            maxlength="6"
                                            class="block w-full p-2 border rounded"
                                        />
                                    </div>
                                    <button type="button" @click="reloadCaptcha" class="text-blue-500 mt-2 text-xs">
                                        {{ __('translate.refreshCapcha') }}
                                    </button>
                                    <InputError :message="form.errors.captcha" class="mt-2"/>
                                </div>
                            </div>
                            <div class="col-span-6">
                                <div class="mt-4">
                                    <InputLabel for="agreements" :value="__('translate.agreements')"/>
                                    <div v-for="agreement in agreements" :key="agreement.id">
                                        <input
                                            class="rounded border-gray-300 text-blue-work shadow-sm focus:ring-blue-work mr-2"
                                            type="checkbox" :id="agreement.id" v-model="form.agreements"
                                            :value="agreement.id" name="agreement">
                                        <label :for="agreement.id">{{ agreement.description[usePage().props.language] }}</label>
                                    </div>
                                    <InputError :message="form.errors.agreements" class="mt-2"/>
                                </div>
                            </div>
                            <div class="flex items-center justify-center my-4">
                                <InputError :message="form.errors.application" class="mt-2"/>
                            </div>

                            <div class="flex items-center justify-center mt-4">
                                <PrimaryButton v-if="!form.cv && formStep == 1" class="w-1/4 flex justify-center" :class="{ 'opacity-25': (form.processing || isUploadDisabled)  }"
                                               :disabled="form.processing || !isReadyToSubmit || isUploadDisabled">
                                    {{ __('translate.apply') }}
                                </PrimaryButton>
                            </div>
                        </div>
                            <div v-if="formStep == 2 && form.cv == 1">
                                <div>
                                    <InputLabel value="Typ konta" class="mb-1"/>
                                    <ul class="grid w-full gap-6 md:grid-cols-2 mb-2">
                                        <li>
                                            <input checked name="type" v-model="form.cvStandardType" type="radio" id="firm" value="1" class="hidden peer" />
                                            <label for="firm" class="inline-flex items-center justify-between w-full p-5 text-gray-500 bg-gray-50 border border-gray-200 rounded-lg cursor-pointer dark:hover:text-gray-300 dark:border-gray-700 dark:peer-checked:text-gray-500 peer-checked:border-gray-600 dark:peer-checked:border-gray-600 peer-checked:text-gray-600 hover:text-gray-600 hover:bg-gray-100 dark:text-gray-400 dark:bg-gray-800 dark:hover:bg-gray-700">
                                                <div class="block">
                                                    <div class="w-full text-md font-semibold">CV</div>
                                                    <div class="w-full text-sm">Plik</div>
                                                </div>
                                                <svg class="w-5 h-5 ms-3 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                                                </svg>
                                            </label>
                                        </li>
                                        <li>
                                            <input name="type" v-model="form.cvStandardType" type="radio" id="client" value="2" class="hidden peer" />
                                            <label for="client" class="inline-flex items-center justify-between w-full p-5 text-gray-500 bg-gray-50 border border-gray-200 rounded-lg cursor-pointer dark:hover:text-gray-300 dark:border-gray-700 dark:peer-checked:text-gray-500 peer-checked:border-gray-600 dark:peer-checked:border-gray-600 peer-checked:text-gray-600 hover:text-gray-600 hover:bg-gray-100 dark:text-gray-400 dark:bg-gray-800 dark:hover:bg-gray-700">
                                                <div class="block">
                                                    <div class="w-full text-md font-semibold">CV</div>
                                                    <div class="w-full text-sm">generator</div>
                                                </div>
                                                <svg class="w-5 h-5 ms-3 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                                                </svg>
                                            </label>
                                        </li>
                                    </ul>
                                    <InputError :message="form.errors.cvStandardType" class="mt-2"/>
                                </div>
                                <div v-if="form.cvStandardType == 1">
                                    <div class="col-span-6">
                                        <InputLabel for="cvcvFile" :value="__('translate.fileCv')"/>
                                        <file-pond
                                            name="cvFile"
                                            ref="uploadCv"
                                            :files="form.cvFile"
                                            :allow-multiple="false"
                                            :max-file-size="'5MB'"
                                            imagePreviewMaxHeight="300"
                                            :label-idle="__('translate.label-idle')"
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
                                                        const fileIndex = form.cvFile.findIndex(el => el === response);
                                                        if (fileIndex !== -1) {
                                                            form.cvFile.splice(fileIndex, 1);
                                                       }
                                                }
                                            }
                                            }"
                                        ></file-pond>
                                        <InputError  :message="form.errors.cvFile" class="mt-1"/>
                                        <div v-for="(error, cvFile) in form.errors" :key="cvFile">
                                            <span class="text-sm text-red-600" v-if="cvFile.startsWith('cvFile.')">{{ error }}</span>
                                        </div>
                                    </div>
                                </div>
                                <div v-else-if="form.cvStandardType == 2">
                                    <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
                                        <div>
                                            <InputLabel for="birthday" :value="__('translate.birthdayDate')"/>
                                            <VueDatePicker model-type="dd-MM-yyyy" format="dd-MM-yyyy" class="border-gray-300 focus:blue-work rounded-md shadow-sm mt-1 block w-full" :enable-time-picker="false"  v-model="form.birthday" :locale="lang" auto-apply id="birthday" />
                                            <InputError :message="form.errors.birthday" class="mt-2"/>
                                        </div>
                                        <div>
                                            <InputLabel for="city" :value="__('translate.City')"/>
                                            <TextInput
                                                id="city"
                                                v-model="form.city"
                                                class="mt-1 block w-full"
                                                type="text"
                                            />
                                            <InputError :message="form.errors.city" class="mt-2"/>
                                        </div>
                                        <div>
                                            <InputLabel for="postal" :value="__('translate.Postal')"/>
                                            <TextInput
                                                id="postal"
                                                v-model="form.postal"
                                                class="mt-1 block w-full"
                                                type="text"
                                            />
                                            <InputError :message="form.errors.postal" class="mt-2"/>
                                        </div>
                                        <div class="col-span-6">
                                            <InputLabel for="photo" :value="__('translate.Photo')"/>
                                            <file-pond
                                                name="photo"
                                                ref="uploadPhoto"
                                                :files="form.photo"
                                                :allow-multiple="false"
                                                :max-file-size="'2MB'"
                                                imagePreviewMaxHeight="300"
                                                filePosterHeight="300"
                                                :label-idle="__('translate.label-idle')"
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
                                            <InputError  :message="form.errors.photo" class="mt-1"/>
                                            <div v-for="(error, fileKey) in form.errors" :key="fileKey">
                                                <span class="text-sm text-red-600" v-if="fileKey.startsWith('photo.')">{{ error }}</span>
                                            </div>
                                        </div>
                                    </div>
<!--                                    EXPERIENCE-->
                                    <PrimaryButton class="!flex justify-center w-100 mx-auto mt-3" type="button"
                                                   @click="addExperience" v-if="form.experiences.length < 5">
                                        {{__('translate.addExperience')}}
                                    </PrimaryButton>
                                    <span v-if="form.experiences.length == 5" class="inline-flex items-center justify-center px-4 py-2 bg-red-300 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-red-500 active:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2 transition ease-in-out duration-150 mt-3 !flex justify-center w-1/4 mx-auto">{{__('translate.limitComplete')}}</span>
                                    <span class="text-xs flex items-center justify-center mt-2">{{__('translate.quantity')}}: {{form.experiences.length}}/5</span>
                                    <InputError :message="form.errors.experiences" class="text-center mt-2"/>
                                    <draggable :list="form.experiences" ghost-class="ghost" handle=".handle"
                                               item-key="id">
                                        <template #item="{ element: experience,index }">
                                            <div>
                                                <svg class="outline-none h-5 w-5 handle stroke-gray-300 ml-1 mt-1"
                                                     fill="none"
                                                     stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"
                                                     xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M4 6h16M4 10h16M4 14h16M4 18h16" stroke-linecap="round"
                                                          stroke-linejoin="round"></path>
                                                </svg>
                                                <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
<!--                                                    POSITION-->
                                                    <div  v-if="optionsPositions">
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
                                                            :disabled="!optionsPositions"
                                                            :placeholder="__('translate.placeholder')"
                                                            v-model="experience.position" :options="optionsPositions">
                                                            <template #noResult>
                                                                <span>{{__('translate.noOptions')}}</span>
                                                            </template>
                                                            <template #noOptions>
                                                                <span>{{__('translate.noResult')}}</span>
                                                            </template>
                                                        </multiselect>
                                                        <InputError
                                                            :message="form.errors[`experiences.${index}.position`]"
                                                            class="mt-2"/>
                                                    </div>
<!--                                                    POSITION-->
                                                    <!-- EMPLOYER -->
                                                    <div>
                                                        <InputLabel :value="__('translate.employer')"/>
                                                        <TextInput
                                                            :id="`experiences-${index}-employer`"
                                                            v-model="experience.employer"
                                                            class="mt-1 block w-full"
                                                            type="text"
                                                        />
                                                        <InputError
                                                            :message="form.errors[`experiences.${index}.employer`]"
                                                            class="mt-2"/>

                                                    </div>
                                                    <!-- EMPLOYER -->
                                                    <!-- DATASTART -->
                                                    <div>
                                                        <InputLabel :value="__('translate.experienceStart')"/>
                                                        <VueDatePicker
                                                            v-model="experience.start"
                                                            :locale="lang"
                                                            month-picker
                                                            :format="monthYearFormat"
                                                            auto-apply
                                                            :id="`experiences-${index}-start`"
                                                             />

                                                        <InputError
                                                            :message="form.errors[`experiences.${index}.start`]"
                                                            class="mt-2"/>
                                                    </div>
                                                    <!-- DATASTART -->
                                                    <!-- DATAEND -->
                                                    <div class="flex space-x-2">
                                                        <div>
                                                            <InputLabel :value="__('translate.experienceEnd')"/>
                                                            <VueDatePicker
                                                                v-model="experience.end"
                                                                :locale="lang"
                                                                month-picker
                                                                :format="monthYearFormat"
                                                                auto-apply
                                                                :min-date="experience.start ? new Date(experience.start.year, experience.start.month) : null"
                                                                :id="`experiences-${index}-end`"
                                                                :disabled="experience.isCurrent"
                                                                :class="{'opacity-25':experience.isCurrent}"

                                                            />
                                                        <div class="mt-1">
                                                            <label class="flex items-center gap-1">
                                                                <Checkbox type="checkbox" v-model:checked="experience.isCurrent" @change="handleIsCurrentChange(index)"
                                                                />
                                                                <span>{{ __('translate.currently') }}</span>
                                                            </label>
                                                        </div>
                                                            <InputError
                                                                :message="form.errors[`experiences.${index}.end`]"
                                                                class="mt-2"/>
                                                        </div>
                                                    </div>
                                                    <!-- DATAEND -->
                                                    <!-- CITY -->
                                                    <div>
                                                        <InputLabel for="city" :value="__('translate.City')"/>
                                                        <TextInput
                                                            :id="`experiences-${index}-city`"
                                                            v-model="experience.city"
                                                            class="mt-1 block w-full"
                                                            type="text"
                                                        />
                                                        <InputError
                                                            :message="form.errors[`experiences.${index}.city`]"
                                                            class="mt-2"/>                                                    </div>
                                                    <!-- CITY -->
                                                </div>
                                                <DangerButton class="mt-3 !flex justify-center w-100 mx-auto"
                                                              @click="removeElement(index,form.experiences)">
                                                    <svg class="h-4 w-4 mr-2" fill="none"
                                                         stroke="currentColor"
                                                         stroke-width="2" viewBox="0 0 24 24"
                                                         xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"
                                                            stroke-linecap="round"
                                                            stroke-linejoin="round"/>
                                                    </svg>
                                                    {{__('translate.deleteExperience')}}
                                                </DangerButton>
                                            </div>
                                        </template>
                                    </draggable>
                                    <!--                                    EXPERIENCE-->


<!--                                    EDUCATION-->
                                    <PrimaryButton class="!flex justify-center w-100 mx-auto mt-3" type="button"
                                                   @click="addEducation" v-if="form.educations.length < 5">{{__('translate.addEducation')}}
                                    </PrimaryButton>
                                    <span v-if="form.educations.length == 5" class="inline-flex items-center justify-center px-4 py-2 bg-red-300 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-red-500 active:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2 transition ease-in-out duration-150 mt-3 !flex justify-center w-1/4 mx-auto">{{__('translate.limitComplete')}}</span>
                                    <span class="text-xs flex items-center justify-center mt-2">{{__('translate.quantity')}}: {{form.educations.length}}/5</span>
                                    <InputError :message="form.errors.educations" class="text-center mt-2"/>
                                    <draggable :list="form.educations" ghost-class="ghost" handle=".handle"
                                               item-key="id">
                                        <template #item="{ element: education,index }">
                                            <div>
                                                <svg class="outline-none h-5 w-5 handle stroke-gray-300 ml-1 mt-1"
                                                     fill="none"
                                                     stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"
                                                     xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M4 6h16M4 10h16M4 14h16M4 18h16" stroke-linecap="round"
                                                          stroke-linejoin="round"></path>
                                                </svg>
                                                <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
                                                    <!-- SCHOOL -->
                                                    <div>
                                                        <InputLabel :value="__('translate.school')"/>
                                                        <TextInput
                                                            :id="`educations-${index}-school`"
                                                            v-model="education.school"
                                                            class="mt-1 block w-full"
                                                            type="text"
                                                        />
                                                        <InputError
                                                            :message="form.errors[`educations.${index}.school`]"
                                                            class="mt-2"/>

                                                    </div>
                                                    <!-- SCHOOL -->
                                                    <!--                                                    LEVEL-->
                                                    <div v-if="props.levelEducations" class="col-span-2">
                                                        <InputLabel :value="__('translate.levelEducation')"/>
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
                                                            v-model="education.level" :options="props.levelEducations">
                                                            <template #noResult>
                                                                <span>{{__('translate.noOptions')}}</span>
                                                            </template>
                                                            <template #noOptions>
                                                                <span>{{__('translate.noResult')}}</span>
                                                            </template>
                                                        </multiselect>
                                                        <InputError
                                                            :message="form.errors[`educations.${index}.level`]"
                                                            class="mt-2"/>
                                                    </div>
                                                    <!--                                                    LEVEL-->

                                                    <!-- SPECIALIZATION -->
                                                    <div>
                                                        <InputLabel :value="__('translate.specialization')"/>
                                                        <TextInput
                                                            :id="`educations-${index}-specialization`"
                                                            v-model="education.specialization"
                                                            class="mt-1 block w-full"
                                                            type="text"
                                                        />
                                                        <InputError
                                                            :message="form.errors[`educations.${index}.specialization`]"
                                                            class="mt-2"/>

                                                    </div>
                                                    <!-- SPECIALIZATION -->
                                                    <!-- FINISH -->
                                                    <div>

                                                        <InputLabel :value="__('translate.experienceSchoolEnd')"/>
                                                        <VueDatePicker  model-type="yyyy" v-model="education.finish" :locale="lang" auto-apply :id="`educations-${index}-finish`" year-picker />
                                                            <InputError
                                                                :message="form.errors[`educations.${index}.finish`]"
                                                                class="mt-2"/>
                                                        </div>
                                                    <!-- FINISH -->
                                                    <!-- CITY -->
                                                    <div>
                                                        <InputLabel :value="__('translate.City')"/>
                                                        <TextInput
                                                            :id="`educations-${index}-city`"
                                                            v-model="education.city"
                                                            class="mt-1 block w-full"
                                                            type="text"
                                                        />
                                                        <InputError
                                                            :message="form.errors[`educations.${index}.city`]"
                                                            class="mt-2"/>                                                    </div>
                                                    <!-- CITY -->
                                                </div>
                                                <DangerButton class="mt-3 !flex justify-center w-100 mx-auto"
                                                              @click="removeElement(index,form.educations)">
                                                    <svg class="h-4 w-4 mr-2" fill="none"
                                                         stroke="currentColor"
                                                         stroke-width="2" viewBox="0 0 24 24"
                                                         xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"
                                                            stroke-linecap="round"
                                                            stroke-linejoin="round"/>
                                                    </svg>
                                                    {{__('translate.deleteEducation')}}
                                                </DangerButton>
                                            </div>
                                        </template>
                                    </draggable>


                                    <!--                                    EDUCATION-->
                                    <!--                                    COURSES-->
                                    <PrimaryButton class="!flex justify-center w-100 mx-auto mt-3" type="button"
                                                   @click="addCourse" v-if="form.courses.length < 5">{{__('translate.addCourse')}}
                                    </PrimaryButton>
                                    <span v-if="form.courses.length == 5" class="inline-flex items-center justify-center px-4 py-2 bg-red-300 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-red-500 active:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2 transition ease-in-out duration-150 mt-3 !flex justify-center w-1/4 mx-auto">{{__('translate.limitComplete')}}</span>
                                    <span class="text-xs flex items-center justify-center mt-2">{{__('translate.quantity')}}: {{form.courses.length}}/5</span>
                                    <InputError :message="form.errors.courses" class="text-center mt-2"/>
                                    <draggable :list="form.courses" ghost-class="ghost" handle=".handle"
                                               item-key="id">
                                        <template #item="{ element: course,index }">
                                            <div>
                                                <svg class="outline-none h-5 w-5 handle stroke-gray-300 ml-1 mt-1"
                                                     fill="none"
                                                     stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"
                                                     xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M4 6h16M4 10h16M4 14h16M4 18h16" stroke-linecap="round"
                                                          stroke-linejoin="round"></path>
                                                </svg>
                                                <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
                                                    <!-- NAME -->
                                                    <div>
                                                        <InputLabel :value="__('translate.name')"/>
                                                        <TextInput
                                                            :id="`courses-${index}-name`"
                                                            v-model="course.name"
                                                            class="mt-1 block w-full"
                                                            type="text"
                                                        />
                                                        <InputError
                                                            :message="form.errors[`courses.${index}.name`]"
                                                            class="mt-2"/>

                                                    </div>
                                                    <!-- NAME -->

                                                    <!-- ORGANIZATOR -->
                                                    <div>
                                                        <InputLabel :value="__('translate.organizator')"/>
                                                        <TextInput
                                                            :id="`courses-${index}-organizator`"
                                                            v-model="course.organizator"
                                                            class="mt-1 block w-full"
                                                            type="text"
                                                        />
                                                        <InputError
                                                            :message="form.errors[`courses.${index}.organizator`]"
                                                            class="mt-2"/>

                                                    </div>
                                                    <!-- ORGANIZATOR -->
                                                    <!-- DATE -->
                                                    <div>

                                                        <InputLabel :value="__('translate.date')"/>
                                                        <VueDatePicker
                                                            v-model="course.date"
                                                            :locale="lang"
                                                            month-picker
                                                            :format="monthYearFormat"
                                                            auto-apply
                                                            :id="`courses-${index}-date`"
                                                        />


                                                        <InputError
                                                            :message="form.errors[`courses.${index}.date`]"
                                                            class="mt-2"/>
                                                    </div>
                                                    <!-- DATE -->
                                                </div>
                                                <DangerButton class="mt-3 !flex justify-center w-100 mx-auto"
                                                              @click="removeElement(index,form.courses)">
                                                    <svg class="h-4 w-4 mr-2" fill="none"
                                                         stroke="currentColor"
                                                         stroke-width="2" viewBox="0 0 24 24"
                                                         xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"
                                                            stroke-linecap="round"
                                                            stroke-linejoin="round"/>
                                                    </svg>
                                                    {{__('translate.deleteCourse')}}
                                                </DangerButton>
                                            </div>
                                        </template>
                                    </draggable>


                                    <!--                                    COURSES-->
                                    <!--                                    LANGS-->

                                    <PrimaryButton class="!flex justify-center w-100 mx-auto mt-3" type="button"
                                                   @click="addLang" v-if="form.langs.length < 5">{{__('translate.addLang')}}
                                    </PrimaryButton>
                                    <span v-if="form.langs.length == 5" class="inline-flex items-center justify-center px-4 py-2 bg-red-300 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-red-500 active:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2 transition ease-in-out duration-150 mt-3 !flex justify-center w-1/4 mx-auto">{{__('translate.limitComplete')}}</span>
                                    <span class="text-xs flex items-center justify-center mt-2">{{__('translate.quantity')}}: {{form.langs.length}}/5</span>
                                    <InputError :message="form.errors.langs" class="text-center mt-2"/>
                                    <draggable :list="form.langs" ghost-class="ghost" handle=".handle"
                                               item-key="id">
                                        <template #item="{ element: lang,index }">
                                            <div>
                                                <svg class="outline-none h-5 w-5 handle stroke-gray-300 ml-1 mt-1"
                                                     fill="none"
                                                     stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"
                                                     xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M4 6h16M4 10h16M4 14h16M4 18h16" stroke-linecap="round"
                                                          stroke-linejoin="round"></path>
                                                </svg>
                                                <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
                                                    <!-- LANG -->
                                                    <div>
                                                        <InputLabel :value="__('translate.name')"/>
                                                        <multiselect
                                                            :selectLabel="__('translate.selectLabel')"
                                                            :selectedLabel="__('translate.selectedLabel')"
                                                            :deselectLabel="__('translate.deselectLabel')"
                                                            :noOptions="__('translate.noOptions')"
                                                            :noResult="__('translate.noResult')"
                                                            track-by="value"
                                                            v-model="form.cvLang"
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
                                                        <InputError
                                                            :message="form.errors.cvLang"
                                                            class="mt-2"/>

                                                    </div>
                                                    <!-- NAME -->
                                                    <!--                                                    LEVEL-->
                                                    <div v-if="props.langLevels" class="col-span-2">
                                                        <InputLabel :value="__('translate.levelEducation')"/>
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
                                                            v-model="lang.level" :options="props.langLevels">
                                                            <template #noResult>
                                                                <span>{{__('translate.noOptions')}}</span>
                                                            </template>
                                                            <template #noOptions>
                                                                <span>{{__('translate.noResult')}}</span>
                                                            </template>
                                                        </multiselect>
                                                        <InputError
                                                            :message="form.errors[`langs.${index}.level`]"
                                                            class="mt-2"/>
                                                    </div>
                                                    <!--                                                    LEVEL-->
                                                </div>
                                                <DangerButton class="mt-3 !flex justify-center w-100 mx-auto"
                                                              @click="removeElement(index,form.langs)">
                                                    <svg class="h-4 w-4 mr-2" fill="none"
                                                         stroke="currentColor"
                                                         stroke-width="2" viewBox="0 0 24 24"
                                                         xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"
                                                            stroke-linecap="round"
                                                            stroke-linejoin="round"/>
                                                    </svg>
                                                    {{__('translate.deleteLang')}}
                                                </DangerButton>
                                            </div>
                                        </template>
                                    </draggable>
                                    <!--                                    LANGS-->

                                    <!-- SKILLS -->
                                    <div class="col-span-6">
                                        <div>
                                            <InputLabel :value="__('translate.skills')"/>
                                            <multiselect id="tagging" v-model="form.skills" label="name"
                                                         track-by="code" :options="skillsOptions" :max="10" :multiple="true" :taggable="true" @tag="addSkill"
                                                         :selectLabel="__('translate.selectLabel')"
                                                         :selectedLabel="__('translate.selectedLabel')"
                                                         :deselectLabel="__('translate.deselectLabel')"
                                                         :noOptions="__('translate.noOptions')"
                                                         :tag-placeholder="__('translate.tagdeselectLabel')"
                                                         :placeholder="__('translate.tagplaceholder')"
                                                         :noResult="__('translate.noResult')"
                                                         :max-elements="true"
                                            >
                                                <template v-slot:maxElements>{{__('translate.tagmaxElements',{max:10})}}</template>
                                                <template v-slot:noOptions>{{__('translate.noOptions',{max:10})}}</template>
                                            </multiselect>
                                            <InputError :message="form.errors.skills" class="text-center mt-2"/>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        <div v-if="formStep == 3 && form.cv == 1">
                            <div class="col-span-6">
                                <div class="mt-4">
                                    {{__('translate.language')}} Cv
                                    <div>
                                        <multiselect
                                            :selectLabel="__('translate.selectLabel')"
                                            :selectedLabel="__('translate.selectedLabel')"
                                            :deselectLabel="__('translate.deselectLabel')"
                                            :noOptions="__('translate.noOptions')"
                                            :noResult="__('translate.noResult')"
                                            track-by="value"
                                            v-model="form.cvLang"
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
                                </div>
                                <div class="mt-4">
                                    <InputLabel :value="__('translate.cv')" />
                                    <div class="flex justify-between items-center gap-4 flex-wrap">
                                        <div v-for="template in templatesCvsList" class="flex items-center mt-1" :class="{'border-4 border-red-400' : template.id == form.templateCv }">
                                            <input
                                                class="border-gray-300 text-blue-work shadow-sm focus:ring-blue-work mr-2 sr-only"
                                                type="radio" :id="'template-'+template.id" v-model="form.templateCv"
                                                :value="template.id" />
                                            <img @click="form.templateCv = template.id" :src="template.img" alt="cv" class="cursor-pointer h-[250px] transition hover:scale-95">
                                        </div>
                                    </div>
                                    <InputError :message="form.errors.templateCv" class="mt-2"/>
                                </div>
                            </div>
                            <div class="flex items-center justify-center mt-4">
                                <PrimaryButton type="button" @click.prevent="generatePdf(form.templateCv)" v-if="form.cv && formStep == 3 && form.templateCv && form.cvLang" class="w-1/4 flex justify-center" :class="{ 'opacity-25': generateCvLoading }"
                                               :disabled="generateCvLoading">
                                    {{ __('translate.viewCv') }}
                                </PrimaryButton>
                            </div>

                            trzeci krok

                            <div class="flex items-center justify-center my-4">
                                <InputError :message="form.errors.application" class="mt-2"/>
                            </div>
                            <div class="flex items-center justify-center mt-4">
                                <PrimaryButton v-if="form.cv && formStep == 3 && form.cvLang" class="w-1/4 flex justify-center" :class="{ 'opacity-25': form.processing }"
                                               :disabled="form.processing || !isReadyToSubmit">
                                    {{ __('translate.apply') }}
                                </PrimaryButton>
                            </div>
                        </div>


                        <div v-if="formStep == 2 && form.cv == 2">
                            Video
                        </div>

                    <div class="flex items-center justify-center mt-4 gap-4">
                        <PrimaryButton type="button" @click="nextStep" v-if="form.cv && formStep == 1" class="w-1/4 flex justify-center">
                            <span v-if="form.cv && form.cv == 1 && formStep == 1">{{__('translate.generateCv')}}</span>
                            <span v-else-if="form.cv && form.cv == 2 && formStep == 1">{{__('translate.generateCvVideo')}}</span>
                            <span v-else-if="form.cv && form.cv == 3 && formStep == 1">{{__('translate.generateCvAudio')}}</span>
                            <span v-else-if="form.cv && form.cv == 4 && formStep == 1">{{__('translate.testRecruitment')}}</span>
                        </PrimaryButton>
                        <PrimaryButton type="button" @click="prevStep" v-if="form.cv && formStep == 2" class="w-1/4 flex justify-center">
                            {{__('translate.previousStep')}}
                        </PrimaryButton>
                        <PrimaryButton type="button" @click="nextStep" v-if="form.cv && formStep == 2" class="w-1/4 flex justify-center">
                            <span>{{__('translate.chosetemplate')}}</span>
                        </PrimaryButton>
                        <PrimaryButton type="button" @click="prevStep" v-if="form.cv && formStep == 3" class="w-1/4 flex justify-center">
                            {{__('translate.previousStep')}}
                        </PrimaryButton>
                    </div>
                </form>
                </div>
            </div>
        </div>
    </FrontLayout>
</template>
<style lang="scss">
.ghost {
    background:#e5e7ebb3;
}
.handle {
    cursor: pointer;
}
.dp__input{
    padding-bottom:8px
}
</style>
