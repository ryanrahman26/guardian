@extends('layouts.app')

@section('dashboard')
    Profile
    <small>Edit Profile</small>
@endsection

@section('breadcrumb')
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li><a href="{{ url('/setting/profile/') }}">Profile</a></li>
    <li class="active">Edit Profile</li>
@endsection

@section('content')
    <div class="row">
        <div class="col-md-6">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Edit Profil</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                {!! Form::model(auth()->user(), ['url' => url('/setting/profile'), 'method' => 'post', 'files' => 'true']) !!}
                <div class="box-body">
                    <div class="form-group has-feedback{{ $errors->has('card_id') ? ' has-error' : '' }}">
                        {!! Form::label('card_id', 'Card ID') !!}

                        {!! Form::text('card_id', null, ['class' => 'form-control', 'placeholder' => 'Card ID', 'disabled' => 'disabled']) !!}
                        {!! $errors->first('card_id', '<p class="help-block">:message</p>') !!}
                    </div>

                    <div class="form-group has-feedback{{ $errors->has('name') ? ' has-error' : '' }}">
                        {!! Form::label('name', 'Nama') !!}

                        {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Nama']) !!}
                        {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
                    </div>

                    <div class="form-group has-feedback{{ $errors->has('email') ? ' has-error' : '' }}">
                        {!! Form::label('email', 'Email') !!}

                        {!! Form::text('email', null, ['class' => 'form-control', 'placeholder' => 'Email']) !!}
                        {!! $errors->first('email', '<p class="help-block">:message</p>') !!}
                    </div>

                    <div class="form-group has-feedback{{ $errors->has('avatar') ? ' has-error' : '' }}">
                        {!! Form::label('avatar', 'Foto Profil') !!}

                        {!! Form::file('avatar', ['class' => 'form-control']) !!}
                        <p class="help-block">Pilih foto profil</p>
                        {!! $errors->first('avatar', '<p class="help-block">:message</p>') !!}
                    </div>

                    <div class="form-group has-feedback{{ $errors->has('tanggal_lahir') ? ' has-error' : '' }}">
                        {!! Form::label('tanggal_lahir', 'Tanggal Lahir') !!}

                        {!! Form::text('tanggal_lahir', '26/09/1997', ['class' => 'form-control', 'placeholder' => 'Tanggal Lahir']) !!}
                        {!! $errors->first('tanggal_lahir', '<p class="help-block">:message</p>') !!}
                    </div>

                    <div class="form-group has-feedback{{ $errors->has('alamat') ? ' has-error' : '' }}">
                        {!! Form::label('alamat', 'Alamat') !!}

                        {!! Form::text('alamat', 'Jl. Ganet. Perumahan Griya Hang Tuah Permai', ['class' => 'form-control', 'placeholder' => 'Alamat']) !!}
                        {!! $errors->first('alamat', '<p class="help-block">:message</p>') !!}
                    </div>

                    <div class="form-group has-feedback{{ $errors->has('no_telepon') ? ' has-error' : '' }}">
                        {!! Form::label('no_telepon', 'No Telepon') !!}

                        {!! Form::text('no_telepon', '089623708859', ['class' => 'form-control', 'placeholder' => 'No Telepon']) !!}
                        {!! $errors->first('no_telepon', '<p class="help-block">:message</p>') !!}
                    </div>

                    <div class="form-group has-feedback{{ $errors->has('no_rekening') ? ' has-error' : '' }}">
                        {!! Form::label('no_rekening', 'No Rekening') !!}

                        {!! Form::text('no_rekening', '769-12323-512323', ['class' => 'form-control', 'placeholder' => 'No Rekening']) !!}
                        {!! $errors->first('kode_bank', '<p class="help-block">:message</p>') !!}
                    </div>

                    <div class="form-group has-feedback{{ $errors->has('kode_bank') ? ' has-error' : '' }}">
                        {!! Form::label('kode_bank', 'Kode Bank') !!}

                        {!! Form::text('kode_bank', '002', ['class' => 'form-control', 'placeholder' => 'Kode Bank']) !!}
                        {!! $errors->first('kode_bank', '<p class="help-block">:message</p>') !!}
                    </div>

                    <div class="form-group has-feedback{{ $errors->has('no_meteran') ? ' has-error' : '' }}">
                        {!! Form::label('no_meteran', 'No Meteran') !!}

                        {!! Form::text('no_meteran', '01100417771', ['class' => 'form-control', 'placeholder' => 'No Meteran']) !!}
                        {!! $errors->first('no_meteran', '<p class="help-block">:message</p>') !!}
                    </div>

                    <div class="form-group has-feedback{{ $errors->has('Besar Daya Listrik') ? ' has-error' : '' }}">
                        {!! Form::label('no_meteran', 'No Meteran') !!}

                        {!! Form::text('no_meteran', '01100417771', ['class' => 'form-control', 'placeholder' => 'No Meteran']) !!}
                        {!! $errors->first('no_meteran', '<p class="help-block">:message</p>') !!}
                    </div>

                    <div class="form-group has-feedback{{ $errors->has('daya_listrik') ? ' has-error' : '' }}">
                        {!! Form::label('daya_listrik', 'Besar Daya Listrik') !!}

                        {!! Form::select('daya_listrik', ['450' => '450 VA', '900' => '900 VA', '1300' => '1300 VA', '2200' => '2200 VA', '3500' => '3500 VA', '4400' => '4400 VA', '5500' => '5500 VA', '6600' => '6600 VA Keatas'], null, ['class' => 'form-control']) !!}
                        {!! $errors->first('no_meteran', '<p class="help-block">:message</p>') !!}
                    </div>
                </div>
                <!-- /.box-body -->
                <div class="box-footer">
                    {!! Form::submit('Simpan', ['class' => 'btn btn-primary']) !!}
                </div>
                <!-- /.box-footer -->
                {!! Form::close() !!}
            </div>
            <!-- /.box -->
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->
@endsection
