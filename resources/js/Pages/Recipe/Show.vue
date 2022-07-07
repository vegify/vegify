<script setup>
import BreezeAuthenticatedLayout from '@/Layouts/Authenticated.vue';
import { Head, Link } from '@inertiajs/inertia-vue3';

defineProps(['recipe']);
</script>

<template>
    <Head :title="`\${recipe.name} | Vegify`" />

    <BreezeAuthenticatedLayout>
        <template #header>
            <h2
                class="font-semibold text-xl text-gray-800 dark:text-white leading-tight"
            >
                <Link :href="route('recipes')">Recipes</Link> >>
                {{ recipe.name }}
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
                        <div>{{ recipe.description }}</div>
                        <div>
                            {{ recipe.is_vegan ? 'Vegan!' : 'Not vegan!' }}
                        </div>
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
