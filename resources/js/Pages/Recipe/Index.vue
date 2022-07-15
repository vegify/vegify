<script setup>
import TheLayout from '@/Layouts/TheLayout.vue';
import { Head, Link } from '@inertiajs/inertia-vue3';

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

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white dark:bg-gray-800 dark:text-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white dark:bg-gray-700 border-b border-gray-200 dark:border-gray-900"
                        v-for="recipe in recipes" :key="recipe.id">
                        <div>
                            <Link :href="route('recipe.show', recipe)"
                                class="hover:underline text:indigo-700 dark:text-indigo-50">
                            {{ recipe.as_ingredient.name }}
                            </Link>
                            <div>{{ recipe.subtitle }}</div>
                            by
                            <Link :href="route('user.show', recipe.creator)"
                                class="hover:underline text:indigo-700 dark:text-indigo-50">
                            @{{ recipe.creator.name }}
                            </Link>
                        </div>
                        <div class="mt-4 leading-6 mb-6">
                            {{ recipe.description }}
                        </div>
                        <ul>
                            <li>Prep Minutes: {{ recipe.prep_minutes }}</li>
                            <li>Cook Minutes: {{ recipe.cook_minutes }}</li>
                            <li>Total Time: {{ recipe.total_time }}</li>
                        </ul>
                        <div>
                            Serving Size:
                            {{
                                    `${recipe.as_ingredient.serving_size.amount} ${recipe.as_ingredient.serving_size.unit}
                                                        (${recipe.as_ingredient.serving_size.grams} grams)`
                            }}
                        </div>
                        <div>
                            Batch Size:
                            {{
                                    `${recipe.as_ingredient.batch_size.amount} ${recipe.as_ingredient.batch_size.unit}
                                                        (${recipe.as_ingredient.batch_size.grams} grams)`
                            }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </TheLayout>
</template>
