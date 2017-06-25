@extends('layouts.app')

@section('content')
<div class="container">
    <div class="rows social_links_nav">
   
        <ul>
            <li><a href="">
<i class="fa fa-facebook" aria-hidden="true"></i></a></li>
            <li><a href=""><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
            <li><a href=""><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
            <li><a href=""><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
            <li><a href=""></a></li>
        </ul>
        
    </div>
</div>

<div class="container-fluid">
 <div class="row top-space silderColmn">






<div id="carousel-example-generic" class="carousel slide " data-ride="carousel">
  <!-- Indicators -->
 

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
                    

                
            @foreach ($homeslider->homeslides as $homeslide) 
             
            

                                @if ($loop->first)
                      <div class="active item">
                                        <img  src="{{Storage::url($homeslide->filename)}}" class="img-responsive">
                                        <div class="carousel-caption myCc">
                                      <h4>  {{$homeslide->tagline}}</h4>
                                      <h1>{{$homeslide->title}}</h1>
                                      <p>  {!! $homeslide->intro !!}</p>
                                      <a href="/homeslide/{{$homeslide->id}}/show" class="rss" title="Rss">	<button>Ream More</button></a>
       
      </div></div>

                                   @else

                                   <div class="item">
                                         <img  src="{{Storage::url($homeslide->filename)}}" class="img-responsive">        
                                         <div class="carousel-caption">
                                        <p>  {{$homeslide->tagline}}</p>
                                      <p>  {{$homeslide->title}}</p>
                                      <p>  {!! $homeslide->intro !!}}</p>
                                      <a href="/homeslide/{{$homeslide->id}}/show" class="rss" title="Rss">	<button>Ream More</button></a>

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
 </div>


 <div class="container">

<div class="row">
        <div class="row">
            <div class="col-md-9">
                <h3>
                    Carousel Product Cart Slider</h3>
            </div>
            <div class="col-md-3">
                <!-- Controls -->
                <div class="controls pull-right hidden-xs">
                    <a class="left fa fa-chevron-left btn btn-primary" href="#carousel-example"
                        data-slide="prev"></a><a class="right fa fa-chevron-right btn btn-primary" href="#carousel-example"
                            data-slide="next"></a>
                </div>
                <div id="#carousel-example-one-controls" class="controls pull-right carousel-example-one-controls hidden-sm hidden-md hidden-lg">
                    <a class="left fa fa-chevron-left btn btn-primary" href="#carousel-example-one"
                        data-slide="prev"></a><a class="right fa fa-chevron-right btn btn-primary" href="#carousel-example-one"
                            data-slide="next"></a>
                </div>

                <div id="#carousel-example-two-controls" class="controls pull-right carousel-example-two-controls hidden-sm hidden-md hidden-lg">
                    <a class="left fa fa-chevron-left btn btn-primary" href="#carousel-example-two"
                        data-slide="prev"></a><a class="right fa fa-chevron-right btn btn-primary" href="#carousel-example-two"
                            data-slide="next"></a>
                </div>

                
            </div>
        </div>
        <div id="carousel-example" class="carousel slide hidden-xs" data-ride="carousel">
            <!-- Wrapper for slides -->
            <div class="carousel-inner">
            @foreach($campaigns as $campaign)
            @if($loop->first)
                <div class="item active">
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="col-item">
                                <div class="photo">
                                    <img src="{{Storage::url($campaign->photo)}}" class="img-responsive" alt="a" />
                                </div>
                                <div class="info">
                                    <div class="row">
                                        <div class="price col-md-12">
                                            <h5>
                                                {{$campaign->title}}</h5>
                                            <h5 class="price-text-color">
                                               {{$campaign->fundraising_goal}}</h5>
                                        </div>
                                       
                                    </div>
                                    <div class="separator clear-left">
                                       <p>{{str_limit($campaign->body, 125)}}</p>
                                    </div>
                                    <div class="row text">
                                        <div class="read-more col-md-12">
                                           <button>Read more</button>
                                        </div>
                                       
                                    </div>

                                    <div class="clearfix">
                                    </div>
                                </div>
                            </div>



                        </div>


                        @elseif($loop->iteration ===2)

                        <div class="col-sm-4">
                            <div class="col-item">
                                <div class="photo">
                                    <img src="{{Storage::url($campaign->photo)}}" class="img-responsive" alt="a" />
                                </div>
                                <div class="info">
                                    <div class="row">
                                        <div class="price col-md-12">
                                            <h5>
                                                {{$campaign->title}}</h5>
                                            <h5 class="price-text-color">
                                               {{$campaign->fundraising_goal}}</h5>
                                        </div>
                                       
                                    </div>
                                    <div class="separator clear-left">
                                       <p>{{str_limit($campaign->body, 125)}}</p>
                                    </div>
                                    <div class="row text">
                                        <div class="read-more col-md-12">
                                           <button>Read more</button>
                                        </div>
                                       
                                    </div>

                                    <div class="clearfix">
                                    </div>
                                </div>
                            </div>



                        </div>

                        @elseif($loop->iteration === 3)

                        <div class="col-sm-4">
                            <div class="col-item">
                                <div class="photo">
                                    <img src="{{Storage::url($campaign->photo)}}" class="img-responsive" alt="a" />
                                </div>
                                <div class="info">
                                    <div class="row">
                                        <div class="price col-md-12">
                                            <h5>
                                                {{$campaign->title}}</h5>
                                            <h5 class="price-text-color">
                                               {{$campaign->fundraising_goal}}</h5>
                                        </div>
                                       
                                    </div>
                                    <div class="separator clear-left">
                                       <p>{{str_limit($campaign->body, 125)}}</p>
                                    </div>
                                    <div class="row text">
                                        <div class="read-more col-md-12">
                                           <button>Read more</button>
                                        </div>
                                       
                                    </div>

                                    <div class="clearfix">
                                    </div>
                                </div>
                            </div>



                        </div>
                        </div>
                        </div>

                        
                @elseif($loop->iteration === 4)
                <div class="item">

                    <div class="row">
                       <div class="col-sm-4">
                            <div class="col-item">
                                <div class="photo">
                                    <img src="{{Storage::url($campaign->photo)}}" class="img-responsive" alt="a" />
                                </div>
                                <div class="info">
                                    <div class="row">
                                        <div class="price col-md-12">
                                            <h5>
                                                {{$campaign->title}}</h5>
                                            <h5 class="price-text-color">
                                               {{$campaign->fundraising_goal}}</h5>
                                        </div>
                                       
                                    </div>
                                    <div class="separator clear-left">
                                       <p>{{str_limit($campaign->body, 125)}}</p>
                                    </div>
                                    <div class="row text">
                                        <div class="read-more col-md-12">
                                           <button>Read more</button>
                                        </div>
                                       
                                    </div>

                                    <div class="clearfix">
                                    </div>
                                </div>
                            </div>



                        </div>
                        @elseif($loop->iteration === 5)
                       <div class="col-sm-4">
                            <div class="col-item">
                                <div class="photo">
                                    <img src="{{Storage::url($campaign->photo)}}" class="img-responsive" alt="a" />
                                </div>
                                <div class="info">
                                    <div class="row">
                                        <div class="price col-md-12">
                                            <h5>
                                                {{$campaign->title}}</h5>
                                            <h5 class="price-text-color">
                                               {{$campaign->fundraising_goal}}</h5>
                                        </div>
                                       
                                    </div>
                                    <div class="separator clear-left">
                                       <p>{{str_limit($campaign->body, 125)}}</p>
                                    </div>
                                    <div class="row text">
                                        <div class="read-more col-md-12">
                                           <button>Read more</button>
                                        </div>
                                       
                                    </div>

                                    <div class="clearfix">
                                    </div>
                                </div>
                            </div>



                        </div>


                        @elseif($loop->iteration ===6)
                       <div class="col-sm-4">
                            <div class="col-item">
                                <div class="photo">
                                    <img src="{{Storage::url($campaign->photo)}}" class="img-responsive" alt="a" />
                                </div>
                                <div class="info">
                                    <div class="row">
                                        <div class="price col-md-12">
                                            <h5>
                                                {{$campaign->title}}</h5>
                                            <h5 class="price-text-color">
                                               {{$campaign->fundraising_goal}}</h5>
                                        </div>
                                       
                                    </div>
                                    <div class="separator clear-left">
                                       <p>{{str_limit($campaign->body, 125)}}</p>
                                    </div>
                                    <div class="row text">
                                        <div class="read-more col-md-12">
                                           <button>Read more</button>
                                        </div>
                                       
                                    </div>

                                    <div class="clearfix">
                                    </div>
                                </div>
                            </div>



                        </div>

</div>
</div>

                        @elseif($loop->iteration ===7)
                        <div class="item">

                    <div class="row">
                        <div class="col-sm-4">
                            <div class="col-item">
                                <div class="photo">
                                    <img src="{{Storage::url($campaign->photo)}}" class="img-responsive" alt="a" />
                                </div>
                                <div class="info">
                                    <div class="row">
                                        <div class="price col-md-12">
                                            <h5>
                                                {{$campaign->title}}</h5>
                                            <h5 class="price-text-color">
                                               {{$campaign->fundraising_goal}}</h5>
                                        </div>
                                       
                                    </div>
                                    <div class="separator clear-left">
                                       <p>{{str_limit($campaign->body, 125)}}</p>
                                    </div>
                                    <div class="row text">
                                        <div class="read-more col-md-12">
                                           <button>Read more</button>
                                        </div>
                                       
                                    </div>

                                    <div class="clearfix">
                                    </div>
                                </div>
                            </div>



                        </div>
                        @elseif($loop->iteration === 8)
                       <div class="col-sm-4">
                            <div class="col-item">
                                <div class="photo">
                                    <img src="{{Storage::url($campaign->photo)}}" class="img-responsive" alt="a" />
                                </div>
                                <div class="info">
                                    <div class="row">
                                        <div class="price col-md-12">
                                            <h5>
                                                {{$campaign->title}}</h5>
                                            <h5 class="price-text-color">
                                               {{$campaign->fundraising_goal}}</h5>
                                        </div>
                                       
                                    </div>
                                    <div class="separator clear-left">
                                       <p>{{str_limit($campaign->body, 125)}}</p>
                                    </div>
                                    <div class="row text">
                                        <div class="read-more col-md-12">
                                           <button>Read more</button>
                                        </div>
                                       
                                    </div>

                                    <div class="clearfix">
                                    </div>
                                </div>
                            </div>



                        </div>
                        @elseif($loop->iteration === 9)
                      <div class="col-sm-4">
                            <div class="col-item">
                                <div class="photo">
                                    <img src="{{Storage::url($campaign->photo)}}" class="img-responsive" alt="a" />
                                </div>
                                <div class="info">
                                    <div class="row">
                                        <div class="price col-md-12">
                                            <h5>
                                                {{$campaign->title}}</h5>
                                            <h5 class="price-text-color">
                                               {{$campaign->fundraising_goal}}</h5>
                                        </div>
                                       
                                    </div>
                                    <div class="separator clear-left">
                                       <p>{{str_limit($campaign->body, 125)}}</p>
                                    </div>
                                    <div class="row text">
                                        <div class="read-more col-md-12">
                                           <button>Read more</button>
                                        </div>
                                       
                                    </div>

                                    <div class="clearfix">
                                    </div>
                                </div>
                            </div>



                        </div>
                        </div>
                        </div>
                        @elseif($loop->iteration === 10)

                         <div class="item">

                    <div class="row">
                      <div class="col-sm-4">
                            <div class="col-item">
                                <div class="photo">
                                    <img src="{{Storage::url($campaign->photo)}}" class="img-responsive" alt="a" />
                                </div>
                                <div class="info">
                                    <div class="row">
                                        <div class="price col-md-12">
                                            <h5>
                                                {{$campaign->title}}</h5>
                                            <h5 class="price-text-color">
                                               {{$campaign->fundraising_goal}}</h5>
                                        </div>
                                       
                                    </div>
                                    <div class="separator clear-left">
                                       <p>{{str_limit($campaign->body, 125)}}</p>
                                    </div>
                                    <div class="row text">
                                        <div class="read-more col-md-12">
                                           <button>Read more</button>
                                        </div>
                                       
                                    </div>

                                    <div class="clearfix">
                                    </div>
                                </div>
                            </div>



                        </div>
                        @elseif($loop->iteration === 11)
                     <div class="col-sm-4">
                            <div class="col-item">
                                <div class="photo">
                                    <img src="{{Storage::url($campaign->photo)}}" class="img-responsive" alt="a" />
                                </div>
                                <div class="info">
                                    <div class="row">
                                        <div class="price col-md-12">
                                            <h5>
                                                {{$campaign->title}}</h5>
                                            <h5 class="price-text-color">
                                               {{$campaign->fundraising_goal}}</h5>
                                        </div>
                                       
                                    </div>
                                    <div class="separator clear-left">
                                       <p>{{str_limit($campaign->body, 125)}}</p>
                                    </div>
                                    <div class="row text">
                                        <div class="read-more col-md-12">
                                           <button>Read more</button>
                                        </div>
                                       
                                    </div>

                                    <div class="clearfix">
                                    </div>
                                </div>
                            </div>



                        </div>
                        @elseif($loop->iteration === 12)
                      <div class="col-sm-4">
                            <div class="col-item">
                                <div class="photo">
                                    <img src="{{Storage::url($campaign->photo)}}" class="img-responsive" alt="a" />
                                </div>
                                <div class="info">
                                    <div class="row">
                                        <div class="price col-md-12">
                                            <h5>
                                                {{$campaign->title}}</h5>
                                            <h5 class="price-text-color">
                                               {{$campaign->fundraising_goal}}</h5>
                                        </div>
                                       
                                    </div>
                                    <div class="separator clear-left">
                                       <p>{{str_limit($campaign->body, 125)}}</p>
                                    </div>
                                    <div class="row text">
                                        <div class="read-more col-md-12">
                                           <button>Read more</button>
                                        </div>
                                       
                                    </div>

                                    <div class="clearfix">
                                    </div>
                                </div>
                            </div>



                        </div>
                        </div>
                        </div>
                        @elseif($loop->iteration === 13)

                         <div class="item">

                    <div class="row">
                    <div class="col-sm-4">
                            <div class="col-item">
                                <div class="photo">
                                    <img src="{{Storage::url($campaign->photo)}}" class="img-responsive" alt="a" />
                                </div>
                                <div class="info">
                                    <div class="row">
                                        <div class="price col-md-12">
                                            <h5>
                                                {{$campaign->title}}</h5>
                                            <h5 class="price-text-color">
                                               {{$campaign->fundraising_goal}}</h5>
                                        </div>
                                       
                                    </div>
                                    <div class="separator clear-left">
                                       <p>{{str_limit($campaign->body, 125)}}</p>
                                    </div>
                                    <div class="row text">
                                        <div class="read-more col-md-12">
                                           <button>Read more</button>
                                        </div>
                                       
                                    </div>

                                    <div class="clearfix">
                                    </div>
                                </div>
                            </div>



                        </div>
                        @elseif($loop->iteration === 14)
                        <div class="col-sm-4">
                            <div class="col-item">
                                <div class="photo">
                                    <img src="{{Storage::url($campaign->photo)}}" class="img-responsive" alt="a" />
                                </div>
                                <div class="info">
                                    <div class="row">
                                        <div class="price col-md-12">
                                            <h5>
                                                {{$campaign->title}}</h5>
                                            <h5 class="price-text-color">
                                               {{$campaign->fundraising_goal}}</h5>
                                        </div>
                                       
                                    </div>
                                    <div class="separator clear-left">
                                       <p>{{str_limit($campaign->body, 125)}}</p>
                                    </div>
                                    <div class="row text">
                                        <div class="read-more col-md-12">
                                           <button>Read more</button>
                                        </div>
                                       
                                    </div>

                                    <div class="clearfix">
                                    </div>
                                </div>
                            </div>



                        </div>
                        @elseif($loop->iteration === 15)
                 <div class="col-sm-4">
                            <div class="col-item">
                                <div class="photo">
                                    <img src="{{Storage::url($campaign->photo)}}" class="img-responsive" alt="a" />
                                </div>
                                <div class="info">
                                    <div class="row">
                                        <div class="price col-md-12">
                                            <h5>
                                                {{$campaign->title}}</h5>
                                            <h5 class="price-text-color">
                                               {{$campaign->fundraising_goal}}</h5>
                                        </div>
                                       
                                    </div>
                                    <div class="separator clear-left">
                                       <p>{{str_limit($campaign->body, 125)}}</p>
                                    </div>
                                    <div class="row text">
                                        <div class="read-more col-md-12">
                                           <button>Read more</button>
                                        </div>
                                       
                                    </div>

                                    <div class="clearfix">
                                    </div>
                                </div>
                            </div>



                        </div>
                        </div>
                        </div>
                        @endif
                       @endforeach

                       </div>
                       </div>

                       </div>
                       </div>



            <div id="carousel-example-one" class="carousel slide hidden-sm hidden-md hidden-lg" data-ride="carousel">
            <!-- Wrapper for slides -->
            <div class="carousel-inner">
            @foreach($campaigns as $campaign)
            @if($loop->first)
                <div class="item active">
                    <div class="row">
                        <div class="col-xs-6">
                            <div class="col-item">
                                <div class="photo">
                                    <img src="{{Storage::url($campaign->photo)}}" class="img-responsive" alt="a" />
                                </div>
                                <div class="info">
                                    <div class="row">
                                        <div class="price col-xs-12">
                                            <h5>
                                                {{$campaign->title}}</h5>
                                            <h5 class="price-text-color">
                                               {{$campaign->fundraising_goal}}</h5>
                                        </div>
                                       
                                    </div>
                                    <div class="separator clear-left">
                                       <p>{{str_limit($campaign->body, 125)}}</p>
                                    </div>
                                    <div class="row text">
                                        <div class="read-more col-xs-12">
                                           <button>Read more</button>
                                        </div>
                                       
                                    </div>

                                    <div class="clearfix">
                                    </div>
                                </div>
                            </div>



                        </div>


                        @elseif($loop->iteration ===2)

                         <div class="col-xs-6">
                            <div class="col-item">
                                <div class="photo">
                                    <img src="{{Storage::url($campaign->photo)}}" class="img-responsive" alt="a" />
                                </div>
                                <div class="info">
                                    <div class="row">
                                        <div class="price col-xs-12">
                                            <h5>
                                                {{$campaign->title}}</h5>
                                            <h5 class="price-text-color">
                                               {{$campaign->fundraising_goal}}</h5>
                                        </div>
                                       
                                    </div>
                                    <div class="separator clear-left">
                                       <p>{{str_limit($campaign->body, 125)}}</p>
                                    </div>
                                    <div class="row text">
                                        <div class="read-more col-xs-12">
                                           <button>Read more</button>
                                        </div>
                                       
                                    </div>

                                    <div class="clearfix">
                                    </div>
                                </div>
                            </div>



                        </div>

                        </div>
                        </div>


                        @elseif($loop->iteration === 3)
                        <div class="item">

                    <div class="row">
                    <div class="col-xs-6">
                            <div class="col-item">
                                <div class="photo">
                                    <img src="{{Storage::url($campaign->photo)}}" class="img-responsive" alt="a" />
                                </div>
                                <div class="info">
                                    <div class="row">
                                        <div class="price col-xs-12">
                                            <h5>
                                                {{$campaign->title}}</h5>
                                            <h5 class="price-text-color">
                                               {{$campaign->fundraising_goal}}</h5>
                                        </div>
                                       
                                    </div>
                                    <div class="separator clear-left">
                                       <p>{{str_limit($campaign->body, 125)}}</p>
                                    </div>
                                    <div class="row text">
                                        <div class="read-more col-xs-12">
                                           <button>Read more</button>
                                        </div>
                                       
                                    </div>

                                    <div class="clearfix">
                                    </div>
                                </div>
                            </div>



                        </div>
                        @elseif($loop->iteration === 4)


                          <div class="col-xs-6">
                            <div class="col-item">
                                <div class="photo">
                                    <img src="{{Storage::url($campaign->photo)}}" class="img-responsive" alt="a" />
                                </div>
                                <div class="info">
                                    <div class="row">
                                        <div class="price col-xs-12">
                                            <h5>
                                                {{$campaign->title}}</h5>
                                            <h5 class="price-text-color">
                                               {{$campaign->fundraising_goal}}</h5>
                                        </div>
                                       
                                    </div>
                                    <div class="separator clear-left">
                                       <p>{{str_limit($campaign->body, 125)}}</p>
                                    </div>
                                    <div class="row text">
                                        <div class="read-more col-xs-12">
                                           <button>Read more</button>
                                        </div>
                                       
                                    </div>

                                    <div class="clearfix">
                                    </div>
                                </div>
                            </div>



                        </div>

                        </div>
                        </div>
                        @elseif($loop->iteration === 5)
                        <div class="item">

                    <div class="row">
                    <div class="col-xs-6">
                            <div class="col-item">
                                <div class="photo">
                                    <img src="{{Storage::url($campaign->photo)}}" class="img-responsive" alt="a" />
                                </div>
                                <div class="info">
                                    <div class="row">
                                        <div class="price col-xs-12">
                                            <h5>
                                                {{$campaign->title}}</h5>
                                            <h5 class="price-text-color">
                                               {{$campaign->fundraising_goal}}</h5>
                                        </div>
                                       
                                    </div>
                                    <div class="separator clear-left">
                                       <p>{{str_limit($campaign->body, 125)}}</p>
                                    </div>
                                    <div class="row text">
                                        <div class="read-more col-xs-12">
                                           <button>Read more</button>
                                        </div>
                                       
                                    </div>

                                    <div class="clearfix">
                                    </div>
                                </div>
                            </div>



                        </div>
                        @elseif($loop->iteration === 6)


                          <div class="col-xs-6">
                            <div class="col-item">
                                <div class="photo">
                                    <img src="{{Storage::url($campaign->photo)}}" class="img-responsive" alt="a" />
                                </div>
                                <div class="info">
                                    <div class="row">
                                        <div class="price col-xs-12">
                                            <h5>
                                                {{$campaign->title}}</h5>
                                            <h5 class="price-text-color">
                                               {{$campaign->fundraising_goal}}</h5>
                                        </div>
                                       
                                    </div>
                                    <div class="separator clear-left">
                                       <p>{{str_limit($campaign->body, 125)}}</p>
                                    </div>
                                    <div class="row text">
                                        <div class="read-more col-xs-12">
                                           <button>Read more</button>
                                        </div>
                                       
                                    </div>

                                    <div class="clearfix">
                                    </div>
                                </div>
                            </div>



                        </div>

                        </div>
                        </div>
                        @elseif($loop->iteration === 7)
                        <div class="item">

                    <div class="row">
                    <div class="col-xs-6">
                            <div class="col-item">
                                <div class="photo">
                                    <img src="{{Storage::url($campaign->photo)}}" class="img-responsive" alt="a" />
                                </div>
                                <div class="info">
                                    <div class="row">
                                        <div class="price col-xs-12">
                                            <h5>
                                                {{$campaign->title}}</h5>
                                            <h5 class="price-text-color">
                                               {{$campaign->fundraising_goal}}</h5>
                                        </div>
                                       
                                    </div>
                                    <div class="separator clear-left">
                                       <p>{{str_limit($campaign->body, 125)}}</p>
                                    </div>
                                    <div class="row text">
                                        <div class="read-more col-xs-12">
                                           <button>Read more</button>
                                        </div>
                                       
                                    </div>

                                    <div class="clearfix">
                                    </div>
                                </div>
                            </div>



                        </div>
                        @elseif($loop->iteration === 8)


                          <div class="col-xs-6">
                            <div class="col-item">
                                <div class="photo">
                                    <img src="{{Storage::url($campaign->photo)}}" class="img-responsive" alt="a" />
                                </div>
                                <div class="info">
                                    <div class="row">
                                        <div class="price col-xs-12">
                                            <h5>
                                                {{$campaign->title}}</h5>
                                            <h5 class="price-text-color">
                                               {{$campaign->fundraising_goal}}</h5>
                                        </div>
                                       
                                    </div>
                                    <div class="separator clear-left">
                                       <p>{{str_limit($campaign->body, 125)}}</p>
                                    </div>
                                    <div class="row text">
                                        <div class="read-more col-xs-12">
                                           <button>Read more</button>
                                        </div>
                                       
                                    </div>

                                    <div class="clearfix">
                                    </div>
                                </div>
                            </div>



                        </div>

                        </div>
                        </div>
                        @elseif($loop->iteration === 9)
                        <div class="item">

                    <div class="row">
                    <div class="col-xs-6">
                            <div class="col-item">
                                <div class="photo">
                                    <img src="{{Storage::url($campaign->photo)}}" class="img-responsive" alt="a" />
                                </div>
                                <div class="info">
                                    <div class="row">
                                        <div class="price col-xs-12">
                                            <h5>
                                                {{$campaign->title}}</h5>
                                            <h5 class="price-text-color">
                                               {{$campaign->fundraising_goal}}</h5>
                                        </div>
                                       
                                    </div>
                                    <div class="separator clear-left">
                                       <p>{{str_limit($campaign->body, 125)}}</p>
                                    </div>
                                    <div class="row text">
                                        <div class="read-more col-xs-12">
                                           <button>Read more</button>
                                        </div>
                                       
                                    </div>

                                    <div class="clearfix">
                                    </div>
                                </div>
                            </div>



                        </div>
                        @elseif($loop->iteration === 10)


                          <div class="col-xs-6">
                            <div class="col-item">
                                <div class="photo">
                                    <img src="{{Storage::url($campaign->photo)}}" class="img-responsive" alt="a" />
                                </div>
                                <div class="info">
                                    <div class="row">
                                        <div class="price col-xs-12">
                                            <h5>
                                                {{$campaign->title}}</h5>
                                            <h5 class="price-text-color">
                                               {{$campaign->fundraising_goal}}</h5>
                                        </div>
                                       
                                    </div>
                                    <div class="separator clear-left">
                                       <p>{{str_limit($campaign->body, 125)}}</p>
                                    </div>
                                    <div class="row text">
                                        <div class="read-more col-xs-12">
                                           <button>Read more</button>
                                        </div>
                                       
                                    </div>

                                    <div class="clearfix">
                                    </div>
                                </div>
                            </div>



                        </div>

                        </div>
                        </div>

                        @elseif($loop->iteration === 11)
                        <div class="item">

                    <div class="row">
                    <div class="col-xs-6">
                            <div class="col-item">
                                <div class="photo">
                                    <img src="{{Storage::url($campaign->photo)}}" class="img-responsive" alt="a" />
                                </div>
                                <div class="info">
                                    <div class="row">
                                        <div class="price col-xs-12">
                                            <h5>
                                                {{$campaign->title}}</h5>
                                            <h5 class="price-text-color">
                                               {{$campaign->fundraising_goal}}</h5>
                                        </div>
                                       
                                    </div>
                                    <div class="separator clear-left">
                                       <p>{{str_limit($campaign->body, 125)}}</p>
                                    </div>
                                    <div class="row text">
                                        <div class="read-more col-xs-12">
                                           <button>Read more</button>
                                        </div>
                                       
                                    </div>

                                    <div class="clearfix">
                                    </div>
                                </div>
                            </div>



                        </div>
                        @elseif($loop->iteration === 12)


                          <div class="col-xs-6">
                            <div class="col-item">
                                <div class="photo">
                                    <img src="{{Storage::url($campaign->photo)}}" class="img-responsive" alt="a" />
                                </div>
                                <div class="info">
                                    <div class="row">
                                        <div class="price col-xs-12">
                                            <h5>
                                                {{$campaign->title}}</h5>
                                            <h5 class="price-text-color">
                                               {{$campaign->fundraising_goal}}</h5>
                                        </div>
                                       
                                    </div>
                                    <div class="separator clear-left">
                                       <p>{{str_limit($campaign->body, 125)}}</p>
                                    </div>
                                    <div class="row text">
                                        <div class="read-more col-xs-12">
                                           <button>Read more</button>
                                        </div>
                                       
                                    </div>

                                    <div class="clearfix">
                                    </div>
                                </div>
                            </div>



                        </div>

                        </div>
                        </div>
                        @elseif($loop->iteration === 13)
                        <div class="item">

                    <div class="row">
                    <div class="col-xs-6">
                            <div class="col-item">
                                <div class="photo">
                                    <img src="{{Storage::url($campaign->photo)}}" class="img-responsive" alt="a" />
                                </div>
                                <div class="info">
                                    <div class="row">
                                        <div class="price col-xs-12">
                                            <h5>
                                                {{$campaign->title}}</h5>
                                            <h5 class="price-text-color">
                                               {{$campaign->fundraising_goal}}</h5>
                                        </div>
                                       
                                    </div>
                                    <div class="separator clear-left">
                                       <p>{{str_limit($campaign->body, 125)}}</p>
                                    </div>
                                    <div class="row text">
                                        <div class="read-more col-xs-12">
                                           <button>Read more</button>
                                        </div>
                                       
                                    </div>

                                    <div class="clearfix">
                                    </div>
                                </div>
                            </div>



                        </div>
                        @elseif($loop->iteration === 14)


                          <div class="col-xs-6">
                            <div class="col-item">
                                <div class="photo">
                                    <img src="{{Storage::url($campaign->photo)}}" class="img-responsive" alt="a" />
                                </div>
                                <div class="info">
                                    <div class="row">
                                        <div class="price col-xs-12">
                                            <h5>
                                                {{$campaign->title}}</h5>
                                            <h5 class="price-text-color">
                                               {{$campaign->fundraising_goal}}</h5>
                                        </div>
                                       
                                    </div>
                                    <div class="separator clear-left">
                                       <p>{{str_limit($campaign->body, 125)}}</p>
                                    </div>
                                    <div class="row text">
                                        <div class="read-more col-xs-12">
                                           <button>Read more</button>
                                        </div>
                                       
                                    </div>

                                    <div class="clearfix">
                                    </div>
                                </div>
                            </div>



                        </div>

                        </div>
                        </div>
                        @else($loop->iteration === 15)
                        <div class="item">

                    <div class="row">
                    <div class="col-xs-6">
                            <div class="col-item">
                                <div class="photo">
                                    <img src="{{Storage::url($campaign->photo)}}" class="img-responsive" alt="a" />
                                </div>
                                <div class="info">
                                    <div class="row">
                                        <div class="price col-xs-12">
                                            <h5>
                                                {{$campaign->title}}</h5>
                                            <h5 class="price-text-color">
                                               {{$campaign->fundraising_goal}}</h5>
                                        </div>
                                       
                                    </div>
                                    <div class="separator clear-left">
                                       <p>{{str_limit($campaign->body, 125)}}</p>
                                    </div>
                                    <div class="row text">
                                        <div class="read-more col-xs-12">
                                           <button>Read more</button>
                                        </div>
                                       
                                    </div>

                                    <div class="clearfix">
                                    </div>
                                </div>
                            </div>



                        </div>
                        </div>
                        </div>
                        @endif
                        @endforeach

                          

                        </div>
                        </div>


                        <div id="carousel-example-two" class="carousel slide hidden-sm hidden-md hidden-lg" data-ride="carousel">
            <!-- Wrapper for slides -->
            <div class="carousel-inner">
            @foreach($campaigns as $campaign)
            @if($loop->first)
                <div class="item active">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="col-item">
                                <div class="photo">
                                    <img src="{{Storage::url($campaign->photo)}}" class="img-responsive" alt="a" />
                                </div>
                                <div class="info">
                                    <div class="row">
                                        <div class="price col-xs-12">
                                            <h5>
                                                {{$campaign->title}}</h5>
                                            <h5 class="price-text-color">
                                               {{$campaign->fundraising_goal}}</h5>
                                        </div>
                                       
                                    </div>
                                    <div class="separator clear-left">
                                       <p>{{str_limit($campaign->body, 125)}}</p>
                                    </div>
                                    <div class="row text">
                                        <div class="read-more col-xs-12">
                                           <button>Read more</button>
                                        </div>
                                       
                                    </div>

                                    <div class="clearfix">
                                    </div>
                                </div>
                            </div>



                        </div>
                        </div>
                        </div>


                        @else
                        <div class="item">
                    <div class="row">
                         <div class="col-xs-12">
                            <div class="col-item">
                                <div class="photo">
                                    <img src="{{Storage::url($campaign->photo)}}" class="img-responsive" alt="a" />
                                </div>
                                <div class="info">
                                    <div class="row">
                                        <div class="price col-xs-12">
                                            <h5>
                                                {{$campaign->title}}</h5>
                                            <h5 class="price-text-color">
                                               {{$campaign->fundraising_goal}}</h5>
                                        </div>
                                       
                                    </div>
                                    <div class="separator clear-left">
                                       <p>{{str_limit($campaign->body, 125)}}</p>
                                    </div>
                                    <div class="row text">
                                        <div class="read-more col-xs-12">
                                           <button>Read more</button>
                                        </div>
                                       
                                    </div>

                                    <div class="clearfix">
                                    </div>
                                </div>
                            </div>



                        </div>

                        </div>
                        </div>

                        @endif
                        @endforeach

                    </div>
                </div>



<div class="container">
  

  <div class="row">
    
    <div class="col-md-12">
      
      <div class="featured-campaign"  style="background: linear-gradient(rgba(0, 0, 0, 0.2), rgba(0, 0, 0, 0.2)), url({{Storage::url($featuredcampaign->photo)}}); background-size: cover;">
               <h2>{{$featuredcampaign->title}}</h2>
               <h4>{!! str_limit($featuredcampaign->body,200) !!}</h4>
                <h4>{{$featuredcampaign->fundraising_goal}} </h4>
                <a href="/campaigns/{{$featuredcampaign->id}}/display"><button>Read More</button></a>
         </div> 
    </div>
  </div>
</div>

<div class="container">
 <div class="row">
    
    <div class="col-md-12">

    <section class="customer-logos slider">
    @foreach($campaignsurgents as $campaignurgent)

  <div class="slide" ><img class="imgg" src="{{Storage::url($campaignurgent->photo)}}">

<p class="campaignurgentp">{{$campaignurgent->title}}</p>
</div>

  @endforeach
</section>

    </div>
    </div>
  

</div>



<div class="container">
 <div class="row">
    
    <div class="col-md-12">

    <section class="events slider">
    
    @foreach($events as $event)

  <div class="slide" ><img src="{{Storage::url($event->photo)}}">
<p><p>{{$event->title}}</p></p>
<p>{{$event->date}}</p>
<p>{{$event->venue}}</p>
<p>{!! str_limit($event->body,125) !!}</p>

<a href="/events/{{$event->id}}"><button>Read More </button></a>
</div>

  @endforeach
</section>


    </div>
    </div>



<div class="row">
    <div class="col-md-12 text-center" >
        <i class="fa fa-chevron-left" aria-hidden="true"></i>

  

   
       <i class="fa fa-chevron-right" aria-hidden="true"></i>

    </div>
</div>

  

</div>

<div class="container">
 <div class="row">

 <div class="col-md-12">






  
<div id="carousel-example-testimonials" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
 

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
                    

                
            @foreach ($testimonials as $testimonial) 
             
            

                                @if ($loop->first)
                      <div class="active item">
                                        <img class="img-responsive" src="{{Storage::url('public/testimonials/CVqlomUsneuu7oZesQk0PdqmcOoUpoxWwC2N1DEj.jpeg')}}">
                                        <div class="carousel-caption">
                                    <img class="img-responsive" src="{{Storage::url($testimonial->photo)}}">
                                      <p>  {{$testimonial->name}}</p>
                                      <p>  {!! $testimonial->body !!}</p>
                                      
      </div></div>

                                   @else

                                   <div class="item">
                                          <img class="img-responsive" src="{{Storage::url('public/testimonials/CVqlomUsneuu7oZesQk0PdqmcOoUpoxWwC2N1DEj.jpeg')}}">
                                        <div class="carousel-caption">
                                    <img class="img-responsive" src="{{Storage::url($testimonial->photo)}}">
                                      <p>  {{$testimonial->name}}</p>
                                      <p>  {!! $testimonial->body !!}</p>
                                      
      </div></div>
       @endif
                                        @endforeach

                                        </div>

      <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-testimonials" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-testimonials" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
 </div>



                 


 </div>
 </div>
 </div>


 <div class="container">
     
     <div class="row">
                      @foreach($blogs as $blog)

             <div class="col-md-4">
                 
                 <img src="{{Storage::url($blog->photo->filename)}}" class="img-responsive">
                 <p>{{$blog->created_at}}</p>
                  <p>{{$blog->title}}</p>
                  <p>{{$blog->user->first_name}} {{$blog->user->last_name}}</p>
                  <p>{!! str_limit($blog->body,125) !!}</p>

                  <button>Read more</button>
             </div>

             @endforeach
        
     </div>
 </div>

  <div class="container">
     
     <div class="row">
                      @foreach($sponsors as $sponsor)

             <div class="col-md-3">
                 
                 <img src="{{Storage::url($sponsor->photo)}}" class="img-responsive">
                 
             </div>

             @endforeach
        
     </div>
 </div>





   
 @endsection

 @section('scripts')
<script type="text/javascript">
  $(document).ready(function(){
    $('.customer-logos').slick({
      slidesToShow: 5,
      slidesToScroll: 1,
      autoplay: true,
      autoplaySpeed: 4000,
      arrows: false,
      dots: false,
        pauseOnHover: true,
        responsive: [{
        breakpoint: 1200,
        settings: {
          slidesToShow: 5
        }
      },{
        breakpoint: 992,
        settings: {
          slidesToShow: 4
        }
      },{
        breakpoint: 768,
        settings: {
          slidesToShow: 3
        }
      }, {
        breakpoint: 620,
        settings: {
          slidesToShow: 2
        }
      },{
        breakpoint: 480,
        settings: {
          slidesToShow: 1
        }
      }]
    });
  });
</script>


<script type="text/javascript">
  $(document).ready(function(){
    $('.events').slick({
      slidesToShow: 2,
      slidesToScroll: 1,
      autoplay: false,
      autoplaySpeed: 4000,
      arrows: false,
      dots: false,
        pauseOnHover: true,
        responsive: [{
        breakpoint: 620,
        settings: {
          slidesToShow: 2
        }
      },{
        breakpoint: 480,
        settings: {
          slidesToShow: 1
        }
      }]
    });
  });
</script>

<script type="text/javascript">
    
  $(document).ready(function(){

    $('.fa-chevron-left').on('click', function(){
  
  $('.events').slick('slickPrev');
});

$('.fa-chevron-right').on('click', function(){
  
  $('.events').slick('slickNext');

});

});
</script>





 @endsection