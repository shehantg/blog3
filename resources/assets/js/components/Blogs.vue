<template>


<div class="col-md-12">
    


<table class="table table-striped">
    <thead>
      <tr>
       <th>Id</th>
        <th>Title</th>
        <th>Tags</th>
        <th>Status</th>
       
        <th>User Id</th>
        
        
       
        
        <th>Publish</th>
        <th>Delete</th>
      </tr>
    </thead>
    <tbody>
<tr>


            <Blog v-for = "blog in blogs"  :blog= "blog"></Blog>
      </tr>
   

 </tbody>
  </table>




 </div>
    
</template>

<script>
    export default {


        props:['blogs']

        methods:{

                

        },


        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
