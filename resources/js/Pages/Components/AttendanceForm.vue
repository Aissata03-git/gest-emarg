<template>
    <div class="rounded bg-info p-4 mt-5">
        <h2>Emarger</h2>
        <form @submit.prevent="markAttendance">
            <input v-model="matricule" type="text" placeholder="Matricule" required class="p-3 mb-2 form-control"/>
            <button type="submit" class="p-3 mb-2 btn btn-dark text-light">Émarger</button>
        </form>
    </div>
</template>

<script setup>
import { ref } from 'vue';
import axios from 'axios';


const matricule = ref('');
const markAttendance  = () => {
    axios.post('/attendance', {
        matricule: this.matricule,
    }).then(response => {
        alert('Attendance marked successfully');
    });
}

</script>
