<template>
<div class="container animate__animated animate__slideInLeft  my-3">

    <div class="info-contacts position-relative">
        <div class="info-box info-box-1 text-center position-absolute">
            <h4>Indirizzo</h4>
            <p>Via di qualcosa n13 Verona, VR 37131</p>
        </div>
        <div class="info-box info-box-2 text-center position-absolute">
            <h4>Numero</h4>
        </div>
        <div class="info-box info-box-3 text-center position-absolute">
            <h4>Email</h4>
        </div>
        <div class="info-box info-box-4 text-center position-absolute">
            <h4>Social</h4>
        </div>

    </div>
    <div class="form-contacts">
        <form>
            <div class="form-group">
              <label for="exampleFormControlInput1">Nome</label>
              <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
            </div>
            <div class="form-group">
              <label for="exampleFormControlSelect1">Per cosa ci contatti?</label>
              <select class="form-control" id="exampleFormControlSelect1">
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
              </select>
            </div>
            <div class="form-group">
              <label for="exampleFormControlTextarea1">Testo</label>
              <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
        </form>
    </div>
</div>

</template>

<script>
import Axios from 'axios';

export default {
    name: "ContactsComp",

    data(){
      return{

      }
    },

    methods: {

    },

    mounted() {
    }

}
</script>

<style lang="scss" scoped>

.form-contacts{
    display: inline-block;
    width: 60%;
    background-color: #0aa1f2;
    padding: 60px;
    border-radius: 10px;
    .form-control{
        background-color: #151515;
        border-color: #151515;
        color: white;
        &:focus{
            border-color: #4b4b4b;
            box-shadow: 0 0 0 0.2rem rgba(93, 93, 93, 0.25);
        }
    }
}
.info-contacts{
    display: inline-block;
    width: 37%;
    height: 400px;

    .info-box{
        background-color: #4b4b4b;
        width: 40%;
        height: 100px;
        border-radius: 10px;
        color: white;
    }
    .info-box-1{
        left: 10%;
    }
    .info-box-2{
        right: -10%;
    }
    .info-box-3{
        left: 10%;
        bottom: 0;
    }
    .info-box-4{
        right: -10%;
        bottom: 0;
    }
}

</style>
