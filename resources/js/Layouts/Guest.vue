<script setup>
import VegifyIconOrigBGLight from '@/Components/VegifyIconOrigBGLight.vue';
import VegifyIconOrigBGDark from '@/Components/VegifyIconOrigBGDark.vue'
import { Link } from '@inertiajs/inertia-vue3';

import { usePreferredColorScheme } from '@vueuse/core';
import { computed } from 'vue';

const preferredColorScheme = usePreferredColorScheme();
const Icon = computed(() => preferredColorScheme.value == 'dark' ? VegifyIconOrigBGDark : VegifyIconOrigBGLight);
</script>

<template>
    <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100 dark:bg-gray-900">
        <div>
            <Link href="/">
                <Icon class="w-20 h-20 fill-current text-gray-500" />
            </Link>
        </div>

        <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white dark:bg-gray-800 shadow-md overflow-hidden sm:rounded-lg">
            <slot />
        </div>
    </div>
</template>
