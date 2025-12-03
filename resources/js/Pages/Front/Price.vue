<script setup>
import FrontLayout from "@/Layouts/FrontLayout.vue";
import { ref, computed } from "vue";
import { Link } from "@inertiajs/vue3";

const props = defineProps({
    products: {
        type: Array,
        required: true
    }
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

const barWidth = 400;
const totalSlots = computed(() => packages.value.length - 1);

const progressLeft = computed(() => {
    const step = barWidth / totalSlots.value;
    return step * currentIndex.value;
});

const progressWidth = computed(() => {
    return (progressLeft.value / barWidth) * 100;
});

const donated = computed(() =>
    (selected.value.price * 0.5).toFixed(2)
);
</script>

<template>
    <FrontLayout :title="__('info.cennik_title')">

        <div class="py-16 bg-[#0b2a55] text-white">
            <div class="mx-auto px-6">

                <!-- ===================== NAGŁÓWEK ===================== -->
                <div class="text-center mb-16">
                    <h1 class="text-4xl font-extrabold leading-tight">
                        {{ __('info.header_big') }}
                    </h1>

                    <p class="my-4 text-lg opacity-90 max-w-2xl mx-auto">
                        {{ __('info.header_desc_1') }}<br>
                        {{ __('info.header_desc_2') }}
                        <strong class="text-white font-semibold">
                            {{ __('info.header_desc_bold') }}
                        </strong>
                        {{ __('info.header_desc_3') }}<br>
                        {{ __('info.header_desc_4') }}
                    </p>

                    <Link :href="route('front.readMore')" class="mt-6 bg-red-600 hover:bg-red-700 px-6 py-2 rounded-full text-white font-bold">
                        {{ __('info.read_more') }}
                    </Link>
                </div>

                <!-- ===================== LISTA PAKIETÓW ===================== -->
                <div class="grid grid-cols-2 sm:grid-cols-2 lg:grid-cols-7 gap-6 mb-12">

                    <div
                        v-for="(pack, index) in packages"
                        :key="pack.id"
                        @click="selected = pack"
                        class="cursor-pointer rounded-xl p-6 text-center transition relative border duration-200"
                        :class="[
                            selected.id === pack.id
                                ? 'bg-[linear-gradient(45deg,#0B2A55_0%,#0D3874_50%,#0B2A55_100%)] border-[#00aaff] shadow-2xl lg:scale-[1.15] scale-100 z-10'
                                : 'bg-[#0d3874] border-[#00aaff]',

                            index === 6 ? 'col-span-2 sm:col-span-2 lg:col-span-1' : '',
                            'hover:scale-[1.04]'
                        ]"
                    >

                        <div class="mb-3">
                            <img
                                :src="`/images/price/${pack.points}.svg`"
                                class="w-[48px] h-[48px] mx-auto"
                                :alt="pack.points"
                            />
                        </div>

                        <div
                            class="text-3xl font-bold"
                            :class="selected.id === pack.id ? 'glow-white-soft' : ''"
                        >
                            {{ pack.points.toLocaleString() }}
                        </div>
                        <div class="text-sm opacity-80 mb-4">
                            {{ __('info.points') }}
                        </div>

                        <Link :href="route('buy.index')" class="bg-[#00aaff] px-4 py-2 rounded-lg font-semibold text-white">
                            {{ __('info.buy_now') }}
                        </Link>

                        <div class="mt-4">
                            {{ __('info.price') }}: ${{ pack.price }}
                        </div>
                    </div>

                </div>

                <!-- ===================== PROGRESS + IKONY ===================== -->

                <div class="flex justify-end w-full">
                    <div class="text-right">

                        <div class="mb-6">
                            <h3 class="text-3xl font-bold mb-2">
                                {{ __('info.help_title') }}
                            </h3>

                            <p class="text-lg">
                                {{ __('info.help_text_1') }}
                                <span class="text-[#00aaff] font-bold">{{ selected.points.toLocaleString() }} {{ __('info.points2') }}</span>
                                {{ __('info.help_text_2') }}
                                <span class="text-[#00aaff] font-bold">${{ selected.price }}</span>,
                                {{ __('info.help_text_3') }}
                                <span class="text-[#00aaff] font-bold">${{ donated }}</span>
                            </p>
                        </div>

                        <!-- PROGRESS BAR -->
                        <div class="relative w-[400px] ml-auto">

                            <div class="h-3 w-full border-[#00aaff] border-2 rounded-full"></div>

                            <div class="h-3 bg-[#00aaff] rounded-full absolute top-0 left-0 transition-all duration-500"
                                 :style="{ width: progressWidth + '%' }"></div>

                            <div class="w-6 h-6 bg-[#00aaff] border-4 border-[#00aaff] rounded-full
                                        absolute -top-1.5 transition-all duration-500"
                                 :style="{ left: `calc(${progressLeft}px - 12px)` }"></div>

                        </div>

                        <!-- IKONY POD PROGRESEM -->
                        <div class="relative mt-6 ml-auto" :style="{ width: barWidth + 'px' }">
                            <div v-for="(pack, index) in packages" :key="'ico'+index"
                                 class="absolute transition"
                                 :style="{
                                     left: `${(400 / (packages.length - 1)) * index}px`,
                                     transform: index <= currentIndex ? 'translateX(-50%) scale(1.2)' : 'translateX(-50%) scale(1)',
                                     opacity: index <= currentIndex ? 1 : 0.25,
                                     transition: '0.3s'
                                 }">

                                <img
                                    :src="`/images/price/${pack.points}.svg`"
                                    :alt="pack.points"
                                    class="w-[40px] h-[40px] min-w-[40px]"
                                />
                            </div>

                        </div>

                    </div>
                </div>

            </div>
        </div>

    </FrontLayout>
</template>
