<template>
<div class="container animate__animated animate__slideInLeft d-flex">
    <div class="text">
        <h2>Un forum di gamers per gamers</h2>
        <h4 class="animate__animated animate__slideInLeft">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Cumque, ea.</h4>
        <p class="animate__animated animate__slideInRight">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Pariatur facilis voluptas consectetur at minima voluptatum omnis cum consequatur modi asperiores?</p>
    </div>
    <div class="image">
        <img src="../../../../public/images/The-Legend-Of-Zelda-Breath-Of-The-Wild-Free-PNG.png" alt="TLOZ">
    </div>
</div>

</template>

<script>
import Axios from 'axios';

export default {
    name: "HomeComp",

    data(){
      return{

      }
    },

    methods: {

    },

    mounted() {

    },

}
</script>

<style lang="scss" scoped>
.container{
    height: 57vh;
    margin-top: 10px;
    .text{
        width: 60%;
        height: 100%;
        h2 , p{
            background-color: #0aa1f2;
            display: inline-block;
            padding: 20px;
        }
        h4{
            background-color: black;
            color: #0aa1f2;
            padding: 20px;
            animation-duration: 5s;
            margin-left: 20px;
        }
        p{
            width: 95%;
            animation-duration: 6s;
        }

    }
    .image{
        width: 40%;
        height: 100%;
        position: relative;
        img{
            width: 80%;
            position: absolute;
            bottom: 0;
            right: 0;
        }

    }
}



</style>
