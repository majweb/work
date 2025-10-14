<!-- resources/js/Components/Comments/Comment.vue -->
<script setup>
import { ref } from 'vue';
import { useForm } from '@inertiajs/vue3';

const props = defineProps({
    comment: Object,
    user: Object,
    articleId: Number,
});

const replyingTo = ref(null);

const form = useForm({
    content: '',
    article_id: props.articleId,
    parent_id: null,
});

const submitReply = (parentId) => {
    form.parent_id = parentId;
    form.post(route('comments.store'), {
        preserveScroll: true,
        onSuccess: () => {
            form.reset();
            replyingTo.value = null;
        },
    });
};

const startReply = (commentId) => {
    replyingTo.value = commentId;
    form.parent_id = commentId;
};

const cancelReply = () => {
    replyingTo.value = null;
    form.parent_id = null;
    form.content = '';
};
</script>

<template>
    <div class="border-b pb-4">
        <div class="flex items-start gap-4">
            <!-- Awatar jako background-image -->
            <div
                class="w-10 h-10 rounded-full bg-gray-200 bg-center bg-no-repeat"
                :style="{
                    backgroundImage: `url('${comment.user.profile_photo_url}')`,
                    backgroundSize: 'contain',
                }"
            ></div>

            <div class="flex-grow">
                <div class="flex items-center gap-2">
                    <span class="font-bold">{{ comment.user.name }}</span>
                    <span class="text-sm text-gray-500">
                        {{ new Date(comment.created_at).toLocaleDateString() }}
                    </span>
                </div>

                <p class="mt-2">{{ comment.content }}</p>

                <button
                    v-if="user"
                    @click="startReply(comment.id)"
                    class="text-sm text-[#0B2B4C] mt-2 hover:underline"
                >
                    Odpowiedz
                </button>

                <!-- Formularz odpowiedzi -->
                <div v-if="replyingTo === comment.id" class="mt-2">
                    <textarea
                        v-model="form.content"
                        class="w-full p-2 border rounded"
                        rows="2"
                        placeholder="Napisz odpowiedź..."
                    ></textarea>
                    <div class="flex gap-2 mt-1">
                        <button
                            @click="submitReply(comment.id)"
                            class="px-3 py-1 bg-[#0B2B4C] text-white rounded hover:bg-[#133C69]"
                            :disabled="form.processing"
                        >
                            Odpowiedz
                        </button>
                        <button
                            @click="cancelReply"
                            class="px-3 py-1 text-gray-600 hover:text-gray-800"
                        >
                            Anuluj
                        </button>
                    </div>
                </div>

                <!-- Rekurencyjne odpowiedzi -->
                <div v-if="comment.replies.length" class="ml-6 mt-4 space-y-4">
                    <Comment
                        v-for="reply in comment.replies"
                        :key="reply.id"
                        :comment="reply"
                        :user="user"
                        :article-id="articleId"
                    />
                </div>
            </div>
        </div>
    </div>
</template>
