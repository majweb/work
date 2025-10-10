<script setup>
import FrontLayout from "@/Layouts/FrontLayout.vue";
import { Link } from '@inertiajs/vue3';
import {Navigation, Pagination, Autoplay} from 'swiper/modules';
import { Swiper, SwiperSlide } from 'swiper/vue';
import 'swiper/css';
import 'swiper/css/navigation';
import 'swiper/css/pagination';
import 'swiper/css/scrollbar';
import moment from "moment/moment.js";

const props = defineProps({
    articles: Object,
    category: Object,
});

</script>
<template>
    <FrontLayout :title="__('translate.articles')">
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg">
                    {{category}}
                </div>
            </div>
        </div>
    </FrontLayout>
</template>
