<script setup>
import { Link, router } from '@inertiajs/vue3';
import { ref } from 'vue';
import { usePermission } from "@/Composables/usePermission";
import ApplicationMarkWhite from '@/Components/ApplicationMarkWhite.vue';
import NotificationBell from '@/Components/NotificationBell.vue';
import ConfirmationModal from '@/Components/ConfirmationModal.vue';
import DangerButton from '@/Components/DangerButton.vue';
import SecondaryButton from '@/Components/SecondaryButton.vue';

const { hasRole } = usePermission();

const menuItems = [
    {
        name: 'Dashboard',
        icon: 'dashboard',
        subItems: [
            { name: 'Pulpit', route: 'dashboard' },
            { name: 'Banery', route: 'admin.banners-accepts.index' },
            { name: 'Artykuły', route: 'admin.articles-accepts.index' },
            { name: 'Social Media', route: 'admin.social-media.index' },
            { name: 'Statystyki', route: 'admin.statistics.index' },
        ]
    },
    {
        name: 'Firmy',
        icon: 'firms',
        subItems: [
            { name: 'Partnerzy', route: 'admin.partners.index' },
            { name: 'Firmy zewnętrzne', route: 'admin.external-companies.index' },
        ]
    },
    {
        name: 'Użytkownicy',
        icon: 'users',
        subItems: [
            { name: 'Firmy', route: 'admin.firms.index' },
            { name: 'Pracownicy', route: 'admin.workers.index' },
            { name: 'Rekruterzy', route: 'admin.users.recruits.index' },
        ]
    },
    {
        name: 'Rynek pracy',
        icon: 'jobs',
        subItems: [
            { name: 'Oferty pracy', route: 'admin.job-offers.index' },
            { name: 'Branże / podbranże', route: 'admin.industries.index',can: 'super-admin-only' },
            { name: 'Kategorie stanowisk', route: 'admin.categories.index',can: 'super-admin-only' },
            { name: 'Kraje', route: 'admin.countries.index',can: 'super-admin-only' },
            { name: 'Języki', route: 'admin.languages.index',can: 'super-admin-only' },
            { name: 'Waluty', route: 'admin.currencies.index', can: 'super-admin-only' },
        ]
    },
    {
        name: 'Rekrutacja',
        icon: 'recruitment',
        subItems: [
            { name: 'Aplikacje', route: 'admin.aplicationsA.index' },
            { name: 'Pytania', route: 'admin.questions-accepts.index' },
        ]
    },
    {
        name: 'Finanse',
        icon: 'finance',
        subItems: [
            { name: 'Faktury', route: 'admin.finance.invoices.index' },
            { name: 'Kredyty', route: 'admin.finance.points.index' },
        ],
        can: 'super-admin-only'
    },
    { name: 'Fundacje', icon: 'foundations', route: 'admin.foundations.index',can: 'super-admin-only' },
    {
        name: 'Marketing',
        icon: 'marketing',
        subItems: [
            { name: 'Usługi promocyjne', route: 'admin.promotion-services.index' },
            { name: 'Aktywne usługi', route: 'admin.active-services.index' },
            { name: 'Punkty', route: 'admin.admin-points.index' },
        ]
    },
    {
        name: 'Bezpieczeństwo',
        icon: 'security',
        subItems: [
            { name: 'Zgłoszenia', route: 'admin.tickets.index' },
            { name: 'Logi', route: 'admin.logs.index' },
            { name: 'Blokada IP i Email', route: 'admin.security.ip-email-blocks.index' },
        ],
    },
    { name: 'Administratorzy', icon: 'admins', route: 'admin.users.admins.index', can: 'super-admin-only' },
    {
        name: 'Ustawienia',
        icon: 'settings',
        subItems: [
            { name: 'Główne', route: 'admin.general.edit' },
            { name: 'Zgody', route: 'admin.agreements.index' },
            { name: 'Statystyki wyszukiwarki', route: 'admin.search-statistics.index' },
            { name: 'Newsletter', route: 'admin.newsletter.index' },
            { name: 'Integracje', route: 'admin.integrations.edit' },
            { name: 'CMS', route: 'admin.cms.index' },
            { name: 'Baner', route: 'admin.admin-banners.index' },
            { name: 'Profil admina', route: 'profile.show' },
        ],
        can: 'super-admin-only'
    },
];

const confirmingLogout = ref(false);
const openGroups = ref({});

const toggleGroup = (groupName) => {
    openGroups.value[groupName] = !openGroups.value[groupName];
};

// Initialize groups as open if they contain the current route
menuItems.forEach(item => {
    if (item.subItems) {
        const hasActiveSubItem = item.subItems.some(sub => sub.route && route().current(sub.route));
        if (hasActiveSubItem) {
            openGroups.value[item.name] = true;
        }
    }
});

const confirmLogout = () => {
    confirmingLogout.value = true;
};

const logout = () => {
    router.post(route('logout'));
};

const getIcon = (name) => {
    const icons = {
        dashboard: '<path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6A2.25 2.25 0 0 1 6 3.75h2.25A2.25 2.25 0 0 1 10.5 6v2.25a2.25 2.25 0 0 1-2.25 2.25H6a2.25 2.25 0 0 1-2.25-2.25V6ZM3.75 15.75A2.25 2.25 0 0 1 6 13.5h2.25a2.25 2.25 0 0 1 2.25 2.25V18a2.25 2.25 0 0 1-2.25 2.25H6A2.25 2.25 0 0 1 3.75 18v-2.25ZM13.5 6a2.25 2.25 0 0 1 2.25-2.25H18A2.25 2.25 0 0 1 20.25 6v2.25A2.25 2.25 0 0 1 18 10.5h-2.25a2.25 2.25 0 0 1-2.25-2.25V6ZM13.5 15.75a2.25 2.25 0 0 1 2.25-2.25H18a2.25 2.25 0 0 1 2.25 2.25V18A2.25 2.25 0 0 1 18 20.25h-2.25A2.25 2.25 0 0 1 13.5 18v-2.25Z" />',
        firms: '<path stroke-linecap="round" stroke-linejoin="round" d="M2.25 21h19.5m-18-18v18m10.5-18v18m6-13.5V21M6.75 6.75h.75m-.75 3h.75m-.75 3h.75m3-6h.75m-.75 3h.75m-.75 3h.75M6.75 21v-3.375c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21M3 3h12m-.75 4.5H21m-3.75 3.75h.008v.008h-.008v-.008Zm0 3h.008v.008h-.008v-.008Z" />',
        users: '<path stroke-linecap="round" stroke-linejoin="round" d="M15 19.128a9.38 9.38 0 0 0 2.625.372 9.337 9.337 0 0 0 4.121-.952 4.125 4.125 0 0 0-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 0 1 8.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0 1 11.964-3.07M12 6.375a3.375 3.375 0 1 1-6.75 0 3.375 3.375 0 0 1 6.75 0Zm8.25 2.25a2.625 2.625 0 1 1-5.25 0 2.625 2.625 0 0 1 5.25 0Z" />',
        jobs: '<path stroke-linecap="round" stroke-linejoin="round" d="M12 3v18m9-9H3" />',
        recruitment: '<path stroke-linecap="round" stroke-linejoin="round" d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />',
        finance: '<path stroke-linecap="round" stroke-linejoin="round" d="M12 6v12m-3-2.818.879.659c1.171.879 3.07.879 4.242 0 1.172-.879 1.172-2.303 0-3.182C13.536 12.219 12.768 12 12 12c-.725 0-1.45-.22-2.003-.659-1.106-.854-1.106-2.23 0-3.084 1.144-.88 2.991-.88 4.135 0L15 9M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />',
        foundations: '<path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12Z" />',
        marketing: '<path stroke-linecap="round" stroke-linejoin="round" d="M10.34 15.84c-.688-.06-1.386-.09-2.09-.09H7.5a4.5 4.5 0 1 1 0-9h.75c.704 0 1.402-.03 2.09-.09m0 9.18c.253.962.584 1.892.985 2.783.247.55.06 1.21-.463 1.511l-.657.38c-.551.318-1.26.117-1.527-.461a20.845 20.845 0 0 1-1.44-4.213m4.102-1.511a21.363 21.363 0 0 1 0-9.18m0 9.18c.492.03.984.065 1.474.103a21.056 21.056 0 0 1 2.368.297c.48.093.842.502.842.99v3.08c0 .487-.36.896-.838.99a21.057 21.057 0 0 1-2.365.298c-.495.039-.989.073-1.481.103m0-9.18c.492-.03.984-.065 1.474-.103a21.056 21.056 0 0 0 2.368-.297c.48-.093.842-.502.842-.99V6.25c0-.487-.36-.896-.838-.99a21.056 21.056 0 0 0-2.365-.298c-.495-.039-.989-.073-1.481-.103m0 9.18v-9.18" />',
        security: '<path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75m-3-7.036A11.959 11.959 0 0 1 3.598 6 11.99 11.99 0 0 0 3 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.333 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285Z" />',
        admins: '<path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" />',
        settings: '<path stroke-linecap="round" stroke-linejoin="round" d="M9.594 3.94c.09-.542.56-.94 1.11-.94h2.593c.55 0 1.02.398 1.11.94l.213 1.281c.063.374.313.686.645.87.074.04.147.083.22.127.324.196.72.257 1.075.124l1.217-.456a1.125 1.125 0 0 1 1.37.49l1.296 2.247a1.125 1.125 0 0 1-.26 1.431l-1.003.827c-.293.24-.438.613-.431.992a6.759 6.759 0 0 1 0 .255c-.007.378.138.75.43.99l1.005.828c.424.35.534.954.26 1.43l-1.298 2.247a1.125 1.125 0 0 1-1.369.491l-1.217-.456c-.355-.133-.75-.072-1.076.124a6.57 6.57 0 0 1-.22.127c-.332.183-.582.495-.644.869l-.213 1.28c-.09.543-.56.941-1.11.941h-2.594c-.55 0-1.02-.398-1.11-.94l-.213-1.281c-.062-.374-.312-.686-.644-.87a6.52 6.52 0 0 1-.22-.127c-.325-.196-.72-.257-1.076-.124l-1.217.456a1.125 1.125 0 0 1-1.369-.49l-1.297-2.247a1.125 1.125 0 0 1 .26-1.431l1.004-.827c.292-.24.437-.613.43-.992a6.932 6.932 0 0 1 0-.255c.007-.378-.138-.75-.43-.99l-1.004-.828a1.125 1.125 0 0 1-.26-1.43l1.297-2.247a1.125 1.125 0 0 1 1.37-.491l1.216.456c.356.133.751.072 1.076-.124.072-.044.146-.087.22-.127.332-.183.582-.495.644-.869l.214-1.281Z" /><path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />',
    };
    return icons[name] || '';
};
</script>

<template>
        <div v-if="hasRole('admin')" class="fixed inset-y-0 left-0 w-72 bg-[#0A2C5C] text-white overflow-y-auto z-50 transition-all duration-300 border-r border-white/5 shadow-xl shadow-blue-900/40">
        <div class="p-10 flex flex-col h-full min-h-screen">
            <!-- Logo & Notifications -->
            <div class="mb-4 flex items-center justify-between">
                <div class="flex items-center gap-3">
                    <Link :href="route('dashboard')" class="flex items-center gap-3 group">
                        <ApplicationMarkWhite class="h-8 w-auto transition-all" />
                        <span class="text-xl font-black tracking-tight uppercase leading-[0.85]">Admin<br/><span class="text-blue-400 text-[8px] tracking-widest font-bold">Panel</span></span>
                    </Link>
                </div>

                <div class="flex items-center gap-2">
                    <div class="relative bg-white/5 p-2 rounded-xl hover:bg-white/10 transition-all group">
                        <NotificationBell class="!text-white" />
                    </div>
                </div>
            </div>
            <div class="mb-8 flex items-center justify-center gap-4">
                <Link href="/" class="p-2 bg-white/5 rounded-xl hover:bg-white/10 transition-all group" title="Strona główna">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-5 h-5 text-blue-400">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m2.25 12 8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
                    </svg>
                </Link>

                <button
                    @click="confirmLogout"
                    class="p-2 bg-red-500/10 rounded-xl hover:bg-red-500 text-red-400 hover:text-white transition-all group"
                    title="Wyloguj"
                >
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-5 h-5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 9V5.25A2.25 2.25 0 0 0 13.5 3h-6a2.25 2.25 0 0 0-2.25 2.25v13.5A2.25 2.25 0 0 0 7.5 21h6a2.25 2.25 0 0 0 2.25-2.25V15M12 9l-3 3m0 0 3 3m-3-3h12.75" />
                    </svg>
                </button>
            </div>

            <!-- Navigation -->
            <nav class="space-y-6 flex-1">
                <div v-for="item in menuItems" :key="item.name">
                    <template v-if="!item.can || (item.can === 'super-admin-only' && $page.props.roles && $page.props.roles.includes('admin') && !$page.props.roles.includes('admin-sub'))">
                        <!-- Main Item -->
                        <template v-if="item.subItems">
                        <div class="mb-4">
                            <div
                                @click="toggleGroup(item.name)"
                                class="flex items-center justify-between gap-3 text-white/20 mb-3 px-4 cursor-pointer hover:text-white/60 transition-all group/header"
                            >
                                <div class="flex items-center gap-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-5 h-5" v-html="getIcon(item.icon)"></svg>
                                    <span class="text-[10px] font-black uppercase tracking-widest">{{ item.name }}</span>
                                    <span v-if="item.name === 'Bezpieczeństwo' && $page.props.unreadTicketsCount > 0" class="ml-2 bg-red-500 text-white text-[8px] font-bold px-1.5 py-0.5 rounded-full shadow-lg shadow-red-500/50">
                                        {{ $page.props.unreadTicketsCount }}
                                    </span>
                                </div>
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    fill="none"
                                    viewBox="0 0 24 24"
                                    stroke-width="3"
                                    stroke="currentColor"
                                    class="w-3 h-3 transition-transform duration-300"
                                    :class="{'rotate-180': openGroups[item.name]}"
                                >
                                    <path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5" />
                                </svg>
                            </div>
                            <Transition
                                enter-active-class="transition duration-200 ease-out"
                                enter-from-class="transform scale-95 opacity-0 -translate-y-2"
                                enter-to-class="transform scale-100 opacity-100 translate-y-0"
                                leave-active-class="transition duration-150 ease-in"
                                leave-from-class="transform scale-100 opacity-100 translate-y-0"
                                leave-to-class="transform scale-95 opacity-0 -translate-y-2"
                            >
                                <div v-show="openGroups[item.name]" class="space-y-1 pl-12">
                                    <template v-for="sub in item.subItems" :key="sub.name">
                                        <Link
                                            v-if="!sub.can || (sub.can === 'super-admin-only' && $page.props.roles && $page.props.roles.includes('admin') && !$page.props.roles.includes('admin-sub'))"
                                            :href="sub.route ? route(sub.route) : '#'"
                                            class="block py-2 text-[10px] font-black text-white/40 hover:text-white transition-all uppercase tracking-widest group relative"
                                            :class="{'text-white border-r-4 border-blue-400 -mr-10 pr-10 bg-gradient-to-l from-blue-400/10 to-transparent': sub.route && route().current(sub.route)}"
                                        >
                                            {{ sub.name }}
                                            <span v-if="sub.route === 'admin.tickets.index' && $page.props.unreadTicketsCount > 0" class="absolute right-4 top-1/2 -translate-y-1/2 bg-red-500 text-white text-[8px] font-bold px-1.5 py-0.5 rounded-full shadow-lg shadow-red-500/50">
                                            {{ $page.props.unreadTicketsCount }}
                                        </span>
                                        </Link>
                                    </template>


                                </div>
                            </Transition>
                        </div>
                    </template>
                    <template v-else>
                        <Link
                            :href="item.route ? route(item.route) : '#'"
                            class="flex items-center gap-4 py-3 px-4 rounded-xl transition-all group relative overflow-hidden"
                            :class="item.route && route().current(item.route) ? 'bg-white/10 text-white shadow-lg shadow-blue-950/20' : 'text-white/30 hover:text-white hover:bg-white/5'"
                        >
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-5 h-5 transition-all" v-html="getIcon(item.icon)"></svg>
                            <span class="text-[10px] font-black uppercase tracking-widest">{{ item.name }}</span>
                            <div v-if="item.route && route().current(item.route)" class="absolute left-0 top-1/2 -translate-y-1/2 w-1 h-6 bg-blue-400 rounded-r-full shadow-lg shadow-blue-400/50"></div>
                        </Link>
                    </template>
                </template>
                </div>
            </nav>

            <!-- Footer Info -->
            <div class="mt-8 pt-8 border-t border-white/5">
                <div class="flex items-center gap-4 mb-6 p-4 rounded-2xl bg-white/5 border border-white/5 shadow-inner">
                    <div class="shrink-0 w-10 h-10 rounded-xl bg-gradient-to-br from-blue-400 via-blue-500 to-indigo-600 shadow-lg shadow-blue-500/20 flex items-center justify-center text-white font-black text-sm border border-white/10">
                        {{ $page.props.auth.user.name.substring(0, 1).toUpperCase() }}
                    </div>
                    <div class="overflow-hidden">
                        <p class="text-[10px] font-black uppercase tracking-widest truncate text-white">{{ $page.props.auth.user.name }}</p>
                        <p class="text-[8px] font-bold text-white/30 uppercase tracking-widest truncate mt-1">{{ $page.props.auth.user.email }}</p>
                    </div>
                </div>

                <button
                    @click="confirmLogout"
                    class="w-full flex items-center justify-center gap-4 py-4 rounded-xl bg-red-500/5 hover:bg-red-500 text-red-400 hover:text-white transition-all group shadow-sm hover:shadow-red-500/20 border border-red-500/10 hover:border-red-500"
                >
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-5 h-5 transition-all">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 9V5.25A2.25 2.25 0 0 0 13.5 3h-6a2.25 2.25 0 0 0-2.25 2.25v13.5A2.25 2.25 0 0 0 7.5 21h6a2.25 2.25 0 0 0 2.25-2.25V15M12 9l-3 3m0 0 3 3m-3-3h12.75" />
                    </svg>
                    <span class="text-[10px] font-black uppercase tracking-widest">{{ __('translate.logout') }}</span>
                </button>
            </div>
        </div>

        <!-- Logout Confirmation Modal -->
        <ConfirmationModal :show="confirmingLogout" @close="confirmingLogout = false">
            <template #title>
                Potwierdź wylogowanie
            </template>

            <template #content>
                Czy na pewno chcesz się wylogować z panelu administratora?
            </template>

            <template #footer>
                <SecondaryButton @click="confirmingLogout = false">
                    Anuluj
                </SecondaryButton>

                <DangerButton
                    class="ml-3"
                    @click="logout"
                >
                    Wyloguj
                </DangerButton>
            </template>
        </ConfirmationModal>
    </div>
</template>

<style scoped>
/* Custom scrollbar for sidebar */
div::-webkit-scrollbar {
    width: 4px;
}
div::-webkit-scrollbar-track {
    background: transparent;
}
div::-webkit-scrollbar-thumb {
    background: rgba(255, 255, 255, 0.1);
    border-radius: 10px;
}
div::-webkit-scrollbar-thumb:hover {
    background: rgba(255, 255, 255, 0.2);
}
</style>
