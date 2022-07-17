<template>
<div class="container animate__animated animate__fadeIn my-5 text-center">
    <h1 class="m-3">About me</h1>
    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Labore, odit provident tempore recusandae blanditiis quibusdam, corrupti natus omnis incidunt obcaecati in sunt? Doloremque vel vitae totam ratione necessitatibus unde optio?</p>
    <div class="container-smv">
        <h5>SebastianoMV</h5>
        <div class="hide container-hide">
            <img src="../../../../public/image/46-466964_drawn-arrow-curved-curved-arrow.png" alt="arrow">
            <div>Effetto cuore pulsante</div>
        </div>
    </div>

</div>

</template>

<script>
import Axios from 'axios';

export default {
    name: "AboutComp",

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

.container-smv{
    width: 50%;
    margin: auto;
    position: relative;
    .container-hide{
        position: absolute;
        right: 10%;
        top: -10%;

    }
}

h5{
    animation: mycolor 1.5s infinite;
}
@keyframes mycolor{
    30%{ color: black; }
    40%{ color: #0aa1f2; }
    50%{ color: black; }
    60%{ color: #0aa1f2; }
    70%{ color:black; }

}
.hide{
    opacity: 0;
    animation: myhide 3s;
    img{
        height: 100px;
    }
}
@keyframes myhide{
    0%{ opacity: 100; }
    40%{ opacity: 100%; }
    70%{ opacity: 50%; }
    100%{ opacity: 0%; }

}


</style>
