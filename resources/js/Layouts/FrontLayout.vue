<script setup>
import { Head, Link, router, usePage, useForm } from '@inertiajs/vue3';
import Multiselect from 'vue-multiselect';
import Banner from '@/Components/Banner.vue';
import ConfettiExplosion from "vue-confetti-explosion";
import ApplicationMark from "@/Components/ApplicationMark.vue";
import ApplicationMarkWhite from "@/Components/ApplicationMarkWhite.vue";
import NavLink from "@/Components/NavLink.vue";

import { ref, computed, watch,onMounted  } from "vue";

const isClient = ref(false);
onMounted(() => {
    isClient.value = true;
});

const form = useForm({
    email: '',
});

const submitForm = () => {
    form.post(route('newsletter.store'), {
        preserveScroll: true,
        onSuccess: () => {
            form.reset('email');
        },
    });
};
import __ from "@/lang.js";
import ApplicationLogo from "@/Components/ApplicationLogo.vue";

const ogUrl = ref('');
onMounted(() => {
    if (isClient.value) {
        ogUrl.value = window.location.href;
    } else {
        ogUrl.value = page.props.pageUrl;
    }
});
const props = defineProps({
    title: String,
    description: String,
    keywords: String,
    image: String,
    publishedAt: String,
    modifiedAt: String,
    type: String,
    author: String,
    imageUrl: String,
});

const page = usePage();
const auth = page.props.auth ?? null;

// Mobile menu
const mobileMenuOpen = ref(false);
const toggleMenu = () => mobileMenuOpen.value = !mobileMenuOpen.value;
const closeMenu = () => mobileMenuOpen.value = false;
watch(mobileMenuOpen, val => {
    if (isClient.value) document.body.style.overflow = val ? 'hidden' : '';
});

// Scroll to top
const showScrollTop = ref(false);
const scrollToTop = () => { if (isClient.value) window.scrollTo({ top: 0, behavior: 'smooth' }); }
onMounted(() => {
    if (isClient.value) {
        window.addEventListener('scroll', () => showScrollTop.value = window.scrollY > 400);
    }
});

// Languages
const changeLang = computed(() => page.props.languages?.filter(el => el.value == page.props.language));
const lang = ref(changeLang);
const dispatchAction = (data) => router.post(route('front.language.store', { language: data.value }));
const resetLang = (data) => router.post(route('front.language.store', { language: data }));
const sortLangs = computed(() => page.props.languages?.sort((a,b) => a.label.localeCompare(b.label)));

const showConfetti = ref(false);
watch(() => page.props.jetstream?.flash?.banner, (newVal) => {
    if (newVal === __('translate.makeAplicationNotRegister')) {
        showConfetti.value = true;
        setTimeout(() => {
            showConfetti.value = false;
        }, 3000);
    }
}, { immediate: true });
</script>

<template>
    <div class="flex flex-col min-h-screen bg-gray-50/50 dark:bg-gray-900 font-sans">
        <Head>
            <!-- Title -->
            <title v-if="props.title">{{ props.title }}</title>
            <title v-else>{{ page.props.pageName || 'Work' }}</title>

            <!-- Meta description & keywords -->
            <meta name="description" :content="props.description || __('translate.meta_description_default')" />
            <meta name="keywords" :content="props.keywords || __('translate.meta_keywords_default')" />

            <!-- Canonical -->
            <link v-if="ogUrl" rel="canonical" :href="ogUrl" />

            <!-- Open Graph -->
            <meta property="og:locale" :content="page.props.language || 'pl'" />
            <meta v-if="props.type" property="og:type" :content="props.type" />
            <meta v-if="props.title" property="og:title" :content="props.title" />
            <meta v-if="props.description" property="og:description" :content="props.description" />
            <meta v-if="ogUrl" property="og:url" :content="ogUrl" />
            <meta v-if="ogUrl" property="og:site_name" :content="ogUrl" />
            <meta v-if="props.publishedAt" property="article:published_time" :content="props.publishedAt" />
            <meta v-if="props.modifiedAt" property="article:modified_time" :content="props.modifiedAt" />
            <meta property="og:image" :content="props.image || '/default-image.png'" />
            <meta property="og:image:width" content="1724" />
            <meta property="og:image:height" content="1149" />
            <meta property="og:image:type" content="image/jpeg" />

            <!-- Author -->
            <meta v-if="props.author" name="author" :content="props.author" />

            <!-- Twitter -->
            <meta name="twitter:card" content="summary_large_image" />
            <meta name="twitter:label1" :content="__('translate.written_by')" />
            <meta v-if="props.author" name="twitter:data1" :content="props.author" />
        </Head>


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

        <!-- Background only on home page -->
        <div
            v-if="route().current('front')"
            class="absolute inset-0 bg-no-repeat"
            :style="{ backgroundImage: `url(${props.imageUrl})`, backgroundSize: 'cover', backgroundPosition: 'center' }"
        ></div>

        <!-- Header -->
        <div class="relative w-full max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 z-50">
            <header class="flex items-center h-20 justify-between mt-4 bg-white/80 backdrop-blur-md rounded-[2rem] px-6 md:px-10 border border-gray-100 shadow-xl shadow-blue-900/5">
                <Link :href="route('dashboard')" class="flex items-center shrink-0">
                    <img v-if="route().current('front')" src="/images/logo-horizontal.svg" class="h-10 md:h-12 w-auto" :alt="__('translate.logo')" />
                    <ApplicationMark v-else class="h-10 md:h-12 w-auto" />
                </Link>

                <!-- Desktop nav -->
                <nav class="hidden lg:flex items-center space-x-1">
                    <NavLink :href="route('front.articles')" :active="route().current('front.articles')" class="!px-4 !py-2 !text-[10px] !font-black !uppercase !tracking-widest !border-none !text-gray-500 hover:!text-[#0A2C5C] !transition-colors">
                        {{__('translate.articles')}}
                    </NavLink>
                    <NavLink :href="route('front.projects')" :active="route().current('front.projects')" class="!px-4 !py-2 !text-[10px] !font-black !uppercase !tracking-widest !border-none !text-gray-500 hover:!text-[#0A2C5C] !transition-colors">
                        {{__('translate.projects')}}
                    </NavLink>
                    <NavLink :href="route('front.firms')" :active="route().current('front.firms')" class="!px-4 !py-2 !text-[10px] !font-black !uppercase !tracking-widest !border-none !text-gray-500 hover:!text-[#0A2C5C] !transition-colors">
                        {{__('translate.firms')}}
                    </NavLink>
                </nav>

                <!-- Language selector and auth -->
                <div class="hidden md:flex items-center space-x-4">
                    <div class="w-48 custom-multiselect">
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
                        ></Multiselect>
                    </div>
                    <button v-if="page.props.currentCountry != page.props.language" @click="resetLang(page.props.currentCountry)" class="text-[10px] font-black uppercase tracking-widest text-[#0A2C5C] hover:underline underline-offset-4">{{ page.props.currentCountry }}</button>

                    <div v-if="auth?.user" class="flex items-center gap-3">
                        <Link :href="route('dashboard')" class="px-6 py-3 bg-[#0A2C5C] text-white text-[10px] font-black uppercase tracking-widest rounded-xl hover:bg-blue-800 shadow-lg shadow-blue-900/20 transition-all hover:-translate-y-0.5">
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

                        <div class="pt-8 space-y-6">
                            <div class="custom-multiselect">
                                <Multiselect
                                    v-model="lang"
                                    :options="sortLangs"
                                    label="label"
                                    track-by="value"
                                    @select="dispatchAction"
                                    :placeholder="__('translate.placeholder')"
                                ></Multiselect>
                            </div>
                            <button v-if="page.props.currentCountry != page.props.language" @click="resetLang(page.props.currentCountry)" class="w-full text-center text-[10px] font-black uppercase tracking-widest text-[#0A2C5C] hover:underline underline-offset-4">{{ page.props.currentCountry }}</button>

                            <div v-if="auth?.user" class="flex flex-col gap-3">
                                <Link :href="route('dashboard')" @click="closeMenu" class="w-full text-center px-8 py-4 bg-[#0A2C5C] text-white text-[10px] font-black uppercase tracking-widest rounded-2xl shadow-lg shadow-blue-900/20">
                                    {{__('translate.dashboard')}}
                                </Link>
                            </div>
                            <template v-else>
                                <div class="flex flex-col gap-3">
                                    <Link :href="route('login')" @click="closeMenu" class="w-full text-center px-8 py-4 bg-white border border-gray-100 text-[#0A2C5C] text-[10px] font-black uppercase tracking-widest rounded-2xl shadow-sm">
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
            class="fixed right-8 bottom-8 bg-[#0A2C5C] text-white rounded-2xl w-14 h-14 flex items-center justify-center shadow-2xl shadow-blue-900/40 hover:bg-blue-800 transition-all hover:-translate-y-1 z-[90]"
        >
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 10l7-7m0 0l7 7m-7-7v18" />
            </svg>
        </button>

        <!-- Footer -->
        <footer class="bg-white border-t border-gray-100 relative z-50 pt-20 pb-10">
            <div class="mx-auto max-w-7xl px-6 lg:px-8">
                <div class="grid grid-cols-1 lg:grid-cols-12 gap-16 mb-20">
                    <!-- Brand & Socials -->
                    <div class="lg:col-span-4 space-y-8 text-center lg:text-left">
                        <img src="/images/logo-horizontal.svg" class="h-12 w-auto mx-auto lg:mx-0" :alt="__('translate.logo')" />
                        <p class="text-sm text-gray-500 font-medium leading-relaxed max-w-sm mx-auto lg:mx-0">
                            {{ __('translate.footer.description') }}
                        </p>
                        <div class="flex items-center justify-center lg:justify-start gap-3">
                            <a v-for="social in ['facebook', 'instagram', 'linkedin', 'x', 'tik_tok']" :key="social" href="#" class="w-10 h-10 bg-gray-50 rounded-xl flex items-center justify-center hover:bg-blue-50 hover:scale-110 transition-all shadow-sm border border-gray-100">
                                <img :src="`/images/icons/${social}.svg`" :alt="social" class="h-5 w-5 opacity-70" />
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
                                        { route: 'login', label: 'login' },
                                        { route: 'register', label: 'register' }
                                    ]" :key="link.route">
                                        <Link :href="route(link.route)" class="text-xs font-bold text-gray-400 uppercase tracking-widest hover:text-[#0A2C5C] transition-colors">
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
                                        { route: 'login', label: 'login' },
                                        { route: 'register', label: 'register' }
                                    ]" :key="link.route">
                                        <Link :href="route(link.route)" class="text-xs font-bold text-gray-400 uppercase tracking-widest hover:text-[#0A2C5C] transition-colors">
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
                            <p class="text-sm text-gray-500 font-medium leading-relaxed">{{ __('translate.footer.newsletter_text') }}</p>
                        </div>
                        <form @submit.prevent="submitForm" class="relative group">
                            <div class="flex flex-col sm:flex-row gap-4">
                                <div class="flex-1 relative">
                                    <input
                                        type="email"
                                        v-model="form.email"
                                        :placeholder="__('translate.footer.email_placeholder')"
                                        class="w-full px-6 py-4 bg-gray-50 border-gray-100 rounded-2xl focus:bg-white focus:ring-0 focus:border-blue-200 transition-all text-sm font-bold placeholder-gray-400"
                                        :class="{'border-red-500': form.errors.email}"
                                    >
                                    <div v-if="form.errors.email" class="absolute -bottom-6 left-2 text-[10px] font-black text-red-500 uppercase">
                                        {{ form.errors.email }}
                                    </div>
                                </div>
                                <button
                                    type="submit"
                                    class="px-10 py-4 bg-[#0A2C5C] text-white text-[10px] font-black uppercase tracking-widest rounded-2xl hover:bg-blue-800 shadow-xl shadow-blue-900/20 transition-all hover:-translate-y-0.5 disabled:opacity-50 disabled:cursor-not-allowed"
                                    :disabled="form.processing"
                                >
                                    {{ __('translate.footer.subscribe') }}
                                </button>
                            </div>
                            <p class="mt-6 text-[10px] text-gray-400 font-bold uppercase tracking-widest text-center sm:text-left">
                                {{ __('translate.footer.privacy_notice') }}
                            </p>
                        </form>
                    </div>

                    <div class="flex flex-col lg:flex-row justify-between items-center gap-8 pt-8 border-t border-gray-50">
                        <div class="flex flex-wrap justify-center gap-6 text-[10px] font-black text-gray-400 uppercase tracking-widest">
                            <Link class="hover:text-[#0A2C5C] transition-colors" :href="route('login')">{{ __('translate.footer.privacy_policy') }}</Link>
                            <Link class="hover:text-[#0A2C5C] transition-colors" :href="route('login')">{{ __('translate.footer.terms') }}</Link>
                            <Link class="hover:text-[#0A2C5C] transition-colors" :href="route('login')">{{ __('translate.footer.cookies') }}</Link>
                            <Link class="hover:text-[#0A2C5C] transition-colors" :href="route('login')">{{ __('translate.footer.gdpr') }}</Link>
                        </div>
                        <p class="text-[10px] font-black text-gray-300 uppercase tracking-[0.2em]">
                            {{ __('translate.footer.copyright') }}
                        </p>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</template>
<style src="vue-multiselect/dist/vue-multiselect.css"></style>
<style lang="scss">
.custom-multiselect {
    .multiselect__tags {
        border: 1px solid #f3f4f6; /* border-gray-100 */
        border-radius: 1rem; /* rounded-2xl approximation for multiselect */
        padding: 0.75rem 2.5rem 0.75rem 1.25rem;
        background: #f9fafb; /* bg-gray-50 */
        transition: all 0.3s ease;
    }

    .multiselect__placeholder {
        margin-bottom: 0;
        padding-top: 0;
        color: #9ca3af; /* text-gray-400 */
        font-size: 0.75rem; /* text-xs */
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 0.1em;
    }

    .multiselect__single {
        margin-bottom: 0;
        padding-left: 0;
        font-size: 0.75rem;
        background: transparent;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 0.1em;
    }

    .multiselect__input {
        margin-bottom: 0;
        background: transparent;
        font-size: 0.75rem;
        font-weight: 700;
    }

    .multiselect__select {
        height: 100%;
        width: 2.5rem;
    }

    .multiselect__option--highlight {
        background: #0A2C5C !important;
        outline: none;
        color: white;
        font-size: 0.75rem;
        font-weight: 700;
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
        border-bottom-left-radius: 1rem;
        border-bottom-right-radius: 1rem;
        box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1);
    }

    .multiselect__tag {
        background: #00a0e3 !important;
        border-radius: 0.75rem;
        font-size: 10px;
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
</style>
