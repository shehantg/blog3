@extends('layouts.dashboard')

@section('content')
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Page Header
        <small>Optional description</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
        <li class="active">Here</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

     
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
<button type="submit" class="btn btn-block btn-info btn-flat">Unpublish</button>
        
        @else
        <button type="submit" class="btn btn-block btn-primary btn-flat">Publish</button>
        @endif
       

</form>
       </td>
        <td>

                        
       <a href=" {{ url('team/'.$team->id.'/edit') }} "><button class="btn btn-block btn-warning btn-flat">Edit</button></a>

      
       </td>
       <td>
<form novalidate="novalidate" class="form-horizontal" method="POST"  action="/team/{{$team->id}}/delete" >
                        {{ csrf_field() }}
       <button type="submit" class="btn btn-block btn-danger btn-flat">Delete</button>

       </form>
       </td>
      </tr>
   
@endforeach
 </tbody>
  </table>




 </div>

</div>

        

    </section>
    <!-- /.content -->
  </div>




 @endsection