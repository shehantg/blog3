@extends('layouts.dashboard')



@section('content')

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
           
               <h1>Create New Section</h1>

                <div>
                    <form novalidate="novalidate" class="form-horizontal" method="POST"  action="/section/create">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Section Title</label>

                            <div class="col-md-12">
                                <input id="title" type="text" class="form-control" name="title" value="{{ old('title') }}" required autofocus>

                                @if ($errors->has('title'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('title') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>




                        <div class="form-group{{ $errors->has('rank') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Rank</label>

                            <div class="col-md-12">
                                <input id="rank-section" type="text" class="form-control" name="rank" value="{{ old('rank') }}" required autofocus>

                                @if ($errors->has('rank'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('rank') }}</strong>
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

    

                       

@endsection