<script setup>
import FrontLayout from "@/Layouts/FrontLayout.vue";
import { Link } from '@inertiajs/vue3';

const props = defineProps({
    article: Object,
});

</script>
<template>
    <FrontLayout :title="__('translate.article')">
        <div class="py-12 singleArticle">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 flex flex-col lg:flex-row gap-6">
                <!-- Główna kolumna -->
                <div class="flex-1">
                    <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg">
                        <div class="h-[400px]">
                            <img class="media-library-thumb-img w-full h-full object-cover"
                                 :src="article.photo.original_url"
                                 :alt="article.title">
                        </div>

                        <Link :href="route('front.articles')"
                              class="font-bold text-xl underline p-4 block">
                            {{__('translate.backToList')}}
                        </Link>

                        <h2 class="font-bold text-2xl p-4 text-center text-red-500">
                            {{article.title}}
                        </h2>

                        <div class="p-6 lg:p-8 bg-white dark:bg-gray-800
                                    dark:bg-gradient-to-bl dark:from-gray-700/50 dark:via-transparent
                                    border-b border-gray-200 dark:border-gray-700">

                            <div class="mb-5">
                                <p class="mb-4" v-html="article.content"></p>
                            </div>

                            <div class="flex items-center gap-6" v-if="article.user">
                                <img class="w-16 h-16 object-contain"
                                     :src="article.user?.logo"
                                     :alt="article.user?.name">
                                <div class="flex flex-col">
                                    <h2 class="font-bold">{{article.user?.name}}</h2>
                                    <p>{{article.user?.description}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Sidebar -->
                <aside class="lg:w-1/4 w-full bg-red-100 p-4">
                    sidebar będzie
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
    h1 { font-size: 1.8rem; font-weight: 700; margin: 1.5rem 0 1rem 0; }
    h2 { font-size: 1.6rem; font-weight: 600; margin: 1.4rem 0 0.9rem 0; }
    h3 { font-size: 1.4rem; font-weight: 600; margin: 1.2rem 0 0.8rem 0; }
    h4 { font-size: 1.2rem; font-weight: 500; margin: 1rem 0 0.6rem 0; }
    h5 { font-size: 1rem; font-weight: 500; margin: 0.9rem 0 0.5rem 0; }
    h6 { font-size: 0.9rem; font-weight: 500; margin: 0.8rem 0 0.4rem 0; }

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
    a {
        color: purple;
        cursor: pointer;
        text-decoration: underline;
    }

}
</style>
