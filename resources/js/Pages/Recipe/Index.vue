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
                <div class="bg-white  dark:bg-gray-800 dark:text-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div
                        class="p-6 relative bg-white dark:bg-gray-700 border-b border-gray-200 dark:border-gray-900"
                        v-for="recipe in recipes"
                        :key="recipe.id"
                    >
                        <div class="flex">
                            <div>
                                <Link
                                    :href="route('recipe.show', recipe)"
                                    class=""
                                >
                                <EmptyState
                                    type="thumbnail"
                                    class="inline h-[6.5rem] align-top"
                                />
                                </Link>
                            </div>
                            <div class="ml-4 align-top w-[100%]">
                                <!-- Name  -->
                                <Link
                                    :href="route('recipe.show', recipe)"
                                    class="hover:underline text-3xl font-serif antialiased"
                                >
                                {{ recipe.as_ingredient.name }}
                                </Link>
                                <div class="mb-4">{{ recipe.subtitle }}</div>
                                <!-- Times (Prep, Cook, Total)  -->
                                <ul class="flex flex-row justify-around antialiased">
                                    <li class="grow">Prep Minutes: {{ recipe.prep_minutes }}</li>
                                    <li class="grow">Cook Minutes: {{ recipe.cook_minutes }}</li>
                                    <li class="grow">Total Time: {{ recipe.total_time }}</li>
                                </ul>
                            </div>
                            <!-- Creator Name & Tag -->
                            <div class="absolute top-6 right-[4rem]">
                                by
                                <Link
                                    :href="route('user.show', recipe.creator)"
                                    class="hover:underline"
                                > @{{ recipe.creator.name }}
                                </Link>
                            </div>
                            <!-- Description -->

                        </div>
                        <div class="leading-6 mt-4"> {{ recipe.description }} </div>
                    </div>
                </div>
            </div>
        </div>
        <template #sidebar>
            <div class="bg-white w-4/5 mx-auto px-2 text-lg">Personalized Content</div>
        </template>
    </TheLayout>
</template>
