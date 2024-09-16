<script setup>
import ApplicationLogo from "@/Components/ApplicationLogo.vue";
import FrontLayout from "@/Layouts/FrontLayout.vue";
</script>


<template>
    <FrontLayout
        title="Welcome"
        image="https://abctest.pl/images/test.jpg"
        keywords="słowa kluczowe"
        description="tu będzie o opis strony"
    >
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
