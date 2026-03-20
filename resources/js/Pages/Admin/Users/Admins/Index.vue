<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import { Link, router, usePage, useForm } from '@inertiajs/vue3';
import { ref, watch, computed } from 'vue';
import Pagination from '@/Components/Pagination.vue';
import pickBy from 'lodash/pickBy';
import DialogModal from '@/Components/DialogModal.vue';
import SecondaryButton from '@/Components/SecondaryButton.vue';
import DangerButton from '@/Components/DangerButton.vue';
import InputError from '@/Components/InputError.vue';
import InputLabel from '@/Components/InputLabel.vue';
import TextInput from '@/Components/TextInput.vue';
import Checkbox from '@/Components/Checkbox.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';

const props = defineProps({
    users: Object,
    filters: Object,
});

const filters = ref({
    search: props.filters.search || '',
    sort: props.filters.sort || 'created_at',
    direction: props.filters.direction || 'desc',
    role: props.filters.role || '',
});

const locale = computed(() => usePage().props.language || 'pl');

const userToToggle = ref(null);
const userToDelete = ref(null);
const activeMenuId = ref(null);
const showAddUserModal = ref(false);

const form = useForm({
    name: '',
    email: '',
    password: '',
    password_confirmation: '',
    is_subadmin: false,
});

const openAddUserModal = () => {
    form.reset();
    showAddUserModal.value = true;
};

const createUser = () => {
    form.post(route('admin.users.admins.store'), {
        preserveScroll: true,
        onSuccess: () => {
            showAddUserModal.value = false;
            form.reset();
        },
    });
};

const toggleMenu = (id) => {
    if (activeMenuId.value === id) {
        activeMenuId.value = null;
    } else {
        activeMenuId.value = id;
    }
};

const confirmToggleSubAdmin = (user) => {
    userToToggle.value = user;
};

const toggleSubAdmin = () => {
    if (userToToggle.value) {
        router.post(route('admin.users.admins.toggle-subadmin', userToToggle.value.id), {}, {
            preserveScroll: true,
            onSuccess: () => {
                userToToggle.value = null;
                activeMenuId.value = null;
            },
        });
    }
};

const sort = (field) => {
    filters.value.sort = field;
    filters.value.direction = filters.value.direction === 'asc' ? 'desc' : 'asc';
};

const confirmDeleteUser = (user) => {
    userToDelete.value = user;
};

const deleteUser = () => {
    if (userToDelete.value) {
        router.delete(route('admin.users.admins.destroy', userToDelete.value.id), {
            preserveScroll: true,
            onSuccess: () => {
                userToDelete.value = null;
                activeMenuId.value = null;
            },
        });
    }
};

watch(filters, (value) => {
    router.get(route('admin.users.admins.index'), pickBy(value), {
        preserveState: true,
        replace: true,
    });
}, { deep: true });

const formatDate = (dateString) => {
    if (!dateString) return '-';
    return new Date(dateString).toLocaleDateString(locale.value === 'pl' ? 'pl-PL' : 'en-US', {
        year: 'numeric',
        month: '2-digit',
        day: '2-digit',
        hour: '2-digit',
        minute: '2-digit'
    });
};

</script>

<template>
    <AppLayout title="Administratorzy">
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <!-- Page Header (Alternative for Admin) -->
                <div class="flex flex-col md:flex-row md:items-center justify-between gap-4 mb-8">
                    <div>
                        <h2 class="font-black text-2xl text-slate-800 leading-tight uppercase tracking-tight">
                            Administratorzy
                        </h2>
                        <p class="text-sm text-slate-500 font-medium mt-1">Zarządzaj uprawnieniami administratorów i pod-administratorów</p>
                    </div>
                    <div>
                        <button
                            @click="openAddUserModal"
                            class="inline-flex items-center px-6 py-3 bg-blue-600 border border-transparent rounded-2xl font-black text-xs text-white uppercase tracking-widest hover:bg-blue-700 active:bg-blue-900 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition-all shadow-lg shadow-blue-200"
                        >
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M12 4v16m8-8H4" />
                            </svg>
                            Dodaj administratora
                        </button>
                    </div>
                </div>

                <!-- Filters -->
                <div class="bg-white p-6 rounded-3xl shadow-sm border border-slate-100 mb-8">
                    <div class="flex flex-col md:flex-row gap-4 items-center justify-between">
                        <div class="relative w-full md:w-96 group">
                            <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-slate-400 group-focus-within:text-blue-500 transition-colors" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                                </svg>
                            </div>
                            <input
                                v-model="filters.search"
                                type="text"
                                placeholder="Szukaj po nazwie lub email..."
                                class="block w-full pl-11 pr-4 py-3 bg-slate-50 border-none rounded-2xl text-slate-600 text-sm font-medium focus:ring-2 focus:ring-blue-500/20 focus:bg-white transition-all"
                            >
                        </div>
                        <div class="flex flex-col md:flex-row gap-4 items-center w-full md:w-auto">
                            <div class="w-full md:w-64">
                                <select
                                    v-model="filters.role"
                                    class="block w-full px-4 py-3 bg-slate-50 border-none rounded-2xl text-slate-600 text-sm font-medium focus:ring-2 focus:ring-blue-500/20 focus:bg-white transition-all"
                                >
                                    <option value="">Wszystkie role</option>
                                    <option value="admin">Administrator (Główny)</option>
                                    <option value="admin-sub">Admin-Sub</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Table -->
                <div class="bg-white rounded-[32px] shadow-sm border border-slate-100">
                    <div class="overflow-visible">
                        <table class="w-full text-left border-collapse">
                            <thead>
                                <tr class="bg-slate-50/50">
                                    <th @click="sort('name')" class="px-6 py-5 text-[10px] font-black uppercase tracking-widest text-slate-400 cursor-pointer hover:text-blue-600 transition-colors group">
                                        <div class="flex items-center gap-2">
                                            Użytkownik
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 transition-transform" :class="{'rotate-180': filters.sort === 'name' && filters.direction === 'desc', 'opacity-0 group-hover:opacity-100': filters.sort !== 'name'}" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 15l7-7 7 7" />
                                            </svg>
                                        </div>
                                    </th>
                                    <th class="px-6 py-5 text-[10px] font-black uppercase tracking-widest text-slate-400">Rola</th>
                                    <th @click="sort('created_at')" class="px-6 py-5 text-[10px] font-black uppercase tracking-widest text-slate-400 cursor-pointer hover:text-blue-600 transition-colors group text-right">
                                        <div class="flex items-center justify-end gap-2">
                                            Data dołączenia
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 transition-transform" :class="{'rotate-180': filters.sort === 'created_at' && filters.direction === 'desc', 'opacity-0 group-hover:opacity-100': filters.sort !== 'created_at'}" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 15l7-7 7 7" />
                                            </svg>
                                        </div>
                                    </th>
                                    <th class="px-6 py-5 text-[10px] font-black uppercase tracking-widest text-slate-400 text-right">Akcje</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-slate-50">
                                <tr v-for="user in users.data" :key="user.id" class="hover:bg-blue-50/30 transition-colors group">
                                    <td class="px-6 py-5">
                                        <div class="flex items-center gap-4">
                                            <div class="h-10 w-10 rounded-xl bg-gradient-to-br from-slate-100 to-slate-200 flex items-center justify-center text-slate-500 font-bold text-sm shadow-sm">
                                                {{ user.name.charAt(0).toUpperCase() }}
                                            </div>
                                            <div>
                                                <div class="text-sm font-bold text-slate-800">{{ user.name }}</div>
                                                <div class="text-xs font-medium text-slate-500 mt-0.5">{{ user.email }}</div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-6 py-5">
                                        <span v-if="user.roles && user.roles.some(r => r.name === 'admin-sub')" class="px-3 py-1 bg-amber-50 text-amber-600 text-[10px] font-black uppercase tracking-wider rounded-full border border-amber-100">
                                            Admin-Sub
                                        </span>
                                        <span v-else class="px-3 py-1 bg-blue-50 text-blue-600 text-[10px] font-black uppercase tracking-wider rounded-full border border-blue-100">
                                            Admin
                                        </span>
                                    </td>
                                    <td class="px-6 py-5 text-right">
                                        <div class="text-sm font-bold text-slate-700">{{ formatDate(user.created_at) }}</div>
                                    </td>
                                    <td class="px-6 py-5 text-right">
                                        <div class="flex items-center justify-end gap-2">
                                            <div class="relative inline-block text-left">
                                                <button
                                                    @click.stop="toggleMenu(user.id)"
                                                    class="p-2 hover:bg-white rounded-xl transition-all hover:shadow-sm border border-transparent hover:border-slate-200 group-hover:bg-white"
                                                >
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-slate-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 5v.01M12 12v.01M12 19v.01M12 6a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z" />
                                                    </svg>
                                                </button>

                                                <div
                                                    v-if="activeMenuId === user.id"
                                                    class="absolute right-0 mt-2 w-48 rounded-2xl bg-white shadow-xl shadow-slate-200/50 border border-slate-100 z-[100] overflow-hidden"
                                                >
                                                    <div class="p-2">
                                                        <button
                                                            @click="confirmToggleSubAdmin(user)"
                                                            class="w-full text-left px-4 py-2.5 text-xs font-bold text-slate-700 hover:bg-slate-50 rounded-xl transition-colors flex items-center gap-3"
                                                        >
                                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-blue-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                                                            </svg>
                                                            {{ user.roles && user.roles.some(r => r.name === 'admin-sub') ? 'Usuń admin-sub' : 'Nadaj admin-sub' }}
                                                        </button>

                                                        <button
                                                            v-if="user.roles && user.roles.some(r => r.name === 'admin-sub')"
                                                            @click="confirmDeleteUser(user)"
                                                            class="w-full text-left px-4 py-2.5 text-xs font-bold text-red-600 hover:bg-red-50 rounded-xl transition-colors flex items-center gap-3"
                                                        >
                                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-red-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                                            </svg>
                                                            Usuń administratora
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <!-- Pagination -->
                    <div class="px-6 py-5 bg-slate-50/50 border-t border-slate-50">
                        <Pagination :links="users.links" />
                    </div>
                </div>
            </div>
        </div>

        <!-- Toggle Sub-Admin Confirmation Modal -->
        <DialogModal :show="userToToggle !== null" @close="userToToggle = null">
            <template #title>
                {{ userToToggle?.roles && userToToggle.roles.some(r => r.name === 'admin-sub') ? 'Usuń uprawnienia pod-administratora' : 'Nadaj uprawnienia pod-administratora' }}
            </template>

            <template #content>
                Czy na pewno chcesz zmienić uprawnienia dla użytkownika <b>{{ userToToggle?.name }}</b>?
                <p v-if="userToToggle?.roles && userToToggle.roles.some(r => r.name === 'admin-sub')" class="mt-4 text-sm text-slate-500">
                    Użytkownik straci rolę 'admin-sub', co może wpłynąć na jego dostęp do niektórych funkcji panelu.
                </p>
                <p v-else class="mt-4 text-sm text-slate-500">
                    Użytkownik otrzyma rolę 'admin-sub'.
                </p>
            </template>

            <template #footer>
                <SecondaryButton @click="userToToggle = null">
                    Anuluj
                </SecondaryButton>

                <DangerButton
                    v-if="userToToggle?.roles && userToToggle.roles.some(r => r.name === 'admin-sub')"
                    class="ml-3"
                    @click="toggleSubAdmin"
                >
                    Usuń rolę
                </DangerButton>
                <button
                    v-else
                    class="ml-3 inline-flex items-center px-4 py-2 bg-blue-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-blue-700 active:bg-blue-900 focus:outline-none focus:border-blue-900 focus:ring focus:ring-blue-300 disabled:opacity-25 transition"
                    @click="toggleSubAdmin"
                >
                    Nadaj rolę
                </button>
            </template>
        </DialogModal>

        <!-- Delete User Confirmation Modal -->
        <DialogModal :show="userToDelete !== null" @close="userToDelete = null">
            <template #title>
                Usuń administratora
            </template>

            <template #content>
                Czy na pewno chcesz usunąć konto administratora <b>{{ userToDelete?.name }}</b>?
                <p class="mt-4 text-sm text-red-500 font-medium">
                    Tej operacji nie można cofnąć. Użytkownik straci całkowity dostęp do systemu.
                </p>
            </template>

            <template #footer>
                <SecondaryButton @click="userToDelete = null">
                    Anuluj
                </SecondaryButton>

                <DangerButton
                    class="ml-3"
                    @click="deleteUser"
                >
                    Usuń konto
                </DangerButton>
            </template>
        </DialogModal>

        <!-- Add User Modal -->
        <DialogModal :show="showAddUserModal" @close="showAddUserModal = false">
            <template #title>
                Dodaj nowego administratora
            </template>

            <template #content>
                <div class="space-y-4">
                    <div>
                        <InputLabel for="name" value="Imię i nazwisko" />
                        <TextInput
                            id="name"
                            v-model="form.name"
                            type="text"
                            class="mt-1 block w-full"
                            required
                            autofocus
                        />
                        <InputError :message="form.errors.name" class="mt-2" />
                    </div>

                    <div>
                        <InputLabel for="email" value="Email" />
                        <TextInput
                            id="email"
                            v-model="form.email"
                            type="email"
                            class="mt-1 block w-full"
                            required
                        />
                        <InputError :message="form.errors.email" class="mt-2" />
                    </div>

                    <div>
                        <InputLabel for="password" value="Hasło" />
                        <TextInput
                            id="password"
                            v-model="form.password"
                            type="password"
                            class="mt-1 block w-full"
                            required
                        />
                        <InputError :message="form.errors.password" class="mt-2" />
                    </div>

                    <div>
                        <InputLabel for="password_confirmation" value="Potwierdź hasło" />
                        <TextInput
                            id="password_confirmation"
                            v-model="form.password_confirmation"
                            type="password"
                            class="mt-1 block w-full"
                            required
                        />
                        <InputError :message="form.errors.password_confirmation" class="mt-2" />
                    </div>

                    <div class="flex items-center mt-4">
                        <label class="flex items-center cursor-pointer">
                            <Checkbox v-model:checked="form.is_subadmin" name="is_subadmin" />
                            <span class="ml-2 text-sm text-slate-600 font-bold uppercase tracking-wider">Dodaj jako Admin-Sub</span>
                        </label>
                    </div>
                </div>
            </template>

            <template #footer>
                <SecondaryButton @click="showAddUserModal = false">
                    Anuluj
                </SecondaryButton>

                <PrimaryButton
                    class="ml-3 px-6 py-3 bg-blue-600 rounded-2xl font-black text-xs text-white uppercase tracking-widest hover:bg-blue-700 active:bg-blue-900 shadow-lg shadow-blue-200"
                    :class="{ 'opacity-25': form.processing }"
                    :disabled="form.processing"
                    @click="createUser"
                >
                    Utwórz konto
                </PrimaryButton>
            </template>
        </DialogModal>
    </AppLayout>
</template>
