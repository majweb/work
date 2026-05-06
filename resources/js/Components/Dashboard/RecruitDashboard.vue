<template>
    <div class="max-w-[1600px] mx-auto sm:px-6 lg:px-8">
        <div class="p-6 bg-white overflow-hidden shadow-xl sm:rounded-lg">
            <div class="flex items-center justify-between mb-8 px-4">
                <div>
                    <h3 class="text-2xl font-black text-[#0A2C5C] uppercase tracking-tight">
                        {{ __('translate.recruitDashboard') || 'Pulpit Rekrutera' }}
                    </h3>
                    <p class="text-[10px] font-bold text-gray-400 uppercase tracking-widest mt-1">
                        Zarządzaj swoimi ofertami i aplikacjami
                    </p>
                </div>
            </div>

            <!-- Admin Banner -->
            <div v-if="adminBanner" class="mb-8 px-4">
                <div class="relative group overflow-hidden rounded-[2rem] shadow-xl border border-gray-100 transition-all duration-700 hover:shadow-2xl">
                    <img
                        :src="adminBanner.image"
                        class="w-full h-auto object-cover transition-transform duration-1000 group-hover:scale-105"
                        alt="Admin Banner"
                    />
                </div>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 mb-12">
                <!-- STATYSTYKI -->
                <div class="bg-white rounded-[3rem] shadow-xl shadow-blue-900/5 border border-gray-100 p-10 flex flex-col h-full relative overflow-hidden group">
                    <div class="absolute top-0 right-0 w-32 h-32 bg-blue-50/50 rounded-full -mr-16 -mt-16 blur-2xl group-hover:bg-blue-100/50 transition-colors"></div>
                    <div class="mb-8 relative z-10 flex items-center justify-between">
                        <h2 class="text-[10px] font-black text-[#0A2C5C] uppercase tracking-[0.2em]">{{ __('translate.recruiterStatistics') }}</h2>
                        <div class="w-8 h-8 bg-blue-50 rounded-xl flex items-center justify-center">
                            <svg class="w-4 h-4 text-[#00a0e3]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" /></svg>
                        </div>
                    </div>
                    <div class="flex-1 flex items-center justify-center min-h-[300px] relative z-10">
                        <component
                            :is="VueApexChartsLazy"
                            v-if="chartData && VueApexChartsLazy"
                            width="100%"
                            height="350"
                            type="donut"
                            :options="chartOptions"
                            :series="chartSeries"
                        />
                        <div v-else-if="!chartData" class="text-center">
                            <div class="w-16 h-16 bg-gray-50 rounded-full flex items-center justify-center mx-auto mb-4">
                                <svg class="w-8 h-8 text-gray-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M11 3.055A9.001 9.001 0 1020.945 13H11V3.055z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M20.488 9H15V3.512A9.025 9.003 0 0120.488 9z" />
                                </svg>
                            </div>
                            <p class="text-[10px] font-black text-gray-400 uppercase tracking-widest">{{ __('translate.NoData') }}</p>
                        </div>
                    </div>
                </div>

                <!-- APLIKACJE -->
                <div class="bg-white rounded-[3rem] shadow-xl shadow-blue-900/5 border border-gray-100 p-10 col-span-1 lg:col-span-2 flex flex-col relative overflow-hidden">
                    <div class="absolute bottom-0 left-0 w-48 h-48 bg-red-50/20 rounded-full -ml-24 -mb-24 blur-3xl opacity-50"></div>
                    <div class="flex justify-between items-center mb-10 relative z-10">
                        <div>
                            <h2 class="text-2xl font-black text-[#0A2C5C] uppercase tracking-tight">{{ __('translate.aplications') }}</h2>
                            <p class="text-[10px] font-bold text-gray-400 uppercase tracking-widest mt-1">Ostatnio otrzymane zgłoszenia</p>
                        </div>
                        <Link
                            :href="route('project-aplications-recruits.index')"
                            class="group flex items-center gap-2 px-6 py-3 bg-gray-50 text-[#0A2C5C] text-[10px] font-black rounded-2xl hover:bg-blue-50 transition-all uppercase tracking-widest border border-gray-100"
                        >
                            {{ __('translate.details') }}
                            <span class="text-lg group-hover:translate-x-1 transition-transform">→</span>
                        </Link>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-8 flex-1 min-h-0 relative z-10">
                        <!-- LISTA -->
                        <div class="space-y-4 max-h-[500px] overflow-y-auto pr-2 custom-scrollbar">
                            <div
                                v-for="application in lastAplications"
                                :key="application.id"
                                @click="selectApplication(application)"
                                class="group relative flex items-center gap-4 p-5 rounded-[2rem] transition-all duration-300 border cursor-pointer"
                                :class="selectedApplication?.id === application.id
                                    ? 'bg-[#0A2C5C] border-transparent shadow-xl shadow-blue-900/20'
                                    : 'bg-white border-gray-50 hover:bg-gray-50 hover:border-blue-100 shadow-sm'"
                            >
                                <div class="w-14 h-14 rounded-2xl overflow-hidden shadow-sm shrink-0 border-2 transition-all" :class="selectedApplication?.id === application.id ? 'border-blue-400/30' : 'border-white'">
                                    <img v-if="application.user?.profile_photo_url" :src="application.user?.profile_photo_url" :alt="application.user?.name" class="w-full h-full object-cover"/>
                                    <div v-else class="w-full h-full bg-gray-100 flex items-center justify-center text-gray-400 font-black text-sm uppercase">
                                        {{ (application.name?.[0]||'') + (application.surname?.[0]||'') }}
                                    </div>
                                </div>

                                <div class="flex-1 min-w-0">
                                    <h4 class="text-sm font-black truncate leading-tight transition-colors" :class="selectedApplication?.id === application.id ? 'text-white' : 'text-[#0A2C5C]'">
                                        {{ application.user?.name }}
                                    </h4>
                                    <p class="text-[9px] font-black uppercase tracking-widest mt-1 transition-colors" :class="selectedApplication?.id === application.id ? 'text-blue-200' : 'text-gray-400'">
                                        {{ application.position }}
                                    </p>
                                </div>

                                <div v-if="selectedApplication?.id === application.id" class="shrink-0">
                                    <svg class="h-5 w-5 text-[#00a0e3]" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                                    </svg>
                                </div>
                            </div>

                            <div v-if="!lastAplications.length" class="flex flex-col items-center justify-center py-16 text-center bg-gray-50/50 rounded-[2.5rem] border border-dashed border-gray-200">
                                <p class="text-[10px] font-black text-gray-400 uppercase tracking-widest">{{ __('translate.noApplicationsAvailable') }}</p>
                            </div>
                        </div>

                        <!-- PANEL SZCZEGÓŁÓW -->
                        <div class="relative bg-gray-50/50 rounded-[2.5rem] p-8 border border-gray-100 flex flex-col min-h-[400px]">
                            <div v-if="selectedApplication" class="h-full flex flex-col">
                                <div class="flex gap-4 items-center mb-8">
                                    <div class="relative">
                                        <img
                                            :src="selectedApplication.user?.profile_photo_url"
                                            :alt="selectedApplication.user?.name"
                                            class="w-20 h-20 rounded-2xl object-cover shadow-lg border-4 border-white"
                                        />
                                        <div class="absolute -bottom-1 -right-1 w-6 h-6 bg-white rounded-full flex items-center justify-center shadow-md border border-gray-50">
                                            <div class="w-3 h-3 bg-[#00a0e3] rounded-full animate-pulse"></div>
                                        </div>
                                    </div>
                                    <div class="flex-1 min-w-0">
                                        <p class="text-[9px] font-black text-[#00a0e3] uppercase tracking-widest mb-1">ID {{ selectedApplication.id }}</p>
                                        <h4 class="font-black text-[#0A2C5C] text-xl truncate uppercase tracking-tight">{{ selectedApplication.user?.name }}</h4>
                                        <p class="text-[10px] font-bold text-gray-400 uppercase tracking-widest mt-1">{{ moment(selectedApplication.created_at).format('DD.MM.YYYY') }}</p>
                                    </div>
                                </div>

                                <div class="mb-8">
                                    <p class="text-[9px] font-black text-gray-400 uppercase tracking-widest mb-2">{{ __('translate.applying_for') || 'Aplikuje na stanowisko' }}</p>
                                    <h5 class="text-sm font-black text-[#0A2C5C] uppercase tracking-tight leading-tight">{{ selectedApplication.position }}</h5>
                                </div>

                                <!-- STATUSY -->
                                <div class="space-y-4 mb-8">
                                    <p class="text-[9px] font-black text-gray-400 uppercase tracking-widest">{{ __('translate.change_status') || 'Zmień status' }}</p>
                                    <div class="grid grid-cols-3 gap-3">
                                        <button
                                            @click="updateStatus(selectedApplication?.id, 'yes')"
                                            :class="selectedApplication.status === 'yes'
                                                ? 'bg-[#0A2C5C] text-white shadow-xl shadow-blue-900/20'
                                                : 'bg-white text-gray-600 border border-gray-100 hover:border-[#0A2C5C] hover:text-[#0A2C5C] shadow-sm'"
                                            class="px-3 py-4 text-[9px] font-black uppercase tracking-widest rounded-2xl transition-all"
                                        >
                                            {{ __('translate.statusYes') }}
                                        </button>

                                        <button
                                            @click="updateStatus(selectedApplication?.id, 'maybe')"
                                            :class="selectedApplication.status === 'maybe'
                                                ? 'bg-[#00a0e3] text-white shadow-xl shadow-blue-400/20'
                                                : 'bg-white text-gray-600 border border-gray-100 hover:border-[#00a0e3] hover:text-[#00a0e3] shadow-sm'"
                                            class="px-3 py-4 text-[9px] font-black uppercase tracking-widest rounded-2xl transition-all"
                                        >
                                            {{ __('translate.statusMaybe') }}
                                        </button>

                                        <button
                                            @click="updateStatus(selectedApplication?.id, 'no')"
                                            :class="selectedApplication.status === 'no'
                                                ? 'bg-[#e31e24] text-white shadow-xl shadow-red-900/20'
                                                : 'bg-white text-gray-600 border border-gray-100 hover:border-[#e31e24] hover:text-[#e31e24] shadow-sm'"
                                            class="px-3 py-4 text-[9px] font-black uppercase tracking-widest rounded-2xl transition-all"
                                        >
                                            {{ __('translate.statusNo') }}
                                        </button>
                                    </div>
                                    <div class="flex justify-end" v-if="selectedApplication.status_changed_at">
                                        <span class="text-[8px] font-black text-gray-300 uppercase tracking-widest">{{ __('translate.updated') }}: {{ selectedApplication.status_changed_at }}</span>
                                    </div>
                                </div>

                                <!-- NOTATKA -->
                                <div class="flex-1">
                                    <p class="text-[9px] font-black text-gray-400 uppercase tracking-widest mb-2">{{ __('translate.internalNote') || 'Notatka wewnętrzna' }}</p>
                                    <TextareaLimit
                                        id="note"
                                        v-model="selectedApplication.note"
                                        :limit="500"
                                        :placeholder="__('translate.noteContent')"
                                        rows="3"
                                        class="w-full text-xs font-bold rounded-2xl border-0 bg-white shadow-inner focus:ring-4 focus:ring-blue-100 transition-all resize-none text-[#0A2C5C] placeholder:text-gray-200"
                                    />
                                </div>

                                <!-- AKCJE -->
                                <div class="grid grid-cols-2 gap-4 mt-8 pt-8 border-t border-gray-100">
                                    <button
                                        @click="saveNote(selectedApplication.id, selectedApplication.note)"
                                        class="px-6 py-4 bg-[#0A2C5C] text-white text-[10px] font-black uppercase tracking-widest rounded-2xl hover:bg-[#00a0e3] shadow-lg shadow-blue-900/10 transition-all duration-500 hover:-translate-y-1"
                                    >
                                        {{ __('translate.Save') }}
                                    </button>

                                    <Link
                                        :href="route('project-aplications-recruits.show', selectedApplication.id)"
                                        class="px-6 py-4 bg-white text-[#0A2C5C] text-[10px] font-black uppercase tracking-widest rounded-2xl border border-gray-100 shadow-sm hover:shadow-xl hover:shadow-blue-900/5 hover:bg-gray-50 transition-all duration-500 hover:-translate-y-1 text-center flex items-center justify-center gap-2"
                                    >
                                        {{ __('translate.details') }}
                                        <span class="text-lg">→</span>
                                    </Link>
                                </div>
                            </div>

                            <!-- PLACEHOLDER BRAKU WYBORU -->
                            <div v-else class="flex-1 flex flex-col items-center justify-center text-center p-8">
                                <div class="w-24 h-24 bg-white rounded-[2rem] flex items-center justify-center mb-6 shadow-xl shadow-blue-900/5 border border-gray-50">
                                    <svg class="w-12 h-12 text-gray-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15 15l-2 5L9 9l11 4-5 2zm0 0l5 5M7.188 2.239l.777 2.897M5.136 7.965l-2.898-.777M13.95 4.05l-2.122 2.122m-5.657 5.656l-2.12 2.122" />
                                    </svg>
                                </div>
                                <h3 class="text-[10px] font-black text-[#0A2C5C] uppercase tracking-[0.2em] mb-3">{{ __('translate.noApplicationSelected') }}</h3>
                                <p class="text-[10px] font-bold text-gray-400 uppercase tracking-widest leading-relaxed max-w-[200px]">{{ __('translate.selectApplicationToViewDetails') }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- DOLNA SEKCJA -->
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 pb-12">
                <!-- POWIADOMIENIA -->
                <div class="bg-white rounded-[3rem] shadow-xl shadow-blue-900/5 border border-gray-100 p-10 flex flex-col relative overflow-hidden">
                    <div class="absolute top-0 right-0 w-32 h-32 bg-blue-50/30 rounded-full -mr-16 -mt-16 blur-2xl"></div>
                    <div class="flex justify-between items-center mb-10 relative z-10">
                        <h2 class="text-[10px] font-black text-[#0A2C5C] uppercase tracking-[0.2em]">{{ __('translate.notifications') }}</h2>
                        <Link preserveScroll v-if="usePage().props.unreadNotifications" :href="route('notifications.markAllAsRead')" method="post" as="button" class="text-[10px] font-black text-[#e31e24] hover:text-red-700 transition-colors uppercase tracking-widest">
                            {{ __('translate.markAllAsRead') }}
                        </Link>
                    </div>

                    <div class="flex-1 overflow-hidden relative z-10">
                        <ul class="space-y-4 max-h-[500px] overflow-y-auto pr-2 custom-scrollbar">
                            <li v-for="notification in notifications" :key="notification.id"
                                class="group relative flex items-start gap-4 p-5 rounded-[2rem] transition-all duration-300 border border-transparent"
                                :class="[!notification.read_at ? 'bg-blue-50/50 border-blue-100 shadow-lg shadow-blue-900/5 hover:bg-white' : 'hover:bg-gray-50 hover:border-gray-100']"
                            >
                                <div class="mt-1.5 shrink-0">
                                    <div v-if="!notification.read_at" class="w-2.5 h-2.5 bg-[#00a0e3] rounded-full animate-pulse shadow-[0_0_12px_rgba(0,160,227,0.5)] group-hover:scale-125 transition-transform"></div>
                                    <div v-else class="w-2.5 h-2.5 bg-gray-200 rounded-full opacity-50"></div>
                                </div>

                                <div class="flex-1 min-w-0">
                                    <button v-if="!notification.read_at"
                                            class="w-full text-left focus:outline-none"
                                            @click="markAsRead(notification.id)"
                                    >
                                        <p class="text-xs font-black text-[#0A2C5C] uppercase tracking-tight leading-snug group-hover:text-[#00a0e3] transition-colors" v-html="formatNotification(notification).title"></p>
                                        <p class="text-[10px] font-bold text-gray-500 mt-2 line-clamp-2 uppercase tracking-widest leading-relaxed" v-html="formatNotification(notification).message"></p>
                                    </button>
                                    <div v-else>
                                        <p class="text-xs font-bold text-gray-400 uppercase tracking-tight leading-snug" v-html="formatNotification(notification).title"></p>
                                        <p class="text-[10px] font-bold text-gray-300 mt-1 line-clamp-1 uppercase tracking-widest" v-html="formatNotification(notification).message"></p>
                                    </div>
                                    <p class="mt-2 text-[8px] font-black text-gray-300 uppercase tracking-widest" v-if="notification.created_at">
                                        {{ moment(notification.created_at).format('DD.MM.YYYY HH:mm') }}
                                    </p>
                                </div>

                                <div v-if="!notification.read_at" class="absolute right-5 top-1/2 -translate-y-1/2 opacity-0 group-hover:opacity-100 transition-opacity">
                                    <span class="text-lg text-[#00a0e3]">→</span>
                                </div>
                            </li>
                        </ul>

                        <div v-if="!notifications.length" class="flex flex-col items-center justify-center py-20 bg-gray-50/50 rounded-[2.5rem] border border-dashed border-gray-200">
                            <div class="w-20 h-20 bg-white rounded-full flex items-center justify-center mb-6 shadow-xl shadow-blue-900/5">
                                <svg class="w-10 h-10 text-gray-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
                                </svg>
                            </div>
                            <p class="text-[10px] font-black text-gray-400 uppercase tracking-widest">{{ __('translate.noNotifications') }}</p>
                        </div>
                    </div>
                </div>

                <!-- OFERTY -->
                <div class="bg-white rounded-[3rem] shadow-xl shadow-blue-900/5 border border-gray-100 p-10 col-span-1 lg:col-span-2 flex flex-col relative overflow-hidden">
                    <div class="absolute bottom-0 right-0 w-64 h-64 bg-gray-50 rounded-full -mr-32 -mb-32 blur-3xl opacity-50"></div>
                    <div class="flex justify-between items-center mb-10 relative z-10">
                        <div>
                            <h2 class="text-2xl font-black text-[#0A2C5C] uppercase tracking-tight">{{ __('translate.offerts') }}</h2>
                            <p class="text-[10px] font-bold text-gray-400 uppercase tracking-widest mt-1">Zarządzaj aktywnymi rekrutacjami</p>
                        </div>
                        <Link
                            :href="route('project-recruits.index')"
                            class="group flex items-center gap-2 px-6 py-3 bg-gray-50 text-[#0A2C5C] text-[10px] font-black rounded-2xl hover:bg-blue-50 transition-all uppercase tracking-widest border border-gray-100"
                        >
                            {{ __('translate.details') }}
                            <span class="text-lg group-hover:translate-x-1 transition-transform">→</span>
                        </Link>
                    </div>

                    <!-- LEGENDA KOLORÓW -->
                    <div class="mb-10 p-6 bg-gray-50/50 rounded-[2.5rem] border border-gray-100 relative z-10">
                        <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                            <div class="flex items-center gap-3 bg-white p-3.5 rounded-2xl border border-gray-50 shadow-sm transition-all hover:shadow-md">
                                <div class="w-3 h-3 rounded-full bg-[#0A2C5C] shadow-lg shadow-blue-900/20"></div>
                                <span class="text-[9px] font-black text-gray-500 uppercase tracking-widest">{{ __('translate.labels.yes') }}</span>
                            </div>
                            <div class="flex items-center gap-3 bg-white p-3.5 rounded-2xl border border-gray-50 shadow-sm transition-all hover:shadow-md">
                                <div class="w-3 h-3 rounded-full bg-[#e31e24] shadow-lg shadow-red-900/20"></div>
                                <span class="text-[9px] font-black text-gray-500 uppercase tracking-widest">{{ __('translate.labels.no') }}</span>
                            </div>
                            <div class="flex items-center gap-3 bg-white p-3.5 rounded-2xl border border-gray-50 shadow-sm transition-all hover:shadow-md">
                                <div class="w-3 h-3 rounded-full bg-[#00a0e3] shadow-lg shadow-blue-400/20"></div>
                                <span class="text-[9px] font-black text-gray-500 uppercase tracking-widest">{{ __('translate.labels.maybe') }}</span>
                            </div>
                            <div class="flex items-center gap-3 bg-white p-3.5 rounded-2xl border border-gray-50 shadow-sm transition-all hover:shadow-md">
                                <div class="w-3 h-3 rounded-full bg-gray-300"></div>
                                <span class="text-[9px] font-black text-gray-500 uppercase tracking-widest">{{ __('translate.labels.sent') }}</span>
                            </div>
                        </div>
                    </div>

                    <div class="space-y-6 max-h-[600px] overflow-y-auto pr-2 custom-scrollbar relative z-10">
                        <div
                            v-for="project in projects"
                            :key="project.id"
                            class="group relative bg-white border border-gray-50 rounded-[2.5rem] p-8 hover:shadow-2xl hover:shadow-blue-900/10 transition-all duration-500 hover:-translate-y-2 border-gray-100 shadow-xl shadow-blue-900/5"
                        >
                            <div class="flex flex-col sm:flex-row items-start sm:items-center justify-between gap-6">
                                <div class="flex-1 min-w-0">
                                    <div class="flex items-center gap-3 mb-4">
                                        <div class="inline-flex items-center gap-2 px-3 py-1.5 bg-blue-50 rounded-xl border border-blue-100/50 shadow-sm">
                                            <div class="w-1.5 h-1.5 rounded-full bg-[#00a0e3] animate-pulse"></div>
                                            <p class="text-[9px] font-black text-[#0A2C5C] uppercase tracking-widest">ID {{ project.id }}</p>
                                        </div>
                                        <span
                                            class="px-3 py-1.5 text-[9px] font-black uppercase tracking-widest rounded-xl shadow-sm"
                                            :class="project.is_active ? 'bg-green-50 text-green-700 border border-green-100' : 'bg-red-50 text-red-700 border border-red-100'"
                                        >
                                            {{ project.is_active ? __('translate.active') : __('translate.inactive') }}
                                        </span>
                                    </div>
                                    <h4 class="text-xl font-black text-[#0A2C5C] truncate group-hover:text-[#00a0e3] transition-colors uppercase tracking-tight leading-tight">
                                        {{ project.position || __('translate.projectWithoutTitle') }}
                                    </h4>
                                    <p class="text-[10px] font-bold text-gray-400 mt-2 uppercase tracking-widest flex items-center gap-2">
                                        <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                                        {{ project.city }}, {{ project.country }}
                                    </p>
                                </div>

                                <!-- STATYSTYKI Z KOLORAMI -->
                                <div class="flex flex-wrap items-center gap-3">
                                    <!-- Aplikacje Razem -->
                                    <div class="bg-gray-50/80 px-4 py-3 rounded-2xl border border-gray-100 flex flex-col items-center min-w-[70px] shadow-sm">
                                        <span class="text-[8px] font-black text-gray-400 uppercase leading-none mb-1.5 tracking-widest">{{ __('translate.total') }}</span>
                                        <span class="text-sm font-black text-[#0A2C5C] leading-none">{{ project.aplications_count || 0 }}</span>
                                    </div>

                                    <!-- Zaakceptowane (yes) -->
                                    <div class="bg-blue-50/50 px-4 py-3 rounded-2xl border border-blue-100/50 flex flex-col items-center min-w-[70px] shadow-sm">
                                        <span class="text-[8px] font-black text-[#0A2C5C]/50 uppercase leading-none mb-1.5 tracking-widest">{{ __('translate.statusYes') }}</span>
                                        <span class="text-sm font-black text-[#0A2C5C] leading-none">{{ project.yes_count || 0 }}</span>
                                    </div>

                                    <!-- Rozpatrywane (maybe) -->
                                    <div class="bg-cyan-50/50 px-4 py-3 rounded-2xl border border-cyan-100/50 flex flex-col items-center min-w-[70px] shadow-sm">
                                        <span class="text-[8px] font-black text-cyan-600/50 uppercase leading-none mb-1.5 tracking-widest">{{ __('translate.statusMaybe') }}</span>
                                        <span class="text-sm font-black text-cyan-600 leading-none">{{ project.maybe_count || 0 }}</span>
                                    </div>

                                    <Link
                                        :href="route('project-recruits.show', project.id)"
                                        class="w-14 h-14 rounded-2xl bg-gray-50 flex items-center justify-center group-hover:bg-[#0A2C5C] group-hover:text-white transition-all duration-500 border border-gray-100 group-hover:border-transparent group-hover:shadow-xl group-hover:shadow-blue-900/20 group-hover:-translate-y-1"
                                    >
                                        <span class="text-2xl transition-transform duration-500 group-hover:translate-x-1">→</span>
                                    </Link>
                                </div>
                            </div>
                        </div>

                        <div v-if="!projects.length" class="flex flex-col items-center justify-center py-24 text-center bg-gray-50/50 rounded-[3rem] border border-dashed border-gray-200">
                            <div class="w-24 h-24 bg-white rounded-[2rem] flex items-center justify-center mb-8 shadow-xl shadow-blue-900/5">
                                <svg class="w-12 h-12 text-gray-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                                </svg>
                            </div>
                            <h3 class="text-[10px] font-black text-[#0A2C5C] uppercase tracking-[0.2em] mb-3">{{ __('translate.noProjectsAvailable') }}</h3>
                            <p class="text-[10px] font-bold text-gray-400 uppercase tracking-widest leading-relaxed">{{ __('translate.noOtherApplications') }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script setup>
import { computed, ref, shallowRef, onMounted } from 'vue';
import { Link, router, usePage } from '@inertiajs/vue3';
import __ from '@/lang.js';
import moment from "moment";

const props = defineProps({
    applications: {
        type: Array,
        default: () => []
    },
    notifications: {
        type: Array,
        default: () => []
    },
    lastAplications: {
        type: Array,
        default: () => []
    },
    projects: {
        type: Array,
        default: () => []
    },
    chartData: {
        type: Object,
        default: null
    },
    adminBanner: {
        type: Object,
        default: null
    }
});

const page = usePage();
const selectedApplication = ref(null);
const VueApexChartsLazy = shallowRef(null);

onMounted(async () => {
    const ApexChartsModule = await import('vue3-apexcharts');
    VueApexChartsLazy.value = ApexChartsModule.default;
});

// Ustawienie locale dla moment.js
moment.locale(usePage().props.language);

// Obliczenia dla wykresu
const chartSeries = computed(() => {
    if (!props.chartData) return [0, 0, 0, 0];
    return [
        props.chartData.yes || 0,      // Zaakceptowane
        props.chartData.no || 0,       // Odrzucone
        props.chartData.maybe || 0,    // Rozpatrywane
        props.chartData.new || 0       // Wysłane
    ];
});

const chartOptions = computed(() => ({
    chart: {
        type: 'donut',
    },
    labels: [
        __('translate.labels.yes').toUpperCase(),      // Zaakceptowane - status yes
        __('translate.labels.no').toUpperCase(),       // Odrzucone - status no
        __('translate.labels.maybe').toUpperCase(),    // Rozpatrywane - status maybe
        __('translate.labels.sent').toUpperCase()      // Wysłane - status NULL
    ],
    colors: ['#0A2C5C', '#e31e24', '#00a0e3', '#9ca3af'],
    legend: {
        position: 'bottom'
    },
    dataLabels: {
        enabled: true,
        formatter: function (val, opts) {
            return opts.w.config.series[opts.seriesIndex];
        }
    },
    plotOptions: {
        pie: {
            donut: {
                size: '65%',
                labels: {
                    show: true,
                    total: {
                        show: true,
                        label: __('translate.total'),
                        fontSize: '16px',
                        fontWeight: 600
                    }
                }
            }
        }
    }
}));

const selectApplication = (application) => {
    selectedApplication.value = application;
};

const formatNotification = (notification) => {
    const data = notification.data;
    if (!data) return { title: __('translate.unknownNotification'), message: '' };

    const message = data.message ? __(data.message, { ...data, id: data.aplication || data.id }) : '';

    return {
        title: __(data.title || 'translate.newNotification', data) || __('translate.notification'),
        message: message,
        action: data.action ? __(data.action, data) : null,
        actionUrl: data.actionUrl || null
    };
};

// Funkcja do zmiany statusu aplikacji
const updateStatus = (applicationId, status) => {
    if (selectedApplication.value && selectedApplication.value.id === applicationId) {
        selectedApplication.value.status = status;
        selectedApplication.value.status_changed_at = moment().format('DD.MM.YYYY HH:mm');

    }
    router.put(route('project-aplications-recruits.update', applicationId), {
        status
    }, {
        preserveScroll: true,
        preserveState: true
    });
};


// Funkcja do zapisania notatki
const saveNote = (applicationId, note) => {
    router.post(route('project-aplications-recruits.store-note', applicationId), {
        content: note
    }, {
        preserveScroll: true,
        onSuccess: () => {
            // czyszczenie notatki działa na reactive obiekcie
            if (selectedApplication.value && selectedApplication.value.id === applicationId) {
                selectedApplication.value.note = '';
            }
        }
    });
};

const markAsRead = (id) => {
    router.post(
        route('notifications.markAsRead', id),
        {},
        {
            preserveScroll: true,
            preserveState: true,
            only: ['notifications', 'unreadNotifications'],

        }
    );
};

</script>

<style scoped>
.custom-scrollbar::-webkit-scrollbar {
    width: 4px;
}
.custom-scrollbar::-webkit-scrollbar-track {
    background: transparent;
}
.custom-scrollbar::-webkit-scrollbar-thumb {
    background: #e5e7eb;
    border-radius: 10px;
}
.custom-scrollbar::-webkit-scrollbar-thumb:hover {
    background: #d1d5db;
}
</style>
