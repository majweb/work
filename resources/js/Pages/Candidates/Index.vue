<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import {Link} from '@inertiajs/vue3';
import { ref, watch } from 'vue';
import { router } from '@inertiajs/vue3';
import { debounce, pickBy } from 'lodash';
import InputLabel from '@/Components/InputLabel.vue';
import TextInput from '@/Components/TextInput.vue';
import __ from '@/lang.js';

const props = defineProps({
    candidates: Object,
    filters: Object,
    projects: Array,
});

const form = ref({
    name: props.filters.name || '',
    surname: props.filters.surname || '',
    email: props.filters.email || '',
    phone: props.filters.phone || '',
    project: props.filters.project || '',
});

const resetFilters = () => {
    form.value = {
        name: '',
        surname: '',
        email: '',
        phone: '',
        project: '',
    };

    router.get(route('candidates.index'), {}, {
        preserveState: true,
        replace: true,
    });
};

watch(form, debounce(function () {
    router.get(route('candidates.index'), pickBy(form.value), {
        preserveState: true,
        preserveScroll: true,
        replace: true
    });
}, 300), { deep: true });
</script>

<template>
    <AppLayout :title="__('translate.candidates')">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('translate.candidates') }}
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-screen-2xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white shadow-xl sm:rounded-lg p-6">
                    <h3 class="text-lg font-medium text-gray-900 mb-6">{{ __('translate.candidatesList') }}</h3>

                    <!-- Formularz filtrowania -->
                    <div class="mb-6 bg-gray-50 p-4 rounded-lg">
                        <h4 class="font-medium text-gray-700 mb-3">{{ __('translate.filterCandidates') }}</h4>

                        <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-4">
                            <div>
                                <InputLabel :value="__('translate.name')" />
                                <TextInput
                                    v-model="form.name"
                                    type="text"
                                    class="w-full"
                                    :placeholder="__('translate.enterName')"
                                />
                            </div>
                            <div>
                                <InputLabel :value="__('translate.surname')" />
                                <TextInput
                                    v-model="form.surname"
                                    type="text"
                                    class="w-full"
                                    :placeholder="__('translate.enterSurname')"
                                />
                            </div>
                            <div>
                                <InputLabel :value="__('translate.email')" />
                                <TextInput
                                    v-model="form.email"
                                    type="text"
                                    class="w-full"
                                    :placeholder="__('translate.enterEmail')"
                                />
                            </div>
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                            <div>
                                <InputLabel :value="__('translate.phone')" />
                                <TextInput
                                    v-model="form.phone"
                                    type="text"
                                    class="w-full"
                                    :placeholder="__('translate.enterPhone')"
                                />
                            </div>
                            <div>
                                <InputLabel :value="__('translate.project')" />
                                <select
                                    v-model="form.project"
                                    class="w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                >
                                    <option value="">{{ __('translate.allProjects') }}</option>
                                    <option v-for="project in projects" :key="project.id" :value="project.id">
                                        {{ project.id }}
                                    </option>
                                </select>
                            </div>
                        </div>

                        <div class="flex justify-end space-x-3">
                            <button
                                @click="resetFilters"
                                type="button"
                                class="px-4 py-2 bg-gray-200 text-gray-700 rounded-md hover:bg-gray-300 transition"
                            >
                                {{ __('translate.resetFilters') }}
                            </button>
                        </div>
                    </div>

                    <div v-if="candidates.data.length === 0" class="text-center py-8 text-gray-500">
                        {{ __('translate.noCandidatesAvailable') }}
                    </div>
                    <div v-else class="overflow-x-auto">
                        <table class="min-w-full divide-y divide-gray-200">
                            <thead class="bg-gray-50">
                            <tr>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Id
                                </th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    {{ __('translate.name') }} {{ __('translate.surname') }}
                                </th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    {{ __('translate.email') }}
                                </th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    {{ __('translate.phone') }}
                                </th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    {{ __('translate.project') }}
                                </th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    {{ __('translate.actions') }}
                                </th>
                            </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                            <tr v-for="candidate in candidates.data" :key="candidate.id">
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm font-medium text-gray-900">{{ candidate.id }}</div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm font-medium text-gray-900">{{ candidate.name }} {{ candidate.surname }}</div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm text-gray-500">{{ candidate.email }}</div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm text-gray-500">{{ candidate.phone }}</div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div v-if="candidate.projects && candidate.projects.length > 0" class="text-sm text-blue-600 flex gap-2">
                                        <div v-for="project in candidate.projects" :key="project.id" class="mb-1">
                                            <Link :href="route('projects.show',project.id)" class="underline">
                                            (ID: {{ project.id }})
                                            </Link>
                                        </div>
                                    </div>
                                    <div v-else class="text-sm text-gray-500">{{ candidate.project?.id }}</div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                    <Link :href="route('candidates.show', candidate.id)" class="text-indigo-600 hover:text-indigo-900 mr-4">{{ __('translate.candidateDetails') }}</Link>
                                </td>
                            </tr>
                            </tbody>
                        </table>

                        <!-- Paginacja -->
                        <div class="mt-6" v-if="candidates.links.length > 3">
                            <div class="flex flex-wrap -mb-1">
                                <template v-for="(link, index) in candidates.links" :key="index">
                                    <div v-if="link.url === null" class="mb-1 mr-1 px-4 py-3 text-sm leading-4 text-gray-400 border rounded" v-html="link.label"></div>
                                    <Link v-else class="mb-1 mr-1 px-4 py-3 text-sm leading-4 border rounded hover:bg-indigo-50 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2" :class="{'bg-indigo-600 text-white': link.active}" :href="link.url" v-html="link.label"></Link>
                                </template>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </AppLayout>
</template>
