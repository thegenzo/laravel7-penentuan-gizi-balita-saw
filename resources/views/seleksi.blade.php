@extends('layout.app')

@section('title', 'SPKWisata | Seleksi')
@section('content')
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="" class="nav-link">Seleksi Wisata</a>
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
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Pembobotan</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <form action="{{ url('/seleksi/store') }}" method="POST">
                                    @csrf
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Harga</label>
                                                <br>
                                                <select class="form-control" name="fuzzy_harga" required>
                                                    <option value="" selected hidden>Pilih Harga</option>
                                                    <option value="murah">Murah</option>
                                                    <option value="sedang">Sedang</option>
                                                    <option value="mahal">Mahal</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Fasilitas</label>
                                                <br>
                                                <select class="form-control" name="fuzzy_fasilitas" required>
                                                    <option value="" selected hidden>Pilih Fasilitas</option>
                                                    <option value="kurang">Kurang</option>
                                                    <option value="banyak">Banyak</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-success btn-fill pull-right">Kirim</button>
                                </form>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card-body -->
                    </div>
                </div>
                <div class="col-sm-1"></div>
            </div>
    </div>
    </section>
    </div>
@endsection
