<script setup>
import { ref } from 'vue';
import { useForm } from '@inertiajs/vue3';
import Comment from './Comment.vue';

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


</script>

<template>
    <div class="mt-8">
        <h3 class="text-xl font-bold mb-4">Komentarze</h3>

        <!-- Formularz dodawania nowego komentarza -->
        <div v-if="user" class="mb-6">
            <form @submit.prevent="submitComment">
                <textarea
                    v-model="form.content"
                    class="w-full p-3 border rounded"
                    placeholder="Napisz komentarz..."
                    rows="3"
                ></textarea>
                <div class="flex justify-end mt-2">
                    <button
                        type="submit"
                        class="px-4 py-2 bg-[#0B2B4C] text-white rounded hover:bg-[#133C69]"
                        :disabled="form.processing"
                    >
                        Dodaj komentarz
                    </button>
                </div>
            </form>
        </div>

        <div v-else class="mb-6 p-4 bg-gray-100 rounded">
            <p>Zaloguj się, aby dodać komentarz</p>
        </div>

        <!-- Lista komentarzy -->
        <div class="space-y-4">
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
