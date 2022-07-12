<script setup>
import { Head, Link } from '@inertiajs/inertia-vue3';
import VegifyLogo from '@/Components/VegifyLogo/VegifyLogo.vue';
import Login from '@/Pages/Auth/Login.vue';
import HomeIcon from '@/Components/NavIcons/Home.svg?url';
import AddFoodIcon from '@/Components/NavIcons/AddFood.svg?url';
import SearchIcon from '@/Components/NavIcons/Search.svg?url';
import UserIcon from '@/Components/NavIcons/Profile.svg?url';

import { computed } from 'vue';

defineProps({
    canLogin: Boolean,
    canRegister: Boolean,
    recipes: Object,
});

const navLinks = [
    { label: 'Home', route: 'dashboard', active: 'dashboard', icon: HomeIcon },
    // { label: 'Explore', route: 'explore', active: ,'explore' icon:  },
    // { label: 'Add Food', route: 'add', active: ,'add' icon:  },
    { label: 'Recipes', route: 'recipes', active: 'recipe', icon: AddFoodIcon },
    {
        label: 'Ingredients',
        route: 'ingredients',
        active: 'ingredient',
        icon: SearchIcon,
    },
    { label: 'User', route: 'users', active: 'user', icon: UserIcon },
];
</script>

<template>
    <Head title="Welcome" />
    <div class="dark:bg-gray-dark">
        <div class="mx-auto min-h-screen dark:bg-gray-dark">
            <div class="flex flex-col xl:flex-row justify-center min-h-screen">
                <nav class="relative bg-green dark:bg-forest-green">
                    <Link>
                        <VegifyLogo
                            type="icon"
                            color="white"
                            class="max-h-16 w-auto mx-auto my-4 md:hidden" />
                        <VegifyLogo
                            color="white"
                            class="hidden md:block h-20 w-auto mx-auto my-2 md:m-3"
                    /></Link>
                    <div class="">
                        <ul class="hidden md:contents">
                            <Link
                                v-for="(navLink, index) in navLinks"
                                :key="index"
                                :href="route(navLink.route)"
                                :active="
                                    route().current().startsWith(navLink.active)
                                "
                                class=""
                            >
                                <li
                                    class="font-bold text-white text-3xl hover:underline p-2 hover:bg-[rgba(255,255,255,0.125)]"
                                >
                                    <img
                                        :src="navLink.icon"
                                        class="h-10 w-10 inline mr-[10px] mb-[9px]"
                                    /><span class="">{{ navLink.label }}</span>
                                </li>
                            </Link>
                        </ul>
                    </div>
                </nav>
                <main class="grow bg-white dark:bg-gray-dark">
                    <header>
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
                            class="h-auto w-5/6 md:w-4/5 mx-auto my-8 block md:hidden xl:block"
                        />
                    </header>
                    <main class="dark:text-white">
                        <div class="text-center w-full">
                            <input
                                type="text"
                                placeholder="Search..."
                                class="w-4/6 rounded-full m-4"
                            /><img
                                class="inline h-9 w-9 ml-[-56px] mb-[3px]"
                                :src="SearchIcon"
                            />
                        </div>
                        <Link
                            v-for="recipe in recipes"
                            :key="recipe.id"
                            :href="route('recipe.show', recipe.id)"
                            class="dark:bg-gray border-black dark:border-gray-light border-solid border-[1px] rounded-sm m-4 flex divide-x dark:hover:border-white hover:shadow-lg transition ease-in-out delay-15 hover:-translate-y-1 hover:scale-110 duration-2ß00"
                        >
                            <div
                                class="w-[175px] lg:w-[180px] bg-gray-light dark:text-gray text-center"
                            >
                                <br /><br />Thumbnail
                            </div>
                            <div class="p-2 w-full bg-white dark:bg-gray-dark">
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
                    class="bg-gray-light dark:bg-gray text-center md:text-left xl:w-[315px] py-3 sm:py-5"
                >
                    <div v-if="canLogin" class="text-right w-full">
                        <div v-if="$page.props.auth.user">
                            <header
                                class="font-bold text-2xl px-4 dark:text-gray-light"
                            >
                                Welcome back, {{ $page.props.auth.user.name }}.
                            </header>
                            <Link
                                :href="
                                    route('user.show', $page.props.auth.user.id)
                                "
                                class="py-4 pl-4 text-sm text-gray-700 dark:text-gray-light underline"
                            >
                                My Recipes
                            </Link>
                            |

                            <Link
                                class="py-4 pr-4 text-sm text-gray-700 dark:text-gray-light underline"
                                :href="route('logout')"
                                method="post"
                                as="button"
                            >
                                Log Out
                            </Link>
                        </div>

                        <template v-else>
                            <header
                                class="font-bold text-2xl px-8 pb-6 pt-0 dark:text-gray-light"
                            >
                                Start tracking recipes with us, today.
                            </header>
                            <Login />
                        </template>
                    </div>
                </aside>
            </div>
        </div>
    </div>
</template>
