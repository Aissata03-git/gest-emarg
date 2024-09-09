<template>

    <div class="bg-dark text-light p-3">
        <h1 class="text-center"> Bienvenue sur le tableau de bord</h1>
        <p>Vous avez passé {{ x }} secondes sur cette page</p>

        <div class="container">
            <slot></slot>
        </div>
    </div>


</template>
<script setup>
import {ref} from "vue";
const x  = ref(0);
setInterval(() => {
    x.value++;
}, 1000);


</script>
