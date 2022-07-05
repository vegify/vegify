<script setup>
import BreezeAuthenticatedLayout from '@/Layouts/Authenticated.vue';
import { Head } from '@inertiajs/inertia-vue3';

defineProps(['ingredients', 'ingredient']);
</script>

<template>
    <Head title="Ingredient" />

    <BreezeAuthenticatedLayout>
        <template #header>
            <h2
                class="font-semibold text-xl text-gray-800 dark:text-white leading-tight"
            >
                Ingredient
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
                        {{ ingredient || 'Ingredients' }}
                    </div>
                    <div
                        class="p-6 bg-white dark:bg-gray-700 border-b border-gray-200 dark:border-gray-900"
                        v-for="ingredient in ingredients"
                        :key="ingredient.id"
                    >
                        <div>
                            <a
                                :href="ingredient.show_url"
                                class="hover:underline text:indigo-700 dark:text-indigo-50"
                                >{{ ingredient.name }}</a
                            >
                            |
                            <a
                                :href="ingredient.edit_url"
                                class="hover:underline text:indigo-700 dark:text-indigo-50"
                                >edit</a
                            >
                        </div>
                        <div>{{ ingredient.description }}</div>
                        <div>
                            {{ ingredient.is_vegan ? 'Vegan!' : 'Not vegan!' }}
                        </div>
                        <div>{{ ingredient.serving_size }}</div>
                        <div>{{ ingredient.batch_size }}</div>
                        <div></div>
                        <div></div>
                    </div>
                </div>
            </div>
        </div>
    </BreezeAuthenticatedLayout>
</template>
