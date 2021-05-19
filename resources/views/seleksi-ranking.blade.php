@extends('layout.app')

@section('title', 'SPKWisata| Seleksi')

@section('content')
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="" class="nav-link">Perankingan</a>
            </li>
        </ul>
    </nav>
    <!-- End Nevbar-->
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
            </div>
        </div>
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-1"></div>
                    <div class="col-sm-10">
                        <h2 class="text-center">Rekomendasi Objek Wisata</h2>
                    </div>
                    <div class="col-sm-1"></div>
                </div>
                <div class="row">
                    <div class="col-sm-1"></div>
                    <div class="col-sm-10">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Bobot Kepentingan dan Trennya</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Objek Wisata</th>
                                            <th class="text-center">Harga Tiket</th>
                                            <th class="text-center">Jumlah Fasilitas</th>
                                            <th>Keterangan</th>
                                            <th class="text-center">Grade Fasilitas</th>
                                            <th class="text-center">Bobot Fuzzy</th>
                                            <th>Tingkat Rekomendasi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($result as $res)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $res->wisata }}</td>
                                                <td class="text-center">{{ 'Rp. ' . number_format($res->hrg_tiket) }}</td>
                                                <td class="text-center">{{ $res->jml_fasilitas }}</td>
                                                <td>{{ $res->ket_fasilitas }}</td>
                                                <td class="text-center">{{ $res->grade_fasilitas }}</td>
                                                <td class="text-center">{{ $res->bobot_fuzzy }}</td>
                                                <td>{{ $res->ket_rating }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <div class="col-sm-1"></div>
                </div>
                <div class="row">
                    <div class="col-sm-1"></div>
                    <div class="col-sm-10">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Detail Perhitungan Logika Fuzzy</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Objek Wisata</th>
                                            <th class="text-center">Bobot Harga</th>
                                            <th class="text-center">Bobot Fasilitas</th>
                                            <th class="text-center">Jumlah</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($result as $res)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $res->wisata }}</td>
                                            <td class="text-center">{{ $res->bobot_hrg }}</td>
                                            <td class="text-center">{{ $res->bobot_fas }}</td>
                                            <td class="text-center">{{ $res->bobot_fuzzy }}</td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>
                    </div>
                    <div class="col-sm-1"></div>
                </div>
            </div>
        </section>
        </div>
    </div>
    <script>
        window.print();

    </script>
@endsection
