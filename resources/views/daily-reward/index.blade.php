@extends('layouts.app')

@section('css')
@endsection

@section('dashboard')
    Dashboard
    <small>Member</small>
@endsection

@section('breadcrumb')
    <li><a href="{{ url('home') }}"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">Daily Reward</li>
@endsection

@section('content')
    <div class="info-box bg-yellow">
      <span class="info-box-icon"><i class="fa fa-cart-plus"></i></span>

      <div class="info-box-content">
        <span class="info-box-text">Daily Reward <button type="button" class="btn btn-primary btn-xs" disabled>Request Bonus</button></span>
        <span class="info-box-number">Minimal 50 sampah untuk mendapatkan bonus.</span>

        <div class="progress">
          <div class="progress-bar" style="width: 70%"></div>
        </div>
            <span class="progress-description">
              Anda baru mengumpulkan 30 sampah seharian ini.
            </span>

      </div>
      <!-- /.info-box-content -->
    </div>
    <!-- /.info-box -->

    <div class="info-box text-center" style="background-color: #f1f1f1;">

         <p style="font-size:24px; padding: 70px;">
            DAILY REWARD HARI INI <br /> SALDO <span class="label label-success">RP. 50,000</span>
         </p>
    </div>
    <!-- /.info-box -->


@endsection

@section('scripts')
@endsection
