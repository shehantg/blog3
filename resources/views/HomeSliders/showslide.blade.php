@extends('layouts.app')

@section('content')

<div class="container">
 <div class="row top-space">

 <div class="col-md-12">



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



<table class="table table-striped">
    <thead>
      <tr>
      
        <th>Title</th>
       
      
       <th>Program Scheme</th>
        
        <th>Amount</th>
        <th>Donate</th>
      </tr>
    </thead>
    <tbody>
    @foreach($donations as $donation)
<tr>

<td>{{$donation->title}}</td>

<td>{{$donation->program_scheme}}</td>
<td>{{$donation->amount}}</td>
<td><button class="btn btn-primary">DONATE</button></td>



</tr>
 @endforeach
</tbody>
</table>

 </div>
 </div>



  @if(Auth::id() == $homeslide->homeslider->user->id)

 <a href="/homeslide/{{$homeslide->id}}/hscreatedonation">Add a donation option </a>

 @endif

 

 
 </div>


 @endsection