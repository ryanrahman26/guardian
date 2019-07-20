@extends('layouts.app')

@section('dashboard')
    Dashboard
    <small>Staff</small>
@endsection

@section('breadcrumb')
    <li><a href="{{ url('home') }}"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">Dashboard</li>
@endsection

@section('content')
    <!-- Welcome -->
    <div class="row">
        <div class="col-md-12">
            <div class="callout callout-success">
              <h4>Selamat Datang di Guardian</h4>

              <p>Aplikasi Bank Sampah Digital</p>
              <p>Ini adalah halaman khusus bagi para staff/pengepul sampah Bank Sampah Digital - Guardian.</p>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="{{ asset('adminlte/dist/js/pages/dashboard2.js') }}"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="{{ asset('adminlte/dist/js/demo.js') }}"></script>
@endsection
