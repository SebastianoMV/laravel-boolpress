<template>
<div>
    <HeaderComp/>

    <main>
        <div class="d-flex justify-content-center">
            <h1 class="animate__animated animate__fadeInUp">Sheikah's forum</h1>
            <img class="animate__animated animate__fadeInDown" src="../../public/image/1200px-The_Legend_of_Zelda_-_Sheikah_Symbol.svg.png" alt="">
        </div>

        <router-view>/</router-view>

    </main>



    <FooterComp/>

</div>

</template>

<script>

import HeaderComp from './components/partials/HeaderComp.vue';
import FooterComp from './components/partials/FooterComp.vue';
import BlogComp from './components/pages/BlogComp.vue';

export default {
    name: 'App',
    components:{
    HeaderComp,
    FooterComp,
    BlogComp
},

}
</script>

<style lang="scss" scoped>
h1{
    font-size: 100px;
    animation-duration: 3s;
}
img{
    height: 150px;
    animation-duration: 4s;
}
main{
    min-height: calc(100vh - 255px);
}

</style>
