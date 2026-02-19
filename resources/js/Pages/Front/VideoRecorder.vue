<template>
    <div class="max-w-4xl mx-auto">
        <!-- Modern Instruction Header -->
        <div class="mb-10 bg-white dark:bg-gray-800 rounded-3xl border border-gray-100 dark:border-gray-700 shadow-sm overflow-hidden">
            <button
                type="button"
                @click="toggle()"
                class="w-full flex items-center justify-between p-6 hover:bg-gray-50 dark:hover:bg-gray-700/50 transition-colors group"
            >
                <div class="flex items-center gap-4">
                    <div class="p-2.5 bg-blue-50 dark:bg-blue-900/30 rounded-2xl text-blue-600 dark:text-blue-400 group-hover:scale-110 transition-transform">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z"/>
                        </svg>
                    </div>
                    <span class="text-lg font-black text-gray-900 dark:text-white uppercase tracking-tight">{{ __('translate.instructionVideo') }}</span>
                </div>
                <div class="flex items-center gap-3">
                    <span class="text-[10px] font-black text-blue-600 dark:text-blue-400 uppercase tracking-widest opacity-0 group-hover:opacity-100 transition-opacity">
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
                        <svg v-if="animating" class="animate-spin absolute inset-0 h-5 w-5 text-blue-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
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
                                <span class="flex items-center justify-center w-6 h-6 rounded-full bg-blue-600 text-white text-[10px] font-black">{{ sIdx + 1 }}</span>
                                <h4 class="font-black text-gray-900 dark:text-white uppercase tracking-wider text-xs">
                                    {{ __('translate.video_cv.steps.' + ['start', 'questions', 'recording', 'finish'][sIdx] + '.title') }}
                                </h4>
                            </div>
                            <ul class="space-y-2 ml-9">
                                <li v-if="sIdx === 0" class="text-sm text-gray-600 dark:text-gray-400 leading-relaxed">{{ __('translate.video_cv.steps.start.step_3') }}</li>
                                <li v-if="sIdx === 1" class="text-sm text-gray-600 dark:text-gray-400 leading-relaxed">{{ __('translate.video_cv.steps.questions.step_2') }}</li>
                                <li v-if="sIdx === 2" class="text-sm text-gray-600 dark:text-gray-400 leading-relaxed">{{ __('translate.video_cv.steps.recording.stop') }}</li>
                                <li v-if="sIdx === 3" class="text-sm text-gray-600 dark:text-gray-400 leading-relaxed">{{ __('translate.video_cv.steps.finish.apply') }}</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </Transition>
        </div>

        <!-- Video Recorder Core UI -->
        <div class="relative group">
            <!-- Glassmorphism Container -->
            <div class="relative rounded-[2.5rem] overflow-hidden bg-black shadow-2xl border-4 border-white dark:border-gray-800 transition-all duration-500 group-hover:shadow-blue-500/10 aspect-video">
                <video v-if="recordedBlobUrl" :src="recordedBlobUrl" controls class="w-full h-full object-cover"></video>
                <video v-else ref="video" autoplay muted class="w-full h-full object-cover"></video>

                <!-- Recording Status Overlay -->
                <div v-if="recording" class="absolute top-6 left-6 flex items-center gap-3 bg-black/40 backdrop-blur-md px-4 py-2 rounded-2xl border border-white/10">
                    <span class="relative flex h-3 w-3">
                        <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-red-400 opacity-75"></span>
                        <span class="relative inline-flex rounded-full h-3 w-3 bg-red-500"></span>
                    </span>
                    <span class="text-[10px] font-black text-white uppercase tracking-widest">{{ __('translate.recording') }}</span>
                </div>

                <!-- Timer Overlay -->
                <div v-if="recording" class="absolute top-6 right-6 bg-black/40 backdrop-blur-md px-4 py-2 rounded-2xl border border-white/10">
                    <div class="flex items-center gap-2">
                        <svg class="w-4 h-4 text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                        <span class="text-lg font-black text-white tabular-nums">{{ timer }}s</span>
                    </div>
                </div>

                <!-- Question Overlay -->
                <Transition
                    enter-active-class="transition duration-300 ease-out"
                    enter-from-class="opacity-0 translate-y-4"
                    enter-to-class="opacity-100 translate-y-0"
                    leave-active-class="transition duration-200 ease-in"
                    leave-from-class="opacity-100 translate-y-0"
                    leave-to-class="opacity-0 translate-y-4"
                >
                    <div v-if="currentQuestion && recording" class="absolute bottom-8 left-8 right-8 bg-white/10 backdrop-blur-xl rounded-[2rem] p-8 border border-white/20 shadow-2xl">
                        <div class="flex flex-col md:flex-row items-center justify-between gap-6">
                            <div class="flex-1 text-center md:text-left">
                                <span class="text-[10px] font-black text-blue-400 uppercase tracking-[0.2em] mb-2 block">Pytanie {{ currentIndex + 1 }} z {{ questions.length }}</span>
                                <h3 class="text-xl md:text-2xl font-black text-white leading-tight uppercase tracking-tight">{{ currentQuestion.content }}</h3>
                            </div>
                            <button
                                type="button"
                                class="shrink-0 group/btn flex items-center gap-3 px-6 py-3 bg-blue-600 hover:bg-blue-500 text-white rounded-2xl font-black text-xs uppercase tracking-widest transition-all shadow-xl shadow-blue-600/20 active:scale-95"
                                @click="nextQuestion"
                                :disabled="uploading"
                            >
                                {{ __('translate.nextQuestion') }}
                                <svg class="w-4 h-4 transition-transform group-hover/btn:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"/>
                                </svg>
                            </button>
                        </div>
                    </div>
                </Transition>

                <!-- Initial Start Button Overlay -->
                <div v-if="!recording && !uploading && !recordedBlobUrl" class="absolute inset-0 flex items-center justify-center bg-black/20 backdrop-blur-[2px]">
                    <button
                        type="button"
                        @click="startRecording"
                        class="group/start relative flex items-center justify-center w-24 h-24 bg-white rounded-full shadow-2xl hover:scale-110 transition-all duration-500"
                    >
                        <div class="absolute inset-0 bg-blue-600 rounded-full scale-0 group-hover/start:scale-100 transition-transform duration-500"></div>
                        <svg class="relative w-10 h-10 text-blue-600 group-hover/start:text-white transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z"/>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
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

            <!-- Upload Status Card -->
            <Transition
                enter-active-class="transition duration-500 ease-out"
                enter-from-class="opacity-0 scale-95"
                enter-to-class="opacity-100 scale-100"
            >
                <div v-if="uploading" class="w-full max-w-md bg-white dark:bg-gray-800 p-6 rounded-[2rem] border border-gray-100 dark:border-gray-700 shadow-xl">
                    <div class="flex items-center justify-between mb-4">
                        <span class="text-xs font-black text-gray-900 dark:text-white uppercase tracking-widest">{{ __('translate.uploadingVideo') }}</span>
                        <span class="text-sm font-black text-blue-600 tabular-nums">{{ uploadProgress.toFixed(0) }}%</span>
                    </div>
                    <div class="h-3 w-full bg-gray-100 dark:bg-gray-700 rounded-full overflow-hidden">
                        <div class="h-full bg-blue-600 rounded-full transition-all duration-300" :style="{ width: uploadProgress + '%' }"></div>
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
                        <span class="text-sm font-black uppercase tracking-widest">{{ __('translate.recordingSaved') }}</span>
                    </div>
                </div>
            </Transition>

            <InputError :message="form.errors.application" class="font-black uppercase tracking-tighter text-[10px] text-center bg-red-50 dark:bg-red-900/20 px-4 py-2 rounded-xl"/>
        </div>
    </div>
</template>

<script setup>
import {ref, computed, watch} from 'vue';
import axios from 'axios';
import PrimaryButton from "@/Components/PrimaryButton.vue";
import InputError from "@/Components/InputError.vue";
import RecordRTC from 'recordrtc';

const props = defineProps({
    questions: Array,
    form: Object,
    projectId: Number,
});

const video = ref(null);
const mediaRecorder = ref(null);
const recordedChunks = [];
const currentIndex = ref(0);
const currentQuestion = computed(() => props.questions[currentIndex.value]);
const timer = ref(0);
const recording = ref(false);
let countdownInterval = null;
const recordedBlobUrl = ref(null);

const CHUNK_SIZE = 1024 * 1024; // 1MB
const uploadId = ref(null);

const uploading = ref(false);
const uploadProgress = ref(0);
const uploadError = ref('');
const uploadSuccess = ref(false);
const open = ref(false)
const animating = ref(false)
const emit = defineEmits(['uploadStateChange']);

watch(uploading, (newVal) => {
    emit('uploadStateChange', newVal);
});

function toggle() {
    open.value = !open.value
}

const startRecording = async () => {
    if (countdownInterval) clearInterval(countdownInterval);
    recordedBlobUrl.value = null;
    const stream = await navigator.mediaDevices.getUserMedia({
        video: true,
        audio: {
            echoCancellation: false,
            noiseSuppression: false,
            autoGainControl: false
        }
    });
    video.value.srcObject = stream;

    recordedChunks.length = 0;
    mediaRecorder.value = new RecordRTC(stream, {
        type: 'video',
        mimeType: 'video/webm',
        bitsPerSecond: 1280000 // 1.28 Mbps dla dobrej jakości
    });

    mediaRecorder.value.startRecording();

    uploadId.value = `upload_${props.projectId}_${Date.now()}`;
    props.form.cv_upload_id = uploadId.value;
    recording.value = true;
    uploadSuccess.value = false;
    uploadError.value = '';

    startTimer();
};

const startTimer = () => {
    timer.value = currentQuestion.value.answer_time;
    if (countdownInterval) clearInterval(countdownInterval);

    countdownInterval = setInterval(() => {
        timer.value--;
        if (timer.value <= 0) {
            nextQuestion();
        }
    }, 1000);
};

const nextQuestion = () => {
    if (countdownInterval) clearInterval(countdownInterval);

    if (currentIndex.value < props.questions.length - 1) {
        currentIndex.value++;
        startTimer();
    } else {
        if (recording.value) {
            stopRecording();
        }
    }
};

// const stopRecording = () => {
//     if (countdownInterval) clearInterval(countdownInterval);
//     if (!mediaRecorder.value) return;
//
//     mediaRecorder.value.onstop = async () => {
//         recording.value = false;
//         uploading.value = true;
//         uploadProgress.value = 0;
//
//         const blob = new Blob(recordedChunks, { type: 'video/mp4' });
//         recordedBlobUrl.value = URL.createObjectURL(blob);
//
//         try {
//             await uploadInChunks(blob);
//             uploadSuccess.value = true;
//             currentIndex.value = 0; // reset indeks pytań po udanym uploadzie
//         } catch (e) {
//             uploadError.value = e.message || 'Nieznany błąd';
//         } finally {
//             uploading.value = false;
//         }
//     };
//
//     mediaRecorder.value.stop();
// };
const stopRecording = () => {
    if (countdownInterval) clearInterval(countdownInterval);
    if (!mediaRecorder.value) return;

    // Natychmiastowe zatrzymanie strumienia z kamery i mikrofonu
    const tracks = video.value.srcObject?.getTracks();
    tracks?.forEach(track => track.stop());
    video.value.srcObject = null;

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
            uploadError.value = e.message || __('translate.uploadError');
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

        await axios.post(route('front.video.upload'), formData, {
            headers: {'Content-Type': 'multipart/form-data'},
        });

        uploadProgress.value = ((chunkIndex + 1) / totalChunks) * 100;
    }
}
</script>

<style scoped>
video {
    background: #000;
}

progress {
    @apply h-3 w-full bg-gray-100 dark:bg-gray-700 rounded-full overflow-hidden;
}

progress::-webkit-progress-bar {
    @apply bg-transparent;
}

progress::-webkit-progress-value {
    @apply bg-blue-600 rounded-full transition-all duration-300;
}

progress::-moz-progress-bar {
    @apply bg-blue-600 rounded-full transition-all duration-300;
}
</style>
