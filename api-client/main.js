const { createApp } = Vue;

createApp({
    data() {
        return {
            tasks: "",
            tempTitle: "",
            config: {
                headers: {
                    'Content-Type': 'multipart/form-data'
                }
            }
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
            let variable = bool ? "done" : "undone";
            return variable;
        },
        switchBool(bool, index) {
            // if (bool) {
            //     this.tasks[index].done = false;
            // } else {
            //     this.tasks[index].done = true;
            // }
            let data = {
                "booleano": bool,
                "indice": index
            }

            axios.post("../updateTask.php", data, this.config).then(result => {
                console.log(result.data);
                this.tasks = result.data;
                this.tempTitle = "";
            })
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
            if (titolo != "") {
                let task = {
                    "title": titolo,
                    "done": false,
                    "Date": "11/11/11",
                };
                axios.post("../create.php", task, this.config).then(result => {
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