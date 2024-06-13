const { createApp } = Vue;

createApp({
    data() {
        return {
        }
    },
    methods:{

    },
    mounted(){
        axios.get("../server.php").then(result=>{
            console.log(result.data );
        })
    }
}).mount('#app')