<script setup>
import TheLayout from '@/Layouts/TheLayout.vue';
import { Head, Link } from '@inertiajs/inertia-vue3';
import EmptyState from '@/Assets/EmptyState.vue';
import XIcon from '@/Assets/Icons/XIcon.svg?url';

defineProps({
    recipe: Object,
});
</script>

<template>

    <Head :title="`${recipe.as_ingredient.name}`" />
    <TheLayout>
        <template #header>
            <Link :href="route('recipes')">Recipes</Link> ➛ {{ `${recipe.as_ingredient.name}` }}
        </template>
        <div class="py-0">
            <!-- Hero Image  -->
            <div class="relative">
                <div class="absolute mt-4 sm:mt-10 ml-10 font-serif text-4xl sm:text-7xl dark:text-white">{{
                        recipe.as_ingredient.name
                }}
                    <div class="mt-2 text-lg sm:text-xl font-sans"> {{ recipe.subtitle }}
                    </div>
                </div>
                <div
                    class="absolute text-xs sm:text-sm top-1 sm:top-5 lg:top-7 right-[10%] font-bold text-white rounded-full p-4"
                    :class="[recipe.as_ingredient.is_vegan ? 'bg-green' : `bg-gray bg-[url('${XIcon}')]`]"
                > {{ recipe.as_ingredient.is_vegan ? 'Vegan!' : 'Not vegan!' }} </div>
                <div class="absolute bottom-10 right-[10%] dark:text-white">by
                    <Link
                        :href="route('user.show', recipe.creator)"
                        class="text-2xl ml-2 hover:underline hover:text-yellow"
                    >{{ recipe.creator.name }}</Link>
                </div>
                <EmptyState
                    type="recipeImage"
                    class="w-full m-0"
                />
            </div>
            <!-- Recipe Content  -->
            <div class="max-w-7xl mt-10 mx-auto sm:px-6 lg:px-8">
                <div class="bg-white dark:bg-gray-800 dark:text-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white dark:bg-gray-700 border-b border-gray-200 dark:border-gray-900">
                        <div>{{ recipe.description }}</div>
                        <div> Serving Size: {{ `${recipe.as_ingredient.serving_size.amount}
                        ${recipe.as_ingredient.serving_size.unit} (${recipe.as_ingredient.serving_size.grams}
                        grams)` }} </div>
                        <div> Batch Size:
                            {{ `${recipe.as_ingredient.batch_size.amount} ${recipe.as_ingredient.batch_size.unit} (${recipe.as_ingredient.batch_size.grams} grams)` }}
                        </div>
                        <div class="mt-5">Ingredients:</div>
                        <ul class="">
                            <li
                                v-for="iir in recipe.ingredients"
                                :key="iir.id"
                                class="mt-2"
                            >
                                <Link
                                    :href="
                                        route(
                                            'ingredient.show',
                                            iir.ingredient.id
                                        )
                                    "
                                    class="hover:underline text:indigo-700 dark:text-indigo-50"
                                > {{ iir.ingredient.name }} </Link> {{ iir.ingredient.is_vegan ? 'Vegan!' : 'Not vegan!'
                                }} {{ iir.amount.amount }} {{ iir.amount.unit }} ({{ iir.amount.grams }} grams)
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <template #sidebar>
            <div class="bg-white w-4/5 mx-auto px-2 text-lg">Nutrition Facts</div>
        </template>
    </TheLayout>
</template>