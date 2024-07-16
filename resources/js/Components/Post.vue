<script setup>
import Svg from "@/Components/Svg.vue";
import {ref} from "vue";

defineProps({
    post: Object
})

const showGif = ref(false);
const loading = ref(false);

const vomitAudio = () => {
    loading.value = true;
    showGif.value = true;
    setTimeout(() => {
        showGif.value = false;
        loading.value = false;
    }, 3000);

    const audio = document.getElementById('vomit');
    if (audio.paused) {
        audio.play();
    } else {
        audio.pause();
    }
}
</script>

<template>
    <div class="grid-cols-7 gap-6 mx-auto space-y-6 max-w-5xl sm:px-6 lg:px-8 md:space-y-0 md:grid">
        <div class="col-span-5">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100 space-y-6">
                    <div class="relative">
                        <div class="w-full">
                            <img class="w-full h-auto rounded" :src="post.image" alt="">
                        </div>
                        <div v-if="showGif" class="absolute top-32 left-48">
                            <img src="vomiting.gif" alt="">
                        </div>

                        <audio id="vomit">
                            <source src="vomit.mp3" type="audio/mpeg">
                        </audio>
                    </div>
                    <div class="border-t border-b dark:border-gray-500 py-4 space-x-6">
                        <button @click="vomitAudio" :disabled="loading" :class="{ 'opacity-25': loading }">
                            <span class="items-center inline-flex flex-col">
                                <Svg name="vomiting" class="w-12 h-12" />
                            </span>
                        </button>
                        <button @click="vomitAudio" :disabled="loading" :class="{ 'opacity-25': loading }">
                            <span class="items-center inline-flex flex-col">
                                <img src="slap.png" alt="" class="w-12 h-12">
                            </span>
                        </button>
                        <button @click="vomitAudio" :disabled="loading" :class="{ 'opacity-25': loading }">
                            <span class="items-center inline-flex flex-col">
                                <img src="shoes.png" alt="" class="w-12 h-12">
                            </span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-span-2 space-y-3">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100 text-center space-y-3">
                    <div class="flex items-center justify-center">
                        <Svg name="vomiting" class="w-12 h-12" />
                    </div>
                    <span class="font-semibold">পোষ্ট দেখে বুমি করতে ইচ্ছে হয়েছে</span>
                    <h1 class="text-3xl font-bold">310 জনের</h1>
                </div>
            </div>
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100 text-center space-y-3">
                    <div class="flex items-center justify-center">
                        <img src="slap.png" alt="" class="w-12 h-12">
                    </div>
                    <span class="font-semibold">পোষ্ট দেখে থাপড়া দিতে ইচ্ছে হয়েছে</span>
                    <h1 class="text-3xl font-bold">310 জনের</h1>
                </div>
            </div>
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100 text-center space-y-3">
                    <div class="flex items-center justify-center">
                        <img src="shoes.png" alt="" class="w-12 h-12">
                    </div>
                    <span class="font-semibold">পোষ্ট দেখে জুতা মারতে ইচ্ছে হয়েছে</span>
                    <h1 class="text-3xl font-bold">310 জনের</h1>
                </div>
            </div>
        </div>
    </div>
</template>
