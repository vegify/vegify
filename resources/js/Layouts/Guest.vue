<script setup>
import VegifyLogo from '@/Assets/VegifyLogo/TheVegifyLogo.vue';
import { Link } from '@inertiajs/inertia-vue3';
</script>

<template>
    <div class="flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100 dark:bg-gray">


        <div class="w-full sm:max-w-md mt-6 px-6 py-4 overflow-hidden">
            <slot />
        </div>
    </div>
</template>
