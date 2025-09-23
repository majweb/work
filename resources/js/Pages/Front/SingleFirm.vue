
<script setup>
import FrontLayout from "@/Layouts/FrontLayout.vue";
import {Link} from "@inertiajs/vue3";
import __ from "@/lang";

const props = defineProps({
    firm: Object
})
</script>

<template>
    <FrontLayout :title="__('translate.firm')">
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg">
                    <div class="flex flex-col gap-4 p-6">
                        <Link :href="route('front.firms')" class="inline-flex items-center bg-blue-200 hover:bg-blue-300 px-4 py-2 rounded-md transition-colors">
                            <span class="mr-2">←</span> {{ __('translate.backToList') }}
                        </Link>

                        <!-- Logo i podstawowe informacje -->
                        <div class="flex items-start gap-6">
                            <div v-if="props.firm?.logo" class="w-32 h-32">
                                <img :src="props.firm.logo" :alt="props.firm.name" class="w-full h-full object-contain rounded-lg">
                            </div>

                            <div class="flex-1">
                                <h1 class="text-2xl font-bold mb-2">{{ props.firm?.company_name || props.firm.name }}</h1>
                                <div class="text-gray-600 dark:text-gray-300 grid grid-cols-1 md:grid-cols-2 gap-4">
                                    <p v-if="props.firm.nip"><strong>NIP:</strong> {{ props.firm.nip }}</p>
                                    <p v-if="props.firm.regon"><strong>REGON:</strong> {{ props.firm.regon }}</p>
                                    <p v-if="props.firm.count_workers"><strong>{{ __('translate.employeesCount') }}:</strong> {{ props.firm.count_workers }}</p>
                                    <p v-if="props.firm.annual_turnover"><strong>{{ __('translate.annualTurnover') }}:</strong> {{ props.firm.annual_turnover }}</p>
                                    <p v-if="props.firm.website" class="col-span-2">
                                        <strong>{{ __('translate.website') }}:</strong>
                                        <a :href="props.firm.website" target="_blank" class="text-blue-600 hover:underline">
                                            {{ props.firm.website }}
                                        </a>
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- Dane kontaktowe -->
                        <div class="mt-6">
                            <h2 class="text-xl font-semibold mb-3">{{ __('translate.contactDetails') }}</h2>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                <div v-if="props.firm.email">
                                    <strong>{{ __('translate.email') }}:</strong>
                                    <p>{{ props.firm.email }}</p>
                                </div>
                                <div v-if="props.firm.phone">
                                    <strong>{{ __('translate.phone') }}:</strong>
                                    <div v-for="phone in props.firm.phone">
                                        <p>{{ phone.desc }}</p>
                                        <p>{{ phone.phone }}</p>
                                    </div>
                                </div>
                                <div v-if="props.firm.street || props.firm.number || props.firm.city || props.firm.postal || props.firm.country">
                                    <strong>{{ __('translate.address') }}:</strong>
                                    <p>
                                        <template v-if="props.firm.street || props.firm.number">
                                            {{ props.firm.street }} {{ props.firm.number }}<br>
                                        </template>
                                        {{ props.firm.postal }} {{ props.firm.city }}<br v-if="props.firm.city || props.firm.postal">
                                        {{ props.firm.country }}
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- Opis firmy -->
                        <div v-if="props.firm?.description" class="mt-6">
                            <h2 class="text-xl font-semibold mb-3">{{ __('translate.aboutCompany') }}</h2>
                            <div class="prose dark:prose-invert max-w-none">
                                {{ props.firm.description }}
                            </div>
                        </div>
                        <!-- Wideo o firmie -->
                        <div v-if="props.firm?.video" class="mt-6">
                            <h2 class="text-xl font-semibold mb-3">{{ __('translate.companyVideo') }}</h2>
                            <div class="w-full aspect-video">
                                <video
                                    class="w-full h-full rounded-lg"
                                    controls
                                    preload="metadata"
                                >
                                    <source :src="props.firm.video" type="video/mp4" />
                                    Twój przeglądarka nie obsługuje elementu <code>video</code>.
                                </video>
                            </div>
                        </div>

                        <!-- Social Media -->
                        <div v-if="props.firm?.social_facebook || props.firm?.social_google || props.firm?.social_x || props.firm?.social_instagram || props.firm?.social_linkedin || props.firm?.social_tiktok" class="mt-6">
                            <h2 class="text-xl font-semibold mb-3">{{ __('translate.socialMedia') }}</h2>
                            <div class="flex flex-wrap gap-4">
                                <a v-if="props.firm.social_facebook" :href="props.firm.social_facebook" target="_blank" class="p-2 bg-blue-500 text-white rounded-lg hover:bg-blue-600">Facebook</a>
                                <a v-if="props.firm.social_google" :href="props.firm.social_google" target="_blank" class="p-2 bg-red-500 text-white rounded-lg hover:bg-red-600">Google</a>
                                <a v-if="props.firm.social_x" :href="props.firm.social_x" target="_blank" class="p-2 bg-black text-white rounded-lg hover:bg-gray-800">X (Twitter)</a>
                                <a v-if="props.firm.social_instagram" :href="props.firm.social_instagram" target="_blank" class="p-2 bg-pink-500 text-white rounded-lg hover:bg-pink-600">Instagram</a>
                                <a v-if="props.firm.social_linkedin" :href="props.firm.social_linkedin" target="_blank" class="p-2 bg-blue-700 text-white rounded-lg hover:bg-blue-800">LinkedIn</a>
                                <a v-if="props.firm.social_tiktok" :href="props.firm.social_tiktok" target="_blank" class="p-2 bg-gray-800 text-white rounded-lg hover:bg-gray-900">TikTok</a>
                            </div>
                        </div>

                        <!-- Opinie -->
                        <div v-if="props.firm?.opinion_google || props.firm?.opinion_trust || props.firm?.opinion_facebook" class="mt-6">
                            <h2 class="text-xl font-semibold mb-3">{{ __('translate.reviews') }}</h2>
                            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                                <div v-if="props.firm.opinion_google" class="bg-gray-50 dark:bg-gray-700 p-4 rounded-lg">
                                    <h3 class="font-semibold text-lg mb-2 flex items-center">
                                        <span class="mr-2">Google</span>
                                        <span class="text-red-500">★</span>S
                                    </h3>
                                    <p>{{ props.firm.opinion_google }}</p>
                                </div>

                                <div v-if="props.firm.opinion_trust" class="bg-gray-50 dark:bg-gray-700 p-4 rounded-lg">
                                    <h3 class="font-semibold text-lg mb-2 flex items-center">
                                        <span class="mr-2">Trustpilot</span>
                                        <span class="text-green-500">★</span>
                                    </h3>
                                    <p>{{ props.firm.opinion_trust }}</p>
                                </div>

                                <div v-if="props.firm.opinion_facebook" class="bg-gray-50 dark:bg-gray-700 p-4 rounded-lg">
                                    <h3 class="font-semibold text-lg mb-2 flex items-center">
                                        <span class="mr-2">Facebook</span>
                                        <span class="text-blue-500">★</span>
                                    </h3>
                                    <p>{{ props.firm.opinion_facebook }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </FrontLayout>
</template>
