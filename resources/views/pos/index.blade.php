@extends('layouts.app')

@section('css')
    <style>
        #map {
            width: 100%;
            height: 400px;
            background-color: grey;
        }
    </style>
@endsection

@section('body-alt')
    onload="initialize()"
@endsection

@section('dashboard')
    Dashboard
    <small>Admin</small>
@endsection

@section('breadcrumb')
    <li><a href="{{ url('home') }}"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">Pemantauan Pos</li>
@endsection

@section('content')
    <div class="box box-default">
        <div class="box-header with-border">
          <h3 class="box-title"><i class="fa fa-map"></i> Lokasi Instalasi Pos - Bank Sampah Digital <small>29 September 2017. 10:00</small></h3>
        </div>
        <div class="box-body">
            <div id="map" style="width: 100%; height: 400px;"></div>

            <table class="table table-stripped table-bordered">
                <caption>
                    Keterangan
                </caption>
                <tr>
                </tr>
                <tr>
                    <td>
                        <img src="{{ asset('img/marker-green.png') }}" width="16" style="margin-right: 20px;"/>
                        <b>Kapasitas Kosong: 0% - 50%</b>
                    </td>
                    <td>
                        <img src="{{ asset('img/marker-yellow.png') }}" width="16" style="margin-right: 20px;"/>
                        <b>Kapasitas Sedang: 50% - 80%</b>
                    </td>
                    <td>
                        <img src="{{ asset('img/marker-red.png') }}" width="16" style="margin-right: 20px;"/>
                        <b>Kapasitas Penuh: 80% - 100%</b>
                    </td>
                </tr>
            </table>

            <table class="table table-stripped table-bordered">
                <caption>
                    Detail Pos
                </caption>

                <tr>
                    <th>
                        Nama Pos
                    </th>
                    <th>
                        Lokasi Pos
                    </th>
                    <th>
                        Kapasitas
                    </th>
                </tr>

                <tr>
                    <td>
                        Taman Tepi Laut
                    </td>
                    <td>
                        Jalan Bayangkara, Kota Tanjungpinang, Kepulauan Riau
                    </td>
                    <td>
                        <button class="btn btn-success btn-xs">Plastik <span class="badge">15%</span></button>
                        <button class="btn btn-warning btn-xs">Metal <span class="badge">55%</span></button>
                        <button class="btn btn-danger btn-xs">Kaca <span class="badge">80%</span></button>
                        <button class="btn btn-success btn-xs">Lainnya <span class="badge">30%</span></button>
                    </td>
                    <td style="max-width:200px;">
                        <p class="">
                            <span class="text-danger" style="font-weight:700;"><span class="badge">1</span> Kategori Sampah Kaca Sudah Penuh!</span> <span class="text-default">Silahkan Ambil Sampah di Taman Tepi Laut Tanjungpinang.</span>
                        </p>
                    </td>
                </tr>
                <tr>
                    <td>
                        Tugu Pensil
                    </td>
                    <td>
                        Jalan Agus Salim, Kota Tanjungpinang, Kepulauan Riau
                    </td>
                    <td>
                        <button class="btn btn-success btn-xs">Plastik <span class="badge">15%</span></button>
                        <button class="btn btn-warning btn-xs">Metal <span class="badge">55%</span></button>
                        <button class="btn btn-danger btn-xs">Kaca <span class="badge">80%</span></button>
                        <button class="btn btn-danger btn-xs">Lainnya <span class="badge">90%</span></button>
                    </td>
                    <td style="max-width:200px;">
                        <p class="">
                            <span class="text-danger" style="font-weight:700;"><span class="badge">1</span> Kategori Sampah Kaca Sudah Penuh!</span>
                            <br />
                            <span class="text-danger" style="font-weight:700;"><span class="badge">2</span> Kategori Sampah Lainnya Sudah Penuh!</span>
                            <span class="text-default">Silahkan Ambil Sampah di Tugu Pensil Tanjungpinang.</span>
                        </p>
                    </td>
                </tr>
                <tr>
                    <td>
                        Cafe Puncak
                    </td>
                    <td>
                        Jl. Bukit Cermin No.44, Bukit Cermin, Kota Tanjung Pinang, Kepulauan Riau
                    </td>
                    <td>
                        <button class="btn btn-success btn-xs">Plastik <span class="badge">15%</span></button>
                        <button class="btn btn-danger btn-xs">Metal <span class="badge">95%</span></button>
                        <button class="btn btn-warning btn-xs">Kaca <span class="badge">50%</span></button>
                        <button class="btn btn-danger btn-xs">Lainnya <span class="badge">90%</span></button>
                    </td>
                    <td style="max-width:200px;">
                        <p class="">
                            <span class="text-danger" style="font-weight:700;"><span class="badge">1</span> Kategori Sampah Metal Sudah Penuh!</span>
                            <br />
                            <span class="text-danger" style="font-weight:700;"><span class="badge">2</span> Kategori Sampah Lainnya Sudah Penuh!</span>
                            <span class="text-default">Silahkan Ambil Sampah di Cafe Puncak Kota Tanjungpinang</span>
                        </p>
                    </td>
                </tr>
                <tr>
                    <td>
                        Ayam Penyet RIA
                    </td>
                    <td>
                        Jl. D.I Panjaitan KM. 6, Melayu Kota Piring, Kota Tanjungpinang, Kepualaun Riau
                    </td>
                    <td>
                        <button class="btn btn-danger btn-xs">Plastik <span class="badge">95%</span></button>
                        <button class="btn btn-warning btn-xs">Metal <span class="badge">55%</span></button>
                        <button class="btn btn-danger btn-xs">Kaca <span class="badge">80%</span></button>
                        <button class="btn btn-success btn-xs">Lainnya <span class="badge">30%</span></button>
                    </td>
                    <td style="max-width:200px;">
                        <p class="">
                            <span class="text-danger" style="font-weight:700;"><span class="badge">1</span> Kategori Sampah Plastik Sudah Penuh!</span>
                            <br />
                            <span class="text-danger" style="font-weight:700;"><span class="badge">2</span> Kategori Sampah Kaca Sudah Penuh!</span>
                            <span class="text-default">Silahkan Ambil Sampah di Ayam Penyet RIA KM 6, Kota Tanjungpinang.</span>
                        </p>
                    </td>
                </tr>
                <tr>
                    <td>
                        Morning Bakery
                    </td>
                    <td>
                        Jalan D.I. Panjaitan KM. 7, Melayu Kota Piring, Kota Tanjungpinang, Kepulauan Riau
                    </td>
                    <td>
                        <button class="btn btn-danger btn-xs">Plastik <span class="badge">95%</span></button>
                        <button class="btn btn-warning btn-xs">Metal <span class="badge">55%</span></button>
                        <button class="btn btn-success btn-xs">Kaca <span class="badge">10%</span></button>
                        <button class="btn btn-danger btn-xs">Lainnya <span class="badge">30%</span></button>
                    </td>
                    <td style="max-width:200px;">
                        <p class="">
                            <span class="text-danger" style="font-weight:700;"><span class="badge">1</span> Kategori Sampah Plastik Sudah Penuh!</span>
                            <br />
                            <span class="text-danger" style="font-weight:700;"><span class="badge">2</span> Kategori Sampah Lainnya Sudah Penuh!</span>
                            <span class="text-default">Silahkan Ambil di Morning Bakery KM 7 Kota Tanjungpinang</span>
                        </p>
                    </td>
                </tr>
            </table>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
    var map;

    function initMap() {
      map = new google.maps.Map(document.getElementById('map'), {
        zoom: 14,
        center: new google.maps.LatLng(0.918732, 104.464065),
        mapTypeId: 'roadmap',
      });

      var iconBase = '/img/';
      var icons = {
        marker_red: {
          icon: iconBase + 'marker-red.png'
        },
        marker_yellow: {
          icon: iconBase + 'marker-yellow.png'
        },
        marker_green: {
          icon: iconBase + 'marker-green.png'
        }
      };

      function addMarker(feature) {
        var marker = new google.maps.Marker({
          position: feature.position,
          icon: icons[feature.type].icon,
          map: map
        });
      }

      var features = [
        {
          position: new google.maps.LatLng(0.920698, 104.439214),
          type: 'marker_green'
        }, {
          position: new google.maps.LatLng(0.927879, 104.438437),
          type: 'marker_red'
        }, {
          position: new google.maps.LatLng(0.923466, 104.450471),
          type: 'marker_yellow'
        }, {
          position: new google.maps.LatLng(0.915881, 104.480101),
          type: 'marker_red'
        }, {
          position: new google.maps.LatLng(0.916857, 104.483963),
          type: 'marker_green'
      },
      ];

      for (var i = 0, feature; feature = features[i]; i++) {
        addMarker(feature);
      }
    }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCPvpAWFQeDEJzQOjDHSbYKiRUIiXBSr3E
    &callback=initMap"
    async defer></script>
@endsection
