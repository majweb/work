<script setup>
import FrontLayout from "@/Layouts/FrontLayout.vue";
import { Link } from "@inertiajs/vue3";
</script>

<template>
    <FrontLayout :title="__('info.about_title')">

        <section class="bg-[#0d2a52] text-white pt-16 px-4 pb-20">
            <div class="max-w-4xl mx-auto">

                <!-- ===================== NAGŁÓWEK ===================== -->
                <div class="text-center mb-14">
                    <h1 class="text-4xl font-extrabold mb-4 leading-tight">
                        {{ __('info.points_title') }}
                    </h1>
                    <p class="text-lg opacity-90 max-w-3xl mx-auto">
                        {{ __('info.points_intro') }}
                    </p>
                </div>


                <!-- ===================== BLOK 1 (IKONA → TEKST) ===================== -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-10 mb-20 items-center">
                    <div class="flex justify-center">
                        <img src="/images/info/start.svg" class="w-40" alt="">
                    </div>
                    <p class="text-lg leading-relaxed">
                        {{ __('info.points_section1') }}
                    </p>
                </div>


                <!-- ===================== BLOK 2 (TEKST → IKONA) ===================== -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-10 mb-20 items-center">
                    <p class="text-lg leading-relaxed order-2 md:order-1">
                        {{ __('info.points_section2') }}
                    </p>

                    <div class="flex justify-center order-1 md:order-2">
                        <img src="/images/info/heart.svg" class="w-40" alt="">
                    </div>
                </div>


                <!-- ===================== BLOK 3 (IKONA → TEKST) ===================== -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-10 mb-20 items-center">
                    <div class="flex justify-center">
                        <img src="/images/info/secure.svg" class="w-40" alt="">
                    </div>
                    <p class="text-lg leading-relaxed">
                        {{ __('info.points_section3') }}
                    </p>
                </div>


                <!-- ===================== BLOK 4 (TEKST → IKONA) ===================== -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-10 mb-10 items-center">
                    <p class="text-lg leading-relaxed order-2 md:order-1">
                        {{ __('info.points_section4') }}
                    </p>

                    <div class="flex justify-center order-1 md:order-2">
                        <img src="/images/info/wallet.svg" class="w-40" alt="">
                    </div>
                </div>

            </div>
        </section>

    </FrontLayout>
</template>
