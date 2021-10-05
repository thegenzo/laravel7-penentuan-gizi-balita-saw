@extends('layout.app')

@section('title', 'SPKBalita | Tambah Data IMT /U')
@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
            </div>
        </div>
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-3"></div>
                    <div class="col-sm-6">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Tambah Data IMT /U</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <form action="{{ url('/imtu', $imtu->id) }}" method="POST">
                                    @method('PUT')
                                    @csrf
                                    <h5 mt-3>Data BB /U</h5>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <label>Umur (bulan)</label>
                                            <input type="number" name="umur" class="form-control" value={{ $imtu->umur }} required>
                                        </div>
                                        <div class="col-sm-6">
                                            <label>-3 SD</label>
                                            <input type="number" step="any" name="min3sd" class="form-control" value={{ $imtu->min3sd }} required>
                                            <label>-2 SD</label>
                                            <input type="number" step="any" name="min2sd" class="form-control" value={{ $imtu->min2sd }} required>
                                            <label>-1 SD</label>
                                            <input type="number" step="any" name="min1sd" class="form-control" value={{ $imtu->min1sd }} required>
                                            <label>Median</label>
                                            <input type="number" step="any" name="median" class="form-control" value={{ $imtu->median }} required>
                                            <label>+1 SD</label>
                                            <input type="number" step="any" name="plus1sd" class="form-control" value={{ $imtu->plus1sd }} required>
                                            <label>+2 SD</label>
                                            <input type="number" step="any" name="plus2sd" class="form-control" value={{ $imtu->plus2sd }} required>
                                            <label>+3 SD</label>
                                            <input type="number" step="any" name="plus3sd" class="form-control" value={{ $imtu->plus3sd }} required>
                                        </div>
                                    </div>
                                    <br>
                                    <a href="/imtu" class="btn btn-primary">Kembali</a>
                                    <button type="submit" class="btn btn-success btn-fill pull-right">Simpan</button>
                                </form>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card-body -->
                    </div>
                </div>
                <div class="col-sm-3"></div>
            </div>
    </div>
    </section>
    </div>

@endsection