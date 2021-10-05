@extends('layout.app')

@section('title', 'SPKBalita | Tambah Data BB /U')
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
                                <h3 class="card-title">Tambah Data BB /U</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <form action="{{ url('/bbu', $bbu->id) }}" method="POST">
                                    @method('PUT')
                                    @csrf
                                    <h5 mt-3>Data BB /U</h5>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <label>Umur (bulan)</label>
                                            <input type="number" name="umur" class="form-control" value={{ $bbu->umur }} required>
                                        </div>
                                        <div class="col-sm-6">
                                            <label>-3 SD</label>
                                            <input type="number" step="any" name="min3sd" class="form-control" value={{ $bbu->min3sd }} required>
                                            <label>-2 SD</label>
                                            <input type="number" step="any" name="min2sd" class="form-control" value={{ $bbu->min2sd }} required>
                                            <label>-1 SD</label>
                                            <input type="number" step="any" name="min1sd" class="form-control" value={{ $bbu->min1sd }} required>
                                            <label>Median</label>
                                            <input type="number" step="any" name="median" class="form-control" value={{ $bbu->median }} required>
                                            <label>+1 SD</label>
                                            <input type="number" step="any" name="plus1sd" class="form-control" value={{ $bbu->plus1sd }} required>
                                            <label>+2 SD</label>
                                            <input type="number" step="any" name="plus2sd" class="form-control" value={{ $bbu->plus2sd }} required>
                                            <label>+3 SD</label>
                                            <input type="number" step="any" name="plus3sd" class="form-control" value={{ $bbu->plus3sd }} required>
                                        </div>
                                    </div>
                                    <br>
                                    <a href="/bbu" class="btn btn-primary">Kembali</a>
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