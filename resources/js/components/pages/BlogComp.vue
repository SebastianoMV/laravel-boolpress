<template>
<div class="container animate__animated ">

    <LoaderComp v-if="!posts"/>
    <div v-else>
        <div>
        <PostItem v-for="post in posts" :key="post.id" :post="post"/>
        </div>
        <div class="p-3">
        <button class="btn-page"
        @click="getApi(pagination.current -1)"
        :disabled="pagination.current == 1">
            <i class="fa-solid fa-circle-arrow-left"></i>
        </button>

        <button class="btn-page"
        v-for="n in pagination.last" :key="n"
        @click="getApi(n)"
        :disabled="pagination.current == n">
            {{n}}
        </button>

        <button class="btn-page"
        @click="getApi(pagination.current +1)"
        :disabled="pagination.current == pagination.last">
            <i class="fa-solid fa-circle-arrow-right"></i>
        </button>
    </div>
    </div>



</div>

</template>

<script>
import PostItem from '../partials/PostItem.vue';
import LoaderComp from '../partials/LoaderComp.vue';

export default {
    name: "BlogComp",
    components:{
        PostItem,
        LoaderComp,
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
            this.post = null;
            axios.get(this.apiUrl + "?page=" + page)
                .then(resp => {
                this.posts = resp.data.data;
                this.pagination ={
                    current: resp.data.current_page,
                    last: resp.data.last_page}
                console.log(this.pagination);
            });
        }
    },
    mounted() {
        this.getApi(1);
    },
    components: { PostItem, LoaderComp }
}
</script>

<style lang="scss" scoped>
.animate__fadeIn{
    animation-duration: 3s;
}
.btn-page{
    border: none;
    background-color: transparent;
    font-size: 20px;

}



</style>
