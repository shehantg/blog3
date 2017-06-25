@extends('layouts.app')

@section('content')

<div class="container">
 <div class="row top-space">

 <div class="col-md-12">
  


<table class="table table-striped">
    <thead>
      <tr>
       
        <th>Picture</th>
        
        <th>Name</th>
       
       
        
        
        
        
       
        
      
        <th>Body</th>
      </tr>
    </thead>
    <tbody>
<tr>

@foreach($testimonials as $testimonial)

<td><img style="width:50px ; height:50px" class="img-responsive" src="{{Storage::url($testimonial->photo)}}"></td>


        <td> {{$testimonial->name}}</td>
       
      

       

         <td>{!! $testimonial->body !!}</td>
       




      </tr>
   
@endforeach
 </tbody>
  </table>




 </div>

</div>
</div>

 @endsection