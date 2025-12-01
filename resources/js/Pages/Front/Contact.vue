<script setup>
import { useForm } from '@inertiajs/vue3'
import FrontLayout from '@/Layouts/FrontLayout.vue'
import { ref, onMounted } from 'vue'
import axios from 'axios'

/* ---------------------------
   FORMULARZ
---------------------------- */
const form = useForm({
    email: '',
    subject: '',
    message: '',
    captcha: ''
})

const submit = () => {
    form.post('/contact', {
        onSuccess: () => form.reset()
    })
}

/* ---------------------------
   CAPTCHA — identyczna logika
   jak w dużym komponentcie
---------------------------- */
const captchaText = ref('')
const coloredCaptcha = ref([])

const randomColor = () => {
    const letters = '0123456789ABCDEF'
    let color = '#'
    for (let i = 0; i < 6; i++) {
        color += letters[Math.floor(Math.random() * 16)]
    }
    return color
}

const colorizeCaptcha = (text) =>
    text.split('').map(letter => ({
        letter,
        color: randomColor()
    }))

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
                    <h2 class="text-2xl font-semibold mb-6">Skontaktuj się z nami</h2>

                    <form @submit.prevent="submit" class="space-y-4">

                        <input v-model="form.email" type="email" placeholder="E-mail"
                               class="w-full p-3 border rounded" />

                        <input v-model="form.subject" type="text" placeholder="Temat"
                               class="w-full p-3 border rounded" />

                        <textarea v-model="form.message" placeholder="Wiadomość" rows="4"
                                  class="w-full p-3 border rounded"></textarea>

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
                                <input v-model="form.captcha"
                                       type="text"
                                       maxlength="6"
                                       placeholder="Kod"
                                       class="p-2 border rounded w-28" />
                            </div>

                            <!-- Przycisk odświeżenia -->
                            <button type="button"
                                    @click="reloadCaptcha"
                                    class="text-blue-600 text-xs mt-2 hover:underline">
                                Odśwież CAPTCHA
                            </button>

                            <!-- Błędy -->
                            <div v-if="form.errors.captcha" class="text-red-600 text-sm mt-1">
                                {{ form.errors.captcha }}
                            </div>
                        </div>

                        <!-- SUBMIT -->
                        <button type="submit"
                                class="bg-blue-600 text-white px-6 py-3 rounded hover:bg-blue-700 w-full">
                            Wyślij
                        </button>

                    </form>
                </div>

                <!-- STRONA INFORMACYJNA -->
                <div class="text-center flex flex-col justify-center space-y-8">
                    <h1 class="text-4xl font-bold tracking-wide">KONTAKT</h1>
                    <div class="grid grid-cols-2 gap-8">
                        <div class="flex flex-col gap-4">
                            <div>
                                <h3 class="text-xl font-semibold">Kontakt</h3>
                                <p>contact@work4you.global</p>
                                <p>kontakt@work4you.global</p>
                            </div>
                            <div>
                                <h3 class="text-xl font-semibold">Reklama</h3>
                                <p>marketing@work4you.global</p>
                            </div>
                        </div>

                        <div>
                            <h3 class="text-xl font-semibold">WORK4YOU.GLOBAL LTD</h3>
                            <p>Office 180B,<br />182-184 High Street North<br />London E6 2JA</p>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </FrontLayout>
</template>
