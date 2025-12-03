<script setup>
import FrontLayout from "@/Layouts/FrontLayout.vue";
import { ref, computed } from "vue";

//
// ODBIÓR PRODUKTÓW Z BACKENDU
//
const props = defineProps({
    products: {
        type: Array,
        required: true
    }
});

//
// IKONY NEONOWE
//
const icons = {
    education: `<svg width="38" height="38" viewBox="0 0 24 24"><circle cx="12" cy="12" r="10" fill="#003a70"/><path d="M12 3L2 9l10 6 8-4.5V17h2V9L12 3z" fill="#00eaff"/></svg>`,
    sun: `<svg width="38" height="38" viewBox="0 0 24 24"><circle cx="12" cy="12" r="10" fill="#003a70"/><path d="M12 7a5 5 0 100 10 5 5 0 000-10zM12 1v3M12 20v3M4.2 4.2l2.2 2.2M17.6 17.6l2.2 2.2M1 12h3M20 12h3M4.2 19.8l2.2-2.2M17.6 6.4l2.2-2.2" stroke="#00eaff" stroke-width="1.8"/></svg>`,
    heart: `<svg width="38" height="38" viewBox="0 0 24 24"><circle cx="12" cy="12" r="10" fill="#003a70"/><path d="M12 21s-6.5-4.5-9-9c-1.5-3 1-7 5-7 2 0 4 1.5 4 3.5C12 6.5 14 5 16 5c4 0 6.5 4 5 7-2.5 4.5-9 9-9 9z" fill="#00eaff"/></svg>`,
    rocket: `<svg width="42" height="42" viewBox="0 0 24 24"><circle cx="12" cy="12" r="10" fill="#003a70"/><path d="M12 2c2 1 4 4 4 7s-2 8-4 10c-2-2-4-7-4-10s2-6 4-7zM9 14l-4 4 3-7M15 14l4 4-3-7" fill="#00eaff"/></svg>`,
    megaphone: `<svg width="38" height="38" viewBox="0 0 24 24"><circle cx="12" cy="12" r="10" fill="#003a70"/><path d="M3 10v4c0 .6.4 1 1 1h2l4 4v-14l-4 4H4c-.6 0-1 .4-1 1zM16 9a3 3 0 010 6" fill="none" stroke="#00eaff" stroke-width="2"/></svg>`,
    star: `<svg width="38" height="38" viewBox="0 0 24 24"><circle cx="12" cy="12" r="10" fill="#003a70"/><path d="M12 3l2.7 6.2L21 10l-4.5 4 1.3 7-6-3-6 3 1.3-7L3 10l6.3-.8L12 3z" fill="#00eaff"/></svg>`,
    diamond: `<svg width="42" height="42" viewBox="0 0 24 24"><circle cx="12" cy="12" r="10" fill="#003a70"/><path d="M12 2l4 4 4 6-8 10L4 12l4-6 4-4z" fill="#00eaff"/></svg>`
};

//
// TWORZENIE PAKIETÓW NA PODSTAWIE PRODUKTÓW Z DB
//
const packages = ref(
    props.products.map((p, idx) => ({
        id: p.id,
        points: p.points,
        price: p.price,
        icon: p.icon ?? Object.keys(icons)[idx] // fallback ikony wg kolejności
    }))
);

//
// DOMYŚLNY WYBÓR — ŚRODKOWY PAKIET
//
const selected = ref(packages.value[Math.floor(packages.value.length / 2)]);

//
// OBLICZENIA
//
const maxPoints = computed(() =>
    Math.max(...packages.value.map(p => p.points))
);

const progress = computed(() =>
    (selected.value.points / maxPoints.value) * 100
);

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

                    <p class="mt-4 text-lg opacity-90 max-w-2xl mx-auto">
                        Razem zmieniamy świat na lepsze —
                        <strong class="text-[#00eaff]">50% płatności</strong>
                        trafia do organizacji charytatywnych.
                    </p>

                    <button class="mt-6 bg-red-600 hover:bg-red-700 px-6 py-2 rounded-full text-white font-bold">
                        DOWIEDZ SIĘ WIĘCEJ
                    </button>
                </div>

                <!-- ===================== CENNIK (DYNAMICZNY) ===================== -->
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-7 gap-6 mb-12">

                    <div v-for="pack in packages" :key="pack.id"
                         @click="selected = pack"
                         class="cursor-pointer rounded-xl p-6 text-center transition relative border
                           hover:scale-[1.04] duration-200"
                         :class="{
                        'bg-blue-700 border-white shadow-2xl scale-[1.15] z-10': selected.id === pack.id,
                        'bg-blue-900 border-blue-400': selected.id !== pack.id
                     }">

                        <div class="mb-3" v-html="icons[pack.icon]"></div>

                        <div class="text-3xl font-bold">{{ pack.points.toLocaleString() }}</div>
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
                                <span class="text-[#00eaff] font-bold">{{ selected.points.toLocaleString() }} punktów</span>
                                za <span class="text-[#00eaff] font-bold">${{ selected.price }}</span>,
                                przekazujesz
                                <span class="text-green-400 font-bold">${{ donated }}</span>
                            </p>
                        </div>

                        <!-- PROGRESS BAR -->
                        <div class="w-[500px] ml-auto">
                            <div class="h-3 bg-blue-500 rounded-full relative">

                                <!-- ANIMOWANY PASEK -->
                                <div class="h-3 bg-blue-300 rounded-full transition-all duration-500"
                                     :style="{ width: progress + '%' }"></div>

                                <!-- ANIMOWANA KROPKA -->
                                <div class="w-6 h-6 bg-blue-300 border-4 border-blue-900 rounded-full absolute -top-1.5
                    transition-all duration-500"
                                     :style="{ left: `calc(${progress}% - 12px)` }"></div>
                            </div>
                        </div>

                        <!-- IKONY POD PROGRESSEM -->
                        <div class="flex justify-end gap-6 mt-8">
                            <div v-for="(pack, index) in packages" :key="index"
                                 class="transition"
                                 v-html="icons[pack.icon]"
                                 :style="{
                                opacity: index <= packages.findIndex(p => p.id === selected.id) ? 1 : 0.25,
                                transform: index <= packages.findIndex(p => p.id === selected.id) ? 'scale(1.20)' : 'scale(1)',
                                transition: '0.3s'
                            }">
                            </div>
                        </div>

                    </div>

                </div>

            </div>
        </div>

    </FrontLayout>
</template>
