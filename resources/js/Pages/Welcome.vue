<script setup>
import ApplicationLogo from "@/Components/ApplicationLogo.vue";
import FrontLayout from "@/Layouts/FrontLayout.vue";
import {Head} from '@inertiajs/vue3'

</script>


<template>
    <Head>
        <meta property="fb:app_id" content="1234567890" />
        <meta property="og:type" content="article" />
        <meta property="og:url" content="https://abctest.pl" />
        <meta property="og:title" content="Strona główna - work4global" />
        <meta property="og:image" content="/images/test.jpg" />
        <meta property="og:description" content="pis" />
        <title>ss i tata</title>
        <meta name=keywords content="portal pracy, szukam pracy, praca za granicą, porady zdrowotne, przepisy kulinarne, darmowe lekcje niemieckiego"/>
        <meta name=description content="Opsi - Work" />
    </Head>
    <FrontLayout title="Welcome">
        <main class="mt-6 min-h-screen flex items-center justify-center">
            <div class="flex items-center justify-center">
                <ApplicationLogo class="block h-auto w-auto"/>
            </div>
            <h2>Moja mama</h2>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati, quidem!
            </p>
            {{ __('test.mama', {test: 'aaaaa', oko: 'asdasds'}) }}
        </main>
    </FrontLayout>
</template>
