@extends('layouts.app')

@section('content')


<div class="container">
    <div class="row">
        <div class="col-md-12">
           
               <h1>Add New Sponsor</h1>

                <div>
                    <form novalidate="novalidate" class="form-horizontal" method="POST"  action="/sponsor/create" enctype="multipart/form-data">
                        {{ csrf_field() }}

                      
                        

                       

                       
                        
                       


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



