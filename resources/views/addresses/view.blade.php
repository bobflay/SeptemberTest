@extends('layout.master')
@section('content')

<section class="content-header">
  <h1>
    Addresses
    <small>View Address</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">View Address</li>
  </ol>
</section>



<div class="row">

  <form class="form-horizontal">
    <div class="box-body">
      <div class="form-group">
        <label class="col-sm-2 control-label">Name</label>
        <div class="col-sm-6">
          <input type="text" class="form-control" value="{{$address->name}}" id="name" disabled >
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-2 control-label">Floor</label>
        <div class="col-sm-6">
          <input type="text" class="form-control" value="{{$address->floor}}" id="name" disabled >
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-2 control-label">Building</label>
        <div class="col-sm-6">
          <input type="text" class="form-control" value="{{$address->building}}" id="name" disabled >
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-2 control-label">Street</label>
        <div class="col-sm-6">
          <input type="text" class="form-control" value="{{$address->street}}" id="name" disabled >
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-2 control-label">City</label>
        <div class="col-sm-6">
          <input type="text" class="form-control" value="{{$address->city}}" id="name" disabled >
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-2 control-label">Region</label>
        <div class="col-sm-6">
          <input type="text" class="form-control" value="{{$address->region}}" id="name" disabled >
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-2 control-label">Country</label>
        <div class="col-sm-6">
          <input type="text" class="form-control" value="{{$address->country}}" id="name" disabled >
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-2 control-label">Created By</label>
        <div class="col-sm-6">
          <input type="text" class="form-control" value="{{$address->created_by}}" id="name" disabled >
        </div>
      </div>

      <div class="col-sm-8">
        <a href="/addresses/{{$address->id}}/edit" class="btn btn-primary btn-block"><b>Update</b></a>
        <a href="/addresses/{{$address->id}}/delete" class="btn btn-danger btn-block delete-btn"><b>Delete</b></a>
      </div>
    </div>
  </form>

</div>


<div>
  <h1>Related User</h1>
</div>

<div class="row">
  <div class="col-md-6">
            <!-- Profile Image -->
            <div class="box box-primary">
              <div class="box-body box-profile">

                <ul class="list-group list-group-unbordered">
                  <li class="list-group-item">
                    <b>First Name</b> <a class="pull-right">{{$user->first_name}}</a>
                  </li>
                  <li class="list-group-item">
                    <b>Last Name</b> <a class="pull-right">{{$user->last_name}}</a>
                  </li>
                  <li class="list-group-item">
                    <b>Email</b> <a class="pull-right">{{$user->email}}</a>
                  </li>                
                  <li class="list-group-item">
                    <b>Phone Number</b> <a class="pull-right">{{$user->phone_number}}</a>
                  </li>                
                  <li class="list-group-item">
                    <b>Date of Birth</b> <a class="pull-right">{{$user->date_of_birth}}</a>
                  </li>
                  <li class="list-group-item">
                    <b>Preferred Contact Method</b> <a class="pull-right">{{$user->preferred_contact_method}}</a>
                  </li>
                  <li class="list-group-item">
                    <b>Gender</b> <a class="pull-right">{{$user->gender}}</a>
                  </li>
                  <li class="list-group-item">
                    <b>Created By</b> <a class="pull-right">{{$user->created_by}}</a>
                  </li>



                </ul>

                <a href="/users/{{$user->id}}" class="btn btn-primary btn-block"><b>Details</b></a>
              </div>
              <!-- /.box-body -->
            </div>
            <!-- /.box -->
  </div>
</div>





@endSection


@section('scripts')

  <script type="text/javascript">
    
    $('.delete-btn').on('click',function(){
      return confirm("Are you sure?");
    });


  </script>

@endsection