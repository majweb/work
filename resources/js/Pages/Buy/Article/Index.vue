<script setup>
import { ref, watch, computed } from 'vue';
import { Link, router, usePage } from '@inertiajs/vue3';
import AppLayout from '@/Layouts/AppLayout.vue';
import Pagination from '@/Components/Pagination.vue';

import { pickBy, debounce } from 'lodash';
import DialogModal from "@/Components/DialogModal.vue";
import DangerButton from "@/Components/DangerButton.vue";
import SecondaryButton from "@/Components/SecondaryButton.vue";

const props = defineProps({
    articles: Object,
    filters: Object,
    // Opcjonalnie, jeśli backend przekaże produkt (np. pakiet artykułu)
    product: { type: Object, required: false },
    check: { type: Object, required: false },
});

const page = usePage();
const firmPoints = computed(() => page?.props?.auth?.user?.firm?.points ?? null);

const selectedArticle = ref(null);
const confirmCancelArticle = ref(false);

const params = ref({
    field: props.filters.field,
    direction: props.filters.direction,
});

const resetFilters = () => {
    router.get(route('articles.index'));
}
const openModal = (user) => {
    confirmCancelArticle.value = true;
    selectedArticle.value = user;
}
const DeleteUser = () => {
    if (selectedArticle) {
        router.delete(route('articles.destroy', selectedArticle.value), {
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
const resetSort = () => {
    params.value.field = null;
    params.value.direction = null;
}

watch(params.value, debounce(function () {
    let rest = pickBy(params.value);
    router.get(route('articles.index'), rest, { preserveState: true, replace: true });
}, 300));

</script>
<template>
    <AppLayout :title="__('translate.recruits')">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{__('translate.articles')}}
            </h2>
        </template>
        <div class="py-12 bg-gray-50/50 min-h-screen px-2 sm:px-0">
            <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                <!-- HEADER CARD -->
                <div class="bg-white rounded-[3rem] shadow-xl shadow-blue-900/5 border border-gray-100 p-10 mb-8">
                    <div class="flex items-center justify-between">
                        <div>
                            <h3 class="text-2xl font-black text-[#0A2C5C] uppercase tracking-tight">{{ __('translate.articles') }}</h3>
                            <p class="text-[10px] font-bold text-gray-400 uppercase tracking-widest mt-1">{{ __('translate.forInfo') }}</p>
                        </div>
                    </div>
                </div>

                <!-- INFO CARDS -->
                <div class="bg-white rounded-[3rem] shadow-xl shadow-blue-900/5 border border-gray-100 p-10 mb-8">
                    <div class="flex flex-col md:flex-row gap-12 items-center">
                        <div class="md:w-1/2">
                            <p class="text-[#0A2C5C] font-bold leading-relaxed uppercase">
                                {{ __('translate.articleDescription') }}
                            </p>
                        </div>
                        <div class="md:w-1/2 flex justify-center">
                            <div class="relative">
                                <div class="absolute inset-0 bg-blue-500/5 blur-3xl rounded-full"></div>
                                <img src="/images/icons/firm/artykul.svg" alt="Artykuł" class="relative max-w-sm h-auto transition-transform hover:scale-105 duration-500">
                            </div>
                        </div>
                    </div>
                </div>

                <!-- INFO CARDS -->
                <div class="bg-white rounded-[3rem] shadow-xl shadow-blue-900/5 border border-gray-100 p-10 mb-8">
                    <div class="flex items-center gap-4 mb-10">
                        <h3 class="text-[10px] font-black text-[#0A2C5C] uppercase tracking-[0.2em]">{{ __('translate.information') }}</h3>
                        <div class="h-px flex-1 bg-gray-100"></div>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-3 gap-12">
                        <div class="group flex flex-col items-center text-center">
                            <div class="w-16 h-16 bg-gray-50 rounded-2xl flex items-center justify-center mb-6 transition-colors group-hover:bg-blue-50">
                                <img src="/images/icons/firm/what.svg" alt="What is" class="h-10">
                            </div>
                            <h3 class="text-xs font-black text-[#0A2C5C] uppercase tracking-widest mb-4">{{ __('translate.whatIsArticleService') }}</h3>
                            <p class="text-[10px] font-bold text-gray-400 uppercase tracking-widest leading-loose">
                                {{ __('translate.whatIsArticleServiceDescription') }}
                            </p>
                        </div>
                        <div class="group flex flex-col items-center text-center">
                            <div class="w-16 h-16 bg-gray-50 rounded-2xl flex items-center justify-center mb-6 transition-colors group-hover:bg-blue-50">
                                <img src="/images/icons/firm/have.svg" alt="What have" class="h-10">
                            </div>
                            <h3 class="text-xs font-black text-[#0A2C5C] uppercase tracking-widest mb-4">{{ __('translate.whatIncludeArticle') }}</h3>
                            <ul class="text-[10px] font-bold text-gray-400 uppercase tracking-widest leading-loose text-left space-y-2">
                                <li class="flex items-center gap-2">
                                    <div class="w-1.5 h-1.5 rounded-full bg-[#00a3e0]"></div>
                                    {{ __('translate.articleInclude1') }}
                                </li>
                                <li class="flex items-center gap-2">
                                    <div class="w-1.5 h-1.5 rounded-full bg-[#00a3e0]"></div>
                                    {{ __('translate.articleInclude2') }}
                                </li>
                                <li class="flex items-center gap-2">
                                    <div class="w-1.5 h-1.5 rounded-full bg-[#00a3e0]"></div>
                                    {{ __('translate.articleInclude3') }}
                                </li>
                                <li class="flex items-center gap-2">
                                    <div class="w-1.5 h-1.5 rounded-full bg-[#00a3e0]"></div>
                                    {{ __('translate.articleInclude4') }}
                                </li>
                                <li class="flex items-center gap-2">
                                    <div class="w-1.5 h-1.5 rounded-full bg-[#00a3e0]"></div>
                                    {{ __('translate.articleInclude5') }}
                                </li>
                            </ul>
                        </div>
                        <div class="group flex flex-col items-center text-center">
                            <div class="w-16 h-16 bg-gray-50 rounded-2xl flex items-center justify-center mb-6 transition-colors group-hover:bg-blue-50">
                                <img src="/images/icons/firm/use.svg" alt="use" class="h-10">
                            </div>
                            <h3 class="text-xs font-black text-[#0A2C5C] uppercase tracking-widest mb-4">{{ __('translate.howUseArticle') }}</h3>
                            <ul class="text-[10px] font-bold text-gray-400 uppercase tracking-widest leading-loose text-left space-y-2">
                                <li class="flex items-center gap-2">
                                    <div class="w-1.5 h-1.5 rounded-full bg-[#00a3e0]"></div>
                                    {{ __('translate.articleUse1') }}
                                </li>
                                <li class="flex items-center gap-2">
                                    <div class="w-1.5 h-1.5 rounded-full bg-[#00a3e0]"></div>
                                    {{ __('translate.articleUse2') }}
                                </li>
                                <li class="flex items-center gap-2">
                                    <div class="w-1.5 h-1.5 rounded-full bg-[#00a3e0]"></div>
                                    {{ __('translate.articleUse3') }}
                                </li>
                                <li class="flex items-center gap-2">
                                    <div class="w-1.5 h-1.5 rounded-full bg-[#00a3e0]"></div>
                                    {{ __('translate.articleUse4') }}
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- CTA SECTION -->
                <div class="bg-[#0A2C5C] rounded-[3rem] p-12 text-center text-white mb-8 relative overflow-hidden shadow-2xl shadow-blue-900/20">
                    <div class="absolute top-0 right-0 w-64 h-64 bg-blue-400/10 rounded-full blur-3xl -mr-32 -mt-32"></div>
                    <div class="absolute bottom-0 left-0 w-64 h-64 bg-blue-400/10 rounded-full blur-3xl -ml-32 -mb-32"></div>

                    <h2 class="text-2xl font-black mb-6 uppercase tracking-tight relative z-10">{{ __('translate.articleCallToAction') }}</h2>

                    <div class="flex flex-wrap justify-center gap-8 mb-10 relative z-10">
                        <div class="bg-white/10 backdrop-blur-sm px-8 py-4 rounded-3xl border border-white/10">
                            <p class="text-[10px] font-black uppercase tracking-widest text-blue-200 mb-1">{{ __('translate.youHave') }}</p>
                            <p class="text-2xl font-black">{{ firmPoints !== null ? firmPoints.toLocaleString() : '—' }} <span class="text-[10px] text-blue-200">{{ __('translate.points').toUpperCase() }}</span></p>
                        </div>
                        <div class="bg-white/10 backdrop-blur-sm px-8 py-4 rounded-3xl border border-white/10">
                            <p class="text-[10px] font-black uppercase tracking-widest text-blue-200 mb-1">{{ __('translate.article').toUpperCase() }}</p>
                            <p class="text-2xl font-black">{{ props.product?.price ? parseInt(props.product.price).toLocaleString() : '—' }} <span class="text-[10px] text-blue-200">{{ __('translate.points').toUpperCase() }}</span></p>
                        </div>
                    </div>

                    <div v-if="props.check" class="mb-10 text-[10px] font-black uppercase tracking-widest bg-white/5 py-4 px-8 rounded-2xl inline-block border border-white/5 relative z-10">
                        {{ __('translate.availableArticlesCount') }} <span class="text-blue-300 mx-2">{{ props.check.qty }}</span>
                        | {{ __('translate.activeFrom') }} <span class="text-blue-300 mx-2">{{ props.check.start.slice(0, 10) }}</span>
                        {{ __('translate.activeTo').toLowerCase() }} <span class="text-blue-300 mx-2">{{ props.check.end.slice(0, 10) }}</span>
                    </div>

                    <div class="flex flex-col sm:flex-row justify-center gap-6 relative z-10 max-w-3xl mx-auto">
                        <div class="flex-1">
                            <Link
                                v-if="firmPoints !== null && props.product && firmPoints >= parseInt(props.product.price)"
                                :href="route('buy.change', [props.product.id, props.product.price])"
                                method="post"
                                preserve-scroll
                                as="button"
                                class="w-full bg-[#e31e24] hover:bg-[#c1191f] text-white text-[10px] font-black uppercase tracking-widest py-5 rounded-2xl transition-all shadow-lg shadow-red-900/20 hover:-translate-y-1 active:translate-y-0"
                            >
                                {{ __('translate.exchangePointsArticle') }}
                            </Link>
                            <button
                                v-else
                                disabled
                                class="w-full bg-white/10 text-white/40 text-[10px] font-black uppercase tracking-widest py-5 rounded-2xl cursor-not-allowed border border-white/5"
                            >
                                {{ __('translate.insufficientPoints') }}
                            </button>
                        </div>

                        <div class="flex-1">
                            <Link
                                :href="route('articles.create')"
                                as="button"
                                class="w-full bg-[#00a3e0] hover:bg-[#008cc2] text-white text-[10px] font-black uppercase tracking-widest py-5 rounded-2xl transition-all shadow-lg shadow-blue-400/20 hover:-translate-y-1 active:translate-y-0"
                            >
                                {{ __('translate.addArticle') }}
                            </Link>
                        </div>
                    </div>
                </div>

                <!-- LISTA ARTYKUŁÓW -->
                <div class="bg-white rounded-[3rem] shadow-xl shadow-blue-900/5 border border-gray-100 p-10">
                    <div class="flex items-center gap-4 mb-10">
                        <h3 class="text-[10px] font-black text-[#0A2C5C] uppercase tracking-[0.2em]">{{ __('translate.publishedArticles') }}</h3>
                        <div class="h-px flex-1 bg-gray-100"></div>
                    </div>

                    <div v-if="props.articles.data.length === 0" class="text-center py-20">
                        <div class="w-20 h-20 bg-gray-50 rounded-full flex items-center justify-center mx-auto mb-6">
                            <svg class="w-10 h-10 text-gray-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10l4 4v12a2 2 0 01-2 2z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 11l0 6M9 14l6 0" />
                            </svg>
                        </div>
                        <p class="text-[10px] font-black text-gray-400 uppercase tracking-widest">{{ __('translate.notFoundArticle') }}</p>
                    </div>

                    <div v-else class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                        <div v-for="article in props.articles.data" :key="article.id" class="group bg-white rounded-[2.5rem] p-8 shadow-sm border border-gray-100 flex flex-col transition-all duration-300 hover:shadow-xl hover:shadow-blue-900/5 hover:-translate-y-1">
                            <div class="mb-6">
                                <div class="flex justify-between items-start mb-2">
                                    <p class="text-[10px] font-black text-gray-300 uppercase tracking-[0.2em]">
                                        ID {{ article.id }}
                                    </p>
                                    <div v-if="article.active" class="flex items-center gap-1 text-green-500">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="4">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                                        </svg>
                                        <span class="text-[8px] font-black uppercase tracking-widest">{{ __('translate.active') }}</span>
                                    </div>
                                    <div v-else class="flex items-center gap-1 text-red-400">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="4">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                                        </svg>
                                        <span class="text-[8px] font-black uppercase tracking-widest">{{ __('translate.inactive') }}</span>
                                    </div>
                                </div>
                                <h4 class="text-xl font-black text-gray-900 uppercase tracking-tight leading-tight line-clamp-2 min-h-[3.5rem]">
                                    {{ article.title }}
                                </h4>
                            </div>

                            <div class="bg-gray-50/50 rounded-2xl p-6 border border-gray-100/50 mb-8 flex-grow">
                                <div>
                                    <p class="text-[10px] font-black text-gray-400 uppercase tracking-widest mb-1">{{ __('translate.date') }}</p>
                                    <p class="text-xs font-bold text-[#0A2C5C] uppercase tracking-widest">
                                        {{ (article.created_at || '').slice(0, 10) }}
                                    </p>
                                </div>
                            </div>

                            <div class="flex flex-col gap-3 mt-auto">
                                <Link
                                    :href="route('articles.edit', article)"
                                    class="flex justify-center items-center w-full bg-[#0A2C5C] text-white font-black py-4 rounded-2xl text-[10px] uppercase tracking-widest hover:bg-blue-800 transition shadow-lg shadow-blue-900/10"
                                >
                                    {{ __('translate.edit') }}
                                </Link>
                                <button
                                    @click="openModal(article)"
                                    class="flex justify-center items-center w-full bg-white border border-gray-100 text-red-500 font-black py-4 rounded-2xl text-[10px] uppercase tracking-widest hover:bg-red-50 transition"
                                >
                                    {{ __('translate.delete') }}
                                </button>
                            </div>
                        </div>
                    </div>

                    <div v-if="articles.total > props.articles.per_page" class="mt-12 flex justify-center">
                        <Pagination :links="articles.links"/>
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
