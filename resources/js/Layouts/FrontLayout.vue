<script setup>
import { Head, Link, router, usePage, useForm } from '@inertiajs/vue3';
import Multiselect from 'vue-multiselect';
import Banner from '@/Components/Banner.vue';
import ConfettiExplosion from "vue-confetti-explosion";
import ApplicationMark from "@/Components/ApplicationMark.vue";
import NavLink from "@/Components/NavLink.vue";
import Checkbox from "@/Components/Checkbox.vue";
import DialogModal from "@/Components/DialogModal.vue";
import SecondaryButton from "@/Components/SecondaryButton.vue";
import { ref, computed, watch, onMounted } from "vue";
import __ from "@/lang.js";
import CookieConsent from '@/Components/CookieConsent.vue';

const props = defineProps({
    title: String,
    type: String,
    description: String,
    keywords: String,
    image: String,
    author: String,
    imageUrl: String,
    url: String,
});

const page = usePage();
const auth = page.props.auth ?? null;

const isClient = ref(false);
const ogUrl = ref(page.props.ziggy?.location || page.props.pageUrl || '');

onMounted(() => {
    isClient.value = true;
    ogUrl.value = window.location.href;
});

const form = useForm({
    email: '',
    agreements: [],
});

const newsletterAgreements = computed(() => page.props.newsletterAgreements || []);

const submitForm = () => {
    form.post(route('newsletter.store'), {
        preserveScroll: true,
        onSuccess: () => {
            form.reset('email', 'agreements');
        },
    });
};

const isAllNewsletterAgreementsSelected = computed(() => {
    const requiredAgreements = newsletterAgreements.value.filter(a => a.is_required);
    if (requiredAgreements.length === 0) {
        return newsletterAgreements.value.length > 0 && form.agreements.length === newsletterAgreements.value.length;
    }
    return requiredAgreements.every(a => form.agreements.includes(a.id.toString()) || form.agreements.includes(a.id));
});

const toggleAllNewsletterAgreements = () => {
    if (isAllNewsletterAgreementsSelected.value) {
        form.agreements = [];
    } else {
        const requiredAgreements = newsletterAgreements.value.filter(a => a.is_required);
        if (requiredAgreements.length === 0) {
            form.agreements = newsletterAgreements.value.map(a => a.id.toString());
        } else {
            form.agreements = requiredAgreements.map(a => a.id.toString());
        }
    }
};

const isAgreementRequired = (id) => {
    const agreement = newsletterAgreements.value.find(a => a.id === id);
    return agreement ? !!agreement.is_required : false;
};

// Mobile menu
const mobileMenuOpen = ref(false);
const showNewsletterAgreements = ref(false);
const toggleMenu = () => mobileMenuOpen.value = !mobileMenuOpen.value;
const closeMenu = () => mobileMenuOpen.value = false;
watch(mobileMenuOpen, val => {
    if (isClient.value) {
        document.body.style.overflow = val ? 'hidden' : '';
    }
});

// Scroll to top
const showScrollTop = ref(false);
const scrollToTop = () => {
    if (typeof window !== 'undefined') {
        window.scrollTo({ top: 0, behavior: 'smooth' });
    }
}
onMounted(() => {
    window.addEventListener('scroll', () => {
        showScrollTop.value = window.scrollY > 400;
    });
});

// Languages
const changeLang = computed(() => page.props.languages?.find(el => el.value == page.props.language));
const lang = ref(changeLang.value);
watch(changeLang, (newVal) => {
    lang.value = newVal;
});
const dispatchAction = (data) => router.post(route('front.language.store', { language: data.value }));
const resetLang = (data) => router.post(route('front.language.store', { language: data }));
const sortLangs = computed(() => {
    let langs = page.props.languages || [];

    return [...langs].sort((a, b) => a.label.localeCompare(b.label));
});

const getFlagCode = (langCode) => {
    const mapping = {
        'en': 'gb',
        'sq': 'al',
        'el': 'gr',
        'hy': 'am',
        'zh': 'cn',
        'ja': 'jp',
        'ko': 'kr',
        'cs': 'cz',
        'da': 'dk',
        'et': 'ee',
        'sv': 'se',
        'uk': 'ua',
        // Added missing languages
        'fa': 'ir', // Persian (Farsi)
        'dv': 'mv', // Maldivian (Dhivehi)
        'lo': 'la', // Lao
        'ka': 'ge', // Georgian
        'he': 'il', // Hebrew
        'hi': 'in', // Hindi
    };
    return mapping[langCode] || langCode;
};

const showConfetti = ref(false);
watch(() => page.props.jetstream?.flash?.banner, (newVal) => {
    if (newVal === __('translate.makeAplication')) {
        showConfetti.value = true;
        setTimeout(() => {
            showConfetti.value = false;
        }, 3000);
    }
}, { immediate: true });

const socialLinks = [
    { name: 'facebook', url: 'https://www.facebook.com/work4you.global' },
    { name: 'instagram', url: 'https://www.instagram.com/work4you.global/' },
    { name: 'tik_tok', url: 'https://www.tiktok.com/@work4you.global' },
    { name: 'linkedin', url: 'https://www.linkedin.com/company/work-4-you-global/' },
    { name: 'x', url: 'https://x.com/Work4YouGlobal' },
];
</script>

<template>
    <Head>
            <!-- Title -->
            <title v-if="props.title">{{ props.title }}</title>
            <title v-else>{{ page.props.pageName || 'Work4you.global' }}</title>

            <!-- Meta description & keywords -->
            <meta name="description" :content="props.description || __('translate.meta_description_default')" />
            <meta name="keywords" :content="props.keywords || __('translate.meta_keywords_default')" />

            <!-- Canonical -->
            <link v-if="props.url || ogUrl" rel="canonical" :href="props.url || ogUrl" />

            <!-- Open Graph -->
            <meta property="og:locale" :content="page.props.currentCountry || 'pl'" />
            <meta property="og:type" :content="props.type || 'website'" />
            <meta v-if="props.title" property="og:title" :content="props.title" />
            <meta v-if="props.description" property="og:description" :content="props.description" />
            <meta v-if="props.url || ogUrl" property="og:url" :content="props.url || ogUrl" />
            <meta v-if="props.url || ogUrl" property="og:site_name" :content="props.url || ogUrl" />
            <meta property="og:image" :content="props.image || '/default-image.png'" />
            <meta property="og:image:width" content="1200" />
            <meta property="og:image:height" content="630" />
            <meta property="og:image:type" content="image/jpeg" />

            <!-- Author -->
            <meta name="author" :content="props.author || 'Work4you.global'" />

            <!-- Twitter -->
            <meta name="twitter:card" content="summary_large_image" />
            <meta name="twitter:label1" :content="__('translate.written_by')" />
            <meta name="twitter:data1" content="Work4you.global" />

            <slot name="head" />
        </Head>
    <div class="flex flex-col font-sans relative">
        <Banner />
        <div v-if="showConfetti" class="fixed top-0 left-1/2 -translate-x-1/2 pointer-events-none z-[300]">
            <ConfettiExplosion
                :particleCount="100"
                :force="0.8"
                :stageHeight="1000"
                :stageWidth="1500"
                :colors="['#00a0e3', '#0A2C5C', '#E11D48', '#60a5fa']"
            />
        </div>
        <div
            id="image"
            v-if="props.imageUrl"
            class="absolute min-h-screen min-w-full bg-no-repeat bg-cover bg-center z-0"
            :style="{
        backgroundImage: `url(${props.imageUrl})`,
        backgroundSize: 'cover',
        backgroundPosition: 'center',
    }"
        ></div>

        <!-- Header -->
        <div class="relative w-full max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 z-50">
            <header class="flex items-center h-20 justify-between mt-4 bg-white/80 backdrop-blur-md rounded-[2rem] px-6 md:px-10 border border-gray-100 shadow-xl shadow-blue-900/5">
                <Link :href="route('front')" class="flex items-center shrink-0">
                    <img v-if="route().current('front')" src="/images/logo-horizontal.svg" class="h-8 md:h-10 w-auto" :alt="__('translate.logo')" />
                    <ApplicationMark v-else class="h-10 md:h-12 w-auto" />
                </Link>

                <!-- Desktop nav -->
                <nav class="hidden lg:flex items-center space-x-1">
                    <NavLink :href="route('front.articles')" :active="route().current('front.articles')" class="!px-4 !py-2 !text-[10px] !font-black !uppercase !tracking-widest !border-none !text-[#0A2C5C] hover:!text-[#0A2C5C] !transition-colors">
                        {{__('translate.articles')}}
                    </NavLink>
                    <NavLink :href="route('front.projects')" :active="route().current('front.projects')" class="!px-4 !py-2 !text-[10px] !font-black !uppercase !tracking-widest !border-none !text-[#0A2C5C] hover:!text-[#0A2C5C] !transition-colors">
                        {{__('translate.projects')}}
                    </NavLink>
                    <NavLink :href="route('front.firms')" :active="route().current('front.firms')" class="!px-4 !py-2 !text-[10px] !font-black !uppercase !tracking-widest !border-none !text-[#0A2C5C] hover:!text-[#0A2C5C] !transition-colors">
                        {{__('translate.firms')}}
                    </NavLink>
                    <NavLink :href="route('front.partners')" :active="route().current('front.partners')" class="!px-4 !py-2 !text-[10px] !font-black !uppercase !tracking-widest !border-none !text-[#0A2C5C] hover:!text-[#0A2C5C] !transition-colors">
                        {{__('translate.partners')}}
                    </NavLink>
                </nav>

                <!-- Language selector and auth -->
                <div class="hidden md:flex items-center space-x-4">
                    <div class="custom-multiselect w-52">
                        <Multiselect
                            v-model="lang"
                            :options="sortLangs"
                            label="label"
                            track-by="value"
                            @select="dispatchAction"
                            :placeholder="__('translate.placeholder')"
                            :selectLabel="''"
                            :selectedLabel="''"
                            :deselectLabel="''"
                            class="languages-multiselect"
                        >
                            <template #singleLabel="{ option }">
                                <div class="flex items-center gap-2">
                                    <span :class="'fi fi-' + getFlagCode(option.value) + ' fis'"></span>
                                    <span>{{ option.label }}</span>
                                </div>
                            </template>
                            <template #option="{ option }">
                                <div class="flex items-center gap-2">
                                    <span :class="'fi fi-' + getFlagCode(option.value) + ' fis'"></span>
                                    <span>{{ option.label }}</span>
                                </div>
                            </template>
                            <template #noResult>
                                <span>{{__('translate.noOptions')}}</span>
                            </template>
                            <template #noOptions>
                                <span>{{__('translate.noResult')}}</span>
                            </template>
                        </Multiselect>
                    </div>
                    <button v-if="page.props.currentCountry != page.props.language" @click="resetLang(page.props.currentCountry)" class="text-[10px] font-black uppercase tracking-widest text-[#0A2C5C] hover:underline underline-offset-4">{{ page.props.currentCountry }}</button>

                    <div v-if="auth?.user" class="flex items-center gap-3">
                        <Link :href="route('dashboard')" class="px-6 py-3 bg-[#0A2C5C] text-white text-[10px] font-black uppercase tracking-widest rounded-xl hover:bg-[#00a0e3] shadow-lg shadow-blue-900/20 transition-all hover:-translate-y-0.5">
                            {{__('translate.dashboard')}}
                        </Link>
                    </div>
                    <template v-else>
                        <div class="flex items-center gap-2">
                            <Link :href="route('login')" class="px-6 py-3 bg-white border border-gray-100 text-[#0A2C5C] text-[10px] font-black uppercase tracking-widest rounded-xl hover:bg-gray-50 shadow-sm transition-all hover:-translate-y-0.5">
                                {{__('translate.login')}}
                            </Link>
                            <Link v-if="page.props.canRegister" :href="route('register')" class="px-6 py-3 bg-red-600 text-white text-[10px] font-black uppercase tracking-widest rounded-xl hover:bg-red-700 shadow-lg shadow-red-900/20 transition-all hover:-translate-y-0.5">
                                {{__('translate.register')}}
                            </Link>
                        </div>
                    </template>
                </div>

                <!-- Mobile menu button -->
                <div class="lg:hidden relative z-50">
                    <button @click="toggleMenu" class="p-2.5 rounded-2xl bg-gray-50 text-[#0A2C5C] hover:bg-gray-100 transition-colors border border-gray-100">
                        <svg v-if="!mobileMenuOpen" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-6 w-6">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M4 6h16M4 12h16M4 18h16"/>
                        </svg>
                        <svg v-else xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-6 w-6">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M6 18L18 6M6 6l12 12"/>
                        </svg>
                    </button>
                </div>
            </header>
        </div>

        <!-- Main content -->
        <main class="relative z-0 flex-grow">
            <slot />
        </main>

        <!-- Mobile Menu -->
        <transition
            enter-active-class="transition duration-300 ease-out"
            enter-from-class="opacity-0 translate-x-full"
            enter-to-class="opacity-100 translate-x-0"
            leave-active-class="transition duration-200 ease-in"
            leave-from-class="opacity-100 translate-x-0"
            leave-to-class="opacity-0 translate-x-full"
        >
            <div v-if="mobileMenuOpen" class="fixed inset-0 z-[100] flex">
                <div class="relative w-full max-w-sm ml-auto flex flex-col bg-white shadow-2xl overflow-y-auto">
                    <div class="p-8 border-b border-gray-50 flex items-center justify-between">
                        <Link href="/" @click="closeMenu">
                            <img src="/images/logo-horizontal.svg" class="h-8 w-auto" :alt="__('translate.logo')" />
                        </Link>
                        <button @click="closeMenu" class="p-2.5 rounded-2xl bg-gray-50 text-gray-400 hover:text-red-600 transition-colors">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-6 w-6">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M6 18L18 6M6 6l12 12"/>
                            </svg>
                        </button>
                    </div>

                    <nav class="flex flex-col p-8 space-y-4">
                        <Link :href="route('front.articles')" @click="closeMenu" class="text-sm font-black text-[#0A2C5C] uppercase tracking-widest py-4 border-b border-gray-50 hover:text-blue-500 transition-colors">
                            {{__('translate.articles')}}
                        </Link>
                        <Link :href="route('front.projects')" @click="closeMenu" class="text-sm font-black text-[#0A2C5C] uppercase tracking-widest py-4 border-b border-gray-50 hover:text-blue-500 transition-colors">
                            {{__('translate.projects')}}
                        </Link>
                        <Link :href="route('front.firms')" @click="closeMenu" class="text-sm font-black text-[#0A2C5C] uppercase tracking-widest py-4 border-b border-gray-50 hover:text-blue-500 transition-colors">
                            {{__('translate.firms')}}
                        </Link>
                        <Link :href="route('front.partners')" @click="closeMenu" class="text-sm font-black text-[#0A2C5C] uppercase tracking-widest py-4 border-b border-gray-50 hover:text-blue-500 transition-colors">
                            {{__('translate.partners')}}
                        </Link>
                        <div class="pt-8 space-y-6">
                            <div class="custom-multiselect">
                                <Multiselect
                                    v-model="lang"
                                    :options="sortLangs"
                                    label="label"
                                    track-by="value"
                                    @select="dispatchAction"
                                    :placeholder="__('translate.placeholder')"
                                    :selectLabel="''"
                                    :selectedLabel="''"
                                    :deselectLabel="''"
                                    class="languages-multiselect"
                                >
                                    <template #singleLabel="{ option }">
                                        <div class="flex items-center gap-2">
                                            <span :class="'fi fi-' + getFlagCode(option.value) + ' fis'"></span>
                                            <span>{{ option.label }}</span>
                                        </div>
                                    </template>
                                    <template #option="{ option }">
                                        <div class="flex items-center gap-2">
                                            <span :class="'fi fi-' + getFlagCode(option.value) + ' fis'"></span>
                                            <span>{{ option.label }}</span>
                                        </div>
                                    </template>
                                    <template #noResult>
                                        <span>{{__('translate.noOptions')}}</span>
                                    </template>
                                    <template #noOptions>
                                        <span>{{__('translate.noResult')}}</span>
                                    </template>
                                </Multiselect>
                            </div>
                            <button v-if="page.props.currentCountry != page.props.language" @click="resetLang(page.props.currentCountry)" class="w-full text-center text-[10px] font-black uppercase tracking-widest text-[#0A2C5C] hover:underline underline-offset-4">{{ page.props.currentCountry }}</button>

                            <div v-if="auth?.user" class="flex flex-col gap-3">
                                <Link :href="route('dashboard')" @click="closeMenu" class="w-full text-center px-8 py-4 bg-[#0A2C5C] text-white text-[10px] font-black uppercase tracking-widest rounded-2xl shadow-lg shadow-blue-900/20">
                                    {{__('translate.dashboard')}}
                                </Link>
                            </div>
                            <template v-else>
                                <div class="flex flex-col gap-3">
                                    <Link :href="route('login')" @click="closeMenu" class="w-full text-center px-8 py-4 bg-[#0A2C5C] text-white text-[10px] font-black uppercase tracking-widest rounded-2xl shadow-lg shadow-blue-900/20">
                                        {{__('translate.login')}}
                                    </Link>
                                    <Link v-if="page.props.canRegister" :href="route('register')" @click="closeMenu" class="w-full text-center px-8 py-4 bg-red-600 text-white text-[10px] font-black uppercase tracking-widest rounded-2xl shadow-lg shadow-red-900/20">
                                        {{__('translate.register')}}
                                    </Link>
                                </div>
                            </template>
                        </div>
                    </nav>
                </div>
                <div class="flex-1 bg-black/40 backdrop-blur-sm" @click="closeMenu"></div>
            </div>
        </transition>

        <!-- Scroll to top -->
        <button
            v-if="showScrollTop"
            @click="scrollToTop"
            class="fixed right-8 bottom-8 bg-[#0A2C5C] text-white rounded-2xl w-14 h-14 flex items-center justify-center shadow-2xl shadow-blue-900/40 hover:bg-[#00a0e3] transition-all hover:-translate-y-1 z-[90]"
        >
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 10l7-7m0 0l7 7m-7-7v18" />
            </svg>
        </button>

        <!-- Footer -->
        <footer class="bg-white border-t border-gray-100 relative z-50 pt-20 pb-10" :class="{'mt-[-100px]': route().current('front')}">
            <div class="mx-auto max-w-7xl px-6 lg:px-8">
                <div class="grid grid-cols-1 lg:grid-cols-12 gap-16 mb-20">
                    <!-- Brand & Socials -->
                    <div class="lg:col-span-4 space-y-8 text-center lg:text-left">
                        <img src="/images/logo-horizontal.svg" class="h-12 w-auto mx-auto lg:mx-0" :alt="__('translate.logo')" />
                        <p class="text-sm text-[#0A2C5C] font-medium leading-relaxed max-w-sm mx-auto lg:mx-0">
                            {{ __('translate.footer.description') }}
                        </p>
                        <div class="flex items-center justify-center lg:justify-start gap-3">
                            <a v-for="social in socialLinks" :key="social.name" :href="social.url" target="_blank" rel="noopener noreferrer" class="w-10 h-10 bg-gray-50 rounded-xl flex items-center justify-center hover:bg-blue-50 hover:scale-110 transition-all shadow-sm border border-gray-100">
                                <img :src="`/images/icons/${social.name}.svg`" :alt="social.name" class="h-5 w-5 opacity-70" />
                            </a>
                        </div>
                    </div>

                    <div class="lg:col-span-8">
                        <div class="grid grid-cols-1 sm:grid-cols-3 gap-12">
                            <div>
                                <h3 class="text-[10px] font-black text-[#0A2C5C] uppercase tracking-[0.2em] mb-8 flex items-center gap-2">
                                    <span class="w-1.5 h-1.5 bg-blue-500 rounded-full"></span>
                                    {{ __('translate.footer.for_candidates') }}
                                </h3>
                                <ul class="space-y-4">
                                    <li v-for="link in [
                                        { route: 'front.projects', label: 'browse_offers' },
                                        { route: 'front.articles', label: 'articles_and_guides' },
                                        { route: 'login', label: 'login', params: { type: 'worker' } },
                                        { route: 'register', label: 'register', params: { type: 'worker' } }
                                    ]" :key="link.route">
                                        <Link :href="route(link.route, link.params || {})" class="text-xs font-bold text-gray-400 uppercase tracking-widest hover:text-[#0A2C5C] transition-colors">
                                            {{ __('translate.footer.' + link.label) }}
                                        </Link>
                                    </li>
                                </ul>
                            </div>

                            <div>
                                <h3 class="text-[10px] font-black text-[#0A2C5C] uppercase tracking-[0.2em] mb-8 flex items-center gap-2">
                                    <span class="w-1.5 h-1.5 bg-red-500 rounded-full"></span>
                                    {{ __('translate.footer.for_companies') }}
                                </h3>
                                <ul class="space-y-4">
                                    <li v-for="link in [
                                        { route: 'project-recruits.create', label: 'add_offer' },
                                        { route: 'front.price', label: 'pricing' },
                                        { route: 'login', label: 'login', params: { type: 'firm' } },
                                        { route: 'register', label: 'register', params: { type: 'firm' } }
                                    ]" :key="link.route">
                                        <Link :href="route(link.route, link.params || {})" class="text-xs font-bold text-gray-400 uppercase tracking-widest hover:text-[#0A2C5C] transition-colors">
                                            {{ __('translate.footer.' + link.label) }}
                                        </Link>
                                    </li>
                                </ul>
                            </div>

                            <div>
                                <h3 class="text-[10px] font-black text-[#0A2C5C] uppercase tracking-[0.2em] mb-8 flex items-center gap-2">
                                    <span class="w-1.5 h-1.5 bg-green-500 rounded-full"></span>
                                    {{ __('translate.footer.about_us') }}
                                </h3>
                                <ul class="space-y-4">
                                    <li v-for="link in [
                                        { route: 'front.firms', label: 'companies' },
                                        { route: 'front.aboutus', label: 'about' },
                                        { route: 'front.contact', label: 'contact' },
                                        { route: 'front.partners', label: 'partners' }
                                    ]" :key="link.route">
                                        <Link :href="route(link.route)" class="text-xs font-bold text-gray-400 uppercase tracking-widest hover:text-[#0A2C5C] transition-colors">
                                            {{ __('translate.footer.' + link.label) }}
                                        </Link>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Newsletter & Bottom Bar -->
                <div class="pt-16 border-t border-gray-50">
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center mb-16">
                        <div class="space-y-4">
                            <h3 class="text-2xl font-black text-[#0A2C5C] uppercase tracking-tight">{{ __('translate.footer.stay_in_touch') }}</h3>
                            <p class="text-sm text-[#0A2C5C] font-medium leading-relaxed">{{ __('translate.footer.newsletter_text') }}</p>
                        </div>
                        <form @submit.prevent="submitForm" class="relative group">
                            <div class="flex flex-col sm:flex-row gap-4">
                                <div class="flex-1 relative">
                                    <input
                                        type="email"
                                        v-model="form.email"
                                        :placeholder="__('translate.footer.email_placeholder')"
                                        class="w-full px-6 py-4 bg-gray-50 border-gray-100 rounded-2xl focus:bg-white focus:ring-0 focus:border-blue-200 transition-all text-xs font-bold placeholder-gray-400 text-[#0A2C5C]"
                                        :class="{'border-red-500': form.errors.email}"
                                    >
                                </div>
                                <button
                                    type="submit"
                                    class="px-10 py-4 bg-[#0A2C5C] text-white text-[10px] font-black uppercase tracking-[0.3em] leading-loose rounded-2xl hover:bg-[#00a0e3] shadow-xl shadow-blue-900/20 transition-all hover:-translate-y-0.5 disabled:opacity-50 disabled:cursor-not-allowed"
                                    :disabled="form.processing"
                                >
                                    {{ __('translate.footer.subscribe') }}
                                </button>
                            </div>
                            <div v-if="form.errors.email" class="text-[10px] font-black text-red-500 uppercase mt-1">
                                {{ form.errors.email }}
                            </div>
                            <div v-if="newsletterAgreements.length > 0 && form.errors.agreements" class="text-[10px] font-black text-red-500 uppercase mt-1">
                                {{ form.errors.agreements }}
                            </div>

                            <div v-if="newsletterAgreements.length > 0" class="mt-4 space-y-4 border-t border-gray-50 pt-6">
                                <div class="flex items-center gap-3 group">
                                    <div @click="toggleAllNewsletterAgreements" class="relative mt-1 cursor-pointer">
                                        <Checkbox :checked="isAllNewsletterAgreementsSelected" class="sr-only" />
                                        <div class="w-11 h-6 bg-gray-100 rounded-full transition-all duration-300 border border-gray-200/50 group-hover:bg-gray-200" :class="{'bg-[#0A2C5C] border-[#0A2C5C]': isAllNewsletterAgreementsSelected}"></div>
                                        <div class="absolute left-1 top-1 w-4 h-4 rounded-full transition-all duration-300 shadow-sm" :class="isAllNewsletterAgreementsSelected ? 'translate-x-5 bg-work-main' : 'bg-white'"></div>
                                    </div>
                                    <div class="text-[10px] font-black uppercase tracking-wider flex items-center gap-1.5 flex-wrap transition-colors duration-300" :class="isAllNewsletterAgreementsSelected ? 'text-[#0A2C5C]' : 'text-[#0A2C5C]'">
                                        <span class="cursor-pointer uppercase" @click="toggleAllNewsletterAgreements">{{ __('translate.agree') }}</span>
                                        <button
                                            type="button"
                                            class="uppercase text-[#0A2C5C] font-black hover:underline cursor-pointer decoration-2 underline-offset-4"
                                            @click.stop="showNewsletterAgreements = true"
                                        >
                                            {{ __('translate.newsletter_agreements') }}
                                        </button>

                                        <DialogModal :show="showNewsletterAgreements" @close="showNewsletterAgreements = false">
                                            <template #title>
                                                {{ __('translate.newsletter_agreements') }}
                                            </template>
                                            <template #content>
                                                <div class="space-y-8 max-h-[60vh] overflow-y-auto pr-4 text-left">
                                                    <div v-for="agreement in newsletterAgreements" :key="agreement.id" class="space-y-4">
                                                        <div class="flex items-start gap-3">
                                                            <Checkbox
                                                                :id="'newsletter-agreement-' + agreement.id"
                                                                v-model:checked="form.agreements"
                                                                :value="agreement.id.toString()"
                                                                class="w-5 h-5 !rounded-lg !text-[#00a0e3] mt-1"
                                                                :class="[
                                                                    form.errors.agreements && isAgreementRequired(agreement.id) && !form.agreements.includes(agreement.id.toString())
                                                                    ? '!border-red-500 !ring-red-500/20'
                                                                    : '!border-gray-300 focus:!ring-[#00a0e3]/20'
                                                                ]"
                                                            />
                                                            <div class="flex-grow">
                                                                <label :for="'newsletter-agreement-' + agreement.id"
                                                                       class="text-gray-700 leading-relaxed font-bold text-sm normal-case cursor-pointer [&_a]:underline [&_a]:text-blue-600 hover:[&_a]:text-blue-800 transition-colors"
                                                                       :class="{'text-red-600': form.errors.agreements && isAgreementRequired(agreement.id) && !form.agreements.includes(agreement.id.toString())}"
                                                                       v-html="agreement.description[page.props.language] || agreement.description['pl']"></label>
                                                                <div v-if="agreement.help_text && (agreement.help_text[page.props.language] || agreement.help_text['pl'])"
                                                                     class="mt-2 text-[10px] text-[#0A2C5C] font-medium normal-case leading-relaxed bg-blue-50/50 p-3 rounded-xl border border-blue-100/50 italic [&_a]:underline [&_a]:text-blue-600 hover:[&_a]:text-blue-800 transition-colors">
                                                                    <div v-html="agreement.help_text[page.props.language] || agreement.help_text['pl']"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </template>
                                            <template #footer>
                                                <SecondaryButton @click="showNewsletterAgreements = false">
                                                    {{ __('translate.close') }}
                                                </SecondaryButton>
                                            </template>
                                        </DialogModal>
                                    </div>
                                </div>
                            </div>

                            <p class="mt-6 text-[10px] text-gray-400 font-bold uppercase tracking-widest text-center sm:text-left">
                                {{ __('translate.footer.privacy_notice') }}
                            </p>
                        </form>
                    </div>

                    <div class="flex flex-col lg:flex-row justify-between items-center gap-8 pt-8 border-t border-gray-50">
                        <div class="flex flex-wrap justify-center gap-6 text-[10px] font-black text-gray-400 uppercase tracking-widest">
                            <Link class="hover:text-[#0A2C5C] transition-colors" :href="route('front.privacy')">{{ __('translate.footer.privacy_policy') }}</Link>
                            <Link class="hover:text-[#0A2C5C] transition-colors" :href="route('front.owner')">{{ __('translate.footer.owner') }}</Link>
                            <Link class="hover:text-[#0A2C5C] transition-colors" :href="route('front.terms')">{{ __('translate.footer.terms') }}</Link>
                        </div>
                        <p class="text-[10px] font-black text-gray-300 uppercase tracking-[0.2em]">
                            {{ __('translate.footer.copyright') }}
                        </p>
                    </div>
                </div>
            </div>
        </footer>
        <CookieConsent />
    </div>
</template>
<style src="vue-multiselect/dist/vue-multiselect.css"></style>
<style lang="scss">
.custom-multiselect {
    .multiselect__tags {
        border: 1px solid #f3f4f6; /* border-gray-100 */
        border-radius: 0.75rem; /* rounded-xl (12px) */
        padding: 8px 30px 8px 16px; /* Adjusted to match py-3 (approx 12px) but multiselect needs inner padding adjustment */
        background: #f9fafb; /* bg-gray-50 */
        transition: all 0.3s ease;
        min-height: 40px; /* To match button height roughly */
        display: flex;
        align-items: center;
    }

    .multiselect__placeholder {
        margin-bottom: 0;
        padding-top: 0;
        color: #9ca3af; /* text-gray-400 */
        font-size: 10px; /* text-[10px] */
        font-weight: 900; /* font-black */
        text-transform: uppercase;
        letter-spacing: 0.1em;
        line-height: 24px;
    }

    .multiselect__single {
        margin-bottom: 0;
        padding-left: 0;
        font-size: 10px; /* text-[10px] */
        background: transparent;
        font-weight: 900; /* font-black */
        text-transform: uppercase;
        letter-spacing: 0.1em;
        line-height: 24px;
    }

    .multiselect__input,
    .multiselect__single {
        color: #0A2C5C !important;
    }

    .multiselect__input {
        margin-bottom: 0;
        background: transparent;
        font-size: 10px;
        font-weight: 900;
        line-height: 24px;
    }

    .multiselect__select {
        height: 40px;
        width: 30px;
    }

    .multiselect__option--highlight {
        background: #0A2C5C !important;
        outline: none;
        color: white;
        font-size: 10px;
        font-weight: 900;
        text-transform: uppercase;
        letter-spacing: 0.1em;
    }

    .multiselect__option--selected {
        background: #f3f4f6 !important;
        color: #0A2C5C;
        font-weight: 900;
    }

    .multiselect__content-wrapper {
        border: 1px solid #f3f4f6;
        border-top: none;
        border-bottom-left-radius: 0.75rem;
        border-bottom-right-radius: 0.75rem;
        box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1);
        z-index: 50 !important;
        width: auto !important;
        min-width: 100%;
        white-space: nowrap;
    }

    .multiselect__tag {
        background: #00a0e3 !important;
        border-radius: 0.5rem;
        font-size: 9px;
        font-weight: 900;
        text-transform: uppercase;
        letter-spacing: 0.1em;
    }

    .multiselect__tag-icon:after {
        color: white !important;
    }

    .multiselect__tag-icon:hover {
        background: #0088c2 !important;
    }
    .multiselect__tag-icon{
        top:-3px !important
    }
}
.languages-multiselect{
    .multiselect__single,
    .multiselect__input,
    .multiselect__option,
    .multiselect__option--highlight {
        font-size: 10px !important;
        text-transform: uppercase !important;
        font-weight: 900 !important;
        letter-spacing: 0.1em !important;
    }

    .multiselect__tags {
        padding: 0 30px 0 16px !important;
        display: flex !important;
        align-items: center !important;
    }

    .multiselect__placeholder {
        line-height: 38px !important; /* height - borders */
    }

    .multiselect__single {
        line-height: 38px !important;
    }

    .multiselect__input {
        line-height: 38px !important;
        padding: 0 !important;
    }

    .multiselect__tag {
        font-size: 8px !important;
        text-transform: uppercase !important;
    }

    .fi {
        width: 14px;
        height: 14px;
        border-radius: 2px;
    }
}
</style>
