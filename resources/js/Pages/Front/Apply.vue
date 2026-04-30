<script setup>
import FrontLayout from "@/Layouts/FrontLayout.vue";
import {Link, useForm, usePage} from '@inertiajs/vue3';
import {computed, onMounted, ref, watch} from "vue";
import PrimaryButton from "@/Components/PrimaryButton.vue";
import InputError from "@/Components/InputError.vue";
import TextInput from "@/Components/TextInput.vue";
import InputLabel from "@/Components/InputLabel.vue";
import Dropdown from "@/Components/Dropdown.vue";
import DialogModal from "@/Components/DialogModal.vue";
import SecondaryButton from "@/Components/SecondaryButton.vue";
import {usePermission} from "@/Composables/usePermission.js";
import draggable from 'vuedraggable/src/vuedraggable'
import Multiselect from 'vue-multiselect'
import Checkbox from "@/Components/Checkbox.vue";
import moment from "moment";
import VideoRecorder from "@/Pages/Front/VideoRecorder.vue";
import AudioRecorderNew from "@/Pages/Front/AudioRecorderNew.vue";
import __ from '@/lang.js';
const today = new Date();
// Utils: podstawienie danych firmy w miejsce wskaźników --firm--, --city--, --street--
const companyName = computed(() => {
    const p = props?.project ?? {};
    // Priorytet dla użytkownika (user_id -> user.name) wg wytycznych
    return (
        p.user?.name ||
        p.recruit?.name ||
        p.external_company?.name ||
        ''
    );
});

const companyCity = computed(() => {
    return props?.project?.user?.firm?.city || '';
});

const companyStreet = computed(() => {
    const firm = props?.project?.user?.firm;
    if (!firm) return '';
    const street = firm.street || '';
    const number = firm.number || '';
    return `${street} ${number}`.trim();
});

function escapeHtml(str) {
    if (typeof str !== 'string') { return ''; }
    return str
        .replaceAll('&', '&amp;')
        .replaceAll('<', '&lt;')
        .replaceAll('>', '&gt;')
        .replaceAll('"', '&quot;')
        .replaceAll("'", '&#039;');
}

function formatAgreementText(text) {
    if (!text || typeof text !== 'string') { return text ?? ''; }
    const name = companyName.value || '';
    const city = companyCity.value || '';
    const street = companyStreet.value || '';

    return text
        .replaceAll('--firm--', '<strong class="font-semibold">' + escapeHtml(name) + '</strong>')
        .replaceAll('--city--', '<strong class="font-semibold">' + escapeHtml(city) + '</strong>')
        .replaceAll('--street--', '<strong class="font-semibold">' + escapeHtml(street) + '</strong>');
}

const props = defineProps({
    project: Object,
    professionCv: Object,
    agreements: Array,
    levelEducations: Array,
    langLevels: Array
});
const optionsPositions = ref([]);
const formStep = ref(1);
const isReadyToSubmit = ref(true);
const generateCvLoading = ref(false);
const showAgreementsModal = ref(false);
const captchaText = ref('');
const isClient = ref(false);

const scrollToError = () => {
    setTimeout(() => {
        // Szukamy wszystkich elementów z błędami, które są widoczne
        const errors = Array.from(document.querySelectorAll('.text-red-600'));
        const firstVisibleError = errors.find(el => {
            // Sprawdzamy czy element lub jego rodzic (InputError) nie jest ukryty przez v-show (display: none)
            return el.offsetParent !== null;
        });

        if (firstVisibleError) {
            firstVisibleError.scrollIntoView({
                behavior: 'smooth',
                block: 'center',
                inline: 'nearest'
            });
        }
    }, 250); // Zwiększony timeout, aby dać Vue więcej czasu na update DOM i animacje
};

const isAllAgreementsSelected = computed(() => {
    const requiredAgreementIds = [];
    props.agreements.forEach(agreement => {
        if (agreement.is_required) {
            requiredAgreementIds.push(agreement.id.toString());
        }
        if (agreement.children) {
            agreement.children.forEach(child => {
                if (child.is_required) {
                    requiredAgreementIds.push(child.id.toString());
                }
            });
        }
    });

    if (requiredAgreementIds.length === 0) return true;

    return requiredAgreementIds.every(id => form.agreements.includes(id));
});

const toggleAllAgreements = () => {
    if (isAllAgreementsSelected.value) {
        form.agreements = [];
    } else {
        const requiredAgreementIds = [];
        props.agreements.forEach(agreement => {
            if (agreement.is_required) {
                requiredAgreementIds.push(agreement.id.toString());
            }
            if (agreement.children) {
                agreement.children.forEach(child => {
                    if (child.is_required) {
                        requiredAgreementIds.push(child.id.toString());
                    }
                });
            }
        });
        form.agreements = requiredAgreementIds;
    }
};

const toggleAgreement = (agreement, checked) => {
    if (!agreement.children) return;

    agreement.children.forEach(child => {
        const childId = child.id.toString();
        const index = form.agreements.indexOf(childId);
        if (checked && index === -1) {
            form.agreements.push(childId);
        } else if (!checked && index !== -1) {
            form.agreements.splice(index, 1);
        }
    });
};

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
    isClient.value = true;
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
        preserveScroll: true,
        onSuccess: () => {
            form.reset();
        },
        onError: (errors) => {
            if (errors.throttle) {
                form.setError('captcha', errors.throttle);
            }
            loadCaptcha();
            scrollToError();
        }
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

const captchaCopied = ref(false);
const copyCaptcha = () => {
    if (!isClient.value || !captchaText.value) return;
    navigator.clipboard.writeText(captchaText.value).then(() => {
        captchaCopied.value = true;
        setTimeout(() => {
            captchaCopied.value = false;
        }, 2000);
    }).catch(err => {
        console.error('Błąd podczas kopiowania: ', err);
    });
};
const randomColor = () => {
    const colors = ['#00a0e3', '#e31e24', '#0d2a52'];
    return colors[Math.floor(Math.random() * colors.length)];
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
        preserveScroll: true,
        onSuccess: async () => {
            formStep.value++;
            form.clearErrors();
            if (user.value && hasRole('worker') && (form.cv == 1 && form.cvStandardType == 2) && formStep.value == 2) {
                const response = await axios.get(route('front.getChildsCategoryWitoutDetail'));
                optionsPositions.value = response.data;
            }
        },
        onError: () => {
            scrollToError();
        }
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
                if (isClient.value) {
                    const pdfWindow = window.open(response.data.url, '_blank');
                }
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
    <FrontLayout :title="__('translate.aplications')" type="website">
        <div class="py-12 bg-gray-50/50 min-h-screen">
            <div class="max-w-[1300px] mx-auto py-6 px-4 sm:px-6 lg:px-8">
                <!-- HEADER CARD -->
                <div class="relative bg-white rounded-[3rem] shadow-xl shadow-blue-900/5 border border-gray-100 p-10 mb-8">
                    <div class="flex flex-col md:flex-row items-center justify-between gap-6">
                        <div class="flex items-center gap-6">
                            <div class="w-16 h-16 bg-blue-50 rounded-2xl flex items-center justify-center text-[#00a0e3] shrink-0">
                                <svg class="w-8 h-8" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                                </svg>
                            </div>
                            <div>
                                <h1 class="text-2xl font-black text-[#0A2C5C] uppercase tracking-tight leading-tight">
                                    {{ project.title[usePage().props.language] }}
                                </h1>
                                <p class="text-[10px] font-black text-gray-400 uppercase tracking-widest mt-1">
                                    {{ project.category.allTranslations.title[usePage().props.language] }}
                                </p>
                            </div>
                        </div>
                        <div class="flex flex-wrap gap-3">
                            <Link :href="route('front.projects')"
                                  class="px-6 py-3 bg-white border border-gray-100 text-gray-500 text-[10px] font-black uppercase tracking-widest rounded-2xl hover:bg-gray-50 shadow-sm transition-all hover:-translate-y-0.5 flex items-center gap-2">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M10 19l-7-7m0 0l7-7m-7 7h18" />
                                </svg>
                                {{ __('translate.backToList') }}
                            </Link>
                            <Link :href="route('front.projects.single',project)"
                                  class="px-6 py-3 bg-[#0A2C5C] text-white text-[10px] font-black uppercase tracking-widest rounded-2xl hover:bg-blue-800 transition-all shadow-lg shadow-blue-900/20 hover:-translate-y-0.5 flex items-center gap-2">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                </svg>
                                {{ __('translate.backToProject') }}
                            </Link>
                        </div>
                    </div>
                </div>

                <div class="bg-white rounded-[3rem] shadow-xl shadow-blue-900/5 border border-gray-100 p-10">
                    <!-- Project Stats Summary -->
                    <div class="mb-12">
                        <div class="flex items-center gap-4 mb-8">
                            <h3 class="text-[10px] font-black text-[#0A2C5C] uppercase tracking-[0.2em]">{{ __('translate.projectDetails') }}</h3>
                            <div class="h-px flex-1 bg-gray-100"></div>
                        </div>

                        <div class="grid grid-cols-2 md:grid-cols-4 gap-8">
                            <div class="bg-gray-50 rounded-2xl p-5 border border-gray-100/50">
                                <dt class="text-[8px] font-black text-gray-400 uppercase tracking-widest mb-1">
                                    {{ __('translate.projectID') }}
                                </dt>
                                <dd class="text-sm font-black text-[#0A2C5C] flex items-center gap-2">
                                    #{{ project.id }}
                                </dd>
                            </div>
                            <div class="bg-gray-50 rounded-2xl p-5 border border-gray-100/50">
                                <dt class="text-[8px] font-black text-gray-400 uppercase tracking-widest mb-1">
                                    {{ __('translate.aplicationsType') }}
                                </dt>
                                <dd class="text-sm font-black text-[#0A2C5C] truncate uppercase">
                                    {{
                                        user && hasRole('worker') ? __('translate.aplicationsWorker') : __('translate.applyWithoutLogin')
                                    }}
                                </dd>
                            </div>
                            <div class="bg-gray-50 rounded-2xl p-5 border border-gray-100/50">
                                <dt class="text-[8px] font-black text-gray-400 uppercase tracking-widest mb-1">
                                    Wymagane CV
                                </dt>
                                <dd class="text-sm font-black text-[#0A2C5C] uppercase">
                                    {{
                                        form.cv == 1 ? __('translate.cv_classic') : (form.cv == 2 ? __('translate.cv_video') : (form.cv == 3 ? __('translate.cv_audio') : __('translate.cv')))
                                    }}
                                </dd>
                            </div>
                            <div class="bg-gray-50 rounded-2xl p-5 border border-gray-100/50" v-if="project.category.parent">
                                <dt class="text-[8px] font-black text-gray-400 uppercase tracking-widest mb-1">
                                    Główna kategoria
                                </dt>
                                <dd class="text-sm font-black text-[#0A2C5C] truncate uppercase">
                                    {{ project.category.parent.title }}
                                </dd>
                            </div>
                        </div>
                    </div>
                    <form @submit.prevent="submit">
                        <div v-if="formStep == 1" class="space-y-12 animate-fade-in">
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                                <div class="space-y-2">
                                    <InputLabel for="name" :value="__('translate.nameUser')"
                                                class="block text-[10px] font-black text-gray-400 mb-2 uppercase tracking-widest ml-1"/>
                                    <TextInput
                                        id="name"
                                        v-model="form.name"
                                        autofocus
                                        type="text"
                                        :placeholder="__('translate.nameUser')"
                                        class="w-full !rounded-2xl !bg-gray-50 !border-transparent focus:!bg-white focus:!ring-[#00a0e3]/10 focus:!border-[#00a0e3] !py-4 transition-all"
                                    />
                                    <InputError :message="form.errors.name" class="mt-2 ml-2 text-[10px] font-bold uppercase tracking-widest"/>
                                </div>
                                <div class="space-y-2">
                                    <InputLabel for="surname" :value="__('translate.surname')"
                                                class="block text-[10px] font-black text-gray-400 mb-2 uppercase tracking-widest ml-1"/>
                                    <TextInput
                                        id="surname"
                                        v-model="form.surname"
                                        type="text"
                                        :placeholder="__('translate.surname')"
                                        class="w-full !rounded-2xl !bg-gray-50 !border-transparent focus:!bg-white focus:!ring-[#00a0e3]/10 focus:!border-[#00a0e3] !py-4 transition-all"
                                    />
                                    <InputError :message="form.errors.surname" class="mt-2 ml-2 text-[10px] font-bold uppercase tracking-widest"/>
                                </div>
                                <div class="space-y-2">
                                    <InputLabel for="phone" :value="__('translate.phone')"
                                                class="block text-[10px] font-black text-gray-400 mb-2 uppercase tracking-widest ml-1"/>
                                    <TextInput
                                        id="phone"
                                        v-model="form.phone"
                                        type="text"
                                        placeholder="+48..."
                                        class="w-full !rounded-2xl !bg-gray-50 !border-transparent focus:!bg-white focus:!ring-[#00a0e3]/10 focus:!border-[#00a0e3] !py-4 transition-all"
                                    />
                                    <InputError :message="form.errors.phone" class="mt-2 ml-2 text-[10px] font-bold uppercase tracking-widest"/>
                                </div>
                                <div class="space-y-2">
                                    <InputLabel for="email" :value="__('translate.email')"
                                                class="block text-[10px] font-black text-gray-400 mb-2 uppercase tracking-widest ml-1"/>
                                    <TextInput
                                        id="email"
                                        v-model="form.email"
                                        type="text"
                                        :placeholder="__('translate.email')"
                                        class="w-full !rounded-2xl !bg-gray-50 !border-transparent focus:!bg-white focus:!ring-[#00a0e3]/10 focus:!border-[#00a0e3] !py-4 transition-all"
                                    />
                                    <InputError :message="form.errors.email" class="mt-2 ml-2 text-[10px] font-bold uppercase tracking-widest"/>
                                </div>
                            </div>
                            <div class="col-span-2 pt-4">
                                <InputLabel for="title" :value="__('translate.files')"
                                            class="block text-[10px] font-black text-gray-400 mb-4 uppercase tracking-widest ml-1"/>
                                <div
                                    class="rounded-[2.5rem] border border-gray-100 p-4 bg-gray-50/50 overflow-hidden hover:border-[#00a0e3] transition-colors shadow-inner">
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
                                <div class="col-span-6" v-if="project.cv && user">
                                    <div class="mt-8">
                                        <div class="flex items-center gap-3 mb-6">
                                            <div class="p-1.5 bg-blue-50 rounded-lg">
                                                <svg class="w-4 h-4 text-blue-600"
                                                     xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                     stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                          d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                                                </svg>
                                            </div>
                                            <InputLabel :value="__('translate.cvTypeSelect')"
                                                        class="font-black text-[10px] text-gray-400 uppercase tracking-widest ml-1"/>
                                        </div>

                                        <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
                                            <div v-for="cv in project.cv" :key="cv.id"
                                                 @click="form.cv = cv.id"
                                                 :class="[
                                                     'relative flex flex-col items-center justify-center p-6 rounded-3xl border-2 cursor-pointer transition-all duration-300 group',
                                                     form.cv == cv.id
                                                         ? 'border-[#00a0e3] bg-blue-50/30 ring-4 ring-[#00a0e3]/5 shadow-lg'
                                                         : 'border-gray-100 bg-gray-50 hover:border-gray-200 hover:bg-white hover:shadow-md'
                                                 ]"
                                            >
                                                <!-- Checkmark icon for active state -->
                                                <div v-if="form.cv == cv.id"
                                                     class="absolute top-4 right-4 bg-[#00a0e3] text-white p-1 rounded-full shadow-sm animate-fade-in">
                                                    <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7" />
                                                    </svg>
                                                </div>

                                                <div class="mb-4 relative">
                                                    <!-- Icon from assets based on CV type -->
                                                    <div :class="[
                                                        'w-16 h-16 rounded-2xl flex items-center justify-center transition-all duration-300',
                                                        form.cv == cv.id ? 'bg-[#00a0e3] shadow-inner scale-110' : 'bg-white text-gray-400 group-hover:bg-blue-50 group-hover:text-[#00a0e3]'
                                                    ]">
                                                        <img v-if="cv.id == 1" src="/images/icons/cv-classic.svg" alt=""
                                                             class="w-10 h-10" />
                                                        <img v-else-if="cv.id == 2" src="/images/icons/cv-video.svg" alt=""
                                                             class="w-10 h-10" />
                                                        <img v-else-if="cv.id == 3" src="/images/icons/cv-audio.svg" alt=""
                                                             class="w-10 h-10" />
                                                        <svg v-else class="w-10 h-10" :class="form.cv == cv.id ? 'text-white' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                                                        </svg>
                                                    </div>
                                                </div>

                                                <span :class="[
                                                    'text-xs font-black uppercase tracking-widest text-center transition-colors duration-300',
                                                    form.cv == cv.id ? 'text-[#00a0e3]' : 'text-gray-500 group-hover:text-gray-900'
                                                ]">
                                                    {{ cv.allTranslations.name[usePage().props.language] }}
                                                </span>
                                            </div>
                                        </div>

                                        <div class="flex items-center justify-between mt-4 px-2">
                                            <InputError :message="form.errors.cv" class="m-0 text-[10px] font-bold uppercase tracking-widest"/>

                                            <button type="button" class="text-[10px] font-black uppercase tracking-widest text-gray-400 hover:text-red-500 transition-colors flex items-center gap-1.5"
                                                    v-if="form.cv" @click="form.cv=''">
                                                <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                                </svg>
                                                {{ __('translate.cvTypeReset') }}
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-span-6 space-y-4 pt-6">
                                    <div class="flex items-center gap-3 mb-2">
                                        <div class="p-1.5 bg-blue-50 rounded-lg">
                                            <svg class="w-4 h-4 text-blue-600"
                                                 xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                 stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                      d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                                            </svg>
                                        </div>
                                        <InputLabel for="captcha" :value="__('translate.verification')"
                                                    class="font-bold text-gray-700 uppercase tracking-widest text-xs"/>
                                    </div>

                                    <div
                                        class="p-6 bg-gray-50 rounded-3xl border border-gray-100 relative">
                                        <div class="flex flex-col sm:flex-row items-center gap-6">
                                            <div class="relative group">
                                                <div
                                                    class="absolute -inset-1 bg-gradient-to-r from-blue-500 to-indigo-500 rounded-2xl blur opacity-20 group-hover:opacity-40 transition"></div>
                                                <p class="relative bg-white rounded-xl p-3 px-6 text-center shadow-sm border border-gray-100 flex items-center justify-center min-w-[120px]">
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
                                                        class="ml-4 p-1.5 text-gray-400 hover:text-blue-500 transition-colors bg-gray-50 rounded-lg shadow-sm"
                                                        :title="__('translate.copy')"
                                                    >
                                                        <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 5H6a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2v-1M8 5a2 2 0 002 2h2a2 2 0 002-2M8 5a2 2 0 012-2h2a2 2 0 012 2m0 0h2a2 2 0 012 2v3m2 4H10m0 0l3-3m-3 3l3 3" />
                                                        </svg>
                                                    </button>
                                                </p>
                                                <transition
                                                    enter-active-class="transition duration-300 ease-out"
                                                    enter-from-class="transform -translate-y-2 opacity-0"
                                                    enter-to-class="transform translate-y-0 opacity-100"
                                                    leave-active-class="transition duration-200 ease-in"
                                                    leave-from-class="transform translate-y-0 opacity-100"
                                                    leave-to-class="transform -translate-y-2 opacity-0"
                                                >
                                                    <div v-if="captchaCopied" class="absolute -bottom-6 left-1/2 -translate-x-1/2 whitespace-nowrap">
                                                        <span class="text-[10px] font-black text-green-500 uppercase tracking-widest bg-white px-2 py-0.5 rounded-full shadow-sm border border-green-50">{{ __('translate.copied') }}</span>
                                                    </div>
                                                </transition>
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
                                                <p class="text-[10px] text-gray-500 uppercase tracking-tight font-medium pl-1">
                                                    Wprowadź kod z obrazka obok
                                                </p>
                                            </div>
                                        </div>
                                        <InputError :message="form.errors.captcha" class="mt-3 text-[10px] font-bold uppercase tracking-widest ml-1"/>
                                    </div>
                                </div>
                                <div v-if="props.agreements && props.agreements.length > 0" class="col-span-6 pt-8">
                                    <div
                                        class="p-8 bg-gray-50/50 rounded-[2rem] border border-gray-100 shadow-inner">
                                        <InputLabel for="agreements" :value="__('translate.agreements')"
                                                    class="mb-6 font-black text-[#0A2C5C] uppercase tracking-[0.2em] text-[10px] flex items-center gap-2">
                                            <span class="w-1.5 h-1.5 bg-[#00a0e3] rounded-full animate-pulse"></span>
                                            {{ __('translate.agreements') }}
                                        </InputLabel>

                                        <div class="mb-4 flex items-start gap-4 p-5 bg-white rounded-2xl border border-gray-100 hover:border-[#00a0e3] transition-all shadow-sm group">
                                            <div class="text-xs font-black text-gray-500 group-hover:text-[#0A2C5C] transition-colors pt-0.5 leading-relaxed uppercase tracking-widest flex items-center gap-1.5 flex-wrap">
                                                <div @click="toggleAllAgreements" class="relative mt-1 cursor-pointer">
                                                    <Checkbox :checked="isAllAgreementsSelected" name="agree" class="sr-only" />
                                                    <div class="w-11 h-6 bg-gray-100 rounded-full transition-all duration-300 border border-gray-200/50 group-hover:bg-gray-200"></div>
                                                    <div class="absolute left-1 top-1 w-4 h-4 rounded-full transition-all duration-300 shadow-sm" :class="isAllAgreementsSelected ? 'translate-x-5 bg-work-main' : 'bg-white'"></div>
                                                </div>
                                                <span class="cursor-pointer" @click="toggleAllAgreements">{{ __('translate.agree') }}</span>
                                                <button
                                                    type="button"
                                                    class="text-[#00AEEF] hover:underline cursor-pointer decoration-2 underline-offset-4"
                                                    @click.stop="showAgreementsModal = true"
                                                >
                                                    {{ __('translate.agreements') }}
                                                </button>

                                                <DialogModal :show="showAgreementsModal" @close="showAgreementsModal = false">
                                                    <template #title>
                                                        <span class="uppercase font-black text-[#0A2C5C] tracking-widest">{{ __('translate.agreements') }}</span>
                                                    </template>
                                                    <template #content>
                                                        <div class="space-y-8 max-h-[60vh] overflow-y-auto pr-4 custom-scrollbar">
                                                            <div v-for="(agreement, index) in props.agreements" :key="agreement.id" class="group/item !mt-0 !pt-0">
                                                                <div class="flex items-start gap-4 p-4 rounded-3xl transition-all duration-300 hover:bg-gray-50 border border-transparent hover:border-gray-100"
                                                                     :class="{'bg-red-50/50 border-red-100': form.errors.agreements && agreement.is_required && !form.agreements.includes(agreement.id.toString())}">
                                                                    <div class="pt-0.5">
                                                                        <Checkbox
                                                                            v-model:checked="form.agreements"
                                                                            :value="agreement.id.toString()"
                                                                            :id="'agreement-' + agreement.id"
                                                                            @change="(checked) => toggleAgreement(agreement, checked)"
                                                                            class="w-5 h-5 !rounded-lg !text-[#00a0e3] !border-gray-300 focus:!ring-[#00a0e3]/20"
                                                                            :class="{'!border-red-500 !ring-red-500': form.errors.agreements && agreement.is_required && !form.agreements.includes(agreement.id.toString())}"
                                                                        />
                                                                    </div>
                                                                    <div class="flex-1 space-y-3">
                                                                        <label :for="'agreement-' + agreement.id" class="text-sm text-gray-600 leading-relaxed font-medium normal-case cursor-pointer block [&_a]:underline [&_a]:text-blue-600 hover:[&_a]:text-blue-800 transition-colors"
                                                                               :class="{'text-red-600': form.errors.agreements && agreement.is_required && !form.agreements.includes(agreement.id.toString())}">
                                                                            <span v-html="formatAgreementText(agreement.description[lang] || agreement.description['pl'])"></span>
                                                                        </label>
                                                                        <!-- Dzieci (zagnieżdżone) -->
                                                                        <div v-if="agreement.children && agreement.children.length > 0" class="ml-6 mt-4 space-y-4 border-l-2 border-gray-100 pl-4">
                                                                            <div v-for="child in agreement.children" :key="child.id" class="group/child flex items-start gap-3">
                                                                                <div class="pt-0.5">
                                                                                    <Checkbox
                                                                                        v-model:checked="form.agreements"
                                                                                        :value="child.id.toString()"
                                                                                        :id="'agreement-' + child.id"
                                                                                        class="w-4 h-4 !rounded-md !text-[#00a0e3] !border-gray-300 focus:!ring-[#00a0e3]/20"
                                                                                        :class="{'!border-red-500 !ring-red-500': form.errors.agreements && child.is_required && !form.agreements.includes(child.id.toString())}"
                                                                                    />
                                                                                </div>
                                                                                <label :for="'agreement-' + child.id" class="text-xs text-gray-500 leading-relaxed font-medium normal-case cursor-pointer block [&_a]:underline [&_a]:text-blue-600 hover:[&_a]:text-blue-800 transition-colors"
                                                                                       :class="{'text-red-600': form.errors.agreements && child.is_required && !form.agreements.includes(child.id.toString())}">
                                                                                    <span v-html="formatAgreementText(child.description[lang] || child.description['pl'])"></span>
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                        <!-- Help Text (Optional) -->
                                                                        <div v-if="agreement.help_text && (agreement.help_text[lang] || agreement.help_text['pl'])"
                                                                             class="mt-3 p-4 bg-blue-50/50 rounded-2xl border border-blue-100/50 text-[11px] font-medium text-gray-500 italic leading-relaxed [&_a]:underline [&_a]:text-blue-600 hover:[&_a]:text-blue-800 transition-colors"
                                                                        >
                                                                            <div v-html="formatAgreementText(agreement.help_text[lang] || agreement.help_text['pl'])"></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div v-if="index < props.agreements.length - 1" class="my-4 mx-8 border-b border-gray-50"></div>
                                                            </div>
                                                        </div>
                                                    </template>
                                                    <template #footer>
                                                        <SecondaryButton @click="showAgreementsModal = false">
                                                            {{ __('translate.close') }}
                                                        </SecondaryButton>
                                                    </template>
                                                </DialogModal>
                                            </div>
                                        </div>
                                        <InputError :message="form.errors.agreements" class="mt-4 text-[10px] font-bold uppercase tracking-widest ml-1"/>
                                    </div>
                                </div>
                                <div v-else-if="form.errors.agreements" class="col-span-6 pt-2 px-8">
                                    <InputError :message="form.errors.agreements" class="text-[10px] font-bold uppercase tracking-widest"/>
                                </div>

                                <div
                                    class="flex flex-col items-center justify-center pt-10 pb-6 border-t border-gray-50 mt-8">
                                    <InputError :message="form.errors.application"
                                                class="mb-6 text-center text-[10px] font-black uppercase tracking-widest bg-red-50 text-red-600 px-6 py-3 rounded-full border border-red-100"/>

                                    <!-- Przycisk Dalej/Aplikuj widoczny w kroku 1 -->
                                    <PrimaryButton
                                        v-if="formStep == 1 && (!user || (user && hasRole('worker') && form.cv) || (user && !hasRole('worker')))"
                                        :type="!form.cv ? 'submit' : 'button'"
                                        @click="form.cv ? nextStep() : null"
                                        class="w-full sm:w-[300px] !py-5 !rounded-2xl !bg-[#0A2C5C] hover:!bg-blue-800 !text-[10px] font-black !uppercase !tracking-widest shadow-lg shadow-blue-900/20 flex justify-center items-center gap-3 transition-all transform active:scale-95"
                                        :disabled="form.processing"
                                    >
                                        <template v-if="!form.cv">
                                            <span>{{ __('translate.apply') }}</span>
                                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="3">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                            </svg>
                                        </template>
                                        <template v-else>
                                            <span v-if="form.cv == 1">{{ __('translate.generateCv') }}</span>
                                            <span v-else-if="form.cv == 2">{{ __('translate.generateCvVideo') }}</span>
                                            <span v-else-if="form.cv == 3">{{ __('translate.generateCvAudio') }}</span>
                                            <span v-else-if="form.cv == 4">{{ __('translate.testRecruitment') }}</span>
                                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="3">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                      d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                                            </svg>
                                        </template>
                                    </PrimaryButton>
                                </div>
                            </div>
                        </div>
                        <div v-if="formStep == 2 && form.cv == 1" class="animate-fade-in space-y-12">
                            <div
                                class="p-10 bg-gray-50/50 rounded-[2.5rem] border border-gray-100 shadow-inner">
                                <InputLabel value="Jak chcesz dostarczyć CV?"
                                            class="mb-8 font-black text-[#0A2C5C] uppercase tracking-[0.2em] text-[10px] flex items-center gap-2">
                                    <span class="w-1.5 h-1.5 bg-[#00a0e3] rounded-full animate-pulse"></span>
                                    Wybierz metodę
                                </InputLabel>

                                <ul class="grid w-full gap-8 md:grid-cols-2">
                                    <li>
                                        <input checked name="type" v-model="form.cvStandardType" type="radio"
                                               id="firm" value="1" class="hidden peer"/>
                                        <label for="firm"
                                               class="inline-flex items-center justify-between w-full p-8 text-gray-500 bg-white border-2 border-gray-100 rounded-[2rem] cursor-pointer peer-checked:border-[#00a0e3] peer-checked:bg-blue-50/30 peer-checked:text-[#0A2C5C] hover:bg-gray-50 transition-all duration-300 shadow-sm hover:shadow-md group">
                                            <div class="flex items-center gap-6">
                                                <div
                                                    class="p-4 bg-gray-50 rounded-2xl group-peer-checked:bg-blue-100 transition-colors">
                                                    <svg class="w-8 h-8" xmlns="http://www.w3.org/2000/svg"
                                                         fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                              stroke-width="2"
                                                              d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                                                    </svg>
                                                </div>
                                                <div>
                                                    <div class="w-full text-xl font-black uppercase tracking-tight">
                                                        Wgraj plik
                                                    </div>
                                                    <div
                                                        class="w-full text-[10px] font-bold opacity-60 uppercase tracking-[0.2em] mt-1">
                                                        PDF, DOC, DOCX
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="opacity-0 peer-checked:opacity-100 transition-opacity">
                                                <div
                                                    class="w-8 h-8 bg-[#00a0e3] rounded-full flex items-center justify-center shadow-lg shadow-blue-500/40">
                                                    <svg class="w-5 h-5 text-white" fill="none"
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
                                               class="inline-flex items-center justify-between w-full p-8 text-gray-500 bg-white border-2 border-gray-100 rounded-[2rem] cursor-pointer peer-checked:border-[#00a0e3] peer-checked:bg-blue-50/30 peer-checked:text-[#0A2C5C] hover:bg-gray-50 transition-all duration-300 shadow-sm hover:shadow-md group">
                                            <div class="flex items-center gap-4">
                                                <div
                                                    class="p-4 bg-gray-50 rounded-2xl group-peer-checked:bg-blue-100 transition-colors">
                                                    <svg class="w-8 h-8" xmlns="http://www.w3.org/2000/svg"
                                                         fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                              stroke-width="2"
                                                              d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/>
                                                    </svg>
                                                </div>
                                                <div>
                                                    <div class="w-full text-xl font-black uppercase tracking-tight">
                                                        Kreator CV
                                                    </div>
                                                    <div
                                                        class="w-full text-[10px] font-bold opacity-60 uppercase tracking-[0.2em] mt-1">
                                                        Wypełnij formularz
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="opacity-0 peer-checked:opacity-100 transition-opacity">
                                                <div
                                                    class="w-8 h-8 bg-[#00a0e3] rounded-full flex items-center justify-center shadow-lg shadow-blue-500/40">
                                                    <svg class="w-5 h-5 text-white" fill="none"
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
                                            class="mt-4 text-[10px] font-bold uppercase tracking-widest text-center"/>
                            </div>

                            <div v-if="professionCv"
                                 class="p-6 bg-blue-50/30 rounded-3xl border border-blue-100/50">
                                <InputLabel for="cvcvFile" :value="__('translate.fileCv')"
                                            class="mb-4 font-black text-blue-900 uppercase tracking-widest text-[10px]"/>
                                <div class="relative group">
                                    <div
                                        class="absolute -inset-0.5 bg-gradient-to-r from-blue-500 to-indigo-500 rounded-[1.5rem] blur opacity-10 group-hover:opacity-20 transition duration-500"></div>
                                    <label
                                        :class="[
                                            'relative flex items-center gap-6 cursor-pointer bg-white border-2 rounded-[1.5rem] p-5 transition-all duration-300 select-none shadow-sm',
                                            form.isSelected ? 'border-blue-500 shadow-blue-100' : 'border-white hover:border-blue-200'
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
                                            class="flex items-center justify-center w-16 h-16 bg-red-50 text-red-600 rounded-2xl group-hover:scale-110 transition-transform duration-500">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none"
                                                 viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                      stroke-width="2"
                                                      d="M7 21h10a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                                            </svg>
                                        </div>

                                        <div class="flex-1">
                                            <span
                                                class="block text-lg font-black text-gray-900 uppercase tracking-tight">{{
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
                                                    class="text-xs font-black text-blue-600 uppercase tracking-widest hover:underline decoration-2 underline-offset-4"
                                                    @click.stop
                                                >
                                                    {{ __('translate.getPdf') }}
                                                </a>
                                            </div>
                                        </div>

                                        <div
                                            class="w-8 h-8 rounded-full border-2 transition-all flex items-center justify-center"
                                            :class="form.isSelected ? 'bg-blue-600 border-blue-600 scale-110 shadow-lg shadow-blue-500/40' : 'bg-gray-50 border-gray-100'">
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
                                    class="p-6 bg-gray-50/50 rounded-3xl border border-gray-100">
                                    <InputLabel for="cvcvFile" :value="__('translate.fileCv')"
                                                class="mb-4 font-black text-gray-800 uppercase tracking-widest text-[10px]"/>
                                    <div
                                        class="rounded-2xl overflow-hidden border-2 border-dashed border-gray-200 p-1">
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
                                 class="space-y-12">
                                <div
                                    class="grid grid-cols-1 md:grid-cols-4 gap-8 p-10 bg-gray-50/50 rounded-[2.5rem] border border-gray-100 shadow-inner">
                                    <div class="col-span-full mb-4">
                                        <div class="flex items-center gap-4">
                                            <h3 class="text-[10px] font-black text-[#0A2C5C] uppercase tracking-[0.2em]">Informacje o Tobie</h3>
                                            <div class="h-px flex-1 bg-gray-200"></div>
                                        </div>
                                    </div>
                                    <div class="md:col-span-1 space-y-2">
                                        <InputLabel for="birthday" :value="__('translate.birthdayDate')"
                                                    class="block text-[10px] font-black text-gray-400 mb-2 uppercase tracking-widest ml-1"/>
                                        <VueDatePicker model-type="dd-MM-yyyy" format="dd-MM-yyyy"
                                                       :enable-time-picker="false" v-model="form.birthday"
                                                       :locale="lang" auto-apply id="birthday"
                                                       :teleport="true"
                                                       :max-date="today"
                                                       input-class-name="dp__input_reg"
                                        />
                                        <InputError :message="form.errors.birthday"
                                                    class="mt-2 ml-2 text-[10px] font-bold uppercase tracking-widest"/>
                                    </div>
                                    <div class="md:col-span-1 space-y-2">
                                        <InputLabel for="city" :value="__('translate.City')"
                                                    class="block text-[10px] font-black text-gray-400 mb-2 uppercase tracking-widest ml-1"/>
                                        <TextInput
                                            id="city"
                                            v-model="form.city"
                                            type="text"
                                            :placeholder="__('translate.City')"
                                            class="w-full !rounded-2xl !bg-gray-50 !border-transparent focus:!bg-white focus:!ring-[#00a0e3]/10 focus:!border-[#00a0e3] !py-4 transition-all"
                                        />
                                        <InputError :message="form.errors.city" class="mt-2 ml-2 text-[10px] font-bold uppercase tracking-widest"/>
                                    </div>
                                    <div class="md:col-span-1 space-y-2">
                                        <InputLabel for="postal" :value="__('translate.Postal')"
                                                    class="block text-[10px] font-black text-gray-400 mb-2 uppercase tracking-widest ml-1"/>
                                        <TextInput
                                            id="postal"
                                            v-model="form.postal"
                                            type="text"
                                            placeholder="00-000"
                                            class="w-full !rounded-2xl !bg-gray-50 !border-transparent focus:!bg-white focus:!ring-[#00a0e3]/10 focus:!border-[#00a0e3] !py-4 transition-all"
                                        />
                                        <InputError :message="form.errors.postal"
                                                    class="mt-2 ml-2 text-[10px] font-bold uppercase tracking-widest"/>
                                    </div>
                                    <div class="md:col-span-1 space-y-2">
                                        <InputLabel for="photo" :value="__('translate.Photo')"
                                                    class="block text-[10px] font-black text-gray-400 mb-2 uppercase tracking-widest ml-1"/>
                                        <div
                                            class="rounded-2xl overflow-hidden border border-gray-100 p-2 bg-white">
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
                            <div class="space-y-8">
                                <div class="flex items-center justify-between">
                                    <h3 class="text-xl font-black text-[#0A2C5C] uppercase tracking-tight flex items-center gap-4">
                                        <div class="p-2.5 bg-blue-50 rounded-2xl text-[#00a0e3]">
                                            <svg class="w-6 h-6" fill="none"
                                                 stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                      stroke-width="2"
                                                      d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                                            </svg>
                                        </div>
                                        {{ __('translate.experience') }}
                                    </h3>
                                    <div class="flex items-center gap-6">
                                        <span
                                            class="text-[10px] font-black text-gray-400 uppercase tracking-widest">{{
                                                __('translate.quantity')
                                            }}: {{ form.experiences.length }}/5</span>
                                        <button
                                            type="button"
                                            @click="addExperience"
                                            v-if="form.experiences.length < 5"
                                            class="inline-flex items-center gap-2 px-6 py-3 bg-[#00a0e3] hover:bg-blue-500 text-white rounded-2xl font-black text-[10px] uppercase tracking-widest transition-all shadow-lg shadow-blue-400/20 active:scale-95"
                                        >
                                            <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor"
                                                 viewBox="0 0 24 24" stroke-width="4">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                      d="M12 4v16m8-8H4"/>
                                            </svg>
                                            {{ __('translate.addExperience') }}
                                        </button>
                                    </div>
                                </div>

                                <div v-if="form.experiences.length == 5"
                                     class="p-5 bg-red-50 text-red-600 rounded-[2rem] text-[10px] font-black text-center uppercase tracking-widest border border-red-100 shadow-sm">
                                    {{ __('translate.limitComplete') }}
                                </div>

                                <InputError :message="form.errors.experiences" class="text-center font-black text-[10px] uppercase tracking-widest text-red-500"/>

                                <draggable :list="form.experiences" ghost-class="opacity-50" handle=".handle"
                                           item-key="id" class="space-y-6">
                                    <template #item="{ element: experience, index }">
                                        <div
                                            class="group bg-white rounded-[2.5rem] border border-gray-100 shadow-sm hover:shadow-xl transition-all duration-300">
                                            <div
                                                class="flex items-center justify-between p-4 border-b border-gray-50">
                                                <div
                                                    class="handle p-2 cursor-grab active:cursor-grabbing text-gray-300 hover:text-[#00a0e3] transition-colors">
                                                    <svg class="w-6 h-6" fill="none" stroke="currentColor"
                                                         viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                              stroke-width="2" d="M4 8h16M4 16h16"/>
                                                    </svg>
                                                </div>
                                                <button @click="removeElement(index, form.experiences)"
                                                        class="p-2 text-gray-300 hover:text-red-500 transition-colors">
                                                    <svg class="w-6 h-6" fill="none" stroke="currentColor"
                                                         viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                              stroke-width="2"
                                                              d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/>
                                                    </svg>
                                                </button>
                                            </div>

                                            <div
                                                class="p-8 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 gap-8">
                                                <div v-if="optionsPositions" class="space-y-2">
                                                    <InputLabel :value="__('translate.position')"
                                                                class="font-black text-[10px] text-gray-400 uppercase tracking-widest ml-1"/>
                                                    <multiselect
                                                        v-model="experience.position"
                                                        :options="optionsPositions"
                                                        track-by="value"
                                                        label="name"
                                                        :placeholder="__('translate.placeholder')"
                                                   wy     select-label=""
                                                        select-group-label=""
                                                        selected-label=""
                                                        deselect-label=""
                                                        :no-options="__('translate.noOptions')"
                                                        :no-result="__('translate.noResult')"
                                                        class="custom-multiselect"
                                                    >
                                                        <template #noResult><span>{{ __('translate.noResult') }}</span></template>
                                                        <template #noOptions><span>{{ __('translate.noOptions') }}</span></template>
                                                    </multiselect>
                                                    <InputError
                                                        :message="form.errors[`experiences.${index}.position`]"
                                                        class="mt-2 ml-2 text-[10px] font-bold uppercase tracking-widest"/>
                                                </div>

                                                <div class="space-y-2">
                                                    <InputLabel :value="__('translate.employer')"
                                                                class="font-black text-[10px] text-gray-400 uppercase tracking-widest ml-1"/>
                                                    <TextInput
                                                        v-model="experience.employer"
                                                        type="text"
                                                        :placeholder="__('translate.employer')"
                                                        class="w-full !rounded-2xl !bg-gray-50 !border-transparent focus:!bg-white focus:!ring-[#00a0e3]/10 focus:!border-[#00a0e3] !py-4 transition-all"
                                                    />
                                                    <InputError
                                                        :message="form.errors[`experiences.${index}.employer`]"
                                                        class="mt-2 ml-2 text-[10px] font-bold uppercase tracking-widest"/>
                                                </div>

                                                <div class="space-y-2">
                                                    <InputLabel :value="__('translate.experienceStart')"
                                                                class="font-black text-[10px] text-gray-400 uppercase tracking-widest ml-1"/>
                                                    <VueDatePicker v-model="experience.start" month-picker
                                                                   :locale="lang" auto-apply
                                                                   :teleport="true"
                                                                   :max-date="today"
                                                                   input-class-name="dp__input_reg"
                                                    />
                                                    <InputError
                                                        :message="form.errors[`experiences.${index}.start`]"
                                                        class="mt-2 ml-2 text-[10px] font-bold uppercase tracking-widest"/>
                                                </div>

                                                <div class="space-y-2 relative">
                                                    <div class="flex items-center justify-between mb-2">
                                                        <InputLabel :value="__('translate.experienceEnd')"
                                                                    class="font-black text-[10px] text-gray-400 uppercase tracking-widest ml-1"/>
                                                        <div class="flex items-center gap-2">
                                                            <Checkbox v-model:checked="experience.isCurrent"
                                                                      @change="handleIsCurrentChange(index)"
                                                                      class="w-4 h-4 !rounded-md text-[#00a0e3] focus:ring-[#00a0e3]"/>
                                                            <span
                                                                class="text-[8px] font-black text-gray-400 uppercase tracking-widest">{{
                                                                    __('translate.present')
                                                                }}</span>
                                                        </div>
                                                    </div>
                                                    <VueDatePicker v-model="experience.end" month-picker
                                                                   :disabled="experience.isCurrent"
                                                                   :locale="lang" auto-apply
                                                                   :teleport="true"
                                                                   :max-date="today"
                                                                   input-class-name="dp__input_reg"
                                                    />
                                                    <InputError
                                                        :message="form.errors[`experiences.${index}.end`]"
                                                        class="mt-2 ml-2 text-[10px] font-bold uppercase tracking-widest"/>
                                                </div>

                                                <div class="md:col-span-full space-y-2">
                                                    <InputLabel :value="__('translate.City')"
                                                                class="font-black text-[10px] text-gray-400 uppercase tracking-widest ml-1"/>
                                                    <TextInput
                                                        v-model="experience.city"
                                                        type="text"
                                                        :placeholder="__('translate.City')"
                                                        class="w-full !rounded-2xl !bg-gray-50 !border-transparent focus:!bg-white focus:!ring-[#00a0e3]/10 focus:!border-[#00a0e3] !py-4 transition-all"
                                                    />
                                                    <InputError
                                                        :message="form.errors[`experiences.${index}.city`]"
                                                        class="mt-2 ml-2 text-[10px] font-bold uppercase tracking-widest"/>
                                                </div>
                                            </div>
                                        </div>
                                    </template>
                                </draggable>
                            </div>

                                <!-- SEKCJA WYKSZTAŁCENIA -->
                                <div class="space-y-8 pt-8 border-t border-gray-100">
                                    <div class="flex items-center justify-between">
                                        <h3 class="text-xl font-black text-[#0A2C5C] uppercase tracking-tight flex items-center gap-4">
                                            <div class="p-2.5 bg-blue-50 rounded-2xl text-[#00a0e3]">
                                                <svg class="w-6 h-6" fill="none"
                                                     stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                          stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5z"/>
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                          stroke-width="2"
                                                          d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.083 0 01.665-6.479L12 14z"/>
                                                </svg>
                                            </div>
                                            {{ __('translate.education') }}
                                        </h3>
                                        <div class="flex items-center gap-6">
                                            <span
                                                class="text-[10px] font-black text-gray-400 uppercase tracking-widest">{{
                                                    __('translate.quantity')
                                                }}: {{ form.educations.length }}/5</span>
                                            <button
                                                type="button"
                                                @click="addEducation"
                                                v-if="form.educations.length < 5"
                                                class="inline-flex items-center gap-2 px-6 py-3 bg-[#00a0e3] hover:bg-blue-600 text-white rounded-2xl font-black text-[10px] uppercase tracking-widest transition-all shadow-lg shadow-blue-500/20 active:scale-95"
                                            >
                                                <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor"
                                                     viewBox="0 0 24 24" stroke-width="4">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                          d="M12 4v16m8-8H4"/>
                                                </svg>
                                                {{ __('translate.addEducation') }}
                                            </button>
                                        </div>
                                    </div>

                                    <div v-if="form.educations.length == 5"
                                         class="p-5 bg-red-50 text-red-600 rounded-[2rem] text-[10px] font-black text-center uppercase tracking-widest border border-red-100 shadow-sm">
                                        {{ __('translate.limitComplete') }}
                                    </div>

                                    <InputError :message="form.errors.educations" class="text-center font-black text-[10px] uppercase tracking-widest text-red-500"/>

                                    <draggable :list="form.educations" ghost-class="opacity-50" handle=".handle"
                                               item-key="id" class="space-y-6">
                                        <template #item="{ element: education, index }">
                                            <div
                                                class="group bg-white rounded-[2.5rem] border border-gray-100 shadow-sm hover:shadow-xl transition-all duration-300">
                                                <div
                                                    class="flex items-center justify-between p-4 border-b border-gray-50">
                                                    <div
                                                        class="handle p-2 cursor-grab active:cursor-grabbing text-gray-300 hover:text-[#00a0e3] transition-colors">
                                                        <svg class="w-6 h-6" fill="none" stroke="currentColor"
                                                             viewBox="0 0 24 24">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                  stroke-width="2" d="M4 8h16M4 16h16"/>
                                                        </svg>
                                                    </div>
                                                    <button @click="removeElement(index, form.educations)"
                                                            class="p-2 text-gray-300 hover:text-red-500 transition-colors">
                                                        <svg class="w-6 h-6" fill="none" stroke="currentColor"
                                                             viewBox="0 0 24 24">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                  stroke-width="2"
                                                                  d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/>
                                                        </svg>
                                                    </button>
                                                </div>

                                                <div
                                                    class="p-8 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 gap-8">
                                                    <div class="space-y-2">
                                                        <InputLabel :value="__('translate.school')"
                                                                    class="font-black text-[10px] text-gray-400 uppercase tracking-widest ml-1"/>
                                                        <TextInput v-model="education.school"
                                                                   type="text"
                                                                   :placeholder="__('translate.school')"
                                                                   class="w-full !rounded-2xl !bg-gray-50 !border-transparent focus:!bg-white focus:!ring-[#00a0e3]/10 focus:!border-[#00a0e3] !py-4 transition-all"
                                                        />
                                                        <InputError
                                                            :message="form.errors[`educations.${index}.school`]"
                                                            class="mt-2 ml-2 text-[10px] font-bold uppercase tracking-widest"/>
                                                    </div>

                                                    <div v-if="props.levelEducations" class="space-y-2">
                                                        <InputLabel :value="__('translate.levelEducation')"
                                                                    class="font-black text-[10px] text-gray-400 uppercase tracking-widest ml-1"/>
                                                        <multiselect v-model="education.level"
                                                                     :options="props.levelEducations"
                                                                     track-by="value" label="name"
                                                                     :placeholder="__('translate.placeholder')"
                                                                     select-label=""
                                                                     select-group-label=""
                                                                     selected-label=""
                                                                     deselect-label=""
                                                                     :no-options="__('translate.noOptions')"
                                                                     :no-result="__('translate.noResult')"
                                                                     class="custom-multiselect">
                                                            <template #noResult><span>{{ __('translate.noResult') }}</span></template>
                                                            <template #noOptions><span>{{ __('translate.noOptions') }}</span></template>
                                                        </multiselect>
                                                        <InputError
                                                            :message="form.errors[`educations.${index}.level`]"
                                                            class="mt-2 ml-2 text-[10px] font-bold uppercase tracking-widest"/>
                                                    </div>

                                                    <div class="space-y-2">
                                                        <InputLabel :value="__('translate.specialization')"
                                                                    class="font-black text-[10px] text-gray-400 uppercase tracking-widest ml-1"/>
                                                        <TextInput v-model="education.specialization"
                                                                   type="text"
                                                                   :placeholder="__('translate.specialization')"
                                                                   class="w-full !rounded-2xl !bg-gray-50 !border-transparent focus:!bg-white focus:!ring-[#00a0e3]/10 focus:!border-[#00a0e3] !py-4 transition-all"
                                                        />
                                                        <InputError
                                                            :message="form.errors[`educations.${index}.specialization`]"
                                                            class="mt-2 ml-2 text-[10px] font-bold uppercase tracking-widest"/>
                                                    </div>

                                                    <div class="space-y-2">
                                                        <InputLabel :value="__('translate.educationFinish')"
                                                                    class="font-black text-[10px] text-gray-400 uppercase tracking-widest ml-1"/>
                                                        <VueDatePicker v-model="education.finish" model-type="yyyy"
                                                                       year-picker
                                                                       :locale="lang" auto-apply
                                                                       :teleport="true"
                                                                       :max-date="today"
                                                                       input-class-name="dp__input_reg"
                                                        />
                                                        <InputError
                                                            :message="form.errors[`educations.${index}.finish`]"
                                                            class="mt-2 ml-2 text-[10px] font-bold uppercase tracking-widest"/>
                                                    </div>

                                                    <div class="space-y-2 lg:col-span-2">
                                                        <InputLabel :value="__('translate.City')"
                                                                    class="font-black text-[10px] text-gray-400 uppercase tracking-widest ml-1"/>
                                                        <TextInput v-model="education.city"
                                                                   type="text"
                                                                   :placeholder="__('translate.City')"
                                                                   class="w-full !rounded-2xl !bg-gray-50 !border-transparent focus:!bg-white focus:!ring-[#00a0e3]/10 focus:!border-[#00a0e3] !py-4 transition-all"
                                                        />
                                                        <InputError
                                                            :message="form.errors[`educations.${index}.city`]"
                                                            class="mt-2 ml-2 text-[10px] font-bold uppercase tracking-widest"/>
                                                    </div>
                                                </div>
                                            </div>
                                        </template>
                                    </draggable>
                                </div>

                                <!-- SEKCJA KURSÓW -->
                                <div class="space-y-8 pt-8 border-t border-gray-100">
                                    <div class="flex items-center justify-between">
                                        <h3 class="text-xl font-black text-[#0A2C5C] uppercase tracking-tight flex items-center gap-4">
                                            <div class="p-2.5 bg-blue-50 rounded-2xl text-[#00a0e3]">
                                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                          stroke-width="2"
                                                          d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                                </svg>
                                            </div>
                                            {{ __('translate.courses') }}
                                        </h3>
                                        <div class="flex items-center gap-6">
                                            <span
                                                class="text-[10px] font-black text-gray-400 uppercase tracking-widest">{{
                                                    __('translate.quantity')
                                                }}: {{ form.courses.length }}/5</span>
                                            <button type="button" @click="addCourse" v-if="form.courses.length < 5"
                                                    class="inline-flex items-center gap-2 px-6 py-3 bg-[#00a0e3] hover:bg-blue-600 text-white rounded-2xl font-black text-[10px] uppercase tracking-widest transition-all shadow-lg shadow-blue-500/20 active:scale-95">
                                                <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor"
                                                     viewBox="0 0 24 24" stroke-width="4">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                          d="M12 4v16m8-8H4"/>
                                                </svg>
                                                {{ __('translate.addCourse') }}
                                            </button>
                                        </div>
                                    </div>
                                    <draggable :list="form.courses" ghost-class="opacity-50" handle=".handle"
                                               item-key="id" class="space-y-6">
                                        <template #item="{ element: course, index }">
                                            <div
                                                class="group bg-white rounded-[2.5rem] border border-gray-100 shadow-sm hover:shadow-xl transition-all duration-300">
                                                <div class="flex items-center justify-between p-4 border-b border-gray-50">
                                                    <div class="handle p-2 cursor-grab active:cursor-grabbing text-gray-300 hover:text-[#00a0e3] transition-colors">
                                                        <svg class="w-6 h-6" fill="none" stroke="currentColor"
                                                             viewBox="0 0 24 24">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                  stroke-width="2" d="M4 8h16M4 16h16"/>
                                                        </svg>
                                                    </div>
                                                    <button @click="removeElement(index, form.courses)"
                                                            class="p-2 text-gray-300 hover:text-red-500 transition-colors">
                                                        <svg class="w-6 h-6" fill="none" stroke="currentColor"
                                                             viewBox="0 0 24 24">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                  stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                                                        </svg>
                                                    </button>
                                                </div>
                                                <div class="p-8 grid grid-cols-1 md:grid-cols-3 gap-8">
                                                    <div class="space-y-2">
                                                        <InputLabel :value="__('translate.name')"
                                                                    class="font-black text-[10px] text-gray-400 uppercase tracking-widest ml-1"/>
                                                        <TextInput v-model="course.name"
                                                                   type="text"
                                                                   :placeholder="__('translate.name')"
                                                                   class="w-full !rounded-2xl !bg-gray-50 !border-transparent focus:!bg-white focus:!ring-[#00a0e3]/10 focus:!border-[#00a0e3] !py-4 transition-all"
                                                        />
                                                        <InputError :message="form.errors[`courses.${index}.name`]"
                                                                    class="mt-2 ml-2 text-[10px] font-bold uppercase tracking-widest"/>
                                                    </div>
                                                    <div class="space-y-2">
                                                        <InputLabel :value="__('translate.organizator')"
                                                                    class="font-black text-[10px] text-gray-400 uppercase tracking-widest ml-1"/>
                                                        <TextInput v-model="course.organizator"
                                                                   type="text"
                                                                   :placeholder="__('translate.organizator')"
                                                                   class="w-full !rounded-2xl !bg-gray-50 !border-transparent focus:!bg-white focus:!ring-[#00a0e3]/10 focus:!border-[#00a0e3] !py-4 transition-all"
                                                        />
                                                        <InputError
                                                            :message="form.errors[`courses.${index}.organizator`]"
                                                            class="mt-2 ml-2 text-[10px] font-bold uppercase tracking-widest"/>
                                                    </div>
                                                    <div class="space-y-2">
                                                        <InputLabel :value="__('translate.date')"
                                                                    class="font-black text-[10px] text-gray-400 uppercase tracking-widest ml-1"/>
                                                        <VueDatePicker v-model="course.date" month-picker
                                                                       :locale="lang" auto-apply
                                                                       :teleport="true"
                                                                       :max-date="today"
                                                                       input-class-name="dp__input_reg"
                                                        />
                                                        {{form.errors}}
                                                        <InputError :message="form.errors[`courses.${index}.date`]"
                                                                    class="mt-2 ml-2 text-[10px] font-bold uppercase tracking-widest"/>
                                                    </div>
                                                </div>
                                            </div>
                                        </template>
                                    </draggable>
                                </div>

                                <!-- SEKCJA JĘZYKÓW -->
                                <div class="space-y-8 pt-8 border-t border-gray-100">
                                    <div class="flex items-center justify-between">
                                        <h3 class="text-xl font-black text-[#0A2C5C] uppercase tracking-tight flex items-center gap-4">
                                            <div class="p-2.5 bg-blue-50 rounded-2xl text-[#00a0e3]">
                                                <svg class="w-6 h-6" fill="none"
                                                     stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                          stroke-width="2"
                                                          d="M3 5h12M9 3v2m1.048 9.5A18.022 18.022 0 016.412 9m6.088 9h7M11 21l5-10 5 10M12.751 5C11.783 10.77 8.07 15.61 3 18.129"/>
                                                </svg>
                                            </div>
                                            {{ __('translate.language') }}
                                        </h3>
                                        <div class="flex items-center gap-6">
                                            <span
                                                class="text-[10px] font-black text-gray-400 uppercase tracking-widest">{{
                                                    __('translate.quantity')
                                                }}: {{ form.langs.length }}/5</span>
                                            <button type="button" @click="addLang" v-if="form.langs.length < 5"
                                                    class="inline-flex items-center gap-2 px-6 py-3 bg-[#00a0e3] hover:bg-blue-600 text-white rounded-2xl font-black text-[10px] uppercase tracking-widest transition-all shadow-lg shadow-blue-500/20 active:scale-95">
                                                <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor"
                                                     viewBox="0 0 24 24" stroke-width="4">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                          d="M12 4v16m8-8H4"/>
                                                </svg>
                                                {{ __('translate.addLang') }}
                                            </button>
                                        </div>
                                    </div>
                                    <draggable :list="form.langs" ghost-class="opacity-50" handle=".handle"
                                               item-key="id" class="space-y-6">
                                        <template #item="{ element: lang, index }">
                                            <div
                                                class="group bg-white rounded-[2.5rem] border border-gray-100 shadow-sm hover:shadow-xl transition-all duration-300 relative">
                                                <div class="flex items-center justify-between p-4 border-b border-gray-50">
                                                    <div class="handle p-2 cursor-grab active:cursor-grabbing text-gray-300 hover:text-[#00a0e3] transition-colors">
                                                        <svg class="w-6 h-6" fill="none" stroke="currentColor"
                                                             viewBox="0 0 24 24">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                  stroke-width="2" d="M4 8h16M4 16h16"/>
                                                        </svg>
                                                    </div>
                                                    <button @click="removeElement(index, form.langs)"
                                                            class="p-2 text-gray-300 hover:text-red-500 transition-colors">
                                                        <svg class="w-6 h-6" fill="none" stroke="currentColor"
                                                             viewBox="0 0 24 24">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                  stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                                                        </svg>
                                                    </button>
                                                </div>
                                                <div class="p-8 grid grid-cols-1 md:grid-cols-2 gap-8">
                                                    <div class="space-y-2">
                                                        <InputLabel :value="__('translate.name')"
                                                                    class="font-black text-[10px] text-gray-400 uppercase tracking-widest ml-1"/>
                                                        <multiselect v-model="lang.name" :options="sortLangs"
                                                                     track-by="value" label="label"
                                                                     :placeholder="__('translate.placeholder')"
                                                                     select-label=""
                                                                     select-group-label=""
                                                                     selected-label=""
                                                                     deselect-label=""
                                                                     :no-options="__('translate.noOptions')"
                                                                     :no-result="__('translate.noResult')"
                                                                     class="custom-multiselect">
                                                            <template #noResult><span>{{ __('translate.noResult') }}</span></template>
                                                            <template #noOptions><span>{{ __('translate.noOptions') }}</span></template>
                                                        </multiselect>
                                                        <InputError :message="form.errors[`langs.${index}.name`]"
                                                                    class="mt-2 ml-2 text-[10px] font-bold uppercase tracking-widest"/>
                                                    </div>
                                                    <div v-if="props.langLevels" class="space-y-2">
                                                        <InputLabel :value="__('translate.levelLang')"
                                                                    class="font-black text-[10px] text-gray-400 uppercase tracking-widest ml-1"/>
                                                        <multiselect v-model="lang.level" :options="props.langLevels"
                                                                     track-by="value" label="name"
                                                                     :placeholder="__('translate.placeholder')"
                                                                     select-label=""
                                                                     select-group-label=""
                                                                     selected-label=""
                                                                     deselect-label=""
                                                                     :no-options="__('translate.noOptions')"
                                                                     :no-result="__('translate.noResult')"
                                                                     class="custom-multiselect">
                                                            <template #noResult><span>{{ __('translate.noResult') }}</span></template>
                                                            <template #noOptions><span>{{ __('translate.noOptions') }}</span></template>
                                                        </multiselect>
                                                        <InputError :message="form.errors[`langs.${index}.level`]"
                                                                    class="mt-2 ml-2 text-[10px] font-bold uppercase tracking-widest"/>
                                                    </div>
                                                </div>
                                            </div>
                                        </template>
                                    </draggable>
                                </div>

                                <!-- SEKCJA UMIEJĘTNOŚCI -->
                                <div class="space-y-8 pt-8 border-t border-gray-100">
                                    <h3 class="text-xl font-black text-[#0A2C5C] uppercase tracking-tight flex items-center gap-4">
                                        <div class="p-2.5 bg-blue-50 rounded-2xl text-[#00a0e3]">
                                            <svg class="w-6 h-6" fill="none"
                                                 stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                      stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                                            </svg>
                                        </div>
                                        {{ __('translate.skills') }}
                                    </h3>
                                    <div
                                        class="p-8 bg-gray-50/50 rounded-[2.5rem] border border-gray-100 shadow-inner">
                                        <multiselect id="tagging" v-model="form.skills" label="name" track-by="code"
                                                     :options="skillsOptions" :max="10" :multiple="true"
                                                     :taggable="true" @tag="addSkill"
                                                     :placeholder="__('translate.tagplaceholder')"
                                                     :tag-placeholder="''"
                                                     select-label=""
                                                     select-group-label=""
                                                     selected-label=""
                                                     deselect-label=""
                                                     :no-options="__('translate.noOptions')"
                                                     :no-result="__('translate.noResult')"
                                                     class="custom-multiselect">
                                            <template #noResult><span>{{ __('translate.noResult') }}</span></template>
                                            <template #noOptions><span>{{ __('translate.noOptions') }}</span></template>
                                            <template v-slot:maxElements>
                                                {{ __('translate.tagmaxElements', {max: 10}) }}
                                            </template>
                                        </multiselect>
                                        <InputError :message="form.errors.skills"
                                                    class="mt-4 ml-2 text-[10px] font-bold uppercase tracking-widest text-center"/>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div v-if="formStep == 3 && form.cv == 1" class="animate-fade-in space-y-12">
                            <div
                                class="p-10 bg-gray-50/50 rounded-[3rem] border border-gray-100 shadow-inner">
                                <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
                                    <div class="space-y-6">
                                        <div class="flex items-center gap-4">
                                            <div
                                                class="p-3 bg-blue-50 rounded-2xl text-[#00a0e3]">
                                                <svg class="w-6 h-6" fill="none" stroke="currentColor"
                                                     viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                          stroke-width="2"
                                                          d="M3 5h12M9 3v2m1.048 9.5A18.022 18.022 0 016.412 9m6.088 9h7M11 21l5-10 5 10M12.751 5C11.783 10.77 8.07 15.61 3 18.129"/>
                                                </svg>
                                            </div>
                                            <InputLabel :value="__('translate.language') + ' CV'"
                                                        class="text-xl font-black text-[#0A2C5C] uppercase tracking-tight"/>
                                        </div>
                                        <p class="text-[10px] text-gray-400 font-black uppercase tracking-widest leading-loose">Wybierz język, w którym ma zostać wygenerowane Twoje CV.</p>
                                        <multiselect
                                            v-model="form.cvLang"
                                            :options="sortLangs"
                                            track-by="value"
                                            label="label"
                                            :placeholder="__('translate.placeholder')"
                                            select-label=""
                                            select-group-label=""
                                            selected-label=""
                                            deselect-label=""
                                            :no-options="__('translate.noOptions')"
                                            :no-result="__('translate.noResult')"
                                            class="custom-multiselect"
                                        >
                                            <template #noResult><span>{{ __('translate.noResult') }}</span></template>
                                            <template #noOptions><span>{{ __('translate.noOptions') }}</span></template>
                                        </multiselect>
                                        <InputError :message="form.errors.cvLang" class="mt-2 ml-2 text-[10px] font-bold uppercase tracking-widest"/>
                                    </div>

                                    <div class="space-y-6">
                                        <div class="flex items-center gap-4">
                                            <div
                                                class="p-3 bg-indigo-50 rounded-2xl text-[#6366f1]">
                                                <svg class="w-6 h-6" fill="none" stroke="currentColor"
                                                     viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                          stroke-width="2"
                                                          d="M4 5a1 1 0 011-1h14a1 1 0 011 1v2a1 1 0 01-1 1H5a1 1 0 01-1-1V5zM4 13a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H5a1 1 0 01-1-1v-6zM16 13a1 1 0 011-1h2a1 1 0 011 1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-6z"/>
                                                </svg>
                                            </div>
                                            <InputLabel :value="__('translate.cv')"
                                                        class="text-xl font-black text-[#0A2C5C] uppercase tracking-tight"/>
                                        </div>
                                        <p class="text-[10px] text-gray-400 font-black uppercase tracking-widest leading-loose">Wybierz jeden z dostępnych szablonów graficznych.</p>
                                        <div class="grid grid-cols-2 sm:grid-cols-3 gap-6 pt-2">
                                            <div v-for="template in templatesCvsList" :key="template.id"
                                                 @click="form.templateCv = template.id"
                                                 class="relative group cursor-pointer aspect-[3/4] rounded-3xl overflow-hidden border-4 transition-all duration-300"
                                                 :class="template.id == form.templateCv ? 'border-[#00a0e3] ring-8 ring-blue-500/10 shadow-2xl scale-105 z-10' : 'border-white hover:border-blue-100 shadow-sm'"
                                            >
                                                <img :src="template.img" alt="cv template"
                                                     class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                                                <div
                                                    class="absolute inset-0 bg-gradient-to-t from-[#0A2C5C]/80 to-transparent opacity-0 group-hover:opacity-100 transition-opacity flex items-end justify-center p-6">
                                                    <span
                                                        class="text-[10px] font-black text-white uppercase tracking-[0.2em] bg-[#00a0e3] px-4 py-2 rounded-full shadow-lg">Wybierz</span>
                                                </div>
                                                <div v-if="template.id == form.templateCv"
                                                     class="absolute top-3 right-3 w-8 h-8 bg-[#00a0e3] rounded-full flex items-center justify-center shadow-lg border-2 border-white">
                                                    <svg class="w-5 h-5 text-white" fill="none"
                                                         stroke="currentColor" viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                              stroke-width="4" d="M5 13l4 4L19 7"/>
                                                    </svg>
                                                </div>
                                            </div>
                                        </div>
                                        <InputError :message="form.errors.templateCv"
                                                    class="mt-4 ml-2 text-[10px] font-bold uppercase tracking-widest text-center"/>
                                    </div>
                                </div>
                            </div>

                            <div class="flex flex-col items-center gap-8 pt-6">
                                <button
                                    type="button"
                                    @click.prevent="generatePdf(form.templateCv)"
                                    v-if="form.cv && formStep == 3 && form.templateCv && form.cvLang"
                                    class="inline-flex items-center gap-3 px-10 py-4 bg-white border border-gray-100 text-[#0A2C5C] rounded-2xl font-black text-[10px] uppercase tracking-widest hover:bg-gray-50 transition-all shadow-sm hover:-translate-y-0.5 active:scale-95 disabled:opacity-50"
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
                                         viewBox="0 0 24 24" stroke-width="3">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                              d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                              d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                                    </svg>
                                    {{ __('translate.viewCv') }}
                                </button>

                                <InputError :message="form.errors.application"
                                            class="mb-2 text-center text-[10px] font-black uppercase tracking-widest bg-red-50 text-red-600 px-6 py-3 rounded-full border border-red-100"/>

                                <PrimaryButton v-if="form.cv && formStep == 3 && form.cvLang"
                                               class="w-full sm:w-[350px] !py-5 !rounded-2xl !bg-[#0A2C5C] hover:!bg-blue-800 !text-[10px] font-black !uppercase !tracking-widest shadow-xl shadow-blue-900/20 flex justify-center items-center gap-4 transition-all transform hover:-translate-y-1 active:scale-[0.98]"
                                               :class="{ 'opacity-50 scale-95': form.processing }"
                                               :disabled="form.processing || !isReadyToSubmit"
                                >
                                    <template v-if="form.processing">
                                        <svg class="animate-spin h-5 w-5 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                            <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                                            <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                                        </svg>
                                        <span>{{ __('translate.sending') || 'Wysyłanie...' }}</span>
                                    </template>
                                    <template v-else>
                                        <span>{{ __('translate.apply') }}</span>
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="3">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                        </svg>
                                    </template>
                                </PrimaryButton>
                        </div>
                    </div>
                        <div v-if="formStep == 2 && form.cv == 2" class="animate-fade-in space-y-12">
                            <div v-if="props.project.questions.length"
                                 class="p-6 bg-gray-50/50 rounded-3xl border border-gray-100">
                                <VideoRecorder :questions="props.project.questions" :projectId="props.project.id"
                                               :form="form" @submit="submit" @uploadStateChange="(state) => isReadyToSubmit = !state"/>
                            </div>
                            <div v-else
                                 class="p-12 text-center bg-gray-50/50 rounded-3xl border border-gray-100">
                                <div
                                    class="inline-flex items-center justify-center w-20 h-20 rounded-2xl bg-blue-50 text-blue-600 mb-6 shadow-sm">
                                    <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                              d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                    </svg>
                                </div>
                                <h3 class="text-2xl font-black text-gray-900 mb-2 uppercase tracking-tight">
                                    {{ __('translate.noQuestionsFound') }}
                                </h3>
                                <p class="text-sm text-gray-500 max-w-sm mx-auto leading-relaxed">
                                    {{ __('translate.noQuestionsDescription') }}
                                </p>
                            </div>
                        </div>
                        <div v-else-if="formStep == 2 && form.cv == 3" class="animate-fade-in space-y-8">
                            <div v-if="props.project.questions.length"
                                 class="p-6 bg-gray-50/50 rounded-3xl border border-gray-100">
                                <AudioRecorderNew :questions="props.project.questions" :projectId="props.project.id"
                                                  :form="form" @submit="submit"/>
                            </div>
                            <div v-else
                                 class="p-12 text-center bg-gray-50/50 rounded-3xl border border-gray-100">
                                <div
                                    class="inline-flex items-center justify-center w-20 h-20 rounded-2xl bg-blue-50 text-blue-600 mb-6 shadow-sm">
                                    <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                              d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                    </svg>
                                </div>
                                <h3 class="text-2xl font-black text-gray-900 mb-2 uppercase tracking-tight">
                                    {{ __('translate.noQuestionsFound') }}
                                </h3>
                                <p class="text-sm text-gray-500 max-w-sm mx-auto leading-relaxed">
                                    {{ __('translate.noQuestionsDescription') }}
                                </p>
                            </div>
                        </div>
                        <div
                            class="flex items-center justify-center pt-10 border-t border-gray-50 mt-12 gap-8">
                            <button
                                type="button"
                                @click="prevStep"
                                v-if="formStep > 1"
                                class="group inline-flex items-center gap-3 px-10 py-4 bg-white border border-gray-100 text-gray-500 rounded-2xl font-black text-[10px] uppercase tracking-widest hover:bg-gray-50 transition-all hover:-translate-y-0.5 active:scale-95 shadow-sm"
                            >
                                <svg class="w-4 h-4 transition-transform group-hover:-translate-x-1" fill="none"
                                     stroke="currentColor" viewBox="0 0 24 24" stroke-width="3">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                          d="M10 19l-7-7m0 0l7-7m-7 7h18"/>
                                </svg>
                                {{ __('translate.previousStep') }}
                            </button>

                            <!-- Przycisk Aplikuj widoczny w kroku 2 dla CV Klasycznego (Wgraj plik) lub istniejącego CV -->
                            <PrimaryButton
                                v-if="form.cv == 1 && formStep == 2 && (form.cvStandardType == 1 || form.isSelected)"
                                class="w-full sm:w-[300px] !py-5 !rounded-2xl !bg-[#0A2C5C] hover:!bg-blue-800 !text-[10px] font-black !uppercase !tracking-widest shadow-lg shadow-blue-900/20 flex justify-center items-center gap-3 transition-all transform active:scale-95"
                                :class="{ 'opacity-25': form.processing }"
                                :disabled="form.processing || !isReadyToSubmit"
                            >
                                <template v-if="form.processing">
                                    <svg class="animate-spin h-4 w-4 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                        <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                                        <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                                    </svg>
                                    <span>{{ __('translate.sending') || 'Wysyłanie...' }}</span>
                                </template>
                                <template v-else>
                                    <span>{{ __('translate.apply') }}</span>
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="3">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                    </svg>
                                </template>
                            </PrimaryButton>

                            <!-- Przycisk Wybierz szablon widoczny w kroku 2 dla CV Klasycznego (Kreator) -->
                            <PrimaryButton
                                type="button"
                                @click="nextStep"
                                v-if="form.cv == 1 && formStep == 2 && form.cvStandardType == 2 && !form.isSelected"
                                class="w-full sm:w-[300px] !py-5 !rounded-2xl !bg-[#0A2C5C] hover:!bg-blue-800 !text-[10px] font-black !uppercase !tracking-widest shadow-lg shadow-blue-900/20 flex justify-center items-center gap-3 transition-all transform active:scale-95"
                            >
                                <span>{{ __('translate.chosetemplate') }}</span>
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="3">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                          d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                                </svg>
                            </PrimaryButton>

                            <!-- Przycisk Aplikuj widoczny dla Video/Audio w kroku 2 -->
                            <PrimaryButton
                                v-if="(form.cv == 2 || form.cv == 3) && formStep == 2"
                                class="w-full sm:w-[300px] !py-5 !rounded-2xl !bg-[#0A2C5C] hover:!bg-blue-800 !text-[10px] font-black !uppercase !tracking-widest shadow-lg shadow-blue-900/20 flex justify-center items-center gap-3 transition-all transform active:scale-95"
                                :class="{ 'opacity-25': form.processing }"
                                :disabled="form.processing || !isReadyToSubmit"
                            >
                                <template v-if="form.processing">
                                    <svg class="animate-spin h-4 w-4 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                        <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                                        <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                                    </svg>
                                    <span>{{ __('translate.sending') || 'Wysyłanie...' }}</span>
                                </template>
                                <template v-else>
                                    <span>{{ __('translate.apply') }}sssss</span>
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="3">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
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
    animation-name: fadeIn;
    animation-duration: 0.5s;
    animation-timing-function: ease-out;
    animation-fill-mode: forwards;
}

.animate-slide-up {
    animation-name: slideUp;
    animation-duration: 0.5s;
    animation-timing-function: ease-out;
    animation-fill-mode: forwards;
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

/* Custom DatePicker Styles */
.dp__main {
    .dp__input {
        border-radius: 1rem !important;
        background-color: #f9fafb !important;
        border-color: transparent !important;
        padding-top: 1rem !important;
        padding-bottom: 1rem !important;
        font-size: 0.875rem !important;
        font-weight: 700 !important;
        color: #0A2C5C !important;
        transition: all 0.2s;
        &:focus {
            background-color: #ffffff !important;
            border-color: #00a0e3 !important;
            box-shadow: 0 0 0 4px rgba(0, 160, 227, 0.1) !important;
        }
        &::placeholder {
            color: #d1d5db !important;
        }
        &:disabled {
            background-color: #f3f4f6 !important;
            cursor: not-allowed !important;
            opacity: 0.5 !important;
        }
    }
    .dp__input_icon {
        color: #9ca3af !important;
        padding-left: 1rem !important;
    }
    .dp__input_reg {
        padding-left: 3rem !important;
    }
}
.dp__theme_light {
    --dp-primary-color: #00a0e3;
    --dp-border-radius: 1rem;
}
</style>
