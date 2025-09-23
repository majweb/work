<script setup>
import Pagination from '@/Components/Pagination.vue';
import FrontLayout from "@/Layouts/FrontLayout.vue";
import {Link} from '@inertiajs/vue3';
import __ from "@/lang.js";


const props = defineProps({
    firms: Object
});

// Funkcja do formatowania liczby pracowników w bardziej czytelny sposób
const formatEmployeeCount = (count) => {
    if (!count) return __('translate.NoData');
    if (count < 10) return __('translate.lessThanTen');
    if (count < 50) return __('translate.betweenTenAndFifty');
    if (count < 250) return __('translate.moreThanFifty');
    return __('translate.moreThanTwoHundred');
};

// Funkcja do ustalania kolorów tła dla firm w oparciu o ich ID (dla różnorodności wizualnej)
const getGradientClass = (id) => {
    const gradientClasses = [
        'from-blue-100 to-indigo-50',
        'from-green-100 to-emerald-50',
        'from-amber-100 to-yellow-50',
        'from-rose-100 to-pink-50',
        'from-purple-100 to-violet-50',
    ];
    return gradientClasses[id % gradientClasses.length];
};
</script>

<template>
    <FrontLayout :title="__('translate.projects')">
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg p-6">
                    <div class="flex justify-between items-center mb-8 border-b pb-4">
                        <h1 class="text-3xl font-bold text-gray-800 dark:text-white">
                            {{__('translate.externalCompanies')}}
                        </h1>

                        <!-- Możesz dodać tutaj jakieś opcje filtrowania -->
                        <div class="flex space-x-2">
                            <!-- Przykład filtrów/sortowania (można rozbudować później) -->
                            <span class="text-sm text-gray-500 dark:text-gray-400">{{ props.firms.total }} firm</span>
                        </div>
                    </div>

                    <div v-if="props.firms.total" class="space-y-6">
                        <!-- Lista firm -->
                        <div v-for="firm in props.firms.data" :key="firm.id"
                             class="group relative bg-gradient-to-r rounded-xl shadow-sm hover:shadow-md transition-all duration-300 overflow-hidden"
                             :class="getGradientClass(firm.id)">

                            <div class="flex flex-col md:flex-row p-5 gap-6">
                                <!-- Logo firmy -->
                                <div class="md:w-36 lg:w-48 h-36 flex items-center justify-center bg-white rounded-lg overflow-hidden shadow p-4">
                                    <img v-if="firm.profilePhotoUrl" :src="firm.profilePhotoUrl" :alt="firm.name" class="max-h-full max-w-full object-contain">
                                    <div v-else class="flex items-center justify-center h-full w-full bg-gray-100 text-gray-500">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-16 w-16" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd" />
                                        </svg>
                                    </div>
                                </div>

                                <!-- Informacje o firmie -->
                                <div class="flex-1">
                                    <Link :href="route('front.firms.single', firm)" class="block">
                                        <h2 class="text-xl font-bold text-gray-900 dark:text-white hover:text-blue-600 transition-colors duration-200 mb-2">{{ firm.name }}</h2>
                                    </Link>

                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-3 mb-4">
                                        <div v-if="firm.firm && firm.firm.count_workers" class="flex items-center text-gray-600 dark:text-gray-300">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20" fill="currentColor">
                                                <path d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z" />
                                            </svg>
                                            <span>{{ formatEmployeeCount(firm.firm.count_workers) }}</span>
                                        </div>

                                        <div v-if="firm.firm && (firm.firm.city || firm.firm.country)" class="flex items-center text-gray-600 dark:text-gray-300">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20" fill="currentColor">
                                                <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd" />
                                            </svg>
                                            <span>{{ [firm.firm.city, firm.firm.country].filter(Boolean).join(', ') }}</span>
                                        </div>
                                    </div>

                                    <div v-if="firm.firm && firm.firm.description" class="text-gray-600 dark:text-gray-300 text-sm line-clamp-2 mb-3">
                                        {{ firm.firm.description }}
                                    </div>

                                    <div class="flex flex-wrap gap-2 mt-auto">
                                        <Link :href="route('front.firms.single', firm)" class="inline-flex items-center px-3 py-1 text-sm font-medium text-white bg-blue-600 rounded hover:bg-blue-700 transition">
                                            <span>{{ __('translate.details') }}</span>
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1" viewBox="0 0 20 20" fill="currentColor">
                                                <path fill-rule="evenodd" d="M10.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L12.586 11H5a1 1 0 110-2h7.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                                            </svg>
                                        </Link>

                                        <!-- Odznaki/tagi -->
                                        <span v-if="firm.firm && firm.firm.opinion_google" class="inline-flex items-center px-2 py-1 text-xs font-medium text-green-700 bg-green-100 rounded">
                                            <svg class="w-3 h-3 mr-1 text-yellow-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                            </svg>
                                            Google
                                        </span>
                                        <span v-if="firm.firm && firm.firm.opinion_facebook" class="inline-flex items-center px-2 py-1 text-xs font-medium text-blue-700 bg-blue-100 rounded">
                                            <svg class="w-3 h-3 mr-1 text-blue-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                            </svg>
                                            Facebook
                                        </span>
                                        <span v-if="firm.firm && firm.firm.video" class="inline-flex items-center px-2 py-1 text-xs font-medium text-red-700 bg-red-100 rounded">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 mr-1" viewBox="0 0 20 20" fill="currentColor">
                                                <path d="M2 6a2 2 0 012-2h6a2 2 0 012 2v8a2 2 0 01-2 2H4a2 2 0 01-2-2V6zM14.553 7.106A1 1 0 0014 8v4a1 1 0 00.553.894l2 1A1 1 0 0018 13V7a1 1 0 00-1.447-.894l-2 1z" />
                                            </svg>
                                            Wideo
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Paginacja -->
                        <Pagination v-if="props.firms.total > 10" class="mt-10 text-center mx-auto" :links="props.firms.links" />
                    </div>
                    <div v-else class="text-center py-12">
                        <svg xmlns="http://www.w3.org/2000/svg" class="mx-auto h-12 w-12 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.172 16.172a4 4 0 015.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        <h3 class="mt-2 text-sm font-medium text-gray-900 dark:text-white">{{ __('translate.notFoundArticles') }}</h3>
                    </div>
                </div>
            </div>
        </div>
    </FrontLayout>
</template>
