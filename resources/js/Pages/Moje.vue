<template>
    <div class="max-w-4xl mx-auto p-4 space-y-6">
        <h1 class="text-2xl font-bold text-center mb-4">📝 Checklista imprezy</h1>

        <!-- Event Type Switch -->
        <div class="flex flex-wrap gap-2 justify-center">
            <button
                v-for="event in Object.keys(presets)"
                :key="event"
                @click="loadEvent(event)"
                class="px-4 py-2 text-sm font-medium rounded bg-blue-100 hover:bg-blue-200"
            >
                {{ event }}
            </button>
        </div>

        <!-- Filters -->
        <div class="flex flex-wrap gap-4 justify-center mt-4">
            <select v-model="filters.status" class="border p-2 rounded">
                <option value="">Wszystkie</option>
                <option value="done">Ukończone</option>
                <option value="pending">Nieukończone</option>
            </select>

            <select v-model="filters.priority" class="border p-2 rounded">
                <option value="">Wszystkie priorytety</option>
                <option value="low">Niski</option>
                <option value="medium">Średni</option>
                <option value="high">Wysoki</option>
            </select>
        </div>

        <!-- Checklist -->
        <draggable v-model="filteredTasks" item-key="id" class="space-y-4" handle=".handle">
            <template #item="{ element: task }">
                <div class="bg-white rounded shadow p-4 border relative">
                    <div class="flex items-center justify-between">
                        <div class="flex items-center space-x-2">
                            <span class="handle cursor-move text-gray-400">☰</span>
                            <input
                                type="checkbox"
                                v-model="task.completed"
                                @change="toggleCategory(task)"
                            />
                            <input
                                v-if="task.editing"
                                v-model="task.title"
                                @blur="task.editing = false"
                                class="border-b outline-none"
                            />
                            <span
                                v-else
                                :class="task.completed ? 'line-through text-gray-500' : ''"
                                @dblclick="task.editing = true"
                                class="cursor-pointer"
                            >
                {{ task.title }}
              </span>
                        </div>

                        <select v-model="task.priority" class="text-sm border p-1 rounded">
                            <option value="low">Niski</option>
                            <option value="medium">Średni</option>
                            <option value="high">Wysoki</option>
                        </select>
                    </div>

                    <!-- Subtasks -->
                    <div class="ml-6 mt-2 space-y-1">
                        <div
                            v-for="(sub, index) in task.subtasks"
                            :key="index"
                            class="flex items-center gap-2"
                        >
                            <input
                                type="checkbox"
                                v-model="sub.completed"
                                @change="updateParentCompletion(task)"
                            />
                            <input
                                v-if="sub.editing"
                                v-model="sub.title"
                                @blur="sub.editing = false"
                                class="border-b outline-none"
                            />
                            <span
                                v-else
                                :class="sub.completed ? 'line-through text-gray-500' : ''"
                                @dblclick="sub.editing = true"
                                class="cursor-pointer"
                            >
                {{ sub.title }}
              </span>
                        </div>

                        <!-- Add subtask -->
                        <div class="flex gap-2 items-center mt-2">
                            <input
                                v-model="newSubtask[task.id]"
                                placeholder="Nowy podpunkt..."
                                class="border px-2 py-1 text-sm rounded w-full"
                            />
                            <button
                                @click="addSubtask(task)"
                                class="bg-green-500 text-white px-2 py-1 text-sm rounded"
                            >
                                ➕
                            </button>
                        </div>
                    </div>

                    <!-- Finish Category Button -->
                    <button
                        class="text-xs mt-3 text-right block ml-auto text-blue-600 hover:underline"
                        @click="finishCategory(task)"
                    >
                        Zakończ całą kategorię
                    </button>
                </div>
            </template>
        </draggable>

        <!-- Add new main task -->
        <div class="flex gap-2 mt-6">
            <input
                v-model="newMainTask"
                placeholder="Dodaj nowy punkt główny..."
                class="border px-4 py-2 rounded w-full"
            />
            <button
                @click="addMainTask"
                class="bg-blue-500 text-white px-4 py-2 rounded"
            >
                ➕ Dodaj
            </button>
        </div>
    </div>
</template>

<script setup>
import { ref, computed } from 'vue'
import draggable from 'vuedraggable'

const newMainTask = ref('')
const newSubtask = ref({})
const filters = ref({ status: '', priority: '' })

const tasks = ref([])

const addMainTask = () => {
    if (!newMainTask.value.trim()) return
    tasks.value.push({
        id: Date.now(),
        title: newMainTask.value,
        completed: false,
        editing: false,
        priority: 'medium',
        subtasks: [],
    })
    newMainTask.value = ''
}

const addSubtask = (task) => {
    const sub = newSubtask.value[task.id]
    if (!sub?.trim()) return
    task.subtasks.push({
        title: sub,
        completed: false,
        editing: false,
    })
    newSubtask.value[task.id] = ''
}

const toggleCategory = (task) => {
    task.subtasks.forEach((sub) => (sub.completed = task.completed))
}

const updateParentCompletion = (task) => {
    task.completed = task.subtasks.every((s) => s.completed)
}

const finishCategory = (task) => {
    task.completed = true
    task.subtasks.forEach((s) => (s.completed = true))
}

const filteredTasks = computed(() => {
    return tasks.value.filter((task) => {
        const statusMatch =
            !filters.value.status ||
            (filters.value.status === 'done' && task.completed) ||
            (filters.value.status === 'pending' && !task.completed)

        const priorityMatch =
            !filters.value.priority || task.priority === filters.value.priority

        return statusMatch && priorityMatch
    })
})

const presets = {
    'Urodziny dziecka': [
        {
            title: 'Zarezerwować salę',
            subtasks: ['Sprawdzenie terminu', 'Rezerwacja'],
        },
        {
            title: 'Zamówić tort',
            subtasks: ['Wybór smaku', 'Kontakt z cukiernią'],
        },
    ],
    'Wesele': [
        {
            title: 'Rezerwacja sali weselnej',
            subtasks: ['Sprawdzenie dostępności', 'Zaliczka'],
        },
        {
            title: 'Zamówienie fotografa',
            subtasks: ['Wybór fotografa', 'Ustalenie zakresu'],
        },
    ],
    'Animacje dla dzieci': [
        {
            title: 'Zamówić animatora',
            subtasks: ['Kontakt z firmą', 'Potwierdzenie terminu'],
        },
        {
            title: 'Przygotować gry i zabawy',
            subtasks: ['Zakup nagród', 'Próba generalna'],
        },
    ],
    'Wynajem dmuchańców': [
        {
            title: 'Sprawdzenie oferty',
            subtasks: ['Porównanie cen', 'Wybór modelu'],
        },
        {
            title: 'Rezerwacja terminu',
            subtasks: ['Kontakt z firmą', 'Wpłata zaliczki'],
        },
    ],
}

const loadEvent = (eventName) => {
    tasks.value = presets[eventName].map((task) => ({
        id: Date.now() + Math.random(),
        title: task.title,
        completed: false,
        editing: false,
        priority: 'medium',
        subtasks: task.subtasks.map((t) => ({
            title: t,
            completed: false,
            editing: false,
        })),
    }))
}
</script>

<style scoped>
.line-through {
    text-decoration: line-through;
}
</style>
