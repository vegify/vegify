<script setup>
import TheLayout from '@/Layouts/TheLayout.vue';
import { Head, Link } from '@inertiajs/inertia-vue3';

defineProps({
    user: Object,
    recipes: Object,
});
</script>

<template>

    <Head :title="`${user.name} | Vegify`" />

    <TheLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 dark:text-white leading-tight">
                <Link :href="route('users')">Users</Link> >> @{{ user.name }}
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white dark:bg-gray-800 dark:text-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white dark:bg-gray-700 border-b border-gray-200 dark:border-gray-900">
                        <div>@{{ user.name }}</div>
                        <div class="my-2 font-bold">Recipes:</div>
                        <div v-for="recipe in user.recipes" :key="recipe.id" class="my-2 border-t-gray-50">
                            <div>
                                <Link :href="route('recipe.show', recipe.id)">{{
                                        recipe.as_ingredient.name
                                }}</Link>
                            </div>
                            <div>{{ recipe.as_ingredient.description }}</div>
                            <div>
                                {{
                                        recipe.as_ingredient.is_vegan
                                            ? 'Vegan!'
                                            : 'Not vegan!'
                                }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </TheLayout>
</template>
