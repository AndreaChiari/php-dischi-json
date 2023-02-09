console.log('vue ok', Vue)

const { createApp } = Vue;
const apiUri = 'http://localhost/php-dischi-json/dischi.php/'
const app = createApp({
    data() {
        return {
            discs: []

        }

    },
    created() {
        axios.get(apiUri).then(res => {
            this.discs = res.data
        });
    }

})

app.mount('#app')