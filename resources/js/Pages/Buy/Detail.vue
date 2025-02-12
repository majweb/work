<script setup>
import {computed, ref} from 'vue';
import {Link, router, usePage} from '@inertiajs/vue3';
import AppLayout from '@/Layouts/AppLayout.vue';
import Multiselect from 'vue-multiselect'
import InputLabel from "@/Components/InputLabel.vue";

const props = defineProps({
    total: String,
    countCart: Number,
    cartItems: Object,
    foundations: Object,
});
const optionsFundations = ref(props.foundations);
const foundation = ref(null);

const removeFromCart = id => {
    router.delete(route('buy.detailRemoveFromCart',id),{preserveScroll:true})
}

const increment = (id,qty) => {
    router.post(route('buy.detailIncrementCart',[id,qty]),null,{preserveScroll:true});
}
const decrement = (id,qty) => {
    router.post(route('buy.detailDecrementCart',[id,qty]),null,{preserveScroll:true});

}
let currency  = computed(()=>{
    return usePage().props.auth.user?.firm?.currency;
});
const dispatchAction = () => {
    router.post(route('buy.addFoundation', { foundation: foundation.value }),null,{ preserveScroll: true });
}

</script>
<template>
    <AppLayout :title="__('translate.buy')">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ __('translate.cart') }}
            </h2>
        </template>
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg">

                    <section class="bg-white py-8 antialiased dark:bg-gray-900 md:py-16">
                        <div class="mx-auto max-w-screen-xl px-4">
                            <h2 class="text-xl font-semibold text-gray-900 dark:text-white sm:text-2xl" v-if="countCart > 0">{{__('translate.incart')}} {{countCart}} {{__('translate.service')}}</h2>
                            <div class="mt-6 sm:mt-8 md:gap-6 lg:flex lg:items-start xl:gap-8">
                                <div class="mx-auto w-full flex-none lg:max-w-2xl xl:max-w-4xl">
                                        <div v-if="countCart == 0">
                                            <div class="text-center py-4 px-6 whitespace-nowrap font-semibold">
                                                <p>
                                                    {{__('translate.emptyCart')}}
                                                </p>
                                            </div>
                                        </div>
                                    <div class="space-y-6" v-else>
                                        <div v-for="cartItem in props.cartItems" class="rounded-lg border border-gray-200 bg-white p-4 shadow-sm dark:border-gray-700 dark:bg-gray-800 md:p-6">
                                            <div class="space-y-4 md:flex md:items-center md:justify-between md:gap-6 md:space-y-0">
                                                <div class="flex items-center justify-between md:order-3 md:justify-end">
                                                    <div class="flex items-center">
                                                        <button type="button" id="decrement-button" @click="decrement(cartItem.rowId,cartItem.qty)" class="inline-flex h-5 w-5 shrink-0 items-center justify-center rounded-md border border-gray-300 bg-gray-100 hover:bg-gray-200 focus:outline-none focus:ring-2 focus:ring-gray-100 dark:border-gray-600 dark:bg-gray-700 dark:hover:bg-gray-600 dark:focus:ring-gray-700">
                                                            <svg class="h-2.5 w-2.5 text-gray-900 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 2">
                                                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h16" />
                                                            </svg>
                                                        </button>
                                                        <input type="text" id="counter-input" data-input-counter class="w-10 shrink-0 border-0 bg-transparent text-center text-sm font-medium text-gray-900 focus:outline-none focus:ring-0 dark:text-white" placeholder="" :value="cartItem.qty" required />

                                                        <button type="button" id="increment-button" @click="increment(cartItem.rowId,cartItem.qty)" class="inline-flex h-5 w-5 shrink-0 items-center justify-center rounded-md border border-gray-300 bg-gray-100 hover:bg-gray-200 focus:outline-none focus:ring-2 focus:ring-gray-100 dark:border-gray-600 dark:bg-gray-700 dark:hover:bg-gray-600 dark:focus:ring-gray-700">
                                                            <svg class="h-2.5 w-2.5 text-gray-900 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                                                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16" />
                                                            </svg>
                                                        </button>
                                                    </div>
                                                    <div class="text-end md:order-4 md:w-32">
                                                        <p class="text-base font-bold text-gray-900 dark:text-white">{{cartItem.subtotal}} {{currency}}</p>
                                                    </div>
                                                </div>

                                                <div class="w-full min-w-0 flex-1 space-y-4 md:order-2 md:max-w-md">
                                                    <a href="#" class="text-base font-medium text-gray-900 hover:underline dark:text-white">{{cartItem.name}}</a>

                                                    <div class="flex items-center gap-4">
                                                        <button @click="removeFromCart(cartItem.rowId)" type="button" class="inline-flex items-center text-sm font-medium text-red-600 hover:underline dark:text-red-500">
                                                            <svg class="me-1.5 h-5 w-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18 17.94 6M18 18 6.06 6" />
                                                            </svg>
                                                            {{__('translate.delete')}}
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="mx-auto mt-6 max-w-4xl flex-1 space-y-6 lg:mt-0 lg:w-full">
                                    <div class="space-y-4 rounded-lg border border-gray-200 bg-white p-4 shadow-sm dark:border-gray-700 dark:bg-gray-800 sm:p-6">
                                        <p class="text-xl font-semibold text-gray-900 dark:text-white">{{__('translate.summary')}}</p>
                                        <div class="space-y-4">
                                            <div class="space-y-2">
                                                <dl class="flex items-center justify-between gap-4">
                                                    <dt class="text-base font-normal text-gray-500 dark:text-gray-400">{{__('translate.sum')}}</dt>
                                                    <dd class="text-base font-medium text-gray-900 dark:text-white">{{countCart > 0 ? props.total+' '+currency : '-'}}</dd>
                                                </dl>
                                            </div>
                                        </div>
                                        <Link v-if="countCart > 0" :href="(!foundation ? route('buy.detail') : route('buy.paymentView'))" class="flex w-full items-center justify-center rounded-lg bg-blue-work px-5 py-2.5 text-sm font-medium text-white hover:bg-blue-work-100 focus:outline-none focus:ring-4 focus:ring-primary-300 dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800" :class="{'opacity-50 cursor-default' : !foundation}">{{__('translate.pay')}}</Link>
                                        <div class="flex items-center justify-center gap-2">
                                            <span class="text-sm font-normal text-gray-500 dark:text-gray-400"> {{__('translate.or')}} </span>
                                            <Link :href="route('buy.index')" class="inline-flex items-center gap-2 text-sm font-medium text-primary-700 underline hover:no-underline dark:text-primary-500">
                                                {{__('translate.continueBuy')}}
                                                <svg class="h-5 w-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 12H5m14 0-4 4m4-4-4-4" />
                                                </svg>
                                            </Link>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-span-12 grid grid grid-cols-1 lg:grid-cols-2 gap-6" v-if="countCart > 0">
                                <div>
                                    <InputLabel :value="__('translate.fundations')"/>
                                    <multiselect
                                        :selectLabel="__('translate.selectLabel')"
                                        :selectGroupLabel="__('translate.selectGroupLabel')"
                                        :selectedLabel="__('translate.selectedLabel')"
                                        :deselectLabel="__('translate.deselectLabel')"
                                        track-by="name"
                                        :multiple="false"
                                        label="name"
                                        @select="dispatchAction"
                                        :placeholder="__('translate.placeholder')"
                                        v-model="foundation" :options="optionsFundations">
                                        <template #noResult>
                                            <span>{{__('translate.noOptions')}}</span>
                                        </template>
                                        <template #noOptions>
                                            <span>{{__('translate.noResult')}}</span>
                                        </template>
                                    </multiselect>
                                    <div class="bg-blue-100 text-blue-500 rounded-md p-2 text-sm mt-2">{{__('translate.fundationsInfo')}}</div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </AppLayout>
</template>
<style src="vue-multiselect/dist/vue-multiselect.css"></style>
<style lang="scss">

.multiselect__tag{
    background: #00a0e3 !important;
}
.multiselect__option--highlight {
    background: #00a0e3 !important;
    outline: none;
    color: white;
}

.multiselect__option--highlight:after {
    content: attr(data-select);
    background: #00a0e3 !important;
    color: white;
}

.multiselect__option--selected {
    background: #00A0E3B2 !important;
    color: #35495E;
    font-weight: bold;
}

.multiselect__option--selected.multiselect__option--highlight {
    background: #00A0E3B2 !important;
    color: #fff;
}

.multiselect__option--selected.multiselect__option--highlight:after {
    background: #00A0E3B2 !important;
    content: attr(data-deselect);
    color: white !important;
}

.multiselect__option--selected:after {
    content: attr(data-selected);
    color: #00A0E3B2;
    background: transparent !important;
}
</style>
