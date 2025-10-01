<script setup>
import { Head, Link, router, usePage } from '@inertiajs/vue3';
import Banner from '@/Components/Banner.vue';
import ApplicationMark from "@/Components/ApplicationMark.vue";
import NavLink from "@/Components/NavLink.vue";
import { computed, ref, watch } from "vue";
import Multiselect from 'vue-multiselect';

const props = defineProps({
    title: String,
    image: String,
    keywords: String,
    description: String,
    imageUrl: String,
});

const page = usePage();
const auth = page.props.auth ?? null;

// Mobile menu
const mobileMenuOpen = ref(false);
const toggleMenu = () => mobileMenuOpen.value = !mobileMenuOpen.value;
const closeMenu = () => mobileMenuOpen.value = false;
watch(mobileMenuOpen, val => document.body.style.overflow = val ? 'hidden' : '');

// Scroll to top
const showScrollTop = ref(false);
const scrollToTop = () => window.scrollTo({ top: 0, behavior: 'smooth' });
window.addEventListener('scroll', () => showScrollTop.value = window.scrollY > 400);

// Languages
const changeLang = computed(() => page.props.languages?.filter(el => el.value == page.props.language));
const lang = ref(changeLang);
const dispatchAction = (data) => router.post(route('front.language.store', { language: data.value }));
const resetLang = (data) => router.post(route('front.language.store', { language: data }));
const sortLangs = computed(() => page.props.languages.sort((a,b) => a.label.localeCompare(b.label)));
</script>

<template>
    <div class="flex flex-col min-h-screen bg-white dark:bg-gray-900 relative">
        <Head>
            <title>{{ props.title }}</title>
            <meta name="description" :content="props.description" />
            <meta name="keywords" :content="props.keywords" />
            <meta property="og:title" :content="props.title + ' - ' + page.props.pageName" />
            <meta property="og:site_name" :content="page.props.pageUrl" />
            <meta property="og:url" :content="page.props.pageUrl" />
            <meta property="og:description" :content="props.description" />
            <meta property="og:type" content="website" />
            <meta property="og:image" :content="props.image" />
            <meta property="og:locale" :content="page.props.language" />
        </Head>

        <Banner />

        <!-- Background only on home page -->
        <div
            v-if="route().current('front')"
            class="absolute inset-0 bg-no-repeat"
            :style="{ backgroundImage: `url(${props.imageUrl})`, backgroundSize: 'cover', backgroundPosition: 'center' }"
        ></div>

        <!-- Header -->
        <div class="relative z-10 w-full max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <header class="flex items-center h-16 justify-between mt-4">
                <Link :href="route('dashboard')" class="flex items-center">
                    <ApplicationMark class="block h-12 w-auto" />
                </Link>

                <!-- Desktop nav -->
                <nav class="hidden md:flex space-x-6">
                    <NavLink :href="route('front.articles')" :active="route().current('front.articles')">{{__('translate.articles')}}</NavLink>
                    <NavLink :href="route('front.projects')" :active="route().current('front.projects')">{{__('translate.projects')}}</NavLink>
                    <NavLink :href="route('front.firms')" :active="route().current('front.firms')">{{__('translate.firms')}}</NavLink>
                </nav>

                <!-- Language selector and auth -->
                <div class="hidden md:flex items-center space-x-4">
                    <Multiselect
                        v-model="lang"
                        :options="sortLangs"
                        label="label"
                        track-by="value"
                        :selectLabel="__('translate.selectLabel')"
                        :selectedLabel="__('translate.selectedLabel')"
                        :deselectLabel="__('translate.deselectLabel')"
                        :noOptions="__('translate.noOptions')"
                        :noResult="__('translate.noResult')"
                        :placeholder="__('translate.placeholder')"
                        @select="dispatchAction"
                        class="w-48"
                    ></Multiselect>

                    <button v-if="page.props.currentCountry != page.props.language" @click="resetLang(page.props.currentCountry)" class="underline">{{ page.props.currentCountry }}</button>

                    <Link v-if="auth?.user" :href="route('dashboard')" class="px-4 py-2 bg-violet-600 text-white rounded-md hover:bg-violet-700">{{__('translate.dashboard')}}</Link>
                    <template v-else>
                        <Link :href="route('login')" class="px-3 py-2 text-black dark:text-white rounded-md hover:bg-gray-200 dark:hover:bg-gray-700">{{__('translate.login')}}</Link>
                        <Link v-if="page.props.canRegister" :href="route('register')" class="px-4 py-2 bg-violet-600 text-white rounded-md hover:bg-violet-700">{{__('translate.register')}}</Link>
                    </template>
                </div>

                <!-- Mobile menu button -->
                <button @click="toggleMenu" class="md:hidden p-2 rounded-md text-gray-700 dark:text-gray-300">
                    <svg v-if="!mobileMenuOpen" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-6 w-6">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                    </svg>
                    <svg v-else xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-6 w-6">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                    </svg>
                </button>
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
                    <div class="flex items-center justify-between p-4">
                        <Link href="/" @click="closeMenu">
                            <ApplicationMark class="h-12 w-auto" />
                        </Link>
                        <button @click="closeMenu" class="p-2 rounded-md text-violet-600 dark:text-violet-200">✕</button>
                    </div>
                    <nav class="flex flex-col p-4 space-y-3">
                        <NavLink :href="route('front.articles')" :active="route().current('front.articles')" @click="closeMenu">{{__('translate.articles')}}</NavLink>
                        <NavLink :href="route('front.projects')" :active="route().current('front.projects')" @click="closeMenu">{{__('translate.projects')}}</NavLink>
                        <NavLink :href="route('front.firms')" :active="route().current('front.firms')" @click="closeMenu">{{__('translate.firms')}}</NavLink>
                        <Multiselect
                            v-model="lang"
                            :options="sortLangs"
                            label="label"
                            track-by="value"
                            @select="dispatchAction"
                            class="w-full"
                        ></Multiselect>
                    </nav>
                </div>
                <div class="flex-1 bg-black/25" @click="closeMenu"></div>
            </div>
        </transition>

        <!-- Scroll to top -->
        <button v-if="showScrollTop" @click="scrollToTop" class="fixed right-6 bottom-6 bg-violet-900 text-white rounded-full w-12 h-12 flex items-center justify-center shadow-lg hover:bg-violet-800">↑</button>

        <!-- Footer -->
        <footer class="border-t border-gray-200 bg-white dark:bg-gray-950 dark:border-gray-800 w-full relative sm:fixed sm:bottom-0 sm:left-0 sm:right-0">
            <div class="mx-auto max-w-7xl px-6 py-4 lg:px-8">
                <!-- Top: Logo + CTA -->
                <div class="flex flex-col items-center justify-between gap-2 sm:flex-row">
                    <Link :href="route('front')" class="inline-flex items-center gap-3 group">
                        <img src="/images/logoTransparent.png" alt="Company logo" class="h-9 w-auto" />
                        <span class="text-xl font-semibold tracking-tight text-gray-900 group-hover:opacity-90 dark:text-white">
                        Work4You.global
                    </span>
                    </Link>
                    <Link :href="route('front.contact')" class="inline-flex items-center rounded-xl border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-900 shadow-sm transition hover:shadow-md dark:border-gray-800 dark:bg-gray-900 dark:text-gray-100">
                        Get in touch
                    </Link>
                </div>

                <!-- Middle: Grid -->
                <div class="mt-12 grid grid-cols-1 gap-10 sm:grid-cols-2 lg:grid-cols-4">
                    <!-- Column 1 -->
                    <div>
                        <h3 class="text-sm font-semibold text-gray-900 dark:text-gray-100">Product</h3>
                        <ul class="mt-4 space-y-2 text-sm">
                            <li><a href="/features" class="text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-gray-200">Features</a></li>
                            <li><a href="/pricing" class="text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-gray-200">Pricing</a></li>
                            <li><a href="/integrations" class="text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-gray-200">Integrations</a></li>
                            <li><a href="/changelog" class="text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-gray-200">Changelog</a></li>
                        </ul>
                    </div>

                    <!-- Column 2 -->
                    <div>
                        <h3 class="text-sm font-semibold text-gray-900 dark:text-gray-100">Company</h3>
                        <ul class="mt-4 space-y-2 text-sm">
                            <li><a href="/about" class="text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-gray-200">About</a></li>
                            <li><a href="/careers" class="text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-gray-200">Careers</a></li>
                            <li><a href="/blog" class="text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-gray-200">Blog</a></li>
                            <li><a href="/press" class="text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-gray-200">Press</a></li>
                        </ul>
                    </div>

                    <!-- Column 3 -->
                    <div>
                        <h3 class="text-sm font-semibold text-gray-900 dark:text-gray-100">Resources</h3>
                        <ul class="mt-4 space-y-2 text-sm">
                            <li><a href="/docs" class="text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-gray-200">Docs</a></li>
                            <li><a href="/guides" class="text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-gray-200">Guides</a></li>
                            <li><a href="/status" class="text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-gray-200">System status</a></li>
                            <li><a href="/support" class="text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-gray-200">Support</a></li>
                        </ul>
                    </div>

                    <!-- Column 4: Newsletter -->
                    <div>
                        <h3 class="text-sm font-semibold text-gray-900 dark:text-gray-100">Stay in the loop</h3>
                        <p class="mt-3 text-sm text-gray-600 dark:text-gray-400">Get product updates, articles, and resources.</p>
                        <form action="/newsletter/subscribe" method="post" class="mt-4">
                            <div class="flex rounded-xl border border-gray-300 bg-white p-1 shadow-sm focus-within:ring-2 focus-within:ring-blue-500 dark:border-gray-800 dark:bg-gray-900">
                                <input type="email" name="email" required placeholder="you@example.com" class="w-full rounded-xl bg-transparent px-3 py-2 text-sm text-gray-900 placeholder-gray-400 outline-none dark:text-gray-100" />
                                <button type="submit" class="ml-2 inline-flex items-center rounded-lg bg-blue-600 px-3 py-2 text-sm font-medium text-white transition hover:bg-blue-700">Subscribe</button>
                            </div>
                            <p class="mt-2 text-xs text-gray-500 dark:text-gray-400">We respect your privacy. Unsubscribe anytime.</p>
                        </form>
                    </div>
                </div>

                <!-- Divider -->
                <div class="my-4 h-px w-full bg-gray-200 dark:bg-gray-800"></div>

                <!-- Bottom bar -->
                <div class="flex flex-col items-center justify-between gap-4 sm:flex-row">
                    <p class="text-sm text-gray-500 dark:text-gray-400">
                        © <span x-data x-text="new Date().getFullYear()"></span> Work4You.global. All rights reserved.
                    </p>

                    <div class="flex items-center gap-5">
                        <Link :href="route('front.privacy')" class="text-sm text-gray-500 hover:text-gray-900 dark:text-gray-400 dark:hover:text-gray-200">Privacy</Link>
                        <Link :href="route('front.terms')" class="text-sm text-gray-500 hover:text-gray-900 dark:text-gray-400 dark:hover:text-gray-200">Terms</Link>
                        <div class="h-4 w-px bg-gray-200 dark:bg-gray-800"></div>
                        <div class="flex items-center gap-3">
                            <!-- Socials -->
                            <a href="https://facebook.com" aria-label="Facebook" class="text-gray-500 transition hover:text-gray-900 dark:text-gray-400 dark:hover:text-gray-200">
                                <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24"><path d="M22 12.06C22 6.476 17.523 2 11.94 2 6.356 2 1.88 6.476 1.88 12.06c0 4.995 3.657 9.136 8.437 9.94v-7.03H7.898V12.06h2.42V9.797c0-2.39 1.423-3.708 3.6-3.708 1.042 0 2.134.186 2.134.186v2.35h-1.202c-1.184 0-1.554.736-1.554 1.49v1.944h2.645l-.423 2.909h-2.222V22c4.78-.804 8.437-4.945 8.437-9.94Z"/></svg>
                            </a>
                            <a href="https://twitter.com" aria-label="X/Twitter" class="text-gray-500 transition hover:text-gray-900 dark:text-gray-400 dark:hover:text-gray-200">
                                <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24"><path d="M17.166 3H20l-6.99 7.98L21.5 21h-5.74l-4.49-4.98L6.03 21H3.19l7.53-8.6L2.5 3h5.8l4.06 4.51L17.17 3Z"/></svg>
                            </a>
                            <a href="https://linkedin.com" aria-label="LinkedIn" class="text-gray-500 transition hover:text-gray-900 dark:text-gray-400 dark:hover:text-gray-200">
                                <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24"><path d="M4.98 3.5C4.98 4.88 3.86 6 2.5 6S0 4.88 0 3.5 1.12 1 2.5 1s2.48 1.12 2.48 2.5zM.5 8h4V24h-4V8zM8.5 8h3.8v2.2h.05c.53-1 1.83-2.2 3.77-2.2 4.03 0 4.77 2.65 4.77 6.1V24h-4v-7.1c0-1.7-.03-3.9-2.38-3.9-2.38 0-2.75 1.86-2.75 3.77V24h-4V8z"/></svg>
                            </a>
                            <a href="https://instagram.com" aria-label="Instagram" class="text-gray-500 transition hover:text-gray-900 dark:text-gray-400 dark:hover:text-gray-200">
                                <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2.2c3.2 0 3.585.012 4.85.07 1.17.055 1.97.24 2.43.4a4.9 4.9 0 0 1 1.77 1.15 4.9 4.9 0 0 1 1.15 1.77c.16.46.345 1.26.4 2.43.058 1.265.07 1.65.07 4.85s-.012 3.585-.07 4.85c-.055 1.17-.24 1.97-.4 2.43a4.9 4.9 0 0 1-1.15 1.77 4.9 4.9 0 0 1-1.77 1.15c-.46.16-1.26.345-2.43.4-1.265.058-1.65.07-4.85.07s-3.585-.012-4.85-.07c-1.17-.055-1.97-.24-2.43-.4a4.9 4.9 0 0 1-1.77-1.15 4.9 4.9 0 0 1-1.15-1.77c-.16-.46-.345-1.26-.4-2.43C2.212 15.585 2.2 15.2 2.2 12s.012-3.585.07-4.85c.055-1.17.24-1.97.4-2.43A4.9 4.9 0 0 1 3.82 2.95a4.9 4.9 0 0 1 1.77-1.15c.46-.16 1.26-.345 2.43-.4C8.285 1.212 8.67 1.2 11.87 1.2h.26Zm0 1.8c-3.15 0-3.52.012-4.76.07-.98.046-1.51.21-1.86.35-.47.18-.8.39-1.15.74-.35.35-.56.68-.74 1.15-.14.35-.304.88-.35 1.86-.058 1.24-.07 1.61-.07 4.76s.012 3.52.07 4.76c.046.98.21 1.51.35 1.86.18.47.39.8.74 1.15.35.35.68.56 1.15.74.35.14.88.304 1.86.35 1.24.058 1.61.07 4.76.07s3.52-.012 4.76-.07c.98-.046 1.51-.21 1.86-.35.47-.18.8-.39 1.15-.74.35-.35.56-.68.74-1.15.14-.35.304-.88.35-1.86.058-1.24.07-1.61.07-4.76s-.012-3.52-.07-4.76c-.046-.98-.21-1.51-.35-1.86a3.1 3.1 0 0 0-.74-1.15 3.1 3.1 0 0 0-1.15-.74c-.35-.14-.88-.304-1.86-.35-1.24-.058-1.61-.07-4.76-.07Zm0 3.5a6.3 6.3 0 1 1 0 12.6 6.3 6.3 0 0 1 0-12.6Zm0 2a4.3 4.3 0 1 0 0 8.6 4.3 4.3 0 0 0 0-8.6Zm6.65-2.55a1.47 1.47 0 1 1-2.94 0 1.47 1.47 0 0 1 2.94 0Z"/></svg>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Back to top -->
                <button type="button" aria-label="Back to top" @click="scrollToTop"
                        class="group absolute right-6 -top-5 inline-flex items-center gap-2 rounded-full border border-gray-200 bg-white px-3 py-1.5 text-xs font-medium text-gray-700 shadow-sm hover:shadow-md dark:border-gray-800 dark:bg-gray-900 dark:text-gray-200">
                    <span>Top</span>
                    <svg class="h-4 w-4 transition group-hover:-translate-y-0.5" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m5 15 7-7 7 7"/>
                    </svg>
                </button>
            </div>
        </footer>
    </div>
</template>

<style src="vue-multiselect/dist/vue-multiselect.css"></style>

<style lang="scss">
.multiselect__tag { background: #00a0e3 !important; }
.multiselect__option--highlight { background: #00a0e3 !important; outline: none; color: white; }
.multiselect__option--highlight:after { content: attr(data-select); background: #00a0e3 !important; color: white; }
.multiselect__option--selected { background: #00A0E3B2 !important; color: #35495E; font-weight: bold; }
.multiselect__option--selected.multiselect__option--highlight { background: #00A0E3B2 !important; color: #fff; }
.multiselect__option--selected.multiselect__option--highlight:after { background: #00A0E3B2 !important; content: attr(data-deselect); color: white !important; }
.multiselect__option--selected:after { content: attr(data-selected); color: #00A0E3B2; background: transparent !important; }
.slide-enter-active, .slide-leave-active { transition: transform 0.3s ease-in-out; }
.slide-enter-from { transform: translateX(-100%); }
.slide-enter-to { transform: translateX(0); }
.slide-leave-from { transform: translateX(0); }
.slide-leave-to { transform: translateX(-100%); }
</style>
