<template>
    <div class="min-h-screen">
        <div class="max-w-7xl mx-auto space-y-8">
            <!-- GÓRNA SEKCJA - 2 kolumny -->
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                <!-- STATYSTYKI -->
                <div class="bg-white rounded-3xl shadow-sm border border-gray-100 p-8 flex flex-col h-full">
                    <div class="mb-8 text-center lg:text-left">
                        <h2 class="text-xs font-black text-[#0A2C5C] uppercase tracking-[0.2em]">{{ __('translate.recruiterStatistics') }}</h2>
                    </div>
                    <div class="flex-1 flex items-center justify-center min-h-[300px]">
                        <apexchart
                            v-if="chartData"
                            width="100%"
                            height="350"
                            type="donut"
                            :options="chartOptions"
                            :series="chartSeries"
                        />
                        <div v-else class="text-center">
                            <div class="w-16 h-16 bg-gray-50 rounded-full flex items-center justify-center mx-auto mb-4">
                                <svg class="w-8 h-8 text-gray-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M11 3.055A9.001 9.001 0 1020.945 13H11V3.055z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M20.488 9H15V3.512A9.025 9.003 0 0120.488 9z" />
                                </svg>
                            </div>
                            <p class="text-gray-400 font-medium">{{ __('translate.NoData') }}</p>
                        </div>
                    </div>
                </div>

                <!-- APLIKACJE -->
                <div class="bg-white rounded-3xl shadow-sm border border-gray-100 p-8 col-span-1 lg:col-span-2 flex flex-col">
                    <div class="flex justify-between items-center mb-8">
                        <div>
                            <h2 class="text-2xl font-black text-gray-900 uppercase tracking-tight">{{ __('translate.aplications') }}</h2>
                            <p class="text-xs font-bold text-gray-400 uppercase tracking-widest mt-1">Ostatnio otrzymane zgłoszenia</p>
                        </div>
                        <Link
                            :href="route('project-aplications-recruits.index')"
                            class="inline-flex items-center px-4 py-2 bg-red-50 text-red-600 text-xs font-black rounded-xl hover:bg-red-100 transition-all uppercase tracking-widest"
                        >
                            {{ __('translate.details') }}
                            <svg class="w-3 h-3 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 5l7 7-7 7" /></svg>
                        </Link>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-8 flex-1 min-h-0">
                        <!-- LISTA -->
                        <div class="space-y-3 max-h-[500px] overflow-y-auto pr-2 custom-scrollbar">
                            <div
                                v-for="application in lastAplications"
                                :key="application.id"
                                @click="selectApplication(application)"
                                class="group relative flex items-center gap-4 p-4 rounded-2xl transition-all duration-300 border cursor-pointer"
                                :class="selectedApplication?.id === application.id
                                    ? 'bg-[#0A2C5C] border-transparent shadow-lg shadow-blue-900/20'
                                    : 'bg-white border-gray-50 hover:bg-gray-50 hover:border-gray-100 shadow-sm'"
                            >
                                <div class="w-12 h-12 rounded-xl overflow-hidden shadow-sm shrink-0 border-2" :class="selectedApplication?.id === application.id ? 'border-blue-400/30' : 'border-white'">
                                    <img v-if="application.user?.profile_photo_url" :src="application.user?.profile_photo_url" :alt="application.user?.name" class="w-full h-full object-cover"/>
                                    <div v-else class="w-full h-full bg-gray-100 flex items-center justify-center text-gray-400 font-black text-sm">
                                        {{ (application.name?.[0]||'') + (application.surname?.[0]||'') }}
                                    </div>
                                </div>

                                <div class="flex-1 min-w-0">
                                    <h4 class="text-sm font-black truncate leading-tight" :class="selectedApplication?.id === application.id ? 'text-white' : 'text-gray-900'">
                                        {{ application.user?.name }}
                                    </h4>
                                    <p class="text-[10px] font-bold uppercase tracking-tight mt-0.5" :class="selectedApplication?.id === application.id ? 'text-blue-200' : 'text-gray-400'">
                                        {{ application.position }}
                                    </p>
                                </div>

                                <div v-if="selectedApplication?.id === application.id" class="shrink-0">
                                    <svg class="h-5 w-5 text-blue-400" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                                    </svg>
                                </div>
                            </div>

                            <div v-if="!lastAplications.length" class="flex flex-col items-center justify-center py-12 text-center bg-gray-50/50 rounded-[2rem] border border-dashed border-gray-200">
                                <p class="text-xs font-bold text-gray-400 uppercase tracking-widest">{{ __('translate.noApplicationsAvailable') }}</p>
                            </div>
                        </div>

                        <!-- PANEL SZCZEGÓŁÓW -->
                        <div class="relative bg-gray-50/50 rounded-[2.5rem] p-6 border border-gray-100 flex flex-col min-h-[400px]">
                            <div v-if="selectedApplication" class="h-full flex flex-col">
                                <div class="flex gap-4 items-center mb-6">
                                    <div class="relative">
                                        <img
                                            :src="selectedApplication.user?.profile_photo_url"
                                            :alt="selectedApplication.user?.name"
                                            class="w-16 h-16 rounded-2xl object-cover shadow-md border-2 border-white"
                                        />
                                        <div class="absolute -bottom-1 -right-1 w-5 h-5 bg-white rounded-full flex items-center justify-center shadow-sm border border-gray-50">
                                            <div class="w-2.5 h-2.5 bg-blue-500 rounded-full"></div>
                                        </div>
                                    </div>
                                    <div class="flex-1 min-w-0">
                                        <p class="text-[10px] font-black text-blue-500 uppercase tracking-widest">ID {{ selectedApplication.id }}</p>
                                        <h4 class="font-black text-gray-900 text-lg truncate">{{ selectedApplication.user?.name }}</h4>
                                        <p class="text-xs font-bold text-gray-400 uppercase tracking-tight">{{ moment(selectedApplication.created_at).format('DD.MM.YYYY') }}</p>
                                    </div>
                                </div>

                                <div class="mb-6">
                                    <p class="text-[10px] font-black text-gray-400 uppercase tracking-widest mb-1">Aplikuje na stanowisko</p>
                                    <p class="text-sm font-black text-[#0A2C5C] uppercase tracking-tight">{{ selectedApplication.position }}</p>
                                </div>

                                <!-- STATUSY -->
                                <div class="space-y-3 mb-6">
                                    <p class="text-[10px] font-black text-gray-400 uppercase tracking-widest">Zmień status</p>
                                    <div class="flex flex-wrap gap-2">
                                        <button
                                            @click="updateStatus(selectedApplication?.id, 'yes')"
                                            :class="selectedApplication.status === 'yes'
                                                ? 'bg-blue-900 text-white shadow-md'
                                                : 'bg-white text-gray-600 border border-gray-100 hover:bg-gray-50'"
                                            class="px-4 py-2 text-[10px] font-black uppercase tracking-widest rounded-xl transition-all flex-1"
                                        >
                                            {{ __('translate.statusYes') }}
                                        </button>

                                        <button
                                            @click="updateStatus(selectedApplication?.id, 'maybe')"
                                            :class="selectedApplication.status === 'maybe'
                                                ? 'bg-cyan-500 text-white shadow-md'
                                                : 'bg-white text-gray-600 border border-gray-100 hover:bg-gray-50'"
                                            class="px-4 py-2 text-[10px] font-black uppercase tracking-widest rounded-xl transition-all flex-1"
                                        >
                                            {{ __('translate.statusMaybe') }}
                                        </button>

                                        <button
                                            @click="updateStatus(selectedApplication?.id, 'no')"
                                            :class="selectedApplication.status === 'no'
                                                ? 'bg-red-600 text-white shadow-md'
                                                : 'bg-white text-gray-600 border border-gray-100 hover:bg-gray-50'"
                                            class="px-4 py-2 text-[10px] font-black uppercase tracking-widest rounded-xl transition-all flex-1"
                                        >
                                            {{ __('translate.statusNo') }}
                                        </button>
                                    </div>
                                    <div class="flex justify-end" v-if="selectedApplication.status_changed_at">
                                        <span class="text-[10px] font-bold text-gray-400 uppercase">Aktualizacja: {{ selectedApplication.status_changed_at }}</span>
                                    </div>
                                </div>

                                <!-- NOTATKA -->
                                <div class="flex-1">
                                    <p class="text-[10px] font-black text-gray-400 uppercase tracking-widest mb-2">Notatka wewnętrzna</p>
                                    <TextareaLimit
                                        id="note"
                                        v-model="selectedApplication.note"
                                        :limit="500"
                                        :placeholder="__('translate.noteContent')"
                                        rows="3"
                                        class="w-full text-xs rounded-2xl border-gray-100 bg-white/50 focus:bg-white transition-all resize-none"
                                    />
                                </div>

                                <!-- AKCJE -->
                                <div class="grid grid-cols-2 gap-4 mt-6 pt-6 border-t border-gray-100">
                                    <button
                                        @click="saveNote(selectedApplication.id, selectedApplication.note)"
                                        class="px-6 py-3 bg-[#0A2C5C] text-white text-[10px] font-black uppercase tracking-widest rounded-2xl hover:bg-blue-800 shadow-md shadow-blue-900/10 transition-all hover:-translate-y-0.5 active:translate-y-0"
                                    >
                                        {{ __('translate.Save') }}
                                    </button>

                                    <Link
                                        :href="route('project-aplications-recruits.show', selectedApplication.id)"
                                        class="px-6 py-3 bg-white text-[#0A2C5C] text-[10px] font-black uppercase tracking-widest rounded-2xl border border-gray-100 shadow-sm hover:shadow-md hover:bg-gray-50 transition-all text-center flex items-center justify-center gap-2"
                                    >
                                        {{ __('translate.details') }}
                                        <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M14 5l7 7m0 0l-7 7m7-7H3" /></svg>
                                    </Link>
                                </div>
                            </div>

                            <!-- PLACEHOLDER BRAKU WYBORU -->
                            <div v-else class="flex-1 flex flex-col items-center justify-center text-center p-8">
                                <div class="w-20 h-20 bg-white rounded-full flex items-center justify-center mb-6 shadow-sm border border-gray-50">
                                    <svg class="w-10 h-10 text-gray-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15 15l-2 5L9 9l11 4-5 2zm0 0l5 5M7.188 2.239l.777 2.897M5.136 7.965l-2.898-.777M13.95 4.05l-2.122 2.122m-5.657 5.656l-2.12 2.122" />
                                    </svg>
                                </div>
                                <h3 class="text-sm font-black text-gray-900 uppercase tracking-widest mb-2">{{ __('translate.noApplicationSelected') }}</h3>
                                <p class="text-xs font-bold text-gray-400 uppercase tracking-tight max-w-[200px]">{{ __('translate.selectApplicationToViewDetails') }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- DOLNA SEKCJA - 2 kolumny -->
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                <!-- POWIADOMIENIA -->
                <div class="bg-white rounded-3xl shadow-sm border border-gray-100 p-8 flex flex-col">
                    <div class="flex justify-between items-center mb-8">
                        <h2 class="text-xs font-black text-[#0A2C5C] uppercase tracking-[0.2em]">{{ __('translate.notifications') }}</h2>
                        <Link preserveScroll v-if="usePage().props.unreadNotifications" :href="route('notifications.markAllAsRead')" method="post" as="button" class="text-[10px] font-black text-red-500 hover:text-red-700 transition-colors uppercase tracking-widest">
                            {{ __('translate.markAllAsRead') }}
                        </Link>
                    </div>

                    <div class="flex-1 overflow-hidden relative">
                        <ul class="space-y-3 max-h-[400px] overflow-y-auto pr-2 custom-scrollbar">
                            <li v-for="notification in notifications" :key="notification.id"
                                class="group relative flex items-start gap-4 p-4 rounded-2xl transition-all duration-200 border border-transparent"
                                :class="[!notification.read_at ? 'bg-blue-50/40 border-blue-50/50 hover:bg-blue-50' : 'hover:bg-gray-50']"
                            >
                                <div class="mt-1 shrink-0">
                                    <div v-if="!notification.read_at" class="w-2.5 h-2.5 bg-blue-500 rounded-full animate-pulse shadow-sm shadow-blue-200"></div>
                                    <div v-else class="w-2.5 h-2.5 bg-gray-300 rounded-full opacity-50"></div>
                                </div>

                                <div class="flex-1 min-w-0">
                                    <button v-if="!notification.read_at"
                                            class="w-full text-left focus:outline-none"
                                            @click="markAsRead(notification.id)"
                                    >
                                        <p class="text-sm font-black text-gray-900 leading-snug" v-html="formatNotification(notification).title"></p>
                                        <p class="text-xs font-bold text-gray-500 mt-1 line-clamp-2 uppercase tracking-tight" v-html="formatNotification(notification).message"></p>
                                    </button>
                                    <div v-else>
                                        <p class="text-sm font-bold text-gray-400 leading-snug" v-html="formatNotification(notification).title"></p>
                                        <p class="text-xs font-bold text-gray-300 mt-1 line-clamp-1 uppercase tracking-tight" v-html="formatNotification(notification).message"></p>
                                    </div>
                                </div>

                                <div v-if="!notification.read_at" class="absolute right-4 top-1/2 -translate-y-1/2 opacity-0 group-hover:opacity-100 transition-opacity">
                                    <svg class="h-5 w-5 text-blue-400" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                                    </svg>
                                </div>
                            </li>
                        </ul>

                        <div v-if="!notifications.length" class="flex flex-col items-center justify-center py-12 bg-gray-50/50 rounded-2xl border border-dashed border-gray-200">
                            <svg class="w-10 h-10 text-gray-200 mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
                            </svg>
                            <p class="text-[10px] font-black text-gray-400 uppercase tracking-widest">{{ __('translate.noNotifications') }}</p>
                        </div>
                    </div>
                </div>

                <!-- OFERTY -->
                <div class="bg-white rounded-3xl shadow-sm border border-gray-100 p-8 col-span-1 lg:col-span-2 flex flex-col">
                    <div class="flex justify-between items-center mb-8">
                        <div>
                            <h2 class="text-2xl font-black text-gray-900 uppercase tracking-tight">{{ __('translate.offerts') }}</h2>
                            <p class="text-xs font-bold text-gray-400 uppercase tracking-widest mt-1">Zarządzaj aktywnymi rekrutacjami</p>
                        </div>
                        <Link
                            :href="route('project-recruits.index')"
                            class="inline-flex items-center px-4 py-2 bg-red-50 text-red-600 text-xs font-black rounded-xl hover:bg-red-100 transition-all uppercase tracking-widest"
                        >
                            {{ __('translate.details') }}
                            <svg class="w-3 h-3 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 5l7 7-7 7" /></svg>
                        </Link>
                    </div>

                    <!-- LEGENDA KOLORÓW -->
                    <div class="mb-8 p-4 bg-gray-50/50 rounded-2xl border border-gray-100">
                        <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                            <div class="flex items-center gap-3 bg-white p-2.5 rounded-xl border border-gray-50 shadow-sm">
                                <div class="w-2.5 h-2.5 rounded-full bg-blue-900 shadow-sm shadow-blue-200"></div>
                                <span class="text-[10px] font-black text-gray-500 uppercase tracking-tight">{{ __('translate.reserved') }}</span>
                            </div>
                            <div class="flex items-center gap-3 bg-white p-2.5 rounded-xl border border-gray-50 shadow-sm">
                                <div class="w-2.5 h-2.5 rounded-full bg-red-600 shadow-sm shadow-red-200"></div>
                                <span class="text-[10px] font-black text-gray-500 uppercase tracking-tight">{{ __('translate.rejected') }}</span>
                            </div>
                            <div class="flex items-center gap-3 bg-white p-2.5 rounded-xl border border-gray-50 shadow-sm">
                                <div class="w-2.5 h-2.5 rounded-full bg-cyan-500 shadow-sm shadow-cyan-200"></div>
                                <span class="text-[10px] font-black text-gray-500 uppercase tracking-tight">{{ __('translate.viewed') }}</span>
                            </div>
                            <div class="flex items-center gap-3 bg-white p-2.5 rounded-xl border border-gray-50 shadow-sm">
                                <div class="w-2.5 h-2.5 rounded-full bg-gray-300 shadow-sm shadow-gray-200"></div>
                                <span class="text-[10px] font-black text-gray-500 uppercase tracking-tight">{{ __('translate.sent') }}</span>
                            </div>
                        </div>
                    </div>

                    <div class="space-y-4 max-h-[500px] overflow-y-auto pr-2 custom-scrollbar">
                        <div
                            v-for="project in projects"
                            :key="project.id"
                            class="group relative bg-white border border-gray-100 rounded-[2rem] p-6 hover:shadow-xl hover:shadow-blue-900/5 transition-all duration-300 hover:-translate-y-1"
                        >
                            <div class="flex flex-col gap-2">
                                <div class="flex-1 min-w-0">
                                    <div class="flex items-center gap-3 mb-2">
                                        <p class="text-[10px] font-black text-blue-500 uppercase tracking-widest bg-blue-50 px-2.5 py-1 rounded-lg border border-blue-100/50 shadow-sm">ID {{ project.id }}</p>
                                        <span
                                            class="px-2.5 py-1 text-[10px] font-black uppercase tracking-widest rounded-lg shadow-sm"
                                            :class="project.is_active ? 'bg-green-100 text-green-700' : 'bg-red-100 text-red-700'"
                                        >
                                            {{ project.is_active ? __('translate.active') : __('translate.inactive') }}
                                        </span>
                                    </div>
                                    <h4 class="text-lg font-black text-gray-900 truncate group-hover:text-[#0A2C5C] transition-colors uppercase tracking-tight leading-tight">
                                        {{ project.position || __('translate.projectWithoutTitle') }}
                                    </h4>
                                    <p class="text-xs font-bold text-gray-400 mt-1 uppercase tracking-tight">{{ project.city }}, {{ project.country }}</p>
                                </div>

                                <!-- STATYSTYKI Z KOLORAMI -->
                                <div class="flex flex-wrap gap-2">
                                    <!-- Aplikacje Razem -->
                                    <div class="bg-gray-50/80 px-3 py-2 rounded-xl border border-gray-100 flex items-center gap-2.5">
                                        <svg class="w-3.5 h-3.5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path></svg>
                                        <div class="flex flex-col">
                                            <span class="text-[8px] font-black text-gray-400 uppercase leading-none mb-0.5">{{ __('translate.total') }}</span>
                                            <span class="text-xs font-black text-gray-900 leading-none">{{ project.aplications_count || 0 }}</span>
                                        </div>
                                    </div>

                                    <!-- Zarezerwowane -->
                                    <div class="bg-blue-50/50 px-3 py-2 rounded-xl border border-blue-100/50 flex items-center gap-2.5">
                                        <div class="w-1.5 h-1.5 rounded-full bg-blue-900 shadow-sm shadow-blue-200"></div>
                                        <div class="flex flex-col">
                                            <span class="text-[8px] font-black text-blue-900/50 uppercase leading-none mb-0.5">{{ __('translate.reserved') }}</span>
                                            <span class="text-xs font-black text-blue-900 leading-none">{{ project.yes_count || 0 }}</span>
                                        </div>
                                    </div>

                                    <!-- Odrzucone -->
                                    <div class="bg-red-50/50 px-3 py-2 rounded-xl border border-red-100/50 flex items-center gap-2.5">
                                        <div class="w-1.5 h-1.5 rounded-full bg-red-600 shadow-sm shadow-red-200"></div>
                                        <div class="flex flex-col">
                                            <span class="text-[8px] font-black text-red-600/50 uppercase leading-none mb-0.5">{{ __('translate.rejected') }}</span>
                                            <span class="text-xs font-black text-red-600 leading-none">{{ project.no_count || 0 }}</span>
                                        </div>
                                    </div>

                                    <!-- Przeglądane -->
                                    <div class="bg-cyan-50/50 px-3 py-2 rounded-xl border border-cyan-100/50 flex items-center gap-2.5">
                                        <div class="w-1.5 h-1.5 rounded-full bg-cyan-500 shadow-sm shadow-cyan-200"></div>
                                        <div class="flex flex-col">
                                            <span class="text-[8px] font-black text-cyan-600/50 uppercase leading-none mb-0.5">{{ __('translate.viewed') }}</span>
                                            <span class="text-xs font-black text-cyan-600 leading-none">{{ project.maybe_count || 0 }}</span>
                                        </div>
                                    </div>
                                    <Link
                                        :href="route('project-recruits.show', project.id)"
                                        class="w-12 h-12 rounded-2xl bg-gray-50 flex items-center justify-center group-hover:bg-[#0A2C5C] group-hover:text-white transition-all duration-300 border border-gray-100 group-hover:border-transparent group-hover:shadow-lg group-hover:shadow-blue-900/20"
                                    >
                                        <svg class="w-5 h-5 transition-transform duration-300 group-hover:translate-x-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M14 5l7 7m0 0l-7 7m7-7H3" /></svg>
                                    </Link>
                                </div>

                            </div>
                        </div>

                        <div v-if="!projects.length" class="flex flex-col items-center justify-center py-20 text-center bg-gray-50/50 rounded-[3rem] border border-dashed border-gray-200">
                            <div class="w-20 h-20 bg-white rounded-full flex items-center justify-center mb-6 shadow-sm">
                                <svg class="w-10 h-10 text-gray-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                                </svg>
                            </div>
                            <h3 class="text-sm font-black text-gray-900 uppercase tracking-widest mb-2">{{ __('translate.noProjectsAvailable') }}</h3>
                            <p class="text-xs font-bold text-gray-400 uppercase tracking-tight">{{ __('translate.noOtherApplications') }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
","search":

<script setup>
import { computed, ref } from 'vue';
import { Link, router, usePage } from '@inertiajs/vue3';
import __ from '@/lang.js';
import moment from "moment/moment.js";
import TextareaLimit from "@/Components/TextareaLimit.vue";

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
    }
});

const page = usePage();
const selectedApplication = ref(null);

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
        __('translate.reserved'),      // Zaakceptowane - status yes
        __('translate.rejected'),       // Odrzucone - status no
        __('translate.viewed'),         // Rozpatrywane - status maybe
        __('translate.sent')            // Wysłane - status NULL
    ],
    colors: ['#0A2C5C', '#dc2626', '#06b6d4', '#d1d5db'],
    legend: {
        position: 'bottom',
        fontFamily: 'Inter, sans-serif',
        fontWeight: 600,
        labels: {
            colors: '#6b7280'
        }
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
