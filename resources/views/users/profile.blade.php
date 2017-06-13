@extends('layouts.app')

@section('content')

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

@endsection