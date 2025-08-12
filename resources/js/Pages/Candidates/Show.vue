<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import {Link} from '@inertiajs/vue3';
import __ from '@/lang.js';

const props = defineProps({
    candidate: Object,
    candidateProjects: Array,
    candidateFullProjects: Array,
});
</script>

<template>
    <AppLayout :title="__('translate.candidateDetails')">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('translate.candidateDetails') }}
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white shadow-xl sm:rounded-lg p-6">
                    <div class="mb-4">
                        <Link :href="route('candidates.index')" class="text-indigo-600 hover:text-indigo-900">
                            &larr; {{ __('translate.backToCandidates') }}
                        </Link>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <!-- Informacje o kandydacie -->
                        <div class="bg-gray-50 p-4 rounded-lg">
                            <h3 class="text-lg font-medium text-gray-900 mb-4">{{ __('translate.candidateInfo') }}</h3>

                            <div class="space-y-3">
                                <div>
                                    <span class="font-medium">{{ __('translate.name') }}:</span> {{ candidate.name }}
                                </div>
                                <div>
                                    <span class="font-medium">{{ __('translate.surname') }}:</span> {{ candidate.surname }}
                                </div>
                                <div>
                                    <span class="font-medium">{{ __('translate.email') }}:</span> {{ candidate.email }}
                                </div>
                                <div>
                                    <span class="font-medium">{{ __('translate.phone') }}:</span> {{ candidate.phone }}
                                </div>
                                <div>
                                    <span class="font-medium">{{ __('translate.status') }}:</span>
                                    <span :class="{
                                        'text-green-600': candidate.status === 'yes',
                                        'text-red-600': candidate.status === 'no',
                                        'text-yellow-600': candidate.status === 'maybe'
                                    }">
                                        {{ candidate.status ? __(`translate.status${candidate.status.charAt(0).toUpperCase() + candidate.status.slice(1)}`) : __('translate.statusPending') }}
                                    </span>
                                </div>
                                <div>
                                    <span class="font-medium">{{ __('translate.createdAt') }}:</span> {{ new Date(candidate.created_at).toLocaleDateString() }}
                                </div>
                            </div>
                        </div>

                        <!-- Informacje o projekcie -->
                        <div class="bg-gray-50 p-4 rounded-lg">
                            <!-- Lista wszystkich projektów -->
                                <h4 class="font-medium text-gray-800 mb-3">{{ __('translate.allCandidateProjects') }}</h4>
                                <div v-if="candidateFullProjects && candidateFullProjects.length > 0" class="space-y-3">
                                        <div v-for="project in candidateFullProjects" :key="project.id" class="bg-white p-3 rounded border border-gray-200">
                                        <div class="font-medium">
                                            <span class="text-gray-500 text-sm">
                                                <Link :href="route('projects.show', project.id)" class="text-blue-600 underline">
                                                    (ID: {{ project.id }})
                                                </Link>
                                            </span>
                                        </div>
                                        <div class="text-sm text-gray-600 mt-1">{{ project.description }}</div>
                                    </div>
                                </div>
                                <div v-else class="text-gray-500">
                                    {{ __('translate.noProjectsAvailable') }}
                                </div>
                        </div>
                    </div>
                    <!-- Notatki -->
                    <div class="mt-6 bg-gray-50 p-4 rounded-lg">
                        <h3 class="text-lg font-medium text-gray-900 mb-4">{{ __('translate.notes') }}</h3>

                        <div v-if="candidate.notes && candidate.notes.length > 0" class="space-y-4">
                            <div v-for="note in candidate.notes" :key="note.id" class="border-l-4 border-indigo-500 pl-4 py-2">
                                <div class="text-sm text-gray-600">{{ new Date(note.created_at).toLocaleString() }}</div>
                                <div class="mt-1">{{ note.content }}</div>
                            </div>
                        </div>
                        <div v-else class="text-gray-500">
                            {{ __('translate.noNotesAvailable') }}
                        </div>
                    </div>
                    <!-- Tagi -->
                    <div class="mt-6 bg-gray-50 p-4 rounded-lg">
                        <h3 class="text-lg font-medium text-gray-900 mb-4">{{ __('translate.tags') }}</h3>

                        <div v-if="candidate.notes && candidate.notes.length > 0" class="space-y-4">
                            <div v-for="note in candidate.notes" :key="note.id" class="border-l-4 border-indigo-500 pl-4 py-2">
                                <div class="text-sm text-gray-600">{{ new Date(note.created_at).toLocaleString() }}</div>
                                <div class="mt-1">{{ note.content }}</div>
                            </div>
                        </div>
                        <div v-else class="text-gray-500">
                            {{ __('translate.noNotesAvailable') }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </AppLayout>
</template>
