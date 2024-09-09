<template>
    <div class="rounded bg-info p-4 mt-5">
        <h2>Heures de Travail</h2>
        <ul class="list-group">
            <li v-for="person in workHours" :key="person.name" class="list-group-item">
                {{ person.name }} - {{ person.hours }} heures
            </li>
        </ul>
    </div>
</template>

<script setup>

import { ref, onMounted } from 'vue';
import axios from 'axios';

const workHours = ref([]);

const fetchWorkHours = () => {
    axios.get('/work-hours').then(response => {
        workHours.value = response.data;
    });
};

onMounted(() => {
    fetchWorkHours();
});
</script>
