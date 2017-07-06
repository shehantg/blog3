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
@foreach($homeslides as $homeslide)

<h3>Slider Number {{$loop->index}}</h3>
<label>Title</label>
<p>{{$homeslide->title}}</p>

<label>intro</label>
<p>{!! $homeslide->intro !!}</p>

<label>Tag Line</label>
<p>{{$homeslide->tagline}}</p>

@if (isset($homeslide->video))


<div class="row text_row4 bgcolor margin_top">
  <div class="col-md-12">





            <iframe width="560" height="315" src="{{$homeslide->video}}" frameborder="0" allowfullscreen></iframe>
       

</div>
</div>

@endif

<label>program-scheme</label>
<p>{{$homeslide->program_scheme}}</p>



<label>body </label>
<p>{!! $homeslide->body !!}</p>


<label>Slide pic </label>

<img  class="img-responsive" src="{{Storage::url($homeslide->filename)}}">
<div class="row">
<div class="col-md-6 col-md-offset-3">
<a href=" {{ url('homeslider/'.$homeslider->id.'/'.$homeslide->id.'/edit') }} "><button type="button" class="btn btn-block btn-info btn-flat">Edit</button></a>

<form novalidate="novalidate" class="form-horizontal" method="POST"  action="/homeslider/{{$homeslider->id}}/{{$homeslide->id}}/delete" >
                        {{ csrf_field() }}
       <button type="submit" class="btn btn-block btn-danger btn-flat">Delete</button>

       </form>
</div>
</div>
<hr>

@endforeach

 </div>
 </div>


        

    </section>
    <!-- /.content -->
  </div>



 @endsection