<script setup>
import {computed, ref, watch} from 'vue';
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
const optionsFundations = ref([...props.foundations]);
const foundation = ref(null);
const clicked = ref(false);
const formRef = ref(null);


watch(() => props.foundations, (newVal) => {
    optionsFundations.value = [...newVal];
});

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
const csrf_token = computed(() => usePage().props.csrf_token);
const submitForm = () => {
    clicked.value = true;
    if (formRef.value) {
        formRef.value.submit();
    }
    setTimeout(() => (clicked.value = false), 3000); // Resetowanie `clicked` po 3s
};
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
                                        <form ref="formRef"  @submit.prevent="submitForm" v-if="countCart > 0 && foundation" :action="route('buy.order')" method="post" class="flex justify-center">
                                            <input type="hidden" name="_token" :value="csrf_token"/>
                                            <button :disabled="clicked" class="flex w-full items-center justify-center rounded-lg bg-blue-work px-5 py-2.5 text-sm font-medium text-white hover:bg-blue-work-100 focus:outline-none focus:ring-4 focus:ring-primary-300 dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800" :class="{'opacity-50 cursor-default' : !foundation}" type="submit">
                                                <svg v-if="clicked" aria-hidden="true" role="status" class="inline w-4 h-4 text-white animate-spin" viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z" fill="#E5E7EB"/>
                                                    <path d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z" fill="currentColor"/>
                                                </svg>
                                                <span v-else>
                                                {{__('translate.pay')}}
                                                </span>
                                            </button>
                                        </form>
                                        <Link class="flex w-full items-center justify-center rounded-lg bg-blue-work px-5 py-2.5 text-sm font-medium text-white hover:bg-blue-work-100 focus:outline-none focus:ring-4 focus:ring-primary-300 dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800" :class="{'opacity-50 cursor-default' : !foundation}" v-if="!foundation" :href="route('buy.index')">{{__('translate.pay')}}</Link>
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
