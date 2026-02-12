<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import {usePermission} from "@/Composables/usePermission.js";
import AdminDashboard from '@/Components/Dashboard/AdminDashboard.vue';
import WorkerDashboard from '@/Components/Dashboard/WorkerDashboard.vue';
import RecruitDashboard from '@/Components/Dashboard/RecruitDashboard.vue';
import FirmDashboard from '@/Components/Dashboard/FirmDashboard.vue';
import __ from "@/lang.js";
const {hasRole} = usePermission();

const props = defineProps({
    chartRecruit: Object,
    chartFirm: Object,
    lastAplications: Object,
    otherAplications: Object,
    notifications: Array,
    packages: Array,
    additionalServices: Array,
    countQuestions: Number,
    recruitsCount: Number,
    projectsCount: Number,
    aplicationCount: Number,
    viewCount: Number,
});
</script>

<template>
    <AppLayout :title="__('translate.dashboard')">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{__('translate.dashboard')}}
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

                <AdminDashboard v-if="hasRole('admin')" :countQuestions="countQuestions"/>
                <WorkerDashboard v-else-if="hasRole('worker')" :notifications="notifications" :lastAplications="lastAplications" :otherAplications="otherAplications" />
                <RecruitDashboard v-else-if="hasRole('recruit') && !hasRole('firm')" :applications="otherAplications" :notifications="notifications" :projects="chartRecruit?.projects || []" :chartData="chartRecruit?.data || null" :lastAplications="chartRecruit?.applications" || []/>
                <FirmDashboard v-else-if="hasRole('firm')" :aplicationCount="aplicationCount" :viewCount="viewCount" :projectsCount="projectsCount" :recruitsCount="recruitsCount" :chartData="chartFirm?.recruits || null"  :chartDataApp="chartFirm?.aplications || null" :chartDataInvoices="chartFirm?.lastInvoices"  :notifications="notifications" :packages="packages" :additionalServices="additionalServices"/>
            </div>
        </div>
    </AppLayout>
</template>
