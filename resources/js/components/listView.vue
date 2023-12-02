<template>
    <div class="mt-4">
        <h4>Tareas</h4>
        <hr class="w-50 m-auto mb-3" />
        <ul class="list-group m-auto">
            <list-task
                v-for="task in tasks"
                :key="task.id"
                :task="task"
                v-on:taskchanged="$emit('reloadlist')"
                class="m-auto my-1 text-justify text-wrap"
            />
        </ul>
    </div>
</template>

<script>
import listTask from "./listTask.vue";

export default {
    components: {
        listTask,
    },
    props: ["tasks"],
};
</script>

<style scoped></style>
