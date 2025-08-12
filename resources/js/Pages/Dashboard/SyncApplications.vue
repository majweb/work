<template>
  <div class="p-6 bg-white rounded-lg shadow-md">
    <h2 class="text-lg font-semibold mb-4">Synchronizacja Aplikacji z Kandydatami</h2>

    <p class="mb-4">Ta operacja przeanalizuje wszystkie istniejące aplikacje i utworzy odpowiednie powiązania z kandydatami.</p>

    <div v-if="message" class="mb-4" :class="success ? 'text-green-600' : 'text-red-600'">
      {{ message }}
    </div>

    <button
      @click="syncApplications"
      :disabled="loading"
      class="px-4 py-2 bg-blue-work text-white rounded-lg hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50 disabled:opacity-50 disabled:cursor-not-allowed"
    >
      <span v-if="loading">Trwa synchronizacja...</span>
      <span v-else>Rozpocznij synchronizację</span>
    </button>
  </div>
</template>

<script setup>
import { ref } from 'vue';
import axios from 'axios';

const loading = ref(false);
const message = ref('');
const success = ref(false);

const syncApplications = async () => {
  loading.value = true;
  message.value = '';

  try {
    const response = await axios.get(route('sync.applications.candidates'));
    message.value = response.data.message;
    success.value = true;
  } catch (error) {
    console.error('Błąd synchronizacji:', error);
    message.value = error.response?.data?.message || 'Wystąpił błąd podczas synchronizacji';
    success.value = false;
  } finally {
    loading.value = false;
  }
};
</script>
