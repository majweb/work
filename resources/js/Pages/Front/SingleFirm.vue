<script setup>
import FrontLayout from "@/Layouts/FrontLayout.vue";
import {Link} from "@inertiajs/vue3";
const props = defineProps({
    firm: Object
})
</script>
<template>
    <FrontLayout :title="__('translate.firm')">
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg">
                    <div class="flex flex-col gap-2">
                        <Link :href="route('front.firms')" class="m-4 bg-blue-200 p-2 rounded-md">Wróć do list</Link>
                        <div>
                            <h2>Firma</h2>
                            <p>
                                nazwa:{{props.firm.name}}
                            </p>
                            <p>
                                id:{{props.firm.id}}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </FrontLayout>
</template>
