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
                            <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex" v-if="hasRole('recruit') && !hasRole('firm')">
                                <NavLink :href="route('candidates.index')" :active="route().current('candidates.index')">
                                    {{__('translate.candidates')}}
                                </NavLink>
                            </div>
                            <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex" v-if="hasRole('recruit') && !hasRole('firm')">
                                <NavLink :href="route('tags.index')" :active="route().current('tags.index')">
                                    {{__('translate.tags')}}
                                </NavLink>
                            </div>
                            <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex" v-if="hasRole('firm')">
                                <NavLink :href="route('statistics.index')" :active="route().current('statistics.index')">
                                    {{__('translate.statistics')}}
                                </NavLink>
                            </div>

                            <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex" v-if="hasRole('firm')">
                                <NavLink :href="route('invoices.index')" :active="route().current('invoices.index')">
                                    {{__('translate.invoices')}}
                                </NavLink>
                            </div>
                            <div class="hidden sm:-my-px sm:ms-10 sm:flex items-center" v-if="hasRole('firm')">
                                <Dropdown align="right" width="48">
                                    <template #trigger>
                                        <button class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none focus:bg-gray-50 active:bg-gray-50 transition ease-in-out duration-150">
                                            {{__('translate.services')}}
                                            <svg class="ms-2 -me-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 15L12 18.75 15.75 15m-7.5-6L12 5.25 15.75 9" />
                                            </svg>
                                        </button>
                                    </template>
                                    <template #content>
                                        <div class="w-48">
                                            <DropdownLink :href="route('firm.p50')">
                                                {{__('translate.p50')}}
                                            </DropdownLink>
                                            <DropdownLink :href="route('articles.index')">
                                                {{__('translate.articles')}}
                                            </DropdownLink>
                                            <DropdownLink :href="route('firm.banners')">
                                                {{__('translate.banners')}}
                                            </DropdownLink>
                                            <DropdownLink :href="route('firm.premium-certificate.show')" v-if="hasRole('firm')">
                                                {{__('translate.premium_certificate')}}
                                            </DropdownLink>
                                            <DropdownLink :href="route('firm.premium-certificate.list')" v-if="hasRole('firm')">
                                                {{__('premium.history_link')}}
                                            </DropdownLink>
                                        </div>
                                    </template>
                                </Dropdown>
                            </div>

                            <div class="hidden sm:-my-px sm:ms-10 sm:flex items-center" v-if="hasRole('firm')">
                                <Dropdown align="right" width="48">
                                    <template #trigger>
                                        <button class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none focus:bg-gray-50 active:bg-gray-50 transition ease-in-out duration-150">
                                            {{__('translate.buy')}}
                                            <svg class="ms-2 -me-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 15L12 18.75 15.75 15m-7.5-6L12 5.25 15.75 9" />
                                            </svg>
                                        </button>
                                    </template>
                                    <template #content>
                                        <div class="w-48">
                                            <DropdownLink :href="route('buy.index')" v-if="hasRole('firm')">
                                                {{__('translate.buy')}}
                                            </DropdownLink>
                                            <DropdownLink :href="route('points.index')">
                                                {{__('translate.points')}}
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
                <Dialog class="relative z-50" @close="open = false">
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
                        <div class="fixed inset-0 bg-gray-900/60 backdrop-blur-sm transition-opacity" />
                    </TransitionChild>

                    <div class="fixed inset-0 overflow-hidden">
                        <div class="absolute inset-0 overflow-hidden">
                            <div class="pointer-events-none fixed inset-y-0 right-0 flex max-w-full pl-10">
                                <!-- Panel -->
                                <TransitionChild
                                    as="template"
                                    enter="transform transition ease-in-out duration-500"
                                    enter-from="translate-x-full"
                                    enter-to="translate-x-0"
                                    leave="transform transition ease-in-out duration-500"
                                    leave-from="translate-x-0"
                                    leave-to="translate-x-full"
                                >
                                    <DialogPanel class="pointer-events-auto w-screen max-w-md">
                                        <div class="flex h-full flex-col bg-white shadow-2xl overflow-hidden rounded-l-3xl">
                                            <!-- Header -->
                                            <div class="px-6 py-6 bg-[#0b2a55] text-white">
                                                <div class="flex items-center justify-between">
                                                    <div class="flex items-center gap-3">
                                                        <div class="p-2 bg-white/10 rounded-xl">
                                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-[#00aaff]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                                                            </svg>
                                                        </div>
                                                        <div>
                                                            <DialogTitle class="text-xl font-black uppercase tracking-tight leading-none">
                                                                {{ __('translate.cart') }}
                                                            </DialogTitle>
                                                            <p class="text-xs text-[#00aaff] font-bold mt-1 uppercase tracking-wider">
                                                                {{ countCart }} {{ countCart === 1 ? __('translate.service') : __('translate.service') }}
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <button type="button"
                                                            class="p-2 text-white/70 hover:text-white hover:bg-white/10 rounded-xl transition-all"
                                                            @click="open = false">
                                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                                                        </svg>
                                                    </button>
                                                </div>
                                            </div>

                                            <!-- Content -->
                                            <div class="flex-1 overflow-y-auto px-6 py-6 custom-scrollbar">
                                                <div v-if="countCart > 0" class="space-y-6">
                                                    <ul role="list" class="divide-y divide-gray-100">
                                                        <li v-for="item in usePage().props.cart" :key="item.id" class="flex py-6 first:pt-0 last:pb-0 transition-all hover:bg-gray-50/50 rounded-2xl -mx-2 px-2">
                                                            <div class="h-16 w-16 flex-shrink-0 overflow-hidden rounded-xl bg-gray-100 flex items-center justify-center border border-gray-200 shadow-sm">
                                                                <img :src="`/images/price/${item.id}-points.svg`"
                                                                     class="h-10 w-10 object-contain opacity-80"
                                                                     @error="(e) => e.target.src = '/images/icons/recruit/organizacja_pracy.svg'" />
                                                            </div>

                                                            <div class="ml-4 flex flex-1 flex-col">
                                                                <div>
                                                                    <div class="flex justify-between items-start">
                                                                        <h3 class="text-base font-bold text-gray-900 leading-tight">
                                                                            {{ item.name }}
                                                                        </h3>
                                                                        <p class="ml-4 text-sm font-black text-[#0b2a55] bg-gray-100 px-2 py-1 rounded-lg">
                                                                            ${{ item.price }}
                                                                        </p>
                                                                    </div>
                                                                    <div class="flex items-center gap-2 mt-1">
                                                                        <span class="text-xs font-bold text-gray-400 uppercase tracking-widest">
                                                                            {{ __('translate.quantity') }}:
                                                                        </span>
                                                                        <span class="text-sm font-black text-gray-600">{{ item.qty }}</span>
                                                                    </div>
                                                                </div>
                                                                <div class="flex flex-1 items-end justify-end">
                                                                    <div class="text-sm font-black text-[#00aaff]">
                                                                        <span class="text-[10px] text-gray-400 uppercase mr-1">{{ __('translate.subtotal') }}</span>
                                                                        ${{ item.subtotal }}
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>

                                                <!-- Empty state -->
                                                <div v-else class="h-full flex flex-col items-center justify-center text-center space-y-4">
                                                    <div class="p-6 bg-gray-50 rounded-full">
                                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-gray-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                                                        </svg>
                                                    </div>
                                                    <div>
                                                        <h3 class="text-lg font-bold text-gray-900 uppercase tracking-tight">{{ __('translate.emptyCart') }}</h3>
                                                        <p class="text-sm text-gray-500 mt-1 max-w-[200px]">{{ __('translate.notFoundProducts') }}</p>
                                                    </div>
                                                    <button @click="open = false" class="text-[#00aaff] font-black text-xs uppercase tracking-widest hover:underline pt-4">
                                                        {{ __('translate.continueBuy') }}
                                                    </button>
                                                </div>
                                            </div>

                                            <!-- Footer -->
                                            <div v-if="countCart > 0" class="border-t border-gray-100 px-6 py-8 bg-gray-50/50">
                                                <div class="flex justify-between items-end mb-6">
                                                    <div class="space-y-1">
                                                        <p class="text-xs font-bold text-gray-400 uppercase tracking-widest">{{ __('translate.summary') }}</p>
                                                        <p class="text-base font-bold text-gray-900 uppercase leading-none">{{ __('translate.subtotal') }}</p>
                                                    </div>
                                                    <p class="text-3xl font-black text-[#0b2a55] tracking-tighter">
                                                        <span class="text-lg font-bold text-[#00aaff] mr-1">$</span>{{ countTotal }}
                                                    </p>
                                                </div>
                                                <Link :href="route('buy.detail')"
                                                      class="group relative flex w-full items-center justify-center gap-3 overflow-hidden rounded-2xl bg-[#0b2a55] px-6 py-4 text-center text-sm font-black uppercase tracking-widest text-white shadow-xl transition-all hover:bg-[#0d3874] active:scale-[0.98]">
                                                    <span class="relative z-10">{{ __('translate.cart') }}</span>
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="relative z-10 h-5 w-5 transition-transform group-hover:translate-x-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                                                    </svg>
                                                    <div class="absolute inset-0 -translate-x-full bg-gradient-to-r from-transparent via-white/10 to-transparent transition-transform duration-500 group-hover:translate-x-full"></div>
                                                </Link>
                                                <button @click="open = false" class="w-full text-center mt-4 text-xs font-bold text-gray-400 uppercase tracking-widest hover:text-gray-600 transition-colors">
                                                    {{ __('translate.continueBuy') }}
                                                </button>
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
