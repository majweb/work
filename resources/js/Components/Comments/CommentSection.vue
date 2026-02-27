<script setup>
import { computed } from 'vue';
import { useForm } from '@inertiajs/vue3';
import Comment from './Comment.vue';
import TextareaLimit from "@/Components/TextareaLimit.vue";
import InputError from "@/Components/InputError.vue";

const props = defineProps({
    articleId: Number,
    comments: Array,
    user: Object,
});

const form = useForm({
    content: '',
    article_id: props.articleId,
    parent_id: null, // null = nowy komentarz
});

// Dodawanie pierwszego komentarza
const submitComment = () => {
    form.post(route('comments.store'), {
        preserveScroll: true,
        onSuccess: () => {
            form.reset();
        },
    });
};

// Funkcja do rekurencyjnego liczenia wszystkich odpowiedzi
const countRepliesRecursive = (comment) => {
    if (!comment.replies || !comment.replies.length) return 0;
    return comment.replies.length + comment.replies.reduce((acc, reply) => acc + countRepliesRecursive(reply), 0);
};

// Liczba głównych komentarzy
const mainCommentsCount = computed(() => props.comments.length);

// Liczba wszystkich odpowiedzi
const allRepliesCount = computed(() =>
    props.comments.reduce((acc, comment) => acc + countRepliesRecursive(comment), 0)
);
</script>

<template>
    <div class="mt-12">
        <!-- Licznik komentarzy -->
        <div class="flex items-center gap-4 mb-10">
            <h2 class="text-xl font-black text-[#0A2C5C] uppercase tracking-tight">
                {{__('comments.comments')}}
                <span class="ml-2 px-3 py-1 bg-blue-50 text-blue-500 text-xs rounded-full border border-blue-100">
                    {{ mainCommentsCount + allRepliesCount }}
                </span>
            </h2>
            <div class="h-px flex-1 bg-gray-100"></div>
        </div>

        <!-- Formularz dodawania nowego komentarza -->
        <div v-if="user" class="mb-12 bg-gray-50/50 p-6 md:p-8 rounded-[2rem] border border-gray-100 shadow-inner">
            <form @submit.prevent="submitComment" class="space-y-4">
                <div class="relative">
                    <TextareaLimit
                        id="content"
                        v-model="form.content"
                        :limit="1000"
                        class="w-full !rounded-2xl !border-gray-100 !bg-white focus:!ring-blue-500/20 focus:!border-blue-500 transition-all text-sm font-medium placeholder-gray-400 p-5 shadow-sm"
                        :placeholder="__('comments.WriteComment')"
                        rows="4"
                    />
                </div>
                <InputError :message="form.errors.content" class="mt-2 text-[10px] font-black uppercase tracking-widest ml-2"/>

                <div class="flex justify-end pt-2">
                    <button
                        type="submit"
                        class="px-10 py-4 bg-[#0A2C5C] text-white text-[10px] font-black uppercase tracking-widest rounded-2xl hover:bg-blue-800 shadow-xl shadow-blue-900/20 transition-all hover:-translate-y-0.5 disabled:opacity-50 disabled:cursor-not-allowed flex items-center gap-3"
                        :disabled="form.processing"
                    >
                        {{__('comments.add')}}
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="3">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4" />
                        </svg>
                    </button>
                </div>
            </form>
        </div>

        <div v-else class="mb-12 p-8 bg-blue-50/50 rounded-[2rem] border border-blue-100/50 text-center">
            <p class="text-sm font-bold text-blue-900/60 uppercase tracking-widest">{{__('comments.addLogin')}}</p>
            <Link :href="route('login')" class="inline-block mt-4 text-[10px] font-black text-[#0A2C5C] hover:underline uppercase tracking-widest">
                {{ __('translate.login') }} →
            </Link>
        </div>

        <!-- Lista komentarzy -->
        <div class="space-y-6">
            <Comment
                v-for="comment in comments"
                :key="comment.id"
                :comment="comment"
                :user="user"
                :article-id="articleId"
            />
        </div>
    </div>
</template>
