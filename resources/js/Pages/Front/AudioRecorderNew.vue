<template>
    <div class="max-w-4xl mx-auto text-center">
        <!-- Instrukcje i pytania -->
        <div class="prose max-w-none">
            <div class="flex items-center justify-between mb-4">
                <h2 class="text-xl font-bold flex items-center gap-2">
                    {{ __('translate.instructionAudio') }}
                    <button type="button" @click="toggle"
                            class="text-sm text-blue-600 hover:text-blue-800 font-semibold transition flex items-center">
                        <span>{{ open ? __('translate.collapse') : __('translate.expand') }}</span>
                        <svg :class="{ 'rotate-180': open }"
                             class="ml-2 h-4 w-4 transform transition-transform duration-300"
                             xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                             stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"/>
                        </svg>
                        <svg v-if="animating" class="animate-spin ml-2 h-4 w-4 text-blue-600"
                             xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                            <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor"
                                    stroke-width="4"></circle>
                            <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8v4a4 4 0 00-4 4H4z"></path>
                        </svg>
                    </button>
                </h2>
            </div>
            <audio ref="audio" autoplay hidden></audio>

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
                            <strong>{{ __('translate.audio_cv.title') }}</strong>
                            <ol class="list-decimal list-inside ml-6 space-y-2">
                                <li>{{ __('translate.audio_cv.steps.start.step_1') }}</li>
                                <li>{{ __('translate.audio_cv.steps.start.step_2') }}</li>
                                <li>{{ __('translate.audio_cv.steps.start.step_3') }}</li>
                            </ol>
                        </li>
                        <li>
                            <strong>{{ __('translate.audio_cv.steps.questions.title') }}</strong>
                            <ol class="list-decimal list-inside ml-6 space-y-2">
                                <li>{{ __('translate.audio_cv.steps.questions.step_1') }}</li>
                                <li>{{ __('translate.audio_cv.steps.questions.step_2') }}</li>
                                <li>{{ __('translate.audio_cv.steps.questions.step_3') }}</li>
                                <ul class="list-disc list-inside ml-6 space-y-1">
                                    <li>{{ __('translate.audio_cv.steps.questions.sub_points.finish_early') }}</li>
                                    <li>{{ __('translate.audio_cv.steps.questions.sub_points.time_up') }}</li>
                                </ul>
                            </ol>
                        </li>
                        <li>
                            <strong>{{ __('translate.audio_cv.steps.recording.title') }}</strong>
                            <ul class="list-disc list-inside ml-6 space-y-2">
                                <li>{{ __('translate.audio_cv.steps.recording.stop') }}</li>
                                <li>{{ __('translate.audio_cv.steps.recording.after_stop') }}
                                    <ul class="list-disc list-inside ml-6 space-y-1">
                                        <li>{{ __('translate.audio_cv.steps.recording.sub_points.play') }}</li>
                                        <li>{{ __('translate.audio_cv.steps.recording.sub_points.retry') }}</li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <strong>{{ __('translate.audio_cv.steps.finish.title') }}</strong>
                            <ul class="list-disc list-inside ml-6 space-y-1">
                                <li>{{ __('translate.audio_cv.steps.finish.apply') }}</li>
                            </ul>
                        </li>
                        <li>
                            <strong>{{ __('translate.audio_cv.steps.tips.title') }}</strong>
                            <ul class="list-disc list-inside ml-6 space-y-1">
                                <li>{{ __('translate.audio_cv.steps.tips.tip_1') }}</li>
                                <li>{{ __('translate.audio_cv.steps.tips.tip_2') }}</li>
                                <li>{{ __('translate.audio_cv.steps.tips.tip_3') }}</li>
                            </ul>
                        </li>
                    </ol>
                </div>
            </Transition>
        </div>

        <!-- Podgląd nagrania -->
        <div v-if="recordedBlobUrl" class="mt-6">
            <h3 class="text-lg font-semibold mb-2">{{ __('translate.audioPreview') }}:</h3>
            <audio :src="recordedBlobUrl" controls class="w-full rounded-xl"></audio>
        </div>

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

        <!-- Przyciski nagrywania -->
        <div class="mt-6 space-x-4">
            <button type="button" v-if="!recording && !uploading" @click="startRecording"
                    class="px-6 py-3 bg-green-600 text-white rounded-lg shadow">
                {{ __('translate.startRecording') }}
            </button>
            <button type="button" v-if="recording" @click="stopRecording"
                    class="px-6 py-3 bg-red-600 text-white rounded-lg shadow">
                {{ __('translate.stopRecording') }}
            </button>
        </div>

        <!-- Status uploadu -->
        <div v-if="uploading" class="mt-6">
            <p>{{ __('translate.uploadingAudio') }}...</p>
            <progress :value="uploadProgress" max="100" class="w-full rounded"></progress>
            <p>{{ uploadProgress.toFixed(1) }}%</p>
        </div>

        <div v-if="uploadError" class="mt-4 text-red-600 font-semibold">
            {{ __('translate.uploadError') }}: {{ uploadError }}
        </div>

        <div v-if="uploadSuccess" class="mt-4 text-green-600 font-semibold flex flex-col gap-4 items-center">
            {{ __('translate.audioRecordingSaved') }}
            <PrimaryButton @click="$emit('submit')" class="w-1/4 flex justify-center"
                           :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
                {{ __('translate.apply') }}
            </PrimaryButton>
        </div>
    </div>
</template>

<script setup>
import {ref, computed, nextTick} from 'vue';
import axios from 'axios';
import PrimaryButton from "@/Components/PrimaryButton.vue";

const props = defineProps({
    questions: Array,
    form: Object,
    projectId: Number,
});
const uploadId = ref(null);

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

    const stream = await navigator.mediaDevices.getUserMedia({audio: true});
    await nextTick();
    if (audio.value) {
        audio.value.srcObject = stream;

        mediaRecorder.value = new MediaRecorder(stream, {
            mimeType: 'audio/webm;codecs=opus',
            audioBitsPerSecond: 256000
        });
        mediaRecorder.value.ondataavailable = e => recordedChunks.push(e.data);
        mediaRecorder.value.start();
        uploadId.value = `upload_${props.projectId}_${Date.now()}`;
        recording.value = true;
        uploadSuccess.value = false;
        uploadError.value = '';

        startTimer();
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

    mediaRecorder.value.onstop = async () => {
        recording.value = false;
        uploading.value = true;
        uploadProgress.value = 0;

        const blob = new Blob(recordedChunks, {type: 'audio/webm'});
        recordedBlobUrl.value = URL.createObjectURL(blob);

        const formData = new FormData();
        formData.append('audio', blob, 'recording.webm');
        formData.append('project_id', props.projectId);
        formData.append('upload_id', uploadId.value);

        try {
            await axios.post(route('front.audio.uploadNew'), formData, {
                headers: {'Content-Type': 'multipart/form-data'},
                onUploadProgress: e => {
                    uploadProgress.value = (e.loaded / e.total) * 100;
                },
            });
            uploadSuccess.value = true;
            currentIndex.value = 0;
        } catch (e) {
            uploadError.value = e.message || __('translate.audioError');
        } finally {
            uploading.value = false;
        }
    };

    mediaRecorder.value.stop();
};
</script>
