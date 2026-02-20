<script setup>
import AppLayout from "@/Layouts/AppLayout.vue"
import {computed, ref} from "vue"
import {useForm, usePage} from "@inertiajs/vue3"
import ActionMessage from "@/Components/ActionMessage.vue"
import PrimaryButton from "@/Components/PrimaryButton.vue"
import TextInput from "@/Components/TextInput.vue"
import {usePermission} from "@/Composables/usePermission.js"
import Checkbox from "@/Components/Checkbox.vue";
import InputError from "@/Components/InputError.vue";
import draggable from 'vuedraggable/src/vuedraggable'
import Multiselect from 'vue-multiselect';

const page = usePage()
const user = page.props.auth.user
const {hasRole} = usePermission()

const props = defineProps({
    myCvs: Array,
    positions: Array,
    levelEducations: Array,
    langLevels: Array,
});

/* =========================
   STAN WYBRANEGO CV
========================= */
const selectedCv = ref(null)

/* =========================
   FORM
========================= */
const form = useForm({
    _method: "PUT",
    name: user.name,
    surname: user.worker_detail?.surname ?? "",
    birthdate: "",
    contact_phone: user.worker_detail?.contact_phone ?? "",
    city: "",
    zip: "",
    email: user.email,
    photo: null,
})
const normalizeDate = (dateObj) => {
    if (!dateObj) return null;
    if (dateObj instanceof Date) {
        return {
            year: dateObj.getFullYear(),
            month: dateObj.getMonth() + 1
        };
    }
    if (typeof dateObj === 'object' && dateObj.year !== undefined && dateObj.month !== undefined) {
        return {
            year: dateObj.year,
            month: dateObj.month + 1
        };
    }
    return null;
};
/* =========================
   WYBÓR CV + ŁADOWANIE DANYCH
========================= */
const selectCv = (cv) => {
    selectedCv.value = cv;
    console.log(cv)
    // 🔥 ŁADOWANIE DANYCH DO FORMULARZA
    form.birthdate = cv?.birthday ?? ""
    form.city = cv?.city ?? ""
    form.zip = cv?.postal ?? ""
    formCv.experiences = cv?.experiences ? cv?.experiences.map(exp => ({
        ...exp,
        start: exp.start ? { month: exp.start.month - 1, year: exp.start.year } : null,
        end: exp.end ? { month: exp.end.month - 1, year: exp.end.year } : null,
    })) : []
    formCv.educations = cv?.educations ? cv?.educations : []

    formCv.courses = cv?.courses ? cv?.courses.map(course => ({
        ...course,
        date: course.date ? { month: course.date.month - 1, year: course.date.year } : null,
    })) : []

    formCv.langs = cv?.langs ? cv?.langs : []
    formCv.skills = cv?.skills ? cv?.skills : []
}
const sortLangs = computed(() => {
    const excludedLangs = ['am', 'ps', 'bn', 'dz', 'zh', 'ka', 'ja', 'km', 'ko', 'dv', 'th'];
    return usePage().props.languages
        .filter(lang => lang?.value && !excludedLangs.includes(lang.value))
        .sort((a, b) => a.label.localeCompare(b.label));
})

/* =========================
   PHOTO
========================= */
const photoPreview = ref(null)
const photoInput = ref(null)
const skillsOptions = ref([]);

const selectNewPhoto = () => photoInput.value.click()

const updatePhotoPreview = () => {
    const photo = photoInput.value.files[0]
    if (!photo) return

    const reader = new FileReader()
    reader.onload = e => (photoPreview.value = e.target.result)
    reader.readAsDataURL(photo)
}

const clearPhotoFileInput = () => {
    if (photoInput.value?.value) {
        photoInput.value.value = null
    }
}

/* =========================
   SUBMIT
========================= */
const updateProfileInformation = () => {
    if (photoInput.value) {
        form.photo = photoInput.value.files[0]
    }

    form.post(route("user-profile-information.update"), {
        preserveScroll: true,
        onSuccess: () => clearPhotoFileInput(),
    })
}

const addExperience = () => {
    formCv.experiences.push({
        position: '',
        employer: '',
        start: null,
        end: null,
        isCurrent: false,
        city: '',
    })
}
const addEducation = () => {
    formCv.educations.push({
        school: '',
        level: '',
        specialization: '',
        finish: null,
        city: '',
    });
}
const addCourse = () => {
    formCv.courses.push({
        name: '',
        organizator: '',
        date: null,
    });
}
const addLang = () => {
    formCv.langs.push({
        name: '',
        level: '',
    });
}
const addSkill = (newTag) => {
    const tag = {
        name: newTag,
        code: newTag.substring(0, 2) + Math.floor((Math.random() * 10000000))
    }
    skillsOptions.value.push(tag)
    formCv.skills.push(tag)
}


const lang = computed(() => usePage().props.language)

const optionsPositions = ref(props.positions) // jeżeli masz pozycje
const removeElement = (index) => {
    formCv.experiences.splice(index, 1)
}
const removeElementArray = (index, array) => {
    array.splice(index, 1)
}

const handleIsCurrentChange = (index) => {
    if (formCv.experiences[index].isCurrent) {
        formCv.experiences[index].end = null
    }
}

const monthYearFormat = (date) => {
    if (!date) return "";
    let month, year;

    if (date instanceof Date) {
        month = String(date.getMonth() + 1).padStart(2, "0");
        year = date.getFullYear();
    } else if (typeof date === 'object' && date.year !== undefined && date.month !== undefined) {
        month = String(date.month + 1).padStart(2, "0");
        year = date.year;
    } else {
        return "";
    }
    return `${month}.${year}`;
}

const formCv = useForm({
    _method: "PUT",
    experiences: [],
    educations: [],
    courses: [],
    langs: [],
    skills: [],


})

const submit = () => {
    formCv.transform((data) => ({
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
    })).post(route("worker.myCvUpdateCv", selectedCv.value), {
        preserveScroll: true,
    });
}
</script>

<template>
    <AppLayout :title="__('translate.dashboard')">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('translate.myCv') }}
            </h2>
        </template>
        <div class="py-12 bg-gray-50/50 min-h-screen">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-8">
                <!-- HEADER -->
                <section class="bg-white rounded-3xl shadow-sm border border-gray-100 overflow-hidden">
                    <div class="p-8">
                        <div class="flex justify-between items-center">
                            <div>
                                <h2 class="text-2xl font-bold text-gray-900">{{ __('translate.myCv') }}</h2>
                                <p class="text-sm text-gray-500 mt-1">Zarządzaj swoimi życiorysami i dbaj o ich profesjonalny wygląd</p>
                            </div>
                        </div>
                    </div>
                </section>

                <div class="flex flex-col lg:flex-row gap-8 items-start">
                    <!-- LEWA KOLUMNA: LISTA CV -->
                    <div class="w-full lg:w-80 space-y-4 shrink-0">
                        <h3 class="text-xs font-bold text-gray-400 uppercase tracking-wider px-4">{{ __('translate.lastAplications') }}</h3>
                        <div v-if="props.myCvs.length" class="space-y-3">
                            <div
                                v-for="cv in props.myCvs"
                                :key="cv.id"
                                @click="selectCv(cv)"
                                class="group relative flex items-center gap-4 p-5 rounded-3xl transition-all duration-200 border cursor-pointer"
                                :class="selectedCv?.id === cv.id
                                    ? 'bg-[#0A2C5C] border-transparent shadow-lg shadow-blue-900/20 shadow-md'
                                    : 'bg-white border-gray-100 hover:border-blue-100 hover:bg-blue-50/30 shadow-sm'"
                            >
                                <div class="flex-1 min-w-0">
                                    <h4 class="text-sm font-bold truncate transition-colors"
                                        :class="selectedCv?.id === cv.id ? 'text-white' : 'text-gray-900'">
                                        CV {{ cv.project.category.allTranslations.title[usePage().props.language] }}
                                    </h4>
                                    <p class="text-[10px] font-bold uppercase tracking-tight mt-1"
                                       :class="selectedCv?.id === cv.id ? 'text-blue-200' : 'text-gray-400'">
                                        {{ cv.project.position.allTranslations.title[usePage().props.language] }}
                                    </p>
                                </div>
                                <div v-if="selectedCv?.id === cv.id" class="shrink-0">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-blue-400" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <div v-else class="p-8 bg-white rounded-3xl border border-dashed border-gray-200 text-center">
                            <p class="text-sm text-gray-400 font-medium">{{ __('translate.noCvs') }}</p>
                        </div>
                    </div>

                    <!-- PRAWA KOLUMNA: EDYCJA CV -->
                    <div class="flex-1 w-full min-w-0">
                        <div v-if="selectedCv" class="space-y-8">
                            <!-- INFORMACJE PODSTAWOWE -->
                            <section class="bg-white rounded-3xl shadow-sm border border-gray-100 overflow-hidden">
                                <div class="p-8">
                                    <div class="flex justify-between items-center mb-8">
                                        <div>
                                            <h3 class="text-xl font-bold text-gray-900">{{ __('translate.basic_info') }}</h3>
                                            <p class="text-xs text-gray-500 mt-1">Uzupełnij swoje dane kontaktowe</p>
                                        </div>
                                    </div>

                                    <form @submit.prevent="updateProfileInformation">
                                        <div class="flex flex-col md:flex-row gap-10 items-start">
                                            <!-- AVATAR -->
                                            <div class="relative group shrink-0 mx-auto md:mx-0">
                                                <input ref="photoInput" type="file" class="hidden" @change="updatePhotoPreview">
                                                <div class="w-32 h-32 rounded-3xl overflow-hidden shadow-lg border-4 border-white group-hover:scale-105 transition-transform duration-300">
                                                    <img v-if="!photoPreview" :src="user.profile_photo_url" class="w-full h-full object-cover" />
                                                    <div v-else class="w-full h-full bg-cover bg-center" :style="`background-image:url('${photoPreview}')`" />
                                                </div>
                                                <button type="button"
                                                        @click.prevent="selectNewPhoto"
                                                        class="absolute -bottom-2 -right-2 bg-[#0A2C5C] text-white p-2 rounded-xl shadow-lg hover:bg-blue-800 transition-colors">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z" />
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 13a3 3 0 11-6 0 3 3 0 016 0z" />
                                                    </svg>
                                                </button>
                                            </div>

                                            <!-- INPUTY -->
                                            <div class="flex-1 grid grid-cols-1 sm:grid-cols-2 gap-4 w-full">
                                                <div class="flex flex-col gap-1">
                                                    <span class="text-[10px] font-bold text-gray-400 uppercase tracking-widest ml-1">{{ __('translate.nameUser') }}</span>
                                                    <TextInput v-model="form.name" class="w-full rounded-2xl border-gray-100 bg-gray-50/50 focus:bg-white transition-all"/>
                                                </div>
                                                <div class="flex flex-col gap-1">
                                                    <span class="text-[10px] font-bold text-gray-400 uppercase tracking-widest ml-1">{{ __('translate.surname') }}</span>
                                                    <TextInput v-model="form.surname" class="w-full rounded-2xl border-gray-100 bg-gray-50/50 focus:bg-white transition-all"/>
                                                </div>
                                                <div class="flex flex-col gap-1">
                                                    <span class="text-[10px] font-bold text-gray-400 uppercase tracking-widest ml-1">{{ __('translate.birthdayDate') }}</span>
                                                    <TextInput v-model="form.birthdate" class="w-full rounded-2xl border-gray-100 bg-gray-50/50 focus:bg-white transition-all"/>
                                                </div>
                                                <div class="flex flex-col gap-1">
                                                    <span class="text-[10px] font-bold text-gray-400 uppercase tracking-widest ml-1">{{ __('translate.nrPhone') }}</span>
                                                    <TextInput v-model="form.contact_phone" class="w-full rounded-2xl border-gray-100 bg-gray-50/50 focus:bg-white transition-all"/>
                                                </div>
                                                <div class="flex flex-col gap-1">
                                                    <span class="text-[10px] font-bold text-gray-400 uppercase tracking-widest ml-1">{{ __('translate.Postal') }}</span>
                                                    <TextInput v-model="form.zip" class="w-full rounded-2xl border-gray-100 bg-gray-50/50 focus:bg-white transition-all"/>
                                                </div>
                                                <div class="flex flex-col gap-1">
                                                    <span class="text-[10px] font-bold text-gray-400 uppercase tracking-widest ml-1">{{ __('translate.City') }}</span>
                                                    <TextInput v-model="form.city" class="w-full rounded-2xl border-gray-100 bg-gray-50/50 focus:bg-white transition-all"/>
                                                </div>
                                                <div class="flex flex-col gap-1 sm:col-span-2">
                                                    <span class="text-[10px] font-bold text-gray-400 uppercase tracking-widest ml-1">{{ __('translate.email') }}</span>
                                                    <TextInput v-model="form.email" type="email" class="w-full rounded-2xl border-gray-100 bg-gray-50/50 focus:bg-white transition-all"/>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="flex justify-end items-center mt-8 gap-4">
                                            <ActionMessage :on="form.recentlySuccessful">
                                                {{ __('translate.saved_success') }}
                                            </ActionMessage>
                                            <PrimaryButton :disabled="form.processing" class="rounded-xl px-8 shadow-md hover:shadow-lg transition-all" :class="{ 'opacity-25': form.processing }">
                                                {{ __('translate.save') }}
                                            </PrimaryButton>
                                        </div>
                                    </form>
                                </div>
                            </section>

                            <!-- DOŚWIADCZENIE -->
                            <section class="bg-white rounded-3xl shadow-sm border border-gray-100 overflow-hidden">
                                <div class="p-8">
                                    <form @submit.prevent="submit">
                                        <div class="flex justify-between items-center mb-8">
                                            <div>
                                                <h3 class="text-xl font-bold text-gray-900">{{ __('translate.experience') }}</h3>
                                                <p class="text-xs text-gray-500 mt-1">{{ __('translate.quantity') }}: {{ formCv.experiences.length }}/5</p>
                                            </div>
                                            <PrimaryButton
                                                type="button"
                                                v-if="formCv.experiences.length < 5"
                                                @click="addExperience"
                                                class="!bg-blue-50 !text-blue-600 hover:!bg-blue-100 border-none shadow-none rounded-xl"
                                            >
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                                                </svg>
                                                {{ __('translate.addExperience') }}
                                            </PrimaryButton>
                                        </div>

                                        <div v-if="formCv.experiences.length === 5" class="bg-red-50 text-red-600 text-[10px] font-bold uppercase tracking-widest p-3 rounded-2xl text-center mb-6">
                                            {{ __('translate.limitComplete') }}
                                        </div>

                                        <InputError :message="formCv.errors.experiences" class="mb-6"/>

                                        <draggable
                                            v-model="formCv.experiences"
                                            item-key="id"
                                            handle=".handle"
                                            ghost-class="ghost"
                                            class="space-y-6"
                                        >
                                            <template #item="{ element: experience, index }">
                                                <div class="relative p-6 rounded-[2rem] border border-gray-50 bg-gray-50/30 group/item transition-all hover:bg-white hover:shadow-md hover:border-gray-100">
                                                    <div class="absolute left-4 top-1/2 -translate-y-1/2 opacity-0 group-hover/item:opacity-100 transition-opacity">
                                                        <div class="handle cursor-grab active:cursor-grabbing p-2 text-gray-300 hover:text-gray-500 transition-colors">
                                                            <svg class="h-5 w-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                                                <path d="M4 6h16M4 10h16M4 14h16M4 18h16" stroke-linecap="round" stroke-linejoin="round"></path>
                                                            </svg>
                                                        </div>
                                                    </div>

                                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 pl-4 md:pl-10">
                                                        <!-- POSITION -->
                                                        <div class="flex flex-col gap-1">
                                                            <span class="text-[10px] font-bold text-gray-400 uppercase tracking-widest ml-1">{{ __('translate.position') }}</span>
                                                            <multiselect
                                                                :selectLabel="__('translate.selectLabel')"
                                                                :selectGroupLabel="__('translate.selectGroupLabel')"
                                                                :selectedLabel="__('translate.selectedLabel')"
                                                                :deselectLabel="__('translate.deselectLabel')"
                                                                :noOptions="__('translate.noOptions')"
                                                                :noResult="__('translate.noResult')"
                                                                track-by="value"
                                                                label="name"
                                                                :placeholder="__('translate.position')"
                                                                v-model="experience.position" :options="optionsPositions"
                                                                class="custom-multiselect">
                                                            </multiselect>
                                                            <InputError :message="formCv.errors[`experiences.${index}.position`]" class="mt-1"/>
                                                        </div>

                                                        <!-- START -->
                                                        <div class="flex flex-col gap-1">
                                                            <span class="text-[10px] font-bold text-gray-400 uppercase tracking-widest ml-1">{{ __('translate.experienceStart') }}</span>
                                                            <VueDatePicker
                                                                v-model="experience.start"
                                                                month-picker
                                                                auto-apply
                                                                :enable-time-picker="false"
                                                                :locale="lang"
                                                                :format="monthYearFormat"
                                                                class="modern-datepicker"
                                                            />
                                                            <InputError :message="formCv.errors[`experiences.${index}.start`]" class="mt-1"/>
                                                        </div>

                                                        <!-- EMPLOYER -->
                                                        <div class="flex flex-col gap-1">
                                                            <span class="text-[10px] font-bold text-gray-400 uppercase tracking-widest ml-1">{{ __('translate.employer') }}</span>
                                                            <TextInput v-model="experience.employer" class="w-full rounded-2xl border-gray-100" :placeholder="__('translate.employer')"/>
                                                            <InputError :message="formCv.errors[`experiences.${index}.employer`]" class="mt-1"/>
                                                        </div>

                                                        <!-- END -->
                                                        <div class="flex flex-col gap-1">
                                                            <span class="text-[10px] font-bold text-gray-400 uppercase tracking-widest ml-1">{{ __('translate.experienceEnd') }}</span>
                                                            <div class="space-y-2">
                                                                <VueDatePicker
                                                                    v-model="experience.end"
                                                                    month-picker
                                                                    auto-apply
                                                                    :enable-time-picker="false"
                                                                    :locale="lang"
                                                                    :format="monthYearFormat"
                                                                    :disabled="experience.isCurrent"
                                                                    class="modern-datepicker"
                                                                />
                                                                <label class="flex items-center gap-2 text-xs font-bold text-gray-500 uppercase tracking-tight ml-1">
                                                                    <Checkbox
                                                                        v-model:checked="experience.isCurrent"
                                                                        @change="handleIsCurrentChange(index)"
                                                                        class="rounded-md"
                                                                    />
                                                                    {{ __('translate.currently') }}
                                                                </label>
                                                            </div>
                                                            <InputError :message="formCv.errors[`experiences.${index}.end`]" class="mt-1"/>
                                                        </div>

                                                        <!-- CITY -->
                                                        <div class="flex flex-col gap-1 md:col-span-2">
                                                            <span class="text-[10px] font-bold text-gray-400 uppercase tracking-widest ml-1">{{ __('translate.City') }}</span>
                                                            <TextInput v-model="experience.city" class="w-full rounded-2xl border-gray-100" :placeholder="__('translate.City')"/>
                                                            <InputError :message="formCv.errors[`experiences.${index}.city`]" class="mt-1"/>
                                                        </div>
                                                    </div>

                                                    <button
                                                        type="button"
                                                        @click="removeElement(index)"
                                                        class="absolute top-4 right-4 p-2 text-gray-300 hover:text-red-500 transition-colors opacity-0 group-hover/item:opacity-100"
                                                    >
                                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                                        </svg>
                                                    </button>
                                                </div>
                                            </template>
                                        </draggable>

                                        <!-- EDUKACJA -->
                                        <div class="mt-16">
                                            <div class="flex justify-between items-center mb-8">
                                                <div>
                                                    <h3 class="text-xl font-bold text-gray-900">{{ __('translate.education') }}</h3>
                                                    <p class="text-xs text-gray-500 mt-1">{{ __('translate.quantity') }}: {{ formCv.educations.length }}/5</p>
                                                </div>
                                                <PrimaryButton
                                                    type="button"
                                                    v-if="formCv.educations.length < 5"
                                                    @click="addEducation"
                                                    class="!bg-blue-50 !text-blue-600 hover:!bg-blue-100 border-none shadow-none rounded-xl"
                                                >
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                                                    </svg>
                                                    {{ __('translate.addEducation') }}
                                                </PrimaryButton>
                                            </div>

                                            <div v-if="formCv.educations.length === 5" class="bg-red-50 text-red-600 text-[10px] font-bold uppercase tracking-widest p-3 rounded-2xl text-center mb-6">
                                                {{ __('translate.limitComplete') }}
                                            </div>

                                            <InputError :message="formCv.errors.educations" class="mb-6"/>

                                            <draggable :list="formCv.educations" ghost-class="ghost" handle=".handle" item-key="id" class="space-y-6">
                                                <template #item="{ element: education, index }">
                                                    <div class="relative p-6 rounded-[2rem] border border-gray-50 bg-gray-50/30 group/item transition-all hover:bg-white hover:shadow-md hover:border-gray-100">
                                                        <div class="absolute left-4 top-1/2 -translate-y-1/2 opacity-0 group-hover/item:opacity-100 transition-opacity">
                                                            <div class="handle cursor-grab active:cursor-grabbing p-2 text-gray-300 hover:text-gray-500 transition-colors">
                                                                <svg class="h-5 w-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                                                    <path d="M4 6h16M4 10h16M4 14h16M4 18h16" stroke-linecap="round" stroke-linejoin="round"></path>
                                                                </svg>
                                                            </div>
                                                        </div>

                                                        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 pl-4 md:pl-10">
                                                            <div class="flex flex-col gap-1 lg:col-span-2">
                                                                <span class="text-[10px] font-bold text-gray-400 uppercase tracking-widest ml-1">{{ __('translate.school') }}</span>
                                                                <TextInput v-model="education.school" class="w-full rounded-2xl border-gray-100" :placeholder="__('translate.school')"/>
                                                                <InputError :message="formCv.errors[`educations.${index}.school`]" class="mt-1"/>
                                                            </div>
                                                            <div class="flex flex-col gap-1 lg:col-span-2" v-if="props.levelEducations">
                                                                <span class="text-[10px] font-bold text-gray-400 uppercase tracking-widest ml-1">{{ __('translate.levelEducation') }}</span>
                                                                <multiselect
                                                                    :selectLabel="__('translate.selectLabel')"
                                                                    :selectGroupLabel="__('translate.selectGroupLabel')"
                                                                    :selectedLabel="__('translate.selectedLabel')"
                                                                    :deselectLabel="__('translate.deselectLabel')"
                                                                    :noOptions="__('translate.noOptions')"
                                                                    :noResult="__('translate.noResult')"
                                                                    track-by="value"
                                                                    label="name"
                                                                    :placeholder="__('translate.levelEducation')"
                                                                    v-model="education.level" :options="props.levelEducations"
                                                                    class="custom-multiselect">
                                                                </multiselect>
                                                                <InputError :message="formCv.errors[`educations.${index}.level`]" class="mt-1"/>
                                                            </div>
                                                            <div class="flex flex-col gap-1">
                                                                <span class="text-[10px] font-bold text-gray-400 uppercase tracking-widest ml-1">{{ __('translate.specialization') }}</span>
                                                                <TextInput v-model="education.specialization" class="w-full rounded-2xl border-gray-100" :placeholder="__('translate.specialization')"/>
                                                                <InputError :message="formCv.errors[`educations.${index}.specialization`]" class="mt-1"/>
                                                            </div>
                                                            <div class="flex flex-col gap-1">
                                                                <span class="text-[10px] font-bold text-gray-400 uppercase tracking-widest ml-1">{{ __('translate.experienceSchoolEnd') }}</span>
                                                                <VueDatePicker model-type="yyyy" v-model="education.finish" :locale="lang" auto-apply year-picker class="modern-datepicker"/>
                                                                <InputError :message="formCv.errors[`educations.${index}.finish`]" class="mt-1"/>
                                                            </div>
                                                            <div class="flex flex-col gap-1 sm:col-span-2">
                                                                <span class="text-[10px] font-bold text-gray-400 uppercase tracking-widest ml-1">{{ __('translate.City') }}</span>
                                                                <TextInput v-model="education.city" class="w-full rounded-2xl border-gray-100" :placeholder="__('translate.City')"/>
                                                                <InputError :message="formCv.errors[`educations.${index}.city`]" class="mt-1"/>
                                                            </div>
                                                        </div>

                                                        <button type="button" @click="removeElementArray(index,formCv.educations)" class="absolute top-4 right-4 p-2 text-gray-300 hover:text-red-500 transition-colors opacity-0 group-hover/item:opacity-100">
                                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                                            </svg>
                                                        </button>
                                                    </div>
                                                </template>
                                            </draggable>
                                        </div>

                                        <!-- KURSY -->
                                        <div class="mt-16">
                                            <div class="flex justify-between items-center mb-8">
                                                <div>
                                                    <h3 class="text-xl font-bold text-gray-900">{{ __('translate.courses') }}</h3>
                                                    <p class="text-xs text-gray-500 mt-1">{{ __('translate.quantity') }}: {{ formCv.courses.length }}/5</p>
                                                </div>
                                                <PrimaryButton
                                                    type="button"
                                                    v-if="formCv.courses.length < 5"
                                                    @click="addCourse"
                                                    class="!bg-blue-50 !text-blue-600 hover:!bg-blue-100 border-none shadow-none rounded-xl"
                                                >
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                                                    </svg>
                                                    {{ __('translate.addCourse') }}
                                                </PrimaryButton>
                                            </div>

                                            <div v-if="formCv.courses.length === 5" class="bg-red-50 text-red-600 text-[10px] font-bold uppercase tracking-widest p-3 rounded-2xl text-center mb-6">
                                                {{ __('translate.limitComplete') }}
                                            </div>

                                            <InputError :message="formCv.errors.courses" class="mb-6"/>

                                            <draggable :list="formCv.courses" ghost-class="ghost" handle=".handle" item-key="id" class="space-y-6">
                                                <template #item="{ element: course, index }">
                                                    <div class="relative p-6 rounded-[2rem] border border-gray-50 bg-gray-50/30 group/item transition-all hover:bg-white hover:shadow-md hover:border-gray-100">
                                                        <div class="absolute left-4 top-1/2 -translate-y-1/2 opacity-0 group-hover/item:opacity-100 transition-opacity">
                                                            <div class="handle cursor-grab active:cursor-grabbing p-2 text-gray-300 hover:text-gray-500 transition-colors">
                                                                <svg class="h-5 w-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                                                    <path d="M4 6h16M4 10h16M4 14h16M4 18h16" stroke-linecap="round" stroke-linejoin="round"></path>
                                                                </svg>
                                                            </div>
                                                        </div>

                                                        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 pl-4 md:pl-10">
                                                            <div class="flex flex-col gap-1 lg:col-span-2">
                                                                <span class="text-[10px] font-bold text-gray-400 uppercase tracking-widest ml-1">{{ __('translate.name') }}</span>
                                                                <TextInput v-model="course.name" class="w-full rounded-2xl border-gray-100" :placeholder="__('translate.name')"/>
                                                                <InputError :message="formCv.errors[`courses.${index}.name`]" class="mt-1"/>
                                                            </div>
                                                            <div class="flex flex-col gap-1">
                                                                <span class="text-[10px] font-bold text-gray-400 uppercase tracking-widest ml-1">{{ __('translate.organizator') }}</span>
                                                                <TextInput v-model="course.organizator" class="w-full rounded-2xl border-gray-100" :placeholder="__('translate.organizator')"/>
                                                                <InputError :message="formCv.errors[`courses.${index}.organizator`]" class="mt-1"/>
                                                            </div>
                                                            <div class="flex flex-col gap-1">
                                                                <span class="text-[10px] font-bold text-gray-400 uppercase tracking-widest ml-1">{{ __('translate.date') }}</span>
                                                                <VueDatePicker
                                                                    v-model="course.date"
                                                                    :locale="lang"
                                                                    month-picker
                                                                    :enable-time-picker="false"
                                                                    :format="monthYearFormat"
                                                                    auto-apply
                                                                    class="modern-datepicker"
                                                                />
                                                                <InputError :message="formCv.errors[`courses.${index}.date`]" class="mt-1"/>
                                                            </div>
                                                        </div>

                                                        <button type="button" @click="removeElementArray(index,formCv.courses)" class="absolute top-4 right-4 p-2 text-gray-300 hover:text-red-500 transition-colors opacity-0 group-hover/item:opacity-100">
                                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                                            </svg>
                                                        </button>
                                                    </div>
                                                </template>
                                            </draggable>
                                        </div>

                                        <!-- JĘZYKI -->
                                        <div class="mt-16">
                                            <div class="flex justify-between items-center mb-8">
                                                <div>
                                                    <h3 class="text-xl font-bold text-gray-900">{{ __('translate.langKnow') }}</h3>
                                                    <p class="text-xs text-gray-500 mt-1">{{ __('translate.quantity') }}: {{ formCv.langs.length }}/5</p>
                                                </div>
                                                <PrimaryButton
                                                    type="button"
                                                    v-if="formCv.langs.length < 5"
                                                    @click="addLang"
                                                    class="!bg-blue-50 !text-blue-600 hover:!bg-blue-100 border-none shadow-none rounded-xl"
                                                >
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                                                    </svg>
                                                    {{ __('translate.addLang') }}
                                                </PrimaryButton>
                                            </div>

                                            <div v-if="formCv.langs.length === 5" class="bg-red-50 text-red-600 text-[10px] font-bold uppercase tracking-widest p-3 rounded-2xl text-center mb-6">
                                                {{ __('translate.limitComplete') }}
                                            </div>

                                            <InputError :message="formCv.errors.langs" class="mb-6"/>

                                            <draggable :list="formCv.langs" ghost-class="ghost" handle=".handle" item-key="id" class="space-y-6">
                                                <template #item="{ element: lang, index }">
                                                    <div class="relative p-6 rounded-[2rem] border border-gray-50 bg-gray-50/30 group/item transition-all hover:bg-white hover:shadow-md hover:border-gray-100">
                                                        <div class="absolute left-4 top-1/2 -translate-y-1/2 opacity-0 group-hover/item:opacity-100 transition-opacity">
                                                            <div class="handle cursor-grab active:cursor-grabbing p-2 text-gray-300 hover:text-gray-500 transition-colors">
                                                                <svg class="h-5 w-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                                                    <path d="M4 6h16M4 10h16M4 14h16M4 18h16" stroke-linecap="round" stroke-linejoin="round"></path>
                                                                </svg>
                                                            </div>
                                                        </div>

                                                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 pl-4 md:pl-10">
                                                            <div class="flex flex-col gap-1">
                                                                <span class="text-[10px] font-bold text-gray-400 uppercase tracking-widest ml-1">{{ __('translate.name') }}</span>
                                                                <multiselect
                                                                    :selectLabel="__('translate.selectLabel')"
                                                                    :selectedLabel="__('translate.selectedLabel')"
                                                                    :deselectLabel="__('translate.deselectLabel')"
                                                                    :noOptions="__('translate.noOptions')"
                                                                    :noResult="__('translate.noResult')"
                                                                    track-by="value"
                                                                    v-model="lang.name"
                                                                    label="label"
                                                                    :placeholder="__('translate.name')"
                                                                    :options="sortLangs"
                                                                    class="custom-multiselect">
                                                                </multiselect>
                                                                <InputError :message="formCv.errors[`langs.${index}.name`]" class="mt-1"/>
                                                            </div>
                                                            <div class="flex flex-col gap-1" v-if="props.langLevels">
                                                                <span class="text-[10px] font-bold text-gray-400 uppercase tracking-widest ml-1">{{ __('translate.levelLang') }}</span>
                                                                <multiselect
                                                                    :selectLabel="__('translate.selectLabel')"
                                                                    :selectGroupLabel="__('translate.selectGroupLabel')"
                                                                    :selectedLabel="__('translate.selectedLabel')"
                                                                    :deselectLabel="__('translate.deselectLabel')"
                                                                    :noOptions="__('translate.noOptions')"
                                                                    :noResult="__('translate.noResult')"
                                                                    track-by="value"
                                                                    label="name"
                                                                    :placeholder="__('translate.levelLang')"
                                                                    v-model="lang.level" :options="props.langLevels"
                                                                    class="custom-multiselect">
                                                                </multiselect>
                                                                <InputError :message="formCv.errors[`langs.${index}.level`]" class="mt-1"/>
                                                            </div>
                                                        </div>

                                                        <button type="button" @click="removeElementArray(index,formCv.langs)" class="absolute top-4 right-4 p-2 text-gray-300 hover:text-red-500 transition-colors opacity-0 group-hover/item:opacity-100">
                                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                                            </svg>
                                                        </button>
                                                    </div>
                                                </template>
                                            </draggable>
                                        </div>

                                        <!-- UMIEJĘTNOŚCI -->
                                        <div class="mt-16">
                                            <div class="flex justify-between items-center mb-8">
                                                <div>
                                                    <h3 class="text-xl font-bold text-gray-900">{{ __('translate.skills') }}</h3>
                                                    <p class="text-xs text-gray-500 mt-1">Podaj swoje mocne strony</p>
                                                </div>
                                            </div>

                                            <div class="p-6 rounded-[2rem] border border-gray-50 bg-gray-50/30">
                                                <multiselect
                                                    id="tagging"
                                                    v-model="formCv.skills"
                                                    label="name"
                                                    track-by="code"
                                                    :options="skillsOptions"
                                                    :max="10"
                                                    :multiple="true"
                                                    :taggable="true"
                                                    @tag="addSkill"
                                                    :selectLabel="__('translate.selectLabel')"
                                                    :selectedLabel="__('translate.selectedLabel')"
                                                    :deselectLabel="__('translate.deselectLabel')"
                                                    :noOptions="__('translate.noOptions')"
                                                    :tag-placeholder="__('translate.tagdeselectLabel')"
                                                    :placeholder="__('translate.skills')"
                                                    :noResult="__('translate.noResult')"
                                                    :max-elements="true"
                                                    class="custom-multiselect"
                                                >
                                                    <template v-slot:maxElements>
                                                        {{ __('translate.tagmaxElements', {max: 10}) }}
                                                    </template>
                                                    <template v-slot:noOptions>
                                                        {{ __('translate.noOptions', {max: 10}) }}
                                                    </template>
                                                </multiselect>
                                                <InputError :message="formCv.errors.skills" class="mt-2 text-center"/>
                                            </div>
                                        </div>

                                        <div class="flex justify-end mt-12 pt-8 border-t border-gray-100">
                                            <PrimaryButton class="rounded-2xl px-12 py-4 bg-[#0A2C5C] hover:bg-blue-800 shadow-lg shadow-blue-900/20 transition-all hover:-translate-y-0.5 active:translate-y-0"
                                                           :class="{ 'opacity-25': form.processing }"
                                                           :disabled="form.processing">
                                                {{ __('translate.save') }}
                                            </PrimaryButton>
                                        </div>
                                    </form>
                                </div>
                            </section>
                        </div>

                        <!-- PLACEHOLDER BRAKU WYBORU -->
                        <div v-else class="flex flex-col items-center justify-center h-[600px] bg-white rounded-3xl border border-dashed border-gray-200 p-12 text-center">
                            <div class="w-20 h-20 bg-gray-50 rounded-full flex items-center justify-center mb-6">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-gray-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                                </svg>
                            </div>
                            <h3 class="text-xl font-bold text-gray-900 mb-2">{{ __('translate.chooseCvToEdit') }}</h3>
                            <p class="text-gray-400 max-w-xs mx-auto">Wybierz jeden ze swoich życiorysów z listy po lewej stronie, aby rozpocząć edycję.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </AppLayout>
</template>
<style src="vue-multiselect/dist/vue-multiselect.css"></style>
<style lang="scss">
.ghost {
    background: #e5e7ebb3;
}

.handle {
    cursor: grab;
}

.handle:active {
    cursor: grabbing;
}

.modern-datepicker {
    .dp__input {
        border-radius: 1rem;
        border-color: #f3f4f6;
        background-color: #f9fafb80;
        padding-top: 10px;
        padding-bottom: 10px;
        font-size: 0.875rem;
        transition: all 0.2s;

        &:hover {
            border-color: #e5e7eb;
        }

        &:focus {
            background-color: #ffffff;
            border-color: #3b82f6;
            box-shadow: 0 0 0 4px rgba(59, 130, 246, 0.1);
        }
    }
}

.custom-multiselect {
    .multiselect__tags {
        border-radius: 1rem;
        border-color: #f3f4f6;
        background-color: #f9fafb80;
        padding: 8px 40px 0 8px;
        min-height: 44px;
        transition: all 0.2s;
    }

    .multiselect__input, .multiselect__single {
        background: transparent;
        font-size: 0.875rem;
        margin-bottom: 8px;
    }

    .multiselect__placeholder {
        margin-bottom: 8px;
        color: #9ca3af;
    }

    &.multiselect--active .multiselect__tags {
        background-color: #ffffff;
        border-color: #3b82f6;
        box-shadow: 0 0 0 4px rgba(59, 130, 246, 0.1);
    }

    .multiselect__tag {
        background: #0A2C5C !important;
        border-radius: 8px;
        padding: 4px 26px 4px 10px;
        font-weight: 600;
        font-size: 0.75rem;
    }

    .multiselect__tag-icon:after {
        color: white;
    }

    .multiselect__tag-icon:hover {
        background: rgba(255, 255, 255, 0.2) !important;
    }

    .multiselect__option--highlight {
        background: #0A2C5C !important;
        outline: none;
        color: white;
    }

    .multiselect__option--selected {
        background: #12315d !important;
        color: white;
        font-weight: bold;
    }

    .multiselect__content-wrapper {
        border-radius: 1rem;
        margin-top: 4px;
        border-color: #f3f4f6;
        box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1);
    }
}
</style>
