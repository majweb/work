<template>
    <div class="max-w-4xl mx-auto text-center">
        <video ref="video" autoplay muted class="w-full rounded-xl shadow-lg" ></video>

        <div v-if="currentQuestion && recording" class="mt-6 p-4 bg-white/80 rounded-xl">
            <h2 class="text-xl font-semibold">{{ currentQuestion.content }}</h2>
            <div class="text-gray-600 mt-2">Pozostały czas: {{ timer }}s</div>
            <button
                type="button"
                class="mt-4 px-6 py-2 bg-blue-600 text-white rounded-lg shadow hover:bg-blue-700"
                @click="nextQuestion"
                :disabled="uploading"
            >
                Następne pytanie
            </button>
        </div>

        <div class="mt-6 space-x-4">
            <button
                v-if="!recording && !uploading"
                type="button"
                class="px-6 py-3 bg-green-600 text-white rounded-lg shadow"
                @click="startRecording"
            >
                Rozpocznij nagrywanie
            </button>

            <button
                v-if="recording"
                type="button"
                class="px-6 py-3 bg-red-600 text-white rounded-lg shadow"
                @click="stopRecording"
            >
                Zatrzymaj nagrywanie
            </button>
        </div>

        <div v-if="uploading" class="mt-6">
            <p>Przesyłanie wideo...</p>
            <progress :value="uploadProgress" max="100" class="w-full rounded"></progress>
            <p>{{ uploadProgress.toFixed(1) }}%</p>
        </div>

        <div v-if="uploadError" class="mt-4 text-red-600 font-semibold">
            Błąd uploadu: {{ uploadError }}
        </div>

        <div v-if="uploadSuccess" class="mt-4 text-green-600 font-semibold">
            Nagranie zapisane pomyślnie!
        </div>
    </div>
</template>

<script setup>
import { ref, computed } from 'vue';
import axios from 'axios';

const props = defineProps({
    questions: Array,
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

const CHUNK_SIZE = 1024 * 1024; // 1MB
const uploadId = ref(null);

const uploading = ref(false);
const uploadProgress = ref(0);
const uploadError = ref('');
const uploadSuccess = ref(false);

const startRecording = async () => {
    if (countdownInterval) clearInterval(countdownInterval);

    const stream = await navigator.mediaDevices.getUserMedia({ video: true, audio: true });
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

const stopRecording = () => {
    if (countdownInterval) clearInterval(countdownInterval);
    if (!mediaRecorder.value) return;

    mediaRecorder.value.onstop = async () => {
        recording.value = false;
        uploading.value = true;
        uploadProgress.value = 0;

        const blob = new Blob(recordedChunks, { type: 'video/mp4' });

        try {
            await uploadInChunks(blob);
            uploadSuccess.value = true;
            currentIndex.value = 0; // reset indeks pytań po udanym uploadzie
        } catch (e) {
            uploadError.value = e.message || 'Nieznany błąd';
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
            headers: { 'Content-Type': 'multipart/form-data' },
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
