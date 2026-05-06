<!-- resources/js/Components/Comments/Comment.vue -->
<script setup>
import { ref } from 'vue';
import { useForm } from '@inertiajs/vue3';
import TextareaLimit from "@/Components/TextareaLimit.vue";
import InputError from "@/Components/InputError.vue";

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
    <div class="group/comment">
        <div class="flex items-start gap-4 p-4 rounded-3xl transition-all duration-300 hover:bg-gray-50/50">
            <!-- Awatar -->
            <div
                class="w-12 h-12 rounded-2xl bg-gray-100 bg-center bg-no-repeat shadow-sm border-2 border-white shrink-0"
                :style="{
                    backgroundImage: `url('${comment.user.profile_photo_url}')`,
                    backgroundSize: 'cover',
                }"
            ></div>

            <div class="flex-grow min-w-0">
                <div class="flex items-center justify-between gap-4">
                    <div class="flex flex-col sm:flex-row sm:items-center gap-1 sm:gap-3">
                        <span class="font-black text-[#0A2C5C] uppercase tracking-tight text-sm">{{ comment.user.name }}</span>
                        <span class="hidden sm:block w-1 h-1 bg-gray-300 rounded-full"></span>
                        <span class="text-[10px] font-bold text-gray-400 uppercase tracking-widest">
                            {{ new Date(comment.created_at).toLocaleDateString() }}
                        </span>
                    </div>
                </div>

                <div class="mt-3 text-gray-600 leading-relaxed text-sm bg-white/50 p-4 rounded-2xl border border-gray-50 group-hover/comment:border-gray-100 group-hover/comment:bg-white transition-all shadow-sm">
                    {{ comment.content }}
                </div>

                <div class="flex items-center gap-4 mt-3 ml-2">
                    <button
                        v-if="user"
                        @click="startReply(comment.id)"
                        class="text-[10px] font-black text-[#0A2C5C] uppercase tracking-widest hover:underline flex items-center gap-1.5"
                    >
                        <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M3 10h10a8 8 0 018 8v2M3 10l6 6m-6-6l6-6"/></svg>
                        {{__('comments.response')}}
                    </button>
                </div>

                <!-- Formularz odpowiedzi -->
                <div v-if="replyingTo === comment.id" class="mt-4 bg-gray-50 p-5 rounded-2xl border border-gray-100 animate-fade-in shadow-inner">
                    <TextareaLimit
                        id="content"
                        v-model="form.content"
                        :limit="1000"
                        rows="3"
                        class="w-full !rounded-xl !border-gray-200 !bg-white focus:!ring-blue-500/20 focus:!border-blue-500 transition-all text-sm font-medium p-4"
                        :placeholder="__('comments.WriteResponse')"
                    />
                    <InputError :message="form.errors.content" class="mt-2 text-[10px] font-black uppercase tracking-widest ml-2"/>

                    <div class="flex gap-3 mt-4 justify-end">
                        <button
                            @click="cancelReply"
                            class="px-6 py-2.5 text-[10px] font-black text-gray-400 uppercase tracking-widest hover:text-gray-600 transition-colors"
                        >
                            {{__('translate.cancel')}}
                        </button>
                        <button
                            @click="submitReply(comment.id)"
                            class="px-8 py-2.5 bg-[#0A2C5C] text-white text-[10px] font-black uppercase tracking-widest rounded-xl hover:bg-[#00a0e3] shadow-lg shadow-blue-900/10 transition-all flex items-center gap-2"
                            :disabled="form.processing"
                        >
                            {{__('comments.response')}}
                            <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="3"><path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4"/></svg>
                        </button>
                    </div>
                </div>

                <!-- Rekurencyjne odpowiedzi -->
                <div v-if="comment.replies.length" class="mt-6 space-y-6 relative">
                    <!-- Linia łącząca odpowiedzi -->
                    <div class="absolute left-[-2rem] top-0 bottom-0 w-px bg-gradient-to-b from-gray-100 via-gray-100 to-transparent"></div>

                    <div class="pl-8 sm:pl-12">
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
    </div>
</template>
