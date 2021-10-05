@extends('layout.app')

@section('title', 'SPKBalita | Cek Gizi Balita')

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
                    <div class="col-sm-7">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Cek Gizi Balita</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <form action="{{ url('/cek-balita/status-gizi') }}" method="POST">
                                    @csrf
                                    <h5 mt-3>Data Balita</h5>
                                    <div class="form-group">
                                        <label>Nama Balita</label>
                                        <select name="id_balita" class="form-control select2">
                                            <option disabled selected>Pilih Nama Balita</option>
                                            @foreach($balita as $data)
                                            <option value="{{ $data->id_balita }}">{{ $data->orangtua->nama_balita }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <button type="submit" class="btn btn-success btn-fill pull-right">Proses</button>
                                </form>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card-body -->
                    </div>
                </div>
                <div class="col-sm-5"></div>
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