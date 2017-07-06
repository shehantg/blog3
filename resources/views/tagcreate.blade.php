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
           
               <h1>Create New Tag</h1>

                <div>
                    <form novalidate="novalidate" class="form-horizontal" method="POST"  action="/tags/create" >
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">name</label>

                            <div class="col-md-6 col-md-offset-3">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                          <div class="form-group">
                            <div class="col-md-4 col-md-offset-4">
                                <button type="submit" class="btn btn-block btn-primary btn-flat" id="createAdventureButton">
                                    Create
                                </button>

                                 
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>



        <div class="row">
             <div class="col-md-12">
                <table class="table table-striped">
                    <thead>
                        <tr>
                          <th></th>
                         <th>Name</th>
        
                     

                        
                         <th>Delete</th>

                        
      </tr>
    </thead>
    <tbody>






@foreach($tags as $tag)
<tr>

        <td>{{$loop->iteration}}</td>
        <td> {{$tag->name}}</td>
       
       
        
        
      

       <td>
<form novalidate="novalidate" class="form-horizontal" method="POST"  action="/tags/{{$tag->id}}/delete" >
                        {{ csrf_field() }}
       <button type="submit"  class="btn btn-block btn-danger btn-flat">Delete</button>

       </form>
       </td>

       
      
   </tr>
@endforeach

 </tbody>
  </table>




 </div>

</div>

</section>
   </div>     


 

@endsection