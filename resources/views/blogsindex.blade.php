

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


 <section class="content">

      <!-- Your Page Content Here -->

<div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Responsive Hover Table</h3>

              <div class="box-tools">
                <div class="input-group input-group-sm" style="width: 150px;">
                  <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">

                  <div class="input-group-btn">
                    <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                  </div>
                </div>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
                 <thead>
                  <tr>
                    <th>Id</th>
                    <th>Title</th>
                    <th>Tags</th>
                    <th>Published</th>
                    <th>User Id</th>
                    <th>Featured</th>
                    <th>Sub Featured</th><th>Publish</th>
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
<button type="button" class="btn btn-block btn-warning btn-flat">Featured</button>
        
        @else
        <button type="button" class="btn btn-block btn-warning btn-flat"> Sub Featured</button>
        @endif
       

</form>
       </td>


          <td>

<form novalidate="novalidate" class="form-horizontal" method="POST"  action="/blogs/{{$blog->id}}/subfeatured" >
                        {{ csrf_field() }}
@if($blog->subfeatured)
<button type="button" class="btn btn-block btn-info btn-flat">Sub Featured</button>
        
        @else
        <button type="button" class="btn btn-block btn-info btn-flat">Not Sub Featured</button>
        @endif
       

</form>
       </td>

       <td>

<form novalidate="novalidate" class="form-horizontal" method="POST"  action="/blogs/{{$blog->id}}/publish" >
                        {{ csrf_field() }}
@if($blog->status)
<button type="button" class="btn btn-block btn-primary btn-flat">Not Published</button>
        
        @else
       <button type="button" class="btn btn-block btn-primary btn-flat">Published</button>
        @endif
       

</form>
       </td>
       <td>
<form novalidate="novalidate" class="form-horizontal" method="POST"  action="/blogs/{{$blog->id}}/delete" >
                        {{ csrf_field() }}
       <button type="submit" class="btn btn-block btn-danger btn-flat">Delete</button>

       </form>
       </td>
      </tr>
   
@endforeach
 </tbody>
  </table>


               


    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  @endsection