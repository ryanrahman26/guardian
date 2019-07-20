@extends('layouts.app')

@section('dashboard')
    Profil
    <small>Profil saya</small>
@endsection

@section('breadcrumb')
    <li><a href="{{ url('home') }}"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">Profil</li>
@endsection

@section('content')
    <div class="row">
        <div class="col-md-6">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Profil</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <table class="table table-bordered">
                        <tr>
                            <td class="text-muted">Card ID</td>
                            <td>{{ auth()->user()->card_id }}</td>
                        </tr>
                        <tr>
                            <td class="text-muted">Email</td>
                            <td>{{ auth()->user()->email }}</td>
                        </tr>
                        <tr>
                            <td class="text-muted">Foto Profil</td>
                            <td><img src="{{ asset('/img/'. auth()->user()->avatar) }}" class="img-circle img-responsive" height="64" width="64" alt="User Image"></td>
                        </tr>
                        <tr>
                            <td class="text-muted">Name</td>
                            <td>{{ auth()->user()->name }}</td>
                        </tr>
                        <tr>
                            <td class="text-muted">Tanggal Lahir</td>
                            <td>26/09/1997</td>
                        </tr>
                        <tr>
                            <td class="text-muted">Alamat</td>
                            <td>Jl. Ganet. Perumahan Griya Hang Tuah Permai</td>
                        </tr>
                        <tr>
                            <td class="text-muted">No Telepon</td>
                            <td>089623708859</td>
                        </tr>
                        <tr>
                            <td class="text-muted">No Rekening</td>
                            <td>769-12323-512323</td>
                        </tr>
                        <tr>
                            <td class="text-muted">Kode Bank</td>
                            <td>002</td>
                        </tr>
                        <tr>
                            <td class="text-muted">Nama Bank</td>
                            <td>BANK RAKYAT INDONESIA</td>
                        </tr>
                        <tr>
                            <td class="text-muted">No Meteran</td>
                            <td>01100417771</td>
                        </tr>
                        <tr>
                            <td class="text-muted">Besar Daya Listrik</td>
                            <td>900 VA</td>
                        </tr>
                        <tr>
                            <td class="text-muted">Login Terakhir</td>
                            <td>{{ auth()->user()->last_login }}</td>
                        </tr>
                    </table>
                </div>
                <!-- /.box-body -->
                <div class="box-footer clearfix">
                  <a href="{{ url('/setting/profile/edit') }}" class="btn btn-info">Ubah</a>
                </div>
            </div>
            <!-- /.box -->
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->
@endsection
