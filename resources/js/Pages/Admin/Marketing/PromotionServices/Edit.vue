<script setup>
import AppLayout from "@/Layouts/AppLayout.vue";
import { Link, useForm } from "@inertiajs/vue3";
import InputLabel from "@/Components/InputLabel.vue";
import TextInput from "@/Components/TextInput.vue";
import InputError from "@/Components/InputError.vue";
import PrimaryButton from "@/Components/PrimaryButton.vue";
import { ref } from "vue";

const props = defineProps({
    promotion_service: Object,
    langs: Array,
});

const showOtherLangs = ref(false);

const initialName = {};
props.langs.forEach((lang) => {
    initialName[lang] = props.promotion_service.name[lang] || "";
});

const form = useForm({
    name: initialName,
    price: props.promotion_service.price || 0,
    active: props.promotion_service.active ?? true,
});

const submit = () => {
    // Filter out empty names (except 'pl') before submitting
    const filteredName = {};
    Object.keys(form.name).forEach((lang) => {
        if (lang === 'pl' || (form.name[lang] && form.name[lang].trim() !== '')) {
            filteredName[lang] = form.name[lang];
        }
    });

    form.transform((data) => ({
        ...data,
        name: filteredName,
    })).put(route("admin.promotion-services.update", props.promotion_service.id), {
        onSuccess: () => form.reset(),
    });
};
</script>

<template>
    <AppLayout title="Edytuj usługę promocyjną">
        <div class="py-12 bg-gray-50/50 min-h-screen">
            <div class="max-w-[1300px] mx-auto sm:px-6 lg:px-8">
                <!-- Header Card -->
                <div class="bg-white rounded-[3rem] shadow-xl shadow-blue-900/5 border border-gray-100 p-10 mb-8 text-center">
                    <h3 class="text-2xl font-black text-[#0A2C5C] uppercase tracking-tight">Edytuj usługę promocyjną</h3>
                    <p class="text-gray-400 text-[10px] font-black uppercase tracking-[0.2em] mt-2">Zarządzaj parametrami usługi</p>
                </div>

                <!-- Form Card -->
                <div class="bg-white rounded-[3rem] shadow-xl shadow-blue-900/5 border border-gray-100 p-10">
                    <form @submit.prevent="submit" class="space-y-8">
                        <div class="space-y-8">
                            <!-- Polish Name (Main) -->
                            <div class="space-y-3">
                                <InputLabel for="name_pl" value="Nazwa (PL) - Główna" class="text-[10px] font-black text-[#00a0e3] uppercase tracking-[0.2em] ml-4" />
                                <TextInput
                                    id="name_pl"
                                    v-model="form.name['pl']"
                                    type="text"
                                    class="w-full !rounded-2xl border-gray-100 bg-gray-50/50 focus:border-[#00a0e3] focus:ring-0 text-sm font-bold text-[#0A2C5C] px-6 py-4 transition-all"
                                    required
                                />
                                <InputError :message="form.errors['name.pl']" class="ml-4" />
                            </div>

                            <!-- Other Languages Toggle -->
                            <div class="pt-4">
                                <button
                                    type="button"
                                    @click="showOtherLangs = !showOtherLangs"
                                    class="flex items-center gap-2 px-6 py-3 text-[10px] font-black text-[#0A2C5C] uppercase tracking-[0.2em] bg-gray-100 rounded-xl hover:bg-gray-200 transition-all"
                                >
                                    <span>{{ showOtherLangs ? 'Ukryj pozostałe języki' : 'Pokaż pozostałe języki' }}</span>
                                    <span v-if="Object.keys(form.errors).some(key => key.startsWith('name.') && key !== 'name.pl')" class="flex h-5 w-5 items-center justify-center rounded-full bg-red-500 text-[10px] text-white animate-pulse">
                                        !
                                    </span>
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        class="h-3 w-3 transition-transform duration-300"
                                        :class="{ 'rotate-180': showOtherLangs }"
                                        fill="none"
                                        viewBox="0 0 24 24"
                                        stroke="currentColor"
                                    >
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M19 9l-7 7-7-7" />
                                    </svg>
                                </button>
                            </div>

                            <!-- Other Languages Grid -->
                            <transition
                                enter-active-class="transition duration-300 ease-out"
                                enter-from-class="transform scale-95 opacity-0"
                                enter-to-class="transform scale-100 opacity-100"
                                leave-active-class="transition duration-200 ease-in"
                                leave-from-class="transform scale-100 opacity-100"
                                leave-to-class="transform scale-95 opacity-0"
                            >
                                <div v-if="showOtherLangs" class="grid grid-cols-1 md:grid-cols-2 gap-8 pt-4">
                                    <template v-for="lang in langs">
                                        <div v-if="lang !== 'pl'" :key="lang" class="space-y-3">
                                            <InputLabel :for="'name_' + lang" :value="'Nazwa (' + lang.toUpperCase() + ')'" class="text-[10px] font-black text-[#00a0e3] uppercase tracking-[0.2em] ml-4" />
                                            <TextInput
                                                :id="'name_' + lang"
                                                v-model="form.name[lang]"
                                                type="text"
                                                class="w-full !rounded-2xl border-gray-100 bg-gray-50/50 focus:border-[#00a0e3] focus:ring-0 text-sm font-bold text-[#0A2C5C] px-6 py-4 transition-all"
                                            />
                                            <InputError :message="form.errors['name.' + lang]" class="ml-4" />
                                        </div>
                                    </template>
                                </div>
                            </transition>
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                            <!-- Koszt (punkty) -->
                            <div class="space-y-3">
                                <InputLabel for="price" value="Koszt (punkty)" class="text-[10px] font-black text-[#00a0e3] uppercase tracking-[0.2em] ml-4" />
                                <TextInput
                                    id="price"
                                    v-model="form.price"
                                    type="number"
                                    step="1"
                                    class="w-full !rounded-2xl border-gray-100 bg-gray-50/50 focus:border-[#00a0e3] focus:ring-0 text-sm font-bold text-[#0A2C5C] px-6 py-4 transition-all"
                                    required
                                />
                                <InputError :message="form.errors.price" class="ml-4" />
                            </div>

                            <!-- Status -->
                            <div class="space-y-3">
                                <InputLabel value="Status usługi" class="text-[10px] font-black text-[#00a0e3] uppercase tracking-[0.2em] ml-4 mb-4" />
                                <div class="flex items-center gap-4 ml-4">
                                    <button
                                        type="button"
                                        @click="form.active = !form.active"
                                        class="relative inline-flex h-6 w-11 flex-shrink-0 cursor-pointer rounded-full border-2 border-transparent transition-colors duration-200 ease-in-out focus:outline-none"
                                        :class="form.active ? 'bg-[#00a0e3]' : 'bg-gray-200'"
                                    >
                                        <span
                                            class="pointer-events-none inline-block h-5 w-5 transform rounded-full bg-white shadow ring-0 transition duration-200 ease-in-out"
                                            :class="form.active ? 'translate-x-5' : 'translate-x-0'"
                                        ></span>
                                    </button>
                                    <span class="text-sm font-bold text-[#0A2C5C] uppercase tracking-wider">
                                        {{ form.active ? 'Aktywna' : 'Nieaktywna' }}
                                    </span>
                                </div>
                                <InputError :message="form.errors.active" class="ml-4" />
                            </div>
                        </div>

                        <!-- Actions -->
                        <div class="flex items-center justify-end gap-4 pt-8 border-t border-gray-50">
                            <Link
                                :href="route('admin.promotion-services.index')"
                                class="px-8 py-4 text-[10px] font-black text-gray-400 uppercase tracking-[0.2em] hover:text-[#0A2C5C] transition-colors"
                            >
                                Anuluj
                            </Link>
                            <button
                                type="submit"
                                :disabled="form.processing"
                                class="px-10 py-4 bg-[#0A2C5C] text-white text-[10px] font-black uppercase tracking-[0.2em] rounded-2xl hover:bg-blue-900 shadow-lg shadow-blue-900/20 transition-all disabled:opacity-50"
                            >
                                Zapisz zmiany
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </AppLayout>
</template>
