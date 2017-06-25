@extends('layouts.app')

@section('content')


<div class="container">
    <div class="row">
        <div class="col-md-12">
           
               <h1>Create New Slide</h1>

                <div>
                    <form novalidate="novalidate" class="form-horizontal" method="POST"  action="/homeslide/{{$homeslider->id}}/create" enctype="multipart/form-data">
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

                        

                       

                       
                        
                       
                        <div class="form-group{{ $errors->has('program_scheme') ? ' has-error' : '' }}">
                            <label for="type" class="col-md-4 control-label">Program Scheme</label>

                            <div class="col-md-12">
                            <select class="form-control" id="type" name="program_scheme"  value="{{ old('program_scheme') }}" required>
                            


                           
    <option value="">-- select program --</option>
    <option value="deep_griha_academy">Deep Griha Academy</option>
    <option value="child_care">Child Care</option>
    <option value="other_educational_programs">Other Educational Programs</option>
    <option value="medical_care">Medical Care</option>
    <option value="hiv_aids">HIV/AIDS</option>
    <option value="social_economic_status_of_women">Social &amp; Economic Status of Women</option>
    <option value="city_of_child">City of Child</option>
    <option value="sponsor_a_child">Sponsor a Child</option>
    <option value="area_of_greatest_need">Area of Greatest Need</option>
    <option value="other_sponsorship_support">Other Sponsorship Support</option>
    <option value="neela_s_retirement">Neela's Retirement</option>



                            
                           
                          </select>

                               
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('intro') ? ' has-error' : '' }}">
                            <label for="intro" class="col-md-4 control-label">Introduction
                            </label>

                            <div class="col-md-12">
                                <textarea id="body" type="text" class="form-control" name="intro" rows="3" required> {!! old('intro') !!}</textarea>

                                @if ($errors->has('introintro'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('intro') }}</strong>
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


                        <div class="form-group{{ $errors->has('filename') ? ' has-error' : '' }}">
                            <label for="photos" class="col-md-4 control-label">Image
                            </label>

                            <div class="col-md-12">
                                <input id="photos" type="file" class="form-control" name="filename"  value="{{ old('filename') }}" required> 

                                @if ($errors->has('filename'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('filenamefilename') }}</strong>
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


                        <div class="form-group{{ $errors->has('tagline') ? ' has-error' : '' }}">
                            <label for="tagline" class="col-md-4 control-label">Tag Line
                            </label>

                            <div class="col-md-12">
                                <input  type="text" class="form-control" name="tagline"  value="{{ old('tagline') }}" required> 

                                @if ($errors->has('tagline'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('tagline') }}</strong>
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