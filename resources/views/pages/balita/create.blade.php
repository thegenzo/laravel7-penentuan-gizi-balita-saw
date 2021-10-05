@extends('layout.app')

@section('title', 'SPKBalita | Tambah Data')

@push('addon-style')
<!-- Select2 -->
<link rel="stylesheet" href="{{ asset('plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css') }}">
<link rel="stylesheet" href="{{ asset('plugins/select2/css/select2.min.css') }}">
@endpush

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
                                <h3 class="card-title">Tambah Data Balita</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <form action="{{ url('/balita') }}" method="POST">
                                    @csrf
                                    <h5 mt-3>Data Balita</h5>
                                    <div class="form-group">
                                        <label>Nama Balita</label>
                                        <select name="id_balita" class="form-control select2">
                                            <option disabled selected>Pilih Nama Balita</option>
                                            @foreach($orangtua as $balita)
                                            <option value="{{ $balita->id }}">{{ $balita->nama_balita }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label>Umur (bulan)</label>
                                            <input type="number" name="umur" class="form-control" required>
                                        </div>
                                        <div class="col-sm-4">
                                            <label>Berat Badan (Kg)</label>
                                            <input type="number" step="any" name="berat_badan" class="form-control" required>
                                        </div>
                                        <div class="col-sm-4">
                                            <label>Tinggi Badan (cm)</label>
                                            <input type="number" step="any" name="tinggi_badan" class="form-control" required>
                                        </div>
                                    </div>
                                    <br>
                                    <a href="/balita" class="btn btn-primary">Kembali</a>
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
    </div>
    </section>
    </div>

@endsection
@push('addon-script')
<!-- Select2 -->
<script src="{{ asset('plugins/select2/js/select2.full.min.js') }}"></script>
<script type="text/javascript">
    $('select').select2({
        theme: 'bootstrap4',
    });
</script>
@endpush