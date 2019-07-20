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
    <li class="active">History Setoran</li>
@endsection

@section('content')
    <div class="box">
        <div class="box-header">
            <h3 class="box-title">History Setoran</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>Kode Setoran</th>
                        <th>Nama Barang</th>
                        <th>Jenis Barang</th>
                        <th>Harga Barang</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><a href="#">STR1234567891234567</a></td>
                        <td>Ale-ale</td>
                        <td>
                            Plastik
                        </td>
                        <td>Rp. 100</td>
                    </tr>
                    <tr>
                        <td><a href="#">STR1234567891234567</a></td>
                        <td>Ale-ale</td>
                        <td>
                            Plastik
                        </td>
                        <td>Rp. 100</td>
                    </tr>
                    <tr>
                        <td><a href="#">STR1234567891234567</a></td>
                        <td>Ale-ale</td>
                        <td>
                            Plastik
                        </td>
                        <td>Rp. 100</td>
                    </tr>
                    <tr>
                        <td><a href="#">STR1234567891234567</a></td>
                        <td>Ale-ale</td>
                        <td>
                            Plastik
                        </td>
                        <td>Rp. 100</td>
                    </tr>
                    <tr>
                        <td><a href="#">STR1234567891234567</a></td>
                        <td>Ale-ale</td>
                        <td>
                            Plastik
                        </td>
                        <td>Rp. 100</td>
                    </tr>
                </tbody>
                <tfoot>
                    <tr>
                        <th>Kode Setoran</th>
                        <th>Nama Barang</th>
                        <th>Jenis Barang</th>
                        <th>Harga Barang</th>
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
