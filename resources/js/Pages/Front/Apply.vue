<script setup>
import FrontLayout from "@/Layouts/FrontLayout.vue";
import {Link, useForm, usePage,router} from '@inertiajs/vue3';
import {computed, onMounted, ref,watch} from "vue";
import PrimaryButton from "@/Components/PrimaryButton.vue";
import InputError from "@/Components/InputError.vue";
import TextInput from "@/Components/TextInput.vue";
import InputLabel from "@/Components/InputLabel.vue";
import {MediaLibraryCollection} from '@spatie/media-library-pro-vue3-collection';
import {MediaLibraryAttachment} from '@spatie/media-library-pro-vue3-attachment';
import {usePermission} from "@/Composables/usePermission.js";

const props = defineProps({
    project: Object,
    agreements: Array,
});
const formStep = ref(1);
const isReadyToSubmit = ref(true);
const captchaText = ref('');
const coloredCaptcha = ref([]);
const uploaderKey = ref(0);
const {hasRole} = usePermission();

const user = computed(()=>usePage().props.auth.user);

onMounted(() => {
    loadCaptcha();
});

const form = useForm({
    name: (user.value && hasRole('worker')) ? user.value.name : '',
    surname: (user.value && user.value.worker_detail && hasRole('worker')) ? user.value.worker_detail?.surname : '',
    phone: (user.value && user.value.worker_detail && hasRole('worker')) ? user.value.worker_detail?.contact_phone : '',
    email: (user.value && hasRole('worker')) ? user.value.email : '',
    file: null,
    captcha: '',
    cv: '',
    agreements: [],
    step: formStep.value,
    birthday: '',
    city: '',
    postal: '',
    photo: null,
});
const submit = () => {
    form.post(route('front.aplicationNoLogin.store',props.project), {
        errorBag: 'AplicationNonLogin',
        preserveScroll: true,
        onSuccess: () => {
            form.reset();
        },
    });
}


const onChange = (file) => {
    form.file = file;
}
const onChangePhoto = (photo) => {
    form.photo = photo;
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
    form.post(route('front.projects.second.step',props.project), {
        errorBag: 'AplicationNonLogin',
        preserveScroll: true,
        onSuccess: () => {
            formStep.value++;
        },
    });
}
    const prevStep = () => {
    formStep.value--;
        form.photo = null;

    }


watch(formStep, (newStep) => {
    form.step = newStep;
});

</script>
<template>
    <FrontLayout :title="__('translate.project')">
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg p-4">
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
                                <media-library-collection
                                    name="file"
                                    :max-items="5"
                                    :key="uploaderKey"
                                    :initial-value="form.file"
                                    :validation-errors="form.errors.file"
                                    :validation-rules="{ maxSizeInKB: 3000,accept: ['application/msword', 'application/vnd.openxmlformats-officedocument.wordprocessingml.document', 'application/vnd.oasis.opendocument.text', 'application/pdf', 'application/vnd.ms-excel', 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet', 'text/plain'] }"
                                    @is-ready-to-submit-change="isReadyToSubmit = $event"
                                    @change="onChange"
                                    :translations="{
                                        fileTypeNotAllowed : __('translate.fileTypeNotAllowed'),
                                        tooLarge : __('translate.tooLarge'),
                                        tooSmall : __('translate.tooSmall'),
                                        tryAgain : __('translate.tryAgain'),
                                        somethingWentWrong : __('translate.somethingWentWrong'),
                                        selectOrDrag : __('translate.selectOrDrag'),
                                        selectOrDragMax : __('translate.selectOrDragMax'),
                                        file : {
                                            singular : __('translate.file.singular'),
                                            plural : __('translate.file.plural'),
                                        },
                                        anyImage : __('translate.anyImage'),
                                        anyVideo : __('translate.anyVideo'),
                                        goBack : __('translate.goBack'),
                                        dropFile : __('translate.dropFile'),
                                        dragHere : __('translate.dragHere'),
                                        remove : __('translate.remove'),
                                        download : __('translate.download')
                                        }"
                                />
                                <InputError :message="form.errors.file" class="mt-1"/>
                                <div v-for="(error, fileKey) in form.errors" :key="fileKey">
                                    <span class="text-sm text-red-600" v-if="fileKey.startsWith('file.')">{{ error }}</span>
                                </div>
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
                            <div class="flex items-center justify-center mt-4">
                                <PrimaryButton v-if="!form.cv && formStep == 1" class="w-1/4 flex justify-center" :class="{ 'opacity-25': form.processing }"
                                               :disabled="form.processing || !isReadyToSubmit">
                                    {{ __('translate.apply') }}
                                </PrimaryButton>
                            </div>
                        </div>
                            <div v-if="formStep == 2 && form.cv == 1">
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                    <div>
                                        <InputLabel for="birthday" :value="__('translate.birthdayDate')"/>
                                        <TextInput
                                            id="birthday"
                                            v-model="form.birthday"
                                            class="mt-1 block w-full"
                                            type="date"
                                        />
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
                                        <InputLabel for="image" :value="__('translate.Photo')"/>

                                        <media-library-attachment
                                            name="photo"
                                            :initial-value="form.photo"
                                            :validation-errors="form.errors.photo"
                                            :validation-rules="{ accept: ['image/png', 'image/jpeg','image/jpg'], maxSizeInKB: 2000 }"
                                            @is-ready-to-submit-change="isReadyToSubmit = $event"
                                            @change="onChangePhoto"
                                            :translations="{
                                                fileTypeNotAllowed : __('translate.fileTypeNotAllowed'),
                                                tooLarge : __('translate.tooLarge'),
                                                tooSmall : __('translate.tooSmall'),
                                                tryAgain : __('translate.tryAgain'),
                                                somethingWentWrong : __('translate.somethingWentWrong'),
                                                selectOrDrag : __('translate.selectOrDrag'),
                                                selectOrDragMax : __('translate.selectOrDragMax'),
                                                file : {
                                                    singular : __('translate.file.singular'),
                                                    plural : __('translate.file.plural'),
                                                },
                                                anyImage : __('translate.anyImage'),
                                                anyVideo : __('translate.anyVideo'),
                                                goBack : __('translate.goBack'),
                                                dropFile : __('translate.dropFile'),
                                                dragHere : __('translate.dragHere'),
                                                remove : __('translate.remove'),
                                                download : __('translate.download')
                                }"
                                        />
                                        <InputError  :message="form.errors.photo" class="mt-1"/>
                                        <div v-for="(error, fileKey) in form.errors" :key="fileKey">
                                            <span class="text-sm text-red-600" v-if="fileKey.startsWith('photo.')">{{ error }}</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex items-center justify-center mt-4">
                                    <PrimaryButton v-if="form.cv && formStep == 2" class="w-1/4 flex justify-center" :class="{ 'opacity-25': form.processing }"
                                                   :disabled="form.processing || !isReadyToSubmit">
                                        {{ __('translate.apply') }}
                                    </PrimaryButton>
                                </div>
                            </div>
                        <div v-if="formStep == 2 && form.cv == 2">
                            Video
                        </div>

                    <div class="flex items-center justify-center mt-4">
                        <PrimaryButton type="button" @click="nextStep" v-if="form.cv && formStep == 1" class="w-1/4 flex justify-center">
                            <span v-if="form.cv && form.cv == 1 && formStep == 1">{{__('translate.generateCv')}}</span>
                            <span v-else-if="form.cv && form.cv == 2 && formStep == 1">{{__('translate.generateCvVideo')}}</span>
                            <span v-else-if="form.cv && form.cv == 3 && formStep == 1">{{__('translate.generateCvAudio')}}</span>
                            <span v-else-if="form.cv && form.cv == 4 && formStep == 1">{{__('translate.testRecruitment')}}</span>
                        </PrimaryButton>
                        <PrimaryButton type="button" @click="prevStep" v-if="form.cv && formStep == 2" class="w-1/4 flex justify-center">
                            poprzedni krok
                        </PrimaryButton>
                    </div>
                </form>
                </div>
            </div>
        </div>
    </FrontLayout>
</template>
