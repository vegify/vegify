<script setup>
import { Head, Link } from '@inertiajs/inertia-vue3';
import TheLayout from '@/Layouts/TheLayout.vue';
import VegifyLogo from '@/Assets/VegifyLogo/TheVegifyLogo.vue';
import Login from '@/Pages/Auth/Login.vue';
import Register from '@/Pages/Auth/Register.vue';
import VegifySearch from '@/Components/VegifySearch.vue';
import { ref } from 'vue';
import RadioNavTab from '@/Components/RadioNavTab.vue';
import TransitionSlideFade from '@/Assets/TransitionSlideFade.vue';

defineProps({
    canLogin: Boolean,
    canRegister: Boolean,
    recipes: {
        type: Array,
        default: () => { },
    }
});

const loginOrRegister = ref('login');
</script>

<template>

    <Head title="Welcome" />
    <TheLayout>
        <template #header>
        </template>
        <!-- Logo -->
        <VegifyLogo
            class="h-auto w-5/6 md:w-4/5 mx-auto my-8 block"
            dusk="vegify-splash-logo"
        />
        <VegifySearch class="mx-auto" />
        <template v-slot:sidebar>
            <div
                v-if="canLogin"
                class="w-full"
            >
                <div v-if="$page.props.auth.user">
                    <header class="font-bold text-right text-2xl px-4 dark:text-gray-light"> Welcome back, {{
                            $page.props.auth.user.name
                    }}. </header>
                    <div class="text-right mr-1">
                        <Link
                            :href="
                                route('user.show', $page.props.auth.user.id)
                            "
                            class="py-4 pl-4 text-sm text-gray-700 dark:text-gray-light underline"
                        > My Recipes </Link> |
                        <Link
                            class="py-4 pr-4 text-sm text-gray-700 dark:text-gray-light underline"
                            :href="route('logout')"
                            method="post"
                            as="button"
                            preserve-scroll
                        > Log Out </Link>
                    </div>
                </div>
                <template v-else>
                    <div class="px-7 sm:px-[29%] md:px-[30%] lg:px-[35%] xl:px-6 2xl:px-8">
                        <header
                            class="font-bold text-2xl px-8 pb-6 pt-0 sm:text-center xl:text-right dark:text-gray-light"
                        >
                            <span class="text-right">Start tracking recipes with us, today.</span>
                            <VegifyLogo
                                type="icon"
                                color="greenwhite"
                                class="h-20 mx-auto my-4 mt-10 w-auto"
                            />
                        </header>
                        <div
                            class="m-0 mt-10 p-2 text-center w-full bg-forest-green text-white font-bold flex justify-center rounded-md"
                            scroll-region
                        >
                            <RadioNavTab
                                v-model="loginOrRegister"
                                value="register"
                                label="Signup"
                                side="l"
                            />
                            <div class="w-3 bg-gray-300"></div>
                            <RadioNavTab
                                v-model="loginOrRegister"
                                value="login"
                                label="Login"
                                side="r"
                            />
                        </div>
                        <div class="h-[350px]">
                            <TransitionSlideFade>
                                <Login v-if="loginOrRegister === 'login'" />
                                <Register v-else-if="loginOrRegister === 'register'" />
                            </TransitionSlideFade>
                        </div>
                    </div>
                </template>
            </div>
        </template>
    </TheLayout>
</template>