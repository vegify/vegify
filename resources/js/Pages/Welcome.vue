<script setup>
import { Head, Link } from '@inertiajs/inertia-vue3';
import TheLayout from '@/Layouts/TheLayout.vue';
import Login from '@/Pages/Auth/Login.vue';


import VegifySearch from '@/Pages/VegifySearch.vue';
import { watch, ref } from 'vue';

defineProps({
    canLogin: Boolean,
    canRegister: Boolean,
    recipes: Object,
});


</script>

<template>

    <Head title="Welcome" />
    <TheLayout>
        <template #header>

            <Link :href="route('home')">Welcome</Link>

        </template>
        <VegifySearch />
        <template v-slot:sidebar>
            <div v-if="canLogin" class="text-right w-full">
                <div v-if="$page.props.auth.user">
                    <header class="font-bold text-2xl px-4 dark:text-gray-light">
                        Welcome back, {{ $page.props.auth.user.name }}.
                    </header>
                    <Link :href="
                        route('user.show', $page.props.auth.user.id)
                    " class="py-4 pl-4 text-sm text-gray-700 dark:text-gray-light underline">
                    My Recipes
                    </Link>
                    |

                    <Link class="py-4 pr-4 text-sm text-gray-700 dark:text-gray-light underline" :href="route('logout')"
                        method="post" as="button">
                    Log Out
                    </Link>
                </div>

                <template v-else>
                    <header class="font-bold text-2xl px-8 pb-6 pt-0 sm:text-center xl:text-right dark:text-gray-light">
                        Start tracking recipes with us, today.
                    </header>
                    <Login />
                </template>
            </div>
        </template>
    </TheLayout>


</template>
