<template>
    <div class="max-w-4xl mx-auto">
        <!-- Modern Instruction Header -->
        <div class="mb-10 bg-white dark:bg-gray-800 rounded-3xl border border-gray-100 dark:border-gray-700 shadow-sm overflow-hidden">
            <button
                type="button"
                @click="toggle"
                class="w-full flex items-center justify-between p-6 hover:bg-gray-50 dark:hover:bg-gray-700/50 transition-colors group"
            >
                <div class="flex items-center gap-4">
                    <div class="p-2.5 bg-amber-50 dark:bg-amber-900/30 rounded-2xl text-amber-600 dark:text-amber-400 group-hover:scale-110 transition-transform">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11a7 7 0 01-7 7m0 0a7 7 0 01-7-7m7 7v4m0 0H8m4 0h4m-4-8a3 3 0 01-3-3V5a3 3 0 116 0v6a3 3 0 01-3 3z"/>
                        </svg>
                    </div>
                    <span class="text-lg font-black text-gray-900 dark:text-white uppercase tracking-tight">{{ __('translate.instructionAudio') }}</span>
                </div>
                <div class="flex items-center gap-3">
                    <span class="text-[10px] font-black text-amber-600 dark:text-amber-400 uppercase tracking-widest opacity-0 group-hover:opacity-100 transition-opacity">
                        {{ open ? __('translate.collapse') : __('translate.expand') }}
                    </span>
                    <div class="relative">
                        <svg
                            :class="{ 'rotate-180': open }"
                            class="h-5 w-5 text-gray-400 transform transition-transform duration-500"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"
                        >
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"/>
                        </svg>
                        <svg v-if="animating" class="animate-spin absolute inset-0 h-5 w-5 text-amber-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                            <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                            <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8v4a4 4 0 00-4 4H4z"></path>
                        </svg>
                    </div>
                </div>
            </button>

            <Transition
                enter-active-class="transition-all duration-500 ease-out"
                leave-active-class="transition-all duration-500 ease-in"
                @before-enter="animating = true"
                @after-enter="animating = false"
                @before-leave="animating = true"
                @after-leave="animating = false"
            >
                <div v-show="open" class="border-t border-gray-100 dark:border-gray-700 bg-gray-50/30 dark:bg-gray-800/30 p-8">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                        <div v-for="(step, sIdx) in 4" :key="sIdx" class="space-y-3">
                            <div class="flex items-center gap-3">
                                <span class="flex items-center justify-center w-6 h-6 rounded-full bg-amber-600 text-white text-[10px] font-black">{{ sIdx + 1 }}</span>
                                <h4 class="font-black text-gray-900 dark:text-white uppercase tracking-wider text-xs">
                                    {{ __('translate.audio_cv.steps.' + ['start', 'questions', 'recording', 'finish'][sIdx] + '.title') }}
                                </h4>
                            </div>
                            <ul class="space-y-2 ml-9">
                                <li v-if="sIdx === 0" class="text-sm text-gray-600 dark:text-gray-400 leading-relaxed">{{ __('translate.audio_cv.steps.start.step_3') }}</li>
                                <li v-if="sIdx === 1" class="text-sm text-gray-600 dark:text-gray-400 leading-relaxed">{{ __('translate.audio_cv.steps.questions.step_2') }}</li>
                                <li v-if="sIdx === 2" class="text-sm text-gray-600 dark:text-gray-400 leading-relaxed">{{ __('translate.audio_cv.steps.recording.stop') }}</li>
                                <li v-if="sIdx === 3" class="text-sm text-gray-600 dark:text-gray-400 leading-relaxed">{{ __('translate.audio_cv.steps.finish.apply') }}</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </Transition>
        </div>

        <audio ref="audio" muted hidden></audio>

        <!-- Audio Core UI -->
        <div class="relative group">
            <div class="relative rounded-[2.5rem] overflow-hidden bg-gradient-to-br from-gray-900 to-blue-900 shadow-2xl border-4 border-white dark:border-gray-800 p-12 flex flex-col items-center justify-center min-h-[300px] transition-all duration-500 group-hover:shadow-amber-500/10">

                <!-- Waveform Visualizer Placeholder/Animation -->
                <div v-if="recording" class="flex items-center gap-1.5 h-12 mb-8">
                    <div v-for="i in 12" :key="i"
                         class="w-1.5 bg-amber-400 rounded-full animate-audio-wave"
                         :style="{ animationDelay: `${i * 0.1}s`, height: `${Math.random() * 100 + 20}%` }">
                    </div>
                </div>
                <div v-else-if="recordedBlobUrl" class="mb-8">
                    <div class="p-4 bg-white/10 backdrop-blur-md rounded-2xl border border-white/20">
                        <svg class="w-12 h-12 text-amber-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19V6l12-3v13M9 19c0 1.105-1.343 2-3 2s-3-.895-3-2 1.343-2 3-2 3 .895 3 2zm12-3c0 1.105-1.343 2-3 2s-3-.895-3-2 1.343-2 3-2 3 .895 3 2zM9 10l12-3"/>
                        </svg>
                    </div>
                </div>
                <div v-else class="mb-8">
                    <div class="p-6 bg-white/5 rounded-[2rem] border border-white/10">
                        <svg class="w-16 h-16 text-gray-500 opacity-50" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19 11a7 7 0 01-7 7m0 0a7 7 0 01-7-7m7 7v4m0 0H8m4 0h4m-4-8a3 3 0 01-3-3V5a3 3 0 116 0v6a3 3 0 01-3 3z"/>
                        </svg>
                    </div>
                </div>

                <!-- Status & Timer -->
                <div class="flex flex-col items-center gap-2 mb-8">
                    <div v-if="recording" class="flex items-center gap-3 bg-black/40 backdrop-blur-md px-4 py-2 rounded-2xl border border-white/10">
                        <span class="relative flex h-2.5 w-2.5">
                            <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-red-400 opacity-75"></span>
                            <span class="relative inline-flex rounded-full h-2.5 w-2.5 bg-red-500"></span>
                        </span>
                        <span class="text-[10px] font-black text-white uppercase tracking-widest">{{ __('translate.recording') }}</span>
                    </div>
                    <div v-if="recording" class="text-4xl font-black text-white tabular-nums tracking-tight">
                        {{ timer }}<span class="text-lg text-amber-400 ml-1">s</span>
                    </div>
                </div>

                <!-- Questions & Audio Player -->
                <div class="w-full max-w-xl">
                    <Transition
                        enter-active-class="transition duration-300 ease-out"
                        enter-from-class="opacity-0 translate-y-4"
                        enter-to-class="opacity-100 translate-y-0"
                    >
                        <div v-if="currentQuestion && recording" class="bg-white/10 backdrop-blur-xl rounded-3xl p-8 border border-white/20 shadow-2xl text-center">
                            <span class="text-[10px] font-black text-amber-400 uppercase tracking-[0.2em] mb-3 block">Pytanie {{ currentIndex + 1 }} z {{ questions.length }}</span>
                            <h3 class="text-xl md:text-2xl font-black text-white leading-tight uppercase tracking-tight mb-6">{{ currentQuestion.content }}</h3>
                            <button
                                type="button"
                                class="group/btn inline-flex items-center gap-3 px-8 py-3 bg-amber-600 hover:bg-amber-500 text-white rounded-2xl font-black text-xs uppercase tracking-widest transition-all shadow-xl shadow-amber-600/20 active:scale-95"
                                @click="nextQuestion"
                                :disabled="uploading"
                            >
                                {{ __('translate.nextQuestion') }}
                                <svg class="w-4 h-4 transition-transform group-hover/btn:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"/>
                                </svg>
                            </button>
                        </div>
                    </Transition>

                    <div v-if="recordedBlobUrl" class="space-y-4">
                        <div class="flex items-center justify-between px-2">
                            <span class="text-[10px] font-black text-amber-400 uppercase tracking-widest">{{ __('translate.audioPreview') }}</span>
                        </div>
                        <audio :src="recordedBlobUrl" controls class="w-full audio-custom-style"></audio>
                    </div>
                </div>

                <!-- Initial Start Button -->
                <div v-if="!recording && !uploading && !recordedBlobUrl" class="absolute inset-0 flex items-center justify-center">
                    <button
                        type="button"
                        @click="startRecording"
                        class="group/start relative flex items-center justify-center w-24 h-24 bg-white rounded-full shadow-2xl hover:scale-110 transition-all duration-500"
                    >
                        <div class="absolute inset-0 bg-amber-600 rounded-full scale-0 group-hover/start:scale-100 transition-transform duration-500"></div>
                        <svg class="relative w-10 h-10 text-amber-600 group-hover/start:text-white transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11a7 7 0 01-7 7m0 0a7 7 0 01-7-7m7 7v4m0 0H8m4 0h4m-4-8a3 3 0 01-3-3V5a3 3 0 116 0v6a3 3 0 01-3 3z"/>
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <!-- Action Controls -->
        <div class="mt-10 flex flex-col items-center gap-6">
            <div class="flex items-center gap-4">
                <button
                    v-if="recording"
                    type="button"
                    class="group flex items-center gap-3 px-8 py-4 bg-red-600 hover:bg-red-700 text-white rounded-2xl font-black text-sm uppercase tracking-widest transition-all shadow-xl shadow-red-600/20 active:scale-95"
                    @click="stopRecording"
                >
                    <svg class="w-5 h-5 animate-pulse" fill="currentColor" viewBox="0 0 24 24">
                        <rect x="6" y="6" width="12" height="12" rx="2" />
                    </svg>
                    {{ __('translate.stopRecording') }}
                </button>

                <button
                    v-if="recordedBlobUrl && !uploading"
                    type="button"
                    @click="startRecording"
                    class="group flex items-center gap-3 px-8 py-4 bg-gray-900 dark:bg-white text-white dark:text-gray-900 rounded-2xl font-black text-sm uppercase tracking-widest transition-all shadow-xl active:scale-95"
                >
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"/>
                    </svg>
                    Nagraj ponownie
                </button>
            </div>

            <!-- Upload Status -->
            <Transition
                enter-active-class="transition duration-500 ease-out"
                enter-from-class="opacity-0 scale-95"
                enter-to-class="opacity-100 scale-100"
            >
                <div v-if="uploading" class="w-full max-w-md bg-white dark:bg-gray-800 p-6 rounded-[2rem] border border-gray-100 dark:border-gray-700 shadow-xl text-center">
                    <div class="flex items-center justify-between mb-4">
                        <span class="text-xs font-black text-gray-900 dark:text-white uppercase tracking-widest">{{ __('translate.uploadingAudio') }}</span>
                        <span class="text-sm font-black text-amber-600 tabular-nums">{{ uploadProgress.toFixed(0) }}%</span>
                    </div>
                    <div class="h-3 w-full bg-gray-100 dark:bg-gray-700 rounded-full overflow-hidden">
                        <div class="h-full bg-amber-600 rounded-full transition-all duration-300" :style="{ width: uploadProgress + '%' }"></div>
                    </div>
                </div>
            </Transition>

            <!-- Success Message -->
            <Transition
                enter-active-class="transition duration-500 ease-out"
                enter-from-class="opacity-0 translate-y-4"
                enter-to-class="opacity-100 translate-y-0"
            >
                <div v-if="uploadSuccess" class="flex flex-col items-center gap-6">
                    <div class="flex items-center gap-3 px-6 py-3 bg-green-50 dark:bg-green-900/20 text-green-600 dark:text-green-400 rounded-2xl border border-green-100 dark:border-green-800/30">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                        </svg>
                        <span class="text-sm font-black uppercase tracking-widest">{{ __('translate.audioRecordingSaved') }}</span>
                    </div>
                </div>
            </Transition>
        </div>
    </div>
</template>

<script setup>
import {ref, computed, nextTick} from 'vue';
import axios from 'axios';
import PrimaryButton from "@/Components/PrimaryButton.vue";
import RecordRTC, { StereoAudioRecorder } from 'recordrtc';

const props = defineProps({
    questions: Array,
    form: Object,
    projectId: Number,
});
const uploadId = ref(null);

const CHUNK_SIZE = 1024 * 1024; // 1MB
const audio = ref(null);
const mediaRecorder = ref(null);
const recordedChunks = [];
const currentIndex = ref(0);
const currentQuestion = computed(() => props.questions[currentIndex.value]);
const timer = ref(0);
const recording = ref(false);
let countdownInterval = null;
const recordedBlobUrl = ref(null);

const uploading = ref(false);
const uploadProgress = ref(0);
const uploadError = ref('');
const uploadSuccess = ref(false);

const open = ref(false);
const animating = ref(false);

function toggle() {
    open.value = !open.value;
}

const startRecording = async () => {
    if (countdownInterval) clearInterval(countdownInterval);
    recordedBlobUrl.value = null;
    recordedChunks.length = 0;

    const stream = await navigator.mediaDevices.getUserMedia({
        audio: {
            echoCancellation: false,
            noiseSuppression: false,
            autoGainControl: false
        }
    });
    await nextTick();
    if (audio.value) {
        audio.value.srcObject = stream;

        mediaRecorder.value = new RecordRTC(stream, {
            type: 'audio',
            recorderType: StereoAudioRecorder,
            mimeType: 'audio/wav',
            numberOfAudioChannels: 2, // Stereo dla lepszej barwy (jeśli mikrofon wspiera)
            desiredSampRate: 48000, // 48 kHz (High Fidelity)
            bufferSize: 4096 // mniejszy bufor = mniejszy lag początkowy
        });

        mediaRecorder.value.startRecording();

        uploadId.value = `upload_${props.projectId}_${Date.now()}`;
        props.form.cv_upload_id = uploadId.value;
        recording.value = true;
        uploadSuccess.value = false;
        uploadError.value = '';

        // Timer startuje ułamek sekundy później, by wyrównać opóźnienie hardware
        setTimeout(() => {
            startTimer();
        }, 100);
    }

}


const startTimer = () => {
    timer.value = currentQuestion.value.answer_time;
    if (countdownInterval) clearInterval(countdownInterval);
    countdownInterval = setInterval(() => {
        timer.value--;
        if (timer.value <= 0) nextQuestion();
    }, 1000);
};

const nextQuestion = () => {
    if (countdownInterval) clearInterval(countdownInterval);
    if (currentIndex.value < props.questions.length - 1) {
        currentIndex.value++;
        startTimer();
    } else {
        if (recording.value) stopRecording();
    }
};

const stopRecording = async () => {
    if (countdownInterval) clearInterval(countdownInterval);
    if (!mediaRecorder.value) return;

    const tracks = audio.value.srcObject?.getTracks();
    tracks?.forEach(track => track.stop());
    audio.value.srcObject = null;

    mediaRecorder.value.stopRecording(async () => {
        recording.value = false;
        uploading.value = true;
        uploadProgress.value = 0;

        const blob = mediaRecorder.value.getBlob();
        recordedBlobUrl.value = URL.createObjectURL(blob);

        try {
            await uploadInChunks(blob);
            uploadSuccess.value = true;
            currentIndex.value = 0;
        } catch (e) {
            uploadError.value = e.message || __('translate.audioError');
        } finally {
            uploading.value = false;
            mediaRecorder.value.destroy();
            mediaRecorder.value = null;
        }
    });
};

async function uploadInChunks(blob) {
    const totalChunks = Math.ceil(blob.size / CHUNK_SIZE);

    for (let chunkIndex = 0; chunkIndex < totalChunks; chunkIndex++) {
        const start = chunkIndex * CHUNK_SIZE;
        const end = Math.min(start + CHUNK_SIZE, blob.size);
        const chunk = blob.slice(start, end);

        const formData = new FormData();
        formData.append('chunk', chunk);
        formData.append('upload_id', uploadId.value);
        formData.append('chunk_index', chunkIndex);
        formData.append('total_chunks', totalChunks);
        formData.append('project_id', props.projectId);

        await axios.post(route('front.audio.upload'), formData, {
            headers: {'Content-Type': 'multipart/form-data'},
        });

        uploadProgress.value = ((chunkIndex + 1) / totalChunks) * 100;
    }
}
</script>

<style>
@keyframes audio-wave {
    0%, 100% { transform: scaleY(0.5); opacity: 0.5; }
    50% { transform: scaleY(1.5); opacity: 1; }
}
.animate-audio-wave {
    animation: audio-wave 1s ease-in-out infinite;
}

.audio-custom-style {
    @apply w-full rounded-2xl;
}

progress {
    @apply h-3 w-full bg-gray-100 dark:bg-gray-700 rounded-full overflow-hidden;
}
progress::-webkit-progress-bar { @apply bg-transparent; }
progress::-webkit-progress-value { @apply bg-amber-600 rounded-full transition-all duration-300; }
progress::-moz-progress-bar { @apply bg-amber-600 rounded-full transition-all duration-300; }
</style>
