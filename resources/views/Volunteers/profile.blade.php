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
       <th></th>
        <th>Name</th>
        <th>Email</th>
        
        <th>cv</th>
      </tr>
    </thead>
    <tbody>
<tr>
@foreach($allvolunteers as $volunteer)

<td>{{$loop->iteration  }}</td>


       <td>{{$volunteer->name}}</td>
       <td>{{$volunteer->email}}</td>
       <td><a href="{{Storage::url($volunteer->cv)}}">CV</a></td>
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