<script setup>
import { Link } from '@inertiajs/inertia-vue3';
import { ref, computed } from 'vue';
import NavMenu from '@/Layouts/TheNavMenu.vue';
import VegifyLogo from '@/Assets/VegifyLogo/TheVegifyLogo.vue';

const currentName = ref(route().current()); // eslint-disable-line no-undef
const showBreadcrumbs = computed(() => currentName.value !== "home");
</script>

<template>
    <div class="dark:bg-gray-dark">
        <div class="mx-auto min-h-screen dark:bg-gray-dark">
            <div class="flex flex-col xl:flex-row min-h-screen">
                <NavMenu />
                <main class="grow bg-white dark:bg-gray-dark">
                    <header v-if="$slots.header">
                        <div class="mx-4 my-4 text-sm dark:text-gray-light tracking-wide">
                            <!-- Breadcrumbs -->
                            <span v-if="showBreadcrumbs">
                                <Link :href="route('home')" class="hover:underline">vegify</Link>
                                <span class="mx-2">➛</span>
                            </span>
                            <span v-else class="h-[18px]">&nbsp;</span>
                            <slot name="header" />
                            <!-- Logo -->
                            <VegifyLogo class="h-auto w-5/6 md:w-4/5 mx-auto my-8 block" />
                        </div>
                    </header>
                    <div>
                        <main class="grow bg-white dark:bg-gray-dark">
                            <Transition name="slide-up" mode="out-in" appear>
                                <div v-if="$slots.default">
                                    <slot />
                                </div>
                            </Transition>
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

<style>
.slide-up-enter-active,
.slide-up-leave-active {
    transition: all 0.2s ease-out;
}

.slide-up-enter-from {
    opacity: 0;
    transform: translateY(-5px);
}

.slide-up-leave-to {
    opacity: 0;
    transform: translateY(-5px);
}
</style>
