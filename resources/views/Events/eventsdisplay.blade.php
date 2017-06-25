@extends('layouts.app')

@section('content')

<div class="container">
	<div class="row">
		<div class="col-md-12">
		<label>Title</label>
		<p>{{$event->title}}</p>

    <label>Event Photo</label>
   <img src="{{Storage::url($event->photo)}}">

		<label>body</label>
		<p>{!! $event->body !!}</p>

		<label>date</label>
		<p>{{$event->date}}</p>

		<label>Fundraising Goal</label>
		<p>{{$event->fundraising_goal}}</p>

			<label>Venue</label>
		<p>{{$event->venue}}</p>

		<label>User</label>
		<p>{{$event->user->first_name}} {{$event->user->last_name}}</p>

		


@if (isset($event->video))


<div class="row text_row4 bgcolor margin_top">
  <div class="col-md-12">





            <iframe width="560" height="315" src="{{$event->video}}" frameborder="0" allowfullscreen></iframe>
       

</div>
</div>

@endif


@if(isset($slider))


         <div class="row text_row4 bgcolor margin_top">
<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
 

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
                    

                
            @foreach ($slider->slides as $slide) 
             
            

                                @if ($loop->first)
                      <div class="active item">
                                        <a href="{{$slide->imglink}}" class="rss" title="Rss"><img class="img-responsive" src="{{Storage::url($slide->filename)}}"></a>
                                        <div class="carousel-caption">
                                        {{$slide->body}}
       
      </div></div>

                                   @else

                                   <div class="item">
                                      <a href="{{$slide->imglink}}" class="rss" title="Rss">   <img class="img-responsive" src="{{Storage::url($slide->filename)}}"></a>
                                        <div class="carousel-caption">
                                        {{$slide->body}}


      </div></div></div>
       @endif
                                        @endforeach

      <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
 </div>
</div>


                 
@endif

 
</div>



		</div>
	</div>

</div>
@endsection