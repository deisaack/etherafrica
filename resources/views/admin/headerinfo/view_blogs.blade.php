@extends('layouts.adminLayout.admin_design')
@section('content')

<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="index.html" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#">Blogs</a> <a href="#" class="current">View Blogs</a> </div>
    <h1>Blogs</h1>
     @if(Session::has('flash_message_error'))
            <div class="alert alert-error alert-block">
                <button type="button" class="close" data-dismiss="alert">×</button> 
                <strong>{!! session('flash_message_error') !!}</strong>
            </div>        
        @endif
        @if(Session::has('flash_message_success'))
            <div class="alert alert-success alert-block">
                <button type="button" class="close" data-dismiss="alert">×</button> 
                <strong>{!! session('flash_message_success') !!}</strong>
            </div>        
        @endif
  </div>
  <div class="container-fluid">
    <hr>
    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
            <h5>View Blogs</h5>
          </div>
          <div class="widget-content nopadding">
            <table class="table table-bordered data-table">
              <thead>
                <tr>
                  <th>Blog ID</th>
                  <th>Blog Name</th>
                  <th>Date</th>
                  <th>description</th>
                  <th>Image</th>
                  <th>Actions</th>
                </tr>
              </thead>
              <tbody>
              	@foreach($blog as $blogs)
                <tr class="gradeX">
                  <td>{{$blogs->id}}</td>
                  <td>{{$blogs->blog_name}}</td>
                  <td>{{$blogs->date}}</td>
                  <td>{{$blogs->description}}</td>
                  <td>
                    @if(!empty($blogs->image))
                      <img src="{{ asset('/images/pictures/small/'.$blogs->image) }}" style="width:60px;">
                    @endif
                  </td>
                  <td class="center">
                    <a href="{{url('/admin/edit_blog/'.$blogs->id)}}" class="btn btn-primary btn-mini">Edit</a> 
                    <a <?php /*id="delCat" href="{{url('/admin/delete_category/'.$category->id)}}" */?> rel ="{{$blogs->id}}" rel1 = "delete_blog" href = "javascript:" class="btn btn-danger btn-mini deleteRecord">Delete</a></td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection