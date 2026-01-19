<script setup>
import AppLayout from "@/Layouts/AppLayout.vue"
import {computed, ref} from "vue"
import {useForm, usePage} from "@inertiajs/vue3"
import ActionMessage from "@/Components/ActionMessage.vue"
import PrimaryButton from "@/Components/PrimaryButton.vue"
import SecondaryButton from "@/Components/SecondaryButton.vue"
import TextInput from "@/Components/TextInput.vue"
import {usePermission} from "@/Composables/usePermission.js"
import DangerButton from "@/Components/DangerButton.vue";
import Checkbox from "@/Components/Checkbox.vue";
import InputError from "@/Components/InputError.vue";
import draggable from 'vuedraggable/src/vuedraggable'
import Multiselect from 'vue-multiselect';
import InputLabel from "@/Components/InputLabel.vue";

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
        start: adjustMonth(exp.start),
        end: adjustMonth(exp.end),
    })) : []
    formCv.educations = cv?.educations ? cv?.educations : []

    formCv.courses = cv?.courses ? cv?.courses.map(course => ({
        ...course,
        date: adjustMonth(course.date),
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
        start: '',
        end: '',
        isCurrent: false,
        city: '',
    })
}
const addEducation = () => {
    formCv.educations.push({
        school: '',
        level: '',
        specialization: '',
        finish: '',
        city: '',
    });
}
const addCourse = () => {
    formCv.courses.push({
        name: '',
        organizator: '',
        date: '',
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
        formCv.experiences[index].end = ''
    }
}

const monthYearFormat = (date) => {
    const month = String(date.getMonth() + 1).padStart(2, "0")
    const year = date.getFullYear()
    return `${month}.${year}`
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
    formCv.post(route("worker.myCvUpdateCv", selectedCv.value), {
        preserveScroll: true,
    });
}
</script>

<template>
    <AppLayout :title="__('translate.dashboard')">
        <!-- HEADER -->
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('translate.myCv') }}
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
                <h3 class="text-2xl font-semibold text-gray-800">
                    Informacje podstawowe
                </h3>
                <div class="flex gap-6 flex-col md:flex-row">
                    <!-- FORMULARZ -->
                    <div
                        v-if="selectedCv"
                        class="bg-white rounded-2xl shadow p-6 flex-1 order-1 md:order-0"
                    >
                        <form @submit.prevent="updateProfileInformation">
                            <div class="flex flex-col md:flex-row gap-8">
                                <!-- AVATAR -->
                                <div class="flex flex-col items-center md:w-56">
                                    <input
                                        ref="photoInput"
                                        type="file"
                                        class="hidden"
                                        @change="updatePhotoPreview"
                                    >

                                    <div class="mb-4">
                                        <img
                                            v-if="!photoPreview"
                                            :src="user.profile_photo_url"
                                            class="w-32 h-32 rounded-full object-contain"
                                        >
                                        <div
                                            v-else
                                            class="w-32 h-32 rounded-full bg-cover bg-center"
                                            :style="`background-image:url('${photoPreview}')`"
                                        />
                                    </div>

                                    <SecondaryButton
                                        type="button"
                                        class="w-full text-xs"
                                        @click.prevent="selectNewPhoto"
                                    >
                                        WYBIERZ NOWE ZDJĘCIE
                                    </SecondaryButton>
                                </div>
                                <!-- INPUTY -->
                                <div class="flex-1 grid grid-cols-1 md:grid-cols-2 gap-3">
                                    <TextInput v-model="form.name" :placeholder="__('translate.nameUser')"/>
                                    <TextInput v-model="form.birthdate" :placeholder="__('translate.birthdayDate')"/>
                                    <TextInput v-model="form.surname" :placeholder="__('translate.surname')"/>
                                    <TextInput v-model="form.zip" :placeholder="__('translate.Postal')"/>
                                    <TextInput v-model="form.contact_phone" :placeholder="__('translate.nrPhone')"/>
                                    <TextInput v-model="form.city" :placeholder="__('translate.City')"/>
                                    <TextInput
                                        v-model="form.email"
                                        type="email"
                                        class="md:col-span-2"
                                        :placeholder="__('translate.email')"
                                    />
                                </div>
                            </div>
                            <div class="flex justify-end items-center mt-6 gap-4">
                                <ActionMessage :on="form.recentlySuccessful">
                                    Zapisano
                                </ActionMessage>

                                <PrimaryButton :disabled="form.processing">
                                    Zapisz
                                </PrimaryButton>
                            </div>
                        </form>
                        <!--                        EXPERIENCE-->
                        <form @submit.prevent="submit" class="flex justify-center flex-col">
                            <!-- EXPERIENCE -->
                            <div class="mt-10">
                                <h3 class="text-xl font-semibold text-gray-800 mb-4">
                                    {{ __('translate.experience') }}
                                </h3>
                                <div class="flex justify-end">
                                    <!-- ADD -->
                                    <PrimaryButton
                                        type="button"
                                        v-if="formCv.experiences.length < 5"
                                        @click="addExperience"
                                    >
                                        {{ __('translate.addExperience') }}
                                    </PrimaryButton>
                                </div>

                                <span
                                    v-if="formCv.experiences.length === 5"
                                    class="block text-center text-xs text-red-600 mt-2"
                                >
                                {{ __('translate.limitComplete') }}
                                </span>

                                <span class="block text-center text-xs text-gray-500 mt-1">
        {{ __('translate.quantity') }}: {{ formCv.experiences.length }}/5
    </span>

                                <InputError :message="formCv.errors.experiences" class="text-center mt-2"/>

                                <!-- LIST -->
                                <draggable
                                    v-model="formCv.experiences"
                                    item-key="id"
                                    handle=".handle"
                                    ghost-class="ghost"
                                    class="mt-6 space-y-6"
                                >
                                    <template #item="{ element: experience, index }">
                                        <div>
                                            <svg class="outline-none h-5 w-5 handle stroke-gray-300 ml-1 mt-1"
                                                 fill="none"
                                                 stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <path d="M4 6h16M4 10h16M4 14h16M4 18h16" stroke-linecap="round"
                                                      stroke-linejoin="round"></path>
                                            </svg>
                                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                                <!-- POSITION -->
                                                <div v-if="optionsPositions">
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
                                                        :placeholder="__('translate.position')"
                                                        v-model="experience.position" :options="optionsPositions">
                                                        <template #noResult>
                                                            <span>{{ __('translate.noOptions') }}</span>
                                                        </template>
                                                        <template #noOptions>
                                                            <span>{{ __('translate.noResult') }}</span>
                                                        </template>
                                                    </multiselect>
                                                    <InputError
                                                        :message="formCv.errors[`experiences.${index}.position`]"
                                                        class="mt-2"/>
                                                </div>
                                                <!-- START -->
                                                <div>
                                                    <VueDatePicker
                                                        v-model="experience.start"
                                                        month-picker
                                                        auto-apply
                                                        :locale="lang"
                                                        :format="monthYearFormat"
                                                    />
                                                    <InputError
                                                        :message="formCv.errors[`experiences.${index}.start`]"
                                                        class="mt-2"/>
                                                </div>
                                                <!-- EMPLOYER -->
                                                <div>
                                                    <TextInput v-model="experience.employer" class="w-full"
                                                               :placeholder="__('translate.employer')"/>
                                                    <InputError
                                                        :message="formCv.errors[`experiences.${index}.employer`]"
                                                        class="mt-2"/>
                                                </div>
                                                <!-- END -->
                                                <div>
                                                    <VueDatePicker
                                                        v-model="experience.end"
                                                        month-picker
                                                        auto-apply
                                                        :locale="lang"
                                                        :disabled="experience.isCurrent"
                                                    />
                                                    <label class="flex items-center gap-2 mt-2 text-sm">
                                                        <Checkbox
                                                            v-model:checked="experience.isCurrent"
                                                            @change="handleIsCurrentChange(index)"
                                                        />
                                                        {{ __('translate.currently') }}
                                                    </label>
                                                    <InputError
                                                        :message="formCv.errors[`experiences.${index}.end`]"
                                                        class="mt-2"/>
                                                </div>
                                                <!-- CITY -->
                                                <div class="relative">
                                                    <TextInput v-model="experience.city" class="w-full"
                                                               :placeholder="__('translate.City')"/>
                                                    <InputError
                                                        :message="formCv.errors[`experiences.${index}.city`]"
                                                        class="mt-2"/>
                                                </div>
                                            </div>

                                            <!-- DELETE -->
                                            <DangerButton
                                                class="mt-6 mx-auto flex"
                                                @click="removeElement(index)"
                                            >
                                                {{ __('translate.deleteExperience') }}
                                            </DangerButton>
                                        </div>
                                    </template>
                                </draggable>
                            </div>
                            <!-- /EXPERIENCE -->
                            <div class="mt-10">
                                <h3 class="text-xl font-semibold text-gray-800 mb-4">
                                    {{ __('translate.education') }}
                                </h3>
                                <div class="flex justify-end">
                                    <PrimaryButton class="!flex justify-center w-100 mt-3" type="button"
                                                   @click="addEducation" v-if="formCv.educations.length < 5">
                                        {{ __('translate.addEducation') }}
                                    </PrimaryButton>
                                </div>
                                <span v-if="formCv.educations.length == 5"
                                      class="inline-flex items-center justify-center px-4 py-2 bg-red-300 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-red-500 active:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2 transition ease-in-out duration-150 mt-3 !flex justify-center w-1/4 mx-auto">{{ __('translate.limitComplete') }}</span>
                                <span
                                    class="text-xs flex items-center justify-center mt-2">{{ __('translate.quantity') }}: {{ formCv.educations.length }}/5</span>
                                <InputError :message="formCv.errors.educations" class="text-center mt-2"/>
                                <draggable :list="formCv.educations" ghost-class="ghost" handle=".handle"
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
                                                    <TextInput
                                                        :id="`educations-${index}-school`"
                                                        v-model="education.school"
                                                        class="mt-1 block w-full"
                                                        type="text"
                                                        :placeholder="__('translate.school')"
                                                    />
                                                    <InputError
                                                        :message="formCv.errors[`educations.${index}.school`]"
                                                        class="mt-2"/>

                                                </div>
                                                <!-- SCHOOL -->
                                                <!--                                                    LEVEL-->
                                                <div v-if="props.levelEducations" class="col-span-2">
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
                                                        v-model="education.level" :options="props.levelEducations">
                                                        <template #noResult>
                                                            <span>{{ __('translate.noOptions') }}</span>
                                                        </template>
                                                        <template #noOptions>
                                                            <span>{{ __('translate.noResult') }}</span>
                                                        </template>
                                                    </multiselect>
                                                    <InputError
                                                        :message="formCv.errors[`educations.${index}.level`]"
                                                        class="mt-2"/>
                                                </div>
                                                <!--                                                    LEVEL-->

                                                <!-- SPECIALIZATION -->
                                                <div>
                                                    <TextInput
                                                        :id="`educations-${index}-specialization`"
                                                        v-model="education.specialization"
                                                        class="mt-1 block w-full"
                                                        type="text"
                                                        :placeholder="__('translate.specialization')"
                                                    />
                                                    <InputError
                                                        :message="formCv.errors[`educations.${index}.specialization`]"
                                                        class="mt-2"/>

                                                </div>
                                                <!-- SPECIALIZATION -->
                                                <!-- FINISH -->
                                                <div>

                                                    <VueDatePicker model-type="yyyy" v-model="education.finish"
                                                                   :locale="lang" auto-apply
                                                                   :id="`educations-${index}-finish`" year-picker/>
                                                    <InputError
                                                        :message="formCv.errors[`educations.${index}.finish`]"
                                                        class="mt-2"/>
                                                </div>
                                                <!-- FINISH -->
                                                <!-- CITY -->
                                                <div>
                                                    <TextInput
                                                        :id="`educations-${index}-city`"
                                                        v-model="education.city"
                                                        class="block w-full"
                                                        type="text"
                                                        :placeholder="__('translate.City')"
                                                    />
                                                    <InputError
                                                        :message="formCv.errors[`educations.${index}.city`]"
                                                        class="mt-2"/>
                                                </div>
                                                <!-- CITY -->
                                            </div>
                                            <DangerButton class="mt-3 !flex justify-center w-100 mx-auto"
                                                          @click="removeElementArray(index,formCv.educations)">
                                                <svg class="h-4 w-4 mr-2" fill="none"
                                                     stroke="currentColor"
                                                     stroke-width="2" viewBox="0 0 24 24"
                                                     xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"
                                                        stroke-linecap="round"
                                                        stroke-linejoin="round"/>
                                                </svg>
                                                {{ __('translate.deleteEducation') }}
                                            </DangerButton>
                                        </div>
                                    </template>
                                </draggable>
                            </div>
                            <!--EDUCATION-->
                            <div class="mt-10">
                                <h3 class="text-xl font-semibold text-gray-800 mb-4">
                                    {{ __('translate.courses') }}
                                </h3>
                                <!--                                    COURSES-->
                                <div class="flex justify-end">
                                    <PrimaryButton class="!flex justify-center w-100 mt-3" type="button"
                                                   @click="addCourse" v-if="formCv.courses.length < 5">
                                        {{ __('translate.addCourse') }}
                                    </PrimaryButton>
                                </div>
                                <span v-if="formCv.courses.length == 5"
                                      class="inline-flex items-center justify-center px-4 py-2 bg-red-300 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-red-500 active:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2 transition ease-in-out duration-150 mt-3 !flex justify-center w-1/4 mx-auto">{{ __('translate.limitComplete') }}</span>
                                <span
                                    class="text-xs flex items-center justify-center mt-2">{{ __('translate.quantity') }}: {{ formCv.courses.length }}/5</span>
                                <InputError :message="formCv.errors.courses" class="text-center mt-2"/>
                                <draggable :list="formCv.courses" ghost-class="ghost" handle=".handle"
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
                                                    <TextInput
                                                        :id="`courses-${index}-name`"
                                                        v-model="course.name"
                                                        class="mt-1 block w-full"
                                                        type="text"
                                                        :placeholder="__('translate.name')"
                                                    />
                                                    <InputError
                                                        :message="formCv.errors[`courses.${index}.name`]"
                                                        class="mt-2"/>

                                                </div>
                                                <!-- NAME -->

                                                <!-- ORGANIZATOR -->
                                                <div>
                                                    <TextInput
                                                        :id="`courses-${index}-organizator`"
                                                        v-model="course.organizator"
                                                        class="mt-1 block w-full"
                                                        type="text"
                                                        :placeholder="__('translate.organizator')"
                                                    />
                                                    <InputError
                                                        :message="formCv.errors[`courses.${index}.organizator`]"
                                                        class="mt-2"/>

                                                </div>
                                                <!-- ORGANIZATOR -->
                                                <!-- DATE -->
                                                <div>
                                                    <VueDatePicker
                                                        v-model="course.date"
                                                        :locale="lang"
                                                        month-picker
                                                        :format="monthYearFormat"
                                                        auto-apply
                                                        :id="`courses-${index}-date`"
                                                    />


                                                    <InputError
                                                        :message="formCv.errors[`courses.${index}.date`]"
                                                        class="mt-2"/>
                                                </div>
                                                <!-- DATE -->
                                            </div>
                                            <DangerButton class="mt-3 !flex justify-center w-100 mx-auto"
                                                          @click="removeElementArray(index,formCv.courses)">
                                                <svg class="h-4 w-4 mr-2" fill="none"
                                                     stroke="currentColor"
                                                     stroke-width="2" viewBox="0 0 24 24"
                                                     xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"
                                                        stroke-linecap="round"
                                                        stroke-linejoin="round"/>
                                                </svg>
                                                {{ __('translate.deleteCourse') }}
                                            </DangerButton>
                                        </div>
                                    </template>
                                </draggable>


                                <!--                                    COURSES-->


                                <!--                                    LANGS-->
                                <div class="mt-10">
                                <h3 class="text-xl font-semibold text-gray-800 mb-4">
                                    {{ __('translate.langKnow') }}
                                </h3>
                                <div class="flex justify-end">
                                    <PrimaryButton class="!flex justify-center w-100 mt-3" type="button"
                                                   @click="addLang" v-if="formCv.langs.length < 5">
                                        {{ __('translate.addLang') }}
                                    </PrimaryButton>
                                </div>
                                <span v-if="formCv.langs.length == 5"
                                      class="inline-flex items-center justify-center px-4 py-2 bg-red-300 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-red-500 active:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2 transition ease-in-out duration-150 mt-3 !flex justify-center w-1/4 mx-auto">{{ __('translate.limitComplete') }}</span>
                                <span
                                    class="text-xs flex items-center justify-center mt-2">{{ __('translate.quantity') }}: {{ formCv.langs.length }}/5</span>
                                <InputError :message="formCv.errors.langs" class="text-center mt-2"/>
                                <draggable :list="formCv.langs" ghost-class="ghost" handle=".handle"
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
                                                        :options="sortLangs">
                                                        <template #noResult>
                                                            <span>{{ __('translate.noOptions') }}</span>
                                                        </template>
                                                        <template #noOptions>
                                                            <span>{{ __('translate.noResult') }}</span>
                                                        </template>
                                                    </multiselect>
                                                    <InputError
                                                        :message="formCv.errors[`langs.${index}.name`]"
                                                        class="mt-2"/>

                                                </div>
                                                <!-- NAME -->
                                                <!--                                                    LEVEL-->
                                                <div v-if="props.langLevels" class="col-span-2">
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
                                                        v-model="lang.level" :options="props.langLevels">
                                                        <template #noResult>
                                                            <span>{{ __('translate.noOptions') }}</span>
                                                        </template>
                                                        <template #noOptions>
                                                            <span>{{ __('translate.noResult') }}</span>
                                                        </template>
                                                    </multiselect>
                                                    <InputError
                                                        :message="formCv.errors[`langs.${index}.level`]"
                                                        class="mt-2"/>
                                                </div>
                                                <!--                                                    LEVEL-->
                                            </div>
                                            <DangerButton class="mt-3 !flex justify-center w-100 mx-auto"
                                                          @click="removeElementArray(index,formCv.langs)">
                                                <svg class="h-4 w-4 mr-2" fill="none"
                                                     stroke="currentColor"
                                                     stroke-width="2" viewBox="0 0 24 24"
                                                     xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"
                                                        stroke-linecap="round"
                                                        stroke-linejoin="round"/>
                                                </svg>
                                                {{ __('translate.deleteLang') }}
                                            </DangerButton>
                                        </div>
                                    </template>
                                </draggable>

                                </div>
                                <!--                                    LANGS-->

                                <!-- SKILLS -->
                                <div class="col-span-6 mt-4">
                                    <h3 class="text-xl font-semibold text-gray-800 mb-4">
                                        {{ __('translate.skills') }}
                                    </h3>
                                    <div>

                                        <multiselect id="tagging" v-model="formCv.skills" label="name"
                                                     track-by="code" :options="skillsOptions" :max="10" :multiple="true"
                                                     :taggable="true" @tag="addSkill"
                                                     :selectLabel="__('translate.selectLabel')"
                                                     :selectedLabel="__('translate.selectedLabel')"
                                                     :deselectLabel="__('translate.deselectLabel')"
                                                     :noOptions="__('translate.noOptions')"
                                                     :tag-placeholder="__('translate.tagdeselectLabel')"
                                                     :placeholder="__('translate.skills')"
                                                     :noResult="__('translate.noResult')"
                                                     :max-elements="true"
                                        >
                                            <template v-slot:maxElements>
                                                {{ __('translate.tagmaxElements', {max: 10}) }}
                                            </template>
                                            <template v-slot:noOptions>{{ __('translate.noOptions', {max: 10}) }}
                                            </template>
                                        </multiselect>
                                        <InputError :message="formCv.errors.skills" class="text-center mt-2"/>
                                    </div>
                                </div>
                            </div>
                            <div class="flex justify-end">
                                <PrimaryButton class="flex justify-center mt-4"
                                               :class="{ 'opacity-25': form.processing }"
                                               :disabled="form.processing">
                                    {{ __('translate.save') }}
                                </PrimaryButton>
                            </div>
                        </form>
                        <!--                        EXPERIENCE-->
                    </div>

                    <!-- PLACEHOLDER -->
                    <div
                        v-else
                        class="bg-white rounded-2xl shadow p-6 flex-1 flex items-center justify-center text-gray-500 order-1 md:order-0"
                    >
                        {{ __('translate.chooseCvToEdit') }}
                    </div>
                    <!-- LISTA CV -->
                    <div v-if="props.myCvs.length" class="space-y-4 w-80 order-0 md:order-1">
                        <div
                            v-for="cv in props.myCvs"
                            :key="cv.id"
                            class="group flex px-6 py-5 rounded-[32px] shadow flex-col transition"
                            :class="selectedCv?.id === cv.id
                                ? 'bg-work-main text-white'
                                : 'bg-white hover:bg-work-main'"
                        >
                            <h3 class="text-lg font-semibold group-hover:text-white">
                                CV {{ cv.project.category.allTranslations.title[usePage().props.language] }}
                            </h3>

                            <span
                                @click="selectCv(cv)"
                                class="mt-2 px-4 py-1 text-sm font-semibold rounded-full
                                       bg-white text-work-main self-end cursor-pointer"
                            >
                                {{ __('translate.check') }}
                            </span>
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
    cursor: pointer;
}

.dp__input {
    padding-bottom: 8px
}

.multiselect__tag {
    background: #0A2C5C !important;
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
</style>
