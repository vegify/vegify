<script setup>
import TheLayout from '@/Layouts/TheLayout.vue';
import { Head, Link } from '@inertiajs/inertia-vue3';
import EmptyState from '@/Assets/EmptyState.vue';

defineProps({
    users: Object,
});
</script>

<template>

    <Head title="User" />
    <TheLayout>
        <template #header> Users </template>
        <div class="py-6">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white dark:bg-gray-800 dark:text-white shadow-sm sm:rounded-lg">
                    <div
                        class="p-4 my-2 bg-white dark:bg-gray-700 border-b border-gray-200 dark:border-gray-900"
                        v-for="user in users"
                        :key="user.id"
                    >
                        <Link
                            :href="route('user.show', user)"
                            class="hover:underline"
                        >
                        <EmptyState
                            type="user"
                            class="w-12 inline-block align-bottom"
                        />
                        </Link>
                        <div class="ml-3 inline-block">
                            <Link
                                :href="route('user.show', user)"
                                class="hover:underline"
                            > {{ user.name }} </Link>
                            <div class=""> {{ user.email }} </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </TheLayout>
</template>
