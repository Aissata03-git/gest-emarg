<template>
    <div class="rounded bg-info p-4 mt-5">
        <h2>Person List</h2>
        <ul class="list-group">
            <li v-for="person in persons" :key="person.id" class="list-group-item">
                {{ person.name }} - {{ person.email }} - Status: {{ person.status }}
                <button @click="toggleBlock(person.id)"  class="btn btn-warning">
                    {{ person.status === 'blocked' ? 'Unblock' : 'Block' }}
                </button>
            </li>
        </ul>
    </div>
</template>

<script setup>

import {onMounted, ref} from 'vue';
import axios from 'axios';

const persons = ref([]);

const fetchPersons = () => {
    axios.get('/persons').then(response => {
        persons.value = response.data;
    });
};

const toggleBlock = (personId) => {
    axios.patch(`/persons/${personId}/toggle-block`).then(response => {
        fetchPersons();
    });
};

onMounted(() => {
    fetchPersons();
});
</script>
