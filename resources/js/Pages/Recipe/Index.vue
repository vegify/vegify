<script setup>
import BreezeAuthenticatedLayout from '@/Layouts/Authenticated.vue';
import { Head, Link } from '@inertiajs/inertia-vue3';

defineProps({
    recipes: Object,
});
</script>

<template>
    <Head title="Recipe" />

    <BreezeAuthenticatedLayout>
        <template #header>
            <h2
                class="font-semibold text-xl text-gray-800 dark:text-white leading-tight"
            >
                Recipes
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div
                    class="bg-white dark:bg-gray-800 dark:text-white overflow-hidden shadow-sm sm:rounded-lg"
                >
                    <div
                        class="p-6 bg-white dark:bg-gray-700 border-b border-gray-200 dark:border-gray-900"
                        v-for="recipe in recipes"
                        :key="recipe.id"
                    >
                        <div>
                            <Link
                                :href="route('recipe.show', recipe)"
                                class="hover:underline text:indigo-700 dark:text-indigo-50"
                            >
                                {{ recipe.name }}
                            </Link>
                            <div>{{ recipe.subtitle }}</div>
                            by @{{ recipe.creator.name }}
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
                                `${recipe.serving_size.amount} ${recipe.serving_size.unit} (${recipe.serving_size.grams} grams)`
                            }}
                        </div>
                        <div>
                            Batch Size:
                            {{
                                `${recipe.batch_size.amount} ${recipe.batch_size.unit} (${recipe.batch_size.grams} grams)`
                            }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </BreezeAuthenticatedLayout>
</template>
