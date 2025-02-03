<script setup>
import { ref, watch } from 'vue';
import { Link,router } from '@inertiajs/vue3';
import AppLayout from '@/Layouts/AppLayout.vue';
import Pagination from '@/Components/Pagination.vue';

import { pickBy, debounce } from 'lodash';
import DialogModal from "@/Components/DialogModal.vue";
import DangerButton from "@/Components/DangerButton.vue";
import SecondaryButton from "@/Components/SecondaryButton.vue";

const props = defineProps({
    articles: Object,
    filters: Object
});
const selectedArticle = ref(null);
const confirmCancelArticle = ref(false);

const params = ref({
    field: props.filters.field,
    direction: props.filters.direction,
});

const resetFilters = ()=>{
    router.get(route('articles.index'));
}
const openModal = (user)=>{
    confirmCancelArticle.value = true;
    selectedArticle.value = user;
}
const DeleteUser = () => {
    if(selectedArticle){
        router.delete(route('articles.destroy',selectedArticle.value), {
            onSuccess: () => {
                confirmCancelArticle.value = false;
                selectedArticle.value = null;
            }
        });
    }
};


const sort = (field) => {
    params.value.field = field;
    params.value.direction = params.value.direction === 'asc' ? 'desc' : 'asc';
}
const resetSort = (field) => {
    params.value.field = null;
    params.value.direction = null;
}

watch(params.value, debounce(function (value) {
    let rest = pickBy(params.value);
    router.get(route('articles.index'), rest, { preserveState: true, replace: true });
}, 300));

</script>
<template>
    <AppLayout :title="__('translate.recruits')">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{__('translate.articles')}}
            </h2>
        </template>
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg">
                    <div class="p-6 lg:p-8 bg-white dark:bg-gray-800 dark:bg-gradient-to-bl dark:from-gray-700/50 dark:via-transparent border-b border-gray-200 dark:border-gray-700">

                        <div class="flex items-center justify-end px-4 py-3 text-right sm:px-6 sm:rounded-bl-md sm:rounded-br-md">
                            <Link class="inline-flex items-center px-4 py-2 bg-gray-800 dark:bg-gray-200 border border-transparent rounded-md font-semibold text-xs text-white dark:text-gray-800 uppercase tracking-widest hover:bg-gray-700 dark:hover:bg-white focus:bg-gray-700 dark:focus:bg-white active:bg-gray-900 dark:active:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 transition ease-in-out duration-150" :href="route('articles.create')">
                                {{__('translate.createArticles')}}
                            </Link>
                        </div>

                        <div class="overflow-hidden bg-white shadow-md sm:rounded-lg">
                            <div class="flex flex-col">
                                <div class="overflow-x-auto -my-2 sm:-mx-6 lg:-mx-8">
                                    <div class="inline-block py-2 min-w-full align-middle sm:px-6 lg:px-8">
                                        <div class="overflow-hidden border-b border-gray-200 shadow sm:rounded-lg">
                                            <table class="min-w-full divide-y divide-gray-200 table-fixed">
                                                <thead class="bg-blue-work">
                                                <tr>
                                                    <th scope="col" class="w-3/12 text-xs font-semibold tracking-wider text-left uppercase cursor-pointer">
                                                        <div class="flex items-center">
                                                            <span class="inline-flex w-full py-3 px-6 justify-between" @click="sort('id')">Id
                                                                <svg v-if="params.field === 'id' && params.direction === 'asc'" xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
                                                                <path d="M3 3a1 1 0 000 2h11a1 1 0 100-2H3zM3 7a1 1 0 000 2h5a1 1 0 000-2H3zM3 11a1 1 0 100 2h4a1 1 0 100-2H3zM13 16a1 1 0 102 0v-5.586l1.293 1.293a1 1 0 001.414-1.414l-3-3a1 1 0 00-1.414 0l-3 3a1 1 0 101.414 1.414L13 10.414V16z"/>
                                                                </svg>
                                                                <svg v-if="params.field === 'id' && params.direction === 'desc'" xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
                                                                <path d="M3 3a1 1 0 000 2h11a1 1 0 100-2H3zM3 7a1 1 0 000 2h7a1 1 0 100-2H3zM3 11a1 1 0 100 2h4a1 1 0 100-2H3zM15 8a1 1 0 10-2 0v5.586l-1.293-1.293a1 1 0 00-1.414 1.414l3 3a1 1 0 001.414 0l3-3a1 1 0 00-1.414-1.414L15 13.586V8z"/>
                                                                </svg>
                                                            </span>
                                                            <div v-if="params.field === 'id' && params.direction" @click="resetSort">
                                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                                                                </svg>
                                                            </div>
                                                        </div>
                                                    </th>
                                                    <th scope="col"
                                                        class="py-3 px-6 w-3/12 text-xs font-semibold tracking-wider text-left uppercase">
                                                        {{__('translate.title')}}
                                                    </th>
                                                    <th scope="col"
                                                        class="py-3 px-6 w-3/12 text-xs font-semibold tracking-wider text-left uppercase">
                                                        {{__('translate.active')}}
                                                    </th>
                                                    <th scope="col"
                                                        class="py-3 px-6 w-3/12 text-xs font-semibold tracking-wider text-left uppercase">
                                                        {{__('translate.actions')}}
                                                    </th>
                                                </tr>
                                                </thead>

                                                <tbody class="bg-white divide-y divide-gray-200">
                                                <tr v-if="props.articles.data.length == 0">
                                                    <td colspan="4" class="text-center py-4 px-6 whitespace-nowrap"><p>{{__('translate.notFoundArticle')}}</p></td>
                                                </tr>
                                                <tr v-else v-for="(article) in props.articles.data" :key="article.id">
                                                    <td class="py-4 px-6 whitespace-nowrap">
                                                        <div class="flex items-center">
                                                            <div class="ml-4">
                                                                <div class="text-sm text-gray-900">
                                                                    {{article.id}}
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="py-4 px-6 whitespace-nowrap">
                                                        <div class="ml-4">
                                                            <div class="text-sm text-gray-900">
                                                                {{article.title}}
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="py-4 px-6 whitespace-nowrap">
                                                        <div class="ml-4">
                                                            <div class="text-sm text-gray-900">
                                                                    <svg v-if="article.active" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                                        <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                                                                    </svg>
                                                                <svg v-else xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                                                                </svg>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="py-4 px-6 whitespace-nowrap">
                                                        <div class="flex items-center">
                                                            <div class="ml-4">
                                                                <DangerButton @click="openModal(article)" class="!flex mx-auto text-center justify-center">
                                                                    {{__('translate.delete')}}
                                                                </DangerButton>
                                                            </div>
                                                            <div class="ml-4">
                                                                <Link :href="route('articles.edit',article)" class="flex items-center inline-flex items-center px-4 py-2 bg-white border border-gray-300 rounded-md font-semibold text-xs text-gray-700 uppercase tracking-widest shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 disabled:opacity-25 transition ease-in-out duration-150">
                                                                    {{__('translate.edit')}}
                                                                </Link>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <Pagination v-if="articles.total > 5" class="mt-10 text-center mx-auto" :links="articles.links" />
                    </div>
                </div>
            </div>
            <DialogModal :show="confirmCancelArticle" @close="confirmCancelArticle = false">
                <template #title>
                    {{__('translate.questionDelete')}} - {{__('translate.article').toLowerCase()}} id. {{selectedArticle && selectedArticle.id}}
                </template>

                <template #content>
                    {{__('translate.questionDeleteConfirm')}} - {{__('translate.article').toLowerCase()}} id.{{selectedArticle && selectedArticle.id}}
                </template>

                <template #footer>
                    <SecondaryButton @click.native="confirmCancelArticle = false">
                        {{__('translate.cancel')}}
                    </SecondaryButton>

                    <DangerButton class="ml-2" @click.native="DeleteUser">
                        {{__('translate.delete')}}
                    </DangerButton>
                </template>
            </DialogModal>
        </div>
    </AppLayout>
</template>
