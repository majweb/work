<script setup>
import { Head, Link, useForm } from '@inertiajs/vue3'
import InputError from '@/Components/InputError.vue'
import __ from "@/lang.js";

const form = useForm({
    email: '',
    registration_code: '',
})

const submit = () => {
    form.post(route('foundation.login'), {
        onFinish: () => form.reset('registration_code'),
    })
}
</script>

<template>
    <Head title="Logowanie Fundacji" />

    <div class="bg-gray-50 flex flex-col justify-center items-center min-h-screen p-6 relative overflow-hidden">
        <div class="absolute top-0 right-0 w-[500px] h-[500px] bg-blue-100/30 rounded-full blur-3xl -mr-64 -mt-64"></div>
        <div class="absolute bottom-0 left-0 w-[500px] h-[500px] bg-red-100/30 rounded-full blur-3xl -ml-64 -mb-64"></div>

        <div class="w-full max-w-xl relative">
            <div class="text-center mb-10 relative z-10">
                <Link href="/" class="inline-block mb-8">
                    <img src="/images/logo-horizontal.png" class="h-6 w-auto mx-auto" alt="logo">
                </Link>
                <div class="mx-auto w-2/4 flex justify-center items-center gap-2 px-4 py-2 bg-blue-50 rounded-full mb-6">
                    <span class="w-2 h-2 bg-blue-500 rounded-full animate-pulse"></span>
                    <span class="text-[10px] font-black text-blue-600 uppercase tracking-[0.3em]">PANEL FUNDACJI</span>
                </div>
                <h2 class="text-3xl md:text-4xl font-black text-[#0A2C5C] leading-loose uppercase tracking-tighter">
                    Logowanie dla<br />
                    <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-600 to-cyan-500">
                        PARTNERÓW FUNDACJI
                    </span>
                </h2>
            </div>

            <div class="bg-white rounded-[3rem] shadow-2xl shadow-blue-900/10 border border-white p-8 md:p-12 relative z-10">
                <form @submit.prevent="submit" class="space-y-6">
                    <div>
                        <label class="block text-[10px] font-black text-gray-400 uppercase tracking-widest ml-2 mb-2">E-mail Fundacji</label>
                        <input
                            v-model="form.email"
                            type="email"
                            required
                            class="w-full px-6 py-4 bg-gray-50 border-2 border-gray-100 rounded-2xl focus:border-blue-500 focus:bg-white transition-all duration-300 outline-none text-[#0A2C5C] font-bold"
                            placeholder="email@fundacja.pl"
                        />
                        <InputError :message="form.errors.email" class="mt-2" />
                    </div>

                    <div>
                        <label class="block text-[10px] font-black text-gray-400 uppercase tracking-widest ml-2 mb-2">Kod Rejestracyjny</label>
                        <input
                            v-model="form.registration_code"
                            type="text"
                            required
                            class="w-full px-6 py-4 bg-gray-50 border-2 border-gray-100 rounded-2xl focus:border-blue-500 focus:bg-white transition-all duration-300 outline-none text-[#0A2C5C] font-bold"
                            placeholder="FND-X-XXXX"
                        />
                        <InputError :message="form.errors.registration_code" class="mt-2" />
                    </div>

                    <div class="pt-4">
                        <button
                            type="submit"
                            :disabled="form.processing"
                            class="w-full bg-[#0A2C5C] hover:bg-blue-900 text-white font-black py-4 rounded-2xl shadow-xl shadow-blue-900/20 transition-all duration-300 flex items-center justify-center gap-3 group uppercase tracking-widest text-xs"
                        >
                            <span>Zaloguj się do panelu</span>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 transition-transform group-hover:translate-x-1" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                            </svg>
                        </button>
                    </div>
                </form>

                <div class="mt-8 pt-8 border-t border-gray-100 text-center">
                    <Link href="/" class="text-[10px] font-black text-gray-400 uppercase tracking-widest hover:text-[#0A2C5C] transition-colors">
                        Powrót do strony głównej
                    </Link>
                </div>
            </div>
        </div>
    </div>
</template>
