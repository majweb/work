<template>
    <div class="max-w-4xl mx-auto text-center">
        <div class="prose max-w-none">
            <div class="flex items-center justify-between mb-4">
                <h2 class="text-xl font-bold flex items-center gap-2 flex-col md:flex-row">
                    {{__('translate.instructionVideo')}}
                    <button
                        type="button"
                        @click="toggle()"
                        class="text-sm text-blue-600 hover:text-blue-800 font-semibold transition flex items-center"
                    >
                        <span>{{ open ? __('translate.collapse') : __('translate.expand') }}</span>
                        <svg
                            :class="{ 'rotate-180': open }"
                            class="ml-2 h-4 w-4 transform transition-transform duration-300"
                            xmlns="http://www.w3.org/2000/svg"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke="currentColor"
                            stroke-width="2"
                        >
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"/>
                        </svg>
                        <!-- Spinner -->
                        <svg v-if="animating" class="animate-spin ml-2 h-4 w-4 text-blue-600"
                             xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                            <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor"
                                    stroke-width="4"></circle>
                            <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8v4a4 4 0 00-4 4H4z"></path>
                        </svg>
                    </button>
                </h2>
            </div>

            <Transition
                enter-active-class="transition-all duration-500 ease-out"
                leave-active-class="transition-all duration-500 ease-in"
                @before-enter="animating = true"
                @after-enter="animating = false"
                @before-leave="animating = true"
                @after-leave="animating = false"
            >
                <div v-show="open">
                    <ol class="list-decimal list-inside space-y-4 text-left">
                        <li>
                            <strong>{{ __('translate.video_cv.title') }}</strong>
                            <ol class="list-decimal list-inside ml-6 space-y-2">
                                <li>{{ __('translate.video_cv.steps.start.step_1') }}</li>
                                <li>{{ __('translate.video_cv.steps.start.step_2') }}</li>
                                <li>{{ __('translate.video_cv.steps.start.step_3') }}</li>
                            </ol>
                        </li>

                        <li>
                            <strong>{{ __('translate.video_cv.steps.questions.title') }}</strong>
                            <ol class="list-decimal list-inside ml-6 space-y-2">
                                <li>{{ __('translate.video_cv.steps.questions.step_1') }}</li>
                                <li>{{ __('translate.video_cv.steps.questions.step_2') }}</li>
                                <li>{{ __('translate.video_cv.steps.questions.step_3') }}</li>
                                <ul class="list-disc list-inside ml-6 space-y-1">
                                    <li>{{ __('translate.video_cv.steps.questions.sub_points.finish_early') }}</li>
                                    <li>{{ __('translate.video_cv.steps.questions.sub_points.time_up') }}</li>
                                </ul>
                            </ol>
                        </li>

                        <li>
                            <strong>{{ __('translate.video_cv.steps.recording.title') }}</strong>
                            <ul class="list-disc list-inside ml-6 space-y-2">
                                <li>{{ __('translate.video_cv.steps.recording.stop') }}</li>
                                <li>{{ __('translate.video_cv.steps.recording.after_stop') }}
                                    <ul class="list-disc list-inside ml-6 space-y-1">
                                        <li>{{ __('translate.video_cv.steps.recording.sub_points.play') }}</li>
                                        <li>{{ __('translate.video_cv.steps.recording.sub_points.retry') }}</li>
                                    </ul>
                                </li>
                            </ul>
                        </li>

                        <li>
                            <strong>{{ __('translate.video_cv.steps.finish.title') }}</strong>
                            <ul class="list-disc list-inside ml-6 space-y-1">
                                <li>{{ __('translate.video_cv.steps.finish.apply') }}</li>
                            </ul>
                        </li>

                        <li>
                            <strong>{{ __('translate.video_cv.steps.tips.title') }}</strong>
                            <ul class="list-disc list-inside ml-6 space-y-1">
                                <li>{{ __('translate.video_cv.steps.tips.tip_1') }}</li>
                                <li>{{ __('translate.video_cv.steps.tips.tip_2') }}</li>
                                <li>{{ __('translate.video_cv.steps.tips.tip_3') }}</li>
                            </ul>
                        </li>
                    </ol>
                </div>
            </Transition>
        </div>

        <div v-if="recordedBlobUrl" class="mt-6">
            <h3 class="text-lg font-semibold mb-2">{{ __('translate.videoPreview') }}:</h3>
            <video :src="recordedBlobUrl" controls class="w-full rounded-xl shadow-lg"></video>
        </div>
        <video v-else ref="video" autoplay muted class="w-full rounded-xl shadow-lg"></video>
        <div v-if="currentQuestion && recording" class="mt-6 p-4 bg-white/80 rounded-xl">
            <h2 class="text-xl font-semibold">{{ currentQuestion.content }}</h2>
            <div class="text-gray-600 mt-2">{{ __('translate.remainingTime') }}: {{ timer }}s</div>
            <button
                type="button"
                class="mt-4 px-6 py-2 bg-blue-600 text-white rounded-lg shadow hover:bg-blue-700"
                @click="nextQuestion"
                :disabled="uploading"
            >
                {{ __('translate.nextQuestion') }}
            </button>
        </div>

        <div class="mt-6 space-x-4">
            <button
                v-if="!recording && !uploading"
                type="button"
                class="px-6 py-3 bg-green-600 text-white rounded-lg shadow"
                @click="startRecording"
            >
                {{ __('translate.startRecording') }}
            </button>

            <button
                v-if="recording"
                type="button"
                class="px-6 py-3 bg-red-600 text-white rounded-lg shadow"
                @click="stopRecording"
            >
                {{ __('translate.stopRecording') }}
            </button>
        </div>

        <div v-if="uploading" class="mt-6">
            <p>{{ __('translate.uploadingVideo') }}...</p>
            <progress :value="uploadProgress" max="100" class="w-full rounded"></progress>
            <p>{{ uploadProgress.toFixed(1) }}%</p>
        </div>

        <div v-if="uploadError" class="mt-4 text-red-600 font-semibold">
            {{ __('translate.uploadError') }}: {{ uploadError }}
        </div>

        <div class="flex items-center justify-center my-4">
            <InputError :message="form.errors.application" class="mt-2"/>
        </div>


        <div v-if="uploadSuccess" class="mt-4 text-green-600 font-semibold flex flex-col gap-4 items-center">
            {{ __('translate.recordingSaved') }}
            <PrimaryButton @click="$emit('submit')"
                           class="w-1/4 flex justify-center" :class="{ 'opacity-25': form.processing }"
                           :disabled="form.processing">
                {{ __('translate.apply') }}
            </PrimaryButton>

        </div>
    </div>
</template>

<script setup>
import {ref, computed} from 'vue';
import axios from 'axios';
import PrimaryButton from "@/Components/PrimaryButton.vue";
import InputError from "@/Components/InputError.vue";

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

function toggle() {
    open.value = !open.value
}

const startRecording = async () => {
    if (countdownInterval) clearInterval(countdownInterval);
    recordedBlobUrl.value = null;
    const stream = await navigator.mediaDevices.getUserMedia({video: true, audio: true});
    video.value.srcObject = stream;

    recordedChunks.length = 0;
    mediaRecorder.value = new MediaRecorder(stream);
    mediaRecorder.value.ondataavailable = (e) => recordedChunks.push(e.data);
    mediaRecorder.value.start();

    uploadId.value = `upload_${props.projectId}_${Date.now()}`;
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

    mediaRecorder.value.onstop = async () => {
        recording.value = false;
        uploading.value = true;
        uploadProgress.value = 0;

        const blob = new Blob(recordedChunks, {type: 'video/mp4'});
        recordedBlobUrl.value = URL.createObjectURL(blob);

        try {
            await uploadInChunks(blob);
            uploadSuccess.value = true;
            currentIndex.value = 0;
        } catch (e) {
            uploadError.value = e.message || __('translate.uploadError');
        } finally {
            uploading.value = false;
        }
    };

    mediaRecorder.value.stop();
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
    aspect-ratio: 16 / 9;
    background: black;
}

progress {
    height: 20px;
}
</style>
