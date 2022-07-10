<script setup>
import BreezeButton from '@/Components/Button.vue';
import BreezeCheckbox from '@/Components/Checkbox.vue';
import BreezeGuestLayout from '@/Layouts/Guest.vue';
import BreezeInput from '@/Components/Input.vue';
import BreezeLabel from '@/Components/Label.vue';
import BreezeValidationErrors from '@/Components/ValidationErrors.vue';
import { Head, Link, useForm } from '@inertiajs/inertia-vue3';

defineProps({
    canResetPassword: Boolean,
    status: String,
});

const form = useForm({
    email: '',
    password: '',
    remember: false,
});

const submit = () => {
    form.post(route('login'), {
        onFinish: () => form.reset('password'),
    });
};
</script>

<template>
    <BreezeGuestLayout>
        <Head />

        <BreezeValidationErrors class="mb-4" />

        <div v-if="status" class="mb-4 font-medium text-sm text-green-600">
            {{ status }}
        </div>

        <form @submit.prevent="submit">
            <div>
                <BreezeInput
                    id="email"
                    type="email"
                    placeholder="Email..."
                    class="mt-1 block w-full border-gray"
                    v-model="form.email"
                    required
                    autofocus
                    autocomplete="username"
                />
            </div>

            <div class="mt-4">
                <BreezeInput
                    id="password"
                    type="password"
                    placeholder="Password..."
                    class="mt-1 block w-full border-gray"
                    v-model="form.password"
                    required
                    autocomplete="current-password"
                />
            </div>

            <div class="block mt-4">
                <label class="flex items-center">
                    <BreezeCheckbox
                        name="remember"
                        v-model:checked="form.remember"
                    />
                    <span
                        class="ml-2 text-sm text-gray-600 dark:text-white dark:font-bold"
                        >Remember me</span
                    >
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                <Link
                    v-if="canResetPassword"
                    :href="route('password.request')"
                    class="underline text-sm text-gray-600 dark:text-gray-300 hover:text-gray-900 dark:hover:text-white"
                >
                    Forgot your password?
                </Link>
            </div>
            <div
                class="flex-col text-center text-yellow-orange dark:text-white text-2xl font-bold w-4/5 mx-auto mb-10"
            >
                <BreezeButton
                    class="border-2 rounded-full py-1 text-2xl normal-case w-full mx-auto text-center tracking-normal dark:bg-gray text-yellow-orange dark:text-white border-yellow-orange dark:border-white hover:bg-[rgba(255,255,255,0.4)] active:bg-[rgba(255,255,255,0.2)]"
                    :class="{ 'opacity-25': form.processing }"
                    :disabled="form.processing"
                >
                    Log in
                </BreezeButton>
                <p>or</p>
                <a
                    class="border-2 rounded-full py-1 text-2xl normal-case w-full mx-auto text-center tracking-normal bg-yellow-orange text-white border-yellow-orange hover:bg-[rgba(0,0,0,0.1)] active:bg-[rgba(0,0,0,0.05)]"
                    type="button"
                    :href="route('register')"
                    :class="{ 'opacity-25': form.processing }"
                    :disabled="form.processing"
                >
                    Sign Up
                </a>
            </div>
        </form>
    </BreezeGuestLayout>
</template>
