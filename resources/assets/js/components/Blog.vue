

<template>


<div class="col-md-12">
    


<td>{{blog.id}}</td>
<td> <a href=" {{ url('blogs/'+ blog.id) }} ">{{blog.title}}</a></td>
        

     
  <td>{{blog.status}}</td>

  <td>{{blog.user_id}}</td>

   <td>  


                            
<button class="btn btn-primary" id="createAdventureButton @click="publishblog">Publish</button>

                                 
                           
                      


 
      </td>


      <button  class="btn btn-danger" id="createAdventureButton @click="destroyblog">Destroy</button>

       




 </div>
    
</template>

<script>
    export default {


        props:['blog']

        methods:{

              publishblog(){

               axios.put('/blogs' + blog.id).then(response => {


                
                            });
              } ,


              destroyblog(){

               axios.delete('/blogs' + blog.id).then(response => {


                
                            });
              } 

        },


        mounted() {
            console.log('Component mounted.')
        }
    }
</script>















