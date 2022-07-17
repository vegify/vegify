<script setup>
import TheLayout from '@/Layouts/TheLayout.vue';
import { Head, Link } from '@inertiajs/inertia-vue3';

defineProps({
    ingredient: Object,
});
</script>

<template>

    <Head :title="`${ingredient.name} | Vegify`" />
    <TheLayout>
        <template #header>
            <Link :href="route('ingredients')">Ingredients</Link> >>
            {{ ingredient.name }}
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white dark:bg-gray-800 dark:text-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white dark:bg-gray-700 border-b border-gray-200 dark:border-gray-900">
                        <div>{{ ingredient.description }}</div>
                        <div>
                            {{ ingredient.is_vegan ? 'Vegan!' : 'Not vegan!' }}
                        </div>
                        <div>
                            Serving Size:
                            {{
                                    `${ingredient.serving_size.amount} ${ingredient.serving_size.unit}
                                                        (${ingredient.serving_size.grams} grams)`
                            }}
                        </div>
                        <div>
                            Batch Size:
                            {{
                                    `${ingredient.batch_size.amount} ${ingredient.batch_size.unit}
                                                        (${ingredient.batch_size.grams} grams)`
                            }}
                        </div>
                        <div>Used in:</div>
                        <div v-for="recipe in ingredient.recipes" :key="recipe.id">
                            <Link :href="route('recipe.show', recipe.id)">{{
                                    recipe.as_ingredient.name
                            }}</Link>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </TheLayout>
</template>
