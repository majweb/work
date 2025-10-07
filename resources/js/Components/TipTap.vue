<template>
    <div class="inner">
        <!-- Toolbar -->
        <div v-if="editor" class="toolbar flex flex-wrap gap-2 p-4 bg-gray-100 rounded-md shadow-sm">
            <!-- Formatowanie -->
            <button type="button" @click="editor.chain().focus().toggleBold().run()" :class="buttonClass('bold')" class="font-bold" :title="__('translate.bold')">
                B
            </button>
            <button type="button" @click="editor.chain().focus().toggleItalic().run()" :class="buttonClass('italic')" :title="__('translate.itaic')">
                𝐼
            </button>
            <button type="button" @click="editor.chain().focus().toggleStrike().run()" :class="buttonClass('strike')" :title="__('translate.strike')">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 12h12" />
                </svg>
            </button>

            <!-- Listy -->
            <button type="button" @click="editor.chain().focus().toggleBulletList().run()" :class="buttonClass('bulletList')" :title="__('translate.bulletList')">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <circle cx="6" cy="6" r="1.5" />
                    <circle cx="6" cy="12" r="1.5" />
                    <circle cx="6" cy="18" r="1.5" />
                    <path d="M10 6h10M10 12h10M10 18h10" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                </svg>
            </button>
            <button type="button" @click="editor.chain().focus().toggleOrderedList().run()" :class="buttonClass('orderedList')" :title="__('translate.orderedList')">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path d="M4 6h2M4 12h2M4 18h2M10 6h10M10 12h10M10 18h10" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                </svg>
            </button>

            <!-- Nagłówki H1-H6 -->
            <button v-for="n in 6" :key="n" type="button" @click="editor.chain().focus().toggleHeading({ level: n }).run()" :class="buttonClass('heading', n)" :title="`${__('translate.heading')} ${n}`">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <text x="0" y="15" font-size="16" font-weight="bold">H{{ n }}</text>
                </svg>
            </button>

            <!-- Wyrównanie tekstu -->
            <button type="button" @click="editor.chain().focus().setTextAlign('left').run()" :class="buttonClass('textAlign', 'left')" :title="__('translate.alignLeft')">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-width="2" stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h12M4 18h16"/>
                </svg>
            </button>
            <button type="button" @click="editor.chain().focus().setTextAlign('center').run()" :class="buttonClass('textAlign', 'center')" :title="__('translate.alignCenter')">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-width="2" stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M6 12h12M4 18h16"/>
                </svg>
            </button>
            <button type="button" @click="editor.chain().focus().setTextAlign('right').run()" :class="buttonClass('textAlign', 'right')" :title="__('translate.alignRight')">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-width="2" stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M10 12h10M4 18h16"/>
                </svg>
            </button>
            <button type="button" @click="editor.chain().focus().setTextAlign('justify').run()" :class="buttonClass('textAlign', 'justify')" :title="__('translate.justify')">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-width="2" stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16"/>
                </svg>
            </button>

            <!-- Link -->
            <button type="button" @click="toggleLink" :class="buttonClass('link')" :title="__('translate.link')">
                a
            </button>
            <button type="button" @click="removeLink" :title="__('translate.unlink')">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-width="2" stroke-linecap="round" stroke-linejoin="round" d="M15 12H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z"/>
                </svg>
            </button>

            <!-- YouTube Video -->
            <button type="button" @click="addVideo" :class="buttonClass('youtube')" :title="__('translate.addVideo')">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="red" viewBox="0 0 24 24" stroke="currentColor">
                    <path d="M10 8l6 4-6 4V8z"/>
                </svg>
            </button>

            <!-- Image Upload -->
            <input type="file" ref="fileInput" @change="onFileChange" class="hidden" accept="image/*" />
            <button type="button" @click="$refs.fileInput.click()" :title="__('translate.image')">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-width="2" stroke-linecap="round" stroke-linejoin="round" d="M4 16v4h16v-4M4 12l4-4 4 4 4-4 4 4M12 12v8"/>
                </svg>
            </button>

        </div>

        <!-- Edytor -->
        <editor-content :editor="editor" />
    </div>
</template>

<script>
import { ref, onBeforeUnmount } from 'vue'
import { Editor, EditorContent } from '@tiptap/vue-3'
import StarterKit from '@tiptap/starter-kit'
import TextAlign from '@tiptap/extension-text-align'
import Link from '@tiptap/extension-link'
import YouTube from '@tiptap/extension-youtube'
import Image from '@tiptap/extension-image'
import axios from 'axios'

export default {
    name: 'TiptapEditor',
    components: { EditorContent },
    props: { modelValue: String },
    emits: ['update:modelValue'],
    setup(props, { emit }) {
        const editor = ref(null)
        const activeMarks = ref({})
        const fileInput = ref(null)

        editor.value = new Editor({
            extensions: [
                StarterKit.configure({ heading: { levels: [1,2,3,4,5,6] } }),
                TextAlign.configure({ types: ['heading', 'paragraph'] }),
                Link.configure({
                    openOnClick: false,
                    defaultProtocol: 'https',
                }),
                YouTube.configure({ width: 640, height: 360, inline: false }),
                Image.configure({ inline: true,  allowBase64: true,
                }),
            ],
            content: props.modelValue || '',
            onUpdate({ editor: ed }) {
                emit('update:modelValue', ed.getHTML())
                updateActiveMarks(ed)
            },
            onSelectionUpdate({ editor: ed }) {
                updateActiveMarks(ed)
            }
        })

        onBeforeUnmount(() => editor.value?.destroy())

        function updateActiveMarks(ed) {
            activeMarks.value = {
                bold: ed.isActive('bold'),
                italic: ed.isActive('italic'),
                strike: ed.isActive('strike'),
                bulletList: ed.isActive('bulletList'),
                orderedList: ed.isActive('orderedList'),
                link: ed.isActive('link'),
                youtube: ed.isActive('youtube'),
                heading1: ed.isActive('heading', { level: 1 }),
                heading2: ed.isActive('heading', { level: 2 }),
                heading3: ed.isActive('heading', { level: 3 }),
                heading4: ed.isActive('heading', { level: 4 }),
                heading5: ed.isActive('heading', { level: 5 }),
                heading6: ed.isActive('heading', { level: 6 }),
                textAlignLeft: ed.isActive({ textAlign: 'left' }),
                textAlignCenter: ed.isActive({ textAlign: 'center' }),
                textAlignRight: ed.isActive({ textAlign: 'right' }),
                textAlignJustify: ed.isActive({ textAlign: 'justify' }),
            }
        }

        function buttonClass(type, value = null) {
            let isActive = false
            if (type === 'heading') isActive = activeMarks.value[`heading${value}`]
            else if (type === 'textAlign') isActive = activeMarks.value[`textAlign${value.charAt(0).toUpperCase() + value.slice(1)}`]
            else isActive = activeMarks.value[type]
            return [
                'p-2 rounded-md border border-gray-300 transition-colors duration-150',
                isActive ? '!bg-blue-200 text-gray' : 'hover:bg-gray-200'
            ]
        }

        // Link
        function toggleLink() {
            if (!editor.value) return
            const url = window.prompt('Wprowadź adres URL linku:')
            if (url) editor.value.chain().focus().toggleLink({ href: url }).run()
            else editor.value.chain().focus().unsetLink().run()
        }

        function removeLink() {
            editor.value?.chain().focus().unsetLink().run()
        }

        // YouTube Video
        function addVideo() {
            if (!editor.value) return
            const url = window.prompt('Wprowadź URL wideo YouTube:')
            if (!url) return
            const match = url.match(/(?:v=|youtu\.be\/)([^&]+)/)
            if (!match) return alert('Niepoprawny URL YouTube')
            const videoId = match[1]
            editor.value.chain().focus().insertContent({
                type: 'youtube',
                attrs: { src: `https://www.youtube.com/embed/${videoId}`, width: 640, height: 360 }
            }).run()
        }

        // Image Upload z dysku
        async function onFileChange(e) {
            const file = e.target.files[0]
            if (!file) return

            const formData = new FormData()
            formData.append('image', file)

            try {
                const response = await axios.post('/upload-image', formData, {
                    headers: { 'Content-Type': 'multipart/form-data' }
                })
                const url = response.data.url

                editor.value.chain().focus().setImage({
                    src: url,
                    width: '100%',   // zawsze pełna szerokość
                    height: 'auto',
                    class: 'float-left'  // zamiast style
                }).run()
            } catch (error) {
                console.error(error)
                alert(error.response?.data?.error || 'Upload nie powiódł się')
            }
        }


        return { editor, buttonClass, toggleLink, removeLink, addVideo, fileInput, onFileChange }
    }
}
</script>

<style lang="scss">
.tiptap {
    min-height: 200px;
    border: 1px solid #ccc;
    border-radius: 6px;
    padding: 8px;

    img {
        max-width: 100%;

        &.ProseMirror-selectednode {
            outline: 3px solid var(--purple);
            float: left;
        }

        &.float-left {
            float: left;
            margin: 0 1rem 1rem 0; // odstęp tekstu od obrazka
        }
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

// Toolbar
.toolbar {
    button {
        cursor: pointer;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        padding: 0.4rem;
        border: 1px solid #ccc;
        border-radius: 6px;
        background: white;
        transition: background 0.2s ease;

        &:hover {
            background: #eee;
        }

        &.is-active {
            background: purple;
            color: #fff;
        }

        svg {
            width: 18px;
            height: 18px;
        }
    }
}
</style>

