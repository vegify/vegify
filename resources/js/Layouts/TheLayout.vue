<script setup>
import { Link } from '@inertiajs/inertia-vue3';
import { ref, computed } from 'vue';
import NavMenu from '@/Layouts/TheNavMenu.vue';
import VegifySearch from '@/Pages/VegifySearch.vue';
import TransitionSlideFade from '@/Assets/TransitionSlideFade.vue';

const currentName = ref(route().current()); // eslint-disable-line no-undef
const isSubPage = computed(() => currentName.value !== "home");
</script>

<template>
    <div class="dark:bg-gray-dark">
        <div class="mx-auto min-h-screen dark:bg-gray-dark">
            <div class="flex flex-col xl:flex-row min-h-screen">
                <NavMenu />
                <main class="grow bg-white dark:bg-gray-dark">
                    <div
                        v-if="isSubPage"
                        class="bg-transparent w-full p-2 m-0 relative"
                    >
                        <VegifySearch isSubPage />
                    </div>
                    <header v-if="$slots.header">
                        <div class="mx-4 my-4 text-sm dark:text-gray-light tracking-wide">
                            <!-- Breadcrumbs -->
                            <span v-if="isSubPage">
                                <Link
                                    :href="route('home')"
                                    class="hover:underline"
                                >vegify</Link>
                                <span class="mx-2">➛</span>
                            </span>
                            <span
                                v-else
                                class="h-[18px]"
                            >&nbsp;</span>
                            <slot name="header" />
                        </div>
                    </header>
                    <div>
                        <main class="grow bg-white dark:bg-gray-dark">
                            <TransitionSlideFade>
                                <div v-if="$slots.default">
                                    <slot />
                                </div>
                            </TransitionSlideFade>
                        </main>
                    </div>
                </main>
                <aside
                    class="bg-gray-light dark:bg-gray text-center md:text-left min-w-content xl:min-w-[315px] xl:max-w-[315px] py-3 sm:py-5"
                >
                    <slot name="sidebar" />
                </aside>
            </div>
        </div>
    </div>
</template>
