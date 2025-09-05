<script setup>
  import AppLayout from '@/Layouts/AppLayout.vue';
  import {Head, Link} from '@inertiajs/vue3'
  import PrimaryButton from "@/Components/PrimaryButton.vue";

  defineProps({
      app: {
          type: [String, Number],
          default: null,
      },
      decision:{
          type:String,
          default:null
      }
  })
</script>

<template>

    <div class="mt-6 min-h-screen flex items-center justify-center">
        <Head :title="__('translate.externalCompanies')" />
        <div class="w-full max-w-7xl px-4 sm:px-6 lg:px-8 flex flex-col items-center justify-center">
            <!-- Nagłówek i przycisk -->
            <div class="flex flex-col sm:flex-row justify-between items-center mb-6 gap-4">
                <div class="flex flex-col items-center justify-center py-20">
                        <h1 class="text-2xl font-bold text-green-600 mb-4">
                            ✅ {{__('translate.changeStatus')}}
                        </h1>
                        <p class="text-gray-600 mb-6">
                            {{__('translate.aplication')}} <span class="font-semibold">#{{ app }}</span> {{__('translate.giveStatus')}}
                            <span class="font-semibold capitalize">{{decision == 'no' ? __('translate.no'): __('translate.yes')}}</span>.
                        </p>

                        <Link
                            class="px-4 py-2 bg-blue-600 text-white rounded-lg shadow hover:bg-blue-700 transition"
                            :href="route('aplications.index')"
                        >
                            {{__('translate.backToAplicationList')}}
                        </Link>
                    </div>
            </div>
        </div>
    </div>
</template>
