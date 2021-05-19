@extends('layout.app')

@section('title', 'SPKBalita | Edit Data')
@section('content')
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
                          <h3 class="card-title">Edit Data Balita</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <form action="{{ route('balita.update', $balita->id) }}" method="POST">
                              @method('PUT')
                              @csrf
                              <h5 mt-3>Data Balita</h5>
                                    <div class="form-group">
                                        <label>Nama Balita</label>
                                        <input type="text" name="id_balita" class="form-control" value="{{ $balita->orangtua->nama_balita }}" disabled>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label>Umur (bulan)</label>
                                            <input type="number" name="umur" class="form-control" value="{{ $balita->umur }}" required>
                                        </div>
                                        <div class="col-sm-4">
                                            <label>Berat Badan (Kg)</label>
                                            <input type="number" step="any" name="berat_badan" class="form-control" value="{{ $balita->berat_badan }}" required>
                                        </div>
                                        <div class="col-sm-4">
                                            <label>Tinggi Badan (cm)</label>
                                            <input type="number" step="any" name="tinggi_badan" class="form-control" value="{{ $balita->tinggi_badan }}" required>
                                        </div>
                                    </div>
                                    <br>
                                    <a href="/balita" class="btn btn-primary">Kembali</a>
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
    </section>
    </div>
</div>
@endsection