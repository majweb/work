<script setup>
import { usePage, Head, Link } from "@inertiajs/vue3";
import { ref, onMounted } from "vue";
import __ from "@/lang.js";

const { props: pageProps } = usePage();

const props = defineProps({
    canLogin: Boolean,
    canRegister: Boolean,
});

const faqs = ref([]);

const toggleFaq = (index) => {
    faqs.value[index].isOpen = !faqs.value[index].isOpen;
};

const mobileMenuOpen = ref(false);
const isScrolled = ref(false);
const isMobile = ref(false);

const navLinks = [
    { name: __("landingi.nav.how_it_works"), href: "#jak-to-dziala" },
    { name: __("landingi.nav.benefits"), href: "#do-ladownia" },
    { name: __("landingi.nav.faq"), href: "#faq" },
];

const scrollTo = (href) => {
    mobileMenuOpen.value = false;
    const element = document.querySelector(href);
    if (element) {
        const navHeight = 100; // Offset dla fixed nav
        const elementPosition = element.getBoundingClientRect().top + window.pageYOffset;
        window.scrollTo({
            top: elementPosition - navHeight,
            behavior: 'smooth'
        });
    }
};

onMounted(() => {
    isMobile.value = window.innerWidth < 768;

    const faqQuestions = __("landingi.sold.faq.questions");
    if (Array.isArray(faqQuestions)) {
        faqs.value = faqQuestions.map(f => ({ ...f, isOpen: false }));
    }

    window.addEventListener('scroll', () => {
        isScrolled.value = window.scrollY > 50;
    });

    window.addEventListener('resize', () => {
        isMobile.value = window.innerWidth < 768;
    });
});
</script>

<template>
    <Head :title="__('landingi.meta.title')">
        <meta name="description" :content="__('landingi.meta.description')" />
    </Head>

    <div class="min-h-screen bg-white font-sans selection:bg-red-work-100 selection:text-red-work-100">
        <!-- Navigation -->
        <nav
            class="fixed top-0 left-0 right-0 z-[100] transition-all duration-300"
            :class="[
                isScrolled
                    ? 'bg-white py-4 shadow-md'
                    : 'bg-transparent py-4 md:py-8'
            ]"
        >
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex items-center justify-between">
                    <div class="flex items-center">
                        <Link href="/" class="shrink-0 transition-transform hover:scale-105 active:scale-95">
                            <img
                                :src="'/images/newLogoWhite.png'"
                                class="h-8 md:h-10 w-auto"
                                alt="Work4you.global"
                            />
                        </Link>
                    </div>

                    <!-- Desktop Nav -->
                    <div class="hidden md:flex items-center gap-12">
                        <a
                            v-for="link in navLinks"
                            :key="link.name"
                            :href="link.href"
                            @click.prevent="scrollTo(link.href)"
                            class="text-sm font-black uppercase tracking-widest transition-colors"
                            :class="isScrolled ? 'text-[#0A2C5C] hover:text-red-work' : 'text-[#0A2C5C] hover:text-red-work'"
                        >
                            {{ link.name }}
                        </a>
                    </div>

                    <div class="hidden md:flex items-center">
                        <Link
                            :href="route('register')"
                            class="px-8 py-3 bg-red-work text-white rounded-xl font-black uppercase tracking-widest text-xs transition-all transform hover:-translate-y-1 active:scale-95 shadow-xl shadow-red-work-100"
                        >
                            {{ __("landingi.nav.register_free") }}
                        </Link>
                    </div>

                    <!-- Mobile Toggle -->
                    <button
                        @click="mobileMenuOpen = !mobileMenuOpen"
                        class="md:hidden p-2 rounded-xl transition-colors text-[#0A2C5C] hover:bg-gray-100"
                    >
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path v-if="!mobileMenuOpen" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
                            <path v-else stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
            </div>

            <!-- Mobile Menu -->
            <transition
                enter-active-class="transition duration-300 ease-out"
                enter-from-class="opacity-0 -translate-y-10"
                enter-to-class="opacity-100 translate-y-0"
                leave-active-class="transition duration-200 ease-in"
                leave-from-class="opacity-100 translate-y-0"
                leave-to-class="opacity-0 -translate-y-10"
            >
                <div v-if="mobileMenuOpen" class="md:hidden absolute top-full left-0 right-0 bg-white shadow-2xl border-t border-gray-100 py-8 px-4">
                    <div class="flex flex-col gap-6 items-center">
                        <a
                            v-for="link in navLinks"
                            :key="link.name"
                            :href="link.href"
                            @click.prevent="scrollTo(link.href)"
                            class="text-sm font-black text-[#0A2C5C] uppercase tracking-widest hover:text-red-work transition-colors"
                        >
                            {{ link.name }}
                        </a>
                        <Link
                            :href="route('register')"
                            class="w-full text-center px-8 py-4 bg-red-work text-white rounded-xl font-black uppercase tracking-widest text-sm shadow-xl shadow-red-work active:scale-95 transition-transform"
                        >
                            {{ __("landingi.nav.register_free") }}
                        </Link>
                    </div>
                </div>
            </transition>
        </nav>

        <div class="pt-24 md:pt-32">
            <!-- Hero Section -->
            <section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12 md:py-0" id="top">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center min-h-[600px]">
                    <div class="text-center lg:text-left py-12 md:py-40">
                        <h1 class="text-3xl md:text-5xl font-black text-[#0A2C5C] leading-tight mb-8" v-html="__('landingi.sold.hero.title')"></h1>
                        <p class="text-lg md:text-xl text-gray-600 mb-10 font-medium leading-relaxed" v-html="__('landingi.sold.hero.subtitle')"></p>

                        <div class="flex flex-col items-center lg:items-start gap-6">
                            <Link :href="route('front.price')" class="px-12 py-5 bg-red-work hover:bg-red-work-700 text-white font-black uppercase tracking-widest rounded-xl shadow-2xl shadow-red-work-100 transition-all transform hover:-translate-y-1">
                                {{ __("landingi.sold.hero.cta") }}
                            </Link>

                            <div class="flex items-center text-gray-400">
                                    <img src="/images/landing/icons/idealne.png" class="w-20 h-20" alt="icon" />
                                <p class="text-sm font-bold italic">{{ __("landingi.sold.hero.warning") }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="relative flex items-end justify-center">
                        <img src="/images/landing/hero-man.png" alt="Recruiter" class="h-[400px] md:h-[720px] max-w-none transform translate-y-0" />
                    </div>
                </div>
            </section>

            <!-- Zobacz co możesz zrobić -->
            <section id="jak-to-dziala" class="bg-[#0A2C5C] py-16">
                <div class="max-w-7xl mx-auto px-4">
                    <div class="mb-12">
                        <h2 class="text-white font-black tracking-[0.2em] text-lg md:text-xl uppercase inline-block relative">
                            {{ __("landingi.sold.points_benefits.title") }}
                            <div class="absolute -bottom-2 left-0 w-12 h-1 bg-red-600"></div>
                        </h2>
                    </div>
                    <div class="grid grid-cols-2 md:grid-cols-5 gap-4 md:gap-8">
                        <div v-for="(text, key) in __ ('landingi.sold.points_benefits.items')" :key="key" class="bg-white rounded-2xl p-6 flex flex-col items-center justify-center text-center gap-4 transition-transform hover:-translate-y-2 aspect-square">
                            <div class="w-24 h-24 md:w-32 md:h-32 flex items-center justify-center">
                                <img src="/images/landing/iconsSold/tick.png" class="w-full h-full object-contain" alt="Tick" />
                            </div>
                            <span class="text-[#0A2C5C] text-[10px] md:text-[11px] font-black uppercase tracking-widest leading-tight">{{ text }}</span>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Doładowania zamiast abonamentu -->
            <section id="do-ladownia" class="py-24 bg-white">
                <div class="max-w-7xl mx-auto px-4">
                    <h2 class="text-[28px] md:text-[32px] font-black text-[#0A2C5C] mb-2 uppercase tracking-wide">{{ __("landingi.sold.recharges.title") }}</h2>
                    <p class="text-blue-400 font-medium text-xl mb-16">{{ __("landingi.sold.recharges.subtitle") }}</p>

                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 lg:gap-10">
                        <div v-for="(item, key) in __('landingi.sold.recharges.items')" :key="key" class="bg-[#0A2C5C] text-white p-12 rounded-[2rem] flex flex-col items-center text-center transition-transform hover:-translate-y-2">
                            <h3 class="text-lg font-black mb-8 leading-tight min-h-[3rem] flex items-center uppercase tracking-wider">{{ item.title }}</h3>
                            <div class="mb-8 w-32 h-32 flex items-center justify-center">
                                <img :src="'/images/landing/iconsSold/' + (key === 'free_ads' ? 'publikujesz_za_darmo.png' : (key === 'no_expiration' ? 'punkty_bez_limitu.png' : 'agencje.png'))" class="w-full h-full object-contain" :alt="item.title" />
                            </div>
                            <p class="text-sm text-blue-100 font-medium leading-relaxed opacity-90">{{ item.desc }}</p>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Fundacja -->
            <section class="py-24 bg-white relative overflow-hidden">
                <div class="max-w-7xl mx-auto px-4">
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
                        <div>
                            <h2 class="text-3xl font-black text-[#0A2C5C] mb-4 uppercase">{{ __("landingi.sold.foundation.title") }}</h2>
                            <p class="text-xl font-black text-blue-400 mb-12">{{ __("landingi.sold.foundation.subtitle") }}</p>

                            <div class="space-y-8">
                                <div class="flex gap-6 items-start">
                                    <div class="shrink-0 w-12 h-12 bg-blue-50 flex items-center justify-center rounded-xl">
                                        <img src="/images/landing/iconsSold/tick.png" class="w-full max-w-md mx-auto drop-shadow-2xl" alt="tick" />
                                    </div>
                                    <div>
                                        <h4 class="text-lg font-black text-[#0A2C5C] mb-2 uppercase">{{ __("landingi.sold.foundation.step1.title") }}</h4>
                                        <p class="text-gray-500 font-medium">{{ __("landingi.sold.foundation.step1.desc") }}</p>
                                    </div>
                                </div>
                                <div class="flex gap-6 items-start">
                                    <div class="shrink-0 w-12 h-12 bg-blue-50 flex items-center justify-center rounded-xl">
                                        <img src="/images/landing/iconsSold/tick.png" class="w-full max-w-md mx-auto drop-shadow-2xl" alt="tick" />
                                    </div>
                                    <div>
                                        <h4 class="text-lg font-black text-[#0A2C5C] mb-2 uppercase">{{ __("landingi.sold.foundation.step2.title") }}</h4>
                                        <p class="text-gray-500 font-medium">{{ __("landingi.sold.foundation.step2.desc") }}</p>
                                    </div>
                                </div>
                            </div>

                            <Link :href="route('front.price')" class="mt-12 inline-block px-10 py-5 bg-red-work hover:bg-red-work-700 text-white font-black uppercase tracking-widest rounded-xl shadow-2xl shadow-red-work-100 transition-all">
                                {{ __("landingi.sold.foundation.cta") }}
                            </Link>
                        </div>
                        <div class="relative group">
                            <img src="/images/landing/cash.png" class="w-full max-w-md mx-auto drop-shadow-2xl transition-all duration-500 transform group-hover:scale-105 group-hover:rotate-1 group-hover:drop-shadow-[0_35px_35px_rgba(0,0,0,0.25)]" alt="Certyfikat" />
                        </div>
                    </div>
                </div>
            </section>
            <!-- Rozwiązanie dla każdego -->
            <section class="py-24 bg-white">
                <div class="max-w-7xl mx-auto px-4">
                    <h2 class="text-2xl md:text-3xl font-black text-[#0A2C5C] text-center mb-20">{{ __("landingi.sold.solutions.title") }}</h2>
                    <div class="space-y-12">
                        <div v-for="(item, key) in __ ('landingi.sold.solutions.items')" :key="key" class="flex flex-col md:flex-row items-center gap-8 group">
                            <div class="shrink-0 w-24 h-24 bg-white shadow-xl rounded-3xl flex items-center justify-center group-hover:scale-110 transition-transform">
                                <img :src="'/images/landing/icons/' + (key === 'agencies' ? 'agencje.png' : (key === 'high_volume' ? 'firmy.png' : (key === 'cost_conscious' ? 'pracodawcy.png' : (key === 'international' ? 'firmy (2).png' : 'kazdy_kto_szuka.png'))))" class="w-16 h-16" alt="icon" />
                            </div>
                            <div class="text-center md:text-left">
                                <h3 class="text-lg font-black text-[#0A2C5C] mb-2 uppercase tracking-widest">{{ item.title }}</h3>
                                <p class="text-gray-500 font-medium leading-relaxed max-w-3xl" v-html="item.desc"></p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- FAQ -->
            <section id="faq" class="py-24 bg-[#0A2C5C]">
                <div class="max-w-4xl mx-auto px-4">
                    <h2 class="text-4xl font-black text-white text-center mb-16 uppercase tracking-widest">FAQ</h2>
                    <div class="space-y-6">
                        <div v-for="(faq, index) in faqs" :key="index" class="bg-white rounded-2xl overflow-hidden shadow-xl">
                            <button @click="toggleFaq(index)" class="w-full flex items-center justify-between p-8 text-left">
                                <span class="text-lg font-black text-[#0A2C5C] pr-8">{{ faq.question }}</span>
                                <div class="shrink-0 p-2 bg-blue-50 rounded-full transition-transform duration-300" :class="{'rotate-180': faq.isOpen}">
                                    <svg class="w-6 h-6 text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                                    </svg>
                                </div>
                            </button>
                            <transition enter-active-class="transition duration-300 ease-out" enter-from-class="opacity-0 -translate-y-4" enter-to-class="opacity-100 translate-y-0">
                                <div v-show="faq.isOpen" class="px-8 pb-8 text-gray-500 font-medium border-t border-gray-50 pt-6">
                                    {{ faq.answer }}
                                </div>
                            </transition>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Bottom CTA -->
            <section class="py-24 bg-white text-center">
                <div class="max-w-4xl mx-auto px-4">
                    <h2 class="text-3xl md:text-4xl font-black text-[#0A2C5C] mb-6 uppercase tracking-tight">{{ __("landingi.sold.bottom_cta.title") }}</h2>
                    <p class="text-xl font-medium text-gray-500 mb-12">{{ __("landingi.sold.bottom_cta.subtitle") }}</p>

                    <Link :href="route('front.price')" class="inline-block px-12 py-6 bg-red-work hover:bg-red-work-700 text-white font-black uppercase tracking-widest rounded-xl shadow-2xl shadow-red-work-100 transition-all transform hover:-translate-y-1 mb-16">
                        {{ __("landingi.sold.bottom_cta.button") }}
                    </Link>

                    <div class="bg-blue-50/50 rounded-3xl p-10 flex flex-col md:flex-row justify-center gap-8 md:gap-16">
                        <div v-for="(text, key) in __ ('landingi.sold.bottom_cta.features')" :key="key" class="flex flex-col items-center gap-4 group">
                            <div class="w-24 h-24 bg-white shadow-lg rounded-2xl flex items-center justify-center group-hover:scale-110 transition-transform">
                                <img :src="'/images/landing/iconsSold/' + (key === 'free_ads' ? 'darmowa.png' : (key === 'no_expiration' ? 'bezterminowe.png' : 'idealne.png'))" class="w-24 h-24" alt="icon" />
                            </div>
                            <span class="text-[#0A2C5C] text-xs font-black uppercase tracking-widest max-w-[150px]">{{ text }}</span>
                        </div>
                    </div>
                </div>
            </section>

            <footer class="bg-[#0A2C5C] pt-24 py-12">
                <div class="max-w-7xl mx-auto px-4 text-center">
                    <Link href="/" class="inline-block mb-12">
                        <img src="/images/newLogoDark.png" class="h-10 w-auto" alt="Logo" />
                    </Link>
                    <div class="pt-12 border-t border-white/10">
                        <p class="text-white/40 text-[10px] font-black uppercase tracking-[0.3em]">
                            &copy; {{ new Date().getFullYear() }} WORK4YOU.GLOBAL. {{ __("landingi.footer.rights") }}
                        </p>
                    </div>
                </div>
            </footer>
        </div>
    </div>
</template>

<style>
html {
    scroll-behavior: smooth;
}
</style>
