<script setup>
import FrontLayout from "@/Layouts/FrontLayout.vue";
import { Link } from '@inertiajs/vue3';
import { ref, onMounted, nextTick } from 'vue';
import moment from "moment";

const props = defineProps({
    article: Object,
});

const headings = ref([]);

// SSR-safe check
const isClient = typeof window !== 'undefined' && typeof navigator !== 'undefined';

// Funkcja generująca unikalny ID dla nagłówków
function generateId(text, index) {
    return text.toLowerCase().replace(/\s+/g, '-').replace(/[^\w-]/g, '') + '-' + index;
}

// Spis treści po renderze
onMounted(async () => {
    if (!isClient) return;

    await nextTick();
    const articleContent = document.querySelector('.article-content');
    if (!articleContent) return;

    const nodes = articleContent.querySelectorAll('h1, h2, h3, h4, h5, h6');

    headings.value = Array.from(nodes).map((node, index) => {
        const id = generateId(node.innerText, index);
        node.id = id;
        return { text: node.innerText, tag: node.tagName, id };
    });
});

// Share
const shareUrl = ref('');
const shareText = ref('');

onMounted(() => {
    if (!isClient) return;
    shareUrl.value = window.location.href;
    shareText.value = props.article.title;
});

function openShare(url) {
    if (!isClient) return;
    window.open(url, '_blank', 'noopener,noreferrer,width=600,height=500');
}

function scrollToHeading(id) {
    if (!isClient) return;
    const element = document.getElementById(id);
    if (element) element.scrollIntoView({ behavior: 'smooth', block: 'start' });
}

function shareOnInstagram() {
    if (!isClient) return;
    if (navigator.clipboard) navigator.clipboard.writeText('');
    window.open('https://www.instagram.com/', '_blank', 'noopener,noreferrer,width=600,height=500');
}
</script>

<template>
    <FrontLayout
        :title="article.title || 'Artykuł'"
        :description="article.title || ''"
        keywords="test, artykuł"
        image="https://via.placeholder.com/1200x630.png?text=Article+Image"
    >
        <div class="py-12 singleArticle">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 flex flex-col lg:flex-row gap-6">

                <!-- Main Column -->
                <div class="flex-1">
                    <div class="bg-white dark:bg-gray-800 overflow-hidden">
                        <h2 class="font-bold text-2xl mb-4">{{ article.title }}</h2>
                        <div class="h-[400px] mb-4">
                            <img class="w-full h-full object-cover" :src="article.photo?.original_url" :alt="article.title">
                        </div>

                        <Link :href="route('front.articles')" class="font-bold text-xl underline p-4 block">
                            Powrót do listy
                        </Link>

                        <p class="py-5" v-html="article.short_description"></p>

                        <!-- Table of Contents -->
                        <div v-if="headings.length" class="mb-6 p-4 border rounded border-[#0B2B4C]">
                            <h3 class="font-semibold mb-2 pl-6 uppercase text-[#0B2B4C]">Artykuł w skrócie:</h3>
                            <ul class="pl-5">
                                <li v-for="heading in headings" :key="heading.id" class="mb-1 cursor-pointer hover:font-semibold">
                                    <a @click.prevent="scrollToHeading(heading.id)">{{ heading.text }}</a>
                                </li>
                            </ul>
                        </div>

                        <div class="article-content" v-html="article.content"></div>
                        <span>Opublikowano: {{ moment(article.created_at).format('DD.MM.YYYY HH:mm') }}</span>

                        <!-- Share Buttons -->
                        <p class="font-bold mt-4">Udostępnij artykuł</p>
                        <div class="flex gap-3 mt-2">
                            <button
                                @click="openShare(`https://www.facebook.com/sharer/sharer.php?u=${encodeURIComponent(shareUrl)}`)"
                                class="p-2 rounded-full bg-blue-600 text-white hover:bg-blue-700">
                                <i class="fab fa-facebook-f"></i>
                            </button>
                            <button
                                @click="shareOnInstagram()"
                                class="p-2 rounded-full bg-pink-500 text-white hover:bg-pink-600">
                                <i class="fab fa-instagram"></i>
                            </button>
                            <button
                                @click="openShare(`https://api.whatsapp.com/send?text=${encodeURIComponent(shareText + ' ' + shareUrl)}`)"
                                class="p-2 rounded-full bg-green-500 text-white hover:bg-green-600">
                                <i class="fab fa-whatsapp"></i>
                            </button>
                            <button
                                @click="openShare(`https://www.linkedin.com/sharing/share-offsite/?url=${encodeURIComponent(shareUrl)}`)"
                                class="p-2 rounded-full bg-blue-700 text-white hover:bg-blue-800">
                                <i class="fab fa-linkedin-in"></i>
                            </button>
                        </div>


                        <!-- Author -->
                        <div v-if="article.user" class="flex items-center gap-6 mt-6">
                            <img class="w-16 h-16 object-contain" :src="article.user.logo" :alt="article.user.name">
                            <div class="flex flex-col">
                                <h2 class="font-bold">{{ article.user.name }}</h2>
                                <p>{{ article.user.description }}</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Sidebar -->
                <aside class="lg:w-1/4 w-full bg-red-100 p-4">
                    Sidebar
                </aside>

            </div>
        </div>
    </FrontLayout>
</template>
<style lang="scss">
.singleArticle{
    img {
        max-width: 100%;
    }

    // Nagłówki
    h1 { font-size: 1.8rem; font-weight: 700; margin: 1.5rem 0 1rem 0;color:#0B2B4C; }
    h2 { font-size: 1.6rem; font-weight: 600; margin: 1.4rem 0 0.9rem 0;color:#0B2B4C; }
    h3 { font-size: 1.4rem; font-weight: 600; margin: 1.2rem 0 0.8rem 0;color:#0B2B4C; }
    h4 { font-size: 1.2rem; font-weight: 500; margin: 1rem 0 0.6rem 0;color:#0B2B4C; }
    h5 { font-size: 1rem; font-weight: 500; margin: 0.9rem 0 0.5rem 0;color:#0B2B4C; }
    h6 { font-size: 0.9rem; font-weight: 500; margin: 0.8rem 0 0.4rem 0;color:#0B2B4C; }

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
        width: 100% !important;   // pełna szerokość
        height: auto;             // proporcje dopasują się przy responsywności
        aspect-ratio: 16/9;       // zachowanie proporcji 16:9
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
    p{
        color:#0B2B4C;
    }
}
</style>
