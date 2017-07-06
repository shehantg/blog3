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

     
<table class="table table-striped">
    <thead>
      <tr>
       <th>Id</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Roles</th>
        
        <th>Email</th>
        
       
        
        <th>Edit</th>
      </tr>
    </thead>
    <tbody>
      
@foreach ($users as $user) 


<tr>

<td>{{$user->id}}</td>


       
        
        
        <td>{{$user->first_name}}</td>
        <td>{{$user->last_name}}</td>
        <td>
        @foreach($user->roles as $role)
       
        
        {{$role->name}},
        

        @endforeach
        </td>
        
        <td>{{$user->email}}</td>
        
       
       <td> <a href="{{ url('user/'.$user->id) }}"><button class="btn btn-block btn-info btn-flat">Assign Roles</button></a></td>
      </tr>
   


@endforeach

 
      
    </tbody>
  </table>

        

    </section>
    <!-- /.content -->
  </div>
    
    
       
       


     

        
       

    
    
   


    @endsection