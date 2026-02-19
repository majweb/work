<script setup>
import {computed, onMounted, ref, watch} from 'vue';
import {Link, router, usePage} from '@inertiajs/vue3';
import AppLayout from '@/Layouts/AppLayout.vue';
import Multiselect from 'vue-multiselect'
import InputLabel from "@/Components/InputLabel.vue";
const props = defineProps({
    total: String,
    countCart: Number,
    cartItems: Object,
    foundations: Object,
    existoundation: Object, // fundacja z sesji lub user->foundation
});
const optionsFundations = ref([...props.foundations]);
const foundation = ref(props.existoundation ? {
    name: props.existoundation.name,
    value: props.existoundation.value
} : null);

const clicked = ref(false);
const formRef = ref(null);

// Jeśli istnieje fundacja z sesji, wywołujemy dispatchAction od razu
onMounted(() => {
    if (props.existoundation) {
        dispatchAction();
    }
});

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
const currency  = '$';
const dispatchAction = () => {
    if (foundation.value) {
        router.post(route('buy.addFoundation', {foundation: foundation.value}), null, {preserveScroll: true});
    }
}
onMounted(() => {
    if (props.existoundation) {
        // dispatchAction();
    }
});


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
                            <div class="mt-6 sm:mt-8 flex flex-col lg:flex-row items-start gap-6 xl:gap-8">
                                <div class="w-full lg:flex-1">
                                        <div v-if="countCart == 0">
                                            <div class="text-center py-4 px-6 whitespace-nowrap font-semibold">
                                                <p>
                                                    {{__('translate.emptyCart')}}
                                                </p>
                                            </div>
                                        </div>
                                    <div class="space-y-6" v-else>
                                        <div v-for="cartItem in props.cartItems" :key="cartItem.rowId" class="rounded-3xl border border-gray-100 bg-white p-6 shadow-sm hover:shadow-md transition-all duration-300 dark:border-gray-700 dark:bg-gray-800">
                                            <div class="space-y-4 md:flex md:items-center md:justify-between md:gap-6 md:space-y-0">
                                                <!-- Miniatura produktu -->
                                                <div class="shrink-0 flex items-center justify-center w-24 h-24 bg-gray-50 rounded-2xl border border-gray-100 p-2 overflow-hidden">
                                                    <img :src="`/images/price/${cartItem.id}-points.svg`"
                                                         class="w-16 h-16 object-contain opacity-90"
                                                         :alt="cartItem.name"
                                                         @error="(e) => e.target.src = '/images/icons/recruit/organizacja_pracy.svg'" />
                                                </div>

                                                <div class="w-full min-w-0 flex-1 space-y-4 md:order-2 md:max-w-md">
                                                    <div>
                                                        <h3 class="text-lg font-black text-[#0b2a55] dark:text-white leading-tight uppercase tracking-tight">
                                                            {{cartItem.name}}
                                                        </h3>
                                                        <p class="text-sm font-bold text-[#00aaff] mt-1">
                                                            {{ currency }}{{cartItem.price}} <span class="text-[10px] text-gray-400 uppercase tracking-widest ml-1">/ {{ __('translate.service') }}</span>
                                                        </p>
                                                    </div>

                                                    <div class="flex items-center gap-4">
                                                        <button @click="removeFromCart(cartItem.rowId)" type="button" class="inline-flex items-center text-xs font-black text-red-500 hover:text-red-700 uppercase tracking-widest transition-colors">
                                                            <svg class="me-1.5 h-4 w-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18 17.94 6M18 18 6.06 6" />
                                                            </svg>
                                                            {{__('translate.delete')}}
                                                        </button>
                                                    </div>
                                                </div>

                                                <div class="flex items-center justify-between md:order-3 md:justify-end gap-8">
                                                    <div class="flex items-center bg-gray-50 p-1.5 rounded-xl border border-gray-100">
                                                        <button type="button" @click="decrement(cartItem.rowId,cartItem.qty)" class="inline-flex h-8 w-8 shrink-0 items-center justify-center rounded-lg bg-white border border-gray-200 text-gray-600 hover:bg-gray-50 hover:text-[#0b2a55] shadow-sm transition-all focus:outline-none focus:ring-2 focus:ring-blue-100">
                                                            <svg class="h-3 w-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 2">
                                                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h16" />
                                                            </svg>
                                                        </button>
                                                        <input type="text" readonly class="w-12 shrink-0 border-0 bg-transparent text-center text-sm font-black text-[#0b2a55] focus:outline-none focus:ring-0 dark:text-white" :value="cartItem.qty" />
                                                        <button type="button" @click="increment(cartItem.rowId,cartItem.qty)" class="inline-flex h-8 w-8 shrink-0 items-center justify-center rounded-lg bg-white border border-gray-200 text-gray-600 hover:bg-gray-50 hover:text-[#0b2a55] shadow-sm transition-all focus:outline-none focus:ring-2 focus:ring-blue-100">
                                                            <svg class="h-3 w-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                                                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16" />
                                                            </svg>
                                                        </button>
                                                    </div>
                                                    <div class="text-end md:w-32">
                                                        <p class="text-xs font-bold text-gray-400 uppercase tracking-widest mb-1">{{ __('translate.subtotal') }}</p>
                                                        <p class="text-2xl font-black text-[#0b2a55] dark:text-white tracking-tighter">
                                                            <span class="text-sm font-bold text-[#00aaff] mr-0.5">{{ currency }}</span>{{cartItem.subtotal}}
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="w-full lg:w-80 xl:w-96 sticky top-8">
                                    <div class="space-y-6 rounded-3xl border border-gray-100 bg-white p-6 shadow-xl dark:border-gray-700 dark:bg-gray-800 sm:p-8">
                                        <div class="flex items-center gap-3 mb-2">
                                            <div class="p-2 bg-[#0b2a55]/5 rounded-xl">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-[#0b2a55]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2" />
                                                </svg>
                                            </div>
                                            <p class="text-xl font-black text-[#0b2a55] dark:text-white uppercase tracking-tight">{{__('translate.summary')}}</p>
                                        </div>

                                        <div class="space-y-4 pt-4 border-t border-gray-100">
                                            <div class="flex items-center justify-between">
                                                <div class="space-y-1">
                                                    <p class="text-[10px] font-black text-gray-400 uppercase tracking-[0.2em]">{{ __('translate.summary') }}</p>
                                                    <p class="text-base font-bold text-[#0b2a55] dark:text-white uppercase leading-none">{{ __('translate.subtotal') }}</p>
                                                </div>
                                                <p class="text-3xl font-black text-[#0b2a55] dark:text-white tracking-tighter">
                                                    <span class="text-lg font-bold text-[#00aaff] mr-0.5">{{ currency }}</span>{{countCart > 0 ? props.total : '0'}}
                                                </p>
                                            </div>
                                        </div>

                                        <div class="space-y-3 mt-8">
                                            <form ref="formRef" @submit.prevent="submitForm" v-if="countCart > 0 && foundation" :action="route('buy.order')" method="post">
                                                <input type="hidden" name="_token" :value="csrf_token"/>
                                                <button :disabled="clicked"
                                                        class="group relative flex w-full items-center justify-center gap-3 overflow-hidden rounded-2xl bg-[#0b2a55] px-6 py-4 text-center text-sm font-black uppercase tracking-widest text-white shadow-xl transition-all hover:bg-[#0d3874] active:scale-[0.98] disabled:opacity-50"
                                                        type="submit">
                                                    <span v-if="clicked" class="flex items-center gap-2">
                                                        <svg aria-hidden="true" role="status" class="inline w-4 h-4 text-white animate-spin" viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z" fill="#E5E7EB"/>
                                                            <path d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z" fill="currentColor"/>
                                                        </svg>
                                                        <span>{{__('translate.pay')}}</span>
                                                    </span>
                                                    <template v-else>
                                                        <span class="relative z-10">{{__('translate.pay')}}</span>
                                                        <svg xmlns="http://www.w3.org/2000/svg" class="relative z-10 h-5 w-5 transition-transform group-hover:translate-x-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                                                        </svg>
                                                        <div class="absolute inset-0 -translate-x-full bg-gradient-to-r from-transparent via-white/10 to-transparent transition-transform duration-500 group-hover:translate-x-full"></div>
                                                    </template>
                                                </button>
                                            </form>

                                            <Link v-if="!foundation"
                                                  :href="route('buy.index')"
                                                  class="flex w-full items-center justify-center gap-3 rounded-2xl bg-[#0b2a55] px-6 py-4 text-center text-sm font-black uppercase tracking-widest text-white shadow-xl transition-all hover:bg-[#0d3874] opacity-50 cursor-default">
                                                {{__('translate.pay')}}
                                            </Link>

                                            <Link :href="route('buy.index')"
                                                  class="flex w-full items-center justify-center gap-2 rounded-2xl border-2 border-gray-100 bg-white px-6 py-3.5 text-center text-xs font-black uppercase tracking-widest text-gray-400 transition-all hover:border-[#00aaff] hover:text-[#00aaff]">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                                                </svg>
                                                {{__('translate.continueBuy')}}
                                            </Link>
                                        </div>

                                        <div class="flex items-center justify-center gap-2 pt-4">
                                            <div class="h-px bg-gray-100 flex-1"></div>
                                            <span class="text-[10px] font-black text-gray-300 uppercase tracking-widest px-2">{{ __('translate.secureCheckout') }}</span>
                                            <div class="h-px bg-gray-100 flex-1"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-12" v-if="countCart > 0">
                                <div class="bg-white rounded-3xl p-8 shadow-sm border border-gray-100 max-w-2xl lg:max-w-none">
                                    <div class="flex items-center gap-3 mb-6">
                                        <div class="p-2 bg-[#00aaff]/10 rounded-xl">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-[#00aaff]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                                            </svg>
                                        </div>
                                        <h3 class="text-xl font-black text-[#0b2a55] uppercase tracking-tight">{{ __('translate.fundations') }}</h3>
                                    </div>

                                    <div class="space-y-4">
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

                                        <div class="flex items-start gap-3 bg-blue-50/50 text-[#00aaff] rounded-2xl p-4 border border-blue-100/50">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 shrink-0 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                            </svg>
                                            <p class="text-sm font-bold leading-relaxed">{{__('translate.fundationsInfo')}}</p>
                                        </div>
                                    </div>
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

.multiselect{
    border-radius: 1rem !important;
}
.multiselect__tags {
    border: 1px solid #f3f4f6 !important;
    border-radius: 1rem !important;
    padding: 10px 40px 0 12px !important;
    min-height: 48px !important;
    background: #f9fafb !important;
}
.multiselect__placeholder {
    color: #9ca3af !important;
    padding-top: 4px !important;
    font-weight: 600 !important;
    font-size: 0.875rem !important;
}
.multiselect__single {
    background: transparent !important;
    padding-top: 4px !important;
    font-weight: 700 !important;
    color: #0b2a55 !important;
    font-size: 0.875rem !important;
}
.multiselect__content-wrapper {
    border: 1px solid #f3f4f6 !important;
    border-radius: 1rem !important;
    margin-top: 4px !important;
    overflow: hidden !important;
    box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1) !important;
}
.multiselect__tag{
    background: #0b2a55 !important;
    border-radius: 8px !important;
    font-weight: 700 !important;
}
.multiselect__option--highlight {
    background: #0b2a55 !important;
    outline: none;
    color: white;
}

.multiselect__option--highlight:after {
    content: attr(data-select);
    background: #0b2a55 !important;
    color: white;
}

.multiselect__option--selected {
    background: #f3f4f6 !important;
    color: #0b2a55 !important;
    font-weight: bold;
}

.multiselect__option--selected.multiselect__option--highlight {
    background: #0b2a55 !important;
    color: #fff;
}
</style>
