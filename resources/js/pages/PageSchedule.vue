<template>
    <div class="flex items-center justify-center h-full my-16">
        <div class="max-w-5xl w-full">
            <n-calendar
                v-model:value="value"
                @update:value="handleUpdateValue"
            >
                <template #default="{ year, month, date }">
                    <div class="flex flex-col gap-2">
                        <div
                            v-for="deadline in getDeadlines(date, month, year)"
                            :key="deadline.id"
                            class="rounded bg-gray-800 px-2 py-1 text-xs"
                        >
                            {{ deadline.name }}
                        </div>
                    </div>
                </template>
            </n-calendar>
        </div>
    </div>
</template>
<script setup>
import { NCalendar } from 'naive-ui'
import { ref } from 'vue'
import { useMessage } from 'naive-ui'
import { isYesterday, addDays } from 'date-fns/esm'
import { useAxios } from '../composables/useAxios.js'

const message = useMessage()
const axios = useAxios()

const value = ref(Date.now())
const schedule = ref(null)
const uuid = location.pathname.slice(3)

axios.get(`/api/schedules/${uuid}`)
    .then(data => schedule.value = data.data.data)

const handleUpdateValue = (_, { year, month, date }) => {
    message.success(`${year}-${month}-${date}`)
}

const getDeadlines = (day, month, year) => {
    return schedule.value
        ? schedule.value.deadlines.filter(deadline => deadline.day === day && deadline.month === month && deadline.year === year)
        : []
}
</script>