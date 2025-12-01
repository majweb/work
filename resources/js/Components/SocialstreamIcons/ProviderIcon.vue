<script setup>
import BitbucketIcon from '@/Components/SocialstreamIcons/BitbucketIcon.vue';
import FacebookIcon from '@/Components/SocialstreamIcons/FacebookIcon.vue';
import GithubIcon from '@/Components/SocialstreamIcons/GithubIcon.vue';
import GitLabIcon from '@/Components/SocialstreamIcons/GitLabIcon.vue';
import GoogleIcon from '@/Components/SocialstreamIcons/GoogleIcon.vue';
import LinkedInIcon from '@/Components/SocialstreamIcons/LinkedInIcon.vue';
import SlackIcon from '@/Components/SocialstreamIcons/SlackIcon.vue';
import TwitterIcon from '@/Components/SocialstreamIcons/TwitterIcon.vue';

defineProps({
    provider: {
        type: Object
    },
    classes: {
        type: String,
    }
});
</script>

<template>
    <div class="text-gray-900 dark:text-gray-100">
        <BitbucketIcon v-if="provider.id === 'bitbucket'" :class="classes"/>
        <img alt="facebook" src="/images/icons/facebook.svg" v-if="provider.id === 'facebook'" :class="classes"/>
        <img alt="github" src="/images/icons/github.svg" v-if="provider.id === 'github'" :class="classes"/>
        <GitLabIcon v-if="provider.id === 'gitlab'" :class="classes"/>
        <img alt="google" src="/images/icons/google.svg" v-if="provider.id === 'google'" :class="classes"/>
        <img alt="linkedin" src="/images/icons/linkedin.svg" v-if="provider.id === 'linkedin' || provider.id === 'linkedin-openid'" :class="classes"/>
        <SlackIcon v-if="provider.id === 'slack'" :class="classes"/>
        <img alt="x" src="/images/icons/x.svg" v-if="provider.id === 'twitter' || provider.id === 'twitter-oauth-2'" :class="classes"/>
    </div>
</template>
