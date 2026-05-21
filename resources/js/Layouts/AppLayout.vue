<script setup>
import {computed, onMounted, onUnmounted, ref, watch} from 'vue';
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
import DialogModal from '@/Components/DialogModal.vue';
import SecondaryButton from '@/Components/SecondaryButton.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';

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

const showSessionModal = ref(false);
const countdown = ref(10);
let timeoutTimer = null;
let countdownTimer = null;
const TIMEOUT_MS = 30 * 60 * 1000; // 30 minut

const startCountdown = () => {
    countdown.value = 10;
    countdownTimer = setInterval(() => {
        countdown.value--;
        if (countdown.value <= 0) {
            logout();
        }
    }, 1000);
};

const stopCountdown = () => {
    if (countdownTimer) {
        clearInterval(countdownTimer);
        countdownTimer = null;
    }
};

const resetTimer = () => {
    clearTimeout(timeoutTimer);
    stopCountdown();
    if (!showSessionModal.value) {
        timeoutTimer = setTimeout(() => {
            showSessionModal.value = true;
            startCountdown();
        }, TIMEOUT_MS);
    }
};

const continueSession = () => {
    showSessionModal.value = false;
    stopCountdown();
    router.reload({ preserveScroll: true });
    resetTimer();
};

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
    return usePage().props.cartCountAll
});

const isCartAnimating = ref(false);
watch(countCart, (newVal, oldVal) => {
    if (newVal > oldVal) {
        isCartAnimating.value = true;
        setTimeout(() => {
            isCartAnimating.value = false;
        }, 1000);
    }
});

const countTotal = computed(() =>{
    let items = Object.values(usePage().props.cart);
    return items.reduce((acc, curr) => acc + curr.subtotal, 0);
});

const logout = () => {
    router.post(route('logout'));
};


onMounted(() => {
    resetTimer();
    window.addEventListener('mousemove', resetTimer);
    window.addEventListener('keydown', resetTimer);

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
    clearTimeout(timeoutTimer);
    stopCountdown();
    window.removeEventListener('mousemove', resetTimer);
    window.removeEventListener('keydown', resetTimer);

    Echo.leave(`App.Models.User.${currentUser.value?.id}`);
});

</script>

<template>
    <div>
        <Head :title="title" />
        <Banner />
        <SupportDrawer :show="showSupportDrawer" @close="showSupportDrawer = false" />

        <DialogModal :show="showSessionModal" @close="continueSession">
            <template #title>
                {{ __('translate.session_timeout_title') }}
            </template>

            <template #content>
                <div class="space-y-4">
                    <p>{{ __('translate.session_timeout_content') }}</p>
                    <p class="text-lg font-black text-red-600 animate-pulse">
                        {{ __('translate.logout_in') }}: {{ countdown }}s
                    </p>
                </div>
            </template>

            <template #footer>
                <SecondaryButton @click="logout">
                    {{ __('translate.logout') }}
                </SecondaryButton>

                <PrimaryButton class="ms-3" @click="continueSession">
                    {{ __('translate.continue') }}
                </PrimaryButton>
            </template>
        </DialogModal>

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
                                    <div v-if="hasRole('firm') || hasRole('recruit')" class="flex items-center px-3 py-1.5 bg-blue-50 rounded-xl border border-blue-100 shadow-sm group hover:bg-blue-100 transition-colors duration-200">
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
                                    <Link
                                        v-if="hasRole('firm') && countCart > 0"
                                        :href="route('buy.detail')"
                                        class="flex items-center px-3 py-1.5 bg-blue-50 rounded-xl border border-blue-100 shadow-sm group hover:bg-blue-100 transition-all duration-300 relative"
                                        :class="{ 'scale-110 shadow-md ring-2 ring-blue-200': isCartAnimating }"
                                    >
                                        <div
                                            class="p-1 bg-[#0A2C5C] rounded-lg mr-2 group-hover:scale-110 transition-transform text-white"
                                            :class="{ 'animate-bounce': isCartAnimating }"
                                        >
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-3.5 h-3.5">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 0 0-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 0 0-16.536-1.84M7.5 14.25 5.106 5.272M6 20.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Zm12.75 0a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Z" />
                                            </svg>
                                        </div>
                                        <div class="flex flex-col text-left">
                                            <span class="text-[8px] font-black text-[#0A2C5C] uppercase tracking-widest leading-none">{{ __('translate.cart') }}</span>
                                            <span class="text-xs font-black text-blue-900 leading-none mt-0.5">{{ countCart }}</span>
                                        </div>
                                        <!-- Subtelny wskaźnik nowości -->
                                        <span v-if="isCartAnimating" class="absolute -top-1 -right-1 flex h-3 w-3">
                                            <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-blue-400 opacity-75"></span>
                                            <span class="relative inline-flex rounded-full h-3 w-3 bg-blue-500"></span>
                                        </span>
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
                                                <DropdownLink as="button" class="!text-red-600 hover:!text-red-700 hover:!bg-red-50 !uppercase">
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
                                    @click="showingNavigationDropdown = true"
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

                <!-- Responsive Navigation Menu (Slide-over) -->
                <TransitionRoot as="template" :show="showingNavigationDropdown">
                    <Dialog as="div" class="relative z-50 lg:hidden" @close="showingNavigationDropdown = false">
                        <TransitionChild
                            as="template"
                            enter="transition-opacity ease-linear duration-300"
                            enter-from="opacity-0"
                            enter-to="opacity-100"
                            leave="transition-opacity ease-linear duration-300"
                            leave-from="opacity-100"
                            leave-to="opacity-0"
                        >
                            <div class="fixed inset-0 bg-gray-900/60 backdrop-blur-sm" />
                        </TransitionChild>

                        <div class="fixed inset-0 overflow-hidden">
                            <div class="absolute inset-0 overflow-hidden">
                                <div class="pointer-events-none fixed inset-y-0 right-0 flex max-w-full">
                                    <TransitionChild
                                        as="template"
                                        enter="transform transition ease-in-out duration-500 sm:duration-700"
                                        enter-from="translate-x-full"
                                        enter-to="translate-x-0"
                                        leave="transform transition ease-in-out duration-500 sm:duration-700"
                                        leave-from="translate-x-0"
                                        leave-to="translate-x-full"
                                    >
                                        <DialogPanel class="pointer-events-auto w-screen max-w-full">
                                            <div class="flex h-full flex-col bg-white shadow-2xl overflow-hidden">
                                                <!-- Header -->
                                                <div class="px-6 py-6 bg-[#0A2C5C] text-white">
                                                    <div class="flex items-center justify-between">
                                                        <div class="flex items-center gap-3">
                                                            <ApplicationMark class="h-8 w-auto brightness-0 invert" />
                                                            <span class="text-xl font-black uppercase tracking-tight">Menu</span>
                                                        </div>
                                                        <button
                                                            type="button"
                                                            class="p-2 text-white/70 hover:text-white hover:bg-white/10 rounded-xl transition-all"
                                                            @click="showingNavigationDropdown = false"
                                                        >
                                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                                                            </svg>
                                                        </button>
                                                    </div>

                                                    <!-- User Profile Summary in Menu -->
                                                    <div class="mt-8 flex items-center gap-4 p-4 rounded-2xl bg-white/5 border border-white/5 shadow-inner">
                                                        <div v-if="$page.props.jetstream.managesProfilePhotos" class="shrink-0">
                                                            <img class="h-12 w-12 rounded-full object-cover border-2 border-white/20 shadow-sm" :src="$page.props.auth.user.profile_photo_url" :alt="$page.props.auth.user.name">
                                                        </div>
                                                        <div v-else class="shrink-0 w-12 h-12 rounded-full bg-blue-500 flex items-center justify-center text-white font-black text-lg">
                                                            {{ $page.props.auth.user.name.substring(0, 1).toUpperCase() }}
                                                        </div>
                                                        <div class="overflow-hidden">
                                                            <p class="text-sm font-black uppercase tracking-tight truncate">{{ $page.props.auth.user.name }}</p>
                                                            <p class="text-[10px] font-bold text-white/40 uppercase tracking-widest truncate">{{ $page.props.auth.user.email }}</p>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Content -->
                                                <div class="flex-1 overflow-y-auto px-4 py-6 custom-scrollbar space-y-4">
                                                    <!-- Main Navigation -->
                                                    <div class="space-y-0.5">
                                                        <ResponsiveNavLink :href="route('dashboard')" :active="route().current('dashboard')">
                                                            <div class="flex items-center gap-3">
                                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-5 h-5">
                                                                    <path stroke-linecap="round" stroke-linejoin="round" d="m2.25 12 8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
                                                                </svg>
                                                                {{__('translate.dashboard')}}
                                                            </div>
                                                        </ResponsiveNavLink>

                                                        <!-- Worker Links -->
                                                        <template v-if="hasRole('worker')">
                                                            <ResponsiveNavLink :href="route('worker.myCv')" :active="route().current('worker.myCv')">
                                                                <div class="flex items-center gap-3">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-5 h-5">
                                                                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 0 0-3.375-3.375h-1.5A1.125 1.125 0 0 1 13.5 7.125v-1.5a3.375 3.375 0 0 0-3.375-3.375H8.25m0 12.75h7.5m-7.5 3H12M10.5 2.25H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 0 0-9-9Z" />
                                                                    </svg>
                                                                    {{__('translate.myCv')}}
                                                                </div>
                                                            </ResponsiveNavLink>
                                                        <ResponsiveNavLink :href="route('worker.aplications')" :active="route().current('worker.aplications')">
                                                            <div class="flex items-center gap-3">
                                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-5 h-5">
                                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 0 0-3.375-3.375h-1.5A1.125 1.125 0 0 1 13.5 7.125v-1.5a3.375 3.375 0 0 0-3.375-3.375H8.25m0 12.75h7.5m-7.5 3H12M10.5 2.25H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 0 0-9-9Z" />
                                                                </svg>
                                                                {{__('translate.aplications')}}
                                                            </div>
                                                        </ResponsiveNavLink>
                                                        <ResponsiveNavLink :href="route('front.projects')" :active="route().current('front.projects')">
                                                            <div class="flex items-center gap-3">
                                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-5 h-5">
                                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 7.5h1.5m-1.5 3h1.5m-7.5 3h7.5m-7.5 3h7.5m3-9h3.375c.621 0 1.125.504 1.125 1.125V18a2.25 2.25 0 0 1-2.25 2.25M16.5 7.5V18a2.25 2.25 0 0 0 2.25 2.25M16.5 7.5V4.875c0-.621-.504-1.125-1.125-1.125H4.125C3.504 3.75 3 4.254 3 4.875V18a2.25 2.25 0 0 0 2.25 2.25h13.5M6 7.5h3v3H6v-3Z" />
                                                                </svg>
                                                                {{__('translate.projects')}}
                                                            </div>
                                                        </ResponsiveNavLink>
                                                        </template>

                                                        <!-- Firm Links -->
                                                        <template v-if="hasRole('firm')">
                                                            <ResponsiveNavLink :href="route('recruits.index')" :active="route().current('recruits.index')">
                                                                <div class="flex items-center gap-3">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-5 h-5">
                                                                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 19.128a9.38 9.38 0 0 0 2.625.372 9.337 9.337 0 0 0 4.121-.952 4.125 4.125 0 0 0-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 0 1 8.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0 1 11.964-3.07M12 6.375a3.375 3.375 0 1 1-6.75 0 3.375 3.375 0 0 1 6.75 0Zm8.25 2.25a2.625 2.625 0 1 1-5.25 0 2.625 2.625 0 0 1 5.25 0Z" />
                                                                    </svg>
                                                                    {{__('translate.recruits')}}
                                                                </div>
                                                            </ResponsiveNavLink>

                                                            <div class="space-y-1">
                                                                <button
                                                                    @click="showingAplicationsDropdown = !showingAplicationsDropdown"
                                                                    class="flex items-center justify-between w-full ps-3 pe-4 py-3 border-l-4 border-transparent text-start text-base font-medium text-gray-600 hover:text-[#0A2C5C] hover:bg-gray-50 hover:border-gray-300 rounded-r-xl transition duration-150 ease-in-out uppercase"
                                                                    :class="{'text-[#0A2C5C] bg-blue-50/50 border-[#00a0e3]': showingAplicationsDropdown}"
                                                                >
                                                                    <div class="flex items-center gap-3">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-5 h-5">
                                                                            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 0 0-3.375-3.375h-1.5A1.125 1.125 0 0 1 13.5 7.125v-1.5a3.375 3.375 0 0 0-3.375-3.375H8.25m0 12.75h7.5m-7.5 3H12M10.5 2.25H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 0 0-9-9Z" />
                                                                        </svg>
                                                                        {{__('translate.aplications')}}
                                                                    </div>
                                                                    <svg :class="{'rotate-180': showingAplicationsDropdown}" class="h-4 w-4 transition-transform duration-200" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                                                                        <path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5" />
                                                                    </svg>
                                                                </button>
                                                                <div v-show="showingAplicationsDropdown" class="pl-1 space-y-0 border-l border-blue-100 ml-2 my-1">
                                                                    <ResponsiveNavLink :href="route('aplications.index')" :active="route().current('aplications.index')" class="!py-1.5 !text-sm">
                                                                        <div class="flex items-center gap-3">
                                                                            <div class="w-1 h-1 rounded-full bg-blue-400"></div>
                                                                            {{__('translate.aplications')}}
                                                                        </div>
                                                                    </ResponsiveNavLink>
                                                                    <ResponsiveNavLink :href="route('candidate-questions.index')" :active="route().current('candidate-questions.index')" class="!py-1.5 !text-sm">
                                                                        <div class="flex items-center gap-3">
                                                                            <div class="w-1 h-1 rounded-full bg-blue-400"></div>
                                                                            {{__('translate.listQuestions')}}
                                                                        </div>
                                                                    </ResponsiveNavLink>
                                                                    <ResponsiveNavLink :href="route('external-companies.index')" :active="route().current('external-companies.index')" class="!py-1.5 !text-sm">
                                                                        <div class="flex items-center gap-3">
                                                                            <div class="w-1 h-1 rounded-full bg-blue-400"></div>
                                                                            {{__('translate.externalCompanies')}}
                                                                        </div>
                                                                    </ResponsiveNavLink>
                                                                    <ResponsiveNavLink :href="route('tags.index')" :active="route().current('tags.index')" class="!py-1.5 !text-sm">
                                                                        <div class="flex items-center gap-3">
                                                                            <div class="w-1 h-1 rounded-full bg-blue-400"></div>
                                                                            {{__('translate.tags')}}
                                                                        </div>
                                                                    </ResponsiveNavLink>
                                                                    <ResponsiveNavLink :href="route('candidates.index')" :active="route().current('candidates.index')" class="!py-1.5 !text-sm">
                                                                        <div class="flex items-center gap-3">
                                                                            <div class="w-1 h-1 rounded-full bg-blue-400"></div>
                                                                            {{__('translate.candidates')}}
                                                                        </div>
                                                                    </ResponsiveNavLink>
                                                                </div>
                                                            </div>

                                                            <ResponsiveNavLink :href="route('projects.index')" :active="route().current('projects.index')">
                                                                <div class="flex items-center gap-3">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-5 h-5">
                                                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 7.5h1.5m-1.5 3h1.5m-7.5 3h7.5m-7.5 3h7.5m3-9h3.375c.621 0 1.125.504 1.125 1.125V18a2.25 2.25 0 0 1-2.25 2.25M16.5 7.5V18a2.25 2.25 0 0 0 2.25 2.25M16.5 7.5V4.875c0-.621-.504-1.125-1.125-1.125H4.125C3.504 3.75 3 4.254 3 4.875V18a2.25 2.25 0 0 0 2.25 2.25h13.5M6 7.5h3v3H6v-3Z" />
                                                                    </svg>
                                                                    {{__('translate.projects')}}
                                                                </div>
                                                            </ResponsiveNavLink>

                                                            <div class="space-y-1">
                                                                <button
                                                                    @click="showingServicesDropdown = !showingServicesDropdown"
                                                                    class="flex items-center justify-between w-full ps-3 pe-4 py-3 border-l-4 border-transparent text-start text-base font-medium text-gray-600 hover:text-[#0A2C5C] hover:bg-gray-50 hover:border-gray-300 rounded-r-xl transition duration-150 ease-in-out uppercase"
                                                                    :class="{'text-[#0A2C5C] bg-blue-50/50 border-[#00a0e3]': showingServicesDropdown}"
                                                                >
                                                                    <div class="flex items-center gap-3">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-5 h-5">
                                                                            <path stroke-linecap="round" stroke-linejoin="round" d="M9.813 15.904 9 18.75l-.813-2.846a4.5 4.5 0 0 0-3.09-3.09L2.25 12l2.846-.813a4.5 4.5 0 0 0 3.09-3.09L9 5.25l.813 2.846a4.5 4.5 0 0 0 3.09 3.09L15.75 12l-2.846.813a4.5 4.5 0 0 0-3.09 3.09ZM18.259 8.715 18 9.75l-.259-1.035a3.375 3.375 0 0 0-2.455-2.456L14.25 6l1.036-.259a3.375 3.375 0 0 0 2.455-2.456L18 2.25l.259 1.035a3.375 3.375 0 0 0 2.456 2.456L21.75 6l-1.035.259a3.375 3.375 0 0 0-2.456 2.456ZM16.894 20.567 16.5 22.25l-.394-1.683a2.25 2.25 0 0 0-1.623-1.623L12.75 18.5l1.733-.406a2.25 2.25 0 0 0 1.623-1.623l.394-1.683.394 1.683a2.25 2.25 0 0 0 1.623 1.623l1.733.406-1.733.406a2.25 2.25 0 0 0-1.623 1.623Z" />
                                                                        </svg>
                                                                        {{__('translate.services')}}
                                                                    </div>
                                                                    <svg :class="{'rotate-180': showingServicesDropdown}" class="h-4 w-4 transition-transform duration-200" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                                                                        <path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5" />
                                                                    </svg>
                                                                </button>
                                                                <div v-show="showingServicesDropdown" class="pl-1 space-y-0 border-l border-blue-100 ml-2 my-1">
                                                                    <ResponsiveNavLink :href="route('firm.p50')" :active="route().current('firm.p50')" class="!py-1.5 !text-sm">
                                                                        <div class="flex items-center gap-3">
                                                                            <div class="w-1 h-1 rounded-full bg-blue-400"></div>
                                                                            {{__('translate.p50')}}
                                                                        </div>
                                                                    </ResponsiveNavLink>
                                                                    <ResponsiveNavLink :href="route('articles.index')" :active="route().current('articles.index')" class="!py-1.5 !text-sm">
                                                                        <div class="flex items-center gap-3">
                                                                            <div class="w-1 h-1 rounded-full bg-blue-400"></div>
                                                                            {{__('translate.articles')}}
                                                                        </div>
                                                                    </ResponsiveNavLink>
                                                                    <ResponsiveNavLink :href="route('firm.banners')" :active="route().current('firm.banners')" class="!py-1.5 !text-sm">
                                                                        <div class="flex items-center gap-3">
                                                                            <div class="w-1 h-1 rounded-full bg-blue-400"></div>
                                                                            {{__('translate.banners')}}
                                                                        </div>
                                                                    </ResponsiveNavLink>
                                                                    <ResponsiveNavLink :href="route('firm.featuredEmployer')" :active="route().current('firm.featuredEmployer')" class="!py-1.5 !text-sm">
                                                                        <div class="flex items-center gap-3">
                                                                            <div class="w-1 h-1 rounded-full bg-blue-400"></div>
                                                                            {{__('translate.featured_employer_title')}}
                                                                        </div>
                                                                    </ResponsiveNavLink>
                                                                    <ResponsiveNavLink :href="route('firm.socialMedia')" :active="route().current('firm.socialMedia')" class="!py-1.5 !text-sm">
                                                                        <div class="flex items-center gap-3">
                                                                            <div class="w-1 h-1 rounded-full bg-blue-400"></div>
                                                                            {{__('translate.social_media_title')}}
                                                                        </div>
                                                                    </ResponsiveNavLink>
                                                                    <ResponsiveNavLink :href="route('firm.premium-certificate.show')" :active="route().current('firm.premium-certificate.show')" class="!py-1.5 !text-sm">
                                                                        <div class="flex items-center gap-3">
                                                                            <div class="w-1 h-1 rounded-full bg-blue-400"></div>
                                                                            {{__('translate.premium_certificate')}}
                                                                        </div>
                                                                    </ResponsiveNavLink>
                                                                </div>
                                                            </div>

                                                            <div class="space-y-1">
                                                                <button
                                                                    @click="showingBuyDropdown = !showingBuyDropdown"
                                                                    class="flex items-center justify-between w-full ps-3 pe-4 py-3 border-l-4 border-transparent text-start text-base font-medium text-gray-600 hover:text-[#0A2C5C] hover:bg-gray-50 hover:border-gray-300 rounded-r-xl transition duration-150 ease-in-out uppercase"
                                                                    :class="{'text-[#0A2C5C] bg-blue-50/50 border-[#00a0e3]': showingBuyDropdown}"
                                                                >
                                                                    <div class="flex items-center gap-3">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-5 h-5">
                                                                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 0 0-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 0 0-16.536-1.84M7.5 14.25 5.106 5.272M6 20.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Zm12.75 0a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Z" />
                                                                        </svg>
                                                                        {{__('translate.buy')}}
                                                                    </div>
                                                                    <svg :class="{'rotate-180': showingBuyDropdown}" class="h-4 w-4 transition-transform duration-200" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                                                                        <path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5" />
                                                                    </svg>
                                                                </button>
                                                                <div v-show="showingBuyDropdown" class="pl-1 space-y-0 border-l border-blue-100 ml-2 my-1">
                                                                    <ResponsiveNavLink :href="route('buy.index')" :active="route().current('buy.index')" class="!py-1.5 !text-sm">
                                                                        <div class="flex items-center gap-3">
                                                                            <div class="w-1 h-1 rounded-full bg-blue-400"></div>
                                                                            {{__('translate.buy')}}
                                                                        </div>
                                                                    </ResponsiveNavLink>
                                                                    <ResponsiveNavLink :href="route('points.index')" :active="route().current('points.index')" class="!py-1.5 !text-sm">
                                                                        <div class="flex items-center gap-3">
                                                                            <div class="w-1 h-1 rounded-full bg-blue-400"></div>
                                                                            {{__('translate.points')}}
                                                                        </div>
                                                                    </ResponsiveNavLink>
                                                                </div>
                                                            </div>
                                                        </template>

                                                        <!-- Recruit (Non-firm) Links -->
                                                        <template v-if="hasRole('recruit') && !hasRole('firm')">
                                                        <ResponsiveNavLink :href="route('project-recruits.index')" :active="route().current('project-recruits.index')">
                                                            <div class="flex items-center gap-3">
                                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-5 h-5">
                                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 7.5h1.5m-1.5 3h1.5m-7.5 3h7.5m-7.5 3h7.5m3-9h3.375c.621 0 1.125.504 1.125 1.125V18a2.25 2.25 0 0 1-2.25 2.25M16.5 7.5V18a2.25 2.25 0 0 0 2.25 2.25M16.5 7.5V4.875c0-.621-.504-1.125-1.125-1.125H4.125C3.504 3.75 3 4.254 3 4.875V18a2.25 2.25 0 0 0 2.25 2.25h13.5M6 7.5h3v3H6v-3Z" />
                                                                </svg>
                                                                {{__('translate.projects')}}
                                                            </div>
                                                        </ResponsiveNavLink>
                                                        <ResponsiveNavLink :href="route('project-aplications-recruits.index')" :active="route().current('project-aplications-recruits.index')">
                                                            <div class="flex items-center gap-3">
                                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-5 h-5">
                                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 0 0-3.375-3.375h-1.5A1.125 1.125 0 0 1 13.5 7.125v-1.5a3.375 3.375 0 0 0-3.375-3.375H8.25m0 12.75h7.5m-7.5 3H12M10.5 2.25H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 0 0-9-9Z" />
                                                                </svg>
                                                                {{__('translate.aplications')}}
                                                            </div>
                                                        </ResponsiveNavLink>
                                                            <ResponsiveNavLink :href="route('candidates.index')" :active="route().current('candidates.index')">
                                                                <div class="flex items-center gap-3">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-5 h-5">
                                                                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 19.128a9.38 9.38 0 0 0 2.625.372 9.337 9.337 0 0 0 4.121-.952 4.125 4.125 0 0 0-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 0 1 8.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0 1 11.964-3.07M12 6.375a3.375 3.375 0 1 1-6.75 0 3.375 3.375 0 0 1 6.75 0Zm8.25 2.25a2.625 2.625 0 1 1-5.25 0 2.625 2.625 0 0 1 5.25 0Z" />
                                                                    </svg>
                                                                    {{__('translate.candidates')}}
                                                                </div>
                                                            </ResponsiveNavLink>
                                                            <ResponsiveNavLink :href="route('tags.index')" :active="route().current('tags.index')">
                                                                <div class="flex items-center gap-3">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-5 h-5">
                                                                        <path stroke-linecap="round" stroke-linejoin="round" d="M9.568 3H5.25A2.25 2.25 0 0 0 3 5.25v4.318c0 .597.237 1.17.659 1.591l9.581 9.581c.699.699 1.78.872 2.607.33a18.095 18.095 0 0 0 5.223-5.223c.542-.827.369-1.908-.33-2.607L11.16 3.659A2.25 2.25 0 0 0 9.568 3Z" />
                                                                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 6h.008v.008H6V6Z" />
                                                                    </svg>
                                                                    {{__('translate.tags')}}
                                                                </div>
                                                            </ResponsiveNavLink>
                                                        </template>
                                                    </div>

                                                    <!-- Account Management -->
                                                    <div class="space-y-1">
                                                        <div class="px-4 mb-2 text-[10px] font-black text-gray-400 uppercase tracking-[0.2em]">{{ __('translate.ManageAccount') }}</div>
                                                        <ResponsiveNavLink :href="route('profile.show')" :active="route().current('profile.show')">
                                                            <div class="flex items-center gap-3">
                                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-5 h-5">
                                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0 0 12 15.75a7.488 7.488 0 0 0-5.982 2.975m11.963 0a9 9 0 1 0-11.963 0m11.963 0A8.966 8.966 0 0 1 12 21a8.966 8.966 0 0 1-5.982-2.275M15 9.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                                                </svg>
                                                                {{__('translate.Profile')}}
                                                            </div>
                                                        </ResponsiveNavLink>

                                                        <!-- Teams on Mobile -->
                                                        <template v-if="$page.props.jetstream.hasTeamFeatures">
                                                            <div class="pt-4 px-4 mb-2 text-[10px] font-black text-gray-400 uppercase tracking-[0.2em]">{{ __('Manage Team') }}</div>
                                                            <ResponsiveNavLink :href="route('teams.show', $page.props.auth.user.current_team)" :active="route().current('teams.show')">
                                                                <div class="flex items-center gap-3">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-5 h-5">
                                                                        <path stroke-linecap="round" stroke-linejoin="round" d="M18 18.72a9.094 9.094 0 0 0 3.741-.479 3 3 0 0 0-4.682-2.72m.94 3.198.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0 1 12 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 0 1 6 18.719m12 0a5.971 5.971 0 0 0-.941-3.197m0 0A5.995 5.995 0 0 0 12 12.75a5.995 5.995 0 0 0-5.058 2.772m0 0a5.97 5.97 0 0 0-.942 3.198mfe0 0H6a5.002 5.002 0 0 1 4.715-4.954M12 12.75a3.375 3.375 0 1 0 0-6.75 3.375 3.375 0 0 0 0 6.75Zm6.75 3.375a2.625 2.625 0 1 0 0-5.25 2.625 2.625 0 0 0 0 5.25Zm-13.5 0a2.625 2.625 0 1 0 0-5.25 2.625 2.625 0 0 0 0 5.25Z" />
                                                                    </svg>
                                                                    {{ __('Team Settings') }}
                                                                </div>
                                                            </ResponsiveNavLink>
                                                        </template>
                                                    </div>
                                                </div>

                                                <!-- Footer (Logout) -->
                                                <div class="border-t border-gray-100 p-6 bg-gray-50/50">
                                                    <form method="POST" @submit.prevent="logout">
                                                        <button
                                                            type="submit"
                                                            class="w-full flex items-center justify-center gap-3 px-6 py-4 rounded-2xl bg-red-50 text-red-600 font-black uppercase tracking-widest hover:bg-red-100 transition-colors"
                                                        >
                                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-5 h-5">
                                                                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 9V5.25A2.25 2.25 0 0 0 13.5 3h-6a2.25 2.25 0 0 0-2.25 2.25v13.5A2.25 2.25 0 0 0 7.5 21h6a2.25 2.25 0 0 0 2.25-2.25V15M12 9l-3 3m0 0 3 3m-3-3h12.75" />
                                                            </svg>
                                                            {{__('translate.logout')}}
                                                        </button>
                                                    </form>
                                                </div>
                                            </div>
                                        </DialogPanel>
                                    </TransitionChild>
                                </div>
                            </div>
                        </div>
                    </Dialog>
                </TransitionRoot>
            </nav>


            <!-- Page Content -->
            <main>
                <slot />
            </main>

            <div
                v-if="hasRole('firm') && countCart > 0 && !route().current('buy.detail')"
                class="fixed bottom-24 right-6 z-[60]"
            >
                <Link
                    :href="route('buy.detail')"
                    :title="__('translate.cart')"
                    class="group flex items-center gap-0 hover:gap-3 p-4 hover:px-6 bg-[#00aaff] hover:bg-[#00a0e3] text-white rounded-full shadow-2xl shadow-blue-900/30 transition-all duration-500 hover:scale-110 active:scale-95 border-4 border-white overflow-hidden"
                >
                    <div class="relative flex-shrink-0 flex items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-6 h-6 transition-transform duration-500 group-hover:rotate-12">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 0 0-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 0 0-16.536-1.84M7.5 14.25 5.106 5.272M6 20.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Zm12.75 0a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Z" />
                        </svg>
                        <span class="absolute -top-2 -right-2 flex h-5 w-5 items-center justify-center bg-red-500 text-[10px] font-black rounded-full border-2 border-white shadow-sm transition-transform group-hover:scale-110">
                            {{ countCart }}
                        </span>
                    </div>
                    <span class="max-w-0 overflow-hidden group-hover:max-w-xs transition-all duration-500 ease-in-out whitespace-nowrap text-xs font-black uppercase tracking-[0.2em]">
                        {{ __('translate.cart') }}
                    </span>
                </Link>
            </div>
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
                                                                <img :src="`/images/price/${item.id}-points.png`"
                                                                     class="h-10 w-10 object-contain opacity-80"
                                                                     @error="(e) => e.target.src = '/images/icons/recruit/organizacja_pracy.png'" />
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
