@extends('layouts.adminLayout.admin_design')
@section('content')

<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="{{url('/index')}}" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#">HomeInfo</a> <a href="#" class="current">View HomeInfo</a> </div>
    <h1>HomeInfo</h1>
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
            <h5>View HomeInfo</h5>
          </div>
          <div class="widget-content nopadding">
            <table class="table table-bordered data-table">
              <thead>
                <tr>
                  <th>Home ID</th>
                  <th>Heading</th>
                  <th>description</th>
                  <th>Image</th>
                  <th>Actions</th>
                </tr>
              </thead>
              <tbody>
              	@foreach($home as $homes)
                <tr class="gradeX">
                  <td>{{$homes->id}}</td>
                  <td>{{$homes->heading}}</td>
                  <td>{{$homes->description}}</td>
                  <td>
                    @if(!empty($homes->image))
                      <img src="{{ asset('/images/home/small/'.$homes->image) }}" style="width:60px;">
                    @endif
                  </td>
                  <td class="center">
                    <a href="{{url('/admin/edit_home/'.$homes->id)}}" class="btn btn-primary btn-mini">Edit</a> 
                    <a <?php /*id="delCat" href="{{url('/admin/delete_category/'.$category->id)}}" */?> rel ="{{$homes->id}}" rel1 = "delete_home" href = "javascript:" class="btn btn-danger btn-mini deleteRecord">Delete</a></td>
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