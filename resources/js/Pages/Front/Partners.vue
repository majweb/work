<script setup>
import FrontLayout from "@/Layouts/FrontLayout.vue";
// SWIPER IMPORTS
import { Swiper, SwiperSlide } from "swiper/vue";
import { Autoplay } from "swiper/modules";
import "swiper/css";
const props = defineProps({
    partners: {
        type: Array,
        required: true
    }
});

</script>
<template>
    <FrontLayout :title="__('partners.about_title')">
        <section class="bg-white text-[#0d2a52] pt-16 px-4 pb-24">
            <div class="max-w-6xl mx-auto">
                <div class="grid grid-cols-1 md:grid-cols-2 items-center">
                    <div class="flex justify-center">
                        <img src="/images/partners/partners.svg" class="w-3/4" alt="partners">
                    </div>
                    <div>
                        <h2 class="text-4xl font-extrabold mb-6 uppercase">
                            {{ __('partners.partners_title') }}
                        </h2>
                        <div class="text-lg leading-relaxed mb-6">
                            {{ __('partners.partners_text') }}
                            <strong>{{ __('partners.partners_strong') }}</strong>
                                {{ __('partners.partners_text2') }}
                        </div>
                    </div>
                </div>
                <div class="slider py-4" v-if="props.partners.length > 1">
                    <h3 class="text-xl font-semibold mb-2">
                        {{ __('partners.partners_subtitle') }}
                    </h3>

                    <Swiper
                        :modules="[Autoplay]"
                        :space-between="24"
                        :loop="props.partners.length > 1"
                        :autoplay="props.partners.length > 1 ? { delay: 3000, disableOnInteraction: false } : false"

                        :breakpoints="{
            0:   { slidesPerView: 2.3 },   // Mobile
            640: { slidesPerView: 3.5 },   // Tablet
            1024:{ slidesPerView: 5 },     // Desktop
            1280:{ slidesPerView: 6 }      // Large Desktop
        }"
                    >
                        <SwiperSlide
                            v-for="partner in props.partners"
                            :key="partner.id"
                        >
                            <div class="flex flex-col items-center justify-center">

                                <!-- Jeśli link istnieje → klikamy -->
                                <a
                                    v-if="partner.link"
                                    :href="partner.link"
                                    target="_blank"
                                    rel="noopener"
                                    class="block"
                                >
                                    <img
                                        :src="partner.logo"
                                        :alt="partner.name"
                                        class="h-20 w-auto object-contain mb-3 transition-transform duration-300 hover:scale-105"
                                    />
                                </a>

                                <!-- Jeśli link nie istnieje → samo logo -->
                                <img
                                    v-else
                                    :src="partner.logo"
                                    :alt="partner.name"
                                    class="h-20 w-auto object-contain mb-3 transition-transform duration-300 hover:scale-105"
                                />

                                <p class="text-sm text-center text-[#0d2a2]"
                                   :class="{'cursor-pointer hover:underline': partner.link}"
                                >
                                    <a
                                        v-if="partner.link"
                                        :href="partner.link"
                                        target="_blank"
                                        rel="noopener"
                                    >
                                        {{ partner.name }}
                                    </a>
                                    <span v-else>{{ partner.name }}</span>
                                </p>
                            </div>
                        </SwiperSlide>
                    </Swiper>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 items-center">
                    <div class="order-2 md:order-1">
                        <h2 class="text-4xl font-extrabold mb-6 uppercase">
                            {{ __('partners.foundations_title') }}
                        </h2>
                        <div class="text-lg leading-relaxed">
                            {{ __('partners.foundations_text') }}
                            <strong>{{ __('partners.foundations_strong') }}</strong>
                            {{ __('partners.foundations_text2') }}
                        </div>
                    </div>
                    <div class="flex justify-center order-1 md:order-2">
                        <img src="/images/partners/fundations.svg" class="w-3/4" alt="fundations">
                    </div>
                </div>

                <!-- Sekcja liczby fundacji + przycisk -->
                <div class="text-center mt-24">
                    <p class="text-xl md:text-2xl font-semibold text-[#0d2a52]">
                        Obecnie nasze wsparcie dociera do
                        <a href="#" class="text-[#00a1e6] font-bold hover:underline">
                            5259 FUNDACJI
                        </a>
                    </p>
                    <h2 class="text-4xl font-extrabold mb-6 uppercase mt-6">
                        ZNAJDŹ FUNDACJĘ
                    </h2>
                </div>
            </div>
        </section>
    </FrontLayout>
</template>
<style>
.swiper-scrollbar-drag {
    background: #0a2c5c; /* dopasowane do Twojej palety */
}
</style>
