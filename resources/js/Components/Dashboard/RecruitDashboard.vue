<template>
    <div class="p-6 bg-gray-100 min-h-screen">
        <!-- GÓRNA SEKCJA - 2 kolumny -->
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 mb-6">
            <!-- STATYSTYKI -->
            <div class="bg-white rounded-2xl shadow p-6">
                <h2 class="text-xl font-semibold mb-6">{{ __('translate.recruiterStatistics') }}</h2>
                <div class="flex justify-center">
                    <apexchart
                        v-if="chartData"
                        width="300"
                        height="300"
                        type="donut"
                        :options="chartOptions"
                        :series="chartSeries"
                    />
                    <div v-else class="text-center text-gray-500">
                        {{ __('translate.NoData') }}
                    </div>
                </div>
            </div>

            <!-- APLIKACJE -->
            <div class="bg-white rounded-2xl shadow p-6 col-span-2">
                <div class="flex justify-between items-center mb-4">
                    <h2 class="text-xl font-semibold">{{ __('translate.aplications') }}</h2>
                    <Link
                        :href="route('project-aplications-recruits.index')"
                        class="text-sm text-red-500 hover:underline"
                    >
                        {{ __('translate.details') }}
                    </Link>
                </div>
                <div class="space-y-4 max-h-96 overflow-y-auto grid gap-6 lg:grid-cols-2">
                    <div class="flex flex-col gap-2">
                        <div
                            v-for="application in lastAplications"
                            :key="application.id"
                            @click="selectApplication(application)"
                            class="border rounded-lg p-2 bg-white hover:shadow-md transition cursor-pointer"
                            :class="selectedApplication?.id === application.id ? 'border-blue-500' : ''"
                        >
                            <div class="flex gap-3">
                                <div class="w-12 h-12 rounded-full flex items-center justify-center text-white font-bold text-lg overflow-hidden">
                                    <img v-if="application.user?.profile_photo_url" :src="application.user?.profile_photo_url" :alt="application.name" class="w-full h-full object-cover"/>
                                    <span v-else>{{ (application.name?.[0]||'') + (application.surname?.[0]||'') }}</span>
                                </div>

                                <div class="flex-1">
                                    <p class="font-semibold text-md">{{ application.user?.name }}</p>
                                    <p class="text-sm text-gray-600">{{ application.position }}</p>
                                </div>
                            </div>
                        </div>
                        <div v-if="!lastAplications.length" class="text-center text-gray-500 py-8">
                            {{ __('translate.noApplicationsAvailable') }}
                        </div>
                    </div>
                    <div v-if="selectedApplication">
                        <!-- PANEL SZCZEGÓŁÓW -->
                        <div>
                            <div class="flex gap-3 items-center">
                                <img
                                    :src="selectedApplication.user?.profile_photo_url"
                                    :alt="selectedApplication.user?.name"
                                    class="w-16 h- rounded-full object-cover"
                                />
                                <div class="flex-1">
                                    <p class="text-xs text-blue-500 font-semibold">ID {{ selectedApplication.id }}</p>
                                    <p class="text-sm text-gray-500">{{ moment(selectedApplication.created_at).format('DD-MM-YYYY') }}</p>
                                    <p class="font-semibold text-md">{{ selectedApplication.user?.name }}</p>
                                    <p class="text-sm text-gray-600">{{ selectedApplication.position }}</p>
                                </div>
                            </div>

                            <h3 class="text-lg font-semibold mb-4">
                                {{ __('translate.details') }} – {{ selectedApplication.user?.name }}
                            </h3>
                            <!-- STATUSY -->
                            <div class="flex gap-2 mb-1">
                                <button
                                    @click="updateStatus(selectedApplication?.id, 'yes')"
                                    :class="selectedApplication.status === 'yes'
                        ? 'bg-work-main text-white'
                        : 'bg-white text-work-main border border-work-main'"
                                    class="flex-1 px-3 py-1 text-xs font-semibold rounded hover:opacity-80 transition"
                                >
                                    {{ __('translate.statusYes') }}
                                </button>

                                <button
                                    @click="updateStatus(selectedApplication?.id, 'no')"
                                    :class="selectedApplication.status === 'no'
                        ? 'bg-work-main text-white'
                        : 'bg-white text-work-main border border-work-main'"
                                    class="flex-1 px-3 py-1 text-xs font-semibold rounded hover:opacity-80 transition"
                                >
                                    {{ __('translate.statusNo') }}
                                </button>

                                <button
                                    @click="updateStatus(selectedApplication?.id, 'maybe')"
                                    :class="selectedApplication.status === 'maybe'
                        ? 'bg-work-main text-white'
                        : 'bg-white text-work-main border border-work-main'"
                                    class="flex-1 px-3 py-1 text-xs font-semibold rounded hover:opacity-80 transition"
                                >
                                    {{ __('translate.statusMaybe') }}
                                </button>
                            </div>
                            <div class="text-xs float-right text-work-main flex flex-col items-end" v-if="selectedApplication.status_changed_at">
                                <span>Aktualizacja statusu:</span>
                                <span>
                                {{selectedApplication.status_changed_at}}
                                </span>
                            </div>

                            <!-- NOTATKA -->
                            <TextareaLimit
                                id="note"
                                v-model="selectedApplication.note"
                                :limit="500"
                                :placeholder="__('translate.noteContent')"
                                rows="3"
                                class="mt-3 w-full m text-xs rounded focus:ring-2 focus:ring-work-main focus:border-transparent"
                            />
                            <!-- AKCJE -->
                            <div class="grid grid-cols-2 gap-2 mt-6">
                                <button
                                    @click="saveNote(selectedApplication.id, selectedApplication.note)"
                                    class="px-4 py-2 bg-red-500 text-white text-sm font-semibold rounded hover:bg-red-600 transition"
                                >
                                    {{ __('translate.Save') }}
                                </button>

                                <Link
                                    :href="route('project-aplications-recruits.show', selectedApplication.id)"
                                    class="px-4 py-2 bg-blue-500 text-white text-sm font-semibold rounded hover:bg-blue-600 transition text-center"
                                >
                                    {{ __('translate.details') }}
                                </Link>
                            </div>
                        </div>
                    </div>
                    <div v-else class="flex flex-col items-center justify-center h-full text-center py-12">
                        <svg class="w-20 h-20 text-gray-300 mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                        </svg>
                        <p class="text-gray-500 font-medium mb-2">{{ __('translate.noApplicationSelected') }}</p>
                        <p class="text-gray-400 text-sm">{{ __('translate.selectApplicationToViewDetails') }}</p>
                    </div>
                </div>


            </div>
        </div>

        <!-- DOLNA SEKCJA - 2 kolumny -->
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">


            <!-- POWIADOMIENIA -->
            <div class="bg-white rounded-2xl shadow p-6">
                <div class="flex justify-between items-center mb-4">
                    <h2 class="text-lg font-semibold">{{__('translate.notifications')}}</h2>
                    <Link  preserveScroll v-if="usePage().props.unreadNotifications" :href="route('notifications.markAllAsRead')" method="post" as="button" class="text-sm text-red-500 hover:underline">
                        {{ __('translate.markAllAsRead') }}
                    </Link>
                </div>
                <ul class="text-sm text-gray-700 max-h-40 overflow-y-auto">
                    <li
                        v-for="notification in notifications"
                        :key="notification.id"
                        class="relative flex items-start gap-1
               before:content-['•']
               before:ml-1
               before:mt-1
               before:text-gray-600"
                        :class="{
            'font-semibold': !notification.read_at,
            'font-normal': notification.read_at
        }"
                    >
                        <button
                            v-if="!notification.read_at"
                            class="mt-1 text-gray-600 text-left"
                            v-html="formatNotification(notification).message"
                            @click="markAsRead(notification.id)"
                        ></button>
                        <span v-else class="mt-1 text-gray-600" v-html="formatNotification(notification).message"></span>
                    </li>
                </ul>
            </div>
            <!-- OFERTY -->
            <div class="bg-white rounded-2xl shadow p-6 col-span-2">
                <div class="flex justify-between items-center mb-4">
                    <h2 class="text-lg font-semibold">{{ __('translate.offerts') }}</h2>
                    <Link
                        :href="route('project-recruits.index')"
                        class="text-sm text-red-500 hover:underline"
                    >
                        {{ __('translate.details') }}
                    </Link>
                </div>

                <!-- LEGENDA KOLORÓW -->
                <div class="mb-4 p-3 bg-gray-50 rounded-lg border border-gray-200">
                    <div class="grid grid-cols-2 md:grid-cols-4 gap-3 text-xs">
                        <div class="flex items-center gap-2">
                            <div class="w-3 h-3 rounded-full bg-[#0d2a52]"></div>
                            <span class="text-gray-700 font-medium">{{ __('translate.reserved') }}</span>
                        </div>
                        <div class="flex items-center gap-2">
                            <div class="w-3 h-3 rounded-full bg-[#e31e24]"></div>
                            <span class="text-gray-700 font-medium">{{ __('translate.rejected') }}</span>
                        </div>
                        <div class="flex items-center gap-2">
                            <div class="w-3 h-3 rounded-full bg-[#00a0e3]"></div>
                            <span class="text-gray-700 font-medium">{{ __('translate.viewed') }}</span>
                        </div>
                        <div class="flex items-center gap-2">
                            <div class="w-3 h-3 rounded-full bg-[#9ca3af]"></div>
                            <span class="text-gray-700 font-medium">{{ __('translate.sent') }}</span>
                        </div>
                    </div>
                </div>

                <div class="space-y-3 max-h-80 overflow-y-auto pr-2">
                    <div
                        v-for="project in projects"
                        :key="project.id"
                        class="p-4 border-2 rounded-xl hover:border-blue-300 hover:shadow-lg transition-all duration-200 bg-white"
                    >
                        <div class="flex justify-between items-start mb-3">
                            <div class="flex items-center gap-2">
                                <p class="text-xs text-blue-500 font-semibold bg-blue-50 px-2 py-1 rounded">ID {{ project.id }}</p>
                                <span
                                    class="px-2 py-1 text-xs font-medium rounded"
                                    :class="{
                                        'bg-green-100 text-green-700': project.is_active,
                                        'bg-red-100 text-red-700': !project.is_active
                                    }"
                                >
                                    {{ project.is_active ? __('translate.active') : __('translate.inactive') }}
                                </span>
                            </div>
                        </div>

                        <div class="mb-3">
                            <p class="font-semibold text-gray-800 mb-1">{{ project.position || __('translate.projectWithoutTitle') }}</p>
                            <p class="text-sm text-gray-600">{{ project.city }}, {{ project.country }}</p>
                        </div>

                        <!-- STATYSTYKI Z KOLORAMI -->
                        <div class="grid grid-cols-2 md:grid-cols-3 gap-2 mb-3">
                            <!-- Odwiedziny -->
                            <div class="flex items-center gap-2 p-2 bg-purple-50 rounded-lg">
                                <svg class="w-4 h-4 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                                </svg>
                                <div class="flex-1">
                                    <p class="text-xs text-gray-600 uppercase">{{ __('translate.viewedCount') }}</p>
                                    <p class="text-sm font-bold text-purple-700">{{ project.views_count || 0 }}</p>
                                </div>
                            </div>

                            <!-- Aplikacje -->
                            <div class="flex items-center gap-2 p-2 bg-indigo-50 rounded-lg">
                                <svg class="w-4 h-4 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                                </svg>
                                <div class="flex-1">
                                    <p class="text-xs text-gray-600">{{ __('translate.total') }}</p>
                                    <p class="text-sm font-bold text-indigo-700">{{ project.aplications_count || 0 }}</p>
                                </div>
                            </div>

                            <!-- Zarezerwowane -->
                            <div class="flex items-center gap-2 p-2 bg-[#0d2a52]/5 rounded-lg border border-[#0d2a52]/20">
                                <div class="w-2 h-2 rounded-full bg-[#0d2a52]"></div>
                                <div class="flex-1">
                                    <p class="text-xs text-gray-600">{{ __('translate.reserved') }}</p>
                                    <p class="text-sm font-bold text-[#0d2a52]">{{ project.yes_count || 0 }}</p>
                                </div>
                            </div>

                            <!-- Odrzucone -->
                            <div class="flex items-center gap-2 p-2 bg-[#e31e24]/5 rounded-lg border border-[#e31e24]/20">
                                <div class="w-2 h-2 rounded-full bg-[#e31e24]"></div>
                                <div class="flex-1">
                                    <p class="text-xs text-gray-600">{{ __('translate.rejected') }}</p>
                                    <p class="text-sm font-bold text-[#e31e24]">{{ project.no_count || 0 }}</p>
                                </div>
                            </div>

                            <!-- Przeglądane -->
                            <div class="flex items-center gap-2 p-2 bg-[#00a0e3]/5 rounded-lg border border-[#00a0e3]/20">
                                <div class="w-2 h-2 rounded-full bg-[#00a0e3]"></div>
                                <div class="flex-1">
                                    <p class="text-xs text-gray-600">{{ __('translate.viewed') }}</p>
                                    <p class="text-sm font-bold text-[#00a0e3]">{{ project.maybe_count || 0 }}</p>
                                </div>
                            </div>

                            <!-- Wysłane -->
                            <div class="flex items-center gap-2 p-2 bg-[#9ca3af]/5 rounded-lg border border-[#9ca3af]/20">
                                <div class="w-2 h-2 rounded-full bg-[#9ca3af]"></div>
                                <div class="flex-1">
                                    <p class="text-xs text-gray-600">{{ __('translate.sent') }}</p>
                                    <p class="text-sm font-bold text-[#9ca3af]">{{ project.new_count || 0 }}</p>
                                </div>
                            </div>
                        </div>

                        <Link
                            :href="route('project-recruits.show', project.id)"
                            class="w-full block text-center px-4 py-2 bg-work-main text-white text-sm font-semibold rounded-lg hover:bg-work-main/90 transition-all duration-200 shadow-sm hover:shadow-md"
                        >
                            {{ __('translate.check_offer') }}
                        </Link>
                    </div>

                    <div v-if="!projects.length" class="text-center text-gray-500 py-12">
                        <svg class="w-16 h-16 text-gray-300 mx-auto mb-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                        </svg>
                        <p class="font-medium">{{ __('translate.noProjectsAvailable') }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

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
    colors: ['#0d2a52', '#e31e24', '#00a0e3', '#9ca3af'],
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

const unreadNotificationsCount = computed(() => {
    return props.notifications.filter(n => !n.read_at).length;
});

const selectApplication = (application) => {
    selectedApplication.value = application;
};

const formatNotification = (notification) => {
    const data = notification.data;
    if (!data) return { title: __('translate.unknownNotification'), message: '' };
    return {
        title: data.title || __('translate.notification'),
        message: data.message || '',
        action: data.action || null,
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
