<script setup>
import {Head, Link} from '@inertiajs/vue3'
import Banner from "@/Components/Banner.vue";
import { useProjectHelpers } from "@/Composables/useProjectHelpers.js";

defineProps({
    getApps: Array,
    token: String,
    email: String,
})

const { getPositionTitle } = useProjectHelpers();

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
    <div class="min-h-screen bg-[#F8FAFC] py-12 px-4 sm:px-6 lg:px-8">
        <Head :title="__('translate.externalCompanies')"/>
        <Banner/>

        <div class="max-w-7xl mx-auto">
            <!-- Header -->
            <div class="mb-12 text-center">
                <h2 class="text-[10px] font-black text-blue-600 uppercase tracking-[0.3em] mb-3">
                    {{ __('translate.externalCompanies') }}
                </h2>
                <h1 class="text-4xl font-black text-[#0A2C5C] uppercase tracking-tight">
                    Lista Kandydatów
                </h1>
                <div class="mt-4 h-1.5 w-24 bg-blue-600 mx-auto rounded-full"></div>
            </div>

            <!-- Applications Grid -->
            <div v-if="getApps && getApps.length" class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                <div v-for="app in getApps" :key="app.id"
                     class="group bg-white rounded-[2.5rem] border border-gray-100 shadow-sm hover:shadow-xl hover:shadow-blue-900/5 transition-all duration-300 p-6 flex flex-col justify-between"
                >
                    <div class="flex items-start gap-6 mb-6">
                        <!-- Candidate Initial / Photo -->
                        <div class="w-16 h-16 rounded-2xl bg-blue-50 flex items-center justify-center overflow-hidden shrink-0 border-2 border-white shadow-sm transition-transform duration-300 group-hover:scale-105">
                            <div class="text-[#0A2C5C] font-black text-xl uppercase">
                                {{ (app.candidate?.name?.[0] || '') + (app.candidate?.surname?.[0] || '') }}
                            </div>
                        </div>

                        <!-- Basic Info -->
                        <div class="flex-1 min-w-0">
                            <div class="flex items-center gap-2 mb-1">
                                <span class="text-[10px] font-black text-blue-600 uppercase tracking-widest">ID {{ app.id }}</span>
                                <div class="h-1 w-1 bg-gray-300 rounded-full"></div>
                                <span class="text-[10px] font-bold text-gray-400 uppercase tracking-widest">{{ app.candidate?.email }}</span>
                            </div>
                            <h3 class="text-xl font-black text-[#0A2C5C] uppercase tracking-tight truncate leading-tight mb-1">
                                {{ app.candidate?.name }} {{ app.candidate?.surname }}
                            </h3>
                            <div class="text-[11px] font-bold text-gray-400 uppercase tracking-widest flex items-center gap-2">
                                <svg class="w-3 h-3 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" /></svg>
                                {{ getPositionTitle(app.project) }}
                            </div>
                            <div v-if="app.candidate?.phone" class="text-[11px] font-bold text-gray-400 uppercase tracking-widest flex items-center gap-2 mt-1">
                                <svg class="w-3 h-3 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" /></svg>
                                {{ app.candidate.phone }}
                            </div>
                        </div>
                    </div>

                    <!-- Files Section -->
                    <div class="bg-gray-50 rounded-2xl p-4 flex flex-wrap gap-3 mb-6">
                        <!-- CV -->
                        <div class="flex items-center gap-2 mr-4">
                            <span class="text-[9px] font-black text-gray-400 uppercase tracking-widest">{{ __('translate.cv') }}:</span>
                            <div class="flex gap-2">
                                <button v-if="app.first_cv_url" @click="downloadFile(app.first_cv_url)" class="px-3 py-1.5 bg-white border border-blue-100 text-blue-600 text-[9px] font-black uppercase tracking-widest rounded-lg hover:bg-blue-600 hover:text-white transition-all shadow-sm">PDF</button>
                                <button v-else-if="app.upload_cv_url" @click="downloadFile(app.upload_cv_url)" class="px-3 py-1.5 bg-white border border-green-100 text-green-600 text-[9px] font-black uppercase tracking-widest rounded-lg hover:bg-green-600 hover:text-white transition-all shadow-sm">UPLOAD</button>
                                <button v-else-if="app.pathCv" @click="downloadFile(app.pathCv)" class="px-3 py-1.5 bg-white border border-gray-100 text-gray-600 text-[9px] font-black uppercase tracking-widest rounded-lg hover:bg-gray-600 hover:text-white transition-all shadow-sm">FILE</button>
                                <span v-else class="text-[9px] font-bold text-gray-300 uppercase tracking-widest italic">{{ __('translate.noFiles') }}</span>
                            </div>
                        </div>

                        <!-- Variants -->
                        <div v-if="app.cv_audio?.file_path || app.cv_video?.file_path" class="flex items-center gap-2">
                            <span class="text-[9px] font-black text-gray-400 uppercase tracking-widest">{{ __('translate.variants') }}:</span>
                            <div class="flex gap-2">
                                <a v-if="app.cv_audio?.file_path" :href="route('cv_audio.download', app.id)" class="px-3 py-1.5 bg-white border border-purple-100 text-purple-600 text-[9px] font-black uppercase tracking-widest rounded-lg hover:bg-purple-600 hover:text-white transition-all shadow-sm">AUDIO</a>
                                <a v-if="app.cv_video?.file_path" :href="route('cv_audio.download', app.id)" class="px-3 py-1.5 bg-white border border-orange-100 text-orange-600 text-[9px] font-black uppercase tracking-widest rounded-lg hover:bg-orange-600 hover:text-white transition-all shadow-sm">VIDEO</a>
                            </div>
                        </div>
                    </div>

                    <!-- Actions -->
                    <div class="flex items-center justify-between pt-4 border-t border-gray-50 gap-4">
                        <div class="flex items-center gap-2">
                             <div class="h-2 w-2 rounded-full" :class="app.status === 'yes' ? 'bg-green-500' : (app.status === 'no' ? 'bg-red-500' : 'bg-gray-300')"></div>
                             <span class="text-[10px] font-black text-gray-400 uppercase tracking-widest">
                                 {{ app.status === 'yes' ? 'Zaakceptowano' : (app.status === 'no' ? 'Odrzucono' : 'Oczekiwanie') }}
                             </span>
                        </div>
                        <div class="flex gap-3">
                            <Link
                                v-if="app.status != 'yes'"
                                method="post"
                                :href="route('external.answer')"
                                :data="{ application: app.id, decision: 'yes' }"
                                class="px-6 py-2.5 bg-green-50 text-green-600 text-[10px] font-black uppercase tracking-[0.2em] rounded-xl hover:bg-green-600 hover:text-white transition-all"
                            >
                                Tak
                            </Link>
                            <Link
                                v-if="app.status != 'no'"
                                method="post"
                                :href="route('external.answer')"
                                :data="{ application: app.id, decision: 'no' }"
                                class="px-6 py-2.5 bg-red-50 text-red-600 text-[10px] font-black uppercase tracking-[0.2em] rounded-xl hover:bg-red-600 hover:text-white transition-all"
                            >
                                Nie
                            </Link>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Empty State -->
            <div v-else class="bg-white rounded-[3rem] p-20 text-center shadow-xl shadow-blue-900/5 border border-gray-100 max-w-2xl mx-auto">
                <div class="w-20 h-20 bg-gray-50 rounded-full flex items-center justify-center mx-auto mb-6 text-gray-200">
                    <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path></svg>
                </div>
                <p class="text-xs font-black text-gray-400 uppercase tracking-widest">{{ __('translate.noAplications') }}</p>
            </div>
        </div>
    </div>
</template>

