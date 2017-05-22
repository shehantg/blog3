@extends('layouts.app')

@section('content')

<div class="container">
 <div class="row">
 <div class="col-sm-12 col-md-12 jumbotron" id="blog-header">

<p id="blogtitle" class="text-center">{!! $blog->title !!}</p>



<p id="blogintroduction">{!! $blog->introduction !!}</p>

</div>
</div>
</div>
<hr>

<div class="container-fluid">
    <div id="main_area">
        <!-- Slider -->
        <div class="row">
            <div class="col-sm-4" id="slider-thumbs">
                <!-- Bottom switcher of slider -->
                <ul class="hide-bullets">
                    
                    

						    
						@foreach ($images as $image) 
						 
						

						   <li>
						   <div class="col-sm-3">
                        <a class="thumbnail" id="carousel-selector-{{$loop->index}}"><img src="{{Storage::url($image->filename)}}"></a>
                        </div>
                    </li>

                    
                    	
						@endforeach

						



                    
                </ul>
            </div>





            <div class="col-sm-8">
                <div class="col-xs-12" id="slider">
                    <!-- Top part of the slider -->
                    <div class="row">
                        <div class="col-sm-12" id="carousel-bounding-box">
                            <div class="carousel slide" id="myCarousel">



                                <!-- Carousel items -->
                                <div class="carousel-inner">

                                		@if (count($images) === 0)

				                    <p></p>
										@elseif (count($images) === 1)


										 <p></p>
										@else

										    
										@foreach ($images as $image) 

                                @if ($loop->first)
							        <div class="active item" data-slide-number="0">
                                        <img src="{{Storage::url($image->filename)}}"></div>

                                   @else

                                   <div class="item" data-slide-number="{{$loop->iteration}}">
                                        <img src="{{Storage::url($image->filename)}}"></div>
							    @endif


							    
										 
                                    

                                    
	                                        
										@endforeach

										@endif

                                    
                                </div>
                                <!-- Carousel nav -->
                                <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                                    <span class="glyphicon glyphicon-chevron-left"></span>
                                </a>
                                <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                                    <span class="glyphicon glyphicon-chevron-right"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <!--/Slider-->
        </div>

    </div>
</div>

<div class="container">
 <div class="row">
 <div class="col-sm-12 col-md-12 jumbotron" id="blog-body">
 <p class="text-center" id="overview">Overview</p>
 
<h4 class="text-center">{!! $blog->body !!}</h4>

</div>
</div>
</div>





@if (isset($blog->video))


<div class="container">
 <div class="row">
 <div class="col-sm-12 col-md-12">
<h4>Video</h4>
<hr>


<div class="videp-page col-md-6 ">
            <iframe width="560" height="315" src="{{$blog->video}}" frameborder="0" allowfullscreen></iframe>
            </div>

</div>
</div>
</div>

@endif


<div class="container">
<hr>
 <div class="row">
 <div class="col-sm-12 col-md-12 " id="blog-body">





        
</div>
</div>
</div>


@if (Auth::id() == $blog->user_id)

   <a href=" {{ url('Paragraphs/'.$blog->id.'/create') }} "> <li> Add a Paragraph </li></a>


@endif


    
        
                       
                         
                        
                            <div class="container">
                                 <div class="row">
                                 <p class="text-center" id="overview">Paragraphs</p>
                                 @foreach ($paragraphs as $paragraph) 
                                 <div class="col-sm-12 col-md-12 jumbotron" >
                                 
                                  
                                <h4 class="text-center">{!! $paragraph->body !!}</h4>
                                 <h4 class="text-center">{!! $paragraph->title !!}</h4>

                                        @if (isset($paragraph->video))

                                    <div class="videp-page col-md-6 ">
            <iframe width="560" height="315" src="{{$paragraph->video}}" frameborder="0" allowfullscreen></iframe>
            </div>              


                                    @endif


                                         <div class="container">
                                                <hr>
                                                 <div class="row">
                                                 <div class="col-sm-12 col-md-12 ">


                                                        <div id="myCarousel-{{$loop->index}}" class="carousel slide" data-ride="carousel">

                                     @if(isset($paragraph->paragraphphotos))

                                    
  <!-- Indicators -->
                                                   <ol class="carousel-indicators">
   


                                     @foreach($paragraph->paragraphphotos as $photo)
                                        

                                         <li data-target="#myCarouselp" data-slide-to="{{$loop->index}}" class="active"></li>


    
                                           </ol>
                                           @endforeach



  <!-- Wrapper for slides -->
  <div class="carousel-inner">

  @foreach($paragraph->paragraphphotos as $photo)
   @if ($loop->first)
    <div class="item active">

    

      <img src="{{Storage::url($photo->filename)}}" alt="Los Angeles">

      
    </div>

    @else

    <div class="item">

    

      <img src="{{Storage::url($photo->filename)}}" alt="Los Angeles">

      
    </div>


@endif
   @endforeach

   @endif
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel-{{$loop->index}}" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel-{{$loop->index}}" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
</div>


                                                        
                                                </div>
                                                </div>
                                                </div>
                                     

                                            


                                       
                                          



                                           

          
                                
                    </div>
                                    @endforeach
                                </div>
                                </div>

                    
                        
                       





 
@endsection