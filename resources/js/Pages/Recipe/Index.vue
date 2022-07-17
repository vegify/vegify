<script setup>
import TheLayout from '@/Layouts/TheLayout.vue';
import { Head, Link } from '@inertiajs/inertia-vue3';
import EmptyState from '@/Assets/EmptyState.vue';

defineProps({
    recipes: Object,
});
</script>

<template>

    <Head title="Recipe" />
    <TheLayout>
        <template #header>
            <Link :href="route('recipes')">Recipes</Link>
        </template>
        <div class="py-2">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white dark:bg-gray-800 dark:text-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div
                        class="p-6 bg-white dark:bg-gray-700 border-b border-gray-200 dark:border-gray-900"
                        v-for="recipe in recipes"
                        :key="recipe.id"
                    >
                        <Link
                            :href="route('recipe.show', recipe)"
                            class="inline"
                        >
                        <EmptyState
                            type="thumbnail"
                            class="inline h-20 align-bottom"
                        />
                        </Link>
                        <div class="inline-block ml-4 align-top">
                            <Link
                                :href="route('recipe.show', recipe)"
                                class="hover:underline"
                            > {{ recipe.as_ingredient.name }} </Link>
                            <div>{{ recipe.subtitle }}</div> by
                            <Link
                                :href="route('user.show', recipe.creator)"
                                class="hover:underline"
                            > @{{ recipe.creator.name }} </Link>
                        </div>
                        <div class="mt-4 leading-6 mb-6"> {{ recipe.description }} </div>
                        <ul class="flex flex-row justify-around">
                            <li>Prep Minutes: {{ recipe.prep_minutes }}</li>
                            <li>Cook Minutes: {{ recipe.cook_minutes }}</li>
                            <li>Total Time: {{ recipe.total_time }}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <template #sidebar>
            <div class="bg-white w-4/5 mx-auto px-2 text-lg">Personalized Content</div>
        </template>
    </TheLayout>
</template>
