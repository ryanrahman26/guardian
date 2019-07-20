@extends('layouts.app')

@section('dashboard')
    Dashboard
    <small>Admin</small>
@endsection

@section('breadcrumb')
    <li><a href="{{ url('home') }}"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">Request Pencairan Dana</li>
@endsection

@section('content')
    <div class="row">
        <div class="col-sm-6">
        <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Tentukan Jumlah Pencairan</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form">
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Saldo saat ini</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" value="Rp. 100.000" disabled>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Masukan jumlah saldo yang ingin dicairkan</label>
                  <input type="text" class="form-control" id="exampleInputPassword1" value="Rp. 50.000">
                  <span class="help-block">Tidak boleh melebihi saldo saat ini.</span>
                </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-info btn-block">Ok</button>
              </div>
            </form>
          </div>
          <!-- /.box -->
      </div>

      <div class="col-sm-6">
      <div class="box box-primary">
          <div class="box-header with-border">
            <h3 class="box-title">Request Pencairan Dana</h3>
          </div>
          <!-- /.box-header -->
          <!-- form start -->
          <form role="form">
            <div class="box-body">
                <div class="form-group">
                    <p>
                        Saldo yang ingin dicairkan: <b>Rp. 50.000</b>
                    </p>
                </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Pilih Tipe Pencairan</label>
                <div class="form-group">
                  <div class="radio">
                    <label>
                      <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
                      <p>
                          Uang Tunai
                      </p>
                      <b>(Rp. <small>Jumlah Pencairan</small>)</b>
                    </label>
                  </div>
                  <div class="radio">
                    <label>
                      <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
                      <p>
                          Voucher/Token Listrik
                      </p>

                       <b>(Rp. 20.000/Rp. 50.000/Rp. 200.000/Rp. 500.000/Rp. 1.000.000/Rp. 5.000.000)</b>
                    </label>
                  </div>
                  <div class="radio">
                    <label>
                      <input type="radio" name="optionsRadios" id="optionsRadios3" value="option3">
                      <p>
                          Beras
                      </p>

                      <b>(Rp. 10.000/Kg)</b>
                    </label>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <p>Anda akan melakukan request <b>Uang Tunai</b> sebesar: <b>Rp. 50.000</b></p>

                <table class="table table-bordered">
                    <caption>
                        Detail Transfer
                    </caption>

                    <tr>
                        <th>
                            Nama
                        </th>
                        <th>
                            No Rekening
                        </th>
                        <th>
                            Kode Bank
                        </th>
                        <th>
                            Nama Bank
                        </th>
                    </tr>

                    <tr>
                        <td>
                            Ryan Rahman Setiawan
                        </td>
                        <td>
                            7912-231242-232323
                        </td>
                        <td>
                            002
                        </td>
                        <td>
                            BANK RAKYAT INDONESIA (BRI)
                        </td>
                    </tr>
                </table>

              </div>
            </div>
            <!-- /.box-body -->

            <div class="box-footer">
              <button type="submit" class="btn btn-primary btn-block">Request Pencairan</button>
            </div>
          </form>
        </div>
        <!-- /.box -->
    </div>
    </div>
@endsection
