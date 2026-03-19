<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import { useForm } from '@inertiajs/vue3';
import InputError from '@/Components/InputError.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import Checkbox from '@/Components/Checkbox.vue';

const props = defineProps({
    integrations: Object,
});

const form = useForm({
    integrations: [
        {
            name: 'gtm_head',
            value: props.integrations.gtm_head?.value || '',
            active: props.integrations.gtm_head?.active ?? true,
        },
        {
            name: 'gtm_body',
            value: props.integrations.gtm_body?.value || '',
            active: props.integrations.gtm_body?.active ?? true,
        },
    ],
});

const submit = () => {
    form.put(route('admin.integrations.update'), {
        preserveScroll: true,
    });
};
</script>

<template>
    <AppLayout title="Integracje">
        <div class="py-12 bg-gray-50/50 min-h-screen">
            <div class="max-w-[1300px] mx-auto py-6 px-4 sm:px-6 lg:px-8">
                <!-- Header Section -->
                <div class="bg-white rounded-[3rem] shadow-xl shadow-blue-900/5 border border-gray-100 p-10 mb-8">
                    <div class="flex flex-col md:flex-row md:items-center justify-between gap-8">
                        <div>
                            <div class="flex items-center gap-4 mb-2">
                                <h3 class="text-2xl font-black text-[#0A2C5C] uppercase tracking-tight">Integracje</h3>
                            </div>
                            <p class="text-[10px] font-bold text-gray-400 uppercase tracking-widest mt-1">
                                Zarządzanie kodami śledzącymi i integracjami zewnętrznymi
                            </p>
                        </div>
                    </div>
                </div>

                <div class="bg-white rounded-[3rem] shadow-xl shadow-blue-900/5 border border-gray-100 p-10">
                    <form @submit.prevent="submit" class="space-y-8">
                        <!-- Google Tag Manager Head -->
                        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 items-start border-b border-gray-50 pb-8">
                            <div>
                                <label class="text-[10px] font-black text-[#0A2C5C] uppercase tracking-[0.2em] mb-2 block">Google Tag Manager (Head)</label>
                                <p class="text-[10px] text-gray-400 font-bold uppercase tracking-widest leading-relaxed mb-4">Wklej kod GTM, który powinien znaleźć się w sekcji &lt;head&gt;.</p>

                                <label class="flex items-center cursor-pointer group w-fit">
                                    <div class="relative">
                                        <Checkbox v-model:checked="form.integrations[0].active" class="sr-only" />
                                        <div :class="form.integrations[0].active ? 'bg-green-500' : 'bg-gray-200'" class="block w-14 h-8 rounded-full transition-colors duration-300"></div>
                                        <div :class="form.integrations[0].active ? 'translate-x-6' : 'translate-x-0'" class="absolute left-1 top-1 bg-white w-6 h-6 rounded-full transition-transform duration-300 shadow-sm"></div>
                                    </div>
                                    <span class="ml-4 text-[10px] font-black text-[#0A2C5C] uppercase tracking-[0.1em]">{{ form.integrations[0].active ? 'Aktywne' : 'Nieaktywne' }}</span>
                                </label>
                            </div>
                            <div class="lg:col-span-2">
                                <textarea
                                    v-model="form.integrations[0].value"
                                    rows="10"
                                    class="w-full px-6 py-4 bg-gray-50 border-none rounded-2xl focus:ring-2 focus:ring-blue-500/20 focus:bg-white transition-all text-sm font-medium shadow-inner font-mono"
                                    placeholder="<!-- Google Tag Manager --> ..."
                                ></textarea>
                                <InputError :message="form.errors['integrations.0.value']" class="mt-2" />
                                <InputError :message="form.errors['integrations.0.active']" class="mt-2" />
                            </div>
                        </div>

                        <!-- Google Tag Manager Body -->
                        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 items-start border-b border-gray-50 pb-8">
                            <div>
                                <label class="text-[10px] font-black text-[#0A2C5C] uppercase tracking-[0.2em] mb-2 block">Google Tag Manager (Body)</label>
                                <p class="text-[10px] text-gray-400 font-bold uppercase tracking-widest leading-relaxed mb-4">Wklej kod GTM, który powinien znaleźć się zaraz po otwarciu tagu &lt;body&gt;.</p>

                                <label class="flex items-center cursor-pointer group w-fit">
                                    <div class="relative">
                                        <Checkbox v-model:checked="form.integrations[1].active" class="sr-only" />
                                        <div :class="form.integrations[1].active ? 'bg-green-500' : 'bg-gray-200'" class="block w-14 h-8 rounded-full transition-colors duration-300"></div>
                                        <div :class="form.integrations[1].active ? 'translate-x-6' : 'translate-x-0'" class="absolute left-1 top-1 bg-white w-6 h-6 rounded-full transition-transform duration-300 shadow-sm"></div>
                                    </div>
                                    <span class="ml-4 text-[10px] font-black text-[#0A2C5C] uppercase tracking-[0.1em]">{{ form.integrations[1].active ? 'Aktywne' : 'Nieaktywne' }}</span>
                                </label>
                            </div>
                            <div class="lg:col-span-2">
                                <textarea
                                    v-model="form.integrations[1].value"
                                    rows="10"
                                    class="w-full px-6 py-4 bg-gray-50 border-none rounded-2xl focus:ring-2 focus:ring-blue-500/20 focus:bg-white transition-all text-sm font-medium shadow-inner font-mono"
                                    placeholder="<!-- Google Tag Manager (noscript) --> ..."
                                ></textarea>
                                <InputError :message="form.errors['integrations.1.value']" class="mt-2" />
                                <InputError :message="form.errors['integrations.1.active']" class="mt-2" />
                            </div>
                        </div>

                        <div class="flex justify-end pt-4">
                            <PrimaryButton
                                :class="{ 'opacity-25': form.processing }"
                                :disabled="form.processing"
                                class="px-12 py-5 bg-[#0A2C5C] hover:bg-[#0D356D] text-white rounded-[2rem] font-black text-[10px] uppercase tracking-[0.2em] transition-all shadow-xl shadow-blue-900/10 active:scale-95"
                            >
                                Zapisz zmiany
                            </PrimaryButton>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </AppLayout>
</template>
