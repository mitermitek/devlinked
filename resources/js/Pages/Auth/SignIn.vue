<script setup>
import { Link, useForm } from "@inertiajs/vue3";

const form = useForm({
    email: null,
    password: null,
    remember: false,
});
</script>

<template>
    <h2>Sign in</h2>

    <form @submit.prevent="form.post(route('auth.sign-in.store'))">
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
            <div>
                <input type="checkbox" v-model="form.remember" id="remember" />
                Remember me
            </div>
        </div>
        <button type="submit">Sign in</button>
    </form>
    <p><Link :href="route('auth.sign-up.index')">no account yet? create it now</Link></p>
</template>
