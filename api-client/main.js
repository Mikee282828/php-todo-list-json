const { createApp } = Vue;

createApp({
    data() {
        return {
            tasks: "",
            tempTitle: "",
        }
    },
    methods: {
        boolOrderer() {
            let j = 0;
            for (let i = 0; i < this.tasks.length; i++) {
                if (this.tasks[j].done) {
                    this.tasks.push(this.tasks[j]);
                    this.tasks.splice(j, 1);
                } else {
                    j++;
                }
            }
        },
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
            this.boolOrderer();
        },
        checkBkg(bool) {
            if (bool) {
                return "checkActive"
            } else {
                return ""
            }
        },
        addTask(titolo) {
            const config = {
                headers: {
                    'Content-Type': 'multipart/form-data'
                }
            }
            if (titolo != "") {
                let task = {
                    "title": titolo,
                    "done": false,
                    "Date": "11/11/11",
                };
                axios.post("../create.php", task, config).then(result => {
                    console.log("Risultati ", result.data);
                    this.tasks = result.data;
                    this.boolOrderer();
                    this.tempTitle = "";
                });
            }

        }
    },
    mounted() {
        axios.get("../list.php").then(result => {
            this.tasks = result.data;
            this.boolOrderer();
        })
    }
}).mount('#app')