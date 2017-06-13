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
       
        <th>Mobile</th>
         <th>Section</th>
        <th>Title</th>
        <th>Accepted</th>
        
        
        
        
       
        
        <th>Publish</th>
        <th>Edit</th>
        <th>Delete</th>
      </tr>
    </thead>
    <tbody>
<tr>

@foreach($allTeam as $team)

<td><img style="width:50px ; height:50px" class="img-responsive" src="{{Storage::url($team->photo)}}"></td>


        <td> <a href=" {{ url('team/'.$team->id) }} ">{{$team->full_name}}</a></td>
       
      

       

         <td>{{$team->mobile}}</td>
         <td>{{$team->section}}</td>
          <td>{{$team->title}}</td>
          @if($team->status)
        <td>YES</td>
        @else
        <td>NO</td>
        @endif


<td>

<form novalidate="novalidate" class="form-horizontal" method="POST"  action="/team/{{$team->id}}/publish" >
                        {{ csrf_field() }}
@if($team->status)
<button>Unpublish</button>
        
        @else
        <button>Publish</button>
        @endif
       

</form>
       </td>
        <td>

                        
       <a href=" {{ url('team/'.$team->id.'/edit') }} "><button>Edit</button></a>

      
       </td>
       <td>
<form novalidate="novalidate" class="form-horizontal" method="POST"  action="/team/{{$team->id}}/delete" >
                        {{ csrf_field() }}
       <button>Delete</button>

       </form>
       </td>
      </tr>
   
@endforeach
 </tbody>
  </table>




 </div>

</div>
</div>

 @endsection