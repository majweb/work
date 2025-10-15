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

const headings = ref([]);

// SSR-safe check
const isClient = typeof window !== 'undefined' && typeof navigator !== 'undefined';

// Funkcja generująca unikalny ID dla nagłówków
function generateId(text, index) {
    return text.toLowerCase().replace(/\s+/g, '-').replace(/[^\w-]/g, '') + '-' + index;
}

function copyLink() {
    if (typeof window === 'undefined' || typeof navigator === 'undefined') return;

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
    if (!isClient) return;

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
    if (element) element.scrollIntoView({behavior: 'smooth', block: 'start'});
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
        type="article"
        :publishedAt="moment(article.created_at).format('YYYY-MM-DD')"
        :modifiedAt="moment(article.created_at).format('YYYY-MM-DD')"
        :author="article.user?.name"
        image="https://via.placeholder.com/1200x630.png?text=Article+Image"
    >
        <div class="py-12 singleArticle">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 flex flex-col lg:flex-row gap-6">

                <!-- Main Column -->
                <div class="flex-1">
                    <div class="bg-white dark:bg-gray-800 overflow-hidden">
                        <h1 class="font-bold text-2xl mb-4">{{ article.title }}</h1>
                        <div class="h-[400px] mb-4">
                            <img class="w-full h-full object-cover" :src="article.photo?.original_url"
                                 :alt="article.title">
                        </div>

                        <Link :href="route('front.articles')" class="font-bold text-xl underline p-4 block">
                            Powrót do listy
                        </Link>

                        <p class="py-5" v-html="article.short_description"></p>

                        <!-- Table of Contents -->
                        <div v-if="headings.length" class="mb-6 p-4 border rounded border-[#0B2B4C]">
                            <h3 class="font-semibold mb-2 pl-6 uppercase text-[#0B2B4C]">Artykuł w skrócie:</h3>
                            <ul class="pl-5">
                                <li v-for="heading in headings" :key="heading.id"
                                    class="mb-1 cursor-pointer hover:font-semibold">
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
                                title="facebook"
                                @click="openShare(`https://www.facebook.com/sharer/sharer.php?u=${encodeURIComponent(shareUrl)}`)">
                                <img src="/images/icons/facebook.svg" alt="facebook"
                                     class="h-10 w-10 transition hover:scale-95"/>
                            </button>
                            <button
                                title="instagram"
                                @click="shareOnInstagram()">
                                <img src="/images/icons/instagram.svg" alt="instagram"
                                     class="h-10 w-10 transition hover:scale-95"/>
                            </button>
                            <button
                                title="whatsapp"
                                @click="openShare(`https://api.whatsapp.com/send?text=${encodeURIComponent(shareText + ' ' + shareUrl)}`)">
                                <i class="fab fa-whatsapp"></i>
                                <img src="/images/icons/whats_app.svg" alt="whats_app"
                                     class="h-10 w-10 transition hover:scale-95"/>
                            </button>
                            <button
                                title="linkedin"
                                @click="openShare(`https://www.linkedin.com/sharing/share-offsite/?url=${encodeURIComponent(shareUrl)}`)">
                                <img src="/images/icons/linkedin.svg" alt="linkedin"
                                     class="h-10 w-10 transition hover:scale-95"/>
                            </button>
                            <button @click="copyLink" class="relative"
                                    title="link"
                            >
                                <img src="/images/icons/link.svg" alt="link"
                                     class="h-10 w-10 transition hover:scale-95"/>
                                <span
                                    v-if="copied"
                                    class="absolute top-0 left-1/2 -translate-x-1/2 -translate-y-full bg-black text-white text-sm px-2 py-1 rounded shadow">
                Skopiowano!
            </span>
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
                        <div class="mt-12">
                            {{ console.log(article) }}

                            <!-- Tylko użytkownicy z rolą 'worker' mogą komentować -->
                            <CommentSection
                                :article-id="article.id"
                                :comments="article.comments"
                                :user="$page.props.auth.user"
                            />
                        </div>

                    </div>
                </div>

                <!-- Sidebar -->
                <aside class="lg:w-1/4 w-full p-4">
                    <div v-for="(section, index) in sidebarSections" :key="index" class="mb-6 border-b pb-4" v-if="sidebarSections">
                        <!-- Kategorie -->
                        <div class="flex flex-wrap gap-2 mb-4">
                            <Link
                                v-for="category in section.categories"
                                :key="category.value"
                                :href="route('front.groupArticles', { category: category.value })"
                                class="hover:scale-95 uppercase bg-[#0B2B4C] text-white font-semibold px-6 py-2 rounded-md hover:bg-[#133C69] transition block whitespace-nowrap"
                            >
                                {{ category.name }}
                            </Link>
                        </div>

                        <!-- Artykuły -->
                        <div class="grid grid-cols-1 gap-4">
                            <article
                                v-for="article in section.articles"
                                :key="article.id"
                                class="flex flex-col items-start overflow-hidden bg-white rounded shadow"
                            >
                                <div class="w-full flex items-center justify-center">
                                    <div
                                        class="w-full md:w-[280px] aspect-[4/3] bg-center bg-cover"
                                        :style="`background-image: url(${article.image});`"
                                    ></div>
                                </div>
                                <div class="p-6">
                                    <h3 class="text-[#0B2B4C] text-lg font-bold mb-2 hover:underline">
                                        <Link :href="route('front.articles.single', article.id)">
                                            {{ article.title }}
                                        </Link>
                                    </h3>
                                </div>
                            </article>
                        </div>
                    </div>

                    <!-- Dodatkowe artykuły (inne niż obecny) -->
                    <div class="mt-6">
                        <div class="grid grid-cols-1 gap-4">
                            <article
                                v-for="article in allOtherArticles"
                                :key="article.id"
                                class="flex flex-col items-start overflow-hidden bg-white rounded shadow"
                            >
                                <div class="w-full flex items-center justify-center">
                                    <div
                                        class="w-full md:w-[280px] aspect-[4/3] bg-center bg-cover"
                                        :style="`background-image: url(${article.image});`"
                                    ></div>
                                </div>
                                <div class="p-6">
                                    <h3 class="text-[#0B2B4C] text-lg font-bold mb-2 hover:underline">
                                        <Link :href="route('front.articles.single', article.id)">
                                            {{ article.title }}
                                        </Link>
                                    </h3>
                                </div>
                            </article>
                        </div>
                    </div>
                </aside>

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
        color: #0B2B4C;
    }

    h2 {
        font-size: 1.6rem;
        font-weight: 600;
        margin: 1.4rem 0 0.9rem 0;
        color: #0B2B4C;
    }

    h3 {
        font-size: 1.4rem;
        font-weight: 600;
        margin: 1.2rem 0 0.8rem 0;
        color: #0B2B4C;
    }

    h4 {
        font-size: 1.2rem;
        font-weight: 500;
        margin: 1rem 0 0.6rem 0;
        color: #0B2B4C;
    }

    h5 {
        font-size: 1rem;
        font-weight: 500;
        margin: 0.9rem 0 0.5rem 0;
        color: #0B2B4C;
    }

    h6 {
        font-size: 0.9rem;
        font-weight: 500;
        margin: 0.8rem 0 0.4rem 0;
        color: #0B2B4C;
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
        color: #0B2B4C;
    }
}
</style>
