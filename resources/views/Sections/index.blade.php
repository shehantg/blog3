@extends('layouts.dashboard')

@section('content')

  <!-- Content Wrapper. Contains page content -->
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
       <th>Id</th>
        <th>Section Name</th>
        
        
        
        
       
        
        <th>Rank</th>
        <th>Edit</th>
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

    <a href="/section/{{$section->id}}/edit"  title="edit section">    <button class="btn btn-block btn-warning btn-flat">Edit</button></a>


       </td>
       <td>
<form novalidate="novalidate" class="form-horizontal" method="POST"  action="/section/{{$section->id}}/delete" >
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