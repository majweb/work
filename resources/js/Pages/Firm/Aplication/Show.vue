<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import {ref} from 'vue';
import {Link, router, usePage} from '@inertiajs/vue3';
import axios from 'axios';

const props = defineProps({
    application: Object
});

const updateStatus = async (id, status) => {
    router.put(route('firm.applications.update-status', id), {
        status
    }, {
        preserveScroll: true,
        preserveState: true
    });
};

const resetStatus = (id, status) => {
    router.put(route('firm.applications.resetStatus', id), {
        status
    }, {
        preserveScroll: true,
        preserveState: true
    });
};
</script>

<template>
    <AppLayout :title="__('translate.aplicationDetails')">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('translate.aplicationDetails') }}
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6">
                    <Link :href="route('aplications.index')"
                          class="inline-flex items-center px-4 py-2 bg-gray-200 border border-transparent rounded-md font-semibold text-xs text-gray-800 uppercase tracking-widest hover:bg-gray-300 active:bg-gray-400 focus:outline-none focus:border-gray-500 focus:ring focus:ring-gray-300 disabled:opacity-25 transition mb-6">
                        &larr;{{ __('translate.backToList') }}
                    </Link>

                    <div class="bg-white rounded-lg shadow-md p-6 mb-6">
                        <h3 class="text-lg font-medium text-gray-900 mb-4">{{ __('translate.mainData') }}</h3>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div>
                                <p class="text-sm font-medium text-gray-500">{{ __('translate.mainData') }}
                                    {{ __('translate.nameUser') }} {{ __('translate.and') }} {{
                                        __('translate.surname')
                                    }}</p>
                                <p class="text-base">{{ application.name }} {{ application.surname }}</p>
                            </div>
                            <div>
                                <p class="text-sm font-medium text-gray-500">{{ __('translate.email') }}</p>
                                <p class="text-base">{{ application.email }}</p>
                            </div>
                            <div>
                                <p class="text-sm font-medium text-gray-500">{{ __('translate.phone') }}</p>
                                <p class="text-base">{{ application.phone }}</p>
                            </div>
                            <div>
                                <p class="text-sm font-medium text-gray-500">{{ __('translate.project') }}</p>
                                <p class="text-base">{{ application.project?.name || __('translate.noProject') }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="bg-white rounded-lg shadow-md p-6 mb-6">
                        <h3 class="text-lg font-medium text-gray-900 mb-4">{{ __('translate.applicationStatus') }}</h3>
                        <div class="flex gap-2 mb-4">
                            <button v-if="application.status !== 'yes'" @click="updateStatus(application.id, 'yes')"
                                    :class="[application.status === 'yes' ? 'bg-green-600 text-white' : 'bg-gray-200 text-gray-700', 'px-4 py-2 rounded text-sm font-medium']">
                                {{ __('translate.statusYes') }}
                            </button>
                            <button v-if="application.status === 'yes'" @click="resetStatus(application.id, '')"
                                    :class="[application.status === 'yes' ? 'bg-red-600 text-white' : 'bg-gray-200 text-gray-700', 'px-4 py-2 rounded text-sm font-medium']">
                                {{ __('translate.labelButtonUndoItemProcessing') }}
                            </button>
                            <button v-if="application.status !== 'yes'" @click="updateStatus(application.id, 'no')"
                                    :class="[application.status === 'no' ? 'bg-red-600 text-white' : 'bg-gray-200 text-gray-700', 'px-4 py-2 rounded text-sm font-medium']">
                                {{ __('translate.statusNo') }}
                            </button>
                            <button v-if="application.status !== 'yes'" @click="updateStatus(application.id, 'maybe')"
                                    :class="[application.status === 'maybe' ? 'bg-yellow-500 text-white' : 'bg-gray-200 text-gray-700', 'px-4 py-2 rounded text-sm font-medium']">
                                {{ __('translate.statusMaybe') }}
                            </button>
                        </div>
                    </div>

                    <div v-if="application.pathCv" class="bg-white rounded-lg shadow-md p-6 mb-6">
                        <h3 class="text-lg font-medium text-gray-900 mb-4">{{ __('translate.cv') }}</h3>
                        <a :href="application.pathCv" target="_blank"
                           class="inline-flex items-center px-4 py-2 bg-indigo-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-indigo-700 active:bg-indigo-800 focus:outline-none focus:border-indigo-900 focus:ring focus:ring-indigo-300 disabled:opacity-25 transition">
                            {{ __('translate.getCv') }}
                        </a>
                    </div>

                    <div v-if="application.media && application.media.length > 0"
                         class="bg-white rounded-lg shadow-md p-6">
                        <h3 class="text-lg font-medium text-gray-900 mb-4">{{ __('translate.addedFiles') }}</h3>
                        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                            <div v-for="media in application.media" :key="media.id" class="border rounded p-3">
                                <p class="text-sm font-medium truncate mb-2">{{ media.file_name }}</p>
                                <a :href="media.original_url" target="_blank"
                                   class="text-indigo-600 hover:text-indigo-800 text-sm">
                                    {{ __('translate.getFiles') }}
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </AppLayout>
</template>
