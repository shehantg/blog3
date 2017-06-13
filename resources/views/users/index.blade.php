@extends('layouts.app')

@section('content')


    

    
    
    
       
       

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
        
       
       <td> <a href="{{ url('user/'.$user->id) }}"><button>Assign Roles</button></a></td>
      </tr>
   


@endforeach

 
      
    </tbody>
  </table>
     

        
       

    
    
   


    @endsection