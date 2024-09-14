<script setup>
import { Head, Link, router } from '@inertiajs/vue3';
import Banner from '@/Components/Banner.vue';
import ApplicationMark from "@/Components/ApplicationMark.vue";
import NavLink from "@/Components/NavLink.vue";

defineProps({
    title: String,
});

</script>

<template>
    <div>
        <Head :title="title" />
        <Banner />
        <div class="bg-gray-50 text-black/50 dark:bg-black dark:text-white/50">
            <img id="background" class="absolute -left-20 top-0 max-w-[877px]" src="https://laravel.com/assets/img/welcome/background.svg" />
            <div class="relative min-h-screen flex flex-col items-center selection:bg-[#FF2D20] selection:text-white">
                <div class="relative w-full max-w-2xl px-6 lg:max-w-7xl">
                    <header class="flex items-center mt-4">
                        <div class="shrink-0 flex items-center">
                            <Link :href="route('dashboard')">
                                <ApplicationMark class="block h-12 w-auto" />
                            </Link>
                        </div>
                        <!-- Navigation Links -->
                        <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
                            <NavLink :href="route('front.articles')" :active="route().current('front.articles')">
                                {{__('auth.articles')}}
                            </NavLink>
                        </div>

                        <!--                        LANGS-->
                        <nav v-if="$page.props.canLogin" class="-mx-3 flex flex-1 justify-end">
                        <div class="-mx-3 flex flex-1 justify-end">
                                <select name="language" id="language" @change="router.post(route('front.language.store', { language: $event.target.value }))" class="border-none focus:ring-0 pr-10 bg-transparent">
                                    <option :value="language.value" v-for="language in $page.props.languages" :key="language.value" :selected="language.value === $page.props.language">
                                        {{ language.label }}
                                    </option>
                                </select>
                        </div>
                            <Link
                                v-if="$page.props.auth.user"
                                :href="route('dashboard')"
                                class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                            >
                                {{__('auth.dashboard')}}
                            </Link>

                            <template v-else>
                                <Link
                                    :href="route('login')"
                                    class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                                >
                                    {{__('auth.login')}}
                                </Link>

                                <Link
                                    v-if="$page.props.canRegister"
                                    :href="route('register')"
                                    class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                                >
                                    {{__('auth.register')}}
                                </Link>
                            </template>
                        </nav>
                    </header>
                    <main>
                        <slot />
                    </main>
                </div>
            </div>
        </div>
    </div>
</template>
