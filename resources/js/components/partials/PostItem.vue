<template>
    <div class="card m-3 p-3" >
        <h3>{{post.title}}</h3>
        <p>{{post.content}}</p>
        <ul>
            <li v-for="(tag) in post.tags" :key="tag.id" :class="tag.slug">
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
    }

}
</script>

<style lang="scss" scoped>
.card{

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
    background-color: rgb(232, 229, 229);

}

</style>
