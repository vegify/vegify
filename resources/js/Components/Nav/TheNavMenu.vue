<script setup>
import { Head, Link } from '@inertiajs/inertia-vue3';
import HamburgerMenuIcon from '@/Components/NavIcons/HamburgerMenuIcon.svg';
import VegifyLogo from '@/Components/VegifyLogo/VegifyLogo.vue';
import UserIcon from '@/Components/NavIcons/Profile.svg?url';
import HomeIcon from '@/Components/NavIcons/Home.svg?url';
import SearchIcon from '@/Components/NavIcons/Search.svg?url';
import AddFoodIcon from '@/Components/NavIcons/AddFood.svg?url';
import { useWindowSize } from '@vueuse/core';
import { ref } from 'vue';

const { width: viewPortWidth } = useWindowSize();

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
    <nav
        class="sticky top-0 z-50 xl:block xl:z-0 xl:bg-green xl:dark:bg-forest-green"
        ref="navRef"
    >
        <div class="bg-green dark:bg-forest-green py-2 relative z-50">
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
                <ul>
                    <Link
                        v-for="(navLink, index) in navLinks"
                        :key="index"
                        :href="route(navLink.route)"
                        :active="route().current().startsWith(navLink.active)"
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
        </transition>
    </nav>
</template>
