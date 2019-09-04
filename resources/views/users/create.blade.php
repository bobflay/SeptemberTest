@extends('layout.master')
@section('content')

<section class="content-header">
  <h1>
    Users
    <small>{{isset($user)?'Update User':'Create User'}}</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">{{isset($user)?'Update User':'Create User'}}</li>
  </ol>
</section>

@if($errors->any())
	<div class="alert alert-danger">
		<ul>
			@foreach($errors->all() as $error)
				<li>{{$error}}</li>
			@endforeach
		</ul>
	</div>
@endif


@if(isset($user))
<form role="form"  method="POST" action="/users/{{$user->id}}">
    {{method_field('PUT')}}
@else
<form role="form"  method="POST" action="/users">
@endif
    @csrf
    <div class="box-body">
        <div class="form-group">
          <label for="first_name">First Name</label>
          <input type="text" value="{{isset($user)?$user->first_name:old('first_name')}}" name="first_name" class="form-control" id="first_name" placeholder="First Name">
        </div>


        <div class="form-group">
          <label for="last_name">Last Name</label>
          <input type="text" value="{{isset($user)?$user->last_name:old('last_name')}}"  name="last_name" class="form-control" id="last_name" placeholder="Last Name">
        </div>                
        
        <div class="form-group">
          <label for="exampleInputEmail1">Email address</label>
          <input type="email" value="{{isset($user)?$user->email:old('email')}}" name="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
        </div>

        <div class="form-group">
          <label for="phone">Phone Number</label>
          <input type="text" value="{{isset($user)?$user->phone_number:old('phone_number')}}" name="phone_number" class="form-control" id="phone" placeholder="Enter Phone Number">
        </div>

		<div class="form-group">
            <label>Date:</label>
            <div class="input-group date">
              <div class="input-group-addon">
                <i class="fa fa-calendar"></i>
              </div>
              <input name="date_of_birth" value="{{isset($user)?$user->date_of_birth:old('date_of_birth')}}" type="text" class="form-control pull-right" id="datepicker">
            </div>
            <!-- /.input group -->
      	</div>

      	<div class="form-group">
			<label>Preferred Contact Method</label>
			<select name="preferred_contact_method" value="{{isset($user)?$user->preferred_contact_method:old('preferred_contact_method')}}"  class="form-control">
				<option value="email">Email</option>
				<option value="sms">SMS</option>
				<option value="phone">Phone</option>
			</select>
        </div>

        <div class="form-group">
			<label>Gender</label>
			<select name="gender" value="{{isset($user)?$user->gender:old('gender')}}"  class="form-control">
				<option value="male">Male</option>
				<option value="female">Female</option>
				<option value="other">Other</option>
			</select>
        </div>
    </div>
    <!-- /.box-body -->
	<div class="box-footer">
	<button type="submit" class="btn btn-primary">Submit</button>
	</div>
</form>

@endSection