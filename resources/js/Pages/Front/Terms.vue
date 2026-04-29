
<script setup>
import { ref, computed } from 'vue';
import FrontLayout from "@/Layouts/FrontLayout.vue";

const props = defineProps({
    page: Object,
    langs: Array
});

const activeTab = ref('general'); // 'general' lub 'candidate'

const currentPdfSuffix = computed(() => {
    return activeTab.value === 'general' ? 'terms' : 'terms-c';
});
</script>

<template>
    <FrontLayout
        :title="props.page.title"
        :image="props.page.image"
        :keywords="props.page.keywords"
        :description="props.page.description"
        :url="route('front.terms')"
        type="website"
    >
        <div class="py-24 bg-gray-50/50 min-h-screen relative overflow-hidden">
            <!-- Background Decorations -->
            <div class="absolute top-0 right-0 w-[500px] h-[500px] bg-blue-100/30 rounded-full -mr-64 -mt-64 blur-3xl"></div>
            <div class="absolute bottom-0 left-0 w-[400px] h-[400px] bg-red-50/20 rounded-full -ml-48 -mb-48 blur-3xl"></div>

            <div class="max-w-7xl mx-auto px-6 relative z-10">
                <!-- Header Section -->
                <div class="text-center mb-12">
                    <div class="inline-flex items-center gap-2 px-4 py-2 bg-white rounded-full shadow-sm border border-gray-100 mb-8">
                        <span class="relative flex h-2 w-2">
                            <span class="relative inline-flex rounded-full h-2 w-2 bg-blue-500"></span>
                        </span>
                        <span class="text-[10px] font-black text-[#0A2C5C] uppercase tracking-[0.2em]">{{ __('translate.footer.documentation') }}</span>
                    </div>

                    <h1 class="text-4xl md:text-5xl font-black text-[#0A2C5C] leading-tight uppercase tracking-tighter mb-8">
                        {{ __('translate.footer.termsTitle') }}
                    </h1>

                    <!-- Tabs Navigation -->
                    <div class="inline-flex p-1.5 bg-white rounded-[2rem] shadow-sm border border-gray-100">
                        <button
                            @click="activeTab = 'general'"
                            :class="[activeTab === 'general' ? 'bg-[#0A2C5C] text-white shadow-lg' : 'text-gray-500 hover:text-gray-700']"
                            class="px-8 py-3 rounded-[1.5rem] text-[10px] font-black uppercase tracking-[0.2em] transition-all duration-300"
                        >
                            {{ __('translate.footer.terms') }} (Firma)
                        </button>
                        <button
                            @click="activeTab = 'candidate'"
                            :class="activeTab === 'candidate' ? 'bg-[#0A2C5C] text-white shadow-lg' : 'text-gray-500 hover:text-gray-700'"
                            class="px-8 py-3 rounded-[1.5rem] text-[10px] font-black uppercase tracking-[0.2em] transition-all duration-300"
                        >
                            {{ __('translate.footer.terms') }} (Kandydat)
                        </button>
                    </div>
                </div>

                <!-- Content Card -->
                <div class="bg-white rounded-[2.5rem] shadow-xl shadow-blue-900/5 p-8 md:p-12 border border-gray-100">
                    <div class="prose prose-blue max-w-none text-gray-600 leading-relaxed text-center">
                        <section class="mb-10 animate-fadeIn" v-html="props.page.content"></section>
                    </div>

                    <!-- Dynamic PDF Downloads -->
                    <div class="mt-12 pt-12 border-t border-gray-100 flex flex-col items-center justify-center">
                        <h3 class="text-sm font-black text-[#0A2C5C] uppercase tracking-widest mb-6">
                            {{ __('translate.footer.downloadTermsPdf') }} ({{ activeTab === 'general' ? 'Firma' : 'Kandydat' }})
                        </h3>
                        <div class="flex flex-wrap gap-3">
                            <a
                                v-for="lang in langs"
                                :key="lang + activeTab"
                                :href="`/storage/terms/${lang}-${currentPdfSuffix}.pdf`"
                                target="_blank"
                                class="inline-flex items-center gap-2 px-4 py-2 bg-gray-50 hover:bg-blue-50 rounded-xl transition-all group border border-transparent hover:border-blue-100"
                            >
                                <svg class="w-4 h-4 text-red-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21h10a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v14a2 2 0 002 2z" />
                                </svg>
                                <span class="text-[10px] font-bold text-gray-600 uppercase tracking-wider group-hover:text-blue-600">
                                    {{ lang }}
                                </span>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Footer Note -->
                <div class="mt-12 text-center text-gray-400 text-[10px] uppercase tracking-widest font-medium">
                    © 2026 {{ __('translate.footer.rights') }} {{ __('translate.footer.docGeneratedInfo') }}
                </div>
            </div>
        </div>
    </FrontLayout>
</template>

<style scoped>
.animate-fadeIn {
    animation: fadeIn 0.4s ease-out;
}
@keyframes fadeIn {
    from { opacity: 0; transform: translateY(10px); }
    to { opacity: 1; transform: translateY(0); }
}
</style>
