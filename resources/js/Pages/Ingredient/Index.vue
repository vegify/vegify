<script setup>
import TheLayout from '@/Layouts/TheLayout.vue';
import { Head, Link } from '@inertiajs/inertia-vue3';

defineProps({
    ingredients: Object,
});
</script>

<template>

    <Head title="Ingredient" />

    <TheLayout>
        <template #header>
            Ingredients
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white dark:bg-gray-800 dark:text-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white dark:bg-gray-700 border-b border-gray-200 dark:border-gray-900"
                        v-for="ingredient in ingredients" :key="ingredient.id">
                        <div>
                            <Link :href="route('ingredient.show', ingredient)"
                                class="hover:underline text:indigo-700 dark:text-indigo-50">
                            {{ ingredient.name }}
                            </Link>
                        </div>
                        <div>{{ ingredient.description }}</div>
                        <div>
                            {{ ingredient.is_vegan ? 'Vegan!' : 'Not vegan!' }}
                        </div>
                        <div>
                            Serving size:
                            {{
                                    `${ingredient.serving_size.amount} ${ingredient.serving_size.unit}
                                                        (${ingredient.serving_size.grams} grams)`
                            }}
                        </div>
                        <div>
                            Batch size:
                            {{
                                    `${ingredient.batch_size.amount} ${ingredient.batch_size.unit}
                                                        (${ingredient.batch_size.grams} grams)`
                            }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </TheLayout>
</template>
