<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import {Head} from '@inertiajs/vue3';

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
            <div
                v-for="post in posts.data"
                class="grid-cols-7 gap-6 mx-auto space-y-6 max-w-5xl sm:px-6 lg:px-8 md:space-y-0 md:grid"
            >
                <div class="col-span-5">
                    <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                        <div class="p-6 text-gray-900 dark:text-gray-100 space-y-6">
                            <div>
                                <img class="w-full h-auto" src="demo.jpg" alt="">
                            </div>
                            <div class="border-t border-b py-4">
                                <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                                    আপনার অনুভূতি প্রকাশ করুন
                                </h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-span-2 space-y-3">
                    <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                        <div class="p-6 text-gray-900 dark:text-gray-100">
                            svg
                            <h1>310</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
