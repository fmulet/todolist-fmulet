<template>
    <div class="mt-3">
        <h2>Agregar Tarea</h2>
        <div class="container m-2 w-100">
            <input
                type="text"
                placeholder="Escriba Tarea"
                class="border"
                v-model="task.name"
            />
            <button
                :class="[task.name ? 'active' : 'notactive']"
                @click="addTask()"
            >
                Agregar
            </button>
        </div>
    </div>
</template>
<script>
export default {
    data: function () {
        return {
            task: {
                name: "",
            },
        };
    },
    methods: {
        /**
         * Adds a task to the server.
         *
         * @param {type} paramName - description of parameter
         * @return {type} description of return value
         */
        addTask() {
            if (this.task.name == "") {
                return;
            }
            axios
                .post("api/task/store", {
                    task: this.task,
                })
                .then((res) => {
                    if (res.status == 201) {
                        this.task.name = "";
                        this.$emit("reloadlist");
                    }
                })
                .catch((error) => {
                    console.log(error);
                });
        },
    },
};
</script>

<style scoped>
.active {
    color: white;
    background-color: blue;
}
.inactive {
    color: gray;
}
</style>
