<script setup>
import ApplicationLogo from "@/Components/ApplicationLogo.vue";
import FrontLayout from "@/Layouts/FrontLayout.vue";
import { Head } from '@inertiajs/vue3'

</script>


<template>
    <FrontLayout title="Welcome">
    <Head>
    <meta property="og:image" content="https://abctest.pl/images/test.jpg"  />
    <meta property="og:url" content="https://abctest.pl"  />
    <meta property="og:type" content="website" />
    <title>ss i tata</title>
    <meta name=keywords content="portal pracy, szukam pracy, praca za granicą, porady zdrowotne, przepisy kulinarne, darmowe lekcje niemieckiego" />
    <meta name=description content="Opsi - Work" />
    </Head>


    <main class="mt-6 min-h-screen flex items-center justify-center">
        <div class="flex items-center justify-center">
            <ApplicationLogo class="block h-auto w-auto" />
        </div>
        <h2>Moja mama</h2>
        <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati, quidem!
        </p>
        {{__('test.mama',{test:'aaaaa',oko:'asdasds'})}}
    </main>
    </FrontLayout>
</template>
