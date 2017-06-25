@extends('layouts.app')

@section('content')

<div class="Container">
	<div class="row">
		<div class="col-md-12">
			<h3>Download this Volunteer Application Form.Submit it below with your details</h3>

			<form novalidate="novalidate" class="form-horizontal" method="POST"  action="/volunteer/register" enctype="multipart/form-data">
				{{ csrf_field() }}

				    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label"> Name</label>

                            <div class="col-md-6">
                                <input  type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                    </div>

                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                    </div>

                    <div class="form-group{{ $errors->has('cv') ? ' has-error' : '' }}">
                            <label for="photos" class="col-md-4 control-label">Image
                            </label>

                            <div class="col-md-12">
                                <input id="photos" type="file" class="form-control" name="cv"  value="{{ old('cv') }}" required> 

                                @if ($errors->has('cv'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('cv') }}</strong>
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

@endsection