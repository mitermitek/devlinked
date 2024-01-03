<script setup>
import { Link, useForm } from "@inertiajs/vue3";

const form = useForm({
    name: null,
    email: null,
    password: null,
    password_confirmation: null,
});
</script>

<template>
    <h2>Sign up</h2>

    <form @submit.prevent="form.post(route('auth.sign-up.store'))">
        <div class="form-group">
            <label for="name">Name</label>
            <input
                type="text"
                id="name"
                v-model="form.name"
                autocomplete="username"
            />
            <div class="error" v-if="form.errors.name">
                {{ form.errors.name }}
            </div>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input
                type="email"
                id="email"
                v-model="form.email"
                autocomplete="email"
            />
            <div class="error" v-if="form.errors.email">
                {{ form.errors.email }}
            </div>
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" id="password" v-model="form.password" />
            <div class="error" v-if="form.errors.password">
                {{ form.errors.password }}
            </div>
        </div>
        <div class="form-group">
            <label for="password_confirmation">Confirm password</label>
            <input
                type="password"
                id="password_confirmation"
                v-model="form.password_confirmation"
            />
            <div class="error" v-if="form.errors.password">
                {{ form.errors.password }}
            </div>
        </div>
        <button type="submit">Sign up</button>
    </form>
    <p><Link :href="route('auth.sign-in.index')">already have an account? log in now</Link></p>
</template>
