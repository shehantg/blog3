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



 <h1>Create New Home Slider</h1>

                <div>
                    <form novalidate="novalidate" class="form-horizontal" method="POST"  action="/homeslider/create" >
                        {{ csrf_field() }}

                       

                       

                        
                        
                       
                        






                        <div class="form-group{{ $errors->has('body') ? ' has-error' : '' }}">
                            <label for="body" class="col-md-4 control-label">Slider Name
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















 <div class="row">

 <div class="col-md-12">
  


<table class="table table-striped">
    <thead>
      <tr>
       
        <th>Name</th>
        
        <th>Status</th>
       
       
        
        
       
        
        <th>Publish</th>
        <th>Delete</th>

        <th>Add Slides</th>
        <th>Show Slides</th>
      </tr>
    </thead>
    <tbody>






@foreach($homesliders as $homeslider)
<tr>
<td> <a href=" {{ url('blogs/'.$homeslider->id) }} ">{{$homeslider->name}}</a></td>
        @if($homeslider->status)
        <td>YES</td>
        @else
        <td>NO</td>
        @endif
       
        
        
       <td>
       <form novalidate="novalidate" class="form-horizontal" method="POST"  action="/homeslider/{{$homeslider->id}}/publish" >
                    {{ csrf_field() }}
      

                    @if($homeslider->status)
         <button type="submit" class="btn btn-block btn-success btn-flat">Unpublish</button>
        @else
        <button type="submit" class="btn btn-block btn-warning btn-flat">Publish</button>
        @endif    

</form>
       </td>
       <td>
<form novalidate="novalidate" class="form-horizontal" method="POST"  action="/homeslider/{{$homeslider->id}}/delete" >
                        {{ csrf_field() }}
       <button type="submit" class="btn btn-block btn-danger btn-flat">Delete</button>

       </form>
       </td>

       <td><a href=" {{ url('/homeslide/'.$homeslider->id.'/create') }} " class="btn btn-block btn-info btn-flat">Add Sldes</a></td>

       
      <td><a href=" {{ url('homeslider/'.$homeslider->id.'/show') }} " class="btn btn-block btn-primary btn-flat">Show Sldes</a></td>
</tr>

@endforeach

</tbody>
  </table>




 </div>

</div>



        

    </section>
    <!-- /.content -->
  </div>


 

 @endsection

 