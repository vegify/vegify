<script setup>
import { Head, Link } from '@inertiajs/inertia-vue3';
import VegifyLogo from '@/Components/VegifyLogo/VegifyLogo.vue';
import Login from '@/Pages/Auth/Login.vue';

import { computed } from 'vue';

defineProps({
    canLogin: Boolean,
    canRegister: Boolean,
    laravelVersion: String,
    phpVersion: String,
    recipes: Object,
});

const navLinks = [
    { label: 'Home', route: 'dashboard', active: 'dashboard' },
    // { label: 'Explore', route: 'explore', active: 'explore' },
    // { label: 'Add Food', route: 'add', active: 'add' },
    { label: 'Recipes', route: 'recipes', active: 'recipe' },
    { label: 'Ingredients', route: 'ingredients', active: 'ingredient' },
    { label: 'User', route: 'users', active: 'user' },
];
</script>

<template>
    <Head title="Welcome" />
    <div class="dark:bg-gray-dark">
        <div class="2xl:container mx-auto min-h-screen dark:bg-gray-dark">
            <div class="flex flex-col md:flex-row justify-center min-h-screen">
                <nav class="bg-green dark:bg-forest-green">
                    <Link>
                        <VegifyLogo
                            color="white"
                            class="h-20 w-auto mx-auto my-2 md:m-3"
                    /></Link>
                    <ul class="hidden md:contents">
                        <li
                            v-for="(navLink, index) in navLinks"
                            :key="index"
                            class="font-bold m-2"
                        >
                            <Link
                                :href="route(navLink.route)"
                                :active="
                                    route().current().startsWith(navLink.active)
                                "
                                class="text-white text-3xl hover:underline p-2"
                            >
                                {{ navLink.label }}
                            </Link>
                        </li>
                    </ul>
                </nav>
                <main class="grow bg-white dark:bg-gray-dark">
                    <header>
                        <div class="text-center">
                            <input
                                type="text"
                                placeholder="Search..."
                                class="w-4/6 rounded-full m-4 hidden"
                            />
                        </div>
                        <div
                            class="mx-4 my-4 text-sm dark:text-gray-light tracking-wide"
                        >
                            <Link :href="route('home')" class="hover:underline"
                                >vegify</Link
                            >
                            ➛
                            <Link :href="route('home')" class="hover:underline"
                                >Home</Link
                            >
                        </div>
                        <VegifyLogo
                            class="h-auto w-5/6 md:w-4/5 mx-auto my-8"
                        />
                    </header>
                    <main class="dark:text-white">
                        <Link
                            v-for="recipe in recipes"
                            :key="recipe.id"
                            :href="route('recipe.show', recipe.id)"
                            class="dark:bg-gray border-black dark:border-gray-light border-solid border-[1px] rounded-sm m-4 flex divide-x"
                        >
                            <div class="w-1/4 text-center">
                                <br /><br />Thumbnail
                            </div>
                            <div class="p-2">
                                <div class="font-bold text-3xl dark:text-white">
                                    {{ recipe.as_ingredient.name }}
                                </div>
                                <div
                                    class="font capitalize font-serif text-sm leading-6"
                                >
                                    {{ recipe.subtitle }}
                                </div>
                                <div
                                    class="font-[300] text-2xl tracking-widest"
                                >
                                    000
                                </div>
                                <div
                                    class="font-light font-serif tracking-wide text-xs"
                                >
                                    Calories Per Serving
                                </div>
                            </div>
                        </Link>
                    </main>
                </main>
                <aside
                    class="bg-gray-light dark:bg-gray text-center md:text-left md:max-w-[315px] py-10"
                >
                    <header
                        class="font-bold text-2xl px-4 dark:text-gray-light"
                    >
                        Start tracking recipes with us, today.
                    </header>
                    <Login />
                </aside>
            </div>
        </div>
    </div>
</template>
