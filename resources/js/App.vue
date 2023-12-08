<template>
    <n-config-provider
        :theme="darkTheme"
        :locale="ruRU"
        :date-locale="dateRuRU"
    >
        <n-message-provider>
            <div class="w-full min-h-screen overflow-auto bg-[#212121]">
                <PageSchedule/>
            </div>
        </n-message-provider>
    </n-config-provider>
</template>

<script setup>
import { darkTheme, NConfigProvider, NMessageProvider, ruRU, dateRuRU } from 'naive-ui'
import PageSchedule from './pages/PageSchedule.vue'
</script>
