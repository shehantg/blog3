@extends('layouts.app')

@section('content')

<div class="container">
 <div class="row top-space">

 <div class="col-md-12">
  


<table class="table table-striped">
    <thead>
      <tr>
       <th>Id</th>
        <th>Section Name</th>
        
        
        
        
       
        
        <th>Rank</th>
        <th>Delete</th>
      </tr>
    </thead>
    <tbody>
<tr>

@foreach($allSections as $section)

<td>{{$section->id}}</td>


        <td> {{$section->title}}</td>
       <td> {{$section->rank}}</td>

       
   <td>

    <a href="/section/{{$section->id}}/edit"  title="edit section">    <button>Edit</button></a>


       </td>
       <td>
<form novalidate="novalidate" class="form-horizontal" method="POST"  action="/section/{{$section->id}}/delete" >
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