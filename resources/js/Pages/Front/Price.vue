<script setup>
import FrontLayout from "@/Layouts/FrontLayout.vue";
import { ref, computed } from "vue";
import {Link} from "@inertiajs/vue3";

//
// ✔ 1) ODBIÓR PRODUKTÓW Z BACKENDU
//
const props = defineProps({
    products: {
        type: Array,
        required: true
    }
});

//
// ✔ 2) PAKIETY Z BACKENDU
//
const packages = ref(
    props.products.map((p) => ({
        id: p.id,
        points: p.points,
        price: p.price
    }))
);

//
// ✔ 3) DOMYŚLNY PAKIET → ŚRODKOWY
//
const selected = ref(packages.value[Math.floor(packages.value.length / 2)]);

//
// ✔ 4) INDEX PAKIETU → używany do przesuwania progresu
//
const currentIndex = computed(() =>
    packages.value.findIndex(p => p.id === selected.value.id)
);

//
// ✔ 5) OBLICZENIE POZYCJI KROPKI (PIXEL PERFECT)
//
const barWidth = 400;        // długość w px
const totalSlots = computed(() => packages.value.length - 1);

const progressLeft = computed(() => {
    const step = barWidth / totalSlots.value;
    return step * currentIndex.value;
});

const progressWidth = computed(() => {
    return (progressLeft.value / barWidth) * 100;
});

//
// ✔ 6) DONATION
//
const donated = computed(() =>
    (selected.value.price * 0.5).toFixed(2)
);
</script>


<template>
    <FrontLayout title="Cennik">

        <div class="py-16 bg-[#0b2a55] text-white">
            <div class="mx-auto px-6">

                <!-- ===================== NAGŁÓWEK ===================== -->
                <div class="text-center mb-16">
                    <h1 class="text-4xl font-extrabold leading-tight">
                        KUPUJ PUNKTY I PUBLIKUJ<br>OGŁOSZENIA BEZ OGRANICZEŃ
                    </h1>

                    <p class="my-4 text-lg opacity-90 max-w-2xl mx-auto">
                        Razem zmieniamy świat na lepsze. Każdy nasz sukces to<br>
                        wsparcie dla potrzebujacych - <strong class="text-white font-semibold">50% płatności</strong>
                        trafia do<br>
                        wybranej przez Ciebie organizacji charytatywnej.
                    </p>

                    <Link :href="route('front.readMore')" class="mt-6 bg-red-600 hover:bg-red-700 px-6 py-2 rounded-full text-white font-bold">
                        DOWIEDZ SIĘ WIĘCEJ
                    </Link>
                </div>

                <!-- ===================== LISTA PAKIETÓW ===================== -->
                <div class="grid grid-cols-2 sm:grid-cols-2 lg:grid-cols-7 gap-6 mb-12">

                    <div v-for="(pack, index) in packages" :key="pack.id"
                         @click="selected = pack"
                         class="cursor-pointer rounded-xl p-6 text-center transition relative border duration-200"
                         :class="[

selected.id === pack.id
? 'bg-[linear-gradient(45deg,#0B2A55_0%,#0D3874_50%,#0B2A55_100%)] border-[#00aaff] shadow-2xl lg:scale-[1.15] scale-100 z-10'
    : 'bg-[#0d3874] border-[#00aaff]',

        // ⭐ TYLKO NA MOBILE → pakiet 10000 na całą szerokość
        index === 6 ? 'col-span-2 sm:col-span-2 lg:col-span-1' : '',

        'hover:scale-[1.04]'
     ]">

                        <!-- NOWA IKONA: z folderu /images/price/{points}.svg -->
                        <div class="mb-3">
                            <img
                                :src="`/images/price/${pack.points}.svg`"
                                class="w-[48px] h-[48px] mx-auto"
                                alt=""
                            />
                        </div>

                        <div
                            class="text-3xl font-bold"
                            :class="selected.id === pack.id ? 'glow-white-soft' : ''"
                        >
                            {{ pack.points.toLocaleString() }}
                        </div>
                        <div class="text-sm opacity-80 mb-4">PUNKTÓW</div>

                        <button class="bg-[#00aaff] px-4 py-2 rounded-lg font-semibold text-white">
                            KUP TERAZ
                        </button>

                        <div class="mt-4">cena: ${{ pack.price }}</div>
                    </div>

                </div>

                <!-- ===================== PROGRESS + IKONY ===================== -->

                <div class="flex justify-end w-full">
                    <div class="text-right">

                        <div class="mb-6">
                            <h3 class="text-3xl font-bold mb-2">Zobacz, jak Twoja firma pomaga</h3>

                            <p class="text-lg">
                                Kupując pakiet
                                <span class="text-[#00aaff] font-bold">{{ selected.points.toLocaleString() }} punktów</span>
                                za <span class="text-[#00aaff] font-bold">${{ selected.price }}</span>,
                                przekazujesz
                                <span class="text-[#00aaff] font-bold">${{ donated }}</span>
                            </p>
                        </div>

                        <!-- PROGRESS BAR -->
                        <div class="relative w-[400px] ml-auto">

                            <!-- TŁO -->
                            <div class="h-3 w-full border-[#00aaff] border-2 rounded-full"></div>

                            <!-- PROGRES -->
                            <div class="h-3 bg-[#00aaff] rounded-full absolute top-0 left-0 transition-all duration-500"
                                 :style="{ width: progressWidth + '%' }"></div>

                            <!-- KROPKA -->
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

                                <!-- NOWA IKONA SVG Z DYSKU -->
                                <img
                                    :src="`/images/price/${pack.points}.svg`"
                                    alt=""
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
