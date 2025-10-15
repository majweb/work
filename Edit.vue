const props = defineProps({
    article: Object,
    categories: Array,
        comments: {
            type: Array,
            default: () => []
        }
    comments: {
        type: Array,
        default: () => []
    }
        comments: props.comments || [],
    });

const toggleCommentVisibility = (commentId) => {
    form.post(route('comments.toggle-visibility', commentId), {
        preserveScroll: true,
        preserveState: true,
        onSuccess: () => {
            const comment = form.comments.find(c => c.id === commentId);
            if (comment) {
                comment.show = !comment.show;
            }
        }
            comments: props.comments || [],
        });

    const zmienWidocznoscKomentarza = (commentId) => {
        form.post(route('comments.toggle-visibility', commentId), {
            preserveScroll: true,
            preserveState: true,
            onSuccess: () => {
                const comment = form.comments.find(c => c.id === commentId);
                if (comment) {
                    comment.show = !comment.show;
                }
            }
        });
    };
};

<!-- COMMENTS -->
<div class="col-span-6 mt-8 border-t border-gray-300 pt-4">
    <h3 class="font-semibold text-lg text-gray-700 mb-4">{{ __('translate.comments') }}</h3>

    <div v-if="form.comments.length === 0" class="text-gray-500 italic">
        {{ __('translate.noComments') }}
    </div>

    <div v-else class="space-y-4">
        <div v-for="comment in form.comments" :key="comment.id"
             class="bg-white p-4 rounded-lg shadow-sm border border-gray-200">
            <div class="flex items-start justify-between">
                <div class="flex-grow">
                    <div class="flex items-center space-x-2">
                        <span class="font-medium text-gray-700">{{ comment.author }}</span>
                        <span class="text-sm text-gray-500">{{ comment.created_at }}</span>
                    </div>
                    <p class="mt-2 text-gray-600">{{ comment.content }}</p>
                </div>
                <button @click="toggleCommentVisibility(comment.id)"
                        :class="{'bg-green-500 hover:bg-green-600': comment.show, 'bg-red-500 hover:bg-red-600': !comment.show}"
                        class="px-4 py-2 text-sm font-medium text-white rounded-md transition-colors duration-200">
                    {{ comment.show ? __('translate.hide') : __('translate.show') }}
                </button>
            </div>
        </div>
    </div>
</div>

<!-- KOMENTARZE -->
<div class="col-span-6 mt-8 border-t border-gray-300 pt-4">
    <h3 class="font-semibold text-lg text-gray-700 mb-4">Komentarze</h3>

    <div v-if="form.comments.length === 0" class="text-gray-500 italic">
        Brak komentarzy
    </div>

    <div v-else class="space-y-4">
        <div v-for="comment in form.comments" :key="comment.id"
             class="bg-white p-4 rounded-lg shadow-sm border border-gray-200">
            <div class="flex items-start justify-between">
                <div class="flex-grow">
                    <div class="flex items-center space-x-2">
                        <span class="font-medium text-gray-700">{{ comment.author }}</span>
                        <span class="text-sm text-gray-500">{{ comment.created_at }}</span>
                    </div>
                    <p class="mt-2 text-gray-600">{{ comment.content }}</p>
                </div>
                <button @click="zmienWidocznoscKomentarza(comment.id)"
                        :class="{'bg-green-500 hover:bg-green-600': comment.show, 'bg-red-500 hover:bg-red-600': !comment.show}"
                        class="px-4 py-2 text-sm font-medium text-white rounded-md transition-colors duration-200">
                    {{ comment.show ? 'Ukryj' : 'Pokaż' }}
                </button>
            </div>
        </div>
    </div>
</div>
