<script setup>
import { useForm } from '@inertiajs/vue3'
import FrontLayout from '@/Layouts/FrontLayout.vue'
import { ref, onMounted } from 'vue'
import axios from 'axios'
import __ from "@/lang.js";
import Checkbox from "@/Components/Checkbox.vue";
import InputError from "@/Components/InputError.vue";
import TextInput from "@/Components/TextInput.vue";

/* ---------------------------
   FORMULARZ
---------------------------- */
const form = useForm({
    email: '',
    subject: '',
    message: '',
    captcha: '',
    agree: false,
})

const successMessage = ref('') // komunikat sukcesu

const submit = () => {
    form.post('/contact', {
        onSuccess: () => {
            form.reset()
            successMessage.value = __('info.sent') // "Wiadomość została wysłana"

            // Wywołujemy nową CAPTCHA od razu
            loadCaptcha()

            setTimeout(() => {
                successMessage.value = ''
            }, 2000)
        }
    })
}

/* ---------------------------
   CAPTCHA
---------------------------- */
const captchaText = ref('')
const coloredCaptcha = ref([])

const colorizeCaptcha = (text) =>
    text.split('').map(letter => ({ letter }))

const loadCaptcha = () => {
    axios.get('/generateCaptcha')
        .then(res => {
            captchaText.value = res.data.captchaText
            coloredCaptcha.value = colorizeCaptcha(captchaText.value)
        })
        .catch(() => console.error("Błąd CAPTCHA"))
}

const reloadCaptcha = () => loadCaptcha()

onMounted(() => loadCaptcha())
</script>

<template>
    <FrontLayout :title="'Kontakt'">
        <div class="py-12 bg-[#0A2342] text-white min-h-screen flex justify-center items-center">
            <div class="max-w-7xl w-full grid grid-cols-1 lg:grid-cols-2 gap-10 px-6">

                <!-- FORMULARZ -->
                <div class="bg-white text-black rounded-xl p-8 shadow-xl">
                    <div class="flex justify-center mb-4">
                        <img src="/images/logo-horizontal.svg" class="w-4/5" alt="logo">
                    </div>
                    <!-- KOMUNIKAT SUKCESU -->
                    <div v-if="successMessage" class="mb-4 p-4 text-green-800 bg-green-100 rounded transition-all">
                        {{ successMessage }}
                    </div>

                    <form @submit.prevent="submit" class="space-y-4 relative">
                        <div class="mt-4">
                            <TextInput
                                :placeholder="__('translate.email')"
                                id="email"
                                v-model="form.email"
                                type="email"
                                class="mt-1 block w-full border-work-main focus:ring-work-main"
                            />
                            <InputError :message="form.errors.email" class="mt-2" />
                        </div>
                        <div class="mt-4">
                            <TextInput
                                :placeholder="__('info.subject')"
                                id="subject"
                                v-model="form.subject"
                                type="text"
                                class="mt-1 block w-full border-work-main focus:ring-work-main"
                            />
                            <InputError :message="form.errors.subject" class="mt-2" />
                        </div>
                        <div class="mt-4">
                      <textarea v-model="form.message" :placeholder="__('info.message')" rows="4"
                                class="border-gray-300 focus:blue-work rounded-md shadow-sm mt-1 block w-full border-work-main focus:ring-work-main"></textarea>
                            <InputError :message="form.errors.message" class="mt-2" />
                        </div>

                        <!-- CAPTCHA -->
                        <div>
                            <label class="block font-semibold mb-2">Przepisz kod</label>

                            <div class="flex items-center gap-3">
                                <!-- Kolorowy 6-literowy kod -->
                                <div class="bg-gray-100 p-2 rounded text-center">
                                      <span v-for="(item,index) in coloredCaptcha"
                                            :key="index"
                                            :style="{ color:item.color }"
                                            class="font-bold text-lg mr-1">
                                        {{ item.letter }}
                                      </span>
                                </div>
                                <!-- Pole wpisywania -->
                                <TextInput
                                    :placeholder="__('info.code')"
                                    id="captcha"
                                    maxlength="6"
                                    v-model="form.captcha"
                                    type="text"
                                    class="mt-1 block border-work-main focus:ring-work-main relative z-10"
                                />
                            </div>
                                <!-- Błędy -->
                                <div v-if="form.errors.captcha" class="text-red-600 text-sm mt-1 w-3/5">
                                    {{ form.errors.captcha }}
                                </div>
                            <!-- AGREE -->
                            <div class="block mt-4">
                                <label class="flex items-center">
                                    <Checkbox v-model:checked="form.agree" name="agree" />
                                    <span class="ml-2 text-sm text-gray-600 w-3/5">{{ __('info.agree') }}</span>
                                </label>
                                <!-- Błędy -->
                                <div v-if="form.errors.agree" class="text-red-600 text-sm mt-1">
                                    {{ form.errors.agree }}
                                </div>
                            </div>
                            <!-- Przycisk odświeżenia -->
                            <button type="button"
                                    @click="reloadCaptcha"
                                    class="text-work-main text-xs mt-2 hover:underline">
                                Odśwież CAPTCHA
                            </button>
                        </div>

                        <!-- SUBMIT -->
                        <button type="submit"
                                class="text-4xl uppercase bg-work-main text-white font-bold px-6 py-2 rounded-md w-auto transition hover:bg-work-main-light">
                            Wyślij
                        </button>
                        <img src="/images/contact/hand.png" alt="hand" class="absolute -bottom-8 right-0 h-[300px] z-0">
                    </form>
                </div>

                <!-- STRONA INFORMACYJNA -->
                <div class="text-center flex flex-col justify-center space-y-8">
                    <h1 class="text-4xl font-bold tracking-wide">KONTAKT</h1>
                    <div class="grid grid-cols-2 gap-8">
                        <div class="flex flex-col gap-4">
                            <div class="flex flex-col items-center gap-2">
                                <img src="/images/contact/contact.png" alt="contact" class="h-20">
                                <h3 class="text-xl font-semibold">Kontakt</h3>
                                <p>contact@work4you.global</p>
                                <p>kontakt@work4you.global</p>
                            </div>
                            <div>
                                <h3 class="text-xl font-semibold">Reklama</h3>
                                <p>marketing@work4you.global</p>
                            </div>
                        </div>

                        <div class="flex flex-col items-center gap-2">
                            <img src="/images/contact/local.png" alt="local" class="h-20">
                            <h3 class="text-xl font-semibold">WORK4YOU.GLOBAL LTD</h3>
                            <p>Office 180B,<br />182-184 High Street North<br />London E6 2JA</p>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </FrontLayout>
</template>
