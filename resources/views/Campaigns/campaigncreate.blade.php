@extends('layouts.app')
@section('css')
    <link rel="stylesheet" href="https://cdn.rawgit.com/Eonasdan/bootstrap-datetimepicker/e8bddc60e73c1ec2475f827be36e1957af72e2ea/build/css/bootstrap-datetimepicker.css">
@endsection
@section('content')



<div class="container">
    <div class="row">
        <div class="col-md-12">
           
               <h1>Create New Campaign</h1>

                <div>
                    <form novalidate="novalidate" class="form-horizontal" method="POST"  action="/campaigns/create" enctype="multipart/form-data">
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

                       <div class="form-group{{ $errors->has('date') ? ' has-error' : '' }}">
                            <label for="date-e" class="col-md-4 control-label">Date</label>

                            <div class="col-md-12">
                                <div class='input-group date'>
                    <input type='text' class="form-control"  name="date" id="datetimepicker1"/ required>
                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                    </span>
                    @if ($errors->has('date'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('date') }}</strong>
                                    </span>
                                @endif
                </div>

                                
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



                             <div class="form-group{{ $errors->has('type') ? ' has-error' : '' }}">
                            <label for="type" class="col-md-4 control-label">Program Scheme</label>

                            <div class="col-md-12">
                            <select class="form-control" id="type" name="type"  value="{{ old('program_scheme') }}" required>
                            


                           
    <option value="">-- select type of campaign --</option>
    <option value="urgent_causes">Website front page urgent causes</option>
    <option value="front_page">Front page wishlist</option>
      <option value="featured">featured</option>
      <option value="other">other</option>
   

                            
                           
                          </select>

                               
                            </div>
                        </div>
                     


                        <div class="form-group{{ $errors->has('venue') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Venue</label>

                            <div class="col-md-12">
                                <input id="venue-e" type="text" class="form-control" name="venue" value="{{ old('venue') }}" required autofocus>

                                @if ($errors->has('venue'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('venue') }}</strong>
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

                        <div class="form-group{{ $errors->has('fundraising_goal') ? ' has-error' : '' }}">
                            <label for="fundraising_goal-c" class="col-md-4 control-label">Fundraising Goal
                            </label>

                            <div class="col-md-12">
                                <input  type="text" class="form-control" name="fundraising_goal"  value="{{ old('fundraising_goal') }}" required> 

                                @if ($errors->has('fundraising_goal'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('fundraising_goal') }}</strong>
                                    </span>
                                @endif
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


                         



                         <div class="form-group{{ $errors->has('slider') ? ' has-error' : '' }}">
                            <label for="video" class="col-md-4 control-label">Slider Name
                            </label>\\

                            <div class="col-md-12">
                                <input  type="text" class="form-control" name="slider"  value="{{ old('slider') }}" required> 

                                @if ($errors->has('slider'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('slider') }}</strong>
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
</div>
@endsection


@section('scripts')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.12.0/moment-with-locales.min.js"></script>
    <script src="https://cdn.jsdelivr.net/bootstrap.datetimepicker/4.17.37/js/bootstrap-datetimepicker.min.js"></script>


<script src="{{ URL::to('/src/vendor/tinymce/js/tinymce/tinymce.min.js')}}"></script>
 <script type="text/javascript">
            $(function () {
                $('#datetimepicker1').datetimepicker();
            });
        </script>
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
@endsection
