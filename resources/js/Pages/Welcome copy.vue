<script setup>
import { Head, Link } from '@inertiajs/inertia-vue3';
import AddFood from '../../img/Add Food.svg';
import { usePreferredColorScheme } from '@vueuse/core';
import { computed } from 'vue';

defineProps({
    canLogin: Boolean,
    canRegister: Boolean,
    laravelVersion: String,
    phpVersion: String,
});

const preferredColorScheme = usePreferredColorScheme();
const Logo = computed(() =>
    preferredColorScheme.value == 'dark'
        ? VegifyLogoOrigBGDark
        : VegifyLogoOrigBGLight
);
</script>

<template>
    <Head title="Welcome" />

    <div
        class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0"
    >
        <div v-if="canLogin" class="fixed top-0 right-0 px-6 py-4 block">
            <Link
                v-if="$page.props.auth.user"
                :href="route('dashboard')"
                class="text-sm text-gray-700 dark:text-gray-300 underline"
            >
                Dashboard
            </Link>

            <template v-else>
                <Link
                    :href="route('login')"
                    class="text-sm text-gray-700 dark:text-gray-300 underline"
                >
                    Log in
                </Link>

                <Link
                    v-if="canRegister"
                    :href="route('register')"
                    class="ml-4 text-sm text-gray-700 dark:text-gray-300 underline"
                >
                    Register
                </Link>
            </template>
        </div>

        <div class="max-w-6xl mx-auto sm:px-12 md:px-40 lg:px-80">
            <div class="flex justify-center pt-8 sm:justify-start sm:pt-0">
                <VegifyLogo
                    class="h-16 w-auto text-gray-700 mt-10 sm:mt-auto sm:h-20"
                    alt="Vegify"
                />
            </div>

            <div
                class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg"
            >
                <div class="grid grid-cols-1 md:grid-cols-1">
                    <div class="p-6">
                        <div class="flex items-center">
                            <img :src="AddFood" class="w-8 h-8 text-gray-500" />
                            <div class="ml-4 text-lg leading-7 font-semibold">
                                <a
                                    href="/"
                                    class="underline text-gray-900 dark:text-white"
                                    >Add Ingredients and Recipes</a
                                >
                            </div>
                        </div>

                        <div class="ml-12">
                            <div
                                class="mt-2 text-gray-600 dark:text-gray-400 text-sm"
                            >
                                Vegify is a marvelous tool for tracking
                                micronutrition, so you can plan your diet with
                                ease.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
