@extends('layouts.app')

@section('content')

<div class="container">
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
<button>Unpublish</button>
        
        @else
        <button>Publish</button>
        @endif
       

</form>
       </td>
       <td>
<form novalidate="novalidate" class="form-horizontal" method="POST"  action="/campaigns/{{$campaign->id}}/delete" >
                        {{ csrf_field() }}
       <button>Delete</button>

       </form>
       </td>
      </tr>
   
@endforeach
 </tbody>
  </table>




 </div>

</div>
</div>

 @endsection