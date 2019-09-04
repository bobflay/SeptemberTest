@extends('layout.master')
@section('content')

<section class="content-header">
  <h1>
    Addresses
    <small>List Addresses</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">List Addresses</li>
  </ol>
</section>



<div class="col-xs-12">
  <div class="box">
    <div class="box-header">
      <h3 class="box-title">Addresses Table</h3>

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
          <th>Name</th>
          <th>Floor</th>
          <th>Building</th>
          <th>Street</th>
        </tr>
        @foreach($addresses as $address)
          
          <tr>
            <td><a href="/addresses/{{$address->id}}">{{$address->id}}</a></td>
            <td><a href="/addresses/{{$address->id}}">{{$address->name}}</a></td>
            <td><a href="/addresses/{{$address->id}}">{{$address->floor}}</a></td>
            <td><a href="/addresses/{{$address->id}}">{{$address->building}}</a></td>
            <td><a href="/addresses/{{$address->id}}">{{$address->street}}</a></td>
          </tr>

        @endforeach

      </tbody>
    </table>
    </div>
    <!-- /.box-body -->
  </div>
  <!-- /.box -->
</div>





{{$addresses->links()}}

@endSection