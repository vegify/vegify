<script setup>
import BreezeButton from '@/Components/Button.vue';
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
                <Input id="register_name" name="name" type="text" placeholder="Name..." v-model="form.name" required
                    autofocus autocomplete="name" />
            </div>

            <div class="mt-4">
                <Input id="register_email" name="email" type="email" placeholder="Email..." v-model="form.email"
                    required autocomplete="username" />
            </div>

            <div class="mt-4">
                <Input id="register_password" name="password" type="password" placeholder="Password..."
                    v-model="form.password" required autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <Input id="register_password_confirmation" name="password_confirmation" type="password"
                    placeholder="Confirm Password..." v-model="form.password_confirmation" required
                    autocomplete="new-password" />
            </div>

            <div class="flex items-center justify-end mt-4">

                <BreezeButton class="ml-4" :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
                    Register
                </BreezeButton>
            </div>
        </form>
    </BreezeGuestLayout>
</template>
