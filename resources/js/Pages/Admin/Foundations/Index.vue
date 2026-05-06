<script setup>
import AppLayout from "@/Layouts/AppLayout.vue";
import { Link, router } from "@inertiajs/vue3";
import Pagination from "@/Components/Pagination.vue";
import { ref, nextTick } from "vue";
import { pickBy } from "lodash";
import Multiselect from "vue-multiselect";
import TextInput from "@/Components/TextInput.vue";
import PrimaryButton from "@/Components/PrimaryButton.vue";
import ConfirmationModal from "@/Components/ConfirmationModal.vue";
import DangerButton from "@/Components/DangerButton.vue";
import SecondaryButton from "@/Components/SecondaryButton.vue";

const props = defineProps({
    foundations: Object,
    filters: Object,
    categories: Array,
    countries: Array
});

const params = ref({
    name: props.filters.name || '',
    category: props.filters.category || null,
    country: props.filters.country || null,
});

const search = () => {
    const data = {
        name: params.value.name,
        category: params.value.category ? params.value.category.value : null,
        country: params.value.country ? params.value.country.countryCode : null,
    };

    router.get(route('admin.foundations.index'), pickBy(data), {
        preserveState: true,
        replace: true,
    });
};

const resetFilters = () => {
    router.get(route('admin.foundations.index'));
};

const toggleActive = (id) => {
    router.put(route('admin.foundations.toggle', id), {}, { preserveScroll: true });
};

const foundationIdBeingDeleted = ref(null);

const confirmFoundationDeletion = (id) => {
    foundationIdBeingDeleted.value = id;
};

const deleteFoundation = () => {
    router.delete(route('admin.foundations.destroy', foundationIdBeingDeleted.value), {
        preserveScroll: true,
        preserveState: true,
        onSuccess: () => foundationIdBeingDeleted.value = null,
    });
};
</script>

<template>
    <AppLayout :title="__('foundations.foundations')">
        <div class="py-12 bg-gray-50/50 min-h-screen px-2 sm:px-0">
            <div class="max-w-[1600px] mx-auto sm:px-6 lg:px-8">
                <!-- Header Card -->
                <div class="bg-white rounded-[3rem] shadow-xl shadow-blue-900/5 border border-gray-100 p-10 mb-8">
                    <div class="flex items-center justify-between">
                        <div>
                            <h3 class="text-2xl font-black text-[#0A2C5C] uppercase tracking-tight">{{ __('foundations.foundations') }}</h3>
                            <p class="text-[10px] font-bold text-gray-400 uppercase tracking-widest mt-1">Zarządzaj fundacjami wspieranymi przez Twoją firmę</p>
                        </div>
                        <Link
                            :href="route('admin.foundations.create')"
                            class="inline-flex items-center px-10 py-4 bg-[#00a0e3] border border-transparent rounded-2xl font-black text-[10px] text-white uppercase tracking-widest hover:bg-blue-400 transition duration-200 shadow-lg shadow-blue-400/20"
                        >
                            + DODAJ FUNDACJĘ
                        </Link>
                    </div>

                    <!-- Filtry -->
                    <div class="mt-10 pt-10 border-t border-gray-50">
                        <div class="flex flex-wrap items-center gap-4">
                            <div class="w-full md:w-80">
                                <TextInput
                                    v-model="params.name"
                                    type="text"
                                    placeholder="Nazwa"
                                    class="w-full"
                                    @keyup.enter="search"
                                />
                            </div>
                            <div class="w-full md:w-80">
                                <multiselect
                                    class="custom-multiselect"
                                    v-model="params.category"
                                    :options="categories"
                                    track-by="value"
                                    label="name"
                                    placeholder="Wybierz kategorię"
                                    :selectLabel="__('translate.selectLabel')"
                                    :selectGroupLabel="__('translate.selectGroupLabel')"
                                    :selectedLabel="__('translate.selectedLabel')"
                                    :deselectLabel="__('translate.deselectLabel')"
                                    @select="() => nextTick(() => search())"
                                    @remove="() => nextTick(() => search())"
                                    :internal-search="true"
                                >
                                    <template #noResult><span>{{ __('translate.noOptions') }}</span></template>
                                    <template #noOptions><span>{{ __('translate.noResult') }}</span></template>
                                </multiselect>
                            </div>
                            <div class="w-full md:w-80">
                                <multiselect
                                    class="custom-multiselect"
                                    v-model="params.country"
                                    :options="countries.flatMap(g => g.elements)"
                                    track-by="countryCode"
                                    label="name"
                                    placeholder="Wybierz kraj"
                                    :selectLabel="__('translate.selectLabel')"
                                    :selectGroupLabel="__('translate.selectGroupLabel')"
                                    :selectedLabel="__('translate.selectedLabel')"
                                    :deselectLabel="__('translate.deselectLabel')"
                                    @select="() => nextTick(() => search())"
                                    @remove="() => nextTick(() => search())"
                                >
                                    <template #noResult><span>{{ __('translate.noOptions') }}</span></template>
                                    <template #noOptions><span>{{ __('translate.noResult') }}</span></template>
                                </multiselect>
                            </div>
                            <div class="flex gap-2 ml-auto">
                                <button
                                    @click="resetFilters"
                                    class="px-6 py-3 bg-white border border-gray-200 text-[#0A2C5C] text-[10px] font-black uppercase tracking-widest rounded-xl hover:bg-gray-50 transition"
                                >
                                    RESETUJ
                                </button>
                                <button
                                    @click="search"
                                    class="px-6 py-3 bg-[#0A2C5C] text-white text-[10px] font-black uppercase tracking-widest rounded-xl hover:bg-blue-900 transition"
                                >
                                    FILTRUJ
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="bg-white rounded-[3rem] shadow-xl shadow-blue-900/5 border border-gray-100 p-8">
                    <div class="flex justify-between mb-8 px-2 border-b border-gray-50 pb-6">
                        <h3 class="text-[10px] font-black text-[#0A2C5C] uppercase tracking-[0.2em]">
                            Lista fundacji
                        </h3>
                    </div>

                    <div class="overflow-x-auto">
                        <table class="min-w-full divide-y divide-gray-100">
                            <thead>
                            <tr>
                                <th class="px-6 py-4 text-left text-[8px] font-black text-gray-300 uppercase tracking-widest">ID</th>
                                <th class="px-6 py-4 text-left text-[8px] font-black text-gray-300 uppercase tracking-widest">Logo</th>
                                <th class="px-6 py-4 text-left text-[8px] font-black text-gray-300 uppercase tracking-widest">Nazwa</th>
                                <th class="px-6 py-4 text-left text-[8px] font-black text-gray-300 uppercase tracking-widest">Kategoria</th>
                                <th class="px-6 py-4 text-left text-[8px] font-black text-gray-300 uppercase tracking-widest text-center">Kraj</th>
                                <th class="px-6 py-4 text-left text-[8px] font-black text-gray-300 uppercase tracking-widest text-center">Powiązania</th>
                                <th class="px-6 py-4 text-center text-[8px] font-black text-gray-300 uppercase tracking-widest">Status</th>
                                <th class="px-6 py-4 text-center text-[8px] font-black text-gray-300 uppercase tracking-widest">Akcje</th>
                            </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-100">
                            <tr v-for="p in foundations.data" :key="p.id" class="hover:bg-gray-50/50 transition-colors group">
                                <td class="px-6 py-4 text-xs font-bold text-gray-400">#{{ p.id }}</td>

                                <td class="px-6 py-4">
                                    <div class="w-12 h-12 rounded-xl bg-gray-50 p-2 border border-gray-100 flex items-center justify-center overflow-hidden">
                                        <img :src="p.logo" alt="" class="max-w-full max-h-full object-contain" />
                                    </div>
                                </td>

                                <td class="px-6 py-4">
                                    <span class="text-xs font-black text-[#0A2C5C] uppercase tracking-tight">{{ p.name }}</span>
                                </td>

                                <td class="px-6 py-4">
                                    <span class="text-[10px] font-bold text-gray-500 uppercase tracking-widest">{{ p.category || 'Brak' }}</span>
                                </td>

                                <td class="px-6 py-4 text-center">
                                    <span class="text-[10px] font-bold text-gray-500 uppercase tracking-widest">{{ p.country || 'Brak' }}</span>
                                </td>

                                <td class="px-6 py-4 text-center">
                                    <span class="px-3 py-1 bg-gray-50 rounded-lg text-[10px] font-black text-[#0A2C5C] border border-gray-100">{{ p.invoices_count }}</span>
                                </td>

                                <td class="px-6 py-4 text-center">
                                    <div class="flex justify-center">
                                        <button
                                            @click="toggleActive(p.id)"
                                            class="relative inline-flex h-6 w-11 flex-shrink-0 cursor-pointer rounded-full border-2 border-transparent transition-colors duration-200 ease-in-out focus:outline-none"
                                            :class="p.active ? 'bg-[#00a0e3]' : 'bg-gray-200'"
                                        >
                                            <span
                                                aria-hidden="true"
                                                class="pointer-events-none inline-block h-5 w-5 transform rounded-full bg-white shadow ring-0 transition duration-200 ease-in-out"
                                                :class="p.active ? 'translate-x-5' : 'translate-x-0'"
                                            />
                                        </button>
                                    </div>
                                </td>

                                <td class="px-6 py-4 text-center">
                                    <div class="flex gap-2 justify-center">
                                        <Link
                                            :href="route('admin.foundations.edit', p.id)"
                                            class="px-4 py-2 bg-[#0A2C5C] rounded-lg text-white text-[8px] font-black uppercase tracking-widest hover:bg-blue-900 transition-all shadow-sm"
                                        >
                                            EDYTUJ
                                        </Link>
                                        <button
                                            :disabled="p.invoices_count > 0"
                                            @click="confirmFoundationDeletion(p.id)"
                                            class="px-4 py-2 bg-red-600 rounded-lg text-white text-[8px] font-black uppercase tracking-widest hover:bg-red-700 transition-all shadow-sm disabled:opacity-50 disabled:cursor-not-allowed"
                                        >
                                            USUŃ
                                        </button>
                                    </div>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="mt-6">
                        <Pagination :links="foundations.links" />
                    </div>
                </div>
            </div>
        </div>

        <!-- Delete Foundation Confirmation Modal -->
        <ConfirmationModal :show="foundationIdBeingDeleted !== null" @close="foundationIdBeingDeleted = null">
            <template #title>
                Usuń Fundację
            </template>

            <template #content>
                Czy na pewno chcesz usunąć tę fundację? Tej operacji nie można cofnąć.
            </template>

            <template #footer>
                <SecondaryButton @click="foundationIdBeingDeleted = null">
                    Anuluj
                </SecondaryButton>

                <DangerButton
                    class="ml-3"
                    @click="deleteFoundation"
                >
                    Usuń Fundację
                </DangerButton>
            </template>
        </ConfirmationModal>
    </AppLayout>
</template>

<style src="vue-multiselect/dist/vue-multiselect.css"></style>
<style lang="scss">
.custom-multiselect {
    .multiselect {
        &__tags {
            @apply rounded-2xl border-gray-100 bg-gray-50/50 py-3 px-4 min-h-[54px] flex items-center transition-all border-2;
        }
        &__placeholder {
            @apply text-[11px] font-black text-gray-400 uppercase tracking-widest pt-0 mb-0;
        }
        &__single {
            @apply bg-transparent text-[11px] font-black text-[#0A2C5C] uppercase tracking-widest pt-0 mb-0;
        }
        &__input {
            @apply bg-transparent text-[11px] font-black uppercase tracking-widest pt-0 mb-0;
        }
        &__select {
            @apply top-1/2 -translate-y-1/2 h-full flex items-center justify-center right-0;
            &::before {
                @apply border-t-gray-400 border-l-transparent border-r-transparent border-b-transparent border-t-[6px] border-x-[5px] relative top-0;
            }
        }
        &__content-wrapper {
            @apply rounded-2xl mt-2 border-none shadow-xl overflow-hidden;
        }
        &__option {
            @apply text-[10px] font-bold uppercase tracking-wider py-4;
            &--highlight {
                @apply bg-[#0A2C5C] text-white;
                &::after {
                    @apply bg-[#0A2C5C] text-white text-[10px] font-black uppercase tracking-widest px-4;
                }
            }
            &--selected {
                @apply bg-gray-100 text-[#0A2C5C] font-black;
            }
        }
    }
}
</style>
