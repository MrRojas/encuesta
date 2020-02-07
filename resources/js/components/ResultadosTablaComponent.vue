<template>
    <div class="row">
<div class="col-md-4 offset-md-4">
  <br><br>
  <h3 class="text-white" align="center" style=" margin-left: 30%; max-width: 60%; "  > {{respuesta.name}} </h3>
 

  <div class="fondo-per" >
   
 
      <div class="text-center text-blue"  >
        <span style="font-size: 40px;">T</span>abla de Combinaciónes:
      </div>

      <table class="table" >
        <tr>
          <td>T</td>
          <td>N</td>
          <td>M</td>
          <td>Estadio</td>
        </tr>

        <tr  v-for="pregunta in preguntas"  >
          <td>T</td>
          <td>N</td>
          <td>M</td>
          <td>Estadio</td>
        </tr>

        
      </table>
 
   
      
    </dir>
    <div class="text-center">
    <button class="btn btn-res2"  v-on:click="nextM" > >  </button> 
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
                  respuestaT: [] , 
                  respuestaM: [] , 
                  respuestaN: [] , 



                 
                }
              }, 
              mounted() {

       

                this.respuesta = JSON.parse(localStorage.getItem('respuesta')); 
                
                let texto = "(nasofaringe,orofaringe e hipofaringe)"
                this.respuesta.name = this.respuesta.name.replace(texto , "")

                this.preguntas = JSON.parse(localStorage.getItem("preguntas"))              
                
                this.respuestaT = JSON.parse(localStorage.getItem("respuestaT"))              

                this.preguntas = this.preguntas.filter( (e ) => {
             
                    if (e.id == 'M' && e.subcategories_id== this.respuestaT.id )
                      return e; 
                })

                console.log(this.preguntas)
             

                
            } ,
        methods: {
                changeRequest: function (x , event ) {
                  
                  let validar = true 
                    
                  for (var i = this.respuestaT.length - 1; i >= 0; i--) {
                   
                     if(this.respuestaT[i] == x ) 
                        validar = false 
                  }

                  if(validar)
                    this.respuestaT.push(x)
                    else
                    this.respuestaT.pop(x)  

                
                } , 


                  nextM: function ( ) {

                    let respuestaT =  JSON.stringify(this.respuestaT)
                  
                     localStorage.setItem('respuestaM', respuestaT ) ; 
                     //window.location.href = '#/resultado'
                }
        }
    }
</script>
