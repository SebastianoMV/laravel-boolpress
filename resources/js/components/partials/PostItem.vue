<template>
    <div class="card m-3 p-3"  :class="index%2 ? 'dark-color' : 'light-color'">

        <h3>
            <router-link :class="index%2 ? 'light-title' : 'dark-title'" :to="{ name: 'show', params: { slug: post.slug }}">{{post.title}}</router-link>
        </h3>
        <p>{{shortCont}}</p>
        <p>{{formatDate}}</p>

        <ul>
            <li v-for="tag in post.tags" :key="tag.id" :class="tag.slug">
                {{tag.name}}
            </li>
        </ul>

    </div>

</template>

<script>
export default {
    name: 'PosItem',
    props: {
        post: Object,
        category: Object,
        showpage: Boolean,
        index: Number,
    },
    computed:{
        shortCont(){
            return this.post.content.substr(0,50) + '...';
        },
        formatDate(){
            const d = new Date(this.post.updated_at);
            let day = d.getDate();
            let mnt = d.getMonth() + 1;
            let year = d.getFullYear();
            if(day < 10) day = '0'+day;
            if(mnt < 10) mnt = '0'+mnt;

            return `${day}/${mnt}/${year}`;
        }
    },


}
</script>

<style lang="scss" scoped>
.card{
    h3{
        .dark-title{
            color: #2e2e2e;
        }
        .light-title{
            color: #0aa1f2;
        }

    }
    ul{
        padding: 0;
        list-style: none;
        display: flex;
        li{
            font-size: small;
            font-weight: 600;
            margin-right: 10px;
        }
        .multiplayer{
            color: red;
        }
        .singleplayer{
            color: blueviolet;
        }
        .openworld{
            color: green;
        }
        .online{
            color: blue;
        }
    }
}

.light-color{
    background-color: lighten($color: #0aa1f2, $amount: 20%);
}
.dark-color{
    background-color: #2e2e2e;
    color: white;
}

</style>
