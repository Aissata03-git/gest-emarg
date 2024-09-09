<template>
    <div class="rounded bg-info p-4 mt-5">
        <h2>Register Person</h2>
        <form @submit.prevent="registerPerson">
            <input v-model="name" type="text" placeholder="Name" required  class="p-3 mb-2 form-control"/>
            <input v-model="email" type="email" placeholder="Email" required  class="p-3 mb-2 form-control"/>
            <button type="submit" class="p-3 mb-2 btn btn-dark text-light">Register</button>
        </form>
    </div>
</template>

<script setup>

import { ref } from 'vue';
import axios from 'axios';

const name = ref('');
const email = ref('');

const registerPerson = () => {
    axios.post('/persons', {
        name: name.value,
        email: email.value,
    }).then(response => {
        name.value = '';
        email.value = '';
        this.$emit('personRegistered'); // Notify the parent component to refresh the list
    });
};
</script>
