@extends('layouts.app')

@section('dashboard')
    Dashboard
    <small>Member</small>
@endsection

@section('breadcrumb')
    <li><a href="{{ url('home') }}"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">Dashboard</li>
@endsection

@section('content')
    <!-- Info boxes -->
    <div class="row">
        <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="info-box">
                <span class="info-box-icon bg-aqua"><i class="fa fa-money"></i></span>

                <div class="info-box-content">
                    <span class="info-box-text">Total Saldo</span>
                    <span class="info-box-number"><small>Rp. 100.000</small></span>
                </div>
                <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="info-box">
                <span class="info-box-icon bg-red"><i class="ion-bag"></i></span>

                <div class="info-box-content">
                    <span class="info-box-text">Total Pencairan</span>
                    <span class="info-box-number"><small>Rp. 50.000</small></span>
                </div>
                <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
        </div>
        <!-- /.col -->

        <!-- fix for small devices only -->
        <div class="clearfix visible-sm-block"></div>

        <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="info-box">
                <span class="info-box-icon bg-green"><i class="ion-stats-bars"></i></span>

                <div class="info-box-content">
                    <span class="info-box-text">Pencairan Terakhir</span>
                    <span class="info-box-number"><small>Rp. 20.000</small></span>
                </div>
                <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="info-box">
                <span class="info-box-icon bg-yellow"><i class="fa fa-tasks"></i></span>

                <div class="info-box-content">
                    <span class="info-box-text">Request Terakhir</span>
                    <span class="info-box-number"><small><a href="#">PCR1234567891234567</a></small></span>
                </div>
                <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->

    <!-- TABLE: LATEST ORDERS -->
    <div class="box box-info">
      <div class="box-header with-border">
        <h3 class="box-title">List Request Pencairan Dana</h3>

        <div class="box-tools pull-right">
          <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
          </button>
          <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
        </div>
      </div>
      <!-- /.box-header -->
      <div class="box-body">
        <div class="table-responsive">
          <table class="table no-margin">
            <thead>
            <tr>
              <th>Kode Transaksi</th>
              <th>Total Saldo</th>
              <th>Tipe Pencairan</th>
              <th>
                  Request Pencairan
              </th>
              <th>
                  Status
              </th>
              <th>
                  Saldo Baru
              </th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td><a href="#">PCR1234567891234567</a></td>
                <td>Rp. 100.000</td>
                <td>
                    Uang Tunai
                </td>
                <td>Rp. 50.000</td>
                <td>
                    <span class="label label-warning">Pending</span>
                </td>
                <td>
                    Menunggu Persetujuan
                </td>
            </tr>
            <tr>
                <td><a href="#">PCR1234567891234567</a></td>
                <td>Rp. 100.000</td>
                <td>
                    Uang Tunai
                </td>
                <td>Rp. 50.000</td>
                <td>
                    <span class="label label-warning">Pending</span>
                </td>
                <td>
                    Menunggu Persetujuan
                </td>
            </tr>
            <tr>
                <td><a href="#">PCR1234567891234567</a></td>
                <td>Rp. 100.000</td>
                <td>
                    Uang Tunai
                </td>
                <td>Rp. 50.000</td>
                <td>
                    <span class="label label-warning">Pending</span>
                </td>
                <td>
                    Menunggu Persetujuan
                </td>
            </tr>
            <tr>
                <td><a href="#">PCR1234567891234567</a></td>
                <td>Rp. 100.000</td>
                <td>
                    Uang Tunai
                </td>
                <td>Rp. 50.000</td>
                <td>
                    <span class="label label-warning">Pending</span>
                </td>
                <td>
                    Menunggu Persetujuan
                </td>
            </tr>
            </tbody>
          </table>
        </div>
        <!-- /.table-responsive -->
      </div>
      <!-- /.box-body -->
      <div class="box-footer clearfix">
        <a href="javascript:void(0)" class="btn btn-sm btn-info btn-flat pull-left">Place New Order</a>
        <a href="javascript:void(0)" class="btn btn-sm btn-default btn-flat pull-right">Lihat History Pencairan</a>
      </div>
      <!-- /.box-footer -->
    </div>
@endsection
