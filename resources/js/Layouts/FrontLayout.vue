<script setup>
import {Head, Link, router, usePage} from '@inertiajs/vue3';
import Banner from '@/Components/Banner.vue';
import ApplicationMark from "@/Components/ApplicationMark.vue";
import NavLink from "@/Components/NavLink.vue";
import {computed, ref} from "vue";
import Multiselect from 'vue-multiselect'
const props = defineProps({
    title: String,
    image: String,
    keywords: String,
    description: String,
});
const changeLang = computed(() => {
    return usePage().props.languages && usePage().props.languages.filter(el=>el.value == usePage().props.language)
});
const lang = ref(changeLang);

const dispatchAction = (data) => {
    router.post(route('front.language.store', { language: data.value }));
}
const resetLang = (data) => {
    router.post(route('front.language.store', { language: data }));
}

const sortLangs = computed(() => {
    return usePage().props.languages.sort(function (a, b) {
        if (a.label < b.label) {
            return -1;
        }
        if (a.label > b.label) {
            return 1;
        }
        return 0;
    });
})
</script>

<template>
    <div>
        <Head>
            <meta property="og:title" :content="props.title + ' - ' + usePage().props.pageName" />
            <meta property="og:site_name" :content="usePage().props.pageUrl" />
            <meta property="og:url" :content="usePage().props.pageUrl" />
            <meta property="og:description" :content="props.description" />
            <meta property="og:type" content="website" />
            <meta property="og:image" :content="props.image" />
            <meta property="og:locale" :content="usePage().props.language" />
            <title>{{props.title}}</title>
            <meta name=keywords :content="props.keywords" />
            <meta name=description :content="props.description" />
        </Head>
        <Banner />
        <div class="bg-gray-50 text-black/50 dark:bg-black dark:text-white/50">
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
                                {{__('translate.articles')}}
                            </NavLink>
                            <NavLink :href="route('front.projects')" :active="route().current('front.projects')">
                                {{__('translate.projects')}}
                            </NavLink>
                        </div>

                        <!--                        LANGS-->
                        <nav v-if="$page.props.canLogin" class="mx-3 flex flex-1 justify-end">
                        <div class="-mx-3 flex w-full lg:w-2/4 justify-end pr-10">
<!--                                <select name="language" id="language" @change="router.post(route('front.language.store', { language: $event.target.value }))" class="border-none focus:ring-0 pr-10 bg-transparent">-->
<!--                                    <option :value="language.value" v-for="language in sortLangs" :key="language.value" :selected="language.value === $page.props.language">-->
<!--                                        {{ language.label }}-->
<!--                                    </option>-->
<!--                                </select>-->
                                <multiselect
                                    :selectLabel="__('translate.selectLabel')"
                                    :selectedLabel="__('translate.selectedLabel')"
                                    :deselectLabel="__('translate.deselectLabel')"
                                    :noOptions="__('translate.noOptions')"
                                    :noResult="__('translate.noResult')"
                                    track-by="value"
                                    v-model="lang"
                                    @select="dispatchAction"
                                    label="label"
                                    :placeholder="__('translate.placeholder')"
                                    :options="sortLangs">
                                    <template #noResult>
                                        <span>{{__('translate.noOptions')}}</span>
                                    </template>
                                    <template #noOptions>
                                        <span>{{__('translate.noResult')}}</span>
                                    </template>
                                </multiselect>
                        </div>
                            <button v-if="usePage().props.currentCountry != usePage().props.language" @click="resetLang(usePage().props.currentCountry)" class="underline">{{usePage().props.currentCountry}}</button>
                            <Link
                                v-if="$page.props.auth.user"
                                :href="route('dashboard')"
                                class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                            >
                                {{__('translate.dashboard')}}
                            </Link>

                            <template v-else>
                                <Link
                                    :href="route('login')"
                                    class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                                >
                                    {{__('translate.login')}}
                                </Link>

                                <Link
                                    v-if="$page.props.canRegister"
                                    :href="route('register')"
                                    class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                                >
                                    {{__('translate.register')}}
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
<style src="vue-multiselect/dist/vue-multiselect.css"></style>
<style lang="scss">

.multiselect__tag{
    background: #00a0e3 !important;
}
.multiselect__option--highlight {
    background: #00a0e3 !important;
    outline: none;
    color: white;
}

.multiselect__option--highlight:after {
    content: attr(data-select);
    background: #00a0e3 !important;
    color: white;
}

.multiselect__option--selected {
    background: #00A0E3B2 !important;
    color: #35495E;
    font-weight: bold;
}

.multiselect__option--selected.multiselect__option--highlight {
    background: #00A0E3B2 !important;
    color: #fff;
}

.multiselect__option--selected.multiselect__option--highlight:after {
    background: #00A0E3B2 !important;
    content: attr(data-deselect);
    color: white !important;
}

.multiselect__option--selected:after {
    content: attr(data-selected);
    color: #00A0E3B2;
    background: transparent !important;
}
</style>
