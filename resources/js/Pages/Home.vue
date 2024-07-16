<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import {Head} from '@inertiajs/vue3';
import Post from "@/Components/Post.vue";

defineProps({
    posts: {
        type: Object
    }
})
</script>

<template>
    <Head title="Dashboard"/>

    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                আপনার অনুভূতি প্রকাশ করুন
            </h2>
        </template>

        <div class="py-12 space-y-6">
            <Post
                v-for="post in posts.data"
                :key="post.id"
                :post="post"
            />
        </div>
    </AuthenticatedLayout>
</template>
