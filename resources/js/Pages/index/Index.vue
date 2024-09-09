<template>
    <div>
       <BaseLayout>
           <div class="">
               <PersonList></PersonList>
               <PersonForm></PersonForm>
               <attendance-form></attendance-form>
               <WorkHours></WorkHours>
           </div>
       </BaseLayout>
    </div>
</template>

<script setup>
    import BaseLayout from "../layouts/BaseLayout.vue"
    import WorkHours from "../Components/WorkHours.vue";
    import AttendanceForm from "../Components/AttendanceForm.vue";
    import PersonForm from "../Components/PersonForm.vue";
    import PersonList from "../Components/PersonList.vue";
</script>
