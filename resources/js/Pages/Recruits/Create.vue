<script setup>
import { Link, useForm } from '@inertiajs/vue3'
import AppLayout from '@/Layouts/AppLayout.vue'
import PrimaryButton from '@/Components/PrimaryButton.vue'
import TextInput from '@/Components/TextInput.vue'
import InputLabel from '@/Components/InputLabel.vue'
import InputError from '@/Components/InputError.vue'
import SpinnerAction from '@/Components/SpinnerAction.vue'
import SecondaryButton from '@/Components/SecondaryButton.vue'
import 'vue-color/style.css'
import { ChromePicker } from 'vue-color'
import { ref } from 'vue'

// Zakładki
const activeTab = ref('basic')

const form = useForm({
  name: '',
  email: '',
  password: '',
  password_confirmation: '',
  recruiter_phone: '',
  color: '#00a0e3',
  photo: null,
})

const photoPreview = ref(null);
const photoInput = ref(null);

const selectNewPhoto = () => {
  photoInput.value.click();
};

const updatePhotoPreview = () => {
  const photo = photoInput.value.files[0];

  if (!photo) return;

  const reader = new FileReader();

  reader.onload = (e) => {
    photoPreview.value = e.target.result;
  };

  reader.readAsDataURL(photo);
};

const createUser = () => {
  if (photoInput.value) {
    form.photo = photoInput.value.files[0];
  }

  form.post(route('recruits.store'), {
    errorBag: 'createUser',
    preserveScroll: true,
    onSuccess: () => form.reset()
  })
}
</script>

<template>
  <AppLayout :title="__('translate.createRecruit')">
    <template #header>
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ __('translate.createRecruit') }}
      </h2>
    </template>

    <div class="py-8">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white rounded-[2rem] shadow-sm p-6">
          <div class="flex gap-6 px-4 mb-6">
            <button type="button" @click="activeTab = 'basic'" :class="[activeTab==='basic' ? 'text-[#0b2a55] font-black border-b-2 border-[#0b2a55]' : 'text-gray-500 font-semibold']" class="pb-2 transition-all duration-200">
              Dane podstawowe
            </button>
            <button type="button" @click="activeTab = 'personal'" :class="[activeTab==='personal' ? 'text-[#0b2a55] font-black border-b-2 border-[#0b2a55]' : 'text-gray-500 font-semibold']" class="pb-2 transition-all duration-200">
              Personalizacja
            </button>
          </div>

          <div class="mt-6 grid grid-cols-1 lg:grid-cols-3 gap-6 items-start">
            <!-- Avatar Section -->
            <div class="flex flex-col items-center">
              <input
                  id="photo"
                  ref="photoInput"
                  type="file"
                  class="hidden"
                  @change="updatePhotoPreview"
              >

              <div class="relative w-40 h-40">
                <div class="w-full h-full rounded-full border-4 bg-gray-100 flex items-center justify-center overflow-hidden" :style="{ borderColor: form.color || '#0b2a55' }">
                  <!-- Current Profile Photo / Placeholder -->
                  <template v-if="!photoPreview">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-16 w-16 text-gray-400" viewBox="0 0 24 24" fill="currentColor">
                      <path d="M12 12c2.761 0 5-2.239 5-5s-2.239-5-5-5-5 2.239-5 5 2.239 5 5 5zm0 2c-3.866 0-7 3.134-7 7h14c0-3.866-3.134-7-7-7z" />
                    </svg>
                  </template>

                  <!-- New Profile Photo Preview -->
                  <div v-else class="w-full h-full">
                    <span
                        class="block rounded-full w-full h-full bg-cover bg-no-repeat bg-center"
                        :style="'background-image: url(\'' + photoPreview + '\');'"
                    />
                  </div>
                </div>

                <button
                    type="button"
                    class="absolute -bottom-2 left-1/2 -translate-x-1/2 bg-[#0b2a55] text-white text-[10px] font-bold px-3 py-1 rounded-md hover:bg-[#162a44] transition whitespace-nowrap z-10"
                    @click.prevent="selectNewPhoto"
                >
                  {{ __('translate.ProfileInformationPhoto') }}
                </button>
              </div>
              <InputError :message="form.errors.photo" class="mt-2" />
            </div>

            <!-- Formularze -->
            <div class="lg:col-span-2">
              <!-- Dane podstawowe -->
              <div v-if="activeTab==='basic'" class="grid grid-cols-1 gap-4">
                <div>
                  <InputLabel for="name" :value="__('translate.name')" />
                  <TextInput id="name" v-model="form.name" autofocus class="mt-1 block w-full" type="text" />
                  <InputError :message="form.errors.name" class="mt-2" />
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                  <div>
                    <InputLabel for="email" :value="__('translate.email')" />
                    <TextInput id="email" v-model="form.email" class="mt-1 block w-full" type="email" />
                    <InputError :message="form.errors.email" class="mt-2" />
                  </div>
                  <div>
                    <InputLabel for="recruiter_phone" :value="__('translate.phone')" />
                    <TextInput id="recruiter_phone" v-model="form.recruiter_phone" class="mt-1 block w-full" type="number" />
                    <InputError :message="form.errors.recruiter_phone" class="mt-2" />
                  </div>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                  <div>
                    <InputLabel for="password" :value="__('translate.password')" />
                    <TextInput id="password" v-model="form.password" class="mt-1 block w-full" type="password" />
                    <InputError :message="form.errors.password" class="mt-2" />
                  </div>
                  <div>
                    <InputLabel for="password_confirmation" :value="__('translate.passwordconfirm')" />
                    <TextInput id="password_confirmation" v-model="form.password_confirmation" class="mt-1 block w-full" type="password" />
                    <InputError :message="form.errors.password_confirmation" class="mt-2" />
                  </div>
                </div>
              </div>

              <!-- Personalizacja -->
              <div v-else class="grid grid-cols-1 gap-4">
                <div>
                  <p class="text-gray-600 mb-2">Wybierz kolor, który ma zostać przypisany do rekrutera.</p>
                  <ChromePicker v-model="form.color" formats="hex" />
                  <p class="mt-1 text-sm text-gray-500">{{ __('translate.colorHelper') }}</p>
                  <p class="text-xs text-gray-400 italic">{{ __('translate.colorOptional') }}</p>
                  <InputError :message="form.errors.color" class="mt-2" />
                </div>
              </div>

              <div class="mt-6 flex justify-end">
                <PrimaryButton :class="{ 'opacity-25': form.processing }" :disabled="form.processing" @click.prevent="createUser">
                  <spinner-action :process="form.processing">ZAPISZ</spinner-action>
                </PrimaryButton>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </AppLayout>
</template>
