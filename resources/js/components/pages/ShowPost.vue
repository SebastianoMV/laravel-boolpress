<template>
<div class="container my-3">
    <h3>{{post.title}}</h3>
    <p>{{post.content}}</p>
    <router-link class="nav-link" :to="{name: 'blog'}"><i class="fa-solid fa-circle-arrow-left"></i> Back</router-link>

</div>

</template>

<script>

export default {
    name: "ShowPost",

    data(){
      return{
        post: {
            title:'',
            content:'',
        },
        apiUrl: '/api/posts/'
      }
    },

    methods: {
        getApi(){
            axios.get(this.apiUrl + this.$route.params.slug)
                .then(resp => {
                this.post = resp.data;
                console.log(this.post);
            });

        }

    },

    mounted() {
        this.getApi()
    }

}
</script>

<style lang="scss" scoped>
a{
    cursor: pointer;
}

</style>
