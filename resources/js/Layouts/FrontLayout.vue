<script setup>
import { Head, Link, router, usePage } from '@inertiajs/vue3';
import Multiselect from 'vue-multiselect';
import Banner from '@/Components/Banner.vue';
import ApplicationMark from "@/Components/ApplicationMark.vue";
import ApplicationMarkWhite from "@/Components/ApplicationMarkWhite.vue";
import NavLink from "@/Components/NavLink.vue";

import { ref, computed, watch,onMounted  } from "vue";
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
<!--            <title>{{ props.title || 'Domyślny tytuł' }}</title>-->
<!--            <meta name="description" :content="props.description || ''" />-->
<!--            <meta name="keywords" :content="props.keywords || ''" />-->
<!--            <meta property="og:title" :content="props.title ? props.title + ' - ' + page.props.pageName : page.props.pageName" />-->
<!--            <meta property="og:description" :content="props.description || ''" />-->
<!--            <meta property="og:type" content="website" />-->
<!--            <meta property="og:image" :content="props.image || '/default-image.png'" />-->
<!--            <meta property="og:url" :content="ogUrl" />-->
<!--            <meta property="og:locale" :content="page.props.language || 'pl'" />-->
            <!-- Title & Meta -->
            <title>{{ props.title || 'Domyślny tytuł' }}</title>
            <meta name="description" :content="props.description || ''" />
            <meta name="keywords" :content="props.keywords || ''" />
            <link rel="canonical" :href="ogUrl" />

            <!-- Open Graph -->
            <meta property="og:locale" :content="page.props.language || 'pl'" />
            <meta property="og:type" content="article" />
            <meta property="og:title" :content="props.title || page.props.pageName" />
            <meta property="og:description" :content="props.description || ''" />
            <meta property="og:url" :content="ogUrl" />
            <meta property="og:site_name" :content="page.props.pageUrl || 'work4you.global'" />
            <meta property="article:published_time" :content="props.publishedAt" />
            <meta property="article:modified_time" :content="props.modifiedAt" />
            <meta property="og:image" :content="props.image || '/default-image.png'" />
            <meta property="og:image:width" content="1724" />
            <meta property="og:image:height" content="1149" />
            <meta property="og:image:type" content="image/jpeg" />

            <!-- Author -->
            <meta name="author" :content="props.author" />

            <!-- Twitter -->
            <meta name="twitter:card" content="summary_large_image" />
            <meta name="twitter:label1" content="Napisane przez" />
            <meta name="twitter:data1" :content="props.author" />
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
                <div class="hidden md:flex items-center space-x-6">
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
                        <Link :href="route('login')" class="px-3 py-2 text-white hover:text-gray-200">{{__('translate.login')}}</Link>
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
        <main class="relative z-10 flex-grow px-4 sm:px-6 lg:px-8">
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
        <button v-if="showScrollTop" @click="scrollToTop" class="fixed right-6 bottom-6 bg-blue-900 text-white rounded-full w-12 h-12 flex items-center justify-center shadow-lg hover:bg-blue-800 z-[99]">↑</button>

        <!-- Footer -->
        <footer class="border-t border-gray-200 bg-white dark:bg-gray-950 dark:border-gray-800 w-full relative md:bottom-0 md:left-0 md:right-0 z-50">
            <div class="mx-auto max-w-7xl px-6 py-4 lg:px-8">
                <div class="flex flex-col items-center justify-between gap-2 sm:flex-row">
                    <Link :href="route('front')" class="inline-flex items-center gap-3 group">
                        <img src="/images/logoTransparent.png" alt="Company logo" class="h-9 w-auto" />
                        <span class="text-xl font-semibold tracking-tight text-gray-900 group-hover:opacity-90 dark:text-white">Work4You.global</span>
                    </Link>
                    <Link :href="route('front.contact')" class="inline-flex items-center rounded-xl border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-900 shadow-sm transition hover:shadow-md dark:border-gray-800 dark:bg-gray-900 dark:text-gray-200">
                        Get in touch
                    </Link>
                </div>

                <!-- Bottom bar -->
                <div class="flex flex-col items-center justify-between gap-4 sm:flex-row mt-4">
                    <p class="text-sm text-gray-500 dark:text-gray-400">
                        © <span x-data x-text="new Date().getFullYear()"></span> Work4You.global. All rights reserved.
                    </p>
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
