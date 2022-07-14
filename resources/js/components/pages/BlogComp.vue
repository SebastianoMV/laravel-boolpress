<template>
<div class="container animate__animated animate__fadeIn">
    <div>
        <PostItem v-for="post in posts" :key="post.id" :post="post"/>
    </div>
    <button
    @click="getApi(pagination.current -1)"
    :disabled="pagination.current == 1">
        <<
    </button>

    <button
    @click="getApi(pagination.current +1)"
    :disabled="pagination.current == pagination.last">
        >>
    </button>
</div>

</template>

<script>
import Axios from 'axios';
import PostItem from '../partials/PostItem.vue';

export default {
    name: "BlogComp",
    components:{
        PostItem,
    },


    data() {
        return {
            posts: null,
            pagination:{
                current: null,
                last: null,
            },
            apiUrl: "/api/posts",
        };
    },
    methods: {
        getApi(page) {
            Axios.get(this.apiUrl + "?page=" + page)
                .then(resp => {
                this.posts = resp.data.data;
                this.pagination ={
                    current: resp.data.current_page,
                    last: resp.data.last_page}
                page = this.pagination
            });
        }
    },
    mounted() {
        this.getApi(1);
    },
    components: { PostItem }
}
</script>

<style lang="scss" scoped>
.animate__fadeIn{
    animation-duration: 3s;
}



</style>
