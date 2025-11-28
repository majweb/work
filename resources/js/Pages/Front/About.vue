<script setup>
import FrontLayout from "@/Layouts/FrontLayout.vue";
import { Link } from "@inertiajs/vue3";
</script>

<template>
    <FrontLayout :title="'O nas'">
        <section class="bg-[#0d2a52] text-white pt-16 px-4">
            <div class="max-w-6xl mx-auto text-center relative">

                <!-- Nagłówek -->
                <div>
                        <h2 class="text-3xl font-bold mb-2">O NAS</h2>
                    <div class="flex justify-center items-center">
                        <img src="/images/icons/about/o_nas_2.svg" alt="Misja" class="w-16 self-end" />
                        <h3 class="text-xl font-semibold mb-10">
                            Tworzymy most między<br />
                            <span class="text-[#9cd0ff]">talentem, a możliwościami</span>
                        </h3>
                            <img src="/images/icons/about/o_nas_1.svg" alt="Misja" class="w-16 self-start" />
                    </div>
                </div>

                <!-- Opis -->
                <p class="max-w-4xl mx-auto leading-relaxed mb-16 text-lg">
                    <strong>WORK4YOU.GLOBAL</strong> to nowoczesny portal pracy łączący kandydatów
                    i pracodawców z całego świata. Działamy z pasją, zaufaniem i w duchu
                    transparentności. Jesteśmy zespołem specjalistów, którzy wierzą w wartość
                    ludzkiego potencjału.
                </p>

                <!-- Ikony + Teksty -->
                <div class="grid grid-cols-1 md:grid-cols-3 gap-10 mb-20">

                    <!-- MISJA -->
                    <div class="flex flex-col items-center">
                        <img src="/images/icons/about/o_nas_misja.svg" alt="Misja" class="w-20" />
                        <h4 class="font-bold text-lg mb-2">MISJA</h4>
                        <p class="text-sm leading-relaxed">
                            Łączymy ludzi z ich wymarzoną pracą i pomagamy firmom znaleźć najlepszych
                            specjalistów. Wierzymy w współpracę, transparentność oraz wysoką jakość
                            obsługi.
                        </p>
                    </div>

                    <!-- WIZJA -->
                    <div class="flex flex-col items-center">
                        <img src="/images/icons/about/o_nas_wizja.svg" alt="Wizja" class="w-20" />
                        <h4 class="font-bold text-lg mb-2">WIZJA</h4>
                        <p class="text-sm leading-relaxed">
                            Chcemy być globalnym liderem w tworzeniu nowatorskich rozwiązań rynku
                            pracy i systemów wspierających rozwój talentów.
                        </p>
                    </div>

                    <!-- CELE -->
                    <div class="flex flex-col items-center">
                        <img src="/images/icons/about/o_nas_cele.svg" alt="Cele" class="w-20" />
                        <h4 class="font-bold text-lg mb-2">CELE</h4>
                        <p class="text-sm leading-relaxed">
                            Rozszerzanie zasięgu portalu na nowe rynki, wspieranie kandydatów w ich
                            rozwoju zawodowym oraz przygotowanie każdej oferty z dbałością o detale.
                        </p>
                    </div>
                </div>

                <!-- Sekcja dobroczynna -->
                <div class="flex flex-col md:flex-row items-center justify-center relative md:left-20">

                    <!-- IMG -->
                    <img
                        src="/images/icons/about/50.svg"
                        alt="50%"
                        class="w-64 sm:w-72 md:w-[420px] lg:w-[420px] relative md:top-2"
                    />

                    <!-- Tekst + Button -->
                    <div class="flex flex-col items-center md:items-start text-center md:text-left gap-4 pb-10 md:pb-0">

                        <p class="text-xl sm:text-4xl font-semibold leading-snug mt-4 md:mt-0 md:w-3/5 w-full">
                            wartości każdego pakietu przekazujemy<br />
                            <span class="text-[#9cd0ff]">na cele dobroczynne.</span>
                        </p>

                        <Link
                            href="/charity"
                            class="inline-block bg-[#4db8ff] hover:bg-[#37a0e2] text-black font-semibold px-6 py-2 rounded-lg transition"
                        >
                            DOWIEDZ SIĘ WIĘCEJ
                        </Link>

                    </div>
                </div>

            </div>
        </section>
    </FrontLayout>
</template>
