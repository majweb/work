<script setup>
import { computed } from 'vue'
import { Head, Link, usePage } from '@inertiajs/vue3'
import __ from '@/lang'

const props = defineProps({
    status: Number,
    translations: Object
})

const title = computed(() => {
    // Używamy tłumaczeń z propsów jeśli są dostępne, inaczej z globalnej funkcji
    const translations = props.translations || usePage()?.props?.translations || {}
    const getT = (key) => translations[key] || __(key)

    return {
        503: '503: ' + getT('translate.error503Title'),
        500: '500: ' + getT('translate.error500Title'),
        404: '404: ' + getT('translate.error404Title'),
        403: '403: ' + getT('translate.error403Title'),
    }[props.status] || getT('translate.errorDefaultTitle')
})

const description = computed(() => {
    const translations = props.translations || usePage()?.props?.translations || {}
    const getT = (key) => translations[key] || __(key)

    return {
        503: getT('translate.error503Description'),
        500: getT('translate.error500Description'),
        404: getT('translate.error404Description'),
        403: getT('translate.error403Description'),
    }[props.status] || getT('translate.errorDefaultDescription')
})
</script>

<template>
    <Head :title="title" />

    <div class="min-h-screen bg-[#0A2C5C] flex flex-col items-center justify-center p-6 text-center">
        <!-- Logo -->
        <div class="mb-12 transition-transform hover:scale-105 active:scale-95">
            <Link href="/">
                <img
                    src="/images/newLogoDark.png"
                    class="h-12 md:h-16 w-auto brightness-0 invert"
                    alt="Work4you.global"
                />
            </Link>
        </div>

        <!-- Content -->
        <div class="max-w-2xl w-full bg-white rounded-[2.5rem] p-10 md:p-16 shadow-2xl relative overflow-hidden">
            <!-- Decorative Elements -->
            <div class="absolute top-0 right-0 w-32 h-32 bg-red-work/5 rounded-bl-full"></div>
            <div class="absolute bottom-0 left-0 w-24 h-24 bg-blue-work/5 rounded-tr-full"></div>

            <h1 class="text-6xl md:text-8xl font-black text-[#0A2C5C] mb-6 opacity-10">
                {{ props.status }}
            </h1>

            <h2 class="text-2xl md:text-3xl font-black text-[#0A2C5C] mb-4 uppercase tracking-tight">
                {{ title }}
            </h2>

            <p class="text-gray-500 text-lg mb-10 leading-relaxed font-medium">
                {{ description }}
            </p>

            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <Link
                    href="/"
                    class="px-10 py-4 bg-[#e31e24] hover:bg-red-700 text-white font-black uppercase tracking-[0.2em] rounded-2xl shadow-xl shadow-red-900/20 transition-all transform hover:-translate-y-1 active:scale-95 text-sm"
                >
                    {{ props.translations?.['translate.backToHome'] || __('translate.backToHome') }}
                </Link>
            </div>
        </div>

        <!-- Footer Info -->
        <p class="mt-12 text-blue-100/50 text-xs font-bold uppercase tracking-[0.3em]">
            &copy; {{ new Date().getFullYear() }} Work4you.global
        </p>
    </div>
</template>
