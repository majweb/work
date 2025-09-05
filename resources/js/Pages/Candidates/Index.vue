<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import {Link, usePage} from '@inertiajs/vue3';
import {computed, ref, watch} from 'vue';
import { router } from '@inertiajs/vue3';
import { debounce, pickBy } from 'lodash';
import InputLabel from '@/Components/InputLabel.vue';
import TextInput from '@/Components/TextInput.vue';
import __ from '@/lang.js';
import Multiselect from "vue-multiselect";
const locale = computed(()=>usePage().props.language);

const props = defineProps({
    candidates: Object,
    filters: Object,
    categories: Array,
    projects: Array,
    customTags: Array,
    optionsRecruits: Object,
    optionsPosition: Object,

});

const form = ref({
    name: props.filters.name || '',
    surname: props.filters.surname || '',
    email: props.filters.email || '',
    recruiter: props.filters?.recruiter || '',
    position: props.filters?.position || '',
    phone: props.filters.phone || '',
    project: props.filters.project || '',
    tags: props.filters.tags || [],
});

const getLocalizedTitle = (title) => {
    if (!title) return '';
    return title[locale] || title['pl'] || (Object.values(title).length > 0 ? Object.values(title)[0] : '');
};


const selectedTags = ref([]);
const professionCategories = ref(props.categories || []);
const customTags = ref(props.customTags || []);

const currentCategoryPage = ref(1);
const categoriesPerPage = 60; // Liczba kategorii na stronę
const tagColors = {};
const categorySearchQuery = ref('');
const customTagSearchQuery = ref('');


const getTagColor = (id) => {
    if (!tagColors[id]) {
        // Generowanie pastelowych kolorów
        const hue = (id * 137.5) % 360;
        const saturation = 60 + (id % 20);
        const lightness = 75 + (id % 15);
        tagColors[id] = `hsl(${hue}, ${saturation}%, ${lightness}%)`;
    }
    return tagColors[id];
};

const toggleCategoryTag = (category) => {
    const index = selectedTags.value.findIndex(tag =>
        tag.id === category.id && tag.type === 'category'
    );

    if (index === -1) {
        selectedTags.value.push({
            id: category.id,
            title: getLocalizedTitle(category.title),
            rawTitle: category.title,
            type: 'category'
        });
    } else {
        selectedTags.value.splice(index, 1);
    }
};





const getContrastColor = (backgroundColor) => {
    // Prosty algorytm do określenia ciemności koloru
    const rgb = hexToRgb(backgroundColor) || { r: 200, g: 200, b: 200 };
    const brightness = (rgb.r * 299 + rgb.g * 587 + rgb.b * 114) / 1000;
    return brightness > 128 ? '#000000' : '#FFFFFF';
};

// Konwersja HSL do RGB
const hexToRgb = (hex) => {
    // Jeśli to jest format HSL, zwracamy domyślne wartości
    if (hex.startsWith('hsl')) {
        return { r: 200, g: 200, b: 200 };
    }

    // Konwersja HEX do RGB
    const shorthandRegex = /^#?([a-f\d])([a-f\d])([a-f\d])$/i;
    hex = hex.replace(shorthandRegex, (m, r, g, b) => r + r + g + g + b + b);

    const result = /^#?([a-f\d]{2})([a-f\d]{2})([a-f\d]{2})$/i.exec(hex);
    return result ? {
        r: parseInt(result[1], 16),
        g: parseInt(result[2], 16),
        b: parseInt(result[3], 16)
    } : null;
};
// Obliczanie całkowitej liczby stron dla kategorii
const totalCategoryPages = computed(() => {
    return Math.ceil(filteredCategories.value.length / categoriesPerPage);
});

// Filtrowanie kategorii posiadających tłumaczenie w aktualnym języku i pasujące do wyszukiwania
const filteredCategories = computed(() => {
    const locale = usePage().props.language || 'pl';
    return professionCategories.value.filter(category => {
        if (!category || !category.title) return false;
        const hasValidTitle = category.title[locale] && category.title[locale].trim() !== '';

        // Jeśli jest fraza wyszukiwania, sprawdź czy kategoria ją zawiera
        if (categorySearchQuery.value.trim() !== '') {
            const searchTerm = categorySearchQuery.value.toLowerCase();
            const localizedTitle = (category.title[locale] || '').toLowerCase();
            return hasValidTitle && localizedTitle.includes(searchTerm);
        }

        return hasValidTitle;
    });
});

// Pobranie paginowanych kategorii
const paginatedCategories = computed(() => {
    const startIndex = (currentCategoryPage.value - 1) * categoriesPerPage;
    const endIndex = startIndex + categoriesPerPage;
    return filteredCategories.value.slice(startIndex, endIndex);
});

// Resetowanie strony przy zmianie zapytania wyszukiwania
watch(categorySearchQuery, () => {
    currentCategoryPage.value = 1;
});
const resetFilters = () => {
    form.value = {
        name: '',
        surname: '',
        recruiter:'',
        position:'',
        email: '',
        phone: '',
        project: '',
        tags: [],
    };

    router.get(route('candidates.index'), {}, {
        preserveState: true,
        replace: true,
    });
};

watch(form, debounce(function () {
    let rest = pickBy({
        ...form.value,
        recruiter: form.value.recruiter?.value || form.value.recruiter,
        position: form.value.position?.value || form.value.position,
        tags: form.value.tags?.map(el => el.id).join(',')
    });

    router.get(route('candidates.index'), rest, {
        preserveState: true,
        preserveScroll: true,
        replace: true
    });
}, 300), { deep: true });

const getBackgroundStyle = (candidate) => {
    if (candidate.created_by?.color) {
        return {
            backgroundColor: `${candidate.created_by.color}15` // Dodajemy 15 na końcu dla przezroczystości
        }
    }
    return {}
}

const removeTag = (tag) => {
    const index = selectedTags.value.findIndex(t =>
        t.id === tag.id && t.type === tag.type
    );

    if (index !== -1) {
        selectedTags.value.splice(index, 1);
        // Po usunięciu ostatniego tagu, zapewniamy że będzie pusta tablica
        if (selectedTags.value.length === 0) {
            selectedTags.value = [];
        }
    }
};

// Filtrowanie tagów niestandardowych na podstawie wyszukiwania
const filteredCustomTags = computed(() => {
    // Upewnij się, że customTags.value jest tablicą
    const tags = Array.isArray(customTags.value) ? customTags.value : [];

    if (customTagSearchQuery.value.trim() === '') {
        return tags;
    }

    const searchTerm = customTagSearchQuery.value.toLowerCase();
    return tags.filter(tag => {
        return tag.name.toLowerCase().includes(searchTerm);
    });
});

const toggleCustomTag = (tag) => {
    const index = selectedTags.value.findIndex(t =>
        t.id === tag.id && t.type === 'custom'
    );

    if (index === -1) {
        selectedTags.value.push({
            id: tag.id+'s',
            name: tag.name,
            type: 'custom'
        });
    } else {
        selectedTags.value.splice(index, 1);
    }
};


watch(selectedTags, (newTags) => {
    console.log(newTags)
    form.value.tags = [...newTags];
}, { deep: true });

</script>

<template>
    <AppLayout :title="__('translate.candidates')">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('translate.candidates') }}
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-screen-2xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white shadow-xl sm:rounded-lg p-6">
                    <h3 class="text-lg font-medium text-gray-900 mb-6">{{ __('translate.candidatesList') }}</h3>

                    <!-- Formularz filtrowania -->
                    <div class="mb-6 bg-gray-50 p-4 rounded-lg">
                        <h4 class="font-medium text-gray-700 mb-3">{{ __('translate.filterCandidates') }}</h4>

                        <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-4">
                            <div>
                                <InputLabel :value="__('translate.name')" />
                                <TextInput
                                    v-model="form.name"
                                    type="text"
                                    class="w-full"
                                    :placeholder="__('translate.enterName')"
                                />
                            </div>
                            <div>
                                <InputLabel :value="__('translate.surname')" />
                                <TextInput
                                    v-model="form.surname"
                                    type="text"
                                    class="w-full"
                                    :placeholder="__('translate.enterSurname')"
                                />
                            </div>
                            <div>
                                <InputLabel :value="__('translate.email')" />
                                <TextInput
                                    v-model="form.email"
                                    type="text"
                                    class="w-full"
                                    :placeholder="__('translate.enterEmail')"
                                />
                            </div>
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                            <div>
                                <InputLabel :value="__('translate.recruiter')"/>
                                <multiselect
                                    :selectLabel="__('translate.selectLabel')"
                                    :selectGroupLabel="__('translate.selectGroupLabel')"
                                    :selectedLabel="__('translate.selectedLabel')"
                                    :deselectLabel="__('translate.deselectLabel')"
                                    :noOptions="__('translate.noOptions')"
                                    :noResult="__('translate.noResult')"
                                    track-by="value"
                                    label="name"
                                    :placeholder="__('translate.placeholder')"
                                    v-model="form.recruiter" :options="optionsRecruits">
                                    <template #noResult>
                                        <span>{{__('translate.noOptions')}}</span>
                                    </template>
                                    <template #noOptions>
                                        <span>{{__('translate.noResult')}}</span>
                                    </template>
                                </multiselect>
                            </div>
                            <div>
                                <InputLabel :value="__('translate.position')"/>
                                <multiselect
                                    :selectLabel="__('translate.selectLabel')"
                                    :selectGroupLabel="__('translate.selectGroupLabel')"
                                    :selectedLabel="__('translate.selectedLabel')"
                                    :deselectLabel="__('translate.deselectLabel')"
                                    :noOptions="__('translate.noOptions')"
                                    :noResult="__('translate.noResult')"
                                    track-by="value"
                                    label="name"
                                    :placeholder="__('translate.placeholder')"
                                    v-model="form.position"
                                    :options="optionsPosition">
                                </multiselect>
                            </div>
                            <div>
                                <InputLabel :value="__('translate.phone')" />
                                <TextInput
                                    v-model="form.phone"
                                    type="text"
                                    class="w-full"
                                    :placeholder="__('translate.enterPhone')"
                                />
                            </div>
                            <div>
                                <InputLabel :value="__('translate.project')" />
                                <select
                                    v-model="form.project"
                                    class="w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                >
                                    <option value="">{{ __('translate.allProjects') }}</option>
                                    <option v-for="project in projects" :key="project.id" :value="project.id">
                                        {{ project.id }}
                                    </option>
                                </select>
                            </div>
                        </div>

                        <div class="mb-4">
                            <h4 class="text-md font-medium text-gray-700 mb-2">{{ __('translate.professionCategories') }}</h4>
                            <!-- Pole wyszukiwania kategorii -->
                            <div class="mb-3">
                                <input
                                    type="text"
                                    v-model="categorySearchQuery"
                                    class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500"
                                    :placeholder="__('translate.searchCategories')"
                                />
                            </div>
                            <div>
                                <div class="flex flex-wrap gap-2 mb-3">
                                    <span v-for="category in paginatedCategories" :key="category.id"
                                          class="px-3 py-1 rounded-full text-sm font-medium cursor-pointer transition-colors"
                                          :style="{ backgroundColor: getTagColor(category.id), color: getContrastColor(getTagColor(category.id)) }"
                                          @click="toggleCategoryTag(category)">
                                        {{category.title?.[locale]}}
                                    </span>
                                    <span v-if="filteredCategories.length === 0" class="text-gray-500 text-sm">
                                        {{ categorySearchQuery ? __('translate.noMatchingCategories') : __('translate.noCategoriesAvailable') }}
                                    </span>
                                </div>
                                <div class="flex justify-between items-center mt-4" v-if="filteredCategories.length > categoriesPerPage">
                                    <button
                                        @click="currentCategoryPage = Math.max(currentCategoryPage - 1, 1)"
                                        :disabled="currentCategoryPage === 1"
                                        class="px-3 py-1 bg-gray-200 rounded text-sm disabled:opacity-50"
                                    >
                                        &lt; {{__('translate.previous')}}
                                    </button>
                                    <span class="text-sm">{{__('translate.page')}} {{ currentCategoryPage }} / {{ totalCategoryPages }}</span>
                                    <button
                                        @click="currentCategoryPage = Math.min(currentCategoryPage + 1, totalCategoryPages)"
                                        :disabled="currentCategoryPage === totalCategoryPages"
                                        class="px-3 py-1 bg-gray-200 rounded text-sm disabled:opacity-50"
                                    >
                                        {{__('translate.next')}} &gt;
                                    </button>
                                </div>
                                <!-- Przycisk do czyszczenia wyszukiwania -->
                                <div v-if="categorySearchQuery" class="mt-2 text-right">
                                    <button
                                        @click="categorySearchQuery = ''; currentCategoryPage = 1"
                                        class="text-indigo-600 text-sm hover:text-indigo-800"
                                    >
                                        {{ __('translate.clearSearch') }}
                                    </button>
                                </div>
                            </div>
                        </div>
                        <!-- Sekcja tagów firmowych -->
                        <div>
                            <h4 class="text-md font-medium text-gray-700 mb-2">{{ __('translate.customTags') }}</h4>
                            <!-- Pole wyszukiwania tagów niestandardowych -->
                            <div class="mb-3">
                                <input
                                    type="text"
                                    v-model="customTagSearchQuery"
                                    class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500"
                                    :placeholder="__('translate.searchCustomTags')"
                                />
                            </div>
                            <div class="flex flex-wrap gap-2">
                                <span v-for="tag in filteredCustomTags" :key="tag.id"
                                      class="px-3 py-1 rounded-full text-sm font-medium cursor-pointer transition-colors"
                                      :style="{ backgroundColor: getTagColor(tag.id + 1000), color: getContrastColor(getTagColor(tag.id + 1000)) }"
                                      @click="toggleCustomTag(tag)">
                                    {{ tag.name }}
                                </span>
                                <span v-if="filteredCustomTags.length === 0" class="text-gray-500 text-sm">
                                    {{ customTagSearchQuery ? __('translate.noMatchingTags') : __('translate.noTagsAvailable') }}
                                </span>
                            </div>
                            <!-- Przycisk do czyszczenia wyszukiwania tagów niestandardowych -->
                            <div v-if="customTagSearchQuery" class="mt-2 text-right">
                                <button
                                    @click="customTagSearchQuery = ''"
                                    class="text-indigo-600 text-sm hover:text-indigo-800"
                                >
                                    {{ __('translate.clearSearch') }}
                                </button>
                            </div>
                        </div>
                        <!-- Sekcja wybranych tagów -->
                        <div class="mt-4 pt-4 border-t border-gray-200">
                            <h4 class="text-md font-medium text-gray-700 mb-2">{{ __('translate.selectedTags') }}</h4>
                            <div class="flex flex-wrap gap-2">
                                <span v-for="tag in selectedTags" :key="tag.id"
                                      class="px-3 py-1 bg-indigo-100 text-indigo-800 rounded-full text-sm font-medium flex items-center">
                                    {{ tag.type === 'category' && tag.rawTitle ? tag.rawTitle?.[locale] : (tag.name || tag.title) }}
                                    <button @click="removeTag(tag)" class="ml-1 text-indigo-600 hover:text-indigo-800">
                                        &times;
                                    </button>
                                </span>
                                <span v-if="selectedTags.length === 0" class="text-gray-500 text-sm">{{ __('translate.noTagsSelected') }}</span>
                            </div>
                        </div>




                        <div class="flex justify-end space-x-3">
                            <button
                                @click="resetFilters"
                                type="button"
                                class="px-4 py-2 bg-gray-200 text-gray-700 rounded-md hover:bg-gray-300 transition"
                            >
                                {{ __('translate.resetFilters') }}
                            </button>
                        </div>
                    </div>

                    <div v-if="candidates.data.length === 0" class="text-center py-8 text-gray-500">
                        {{ __('translate.noCandidatesAvailable') }}
                    </div>
                    <div v-else class="overflow-x-auto">
                        <table class="min-w-full divide-y divide-gray-200">
                            <thead class="bg-gray-50">
                            <tr>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Id
                                </th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    {{ __('translate.name') }} {{ __('translate.surname') }}
                                </th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    {{ __('translate.email') }}
                                </th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    {{ __('translate.phone') }}
                                </th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    {{ __('translate.project') }}
                                </th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    {{ __('translate.actions') }}
                                </th>
                            </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                            <tr v-for="candidate in candidates.data" :key="candidate.id" :style="getBackgroundStyle(candidate)">
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm font-medium text-gray-900">{{ candidate.id }}</div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm font-medium text-gray-900">{{ candidate.name }} {{ candidate.surname }}</div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm text-gray-500">{{ candidate.email }}</div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm text-gray-500">{{ candidate.phone }}</div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div v-if="candidate.projects && candidate.projects.length > 0" class="text-sm text-blue-600 flex gap-2">
                                        <div v-for="project in candidate.projects" :key="project.id" class="mb-1">
                                            <Link :href="route('projects.show',project.id)" class="underline">
                                            (ID: {{ project.id }})
                                            </Link>
                                        </div>
                                    </div>
                                    <div v-else class="text-sm text-gray-500">{{ candidate.project?.id }}</div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                    <Link :href="route('candidates.show', candidate.id)" class="text-indigo-600 hover:text-indigo-900 mr-4">{{ __('translate.candidateDetails') }}</Link>
                                    <Link :href="route('candidates.evidence', candidate.id)" class="text-indigo-600 hover:text-indigo-900 mr-4">{{ __('translate.evidence') }}</Link>
                                </td>
                            </tr>
                            </tbody>
                        </table>

                        <!-- Paginacja -->
                        <div class="mt-6" v-if="candidates.links.length > 3">
                            <div class="flex flex-wrap -mb-1">
                                <template v-for="(link, index) in candidates.links" :key="index">
                                    <div v-if="link.url === null" class="mb-1 mr-1 px-4 py-3 text-sm leading-4 text-gray-400 border rounded" v-html="link.label"></div>
                                    <Link v-else class="mb-1 mr-1 px-4 py-3 text-sm leading-4 border rounded hover:bg-indigo-50 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2" :class="{'bg-indigo-600 text-white': link.active}" :href="link.url" v-html="link.label"></Link>
                                </template>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </AppLayout>
</template>
<style src="vue-multiselect/dist/vue-multiselect.css"></style>
<style lang="scss">

.multiselect__tag{
    background: #00a0e3 !important;
}
.multiselect__option--highlight {
    background: #00a0e3 !important;
    outline: none;
    color: white;
}

.multiselect__option--highlight:after {
    content: attr(data-select);
    background: #00a0e3 !important;
    color: white;
}

.multiselect__option--selected {
    background: #00A0E3B2 !important;
    color: #35495E;
    font-weight: bold;
}

.multiselect__option--selected.multiselect__option--highlight {
    background: #00A0E3B2 !important;
    color: #fff;
}

.multiselect__option--selected.multiselect__option--highlight:after {
    background: #00A0E3B2 !important;
    content: attr(data-deselect);
    color: white !important;
}

.multiselect__option--selected:after {
    content: attr(data-selected);
    color: #00A0E3B2;
    background: transparent !important;
}
</style>
