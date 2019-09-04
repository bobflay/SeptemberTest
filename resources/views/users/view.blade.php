@extends('layout.master')
@section('content')

<section class="content-header">
  <h1>
    Users
    <small>View User</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">View User</li>
  </ol>
</section>


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

                <a href="/users/{{$user->id}}/edit" class="btn btn-primary btn-block"><b>Update</b></a>
                <a href="/users/{{$user->id}}/delete" class="btn btn-danger btn-block delete-btn"><b>Delete</b></a>
              </div>
              <!-- /.box-body -->
            </div>
            <!-- /.box -->
  </div>
</div>

<div class="row">
  
  <div class="col-xs-12">
    <div class="box">
      <div class="box-header">
        <h3 class="box-title">Related Addresses</h3>

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
          @foreach($user->addresses as $address)
            
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
</div>




@endSection


@section('scripts')

  <script type="text/javascript">
    
    $('.delete-btn').on('click',function(){
      return confirm("Are you sure?");
    });


  </script>

@endsection