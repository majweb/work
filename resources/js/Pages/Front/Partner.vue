<script setup>
import FrontLayout from "@/Layouts/FrontLayout.vue";

const props = defineProps({
    partner: {
        type: Object,
        required: true
    }
});

</script>
<template>
    <FrontLayout :title="__('partners.about_title')">
        <section class="bg-white text-[#0d2a52] pt-16 px-4 pb-24">
            <div class="max-w-6xl mx-auto">
                {{partner.id}}
            </div>
        </section>
    </FrontLayout>
</template>
