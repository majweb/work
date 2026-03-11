<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import { useForm, Link } from '@inertiajs/vue3';
import { computed } from 'vue';
import InputLabel from '@/Components/InputLabel.vue';
import TextInput from '@/Components/TextInput.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';

const props = defineProps({
    language: Object,
    availableLocales: Array,
});

const form = useForm({
    labels: props.language.labels,
});

const sortedLocales = computed(() => {
    const locales = [...props.availableLocales];
    const priority = ['pl', 'en'];
    return locales.sort((a, b) => {
        const aIndex = priority.indexOf(a);
        const bIndex = priority.indexOf(b);
        if (aIndex !== -1 && bIndex !== -1) return aIndex - bIndex;
        if (aIndex !== -1) return -1;
        if (bIndex !== -1) return 1;
        return a.localeCompare(b);
    });
});

const submit = () => {
    form.put(route('admin.languages.update', props.language.value));
};
</script>

<template>
    <AppLayout title="Edytuj język">
        <div class="py-12 bg-gray-50/50 min-h-screen">
            <div class="max-w-[1600px] mx-auto sm:px-6 lg:px-8">
                <!-- Header Section -->
                <div class="bg-white rounded-[3rem] shadow-xl shadow-blue-900/5 border border-gray-100 p-10 mb-8">
                    <div class="flex flex-col md:flex-row md:items-center justify-between gap-8">
                        <div>
                            <h3 class="text-2xl font-black text-[#0A2C5C] uppercase tracking-tight">Edytuj język: {{ language.code }}</h3>
                            <p class="text-[10px] font-bold text-gray-400 uppercase tracking-widest mt-1">
                                Zaktualizuj nazwy języka w różnych tłumaczeniach. Języki te są wykorzystywane przy generowaniu szablonu CV podczas aplikacji.
                            </p>
                        </div>
                        <Link
                            :href="route('admin.languages.index')"
                            class="px-8 py-4 bg-gray-100 hover:bg-gray-200 text-gray-600 rounded-2xl font-black text-xs uppercase tracking-widest transition-all active:scale-95 flex items-center gap-2"
                        >
                            Powrót
                        </Link>
                    </div>
                </div>

                <div class="bg-white rounded-[3rem] shadow-xl shadow-blue-900/5 border border-gray-100 p-10">
                    <form @submit.prevent="submit" class="space-y-8">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                            <!-- Basic Info -->
                            <div class="space-y-6">
                                <div class="p-8 bg-blue-50/50 rounded-[2rem] border border-blue-100/50 space-y-6">
                                    <h4 class="text-sm font-black text-[#0A2C5C] uppercase tracking-widest flex items-center gap-3">
                                        <span class="w-8 h-8 bg-[#00AEEF] text-white rounded-xl flex items-center justify-center text-xs">01</span>
                                        Podstawowe informacje
                                    </h4>

                                    <div class="space-y-4">
                                        <div>
                                            <InputLabel value="Kod języka" class="text-[10px] font-black uppercase tracking-widest text-gray-400 mb-2 ml-1" />
                                            <div class="block w-full bg-white border-none rounded-2xl py-4 px-6 shadow-sm text-[#0A2C5C] font-black uppercase tracking-widest">
                                                {{ language.code }} ({{ language.value }})
                                            </div>
                                            <p class="mt-2 text-[9px] text-gray-400 font-bold uppercase tracking-widest ml-1 italic">Kodu języka nie można zmienić po utworzeniu.</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="p-8 bg-blue-50/50 rounded-[2rem] border border-blue-100/50">
                                    <div class="flex items-center justify-between mb-8">
                                        <h4 class="text-sm font-black text-[#0A2C5C] uppercase tracking-widest flex items-center gap-3">
                                            <span class="w-8 h-8 bg-indigo-500 text-white rounded-xl flex items-center justify-center text-xs">02</span>
                                            Zapisz zmiany
                                        </h4>
                                    </div>

                                    <div class="flex items-center gap-4">
                                        <PrimaryButton
                                            class="!px-10 !py-5 !bg-[#0A2C5C] hover:!bg-[#0d3b7a] !rounded-2xl !text-xs !font-black !uppercase !tracking-widest !transition-all active:!scale-95 shadow-xl shadow-blue-900/20 flex-1 justify-center"
                                            :class="{ 'opacity-25': form.processing }"
                                            :disabled="form.processing"
                                        >
                                            Zaktualizuj język
                                        </PrimaryButton>
                                    </div>
                                </div>
                            </div>

                            <!-- Translations -->
                            <div class="space-y-6">
                                <div class="p-8 bg-gray-50 rounded-[2rem] border border-gray-100 space-y-8">
                                    <h4 class="text-sm font-black text-[#0A2C5C] uppercase tracking-widest flex items-center gap-3">
                                        <span class="w-8 h-8 bg-green-500 text-white rounded-xl flex items-center justify-center text-xs">03</span>
                                        Nazwy języka w różnych tłumaczeniach
                                    </h4>

                                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 max-h-[600px] overflow-y-auto pr-4 custom-scrollbar">
                                        <div v-for="locale in sortedLocales" :key="locale" class="space-y-2">
                                            <div class="flex items-center justify-between px-1">
                                                <InputLabel :for="'label_' + locale" class="text-[9px] font-black uppercase tracking-widest text-gray-400">
                                                    W języku: {{ locale.toUpperCase() }} <span class="text-red-500">*</span>
                                                </InputLabel>
                                            </div>
                                            <TextInput
                                                :id="'label_' + locale"
                                                v-model="form.labels[locale]"
                                                type="text"
                                                class="block w-full !bg-white !border-none !rounded-xl !py-3 !text-sm shadow-sm focus:ring-2 focus:ring-blue-500/10 transition-all font-medium"
                                                :class="{ '!ring-2 !ring-red-500/20': form.errors['labels.' + locale] }"
                                                :placeholder="'Nazwa po ' + locale.toUpperCase()"
                                            />
                                            <div v-if="form.errors['labels.' + locale]" class="mt-1 text-[9px] font-bold text-red-500 uppercase tracking-wider ml-1">
                                                To pole jest wymagane
                                            </div>
                                        </div>
                                    </div>

                                    <div v-if="form.errors.labels" class="mt-4 p-4 bg-red-50 rounded-xl border border-red-100 text-xs font-bold text-red-500 uppercase tracking-wider">
                                        {{ form.errors.labels }}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </AppLayout>
</template>

<style scoped>
.custom-scrollbar::-webkit-scrollbar {
    width: 4px;
}
.custom-scrollbar::-webkit-scrollbar-track {
    background: transparent;
}
.custom-scrollbar::-webkit-scrollbar-thumb {
    background: rgba(0, 0, 0, 0.05);
    border-radius: 10px;
}
.custom-scrollbar::-webkit-scrollbar-thumb:hover {
    background: rgba(0, 0, 0, 0.1);
}
</style>
