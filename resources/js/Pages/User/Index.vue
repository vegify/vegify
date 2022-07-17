<script setup>
import TheLayout from '@/Layouts/TheLayout.vue';
import { Head, Link } from '@inertiajs/inertia-vue3';

defineProps({
    users: Object,
});
</script>

<template>

    <Head title="User" />

    <TheLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 dark:text-white leading-tight">
                Users
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white dark:bg-gray-800 dark:text-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white dark:bg-gray-700 border-b border-gray-200 dark:border-gray-900"
                        v-for="user in users" :key="user.id">
                        <div>
                            <Link :href="route('user.show', user)"
                                class="hover:underline text:indigo-700 dark:text-indigo-50">
                            {{ user.name }}
                            </Link>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </TheLayout>
</template>
