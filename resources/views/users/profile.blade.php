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

     
<form action="/user/{{$user->id}}/role" method="POST">

{{csrf_field()}}
	<label>Email</label>
	<input type="email" name="email" value="{{$user->email}}">
	<label>First Name</label>
	<input type="text" name="first_name" value="{{$user->first_name}}">
	<label>Last Name</label>
	<input type="text" name="last_name" value="{{$user->last_name}}">

	<label>User</label><input type="checkbox" name="role_user"  {{ $user->hasRole('User') ? 'checked' : ''}} > 
    <label>Director</label><input type="checkbox"  name="role_director" {{ $user->hasRole('Director') ? 'checked' : ''}} >
    <label>Admin</label><input type="checkbox"  name="role_admin" {{ $user->hasRole('Admin') ? 'checked' : ''}}>
     <label>Blogger</label><input type="checkbox"  name="role_blogger" {{ $user->hasRole('Blogger') ? 'checked' : ''}}>
     <label>Volunteer</label> <input type="checkbox"  name="role_volunteer" {{ $user->hasRole('Volunteer') ? 'checked' : ''}}>
    <button type="submit">Assign Roles</button>

</form>

        

    </section>
    <!-- /.content -->
  </div>



@endsection