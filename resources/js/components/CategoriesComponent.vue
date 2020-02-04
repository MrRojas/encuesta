<template>
    
<div>
<div v-for="element in categorias" >
    <h1>
        {{ element }}
    </h1>
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
              mounted () {
                axios
                .get('/v/get/categories')
                .then(response => (this.categorias = response))
          }
    }
</script>
