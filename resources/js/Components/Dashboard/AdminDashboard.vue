<template>
    <div class="p-6 bg-white overflow-hidden shadow-xl sm:rounded-lg">
        <h3 class="text-lg font-semibold mb-4">{{ __('translate.panelAdmin') }}</h3>
        <div class="bg-blue-100 border-l-4 border-blue-500 p-4 rounded-lg">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-blue-700 font-medium">{{ __('translate.panelAdminQuestions') }}</p>
                    <p class="text-3xl font-bold text-blue-800 mt-1">{{ countQuestions }}</p>
                </div>
                <Link
                    v-if="countQuestions > 0"
                    :href="route('admin.questions-accepts.index')"
                    class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded-lg transition-colors duration-200"
                >
                    {{ __('translate.panelAdminGoTo') }}
                </Link>
            </div>
        </div>
    </div>
</template>

<script setup>
const props = defineProps({
    countQuestions: Number
});
import { Link } from "@inertiajs/vue3";
</script>
