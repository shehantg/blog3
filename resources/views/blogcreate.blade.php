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
        <div class="col-md-12">
           
               <h1>Create New Adventure</h1>

                <div>
                    <form novalidate="novalidate" class="form-horizontal" method="POST"  action="/blogs/create" enctype="multipart/form-data">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Title</label>

                            <div class="col-md-12">
                                <input id="title" type="text" class="form-control" name="title" value="{{ old('title') }}" required autofocus>

                                @if ($errors->has('title'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('title') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        

                       

                       
                        
                       
                        <div class="form-group{{ $errors->has('tags') ? ' has-error' : '' }}">
                            <label for="type" class="col-md-4 control-label">tags</label>

                            <div class="col-md-12">
                            <select class="form-control" id="type" name="tags[]" multiple value="{{ old('tags') }}" required>
                            @foreach($allTags as $tag)


                            <option>{{$tag}}</option>

                            @endforeach
                           
                          </select>

                               
                            </div>
                        </div>

                        






                        <div class="form-group{{ $errors->has('body') ? ' has-error' : '' }}">
                            <label for="body" class="col-md-4 control-label">Body 
                            </label>

                            <div class="col-md-12">
                                <textarea id="body" type="text" class="form-control" name="body" rows="20" required> {!! old('body') !!}</textarea>

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
                                <input id="photos" type="file" class="form-control" name="photo"  value="{{ old('photo') }}" required> 

                                @if ($errors->has('photo'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('photo') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                         

                         <div class="form-group{{ $errors->has('video') ? ' has-error' : '' }}">
                            <label for="video" class="col-md-4 control-label">video
                            </label>

                            <div class="col-md-12">
                                <input  type="text" class="form-control" name="video"  value="{{ old('video') }}" required> 

                                @if ($errors->has('video'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('video') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>



                         <div class="form-group{{ $errors->has('slider_name') ? ' has-error' : '' }}">
                            <label for="video" class="col-md-4 control-label">Slider Name
                            </label>

                            <div class="col-md-12">
                                <input  type="text" class="form-control" name="slider_name"  value="{{ old('slider_name') }}" required> 

                                @if ($errors->has('slider_name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('slider_name') }}</strong>
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

        

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

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



  