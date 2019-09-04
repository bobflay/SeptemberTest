@extends('layout.master')
@section('content')

<section class="content-header">
  <h1>
    Users
    <small>List Users</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">List Users</li>
  </ol>
</section>



<div class="col-xs-12">
  <div class="box">
    <div class="box-header">
      <h3 class="box-title">Users Table</h3>

      <div class="box-tools">
        <div class="input-group input-group-sm hidden-xs" style="width: 150px;">
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
        <tbody>
        <tr>
        	<th>ID</th>
			<th>First Name</th>
			<th>Last Name</th>
			<th>Email</th>
			<th>Gender</th>
        </tr>
        @foreach($users as $user)
	        
	        <tr>
	          <td><a href="/users/{{$user->id}}">{{$user->id}}</a></td>
	          <td><a href="/users/{{$user->id}}">{{$user->first_name}}</a></td>
	          <td><a href="/users/{{$user->id}}">{{$user->last_name}}</a></td>
	          <td><a href="/users/{{$user->id}}">{{$user->email}}</a></td>
	          <td><a href="/users/{{$user->id}}">{{$user->gender}}</a></td>
	        </tr>

        @endforeach

      </tbody>
  	</table>
    </div>
    <!-- /.box-body -->
  </div>
  <!-- /.box -->
</div>





{{$users->links()}}

@endSection