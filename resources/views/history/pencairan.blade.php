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
    <li class="active">History Pencairan</li>
@endsection

@section('content')
    <div class="box">
        <div class="box-header">
            <h3 class="box-title">History Pencairan</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>Kode Transaksi</th>
                        <th>Total Saldo</th>
                        <th>Tipe Pencairan</th>
                        <th>Request Pencairan</th>
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
                            <span class="label label-success">Disetujui</span>
                        </td>
                        <td>
                            Rp. 50.000
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
                            <span class="label label-danger">Ditolak</span>
                        </td>
                        <td>
                            Rp. 100.000
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
                            <span class="label label-success">Disetujui</span>
                        </td>
                        <td>
                            Rp. 50.000
                        </td>
                    </tr>
                </tbody>
                <tfoot>
                    <tr>
                        <th>Kode Transaksi</th>
                        <th>Total Saldo</th>
                        <th>Tipe Pencairan</th>
                        <th>Request Pencairan</th>
                        <th>
                            Status
                        </th>
                        <th>
                            Saldo Baru
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
