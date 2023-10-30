<script setup>
import AppNavbar from '../component/AppNavbar.vue';
import { userForm } from '@inertiajs/vue3'

const form = userForm({
    firstNmae: 'Bhubon',
    lastName: 'Nil',
    email: 'bhubonsd3@gmail.com'
})

function submit() {
    form.post();
}

</script>


<template>
    <AppNavbar />
    <div class="container">
        <div class="row">
            <div class="col-5">
                <form @submit.prevent="submit">

                    <label for="first_name">First Name</label>
                    <input type="text" class="form-control" id="first_name" v-model="form.firstNmae">

                    <label for="last_name">Last Name</label>
                    <input type="text" class="form-control" id="last_name" v-model="form.lastName">

                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" v-model="form.email">

                    <button class="btn btn-primary" type="submit">Submit</button>

                </form>
            </div>
        </div>
    </div>
</template>

<style scoped></style>