<script setup>
import {computed, onMounted, onUnmounted, ref} from 'vue';
import {Head, Link, router, usePage} from '@inertiajs/vue3';
import ApplicationMark from '@/Components/ApplicationMark.vue';
import Banner from '@/Components/Banner.vue';
import Dropdown from '@/Components/Dropdown.vue';
import DropdownLink from '@/Components/DropdownLink.vue';
import NavLink from '@/Components/NavLink.vue';
import ResponsiveNavLink from '@/Components/ResponsiveNavLink.vue';
import {usePermission} from "@/Composables/usePermission";
import NotificationBell from "@/Components/NotificationBell.vue";
import { Dialog, DialogPanel, DialogTitle, TransitionRoot, TransitionChild } from '@headlessui/vue'

const {hasRole} = usePermission();

defineProps({
    title: String,
});
const open = ref(false)

const showingNavigationDropdown = ref(false);
const currentUser = computed(() => usePage().props.auth.user);

// Pobranie liczby nieprzeczytanych powiadomień bezpośrednio z Inertia props
const notifications = computed(() => usePage().props.unreadNotifications || 0);
const switchToTeam = (team) => {
    router.put(route('current-team.update'), {
        team_id: team.id,
    }, {
        preserveState: false,
    });
};
const countCart = computed(() =>{
    return Object.keys(usePage().props.cart).length;
});

const countTotal = computed(() =>{
    let items = Object.values(usePage().props.cart);
    return items.reduce((acc, curr) => acc + curr.subtotal, 0);
});
let currency  = computed(()=>{
    return usePage().props.auth.user?.firm?.currency;
});

const logout = () => {
    router.post(route('logout'));
};


onMounted(() => {
    Echo.private(`App.Models.User.${currentUser.value.id}`)
        .notification((notification)=>{
            // Odświeżenie strony aby zaktualizować licznik powiadomień
            router.reload({ only: ['unreadNotifications'] });
        });
});
onUnmounted(()=>{
    Echo.leave(`App.Models.User.${currentUser.value?.id}`);
});

</script>

<template>
    <div>
        <Head :title="title" />
        <Banner />
        <div class="min-h-screen bg-gray-100">
            <nav class="bg-white border-b border-gray-100">
                <!-- Primary Navigation Menu -->
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <div class="flex justify-between h-16">
                        <div class="flex">
                            <!-- Logo -->
                            <div class="shrink-0 flex items-center">
                                <Link :href="route('dashboard')">
                                    <ApplicationMark class="block h-12 w-auto" />
                                </Link>
                            </div>

                            <!-- Navigation Links -->
                            <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
                                <NavLink :href="route('dashboard')" :active="route().current('dashboard')">
                                    {{__('translate.dashboard')}}
                                </NavLink>
                            </div>
                            <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex" v-if="hasRole('worker')">
                                <NavLink :href="route('worker.myCv')" :active="route().current('worker.myCv')">
                                    Moje CV
                                </NavLink>
                            </div>
                            <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex" v-if="hasRole('worker')">
                                <NavLink :href="route('worker.aplications')" :active="route().current('worker.aplications')">
                                    {{__('translate.aplications')}}
                                </NavLink>
                            </div>
                            <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex" v-if="hasRole('worker')">
                                <NavLink :href="route('profile.show')" :active="route().current('profile.show')">
                                    Moj profil
                                </NavLink>
                            </div>
                            <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex" v-if="hasRole('firm')">
                                <NavLink :href="route('recruits.index')" :active="route().current('recruits.index')">
                                    {{__('translate.recruits')}}
                                </NavLink>
                            </div>
                            <div class="hidden sm:-my-px sm:ms-10 sm:flex items-center" v-if="hasRole('firm')">
                                <Dropdown align="right" width="48">
                                    <template #trigger>
                                        <button class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none focus:bg-gray-50 active:bg-gray-50 transition ease-in-out duration-150">
                                            {{__('translate.aplications')}}
                                            <svg class="ms-2 -me-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 15L12 18.75 15.75 15m-7.5-6L12 5.25 15.75 9" />
                                            </svg>
                                        </button>
                                    </template>
                                    <template #content>
                                        <div class="w-48">
                                            <DropdownLink :href="route('aplications.index')">
                                                {{__('translate.aplications')}}
                                            </DropdownLink>
                                            <DropdownLink :href="route('candidate-questions.index')">
                                                {{__('translate.listQuestions')}}
                                            </DropdownLink>
                                            <DropdownLink :href="route('external-companies.index')">
                                                {{__('translate.externalCompanies')}}
                                            </DropdownLink>
                                            <DropdownLink :href="route('tags.index')">
                                                {{__('translate.tags')}}
                                            </DropdownLink>
                                            <DropdownLink :href="route('candidates.index')">
                                                {{__('translate.candidates')}}
                                            </DropdownLink>
                                        </div>
                                    </template>
                                </Dropdown>
                            </div>
                            <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex" v-if="hasRole('firm')">
                                <NavLink :href="route('projects.index')" :active="route().current('projects.index')">
                                    {{__('translate.projects')}}
                                </NavLink>
                            </div>
                            <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex" v-if="hasRole('recruit') && !hasRole('firm')">
                                <NavLink :href="route('project-recruits.index')" :active="route().current('project-recruits.index')">
                                    {{__('translate.projects')}}
                                </NavLink>
                            </div>
                            <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex" v-if="hasRole('recruit') && !hasRole('firm')">
                                <NavLink :href="route('project-aplications-recruits.index')" :active="route().current('project-aplications-recruits.index')">
                                    {{__('translate.aplications')}}
                                </NavLink>
                            </div>
                            <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex" v-if="hasRole('firm')">
                                <NavLink :href="route('statistics.index')" :active="route().current('statistics.index')">
                                    {{__('translate.statistics')}}
                                </NavLink>
                            </div>

                            <div class="hidden sm:-my-px sm:ms-10 sm:flex items-center" v-if="hasRole('firm')">
                                <Dropdown align="right" width="48">
                                    <template #trigger>
                                        <button class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none focus:bg-gray-50 active:bg-gray-50 transition ease-in-out duration-150">
                                            {{__('translate.invoices')}}
                                            <svg class="ms-2 -me-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 15L12 18.75 15.75 15m-7.5-6L12 5.25 15.75 9" />
                                            </svg>
                                        </button>
                                    </template>
                                    <template #content>
                                        <div class="w-48">
                                            <DropdownLink :href="route('invoices.index')">
                                                {{__('translate.invoices')}}
                                            </DropdownLink>
                                            <DropdownLink :href="route('orders.index')">
                                                {{__('translate.orders')}}
                                            </DropdownLink>
                                        </div>
                                    </template>
                                </Dropdown>
                            </div>
                            <div class="hidden sm:-my-px sm:ms-10 sm:flex items-center" v-if="hasRole('firm')">
                                <Dropdown align="right" width="48">
                                    <template #trigger>
                                        <button class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none focus:bg-gray-50 active:bg-gray-50 transition ease-in-out duration-150">
                                            {{__('translate.extra')}}
                                            <svg class="ms-2 -me-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 15L12 18.75 15.75 15m-7.5-6L12 5.25 15.75 9" />
                                            </svg>
                                        </button>
                                    </template>
                                    <template #content>
                                        <div class="w-48">
                                            <div class="block px-4 py-2 text-xs text-gray-400">
                                                {{__('translate.extraPackages')}}
                                            </div>
                                            <DropdownLink :href="route('firm.p50')">
                                                {{__('translate.p50')}}
                                            </DropdownLink>
                                            <DropdownLink :href="route('articles.index')">
                                                {{__('translate.articles')}}
                                            </DropdownLink>
                                            <DropdownLink :href="route('firm.banners')">
                                                {{__('translate.banners')}}
                                            </DropdownLink>
                                            <div class="block px-4 py-2 text-xs text-gray-400">
                                                {{__('translate.cartAndPoints')}}
                                            </div>
                                            <DropdownLink :href="route('points.index')">
                                                {{__('translate.points')}}
                                            </DropdownLink>
                                            <DropdownLink :href="route('firm.premium-certificate.show')" v-if="hasRole('firm')">
                                                {{__('translate.premium_certificate')}}
                                            </DropdownLink>
                                            <DropdownLink :href="route('firm.premium-certificate.list')" v-if="hasRole('firm')">
                                                {{__('premium.history_link')}}
                                            </DropdownLink>
                                            <DropdownLink :href="route('buy.index')" v-if="hasRole('firm')">
                                                {{__('translate.buy')}}
                                            </DropdownLink>
                                        </div>
                                    </template>
                                </Dropdown>
                            </div>
                            <!--Admin-->
                            <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex" v-if="hasRole('admin')">
                                <NavLink :href="route('admin.questions-accepts.index')" :active="route().current('admin.questions-accepts.index')">
                                    {{__('translate.admin-questions')}}
                                </NavLink>
                            </div>
                            <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex" v-if="hasRole('admin')">
                                <NavLink :href="route('admin.aplicationsA.index')" :active="route().current('admin.aplicationsA.index')">
                                    {{__('translate.aplications')}}
                                </NavLink>
                            </div>
                            <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex" v-if="hasRole('admin')">
                                <NavLink :href="route('admin.partners.index')" :active="route().current('admin.partners.index')">
                                    {{__('partners.partners')}}
                                </NavLink>
                            </div>
                            <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex" v-if="hasRole('admin')">
                                <NavLink :href="route('admin.foundations.index')" :active="route().current('admin.foundations.index')">
                                    {{__('foundations.foundations')}}
                                </NavLink>
                            </div>
                            <!--Admin-->
                        </div>

                        <div class="hidden sm:flex sm:items-center sm:ms-6">
                            <div class="ms-3 relative">
                                <!-- Teams Dropdown -->
                                <Dropdown v-if="$page.props.jetstream.hasTeamFeatures" align="right" width="60">
                                    <template #trigger>
                                        <span class="inline-flex rounded-md">
                                            <button type="button" class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none focus:bg-gray-50 active:bg-gray-50 transition ease-in-out duration-150">
                                                {{ $page.props.auth.user.current_team.name }}

                                                <svg class="ms-2 -me-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 15L12 18.75 15.75 15m-7.5-6L12 5.25 15.75 9" />
                                                </svg>
                                            </button>
                                        </span>
                                    </template>

                                    <template #content>
                                        <div class="w-60">
                                            <!-- Team Management -->
                                            <div class="block px-4 py-2 text-xs text-gray-400">
                                                Manage Team
                                            </div>

                                            <!-- Team Settings -->
                                            <DropdownLink :href="route('teams.show', $page.props.auth.user.current_team)">
                                                Team Settings
                                            </DropdownLink>

                                            <DropdownLink v-if="$page.props.jetstream.canCreateTeams" :href="route('teams.create')">
                                                Create New Team
                                            </DropdownLink>

                                            <!-- Team Switcher -->
                                            <template v-if="$page.props.auth.user.all_teams.length > 1">
                                                <div class="border-t border-gray-200" />

                                                <div class="block px-4 py-2 text-xs text-gray-400">
                                                    Switch Teams
                                                </div>

                                                <template v-for="team in $page.props.auth.user.all_teams" :key="team.id">
                                                    <form @submit.prevent="switchToTeam(team)">
                                                        <DropdownLink as="button">
                                                            <div class="flex items-center">
                                                                <svg v-if="team.id == $page.props.auth.user.current_team_id" class="me-2 h-5 w-5 text-green-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                                                </svg>

                                                                <div>{{ team.name }}</div>
                                                            </div>
                                                        </DropdownLink>
                                                    </form>
                                                </template>
                                            </template>
                                        </div>
                                    </template>
                                </Dropdown>
<!--                                <Link :href="route('firm.notifications')" class="ml-3 flex isolate relative flex items-center pl-6 ml-auto">-->
<!--                                </Link>-->
                                <notification-bell :count="notifications" />
                            </div>
                            <!--                            Cart-->
<!--                            Cart-->
                            <!-- Settings Dropdown -->
                            <div class="ms-3 relative">
                                <Dropdown align="right" width="48">
                                    <template #trigger>
                                        <button v-if="$page.props.jetstream.managesProfilePhotos" class="flex text-sm border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300 transition">
                                            <img class="h-8 w-8 rounded-full object-cover" :src="$page.props.auth.user.profile_photo_url" :alt="$page.props.auth.user.name">
                                        </button>

                                        <span v-else class="inline-flex rounded-md">
                                            <button type="button" class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none focus:bg-gray-50 active:bg-gray-50 transition ease-in-out duration-150">
                                                {{ $page.props.auth.user.name }}

                                                <svg class="ms-2 -me-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                                                </svg>
                                            </button>
                                        </span>
                                    </template>

                                    <template #content>
                                        <!-- Account Management -->
                                        <div class="block px-4 py-2 text-xs text-gray-400">
                                            {{__('translate.ManageAccount')}}
                                        </div>

                                        <DropdownLink :href="route('profile.show')">
                                            {{__('translate.Profile')}}
                                        </DropdownLink>
                                        <DropdownLink v-if="$page.props.jetstream.hasApiFeatures" :href="route('api-tokens.index')">
                                            API Tokens
                                        </DropdownLink>

                                        <div class="border-t border-gray-200" />
                                        <DropdownLink :href="route('front')">
                                            {{__('translate.frontPage')}}
                                        </DropdownLink>
                                        <DropdownLink :href="route('worker.myCv')" v-if="hasRole('worker')">
                                            {{__('translate.myCv')}}
                                        </DropdownLink>
                                        <DropdownLink :href="route('worker.aplications')" v-if="!hasRole('recruit')">
                                            {{__('translate.aplications')}}
                                        </DropdownLink>
                                        <DropdownLink :href="route('project-aplications-recruits.index')" v-if="hasRole('recruit')">
                                            {{__('translate.aplications')}}
                                        </DropdownLink>
                                        <div class="border-t border-gray-200" />
                                        <!-- Authentication -->
                                        <form @submit.prevent="logout">
                                            <DropdownLink as="button">
                                                {{__('translate.logout')}}
                                            </DropdownLink>
                                        </form>
                                    </template>
                                </Dropdown>
                            </div>
                        </div>

                        <!-- Hamburger -->
                        <div class="-me-2 flex items-center sm:hidden">
                            <button class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out" @click="showingNavigationDropdown = ! showingNavigationDropdown">
                                <svg
                                    class="h-6 w-6"
                                    stroke="currentColor"
                                    fill="none"
                                    viewBox="0 0 24 24"
                                >
                                    <path
                                        :class="{'hidden': showingNavigationDropdown, 'inline-flex': ! showingNavigationDropdown }"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        stroke-width="2"
                                        d="M4 6h16M4 12h16M4 18h16"
                                    />
                                    <path
                                        :class="{'hidden': ! showingNavigationDropdown, 'inline-flex': showingNavigationDropdown }"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        stroke-width="2"
                                        d="M6 18L18 6M6 6l12 12"
                                    />
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Responsive Navigation Menu -->
                <div :class="{'block': showingNavigationDropdown, 'hidden': ! showingNavigationDropdown}" class="sm:hidden">
                    <div class="pt-2 pb-3 space-y-1">
                        <ResponsiveNavLink :href="route('dashboard')" :active="route().current('dashboard')">
                            {{__('translate.dashboard')}}
                        </ResponsiveNavLink>
                        <ResponsiveNavLink :href="route('worker.myCv')" :active="route().current('worker.myCv')" v-if="hasRole('worker')">
                            {{__('translate.myCv')}}
                        </ResponsiveNavLink>
                        <ResponsiveNavLink :href="route('worker.aplications')" :active="route().current('worker.aplications')" v-if="hasRole('worker')">
                            {{__('translate.aplications')}}
                        </ResponsiveNavLink>
                        <ResponsiveNavLink :href="route('recruits.index')" :active="route().current('recruits.index')" v-if="hasRole('firm')">
                            {{__('translate.recruits')}}
                        </ResponsiveNavLink>
                        <ResponsiveNavLink :href="route('aplications.index')" :active="route().current('aplications.index')" v-if="hasRole('firm')">
                            {{__('translate.aplications')}}
                        </ResponsiveNavLink>
                        <ResponsiveNavLink :href="route('projects.index')" :active="route().current('projects.index')" v-if="hasRole('firm')">
                            {{__('translate.projects')}}
                        </ResponsiveNavLink>
                        <ResponsiveNavLink :href="route('statistics.index')" :active="route().current('statistics.index')" v-if="hasRole('firm')">
                            {{__('translate.statistics')}}
                        </ResponsiveNavLink>
                        <ResponsiveNavLink :href="route('invoices.index')" :active="route().current('invoices.index')" v-if="hasRole('firm')">
                            {{__('translate.invoices')}}
                        </ResponsiveNavLink>
                        <ResponsiveNavLink :href="route('orders.index')" :active="route().current('orders.index')" v-if="hasRole('firm')">
                            {{__('translate.orders')}}
                        </ResponsiveNavLink>
                        <ResponsiveNavLink :href="route('buy.index')" :active="route().current('buy.index')" v-if="hasRole('firm')">
                            {{__('translate.buy')}}
                        </ResponsiveNavLink>
                        <ResponsiveNavLink :href="route('articles.index')" :active="route().current('articles.index')" v-if="hasRole('firm')">
                            {{__('translate.articles')}}
                        </ResponsiveNavLink>
                        <!--Admin-->
                        <ResponsiveNavLink :href="route('admin.questions-accepts.index')" :active="route().current('admin.questions-accepts.index')" v-if="hasRole('admin')">
                            {{__('translate.admin-questions')}}
                        </ResponsiveNavLink>
                        <ResponsiveNavLink :href="route('admin.aplicationsA.index')" :active="route().current('admin.aplicationsA.index')" v-if="hasRole('admin')">
                            {{__('translate.aplications')}}
                        </ResponsiveNavLink>
                        <ResponsiveNavLink :href="route('admin.partners.index')" :active="route().current('admin.partners.index')" v-if="hasRole('admin')">
                            {{__('partners.partners')}}
                        </ResponsiveNavLink>
                        <notification-bell :count="notifications" />
                    </div>
                    <!-- Responsive Settings Options -->
                    <div class="pt-4 pb-1 border-t border-gray-200">
                        <div class="flex items-center px-4">
                            <div v-if="$page.props.jetstream.managesProfilePhotos" class="shrink-0 me-3">
                                <img class="h-10 w-10 rounded-full object-cover" :src="$page.props.auth.user.profile_photo_url" :alt="$page.props.auth.user.name">
                            </div>
                            <div>
                                <div class="font-medium text-base text-gray-800">
                                    {{ $page.props.auth.user.name }}
                                </div>
                                <div class="font-medium text-sm text-gray-500">
                                    {{ $page.props.auth.user.email }}
                                </div>
                            </div>
                        </div>

                        <div class="mt-3 space-y-1">
                            <ResponsiveNavLink :href="route('project-recruits.index')" :active="route().current('project-recruits.index')" v-if="hasRole('recruit') && !hasRole('firm')">
                                {{__('translate.projects')}}
                            </ResponsiveNavLink>
                            <ResponsiveNavLink :href="route('project-aplications-recruits.index')" :active="route().current('project-aplications-recruits.index')" v-if="hasRole('recruit') && !hasRole('firm')">
                                {{__('translate.aplications')}}
                            </ResponsiveNavLink>
                            <ResponsiveNavLink :href="route('candidates.index')" :active="route().current('candidates.index')" v-if="hasRole('recruit') && !hasRole('firm')">
                                {{__('translate.candidates')}}
                            </ResponsiveNavLink>
                            <ResponsiveNavLink :href="route('tags.index')" :active="route().current('tags.index')" v-if="hasRole('recruit')">
                                {{__('translate.tags')}}
                            </ResponsiveNavLink>
                            <ResponsiveNavLink :href="route('statistics.index')" :active="route().current('statistics.index')" v-if="hasRole('firm')">
                                {{__('translate.statistics')}}
                            </ResponsiveNavLink>
                            <ResponsiveNavLink :href="route('profile.show')" :active="route().current('profile.show')">
                                {{__('translate.Profile')}}
                            </ResponsiveNavLink>
                            <ResponsiveNavLink v-if="$page.props.jetstream.hasApiFeatures" :href="route('api-tokens.index')" :active="route().current('api-tokens.index')">
                                API Tokens
                            </ResponsiveNavLink>

                            <!-- Authentication -->
                            <form method="POST" @submit.prevent="logout">
                                <ResponsiveNavLink as="button">
                                    {{__('translate.logout')}}
                                </ResponsiveNavLink>
                            </form>

                            <!-- Team Management -->
                            <template v-if="$page.props.jetstream.hasTeamFeatures">
                                <div class="border-t border-gray-200" />

                                <div class="block px-4 py-2 text-xs text-gray-400">
                                    Manage Team
                                </div>

                                <!-- Team Settings -->
                                <ResponsiveNavLink :href="route('teams.show', $page.props.auth.user.current_team)" :active="route().current('teams.show')">
                                    Team Settings
                                </ResponsiveNavLink>

                                <ResponsiveNavLink v-if="$page.props.jetstream.canCreateTeams" :href="route('teams.create')" :active="route().current('teams.create')">
                                    Create New Team
                                </ResponsiveNavLink>

                                <!-- Team Switcher -->
                                <template v-if="$page.props.auth.user.all_teams.length > 1">
                                    <div class="border-t border-gray-200" />

                                    <div class="block px-4 py-2 text-xs text-gray-400">
                                        Switch Teams
                                    </div>

                                    <template v-for="team in $page.props.auth.user.all_teams" :key="team.id">
                                        <form @submit.prevent="switchToTeam(team)">
                                            <ResponsiveNavLink as="button">
                                                <div class="flex items-center">
                                                    <svg v-if="team.id == $page.props.auth.user.current_team_id" class="me-2 h-5 w-5 text-green-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                                    </svg>
                                                    <div>{{ team.name }}</div>
                                                </div>
                                            </ResponsiveNavLink>
                                        </form>
                                    </template>
                                </template>
                            </template>
                        </div>
                    </div>
                </div>
            </nav>

            <!-- Page Heading -->
            <header v-if="$slots.header" class="bg-white shadow">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    <slot name="header" />
                </div>
            </header>

            <!-- Page Content -->
            <main>
                <slot />
            </main>
            <button
                v-if="countCart > 0"
                @click="open = true"
                class="fixed right-4 bottom-4 flex items-center justify-center w-14 h-14 bg-blue-500 text-white rounded-full shadow-lg animate-pulse transition-transform hover:scale-110"
            >
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round"
                          d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                </svg>
                <span class="font-bold">{{ countCart }}</span>
            </button>
            <TransitionRoot as="template" :show="open">
                <Dialog class="relative z-10" @close="open = false">

                    <!-- Overlay -->
                    <TransitionChild
                        as="template"
                        enter="ease-in-out duration-500"
                        enter-from="opacity-0"
                        enter-to="opacity-100"
                        leave="ease-in-out duration-500"
                        leave-from="opacity-100"
                        leave-to="opacity-0"
                    >
                        <div class="fixed inset-0 bg-gray-500/75 transition-opacity" />
                    </TransitionChild>

                    <div class="fixed inset-0 overflow-hidden">
                        <div class="absolute inset-0 overflow-hidden">
                            <div class="pointer-events-none fixed inset-y-0 right-0 flex max-w-full pl-10 sm:pl-16">

                                <!-- Panel -->
                                <TransitionChild
                                    as="template"
                                    enter="transform transition ease-in-out duration-500 sm:duration-700"
                                    enter-from="translate-x-full"
                                    enter-to="translate-x-0"
                                    leave="transform transition ease-in-out duration-500 sm:duration-700"
                                    leave-from="translate-x-0"
                                    leave-to="translate-x-full"
                                >
                                    <DialogPanel class="pointer-events-auto w-screen max-w-md">
                                        <div class="flex h-full flex-col overflow-y-auto bg-white shadow-xl">
                                            <div class="flex-1 overflow-y-auto px-4 py-6 sm:px-6">
                                                <div class="flex items-start justify-between">
                                                    <DialogTitle class="text-lg font-medium text-gray-900">                                <span class="mr-2">{{ countTotal }} {{ currency }}</span>
                                                    </DialogTitle>
                                                    <div class="ml-3 flex h-7 items-center">
                                                        <button type="button" class="relative -m-2 p-2 text-gray-400 hover:text-gray-500"
                                                                @click="open = false">
                                                            <span class="absolute -inset-0.5" />
                                                            <span class="sr-only">Close panel</span>
                                                            X
                                                        </button>
                                                    </div>
                                                </div>

                                                <div class="mt-8">
                                                    <ul role="list" class="-my-6 divide-y divide-gray-200">
                                                        <li v-for="item in usePage().props.cart" :key="item.id" class="flex py-6">
                                                            <div class="ml-4 flex flex-1 flex-col">
                                                                <div class="flex justify-between text-base font-medium text-gray-900">
                                                                    <h3>{{ item.name }} ({{ item.price }} {{ currency }})</h3>
                                                                    <p class="ml-4">{{ item.qty }}x</p>
                                                                </div>
                                                                <div class="flex items-center justify-end text-sm mt-1 text-gray-500">
                                                                    {{ item.subtotal }} {{ currency }}
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>

                                            <div class="border-t border-gray-200 px-4 py-6 sm:px-6">
                                                <div class="flex justify-between text-base font-medium text-gray-900">
                                                    <p>{{__('translate.subtotal')}}</p>
                                                    <p>{{ countTotal }} {{ currency }}</p>
                                                </div>
                                                <div class="mt-6">
                                                    <Link :href="route('buy.detail')"
                                                          class="flex items-center justify-center px-2 py-2 mx-auto bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 disabled:opacity-50 transition ease-in-out duration-150 mt-2">
                                                        {{__('translate.cart')}}
                                                    </Link>
                                                </div>
                                            </div>

                                        </div>
                                    </DialogPanel>
                                </TransitionChild>

                            </div>
                        </div>
                    </div>
                </Dialog>
            </TransitionRoot>
        </div>
    </div>
</template>
