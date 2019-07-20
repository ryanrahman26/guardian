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
    <li class="active">Laporan</li>
@endsection

@section('content')
    <div class="box">
        <div class="box-header">
            <h3 class="box-title">Laporan</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <p><a href="#" class="btn btn-danger"><i class="fa fa-file-pdf-o"></i> Export PDF</a></p>

            <table class="table table-bordered">
                <tr>
                  <th>Total Setoran: 5</th>
                  <th>Total Pencairan: 5</th>
                  <th>Total Users: 5</th>
                  <th>Total Pos: 5</th>
                </tr>
            </table>

            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>Pencairan</th>
                        <th>
                            Setoran
                        </th>
                        <th>User</th>
                        <th>Pos</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>PCR1234567891234567</td>
                        <td>STR1234567891234567</td>
                        <td>
                            ryanrahman26@gmail.com
                        </td>
                        <td>Bandung</td>
                    </tr>
                    <tr>
                        <td>PCR1234567891234567</td>
                        <td>STR1234567891234567</td>
                        <td>
                            ryanrahman26@gmail.com
                        </td>
                        <td>Bandung</td>
                    </tr>
                    <tr>
                        <td>PCR1234567891234567</td>
                        <td>STR1234567891234567</td>
                        <td>
                            ryanrahman26@gmail.com
                        </td>
                        <td>Bandung</td>
                    </tr>
                    <tr>
                        <td>PCR1234567891234567</td>
                        <td>STR1234567891234567</td>
                        <td>
                            ryanrahman26@gmail.com
                        </td>
                        <td>Bandung</td>
                    </tr>
                    <tr>
                        <td>PCR1234567891234567</td>
                        <td>STR1234567891234567</td>
                        <td>
                            ryanrahman26@gmail.com
                        </td>
                        <td>Bandung</td>
                    </tr>
                </tbody>
                <tfoot>
                    <tr>
                        <th>Pencairan</th>
                        <th>
                            Setoran
                        </th>
                        <th>User</th>
                        <th>Pos</th>
                    </tr>
                </tfoot>
            </table>

            <p>
                <a href="#" class="btn btn-danger"><i class="fa fa-file-pdf-o"></i> Export PDF</a>
            </p>
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
