<script setup>
import Button from '@/Components/Button.vue';
import BreezeGuestLayout from '@/Layouts/Guest.vue';
import Input from '@/Components/Input.vue';
import BreezeLabel from '@/Components/Label.vue';
import BreezeValidationErrors from '@/Components/ValidationErrors.vue';
import { Head, Link, useForm } from '@inertiajs/inertia-vue3';

defineProps({
    email: String,
    password: String,
});

const form = useForm({
    name: '',
    email: '',
    password: '',
    password_confirmation: '',
    terms: false,
});

const submit = () => {
    form.post(route('register'), {
        onFinish: () => form.reset('password', 'password_confirmation'),
        preserveScroll: true,
    });
};
</script>

<template>
    <BreezeGuestLayout>
        <Head title="Register" />

        <BreezeValidationErrors class="mb-4" />

        <form @submit.prevent="submit">
            <div>
                <Input
                    id="register_name"
                    name="name"
                    type="text"
                    placeholder="Name..."
                    v-model="form.name"
                    required
                    autofocus
                    autocomplete="name"
                />
            </div>

            <div class="mt-4">
                <Input
                    id="register_email"
                    name="email"
                    type="email"
                    placeholder="Email..."
                    v-model="form.email"
                    required
                    autocomplete="username"
                />
            </div>

            <div class="mt-4">
                <Input
                    id="register_password"
                    name="password"
                    type="password"
                    placeholder="Password..."
                    v-model="form.password"
                    required
                    autocomplete="new-password"
                />
            </div>

            <div class="mt-4">
                <Input
                    id="register_password_confirmation"
                    name="password_confirmation"
                    type="password"
                    placeholder="Confirm Password..."
                    v-model="form.password_confirmation"
                    required
                    autocomplete="new-password"
                />
            </div>

            <div
                class="flex items-center justify-end flex-col text-center text-yellow-orange dark:text-white text-2xl font-bold w-4/5 mx-auto mt-3 mb-10"
            >
                <Button
                    class="ml-4 border-2 rounded-full py-1 text-2xl normal-case w-full mx-auto text-center tracking-normal bg-yellow-orange text-white border-yellow-orange hover:bg-[rgba(255,255,255,0.1)] dark:hover:border-[rgba(0,0,0,0)] dark:hover:bg-[rgba(255,255,255,0.5)] active:bg-[rgba(255,255,255,0.2)]"
                    :class="{ 'opacity-25': form.processing }"
                    :disabled="form.processing"
                >
                    Register
                </Button>
            </div>
        </form>
    </BreezeGuestLayout>
</template>
