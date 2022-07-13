<script setup>
import { Head, Link } from '@inertiajs/inertia-vue3';
import VegifyLogo from '@/Components/VegifyLogo/VegifyLogo.vue';
import Login from '@/Pages/Auth/Login.vue';
import HomeIcon from '@/Components/NavIcons/Home.svg?url';
import AddFoodIcon from '@/Components/NavIcons/AddFood.svg?url';
import SearchIcon from '@/Components/NavIcons/Search.svg?url';
import UserIcon from '@/Components/NavIcons/Profile.svg?url';
import HamburgerMenuIcon from '@/Components/NavIcons/HamburgerMenuIcon.svg';
import { useWindowSize } from '@vueuse/core';
import { useElementSize } from '@vueuse/core';
import { useResizeObserver } from '@vueuse/core';
import RecipeCard from '@/Components/RecipeCard.vue';
import { computed, ref } from 'vue';

defineProps({
    canLogin: Boolean,
    canRegister: Boolean,
    recipes: Object,
});

const { width: viewPortWidth } = useWindowSize();
const navRef = ref(null);
const navHeight = ref(0);

useResizeObserver(navRef, (entries) => {
    const entry = entries[0];
    const { width: elNavWidth, height: elNavHeight } = entry.contentRect;
    navHeight.value = elNavHeight;
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
const showMobileNav = ref(false);
</script>

<template>
    <Head title="Welcome" />
    <div class="dark:bg-gray-dark">
        <div class="mx-auto min-h-screen dark:bg-gray-dark">
            <div class="flex flex-col xl:flex-row min-h-screen">
                <nav
                    class="sticky top-0 z-50 xl:bg-green xl:dark:bg-forest-green"
                    ref="navRef"
                >
                    <div
                        class="bg-green dark:bg-forest-green py-2 relative z-50"
                    >
                        <HamburgerMenuIcon
                            class="w-9 h-9 absolute top-2 left-2 xl:hidden"
                            @click="showMobileNav = !showMobileNav"
                        />
                        <Link class="">
                            <VegifyLogo
                                type="icon"
                                color="white"
                                class="max-h-16 w-auto mx-auto xl:hidden" />
                            <VegifyLogo
                                color="white"
                                class="hidden xl:block h-20 w-auto mx-auto md:m-3"
                        /></Link>
                    </div>
                    <transition name="slide" class="absolute z-0">
                        <div
                            class="bg-green dark:bg-forest-green w-full"
                            v-show="showMobileNav || viewPortWidth > 1279"
                        >
                            <ul class="">
                                <Link
                                    v-for="(navLink, index) in navLinks"
                                    :key="index"
                                    :href="route(navLink.route)"
                                    :active="
                                        route()
                                            .current()
                                            .startsWith(navLink.active)
                                    "
                                    class=""
                                >
                                    <li
                                        class="font-bold text-white text-3xl hover:underline p-2 hover:bg-[rgba(255,255,255,0.125)]"
                                    >
                                        <img
                                            :src="navLink.icon"
                                            class="h-10 w-10 inline mr-[10px] mb-[9px]"
                                        /><span class="">{{
                                            navLink.label
                                        }}</span>
                                    </li>
                                </Link>
                            </ul>
                        </div>
                    </transition>
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
                            class="h-auto w-5/6 md:w-4/5 mx-auto my-8 block"
                        />
                    </header>
                    <main class="dark:text-white">
                        <div
                            class="relative my-10 mx-auto w-4/5 md:w-3/4 lg:w-2/3"
                        >
                            <input
                                type="text"
                                placeholder="Search..."
                                class="static text-black text-xl px-[19px] p-2 w-full rounded-full"
                            />
                            <img
                                class="absolute h-9 w-9 right-[.25rem] top-[.35rem]"
                                :src="SearchIcon"
                            />
                        </div>
                        <Link
                            v-for="recipe in recipes"
                            :key="recipe.id"
                            :href="route('recipe.show', recipe.id)"
                        >
                            <RecipeCard :recipe="recipe" />
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
