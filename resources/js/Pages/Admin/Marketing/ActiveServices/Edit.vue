<script setup>
import AppLayout from "@/Layouts/AppLayout.vue";
import { Link, useForm } from "@inertiajs/vue3";
import { computed } from "vue";

const props = defineProps({
    activeService: Object,
});

const today = new Date().toISOString().split('T')[0];

const form = useForm({
    start: props.activeService.start || "",
    end: props.activeService.end || "",
    qty: props.activeService.qty || 0,
});

const isArticle = computed(() => props.activeService.product_name.toLowerCase().includes('artykuł'));
const isPoints = computed(() => props.activeService.product_type === 'Points');

const submit = () => {
    form.post(route("admin.active-services.update", props.activeService.id));
};
</script>

<template>
    <AppLayout title="Edytuj aktywną usługę">
        <div class="py-12 bg-gray-50/50 min-h-screen px-2 sm:px-0">
            <div class="max-w-[1200px] mx-auto sm:px-6 lg:px-8">
                <div class="bg-white rounded-[3rem] shadow-xl shadow-blue-900/5 border border-gray-100 p-10">
                    <div class="flex items-center justify-between mb-10">
                        <div>
                            <h3 class="text-2xl font-black text-[#0A2C5C] uppercase tracking-tight">Edytuj aktywną usługę</h3>
                            <p class="text-gray-400 text-[10px] font-bold uppercase tracking-widest mt-2">
                                {{ activeService.product_name }} - {{ activeService.user_name }}
                            </p>
                        </div>
                        <Link
                            :href="route('admin.active-services.index')"
                            class="px-6 py-3 bg-gray-100 text-gray-500 text-[10px] font-black uppercase tracking-widest rounded-xl hover:bg-gray-200 transition-all"
                        >
                            Powrót
                        </Link>
                    </div>

                    <form @submit.prevent="submit" class="space-y-8">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                            <!-- Start Date -->
                            <div class="space-y-2" v-if="!isArticle && !isPoints">
                                <label class="text-[10px] font-black text-[#00a0e3] uppercase tracking-[0.2em] ml-4">Data rozpoczęcia</label>
                                <input
                                    v-model="form.start"
                                    type="date"
                                    :min="today"
                                    class="w-full px-6 py-4 bg-gray-50 border-none rounded-2xl text-[#0A2C5C] font-bold focus:ring-2 focus:ring-[#00a0e3] transition-all"
                                />
                                <div v-if="form.errors.start" class="text-red-500 text-[10px] font-bold uppercase mt-1 ml-4">{{ form.errors.start }}</div>
                            </div>

                            <!-- End Date -->
                            <div class="space-y-2" v-if="!isArticle && !isPoints">
                                <label class="text-[10px] font-black text-[#00a0e3] uppercase tracking-[0.2em] ml-4">Data zakończenia</label>
                                <input
                                    v-model="form.end"
                                    type="date"
                                    :min="form.start || today"
                                    class="w-full px-6 py-4 bg-gray-50 border-none rounded-2xl text-[#0A2C5C] font-bold focus:ring-2 focus:ring-[#00a0e3] transition-all"
                                />
                                <div v-if="form.errors.end" class="text-red-500 text-[10px] font-bold uppercase mt-1 ml-4">{{ form.errors.end }}</div>
                            </div>

                            <!-- Qty (Articles, Points etc) -->
                            <div v-if="isArticle || isPoints" class="space-y-2">
                                <label class="text-[10px] font-black text-[#00a0e3] uppercase tracking-[0.2em] ml-4">Ilość</label>
                                <input
                                    v-model="form.qty"
                                    type="number"
                                    class="w-full px-6 py-4 bg-gray-50 border-none rounded-2xl text-[#0A2C5C] font-bold focus:ring-2 focus:ring-[#00a0e3] transition-all"
                                />
                                <div v-if="form.errors.qty" class="text-red-500 text-[10px] font-bold uppercase mt-1 ml-4">{{ form.errors.qty }}</div>
                            </div>
                        </div>

                        <div class="flex justify-end pt-6">
                            <button
                                type="submit"
                                :disabled="form.processing"
                                class="px-10 py-4 bg-[#00a0e3] text-white text-[10px] font-black uppercase tracking-[0.2em] rounded-2xl shadow-lg shadow-blue-500/20 hover:scale-105 active:scale-95 transition-all disabled:opacity-50"
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
