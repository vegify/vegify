<script setup>
import BreezeAuthenticatedLayout from '@/Layouts/Authenticated.vue';
import { Head, Link } from '@inertiajs/inertia-vue3';

defineProps({
    recipe: Object,
});
</script>

<template>
    <Head :title="`${recipe.as_ingredient.name} | Vegify  `" />

    <BreezeAuthenticatedLayout>
        <template #header>
            <h2
                class="font-semibold text-xl text-gray-800 dark:text-white leading-tight"
            >
                <Link :href="route('recipes')">Recipes</Link> >>
                {{ recipe.as_ingredient.name }}
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div
                    class="bg-white dark:bg-gray-800 dark:text-white overflow-hidden shadow-sm sm:rounded-lg"
                >
                    <div
                        class="p-6 bg-white dark:bg-gray-700 border-b border-gray-200 dark:border-gray-900"
                    >
                        <div>{{ recipe.as_ingredient.name }}</div>
                        by
                        <Link
                            :href="route('user.show', recipe.creator)"
                            class="hover:underline text:indigo-700 dark:text-indigo-50"
                        >
                            @{{ recipe.creator.name }}
                        </Link>
                        <div>{{ recipe.subtitle }}</div>
                        <div>{{ recipe.description }}</div>
                        <div>
                            {{
                                recipe.as_ingredient.is_vegan
                                    ? 'Vegan!'
                                    : 'Not vegan!'
                            }}
                        </div>
                        <div>
                            Serving Size:
                            {{
                                `${recipe.as_ingredient.serving_size.amount} ${recipe.as_ingredient.serving_size.unit} (${recipe.as_ingredient.serving_size.grams} grams)`
                            }}
                        </div>
                        <div>
                            Batch Size:
                            {{
                                `${recipe.as_ingredient.batch_size.amount} ${recipe.as_ingredient.batch_size.unit} (${recipe.as_ingredient.batch_size.grams} grams)`
                            }}
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
                                >
                                    {{ iir.ingredient.name }}
                                </Link>
                                {{
                                    iir.ingredient.is_vegan
                                        ? 'Vegan!'
                                        : 'Not vegan!'
                                }}
                                {{ iir.amount.amount }}
                                {{ iir.amount.unit }}
                                ({{ iir.amount.grams }} grams)
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </BreezeAuthenticatedLayout>
</template>
