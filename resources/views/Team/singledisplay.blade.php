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

<label>Full Name</label>
<p>{{$showTeam->full_name}}</p>

<label>Title</label>
<p>{{$showTeam->title}}</p>

<label>Section</label>
<p>{{$showTeam->section}}</p>

<label>Email</label>
<p>{{$showTeam->email}}</p>

<label>Mobile</label>
<p>{{$showTeam->mobile}}</p>

<label>Address</label>
<p>{{$showTeam->venue}}</p>

<label>Joined Date</label>
<p>{{$showTeam->date}}</p>

<label>body </label>
<p>{!! $showTeam->body !!}</p>

<label>accepted</label>
<p>{{$showTeam->status}}</p>
<label>profile pic </label><img  class="img-responsive" src="{{Storage::url($showTeam->photo)}}">

 </div>
 </div>
        

    </section>
    <!-- /.content -->
  </div>



 @endsection