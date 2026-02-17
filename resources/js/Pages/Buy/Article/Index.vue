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
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{__('translate.articles')}}
            </h2>
        </template>
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg">
                    <div class="p-6 lg:p-8 bg-white dark:bg-gray-800 dark:bg-gradient-to-bl dark:from-gray-700/50 dark:via-transparent border-b border-gray-200 dark:border-gray-700">

                        <!-- Sekcja nagłówka i opisu jak na designie -->
                        <div class="flex flex-col md:flex-row gap-8 items-center mb-16">
                            <div class="md:w-1/2">
                                <div class="flex items-center gap-4 mb-4">
                                    <h1 class="text-3xl font-bold text-[#143d8c] uppercase">ARTYKUŁ</h1>
                                </div>
                                <p class="text-xl font-semibold text-[#143d8c] mb-6">Twoja wiedza, która buduje markę i zaufanie.</p>
                                <p class="text-gray-700 dark:text-gray-300 leading-relaxed">
                                    Artykuł ekspercki to przestrzeń do zaprezentowania wiedzy, doświadczenia i perspektywy Twojej firmy – w wybranych przez Ciebie językach. To profesjonalna forma komunikacji, która buduje wiarygodność i pozycję eksperta w branży.
                                    Wykorzystaj go w działaniach employer brandingowych, komunikacji marketingowej i relacjach z partnerami biznesowymi, pokazując, że Twoja marka nie tylko działa, ale także inspiruje i wyznacza kierunki.
                                </p>
                            </div>
                            <div class="md:w-1/2 flex flex-col items-center">
                                <img src="/images/icons/firm/certyfikat.svg" alt="Artykuł" class="max-w-sm h-auto mb-4">
                            </div>
                        </div>

                        <!-- Kolumny informacyjne -->
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-12 mb-16">
                            <div class="flex flex-col items-center text-center">
                                <img src="/images/icons/firm/certyfikat.svg" alt="Co to?" class="h-16 mb-4">
                                <h3 class="text-xl font-bold text-[#00a3e0] mb-4">Czym jest tak usługa?</h3>
                                <p class="text-gray-600 dark:text-gray-400">
                                    Artykuł reklamowy to możliwość publikacji treści przygotowanej przez Twoją firmę w sekcji artykułów na portalu WORK4YOU.GLOBAL – w wybranych przez Ciebie językach.
                                </p>
                            </div>
                            <div class="flex flex-col items-center text-center">
                                <img src="/images/icons/firm/certyfikat.svg" alt="Co zawiera" class="h-16 mb-4">
                                <h3 class="text-xl font-bold text-[#00a3e0] mb-4">Co zawiera usługa?</h3>
                                <ul class="text-gray-600 dark:text-gray-400 list-disc list-inside text-left">
                                    <li>Publikację artykułu na portalu</li>
                                    <li>treść dostarczoną przez firmę,</li>
                                    <li>możliwość wyboru języka publikacji,</li>
                                    <li>prezentację firmy jako autora materiału</li>
                                    <li>ekspozycję w sekcji artykułów WORK4YOU.GLOBAL.</li>
                                </ul>
                                <p class="mt-3 text-sm text-gray-600 dark:text-gray-400">Usługa nieograniczona czasowo.</p>
                            </div>
                            <div class="flex flex-col items-center text-center">
                                <img src="/images/icons/firm/certyfikat.svg" alt="Jak wykorzystać" class="h-16 mb-4">
                                <h3 class="text-xl font-bold text-[#00a3e0] mb-4">Jak możesz ją wykorzystać?</h3>
                                <ul class="text-gray-600 dark:text-gray-400 list-disc list-inside text-left">
                                    <li>do budowania wizerunku eksperta w branży,</li>
                                    <li>w działaniach employer brandingowych,</li>
                                    <li>w komunikacji marketingowej i PR,</li>
                                    <li>do zwiększenia rozpoznawalności wśród kandydatów i partnerów biznesowych.</li>
                                </ul>
                            </div>
                        </div>

                        <!-- Akcje: Wymiana punktów / Dodanie artykułu -->
                        <div class="bg-[#143d8c] rounded-3xl p-8 text-center text-white mb-16 relative overflow-hidden">
                            <h2 class="text-4xl font-bold mb-4">Dołącz do firm, które dzielą się wiedzą</h2>
                            <p class="text-2xl font-semibold mb-2">
                                POSIADASZ: <span>{{ firmPoints !== null ? firmPoints.toLocaleString() : '—' }}</span> PKT
                            </p>
                            <p class="text-2xl font-bold mb-8">
                                ARTYKUŁ: <span>{{ props.product?.price ? parseInt(props.product.price).toLocaleString() : '—' }}</span> PKT
                            </p>

                            <div class="flex flex-col sm:flex-row justify-center gap-4 relative z-10">
                                <div class="relative group">
                                    <span class="absolute -left-8 top-1/2 -translate-y-1/2 text-5xl font-bold text-white/20 group-hover:text-white/40 transition">1</span>
                                    <Link
                                        v-if="firmPoints !== null && props.product && firmPoints >= parseInt(props.product.price)"
                                        :href="route('buy.change', [props.product.id, props.product.price])"
                                        method="post"
                                        preserve-scroll
                                        as="button"
                                        class="bg-[#e31e24] hover:bg-[#c1191f] text-white font-bold py-4 px-8 rounded-xl text-xl transition shadow-lg uppercase"
                                    >
                                        WYMIeŃ PUNKTY NA ARTYKUŁ
                                    </Link>
                                    <button
                                        v-else
                                        disabled
                                        class="bg-gray-400 text-white font-bold py-4 px-8 rounded-xl text-xl uppercase cursor-not-allowed shadow-lg"
                                    >
                                        Niewystarczająca liczba punktów
                                    </button>
                                </div>

                                <div class="relative group">
                                    <span class="absolute -left-8 top-1/2 -translate-y-1/2 text-5xl font-bold text-white/20 group-hover:text-white/40 transition">2</span>
                                    <Link
                                        :href="route('articles.create')"
                                        as="button"
                                        class="bg-[#00a3e0] hover:bg-[#008cc2] text-white font-bold py-4 px-8 rounded-xl text-xl transition shadow-lg uppercase"
                                    >
                                        DODAJ ARTYKUŁ
                                    </Link>
                                </div>
                            </div>
                        </div>

                        <div class="mb-8 px-4">
                            <h2 class="text-2xl font-bold text-[#143d8c] mb-6">Opublikowane artykuły</h2>

                            <!-- Nagłówek listy -->
                            <div class="grid grid-cols-12 gap-4 px-6 mb-2 text-[#00a3e0] text-xs font-bold uppercase">
                                <div class="col-span-2">DATA</div>
                                <div class="col-span-5 text-center">TYTUŁ</div>
                                <div class="col-span-2 text-center">AKTYWNOŚĆ</div>
                                <div class="col-span-3 text-center">AKCJE</div>
                            </div>

                            <!-- Lista artykułów -->
                            <div class="flex flex-col gap-4">
                                <div v-if="props.articles.data.length == 0" class="bg-white border border-blue-work/20 rounded-xl p-6 text-center shadow-sm">
                                    <p class="text-gray-500">{{__('translate.notFoundArticle')}}</p>
                                </div>
                                <div v-else v-for="(article) in props.articles.data" :key="article.id" class="grid grid-cols-12 gap-4 items-center bg-white border border-blue-work/30 rounded-lg py-3 px-6 shadow-sm">
                                    <div class="col-span-2 text-sm font-semibold text-[#143d8c]">
                                        {{ (article.created_at || '').slice(0, 10) }}
                                    </div>
                                    <div class="col-span-5 text-center text-sm font-bold text-[#143d8c] line-clamp-2 px-2">
                                        {{ article.title }}
                                    </div>
                                    <div class="col-span-2 flex justify-center">
                                        <div class="text-sm text-gray-900">
                                            <svg v-if="article.active" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-green-500" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                                            </svg>
                                            <svg v-else xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-red-500" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="col-span-3 flex items-center justify-center gap-3">
                                        <Link :href="route('articles.edit',article)" as="button" class="bg-[#143d8c] hover:bg-[#0f2d66] text-white font-bold py-1 px-4 rounded text-xs uppercase w-24">
                                            EDYTUJ
                                        </Link>
                                        <button @click="openModal(article)" class="bg-[#e31e24] hover:bg-[#c1191f] text-white font-bold py-1 px-4 rounded text-xs uppercase w-24">
                                            USUŃ
                                        </button>
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
