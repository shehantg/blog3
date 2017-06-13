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
        <th>Time</th>
        <th>User Id</th>
        
        
        
       
        
        <th>Publish</th>
        <th>Delete</th>
      </tr>
    </thead>
    <tbody>
<tr>

@foreach($events as $event)

<td>{{$event->id}}</td>


        <td> <a href=" {{ url('events/'.$event->id) }} ">{{$event->title}}</a></td>
       
       @if($event->status)
        <td>YES</td>
        @else
        <td>NO</td>
        @endif

       

         <td>{{$event->date}}</td>
         <td>{{$event->venue}}</td>
          <td>{{$event->time}}</td>
          <td>{{$event->user_id}}</td>


<td>

<form novalidate="novalidate" class="form-horizontal" method="POST"  action="/events/{{$event->id}}/publish" >
                        {{ csrf_field() }}
@if($event->status)
<button>Unpublish</button>
        
        @else
        <button>Publish</button>
        @endif
       

</form>
       </td>
       <td>
<form novalidate="novalidate" class="form-horizontal" method="POST"  action="/events/{{$event->id}}/delete" >
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