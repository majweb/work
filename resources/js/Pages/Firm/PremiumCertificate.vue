<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import {computed} from 'vue';
import {useForm, usePage} from "@inertiajs/vue3";

const props = defineProps({
    collectedPoints: Number,
    currentLevel: Number,
    nextLevelPoints: Number,
    certificatePath: String,
    canGenerate: Boolean,
    levelPoints: Object,
    levelNames: Object,
    levelColors: Object
});

// Computed properties
const availableLevels = computed(() => {
    const levels = [];
    for (let level = 1; level <= 4; level++) {
        // Dodaj poziom jeśli użytkownik ma wystarczająco punktów
        if (props.collectedPoints >= props.levelPoints[level]) {
            levels.push(level);
        }
    }
    return levels;
});

const progressSegments = computed(() => {
    const maxPoints = props.levelPoints[4];
    const segments = [];
    let previousPoints = 0;

    for (let level = 1; level <= 4; level++) {
        const width = ((props.levelPoints[level] - previousPoints) / maxPoints) * 100;
        segments.push({
            level,
            width,
            color: props.levelColors[level],
            active: props.collectedPoints >= previousPoints
        });
        previousPoints = props.levelPoints[level];
    }

    return segments;
});

const currentProgress = computed(() => {
    return (props.collectedPoints / props.levelPoints[4]) * 100;
});


// Methods
const form = useForm({
    selectedLevel: null,
    foundation: null
});

const toggleLevel = (level) => {
    if (form.selectedLevel === level) {
        form.selectedLevel = null;
    } else {
        form.selectedLevel = level;
    }
};

const generateCertificate = () => {
    if (!form.selectedLevel) return;

    form.post(route('firm.premium-certificate.generate'), {
        preserveScroll: true,
        onSuccess: () => {
            form.reset();
        },
    });
};

const progressDetails = computed(() => {
    const nextLevel = props.currentLevel + 1;
    if (!props.levelPoints[nextLevel]) {
        return {
            current: props.collectedPoints,
            target: props.collectedPoints,
            remaining: 0
        };
    }

    return {
        current: props.collectedPoints,
        target: props.levelPoints[nextLevel],
        remaining: props.levelPoints[nextLevel] - props.collectedPoints
    };
});

const generateButtonText = computed(() => {
    if (!form.selectedLevel) return '';
    return __('premium.certificates.generate', { level: props.levelNames[form.selectedLevel] });
});

</script>

<template>
    <AppLayout title="Certyfikat Premium">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                Certyfikat Premium
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg p-6">
                    <!-- Aktualny poziom -->
                    <div class="mb-6">
                        <h3 class="text-lg font-semibold mb-2">{{ __('premium.certificates.current_level') }}:</h3>
                        <p class="text-xl text-[#0a2c5c]">{{ levelNames[currentLevel] }}</p>
                        <!-- Informacje o poziomach -->
                        <div class="mt-4 space-y-2">
                            <p class="text-sm text-gray-600">{{ __('premium.certificates.requirements') }}:</p>
                            <div v-for="(points, level) in levelPoints" :key="level"
                                 :class="{
                                     'text-[#143d8c]': currentLevel >= level,
                                     'font-semibold': currentLevel + 1 == level
                                 }"
                                 class="flex justify-between text-sm">
                                <span>{{ levelNames[level] }}:</span>
                                <span>{{ points.toLocaleString() }} {{ __('premium.certificates.points') }}</span>
                            </div>
                        </div>
                    </div>
                    <!-- Progress Bar -->
                    <div class="mb-6">
                        <h3 class="text-lg font-semibold mb-2">{{__('premium.certificates.progress')}}</h3>
                        <div class="ml-10 mr-32">
                            <div class="relative w-full h-6 mb-10 mt-8 rounded-full border-2 border-[#143d8c] bg-white overflow-visible">
                            <!-- Aktualny postęp -->
                            <div
                                class="absolute top-0 left-0 h-full bg-[#0f2d66] transition-all duration-500 rounded-full"
                                :style="{ width: `${Math.min(currentProgress, 100)}%` }"
                            ></div>

                            <!-- Znaczniki poziomów -->
                            <div class="absolute inset-0 flex">
                                <div
                                    v-for="(points, level) in levelPoints"
                                    :key="level"
                                    class="flex items-center justify-end relative h-full"
                                    :style="{ width: `${(points / levelPoints[4]) * 100}%` }"
                                >
                                    <div
                                        v-if="level < 4"
                                        class="absolute right-0 h-full w-0.5 bg-[#143d8c] opacity-50"
                                        :class="{
                                            'rounded-l-full': level === 1,
                                            'rounded-r-full': level === 3
                                        }"
                                    ></div>
                                    <div class="absolute -top-6 right-0 transform translate-x-1/2 text-xs text-[#143d8c] whitespace-nowrap">
                                        {{ levelNames[level] }}
                                    </div>
                                    <div class="absolute top-8 right-0 transform translate-x-1/2 text-xs text-[#143d8c] whitespace-nowrap">
                                        {{ points.toLocaleString() }} pkt
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    </div>
                    <div class="mt-2 space-y-2">
                        <div class="flex justify-between text-sm">
                            <span>{{ __('premium.certificates.collected_points') }}: {{ progressDetails.current.toLocaleString() }}</span>
                            <span v-if="currentLevel < 4">
                                    {{ __('premium.certificates.target') }}: {{ progressDetails.target.toLocaleString() }} {{ __('premium.certificates.points') }}
                                    ({{ levelNames[currentLevel + 1] }})
                                </span>
                            <span v-else>{{ __('premium.certificates.max_level_reached') }}</span>
                        </div>
                        <p v-if="progressDetails.remaining > 0" class="text-sm text-gray-600 text-center">
                            {{ __('premium.certificates.points_to_next_level', { points: progressDetails.remaining.toLocaleString() }) }}
                        </p>
                    </div>
                </div>
                <!-- Sekcja aktualnego certyfikatu -->
                <div v-if="currentLevel > 0" class="bg-gray-50 p-4 rounded-lg mt-4">
                    <h4 class="font-semibold mb-2">{{ __('premium.certificates.current_certificate') }}</h4>
                    <div class="flex items-center justify-between">
                        <p class="text-[#143d8c]">
                            {{ __('premium.certificates.you_have_certificate') }}: {{ levelNames[currentLevel] }}
                        </p>
                        <a
                            :href="route('firm.premium-certificate.download')"
                            class="inline-flex items-center px-4 py-2 bg-[#143d8c] text-white rounded-lg hover:bg-[#0f2d66] transition-colors"
                        >
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"/>
                            </svg>
                            {{ __('premium.certificates.download_certificate') }}
                        </a>
                    </div>
                </div>
                <!-- Wybór i generowanie certyfikatu -->
                <div v-if="canGenerate" class="mt-8 bg-white p-6 rounded-lg shadow-lg">
                    <div class="space-y-6">
                        <!-- Sekcja generowania nowego certyfikatu -->
                        <div class="bg-white p-4 rounded-lg border border-gray-200">
                            <div v-if="availableLevels.length === 0" class="text-center text-gray-600 p-4">
                                {{ __('premium.certificates.no_points') }}
                                <br>
                                <span class="text-sm">
                                    {{ __('premium.certificates.collect_more') }}
                                </span>
                            </div>
                            <div v-else>
                            <h4 class="font-semibold mb-4">{{ __('premium.certificates.generate_new') }}</h4>
                            <div class="space-y-4">
                                <!-- Wybór poziomu -->
                                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
                                    <button
                                        v-for="level in availableLevels"
                                        :key="level"
                                        @click="toggleLevel(level)"
                                        class="p-4 rounded-lg border-2 transition-all duration-200 hover:opacity-90"
                                        :class="{
                                            'border-gray-200': form.selectedLevel !== level,
                                            'border-[#143d8c]': form.selectedLevel === level
                                        }"
                                        :style="{ backgroundColor: levelColors[level]}"
                                    >
                                        <div class="font-semibold text-white">{{ levelNames[level] }}</div>
                                        <div class="text-sm text-white">
                                            {{ levelPoints[level].toLocaleString() }} {{ __('premium.certificates.points') }}
                                        </div>
                                    </button>
                                </div>
                                <!-- Przycisk generowania -->
                                <div class="flex justify-center">
                                    <button
                                        v-if="form.selectedLevel"
                                        @click="generateCertificate"
                                        class="px-6 py-3 bg-[#143d8c] text-white rounded-lg hover:bg-[#0f2d66] transition-colors"
                                        :disabled="form.processing"
                                    >
                                        <span v-if="form.processing">{{ __('premium.certificates.generating') }}</span>
                                        <span v-else>{{ __('premium.certificates.generate', { level: props.levelNames[form.selectedLevel] }) }}</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </AppLayout>
</template>


