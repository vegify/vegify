<script setup>
import TheLayout from '@/Layouts/TheLayout.vue';
import { Head, Link } from '@inertiajs/inertia-vue3';
import EmptyState from '@/Assets/EmptyState.vue';

defineProps({
    ingredient: Object,
});
</script>

<template>

    <Head :title="`${ingredient.name} | Vegify`" />
    <TheLayout>
        <template #header>
            <Link :href="route('ingredients')">Ingredients</Link> ➛ {{ ingredient.name }}
        </template>
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div
                    class="absolute sm:mt-6 ml-6 font-serif text-4xl sm:text-6xl text-white bg-[rgba(0,0,0,0.6)] rounded-md p-2">
                    {{
                            ingredient.name
                    }}
                </div>
                <EmptyState
                    type="recipeImage"
                    class="w-full m-0"
                />
                <div class="bg-white dark:bg-gray-800 dark:text-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white dark:bg-gray-700 border-b border-gray-200 dark:border-gray-900">
                        <div>{{ ingredient.description }}</div>
                        <div> {{ ingredient.is_vegan ? 'Vegan!' : 'Not vegan!' }} </div>

                        <div>Used in:</div>
                        <div
                            v-for="recipe in ingredient.recipes"
                            :key="recipe.id"
                        >
                            <Link :href="route('recipe.show', recipe.id)">{{ recipe.as_ingredient.name }}</Link>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <template #sidebar>
            <div class="bg-white w-4/5 mx-auto px-2 text-lg">
                <div> Nutrition Facts</div>
                <div> Serving Size: {{ `${ingredient.serving_size.amount} ${ingredient.serving_size.unit} (${ingredient.serving_size.grams} grams)`
                }} </div>
                <div> Servings per batch/bag/container: {{ `${ingredient.batch_size.amount}` }} </div>
            </div>
        </template>
    </TheLayout>
</template>
