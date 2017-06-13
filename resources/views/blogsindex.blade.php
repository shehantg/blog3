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
        <th>Tags</th>
        <th>Published</th>
       
        <th>User Id</th>
        <th>Featured</th>
        <th>Sub Featured</th>
        
        
        
       
        
        <th>Publish</th>
        <th>Delete</th>
      </tr>
    </thead>
    <tbody>
<tr>
@foreach($blogs as $blog)

<td>{{$blog->id}}</td>


        <td> <a href=" {{ url('blogs/'.$blog->id) }} ">{{$blog->title}}</a></td>
        <td>
        @foreach($blog->tags as $tag)
         {{$tag->name}}<br>
       @endforeach
       </td>
       @if($blog->status)
        <td>YES</td>
        @else
        <td>NO</td>
        @endif

        <td>{{$blog->user_id}}</td>

         <td>

<form novalidate="novalidate" class="form-horizontal" method="POST"  action="/blogs/{{$blog->id}}/featured" >
                        {{ csrf_field() }}
@if($blog->featured)
<button>Featured</button>
        
        @else
        <button>Not Featured</button>
        @endif
       

</form>
       </td>


          <td>

<form novalidate="novalidate" class="form-horizontal" method="POST"  action="/blogs/{{$blog->id}}/subfeatured" >
                        {{ csrf_field() }}
@if($blog->subfeatured)
<button>Sub Featured</button>
        
        @else
        <button>Not Sub Featured</button>
        @endif
       

</form>
       </td>

       <td>

<form novalidate="novalidate" class="form-horizontal" method="POST"  action="/blogs/{{$blog->id}}/publish" >
                        {{ csrf_field() }}
@if($blog->status)
<button>Unpublish</button>
        
        @else
        <button>Publish</button>
        @endif
       

</form>
       </td>
       <td>
<form novalidate="novalidate" class="form-horizontal" method="POST"  action="/blogs/{{$blog->id}}/delete" >
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