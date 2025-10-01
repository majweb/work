<script setup>
import FrontLayout from "@/Layouts/FrontLayout.vue";
import InputLabel from "@/Components/InputLabel.vue";
import Multiselect from "vue-multiselect";
import InputError from "@/Components/InputError.vue";
import {useForm, Link, usePage} from '@inertiajs/vue3';
import {ref} from "vue";

const props = defineProps({
    page: Object,
    imageUrl:String,
    countries: Array,
});


const optionsCountry = ref(props.countries);

const form = useForm({
    country: [],
});

</script>
<template>
    <FrontLayout
        :title="page.title"
        :image="page.image"
        :keywords="page.keywords"
        :description="page.description"
        :imageUrl="imageUrl"
    >
        <div class="flex flex-col md:flex-row items-start justify-center md:min-h-screen pt-[3rem] pb-[14rem] md:pb-0 px-4">
            <!-- Formularz -->
            <form class="flex flex-col md:flex-row gap-3 p-7 bg-gray-50 rounded-lg shadow-md w-full max-w-5xl">
                <div class="flex-1">
                    <multiselect
                        group-values="elements" group-label="group"
                        :group-select="false"
                        :selectLabel="__('translate.selectLabel')"
                        :selectGroupLabel="__('translate.selectGroupLabel')"
                        :selectedLabel="__('translate.selectedLabel')"
                        :deselectLabel="__('translate.deselectLabel')"
                        track-by="name"
                        :multiple="false"
                        label="name"
                        :placeholder="__('translate.placeholderCountry')"
                        v-model="form.country" :options="optionsCountry">
                        <template #noResult>
                            <span>{{__('translate.noOptions')}}</span>
                        </template>
                        <template #noOptions>
                            <span>{{__('translate.noResult')}}</span>
                        </template>
                    </multiselect>
                    <InputError :message="form.errors.country" class="mt-2"/>
                </div>
                <input
                    type="text"
                    placeholder="Miejscowość"
                    class="flex-1 px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-violet-500"
                />
                <input
                    type="text"
                    placeholder="Branża"
                    class="flex-1 px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-violet-500"
                />
                <button
                    type="submit"
                    class="px-6 py-2 bg-red-500 text-white font-semibold rounded-md hover:bg-red-600 transition"
                >
                    Szukaj
                </button>
            </form>
        </div>


        <!--        <div class="flex items-center justify-center">-->
<!--            {{ __('test.mama', {test: 'aaaaa', oko: 'asdasds'}) }}-->
<!--        </div>-->
    </FrontLayout>
</template>
