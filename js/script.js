const { createApp } = Vue;

createApp({
    data() {
        return {
            dischi: []
        };
    },
    methods: {
        getDischiFromApi() {
            axios.get('server.php').then((response) => {
                this.dischi = response.data;
            });
        },
    },
    mounted() {
        this.getDischiFromApi();
    }
}).mount('#app');