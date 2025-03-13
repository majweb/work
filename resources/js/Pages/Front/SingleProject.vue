<script setup>
import FrontLayout from "@/Layouts/FrontLayout.vue";
import {Link, usePage} from '@inertiajs/vue3';
import {computed} from "vue";
import {usePermission} from "@/Composables/usePermission.js";

const props = defineProps({
    project: Object,
    agreements: Array,
});
const {hasRole} = usePermission();
const user = computed(()=>usePage().props.auth.user);
</script>
<template>
    <FrontLayout :title="__('translate.project')">
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg">
                    <Link :href="route('front.projects')" class="font-bold text-xl underline p-4">
                        {{ __('translate.backToList') }}
                    </Link>
                    <h2 class="font-bold text-2xl p-4 text-center text-red-500">
                        {{ project.category.allTranslations.title[usePage().props.language] }}</h2>
                    <p class="mb-5">{{ project.title[usePage().props.language] }}</p>

                    <div class="flex flex-col items-center pb-4">
                        <span class="mb-4" v-if="!user">Aby aplikować na ogłoszenia należy najpierw się zalogować jako pracownik.</span>
                        <span class="mb-4" v-else-if="user && hasRole('worker')">Aplikujesz jako: <strong>{{user?.name}}</strong></span>
                        <div class="flex space-x-1">
                            <Link v-if="!user"
                                  class="inline-flex items-center px-4 py-2 bg-white border border-gray-300 rounded-md font-semibold text-xs text-gray-700 uppercase tracking-widest shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 disabled:opacity-25 transition ease-in-out duration-150"
                                  :href="route('login',{ projectToRedirect: project.id })">{{ __('translate.login') }}
                            </Link>
                            <Link class="inline-flex items-center px-4 py-2 bg-white border border-gray-300 rounded-md font-semibold text-xs text-gray-700 uppercase tracking-widest shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 disabled:opacity-25 transition ease-in-out duration-150" :href="route('front.projects.applyView',project)" v-if="!user || (user && hasRole('worker'))">{{ user && (user && hasRole('worker')) ? __('translate.apply') :  __('translate.applyWithoutLogin') }}</Link>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </FrontLayout>
</template>
