@extends('layouts.adminLayout.admin_design')
@section('content')

<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="index.html" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#">About Us</a> <a href="#" class="current">View About Us</a> </div>
    <h1>About Us</h1>
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
            <h5>View About Us</h5>
          </div>
          <div class="widget-content nopadding">
            <table class="table table-bordered data-table">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Heading</th>
                  <th>description</th>
                  <th>Mission</th>
                  <th>Vision</th>
                  <th>Support</th>
                  <th>Image</th>
                  <th>Actions</th>
                </tr>
              </thead>
              <tbody>
              	@foreach($abouts as $details)
                <tr class="gradeX">
                  <td>{{$details->id}}</td>
                  <td>{{$details->heading}}</td>
                  <td>{{$details->description}}</td>
                  <td>{{$details->mission}}</td>
                  <td>{{$details->vision}}</td>
                  <td>{{$details->support}}</td>
                  <td>
                    @if(!empty($details->image))
                      <img src="{{ asset('/images/about/small/'.$details->image) }}" style="width:60px;">
                    @endif
                  </td>
                  <td class="center">
                    <a href="{{url('/admin/edit_blog/'.$details->id)}}" class="btn btn-primary btn-mini">Edit</a> 
                    <a <?php /*id="delCat" href="{{url('/admin/delete_category/'.$category->id)}}" */?> rel ="{{$details->id}}" rel1 = "delete_about" href = "javascript:" class="btn btn-danger btn-mini deleteRecord">Delete</a></td>
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