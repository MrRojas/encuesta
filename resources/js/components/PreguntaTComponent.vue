<template>
    
<div class="col-md-4 offset-md-4">
<br>

  <h3 class="text-white" align="center"  style="width: 80%; margin-left: 10%"  > {{respuesta.name}} </h3>
  <div class="fondo-per" >
      <div class="row">
      <div class="col-md-6 text-center text-blue"  >
        <span style="font-size: 40px">  T </span>  <span style="font-size: 20px">  umor </span>
      </div>
      <div class="col-md-3  text-blue"  >
        <span style="font-size: 40px"> <b style="padding: 0"> N </b> </span>  
      </div>
      <div class="col-md-3  text-blue"  >
        <span style="font-size: 40px"> <b style="padding: 0"> M </b> </span>  
      </div>
      </div>


     <div   v-for="pregumta in preguntas"  >
      <div class="col-md-12 text-justify text-blue"  style="font-size: 12px">
        {{pregumta.des}}
      </div>
        
     

    </div>
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
                  respuesta: null, 
                  preguntas: null,
                }
              }, 
              mounted() {

                if(!localStorage.categorias){
                     axios.get('/v/get/categories').then(response =>  {
                      localStorage.setItem('categorias', JSON.stringify(response.data));
                    })

                 }

                 if(!localStorage.subcategorias){ 
                     axios.get('/v/get/subcategories').then(response =>  {
                      localStorage.setItem('subcategorias', JSON.stringify(response.data));
                    })
                }

                 if(!localStorage.questions){
                     axios.get('/v/get/questions').then(response =>  {
                    localStorage.setItem('preguntas', JSON.stringify(response.data));
                    })
                 }


                this.respuesta = JSON.parse(localStorage.getItem('respuesta')); 
                
                let texto = "(nasofaringe,orofaringe e hipofaringe)"
                this.respuesta.name = this.respuesta.name.replace(texto , "")

                this.preguntas = JSON.parse(localStorage.getItem("preguntas") )

                this.preguntas = this.preguntas.filter( e => {

                    return (e.type == 'T')
                })


                console.log(this.preguntas); 

            } ,
        methods: {
                saludar: function (event) {
                    alert()
                }
        }
    }
</script>
