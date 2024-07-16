<script setup>
import {Head, Link, useForm} from "@inertiajs/vue3";
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import TextInput from "@/Components/TextInput.vue";
import PrimaryButton from "@/Components/PrimaryButton.vue";
import InputLabel from "@/Components/InputLabel.vue";
import InputError from "@/Components/InputError.vue";

const form = useForm({
    image: null,
    description: '',
})

const save = () => {
    form.post(route('posts.store'), {
        preserveScroll: true,
        onSuccess: () => {
            form.recentlySuccessful = true;
            form.reset();
        },
    })
}
</script>

<template>
    <Head title="Post" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">Post</h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
                <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                    <section>
                        <header>
                            <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">Post Information</h2>

                            <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
                                Publish your post.
                            </p>
                        </header>

                        <form @submit.prevent="save" class="mt-6 space-y-6">
                            <div>
                                <InputLabel for="image" value="Image" />

                                <input type="file" @input="form.image = $event.target.files[0]" />

                                <InputError class="mt-2" :message="form.errors.image" />
                            </div>

                            <div>
                                <InputLabel for="description" value="Description" />

                                <TextInput
                                    id="description"
                                    type="text"
                                    class="mt-1 block w-full"
                                    v-model="form.description"
                                />

                                <InputError class="mt-2" :message="form.errors.description" />
                            </div>

                            <div class="flex items-center gap-4">
                                <PrimaryButton :disabled="form.processing">Save</PrimaryButton>

                                <Transition
                                    enter-active-class="transition ease-in-out"
                                    enter-from-class="opacity-0"
                                    leave-active-class="transition ease-in-out"
                                    leave-to-class="opacity-0"
                                >
                                    <p v-if="form.recentlySuccessful" class="text-sm text-gray-600 dark:text-gray-400">Saved.</p>
                                </Transition>
                            </div>
                        </form>
                    </section>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
