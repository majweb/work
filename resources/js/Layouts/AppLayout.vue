<script setup>
import {computed, onMounted, onUnmounted, ref} from 'vue';
import {Head, Link, router, usePage} from '@inertiajs/vue3';
import ApplicationMark from '@/Components/ApplicationMark.vue';
import Banner from '@/Components/Banner.vue';
import Dropdown from '@/Components/Dropdown.vue';
import DropdownLink from '@/Components/DropdownLink.vue';
import NavLink from '@/Components/NavLink.vue';
import ResponsiveNavLink from '@/Components/ResponsiveNavLink.vue';
import SupportDrawer from '@/Components/SupportDrawer.vue';
import AdminSidebar from '@/Components/Dashboard/AdminSidebar.vue';
import {usePermission} from "@/Composables/usePermission";
import NotificationBell from "@/Components/NotificationBell.vue";
import { Dialog, DialogPanel, DialogTitle, TransitionRoot, TransitionChild } from '@headlessui/vue'

const {hasRole} = usePermission();

defineProps({
    title: String,
});
const open = ref(false)

const showingNavigationDropdown = ref(false);
const showSupportDrawer = ref(false);

const showingAplicationsDropdown = ref(false);
const showingServicesDropdown = ref(false);
const showingBuyDropdown = ref(false);

const currentUser = computed(() => usePage().props.auth.user);

// Pobranie liczby nieprzeczytanych powiadomień bezpośrednio z Inertia props
const notifications = computed(() => usePage().props.unreadNotifications || 0);
const removeFromCart = id => {
    router.delete(route('buy.detailRemoveFromCart', id), { preserveScroll: true })
}

const increment = (id, qty) => {
    router.post(route('buy.detailIncrementCart', [id, qty]), null, { preserveScroll: true });
}
const decrement = (id, qty) => {
    router.post(route('buy.detailDecrementCart', [id, qty]), null, { preserveScroll: true });
}
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
        })
        .listen('.points.updated', () => {
            // Odświeżenie liczby punktów firmy
            router.reload({ only: ['firmLoginPoints'] });
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
        <SupportDrawer :show="showSupportDrawer" @close="showSupportDrawer = false" />

        <!-- Floating Support Button -->
        <div
            v-if="hasRole('firm') || hasRole('worker') || hasRole('recruit')"
            class="fixed bottom-6 right-6 z-50"
        ><button
            @click="showSupportDrawer = true"
            :title="__('translate.support_tickets')"
            class="group flex items-center gap-0 hover:gap-3 p-4 hover:px-6 bg-[#0A2C5C] hover:bg-[#00a0e3] text-white rounded-full shadow-2xl shadow-blue-900/30 transition-all duration-500 hover:scale-110 active:scale-95 border-4 border-white"
        >
            <div class="relative flex-shrink-0">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-6 h-6 transition-transform duration-500 group-hover:rotate-12">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M7.5 8.25h9m-9 3H12m-9.75 1.51c0 1.6 1.123 2.994 2.707 3.227 1.129.166 2.27.293 3.423.379.35.026.67.21.865.501L12 21l2.755-4.133a1.14 1.14 0 0 1 .865-.501 48.172 48.172 0 0 0 3.423-.379c1.584-.233 2.707-1.626 2.707-3.228V6.741c0-1.602-1.123-2.995-2.707-3.228A48.394 48.394 0 0 0 12 3c-2.392 0-4.744.175-7.043.513C3.373 3.746 2.25 5.14 2.25 6.741v6.018Z" />
                </svg>
                <span class="absolute -top-1 -right-1 flex h-3 w-3">
            <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-blue-400 opacity-75"></span>
            <span class="relative inline-flex rounded-full h-3 w-3 bg-blue-500"></span>
        </span>
            </div>
            <span class="max-w-0 overflow-hidden group-hover:max-w-xs transition-all duration-500 ease-in-out whitespace-nowrap text-xs font-black uppercase tracking-[0.2em]">
        {{ __('translate.support_tickets') }}
    </span>
        </button>
        </div>

        <div class="min-h-screen bg-gray-50/50" :class="{'pl-72': hasRole('admin')}">
            <AdminSidebar v-if="hasRole('admin')" />
            <!-- Modern Sticky Header -->
            <nav v-if="!hasRole('admin')" class="sticky top-0 z-40 w-full transition-all duration-300 border-b border-gray-100 bg-white shadow-xl shadow-blue-900/5">
                <!-- Primary Navigation Menu -->
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <div class="flex justify-between h-16">
                        <div class="flex items-center gap-8">
                            <!-- Logo -->
                            <div class="shrink-0 flex items-center transition-transform hover:scale-105">
                                <Link :href="route('front')">
                                    <ApplicationMark class="block h-10 w-auto" />
                                </Link>
                            </div>

                            <!-- Desktop Navigation Links -->
                            <div class="hidden lg:flex items-center lg:gap-1">
                                <NavLink :href="route('dashboard')" :active="route().current('dashboard')" v-if="!hasRole('admin')">
                                    {{__('translate.dashboard')}}
                                </NavLink>

                                <!-- Worker Links -->
                                <template v-if="hasRole('worker')">
                                    <NavLink :href="route('worker.myCv')" :active="route().current('worker.myCv')">
                                        {{__('translate.myCv')}}
                                    </NavLink>
                                    <NavLink :href="route('worker.aplications')" :active="route().current('worker.aplications')">
                                        {{__('translate.aplications')}}
                                    </NavLink>
                                    <NavLink :href="route('profile.show')" :active="route().current('profile.show')">
                                        {{__('translate.Profile')}}
                                    </NavLink>
                                    <NavLink :href="route('front.projects')" :active="route().current('front.projects')">
                                        {{__('translate.projects')}}
                                    </NavLink>
                                </template>

                                <!-- Firm Links -->
                                <template v-if="hasRole('firm')">
                                    <NavLink :href="route('recruits.index')" :active="route().current('recruits.index')">
                                        {{__('translate.recruits')}}
                                    </NavLink>

                                    <div class="relative">
                                        <Dropdown align="left" width="56">
                                            <template #trigger>
                                                <button class="inline-flex items-center px-4 py-2 text-[10px] font-black uppercase tracking-widest text-gray-400 hover:text-[#0A2C5C] hover:bg-gray-50/50 rounded-xl transition duration-150 ease-in-out">
                                                    {{__('translate.aplications')}}
                                                    <svg class="ms-1.5 h-3 w-3 transition-transform duration-200" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5" />
                                                    </svg>
                                                </button>
                                            </template>
                                            <template #content>
                                                <DropdownLink :href="route('aplications.index')">{{__('translate.aplications')}}</DropdownLink>
                                                <DropdownLink :href="route('candidate-questions.index')">{{__('translate.listQuestions')}}</DropdownLink>
                                                <DropdownLink :href="route('external-companies.index')">{{__('translate.externalCompanies')}}</DropdownLink>
                                                <DropdownLink :href="route('tags.index')">{{__('translate.tags')}}</DropdownLink>
                                                <DropdownLink :href="route('candidates.index')">{{__('translate.candidates')}}</DropdownLink>
                                            </template>
                                        </Dropdown>
                                    </div>

                                    <NavLink :href="route('projects.index')" :active="route().current('projects.index')">
                                        {{__('translate.projects')}}
                                    </NavLink>
                                    <NavLink :href="route('statistics.index')" :active="route().current('statistics.index')">
                                        {{__('translate.statistics')}}
                                    </NavLink>
                                    <NavLink :href="route('invoices.index')" :active="route().current('invoices.index')">
                                        {{__('translate.invoices')}}
                                    </NavLink>

                                    <div class="relative">
                                        <Dropdown align="left" width="56">
                                            <template #trigger>
                                                <button class="inline-flex items-center px-4 py-2 text-[10px] font-black uppercase tracking-widest text-gray-400 hover:text-[#0A2C5C] hover:bg-gray-50/50 rounded-xl transition duration-150 ease-in-out">
                                                    {{__('translate.services')}}
                                                    <svg class="ms-1.5 h-3 w-3 transition-transform duration-200" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5" />
                                                    </svg>
                                                </button>
                                            </template>
                                            <template #content>
                                                <DropdownLink :href="route('firm.p50')">{{__('translate.p50')}}</DropdownLink>
                                                <DropdownLink :href="route('articles.index')">{{__('translate.articles')}}</DropdownLink>
                                                <DropdownLink :href="route('firm.banners')">{{__('translate.banners')}}</DropdownLink>
                                                <DropdownLink :href="route('firm.featuredEmployer')">{{__('translate.featured_employer_title')}}</DropdownLink>
                                                <DropdownLink :href="route('firm.socialMedia')">{{__('translate.social_media_title')}}</DropdownLink>
                                                <DropdownLink :href="route('firm.premium-certificate.show')">{{__('translate.premium_certificate')}}</DropdownLink>
                                            </template>
                                        </Dropdown>
                                    </div>

                                    <div class="relative">
                                        <Dropdown align="left" width="48">
                                            <template #trigger>
                                                <button class="inline-flex items-center px-4 py-2 text-[10px] font-black uppercase tracking-widest text-gray-400 hover:text-[#0A2C5C] hover:bg-gray-50/50 rounded-xl transition duration-150 ease-in-out">
                                                    {{__('translate.buy')}}
                                                    <svg class="ms-1.5 h-3 w-3 transition-transform duration-200" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5" />
                                                    </svg>
                                                </button>
                                            </template>
                                            <template #content>
                                                <DropdownLink :href="route('buy.index')">{{__('translate.buy')}}</DropdownLink>
                                                <DropdownLink :href="route('points.index')">{{__('translate.points')}}</DropdownLink>
                                            </template>
                                        </Dropdown>
                                    </div>
                                </template>

                                <!-- Recruit (Non-firm) Links -->
                                <template v-if="hasRole('recruit') && !hasRole('firm')">
                                    <NavLink :href="route('project-recruits.index')" :active="route().current('project-recruits.index')">
                                        {{__('translate.projects')}}
                                    </NavLink>
                                    <NavLink :href="route('project-aplications-recruits.index')" :active="route().current('project-aplications-recruits.index')">
                                        {{__('translate.aplications')}}
                                    </NavLink>
                                    <NavLink :href="route('candidates.index')" :active="route().current('candidates.index')">
                                        {{__('translate.candidates')}}
                                    </NavLink>
                                    <NavLink :href="route('tags.index')" :active="route().current('tags.index')">
                                        {{__('translate.tags')}}
                                    </NavLink>
                                </template>
                            </div>
                        </div>

                        <!-- Right Section: Teams, Notifications, Profile -->
                        <div class="flex items-center gap-1 sm:gap-2">
                            <!-- Teams Dropdown (Modernized) -->
                            <div v-if="$page.props.jetstream.hasTeamFeatures" class="hidden md:flex">
                                <Dropdown align="right" width="64">
                                    <template #trigger>
                                        <button class="inline-flex items-center px-4 py-2 text-[10px] font-black uppercase tracking-widest text-gray-400 hover:text-[#0A2C5C] hover:bg-gray-50/80 rounded-xl transition-all">
                                            <div class="h-6 w-6 bg-blue-50 text-[#0A2C5C] rounded-lg flex items-center justify-center mr-2 text-[8px] font-black shadow-sm">
                                                {{ $page.props.auth.user.current_team.name.substring(0, 2).toUpperCase() }}
                                            </div>
                                            <span class="max-w-[120px] truncate">{{ $page.props.auth.user.current_team.name }}</span>
                                            <svg class="ms-2 h-3 w-3" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 15 3.75 3.75 3.75-3.75m-7.5-6 3.75-3.75 3.75 3.75" />
                                            </svg>
                                        </button>
                                    </template>
                                    <template #content>
                                <div class="px-5 py-4 bg-gray-50 border-b border-gray-100 mb-1 rounded-t-xl">
                                    <p class="text-[10px] font-black text-gray-400 uppercase tracking-widest">{{ __('Manage Team') }}</p>
                                </div>
                                        <DropdownLink :href="route('teams.show', $page.props.auth.user.current_team)">{{ __('Team Settings') }}</DropdownLink>
                                        <DropdownLink v-if="$page.props.jetstream.canCreateTeams" :href="route('teams.create')">{{ __('Create New Team') }}</DropdownLink>

                                        <template v-if="$page.props.auth.user.all_teams.length > 1">
                                            <div class="border-t border-gray-100 my-1" />
                                        <div class="px-5 py-3 text-[10px] font-black text-gray-400 uppercase tracking-widest bg-gray-50/30">{{ __('Switch Teams') }}</div>
                                            <template v-for="team in $page.props.auth.user.all_teams" :key="team.id">
                                                <form @submit.prevent="switchToTeam(team)">
                                                    <DropdownLink as="button" class="group flex items-center justify-between">
                                                        <span>{{ team.name }}</span>
                                                        <svg v-if="team.id == $page.props.auth.user.current_team_id" class="h-5 w-5 text-green-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                                                        </svg>
                                                    </DropdownLink>
                                                </form>
                                            </template>
                                        </template>
                                    </template>
                                </Dropdown>
                            </div>

                            <!-- Notification Bell -->
                                <div class="flex items-center gap-4">
                                    <div v-if="hasRole('firm')" class="flex items-center px-3 py-1.5 bg-blue-50 rounded-xl border border-blue-100 shadow-sm group hover:bg-blue-100 transition-colors duration-200">
                                        <div class="p-1 bg-[#0A2C5C] rounded-lg mr-2 group-hover:scale-110 transition-transform text-white">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-3.5 h-3.5">
                                                <path fill-rule="evenodd" d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.007 5.404.433c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.433 2.082-5.006z" clip-rule="evenodd" />
                                            </svg>
                                        </div>
                                        <div class="flex flex-col">
                                            <span class="text-[8px] font-black text-[#0A2C5C] uppercase tracking-widest leading-none">{{ __('translate.points') }}</span>
                                            <span class="text-xs font-black text-blue-900 leading-none mt-0.5">{{ $page.props.firmLoginPoints || 0 }}</span>
                                        </div>
                                    </div>
                                    <Link v-if="hasRole('firm') && countCart > 0" :href="route('buy.detail')" class="hidden md:flex items-center px-3 py-1.5 bg-blue-50 rounded-xl border border-blue-100 shadow-sm group hover:bg-blue-100 transition-colors duration-200 relative">
                                        <div class="p-1 bg-[#0A2C5C] rounded-lg mr-2 group-hover:scale-110 transition-transform text-white">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-3.5 h-3.5">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 0 0-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 0 0-16.536-1.84M7.5 14.25 5.106 5.272M6 20.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Zm12.75 0a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Z" />
                                            </svg>
                                        </div>
                                        <div class="flex flex-col text-left">
                                            <span class="text-[8px] font-black text-[#0A2C5C] uppercase tracking-widest leading-none">{{ __('translate.cart') }}</span>
                                            <span class="text-xs font-black text-blue-900 leading-none mt-0.5">{{ countCart }}</span>
                                        </div>
                                    </Link>
                                    <notification-bell :count="notifications" />
                                </div>

                            <!-- User Profile Dropdown (Modernized) -->
                            <div class="relative flex items-center ms-2">
                                <Dropdown align="right" width="56">
                                    <template #trigger>
                                        <button v-if="$page.props.jetstream.managesProfilePhotos" class="flex text-sm p-0.5 border-2 border-transparent rounded-full hover:border-blue-200 transition-all focus:outline-none">
                                            <img class="h-9 w-9 rounded-full object-cover shadow-sm" :src="$page.props.auth.user.profile_photo_url" :alt="$page.props.auth.user.name">
                                        </button>
                                        <button v-else class="flex items-center px-4 py-2 text-[10px] font-black uppercase tracking-widest text-gray-400 hover:text-[#0A2C5C] hover:bg-gray-50 rounded-xl transition-all">
                                            {{ $page.props.auth.user.name }}
                                            <svg class="ms-2 h-3 w-3" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5" />
                                            </svg>
                                        </button>
                                    </template>
                                    <template #content>
                                        <!-- User Info Summary -->
                                        <div class="px-5 py-4 bg-gray-50 border-b border-gray-100 mb-1 rounded-t-xl">
                                            <p class="text-xs font-black text-[#0A2C5C] uppercase tracking-tight truncate">{{ $page.props.auth.user.name }}</p>
                                            <p class="text-[10px] font-bold text-gray-400 uppercase tracking-widest truncate">{{ $page.props.auth.user.email }}</p>
                                        </div>

                                        <div class="py-1">
                                            <p class="px-5 py-2 text-[10px] font-black text-gray-400 uppercase tracking-[0.1em]">{{__('translate.ManageAccount')}}</p>
                                            <DropdownLink :href="route('profile.show')">{{__('translate.Profile')}}</DropdownLink>
                                            <DropdownLink v-if="$page.props.jetstream.hasApiFeatures" :href="route('api-tokens.index')">API Tokens</DropdownLink>
                                        </div>

                                        <div class="border-t border-gray-100 py-1">
                                            <DropdownLink :href="route('front')">{{__('translate.frontPage')}}</DropdownLink>
                                            <DropdownLink v-if="hasRole('worker')" :href="route('worker.myCv')">{{__('translate.myCv')}}</DropdownLink>
                                            <DropdownLink v-if="hasRole('firm')" :href="route('recruits.index')">{{__('translate.recruits')}}</DropdownLink>
                                            <DropdownLink v-if="hasRole('firm')" :href="route('aplications.index')">{{__('translate.aplications')}}</DropdownLink>
                                            <DropdownLink v-if="hasRole('firm')" :href="route('projects.index')">{{__('translate.projects')}}</DropdownLink>
                                            <DropdownLink v-if="hasRole('firm')" :href="route('statistics.index')">{{__('translate.statistics')}}</DropdownLink>
                                            <DropdownLink v-if="hasRole('firm')" :href="route('invoices.index')">{{__('translate.invoices')}}</DropdownLink>
                                            <DropdownLink v-if="hasRole('firm')" :href="route('buy.index')">{{__('translate.buy')}}</DropdownLink>
                                            <DropdownLink v-if="hasRole('firm')" :href="route('points.index')">{{__('translate.points')}}</DropdownLink>
                                            <DropdownLink v-if="hasRole('worker')" :href="route('worker.aplications')">{{__('translate.aplications')}}</DropdownLink>
                                            <DropdownLink v-if="hasRole('recruit') && !hasRole('firm')" :href="route('project-recruits.index')">{{__('translate.projects')}}</DropdownLink>
                                            <DropdownLink v-if="hasRole('recruit') && !hasRole('firm')" :href="route('project-aplications-recruits.index')">{{__('translate.aplications')}}</DropdownLink>
                                            <DropdownLink v-if="hasRole('recruit') && !hasRole('firm')" :href="route('candidates.index')">{{__('translate.candidates')}}</DropdownLink>
                                            <DropdownLink v-if="hasRole('recruit') && !hasRole('firm')" :href="route('tags.index')">{{__('translate.tags')}}</DropdownLink>
                                        </div>

                                        <div class="border-t border-gray-100 py-1">
                                            <form @submit.prevent="logout">
                                                <DropdownLink as="button" class="!text-red-600 hover:!text-red-700 hover:!bg-red-50">
                                                    {{__('translate.logout')}}
                                                </DropdownLink>
                                            </form>
                                        </div>
                                    </template>
                                </Dropdown>
                            </div>

                            <!-- Mobile Menu Button -->
                            <div class="flex items-center lg:hidden ms-2">
                                <button
                                    class="relative inline-flex items-center justify-center p-2.5 rounded-2xl text-gray-400 hover:text-[#0A2C5C] hover:bg-blue-50/50 focus:outline-none transition-all duration-300 group"
                                    :class="{'bg-blue-50/80 text-[#0A2C5C]': showingNavigationDropdown}"
                                    @click="showingNavigationDropdown = ! showingNavigationDropdown"
                                >
                                    <span class="sr-only">Open main menu</span>
                                    <div class="relative w-6 h-6 flex items-center justify-center">
                                        <span
                                            class="absolute block h-0.5 w-6 bg-current transform transition duration-300 ease-in-out"
                                            :class="{'rotate-45': showingNavigationDropdown, '-translate-y-2': !showingNavigationDropdown}"
                                        ></span>
                                        <span
                                            class="absolute block h-0.5 w-6 bg-current transform transition duration-300 ease-in-out"
                                            :class="{'opacity-0': showingNavigationDropdown}"
                                        ></span>
                                        <span
                                            class="absolute block h-0.5 w-6 bg-current transform transition duration-300 ease-in-out"
                                            :class="{'-rotate-45': showingNavigationDropdown, 'translate-y-2': !showingNavigationDropdown}"
                                        ></span>
                                    </div>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Responsive Navigation Menu (Modern Slide-down) -->
                <transition
                    enter-active-class="transition duration-200 ease-out"
                    enter-from-class="transform -translate-y-4 opacity-0"
                    enter-to-class="transform translate-y-0 opacity-100"
                    leave-active-class="transition duration-150 ease-in"
                    leave-from-class="transform translate-y-0 opacity-100"
                    leave-to-class="transform -translate-y-4 opacity-0"
                >
                    <div v-show="showingNavigationDropdown" class="lg:hidden border-t border-gray-100 bg-white">
                        <div class="pt-2 pb-6 space-y-1">
                            <ResponsiveNavLink :href="route('dashboard')" :active="route().current('dashboard')" class="uppercase">{{__('translate.dashboard')}}</ResponsiveNavLink>

                            <!-- Responsive Role Specific Links (Compact) -->
                            <div class="px-4 py-2 border-l-4 border-transparent text-xs font-bold text-gray-400 uppercase tracking-widest bg-gray-50/50">Menu</div>

                            <template v-if="hasRole('worker')">
                                <ResponsiveNavLink :href="route('worker.myCv')" :active="route().current('worker.myCv')" class="uppercase">{{__('translate.myCv')}}</ResponsiveNavLink>
                                <ResponsiveNavLink :href="route('worker.aplications')" :active="route().current('worker.aplications')" class="uppercase">{{__('translate.aplications')}}</ResponsiveNavLink>
                                <ResponsiveNavLink :href="route('profile.show')" :active="route().current('profile.show')" class="uppercase">{{__('translate.Profile')}}</ResponsiveNavLink>
                                <ResponsiveNavLink :href="route('front.projects')" :active="route().current('front.projects')" class="uppercase">{{__('translate.projects')}}</ResponsiveNavLink>
                            </template>

                            <template v-if="hasRole('firm')">
                                <ResponsiveNavLink :href="route('recruits.index')" :active="route().current('recruits.index')" class="uppercase">{{__('translate.recruits')}}</ResponsiveNavLink>

                                <div>
                                    <button
                                        @click="showingAplicationsDropdown = !showingAplicationsDropdown"
                                        class="flex items-center justify-between w-full px-4 py-2 text-[10px] font-black text-gray-400 uppercase tracking-widest bg-gray-50/30 hover:text-[#0A2C5C] transition-colors"
                                    >
                                        {{__('translate.aplications')}}
                                        <svg :class="{'rotate-180': showingAplicationsDropdown}" class="ms-1.5 h-3 w-3 transition-transform duration-200" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5" />
                                        </svg>
                                    </button>
                                    <div v-show="showingAplicationsDropdown" class="space-y-1">
                                        <ResponsiveNavLink :href="route('aplications.index')" :active="route().current('aplications.index')" class="uppercase pl-8">{{__('translate.aplications')}}</ResponsiveNavLink>
                                        <ResponsiveNavLink :href="route('candidate-questions.index')" :active="route().current('candidate-questions.index')" class="uppercase pl-8">{{__('translate.listQuestions')}}</ResponsiveNavLink>
                                        <ResponsiveNavLink :href="route('external-companies.index')" :active="route().current('external-companies.index')" class="uppercase pl-8">{{__('translate.externalCompanies')}}</ResponsiveNavLink>
                                        <ResponsiveNavLink :href="route('tags.index')" :active="route().current('tags.index')" class="uppercase pl-8">{{__('translate.tags')}}</ResponsiveNavLink>
                                        <ResponsiveNavLink :href="route('candidates.index')" :active="route().current('candidates.index')" class="uppercase pl-8">{{__('translate.candidates')}}</ResponsiveNavLink>
                                    </div>
                                </div>

                                <ResponsiveNavLink :href="route('projects.index')" :active="route().current('projects.index')" class="uppercase">{{__('translate.projects')}}</ResponsiveNavLink>
                                <ResponsiveNavLink :href="route('statistics.index')" :active="route().current('statistics.index')" class="uppercase">{{__('translate.statistics')}}</ResponsiveNavLink>
                                <ResponsiveNavLink :href="route('invoices.index')" :active="route().current('invoices.index')" class="uppercase">{{__('translate.invoices')}}</ResponsiveNavLink>

                                <div>
                                    <button
                                        @click="showingServicesDropdown = !showingServicesDropdown"
                                        class="flex items-center justify-between w-full px-4 py-2 text-[10px] font-black text-gray-400 uppercase tracking-widest bg-gray-50/30 hover:text-[#0A2C5C] transition-colors"
                                    >
                                        {{__('translate.services')}}
                                        <svg :class="{'rotate-180': showingServicesDropdown}" class="ms-1.5 h-3 w-3 transition-transform duration-200" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5" />
                                        </svg>
                                    </button>
                                    <div v-show="showingServicesDropdown" class="space-y-1">
                                        <ResponsiveNavLink :href="route('firm.p50')" :active="route().current('firm.p50')" class="uppercase pl-8">{{__('translate.p50')}}</ResponsiveNavLink>
                                        <ResponsiveNavLink :href="route('articles.index')" :active="route().current('articles.index')" class="uppercase pl-8">{{__('translate.articles')}}</ResponsiveNavLink>
                                        <ResponsiveNavLink :href="route('firm.banners')" :active="route().current('firm.banners')" class="uppercase pl-8">{{__('translate.banners')}}</ResponsiveNavLink>
                                        <ResponsiveNavLink :href="route('firm.featuredEmployer')" :active="route().current('firm.featuredEmployer')" class="uppercase pl-8">{{__('translate.featured_employer_title')}}</ResponsiveNavLink>
                                        <ResponsiveNavLink :href="route('firm.socialMedia')" :active="route().current('firm.socialMedia')" class="uppercase pl-8">{{__('translate.social_media_title')}}</ResponsiveNavLink>
                                        <ResponsiveNavLink :href="route('firm.premium-certificate.show')" :active="route().current('firm.premium-certificate.show')" class="uppercase pl-8">{{__('translate.premium_certificate')}}</ResponsiveNavLink>
                                    </div>
                                </div>

                                <div>
                                    <button
                                        @click="showingBuyDropdown = !showingBuyDropdown"
                                        class="flex items-center justify-between w-full px-4 py-2 text-[10px] font-black text-gray-400 uppercase tracking-widest bg-gray-50/30 hover:text-[#0A2C5C] transition-colors"
                                    >
                                        {{__('translate.buy')}}
                                        <svg :class="{'rotate-180': showingBuyDropdown}" class="ms-1.5 h-3 w-3 transition-transform duration-200" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5" />
                                        </svg>
                                    </button>
                                    <div v-show="showingBuyDropdown" class="space-y-1">
                                        <ResponsiveNavLink :href="route('buy.index')" :active="route().current('buy.index')" class="uppercase pl-8">{{__('translate.buy')}}</ResponsiveNavLink>
                                        <ResponsiveNavLink :href="route('points.index')" :active="route().current('points.index')" class="uppercase pl-8">{{__('translate.points')}}</ResponsiveNavLink>
                                    </div>
                                </div>
                            </template>

<!--                            <template v-if="hasRole('admin')">-->
<!--                                <ResponsiveNavLink :href="route('admin.questions-accepts.index')" :active="route().current('admin.questions-accepts.index')">{{__('translate.admin-questions')}}</ResponsiveNavLink>-->
<!--                                <ResponsiveNavLink :href="route('admin.aplicationsA.index')" :active="route().current('admin.aplicationsA.index')">{{__('translate.aplications')}}</ResponsiveNavLink>-->
<!--                                <ResponsiveNavLink :href="route('admin.partners.index')" :active="route().current('admin.partners.index')">{{__('partners.partners')}}</ResponsiveNavLink>-->
<!--                            </template>-->

                            <template v-if="hasRole('recruit') && !hasRole('firm')">
                                <ResponsiveNavLink :href="route('project-recruits.index')" :active="route().current('project-recruits.index')" class="uppercase">{{__('translate.projects')}}</ResponsiveNavLink>
                                <ResponsiveNavLink :href="route('project-aplications-recruits.index')" :active="route().current('project-aplications-recruits.index')" class="uppercase">{{__('translate.aplications')}}</ResponsiveNavLink>
                                <ResponsiveNavLink :href="route('candidates.index')" :active="route().current('candidates.index')" class="uppercase">{{__('translate.candidates')}}</ResponsiveNavLink>
                                <ResponsiveNavLink :href="route('tags.index')" :active="route().current('tags.index')" class="uppercase">{{__('translate.tags')}}</ResponsiveNavLink>
                            </template>
                        </div>

                        <!-- Responsive User & Settings -->
                        <div class="pt-4 pb-1 border-t border-gray-200">
                            <div class="flex items-center px-4 mb-4 bg-gray-50/50 py-4 rounded-[2rem] mx-2 border border-gray-100">
                                <div v-if="$page.props.jetstream.managesProfilePhotos" class="shrink-0 me-3">
                                    <img class="h-12 w-12 rounded-full object-cover border-2 border-white shadow-sm" :src="$page.props.auth.user.profile_photo_url" :alt="$page.props.auth.user.name">
                                </div>
                                <div>
                                    <div class="font-black text-xs text-[#0A2C5C] uppercase tracking-tight">{{ $page.props.auth.user.name }}</div>
                                    <div class="font-bold text-[10px] text-gray-400 uppercase tracking-widest">{{ $page.props.auth.user.email }}</div>
                                </div>
                            </div>

                            <div class="space-y-1">
                                <ResponsiveNavLink :href="route('profile.show')" :active="route().current('profile.show')" class="uppercase">{{__('translate.Profile')}}</ResponsiveNavLink>
                                <form method="POST" @submit.prevent="logout">
                                    <ResponsiveNavLink as="button" class="text-red-600 uppercase">{{__('translate.logout')}}</ResponsiveNavLink>
                                </form>
                            </div>
                        </div>
                    </div>
                </transition>
            </nav>


            <!-- Page Content -->
            <main>
                <slot />
            </main>
            <Link
                v-if="countCart > 0"
                :href="route('buy.detail')"
                class="fixed right-8 md:ight-4 bottom-24 z-10 md:right-10 md:bottom-24 flex items-center justify-center w-14 h-14 bg-blue-500 text-white rounded-full shadow-lg animate-pulse transition-transform hover:scale-110"
            >
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round"
                          d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                </svg>
                <span class="font-bold">{{ countCart }}</span>
            </Link>
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
                                                                <div class="flex justify-between items-start">
                                                                    <div class="flex-1">
                                                                        <h3 class="text-base font-bold text-gray-900 leading-tight">
                                                                            {{ item.name }}
                                                                        </h3>
                                                                        <div class="flex items-center justify-between mt-2">
                                                                            <p class="text-sm font-black text-[#0b2a55]">
                                                                                ${{ item.price }}
                                                                            </p>
                                                                            <div class="flex items-center bg-gray-50 p-1 rounded-xl border border-gray-100">
                                                                                <button @click="decrement(item.rowId, item.qty)" class="p-1 text-gray-500 hover:text-[#0b2a55] transition-colors">
                                                                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 12H4" />
                                                                                    </svg>
                                                                                </button>
                                                                                <span class="px-3 text-sm font-black text-[#0b2a55]">{{ item.qty }}</span>
                                                                                <button @click="increment(item.rowId, item.qty)" class="p-1 text-gray-500 hover:text-[#0b2a55] transition-colors">
                                                                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                                                                                    </svg>
                                                                                </button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <button @click="removeFromCart(item.rowId)" class="ml-4 text-gray-400 hover:text-red-500 transition-colors">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                                                                        </svg>
                                                                    </button>
                                                                </div>
                                                                <div class="flex items-end justify-end mt-2">
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
