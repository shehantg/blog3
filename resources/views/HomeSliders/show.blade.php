@extends('layouts.app')

@section('content')

<div class="container">
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
<a href=" {{ url('homeslider/'.$homeslider->id.'/'.$homeslide->id.'/edit') }} "><button type="button" class="btn btn-primary">Edit</button></a>
<a href=" {{ url('/homeslider/'.$homeslider->id.'/'.$homeslide->id.'/delete') }} "><button type="button" class="btn btn-danger">Delete</button></a>
</div>
<hr>

@endforeach

 </div>
 </div>
 </div>
 @endsection