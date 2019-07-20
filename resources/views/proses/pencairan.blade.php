@extends('layouts.app')

@section('css')
    <!-- DataTables -->
    <link rel="stylesheet" href="{{ asset('/adminlte/plugins/datatables/dataTables.bootstrap.css') }}">
@endsection

@section('dashboard')
    Dashboard
    <small>Admin</small>
@endsection

@section('breadcrumb')
    <li><a href="{{ url('home') }}"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">Proses Pencairan</li>
@endsection

@section('content')
    <div class="box">
        <div class="box-header">
            <h3 class="box-title">Proses Pencairan</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>Nama</th>
                        <th>E-mail</th>
                        <th>Total Saldo</th>
                        <th>Tipe Pencairan</th>
                        <th>Request Pencairan</th>
                        <th>
                            Status
                        </th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Ryan Rahman Setiawan</td>
                        <td>ryanrahman26@gmail.com</td>
                        <td>
                            Rp. 100.000
                        </td>
                        <td>Uang Tunai</td>
                        <td>
                            Rp. 50.000
                        </td>
                        <td>
                            <span class="label label-warning">Pending</span>
                        </td>
                        <td><a href="#" class="btn btn-success"><i class="fa fa-check"></i> Setujui</a>
                            <a href="#" class="btn btn-danger"><i class="fa fa-trash-o"></i> Tolak</a>
                        </td>
                    </tr>
                    <tr>
                        <td>Ryan Rahman Setiawan</td>
                        <td>ryanrahman26@gmail.com</td>
                        <td>
                            Rp. 100.000
                        </td>
                        <td>Uang Tunai</td>
                        <td>
                            Rp. 50.000
                        </td>
                        <td>
                            <span class="label label-warning">Pending</span>
                        </td>
                        <td><a href="#" class="btn btn-success"><i class="fa fa-check"></i> Setujui</a>
                            <a href="#" class="btn btn-danger"><i class="fa fa-trash-o"></i> Tolak</a>
                        </td>
                    </tr>
                    <tr>
                        <td>Ryan Rahman Setiawan</td>
                        <td>ryanrahman26@gmail.com</td>
                        <td>
                            Rp. 100.000
                        </td>
                        <td>Uang Tunai</td>
                        <td>
                            Rp. 50.000
                        </td>
                        <td>
                            <span class="label label-warning">Pending</span>
                        </td>
                        <td><a href="#" class="btn btn-success"><i class="fa fa-check"></i> Setujui</a>
                            <a href="#" class="btn btn-danger"><i class="fa fa-trash-o"></i> Tolak</a>
                        </td>
                    </tr>
                    <tr>
                        <td>Ryan Rahman Setiawan</td>
                        <td>ryanrahman26@gmail.com</td>
                        <td>
                            Rp. 100.000
                        </td>
                        <td>Uang Tunai</td>
                        <td>
                            Rp. 50.000
                        </td>
                        <td>
                            <span class="label label-warning">Pending</span>
                        </td>
                        <td><a href="#" class="btn btn-success"><i class="fa fa-check"></i> Setujui</a>
                            <a href="#" class="btn btn-danger"><i class="fa fa-trash-o"></i> Tolak</a>
                        </td>
                    </tr>
                    <tr>
                        <td>Ryan Rahman Setiawan</td>
                        <td>ryanrahman26@gmail.com</td>
                        <td>
                            Rp. 100.000
                        </td>
                        <td>Uang Tunai</td>
                        <td>
                            Rp. 50.000
                        </td>
                        <td>
                            <span class="label label-warning">Pending</span>
                        </td>
                        <td><a href="#" class="btn btn-success"><i class="fa fa-check"></i> Setujui</a>
                            <a href="#" class="btn btn-danger"><i class="fa fa-trash-o"></i> Tolak</a>
                        </td>
                    </tr>
                </tbody>
                <tfoot>
                    <tr>
                        <th>Nama</th>
                        <th>E-mail</th>
                        <th>Total Saldo</th>
                        <th>Tipe Pencarian</th>
                        <th>Request Pencairan</th>
                        <th>
                            Status
                        </th>
                        <th>
                            Aksi
                        </th>
                    </tr>
                </tfoot>
            </table>
        </div>
        <!-- /.box-body -->
    </div>
    <!-- /.box -->
@endsection

@section('scripts')
    <!-- DataTables -->
    <script src="{{ asset('/adminlte/plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('/adminlte/plugins/datatables/dataTables.bootstrap.min.js') }}"></script>

    <!-- page script -->
    <script>
      $(function () {
        $("#example1").DataTable();
        $('#example2').DataTable({
          "paging": true,
          "lengthChange": false,
          "searching": false,
          "ordering": true,
          "info": true,
          "autoWidth": false
        });
      });
    </script>
@endsection
