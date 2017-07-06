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
 <div class="row top-space">

 <div class="col-md-12">
  


<table class="table table-striped">
    <thead>
      <tr>
       <th>Id</th>
        <th>Title</th>
        
        <th>Published</th>
       
        <th>Date</th>
        <th>Venue</th>
        <th>User Id</th>
        
        
        
       
        
        <th>Publish</th>
        <th>Delete</th>
      </tr>
    </thead>
    <tbody>
<tr>

@foreach($campaigns as $campaign)

<td>{{$campaign->id}}</td>


        <td> <a href=" {{ url('campaigns/'.$campaign->id.'/display') }} ">{{$campaign->title}}</a></td>
       
       @if($campaign->status)
        <td>YES</td>
        @else
        <td>NO</td>
        @endif

       

         <td>{{$campaign->date}}</td>
         <td>{{$campaign->venue}}</td>
          <td>{{$campaign->user_id}}</td>


<td>

<form novalidate="novalidate" class="form-horizontal" method="POST"  action="/campaigns/{{$campaign->id}}/publish" >
                        {{ csrf_field() }}
@if($campaign->status)
<button type="submit" class="btn btn-block btn-info btn-flat">Unpublish</button>
        
        @else
        <button type="submit" class="btn btn-block btn-success btn-flat">Publish</button>
        @endif
       

</form>
       </td>
       <td>
<form novalidate="novalidate" class="form-horizontal" method="POST"  action="/campaigns/{{$campaign->id}}/delete" >
                        {{ csrf_field() }}
       <button type="submit" class="btn btn-block btn-danger btn-flat">Delete</button>

       </form>
       </td>
      </tr>
   
@endforeach
 </tbody>
  </table>




 </div>

</div>
</div>
</section>

        
</div>
 
      </div>


 @endsection