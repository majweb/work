<script setup>
  import AppLayout from '@/Layouts/AppLayout.vue';
  import {Head, Link} from '@inertiajs/vue3'
  import PrimaryButton from "@/Components/PrimaryButton.vue";
  import Banner from "@/Components/Banner.vue";

  defineProps({
      getApps: Array,
      token:String,
      email:String,
  })


  function downloadFile(url, filename = 'CV.pdf') {
      if (!url) return;

      fetch(url)
          .then(response => {
              if (!response.ok) throw new Error('Błąd pobierania pliku');
              return response.blob();
          })
          .then(blob => {
              const link = document.createElement('a');
              link.href = window.URL.createObjectURL(blob);
              link.download = filename;
              link.click();
              window.URL.revokeObjectURL(link.href);
          })
          .catch(error => {
              console.error('Nie udało się pobrać pliku:', error);
          });
  }
</script>
<template>
        <div class="mt-6 min-h-screen flex items-center justify-center">

        <Head :title="__('translate.externalCompanies')" />
            <Banner />
        <div class="w-full max-w-7xl px-4 sm:px-6 lg:px-8 flex flex-col items-center justify-center">
            <!-- Nagłówek i przycisk -->
            <div class="flex flex-col sm:flex-row justify-between items-center mb-6 gap-4">
                <h2 class="text-2xl font-semibold text-gray-800">
                    {{ __('translate.externalCompanies') }}
                </h2>
            </div>

            <!-- Tabela -->
            <div class="overflow-x-auto shadow-lg rounded-lg bg-white">
                <table class="min-w-full divide-y divide-gray-200 text-center">
                    <thead class="bg-gray-100">
                    <tr>
                        <th class="px-4 py-3 text-xs font-medium text-gray-500 uppercase tracking-wider">ID</th>
                        <th class="px-4 py-3 text-xs font-medium text-gray-500 uppercase tracking-wider">Email</th>
                        <th class="px-4 py-3 text-xs font-medium text-gray-500 uppercase tracking-wider">{{ __('translate.name') }}</th>
                        <th class="px-4 py-3 text-xs font-medium text-gray-500 uppercase tracking-wider">{{ __('translate.surname') }}</th>
                        <th class="px-4 py-3 text-xs font-medium text-gray-500 uppercase tracking-wider">{{ __('translate.profession') }}</th>
                        <th class="px-4 py-3 text-xs font-medium text-gray-500 uppercase tracking-wider">{{ __('translate.phone') }}</th>
                        <th class="px-4 py-3 text-xs font-medium text-gray-500 uppercase tracking-wider">{{ __('translate.cv') }}</th>
                        <th class="px-4 py-3 text-xs font-medium text-gray-500 uppercase tracking-wider">{{ __('translate.variants') }}</th>
                        <th class="px-4 py-3 text-xs font-medium text-gray-500 uppercase tracking-wider">{{ __('translate.actions') }}</th>
                    </tr>
                    </thead>

                    <tbody class="bg-white divide-y divide-gray-200">
                    <tr v-if="getApps && getApps.length" v-for="app in getApps" :key="app.id">
                        <td class="px-4 py-2 whitespace-nowrap">{{ app.id }}</td>
                        <td class="px-4 py-2 whitespace-nowrap">{{ app.candidate.email }}</td>
                        <td class="px-4 py-2 whitespace-nowrap">{{ app.candidate.name }}</td>
                        <td class="px-4 py-2 whitespace-nowrap">{{ app.candidate.surname }}</td>
                        <td class="px-4 py-2 whitespace-nowrap">{{ app.project?.position?.name }}</td>
                        <td class="px-4 py-2 whitespace-nowrap">{{ app.candidate.phone }}</td>

                        <!-- CV -->
                        <td class="px-4 py-2 whitespace-nowrap">
                            <div class="flex justify-center gap-2 flex-wrap">
                                <button
                                    v-if="app.first_cv_url"
                                    @click="downloadFile(app.first_cv_url)"
                                    class="bg-blue-500 hover:bg-blue-600 text-white px-3 py-1 rounded text-xs"
                                >
                                    CV
                                </button>
                                <button
                                    v-else-if="app.upload_cv_url"
                                    @click="downloadFile(app.upload_cv_url)"
                                    class="bg-green-500 hover:bg-green-600 text-white px-3 py-1 rounded text-xs"
                                >
                                    CV
                                </button>
                                <button
                                    v-else-if="app.pathCv"
                                    @click="downloadFile(app.pathCv)"
                                    class="bg-gray-500 hover:bg-gray-600 text-white px-3 py-1 rounded text-xs"
                                >
                                    CV
                                </button>
                            </div>
                        </td>

                        <!-- Variants -->
                        <td class="px-4 py-2 whitespace-nowrap flex justify-center gap-2 flex-wrap">
                            <a
                                v-if="app.cv_audio?.file_path"
                                :href="route('cv_audio.download', app.id)"
                                class="bg-blue-500 hover:bg-blue-600 text-white px-3 py-1 rounded text-xs"
                            >
                                CV Audio
                            </a>
                            <a
                                v-if="app.cv_video?.file_path"
                                :href="route('cv_audio.download', app.id)"
                                class="bg-blue-500 hover:bg-blue-600 text-white px-3 py-1 rounded text-xs"
                            >
                                CV Video
                            </a>
                        </td>

                        <!-- Actions -->
                        <td class="px-4 py-2 whitespace-nowrap">
                            <div class="flex justify-center gap-2 flex-wrap">
                                <Link
                                    v-if="app.status != 'yes'"
                                    method="post"
                                    :href="route('external.answer')"
                                    :data="{ application: app.id, decision: 'yes' }"
                                    class="bg-green-500 hover:bg-green-600 text-white px-3 py-1 rounded text-xs"
                                >
                                    Tak
                                </Link>
                                <Link
                                    v-if="app.status != 'no'"
                                    method="post"
                                    :href="route('external.answer')"
                                    :data="{ application: app.id, decision: 'no' }"
                                    class="bg-red-500 hover:bg-red-600 text-white px-3 py-1 rounded text-xs"
                                >
                                    Nie
                                </Link>
                            </div>
                        </td>
                    </tr>

                    <tr v-else>
                        <td colspan="9" class="px-4 py-4 text-center text-gray-500">
                            {{ __('translate.noAplications') }}
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</template>

