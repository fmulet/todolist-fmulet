<template>
    <div class="container w-100 m-auto text-center mt-3">
        <h1 class="text-danger">Todo List</h1>
        <add-task-form v-on:reloadlist="getTasks()" />
        <list-view
            :tasks="tasks"
            v-on:reloadlist="getTasks()"
            class="text-center"
        />
    </div>
</template>

<script>
import addTaskForm from "./addTaskForm.vue";
import listView from "./listView.vue";

export default {
    components: {
        addTaskForm,
        listView,
    },

    data: function () {
        return {
            tasks: [],
        };
    },
    methods: {
        getTasks() {
            axios
                .get("api/tasks")
                .then((res) => {
                    this.tasks = res.data;
                })
                .catch((error) => {
                    console.log(error);
                });
        },
    },
    created() {
        this.getTasks();
    },
};
</script>

<style scoped></style>
