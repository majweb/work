<script setup>
import { Head, Link, router, usePage, useForm } from '@inertiajs/vue3';
import Multiselect from 'vue-multiselect';
import Banner from '@/Components/Banner.vue';
import ApplicationMark from "@/Components/ApplicationMark.vue";
import ApplicationMarkWhite from "@/Components/ApplicationMarkWhite.vue";
import NavLink from "@/Components/NavLink.vue";

import { ref, computed, watch,onMounted  } from "vue";

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
    if (typeof window !== 'undefined') {
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
    if (typeof document !== 'undefined') document.body.style.overflow = val ? 'hidden' : '';
});

// Scroll to top
const showScrollTop = ref(false);
const scrollToTop = () => { if (typeof window !== 'undefined') window.scrollTo({ top: 0, behavior: 'smooth' }); }
if (typeof window !== 'undefined') {
    window.addEventListener('scroll', () => showScrollTop.value = window.scrollY > 400);
}

// Languages
const changeLang = computed(() => page.props.languages?.filter(el => el.value == page.props.language));
const lang = ref(changeLang);
const dispatchAction = (data) => router.post(route('front.language.store', { language: data.value }));
const resetLang = (data) => router.post(route('front.language.store', { language: data }));
const sortLangs = computed(() => page.props.languages?.sort((a,b) => a.label.localeCompare(b.label)));
</script>

<template>
    <div class="flex flex-col min-h-screen bg-white dark:bg-gray-900">
        <Head>
            <!-- Title -->
            <title v-if="props.title">{{ props.title }}</title>
            <title v-else>Domyślny tytuł</title>

            <!-- Meta description & keywords -->
            <meta v-if="props.description" name="description" :content="props.description" />
            <meta v-if="props.keywords" name="keywords" :content="props.keywords" />

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
            <meta name="twitter:label1" content="Napisane przez" />
            <meta v-if="props.author" name="twitter:data1" :content="props.author" />
        </Head>


        <Banner />

        <!-- Background only on home page -->
        <div
            v-if="route().current('front')"
            class="absolute inset-0 bg-no-repeat"
            :style="{ backgroundImage: `url(${props.imageUrl})`, backgroundSize: 'cover', backgroundPosition: 'center' }"
        ></div>

        <!-- Header -->
        <div class="relative w-full max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <header class="flex items-center h-16 justify-between mt-4">
                <Link :href="route('dashboard')" class="flex items-center">
                    <ApplicationMarkWhite class="h-16 w-auto" />
                </Link>

                <!-- Desktop nav -->
                <nav class="hidden md:flex space-x-6">
                    <NavLink :href="route('front.articles')" :active="route().current('front.articles')">{{__('translate.articles')}}</NavLink>
                    <NavLink :href="route('front.projects')" :active="route().current('front.projects')">{{__('translate.projects')}}</NavLink>
                    <NavLink :href="route('front.firms')" :active="route().current('front.firms')">{{__('translate.firms')}}</NavLink>
                </nav>

                <!-- Language selector and auth -->
                <div class="hidden md:flex items-center space-x-6 w-2/5">
                    <Multiselect
                        v-model="lang"
                        :options="sortLangs"
                        label="label"
                        track-by="value"
                        @select="dispatchAction"
                        class="w-full"
                        :placeholder="__('translate.placeholder')"
                    ></Multiselect>
                    <button v-if="page.props.currentCountry != page.props.language" @click="resetLang(page.props.currentCountry)" class="underline">{{ page.props.currentCountry }}</button>

                    <Link v-if="auth?.user" :href="route('dashboard')" class="px-4 py-2 bg-violet-600 text-white rounded-md hover:bg-violet-700">{{__('translate.dashboard')}}</Link>
                    <template v-else>
                        <Link :href="route('login')" class="px-4 py-2 bg-white text-black rounded-md hover:bg-gray-100">{{__('translate.login')}}</Link>
                        <Link v-if="page.props.canRegister" :href="route('register')" class="px-4 py-2 bg-white text-black rounded-md hover:bg-gray-100">{{__('translate.register')}}</Link>
                    </template>
                </div>

                <!-- Mobile menu button -->
                <div class="md:hidden relative z-50">
                    <button @click="toggleMenu" class="p-2 rounded-md text-red-600 dark:text-gray-300">
                        <svg v-if="!mobileMenuOpen" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-6 w-6">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                        </svg>
                    </button>
                </div>
            </header>
        </div>

        <!-- Main content -->
        <main class="relative z-0 flex-grow px-4 sm:px-6 lg:px-8">
            <slot />
        </main>

        <!-- Mobile Menu -->
        <transition name="slide">
            <div v-if="mobileMenuOpen" class="fixed inset-0 z-40 flex md:hidden">
                <div class="relative w-full flex flex-col bg-violet-50 dark:bg-gray-900 shadow-xl overflow-y-auto">
                    <button @click="closeMenu" class="absolute top-9 right-6 z-50 text-red-600">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-6 w-6">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                        </svg>
                    </button>

                    <div class="flex items-center justify-between p-4">
                        <Link href="/" @click="closeMenu">
                            <ApplicationMark class="h-12 w-auto" />
                        </Link>
                    </div>

                    <nav class="flex flex-col p-4 space-y-3 mt-12">
                        <NavLink :href="route('front.articles')" :active="route().current('front.articles')" @click="closeMenu">{{__('translate.articles')}}</NavLink>
                        <NavLink :href="route('front.projects')" :active="route().current('front.projects')" @click="closeMenu">{{__('translate.projects')}}</NavLink>
                        <NavLink :href="route('front.firms')" :active="route().current('front.firms')" @click="closeMenu">{{__('translate.firms')}}</NavLink>
                        <Multiselect
                            v-model="lang"
                            :options="sortLangs"
                            label="label"
                            track-by="value"
                            @select="dispatchAction"
                            class="w-full z-60 relative"
                            :placeholder="__('translate.placeholder')"
                        ></Multiselect>
                        <button v-if="page.props.currentCountry != page.props.language" @click="resetLang(page.props.currentCountry)" class="underline">{{ page.props.currentCountry }}</button>
                    </nav>
                </div>
                <div class="flex-1 bg-black/25" @click="closeMenu"></div>
            </div>
        </transition>

        <!-- Scroll to top -->
        <button v-if="showScrollTop" @click="scrollToTop" class="fixed right-6 bottom-6 bg-[#0a2c5c] text-white rounded-full w-12 h-12 flex items-center justify-center shadow-lg hover:bg-[#143d8c] z-[99]">↑</button>

        <!-- Footer -->
        <footer class="border-t border-gray-200 bg-white dark:bg-gray-950 dark:border-gray-800 w-full relative md:bottom-0 md:left-0 md:right-0 z-50 text-[#0a2c5c]">
            <div class="mx-auto max-w-7xl px-6 py-8 lg:px-8">

                <div class="flex flex-col md:flex-row items-center justify-between mb-4">
                    <img src="/images/logo-horizontal.svg" alt="logo" />
                    <div class="socials flex items-center gap-1">
                        <a href="https://facebook.com">
                            <img src="/images/icons/facebook.svg" alt="facebook"
                                 class="h-10 w-10 transition hover:scale-95"/>
                        </a>
                        <a href="https://instagram.com">
                            <img src="/images/icons/instagram.svg" alt="instagram"
                                 class="h-10 w-10 transition hover:scale-95"/>
                        </a>
                        <a href="https://instagram.com">
                            <img src="/images/icons/linkedin.svg" alt="linkedin"
                                 class="h-10 w-10 transition hover:scale-95"/>
                        </a>
                        <a href="https://instagram.com">
                            <img src="/images/icons/x.svg" alt="x"
                                 class="h-10 w-10 transit ion hover:scale-95"/>
                        </a>
                        <a href="https://instagram.com">
                            <img src="/images/icons/tik_tok.svg" alt="tik tok"
                                 class="h-10 w-10 transition hover:scale-95"/>
                        </a>

                    </div>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-3 md:grid-cols-4 gap-8">
                    <!-- Dla kandydatów -->
                    <div>
                        <h3 class="text-lg font-semibold mb-4">{{ __('footer.for_candidates') }}</h3>
                        <ul class="space-y-2">
                            <li><Link :href="route('front.articles')" class="text-[#0a2c5c] hover:underline">{{ __('footer.browse_offers') }}</Link></li>
                            <li><Link :href="route('front.articles')" class="text-[#0a2c5c] hover:underline">{{ __('footer.articles_and_guides') }}</Link></li>
                            <li><Link :href="route('login')" class="text-[#0a2c5c] hover:underline">{{ __('footer.login') }}</Link></li>
                            <li><Link :href="route('register')" class="text-[#0a2c5c] hover:underline">{{ __('footer.register') }}</Link></li>
                        </ul>
                    </div>

                    <!-- Dla firm -->
                    <div>
                        <h3 class="text-lg font-semibold mb-4">{{ __('footer.for_companies') }}</h3>
                        <ul class="space-y-2">
                            <li><Link :href="route('front.firms')" class="text-[#0a2c5c] hover:underline">{{ __('footer.add_offer') }}</Link></li>
                            <li><Link :href="route('login')" class="text-[#0a2c5c] hover:underline">{{ __('footer.pricing') }}</Link></li>
                            <li><Link :href="route('login')" class="text-[#0a2c5c] hover:underline">{{ __('footer.login') }}</Link></li>
                            <li><Link :href="route('register')" class="text-[#0a2c5c] hover:underline">{{ __('footer.register') }}</Link></li>
                        </ul>
                    </div>

                    <!-- O nas -->
                    <div>
                        <h3 class="text-lg font-semibold mb-4">{{ __('footer.about_us') }}</h3>
                        <ul class="space-y-2">
                            <li><Link :href="route('login')" class="text-[#0a2c5c] hover:underline">{{ __('footer.companies') }}</Link></li>
                            <li><Link :href="route('login')" class="text-[#0a2c5c] hover:underline">{{ __('footer.about') }}</Link></li>
                            <li><Link :href="route('login')" class="text-[#0a2c5c] hover:underline">{{ __('footer.contact') }}</Link></li>
                            <li><Link :href="route('login')" class="text-[#0a2c5c] hover:underline">{{ __('footer.partners') }}</Link></li>
                        </ul>
                    </div>

                    <!-- Bądźmy w kontakcie -->
                    <div>
                        <h3 class="text-lg font-semibold mb-4">{{ __('footer.stay_in_touch') }}</h3>
                        <p class="text-[#0a2c5c] mb-4">{{ __('footer.newsletter_text') }}</p>
                        <form @submit.prevent="submitForm" class="space-y-2">
                            <div class="flex">
                                <input
                                    type="email"
                                    v-model="form.email"
                                    :placeholder="__('footer.email_placeholder')"
                                    class="flex-1 px-3 py-2 border border-[#0a2c5c] rounded-l"
                                    :class="{'border-red-500': form.errors.email}"
                                >
                                <button
                                    type="submit"
                                    class="px-4 py-2 bg-[#0a2c5c] text-white rounded-r transition hover:bg-[#143d8c]"
                                    :disabled="form.processing"
                                >
                                    {{ __('footer.subscribe') }}
                                </button>
                            </div>
                            <div v-if="form.errors.email" class="text-red-500 text-sm">
                                {{ form.errors.email }}
                            </div>
                            <p class="text-xs text-[#0a2c5c]">{{ __('footer.privacy_notice') }}</p>
                        </form>
                    </div>
                </div>

                <!-- Bottom bar -->
                <div class="mt-8 pt-4 border-t border-gray-200">
                    <div class="flex flex-col md:flex-row justify-between items-center gap-4">
                        <div class="flex flex-wrap gap-4 justify-center text-sm text-[#0a2c5c]">
                            <Link class="hover:underline" :href="route('login')">{{ __('footer.privacy_policy') }}</Link>
                            <span>|</span>
                            <Link class="hover:underline" :href="route('login')">{{ __('footer.terms') }}</Link>
                            <span>|</span>
                            <Link class="hover:underline" :href="route('login')">{{ __('footer.cookies') }}</Link>
                            <span>|</span>
                            <Link class="hover:underline" :href="route('login')">{{ __('footer.gdpr') }}</Link>
                        </div>
                        <p class="text-sm text-[#0a2c5c]">
                            {{ __('footer.copyright') }}
                        </p>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</template>

<style src="vue-multiselect/dist/vue-multiselect.css"></style>
<style lang="scss">
.multiselect__tag { background: #0A2C5C !important; }
.multiselect__option--highlight { background: #0A2C5C !important; outline: none; color: white; }
.multiselect__option--selected { background: #12315d !important; color: white; font-weight: bold; }
.slide-enter-active, .slide-leave-active { transition: transform 0.3s ease-in-out; }
.slide-enter-from { transform: translateX(-100%); }
.slide-enter-to { transform: translateX(0); }
.slide-leave-from { transform: translateX(0); }
.slide-leave-to { transform: translateX(-100%); }
</style>
