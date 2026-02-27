<script setup>
import FrontLayout from "@/Layouts/FrontLayout.vue";
import {Link} from '@inertiajs/vue3';
import {ref, onMounted, nextTick} from 'vue';
import moment from "moment";
import CommentSection from "@/Components/Comments/CommentSection.vue";
import {usePermission} from "@/Composables/usePermission.js";


const {hasRole} = usePermission();
const props = defineProps({
    article: Object,
    sidebarSections: {
        type: Array,
        default: () => []
    },
    allOtherArticles: {
        type: Array,
        default: () => []
    },
});
const copied = ref(false);
const isClient = ref(false);

const headings = ref([]);

onMounted(() => {
    isClient.value = true;
});

// Funkcja generująca unikalny ID dla nagłówków
function generateId(text, index) {
    return text.toLowerCase().replace(/\s+/g, '-').replace(/[^\w-]/g, '') + '-' + index;
}

function copyLink() {
    if (!isClient.value) return;

    const url = window.location.href; // lub inny link do skopiowania
    if (navigator.clipboard) {
        navigator.clipboard.writeText(url)
            .then(() => {
                copied.value = true;
                setTimeout(() => {
                    copied.value = false;
                }, 1000); // komunikat znika po 1s
            })
            .catch(err => {
                console.error('Błąd przy kopiowaniu do schowka:', err);
            });
    }
}

// Spis treści po renderze
onMounted(async () => {
    if (!isClient.value) return;

    await nextTick();
    const articleContent = document.querySelector('.article-content');
    if (!articleContent) return;

    const nodes = articleContent.querySelectorAll('h1, h2, h3, h4, h5, h6');

    headings.value = Array.from(nodes).map((node, index) => {
        const id = generateId(node.innerText, index);
        node.id = id;
        return {text: node.innerText, tag: node.tagName, id};
    });
});

// Share
const shareUrl = ref('');
const shareText = ref('');

onMounted(() => {
    if (!isClient.value) return;
    shareUrl.value = window.location.href;
    shareText.value = props.article.title;
});

function openShare(url) {
    if (!isClient.value) return;
    window.open(url, '_blank', 'noopener,noreferrer,width=600,height=500');
}

function scrollToHeading(id) {
    if (!isClient.value) return;
    const element = document.getElementById(id);
    if (element) element.scrollIntoView({behavior: 'smooth', block: 'start'});
}

function shareOnInstagram() {
    if (!isClient.value) return;
    if (navigator.clipboard) navigator.clipboard.writeText('');
    window.open('https://www.instagram.com/', '_blank', 'noopener,noreferrer,width=600,height=500');
}
</script>

<template>
    <FrontLayout
        :title="article.title || __('translate.article')"
        :description="article.title || ''"
        :keywords="__('translate.meta_keywords_default')"
        type="article"
        :publishedAt="moment(article.created_at).format('YYYY-MM-DD')"
        :modifiedAt="moment(article.created_at).format('YYYY-MM-DD')"
        :author="article.user?.name"
        image="https://via.placeholder.com/1200x630.png?text=Article+Image"
    >
        <div class="py-12 bg-gray-50/50 min-h-screen singleArticle font-sans">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

                <!-- BACK BUTTON -->
                <div class="mb-8">
                    <Link :href="route('front.articles')" class="inline-flex items-center gap-2 rounded-2xl border border-gray-100 bg-white px-6 py-3 text-xs font-black uppercase tracking-widest text-[#0A2C5C] shadow-sm hover:bg-gray-50 transition-all hover:-translate-y-0.5">
                        <span class="text-lg leading-none">←</span>
                        {{ __('translate.backToList') }}
                    </Link>
                </div>

                <div class="flex flex-col lg:flex-row gap-8">
                    <!-- MAIN CONTENT COLUMN -->
                    <div class="flex-1 space-y-8">
                        <article class="bg-white rounded-[3rem] shadow-xl shadow-blue-900/5 border border-gray-100 overflow-hidden">
                            <!-- Hero Image -->
                            <div class="relative h-[300px] md:h-[500px] overflow-hidden bg-gray-50">
                                <img class="w-full h-full object-cover" :src="article.photo?.original_url" :alt="article.title">
                                <div class="absolute inset-0 bg-gradient-to-t from-white via-transparent to-transparent opacity-60"></div>
                            </div>

                            <div class="p-8 md:p-16 -mt-20 relative z-10">
                                <div class="bg-white rounded-[2.5rem] p-8 md:p-12 shadow-2xl shadow-blue-900/10 border border-gray-50">
                                    <div class="flex items-center gap-4 mb-6">
                                        <span class="px-4 py-1.5 bg-blue-50 text-[#0A2C5C] text-[10px] font-black uppercase tracking-widest rounded-xl border border-blue-100">
                                            {{ article.category?.name }}
                                        </span>
                                        <span class="text-[10px] font-bold text-gray-400 uppercase tracking-widest">
                                            {{ moment(article.created_at).format('DD.MM.YYYY') }}
                                        </span>
                                    </div>

                                    <h1 class="text-3xl md:text-5xl font-black text-[#0A2C5C] uppercase tracking-tight leading-tight mb-8">
                                        {{ article.title }}
                                    </h1>

                                    <div class="prose max-w-none mb-12">
                                        <p class="text-xl font-bold text-gray-500 leading-relaxed italic border-l-4 border-blue-500 pl-6" v-html="article.short_description"></p>
                                    </div>

                                    <!-- Table of Contents -->
                                    <div v-if="headings.length" class="mb-12 p-8 bg-gray-50 rounded-[2rem] border border-gray-100 shadow-inner">
                                        <div class="flex items-center gap-4 mb-6">
                                            <h3 class="text-[10px] font-black text-[#0A2C5C] uppercase tracking-[0.2em]">{{ __('translate.article_in_brief') }}</h3>
                                            <div class="h-px flex-1 bg-gray-200"></div>
                                        </div>
                                        <nav>
                                            <ul class="space-y-3">
                                                <li v-for="heading in headings" :key="heading.id" class="flex items-center gap-3 group">
                                                    <div class="w-1.5 h-1.5 rounded-full bg-blue-400 group-hover:scale-150 transition-transform"></div>
                                                    <a class="text-sm font-bold text-gray-600 hover:text-blue-600 transition-colors cursor-pointer uppercase tracking-wide" @click.prevent="scrollToHeading(heading.id)">
                                                        {{ heading.text }}
                                                    </a>
                                                </li>
                                            </ul>
                                        </nav>
                                    </div>

                                    <!-- Main Content -->
                                    <div class="article-content rich-text" v-html="article.content"></div>

                                    <!-- Footer Info -->
                                    <div class="mt-12 pt-8 border-t border-gray-50 flex flex-wrap items-center justify-between gap-6">
                                        <span class="text-[10px] font-black text-[#0A2C5C] uppercase tracking-widest">
                                            {{ __('translate.published_at') }}: {{ moment(article.created_at).format('DD.MM.YYYY HH:mm') }}
                                        </span>

                                        <!-- Share Buttons -->
                                        <div v-if="isClient" class="flex items-center gap-4">
                                            <p class="text-[10px] font-black text-gray-400 uppercase tracking-widest">{{ __('translate.share_article') }}</p>
                                            <div class="flex gap-2">
                                                <button @click="openShare(`https://www.facebook.com/sharer/sharer.php?u=${encodeURIComponent(shareUrl)}`)" class="w-10 h-10 bg-gray-50 rounded-xl flex items-center justify-center hover:bg-blue-50 hover:scale-110 transition-all shadow-sm border border-gray-100">
                                                    <img src="/images/icons/facebook.svg" alt="facebook" class="w-5 h-5 opacity-70" />
                                                </button>
                                                <button @click="shareOnInstagram()" class="w-10 h-10 bg-gray-50 rounded-xl flex items-center justify-center hover:bg-pink-50 hover:scale-110 transition-all shadow-sm border border-gray-100">
                                                    <img src="/images/icons/instagram.svg" alt="instagram" class="w-5 h-5 opacity-70" />
                                                </button>
                                                <button @click="openShare(`https://www.linkedin.com/sharing/share-offsite/?url=${encodeURIComponent(shareUrl)}`)" class="w-10 h-10 bg-gray-50 rounded-xl flex items-center justify-center hover:bg-blue-50 hover:scale-110 transition-all shadow-sm border border-gray-100">
                                                    <img src="/images/icons/linkedin.svg" alt="linkedin" class="w-5 h-5 opacity-70" />
                                                </button>
                                                <button @click="copyLink" class="relative w-10 h-10 bg-gray-50 rounded-xl flex items-center justify-center hover:bg-gray-100 hover:scale-110 transition-all shadow-sm border border-gray-100">
                                                    <img src="/images/icons/link.svg" alt="link" class="w-5 h-5 opacity-70" />
                                                    <transition enter-active-class="transition duration-300 ease-out" enter-from-class="opacity-0 -translate-y-2" enter-to-class="opacity-100 translate-y-0">
                                                        <span v-if="copied" class="absolute -top-10 left-1/2 -translate-x-1/2 bg-[#0A2C5C] text-white text-[8px] font-black uppercase tracking-widest px-3 py-1.5 rounded-lg shadow-xl whitespace-nowrap">
                                                            {{ __('translate.copied') }}
                                                        </span>
                                                    </transition>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </article>

                        <!-- Author Card -->
                        <div v-if="article.user" class="bg-white rounded-[3rem] shadow-xl shadow-blue-900/5 border border-gray-100 p-8 md:p-12 flex flex-col md:flex-row items-center gap-8 group">
                            <div class="w-24 h-24 rounded-[2rem] bg-gray-50 flex items-center justify-center overflow-hidden border-4 border-white shadow-xl group-hover:scale-105 transition-transform duration-500">
                                <img class="w-full h-full object-contain" :src="article.user.logo" :alt="article.user.name">
                            </div>
                            <div class="flex-1 text-center md:text-left">
                                <p class="text-[10px] font-black text-gray-400 uppercase tracking-widest mb-2">{{ __('translate.written_by') }}</p>
                                <h2 class="text-2xl font-black text-[#0A2C5C] uppercase tracking-tight mb-2">{{ article.user.name }}</h2>
                                <p class="text-gray-500 font-medium leading-relaxed">{{ article.user.description }}</p>
                            </div>
                        </div>

                        <!-- Comments Section -->
                        <div class="bg-white rounded-[3rem] shadow-xl shadow-blue-900/5 border border-gray-100 p-8 md:p-12">
                            <CommentSection
                                :article-id="article.id"
                                :comments="article.comments"
                                :user="$page.props.auth.user"
                            />
                        </div>
                    </div>

                    <!-- SIDEBAR -->
                    <aside class="lg:w-1/3 space-y-8">
                        <!-- Sidebar Sections (Categories & Featured) -->
                        <div v-for="(section, index) in sidebarSections" :key="index" class="bg-white rounded-[3rem] shadow-xl shadow-blue-900/5 border border-gray-100 p-8">
                            <div v-if="section.categories?.length" class="flex flex-wrap gap-2 mb-8">
                                <Link
                                    v-for="category in section.categories"
                                    :key="category.value"
                                    :href="route('front.groupArticles', { category: category.value })"
                                    class="px-4 py-2 bg-gray-50 border border-gray-100 text-[#0A2C5C] text-[10px] font-black uppercase tracking-widest rounded-xl hover:bg-[#0A2C5C] hover:text-white transition-all shadow-sm"
                                >
                                    {{ category.name }}
                                </Link>
                            </div>

                            <div v-if="section.articles?.length" class="space-y-6">
                                <div class="flex items-center gap-4 mb-6">
                                    <h3 class="text-[10px] font-black text-[#0A2C5C] uppercase tracking-[0.2em]">{{ __('translate.recommended') }}</h3>
                                    <div class="h-px flex-1 bg-gray-100"></div>
                                </div>
                                <Link
                                    v-for="sidebarArticle in section.articles"
                                    :key="sidebarArticle.id"
                                    :href="route('front.articles.single', sidebarArticle.id)"
                                    class="group flex gap-4 items-center"
                                >
                                    <div class="w-20 h-20 rounded-2xl overflow-hidden bg-gray-50 shrink-0 shadow-sm">
                                        <div class="w-full h-full bg-center bg-cover transition-transform duration-500 group-hover:scale-110" :style="`background-image: url(${sidebarArticle.image});`"></div >
                                    </div>
                                    <div class="min-w-0">
                                        <h4 class="text-sm font-black text-[#0A2C5C] uppercase tracking-tight leading-tight line-clamp-2 group-hover:text-blue-600 transition-colors">
                                            {{ sidebarArticle.title }}
                                        </h4>
                                    </div>
                                </Link>
                            </div>
                        </div>

                        <!-- allOtherArticles -->
                        <div v-if="allOtherArticles.length" class="bg-[#0A2C5C] rounded-[3rem] shadow-2xl shadow-blue-900/20 border border-white/10 p-8 md:p-10 relative overflow-hidden group/sidebar">
                            <!-- Background decoration -->
                            <div class="absolute top-0 right-0 w-40 h-40 bg-blue-400/10 rounded-full -mr-20 -mt-20 blur-3xl transition-transform duration-700 group-hover/sidebar:scale-125"></div>
                            <div class="absolute bottom-0 left-0 w-32 h-32 bg-indigo-500/5 rounded-full -ml-16 -mb-16 blur-2xl"></div>

                            <div class="relative z-10 space-y-8">
                                <div class="flex items-center gap-4">
                                    <h3 class="text-[10px] font-black !text-white uppercase tracking-[0.2em]">{{ __('translate.more_articles') }}</h3>
                                    <div class="h-px flex-1 bg-white/10"></div>
                                </div>

                                <div class="space-y-8">
                                    <Link
                                        v-for="otherArticle in allOtherArticles"
                                        :key="otherArticle.id"
                                        :href="route('front.articles.single', otherArticle.id)"
                                        class="group block relative"
                                    >
                                        <div class="flex flex-col">
                                            <div class="flex items-center gap-2 mb-2">
                                                <span class="w-1 h-1 rounded-full bg-white group-hover:bg-blue-400 transition-all"></span>
                                                <p class="text-[9px] font-black !text-white uppercase tracking-widest opacity-80 group-hover:opacity-100 transition-colors">
                                                    {{ moment(otherArticle.created_at).format('DD.MM.YYYY') }}
                                                </p>
                                            </div>
                                            <h4 class="text-sm font-black !text-white uppercase tracking-tight leading-snug group-hover:!text-blue-300 transition-all duration-300 line-clamp-2">
                                                {{ otherArticle.title }}
                                            </h4>
                                        </div>

                                        <!-- Hover line decoration -->
                                        <div class="absolute -left-4 top-0 bottom-0 w-0.5 bg-blue-400 scale-y-0 group-hover:scale-y-100 transition-transform origin-center duration-300 rounded-full"></div>
                                    </Link>
                                </div>

                                <!-- Decorative CTA/Link -->
                                <Link :href="route('front.articles')" class="flex items-center justify-center gap-2 w-full py-4 mt-4 bg-white/5 hover:bg-white/10 border border-white/10 rounded-2xl text-[10px] font-black !text-white uppercase tracking-widest transition-all hover:gap-4">
                                    {{ __('translate.check_all') }}
                                    <span class="text-lg leading-none">→</span>
                                </Link>
                            </div>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </FrontLayout>
</template>
<style lang="scss">
.singleArticle {
    img {
        max-width: 100%;
    }

    // Nagłówki
    h1 {
        font-size: 1.8rem;
        font-weight: 700;
        margin: 1.5rem 0 1rem 0;
        color: #0a2c5c;
    }

    h2 {
        font-size: 1.6rem;
        font-weight: 600;
        margin: 1.4rem 0 0.9rem 0;
        color: #0a2c5c;
    }

    h3 {
        font-size: 1.4rem;
        font-weight: 600;
        margin: 1.2rem 0 0.8rem 0;
        color: #0a2c5c;
    }

    h4 {
        font-size: 1.2rem;
        font-weight: 500;
        margin: 1rem 0 0.6rem 0;
        color: #0a2c5c;
    }

    h5 {
        font-size: 1rem;
        font-weight: 500;
        margin: 0.9rem 0 0.5rem 0;
        color: #0a2c5c;
    }

    h6 {
        font-size: 0.9rem;
        font-weight: 500;
        margin: 0.8rem 0 0.4rem 0;
        color: #0a2c5c;
    }

    // Listy
    ul {
        list-style-type: disc;
        padding-left: 1.5rem;
        margin: 0.5rem 0;
    }

    ol {
        list-style-type: decimal;
        padding-left: 1.5rem;
        margin: 0.5rem 0;
    }

    li {
        margin: 0.25rem 0;
    }

    // YouTube wideo
    iframe {
        display: block;
        width: 100% !important; // pełna szerokość
        height: auto; // proporcje dopasują się przy responsywności
        aspect-ratio: 16/9; // zachowanie proporcji 16:9
        margin: 1rem 0;
        border: none;
    }

    // Cytaty i kod
    blockquote {
        border-left: 3px solid #ccc;
        padding-left: 1rem;
        margin: 1rem 0;
    }

    code {
        background-color: #f5f5f5;
        padding: 0.2rem 0.4rem;
        border-radius: 4px;
        font-family: monospace;
    }

    pre {
        background-color: #f0f0f0;
        padding: 0.75rem;
        border-radius: 4px;
        overflow-x: auto;
    }

    // Linki
    p {
        color: #0a2c5c;
    }
}
</style>
