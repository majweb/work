<script setup>
import { ref, computed } from 'vue';
import { useForm } from '@inertiajs/vue3';
import FrontLayout from "@/Layouts/FrontLayout.vue";
import InputLabel from "@/Components/InputLabel.vue";
import TextInput from "@/Components/TextInput.vue";
import InputError from "@/Components/InputError.vue";
import PrimaryButton from "@/Components/PrimaryButton.vue";
import Checkbox from "@/Components/Checkbox.vue";

const props = defineProps({
    page: Object,
    langs: Array
});

const form = useForm({
    scope: '',
    signaling_entity: null,
    email: '',
    name: '',
    company_name: '',
    links: '',
    details: '',
    legal_provision: '',
    additional_info: '',
    declaration: false,
});

const submit = () => {
    form.post(route('front.owner.post'), {
        preserveScroll: true,
        onSuccess: () => form.reset(),
    });
};

</script>

<template>
    <FrontLayout
        :title="props.page.title"
        :image="props.page.image"
        :keywords="props.page.keywords"
        :description="props.page.description"
        :url="route('front.owner')"
        type="website"
    >
        <div class="py-24 bg-gray-50/50 dark:bg-gray-900/50 min-h-screen relative overflow-hidden">
            <!-- Background Decorations -->
            <div class="absolute top-0 right-0 w-[500px] h-[500px] bg-blue-100/30 dark:bg-blue-900/10 rounded-full -mr-64 -mt-64 blur-3xl"></div>
            <div class="absolute bottom-0 left-0 w-[400px] h-[400px] bg-red-50/20 dark:bg-red-900/10 rounded-full -ml-48 -mb-48 blur-3xl"></div>

            <div class="max-w-7xl mx-auto px-6 relative z-10">
                <!-- Header Section -->
                <div class="text-center mb-12">
                    <div class="inline-flex items-center gap-2 px-4 py-2 bg-white dark:bg-gray-800 rounded-full shadow-sm border border-gray-100 dark:border-gray-700 mb-8">
                        <span class="relative flex h-2 w-2">
                            <span class="relative inline-flex rounded-full h-2 w-2 bg-blue-500"></span>
                        </span>
                        <span class="text-[10px] font-black text-[#0A2C5C] dark:text-blue-400 uppercase tracking-[0.2em]">{{ __('translate.footer.documentation') }}</span>
                    </div>
                    <h1 class="text-4xl md:text-5xl font-black text-[#0A2C5C] dark:text-white leading-tight uppercase tracking-tighter mb-8">
                        {{ __('illegalForm.form_header') }}
                    </h1>
                </div>

                <!-- Content Card -->
                <div class="bg-white dark:bg-gray-800 rounded-[2.5rem] shadow-xl shadow-blue-900/5 p-8 md:p-12 border border-gray-100 dark:border-gray-700">
                    <div class="prose prose-blue dark:prose-invert max-w-none text-gray-600 dark:text-gray-300 leading-relaxed mb-12">
                        <section class="mb-10 animate-fadeIn" v-html="props.page.content"></section>
                    </div>

                    <h2 class="text-center text-2xl font-black text-[#0A2C5C] dark:text-white uppercase tracking-tighter mb-8">
                        {{ __('illegalForm.submit_button') }}
                    </h2>

                    <form @submit.prevent="submit" class="space-y-10 w-full">
                        <!-- Zakres zgłoszenia -->
                        <div class="space-y-4">
                            <label class="block text-[10px] font-black text-gray-400 dark:text-gray-500 uppercase tracking-widest ml-2">{{ __('illegalForm.scope_label') }}</label>
                            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                                <label v-for="(label, key) in {
                                    'illegal': __('illegalForm.scope_options.illegal'),
                                    'copyright': __('illegalForm.scope_options.copyright'),
                                    'other': __('illegalForm.scope_options.other')
                                }" :key="key"
                                       class="relative flex flex-col items-center justify-center p-4 border-2 rounded-2xl cursor-pointer transition-all duration-300 min-h-[80px] text-center"
                                       :class="form.scope === key ? 'border-blue-500 bg-blue-50/30 dark:bg-blue-900/20' : 'border-gray-100 dark:border-gray-700 bg-gray-50 dark:bg-gray-900/50 hover:bg-gray-100 dark:hover:bg-gray-800'">
                                    <input type="radio" v-model="form.scope" :value="key" class="sr-only" />
                                    <span class="text-[10px] font-black uppercase tracking-widest leading-tight"
                                          :class="form.scope === key ? 'text-blue-600 dark:text-blue-400' : 'text-gray-400 dark:text-gray-500'">
                                        {{ label }}
                                    </span>
                                    <div v-if="form.scope === key" class="absolute -top-2 -right-2 bg-blue-500 text-white rounded-full p-1 shadow-md">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                                        </svg>
                                    </div>
                                </label>
                            </div>
                            <InputError :message="form.errors.scope" class="mt-2" />
                        </div>

                        <!-- Podmiot sygnalizujący -->
                        <div class="space-y-4">
                            <label class="block text-[10px] font-black text-gray-400 dark:text-gray-500 uppercase tracking-widest ml-2 leading-relaxed">
                                {{ __('illegalForm.signaling_entity_label') }}
                            </label>
                            <div class="grid grid-cols-2 gap-4 max-w-md">
                                <label v-for="(val, key) in { 'TAK': true, 'NIE': false }" :key="key"
                                       class="relative flex flex-col items-center justify-center p-4 border-2 rounded-2xl cursor-pointer transition-all duration-300"
                                       :class="form.signaling_entity === val ? 'border-blue-500 bg-blue-50/30 dark:bg-blue-900/20' : 'border-gray-100 dark:border-gray-700 bg-gray-50 dark:bg-gray-900/50 hover:bg-gray-100 dark:hover:bg-gray-800'">
                                    <input type="radio" v-model="form.signaling_entity" :value="val" class="sr-only" />
                                    <span class="text-[10px] font-black uppercase tracking-widest"
                                          :class="form.signaling_entity === val ? 'text-blue-600 dark:text-blue-400' : 'text-gray-400 dark:text-gray-500'">
                                        {{ key === 'TAK' ? __('illegalForm.signaling_entity_yes') : __('illegalForm.signaling_entity_no') }}
                                    </span>
                                    <div v-if="form.signaling_entity === val" class="absolute -top-2 -right-2 bg-blue-500 text-white rounded-full p-1 shadow-md">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                                        </svg>
                                    </div>
                                </label>
                            </div>
                            <InputError :message="form.errors.signaling_entity" class="mt-2" />
                        </div>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label class="block text-[10px] font-black text-gray-400 dark:text-gray-500 uppercase tracking-widest ml-2 mb-1">{{ __('illegalForm.email_label') }}</label>
                                <TextInput id="email" v-model="form.email" type="email" class="mt-1 block w-full" :placeholder="__('illegalForm.email_placeholder')" />
                                <InputError :message="form.errors.email" class="mt-2" />
                            </div>
                            <div>
                                <label class="block text-[10px] font-black text-gray-400 dark:text-gray-500 uppercase tracking-widest ml-2 mb-1">{{ __('illegalForm.name_label') }}</label>
                                <TextInput id="name" v-model="form.name" type="text" class="mt-1 block w-full" :placeholder="__('illegalForm.name_placeholder')" />
                                <InputError :message="form.errors.name" class="mt-2" />
                            </div>
                        </div>

                        <div>
                            <label class="block text-[10px] font-black text-gray-400 dark:text-gray-500 uppercase tracking-widest ml-2 mb-1">{{ __('illegalForm.company_name_label') }}</label>
                            <TextInput id="company_name" v-model="form.company_name" type="text" class="mt-1 block w-full" :placeholder="__('illegalForm.company_name_placeholder')" />
                            <InputError :message="form.errors.company_name" class="mt-2" />
                        </div>

                        <div>
                            <label class="block text-[10px] font-black text-gray-400 dark:text-gray-500 uppercase tracking-widest ml-2 mb-1">{{ __('illegalForm.links_label') }}</label>
                            <textarea id="links" v-model="form.links" rows="3" class="mt-1 block w-full border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-blue-500 dark:focus:border-blue-600 focus:ring-blue-500 dark:focus:ring-blue-600 rounded-2xl shadow-sm transition-all" :placeholder="__('illegalForm.links_placeholder')"></textarea>
                            <InputError :message="form.errors.links" class="mt-2" />
                        </div>

                        <div>
                            <label class="block text-[10px] font-black text-gray-400 dark:text-gray-500 uppercase tracking-widest ml-2 mb-1">{{ __('illegalForm.details_label') }}</label>
                            <textarea id="details" v-model="form.details" rows="5" class="mt-1 block w-full border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-blue-500 dark:focus:border-blue-600 focus:ring-blue-500 dark:focus:ring-blue-600 rounded-2xl shadow-sm transition-all" :placeholder="__('illegalForm.details_placeholder')"></textarea>
                            <InputError :message="form.errors.details" class="mt-2" />
                        </div>
                        <div>
                            <label class="block text-[10px] font-black text-gray-400 dark:text-gray-500 uppercase tracking-widest ml-2 mb-1">{{ __('illegalForm.legal_provision_label') }}</label>
                            <TextInput id="legal_provision" v-model="form.legal_provision" type="text" class="mt-1 block w-full" :placeholder="__('illegalForm.legal_provision_placeholder')" />
                            <InputError :message="form.errors.legal_provision" class="mt-2" />
                        </div>

                        <div>
                            <label class="block text-[10px] font-black text-gray-400 dark:text-gray-500 uppercase tracking-widest ml-2 mb-1">{{ __('illegalForm.additional_info_label') }}</label>
                            <textarea id="additional_info" v-model="form.additional_info" rows="3" class="mt-1 block w-full border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-blue-500 dark:focus:border-blue-600 focus:ring-blue-500 dark:focus:ring-blue-600 rounded-2xl shadow-sm transition-all"></textarea>
                            <InputError :message="form.errors.additional_info" class="mt-2" />
                        </div>

                        <div class="flex flex-col gap-2">
                            <label class="flex items-center gap-3 cursor-pointer group">
                                <Checkbox v-model:checked="form.declaration" class="mt-1" />
                                <span class="text-xs text-gray-500 dark:text-gray-400 group-hover:text-gray-700 dark:group-hover:text-gray-300 transition-colors">
                                    {{ __('illegalForm.declaration_label') }}
                                </span>
                            </label>
                            <InputError :message="form.errors.declaration" />
                        </div>

                        <div class="flex justify-center pt-6">
                            <PrimaryButton :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
                                <svg v-if="form.processing" class="animate-spin -ml-1 mr-3 h-4 w-4 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                    <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                                    <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                                </svg>
                                {{ __('illegalForm.submit_button') }}
                            </PrimaryButton>
                        </div>
                    </form>
                </div>

                <!-- Footer Note -->
                <div class="mt-12 text-center text-gray-400 dark:text-gray-500 text-[10px] uppercase tracking-widest font-medium">
                    © 2026 {{ __('translate.footer.rights') }}
                </div>
            </div>
        </div>
    </FrontLayout>
</template>

<style scoped>
.animate-fadeIn {
    animation: fadeIn 0.4s ease-out;
}
@keyframes fadeIn {
    from { opacity: 0; transform: translateY(10px); }
    to { opacity: 1; transform: translateY(0); }
}
</style>
