<script setup>
import TheLayout from '@/Layouts/TheLayout.vue';
import { Head, Link } from '@inertiajs/inertia-vue3';
import EmptyState from '@/Assets/EmptyState.vue';

defineProps({
    ingredients: Object,
});
</script>

<template>

    <Head title="Ingredient" />
    <TheLayout>
        <template #header> Ingredients </template>
        <div class="py-6">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white dark:bg-gray-800 dark:text-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div
                        class="p-6 min-h-[13rem] bg-white dark:bg-gray-700 border-b border-gray-200 dark:border-gray-900"
                        v-for="ingredient in ingredients"
                        :key="ingredient.id"
                    >
                        <!-- Ingredient thumbnail -->
                        <div class="">
                            <Link
                                :href="route('ingredient.show', ingredient)"
                                class="float-left mr-6"
                            >
                            <EmptyState
                                type="thumbnail"
                                class="float-left h-40"
                            />
                            </Link>
                        </div>
                        <!-- Name & Description  -->
                        <div class="">
                            <div class="mb-2">
                                <Link
                                    :href="route('ingredient.show', ingredient)"
                                    class="hover:underline font-serif text-3xl"
                                >
                                {{ ingredient.name }}
                                </Link>
                                <!-- Badges -->
                                <span class="ml-4 align-top bg-forest-green rounded-full text-xs p-1">
                                    {{ ingredient.is_vegan ? 'Vegan!' : 'Not vegan!' }}
                                </span>
                            </div>
                            <div class="">{{ ingredient.description }}</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </TheLayout>
</template>
