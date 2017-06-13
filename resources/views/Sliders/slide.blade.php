@extends('layouts.app')

@section('content')

<div class="container">
 <div class="row">
 <div class="col-md-12">



 <h1>Create New Slide</h1>

                <div>
                    <form novalidate="novalidate" class="form-horizontal" method="POST"  action="/slider/{{$sliderid}}/slides/create" enctype="multipart/form-data">
                        {{ csrf_field() }}

                       

                       

                        
                        
                       
                        






                        <div class="form-group{{ $errors->has('body') ? ' has-error' : '' }}">
                            <label for="body" class="col-md-4 control-label">Title 
                            </label>

                            <div class="col-md-12">
                                <input id="body" type="text" class="form-control" name="body" rows="20" required> 

                                @if ($errors->has('body'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('body') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group{{ $errors->has('photo') ? ' has-error' : '' }}">
                            <label for="photos" class="col-md-4 control-label">Image
                            </label>

                            <div class="col-md-12">
                                <input id="photo" type="file" class="form-control" name="photo" multiple value="{{ old('photo') }}" required> 

                                @if ($errors->has('photo'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('photo') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group{{ $errors->has('imglink') ? ' has-error' : '' }}">
                            <label for="imglink" class="col-md-4 control-label">Image Link 
                            </label>

                            <div class="col-md-12">
                                <input id="imglink" type="text" class="form-control" name="imglink" rows="20" required> 

                                @if ($errors->has('imglink'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('imglink') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                         

                         

                       









                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-2">
                                <button type="submit" class="btn btn-primary" id="createAdventureButton">
                                    Create
                                </button>

                                 
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>


 </div>







@foreach($slides as $slide)
<hr>
<div class="container">

<h3 class="text-center">SlideNo {{$loop->index}}</h3>
<div class="col-md-6 col-md-offset-3">
                    <form novalidate="novalidate" class="form-horizontal" method="POST"  action="/slide/{{$slide->id}}/edit" enctype="multipart/form-data">
                        {{ csrf_field() }}

                       

                       

                        
                        
                       
                        






                        <div class="form-group{{ $errors->has('body') ? ' has-error' : '' }}">
                            <label for="body" class="col-md-4 control-label">Title 
                            </label>

                            <div class="col-md-12">
                                <input id="body" type="text" class="form-control" name="body" rows="20" value="{{ $slide->body }}"required> 

                                @if ($errors->has('body'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('body') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="col-md-12">
                        <a class="thumbnail" ><img src="{{Storage::url($slide->filename)}}"></a>
                        </div>

                        <div class="form-group{{ $errors->has('photo') ? ' has-error' : '' }}">
                            <label for="photos" class="col-md-4 control-label">Image
                            </label>

                            <div class="col-md-12">
                                <input id="photo" type="file" class="form-control" name="photo" multiple value="{{$slide->filename }}" required> 

                                @if ($errors->has('photo'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('photo') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group{{ $errors->has('imglink') ? ' has-error' : '' }}">
                            <label for="imglink" class="col-md-4 control-label">Image Link 
                            </label>

                            <div class="col-md-12">
                                <input id="imglink" type="text" class="form-control" name="imglink" rows="20" value="{{$slide->imglink }}" required> 

                                @if ($errors->has('imglink'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('imglink') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                         

                         

                       









                        <div class="form-group">
                            <div class="col-md-4 col-md-offset-2">

                
                      
                        <button type="submit" class="btn btn-primary" id="createAdventureButton">
                                    EDIT
                                </button>


</div>




              
                        </div>
                    </form>


                    <div class="col-md-4 col-md-offset-2">                   
<form novalidate="novalidate" class="form-horizontal" method="POST"  action="/slide/{{$slide->id}}/delete" >
                        {{ csrf_field() }}

                        <button type="submit" class="btn btn-danger" id="createAdventureButton">DELETE</button>
</form>
                                 
                                  
                                

                                 
                            </div>
                    </div>
                    </div>

@endforeach




 

 @endsection

 <script src="{{ URL::to('/src/vendor/tinymce/js/tinymce/tinymce.min.js')}}"></script>

<script>
  var editor_config = {
    path_absolute : "/",
    selector: "textarea",
    plugins: [
      "advlist autolink lists link image charmap print preview hr anchor pagebreak",
      "searchreplace wordcount visualblocks visualchars code fullscreen",
      "insertdatetime media nonbreaking save table contextmenu directionality",
      "emoticons template paste textcolor colorpicker textpattern"
    ],
    toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image media",
    relative_urls: false,
    file_browser_callback : function(field_name, url, type, win) {
      var x = window.innerWidth || document.documentElement.clientWidth || document.getElementsByTagName('body')[0].clientWidth;
      var y = window.innerHeight|| document.documentElement.clientHeight|| document.getElementsByTagName('body')[0].clientHeight;

      var cmsURL = editor_config.path_absolute + 'laravel-filemanager?field_name=' + field_name;
      if (type == 'image') {
        cmsURL = cmsURL + "&type=Images";
      } else {
        cmsURL = cmsURL + "&type=Files";
      }

      tinyMCE.activeEditor.windowManager.open({
        file : cmsURL,
        title : 'Filemanager',
        width : x * 0.8,
        height : y * 0.8,
        resizable : "yes",
        close_previous : "no"
      });
    }
  };

  tinymce.init(editor_config);
</script>