<script setup>
import { Head, Link, router, usePage, useForm } from '@inertiajs/vue3';
import Multiselect from 'vue-multiselect';
import Banner from '@/Components/Banner.vue';
import ConfettiExplosion from "vue-confetti-explosion";
import ApplicationMark from "@/Components/ApplicationMark.vue";
import NavLink from "@/Components/NavLink.vue";
import Checkbox from "@/Components/Checkbox.vue";
import { ref, computed, watch, onMounted } from "vue";
import __ from "@/lang.js";
// import CookieConsent from '@/Components/CookieConsent.vue';
import { usePermission } from "@/Composables/usePermission";

const props = defineProps({
    title: String,
    type: String,
    description: String,
    keywords: String,
    image: String,
    author: String,
    imageUrl: String,
    url: String,
});

const { hasRole } = usePermission();
const page = usePage();
const auth = page.props?.auth ?? null;
const user = computed(() => auth?.user);

const isClient = ref(false);
const ogUrl = ref(page.props?.ziggy?.location || page.props?.pageUrl || '');

const showCountryModal = ref(false);
const isManualOpen = ref(false);
const countrySelectionStep = ref('suggest');
const countrySearch = ref('');
const isProcessingCountrySelection = ref(false);

watch(showCountryModal, (newVal) => {
    if (!newVal) {
        countrySearch.value = '';
        isManualOpen.value = false;
        if (typeof window !== 'undefined' && window.sessionStorage) {
            window.sessionStorage.setItem('market_popup_closed', 'true');
        }
    }
});

const countries = computed(() => page.props.countriesAll || {});
const currentCountryCode = computed(() => page.props.currentCountry || '');

const currentCountryName = computed(() => {
    if (!page.props.countriesAllFlat) return currentCountryCode.value.toUpperCase();
    const code = currentCountryCode.value.toUpperCase();
    const country = page.props.countriesAllFlat[code];
    if (!country) return code;

    const emoji = country.emoji || '';
    let name = country.name;

    if (typeof name === 'object') {
        name = name[page.props.language] || name.en || name;
    }

    return (emoji + ' ' + (name || code)).trim().toUpperCase();
});

const headerCountryName = currentCountryName;

const filteredCountries = computed(() => {
    if (!countries.value) return {};

    const search = countrySearch.value.toLowerCase();
    const result = {};

    Object.keys(countries.value).forEach(continent => {
        const filtered = countries.value[continent].filter(country => {
            const translatedName = typeof country.name === 'object'
                ? (country.name[page.props.language] || country.name.en || '')
                : (country.name || '');

            const code = country.countryCode || '';

            return translatedName.toLowerCase().includes(search) ||
                code.toLowerCase().includes(search);
        });

        if (filtered.length > 0) {
            result[continent] = filtered;
        }
    });

    return result;
});

const scrollToContinent = (continent) => {
    const el = document.getElementById('continent-' + continent);
    if (el) {
        el.scrollIntoView({ behavior: 'smooth', block: 'start' });
    }
};

const hasPreferredCountry = computed(() => {
    if (!isClient.value || typeof window === 'undefined' || !window.localStorage) return false;
    return !!window.localStorage.getItem('preferred_country');
});

const selectCountry = (code) => {
    isProcessingCountrySelection.value = true;
    if (typeof window !== 'undefined' && window.localStorage) {
        window.localStorage.setItem('preferred_country', code);
    }
    if (typeof window !== 'undefined' && window.sessionStorage) {
        window.sessionStorage.setItem('market_popup_closed', 'true');
    }
    router.post(route('front.country.store'), { country_code: code }, {
        preserveScroll: true,
        onSuccess: () => {
            showCountryModal.value = false;
        },
        onFinish: () => {
            isProcessingCountrySelection.value = false;
        }
    });
};

const confirmCurrentCountry = () => {
    selectCountry(currentCountryCode.value);
};

const addOfferRoute = computed(() => {
    if (typeof route === 'undefined') {
        return '#';
    }
    if (hasRole('firm')) {
        return route('projects.create');
    }
    return route('project-recruits.create');
});

const canAddOffer = computed(() => {
    if (!user.value) {
        return true;
    }
    return hasRole('firm') || hasRole('recruit');
});

onMounted(() => {
    isClient.value = true;
    ogUrl.value = window.location.href;

    if (typeof window !== 'undefined' && window.localStorage && !window.localStorage.getItem('preferred_country')) {
        const isClosedInSession = window.sessionStorage && window.sessionStorage.getItem('market_popup_closed');
        if (!isClosedInSession) {
            isManualOpen.value = false;
            showCountryModal.value = true;
        }
    }

    window.addEventListener('scroll', () => {
        showScrollTop.value = window.scrollY > 400;
        isScrolled.value = window.scrollY > 20;
    });
});

const form = useForm({
    email: '',
    agreements: [],
});

const newsletterAgreements = computed(() => page.props?.newsletterAgreements || []);

const triggerConfetti = () => {
    showConfetti.value = false;
    setTimeout(() => {
        showConfetti.value = true;
        setTimeout(() => {
            showConfetti.value = false;
        }, 6000);
    }, 10);
};

const submitForm = () => {
    if (typeof route === 'undefined') {
        return;
    }
    form.post(route('newsletter.store'), {
        preserveScroll: true,
        onSuccess: () => {
            form.reset('email', 'agreements');
            triggerConfetti();
        },
    });
};

const isAllNewsletterAgreementsSelected = computed(() => {
    const allIds = [];
    newsletterAgreements.value.forEach(agreement => {
        allIds.push(agreement.id.toString());
        if (agreement.children) {
            agreement.children.forEach(child => {
                allIds.push(child.id.toString());
            });
        }
    });

    if (allIds.length === 0) return false;
    return allIds.every(id => form.agreements.includes(id));
});

const toggleAllNewsletterAgreements = () => {
    if (isAllNewsletterAgreementsSelected.value) {
        form.agreements = [];
    } else {
        const allIds = [];
        newsletterAgreements.value.forEach(agreement => {
            allIds.push(agreement.id.toString());
            if (agreement.children) {
                agreement.children.forEach(child => {
                    allIds.push(child.id.toString());
                });
            }
        });
        form.agreements = allIds;
    }
};

const toggleAgreement = (agreement, checked) => {
    if (!agreement.children) return;

    agreement.children.forEach(child => {
        const childId = child.id.toString();
        const index = form.agreements.indexOf(childId);
        if (checked && index === -1) {
            form.agreements.push(childId);
        } else if (!checked && index !== -1) {
            form.agreements.splice(index, 1);
        }
    });
};

const toggleChildAgreement = (agreement) => {
    if (!agreement) return;
    const parentId = agreement.id.toString();
    const childrenIds = agreement.children ? agreement.children.map(c => c.id.toString()) : [];
    if (childrenIds.length === 0) return;

    const allChildrenSelected = childrenIds.every(id => form.agreements.includes(id));
    const parentIndex = form.agreements.indexOf(parentId);

    if (allChildrenSelected && parentIndex === -1) {
        form.agreements.push(parentId);
    } else if (!allChildrenSelected && parentIndex !== -1) {
        form.agreements.splice(parentIndex, 1);
    }
};

const isAgreementRequired = (id) => {
    const agreement = newsletterAgreements.value.find(a => a.id === id);
    return agreement ? !!agreement.is_required : false;
};

// Mobile menu
const mobileMenuOpen = ref(false);
const showNewsletterAgreements = ref(false);
const expandedAgreements = ref([]);

const toggleAgreementExpansion = (id) => {
    if (expandedAgreements.value.includes(id)) {
        expandedAgreements.value = expandedAgreements.value.filter(itemId => itemId !== id);
    } else {
        expandedAgreements.value.push(id);
    }
};

const isAgreementExpanded = (id) => expandedAgreements.value.includes(id);
const toggleMenu = () => mobileMenuOpen.value = !mobileMenuOpen.value;
const closeMenu = () => mobileMenuOpen.value = false;
watch(mobileMenuOpen, val => {
    if (isClient.value) {
        document.body.style.overflow = val ? 'hidden' : '';
    }
});

// Scroll to top
const showScrollTop = ref(false);
const isScrolled = ref(false);

const scrollToTop = () => {
    if (typeof window !== 'undefined') {
        window.scrollTo({ top: 0, behavior: 'smooth' });
    }
}

// Languages
const changeLang = computed(() => page.props.languages?.find(el => el.value == page.props.language));
const lang = ref(changeLang.value);
watch(changeLang, (newVal) => {
    lang.value = newVal;
});
const dispatchAction = (data) => router.post(route('front.language.store', { language: data.value }), {}, { preserveScroll: true });
const resetLang = (data) => router.post(route('front.language.store', { language: data }), {}, { preserveScroll: true });
const sortLangs = computed(() => {
    let langs = page.props.languages || [];

    return [...langs]
        .map(l => ({
            ...l,
            searchString: Object.values(l.allLabels || {}).join(' ').toLowerCase() + ' ' + l.label.toLowerCase() + ' ' + l.value.toLowerCase()
        }))
        .sort((a, b) => a.label.localeCompare(b.label));
});

const getFlagCode = (langCode) => {
    const mapping = {
        'en': 'gb',
        'sq': 'al',
        'el': 'gr',
        'hy': 'am',
        'zh': 'cn',
        'ja': 'jp',
        'ko': 'kr',
        'cs': 'cz',
        'da': 'dk',
        'et': 'ee',
        'sv': 'se',
        'uk': 'ua',
        // Added missing languages
        'vi': 'vn', // Vietnamese
        'tk': 'tm', // Turkmen
        'tg': 'tj', // Tajik
        'si': 'lk', // Sinhalese
        'sl': 'si', // Slovenian
        'sr': 'rs', // Serbian
        'ps': 'af', // Pashto
        'ne': 'np', // Nepali
        'ms': 'my', // Malay
        'lb': 'lu', // Luxembourgish
        'km': 'kh', // Khmer
        'ca': 'es-ct', // Catalan
        'dz': 'bt', // Dzongkha
        'bs': 'ba', // Bosnian
        'my': 'mm', // Burmese
        'be': 'by', // Belarusian
        'bn': 'bd', // Bengali
        'ar': 'sa', // Arabic
        'am': 'et', // Amharic
        'fa': 'ir', // Persian (Farsi)
        'dv': 'mv', // Maldivian (Dhivehi)
        'lo': 'la', // Lao
        'ka': 'ge', // Georgian
        'he': 'il', // Hebrew
        'hi': 'in', // Hindi
    };
    return mapping[langCode] || langCode;
};

const showConfetti = ref(false);
watch(() => page.props.jetstream?.flash?.banner, (newVal) => {
    // Zachowujemy globalne confetti tylko dla aplikacji na ofertę i opłacenia zamówienia
    // Widoki wymiany punktów mają teraz własną, lokalną logikę wyzwalania
    if (newVal === __('translate.makeAplication') || newVal === __('translate.orderPay') || newVal === __('footer.newsletter_success')) {
        triggerConfetti();
    }
}, { immediate: true });

const socialLinks = [
    { name: 'facebook', url: 'https://www.facebook.com/work4you.global' },
    { name: 'instagram', url: 'https://www.instagram.com/work4you.global/' },
    { name: 'tik_tok', url: 'https://www.tiktok.com/@work4you.global' },
    { name: 'linkedin', url: 'https://www.linkedin.com/company/work-4-you-global/' },
    { name: 'x', url: 'https://x.com/Work4YouGlobal' },
];
</script>

<template>
    <Head>
            <!-- Title -->
            <title v-if="props.title">{{ props.title }}</title>
            <title v-else>{{ page.props.pageName || 'Work4you.global' }}</title>

            <!-- Meta description & keywords -->
            <meta name="description" :content="props.description || __('translate.meta_description_default')" />
            <meta name="keywords" :content="props.keywords || __('translate.meta_keywords_default')" />
            <meta name="robots" content="index, follow" />
            <!-- Canonical -->
            <link v-if="props.url || ogUrl" rel="canonical" :href="props.url || ogUrl" />

            <!-- Open Graph -->
            <meta property="og:locale" content="pl_PL" />
            <meta property="og:type" :content="props.type || 'website'" />
            <meta v-if="props.title" property="og:title" :content="props.title" />
            <meta v-if="props.description" property="og:description" :content="props.description" />
            <meta v-if="props.url || ogUrl" property="og:url" :content="props.url || ogUrl" />
            <meta v-if="props.url || ogUrl" property="og:site_name" :content="props.url || ogUrl" />
            <meta property="og:image" :content="`${props.image || '/default-image.png'}?v=${page.props.assetVersion}`"/>
            <meta property="og:image:width" content="1200" />
            <meta property="og:image:height" content="630" />
<!--            <meta property="og:image:type" content="image/jpeg" />-->

            <!-- Author -->
            <meta name="author" :content="props.author || 'Work4you.global'" />

            <!-- Twitter -->
            <meta name="twitter:card" content="summary_large_image" />
            <meta name="twitter:title" :content="props.title" />
            <meta name="twitter:description" :content="props.description" />
            <meta name="twitter:image" :content="`${props.image || '/default-image.png'}?v=${page.props.assetVersion}`"/>
            <meta name="twitter:label1" :content="__('translate.written_by')" />
            <meta name="twitter:data1" content="Work4you.global" />

            <slot name="head" />
        </Head>
    <div class="flex flex-col font-sans relative overflow-x-hidden">
        <Banner />
        <div v-if="showConfetti" class="fixed top-0 left-1/2 -translate-x-1/2 pointer-events-none z-[300]">
            <ConfettiExplosion
                :particleCount="100"
                :force="0.8"
                :stageHeight="1000"
                :stageWidth="1500"
                :colors="['#00a0e3', '#e31e24', '#0d2a52', '#00A0E3B2', '#E31E2499']"
            />
        </div>
        <div
            id="image"
            v-if="props.imageUrl"
            class="absolute min-h-screen min-w-full bg-no-repeat bg-cover bg-center z-0"
            :style="{
        backgroundImage: `url(${props.imageUrl})`,
        backgroundSize: 'cover',
        backgroundPosition: 'center',
    }"
        ></div>

        <!-- Header -->
        <div
            class="fixed top-0 left-0 right-0 z-[100] transition-all duration-300"
            :class="[isScrolled ? 'py-0' : 'md:py-4']"
        >
            <div class="mx-auto transition-all duration-300" :class="[isScrolled ? 'max-w-full' : 'max-w-7xl md:px-6 lg:px-8']">
                <header
                    class="flex items-center h-16 md:h-20 justify-between bg-white/90 backdrop-blur-md px-4 md:px-10 border-b md:border border-gray-100 transition-all duration-300"
                    :class="[
                        isScrolled
                            ? 'rounded-none shadow-md border-b-gray-200/50'
                            : 'md:rounded-[2rem] md:shadow-xl md:shadow-blue-900/5'
                    ]"
                >
                <Link :href="route('front')" class="flex items-center shrink-0">
                    <img src="/images/logo-header.png" class="h-8 md:h-12 w-auto" :alt="__('translate.logo')" />
                </Link>

                <!-- Desktop nav -->
                <nav class="hidden xl:flex items-center space-x-1">
                    <NavLink :href="route('front.articles')" :active="route().current('front.articles')" class="!px-4 !py-2 !text-[10px] !font-black !uppercase !tracking-widest !border-none !text-[#0A2C5C] hover:!text-[#00a0e3] active:!scale-95 !transition-all duration-200">
                        {{__('translate.articles')}}
                    </NavLink>
                    <NavLink :href="route('front.projects')" :active="route().current('front.projects')" class="!px-4 !py-2 !text-[10px] !font-black !uppercase !tracking-widest !border-none !text-[#0A2C5C] hover:!text-[#00a0e3] active:!scale-95 !transition-all duration-200">
                        {{__('translate.projects')}}
                    </NavLink>
                    <NavLink :href="route('front.firms')" :active="route().current('front.firms')" class="!px-4 !py-2 !text-[10px] !font-black !uppercase !tracking-widest !border-none !text-[#0A2C5C] hover:!text-[#00a0e3] active:!scale-95 !transition-all duration-200">
                        {{__('translate.firms')}}
                    </NavLink>
                    <NavLink :href="route('front.partners')" :active="route().current('front.partners')" class="!px-4 !py-2 !text-[10px] !font-black !uppercase !tracking-widest !border-none !text-[#0A2C5C] hover:!text-[#00a0e3] active:!scale-95 !transition-all duration-200">
                        {{__('translate.partners')}}
                    </NavLink>
                </nav>

                <!-- Country trigger and auth section -->
                <div class="flex items-center space-x-2 md:space-x-4">
                    <!-- Country trigger desktop -->
                    <div class="hidden xl:flex items-center gap-3">
                        <div class="relative w-40">
                            <span class="absolute top-[7px] left-3 text-[8px] font-black text-gray-400 uppercase tracking-widest z-10 pointer-events-none">{{ __('translate.MarketLabel') }}</span>
                            <button
                                @click="isManualOpen = true; countrySelectionStep = 'list'; showCountryModal = true"
                                class="w-full flex items-center gap-2 pl-2 pr-2 h-[45px] bg-gray-50 dark:bg-gray-800 rounded-xl border border-gray-100 dark:border-gray-700 hover:bg-gray-100 transition-colors group shrink-0"
                            >
                                <span class="text-base inline-block mt-3">🌐</span>
                                <span class="text-[10px] font-black text-[#0A2C5C] dark:text-white uppercase tracking-wider inline-flex items-center gap-1 mt-3 w-full text-left">
                                    {{ headerCountryName }}
                                </span>
                            </button>
                        </div>
                    </div>

                    <!-- Country trigger mobile/tablet -->
                    <div class="hidden xl:hidden md:flex items-center shrink-0">
                        <div class="relative w-32 md:w-40 scale-90 md:scale-100 origin-right">
                            <span class="absolute top-2 left-3 text-[8px] font-black text-gray-400 uppercase tracking-widest z-10 pointer-events-none hidden md:block">{{ __('translate.MarketLabel') }}</span>
                            <button
                                @click="isManualOpen = true; countrySelectionStep = 'list'; showCountryModal = true"
                                class="w-full flex items-center gap-2 pl-2 pr-2 h-[38px] bg-gray-50 dark:bg-gray-800 rounded-xl border border-gray-100 dark:border-gray-700 hover:bg-gray-100 transition-colors group"
                            >
                                <span class="text-base md:text-lg inline-block mt-3">🌐</span>
                                <span class="hidden md:inline-flex text-[10px] font-black text-[#0A2C5C] dark:text-white uppercase tracking-wider items-center gap-1 mt-3 w-full text-left">
                                    {{ headerCountryName }}
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 text-gray-400 group-hover:text-[#0A2C5C] transition-colors ml-auto" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                                    </svg>
                                </span>
                            </button>
                        </div>
                    </div>

                        <!-- Language selector desktop -->
                        <div class="hidden xl:flex items-center gap-3">
                            <div class="custom-multiselect w-48 relative">
                                <span class="absolute top-2 left-3 text-[8px] font-black text-gray-400 uppercase tracking-widest z-10 pointer-events-none">{{ __('translate.language') }}</span>
                                <Multiselect
                                    v-model="lang"
                                    :options="sortLangs"
                                    label="searchString"
                                    track-by="value"
                                    @select="dispatchAction"
                                    :placeholder="__('translate.placeholder')"
                                    :selectLabel="''"
                                    :selectedLabel="''"
                                    :deselectLabel="''"
                                    class="languages-multiselect"
                                >
                                    <template #singleLabel="{ option }">
                                        <div class="flex items-center gap-2 mt-2">
                                            <span :class="'fi fi-' + getFlagCode(option.value) + ' fis rounded-[2px]'"></span>
                                            <span class="text-[10px] font-black text-[#0A2C5C] dark:text-white uppercase tracking-wider">{{ option.allLabels[option.value] || option.label }}</span>
                                        </div>
                                    </template>
                                    <template #option="{ option }">
                                        <div class="flex items-center gap-2">
                                            <span :class="'fi fi-' + getFlagCode(option.value) + ' fis rounded-[2px]'"></span>
                                            <span class="text-[10px] font-black uppercase tracking-wider">{{ option.allLabels[option.value] || option.label }}</span>
                                        </div>
                                    </template>
                                    <template #noResult>
                                        <span class="text-[10px] uppercase font-bold">{{__('translate.noOptions')}}</span>
                                    </template>
                                    <template #noOptions>
                                        <span class="text-[10px] uppercase font-bold">{{__('translate.noResult')}}</span>
                                    </template>
                                </Multiselect>
                            </div>
                        </div>
                        <!-- Language selector mobile/tablet -->
                        <div class="hidden xl:hidden md:flex items-center shrink-0">
                            <div class="custom-multiselect w-28 md:w-40 relative scale-90 md:scale-100 origin-right">
                                <span class="absolute top-2 left-3 text-[8px] font-black text-gray-400 uppercase tracking-widest z-10 pointer-events-none">{{ __('translate.language') }}</span>
                                <Multiselect
                                    v-model="lang"
                                    :options="sortLangs"
                                    label="searchString"
                                    track-by="value"
                                    @select="dispatchAction"
                                    :placeholder="__('translate.placeholder')"
                                    :selectLabel="''"
                                    :selectedLabel="''"
                                    :deselectLabel="''"
                                    class="languages-multiselect"
                                >
                                    <template #singleLabel="{ option }">
                                        <div class="flex items-center gap-2 mt-2">
                                            <span :class="'fi fi-' + getFlagCode(option.value) + ' fis rounded-[2px]'"></span>
                                            <span class="text-[9px] md:text-[10px] font-black text-[#0A2C5C] dark:text-white uppercase tracking-wider">{{ option.allLabels[option.value] || option.label }}</span>
                                        </div>
                                    </template>
                                    <template #option="{ option }">
                                        <div class="flex items-center gap-2">
                                            <span :class="'fi fi-' + getFlagCode(option.value) + ' fis rounded-[2px]'"></span>
                                            <span class="text-[10px] font-black uppercase tracking-wider">{{ option.allLabels[option.value] || option.label }}</span>
                                        </div>
                                    </template>
                                </Multiselect>
                            </div>
                        </div>

                    <button v-if="page.props.currentLang != page.props.language" @click="resetLang(page.props.currentLang)" class="hidden xl:block text-[10px] font-black uppercase tracking-widest text-[#0A2C5C] hover:underline underline-offset-4">{{ page.props.currentLang }}</button>

                    <div v-if="auth?.user" class="hidden xl:flex md:flex items-center gap-2 md:gap-3">
                        <Link :href="route('dashboard')" class="px-4 md:px-6 py-2 md:py-3 bg-[#0A2C5C] text-white text-[9px] md:text-[10px] font-black uppercase tracking-widest rounded-xl hover:bg-[#00a0e3] shadow-lg shadow-blue-900/20 transition-all hover:-translate-y-0.5 shrink-0">
                            {{__('translate.dashboard')}}
                        </Link>
                    </div>
                    <template v-else>
                        <div class="hidden xl:flex md:flex items-center gap-1 md:gap-2">
                            <Link :href="route('login')" class="px-4 md:px-6 py-2 md:py-3 bg-white border border-gray-100 text-[#0A2C5C] text-[9px] md:text-[10px] font-black uppercase tracking-widest rounded-xl hover:bg-gray-50 shadow-sm transition-all hover:-translate-y-0.5 shrink-0">
                                {{__('translate.login')}}
                            </Link>
                            <Link v-if="page.props.canRegister" :href="route('register')" class="px-4 md:px-6 py-2 md:py-3 bg-red-600 text-white text-[9px] md:text-[10px] font-black uppercase tracking-widest rounded-xl hover:bg-red-700 shadow-lg shadow-red-900/20 transition-all hover:-translate-y-0.5 shrink-0">
                                {{__('translate.register')}}
                            </Link>
                        </div>
                    </template>
                </div>

                <!-- Mobile menu button -->
                <div class="flex xl:hidden items-center shrink-0 ml-auto">
                    <button @click="toggleMenu" class="p-2 rounded-xl bg-gray-50 text-[#0A2C5C] hover:bg-gray-100 transition-colors border border-gray-100">
                        <svg v-if="!mobileMenuOpen" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-6 w-6">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                        </svg>
                        <svg v-else xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-6 w-6">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                        </svg>
                    </button>
                </div>
            </header>
        </div>
    </div>

        <!-- Main content -->
        <main class="relative z-0 flex-grow pt-16 md:pt-28 overflow-x-hidden">
            <slot />

            <Teleport to="body">
                <div v-if="showCountryModal" class="fixed inset-0 z-[100] flex items-center justify-center bg-black bg-opacity-50 backdrop-blur-sm">
                    <div class="bg-white dark:bg-gray-800 rounded-[2rem] shadow-2xl shadow-blue-900/10 w-full max-w-2xl mx-4 overflow-hidden border border-gray-100 dark:border-gray-700 relative">
                        <!-- Loading Overlay -->
                        <div v-if="isProcessingCountrySelection" class="absolute inset-0 z-[120] flex flex-col items-center justify-center bg-white/90 dark:bg-gray-800/90 backdrop-blur-sm">
                            <div class="flex flex-col items-center gap-4">
                                <div class="w-12 h-12 border-4 border-[#0A2C5C] border-t-transparent rounded-full animate-spin"></div>
                                <p class="text-[10px] font-black text-[#0A2C5C] dark:text-white uppercase tracking-[0.2em] animate-pulse">
                                    {{ __('translate.adjusting_portal') }}
                                </p>
                            </div>
                        </div>

                        <!-- Close button -->
                        <button
                            v-if="hasPreferredCountry || isManualOpen"
                            @click="showCountryModal = false"
                            class="absolute top-6 right-6 text-[#0A2C5C] hover:text-[#00a0e3] dark:hover:text-gray-200 z-[110] p-2 bg-gray-50/80 dark:bg-gray-800/80 rounded-xl backdrop-blur-sm shadow-sm transition-all hover:rotate-90 border border-gray-100 dark:border-gray-700"
                        >
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>
                        <!-- Step 1: Suggestion -->
                        <div v-if="countrySelectionStep === 'suggest'" class="p-10 text-center">
                            <div class="mb-8 flex justify-center">
                                <div class="w-24 h-24 bg-blue-50 dark:bg-blue-900/20 rounded-full flex items-center justify-center border-4 border-white dark:border-gray-700 shadow-xl">
                                    <span :class="`fi fi-${getFlagCode((currentCountryCode || '').toLowerCase())} text-5xl shadow-sm rounded-lg`" style="width: 64px; height: 48px;"></span>
                                </div>
                            </div>
                            <h3 class="text-2xl font-black uppercase tracking-tighter mb-2 text-[#0A2C5C] dark:text-white">
                                {{ __('translate.MarketPopupTitle') }}
                            </h3>
                            <p class="text-[14px] font-bold text-[#00a0e3] mb-8 uppercase tracking-wider flex items-center justify-center flex-wrap gap-2">
                                <span class="text-center w-full mb-1">{{ __('translate.MarketPopupSuggested') }}</span>
                                <span class="bg-blue-50 dark:bg-blue-900/30 px-3 py-1 rounded-full border border-blue-100 dark:border-blue-800">
                                    {{ currentCountryName }}
                                </span>
                            </p>
                            <div class="flex flex-col sm:flex-row gap-4 justify-center mb-8">
                                <button @click="confirmCurrentCountry" class="px-10 py-5 bg-[#0A2C5C] text-white rounded-2xl text-[11px] font-black uppercase tracking-[0.2em] hover:bg-[#00a0e3] transition-all shadow-xl shadow-blue-900/20 active:scale-95">
                                    {{ __('translate.yes_apply') }}
                                </button>
                                <button @click="countrySelectionStep = 'list'" class="px-10 py-5 border-2 border-gray-100 dark:border-gray-700 text-[#0A2C5C] dark:text-gray-300 rounded-2xl text-[11px] font-black uppercase tracking-[0.2em] hover:bg-gray-50 dark:hover:bg-gray-800 transition-all active:scale-95">
                                    {{ __('translate.choose_other') }}
                                </button>
                            </div>
                            <p class="text-[10px] font-black text-gray-400 uppercase tracking-[0.2em]">
                                {{ __('translate.MarketRemember') }}
                            </p>
                        </div>

                        <!-- Step 2: Full List -->
                        <div v-if="countrySelectionStep === 'list'" class="flex flex-col h-[85vh] max-h-[750px]">
                            <div class="p-6 pb-4 flex justify-between items-center bg-white dark:bg-gray-800">
                                <h3 class="text-[11px] font-black uppercase tracking-[0.2em] text-[#0A2C5C] dark:text-white">{{ __('translate.select_country') }}</h3>
                                <div class="flex items-center gap-4">
                                    <button
                                        v-if="!isManualOpen"
                                        @click="countrySelectionStep = 'suggest'"
                                        class="text-[#0A2C5C] dark:text-gray-400 hover:text-[#00a0e3] dark:hover:text-white flex items-center gap-1.5 transition-colors text-[10px] font-black uppercase tracking-widest"
                                    >
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd" />
                                        </svg>
                                        {{ __('translate.back') }}
                                    </button>

                                    <!-- Close Button -->
                                    <button @click="closeCountryModal" class="text-gray-400 hover:text-gray-500 transition-colors">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                                        </svg>
                                    </button>
                                </div>
                            </div>

                            <div class="px-6 pb-4 bg-white dark:bg-gray-800 border-b dark:border-gray-700">
                                <div class="relative mb-4 mt-2">
                                    <span class="absolute inset-y-0 left-0 pl-3 flex items-center text-gray-400">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd" />
                                        </svg>
                                    </span>
                                    <input
                                        v-model="countrySearch"
                                        type="text"
                                        :placeholder="__('translate.search_country')"
                                        class="w-full pl-10 pr-4 py-3 border border-gray-100 rounded-xl dark:bg-gray-700 dark:border-gray-600 dark:text-white focus:ring-2 focus:ring-blue-500/20 focus:border-[#0A2C5C] outline-none transition-all shadow-sm text-[11px] font-bold"
                                    />
                                </div>

                                <!-- Continent quick links -->
                                <div class="flex flex-wrap gap-2 overflow-x-auto pb-2 scrollbar-hide no-scrollbar">
                                    <button
                                        v-for="(countries, continent) in filteredCountries"
                                        :key="'jump-'+continent"
                                        @click="scrollToContinent(continent)"
                                        class="text-[9px] font-black uppercase tracking-wider px-3 py-2 bg-gray-50 dark:bg-gray-700/50 text-[#0A2C5C] dark:text-gray-400 rounded-xl hover:bg-[#0A2C5C] hover:text-white transition-all whitespace-nowrap border border-gray-100 dark:border-gray-600 shadow-sm"
                                    >
                                        {{ continent }}
                                    </button>
                                </div>
                            </div>

                            <div class="flex-1 overflow-y-auto p-4 custom-scrollbar scroll-smooth">
                                <div v-for="(continentCountries, continent) in filteredCountries" :key="continent" :id="'continent-'+continent" class="mb-10">
                                    <h4 class="text-[10px] font-black uppercase tracking-[0.2em] text-[#0A2C5C] dark:text-blue-400 mb-6 px-2 flex items-center gap-2">
                                        <span class="w-1.5 h-1.5 bg-[#0A2C5C] rounded-full shadow-[0_0_8px_rgba(10,44,92,0.4)]"></span>
                                        {{ continent }}
                                    </h4>
                                    <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-4 gap-2">
                                        <button
                                            v-for="country in continentCountries"
                                            :key="country.id"
                                            @click="selectCountry(country.countryCode)"
                                            class="flex items-center gap-2.5 p-2 rounded-xl hover:bg-gray-50 dark:hover:bg-gray-700/50 transition-all text-left group border border-transparent hover:border-gray-100 dark:hover:border-gray-600 shadow-none hover:shadow-sm"
                                        >
                                            <div class="w-7 h-7 rounded-full overflow-hidden flex-shrink-0 border dark:border-gray-600 shadow-sm transition-transform group-hover:scale-110">
                                                <span :class="`fi fi-${getFlagCode((country.countryCode || '').toLowerCase())} scale-125`" style="width: 28px; height: 28px;"></span>
                                            </div>
                                            <div class="flex flex-col min-w-0">
                                                <span class="text-[11px] font-bold text-gray-800 dark:text-gray-200 group-hover:text-[#00a0e3] dark:group-hover:text-blue-400 transition-colors truncate">
                                                    {{ typeof country.name === 'object' ? (country.name[page.props.language] || country.name.en || country.name) : country.name }}
                                                </span>
                                                <span class="text-[9px] text-gray-400 dark:text-gray-500 font-medium uppercase tracking-tighter">{{ country.countryCode }}</span>
                                            </div>
                                        </button>
                                    </div>
                                </div>
                                <div v-if="Object.keys(filteredCountries).length === 0" class="text-center py-12">
                                    <div class="w-16 h-16 bg-gray-50 dark:bg-gray-800 rounded-full flex items-center justify-center mx-auto mb-4">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-gray-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                                        </svg>
                                    </div>
                                    <p class="text-sm font-medium text-gray-500 dark:text-gray-400">
                                        {{ __('translate.no_results') || 'Nie znaleziono krajów' }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </Teleport>
        </main>

        <!-- Mobile Menu -->
        <transition
            enter-active-class="transition duration-300 ease-out"
            enter-from-class="opacity-0 translate-x-full"
            enter-to-class="opacity-100 translate-x-0"
            leave-active-class="transition duration-200 ease-in"
            leave-from-class="opacity-100 translate-x-0"
            leave-to-class="opacity-0 translate-x-full"
        >
            <div v-if="mobileMenuOpen" class="fixed inset-0 z-[100] flex overflow-hidden">
                <div @click="closeMenu" class="absolute inset-0 bg-black/50 backdrop-blur-sm transition-opacity" />
                <div class="relative w-full lg:max-w-sm ml-auto flex flex-col bg-white shadow-2xl overflow-y-auto overscroll-contain">
                    <div class="p-8 border-b border-gray-50 flex items-center justify-between sticky top-0 bg-white z-10">
                        <Link href="/" @click="closeMenu">
                            <img src="/images/logo-header.png" class="h-8 md:h-12 w-auto" :alt="__('translate.logo')" />
                        </Link>
                        <button @click="closeMenu" class="p-2.5 rounded-2xl bg-gray-50 text-gray-400 hover:text-red-600 transition-colors">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-6 w-6">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M6 18L18 6M6 6l12 12"/>
                            </svg>
                        </button>
                    </div>

                    <nav class="flex flex-col p-8 space-y-4">
                        <Link :href="route('front.articles')" @click="closeMenu" class="text-sm font-black text-[#0A2C5C] uppercase tracking-widest py-4 border-b border-gray-50 hover:text-blue-500 transition-colors">
                            {{__('translate.articles')}}
                        </Link>
                        <Link :href="route('front.projects')" @click="closeMenu" class="text-sm font-black text-[#0A2C5C] uppercase tracking-widest py-4 border-b border-gray-50 hover:text-blue-500 transition-colors">
                            {{__('translate.projects')}}
                        </Link>
                        <Link :href="route('front.firms')" @click="closeMenu" class="text-sm font-black text-[#0A2C5C] uppercase tracking-widest py-4 border-b border-gray-50 hover:text-blue-500 transition-colors">
                            {{__('translate.firms')}}
                        </Link>
                        <Link :href="route('front.partners')" @click="closeMenu" class="text-sm font-black text-[#0A2C5C] uppercase tracking-widest py-4 border-b border-gray-50 hover:text-blue-500 transition-colors">
                            {{__('translate.partners')}}
                        </Link>
                        <div class="pt-8 space-y-6">
                            <!-- Country trigger mobile -->
                            <div class="relative w-full">
                                <span class="absolute top-[14px] left-3 text-[8px] font-black text-gray-400 uppercase tracking-widest z-10 pointer-events-none">{{ __('translate.MarketLabel') }}</span>
                                <button
                                    @click="isManualOpen = true; countrySelectionStep = 'list'; showCountryModal = true; closeMenu()"
                                    class="flex items-center gap-3 w-full pl-2 pr-3 h-[60px] rounded-2xl bg-gray-50 hover:bg-gray-100 transition-colors group"
                                >
                                    <span class="text-xl inline-block mt-4">🌐</span>
                                    <span class="text-[10px] font-black text-[#0A2C5C] group-hover:text-[#00a0e3] uppercase tracking-wider inline-flex items-center gap-1 mt-4 w-full text-left">
                                        {{ currentCountryName }}
                                    </span>
                                </button>
                            </div>
                            <div class="custom-multiselect relative pt-2">
                                <span class="absolute top-4 left-4 text-[8px] font-black text-gray-400 uppercase tracking-widest z-10 pointer-events-none">{{ __('translate.language') }}</span>
                                <Multiselect
                                    v-model="lang"
                                    :options="sortLangs"
                                    label="label"
                                    track-by="value"
                                    @select="dispatchAction"
                                    :placeholder="__('translate.placeholder')"
                                    :selectLabel="''"
                                    :selectedLabel="''"
                                    :deselectLabel="''"
                                    class="languages-multiselect"
                                >
                                    <template #singleLabel="{ option }">
                                        <div class="flex items-center gap-2 mt-2">
                                            <span :class="'fi fi-' + getFlagCode(option.value) + ' fis rounded-[2px]'"></span>
                                            <span class="text-[10px] font-black text-[#0A2C5C] uppercase tracking-wider">{{ option.allLabels[option.value] || option.label }}</span>
                                        </div>
                                    </template>
                                    <template #option="{ option }">
                                        <div class="flex items-center gap-2">
                                            <span :class="'fi fi-' + getFlagCode(option.value) + ' fis rounded-[2px]'"></span>
                                            <span class="text-[10px] font-black uppercase tracking-wider">{{ option.allLabels[option.value] || option.label }}</span>
                                        </div>
                                    </template>
                                    <template #noResult>
                                        <span class="text-[10px] uppercase font-bold">{{__('translate.noOptions')}}</span>
                                    </template>
                                    <template #noOptions>
                                        <span class="text-[10px] uppercase font-bold">{{__('translate.noResult')}}</span>
                                    </template>
                                </Multiselect>
                            </div>
                            <button v-if="page.props.currentCountry != page.props.language" @click="resetLang(page.props.currentCountry)" class="w-full text-center text-[10px] font-black uppercase tracking-widest text-[#0A2C5C] hover:underline underline-offset-4">{{ page.props.currentCountry }}</button>

                            <div v-if="auth?.user" class="flex flex-col gap-3">
                                <Link :href="route('dashboard')" @click="closeMenu" class="w-full text-center px-8 py-4 bg-[#0A2C5C] text-white text-[10px] font-black uppercase tracking-widest rounded-2xl shadow-lg shadow-blue-900/20">
                                    {{__('translate.dashboard')}}
                                </Link>
                            </div>
                            <template v-else>
                                <div class="flex flex-col gap-3">
                                    <Link :href="route('login')" @click="closeMenu" class="w-full text-center px-8 py-4 bg-[#0A2C5C] text-white text-[10px] font-black uppercase tracking-widest rounded-2xl shadow-lg shadow-blue-900/20">
                                        {{__('translate.login')}}
                                    </Link>
                                    <Link v-if="page.props.canRegister" :href="route('register')" @click="closeMenu" class="w-full text-center px-8 py-4 bg-red-600 text-white text-[10px] font-black uppercase tracking-widest rounded-2xl shadow-lg shadow-red-900/20">
                                        {{__('translate.register')}}
                                    </Link>
                                </div>
                            </template>
                        </div>
                    </nav>
                </div>
                <div class="flex-1 bg-black/40 backdrop-blur-sm" @click="closeMenu"></div>
            </div>
        </transition>

        <!-- Scroll to top -->
        <button
            v-if="showScrollTop"
            @click="scrollToTop"
            class="fixed right-8 bottom-8 bg-[#0A2C5C] text-white rounded-2xl w-14 h-14 flex items-center justify-center shadow-2xl shadow-blue-900/40 hover:bg-[#00a0e3] transition-all hover:-translate-y-1 z-[110]"
        >
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 10l7-7m0 0l7 7m-7-7v18" />
            </svg>
        </button>

        <!-- Footer -->
<!--        <footer class="bg-white border-t border-gray-100 relative z-50 pt-20 pb-10" :class="{'mt-[-100px]': route().current('front')}">-->
        <footer class="py-5" :class="{'mt-[-100px]': route().current('front')}">
            <div class="mx-auto max-w-7xl px-6 lg:px-8">
                <div class="grid grid-cols-1 lg:grid-cols-12 gap-16 mb-20">
                    <!-- Brand & Socials -->
                    <div class="lg:col-span-4 space-y-8 text-center lg:text-left">
                        <img src="/images/logo-horizontal.png" class="h-4 w-auto mx-auto lg:mx-0" :alt="__('translate.logo')" />
                        <p class="text-sm text-[#0A2C5C] font-medium leading-relaxed max-w-sm mx-auto lg:mx-0 uppercase">
                            {{ __('translate.footer.description') }}
                        </p>
                        <div class="flex items-center justify-center lg:justify-start gap-3">
                            <a v-for="social in socialLinks" :key="social.name" :href="social.url" target="_blank" rel="noopener noreferrer" class="w-10 h-10 bg-gray-50 rounded-xl flex items-center justify-center hover:bg-blue-50 hover:scale-110 transition-all shadow-sm border border-gray-100">
                                <img :src="`/images/icons/${social.name}.png`" :alt="social.name" class="h-5 w-5 opacity-70" />
                            </a>
                        </div>
                    </div>

                    <div class="lg:col-span-8">
                        <div class="grid grid-cols-1 sm:grid-cols-3 gap-12">
                            <div>
                                <h3 class="text-[10px] font-black text-[#0A2C5C] uppercase tracking-[0.2em] mb-8 flex items-center gap-2">
                                    <span class="w-1.5 h-1.5 bg-blue-500 rounded-full"></span>
                                    {{ __('translate.footer.for_candidates') }}
                                </h3>
                                <ul class="space-y-4">
                                    <li v-for="link in [
                                        { route: route('front.projects'), label: 'browse_offers' },
                                        { route: route('front.articles'), label: 'articles_and_guides' },
                                        { route: route('login', { type: 'worker' }), label: 'login' },
                                        { route: route('register', { type: 'worker' }), label: 'register' }
                                    ]" :key="link.label">
                                        <Link :href="link.route" class="text-xs font-bold text-gray-400 uppercase tracking-widest hover:text-[#0A2C5C] transition-colors">
                                            {{ __('translate.footer.' + link.label) }}
                                        </Link>
                                    </li>
                                </ul>
                            </div>

                            <div>
                                <h3 class="text-[10px] font-black text-[#0A2C5C] uppercase tracking-[0.2em] mb-8 flex items-center gap-2">
                                    <span class="w-1.5 h-1.5 bg-red-500 rounded-full"></span>
                                    {{ __('translate.footer.for_companies') }}
                                </h3>
                                <ul class="space-y-4">
                                    <li v-for="link in [
                                        { route: addOfferRoute, label: 'add_offer', isDynamic: true },
                                        { route: route('front.price'), label: 'pricing' },
                                        { route: route('login', { type: 'firm' }), label: 'login' },
                                        { route: route('register', { type: 'firm' }), label: 'register' }
                                    ]" :key="link.label">
                                        <Link v-if="link.isDynamic"
                                              :href="canAddOffer ? link.route : '#'"
                                              :as="canAddOffer ? 'a' : 'button'"
                                              :disabled="!canAddOffer"
                                              class="text-xs font-bold text-gray-400 uppercase tracking-widest hover:text-[#0A2C5C] transition-colors"
                                              :class="!canAddOffer ? 'opacity-50 cursor-not-allowed' : ''">
                                            {{ __('translate.footer.' + link.label) }}
                                        </Link>
                                        <Link v-else :href="link.route" class="text-xs font-bold text-gray-400 uppercase tracking-widest hover:text-[#0A2C5C] transition-colors">
                                            {{ __('translate.footer.' + link.label) }}
                                        </Link>
                                    </li>
                                </ul>
                            </div>

                            <div>
                                <h3 class="text-[10px] font-black text-[#0A2C5C] uppercase tracking-[0.2em] mb-8 flex items-center gap-2">
                                    <span class="w-1.5 h-1.5 bg-green-500 rounded-full"></span>
                                    {{ __('translate.footer.about_us') }}
                                </h3>
                                <ul class="space-y-4">
                                    <li v-for="link in [
                                        { route: route('front.firms'), label: 'companies' },
                                        { route: route('front.aboutus'), label: 'about' },
                                        { route: route('front.contact'), label: 'contact' },
                                        { route: route('front.partners'), label: 'partners' }
                                    ]" :key="link.label">
                                        <Link :href="link.route" class="text-xs font-bold text-gray-400 uppercase tracking-widest hover:text-[#0A2C5C] transition-colors">
                                            {{ __('translate.footer.' + link.label) }}
                                        </Link>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Newsletter & Bottom Bar -->
                <div class="pt-16 border-t border-gray-50">
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center mb-16">
                        <div class="space-y-4">
                            <h3 class="text-2xl font-black text-[#0A2C5C] uppercase tracking-tight">{{ __('translate.footer.stay_in_touch') }}</h3>
                            <p class="text-sm text-[#0A2C5C] font-medium leading-relaxed uppercase">{{ __('translate.footer.newsletter_text') }}</p>
                        </div>
                        <form @submit.prevent="submitForm" class="relative group">
                            <div class="flex flex-col sm:flex-row gap-4">
                                <div class="flex-1 relative">
                                    <input
                                        type="email"
                                        v-model="form.email"
                                        :placeholder="__('translate.footer.email_placeholder')"
                                        class="w-full px-6 py-4 bg-gray-50 border-gray-100 rounded-2xl focus:bg-white focus:ring-0 focus:border-blue-200 transition-all text-xs font-bold placeholder-gray-400 text-[#0A2C5C]"
                                        :class="{'border-red-500': form.errors.email}"
                                    >
                                </div>
                                <button
                                    type="submit"
                                    class="px-10 py-4 bg-[#0A2C5C] text-white text-[10px] font-black uppercase tracking-[0.3em] leading-loose rounded-2xl hover:bg-[#00a0e3] shadow-xl shadow-blue-900/20 transition-all hover:-translate-y-0.5 disabled:opacity-50 disabled:cursor-not-allowed"
                                    :disabled="form.processing"
                                >
                                    {{ __('translate.footer.subscribe') }}
                                </button>
                            </div>

                            <!-- Błędy walidacji pod inputem -->
                            <div class="mt-2 space-y-1">
                                <div v-if="form.errors.email" class="text-[10px] font-black text-red-500 uppercase">
                                    {{ form.errors.email }}
                                </div>
                                <div v-if="form.errors.agreements" class="text-[10px] font-black text-red-500 uppercase">
                                    {{ form.errors.agreements }}
                                </div>
                            </div>

                            <div v-if="newsletterAgreements.length > 0" class="mt-8 space-y-4">
                                <!-- Zaznacz wszystkie -->
                                <div v-if="newsletterAgreements.length > 1" class="flex items-center gap-2 px-1">
                                    <div class="flex items-center h-4">
                                        <Checkbox
                                            id="select-all-agreements"
                                            :checked="isAllNewsletterAgreementsSelected"
                                            @change="toggleAllNewsletterAgreements"
                                            class="w-4 h-4 !rounded !text-[#00a0e3] !border-gray-300 focus:!ring-[#00a0e3]/20"
                                        />
                                    </div>
                                    <label for="select-all-agreements" class="text-[10px] font-black uppercase tracking-widest text-[#0A2C5C] cursor-pointer">
                                        {{ __('translate.selectAll') || 'Zaznacz wszystkie' }}
                                    </label>
                                </div>

                                <!-- Lista zgód -->
                                <div>
                                    <div v-for="agreement in newsletterAgreements" :key="agreement.id" class="px-1 transition-all">
                                        <div class="flex items-start gap-3">
                                            <Checkbox
                                                :id="'newsletter-agreement-' + agreement.id"
                                                v-model:checked="form.agreements"
                                                :value="agreement.id.toString()"
                                                @change="(checked) => toggleAgreement(agreement, checked)"
                                                class="w-4 h-4 !rounded !text-[#00a0e3] mt-0.5"
                                                :class="[
                                                    form.errors.agreements && isAgreementRequired(agreement.id) && !form.agreements.includes(agreement.id.toString())
                                                    ? '!border-red-500 !ring-red-500/20'
                                                    : '!border-gray-300 focus:!ring-[#00a0e3]/20'
                                                ]"
                                            />
                                            <div class="flex-grow min-w-0">
                                                <div class="flex items-center justify-between gap-4">
                                                    <label
                                                        :for="'newsletter-agreement-' + agreement.id"
                                                        class="mt-1 text-[10px] font-bold uppercase tracking-wide cursor-pointer transition-colors"
                                                        :class="form.errors.agreements && isAgreementRequired(agreement.id) && !form.agreements.includes(agreement.id.toString()) ? 'text-red-600' : 'text-[#0A2C5C]'"
                                                    >
                                                        <span v-html="(agreement.title && agreement.title[page.props.language]) || (agreement.title && agreement.title['pl']) || agreement.title"></span>
                                                        <span v-if="isAgreementRequired(agreement.id)" class="text-red-500 ml-1">*</span>
                                                    </label>
                                                    <button
                                                        type="button"
                                                        @click="toggleAgreementExpansion(agreement.id)"
                                                        class="text-[9px] font-bold uppercase tracking-wider text-[#00a0e3] hover:text-[#0A2C5C] transition-colors whitespace-nowrap"
                                                    >
                                                        {{ isAgreementExpanded(agreement.id) ? (__('translate.showLess') || 'Mniej') : (__('translate.showMore') || 'Więcej') }}
                                                    </button>
                                                </div>

                                                <transition
                                                    enter-active-class="transition duration-200 ease-out"
                                                    enter-from-class="opacity-0 -translate-y-1"
                                                    enter-to-class="opacity-100 translate-y-0"
                                                    leave-active-class="transition duration-150 ease-in"
                                                    leave-from-class="opacity-100 translate-y-0"
                                                    leave-to-class="opacity-0 -translate-y-1"
                                                >
                                                    <div v-if="isAgreementExpanded(agreement.id)" class="mt-2 space-y-3">
                                                        <div
                                                            class="text-gray-500 leading-relaxed font-medium text-[11px] normal-case [&_a]:underline [&_a]:text-blue-600 hover:[&_a]:text-blue-800 transition-colors"
                                                            :class="{'text-red-600': form.errors.agreements && isAgreementRequired(agreement.id) && !form.agreements.includes(agreement.id.toString())}"
                                                            v-html="(agreement.description && agreement.description[page.props.language]) || (agreement.description && agreement.description['pl'])"
                                                        ></div>

                                                        <!-- Podzgody -->
                                                        <div v-if="agreement.children && agreement.children.length > 0" class="pl-4 space-y-2 border-l border-gray-100 mt-2">
                                                            <div v-for="child in agreement.children" :key="child.id" class="flex items-start gap-2">
                                                                <Checkbox
                                                                    :id="'newsletter-agreement-' + child.id"
                                                                    v-model:checked="form.agreements"
                                                                    :value="child.id.toString()"
                                                                    @change="toggleChildAgreement(agreement)"
                                                                    class="w-3.5 h-3.5 !rounded-sm !text-[#00a0e3] mt-0.5 !border-gray-200 focus:!ring-[#00a0e3]/10"
                                                                />
                                                                <label
                                                                    :for="'newsletter-agreement-' + child.id"
                                                                    class="text-[10px] font-medium normal-case cursor-pointer [&_a]:underline [&_a]:text-blue-500 hover:[&_a]:text-blue-700 transition-colors"
                                                                    :class="form.errors.agreements && child.is_required && !form.agreements.includes(child.id.toString()) ? 'text-red-600 font-bold' : 'text-gray-400'"
                                                                >
                                                                    <span v-html="(child.description && child.description[page.props.language]) || (child.description && child.description['pl'])"></span>
                                                                    <span v-if="child.is_required" class="text-red-500 ml-1">*</span>
                                                                </label>
                                                            </div>
                                                        </div>

                                                        <div v-if="agreement.help_text && (agreement.help_text[page.props.language] || agreement.help_text['pl'])"
                                                            class="text-[9px] text-[#0A2C5C]/70 font-medium normal-case leading-relaxed bg-blue-50/30 p-2 rounded-lg border border-blue-100/30 italic [&_a]:underline">
                                                            <div v-html="(agreement.help_text && agreement.help_text[page.props.language]) || (agreement.help_text && agreement.help_text['pl'])"></div>
                                                        </div>
                                                    </div>
                                                </transition>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </form>
                    </div>

                    <div class="flex flex-col lg:flex-row justify-between items-center gap-8 pt-8 border-t border-gray-50">
                        <div class="flex flex-wrap justify-center gap-6 text-[10px] font-black text-gray-400 uppercase tracking-widest">
                            <Link class="text-[#0A2C5C] uppercase" :href="route('front.privacy')">{{ __('translate.footer.privacy_policy') }}</Link>
                            <Link class="text-[#0A2C5C] uppercase" :href="route('front.owner')">{{ __('translate.footer.owner') }}</Link>
                            <Link class="text-[#0A2C5C] uppercase" :href="route('front.terms')">{{ __('translate.footer.terms') }}</Link>
                        </div>
                        <p class="text-[10px] font-black text-[#0A2C5C] uppercase tracking-[0.2em]">
                            {{ __('translate.footer.copyright') }}
                        </p>
                    </div>
                </div>
            </div>
        </footer>
<!--        <CookieConsent />-->
    </div>
</template>
<style src="vue-multiselect/dist/vue-multiselect.css"></style>
<style lang="scss">
.custom-multiselect {
    .multiselect__tags {
        border: 1px solid #f3f4f6; /* border-gray-100 */
        border-radius: 0.75rem; /* rounded-xl (12px) */
        padding: 6px 30px 4px 16px; /* Zmniejszony padding dla dopasowania */
        background: #f9fafb; /* bg-gray-50 */
        transition: all 0.3s ease;
        min-height: 38px; /* Dopasowanie do wysokości triggera rynku */
        display: flex;
        align-items: center;
    }

    .multiselect__placeholder {
        margin-bottom: 0;
        padding-top: 0;
        color: #9ca3af; /* text-gray-400 */
        font-size: 10px; /* text-[10px] */
        font-weight: 900; /* font-black */
        text-transform: uppercase;
        letter-spacing: 0.1em;
        line-height: 24px;
    }

    .multiselect__single {
        margin-bottom: 0;
        padding-left: 0;
        font-size: 10px; /* text-[10px] */
        background: transparent;
        font-weight: 900; /* font-black */
        text-transform: uppercase;
        letter-spacing: 0.1em;
        line-height: 24px;
    }

    .multiselect__input,
    .multiselect__single {
        color: #0A2C5C !important;
    }

    .multiselect__input {
        margin-bottom: 0;
        background: transparent;
        font-size: 10px;
        font-weight: 900;
        line-height: 24px;
    }

    .multiselect__select {
        height: 38px;
        width: 30px;
    }

    .multiselect__option--highlight {
        background: #0A2C5C !important;
        outline: none;
        color: white;
        font-size: 10px;
        font-weight: 900;
        text-transform: uppercase;
        letter-spacing: 0.1em;
    }

    .multiselect__option--selected {
        background: #f3f4f6 !important;
        color: #0A2C5C;
        font-weight: 900;
    }

    .multiselect__content-wrapper {
        border: 1px solid #f3f4f6;
        border-top: none;
        border-bottom-left-radius: 0.75rem;
        border-bottom-right-radius: 0.75rem;
        box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1);
        z-index: 50 !important;
        width: auto !important;
        min-width: 100%;
        white-space: nowrap;
    }

    .multiselect__tag {
        background: #00a0e3 !important;
        border-radius: 0.5rem;
        font-size: 9px;
        font-weight: 900;
        text-transform: uppercase;
        letter-spacing: 0.1em;
    }

    .multiselect__tag-icon:after {
        color: white !important;
    }

    .multiselect__tag-icon:hover {
        background: #0088c2 !important;
    }
    .multiselect__tag-icon{
        top:-3px !important
    }
}
.languages-multiselect{
    .multiselect__single,
    .multiselect__input,
    .multiselect__option,
    .multiselect__option--highlight {
        font-size: 10px !important;
        text-transform: uppercase !important;
        font-weight: 900 !important;
        letter-spacing: 0.1em !important;
    }

    .multiselect__tags {
        padding: 0 30px 0 16px !important;
        display: flex !important;
        align-items: center !important;
    }

    .multiselect__placeholder {
        line-height: 38px !important; /* height - borders */
    }

    .multiselect__single {
        line-height: 38px !important;
    }

    .multiselect__input {
        line-height: 38px !important;
        padding: 0 !important;
    }

    .multiselect__tag {
        font-size: 8px !important;
        text-transform: uppercase !important;
    }

    .fi {
        width: 14px;
        height: 14px;
        border-radius: 2px;
    }
}
</style>
