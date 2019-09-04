@extends('layout.master')

@section('content')

<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    Dashboard
    <small>Control panel</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">Dashboard</li>
  </ol>
</section>

<!-- Main content -->
<section class="content">
  <!-- Small boxes (Stat box) -->
  <div class="row">

    <!-- ./col -->
    <div class="col-xs-6">
      <!-- small box -->
      <div class="small-box bg-green">
        <div class="inner">
          <h3>{{$addresses_count}}</h3>

          <p>Total Addresses</p>
        </div>
        <div class="icon">
          <i class="ion ion-stats-bars"></i>
        </div>
      </div>
    </div>
    <!-- ./col -->
    <div class="col-xs-6">
      <!-- small box -->
      <div class="small-box bg-yellow">
        <div class="inner">
          <h3>{{$users_count}}</h3>

          <p>Total Users</p>
        </div>
        <div class="icon">
          <i class="ion ion-person-add"></i>
        </div>
      </div>
    </div>

  </div>
  <!-- /.row -->

<div>
  
  <section class="col-lg-6 connectedSortable">

    <!-- Map box -->
    <div class="box box-solid bg-light-blue-gradient">
      <div class="box-header">
        <!-- tools box -->
        <div class="pull-right box-tools">
          <button type="button" class="btn btn-primary btn-sm daterange pull-right" data-toggle="tooltip"
                  title="Date range">
            <i class="fa fa-calendar"></i></button>
          <button type="button" class="btn btn-primary btn-sm pull-right" data-widget="collapse"
                  data-toggle="tooltip" title="Collapse" style="margin-right: 5px;">
            <i class="fa fa-minus"></i></button>
        </div>
        <!-- /. tools -->

        <i class="fa fa-map-marker"></i>

        <h3 class="box-title">
          Users per country
        </h3>
      </div>
      <div class="box-body">
        <div id="world-map" style="height: 250px; width: 100%;"></div>
      </div>
      <!-- /.box-body-->
      <div class="box-footer no-border">
        <div class="row">
          <div class="col-xs-4 text-center" style="border-right: 1px solid #f4f4f4">
            <div id="sparkline-1"></div>
            <div class="knob-label">Visitors</div>
          </div>
          <!-- ./col -->
          <div class="col-xs-4 text-center" style="border-right: 1px solid #f4f4f4">
            <div id="sparkline-2"></div>
            <div class="knob-label">Online</div>
          </div>
          <!-- ./col -->
          <div class="col-xs-4 text-center">
            <div id="sparkline-3"></div>
            <div class="knob-label">Exists</div>
          </div>
          <!-- ./col -->
        </div>
        <!-- /.row -->
      </div>
    </div>
    <!-- /.box -->

  </section>

  <section class="col-lg-6 connectedSortable">

    <div class="box box-solid bg-teal-gradient">
      <div class="box-header">
        <i class="fa fa-th"></i>

        <h3 class="box-title">Users Over Time</h3>

        <div class="box-tools pull-right">
          <button type="button" class="btn bg-teal btn-sm" data-widget="collapse"><i class="fa fa-minus"></i>
          </button>
          <button type="button" class="btn bg-teal btn-sm" data-widget="remove"><i class="fa fa-times"></i>
          </button>
        </div>
      </div>
      <div class="box-body border-radius-none">
        <div class="chart" id="line-chart" style="height: 250px;"></div>
      </div>
      <!-- /.box-body -->
      <div class="box-footer no-border">
        <div class="row">
          <div class="col-xs-4 text-center" style="border-right: 1px solid #f4f4f4">
            <input type="text" class="knob" data-readonly="true" value="20" data-width="60" data-height="60"
                   data-fgColor="#39CCCC">

            <div class="knob-label">2017</div>
          </div>
          <!-- ./col -->
          <div class="col-xs-4 text-center" style="border-right: 1px solid #f4f4f4">
            <input type="text" class="knob" data-readonly="true" value="50" data-width="60" data-height="60"
                   data-fgColor="#39CCCC">

            <div class="knob-label">2018</div>
          </div>
          <!-- ./col -->
          <div class="col-xs-4 text-center">
            <input type="text" class="knob" data-readonly="true" value="30" data-width="60" data-height="60"
                   data-fgColor="#39CCCC">

            <div class="knob-label">2019</div>
          </div>
          <!-- ./col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.box-footer -->
    </div>

    
  </section>




</div>





</section>
<!-- /.content -->

@endsection


@section('scripts')

<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<!-- AdminLTE for demo purposes -->
<script src="dist/js/pages/dashboard.js"></script>
<script src="dist/js/demo.js"></script>

@endsection