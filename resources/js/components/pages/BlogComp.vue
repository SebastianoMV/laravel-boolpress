<template>
<div class="container animate__animated ">

    <LoaderComp v-if="!posts"/>
    <div v-else>
        <div>
        <PostItem v-for="post in posts" :key="post.id" :post="post" :category="category" :showpage="showpage"/>
        </div>
        <div class="d-flex justify-content-between">
            <div v-if="showpage" class="p-3">
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
            <div v-else class="p-3">
                <button class="btn-page"
                @click="getApi(1)"
                >
                    <i class="fa-solid fa-circle-arrow-left"></i> Tutte le categorie
                </button>
            </div>
            <div class="p-3">
                <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Scegli una categoria
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <li v-for="category in categories" :key="category.id" class="dropdown-item" href=""
                        @click="postsByCategory(category.slug)">
                            {{category.name}}
                        </li>

                  </div>
                </div>

            </div>
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
            category: null,
            showpage: true,
        };
    },
    methods: {
        getApi(page) {
            this.posts = null;
            this.showpage = true;
            axios.get(this.apiUrl + "?page=" + page)
                .then(resp => {
                this.posts = resp.data.posts.data;
                this.pagination ={
                    current: resp.data.posts.current_page,
                    last: resp.data.posts.last_page}
                console.log(this.posts);
                this.categories = resp.data.categories;
                console.log(this.categories);
            });
        },
        postsByCategory(slug){
            this.posts = null;
            this.showpage = false;
            axios.get(this.apiUrl + '/post-category/' + slug)
            .then(res => {
                this.posts = res.data;
                console.log(this.posts);
            })
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
