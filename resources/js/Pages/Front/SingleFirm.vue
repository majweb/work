<script setup>
import FrontLayout from "@/Layouts/FrontLayout.vue";
import {Link, usePage} from "@inertiajs/vue3";
import __ from "@/lang";
import {computed, onMounted, ref} from "vue";
const props = defineProps({
    firm: Object
});

const generateUrl = computed(() => {
    if (props.firm.city && props.firm.street && props.firm.number) {
        let myUrlWithParams = new URL(`https://www.google.com/maps/embed/v1/place?key=${usePage().props.mapsApi}`);
        myUrlWithParams.searchParams.append("q", props.firm.countryJson?.allTranslations[usePage().props.language] + ' ' + props.firm.city + ' ' + props.firm.street + ' ' + props.firm.street + ' ' + props.firm.postal);
        return myUrlWithParams.toString(); // <-- TO ROZWIĄZUJE HYDRATION MISMATCH
    }
});

// Lightbox
const showLightbox = ref(false);
const currentImage = ref('');

function openLightbox(url) {
    currentImage.value = url;
    showLightbox.value = true;
}

function closeLightbox() {
    showLightbox.value = false;
}


const isClient = ref(false);
onMounted(() => {
    isClient.value = true;
});

</script>

<template>
    <FrontLayout :title="__('translate.firm')">
        <div class="min-h-screen flex items-center justify-center py-10">
            <div class="w-full max-w-4xl bg-white rounded-xl shadow-xl overflow-hidden">
                <!-- GÓRNE ZDJĘCIE + LOGO -->
                <div class="relative h-52">
                    <!-- zdjęcie w tle -->
                    <div class="w-full h-full object-cover bg-[#0b2b59]">
                        <!-- logo w kółku -->
                        <div class="relative top-[100px] inset-0 flex items-center justify-center pointer-events-none">
                            <div class="bg-white rounded-full w-40 h-40 shadow-lg border-4 border-[#0b2b59] overflow-hidden
             bg-center bg-cover"
                                 :style="`background-image: url('${firm.logo}')`"
                            >
                            </div>
                        </div>
                    </div>
                    <!-- ikony social -->
                    <div class="flex justify-end gap-2 p-2">
                        <!-- Social Media -->
                        <div
                            v-if="props.firm?.website || props.firm?.social_facebook || props.firm?.social_google || props.firm?.social_x || props.firm?.social_instagram || props.firm?.social_linkedin || props.firm?.social_tiktok">
                            <div class="flex flex-wrap gap-1">
                                <a v-if="props.firm.website" :href="props.firm.website" target="_blank"
                                   class="w-8 h-8 transition hover:scale-95">
                                    <img src="/images/icons/link.svg" alt="website">
                                </a>
                                <a v-if="props.firm.social_facebook" :href="props.firm.social_facebook" target="_blank"
                                   class="w-8 h-8 transition hover:scale-95">
                                    <img src="/images/icons/facebook.svg" alt="facebook">
                                </a>
                                <a v-if="props.firm.social_google" :href="props.firm.social_google" target="_blank"
                                   class="w-8 h-8 transition hover:scale-95">
                                    <img src="/images/icons/google.svg" alt="google">
                                </a>
                                <a v-if="props.firm.social_x" :href="props.firm.social_x" target="_blank"
                                   class="w-8 h-8 transition hover:scale-95">
                                    <img src="/images/icons/x.svg" alt="x">
                                </a>
                                <a v-if="props.firm.social_instagram" :href="props.firm.social_instagram"
                                   target="_blank" class="w-8 h-8 transition hover:scale-95">
                                    <img src="/images/icons/instagram.svg" alt="instagram">
                                </a>
                                <a v-if="props.firm.social_linkedin" :href="props.firm.social_linkedin" target="_blank"
                                   class="w-8 h-8 transition hover:scale-95">
                                    <img src="/images/icons/linkedin.svg" alt="linkedin">
                                </a>
                                <a v-if="props.firm.social_tiktok" :href="props.firm.social_tiktok" target="_blank"
                                   class="w-8 h-8 transition hover:scale-95">
                                    <img src="/images/icons/tik_tok.svg" alt="tik_tok">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- TREŚĆ -->
                <div class="px-8 pt-16 pb-8 text-slate-800">
                    <!-- tytuł -->
                    <h1 class="text-3xl font-bold text-center mb-5">
                        {{ firm.name }}
                    </h1>

                    <!-- przyciski -->


                    <div class="flex justify-center flex-col md:flex-row gap-4 mb-8">
                        <div class="flex flex-col md:flex-row gap-3">
                            <a
                                v-for="(p, i) in firm.phone"
                                :key="i"
                                :href="`tel:${p.phone}`"
                                :title="`Zadzwoń: ${p.phone}`"
                                :aria-label="`Numer telefonu: ${p.phone}`"
                                class="px-8 py-2 bg-slate-800 text-white text-sm font-semibold rounded-md uppercase tracking-wide"
                            >
                                {{ p.phone }}
                            </a>
                        </div>
                        <a
                            :href="`mailto:${firm.email}`"
                            rel="noopener noreferrer"
                            :title="`Wyślij e-mail do ${firm.email}`"
                            :aria-label="`Adres e-mail: ${firm.email}`"
                            class="px-8 py-2 bg-slate-800 text-white text-sm font-semibold rounded-md uppercase tracking-wide"
                        >
                            {{ firm.email }}
                        </a>
                    </div>

                    <!-- tekst główny -->
                    <p class="text-justify leading-relaxed text-[15px]" v-html="firm.description"></p>
                    <!-- 3 kółka z danymi adresowymi -->
                    <div class="mt-10 grid grid-cols-1 md:grid-cols-3 gap-8 text-center">
                        <div class="flex flex-col items-center gap-3">
                            <div class="w-12 h-12 rounded-full bg-slate-800"/>
                            <div class="text-sm">{{ firm.street }}</div>
                        </div>
                        <div class="flex flex-col items-center gap-3">
                            <div class="w-12 h-12 rounded-full bg-slate-800"/>
                            <div class="text-sm">{{ firm.postal }} {{ firm.city }}</div>
                        </div>
                        <div class="flex flex-col items-center gap-3">
                            <div class="w-12 h-12 rounded-full bg-slate-800"/>
                            <div class="text-sm">{{ firm.countryJson?.allTranslations[usePage().props.language] }}</div>
                        </div>
                    </div>
                </div>
                <!-- MAPA -->
                <div class="h-64" v-if="isClient">
                    <div class="col-span-6 mt-3" v-if="props.firm.city && props.firm.street && props.firm.number">
                        <iframe
                            width="100%"
                            height="250"
                            frameborder="0" style="border:0"
                            referrerpolicy="no-referrer-when-downgrade"
                            :src="generateUrl"
                            allowfullscreen>
                        </iframe>
                    </div>
                </div>
                <div class="text-center px-6 py-12 max-w-7xl mx-auto text-slate-800">
                    <!-- Tytuł -->
                    <h2 class="text-3xl font-bold mb-6" v-if="firm.extra_description">
                        {{ __('translate.poznajmy_sie') }}
                    </h2>

                    <!-- Tekst główny -->
                    <p class="text-[15px] leading-relaxed mb-10" v-if="firm.extra_description"
                       v-html="firm.extra_description">
                    </p>

                    <!-- Dwie kolumny -->
                    <div
                        class="grid grid-cols-1 md:grid-cols-2 gap-8 mt-4 text-slate-800 text-sm font-semibold tracking-wide">

                        <div class="text-center" v-if="props.firm.count_workers">
                            <span class="uppercase">{{
                                    __('translate.employeesCount')
                                }}</span>:{{ props.firm.count_workers }}
                        </div>
                        <div v-if="props.firm.annual_turnover" class="text-center">
                            <span class="uppercase">{{
                                    __('translate.annualTurnover')
                                }}</span>:{{ props.firm.annual_turnover }}
                        </div>
                    </div>
<!--                    PHOTOS-->
                    <div class="grid grid-cols-1 md:grid-cols-4 gap-4 w-full max-w-4xl mt-6">
                        <div
                            v-for="img in props.firm.media"
                            :key="img.url"
                            class="cursor-pointer bg-center bg-cover bg-no-repeat rounded shadow hover:scale-105 transition h-48"
                            :style="{ backgroundImage: `url('${img.url}')` }"
                            @click="openLightbox(img.url)"
                        ></div>
                    </div>
<!--                    PHOTOS-->
                    <!-- Opinie -->
                    <div v-if="props.firm?.opinion_google || props.firm?.opinion_trust || props.firm?.opinion_facebook"
                         class="mt-6">
                        <h2 class="text-3xl font-bold mb-6">{{ __('translate.reviews') }}</h2>
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                            <div v-if="props.firm.opinion_google" class="bg-gray-50 dark:bg-gray-700 p-4 rounded-lg">
                                <h3 class="font-semibold text-lg mb-2 flex items-center justify-center">
                                    <span class="mr-2">Google</span>
                                    <span class="text-red-500">★</span>
                                </h3>
                                <a class="underline" :href="props.firm.opinion_google" target="_blank">{{ props.firm.opinion_google }}</a>
                            </div>

                            <div v-if="props.firm.opinion_trust" class="bg-gray-50 dark:bg-gray-700 p-4 rounded-lg">
                                <h3 class="font-semibold text-lg mb-2 flex items-center justify-center">
                                    <span class="mr-2">Trustpilot</span>
                                    <span class="text-green-500">★</span>
                                </h3>
                                <a class="underline" :href="props.firm.opinion_trust" target="_blank">{{ props.firm.opinion_trust }}</a>
                            </div>

                            <div v-if="props.firm.opinion_facebook" class="bg-gray-50 dark:bg-gray-700 p-4 rounded-lg">
                                <h3 class="font-semibold text-lg mb-2 flex items-center justify-center">
                                    <span class="mr-2">Facebook</span>
                                    <span class="text-blue-500">★</span>
                                </h3>
                                <a class="underline" :href="props.firm.opinion_facebook" target="_blank">{{ props.firm.opinion_facebook }}</a>
                            </div>
                        </div>
                    </div>
                    <div v-if="props.firm?.video" class="mt-6">
                        <div class="w-full aspect-video">
                            <video
                                class="w-full h-full rounded-lg"
                                controls
                                preload="metadata"
                            >
                                <source :src="props.firm.video" type="video/mp4"/>
                                Twój przeglądarka nie obsługuje elementu <code>video</code>.
                            </video>
                        </div>
                    </div>
                </div>
                <h2 class="text-3xl font-bold mb-6 text-center" v-if="firm.extra_description">
                    {{ __('translate.offerts') }}
                </h2>
                <div class="p-6 lg:p-8 bg-white">
                <div v-for="(project) in firm.projects" :key="project.id"
                     class="mb-4 p-4 border border-blue-100 rounded-lg hover:shadow-lg transition duration-200 md:hover:bg-blue-50"    :class="{
         'border-blue-600 ring-2 ring-blue-400 ring-offset-2': project.is_featured
     }">
                    <Link :href="route('front.projects.single', project)" class="flex items-start justify-between">
                        <div class="flex items-start space-x-4">
                            <div
                                class="w-20 h-20 rounded-lg bg-gray-50"
                                :style="{
                                            backgroundImage: `url('${project.user?.profile_photo_url || '/default-company-logo.png'}')`,
                                            backgroundPosition: 'center',
                                            backgroundRepeat: 'no-repeat',
                                            backgroundSize: 'cover'
                                        }"
                            >
                            </div>
                            <div>
                                <h3 class="text-lg font-semibold text-gray-900 hover:text-red-500 transition-colors"
                                >
                                    {{project.id}}
                                    {{ project.position?.allTranslations.title[usePage().props.language] }}
                                </h3>
                                <div class="flex items-center text-sm text-gray-600">
                                    <span class="font-medium">{{ project.user?.name }}</span>
                                </div>
                                <div class="flex items-center text-sm text-gray-500">
                                    <span>{{ project.category.allTranslations.title[usePage().props.language] }}</span>
                                </div>
                            </div>
                        </div>
                        <div class="text-right">
                            <div class="text-xl font-bold text-red-500">
                                {{ project.basicSalaryFrom }} zł
                            </div>
                            <div class="text-sm text-gray-500 mt-1">
                                {{ project.cityWork }}, {{ project.country[0]?.allTranslations[usePage().props.language] }}
                            </div>
                        </div>
                    </Link>
                </div>
                </div>
            </div>
        </div>
        <!--        <div class="py-12">-->
        <!--            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">-->
        <!--                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg">-->
        <!--                    <div class="flex flex-col gap-4 p-6">-->
        <!--                        <Link :href="route('front.firms')" class="inline-flex items-center bg-blue-200 hover:bg-blue-300 px-4 py-2 rounded-md transition-colors">-->
        <!--                            <span class="mr-2">←</span> {{ __('translate.backToList') }}-->
        <!--                        </Link>-->

        <!--                        &lt;!&ndash; Logo i podstawowe informacje &ndash;&gt;-->
        <!--                        <div class="flex items-start gap-6">-->
        <!--                            <div v-if="props.firm?.logo" class="w-32 h-32">-->
        <!--                                <img :src="props.firm.logo" :alt="props.firm.name" class="w-full h-full object-contain rounded-lg">-->
        <!--                            </div>-->

        <!--                            <div class="flex-1">-->
        <!--                                <h1 class="text-2xl font-bold mb-2">{{ props.firm?.company_name || props.firm.name }}</h1>-->
        <!--                                <div class="text-gray-600 dark:text-gray-300 grid grid-cols-1 md:grid-cols-2 gap-4">-->
        <!--                                    <p v-if="props.firm.nip"><strong>NIP:</strong> {{ props.firm.nip }}</p>-->
        <!--                                    <p v-if="props.firm.regon"><strong>REGON:</strong> {{ props.firm.regon }}</p>-->
        <!--                                    <p v-if="props.firm.count_workers"><strong>{{ __('translate.employeesCount') }}:</strong> {{ props.firm.count_workers }}</p>-->
        <!--                                    <p v-if="props.firm.annual_turnover"><strong>{{ __('translate.annualTurnover') }}:</strong> {{ props.firm.annual_turnover }}</p>-->
        <!--                                    <p v-if="props.firm.website" class="col-span-2">-->
        <!--                                        <strong>{{ __('translate.website') }}:</strong>-->
        <!--                                        <a :href="props.firm.website" target="_blank" class="text-blue-600 hover:underline">-->
        <!--                                            {{ props.firm.website }}-->
        <!--                                        </a>-->
        <!--                                    </p>-->
        <!--                                </div>-->
        <!--                            </div>-->
        <!--                        </div>-->

        <!--                        &lt;!&ndash; Dane kontaktowe &ndash;&gt;-->
        <!--                        <div class="mt-6">-->
        <!--                            <h2 class="text-xl font-semibold mb-3">{{ __('translate.contactDetails') }}</h2>-->
        <!--                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">-->
        <!--                                <div v-if="props.firm.email">-->
        <!--                                    <strong>{{ __('translate.email') }}:</strong>-->
        <!--                                    <p>{{ props.firm.email }}</p>-->
        <!--                                </div>-->
        <!--                                <div v-if="props.firm.phone">-->
        <!--                                    <strong>{{ __('translate.phone') }}:</strong>-->
        <!--                                    <div v-for="phone in props.firm.phone">-->
        <!--                                        <p>{{ phone.desc }}</p>-->
        <!--                                        <p>{{ phone.phone }}</p>-->
        <!--                                    </div>-->
        <!--                                </div>-->
        <!--                                <div v-if="props.firm.street || props.firm.number || props.firm.city || props.firm.postal || props.firm.country">-->
        <!--                                    <strong>{{ __('translate.address') }}:</strong>-->
        <!--                                    <p>-->
        <!--                                        <template v-if="props.firm.street || props.firm.number">-->
        <!--                                            {{ props.firm.street }} {{ props.firm.number }}<br>-->
        <!--                                        </template>-->
        <!--                                        {{ props.firm.postal }} {{ props.firm.city }}<br v-if="props.firm.city || props.firm.postal">-->
        <!--                                        {{ props.firm.country }}-->
        <!--                                    </p>-->
        <!--                                </div>-->
        <!--                            </div>-->
        <!--                        </div>-->

        <!--                        &lt;!&ndash; Opis firmy &ndash;&gt;-->
        <!--                        <div v-if="props.firm?.description" class="mt-6">-->
        <!--                            <h2 class="text-xl font-semibold mb-3">{{ __('translate.aboutCompany') }}</h2>-->
        <!--                            <div class="prose dark:prose-invert max-w-none">-->
        <!--                                {{ props.firm.description }}-->
        <!--                            </div>-->
        <!--                        </div>-->
        <!--                        &lt;!&ndash; Wideo o firmie &ndash;&gt;-->
        <!--                        <div v-if="props.firm?.video" class="mt-6">-->
        <!--                            <h2 class="text-xl font-semibold mb-3">{{ __('translate.companyVideo') }}</h2>-->
        <!--                            <div class="w-full aspect-video">-->
        <!--                                <video-->
        <!--                                    class="w-full h-full rounded-lg"-->
        <!--                                    controls-->
        <!--                                    preload="metadata"-->
        <!--                                >-->
        <!--                                    <source :src="props.firm.video" type="video/mp4" />-->
        <!--                                    Twój przeglądarka nie obsługuje elementu <code>video</code>.-->
        <!--                                </video>-->
        <!--                            </div>-->
        <!--                        </div>-->

        <!--                        &lt;!&ndash; Social Media &ndash;&gt;-->
        <!--                        <div v-if="props.firm?.social_facebook || props.firm?.social_facebook || props.firm?.social_google || props.firm?.social_x || props.firm?.social_instagram || props.firm?.social_linkedin || props.firm?.social_tiktok" class="mt-6">-->
        <!--                            <h2 class="text-xl font-semibold mb-3">{{ __('translate.socialMedia') }}</h2>-->
        <!--                            <div class="flex flex-wrap gap-4">-->
        <!--                                <a v-if="props.firm.social_facebook" :href="props.firm.social_facebook" target="_blank" class="w-8 h-8 rounded-full bg-slate-800 text-white text-xs flex items-center justify-center">Facebook</a>-->
        <!--                                <a v-if="props.firm.social_google" :href="props.firm.social_google" target="_blank" class="w-8 h-8 rounded-full bg-slate-800 text-white text-xs flex items-center justify-center">Google</a>-->
        <!--                                <a v-if="props.firm.social_x" :href="props.firm.social_x" target="_blank" class="w-8 h-8 rounded-full bg-slate-800 text-white text-xs flex items-center justify-center">X (Twitter)</a>-->
        <!--                                <a v-if="props.firm.social_instagram" :href="props.firm.social_instagram" target="_blank" class="w-8 h-8 rounded-full bg-slate-800 text-white text-xs flex items-center justify-center">Instagram</a>-->
        <!--                                <a v-if="props.firm.social_linkedin" :href="props.firm.social_linkedin" target="_blank" class="w-8 h-8 rounded-full bg-slate-800 text-white text-xs flex items-center justify-center">LinkedIn</a>-->
        <!--                                <a v-if="props.firm.social_tiktok" :href="props.firm.social_tiktok" target="_blank" class="pw-8 h-8 rounded-full bg-slate-800 text-white text-xs flex items-center justify-center">TikTok</a>-->
        <!--                            </div>-->
        <!--                        </div>-->

        <!--                        &lt;!&ndash; Opinie &ndash;&gt;-->
        <!--                        <div v-if="props.firm?.opinion_google || props.firm?.opinion_trust || props.firm?.opinion_facebook" class="mt-6">-->
        <!--                            <h2 class="text-xl font-semibold mb-3">{{ __('translate.reviews') }}</h2>-->
        <!--                            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">-->
        <!--                                <div v-if="props.firm.opinion_google" class="bg-gray-50 dark:bg-gray-700 p-4 rounded-lg">-->
        <!--                                    <h3 class="font-semibold text-lg mb-2 flex items-center">-->
        <!--                                        <span class="mr-2">Google</span>-->
        <!--                                        <span class="text-red-500">★</span>S-->
        <!--                                    </h3>-->
        <!--                                    <p>{{ props.firm.opinion_google }}</p>-->
        <!--                                </div>-->

        <!--                                <div v-if="props.firm.opinion_trust" class="bg-gray-50 dark:bg-gray-700 p-4 rounded-lg">-->
        <!--                                    <h3 class="font-semibold text-lg mb-2 flex items-center">-->
        <!--                                        <span class="mr-2">Trustpilot</span>-->
        <!--                                        <span class="text-green-500">★</span>-->
        <!--                                    </h3>-->
        <!--                                    <p>{{ props.firm.opinion_trust }}</p>-->
        <!--                                </div>-->

        <!--                                <div v-if="props.firm.opinion_facebook" class="bg-gray-50 dark:bg-gray-700 p-4 rounded-lg">-->
        <!--                                    <h3 class="font-semibold text-lg mb-2 flex items-center">-->
        <!--                                        <span class="mr-2">Facebook</span>-->
        <!--                                        <span class="text-blue-500">★</span>-->
        <!--                                    </h3>-->
        <!--                                    <p>{{ props.firm.opinion_facebook }}</p>-->
        <!--                                </div>-->
        <!--                            </div>-->
        <!--                        </div>-->
        <!--                    </div>-->
        <!--                </div>-->
        <!--            </div>-->
        <!--        </div>-->

        <!-- Lightbox musi być w tym samym miejscu lub globalnie w DOM -->
        <!-- Lightbox -->
        <div
            v-if="showLightbox"
            class="fixed inset-0 bg-black/75 flex items-center justify-center p-4 z-50"
            @click.self="closeLightbox"
        >
        <button
            @click="closeLightbox"
            class="absolute top-4 right-4 text-white bg-black/50 px-3 py-1 rounded hover:bg-black/70 transition"
        >
            X
        </button>
        <img
            :src="currentImage"
            class="max-h-[90vh] max-w-[90vw] rounded shadow-lg"
            @click.stop
        />
        </div>

    </FrontLayout>
</template>
