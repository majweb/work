<script setup>
import FrontLayout from "@/Layouts/FrontLayout.vue";
import {Link, useForm, usePage} from '@inertiajs/vue3';
import DialogModal from "@/Components/DialogModal.vue";
import {computed, ref} from "vue";
import SecondaryButton from "@/Components/SecondaryButton.vue";
import PrimaryButton from "@/Components/PrimaryButton.vue";
import InputError from "@/Components/InputError.vue";
import TextInput from "@/Components/TextInput.vue";
import InputLabel from "@/Components/InputLabel.vue";
import {MediaLibraryCollection} from '@spatie/media-library-pro-vue3-collection';
import {usePermission} from "@/Composables/usePermission.js";

const props = defineProps({
    project: Object,
    agreements: Array,
});
const showModal = ref(false);
const showSecondModal = ref(false);
const isReadyToSubmit = ref(true);
const captchaText = ref('');
const coloredCaptcha = ref([]);
const uploaderKey = ref(0);
const {hasRole} = usePermission();

const user = computed(()=>usePage().props.auth.user);


const openModal = () => {
    showModal.value = true;
}
const openModalSecond = () => {
    loadCaptcha();
    showSecondModal.value = true;
    showModal.value = false;
}

const form = useForm({
    name: (user.value && hasRole('worker')) ? user.value.name : '',
    surname: (user.value && user.value.worker_detail && hasRole('worker')) ? user.value.worker_detail?.surname : '',
    phone: (user.value && user.value.worker_detail && hasRole('worker')) ? user.value.worker_detail?.contact_phone : '',
    email: (user.value && hasRole('worker')) ? user.value.email : '',
    file: null,
    captcha: '',
    agreements: [],
});
const submit = () => {
    form.post(route('front.aplicationNoLogin.store',props.project), {
        errorBag: 'AplicationNonLogin',
        preserveScroll: true,
        onSuccess: () => {
            form.reset();
            showSecondModal.value = false;
        },
    });
}


const onChange = (file) => {
    form.file = file;
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

const closeModal = () => {
    axios.get('/resetSessionCapcha').catch(error => {
        console.error('Błąd przy resetowaniu sesji', error);
    });
    uploaderKey.value++;
    showSecondModal.value = false;
    form.reset();
    form.clearErrors();
}

</script>
<template>
    <FrontLayout :title="__('translate.project')">
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg">
                    <Link :href="route('front.projects')" class="font-bold text-xl underline p-4">
                        {{ __('translate.backToList') }}
                    </Link>
                    <h2 class="font-bold text-2xl p-4 text-center text-red-500">
                        {{ project.category.allTranslations.title[usePage().props.language] }}</h2>
                    <p class="mb-5">{{ project.title[usePage().props.language] }}</p>
                    <PrimaryButton @click="openModal" class="!flex mx-auto text-center justify-center" v-if="!user || (user && hasRole('worker'))">
                        {{ __('translate.apply') }}
                    </PrimaryButton>
                </div>
            </div>
        </div>
    </FrontLayout>
    <DialogModal :show="showModal" @close="showModal = false" max-width="2xl">
        <template #title>
            <div v-if="!user">
                Aby aplikować na ogłoszenia należy najpierw się zalogować.
            </div>
            <div v-else>
                Jesteś zalogowany jako: <strong>{{ user?.name }}</strong>
            </div>
        </template>
        <template #content>
            <div class="flex flex-col items-center space-x-2 justify-center">
                <SecondaryButton @click="openModalSecond" v-if="!user">
                    Aplikuj bez logowania
                </SecondaryButton>
                <Link v-if="!user"
                      class="inline-flex items-center px-4 py-2 bg-white border border-gray-300 rounded-md font-semibold text-xs text-gray-700 uppercase tracking-widest shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 disabled:opacity-25 transition ease-in-out duration-150"
                      :href="route('login',{ projectToRedirect: project.id })">Logowanie
                </Link>
                <SecondaryButton v-if="user && hasRole('worker')"
                      class="inline-flex items-center px-4 py-2 bg-white border border-gray-300 rounded-md font-semibold text-xs text-gray-700 uppercase tracking-widest shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 disabled:opacity-25 transition ease-in-out duration-150"
                      @click="openModalSecond">{{ __('translate.apply') }}
                </SecondaryButton>
            </div>
        </template>
        <template #footer>
            <SecondaryButton @click.native="showModal = false">
                {{ __('translate.cancel') }}
            </SecondaryButton>
        </template>
    </DialogModal>
    <DialogModal :show="showSecondModal" @close="closeModal">
        <template #title>
            {{(user && hasRole('worker') ? __('translate.apply') : __('translate.aplicationWithoutRegister'))}}
        </template>
        <template #content>
            <form @submit.prevent="submit">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div>
                        <InputLabel for="name" :value="__('translate.name')"/>
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
                            type="number"
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
                <div class="col-span-2sss">
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
                                    fileTypeNotAllowed: __('translate.fileTypeNotAllowed'),
                                    tooLarge: __('translate.fileTypeNotAllowed'),
                                    tooSmall: __('translate.fileTypeNotAllowed'),
                                    tryAgain: __('translate.fileTypeNotAllowed'),
                                    somethingWentWrong: __('translate.fileTypeNotAllowed'),
                                    selectOrDrag: __('translate.fileTypeNotAllowed'),
                                    selectOrDragMax: __('translate.fileTypeNotAllowed') + ' {maxItems} {file}',
                                    file: { singular: __('translate.fileSingular'), plural: __('translate.plików') },
                                    anyImage: __('translate.fileTypeNotAllowed'),
                                    anyVideo: __('translate.fileTypeNotAllowed'),
                                    goBack: __('translate.fileTypeNotAllowed'),
                                    dropFile: __('translate.fileTypeNotAllowed'),
                                    dragHere: __('translate.fileTypeNotAllowed'),
                                    remove: __('translate.fileTypeNotAllowed'),
                                    name: __('translate.fileTypeNotAllowed'),
                                    download: __('translate.fileTypeNotAllowed'),
                                }"
                    />
                    <InputError :message="form.errors.file" class="mt-1"/>
                    <div v-for="(error, fileKey) in form.errors" :key="fileKey" class="error-message">
                        <span v-if="fileKey.startsWith('file.')">{{ error }}</span>
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
                    <PrimaryButton class="w-1/4 flex justify-center" :class="{ 'opacity-25': form.processing }"
                                   :disabled="form.processing || !isReadyToSubmit">
                        {{ __('translate.apply') }}
                    </PrimaryButton>
                </div>
            </form>


        </template>
        <template #footer>
            <SecondaryButton @click.native="closeModal">
                {{ __('translate.cancel') }}
            </SecondaryButton>
        </template>
    </DialogModal>
</template>
