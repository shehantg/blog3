@extends('layouts.app')

@section('content')


<form action="{{route('assign.role')}}" method="POST">
	

	<input type="email" name="email" value="{{$user->email}}">

	<input type="checkbox" {{ $user->hasRole('User') ? 'checked' : ''}} name="role_user"> 
    <input type="checkbox" {{ $user->hasRole('Director') ? 'checked' : ''}} name="role_director">
    <input type="checkbox" {{ $user->hasRole('Admin') ? 'checked' : ''}} name="role_admin">
     <input type="checkbox" {{ $user->hasRole('Blogger') ? 'checked' : ''}} name="role_blogger">
      <input type="checkbox" {{ $user->hasRole('Volunteer') ? 'checked' : ''}} name="role_volunteer">
    <button type="submit">Assign Roles</button>

</form>

@endsection