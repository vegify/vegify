<script setup>
import { Head, Link } from '@inertiajs/inertia-vue3';

import Login from '@/Pages/Auth/Login.vue';
import SearchIcon from '@/Components/NavIcons/Search.svg?url';
import XIcon from '@/Components/UIIcons/XIcon.svg?url';
import VegifyLogo from '@/Components/VegifyLogo/VegifyLogo.vue';

import { useElementSize } from '@vueuse/core';
import { useResizeObserver } from '@vueuse/core';
import RecipeCard from '@/Components/RecipeCard.vue';
import NavMenu from '@/Components/Nav/TheNavMenu.vue';
import { watch, ref } from 'vue';

defineProps({
    canLogin: Boolean,
    canRegister: Boolean,
    recipes: Object,
});

const searchTerm = ref('');
const searchResults = ref([]);

watch(searchTerm, async (newSearch, oldSearch) => {
    searchResults.value = [];
    try {
        const res = await fetch(`/search/${newSearch}`);
        searchResults.value = await res.json();
    } catch (error) {
        searchResults.value = [];
    }
});
</script>

<template>
    <Head title="Welcome" />
    <div class="dark:bg-gray-dark">
        <div class="mx-auto min-h-screen dark:bg-gray-dark">
            <div class="flex flex-col xl:flex-row min-h-screen">
                <NavMenu />
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
                            class="h-auto w-5/6 md:w-4/5 mx-auto my-8 block"
                        />
                    </header>
                    <main class="dark:text-white">
                        <div
                            class="relative my-10 mx-auto w-4/5 md:w-3/4 lg:w-2/3"
                        >
                            <input
                                type="text"
                                id="search"
                                placeholder="Search..."
                                v-model="searchTerm"
                                class="static text-black text-xl px-[19px] p-2 w-full rounded-full"
                            />
                            <img
                                v-if="searchTerm.length > 0"
                                class="absolute h-9 w-9 right-[.25rem] top-[.35rem] cursor-pointer"
                                :src="XIcon"
                                @click="searchTerm = ''"
                            />
                            <img
                                v-else
                                class="absolute h-9 w-9 right-[.25rem] top-[.35rem]"
                                :src="SearchIcon"
                            />
                        </div>
                        <div
                            v-if="searchTerm.length > 0"
                            class="mx-auto text-center text-lg"
                        >
                            <strong>{{ searchResults.length }}</strong> search
                            result{{
                                searchResults.length === 1 ? '' : 's'
                            }}
                            for "{{ searchTerm }}"
                        </div>
                        <Link
                            v-for="recipe in searchResults"
                            :key="recipe.id"
                            :href="route('recipe.show', recipe.id)"
                        >
                            <RecipeCard :recipe="recipe" />
                        </Link>
                        <div v-show="searchTerm.length < 1">
                            <Link
                                v-for="recipe in recipes"
                                :key="recipe.id"
                                :href="route('recipe.show', recipe.id)"
                            >
                                <RecipeCard :recipe="recipe" />
                            </Link>
                        </div>
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
                                class="font-bold text-2xl px-8 pb-6 pt-0 sm:text-center xl:text-right dark:text-gray-light"
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

<style scoped>
.slide-enter-active {
    transition: transform 0.3s ease-out;
}

.slide-leave-active {
    transition: transform 0.2s cubic-bezier(1, 0.5, 0.8, 1);
}

.slide-enter-from,
.slide-leave-to {
    transform: translateY(-200%);
}
</style>
