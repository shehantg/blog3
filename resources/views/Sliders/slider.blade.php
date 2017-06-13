@extends('layouts.app')

@section('content')



<div class="container">
 <div class="row">
 <div class="col-md-12">



 <h1>Create New Slider</h1>

                <div>
                    <form novalidate="novalidate" class="form-horizontal" method="POST"  action="/slider/create" >
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


 </div>











 <div class="container">
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
      </tr>
    </thead>
    <tbody>






@foreach($sliders as $slider)
<tr>


        <td> <a href=" {{ url('blogs/'.$slider->id) }} ">{{$slider->body}}</a></td>
        @if($slider->status)
        <td>YES</td>
        @else
        <td>NO</td>
        @endif
       
        
        
       <td>

<form novalidate="novalidate" class="form-horizontal" method="POST"  action="/slider/{{$slider->id}}/publish" >
                    {{ csrf_field() }}
      

                    @if($slider->status)
         <button>Unpublish</button>
        @else
        <button>Publish</button>
        @endif    

</form>
       </td>
       <td>
<form novalidate="novalidate" class="form-horizontal" method="POST"  action="/slider/{{$slider->id}}/delete" >
                        {{ csrf_field() }}
       <button>Delete</button>

       </form>
       </td>

       <td><a href=" {{ url('slider/'.$slider->id.'/slides/create') }} ">Add Sldes</a></td>
      
   </tr>
@endforeach

 </tbody>
  </table>




 </div>

</div>
</div>




 @endsection

 