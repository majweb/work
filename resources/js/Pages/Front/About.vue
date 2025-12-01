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
                    <h2 class="text-3xl font-bold mb-2">{{__('info.about_us')}}</h2>
                    <div class="flex justify-center items-center">
                        <img src="/images/icons/about/o_nas_2.svg" :alt="__('info.first_img')" class="w-16 self-end" />
                        <h3 class="text-3xl font-semibold mb-10">
                            {{__('info.bridge')}}<br />
                            <span class="text-[#9cd0ff]">{{__('info.talent')}}</span>
                        </h3>
                            <img src="/images/icons/about/o_nas_1.svg" :alt="__('info.second_img')" class="w-16 self-start" />
                    </div>
                </div>

                <!-- Opis -->
                <p class="max-w-4xl mx-auto leading-relaxed mb-16 text-lg mt-5">
                    <strong>WORK4YOU.GLOBAL</strong> {{__('info.about')}}
                </p>

                <!-- Ikony + Teksty -->
                <div class="grid grid-cols-1 md:grid-cols-3 gap-10 mb-20">

                    <!-- MISJA -->
                    <div class="flex flex-col items-center">
                        <img src="/images/icons/about/o_nas_misja.svg" :alt="__('info.missionT')" class="w-20" />
                        <h4 class="font-bold text-lg mb-2 uppercase">{{__('info.missionT')}}</h4>
                        <p class="text-sm leading-relaxed">
                            {{__('info.mission')}}
                        </p>
                    </div>

                    <!-- WIZJA -->
                    <div class="flex flex-col items-center">
                        <img src="/images/icons/about/o_nas_wizja.svg" :alt="__('info.vision')" class="w-20" />
                        <h4 class="font-bold text-lg mb-2 uppercase">{{__('info.visionT')}}</h4>
                        <p class="text-sm leading-relaxed">
                            {{__('info.vision')}}
                        </p>
                    </div>

                    <!-- CELE -->
                    <div class="flex flex-col items-center">
                        <img src="/images/icons/about/o_nas_cele.svg" :alt="__('info.targetT')" class="w-20" />
                        <h4 class="font-bold text-lg mb-2 uppercase">{{__('info.targetT')}}</h4>
                        <p class="text-sm leading-relaxed">
                            {{__('info.target')}}
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
                            {{__('info.values')}}<br />
                            <span class="text-[#9cd0ff]">{{__('info.onTarget')}}</span>
                        </p>

                        <Link
                            href="/charity"
                            class="inline-block bg-[#4db8ff] hover:bg-[#37a0e2] text-black font-semibold px-6 py-2 rounded-lg transition"
                        >
                            {{__('info.more')}}
                        </Link>

                    </div>
                </div>

            </div>
        </section>
    </FrontLayout>
</template>
