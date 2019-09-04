@extends('layout.master')
@section('content')

<section class="content-header">
  <h1>
    Addresses
    <small>{{isset($address)?'Update Address':'Create Address'}}</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">{{isset($address)?'Update Address':'Create Address'}}</li>
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


@if(isset($address))
<form role="form"  method="POST" action="/addresses/{{$address->id}}">
    {{method_field('PUT')}}
@else
<form role="form"  method="POST" action="/addresses">
@endif
    @csrf

    @include('addresses.form')

    <!-- /.box-body -->
	<div class="box-footer">
	<button type="submit" class="btn btn-primary">Submit</button>
	</div>
</form>

@endSection