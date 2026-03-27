<script setup>
import { usePage, Head, Link } from "@inertiajs/vue3";
import { ref, onMounted, computed } from "vue";

const { props: pageProps } = usePage();
import __ from "@/lang.js";

const props = defineProps({
    canLogin: Boolean,
    canRegister: Boolean,
});

const faqs = ref([]);

const toggleFaq = (index) => {
    faqs.value[index].isOpen = !faqs.value[index].isOpen;
};

const benefitsList = computed(() => {
    const list = __("landingi.credits.benefits_list");
    if (Array.isArray(list)) {
        return list;
    }

    // Fallback for flattened translations
    const items = [];
    let i = 0;
    while (__(`landingi.credits.benefits_list.${i}`) !== `landingi.credits.benefits_list.${i}`) {
        items.push(__(`landingi.credits.benefits_list.${i}`));
        i++;
    }
    return items;
});

const mobileMenuOpen = ref(false);
const isScrolled = ref(false);
const isMobile = ref(false);

const navLinks = [
    { name: __("landingi.nav.how_it_works"), href: "#jak-to-dziala" },
    { name: __("landingi.nav.benefits"), href: "#korzysci" },
    { name: __("landingi.nav.faq"), href: "#faq" },
];

const scrollTo = (href) => {
    mobileMenuOpen.value = false;
    const element = document.querySelector(href);
    if (element) {
        element.scrollIntoView({
            behavior: 'smooth',
            block: 'start'
        });
    }
};

onMounted(() => {
    isMobile.value = window.innerWidth < 768;

    const faqQuestions = __("landingi.faq_section.questions");
    if (Array.isArray(faqQuestions)) {
        faqs.value = faqQuestions.map(f => ({ ...f, isOpen: false }));
    } else {
        // Fallback for flattened translations or missing array
        const questions = [];
        let i = 0;
        while (__(`landingi.faq_section.questions.${i}.question`) !== `landingi.faq_section.questions.${i}.question`) {
            questions.push({
                question: __(`landingi.faq_section.questions.${i}.question`),
                answer: __(`landingi.faq_section.questions.${i}.answer`),
                isOpen: false
            });
            i++;
        }
        faqs.value = questions;
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
                    : 'bg-transparent py-8'
            ]"
        >
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex items-center justify-between">
                    <div class="flex items-center">
                        <Link href="/" class="shrink-0 transition-transform hover:scale-105 active:scale-95">
                            <img
                                :src="(isScrolled || isMobile) ? '/images/newLogoWhite.png' : '/images/newLogoDark.png'"
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
                            :class="isScrolled ? 'text-[#0A2C5C] hover:text-red-work' : 'text-white hover:text-red-work-100'"
                        >
                            {{ link.name }}
                        </a>
                    </div>

                    <div class="hidden md:flex items-center">
                        <Link
                            :href="route('register')"
                            class="px-8 py-3 rounded-xl font-black uppercase tracking-widest text-xs transition-all transform hover:-translate-y-1 active:scale-95 shadow-xl"
                            :class="isScrolled
                                ? 'bg-red-work text-white shadow-red-work-100 hover:bg-red-work'
                                : 'bg-white text-[#0A2C5C] hover:bg-gray-100'"
                        >
                            {{ __("landingi.nav.register_free") }}
                        </Link>
                    </div>

                    <!-- Mobile Toggle -->
                    <button
                        @click="mobileMenuOpen = !mobileMenuOpen"
                        class="md:hidden p-2 rounded-xl transition-colors"
                        :class="(isScrolled || isMobile) ? 'text-[#0A2C5C] hover:bg-gray-100' : 'text-white hover:bg-white/10'"
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

        <div class="pt-20 md:pt-0">
            <div class="relative overflow-hidden bg-[#0A2C5C] text-white">
                <!-- Hero Section -->
                <section class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16 md:py-40" id="top">
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
                        <div class="z-10 text-center lg:text-left">
                            <h1 class="text-4xl md:text-5xl font-black leading-[1.1] mb-8" v-html="__('landingi.hero.title')"></h1>
                            <p class="text-xl md:text-3xl text-blue-100 mb-10 font-medium leading-relaxed" v-html="__('landingi.hero.subtitle')"></p>
                            <div class="flex flex-col sm:flex-row gap-4 mb-10 justify-center lg:justify-start">
                                <Link :href="route('register')" class="px-10 py-6 bg-red-work hover:bg-red-work-100 text-white font-black uppercase tracking-[0.2em] rounded-2xl shadow-2xl shadow-red-work-100 transition-all text-center transform hover:-translate-y-1 text-base md:text-sm">
                                    {{ __("landingi.hero.cta") }}
                                </Link>
                            </div>

                            <div class="flex items-center gap-6 justify-center lg:justify-start opacity-80 group cursor-default">
                                <div class="relative">
                                    <div class="absolute inset-0 bg-blue-400 blur-lg opacity-20 group-hover:opacity-40 transition-opacity"></div>
                                    <svg class="relative w-12 h-12 text-blue-400 group-hover:scale-110 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                    </svg>
                                </div>
                                <p class="text-blue-100 text-sm md:text-base font-bold leading-tight max-w-sm" v-html="__('landingi.hero.target')"></p>
                            </div>
                        </div>
                        <div class="relative group">
                            <div class="absolute inset-0 rounded-[3rem] transition-all"></div>
                            <img src="/images/landing/hero-recruiter.png" alt="Recruiter" class="relative z-10 md:max-w-4xl transform hover:scale-105 transition-all duration-500" />
                        </div>
                    </div>
                </section>

                <!-- Wave Effect -->
                <div class="absolute bottom-0 left-0 w-full overflow-hiddesn leading-[0]">
                    <svg class="relative block w-[calc(100%+1.3px)] h-[25px] md:h-[59px]" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                        <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V120H0V95.8C57.21,103.6,115,100.2,164.11,87.31,218.33,73.1,273.4,65.35,321.39,56.44Z" class="fill-white"></path>
                    </svg>
                </div>
            </div>

            <!-- Prosty Model -->
            <section id="jak-to-dziala" class="py-32 bg-white scroll-mt-20">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <div class="text-center mb-24">
                        <h2 class="text-lg md:text-xl font-black uppercase tracking-[0.4em] text-[#0A2C5C] mb-8">{{ __("landingi.model.title") }}</h2>
                        <div class="w-32 h-2 bg-red-work mx-auto rounded-full"></div>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-3 gap-16">
                        <!-- Krok 1 -->
                        <div class="bg-blue-50/50 p-12 rounded-[4rem] border border-blue-100/50 text-center flex flex-col items-center transition-all hover:shadow-2xl hover:shadow-blue-900/5 group">
                            <span class="text-6xl font-black text-[#0A2C5C] mb-8 opacity-20 group-hover:opacity-100 transition-opacity">1</span>
                            <h3 class="text-2xl md:text-2xl font-black text-[#0A2C5C] mb-8">{{ __("landingi.model.step1.title") }}</h3>
                            <div class="p-6 bg-white rounded-3xl shadow-sm mb-8 group-hover:scale-110 transition-transform relative">
                                <div class="absolute inset-0 bg-blue-400 blur-lg opacity-20 group-hover:opacity-40 transition-opacity"></div>
                                <img class="relative h-40 h-40" src="/images/landing/icons/bez_limitow.png" alt="landing-icon">
                            </div>
                            <p class="text-gray-600 font-bold uppercase text-sm tracking-widest">{{ __("landingi.model.step1.desc") }}</p>
                        </div>

                        <!-- Krok 2 -->
                        <div class="bg-blue-50/50 p-12 rounded-[4rem] border border-blue-100/50 text-center flex flex-col items-center transition-all hover:shadow-2xl hover:shadow-blue-900/5 group">
                            <span class="text-6xl font-black text-[#0A2C5C] mb-8 opacity-20 group-hover:opacity-100 transition-opacity">2</span>
                            <h3 class="text-2xl md:text-2xl font-black text-[#0A2C5C] mb-8">{{ __("landingi.model.step2.title") }}</h3>
                            <div class="p-6 bg-white rounded-3xl shadow-sm mb-8 group-hover:scale-110 transition-transform relative">
                                <div class="absolute inset-0 bg-blue-400 blur-lg opacity-20 group-hover:opacity-40 transition-opacity"></div>
                                <img class="relative h-40 h-40" src="/images/landing/icons/aplikacje_kandydatow.png" alt="landing-icon">
                            </div>
                            <p class="text-gray-600 font-bold uppercase text-sm tracking-widest">{{ __("landingi.model.step2.desc") }}</p>
                        </div>

                        <!-- Krok 3 -->
                        <div class="bg-blue-50/50 p-12 rounded-[4rem] border border-blue-100/50 text-center flex flex-col items-center transition-all hover:shadow-2xl hover:shadow-blue-900/5 group">
                            <span class="text-6xl font-black text-[#0A2C5C] mb-8 opacity-20 group-hover:opacity-100 transition-opacity">3</span>
                            <h3 class="text-2xl md:text-2xl font-black text-[#0A2C5C] mb-8">{{ __("landingi.model.step3.title") }}</h3>
                            <div class="p-6 bg-white rounded-3xl shadow-sm mb-8 group-hover:scale-110 transition-transform relative">
                                <div class="absolute inset-0 bg-blue-400 blur-lg opacity-20 group-hover:opacity-40 transition-opacity"></div>
                                <img class="relative h-40 h-40" src="/images/landing/icons/wykorzystujesz_kredyty.png" alt="landing-icon">
                            </div>
                            <p class="text-gray-600 font-bold uppercase text-sm tracking-widest">{{ __("landingi.model.step3.desc") }}</p>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Kredyty na Start -->
            <section id="korzysci" class="py-32 bg-[#0A2C5C] text-white overflow-hidden relative scroll-mt-20">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
                    <div class="bg-white/5 border border-white/10 rounded-[4rem] overflow-hidden backdrop-blur-md shadow-2xl">
                        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 p-10 md:p-24 items-center">
                            <div class="flex flex-col items-center lg:items-start text-center lg:text-left">
                                <div class="inline-flex flex-col items-center p-8 bg-white rounded-[3rem] text-[#0A2C5C] mb-10 shadow-2xl shadow-blue-900/40 transform -rotate-3 hover:rotate-0 transition-transform duration-500 relative">
                                    <img src="/images/landing/icons/50000.png" alt="50 000 punktów" class="h-32 md:h-48 mb-6 absolute -bottom-20 -right-20" />
                                    <span class="text-6xl md:text-8xl font-black tracking-tight">50 000</span>
                                    <span class="text-2xl font-black tracking-[0.2em] uppercase">{{ __("landingi.credits.amount_label") }}</span>
                                    <span class="mt-4 px-6 py-2 bg-red-work text-white text-sm font-black rounded-full uppercase tracking-widest">{{ __("landingi.credits.badge") }}</span>
                                </div>
                            </div>
                            <div>
                                <h3 class="text-2xl md:text-3xl font-black mb-8 leading-tight">
                                    {{ __("landingi.credits.test_platform") }}
                                </h3>
                                <ul class="space-y-6">
                                    <li v-for="(benefit, i) in benefitsList" :key="i" class="flex items-center gap-4 text-blue-100 text-lg group">
                                        <div class="shrink-0 w-4 h-4 bg-red-work rounded-full group-hover:scale-150 transition-transform shadow-[0_0_15px_rgba(225,29,72,0.5)]"></div>
                                        {{ benefit }}
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="mt-24 text-center">
                        <h3 class="text-2xl md:text-4xl font-black mb-16 tracking-tight">{{ __("landingi.credits.no_start_costs") }}</h3>
                        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-5 gap-8">
                            <div v-for="(item, key) in {
                                free_ads: {icon: '/images/landing/icons/publikacje.png'},
                                no_contracts: {icon: '/images/landing/icons/bez_umow.png'},
                                own_rules: {icon: '/images/landing/icons/korzystasz.png'},
                                cv_types: {icon: '/images/landing/icons/cv_klasyczne.png'},
                                all_languages: {icon: '/images/landing/icons/ogloszenia.png'}
                            }" :key="key" class="bg-white p-10 rounded-[3rem] flex flex-col items-center justify-center text-center gap-8 transition-all hover:-translate-y-3 hover:shadow-3xl hover:shadow-blue-900/40 group">
                                <div class="relative">
                                    <div class="absolute inset-0 bg-blue-400 blur-lg opacity-20 group-hover:opacity-40 transition-opacity"></div>
                                    <img class="relative h-40 h-40 group-hover:scale-110 transition-transform" :src="item.icon" alt="landing-icon">
                                </div>
                                <span class="text-[#0A2C5C] text-sm font-black uppercase tracking-widest leading-tight">{{ __("landingi.credits.items." + key) }}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Fundacja Section -->
            <section id="fundacja" class="py-40 bg-white relative overflow-hidden scroll-mt-20">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-20 items-center">
                        <div class="text-center lg:text-left relative z-10">
                            <span class="inline-block px-6 py-3 bg-red-work-50 text-red-work text-sm font-black uppercase tracking-widest rounded-full mb-8">{{ __("landingi.foundation.badge") }}</span>
                            <h2 class="text-3xl md:text-5xl lg:text-6xl font-black text-red-work mb-8 leading-[1.1] tracking-tight">
                                {{ __("landingi.foundation.title") }}
                            </h2>
                            <p class="text-xl md:text-2xl text-gray-500 font-black leading-relaxed">
                                {{ __("landingi.foundation.subtitle") }}
                            </p>
                        </div>
                    </div>
                </div>
                <div class="absolute bottom-0 -right-[300px] md:right-0 group pointer-events-none">
                    <div class="absolute inset-0 bg-red-work-100 rounded-full blur-[120px] scale-90 opacity-40 group-hover:opacity-60 transition-opacity"></div>
                    <img src="/images/landing/heart-foundation.png" alt="Help others" class="relative z-10 w-[50%] md:w-full md:max-w-4xl drop-shadow-[0_45px_45px_rgba(254,226,226,0.2)]" />
                </div>
            </section>

            <!-- Middle CTA -->
            <section class="py-24 bg-[#0A2C5C] text-white relative overflow-hidden">
                <div class="absolute top-0 right-0 w-1/2 h-full bg-blue-500/5 -skew-x-12 translate-x-1/2"></div>
                <div class="max-w-4xl mx-auto px-4 text-center relative z-10">
                    <h2 class="text-3xl md:text-5xl font-black mb-10 leading-tight" v-html="__('landingi.cta.title')"></h2>
                    <Link :href="route('register')" class="inline-block px-10 py-6 bg-red-work hover:bg-red-work-700 text-white font-black uppercase tracking-[0.2em] rounded-[1.5rem] shadow-2xl shadow-red-work-100/40 transition-all transform hover:-translate-y-2 active:scale-95 text-base md:text-lg">
                        {{ __("landingi.cta.button") }}
                    </Link>
                </div>
            </section>

            <section class="py-24 bg-white relative overflow-hidden">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
                    <h2 class="text-3xl md:text-4xl font-black text-[#0A2C5C] mb-12 tracking-tight">{{ __("landingi.who_is_it_for.title") }}</h2>

                    <div class="bg-[#0A2C5C] rounded-[2.5rem] p-10 md:p-16 shadow-2xl">
                        <div class="grid grid-cols-2 md:grid-cols-5 gap-8 md:gap-4 items-start">
                            <div v-for="(item, key) in {
                                agencies: {icon: '/images/landing/icons/agencje.png'},
                                high_volume: {icon: '/images/landing/icons/firmy.png'},
                                cost_conscious: {icon: '/images/landing/icons/pracodawcy.png'},
                                international: {icon: '/images/landing/icons/firmy (2).png'},
                                everyone: {icon: '/images/landing/icons/kazdy_kto_szuka.png'}
                            }" :key="key" :class="['flex flex-col items-center group', key === 'everyone' ? 'col-span-2 md:col-span-1' : '']">
                                <div class="relative mb-6">
                                    <div class="absolute inset-0 bg-blue-400 blur-xl opacity-0 group-hover:opacity-20 transition-opacity"></div>
                                    <img :src="item.icon" :alt="key" class="h-24 md:h-32 w-auto relative z-10 drop-shadow-[0_0_15px_rgba(255,255,255,0.3)] transition-transform group-hover:scale-110" />
                                </div>
                                <p class="text-white font-black uppercase text-[10px] md:text-xs tracking-widest leading-tight text-center max-w-[120px]">
                                    {{ __("landingi.who_is_it_for.groups." + key) }}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section id="faq" class="py-32 bg-[#0A2C5C] relative overflow-hidden scroll-mt-20">
                <div class="max-w-4xl mx-auto px-4 relative z-10">
                    <div class="text-center mb-20">
                        <h2 class="text-4xl md:text-5xl font-black text-white mb-6 tracking-widest uppercase">{{ __("landingi.faq_section.title") }}</h2>
                        <p class="text-blue-100 font-bold uppercase tracking-widest text-xs">{{ __("landingi.faq_section.subtitle") }}</p>
                    </div>
                    <div class="space-y-6">
                        <div v-for="(faq, index) in faqs" :key="index" class="group bg-blue-50/5 border border-white/10 rounded-[2.5rem] overflow-hidden backdrop-blur-md transition-all hover:bg-blue-50/10">
                            <button
                                @click="toggleFaq(index)"
                                class="w-full flex items-center justify-between p-8 text-left transition-colors"
                            >
                                <span class="text-lg md:text-xl font-black text-white pr-8">{{ faq.question }}</span>
                                <div class="shrink-0 p-2 bg-white/5 rounded-full transition-transform duration-300" :class="{'rotate-180 bg-red-work/20': faq.isOpen}">
                                    <svg class="w-6 h-6 text-blue-400" :class="{'text-red-work': faq.isOpen}" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                                    </svg>
                                </div>
                            </button>
                            <transition
                                enter-active-class="transition duration-300 ease-out"
                                enter-from-class="opacity-0 -translate-y-4"
                                enter-to-class="opacity-100 translate-y-0"
                            >
                                <div v-show="faq.isOpen" class="px-8 pb-8 text-blue-100/80 text-lg border-t border-white/5 pt-6 leading-relaxed">
                                    {{ faq.answer }}
                                </div>
                            </transition>
                        </div>
                    </div>
                </div>
            </section>

            <footer class="bg-white pt-32 pb-16">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-16 mb-24">
                        <div class="col-span-1 lg:col-span-2">
                            <img src="/images/logo-horizontal.svg" class="h-12 w-auto mb-8" alt="Work4you.global" />
                            <p class="text-gray-500 text-lg max-w-md leading-relaxed">
                                {{ __("landingi.footer.description") }}
                            </p>
                        </div>
                        <div>
                            <h4 class="text-[10px] font-black uppercase tracking-[0.3em] text-[#0A2C5C] mb-8">{{ __("landingi.footer.nav") }}</h4>
                            <ul class="space-y-4">
                                <li v-for="link in navLinks" :key="link.name">
                                    <a
                                        :href="link.href"
                                        @click.prevent="scrollTo(link.href)"
                                        class="text-gray-400 hover:text-[#0A2C5C] font-black uppercase text-[10px] tracking-widest transition-colors"
                                    >
                                        {{ link.name }}
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div>
                            <h4 class="text-[10px] font-black uppercase tracking-[0.3em] text-[#0A2C5C] mb-8">{{ __("landingi.footer.legal") }}</h4>
                            <ul class="space-y-4">
                                <li><Link :href="route('front.privacy')" class="text-gray-400 hover:text-[#0A2C5C] font-black uppercase text-[10px] tracking-widest transition-colors">{{ __("landingi.footer.privacy") }}</Link></li>
                                <li><Link :href="route('front.terms')" class="text-gray-400 hover:text-[#0A2C5C] font-black uppercase text-[10px] tracking-widest transition-colors">{{ __("landingi.footer.terms") }}</Link></li>
                            </ul>
                        </div>
                    </div>

                    <div class="pt-8 border-t border-gray-50 flex flex-col md:flex-row justify-between items-center gap-6">
                        <p class="text-[10px] font-black text-gray-300 uppercase tracking-widest">
                            &copy; {{ new Date().getFullYear() }} Work4you.global. {{ __("landingi.footer.rights") }}
                        </p>
                        <div class="flex gap-8">
                            <a href="#" class="text-gray-300 hover:text-[#0A2C5C] transition-colors">
                                <span class="sr-only">Facebook</span>
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z"/></svg>
                            </a>
                        </div>
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

<style scoped>
.animate-float {
    animation: float 6s ease-in-out infinite;
}

@keyframes float {
    0%, 100% { transform: translateY(0); }
    50% { transform: translateY(-20px); }
}
</style>
