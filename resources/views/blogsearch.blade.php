@extends('layouts.app')

@section('content')

<div class="row news">
<div class="pull-right">
  <input type="text" class="hidden-sm hidden-xs" id="header-search-field" placeholder="Search for an article..">
</div>
  <h1 align="center" class="gray"><b>Popular Articles</b></h1><hr>
   <div class="col-md-6 col-sm-6 main_blog">

   

         <div class="main_blog_content"  style="background: linear-gradient(rgba(0, 0, 0, 0.2), rgba(0, 0, 0, 0.2)), url({{Storage::url($featuredblog->photo->filename)}}); background-size: cover;">
               <h2><a href="blogdisplay.html">Title or topic</a></h2>
               <h4>caption(not more than 20 words)</h4>
         </div> 
   </div>


  <div class="col-md-6 col-sm-6 side_blog">
  

      <div class="row feature_blog_row">
      @foreach($subfeaturedblogs as $subfeaturedblog)
      @if($loop->remaining >= 2 )
        <div class="col-md-6 col-sm-6 feature_blog">
          <div class="feature_blog_content"  style="background: linear-gradient(rgba(0, 0, 0, 0.2), rgba(0, 0, 0, 0.2)), url({{Storage::url($subfeaturedblog->photo->filename)}});background-size: cover;">
              <h3><a href="blogdisplay.html">Title or topic</a></h3>
               <p>caption(not more than 20 words)</p>
          </div>
        </div>
       @endif
       @endforeach
      </div>
      



      <div class="row feature_blog_row2">
      @foreach($subfeaturedblogs as $subfeaturedblog)
      @if($loop->remaining < 2)
         <div class="col-md-6 col-sm-6 feature_blog">
         <div class="feature_blog_content"  style="background: linear-gradient(rgba(0, 0, 0, 0.2), rgba(0, 0, 0, 0.2)), url({{Storage::url($subfeaturedblog->photo->filename)}}); background-size: cover;">
           <h3><a href="blogdisplay.html">Title or topic</a></h3>
               <p>caption(not more than 20 words)</p>
        </div>       
        </div>
         @endif
         @endforeach
    </div>
   
    
      </div>
   </div>

<div class="row  most_recent_blogs">
   <div class="row blog_row">
  <div class="row  most_recent">


              <div class="container">             

                      <div class="col-md-12">
                            <div class="row">
                                           <h1 align="center" class="gray"><b>Latest Articles</b></h1><hr>
                            </div>
                            <div class="row">
                                    
                                     <div class="col-md-8 main_bar">

                                       @foreach($blogs as $blog)


                          <div class="row">
                               <div class="col-md-4 col_md_remove_padding">
                                  <a href=""><img src="{{Storage::url($blog->photo->filename)}}" class="img-responsive"></a>
                                     </div>
                                          <div class="col-md-8">
                                            <h2>{{$blog->title}}</h2>
                                              
                                            <p>{!! str_limit($blog->body, 20) !!}
                                            </p>
                                            <p>
                                              Posted By <a href="">{{$blog->user->first_name}}</a>{{ Carbon\Carbon::parse($blog->created_at)->format('d-m-Y') }}
                                            </p>
                                            <p>
                                              {{$blog->user->role}}
                                            </p>
                                          </div>



                                        </div><hr>
                                          @endforeach
                                        
                                            {{ $blogs->links() }}
                                        </div>
                                      <div class="col-md-4 sidebar" data-spy="affix1" data-offset-top="260" data-offset-bottom="200">

                                     <h4><b>RECENT NEWS</b></h4>

                                    <hr>

                                      <div class="media">
                                    <div class="media-left">
                                      <a href="#">
                                        <img class="media-object" src="images/deepg6.jpg" alt="...">
                                      </a>
                                    </div>
                                    <div class="media-body">
                                      <h4 class="media-heading">Media heading</h4>
                                      
                                    </div>
                                  </div>
                                  <hr>
                                    </div>
</div>
</div>
</div>
</div>
</div>




</div>




<script src="{{ asset('js/default.js') }}"></script>

<script>window.twttr = (function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0],
    t = window.twttr || {};
  if (d.getElementById(id)) return t;
  js = d.createElement(s);
  js.id = id;
  js.src = "https://platform.twitter.com/widgets.js";
  fjs.parentNode.insertBefore(js, fjs);
 
  t._e = [];
  t.ready = function(f) {
    t._e.push(f);
  };
 
  return t;
}(document, "script", "twitter-wjs"));</script>  


@endsection