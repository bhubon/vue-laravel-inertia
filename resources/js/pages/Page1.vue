<script setup>
import AppNavbar from '../component/AppNavbar.vue';
const props = defineProps({ data: Object })
</script>

<template>
    <AppNavbar />
    <h1>Page 1</h1>

    <h1>Name: {{ props.data.name }}</h1>
    <h1>Age: {{ props.data.age }}</h1>
    <h1>City: {{ props.data.city }}</h1>
</template>

<style scoped></style>