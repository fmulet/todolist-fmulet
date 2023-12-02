<template>
    <label class="list-group-item d-flex justify-content-between w-50">
        <input
            type="checkbox"
            aria-disabled="false"
            aria-readonly="false"
            v-model="task.completed"
            @change="updateCheck()"
            :checked="task.completed"
            class="form-check-input"
            :id="task.id"
            
        />
        <span :class="[task.completed ? 'completed' : '', 'task']">{{
            task.name
        }}</span>
        <button class="btn-danger ml-3" @click="removeTask()">X</button>
    </label>
</template>

<script>
export default {
    props: ["task"],
    methods: {
        updateCheck() {
            axios
                .put(`api/task/${this.task.id}`, { task: this.task })
                .then((res) => {
                    if (res.status === 200) {
                        this.$emit("taskchanged");
                    }
                })
                .catch((error) => {
                    console.log("error from axios put", error);
                });
        },
        removeTask() {
            axios
                .delete(`api/task/${this.task.id}`)
                .then((res) => {
                    if (res.status == 200) {
                        this.$emit("taskchanged");
                    }
                })
                .catch((error) => {
                    console.log("error from axios delete ", error);
                });
        },
        change(e) {
   if (e) {
      const value = e.target.checked ? "true" : "false";
      this.$emit('update:modelValue', value);
   }
}
    },
};
</script>

<style>
.completed {
    text-decoration: line-through;
    color: gray;
}
.task {
    word-break: break-all;
}
</style>
