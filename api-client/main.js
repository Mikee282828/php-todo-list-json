const { createApp } = Vue;

createApp({
    data() {
        return {
            tasks: "",
            tempTitle: "",
        }
    },
    methods: {
        checkDone(bool) {
            if (bool) {
                return "done";
            } else {
                return "undone";
            }
        },
        switchBool(bool, index) {
            if (bool) {
                this.tasks[index].done = false;
            } else {
                this.tasks[index].done = true;
            }
        },
        checkBkg(bool) {
            if (bool) {
                return "checkActive"
            } else {
                return ""
            }
        },
        addTask(titolo) {
            let task = {
                "title" : titolo,
                "done" : false,
                "Date" : Date.now,
            };
            this.tasks.unshift(task);
            this.tempTitle = "";
        }
    },
    mounted() {
        axios.get("../server.php").then(result => {
            this.tasks = result.data;
        })
    }
}).mount('#app')