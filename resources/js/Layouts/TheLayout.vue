<script setup>
import { Head, Link } from '@inertiajs/inertia-vue3';
import NavMenu from '@/Layouts/TheNavMenu.vue';
import VegifyLogo from '@/Assets/VegifyLogo/TheVegifyLogo.vue';

</script>

<template>
    <div class="dark:bg-gray-dark">
        <div class="mx-auto min-h-screen dark:bg-gray-dark">
            <div class="flex flex-col xl:flex-row min-h-screen">
                <NavMenu />
                <main class="grow bg-white dark:bg-gray-dark">
                    <header v-if="$slots.header">


                        <div class="mx-4 my-4 text-sm dark:text-gray-light tracking-wide">
                            <Link :href="route('home')" class="hover:underline">vegify</Link>
                            ➛
                            <slot name="header" />
                            <VegifyLogo class="h-auto w-5/6 md:w-4/5 mx-auto my-8 block" />
                        </div>

                    </header>
                    <div>

                        <main class="grow bg-white dark:bg-gray-dark">
                            <slot />
                        </main>
                    </div>
                </main>
                <aside class="bg-gray-light dark:bg-gray text-center md:text-left xl:w-[315px] py-3 sm:py-5">
                    <slot name="sidebar" />

                </aside>
            </div>
        </div>
    </div>


</template>
