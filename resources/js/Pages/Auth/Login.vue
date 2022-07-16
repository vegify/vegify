<script setup>
import Button from '@/Components/Button.vue';
import BreezeCheckbox from '@/Components/Checkbox.vue';
import BreezeGuestLayout from '@/Layouts/Guest.vue';
import Input from '@/Components/Input.vue';
import BreezeLabel from '@/Components/Label.vue';
import BreezeValidationErrors from '@/Components/ValidationErrors.vue';
import { Head, Link, useForm } from '@inertiajs/inertia-vue3';
import { computed, ref } from 'vue';

const props = defineProps({
    canResetPassword: Boolean,
    status: String,
});

const form = useForm({
    email: '',
    password: props.password,
    remember: false,
});

const submit = () => {
    form.post(route('login'), {
        onFinish: () => form.reset('password'),
        preserveState: true,
        preserveScroll: true,
    });
};

const signUpDisabled = computed(() => {
    return form.email.length > 0 || form.password.length > 0 || form.processing;
});
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
                <Input
                    id="login-email"
                    name="email"
                    type="email"
                    placeholder="Email..."
                    class=""
                    v-model="form.email"
                    required
                    autocomplete="username"
                />
            </div>

            <div class="mt-4">
                <Input
                    id="login-password"
                    name="password"
                    type="password"
                    placeholder="Password..."
                    class=""
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
                        class="ml-2 text-sm text-gray-dark dark:text-white dark:font-bold"
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
                class="flex-col text-center text-yellow-orange dark:text-white text-2xl font-bold w-4/5 mx-auto mt-3 mb-10"
            >
                <Button
                    class="border-2 rounded-full py-1 text-2xl normal-case w-full mx-auto text-center tracking-normal bg-yellow-orange text-white border-yellow-orange hover:bg-[rgba(255,255,255,0.1)] dark:hover:border-[rgba(0,0,0,0)] dark:hover:bg-[rgba(255,255,255,0.5)] active:bg-[rgba(255,255,255,0.2)]"
                    :class="{ 'opacity-25': form.processing }"
                    :disabled="form.processing"
                >
                    Log in
                </Button>
            </div>
        </form>
    </BreezeGuestLayout>
</template>
