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
                                <h3 class="card-title">Tambah Data Orang Tua</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <form action="{{ url('/orangtua') }}" method="POST">
                                    @csrf
                                    <h5 mt-3>Data User</h5>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <label>Email</label>
                                            <input type="email" name="email" class="form-control" required>
                                        </div>
                                        <div class="col-sm-6">
                                            <label>Password</label>
                                            <input type="password" name="password" class="form-control" required>
                                        </div>
                                    </div>
                                    <hr>
                                    <h5 mt-3>Data Orangtua</h5>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Nama Ayah</label>
                                                <input type="text" name="nama_ayah" class="form-control" required>
                                            </div>
                                            <div class="form-group">
                                                <label>Nama Balita</label>
                                                <input type="text" name="nama_balita" class="form-control" required>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Nama Ibu</label>
                                                <input type="text" name="nama_ibu" class="form-control" required>
                                            </div>
                                            <div class="form-group">
                                                <label>Jenis Kelamin</label>
                                                <select class="form-control select2" name="jenis_kelamin">
                                                    <option disabled selected>Pilih Jenis Kelamin</option>
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
                                                <input type="number" name="no_hp" class="form-control" required>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Nomor Darurat</label>
                                                <input type="number" name="no_darurat" class="form-control" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Alamat</label>
                                        <textarea class="form-control" rows="4" columns="3" name="alamat" required></textarea>
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
