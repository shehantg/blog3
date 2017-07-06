@extends('layouts.dashboard')

@section('content')

  <!-- Content Wrapper. Contains page content -->
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

     

<div class="row">

<div  class="container"> 

<div class="row lead container feature_pic"> 
 
  <div class="col-md-8 col_padding_o">
  @if (isset($image))
      
      <a href="#"  title="Rss"><img class="img-responsive col_padding_o" src="{{Storage::url($image->filename)}}"></a>
@endif
      <div class="lead">
     
    <p>     {!! $blog->body !!}</p>


@if(isset($blog->slider_name))


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


      </div></div>
       @endif
                                        @endforeach
</div>
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


@if (isset($blog->video))


<div class="row text_row4 bgcolor margin_top">
  <div class="col-md-12">





            <iframe width="560" height="315" src="{{$blog->video}}" frameborder="0" allowfullscreen></iframe>
       

</div>
</div>

@endif

@if (Auth::id() == $blog->user_id)

   <a href=" {{ url('Paragraphs/'.$blog->id.'/create') }} "> <li> Add a Paragraph </li></a>


@endif






         </div>




                                 <p class="text-center" id="overview">Paragraphs</p>
                                 @foreach ($paragraphs as $paragraph) 
                                 <div class="col-sm-12 col-md-12 jumbotron" >
                                 
                                  
                                <h4 class="text-center">{!! $paragraph->body !!}</h4>
                                 

                                        @if (isset($paragraph->video))

                                    <div class="videp-page col-md-6 ">
            <iframe width="560" height="315" src="{{$paragraph->video}}" frameborder="0" allowfullscreen></iframe>
            </div>              


                                    @endif

                                      @if(count($paragraph->paragraphphotos)>=2)
                                         <div class="container">
                                                
                                                 <div class="row">
                                                 <div class="col-sm-12 col-md-12 ">


                                                        <div id="myCarousel-{{$loop->index}}" class="carousel slide" data-ride="carousel">

                                    
                                    
  <!-- Indicators -->
                                                   



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
                                     
                                          @else
                                            @foreach($paragraph->paragraphphotos as $photo)

                                          <img src="{{Storage::url($photo->filename)}}" alt="Los Angeles">
                                             @endforeach
                                            @endif


                                       
                                          



                                           

          
                                
                    </div>
                                    @endforeach
                                </div>
                                </div>
                                
        





</div>
         </div>
        

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->


@endsection