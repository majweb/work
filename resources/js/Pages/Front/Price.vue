<script setup>
import FrontLayout from "@/Layouts/FrontLayout.vue";
import { ref, computed } from "vue";
import { Link } from "@inertiajs/vue3";

const props = defineProps({
    products: {
        type: Array,
        required: true
    },
    page: Object,
});

const packages = ref(
    props.products.map((p) => ({
        id: p.id,
        points: p.points,
        price: p.price
    }))
);

const selected = ref(packages.value[Math.floor(packages.value.length / 2)]);

const currentIndex = computed(() =>
    packages.value.findIndex(p => p.id === selected.value.id)
);

const totalSlots = computed(() => packages.value.length - 1);

const progressPercentage = computed(() => {
    if (totalSlots.value === 0) {
        return 0;
    }

    return (currentIndex.value / totalSlots.value) * 100;
});

const donated = computed(() =>
    (selected.value.price * 0.5).toFixed(2)
);
</script>

<template>
    <FrontLayout
        :title="props.page.title"
        :image="props.page.image"
        :keywords="props.page.keywords"
        :description="props.page.description"
        :url="route('front.price')"
        type="website"
    >

        <div class="py-24 bg-gray-50/50 min-h-screen relative overflow-hidden">
            <!-- Background Decorations -->
            <div class="absolute top-0 right-0 w-[500px] h-[500px] bg-blue-100/30 rounded-full -mr-64 -mt-64 blur-3xl animate-pulse"></div>
            <div class="absolute bottom-0 left-0 w-[400px] h-[400px] bg-red-50/20 rounded-full -ml-48 -mb-48 blur-3xl"></div>

            <div class="max-w-7xl mx-auto px-6 relative z-10">

                <!-- ===================== NAGŁÓWEK ===================== -->
                <div class="text-center mb-24">
                    <div class="inline-flex items-center gap-2 px-4 py-2 bg-white rounded-full shadow-sm border border-gray-100 mb-8 animate-bounce">
                        <span class="relative flex h-2 w-2">
                            <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-red-400 opacity-75"></span>
                            <span class="relative inline-flex rounded-full h-2 w-2 bg-red-500"></span>
                        </span>
                        <span class="text-[10px] font-black text-[#0A2C5C] uppercase tracking-[0.2em]">{{ __('translate.bestOffers') }}</span>
                    </div>

                    <h1 class="text-4xl md:text-6xl font-black text-[#0A2C5C] leading-tight uppercase tracking-tighter mb-8">
                        {{ __('info.header_big') }}
                    </h1>

                    <p class="text-lg text-gray-500 font-medium max-w-3xl mx-auto leading-relaxed mb-12 uppercase tracking-widest text-[11px]">
                        {{ __('info.header_desc_1') }}<br>
                        {{ __('info.header_desc_2') }}
                        <span class="text-red-500 font-black">
                            {{ __('info.header_desc_bold') }}
                        </span>
                        {{ __('info.header_desc_3') }}<br>
                        {{ __('info.header_desc_4') }}
                    </p>

                    <div class="flex justify-center">
                        <Link :href="route('front.readMore')" class="group relative inline-flex items-center gap-4 px-12 py-5 bg-[#0A2C5C] text-white text-xs font-black rounded-3xl uppercase tracking-[0.3em] shadow-2xl shadow-blue-900/20 hover:bg-[#00a0e3] transition-all hover:-translate-y-1">
                            {{ __('info.read_more') }}
                            <span class="text-xl group-hover:translate-x-2 transition-transform">→</span>
                        </Link>
                    </div>
                </div>

                <!-- ===================== LISTA PAKIETÓW ===================== -->
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 xl:grid-cols-7 gap-8 mb-24">
                    <div
                        v-for="(pack, index) in packages"
                        :key="pack.id"
                        @click="selected = pack"
                        class="group cursor-pointer rounded-[2.5rem] p-8 text-center transition-all duration-500 relative border flex flex-col items-center justify-between min-h-[320px]"
                        :class="[
                            selected.id === pack.id
                                ? 'bg-[#0A2C5C] border-transparent shadow-2xl shadow-blue-900/40 scale-105 lg:scale-110 z-10'
                                : 'bg-white border-gray-100 shadow-xl shadow-blue-900/5 hover:shadow-blue-900/10 hover:-translate-y-2',
                        ]"
                    >
                        <!-- Active Badge -->
                        <div v-if="selected.id === pack.id" class="absolute -top-4 left-1/2 -translate-x-1/2 px-4 py-1.5 bg-[#00a0e3] text-white text-[8px] font-black uppercase tracking-widest rounded-full shadow-lg">
                            {{ __('translate.selected') }}
                        </div>

                        <div class="w-20 h-20 rounded-3xl flex items-center justify-center mb-6 transition-transform duration-500 group-hover:scale-110"
                             :class="selected.id === pack.id ? 'bg-white/10' : 'bg-gray-50'">
                            <img
                                :src="`/images/price/${pack.points}.svg`"
                                class="w-12 h-12 object-contain"
                                :class="selected.id === pack.id ? 'brightness-0 invert' : ''"
                                :alt="pack.points"
                            />
                        </div>

                        <div class="space-y-1 mb-6">
                            <div class="text-4xl font-black transition-colors duration-300"
                                 :class="selected.id === pack.id ? 'text-white' : 'text-[#0A2C5C]'">
                                {{ pack.points.toLocaleString() }}
                            </div>
                            <div class="text-[10px] font-black uppercase tracking-[0.2em]"
                                 :class="selected.id === pack.id ? 'text-blue-200' : 'text-gray-400'">
                                {{ __('info.points') }}
                            </div>
                        </div>

                        <div class="w-full space-y-4">
                            <div class="text-xl font-black"
                                 :class="selected.id === pack.id ? 'text-white' : 'text-[#0A2C5C]'">
                                ${{ pack.price }}
                            </div>

                            <Link :href="route('buy.index')"
                                  class="block w-full py-4 rounded-2xl font-black text-[10px] uppercase tracking-widest transition-all"
                                  :class="selected.id === pack.id
                                      ? 'bg-white text-[#0A2C5C] hover:bg-gray-100'
                                      : 'bg-[#00a0e3] text-white hover:bg-[#008cc6] shadow-lg shadow-blue-400/20'">
                                {{ __('info.buy_now') }}
                            </Link>
                        </div>
                    </div>
                </div>

                <!-- ===================== PROGRESS + POMOC ===================== -->
                <div class="flex justify-center">
                    <div class="w-full max-w-6xl bg-white rounded-[3rem] p-8 md:p-16 shadow-2xl shadow-blue-900/5 border border-gray-100 relative overflow-hidden">
                        <!-- Decoration inside box -->
                        <div class="absolute top-0 right-0 w-64 h-64 bg-blue-50/50 rounded-full -mr-32 -mt-32 blur-3xl"></div>

                        <div class="relative z-10 grid lg:grid-cols-2 gap-16 items-center">
                            <div class="space-y-6">
                                <div class="inline-flex items-center gap-3 px-4 py-2 bg-blue-50 rounded-2xl">
                                    <div class="w-2 h-2 rounded-full bg-[#00a0e3] animate-pulse"></div>
                                    <span class="text-[10px] font-black text-[#00a0e3] uppercase tracking-widest">{{ __('translate.impact') }}</span>
                                </div>

                                <h3 class="text-3xl md:text-4xl font-black text-[#0A2C5C] uppercase tracking-tight leading-tight">
                                    {{ __('info.help_title') }}
                                </h3>

                                <p class="text-sm font-bold text-gray-500 uppercase tracking-widest leading-relaxed">
                                    {{ __('info.help_text_1') }}
                                    <span class="text-[#00a0e3] font-black">{{ selected.points.toLocaleString() }} {{ __('info.points2') }}</span>
                                    {{ __('info.help_text_2') }}
                                    <span class="text-[#00a0e3] font-black">${{ selected.price }}</span>,
                                    {{ __('info.help_text_3') }}
                                    <span class="text-red-500 font-black underline decoration-4 decoration-red-100 underline-offset-8">${{ donated }}</span>
                                </p>
                            </div>

                            <div class="space-y-12">
                                <!-- PROGRESS BAR -->
                                <div class="relative pt-8 px-[20px]">
                                    <div class="relative h-4 bg-gray-100 rounded-full border border-gray-100 shadow-inner">
                                        <div class="h-full bg-gradient-to-r from-[#0A2C5C] to-[#00a0e3] rounded-full absolute top-0 left-0 transition-all duration-700 ease-out shadow-lg"
                                             :style="{ width: progressPercentage + '%' }">
                                            <div class="absolute inset-0 bg-white/20 animate-pulse"></div>
                                        </div>

                                        <!-- Handle -->
                                        <div class="w-10 h-10 bg-white border-4 border-[#00a0e3] rounded-2xl shadow-xl
                                                    absolute -top-3 transition-all duration-700 ease-out -ml-5 flex items-center justify-center"
                                             :style="{ left: progressPercentage + '%' }">
                                            <div class="w-2 h-2 bg-[#00a0e3] rounded-full animate-ping"></div>
                                        </div>
                                    </div>

                                    <!-- IKONY POD PROGRESEM -->
                                    <div class="flex justify-between items-start mt-12">
                                        <div v-for="(pack, index) in packages" :key="'ico'+index"
                                             class="flex flex-col items-center transition-all duration-500"
                                             :style="{
                                                 opacity: index <= currentIndex ? 1 : 0.2,
                                             }">
                                            <div class="p-2 rounded-xl border-2 transition-all duration-500"
                                                 :class="index === currentIndex
                                                     ? 'bg-white border-[#00a0e3] shadow-lg scale-125 z-10'
                                                     : 'bg-gray-50 border-transparent scale-100'">
                                                <img
                                                    :src="`/images/price/${pack.points}.svg`"
                                                    :alt="pack.points"
                                                    class="w-10 h-10 object-contain"
                                                />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </FrontLayout>
</template>
