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
                    <!-- Wybór i generowanie certyfikatu -->
                <div class="mt-8 bg-[#0d2a52] p-8 rounded-3xl shadow-2xl text-white">
                    <!-- Header -->
                    <div class="flex flex-col md:flex-row justify-between items-start mb-8 border-b border-white/10 pb-8">
                        <div class="md:w-2/3">
                            <h2 class="text-4xl font-bold uppercase mb-2 tracking-wider">
                                {{ __('premium.certificates.premium_certificate') }}
                            </h2>
                            <p class="text-xl font-medium leading-tight max-w-md">
                                {{ __('premium.certificates.slogan') }}
                            </p>
                        </div>
                        <div class="md:w-1/3 flex justify-end">
                            <img src="/images/icons/firm/certyfikat.svg" alt="Certyfikat Icon" class="h-32 w-auto">
                        </div>
                    </div>

                    <!-- Description -->
                    <div class="space-y-6 text-sm leading-relaxed mb-12 max-w-5xl">
                        <p>{{ __('premium.certificates.description_1') }}</p>
                        <p>{{ __('premium.certificates.description_2') }}</p>
                        <p>{{ __('premium.certificates.description_3') }}</p>
                    </div>

                    <!-- Rodzaje certyfikatów -->
                    <div class="mb-16">
                        <h3 class="text-2xl font-bold mb-8">{{ __('premium.certificates.types') }}</h3>
                        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                            <div
                                v-for="(points, level) in levelPoints"
                                :key="level"
                                class="flex flex-col items-center p-6 rounded-3xl border border-white/20 transition-all duration-300 relative group"
                                :class="{
                                    'bg-gradient-to-b from-blue-400/20 to-transparent shadow-[0_0_20px_rgba(56,189,248,0.2)]': currentLevel >= level,
                                    'opacity-50 grayscale': collectedPoints < points
                                }"
                            >
                                <!-- Icon Placeholder based on level -->
                                <div class="mb-4">
                                    <svg v-if="level == 1" xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-blue-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z" />
                                    </svg>
                                    <svg v-if="level == 2" xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-blue-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364-6.364l-.707.707M6.343 17.657l-.707.707m12.728 0l-.707-.707M6.343 6.343l-.707-.707M12 8a4 4 0 100 8 4 4 0 000-8z" />
                                    </svg>
                                    <svg v-if="level == 3" xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-blue-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                                    </svg>
                                    <svg v-if="level == 4" xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-blue-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M11 5.882V19.297A2.45 2.45 0 0112 21.042A2.45 2.45 0 0113 19.297V5.882M11 5.882c0-.54.276-1.043.743-1.328l.514-.313c.467-.285.934-.285 1.401 0l.514.313c.467.285.743.788.743 1.328v.53a2 2 0 00.293 1.03l.36.6a2 2 0 001.207.97l.63.21a2 2 0 001.207-.97l.36-.6a2 2 0 00.293-1.03v-.53" />
                                    </svg>
                                </div>

                                <div class="text-2xl font-bold mb-0 leading-none">{{ points.toLocaleString() }}</div>
                                <div class="text-[10px] uppercase tracking-tighter mb-4 opacity-80">{{ __('premium.certificates.points') }}</div>

                                <div class="text-lg font-bold uppercase mb-6 text-center leading-tight">
                                    {{ __('premium.certificates.premium_certificate') }}<br>
                                    <span class="text-blue-200">{{ levelNames[level].split(' ')[0] }}</span>
                                </div>

                                <button
                                    v-if="collectedPoints >= points"
                                    @click="toggleLevel(level)"
                                    class="w-full py-2 px-4 rounded-xl font-bold transition-all duration-200 uppercase text-sm border-2"
                                    :class="{
                                        'bg-[#00a3e0] border-[#00a3e0] text-white hover:bg-white hover:text-[#00a3e0]': form.selectedLevel !== level,
                                        'bg-white border-white text-[#0d2a52]': form.selectedLevel === level
                                    }"
                                >
                                    {{ __('premium.certificates.select') }}
                                </button>
                                <div v-else class="w-full py-2 px-4 rounded-xl font-bold uppercase text-sm border-2 border-white/20 text-center opacity-50">
                                    {{ points.toLocaleString() }} pkt
                                </div>
                            </div>
                        </div>

                        <!-- Przycisk generowania po wyborze -->
                        <div v-if="form.selectedLevel" class="mt-8 flex justify-center animate-bounce">
                            <button
                                @click="generateCertificate"
                                class="px-12 py-4 bg-white text-[#0d2a52] rounded-2xl font-bold text-xl hover:bg-blue-50 transition-colors shadow-2xl uppercase tracking-widest border-2 border-transparent"
                                :disabled="form.processing"
                            >
                                <span v-if="form.processing">{{ __('premium.certificates.generating') }}</span>
                                <span v-else>{{ __('premium.certificates.generate', { level: props.levelNames[form.selectedLevel] }) }}</span>
                            </button>
                        </div>
                    </div>

                    <!-- Postęp certyfikacji -->
                    <div class="mb-12">
                        <h3 class="text-2xl font-bold mb-8 uppercase tracking-wide text-center md:text-left">{{ __('premium.certificates.progress') }}</h3>

                        <div class="relative w-full h-4 bg-white/20 rounded-full mb-12 border border-white/10">
                            <!-- Pasek postępu -->
                            <div
                                class="absolute top-0 left-0 h-full bg-[#00a3e0] transition-all duration-1000 rounded-full shadow-[0_0_15px_rgba(0,163,224,0.6)]"
                                :style="{ width: `${Math.min(currentProgress, 100)}%` }"
                            >
                                <!-- Tooltip z punktami na końcu paska -->
                                <div class="absolute right-0 top-1/2 -translate-y-1/2 translate-x-1/2">
                                    <div class="bg-[#e31e24] text-white text-[10px] font-bold px-2 py-0.5 rounded-md whitespace-nowrap shadow-lg">
                                        {{ collectedPoints.toLocaleString() }} pkt
                                    </div>
                                </div>
                            </div>

                            <!-- Znaczniki poziomów -->
                            <div class="absolute inset-0 flex justify-between px-0">
                                <div
                                    v-for="(points, level) in levelPoints"
                                    :key="level"
                                    class="relative h-full"
                                    :style="{ position: 'absolute', left: `${(points / levelPoints[4]) * 100}%` }"
                                >
                                    <!-- Pionowa kreska -->
                                    <div class="h-full w-px bg-white/30"></div>

                                    <!-- Opis progu pod spodem -->
                                    <div class="absolute top-6 left-0 -translate-x-1/2 flex flex-col items-center">
                                        <div class="text-[9px] font-bold whitespace-nowrap mb-0.5">{{ points.toLocaleString() }} pkt</div>
                                        <div class="text-[8px] uppercase font-bold text-blue-300 whitespace-nowrap">{{ levelNames[level].split(' ')[0] }}</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Footer / Saldo punktów -->
                    <div class="text-center">
                        <h2 class="text-4xl font-black text-blue-work tracking-tighter uppercase">
                            {{ __('premium.certificates.you_have_points', { points: collectedPoints.toLocaleString() }) }}
                        </h2>
                    </div>

                    <!-- Aktualny certyfikat (jeśli posiada) -->
                    <div v-if="currentLevel > 0" class="mt-12 bg-white/5 border border-white/10 p-6 rounded-2xl flex flex-col md:flex-row items-center justify-between gap-6">
                        <div class="flex items-center gap-4">
                            <div class="p-3 bg-blue-work rounded-xl">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </div>
                            <div>
                                <h4 class="text-lg font-bold">{{ __('premium.certificates.current_certificate') }}</h4>
                                <p class="text-blue-200">
                                    {{ __('premium.certificates.you_have_certificate') }}: <span class="font-black">{{ levelNames[currentLevel] }}</span>
                                </p>
                            </div>
                        </div>
                        <a
                            :href="route('firm.premium-certificate.download')"
                            class="inline-flex items-center px-8 py-3 bg-white text-[#0d2a52] rounded-xl font-bold hover:bg-blue-work hover:text-white transition-all duration-300 shadow-xl"
                        >
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"/>
                            </svg>
                            {{ __('premium.certificates.download_certificate') }}
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </AppLayout>
</template>


