<script setup>
import FrontLayout from "@/Layouts/FrontLayout.vue";

const props = defineProps({
    page: Object
});
</script>
<template>
    <FrontLayout
        :title="props.page.title"
        :image="props.page.image"
        :keywords="props.page.keywords"
        :description="props.page.description"
        :url="route('front.privacy')"
        type="website"
    >
        <div class="py-24 bg-gray-50/50 dark:bg-gray-900/50 min-h-screen relative overflow-hidden">
            <!-- Background Decorations -->
            <div class="absolute top-0 right-0 w-[500px] h-[500px] bg-blue-100/30 dark:bg-blue-900/10 rounded-full -mr-64 -mt-64 blur-3xl"></div>
            <div class="absolute bottom-0 left-0 w-[400px] h-[400px] bg-red-50/20 dark:bg-red-900/10 rounded-full -ml-48 -mb-48 blur-3xl"></div>

            <div class="max-w-7xl mx-auto px-6 relative z-10">
                <!-- Header Section -->
                <div class="text-center mb-16">
                    <div class="inline-flex items-center gap-2 px-4 py-2 bg-white dark:bg-gray-800 rounded-full shadow-sm border border-gray-100 dark:border-gray-700 mb-8">
                        <span class="relative flex h-2 w-2">
                            <span class="relative inline-flex rounded-full h-2 w-2 bg-blue-500"></span>
                        </span>
                        <span class="text-[10px] font-black text-[#0A2C5C] dark:text-blue-400 uppercase tracking-[0.2em]">{{ __('translate.footer.documentation') }}</span>
                    </div>

                    <h1 class="text-4xl md:text-5xl font-black text-[#0A2C5C] dark:text-white leading-tight uppercase tracking-tighter mb-4">
                        {{ __('translate.footer.privacyPolicyTitle') }}
                    </h1>
                    <p class="text-gray-500 dark:text-gray-400 font-medium uppercase tracking-widest text-[10px]">
                        {{ __('translate.footer.lastUpdate') }}: 19 marca 2026 r.
                    </p>
                </div>

                <!-- Content Card -->
                <div class="bg-white dark:bg-gray-800 rounded-[2.5rem] shadow-xl shadow-blue-900/5 p-8 md:p-12 border border-gray-100 dark:border-gray-700">
                    <div class="prose prose-blue dark:prose-invert max-w-none text-gray-600 dark:text-gray-300 leading-relaxed">
                        <section class="mb-10" v-html="props.page.content"></section>
                    </div>
                </div>

                <!-- Footer Note -->
                <div class="mt-12 text-center text-gray-400 dark:text-gray-500 text-[10px] uppercase tracking-widest font-medium">
                    © 2026 {{ __('translate.footer.rights') }} {{ __('translate.footer.docGeneratedInfo') }}
                </div>
            </div>
        </div>
    </FrontLayout>
</template>
