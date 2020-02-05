<template>
    
<div class="col-md-4 offset-md-4">
  
  <h3 class="text-white"> SELECCIONE </h3>

   <h3 class="text-white" > EL TIPO DE CÁNCER </h3>
<div   v-for="categoria in categorias" >
  
    <button v-on:click="saludar" class="boton-per2 btn-block">{{categoria.name}} </button> 
 

</div>
</div>

</template>

<script> 
    export default {
        mounted() {
            console.log('Component mounted.');
           

        }, 
        data () {
                return {
                  categorias: null
                }
              }, 
              mounted() {


                axios
                .get('/v/get/categories')
                .then(response =>  {
                  this.categorias = response.data; 

                  localStorage.categorias = this.categorias; 
                }) 


                console.log(this.categorias )
            } ,
        methods: {
                saludar: function (event) {
                    alert()
                }
        }
    }
</script>
