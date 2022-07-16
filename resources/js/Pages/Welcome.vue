<script setup>
import { Head, Link } from '@inertiajs/inertia-vue3';
import { computed } from 'vue';
import TheLayout from '@/Layouts/TheLayout.vue';
import VegifyLogo from '@/Assets/VegifyLogo/TheVegifyLogo.vue';
import Login from '@/Pages/Auth/Login.vue';
import Register from '@/Pages/Auth/Register.vue';
import VegifyLogin from '@/Layouts/VegifyLogin.vue';



import VegifySearch from '@/Pages/VegifySearch.vue';
import { watch, ref } from 'vue';

defineProps({
    canLogin: Boolean,
    canRegister: Boolean,
    recipes: Object,
});

const loginOrRegister = ref('login');

</script>

<template>

    <Head title="Welcome" />
    <TheLayout>
        <template #header>

        </template>
        <VegifySearch />
        <template v-slot:sidebar>
            <div v-if="canLogin" class="w-full">
                <div v-if="$page.props.auth.user">
                    <header class="font-bold text-right text-2xl px-4 dark:text-gray-light">
                        Welcome back, {{ $page.props.auth.user.name }}.
                    </header>
                    <div class="text-right mr-1">
                        <Link :href="
                            route('user.show', $page.props.auth.user.id)
                        " class="py-4 pl-4 text-sm text-gray-700 dark:text-gray-light underline">
                        My Recipes
                        </Link>
                        |

                        <Link class="py-4 pr-4 text-sm text-gray-700 dark:text-gray-light underline"
                            :href="route('logout')" method="post" as="button" preserve-scroll>
                        Log Out
                        </Link>
                    </div>
                </div>

                <template v-else>
                    <header class="font-bold text-2xl px-8 pb-6 pt-0 sm:text-center xl:text-right dark:text-gray-light">
                        <span class="text-right">Start tracking recipes with us, today.</span>
                        <Link href="/" class="w-20 h-20 m-2">
                        <!-- <VegifyLogo type="icon" color="greenwhite" /> -->
                        </Link>
                    </header>

                    <VegifyLogo type="icon" color="greenwhite" class="h-20 mx-auto my-4 w-auto" />

                    <div class="mx-auto my-4 pt-8 text-center w-full" scroll-region>
                        <input type="radio" id="login" value="login" v-model="loginOrRegister" class="mx-2" />
                        <label for="login" class="">Login</label> or
                        <input type="radio" id="register" value="register" v-model="loginOrRegister" class="mx-2" />
                        <label for="login">Signup</label>
                    </div>
                    <Transition name="slide-up" mode="out-in">
                        <Login v-if="loginOrRegister === 'login'" />
                        <Register v-else-if="loginOrRegister === 'register'" />
                    </Transition>

                </template>
            </div>
        </template>
    </TheLayout>
</template>

<style>
.slide-up-enter-active,
.slide-up-leave-active {
    transition: all 0.15s ease-out;
}

.slide-up-enter-from {
    opacity: 0;
}

.slide-up-leave-to {
    opacity: 0;
}
</style>
