<script setup>
import {Head, usePage} from "@inertiajs/vue3";
import {computed} from "vue";

const page = usePage();
const successMessage = computed(() => page.props.success);
const errorMessage = computed(() => page.props.error)
</script>

<template>
    <Head>
        <title>DevLinked - Social network for developers</title>
        <meta
            content="DevLinked - Social network for developers"
            name="description"
        />
    </Head>
    <main>
        <div v-if="!!successMessage" class="alert alert-success">
            <p>{{ successMessage }}</p>
        </div>
        <div v-if="!!errorMessage" class="alert alert-error">
            <p>{{ errorMessage }}</p>
        </div>
        <slot/>
    </main>
</template>
