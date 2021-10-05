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
                          <h3 class="card-title">Edit Data Orang Tua</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <form action="{{ route('orangtua.update', $orangtua->id) }}" method="POST">
                              @method('PUT')
                              @csrf
                              <h5 mt-3>Data Orangtua</h5>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Nama Ayah</label>
                                                <input type="text" name="nama_ayah" class="form-control" value="{{ $orangtua->user->name }}" required>
                                            </div>
                                            <div class="form-group">
                                                <label>Nama Balita</label>
                                                <input type="text" name="nama_balita" class="form-control" value="{{ $orangtua->nama_balita }}" required>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Nama Ibu</label>
                                                <input type="text" name="nama_ibu" class="form-control" value="{{ $orangtua->nama_ibu }}" required>
                                            </div>
                                            <div class="form-group">
                                                <label>Jenis Kelamin</label>
                                                <select class="form-control select2" name="jenis_kelamin">
                                                    <option hidden selected value="{{ $orangtua->jenis_kelamin }}">{{ $orangtua->jenis_kelamin }}</option>
                                                    <option value="Laki-laki">Laki-laki</option>
                                                    <option value="Perempuan">Perempuan</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Nomor handphone yang bisa dihubungi</label>
                                                <input type="number" name="no_hp" class="form-control" value="{{ $orangtua->no_hp }}" required>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Nomor Darurat</label>
                                                <input type="number" name="no_darurat" class="form-control" value="{{ $orangtua->no_darurat }}" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Alamat</label>
                                        <textarea class="form-control" rows="4" columns="3" name="alamat" required>{{ $orangtua->alamat }}</textarea>
                                    </div>
                              <a href="/orangtua" class="btn btn-primary">Kembali</a>
                              <button type="submit" class="btn btn-success btn-fill pull-right">Simpan</button>
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